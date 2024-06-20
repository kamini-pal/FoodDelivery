<?php
session_start();
if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true){
    header("location: login.php");
    exit;
}
if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    $n = $_POST['name'];
    $fn = $_POST['fname'];
    $mn = $_POST['mobile'];
    $add = $_POST['add'];
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
        
    
    $sql= "INSERT INTO `order` (`Name`, `Food-Name`, `Mobile-No`, `Address`, `Message`, `Date`) VALUES
     ('$n', '$fn', '$mn', '$add', '$msg', current_timestamp())";
    
         $ruslt = mysqli_query($conn, $sql);
       if($ruslt){
        echo '<script type="text/javascript"> alert("Your Order is Done") </script>';
    }
    else{
      echo '<script type="text/javascript"> alert("Something Wrong?") </script>';
    }
}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>order here <?php $_SESSION['username']?></title>
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
background: url('dosa.jpeg') no-repeat center center/cover;
position: absolute;
height: 100%;
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
                 padding: 20px;
                    border: 5px solid white;
              -webkit-border-radius: 70px 0 70px 0;
                -moz-border-radius: 70px 0 70px 0;
           border-radius: 70px  0 70px 0;
                position: relative;
        }
    
 #contactbox{
     display: flex;
     justify-content: center;
     align-items: center;
     padding-bottom: 34px;
 }
 #contactbox input,
 #contactbox textarea{
     width: 100%;
     padding: 0.5rem;
     border-radius: 15px;
 }
 #contactbox form{
     width: 75%;
 }
 #contactbox label{
     font-size: 1.5rem;
     font-family: cursive;

 }

 .btn1{
    padding: 6px 20px;
    border: 2px solid white;
    margin-top: 20px;
    margin-left: 50px;
    font-size: 1.3rem;
    color:white;
    border-radius: 15px;
    background-color: rgb(207, 89, 89);
    cursor: pointer;
    
}
.btn1 a{
    color: white;
    text-decoration:  none;
}
.btn1:hover{
    background-color: black;
    color: brown;
    font-size:1.2rem ;
}
    .btn{
    padding: 6px 20px;
    border: 2px solid white;
    margin-top: 200px;
    margin-left: 640px;
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
 .mb1{
     font-size: 20px;
     color: red;
     
 }
    </style>
</head>
<body>

<div class="container">
<div class="alert alert-success" role="alert">
  <p class="mb">Whenever you need to, be sure <a href="logout.php" class="mb1"> Logout Here.</a></p>
</div>

</div>
<section id="log">
<div class="main-wrapper">
       <div id="contactbox">
           <form action="order.php" method="post">
               <div class="formgroup">
                   <label for="name"> Your Name:</label>
                   <input type="text" name="name" id="name" placeholder="Enter your name">
               </div>
               <div class="formgroup">
                <label for="name">Food Name:</label>
                <input type="text" name="fname" id="name" placeholder="Enter your Food Name">
            </div>
            <div class="formgroup">
                <label for="name">mobile no:</label>
                <input type="text" name="mobile" id="name" placeholder="Enter your mobile no">
            </div>
            <div class="formgroup">
                <label for="name">Address:</label>
                <input type="text" name="add" id="name" placeholder="Enter your address">
            </div>
            <div class="formgroup">
                <label for="name">Your Message:</label>
                <textarea name="message" id="message" cols="30" rows="10"></textarea>
                <button class="btn1">Order</button>
<!-- <button class="btn1"><a href="http://localhost/website/cancel.php"> Cancel</a></button> -->
            </div>
           </form>
       </div>
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