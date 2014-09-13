<html>
<head>
	<title>TOP</title>
	<link rel="stylesheet" href="css/normalize.css">
	<link rel="stylesheet" href="css/foundation.css">
	<link rel="stylesheet" href="css/foundation.min.css">
	<link rel="stylesheet" href="foundation-icons/foundation-icons.css">
	<script src="js/vendor/modernizr.js"></script>
	<script src="js/vendor/jquery.js"></script>
	<script src="js/vendor/fastclick.js"></script>
	<script src="js/foundation.min.js"></script>
</head>
<style type="text/css">
	/* Styles for Calendar */
	.calendar {
		padding-bottom: 26px;
		margin-top: 30px;
		width: 100%;
		display: block;
	}
	.calendar thead {
		display: none;
	}
	@media only screen and (min-width: 767px) {
		.calendar thead {
			text-align: center;
			display: block;
		}
	}
	.calendar tbody td {
		display: block;
		clear: both;
	}
	@media only screen and (min-width: 767px) {
		.calendar tbody td {
			display: table-cell;
			width: 150px;
			height: 150px;
			position: relative;
		}
	}
	.calendar tbody td span {
		position: absolute;
		top: 5px;
		left: 5px;
	}
	.calendar .day {
		display: block;
		float: left;
		width: 20px;
		margin-right: 10px;
	}
	.calendar .inactive {
		color: #ccc;
	}
	.calendar .event {
		float: left;
		border-radius: 3px;
		display: block;
		padding: 2px;
		font-size: 0.9em;
		cursor: pointer;
		position: relative;
		margin-top: 18px;
		margin-bottom: -12px;
	}
	.calendar .event.blue {
		background: #3a87ad;
	}
	.calendar .event.yellow {
		background: #f9c846;
	}
	.calendar .event.green {
		background: #a7d85b;
	}

/*  ======================================
displaying for small 
======================================*/
@media only screen and (max-width: 767px) {
	.calendar tbody td {
		width: 100% !important;
	}
	.calendar tbody td span {
		position: relative;
	}
	.calendar .event {
		float: none;
		margin-top: 5px;
		position: relative;
		margin-left: 15px;
		margin-bottom: 0;
	}
	.calendar tbody tr, .calendar tbody {
		width: 100%;
		display: block;
	}
}
@media only screen and (min-width: 767px) {
	.event {
		width: 100%;
		display: block;
	}
}
li{
	list-style-type:none;
}
.exp-timeline {
	margin-top: 100px;
}
.exp-timeline ul.items {
	margin-left: 0;
}
.exp-timeline ul.items li {
	display: block;
	margin-bottom: 2.5rem;
}
.exp-timeline ul.items li .active {
	background: #008cba;
	height: 0.625rem;
	float: left;
	position: relative;
}
.exp-timeline ul.items li .start {
	height: 1.25rem;
	width: 1.25rem;
	position: absolute;
	left: 0;
	background: #008cba;
	border-radius: 50%;
	top: -0.3125rem;
	left: -0.625rem;
}
.exp-timeline ul.items li .finish {
	height: 1.25rem;
	width: 1.25rem;
	position: absolute;
	right: 0;
	background: #008cba;
	border-radius: 50%;
	top: -0.3125rem;
	right: -0.625rem;
}
.exp-timeline ul.items li .inactive {
	background: #eee;
	height: 0.625rem;
	float: left;
}

ul.dates {
	background: #008cba;
	width: 100%;
	height: 2.5rem;
	margin: 0;
}
ul.dates li {
	color: #fff;
	margin: 0.625rem 0 0 0;
	width: 20%;
	font-weight: bold;
	font-size: 0.8125rem;
	text-align: center;
}
</style>
<body>
	<div class="row file-list">
		<div class="small-6 columns">
			<ul style="list-style-type: none;">
				<li><i class="fi-folder"></i>&nbsp;&nbsp;Folder</li>
				<hr class="folder">
				<li><i class="fi-folder"></i>&nbsp;&nbsp;Folder
					<ul>
						<li><i class="fi-folder"></i>&nbsp;&nbsp;Subfolder</li>
						<ul>
							<li><i class="fi-page"></i>&nbsp;&nbsp;File</li>
							<li><i class="fi-page"></i>&nbsp;&nbsp;File</li>
						</ul>
						<hr class="subfolder">
						<li><i class="fi-page"></i>&nbsp;&nbsp;File</li>
					</ul>
				</li>
				<hr class="folder">
				<li><i class="fi-folder"></i>&nbsp;&nbsp;Folder
					<ul>
						<li><i class="fi-page"></i>&nbsp;&nbsp;File</li>
						<li><i class="fi-page"></i>&nbsp;&nbsp;File</li>
						<li><i class="fi-page"></i>&nbsp;&nbsp;File</li>
					</ul>
				</li>
				<hr class="folder">
				<li><i class="fi-page"></i>&nbsp;&nbsp;File</li>
				<li><i class="fi-page"></i>&nbsp;&nbsp;File</li>
				<li><i class="fi-page"></i>&nbsp;&nbsp;File</li>
			</ul>
		</div>
		<div class="small-6 columns">
			<ul>
				<li><i class="fi-torso"></i>&nbsp;&nbsp;Single</li>
				<hr class="folder">
				<ul>
					<li><i class="fi-torso-business"></i>&nbsp;&nbsp;Business
						<ul>
							<li><i class="fi-dollar"></i>&nbsp;&nbsp;Dollars</li>
							<li><i class="fi-euro"></i>&nbsp;&nbsp;Euros</li>
							<li><i class="fi-yen"></i>&nbsp;&nbsp;Yen</li>
						</ul>
					</li>
				</ul>
				<hr class="folder">
				<li><i class="fi-torsos"></i>&nbsp;&nbsp;Couple</li>
				<ul>
					<li><i class="fi-laptop"></i>&nbsp;&nbsp;OS
						<ul>
							<li><i class="fi-social-windows"></i>&nbsp;&nbsp;Windows</li>
							<li><i class="fi-social-apple"></i>&nbsp;&nbsp;Apple</li>
						</ul>
					</li>
					<hr class="subfolder">
					<li><i class="fi-megaphone"></i>&nbsp;&nbsp;Social Networks
						<ul>
							<li><i class="fi-social-twitter"></i>&nbsp;&nbsp;Twitter</li>
							<li><i class="fi-social-tumblr"></i>&nbsp;&nbsp;Tumblr</li>
							<li><i class="fi-social-facebook"></i>&nbsp;&nbsp;Facebook</li>
						</ul>
					</li>
				</ul>
				<hr class="folder">
				<li><i class="fi-torsos-all"></i>&nbsp;&nbsp;Group
					<ul>
						<li><i class="fi-graph-trend"></i>&nbsp;&nbsp;Line Chart</li>
						<li><i class="fi-graph-bar"></i>&nbsp;&nbsp;Bar Graph</li>
						<li><i class="fi-graph-pie"></i>&nbsp;&nbsp;Pie Chart</li>
					</ul>
				</li>
				<hr class="folder">
			</ul>
		</div>
		<div class="row calendar">
			<div class=" large-10 columns">

				<table class="calendar">

					<thead>
						<tr>
							<th width="300">Sun</th>
							<th width="300">Mon</th>
							<th width="300">Tue</th>
							<th width="300">Wed</th>
							<th width="300">Thu</th>
							<th width="300">Fri</th>
							<th width="300">Sat</th>
						</tr>
					</thead>

					<tbody>
						<tr>
							<td class="inactive">
								<div>
									<span class="day">29</span>
								</div>
							</td>
							<td class="inactive">
								<div>
									<span class="day">30</span>
								</div>
							</td>
							<td class="inactive">
								<div>
									<span class="day">31</span>
								</div>
							</td>
							<td>
								<div>
									<span class="day">1</span>
									<span class="event green">Team1 vs Team2</span>
									<span class="event yellow">Practice</span>
									<span class="event blue">Team1 vs Team2</span>
								</div>
							</td>
							<td>
								<div>
									<span class="day">2</span>
								</div>
							</td>
							<td>
								<div>
									<span class="day">3</span>
									<span class="event yellow">Team1 vs Team2</span>
								</div>
							</td>
							<td>
								<div>
									<span class="day">4</span>
								</div>
							</td>
						</tr>
						<tr>
							<td>
								<div>
									<span class="day">5</span>
								</div>
							</td>
							<td>
								<div>
									<span class="day">6</span>
								</div>
							</td>
							<td>
								<div>
									<span class="day">7</span>
									<span class="event yellow">Practice</span>
								</div>
							</td>
							<td>
								<div>
									<span class="day">8</span>
								</div>
							</td>
							<td>
								<div>
									<span class="day">9</span>
									<span class="event yellow">Team1 vs Team2</span>
								</div>
							</td>
							<td>
								<div>
									<span class="day">10</span>
								</div>
							</td>
							<td>
								<div>
									<span class="day">11</span>
								</div>
							</td>
						</tr>
						<tr>
							<td>
								<div>
									<span class="day">12</span>
								</div>
							</td>
							<td>
								<div>
									<span class="day">13</span>
								</div>
							</td>
							<td>
								<div>
									<span class="day">14</span>
								</div>
							</td>
							<td>
								<div>
									<span class="day">15</span>
									<span class="event yellow">Team1 vs Team2</span>
									<span class="event blue">Practice</span>
								</div>
							</td>
							<td>
								<div>
									<span class="day">16</span>
								</div>
							</td>
							<td>
								<div>
									<span class="day">17</span>
								</div>
							</td>
							<td>
								<div>
									<span class="day">18</span>
									<span class="event blue">Team1 vs Team2</span>
								</div>
							</td>
						</tr>
						<tr>
							<td>
								<div>
									<span class="day">19</span>
								</div>
							</td>
							<td>
								<div>
									<span class="day">20</span>
								</div>
							</td>
							<td>
								<div>
									<span class="day">21</span>
								</div>
							</td>
							<td>
								<div>
									<span class="day">22</span>
								</div>
							</td>
							<td>
								<div>
									<span class="day">23</span>
								</div>
							</td>
							<td>
								<div>
									<span class="day">24</span>
									<span class="event green">Team1 vs Team2</span>
								</div>
							</td>
							<td>
								<div>
									<span class="day">25</span>
									<span class="event green">Practice</span>
								</div>
							</td>
						</tr>
						<tr>
							<td>
								<div>
									<span class="day">26</span>
								</div>
							</td>
							<td>
								<div>
									<span class="day">27</span>
								</div>
							</td>
							<td>
								<div>
									<span class="day">28</span>
								</div>
							</td>
							<td>
								<div>
									<span class="day">29</span>
								</div>
							</td>
							<td>
								<div>
									<span class="day">30</span>
								</div>
							</td>
							<td class="inactive">
								<div>
									<span class="day">1</span>
								</div>
							</td>
							<td class="inactive">
								<div>
									<span class="day">2</span>
								</div>
							</td>
						</tr>
					</tbody>

				</table>

			</div>
		</div>  
	</div>   
	<div class="row">
		<div class="large-6 columns small-centered">
			<div class="exp-timeline">
				<div class="container">
					<ul class="items">
						<li>
							<h5>One</h5>
							<div class="active" style="width: 30%">
								<div class="finish"></div>
							</div>
							<div class="inactive" style="width: 70%"></div>
						</li>
						<li>
							<h5>Two</h5>
							<div class="inactive" style="width: 30%"></div>
							<div class="active" style="width: 70%">
								<div class="start"></div>
							</div>
						</li>
						<li>
							<h5>Three</h5>
							<div class="inactive" style="width: 90%"></div>
							<div class="active" style="width: 10%">
								<div class="start"></div>
							</div>
						</li>
					</ul>
				</div>
				<ul class="inline-list dates">
					<li>2014</li>
					<li>2013</li>
					<li>2012</li>
					<li>2011</li>
					<li>2010</li>
				</ul>  
			</div>
		</div>
	</div>
	<script>
		$(document).foundation();
	</script>
</body>
</html>