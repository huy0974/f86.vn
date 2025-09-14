<?php
get_header();
?>
<?php
get_sidebar();
?>
<style>
    tbody td img {
        width: 80px;
        height: auto;
    }
</style>
<div id="content" class="container-fluid">
    <div class="card">
        <div class="card-header font-weight-bold d-flex justify-content-between align-items-center">
            <h5 class="m-0 ">Danh sách slider destop (1920x473)</h5>
        </div>
        <div class="card-body">
            <table class="table table-striped table-checkall">
                <thead class="text-center">
                    <tr>
                        <th scope="col">
                            <input name="checkall" type="checkbox">
                        </th>
                        <th scope="col">#</th>
                        <th scope="col">Ảnh</th>
                        <th>Người tạo</th>
                        <th scope="col">Ngày tạo</th>
                        <th scope="col">Tác vụ</th>
                    </tr>
                </thead>
                <tbody class="text-center">
                    <?php
                    $i = 0;
                    foreach ($slider_desktop as $key => $value) {
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
                            <td><button class="btn btn-success btn-sm rounded-0" type="button" data-toggle="tooltip" data-placement="top" title="Edit"><i class="fa fa-edit"></i></button>
                                <button class="btn btn-danger btn-sm rounded-0" type="button" data-toggle="tooltip" data-placement="top" title="Delete"><i class="fa fa-trash"></i></button>
                            </td>

                        </tr>
                    <?php
                    }
                    ?>
                </tbody>
            </table>
            <nav aria-label="Page navigation example">
                <ul class="pagination">
                    <li class="page-item">
                        <a class="page-link" href="#" aria-label="Previous">
                            <span aria-hidden="true">Trước</span>
                            <span class="sr-only">Sau</span>
                        </a>
                    </li>
                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item">
                        <a class="page-link" href="#" aria-label="Next">
                            <span aria-hidden="true">&raquo;</span>
                            <span class="sr-only">Next</span>
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
</div>
<?php
get_footer();
