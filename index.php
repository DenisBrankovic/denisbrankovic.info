<?php
	include "connection.php"; 
?>
<!DOCTYPE html>
<html lang="bs">
<head>
	<meta charset="utf-8">
	
	<title>Denis</title>

	<meta name="viewport" content="width=device-width, initial-scale = 1.0">

	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Akronim&family=Comfortaa:wght@300&family=Mr+Dafoe&family=Quicksand:wght@300&family=Satisfy&family=Special+Elite&display=swap" rel="stylesheet"> 
		
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Libre+Franklin:wght@300&display=swap" rel="stylesheet">

	
	<link rel="stylesheet" href="styles.css">
	<style>
		
	</style>
</head>
<body>
	<header>
			<div id="toggleMenuWrapper">
				<input type="checkbox" id="toggleMenu">
				<div id="first" style="height: 2px; margin-bottom: 2px"></div>
				<div id="second" style="height: 2px; margin-bottom: 2px"></div>
				<div id="third" style="height: 2px"></div>
			</div>
			<ul id="contactMob" class="contactMobClosed">
				<li><a href="english.php"><img class="englishLinkHeader" style="padding: 0" src="sitePictures/english.png" alt="english"/></a></li>
				<li>+387 66 247 492</li>
				<li>denis.brankovic@gmail.com</li>
				<li>linkedin.com/in/denis-brankovic</li>
				<li><a href="CV_Download.php?file=denis_brankovic.pdf">CV Download</a></li>
				<li><a href="CV_Download.php?file=denis_brankovic_english.pdf">CV English Download</a></li>
			</ul>
		<a id="signature" href="index.php">DBranković</a>
		<a class="header" href="CV_Download.php?file=denis_brankovic.pdf">CV</a>
		<a class="header" href="CV_Download.php?file=denis_brankovic_eng.pdf">CV English</a>
		<div id="contactWrapper">
			<h4 id="contactLink" class="header">Contact</h4>
			<div id="ulWrapper">
				<ul class="listClosed" id="contact">
					<li>+387 66 247 492</li>
					<li>denis.brankovic@gmail.com</li>
					<li>linkedin.com/in/denis-brankovic</li>
				</ul>
			</div>
		</div>
		<a class="header" href="english.php"><img class="englishLinkHeader" src="sitePictures/english.png" alt="english"/></a>
	</header>
	<div id="languagesWrapper">
		<p class="language">C#</p>
		<p class="language">SQL</p>
		<p class="language">HTML5</p>
		<p class="language">CSS3</p>
		<p class="language">JavaScript</p>
		<p class="language">PHP</p>
	</div>
<div id="wrap">
	<div id="about">
		<h2 id="aboutTitle">O Denisu</h2>
		<div id="aboutInner">
			<div id="aboutLeft">
				<p>Zovem se Denis Branković. Završio sam jednogodišnju obuku iz programiranja na ITAcademy u Sarajevu, na smjeru Software Development. Pored programskih jezika
				koje sam nabrojao, naučio sam razvijati Windows aplikacije koristeći Visual Studio okruženje, upotrebljavati MS SQL Server i MySQLi. Kurs je takođe obuhvatao i
				osnove Jave. Ovaj web sajt je jedan od mojih prvih samostalnih projekata. S obzirom na to da nemam prethodnog radnog iskustva kao programer, želim da kroz
				nekoliko samostalnih projekata počnem u praksi primjenjivati naučeno dok tražim prvi profesionalni angažman.<br> Ušavši u svijet programiranja naučio sam da ono 
				predstavlja kombinaciju kreativnog, analitičkog i logičkog načina razmišljanja. Svakom problemu se može pristupiti na više načina. Jedan od aspekata programiranja
				koji su na mene kroz proces učenja ostavili najveći utisak je objektni model, elegantan način programske reprezentacije elemenata realnog svijeta, čijom primjenom
				se otvara toliko različitih mogućnosti za rješavanje problema. Svaki problem je izazov koji podstiče na iznalaženje najefikasnijeg rješenja, a nivo kreativnosti
				koji programeri pritom ispolje je često fascinantan. Upravo to je ono što me od početne zainteresovanosti dovelo do sadašnjeg entuzijazma i želje da se potpuno
				posvetim programiranju.</p>
			</div>
			<div id="aboutRight">
				<img id="myPicture" src="sitePictures/me.jpg" alt="myPicture">
			</div>
		</div>
	</div>
	<div id="projects">
		<h2>Moji projekti</h2>
		
		<p>Naravno, jedan od mojih projekata je i ova stranica. Osim vlastitog predstavljanja, cilj je bio primijeniti dio naučenog, ali u prvom redu, naučiti nešto novo. U svakom
		od predstavljenih projekata, ali i u onima koji nisu ovdje spomenuti, naučio sam nešto novo ili uvidio neke od grešaka koje sam radio u ranijim sličnim situacijama i u tome
		je njihova najveća vrijednost.<br>
		Pri izradi ovog sajta nije mi bio primarni cilj da postignem vizuelnu atraktivnost, na primjer postavljanjem efektnih slika koje bi izgledale lijepo, ali bi imale malo veze
		sa mnom. Htio sam da istražujem, eksperimentišem i možda upotrebim nešto što ranije nisam koristio. Na primjer, naučio sam da je upotrebom JavaScript funkcije setInterval
		moguće postići da se tekst sekvencijalno učitava, što sam primijenio na početku stranice. 
		Eksperimentisao sam sa gradijentima za boju pozadine, kao i sa fontovima koje sam unio sa Google Fonts stranice. Naučio sam kako je putem Window.onscroll 
		događaja moguće postići da se header sakrije kad se stranica skroluje u zadatoj dužini.<br>
		Iako za to ne postoje praktični razlozi na ovakvom sajtu, htio sam da upotrebim i PHP i da jedan dio sadržaja dinamički učitam. Iskoristio sam detalje o svojim
		prethodnim radnim mjestima, od njih napravio bazu podataka i sa serverske strane ih učitao u stranicu. Radi se o linkovima na dnu stranice. Naravno, time nisam postigao
		pravu dinamiku, jer su podaci hard kodirani	u tabeli. Za to bi bilo potrebno kreirati formu za korisnički unos podataka, ali nešto slično sam uradio u svojoj drugoj web
		aplikaciji o kojoj se detalji nalaze u tekstu ispod ovog. Klikom na neki od linkova o prethodnim radnim mjestima setuje se vrijednost GET metode i na osnovu nje se
		postavlja pozadinska slika na stranici koja se otvara. Iz baze podataka se takođe učitavaju i tekstovi sa opisima poslova, kao i datumi. Slike, tekstovi i datumi su
		svojstva PHP klase kojom sam mapirao kolone tabele u bazi. <a href="">PHP fajlovi se mogu vidjeti ovdje.</a><br>
		U izradi stranice sam primijenio responsive design i prilagodio je mobilnim uređajima.<br>
		<br><br></p>
		
		<h3 class="projectTitleMob">Hourly Rate</h3>
		
		<p><a href="https://github.com/denisbrankovic/hourlyRate" target="_blank"><img class="projectImages" src="sitePictures/hourlyRate" alt="hourly rate"/></a>
		<b>C# aplikacija "Hourly Rate"</b> izračunava statističke podatke o gejmerskim rezultatima. U ovom slučaju, radi se o rezultatima u pokeru. Korisnik unosi rezultate svake
		sesije, a aplikacija generiše podatke relevantne za svaki nivo pojedinačno na kojem je korisnik igrao, na primjer, zaradu po satu (odatle naziv „Hourly Rate“), broj odigranih
		dijeljenja po nivoima, broj dobitnih i gubitnih sesija, rezultate individualno po nivoima, ukupni rezultat...<br>
		Rađena je u okruženju Visual Studio. Za manipulaciju bazom podataka s kojom aplikacija komunicira korišten je MS SQL Server. Kreirao sam klasu Session, koja
		predstavlja objektnu reprezentaciju jedne sesije pokera, ali i klasu za komunikaciju s bazom koju sam nazvao SessionDal. U klasi Session sam implementirao interface
		INotifyPropertyChanged, što	omogućava obnavljanje podataka u korisničkom interfejsu u trenutku njihove izmjene. Ovo se odnosi na svojstva klase, ali ne i na listu sesija,
		odnosno listu instanci klase Session. Lista se iz baze prihvata u opservabilnu koliekciju koja podrazumijevano nasljeđuje interface InotifyCollectionChanged. 
		Zahvaljujući tome, unosom svake nove sesije u listu se takođe mogu vidjeti izmjene u listi u trenutku njihovog događanja. Lista je u korisnički interface učitana
		posredstvom resursa prozora.<br>
		Do pojedinih parametara koje aplikacija izvlači iz liste sam dolazio koristeći LINQ tehnologiju, odnosno Lambda izraze.<br>
		U izradi aplikacije poštovao sam princip razdvajanja sloja koji komunicira s bazom od sloja programske logike, što je pristup koji omogućava lakše održavanje i portabilnost.<br><br><br></p>
		
		<h3 class="projectTitleMob">Kladionički rezultati</h3>
		
		<p><a href="http://kladionickirezultati.epizy.com" target="_blank"><img class="projectImages" src="sitePictures/betting" alt="betting"/></a>
		
		<b>Web aplikacija "Kladionički rezultati"</b> je prva web aplikacija koju sam samostalno napravio i prva koja je opravdala naziv „web aplikacija“ tako što je stvarno,
		konačno, i postavljena na web. Prvobitno nisam imao namjeru da je navodim ovdje kao svoj projekat, jer je ona nastala kao rezultat jedne stare šale između mog brata i mene.
		Ipak, kasnije sam uvidio da sam u njeno kreiranje uložio previše vremena, rada i ideje da bih je jednostavno ostavio zaboravljenu. 
		Radi se o tome da on voli da se kladi na sportske rezultate i, kao i svi ostali, da se pohvali kad dobije, ali i da potpuno ignoriše sve one dane kad ne dobije. To je često
		bio povod „rasprava“ između nas o tome koliko je on i da li je uopšte na dobitku, a kao rezultat svega, u jednom trenutku sam mu rekao da ću, kad postanem programer, napraviti program koji će mu sam voditi
		evidenciju o rezultatima.<br>
		Aplikacija na početnoj strani prikazuje samo trenutno stanje. Podrazumijeva se da korisnik svaki dan uplati po jednu marku, što je u više od 90% slučajeva tačno. Zato
		program na svakih 24 sata oduzme po jednu marku od ukupnog rezultata. Naravno, aplikacija ne može znati kad je korisnik dobio, pa se od njega ipak očekuje da upiše dobitak 
		kad se dogodi.<br>
		Ovo sam izveo tako što sam kreirao klasu Betting koja kao svojstva ima datum, ulog, dnevni rezultat (dobitak ili gubitak) i ukupni rezultat. Napravio sam metodu koja iz baze
		čita zadnji unos, odnosno zadnju uplatu i izračunava razliku između trenutnog datuma i datuma zadnje upisane uplate. U trenutku slanja http zahtjeva ova metoda while
		petljom unosi po jednu instancu klase Betting u bazu za svaki dan koji je protekao od datuma zadnjeg unosa. Svaka instanca ima daum uvećan za jedan dan,
		stanje umanjeno za jednu marku i podrazumijevani dnevni ulog od jedne marke. Druga metoda čita tabelu i za svaki red iz tabele kreira i ispisuje po jedan div element sa
		detaljima dnevnog odigravanja na stranici sa statistikom. Na naslovnoj stranici se prikazuje samo ukupni trenutni rezultat, odnosno stanje.<br>
		Stranici za izmjenu podataka (Admin) se pristupa korisničkim imenom: alen i passwordom: 0001.
		Ovdje se nalaze četiri forme putem kojih korisnik može promijeniti dnevni ulog u slučaju da je taj dan uplata veća ili manja od podrazumijevane, unijeti dodatni ulog ako je
		bilo dodatnih uplata, unijeti dobitak i izbrisati zadnji unos ako je napravio neku grešku. Forma podatke prenosi POST metodom. Validaciju forme sam uradio u JavaScriptu.<br>
		Sistem za logovanje sam napravio koristeći Prepared Statements. Iako sam napravio i stranicu za kreiranje novog profila, na server sam postavio samo stranicu za logovanje,
		zato što aplikacija podrazumijeva jednog jedinog korisnika. Njegovo korisničko ime i password sam hard kodirao u tabeli users u bazi.<br>
		<a href="">Ovdje se nalaze PHP skripte aplikacije.</a><br><br></p>
		
		<h3 class="projectTitleMob">Java File Manager</h3>
		<p><a href=""><img class="projectImages" src="sitePictures/fileManager" alt="file manager"/></a>
		
		<b>"Java File Manager"</b> je mala konzolna aplikacija za manipulaciju fajlovima i folderima na fajl sistemu. Program je ustvari bio zadatak u sklopu predmeta „Java Core programiranje“
		na ITAcademy, ali predstavlja jednu od prvih aplikacija koje sam potpuno samostalno uradio i zato sam želio da i ona bude na ovoj listi.<br>
		Rađena je u NetBeans okruženju. Funkcioniše tako što se poslije pokretanja aplikacije komandom „commands“ ispisuje lista svih opcija, odnosno komandi, a zatim se izborom
		pojedinih od njih vrši manipulacija	fajlovima i folderima, kreiranje, brisanje, iščitavanje root foldera ili foldera na korisnički zadanoj putanji...
		Java je na smjeru koji sam završio samo dotaknuta. Fokus je bio na programskim jezicima koje sam spomenuo iznad. U suštini, naučena je samo sintaksa i osnove objektnog
		programiranja u Javi, ali zbog njene sličnosti sa jezikom C#, bar u onom dijelu koji je obrađen, vjerujem da prilagođavanje radu u ovom programskom jeziku ne bi
		predstavljalo problem.</p>		
	</div>
	<div id="workHistory">
		<h2 id="workHistoryTitle">Radno iskustvo</h2>
		<p>Moje prethodno radno iskustvo nije vezano za programiranje. Ako bih htio da budem vrlo kreativan, mogao bih da kažem da sam na nekim od ranijih radnih mjesta usavršio 
		engleski jezik i da mi je to kasnije pomoglo u lakšem učenju programskih jezika i tu negdje bi se završila svaka veza između mog prethodnog iskustva i onog koje ću tek steći. 
		Počeo sam raditi odmah po završetku školovanja i promijenio prilično veliki broj poslova, najrazličitijih, koji, osim što nemaju veze s programiranjem, nisu ni iz područja
		mog formalnog obrazovanja. To moju radnu biografiju čini pomalo žovopisnom, ali ona vjerovatno nije neuobičajena za sredinu i okolnosti u kojima živimo. <br>
		Ako bih htio da spomenem neke od osobina koje me karakterišu a u kontekstu onog što sam radio, rekao bih da su me godine rada u međunarodnim institucijama oblikovale na jedan
		način, a godine bavljenja gejmingom na drugi. Rad u sistemu sa hijerarhijom odlučivanja naučio me kako da budem dio cjeline, obavljam svoj dio posla, ali i sarađuem sa
		kolegama i usavršim interpersonalne vještine, pogotovo u internacionalnoj i multikulturalnoj sredini, u kakvoj sam proveo 6 godina. Godine rada u trgovini nisu bile ništa
		manje korisne u tom smislu. S druge strane, godine bavljenja gejmingom su me naučile samodisciplini koja je neophodna u takvom poslu. Izgradile svijest o tome da je potrebno
		da, bez obzira na to što imam mogućnost da radno vrijeme prilagodim svojim potrebama i bez obzira na činjenicu da ne odgovaram nikom osim samom sebi, svakodnevno odradim
		potreban broj radnih sati igranja, ali i potreban broj sati analiziranja nivoa vlastite igre, igre protivnika, studiranja teoretskog dijela i uviđanja i ispravljanja vlastitih
		grešaka. Gejming zahtijeva samodisciplinu, mentalnu stabilnost i volju za učenjem, ali i sposobnost prilagođavanja okolnostima koje se konstatntno mijenjaju.<br>
		Nadam se da sam iz oba svijeta izvukao najbolje.<br>
		U CV-u se već nalazi lista svih poslova koje sam ranije radio. Ovdje sam o svakom od njih napisao samo par rečenica koje na pojedinim mjestima možda i liče na opis posla,
		na drugim mjestima su pogled iz nekog ličnog ugla, obično samo o ponekom detalju koji mi je u trenutku pao na pamet, ali ustvari su samo nastojanje da sajtu dam
		formu i sadržaj, nego da ozbiljno opisujem zanimanja koja nisu relevantna za područje mog današnjeg interesovanja.</p>
	</div>
		<div id="jobsWrapper">
			<?php connection::getAllJobs("workHistory", "jobHistory"); ?> 
		</div>
		<footer>
			<p>DBranković</p>
		</footer>
</div>
	<script src="frontPage.js">
	</script>
</body>
</html>