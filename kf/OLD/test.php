<!doctype html>
<html>

<head>
	<title>Line Chart</title>
	<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
	<style>
.progress {
  width: 150px;
  height: 150px;
  line-height: 150px;
  background: none;
  margin: 0 auto;
  box-shadow: none;
  position: relative;
}
.progress:after {
  content: "";
  width: 100%;
  height: 100%;
  border-radius: 50%;
  border: 7px solid #eee;
  position: absolute;
  top: 0;
  left: 0;
}
.progress > span {
  width: 50%;
  height: 100%;
  overflow: hidden;
  position: absolute;
  top: 0;
  z-index: 1;
}
.progress .progress-left {
  left: 0;
}
.progress .progress-bar {
  width: 100%;
  height: 100%;
  background: none;
  border-width: 7px;
  border-style: solid;
  position: absolute;
  top: 0;
  border-color: #ffb43e;
}
.progress .progress-left .progress-bar {
  left: 100%;
  border-top-right-radius: 75px;
  border-bottom-right-radius: 75px;
  border-left: 0;
  -webkit-transform-origin: center left;
  transform-origin: center left;
}
.progress .progress-right {
  right: 0;
}
.progress .progress-right .progress-bar {
  left: -100%;
  border-top-left-radius: 75px;
  border-bottom-left-radius: 75px;
  border-right: 0;
  -webkit-transform-origin: center right;
  transform-origin: center right;
}
.progress .progress-value {
  display: flex;
  border-radius: 50%;
  font-size: 36px;
  text-align: center;
  line-height: 20px;
  align-items: center;
  justify-content: center;
  height: 100%;
  font-weight: 300;
}
.progress .progress-value div {
  margin-top: 10px;
}
.progress .progress-value span {
  font-size: 12px;
  text-transform: uppercase;
}
/* This for loop creates the 	necessary css animation names 
 Due to the split circle of progress-left and progress right, we must use the animations on each side. 
 */
.progress[data-percentage="10"] .progress-right .progress-bar {animation: loading-1 1.5s linear forwards;}
.progress[data-percentage="11"] .progress-left .progress-bar {animation: 0;}
.progress[data-percentage="12"] .progress-right .progress-bar {animation: loading-2 1.5s linear forwards;}
.progress[data-percentage="13"] .progress-left .progress-bar {animation: 0;}
.progress[data-percentage="14"] .progress-right .progress-bar {animation: loading-3 1.5s linear forwards;}
.progress[data-percentage="15"] .progress-left .progress-bar {animation: 0;}
.progress[data-percentage="16"] .progress-right .progress-bar {animation: loading-4 1.5s linear forwards;}
.progress[data-percentage="17"] .progress-left .progress-bar {animation: 0;}
.progress[data-percentage="18"] .progress-right .progress-bar {animation: loading-5 1.5s linear forwards;}
.progress[data-percentage="19"] .progress-left .progress-bar {animation: 0;}
.progress[data-percentage="20"] .progress-right .progress-bar {animation: loading-6 1.5s linear forwards;}
.progress[data-percentage="21"] .progress-left .progress-bar {animation: 0;}

@keyframes loading-1 {
  0% {
    -webkit-transform: rotate(0deg);
    transform: rotate(0deg);
  }
  100% {
    -webkit-transform: rotate(36);
    transform: rotate(36deg);
  }
}
@keyframes loading-2 {
  0% {
    -webkit-transform: rotate(0deg);
    transform: rotate(0deg);
  }
  100% {
    -webkit-transform: rotate(72);
    transform: rotate(72deg);
  }
}
@keyframes loading-3 {
  0% {
    -webkit-transform: rotate(0deg);
    transform: rotate(0deg);
  }
  100% {
    -webkit-transform: rotate(108);
    transform: rotate(108deg);
  }
}
@keyframes loading-4 {
  0% {
    -webkit-transform: rotate(0deg);
    transform: rotate(0deg);
  }
  100% {
    -webkit-transform: rotate(144);
    transform: rotate(144deg);
  }
}
@keyframes loading-5 {
  0% {
    -webkit-transform: rotate(0deg);
    transform: rotate(0deg);
  }
  100% {
    -webkit-transform: rotate(180);
    transform: rotate(180deg);
  }
}
.progress {
  margin-bottom: 1em;
}

	</style>
</head>

<body>
	<div class="container">
	<h1>Pure CSS (SCSS) Bootstrap compatible circular progress bars</h1>
	<p>This uses a data-attribute to create the progress bar. Forked from <a href="https://bootsnipp.com/snippets/featured/circle-progress-bar">circle-progress-bar</a>. This functions based on increments defined in the the scss. Change the $howManySteps var and the for loops below will generate the CSS. The data attributes will need to be changed to reflect the newly generated CSS. This doesn't require Bootstrap. Let me know if you use it your project, I'd love to see it in the wild.</p>
</div>
<div class="container">
	<div class="row">
		<div class="col-sm-3 col-md-2">
			<div class="progress" data-percentage="10">
				<span class="progress-left">
					<span class="progress-bar"></span>
				</span>
				<span class="progress-right">
					<span class="progress-bar"></span>
				</span>
				<div class="progress-value">
					<div>
						20%<br>
						<span>completed</span>
					</div>
				</div>
			</div>
		</div>
		<div class="col-sm-3 col-md-2">
			<div class="progress" data-percentage="11">
				<span class="progress-left">
					<span class="progress-bar"></span>
				</span>
				<span class="progress-right">
					<span class="progress-bar"></span>
				</span>
				<div class="progress-value">
					<div>
						40%<br>
						<span>completed</span>
					</div>
				</div>
			</div>
		</div>
		
		<div class="col-sm-3 col-md-2">
			<div class="progress" data-percentage="12">
				<span class="progress-left">
					<span class="progress-bar"></span>
				</span>
				<span class="progress-right">
					<span class="progress-bar"></span>
				</span>
				<div class="progress-value">
					<div>
						80%<br>
						<span>completed</span>
					</div>
				</div>
			</div>
		</div>
		
		
		<div class="col-sm-3 col-md-2">
			<div class="progress" data-percentage="13">
				<span class="progress-left">
					<span class="progress-bar"></span>
				</span>
				<span class="progress-right">
					<span class="progress-bar"></span>
				</span>
				<div class="progress-value">
					<div>
						100%<br>
						<span>completed</span>
					</div>
				</div>
			</div>
		</div>
		
		
			<div class="col-sm-3 col-md-2">
			<div class="progress" data-percentage="20">
				<span class="progress-left">
					<span class="progress-bar"></span>
				</span>
				<span class="progress-right">
					<span class="progress-bar"></span>
				</span>
				<div class="progress-value">
					<div>
						0%<br>
						<span>completed</span>
					</div>
				</div>
			</div>
		</div>
		
	</div>
</div>
</body>

</html>