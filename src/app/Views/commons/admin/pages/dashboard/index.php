<?= $this->extend('commons/admin/pages/defaultDashboard') ?>

<?= $this->section('header') ?>
    <?= $this->include('commons/admin/inc/header') ?>
<?= $this->endSection() ?>

<?= $this->section('sidebar') ?>
    <?= $this->include('commons/admin/inc/sidebar') ?>
<?= $this->endSection() ?>

<?= $this->section('breadcumb') ?>
    <?= $this->include('commons/admin/inc/breadcumb') ?>
<?= $this->endSection() ?>

<?= $this->section('footer') ?>
    <?= $this->include('commons/admin/inc/footer') ?>
<?= $this->endSection() ?>
