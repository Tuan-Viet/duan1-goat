<div class="m_content">
    <div class="title">
        <h3>CHI TIẾT SẢN PHẨM</h3>
    </div>
    <div class="frmcontent">
        <?php foreach ($hanghoa as $hh) : ?>
            <div class="row">
                <label class="">MÃ SP</label>
                <input type="text" name="id" readonly value="<?= $hh['id'] ?>" disabled>
                <!-- <label for="" class="note">*ID tự động tăng</label> -->
            </div>
            <div class="row">
                <label class="">Tên sản phẩm</label>
                <input type="text" class="" id="" name="ten_hh" readonly value="<?= $hh['product_name'] ?>" disabled>
            </div>
            <div class="row">
                <label class="">Đơn giá</label>
                <input type="text" class="" id="" name="ten_hh" readonly value="<?= $hh['product_price'] ?>" disabled>
            </div>
        <?php endforeach ?>
        <table class="table">
            <tr>
                <th></th>
                <th>Size(S)</th>
                <th>Size(M)</th>
                <th>Size(L)</th>
                <th>Size(Xl)</th>
            </tr>
            <?php foreach ($product_detail as $prd) : ?>
                <?php
                if ($hh['id'] == $prd['product_id']) {
                ?>
                    <tr>
                        <td><img src="./../images/products/<?= $prd['image'] ?>" alt="" width="100"></td>
                        <td><?= $prd['quantity_size_S'] ?></td>
                        <td><?= $prd['quantity_size_M'] ?></td>
                        <td><?= $prd['quantity_size_L'] ?></td>
                        <td><?= $prd['quantity_size_XL'] ?></td>
                    </tr>
                <?php
                }
                ?>
            <?php endforeach ?>
        </table>

    </div>
</div>