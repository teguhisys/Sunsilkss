<?php  if (!defined('BASEPATH')) exit('No direct script access allowed');

if ( ! function_exists('pre'))
{
	function pre($var)
	{
		echo "<pre>";
		print_r($var);
		echo "</pre>";
	}	
}

if ( ! function_exists('esc')) //alias: mysql_real_escape_string()
{
	function esc($string)
	{
		$result=mysql_real_escape_string($string);
		return $result;
	}	
}

if ( ! function_exists('find'))
{
	function find($coloumn,$id,$table)
	{
		//echo "select `".$coloumn."` from `".$table."` where id='".$id."'";
		$q="select `".$coloumn."` from `".$table."` where id='".$id."'";
		$result=mysql_fetch_assoc(mysql_query($q));
		return $result[$coloumn];
	}	
}

if ( ! function_exists('find_2'))
{
	function find_2($coloumn,$data_1,$data_2,$table)
	{
		$q="select `".$coloumn."` from `".$table."` where ".$data_1." = '".$data_2."'";
		$result=mysql_fetch_assoc(mysql_query($q));
		return $result[$coloumn];
	}	
}

if ( ! function_exists('find_3'))
{
	function find_3($coloumn,$data_1,$data_2,$data_3,$data_4,$table)
	{
		$q="select `".$coloumn."` from `".$table."` where ".$data_1." = '".$data_2."' and ".$data_3." = '".$data_4."'";
		$result=mysql_fetch_assoc(mysql_query($q));
		return $result[$coloumn];
	}	
}


if ( ! function_exists('first_precedence'))
{
	function first_precedence($table)
	{
		$result=mysql_fetch_assoc(mysql_query('select precedence from '.$table.' order by precedence asc'));
		return $result['precedence'];
	}	
}

if ( ! function_exists('last_precedence'))
{
	function last_precedence($table)
	{
		$result=mysql_fetch_assoc(mysql_query('select precedence from '.$table.' order by precedence desc'));
		return $result['precedence'];
	}	
}

if ( ! function_exists('last_precedence_2'))
{
	function last_precedence_2($table,$data_1,$data_2)
	{
		$result=mysql_fetch_assoc(mysql_query('select precedence from '.$table.' where '.$data_1.' = '.$data_2.' order by precedence desc'));
		return $result['precedence'];
	}	
}

if ( ! function_exists('first_precedence_2'))
{
	function first_precedence_2($table,$data_1,$data_2)
	{
		$result=mysql_fetch_assoc(mysql_query('select precedence from '.$table.' where '.$data_1.' = '.$data_2.' order by precedence asc'));
		return $result['precedence'];
	}	
}

if ( ! function_exists('last_precedence_3'))
{
	function last_precedence_3($table,$data_1,$data_2,$data_3,$data_4)
	{
		$result=mysql_fetch_assoc(mysql_query('select precedence from '.$table.' where '.$data_1.' = '.$data_2.' and '.$data_3.' = '.$data_4.' order by precedence desc'));
		return $result['precedence'];
	}	
}

if ( ! function_exists('first_precedence_3'))
{
	function first_precedence_3($table,$data_1,$data_2,$data_3,$data_4)
	{
		$result=mysql_fetch_assoc(mysql_query('select precedence from '.$table.' where '.$data_1.' = '.$data_2.' and '.$data_3.' = '.$data_4.'  order by precedence asc'));
		return $result['precedence'];
	}	
}

if ( ! function_exists('check_module_action_privilege')){
	function check_module_action_privilege($privilege,$module,$action)
	{
		if($privilege!=1){
			$q="select * from admin_privilege_module_tb where admin_privilege_id='".$privilege."' and admin_module_id='".$module."' and `action`='".$action."'";
			$result=mysql_fetch_assoc(mysql_query($q));
			
			if($result)return 1;
			else return 0;
		}
		else return 1;
	}	
}


if ( ! function_exists('check_privilege_usage')){
	function check_privilege_usage($id)
	{
		//category
		$q="select * from admin_tb where privilege_id='".esc($id)."'";
		$result=mysql_fetch_assoc(mysql_query($q));
		
		if($result)return 1;
		else return 0;
		
	}	
}

if ( ! function_exists('check_privilege_usage_distributor')){
	function check_privilege_usage_distributor($id)
	{
		//category
		$q="select * from distributor_admin_tb where privilege_id='".esc($id)."'";
		$result=mysql_fetch_assoc(mysql_query($q));
		
		if($result)return 1;
		else return 0;
		
	}	
}


if ( ! function_exists('check_module_action_privilege_distributor')){
	function check_module_action_privilege_distributor($privilege,$module,$action)
	{
		if($privilege!=1){
			$q="select * from distributor_privilege_module_tb where distributor_privilege_id='".$privilege."' and distributor_module_id='".$module."' and `action`='".$action."'";
			$result=mysql_fetch_assoc(mysql_query($q));
			
			if($result)return 1;
			else return 0;
		}
		else return 1;
	}	
}

if ( ! function_exists('money'))
{
	function money($input)
	{
		return number_format($input, '0', ',', '.').',-';
		
	}

}