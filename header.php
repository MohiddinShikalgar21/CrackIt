<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>CrackIt!</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <link rel="stylesheet" href="css1/bootstrap.min.css">
    <link rel="stylesheet" href="css1/font-awesome.min.css">
    <link rel="stylesheet" href="style3.css">

    <style>
         @import url("https://fonts.googleapis.com/css2?family=Nunito:wght@200;300;400;500;600&display=swap");
            * {
              font-family: 'Nunito', sans-serif;
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
              padding-right: 29px;
              word-spacing: 6px;
            }
            .navlinks
            {
              padding: 15px 0;
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
              font-size: 14px;
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
    </style>   

</head>

<body>

<div class="all-content-wrapper">

    <div class="header-advance-area">
        <div class="header-top-area" style="background-color: #1d9d88e6;">
            <div class="container-fluid">
                <div class="row"> 
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="logo"><span>Crack</span>It!</div>
                        <div class="header-top-wraper">
                            <div class="row">
                                
                                
                                <!--<div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">-->
                                    <div class="header-right-info">
                                        
                                        <ul class="nav navbar-nav mai-top-nav header-right-menu">
                                        <nav>
                                        <ul class="navlinks">
                                            <li><a href="index.php">Home</a></li>
                                            <li><a href="material.php">Resources</a></li>
                                            <li><a href="select_exam.php">Exam</a></li>
                                            <li><a href="more.php">More</a></li>
                                            <li><a href="about.php">About</a></li>
                                            <li class="btn2"><a href="logout.php">Logout</a></li>
                                        </ul>
                                        </nav>

                                            <!--<li class="nav-item">
                                                <a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle">
                                                    <img src="img/avatar-mini2.jpg" alt="" />
                                                    <span class="admin-name"><?php /*echo $_SESSION["username"];*/ ?></span>
                                                    <i class="fa fa-angle-down edu-icon edu-down-arrow"></i>
                                                </a>
                                                <ul role="menu" class="dropdown-header-top author-log dropdown-menu animated zoomIn">
                                                    <li><a href="#">Last Results</a></li> 
                                                    <li><a href="logout.php"><span class="edu-icon edu-locked author-log-ic"></span>Log Out</a>
                                                    </li>
                                                </ul>
                                            </li>-->

                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Mobile Menu start -->

        <!-- Mobile Menu end -->
        <div class="breadcome-area">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="breadcome-list" style="box-shadow: 0 0 20px 0px rgba(0, 0, 0, 0.2);">
                            <div class="row" style="text-align: center;">
                            <h5 style="color:#0d836f; font-family: 'Poppins',sans-serif; font-size:15px; font-weight:500; margin: 10px; ">Select Exam from below Categories. Read the below given instructions carefully before attempting the exam. Avoid use of any electronic gadgets like calculator/mobile. <br>Ensure proper time management. All the Best! </h5>
                                   
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<script type="text/javascript">
    setInterval(function(){
        timer();
    },1000);
    function timer()
    {
        var xmlhttp=new XMLHttpRequest();
        xmlhttp.onreadystatechange=function() {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {

                if(xmlhttp.responseText=="00:00:01")
                {
                    window.location="result.php";
                }

                document.getElementById("countdowntimer").innerHTML=xmlhttp.responseText;

            }
        };
        xmlhttp.open("GET","forajax/load_timer.php",true);
        xmlhttp.send(null);
    }

    </script>