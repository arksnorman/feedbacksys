<?php

	function getAll(string $table = null) : array
	{

		$allTrainers = array();

		if ($table) 
		{
			
			if (Database::getInstance()->getAll($table)) 
			{

				$allTrainers = Database::getInstance()->getAll($table)->results();
				
			}

		}

		return $allTrainers;

	}

?>