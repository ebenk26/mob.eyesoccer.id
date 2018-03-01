<?php
    foreach ($product as $data)
    {
?>
                        <div class="container" style="width: unset;">
                            <div id="mainImage" style="margin: 10px 0px;">
                                <img src="<?= MARKETIMG."".$data["image1"]; ?>" class="img-responsive">
                            </div>
                                <div class="row" id="thumbs">
                                    <div class="col-xs-2">
                                        <a href="<?= MARKETIMG."".$data["image1"]; ?>" class="thumb">
                                            <img src="<?= MARKETIMG."".$data["image1"]; ?>" alt="<?= $data['nama']; ?>" class="img-responsive">
                                        </a>
                                    </div>
                            <?php 
                                if (isset($data['image2']))
                                {
                            ?>
                                    <div class="col-xs-2">
                                        <a href="<?= MARKETIMG."".$data["image2"]; ?>" class="thumb">
                                            <img src="<?= MARKETIMG."".$data["image2"]; ?>" alt="<?= $data['nama']; ?>" class="img-responsive">
                                        </a>
                                    </div>
                            <?php        
                                }
                            ?>
                            <?php 
                                if (isset($data['image3']))
                                {
                            ?>
                                    <div class="col-xs-2">
                                        <a href="<?= MARKETIMG."".$data["image3"]; ?>" class="thumb">
                                            <img src="<?= MARKETIMG."".$data["image3"]; ?>" alt="<?= $data['nama']; ?>" class="img-responsive">
                                        </a>
                                    </div>
                            <?php        
                                }
                            ?>
                            <?php 
                                if (isset($data['image4']))
                                {
                            ?>
                                    <div class="col-xs-2">
                                        <a href="<?= MARKETIMG."".$data["image4"]; ?>" class="thumb">
                                            <img src="<?= MARKETIMG."".$data["image4"]; ?>" alt="<?= $data['nama']; ?>" class="img-responsive">
                                        </a>
                                    </div>
                            <?php        
                                }
                            ?>
                            <?php 
                                if (isset($data['image5']))
                                {
                            ?>
                                    <div class="col-xs-2">
                                        <a href="<?= MARKETIMG."".$data["image5"]; ?>" class="thumb">
                                            <img src="<?= MARKETIMG."".$data["image5"]; ?>" alt="<?= $data['nama']; ?>" class="img-responsive">
                                        </a>
                                    </div>
                            <?php        
                                }
                            ?>      
                                    
                                </div>

                        <?php 

                        ?>
                        </div>
                        <div class="container">
                            <div class="box">
                                    <div class="sizes" style="text-align: left;">
                                        <h3 style="font-weight: 700;letter-spacing: 0.08em;text-transform: uppercase;"> 
                                            <?= $data['nama']; ?> 
                                        </h3>
                                    </div>
                            <?php 
                                if ($data["harga"] != 0)
                                {
                            ?>
                                    <p style="margin-top: 5%;">
                                        <del>Rp. <?= number_format($data['harga_sebelum'],0,',','.'); ?> </del>
                                    </p>
                                    <p class="price" style="text-align: left;">
                                        Rp. <?= number_format($data['harga'],0,',','.'); ?> 
                                    </p>
                            <?php        
                                }
                            ?>
                                    
                                    <p>
                                <?php
                                    if ($id_member == NULL) 
                                    {
                                ?>
                                        <!-- <a href="<?= base_url(); ?>member">
                                            <span class="btn btn-template-main">
                                                <i class="fa fa-shopping-cart"></i> Tambahkan ke Keranjang 
                                            </span>
                                        </a> -->
                                        <span class="btn btn-template-main">
                                                <i class="fa fa-shopping-cart"></i> Available Soon
                                            </span>
                                <?php        
                                    }
                                    else
                                    {
                                ?>
                                        <!-- <a href="#" data-toggle="modal" data-target="#chart-modal" class="btn btn-template-main">
                                            <span class="btn btn-template-main">
                                                <i class="fa fa-shopping-cart"></i> Tambahkan ke Keranjang
                                            </span>
                                        </a> -->
                                        <span class="btn btn-template-main">
                                                <i class="fa fa-shopping-cart"></i> Available Soon
                                            </span>
                                <?php
                                    }
                                ?>
                                        
                                    </p>

                                    <!-- Chart Modal -->
                                    <div class="modal fade" id="chart-modal" tabindex="-1" role="dialog" aria-labelledby="Login" aria-hidden="true" style="font-size: 14px;opacity: 1;">
                                        <div class="modal-dialog" style="margin-top: 40%;">
                                            <div class="modal-content">
                                                <form action="<?= base_url(); ?>eyemarket" class="form_basic">
                                                    <div class="modal-header">
                                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                                        <h4 class="modal-title" id="Login">Isi Keterangan Pemesanan</h4>
                                                    </div>
                                                    <div class="modal-body">
                                                        <div class="row">
                                                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                                                <label>Nama Barang</label>
                                                                <div>
                                                                    <strong><?= $data['nama']; ?></strong>
                                                                </div>
                                                                <br>
                                                                <div class="row">
                                                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                                                        <div class="form-group">
                                                                            <p>Jumlah</p>
                                                                            <input type="number" name="jumlah" class="form-control" required="required">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                                                        <p>Harga</p>
                                                                        <strong>Rp. <?= number_format($data['harga'],0,',','.'); ?></strong>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                                                <p>Catatan untuk toko / penjual</p>
                                                                <textarea name="catatan" id="" cols="30" rows="5" placeholder="Contoh: Warna Putih/Ukuran XL/Edisi ke-2" style="margin-top: -5px"></textarea>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <input type="submit" class="btn btn-info" value="Masukkan ke keranjang">
                                                    </div>
                                                    <input type="hidden" name="fn" value="set_cart">
                                                    <input type="hidden" name="id_product" value="<?= $data['id_product']; ?>">
                                                </form>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="box" id="details">
                                        <p>
                                            <h4>Detail Produk</h4>
                                            <p style="width: 90%;"><?= $data['keterangan']; ?></p>
                                    </div>
                            </div>
                        </div>


<!-- NEW PRODUK LAINNYA -->
<h3 class="produk-lainnya-h3">Produk Lainnya</h3>
<div class="container over-x" style="padding: unset;">
    <div id="emSlide" class="carousel slide t-30">
        <div role="listbox" class="carousel-inner w-max">
            <div id="reqmarket" class="loadmarket" action="eyemarket" loading="off" clean="clstube" style="display: block;">
                    <?php
                    foreach ($ex_product as $value)
                    {
                ?>
                <a href="<?= base_url(); ?>eyemarket/detail/<?= $value['toko']; ?>/<?= $value['title_slug']; ?>">
                    <div class="em-box-content">
                        <div class="img-prod">
                            <img src="<?= MARKETIMG."".$value["image1"]; ?>" alt="<?= $value['nama']; ?>">
                        </div>
                                            
                        <h1><?= $value['nama']; ?></h1>
                        <!-- <p class="prices" style="visibility:hidden;"> 0</p> -->
                        <?php
                                                if ($value['harga'] != 0)
                                                {
                                            ?>
                                                    <p class="price">Rp. <?= number_format($value['harga'],0,',','.'); ?> </p>
                                            <?php        
                                                }
                                            ?>
                        <button type="text" class="beli">Available Soon</button>
                    </div>
                </a>
                            
                        <?php        
                            }
                        ?>
            </div>
        </div>
    </div>
</div>
<?php        
    }
?>