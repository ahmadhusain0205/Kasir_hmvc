<html>

<head>
    <title><?= $judul; ?></title>
    <link rel="stylesheet" href="<?= base_url('assets/css/style.css'); ?>" type="text/css">
</head>

<body>
    <div class="card text-white bg-primary mb-3" style="max-width: 40rem;">
        <div class="card-header"><?= $header; ?></div>
        <div class="card-body">
            <div class="container">
                <table class="table table-borderless table-sm fs-2">
                    <?php $no = '1';
                    foreach ($suplier as $s) : ?>
                        <tr>
                            <td width="40%">Nama</td>
                            <td width="2%">:</td>
                            <td><?= $s->name; ?></td>
                        </tr>
                        <tr><td><br></td></tr>
                        <tr>
                            <td width="40%">No Telpon</td>
                            <td width="2%">:</td>
                            <td><?= $s->no_telp; ?></td>
                        </tr>
                        <tr><td><br></td></tr>
                        <tr>
                            <td width="40%">Alamat</td>
                            <td width="2%">:</td>
                            <td><?= $s->alamat; ?></td>
                        </tr>
                        <tr><td><br></td></tr>
                        <tr>
                            <td width="40%">Deskripsi</td>
                            <td width="2%">:</td>
                            <td><?= $s->deskripsi; ?></td>
                        </tr>
                        <tr><td><br></td></tr>
                        <tr>
                            <td width="40%">Tanggal Suplai</td>
                            <td width="2%">:</td>
                            <td><?= $s->tambah; ?></td>
                        </tr>
                    <?php endforeach; ?>
                </table>
            </div>
        </div>
    </div>
    <script type="text/javascript">
        window.print();
    </script>
</body>

</html>