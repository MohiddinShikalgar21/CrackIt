<?php
session_start();
include "header.php";
include "connection.php";
?>

<div class="row" style="margin: 0px; padding:0px; margin-bottom: 50px;">

        <div class="col-lg-6 col-lg-push-3" style="min-height: 500px; background-color: white;">
         <br>
         <h2 style="text-align: center;">Previous Exam Results.</h2>
         <?php
           $count=0;
           $res=mysqli_query($db,"SELECT * from exam_results where username='$_SESSION[login_user2]' order by id desc");
           $count=mysqli_num_rows($res);

           if($count==0)
           {
               ?>
                 <h2 style="text-align: center;">No Results Found!</h2>
               <?php
           }
           else
           {
               echo "<table class='table table-bordered'>";
                echo "<tr style='background-color:#1d9d88e6;'>";
                  echo "<th>"; echo "Username"; echo "</th>";
                  echo "<th>"; echo "Exam Type"; echo "</th>";
                  echo "<th>"; echo "Total Questions"; echo "</th>";
                  echo "<th>"; echo "Correct Answered"; echo "</th>";
                  echo "<th>"; echo "Wrong Answered"; echo "</th>";
                echo "</tr>";

                while($row=mysqli_fetch_array($res))
                {
                echo "<tr>";
                  echo "<td>"; echo $row["username"]; echo "</td>";
                  echo "<td>"; echo $row["exam_type"]; echo "</td>";
                  echo "<td>"; echo $row["total_question"]; echo "</td>";
                  echo "<td>"; echo $row["correct_answer"]; echo "</td>";
                  echo "<td>"; echo $row["wrong_answer"]; echo "</td>";
                echo "</tr>";                    
                }
               echo "</table>";
           }
         ?>
        </div>
</div>

<?php
  include "footer.php";
?>
        