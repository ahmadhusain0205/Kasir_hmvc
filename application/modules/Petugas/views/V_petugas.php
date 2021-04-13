<div class="container-fluid">
    <?= $this->session->flashdata('petugas');?>
    <div class="card">
        <div class="card-body shadow">
            <h4 class="m-0 font-weight-bold text-primary">Daftar Petugas
                <button type="button" class="btn btn-primary float-right" data-toggle="modal" data-target="#petugasTambahModal">
                    <i class="fa fa-plus"></i> Tambah
                </button>
            </h4>
        </div>
    </div>
    <div class="card shadow mb-4 mt-4">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered table-striped table-hover" id="dataTable" width="100%" cellspacing="0">
                    <thead class="text-center">
                        <tr>
                            <th width="1%">No</th>
                            <th width="20%">Nama</th>
                            <th width="20%">Alamat</th>
                            <th width="20%">No Telpon</th>
                            <th width="20%">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no = "1";
                        foreach ($petugas as $p) : ?>
                            <tr>
                                <td><?= $no++; ?></td>
                                <td><?= $p->name; ?></td>
                                <td><?= $p->alamat; ?></td>
                                <td><?= $p->no_telp; ?></td>
                                <td class="text-center">
                                    <button type="button"  class="btn btn-sm btn-success mb-4" data-toggle="modal" data-target="#detailPetugasModal<?php echo $p->id; ?>">
                                        <i class="fa fa-eye"></i> detail
                                    </button>
                                    <button type="button" class="btn btn-sm btn-warning mb-4" data-toggle="modal" data-target="#editPetugasModal<?php echo $p->id; ?>">
                                        <i class="fa fa-wrench"></i> Edit
                                    </button>
                                    <button type="button" class="btn btn-sm btn-danger mb-4" data-toggle="modal" data-target="#deletePetugasModal<?= $p->id?>">
                                        <i class="fa fa-trash"></i> Hapus
                                    </button>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>


<!-- Modal detail anggota -->
<?php
foreach ($petugas as $p) :
?>
    <div class="modal fade" id="detailPetugasModal<?php echo $p->id; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
            <div class="modal-content">
                <div class="modal-header text-white bg-success font-weight-bold">
                    <h3 class="modal-title" id="exampleModalLabel">Detail Petugas</h3>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <form class="user">
                    <div class="modal-body">
                        <div class="row">
                            <div class="col">
                                <label for="username">Username</label>
                                <input type="hidden" name="id" value="<?= $p->id; ?>">
                                <input type="text" class="form-control" name="username" id="username" value="<?= $p->username; ?>" readonly>   
                            </div>
                            <div class="col">
                                <label for="password">Sandi</label>
                                <input type="password" name="password" id="password" class="form-control" value="<?= $p->password; ?>" readonly>
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col">
                                <label for="name">Nama</label>
                                <input type="text" class="form-control" name="name" id="name" value="<?= $p->name; ?>" readonly>   
                            </div>
                            <div class="col">
                                <label for="no_telp">No Telpon</label>
                                <input type="number" class="form-control" name="no_telp" id="no_telp" value="<?= $p->no_telp; ?>" readonly>
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col">
                                <label for="alamat">Alamat</label>
                                <input type="text" class="form-control" name="alamat" id="alamat" value="<?= $p->alamat; ?>" readonly>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
<?php endforeach; ?>
<!-- akhir modal -->


<!-- Modal tambah petugas -->
<div class="modal fade" id="petugasTambahModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
        <div class="modal-content">
            <div class="modal-header text-white bg-primary font-weight-bold">
                <h5 class="modal-title" id="exampleModalLabel">Tambah Petugas</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <form method="POST" class="user" action="<?= base_url('Petugas/tambah'); ?>">
                <div class="modal-body">
                    <div class="row">
                        <div class="col">
                            <label for="username">Username</label>
                            <input type="text" class="form-control" name="username" id="username" placeholder="Masukan Username" required>
                        </div>
                        <div class="col">
                            <label for="password">Sandi</label>
                            <input type="text" class="form-control" name="password" id="password" placeholder="Masukan Sandi" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <label for="name">Nama</label>
                            <input type="text" class="form-control" name="name" id="name" placeholder="Masukan Nama" required>
                        </div>
                        <div class="col">
                            <label for="no_telp">No Telpon</label>
                            <input type="number" class="form-control" name="no_telp" id="no_telp" placeholder="Masukan No Telpon" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <label for="alamat">Alamat</label>
                            <input type="text" class="form-control" name="alamat" id="alamat" placeholder="Masukan Alamat" required>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-secondary" type="button" data-dismiss="modal">Batal</button>
                        <button type="submit" class="btn btn-primary">Tambah</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- akhir modal -->


<!-- Modal edit anggota -->
<?php
foreach ($petugas as $p) :
?>
    <div class="modal fade" id="editPetugasModal<?php echo $p->id; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
            <div class="modal-content">
                <div class="modal-header text-white bg-warning font-weight-bold">
                    <h5 class="modal-title" id="exampleModalLabel">Edit Petugas</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <form method="POST" class="user" action="<?= base_url('Petugas/edit'); ?>">
                    <div class="modal-body">
                        <div class="row">
                            <div class="col">
                                <label for="nik">Username</label>
                                <input type="hidden" name="id" value="<?= $p->id; ?>">
                                <input type="text" class="form-control" name="username" id="username" placeholder="Masukan NIK" required value="<?= $p->username; ?>">
                            </div>
                            <div class="col">
                                <label for="password">Password</label>
                                <input type="text" class="form-control" name="password" id="password" placeholder="Masukan Password" required value="<?= $p->password; ?>">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <label for="name">Nama</label>
                                <input type="text" class="form-control" name="name" id="name" placeholder="Masukan Nama" required value="<?= $p->name; ?>">
                            </div>
                            <div class="col">
                                <label for="no_telp">No Telpon</label>
                                <input type="number" class="form-control" name="no_telp" id="no_telp" placeholder="Masukan No Telpon" required value="<?= $p->no_telp; ?>">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <label for="alamat">Alamat</label>
                                <input type="text" class="form-control" name="alamat" id="alamat" placeholder="Masukan Alamat" required value="<?= $p->alamat; ?>">
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-secondary" type="button" data-dismiss="modal">Batal</button>
                        <button type="submit" class="btn btn-warning">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
<?php endforeach; ?>
<!-- akhir modal -->


<!-- Modal Hapus -->
<?php
foreach ($petugas as $p) :
?>
<div class="modal fade" id="deletePetugasModal<?= $p->id;?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
        <div class="modal-content">
            <div class="modal-header text-white bg-danger font-weight-bold">
                <h5 class="modal-title" id="exampleModalLabel">Hapus data ini?</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">Klik "Ya" untuk <b>Mengkonfirmasi</b>, atau "Tidak" untuk <b>Membatalkan</b></div>
            <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Tidak</button>
                <a class="btn btn-danger" href="<?= base_url('Petugas/delete/') . $p->id; ?>">Ya</a>
            </div>
        </div>
    </div>
</div>
<?php endforeach; ?>
<!-- akhir modal -->