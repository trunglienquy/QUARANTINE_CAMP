<!--Tạo nút thêm mới bệnh nhân, tạo form thêm bệnh nhân, tạo nút đăng xuất thông tin tài khoản admin
tạo nút thêm mới bệnh nhân
tạo form thêm bệnh nhân
tạo nút đăng xuất và thông tin tài khoản admin -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Boxicons CSS -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="../css/style-homepage.css">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <title>Document</title>
</head>
<?php
include("../mvc/Models/DBConfig.php");
$db = new Database;
$db->connect();
?>
<body>
    <?php
        include("../include/header.php");
    ?>

    <div class="container">
        <h2>Thông tin Bệnh Nhân</h2>
        <form method="post">
            <div class="form-group">
                <label for="ten">Họ và Tên</label>
                <input type="text" id="ten" name="ten" required>
            </div>
            <div class="form-group">
                <label for="socmnd">Số CMND</label>
                <input type="text" id="socmnd" name="socmnd" required>
            </div>
            <div class="form-group">
                <label for="sdt">Số điện thoại</label>
                <input type="text" id="sdt" name="sdt" required>
            </div>
            <div class="form-group">
                <label for="diachi">Địa chỉ</label>
                <input type="text" id="diachi" name="diachi" required>
            </div>
            <div class="form-group">
                <label for="gender">Giới Tính:</label>
                <select id="gender" name="gender">
                    <option value="nam">Nam</option>
                    <option value="nu">Nữ</option>
                </select>
            </div>
            <div class="form-group">
                <label for="chuyendentu">Chuyển đến từ</label>
                <input type="text" id="chuyendentu" name="chuyendentu" required>
            </div>
            <div class="form-group">
                <label for="thongtin">Thông tin xét nghiệm ban đầu</label>
                <input type="text" id="thongtin" name="thongtin" required>
            </div>
            <div class="form-group">
                <label for="staffSelection">Mã Staff</label>
                <select name="staffSelection" id="staffSelection">
                    <?php
                        $sqlGetStaff = "SELECT s.Ma_Staff, nv.HoTen FROM nhanvien nv, staff s WHERE nv.MaNV = s.Ma_Staff";
                        $resultGetStaff = $db->execute($sqlGetStaff);
                        while ($row = $resultGetStaff->fetch_assoc()) {
                    ?>
                    <option value="<?php echo $row['Ma_Staff'] ?>"><?php echo $row['Ma_Staff'] ?> - <?php echo $row['HoTen'] ?></option>
                    <?php
                        }
                    ?>
                </select>
            </div>
            <div class="form-group">
                <label for="ngaybatdau">Ngày nhập viện</label>
                <input type="datetime-local" id="date-start" name="ngaybatdau" required>
            </div>
            <div class="form-group">
                <label for="ngayketthuc">Ngày xuất viện</label>
                <input type="datetime-local" id="date-start" name="ngayketthuc" required>
            </div>
            <div class="form-group">
                <label for="nurseSelection">Mã Nurse</label>
                <select name="nurseSelection" id="nurseSelection">
                    <?php
                        $sqlGetNurse = "SELECT n.Ma_Nurse, nv.HoTen FROM nhanvien nv, nurse n WHERE nv.MaNV = n.Ma_Nurse";
                        $resultGetNurse = $db->execute($sqlGetNurse);
                        while ($row = $resultGetNurse->fetch_assoc()) {
                    ?>
                    <option value="<?php echo $row['Ma_Nurse'] ?>"><?php echo $row['Ma_Nurse'] ?> - <?php echo $row['HoTen'] ?></option>
                    <?php
                        }
                    ?>
                </select>
            </div>
            <input type="submit" name="submit" value="Lưu Thông Tin">
        </form>
    </div>
    </div>
    <?php
        if (isset($_POST["submit"])){
            $result = $db->execute("SELECT MaBN FROM benhnhan");
            if ($result){
                $num_rows = mysqli_num_rows($result) + 1;
            }
            $pat_lname = $_POST["ten"];
            $pat_socmnd = $_POST["socmnd"];
            $pat_phone = $_POST["sdt"];
            $pat_address = $_POST["diachi"];
            $pat_gender = $_POST["gender"];
            $pat_chuyendentu = $_POST["chuyendentu"];
            $pat_thongtin = $_POST["thongtin"];
            $pat_mastaff = $_POST["staffSelection"];
            $pat_startDay = $_POST["ngaybatdau"];
            $pat_endDay = $_POST["ngayketthuc"];
            $pat_manurse = $_POST["nurseSelection"];
            $sqlPeople = "INSERT INTO benhnhan (MaBN, HoTen, SoCMND, SDT, DiaChi, Gioitinh, chuyendentu, thongtinxnbandau, Ma_Staff, Ngay_nhap_vien, Ngay_xuat_vien, Ma_Nurse) VALUES
            ('$num_rows', '$pat_lname', '$pat_socmnd', '$pat_phone',
            '$pat_address', '$pat_gender', '$pat_chuyendentu',
            '$pat_thongtin', '$pat_mastaff', '$pat_startDay',
            '$pat_endDay', '$pat_manurse');
            ";
            $resultInsertEmployee = $db->execute($sqlPeople);
            if ($resultInsertEmployee) {
                echo '<script>window.location.href = "../Benhnhan.php";</script>';
            }else{
                echo '<script>window.location.href = "../Benhnhan.php";</script>';
            }
        }

    
    ?>

    <!-- ===== IONICONS ===== -->
    <script src="https://unpkg.com/ionicons@5.1.2/dist/ionicons.js"></script>

    <script src="../js/main-homepage.js"></script>
    <script src="../js/sidebar.js"></script>
</body>
</html>