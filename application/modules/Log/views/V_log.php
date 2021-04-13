<div class="container-fluid">
    <?= $this->session->flashdata('log');?>
    <div class="card shadow" weight="4px">
        <div class="card-body">
            <h4 class="font-weight-bold text-primary">AKTIVITAS LOG PETUGAS
                <button type="button" class="btn btn-sm btn-danger shadow mb-4 float-right" data-toggle="modal" data-target="#delete">
                    <i class="fa fa-trash"></i> Hapus Semua Data
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
                            <th width="20%">Nama Petugas</th>
                            <th width="20%">Waktu Masuk</th>
                            <th width="20%">Waktu Keluar</th>
                            <th width="20%">Keterangan</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no = "1";
                        foreach ($log as $a) : ?>
                            <tr>
                                <td><?= $no++; ?></td>
                                <td><?= $a->name; ?></td>
                                <td><?= $a->time_login; ?></td>
                                <td><?= $a->time_logout; ?></td>
                                <td><?= $a->keterangan; ?></td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>


<!-- Modal Hapus -->
<div class="modal fade" id="delete" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
        <div class="modal-content">
            <div class="modal-header text-white bg-danger font-weight-bold">
                <h5 class="modal-title" id="exampleModalLabel">Hapus Semua Data?</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">Klik "Ya" untuk <b>mengkonfirmasi</b>, atau "tidak" untuk <b>membatalkan</b></div>
            <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">No</button>
                <a class="btn btn-danger" href="<?= base_url('Log/delete');?>">Yes</a>
            </div>
        </div>
    </div>
</div>