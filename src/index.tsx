// This file should not do anything. It's a library
// It is to access react transpiled functions
// code under MPL

var React = require('react');
var ReactDOM = require('react-dom');

import {Hello} from "./components/Hello";

module.exports = {
  renderTest: function (id: string) {
    console.log('run from library - ' + id);
	ReactDOM.render(<Hello/>, document.getElementById(id));
  }
}
