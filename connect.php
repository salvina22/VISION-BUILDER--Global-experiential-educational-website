<?php
$name=filter_input(INPUT_POST,'name');
$age=filter_input(INPUT_POST,'age');
$email=filter_input(INPUT_POST,'email');
$dob=filter_input(INPUT_POST,'date');
$gender=filter_input(INPUT_POST,'gender');
$Address=filter_input(INPUT_POST,'Address');
$pass1=filter_input(INPUT_POST,'pass');
$pass2=filter_input(INPUT_POST,'cpass');
/*if(!empty($username)){
	if(!empty($password)){*/
	$host="localhost";
	$dbusername="root";
	$dbpassword="";
	$dbname="cia2";
	//create connection

$conn = new mysqli ($host,$dbusername,$dbpassword,$dbname);
if(mysqli_connect_error()){
	die('connect Error ('. mysqli_connect_errno().')'
	.mysqli_connect_error());
}

else{
	$sql="INSERT INTO signup(name,age,email,dob,address,gender,password,conpassword) 
	values ('$name','$age','$email','$dob','$Address','$gender','$pass1','$pass2')";
	
		
	

	if($conn->query($sql)){
		header("location:homepage.html");
		//echo "new record is inserted sucessfully ";
	}
	else {
		echo "error". $sql."<br>".$conn->error;	
		}
}
	$conn->close();	

/*}
else{
	echo "password should not be empty";
	die();
	}
}
else{
	echo "username should not be empty";
	die();
	}
*/	
?>