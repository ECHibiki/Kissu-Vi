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
  renderThread: function(id:string){
	console.log("qtest " + id);
	//ReactDOM.render(<Thread/>, document.getElementById(id));
  },
  renderPage: function(page:string){
    console.log("ptest " + page)
	//ReactDOM.render(<Page/>, document.getElementById(id));
  }
}
