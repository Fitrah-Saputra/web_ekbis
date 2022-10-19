<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Admin - Dashboard</title>

    <!-- Custom fonts for this template-->
    <link href="/startbootstrap/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="/startbootstrap/css/sb-admin-2.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="/admin">
                <div class="sidebar-brand-icon">
                    <i class="fas fa-user ml-3"></i>
                </div>
                <div class="sidebar-brand-text mx-3">Administrator</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#dosen" aria-expanded="true" aria-controls="dosen">
                    <i class="fas fa-fw fa-folder"></i>
                    <span>Dosen</span>
                </a>
                <div id="dosen" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Data Dosen:</h6>
                        <a href="/admin/dosen/1" class="collapse-item">Agribisnis Pangan</a>
                        <a href="/admin/dosen/2" class="collapse-item">Pengelolaan Agribisnis</a>
                        <a href="/admin/dosen/3" class="collapse-item">Akuntansi Bisnis Digital</a>
                        <a href="/admin/dosen/4" class="collapse-item">Agribisnis</a>
                        <a href="/admin/dosen/5" class="collapse-item">Akuntansi Perpajakan</a>
                        <a href="/admin/dosen/6" class="collapse-item">Akuntansi</a>
                        <a href="/admin/dosen/7" class="collapse-item">Manajemen Informatika</a>
                        <a href="/admin/dosen/8" class="collapse-item">Perjalanan Wisata</a>
                        <a href="/admin/dosen/9" class="collapse-item">Pengelolaan Perhotelan</a>
                        <a href="/admin/dosen/10" class="collapse-item">Administrasi Perpajakan</a>
                    </div>
                </div>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#matkul" aria-expanded="true" aria-controls="matkul">
                    <i class="fas fa-fw fa-folder"></i>
                    <span>Matakuliah</span>
                </a>
                <div id="matkul" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Data Matkul:</h6>
                        <a href="/admin/matkul/1" class="collapse-item">Agribisnis Pangan</a>
                        <a href="/admin/matkul/2" class="collapse-item">Pengelolaan Agribisnis</a>
                        <a href="/admin/matkul/3" class="collapse-item">Akuntansi Bisnis Digital</a>
                        <a href="/admin/matkul/4" class="collapse-item">Agribisnis</a>
                        <a href="/admin/matkul/5" class="collapse-item">Akuntansi Perpajakan</a>
                        <a href="/admin/matkul/6" class="collapse-item">Akuntansi</a>
                        <a href="/admin/matkul/7" class="collapse-item">Manajemen Informatika</a>
                        <a href="/admin/matkul/8" class="collapse-item">Perjalanan Wisata</a>
                        <a href="/admin/matkul/9" class="collapse-item">Pengelolaan Perhotelan</a>
                        <a href="/admin/matkul/10" class="collapse-item">Administrasi Perpajakan</a>
                    </div>
                </div>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>
                        </li>

                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?= $username; ?></span>
                                <img class="img-profile rounded-circle" src="/startbootstrap/img/undraw_profile.svg">
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

                <?= $this->renderSection('content'); ?>

                <!-- Footer -->
                <footer class="sticky-footer bg-white">
                    <div class="container my-auto">
                        <div class="copyright text-center my-auto">
                            <span>Copyright &copy; All Rights Reserved 2022</span>
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
                        <h5 class="modal-title" id="exampleModalLabel">Yakin ingin logout?</h5>
                        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <div class="modal-body">Click "Logout" jika kamu ingin keluar.</div>
                    <div class="modal-footer">
                        <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                        <a class="btn btn-primary" href="/login/logout">Logout</a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Bootstrap core JavaScript-->
        <script src="/startbootstrap/vendor/jquery/jquery.min.js"></script>
        <script src="/startbootstrap/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"></script>

        <!-- Core plugin JavaScript-->
        <script src="/startbootstrap/vendor/jquery-easing/jquery.easing.min.js"></script>

        <!-- Custom scripts for all pages-->
        <script src="/startbootstrap/js/sb-admin-2.min.js"></script>

        <!-- Page level plugins -->
        <script src="/startbootstrap/vendor/chart.js/Chart.min.js"></script>

        <!-- Page level custom scripts -->
        <script src="/startbootstrap/js/demo/chart-area-demo.js"></script>
        <script src="/startbootstrap/js/demo/chart-pie-demo.js"></script>

</body>

</html>