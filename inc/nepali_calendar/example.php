<?php
	include('nepali_calendar.php');
	$cal = new Nepali_Calendar();
	print_r ($cal->eng_to_nep(2008,11,23));
	print_r($cal->nep_to_eng(2065,8,8));
?>