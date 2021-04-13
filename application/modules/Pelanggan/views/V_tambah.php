<div class="container-fluid">
    <div class="card">
        <div class="card-body shadow">
            <a href="<?= base_url('Pelanggan');?>" class="btn btn-primary float-right" type="button">
                <i class="fas fa-reply"></i> Kembali
            </a>
            <h4 class="font-weight-bold text-primary">TAMBAH PELANGGAN</h4>
        </div>
    </div>
    <div class="card shadow mb-4 mt-4">
        <div class="card-body">
            <form method="POST" class="user" action="<?= base_url('pelanggan/tambah_data'); ?>">
                <div class="modal-body">
                    <div class="row">
                        <div class="col">
                            <label for="name">Nama</label>
                            <input type="text" class="form-control" name="name" id="name" placeholder="Masukan Nama" required>
                        </div>
                        <div class="col">
                            <label for="jk">Jenis Kelamin</label>
                            <select name="jk" id="jk" class="form-control">
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
                            <input type="text" class="form-control" name="alamat" id="alamat" placeholder="Masukan Alamat" required>
                        </div>
                        <div class="col">
                            <label for="no_telp">No Telpon</label>
                            <input type="number" class="form-control" name="no_telp" id="no_telp" placeholder="Masukan No Telpon" required>
                        </div>
                    </div>
                    <br>
                    <div class="modal-footer">
                        <button type="reset" class="btn btn-warning">
                            <i class="fas fa-redo"></i> Reset
                        </button>
                        <button type="submit" class="btn btn-success">
                            <i class="fas fa-plus"></i> Tambah
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>