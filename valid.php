<?php
//header('location: index.php');

session_start();
$_SESSION["email"] = "email";
$_SESSION["password"] = "password";

$email = $_POST['email'];

$conn = new mysqli('localhost','root','','movie_database');
if($conn->connect_error){
    die('connection failed : ' .$conn->connect_error);
}elseif(isset($_SESSION["email"])){
        $email = $_POST['email'];
        $password = $_POST['password'];
        //echo $email ."<br>".$password ."<br>";
        $sql="select * from login where email='".$email."'and password='".$password."'";
        $result = mysqli_query($conn,$sql);
        if(mysqli_num_rows($result) == 1){ 
            $stmt = $conn->prepare('insert into email(email)value(?)');
            $stmt->bind_param("s",$email);
            header('location: homepage.php');
        }else{
            echo '<h3 style="text-align: center; margin-top: 20px;">Email : '.$email.'<br> Password : '.$password.'<br>  Email Already Exists</h3>
	
	<form action="signup.php" method="post">
	<button style="text-align: center; position: absolute; left:45%; padding:8px;  background:#ffd11a; border:none; outline:none; border-radius:5px; width:10% ">Go To Signup Page</button>
	</form>';
            echo "Email-Id or Password Doesn't Match";
            exit();
        }
    }
$stmt->execute();
$stmt_sl->close();
$conn->close();
?>