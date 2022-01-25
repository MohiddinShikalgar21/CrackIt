<?php
include "header2.php";
?>

<div class="row" style="margin: 0px; padding:0px; margin-bottom: 50px;">

        <div class="col-lg-6 col-lg-push-3" style="min-height: 500px; background-color: white;">
         <br>
         <div class="row">

                 <br>
                 <div class="col-ig-2 col-lg-push-10" style="margin-left: 15px;">
                   <div id="current_que" style="float: left;">0</div>
                   <div style="float: left;">/</div>
                   <div id="total_que" style="float: left;">0</div>
                 </div>

                 <div class="row" style="margin-top: 30px;">
                   <div class="row" style="align-items: center;">
                           <div class="col-lg-10 col-lg-push-1" style="min-height:300px; background-color: white;" id="load_questions">
                           <p style="text-align: justify;">General Instructions: <br> 1. The Countdown Timer in the right corner displays the Remaining Time Available to you to Complete your Exam. <br> 2. When the Timer will reach 0, the Exam will  Automatically Terminate. </p>
                           <p style="text-align: justify;">Navigating to a Question: <br> 1. Click NEXT to move to the next question. <br> 2. Click PREVIOUS to move to the previous question. <br> 3. Click SUBMIT EXAM to end/terminate the Exam. CLICKING THIS OPTION WILL END YOUR EXAM AND GENERATE YOUR RESULT. SO BE DOUBLE SURE WHILE CLICKING IT. </p>   
                           <h5 style="font-weight:600; text-align:center; margin-top:40px;">CLICK "NEXT" TO LOAD THE QUESTIONS.</h5>
                           </div>
                   </div>
                 </div>

                  <div class="row" style="margin-top: 10px;">
                     <div class="col-lg-6 col-lg-push-3" style="min-height: 50px;">
                        <div class="col-lg-12 text-center">
                                <input type="button" class="btn btn-warning" value="Previous" style="width: 100px;" onclick="load_previous();">&nbsp;&nbsp;
                                <input type="button" class="btn btn-success" value="Next" style="width: 100px;" onclick="load_next();">&nbsp;&nbsp;<br><br>
                                <a type="button" class="btn btn-danger" href="result.php">Submit Exam</a>
                        </div>
                     </div>
                  </div>

         </div>
       
        </div>
</div>


<script type="text/javascript">

    function load_total_que()
    {
        var xmlhttp=new XMLHttpRequest();
        xmlhttp.onreadystatechange=function() {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                document.getElementById("total_que").innerHTML=xmlhttp.responseText;
            }
        };
        xmlhttp.open("GET","forajax/load_total_que.php",true);
        xmlhttp.send(null);
    }

    var questionno="0";

    function load_questions(questionno)
    {
        document.getElementById("current_que").innerHTML=questionno;
        var xmlhttp=new XMLHttpRequest();
        xmlhttp.onreadystatechange=function() {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
               if (xmlhttp.responseText=="over")
               {
                window.location.href=window.location.href;
               }
               else
               {
                   document.getElementById("load_questions").innerHTML=xmlhttp.responseText;
                   load_total_que();
               }
            }
        };
        xmlhttp.open("GET","forajax/load_questions.php?questionno="+questionno,true);
        xmlhttp.send(null);    
    }
    
    function radioclick(radiovalue,questionno)
    {
        var xmlhttp=new XMLHttpRequest();
        xmlhttp.onreadystatechange=function() {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
               
            }
        };
        xmlhttp.open("GET","forajax/save_answer_in_session.php?questionno="+questionno +"&value1="+radiovalue,true);
        xmlhttp.send(null);
    }

    function load_previous()
    {
       if(questionno=="1")
       {
               load_questions(questionno);
       }
       else
       {
               questionno=eval(questionno)-1;
               load_questions(questionno);
       }
    }

    function load_next()
    {
               questionno=eval(questionno)+1;
               load_questions(questionno);
    }

</script>

<?php
include "footer.php";
?>
