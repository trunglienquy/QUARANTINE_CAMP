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
    <header class="header">
        <div class="info-admin">
            <ul class="list-admin">
                <li>
                    <div class="box-1"></div>
                    <i class='bx bx-heart logo-main'></i>
                </li>
                <li class="notification-and-admin">
                    <div class="bell-ring-main">
                        <div class="bell-ring">
                            <i class='bx bx-bell'>
                                <div class="circle-notification">0</div>
                            </i>
                        </div>
                        <div class="main-notification">
                            <p class="title-empty">Hiện đang không có thông báo nào</p>
                            <p class="have-notification"></p>
                        </div>
                    </div>
                    <div class="information-admin">
                        <div class="avatar-user" id="avatar_user">
                            <img src="https://scontent.fsgn2-3.fna.fbcdn.net/v/t1.6435-1/90416718_1498025510372306_6205470286582644736_n.jpg?stp=dst-jpg_p320x320&_nc_cat=107&ccb=1-7&_nc_sid=2b6aad&_nc_eui2=AeGuH-youRH1u7P0JAnfJgcu7wi5K2NWFKrvCLkrY1YUqmcnAbCLicFccP0CD-Cm_Hwf2rw4bFs0OADvygJIpq29&_nc_ohc=ad-Wp8piJQ8AX-lZyRz&_nc_ht=scontent.fsgn2-3.fna&oh=00_AfAMe1UNp6FoDf978C3xTTDedyqBfVjIFGPVkdeuPqXP8Q&oe=656C00B0"
                                alt="">
                        </div>
                        <div class="sub-menu-user" id="sub_menu_user">
                            <ul class="list-sub">
                                <li class="sub-item">
                                    <a href="#">
                                        <i class='bx bx-user nav_icon'></i>
                                        <span class="nav__name">My Profile</span>
                                    </a>
                                </li>
                                <li class="sub-item">
                                    <a href="#">
                                        <i class='bx bx-log-out nav_icon'></i>
                                        <span class="nav__name">Log out</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="name-user">
                            <p>Le Minh Trung</p>
                            <span>Admin</span>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </header>
    <div class="l-navbar" id="navbar">
        <nav class="nav">
            <div>
                <div class="nav__brand">
                    <ion-icon name="menu-outline" class="nav__toggle" id="nav-toggle"></ion-icon>
                    <a href="#" class="nav__logo">SystemName</a>
                </div>
                <div class="nav__list">
                    <a href="#" class="nav__link active">
                        <i class='bx bxs-first-aid nav_icon'></i>
                        <span class="nav__name">Quản lý bệnh nhân</span>
                    </a>
                    <a href="#" class="nav__link">
                        <i class='bx bx-building nav_icon'></i>
                        <span class="nav__name">Quản lý Phòng</span>
                    </a>

                    <div class="nav__link collapse">
                        <i class='bx bx-injection nav_icon'></i>
                        <span class="nav__name">Quản lý Xét Nghiệm</span>
                    </div>

                    <a href="#" class="nav__link">
                        <i class='bx bxs-user-account nav_icon'></i>
                        <span class="nav__name">Quản lý Nhân Viên</span>
                    </a>
                    <div class="nav__link collapse">
                        <i class='bx bx-plus-medical nav_icon'></i>
                        <span class="nav__name">Quản lý Điều Trị</span>
                    </div>
                    <a href="#" class="nav__link">
                        <i class='bx bx-capsule nav_icon'></i>
                        <span class="nav__name">Quản lý Thuốc</span>
                    </a>
                </div>
            </div>
        </nav>
    </div>

    <div class="container">
        <h2>Thông tin Nhân Viên</h2>
        <form method="post">
            <div class="form-group">
                <label for="ten">Họ và Tên</label>
                <input type="text" id="ten" name="ten" required>
            </div>
            <div class="form-group">
                <label for="diachi">Địa chỉ</label>
                <input type="text" id="diachi" name="diachi" required>
            </div>
            <div class="form-group">
                <label for="gender">Giới tính</label>
                <select name="gender" id="roleEmployee">
                    <option value="Nam">Nam</option>
                    <option value="Nữ">Nữ</option>
                </select>
            </div>
            <div class="form-group">
                <label for="chucvu">Chức vụ</label>
                <select name="role-employee" id="roleEmployee">
                    <option value="Bác Sĩ">Bác Sĩ</option>
                    <option value="Y Tá">Y Tá</option>
                    <option value="Tình nguyện viên">Tình nguyện viên</option>
                </select>
            </div>
            <div class="form-group">
                <label for="phone">Số điện thoại</label>
                <input type="tel" id="phone" name="phone" required>
            </div>
            <div class="form-group">
                <label for="ngaybatdau">Ngày bắt đầu làm việc</label>
                <input type="datetime-local" id="date-start" name="ngaybatdau" required>
            </div>
            <input type="submit" name="submit" value="Lưu Thông Tin">
        </form>
    </div>
    </div>
    <?php
        if (isset($_POST["submit"])){
            $result = $db->execute("SELECT MaNV FROM nhanvien");
            if ($result){
                $num_rows = mysqli_num_rows($result) + 1;
            }
            $pat_lname = $_POST["ten"];
            $pat_role = $_POST["role-employee"];
            $pat_address = $_POST["diachi"];
            $pat_startDay = $_POST["ngaybatdau"];
            $pat_gender = $_POST["gender"];
            $pat_phone = $_POST["phone"];
            $sqlPeople = "INSERT INTO nhanvien (MaNV, Ngaybatdaulamviec, HoTen, DiaChi, Gioitinh, SDT, ChucVu) VALUES
            ('$num_rows', '$pat_startDay', '$pat_lname', '$pat_address', '$pat_gender', '$pat_phone', '$pat_role');
            ";
            $resultInsertEmployee = $db->execute($sqlPeople);
            if ($pat_role == "Bác Sĩ"){
                $sqlDoctor = "INSERT INTO doctors (Ma_Doctors) VALUES ('$num_rows')";
                $resultSqlDoctor = $db->execute($sqlDoctor);
            }
            else if ($pat_role == "Y Tá"){
                $sqlNurse = "INSERT INTO nurse (Ma_Nurse) VALUES ('$num_rows')";
                $resultSqlNurse = $db->execute($sqlNurse);
            }
            else if ($pat_role == "Tình nguyện viên"){
                $sqlVolunteer = "INSERT INTO volunteers (Ma_Volunteers) VALUES ('$num_rows')";
                $resultSqlVolunteer = $db->execute($sqlVolunteer);
            }
            echo '<script>window.location.href = "../nhanvien.php";</script>';
        }
    
    ?>

    <!-- ===== IONICONS ===== -->
    <script src="https://unpkg.com/ionicons@5.1.2/dist/ionicons.js"></script>
    <script src="../js/main-homepage.js"></script>
    <script src="../js/sidebar.js"></script>
</body>

</html>