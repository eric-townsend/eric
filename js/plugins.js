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
// Preload 
$(document).ready(function () {
		$(".wrap").queryLoader2({
		barColor: "#000",
		backgroundColor: "#fff",
		percentage: true,
		barHeight: 1,
		completeAnimation: "grow",
		minimumTime: 1000
	});

});
//Reize .wrap 100% height 
$(document).ready(function(){
	resizeDiv();
});

window.onresize = function(event) {
	resizeDiv();
}

function resizeDiv() {
	vph = $(window).height(); 
	$('.container').css({'height': vph  + '%'});
}


