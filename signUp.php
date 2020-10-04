<?php
error_reporting(0);
session_start();
if($_POST["createAccSubmit"])
{
    $name=$_POST["signUpName"];
$username=$_POST["signUpUserName"];
$phone=$_POST["signUpPhone"];
$email=$_POST["signUpUserEmail"];
$pass=$_POST["signUpUserPass"];
$cpass=$_POST["signUpUserCPass"];
$terms=$_POST["signUpTerms"];
$referral=$_POST["signUpUserReferral"];


// This function will return a random 
// string of specified length 
function random_strings($length_of_string)
{ 
    
    // md5 the timestamps and returns substring 
    // of specified length 
    return substr(md5(time()), 0, $length_of_string); 
} 

$userReferral=random_strings(5); 

$error="";
$conn = mysqli_connect('localhost', 'root', '', 'registration');
// Check connection
if (mysqli_connect_errno())
    {   
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
        exit();
    }
else{
    
    if($name==""){
        $error.="<p>Name Field should not be empty</p>";
    }
    
    if($username==""){
        $error.="<p>UserName Field should not be empty</p>";
    }
    
    if($phone==""){
        $error.="<p>Phone Field should not be empty</p>";
    }
    
    if($email==""){
        $error.="<p>Email Field should not be empty</p>";
    }
    
    if($pass==""){
        $error.="<p>Password Field should not be empty</p>";
    }
    
    if($cpass==""){
        $error.="<p>Conform Password Field should not be empty</p>";
    }
    if($pass!=$cpass && $pass!="" && $cpass!="")
    {
        $error.="<p>passwords dont match , please re enter your password</p>";
    }
    if (!preg_match("/^[a-zA-Z-' ]*$/",$name))
    {
        $error.= "<p>Only letters and white space allowed in Name</p>";
    }
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) 
    {
        $error.= "<p>Invalid email format</p>";
    }
    if ( !preg_match('/^[A-Za-z][A-Za-z0-9]{5,31}$/', $username) )
    {
        $error.= "<p>Username should have atleast 5 charectors adn should begin with an alphabeth</p>";
    }
    if ( !preg_match('/[0-9]{10}$/', $phone) )
    {
        $error.= "<p>Invalid Phone Number</p>";
    }
    if(!$terms)
    {
        $error.="<p>Please Check the terms and policy box</p>";
    }
    $uppercase = preg_match('@[A-Z]@', $pass);
    $lowercase = preg_match('@[a-z]@', $pass);
    $number    = preg_match('@[0-9]@', $pass);

    if(!$uppercase || !$lowercase || !$number || strlen($pass) < 8) {
    $error.="<p>password must contain an uppercase,lowercase and numbers and should be longer than 8 charectors</p>";
    }
    $pass=md5($pass);
    $sql='SELECT email FROM users WHERE email="'.$email.'"';
    
        if($res=mysqli_query($conn, $sql))
        {
            if(mysqli_num_rows($res) > 0)
            {
                $error.="<p>Email Address Already Exists</p>";
            }
        }
    
    $sql='SELECT username FROM users WHERE username="'.$username.'"';
    
        if($res=mysqli_query($conn, $sql))
        {
            if(mysqli_num_rows($res) > 0)
            {
                $error.="<p>Username Already Exists</p>";
            }
        }

        $successRef=0;

        if($referral!="")
        {

            //UPDATE wallet of preson who reffered

            $sql='SELECT wallet FROM users WHERE referral="'.$referral.'"';
    
            if($res=mysqli_query($conn, $sql))
            {
                if(mysqli_num_rows($res) > 0)
                {
                    
                    while($row=mysqli_fetch_array($res))
                    {
                        $wallet=$row["wallet"]+200;
                        $sql = 'UPDATE users SET wallet="'.$wallet.'" WHERE referral="'.$referral.'"';
                        if (mysqli_query($conn, $sql))
                        {
                            $successRef =1;
                        } 
                        else 
                        {
                            $error.="Error updating record: " . $conn->error;
                        }
                    }
                    
                }
                else{
                    $error.="<p>Referral Code Doesnt Exists</p>";
                }
            }
        }
        
    

    if($error=="")
    {
        
        if($successRef==1)
        {
            $sql = "INSERT INTO users (fname, username, phone, email, pass, referral, wallet) VALUES ('$name', '$username', '$phone', '$email', '$pass', '$userReferral', '200')";
        }
        else
        {
            $sql = "INSERT INTO users (fname, username, phone, email, pass, referral) VALUES ('$name', '$username', '$phone', '$email', '$pass', '$userReferral')";
        }
        
        if (mysqli_query($conn, $sql))
            {
            
            $_SESSION["successRegister"]=1;
            header("Location: login.php");
            } 
        else {
                $error.="Error: " . $sql . "<br>" . $conn->error;
            }
    }
    
    
    
}
mysqli_close($conn);
}

?>