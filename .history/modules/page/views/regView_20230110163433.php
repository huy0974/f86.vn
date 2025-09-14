<?php
get_header();
?>
<div id="wp-info-reg">
    <div class="container">
        <div class="text-center">
            <h1>Thông tin đăng ký</h1>
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
                                <span class="error" id="error_fullname"></span>
                            </div>
                            <div class="form-group">
                                <label for="number_phone">Số điện thoại<span class="star">*</span></label>
                                <input type="tel" class="form-control" name="number_phone" id="number_phone" placeholder="Nhập số điện thoại" value="<?php echo set_value('number_phone') ?>" />
                                <span class="error" id="error_number_phone"></span>
                            </div>
                            <div class="form-group">
                                <label for="address">Địa chỉ đang ở? <span class="star">*</span></label>
                                <input type="text" class="form-control" name="address" id="address" placeholder="Nhập địa chỉ bạn đang ở?" value="<?php echo set_value('address') ?>" />
                                <span class="error" id="error_address"></span>
                            </div>
                            <label for="">Địa chỉ bạn đang ở có trùng hộ khẩu không? <span class="star">*</span></label>
                            <div class="form-group d-flex align-items-center">
                                <input type="radio" name="check_address" id="yes" value="yes" <?php if (isset($check_address) && $check_address == 'yes') echo 'checked' ?>>
                                <label for="yes" class="ml-2 mr-5 font-weight-normal">Có</label>
                                <input type="radio" name="check_address" id="no" value="no" <?php if (isset($check_address) && $check_address == 'no') echo 'checked' ?>>
                                <label for="no" class="ml-2 mr-5 font-weight-normal">Không</label>
                                <span class="error" id="error_check_address"></span>
                            </div>
                            <div class="form-group proof">
                                <input type="text" class="form-control" name="proof_document" id="proof_document" placeholder="Nhập giấy tờ chứng minh nhà của bạn (VD: Sổ đỏ, sổ hồng,...)" value="<?php echo set_value('proof_document') ?>" />
                                <span class="error" id="error_proof_document"></span>
                            </div>
                            <div class="form-group">
                                <label for="number_loan">Số tiền cần vay<span class="star">*</span></label>
                                <div class="col-8 col-lg-6 pl-0">
                                    <div class="input-group">
                                        <input type="number" min="0" max="50" class="form-control text-center" name="number_loan" id="number_loan" placeholder="Chọn số" value="" />
                                        <div class="input-group-append">
                                            <span class="input-group-text">Triệu</span>
                                        </div>
                                    </div>
                                </div>
                                <span class="error" id="error_number_loan"></span>
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
                                            <span class="error" id="error_exhibit"></span>
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
                        <a href="#wp-info-reg"><img src="./public/images/thu_tuc.png" alt=""></a>
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
                        <a href="#wp-info-reg"><img src="./public/images//lai_suat.png" alt=""></a>
                        <p>Lãi suất ưu đãi nhất Hà Nội</p>
                    </li>
                </div>
                <div class="col-6 col-md-4 col-xl-2">
                    <li class="reason-item">
                        <a href="#wp-info-reg"><img src="./public/images/tu_van.png" alt=""></a>
                        <p>Đăng ký tư vấn online dễ dàng</p>
                    </li>
                </div>
                <div class="col-6 col-md-4 col-xl-2">
                    <li class="reason-item">
                        <a href="#wp-info-reg"><img src="./public/images/bao_mat.png" alt=""></a>
                        <p>Bảo mật thông tin khách hàng</p>
                    </li>
                </div>
                <div class="col-6 col-md-4 col-xl-2">
                    <li class="reason-item">
                        <a href="#wp-info-reg"><img src="./public/images/niemtin.png" alt=""></a>
                        <p class="m-0 p-0">Trao giá trị
                        <p class="m-0 p-0">Nhận niềm tin</p>
                        </p>
                    </li>
                </div>
            </div>
        </ul>
    </div>
</div>
<div class="img-assistant d-none d-sm-block">
    <img src="./public/images/assistant.png" alt="">
</div>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="modal fade" id="modal-reg-success">
                <!-- .fade để cho hiệu ứng mềm mại hơn  -->
                <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered">
                    <!-- .modal-dialog-scrollable có tác dụng cho body scroll khi nội dung quá dài 
            .modal-dialog-centered để căn chỉnh modal ra giữa màn hình
            .modal-sm, .modal-md, .modal-lg, .modal-xl để điều chỉnh kích thước modal
            -->
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title f-20 color-green">Đăng ký thành công <span><i class="fa-regular fa-circle-check f-20 color-orange"></i></span></h5>
                            <button class="close" data-dismiss="modal">
                                <span class="f-20 color-green">&times;</span>
                            </button>
                        </div>
                        <!-- END MODAL-HEADER -->
                        <div class="modal-body">
                            <p class="f-16">Bạn đã đăng ký thành công.</p>
                            <p class="f-16">Vui lòng chờ tổng đài chăm sóc khách hàng liên hệ với bạn.</p>
                            <p class="f-16">Hoặc bạn có thể liên hệ hotline: <span class="f-20 color-green">086.830.0516</span></p>
                        </div>
                        <!-- END MODAL-BODY  -->
                        <div class="modal-footer">
                            <button class="btn bg-green f-16" data-dismiss="modal">
                                Đóng
                            </button>
                        </div>
                        <!-- END MODAL-FOOTER  -->
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-12">
            <div class="modal fade" id="modal-reg-unsuccess">
                <!-- .fade để cho hiệu ứng mềm mại hơn  -->
                <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered">
                    <!-- .modal-dialog-scrollable có tác dụng cho body scroll khi nội dung quá dài 
            .modal-dialog-centered để căn chỉnh modal ra giữa màn hình
            .modal-sm, .modal-md, .modal-lg, .modal-xl để điều chỉnh kích thước modal
            -->
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title f-20 color-green color-red">Đăng ký không thành công <span><i class="fa-regular fa-circle-xmark colored f-20"></i></h5>
                            <button class="close" data-dismiss="modal">
                                <span class="f-20 color-blue">&times;</span>
                            </button>
                        </div>
                        <!-- END MODAL-HEADER -->
                        <div class="modal-body">
                            <p class="f-16">Bạn đã đăng ký <span class="font-weight-bold color-red">không</span> thành công.</p>
                            <p class="f-16">Vui lòng điền đầy đủ thông tin đăng ký để được hỗ trợ nhanh nhất.</p>
                            <p class="f-16">Hoặc bạn có thể liên hệ hotline: <span class="f-20 color-red">086.830.0516</span></p>
                        </div>
                        <!-- END MODAL-BODY  -->
                        <div class="modal-footer">
                            <button class="btn bg-blue text-white f-16" data-dismiss="modal">
                                Đóng
                            </button>
                        </div>
                        <!-- END MODAL-FOOTER  -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
get_footer();
?>