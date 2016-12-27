<?php
include ('simple_html_dom.php');
$html = new simple_html_dom();
$html2 =file_get_html('http://1212.ip138.com/ic.asp');
$a = $html2->find('center');
$str = strpos($a[0],'[');
$end = strpos($a[0],']');
$clientip = substr($a[0],$str+1,$end-$str-1);
if($clientip == '71.183.204.108')
{
	echo"<script>alert('Successfully Checked in');window.history.go(-1)</script>";
	
}
else {
	echo"<script>alert('You are not at Library');window.history.go(-1)</script>";
}
?>