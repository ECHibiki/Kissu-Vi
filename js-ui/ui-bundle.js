(function webpackUniversalModuleDefinition(root, factory) {
	if(typeof exports === 'object' && typeof module === 'object')
		module.exports = factory(require("React"), require("ReactDOM"));
	else if(typeof define === 'function' && define.amd)
		define(["React", "ReactDOM"], factory);
	else if(typeof exports === 'object')
		exports["JS_UI"] = factory(require("React"), require("ReactDOM"));
	else
		root["JS_UI"] = factory(root["React"], root["ReactDOM"]);
})(window, function(__WEBPACK_EXTERNAL_MODULE__0__, __WEBPACK_EXTERNAL_MODULE__1__) {
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
/******/ 	return __webpack_require__(__webpack_require__.s = 3);
/******/ })
/************************************************************************/
/******/ ([
/* 0 */
/***/ (function(module, exports) {

module.exports = __WEBPACK_EXTERNAL_MODULE__0__;

/***/ }),
/* 1 */
/***/ (function(module, exports) {

module.exports = __WEBPACK_EXTERNAL_MODULE__1__;

/***/ }),
/* 2 */
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
var __importStar = (this && this.__importStar) || function (mod) {
    if (mod && mod.__esModule) return mod;
    var result = {};
    if (mod != null) for (var k in mod) if (Object.hasOwnProperty.call(mod, k)) result[k] = mod[k];
    result["default"] = mod;
    return result;
};
Object.defineProperty(exports, "__esModule", { value: true });
const React = __importStar(__webpack_require__(0));
const Post_1 = __webpack_require__(7);
const ThreadUpdater_1 = __webpack_require__(8);
// FIX: expansion doesn't updates the paged property when new treads have been added.
class Thread extends React.Component {
    constructor(props) {
        super(props);
        this.stored_title = "";
        this.total_posts_in_thread = 0;
        this.total_posts_mounted = 0;
        this.stored_title = document.title;
        this.setThreadPostsFetched = this.setThreadPostsFetched.bind(this);
        this.setThreadPostsPreFetched = this.setThreadPostsPreFetched.bind(this);
        this.rebuildThreadOnBool = this.rebuildThreadOnBool.bind(this);
        this.maintainCountOfAllPostsMounted = this.maintainCountOfAllPostsMounted.bind(this);
        this.highlightThreadPost = this.highlightThreadPost.bind(this);
        this.threadQuickReply = this.threadQuickReply.bind(this);
        this.getThreadJSONData = this.getThreadJSONData.bind(this);
        this.returnPostJSXObject = this.returnPostJSXObject.bind(this);
        this.defineStatePostsArray = this.defineStatePostsArray.bind(this);
        this.state = { spaced_posts: [], error: null, expanded: false };
    }
    highlightThreadPost(e, id) {
        var copy_ele = [];
        for (var post of this.state.spaced_posts) {
            if (post.props.thread_id) {
                if (id == post.props.id) {
                    e.preventDefault();
                    copy_ele.push(React.cloneElement(post, { highlighted: !post.props.highlighted }));
                    history.pushState("", document.title, window.location.pathname + window.location.search);
                }
                else {
                    copy_ele.push(React.cloneElement(post, { highlighted: false }));
                }
            }
            else {
                copy_ele.push(post);
            }
        }
        this.setState({ spaced_posts: copy_ele });
    }
    componentDidMount() {
        if (!this.props.paged) {
            this.setThreadPostsFetched();
        }
        else {
            this.setThreadPostsPreFetched(this.props.paged);
        }
    }
    maintainCountOfAllPostsMounted() {
        this.total_posts_mounted++;
        if (this.total_posts_mounted == this.total_posts_in_thread) {
            this.props.finishedCallBackFunction();
        }
    }
    rebuildThreadOnBool() {
        this.setState({ expanded: !this.state.expanded });
        if (!this.state.expanded) { // naming is a bit confusing
            this.setThreadPostsFetched();
        }
        else {
            this.setThreadPostsPreFetched(this.props.paged);
        }
    }
    threadQuickReply(id) {
        this.props.threadQuickReply(this.props.thread_id, id);
    }
    setThreadPostsPreFetched(thread_json) {
        var posts_arr = [];
        thread_json.forEach((post_obj, index) => {
            posts_arr.push(this.returnPostJSXObject(post_obj, index));
        });
        this.total_posts_in_thread = posts_arr.length;
        this.total_posts_mounted = 0;
        this.defineStatePostsArray(posts_arr);
    }
    setThreadPostsFetched(display_notification_event = false) {
        return __awaiter(this, void 0, void 0, function* () {
            this.getThreadJSONData(this.props.board, this.props.thread_id)
                .then((recieved) => {
                var thread_json = JSON.parse(recieved);
                var posts_arr = [];
                var max_ind = 0;
                thread_json["posts"].forEach((post_obj, index) => {
                    max_ind = index;
                    posts_arr.push(this.returnPostJSXObject(post_obj, index));
                });
                this.total_posts_in_thread = posts_arr.length;
                this.total_posts_mounted = 0;
                if (display_notification_event) {
                    var new_posts = (thread_json['posts'].length - this.state.spaced_posts.length / 2);
                    if (new_posts != 0)
                        document.title = "(" + new_posts + ") " + this.stored_title;
                }
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
                if (this.status >= 300) {
                    reject(this.status);
                }
                else {
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
            expanded: this.state.expanded,
            highlighted: false,
            threadReconstruct: this.rebuildThreadOnBool,
            threadHighlighting: this.highlightThreadPost,
            threadQuickReply: this.threadQuickReply,
            finishedCallBackFunction: this.maintainCountOfAllPostsMounted,
            board: this.props.board,
            id: post_obj['no'],
            op_id: (post_obj['resto'] == false ? post_obj['no'] : post_obj['resto']),
            key: key * 2,
            sub: post_obj['sub'],
            com: post_obj['com'],
            email: post_obj['email'],
            name: post_obj['name'],
            capcode: post_obj['capcode'],
            time: post_obj['time'],
            sticky: post_obj['sticky'],
            locked: post_obj['locked'],
            cyclical: post_obj['cyclical'],
            spoiler: post_obj['spoiler'],
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
            cites: post_obj['cites'],
            omitted_posts: post_obj['omitted_posts']
        };
        return React.createElement(Post_1.Post, Object.assign({}, post_details));
    }
    defineStatePostsArray(posts) {
        var spaced_list = [];
        for (var post_ind = 0; post_ind < posts.length; post_ind++) {
            spaced_list = [...spaced_list, posts[post_ind]];
            spaced_list = [...spaced_list, React.createElement("br", { key: (post_ind + 1) * 2 - 1 })];
        }
        this.setState({ spaced_posts: spaced_list });
    }
    render() {
        if (this.state.error)
            return (React.createElement("p", null, this.state.error));
        var thread_updater_props = { board: this.props.board,
            thread_id: this.props.thread_id,
            threadListUpdateSignal: this.setThreadPostsFetched };
        return (React.createElement("div", { id: "thread_" + this.props.thread_id, className: "thread", "data-board": this.props.board, "data-full-i-d": this.props.board + "." + this.props.thread_id },
            this.state.spaced_posts,
            !this.props.paged && localStorage['auto-up'] == "true" && React.createElement("div", { className: "bottom-page-modifiers" },
                React.createElement("hr", null),
                React.createElement(ThreadUpdater_1.ThreadUpdater, Object.assign({}, thread_updater_props))))); // quantity of paged and rendered posts should vary on configuration
    }
}
exports.Thread = Thread;


/***/ }),
/* 3 */
/***/ (function(module, exports, __webpack_require__) {

"use strict";

// This file should not do anything. It's a library
// It is to access react transpiled functions
// code under MPL
Object.defineProperty(exports, "__esModule", { value: true });
var React = __webpack_require__(0);
var ReactDOM = __webpack_require__(1);
const Hello_1 = __webpack_require__(4);
// The master contents container 
const MainImageboardContents_1 = __webpack_require__(5);
// Use library solution to render elements through inline HTML
module.exports = {
    renderTest: function (id) {
        console.log('run from library - ' + id);
        ReactDOM.render(React.createElement(Hello_1.Hello, null), document.getElementById(id));
    },
    // the two functions are for the sake of testing purposes only
    renderThread: function (id_num, board_str) {
        console.log("qtest " + id_num);
        ReactDOM.render(React.createElement(MainImageboardContents_1.MainImageboardContents, { thread_id: id_num, board: board_str, paged: false, page: 0 }), document.getElementById("react-ui"));
    },
    renderPage: function (page_num, board_str) {
        console.log("ptest " + page_num + " " + board_str);
        ReactDOM.render(React.createElement(MainImageboardContents_1.MainImageboardContents, { thread_id: 0, board: board_str, paged: true, page: page_num }), document.getElementById("react-ui"));
    }
};


/***/ }),
/* 4 */
/***/ (function(module, exports, __webpack_require__) {

"use strict";

var __importStar = (this && this.__importStar) || function (mod) {
    if (mod && mod.__esModule) return mod;
    var result = {};
    if (mod != null) for (var k in mod) if (Object.hasOwnProperty.call(mod, k)) result[k] = mod[k];
    result["default"] = mod;
    return result;
};
Object.defineProperty(exports, "__esModule", { value: true });
const React = __importStar(__webpack_require__(0));
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

// This file contains information components such as the post form, page navigation, catalog, threads, posts, delete form and images. At current time it probably does not include everything listed, but these are the plans
// Cursor change is set in delete form which also handles outside events.
var __importStar = (this && this.__importStar) || function (mod) {
    if (mod && mod.__esModule) return mod;
    var result = {};
    if (mod != null) for (var k in mod) if (Object.hasOwnProperty.call(mod, k)) result[k] = mod[k];
    result["default"] = mod;
    return result;
};
Object.defineProperty(exports, "__esModule", { value: true });
const React = __importStar(__webpack_require__(0));
// Where threads and delete fields are placed
const DeleteForm_1 = __webpack_require__(6);
// Options menu
const OptionMenu_1 = __webpack_require__(12);
// Update and local navigation
const NavButtons_1 = __webpack_require__(14);
// TODO: this component should retrieve properties for nav and passdown
class MainImageboardContents extends React.Component {
    constructor(props) {
        super(props);
        this.time_of_last_rebuild = Date.now();
        this.state = { options: {}, time_since_last_update: "" };
        this.information_holder_ref = React.createRef();
        this.confirmUpdateClick = this.confirmUpdateClick.bind(this);
        this.sendDoneEvents = this.sendDoneEvents.bind(this);
        this.optionSetRebuild = this.optionSetRebuild.bind(this);
        this.mounted = false;
    }
    componentDidMount() {
    }
    sendDoneEvents() {
        var mounted_event = new CustomEvent('mounted');
        //tester
        document.body.addEventListener('mounted', function (r) { console.log(r); });
        document.body.addEventListener('likely-rendered', function (r) { console.log(r); });
        document.body.dispatchEvent(mounted_event);
        document.body.style.cursor = "default";
        this.mounted = true;
    }
    createQuickReply(thread_id, post_id) { }
    optionSetRebuild() {
        this.information_holder_ref.current.triggerRebuild();
    }
    confirmUpdateClick(time_since_last_update, recent_thread_time) {
        // pass down new time since last update
        if (this.mounted && recent_thread_time > this.time_of_last_rebuild / 1000) {
            this.information_holder_ref.current.triggerRebuild();
            this.time_of_last_rebuild = recent_thread_time;
        }
        this.setState({ time_since_last_update: time_since_last_update });
    }
    render() {
        var delete_form_properties = {
            board: this.props.board,
            thread_id: this.props.thread_id,
            page: this.props.page,
            paged: this.props.paged,
            doneEventCallBack: this.sendDoneEvents
        };
        return (React.createElement("div", { id: "main-imageboard-contents" },
            React.createElement("hr", null),
            React.createElement(NavButtons_1.NavButtons, { paged: !!this.props.paged, board: this.props.board, confirmUpdateClick: this.confirmUpdateClick, time_string: this.state.time_since_last_update }),
            React.createElement(OptionMenu_1.OptionMenu, { optionSetCallBack: this.optionSetRebuild }),
            React.createElement("br", null),
            React.createElement("hr", null),
            React.createElement(DeleteForm_1.DeleteForm, Object.assign({}, delete_form_properties, { ref: this.information_holder_ref })),
            React.createElement(NavButtons_1.NavButtons, { paged: this.props.paged, board: this.props.board, confirmUpdateClick: this.confirmUpdateClick, time_string: this.state.time_since_last_update })));
    }
}
exports.MainImageboardContents = MainImageboardContents;


/***/ }),
/* 6 */
/***/ (function(module, exports, __webpack_require__) {

"use strict";

var __importStar = (this && this.__importStar) || function (mod) {
    if (mod && mod.__esModule) return mod;
    var result = {};
    if (mod != null) for (var k in mod) if (Object.hasOwnProperty.call(mod, k)) result[k] = mod[k];
    result["default"] = mod;
    return result;
};
Object.defineProperty(exports, "__esModule", { value: true });
const React = __importStar(__webpack_require__(0));
// A composite of posts
const Thread_1 = __webpack_require__(2);
// A composite of threads
const Page_1 = __webpack_require__(9);
const DeleteButton_1 = __webpack_require__(10);
const ReportButton_1 = __webpack_require__(11);
class DeleteForm extends React.Component {
    constructor(props) {
        super(props);
        this.state = ({ display_user_moderation_tools: false });
        this.threadQuickReply = this.threadQuickReply.bind(this);
        this.paged_rebuild_ref = React.createRef();
        this.thread_rebuild_ref = React.createRef();
    }
    threadQuickReply(thread_id, post_id) {
        console.log(thread_id);
        console.log(post_id);
        // keep passing up to top
    }
    // ref function
    triggerRebuild() {
        if (this.props.paged) {
            this.paged_rebuild_ref.current.setPageThreads();
        }
        else {
            this.thread_rebuild_ref.current.setThreadPostsFetched();
        }
    }
    componentDidMount() {
        document.body.style.cursor = "wait";
    }
    render() {
        var thread_options = {
            board: this.props.board,
            thread_id: this.props.thread_id,
            paged: false,
            threadQuickReply: this.threadQuickReply,
            finishedCallBackFunction: this.props.doneEventCallBack
        };
        var page_options = {
            board: this.props.board,
            page: this.props.page,
            finishedCallBackFunction: this.props.doneEventCallBack
        };
        // decide which type of thread display to use. 
        // some modifications will be made to this when the post form is integrated
        // qr sould not be here nor should navigation items, but for now they are.
        // it also should contains delete info
        return (React.createElement("form", { id: "thread_form", name: "postcontrols", action: "/post.php", method: "post" },
            React.createElement("input", { type: "hidden", name: "board", value: this.props.board }),
            !this.props.paged && React.createElement(Thread_1.Thread, Object.assign({}, thread_options, { ref: this.thread_rebuild_ref })),
            this.props.paged && React.createElement(Page_1.Page, Object.assign({}, page_options, { ref: this.paged_rebuild_ref })),
            React.createElement("a", { style: { cursor: "pointer", float: "right" }, onClick: () => this.setState({ display_user_moderation_tools: !this.state.display_user_moderation_tools }) }, "Toggle Moderation"),
            " ",
            React.createElement("br", null),
            React.createElement("div", { className: "user-mod-container" }, this.state.display_user_moderation_tools &&
                React.createElement("div", null,
                    React.createElement(DeleteButton_1.DeleteButton, null),
                    React.createElement("br", null),
                    React.createElement(ReportButton_1.ReportButton, null)))));
    }
}
exports.DeleteForm = DeleteForm;


/***/ }),
/* 7 */
/***/ (function(module, exports, __webpack_require__) {

"use strict";

var __importStar = (this && this.__importStar) || function (mod) {
    if (mod && mod.__esModule) return mod;
    var result = {};
    if (mod != null) for (var k in mod) if (Object.hasOwnProperty.call(mod, k)) result[k] = mod[k];
    result["default"] = mod;
    return result;
};
Object.defineProperty(exports, "__esModule", { value: true });
const React = __importStar(__webpack_require__(0));
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
        this.generateProperMedia = this.generateProperMedia.bind(this);
        this.generateStagedEmbeding = this.generateStagedEmbeding.bind(this);
        this.onClickExpandImage = this.onClickExpandImage.bind(this);
        this.onClickExpandAudio = this.onClickExpandAudio.bind(this);
        this.onClickExpandVideo = this.onClickExpandVideo.bind(this);
        this.onClickExpandEmbed = this.onClickExpandEmbed.bind(this);
        this.onMediaLoad = this.onMediaLoad.bind(this);
        this.state = ({ filename_cutoff: 20, file_details_hidden: localStorage['file-info'] == "false", show_full_image: false, show_full_audio: false, show_full_video: false,
            show_full_embed: false, media_opacity: 1.0 });
    }
    //this post better be done
    componentDidMount() {
        this.props.finishedCallBackFunction();
    }
    onClickExpandImage(e) {
        e.preventDefault();
        this.setState({ media_opacity: 0.8 });
        this.setState({ show_full_image: !this.state.show_full_image });
    }
    onClickExpandAudio(e) {
        e.preventDefault();
        this.setState({ media_opacity: 0.8 });
        this.setState({ show_full_audio: !this.state.show_full_audio });
    }
    onClickExpandVideo(e) {
        e.preventDefault();
        this.setState({ media_opacity: 0.8 });
        this.setState({ show_full_video: !this.state.show_full_video });
    }
    onClickExpandEmbed(e) {
        e.preventDefault();
        this.setState({ media_opacity: 0.8 });
        this.setState({ show_full_embed: !this.state.show_full_embed });
    }
    onMediaLoad() {
        this.setState({ media_opacity: 1.0 });
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
        this.props.threadHighlighting(e, id);
    }
    citeReply(id) {
        this.props.threadQuickReply(id);
        /* The Following is a messy copy past from main.js */
        // JQUERY types local has been added but should be removed
        var textarea;
        var with_link = undefined;
        if (document.getElementById('index-body') != undefined)
            textarea = document.getElementById('index-body');
        else
            textarea = document.getElementById('body');
        if (!textarea) {
            return false;
        }
        if (document.selection) {
            // IE
            textarea.focus();
            var sel = document.selection.createRange();
            sel.text = '>>' + id + '\n';
        }
        else if (textarea.selectionStart || textarea.selectionStart == 0) {
            var start = textarea.selectionStart;
            var end = textarea.selectionEnd;
            textarea.value = textarea.value.substring(0, start) + '>>' + id + '\n' + textarea.value.substring(end, textarea.value.length);
            textarea.selectionStart += ('>>' + id).length + 1;
            textarea.selectionEnd = textarea.selectionStart;
        }
        else {
            // ???
            textarea.value += '>>' + id + '\n';
        }
        if (typeof $ != 'undefined') {
            var select = document.getSelection().toString();
            if (select) {
                var body = $('#reply_' + id + ', #op_' + id).find('div.body'); // TODO: support for OPs
                var index = body.text().indexOf(select.replace('\n', '')); // for some reason this only works like this
                if (index > -1) {
                    textarea.value += '>' + select + '\n';
                }
            }
            $(window).trigger('cite', [id, with_link]);
            $(textarea).change();
        }
        return false;
        // END MESS
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
    createCapCode(name, cap_type) {
        switch (cap_type) {
            case "Admin":
                return React.createElement("span", { className: "admin" },
                    React.createElement("span", { className: "admin-name" }, name),
                    React.createElement("span", { className: "admin-position" },
                        "\u00A0##\u00A0",
                        cap_type,
                        "\u00A0"),
                    React.createElement("i", { className: "fas fa-kiss-wink-heart fa-lg" }));
                break;
            case "Mod":
                return React.createElement("span", { className: "mod" },
                    React.createElement("span", { className: "mod-name" }, name),
                    React.createElement("span", { className: "mod-position" },
                        "\u00A0##\u00A0",
                        cap_type,
                        "\u00A0"),
                    React.createElement("i", { className: "far fa-kiss fa-lg" }));
                break;
        }
    }
    // also does name
    parseEmailNameField(email, name, capcode) {
        if (capcode) {
            return this.createCapCode(name, capcode);
        }
        else if (email == "" || !email)
            return (React.createElement("span", { className: "name" }, this.props.name));
        else {
            var parsed_email = email.split('%20');
            var classes = "";
            for (let item of parsed_email) {
                classes += item + " ";
            }
            return (React.createElement("a", { className: classes, title: classes, href: classes, onClick: (e) => { e.preventDefault(); } },
                React.createElement("span", { className: "name" }, name)));
        }
    }
    readableTime(time) {
        var ms_time = new Date(time * 1000);
        return (ms_time.getHours() + "").padStart(2, '0') + ":" + (ms_time.getMinutes() + "").padStart(2, '0') + ":" + (ms_time.getSeconds() + "").padStart(2, '0');
    }
    detailsExpander(is_file, is_embed) {
        return (is_file || is_embed ? React.createElement("a", { className: "details-expander", style: { cursor: "pointer", textDecoration: "none" }, target: "_blank", onClick: (e) => {
                this.setState({ file_details_hidden: !this.state.file_details_hidden });
                e.preventDefault();
            } }, this.state.file_details_hidden ? "▼▼" : "▲▲") : " ");
    }
    readableDate(time) {
        var ms_time = new Date(time * 1000);
        return "" + (ms_time.getDate() + "").padStart(2, '0') + "/" + (ms_time.getMonth() + "").padStart(2, '0') + "/" + (ms_time.getFullYear() + "").substr(2);
    }
    createImageSearchLink(search_engine_name, search_engine_pattern) {
        var source = window.location.protocol + "//" + window.location.hostname + "/" + this.props.board + "/src/" + this.props.tim + this.props.ext;
        var search_url = search_engine_pattern.replace("%s", source);
        return React.createElement("a", { className: "sauce", target: "_blank", href: search_url }, search_engine_name);
    }
    createCitesList(cite_arr) {
        var return_jsx = [];
        var i = 0;
        for (var cite of cite_arr) {
            if (cite['board'] == this.props.board) {
                return_jsx.push(React.createElement("span", { key: i++ },
                    "\u00A0",
                    React.createElement("a", { href: window.location.protocol + "//" + window.location.host + "/" + this.props.board + "/res/" + cite['host'] + "#" + cite['post'] }, ">>" + cite['post'])));
            }
            else {
                return_jsx.push(React.createElement("span", { key: i++ },
                    "\u00A0",
                    React.createElement("a", { href: window.location.protocol + "//" + window.location.host + "/" + cite['board'] + "/res/" + cite['host'] + "#" + cite['post'] }, ">>>/" + cite['board'] + "/" + cite['post'])));
            }
        }
        return return_jsx;
    }
    generateProperMedia() {
        var is_image = false;
        var is_video = false;
        var is_audio = false;
        switch (this.props.ext) {
            case ".jpg":
                is_image = true;
                break;
            case ".jpeg":
                is_image = true;
                break;
            case ".png":
                is_image = true;
                break;
            case ".gif":
                is_image = true;
                break;
            case ".mp4":
                is_video = true;
                break;
            case ".webm":
                is_video = true;
                break;
            case ".mp3":
                is_audio = true;
                break;
        }
        if (is_image) {
            if (!this.state.show_full_image) {
                var image_thumb_src = "";
                if (this.props.spoiler) {
                    image_thumb_src = "/static/kissu-spoiler.png";
                }
                else {
                    image_thumb_src = "/" + this.props.board + "/thumb/" + this.props.tim + ".png";
                }
                return React.createElement("div", { className: "image-container-thumb" },
                    React.createElement("a", { href: "/" + this.props.board + "/src/" + this.props.tim + this.props.ext, target: "_blank" },
                        React.createElement("img", { onClick: this.onClickExpandImage, onLoad: this.onMediaLoad, className: "post-image", src: image_thumb_src, style: { width: this.props.tn_w, height: this.props.tn_h, opacity: this.state.media_opacity } })));
            }
            else {
                return React.createElement("div", { className: "image-container" },
                    React.createElement("a", { href: "/" + this.props.board + "/src/" + this.props.tim + this.props.ext, target: "_blank" },
                        React.createElement("img", { onClick: this.onClickExpandImage, onLoad: this.onMediaLoad, className: "full-image", src: "/" + this.props.board + "/src/" + this.props.tim + this.props.ext, style: { opacity: this.state.media_opacity } })));
            }
        }
        else if (is_video) {
            if (!this.state.show_full_video) {
                return React.createElement("div", { className: "video-container-thumb" },
                    React.createElement("a", { href: "/player.php?v=/" + this.props.board + "/src/" + this.props.tim + this.props.ext + "&t=" + this.props.filename + this.props.ext + "&loop=0", target: "_blank" },
                        React.createElement("img", { onClick: this.onClickExpandVideo, onLoad: this.onMediaLoad, className: "post-image", src: "/" + this.props.board + "/thumb/" + this.props.tim + ".jpg", style: { width: this.props.tn_w, height: this.props.tn_h, opacity: this.state.media_opacity } })));
            }
            else {
                return React.createElement("div", { style: { paddingLeft: "15px", display: "block", position: "static" }, className: "video-container" },
                    React.createElement("img", { onClick: this.onClickExpandVideo, onLoad: this.onMediaLoad, src: "/static/collapse.gif", alt: "[ - ]", title: "Collapse video", style: { marginLeft: "-15px", float: "left", display: "inline" } }),
                    React.createElement("a", { href: "/player.php?v=/" + this.props.board + "/src/" + this.props.tim + this.props.ext + "&t=" + this.props.filename + this.props.ext + "&loop=0", target: "_blank" },
                        React.createElement("video", { src: "/" + this.props.board + "/src/" + this.props.tim + this.props.ext, loop: false, style: { position: "static", pointerEvents: "inherit", display: "inline", "maxWidth": "100%", maxHeight: "913px", opacity: this.state.media_opacity }, controls: true, autoPlay: true }, "Your browser does not support HTML5 video.")));
            }
        }
        else if (is_audio) {
            if (!this.state.show_full_audio) {
                return React.createElement("div", { className: "audio-container-thumb" },
                    React.createElement("a", { href: "/" + this.props.board + "/src/" + this.props.tim + this.props.ext, target: "_blank" },
                        React.createElement("img", { onClick: this.onClickExpandAudio, onLoad: this.onMediaLoad, className: "post-image", src: "/static/kissu-audio.png", style: { width: 200, height: 200, opacity: this.state.media_opacity } })));
            }
            else {
                return React.createElement("div", { style: { paddingLeft: "15px", display: "block", position: "static" }, className: 'audio-container' },
                    React.createElement("img", { onClick: this.onClickExpandAudio, onLoad: this.onMediaLoad, src: "/static/collapse.gif", alt: "[ - ]", title: "Collapse Audio", style: { marginLeft: "-15px", float: "left", display: "inline" } }),
                    React.createElement("a", { href: "/" + this.props.board + "/src/" + this.props.tim + this.props.ext, target: "_blank" },
                        React.createElement("audio", { src: "/" + this.props.board + "/src/" + this.props.tim + this.props.ext, loop: false, style: { position: "static", pointerEvents: "inherit", display: "inline", "maxWidth": "100%", maxHeight: "913px", opacity: this.state.media_opacity }, controls: true, autoPlay: true }, "Your browser does not support HTML5 Audio")));
            }
        }
    }
    // If it were possible to XSS this then it should also be possible on vichan.
    // Still a saftey check would be nice
    generateStagedEmbeding() {
        if (!this.state.show_full_embed && localStorage['fast-embed'] == "true") {
            if (localStorage['embed-specific'] == "thumb") {
                return React.createElement("div", { className: "embed-container-thumb" },
                    React.createElement("a", { target: "_blank" },
                        React.createElement("img", { onClick: this.onClickExpandEmbed, className: "post-image", src: "/static/kissu-embed.jpg", style: { width: 200, height: 200, cursor: "pointer" }, alt: "Embed Thumb failed to load" })));
            }
            else {
                return React.createElement("div", { className: "embed-container-thumb" },
                    React.createElement("img", { onClick: this.onClickExpandEmbed, src: this.getEmbedThumb(this.getSRCFromIframe(this.props.embed)), className: "post-image", style: { width: 270, height: 202, cursor: "pointer" }, alt: "" }));
            }
        }
        else {
            var dangerous_html = { __html: this.props.embed };
            return React.createElement("div", { className: "embed-container" },
                React.createElement("img", { onClick: this.onClickExpandEmbed, src: "/static/collapse.gif", alt: "[ - ]", title: "Collapse Media", style: { marginLeft: "-15px", float: "left", display: "inline" } }),
                React.createElement("div", { dangerouslySetInnerHTML: dangerous_html }));
        }
    }
    // from pure url return image link
    getEmbedThumb(url) {
        let code_match;
        if ((code_match = /(youtu\.be\/|youtube.com\/)([a-z0-9\-]{11})/gi.exec(url))) {
            return "https://img.youtube.com/vi/" + code_match[2] + "/mqdefault.jpg";
        }
        else if ((code_match = /(nicovideo\.jp\/watch\/sm)([0-9]{8})/gi.exec(url))) {
            return "https://nicovideo.cdn.nimg.jp/thumbnails/" + code_match[2] + "/" + code_match[2] + ".L";
        }
        else {
            return "https://static.libsyn.com/p/assets/6/c/a/3/6ca38c2fefa1e989/WTF_-_new_larger_cover.jpg";
        }
    }
    getSRCFromIframe(embed_string) {
        var embed_match = embed_string.match(/src=\".*?\"/gi);
        if (embed_match.length == 1) {
            let processed_match = embed_match[0]
                .replace("src=\"", "")
                .replace("\"", "")
                .replace("embed/", "")
                .replace("embed.", "");
            return processed_match;
        }
        else
            return "URL not found";
    }
    triggerThreadRebuild() {
        this.props.threadReconstruct();
    }
    render() {
        // FIX: state expantion is hard to follow and depends on multiple conditions.
        // NOTE: data-op is a temporary messure to maintain compatibility with legacy JS
        var detail_display_prop = { display: (this.state.file_details_hidden ? "none" : "block") };
        return (React.createElement("div", { "data-op": this.props.op_id, id: this.props.hierarchy_class + "_" + this.props.id, className: "post " + this.props.hierarchy_class + " " + (this.props.highlighted || window.location.hash == "#" + this.props.id ? "highlighted" : "") },
            this.props.filename && localStorage['no-img'] == "false" && this.generateProperMedia(),
            this.props.embed && localStorage['no-img'] == "false" && this.generateStagedEmbeding(),
            React.createElement("div", { className: "post-contents" },
                React.createElement("div", { className: "intro" },
                    React.createElement("div", { className: "user" },
                        React.createElement("label", { htmlFor: "delete_" + this.props.id },
                            "\u00A0",
                            React.createElement("input", { type: "checkbox", className: "delete", name: "delete_" + this.props.id, id: "delete_" + this.props.id }),
                            this.props.sub &&
                                React.createElement("span", { className: "subject" },
                                    "\u00A0",
                                    this.props.sub),
                            this.parseEmailNameField(this.props.email, this.props.name, this.props.capcode),
                            "\u00A0",
                            React.createElement("time", { "data-utc": this.props.time },
                                this.readableDate(this.props.time),
                                " ",
                                this.detailsExpander(!!this.props.filename, !!this.props.embed),
                                " ",
                                this.readableTime(this.props.time))),
                        "\u00A0",
                        React.createElement("a", { className: "post_no", id: "post_no_" + this.props.id, onClick: (event) => {
                                this.highlightReply(event, this.props.id);
                            }, href: "/" + this.props.board + "/res/" + this.props.op_id + "#" + this.props.id }, "No."),
                        React.createElement("a", { className: "post_no", style: { cursor: "pointer" }, onClick: (event) => {
                                this.citeReply(this.props.id);
                                event.preventDefault();
                            } }, this.props.id),
                        "\u00A0",
                        this.props.sticky == 1 && React.createElement("i", { className: "fas fa-thumbtack fa-lg", title: "Sticky" }, "\u00A0"),
                        this.props.locked == 1 && React.createElement("i", { className: "fas fa-lock fa-lg", title: "Locked" }, "\u00A0"),
                        this.props.cyclical == 1 && React.createElement("i", { className: "fas fa-sync-alt fa-lg", title: "Cycle" }, "\u00A0"),
                        this.props.sage == 1 && React.createElement("i", { className: "fas fa-anchor fa-lg", title: "Sink" }, "\u00A0"),
                        this.props.hierarchy_class == "op" && this.props.paged && React.createElement("span", { className: "reply-anchor" },
                            "\u2003",
                            React.createElement("a", { href: "/" + this.props.board + "/res/" + this.props.id }, "[Open]")),
                        this.props.cites && this.createCitesList(this.props.cites)),
                    React.createElement("div", { className: "optional-file-info", style: detail_display_prop },
                        this.props.filename && localStorage['rev-img'] == "true" &&
                            React.createElement("div", { className: "image-search" },
                                "\u2002\u00A0",
                                this.createImageSearchLink("Google", "https://www.google.com/searchbyimage?image_url=%s&safe=off"),
                                " \u00A0",
                                this.createImageSearchLink("Yandex", "https://yandex.com/images/search?rpt=imageview&url=%s"),
                                " \u00A0",
                                this.createImageSearchLink("iqdb", "https://iqdb.org/?url=%s"),
                                " \u00A0",
                                this.createImageSearchLink("Trace", "trace.moe/?auto&url=%s"),
                                " \u00A0"),
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
                        this.props.embed &&
                            React.createElement("div", { className: "embed-src" },
                                React.createElement("span", { className: "embedinfo" },
                                    React.createElement("a", { href: this.getSRCFromIframe(this.props.embed), target: "_blank" }, this.getSRCFromIframe(this.props.embed)),
                                    "\u00A0")))),
                React.createElement("div", { className: "body" }, this.props.com && this.parsePostBodyIntoSafeJSX(this.props.com))),
            (this.props.hierarchy_class == "op" && (this.props.omitted_posts > 0 || (this.props.expanded && this.props.paged))) &&
                React.createElement("div", { className: "omitted" },
                    this.props.omitted_posts > 0 && this.props.omitted_posts + " Replies Hidden ",
                    React.createElement("a", { style: { cursor: "pointer" }, onClick: (e) => {
                            this.triggerThreadRebuild();
                            e.preventDefault();
                        } }, this.props.omitted_posts > 0 ? "[Expand]" : "[Condense]"))));
    }
}
exports.Post = Post;


/***/ }),
/* 8 */
/***/ (function(module, exports, __webpack_require__) {

"use strict";

var __importStar = (this && this.__importStar) || function (mod) {
    if (mod && mod.__esModule) return mod;
    var result = {};
    if (mod != null) for (var k in mod) if (Object.hasOwnProperty.call(mod, k)) result[k] = mod[k];
    result["default"] = mod;
    return result;
};
Object.defineProperty(exports, "__esModule", { value: true });
const React = __importStar(__webpack_require__(0));
class ThreadUpdater extends React.Component {
    constructor(props) {
        super(props);
        this.timer_increment = 5;
        this.timer_repetitions = 1;
        this.fireUpUpdater = this.fireUpUpdater.bind(this);
        //this.countDown = this.countDown.bind(this);
        this.state = { timer_seconds: 5 };
    }
    componentDidMount() {
        this.timer = window.setInterval(() => this.countDown(), 1000);
    }
    componentWillUnmount() {
        clearInterval(this.timer);
    }
    countDown() {
        if (this.state.timer_seconds == 0) {
            console.log(this.timer_increment * this.timer_repetitions);
            this.timer_repetitions += 1;
            this.setState({ timer_seconds: this.timer_increment * this.timer_repetitions });
            this.fireUpUpdater();
        }
        else {
            this.setState({ timer_seconds: this.state.timer_seconds - 1 });
        }
    }
    fireUpUpdater() {
        this.props.threadListUpdateSignal(true);
    }
    render() {
        return (React.createElement("div", { id: "updater" },
            React.createElement("a", { onClick: () => {
                    this.setState({ timer_seconds: this.timer_increment });
                    this.fireUpUpdater();
                    this.timer_repetitions = 1;
                }, style: { cursor: "pointer" } }, "[Update]"),
            "\u2003",
            React.createElement("span", { id: "timer" },
                "[ ",
                this.state.timer_seconds,
                " ]")));
    }
}
exports.ThreadUpdater = ThreadUpdater;


/***/ }),
/* 9 */
/***/ (function(module, exports, __webpack_require__) {

"use strict";

var __importStar = (this && this.__importStar) || function (mod) {
    if (mod && mod.__esModule) return mod;
    var result = {};
    if (mod != null) for (var k in mod) if (Object.hasOwnProperty.call(mod, k)) result[k] = mod[k];
    result["default"] = mod;
    return result;
};
Object.defineProperty(exports, "__esModule", { value: true });
const React = __importStar(__webpack_require__(0));
const Thread_1 = __webpack_require__(2);
// TODO: Use threads.json to retrieve a list of all threads and have individual threads carry their own json data
class Page extends React.Component {
    constructor(props) {
        super(props);
        this.count_of_all_threads_on_page = 0;
        this.count_of_all_threads_mounted = 0;
        this.setPageThreads = this.setPageThreads.bind(this);
        this.getPagedJSONData = this.getPagedJSONData.bind(this);
        this.returnThreadJSXObject = this.returnThreadJSXObject.bind(this);
        this.defineStateThreadsArray = this.defineStateThreadsArray.bind(this);
        this.maintainCountOfAllThreads = this.maintainCountOfAllThreads.bind(this);
        this.state = { spaced_threads: [], error: null };
    }
    componentDidMount() {
        this.setPageThreads();
    }
    maintainCountOfAllThreads() {
        this.count_of_all_threads_mounted++;
        if (this.count_of_all_threads_mounted == this.count_of_all_threads_on_page) {
            this.props.finishedCallBackFunction();
        }
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
                this.count_of_all_threads_on_page = threads_arr.length;
                this.count_of_all_threads_mounted = 0;
                //unset if set
                this.setState({ spaced_threads: [] });
                this.defineStateThreadsArray(threads_arr);
            }
            else {
                this.setState({ error: "Page out of bounds" });
            }
        })
            .catch((err) => {
            console.log(err);
            this.setState({ error: err + "\nJSON fetch error" });
        });
    }
    threadQuickReply(thread_id, reply_id) {
    }
    returnThreadJSXObject(thread_obj, key) {
        var thread_details = {
            board: this.props.board,
            thread_id: thread_obj[0]["no"],
            paged: thread_obj,
            threadQuickReply: this.threadQuickReply,
            finishedCallBackFunction: this.maintainCountOfAllThreads
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
        return (React.createElement("div", { id: "page-" + this.props.page + "-container", className: "page-container" }, this.state.spaced_threads));
    }
}
exports.Page = Page;


/***/ }),
/* 10 */
/***/ (function(module, exports, __webpack_require__) {

"use strict";

var __importStar = (this && this.__importStar) || function (mod) {
    if (mod && mod.__esModule) return mod;
    var result = {};
    if (mod != null) for (var k in mod) if (Object.hasOwnProperty.call(mod, k)) result[k] = mod[k];
    result["default"] = mod;
    return result;
};
Object.defineProperty(exports, "__esModule", { value: true });
const React = __importStar(__webpack_require__(0));
class DeleteButton extends React.Component {
    constructor(props) {
        super(props);
    }
    render() {
        return React.createElement("div", { className: "delete-container" },
            React.createElement("strong", null, "Delete Selected Posts"),
            React.createElement("br", null),
            React.createElement("label", null,
                "Password: ",
                React.createElement("input", { name: "pswrd", type: "password", value: localStorage['pswrd'] })),
            React.createElement("br", null),
            React.createElement("label", null,
                "Delete Media Only: ",
                React.createElement("input", { type: "checkbox", name: "file" })),
            React.createElement("br", null),
            React.createElement("input", { type: "submit", name: "delete", value: "delete" }));
    }
}
exports.DeleteButton = DeleteButton;


/***/ }),
/* 11 */
/***/ (function(module, exports, __webpack_require__) {

"use strict";

var __importStar = (this && this.__importStar) || function (mod) {
    if (mod && mod.__esModule) return mod;
    var result = {};
    if (mod != null) for (var k in mod) if (Object.hasOwnProperty.call(mod, k)) result[k] = mod[k];
    result["default"] = mod;
    return result;
};
Object.defineProperty(exports, "__esModule", { value: true });
const React = __importStar(__webpack_require__(0));
class ReportButton extends React.Component {
    constructor(props) {
        super(props);
    }
    render() {
        return React.createElement("div", { className: "report-container" },
            React.createElement("strong", null, "Report Selected Posts"),
            React.createElement("br", null),
            React.createElement("label", null,
                "Reason: ",
                React.createElement("input", { name: "reason", type: "text" })),
            React.createElement("br", null),
            React.createElement("input", { type: "submit", name: "report", value: "Report" }));
    }
}
exports.ReportButton = ReportButton;


/***/ }),
/* 12 */
/***/ (function(module, exports, __webpack_require__) {

"use strict";

// Use dragable to create a post option selector
// place things in localstorage
// also hooks and refs to relevant things
var __importStar = (this && this.__importStar) || function (mod) {
    if (mod && mod.__esModule) return mod;
    var result = {};
    if (mod != null) for (var k in mod) if (Object.hasOwnProperty.call(mod, k)) result[k] = mod[k];
    result["default"] = mod;
    return result;
};
var __importDefault = (this && this.__importDefault) || function (mod) {
    return (mod && mod.__esModule) ? mod : { "default": mod };
};
Object.defineProperty(exports, "__esModule", { value: true });
const React = __importStar(__webpack_require__(0));
const react_draggable_1 = __importDefault(__webpack_require__(13));
class OptionMenu extends React.Component {
    constructor(props) {
        super(props);
        this.state = ({ show_menu: false, grab_pointer: "grab", toggle_options: false });
        this.toggleShowMenu = this.toggleShowMenu.bind(this);
        this.setOptionLocalStore = this.setOptionLocalStore.bind(this);
        if (localStorage['fast-embed'] == undefined)
            localStorage['fast-embed'] = "true";
        if (localStorage['embed-specific'] == undefined)
            localStorage['embed-specific'] = "source";
        if (localStorage['file-info'] == undefined)
            localStorage['file-info'] = "false";
        if (localStorage['rev-img'] == undefined)
            localStorage['rev-img'] = "true";
        if (localStorage['no-img'] == undefined)
            localStorage['no-img'] = "false";
        if (localStorage['auto-up'] == undefined)
            localStorage['auto-up'] = "true";
    }
    toggleShowMenu() {
        this.setState({ show_menu: !this.state.show_menu });
    }
    setOptionLocalStore(e) {
        switch (e.target.name) {
            case "fast-embed":
                localStorage.setItem("fast-embed", "" + e.target.checked);
                break;
            case "embed-specific":
                localStorage.setItem("embed-specific", e.target.value);
                break;
            case "file-info":
                localStorage.setItem("file-info", "" + e.target.checked);
                break;
            case "rev-img":
                localStorage.setItem("rev-img", "" + e.target.checked);
                break;
            case "no-img":
                localStorage.setItem("no-img", "" + e.target.checked);
                break;
            case "auto-up":
                localStorage.setItem("auto-up", "" + e.target.checked);
                break;
        }
        this.setState({ toggle_options: !this.state.toggle_options });
        this.props.optionSetCallBack();
    }
    render() {
        return React.createElement("span", { className: "options-container" },
            React.createElement("a", { onClick: this.toggleShowMenu, style: { cursor: "pointer" } }, "[ Options ]"),
            this.state.show_menu &&
                React.createElement(react_draggable_1.default, { handle: ".handle" },
                    React.createElement("div", { id: "options-menu" },
                        React.createElement("div", { className: "handle", onMouseDown: (e) => this.setState({ grab_pointer: "grabbing" }), onMouseUp: (e) => this.setState({ grab_pointer: "grab" }), style: { cursor: this.state.grab_pointer } },
                            React.createElement("strong", { unselectable: "on" }, "Page Options"),
                            React.createElement("a", { className: "close-options", onClick: this.toggleShowMenu }, "X"),
                            React.createElement("hr", null)),
                        React.createElement("div", { id: "option-input-container" },
                            React.createElement("strong", null, "Embedding"),
                            " ",
                            React.createElement("br", null),
                            "\u2003",
                            React.createElement("label", null,
                                React.createElement("input", { type: "checkbox", name: "fast-embed", onClick: this.setOptionLocalStore, defaultChecked: localStorage['fast-embed'] == "true" }),
                                "Fast Video Embedding"),
                            React.createElement("br", null),
                            "\u2003\u2003",
                            React.createElement("label", null,
                                React.createElement("input", { type: "radio", name: "embed-specific", value: "source", onClick: this.setOptionLocalStore, defaultChecked: localStorage['embed-specific'] == "source", disabled: localStorage['fast-embed'] == "false" }),
                                "Source Thumbnails"),
                            React.createElement("br", null),
                            "\u2003\u2003",
                            React.createElement("label", null,
                                React.createElement("input", { type: "radio", name: "embed-specific", value: "thumb", onClick: this.setOptionLocalStore, defaultChecked: localStorage['embed-specific'] == "thumb", disabled: localStorage['fast-embed'] == "false" }),
                                "Kissu Thumbnails"),
                            React.createElement("br", null),
                            React.createElement("hr", null),
                            React.createElement("strong", null, "File Options"),
                            " ",
                            React.createElement("br", null),
                            "\u2003",
                            React.createElement("label", null,
                                React.createElement("input", { name: "file-info", type: "checkbox", onClick: this.setOptionLocalStore, defaultChecked: localStorage['file-info'] == "true" }),
                                "Show file info by default"),
                            React.createElement("br", null),
                            "\u2003",
                            React.createElement("label", null,
                                React.createElement("input", { name: "rev-img", type: "checkbox", onClick: this.setOptionLocalStore, defaultChecked: localStorage['rev-img'] == "true" }),
                                "Show reverse image search"),
                            React.createElement("br", null),
                            "\u2003",
                            React.createElement("label", null,
                                React.createElement("input", { name: "no-img", type: "checkbox", onClick: this.setOptionLocalStore, defaultChecked: localStorage['no-img'] == "true" }),
                                "Remove images from page load"),
                            React.createElement("br", null),
                            React.createElement("hr", null),
                            React.createElement("strong", null, "Auto Updater Options"),
                            " ",
                            React.createElement("br", null),
                            "\u2003",
                            React.createElement("label", null,
                                React.createElement("input", { name: "auto-up", type: "checkbox", onClick: this.setOptionLocalStore, defaultChecked: localStorage['auto-up'] == "true" }),
                                "Enable thread auto-updates"),
                            React.createElement("br", null),
                            React.createElement("hr", null),
                            React.createElement("hr", null)))));
    }
}
exports.OptionMenu = OptionMenu;


/***/ }),
/* 13 */
/***/ (function(module, exports, __webpack_require__) {

!function(t,e){ true?module.exports=e(__webpack_require__(0),__webpack_require__(1)):undefined}(window,function(t,e){return function(t){var e={};function n(r){if(e[r])return e[r].exports;var o=e[r]={i:r,l:!1,exports:{}};return t[r].call(o.exports,o,o.exports,n),o.l=!0,o.exports}return n.m=t,n.c=e,n.d=function(t,e,r){n.o(t,e)||Object.defineProperty(t,e,{enumerable:!0,get:r})},n.r=function(t){"undefined"!=typeof Symbol&&Symbol.toStringTag&&Object.defineProperty(t,Symbol.toStringTag,{value:"Module"}),Object.defineProperty(t,"__esModule",{value:!0})},n.t=function(t,e){if(1&e&&(t=n(t)),8&e)return t;if(4&e&&"object"==typeof t&&t&&t.__esModule)return t;var r=Object.create(null);if(n.r(r),Object.defineProperty(r,"default",{enumerable:!0,value:t}),2&e&&"string"!=typeof t)for(var o in t)n.d(r,o,function(e){return t[e]}.bind(null,o));return r},n.n=function(t){var e=t&&t.__esModule?function(){return t.default}:function(){return t};return n.d(e,"a",e),e},n.o=function(t,e){return Object.prototype.hasOwnProperty.call(t,e)},n.p="",n(n.s=4)}([function(t,e,n){t.exports=n(5)()},function(e,n){e.exports=t},function(t,n){t.exports=e},function(t,e,n){var r;
/*!
  Copyright (c) 2017 Jed Watson.
  Licensed under the MIT License (MIT), see
  http://jedwatson.github.io/classnames
*/!function(){"use strict";var n={}.hasOwnProperty;function o(){for(var t=[],e=0;e<arguments.length;e++){var r=arguments[e];if(r){var a=typeof r;if("string"===a||"number"===a)t.push(r);else if(Array.isArray(r)&&r.length){var i=o.apply(null,r);i&&t.push(i)}else if("object"===a)for(var s in r)n.call(r,s)&&r[s]&&t.push(s)}}return t.join(" ")}t.exports?(o.default=o,t.exports=o):void 0===(r=function(){return o}.apply(e,[]))||(t.exports=r)}()},function(t,e,n){var r=n(7),o=r.default,a=r.DraggableCore;t.exports=o,t.exports.default=o,t.exports.DraggableCore=a},function(t,e,n){"use strict";var r=n(6);function o(){}function a(){}a.resetWarningCache=o,t.exports=function(){function t(t,e,n,o,a,i){if(i!==r){var s=new Error("Calling PropTypes validators directly is not supported by the `prop-types` package. Use PropTypes.checkPropTypes() to call them. Read more at http://fb.me/use-check-prop-types");throw s.name="Invariant Violation",s}}function e(){return t}t.isRequired=t;var n={array:t,bool:t,func:t,number:t,object:t,string:t,symbol:t,any:t,arrayOf:e,element:t,elementType:t,instanceOf:e,node:t,objectOf:e,oneOf:e,oneOfType:e,shape:e,exact:e,checkPropTypes:a,resetWarningCache:o};return n.PropTypes=n,n}},function(t,e,n){"use strict";t.exports="SECRET_DO_NOT_PASS_THIS_OR_YOU_WILL_BE_FIRED"},function(t,e,n){"use strict";n.r(e);var r=n(1),o=n.n(r),a=n(0),i=n.n(a),s=n(2),u=n.n(s),c=n(3),l=n.n(c);function f(t,e){for(var n=0,r=t.length;n<r;n++)if(e.apply(e,[t[n],n,t]))return t[n]}function p(t){return"function"==typeof t||"[object Function]"===Object.prototype.toString.call(t)}function d(t){return"number"==typeof t&&!isNaN(t)}function g(t){return parseInt(t,10)}function y(t,e,n){if(t[e])return new Error("Invalid prop ".concat(e," passed to ").concat(n," - do not set this, set it on the child."))}var h=["Moz","Webkit","O","ms"];function b(t,e){return e?"".concat(e).concat(function(t){for(var e="",n=!0,r=0;r<t.length;r++)n?(e+=t[r].toUpperCase(),n=!1):"-"===t[r]?n=!0:e+=t[r];return e}(t)):t}var m=function(){var t=arguments.length>0&&void 0!==arguments[0]?arguments[0]:"transform";if("undefined"==typeof window||void 0===window.document)return"";var e=window.document.documentElement.style;if(t in e)return"";for(var n=0;n<h.length;n++)if(b(t,h[n])in e)return h[n];return""}();function v(t,e){var n=Object.keys(t);if(Object.getOwnPropertySymbols){var r=Object.getOwnPropertySymbols(t);e&&(r=r.filter(function(e){return Object.getOwnPropertyDescriptor(t,e).enumerable})),n.push.apply(n,r)}return n}function w(t,e,n){return e in t?Object.defineProperty(t,e,{value:n,enumerable:!0,configurable:!0,writable:!0}):t[e]=n,t}var O="";function S(t,e){return O||(O=f(["matches","webkitMatchesSelector","mozMatchesSelector","msMatchesSelector","oMatchesSelector"],function(e){return p(t[e])})),!!p(t[O])&&t[O](e)}function D(t,e,n){var r=t;do{if(S(r,e))return!0;if(r===n)return!1;r=r.parentNode}while(r);return!1}function x(t,e,n){t&&(t.attachEvent?t.attachEvent("on"+e,n):t.addEventListener?t.addEventListener(e,n,!0):t["on"+e]=n)}function P(t,e,n){t&&(t.detachEvent?t.detachEvent("on"+e,n):t.removeEventListener?t.removeEventListener(e,n,!0):t["on"+e]=null)}function j(t){var e=t.clientHeight,n=t.ownerDocument.defaultView.getComputedStyle(t);return e+=g(n.borderTopWidth),e+=g(n.borderBottomWidth)}function E(t){var e=t.clientWidth,n=t.ownerDocument.defaultView.getComputedStyle(t);return e+=g(n.borderLeftWidth),e+=g(n.borderRightWidth)}function T(t){var e=t.clientHeight,n=t.ownerDocument.defaultView.getComputedStyle(t);return e-=g(n.paddingTop),e-=g(n.paddingBottom)}function N(t){var e=t.clientWidth,n=t.ownerDocument.defaultView.getComputedStyle(t);return e-=g(n.paddingLeft),e-=g(n.paddingRight)}function C(t,e,n){var r=t.x,o=t.y,a="translate(".concat(r).concat(n,",").concat(o).concat(n,")");if(e){var i="".concat("string"==typeof e.x?e.x:e.x+n),s="".concat("string"==typeof e.y?e.y:e.y+n);a="translate(".concat(i,", ").concat(s,")")+a}return a}function M(t){if(t){var e,n,r=t.getElementById("react-draggable-style-el");r||((r=t.createElement("style")).type="text/css",r.id="react-draggable-style-el",r.innerHTML=".react-draggable-transparent-selection *::-moz-selection {all: inherit;}\n",r.innerHTML+=".react-draggable-transparent-selection *::selection {all: inherit;}\n",t.getElementsByTagName("head")[0].appendChild(r)),t.body&&(e=t.body,n="react-draggable-transparent-selection",e.classList?e.classList.add(n):e.className.match(new RegExp("(?:^|\\s)".concat(n,"(?!\\S)")))||(e.className+=" ".concat(n)))}}function k(t){try{t&&t.body&&(e=t.body,n="react-draggable-transparent-selection",e.classList?e.classList.remove(n):e.className=e.className.replace(new RegExp("(?:^|\\s)".concat(n,"(?!\\S)"),"g"),"")),t.selection?t.selection.empty():window.getSelection().removeAllRanges()}catch(t){}var e,n}function _(){return function(t){for(var e=1;e<arguments.length;e++){var n=null!=arguments[e]?arguments[e]:{};e%2?v(n,!0).forEach(function(e){w(t,e,n[e])}):Object.getOwnPropertyDescriptors?Object.defineProperties(t,Object.getOwnPropertyDescriptors(n)):v(n).forEach(function(e){Object.defineProperty(t,e,Object.getOwnPropertyDescriptor(n,e))})}return t}({touchAction:"none"},arguments.length>0&&void 0!==arguments[0]?arguments[0]:{})}function X(t){return"both"===t.props.axis||"x"===t.props.axis}function Y(t){return"both"===t.props.axis||"y"===t.props.axis}function L(t,e,n){var r="number"==typeof e?function(t,e){return t.targetTouches&&f(t.targetTouches,function(t){return e===t.identifier})||t.changedTouches&&f(t.changedTouches,function(t){return e===t.identifier})}(t,e):null;if("number"==typeof e&&!r)return null;var o=I(n);return function(t,e,n){var r=e===e.ownerDocument.body?{left:0,top:0}:e.getBoundingClientRect();return{x:(t.clientX+e.scrollLeft-r.left)/n,y:(t.clientY+e.scrollTop-r.top)/n}}(r||t,n.props.offsetParent||o.offsetParent||o.ownerDocument.body,n.props.scale)}function R(t,e,n){var r=t.state,o=!d(r.lastX),a=I(t);return o?{node:a,deltaX:0,deltaY:0,lastX:e,lastY:n,x:e,y:n}:{node:a,deltaX:e-r.lastX,deltaY:n-r.lastY,lastX:r.lastX,lastY:r.lastY,x:e,y:n}}function A(t,e){var n=t.props.scale;return{node:e.node,x:t.state.x+e.deltaX/n,y:t.state.y+e.deltaY/n,deltaX:e.deltaX/n,deltaY:e.deltaY/n,lastX:t.state.x,lastY:t.state.y}}function I(t){var e=u.a.findDOMNode(t);if(!e)throw new Error("<DraggableCore>: Unmounted during event!");return e}function U(t){return(U="function"==typeof Symbol&&"symbol"==typeof Symbol.iterator?function(t){return typeof t}:function(t){return t&&"function"==typeof Symbol&&t.constructor===Symbol&&t!==Symbol.prototype?"symbol":typeof t})(t)}function V(t,e){return function(t){if(Array.isArray(t))return t}(t)||function(t,e){var n=[],r=!0,o=!1,a=void 0;try{for(var i,s=t[Symbol.iterator]();!(r=(i=s.next()).done)&&(n.push(i.value),!e||n.length!==e);r=!0);}catch(t){o=!0,a=t}finally{try{r||null==s.return||s.return()}finally{if(o)throw a}}return n}(t,e)||function(){throw new TypeError("Invalid attempt to destructure non-iterable instance")}()}function W(t,e){for(var n=0;n<e.length;n++){var r=e[n];r.enumerable=r.enumerable||!1,r.configurable=!0,"value"in r&&(r.writable=!0),Object.defineProperty(t,r.key,r)}}function B(t){return(B=Object.setPrototypeOf?Object.getPrototypeOf:function(t){return t.__proto__||Object.getPrototypeOf(t)})(t)}function H(t){if(void 0===t)throw new ReferenceError("this hasn't been initialised - super() hasn't been called");return t}function q(t,e){return(q=Object.setPrototypeOf||function(t,e){return t.__proto__=e,t})(t,e)}function G(t,e,n){return e in t?Object.defineProperty(t,e,{value:n,enumerable:!0,configurable:!0,writable:!0}):t[e]=n,t}var z={touch:{start:"touchstart",move:"touchmove",stop:"touchend"},mouse:{start:"mousedown",move:"mousemove",stop:"mouseup"}},F=z.mouse,J=function(t){function e(){var t,n,r,o;!function(t,e){if(!(t instanceof e))throw new TypeError("Cannot call a class as a function")}(this,e);for(var a=arguments.length,i=new Array(a),s=0;s<a;s++)i[s]=arguments[s];return r=this,o=(t=B(e)).call.apply(t,[this].concat(i)),n=!o||"object"!==U(o)&&"function"!=typeof o?H(r):o,G(H(n),"state",{dragging:!1,lastX:NaN,lastY:NaN,touchIdentifier:null}),G(H(n),"handleDragStart",function(t){if(n.props.onMouseDown(t),!n.props.allowAnyClick&&"number"==typeof t.button&&0!==t.button)return!1;var e=u.a.findDOMNode(H(n));if(!e||!e.ownerDocument||!e.ownerDocument.body)throw new Error("<DraggableCore> not mounted on DragStart!");var r=e.ownerDocument;if(!(n.props.disabled||!(t.target instanceof r.defaultView.Node)||n.props.handle&&!D(t.target,n.props.handle,e)||n.props.cancel&&D(t.target,n.props.cancel,e))){var o=function(t){return t.targetTouches&&t.targetTouches[0]?t.targetTouches[0].identifier:t.changedTouches&&t.changedTouches[0]?t.changedTouches[0].identifier:void 0}(t);n.setState({touchIdentifier:o});var a=L(t,o,H(n));if(null!=a){var i=a.x,s=a.y,c=R(H(n),i,s);n.props.onStart,!1!==n.props.onStart(t,c)&&(n.props.enableUserSelectHack&&M(r),n.setState({dragging:!0,lastX:i,lastY:s}),x(r,F.move,n.handleDrag),x(r,F.stop,n.handleDragStop))}}}),G(H(n),"handleDrag",function(t){"touchmove"===t.type&&t.preventDefault();var e=L(t,n.state.touchIdentifier,H(n));if(null!=e){var r,o,a,i=e.x,s=e.y;if(Array.isArray(n.props.grid)){var u=i-n.state.lastX,c=s-n.state.lastY,l=V((r=n.props.grid,o=u,a=c,[Math.round(o/r[0])*r[0],Math.round(a/r[1])*r[1]]),2);if(u=l[0],c=l[1],!u&&!c)return;i=n.state.lastX+u,s=n.state.lastY+c}var f=R(H(n),i,s);if(!1!==n.props.onDrag(t,f))n.setState({lastX:i,lastY:s});else try{n.handleDragStop(new MouseEvent("mouseup"))}catch(t){var p=document.createEvent("MouseEvents");p.initMouseEvent("mouseup",!0,!0,window,0,0,0,0,0,!1,!1,!1,!1,0,null),n.handleDragStop(p)}}}),G(H(n),"handleDragStop",function(t){if(n.state.dragging){var e=L(t,n.state.touchIdentifier,H(n));if(null!=e){var r=e.x,o=e.y,a=R(H(n),r,o),i=u.a.findDOMNode(H(n));i&&n.props.enableUserSelectHack&&k(i.ownerDocument),n.setState({dragging:!1,lastX:NaN,lastY:NaN}),n.props.onStop(t,a),i&&(P(i.ownerDocument,F.move,n.handleDrag),P(i.ownerDocument,F.stop,n.handleDragStop))}}}),G(H(n),"onMouseDown",function(t){return F=z.mouse,n.handleDragStart(t)}),G(H(n),"onMouseUp",function(t){return F=z.mouse,n.handleDragStop(t)}),G(H(n),"onTouchStart",function(t){return F=z.touch,n.handleDragStart(t)}),G(H(n),"onTouchEnd",function(t){return F=z.touch,n.handleDragStop(t)}),n}var n,r,a;return function(t,e){if("function"!=typeof e&&null!==e)throw new TypeError("Super expression must either be null or a function");t.prototype=Object.create(e&&e.prototype,{constructor:{value:t,writable:!0,configurable:!0}}),e&&q(t,e)}(e,o.a.Component),n=e,(r=[{key:"componentWillUnmount",value:function(){var t=u.a.findDOMNode(this);if(t){var e=t.ownerDocument;P(e,z.mouse.move,this.handleDrag),P(e,z.touch.move,this.handleDrag),P(e,z.mouse.stop,this.handleDragStop),P(e,z.touch.stop,this.handleDragStop),this.props.enableUserSelectHack&&k(e)}}},{key:"render",value:function(){return o.a.cloneElement(o.a.Children.only(this.props.children),{style:_(this.props.children.props.style),onMouseDown:this.onMouseDown,onTouchStart:this.onTouchStart,onMouseUp:this.onMouseUp,onTouchEnd:this.onTouchEnd})}}])&&W(n.prototype,r),a&&W(n,a),e}();function K(t){return(K="function"==typeof Symbol&&"symbol"==typeof Symbol.iterator?function(t){return typeof t}:function(t){return t&&"function"==typeof Symbol&&t.constructor===Symbol&&t!==Symbol.prototype?"symbol":typeof t})(t)}function Q(){return(Q=Object.assign||function(t){for(var e=1;e<arguments.length;e++){var n=arguments[e];for(var r in n)Object.prototype.hasOwnProperty.call(n,r)&&(t[r]=n[r])}return t}).apply(this,arguments)}function Z(t,e){if(null==t)return{};var n,r,o=function(t,e){if(null==t)return{};var n,r,o={},a=Object.keys(t);for(r=0;r<a.length;r++)n=a[r],e.indexOf(n)>=0||(o[n]=t[n]);return o}(t,e);if(Object.getOwnPropertySymbols){var a=Object.getOwnPropertySymbols(t);for(r=0;r<a.length;r++)n=a[r],e.indexOf(n)>=0||Object.prototype.propertyIsEnumerable.call(t,n)&&(o[n]=t[n])}return o}function $(t,e){return function(t){if(Array.isArray(t))return t}(t)||function(t,e){var n=[],r=!0,o=!1,a=void 0;try{for(var i,s=t[Symbol.iterator]();!(r=(i=s.next()).done)&&(n.push(i.value),!e||n.length!==e);r=!0);}catch(t){o=!0,a=t}finally{try{r||null==s.return||s.return()}finally{if(o)throw a}}return n}(t,e)||function(){throw new TypeError("Invalid attempt to destructure non-iterable instance")}()}function tt(t,e){var n=Object.keys(t);if(Object.getOwnPropertySymbols){var r=Object.getOwnPropertySymbols(t);e&&(r=r.filter(function(e){return Object.getOwnPropertyDescriptor(t,e).enumerable})),n.push.apply(n,r)}return n}function et(t){for(var e=1;e<arguments.length;e++){var n=null!=arguments[e]?arguments[e]:{};e%2?tt(n,!0).forEach(function(e){st(t,e,n[e])}):Object.getOwnPropertyDescriptors?Object.defineProperties(t,Object.getOwnPropertyDescriptors(n)):tt(n).forEach(function(e){Object.defineProperty(t,e,Object.getOwnPropertyDescriptor(n,e))})}return t}function nt(t){return(nt=Object.setPrototypeOf?Object.getPrototypeOf:function(t){return t.__proto__||Object.getPrototypeOf(t)})(t)}function rt(t){if(void 0===t)throw new ReferenceError("this hasn't been initialised - super() hasn't been called");return t}function ot(t,e){for(var n=0;n<e.length;n++){var r=e[n];r.enumerable=r.enumerable||!1,r.configurable=!0,"value"in r&&(r.writable=!0),Object.defineProperty(t,r.key,r)}}function at(t,e,n){return e&&ot(t.prototype,e),n&&ot(t,n),t}function it(t,e){return(it=Object.setPrototypeOf||function(t,e){return t.__proto__=e,t})(t,e)}function st(t,e,n){return e in t?Object.defineProperty(t,e,{value:n,enumerable:!0,configurable:!0,writable:!0}):t[e]=n,t}G(J,"displayName","DraggableCore"),G(J,"propTypes",{allowAnyClick:i.a.bool,disabled:i.a.bool,enableUserSelectHack:i.a.bool,offsetParent:function(t,e){if(t[e]&&1!==t[e].nodeType)throw new Error("Draggable's offsetParent must be a DOM Node.")},grid:i.a.arrayOf(i.a.number),handle:i.a.string,cancel:i.a.string,onStart:i.a.func,onDrag:i.a.func,onStop:i.a.func,onMouseDown:i.a.func,scale:i.a.number,className:y,style:y,transform:y}),G(J,"defaultProps",{allowAnyClick:!1,cancel:null,disabled:!1,enableUserSelectHack:!0,offsetParent:null,handle:null,grid:null,transform:null,onStart:function(){},onDrag:function(){},onStop:function(){},onMouseDown:function(){},scale:1}),n.d(e,"default",function(){return ut}),n.d(e,"DraggableCore",function(){return J});var ut=function(t){function e(t){var n,r,o;return function(t,e){if(!(t instanceof e))throw new TypeError("Cannot call a class as a function")}(this,e),r=this,o=nt(e).call(this,t),n=!o||"object"!==K(o)&&"function"!=typeof o?rt(r):o,st(rt(n),"onDragStart",function(t,e){if(!1===n.props.onStart(t,A(rt(n),e)))return!1;n.setState({dragging:!0,dragged:!0})}),st(rt(n),"onDrag",function(t,e){if(!n.state.dragging)return!1;var r=A(rt(n),e),o={x:r.x,y:r.y};if(n.props.bounds){var a=o.x,i=o.y;o.x+=n.state.slackX,o.y+=n.state.slackY;var s=$(function(t,e,n){if(!t.props.bounds)return[e,n];var r=t.props.bounds;r="string"==typeof r?r:function(t){return{left:t.left,top:t.top,right:t.right,bottom:t.bottom}}(r);var o=I(t);if("string"==typeof r){var a,i=o.ownerDocument,s=i.defaultView;if(!((a="parent"===r?o.parentNode:i.querySelector(r))instanceof s.HTMLElement))throw new Error('Bounds selector "'+r+'" could not find an element.');var u=s.getComputedStyle(o),c=s.getComputedStyle(a);r={left:-o.offsetLeft+g(c.paddingLeft)+g(u.marginLeft),top:-o.offsetTop+g(c.paddingTop)+g(u.marginTop),right:N(a)-E(o)-o.offsetLeft+g(c.paddingRight)-g(u.marginRight),bottom:T(a)-j(o)-o.offsetTop+g(c.paddingBottom)-g(u.marginBottom)}}return d(r.right)&&(e=Math.min(e,r.right)),d(r.bottom)&&(n=Math.min(n,r.bottom)),d(r.left)&&(e=Math.max(e,r.left)),d(r.top)&&(n=Math.max(n,r.top)),[e,n]}(rt(n),o.x,o.y),2),u=s[0],c=s[1];o.x=u,o.y=c,o.slackX=n.state.slackX+(a-o.x),o.slackY=n.state.slackY+(i-o.y),r.x=o.x,r.y=o.y,r.deltaX=o.x-n.state.x,r.deltaY=o.y-n.state.y}if(!1===n.props.onDrag(t,r))return!1;n.setState(o)}),st(rt(n),"onDragStop",function(t,e){if(!n.state.dragging)return!1;if(!1===n.props.onStop(t,A(rt(n),e)))return!1;var r={dragging:!1,slackX:0,slackY:0};if(Boolean(n.props.position)){var o=n.props.position,a=o.x,i=o.y;r.x=a,r.y=i}n.setState(r)}),n.state={dragging:!1,dragged:!1,x:t.position?t.position.x:t.defaultPosition.x,y:t.position?t.position.y:t.defaultPosition.y,prevPropsPosition:et({},t.position),slackX:0,slackY:0,isElementSVG:!1},!t.position||t.onDrag||t.onStop||console.warn("A `position` was applied to this <Draggable>, without drag handlers. This will make this component effectively undraggable. Please attach `onDrag` or `onStop` handlers so you can adjust the `position` of this element."),n}return function(t,e){if("function"!=typeof e&&null!==e)throw new TypeError("Super expression must either be null or a function");t.prototype=Object.create(e&&e.prototype,{constructor:{value:t,writable:!0,configurable:!0}}),e&&it(t,e)}(e,o.a.Component),at(e,null,[{key:"getDerivedStateFromProps",value:function(t,e){var n=t.position,r=e.prevPropsPosition;return!n||r&&n.x===r.x&&n.y===r.y?null:{x:n.x,y:n.y,prevPropsPosition:et({},n)}}}]),at(e,[{key:"componentDidMount",value:function(){void 0!==window.SVGElement&&u.a.findDOMNode(this)instanceof window.SVGElement&&this.setState({isElementSVG:!0})}},{key:"componentWillUnmount",value:function(){this.setState({dragging:!1})}},{key:"render",value:function(){var t,e=this.props,n=(e.axis,e.bounds,e.children),r=e.defaultPosition,a=e.defaultClassName,i=e.defaultClassNameDragging,s=e.defaultClassNameDragged,u=e.position,c=e.positionOffset,f=(e.scale,Z(e,["axis","bounds","children","defaultPosition","defaultClassName","defaultClassNameDragging","defaultClassNameDragged","position","positionOffset","scale"])),p={},d=null,g=!Boolean(u)||this.state.dragging,y=u||r,h={x:X(this)&&g?this.state.x:y.x,y:Y(this)&&g?this.state.y:y.y};this.state.isElementSVG?d=function(t,e){return C(t,e,"")}(h,c):p=function(t,e){var n=C(t,e,"px");return w({},b("transform",m),n)}(h,c);var v=l()(n.props.className||"",a,(st(t={},i,this.state.dragging),st(t,s,this.state.dragged),t));return o.a.createElement(J,Q({},f,{onStart:this.onDragStart,onDrag:this.onDrag,onStop:this.onDragStop}),o.a.cloneElement(o.a.Children.only(n),{className:v,style:et({},n.props.style,{},p),transform:d}))}}]),e}();st(ut,"displayName","Draggable"),st(ut,"propTypes",et({},J.propTypes,{axis:i.a.oneOf(["both","x","y","none"]),bounds:i.a.oneOfType([i.a.shape({left:i.a.number,right:i.a.number,top:i.a.number,bottom:i.a.number}),i.a.string,i.a.oneOf([!1])]),defaultClassName:i.a.string,defaultClassNameDragging:i.a.string,defaultClassNameDragged:i.a.string,defaultPosition:i.a.shape({x:i.a.number,y:i.a.number}),positionOffset:i.a.shape({x:i.a.oneOfType([i.a.number,i.a.string]),y:i.a.oneOfType([i.a.number,i.a.string])}),position:i.a.shape({x:i.a.number,y:i.a.number}),className:y,style:y,transform:y})),st(ut,"defaultProps",et({},J.defaultProps,{axis:"both",bounds:!1,defaultClassName:"react-draggable",defaultClassNameDragging:"react-draggable-dragging",defaultClassNameDragged:"react-draggable-dragged",defaultPosition:{x:0,y:0},position:null,scale:1}))}])});


/***/ }),
/* 14 */
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
var __importStar = (this && this.__importStar) || function (mod) {
    if (mod && mod.__esModule) return mod;
    var result = {};
    if (mod != null) for (var k in mod) if (Object.hasOwnProperty.call(mod, k)) result[k] = mod[k];
    result["default"] = mod;
    return result;
};
Object.defineProperty(exports, "__esModule", { value: true });
const React = __importStar(__webpack_require__(0));
// FIX: expansion doesn't updates the paged property when new treads have been added.
class NavButtons extends React.Component {
    constructor(props) {
        super(props);
        this.state = ({ paged: false, board: "" });
        this.checkThreadUpdates = this.checkThreadUpdates.bind(this);
        this.fetchThreadTimeJSON = this.fetchThreadTimeJSON.bind(this);
    }
    componentDidMount() {
        this.checkThreadUpdates();
    }
    // return a time to parent to pass down to child
    /*
       Time save by only scanning first page for greatest time.
       Hides issue with useless position based sorting of threads.json.
       Unlikley any board will have a page of stickies.
    */
    checkThreadUpdates() {
        return __awaiter(this, void 0, void 0, function* () {
            this.fetchThreadTimeJSON(this.props.board)
                .then((recieved) => {
                let thread_json = JSON.parse(recieved);
                let max_time = 0;
                thread_json[0]["threads"].forEach(function (json_el) {
                    if (json_el['last_modified'] > max_time) {
                        max_time = json_el['last_modified'];
                    }
                });
                let time_string = "";
                console.log(((Date.now() / 1000 - max_time) / (60 * 60 * 24)));
                console.log(((Date.now() / 1000 - max_time)));
                if (((Date.now() / 1000 - max_time) / (60 * 60 * 24 * 30 * 12)) > 1) {
                    time_string = Math.floor((Date.now() / 1000 - max_time / (60 * 60 * 24 * 30 * 12))) + " year";
                }
                else if (((Date.now() / 1000 - max_time) / (60 * 60 * 24 * 30)) > 1) {
                    time_string = Math.floor(((Date.now() / 1000 - max_time) / (60 * 60 * 24 * 30))) + " month";
                }
                else if (((Date.now() / 1000 - max_time) / (60 * 60 * 24)) > 1) {
                    time_string = Math.floor(((Date.now() / 1000 - max_time) / (60 * 60 * 24))) + " day";
                }
                else if (((Date.now() / 1000 - max_time) / (60 * 60)) > 1) {
                    time_string = Math.floor(((Date.now() / 1000 - max_time) / (60 * 60))) + " hour";
                }
                else if (((Date.now() / 1000 - max_time) / (60)) > 1) {
                    time_string = Math.floor(((Date.now() / 1000 - max_time) / (60))) + " minute";
                }
                else {
                    time_string = Math.floor(Date.now() / 1000 - max_time) + " second";
                }
                if (time_string.substring(0, time_string.indexOf(" ")).length > 1 || parseInt(time_string[0]) > 1) {
                    time_string += "s";
                }
                console.log(time_string);
                this.props.confirmUpdateClick(time_string, max_time);
            })
                .catch((err) => {
                console.log(err);
                //this.setState({error: err + "\nJSON fetchError"});
            });
        });
    }
    fetchThreadTimeJSON(board) {
        console.log('f');
        return new Promise((resolve, reject) => {
            var xhr_thread_details = new XMLHttpRequest();
            xhr_thread_details.addEventListener("load", function (re) {
                if (this.status >= 300)
                    reject(this.status);
                else
                    resolve(this.response);
            });
            xhr_thread_details.addEventListener("error", function (err) {
                reject(this.status);
            });
            xhr_thread_details.open("GET", `/${board}/threads.json`);
            xhr_thread_details.send();
        });
    }
    render() {
        return React.createElement("span", { className: "nav-links" },
            !this.props.paged && React.createElement("a", { href: "/" + this.props.board + "/", className: "return" }, "[Return]"),
            "\u00A0",
            this.props.paged && React.createElement("a", { title: "Click to Update", style: { cursor: "pointer", textDecoration: "none" }, className: "index-updater", onClick: this.checkThreadUpdates },
                "[",
                this.props.time_string,
                "]"),
            "\u00A0",
            React.createElement("a", { href: "/" + this.props.board + "/catalog" }, "[Catalog]"),
            "\u00A0",
            React.createElement("a", { href: "archive" }, "[Archive]"),
            "\u00A0");
    }
}
exports.NavButtons = NavButtons;


/***/ })
/******/ ]);
});
//# sourceMappingURL=ui-bundle.js.map