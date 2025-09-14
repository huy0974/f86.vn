<?php
get_header();
?>
<section class="home-banner d-none d-md-block">
    <div id="banner" class="banner carousel slide carousel-fade" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#banner" class="active" data-slide-to="0"></li>
            <li data-target="#banner" data-slide-to="1"></li>
            <li data-target="#banner" data-slide-to="2"></li>
            <li data-target="#banner" data-slide-to="3"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active" data-interval="2500">
                <a href="">
                    <img class="desktop" src="./public/images/20220511164418256-1920 x 470.jpg" alt="">
                </a>
            </div>
            <div class="carousel-item" data-interval="2500">
                <a href="">
                    <img class="desktop" src="./public/images/20221012100205330-f88 vay tiền destop.png" alt="">
                </a>
            </div>
            <div class="carousel-item" data-interval="2500">
                <a href="">
                    <img class="desktop" src="./public/images/20221118174037871-destop wc vay tiền tại f88.jpg" alt="">
                </a>
            </div>
            <div class="carousel-item" data-interval="2500">
                <a href="">
                    <img class="desktop" src="./public/images/slider_4.jpg" alt="">
                </a>
            </div>
        </div>
        <a href="#banner" class="carousel-control-prev" data-slide="prev">
            <span class="carousel-control-prev-icon"></span>
        </a>
        <a href="#banner" class="carousel-control-next" data-slide="next">
            <span class="carousel-control-next-icon"></span>
        </a>
    </div>
</section>
<section class="home-banner-mobile d-block d-md-none">
    <div id="banner-mobile" class="banner-mobile carousel slide carousel-fade" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#banner-mobile" class="active" data-slide-to="0"></li>
            <li data-target="#banner-mobile" data-slide-to="1"></li>
            <li data-target="#banner-mobile" data-slide-to="2"></li>
            <li data-target="#banner-mobile" data-slide-to="3"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active" data-interval="2500">
                <a href="">
                    <img class="desktop" src="./public/images/20221118173653929-wc mobile f88 cho vay tiền_mobile.jpg" alt="">
                </a>
            </div>
            <div class="carousel-item" data-interval="2500">
                <a href="">
                    <img class="desktop" src="./public/images/vayf88online_mobile.png" alt="">
                </a>
            </div>
            <div class="carousel-item" data-interval="2500">
                <a href="">
                    <img class="desktop" src="./public/images/vaybangoto_mobile.jpg" alt="">
                </a>
            </div>
            <div class="carousel-item" data-interval="2500">
                <a href="">
                    <img class="desktop" src="./public/images/cantiengoilien_mobile.jpg" alt="">
                </a>
            </div>
        </div>
        <a href="#banner-mobile" class="carousel-control-prev" data-slide="prev">
            <span class="carousel-control-prev-icon"></span>
        </a>
        <a href="#banner-mobile" class="carousel-control-next" data-slide="next">
            <span class="carousel-control-next-icon"></span>
        </a>
    </div>
</section>
<!-- END HOME-BANNER  -->
<div id="wp-info-reg">
    <div class="container">
        <div class="text-center">
            <h1>Thông tin đăng ký vay tiền</h1>
        </div>
        <div id="wp-form-reg" class="box">
            <div class="form-reg-title">
                <p>Nhập thông tin đăng ký vay</p>
                <p class="condition-reg">Chỉ cần Căn cước công dân hoặc Sổ hộ khẩu, duyệt vay nhanh chóng
                    trong <span>15 phút</span></p>
            </div>
            <div class="form-reg-content">
                <form id="form" action="" method="post">
                    <div class="row">
                        <div id="info-customer" class="col-md-6">
                            <p class="title text-center">Thông tin cá nhân</p>
                            <div class="form-group">
                                <label for="fullname">Họ tên <span class="star">*</span></label>
                                <input type="text" class="form-control" name="fullname" id="fullname" placeholder="Nhập họ tên" value="<?php echo set_value('fullname') ?>" />
                                <?php echo form_error("fullname") ?>
                                <p></p>
                            </div>
                            <div class="form-group">
                                <label for="number_phone">Số điện thoại<span class="star">*</span></label>
                                <input type="tel" class="form-control" name="number_phone" id="number_phone" placeholder="Nhập số điện thoại" value="<?php echo set_value('number_phone') ?>" />
                                <?php echo form_error('number_phone') ?>
                            </div>
                            <div class="form-group">
                                <label for="address">Địa chỉ đang ở? <span class="star">*</span></label>
                                <input type="text" class="form-control" name="address" id="address" placeholder="Nhập địa chỉ bạn đang ở?" value="<?php echo set_value('address') ?>" />
                                <?php echo form_error('address') ?>
                            </div>
                            <label for="">Địa chỉ bạn đang ở có trùng hộ khẩu không? <span class="star">*</span></label>
                            <div class="form-group d-flex align-items-center">
                                <input type="radio" name="check_address" id="yes" value="yes" <?php if (isset($check_address) && $check_address == 'yes') echo 'checked' ?>>
                                <label for="yes" class="ml-2 mr-5 font-weight-normal">Có</label>
                                <input type="radio" name="check_address" id="no" value="no" <?php if (isset($check_address) && $check_address == 'no') echo 'checked' ?>>
                                <label for="no" class="ml-2 mr-5 font-weight-normal">Không</label>
                                <?php echo form_error('check_address') ?>
                            </div>
                            <div class="form-group proof_documents">
                                <input type="text" class="form-control" name="proof_document" class='proof_document' id="
                                            proof_document" placeholder="Giấy tờ chứng minh nhà của bạn (VD: Sổ đỏ, sổ hồng,...)" />
                                <?php echo form_error('proof_document') ?>
                            </div>
                        </div>
                        <div id="exhibit" class="col-md-6">
                            <p class="title text-center">Giấy tờ để lại</p>
                            <div class="form-group m-0">
                                <label for="">Bạn muốn vay bằng <span class="star">*</span></label>
                            </div>
                            <div id="exhibit-reg">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group form-check d-flex align-items-center">
                                            <input type="checkbox" class="form-check-input" name="exhibit" value="CCCD Chip" id="cccd" />
                                            <label for="cccd" class="form-check-label">CCCD
                                                Chip (gốc)</label>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group form-check d-flex align-items-center">
                                            <input type="checkbox" class="form-check-input" name="exhibit" value="Sổ hộ khẩu" id="shk" />
                                            <label for="shk" class="form-check-label">Sổ hộ khẩu
                                                (gốc)</label>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group form-check d-flex align-items-center">
                                            <input type="checkbox" class="form-check-input" name="exhibit" value="Giấy khai sinh con" id="gks_con" />
                                            <label for="gks_con" class="form-check-label">Giấy khai sinh con
                                                (gốc)</label>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group form-check d-flex align-items-center">
                                            <input type="checkbox" class="form-check-input" name="exhibit" value="Blx Máy" id="blx_moto" />
                                            <label for="blx_moto" class="form-check-label">Blx máy
                                                (gốc)</label>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group form-check d-flex align-items-center">
                                            <input type="checkbox" class="form-check-input" name="exhibit" value="Blx Ô tô" id="blx_car" />
                                            <label for="blx_car" class="form-check-label">Blx ô tô
                                                (gốc)</label>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group form-check d-flex align-items-center">
                                            <input type="checkbox" class="form-check-input" name="exhibit" value="Đăng ký xe máy" id="reg_moto" />
                                            <label for="reg_moto" class="form-check-label">Đăng ký xe máy
                                                (gốc)</label>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group form-check d-flex align-items-center">
                                            <input type="checkbox" class="form-check-input" name="exhibit" value="Đăng ký xe ô tô" id="reg_car" />
                                            <label for="reg_car" class="form-check-label">Đăng ký xe ô tô
                                                (gốc)</label>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="exhibit" placeholder="Nhập giấy tờ khác bạn có thể để lại" value="" id="exhibit_dif" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <p class="note"><span class="star">*</span>Thông tin bắt buộc</p>
                        </div>
                        <div class="col-md-12 text-center">
                            <div class="wp-btn-reg">
                                <button type="submit" name="btn_reg" class="btn_reg btn">ĐĂNG KÝ <span class="arrow"><i class="fa-solid fa-arrow-right"></i></span></button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- END WP-info-REG  -->
<div id="wp-note">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <p class="note">Thời hạn khoản vay tối thiểu 50 ngày</p>
                <p class="note">Lãi suất vay ưu đãi</p>
                <p class="note">Nhận tiền sau 15 phút đăng ký</p>
            </div>
        </div>
    </div>
</div>
<!-- END NOTE  -->
<div class="container">
    <div id="advantages" class="container box">
        <div class="head-box">
            <div class="row">
                <div class="col-md-12">
                    <p class="title">Ưu điểm khi vay tại 23k</p>
                </div>
            </div>
        </div>
        <div class="list-advantage">
            <div class="row justify-content-center">
                <div class="col-md-6 col-12">
                    <p class="advantage">Lãi suất hấp dẫn</p>
                </div>
                <div class="col-md-6 col-12">
                    <p class="advantage">15 phút có tiền</p>
                </div>
                <div class="col-md-6 col-12">
                    <p class="advantage">Gói vay không giới hạn</p>
                </div>
                <div class="col-md-6 col-12">
                    <p class="advantage">Bảo mật thông tin</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- END ADVANTAGES  -->
<div class="container">
    <div id="should-choose" class="container box">
        <div class="head-box">
            <div class="row">
                <div class="col-md-12">
                    <p class="title">Bạn nên chọn 23k</p>
                </div>
            </div>
        </div>
        <ul class="list-reason">
            <div class="row text-center">
                <div class="col-6 col-md-4 col-xl-2">
                    <li class="reason-item">
                        <a href="#fullname"><img src="./public/images/thu_tuc.png" alt=""></a>
                        <p>Thủ tục đơn giản chỉ cần CCCD & sổ hộ khẩu Hà Nội</p>
                    </li>
                </div>
                <div class="col-6 col-md-4 col-xl-2">
                    <li class="reason-item">
                        <a href="#wp-info-reg"><img src="./public/images/tham_dinh.png" alt=""></a>
                        <p>
                            Thẩm định nhanh chóng linh hoạt
                        </p>
                    </li>
                </div>
                <div class="col-6 col-md-4 col-xl-2">
                    <li class="reason-item">
                        <a href="#form"><img src="./public/images//lai_suat.png" alt=""></a>
                        <p>Lãi suất ưu đãi nhất Hà Nội</p>
                    </li>
                </div>
                <div class="col-6 col-md-4 col-xl-2">
                    <li class="reason-item">
                        <a href="#form"><img src="./public/images/tu_van.png" alt=""></a>
                        <p>Đăng ký tư vấn online dễ dàng</p>
                    </li>
                </div>
                <div class="col-6 col-md-4 col-xl-2">
                    <li class="reason-item">
                        <a href="#form"><img src="./public/images/bao_mat.png" alt=""></a>
                        <p>Bảo mật thông tin khách hàng</p>
                    </li>
                </div>
                <div class="col-6 col-md-4 col-xl-2">
                    <li class="reason-item">
                        <a href="#fullname"><img src="./public/images/thu_tuc.png" alt=""></a>
                        <p>Thủ tục đơn giản chỉ cần CCCD & sổ hộ khẩu Hà Nội</p>
                    </li>
                </div>
            </div>
        </ul>
    </div>
</div>
<?php
get_footer();
?>