<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order here</title>
    <style>
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
    header #nav1{
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
    padding: 2px 32px;
    border-radius: 50px;
    text-decoration: none;
    background-color:rgb(0,0,0,0.7);
}
#nav1 ul li a:hover
{
    color: black;
    background-color: white;
}
#home::before{
    content: " ";
background: url('barger.jpg') no-repeat center center/cover;
position: absolute;
height: 70%;
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
#home h1{
    color: white;
    text-align: center;
}
#home p{
    color: white;
    text-align: center;
    font-size: 1.5rem;
}

  .box{
    width: 1200px;
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
    grid-gap: 15px;
    margin: 0 auto;
  }
  .card{
    position: relative;
    width: 300px;
    height: 350px;
    background: #fff;
    margin: 0 auto;
    border-radius: 4px;
    box-shadow:0 2px 10px rgba(0,0,0,.2);
  }
  .card:before,
  .card:after
  {
    content:"";
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    border-radius: 4px;
    background: #fff;
    transition: 0.5s;
    z-index:-1;
  }
  .card:hover:before{
  transform: rotate(20deg);
  box-shadow: 0 2px 20px rgba(0,0,0,.2);
  }
  .card:hover:after{
  transform: rotate(10deg);
  box-shadow: 0 2px 20px rgba(0,0,0,.2);
  }
  .card .imgBx{
  position: absolute;
  top: 10px;
  left: 10px;
  bottom: 10px;
  right: 10px;
  background: #222;
  transition: 0.5s;
  z-index: 1;
  }
  
  .card:hover .imgBx
  {
    bottom: 80px;
  }

  .card .imgBx img{
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      object-fit: cover;
  }

  .card .details{
      position: absolute;
      left: 10px;
      right: 10px;
      bottom: 10px;
      height: 60px;
      text-align: center;
  }

  .card .details h2{
   margin: 0;
   padding: 0;
   font-weight: 600;
   font-size: 20px;
   color: #777;
   text-transform: uppercase;
  } 

  .card .details h2 span{
  font-weight: 500;
  font-size: 16px;
  color: #f38695;
  display: block;
  margin-top: 15px;
  
   } 
   .btn{
    padding: 6px 20px;
    border: 2px solid white;
    margin-top: 80px;
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
<header>
      <nav id="nav1">
       <ul>
        <li><a href="menu.php">View Menu</a></li>
        <li><a href="order.php">Order Here</a></li>
        <li><a href="cancel.php">Order Cancel</a></li>
        
    </ul> 
</nav>
<div class="toggle">
</div>
</header>
<section id="home">
       <h1 class="home1"><b style="color:red;">Food</b><i style="color:blue;">Gugu</i></h1>
        <p style="color:white;"><b>Food delivery </b> menu and Easy
             Fresh Delivery always</abbr></p>
        <p style="color:blue;">Food Online Ordering Restaurant directory...... !</p>
        
   </section>
   <section class="card1">
   <div class="box">
      <div class="card">
        <div class="imgBx">
            <img src="4-1.jpg" alt="images">
        </div>
        <div class="details">
            <h2>Pizza Famous<br><span>Pizza</span></h2>
        </div>
      </div>
    
       <div class="card">
         <div class="imgBx">
            <img src="noodle.png" alt="images">
         </div>
         <div class="details">
            <h2>Noodle Famous<br><span>Noodle</span></h2>
          </div>
       </div>

       <div class="card">
         <div class="imgBx">
            <img src="4-3.jpg" alt="images">
         </div>
         <div class="details">
            <h2>Ice-Creem Famous<br><span>Ice-Creem</span></h2>
          </div>
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