<?php
get_header();
?>
<?php
get_sidebar();
?>
<style>
    tbody td img {
        width: auto;
        height: 75px;
    }
</style>
<div id="content" class="container-fluid">
    <h1 class="text-center">Ảnh trang home</h1>
    <div class="card">
        <div class="card-header font-weight-bold d-flex justify-content-between align-items-center">
            <h5 class="m-0 ">Ảnh trang home</h5>
        </div>
        <div class="card-body">
            <table class="table table-striped table-checkall">
                <thead class="text-center">
                    <tr>
                        <th scope="col">
                            <input name="checkall" type="checkbox">
                        </th>
                        <th scope="col">#</th>
                        <th scope="col">Video</th>
                        <th>Người tạo</th>
                        <th scope="col">Ngày tạo</th>
                    </tr>
                </thead>
                <tbody class="text-center">
                    <?php
                    $i = 0;
                    foreach ($video as $key => $value) {
                        $i++;
                    ?>
                        <tr>
                            <td>
                                <input type="checkbox">
                            </td>
                            <td scope="row"><?php echo $i ?></td>
                            <td><img src="<?php echo $value['path_admin'] ?>" alt=""></td>
                            <td><?php echo $value['creator'] ?></td>
                            <td><?php echo $value['created_date'] ?></td>
                        </tr>
                    <?php
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<?php
get_footer();
?>