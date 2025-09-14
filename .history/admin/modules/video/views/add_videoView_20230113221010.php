<?php
get_header();
?>
<?php
get_sidebar();
global $error, $success;
?>
<div id="content" class="container-fluid">
    <h1 class="text-center text-uppercase">Đổi video</h1>
    <div class="card">
        <div class="card-header font-weight-bold">
            Đổi video
        </div>
        <div class="card-body">
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
                <label for="file">Chọn video:</label>
                <input type="file" name="file" id="file">
                <?php if (!empty($error)) echo file_error() ?>
                <?php if (!empty($success)) echo file_success() ?>
                <input type="submit" class="btn btn-primary" name="change_video" value="Thêm mới">
            </form>
        </div>
    </div>
</div>
<?php
get_footer();
?>