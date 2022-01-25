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
              width: 86%;
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
              color: #302f2f;
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
              background: #4ad9b273;
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
              <img src="images/home-slide-3.jpg" alt="" style="height: auto; width:100%;">
              </div>
              <div class="header-content text-md-center" style="margin-left: -100px; margin-right:405px; margin-top:-245px;">
                <h3 style="font-size: 30px;">As Far As <span style="font-size: 39px;">Engineering </span> <span style="color: #f5bb00; font-size:59px;">Admissions</span></h3>
                <p>Are Concerned there is a lot more You Need To Know Than You Already Know. And we at <span style="color: #f5bb00;">CRACKIT!</span> aim to provide You what You need. </p>
              </div>
            </div>
      <section class="section section-a" style="text-align: left; color:white">
        <div class="container5" style="margin-left: 350px; margin-right:250px;"><br><br><br>
          <h2>All You Need To Know About Engineering Admissions.</h2><br>
          <p><span style="text-align: justify;">Admissions to Engineering Colleges in Maharashtra start after the CET results. Admissions are granted via Centralized Admission Process CAP. Students need to fill online application form to participate in the admission process. Students then need to fill the online option form to seek admission on the basis their CET Percentile and Rank. The admission process has been revised from the year academic year 2016-17 and numerous changes have been listed out below. The revised process has also been given below that.</span><span style="text-align: left;"><li> You will have to fill the options only once before round 1.</li> <li> Number of CAP Rounds have been changed to 3 i.e. 2 online and one spot counselling.</li> <li> Candidates will now apply through their merit number (based on MH-CET score).</li></span></p><br>
          <p style="margin-left: 35px;">THE PROCESS :<ul style="margin-left: 65px;">
            <li>Stage 1 : Puchase of Application Kit from the ARC.</li>
            <li>Stage 2 : Online Filling of Application Form</li>
            <li>Stage 3 : Confirmation of Form at ARC</li>
            <li>Stage 4 : Display of Provisional Merit List</li>
            <li>Stage 5 : Online option forms for CAP Rounds</li>
            <li>Stage 6 : Allotment and Confirmation of Seats</li>
            <li>Stage 7 : CAP Round - Counselling Round</li>
          </ul></p>
        </div><br><br>
      </section><br>
    
      <section class="course">
        <h1><strong>Top 9 Engineering Colleges in Maharashtra</strong></h1>
        <p> Maharashtra has a vast number of colleges offering BTech courses via MHT CET. There are around 410 MHT CET colleges in Maharashtra, out of which 91% are private, and 9% are the government. Aspirants who wish to get into the field of Engineering can begin with BTech after completing Class 12. This course is available in various specialisations like Computer Science, Civil, Mechanical, etc. Following is the list of Our Prefrences for the Top 9 Engineering Colleges in Maharashtra admitting tudents on basis of their MHTCET Scores. These Prefrences are being arranged on considering overall parameters along with their Rankings.</p>

        <div class="row" style="margin-bottom: -75px;">
          <div class="course-col">
            <a href="http://www.coep.org.in/" target="_blank">
            <h3><span style="font-size: 25px;">#1.</span> College of Engineering Pune.</h3>
            <p>COEP is one of the best Government Engineering Institute in the country with the highest cuttoffs each year. All the branches in the college are the best and are highly preffered by students.</p>
            </a></div>
          <div class="course-col">
            <a href="https://vjti.ac.in/" target="_blank">
            <h3><span style="font-size: 25px;">#2.</span> Veermata Jijabai Technological Institute, Mumbai.</h3>
            <p>VJTI is among the best autonomous institutes in Mumbai with a very high placement records in the past years.</p>
            </a>
          </div>
          <div class="course-col">
          <a href="https://pict.edu/" target="_blank">
          <h3><span style="font-size: 25px;">#3.</span> Pune Institute of Computer Technology.</h3>
            <p>PICT is a well known private Engineering Institute for Computer Engineering and related branches. Sadly it does not have seats for non-IT core branches.</p>
          </a>
          </div>
        </div>
        <div class="row" style="margin-bottom: -75px;">
          <div class="course-col">
          <a href="http://www.walchandsangli.ac.in/" target="_blank">
            <h3><span style="font-size: 25px;">#4.</span> Walchand College of &nbsp;&nbsp;&nbsp; Engineering, Sangli.</h3>
            <p>Walchand College of Engineering is an autonomous Engineering College in the city of Sangli serving seats for several branches including all the core branches.</p></a>
          </div>
          <div class="course-col">
          <a href="https://www.vit.edu/" target="_blank">
            <h3><span style="font-size: 25px;">#5.</span> Vishwakarma Institute of &nbsp;&nbsp; Technology, Pune.</h3>
            <p>Vishwakarma Institute of Technology is an autonomous engineering college in Pune which was established in 1983 and it is affiliated to the Savitribai Phule Pune University.</p></a>
          </div>
          <div class="course-col">
          <a href="https://www.spit.ac.in/" target="_blank">
            <h3><span style="font-size: 25px;">#6.</span> Sardar Patel Institute of &nbsp;&nbsp;&nbsp; Technology, Mumbai.</h3>
            <p>SPIT is an autonomous un-aided Research and Engineering Institute affiliated to University of Mumbai offering seats for Computer Engineering and related branches.</p></a>
          </div>
        </div>
        <div class="row">
          <div class="course-col">
          <a href="https://www.ictmumbai.edu.in/" target="_blank">
            <h3><span style="font-size: 25px;">#7.</span> Institute of Chemical Technology, Matunga, Mumbai.</h3>
            <p>Institute of Chemical Technology is a state-funded deemed university in Mumbai, India. It is focused on training and research in fields of chemical engineering, chemical technology, and pharmacy.</p></a>
          </div>
          <div class="course-col">
          <a href="http://www.gcekarad.ac.in/" target="_blank">
            <h3><span style="font-size: 25px;">#8.</span> Government College of &nbsp;&nbsp;&nbsp; Engineering, Karad.</h3>
            <p>Government College of Engineering, Karad is an autonomous technical institute established in 1960 affiliated to the Shivaji University with an autonomous status under the UGC.</p></a>
          </div>
          <div class="course-col">
          <a href="http://www.pccoepune.com/" target="_blank">
          <h3><span style="font-size: 25px;">#9.</span> Pimpri Chinchwad College of &nbsp;&nbsp; Engineering, Pune.</h3>
            <p>Pimpri Chinchwad College of Engineering is an engineering college in the city of Pune, established in the year 1999 and it is affiliated to the Savitribai Phule Pune University.</p></a>
          </div>
            </div>
      </section>

      <section class="section section-a" style="text-align: left; color:white; box-shadow: 0 0 20px 0px rgba(0, 0, 0, 0.9);">
      <div class="container5" style="margin-left: 350px; margin-right:250px; margin-top:150px;"><br><br><br>
        <h2 style="margin-left: 70px;">Documents Required for Engineering Admissions.</h2><br>
        <p><span style="text-align: justify;">You must ensure that You have all the below mentioned Documents in original copies and scanned copies of all these Documents before seeking Admissions in any Institute.</p><br>
        <p style="margin-left: 185px;">THE DOCUMENTS :<ul style="margin-left: 265px;">
            <li>1. MHTCET/JEE Results/Marksheet</li>
            <li>2. MHTCET Seat Confirmation Letter</li>
            <li>3. SSC Marksheet</li>
            <li>4. HSC Marksheet</li>
            <li>5. HSC Board Certificate</li>
            <li>6. Leaving Certificate of HSC</li>
            <li>7. Domicile Certificate</li>
            <li>8. Non-Creamy Layer Certificate</li>
            <li>9. Income Certificate (for Categories and TFWS)</li>
            <li>10. Caste Certificate (if applicable)</li>
            <li>11. Caste Validity Certificate (if applicable)</li>
            <li>12. Migration Certificate (if applicable)</li>
            <li>13. Adhaar Card </li>
          </ul></p>
        </div><br><br>
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