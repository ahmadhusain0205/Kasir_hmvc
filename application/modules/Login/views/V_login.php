<div class="container">
    <?php
    if (isset($_GET['alert'])) {
        if ($_GET['alert'] == 'gagal') {
            echo "<div class='alert alert-danger font-weight-bold text-center'>Login Gagal</div>";
        } elseif ($_GET['alert'] == 'belum_login') {
            echo "<div class='alert alert-danger font-weight-bold text-center'>Silahkan Login terlebih dahulu</div>";
        } elseif ($_GET['alert'] == 'logout') {
            echo "<div class='alert alert-danger font-weight-bold text-center'>Anda telah Logout</div>";
        }
    }
    ?>
    <div class="row justify-content-center">
        <div class="col-lg-5">
            <br>
            <h1 class="text-center text-white"><i class="fas fa-shekel-sign"></i> RY <sup>POS</sup></h1>
            <div class="card o-hidden border-0 shadow-lg my-5">
                <div class="card-body p-0">
                    <div class="row">
                        <div class="col-lg">
                            <div class="p-5">
                                <div class="text-center">
                                    <h3 class="h4 text-gray-900 mb-4 text-primary">Login Page</h3>
                                </div>
                                <?= validation_errors(); ?>
                                <form class="user" method="POST" action="<?= base_url('login/login_aksi'); ?>" class="user">
                                    <div class="form-group">
                                        <label for="username">Username</label>
                                        <input type="text" name="username" id="username" class="form-control form-control" placeholder="Masukan Username">
                                        <input type="hidden" name="id" id="id" class="form-control form-control">
                                    </div>
                                    <div class="form-group">
                                        <label for="password">Password</label>
                                        <input type="password" name="password" id="password" class="form-control form-control" placeholder="Masukan Password">
                                    </div>
                                    <div class="form-group">
                                        <label for="sebagai">Login Sebagai : </label>
                                        <select name="sebagai" id="sebagai" class="form-control">
                                            <option value="admin">ADMIN</option>
                                            <option value="petugas">PETUGAS</option>
                                        </select>
                                    </div>
                                    <button type="submit" class="btn btn-primary btn btn-block">
                                        Login
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>