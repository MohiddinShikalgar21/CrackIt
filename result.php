<?php
session_start();
include "connection.php";
$date=date("Y-m-d H:i:s");
$_SESSION["end_time"]=date("Y-m-d H:i:s",strtotime($date."+$_SESSION[exam_time] minutes"));

include "header.php";

?>

    <div class="row">

        <div class="col-lg-6 col-lg-push-3">
           <?php
             $correct=0;
             $wrong=0;

             if(isset($_SESSION["answer"]))
             {
                 for($i=1;$i<=sizeof($_SESSION["answer"]);$i++)
                 {
                     $answer="";
                     $res=mysqli_query($db,"SELECT * from questions where category='$_SESSION[exam_category]' && question_no=$i");
                     while($row=mysqli_fetch_array($res))
                     {
                         $answer=$row["answer"];
                     }

                     if(isset($_SESSION["answer"][$i]))
                     {
                         if($answer==$_SESSION["answer"][$i])
                         {
                             $correct=$correct+1;
                         }
                         else
                         {
                             $wrong=$wrong+1;
                         }
                     }
                     else
                     {
                         $wrong=$wrong+1;
                     }
                 }
             }

            $count=0;
            $res=mysqli_query($db,"SELECT * from questions where category='$_SESSION[exam_category]'");
            $count=mysqli_num_rows($res);
            $wrong=$count-$correct;
            echo "<br>";echo "<br>";
            echo "<center>";?>
              <p style="color: blue; margin:0px; font-size: 15px;"><?php echo "Total Questions : ".$count;?> </p> 
              <p style="color: green; margin:0px; font-size: 15px;"><?php echo "Correct Answered : ".$correct; ?> </p> 
              <p style="color: red; margin:0px; font-size: 15px;"><?php echo "Wrong Answered : ". $wrong; ?> </p> <?php
              echo "<br>"; ?>
              <p style="color: black; margin:0px; font-size: 17px;"><?php echo "Your Total Score is : $correct/$count"; ?> </p> <?php
            echo "</center>";

            
           ?>
        </div>
    </div>
    <div style="align-items:center; text-align:center; padding-top:50px; ">
        <a type="button" class="btn btn-warning" href="select_exam.php">Attempt Another Exam</a>&nbsp;&nbsp;
        <a type="button" class="btn btn-success" href="index.php">Return to Home page</a>
    </div>

<?php
  if(isset($_SESSION["exam_start"]))
  {
     $date=date("Y-m-d");
     mysqli_query($db,"INSERT into exam_results(id,username,exam_type,total_question,correct_answer,wrong_answer,exam_time) VALUES(NULL,'$_SESSION[login_user2]','$_SESSION[exam_category]','$count','$correct','$wrong','$date')");
  }
  if(isset($_SESSION["exam_start"]))
  {
      unset($_SESSION["exam_start"]);
      ?>
        <script type="text/javascript">
            window.location.href=window.location.href;
        </script>
      <?php
  }

?>

