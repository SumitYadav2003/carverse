<footer class="footer">

   <section class="grid">

      <div class="box">
         <h3>quick links</h3>
         <a href="home.php"> <i class="fas fa-angle-right"></i> home</a>
         <a href="about.php"> <i class="fas fa-angle-right"></i> about</a>
         <a href="shop.php"> <i class="fas fa-angle-right"></i> service</a>
         <a href="contact.php"> <i class="fas fa-angle-right"></i> contact</a>
      </div>

      <div class="box">
         <h3>extra links</h3>
         <a href="user_login.php"> <i class="fas fa-angle-right"></i> login</a>
         <a href="user_register.php"> <i class="fas fa-angle-right"></i> register</a>
         <!-- <a href="cart.php"> <i class="fas fa-angle-right"></i> cart</a>
         <a href="orders.php"> <i class="fas fa-angle-right"></i> orders</a> -->
      </div>

      <div class="box">
         <h3>contact us</h3>
         <a href="tel:1234567890"><i class="fas fa-phone"></i> +123 456 7899</a>
         <a href="tel:11122233333"><i class="fas fa-phone"></i> +111 222 3333</a>
         <a href="mailto:carverse@gmail.com"><i class="fas fa-envelope"></i> carverse@gmail.com</a>
         <a href="https://www.google.com/myplace"><i class="fas fa-map-marker-alt"></i> thane, india - 400604 </a>
      </div>

      <div class="box">
         <h3>follow us</h3>
         <a href="#"><i class="fab fa-facebook-f"></i>facebook</a>
         <a href="#"><i class="fab fa-twitter"></i>twitter</a>
         <a href="#"><i class="fab fa-instagram"></i>instagram</a>
         <a href="#"><i class="fab fa-linkedin"></i>linkedin</a>
      </div>

   </section>

   <div class="ccrimsonit">&copy; copyright @ <?= date('Y'); ?> by <span>mr. Sumit Yadav</span> | all rights reserved!</div>

</footer>












<style>



.footer{
background-color:#ff00000a;
   padding-bottom: 2rem;
}

.footer .grid{
   display: grid;
    grid-template-columns: repeat(auto-fit, minmax(10rem, 1fr)); 
   gap:0rem;
   align-items: flex-start;
}

.footer .grid .box h3{
   font-size: 18px;
   color:black;
   margin-bottom: 2rem;
   text-transform: capitalize;
}

.footer .grid .box a{
   display: block;
   margin:0.5rem 0;
   font-size:19px;
   color:crimson;
}

.footer .grid .box a i{
   padding-right: 1rem;
   color:crimson;
   transition: .2s linear;
}

.footer .grid .box a:hover{
   color:black;
}

.footer .grid .box a:hover i{
   padding-right: 2rem;
}

.footer .ccrimsonit{
   text-align: center;
   padding: -1.5rem 2rem;
   border-top: black;
   font-size: 17px;
   color:black;
}

.footer .ccrimsonit span{
   color:black;
}

</style>