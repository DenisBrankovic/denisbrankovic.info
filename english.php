<?php
	include "connection.php"; 
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	
	<title>Site three</title>

	<meta name="viewport" content="width=device-width, initial-scale = 1.0">
	
	<link rel="stylesheet" href="styles.css">
	
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Akronim&family=Comfortaa:wght@300&family=Mr+Dafoe&family=Quicksand:wght@300&family=Satisfy&family=Special+Elite&display=swap" rel="stylesheet"> 
	
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Libre+Franklin:wght@300&display=swap" rel="stylesheet">
		
<style type="text/css">
	
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
				<li><a href="index.php"><img class="englishLinkHeader" style="padding: 0" src="sitePictures/bosnian.png" alt="english"/></a></li>
				<li>+387 66 247 492</li>
				<li>denis.brankovic@gmail.com</li>
				<li>linkedin.com/in/denis-brankovic</li>
				<li><a href="CV_Download.php?file=denis_brankovic.pdf">CV Download</a></li>
				<li><a href="CV_Download.php?file=denis_brankovic_eng.pdf">CV English Download</a></li>
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
					<li style="font-size: 85%">linkedin.com/in/denis-brankovic</li>
				</ul>
			</div>
		</div>
		<a class="header" href="index.php"><img class="englishLinkHeader" src="sitePictures/bosnian.png" alt="english"/></a>
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
		<h2 id="aboutTitle">About Denis</h2>
		<div id="aboutInner">
			<div id="aboutLeft">
				<p>My name is Denis Branković. I completed a one year Software Development training course at ITAcademy in Sarajevo. Besides the programming languages I mentioned
				above, I learned developing Windows applications in Visual Studio environment, MS SQL Server and MySQLi. The course also included an introduction to Java. This web
				site is one of my first projects. While looking for the first professional engagement I am gaining my first practical experience through developing several
				independent projects of my own.<br>
				Entering the world of programming I have learned that it’s a combination of creative, analytical and logical thinking. Every problem can be approached in more than
				one way. One of the aspects of programming that made an impression on me is the object model, an elegant way of representing the elements
				of the real world that creates different options for solving problems. Every problem can be solved in several ways, but the  challenge is in finding the most
				efficient solution and the level of creativity that programmers express in those solutions is often fascinating. That is something that brought me from just being
				interested in the beginning to a desire that I feel today to completely dedicate myself to programming.</p>
			</div>
			<div id="aboutRight">
				<img src="sitePictures/me.jpg" alt="myPicture">
			</div>
		</div>
	</div>
	<div id="projects">
		<h2>My Projects</h2>
		
		<p>One of my projects, of course, is this website. Besides introducing myself in it, my goal was to put into practice part of what I’d learned and, more importantly, to learn
		something new. In every one of the projects introduced here, as well as in those I haven’t mentioned, I learned new things and corrected some mistakes I’d made in similar
		situations before and this is where the most important value of these projects is.<br>
		I wasn’t striving for visual attractiveness while creating this website, for example, by placing some attractive images on the front page.
		The front page would look more visually pleasing but probably wouldn’t have much to do with me. My intention was to explore, experiment and, if possible, do something new.
		For example, I learned that I could accomplish sequential loading of the text at the top of the page by using the JavaScript function setInterval. I experimented with
		color gradients, as well as with fonts, which I included from the Google Fonts website. I learned that the header could be hidden after a certain scroll down length by
		triggering the Window.onscroll event.<br>
		Although there are no practical reasons for using PHP on a site like this, for the sake of experimenting, I wanted to use it in order to dynamically load part of the front
		page content. I used my work history details to create a database table and loaded those details from the server side. It’s the links in the work history section on the
		bottom of the front page. Of course, the data are still hard coded in the database and, in order to truly dynamically load contents on the page I should have created a form
		that would have enabled users to change the table rows in the database. I did something like this in my other web application that I mentioned below. By clicking on one of
		the links, the user sets the value of the GET method, which sets the background picture of the job details page, which the particular link opens. The job description and
		dates are also loaded from the database. The pictures, the job descriptions and dates are the properties of the PHP class that I created in order to map the table columns
		in the database. <a href="">The PHP files can be viewed here.</a><br>
		I used responsive design for this website and adjusted it to mobile devices.<br><br><br></p>
		
		<h3 class="projectTitleMob">Hourly Rate</h3>
		
		<p><a href="https://github.com/denisbrankovic/hourlyRate" target="_blank"><img class="projectImages" src="sitePictures/hourlyRate" alt="hourly rate"/></a>
		<b>C# application “Hourly Rate”</b> calculates statistical data on gaming results, in this case, poker results. The user enters the session results and the application generates
		data for each individual level the user has played at, for example, hourly rate, number of hands played per level, the number of winning sessions vs. the number of losing
		sessions at each level, win rate in big blinds, results by level, overall result…<br>
		It was built in Visual Studio. The database with which the application communicates is managed with the MS SQL Server. I created a class that I names Session, which
		represents a poker session as well as the class named SessionDal, which communicates with the database. I implemented the INotifyPropertyChanged interface in the class
		Session, which enables real time updates of the data in the user interface. However, this interface enables only real time updates of the properties of the class in question,
		but it does not reflect the changes made to the session list, which is also displayed in the UI. The list contains Session class instances. I assigned this list to an
		observable collection, which implements the INotifyCollectionChanged. Due to this fact, it’s possible to have the UI updated every time there is a new entry or a deleted
		entry in the list as well. I used Window Resources to load the list.<br>
		I used the LINQ technology and Lambda Expressions to access data from the list.<br>
		The application was built on the principle of separation between the data access layer and the programming logic, which enables more efficient maintenance and portability.<br><br><br></p>
		
		<h3 class="projectTitleMob">Kladionički rezultati</h3>
		
		<p><a href="http://kladionickirezultati.epizy.com" target="_blank"><img class="projectImages" src="sitePictures/betting" alt="betting"/></a>
		
		<b>Web application “Kladionički rezultati”</b> is the first web application I created on my own and also the first one that justified the name of “web application” by actually
		eventually getting uploaded to the web. Initially, I wasn’t going to mention it here among my projects because it was created as a result of an old internal joke between my
		brother and me, but then I realized that I’d invested too much time, work and ideas into it to just leave it forgotten. My brother likes to bet on sports results
		and, like everyone else, he likes to announce every win when it happens, but completely ignores all the days he plays and doesn't win. He plays
		parlays betting very small amounts in order to occasionally win bigger from time to time. This has often been the cause of discussions between us about whether he is winning
		overall or not, but, of course, it’s impossible to tell because he’s never kept record of his play and never wanted to. Eventually I told him that, one day, I’d become a 
		programmer and create a program that would keep record of his play all by itself.<br>
		The application displays only the current state, or overall result on the front page. It works based on the assumption that the user bets one BAM a day, which is actually
		the case over 90% of the time. So every 24 hours the program deducts one BAM from the total. Of course, the application can’t predict the winning days so it is expected from the user to
		enter the winning amount when it occurs.<br>
		In order to do this I created a class named Betting with properties date, bet, dailyResult (win or loss) and totalResult. There is a method that reads the last entry from
		the database and calculates the difference between the current date and the date of the last entry. At the moment of the http request this method uses a while loop to create 
		one instance of the Betting class for each day that passed since the day of the last bet. Every instance contains this daily bet amount, gets its date increased by one day
		and the total decreased by the daily bet. Another method reads the betting stats table in the database and echoes a div element containing the bet details. These div
		elements are displayed in the stats page, while the front page only shows the overall result.<br>
		The admin page is accessed with the username alen and password 0001. There are four forms at this page that enable the user to change the daily bet amount, enter additional
		bets if there are any, enter a win or delete the last entry if there has been an error. The form uses the POST method. I validated the forms using JavaScript.<br>
		I used Prepared Statements to create the login system. Although I made a sign up page too I only uploaded the login page because the application was created for one user
		only. His username and password were hard coded into the database.<br>
		<a href="">The PHP scripts are here. </a><br><br></p>
		
		<h3 class="projectTitleMob">Java File Manager</h3>
		<p><a href=""><img class="projectImages" src="sitePictures/fileManager" alt="file manager"/></a>
		
		<b>"Java File Manager"</b> ” is a console application used to manipulate files and folders in the file system. This application was actually one of the assignments 
		as part of the “Java Core Programming” subject at ITAcademy. It is one of the first applications I created entirely by myself so I wanted it to be on this list.<br>
		It was created in the NetBeans environment. It works as a classical console application based on commands. When the application is initiated it displays information for the
		user that the “commands” key word returns a list of all available commands that can be used to perform different operations on the file system, like creating new files or
		folders, deleting or copying existing ones, getting the list of root folders or folders on a specified path and so on.<br>
		Java programming language wasn’t one of the primary subjects of the course I completed. The main focus was on the languages I mentioned earlier. Essentially, only the syntax
		and the object oriented programming basics were thought in this part of the course. However, due to many similarities between Java and C# I believe that I could easily adapt
		to working in this programming language.</p>
	</div>
	<div id="workHistory">
		<h2>Work History</h2>
		<p>My previous work experience was unrelated to programming. If I wanted to get very creative I could say that working at some of my previous jobs improved my English
		speaking and this was helpful later in studying programming languages. This about sums up all the connections between my previous work and the one I am about to engage into.
		I started working as soon as I completed the secondary education and have changed quite a few jobs, which, besides being unrelated to programming haven’t had any connection
		with the field of my formal education either. This may have made my work history somewhat coulourful, but this isn’t so unusual for the circumstances we live in.<br>
		If I wanted to talk about some of my traits in the context of where I’d worked and how it’d shaped me I’d say that the years of work in international organisations had
		shaped me in one way and the years I’d spent as a gamer had influenced my personality in a different way. Working in an environment with a structured decision making 
		hierarchy thought me how to do my part of work in a group, but also cooperate and build working relations with my colleagues. It honed my interpersonal skills, especially 
		during the six years in an international and multicultural environment. The years I spent working in the trade industry were equally useful in that regard. On the other hand,
		being a gamer has thought me self discipline. It’s shaped my awareness of how necessary it is to do your daily work even though you can adjust your work time to
		your needs and despite the fact that you report to no one but yourself. Although gaming offers freedom and flexibility, it is necessary to do be disciplined enough to
		do the daily amount of play, analysis, finding and correcting mistakes in your game and analyzing opponents. Gaming requires self discipline, mental stability and the ability
		to adapt to the constantly changing circumstances.<br>
		I hope I’ve taken the best out of both worlds.<br>
		The CV already contains the list of all of my previous jobs. Here I only wrote a few thoughts about each of them, which may resemble job descriptions here and there, while
		elsewhere they represent views from a personal angle, often relating only to some detail that occurred to me at the moment of writing. In fact, the texts are more of an
		attempt to give some shape and content to the site than they are real job descriptions.</p> 
	</div>
		<div id="jobsWrapper">
			<?php connection::getAllJobs("workHistoryEnglish", "jobHistoryEnglish"); ?>
		</div>
		<footer>
			<p>DBranković</p>
		</footer>
</div>
	<script src="frontPage.js">	
	</script>
</body>
</html>