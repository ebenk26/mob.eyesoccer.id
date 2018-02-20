<div class="col-md-12">
    <br>
    <div class='crumb'>
        <ul>
            <li><a href='<?= base_url(); ?>' style='display: unset'>Home</a></li>
            <li><a href='<?= base_url(); ?>/eyemarket' style='display: unset'>EyeMarket</a></li>
            <li style='cursor:default;'>Keranjang</li>
        </ul>
    </div>
    <p class="text-muted lead">Anda mempunyai <?= $jumlah->jumlah; ?> barang di keranjang.</p>
</div>


<div class="col-md-9 clearfix" id="basket">

    <div class="box">

        <div class="table-responsive" style="width: 95%;">
            <table class="table">
                <thead>
                    <tr>
                        <th colspan="2">Produk</th>
                        <th>Catatan</th>
                        <th>Kuantitas</th>
                        <th>Harga Satuan</th>
                        <th colspan="2">Total</th>
                    </tr>
                </thead>
                <tbody>
            <?php
                foreach ($model as $cart)
                { 
            ?>
                    <tr>
                        <td>
                            <a href="#">
                                <img src="<?= MARKETIMG."".$cart["image1"]; ?>" alt="<?= $cart['nama']; ?>">
                            </a>
                        </td>
                        <td>
                            <a href="<?= base_url(); ?>eyemarket/detail/<?= $cart['toko']; ?>/<?= $cart['title_slug']; ?>" target="_blank">
                                <?= $cart['nama']; ?>
                            </a>
                        </td>
                        <td>
                            <span id="text-catatan-<?= $cart['id']; ?>">
                                <?php echo isset($cart['catatan']) ? $cart['catatan'] : ""; ?>
                            </span>
                            
                            <a href="#" data-toggle="modal" data-target="#form-catatan-<?= $cart['id']; ?>" style="cursor: pointer;">Edit?</a>
                        </td>
                        <td>
                            <div id="<?= md5($cart['jumlah']); ?>" style="display: none;">
                                <span name="idcart" class="cinput" val="<?= $cart['id']; ?>"></span>
                                <span name="dest_total" class="cinput" val="total-all"></span>
                            </div>
                            <input type="number" id="<?= md5($cart['jumlah']); ?>" name="jumlah" value="<?= $cart['jumlah']; ?>" class="form-control form_change form_keyup" style="width: 60px;" dest="total-<?= $cart['id']; ?>" action="eyemarket" fn="edit_cart" loading="off">
                        </td>
                        <td>
                            Rp. <?= number_format($cart['harga'],0,',','.'); ?>
                        </td>
                        <td>
                            <span class="total-<?= $cart['id']; ?>">
                                Rp. <?= number_format($cart['total'],0,',','.'); ?>
                            </span>
                        </td>
                        <td class="hidden">
                            <span id="id_keranjang"><?= $cart['id']; ?></span>
                        </td>
                        <td> 
                            <a href="javascript:void(0)" action="eyemarket" class="form_post" fn="delete_cart" id="reqdelcart">
                                <i class="far fa-trash-alt"></i> 
                                <div class="cinput" name="id" val="<?= $cart['id']; ?>"></div>
                            </a>
                        </td>
                    </tr>
            <?php        
                }
            ?>
                </tbody>
                <tfoot>
                    <tr>
                        <th colspan="5">Total</th>
                        <th>
                            <span class="total-all">Rp. <?= number_format($total_all->total_all,0,',','.'); ?></span>
                        </th>
                    </tr>
                </tfoot>
            </table>

        </div>
        <!-- /.table-responsive -->

        <div class="box-footer">
            <div class="pull-left">
                <a href="<?= base_url(); ?>eyemarket" class="btn btn-default"><i class="fa fa-chevron-left"></i> Lanjut Berbelanja</a>
            </div>
    <?php 
        if ($jumlah->jumlah >= 1)
        {
    ?>
            <div class="pull-right">
                <!-- <button class="btn btn-default"><i class="fa fa-refresh"></i> Update cart</button> -->
                <a href="<?= base_url(); ?>eyemarket/set_alamat/<?= $id_member; ?>" class="btn btn-template-main">Pesan Sekarang <i class="fa fa-chevron-right"></i>
                </a>
            </div>
    <?php        
        }
    ?>
        </div>

    </div>
    <!-- /.box -->

</div>
