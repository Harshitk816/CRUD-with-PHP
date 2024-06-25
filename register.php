<?php
include 'connection.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
     <p class="">Employee Registeration</p>
     </div>
     <div class="">
        <a href="register.php" style="font-size:medium; text-decoration:none; color:white; cursor:pointer" class="">Register</a>
        <a href="login.php" style="font-size:medium; text-decoration:none; color:white; cursor:pointer" class="">Login</a>
     </div>
    </div>

<div class="field-container flex bg-success-subtle bg-gradient p-3 border border-success-subtle rounded" >
    <div class="row ">
        <div class="mb-3  input-group input-group-sm col">
        <span class="shadow-sm input-group-text bg-primary bg-gradient text-white border border-primary fw-bold" style="--bs-bg-opacity: .7" id="inputGroup-sizing-sm">Profile Picture </span>
            <input type="file" name="img" class="form-control " id="img" aria-describedby="emailHelp" required>
        </div>
        <div class="mb-3  input-group input-group-sm col">
        <span class="shadow-sm input-group-text bg-primary bg-gradient text-white border border-primary fw-bold" style="--bs-bg-opacity: .7" id="inputGroup-sizing-sm">First Name </span>
            <input type="text" name="firstname" class="form-control " id="firstname" aria-describedby="emailHelp" required>
        </div>

        <div class="mb-3 input-group input-group-sm col">
        <span class="input-group-text bg-primary bg-gradient text-white border border-primary fw-bold" style="--bs-bg-opacity: .7" id="inputGroup-sizing-sm">Last Name </span>
            <input type="text" name="lastname" class="form-control" id="lastname" required>
        </div>
    </div>

    <div class="row">

        <div class="mb-3 input-group input-group-sm col">
        <span class="input-group-text bg-primary bg-gradient text-white border border-primary fw-bold" style="--bs-bg-opacity: .7" id="inputGroup-sizing-sm">Password </span>
            <input type="password" name="password" class="form-control" id="password" required>
        </div>

        <div class="mb-3 input-group input-group-sm col">
        <span class="input-group-text bg-primary bg-gradient text-white border border-primary fw-bold" style="--bs-bg-opacity: .7" id="inputGroup-sizing-sm">Confirm Password </span>
            <input type="password" name="conf_password" class="form-control" id="conf_password" required>
        </div>
    </div>

    <div class="row">
        <div class="mb-3 input-group input-group-sm col">
        <span class="input-group-text bg-primary bg-gradient text-white border border-primary fw-bold" style="--bs-bg-opacity: .7" id="inputGroup-sizing-sm">Gender </span>
            <select class="form-select" name="gender" id="gender" aria-label="Default select example" required>
                <option value="">Select</option>
                <option value="Male">Male</option>
                <option value="Female">Female</option>
                <option value="Other">Other</option>
            </select>
            </div>

        <div class="mb-3 input-group input-group-sm col">
           <span class="input-group-text bg-primary bg-gradient text-white border border-primary fw-bold" style="--bs-bg-opacity: .7" id="inputGroup-sizing-sm">Phone Number </span>
            <input type="text" name="phone" class="form-control" id="phone" required>
        </div>
      
        <div class="mb-3 input-group input-group-sm col">
            <span class="input-group-text bg-primary bg-gradient text-white border border-primary fw-bold" style="--bs-bg-opacity: .7" id="inputGroup-sizing-sm">Personal E-mail </span>
            <input type="email" name="email" class="form-control" id="email" required>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <div class="mb-3 input-group input-group-sm gap-4 ">
                <span class="input-group-text bg-primary bg-gradient text-white border border-primary fw-bold" style="--bs-bg-opacity: .7" id="inputGroup-sizing-sm">Role </span>
                <div class="form-check form-check-inline mt-1">
                    <input class="form-check-input" type="radio" name="role" id="php" value="PHP">
                    <label class="form-check-label" for="role">PHP</label>
                </div>
                <div class="form-check form-check-inline mt-1">
                    <input class="form-check-input" type="radio" name="role" id="seo" value="SEO">
                    <label class="form-check-label" for="role">SEO</label>
                </div>
                <div class="form-check form-check-inline mt-1">
                    <input class="form-check-input" type="radio" name="role" id="ui-ux" value="UI/UX">
                    <label class="form-check-label" for="role">UI/UX</label>
                </div>
            </div>

            <div class="mb-3 input-group input-group-sm col gap-4">
            <span class="input-group-text bg-primary bg-gradient text-white border border-primary fw-bold" style="--bs-bg-opacity: .7" id="inputGroup-sizing-sm">Languages </span>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" name="languages[]" type="checkbox" id="hindi" value="Hindi">
                    <label class="form-check-label" for="hindi">Hindi</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" name="languages[]" type="checkbox" id="english" value="English">
                    <label class="form-check-label" for="english">English</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" name="languages[]" type="checkbox" id="punjabi" value="Punjabi">
                    <label class="form-check-label" for="punjabi">Punjabi</label>
                </div>
            </div>

            <div id="hobbies" class="mb-3 input-group input-group-sm col gap-4">
            <span class="input-group-text bg-primary bg-gradient text-white border border-primary fw-bold" style="--bs-bg-opacity: .7" id="inputGroup-sizing-sm">Hobbies </span>
                <button id="add-btn" type="button" class="btn btn-primary bg-gradient" style="--bs-bg-opacity: .7; margin-left: -20px;">+</button>
                <div class="input-div d-flex">
                <input type='text' required name='hobbies[]' style='width:100px;' class='form-control'/>
                <button  class='remove-btn btn btn-primary bg-gradient'>-</button>&nbsp; &nbsp;
                </div>
                <!-- <button id="remove-btn" type="button" class="btn btn-primary bg-gradient" style="--bs-bg-opacity: .7; margin-left: -20px;">-</button> -->
                <!-- <input type="text" required="" name="hobbies[]" class="form-control" style="width: 10px;"> -->
            </div>


        </div>
        <div class="mb-3 input-group input-group-sm col">   
            <span class="input-group-text bg-primary bg-gradient text-white border border-primary fw-bold" style="--bs-bg-opacity: .7" id="inputGroup-sizing-sm">Address </span>
            <textarea class="form-control" name="address" placeholder="Enter your Address" id="address" required></textarea>
        </div>
    </div>
    </div>
        <div  class="mb-3 ">
            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
            <label class="form-check-label" for="flexCheckDefault" >
            I agree to the terms and conditions
            </label>
        </div >

        <button  type="submit" name="register" value="register" class="btn btn-success bg-gradient">Register</button>
        <p class="my-2"><a class="my-2 link-offset-2 link-underline link-underline-opacity-0" href="login.php">Existing Employee? Login.</a></p>

    </div>

</form>

<?php
if(isset($_POST['register'])){//if the form is submitted

    $filename = $_FILES["img"]["name"];//for getting name of the uploaded file
    $tempfolder = $_FILES["img"]["tmp_name"];//for getting name of the uploaded file
    $folder = "images/".$filename;
    move_uploaded_file($tempfolder, $folder);

    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $password = $_POST['password'];
    $conf_password = $_POST['conf_password'];
    $gender = $_POST['gender'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $role = $_POST['role'];

    $lang = $_POST['languages'];
    $lang1 = implode(",",$lang);

    $hobbies = $_POST['hobbies'];
    $hobbies1 = implode(",",$hobbies);

    $address = $_POST['address'];
    
    $query = "INSERT INTO EMPLOYEE(img, firstname, lastname, password, conf_password, gender, email, phone, role, lang, hobbies, address) VALUES ('$folder','$firstname', '$lastname','$password', '$conf_password', '$gender', '$email', '$phone', '$role', '$lang1', '$hobbies1', '$address')";
    $data = mysqli_query($conn, $query);

    if($query){
        echo "<script>alert('Data inserted successfully!')</script>";
        echo '<script>window.location.href = "display.php";</script>';
    }else{
        echo "<script>alert('Failed!')</script>";
    }
}
?>

</body>
<script>
    
    const container = document.querySelector('#hobbies');
    const addBtn = document.querySelector('#add-btn');
  
    addBtn.addEventListener('click', () => {
      const newInputDiv = document.createElement('div');
      newInputDiv.className = 'input-div';
      newInputDiv.classList.add("d-flex");
      newInputDiv.innerHTML = `
        <input name="hobbies[]" type="text" class='form-control' style='width:100px;' required/>
        <button  class="remove-btn btn btn-primary bg-gradient">-</button>
      `;
      container.appendChild(newInputDiv);
    });
  
    container.addEventListener('click', (e) => {
      if (e.target.classList.contains('remove-btn')) {
        const inputDiv = e.target.parentNode;
        inputDiv.remove();
      }
    });

</script>
</html>