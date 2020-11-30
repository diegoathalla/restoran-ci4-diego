<?= $this->extend('template/front') ?>

<?= $this->section('content') ?>

<div id="container">
    <table>
        <tr style="text-align:center;">
            <td>Tanggal</td>
            <td>Gambar</td>
            <td>Nama</td>
            <td>Harga</td>
            <td>Jumlah</td>
            <td>Total</td>
        </tr>
        <?php foreach ($orderdetail as $key => $value) : ?>
            <?php
            $time = strtotime($value['tglorder']);
            $myFormatForView = date("d-m-yy G:i", $time);
            ?>
            <tr class="p">
                <td class="price"><?= $myFormatForView ?></td>
                <td class="image"><img src="<?= base_url('/uploud/' . $value['gambar'] . '') ?>" style="width: 100px; height:100px;"/></td>
                <td class="name"><?= $value['menu'] ?></td>
                <td class="price"> Rp. <?= number_format($value['harga'], 0, ',', '.')  ?></td>
                <td class="amount"><input type="text" value="<?= $value['jumlah'] ?>" disabled /></td>
                <td class="pricesubtotal">
                <?php $total = $value['harga'] * $value['jumlah']?>Rp.
                Rp.
                                        <?= number_format($total, 0, ',', '.')  ?></td>
                
            </tr>
        <?php endforeach ?>
    </table>
</div>


<?= $this->endSection() ?>