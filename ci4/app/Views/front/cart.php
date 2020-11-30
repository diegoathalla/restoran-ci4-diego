<?= $this->extend('template/front') ?>

<?= $this->section('content') ?>

<?php if ($totalitem === 0) : ?>
    <div style="padding:200px 0;">
        <div class="alert alert-danger text-center" role="alert" style="margin: 30px;">
            Keranjang Kosong ,Silahkan Belanja Terlebih Dahulu <a href="<?= base_url('menu') ?>" class="alert-link">&nbsp; Menu</a>
        </div>
    </div>

<?php else : ?>
    <div id="container">
        <table>
            <tr style="text-align:center;">
                <td>Gambar</td>
                <td>Nama</td>
                <td>Harga</td>
                <td>Jumlah</td>
                <td>Subtotal</td>
                <td> </td>
            </tr>
            <?php foreach ($cart as $key => $value) : ?>
                <tr class="p">
                    <td class="image"><img src="<?= base_url('/uploud/' . $value['gambar'] . '') ?>" /></td>
                    <td class="name"><?= $value['name'] ?></td>
                    <td class="price"> <?= number_format($value['price'], 0, ',', '.')  ?></td>
                    <td class="amount"><a href="<?= base_url('/keranjang/minus/' . $value['qty'] . '/' . $value['rowid']) ?>"><i class="fa fa-minus-circle"></i></a><input type="text" value="<?= $value['qty']; ?>" disabled /><a href="<?= base_url('/keranjang/plus/' . $value['qty'] . '/' . $value['rowid']) ?>"><i class="fa fa-plus-circle"></i></a></td>
                    <td class="pricesubtotal">Rp.
                        <?= number_format($value['subtotal'], 0, ',', '.')  ?></td>
                    <td class="remove">
                        <a href="<?= base_url('/hapus/' . $value['rowid']) ?>"><div>&times</div></a>
                        
                    </td>
                </tr>
            <?php endforeach ?>
            <tr>
                <td> </td>
                <td> </td>
                <td> </td>
                <td>Subtotal:</td>
                <td class="totalpricesubtotal">Rp. <?= number_format($total, 0, ',', '.')  ?></td>
                <td> </td>
            </tr>
            <tr>
                <td style="border-top:1px solid white" colspan="6">
                    <span class="big">Total: Rp. <span class="realtotal"><?= number_format($total, 0, ',', '.')  ?></span></span>
                </td>
            </tr>
        </table>
        <?php if (!empty(session()->get('namapelanggan'))) { ?>
            <div id="checkout"><a href="<?= base_url('checkout') ?>" class="text-white">Checkout</a> </div>
        <?php } else { ?>
            <div id="checkout"><a href="<?= base_url('login') ?>" class="text-white" onclick="bowo()">Checkout</a> </div>
        <?php } ?>

        <div id="checkout"><a href="" class="text-white">Berbelanja lagi</a> </div>
    </div>
<?php endif ?>


<script>
    function bowo() {
        alert("Harap Login Dahulu !");
    }
</script>
<?= $this->endSection() ?>