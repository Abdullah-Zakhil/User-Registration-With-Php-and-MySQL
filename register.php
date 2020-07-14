<?php 
$prof_pic	  = $_FILES['prof_pic'];
echo "<br>";
echo $_FILES['prof_pic']['name']."<br>";
$new_email    = $_POST['email'];
$new_password = $_POST['password'];

//profile picture is uploaded to the profile-pic directory 
$new_filename = $_FILES['prof_pic']['name'];
$tmpname  = $_FILES['prof_pic']['tmp_name'];
$new_dest	  = "profile-pics/".$new_email."__".$new_filename;

move_uploaded_file($tmpname, $new_dest);

$con = mysqli_connect('localhost','root','','chatroom','3308');
if ($con) 
{
	# code...
	echo "Database has successfully been connected! \n";
}
else
{
	echo "Unable to connect to the Database! \n";
}
$query = "INSERT INTO `regis_users` (`user_email`,`user_password`,`profile_sr`) VALUES ('$new_email','$new_password','$new_dest')";
$error = mysqli_query($con,$query);
if ($error) 
{
	echo "You have been successfully registered! \n";
	header("Location: http://localhost:8083/Complete/login_page.html");
	exit ;
}
else
{
	echo "You were unable to register Please try again with a different email address. \n";
}
?>
