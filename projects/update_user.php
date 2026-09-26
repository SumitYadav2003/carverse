<?php

include 'connect.php';

session_start();

if(isset($_SESSION['user_id'])){
   $user_id = $_SESSION['user_id'];
}else{
   $user_id = '';
};

if(isset($_POST['submit'])){

   $name = $_POST['name'];
   $name = filter_var($name, FILTER_SANITIZE_STRING);
   $email = $_POST['email'];
   $email = filter_var($email, FILTER_SANITIZE_STRING);

   $update_profile = $conn->prepare("UPDATE `users` SET name = ?, email = ? WHERE id = ?");
   $update_profile->execute([$name, $email, $user_id]);

   $empty_pass = 'da39a3ee5e6b4b0d3255bfef95601890afd80709';
   $prev_pass = $_POST['prev_pass'];
   $old_pass = sha1($_POST['old_pass']);
   $old_pass = filter_var($old_pass, FILTER_SANITIZE_STRING);
   $new_pass = sha1($_POST['new_pass']);
   $new_pass = filter_var($new_pass, FILTER_SANITIZE_STRING);
   $cpass = sha1($_POST['cpass']);
   $cpass = filter_var($cpass, FILTER_SANITIZE_STRING);

   if($old_pass == $empty_pass){
      $message[] = 'please enter old password!';
   }elseif($old_pass != $prev_pass){
      $message[] = 'old password not matched!';
   }elseif($new_pass != $cpass){
      $message[] = 'confirm password not matched!';
   }else{
      if($new_pass != $empty_pass){
         $update_admin_pass = $conn->prepare("UPDATE `users` SET password = ? WHERE id = ?");
         $update_admin_pass->execute([$cpass, $user_id]);
         $message[] = 'password updated successfully!';
      }else{
         $message[] = 'please enter a new password!';
      }
   }
   
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>register</title>
   
   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

   <!-- custom css file link  -->
   <!-- <link rel="stylesheet" href="css/style.css"> -->

</head>
<body>

<header>
  <div class="nav contain">

    <i class='bx bx-menu' id="menu-icon"></i>

    <a href="#" class="logo">Car<span>Verse</span></a>
    <ul class="navbar">
    <li><a href="Mainpage.php" class="active">Home</a></li>
    <li><a href="about.html">About</a></li>
    <li><a href="service.html">Services</a></li>
    <li><a href="blog1.html">Our Blog</a></li>
    <li><a href="contactus.html">Contact</a></li>
    <li><a href="logout.php" onclick="return confirm('logout from the website?');">logout</a> </li>

    </ul> 
</div>
</header>
   

<!-- <?php include 'user_header.php'; ?> -->

<section class="form-container">

   <form action="" method="post">
      <h3>update now</h3>
      <input type="hidden" name="prev_pass" value="<?= $fetch_profile["password"]; ?>">
      <input type="text" name="name" requicrimson placeholder="enter your username" maxlength="20"  class="box" >
      <input type="email" name="email" requicrimson placeholder="enter your email" maxlength="50"  class="box" oninput="this.value = this.value.replace(/\s/g, '')" >
      <input type="password" name="old_pass" placeholder="enter your old password" maxlength="20"  class="box" oninput="this.value = this.value.replace(/\s/g, '')">
      <input type="password" name="new_pass" placeholder="enter your new password" maxlength="20"  class="box" oninput="this.value = this.value.replace(/\s/g, '')">
      <input type="password" name="cpass" placeholder="confirm your new password" maxlength="20"  class="box" oninput="this.value = this.value.replace(/\s/g, '')">
      <input type="submit" value="update now" class="btn" name="submit" onclick="return confirm('Profile Updated successfully');">
   </form>

</section>

 
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
               <a href="imagess/facebook.png" title="Facebook"><i class="fab fa-facebook-f"></i></a>
               <a href="imagess/twitter.png" title="Twitter"><i class="fab fa-twitter"></i></a>
               <a href="imagess/instagram.webp" title="Instagram"><i class="fab fa-instagram"></i></a>
               <a href="#" title="LinkedIn"><i class="fab fa-linkedin"></i></a>
               <a href="#" title="YouTube"><i class="fab fa-youtube"></i></a>
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









<style>


header {
display: block; width: 100%;
position: fixed;
top: 0;
left: 0;
 z-index: 100;
 background-color:crimson;
}
        
        
.nav{
 display: flex;
align-items: center;
justify-content: space-between;
padding: 20px 118px;
}
        
#menu-icon {
font-size: 24px;
cursor: pointer;
 color: black;
display: none;
}

.logo {
font-size: 23px;
font-weight: 700;
color: black;
}
        
        
.navbar{
display: flex;
column-gap: 2rem;
position: fixed;
padding-left: 604px; 
}
     
.navbar a {
color: black;
font-size: 17px;
text-transform: uppercase;
font-weight: 1000;
text-decoration: none;
padding: 10px 8px;
}
        
.navbar a:hover,
 .navbar .active{
 color:yellow;
        } 
:root {
--main-color: #d90429;
--text-color:#020102;
--bg-color:#fff;
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
   /* border:var(--border);
   border-color:#7f2549; */
   
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
   --crimson:#7f2549;
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
   background:url('imagess/contactimg.jpg');
   background-size:cover;
   /* padding: 0;
   margin: 0; */
  background-size: cover;
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-position: center center;
 
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
   /* border:var(--border);
    border-color:#7f2549;
   color: #020102; */
   background-color: crimson;
  color: var(--bg-color);
  font-weight: 400;
}

.btn:hover,
.delete-btn:hover,
.option-btn:hover{
   /* color: #f8bbbb;
   background-color: black;    */
   background: var(--bg-color);
  color: crimson;
  border: 1px solid var(--main-color)
}

/* .btn{
 
  background-color: var(--main-color);
  color: var(--bg-color);
  font-weight: 400;
}



.option-btn{
   background-color: var(--main-color);
  color: var(--bg-color);
  font-weight: 400;
   
  
}

.delete-btn{
   /* background-color: #7f2549;
   color: white; */
   border:var(--border);
   border-color:#7f2549;
   color: #7f2549;
   background-color:#ffffff70;
} */

.flex-btn{
   display: flex;
   gap:1rem;
}



.message{
   position: sticky;
   top:0;
   max-width: 1200px;
   margin:0 auto;
   background-color: var(--light-bg);
   padding:2rem;
   display: flex;
   align-items: center;
   justify-content: space-between;
   gap:1.5rem;
   z-index: 1100;
}

.message span{
   font-size: 2rem;
   color:var(--black);
}

.message i{
   cursor: pointer;
   color:var(--crimson);
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
   /* background-color:#7f2549; */
   color:white;
   position: relative;
   font-size:17px;
   height:15px;
   width:30px;
   bottom:-20px;
   /* border-radius:3px; */

   border:var(--border);
    border-color:#7f2549;
color: #7f2549;
background-color:#fdf6f0;
  }

  .ex1:hover{
   background-color:#7f2549;
         color: #fdf6f0;
}
  /* Style the product description container */
  .prd3-description {
      width: 700px;
      height:170px;
      padding: 20px;
      border:var(--border);
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
   color:var(--crimson);
   
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
   
   box-shadow: var(--box-shadow);
   border:var(--border);
   border-color:#7f2549;
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
   /* border:var(--border);
   border-color:#7f2549;  */
   text-align: center;
   padding:0.5rem;
   /* background: var(--white); */
   /*   */
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
   
   /*  */
   /* border:var(--border);
   border-color:#7f2549; */
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
   border-color:#7f2549;
   font-size: 1.8rem;
   color:#7f2549;
   
}

.home-products .slide .flex .price{
   margin:1rem 0;
   font-size: 2rem;
   color:var(--crimson);
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
   border-color:#7f2549;
   
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

.quick-view form{
   padding:2rem;
   
   border:var(--border);
   border-color:#7f2549;
   background-color: var(--white);
   box-shadow: var(--box-shadow);
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
   height: 30rem;
   width: 100%;
   object-fit: contain;
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
   height: 7rem;
   width: 10rem;
   object-fit: contain;
   padding:.5rem;
   border:var(--border);
   border-color:#7f2549;
   cursor: pointer;
   transition: .2s linear;
}

.quick-view form .flex .image-container .sub-image img:hover{
   transition: 20ms;
  transform: scale(1.1);
}

.quick-view form img{
   width: 100%;
   height: 20rem;
   object-fit: contain;
   margin-bottom: 2rem;
}
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
   border-color:#7f2549;
   font-size: 1.8rem;
   color:var(--black);
   
}

.quick-view form .row .flex .price{
   font-size: 2rem;
   color:var(--crimson);
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
   /* 
   border:var(--border);
   border-color:#7f2549; */
   padding:2rem;
   overflow: hidden;
}

.products .box-container .box img{
   height: 20rem;
   width: 100%;
   object-fit: contain;
   margin-bottom: 1rem;
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
   /* border:var(--border);
   border-color:#7f2549; */
   /*  */
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
   /* border:var(--border);
   border-color:#7f2549; */
   font-size: 1.8rem;
   color:var(--black);
   /*  */
}

.products .box-container .box .flex .price{
   font-size: 2rem;
   color:var(--crimson);
   margin-right: auto;
}
.form-container form {
    background-color: rgb(255 250 250 / 22%);
    padding: 2rem;
    border-radius: 0.5rem;
    box-shadow: var(--box-shadow);
    text-align: center;
    margin: 0 auto;
    max-width: 50rem;
    margin-bottom: 135px;
    margin-top: 109px;
    position: relative;
    left: 6px;
    border:0.2rem solid;
    border-color:crimson;
}

.form-container form h3{
   font-weight:bold;
   font-size: 28px;
   text-transform: uppercase;
   color:crimson;

}

.form-container form p{
   font-size: 2rem;
   color:var(--light-color);
   margin:1.5rem 0;
}

.form-container form .box{
   margin:1rem 0;
   background-color: #eaae8ba6;
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
   
   border:var(--border);
   border-color:#7f2549;
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
   
   border:var(--border);
   border-color:#7f2549;
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
   border-color:#7f2549;
   
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
   border-color:#7f2549;
   ;
   padding:2rem;
   text-align: center;
}

.wishlist-total p{
   font-size: 2.5rem;
   color:var(--black);
   margin-bottom: 2rem;
}

.wishlist-total p span{
   color:var(--crimson);
}

.shopping-cart .fa-edit{
   height: 4.5rem;
   
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
   color:var(--crimson);
}

.cart-total{
   max-width: 50rem;
   margin:0 auto;
   margin-top: 3rem;
   background-color: var(--white);
   /* border:var(--border);
   border-color:#7f2549;
   ; */
   padding:2rem;
   text-align: center;
}

.cart-total p{
   font-size: 2.5rem;
   color:var(--black);
   margin-bottom: 2rem;
}

.cart-total p span{
   color:var(--crimson);
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
   border-color:#7f2549;
   background-color: var(--white);
   box-shadow: var(--box-shadow);
   
}

.display-orders p span{
   color:var(--crimson);
}

.display-orders .grand-total{
   margin-top: 1.5rem;
   margin-bottom: 2.5rem;
   font-size: 2.5rem;
   color:var(--light-color);
}

.display-orders .grand-total span{
   color:var(--crimson);
}

.checkout-orders form{
   padding:2rem;
   border:var(--border);
   border-color:#7f2549;
   background-color: var(--white);
   box-shadow: var(--box-shadow);
   
}

.checkout-orders form h3{
   
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
   border-color:#7f2549;
   
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
   border-color:#7f2549;
   background-color: var(--white);
   box-shadow: var(--box-shadow);
   
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
  font-size: 28px;
  margin-bottom: 10px;
}

.footer-section p {
  margin-bottom: 10px;
  line-height: 1.6;
}

.footer-section ul {
    list-style: none;
    padding: 0;
    font-size: 21px;
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
  color: yellow;
}




.footer-bottom {
    text-align: center;
    padding: 0px 0;
    background-color: black;
    color: #fff;
    margin-bottom: -39px;
}

.footer-links a {
    color: #fff;
    text-decoration: none;
    margin: 0 10px;
    font-size: 19px;
}

.footer-links a:hover {
  color: yellow;
}







</style>
<!-- <?php include 'components/footer.php'; ?> -->

<script src="js/script.js"></script>

</body>
</html>
