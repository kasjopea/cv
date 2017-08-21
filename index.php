<html lang="pl">
<head>
	<meta charset="UTF-8">
    <meta name="description" content="FizjoMAT to gabinet rehabilitacji w Warszawie. Świadczymy usługi: rehabilitacji w domu, masażu biurowego, masażu klasycznego.">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aporta</title>
    <link rel="icon" href="img/logoColor.png" type="image/png" sizes="16x16">
     <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,400i,500,700&amp;subset=latin-ext" rel="stylesheet">
     <link href="https://fonts.googleapis.com/css?family=Quicksand:300" rel="stylesheet">
    <link rel="stylesheet" href="vendor/font-awesome.css">
    <link rel="stylesheet" href="vendor/animate.css">
    <link rel="stylesheet" type="text/css" href="style/style.css">

</head>
<body>
	<nav>
		<div>
			Kreator CV <span class="color">>&nbsp</span><span id="choice"></span>
		</div>
		<ul>
			<li>Stwórz CV</li>
			<li>Cośtam</li>
		</ul>
	</nav>
	<aside>
		<ul>
			<li><i class="fa fa-bullseye" aria-hidden="true"></i><span class="elements">Kolorystyka</span></li>
			<li><i class="fa fa-user-o" aria-hidden="true"></i><span class="elements">Dane osobowe</li>
			<li><i class="fa fa-calendar" aria-hidden="true"></i><span class="elements">Doświadczenie</span></li>
			<li><i class="fa fa-graduation-cap" aria-hidden="true"></i><span class="elements">Edukacja</span></li>
			<li><i class="fa fa-diamond" aria-hidden="true"></i><span class="elements">Umiejętności</span></li>
			<li><i class="fa fa-bicycle" aria-hidden="true"></i><span class="elements">Zainteresowania</span></li>
		</ul>
	</aside>
	<main>
		<div class="wrapper" id="data">
		<h2>Dane osobowe</h2>
			<form id="dataForm">
				<div><label for="name">Imię<span class="color">&nbsp*</span></label>
				<input type="text" name="name"/></div>
				<div><label for="surname">Nazwisko<span class="color">&nbsp*</span></label>
				<input type="text" name="surname"/></div>
				<div><label for="name">Zawód<span class="color">&nbsp*</span></label>
				<input type="text" name="profession"/></div>
				<div><label for="name">Adres e-mail<span class="color">&nbsp*</span></label>
				<input type="text" name="email"/></div>
				<div><label for="name">Telefon<span class="color">&nbsp*</span></label>
				<input type="text" name="mobile"/></div>
				<div><label for="name">Data urodzenia<span class="color">&nbsp*</span></label>
				<input type="text" name="dateBirth"/></div>
				<div><label for="name">Ulica<span class="color">&nbsp*</span></label>
				<input type="text" name="street"/></div>
				<div><label for="name">Kod pocztowy<span class="color">&nbsp*</span></label>
				<input type="text" name="postalCode"/></div>
				<div><label for="name">Miasto<span class="color">&nbsp*</span></label>
				<input type="text" name="city"/></div>
			</form>
		</div>
		<div class="wrapper" id="experience">
			<div class="header">
			<h2>Doświadczenie</h2>
			<div>
			<i class="fa fa-arrow-up arrow" aria-hidden="true"></i><i class="fa fa-plus-circle add" aria-hidden="true"></i><i class="fa fa-times-circle delete" aria-hidden="true"></i><i class="fa fa-arrow-down arrow" aria-hidden="true"></i>
			</div>
			</div>
			<form id="experienceForm">
				<div><label for="nameCompany1">Nazwa firmy<span class="color">&nbsp*</span></label>
				<input type="text" name="nameCompany1"/></div>
				<div><label for="position1">Stanowisko<span class="color">&nbsp*</span></label>
				<input type="text" name="position1"/></div>
				<div><label for="from1">Data od<span class="color">&nbsp*</span></label>
				<input type="date" name="from1"/></div>
				<div><label for="to1">Data do<span class="color">&nbsp*</span></label>
				<input type="date" name="to1"/></div>
				<div class="textarea"><label for="responsibilities1">Obowiązki<span class="color">&nbsp*</span></label>
				<input type="textarea" rows=4 name="responsibilities1"/></div>
				<div>
				</div>
			</form>
		</div>
		<div class="wrapper" id="education">
			<div class="header">
			<h2>Wykształcenie</h2>
			<div>
			<i class="fa fa-arrow-up arrow" aria-hidden="true"></i><i class="fa fa-plus-circle add" aria-hidden="true"></i><i class="fa fa-times-circle delete" aria-hidden="true"></i><i class="fa fa-arrow-down arrow" aria-hidden="true"></i>
			</div>
			</div>
			<form id="educationForm">
				<div><label for="nameSchool1">Nazwa szkoły, kierunek<span class="color">&nbsp*</span></label>
				<input type="text" name="nameSchool1"/></div>
				<div><label for="fromSchool1">Data od<span class="color">&nbsp*</span></label>
				<input type="date" name="fromSchool1"/></div>
				<div><label for="toSchool1">Data do<span class="color">&nbsp*</span></label>
				<input type="date" name="toSchool1"/></div>
				<div class="textarea"><label for="achievements1">Osiągnięcia<span class="color">&nbsp*</span></label>
				<input type="textarea" name="achievements1" rows=4/></div>
				<div>
			</form>
		</div>


	</main>
	<!--Dane osobowe-->
	<!--<div>
			<h2>Dane osobowe</h2>
			<form>
				<div><label for="name">Imię<span>*</span></label>
				<input type="text" name="name"/></div>
				<div><label for="surname">Nazwisko<span>*</span></label>
				<input type="text" name="surname"/></div>
				<div><label for="name">Zawód<span>*</span></label>
				<input type="text" name="profession"/></div>
				<div><label for="name">Adres e-mail<span>*</span></label>
				<input type="text" name="email"/></div>
				<div><label for="name">Telefon<span>*</span></label>
				<input type="text" name="mobile"/></div>
				<div><label for="name">Data urodzenia<span>*</span></label>
				<input type="text" name="dateBirth"/></div>
				<div><label for="name">Ulica<span>*</span></label>
				<input type="text" name="street"/></div>
				<div><label for="name">Kod pocztowy<span>*</span></label>
				<input type="text" name="postalCode"/></div>
				<div><label for="name">Miasto<span>*</span></label>
				<input type="text" name="city"/></div>
			</form>
	</div>
-->
	
	<script type="text/javascript" src="vendor/jquery-3.2.0.min.js"></script>
    <script type="text/javascript" src="js/script.js"></script>
</body>
</html>