$(document).ready(function () {

$("#hc").on({
 "mouseover" : function() {
    this.src = 'hc-gray.png';
  },
  "mouseout" : function() {
    this.src='hc-green.png';
  }
});
    
$("#em").on({
 "mouseover" : function() {
    this.src = 'em-gray.png';
  },
  "mouseout" : function() {
    this.src='em-green.png';
  }
});
    
$("#edu").on({
 "mouseover" : function() {
    this.src = 'edu-gray.png';
  },
  "mouseout" : function() {
    this.src='edu-green.png';
  }
});

$("#env").on({
 "mouseover" : function() {
    this.src = 'env-gray.png';
  },
  "mouseout" : function() {
    this.src='env-green.png';
  }
});
    
 $("#com").on({
 "mouseover" : function() {
    this.src = 'com-gray.png';
  },
  "mouseout" : function() {
    this.src='com-green.png';
  }
});

$("#an").on({
 "mouseover" : function() {
    this.src = 'an-gray.png';
  },
  "mouseout" : function() {
    this.src='an-green.png';
  }
});


    
/*$('.cat').hover(function () {
        $(this).toggleClass("change"); 
    });
    
    $('.submitBtn').hover(function () {
        $(this).toggleClass("button-hover");
    }); */
});