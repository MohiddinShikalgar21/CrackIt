<?php
  include "header.php";
  include "../connection.php";
  $id=$_GET["id"];
  $exam_category='';
  $res=mysqli_query($db,"SELECT * from exam_category where id=$id");
  while($row=mysqli_fetch_array($res))
  {
      $exam_category=$row["category"];
  }
?>

        </header><!-- /header -->
        <!-- Header-->

        <div class="breadcrumbs">
            <div class="col-sm-12">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Add/Edit Questions inside <?php echo "<font color='red'>".$exam_category."</font>"; ?></h1>
                    </div>
                </div>
            </div>
            
        </div>

        <div class="content mt-3">
            <div class="animated fadeIn">
            

                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                        <div class="card-body">

                        <div class="col-lg-6">
                            <form name="form1" action="" method="post" enctype="multipart/form-data">
                        <div class="card">
                            <div class="card-header"><strong>Add Questions with Text.</strong></div>
                            <div class="card-body card-block">

                                    <div class="form-group"><label for="question" class=" form-control-label">Question</label><input type="text" name="question" placeholder="Add Question" class="form-control"></div>

                                    <div class="form-group"><label for="opt1" class=" form-control-label">Option 1</label><input type="text" name="opt1" placeholder="Add Option 1" class="form-control"></div>
                                    <div class="form-group"><label for="opt2" class=" form-control-label">Option 2</label><input type="text" name="opt2" placeholder="Add Option 2" class="form-control"></div>
                                    <div class="form-group"><label for="opt3" class=" form-control-label">Option 3</label><input type="text" name="opt3" placeholder="Add Option 3" class="form-control"></div>
                                    <div class="form-group"><label for="opt4" class=" form-control-label">Option 4</label><input type="text" name="opt4" placeholder="Add Option 4" class="form-control"></div>

                                    <div class="form-group"><label for="answer" class=" form-control-label">Correct Answer</label><input type="text" name="answer" placeholder="Add Correct Answer" class="form-control"></div>

                                    <div class="form-group"><input type="submit" name="submit1" value="Save and Proceed" class="btn btn-success"></div>
                                       
                                                </div>
                                            </div> 
                            </div>



                            <div class="col-lg-6">
                        <div class="card">
                            <div class="card-header"><strong>Add Questions with Images.</strong></div>
                            <div class="card-body card-block">

                                    <div class="form-group"><label for="question" class=" form-control-label">Question</label><input type="text" name="fquestion" placeholder="Add Question" class="form-control"></div>

                                    <div class="form-group"><label for="opt1" class=" form-control-label">Option 1</label><input type="file" name="fopt1" class="form-control" style="padding-bottom: 40px;"></div>
                                    <div class="form-group"><label for="opt2" class=" form-control-label">Option 2</label><input type="file" name="fopt2" class="form-control" style="padding-bottom: 40px;"></div>
                                    <div class="form-group"><label for="opt3" class=" form-control-label">Option 3</label><input type="file" name="fopt3" class="form-control" style="padding-bottom: 40px;"></div>
                                    <div class="form-group"><label for="opt4" class=" form-control-label">Option 4</label><input type="file" name="fopt4" class="form-control" style="padding-bottom: 40px;"></div>

                                    <div class="form-group"><label for="answer" class=" form-control-label">Correct Answer</label><input type="file" name="fanswer" class="form-control" style="padding-bottom: 40px;"></div>

                                    <div class="form-group"><input type="submit" name="submit2" value="Save and Proceed" class="btn btn-success"></div>
                                       
                                                </div>
                                            </div> 
                            </form>
                            </div>

                        </div>
                        </div> 

                    </div>
                    <!--/.col-->


                    

<?php
  if(isset($_POST["submit1"]))
  {
    $loop=0;
    $count=0;
    $res=mysqli_query($db,"SELECT * from questions where category='$exam_category' order by id asc") or die(mysqli_error($db));
    $count=mysqli_num_rows($res);

    if($count==0)
    {

    }
    else
    {
      while($row=mysqli_fetch_array($res))
      {
          $loop=$loop+1;
          mysqli_query($db,"UPDATE questions SET question_no='$loop' where id=$row[id]");
      }
    }
    $loop=$loop+1;
    mysqli_query($db,"INSERT INTO questions VALUES(NULL,'$loop','$_POST[question]','$_POST[opt1]','$_POST[opt2]','$_POST[opt3]','$_POST[opt4]','$_POST[answer]','$exam_category')") or die(mysqli_error($db));

    ?>
      <script type="text/javascript">
        alert("Question Added Successfully!");
        window.location.href=window.location.href;
      </script>

    <?php
  }


?>


<?php
  if(isset($_POST["submit2"]))
  {
    $loop=0;
    $count=0;
    $res=mysqli_query($db,"SELECT * from questions where category='$exam_category' order by id asc") or die(mysqli_error($db));
    $count=mysqli_num_rows($res);

    if($count==0)
    {

    }
    else
    {
      while($row=mysqli_fetch_array($res))
      {
          $loop=$loop+1;
          mysqli_query($db,"UPDATE questions SET question_no='$loop' where id=$row[id]");
      }
    }
    $loop=$loop+1;

    $tm=md5(time());

    $fnm1=$_FILES["fopt1"]["name"];
    $dst1="./opt_images/".$tm.$fnm1;
    $dst_db1="opt_images/".$tm.$fnm1;
    move_uploaded_file($_FILES["fopt1"]["tmp_name"],$dst1);

    $fnm2=$_FILES["fopt2"]["name"];
    $dst2="./opt_images/".$tm.$fnm2;
    $dst_db2="opt_images/".$tm.$fnm2;
    move_uploaded_file($_FILES["fopt2"]["tmp_name"],$dst2);

    $fnm3=$_FILES["fopt3"]["name"];
    $dst3="./opt_images/".$tm.$fnm3;
    $dst_db3="opt_images/".$tm.$fnm3;
    move_uploaded_file($_FILES["fopt3"]["tmp_name"],$dst3);

    $fnm4=$_FILES["fopt4"]["name"];
    $dst4="./opt_images/".$tm.$fnm4;
    $dst_db4="opt_images/".$tm.$fnm4;
    move_uploaded_file($_FILES["fopt4"]["tmp_name"],$dst4);

    $fnm5=$_FILES["fanswer"]["name"];
    $dst5="./opt_images/".$tm.$fnm5;
    $dst_db5="opt_images/".$tm.$fnm5;
    move_uploaded_file($_FILES["fanswer"]["tmp_name"],$dst5);

    mysqli_query($db,"INSERT INTO questions VALUES(NULL,'$loop','$_POST[fquestion]','$dst_db1','$dst_db2','$dst_db3','$dst_db4','$dst_db5','$exam_category')") or die(mysqli_error($db));

    ?>
      <script type="text/javascript">
        alert("Question Added Successfully!");
        window.location.href=window.location.href;
      </script>

    <?php
  }


?>
              </div>
                <div class="row">
                  <div class="col-lg-12">
                      <div class="card">
                          <div class="card-body">
                            <table class="table table-bordered">
                              <tr>
                                <th>No</th>
                                <th>Questions</th>
                                <th>Opt1</th>
                                <th>Opt2</th>
                                <th>Opt3</th>
                                <th>Opt4</th>
                                <th>Edit</th>
                                <th>Delete</th>
                              </tr>
                              
                              <?php
                              $res=mysqli_query($db,"SELECT * from questions where category='$exam_category' order by question_no asc");
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

                                  echo "<td>";
                                  if(strpos($row["opt4"],'opt_images/')!==false)
                                  {
                                    ?>
                                      <a href="edit_option_images.php?id=<?php echo $row["id"]; ?>">Edit</a>
                                    <?php
                                  }
                                  else
                                  {
                                    ?>
                                    <a href="edit_option.php?id=<?php echo $row["id"]; ?>">Edit</a>
                                    <?php  
                                  } 
                                  echo "</td>";

                                  echo "<td>";
                                    ?>
                                      <a href="delete_option.php?id=<?php echo $row["id"]; ?>">Delete</a>
                                    <?php
                                  echo "</td>";


                                echo "</tr>";
                              }
                              ?>
                            </table>
                          </div>
                      </div>
                  </div>
                </div>

<?php
  include "footer.php";
?>              