<div id="slider">
      <?php
        if(isset($_GET['quanli'])){
          $tam =$_GET['quanli'];
        }else{
          $tam='';
        }
        if($tam=='GocPhuHuynh'){
          include("main/GocPhuHuynh.php");
        }elseif($tam=='LichHoc'){
          include("main/LichHoc.php");
        }elseif($tam=='ThucDon'){
          include("main/ThucDon.php");
        }elseif($tam=='TuyenSinh'){
          include("main/TuyenSinh.php");
        }else{
          include('main/index.php');
        }
      ?>
  </div>