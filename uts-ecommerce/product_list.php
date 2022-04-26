<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>ECOMMERCE</title>

  <!-- CSS -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="font-awesome/css/font-awesome.css" rel="stylesheet">
  <link href="css/plugins/iCheck/custom.css" rel="stylesheet">
  <link href="css/animate.css" rel="stylesheet">
  <link href="css/style.css" rel="stylesheet">
  <link href="css/plugins/datapicker/datepicker3.css" rel="stylesheet">

  <!-- Javascript -->
  <script src="js/jquery-3.1.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.js"></script>
  <script src="js/plugins/metisMenu/jquery.metisMenu.js"></script>
  <script src="js/plugins/slimscroll/jquery.slimscroll.min.js"></script>
  <script src="js/inspinia.js"></script>
  <script src="js/plugins/pace/pace.min.js"></script>
  <script src="js/plugins/datapicker/bootstrap-datepicker.js"></script>

</head>

<body>
  <div id="wrapper">
    <div id="page-wrapper" class="gray-bg" style="width: 100%;">
      <!-- Navigation -->
      <div class="row wrapper border-bottom white-bg page-heading">
        <div class="col-lg-10">
          <h2>Product List</h2>
          <ol class="breadcrumb">
            <li class="breadcrumb-item">
              <a href="index.html">Home</a>
            </li>
            <li class="breadcrumb-item">
              <a>Product</a>
            </li>
          </ol>
        </div>
      </div>

      <!-- Content -->
      <div class="wrapper wrapper-content animated fadeInRight">
        <div class="row">

          <!-- menu aksi -->
          <form action="" method="post">
            <div class="col-sm-10">
              <div class="input-group">
                <div class="input-group-prepend">
                  <button tabindex="-1" class="btn btn-white" type="button" onclick="alert('under maintenance');">New Product</button>
                </div>
                <div class="input-group-prepend">
                  <button tabindex="-1" class="btn btn-white" type="button" onclick="alert('under maintenance');">Search Filter</button>
                </div>
                <div class="input-group-prepend">
                  <button tabindex="-1" class="btn btn-white" type="button">Action</button>
                  <button data-toggle="dropdown" class="btn btn-white dropdown-toggle" type="button"></button>
                  <ul class="dropdown-menu">
                    <li>
                      <a href="javascript::void(0)" id="check_all">Check All</a>
                    </li>
                    <li>
                      <a href="javascript::void(0)" id="uncheck_all">Uncheck All</a>
                    </li>
                    <li class="dropdown-divider"></li>
                    <li>
                      <a href="javascript::void(0)" id="delete_all">Delete All (checked)</a>
                    </li>
                    <li class="dropdown-divider"></li>
                    <li>
                      <a href="javascript::void(0)" id="active_all">Make status "active" (checked)</a>
                    </li>
                    <li>
                      <a href="javascript::void(0)" id="notactive_all">Make status "not active" (checked)</a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
            <!-- end menu aksi -->

            <!-- tabel -->
            <div class="col-lg-12">
              <div class="ibox ">
                <div class="ibox-title">
                  <h5>Product List</h5>
                </div>
                <div class="ibox-content">
                  <div class="table-responsive">
                    <table class="table table-striped table-bordered table-hover dataTables-example">
                      <thead>
                        <tr>
                          <th>#</th>
                          <th>Product Id</th>
                          <th>Product Name</th>
                          <th>Product Category</th>
                          <th>Product Origin</th>
                          <th>Description</th>
                          <th>Quantity</th>
                          <th>Price</th>
                          <th>Status</th>
                        </tr>
                      </thead>
                      <tbody>

                        <?php
                        include 'mysql_connect.php';
                        $select_query = "select * from product";

                        // menjalankan perintah select ke tabel
                        $result = mysqli_query($conn, $select_query);

                        if ($result) {
                          // menampilkan dalam bentuk html
                          while ($row = mysqli_fetch_array($result)) {
                        ?>
                            <tr>
                              <td><input type="checkbox" name="product" id="prod_id_<?= $row['product_id']; ?>" value="<?= $row['product_id']; ?>"></td>
                              <td><?= $row['product_id'] ?></td>
                              <td><?= $row['product_name'] ?></td>
                              <td><?= $row['product_category'] ?></td>
                              <td><?= $row['product_origin'] ?></td>
                              <td><?= $row['product_description'] ?></td>
                              <td><?= $row['quantity'] ?></td>
                              <td><?= $row['price'] ?></td>
                              <td><?= $row['status'] == 1 ? 'Active' : 'Not Active' ?></td>
                            </tr>
                        <?php
                          }
                        } else {
                          echo "Gagal menarik data";
                        }

                        // menutup koneksi
                        mysqli_close($conn);
                        ?>

                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </form>
          <!-- end tabel -->

        </div>
      </div>
      <div class="footer">
        <div>
          <strong>Copyright</strong> STT YBSI Tasikmalaya &copy; 2010-Current
        </div>
      </div>
    </div>
  </div>
</body>


<script>
  $(document).ready(function() {

    // Fungsi untuk handle check all
    $("#check_all").click(function() {
      $('input:checkbox').attr('checked', 'false');
    });

    // Fungsi untuk handle uncheck all
    $("#uncheck_all").click(function() {
      $('input:checkbox').removeAttr('checked');
    });

    // Fungsi-fungsi baru dapat ditambahkan disini   

    // Fungsi Delete all (checked)
    $("#delete_all").click(function() {
      // Validasi jika tidak ada checkbox yang dicentang
      if ($('input[name=product]:checked').length === 0) {
        alert('Silahkan pilih salah satu data yang akan dihapus!');
        return false;
      } else {
        // Konfirmasi dulu ketika data mau dihapus
        if (confirm("Apakah kamu yakin mau menghapus data?")) {
          // Ambil value checkbox yang dicentang dan masukan ke dalam array
          let getValCheckbox = [];
          $('input[name=product]:checked').map(function() {
            getValCheckbox.push($(this).val());
          });

          // Kirim request melalui ajax
          $.ajax({
            url: 'product_delete_all.php',
            type: 'POST',
            data: {
              id: getValCheckbox,
            },
            dataType: 'json',
            success: function(result) {
              if (result.success == true) {
                alert(result.message);
                location.reload();
              } else {
                alert('Gagal menghapus data');
                location.reload();
              }
            }
          });
        }
      }
    });

    function productChangeActiveAll(msgAlert, msgConfirm, type) {
      // Validasi jika tidak ada checkbox yang dicentang
      if ($('input[name=product]:checked').length === 0) {
        alert(msgAlert);
        return false;
      } else {
        // Konfirmasi dulu ketika data mau dihapus
        if (confirm(msgConfirm)) {
          // Ambil value checkbox yang dicentang dan masukan ke dalam array
          let getValCheckbox = [];
          $('input[name=product]:checked').map(function() {
            getValCheckbox.push($(this).val());
          });

          // Kirim request melalui ajax
          $.ajax({
            url: 'product_change_active_all.php',
            type: 'POST',
            data: {
              type: type,
              id: getValCheckbox,
            },
            dataType: 'json',
            success: function(result) {
              if (result.success == true) {
                alert(result.message);
                location.reload();
              } else {
                alert('Gagal mengupdate data');
                location.reload();
              }
            }
          });
        }
      }
    }

    // Fungsi Make status “active” (checked)
    $("#active_all").click(function() {
      productChangeActiveAll('Silahkan pilih salah satu data yang akan diactivekan!', 'Apakah kamu yakin mau meng-activekan data?', 'active_all');
    });

    // Fungsi Make status “not active” (checked)
    $("#notactive_all").click(function() {
      productChangeActiveAll('Silahkan pilih salah satu data yang akan dinotactivekan!', 'Apakah kamu yakin mau me-nonactivekan data?', 'nonactive_all');
    });
  });
</script>

</html>