<div class="main">
    <div class="row row_confirm">
        <div class="main_left col-lg-7">
            <div class="price_ship">
                <h3 class="section_title">Phương thức vận chuyển</h3>
                <label for="" class="row_section-content-ship pform mt28">
                    <div class="section_ship-left">
                        <div class="ellipse_ship"></div>
                        <p class="total_line-price">30,000 <sup>đ</sup></p>
                    </div>
                    <div class="section_ship-right">
                        <p class="total_line-price">30,000 <sup>đ</sup></p>
                    </div>
                </label>
            </div>
            <form action="index.php?act=bill_access" method="post">
                <div class="payment mt40">
                    <input type="hidden" name="id_order" value="<?= $id_order ?>">
                        <h3 class="section_title">Phương thức thanh toán</h3>
                        <label for="" class="row_section-content-payment mt28 pform">
                            <div class="ellipse_ship">
                                <input type="radio" name="check" id="" value="0">
                            </div>
                            <span class="nav_payment">Thanh toán khi giao hàng (COD)</span>
                        </label>
                        <label for="" class="row_section-content-payment mt28 pform">
                            <div class="ellipse_ship">
                                <input type="radio" name="check" id="" value="1"> 
                            </div>
                            <span class="nav_payment">Thanh toán qua ATM</span>
                        </label>
                    
                </div>
                <div class="btn_buttons-footer">
                    <a href="index.php?act=cart" class="rerturn_bill">Giỏ hàng</a>
                    <a href="index.php?act=bill_access" class="continue_pay">
                        <button type="submit">Hoàn tất đơn hàng</button>    
                    </a>
                </div>
            </form>
        </div>
        <?php include "box_right.php"?>
    </div>
</div>