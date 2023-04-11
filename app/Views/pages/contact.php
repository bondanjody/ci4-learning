<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

    <h4>Contact Me on :</h4>
    <?php foreach($contact as $address) : ?>
        <ul>
            <li><?= $address['tipe'] ?></li>
            <li><?= $address['alamat'] ?></li>
            <li><?= $address['kota'] ?></li>
        </ul>
    <?php endforeach ?>

<?= $this->endSection(); ?>
