<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

    <div>
        <h4>Daftar Komik</h4>
        <table border="1">
            <tr>
                <td>Sampul</td>
                <td>Judul</td>
                <td>Aksi</td>
            </tr>  
            <tr>
                <td>
                    <img src="/images/naruto.jpg" alt="" width="100" />
                </td>
                <td>
                    Naruto
                </td>
                <td>
                    <a href="#">Detail</a>
                </td>
            </tr>  
        </table>
    </div>

<?= $this->endSection(); ?>