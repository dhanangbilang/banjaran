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
			width: calc(50% - 15px);
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
			height: 200px;
			margin-left: 10px;
			float: left;
		}

		/*===========================  myCircelGauge  ========================*/
		.o{
			margin-top: 5px;
			width: calc(100% - 70px);
			height: calc(100% - 70px);
			position: relative;
		}
		.o2{
			margin-top: 5px;
			width: calc(100% - 40px);
			height: calc(100% - 40px);
			position: relative;
		}
		.myLabelinCircle{
			font-size: 11px;
		}
	</style>
	<script>
		var Pressure;
		var Histerisis;
		var AgitatorSpeed;
		var AgitatorTime;
		var InternalCirSpeed;
		var InternalCirTime;
		var Homogenizer;

		$(document).ready(function(){
			//alert("Masuk pak Eko");
			ajax_dosingpw();
			reGetData();
		});
		function reGetData() {
		    setInterval(function(){
		    	ajax_dosingpw();
		    	//ajax_2();
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
					Pressure = JSON.parse(data).pressure.split(",");
					Histerisis = JSON.parse(data).histerisis.split(",");
					AgitatorSpeed = JSON.parse(data).agitator_speed.split(",");
					AgitatorTime = JSON.parse(data).agitator_time.split(",");
					InternalCirSpeed = JSON.parse(data).internal_cir_speed.split(",");
					InternalCirTime = JSON.parse(data).internal_cir_time.split(",");
					Homogenizer = JSON.parse(data).speed_homogenizer.split(",");
				},
				error : function(){
					alert("Error");
				}
			});
		}
	</script>
	<body>
		<div id="myHeader">
			
		</div>
		<div id="myLeftPanel">
			
		</div>
		<div id="myRightPanel">
			<span class="myLabelText">Overview Historical Data</span><br>
			<div class="myBlock myChartHistory"><!-- Grafik Dosing PW -->
				<div style="width:100%;">
					<canvas id="canvas" height="200vw" width="520vw"></canvas>
				</div>
				<script>

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

						bar1.animate(0.33);  // Number from 0.0 to 1.0

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

						bar2.animate(0.33);  // Number from 0.0 to 1.0

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

						bar3.animate(0.33);  // Number from 0.0 to 1.0

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

						bar4.animate(0.33);  // Number from 0.0 to 1.0

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

						bar5.animate(0.33);  // Number from 0.0 to 1.0

						//=====================================================================================
					}
			

					var MONTHS = ['00:00', '01:00', '02:00', '03:00', '04:00', '05:00', '06:00', '07:00', '08:00', '09:00', '10:00', '11:00', '12:00', '13:00', '14:00', '15:00', '16:00', '17:00', '18:00', '19:00', '20:00', '21:00', '22:00', '23:00', '23:50'];
					Chart.defaults.global.defaultFontSize = 8;
					var config = {
						type: 'line',
						data: {
							labels: ['00:00', '01:00', '02:00', '03:00', '04:00', '05:00', '06:00', '07:00', '08:00', '09:00', '10:00', '11:00', '12:00', '13:00', '14:00', '15:00', '16:00', '17:00', '18:00', '19:00', '20:00', '21:00', '22:00', '23:00', '23:50'],
							datasets: [{
								label: 'Dosing Water',
								backgroundColor: "#FA6800",
								borderColor: "#FA6800",
								borderWidth: 1,
								pointRadius: 0,
								lineTension: 0,
								data: [
									50,50,50,50,60,60,60,60,70,70,60,60,60,70,70,60,60,50,50,50,60,60,90,90
								],
								fill: false,
							}, {
								label: 'Inflight Time',
								fill: false,
								backgroundColor: "#A4C400",
								borderColor: "#A4C400",
								borderWidth: 1,
								pointRadius: 0,
								lineTension: 0,
								data: [
									42,50,55,53,52,59,52,60,81,92,161,162,80,65,42,50,55,53,52,59,52,60,81,92
								],
							},{
								label: 'Temperature',
								fill: false,
								backgroundColor: "#C64AE8",
								borderColor: "#C64AE8",
								borderWidth: 1,
								pointRadius: 0,
								lineTension: 0,
								data: [
									60,81,92,161,162,80,65,42,70,75,73,72,79,152,60,81,92,161,162,80,65,42,70
								],
							},{
								label: 'Flushing Time',
								fill: false,
								backgroundColor: "#DABF44",
								borderColor: "#DABF44",
								borderWidth: 1,
								pointRadius: 0,
								lineTension: 0,
								data: [
									62,70,75,63,62,69,72,50,61,72,81,92,90,95,100,62,70,75,63,62,69,72,50,61
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
					/*document.getElementById('randomizeData').addEventListener('click', function() {
						config.data.datasets.forEach(function(dataset) {
							dataset.data = dataset.data.map(function() {
								return randomScalingFactor();
							});
						});
						window.myLine.update();
					});
					var colorNames = Object.keys(window.chartColors);
					document.getElementById('addDataset').addEventListener('click', function() {
						var colorName = colorNames[config.data.datasets.length % colorNames.length];
						var newColor = window.chartColors[colorName];
						var newDataset = {
							label: 'Dataset ' + config.data.datasets.length,
							backgroundColor: newColor,
							borderColor: newColor,
							data: [],
							fill: false
						};
						for (var index = 0; index < config.data.labels.length; ++index) {
							newDataset.data.push(randomScalingFactor());
						}
						config.data.datasets.push(newDataset);
						window.myLine.update();
					});
					document.getElementById('addData').addEventListener('click', function() {
						if (config.data.datasets.length > 0) {
							var month = MONTHS[config.data.labels.length % MONTHS.length];
							config.data.labels.push(month);
							config.data.datasets.forEach(function(dataset) {
								dataset.data.push(randomScalingFactor());
							});
							window.myLine.update();
						}
					});
					document.getElementById('removeDataset').addEventListener('click', function() {
						config.data.datasets.splice(0, 1);
						window.myLine.update();
					});
					document.getElementById('removeData').addEventListener('click', function() {
						config.data.labels.splice(-1, 1); // remove the label first
						config.data.datasets.forEach(function(dataset) {
							dataset.data.pop();
						});
						window.myLine.update();
					});*/
				</script>
			</div>
			<div class="myBlock myChartHistory">
				<table class="table"><!-- Tabel Mixing-->
				  <thead>
				    <tr>
				      <th scope="col">Time</th>
				      <th scope="col" style="width: 18.5%;">Pressure</th>
				      <th scope="col" style="width: 18.5%;">Hysterisis</th>
				      <th scope="col" style="width: 18.5%;">Homogenizer</th>
				      <th scope="col" style="width: 18.5%;">Agitator</th>
				      <th scope="col" style="width: 18.5%;">Internal Circulation</th>
				    </tr>
				  </thead>
				  <tbody>
				    <tr>
						<th scope="row">07:00</th>
						<td>30 <i>bar</i></td>
						<td>60 <i>bar</i></td>
						<td>30 <i>rpm</i> / 60 <i>bar</i></td>
						<td>60 <i>rpm</i> / 60 <i>bar</i></td>
						<td>60 <i>bar</i></td>
				    </tr>
				    <tr>
						<th scope="row">08:00</th>
						<td>30 <i>bar</i></td>
						<td>60 <i>bar</i></td>
						<td>30 <i>rpm</i> / 60 <i>bar</i></td>
						<td>60 <i>rpm</i> / 60 <i>bar</i></td>
						<td>60 <i>bar</i></td>
				    </tr>
				    <tr>
						<th scope="row">09:00</th>
						<td>30 <i>bar</i></td>
						<td>60 <i>bar</i></td>
						<td>30 <i>rpm</i> / 60 <i>bar</i></td>
						<td>60 <i>rpm</i> / 60 <i>bar</i></td>
						<td>60 <i>bar</i></td>
				    </tr>
				    <tr>
						<th scope="row">10:00</th>
						<td>30 <i>bar</i></td>
						<td>60 <i>bar</i></td>
						<td>30 <i>rpm</i> / 60 <i>bar</i></td>
						<td>60 <i>rpm</i> / 60 <i>bar</i></td>
						<td>60 <i>bar</i></td>
				    </tr>
				    <tr>
						<th scope="row">11:00</th>
						<td>30 <i>bar</i></td>
						<td>60 <i>bar</i></td>
						<td>30 <i>rpm</i> / 60 <i>bar</i></td>
						<td>60 <i>rpm</i> / 60 <i>bar</i></td>
						<td>60 <i>bar</i></td>
				    </tr>
				    <tr>
						<th scope="row">12:00</th>
						<td>30 <i>bar</i></td>
						<td>60 <i>bar</i></td>
						<td>30 <i>rpm</i> / 60 <i>bar</i></td>
						<td>60 <i>rpm</i> / 60 <i>bar</i></td>
						<td>60 <i>bar</i></td>
				    </tr>
				    <tr>
						<th scope="row">13:00</th>
						<td>30 <i>bar</i></td>
						<td>60 <i>bar</i></td>
						<td>30 <i>rpm</i> / 60 <i>bar</i></td>
						<td>60 <i>rpm</i> / 60 <i>bar</i></td>
						<td>60 <i>bar</i></td>
				    </tr>
				    <tr>
						<th scope="row">14:00</th>
						<td>30 <i>bar</i></td>
						<td>60 <i>bar</i></td>
						<td>30 <i>rpm</i> / 60 <i>bar</i></td>
						<td>60 <i>rpm</i> / 60 <i>bar</i></td>
						<td>60 <i>bar</i></td>
				    </tr>
				    <tr>
						<th scope="row">15:00</th>
						<td>30 <i>bar</i></td>
						<td>60 <i>bar</i></td>
						<td>30 <i>rpm</i> / 60 <i>bar</i></td>
						<td>60 <i>rpm</i> / 60 <i>bar</i></td>
						<td>60 <i>bar</i></td>
				    </tr>
				    <tr>
						<th scope="row">16:00</th>
						<td>30 <i>bar</i></td>
						<td>60 <i>bar</i></td>
						<td>30 <i>rpm</i> / 60 <i>bar</i></td>
						<td>60 <i>rpm</i> / 60 <i>bar</i></td>
						<td>60 <i>bar</i></td>
				    </tr>
				    <tr>
						<th scope="row">17:00</th>
						<td>30 <i>bar</i></td>
						<td>60 <i>bar</i></td>
						<td>30 <i>rpm</i> / 60 <i>bar</i></td>
						<td>60 <i>rpm</i> / 60 <i>bar</i></td>
						<td>60 <i>bar</i></td>
				    </tr>
				    <tr>
						<th scope="row">18:00</th>
						<td>30 <i>bar</i></td>
						<td>60 <i>bar</i></td>
						<td>30 <i>rpm</i> / 60 <i>bar</i></td>
						<td>60 <i>rpm</i> / 60 <i>bar</i></td>
						<td>60 <i>bar</i></td>
				    </tr>
				  </tbody>
				</table>
			</div>
			<br>
			<span class="myLabelText">Real Time Data - Dosing PW</span></br>
			<div id="RTD_DosingPW"><!-- Real Time Data Dosing PW -->
				<div class="myBlock myKPI"><!-- Dosing Water -->
					<div class="myKPITable">
						<table width="100%" border="0">
							<tr>
								<td style="width: 33%;"><img src="Assets/images/1.png"></td>
								<td style="width: 33%;"><span id="labelDosingWater">999</span></td>
								<td style="width: 33%;"><span>KG</span></td>
							</tr>
							<tr>
								<td colspan="3"><span style="font-size: 10px; color:#757699;"><i>Doasing Water in kilograms</i></span></td>
							</tr>
							<tr>
								<td colspan="3"><div style="margin-top: 5px; background: #FA6800; width: 100%; height: 2px; border-radius: 5px;"></div></td>
							</tr>

						</table>
					</div>
				</div>
				<div class="myBlock myKPI"><!-- Inflight Time -->
					<div class="myKPITable">
						<table width="100%" border="0">
							<tr>
								<td style="width: 33%;"><img src="Assets/images/2.png"></td>
								<td style="width: 33%;"><span id="labelInflight">999</span></td>
								<td style="width: 33%;"><span>Sec</span></td>
							</tr>
							<tr>
								<td colspan="3"><span style="font-size: 10px; color:#757699;"><i>Inflight Time in seconds</i></span></td>
							</tr>
							<tr>
								<td colspan="3"><div style="margin-top: 5px; background: #A4C400; width: 100%; height: 2px; border-radius: 5px;"></div></td>
							</tr>

						</table>
					</div>
				</div>
				<div class="myBlock myKPI"><!-- Temperature -->
					<div class="myKPITable">
						<table width="100%" border="0">
							<tr>
								<td style="width: 33%;"><img src="Assets/images/3.png"></td>
								<td style="width: 33%;"><span id="labelTemperature">999</span></td>
								<td style="width: 33%;"><span>&#8451;</span></td>
							</tr>
							<tr>
								<td colspan="3"><span style="font-size: 10px; color:#757699;"><i>Temperature in celcius</i></span></td>
							</tr>
							<tr>
								<td colspan="3"><div style="margin-top: 5px; background: #C64AE8; width: 100%; height: 2px; border-radius: 5px;"></div></td>
							</tr>

						</table>
					</div>
				</div>
				<div class="myBlock myKPI"><!-- Flushing Time -->
					<div class="myKPITable">
						<table width="100%" border="0">
							<tr>
								<td style="width: 33%;"><img src="Assets/images/2.png"></td>
								<td style="width: 33%;"><span id="labelFlushing">999</span></td>
								<td style="width: 33%;"><span>Sec</span></td>
							</tr>
							<tr>
								<td colspan="3"><span style="font-size: 10px; color:#757699;"><i>Flushing Time in seconds</i></span></td>
							</tr>
							<tr>
								<td colspan="3"><div style="margin-top: 5px; background: #DABF44; width: 100%; height: 2px; border-radius: 5px;"></div></td>
							</tr>

						</table>
					</div>
				</div>
			</div>
			<br>
			<span class="myLabelText">Real Time Data - Mixing</span></br>
			<div class="myBlock myMixing"><!-- Agitator -->
				<center>
					<span class="myLabelText" style="margin: 0;">Agitator</span>
					<div class="o" id="cir1"></div>
					<span class="myLabelText" style="margin: 0;">Agitator Time : 30 sec</span>
				</center>
			</div>
			<div class="myBlock myMixing"><!-- Pressure -->
				<center>
					<span class="myLabelText" style="margin: 0;">Pressure</span>
					<div class="o2" id="cir3"></div>
				</center>
			</div>
			<div class="myBlock myMixing"><!-- Histerisi -->
				<center>
					<span class="myLabelText" style="margin: 0;">Histerisi</span>
					<div class="o2" id="cir4"></div>
				</center>
			</div>
			<div class="myBlock myMixing"><!-- Homogenizer -->
				<center>
					<span class="myLabelText" style="margin: 0;">Homogenizer</span>
					<div class="o2" id="cir5"></div>
				</center>
			</div>
			<div class="myBlock myMixing"><!-- Internal cirsulation -->
				<center>
					<span class="myLabelText" style="margin: 0;">Internal cirsulation</span>
					<div class="o" id="cir2"></div>
					<span class="myLabelText" style="margin: 0;">Cirsulation Time : 30 sec</span>
				</center>
			</div>
		</div>
	</body>
</html>