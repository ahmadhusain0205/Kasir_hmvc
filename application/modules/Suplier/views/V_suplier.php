<div class="container-fluid">
    <?= $this->session->flashdata('suplier');?>
    <div class="card">
        <div class="card-body shadow">
            <h4 class="m-0 font-weight-bold text-primary">SUPLIER
                <a href="<?= base_url('Suplier/download');?>" type="button" class="btn btn-sm btn-success float-right mr-3">
                    <i class="fa fa-print"></i> Cetak
                </a>
                <a href="<?= base_url('Suplier/tambah');?>" type="button" class="btn btn-sm btn-primary float-right mr-3">
                    <i class="fa fa-plus"></i> Tambah
                </a>
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
                            <th width="">Tanggal Suplai</th>
                            <th width="">Nama Toko</th>
                            <th width="">No Telpon</th>
                            <th width="">Alamat</th>
                            <th width="">Tanggal Update</th>
                            <th width="25%">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no = "1";
                        foreach ($suplier as $s) : ?>
                            <tr>
                                <td><?= $no++; ?></td>
                                <td><?= $s->tambah; ?></td>
                                <td><?= $s->name; ?></td>
                                <td><?= $s->no_telp; ?></td>
                                <td><?= $s->alamat; ?></td>
                                <td><?= $s->ubah; ?></td>
                                <td class="text-center">
                                    <button type="button"  class="btn btn-sm btn-success mb-4" data-toggle="modal" data-target="#detailSuplier<?php echo $s->id; ?>">
                                        <i class="fa fa-eye"></i> detail
                                    </button>
                                    <a href="<?= base_url('Suplier/edit/').$s->id;?>" type="button" class="btn btn-sm btn-warning mb-4">
                                        <i class="fa fa-wrench"></i> Edit
                                    </a>
                                    <button type="button" class="btn btn-sm btn-danger mb-4" data-toggle="modal" data-target="#deleteSuplier<?= $s->id;?>">
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


<!-- Modal detail -->
<?php
foreach ($suplier as $s) :
?>
    <div class="modal fade" id="detailSuplier<?php echo $s->id; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
            <div class="modal-content">
                <div class="modal-header text-white bg-success font-weight-bold">
                    <h3 class="modal-title" id="exampleModalLabel">Detail Suplier</h3>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <form class="user">
                    <div class="modal-body">
                        <div class="row">
                            <div class="col">
                                <label for="name">Nama Toko</label>
                                <input type="hidden" name="id" id="id" value="<?= $s->id; ?>">
                                <input type="text" class="form-control" name="name" id="name" value="<?= $s->name;?>" readonly>
                            </div>
                            <div class="col">
                                <label for="no_telp">No Telpon</label>
                                <input type="number" class="form-control" name="no_telp" id="no_telp" value="<?= $s->no_telp;?>" readonly>
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col">
                            <label for="alamat">Alamat</label>
                                <input type="text" class="form-control" name="alamat" id="alamat" value="<?= $s->alamat;?>" readonly>
                            </div>
                            <div class="col">
                                <label for="deskripsi">Deskripsi</label>
                                <input type="text" class="form-control" name="deskripsi" id="deskripsi" value="<?= $s->deskripsi;?>" readonly>
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col">
                                <label for="Tanggal Suplai Masuk">Tanggal Suplai Masuk</label>
                                <input type="text" class="form-control" name="tambah" id="tambah" value="<?= date('Y-m-d H:i:s');?>" readonly>
                            </div>
                            <div class="col float-right">
                                <label for="download" type="hidden">Cetak Data</label>
                                <br>
                                <a href="<?= base_url('Suplier/cetak/').$s->id;?>" type="button" class="btn btn-sm btn-success">
                                    <i class="fa fa-print"></i> Cetak
                                </a>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
<?php endforeach; ?>
<!-- akhir modal -->


<!-- Modal Hapus -->
<?php
foreach ($suplier as $s) :
?>
<div class="modal fade" id="deleteSuplier<?= $s->id;?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                <a class="btn btn-danger" href="<?= base_url('Suplier/delete/') . $s->id; ?>">Ya</a>
            </div>
        </div>
    </div>
</div>
<?php endforeach; ?>
<!-- akhir modal -->