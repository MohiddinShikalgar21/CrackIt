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
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
        <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.4/css/fontawesome.min.css" integrity="sha384-jLKHWM3JRmfMU0A5x5AkjWkw/EYfGUAGagvnfryNV3F9VqM98XiIH7VBGVoxVSc7" crossorigin="anonymous">
        <link href="http://fonts.googleapis.com/css?family=Cookie" rel="stylesheet" type="text/css">
        <style>
            @import url("https://fonts.googleapis.com/css2?family=Nunito:wght@200;300;400;500;600&display=swap");
            * {
              font-family: 'Nunito', sans-serif;
              margin: 0;
              padding: 0;
              -webkit-box-sizing: border-box;
                      box-sizing: border-box;
              outline: none;
              border: none;
              text-decoration: none;
              -webkit-transition: all .2s linear;
              transition: all .2s linear;
            }
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

            .btn
            {
                display: inline-block;
                border: 1px solid #fff;
                background: transparent;
                color:#fff;
                font-size:1.2rem;
                padding: 1rem 2rem;
                text-decoration: none;
                cursor: pointer;
            }
            
            .btn:hover
            {
              border: 1px solid #3abdb6b0;
              background: #3abdb6b0;
              transition: 1s;
              box-shadow: 0 0 20px 0px rgba(0, 0, 0, 2.5);
            }
            .btn2:hover
            {
              border: 1px solid #3abdb6b0;
              background: #3abdb6b0;
              transition: 1s;
              box-shadow: 0 0 20px 0px rgba(0, 0, 0, 0.6);
            }
            .section-a
            {
              padding: 0;
              text-align: center;
              margin-top: -165px;
              background: #334261;
              box-shadow: 0 0 20px 0px rgba(0, 0, 0, 0.6);
            }
            .section-d
            {
              padding: 0;
              text-align: center;
              margin-top: -165px;
              background: #506584e0;

            }

            .course
            {
              width: 80%;
              margin: auto;
              text-align: center;
              padding-top: 25px;
            }
            .course h1
            {
              font-size: 36px;
              font-weight: 600;
            }
            
            .course p
            {
              color: #777;
              font-size: 16px;
              font-weight: 300;
              line-height: 22px;
              padding: 10px;
            }
            .row
            {
              margin-top: 5%;
              display: flex;
              justify-content: space-between;
            }
            .course-col
            {
              flex-basis: 31%;
              background: #fff3f3;
              border-radius: 10px;
              margin-bottom: 5%;
              padding: 20px 12px;
              box-sizing: border-box;
              transition: 0.5s;
            }
            
            .course-col:hover
            {
              box-shadow: 0 0 20px 0px rgba(0, 0, 0, 0.5);
            }
            .course-col p:hover
            {
              color: black;
            }
            @media(max-width:900px)
            {
            .row
            {
              flex-direction: column;
            }
            .header-content h1{
            font-size:25px;
            margin-top: -15px;
            margin-bottom:5px;
            }
            .header-content p{
            font-size:20px;
            margin-bottom:0;
            }


            /*.navigation
            {
              display: none;
            }

            .navigation.active{
              position: fixed;
              width: 100%;
              height: 100vh;
              top: 0;
              left: 0;
              display: flex;
              justify-content: center;
              align-items: center;
              background: rgba(1, 1, 1, 0.5);
            }

            .navigation .navigation-items a
            {
              z-index: 4;
              color: #222;
              font-size: 1.2em;
              margin: 20px;
            }

            .navigation .navigation-items a:before{
              background: #222;
              height: 5px;
            }

            .navigation.active .navigation-items{
              background: #fff;
              width: 600px;
              max-width: 600px;
              margin: 20px;
              padding: 40px;
              display: flex;
              flex-direction: column;
              align-items: center;
              border-radius: 5px;
              box-shadow: 0 5px 25px rgb(1 1 1 / 20%);
            }

            .menu-btn{
              background: url(menu.png)no-repeat;
              background-size: 30px;
              background-position: center;
              width: 40px;
              height: 40px;
              cursor: pointer;
              transition: 0.3s ease;
          }

            .menu-btn.active{
              z-index: 6;
              background: url(img/close.png)no-repeat;
              background-size: 25px;
              background-position: center;
              transition: 0.3s ease;
            }*/
          }
            .container2 .card
            {
              position: relative;
              height: 160px;
              background: #fff;
              display: flex;
              width: 45%;
              margin: 25px 0;
            }
            .container2 .card .content p
            {
              margin-top: 25px;
              margin-left: -50px;
              padding-top: 0px;
              font-size: 15px;
            }
            .container2 .card .content h3
            {
              margin-bottom: 1px;
              margin-top: -5px;
              font-size: 17px;
              width: 200px;
            }
            .section-b
            {
            padding:0px 0;
            display: flex;
            justify-content: center;
            align-items: center;
            background: #222;
            min-height: 45vh;
            }
            .section-ab
            {
            align-items: center;
            text-align: center;
            background: #222;
            font-weight: 600;
            font-size: 17px;
            }
            .footer-distributed {
            background-color: #222222;
            box-sizing: border-box;
            width: 100%;
            text-align: left;
            font: bold 16px sans-serif;
            padding: 50px 50px 60px 50px;
            margin-top: 0px;
            box-shadow: 0 0 20px 0px rgba(0, 0, 0, 0.4);
          }
          .container2
          {
            margin-bottom: 50px;
          }
          .subjects .box-container 
          {
            display: -ms-grid;
            display: grid;
            -ms-grid-columns: (minmax(8rem, 0.8fr))[auto-fit];
                grid-template-columns: repeat(auto-fit, minmax(8rem, 0.8fr));
            gap: 1.4rem;
          }
          
          .subjects .box-container .box {
            padding: 3rem 2rem;
            text-align: center;
            border: 0.1rem solid #0eb582;
            background: #f0fdfa;
            cursor: pointer;
          }
          
          .subjects .box-container .box:hover {
            background: #0eb582;
          }
          
          .subjects .box-container .box:hover h3 {
            color: #fff;
          }

          .subjects .box-container .box:hover p {
            color: #eee;
          }
          
          .subjects .box-container .box img {
            height: 6rem;
            margin-bottom: .5rem;
          }
          
          .subjects .box-container .box h3 {
            font-size: 1.2rem;
            text-transform: capitalize;
            color: #444;
            padding: .5rem 0;
          }

          .subjects .box-container .box p {
            font-size: 1.2rem;
            line-height: 1.5;
            color: #777;
          }
          .contact
          {
            position: relative;
            min-height: 100vh;
            padding: 50px 100px;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            background: url(contact.jpg.jpg);
            background-size: cover;
          }
          .contact .content
          {
            text-align: center;
            max-width: 800px;
          }
          .contact .content h2
          {
            font-size: 36px;
            font-weight: 500;
            color: #fff;
          }
          .contact .content p
          {
            font-weight: 300;
            color: #fff;
          }
          .container3
          {
            width: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
            margin-top: 30px;
          }
          .container3 .contactInfo
          {
            width: 50%;
            display: flex;
            flex-direction: column;
          }
          .container3 .contactInfo  .box
          {
            position: relative;
            padding: 20px 0;
            display: flex;
          }
          .container3 .contactInfo .box .icon 
          {
            min-width: 60px;
            min-height: 60px;
            background: #fff;
            display: flex;
            justify-content: center;
            align-items: center;
            border-radius: 50%;
            font-size: 22px;
          }
          .container3 .contactInfo .box .text
          {
            display: flex;
            margin-left: 20px;
            font-size: 16px;
            color: #fff;
            flex-direction: column;
            font-weight: 300;
          }
          .container3 .contactInfo .box .text h3
          {
            font-weight: 500;
            color: #00bcd4;   
          }
          .contactForm
          {
            width: 40%;
            padding: 40px;
            background: #fff;
          }
          .contactForm h2
          {
            font-size: 30px;
            color: #333;
            font-weight: 500;
          }
          .contactForm .inputBox
          {
            position: relative;
            width: 100%;
            margin-top: 10px;
          }
          .contactForm .inputBox input,
          .contactForm .inputBox textarea
          {
            width: 100%;
            padding: 5px 0;
            font-size: 16px;
            margin: 10px 0;
            border: none;
            border-bottom: 2px solid #333;
            outline: none;
            resize: none;
          }
          .contactForm .inputBox span
          {
            position: absolute;
            left: 0;
            padding: 5px 0;
            font-size: 16px;
            margin: 10px 0;
            pointer-events: none;
            transition: 0.5s;
            color: #666;
          } 
          .contactForm .inputBox input:focus ~ span,
          .contactForm .inputBox input:valid ~ span,
          .contactForm .inputBox textarea:focus ~ span,
          .contactForm .inputBox textarea:valid ~ span
          {
            color: #e91e63;
            font-size: 12px;
            transform: translateY(-20px);
          }
          .contactForm .inputBox input[type="submit"]
          {
            width: 100px;
            background: #00bcd4;
            color: #fff;
            border: none;
            cursor: pointer;
            padding: 10px;
            font-size: 18px;
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
        </div>
        </header>
          <div class="v-header container" style="margin:0px;">
            <div class="fullscreen-video-wrap">
              <img src="images/home-slide-1.jpg" alt="" style="height: auto; width:100%;">
              </div>
              <div class="header-content text-md-center" style="margin-left: -130px; margin-right:495px; margin-top:-275px;">
              <h3 style="font-size: 30px;">With <span style="color: #f5bb00; font-size:59px;">CrackIt!</span></h3>
                <p>Our Only Aim is to Ensure that You Get Everything You Need to Boost Your Preparations at Your Fingertips without charging You for Anything.</p>
              </div>
            </div>
            <section class="section section-a" style="text-align: left; color:white">
        <div class="container5" style="margin-left: 350px; margin-right:250px;"><br><br><br>
          <h2>About "CrackIt!"</h2><br>
          <p><span style="text-align: center;"> In the wake of pandemic situation, when every service was difficult to be provided or received, everyone realized the importance of digitalization. So did the Education Sector our Country and State. With Colleges and Coaching Institutes being shut down, there was Tremendous need of Platforms which could provide Students a place where they could continue their exam preparations. “CrackIt!” has been designed and developed for the same purpose. The sole objective of this system is to provide students with quality study resources, multiple mock exams with proper management, all the required information regarding a particular exam they are preparing for and several similar things. <b>"CrackIt!" is a One Destination for Everything Solution</b> for an aspirant preparing for an exam. The system will work under admin and user section with different login systems for both.  The admin will have entire control over the resources provided to the students and the mock tests as well.</p><br><br><br>
            </section>

      <section class="contact">
        <div class="content">
          <h2>Contact Us</h2>
          <p>To get in touch with me you can use my email and you can share your thoughts,suggestions,problems with me and I will try to reply them as much as I can.</p>
        </div>
        <div class="container3">
          <div class="contactInfo">
            <div class="box">
              <div class="icon"><i class="fas fa-map-marker-alt" aria-hidden="true"></i></div>
              <div class="text">
                <h3>Address</h3>
                <p>Sangli, Maharashtra, India.</p>
              </div>
            </div>
            <div class="box">
              <div class="icon"><i class="fa fa-phone" aria-hidden="true"></i></div>
              <div class="text">
                <h3>Phone</h3>
                <p>7414967515</p>
              </div>
            </div>
            <div class="box">
              <div class="icon"><i class="fas fa-envelope" aria-hidden="true"></i></div>
              <div class="text">
                <h3>Email</h3>
                <p>mohiddinshikalgar21@gmail.com</p>
              </div>
            </div>
          </div> 
          <div class="contactForm">
            <form action="" name="">
              <h2>Send Message</h2>
              <div class="inputBox">
                <input type="text" name="" required="required">
                <span>Full Name</span>
              </div>
              <div class="inputBox">
                <input type="text" name="" required="required">
                <span>Email</span>
              </div>
              <div class="inputBox">
                <textarea required="required"></textarea>
                <span>Type Your Message...</span>
              </div>
              <div class="inputBox">
                <input type="submit" name="" value="Send">
              </div>
            </form>
          </div>
        </div>
      </section>




<!-- swiper js link  -->
<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

<!-- custom js file link  -->
<script src="js/script.js"></script>
    </body>
</html>