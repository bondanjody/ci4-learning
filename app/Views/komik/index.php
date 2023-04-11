<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

    <div>
        <h4>Daftar Komik</h4>
        <?php foreach($komik as $k) : ?>
        <table border="1">
            <tr>
                <td>Sampul</td>
                <td>Judul</td>
                <td>Aksi</td>
            </tr>  
            <tr>
                <td>
                    <img src="/images/<?= $k['sampul'] ?>" alt="" class="sampul" />
                </td>
                <td>
                    <?= $k['judul'] ?>
                </td>
                <td>
                    <a href="#">Detail</a>
                </td>
            </tr>  
        </table>
        <?php endforeach; ?>
    </div>

<?= $this->endSection(); ?>