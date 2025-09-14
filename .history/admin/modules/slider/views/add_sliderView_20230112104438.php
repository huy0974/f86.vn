<?php
get_header();
?>
<?php
get_sidebar();
global $error, $success, $error_mobile, $success_mobile;
?>
<div id="content" class="container-fluid">
    <div class="card">
        <div class="card-header font-weight-bold">
            Thêm slider desktop (1920x473)
        </div>
        <div class="card-body">
            <!-- <form>
                <div class="form-group">
                    <label for="name">Tiêu đề bài viết</label>
                    <input class="form-control" type="text" name="name" id="name">
                </div>
                <div class="form-group">
                    <label for="content">Nội dung bài viết</label>
                    <textarea name="" class="form-control" id="content" cols="30" rows="5"></textarea>
                </div>


                <div class="form-group">
                    <label for="">Danh mục</label>
                    <select class="form-control" id="">
                        <option>Chọn danh mục</option>
                        <option>Danh mục 1</option>
                        <option>Danh mục 2</option>
                        <option>Danh mục 3</option>
                        <option>Danh mục 4</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="">Trạng thái</label>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
                        <label class="form-check-label" for="exampleRadios1">
                            Chờ duyệt
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
                        <label class="form-check-label" for="exampleRadios2">
                            Công khai
                        </label>
                    </div>
                </div>



                <button type="submit" class="btn btn-primary">Thêm mới</button>
            </form> -->
            <style>
                label,
                input {
                    display: block;
                    margin-bottom: 10px;
                }

                p.error {
                    color: #e74c3c;
                }

                p.success {
                    color: #2ecc71;
                }
            </style>

            <form action="" method="post" enctype="multipart/form-data">
                <label for="file">Chọn ảnh:</label>
                <input type="file" name="file" id="file">
                <?php if (!empty($error)) echo file_error() ?>
                <?php if (!empty($success)) echo file_success() ?>
                <input type="submit" class="btn btn-primary" name="add_slider_desktop" value="Thêm mới">
            </form>
        </div>
    </div>
    <div class="card">
        <div class="card-header font-weight-bold">
            Thêm slider mobile (680x400)
        </div>
        <div class="card-body">
            <!-- <form>
                <div class="form-group">
                    <label for="name">Tiêu đề bài viết</label>
                    <input class="form-control" type="text" name="name" id="name">
                </div>
                <div class="form-group">
                    <label for="content">Nội dung bài viết</label>
                    <textarea name="" class="form-control" id="content" cols="30" rows="5"></textarea>
                </div>


                <div class="form-group">
                    <label for="">Danh mục</label>
                    <select class="form-control" id="">
                        <option>Chọn danh mục</option>
                        <option>Danh mục 1</option>
                        <option>Danh mục 2</option>
                        <option>Danh mục 3</option>
                        <option>Danh mục 4</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="">Trạng thái</label>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
                        <label class="form-check-label" for="exampleRadios1">
                            Chờ duyệt
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
                        <label class="form-check-label" for="exampleRadios2">
                            Công khai
                        </label>
                    </div>
                </div>



                <button type="submit" class="btn btn-primary">Thêm mới</button>
            </form> -->

            <form action="" method="post" enctype="multipart/form-data">
                <label for="file_mobile">Chọn ảnh:</label>
                <input type="file" name="file_mobile" id="file_mobile">
                <?php if (!empty($error_mobile)) echo file_error_mobile() ?>
                <?php if (!empty($success_mobile)) echo file_success_mobile() ?>
                <input type="submit" class="btn btn-primary" name="add_slider_mobile" value="Thêm mới">
            </form>
        </div>
    </div>
</div>
<?php
get_footer();
?>