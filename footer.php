<script src='https://www.google.com/recaptcha/api.js'></script>

<script>
	$(document).ready(function() {
		$('body').css('display', 'none');
		$('body').fadeIn(1000);
		$('.link').click(function() {
			event.preventDefault();
			newLocation = this.href;
		$('body').fadeOut(1000, newpage);
	});
	function newpage() {
		window.location = newLocation;
	}
	});


	$( "#submit" ).click(function() {
		console.log("yep")
	  	$('.url').fadeOut(500);
	  	$('#submit').fadeOut(500)
	  	$('.g-recaptcha').delay(500).fadeIn(500);
	  	$('.shorten').delay(500).fadeIn(500);
	});

</script>

</body>
</html>