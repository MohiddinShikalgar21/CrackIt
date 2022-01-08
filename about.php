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
          .about {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  -ms-flex-wrap: wrap;
      flex-wrap: wrap;
  gap: 2rem;
}

.about .image {
  -webkit-box-flex: 1;
      -ms-flex: 1 1 40rem;
          flex: 1 1 40rem;
}

.about .image img {
  width: 100%;
}

.about .content {
  -webkit-box-flex: 1;
      -ms-flex: 1 1 40rem;
          flex: 1 1 40rem;
}

.about .content .about-title {
  font-size: 1.5rem;
  text-transform: capitalize;
  color: #444;
}

.about .content p {
  font-size: 1rem;
  line-height: 2;
  color: #777;
  padding: 1rem 0;
}

.about .content .icons-container {
  margin-top: 1rem;
  display: -ms-grid;
  display: grid;
            -ms-grid-columns: (minmax(10rem, 0.8fr))[auto-fit];
                grid-template-columns: repeat(auto-fit, minmax(10rem, 0.8fr));
  gap: 1.5rem;
}

.about .content .icons-container .icons {
  text-align: center;
  border: 0.1rem solid #0eb582;
  background: #f0fdfa;
  padding: 3rem 2rem;
}

.about .content .icons-container .icons img {
  height: 3.5rem;
  margin-bottom: .5rem;
}

.about .content .icons-container .icons h3 {
  padding: .5rem 0;
  font-size: 2rem;
  text-transform: capitalize;
  color: #444;
}

.about .content .icons-container .icons span {
  font-size: 1.5rem;
  line-height: 2;
  color: #777;
}
.reviews .slide {
  text-align: center;
}

.reviews .slide p {
  font-size: 1.5rem;
  line-height: 2;
  color: #777;
  position: relative;
  background: #f0fdfa;
  border: 0.1rem solid #0eb582;
  margin-bottom: 3rem;
  padding: 2rem;
}

.reviews .slide p::before {
  content: '';
  position: absolute;
  bottom: -1.2rem;
  left: 50%;
  -webkit-transform: translateX(-50%) rotate(45deg);
          transform: translateX(-50%) rotate(45deg);
  background: #f0fdfa;
  border-bottom: 0.1rem solid #0eb582;
  border-right: 0.1rem solid #0eb582;
  height: 2rem;
  width: 2rem;
}

.reviews .slide img {
  height: 7rem;
  width: 7rem;
  border-radius: 50%;
}

.reviews .slide h3 {
  font-size: 2.2rem;
  text-transform: capitalize;
  color: #444;
  padding: .5rem 0;
}

.reviews .slide .stars {
  font-size: 1.2rem;
  color: #0eb582;
}
.contact .icons-container {
  margin-bottom: 3rem;
  display: -ms-grid;
  display: grid;
  -ms-grid-columns: (minmax(15rem, 1fr))[auto-fit];
      grid-template-columns: repeat(auto-fit, minmax(15rem, 1fr));
  gap: 1.2rem;
}

.contact .icons-container .icons {
  text-align: center;
  padding: 1.5rem 1.5rem;
  border: 0.1rem solid #0eb582;
  background: #f0fdfa;
}

.contact .icons-container .icons i {
  height: 4rem;
  width: 4rem;
  line-height: 4rem;
  font-size: 1.5rem;
  border-radius: 50%;
  margin-bottom: .5rem;
  color: #fff;
  background: #0eb582;
}

.contact .icons-container .icons h3 {
  font-size: 1.1rem;
  text-transform: capitalize;
  color: #444;
  padding: .5rem 0;
}

.contact .icons-container .icons p {
  font-size: 1rem;
  line-height: 1.4;
  color: #777;
}

.contact .row {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  -ms-flex-wrap: wrap;
      flex-wrap: wrap;
  gap: 1.5rem;
}

.contact .row .image {
  -webkit-box-flex: 1;
      -ms-flex: 1 1 40rem;
          flex: 1 1 40rem;
}

.contact .row .image img {
  width: 90%;
}

.contact .row form {
  -webkit-box-flex: 1;
      -ms-flex: 1 1 40rem;
          flex: 1 1 40rem;
  border: 0.1rem solid #0eb582;
  padding: 2rem;
  margin-right: 20px;
}

.contact .row form h3 {
  font-size: 1.2rem;
  text-transform: capitalize;
  color: #444;
  padding-bottom: 1rem;
}

.contact .row form .box {
  width: 90%;
  height: 70%;
  padding: 1.2rem 1.4rem;
  border: 0.1rem solid #0eb582;
  font-size: 1.2rem;
  margin: .5rem 0;
}

.contact .row form .box:focus {
  background: #0eb582;
  color: #fff;
}

.contact .row form .box:focus::-webkit-input-placeholder {
  color: #eee;
}

.contact .row form .box:focus:-ms-input-placeholder {
  color: #eee;
}

.contact .row form .box:focus::-ms-input-placeholder {
  color: #eee;
}

.contact .row form .box:focus::placeholder {
  color: #eee;
}

.contact .row form textarea {
  height: 10rem;
  resize: none;
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
              <div class="header-content text-md-center" style="margin-left: -120px; margin-right:475px; margin-top:-175px;">
                <h1>ENGINEERING</h1>
                <p>To a place where you can test your MHT CET preparations and lead yourself closer to your goal by uplifting your preparations. Just Remember that it's not about how bad you want it, it's about how hard you are willing to work for it.</p>
              </div>
            </div>
      <section class="section section-a" style="text-align: left;">
        <div class="container">
        </div><br><br><br>
      </section><br>

<section style="padding-right: 15px;">
<section class="about">

<div class="image">
   <img src="images/about-img.jpg" alt="">
</div>

<div class="content" style="padding-right: 10px;">
   <h5 class="about-title">we have best courses for you</h5>
   <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam hic magnam fugit exercitationem neque, quae laboriosam natus. Ut maxime assumenda facere ea quasi accusamus dolores delectus tempora animi, expedita iste.</p>
   <div class="icons-container">
      <div class="icons">
         <img src="images/about-icon-1.png" alt="">
         <h3>350+</h3>
         <span>courses</span>
      </div>
      <div class="icons">
         <img src="images/about-icon-2.png" alt="">
         <h3>1200+</h3>
         <span>students</span>
      </div>
      <div class="icons">
         <img src="images/about-icon-3.png" alt="">
         <h3>10+</h3>
         <span>awards</span>
      </div>
   </div>
</div>
</section>

</section><br><br>

<!--<section class="reviews">

   <h1 class="heading"> our students review </h1>

   <div class="swiper reviews-slider">

      <div class="swiper-wrapper">

         <div class="swiper-slide slide">
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Enim animi atque numquam harum libero nemo, eligendi laboriosam beatae quo iure corrupti, neque rerum possimus non nisi quia! Cumque, tempora sit.</p>
            <img src="images/pic-1.png" alt="">
            <h3>john deo</h3>
            <div class="stars">
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star-half-alt"></i>
            </div>
         </div>

         <div class="swiper-slide slide">
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Enim animi atque numquam harum libero nemo, eligendi laboriosam beatae quo iure corrupti, neque rerum possimus non nisi quia! Cumque, tempora sit.</p>
            <img src="images/pic-2.png" alt="">
            <h3>john deo</h3>
            <div class="stars">
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star-half-alt"></i>
            </div>
         </div>

         <div class="swiper-slide slide">
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Enim animi atque numquam harum libero nemo, eligendi laboriosam beatae quo iure corrupti, neque rerum possimus non nisi quia! Cumque, tempora sit.</p>
            <img src="images/pic-3.png" alt="">
            <h3>john deo</h3>
            <div class="stars">
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star-half-alt"></i>
            </div>
         </div>

         <div class="swiper-slide slide">
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Enim animi atque numquam harum libero nemo, eligendi laboriosam beatae quo iure corrupti, neque rerum possimus non nisi quia! Cumque, tempora sit.</p>
            <img src="images/pic-4.png" alt="">
            <h3>john deo</h3>
            <div class="stars">
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star-half-alt"></i>
            </div>
         </div>

         <div class="swiper-slide slide">
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Enim animi atque numquam harum libero nemo, eligendi laboriosam beatae quo iure corrupti, neque rerum possimus non nisi quia! Cumque, tempora sit.</p>
            <img src="images/pic-5.png" alt="">
            <h3>john deo</h3>
            <div class="stars">
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star-half-alt"></i>
            </div>
         </div>

         <div class="swiper-slide slide">
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Enim animi atque numquam harum libero nemo, eligendi laboriosam beatae quo iure corrupti, neque rerum possimus non nisi quia! Cumque, tempora sit.</p>
            <img src="images/pic-6.png" alt="">
            <h3>john deo</h3>
            <div class="stars">
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star-half-alt"></i>
            </div>
         </div>

      </div>

   </div>

</section><br>-->

<section style="margin: 20px; ">
<section class="contact">

<section style="margin: 20px; ">
   <h1 class="heading" style="text-align: center;"> Get in Touch </h1><br>

   <div class="icons-container">

      <div class="icons">
         <i class="fas fa-clock"></i>
         <h3> Available :</h3>
         <p>06:00pm to 09:00pm</p>
      </div>

      <div class="icons">
         <i class="fas fa-phone"></i>
         <h3> Phone :</h3>
         <p>+91 7414967515</p>
         <p>+91 9049882986</p>
      </div>

      <div class="icons">
         <i class="fas fa-envelope"></i>
         <h3> Email : </h3>
         <p>mohiddinshikalgar21@gmail.com</p>
         <p>mohiddin.shikalgar20@vit.edu</p>
      </div>

      <div class="icons">
         <i class="fas fa-map"></i>
         <h3> Address :</h3>
         <p>Sangli, Maharashtra.</p>
      </div>

   </div>
</section> 
   <div class="row">

      <div class="image">
         <img src="images/contact-img.png" alt="">
      </div>

      <form action="">
         <h3>send us a message</h3>
         <input type="text" placeholder="name" class="box">
         <input type="email" placeholder="email" class="box">
         <input type="number" placeholder="phone" class="box">
         <textarea name="" class="box" placeholder="message" id="" cols="30" rows="7"></textarea>
         <input type="submit" value="send message" class="btn">
      </form>

   </div>

</section>
</section><br>


<!-- swiper js link  -->
<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

<!-- custom js file link  -->
<script src="js/script.js"></script>
    </body>
</html>