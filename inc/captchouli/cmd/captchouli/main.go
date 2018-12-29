package main

import (
	"flag"
	"fmt"
	"log"
	"net/http"
	"strings"

	"github.com/bakape/captchouli"
)

var defaultTags = [...]string{
	"patchouli_knowledge", "hakurei_reimu", "cirno", "kirisame_marisa",
	"konpaku_youmu", ":>",
}

var test = [...]string{	"anastasia_(idolmaster)"}

var easy = [...]string{
	"anastasia_(idolmaster)", "hibiki_(kantai_collection)", "shiro_(dennou_shoujo_youtuber_shiro)", "illyasviel_von_einzbern",	
}

var medium  = [...]string{ 
	"anastasia_(idolmaster)", "hibiki_(kantai_collection)", "shiro_(dennou_shoujo_youtuber_shiro)", "illyasviel_von_einzbern",	
	"usada_hikaru", "touwa_erio", "nepgear","koshimizu_sachiko" , "shirasaka_koume",  "arcueid_brunestud",  "artoria_pendragon_(all)", "hoshi_shouko",
	"konpaku_youmu", "izayoi_sakuya", "suguri_(character)",
}

func main() {
	address := flag.String("a", ":2087", "address for server to listen on")
	//addressSSL := flag.String("a", ":4087", "address for server to listen on")
	explicit := flag.Bool("e", false,
		"allow explicit rating images in the pool")
	tags := flag.String("t", strings.Join(medium[:], ","),
		`Comma-separated list of tags to use in the pool. At least 3 required.
Note that only tags that are detectable from the character's face should be used.
`)

	flag.Parse()

	var s *captchouli.Service
	err := func() (err error) {
		err = captchouli.Open()
		if err != nil {
			return
		}

		tags := strings.Split(*tags, ",")
		if len(tags) < 3 {
			return fmt.Errorf("not enough tags provided")
		}
		opts := captchouli.Options{
			Tags: tags,
		}
		if *explicit {
			opts.Explicitness = []captchouli.Rating{captchouli.Safe,
				captchouli.Questionable, captchouli.Explicit}
		}

		s, err = captchouli.NewService(opts)
		return
	}()
	if err != nil {
		panic(err)
	}
	defer captchouli.Close()

	//log.Println("listening on " + *address + " & " + *addressSSL)
	log.Println(http.ListenAndServe(*address,  s.Router()))
	//log.Println(http.ListenAndServeTLS(*addressSSL, string("/etc/letsencrypt/live/kissu.moe-0001/fullchain.pem"), string("/etc/letsencrypt/live/kissu.moe-0001/privkey.pem"),  s.Router()))
}