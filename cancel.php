<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Order Cancel Here</title>
  <style>
#services1{
    margin: 34px;
    display: flex;
    
}
.services{
    display: flex;
    flex-direction: column;
    padding: 3px 200px;
    justify-content: center;
    align-items: center;
    height: 520px;

}
.services::before{
    content: " ";
background: url('fastfood.jpg') no-repeat center center/cover;
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
               height: 480px;
               margin: 50px auto 0;
                   background: rgba(0,0,0,0.4);
                   text-align: center;
                    margin-top: 50px;
                 padding: 50px;
                    border: 5px solid white;
              -webkit-border-radius: 70px 0 70px 0;
                -moz-border-radius: 70px 0 70px 0;
           border-radius: 70px  0 70px 0;
                position: relative;
        }
    .avatar{
       border-radius: 40%;
       height: 100px;
       width: 100px;
       }
    .myform{
        width:400px;
        margin:0 auto;

    }
    .inputvalues{

        background-color: rgb(222, 228, 230);
            border-radius: 6px;
            border-color: rgb(65, 55, 55);
            font-size: 25px;
            padding: 8px;
            margin: 5px;
    }
    .cancelbtn{
        background-color:red;
        margin-top:10px;
        padding:8px;
        color:white;
        width:80%;
        text-align:center;
        font-size:18px;
        font-weight:bold;
        
    }
    
    .myform lebel{
        color: white;
    }
    .btn{
    padding: 6px 20px;
    border: 2px solid white;
    margin-top: 30px;
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
/* color:white; */
margin-top:80px;
font-family: cursive;}
  </style>
</head>
<body>
<section class="services">
       <h1 class="home1 ">Are You Sure? You Want to Cancel Food Order! </h1>


<div class="main-wrapper">

<h2 style="color: white;">Order Cancel Here</h2>
<div style="border-radius: 40%;">
<img src="cancel2.png" class="avatar">

<form class="myform" action="cancel.php" method="post">
<lebel><b>Mobile Number</b></lebel><br>
<input type="text" class="inputvalues" placeholder="Enter Your Mobile Number" name="phone"><br>
<input type="submit" class="cancelbtn" name="delete" value="Cancel"/>
   </form> 
</div>

   </section>
   <section class="services">
   <h1 class="home1 " style="color:black; font-size:50px;">Favourite Food </h1>
   <div id="services1">
           <div class="box">
               <img src="noodle.png" alt="">
               <h2 class="home2 "> Fast Food </h2>
               
           </div>
        <div class="box">
            <img src="vegetable.jpg" alt="">
            <h2 class="home2"> Bulk Food </h2>
            
        </div>
        <div class="box">
            <img src="pizza.jpg" alt="">
            <h2 class="home2"> Junk Food </h2>
           
        </div>
        <div class="box">
            <img src="samosa.jpg" alt="">
            <h2 class="home2"> Junk Food </h2>
           
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

<?php
$connection = mysqli_connect("localhost", "root", "");
$db = mysqli_select_db($connection, 'users');
if(isset($_POST['delete']))
{
    $mobile = $_POST['phone'];
    $query = "DELETE FROM `order` WHERE `order`.`Mobile-no` = '$mobile'";
    $query_run = mysqli_query($connection,$query);
    if($query_run)
    {
      echo '<script type="text/javascript"> alert("Food Order is Cancel") </script>';
    }
    else{
      echo '<script type="text/javascript"> alert("Food Order is not cancel") </script>';
    }
    
}

?>