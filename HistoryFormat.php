<?php
	class monthDetails
	{
		public function getMonth($month_number)
		{
			$month_numbers = array("Jan", "Feb", "Mar", "April", "June", "July", "August", "September", "October", "November", "December");

			return $month_numbers[$month_number-1];
		}
	}
?>