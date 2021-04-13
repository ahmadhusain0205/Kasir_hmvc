<div class="container-fluid">
    <div class="card">
        <div class="card-body shadow">
            <h4 class="font-weight-bold text-primary"><?= strtoupper($judul);?>
            </h4>
        </div>
    </div>
    <div class="card shadow mb-4 mt-4">
        <div class="card-body">
            <?php foreach ($profile as $pr) : ?>
                <form>
                    <div class="row">
                        <div class="col m-auto text-center">
                            <?php
                            if($this->session->userdata('status') == 'admin_login'){
                                echo "
                                <img src='";
                                echo base_url('assets/img/profile/default.png');
                                echo "' style='width: 15rem;'>
                                ";
                            } else {
                                echo "
                                <img src='";
                                echo base_url('assets/img/profile/user.jpg');
                                echo "' style='width: 12rem;'>
                                ";
                            }
                            ?>
                        </div>
                        <div class="col-9">
                            <div class="form-group row">
                                <label for="username" class="col-sm-2 col-form-label font-weight-bold"><?= strtoupper('Username');?></label>
                                <div class="col-sm-10">
                                <input type="text" readonly class="form-control" id="username" name="username" value="<?= $pr->username;?>">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="name" class="col-sm-2 col-form-label font-weight-bold"><?= strtoupper('Nama');?></label>
                                <div class="col-sm-10">
                                <input type="text" readonly class="form-control" id="name" name="name" value="<?= $pr->name;?>">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="alamat" class="col-sm-2 col-form-label font-weight-bold"><?= strtoupper('Alamat');?></label>
                                <div class="col-sm-10">
                                <input type="text" readonly class="form-control" id="alamat" name="alamat" value="<?= $pr->alamat;?>">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="no_telp" class="col-sm-2 col-form-label font-weight-bold"><?= strtoupper('No Telpon');?></label>
                                <div class="col-sm-10">
                                <input type="number" readonly class="form-control" id="no_telp" name="no_telp" value="<?= $pr->no_telp;?>">
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            <?php endforeach;?>
        </div>
    </div>
</div>