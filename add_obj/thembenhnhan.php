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
    <title>Document</title>
</head>
<body>
    <div class="sidebar">
        <div class="menu-icon">
            <i class='bx bx-menu-alt-left'></i>
        </div>
        <ul class="nav-link">
            <li>
                <a href="Benhnhan.php">
                    <i class='bx bx-home-alt' ></i>
                    <span>Quản lý Bệnh Nhân</span>
                </a>
                <span class="tooltip">Quản lý Bệnh Nhân</span>
            </li>
            <li>
                <a href="Phong.php">
                    <i class='bx bx-home-alt' ></i>
                    <span>Quản lý Phòng</span>
                </a>
                <span class="tooltip">Quản lý Phòng </span>
            </li>
            <li>
                <a href="xetnghiem.php">
                    <i class='bx bx-home-alt' ></i>
                    <span>Quản lý Xét Nghiệm</span>
                </a>
                <span class="tooltip">Quản lý Xét Nghiệm</span>
            </li>
            <li>
                <a href="Nhanvien.php">
                    <i class='bx bx-home-alt' ></i>
                    <span>Quản lý Nhân Viên</span>
                </a>
                <span class="tooltip">Quản lý Nhân Viên</span>
            </li>
            <li>
                <a href="dieutri.php">
                    <i class='bx bx-home-alt' ></i>
                    <span>Quản lý Điều Trị</span>
                </a>
                <span class="tooltip">Quản lý Điều Trị</span>
            </li>
            <li>
                <a href="thuoc.php">
                    <i class='bx bx-home-alt' ></i>
                    <span>Quản lý Thuốc</span>
                </a>
                <span class="tooltip">Quản lý Thuốc</span>
            </li>
        </ul>
    </div>
    <div class="info-admin">
        <ul>
            <li>
                <div class="box-1"></div>
                <i class='bx bx-heart'></i>
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
                    <div class="info-1">
                        <i class='bx bx-expand-horizontal'></i>
                    </div>
                    <div class="info-2">
                        <p> <strong>Le Minh Trung</strong></p>
                        <span>Admin</span>
                    </div>
                </div>
            </li>
        </ul>
    </div>

    <div class="container">
        <h2>Thông tin Bệnh Nhân</h2>
        <form>
            <div class="form-group">
                <label for="Ma so">Mã số</label>
                <input type="text" id="maso" name="maso" required>
            </div>
            <div class="form-group">
                <label for="ten">Họ và Tên:</label>
                <input type="text" id="ten" name="ten" required>
            </div>
            <div class="form-group">
                <label for="Ma so">Số CCCD</label>
                <input type="text" id="maso" name="maso" required>
            </div>
            <div class="form-group">
                <label for="gioi-tinh">Giới Tính:</label>
                <select id="gioi-tinh" name="gioi-tinh">
                    <option value="nam">Nam</option>
                    <option value="nu">Nữ</option>
                </select>
            </div>
            <div class="form-group">
                <label for="Ma so">Địa chỉ</label>
                <input type="text" id="maso" name="maso" required>
            </div>
            <div class="form-group">
                <label for="Ma so">Bệnh lý</label>
                <input type="text" id="maso" name="maso" required>
            </div>
            <div class="form-group">
                <label for="Ma so">Triệu chứng</label>
                <input type="text" id="maso" name="maso" required>
            </div>
            <div class="form-group">
                <label for="Ma so">Tình trạng</label>
                <input type="text" id="maso" name="maso" required>
            </div>
            <div class="form-group">
                <label for="Ma so">Mã phòng</label>
                <input type="text" id="maso" name="maso" required>
            </div>
            
            <input type="submit" value="Lưu Thông Tin">
        </form>
    </div>
    </div>


    <script src="../js/main-homepage.js"></script>
</body>
</html>