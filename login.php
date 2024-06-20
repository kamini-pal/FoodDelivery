<?php
   $alrt = false;
   $err = false;
if ($_SERVER['REQUEST_METHOD'] == 'POST'){
   include 'db.php';
   $username = $_POST['username'];
   $password = $_POST['password'];
   
   $sql= "Select * from users where username='$username'";
   
        $ruslt = mysqli_query($conn, $sql);
        $num = mysqli_num_rows($ruslt);
      if($num == 1){
          while($row= mysqli_fetch_assoc($ruslt))
          {
              if (password_verify($password, $row['password'])){
                 
                  $alrt = true;
                  session_start();
                  $_SESSION['loggedin'] = true;
                  $_SESSION['username'] = $username;
                  header("location: order.php");
                }
                else{
                    $err=  '<script type="text/javascript"> alert("Invalid Information!") </script>';
                   
                   }
          }
}

else{
 $err=  '<script type="text/javascript"> alert("Invalid Information!") </script>';

}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login here</title>
    <style>
        
            
        #log{
    display: flex;
    flex-direction: column;
    padding: 3px 200px;
    justify-content: center;
    align-items: center;
    height: 400px;

}
#log::before{
    content: " ";
background: url('image1.jpg') no-repeat center center/cover;
position: absolute;
height: 90%;
width: 100%;
z-index: -1;
 /* opacity: 0.89;  */
top: 0;
left: 0;

}
        .main-wrapper{
              width: 500px;
               height: 550px;
               margin: 50px auto 0;
                   background: rgba(0,0,0,0.4);
                   text-align: center;
                    margin-top: 150px;
                 padding: 50px;
                    border: 5px solid white;
              -webkit-border-radius: 70px 0 70px 0;
                -moz-border-radius: 70px 0 70px 0;
           border-radius: 70px  0 70px 0;
                position: relative;
        }
    .avatar{
       border-radius: 50%;
       height: 100px;
       width: 100px;
       }
    .myform{
        width:450px;
        margin:0 auto;

    }
    .inputvalues{
        width:430px;
        margin:0px auto;
        padding:5px;
    }
    #login-btn{
        background-color:#27ae60;
        margin-top:10px;
        padding:8px;
        color:white;
        width:100%;
        text-align:center;
        font-size:18px;
        font-weight:bold;

        
    }
    .register-btn{
        background-color:#3498db;
        margin-top:20px;
        padding:8px;
        color:white;
        width:100%;
        text-align:center;
        font-size:18px;
        font-weight:bold;

    }
    .register-btn a{
        text-decoration: none;
        color: white;
    }
    .myform lebel{
        color: white;
    }
    .btn{
    padding: 6px 20px;
    border: 2px solid white;
    margin-top: 190px;
    margin-left: 600px;
    font-size: 1.3rem;
    border-radius: 15px;
    background-color: rgb(207, 89, 89);
    cursor: pointer;
    
}
.btn a{
    color: white;
    text-decoration:  none;
}
.btn:hover{
    background-color: black;
    color: brown;
    font-size:1.2rem ;
}
.tasty-food{
            height: 300px;
            width: 100%;
            margin-top:25px;
        }
        footer{
     background: black;
     color: white;
     
 }
    </style>
</head>
<body>

<?php
    if($alrt){
   echo '<div style="color:white;">
  <strong>Success!</strong>     <script type="text/javascript"> alert("you are logged in.") </script>
}
//   you are logged in.
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>';
    }
    if($err){
        echo '<div style="color:white;">
       <strong>error!</strong>'. $err.'
       <button type="button" class="close" data-dismiss="alert" aria-label="Close">
         <span aria-hidden="true">&times;</span>
       </button>
     </div>';
         }
       ?>


<section id="log">
<div class="main-wrapper">

<h2 style="color: white;">Login Here</h2>
<div style="border-radius: 50%;">
<img src="images (2).png" class="avatar">

<form class="myform" action="login.php" method="post">
<lebel><b>Username</b></lebel><br>
<input type="text" class="inputvalues" placeholder="Enter username" name="username"><br>
<lebel><b>Password</b></lebel><br>
<input type="text" class="inputvalues" placeholder="Enter password" name="password">
<br>
<input type="submit" id="login-btn" value="Login">
<br>
<button class="register-btn"><a href="http://localhost/website/sign.php">Sign up</a></button> 
   </form> 
</div>
</section>
<button class="btn"><a href="http://localhost/FoodDelivery/index.php"> Back</a></button>
<img src="food.jpg" class="tasty-food">
    <footer>
        <div style="text-align: center;">
         <br>
        
         
         copyright &copy; www.myonlineservices.com All rifgts reserved!
        </div>
    </footer>

</body>
</html>