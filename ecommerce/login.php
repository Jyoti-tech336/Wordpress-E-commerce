 <?php

session_start();
include'connection.php';

            if(isset($_POST['login'])){
             $email = $_POST['email'];
             $password = $_POST['password'];
                
                $email_search = "select * from registration  where email ='$email'";
              //  echo $email_search ;
                $query = mysqli_query($connection,$email_search);
              
                $email_count = mysqli_num_rows($query);
               // echo $email_count;
                if($email_count){
                    $email_pass = mysqli_fetch_assoc($query);
                    $db_pass = $email_pass['password'];
                  //  echo $db_pass;
                    $_SESSION['first_name']=$email_pass['first_name'];
                  //  $_SESSION['email']=$email;
                    
                  
                   $pass_decode = password_verify($password,$db_pass);
                    if($pass_decode){
                         echo "<script>alert('sucessfully login');window.location.href='index.php';</script>";
                        
                    }else{
                         echo "<script>window.location.href='index.php';</script>";
                    }
                    
                   
                }else{
                    echo "<script>alert('invalid email');window.location.href='index.php';</script>";
                }
                
                
            }  
            
        
            
            ?>
          
            <?php echo '<img src="image/'.$fetch['image'].' alt="image">';?>