<?php
get_header();
?>
<?php
get_sidebar();
?>
<div id="content" class="container-fluid">
    <div class="card">
        <div class="card-header font-weight-bold">
            Thêm slider
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
            <!DOCTYPE html>
            <html lang="en">

            <head>
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
                <meta charset="UTF-8">
                <meta http-equiv="X-UA-Compatible" content="IE=edge">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <title>Upload file ảnh lên server</title>
            </head>

            <body>
                <h3>Upload slider desktop (1920x470)</h3>
                <form action="" method="post" enctype="multipart/form-data">
                    <label for="file">Send file:</label>
                    <input type="file" name="file" id="file">
                    <?php if (!empty($error)) echo file_error() ?>
                    <?php if (!empty($success)) echo file_success() ?>
                    <input type="submit" name="send_file" value="Thêm mới">
                </form>
            </body>

            </html>
        </div>
    </div>
</div>
<?php
get_footer();
?>