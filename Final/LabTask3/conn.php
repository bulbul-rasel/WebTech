<?php  
$server_name = 'localhost';
$e_name = '';
$e_mail ='';
$e_pass = '';
$e_dob ='';
$db = 'demo';
$conn = mysqli_connect( $server_name, $e_name, $e_mail, $e_pass, $e_dob ,$db );

if( !$conn){
	die( 'Unable to connect' );
}else{
	echo "";
}
?>