<?php
get_header();
?>
<?php
get_sidebar();
?>
<div id="content" class="container-fluid">
    <div class="card">
        <div class="card-header font-weight-bold d-flex justify-content-between align-items-center">
            <h5 class="m-0 ">Danh sách bài viết</h5>
            <div class="form-search form-inline">
                <form action="#">
                    <input type="" class="form-control form-search" placeholder="Tìm kiếm">
                    <input type="submit" name="btn-search" value="Tìm kiếm" class="btn btn-primary">
                </form>
            </div>
        </div>
        <div class="card-body">
            <!-- <div class="analytic">
                <a href="" class="text-primary">Trạng thái 1<span class="text-muted">(10)</span></a>
                <a href="" class="text-primary">Trạng thái 2<span class="text-muted">(5)</span></a>
                <a href="" class="text-primary">Trạng thái 3<span class="text-muted">(20)</span></a>
            </div>
            <div class="form-action form-inline py-3">
                <select class="form-control mr-1" id="">
                    <option>Chọn</option>
                    <option>Tác vụ 1</option>
                    <option>Tác vụ 2</option>
                </select>
                <input type="submit" name="btn-search" value="Áp dụng" class="btn btn-primary">
            </div> -->
            <table class="table table-striped table-checkall">
                <thead>
                    <tr>
                        <th scope="col">
                            <input name="checkall" type="checkbox">
                        </th>
                        <th scope="col">#</th>
                        <th scope="col">Họ và tên</th>
                        <th scope="col">SĐT</th>
                        <th scope="col">Địa chỉ</th>
                        <th scope="col">Giấy tờ chứng minh</th>
                        <th scope="col">Cần vay</th>
                        <th scope="col">Giấy tờ để lại</th>
                        <th scope="col">Thời gian đăng ký</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    if (!empty($list_customer_today)) {
                    ?>
                        <tr>
                            <?php
                            $i = 1;
                            foreach ($list_customer_today as $key => $customer_item) {
                                $i++;
                            ?>
                                <th scope="col">
                                    <input name="checkall" type="checkbox">
                                </th>
                                <td><?php echo $i ?></td>
                                <td><?php echo $customer_item['fullname'] ?></td>
                                <td><?php echo $customer_item['number_phone'] ?></td>
                                <td><?php echo $customer_item['address'] ?></td>
                                <td><?php echo $customer_item['proof_document'] ?></td>
                                <td><?php echo $customer_item['number_loan'] ?></td>
                                <td><?php echo $customer_item['list_exhibit'] ?></td>
                                <td><?php echo $customer_item['time_reg'] ?></td>
                            <?php
                            }
                            ?>
                        </tr>
                    <?php
                    } else {
                    ?>
                        <p class="text-center">Không có dữ liệu</p>
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
