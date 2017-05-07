<?php 

	/**
	* @author Kidhoma Norman
	*/

	class Clean
	{

		/**
		* Method to handle users input
		*/

		public static function input($data = null)
		{

			if ($data) 
			{

				$data = trim($data);

				$data = stripslashes($data);

				$data = htmlspecialchars($data);

				return $data;

			}

		}

	}
	
?>