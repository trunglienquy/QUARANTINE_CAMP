<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Boxicons CSS -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="../css/style-homepage.css">
    <link rel="stylesheet" href="../css/style-detail.css">
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
                    <i class='bx bx-home-alt'></i>
                    <span>Quản lý Bệnh Nhân</span>
                </a>
                <span class="tooltip">Quản lý Bệnh Nhân</span>
            </li>
            <li>
                <a href="Phong.php">
                    <i class='bx bx-home-alt'></i>
                    <span>Quản lý Phòng</span>
                </a>
                <span class="tooltip">Quản lý Phòng </span>
            </li>
            <li>
                <a href="xetnghiem.php">
                    <i class='bx bx-home-alt'></i>
                    <span>Quản lý Xét Nghiệm</span>
                </a>
                <span class="tooltip">Quản lý Xét Nghiệm</span>
            </li>
            <li>
                <a href="Nhanvien.php">
                    <i class='bx bx-home-alt'></i>
                    <span>Quản lý Nhân Viên</span>
                </a>
                <span class="tooltip">Quản lý Nhân Viên</span>
            </li>
            <li>
                <a href="dieutri.php">
                    <i class='bx bx-home-alt'></i>
                    <span>Quản lý Điều Trị</span>
                </a>
                <span class="tooltip">Quản lý Điều Trị</span>
            </li>
            <li>
                <a href="thuoc.php">
                    <i class='bx bx-home-alt'></i>
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
                        <p><strong id="adminName">Le Minh Trung</strong></p>
                        <span>Admin</span>
                        <a href="logout.php" id="logOutLink">Log Out</a>
                    </div>
                </div>
            </li>
        </ul>
    </div>
    <div class="home_content">
        <div class="type-employee">
            <div class="img-and-info">
                <img src="https://th.bing.com/th/id/R.49376b553f3b5f5b67409592744e5579?rik=WzvpBRDluxLgBg&pid=ImgRaw&r=0" alt="">
                <div class="type">
                    <h4>David Nguyen</h4>
                    <p>Bác sĩ</p>
                </div>
            </div>
        </div>
        <div class="info-employee">
            <div class="info-detail">
                <h2>Thông tin cá nhân</h2>
                <div class="flex-info"><p><strong>Mã số nhân viên: </strong><p>00001</p></p></div>
                <div class="flex-info"><p><strong>Họ và tên: </strong><p>David Nguyen</p></p></div>
                <div class="flex-info"><p><strong>Chức vụ: </strong><p>Doctor</p></p></div>
                <div class="flex-info"><p><strong>Địa chỉ: </strong><p>VietNam Abc Road DEF</p></p></div>
                <div class="flex-info"><p><strong>Số điện thoại: </strong><p>0364781722</p></p></div>
            </div>
            <div class="patient-management">
                <table>
                    <tr>
                        <th>Mã số bệnh nhân</th>
                        <th>Họ và tên</th>
                        <th>Địa chỉ</th>
                        <th>Ngày vào viện</th>
                        <th>Ngày ra viện</th>
                        <th>Chuẩn đoán</th>
                        <th>Trạng thái</th>
                    </tr>
                    <tr>
                        <td>0001</td>
                        <td>Phan Tuan Anh</td>
                        <td>VietNam ABC</td>
                        <td>25-10-2023</td>
                        <td>28-10-2023</td>
                        <td>Covid-19</td>
                        <td><strong>Đã điều trị</strong></td>
                    </tr>
                </table>
                <div class="show-data-count show-data-detail">
                    <p>Hiển thị</p>
                    <select name="dataCount" id="data-count">
                        <option value="10" selected>10</option>
                        <option value="10">20</option>
                        <option value="10">30</option>
                    </select>
                    <p>trong số tổng </p>
                    <p class="all-data">1</p>
                </div>
            </div>
        </div>
    </div>


    <script src="./js/main-homepage.js"></script>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            // When the admin name is clicked, toggle the Log Out link visibility
            $('#adminName').on('click', function() {
                $('#logOutLink').toggleClass('active');
            });
        });
    </script>


</body>

</html>