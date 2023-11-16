<?php
	function PokazPodstrone($id)
	{
		$id_clear = htmlspecialchars($id);
		
		$querry = "SELECT * FROM page_list WHERE id='$id_clear' LIMIT 1";
		$result = mysqli_query($query);
		$row = mysql_fetch_array($result);
		
		//wywołanie strony bazy
		
		if(empty($row['id']))
		{
			$web='[nie_znaleziono_strony]';
		}
		else
		{
			$web = $row['page_content'];
		}
		return $web;
	}


?>