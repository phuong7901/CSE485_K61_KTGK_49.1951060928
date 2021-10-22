<?php
include './connect.php';
?>
     
    <main class="bg-warning">
        <div class="container">
            <a href="them.php" class="mt-4"><button class="btn btn-primary mt-4">Thêm</button></a>
            <div class="row">
                <div></div>
                <div class="directory-table">
                    <div class="table">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">Mã phương tiện</th>
                                    <th scope="col">Biển số xe</th>
                                    <th scope="col">Model</th>
                                    <th scope="col">Năm sản xuất</th>
                                    <th scope="col">Kiểu oto</th>
                                    <th scope="col">Giá cho thuê theo ngày</th>
                                    <th scope="col">Giá cho thuê theo tuần</th>
                                    <th scope="col">Trạng thái</th>
                                    <th scope="col">Sửa</th>
                                    <th scope="col">Xóa</th>
                                </tr>
                            </thead>
                            <tbody>
                                <!-- Nhan xet :day la vung du lieu thay doi duoc-->
                                <?php
                                //b1 :ket noi csdl
                                include './connect.php';
                                //b2 khai bao va thuc hien truy vấn
                                $sql = "SELECT vehicle_id, license_no, model, year, ctype, drate, wrate, status 
                                 from cars ";
                                $result = mysqli_query($conn, $sql);

                                //b3  kiem tra va xu li tap ket qua  - ung voi cau lenh select  
                                if (mysqli_num_rows($result) > 0) {
                                    $i = 1;
                                    while ($row = mysqli_fetch_assoc($result)) {
                                ?>
                                        <tr>
                                            <th scope="row"><?php echo $i; ?></th>
                                            <td><?php echo $row['vehicle_id']; ?></td>
                                            <td><?php echo $row['license_no']; ?></td>
                                            <td><?php echo $row['model']; ?></td>
                                            <td><?php echo $row['year']; ?></td>
                                            <td><?php echo $row['ctype']; ?></td>
                                            <td><?php echo $row['drate']; ?></td>
                                            <td><?php echo $row['wrate']; ?></td>
                                            <td><?php echo $row['status']; ?></td>
                                    
                                            <td><a href = "sua.php?id='.$row['vehicle_id'].'"><i class="fal fa-user-edit"></i></a></td>';
                                           <td><a href = "xoa.php?id='.$row['vehicle_id'].'"><i class="far fa-user-minus"></i></a></td>';
                                        </tr>
                                <?php
                                        $i++;
                                    }
                                }

                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </main>
<?php 