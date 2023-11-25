<?php
include 'admin_Theme_DB.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Knot. | Dashboard 2</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet"
    href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="admin_css/Theme.css">
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>

<body class="hold-transition dark-mode sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
  <div class="wrapper">

    <?php include 'admin_nav.php';?>
    <div class="preloader flex-column justify-content-center align-items-center">
      <img class="animation__wobble" src="dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
    </div>

    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-dark">
      <!-- Left navbar links -->
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
        <li class="nav-item   d-sm-inline-block">
          <a href="admin_dashboard.php" class="nav-link">Dashboard</a>
        </li>
        <li class="nav-item   d-sm-inline-block">
          <a href="#" type="button" class="nav-link " data-toggle="modal" data-target="#exampleModal">Add Packages</a>
        </li>
      </ul>
    </nav>
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0">Photography</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item "><a href="admin_dashboard.php">Dashboard</a></li>
                <li class="breadcrumb-item active ">Photography</li>
              </ol>
            </div><!-- /.col -->
          </div><!-- /.row -->
        </div><!-- /.container-fluid -->
      </div>
      <!-- /.content-header -->

      <!-- Main content -->
      <!------------------------------------- Modal--------------------------->

      <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Add Package</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <form id="Addpackages" method="post" action="admin_Theme.php">
                <div class="card-body">
                  <div class="form-group" style="display:none;">
                    <!-- <label for="product_id">Product ID</label> -->
                    <input type="text" name="id" class="form-control" id="product_id" placeholder="Enter Product ID"
                      disabled>
                  </div>

                  <div class="form-group">
                    <label for="product_id">Product ID</label>
                    <input type="text" name="product_id" value="" class="form-control" id="product_id"
                      placeholder="Enter Product ID" required>
                  </div>

                  <div class="form-group">
                    <label for="event_type">Event Type</label>
                    <div class="event_type">
                      <select class="eve_section" name="eve_type" required>
                        <option value="">Select Events:</option>
                        <option value="all_events">All events</option>
                        <option value="engagement">Engagement</option>
                        <option value="garba">Garba</option>
                        <option value="wedding">Wedding</option>
                        <option value="reception">Reception</option>
                      </select>
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="package_name">Package Name</label>
                    <input type="text" name="package_name" class="form-control" placeholder="Enter Package Name"
                      required>
                  </div>
                  <div class="form-group">
                    <label for="package_price">Package Price</label>
                    <input type="number" name="package_price" class="form-control" min="0"
                      placeholder="Enter Package Price" required>
                  </div>
                </div>

                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                  <button type="submit" class="btn btn-primary" name="add">Add</button>
                </div>

              </form>
            </div>
          </div>
        </div>
      </div>

      <!-- update modal -->
      <div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">edit Package</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <form id="Addpackages" method="POST" action="admin_Theme.php">
                <div class="card-body">
                  <!-- -->
                  <div class="form-group">
                    <label for="package_id">Package ID</label>
                    <input type="text" name="product_id" class="form-control" id="idEdit" value="idEdit"
                      placeholder="Enter Product ID" required>
                  </div>

                  <div class="form-group">
                    <label for="event_type">Event Type</label>
                    <div class="event_type">
                      <select class="eve_section" id="event_type" name="event_type" required>
                        <option value="" disabled>Select Events:</option>
                        <option value="all_events">All events</option>
                        <option value="engagement">Engagement</option>
                        <option value="garba">Garba</option>
                        <option value="wedding">Wedding</option>
                        <option value="reception">Reception</option>
                      </select>
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="pack_name">Package Name</label>
                    <input type="text" name="package_name" class="form-control" id="pack_name"
                      placeholder="Enter Package Name" required>
                  </div>
                  <div class="form-group">
                    <label for="pack_price">Package Price</label>
                    <input type="number" name="package_price" class="form-control" id="pack_price" min="0"
                      placeholder="Enter Package Price" required>
                  </div>
                </div>

                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                  <button type="submit" name="update" class="btn btn-primary">Save changes</button>
                </div>
              </form>
            </div>

          </div>
        </div>
      </div>
      <!-- Main content -->
      <section class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-12">
              <div class="card">
                <div class="card-header">
                  <h3 class="card-title">DataTable with default features</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                  <table id="example1" class="table table-bordered table-striped">
                    <thead>
                      <tr>
                        <th>Sno.</th>
                        <th>Product ID</th>
                        <th>Event</th>
                        <th>Package Name</th>
                        <th>Package Price</th>
                        <th>Update</th>
                        <th>Dalete</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php 
                        $sql = "SELECT * FROM `decoration`";
                        $result = mysqli_query($conn , $sql);
                        $id = 0;
                        while($row = mysqli_fetch_assoc($result)){
                            $id += 1;
                            echo "<tr>
                            <th scope='row'>". $id ."</th>
                            <td>". $row['product_id'] ."</td>
                            <td>". $row['event_type'] ."</td>    
                            <td>". $row['_packages_name'] ."</td> 
                            <td>". $row['_packages_price'] ."</td>     
                            <td>
                            <button class= 'edit btn' onclick='editRow(" . $row['id'] . ", \"" . $row['product_id'] . "\", \"" . $row['event_type'] . "\", \"" . $row['_packages_name'] . "\", \"" . $row['_packages_price'] . "\")'><i
                            class='fa fa-edit'></i> Update</button>
    
                            </td>
                            <td>
                            <button class='delete btn' name='delete' onclick='deleteRow(" . $row['id'] . ", \"" . $row['product_id'] . "\")'><i
                            class='fa fa-trash'></i> Delete</button>
                        </tr>  ";                        
                        }
                    ?>
                    </tbody>
                  </table>
                </div>
                <!-- /.card-body -->
              </div>
              <!-- /.card -->
            </div>
            <!-- /.col -->
          </div>
          <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
      </section>
      <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
      <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->

    <!-- Main Footer -->
  </div>
  <!-- ./wrapper -->

  <!-- REQUIRED SCRIPTS -->
  <!-- jQuery -->
  <script src="plugins/jquery/jquery.min.js"></script>
  <!-- Bootstrap -->
  <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- overlayScrollbars -->
  <script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
  <!-- AdminLTE App -->
  <script src="dist/js/adminlte.js"></script>

  <!-- PAGE PLUGINS -->
  <!-- jQuery Mapael -->
  <script src="plugins/jquery-mousewheel/jquery.mousewheel.js"></script>
  <link rel="stylesheet" href="../../plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <script src="plugins/raphael/raphael.min.js"></script>
  <script src="plugins/jquery-mapael/jquery.mapael.min.js"></script>
  <script src="plugins/jquery-mapael/maps/usa_states.min.js"></script>
  <!-- ChartJS -->
  <script src="plugins/chart.js/Chart.min.js"></script>
  <script src="../../plugins/datatables/jquery.dataTables.min.js"></script>

  <!-- AdminLTE for demo purposes -->
  <script src="dist/js/demo.js"></script>
  <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
  <script src="dist/js/pages/dashboard2.js"></script>\
  <script>
    $(function () {
      $("#example1").DataTable({
        "responsive": true, "lengthChange": false, "autoWidth": false,
        "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
      }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
      $('#example2').DataTable({
        "paging": true,
        "lengthChange": false,
        "searching": false,
        "ordering": true,
        "info": true,
        "autoWidth": false,
        "responsive": true,
      });
    });
  </script>
  <?php
  if(isset($_SESSION['status']) && $_SESSION['status'] != '')
	{
		?>
  <script>
    Swal.fire({
      icon: "<?php  echo $_SESSION['status_code']; ?>",
      // title: ,
      text: "<?php  echo $_SESSION['status'];?>",
      // footer: '<a href="">Why do I have this issue?</a>'
    })
  </script>
  <?php
		unset($_SESSION['status']);
		unset($_SESSION['status_code']);
	}
  ?>
  <script>

    function editRow(id, product_id, eventType, packageName, packagePrice) {

      document.getElementById('idEdit').value = product_id;

      document.getElementById('pack_name').value = packageName;
      document.getElementById('pack_price').value = packagePrice;
      console.log(packageName, packagePrice);
      var eventSelect = document.getElementById('event_type');
      for (var i = 0; i < eventSelect.options.length; i++) {
        if (eventSelect.options[i].value === eventType) {
          eventSelect.selectedIndex = i;
          break;
        }
      }
      $('#editModal').modal('show');
    }
    function deleteRow(delete_id, product_id) {
      if (confirm("Are you sure you want to delete this row with ID " + delete_id + " and product ID " + product_id + "?")) {

        var xhr = new XMLHttpRequest();
        xhr.open('POST', '<?php echo $_SERVER["PHP_SELF"]; ?>', true);
        xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
        xhr.onload = function () {
          if (xhr.status === 200) {

            console.log(xhr.responseText);

            location.reload();
          } else {

            console.error(xhr.responseText);
          }
        };
        xhr.send('delete_id=' + delete_id + '&product_id=' + product_id);
      }
    }
  </script>
</body>

</html>