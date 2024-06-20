<?php

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About us</title>
    <style>
        .about{
            width: 100%;
            min-height: 800px;
            background-image: url(image2.jpg);
            background-size: cover;
            background-position: center;
            text-align: center;
            background-attachment: fixed;
        }
        .about h1{
            color: blue;
            padding: 50px 0px;
            margin-bottom: -40px;
            font-size: 2.8rem;
            font-family: cursive;
        }
        .about1
        {
            width: 80%;
            margin: 0px auto;
            font-size: 1.8rem;
            color: white;
            font-family: cursive;
            font-style: italic;
            line-height: 2;
        }
        .btn{
    padding: 6px 20px;
    border: 2px solid white;
    margin: 17px;
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
        }
         /* footer sections */
 footer{
     background: black;
     color: white;
     
 }
        @media screen and (max-width: 380px;) {
            .about1 p{
                line-height: 1.5;
                font-size: 1.3rem;
                            }
            .about h3{
                font-size: 2rem;
                margin-right: 400px;
                
            }
            
        }

    </style>
</head>
<body>
    <div class="about">
        <h1 style="color: orange;">About us</h1>
        <hr style="color: rgb(0, 71, 0,0.64); width: 90%;">
        <hr style="color: black; width: 80%;">
        <hr style="color: red; width: 70%;">
        <div class="about1">
            <h1>The best food delivery</h1>
        <p>Statistics show us that the food delivery market is growing at a tremendous pace,
             with online services ahead of offline services. More and more people prefer to order food over 
             the Internet with minimal distraction from other activities and maximum time savings.
             It’s inspiring businesses to create food delivery websites.
             The traditional model of food delivery is preferred by consumers. By the conventional model, we mean the process when a customer places an order with a local restaurant and waits for the order to be delivered to the door. Such a model counts to 90% of online food market share, where three-quarters of orders are placed by phone.

             Considering the statistics, we can conclude that the restaurant industry is developing rapidly and becoming more competitive.
             
             Have a project in mind</p>
        </div>
        <h3 style="margin-left: 600px; color: white; font-size: 2.9rem;">Your Welcome !!!</h3>
        <button class="btn"><a href="http://localhost/FoodDelivery/index.php"> Back</a></button>
    </div><hr>
    <img src="food.jpg" class="tasty-food">
    <footer>
        <div style="text-align: center;">
         <br>
         
         copyright &copy; www.myonlineservices.com All rifgts reserved!
        </div>
    </footer>
</body>
</html>