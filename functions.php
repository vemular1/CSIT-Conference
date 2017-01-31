<?php 
include "config.php";
function select_data_database($query)
{
	$result = mysql_query($query);
	if($result)
	{
	$result_row = mysql_fetch_array($result);	
	
	}
	return $result_row;
}




function select_multydata_database($query)
{
	$result = mysql_query($query);
	if($result)
	{

		while( $result_row1 = mysql_fetch_array($result))
		{
			$result_row[] = $result_row1;
		}

	}
	return $result_row;
}




?>