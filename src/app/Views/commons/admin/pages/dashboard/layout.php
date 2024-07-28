<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo $this->renderSection('title') ?></title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="<?php echo base_url('plugins/fontawesome-free/css/all.min.css') ?>">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="<?php echo base_url('plugins/overlayScrollbars/css/OverlayScrollbars.min.css') ?>">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?php echo base_url('dist/css/adminlte.min.css') ?>">
</head>

<body class="hold-transition dark-mode sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
    <div class="wrapper">
        <?php echo $this->include('commons/admin/inc/header') ?>
        <?php echo $this->include('commons/admin/inc/sidebar') ?>
        <div class="content-wrapper">
            <?php echo $this->include('commons/admin/inc/breadcrumb') ?>
            <?php echo $this->renderSection('content') ?>
        </div>
        <?php echo $this->include('commons/admin/inc/footer') ?>
    </div>

    <!-- REQUIRED SCRIPTS -->
    <?php echo $this->renderSection('script') ?>
</body>

</html>