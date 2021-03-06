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
		<a id="signature" href="index.php">DBrankoviÄ‡</a>
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
				<p>Zovem se Denis BrankoviÄ‡. ZavrÅ¡io sam jednogodiÅ¡nju obuku iz programiranja na ITAcademy u Sarajevu, na smjeru Software Development. Pored programskih jezika
				koje sam nabrojao, nauÄ?io sam razvijati Windows aplikacije koristeÄ‡i Visual Studio okruÅ¾enje, upotrebljavati MS SQL Server i MySQLi. Kurs je takoÄ‘e obuhvatao i
				osnove Jave. Ovaj web sajt je jedan od mojih prvih samostalnih projekata. S obzirom na to da nemam prethodnog radnog iskustva kao programer, Å¾elim da kroz
				nekoliko samostalnih projekata poÄ?nem u praksi primjenjivati nauÄ?eno dok traÅ¾im prvi profesionalni angaÅ¾man.<br> UÅ¡avÅ¡i u svijet programiranja nauÄ?io sam da ono 
				predstavlja kombinaciju kreativnog, analitiÄ?kog i logiÄ?kog naÄ?ina razmiÅ¡ljanja. Svakom problemu se moÅ¾e pristupiti na viÅ¡e naÄ?ina. Jedan od aspekata programiranja
				koji su na mene kroz proces uÄ?enja ostavili najveÄ‡i utisak je objektni model, elegantan naÄ?in programske reprezentacije elemenata realnog svijeta, Ä?ijom primjenom
				se otvara toliko razliÄ?itih moguÄ‡nosti za rjeÅ¡avanje problema. Svaki problem je izazov koji podstiÄ?e na iznalaÅ¾enje najefikasnijeg rjeÅ¡enja, a nivo kreativnosti
				koji programeri pritom ispolje je Ä?esto fascinantan. Upravo to je ono Å¡to me od poÄ?etne zainteresovanosti dovelo do sadaÅ¡njeg entuzijazma i Å¾elje da se potpuno
				posvetim programiranju.</p>
			</div>
			<div id="aboutRight">
				<img id="myPicture" src="sitePictures/me.jpg" alt="myPicture">
			</div>
		</div>
	</div>
	<div id="projects">
		<h2>Moji projekti</h2>
		
		<p>Naravno, jedan od mojih projekata je i ova stranica. Osim vlastitog predstavljanja, cilj je bio primijeniti dio nauÄ?enog, ali u prvom redu, nauÄ?iti neÅ¡to novo. U svakom
		od predstavljenih projekata, ali i u onima koji nisu ovdje spomenuti, nauÄ?io sam neÅ¡to novo ili uvidio neke od greÅ¡aka koje sam radio u ranijim sliÄ?nim situacijama i u tome
		je njihova najveÄ‡a vrijednost.<br>
		Pri izradi ovog sajta nije mi bio primarni cilj da postignem vizuelnu atraktivnost, na primjer postavljanjem efektnih slika koje bi izgledale lijepo, ali bi imale malo veze
		sa mnom. Htio sam da istraÅ¾ujem, eksperimentiÅ¡em i moÅ¾da upotrebim neÅ¡to Å¡to ranije nisam koristio. Na primjer, nauÄ?io sam da je upotrebom JavaScript funkcije setInterval
		moguÄ‡e postiÄ‡i da se tekst sekvencijalno uÄ?itava, Å¡to sam primijenio na poÄ?etku stranice. 
		Eksperimentisao sam sa gradijentima za boju pozadine, kao i sa fontovima koje sam unio sa Google Fonts stranice. NauÄ?io sam kako je putem Window.onscroll 
		dogaÄ‘aja moguÄ‡e postiÄ‡i da se header sakrije kad se stranica skroluje u zadatoj duÅ¾ini.<br>
		Iako za to ne postoje praktiÄ?ni razlozi na ovakvom sajtu, htio sam da upotrebim i PHP i da jedan dio sadrÅ¾aja dinamiÄ?ki uÄ?itam. Iskoristio sam detalje o svojim
		prethodnim radnim mjestima, od njih napravio bazu podataka i sa serverske strane ih uÄ?itao u stranicu. Radi se o linkovima na dnu stranice. Naravno, time nisam postigao
		pravu dinamiku, jer su podaci hard kodirani	u tabeli. Za to bi bilo potrebno kreirati formu za korisniÄ?ki unos podataka, ali neÅ¡to sliÄ?no sam uradio u svojoj drugoj web
		aplikaciji o kojoj se detalji nalaze u tekstu ispod ovog. Klikom na neki od linkova o prethodnim radnim mjestima setuje se vrijednost GET metode i na osnovu nje se
		postavlja pozadinska slika na stranici koja se otvara. Iz baze podataka se takoÄ‘e uÄ?itavaju i tekstovi sa opisima poslova, kao i datumi. Slike, tekstovi i datumi su
		svojstva PHP klase kojom sam mapirao kolone tabele u bazi. <a href="">PHP fajlovi se mogu vidjeti ovdje.</a><br>
		U izradi stranice sam primijenio responsive design i prilagodio je mobilnim ureÄ‘ajima.<br>
		<br><br></p>
		
		<h3 class="projectTitleMob">Hourly Rate</h3>
		
		<p><a href="https://github.com/denisbrankovic/hourlyRate" target="_blank"><img class="projectImages" src="sitePictures/hourlyRate" alt="hourly rate"/></a>
		<b>C# aplikacija "Hourly Rate"</b> izraÄ?unava statistiÄ?ke podatke o gejmerskim rezultatima. U ovom sluÄ?aju, radi se o rezultatima u pokeru. Korisnik unosi rezultate svake
		sesije, a aplikacija generiÅ¡e podatke relevantne za svaki nivo pojedinaÄ?no na kojem je korisnik igrao, na primjer, zaradu po satu (odatle naziv â€žHourly Rateâ€œ), broj odigranih
		dijeljenja po nivoima, broj dobitnih i gubitnih sesija, rezultate individualno po nivoima, ukupni rezultat...<br>
		RaÄ‘ena je u okruÅ¾enju Visual Studio. Za manipulaciju bazom podataka s kojom aplikacija komunicira koriÅ¡ten je MS SQL Server. Kreirao sam klasu Session, koja
		predstavlja objektnu reprezentaciju jedne sesije pokera, ali i klasu za komunikaciju s bazom koju sam nazvao SessionDal. U klasi Session sam implementirao interface
		INotifyPropertyChanged, Å¡to	omoguÄ‡ava obnavljanje podataka u korisniÄ?kom interfejsu u trenutku njihove izmjene. Ovo se odnosi na svojstva klase, ali ne i na listu sesija,
		odnosno listu instanci klase Session. Lista se iz baze prihvata u opservabilnu koliekciju koja podrazumijevano nasljeÄ‘uje interface InotifyCollectionChanged. 
		ZahvaljujuÄ‡i tome, unosom svake nove sesije u listu se takoÄ‘e mogu vidjeti izmjene u listi u trenutku njihovog dogaÄ‘anja. Lista je u korisniÄ?ki interface uÄ?itana
		posredstvom resursa prozora.<br>
		Do pojedinih parametara koje aplikacija izvlaÄ?i iz liste sam dolazio koristeÄ‡i LINQ tehnologiju, odnosno Lambda izraze.<br>
		U izradi aplikacije poÅ¡tovao sam princip razdvajanja sloja koji komunicira s bazom od sloja programske logike, Å¡to je pristup koji omoguÄ‡ava lakÅ¡e odrÅ¾avanje i portabilnost.<br><br><br></p>
		
		<h3 class="projectTitleMob">KladioniÄ?ki rezultati</h3>
		
		<p><a href="http://kladionickirezultati.epizy.com" target="_blank"><img class="projectImages" src="sitePictures/betting" alt="betting"/></a>
		
		<b>Web aplikacija "KladioniÄ?ki rezultati"</b> je prva web aplikacija koju sam samostalno napravio i prva koja je opravdala naziv â€žweb aplikacijaâ€œ tako Å¡to je stvarno,
		konaÄ?no, i postavljena na web. Prvobitno nisam imao namjeru da je navodim ovdje kao svoj projekat, jer je ona nastala kao rezultat jedne stare Å¡ale izmeÄ‘u mog brata i mene.
		Ipak, kasnije sam uvidio da sam u njeno kreiranje uloÅ¾io previÅ¡e vremena, rada i ideje da bih je jednostavno ostavio zaboravljenu. 
		Radi se o tome da on voli da se kladi na sportske rezultate i, kao i svi ostali, da se pohvali kad dobije, ali i da potpuno ignoriÅ¡e sve one dane kad ne dobije. To je Ä?esto
		bio povod â€žraspravaâ€œ izmeÄ‘u nas o tome koliko je on i da li je uopÅ¡te na dobitku, a kao rezultat svega, u jednom trenutku sam mu rekao da Ä‡u, kad postanem programer, napraviti program koji Ä‡e mu sam voditi
		evidenciju o rezultatima.<br>
		Aplikacija na poÄ?etnoj strani prikazuje samo trenutno stanje. Podrazumijeva se da korisnik svaki dan uplati po jednu marku, Å¡to je u viÅ¡e od 90% sluÄ?ajeva taÄ?no. Zato
		program na svakih 24 sata oduzme po jednu marku od ukupnog rezultata. Naravno, aplikacija ne moÅ¾e znati kad je korisnik dobio, pa se od njega ipak oÄ?ekuje da upiÅ¡e dobitak 
		kad se dogodi.<br>
		Ovo sam izveo tako Å¡to sam kreirao klasu Betting koja kao svojstva ima datum, ulog, dnevni rezultat (dobitak ili gubitak) i ukupni rezultat. Napravio sam metodu koja iz baze
		Ä?ita zadnji unos, odnosno zadnju uplatu i izraÄ?unava razliku izmeÄ‘u trenutnog datuma i datuma zadnje upisane uplate. U trenutku slanja http zahtjeva ova metoda while
		petljom unosi po jednu instancu klase Betting u bazu za svaki dan koji je protekao od datuma zadnjeg unosa. Svaka instanca ima daum uveÄ‡an za jedan dan,
		stanje umanjeno za jednu marku i podrazumijevani dnevni ulog od jedne marke. Druga metoda Ä?ita tabelu i za svaki red iz tabele kreira i ispisuje po jedan div element sa
		detaljima dnevnog odigravanja na stranici sa statistikom. Na naslovnoj stranici se prikazuje samo ukupni trenutni rezultat, odnosno stanje.<br>
		Stranici za izmjenu podataka (Admin) se pristupa korisniÄ?kim imenom: alen i passwordom: 0001.
		Ovdje se nalaze Ä?etiri forme putem kojih korisnik moÅ¾e promijeniti dnevni ulog u sluÄ?aju da je taj dan uplata veÄ‡a ili manja od podrazumijevane, unijeti dodatni ulog ako je
		bilo dodatnih uplata, unijeti dobitak i izbrisati zadnji unos ako je napravio neku greÅ¡ku. Forma podatke prenosi POST metodom. Validaciju forme sam uradio u JavaScriptu.<br>
		Sistem za logovanje sam napravio koristeÄ‡i Prepared Statements. Iako sam napravio i stranicu za kreiranje novog profila, na server sam postavio samo stranicu za logovanje,
		zato Å¡to aplikacija podrazumijeva jednog jedinog korisnika. Njegovo korisniÄ?ko ime i password sam hard kodirao u tabeli users u bazi.<br>
		<a href="">Ovdje se nalaze PHP skripte aplikacije.</a><br><br></p>
		
		<h3 class="projectTitleMob">Java File Manager</h3>
		<p><a href=""><img class="projectImages" src="sitePictures/fileManager" alt="file manager"/></a>
		
		<b>"Java File Manager"</b> je mala konzolna aplikacija za manipulaciju fajlovima i folderima na fajl sistemu. Program je ustvari bio zadatak u sklopu predmeta â€žJava Core programiranjeâ€œ
		na ITAcademy, ali predstavlja jednu od prvih aplikacija koje sam potpuno samostalno uradio i zato sam Å¾elio da i ona bude na ovoj listi.<br>
		RaÄ‘ena je u NetBeans okruÅ¾enju. FunkcioniÅ¡e tako Å¡to se poslije pokretanja aplikacije komandom â€žcommandsâ€œ ispisuje lista svih opcija, odnosno komandi, a zatim se izborom
		pojedinih od njih vrÅ¡i manipulacija	fajlovima i folderima, kreiranje, brisanje, iÅ¡Ä?itavanje root foldera ili foldera na korisniÄ?ki zadanoj putanji...
		Java je na smjeru koji sam zavrÅ¡io samo dotaknuta. Fokus je bio na programskim jezicima koje sam spomenuo iznad. U suÅ¡tini, nauÄ?ena je samo sintaksa i osnove objektnog
		programiranja u Javi, ali zbog njene sliÄ?nosti sa jezikom C#, bar u onom dijelu koji je obraÄ‘en, vjerujem da prilagoÄ‘avanje radu u ovom programskom jeziku ne bi
		predstavljalo problem.</p>		
	</div>
	<div id="workHistory">
		<h2 id="workHistoryTitle">Radno iskustvo</h2>
		<p>Moje prethodno radno iskustvo nije vezano za programiranje. Ako bih htio da budem vrlo kreativan, mogao bih da kaÅ¾em da sam na nekim od ranijih radnih mjesta usavrÅ¡io 
		engleski jezik i da mi je to kasnije pomoglo u lakÅ¡em uÄ?enju programskih jezika i tu negdje bi se zavrÅ¡ila svaka veza izmeÄ‘u mog prethodnog iskustva i onog koje Ä‡u tek steÄ‡i. 
		PoÄ?eo sam raditi odmah po zavrÅ¡etku Å¡kolovanja i promijenio priliÄ?no veliki broj poslova, najrazliÄ?itijih, koji, osim Å¡to nemaju veze s programiranjem, nisu ni iz podruÄ?ja
		mog formalnog obrazovanja. To moju radnu biografiju Ä?ini pomalo Å¾ovopisnom, ali ona vjerovatno nije neuobiÄ?ajena za sredinu i okolnosti u kojima Å¾ivimo. <br>
		Ako bih htio da spomenem neke od osobina koje me karakteriÅ¡u a u kontekstu onog Å¡to sam radio, rekao bih da su me godine rada u meÄ‘unarodnim institucijama oblikovale na jedan
		naÄ?in, a godine bavljenja gejmingom na drugi. Rad u sistemu sa hijerarhijom odluÄ?ivanja nauÄ?io me kako da budem dio cjeline, obavljam svoj dio posla, ali i saraÄ‘uem sa
		kolegama i usavrÅ¡im interpersonalne vjeÅ¡tine, pogotovo u internacionalnoj i multikulturalnoj sredini, u kakvoj sam proveo 6 godina. Godine rada u trgovini nisu bile niÅ¡ta
		manje korisne u tom smislu. S druge strane, godine bavljenja gejmingom su me nauÄ?ile samodisciplini koja je neophodna u takvom poslu. Izgradile svijest o tome da je potrebno
		da, bez obzira na to Å¡to imam moguÄ‡nost da radno vrijeme prilagodim svojim potrebama i bez obzira na Ä?injenicu da ne odgovaram nikom osim samom sebi, svakodnevno odradim
		potreban broj radnih sati igranja, ali i potreban broj sati analiziranja nivoa vlastite igre, igre protivnika, studiranja teoretskog dijela i uviÄ‘anja i ispravljanja vlastitih
		greÅ¡aka. Gejming zahtijeva samodisciplinu, mentalnu stabilnost i volju za uÄ?enjem, ali i sposobnost prilagoÄ‘avanja okolnostima koje se konstatntno mijenjaju.<br>
		Nadam se da sam iz oba svijeta izvukao najbolje.<br>
		U CV-u se veÄ‡ nalazi lista svih poslova koje sam ranije radio. Ovdje sam o svakom od njih napisao samo par reÄ?enica koje na pojedinim mjestima moÅ¾da i liÄ?e na opis posla,
		na drugim mjestima su pogled iz nekog liÄ?nog ugla, obiÄ?no samo o ponekom detalju koji mi je u trenutku pao na pamet, ali ustvari su samo nastojanje da sajtu dam
		formu i sadrÅ¾aj, nego da ozbiljno opisujem zanimanja koja nisu relevantna za podruÄ?je mog danaÅ¡njeg interesovanja.</p>
	</div>
		<div id="jobsWrapper">
			<?php connection::getAllJobs("workHistory", "jobHistory"); ?> 
		</div>
		<footer>
			<p>DBrankoviÄ‡</p>
		</footer>
</div>
	<script src="frontPage.js">
	</script>
</body>
</html>