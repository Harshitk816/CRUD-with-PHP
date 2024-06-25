<?php
session_start();
include 'connection.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee Portal</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>
<body class="bg-body-secondary" >

<form method="post" action="" class="m-5 px-5 " enctype="multipart/form-data">
<div class="h2 d-flex justify-content-between text-light bg-success bg-gradient border border-success rounded p-3" style="--bs-bg-opacity: .7;">
    <div class="d-flex flex-row">
        <span style="cursor:pointer" onclick="history.back()">⬅️</span>
        <span style="cursor:pointer" onclick="history.forward()">➡️</span>
     </div>
     <div>
        <p class="">Employee Login</p>
     </div>
     <div class="">
        <a href="register.php" style="font-size:medium; text-decoration:none; color:white; cursor:pointer" class="">Register</a>
        <a href="login.php" style="font-size:medium; text-decoration:none; color:white; cursor:pointer" class="">Login</a>
     </div>
    </div>

<div class="field-container flex bg-success-subtle bg-gradient p-3 border border-success-subtle rounded" >
    <div class="row">
        
      
        <div class="mb-3 input-group input-group-sm col">
            <span class="input-group-text bg-primary bg-gradient text-white border border-primary fw-bold" style="--bs-bg-opacity: .7" id="inputGroup-sizing-sm">E-mail </span>
            <input type="email" name="email" class="form-control" id="email" required>
        </div>

        <div class="mb-3 input-group input-group-sm col">
        <span class="input-group-text bg-primary bg-gradient text-white border border-primary fw-bold" style="--bs-bg-opacity: .7" id="inputGroup-sizing-sm">Password </span>
            <input type="password" name="password" class="form-control" id="password" required>
        </div>
    </div>

        <button type="submit" name="login" value="login" class="btn btn-success bg-gradient">Login</button>
        <p class="my-2"><a class="my-2 link-offset-2 link-underline link-underline-opacity-0" href="register.php">New Employee? Register.</a></p>

    </div>

</form>

<?php
 
if(isset($_POST['login'])){//if the form is submitted
    $email = $_POST['email'];
    $password = $_POST['password'];
    
    $query = "SELECT * FROM EMPLOYEE WHERE email='$email' && password =  '$password'";
    $data = mysqli_query($conn, $query);
    $total = mysqli_num_rows($data);

    if($total==1){
        $_SESSION['email']=$email;
        echo "<script>
        alert('Logged-in successfully!');
        window.location.href='display.php';
        </script>";
        
    }else{
        echo "<script>alert('Login Failed!')</script>";
    }
}
?>

</body>
</html>