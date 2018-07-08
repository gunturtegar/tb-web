
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

    <!-- <script type="text/javascript" src="https://cdn.jsdelivr.net/html5shiv/3.7.3/html5shiv.min.js"></script> -->

</head>
<body class="bg-dark">


    <div class="sufee-login d-flex align-content-center flex-wrap">
        <div class="container">
            <div class="login-content">
                <div class="login-logo">
                    <a href="<?php echo base_url('template_admin/') ?>index.html">
                        <img class="align-content" src="images/logo.png" alt="">
                    </a>
                </div>
                <div class="login-form">
                    <?php echo validation_errors(); ?>
                    <form method="post">
                        <div class="form-group">
                            <label>nik</label>
                            <input type="text" class="form-control" name="nik" placeholder="nik">
                        </div>
                        <div class="form-group">
                            <label>nama</label>
                            <input type="text" class="form-control" name="nama" placeholder="nama">
                        </div>
                        <div class="form-group">
                            <label>alamat</label>
                            <input type="text" class="form-control" name="alamat" placeholder="alamat">
                        </div>
                        <div class="form-group">
                            <label>telp</label>
                            <input type="text" class="form-control" name="telp" placeholder="telp">
                        </div>
                        <div class="form-group">
                            <label>Username</label>
                            <input type="text" class="form-control" name="username" placeholder="Username">
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" class="form-control" name="password" placeholder="Password">
                        </div>
                        <div class="checkbox">
                            <label>
                                <input type="checkbox"> Agree the terms and policy
                            </label>
                        </div>
                        <button type="submit" class="btn btn-primary btn-flat m-b-30 m-t-30">Register</button>
                        <div class="register-link m-t-15 text-center">
                            <p>Already have account ? <a href="<?php echo base_url('Login/') ?>#"> Sign in</a></p>
                        </div>
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
