(function webpackUniversalModuleDefinition(root, factory) {
	if(typeof exports === 'object' && typeof module === 'object')
		module.exports = factory(require("React"), require("ReactDOM"));
	else if(typeof define === 'function' && define.amd)
		define(["React", "ReactDOM"], factory);
	else if(typeof exports === 'object')
		exports["JS_UI"] = factory(require("React"), require("ReactDOM"));
	else
		root["JS_UI"] = factory(root["React"], root["ReactDOM"]);
})(window, function(__WEBPACK_EXTERNAL_MODULE__0__, __WEBPACK_EXTERNAL_MODULE__3__) {
return /******/ (function(modules) { // webpackBootstrap
/******/ 	// The module cache
/******/ 	var installedModules = {};
/******/
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/
/******/ 		// Check if module is in cache
/******/ 		if(installedModules[moduleId]) {
/******/ 			return installedModules[moduleId].exports;
/******/ 		}
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = installedModules[moduleId] = {
/******/ 			i: moduleId,
/******/ 			l: false,
/******/ 			exports: {}
/******/ 		};
/******/
/******/ 		// Execute the module function
/******/ 		modules[moduleId].call(module.exports, module, module.exports, __webpack_require__);
/******/
/******/ 		// Flag the module as loaded
/******/ 		module.l = true;
/******/
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/
/******/
/******/ 	// expose the modules object (__webpack_modules__)
/******/ 	__webpack_require__.m = modules;
/******/
/******/ 	// expose the module cache
/******/ 	__webpack_require__.c = installedModules;
/******/
/******/ 	// define getter function for harmony exports
/******/ 	__webpack_require__.d = function(exports, name, getter) {
/******/ 		if(!__webpack_require__.o(exports, name)) {
/******/ 			Object.defineProperty(exports, name, { enumerable: true, get: getter });
/******/ 		}
/******/ 	};
/******/
/******/ 	// define __esModule on exports
/******/ 	__webpack_require__.r = function(exports) {
/******/ 		if(typeof Symbol !== 'undefined' && Symbol.toStringTag) {
/******/ 			Object.defineProperty(exports, Symbol.toStringTag, { value: 'Module' });
/******/ 		}
/******/ 		Object.defineProperty(exports, '__esModule', { value: true });
/******/ 	};
/******/
/******/ 	// create a fake namespace object
/******/ 	// mode & 1: value is a module id, require it
/******/ 	// mode & 2: merge all properties of value into the ns
/******/ 	// mode & 4: return value when already ns object
/******/ 	// mode & 8|1: behave like require
/******/ 	__webpack_require__.t = function(value, mode) {
/******/ 		if(mode & 1) value = __webpack_require__(value);
/******/ 		if(mode & 8) return value;
/******/ 		if((mode & 4) && typeof value === 'object' && value && value.__esModule) return value;
/******/ 		var ns = Object.create(null);
/******/ 		__webpack_require__.r(ns);
/******/ 		Object.defineProperty(ns, 'default', { enumerable: true, value: value });
/******/ 		if(mode & 2 && typeof value != 'string') for(var key in value) __webpack_require__.d(ns, key, function(key) { return value[key]; }.bind(null, key));
/******/ 		return ns;
/******/ 	};
/******/
/******/ 	// getDefaultExport function for compatibility with non-harmony modules
/******/ 	__webpack_require__.n = function(module) {
/******/ 		var getter = module && module.__esModule ?
/******/ 			function getDefault() { return module['default']; } :
/******/ 			function getModuleExports() { return module; };
/******/ 		__webpack_require__.d(getter, 'a', getter);
/******/ 		return getter;
/******/ 	};
/******/
/******/ 	// Object.prototype.hasOwnProperty.call
/******/ 	__webpack_require__.o = function(object, property) { return Object.prototype.hasOwnProperty.call(object, property); };
/******/
/******/ 	// __webpack_public_path__
/******/ 	__webpack_require__.p = "";
/******/
/******/
/******/ 	// Load entry module and return exports
/******/ 	return __webpack_require__(__webpack_require__.s = 2);
/******/ })
/************************************************************************/
/******/ ([
/* 0 */
/***/ (function(module, exports) {

module.exports = __WEBPACK_EXTERNAL_MODULE__0__;

/***/ }),
/* 1 */
/***/ (function(module, exports, __webpack_require__) {

"use strict";

var __awaiter = (this && this.__awaiter) || function (thisArg, _arguments, P, generator) {
    function adopt(value) { return value instanceof P ? value : new P(function (resolve) { resolve(value); }); }
    return new (P || (P = Promise))(function (resolve, reject) {
        function fulfilled(value) { try { step(generator.next(value)); } catch (e) { reject(e); } }
        function rejected(value) { try { step(generator["throw"](value)); } catch (e) { reject(e); } }
        function step(result) { result.done ? resolve(result.value) : adopt(result.value).then(fulfilled, rejected); }
        step((generator = generator.apply(thisArg, _arguments || [])).next());
    });
};
Object.defineProperty(exports, "__esModule", { value: true });
const React = __webpack_require__(0);
const Post_1 = __webpack_require__(5);
class Thread extends React.Component {
    constructor(props) {
        super(props);
        this.setThreadPostsFetched = this.setThreadPostsFetched.bind(this);
        this.setThreadPostsPreFetched = this.setThreadPostsPreFetched.bind(this);
        this.getThreadJSONData = this.getThreadJSONData.bind(this);
        this.returnPostJSXObject = this.returnPostJSXObject.bind(this);
        this.defineStatePostsArray = this.defineStatePostsArray.bind(this);
        this.state = { spaced_posts: [], error: null };
    }
    componentDidMount() {
        if (!this.props.paged) {
            this.setThreadPostsFetched();
        }
        else {
            this.setThreadPostsPreFetched(this.props.paged);
        }
    }
    setThreadPostsPreFetched(thread_json) {
        var posts_arr = [];
        thread_json.forEach((post_obj, index) => {
            posts_arr.push(this.returnPostJSXObject(post_obj, index));
        });
        this.defineStatePostsArray(posts_arr);
    }
    setThreadPostsFetched() {
        return __awaiter(this, void 0, void 0, function* () {
            this.getThreadJSONData(this.props.board, this.props.id)
                .then((recieved) => {
                var thread_json = JSON.parse(recieved);
                var posts_arr = [];
                thread_json["posts"].forEach((post_obj, index) => {
                    posts_arr.push(this.returnPostJSXObject(post_obj, index));
                });
                this.defineStatePostsArray(posts_arr);
            })
                .catch((err) => {
                console.log(err);
                this.setState({ error: err + "\nJSON fetch error" });
            });
        });
    }
    getThreadJSONData(board, id) {
        return new Promise((resolve, reject) => {
            var thread_req = new XMLHttpRequest();
            thread_req.addEventListener("load", function (re) {
                if (this.status >= 400) {
                    reject(this.status);
                }
                else if (this.status >= 300) {
                    reject(this.status);
                }
                else {
                    console.log(this.response);
                    resolve(this.response);
                }
            });
            thread_req.addEventListener("error", function (err) {
                reject(this.status);
            });
            thread_req.open("GET", `/${board}/res/${id}.json`);
            thread_req.send();
        });
    }
    returnPostJSXObject(post_obj, key) {
        var post_details = {
            hierarchy_class: (post_obj['resto'] == 0 ? "op" : "reply"),
            paged: typeof this.props.paged != 'boolean',
            board: this.props.board,
            id: post_obj['no'],
            op_id: post_obj['resto'],
            key: key * 2 - 1,
            sub: post_obj['sub'],
            com: post_obj['com'],
            email: post_obj['email'],
            name: post_obj['name'],
            time: post_obj['time'],
            sticky: post_obj['sticky'],
            locked: post_obj['locked'],
            cyclical: post_obj['cyclical'],
            sage: post_obj['sage'],
            last_modified: post_obj['last_modified'],
            tn_h: post_obj['tn_h'],
            tn_w: post_obj['tn_w'],
            h: post_obj['h'],
            w: post_obj['w'],
            fsize: post_obj['fsize'],
            filename: post_obj['filename'],
            ext: post_obj['ext'],
            tim: post_obj['tim'],
            embed: post_obj['embed'],
            md5: post_obj['md5'],
            bumplimit: post_obj['bumplimit'],
            imagelimit: post_obj['imagelimit'],
            omitted_posts: post_obj['omitted_posts']
        };
        return React.createElement(Post_1.Post, Object.assign({}, post_details));
    }
    defineStatePostsArray(posts) {
        var spaced_list = [];
        for (var post_ind = 0; post_ind < posts.length; post_ind++) {
            spaced_list = [...spaced_list, posts[post_ind]];
            spaced_list = [...spaced_list, React.createElement("br", { key: post_ind * 2 })];
        }
        this.setState({ spaced_posts: spaced_list });
    }
    render() {
        if (this.state.error)
            return (React.createElement("p", null, this.state.error));
        return (React.createElement("div", { id: "thread" + this.props.id, className: "thread", "data-board": this.props.board, "data-full-i-d": this.props.board + "." + this.props.id },
            React.createElement("input", { type: "hidden", name: "board", value: this.props.board }),
            this.state.spaced_posts)); // quantity of paged and rendered posts should vary on configuration
    }
}
exports.Thread = Thread;


/***/ }),
/* 2 */
/***/ (function(module, exports, __webpack_require__) {

"use strict";

// This file should not do anything. It's a library
// It is to access react transpiled functions
// code under MPL
Object.defineProperty(exports, "__esModule", { value: true });
var React = __webpack_require__(0);
var ReactDOM = __webpack_require__(3);
const Hello_1 = __webpack_require__(4);
// A composite of posts
const Thread_1 = __webpack_require__(1);
// A composite of threads
const Page_1 = __webpack_require__(6);
// Use library solution to render elements through inline HTML
module.exports = {
    renderTest: function (id) {
        console.log('run from library - ' + id);
        ReactDOM.render(React.createElement(Hello_1.Hello, null), document.getElementById(id));
    },
    // the two functions are for the sake of testing purposes only
    renderThread: function (id_str, board_str) {
        console.log("qtest " + id_str);
        ReactDOM.render(React.createElement(Thread_1.Thread, { id: id_str, board: board_str, paged: false }), document.getElementById("thread_form"));
    },
    renderPage: function (page_num, board_str) {
        console.log("ptest " + page_num + " " + board_str);
        ReactDOM.render(React.createElement(Page_1.Page, { page: page_num, board: board_str }), document.getElementById("thread_form"));
    }
};


/***/ }),
/* 3 */
/***/ (function(module, exports) {

module.exports = __WEBPACK_EXTERNAL_MODULE__3__;

/***/ }),
/* 4 */
/***/ (function(module, exports, __webpack_require__) {

"use strict";

Object.defineProperty(exports, "__esModule", { value: true });
const React = __webpack_require__(0);
class Hello extends React.Component {
    render() {
        return React.createElement("h1", null, "Hello fromand!");
    }
}
exports.Hello = Hello;
// test


/***/ }),
/* 5 */
/***/ (function(module, exports, __webpack_require__) {

"use strict";

Object.defineProperty(exports, "__esModule", { value: true });
const React = __webpack_require__(0);
// TODO: Class should make use of conditionals on every state and render given information iff user permits it or is default based on localstore values.
// TODO: Retrieve JSON Data
// TODO: Use JSON Data
// TODO: Add in default sauce
// TODO: User creation of sauce sources
// TODO: Replicate default intro click functions
// TODO: Replicate/Integrate 4chanX functions
// - Dropdown Hide+Filter
// - Thread hiding button
// TODO: When this is used in Threads.tsx states will have to move to properties where applicable
// TODO: Ommited field be set by options
class Post extends React.Component {
    constructor(props) {
        super(props);
        this.state = ({ filename_cutoff: 20 });
    }
    componentDidMount() {
    }
    // taking the json data for body field, parse string and create JSX elements for safe tags such as <a>, <br>
    // the raw json should already be safe from the server, however can never be too sure and makes for crearer render insertion
    // current method prevents localstore and cookie being called from inline scripting
    parsePostBodyIntoSafeJSX(unsafe_body) {
        unsafe_body = unsafe_body.replace(/cookie/g, "c&#111;&#111;kie");
        var safe_body = unsafe_body.replace(/localStorage/g, "l&#111;calSt&#111;rage");
        var xss_protect_cookie_and_localStorage = { __html: safe_body };
        return (React.createElement("div", { dangerouslySetInnerHTML: xss_protect_cookie_and_localStorage }));
    }
    shortenFileName(fname) {
        if (fname.length > this.state.filename_cutoff)
            return fname.substr(0, this.state.filename_cutoff) + "..";
        else
            return fname;
    }
    highlightReply(e, id) {
    }
    citeReply(e, id) {
    }
    formatFileSize(fsize) {
        if (fsize / (1024 * 1024) > 1) { // MB size check
            return (fsize / (1024 * 1024)).toFixed(2) + "MB";
        }
        else if (fsize / 1024 > 1) { // KB size check
            return (fsize / (1024)).toFixed(2) + "KB";
        }
        else { // Byte Default
            return (fsize) + "B";
        }
    }
    // also does name
    parseEmailField(email, name) {
        if (email == "" || !email)
            return (React.createElement("span", { className: "name" }, this.props.name));
        else {
            var parsed_email = email.split('%20');
            var classes = "";
            for (let item of parsed_email) {
                classes += item + " ";
            }
            return (React.createElement("a", { className: classes, title: classes, href: classes, onClick: (e) => { e.preventDefault(); return false; } },
                React.createElement("span", { className: "name" }, name)));
        }
    }
    readableTime(time) {
        var ms_time = new Date(time * 1000);
        return (ms_time.getHours() + "").padStart(2, '0') + ":" + (ms_time.getMinutes() + "").padStart(2, '0') + ":" + (ms_time.getSeconds() + "").padStart(2, '0');
    }
    detailsExpander(is_file) {
        return (is_file ? React.createElement("a", { href: "", onClick: (e) => {
                e.preventDefault();
                return false;
            } }, "\u2B0E \u2B10") : " ");
    }
    readableDate(time) {
        var ms_time = new Date(time * 1000);
        return "" + (ms_time.getDate() + "").padStart(2, '0') + "/" + (ms_time.getMonth() + "").padStart(2, '0') + "/" + (ms_time.getFullYear() + "").substr(2);
    }
    render() {
        return (React.createElement("div", { className: "post " + this.props.hierarchy_class },
            React.createElement("div", { className: "intro" },
                React.createElement("div", { className: "user" },
                    React.createElement("label", { htmlFor: "delete_" + this.props.id },
                        "\u00A0",
                        React.createElement("input", { type: "checkbox", className: "delete", name: "delete_" + this.props.id, id: "delete_" + this.props.id }),
                        "\u00A0",
                        this.props.sub &&
                            React.createElement("span", { className: "subject" },
                                "\u00A0",
                                this.props.sub),
                        this.parseEmailField(this.props.email, this.props.name),
                        "\u00A0",
                        React.createElement("time", { "data-utc": this.props.time },
                            this.readableDate(this.props.time),
                            " ",
                            this.detailsExpander(!!this.props.filename),
                            " ",
                            this.readableTime(this.props.time))),
                    "\u00A0",
                    React.createElement("a", { className: "post_no", id: "post_no_" + this.props.id, onClick: (event) => { return this.highlightReply(event, this.props.id); }, href: "/qa/res/" + this.props.op_id + "#" + this.props.id }, "No."),
                    React.createElement("a", { className: "post_no", onClick: (event) => { return this.citeReply(event, this.props.id); }, href: "/qa/res/" + this.props.op_id + "#" + this.props.id }, this.props.id),
                    this.props.sticky == 1 && React.createElement("i", { className: "fa fa-thumb-tack", title: "Sticky" }),
                    this.props.locked == 1 && React.createElement("i", { className: "fa fa-lock", title: "Locked" }),
                    this.props.cyclical == 1 && React.createElement("i", { className: "fa fa-refresh", title: "Cycle" }),
                    this.props.sage == 1 && React.createElement("i", { className: "fa fa-anchor", title: "Sink" }),
                    this.props.hierarchy_class == "op" && React.createElement("span", { className: "reply-anchor" },
                        "\u2003",
                        React.createElement("a", { href: "/" + this.props.board + "/res/" + this.props.id }, "[Open Thread]"))),
                this.props.filename &&
                    React.createElement("div", { className: "image-search" },
                        React.createElement("a", { className: "sauce", target: "_blank", href: "https://www.google.com/searchbyimage?image_url=&safe=off" }, "Google")),
                this.props.filename &&
                    React.createElement("div", { className: "file" },
                        React.createElement("span", { className: "fileinfo" },
                            React.createElement("a", { href: "/" + this.props.board + "/src/" + this.props.tim + this.props.ext },
                                React.createElement("span", { className: "postfilename", title: this.props.filename + this.props.ext }, this.shortenFileName(this.props.filename) + this.props.ext)),
                            "\u00A0",
                            React.createElement("span", { className: "unimportant" },
                                "(",
                                this.formatFileSize(this.props.fsize),
                                "," + this.props.h,
                                "x" + this.props.w,
                                ")"),
                            "\u00A0")),
                this.props.filename &&
                    React.createElement("div", null,
                        React.createElement("a", { href: "/" + this.props.board + "/src/" + this.props.tim + this.props.ext, target: "_blank" },
                            React.createElement("img", { className: "post-image", src: "/" + this.props.board + "/thumb/" + this.props.tim + ".png", style: { width: this.props.tn_w, height: this.props.tn_h }, alt: "Image failed to load" })))),
            React.createElement("div", { className: "body" }, this.parsePostBodyIntoSafeJSX(this.props.com)),
            this.props.omitted_posts > 0 &&
                React.createElement("div", { className: "omitted" },
                    this.props.omitted_posts,
                    " Replies Hidden \u00A0",
                    React.createElement("a", { href: "/" + this.props.board + "/res/" + this.props.id, onClick: (e) => {
                            e.preventDefault();
                            return false;
                        } }, "[Expand Replies]"))));
    }
}
exports.Post = Post;


/***/ }),
/* 6 */
/***/ (function(module, exports, __webpack_require__) {

"use strict";

Object.defineProperty(exports, "__esModule", { value: true });
const React = __webpack_require__(0);
const Thread_1 = __webpack_require__(1);
// TODO: Use threads.json to retrieve a list of all threads and have individual threads carry their own json data
class Page extends React.Component {
    constructor(props) {
        super(props);
        this.setPageThreads = this.setPageThreads.bind(this);
        this.getPagedJSONData = this.getPagedJSONData.bind(this);
        this.returnThreadJSXObject = this.returnThreadJSXObject.bind(this);
        this.defineStateThreadsArray = this.defineStateThreadsArray.bind(this);
        this.state = { spaced_threads: [], error: null };
    }
    componentDidMount() {
        this.setPageThreads();
    }
    setPageThreads() {
        var json_arr = this.getPagedJSONData(this.props.board, this.props.page)
            .then((recieved) => {
            var paged_json = JSON.parse(recieved)["threads"];
            if (paged_json.length >= this.props.page - 1) {
                var threads_arr = [];
                paged_json.forEach((thread_obj, index) => {
                    threads_arr.push(this.returnThreadJSXObject(thread_obj["posts"], index));
                });
                this.defineStateThreadsArray(threads_arr);
            }
            else {
                this.setState({ error: "Page out of bounds" });
            }
        })
            .catch((err) => {
            console.log(console.log(err));
            this.setState({ error: err + "\nJSON fetch error" });
        });
    }
    returnThreadJSXObject(thread_obj, key) {
        var thread_details = {
            board: this.props.board,
            id: thread_obj[0]['no'],
            paged: thread_obj
        };
        return React.createElement(Thread_1.Thread, Object.assign({}, thread_details, { key: key * 3 }));
    }
    defineStateThreadsArray(threads) {
        for (var thread_ind = 0; thread_ind < threads.length; thread_ind++) {
            this.setState({ spaced_threads: [...this.state.spaced_threads, threads[thread_ind]] });
            this.setState({ spaced_threads: [...this.state.spaced_threads, React.createElement("br", { className: "clear", key: thread_ind * 3 - 1 })] });
            this.setState({ spaced_threads: [...this.state.spaced_threads, React.createElement("hr", { key: thread_ind * 3 - 2 })] });
        }
    }
    getPagedJSONData(board, page) {
        return new Promise((resolve, reject) => {
            var threads_req = new XMLHttpRequest();
            threads_req.addEventListener("load", function (re) {
                if (this.status >= 400) {
                    reject(this.status);
                }
                else if (this.status >= 300) {
                    reject(this.status);
                }
                else {
                    console.log(this.response);
                    resolve(this.response);
                }
            });
            threads_req.addEventListener("error", function (err) {
                reject(this.status);
            });
            threads_req.open("GET", `/${board}/${page - 1}.json`);
            threads_req.send();
        });
    }
    render() {
        if (this.state.error)
            return (React.createElement("p", null, this.state.error));
        return (React.createElement("div", null,
            React.createElement("input", { type: "hidden", name: "board", value: this.props.board }),
            this.state.spaced_threads));
    }
}
exports.Page = Page;


/***/ })
/******/ ]);
});
//# sourceMappingURL=ui-bundle.js.map