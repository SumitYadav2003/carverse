<?php

include 'connect.php';

session_start();

$admin_id = $_SESSION['admin_id'];

if(!isset($admin_id)){
   header('location:admin_login.php');
}

if(isset($_POST['submit'])){

   $name = $_POST['name'];
   $name = filter_var($name, FILTER_SANITIZE_STRING);
   $pass = sha1($_POST['pass']);
   $pass = filter_var($pass, FILTER_SANITIZE_STRING);
   $cpass = sha1($_POST['cpass']);
   $cpass = filter_var($cpass, FILTER_SANITIZE_STRING);

   $select_admin = $conn->prepare("SELECT * FROM `admins` WHERE name = ?");
   $select_admin->execute([$name]);

   if($select_admin->rowCount() > 0){
      $message[] = 'username already exist!';
   }else{
      if($pass != $cpass){
         $message[] = 'confirm password not matched!';
      }else{
         $insert_admin = $conn->prepare("INSERT INTO `admins`(name, password) VALUES(?,?)");
         $insert_admin->execute([$name, $cpass]);
         $message[] = 'new admin registecrimson successfully!';
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
   <title>register admin</title>

   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

   <link rel="stylesheet" href="admin_style.css">

</head>
<body>
<div class="main">
<video autoplay muted loop plays-inline class="backvideo" >
            <source src="imagess/defendervideo.mp4" type="video/mp4" >
        </video>
</div>

<?php include 'admin_header.php'; ?>

<section class="form-container">

   <form action="" method="post">
      <h3>register now</h3>
      <input type="text" name="name" requicrimson placeholder="enter your username" maxlength="20"  class="box" oninput="this.value = this.value.replace(/\s/g, '')">
      <input type="password" name="pass" requicrimson placeholder="enter your password" maxlength="20"  class="box" oninput="this.value = this.value.replace(/\s/g, '')">
      <input type="password" name="cpass" requicrimson placeholder="confirm your password" maxlength="20"  class="box" oninput="this.value = this.value.replace(/\s/g, '')">
      <input type="submit" value="register now" class="btn" name="submit">
   </form>

</section>


<style>
   @import url('https://fonts.googleapis.com/css2?family=Nunito:wght@200;300;400;500;600;700&display=swap');

:root{
   --main-color:#2980b9;
   --orange:#f39c12;
   --crimson:#e74c3c;
   --black:#444;
   --white:#fff;
   --light-color:#777;
   --light-bg:#f5f5f5;
   --border:.2rem solid var(--black);
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

.backvideo {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    -o-object-fit: cover;
    object-fit: cover;
    max-width: none;
    z-index: -1;
}
/* body{
   background:url('imagess/lambo.jpg');
   background-size:cover;

} */

section{
   padding:2rem;
   max-width: 1200px;
   margin:0 auto;
}

 .heading{
   font-size: 4rem;
   color:var(--black);
   margin-bottom: 2rem;
   text-align: center;
   text-transform: uppercase;
} 
  

.btn,
.option-btn{
   display: block;
   width: 100%;
   margin-top: 1rem;
   border-radius: .5rem;
   padding:1rem 3rem;
   font-size: 1.7rem;
   text-transform: capitalize;
   color:black;
   cursor: pointer;
   text-align: center;
   text-transform:uppercase;
   background-color:yellow;
}

.delete-btn{
   display: block;
   width: 100%;
   margin-top: 1rem;
   border-radius: .5rem;
   padding:1rem 3rem;
   font-size: 1.7rem;
   text-transform: capitalize;
   color:black;
   cursor: pointer;
   text-align: center;
   text-transform:uppercase;
   background-color:yellow;
}

.btn:hover,
.delete-btn:hover,
{
   background-color: crimson;
   color:white;
}

.option-btn:hover{
   background-color:white;
}

.btn{
   background-color: #ffffff29;
   color:black;
   font-weight:bold;
   border:0.2rem solid;
   border-color:crimson;
}

.btn:hover{
   /* background-color:yellow; */
   background-color: crimson;
   color:white;

}


.option-btn{
   background-color: yellow;
}

.delete-btn{
   background-color: crimson;
}

.delete-btn:hover{
   background-color:yellow;
}

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

.empty{
   padding:1.5rem;
   background-color: var(--white);
   border: var(--border);
   box-shadow: var(--box-shadow);
   text-align: center;
   color:var(--crimson);
   border-radius: .5rem;
   font-size: 2rem;
   text-transform: capitalize;
}

@keyframes fadeIn{
   0%{
      transform: translateY(1rem);
   }
}

.form-container{
   min-height: 100vh;
   display: flex;
   align-items: center;
   justify-content: center;
}

.form-container form{
   background-color: #c9adad47;
    padding: 2rem;
    border: var(--border);
    border-color: #f01616;
    box-shadow: var(--box-shadow);
    text-align: center;
    margin: 0 auto;
    max-width: 50rem;
    position: relative;
    top:-40px;
}

.form-container form h3{
   /* text-transform: uppercase;
   color:var(--black);
   margin-bottom: 1rem;
   font-size: 2.5rem; */
color: #fff;
  text-shadow:
      0 0 7px crimson,
      0 0 10px crimson,
      0 0 21px crimson,
      0 0 42px crimson,
      0 0 82px crimson,
      0 0 92px crimson,
      0 0 102px crimson,
      0 0 151px crimson;
}

@keyframes flicker {
    
    0%, 18%, 22%, 25%, 53%, 57%, 100% {
  
        text-shadow:
        0 0 4px #fff,
        0 0 11px #fff,
        0 0 19px #fff,
        0 0 40px #0fa,
        0 0 80px #0fa,
        0 0 90px #0fa,
        0 0 100px #0fa,
        0 0 150px #0fa;
    
    }
    
    /* 20%, 24%, 55% {        
        text-shadow: none;
    }     */
  }


.form-container form p{
   /* font-size: 1.8rem; */
   /* color:#020202; */
   margin-bottom: 1rem;
   border-radius: .5rem;

   font-size: 2rem;
   /* color:#bdb4b4; */
   color:black;
   /* margin:1.5rem 0; */
}

.form-container form p span{
   color:white;
}

.form-container form .box{
   width: 100%;
   border-radius: .5rem;
   /* background-color: #ba1d1d38; */
   padding:1.4rem;
   font-size: 1.8rem;
   /* color:var(--black); */
   font-weight:bold;
   


   margin:1rem 0;
   background-color:#eaae8b00;
   padding:1.4rem;
   font-size: 1.8rem;
   width: 100%;
   color:white;
   border: var(--border);
   border-color: #f01616;

}

.header{
   position: sticky;
   top:0; left:0; right:0;
   /* background-color: var(--white); */
   box-shadow: var(--box-shadow);
   z-index: 1000;
   background-color:crimson;
}

.header .flex{
   display: flex;
   align-items: center;
   justify-content: space-between;
   position: relative;
}

.header .flex .logo{
   font-size: 2.5rem;
   color:black;
}

.header .flex .logo span{
   color:yellow;
}

.header .flex .navbar a{
   margin:0 1rem;
   font-size: 2rem;
   color:black;
   font-weight:bold;
}

.header .flex .navbar a:hover{
   color:yellow;
   text-decoration: underline;
}

.header .flex .icons div{
   margin-left: 1.7rem;
   font-size: 2.5rem;
   cursor: pointer;
   color:var(--black);
}

.header .flex .icons div:hover{
   color:var(--main-color);
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
   font-weight:bold;
   text-transform:uppercase;
}

#menu-btn{
   display: none;
}

.dashboard .box-container{
   display: grid;
   grid-template-columns: repeat(auto-fit, minmax(27rem, 1fr));
   gap:1.5rem;
   justify-content: center;
   align-items: flex-start;
}

.dashboard .box-container .box{
   padding:2rem;
   text-align: center;
   border:var(--border);
   box-shadow: var(--box-shadow);
   border-radius: .5rem;
   background-color: var(--white);
}

.dashboard .box-container .box h3{
   font-size: 2.7rem;
   color:var(--black);
}

.dashboard .box-container .box h3 span{
   font-size: 2rem;
}

.dashboard .box-container .box p{
   padding:1.3rem;
   border-radius: .5rem;
   background-color: var(--light-bg);
   font-size: 1.7rem;
   color:var(--light-color);
   margin:1rem 0;
}

.add-products form{
   max-width: 70rem;
   margin: 0 auto;   
   background-color: var(--white);
   box-shadow: var(--box-shadow);
   border:var(--border);
   border-radius: .5rem;
   padding:2rem;
}

.add-products form .flex{
   display: flex;
   gap:1.5rem;
   flex-wrap: wrap;
}

.add-products form .flex .inputBox{
   flex:1 1 25rem;
} 

.add-products form span{
   font-size:1.7rem;
   color:var(--light-color);
}

.add-products form .box{
   font-size: 1.8rem;
   background-color: var(--light-bg);
   border-radius: .5rem;
   padding:1.4rem;
   width: 100%;
   margin-top: 1.5rem;
}

.add-products form textarea{
   height: 5.4rem;
   resize: none;
}

.show-products .box-container{
   display: grid;
   grid-template-columns: repeat(auto-fit, 33rem);
   gap:1.5rem;
   justify-content: center;
   align-items: flex-start;
}

.show-products .box-container .box{
   background-color: var(--white);
   box-shadow: var(--box-shadow);
   border-radius: .5rem;
   border:var(--border);
   padding:2rem;
}

.show-products .box-container .box img{
   width: 100%;
   height: 20rem;
   object-fit: contain;
   margin-bottom: 1.5rem;
}

.show-products .box-container .box .name{
   font-size: 2rem;
   color:var(--black);
}

.show-products .box-container .box .price{
   font-size: 2rem;
   color:var(--main-color);
   margin:.5rem 0;
}

.show-products .box-container .box .details{
   font-size: 1.5rem;
   color:var(--light-color);
   line-height: 2;
}

.update-product form{
   background-color: var(--white);
   box-shadow: var(--box-shadow);
   border-radius: .5rem;
   border:var(--border);
   padding:2rem;
   max-width: 50rem;
   margin:0 auto;
}

.update-product form .image-container{
   margin-bottom: 2rem;
}

.update-product form .image-container .main-image img{
   height: 20rem;
   width: 100%;
   object-fit: contain;
}

.update-product form .image-container .sub-image{
   display: flex;
   gap:1rem;
   justify-content: center;
   margin:1rem 0;
}

.update-product form .image-container .sub-image img{
   height: 5rem;
   width: 7rem;
   object-fit: contain;
   padding:.5rem;
   border:var(--border);
   cursor: pointer;
   transition: .2s linear;
}

.update-product form .image-container .sub-image img:hover{
   transform: scale(1.1);
}

.update-product form .box{
   width: 100%;
   border-radius: .5rem;
   padding:1.4rem;
   font-size: 1.8rem;
   color:var(--black);
   background-color: var(--light-bg);
   margin:1rem 0;
}

.update-product form span{
   font-size: 1.7rem;
   color:var(--light-color);
}

.update-product form textarea{
   height: 15rem;
   resize: none;
}

.orders .box-container{
   display: grid;
   grid-template-columns: repeat(auto-fit, 33rem);
   gap:1.5rem;
   align-items: flex-start;
   justify-content: center;
}

.orders .box-container .box{
   padding:2rem;
   padding-top: 1rem;
   border-radius: .5rem;
   border:var(--border);
   background-color: var(--white);
   box-shadow: var(--box-shadow);
}

.orders .box-container .box p{
   line-height: 1.5;
   font-size: 2rem;
   color:var(--light-color);
   margin:1rem 0;
}

.orders .box-container .box p span{
   color:var(--main-color);
}

.orders .box-container .select{
   margin-bottom: .5rem;
   width: 100%;
   background-color: var(--light-bg);
   padding:1rem;
   font-size: 1.8rem;
   color:var(--black);
   border-radius: .5rem;
   border:var(--border);
}

.accounts .box-container{
   display: grid;
   grid-template-columns: repeat(auto-fit, 33rem);
   gap:1.5rem;
   align-items: flex-start;
   justify-content: center;
}

.accounts .box-container .box{
   padding:2rem;
   padding-top: .5rem;
   border-radius: .5rem;
   text-align: center;
   border:var(--border);
   background-color: var(--white);
   box-shadow: var(--box-shadow);
}

.accounts .box-container .box p{
   font-size: 2rem;
   color:var(--light-color);
   margin: 1rem 0;
}

.accounts .box-container .box p span{
   color:var(--main-color);
}

.contacts .box-container{
   display: grid;
   grid-template-columns: repeat(auto-fit, 33rem);
   gap:1.5rem;
   align-items: flex-start;
   justify-content: center;
}

.contacts .box-container .box{
   padding:2rem;
   padding-top: 1rem;
   border-radius: .5rem;
   border:var(--border);
   background-color: var(--white);
   box-shadow: var(--box-shadow);
}

.contacts .box-container .box p{
   line-height: 1.5;
   font-size: 2rem;
   color:var(--light-color);
   margin:1rem 0;
}

.contacts .box-container .box p span{
   color:var(--main-color);
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

}

@media (max-width:450px){

   html{
      font-size: 50%;
   }


   .flex-btn{
      flex-flow: column;
      gap:0;
   }

   .add-products form textarea{
      height:15rem;
   }   

   .show-products .box-container{
      grid-template-columns: 1fr;
   }

   .orders .box-container{
      grid-template-columns: 1fr;
   }

   .accounts .box-container{
      grid-template-columns: 1fr;
   }

   .contacts .box-container{
      grid-template-columns: 1fr;
   }

}
</style>












<script src="admin_script.js"></script>
   
</body>
</html>