<!DOCTYPE html>

<html lang="id">

<head>

    <meta charset="utf-8">

    <title>menu makanan</title>

    <link href="<?php echo base_url().'assets/css/bootstrap.css'?>" rel="stylesheet">

    <link href="<?php echo base_url().'assets/css/jquery.dataTables.min.css'?>" rel="stylesheet">

</head>

<body>



<div class="container">

    <h1>menu <small>makanan! </small></h1>

    <table class="table table-bordered table-striped" id="mydata">

        <thead>

        <tr>

            <td>Kode makanan </td>

            <td>Nama nama makanan</td>

            <td>Satuan</td>

            <td>Harga</td>
            <td><a href="#">pesan</td>

        </tr>

        </thead>

        <tbody>

        <?php

        foreach($data->result_array() as $i):

            $id_makanan=$i['id_makanan'];

            $nama_makanan=$i['nama_makanan'];

            $makanan_satuan=$i['satuan_makanan'];

            $harga_makanan=$i['harga_makanan'];

            ?>

            <tr>

                <td><?php echo $id_makanan;?> </td>

                <td><?php echo $nama_makanan;?> </td>

                <td><?php echo $makanan_satuan;?> </td>

                <td><?php echo $harga_makanan;?> </td>

            </tr>

        <?php endforeach;?>

        </tbody>

    </table>



</div>



<script src="<?php echo base_url().'assets/js/jquery-2.2.4.min.js'?>"> </script>

<script src="<?php echo base_url().'assets/js/bootstrap.js'?>"> </script>

<script src="<?php echo base_url().'assets/js/jquery.dataTables.min.js'?>"> </script>

<script src="<?php echo base_url().'assets/js/moment.js'?>"> </script>

<script>

    $(document).ready(function(){

        $('#mydata').DataTable();

    });

</script>

</body>

</html>