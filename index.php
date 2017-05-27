<?php

	$pageTitle = 'Give Us Your Feedback';

	require_once 'core/init.php';

	$trainerList = getAll('trainers');

	if (isset($_POST['submit'])) 
	{
	
		$trainerName = Clean::input($_POST['trainer']);

		$doYouLike = Clean::input($_POST['checkbox']);

		$understand = Clean::input($_POST['checkboxunderstand']);

		$likeComment = Clean::input($_POST['liketrainercomment']);

		$unLikeComment = Clean::input($_POST['unliketrainercomment']);

		$trainerImproveOn = Clean::input($_POST['improveOn']);

		$milestoneImproveOn = Clean::input($_POST['milestoneImproveOn']);		

		$array = array($trainerName, $doYouLike, $likeComment, $unLikeComment, $milestoneImproveOn, $trainerImproveOn, $understand);

		$query = 'INSERT INTO feedback(feedback_trainer,feedback_like,feedback_likes,feedback_unlikes,feedback_milestone,feedback_improveon,feedback_understand) VALUES(?,?,?,?,?,?,?)';

		if (Database::getInstance()->query($query, $array)) 
		{

			echo "success";
			
		}

	}

	require_once header;

	require_once homeView;

	require_once footer;

?>