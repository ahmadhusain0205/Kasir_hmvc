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
                            <td width="20%">JENIS KELAMIN</td>
                            <td width="20%">ALAMAT</td>
                            <td width="20%">NO TELPON</td>
                        </tr>
                        <?php $no = '1';
                    foreach ($pelanggan as $p) : ?>
                        <tr>
                            <td><?= $no++; ?></td>
                            <td><?= $p->name; ?></td>
                            <td><?= $p->jk; ?></td>
                            <td><?= $p->alamat; ?></td>
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