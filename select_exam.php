<?php
session_start();
if(!isset($_SESSION["login_user2"]))
{

    ?>
    <script type="text/javascript">
        window.location="getstarted.php";
    </script>
    <?php

}
?>
<?php
include "connection.php";
include "header.php";
?>


    <div class="row" style="margin: 0px; padding:0px; margin-bottom: 50px;">

        <div class="col-lg-6 col-lg-push-3" style="min-height: 500px; background-color: white; align-items:center;  box-shadow: 0 0 15px 0px rgba(0, 0, 0, 0.4);"><br>

        
            <?php
            $res=mysqli_query($db,"select * from exam_category");
            while($row=mysqli_fetch_array($res))
            {
                ?>
            <input type="button" class="btn btn-success form-control" value="<?php echo $row["category"]; ?>" style="margin-top: 17px; background-color: #0bb371d4; color: white; font-size:14px; font-weight:500; font-family: 'Poppins',sans-serif; box-shadow: 0 0 7px 0px rgba(0, 0, 0, 0.2);" onclick="set_exam_type_session(this.value);">
                <?php

            }



            ?>


        </div>

    </div>


<?php
include "footer.php";
?>

<script type="text/javascript">
    function set_exam_type_session(exam_category)
    {
        var xmlhttp=new XMLHttpRequest();
        xmlhttp.onreadystatechange=function() {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                window.location = "dashboard.php";
            }
        };
        xmlhttp.open("GET","forajax/set_exam_type_session.php?exam_category="+ exam_category,true);
        xmlhttp.send(null);
    }
</script>
