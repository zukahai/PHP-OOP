<?php
  include "../Model/infoDB.php";
  include "../Model/Account.php";

  if (Account::checkLoginByCookie($conn) != "admin") {
    include "../Model/404page.php";
    return;
  }

  function generateRandomString($length = 10) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
  }
?>

<!DOCTYPE html>
<html>
    <head>
    <title>Thêm sản phẩm | Bê tông sợi thuỷ tinh</title>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="../assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="../assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="../assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="../assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="../assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="../assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
    <link href="../assets/img/favicon.png" rel="icon">
    <link href="../assets/img/apple-touch-icon.png" rel="apple-touch-icon">
    <link rel="stylesheet" href="../assets/css/tel.css">

    <script src="https://cdn.tiny.cloud/1/uvz9twni3jdi0u4gxcil3o99099o63a23k0j1gxujxm0cn1a/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>

    <script>
        tinymce.init({
            selector: '#detail',
            plugins: [
                'a11ychecker', 'advlist', 'advcode', 'advtable', 'autolink', 'checklist', 'export',
                'lists', 'link', 'image', 'charmap', 'preview', 'anchor', 'searchreplace', 'visualblocks',
                'powerpaste', 'fullscreen', 'formatpainter', 'insertdatetime', 'media', 'table', 'help', 'wordcount'
            ],
            toolbar: 'undo redo | formatpainter casechange blocks | bold italic backcolor | ' +
                'alignleft aligncenter alignright alignjustify | ' +
                'bullist numlist checklist outdent indent | removeformat | a11ycheck code table help',
            branding: false
        });
    </script>

    <link href="../assets/css/style.css" rel="stylesheet">
  </head>
<body>

<div class="container">
<?php include "../Model/menu.php" ?>
    <form action="" method="post" enctype="multipart/form-data" class="mt-5 py-5">
    <div class="form-group ">
        <label for="id">Mã sản phẩm</label>
        <input type="text" class="form-control" name="id" id="id"  >
    </div>
    <div class="form-group ">
        <label for="name">Tên sản phẩm</label>
        <input type="text" class="form-control" name="name" id="name"  >
    </div>
    <div class="form-group ">
        <label for="size">Kích thước/viên</label>
        <input type="text" class="form-control" name="size" id="size">
    </div>
    <div class="form-group ">
        <label for="mass">Khối lượng</label>
        <input type="text" class="form-control" name="mass" id="mass"  >
    </div>
    <div class="form-group ">
        <label for="material">Vật liệu</label>
        <input type="text" class="form-control" name="material" id="material"  >
    </div>
    <div class="form-group ">
        <label for="price">Giá</label>
        <input type="text" class="form-control" name="price" id="price"  >
    </div>

    <div class="form-group">
      <label for="detail">Giới thiệu chi tiết sản phẩm</label>
      <textarea id="detail" name="detail"></textarea>
    </div>
    
      <div class="custom-file mb-4">
          <label for="fileToUpload" class="custom-file-label">Image</label>
          <input type="file" class="custom-file-input" id="fileToUpload" name="fileToUpload" />
  		</div>
    <div class="form-group d-flex justify-content-center">
      <input class="btn-success btn" type="submit" value="Upload" name="submit" id="submit">
    </div>

</div>
</form>
<?php
if(isset($_FILES["fileToUpload"]["name"])){
  include "../Model/infoDB.php";

  $target_dir = "../assets/ImageUploads/";
  $_FILES["fileToUpload"]["name"] = generateRandomString(50).".png";
  $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
  $uploadOk = 1;
  $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

  // Check if image file is a actual image or fake image
  if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
      echo "File is an image - " . $check["mime"] . ".<br>";
      $uploadOk = 1;
    } else {
      echo "File is not an image.";
      $uploadOk = 0;
    }
  }

  // Check if file already exists
  if (file_exists($target_file)) {
    echo "Sorry, file already exists.";
    $uploadOk = 0;
  }

  // Check file size
  if ($_FILES["fileToUpload"]["size"] > 500000) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
  }

  // Allow certain file formats
  if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
  && $imageFileType != "gif" ) {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
  }
  if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
    echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
  } else {
    echo "Sorry, there was an error uploading your file.";
  }
  $id1 = $_POST["id"];
  $name = $_POST["name"];
  $size = $_POST["size"];
  $mass = $_POST["mass"];
  $material = $_POST["material"];
  $price = $_POST["price"];
  $detail = $_POST["detail"];

$sql = "INSERT INTO sanpham(`ID`, `Name`, `Size`, `Mass`, `Material`, `Price`, `URl`, `Detail`)
  VALUES ('".$id1."', '".$name."', '".$size."', '".$mass."', '".$material."', '".$price."', '".$target_file."', '".$detail."')";

if ($conn->query($sql) === TRUE) {
  // output data of each row
    echo '<div class="row">';
    echo '<div id="myModal" class="modal fade">';
    echo '<div class="modal-dialog">';
    echo '<div class="modal-content">';
    echo '<div class="modal-header">';
    echo '<h5 class="modal-title">Thông báo</h5>';
    echo '<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>';
    echo '</div>';
    echo '<div class="modal-body">';
    echo '<div class="alert alert-success">Thêm thành công</div>';
    echo '</div>';
    echo '</div>';
    echo '</div>';
    echo '</div>';
    echo '</div>';
  } else {
    echo '<div class="row">';
    echo '<div id="myModal" class="modal fade">';
    echo '<div class="modal-dialog">';
    echo '<div class="modal-content">';
    echo '<div class="modal-header">';
    echo '<h5 class="modal-title">Thông báo</h5>';
    echo '<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>';
    echo '</div>';
    echo '<div class="modal-body">';
    echo '<div class="alert alert-danger">Thêm thất bại</div>';
    echo '</div>';
    echo '</div>';
    echo '</div>';
    echo '</div>';
    echo '</div>';
  }

}
?>
  <!-- ======= Footer ======= -->
  <?php include "../Model/footer.php" ?>
    <!-- End Footer -->
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
    <!-- Vendor JS Files -->
    <script src="../assets/vendor/purecounter/purecounter.js"></script>
    <script src="../assets/vendor/aos/aos.js"></script>
    <script src="../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="../assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="../assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="../assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="../assets/vendor/php-email-form/validate.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <!-- Template Main JS File -->
    <script src="../assets/js/main.js"></script>
    <script>
	    $(document).ready(function(){
	        $("#myModal").modal('show');
	    });

      $('#myModal').on('click', 'button.close', function (eventObject) {
        $('#myModal').modal('hide');
    });
	</script>

  <script>
	// Add the following code if you want the name of the file appear on select
		$(".custom-file-input").on("change", function() {
		  var fileName = $(this).val().split("\\").pop();
		  $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
		});
	</script>
    

</body>
</html>