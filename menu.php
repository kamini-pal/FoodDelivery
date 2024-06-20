<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Food menu</title>
</head>

<style>
body, html {
  height: 100%
}
body,h1,h2,h3,h4,h5,h6 {
  font-family: "Amatic SC", sans-serif;
}
.wrapper {
  color: black;
  font-family: cursive;
  padding-top: 40px;
  
}
.bgimg {
  background-repeat: no-repeat;
  background-size: cover;
  background-image: url("smosa.jpg");
  min-height: 90%;
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
     padding: 9px 20px;
 }  
 .view {
   text-decoration: none;
   color: rgb(14, 13, 13);
   font-size: 25px;
   margin-left: 50%;
   background-color: rgb(240, 186, 105);
   width: 30px;
   height: 10px;
   font-family: cursive;
   border-radius: 5px;
 }      
 #menu{
   background-color: black;
   color: white;
 }
 #menu h1{
   text-align: center;
   font-size: 35px;
   padding-top: 64px;
 }
 #m1{
   /* text-align: center; */
   margin-left: 30%;
 }
 #myMap{
   height: 50%;
   
 }
 .thali{
   border: 2px solid rgb(212, 182, 10);
   width: 80%;
   border-radius: 30px;
 }
 
   #M1{
   font-size: 20px;
 }
 
 .btn{
    padding: 6px 20px;
    border: 2px solid white;
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
</style>
<body>


<!-- Header with image -->
<header class="bgimg w3-display-container w3-grayscale-min" id="home">

        <center>
            <h1 class="wrapper">Welcome to my <b style="color: blanchedalmond; font-size: 20px;">tasty food</b> restuarant</h1>

        </center>
    
  <div class="w3-display-bottomleft w3-padding">
    <span class="w3-tag w3-xlarge">Open from 10am to 12pm</span>
  </div>
  <div class="w3-display-middle w3-center">
    <span class="w3-text-white w3-hide-small" style="font-size:100px; color: cornsilk;">Thin<br>CRUST PIZZA</span>
    <span class="w3-text-white w3-hide-large w3-hide-medium" style="font-size:60px"><b>Thin<br>CRUST BURGER</b></span>
    <p><a href="#menu" class="view">View menu</a></p>
  </div>
</header>

<!-- Menu Container -->
<div class="w3-container w3-black w3-padding-64 w3-xxlarge" id="menu">
  <div class="w3-content" id="menu1">
  
    <h1 class="w3-center w3-jumbo" style="margin-bottom:64px; color: brown; ">THE MENU</h1>
  </div><hr>

    <div id="Pizza" class="w3-container menu w3-padding-32 w3-white">
      <h2 style="text-align: center;"><b>STARTERS</b> <br>
        <p style="margin-right: 40%; color: tomato;" ><pre style="margin-right: 40%; color: tomato;"> VEG                                             NON VEG</pre></p></h2>
      <p class="w3-text-grey" id="m1"><pre>

        veg Manchuriun                 50rs/-                                           chicken                    150rs/-
        veg 65                         60rs/-                                           chicken Manchuriun         120rs/-      
        veg Manchuriun wet             50rs/-                                           pepper chicken             150rs/-
        Aloo 65                        50rs/-                                           chicken Lollipop           130rs/-
        Paneer 65                      60rs/-                                           chilli chicken             150rs/-
        chilli panner                  90rs/-                       
      </pre>
    </p>
    <hr>
    <h2 style="text-align: center;"><b>TANDOOR STARTERS</b> <br>
      <p style="margin-right: 40%; color: tomato;" ><pre style="margin-right: 40%; color: tomato;"> VEG                                             NON VEG</pre></p></h2>
    <p class="w3-text-grey" id="m1"><pre>

      panner Tikka kabab                 150rs/-                                           chicken                    150rs/-
      Tandoori chicken                   160rs/-                                           chicken Manchuriun         120rs/-      
      Tangdi kabab                       200rs/-                                           pepper chicken             150rs/-
      Malai kabab                        150rs/-                                           chicken Lollipop           130rs/-
      chicken Tikka kabab                180rs/-                                           chilli chicken             150rs/-
      chicken Hariyali kabab             190rs/-                       
    </pre>
  </p>
  <hr>
  <h2 style="text-align: center;"><b>MAIN FOOD</b> <br>
    <p style="margin-right: 40%; color: tomato;" ><pre style="margin-right: 40%; color: tomato;"> VEG                                             NON VEG</pre></p></h2>
  <p class="w3-text-grey" id="m1"><pre>

    Dal fry                            70rs/-                                           chicken Curry masala                    150rs/-
    Mix veg                            80rs/-                                           Kadai Chicken                           120rs/-      
    Allo Gobi Masala                   80rs/-                                           Methi chicken                           170rs/-
    chana masala                       50rs/-                                           butter chicken masala                   190rs/-
    Capsicum Masala                    80rs/-                                           chicken Tikka masala                    150rs/-
    Butter Paneer                      110rs/-                                          Punjabi chicken                         170rs/-
    Kadai Paneer                       110rs/-                                          Tandoori chicken masala                 120rs/-
    Palak Paneer                       120rs/-                                          Lababdar chicken                        170rs/-           
    Kaju paneer                        150rs/-                                          Achari chicken                          150rs/-
    Paneer Tikka Masala                140rs/-                                          Afgani chicken                          170rs/-     
    Paneer Dilrula                     140rs/-
    Paneer Lababdar                    150rs/- 
   </pre>
</p>
      <hr>
      <h2 style="text-align: center;"><b>RICE
      </b> <br>
        <p style="margin-right: 40%; color: tomato;" ><pre style="margin-right: 40%; color: tomato;"> VEG                                             NON VEG</pre></p></h2>
      <p class="w3-text-grey" id="m1"><pre>
  
        Veg Fried Rice                     50rs/-                                           Egg Fried Rice                       50rs/-
        Aalu Fried Rice                    60rs/-                                           Schezwan chicken fried Rice          60rs/-      
        Jeera Rice                         70rs/-                                           chicken fried Rice                   70rs/-
        Lemon Rice                         50rs/-                                           
        Paneer Fried Rice                  80rs/-                                           
        Kaju Fried Rice                    90rs/-  
        Veg Biriyani                       80rs/-
        Veg Paneer Biriyani                90rs/- 
      </pre>
    </p>
      
      <hr>
      <h2 style="text-align: center;"><b>FORMER FOOD</b> <br>
        <p style="margin-right: 40%; color: tomato;" ><pre style="margin-right: 40%; color: tomato;"> Lunch/Dinner                                             FAST FOOD</pre></p></h2>
      <p class="w3-text-grey" style="font-size: 30px;" id="m1" ><pre>
    
        Mater Paneer                       100rs/-                                          Sandwhich                               50rs/-
        Shahi Paneer                       120rs/-                                          Pizza                                   120rs/-      
        Dum Aloo                           80rs/-                                           Bugger                                  70rs/-
        Dal Tadka                          50rs/-                                           Peteez                                  96rs/-
        Chole                              80rs/-                                           finger                                  50rs/-
        Chapati                            30rs/-                                           Aloo Tikki                              70rs/-
        Paratha                            40rs/-                                           Samosas                                 50rs/-
        Butter Roti                        120rs/-                                          Momos                                   70rs/-           
        Paneer Dosa                        150rs/-                                          Pakora/Bhaji                            50rs/-
        Cheese Sandwhich                   140rs/-                                          Butter chicken                          170rs/-     
        Tea                                40rs/-                                           Biryani                                 90rs/- 
        Masala Tea                         50rs/-                                           Chole Bhature                           60rs/-
        Green Tea                          50rs/-                                           Pasta                                   30rs/-
        Coffee                             40rs/-                                           Buttter Maggie                          40rs/-
        Soft Drink                         30rs/-                                           
        Packaged water                     30rs/-
        Spring Roll                        70rs/-
        Laccha Omaon                       50rs/-
        Fried Rice                         60rs/-
        Paneer Paratha                     90rs/-

       </pre>

    </p>
    <h1>Thali</h1>
    <center>
    <div class="thali">
      <pre>
      <h3 style="text-align: center; color: brown;">Dcluse Thali &nbsp;120rs/-</h3>
           (Dal Tadka + Mix-veg + 4 Tawa Roti or 2 Paratha + Rice + Papad + Pickle + Chutny )
      <h3 style="text-align: center; color: brown;">Execusive Thali &nbsp;160rs/-</h3>
           (Paneer Sabji + Dal Makhani + 2 Tawa Roti + 2 paratha + Rice Pickle + Chutny + Raita)
     <h3 style="text-align: center; color: brown;">Sasural Thali &nbsp;200rs/-</h3>    
          (Paneer Sabji + Dal Makhani + 2 Tawa Paratha + 2 StuiTed Paratha + Pulavo + Pickle 
                + Papad + Chutny + Salad + Raita + Sweet)                        

        </pre>
    </div>
      </center>
      

      
    </div>

  </div>


<!-- Image of location/map -->
<img src="image4.jpg" class="w3-image w3-greyscale" style="width:100%;" id="myMap">


<!-- Footer -->

</div><br>

<button class="btn"><a href="http://localhost/FoodDelivery/index.php"> Back</a></button>
<img src="food.jpg" class="tasty-food">
</section>
<footer>
<div style="text-align: center;">
    copyright &copy; www.myonlineservices.com All rifgts reserved!
</div>
</footer>

<script>
// Tabbed Menu
function openMenu(evt, menuName) {
  var i, x, tablinks;
  x = document.getElementsByClassName("menu");
  for (i = 0; i < x.length; i++) {
     x[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablink");
  for (i = 0; i < x.length; i++) {
     tablinks[i].className = tablinks[i].className.replace(" w3-red", "");
  }
  document.getElementById(menuName).style.display = "block";
  evt.currentTarget.firstElementChild.className += " w3-red";
}
document.getElementById("myLink").click();
</script>

</body>
</html>

</body>
</html>