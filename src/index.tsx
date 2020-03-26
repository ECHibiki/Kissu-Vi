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
// The master container 
import {PostForm} from "./components/PostForm";

// Use library solution to render elements through inline HTML
module.exports = {
  renderTest: function (id: string) {
    console.log('run from library - ' + id);
	ReactDOM.render(<Hello/>, document.getElementById(id));
  },
  // the two functions are for the sake of testing purposes only
  renderThread: function(id_num:number, board_str:string){
	console.log("qtest " + id_num);
	ReactDOM.render(<PostForm thread_id={id_num} board={board_str} paged={false} page={0}/>, document.getElementById("thread_form"));
  },
  renderPage: function(page_num:number, board_str:string){
   	console.log("ptest " + page_num + " " + board_str)
	ReactDOM.render(<PostForm thread_id={0} board={board_str} paged={true} page={page_num}/>, document.getElementById("thread_form"));
  }
}
