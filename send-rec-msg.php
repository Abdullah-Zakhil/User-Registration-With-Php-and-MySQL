<?php
$con = mysqli_connect('localhost','root','','chatroom','3308');
if ($con) 
{
	# code...
	echo "Database has successfully been connected! ";
	echo "<br>";
}
else
{
	echo "Unable to connect to the Database! ";
	echo "<br>";
}
//The Following are passed by the user
$receiver_email    = $_POST['receiver_email'];
$sender_email = $_POST['sender_email'];
$message      = $_POST['message'];

$sql    = "INSERT INTO `messages` (`sender_email`,`receiver_email`,`message`) VALUES ('$sender_email','$receiver_email','$message')";
$result = mysqli_query($con,$sql);
if ($result) 
{
	# code...
	echo "Your message has been successfully sent. ";
}
else 
{
	# code...
	echo "Your message was not sent. ";
}
echo "<script>	window.history.back(); </script>
"
?>
