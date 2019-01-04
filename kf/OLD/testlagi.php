<html>
<head>
	<title>Kimia Farma</title>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
		<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
		<script src="https://code.jquery.com/jquery-2.1.3.js" integrity="sha256-goy7ystDD5xbXSf+kwL4eV6zOPJCEBD1FBiCElIm+U8=" crossorigin="anonymous"></script>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<script src="https://code.highcharts.com/highcharts.js"></script>
		<script src="https://code.highcharts.com/highcharts-more.js"></script>
		<script src="https://code.highcharts.com/modules/solid-gauge.js"></script>
		<!--------------------------------- Chart history ---------------------------------->
		<script src="Assets/js/Chart.bundle.js"></script>
		<script src="Assets/js/utils.js"></script>
		<!--------------------------------- ##### ---------------------------------->
		<!--------------------------------- Circle gauge---------------------------------->
		<link href="https://fonts.googleapis.com/css?family=Raleway:400,300,600,800,900" rel="stylesheet" type="text/css">
		<script src="Assets/js/progressbar.js"></script>
		<!--------------------------------- ##### ---------------------------------->
		<script>
			function oo(){
				alert("a");
				// progressbar.js@1.0.0 version is used
				// Docs: http://progressbarjs.readthedocs.org/en/1.0.0/

				var bar = new ProgressBar.Circle(cir1, {
				  color: '#aaa',
				  // This has to be the same size as the maximum width to
				  // prevent clipping
				  strokeWidth: 4,
				  trailWidth: 1,
				  easing: 'easeInOut',
				  duration: 1400,
				  text: {
				    autoStyleContainer: false
				  },
				  from: { color: '#aaa', width: 1 },
				  to: { color: '#333', width: 4 },
				  // Set default step function for all animate calls
				  step: function(state, circle) {
				    circle.path.setAttribute('stroke', state.color);
				    circle.path.setAttribute('stroke-width', state.width);

				    var value = Math.round(circle.value() * 100);
				    if (value === 0) {
				      circle.setText('');
				    } else {
				      circle.setText(value +'<br>persen');
				    }

				  }
				});
				bar.text.style.fontFamily = '"Raleway", Helvetica, sans-serif';
				bar.text.style.fontSize = '2rem';

				bar.animate(0.33);  // Number from 0.0 to 1.0
			}
			
		</script>
</head>
<style>
.o{
  margin: 20px;
  width: 100px;
  height: 100px;
  position: relative;
}
</style>
<body onload="oo()">
<div class="o" id="cir1"></div>
</body>
</html>