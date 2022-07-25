<?php
 $servername = "localhost";
 $username = "root";
 $password = "";
 $dbname = "web";
 $conn = new mysqli($servername, $username, $password, $dbname);
 if ($conn->connect_error) {
   die("Connection failed: " . $conn->connect_error);
 }
$sql1 = "SELECT * FROM sanpham WHERE TRUE";
if(isset($_GET["search"])){
    if(strlen ($_GET["search"]) != 0){
    $sql1 = $sql1." AND ID ='".$_GET["search"]."'";
    }
}


$result = $conn->query($sql1);

if ($result->num_rows > 0) {
 
// output data of each row
    while($row = $result->fetch_assoc()) {
      echo '<div class="col-lg-4 col-md-12 mb-4">';
      echo '<div class="card border border-dark">';
      echo '<div class="bg-image hover-zoom ripple ripple-surface ripple-surface-light"';
      echo 'data-mdb-ripple-color="light">';
      echo '<img src="'.$row['URl'].'"';
      echo 'class="w-100"';
      echo 'style="width: 300px;';
      echo 'height: 230px;';
      echo 'object-fit: cover;" />';
      echo '<a href="#!">';
      echo '<div class="mask">';
      echo '<div class="d-flex justify-content-start align-items-end h-100">';
      echo '<h5><span class="badge bg-primary ms-2 mt-2">New</span></h5>';
      echo '</div>';
      echo '</div>';
      echo '<div class="hover-overlay">';
      echo '<div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>';
      echo '</div>';
      echo '</a>';
      echo '</div>';
      echo '<div class="card-body">';
      echo '<a href="" class="text-reset">';
      echo '<h3 class="card-title mb-3">'.$row['Name'].'</h3>';
      echo '</a>';
      echo '<a href="" class="text-reset">';
      echo '<p>'.$row['Material'].'</p>';
      echo '</a>';
      echo '<h4 class="mb-3"> <span> Giá: </span>'.$row['Price'].'</h4>';
      echo '</div>';
      echo '</div>';
      echo '</div>';
    }
 
}else{
    echo "<h3>Không có sản phẩm nào</h3>";
}
?>
   
    
        
          
           
         
            