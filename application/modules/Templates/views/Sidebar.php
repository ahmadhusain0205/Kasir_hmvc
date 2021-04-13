<body id="page-top">
    <div id="wrapper">
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion fixed" id="accordionSidebar">
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
                <div class="sidebar-brand-icon">
                    <i class="fas fa-shekel-sign"></i>
                </div>
                <div class="sidebar-brand-text mx-3">RY <sup>POS</sup></div>
            </a>
            <hr class="sidebar-divider my-0">
            <?php
                if ($this->uri->segment('1') == 'Beranda') {
                    echo "<li class='nav-item active'>";
                } else {
                    echo "<li class='nav-item'>";
                }
            ?>
                <a class="nav-link" href="<?= base_url('Beranda');?>">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Beranda</span>
                </a>
            </li>
            <?php
    if ($this->session->userdata('sebagai') == 'Administrator') {
        echo "<hr class='sidebar-divider my-0'>";
        if ($this->uri->segment('1') == 'Admin' && $this->uri->segment('2') == '') {
            echo "<li class='nav-item active'>";
        } else if ($this->uri->segment('1') == 'Petugas' && $this->uri->segment('2') == '') {
            echo "<li class='nav-item active'>";
        } else if ($this->uri->segment('1') == 'Profile' && $this->uri->segment('2') == '') {
            echo "<li class='nav-item active'>";
        } else {
            echo "<li class='nav-item'>";
        }
        echo "
            <a class='nav-link collapsed' href='#' data-toggle='collapse' data-target='#collapseUser' aria-expanded='true' aria-controls='collapseUser'>
                <i class='fas fa-fw fa-user-cog'></i>
                <span>Pengelola</span>
            </a>
            <div id='collapseUser' class='collapse' aria-labelledby='headingPages' data-parent='#accordionSidebar'>
                <div class='bg-white py-2 collapse-inner rounded'>
                    <a class='collapse-item' href='";
                        echo base_url('Admin');
                        echo "'>Admin
                    </a>
                    <a class='collapse-item' href='";
                        echo base_url('Petugas');
                        echo "'>Petugas
                    </a>
                </div>
            </div>
        </li>";
    }
    ?>
            <hr class="sidebar-divider my-0">
            <?php
                if ($this->uri->segment('1') == 'Suplier') {
                    echo "<li class='nav-item active'>";
                } else {
                    echo "<li class='nav-item'>";
                }
            ?>
                <a class="nav-link" href="<?= base_url('Suplier');?>">
                    <i class="fas fa-fw fa-truck"></i>
                    <span>Suplier</span>
                </a>
            </li>
            <hr class="sidebar-divider my-0">
            <?php
                if ($this->uri->segment('1') == 'Pelanggan') {
                    echo "<li class='nav-item active'>";
                } else {
                    echo "<li class='nav-item'>";
                }
            ?>
                <a class="nav-link" href="<?= base_url('Pelanggan');?>">
                    <i class="fas fa-fw fa-users"></i>
                    <span>Pelanggan</span>
                </a>
            </li>
            <hr class="sidebar-divider my-0">
            <?php
                if ($this->uri->segment('1') == 'Kategori' && $this->uri->segment('2') == '') {
                    echo "<li class='nav-item active'>";
                } else if ($this->uri->segment('1') == 'Unit' && $this->uri->segment('2') == '') {
                    echo "<li class='nav-item active'>";
                } else if ($this->uri->segment('1') == 'Barang' && $this->uri->segment('2') == '') {
                    echo "<li class='nav-item active'>";
                } else {
                    echo "<li class='nav-item'>";
                }
            ?>
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-fw fa-archive"></i>
                    <span>Produk</span>
                </a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="<?= base_url('Kategori');?>">Kategori</a>
                        <a class="collapse-item" href="<?= base_url('Unit');?>">Unit</a>
                        <a class="collapse-item" href="<?= base_url('Barang');?>">Barang</a>
                    </div>
                </div>
            </li>
            <hr class="sidebar-divider my-0">
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
                    <i class="fas fa-fw fa-dolly-flatbed"></i>
                    <span>Transaksi</span>
                </a>
                <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="<?= base_url('Sales');?>">Sales</a>
                        <a class="collapse-item" href="<?= base_url('StokMasuk');?>">Stok Masuk</a>
                        <a class="collapse-item" href="<?= base_url('StokKeluar');?>">Stok Keluar</a>
                    </div>
                </div>
            </li>
            <hr class="sidebar-divider my-0">
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#Laporan">
                    <i class="fas fa-fw fa-chart-line"></i>
                    <span>Laporan</span>
                </a>
                <div id="Laporan" class="collapse" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="<?= base_url('Sales');?>">Sales</a>
                        <a class="collapse-item" href="<?= base_url('Stok');?>">Stok</a>
                    </div>
                </div>
            </li>
            <hr class="sidebar-divider d-none d-md-block">
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>
            <span class="text-center text-white mt-5">V1.0</span>
        </ul>
