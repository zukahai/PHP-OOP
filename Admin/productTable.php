<?php
  include "../Model/infoDB.php";
  include "../Model/Account.php";
  include "../Model/ProductManagement.php";

  if (Account::checkLoginByCookie($conn) != "admin") {
    include "../Model/404page.php";
    return;
  }

  if (isset($_GET['idDelete'])) {
    Account::deleteById($conn, $_GET['idDelete']);
  }

  $sql = "SELECT * FROM sanpham";
  $pm = new ProductManagement();
  $pm->getDataTable($sql, $conn);
  $pm->sortByTimeDesc();
?>

<!DOCTYPE html>
<html>
    <head>
    <title>Admin: Sản phẩm | Bê tông sợi thuỷ tinh</title>
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

    <link href="../assets/css/style.css" rel="stylesheet">

    <script>
	    $(document).ready(function(){
	    	 $('#galleryModal').on('show.bs.modal', function (e) {
	    	    $('#galleryImage').attr("src", $(e.relatedTarget).data("large-src"));
            $('#iddelete').attr("href", $(e.relatedTarget).data("deleteurl"));
            $('#nameproduct').attr("value",$(e.relatedTarget).data("name"));
	    	 });
	        $("#myModal").modal('show');
	    });
	</script>
  </head>
<body>
  <?php include "../Model/menu.php"?>

  <div id="galleryModal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
		    <div class="modal-dialog modal-lg">
		        <div class="modal-content">
              <h2 class="text-center text-primary mt-3">Bạn có thực sự muốn xoá sản phẩm</h2>
              <h1 class="text-center"><input style="border: none;"  class="text-center text-danger" type="text" value="Ten san pham" id="nameproduct" disabled></input></h1>
		            <div class="modal-header">
		                <h3 class="text-center mb-0"></h3>
		                <button type="button" class="close float-right" aria-label="Close" data-dismiss="modal">
		                  <span aria-hidden="true">&#xD7;</span>
		                </button>
		            </div>
		            <div class="modal-body p-0 text-center bg-alt">
		                <img src="" id="galleryImage" class="loaded-image mx-auto img-fluid" style="width: 300px; height: 250px; object-fit: cover;">
		            </div>
		            <div class="modal-footer d-flex justify-content-center">
		                <a class="btn btn-danger" href="" id="iddelete">Xoá</a>
		            </div>
		        </div>
		    </div>
		</div>

        
  <div class="container py-5 my-5">
  <h1 class="text-center text-mt-5">Sản phẩm đã đăng</h1> 
  <table class="table my-5">
    <thead>
      <tr>
        <th class="text-primary" scope="col">Mã sản phẩm</th>
        <th class="text-primary" scope="col">Tên sản phẩm</th>
        <th class="text-primary" scope="col">Thời gian đăng</th>
        <th class="text-primary" scope="col">Số lượt xem</th>
        <th class="text-primary" scope="col">&nbsp;</th>
      </tr>
    </thead>
    <tbody>
      <?php
        foreach ($pm->getList() as &$value) {
          echo '<tr>';
          echo '<td>'.$value->getId().'</td>';
          echo '<td>'.$value->getName().'</td>';
          echo '<td>'.$value->getDatetime().'</td>';
          echo '<td>'.$value->getView().'</td>';
          echo '<td>
          <a class="btn btn-success mx-1" href="updateProduct.php?id='.$value->getId().'">Chỉnh sửa</a>
          <a class="btn btn-danger mx-1" href="#galleryModal" data-large-src="'.$value->getUrl().'" data-deleteurl="?idDelete='.$value->getId().'" data-name="'.$value->getName().'"  data-toggle="modal">Xoá</a>
          </td>';
          echo '<tr>';
        }
      ?>
    </tbody>
  </table>
  </div>
  <?php include "../Model/footer.php"?>
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
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>
</html>