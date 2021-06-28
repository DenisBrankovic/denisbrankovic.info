<?php
	spl_autoload_register(function($class){
		require_once($class.".php");
	});
		
	class connection{
		
		static function getAllJobs($language, $jobsLanguage){
			$conn = Database::connect();
			$res = $conn->query("select * from $language"); 
			$jobs = $res->fetchAll(PDO::FETCH_CLASS, "job"); 
			
			foreach($jobs as $j){ 
				$gamingBackground = $j->jobId == 1 ? "sitePictures/backgammon.jpg" : $j->picture;
				$date = $j->jobId == 1 ? $j->startDate : "{$j->startDate} - {$j->endDate}"; 
				$job = "<div class='jobsInner'>
				<a href='$jobsLanguage.php?jobId={$j->jobId}' target='_blank'><img src='{$j->picture}' alt='jobImage'></a>
				<h4>{$date}</h4>
				<h4>{$j->title}</h4>
				</div>";
								 
				echo $job;
			}
		}
		
		static function getAllPictures(){
			$con = database::connect(); 
			$res = $con->query("select picture from workHistory"); 
			$pictures = $res->fetchAll(PDO::FETCH_COLUMN); 
			
			return $pictures; 
		}
		
		static function getJob($jobId){
			$conn = database::connect();
			$result = $conn->query("select * from workHistory where jobId = {$jobId}");
			$job = $result->fetch(PDO::FETCH_ASSOC);
			
			return $job; 
		}	
		
		static function getJobEnglish($jobId){
			$conn = database::connect();
			$result = $conn->query("select * from workHistoryEnglish where jobId = {$jobId}");
			$job = $result->fetch(PDO::FETCH_ASSOC);
			
			return $job; 
		}		
	}
	
	