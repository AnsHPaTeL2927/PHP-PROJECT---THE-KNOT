<?php
include 'admin_admin_DB.php';
include 'admin_admin_DB_update.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Knot | Dashboard</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="admin_css/Admin.css">
    <link rel="stylesheet" href="dist/css/adminlte.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>

<body class="hold-transition dark-mode sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
    <div class="wrapper">

        <!-- Preloader -->
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
                    <a href="#" type="button" class="nav-link " data-toggle="modal" data-target="#exampleModal">Add
                        Admin Profile</a>
                </li>
            </ul>
        </nav>
        <!-- /.navbar -->
        <?php include 'admin_nav.php';?>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0">Admin</h1>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item ">Dashboard</li>
                                <li class="breadcrumb-item active ">Admin</li>
                            </ol>
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->
            <!------------------------------------- Modal--------------------------->

            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Add Admin Profile</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form id="Addpackages" method="post" action="admin_admin.php">
                                <div class="card-body">
                                    <div class="form-group d-none">
                                        <label for="package_name">Admin Role</label>
                                        <input type="hidden" name="role" value="1" class="form-control" >
                                    </div>
                                    <div class="form-group">
                                        <label for="package_name">Admin Name</label>
                                        <input type="text" name="name" class="form-control" 
                                            placeholder="Enter Admin Name" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="package_name">Admin Username</label>
                                        <input type="text" name="u_name" class="form-control" 
                                            placeholder="Enter Admin Username" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="package_price">Admin Password</label>
                                        <input type="password" name="password" class="form-control"
                                            min="0" placeholder="Enter Admin Passwodr" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="package_price">Admin Contect</label>
                                        <input type="text" name="contact" class="form-control" min="0"
                                            placeholder="Enter Admin Contect" required>
                                    </div>
                                </div>

                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    <button type="submit" name="add" class="btn btn-primary">Add</button>
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
                                    <h3 class="card-title">Admin Information</h3>
                                </div>
                                <!-- /.card-header -->
                                <div class="card-body">
                                    <table id="example1" class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <th>Sno.</th>
                                                <th>User_id</th>
                                                <th>Name</th>
                                                <th>Username</th>
                                                <th>Password</th>
                                                <th>Contact</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php 
                                                $sql = "SELECT * FROM `login` WHERE `role` = 1 ";
                                                $result = mysqli_query($conn , $sql);
                                                $id = 0;
                                                while($row = mysqli_fetch_assoc($result)){
                                                $id += 1;
                                                echo "<tr>
                                                    <th scope='row'>". $id ."</th>
                                                    <td>". $row['user_id'] ."</td>
                                                    <td>". $row['name'] ."</td>
                                                    <td>". $row['username'] ."</td>    
                                                    <td>". $row['password'] ."</td> 
                                                    <td>". $row['contact'] ."</td>  
                                                    <td class='a'>
                                                    <button class= 'edit btn' data-toggle='modal' data-target='#exampleModal1' onclick='editRow(" . $row['id'] . ", \"" . $row['user_id'] . "\", \"" . $row['name'] . "\", \"" . $row['username'] . "\", \"" . $row['password'] . "\", \"" . $row['contact'] . "\")'><i
                                                        class='fa fa-edit'></i></button>
                                                        <button class='delete btn' onclick='deleteRow(" . $row['id'] . ", \"" . $row['user_id'] . "\")' name='delete' ><i
                                                        class='fa fa-trash'></i></button>
                                                    </td>
                                                    </tr>  ";                        
                                                }
                                            ?>
                                            </tfoot>
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
                <div class="modal fade" id="exampleModal1" tabindex="-1" role="dialog"
                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Edit
                                    Admin Profile</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form id="Addpackages" method="post" action="admin_admin.php">
                                    <div class="card-body">
                                        <div class="form-group">
                                            <label for="admin_id">Admin ID</label>
                                            <input type="text" name="id" class="form-control" id="idEdit"
                                                placeholder="Enter Admin ID" required disabled>
                                        </div>
                                        <div class="form-group">
                                            <label for="admin_name">Admin Name</label>
                                            <input type="text" name="name" class="form-control" id="admin_name"
                                                placeholder="Enter Admin Name" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="admin_username">Admin Username</label>
                                            <input type="text" name="username" class="form-control" id="admin_username"
                                                min="0" placeholder="Enter Admin id" required>
                                        </div>                                                                   
                                        <div class="form-group">
                                            <label for="package_price">Admin
                                                Password</label>
                                            <input type="text" name="password" class="form-control" id="admin_password"
                                                min="8" max="15"placeholder="Enter Admin Password" required>
                                        </div>                                        
                                        <div class="form-group">
                                            <label for="package_price">Admin
                                                Contact</label>
                                            <input type="text" name="contact" class="form-control" id="admin_contact"
                                                min="0" placeholder="Enter Admin Contact" required>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary"
                                                data-dismiss="modal">Close</button>
                                            <button type="submit" class="btn btn-primary" name="update">Save
                                                changes</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>                
            </section>
        </div>
    </div>

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
    <link rel="stylesheet" href="plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <script src="plugins/raphael/raphael.min.js"></script>
    <script src="plugins/jquery-mapael/jquery.mapael.min.js"></script>
    <script src="plugins/jquery-mapael/maps/usa_states.min.js"></script>
    <!-- ChartJS -->
    <script src="plugins/chart.js/Chart.min.js"></script>
    <script src="plugins/datatables/jquery.dataTables.min.js"></script>

    <!-- AdminLTE for demo purposes -->
    <script src="dist/js/demo.js"></script>
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <script src="dist/js/pages/dashboard2.js"></script>
    <script src="plugins/datatables/jquery.dataTables.min.js"></script>

    <!-- DataTables  & Plugins -->
    <script src="plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
    <!-- <script src="plugins/datatables-responsive/js/dataTables.responsive.min.js"></script> -->
    <script src="plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
    <script src="plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
    <script src="plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
    <script src="plugins/jszip/jszip.min.js"></script>
    <script src="plugins/pdfmake/pdfmake.min.js"></script>
    <script src="plugins/pdfmake/vfs_fonts.js"></script>
    <script src="plugins/datatables-buttons/js/buttons.html5.min.js"></script>
    <script src="plugins/datatables-buttons/js/buttons.print.min.js"></script>
    <script src="plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
    <script>
        $(function () {
            $("#example1").DataTable({
                "responsive": true, "lengthChange": false, "autoWidth": false,
                // "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
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
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <?php
    if(isset($_SESSION['status']) && $_SESSION['status'] != '')
        {
            ?>
    <script>
        Swal.fire({
            icon: "<?php  echo $_SESSION['status_code']; ?>",
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

        function editRow(id, user_id, name, username, password, contact) {

            document.getElementById('idEdit').value = user_id;
            document.getElementById('admin_name').value = name;
            document.getElementById('admin_username').value = username;
            document.getElementById('admin_password').value = password;
            document.getElementById('admin_contact').value = contact;
            for (var i = 0; i < eventSelect.options.length; i++) {
                if (eventSelect.options[i].value === eventType) {
                    eventSelect.selectedIndex = i;
                    break;
                }
            }
            $('#editModal').modal('show');
        }
        function deleteRow(delete_id, user_id) {
            if (confirm("Are you sure you want to delete this row with ID " + delete_id + " and user ID " + user_id + "?")) {

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
                xhr.send('delete_id=' + delete_id + '&user_id=' + user_id);
            }
        }
    </script>
</body>

</html>