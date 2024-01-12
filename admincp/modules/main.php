<div class="clear"></div>
<div class="main">
<?php
        if(isset($_GET['action'])){
          $tam =$_GET['action'];
        }else{
          $tam='';
        }
        if($tam=='quanlidanhmuc'){
          include("modules/quanlidanhmuc/them.php");
        }elseif($tam=='quanlibaiviet'){
          include("main/quanlibaiviet.php");
        }else{
          include('modules/dashboard.php');
        }
      ?>
</div>