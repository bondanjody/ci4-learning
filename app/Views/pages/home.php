<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

    <h4>Welcome, to Bondan Web !</h4>
    <?php 
        if ($dataArray) {
            d($dataArray);
        }
    ?>

<?= $this->endSection(); ?>

