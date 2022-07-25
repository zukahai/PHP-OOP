<?php
  include "../Model/ProductManagement.php";
  $sql = "SELECT * FROM sanpham WHERE TRUE";
  if(isset($_GET["search"])){
      if(strlen ($_GET["search"]) != 0){
          $sql = $sql." AND ID ='".$_GET["search"]."'";
      }
  }
  $p = new ProductManagement();
  $p->getDataTable($sql);
  $p->html($p->getTop(266));
?>