<?php

	$pageTitle = 'Give Us Your Feedback';

	require_once 'core/init.php';

	$trainerList = Database::getAll('trainers');

	$errorList = array();

	if (isset($_POST['submit']))
	{
	
		$trainerName = Clean::input($_POST['trainer']);

		$like = '' . Clean::input($_POST['like']);

		$understand = '' . Clean::input($_POST['understand']);

		$likeComment = Clean::input($_POST['likeComment']);

		$dontLikeComment = Clean::input($_POST['dontLikeComment']);

		$trainerImproveOn = Clean::input($_POST['trainerImproveOn']);

		$milestoneImproveOn = Clean::input($_POST['milestoneImproveOn']);

		if (!(empty($trainerName) || empty($likeComment) || empty($dontLikeComment) || empty($trainerImproveOn) || empty($milestoneImproveOn)))
		{

			if (isset($like) && $like == 'on') 
			{

				$isLiked = 1;
				
			}

			else
			{

				$isLiked = 0;

			}

			if (isset($understand) && $understand == 'on') 
			{
				
				$isUnderstand = 1;

			}

			else
			{

				$isUnderstand = 0;

			}

			$array = array(
				'feedback_trainer' => $trainerName,
				'feedback_like' => $isLiked,
				'feedback_understand' => $isUnderstand,
				'feedback_likecomment' => $likeComment,
				'feedback_dontlikecomment' => $dontLikeComment,
				'feedback_trainerimproveon' => $trainerImproveOn,
				'feedback_milestone' => $milestoneImproveOn,
				);

			if (Database::insert('feedbackinfo', $array)) 
			{

				Redirect::to('/?status=success');

			}

			else
			{

				$errorList[] = 'There was an error submitting results. Try again later';

			}

		}

		else
		{

			$errorList[] = "Fields with * must be filled in";

		}		

	}

	require_once header;

	require_once homeView;

	require_once footer;

?>