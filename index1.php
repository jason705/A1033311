<?php
class PostOffice{

	function mailFiler(){
		$f=fopen("string.txt","r");
		while(! feof($f))
  		{
  		echo fgetc($f);
  		}
  		echo "<br/>";
  		fclose($f);
	}

	function mailRegex(){
		$f=fopen("string.txt","r");
		while(! feof($f))
  		{
  			$c=fgetc($f);
  			if(preg_match("/[0-9A-Za-z]/",$c)){
 			 		echo $c; 				
  			}
  	}
  	echo "<br/>";
  		fclose($f);
	}

	function spiltroad(){
		$f=fopen("road.txt","r");
		while(! feof($f))
  			{
  			$s=fgets($f);
 			$s = split ('區', $s);
 			$s = split('路', $s[1]);
  			echo $s[0]."路<br/>";
  			}
  	}	
	}

$p=new PostOffice;
$p->mailFiler();
$p->mailRegex();
$p->spiltroad();

?>
