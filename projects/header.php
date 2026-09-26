
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="main.css"> -->
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel="stylesheet">


</head>
<body>


    <header>
    
        <div class="nav container">
  
        <i class='bx bx-menu' id="menu-icon"></i>
    
        <a href="#" class="logo">Car<span>Verse</span></a>
        <ul class="navbar">
        <li><a href="#home" class="active">Home</a></li>
        <li><a href="#cars">Cars</a></li>
        <li><a href="#about">About</a></li>
        <li><a href="service.html">Services</a></li>
        <li><a href="#blog">Our Blog</a></li>
        <li><a href="contactus.html">Contact</a></li>

        </ul>
        
</div>
</header>
</body>

<style>
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

header {
    display: block; width: 100%;
    position: fixed;
    top: 0;
    left: 0;
    z-index: 100;
    background-color:#ff00007d;
    text-decoration:none;
    }


.nav{
      display: flex;
      align-items: center;
      justify-content: space-between;
      padding: 20px 35px;

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
  color:yellow;
 }
</style>
