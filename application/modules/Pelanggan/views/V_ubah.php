<div class="container-fluid">
    <div class="card">
        <div class="card-body shadow">
            <a href="<?= base_url('Pelanggan');?>" class="btn btn-primary float-right" type="button">
                <i class="fas fa-reply"></i> Kembali
            </a>
            <h4 class="m-0 font-weight-bold text-primary">UBAH DATA PELANGGAN
            </h4>
        </div>
    </div>
    <div class="card mt-4">
        <div class="card-body shadow">
            <?php
                foreach ($pelanggan as $p) :
            ?>
            <form action="<?= base_url('Pelanggan/update'); ?>" method="POST">
                <div class="modal-body">
                    <div class="row">
                        <div class="col">
                            <label for="name">Nama</label>
                            <input type="hidden" name="id" id="id" value="<?= $p->id; ?>">
                            <input type="text" class="form-control" name="name" id="name" value="<?= $p->name;?>" required>
                        </div>
                        <div class="col">
                            <label for="jk">Jenis Kelamin</label>
                            <select name="jk" id="jk" class="form-control" required>
                                <option value="">-- Pilih Jenis Kelamin --</option>
                                <option value="Laki-laki">Laki-laki</option>
                                <option value="Perempuan">Perempuan</option>
                            </select>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col">
                        <label for="alamat">Alamat</label>
                            <input type="text" class="form-control" name="alamat" id="alamat" value="<?= $p->alamat;?>" required>
                        </div>
                        <div class="col">
                            <label for="no_telp">No Telpon</label>
                            <input type="number" class="form-control" name="no_telp" id="no_telp" value="<?= $p->no_telp;?>" required>
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