<?php include('includes/header.php');
include('includes/navbar1.php');
include('includes/navbar2.php');
$username=$_SESSION['first_name'];

//$_SESSION['first_name']=$email_pass['first_name'];
$q="select * from registration where first_name='$username'";
$result= mysqli_query($connection,$q);
$fetch= mysqli_fetch_array($result);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <style>
       
       
</style>
</head>
<body>
  <script>
  </script>
   <div class="container user-profile">
  <div class="row">
    <div class="col-lg-12">
      <div class="well well-sm">
        <div class="user-profile-card">
          <div class="user-profile-header">
          </div>
          <div class="user-profile-avatar text-center">
         <?php echo "<img src='image/'".$fetch['image']."'>";?>
           <?php //echo '<img src="../image/'.$fetch['image'].'"width="100px;" height="100px;" alt="image">'?>
         
            </div>
              
              <div class="col-lg-12 d-flex justify-content-center" >
             
           
            <div class="card" style="width: 50rem;">
  
  <div class="card-body">
    <h5 class="card-title" style="text-align:center">MY PORFILE</h5>
    <p class="card-text"> <form action="login.php" method="post" >

            <div class="form-group">
              <label class="font-weight-bold">Username<span class="text-danger">*</span></label>
              <input type="text" name="name" value="<?php echo  $_SESSION['first_name'];?>" class="form-control"  style="width: 100%;">
            </div>
            <div class="form-group">
              <label class="font-weight-bold">Contact <span class="text-danger">*</span></label>
              <input type="text" name="phone"  value="<?php echo  $fetch['contact'];?>" class="form-control" >
            </div>
            <div class="form-group">
              <label class="font-weight-bold">Address <span class="text-danger">*</span></label>
                 <textarea type="text" name="address"  rows="4" cols="50" id="address" class="form-control" required><?php echo  $fetch['address'];?></textarea>
            
            </div>
            <div class="form-group">
              <label class="font-weight-bold">Email <span class="text-danger">*</span></label>
              <input type="email" name="email" value="<?php echo  $fetch['email'];?>" class="form-control">
            </div>
            <div class="form-group">
              <label class="font-weight-bold">Password <span class="text-danger">*</span></label>
              <input type="password" name="password" value="<?php echo  $fetch['password'];?>" class="form-control">
            </div>
            
            <div class="form-group">
              <input type="submit" name="login" value="Edit" class="btn btn-block btn" style="background: rgb(2,0,36);
background: linear-gradient(90deg, rgba(2,0,36,1) 0%, rgba(237,20,57,1) 47%, rgba(255,0,82,1) 100%); border-radius: 20px; color: white">
            </div>
         
      
          </form>
  </div>
  
  
</div>
            </div>    <!-- <br />
            </div>
            <div class="panel-footer"></div>
            <div class="container">
              <p>
                <small>Email</small>
                email@example.com
              </p>
              <p>
                <small>Email</small>
                email@example.com
              </p>
            </div>
          </div>
          <div class="panel-footer"><a href="./my_account_edit" data-original-title="Edit My Profile" data-toggle="tooltip" type="button" class="btn btn-sm btn-primary"><i class="glyphicon glyphicon-edit"></i> Edit My Profile</a></div>
        </div>-->
          </div>
      </div>
    </div>
  </div>
</div>
</body>
</html>
