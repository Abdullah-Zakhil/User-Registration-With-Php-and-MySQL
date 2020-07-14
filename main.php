<!DOCTYPE html>
<html>
<head>
	<title>Connection Main Page</title>
	<style>
        .header{
             border: 5px outset brown;
            background-color: brown;
            height: 90px;
            margin-left: 100px;
            margin-right: 100px;
            
        }
        
        .conn{
            border: 5px outset brown;
             text-align: center;
            color: white;
            font-weight: bolder;
            font-size: 25px;
            background-color: #800000;
            width: 260px;
            height: 90px;
        }
        .footer{
             border: 5px outset brown;
            background-color: brown;
            margin-left: 100px;
            margin-right: 100px;
            height: 40px;
            text-align: center;
            color: white;
            font-weight: bolder;
        }
        
        .c_user{
            margin-left: 100px;
            margin-right: 100px;
            border: 5px outset brown;
            height: 150px;
            background-color: palegoldenrod;
        }
        .nav_bar{
            margin-left: 100px;
            margin-right: 100px;
            border: 5px outset brown;
            width: 180px;
            background-color: palegoldenrod;
        }
        .msg_box{
            border: 5px outset brown;
        	background: pink;
            color: black;
            padding: 5px;
            width: 700px;
            height: 280px;
            overflow: scroll;
            border: 1px solid #ccc;
            margin-top: -290px;
            font-size: 17px;
        }
		table, th, td {
		  border: 1px solid black;
		  border-collapse: collapse;
		}
        th,td {
  			padding-left: 45px;
		}
    </style>
    <script type="text/javascript">
    	function inboxmessages(){
    		document.getElementById("toshow").innerHTML = `
			    	
			    <div class="msg_box">
			        <table>
			            <tr>
			                <th align="left"> Sender </th>
			                <th align="left"> Message</th>
			            </tr>
			            <?php 
			            	$con2 = mysqli_connect('localhost','root','','chatroom','3308');
							$sql2    = 'SELECT * FROM messages';
							$result2 = mysqli_query($con2,$sql2);
							$email    = $_POST['email'];
							while ($rows2 = mysqli_fetch_array($result2)){
								
								if ($rows2["receiver_email"] == $email ){
									?>
									<tr>
										<td> <?php echo $rows2["sender_email"] ?> </td>
										<td> <?php echo $rows2["message"] ?> </td>
									</tr>
									<?php
								}
							}
						?>
			        </table>
			    </div>
			`;
    	}
    	function outboxmessages(){
    		document.getElementById("toshow").innerHTML = `
			    <div class="msg_box">
			        <table>
			            <tr>
			                <th align="left"> Receiver </th>
			                <th align="left"> Message</th>
			            </tr>
			            <?php 
			            	$con2 = mysqli_connect('localhost','root','','chatroom','3308');
							$sql2    = 'SELECT * FROM messages';
							$result2 = mysqli_query($con2,$sql2);
							$email    = $_POST['email'];
							while ($rows2 = mysqli_fetch_array($result2)){
								//Password & Email is correct......
								if ($rows2["sender_email"] == $email ){
									?>
									<tr>
										<td> <?php echo $rows2["receiver_email"] ?> </td>
										<td> <?php echo $rows2["message"] ?> </td>
									</tr>
									<?php
								}
							}
						?>
			        </table>
			    </div>
			`;
    	}
    	function sendmessages(){
    		document.getElementById("toshow").innerHTML = `
			    	<div style="height: 300px; background-color:pink; padding:22px;">
			    		<br>
			    		<form action="send-rec-msg.php" method="post">
			    			Sender Email: <input type="text" name="sender_email" value= <?php echo $_POST['email'] ?> ><br>
			    			Receiver Email: <input type="text" name="receiver_email" type="Email"/><br><br>
			    			Message : &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp <textarea rows="6" cols="56" name="message"></textarea><br> &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp 
			    			<input type="submit" value="Send Message" />
			    		</form>
			    	</div>
			`;
    	}
    </script>

</head>
<body style = "background-color : grey">

<?php 
// Validating Email & Password
$con = mysqli_connect('localhost','root','','chatroom','3308');
if ($con) {
	# code...
	
}
else{
	
}

$new_email    = $_POST['email'];
$new_password = $_POST['password'];
$valid    = 0;

$sql    = 'SELECT * FROM regis_users';
$result = mysqli_query($con,$sql);
?>
<?php

while ($rows = mysqli_fetch_array($result)) {
	
	if ($rows['user_email'] == $new_email && $rows['user_password'] == $new_password) {
		
		$valid = 1;
?>

    <div class="header">
        <div class="conns">
            <br>
            <a href="#" style="text-decoration: none; color: white">
            	CONNECTIONS <br>
            	Get Connected
            </a>
        </div>
    </div>
    <br>
    <div class="c_user" >
        <img src= <?php echo $rows['profile_sr'] ?> alt="" height="160px" width="170px" style="display: inline-block;">
        <center style="display: inline-block; margin-left: 270px; margin-top: 50px; vertical-align: top;">
            <h2> Current User: <?php echo $new_email; ?> </h2>
        </center>
        
    </div>
    <br>
    <div class="nav_bar">
        <div style="margin-left: 25px;">
        	<br>
        	<a href="#" onClick="window.location.reload();">Main Page</button><br><br>
            <a href="#" onclick="sendmessages()">Send Message</a><br><br>
            <a href="#" onclick="inboxmessages()">InBox</a><br><br>
            <a href="#" onmousedown="" onmouseup="outboxmessages()" >OutBox</a><br><br>
            <a href="register.html">SignOut</a><br><br><br><br><br><br>
        </div>
    </div>
    <div style="margin-top: -300px; background-color: pink; align: center; margin-left: 400px; width: 55%; height: 80px;">
    	<div id="toshow">
    		<p style="font-weight: bolder; font-size: 22px;"><br> &nbsp&nbsp Welcome to my KOOL emailing platform!</p>	
    	</div>
    </div>
    <br><br><br><br><br><br><br><br><br><br><br><br><br>

    <div class="footer">
        <br>
        &copy; All Rights Reserved 
    </div>

<?php
	}
}
	if ($valid == 0) {
		
		echo "Unable to login <br>";
		header("Location: http://localhost/Complete/error_login.html");
	}
?>
</body>
</html>