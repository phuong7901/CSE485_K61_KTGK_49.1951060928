
<?php 
     include './connect.php';
         if(isset($_POST['submit'])) {
        $vehicle_id = $_POST['Ma'];
        $license_no = $_POST['Bienso'];
        $model = $_POST['Model'];
        $year = $_POST['nam'];
        $ctype = $_POST['kieuoto'];
        $drate = $_POST['GTngay']; 
        $wrate = $_POST['GTtuan'];
        $status = $_POST['status'];

        $sql_update = "UPDATE cars set vehicle_id = ' $vehicle_id',license_no = ' $license_no',model = '$model',year  = '$year', ctype = '$ctype ',drate = '$drate', wrate = '$wrate', status = '$status', where vehicle_id = '$vehicle_id',";
        $result=mysqli_query($conn,$sql_update);
        if($result){
            header('location: hienthi.php');
        }else{
            header('location: error.php');

}
        
    }
?>

    
    <?php 
    require ("connect.php");
        if(isset($_GET['vehicle_id'])) {
            $id = $_GET['vehicle_id'];
            $sql = "SELECT vehicle_id, license_no, model, year ,  ctype, drate, wrate, status from cars";
            $result = mysqli_query($conn, $sql); 
        }
    ?>
    <div class="container">
        <?php while($row = mysqli_fetch_assoc($result)){?>
        <form class="mt-4" method="POST" action="">
            <div class="mb-3">
                <label for="Ma" class="form-label">Mã phương tiện</label>
                <input type="text" name="Mã phương tiện" class="form-control" id="Mã phương tiện" value="<?php echo $row['vehicle_id']; ?>">
            </div>
            <div class="mb-3">
                <label for="Bienso" class="form-label">Biển số xe</label>
                <input type="text" name="Biển số xe" class="form-control" id="Biển số xe" value="<?php echo $row['license_no']; ?>">
            </div>
            <div class="mb-3">
                 <label for="Model" class="form-label">Model</label>
                <input type="text" name="Model" class="form-control" id="Model" value="<?php echo $row['model']; ?>">
            </div>
            <div class="mb-3">
                 <label for="nam" class="form-label">Năm</label>
                 <input type="text" name="nam" class="form-control" id="nam" value="<?php echo $row['year']; ?>">
            </div>
            <div class="mb-3">
                <label for="kieuoto" class="form-label">Kiểu oto</label>
                <input type="text" name="kieuoto" class="form-control" id="kieuoto" value="<?php echo $row['ctype']; ?>">
            </div>
            <div class="mb-3">
               <label for="GTngay" class="form-label">Giá cho thuê theo ngày</label>
               <input type="text" name="GTngay" class="form-control" id="GTngay" value="<?php echo $row['drate']; ?>">
            </div>
            <div class="mb-3">
               <label for="GTtuan" class="form-label">Giá cho thuê theo tuần</label>
               <input type="text" name="GTngay" class="form-control" id="GTtuan" value="<?php echo $row['wrate']; ?>">
            </div>
            <div>
                <label for="status" class="form-label">status</label>
                <input type="text" name="status" class="form-control" id="status"  value="<?php echo $row['status']; ?>"> 
            </div>
            <input type="hidden" name="reci_id" class="form-control" id="reci_id" value="<?php echo $row['vehicle_id']; ?>">
            <button type="submit" class="btn btn-primary mt-3 mb-4" name="submit">Lưu</button>
        </form>
        <?php } ?>
    </div> -->
