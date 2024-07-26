<?php echo $this->extend('commons/admin/pages/dashboard/layout') ?>

<?php echo $this->section('title') ?>
    <?php echo esc($title) ?>
<?php echo $this->endSection() ?>

<?php echo $this->section('content') ?>
    <?php echo $content ?>
<?php echo $this->endSection() ?>