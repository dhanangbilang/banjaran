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
			height: 150px;
			margin-left: 10px;
			float: left;
		}
		.myVessel{
			width: calc(100% - 0px);
			height: 100px;
			margin-left: 10px;
			float: left;
		}
		.myHSM{
			width: calc(100% - 0px);
			height: 75%;
			margin-left: 10px;
			float: left;
		}
		.myFBDP{
			width: calc(100% - 0px);
			height: 25%;
			margin-left: 10px;
			float: left;
		}
		.myFBD{
			width: calc(100% - 0px);
			height: 68%;
			margin-left: 10px;
			float: left;
		}
		.myLabelDevice{
			background: #d3fbec;
		    border-radius: 5px;
		    padding: 5px 22%;
		    color: black;
		    font-weight: bold;
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
			width: calc(100% - 0);
			height: calc(100% - 0);
			position: relative;
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
	    	//ajax_dosingpw();
	    	//ajax_mixing();
			//reGetData();
			myCircelGauge();
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
			      circle.setText('<span class="myLabelinCircle">0 RPM</span>');
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
			      circle.setText('<span class="myLabelinCircle">0 RPM</span>');
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
			      circle.setText('<span class="myLabelinCircle">0 RPM</span>');
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
			      circle.setText('<span class="myLabelinCircle">0 RPM</span>');
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
			      circle.setText('<span class="myLabelinCircle">0 RPM</span>');
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
			      circle.setText('<span class="myLabelinCircle">0 RPM</span>');
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
			      circle.setText('<span class="myLabelinCircle">0 RPM</span>');
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
			      circle.setText('<span class="myLabelinCircle">0 RPM</span>');
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
			      circle.setText('<span class="myLabelinCircle">0 RPM</span>');
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
			      circle.setText('<span class="myLabelinCircle">0 RPM</span>');
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
					<li><a class="mySideMenu" href="#" style="color:white;background: #222C32;">IGL GEA</a></li>
					<li><a class="mySideMenu" href="index5.php">Blending GEA</a></li>
					<li><a class="mySideMenu" href="index6.php">Roller Compactor AW</a></li>
					<li><a class="mySideMenu" href="index7.php">Coating Bosch</a></li>
				</ul>
			</div>
		</div>
		<div id="myRightPanel">
			<span class="myLabelText"><span id="pageHistory" style="background: grey;padding: 2px 5px;border-radius: 5px; cursor: pointer;">Overview Historical Data</span> <span id="pageReal" style="background: #51f746;padding: 2px 5px;border-radius: 5px; cursor: pointer;">Data Real Time</span></span><br><br>
			<div>
				<span class="myLabelText myLabelDevice">Device 1</span>
				<span class="myLabelText myLabelDevice">Device 2</span>
			</div>
			<div style="width: 23%;height: 80%; float: left; margin-right: 10px;margin-left: 7px;">
			<span class="myLabelText">Vessel</span><br>
				<!-- KPI Vessel -->
				<div class="myBlock myVessel">
					<div style="width: 35%;height: auto; margin: 5px 0 0 5px; float: left;">
						<center>
							<div class="o2" id="cir1"></div>
						</center>
					</div>
					<div style="width: 50%;height: 50%; margin: 10% 0 0 5px; float: left;">
						<span class="myTextKPI">Duration : 10	min</span><br>
						<span class="myTextKPI">Time : 5 Time</span>
					</div>
				</div>
				<!-- KPI High Sear Mixer --><span class="myLabelText">High Sear Mixer</span><br>
				<div class="myBlock myHSM">
					<div style="width: 35%;height: auto; margin: 5px 0 0 15%; float: left;">
						<center>
							<span class="myTextKPI">Impeller</span>
							<div class="o2" id="cir2"></div>
						</center>
					</div>
					<div style="width: 35%;height: auto; margin: 5px 0 0 5px; float: left;">
						<center>
							<span class="myTextKPI">Chopper</span>
							<div class="o2" id="cir3"></div>
						</center>
					</div>
					<div style="width: 40%;height: auto; margin: 5px 0 0 30%; float: left;">
						<center>
							<span class="myTextKPI">Wet Mill Speed </span>
							<div class="o2" id="cir4"></div>
						</center>
					</div>
					<div style="width: 100%;height: auto; padding: 10px; float: left;">
						<span class="myTextKPI2">Solution Vessel Pressure : <span style="background: #ffecc8;padding: 2px 5px;border-radius: 5px; color: black;">10 bar</span></span><br>
						<span class="myTextKPI2">Process Time Trip Level : <span style="background: #ffecc8;padding: 2px 5px;border-radius: 5px;color: black;">10 min</span></span><br>
						<span class="myTextKPI2">Impeller Load Trip Level  : <span style="background: #ffecc8;padding: 2px 5px;border-radius: 5px;color: black;">10 kW</span></span><br>
						<span class="myTextKPI2">Discharge Operation : <span style="background: #ffecc8;padding: 2px 5px;border-radius: 5px;color: black;">10 FBD</span></span><br>
					</div>
				</div>
			</div>
			<div style="width: 23%;height: 82%; float: left; margin-right: 10px;">
				<span class="myLabelText">FBD (Pre-Heating)</span><br>
				<div class="myBlock myFBDP">
					<div style="width: 100%;height: auto; padding: 5px 10px; float: left;">
						<span class="myTextKPI2">Fluidising Air Flow  : <span style="background: #ffecc8;padding: 2px 5px;border-radius: 5px; color: black;">10 m3/h</span></span><br>
						<span class="myTextKPI2">Dehumidifier Temp  : <span style="background: #ffecc8;padding: 2px 5px;border-radius: 5px;color: black;">10 &#8451;</span></span><br>
						<span class="myTextKPI2">Inlet Air Temp  : <span style="background: #ffecc8;padding: 2px 5px;border-radius: 5px;color: black;">10 &#8451;</span></span><br>
						<span class="myTextKPI2">Process Time Trip : <span style="background: #ffecc8;padding: 2px 5px;border-radius: 5px;color: black;">10 min</span></span><br>
					</div>
				</div>
				<span class="myLabelText">FBD</span><br>
				<div class="myBlock myFBD">
					<div style="width: 100%;height: auto; padding: 5px 10px; float: left;">
						<span class="myTextKPI2">Fluidising Air Flow  : <span style="background: #ffecc8;padding: 2px 5px;border-radius: 5px; color: black;">10 m3/h</span></span><br>
						<span class="myTextKPI2">Dehumidifier Temp  : <span style="background: #ffecc8;padding: 2px 5px;border-radius: 5px;color: black;">10 &#8451;</span></span><br>
						<span class="myTextKPI2">Inlet Air Temp  : <span style="background: #ffecc8;padding: 2px 5px;border-radius: 5px;color: black;">10 &#8451;</span></span><br>
						<span class="myTextKPI2">Filter Clear Interval Time  : <span style="background: #ffecc8;padding: 2px 5px;border-radius: 5px;color: black;">10 s</span></span><br>
						<span class="myTextKPI2">Number of Filter Shakes  : <span style="background: #ffecc8;padding: 2px 5px;border-radius: 5px;color: black;">10</span></span><br>
						<span class="myTextKPI2">Exhaust Air Temp Trip Level  : <span style="background: #ffecc8;padding: 2px 5px;border-radius: 5px;color: black;">10</span></span><br>
						<span class="myTextKPI2">Discharge Operation  : <span style="background: #51f746;padding: 2px 5px;border-radius: 5px;color: black;">ON</span></span><br>
					</div>
					<div style="width: 50%;height: auto; margin: 5px 0 0 25%; float: left;">
						<center>
							<span class="myTextKPI">Dry Mill Speed </span>
							<div class="o2" id="cir5"></div>
						</center>
					</div>
				</div>
			</div>
			<!-- device 2 -->
			<div style="width: 23%;height: 80%; float: left; margin-right: 10px;margin-left: 17px;">
			<span class="myLabelText">Vessel</span><br>
				<!-- KPI Vessel -->
				<div class="myBlock myVessel">
					<div style="width: 35%;height: auto; margin: 5px 0 0 5px; float: left;">
						<center>
							<div class="o2" id="cir6"></div>
						</center>
					</div>
					<div style="width: 50%;height: 50%; margin: 10% 0 0 5px; float: left;">
						<span class="myTextKPI">Duration : 10	min</span><br>
						<span class="myTextKPI">Time : 5 Time</span>
					</div>
				</div>
				<!-- KPI High Sear Mixer --><span class="myLabelText">High Sear Mixer</span><br>
				<div class="myBlock myHSM">
					<div style="width: 35%;height: auto; margin: 5px 0 0 15%; float: left;">
						<center>
							<span class="myTextKPI">Impeller</span>
							<div class="o2" id="cir7"></div>
						</center>
					</div>
					<div style="width: 35%;height: auto; margin: 5px 0 0 5px; float: left;">
						<center>
							<span class="myTextKPI">Chopper</span>
							<div class="o2" id="cir8"></div>
						</center>
					</div>
					<div style="width: 40%;height: auto; margin: 5px 0 0 30%; float: left;">
						<center>
							<span class="myTextKPI">Wet Mill Speed </span>
							<div class="o2" id="cir9"></div>
						</center>
					</div>
					<div style="width: 100%;height: auto; padding: 10px; float: left;">
						<span class="myTextKPI2">Solution Vessel Pressure : <span style="background: #ffecc8;padding: 2px 5px;border-radius: 5px; color: black;">10 bar</span></span><br>
						<span class="myTextKPI2">Process Time Trip Level : <span style="background: #ffecc8;padding: 2px 5px;border-radius: 5px;color: black;">10 min</span></span><br>
						<span class="myTextKPI2">Impeller Load Trip Level  : <span style="background: #ffecc8;padding: 2px 5px;border-radius: 5px;color: black;">10 kW</span></span><br>
						<span class="myTextKPI2">Discharge Operation : <span style="background: #ffecc8;padding: 2px 5px;border-radius: 5px;color: black;">10 FBD</span></span><br>
					</div>
				</div>
			</div>
			<div style="width: 23%;height: 82%; float: left; margin-right: 10px;">
				<span class="myLabelText">FBD (Pre-Heating)</span><br>
				<div class="myBlock myFBDP">
					<div style="width: 100%;height: auto; padding: 5px 10px; float: left;">
						<span class="myTextKPI2">Fluidising Air Flow  : <span style="background: #ffecc8;padding: 2px 5px;border-radius: 5px; color: black;">10 m3/h</span></span><br>
						<span class="myTextKPI2">Dehumidifier Temp  : <span style="background: #ffecc8;padding: 2px 5px;border-radius: 5px;color: black;">10 &#8451;</span></span><br>
						<span class="myTextKPI2">Inlet Air Temp  : <span style="background: #ffecc8;padding: 2px 5px;border-radius: 5px;color: black;">10 &#8451;</span></span><br>
						<span class="myTextKPI2">Process Time Trip : <span style="background: #ffecc8;padding: 2px 5px;border-radius: 5px;color: black;">10 min</span></span><br>
					</div>
				</div>
				<span class="myLabelText">FBD</span><br>
				<div class="myBlock myFBD">
					<div style="width: 100%;height: auto; padding: 5px 10px; float: left;">
						<span class="myTextKPI2">Fluidising Air Flow  : <span style="background: #ffecc8;padding: 2px 5px;border-radius: 5px; color: black;">10 m3/h</span></span><br>
						<span class="myTextKPI2">Dehumidifier Temp  : <span style="background: #ffecc8;padding: 2px 5px;border-radius: 5px;color: black;">10 &#8451;</span></span><br>
						<span class="myTextKPI2">Inlet Air Temp  : <span style="background: #ffecc8;padding: 2px 5px;border-radius: 5px;color: black;">10 &#8451;</span></span><br>
						<span class="myTextKPI2">Filter Clear Interval Time  : <span style="background: #ffecc8;padding: 2px 5px;border-radius: 5px;color: black;">10 s</span></span><br>
						<span class="myTextKPI2">Number of Filter Shakes  : <span style="background: #ffecc8;padding: 2px 5px;border-radius: 5px;color: black;">10</span></span><br>
						<span class="myTextKPI2">Exhaust Air Temp Trip Level  : <span style="background: #ffecc8;padding: 2px 5px;border-radius: 5px;color: black;">10</span></span><br>
						<span class="myTextKPI2">Discharge Operation  : <span style="background: #51f746;padding: 2px 5px;border-radius: 5px;color: black;">ON</span></span><br>
					</div>
					<div style="width: 50%;height: auto; margin: 5px 0 0 25%; float: left;">
						<center>
							<span class="myTextKPI">Dry Mill Speed </span>
							<div class="o2" id="cir10"></div>
						</center>
					</div>
				</div>
			</div>
		</div>
	</body>
</html>