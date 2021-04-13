<html>

<head>
    <title><?= $judul; ?></title>
</head>

<body>
    <div class="card text-white bg-primary">
        <div class="card-header"><?= $header; ?></div>
        <div class="card-body">
            <div class="container">
                <table class="table table-borderless" border="1" weight="40%">
                    <tr align="center">
                            <td width="1%">NO</td>
                            <td width="20%">NAMA</td>
                            <td width="20%">NO TELPON</td>
                            <td width="20%">ALAMAT</td>
                            <td width="20%">DESKRIPSI</td>
                            <td width="20%">TANGGAL SUPLAI MASUK</td>
                        </tr>
                        <?php $no = '1';
                    foreach ($suplier as $s) : ?>
                        <tr>
                            <td><?= $no++; ?></td>
                            <td><?= $s->name; ?></td>
                            <td><?= $s->no_telp; ?></td>
                            <td><?= $s->alamat; ?></td>
                            <td><?= $s->deskripsi; ?></td>
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