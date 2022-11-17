<div class="m_content">
    <div class="title">
        <h3>CHI TIẾT SẢN PHẨM</h3> 
    </div>
    <div class="frmcontent">
        <?php foreach($hanghoa as $hh) : ?>
            <div class="row">
                <label class="">MÃ SP</label>
                <input type="text" name="id" readonly value="<?= $hh['id']?>" disabled>
                <!-- <label for="" class="note">*ID tự động tăng</label> -->
            </div>
            <div class="row">
                <label class="">Tên sản phẩm</label>
                <input type="text" class="" id="" name="ten_hh" readonly value="<?= $hh['product_name']?>" disabled>
            </div>
            <div class="row">
                <label class="">Đơn giá</label>
                <input type="text" class="" id="" name="ten_hh" readonly value="<?= $hh['product_price']?>" disabled>
            </div>
        <?php endforeach?>
        <?php foreach($product_detail as $prd) : ?>
            <?php
                if($hh['id'] == $prd['product_id']){
            ?>  
                <img src="./../images/products/<?= $prd['image'] ?>" alt="" width="100">
                <div class="row">
                    <label class="">Size</label>
                    <input type="text" class="" id="" name="size" readonly value="<?= $prd['size']?>" disabled>
                </div>    
                <div class="row">
                    <label class="">Số lượng</label>
                    <input type="text" class="" id="" name="quantity" readonly value="<?= $prd['quantity']?>" disabled>
                </div>    
            <?php
                }
            ?>
        <?php endforeach?>
    </div>
</div>