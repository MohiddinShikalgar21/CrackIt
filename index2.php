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
              margin-top: -75px;
              background: #ce9e3881;
              box-shadow: 0 0 20px 0px rgba(0, 0, 0, 0.9);

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
            h3
            {
              text-align: center;
              font-weight: 600;
              margin: 10px 0;
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
              background: url(close.png)no-repeat;
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
              <li><a href="#">Home</a></li>
              <li><a href="#">Resources</a></li>
              <li><a href="#">Exam</a></li>
              <li><a href="more.php">More</a></li>
              <li><a href="#">About</a></li>
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
              <li><a href="#">Home</a></li>
              <li><a href="#">Resources</a></li>
              <li><a href="#">Exam</a></li>
              <li><a href="more.php">More</a></li>
              <li><a href="">About</a></li>
              <li class="btn2"><a href="logout.php">Logout</a></li>
           </ul>
           </nav>

           <?php     
              }
           ?> 

            </div>
          </div>
        </div>
        </header>
          <div class="v-header container">
            <div class="fullscreen-video-wrap">
              <video autoplay muted loop id="myVideo"> 
                <source src="bg.mp4" type="video/mp4"></video>
              </div>
              <div class="header-content text-md-center">
                <h1>WELCOME ASPIRANTS.</h1>
                <p>To a place where you can test your MHT CET preparations and lead yourself closer to your goal by uplifting your preparations. Just Remember that it's not about how bad you want it, it's about how hard you are willing to work for it.</p>
                <a class="btn" href="more.php">Find Out More</a>
              </div>
            </div>
    
      <section class="section section-a" style="text-align: left;">
        <div class="container">
          <br><h2>About MHT CET</h2><br>
          <p>MHT CET is an annual entrance exam directed by the Directorate of Technical Education (DTE), Maharashtra.
             <br>Directorate of Technical Education (DTE) Maharashtra State conducts MHT CET for admission to first year B.E/B. Tech programs. 
             <br>In the academic year 2016, DTE conducted its own, one single combined ‘Common Entrance Test’ MHT-CET 2016 for all Health Sciences, Engineering and Pharmacy degree courses. But from 2017 onwards, MHT CET is being held only for admissions to undergraduate engineering courses in the state. </p>
             <p>The Maharashtra Health and Technical Common Entrance Test was conducted in online mode for the first time in 2019. The State Common Entrance Test Cell, Maharashtra releases the syllabus and marking scheme for the Computer Based Test (CBT). To check that in detail visit the Resources section of the website.</p>
             <br><p> Preparing for an entrance examination sounds tough unless you have a proper plan in place. Yes, you guessed it right! We are talking about having a comprehensive study planner. Planning every minute of your preparation for MHT CET could be beneficial. <br>It helps producing high-value output.</p>
             <p>With 'CrackIt!' you can take up a mock test any time and check your speed & accuracy which will help you to know where you have to focus more. Also you can access to the top class study material available in the Resources section of this website.<br>So what are you waiting for? Just GetStarted. </p>
        </div><br><br>
      </section>
    
      <section class="course">
        <h1><strong>Subjects in MHTCET</strong></h1>
        <p>MHT CET 2021 syllabus includes four subjects - Physics, Chemistry and Mathematics/Biology out of which at "CrackIt!" we are going to primarily focus the following three subjects. The Exam for PCM group is subdivided into two phases : Physics+Chemistry in the first phase and Maths in the latter.</p>

        <div class="row">
          <div class="course-col">
            <h3>Physics</h3>
            <p>Physics has a weightage of 50 marks out of 200. Most of the questions are of the difficulty level 'Easy to Medium' and a few are over that. Combined Time alloted along with Chemistry is 90 minutes.</p>
          </div>
          <div class="course-col">
            <h3>Chemistry</h3>
            <p>Chemistry is considered as one of the scoring subjects in MHT CET. Most of the questions are of the difficulty level 'Easy to Medium'. Combined Time alloted along with Physics is 90 minutes.</p>
          </div>
          <div class="course-col">
            <h3>Maths</h3>
            <p>Out of the three subjects, Maths has the highest weightage of 100 out of 200 marks. It is a subject which plays the master role in determining your final MHT CET results. Time alloted is 90 minutes.</p>
          </div>
        </div>

      </section>
      <section class="section section-ab" style="text-align: center;font-weight:600;font-size:20px;background:#222;color:#b1979781;font-family:'Poppins';margin-top:5px;"><h2><br> Why 'CrackIt!' ?</h2></section>
      <section class="section section-b">

          <div class="container2">
            <div class="card">
              <div class="imgBx" data-text="Design">
                <img src="img/sketch.png" alt="">
              </div>
              <div class="content">
              <h3>Best Study Resources</h3><br>
              <p><br>Users can access to best study material on 'CrackIt!'</p><br>
              <!--<a href="#">Read More</a><br>-->
              </div>
            </div>
          
          <div class="card">
            <div class="imgBx" data-text="Code">
              <img src="img/data.png" alt="">
            </div>
            <div class="content"> 
            <h3>Easy to Use Interface</h3>
            <p><br>'CrackIt!' provides an user-friendly interface to all its users.</p>
            <!--<a href="#">Read More</a>-->
            </div>
          </div>
        
        <div class="card">
          <div class="imgBx" data-text="Launch">
            <img src="img/startup.png" alt="">
          </div>
          <div class="content"> 
          <h3>Upskills your Preparation</h3>
          <p><br>With 'CrackIt!' users can enhance their MHT CET preparations.</p>
          <!--<a href="#">Read More</a>-->
          </div>
        </div>
        
      <div class="card">
        <div class="imgBx" data-text="Earn">
          <img src="img/money.png" alt="">
        </div>
        <div class="content"> 
        <h3>No Hidden Charges</h3>
        <p><br>'CrackIt!' does not compensate any charges for its services. They are completely free.</p>
        <!--<a href="#">Read More</a>-->
        </div>
      </div>
      </section>

      <footer class="footer-distributed">

        <div class="footer-left">
            <h3>Mohiddin<span>Shikalgar</span></h3>

            <p class="footer-links">
                <a href="#">Home</a>
                |
                <a href="#">About</a>
                |
                <a href="#">Contact</a>
                |
                <a href="#">More</a>
            </p>

            <p class="footer-company-name">Copyright © (expected2024) <strong>Mohiddin Shikalgar</strong><br> All rights reserved</p>
        </div>

        <div class="footer-center">
            <div>
                <i class="fa fa-map-marker"></i>
                <p><span>Sangli</span>
                    Maharashtra</p>
            </div>

            <div>
                <i class="fa fa-phone"></i>
                <p>+91 7414967515</p>
            </div>
            <div>
                <i class="fa fa-envelope"></i>
                <p><a href="mailto:mohiddinshikalgar21@gmail.com">mohiddinshikalgar21@gmail.com</a></p>
            </div>
        </div>
        <div class="footer-right">
            <p class="footer-company-about">
                <span>ABOUT</span>
                I am a SY Computer Engineering student at <strong>Vishwakarma Institute of Technology, Pune.</strong>
             <strong> 'CrackIt!'</strong> is my attempt to provide students with free resources and mock tests so that they could boost their preparations.</p>
            <div class="footer-icons">
                <a href="#"><i class="fa fa-facebook"></i></a>
                <a href="#"><i class="fa fa-instagram"></i></a>
                <a href="#"><i class="fa fa-linkedin"></i></a>
                <a href="#"><i class="fa fa-twitter"></i></a>
                <a href="#"><i class="fa fa-youtube"></i></a>
            </div>
        </div>
    </footer>

      
      
        
      <script type="text/javascript">
        //Javacript for responsive navigation menu
        /*const menuBtn = document.querySelector(".menu-btn");
        const navigation = document.querySelector(".navigation");
    
        menuBtn.addEventListener("click", () => {
          menuBtn.classList.toggle("active");
          navigation.classList.toggle("active");
        });*/
      </script> 
    </body>
</html>