<html>
<head>
	<title>Teste com o fundation</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<link rel="stylesheet" href="css/normalize.css">
	<link rel="stylesheet" href="css/foundation.css">
	<link rel="stylesheet" href="css/foundation.min.css">
</head>
<body>
    <script src="js/vendor/jquery.js"></script>
    <script src="js/foundation.min.js"></script>
	<script src="js/foundation/foundation.js"></script>
	<script src="js/foundation/foundation.topbar.js"></script>

	<script>
		$(document).foundation();
	</script>
	<nav class="top-bar" data-topbar role="navigation">
		<ul class="title-area">
			<li class="name">
				<h1><a href="#">My Site</a></h1>
			</li>
			<!-- Remove the class "menu-icon" to get rid of menu icon. Take out "Menu" to just have icon alone -->
			<li class="toggle-topbar menu-icon"><a href="#"><span>Menu</span></a></li>
		</ul>

		<section class="top-bar-section">
			<!-- Right Nav Section -->
			<ul class="right">
				<li class="active"><a href="#">Right Button Active</a></li>
				<li class="has-dropdown">
					<a href="#">Right Button Dropdown</a>
					<ul class="dropdown">
						<li><a href="#">First link in dropdown</a></li>
						<li class="active"><a href="#">Active link in dropdown</a></li>
					</ul>
				</li>
			</ul>

			<!-- Left Nav Section -->
			<ul class="left">
				<li><a href="#">Left Nav Button</a></li>
			</ul>
		</section>
	</nav>

	<div class="small-6 columns">
		<a href="#" class="button expand">BOTAO</a>
	</div>
	<div class="small-6 columns">
		<a href="#" class="button success expand">SUCESSO</a>
	</div>
	<div class="small-6 columns">
		<a href="#" class="button radius expand">Canto arredondado</a>
	</div>
	<div class="small-6 columns">
		<a href="#" class="button radius alert expand">Canto arredondado</a>
	</div>
	<div class="small-6 columns">
		<a href="#" class="button round alert expand">Canto arredondado</a>
	</div>
	<div class="small-6 columns">
		<a href="#" class="button round success expand">Canto arredondado</a>
	</div>

	<div class="large-12 columns">
	<input type="text" name="teste" id="teste">
	</div>
	<div class="small-6 columns pull-left">
	<input type="text" name="teste" id="teste">
	</div>
</body>
</html>