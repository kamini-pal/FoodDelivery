<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    $n = $_POST['name'];
    $add = $_POST['address'];
    $msg = $_POST['message'];
        // create datebase
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "foodorder"; 
    
    // create a connection
    $conn = mysqli_connect($servername, $username, $password, $database);
    if(!$conn){
        die("sorry! we faild to connect<br>");
    }
    else{
        
    
    $sql= "INSERT INTO `leavemessage` (`Name`, `Address`, `Message`, `Date`) VALUES ('$n', '$add', '$msg', current_timestamp())";
    
         $ruslt = mysqli_query($conn, $sql);
       if($ruslt){
       echo "your Message is send successfully";
}
else{
    
    echo "something wrong!";
}
}
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Food Delivery Online Services</title>
    <link rel="stylesheet" media="screen and (max-width:1200px)" href="responce.css">
    <!-- <link rel="stylesheet" href="fd.css"> -->
    <style>
    *{
    margin: 0px;
    padding: 0px;
}
/* css variable */
:root{
    --nav1-height:59px;
}
/* toggle menubar */
.toggle{
    color: black;
    float: right;
    line-height: 50px;
    cursor: pointer;
    display: none;
}
@media (max-width: 991px)
{
    header{
        padding: 0 150px;
    }
    .toggle{
        display: block;
        text-align: center;
    }
    header nav1{
        position: absolute;
        width: 100%;
        height: calc(100vh - 50px);
        background: #333;
        top: 50px;
        left: 0;
        transition: 0.5s;
    }
    header #nav1 ul{
        display: block;
        text-align: center;
    }
    
}
#logo{
    display: inline-block;
    position: absolute;
    left: 34px;
    top: 5px;
    
    }
    #logo img{
    width: 70px;
    margin-left: 30px;
    
    }
/* navigation bar coding */
#nav1{
    display: flex;
    align-items: center;
    position: relative;
}
 #nav1::before{
content: " ";
background-color: black;
position: absolute;
height: 100%;
width: 100%;
z-index: -1;
 opacity: 0.4; 
top: 0;
left: 0;

}
#nav1 ul{
    display: flex;
    list-style: none;
    font-size: 25px;
    margin-left: 15%;
    margin-top: 1%;
    padding-bottom: 2%;
    font-family: cursive;
    
}
#nav1 ul li a{
    color: white;
    display: block;
    padding: 3px 22px;
    border-radius: 20px;
    text-decoration: none;
}
#nav1 ul li a:hover
{
    color: black;
    background-color: white;
}



/* home section coding */
#home{
    display: flex;
    flex-direction: column;
    padding: 3px 200px;
    justify-content: center;
    align-items: center;
    height: 360px;

}
#home::before{
    content: " ";
background: url('image3.jpg') no-repeat center center/cover;
position: absolute;
height: 75%;
width: 100%;
z-index: -1;
 /* opacity: 0.89;  */
top: 0;
left: 0;

}
/* utility class */
.home1{
    font-size: 2.5rem;
    padding: 10px;
}
.home2{
    font-size: 2.5rem;
    padding: 12px;
}
#home h1{
    color: white;
    text-align: center;
}
#home p{
    color: white;
    text-align: center;
    font-size: 1.5rem;
}
.btn{
    padding: 6px 20px;
    border: 2px solid white;
    margin: 17px;
    font-size: 1.3rem;
    border-radius: 15px;
    background-color: rgb(207, 89, 89);
    color: white;
    cursor: pointer;
}
.btn:hover {
    background-color: white;
    color: black;
    font-size:1.2rem ;
}
 .btn a{
     text-decoration: none;
     color: white;
 }
 .btn a:hover{
     color: black;
     font-weight: bold;
 }
/* services codeing */
#services1{
    margin: 34px;
    display: flex;
    
}
#services1 .box{
    border:  2px solid black;
    padding: 34px;
    margin: 3px 6px;
    border-radius: 20px;
    background-color: #f2f2f2;

}
#services1 .box img{
    height: 150px;
    margin: auto;
    display: block;
}
#services1 .box p{
    font-family: cursive;
}
.home2{ text-align: center;
font-family: 'Courier New', Courier, monospace}
.home1{ text-align: center;
font-family: cursive;}
/* client section coding */
.clients{
    display: flex;
    justify-content: center;
    align-items: center;
    padding: 16px;
    

}
#clientsec{
    height: 260px;
}
    
    /* border: 2px solid black; */

#clientsec::before{
    content: " ";
    position: absolute;
    width: 100%;
    height: 45%;
    z-index: -1;
    opacity: 0.8;
    background: url('juice.jpeg') no-repeat center center/cover;
}
  

.clients img{
    height: 100px;
    border-radius: 50%;
    padding: 10px;
}
/* contact sections */
#contact{
    position: relative;
}
 #contact::before{
    content: " ";
    position: absolute;
    width: 100%;
    min-height: 500px;
    z-index: -1;
    opacity: 0.9;
    background: url('finger.jpeg') no-repeat center center/cover;
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
     width: 40%;
 }
 #contactbox label{
     font-size: 1.5rem;
     font-family: cursive;

 }
 /* send buttons coding */
 .btn1{
    padding: 6px 20px;
    border: 2px solid white;
    margin: 17px;
    font-size: 1.3rem;
    border-radius: 15px;
    background-color: rgb(41, 30, 30);
    color: white;
    cursor: pointer;
    font-family: cursive;
    margin-left: 250px;
}
.btn1:hover{
    background-color: white;
    color: black;
    font-size:1.2rem ;
}
/* tasty food images */
.tasty-food{
    height: 300px;
    width: 100%;
}
 /* footer sections */
 footer{
     background: black;
     color: white;
    
 }


    </style>
</head>
<body>
    <header>
        <div id="logo">
            <img src="fdlogo.png" alt="myFood.com">
        </div>
               <nav id="nav1">
       <ul>
        <li><a href="#">Home</a></li>
        <li><a href="about.php">About us</a></li>
        <li><a href="contact.php">Contact us</a></li>
        <li><a href="service.php">Services</a></li>
        <li><a href="login.php">Log in</a></li>
        <li><a href="sign.php"> Sign up</a></li>
 
    </ul> 
</nav>
<div class="toggle">
</div>
</header>
   <section id="home">
       <h1 class="home1">welcome to Online  Services</h1>
        <p><b>Are You hungry? </b> Don't wait!!!&nbsp;Lets start to order food now
             Fresh Delivery always</abbr></p>
        <p>Food Delivery do your door fresh food and works !</p>
        <!-- <button class="btn"><a href="menu.php">Food menu</a></button> -->
        <button class="btn"><a href="cancel-order.php">Order Now</a></button>
   </section>
   <br><br>
   <section class="services">
       <h1 class="home1 ">Catering Services</h1>
       <div id="services1">
           <div class="box">
               <img src="pizza1.jpg" alt="">
               <h2 class="home2 "> Fast Food </h2>
               <p>The  food served in fast food restaurantspag in typically part of a "meat-sweet diet"
                   offered from a limited menu cooked in bulk in advance and kept hot, 
                   finished and packaged to order , and usually available for take away,
                   through seating may be provided!</p>
           </div>
        <div class="box">
            <img src="mixfood.jpg" alt="">
            <h2 class="home2"> Bulk Food </h2>
            <p>Bulk foods are food items offered in large quanitities , which can be
                purchased in large, bulk lots or transferred from a bulk container into a smaller
                container for purchase . Bulk foods may be priced less compared to packaged foods 
                bcoz they are typically packaged!</p>
        </div>
        <div class="box">
            <img src="bargar3.jpg" alt="">
            <h2 class="home2"> Junk Food </h2>
            <p>Junk food is unhealthful food that is high in calories from sugar or fat,
                with little dietary fiber, portein,vitamins,minerals,or other important
                froms of nutritional value. some high protein foods,like meat prepared with
                saturated fat, may be considered junk food!</p>
        </div>
    </div>

   </section>
   <section id="clientsec">
       <h1 class="home1">Follow on social meadia</h1>
       <div class="clients">
           <div class="clients1">
               <img src="facebook1.png" alt="our client">
           </div>
        <div class="clients1">
            <img src="twitter1.png" alt="our client">
        </div>
        <div class="clients1">
            <img src="insta1.jpg" alt="our client">
        </div>
         <div class="clients1">
            <img src="link1.png" alt="our client">
        </div> 
    </div>
   </section><br><br><br>
   <section id="contact">
       
       <h1 class="home1">Leave us message</h1>
       <div id="contactbox">
           <form action="food.php" method="post">
               <div class="formgroup">
                   <label for="name">Name:</label>
                   <input type="text" name="name" id="name" placeholder="Enter your name">
               </div>
    
            <div class="formgroup">
                <label for="name">Address:</label>
                <input type="text" name="add" id="name" placeholder="Enter your Address">
            </div>
            <div class="formgroup">
                <label for="name">Message:</label>
                <textarea name="message" id="message" cols="30" rows="10"></textarea>
                <button class="btn1">Send</button>
            </div>
           </form>
       </div>
       <img src="food.jpg" class="tasty-food">
   </section>
   <footer>
       <div style="text-align: center;">
        <br>
        <!-- <h5 style="float: left;">.Phone No: &nbsp; 8853985583</h5><br><br>
        <h5 style="float: left;">.E-mail: &nbsp; kaminipal2001@gmail.com</h5><br><br>
        <h5 style="float: left;">.Location: &nbsp; Farrukhabad</h5><br><br> -->
        
        copyright &copy; 2020 www.myonlineservices.com All rights reserved!
       </div>
   </footer>
</body>
</html>