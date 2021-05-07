<div class="container-fluid">
    <?= $this->session->flashdata('Barang');?>
    <div class="card">
        <div class="card-body shadow">
            <h4 class="font-weight-bold text-primary">BARANG
                <button type="button" class="btn btn-primary float-right" data-toggle="modal" data-target="#adminTambahModal">
                    <i class="fa fa-plus"></i> Tambah
                </button>
            </h4>
        </div>
    </div>
</div>
