<body class="fixed-header dashboard">
    <!-- BEGIN SIDEBPANEL-->
    <nav class="page-sidebar" data-pages="sidebar">
        <!-- BEGIN SIDEBAR MENU TOP TRAY CONTENT-->

        <!-- END SIDEBAR MENU TOP TRAY CONTENT-->
        <!-- BEGIN SIDEBAR MENU HEADER-->
        <div class="sidebar-header">
            <!-- <h3 class="text-success font-weight-bold">TOPSIS</h3> -->
            <div class="sidebar-header-controls">
                <div class="row">
                    <h3 class="text-success font-weight-bold">TOPSIS</h3>
                    <button type="button" class="btn btn-link hidden-md-down" data-toggle-pin="sidebar"><i class="fa fs-12"></i>
                    </button>
                </div>
            </div>

        </div>
        </div>
        <!-- END SIDEBAR MENU HEADER-->
        <!-- START SIDEBAR MENU -->
        <div class="sidebar-menu">
            <!-- BEGIN SIDEBAR MENU ITEMS-->
            <ul class="menu m-3">
                <li class="m-t-20 ">
                    <a href="<?= base_url('admin/index'); ?>" class="detailed">
                        <span class="title">Dashboard</span>
                    </a>
                    <span class="bg-success icon-thumbnail"><i class="pg-home"></i></span>
                </li>
                <li class="m-t-30 ">
                    <a href="<?= base_url('admin/kriteria'); ?>" class="detailed">
                        <span class="title">Kriteria</span>
                    </a>
                </li>
                <li class="m-t-30 ">
                    <a href="<?= base_url('admin/alternatif'); ?>" class="detailed">
                        <span class="title">Alternatif</span>
                    </a>
                </li>
                <!-- <li class="m-t-30 ">
                    <div class="dropdown">
                        <a class="dropdown-toggle text-white" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Alternatif
                        </a>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item" href="<?= base_url('admin/alternatif'); ?>">Semua Bidang</a>
                            <a class="dropdown-item" href="#">Sortasi</a>
                            <a class="dropdown-item" href="#">Proses</a>
                            <a class="dropdown-item" href="#">Kantor</a>
                            <a class="dropdown-item" href="#">Supir</a>
                            <a class="dropdown-item" href="#">Loader</a>
                            <a class="dropdown-item" href="#">Excavator</a>
                            <a class="dropdown-item" href="#">Pengawas PU</a>
                            <a class="dropdown-item" href="#">Labor</a>
                            <a class="dropdown-item" href="#">Limbah</a>
                            <a class="dropdown-item" href="#">Security</a>
                            <a class="dropdown-item" href="#">Maintenance</a>
                        </div>
                    </div>
                </li> -->
                <li class="m-t-30 ">
                    <div class="dropdown">
                        <a class="dropdown-toggle text-white" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Proses Perhitungan
                        </a>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item" href="<?= base_url('admin/Proses'); ?>">Sortasi</a>
                            <a class="dropdown-item" href="<?= base_url('admin/proses_proses'); ?>">Proses</a>
                            <a class="dropdown-item" href="<?= base_url('admin/proses_kantor'); ?>">Kantor</a>
                            <a class="dropdown-item" href="<?= base_url('admin/proses_supir'); ?>">Supir</a>
                            <a class="dropdown-item" href="<?= base_url('admin/proses_loader'); ?>">Loader</a>
                            <a class="dropdown-item" href="<?= base_url('admin/proses_excavator'); ?>">Excavator</a>
                            <a class="dropdown-item" href="<?= base_url('admin/proses_pengawas_pu'); ?>">Pengawas PU</a>
                            <a class="dropdown-item" href="<?= base_url('admin/proses_labor'); ?>">Labor</a>
                            <a class="dropdown-item" href="<?= base_url('admin/proses_limbah'); ?>">Limbah</a>
                            <a class="dropdown-item" href="<?= base_url('admin/proses_security'); ?>">Security</a>
                            <a class="dropdown-item" href="<?= base_url('admin/proses_maintenance'); ?>">Maintenance</a>
                        </div>
                    </div>
                </li>

                <li class="m-t-30 ">
                    <a href="<?= base_url('admin/ubahPassword'); ?>" class="detailed">
                        <span class="title">Data Admin</span>
                    </a>
                </li>
                <li class="m-t-30 ">
                    <a href="<?= base_url('admin/logout'); ?>" class="detailed">
                        <span class="title">Logout</span>
                    </a>
                </li>
            </ul>
            <div class="clearfix"></div>
        </div>
        <!-- END SIDEBAR MENU -->
    </nav>
    <!-- END SIDEBAR -->
    <!-- END SIDEBPANEL-->
    <!-- START PAGE-CONTAINER -->
    <div class="page-container ">
        <!-- START HEADER -->
        <div class="header ">
            <!-- START MOBILE SIDEBAR TOGGLE -->
            <a href="#" class="btn-link toggle-sidebar hidden-lg-up pg pg-menu" data-toggle="sidebar">
            </a>
            <!-- END MOBILE SIDEBAR TOGGLE -->

            <div class="">
                <div class="brand inline mr-lg-8">
                    <!-- <h4>SISTEM PENILAIAN KINERJA KARYAWAN PADA PT.IBAS ACEH UTARA </h4> -->
                </div>
                <!-- START NOTIFICATION LIST -->
                <ul class="hidden-md-down notification-list no-margin hidden-sm-down b-grey b-l b-r no-style p-l-30 p-r-20">


                </ul>
                <!-- END NOTIFICATIONS LIST -->

            </div>
            <div class="d-flex align-items-center">
                <!-- START User Info-->
                <div class="pull-left p-r-10 fs-14 font-heading hidden-md-down">
                    <span class="semi-bold">NayaSherina</span>
                </div>
                <div class="dropdown pull-right hidden-md-down">
                    <button class="profile-dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <span class="thumbnail-wrapper d32 circular inline">
                            <img src="<?= base_url('assets/'); ?>img/user.jpg" alt="" data-src="" data-src-retina=" width="32" height="32">
                        </span>
                    </button>
                    <div class="dropdown-menu dropdown-menu-right profile-dropdown" role="menu">
                        <a href="#" class="clearfix bg-master-lighter dropdown-item">
                            <span class="pull-left">Logout</span>
                        </a>
                    </div>

                </div>
                <!-- END User Info-->

            </div>
        </div>
        <!-- END HEADER -->