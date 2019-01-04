<!DOCTYPE html>
<html>
	<head>
		<title>Kimia Farma</title>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
		<!--<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>-->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
		<!--<script src="https://code.jquery.com/jquery-2.1.3.js" integrity="sha256-goy7ystDD5xbXSf+kwL4eV6zOPJCEBD1FBiCElIm+U8=" crossorigin="anonymous"></script>-->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<!--------------------------------- Chart history ---------------------------------->
		<script src="Assets/js/Chart.bundle.js"></script>
		<script src="Assets/js/utils.js"></script>
		<!--------------------------------- ##### ---------------------------------->
		<!--------------------------------- Circle gauge---------------------------------->
		<link href="https://fonts.googleapis.com/css?family=Raleway:400,300,600,800,900" rel="stylesheet" type="text/css">
		<script src="Assets/js/progressbar.js"></script>
		<!--------------------------------- ##### ---------------------------------->
	</head>
	<style type="text/css">
		canvas{
			-moz-user-select: none;
			-webkit-user-select: none;
			-ms-user-select: none;
		}

		body{margin: 0; padding: 0; background: #222C32;}
		#myHeader{
			background: #1E262B;
			width: 100%;
			height: 30px;
		}
		#myLeftPanel{
			position: absolute;
			background: #2B343A;
			width: 200px;
			height: calc(100% - 30px);
		}
		/*====================================================*/
		#myRightPanel{
			position: absolute;
			width: calc(100% - 200px);
			height: calc(100% - 30px);
			right: 0;
		}
		.myLabelText{
			color: white;
			font-size: 12px;
			margin-left: 10px;
		}
		.myChartHistory{
			width: calc(100% -20px);
			height: 200px;
			float: left;
		}
		.myChartHistory .table{
			font-size: 9px;
			margin: 5px;
			color: white;
			width: calc(100% - 10px);
			text-align: center;
		}
		.myChartHistory .table i{
			color: grey;
			font-size: 7px;
		}
		.myChartHistory .table td, .table th{
			padding: 0;
			border-top: none;
			border-bottom: 1px solid #575a5b;
		}
		.myBlock{
			background: #2B343A;
			margin-left: 10px;
			margin-top: 10px;
		}
		.myKPI{
			width: calc(25% - 12.5px);
			height: 70px;
			margin-left: 10px;
			float: left;
		}
		.myKPITable{
			padding: 5px 20px 0 20px;
			text-align: center;
		}
		.myKPITable img{
			width: 20px;
			height: 20px;
		}
		.myKPITable span{
			color: white;
			font-size: 15px;
		}
		.myMixing{
			width: calc(20% - 12.5px);
			height: 150px;
			margin-left: 10px;
			float: left;
		}
		.myCoating{
			width: calc(100% - 0px);
			height: 100px;
			margin-left: 10px;
			float: left;
		}
		.myLabelinCircle{
			font-size: 11px;
		}
		.myTextKPI{
			font-size: 1vw;
    		color: white;
		}
		.myTextKPI2{
			font-size: 0.8vw;
    		color: white;
		}

		/*===========================  myCircelGauge  ========================*/
		.o{
			margin-top: 5px;
			width: calc(100% - 120px);
			height: calc(100% - 120px);
			position: relative;
		}
		.o2{
			margin-top: 5px;
			width: calc(100% - 0px);
			height: calc(100% - 0px);
			position: relative;
		}
		.myLabelinCircle{
			font-size: 11px;
		}
		/*============================= menu left ==========================*/
		ul {
		    list-style-type: none;
		    margin: 0;
		    padding: 0;
		    overflow: hidden;
		    width:100%;
		}

		li {
		    float: left;
		}

		li a {
		    display: block;
		    color: white;
		    padding: 5px 0 5px 10px;
		    text-decoration: none;
		    width:200px;
		    font-size: 10px;
		    font-weight: bold;
		}

		li a:hover {
		    text-decoration: none;
		    color: white;
		}
		.mySideMenu{
		    display: block;
		    color: #989898;
		    padding: 5px 0 5px 20px;
		    text-decoration: none;
		    font-size: 10px;
		    width:200px;
		}
		.mySideMenu:hover{
		    color: white;
		    cursor: pointer;
		}
	</style>
	<script>
		var Pressure = 0.0;
		var Histerisis = 0.0;
		var AgitatorSpeed = 0.0;
		var AgitatorTime = 0.0;
		var InternalCirSpeed = 0.0;
		var InternalCirTime = 0.0;
		var Homogenizer = 0.0;

		$(document).ready(function(){
	    	ajax_dosingpw();
	    	ajax_mixing();
			reGetData();
		});
		function reGetData() {
		    setInterval(function(){
		    	ajax_dosingpw();
		    	ajax_mixing();
		    	//myCircelGauge();
	    	//alert(Pressure);
		    }, 3000);
		}
		function ajax_dosingpw(){
			$.ajax({
				type : "POST",
				url : "JSON/dosingPW.php",
				data : {
					//ID : "1234",
					//Pass : "cobacoba"
				},
				success : function(html){
					var data  = html;
					$("#labelDosingWater").html(JSON.parse(data).dosing_water.split(","));
					$("#labelInflight").html(JSON.parse(data).inflight_time.split(","));
					$("#labelTemperature").html(JSON.parse(data).temp.split(","));
					$("#labelFlushing").html(JSON.parse(data).flushing_time.split(","));
				},
				error : function(){
					alert("Error");
				}
			});
		}
		function ajax_mixing(){
			$.ajax({
				type : "POST",
				url : "JSON/mixing.php",
				data : {},
				success : function(html){
					var data  = html;
					Pressure = parseFloat(JSON.parse(data).pressure.split(",")) / 100 ;
					Histerisis = parseFloat(JSON.parse(data).histerisis.split(",")) / 100;
					AgitatorSpeed = parseFloat(JSON.parse(data).agitator_speed.split(",")) / 100 ;
					AgitatorTime = parseFloat(JSON.parse(data).agitator_time.split(",")) / 100 ;
					InternalCirSpeed = parseFloat(JSON.parse(data).internal_cir_speed.split(",")) / 100 ;
					InternalCirTime = parseFloat(JSON.parse(data).internal_cir_time.split(",")) / 100 ;
					Homogenizer = parseFloat(JSON.parse(data).speed_homogenizer.split(",")) / 100 ;

					$("#labelAgitatorTime").html("Agitator Time : "+ JSON.parse(data).agitator_time.split(",") +" sec");
					$("#labelCirsulationTime").html("Cirsulation Time : "+ JSON.parse(data).internal_cir_time.split(",")+" sec");
				},
				error : function(){
					alert("Error");
				}
			});
		}
		function myCircelGauge(){
			// progressbar.js@1.0.0 version is used
			// Docs: http://progressbarjs.readthedocs.org/en/1.0.0/

			var bar1 = new ProgressBar.Circle(cir1, {
			  color: '#FFF',
			  // This has to be the same size as the maximum width to
			  // prevent clipping
			  strokeWidth: 4,
			  trailWidth: 1,
			  easing: 'easeInOut',
			  duration: 1400,
			  text: {
			    autoStyleContainer: false
			  },
			  from: { color: '#A4C400', width: 1 },
			  to: { color: '#A4C400', width: 4 },
			  // Set default step function for all animate calls
			  step: function(state, circle) {
			    circle.path.setAttribute('stroke', state.color);
			    circle.path.setAttribute('stroke-width', state.width);

			    var value = Math.round(circle.value() * 100);
			    if (value === 0) {
			      circle.setText('<span class="myLabelinCircle">'+ value +' RPM</span>');
			    } else {
			      circle.setText('<span class="myLabelinCircle">'+ value +' RPM</span>');
			    }

			  }
			});
			bar1.text.style.fontFamily = '"Raleway", Helvetica, sans-serif';
			bar1.text.style.fontSize = '2rem';

			//bar1.animate(Pressure);  // Number from 0.0 to 1.0

			//=====================================================================================
			var bar2 = new ProgressBar.Circle(cir2, {
			  color: '#FFF',
			  // This has to be the same size as the maximum width to
			  // prevent clipping
			  strokeWidth: 4,
			  trailWidth: 1,
			  easing: 'easeInOut',
			  duration: 1400,
			  text: {
			    autoStyleContainer: false
			  },
			  from: { color: '#FA6800', width: 1 },
			  to: { color: '#FA6800', width: 4 },
			  // Set default step function for all animate calls
			  step: function(state, circle) {
			    circle.path.setAttribute('stroke', state.color);
			    circle.path.setAttribute('stroke-width', state.width);

			    var value = Math.round(circle.value() * 100);
			    if (value === 0) {
			      circle.setText('');
			    } else {
			      circle.setText('<span class="myLabelinCircle">'+ value +' RPM</span>');
			    }

			  }
			});
			bar2.text.style.fontFamily = '"Raleway", Helvetica, sans-serif';
			bar2.text.style.fontSize = '2rem';
			//var abc = Pressure;
			//bar2.animate(0.20);  // Number from 0.0 to 1.0

			//=====================================================================================
			var bar3 = new ProgressBar.Circle(cir3, {
			  color: '#FFF',
			  // This has to be the same size as the maximum width to
			  // prevent clipping
			  strokeWidth: 4,
			  trailWidth: 1,
			  easing: 'easeInOut',
			  duration: 1400,
			  text: {
			    autoStyleContainer: false
			  },
			  from: { color: '#dc3545', width: 1 },
			  to: { color: '#dc3545', width: 4 },
			  // Set default step function for all animate calls
			  step: function(state, circle) {
			    circle.path.setAttribute('stroke', state.color);
			    circle.path.setAttribute('stroke-width', state.width);

			    var value = Math.round(circle.value() * 100);
			    if (value === 0) {
			      circle.setText('');
			    } else {
			      circle.setText('<span class="myLabelinCircle">'+ value +' RPM</span>');
			    }

			  }
			});
			bar3.text.style.fontFamily = '"Raleway", Helvetica, sans-serif';
			bar3.text.style.fontSize = '2rem';

			//bar3.animate(0.30);  // Number from 0.0 to 1.0

			//=====================================================================================
			var bar4 = new ProgressBar.Circle(cir4, {
			  color: '#FFF',
			  // This has to be the same size as the maximum width to
			  // prevent clipping
			  strokeWidth: 4,
			  trailWidth: 1,
			  easing: 'easeInOut',
			  duration: 1400,
			  text: {
			    autoStyleContainer: false
			  },
			  from: { color: '#DABF44', width: 1 },
			  to: { color: '#DABF44', width: 4 },
			  // Set default step function for all animate calls
			  step: function(state, circle) {
			    circle.path.setAttribute('stroke', state.color);
			    circle.path.setAttribute('stroke-width', state.width);

			    var value = Math.round(circle.value() * 100);
			    if (value === 0) {
			      circle.setText('');
			    } else {
			      circle.setText('<span class="myLabelinCircle">'+ value +' RPM</span>');
			    }

			  }
			});
			bar4.text.style.fontFamily = '"Raleway", Helvetica, sans-serif';
			bar4.text.style.fontSize = '2rem';

			//bar4.animate(0.40);  // Number from 0.0 to 1.0

			//=====================================================================================
			var bar5 = new ProgressBar.Circle(cir5, {
			  color: '#FFF',
			  // This has to be the same size as the maximum width to
			  // prevent clipping
			  strokeWidth: 4,
			  trailWidth: 1,
			  easing: 'easeInOut',
			  duration: 1400,
			  text: {
			    autoStyleContainer: false
			  },
			  from: { color: '#C64AE8', width: 1 },
			  to: { color: '#C64AE8', width: 4 },
			  // Set default step function for all animate calls
			  step: function(state, circle) {
			    circle.path.setAttribute('stroke', state.color);
			    circle.path.setAttribute('stroke-width', state.width);

			    var value = Math.round(circle.value() * 100);
			    if (value === 0) {
			      circle.setText('');
			    } else {
			      circle.setText('<span class="myLabelinCircle">'+ value +' RPM</span>');
			    }

			  }
			});
			bar5.text.style.fontFamily = '"Raleway", Helvetica, sans-serif';
			bar5.text.style.fontSize = '2rem';

			var bar6 = new ProgressBar.Circle(cir6, {
			  color: '#FFF',
			  // This has to be the same size as the maximum width to
			  // prevent clipping
			  strokeWidth: 4,
			  trailWidth: 1,
			  easing: 'easeInOut',
			  duration: 1400,
			  text: {
			    autoStyleContainer: false
			  },
			  from: { color: '#A4C400', width: 1 },
			  to: { color: '#A4C400', width: 4 },
			  // Set default step function for all animate calls
			  step: function(state, circle) {
			    circle.path.setAttribute('stroke', state.color);
			    circle.path.setAttribute('stroke-width', state.width);

			    var value = Math.round(circle.value() * 100);
			    if (value === 0) {
			      circle.setText('<span class="myLabelinCircle">'+ value +' RPM</span>');
			    } else {
			      circle.setText('<span class="myLabelinCircle">'+ value +' RPM</span>');
			    }

			  }
			});
			bar6.text.style.fontFamily = '"Raleway", Helvetica, sans-serif';
			bar6.text.style.fontSize = '2rem';

			//bar1.animate(Pressure);  // Number from 0.0 to 1.0

			//=====================================================================================
			var bar7 = new ProgressBar.Circle(cir7, {
			  color: '#FFF',
			  // This has to be the same size as the maximum width to
			  // prevent clipping
			  strokeWidth: 4,
			  trailWidth: 1,
			  easing: 'easeInOut',
			  duration: 1400,
			  text: {
			    autoStyleContainer: false
			  },
			  from: { color: '#FA6800', width: 1 },
			  to: { color: '#FA6800', width: 4 },
			  // Set default step function for all animate calls
			  step: function(state, circle) {
			    circle.path.setAttribute('stroke', state.color);
			    circle.path.setAttribute('stroke-width', state.width);

			    var value = Math.round(circle.value() * 100);
			    if (value === 0) {
			      circle.setText('');
			    } else {
			      circle.setText('<span class="myLabelinCircle">'+ value +' RPM</span>');
			    }

			  }
			});
			bar7.text.style.fontFamily = '"Raleway", Helvetica, sans-serif';
			bar7.text.style.fontSize = '2rem';
			//var abc = Pressure;
			//bar2.animate(0.20);  // Number from 0.0 to 1.0

			//=====================================================================================
			var bar8 = new ProgressBar.Circle(cir8, {
			  color: '#FFF',
			  // This has to be the same size as the maximum width to
			  // prevent clipping
			  strokeWidth: 4,
			  trailWidth: 1,
			  easing: 'easeInOut',
			  duration: 1400,
			  text: {
			    autoStyleContainer: false
			  },
			  from: { color: '#dc3545', width: 1 },
			  to: { color: '#dc3545', width: 4 },
			  // Set default step function for all animate calls
			  step: function(state, circle) {
			    circle.path.setAttribute('stroke', state.color);
			    circle.path.setAttribute('stroke-width', state.width);

			    var value = Math.round(circle.value() * 100);
			    if (value === 0) {
			      circle.setText('');
			    } else {
			      circle.setText('<span class="myLabelinCircle">'+ value +' RPM</span>');
			    }

			  }
			});
			bar8.text.style.fontFamily = '"Raleway", Helvetica, sans-serif';
			bar8.text.style.fontSize = '2rem';

			//bar3.animate(0.30);  // Number from 0.0 to 1.0

			//=====================================================================================
			var bar9 = new ProgressBar.Circle(cir9, {
			  color: '#FFF',
			  // This has to be the same size as the maximum width to
			  // prevent clipping
			  strokeWidth: 4,
			  trailWidth: 1,
			  easing: 'easeInOut',
			  duration: 1400,
			  text: {
			    autoStyleContainer: false
			  },
			  from: { color: '#DABF44', width: 1 },
			  to: { color: '#DABF44', width: 4 },
			  // Set default step function for all animate calls
			  step: function(state, circle) {
			    circle.path.setAttribute('stroke', state.color);
			    circle.path.setAttribute('stroke-width', state.width);

			    var value = Math.round(circle.value() * 100);
			    if (value === 0) {
			      circle.setText('');
			    } else {
			      circle.setText('<span class="myLabelinCircle">'+ value +' RPM</span>');
			    }

			  }
			});
			bar9.text.style.fontFamily = '"Raleway", Helvetica, sans-serif';
			bar9.text.style.fontSize = '2rem';

			//bar4.animate(0.40);  // Number from 0.0 to 1.0

			//=====================================================================================
			var bar10 = new ProgressBar.Circle(cir10, {
			  color: '#FFF',
			  // This has to be the same size as the maximum width to
			  // prevent clipping
			  strokeWidth: 4,
			  trailWidth: 1,
			  easing: 'easeInOut',
			  duration: 1400,
			  text: {
			    autoStyleContainer: false
			  },
			  from: { color: '#C64AE8', width: 1 },
			  to: { color: '#C64AE8', width: 4 },
			  // Set default step function for all animate calls
			  step: function(state, circle) {
			    circle.path.setAttribute('stroke', state.color);
			    circle.path.setAttribute('stroke-width', state.width);

			    var value = Math.round(circle.value() * 100);
			    if (value === 0) {
			      circle.setText('');
			    } else {
			      circle.setText('<span class="myLabelinCircle">'+ value +' RPM</span>');
			    }

			  }
			});
			bar10.text.style.fontFamily = '"Raleway", Helvetica, sans-serif';
			bar10.text.style.fontSize = '2rem';

			//bar5.animate(0.50);  // Number from 0.0 to 1.0

			//=====================================================================================//
			// untuk set value circle gauge
			setInterval(function(){
				bar1.animate(AgitatorSpeed); 
				bar2.animate(InternalCirSpeed); 
				bar3.animate(Pressure); 
				bar4.animate(Histerisis);
				bar5.animate(Homogenizer); 
				bar6.animate(AgitatorSpeed); 
				bar7.animate(InternalCirSpeed); 
				bar8.animate(Pressure); 
				bar9.animate(Histerisis);
				bar10.animate(Homogenizer); 
		    }, 3000);
		}
	</script>
	<body>
		<div id="myHeader">
			<marquee behavior="scroll" direction="left" style="color: white;">Information : Banjaran Bandung Banjaran Bandung Banjaran Bandung Banjaran Bandung Banjaran Bandung Banjaran Bandung</marquee>
		</div>
		<div id="myLeftPanel" style="padding: 5px;">
			<img src="Assets/images/no-image-available.jpg" class="img-fluid" alt="Responsive image"><br><br><center><span style="color: white;">KIMIA FARMA PLANT BANJARAN</span></center><br><br>
			<div class="list-group">
				<ul>
					<li><a href="#" style="
		    border-bottom: 1px solid white;">LIQUID PRODUCTION LINE</a></li>
					<li><a class="mySideMenu" href="index1.php">Mixing Liquid & Holding Tank</a></li>
					<li><a class="mySideMenu" href="index2.php">Filling Liquid</a></li>
					<li><a class="mySideMenu" href="index3.php">Tetra Pax Water Treatment</a></li>
				</ul>
			</div>
			<br>
			<div class="list-group">
				<ul>
					<li><a href="#" style="
		    border-bottom: 1px solid white;">NON-BL & PILOT PRODUCTION LINE</a></li>
					<li><a class="mySideMenu" href="index4.php">IGL GEA</a></li>
					<li><a class="mySideMenu" href="#" style="color:white;background: #222C32;">Blending GEA</a></li>
					<li><a class="mySideMenu" href="index6.php">Roller Compactor AW</a></li>
					<li><a class="mySideMenu" href="index7.php">Coating Bosch</a></li>
				</ul>
			</div>
		</div>
		<div id="myRightPanel">
			<span class="myLabelText">Blending GEA</span><br>
			<span class="myLabelText">Overview Historical Data</span><br>
			<div class="myBlock myChartHistory"><!-- Grafik Coating BOSCH-->
				<div style="width:100%;">
					<canvas id="canvas" height="200vw" width="1050vw"></canvas>
				</div>
				<script>
					var MONTHS = ['00:00', '01:00', '02:00', '03:00', '04:00', '05:00', '06:00', '07:00', '08:00', '09:00', '10:00', '11:00', '12:00', '13:00', '14:00', '15:00', '16:00', '17:00', '18:00', '19:00', '20:00', '21:00', '22:00', '23:00', '23:50'];
					Chart.defaults.global.defaultFontSize = 8;
					var config = {
						type: 'line',
						data: {
							labels: ['00:00', '01:00', '02:00', '03:00', '04:00', '05:00', '06:00', '07:00', '08:00', '09:00', '10:00', '11:00', '12:00', '13:00', '14:00', '15:00', '16:00', '17:00', '18:00', '19:00', '20:00', '21:00', '22:00', '23:00', '23:50'],
							datasets: [{
								label: 'Blender Speed',
								backgroundColor: "#FA6800",
								borderColor: "#FA6800",
								borderWidth: 1,
								pointRadius: 0,
								lineTension: 0,
								data: [
									50,50,50,50,60,60,60,60,70,70,60,60,60,70,70,60,60,50,50,50,60,60,90,90
								],
								fill: false,
							},{
								label: 'End Batch By',
								fill: false,
								backgroundColor: "#C64AE8",
								borderColor: "#C64AE8",
								borderWidth: 1,
								pointRadius: 0,
								lineTension: 0,
								data: [
									60,81,92,161,162,80,65,42,70,75,73,72,79,152,60,81,92,161,162,80,65,42,70
								],
							}]
						},
						options: {
							responsive: false,
							title: {
								display: false,
								text: 'Chart.js Line Chart'
							},
							tooltips: {
								mode: 'index',
								intersect: false,
							},
							hover: {
								mode: 'nearest',
								intersect: true
							},
							scales: {
								xAxes: [{
									display: true,
									scaleLabel: {
										display: false,
										labelString: 'Time'
									}
								}],
								yAxes: [{
									display: true,
									scaleLabel: {
										display: false,
										labelString: 'Value'
									},
									gridLines: {
										drawBorder: false,
										color: ['']
									},
									ticks: {
										min: 0,
										max: 200,
										stepSize: 20
									}
								}]
							},
							layout: {
					            padding: {
					                left: 0,
					                right: 0,
					                top: 0,
					                bottom: 0
					            }
					        }
						}
					};
					window.onload = function() {
						var ctx = document.getElementById('canvas').getContext('2d');
						window.myLine = new Chart(ctx, config);
						myCircelGauge();
					};
				</script>
			</div>
			<span class="myLabelText">Real Time Data</span><br>
			<div style="width: 23%;height: calc(80% - 200px); float: left; margin-right: 10px;">
				<!-- KPI Vessel -->
				<div class="myBlock myCoating">
					<div style="width: 35%;height: auto; margin: 5px 0 0 5px; float: left;">
						<center>
							<div class="o2" id="cir1"></div>
						</center>
					</div>
					<div style="width: 50%;height: 50%; margin: 10% 0 0 5px; float: left;">
						<span class="myTextKPI2">Blender Time : 10.10.2018</span><br>
						<span class="myTextKPI2">End Batch By : 5 min</span>
					</div>
				</div>
			</div>
		</div>
	</body>
</html>