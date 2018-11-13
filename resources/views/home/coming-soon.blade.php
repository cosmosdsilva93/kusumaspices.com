<!DOCTYPE html>
<html lang="en">
<head>
	<title>Kusuma Spices</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.min.css') }}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('fonts/font-awesome-4.7.0/css/font-awesome.min.css') }}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('fonts/iconic/css/material-design-iconic-font.min.css') }}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('css/animate.css') }}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('css/select2.min.css') }}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('css/util.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/main.css') }}">
<!--===============================================================================================-->
</head>
<body>
	
	
	<div class="bg-img1 overlay1 size1 flex-w flex-c-m p-t-55 p-b-55 p-l-15 p-r-15" style="background-image: url('images/bg01.jpg');">
		<div class="wsize1">
			<p class="txt-center p-b-23">
				<i class="zmdi zmdi-card-giftcard cl0 fs-60"></i>
			</p>

			<h3 class="l1-txt1 txt-center p-b-22">
				Coming Soon
			</h3>

			<p class="txt-center m2-txt1 p-b-67">
				Our website is under construction.
			</p>

			<!-- <div id="countdown" class="flex-w flex-sa-m cd100 bor1 p-t-42 p-b-22 p-l-50 p-r-50 respon1">
				<div class="flex-col-c-m wsize2 m-b-20">
					<span id="days" class="l1-txt2 p-b-4 days">00</span>
					<span class="m2-txt2">Days</span>
				</div>

				<span class="l1-txt2 p-b-22">:</span>
				
				<div class="flex-col-c-m wsize2 m-b-20">
					<span id="hours" class="l1-txt2 p-b-4 hours">00</span>
					<span class="m2-txt2">Hours</span>
				</div>

				<span class="l1-txt2 p-b-22 respon2">:</span>

				<div class="flex-col-c-m wsize2 m-b-20">
					<span id="minutes" class="l1-txt2 p-b-4 minutes">00</span>
					<span class="m2-txt2">Minutes</span>
				</div>

				<span class="l1-txt2 p-b-22">:</span>

				<div class="flex-col-c-m wsize2 m-b-20">
					<span id="seconds" class="l1-txt2 p-b-4 seconds">00</span>
					<span class="m2-txt2">Seconds</span>
				</div>
			</div> -->

			<!-- <form class="flex-w flex-c-m contact100-form validate-form p-t-70">
				<div class="wrap-input100 validate-input where1" data-validate = "Email is required: ex@abc.xyz">
					<input class="s1-txt1 placeholder0 input100" type="text" name="email" placeholder="Email Address">
					<span class="focus-input100"></span>
				</div>

				<button class="flex-c-m s1-txt1 size2 how-btn trans-04 where1">
					Notify Me
				</button>
			</form> -->			
		</div>
	</div>



	

<!--===============================================================================================-->	
	<script src="{{ asset('js/jquery-3.2.1.min.js') }}"></script>
<!--===============================================================================================-->
	<script src="{{ asset('js/popper.js') }}"></script>
	<script src="{{ asset('js/bootstrap.min.js') }}"></script>
<!--===============================================================================================-->
	<script src="{{ asset('js/select2.min.js') }}"></script>
<!--===============================================================================================-->
	
	<script>
		// $('.cd100').countdown100({
		// 	/*Set Endtime here*/
		// 	/*Endtime must be > current time*/
		// 	endtimeYear: 0,
		// 	endtimeMonth: 0,
		// 	endtimeDate: 5,
		// 	endtimeHours: 3,
		// 	endtimeMinutes: 14,
		// 	endtimeSeconds: 10,
		// 	timeZone: "" 
		// 	// ex:  timeZone: "America/New_York"
		// 	//go to " http://momentjs.com/timezone/ " to get timezone
		// });

		// Set the date we're counting down to
		var countDownDate = new Date("Nov 12, 2018 00:00:00").getTime();

		// Update the count down every 1 second
		var x = setInterval(function() {

		  	// Get todays date and time
		  	var now = new Date().getTime();

		  	// Find the distance between now and the count down date
		  	var distance = countDownDate - now;

		  	// Time calculations for days, hours, minutes and seconds
		  	var days = Math.floor(distance / (1000 * 60 * 60 * 24));
		  	var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
		  	var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
		  	var seconds = Math.floor((distance % (1000 * 60)) / 1000);

		  	// Display the result in the element with id="demo"
		  	document.getElementById("days").innerHTML = days;
		  	document.getElementById("hours").innerHTML = hours;
		  	document.getElementById("minutes").innerHTML = minutes;
		  	document.getElementById("seconds").innerHTML = seconds;


		  	// If the count down is finished, write some text 
		  	if (distance < 0) {
		    	clearInterval(x);
		    	document.getElementById("countdown").innerHTML = "Yay!";
		  	}
		}, 1000);
	</script>
<!--===============================================================================================-->
	<script src="{{ asset('js/tilt.jquery.min.js') }}"></script>
	<script >
		$('.js-tilt').tilt({
			scale: 1.1
		})
	</script>
<!--===============================================================================================-->
	<script src="{{ asset('js/main.js') }}"></script>

</body>
</html>