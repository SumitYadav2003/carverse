<?php

include 'connect.php';

session_start();

$admin_id = $_SESSION['admin_id'];

if(!isset($admin_id)){
   header('location:admin_login.php');
}

if(isset($_POST['update'])){

   $pid = $_POST['pid'];
   $name = $_POST['name'];
   $name = filter_var($name, FILTER_SANITIZE_STRING);
   $price = $_POST['price'];
   $price = filter_var($price, FILTER_SANITIZE_STRING);
   $details = $_POST['details'];
   $details = filter_var($details, FILTER_SANITIZE_STRING);

   $update_product = $conn->prepare("UPDATE `cars` SET name = ?, price = ?, details = ? WHERE id = ?");
   $update_product->execute([$name, $price, $details, $pid]);

   $message[] = 'product updated successfully!';

   $old_image_01 = $_POST['old_image_01'];
   $image_01 = $_FILES['image_01']['name'];
   $image_01 = filter_var($image_01, FILTER_SANITIZE_STRING);
   $image_size_01 = $_FILES['image_01']['size'];
   $image_tmp_name_01 = $_FILES['image_01']['tmp_name'];
   $image_folder_01 = 'uploaded_img/'.$image_01;

   if(!empty($image_01)){
      if($image_size_01 > 9000000){
         $message[] = 'image size is too large!';
      }else{
         $update_image_01 = $conn->prepare("UPDATE `cars` SET image_01 = ? WHERE id = ?");
         $update_image_01->execute([$image_01, $pid]);
         move_uploaded_file($image_tmp_name_01, $image_folder_01);
         unlink('uploaded_img/'.$old_image_01);
         $message[] = 'image 01 updated successfully!';
      }
   }

   $old_image_02 = $_POST['old_image_02'];
   $image_02 = $_FILES['image_02']['name'];
   $image_02 = filter_var($image_02, FILTER_SANITIZE_STRING);
   $image_size_02 = $_FILES['image_02']['size'];
   $image_tmp_name_02 = $_FILES['image_02']['tmp_name'];
   $image_folder_02 = 'uploaded_img/'.$image_02;

   if(!empty($image_02)){
      if($image_size_02 > 9000000){
         $message[] = 'image size is too large!';
      }else{
         $update_image_02 = $conn->prepare("UPDATE `cars` SET image_02 = ? WHERE id = ?");
         $update_image_02->execute([$image_02, $pid]);
         move_uploaded_file($image_tmp_name_02, $image_folder_02);
         unlink('uploaded_img/'.$old_image_02);
         $message[] = 'image 02 updated successfully!';
      }
   }

   $old_image_03 = $_POST['old_image_03'];
   $image_03 = $_FILES['image_03']['name'];
   $image_03 = filter_var($image_03, FILTER_SANITIZE_STRING);
   $image_size_03 = $_FILES['image_03']['size'];
   $image_tmp_name_03 = $_FILES['image_03']['tmp_name'];
   $image_folder_03 = 'uploaded_img/'.$image_03;

   if(!empty($image_03)){
      if($image_size_03 > 9000000){
         $message[] = 'image size is too large!';
      }else{
         $update_image_03 = $conn->prepare("UPDATE `cars` SET image_03 = ? WHERE id = ?");
         $update_image_03->execute([$image_03, $pid]);
         move_uploaded_file($image_tmp_name_03, $image_folder_03);
         unlink('uploaded_img/'.$old_image_03);
         $message[] = 'image 03 updated successfully!';
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
   <title>update product</title>

   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

   <!-- <link rel="stylesheet" href="admin_style.css"> -->

</head>
<body>

<?php include 'admin_header.php'; ?>

<section class="update-product">

   <h1 class="heading">update product</h1>

   <?php
      $update_id = $_GET['update'];
      $select_products = $conn->prepare("SELECT * FROM `cars` WHERE id = ?");
      $select_products->execute([$update_id]);
      if($select_products->rowCount() > 0){
         while($fetch_products = $select_products->fetch(PDO::FETCH_ASSOC)){ 
   ?>
   <form action="" method="post" enctype="multipart/form-data">
      <input type="hidden" name="pid" value="<?= $fetch_products['id']; ?>">
      <input type="hidden" name="old_image_01" value="<?= $fetch_products['image_01']; ?>">
      <input type="hidden" name="old_image_02" value="<?= $fetch_products['image_02']; ?>">
      <input type="hidden" name="old_image_03" value="<?= $fetch_products['image_03']; ?>">
      <div class="image-container">
         <div class="main-image">
            <img src="uploaded_img/<?= $fetch_products['image_01']; ?>" alt="">
         </div>
         <div class="sub-image">
            <img src="uploaded_img/<?= $fetch_products['image_01']; ?>" alt="">
            <img src="uploaded_img/<?= $fetch_products['image_02']; ?>" alt="">
            <img src="uploaded_img/<?= $fetch_products['image_03']; ?>" alt="">
         </div>
      </div>
      <span>update name</span>
      <input type="text" name="name" required class="box" maxlength="100" placeholder="enter product name" value="<?= $fetch_products['name']; ?>">
      <span>update price</span>
      <input type="number" name="price" required class="box" min="0" max="9999999999" placeholder="enter product price" onkeypress="if(this.value.length == 10) return false;" value="<?= $fetch_products['price']; ?>">
      <span>update details</span>
      <textarea name="details" class="box" required cols="30" rows="10"><?= $fetch_products['details']; ?></textarea>
      <span>update image 01</span>
      <input type="file" name="image_01" accept="image/jpg, image/jpeg, image/png, image/webp" class="box">
      <span>update image 02</span>
      <input type="file" name="image_02" accept="image/jpg, image/jpeg, image/png, image/webp" class="box">
      <span>update image 03</span>
      <input type="file" name="image_03" accept="image/jpg, image/jpeg, image/png, image/webp" class="box">
      <div class="flex-btn">
         <input type="submit" name="update" class="btn" value="update">
         <a href="cars.php" class="option-btn">go back</a>
      </div>
   </form>
   
   <?php
         }
      }else{
         echo '<p class="empty">no product found!</p>';
      }
   ?>

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

body{
   background:url('imagess/lambo.jpg');
   background-size:cover;

}

section{
   padding:2rem;
   max-width: 1200px;
   margin:0 auto;
}

.heading{
   font-size: 4rem;
   color:yellow;
   margin-bottom: 2rem;
   text-align: center;
   text-transform: uppercase;
}

.heading:hover{
   color:crimson;
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
   background-color: yellow;
}

.option-btn:hover{
   background-color:crimson;
}

.btn{
   background-color: crimson;
   color:black;
   font-weight:bold;
}

.btn:hover{
   background-color:yellow;

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
   padding:2rem;
   text-align: center;
   box-shadow: var(--box-shadow);
   background-color: var(--white);
   border-radius: .5rem;
   width: 50rem;
   border:var(--border);
}

.form-container form h3{
   text-transform: uppercase;
   color:var(--black);
   margin-bottom: 1rem;
   font-size: 2.5rem;
}

.form-container form p{
   font-size: 1.8rem;
   color:var(--light-color);
   margin-bottom: 1rem;
   border-radius: .5rem;
}

.form-container form p span{
   color:var(--orange);
}

.form-container form .box{
   width: 100%;
   margin:1rem 0;
   border-radius: .5rem;
   background-color: var(--light-bg);
   padding:1.4rem;
   font-size: 1.8rem;
   color:var(--black);
   font-weight:bold;
   text-transform:uppercase;

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
   display: flex;
   /* grid-template-columns: repeat(auto-fit, minmax(27rem, 1fr)); */
   justify-content: center;
   align-items: flex-start;
   display: grid;
   grid-template-columns: repeat(auto-fit, minmax(330px, 3fr)); /* Two boxes in a row for larger screens */
   gap: 1.5rem;
   justify-content: center;
}

.accounts .box-container .box{
   padding:2rem;
   text-align: center;
   /* grid-template-columns: repeat(auto-fit, minmax(330px, 1fr)); */
   border:var(--border);
   border-color:#7f2549;
   box-shadow: var(--box-shadow);
   /* border-radius: .5rem; */
   background-color: var(--white);
  height:auto;
  width:370px;

   
}

.accounts .box-container .box h2{
   font-size: 30px;
   font-weight:350;
   color:#7f2549;
}

.accounts .box-container .box p{
   font-size: 2rem;
   color:var(--light-color);
   margin: 1rem 0;
}

.accounts .box-container .box p span{
   color:var(--main-color);
}

.accounts .box-container {
    /* grid-template-columns: 1fr; */ /* One box in a row for smaller screens */
  }

  .insertimage{
   height:28vh;
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

   .heading{
      font-size: 3.5rem;
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