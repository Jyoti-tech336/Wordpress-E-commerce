 <?php
$server_name = "localhost";
$db_username = "root";
$db_password ="";
$db_name ="ecommerce";
     $connection=mysqli_connect($server_name,$db_username,$db_password);
      $dbconfig = mysqli_select_db($connection,$db_name);
if($dbconfig)
{
  //echo "Database Conected";  
}
else{
    echo'<div class="container">
    <div class="row">
        <div class="col-md-8 mr-auto text-center py-5 mt-5">
            <div class="card">
                <div class="card-body">
                    <h1 class="card-title bg-danger text-white">Data base connection falied</h1>
                    <h2 class="card-title">Database failure</h2>
                    <p class="card-text">The Page you searching for is not Available.</p>
                    <a href="#" class="btn btn-primary">:(</a>
                </div>
            </div>
        </div>
    </div>
</div>';
}
?>
