<?php
include "connection.php";
$date=date("Y-m-d H:i:s");

include "header2.php";
?>

    <div class="row">

        <div class="col-lg-6 col-lg-push-3">
           
        <table class="table table-bordered">
        <tr>
          <th>No</th>
          <th>Questions</th>
          <th>Opt1</th>
          <th>Opt2</th>
          <th>Opt3</th>
          <th>Opt4</th>
          <th>Answer</th>
        </tr>
        
        <?php
        $res=mysqli_query($db,"SELECT * from questions where category='$_SESSION[exam_start]' order by question_no asc");
        while($row=mysqli_fetch_array($res))
        {
          echo "<tr>";
            echo "<td>"; echo $row["question_no"];  echo "</td>";
            echo "<td>"; echo $row["question"];  echo "</td>";

            echo "<td>"; 
              if(strpos($row["opt1"],'opt_images/')!==false)
              {
                ?>
                  <img src="" <?php echo $row["opt1"]; ?> height="50" width="50">
                <?php
              }
              else
              {
                echo $row["opt1"];  
              }
            echo "</td>";

            echo "<td>"; 
              if(strpos($row["opt2"],'opt_images/')!==false)
              {
                ?>
                  <img src="" <?php echo $row["opt2"]; ?> height="50" width="50">
                <?php
              }
              else
              {
                echo $row["opt2"];  
              }
            echo "</td>";

            echo "<td>"; 
              if(strpos($row["opt3"],'opt_images/')!==false)
              {
                ?>
                  <img src="" <?php echo $row["opt3"]; ?> height="50" width="50">
                <?php
              }
              else
              {
                echo $row["opt3"];  
              }
            echo "</td>";
            
            echo "<td>"; 
              if(strpos($row["opt4"],'opt_images/')!==false)
              {
                ?>
                  <img src="" <?php echo $row["opt4"]; ?> height="50" width="50">
                <?php
              }
              else
              {
                echo $row["opt4"];  
              }
            echo "</td>";

          echo "</tr>";
        }
        ?>
      </table>
            
           
        </div>
    </div>