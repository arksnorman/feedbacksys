<?php

	$title = 'Give Us Your Feedback';

	require_once 'core/init.php';

	$trainerList = getAll('trainers');

	if (isset($_POST['submit'])) 
	{
	
		$trainerName = Clean::input($_POST['trainer']);

		$doYouLike = Clean::input($_POST['checkbox']);

		$likeComment = Clean::input($_POST['liketrainercomment']);

		$unLikeComment = Clean::input($_POST['unliketrainercomment']);

		$trainerImproveOn = Clean::input($_POST['improveOn']);

		$milestoneImproveOn = Clean::input($_POST['milestoneImproveOn']);

		$understand = Clean::input($_POST['understand']);

	}

	require_once header;

	require_once homeView;

	require_once footer;

?>