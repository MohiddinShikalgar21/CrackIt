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
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
        <link href="http://fonts.googleapis.com/css?family=Cookie" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

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
            -ms-grid-columns: (minmax(10rem, 0.8fr))[auto-fit];
                grid-template-columns: repeat(auto-fit, minmax(10rem, 0.8fr));
            gap: 1.8rem;
          }
          
          .subjects .box-container .box {
            padding: 3rem 2rem;
            text-align: center;
            border: 0.1rem solid #3342618c;
            background: #f0fdfa;
            cursor: pointer;
          }
          
          .subjects .box-container .box:hover {
            background:#334261bf;
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
              <img src="img/home-slide-2.jpg" alt="" style="height: auto; width:100%;">
              </div>
              <div class="header-content text-md-center" style="margin-left: -120px; margin-right:475px; margin-top:-175px;">
                <h1>ENGINEERING</h1>
                <p>To a place where you can test your MHT CET preparations and lead yourself closer to your goal by uplifting your preparations. Just Remember that it's not about how bad you want it, it's about how hard you are willing to work for it.</p>
              </div>
            </div>
      <section class="section section-a" style="text-align: left;">
        <div class="container">
        </div><br><br><br>
      </section>

      <section class="subjects" style="padding: 3rem 5%;">

   <h1 class="heading" style="text-align: center;">Our Popular Subjects</h1><br>
   <p style="text-align: center;">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Totam, laborum! Sequi ullam distinctio repellendus eius dolorum esse at ratione officia perspiciatis illo totam, officiis incidunt pariatur delectus? Sit aperiam, consequuntur culpa laboriosam praesentium quibusdam excepturi.</p><br>

   <div class="box-container">

      <div class="box">
         <img src="images/subject-icon-1.png" alt="">
         <h3>graphic design</h3>
      </div>

      <div class="box">
         <img src="images/subject-icon-2.png" alt="">
         <h3>mathemetics</h3>
      </div>

      <div class="box">
         <img src="images/subject-icon-3.png" alt="">
         <h3>teaching</h3>
      </div>

      <div class="box">
         <img src="images/subject-icon-4.png" alt="">
         <h3>development</h3>
      </div>

      <div class="box">
         <img src="images/subject-icon-5.png" alt="">
         <h3>science</h3>
      </div>

      <div class="box">
         <img src="images/subject-icon-6.png" alt="">
         <h3>engineering</h3>
      </div>

   </div>

</section>

<section class="links">
<div class="container8">

   <h3 class="heading">Study Resources for Free Access.</h3>

   <div class="box-container8">

      <div class="box">
         <div class="image">
            <img src="images/img-1.jpg" alt="">
         </div>
         <div class="content">
            <h3>Physics Chapterwise Notes</h3>
            <p>Chapterwise Notes containing Summarised Theory along with ample of Problems to Solve. </p>
            <a href="#" class="btn">read more</a>
            <div class="icons">
               <span> <i class="fas fa-user"></i> by admin </span>
            </div>
         </div>
      </div>

      <div class="box">
         <div class="image">
            <img src="images/img-2.jpg" alt="">
         </div>
         <div class="content">
         <h3>Chemistry Chapterwise Notes</h3>
            <p>Chapterwise Notes containing Summarised Theory along with numerous Practice Questions. </p>
            <a href="#" class="btn">read more</a>
            <div class="icons">
               <span> <i class="fas fa-user"></i> by admin </span>
            </div>
         </div>
      </div>

      <div class="box">
         <div class="image">
            <img src="images/img-3.jpg" alt="">
         </div>
         <div class="content">
         <h3>Mathematics Chapterwise Notes</h3>
            <p>Chapterwise Notes containing Formulae along with sufficient Problems to Solve. </p>
            <a href="#" class="btn">read more</a>
            <div class="icons">
               <span> <i class="fas fa-user"></i> by admin </span>
            </div>
         </div>
      </div>

      <div class="box">
         <div class="image">
            <img src="images/img-4.jpg" alt="">
         </div>
         <div class="content">
         <h3>Physics Previous Years</h3>
            <p>Chapterwise Previous Years Questions for Practice.</p>
            <a href="#" class="btn">read more</a>
            <div class="icons">
               <span> <i class="fas fa-user"></i> by Admin </span>
            </div>
         </div>
      </div>

      <div class="box">
         <div class="image">
            <img src="images/img-5.jpg" alt="">
         </div>
         <div class="content">
         <h3>Chemistry Previous Years</h3>
            <p>Chapterwise Previous Years Questions for Practice.</p>
            <a href="#" class="btn">read more</a>
            <div class="icons">
               <span> <i class="fas fa-user"></i> by Admin </span>
            </div>
         </div>
      </div>

      <div class="box">
         <div class="image">
            <img src="images/img-6.jpg" alt="">
         </div>
         <div class="content">
         <h3>Mathematics Previous Years</h3>
            <p>Chapterwise Previous Years Questions for Practice.</p>
            <a href="#" class="btn">read more</a>
            <div class="icons">
               <span> <i class="fas fa-user"></i> by Admin </span>
            </div>
         </div>
      </div>

      <div class="box">
         <div class="image">
            <img src="images/img-7.jpg" alt="">
         </div>
         <div class="content">
            <h3>Previous Years Set-1</h3>
            <p>Previous Year Question Papers Set-1</p>
            <a href="#" class="btn">read more</a>
            <div class="icons">
               <span> <i class="fas fa-user"></i> by Admin </span>
            </div>
         </div>
      </div>

      <div class="box">
         <div class="image">
            <img src="images/img-8.jpg" alt="">
         </div>
         <div class="content">
         <h3>Previous Years Set-2</h3>
            <p>Previous Year Question Papers Set-2</p>
            <a href="#" class="btn">read more</a>
            <div class="icons">
               <span> <i class="fas fa-user"></i> by Admin </span>
            </div>
         </div>
      </div>

      <div class="box">
         <div class="image">
            <img src="images/img-9.jpg" alt="">
         </div>
         <div class="content">
         <h3>Previous Years Set-3</h3>
            <p>Previous Year Question Papers Set-3</p>
            <a href="#" class="btn">read more</a>
            <div class="icons">
               <span> <i class="fas fa-user"></i> by Admin </span>
            </div>
         </div>
      </div>

   </div>

   <div id="load-more"> load more </div><br>

</div>
            </section>
<script>

let loadMoreBtn = document.querySelector('#load-more');
let currentItem = 3;

loadMoreBtn.onclick = () =>{
   let boxes = [...document.querySelectorAll('.container8 .box-container8 .box')];
   for (var i = currentItem; i < currentItem + 3; i++){
      boxes[i].style.display = 'inline-block';
   }
   currentItem += 3;

   if(currentItem >= boxes.length){
      loadMoreBtn.style.display = 'none';
   }
}

</script>

    
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