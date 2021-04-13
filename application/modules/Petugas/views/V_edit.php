<div class="container-fluid">
    <div class="container">
        <div class="row justify-content-md-center">
            <div class="col-md-5">
                <?= $this->session->flashdata('pesan'); ?>
                <div class="card shadow mb-4">
                    <div class="card-header text-center m-0 text-primary">
                        <h4><?= $judul; ?></h4>
                    </div>
                    <div class="card-body">
                        <form action="<?= base_url('admin/password_aksi'); ?>" method="POST" class="user">
                            <div class="form-group">
                                <label for="password_baru" class="font-weight-bold">Password Baru</label>
                                <input type="password" class="form-control" name="password_baru" placeholder="Masukan Password Baru">
                                <?= validation_errors(); ?>
                            </div>
                            <div class="form-group">
                                <label for="password_ulang" class="font-weight-bold">Ulangi Password</label>
                                <input type="password" class="form-control" name="password_ulang" placeholder="Ulangi Password Baru">
                                <?= validation_errors(); ?>
                            </div>
                            <input type="submit" class="btn btn-primary btn-user btn-block" value="Simpan">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>