<div class="container-fluid">
    <div class="text-center">
        <div class="error mx-auto text-center" data-text="404">404</div>
        <br>
            <p class="text-gray-500">Mohon maaf <b class="text-primary"><?= $this->session->userdata('name');?></b></p>
            <p class="text-gray-500">Halaman ini tidak tersedia untuk status anda yang sebagai <b class="text-primary"><?= $this->session->userdata('sebagai');?></b></p>
            <a href="<?= base_url('Beranda');?>">&larr; Kembali ke Beranda</a>
        </div>
    </div>