<?php
include "../connection.php";
$qdata = mysqli_query($con, "select *from datapeserta");
?>


<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <title>Biodata Mentor</title>

    <!-- Custom fonts for this template -->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

    <!-- Custom styles for this page -->
    <link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="./index.php">
                <div class="sidebar-brand-icon">
                    <i class="fas fa-laugh-wink"></i>
                </div>
                <div class="sidebar-brand-text mx-3">Lozi Management</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0" />

            <!-- Nav Item - Dashboard -->
            <li class="nav-item">
                <a class="nav-link" href="index.php">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider my-0" />

            <li class="nav-item">
                <a class="nav-link" href="datapeserta.php">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Data Peserta</span></a>
            </li>

            <hr class="sidebar-divider my-0" />

            <li class="nav-item">
                <a class="nav-link" href="validasi.php">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Validasi Peserta</span></a>
            </li>

          
            <li class="nav-item">
                <a class="nav-link" href="testimoni.php">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Testimoni</span></a>
            </li>

            <li class="nav-item active">
                <a class="nav-link" href="about.php">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>About</span></a>
            </li>



            <hr class="sidebar-divider" />


        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <form class="form-inline">
                        <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                            <i class="fa fa-bars"></i>
                        </button>
                    </form>

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">adminalia</span>
                                <img class="img-profile rounded-circle" src="img/undraw_profile.svg">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Page Heading -->
                <div class=" text-center ">
                    <h1 class="h3 mb-2 text-gray-800">Biodata Mentor Private Class Lozi Management</h1>
                </div>
                <!-- Page Heading -->
                <style>
                    body {
                        background-color: #e8e8e8;
                    }

                    .kartu {
                        width: 800px;
                        height: 500px;
                        margin: 0 auto;
                        margin-top: 70px;
                        box-shadow: 0 0.25rem 0.75rem rgba(0, 0, 0, .03);
                        transition: all .3s;
                        background: linear-gradient(132.02deg, #6373E5 0%, #8454A8 105.79%);
                        border: solid 8px #6373E5;
                        border-top-right-radius: 80px;
                        border-bottom-left-radius: 80px;
                    }

                    .kartu:hover {
                        background-color: #6373E5;
                        border: solid 8px linear-gradient(132.02deg, #6373E5 0%, #8454A8 105.79%);
                        border-top-left-radius: 80px;
                        border-bottom-right-radius: 80px;
                        border-top-right-radius: 0px;
                        border-bottom-left-radius: 0px;
                    }

                    .foto {
                        padding: 20px;
                        margin-left: 30px;
                        margin-top: 10px;
                    }

                    tbody {
                        font-size: 20px;
                        font-weight: 300;
                        color: white;
                    }

                    .biodata {
                        margin-top: 30px;
                    }
                </style>
                </head>

                <body>

                    <div class="container">
                        <div class="card kartu">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="foto">
                                        <div class=" text-center ">
                                            <img src="../assets/img/loli.jpeg " class="img-thumbnail" alt="" width="150" height="auto">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-8 kertas-biodata">
                                    <div class="biodata">
                                        <table width="100%" border="0">
                                            <tbody>
                                                <tr>
                                                    <td valign="top">
                                                        <table border="0" width="100%" style="padding-left: 2px; padding-right: 13px;">
                                                            <tbody>
                                                                <tr>
                                                                    <td width="25%" valign="top" class="textt">Nama</td>
                                                                    <td width="2%">:</td>
                                                                    <td style=" font-weight:bold">Loli Tamara Putri</td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="textt">Jenis Kelamin</td>
                                                                    <td>:</td>
                                                                    <td>Perempuan</td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="textt">Tempat Lahir</td>
                                                                    <td>:</td>
                                                                    <td>Cilegon, Banten</td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="textt">Tanggal Lahir</td>
                                                                    <td>:</td>
                                                                    <td>26 Juli 1996</td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="textt">Pekerjaan</td>
                                                                    <td>:</td>
                                                                    <td>Owner Lozi Management</td>
                                                                </tr>
                                                                <tr>
                                                                    <td valign="top" class="textt">Jabatan</td>
                                                                    <td valign="top">:</td>
                                                                    <td>Mentor Private Class</td>
                                                                </tr>
                                                                <tr>
                                                                    <td valign="top" class="textt">Instagram</td>
                                                                    <td valign="top">:</td>
                                                                    <td>lolitamarap</td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <script src="js/bootstrap.min.js"></script>

                    <!-- Footer -->
                    <footer class="sticky-footer bg-white">
                        <div class="container my-auto">
                            <div class="copyright text-center my-auto">
                                <span>Copyright &copy; 2023 AlfinaWiwit</span>
                            </div>
                        </div>
                    </footer>
                    <!-- End of Footer -->

            </div>
            <!-- End of Content Wrapper -->

        </div>
        <!-- End of Page Wrapper -->

        <!-- Scroll to Top Button-->
        <a class="scroll-to-top rounded" href="#page-top">
            <i class="fas fa-angle-up"></i>
        </a>

        <!-- Logout Modal-->
        <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Konfirmasi Logout</h5>
                        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <div class="modal-body">Anda yakin akan logout?</div>
                    <div class="modal-footer">
                        <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                        <a class="btn btn-primary" href="login1admin.php">Logout</a>
                    </div>
                </div>
            </div>
        </div>



        <!-- Bootstrap core JavaScript-->
        <script src="vendor/jquery/jquery.min.js"></script>
        <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

        <!-- Core plugin JavaScript-->
        <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

        <!-- Custom scripts for all pages-->
        <script src="js/sb-admin-2.min.js"></script>

        <!-- Page level plugins -->
        <script src="vendor/datatables/jquery.dataTables.min.js"></script>
        <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

        <!-- Page level custom scripts -->
        <script src="js/demo/datatables-demo.js"></script>
        

</body>

</html>