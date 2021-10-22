<?php 
     include './connect.php';

    if(isset($_POST['them'])) {
        $vehicle_id = $_POST['Ma'];
        $license_no = $_POST['Bienso'];
        $model = $_POST['Model'];
        $year = $_POST['nam'];
        $ctype = $_POST['kieuoto'];
        $drate = $_POST['GTngay']; 
        $wrate = $_POST['GTtuan'];
        $status = $_POST['status'];

        $sql_insert = "INSERT into cars(vehicle_id, license_no, model , year, ctype, drate, wrate, status)
            values (' $license_no','$model','$year','$ctype','$drate','$wrate ','$status')";
            
            $result = mysqli_query($conn,$sql_insert);
            if($result){
                header('location: hienthi.php');
            }else{
                header('location: error.php');

    }
?>

    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
    <div class="container">
        <form class="mt-4" method="POST" action="">
            <div class="mb-3">
                <label for="Ma" class="form-label">Mã phương tiện</label>
                <input type="text" name="Ma" class="form-control" id="Ma" >
            </div>
            <div class="mb-3">
                <label for="Bienso" class="form-label">Biển số</label>
                <input type="text" name="Bienso" class="form-control" id="Bienso" >
            </div>
            <div class="mb-3">
                <label for="Model" class="form-label">Model</label>
                <input type="text" name="Model" class="form-control" id="Model" >
            </div>
            <div class="mb-3">
                <label for="nam" class="form-label">Năm</label>
                <input type="text" name="nam" class="form-control" id="nam" >
            </div>
                <div class="mb-3">
                <label for="kieuoto" class="form-label">Kiểu oto</label>
                <input type="text" name="kieuoto" class="form-control" id="kieuoto" >
            </div>
            <div class="mb-3">
                <label for="GTngay" class="form-label">Giá cho thuê theo ngày</label>
                <input type="text" name="GTngay" class="form-control" id="GTngay" >
            </div>
            
            <div class="mb-3">
                <label for="GTtuan" class="form-label">Giá cho thuê theo tuần</label>
                <input type="text" name="GTtuan" class="form-control" id="GTtuan" >
            </div>
            <button type="submit" class="btn btn-primary mt-3 mb-4" name="themxe">Thêm</button>
        </form>
    </div>
    </body>
    </html>