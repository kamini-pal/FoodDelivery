<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    $n = $_POST['name'];
    $e = $_POST['email'];
    $mn = $_POST['mobile'];
    $add = $_POST['address'];
    $msg = $_POST['message'];
        // create datebase
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "users"; 
    
    // create a connection
    $conn = mysqli_connect($servername, $username, $password, $database);
    if(!$conn){
        die("sorry! we faild to connect<br>");
    }
    else{
        
    
    $sql= "INSERT INTO `contact-us` (`name`, `email`, `mobile.no`, `address`, `message`, `date`) VALUES
     ('$n', '$e', '$mn', '$add', '$msg', current_timestamp())";
    
         $ruslt = mysqli_query($conn, $sql);
       if($ruslt){
       echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Success!</strong>Now your record is inserted successfully .
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>';
}
else{
    
    echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
    <strong>Error!</strong>your record was not inserted  .
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>';
}
}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact us</title>
    <style>
        .contact{
            width: 80%;
            min-height: 400px;
            margin-bottom: 50px;
            
        }
        .contact h1{
            color: rgb(0, 71, 0,0.64);
            text-align: center;
            padding: 50px;
            margin-top: -15px;
            
        }
        .contact-img{
            width: 40%;
            float: left;
        }
        .contact-img img{
            width: 90%;
            margin: 0px auto;
            margin-top: 90px;
            margin-left: 180px;
            
        }
        .contact-form{
            float: right;
            padding-bottom: 20px;
            width: 40%;
            /* border: 1px solid black; */
    background: radial-gradient(black, transparent);
        }
        .contact-form input{
            text-align: center;
     font-size: 1.5rem;
     font-family: cursive;
     border-top: none;
     padding-bottom: 10px;
     width: 80%;
     justify-content: center;
       }
       .contact-form textarea{
        width: 78%;
     padding: 0.5rem;
     border-radius: 15px;
     text-align: center;
     font-family: cursive;
     font-size: 1.5rem;
       }
      .contact-form .submit{
           width: 170px;
           border-radius: 10px;
           margin-left: 100px;
       }
       .btn{

           background-color: white;
           color: black;
           margin-left: 200px;
           width: 90px;
           font-size: 1.8rem;
        }
        .btn a{
            color: black;
    text-decoration:  none;
    
}

.welcome{
    font-size: 1.8rem;
    width: 300px;
    margin-left: 150px;
    
    
}
.tasty-food{
            height: 300px;
            width: 100%;
        }
         /* footer sections */
 footer{
     background: black;
     color: white;
     
 }
@media screen and (max-width: 678px) {
    
            .contact-form input{
                
                font-size: 1.3rem;
            }
            .contact h1{
                font-size: 2rem;
                margin-top: -10px;
            }
            .contact-img img{
                width: 60%;
            margin: 0px auto;
            margin-top: 100px;
            margin-left: 100px;
            
            }

        .contact-form input,textarea{
            font-size: 1rem;
            
        }
            
        }
        
    </style>
</head>
<body>
    <div class="contact">
        <h1 style="font-size: 2.8rem;">Contact Us</h1>
        <hr style="color: rgb(0, 71, 0,0.64); width: 90%;">
        <hr style="color: black; width: 80%;">
        <hr style="color: red; width: 70%;">
        <div class="contact1"> 
            <div class="contact-img">
                <img src="phone.jpg" alt="contact">
            </div>
            <div class="contact-form">
                <form action="contact.php" method="post">
                   <br><br>
                    <input type="text" placeholder = "Enter Name" name="name"><br>
                    <br><br>
                    <input type="email" placeholder="Enter E-mail" name="email"><br>
                   <br><br>
                   <input type="text" placeholder=" Enter Phone No" name="mobile"><br>
                   <br><br>
                    <input type="text" placeholder=" Enter Address" name="address"><br><br>
                    <textarea placeholder="message" cols="25" rows="3" name="message"></textarea> 
                    <br><br>
                    <input type="submit" value="send message" class="submit">
                </form>
            </div>
        </div>
        <div class="welcome"><h3>Your Welcome !!!</h3></div>
        <button class="btn"><a href="http://localhost/FoodDelivery/index.php"> Back</a></button>
    </div><br><br>
    <img src="food.jpg" class="tasty-food">
    <footer>
        <div style="text-align: center;">
         <br>
        
         
         copyright &copy; www.myonlineservices.com All rifgts reserved!
        </div>
    </footer>
</body>
</html>