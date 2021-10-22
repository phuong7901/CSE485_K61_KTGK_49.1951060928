<?php
    include './connect.php';

?>
 
            <h1 class="text-center">Quản lí xe</h1>
    <div class="container">
    <a href="HienthiCT.php" class="mt-4"><button class="btn btn-primary mt-4">Hiển thị thông tin chi tiết</button></a>
            '<td><a href = "HienthiCT.php?id='.$row['cars'].'"><i class="fas fa-info-circle"></i></a></td>';
        <table class="table table-dark table-hover">
            <thead>
                <tr>
                <th scope="col">Mã phương tiện </th>
                <th scope="col">Biển số xe</th>
                <th scope="col">Model</th>
                <th scope="col">Năm sản suất</th>
                <th scope="col">Kiểu oto</th>
                <th scope="col">Giá cho thuê theo ngày</th>
                <th scope="col">Giá cho thuê theo tuần</th>
                <th scope="col">Trạng thái</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    include './connect.php';
                    $sql = "SELECT * FROM cars";
                    $result = mysqli_query($conn,$sql);
                    if(mysqli_num_rows($result) > 0)
                    {   
                        $i = 1;
                        while($row = mysqli_fetch_assoc($result)){
                            echo '<tr>';
                            echo '<th scope="row">'.$row['vehicle_id'].'</th>';
                            echo '<td>'.$row['license_no'].'</td>';
                            echo '<td>'.$row['model'].'</td>';
                            echo '<td>'.$row['year'].'</td>';
                            echo '<td>'.$row['ctype'].'</td>';
                            echo '<td>'.$row['drate'].'</td>';
                            echo '<td>'.$row['wrate'].'</td>';
                            echo '<td>'.$row['status'].'</td>';
                        
                            echo '</tr>';
                            $i++;
                           
                        }
                    }
                ?>
                <tr>
            </tbody>
        </table>
    </div>
            

   