<?php
session_start();
include 'connection.php';

$useremail = $_SESSION['email'];
if($useremail){

}else{
  header('location:login.php');
}
$query = "SELECT * FROM EMPLOYEE"; 
$data = mysqli_query($conn, $query);
$total = mysqli_num_rows($data);

if($total!=0){
?>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

<body class="bg-body-secondary">
    <div class="">
   
    <div class="h2 mt-3 d-flex justify-content-between text-light bg-success bg-gradient border border-success rounded p-3" style="--bs-bg-opacity: .7;">
    <div class="d-flex flex-row">
        <span style="cursor:pointer" onclick="history.back()">⬅️</span>
        <span style="cursor:pointer" onclick="history.forward()">➡️</span>
        
     </div>
     <div>
        <p class="">Employee Details</p>
     </div>
     <div class="">
        <?php
        if($useremail){
          echo "
          <a href='' style='font-size:medium; text-decoration:none; color:white; cursor:pointer' class=''>$useremail</a>
           <button class='btn btn-primary bg-gradient'><a href='logout.php' style='font-size:medium; text-decoration:none; color:white; cursor:pointer' class=''>Logout</a></button>
                ";
        }else{
          echo "
          <a href='login.php' style='font-size:medium; text-decoration:none; color:white; cursor:pointer' class=''>Login</a>
          <a href='register.php' style='font-size:medium; text-decoration:none; color:white; cursor:pointer' class=''>Register</a>
          ";
        } ?>
     </div>
    </div>
    <table class="table table-hover table-bordered">
  <thead>
    <tr>
    <th class="bg-primary bg-gradient text-white border border-primary fw-bold" style="--bs-bg-opacity: .7" scope="col">ID</th>
      <th class="bg-primary bg-gradient text-white border border-primary fw-bold" style="--bs-bg-opacity: .7" scope="col">Image</th>
      <th class="bg-primary bg-gradient text-white border border-primary fw-bold" style="--bs-bg-opacity: .7" scope="col">Name</th>
      <th class="bg-primary bg-gradient text-white border border-primary fw-bold" style="--bs-bg-opacity: .7" scope="col">Gender</th>
      <th class="bg-primary bg-gradient text-white border border-primary fw-bold" style="--bs-bg-opacity: .7" scope="col">Email</th>
      <th class="bg-primary bg-gradient text-white border border-primary fw-bold" style="--bs-bg-opacity: .7" scope="col">Phone</th>
      <th class="bg-primary bg-gradient text-white border border-primary fw-bold" style="--bs-bg-opacity: .7" scope="col">Role</th>
      <th class="bg-primary bg-gradient text-white border border-primary fw-bold" style="--bs-bg-opacity: .7" scope="col">Languages and Hobbies</th>
      <th class="bg-primary bg-gradient text-white border border-primary fw-bold" style="--bs-bg-opacity: .7" scope="col">City</th>
      <th class="bg-primary bg-gradient text-white border border-primary fw-bold" style="--bs-bg-opacity: .7" scope="col">Actions</th>
    </tr>
  </thead>
<?php
    while($result = mysqli_fetch_assoc($data)){
        
        echo "
        <tbody>
        <tr>
         <td class='align-middle'>".$result['id'].".</td>
         <td class='align-middle'><img height='50px' width='50px' src='".$result['img']."' class='img rounded' alt='user-img'></td>
          <td class='align-middle'>".$result['firstname']." ".$result['lastname']."</td>
          <td class='align-middle'>".$result['gender']."</td>
          <td class='align-middle'>".$result['email']."</td>
          <td class='align-middle'>".$result['phone']."</td>
          <td class='align-middle'>".$result['role']."</td>
          <td class='align-middle'><h6>Languages:</h6>".$result['lang']."<br><br><h6>Hobbies:</h6>".$result['hobbies']."</td>
          <td class='align-middle'>".$result['address']."</td>
          <td class='py-5 d-flex'>
            <a href='update.php?id=$result[id]'  class='btn btn-primary bg-gradient p-1 m-1' type='submit' role='button' >Update</a>
            <a href='delete.php?id=$result[id]' onclick='return checkdelete()' class='btn btn-danger bg-gradient p-1 m-1'  type='submit' role='button' >Delete</a>

          </td>
        </tr>
        
      </tbody>";
        
    }
}else{
    echo "No records found!";
}
?>
</table>
    </div>

</body>
<script>
  function checkdelete(){
    return(confirm("Are you sure you want to delete this record?"));
  }
</script>
