<?= $this->extend('commons/admin/pages/dashboard/layout') ?>

<?= $this->section('content') ?>
    <?= $this->include('commons/admin/inc/dashboard/content') ?>
<?= $this->endSection() ?>

<?= $this->section('content') ?>
    <?= $this->include('commons/admin/inc/dashboard/script') ?>
<?= $this->endSection() ?>