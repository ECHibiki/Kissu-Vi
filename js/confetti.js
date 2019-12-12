//festive confetti courtesy of http://www.cagrimmett.com/til/2018/01/05/css-confetti.html
// modifications by verniy

$(document).ready(function(){

for (var i = 0; i < 100; i++) {
	(function(i_){
	  setTimeout(function(){createconfetti(i_)}, i_* 100);
	})(i)
}

function createconfetti(i) {
  var width = Math.random() * 8;
  var height = width * 0.4;
  var colourIdx = Math.ceil(Math.random() * 3);
  var colour = "red";
  switch(colourIdx) {
    case 1:
      colour = "yellow";
      break;
    case 2:
      colour = "blue";
      break;
    default:
      colour = "red";
  }
  $('<div class="confetti-'+i+' '+colour+'"></div>').css({
    "width" : width+"px",
    "height" : height+"px",
    "top" : -Math.random()*20+"%",
    "left" : Math.random()*50+"%",
    "opacity" : Math.random()+0.5,
    "transform" : "rotate("+Math.random()*360+"deg)"
  }).appendTo('body');  
  
  drop(i);
}

function drop(x) {
  $('.confetti-'+x).animate({
    top: document.body.offsetHeight + "px",
    left: "+="+Math.random()*50+"%"
  }, Math.random()*3000 + 12000, function() {
    reset(x);
  });
}

function reset(x) {
  $('.confetti-'+x).animate({
    "top" : -Math.random()*20+"%",
    "left" : "-="+Math.random()*30+"%"
  }, 0, function() {
    drop(x);             
  });
} 
});