<div class="container-fluid">
    <div class="card">
        <div class="card-body shadow">
            <h4 class="font-weight-bold text-primary">MY PROFILE
            </h4>
        </div>
    </div>
    <div class="card shadow mb-4 mt-4">
        <div class="card-body">
            <?php
                foreach ($admin as $a) :
            ?>
            <form>
                <div class="form-group row">
                    <label for="username" class="col-sm-2 col-form-label">Username</label>
                    <div class="col-sm-10">
                        <input type="text" readonly class="form-control" id="username" name="username" value="<?= $a->username;?>">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="name" class="col-sm-2 col-form-label">Nama</label>
                    <div class="col-sm-10">
                        <input type="text" readonly class="form-control" id="name" name="name" value="<?= $a->name;?>">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="alamat" class="col-sm-2 col-form-label">Alamat</label>
                    <div class="col-sm-10">
                        <input type="text" readonly class="form-control" id="alamat" name="alamat" value="<?= $a->alamat;?>">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="no_telp" class="col-sm-2 col-form-label">No Telpon</label>
                    <div class="col-sm-10">
                        <input type="text" readonly class="form-control" id="no_telp" name="no_telp" value="<?= $a->no_telp;?>">
                    </div>
                </div>
            </form>
            <?php
                endforeach;
            ?>
        </div>
    </div>
</div>