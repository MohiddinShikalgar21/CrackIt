<?php
session_start();  
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>CrackIt!</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="style4.css">
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
        <link href="http://fonts.googleapis.com/css?family=Cookie" rel="stylesheet" type="text/css">
        <style>
           .logo
            {
                margin: 0 50px;
                margin-top: 10px;
                height: 60px;
                float: left;
                color: #fff;
                font-size: 35px;
                text-transform: capitalize;
                font-weight: bold;
                letter-spacing: 0px;
            }
            .logo span
            {
                color: #f5bb00;
            }
            nav
            {
              display: flex;
              align-items: center;
              justify-content: space-between;
              padding-right: 50px;
              word-spacing: 6px;
            }
            .navlinks
            {
              padding: 28px 0;
            }
            .navlinks li{
              display: inline-block;
              margin: 0 7px;
            }
            .navlinks li a
            {
              text-decoration: none;
              color: #fff;
              padding: 5px 0;
              position: relative;
              font-size: 16px;
            }
            .navlinks li a::after
            {
              content: ' ';
              background: #fff;
              width: 0;
              height: 2px;
              position: absolute;
              bottom: 0;
              left: 0;
              transition: width 0.5s;
            }
            .navlinks li a:hover::after
            {
              width: 100%;
            }
            .btn2
            {
              background: #3abdb6b0;
              color: #fff;
              padding: 10px 25px;
              border-radius: 3px;
              cursor: pointer;
            }
            label #btn,
            label #cancel
            {
              color: white;
              font-size: 30px;
              float: right;
              line-height:80px;
              margin-right: 40px;
              cursor: pointer;
              display: none;
            }
            #check{
              display: none;
            }
            @media(max-width:1118px) {
              
            }

            .header-content{
              z-index:2;
              text-align: center;
            }
            .v-header
            {
              align-items: center;
              margin-right: 0;
            }

        </style>
         <script src="https://kit.fontawesome.com/a076d05399.js"></script>
      </head>
    <body>

    <div class="header">

          <?php
          if(isset($_SESSION['login_user2']))
          {
          ?>
          <nav>            
          <div class="logo"><span>Crack</span>It!</div>  
          <ul class="navlinks">
              <li><a href="index.php">Home</a></li>
              <li><a href="material.php">Resources</a></li>
              <li><a href="select_exam.php">Exam</a></li>
              <li><a href="more.php">More</a></li>
              <li><a href="about.php">About</a></li>
              <li class="btn2"><a href="logout.php">Logout</a></li>
          </ul>
          </nav>
          <?php
          }

          else
          {
          ?>
           <nav>
           <div class="logo"><span>Crack</span>It!</div>
           <input type="checkbox" id="check">
           <label for="check">
             <i class="fas fa-bars" id="btn"></i>
             <i class="fas fa-times" id="cancel"></i>
           </label>
           <ul class="navlinks">
              <li><a href="index.php">Home</a></li>
              <li><a href="getstarted.php">Resources</a></li>
              <li><a href="getstarted.php">Exam</a></li>
              <li><a href="more.php">More</a></li>
              <li><a href="about.php">About</a></li>
              <li class="btn2"><a href="getstarted.php">GetStarted</a></li>
           </ul>
           </nav>
           <?php     
              }
           ?> 

            </div>
          </div>
        
<section class="home">

   <div class="swiper home-slider">
      
      <div class="swiper-wrapper">


         <section class="swiper-slide slide" style="background: url(img/home-slide-2.jpg) no-repeat;">
            <div class="content">
               <h3>the best courses you will find find here!</h3>
               <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas impedit labore dolore unde, quidem corrupti?</p>
               <a href="#" class="btn">get started</a>
            </div>
         </section>


      </div>

      <div class="swiper-pagination"></div>

   </div>
            </div>
</section>

<script src="js/script.js"></script>
</body>