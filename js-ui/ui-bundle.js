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
// TODO: Construct a thread from an AJAX json request
class Thread extends React.Component {
    constructor(props) {
        super(props);
        this.setThreadPosts = this.setThreadPosts.bind(this);
        this.getThreadJSONData = this.getThreadJSONData.bind(this);
        this.returnPostJSXObject = this.returnPostJSXObject.bind(this);
        this.defineStatePostsArray = this.defineStatePostsArray.bind(this);
        this.state = { spaced_posts: [], error: null };
    }
    componentDidMount() {
        this.setThreadPosts();
    }
    setThreadPosts() {
        return __awaiter(this, void 0, void 0, function* () {
            this.getThreadJSONData(this.props.board, this.props.id)
                .then((recieved) => {
                console.log(recieved);
                var thread_json = JSON.parse(recieved);
                var posts_arr = [];
                thread_json["posts"].forEach((index, post_obj) => {
                    posts_arr.push(this.returnPostJSXObject(index, post_obj));
                });
                this.defineStatePostsArray(posts_arr);
            })
                .catch((err) => {
                console.log(console.log(err));
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
            paged: this.props.paged,
            board: this.props.board,
            id: post_obj['no'],
            op_id: post_obj['resto'],
            key: key * 2 - 1,
            sub: post_obj['sub'],
            com: post_obj['com'],
            name: post_obj['name'],
            time: post_obj['time'],
            sticky: post_obj['sticky'],
            locked: post_obj['locked'],
            cyclical: post_obj['cyclical'],
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
            imagelimit: post_obj['imagelimit']
        };
        console.log(post_details);
        return React.createElement(Post_1.Post, Object.assign({}, post_details));
    }
    defineStatePostsArray(posts) {
        for (var post_ind = 0; post_ind < posts.length; post_ind++) {
            this.setState({ spaced_posts: [...this.state.spaced_posts, posts[post_ind]] });
            this.setState({ spaced_posts: [...this.state.spaced_posts, React.createElement("br", { key: post_ind * 2 })] });
        }
    }
    render() {
        if (this.state.error)
            return (React.createElement("p", null, this.state.error));
        return (React.createElement("div", { id: "thread" + this.props.id, className: "thread", "data-board": this.props.board, "data-full-i-d": this.props.board + "." + this.props.id },
            React.createElement("input", { type: "hidden", name: "board", value: this.props.board }),
            this.state.spaced_posts)); // set by componentDidMount+setThreadPosts, modified by setThreadConfig assuming config exists
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
    renderPage: function (page_str, board_str) {
        console.log("ptest " + page_str + " " + board_str);
        ReactDOM.render(React.createElement(Page_1.Page, { page: page_str, board: board_str }), document.getElementById("thread_form"));
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
    parsePostBodyIntoSafeJSX() {
        return (React.createElement("span", null));
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
    render() {
        return (React.createElement("div", { className: "post " + this.props.hierarchy_class },
            this.props.fsize &&
                React.createElement("div", { className: "file" },
                    React.createElement("p", { className: "fileinfo" },
                        "File: ",
                        React.createElement("a", { href: this.props.time + ".jpg" },
                            React.createElement("span", { className: "postfilename", title: this.props.filename + this.props.ext }, this.shortenFileName(this.props.filename) + this.props.ext)),
                        "\u00A0",
                        React.createElement("span", { className: "unimportant" },
                            "(",
                            this.formatFileSize(this.props.fsize),
                            "," + this.props.h,
                            "x" + this.props.w,
                            ")"),
                        "\u00A0",
                        React.createElement("a", { className: "sauce", target: "_blank", href: "https://www.google.com/searchbyimage?image_url=&safe=off" }, "Google"),
                        React.createElement("a", { href: "/" + this.props.board + "/src/" + this.props.tim + this.props.ext, target: "_blank" },
                            React.createElement("img", { className: "post-image", src: "/" + this.props.board + "/thumb/" + this.props.tim + ".png", style: { width: this.props.w, height: this.props.h }, alt: "Image failed to load" })))),
            React.createElement("p", { className: "intro" },
                React.createElement("input", { type: "checkbox", className: "delete", name: "delete_" + this.props.id, id: "delete_" + this.props.id }),
                "\u00A0",
                React.createElement("a", { className: "post_no", id: "post_no_" + this.props.id, onClick: (event) => { return this.highlightReply(event, this.props.id); }, href: "/qa/res/" + this.props.op_id + "#" + this.props.id }, "No."),
                React.createElement("a", { className: "post_no", onClick: (event) => { return this.citeReply(event, this.props.id); }, href: "/qa/res/" + this.props.op_id + "#" + this.props.id }, this.props.id)),
            React.createElement("div", { className: "body" }, this.parsePostBodyIntoSafeJSX()),
            this.props.hierarchy_class == "op" && this.props.paged &&
                React.createElement("span", { className: "omited" })));
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
    }
    componentDidMount() {
        this.setPageThreads();
    }
    setPageThreads() {
        var json_arr = this.getPagedJSONData(this.props.board, this.props.page);
        var threads_arr = [];
        // for each reply/op in json_arr
        var thread_details;
        this.setState({ threads: [...this.state.threads, React.createElement(Thread_1.Thread, Object.assign({}, thread_details))] });
    }
    getPagedJSONData(board, page) {
    }
    render() {
        return (React.createElement("div", null,
            React.createElement("input", { type: "hidden", name: "board", value: this.props.board }),
            this.state.threads));
    }
}
exports.Page = Page;


/***/ })
/******/ ]);
});
//# sourceMappingURL=ui-bundle.js.map