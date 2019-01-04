<html>
	<head>
		<title>Kimia Farma</title>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
		<!--<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>-->
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
		<script src="https://code.jquery.com/jquery-2.1.3.js" integrity="sha256-goy7ystDD5xbXSf+kwL4eV6zOPJCEBD1FBiCElIm+U8=" crossorigin="anonymous"></script>
		<link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700,800" rel="stylesheet">
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
		/*######################################################*/
		
		.box {
		    width: 300px;
		    max-width: 90%;
		    margin: 0 auto;
		    padding: 1rem 3rem 1rem 3rem;
		    display: block;
		    /*border-radius: 1.5rem;
		    background-color: rgb(255, 255, 255);
		    box-shadow: 0px 0px 15.84px 0.16px rgba(35, 31, 32, 0.1);*/
		    font-family: 'Montserrat', sans-serif;
		    font-size: 1.4rem;
		    line-height: 1.4;
		    font-weight: 300;
		}

		.agitator_meter {
		    width: 188px;
		    margin: 30px auto 0;
		    position: relative;
		}

		.meter-hand {
		    position: absolute;
		    left: 50%;
		    bottom: 6px;
		    margin-left: -44px;
		    z-index: 1;
		    transition: all 2s ease-in-out;
		    transform-origin: 94% 48%;
		}

		.speed {
		    font-size: 3.2rem;
		    font-weight: 700;
		    line-height: 1;
		}

		#agitator_speed {
		    min-width: 100px;
		    display: inline-block;
		}

		.unit {
		    font-size: 2rem;
		    font-weight: 500;
		    color: #bbe697;
		}

		.agitator_meter .agitator_num {
		    font-size: 1rem;
		    font-weight: 600;
		    position: absolute;
		}

		#agitator_num_1 {
		    left: 25px;
    		top: 65px;
		}

		#agitator_num_2 {
		    left: 30px;
		    top: 45px;
		}

		#agitator_num_3 {
		    left: 45px;
		    top: 30px;
		}

		#agitator_num_4 {
		    left: 70px;
		    top: 20px;
		}

		#agitator_num_5 {
		    right: 40px;
		    top: 30px;
		}

		#agitator_num_6 {
		    right: 25px;
		    top: 45px;
		}

		#agitator_num_7 {
		    right: 15px;
		    top: 65px;
		}

		/*##########################################################################*/



		#homogenizer_speed {
		    min-width: 100px;
		    display: inline-block;
		}
		.homogenizer_meter .homogenizer_num {
		    font-size: 1rem;
		    font-weight: 600;
		    position: absolute;
		}

		#homogenizer_num_1 {
		    left: 25px;
		    top: 80px;
		}

		#homogenizer_num_2 {
		    left: 37px;
		    top: 56px;
		}

		#homogenizer_num_3 {
		    left: 55px;
		    top: 35px;
		}

		#homogenizer_num_4 {
		    left: 87px;
		    top: 25px;
		}

		#homogenizer_num_5 {
		    right: 55px;
		    top: 35px;
		}

		#homogenizer_num_6 {
		    right: 37px;
		    top: 56px;
		}

		#homogenizer_num_7 {
		    right: 25px;
		    top: 80px;
		}
		/*##########################################################################*/



		#circulation_speed {
		    min-width: 100px;
		    display: inline-block;
		}
		.circulation_meter .circulation_num {
		    font-size: 1rem;
		    font-weight: 600;
		    position: absolute;
		}

		#circulation_num_1 {
		    left: 25px;
		    top: 80px;
		}

		#circulation_num_2 {
		    left: 37px;
		    top: 56px;
		}

		#circulation_num_3 {
		    left: 55px;
		    top: 35px;
		}

		#circulation_num_4 {
		    left: 87px;
		    top: 25px;
		}

		#circulation_num_5 {
		    right: 55px;
		    top: 35px;
		}

		#circulation_num_6 {
		    right: 37px;
		    top: 56px;
		}

		#circulation_num_7 {
		    right: 25px;
		    top: 80px;
		}
	</style>
	<script>
		$( document ).ready(function(){
				var speed = 40;
			    $('#circulation_hand').animate({ textIndent: 0 }, {
			            step: function(now) {
			                now = speed;
			                $('.circulation_meter .circulation_num').each(function() {
			                    for (var i = 0; i <= 1000; i++) {
			                        $('#circulation_num_' + (i + 1)).text(i * 30);
			                    }
			                })
			                if ((now / 180) > 1) {
			                    var m = now / 180;
			                    $('.circulation_meter .circulation_num').each(function() {
			                        for (var i = 0; i <= 6; i++) {
			                            $('#circulation_num_' + (i + 1)).text(Math.round(i * 30 * m) * 2);
			                        }
			                    })
			                    $(this).css('-webkit-transform', 'rotate(' + 90 + 'deg)');
			                    $('#circulation_speed').text(Math.round(now * 100) / 100);
			                } else {
			                    $(this).css('-webkit-transform', 'rotate(' + now + 'deg)');
			                    $('#circulation_speed').text(Math.round(now * 100) / 100);
			                }
			            },
			            duration: '500'
			        },
			        'linear');

			    var speed = 100;
		    $('#homogenizer_hand').animate({ textIndent: 0 }, {
		            step: function(now) {
		                now = speed;
		                $('.homogenizer_meter .homogenizer_num').each(function() {
		                    for (var i = 0; i <= 1000; i++) {
		                        $('#homogenizer_num_' + (i + 1)).text(i * 30);
		                    }
		                })
		                if ((now / 180) > 1) {
		                    var m = now / 180;
		                    $('.homogenizer_meter .homogenizer_num').each(function() {
		                        for (var i = 0; i <= 6; i++) {
		                            $('#homogenizer_num_' + (i + 1)).text(Math.round(i * 30 * m) * 2);
		                        }
		                    })
		                    $(this).css('-webkit-transform', 'rotate(' + 90 + 'deg)');
		                    $('#homogenizer_speed').text(Math.round(now * 100) / 100);
		                } else {
		                    $(this).css('-webkit-transform', 'rotate(' + now + 'deg)');
		                    $('#homogenizer_speed').text(Math.round(now * 100) / 100);
		                }

		                //$('#speed').prop('Counter', 0).animate({
		                //    Counter: now
		                //}, {
		                //   duration: 2000,
		                //    easing: 'linear',
		                //    step: function(now) {
		                //        $('#speed').text(Math.round(now * 100) / 100);
		                //    }
		                //});
		            },
		            duration: '500'
		        },
		        'linear');

		    var speed = 150;
		    $('#agitator_hand').animate({ textIndent: 0 }, {
		            step: function(now) {
		                now = speed;
		                $('.agitator_meter .agitator_num').each(function() {
		                    for (var i = 0; i <= 1000; i++) {
		                        $('#agitator_num_' + (i + 1)).text(i * 30);
		                    }
		                })
		                if ((now / 180) > 1) {
		                    var m = now / 180;
		                    $('.agitator_meter .agitator_num').each(function() {
		                        for (var i = 0; i <= 6; i++) {
		                            $('#agitator_num_' + (i + 1)).text(Math.round(i * 30 * m) * 2);
		                        }
		                    })
		                    $(this).css('-webkit-transform', 'rotate(' + 90 + 'deg)');
		                    $('#hagitator_speed').text(Math.round(now * 100) / 100);
		                } else {
		                    $(this).css('-webkit-transform', 'rotate(' + now + 'deg)');
		                    $('#agitator_speed').text(Math.round(now * 100) / 100);
		                }
		            },
		            duration: '500'
		        },
		        'linear');
		});




		/*$( document ).ready(function() {
		function homogenizer_(){
			var speed = 100;
		    $('#homogenizer_hand').animate({ textIndent: 0 }, {
		            step: function(now) {
		                now = speed;
		                $('.homogenizer_meter .homogenizer_num').each(function() {
		                    for (var i = 0; i <= 1000; i++) {
		                        $('#homogenizer_num_' + (i + 1)).text(i * 30);
		                    }
		                })
		                if ((now / 180) > 1) {
		                    var m = now / 180;
		                    $('.homogenizer_meter .homogenizer_num').each(function() {
		                        for (var i = 0; i <= 6; i++) {
		                            $('#homogenizer_num_' + (i + 1)).text(Math.round(i * 30 * m) * 2);
		                        }
		                    })
		                    $(this).css('-webkit-transform', 'rotate(' + 90 + 'deg)');
		                    $('#homogenizer_speed').text(Math.round(now * 100) / 100);
		                } else {
		                    $(this).css('-webkit-transform', 'rotate(' + now + 'deg)');
		                    $('#homogenizer_speed').text(Math.round(now * 100) / 100);
		                }

		                //$('#speed').prop('Counter', 0).animate({
		                //    Counter: now
		                //}, {
		                //   duration: 2000,
		                //    easing: 'linear',
		                //    step: function(now) {
		                //        $('#speed').text(Math.round(now * 100) / 100);
		                //    }
		                //});
		            },
		            duration: '500'
		        },
		        'linear');
		};

		function agitator_(){
			var speed = 150;
		    $('#agitator_hand').animate({ textIndent: 0 }, {
		            step: function(now) {
		                now = speed;
		                $('.agitator_meter .agitator_num').each(function() {
		                    for (var i = 0; i <= 1000; i++) {
		                        $('#agitator_num_' + (i + 1)).text(i * 30);
		                    }
		                })
		                if ((now / 180) > 1) {
		                    var m = now / 180;
		                    $('.agitator_meter .agitator_num').each(function() {
		                        for (var i = 0; i <= 6; i++) {
		                            $('#agitator_num_' + (i + 1)).text(Math.round(i * 30 * m) * 2);
		                        }
		                    })
		                    $(this).css('-webkit-transform', 'rotate(' + 90 + 'deg)');
		                    $('#hagitator_speed').text(Math.round(now * 100) / 100);
		                } else {
		                    $(this).css('-webkit-transform', 'rotate(' + now + 'deg)');
		                    $('#agitator_speed').text(Math.round(now * 100) / 100);
		                }
		            },
		            duration: '500'
		        },
		        'linear');
		};

		function circulation_(){
			var speed = 40;
		    $('#circulation_hand').animate({ textIndent: 0 }, {
		            step: function(now) {
		                now = speed;
		                $('.circulation_meter .circulation_num').each(function() {
		                    for (var i = 0; i <= 1000; i++) {
		                        $('#circulation_num_' + (i + 1)).text(i * 30);
		                    }
		                })
		                if ((now / 180) > 1) {
		                    var m = now / 180;
		                    $('.circulation_meter .circulation_num').each(function() {
		                        for (var i = 0; i <= 6; i++) {
		                            $('#circulation_num_' + (i + 1)).text(Math.round(i * 30 * m) * 2);
		                        }
		                    })
		                    $(this).css('-webkit-transform', 'rotate(' + 90 + 'deg)');
		                    $('#circulation_speed').text(Math.round(now * 100) / 100);
		                } else {
		                    $(this).css('-webkit-transform', 'rotate(' + now + 'deg)');
		                    $('#circulation_speed').text(Math.round(now * 100) / 100);
		                }
		            },
		            duration: '500'
		        },
		        'linear');
		};
		});*/
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
							<td class="valueKPI"><span style="font-size: 30px;">25/kg</span></td>
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
							<td class="valueKPI"><span style="font-size: 30px;">25/s</span></td>
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
							<td class="valueKPI"><span style="font-size: 30px;">25/c</span></td>
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
							<td class="valueKPI"><span style="font-size: 30px;">25/s</span></td>
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
										<div class="col-sm" style="text-align: right;padding-right: 0px;">
											<span style="font-size: 80px;">25</span>
										</div>
										<div class="col-sm">
											<br><br><br>
											<span style="font-size: 30px;vertical-align: bottom;">/bar</span>
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
									<td style="text-align: center;"><span>Hysteresis</span></td>
								</tr>
								<tr>
									<td class="valueKPI">
										<div class="row">
											<div class="col-sm" style="text-align: right;padding-right: 0px;">
												<span style="font-size: 80px;">25</span>
											</div>
											<div class="col-sm">
												<br><br><br>
												<span style="font-size: 30px;vertical-align: bottom;">/bar</span>
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
					<!--<link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700,800" rel="stylesheet">-->
						<div class="box">
					        <h2 class="mb-4 text-center">Homogenizer Speed</h2>
					        <div class="homogenizer_meter position-relative">
					            <img src="Assets/images/meter-bg.png" alt="" class="img-fluid">
					            <span class="homogenizer_num" id="homogenizer_num_1"></span>
					            <span class="homogenizer_num" id="homogenizer_num_2"></span>
					            <span class="homogenizer_num" id="homogenizer_num_3"></span>
					            <span class="homogenizer_num" id="homogenizer_num_4"></span>
					            <span class="homogenizer_num" id="homogenizer_num_5"></span>
					            <span class="homogenizer_num" id="homogenizer_num_6"></span>
					            <span class="homogenizer_num" id="homogenizer_num_7"></span>
					            <img src="Assets/images/meter-hand.png" alt="" class="meter-hand" id="homogenizer_hand">
					        </div>
					        <div class="text-center mt-2">
					            <div class="speed"><span id="homogenizer_speed">200</span></div>
					            <div class="unit">RPM</div>
					        </div>
					    </div>
				</div>
			</div>

			<div class="out_myKPI_Mixing">
				<div class="myKPI_Mixing" style="width: 100%; height: calc(65% - 5px); margin-bottom: 5px; padding: 0px;">
					<div class="contentKPI">
						<div class="box">
					        <h4 class="mb-4 text-center">Agitator Speed</h4>
					        <div class="agitator_meter position-relative" style="width: 150px; margin: 20px auto 0;">
					            <img src="Assets/images/meter-bg.png" alt="" class="img-fluid">
					            <span class="agitator_num" id="agitator_num_1"></span>
					            <span class="agitator_num" id="agitator_num_2"></span>
					            <span class="agitator_num" id="agitator_num_3"></span>
					            <span class="agitator_num" id="agitator_num_4"></span>
					            <span class="agitator_num" id="agitator_num_5"></span>
					            <span class="agitator_num" id="agitator_num_6"></span>
					            <span class="agitator_num" id="agitator_num_7"></span>
					            <img src="Assets/images/meter-hand.png" alt="" class="meter-hand" id="agitator_hand" style="bottom: 4px;">
					        </div>
					        <div class="text-center mt-2">
					            <div class="speed"><span id="agitator_speed">200</span></div>
					            <div class="unit">RPM</div>
					        </div>
					    </div>
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
											<div class="col-sm" style="text-align: right;padding-right: 0px;">
												<span style="font-size: 50px;">25</span>
											</div>
											<div class="col-sm">
												<br><br>
												<span style="vertical-align: bottom;">/bar</span>
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
						<div class="box">
					        <h4 class="mb-4 text-center">Internal Circulation Speed</h4>
					        <div class="circulation_meter position-relative" style="width: 130px; margin: 20px auto 0;">
					            <img src="Assets/images/meter-bg.png" alt="" class="img-fluid">
					            <span class="circulation_num" id="circulation_num_1"></span>
					            <span class="circulation_num" id="circulation_num_2"></span>
					            <span class="circulation_num" id="circulation_num_3"></span>
					            <span class="circulation_num" id="circulation_num_4"></span>
					            <span class="circulation_num" id="circulation_num_5"></span>
					            <span class="circulation_num" id="circulation_num_6"></span>
					            <span class="circulation_num" id="circulation_num_7"></span>
					            <img src="Assets/images/meter-hand.png" alt="" class="meter-hand" id="circulation_hand" style="bottom: 3px;">
					        </div>
					        <div class="text-center mt-2">
					            <div class="speed"><span id="circulation_speed">200</span></div>
					            <div class="unit">RPM</div>
					        </div>
					    </div>
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
											<div class="col-sm" style="text-align: right;padding-right: 0px;">
												<span style="font-size: 50px;">25</span>
											</div>
											<div class="col-sm">
												<br><br>
												<span style="vertical-align: bottom;">/bar</span>
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