<?php
  include "../connection.php";
  $id=$_GET["id"];
  mysqli_query($db,"DELETE from exam_category where id=$id");
?>
<script type="text/javascript">
    window.location="exam_category.php";
</script>