

# Original Kissu - Vichan fork

## Want me to work faster?

[![ko-fi](https://ko-fi.com/img/githubbutton_sm.svg)](https://ko-fi.com/D1D5D5W2P)

currently work on improving kissu's software is limited by a need for cash.

The git log of this project is somewhat messy due to a lack of understanding on how to properly deploy software. After this commit, procedures should be better.

## About
Instead of a long list of instalation instructions consult the vichan wiki and readme. The instalation and setup procedures are identical. What this documentation will provide is an explanation on what has been added to the software since the git log is pretty unclear. It makes use of features from NPFChan and my own to give use cases centered around users having control and information. Though the intent of democratic imageboard usage was has not yet been met, it offers the majority a greater controll over what happens should you chose to enable these features.
<br/><br/>
Kissu has not been tested for upgrades off of NPFChan or Vichan. I have no affiliation with the two parties and am simply using their code as per the lisence agreement.
### Experimental UI
This Version of kissu uses an experimental react UI. I'm not sure if I recomend using it at this point though.
### Polling
Orig. Kissu adds the ability for users to set up polling boards. These are an aditional board/thread type that creates polling threads with questions, keeping track of responses, and outputting them through the charts.js Library
### Captchouli and Filters
Orig. Kissu has the ability to use Bakape's Captchouli captcha software. This is a local captcha provider that uses machine learning to search for faces in boorus and generate captchas based on taggings. Though it is included, it requires some set up. It is a much better alternative to numerical captcha or google's recaptcha.
<br/><br/>
In addition Kissu allows for you to set up captcha bypasses to flood warnings. Instead of outright rejecting a user who is suspected of flooding, it will give them a captcha to solve to verify they are not a spambot.
### IP Scraping
In situations where you are concerned about Proxy and VPN abuse you may configure a crontab to execute tools/scan_proxies.php. This makes use of a python script that will scan a list of sites for IP regex matches and place them into the banned user database table. Over time this will slow down user posting to a snails pace so regular cleaning is required.
### Banners
Orig. Kissu includes a Laverl program to serve banner ads much like 4chan. See https://github.com/ECHibiki/Community-Banners for more info. <br/>
This fork also includes an alterantive way to handle banners through URLs in the $config['url_banner_list'] property. Using this you can easily create a list of banners without ever needing to touch the code or servers. banner-art.php also provides the standard rotate.php behaviour.

### Archive Board
Original Kissu makes partial use of NPFChan's archive functionality. Consult their documentation for usage.

### Weaker Moderation
This creates a situation where all of a moderators delets below a set permission level will always send deleted posts into a defined board. This in effect makes it impossible for mods to delete posts always leaving a trace of information over who did what. Mods can perform all regular functions, they simply can not delete completely. in addition to this the theme "heavy-public-banlist" provides a search field where users can look up which mods did what and what kind of posters are being banned.

### Index Updater Script
This idea was adopted from GNFOS.com to make use of an expanded JSON api and tell users through the browser tab when a new post has been made.

### And many more
In addition to lots of bug fixes and being the only ViChan fork with out of the box compatibility given PHP7.4, there are a many other new adjustments I made to suit the /qa/ community that I have forgotten about.

## Closing Remarks
Not everything in here has been tested and I'm not certain I will improve on this release. If something is outright broken I will fix it, but I don't want the responsibility of keeping an up to date vichan fork unless there is some monetary compensation involved. This is release included as a failsafe in case I vanish and people want to recreate what I have made.
