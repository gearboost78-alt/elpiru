<?php
include 'auth.php';
cek_login();
?>
<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="dashboard/assets/images/elpiru.png">
    <title>El Piru</title>
    <!-- This page plugin CSS -->
    <!-- <link href="dashboard/assets/extra-libs/datatables.net-bs4/css/dataTables.bootstrap4.css" rel="stylesheet"> -->
    <link rel="stylesheet" href="dashboard/assets/extra-libs/datatables.net-bs4/css/dataTables.bootstrap4.css">
    <link rel="stylesheet" href="dashboard/assets/extra-libs/datatables.net-bs4/css/responsive.dataTables.min.css">
    <!-- Custom CSS -->
    <link href="dashboard/dist/css/style.min.css" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
</head>

<body>
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
        <div class="lds-ripple">
            <div class="lds-pos"></div>
            <div class="lds-pos"></div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper" data-theme="light" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full" data-sidebar-position="fixed" data-header-position="fixed" data-boxed-layout="full">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <header class="topbar" data-navbarbg="skin6">
            <nav class="navbar top-navbar navbar-expand-lg">
                <div class="navbar-header" data-logobg="skin6">
                    <!-- This is for the sidebar toggle which is visible on mobile only -->
                    <a class="nav-toggler waves-effect waves-light d-block d-lg-none" href="javascript:void(0)"><i
                            class="ti-menu ti-close"></i></a>
                    <!-- ============================================================== -->
                    <!-- Logo -->
                    <!-- ============================================================== -->
                     <div class="navbar-brand d-flex align-items-center">
                        <!-- Logo icon -->
                        <a href="dashboard.php" class="d-flex align-items-center text-decoration-none">
                            <img src="dashboard/assets/images/elpiru.png" 
                                alt="Logo" 
                                class="img-fluid me-2" 
                                style="width:30px; height:auto;">
                            <span class="fw-bold text-dark">Lapas Piru</span>
                        </a>
                    </div>
                    <!-- ============================================================== -->
                    <!-- End Logo -->
                    <!-- ============================================================== -->
                    <!-- ============================================================== -->
                    <!-- Toggle which is visible on mobile only -->
                    <!-- ============================================================== -->
                    <a class="topbartoggler d-block d-lg-none waves-effect waves-light" href="javascript:void(0)"
                        data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
                        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><i
                            class="ti-more"></i></a>
                </div>
                <!-- ============================================================== -->
                <!-- End Logo -->
                <!-- ============================================================== -->
                <div class="navbar-collapse collapse" id="navbarSupportedContent">
                    <!-- ============================================================== -->
                    <!-- toggle and nav items -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav float-left me-auto ms-3 ps-1">
                        <!-- Notification -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle pl-md-3 position-relative" href="javascript:void(0)"
                                id="bell" role="button" data-bs-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="false">
                                <span><i data-feather="bell" class="svg-icon"></i></span>
                                <span class="badge text-bg-primary notify-no rounded-circle">5</span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-left mailbox animated bounceInDown">
                                <ul class="list-style-none">
                                    <li>
                                        <div class="message-center notifications position-relative">
                                            <!-- Message -->
                                            <a href="javascript:void(0)"
                                                class="message-item d-flex align-items-center border-bottom px-3 py-2">
                                                <div class="btn btn-danger rounded-circle btn-circle"><i
                                                        data-feather="airplay" class="text-white"></i></div>
                                                <div class="w-75 d-inline-block v-middle ps-2">
                                                    <h6 class="message-title mb-0 mt-1">Luanch Admin</h6>
                                                    <span class="font-12 text-nowrap d-block text-muted">Just see
                                                        the my new
                                                        admin!</span>
                                                    <span class="font-12 text-nowrap d-block text-muted">9:30 AM</span>
                                                </div>
                                            </a>
                                            <!-- Message -->
                                            <a href="javascript:void(0)"
                                                class="message-item d-flex align-items-center border-bottom px-3 py-2">
                                                <span class="btn btn-success text-white rounded-circle btn-circle"><i
                                                        data-feather="calendar" class="text-white"></i></span>
                                                <div class="w-75 d-inline-block v-middle ps-2">
                                                    <h6 class="message-title mb-0 mt-1">Event today</h6>
                                                    <span
                                                        class="font-12 text-nowrap d-block text-muted text-truncate">Just
                                                        a reminder that you have event</span>
                                                    <span class="font-12 text-nowrap d-block text-muted">9:10 AM</span>
                                                </div>
                                            </a>
                                            <!-- Message -->
                                            <a href="javascript:void(0)"
                                                class="message-item d-flex align-items-center border-bottom px-3 py-2">
                                                <span class="btn btn-info rounded-circle btn-circle"><i
                                                        data-feather="settings" class="text-white"></i></span>
                                                <div class="w-75 d-inline-block v-middle ps-2">
                                                    <h6 class="message-title mb-0 mt-1">Settings</h6>
                                                    <span
                                                        class="font-12 text-nowrap d-block text-muted text-truncate">You
                                                        can customize this template
                                                        as you want</span>
                                                    <span class="font-12 text-nowrap d-block text-muted">9:08 AM</span>
                                                </div>
                                            </a>
                                            <!-- Message -->
                                            <a href="javascript:void(0)"
                                                class="message-item d-flex align-items-center border-bottom px-3 py-2">
                                                <span class="btn btn-primary rounded-circle btn-circle"><i
                                                        data-feather="box" class="text-white"></i></span>
                                                <div class="w-75 d-inline-block v-middle ps-2">
                                                    <h6 class="message-title mb-0 mt-1">Pavan kumar</h6> <span
                                                        class="font-12 text-nowrap d-block text-muted">Just
                                                        see the my admin!</span>
                                                    <span class="font-12 text-nowrap d-block text-muted">9:02 AM</span>
                                                </div>
                                            </a>
                                        </div>
                                    </li>
                                    <li>
                                        <a class="nav-link pt-3 text-center text-dark" href="javascript:void(0);">
                                            <strong>Check all notifications</strong>
                                            <i class="fa fa-angle-right"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <!-- End Notification -->
                    </ul>
                    <!-- ============================================================== -->
                    <!-- Right side toggle and nav items -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav float-end">
                        <!-- ============================================================== -->
                        <!-- User profile and search -->
                        <!-- ============================================================== -->
                        <?php
                            // Ambil data dari session
                            $nama_petugas = $_SESSION['nama_petugas'] ?? 'Petugas';
                            $foto_petugas = $_SESSION['foto_petugas'] ?? 'default.jpg'; // fallback kalau kosong
                            ?>

                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="javascript:void(0)" data-bs-toggle="dropdown"
                                    aria-haspopup="true" aria-expanded="false">
                                    <img src="uploads/petugas/<?php echo $foto_petugas; ?>" 
                                        alt="user" 
                                        class="rounded-circle" 
                                        width="40">
                                    <span class="ms-2 d-none d-lg-inline-block">
                                        <span>Hello,</span> 
                                        <span class="text-dark"><?php echo htmlspecialchars($nama_petugas); ?></span> 
                                        <i data-feather="chevron-down" class="svg-icon"></i>
                                    </span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-end dropdown-menu-right user-dd animated flipInY">
                                    <a class="dropdown-item" href="profile.php">
                                        <i data-feather="user" class="svg-icon me-2 ms-1"></i>
                                        My Profile
                                    </a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="account_setting.php">
                                        <i data-feather="settings" class="svg-icon me-2 ms-1"></i>
                                        Account Setting
                                    </a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="logout.php">
                                        <i data-feather="power" class="svg-icon me-2 ms-1"></i>
                                        Logout
                                    </a>
                                    <div class="dropdown-divider"></div>
                                </div>
                            </li>
                        <!-- ============================================================== -->
                        <!-- User profile and search -->
                        <!-- ============================================================== -->
                    </ul>
                </div>
            </nav>
        </header>
        <!-- ============================================================== -->
        <!-- End Topbar header -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <aside class="left-sidebar" data-sidebarbg="skin6">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar" data-sidebarbg="skin6">
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                        <li class="sidebar-item"> <a class="sidebar-link sidebar-link" href="dashboard.php"
                                aria-expanded="false"><i data-feather="home" class="feather-icon"></i><span
                                    class="hide-menu">Dashboard</span></a></li>
                        <li class="list-divider"></li>
                        <li class="nav-small-cap"><span class="hide-menu">Pengguna</span></li>

                        <li class="sidebar-item"> <a class="sidebar-link" href="daftarpetugas.php"
                                aria-expanded="false"><i data-feather="tag" class="feather-icon"></i><span
                                    class="hide-menu">Daftar Petugas
                                </span></a>
                        </li>
                        <li class="sidebar-item"> <a class="sidebar-link sidebar-link" href="daftarnarapidana.php"
                                aria-expanded="false"><i data-feather="message-square" class="feather-icon"></i><span
                                    class="hide-menu">Daftar Narapidana</span></a>
                        </li>
                        <li class="list-divider"></li>
                        <li class="nav-small-cap"><span class="hide-menu">Aplikasi</span></li>
                        <li class="sidebar-item"> <a class="sidebar-link sidebar-link" href="absensi.php"
                                aria-expanded="false"><i data-feather="lock" class="feather-icon"></i><span
                                    class="hide-menu">Absensi
                                </span></a>
                        </li>
                        <li class="sidebar-item"> <a class="sidebar-link sidebar-link"
                                href="laporan.php" aria-expanded="false"><i data-feather="lock"
                                    class="feather-icon"></i><span class="hide-menu">Laporan
                                </span></a>
                        </li>
                    </ul>
                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </aside>
        <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-7 align-self-center">
                        <h4 class="page-title text-truncate text-dark font-weight-medium mb-1">Daftar Absensi</h4>
                        <div class="d-flex align-items-center">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb m-0 p-0">
                                    <li class="breadcrumb-item"><a href="index.html" class="text-muted">Dashboard</a></li>
                                    <li class="breadcrumb-item text-muted active" aria-current="page">Daftar Absensi</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- End Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                <!-- basic table -->
                 <a href="tambahabsensi.php" class="btn btn-sm btn-primary me-3">+ Tambah Absensi</a>
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Daftar Absensi Keluar Masuk</h4>
                                <div class="table-responsive">
                                    <?php
                                    include 'koneksi.php';

                                    // Ambil data absensi napi join dengan tabel napi
                                    $sql = "
                                        SELECT absensi_keluar_masuk.id_absensi, napi.nama_lengkap, absensi_keluar_masuk.tanggal_waktu, 
                                            absensi_keluar_masuk.jenis_absensi, absensi_keluar_masuk.alasan, absensi_keluar_masuk.keterangan
                                        FROM absensi_keluar_masuk
                                        INNER JOIN napi ON absensi_keluar_masuk.id_napi = napi.id_napi
                                        ORDER BY absensi_keluar_masuk.tanggal_waktu DESC
                                    ";
                                    $result = mysqli_query($koneksi, $sql);
                                    ?>
                                    <table id="zero_config" class="table border table-striped table-bordered text-nowrap">
                                        <thead>
                                            <tr>
                                                <th>Nama Narapidana</th>
                                                <th>Tanggal & Waktu</th>
                                                <th>Jenis Absensi</th>
                                                <th>Alasan</th>
                                                <th>Keterangan</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php while ($row = mysqli_fetch_assoc($result)): ?>
                                            <?php 
                                                // Filter: lewati data jika jenis_absensi = Masuk atau waktu_masuk sudah ada
                                                if ($row['jenis_absensi'] == 'Masuk' || !empty($row['waktu_masuk'])) {
                                                    continue; // skip baris ini
                                                }
                                        ?>
                                        <tr>
                                            <td>
                                                <div class="d-flex px-2 py-1">

                                                    <div class="d-flex flex-column justify-content-center">
                                                        <h6 class="mb-0 text-sm"><?php echo htmlspecialchars($row['nama_lengkap']); ?></h6>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <p class="text-xs font-weight-bold mb-0"><?php echo date('d/m/Y H:i', strtotime($row['tanggal_waktu'])); ?></p>
                                            </td>
                                            <td>
                                                <?php if ($row['jenis_absensi'] == 'Masuk'): ?>
                                                    <span class="badge badge-sm bg-gradient-success">Masuk</span>
                                                <?php else: ?>
                                                    <span class="badge badge-sm bg-gradient-danger">Keluar</span>
                                                <?php endif; ?>
                                            </td>
                                            <td>
                                                <p class="text-xs text-secondary mb-0"><?php echo htmlspecialchars($row['alasan']); ?></p>
                                            </td>
                                            <td>
                                                <p class="text-xs text-secondary mb-0"><?php echo htmlspecialchars($row['keterangan']); ?></p>
                                            </td>
                                            <td>
                                                <button type="button" class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#editModal<?php echo $row['id_absensi']; ?>">
                                                Edit
                                                </button>
                                            </td>
                                            <!-- Modal Edit Absensi -->
                                            <div class="modal fade" id="editModal<?php echo $row['id_absensi']; ?>" tabindex="-1" aria-labelledby="editModalLabel<?php echo $row['id_absensi']; ?>" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                <form action="proseseditabsensi.php" method="POST">
                                                    <div class="modal-header">
                                                    <h5 class="modal-title" id="editModalLabel<?php echo $row['id_absensi']; ?>">Edit Absensi</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                    <input type="hidden" name="id_absensi" value="<?php echo $row['id_absensi']; ?>">

                                                    <div class="mb-3">
                                                        <label for="jenis_absensi<?php echo $row['id_absensi']; ?>" class="form-label">Jenis Absensi</label>
                                                        <select class="form-select" name="jenis_absensi" id="jenis_absensi<?php echo $row['id_absensi']; ?>" required>
                                                        <option value="Masuk" <?php if ($row['jenis_absensi'] == 'Masuk') echo 'selected'; ?>>Masuk</option>
                                                        <option value="Keluar" <?php if ($row['jenis_absensi'] == 'Keluar') echo 'selected'; ?>>Keluar</option>
                                                        </select>
                                                    </div>

                                                    <div class="mb-3">
                                                        <label for="tanggal_waktu<?php echo $row['id_absensi']; ?>" class="form-label">Tanggal & Waktu (Keluar)</label>
                                                        <input type="datetime-local" class="form-control" name="tanggal_waktu" id="tanggal_waktu<?php echo $row['id_absensi']; ?>"
                                                        value="<?php echo date('Y-m-d\TH:i', strtotime($row['tanggal_waktu'])); ?>" required>
                                                    </div>

                                                    <div class="mb-3">
                                                        <label for="waktu_masuk<?php echo $row['id_absensi']; ?>" class="form-label">Waktu Masuk</label>
                                                        <input type="datetime-local" class="form-control" name="waktu_masuk" id="waktu_masuk<?php echo $row['id_absensi']; ?>"
                                                        value="<?php echo !empty($row['waktu_masuk']) ? date('Y-m-d\TH:i', strtotime($row['waktu_masuk'])) : ''; ?>">
                                                    </div>

                                                    <div class="mb-3">
                                                        <label for="alasan<?php echo $row['id_absensi']; ?>" class="form-label">Alasan</label>
                                                        <input type="text" class="form-control" name="alasan" id="alasan<?php echo $row['id_absensi']; ?>" value="<?php echo htmlspecialchars($row['alasan']); ?>">
                                                    </div>

                                                    <div class="mb-3">
                                                        <label for="keterangan<?php echo $row['id_absensi']; ?>" class="form-label">Keterangan</label>
                                                        <textarea class="form-control" name="keterangan" id="keterangan<?php echo $row['id_absensi']; ?>" rows="3"><?php echo htmlspecialchars($row['keterangan']); ?></textarea>
                                                    </div>

                                                    </div>
                                                    <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                                                    <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                                                    </div>
                                                </form>
                                                </div>
                                            </div>
                                            </div>
                                        </tr>
                                        <?php endwhile; ?>
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <th>Nama Narapidana</th>
                                                <th>Tanggal & Waktu</th>
                                                <th>Jenis Absensi</th>
                                                <th>Alasan</th>
                                                <th>Keterangan</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- End PAge Content -->
                <!-- ============================================================== -->
            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Page wrapper  -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="dashboard/assets/libs/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="dashboard/assets/libs/popper.js/dist/umd/popper.min.js"></script>
    <script src="dashboard/assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <!-- apps -->
    <!-- apps -->
    <script src="dashboard/dist/js/app-style-switcher.js"></script>
    <script src="dashboard/dist/js/feather.min.js"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="dashboard/assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js"></script>
    <script src="dashboard/assets/extra-libs/sparkline/sparkline.js"></script>
    <!--Wave Effects -->
    <!-- themejs -->
    <!--Menu sidebar -->
    <script src="dashboard/dist/js/sidebarmenu.js"></script>
    <!--Custom JavaScript -->
    <script src="dashboard/dist/js/custom.min.js"></script>
    <!--This page plugins -->
    <script src="dashboard/assets/extra-libs/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="dashboard/assets/extra-libs/datatables.net-bs4/js/dataTables.responsive.min.js"></script>
    <script src="dashboard/dist/js/pages/datatable/datatable-basic.init.js"></script>
</body>

</html>    