<?php

include 'connect.php';

session_start();

if(isset($_SESSION['user_id'])){
   $user_id = $_SESSION['user_id'];
}else{
   $user_id = '';
};

// include 'components/wishlist_cart.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
   <title>quick view</title>
   
   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

   <!-- custom css file link  -->
   <!-- <link rel="stylesheet" href="css/style.css"> -->

</head>
<body>

<header>
    
    <div class="nav container">
      <a href="#" class="logo">Car<span>Verse</span></a>
    <i class='bx bx-menu' id="menu-icon"></i>

     <a href="#" class="logo">Car<span>Verse</span></a> 
    <ul class="navbar">
    <li><a href="Mainpage.php" class="active">Home</a></li>
    <!-- <li><a href="#cars">Cars</a></li> -->
    <li><a href="aboutus.html">About</a></li>
    <li><a href="service.html">Services</a></li>
    <li><a href="blog1.html">Blog</a></li>
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
   
<!-- <?php include 'components/user_header.php'; ?> -->
<!-- 
<section class="quick-view">

   <h1 class="heading">quick view</h1>

   <?php
     $pid = $_GET['pid'];
     $select_products = $conn->prepare("SELECT * FROM `cars` WHERE id = ?"); 
     $select_products->execute([$pid]);
     if($select_products->rowCount() > 0){
      while($fetch_product = $select_products->fetch(PDO::FETCH_ASSOC)){
   ?>
   <form action="" method="post" class="box">
      <input type="hidden" name="pid" value="<?= $fetch_product['id']; ?>">
      <input type="hidden" name="name" value="<?= $fetch_product['name']; ?>">
      <input type="hidden" name="price" value="<?= $fetch_product['price']; ?>">
      <input type="hidden" name="image" value="<?= $fetch_product['image_01']; ?>">
      <div class="row">
         <div class="image-container">
            <div class="main-image">
                <img id="main-image" src="uploaded_img/<?= $fetch_product['image_01']; ?>" alt="">
            </div>

            <div class="sub-image">
               <img src="uploaded_img/<?= $fetch_product['image_01']; ?>" alt="" onclick="changeMainImage('uploaded_img/<?= $fetch_product['image_01']; ?>')">
               <img src="uploaded_img/<?= $fetch_product['image_02']; ?>" alt="" onclick="changeMainImage('uploaded_img/<?= $fetch_product['image_02']; ?>')">
               <img src="uploaded_img/<?= $fetch_product['image_03']; ?>" alt="" onclick="changeMainImage('uploaded_img/<?= $fetch_product['image_03']; ?>')">
            </div>

         </div>
         <div class="content">
            <div class="name"><?= $fetch_product['name']; ?></div>
            <div class="flex">
               <div class="price"><span>Rs </span><?= $fetch_product['price']; ?><span>/-</span></div>
               <input type="number" name="qty" class="qty" min="1" max="99" onkeypress="if(this.value.length == 2) return false;" value="1">
            </div>
            <div class="details"><?= $fetch_product['details']; ?></div>
            <div class="flex-btn">
               <input type="submit" value="add to cart" class="btn" name="add_to_cart">
               <input class="option-btn" type="submit" name="add_to_wishlist" value="add to wishlist">
            </div>
         </div>
      </div>
   </form>
   
   <?php
      }
   }else{
      echo '<p class="empty">no products added yet!</p>';
   }
   ?>

</section> -->


<section class="quick-view">
   <h1 class="heading">quick view</h1>

   <?php
     $pid = $_GET['pid'];
     $select_products = $conn->prepare("SELECT * FROM `cars` WHERE id = ?"); 
     $select_products->execute([$pid]);
     if($select_products->rowCount() > 0){
      while($fetch_product = $select_products->fetch(PDO::FETCH_ASSOC)){
   ?>
   <form action="" method="post" class="box">
      <input type="hidden" name="pid" value="<?= $fetch_product['id']; ?>">
      <input type="hidden" name="name" value="<?= $fetch_product['name']; ?>">
      <input type="hidden" name="price" value="<?= $fetch_product['price']; ?>">
      <input type="hidden" name="image" value="<?= $fetch_product['image_01']; ?>">
      <div class="image-container">
         <div class="main-image">
            <img id="main-image" src="uploaded_img/<?= $fetch_product['image_01']; ?>" alt="">
         </div>
         <div class="sub-image">
            <img src="uploaded_img/<?= $fetch_product['image_01']; ?>" alt="" onclick="changeMainImage('uploaded_img/<?= $fetch_product['image_01']; ?>')">
            <img src="uploaded_img/<?= $fetch_product['image_02']; ?>" alt="" onclick="changeMainImage('uploaded_img/<?= $fetch_product['image_02']; ?>')">
            <img src="uploaded_img/<?= $fetch_product['image_03']; ?>" alt="" onclick="changeMainImage('uploaded_img/<?= $fetch_product['image_03']; ?>')">
         </div>
      </div>
      <div class="content">
         <div class="name"><?= $fetch_product['name']; ?></div>
         <div class="price"><span>Rs </span><?= $fetch_product['price']; ?><span>/-</span></div>
         <div class="details"><?= $fetch_product['details']; ?></div>
         <!-- <div class="flex-btn">
            <input type="number" name="qty" class="qty" min="1" max="99" onkeypress="if(this.value.length == 2) return false;" value="1">
            <input type="submit" value="add to cart" class="btn" name="add_to_cart">
            <input class="option-btn" type="submit" name="add_to_wishlist" value="add to wishlist">
         </div> -->
      </div>
      <a class="btn" href="appointment.html">Book Appointment</a>
   </form>

   
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
<ion-icon name="logo-facebook" class="face" ></ion-icon>
<ion-icon name="logo-twitter" ></ion-icon>
<ion-icon name="logo-instagram" ></ion-icon>               
<ion-icon name="logo-linkedin" ></ion-icon>
<ion-icon name="logo-youtube" ></ion-icon>

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

  
   <?php
      }
   }else{
      echo '<p class="empty">no products added yet!</p>';
   }
   ?>

</section>






<style>



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
       text-decoration:none;
 
         }
 
 
 #menu-icon {
   font-size: 24px;
   cursor: pointer;
   color: crimson;
   display: none;
 }
 
 .logo {
 font-size: 25px;
 font-weight: 700;
 color: black;
 position: relative;
 left:-300px;
 z-index:1;
 }
 
 
 .navbar{
   display: flex;
   column-gap: 2rem;
   text-decoration:none;
   list-style:none;
 
 }
 
 .navbar a {
   color: black;
   font-size: 15px;
   text-transform: uppercase;
   font-weight: 1000;
   text-decoration:none;
   }
 
   .navbar a:hover,
   .navbar .active{
   color:white;
  }

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
    color: black;
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









































.image-container {
   display: flex;
   flex-direction: column;
   align-items: center;
   margin-bottom: 20px;
}

.sub-image img {
   /* Styles for the sub-images */
   margin-right: 10px;
   height:100px;
   width:100%;
   border:0.1rem solid;
   border-color:crimson;
    /* Adjust the spacing between sub-images */
}

.sub-image {
   /* Styles for the sub-images container */
   display: flex; /* Display sub-images in a row */
   justify-content: center; /* Center sub-images horizontally */
   margin-top: 10px; /* Add some spacing between main and sub-images */
}

.main-image{
   height:500px;
   width:650px;
}

.main-image img{
   height:400px;
   width:600px;
}



.content {
   /* Styles for the content section (description, price, name, buttons) */
   text-align: center;
}

.name {
   /* Styles for the product name */
   font-weight:600;
   font-size: 30px;
   margin-bottom: 10px;
   color:crimson;
}

.price {
   /* Styles for the price */
   font-size: 19px;
   margin-bottom: 10px;
   font-weight:600;
}

.details {
   /* Styles for the product details */
   margin-bottom: 20px;
   font-weight:300;
   font-size:20px;
   color:black;
}

.qty {
   /* Styles for the quantity input field */
   width: 50px; /* Adjust the width as needed */
   margin-right: 10px; /* Adjust the spacing between quantity and buttons */
}
   .home-products .slide .fa-heart,
.home-products .slide .fa-eye{
   position: absolute;
   top:1rem;
   height: 4.5rem;
   width: 4.5rem;
   line-height: 4.2rem;
   font-size: 2rem;
   background-color: white;
   /* border:var(--border); */
   border-radius: .5rem;
   text-align: center;
   color:#7f2549;
   cursor: pointer;
   transition: .2s linear;
}

.home-products .slide .fa-heart{
   right: -6rem;
}

.home-products .slide .fa-eye{
   left: -6rem;
}

.home-products .slide .fa-heart:hover,
.home-products .slide .fa-eye:hover{
   background-color: #7f2549;
   color:white;
}

.home-products .slide:hover .fa-heart{
   right: 1rem;
}

.home-products .slide:hover .fa-eye{
   left: 1rem;
}



/* @import url('https://fonts.googleapis.com/css2?family=Nunito:wght@200;300;400;500;600;700&display=swap'); */

:root{
   --main-color:#2980b9;
   --orange:#f39c12;
   --red:#7f2549;
   --black:#333;
   --white:#fff;
   --light-color:#666;
   --light-bg:#fae5e5;
   --border:.1rem solid var(--black);
   --box-shadow:0 .5rem 1rem rgba(0,0,0,.1);
}

*{
   font-family: 'Nunito', sans-serif;
   margin:0; padding:0;
   box-sizing: border-box;
   outline: none; border:none;
   text-decoration: none;
}

*::selection{
   background-color: var(--main-color);
   color:var(--white);
}

::-webkit-scrollbar{
   height: .5rem;
   width: 1rem;
}

::-webkit-scrollbar-track{
   background-color: transparent;
}

::-webkit-scrollbar-thumb{
   background-color: var(--main-color);
}

html{
   font-size: 62.5%;
   overflow-x: hidden;
}

body{
   background-color: #fdf6f0;
   /* padding: 0;
   margin: 0; */
}

section{
   padding:2rem;
   max-width: 1500px;
   margin:0 auto;
}

.heading{
   font-size: 3.5rem;
   font-weight: 300;
   color:#7f2549
;
   margin-bottom: 2rem;
   text-align: center;
   text-transform: uppercase;
}


.btn,
.delete-btn,
.option-btn{
   display: block;
   width: 100%;
   margin-top: 1rem;
   /* border-radius: .5rem; */
   padding:1rem 3rem;
   font-size: 1.7rem;
   text-transform: capitalize;
   /* color:var(--white); */
   cursor: pointer;
   text-align: center;
   border:var(--border);
    border-color:#7f2549;
   color: #7f2549;
}

.btn:hover,
.delete-btn:hover,
.option-btn:hover{
   /* color: #f8bbbb;
   background-color: black;    */
   background-color:#7f2549;
         color: #fdf6f0
}

.btn{
   
   /* background-color: #7f2549;
   color: white; */
   border:var(--border);
    border-color:#7f2549;
color: #7f2549;
background-color:#ffffff70;
}

.option-btn{
   /* background-color: #7f2549;
   color: white; */
   border:var(--border);
    border-color:#7f2549;
   color: #7f2549;
   
   background-color:#ffffff70;
}

.delete-btn{
   /* background-color: #7f2549;
   color: white; */
   border:var(--border);
   border-color:#7f2549;
   color: #7f2549;
   background-color:#ffffff70;
}

.flex-btn{
   display: flex;
   justify-content: center;
   align-items: center;
}

.message {
  color:#7f2549;
   position: sticky;
   top: 0;
   max-width: 1200px;
   margin: 0 auto;
   background-color: white;
   padding: 2rem;
   display: flex;
   align-items: center;
   justify-content: space-between;
   gap: 1.5rem;
   z-index: 1100;
   transition: opacity 0.3s ease-in-out;
   opacity: 1;
   pointer-events: auto;
}

.message.hidden {
   opacity: 0;
   pointer-events: none;
}


.message span{
   font-size: 2rem;
   color:var(--black);
}

.message i{
   cursor: pointer;
   color:var(--red);
   font-size: 2.5rem;
}

.message i:hover{
   color:var(--black);
}
.prd3-images {
      display: flex;
      justify-content: space-between;
      
      padding: 20px;
      position: relative;
  }
  
  .prd3-images img {
      max-width: 100%;
      height: auto;
      position: relative;
      right: -500px;
      /* border-radius: 10px; */
      margin-bottom:-50px;
      position:relative;

  }
  .prd3-description:hover{
    color: #d52a2a;
  background-color: #fffbfb;;
}
  .ex1{
   padding:10px 20px;
   background-color:#7f2549;
   color:white;
   position: relative;
   font-size:17px;
   height:15px;
   width:30px;
   bottom:-20px;
   border-radius:3px;
  }

  .ex1:hover{
   background-color:black;
   color:#f8bbbb;
}
  /* Style the product description container */
  .prd3-description {
      width: 700px;
      height:170px;
      padding: 20px;
      border:var(--border1);
   border-color:#7f2549;
      background-color: #fdfbf8;
      text-align: center;
      left: 40px;
      position: relative;
      /* border-radius: 10px; */
      bottom:450px;
      color:#7f2549;
  }
  
  .prd3-description h1,p {
      margin-bottom: 10px;
      font-weight:400;
      font-size:20px;
  }
  .prd3-description h2 {
      margin-bottom: 10px;
      
      font-weight:500;
      font-size:35px;
  }
  
  .expbut {
   border-radius:3px;
      padding: 7px 20px;
      background-color: #fa7272;
      color: black;
      border: none;
      cursor: pointer;
     
      /* transition: background-color 0.3s; */
  }
  
  .expbut:hover {
      background-color: black;
      color:#fa7272;
  }

.empty{
   padding:1.5rem;
   background-color: var(--white);
   border: var(--border);
   box-shadow: var(--box-shadow);
   text-align: center;
   color:var(--red);
   border-radius: .5rem;
   font-size: 2rem;
   text-transform: capitalize;
}

.disabled{
   pointer-events: none;
   user-select: none;
   opacity: .5;
}

@keyframes fadeIn{
   0%{
      transform: translateY(1rem);
   }
}

.header{
   position: sticky;
   top:0; left:0; right:0;
   background-color: #7f2549;
   box-shadow: var(--box-shadow);
   z-index: 1000;
}

.header .flex{
   display: flex;
   align-items: center;
   justify-content: space-between;
   position: relative;
}

.header .flex .logo{
   font-size: 2.5rem;
   color:white;
}

.header .flex .logo span{
   color:var(--main-color);
}

.header .flex .navbar a{
   margin:0 1rem;
   font-size: 2rem;
   color:white;
}

.header .flex .navbar a:hover{
   color:black;
   text-decoration: underline;
   transition: 20ms;
  transform: scale(1.1);
}


.header .flex .icons > *{
   font-weight:100px;
   margin-left: 1rem;
   font-size: 2rem;
   cursor: pointer;
   color:white;
}

.header .flex .icons > *:hover{
   color:black;
   transition: 20ms;
   transform: scale(1.1);
}

.header .flex .icons a span{
   font-size: 2rem;
}

.header .flex .profile{
   position: absolute;
   top:120%; right:2rem;
   background-color: var(--white);
   border-radius: .5rem;
   box-shadow: var(--box-shadow);
   border:var(--border);
   padding:2rem;
   width: 30rem;
   padding-top: 1.2rem;
   display: none;
   animation:fadeIn .2s linear;
}

.header .flex .profile.active{
   display: inline-block;
}

.header .flex .profile p{
   text-align: center;
   color:var(--black);
   font-size: 2rem;
   margin-bottom: 1rem;
}

#menu-btn{
   display: none;
}

.home-bg{
   background:url(../images/home-bg.png) no-repeat;
   background-size: cover;
   background-position: center;
}

.home-bg .home .slide{
   display: flex;
   /* align-items: center; */
   /* flex-wrap: wrap; */
   /* gap:1.5rem; */
   /* padding-bottom: 6rem; */
   /* padding-top: 2rem; */
   user-select: none;
}

.home-bg .home .slide .image{
   flex:1 1 40rem;
}

.home-bg .home .slide .image img{
  
   /* object-fit: contain; */
}

.home-bg .home .slide .content{
   flex:1 1 40rem;
}

.home-bg .home .slide .content span{
   font-size: 2rem;
   color:var(--white);
}

.home-bg .home .slide .content h3{
   margin-top: 1rem;
   font-size: 4rem;
   color:var(--white);
   text-transform: uppercase;
}

.home-bg .home .slide .content .btn{
   display: inline-block;
   width: auto;
}

.swiper-pagination-bullet-active{
   background-color: var(--main-color);
}

 .category .slide{
   margin-bottom: 5rem;
   /* box-shadow: var(--box-shadow); */
   /* border:var(--border);  */
   text-align: center;
   padding:0.5rem;
   /* background: var(--white); */
   /* border-radius: .5rem;  */
} 

 .category .slide:hover{
   /* background-color: var(--black); */
} 

 .category .slide:hover img{
   /* filter:invert(); */
}

.category .slide:hover h3{
   /* color:var(--white); */
} 

.category .slide img{
   height: 250px;
   width: 250px;
   /* object-fit: contain; */
   margin-bottom: 1rem;
   user-select: none;
   margin-bottom:50px;
   /* border-radius:50px; */
   box-shadow: #7f2549;
}

.category .slide img:hover{
   transition: 20ms;
  transform: scale(1.1);
}

.category .slide h3{
   font-size: 2rem;
   color:var(--black);
   user-select: none;
   margin-bottom:50px;
   /* text-align:left; */
   position: relative;
   text-align:center;
}

.home-products .slide{
   position: relative;
   padding:1.5rem;
   
   /* border-radius: .5rem; */
   /* border:var(--border); */
   background-color:#fffcfc;
   box-shadow: var(--box-shadow);
   margin-bottom: 5rem;
   overflow: hidden;
   user-select: none;
}

.home-products .slide img{
   width: 370px;
   height: 480px;
   object-fit: contain;
   margin-bottom: 2rem;
   position: relative;
   left:38px;
}
/* .home-products .slide img:hover{
   transition: 20ms;
  transform: scale(1.1);
} */

.home-products .slide .name{
   font-size: 2rem;
   color:var(--black);
}

.home-products .slide .flex{
   display: flex;
   align-items: center;
   justify-content: space-between;
   gap:1rem;
}

.home-products .slide .flex .qty{
   width: 7rem;
   padding:1rem;
   border:var(--border);
   border-color:#7f2549;
   font-size: 1.8rem;
   color:#7f2549;
   border-radius: .5rem;
}

.home-products .slide .flex .price{
   margin:1rem 0;
   font-size: 2rem;
   color:var(--red);
}

/* .home-products .slide .fa-heart,
.home-products .slide .fa-eye{
   position: absolute;
   top:1rem;
   height: 4.5rem;
   width: 4.5rem;
   line-height: 4.2rem;
   font-size: 2rem;
   background-color: var(--white);
   border:var(--border);
   border-radius: .5rem;
   text-align: center;
   color:rgb(255, 151, 168);
   cursor: pointer;
   transition: .2s linear;
}

.home-products .slide .fa-heart{
   right: -6rem;
}

.home-products .slide .fa-eye{
   left: -6rem;
}

.home-products .slide .fa-heart:hover,
.home-products .slide .fa-eye:hover{
   background-color: var(--black);
   color:var(--white);
}

.home-products .slide:hover .fa-heart{
   right: 1rem;
}

.home-products .slide:hover .fa-eye{
   left: 1rem;
} */

.quick-view form {
    padding: 2rem;
    border-radius: 0.5rem;
    /* border: var(--border); */
    /* background-color: var(--white); */
    /* box-shadow: var(--box-shadow); */
    margin-top: 1rem;
}

.quick-view form .row{
   display: flex;
   align-items: center;
   gap:1.5rem;
   flex-wrap: wrap;
}

.quick-view form .row .image-container{
   margin-bottom: 2rem;
   flex:1 1 40rem;
}

.quick-view form .row .image-container .main-image img{
   height: 350px;
   width: 450px;
   object-fit: contain;
   position: relative;
   left:138px;
}

.quick-view form .row .image-container .sub-image{
   display: flex;
   gap:1.5rem;
   justify-content: center;
   margin-top: 2rem;
}

.quick-view form .row .image-container .sub-image img:hover{
   transition: 20ms;
  transform: scale(1.1);
}

.quick-view form .row .image-container .sub-image img{
   height: 100px;
   width: 100%;
   object-fit: contain;
   padding:.5rem;
   border:var(--border);
   cursor: pointer;
   transition: .2s linear;
}

.quick-view form .flex .image-container .sub-image img:hover{
   transition: 20ms;
  transform: scale(1.1);
}
/* 
.quick-view form img{
   width: 100%;
   height: 20rem;
   object-fit: contain;
   margin-bottom: 2rem;
} */
.quick-view form img:hover{
   transition: 20ms;
  transform: scale(1.1);
}

.quick-view form .row .content{
   flex:1 1 40rem;
}

.quick-view form .row .content .name{
   font-size: 2rem;
   color:var(--black);
}

.quick-view form .row .flex{
   display: flex;
   align-items: center;
   justify-content: space-between;
   gap:1rem;
   margin:1rem 0;
}

.quick-view form .row .flex .qty{
   width: 7rem;
   padding:1rem;
   border:var(--border);
   font-size: 1.8rem;
   color:var(--black);
   border-radius: .5rem;
}

.quick-view form .row .flex .price{
   font-size: 2rem;
   color:var(--red);
}

.quick-view form .row .content .details{
   font-size: 1.6rem;
   color:var(--light-color);
   line-height: 2;
}  
.products .box-container{
   display: grid;
   grid-template-columns: repeat(auto-fit, 33rem);
   gap:1.5rem;
   justify-content: center;
   align-items: flex-start;
}

.products .box-container .box{
   position: relative;
   background-color: var(--white);
   box-shadow: var(--box-shadow);
   /* border-radius: .5rem;
   border:var(--border); */
   padding:2rem;
   overflow: hidden;
   height:480px;
   width:350px;
}

.products .box-container .box img{
   height: 300px;
   width: 260px;
   object-fit: contain;
   margin-bottom: 1rem;
   position: relative;
   left:23px;
}

.products .box-container .box .fa-heart,
.products .box-container .box .fa-eye{
   position: absolute;
   top:1rem;
   height: 4.5rem;
   width: 4.5rem;
   line-height: 4.2rem;
   font-size: 2rem;
   background-color:white;
   color: #7f2549;
   /* border:var(--border); */
    border-radius: .5rem; 
   text-align: center;
   
   cursor: pointer;
   transition: .2s linear;
}

.products .box-container .box .fa-heart{
   right: -6rem;
}

.products .box-container .box .fa-eye{
   left: -6rem;
}

.products .box-container .box .fa-heart:hover,
.products .box-container .box .fa-eye:hover{
   background-color: #7f2549;;
   color:white;
}

.products .box-container .box:hover .fa-heart{
   right:1rem;
}

.products .box-container .box:hover .fa-eye{
   left:1rem;
}

.products .box-container .box .name{
   font-size: 2rem;
   color:var(--black);
}

.products .box-container .box .flex{
   display: flex;
   align-items: center;
   gap:1rem;
}

.products .box-container .box .flex .qty{
   width: 7rem;
   padding:1rem;
   /* border:var(--border); */
   font-size: 1.8rem;
   color:var(--black);
   /* border-radius: .5rem; */
   border:var(--border);
   border-color:#7f2549;
}

.products .box-container .box .flex .price{
   font-size: 2rem;
   color:var(--red);
   margin-right: auto;
}

.form-container form{
   background-color: var(--white);
   padding:2rem;
   border-radius: .5rem;
   border:var(--border);
   box-shadow: var(--box-shadow);
   text-align: center;
   margin:0 auto;
   max-width: 50rem;
}

.form-container form h3{
   font-size: 2.5rem;
   text-transform: uppercase;
   color:var(--black);
}

.form-container form p{
   font-size: 2rem;
   color:var(--light-color);
   margin:1.5rem 0;
}

.form-container form .box{
   margin:1rem 0;
   background-color: var(--light-bg);
   padding:1.4rem;
   font-size: 1.8rem;
   color:var(--black);  
   width: 100%;
   border-radius: .5rem;
}

.about .row{
   display: flex;
   align-items: center;
   flex-wrap: wrap;
   gap:1.5rem;
}

.about .row .image{
   flex:1 1 40rem;
}

.about .row .image img{
   width: 100%;
}

.about .row .content{
   flex:1 1 40rem;
}

.about .row .content h3{
   font-size: 3rem;
   color:var(--black);
}

.about .row .content p{
   line-height: 2;
   font-size: 1.5rem;
   color:var(--light-color);
   padding:1rem 0;
}

.about .row .content .btn{
   display: inline-block;
   width: auto;
}

.reviews .slide{
   padding:2rem;
   text-align: center;
   background-color: var(--white);
   box-shadow: var(--box-shadow);
   border-radius: .5rem;
   border:var(--border);
   margin-bottom: 5rem;
   user-select: none;
}

.reviews .slide img{
   height: 10rem;
   width: 10rem;
   border-radius: 50%;
   margin-bottom: .5rem;
}

.reviews .slide p{
   padding:1rem 0;
   line-height: 2;
   font-size: 1.5rem;
   color:var(--light-color);
}

.reviews .slide .stars{
   display: inline-block;
   margin-bottom: 1rem;
   background-color: var(--light-bg);
   padding:1rem 1.5rem;
   border-radius: .5rem;
}

.reviews .slide .stars i{
   margin:0 .3rem;
   font-size: 1.7rem;
   color:var(--orange);
}

.reviews .slide h3{
   font-size: 2rem;
   color:var(--black);
}

.contact form{
   padding:2rem;
   text-align: center;
   background-color: var(--white);
   box-shadow: var(--box-shadow);
   border-radius: .5rem;
   border:var(--border);
   max-width: 50rem;
   margin:0 auto;
}

.contact form h3{
   margin-bottom: 1rem;
   text-transform: capitalize;
   font-size: 2.5rem;
   color:var(--black);
}

.contact form .box{
   margin:1rem 0;
   width: 100%;
   background-color: var(--light-bg);
   padding:1.4rem;
   font-size: 1.8rem;
   color:var(--black);
   border-radius: .5rem;
}

.contact form textarea{
   height: 15rem;
   resize: none;
}

.search-form form{
   display: flex;
   gap:1rem;
}

.search-form form input{
   width: 100%;
   border:var(--border);
   border-radius: .5rem;
   background-color: var(--white);
   box-shadow: var(--box-shadow);
   padding:1.4rem;
   font-size: 1.8rem;
   color:var(--black);
}

.search-form form button{
   font-size: 2.5rem;
   height: 5.5rem;
   line-height: 5.5rem;
   background-color: var(--main-color);
   cursor: pointer;
   color:var(--white);
   border-radius: .5rem;
   width: 6rem;
   text-align: center;
}

.search-form form button:hover{
   background-color: var(--black);
}

.wishlist-total{
   max-width: 50rem;
   margin:0 auto;
   margin-top: 3rem;
   background-color: var(--white);
   border:var(--border);
   border-radius: .5rem;;
   padding:2rem;
   text-align: center;
}

.wishlist-total p{
   font-size: 2.5rem;
   color:var(--black);
   margin-bottom: 2rem;
}

.wishlist-total p span{
   color:var(--red);
}

.shopping-cart .fa-edit{
   height: 4.5rem;
   border-radius: .5rem;
   background-color: #7f2549
;
   width: 5rem;
   font-size: 2rem;
   color:var(--white);
   cursor: pointer;
}

.shopping-cart .fa-edit:hover{
   background-color: var(--black);
}

.shopping-cart .sub-total{
   margin:2rem 0;
   font-size: 2rem;
   color:var(--light-color);
}

.shopping-cart .sub-total span{
   color:var(--red);
}

.cart-total{
   max-width: 50rem;
   margin:0 auto;
   margin-top: 3rem;
   background-color: var(--white);
   /* border:var(--border);
   border-radius: .5rem;; */
   padding:2rem;
   text-align: center;
}

.cart-total p{
   font-size: 2.5rem;
   color:var(--black);
   margin-bottom: 2rem;
}

.cart-total p span{
   color:var(--red);
}

.display-orders{
   text-align: center;
   padding-bottom: 0;
}

.display-orders p{
   display: inline-block;
   padding:1rem 2rem;
   margin:1rem .5rem;
   font-size: 2rem;
   text-align: center;
   border:var(--border);
   background-color: var(--white);
   box-shadow: var(--box-shadow);
   border-radius: .5rem;
}

.display-orders p span{
   color:var(--red);
}

.display-orders .grand-total{
   margin-top: 1.5rem;
   margin-bottom: 2.5rem;
   font-size: 2.5rem;
   color:var(--light-color);
}

.display-orders .grand-total span{
   color:var(--red);
}

.checkout-orders form{
   padding:2rem;
   border:var(--border);
   background-color: var(--white);
   box-shadow: var(--box-shadow);
   border-radius: .5rem;
}

.checkout-orders form h3{
   border-radius: .5rem;
   background-color: var(--black);
   color:var(--white);
   padding:1.5rem 1rem;
   text-align: center;
   text-transform: uppercase;
   margin-bottom: 2rem;
   font-size: 2.5rem;
}

.checkout-orders form .flex{
   display: flex;
   flex-wrap: wrap;
   gap:1.5rem;
   justify-content: space-between;
}

.checkout-orders form .flex .inputBox{
   width: 49%;
}

.checkout-orders form .flex .inputBox .box{
   width: 100%;
   border:var(--border);
   border-radius: .5rem;
   font-size: 1.8rem;
   color:var(--black);
   padding:1.2rem 1.4rem;
   margin:1rem 0;
   background-color: var(--light-bg);
}

.checkout-orders form .flex .inputBox span{
   font-size: 1.8rem;
   color:var(--light-color);
}

.orders .box-container{
   display: flex;
   flex-wrap: wrap;
   gap:1.5rem;
   align-items: flex-start;
}

.orders .box-container .box{
   padding:1rem 2rem;
   flex:1 1 40rem;
   border:var(--border);
   background-color: var(--white);
   box-shadow: var(--box-shadow);
   border-radius: .5rem;
}

.orders .box-container .box p{
   margin:.5rem 0;
   line-height: 1.8;
   font-size: 2rem;
   color:var(--light-color);
}

.orders .box-container .box p span{
   color:var(--main-color);
}

.footer{
   background-color: #fffcfc;
   /* padding-bottom: 7rem; */
}

.footer .grid{
   display: grid;
   grid-template-columns: repeat(auto-fit, minmax(27rem, 1fr));
   gap:1.5rem;
   align-items: flex-start;
}

.footer .grid .box h3{
   font-size: 2rem;
   color:var(--black);
   margin-bottom: 2rem;
   text-transform: capitalize;
}

.footer .grid .box a{
   display: block;
   margin:1.5rem 0;
   font-size: 1.7rem;
   color:var(--light-color);
}

.footer .grid .box a i{
   padding-right: 1rem;
   color:#7f2549
;
   transition: .2s linear;
}

.footer .grid .box a:hover{
   color:#7f2549
);
}

.footer .grid .box a:hover i{
   padding-right: 2rem;
}

.footer .credit{
   text-align: center;
   padding: 2.5rem 2rem;
   border-top: var(--border);
   font-size: 2rem;
   color:var(--black);
}

.footer .credit span{
   color:#7f2549;
}






@media (max-width:991px){

   html{
      font-size: 55%;
   }

}

@media (max-width:768px){

   #menu-btn{
      display: inline-block;
   }

   .header .flex .navbar{
      position: absolute;
      top:99%; left:0; right:0;
      border-top: var(--border);
      border-bottom: var(--border);
      background-color: var(--white);
      transition: .2s linear;
      clip-path: polygon(0 0, 100% 0, 100% 0, 0 0);
   }

   .header .flex .navbar.active{
      clip-path: polygon(0 0, 100% 0, 100% 100%, 0% 100%);
   }

   .header .flex .navbar a{
      display: block;
      margin:2rem;
   }

   .home-bg .home .slide .content{
      text-align: center;
   }

   .home-bg .home .slide .content h3{
      font-size: 3rem;
   }

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
  font-family: sans-serif;
}

.footer-section p {
  margin-bottom: 10px;
  line-height: 1.6;
  font-family: sans-serif;
}

.footer-section ul {
  list-style: none;
  padding: 0;
  font-family: sans-serif;
  font-size: 17px;
}

.footer-section ul li {
  margin-bottom: 5px;
  font-family: sans-serif;
}

.footer-section a {
  color: #fff;
  text-decoration: none;
  transition: color 0.3s ease;
}

.footer-section a:hover {
  color: yellow;
}

.face:hover{
  color: yellow;
  size:10px;
}


.footer-bottom {
  text-align: center;
  padding: 0px 0;
  background-color: black;
  color: #fff;
  margin-bottom:-29px;
}

.footer-links a {
  color: #fff;
  text-decoration: none;
  margin: 0 10px;
  font-family: sans-serif;
  font-size:17px;
}

.footer-links a:hover {
  color: yellow;
}


@media (max-width:450px){

   html{
      font-size: 50%;
   }

   .heading{
      font-size: 3.5rem;
   }

   .flex-btn{
      flex-flow: column;
      gap:0;
   }

   .quick-view form .row .image-container .sub-image img{
      width: 8rem;
   }

   .checkout-orders form .flex .inputBox{
      width: 100%;
   }

}


</style>

<!-- Uncomment your JavaScript code -->
<script>
  // Function to change the main image when a sub-image is clicked
  function changeMainImage(imageSrc) {
    document.getElementById('main-image').src = imageSrc;
  }
</script>




<script>
   let navbar = document.querySelector('.header .flex .navbar');
let profile = document.querySelector('.header .flex .profile');

document.querySelector('#menu-btn').onclick = () => {
   navbar.classList.toggle('active');
   profile.classList.remove('active');
}

document.querySelector('#user-btn').onclick = () => {
   profile.classList.toggle('active');
   navbar.classList.remove('active');
}

window.onscroll = () => {
   navbar.classList.remove('active');
   profile.classList.remove('active');
}

let mainImage = document.querySelector('.quick-view .box .row .image-container .main-image img');
let subImages = document.querySelectorAll('.quick-view .box .row .image-container .sub-image img');

subImages.forEach(image => {
   image.onclick = () => {
      let src = image.getAttribute('src'); // Declare a variable 'src'
      mainImage.src = src;
   }
});

   </script>







<!-- <?php include 'components/footer.php'; ?> -->

<!-- <script src="script123.js"></script> -->

</body>
</html>