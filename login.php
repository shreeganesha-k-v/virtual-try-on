<?php
$username=$_POST['username'];
$psw=$_POST['psw'];
$email=$_POST['email'];
$namee=$_POST['namee'];
$host="localhost";
$dbUsername="root";
$dbPassword=" ";
$dbname="signup";
$conn=new mysqli($host,$dbUsername,$dbPassword,$dbname);
if(mysqli_connect_error()){
	die('Connect Error('.mysqli_connect_error().')'.mysqli_connect_error());
}
else{
	$SELECT="SELECT email from register Where email=? Limit 1";
	$INSERT="INSERT into register(username,psw,namee) values(?,?,?)";
	$stmt=$conn->prepare($SELECT);
	$stmt-> bind_param("s",$email);
	$stmt-> execute();
	$stmt->bind_result($email);
	$stmt->store_result();
	$rnum=$stmt->num_rows;
	if($rnum==0){
		$stmt->close();
		$stmt=$conn->prepare($INSERT);
		$stmt->bind_param("sss",$username,$psw,$namee);
		echo " New record inserted successfully";

	}else {
		echo " mail id already registered";
	}
	$stmt->close();
	$stmt->close();
}
?>



