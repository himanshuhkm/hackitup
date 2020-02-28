$(document).ready(function(){

	var d, h, m, s;
	var countDownDate = new Date("October 23, 2018 00:00:00 GMT+05:30").getTime();
        
	function setTimer(){
		var now = new Date().getTime();
		var distance = countDownDate - now;

		d = Math.floor(distance / (1000 * 60 * 60 * 24));
		h = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
		m = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
		s = Math.floor((distance % (1000 * 60)) / 1000);	

		$("#timer-days .value").text(d);
		$("#timer-hours .value").text(h);
		$("#timer-mins .value").text(m);
		$("#timer-secs .value").text(s);				
	}

	setTimer();
	setInterval(setTimer, 1000);
});