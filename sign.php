<?php
    $alrt = false;
    $err = false;
if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    include 'db.php';
    $username = $_POST['username'];
    $e = $_POST['e1'];
    $mn = $_POST['m1'];
    $password = $_POST['password'];
    $cpass = $_POST['p2'];

    $existssql = "SELECT * FROM `users` WHERE username = '$username'";
    $ruslt = mysqli_query($conn, $existssql);
    $numexists = mysqli_num_rows($ruslt);
    if($numexists >0){
        $err = '<script type="text/javascript"> alert("username Already Exists")
         </script>';
        
    }
       else{
                
    if(($password == $cpass)){
        $hash = password_hash($password , PASSWORD_DEFAULT);
    $sql= "INSERT INTO `users` (`username`, `Email-Address`, `Phone-No`, `password`, `Date`) VALUES
     ('$username', '$e', '$mn', '$hash', current_timestamp())";
    
         $ruslt = mysqli_query($conn, $sql);
       if($ruslt){
               $alrt = true;
       
}
}
else{
    $err ='<script type="text/javascript"> alert("password do not match! please enter the confirm password") </script>';
}
}
}
?>
<html>
    <head>
    <title>sign-up form</title>
    
    <style>
       #log1{
    display: flex;
    flex-direction: column;
    padding: 3px 200px;
    justify-content: center;
    align-items: center;
    height: 400px;

}
#log1::before{
    content: " ";
background: url('image5.jpg') no-repeat center center/cover;
position: absolute;
height: 90%;
width: 100%;
z-index: -1;
 /* opacity: 0.89;  */
top: 0;
left: 0;

}
.farea{
    width: 500px;
    height: 350px;
    margin: 50px auto 0;
    background: rgba(0,0,0,0.4);
    text-align: center;
    margin-top: 60px;
    padding: 50px;
    border: 5px solid white;
    -webkit-border-radius: 70px 0 70px 0;
    -moz-border-radius: 70px 0 70px 0;
    border-radius: 70px  0 70px 0;
    position: relative;
    }
    .logo{
    width: 530px;
    height: 400px;
    top: 40%;
    left: 50%;
    color: white;
    position: absolute;
    transform: translate(-60%,-60%);
    box-sizing: border-box;
    }
                    
        .tab{
            background-color: rgb(222, 228, 230);
            border-radius: 4px;
            border-color: rgb(65, 55, 55);
            font-size: 15px;
            padding: 8px;
            margin: 5px;

        }

.btn1{
    padding: 6px 20px;
    border: 2px solid white;
    margin-top: 40px;
    margin-left: 80px;
    font-size: 1.3rem;
    border-radius: 15px;
    background-color: rgb(41, 30, 30);
    color: white;
    cursor: pointer;
    font-family: cursive;
    
}
.btn1:hover{
    background-color: white;
    color: black;
    font-size:1.2rem ;
}

        .btn{
    padding: 6px 20px;
    border: 2px solid white;
    margin-top: 200px;
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
     td{
         color:white;
     }   
    </style>
    </head>
    <body>
      <?php
    if($alrt){
   echo '<div style="color:white;">
  <strong>Success!</strong>
   <script type="text/javascript"> alert(" Your account is created now! and you can login.") </script>
  
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
        <section id="log1">
    <div class="logo">
    
    <form class="farea" action="sign.php" method="post">
    <table>
    <tr>
    <td>
    Username:
    </td><td> <input type="text" placeholder="user name" class="tab" name="username"></td></tr>
    <tr><td><br>
        E-mail Address:
        </td><td> <input type="E-mail Address" placeholder="   @gmail.com" class="tab" name="e1"></td></tr>
    <tr><td><br>
    Phone No:
        </td><td> <input type="phone" placeholder="+91 " class="tab" name="m1"></td></tr>
    <tr><td><br>
    password: 
    </td><td> <input type="password" placeholder="........" class="tab" name="password"></td></tr>
    <tr><td>
        <tr><td>
           confirm password: 
            </td><td> <input type="password" placeholder="........" class="tab" name="p2"></td></tr>
    
    <tr><td> 
        
    <input type="submit" value="Sign up" class="btn1" >
    </td> <td>
    <input type="reset" value="Reset" class="btn1">
    </td>
    </tr>
    </table>
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
    
    
    
    
    
    
    