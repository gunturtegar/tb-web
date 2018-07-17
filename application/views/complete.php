
<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Sufee Admin - HTML5 Admin Template</title>
    <meta name="description" content="Sufee Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="<?php echo base_url('template_admin/') ?>apple-icon.png">
    <link rel="shortcut icon" href="<?php echo base_url('template_admin/') ?>favicon.ico">

    <link rel="stylesheet" href="<?php echo base_url('template_admin/') ?>assets/css/normalize.css">
    <link rel="stylesheet" href="<?php echo base_url('template_admin/') ?>assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url('template_admin/') ?>assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo base_url('template_admin/') ?>assets/css/themify-icons.css">
    <link rel="stylesheet" href="<?php echo base_url('template_admin/') ?>assets/css/flag-icon.min.css">
    <link rel="stylesheet" href="<?php echo base_url('template_admin/') ?>assets/css/cs-skin-elastic.css">
    <!-- <link rel="stylesheet" href="<?php echo base_url('template_admin/') ?>assets/css/bootstrap-select.less"> -->
    <link rel="stylesheet" href="<?php echo base_url('template_admin/') ?>assets/scss/style.css">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>

    <!-- <script type="text/javascript" src="<?php echo base_url('template_admin/') ?>https://cdn.jsdelivr.net/html5shiv/3.7.3/html5shiv.min.js"></script> -->

</head>
<body class="bg-dark">


    <div class="sufee-login d-flex align-content-center flex-wrap">
        <div class="container">
            <div class="login-content">
                <div class="login-logo">
                    <a href="<?php echo base_url('template_admin/') ?>index.html">
                        <img class="align-content" src="<?php echo base_url('template_admin/') ?>images/logo.png" alt="">
                    </a>
                </div>
                <div class="login-form">
                    <form>
                        <div class="form-group">
                            <label>ID Pesanan</label>
                            <input type="text" class="form-control-plaintext" placeholder="Email" value="<?php echo $id ?>" readonly>
                        </div>
                        <div class="form-group">
                            <label>Nama Users</label>
                            <input type="text" class="form-control-plaintext" placeholder="Email" value="<?php echo $users->nama ?>" readonly>
                        </div>
                        <div class="form-group">
                            <label>Nama Mobil</label>
                            <input type="text" class="form-control-plaintext" placeholder="Email" value="<?php echo $mobil->nama ?>" readonly>
                        </div>
                        <div class="form-group">
                            <label>Tanggal Sewa</label>
                            <input type="text" class="form-control-plaintext" placeholder="Email" value="<?php echo $pesan->tgl_sewa ?>" readonly>
                        </div>
                        <div class="form-group">
                            <label>Tanggal Kembali</label>
                            <input type="text" class="form-control-plaintext" placeholder="Email" value="<?php echo $pesan->tgl_kembali ?>" readonly>
                        </div>
                        <div class="form-group">
                            <label>Harga sewa perhari</label>
                            <input type="text" class="form-control-plaintext" placeholder="Email" value="<?php echo $mobil->harga ?>" readonly>
                        </div>
                        <div class="form-group">
                            <label>Harga Total</label>
                            <?php 
                            $date1 = new DateTime($pesan->tgl_sewa);
                            $date2 = new DateTime($pesan->tgl_kembali);
                            $diff = $date1->diff($date2);
                            $beda = $diff->days;
                             ?>
                            <input type="text" class="form-control-plaintext" placeholder="Email" value="<?php echo (int)($mobil->harga)*$beda ?>" readonly>
                        </div>
                        <button type="submit" class="btn btn-success btn-flat m-b-15">Success</button>

                    </form>
                </div>
            </div>
        </div>
    </div>


    <script src="<?php echo base_url('template_admin/') ?>assets/js/vendor/jquery-2.1.4.min.js"></script>
    <script src="<?php echo base_url('template_admin/') ?>assets/js/popper.min.js"></script>
    <script src="<?php echo base_url('template_admin/') ?>assets/js/plugins.js"></script>
    <script src="<?php echo base_url('template_admin/') ?>assets/js/main.js"></script>


</body>
</html>
