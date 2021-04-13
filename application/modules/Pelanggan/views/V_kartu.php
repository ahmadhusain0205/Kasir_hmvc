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
                    foreach ($pelanggan as $p) : ?>
                        <tr>
                            <td width="40%">Nama</td>
                            <td width="2%">:</td>
                            <td><?= $p->name; ?></td>
                        </tr>
                        <tr><td><br></td></tr>
                        <tr>
                            <td width="40%">Jenis Kelamin</td>
                            <td width="2%">:</td>
                            <td><?= $p->jk; ?></td>
                        </tr>
                        <tr><td><br></td></tr>
                        <tr>
                            <td width="40%">Alamat</td>
                            <td width="2%">:</td>
                            <td><?= $p->alamat; ?></td>
                        </tr>
                        <tr><td><br></td></tr>
                        <tr>
                            <td width="40%">No Telpon</td>
                            <td width="2%">:</td>
                            <td><?= $p->no_telp; ?></td>
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