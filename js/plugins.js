// Avoid `console` errors in browsers that lack a console.
(function() {
    var method;
    var noop = function () {};
    var methods = [
        'assert', 'clear', 'count', 'debug', 'dir', 'dirxml', 'error',
        'exception', 'group', 'groupCollapsed', 'groupEnd', 'info', 'log',
        'markTimeline', 'profile', 'profileEnd', 'table', 'time', 'timeEnd',
        'timeStamp', 'trace', 'warn'
    ];
    var length = methods.length;
    var console = (window.console = window.console || {});

    while (length--) {
        method = methods[length];

        // Only stub undefined methods.
        if (!console[method]) {
            console[method] = noop;
        }
    }
}()); 
/* ======================= */
/*		fade in,out 	   
======================= */ 
$(document).ready(function() {
    $("body").css("display", "none");
 
    $("body").fadeIn(700);
 
    $("nav ul li a, thumbnail a").click(function(event){
        event.preventDefault();
        linkLocation = this.href;
        $("body").fadeOut(500, redirectPage);      
    });
         
    function redirectPage() {
        window.location = linkLocation;
    }
});






