$('#lnkMenu').click(function(evt) {
     evt.preventDefault(); //to prevent from appending hash to url
     $('html, body').animate({
       'scrollTop':   $('#menu').offset().top
     }, 800);
});

$('#menuN').click(function(evt) {
     evt.preventDefault(); //to prevent from appending hash to url
     $('html, body').animate({
       'scrollTop':   ($('#menu').offset().top-95)
     }, 800);
});

$('#lnkBreak').click(function(evt) {
     evt.preventDefault(); //to prevent from appending hash to url
     $('html, body').animate({
       'scrollTop':   ($('#breakfast').offset().top-120)
     }, 800);
});

$('#lnkLunch').click(function(evt) {
     evt.preventDefault(); //to prevent from appending hash to url
     $('html, body').animate({
       'scrollTop':   ($('#lunch').offset().top-95)
     }, 800);
});

$('#lnkDrinks').click(function(evt) {
     evt.preventDefault(); //to prevent from appending hash to url
     $('html, body').animate({
       'scrollTop':   ($('#drinks').offset().top-95)
     }, 800);
});

$('#lnkFam').click(function(evt) {
     evt.preventDefault(); //to prevent from appending hash to url
     $('html, body').animate({
       'scrollTop':   ($('#family').offset().top-95)
     }, 800);
});

$('#lnkFam').click(function(evt) {
     evt.preventDefault(); //to prevent from appending hash to url
     $('html, body').animate({
       'scrollTop':   ($('#family').offset().top-95)
     }, 800);
});

$('#home').click(function(evt) {
     evt.preventDefault(); //to prevent from appending hash to url
     $('html, body').animate({
       'scrollTop':   0
     }, 800);
});
