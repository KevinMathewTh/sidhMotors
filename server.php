<?php
// session_start();

// initializing variables
$username = "";
$email    = "";
$phone = "";
$errors = array(); 

// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'registration');

if (isset($_POST['adminlogin'])) { 
  if($_POST['AdminUserId']=='sidhmotors1' && $_POST['AdminPwd']=='sidh_motors!905'){
    session_start();
    $_SESSION['adminusername'] = "sidhmotors1";
    
    header('location: admin-login.php');
    echo "<script>alert('Welcome to admin panel')</script>";
  }
  else{
    echo "<script>alert('Wrong pwd id combo')</script>";
  }
}


if (isset($_POST['reg_plan'])) { 
 
  

  $plan_name = mysqli_real_escape_string($db, $_POST['plan_name']);
  $desc = mysqli_real_escape_string($db, $_POST['desc']);
  $amount = mysqli_real_escape_string($db, $_POST['amount']);
  $feature_1 = mysqli_real_escape_string($db, $_POST['feature_1']);
  $feature_2 = mysqli_real_escape_string($db, $_POST['feature_2']); 
  $feature_3 = mysqli_real_escape_string($db, $_POST['feature_3']);
  $feature_4 = mysqli_real_escape_string($db, $_POST['feature_4']);
  $feature_5 = mysqli_real_escape_string($db, $_POST['feature_5']);


    $query2 = "INSERT INTO `plans`(`name`, `description`, `amount`, `feature_1`, `feature_2`, `feature_3`, `feature_4`, `feature_5`) VALUES ('$plan_name', '$desc', '$amount', '$feature_1', '$feature_2', '$feature_3', '$feature_4', '$feature_5')";
    mysqli_query($db, $query2);
    echo "<script>alert('Plan added')</script>";
}

// REGISTER USER
if (isset($_POST['reg_user'])) {
  // receive all input values from the form
  $username = mysqli_real_escape_string($db, $_POST['username']);
  $phone = mysqli_real_escape_string($db, $_POST['phone']);
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
  $password_2 = mysqli_real_escape_string($db, $_POST['password_2']);

  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
  if (empty($username)) { array_push($errors, "Username is required"); }
  if (empty($phone)) { array_push($errors, "Phone is required"); }
  if (empty($email)) { array_push($errors, "Email is required"); }
  if (empty($password_1)) { array_push($errors, "Password is required"); }
  if ($password_1 != $password_2) {
  array_push($errors, "The two passwords do not match");
  }

  // first check the database to make sure 
  // a user does not already exist with the same username and/or email
  $user_check_query = "SELECT * FROM users WHERE username='$username' OR email='$email' LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  
  if ($user) { // if user exists
    if ($user['username'] === $username) {
      array_push($errors, "Username already exists");
    }

    if ($user['email'] === $email) {
      array_push($errors, "email already exists");
    }
  }

  // Finally, register user if there are no errors in the form
  if (count($errors) == 0) {
    $password = md5($password_1);//encrypt the password before saving in the database

    $query = "INSERT INTO users (username, phone_no, email,  password) 
          VALUES('$username', '$phone', '$email', '$password')";
    mysqli_query($db, $query);
    // $_SESSION['username'] = $username;
    // $_SESSION['success'] = "You are now logged in";
    header('location: billing.php');
  }
}
?>