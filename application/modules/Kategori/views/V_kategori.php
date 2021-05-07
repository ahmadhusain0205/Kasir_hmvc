<div class="container-fluid">
    <?= $this->session->flashdata('Kategori');?>
    <div class="card">
        <div class="card-body shadow">
            <h4 class="font-weight-bold text-primary">KATEGORI
                <button type="button" class="btn btn-primary float-right" data-toggle="modal" data-target="#adminTambahModal">
                    <i class="fa fa-plus"></i> Tambah
                </button>
            </h4>
        </div>
    </div>
</div>
