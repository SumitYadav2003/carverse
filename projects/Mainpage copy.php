<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="main.css"> -->
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel="stylesheet">
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>


</head>
<body>

<header>
    
    <div class="nav container">
      <a href="#" class="logo">Car<span>Verse</span></a>
    <i class='bx bx-menu' id="menu-icon"></i>

    <!-- <a href="#" class="logo">Car<span>Verse</span></a> -->
    <ul class="navbar">
    <li><a href="#home" class="active">Home</a></li>
    <!-- <li><a href="#cars">Cars</a></li> -->
    <li><a href="#about">About</a></li>
    <li><a href="service.html">Services</a></li>
    <li><a href="#blog">Blog</a></li>
    <li><a href="contactus.html">Contact</a></li>
    <li><a href="admin_login.php">Admin</a></li>
    <li class="dropdown">
      <a href="#" class="dropbtn">User</a>
      <div class="dropdown-content">
          <a href="user_login.php">Login</a>
          <a href="logout.php" onclick="return confirm('Logout from the website?');">Logout</a>
          <a href="user_register.php">Register</a>
          <a href="update_user.php">Update</a>
      </div>
  </li>
    <!-- <li><a href="update_user.php">Update</a></li> -->

     <!-- <li><a href="logout.php">LOGOUT</a></li>  -->
    <!-- <li><a href="logout.php" onclick="return confirm('logout from the website?');">logout</a> </li> -->
    <!-- <a href="logout.php" class="design" onclick="return confirm('logout from the website?');"> <ion-icon name="log-out-outline" class="design" ></ion-icon> </a> -->

    </ul> 
</div>
</header>
</body>

<style>
  /* Style the dropdown menu */
.dropdown {
    position: relative;
    display: inline-block;
}

/* Style the dropdown button */
.dropbtn {
    color: white;
    background-color: none; /* Change to your desicrimson background color */
    padding: 14px 16px;
    text-decoration: none;
}

/* Style the dropdown content (hidden by default) */
.dropdown-content {
    display: none;
    position: absolute;
    background-color: white; /* Change to your desicrimson background color */
    min-width: 160px;
    z-index: 1;
    color:crimson;
}

/* Style the dropdown links */
.dropdown-content a {
    color: white;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
}

/* Change color of dropdown links on hover */
.dropdown-content a:hover {
    background-color:crimson; /* Change to your desicrimson hover background color */
    
}

/* Show the dropdown menu on hover */
.dropdown:hover .dropdown-content {
    display: block;
}

</style>
    


<section class="home" id="home">
<div class="home-text">
<h1> We have Everything <br> Your <span>Car</span> Need</h1>
<p>Customer Satisfaction is our Satisfaction</p>
<a href="#" class="btn">Discover Now</a>

<div class="car-content content">
    <div class="boxx">
        <a href="mainpageeee.html"> <img src="imagess/evv.png" alt=""></a>
        <a href="mainpageeee.html"><h2 >E L E C T R I C</h2></a>
        
    </div>

    <div class="boxx">
       <a href="mainpageee.html"><img src="imagess/suvv1.png" alt=""></a>
       <a href="mainpageee.html"> <h2>HATCHBACK </h2></a>
    </div>

    <div class="boxx">
       <a href="mainpagee.html"> <img src="imagess/suvv2.png" alt=""></a>
       <a href="mainpagee.html"><h2>S E D A N</h2></a>
    </div>


</div>
</section>
<section class="cars" id="cars">
    <div class="heading">
        <span>All Cars</span>
        <h2>We have all types cars</h2>
        <p>Carverse is a platform where you will drive your future</p>
    </div>

    <div class="cars-container container">
        <div class="box">
            <img src="imagess/gclass.jpg" alt="">
            <a href="suv2.html"><h2>G-WAGON </h2></a>
        </div>

        <div class="box">
            <img src="imagess/urus_optimized.webp" alt="">
           <a href="suv1.html"> <h2>URUS </h2></a>
        </div>

        <div class="box">
            <img src="imagess/mustang.jpg" alt="">
           <a href="sedan2.html"><h2>FORD MUSTANG </h2></a>
        </div>

    <div class="box">
        <img src="imagess/defender.jpg" alt="">
        <a href="suv8.html"><h2>LR DEFENDER</h2></a>
    </div>

    <div class="box">
        <img src="imagess/rubiconn.jpeg" alt="">
       <a href="suv4.html"><h2>RUBICON</h2></a>
    </div>

    <div class="box">
        <img src="imagess/gt.jpeg" alt="">
        <a href="sedan4.html"><h2>MERCEDES GT </h2></a>
    </div>
</div>
</section>
<section class="about container" id="about">
    <div class="about-img">
    <img src="imagess/rolls.png" alt="">
    </div>
    <div class="about-text">
        <span> ABOUT US</span>
        <h2>One Of The LUXUIRIOUS DEALERS <br>WE ARE CARVERSALS</h2>
        <p>We CarVerse Promise You To Give Appropriate Information</p>
        <a href="about.html" class="btn">Learn More</a>


    </div>
</section>

<section class="bestseller" id="bestseller">
    <div class="heading">
       <span>BEST SELLING CARS</span>
       <h2>BEST SELLING CARS OF THE YEAR</h2>
        <p>These Brands Are Performing Well From Last Years</p>
    </div>


    <div class="best-selling selling">

    <div class="box">
        <img src="imagess/buggati.jpg" alt="">
        <h3>BUGGATI CHIRON</h3>
        <span>17 crore Base Price</span>
        <i class='bx bxs-star'>(10 Reviews)</i>
        <a href="appointment.html" class="btn">Buy Now</a>
        <a href="cars1.html" class="details">View Details</a>
    </div>


<div class="box">
<img src="imagess/rangerover.webp" alt="">
<h3>RANGE ROVER SPORTS</h3>
<span>3 crore</span>
<i class='bx bxs-star'>(8 Reviews)</i>
 <a href="appointment.html" class="btn">Buy Now</a>
 <a href="cars2.html" class="details">View Details</a>
</div>



<div class="box">
<img src="imagess/porsche.jpg" alt="">
<h3>PORSCHE CANYON</h3>
<span>5 crore</span>
<i class='bx bxs-star'>(6 Reviews)</i>
<a href="appointment.html" class="btn">Buy Now</a>
<a href="cars3.html" class="details">View Details</a>
</div>



<div class="box">
<img src="imagess/mclaren.jpg" alt="">
<h3>MCLAREN 720S</h3>
<span>1 crore Base Price</span>
<i class='bx bxs-star'>(7 Reviews)</i>
 <a href="appointment.html" class="btn">Buy Now</a>
<a href="cars4.html" class="details">View Details</a>
</div>



<div class="box">
<img src="imagess/lamborghini.webp" alt="">
<h3>LAMBORGHINI AVENTADOR </h3>
<span>2.5 crore</span>
<i class='bx bxs-star'>(10 Reviews)</i>
<a href="appointment.html" class="btn">Buy Now</a>
<a href="cars5.html" class="details">View Details</a>
</div>



<div class="box">
<img src="imagess/hummer.webp" alt="">
<h3>HUMMER EV</h3>
<span>1.2 crore</span>
<i class='bx bxs-star'>(9 Reviews)</i>
<a href="appointment.html" class="btn">Buy Now</a>
<a href="cars6.html" class="details">View Details</a>
</div>


<div class="box">
    <img src="imagess/nissan.webp" alt="">
    <h3>NISSAN GTR</h3>
    <span>3.5 crore</span>
    <i class='bx bxs-star'>(3 Reviews)</i>
    <a href="appointment.html" class="btn">Buy Now</a>
    <a href="cars7.html" class="details">View Details</a>
    </div>

<div class="box">
<img src="imagess/bentley.jpg" alt="">
 <h3>BENTLEY BENTAYGA</h3>
<span>2 crore</span>
 <i class='bx bxs-star'>(5 Reviews)</i>
 <a href="appointment.html" class="btn">Buy Now</a>
<a href="car8.html" class="details">View Details</a>
</div>


</section>
                
    


<section class="blog" id="blog">
 <div class="heading">
 <span>BLOG $ NEWS</span>
<h2>Our Blog Content </h2>
<p>These Brands Are Performing Well From Last Years</p>
</div>

<div class="blog-container container">
    <div class="box">
        <img src="imagess/fordbronco.jpg" alt="">
        <span>Feb 21 2023</span>
        <!-- <h3>Things To Be Thinked Off</h3> -->
        <p> Things to Check When You Buy A Second Hand Car</p>
        <a href="blog1.html" class="blog-btn">Read More <i class='bx bx-right-arrow-alt' ></i></a>
    </div>





    <div class="box">
        <img src="imagess/hummar.jpg" alt="" style="width: 300px;">
        <span>Feb 21 2023</span>
        <!-- <h3>Things To Be Thinked Off</h3> -->
        <p> Things To Be Followed When Driving A Car</p>
        <a href="blog2.html" class="blog-btn">Read More <i class='bx bx-right-arrow-alt' ></i></a>
    </div>



    <div class="box">
        <img src="imagess/lrrover2.jpg" alt="">
        <span>Feb 21 2023</span>
        <!-- <h3>Things To Be Thinked Off</h3> -->
        <p> Advanatage Of Having A Own Car</p>
        <a href="blog3.html" class="blog-btn">Read More <i class='bx bx-right-arrow-alt' ></i></a>
    </div>


</div>


</section>



<section class="blog" id="blog">
    <div class="heading">
    <!-- <span>BLOG $ NEWS</span> -->
   <h2>NEWLY LAUNCHED</h2>
   <!-- <p>These Brands Are Performing Well From Last Years</p> -->
   </div>
   
   <div class="blog-container container">
       <div class="box">
           <img src="imagess/alfaromeo.jpg" alt="">
           <span>Mar 21 2023</span>
           <!-- <h3>Things To Be Thinked Off</h3> -->
           <p> 2023 ALFA ROMEO   4.0 LITRE</p>
           <a href="newlaunch1.html" class="blog-btn">Read More <i class='bx bx-right-arrow-alt' ></i></a>
       </div>
   
   
   
   
   
       <div class="box">
           <img src="imagess/bm.jpg" alt="" style="width: 300px;">
           <span>Apr 21 2023</span>
           <!-- <h3>Things To Be Thinked Off</h3> -->
           <p>2023 BMW 7 Series   LUXUIRIOUS</p>
           <a href="newlaunch2.html" class="blog-btn">Read More <i class='bx bx-right-arrow-alt' ></i></a>
       </div>
   
   
   
       <div class="box">
           <img src="imagess/corvette.jpg" alt="">
           <span>May 22 2023</span>
           <!-- <h3>Things To Be Thinked Off</h3> -->
           <p> 2023 CHEVROLET CORVETTE</p>
           <a href="newlaunch3.html" class="blog-btn">Read More <i class='bx bx-right-arrow-alt' ></i></a>
       </div>

      <a href="team.html"> <h1 class="seeheading"> SEE MORE</h1></a>

        <!-- <a href=""><ion-icon name="car-outline" size="large" ></ion-icon></a>  -->


   
   
   </div>

  
   
   
   
   </section>

     <h1 class="topichead">LATEST NEWS UPDATES</h1>  

   <div class="containerrrr">
    <img src="imagess/tata.jpg">
    <h2>Update 1</h2>
    <p>Tata is Revealing its Nexon Ev Facelift.</p>
   <a href="timepass.html"><button>Read More</button></a>
</div>

<div class="containerrrr">
    <img src="imagess/mgastor.jpeg">
    <h2>Update 2</h2>
    <p>Revealing the New Mg Astor Black Edition.</p>
    <a href="timepass1.html"><button>Read More</button></a>
</div>

<div class="containerrrr">
    <img src="imagess/spressoo.jpg">
    <h2>Update 3</h2>
    <p>S-presso sales is on peak in 2023.</p>
    <a href="timepass2.html"><button>Read More</button></a>
</div>

             

</div>



<!-- <div class="bodie">
  <div class="containerrrrr">
      <img src="imagess/bmwcompare.webp" alt="Car 1">
      <button>Button 1</button>
  </div>
  <div class="containerrrrr">
      <img src="imagess/comparecar.jpg" alt="Car 2">
      <button>Button 2</button>
  </div>
</div> -->

<h1 class="topichead">COMPARE TWO CARS</h1>

   <div class="containerrrr">
    <img src="imagess/bmwcompare.webp">
    <h2>Volvo xc40 Vs Bmw i4</h2>
    <!-- <p>Tata is Revealing its Nexon Ev Facelift.</p> -->
   <a href="compare.html"><button>Read More</button></a>
</div>

<div class="containerrrr">
    <img src="imagess/compare.jpg">
    <h2>Nissan Magnite Vs Spresso</h2>
    <!-- <p>Revealing the New Mg Astor Black Edition.</p> -->
    <a href="comparee.html"><button>Read More</button></a>
</div>

<div class="containerrrr">
  <img src="imagess/carcompare.webp">
  <h2>Ford Mustang Vs Mustang Gt</h2>
  <!-- <p>Revealing the New Mg Astor Black Edition.</p> -->
  <a href="compareee.html"><button>Read More</button></a>
</div>

































<section id="featucrimson-products">
    <h2 class="heads">INTRODUCING OUR TEAM</h2>
    <div class="product">
        <img src="imagess/team-1.jpg" height="400" width="400" class="photo">
        <h3 class="name">Steve Smith</h3>
        <p>SOFTWARE ENGINEER.</p>
       
    </div>
    <!-- <div class="product">
        <img src="imagess/team-2.jpg" height="400" width="400" class="photo">
    <h3 class="name">Aarti Lauren</h3>
    <p>WEB DEVELOPER.</p>
        
    </div> -->
    <div class="product">
        <img src="imagess/team-3.jpg" height="400" width="400" class="photo">
    <h3 class="name">James Rodriguez</h3>
    <p>DATABASE ENGINEER.</p>
        
    </div>

    <div class="product">
        <img src="imagess/team-4.jpg" height="400" width="400" class="photo">
    <h3 class="name">Mathew Wade</h3>
    <p>SENIOR MANAGER.</p>
        
    </div> 
</section>

<h1 class="headers">Reviews Of Our Clients</h1>
      <div class="review-cards-container">
        <div class="review-card">
            <img src="imagess/review16.jpg" alt="Review 1">
            <h2>Great Product!</h2>
            <p>Produdct mentioned over here are Amazing.</p>
            <div class="rating">
                <span class="star">&#9733;</span>
                <span class="star">&#9733;</span>
                <span class="star">&#9733;</span>
                <span class="star">&#9733;</span>
                <span class="star half">&#9733;</span>
            </div>
        </div>
        <div class="review-card">
            <img src="imagess/aarti1.jpg" alt="Review 2" >
            <h2>Amazing Assistance</h2>
            <p>Assistance provided over here is of great Quality.</p>
            <div class="rating">
                <span class="star">&#9733;</span>
                <span class="star">&#9733;</span>
                <span class="star">&#9733;</span>
                
            </div>
        </div>
        <div class="review-card">
            <img src="imagess/review1.jpg" alt="Review 3">
            <h2>Impressive Experience</h2>
            <p>Curabitur et libero in velit feugiat convallis in a urna.</p>
            <div class="rating">
                <span class="star">&#9733;</span>
                <span class="star">&#9733;</span>
                <span class="star">&#9733;</span>
                <span class="star">&#9733;</span>
            </div>
        </div>
    </div>
      <!--Review cards 2-->

    <div class="review-cards-container">
        <div class="review-card">
            <img src="imagess/review2.jpg" alt="Review 1">
            <h2>SIMPLE AND FRIENDLY</h2>
            <p>Website is very simple and subtle.</p>
            <div class="rating">
                <span class="star">&#9733;</span>
                <span class="star">&#9733;</span>
                <span class="star">&#9733;</span>
                <span class="star">&#9733;</span>
                <span class="star half">&#9733;</span>
            </div>
        </div>
        <div class="review-card">
            <img src="imagess/reviewf1.jpg" alt="Review 2">
            <h2>Amazing Quality</h2>
            <p>Quality of words are Amazing .</p>
            <div class="rating">
                <span class="star">&#9733;</span>
                <span class="star">&#9733;</span>
                <span class="star">&#9733;</span>
                
            </div>
        </div>
        <div class="review-card">
            <img src="imagess/review15.jpg" alt="Review 3">
            <h2>Impressive Experience</h2>
            <p>My Experience is very good .</p>
            <div class="rating">
                <span class="star">&#9733;</span>
                <span class="star">&#9733;</span>
                <span class="star">&#9733;</span>
                <span class="star">&#9733;</span>
            </div>
        </div>
    </div>

 
    <footer class="footer">
        <div class="footer-logo">
           <img src="imagess/gwagon.webp" alt="Footer Logo">
       </div> 
       <div class="footer-content">
           <div class="footer-section">
               <h4>Explore</h4>
               <ul>
                   <li><a href="Mainpage.php">Home</a></li>
                   <li><a href="about.html">About</a></li>
                   <li><a href="service.html">Services</a></li>
                   <li><a href="contactus.html">Contact</a></li>
               </ul>
           </div>
           <div class="footer-section">
               <h4>Resources</h4>
               <ul>
                   <li><a href="blog1.html">Blog1</a></li>
                   <li><a href="blog2.html">Blog2</a></li>
                   <li><a href="blog3.html">Blog3</a></li>
                   <li><a href="review.html">Reviews</a></li>
               </ul>
           </div>
           <div class="footer-section">
               <h4>Connect</h4>
    <p>Stay connected with us for the latest updates and insights.</p>
    <div class="social-icons">
    <ion-icon name="logo-facebook" class="face"></ion-icon>
    <ion-icon name="logo-twitter" class="face"></ion-icon>
    <ion-icon name="logo-instagram" class="face"></ion-icon>               
    <ion-icon name="logo-linkedin" class="face"></ion-icon>
    <ion-icon name="logo-youtube" class="face"></ion-icon>
    
               </div>
           </div>
       </div>
       
       <div class="footer-bottom">
           <p>&copy; 2023 CarVerse Website. All rights reserved. | Designed by Sumit Yadav</p>
           <div class="footer-links">
               <a href="#">Terms of Service</a>
               <a href="#">Privacy Policy</a>
               <a href="#">Cookie Policy</a>
           </div>
       </div>
     </footer>
       <div class="footer-links">
           <a href="#">Terms of Service</a>
           <a href="#">Privacy Policy</a>
           <a href="#">Cookie Policy</a>
       </div>
   </div>
 </footer> 




        <script src="main.js"></script>

 <style>
    
  @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,500;0,700;1,400&display=swap');
*{
font-family: "Poppins", sans-serif;
margin: 0;
padding: 0;
scroll-padding-top: 1rem;
scroll-behavior: smooth;
list-style: none;
text-decoration: none; box-sizing: border-box;
}

 /* .blog .box:hover{
    transition: 0.5s;
    transform: scale(1.1);
 } */

 .blog-container .box:hover{
    transition: 0.5s;
    transform: scale(1.1);

 }


:root {
    --main-color:
    #d90429;
    --text-color:
    #020102;
    --bg-color:
    #fff;
    }

section{
  padding: 4rem 0 2rem ;
}


    img { 
        width: 100%;
    }
     body {
         color: var(--text-color); }

.container{
 max-width: 1068px;
margin-left: auto;
margin-right: auto;
}

.container{
  max-width: 1068px;
 margin-left: auto;
 margin-right: auto;
 }
 
.design{
  font-size: 25px;
}

 header {
     display: block; width: 100%;
     position: fixed;
     top: 0;
     left: 0;
     z-index: 100;
     background-color:crimson;
     text-decoration:none;
     }
 
 
 .nav{
       display: flex;
       align-items: center;
       justify-content: space-between;
       padding: 20px 35px;
       margin-right: 20px;
 
         }
 
 
 #menu-icon {
   font-size: 24px;
   cursor: pointer;
   color: crimson;
   display: none;
 }
 
 .logo {
 font-size: 1.2rem;
 font-weight: 700;
 color: black;
 position: relative;
 left:-300px;
 }
 
 
 .navbar{
   display: flex;
   column-gap: 2rem;
 
 }
 
 .navbar a {
   color: black;
   font-size: 1rem;
   text-transform: uppercase;
   font-weight: 1000;
   text-decoration:none;
   }
 
   .navbar a:hover,
   .navbar .active{
   color:white;
  }
 
/* 
 #search-icon{
  font-size: 24px;
  cursor: pointer;
 }

 .search-box{
  position: absolute;
  top: 110%;
  right: 0;
  left: 0;
  background: var(--bg-color);
  box-shadow: 4px 4px 20px rgb(15 54 55 / 10%);
  border: 1px solid var(--main-color);
  border-radius: 0.5rem;
  clip-path: circle(0% at 100% 0%);
 }

 .search-box.active{
  clip-path: circle(144% at 100% 0%);
  transition: 0.4s;
 }

.search-box input {
  width: 100%;
  padding: 20px;
  border: none;
  outline: none;
  background: transparent;
  font-size: 1rem;
}
 */

.home{
  max-width: 1300px;
  margin: auto;
  width: 100%;
  min-height: 640px;
  display: flex;
  align-items: center;
  background: url('imagess/Background-home.png');
  background-repeat: no-repeat;
  background-size: cover;
  background-position: center left;
}

.home-text{
  padding-left: 130px;

}

.home-text h1{
  font-size: 2.4rem;
}

.home-text span{
  color: var(--main-color);
}

.home-text p{
  font-size: 0.938rem;
  font-weight: 300;
  margin: 0.5rem 0 1.2rem;

}

.btn{
  padding: 10px 22px;
  background-color: var(--main-color);
  color: var(--bg-color);
  font-weight: 400;
}

.btn:hover{
  background: var(--bg-color);
  color: var(--main-color);
  border: 1px solid var(--main-color)
}

.heading{
  text-align: center;
}

.heading span{
  font-weight: 500;
  color: var(--main-color);

}

.heading p{
  font-size: 0.98rem;
  font-weight: 300; 
}

.car-content{
  display: flex;
  flex-wrap: wrap;
  gap:2rem;
  margin-top: 2rem;
  /* height:100px */
  width:100%;
  
}
.car-content .boxx{
  width: 109px;
}


.car-content .boxx img:hover{
  transform: scale(1.1);
  transition: 0.5s;
}

.car-content .boxx h2{
  position: absolute;
  font-weight: 400;
  font-size: 1rem;
  background: var(--main-color);
  padding: 8px;
  border-radius: 0.5rem;
  color: #f6f6f6;
}


.car-content .boxx:hover h2{
  background: var(--bg-color);
  color: var(--main-color);
  border: 1px solid var(--main-color);
}

.topichead{
  padding-left: 602px;
    font-size: 25px;
}
.cars-container{
  display: flex;
  flex-wrap: wrap;
  gap:2rem;
  margin-top: 2rem;
}

.cars-container .box{
  flex:1 1 17rem;
  position: relative;
  border-radius: 0.5rem;
  height: 200px;
  overflow: hidden;
}

.cars-container .box img{
  width: 100%;
  height: 100%;
  object-fit: cover;
  overflow: hidden;
}

.cars-container .box img:hover{
  transform: scale(1.1);
  transition: 0.5s;
}

.cars-container .box h2{
  position: absolute;
  bottom: 1rem;
  left:1rem;
  font-weight: 400;
  font-size: 1rem;
  background: var(--bg-color);
  padding: 8px;
  border-radius: 0.5rem;
}

.cars-container .box:hover h2{
  background: var(--main-color);
  color: var(--bg-color);
}


.about{
  display: flex;
  flex-wrap: wrap;
  align-items: center;
  gap: 1.5rem;
}

.about-img{
  flex: 1 1 21rem;
}

.about-text {
  flex: 1 1 21rem;
}

.about-text span{
  font-weight: 500;
  color: var(--main-color);
}

.about-text h2{
  font-size: 1.7rem;
}

.about-text p{
  font-size: 0.938rem;
  margin: 0.5rem 0 1.4rem;
}

.seeheading{
  padding-top: 64px;
  color: black;
}

.seeheading:hover{
    color: crimson;
}

.best-selling{
  display: flex;
  flex-wrap: wrap;
  gap: 2rem;
  margin-top: 2rem;

}

.best-selling .box{
  flex: 1 1 17rem;
  position: relative;
  padding: 20px;
  display: flex;
  flex-direction: column;
  background: #f6f6f6;
  border-radius: 0.5rem;
}

.best-selling .box img{
  width:100%;
  height: 200px;
  object-fit: contain;
  object-position: center;
  margin-bottom: 1rem;
}

.best-selling .box h3{
  font-size: 1.1rem;
  font-weight: 600;
}

.best-selling .box span{
  font-size: 1.1rem;
  font-weight: 600;
  color: var(--main-color);
}

.best-selling .box .bx{
  color: var(--main-color);
  margin: 0.8rem 0;
}

.best-selling .box .btn{
  max-width: 120px;
}


.best-selling .box .details{
  display: flex;
  align-items: center;
  position: absolute;
  bottom: 1.8rem;
  right: 1rem;
  font-size: 1rem;
  color: var(--text-color);

}

.best-selling .box .details:hover{
  color:var(--main-color);
  text-decoration: underline;
}

.blog-container{
  display:flex;
  flex-wrap: wrap;
  gap: 2rem;
  margin-top: 2rem;

}

.blog-container .box{
  flex: 1 1 13rem;
  padding:20px ;
}

.blog-container .box:hover{
  background: #f6f6f6;
}

.blog-container .box span{
  font-size: 0.8rem;
  color: var(--main-color);
}

.blog-container h3{
  font-size: 1.2rem; 
}

.blog-container .box p{
  font-size: 0.938rem;
  margin:4px 0;
}

.blog-container .box .blog-btn{
  display: flex;
  align-items: center;
  column-gap: 4px;
  color: var(--text-color);
}

.blog-container .box .blog-btn .bx{
  font-size: 20px;
}

.blog-container .box .blog-btn:hover{
  color: var(--main-color);
  column-gap: 0.7rem;
  transition: 0.4s;
}


#featucrimson-products {
  padding: 12px;
    text-align: center;
    border-radius: 20px;
    margin-top: 49px;
}

.product:hover{
  transform: scale(1.1);
  transition: 0.5s;
} 

.product {
  background-color: var(--main-color);
  border: 1px solid #ddd;
  padding: 20px;
  margin: 10px;
  display: inline-block;
  border-radius: 20px;
}

.product img {
  max-width: 100%;
}

.price {
  display: block;
  margin-top: 10px;
  font-weight: bold;
}

.containerrrr {
    display: inline-block;
    width: 31%;
    margin: 15px;
    padding: 20px;
    background-color: #f2f2f2;
    border: 1px solid #ddd;
    text-align: center;
    margin-top: 24px;
}


        
        .containerrrr h2 {
            font-size: 1rem;
            margin-bottom: 10px;
        }
        
        .containerrrr p {
            font-size: 1rem;
            margin-bottom: 20px;
        }

.containerrrr button {
background-color: var(--main-color);
color: var(--bg-color);
font-weight: 400;
border: none;
padding: 10px 20px;
font-size: 1rem;
cursor: pointer;
}


.containerrrr button:hover{
  background: var(--bg-color);
  color: var(--main-color);
  border: 1px solid var(--main-color)
}
























































.wishlist-btn:hover{
  background-color: yellow;
}
.cart-btn:hover{
  background-color: #f6ff00;
}

.wishlist-btn,
.cart-btn {
  display: block;
  margin-top: 10px;
  padding: 8px 16px;
  cursor: pointer;
  width: 100%;
  border: none;
  font-weight: bold;
}

.wishlist-btn {
  background-color: white;
  color: #333;
}
.cart-btn{
  background-color: white;
} 

.name{
  color: yellow;;
}

.bodie {
    display: flex;
    justify-content: space-around;
    align-items: center;
    height: 100vh;
    margin: 0;
    background-color: #f0f0f0;
}

  .containerrrrr {
    display: flex;
    flex-direction: column;
    align-items: center;
    border: 2px solid #333;
    padding: 20px;
    text-align: center;
    background-color: #fff;
    box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);
    max-width: 39%;
    margin-right: 259px;
}

.containerrrrr img {
    max-width: 100%;
    height: auto;
}

.containerrrrr button {
    margin-top: 10px;
    padding: 10px 20px;
    background-color: #007bff;
    color: #fff;
    border: none;
    cursor: pointer;
    transition: background-color 0.3s;
}

.containerrrrr button:hover {
    background-color: #0056b3;
}



/* REVIEW SECTION */

.review-cards-container {
  display: flex;
  justify-content: center;
  align-items: center;
  height: 70vh;
   padding-top: 22px;
}

.review-card {
  background-color: white;
  border-radius: 8px;
  box-shadow: 0px 2px 4px rgba(0, 0, 0, 0.1);
  padding: 20px;
  margin: 0 20px;
  width: 300px;
  text-align: center;
}

.review-card img {
  max-width: 100%;
  border-radius: 20%;
  margin-bottom: 10px;
}

.review-card h2 {
  margin-top: 0;
  font-size: 1.2em;
}

.review-card p {
  color: #555;
}

.rating {
  font-size: 18px;
  color: gold;
  margin-top: 10px;
}

h1 {
padding-top: 16px;
}

.headers{
  padding-left: 508px;
}



.footer {
  background-color: crimson;
  color: #fff;
  padding: 30px 0;
  text-align: center;
  width: 100%;
}

.footer-logo img {
  max-width: 200px;
  margin-bottom: 20px;
}

.footer-content {
  display: flex;
  justify-content: space-between;
  align-items: flex-start;
  flex-wrap: wrap;
  margin-top: 20px;
}

.footer-section {
  flex: 0 0 calc(33.33% - 20px);
  padding: 0 10px;
  margin-bottom: 20px;
}

.footer-section h4 {
  font-size: 24px;
  margin-bottom: 10px;
}

.footer-section p {
  margin-bottom: 10px;
  line-height: 1.6;
}

.footer-section ul {
  list-style: none;
  padding: 0;
}

.footer-section ul li {
  margin-bottom: 5px;
}

.footer-section a {
  color: #fff;
  text-decoration: none;
  transition: color 0.3s ease;
}

.footer-section a:hover {
  color: #f06430;
}




.footer-bottom {
  text-align: center;
  padding: 0px 0;
  background-color: black;
  color: #fff;
}

.footer-links a {
  color: #fff;
  text-decoration: none;
  margin: 0 10px;
}

.footer-links a:hover {
  color: #f06430;
}


 </style>   
      
</body>
</html>