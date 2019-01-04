<?php
	session_start();
		$_SESSION["dosing_water"]="";
		$_SESSION["inflight_time"]="";
		$_SESSION["temperature"]="";
		$_SESSION["flushing_time"]="";
		$_SESSION["pressure"]="";
  		$_SESSION["histerisis"]="";
  		$_SESSION["agitator_speed"]="";
  		$_SESSION["agitator_time"]="";
  		$_SESSION["internal_circulation_speed"]="";
  		$_SESSION["internal_circulation_time"]="";
  		$_SESSION["speed_homogenizer"]="";	
	if(isset($_SESSION["dosing_water"])){
		$dosingWaterVal = $_SESSION["dosing_water"];
		$inflightTimeVal = $_SESSION["inflight_time"];
		$temperatureVal = $_SESSION["temperature"];
		$flushingTimeVal = $_SESSION["flushing_time"];
		$pressure = $_SESSION["pressure"];
  		$histerisis = $_SESSION["histerisis"];
  		$agitatorSpeed = $_SESSION["agitator_speed"];
  		$agitatorTime = $_SESSION["agitator_time"];
  		$internalCirculationSpeed = $_SESSION["internal_circulation_speed"];
  		$internalCirculationTime = $_SESSION["internal_circulation_time"];
  		$speedHomogenizer = $_SESSION["speed_homogenizer"];	
	}
  ?>

<!DOCTYPE html>
<html>
		<head>
			<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
			<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
			<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
			<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
			<!--<script src="https://code.jquery.com/jquery-2.1.3.js" integrity="sha256-goy7ystDD5xbXSf+kwL4eV6zOPJCEBD1FBiCElIm+U8=" crossorigin="anonymous"></script>-->
			<!--<link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700,800" rel="stylesheet">-->
			<!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>-->
			<script src="https://code.highcharts.com/highcharts.js"></script>
			<script src="https://code.highcharts.com/highcharts-more.js"></script>

			<script src="https://code.highcharts.com/modules/solid-gauge.js"></script>
		</head>
		<style type="text/css">
			html {
	    	font-size: 10px;
			}
			body{
				background-color: #ECEFF4; 
			    color: #656565;
			}
			#myHeader a {
				font-weight: bold !important;
			}
			.myKPI_DosingPw{
				width: 25%;
				height: 65px;
				float: left;
				padding-right: 10px;
			}
			.myKPI_DosingPw .logoKPI{
				width: 65px;
				height: 100%;
				float: left;
			}
			.myKPI_DosingPw img{
				width: 50px;
				height: 50px;
			    display: block;
			    margin-left: auto;
			    margin-right: auto;
			    margin-top: 7.5px;
			}
			.myKPI_DosingPw .contentKPI{
				width: calc(100% - 65px);
				height: 100%;
				padding: 0 5px 0 5px;
				float: left;
			}
			.myKPI_DosingPw .contentKPI span{
				color: white;
				font-size: 12px;
				font-weight: bold;
			}
			.myKPI_DosingPw .contentKPI .valueKPI{
				text-align: right;
				padding-right: 20px;
			}
			.myKPI_DosingPw .contentKPI hr{
				margin-top: 2px;
				border-color: white;
			}
			/* ##################################################### */
			.out_myKPI_Mixing{
				width: 25%;
				height: 50%;
				float: left;
				padding-right: 10px;
			}
			.myKPI_Mixing{
				width: 25%;
				height: 50%;
				float: left;
				padding-right: 10px;
			}
			.myKPI_Mixing .contentKPI{
				width: 100%;
				height: 100%;
				padding: 5px;
				background: white;
			}
			.contentKPI .outer {
			  /*width: 600px;*/
			  height: 200px;
			}
			.contentKPI .container {
			  width: 300px;
			  padding-left: 0;
			  float: left;
			  height: 200px;
			}
			.contentKPI .highcharts-yaxis-grid .highcharts-grid-line {
			  display: none;
			}

			@media (max-width: 600px) {
			  .contentKPI .outer {
			    width: 100%;
			    height: 400px;
			  }
			  .contentKPI .container {
			    width: 300px;
			    float: none;
			    margin: 0 auto;
			  }
			}
			.highcharts-credits{display: none;}
			.highcharts-background{fill: none;}
		</style>
		<script>
			$(document).ready(function(){
			    alert('halo');
			});

			function mulai(){
				alert("masuk mulai");
				var gaugeOptions = {

					  chart: {
					    type: 'solidgauge'
					  },

					  title: null,

					  pane: {
					    center: ['50%', '85%'],
					    size: '140%',
					    startAngle: -90,
					    endAngle: 90,
					    background: {
					      backgroundColor: (Highcharts.theme && Highcharts.theme.background2) || '#EEE',
					      innerRadius: '60%',
					      outerRadius: '100%',
					      shape: 'arc'
					    }
					  },

					  tooltip: {
					    enabled: false
					  },

					  // the value axis
					  yAxis: {
					    stops: [
					      [0.1, '#55BF3B'], // green
					      [0.5, '#DDDF0D'], // yellow
					      [0.9, '#DF5353'] // red
					    ],
					    lineWidth: 0,
					    minorTickInterval: null,
					    tickAmount: 2,
					    title: {
					      y: -70
					    },
					    labels: {
					      y: 16
					    }
					  },

					  plotOptions: {
					    solidgauge: {
					      dataLabels: {
					        y: 5,
					        borderWidth: 0,
					        useHTML: true
					      }
					    }
					  }
					};

					// The RPM gauge
					var chartRpm = Highcharts.chart('container-rpm', Highcharts.merge(gaugeOptions, {
					  yAxis: {
					    min: 0,
					    max: 100,
					    title: {
					      //text: 'HOMOGENIZER SPEED'
					    }
					  },

					  series: [{
					    name: 'RPM',
					    data: [1],
					    dataLabels: {
					      format: '<div style="text-align:center"><span style="font-size:25px;color:' +
					        ((Highcharts.theme && Highcharts.theme.contrastTextColor) || 'black') + '">{y:.1f}</span><br/>' +
					           '<span style="font-size:12px;color:silver">R P M</span></div>'
					    },
					    tooltip: {
					      valueSuffix: ' revolutions/min'
					    }
					  }]

					}));

					var chartRpm1 = Highcharts.chart('container-rpm1', Highcharts.merge(gaugeOptions, {
					  yAxis: {
					    min: 0,
					    max: 100,
					    title: {
					      //text: 'AGITATOR SPEED'
					    }
					  },

					  series: [{
					    name: 'RPM',
					    data: [1],
					    dataLabels: {
					      format: '<div style="text-align:center"><span style="font-size:25px;color:' +
					        ((Highcharts.theme && Highcharts.theme.contrastTextColor) || 'black') + '">{y:.1f}</span><br/>' +
					           '<span style="font-size:12px;color:silver">R P M</span></div>'
					    },
					    tooltip: {
					      valueSuffix: ' revolutions/min'
					    }
					  }]

					}));

					var chartRpm2 = Highcharts.chart('container-rpm2', Highcharts.merge(gaugeOptions, {
					  yAxis: {
					    min: 0,
					    max: 100,
					    title: {
					      //text: 'AGITATOR SPEED'
					    }
					  },

					  series: [{
					    name: 'RPM',
					    data: [1],
					    dataLabels: {
					      format: '<div style="text-align:center"><span style="font-size:25px;color:' +
					        ((Highcharts.theme && Highcharts.theme.contrastTextColor) || 'black') + '">{y:.1f}</span><br/>' +
					           '<span style="font-size:12px;color:silver">R P M</span></div>'
					    },
					    tooltip: {
					      valueSuffix: ' revolutions/min'
					    }
					  }]

					}));

					
					// Bring life to the dials
					setInterval(function () {
					if (chartRpm) {
					    point = chartRpm.series[0].points[0];
					    inc = Math.random();
					    //newVal = point.y + inc;
						//newVal = Math.random();
						newVal = <?php echo $speedHomogenizer; ?>;
					    point.update(newVal);
					  }
					 if (chartRpm1) {
					    point = chartRpm1.series[0].points[0];
					    inc = Math.random();
					    //newVal = point.y + inc;
						//newVal = Math.random();
						newVal = <?php echo $agitatorSpeed; ?>;
					    point.update(newVal);
					  }
					  if (chartRpm2) {
					    point = chartRpm2.series[0].points[0];
					    inc = Math.random();
					    //newVal = point.y + inc;
						//newVal = Math.random();
						newVal = <?php echo $internalCirculationSpeed; ?>;
					    point.update(newVal);
					  }
					}, 2000);
			}
			function ajax_1(){
				$.ajax({
					type : "POST",
					url : "JSON/dosingPW.php",
					data : {
						//ID : "1234",
						//Pass : "cobacoba"
					},
					success : function(html){
						//alert(html);
					},
					error : function(){
						alert("Error");
					}
				});
			}

			function ajax_2(){
				$.ajax({
					type : "POST",
					url : "JSON/mixing.php",
					data : {},
					success : function(html){
						//$('#kotak').html(html);
					},
					error : function(){
						alert("Error");
					}
				});
			}

			function reGetData() {
			    setInterval(function(){
			    	//ajax_1();
			    	//ajax_2();
			    	alert("halo");
			    }, 3000);
			}
		</script>
		<body>

			<div id="myHeader"><!-- Header -->
				<nav class="navbar navbar-expand-lg navbar-light bg-light">
					<a class="navbar-brand" href="#" style="margin-left: 2%;">
						<img src="Assets/Images/kf.png" width="100" height="30" class="d-inline-block align-top" alt="">
					</a>
					  <ul class="navbar-nav" style="margin-left: 2%;">
					  	<li class="nav-item dropdown">
					        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					          LIQUID PRODUCTION LINE 
					        </a>
					        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
					          <a class="dropdown-item" href="#">Mixing Liquid & Holding Tank</a>
					          <a class="dropdown-item" href="#">Filling Liquid</a>
					          <a class="dropdown-item" href="#">Tetra Pax Water Treatment</a>
					        </div>
				      	</li>
				      	<li class="nav-item dropdown">
					        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					          NON-BL & PILOT PRODUCTION LINE 
					        </a>
					        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
					          <a class="dropdown-item" href="#">IGL GEA</a>
					          <a class="dropdown-item" href="#">Blending GEA</a>
					          <a class="dropdown-item" href="#">Roller Compactor AW</a>
					          <a class="dropdown-item" href="#">Coating Bosch</a>
					        </div>
				      	</li>
					  </ul>
				</nav>
			</div>
			<div style="padding: 0 2% 0 2%; ">
				<nav aria-label="breadcrumb">
				  <ol class="breadcrumb" style="margin-bottom: 0px;">
				    <li class="breadcrumb-item">Home</li>
				    <li class="breadcrumb-item">Liquid Production Line</li>
				    <li class="breadcrumb-item active" aria-current="page"">Mixing Liquid & Holding Tank</li>
				  </ol>
				</nav>
			</div>
			<!-- ############################################################################################### -->
			<div style="padding: 20px 3% 0 3%; ">
				<h6>Dosing PW</h6>
			</div>
			<div style="padding: 0 3% 0 3%; ">
				<div class="myKPI_DosingPw">
					<div class="logoKPI" style="background: #009ABF"><img src="Assets/images/1.png"></div>
					<div class="contentKPI" style="background: #00C0EF">
						<table style="width: 100%;">
							<tr>
								<td><span>Dosing water</span></td>
							</tr>
							<tr>
								<td class="valueKPI"><span style="font-size: 30px;"><?php echo $dosingWaterVal; ?><span style="font-size: 15px;"> kg</span></span></td>
							</tr>
							<tr>
								<td><hr></td>
							</tr>
						</table>
					</div>
				</div>
				<div class="myKPI_DosingPw">
					<div class="logoKPI" style="background: #B13C2E"><img src="Assets/images/2.png"></div>
					<div class="contentKPI" style="background: #DD4B39">
						<table style="width: 100%;">
							<tr>
								<td><span>Inflight time</span></td>
							</tr>
							<tr>
								<td class="valueKPI"><span style="font-size: 30px;"><?php echo $inflightTimeVal; ?><span style="font-size: 15px;"> s</span></span></td>
							</tr>
							<tr>
								<td><hr></td>
							</tr>
						</table>
					</div>
				</div>
				<div class="myKPI_DosingPw">
					<div class="logoKPI" style="background: #C27D0E"><img src="Assets/images/3.png"></div>
					<div class="contentKPI" style="background: #F39C12">
						<table style="width: 100%;">
							<tr>
								<td><span>Temperature</span></td>
							</tr>
							<tr>
								<td class="valueKPI"><span style="font-size: 30px;"><?php echo $temperatureVal; ?><span style="font-size: 15px;"> c</span></span></td>
							</tr>
							<tr>
								<td><hr></td>
							</tr>
						</table>
					</div>
				</div>
				<div class="myKPI_DosingPw">
					<div class="logoKPI" style="background: #5BAF2F"><img src="Assets/images/2.png"></div>
					<div class="contentKPI" style="background: #9CDB3A">
						<table style="width: 100%;">
							<tr>
								<td><span>Flushing time</span></td>
							</tr>
							<tr>
								<td class="valueKPI"><span style="font-size: 30px;"><?php echo $flushingTimeVal; ?><span style="font-size: 15px;"> s</span></span></td>
							</tr>
							<tr>
								<td><hr></td>
							</tr>
						</table>
					</div>
				</div>
			</div>
			<!-- ############################################################################################### -->
			<div style="padding: 100px 3% 0 3%; ">
				<h6>Mixing</h6>
			</div>
			<div style="padding: 0 3% 0 3%; ">
				<div class="out_myKPI_Mixing">
					<div class="myKPI_Mixing" style="width: 100%; height: calc(50% - 5px); margin-bottom: 5px; padding: 0px;">
						<div class="contentKPI">
							<table style="width: 100%;">
								<tr>
									<td style="text-align: center;"><span>Pressure</span></td>
								</tr>
								<tr>
									<td class="valueKPI">
										<div class="row">
											<div class="col-7" style="text-align: right;padding-right: 0px;">
												<span style="font-size: 80px;"><?php echo $pressure; ?></span>
											</div>
											<div class="col-5">
												<br><br><br>
												<span style="font-size: 30px;vertical-align: bottom;">bar</span>
											</div>
										</div>
	  								</td>
								</tr>
							</table>
						</div>
					</div>
					<div class="myKPI_Mixing"  style="width: 100%;height: calc(50% - 5px); margin-top: 5px; padding: 0px;">
						<div class="contentKPI">
							<div class="contentKPI">
								<table style="width: 100%;">
									<tr>
										<td style="text-align: center;"><span>Hysterisis</span></td>
									</tr>
									<tr>
										<td class="valueKPI">
											<div class="row">
												<div class="col-7" style="text-align: right;padding-right: 0px;">
													<span style="font-size: 80px;"><?php echo $histerisis; ?></span>
												</div>
												<div class="col-5">
													<br><br><br>
													<span style="font-size: 30px;vertical-align: bottom;">bar</span>
												</div>
											</div>
		  								</td>
									</tr>
								</table>
							</div>
						</div>
					</div>
				</div>
				
				<div class="myKPI_Mixing">
					<div class="contentKPI">
						<table style="width: 100%;">
							<tr>
								<td style="text-align: center;"><span>Homogenizer Speed</span></td>
							</tr>
							<tr>
								<td class="valueKPI">
									<div class="outer">
									  <div id="container-rpm" class="container"></div>
									</div>
								</td>
							</tr>
						</table>
					</div>
				</div>

				<div class="out_myKPI_Mixing">
					<div class="myKPI_Mixing" style="width: 100%; height: calc(65% - 5px); margin-bottom: 5px; padding: 0px;">
						<div class="contentKPI">
							<table style="width: 100%;">
								<tr>
									<td style="text-align: center;"><span>Agitator Speed</span></td>
								</tr>
								<tr>
									<td class="valueKPI">
										<div class="outer">
										  <div id="container-rpm1" class="container"></div>
										</div>
									</td>
								</tr>
							</table>
						</div>
					</div>
					<div class="myKPI_Mixing"  style="width: 100%;height: calc(35% - 5px); margin-top: 5px; padding: 0px;">
						<div class="contentKPI">
							<div class="contentKPI">
								<table style="width: 100%;">
									<tr>
										<td style="text-align: center;"><span>Agitator Time</span></td>
									</tr>
									<tr>
										<td class="valueKPI">
											<div class="row">
												<div class="col-7" style="text-align: right;padding-right: 0px;">
													<span style="font-size: 50px;"><?php echo $agitatorTime; ?></span>
												</div>
												<div class="col-5">
													<br><br>
													<span style="vertical-align: bottom;">bar</span>
												</div>
											</div>
		  								</td>
									</tr>
								</table>
							</div>
						</div>
					</div>
				</div>

				<div class="out_myKPI_Mixing">
					<div class="myKPI_Mixing" style="width: 100%; height: calc(65% - 5px); margin-bottom: 5px; padding: 0px;">
						<div class="contentKPI">
							<table style="width: 100%;">
								<tr>
									<td style="text-align: center;"><span>Internal Circulation Speed</span></td>
								</tr>
								<tr>
									<td class="valueKPI">
										<div class="outer">
										  <div id="container-rpm2" class="container"></div>
										</div>
									</td>
								</tr>
							</table>
						</div>
					</div>
					<div class="myKPI_Mixing"  style="width: 100%;height: calc(35% - 5px); margin-top: 5px; padding: 0px;">
						<div class="contentKPI">
							<div class="contentKPI">
								<table style="width: 100%;">
									<tr>
										<td style="text-align: center;"><span>Internal Circulation Time</span></td>
									</tr>
									<tr>
										<td class="valueKPI">
											<div class="row">
												<div class="col-7" style="text-align: right;padding-right: 0px;">
													<span style="font-size: 50px;"><?php echo $internalCirculationTime; ?></span>
												</div>
												<div class="col-5">
													<br><br>
													<span style="vertical-align: bottom;">bar</span>
												</div>
											</div>
		  								</td>
									</tr>
								</table>
							</div>
						</div>
					</div>
				</div>
			</div>

		</body>
		</html>
