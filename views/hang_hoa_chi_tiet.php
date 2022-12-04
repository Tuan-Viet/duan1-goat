<main>
    <?php
    // $errors = [];
    // if ($_POST['size'] == '') {
    //     $errors['size'] = "Bạn vui lòng chọn size";
    // }
    // if ($_POST['product_detail_id'] == '') {
    //     $errors['product_detail_id'] = "Bạn vui lòng chọn màu";
    // }
    ?>
    <div class="fade_tab">
        <ul class="list_tab container"></ul>
    </div>
    <div class="pro_details container mt40">
        <div class="row">
            <div class="col-lg-5 left_detail">
                <div class="row row_left_detail">
                    <div class="col-lg-12 box_pro-main row">
                        <div class="list_thumbs col-lg-2 col-xs-12">
                            <?php foreach ($listproduct as $product) : ?>
                                <?php extract($product) ?>
                                <div class="thumb_photo row" onclick="changeimg(this)">
                                    <img src="./images/products/<?= $image_detail ?>" alt="">
                                </div>
                            <?php endforeach ?>
                        </div>
                        <div class="photo_pro-main col-lg-10">
                            <?php extract($listhanghoa) ?>
                            <img src="./images/products/<?= $image ?>" alt="" class="img_pro-main">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-7 right_detail">
                <div class="pro_detail-content">
                    <?php extract($listhanghoa) ?>
                    <div class="title_pro">
                        <h1><?= $product_name ?></h1>
                    </div>
                    <div class="price_pro">
                        <h1><?= $total ?><del class="price_pro-sale"><?= $product_price ?></del></h1>
                    </div>
                    <form action="index.php?act=addtocart" method="post" class="form_pro">
                        <input type="hidden" name="product_id" value="<?= $id ?>">
                        <input type="hidden" name="product_id" value="<?= $product_id ?>">
                        <input type="hidden" name="product_name" value="<?= $product_name ?>">
                        <input type="hidden" name="product_price" value="<?= $product_price ?>">
                        <input type="hidden" name="sale" value="<?= $sale ?>">
                        <input type="hidden" name="total" value="<?= $total ?>">
                        <div class="select_swatch mb24">
                            <span class="header_swatch mb8">Màu sắc:</span>
                            <div class="select_swap">
                                <?php foreach ($listproduct as $product) : ?>
                                    <?php extract($product) ?>
                                    <label class="swap_element" for="radio_color<?= $id ?>">
                                        <input type="radio" name="product_detail_id" value="<?= $id ?>" id="radio_color<?= $id ?>" class="size_0-1">
                                        <div class="ellipse"></div>
                                        <name class="size-S"><?= $product_color ?></name>
                                    </label>
                                <?php endforeach ?>
                            </div>
                            <small style="margin: 10px 15px 0; display: block; font-size: small;" class="text-danger"><?= isset($errors['product_detail_id']) ? $errors['product_detail_id'] : '' ?></small>
                        </div>
                        <div class="select_swatch mb24">
                            <span class="header_swatch mb8">Kích thước</span>
                            <div class="select_swap">
                                <label class="swap_element" for="radio_size0">
                                    <input type="radio" name="size" value="S" id="radio_size0" class="size_0-1">
                                    <div class="ellipse"></div>
                                    <name class="size-S">S</name>
                                </label>
                                <label class="swap_element" for="radio_size1">
                                    <input type="radio" name="size" value="M" id="radio_size1" class="size_0-1">
                                    <div class="ellipse"></div>
                                    <name class="size-S">M</name>
                                </label>
                                <label class="swap_element" for="radio_size2">
                                    <input type="radio" name="size" value="L" id="radio_size2" class="size_0-1">
                                    <div class="ellipse"></div>
                                    <name class="size-S">L</name>
                                </label>
                                <label class="swap_element" for="radio_size3">
                                    <input type="radio" name="size" value="XL" id="radio_size3" class="size_0-1">
                                    <div class="ellipse"></div>
                                    <name class="size-S">XL</name>
                                </label>
                            </div>
                            <small style="margin: 10px 15px 0; display: block; font-size: small;" class="text-danger"><?= isset($errors['size']) ? $errors['size'] : '' ?></small>
                        </div>
                        <div class="select_watch">
                            <input type="number" name="quantity" min="1" value="1" id="" class="form_control-quantity">
                            <?php if (isset($_SESSION['user'])) { ?>
                                <a href="" class="btn_cart"><input type="submit" name="btn_addtocart" value="Thêm vào giỏ hàng"></a>
                                <a href="" class="btn_cart"><input type="submit" name="btn_buynow" value="Mua ngay"></a>
                            <?php } else { ?>
                                <a href="index.php?act=dang_nhap" class="btn_cart"><input type="" name="" value="Thêm vào giỏ hàng"></a>
                                <a href="index.php?act=dang_nhap" class="btn_cart"><input type="" name="" value="Mua ngay"></a>
                            <?php } ?>
                        </div>
                    </form>
                </div>
                <ul class="nav_tabs-menu">
                    <li class="tab active">Mô tả</li>
                    <li class="tab">Điều khoản dịch vụ</li>
                    <li class="tab">Chính sách đổi trả</li>
                    <div class="line"></div>
                </ul>
                <div class="table_content">
                    <div class="tab_panel active">
                        <div class="dsc_pro-detail">
                            <div class="title_dsc-detail">Chọn size phù hợp</div>
                            <div class="nav_dsc-detail">
                                <p>Size S dài 69 rộng 50cm
                                    <br>
                                    Size M dài 70 rộng 54cm
                                    <br>
                                    Size L dài 71 rộng 57cm
                                </p>
                                <p>S dưới 52kg - 1m6
                                    <br>
                                    M dưới 70kg - 1m7
                                    <br>
                                    L dưới 85kg - 1m8
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="tab_panel">
                        <div class="title_dsc-detail">Lưu ý khi đặt hàng</div>
                        <p>*Các bạn check lại thông tin , kiểm tra lại thông tin đơn hàng trong Email .</p>
                        <p>* Các đơn hàng sẽ được gọi xác nhận trong 48h kể từ lúc đặt .</p>
                        <p>* Thời gian nhận hàng tầm 2-3 ngày (nội thành),3 - 4 ngày (ngoại thành)</p>
                        <p style="color:red">* Vào thời điểm khuyến mại thời gian nhận hàng tầm 3-4 ngày (nội thành),7 - 10 ngày (ngoại thành)</p>

                    </div>
                    <div class="tab_panel">
                        <div class="title_dsc-detail">1.Điều kiện đổi trả</div>
                        <p>Quý Khách hàng cần kiểm tra tình trạng hàng hóa và có thể đổi hàng/ trả lại hàng ngay tại thời điểm giao/nhận hàng trong những trường hợp sau:</p>
                        <p>Hàng không đúng chủng loại, mẫu mã trong đơn hàng đã đặt hoặc như trên website tại thời điểm đặt hàng.</p>
                        <p>Không đủ số lượng, không đủ bộ như trong đơn hàng.</p>
                        <p>Tình trạng bên ngoài bị ảnh hưởng như rách bao bì, bong tróc, bể vỡ…</p>
                        <div class="title_dsc-detail">2.Quy định về thời gian</div>
                        <p><strong>Thời gian thông báo đổi </strong>: trong vòng 48h kể từ khi nhận sản phẩm đối với trường hợp sản phẩm bị bong tróc hình in , loang màu.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="list_product-related mt40">
            <h1 class="title_pro-related mb24">Sản phẩm liên quan</h1>
            <div class="carts carts_related row">
                <?php foreach ($product_cate as $product) : ?>
                    <?php extract($product) ?>
                    <div class="cart cart_related col-lg-3 col-md-4">
                        <div class="cart_photo">
                            <div class="sale_pro">-<?= $sale?>%</div>
                            <a href="index.php?act=hang_hoa_chi_tiet&id=<?= $id ?>" class="img_href">
                                <img src="images/products/<?= $image ?>" alt="" class="cart_img">
                            </a>
                            <div class="overlay_addtocard">
                                <input type="submit" class="btn_addtocard" value="Thêm vào giỏ hàng">
                            </div>
                            </div>
                        <div class="cart_nav">
                            <a href="index.php?act=hang_hoa_chi_tiet&id=<?= $id ?>" class="cart_name"><?= $product_name?></a>
                            <p class="cart_price"><?= $total ?> <del class="sale" style="color:#6666"><?= $product_price ?></del></p>
                        </div>
                    </div>
                <?php endforeach ?>
            </div>
            <div class="row_comments mt28">
                <form action="" class="form_comments">
                    <input type="text" name="" id="" class="form_control-comment" placeholder="Viết bình luận của bạn ...">
                    <button type="submit" class="btn_comment">Gửi</button>
                </form>
            </div>
            <h3 class="title_comment mt8">Bình luận</h3>
            <div class="box_user-comments">
                <div class="nav_comments mt28">
                    <div class="user_comment">
                        <p>Q</p><strong>Nguyễn Công Quyền</strong>
                    </div>
                    <p class="question">Sản phẩm này được đấy</p>
                    <!-- <p class="question">Sản phẩm này được đấy</p> -->
                    <div class="action_question">
                        <a href="" class="reply_question">Trả lời</a>
                        <a href="" class="timestamp_question">1 ngày trước</a>
                    </div>
                    <div class="row_comments row_subcomments">
                        <form action="" class="form_comments">
                            <input type="text" name="" id="" class="form_control-comment" placeholder="Trả lời bình luận của Quyền ... ">
                            <button type="submit" class="btn_comment">Gửi</button>
                        </form>
                    </div>
                </div>
                <div class="nav_comments mt28">
                    <div class="user_comment">
                        <p>Q</p><strong>Nguyễn Công Quyền</strong>
                    </div>
                    <p class="question">Sản phẩm này được đấy</p>
                    <!-- <p class="question">Sản phẩm này được đấy</p> -->
                    <div class="action_question">
                        <a href="" class="reply_question">Trả lời</a>
                        <a href="" class="timestamp_question">1 ngày trước</a>
                    </div>
                    <div class="row_comments row_subcomments">
                        <form action="" class="form_comments">
                            <input type="text" name="" id="" class="form_control-comment" placeholder="Trả lời bình luận của Quyền ... ">
                            <button type="submit" class="btn_comment">Gửi</button>
                        </form>
                    </div>
                </div>
                <div class="nav_comments mt28">
                    <div class="user_comment">
                        <p>Q</p><strong>Nguyễn Công Quyền</strong>
                    </div>
                    <p class="question">Sản phẩm này được đấy</p>
                    <!-- <p class="question">Sản phẩm này được đấy</p> -->
                    <div class="action_question">
                        <a href="" class="reply_question">Trả lời</a>
                        <a href="" class="timestamp_question">1 ngày trước</a>
                    </div>
                    <div class="row_comments row_subcomments">
                        <form action="" class="form_comments">
                            <input type="text" name="" id="" class="form_control-comment" placeholder="Trả lời bình luận của Quyền ... ">
                            <button type="submit" class="btn_comment">Gửi</button>
                        </form>
                    </div>
                </div>
                <div class="nav_comments mt28">
                    <div class="user_comment">
                        <p>Q</p><strong>Nguyễn Công Quyền</strong>
                    </div>
                    <p class="question">Sản phẩm này được đấy</p>
                    <!-- <p class="question">Sản phẩm này được đấy</p> -->
                    <div class="action_question">
                        <a href="" class="reply_question">Trả lời</a>
                        <a href="" class="timestamp_question">1 ngày trước</a>
                    </div>
                    <div class="row_comments row_subcomments">
                        <form action="" class="form_comments">
                            <input type="text" name="" id="" class="form_control-comment" placeholder="Trả lời bình luận của Quyền ... ">
                            <button type="submit" class="btn_comment">Gửi</button>
                        </form>
                    </div>
                </div>
                <div class="nav_comments mt28">
                    <div class="user_comment">
                        <p>Q</p><strong>Nguyễn Công Quyền</strong>
                    </div>
                    <p class="question">Sản phẩm này được đấy</p>
                    <!-- <p class="question">Sản phẩm này được đấy</p> -->
                    <div class="action_question">
                        <a href="" class="reply_question">Trả lời</a>
                        <a href="" class="timestamp_question">1 ngày trước</a>
                    </div>
                    <div class="row_comments row_subcomments">
                        <form action="" class="form_comments">
                            <input type="text" name="" id="" class="form_control-comment" placeholder="Trả lời bình luận của Quyền ... ">
                            <button type="submit" class="btn_comment">Gửi</button>
                        </form>
                    </div>
                </div>
                <div class="nav_comments mt28">
                    <div class="user_comment">
                        <p>Q</p><strong>Nguyễn Công Quyền</strong>
                    </div>
                    <p class="question">Sản phẩm này được đấy</p>
                    <!-- <p class="question">Sản phẩm này được đấy</p> -->
                    <div class="action_question">
                        <a href="" class="reply_question">Trả lời</a>
                        <a href="" class="timestamp_question">1 ngày trước</a>
                    </div>
                    <div class="row_comments row_subcomments">
                        <form action="" class="form_comments">
                            <input type="text" name="" id="" class="form_control-comment" placeholder="Trả lời bình luận của Quyền ... ">
                            <button type="submit" class="btn_comment">Gửi</button>
                        </form>
                    </div>
                </div>
                <div class="nav_comments mt28">
                    <div class="user_comment">
                        <p>Q</p><strong>Nguyễn Công Quyền</strong>
                    </div>
                    <p class="question">Sản phẩm này được đấy</p>
                    <!-- <p class="question">Sản phẩm này được đấy</p> -->
                    <div class="action_question">
                        <a href="" class="reply_question">Trả lời</a>
                        <a href="" class="timestamp_question">1 ngày trước</a>
                    </div>
                    <div class="row_comments row_subcomments">
                        <form action="" class="form_comments">
                            <input type="text" name="" id="" class="form_control-comment" placeholder="Trả lời bình luận của Quyền ... ">
                            <button type="submit" class="btn_comment">Gửi</button>
                        </form>
                    </div>
                </div>
                <div class="nav_comments mt28">
                    <div class="user_comment">
                        <p>Q</p><strong>Nguyễn Công Quyền</strong>
                    </div>
                    <p class="question">Sản phẩm này được đấy</p>
                    <!-- <p class="question">Sản phẩm này được đấy</p> -->
                    <div class="action_question">
                        <a href="" class="reply_question">Trả lời</a>
                        <a href="" class="timestamp_question">1 ngày trước</a>
                    </div>
                    <div class="row_comments row_subcomments">
                        <form action="" class="form_comments">
                            <input type="text" name="" id="" class="form_control-comment" placeholder="Trả lời bình luận của Quyền ... ">
                            <button type="submit" class="btn_comment">Gửi</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php include "overlay_detail.php" ?>
</main>