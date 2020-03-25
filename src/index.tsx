// This file should not do anything. It's a library
// It is to access react transpiled functions
// code under MPL

var React = require('react');
var ReactDOM = require('react-dom');

import {Hello} from "./components/Hello";
// A composite of posts
import {Post} from "./components/Post";
// A composite of posts
import {Thread} from "./components/Thread";
// A composite of threads
import {Page} from "./components/Page";
// A composite of pages
import {Catalog} from "./components/Catalog";


// Use library solution to render elements through inline HTML
module.exports = {
  renderTest: function (id: string) {
    console.log('run from library - ' + id);
	ReactDOM.render(<Hello/>, document.getElementById(id));
  },
  // the two functions are for the sake of testing purposes only
  renderThread: function(id_str:string, board_str:string){
	console.log("qtest " + id_str);
	ReactDOM.render(<Thread id={id_str} board={board_str} paged={false}/>, document.getElementById("thread_form"));
  },
  renderPage: function(page_num:number, board_str:string){
   	console.log("ptest " + page_num + " " + board_str)
	ReactDOM.render(<Page page={page_num} board={board_str}/>, document.getElementById("thread_form"));
  }
}
