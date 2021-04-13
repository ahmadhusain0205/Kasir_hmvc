<div class="container-fluid">
    <div class="card">
        <div class="card-body shadow">
            <a href="<?= base_url('Suplier');?>" class="btn btn-primary float-right" type="button">
                <i class="fas fa-reply"></i> Kembali
            </a>
            <h4 class="m-0 font-weight-bold text-primary">UBAH DATA SUPLIER
            </h4>
        </div>
    </div>
    <div class="card mt-4">
        <div class="card-body shadow">
            <?php
                foreach ($suplier as $s) :
            ?>
            <form action="<?= base_url('Suplier/update'); ?>" method="POST">
                <div class="modal-body">
                    <div class="row">
                        <div class="col">
                            <label for="name">Nama Toko</label>
                            <input type="hidden" name="id" id="id" value="<?= $s->id; ?>">
                            <input type="text" class="form-control" name="name" id="name" value="<?= $s->name;?>">
                        </div>
                        <div class="col">
                            <label for="no_telp">No Telpon</label>
                            <input type="number" class="form-control" name="no_telp" id="no_telp" value="<?= $s->no_telp;?>">
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col">
                        <label for="alamat">Alamat</label>
                            <input type="text" class="form-control" name="alamat" id="alamat" value="<?= $s->alamat;?>">
                        </div>
                        <div class="col">
                            <label for="deskripsi">Deskripsi</label>
                            <input type="text" class="form-control" name="deskripsi" id="deskripsi" value="<?= $s->deskripsi;?>">
                            <input type="hidden" class="form-control" name="tambah" id="tambah" value="<?= $s->tambah;?>">
                            <input type="hidden" class="form-control" name="ubah" id="ubah" value="<?= date('Y-m-d H:i:s');?>">
                        </div>
                    </div>
                    <br>
                    <div class="modal-footer">
                        <button class="btn btn-secondary" type="reset">
                            <i class="fas fa-redo"></i> Reset
                        </button>
                        <button type="submit" class="btn btn-warning">
                            <i class="fas fa-save"></i> Simpan
                        </button>
                    </div>
                </div>
            </form>
            <?php endforeach; ?>
        </div>
    </div>
</div>