<div class="container-fluid">
    <?= $this->session->flashdata('pelanggan');?>
    <div class="card">
        <div class="card-body shadow">
            <h4 class="m-0 font-weight-bold text-primary">PELANGGAN
                <a href="<?= base_url('Pelanggan/download');?>" type="button" class="btn btn-sm btn-success float-right mr-3">
                    <i class="fa fa-download"></i> Download
                </a>
                <a href="<?= base_url('Pelanggan/tambah');?>" type="button" class="btn btn-sm btn-primary float-right mr-3">
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
                            <th width="">Nama</th>
                            <th width="">Jenis Kelamin</th>
                            <th width="">Alamat</th>
                            <th width="">No Telpon</th>
                            <th width="25%">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no = "1";
                        foreach ($pelanggan as $p) : ?>
                            <tr class="text-center">
                                <td><?= $no++; ?></td>
                                <td><?= $p->name; ?></td>
                                <td><?= $p->jk; ?></td>
                                <td><?= $p->alamat; ?></td>
                                <td><?= $p->no_telp; ?></td>
                                <td>
                                    <button type="button"  class="btn btn-sm btn-success mb-4" data-toggle="modal" data-target="#detailPelanggan<?php echo $p->id; ?>">
                                        <i class="fa fa-eye"></i> detail
                                    </button>
                                    <a href="<?= base_url('Pelanggan/edit/').$p->id;?>" type="button" class="btn btn-sm btn-warning mb-4">
                                        <i class="fa fa-wrench"></i> Edit
                                    </a>
                                    <button type="button" class="btn btn-sm btn-danger mb-4" data-toggle="modal" data-target="#deletePelanggan<?= $p->id;?>">
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
foreach ($pelanggan as $p) :
?>
    <div class="modal fade" id="detailPelanggan<?php echo $p->id; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
            <div class="modal-content">
                <div class="modal-header text-white bg-success font-weight-bold">
                    <h3 class="modal-title" id="exampleModalLabel">Detail Pelanggan</h3>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <form class="user">
                    <div class="modal-body">
                        <div class="row">
                            <div class="col">
                                <label for="name">Nama Pelanggan</label>
                                <input type="hidden" name="id" id="id" value="<?= $p->id; ?>">
                                <input type="text" class="form-control" name="name" id="name" value="<?= $p->name;?>" readonly>
                            </div>
                            <div class="col">
                                <label for="jk">Jenis Kelamin</label>
                                <input type="text" class="form-control" name="jk" id="jk" value="<?= $p->jk;?>" readonly>
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col">
                            <label for="alamat">Alamat</label>
                                <input type="text" class="form-control" name="alamat" id="alamat" value="<?= $p->alamat;?>" readonly>
                            </div>
                            <div class="col">
                                <label for="no_telp">No Telpon</label>
                                <input type="number" class="form-control" name="no_telp" id="no_telp" value="<?= $p->no_telp;?>" readonly>
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col">
                                <label for="download">Download Data</label>
                                <br>
                                <a href="<?= base_url('Pelanggan/cetak/').$p->id;?>" type="button" class="btn btn-sm btn-success">
                                    <i class="fa fa-download"></i> Download
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
foreach ($pelanggan as $p) :
?>
<div class="modal fade" id="deletePelanggan<?= $p->id;?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                <a class="btn btn-danger" href="<?= base_url('Pelanggan/delete/') . $p->id; ?>">Ya</a>
            </div>
        </div>
    </div>
</div>
<?php endforeach; ?>
<!-- akhir modal -->