<div id="content-wrapper" class="d-flex flex-column">
    <div id="content">
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
            <button class="btn btn-primary" type="button">
                <?= $this->session->userdata('sebagai');?>
            </button>
            <ul class="navbar-nav ml-auto">            
                <li class="nav-item dropdown no-arrow m-auto font-weight-bold text-primary">
                    <span id="jamServer"><?php echo date("H:i:s");?></span>
                </li>
                <?php
                if($this->session->userdata('status') == 'admin_login'){
                    echo "<div class='topbar-divider d-none d-sm-block'></div>";
                    echo "<li class='nav-item dropdown no-arrow mx-1'><a href='";
                    echo base_url('Notif');
                    echo "
                        ' class='nav-link dropdown-toggle' onclick='reset' type='reset' id='alertsDropdown' role='button'>
                        <i class='fas fa-bell fa-fw'></i>
                        <span class='badge badge-danger badge-counter'>";
                    echo $this->M_admin->get_data('admin')->num_rows();
                    echo "</span></a></li>";
                }
                ?>
                <div class="topbar-divider d-none d-sm-block"></div>
                <li class="nav-item dropdown no-arrow">
                    <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <b>
                            <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?= strtoupper($this->session->userdata('name')); ?></span>
                            <i class="fas fa-user"></i>
                        </b>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                        <a class="dropdown-item" href="<?= base_url('Profile');?>">
                            <i class='fas fa-user fa-sm fa-fw mr-2 text-gray-400'></i> My Profile
                        </a>
                        <?php
                        if($this->session->userdata('sebagai') == 'Administrator'){
                            echo "<div class='dropdown-divider'></div><a class='dropdown-item' href='";
                            echo base_url('Log');
                            echo "'><i class='fas fa-user-clock fa-sm fa-fw mr-2 text-gray-400'></i> Aktif Log Petugas </a>";
                        }
                        ?>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                            <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i> Keluar
                        </a>
                    </div>
                </li>
          </ul>
        </nav>

