<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Boxicons CSS -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="./css/style-homepage.css">
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
    <div class="home_content">
        <div class="link-direction">
            <a href="#">Trang chủ</a>
            <i class='bx bx-chevron-right'></i>
            <a href="#" class="link-active">Quản lý Thuốc</a>
        </div>
        <div class="header-title">
            <h1>Quản lý Thuốc</h1>
            <i class='bx bx-refresh' onclick="refreshPages()"></i>
        </div>
        <div class="search-sort">
            <div class="search-bar">
                <i class='bx bx-search' ></i>
                <input type="search" name="" id="" placeholder="Tìm kiếm....">
            </div>
            <div class="sort-bar">
                <p>Lọc theo</p>
                <select name="sortdata" id="sort-data">
                    <option value="" disabled selected>Lọc theo...</option>
                    <option value="status">Tình Trạng</option>
                </select>
            </div>
        </div>
        <div class="table-BN">
            <table>
                <tr>
                    <th>Mã Thuốc</th>
                    <th>Tên Thuốc</th>
                    <th>Tác dụng</th>
                    <th>Ngày sản xuất</th>
                    <th>Giá tiền</th>
                </tr>
                <tr class="data-table">
                    <td>169</td>
                    <td>Hapacol</td>
                    <td>Giảm sốt</td>
                    <td>22/08/2020</td>
                    <td>5</td>
                </tr>
                <tr class="data-table">
                    <td>178</td>
                    <td>Paradol</td>
                    <td>Giảm đau đầu</td>
                    <td>10/06/2021</td>
                    <td>10</td>
                </tr>
            </table>
        </div>
        <div class="paging-show-data">
            <div class="show-data-count">
                <p>Hiển thị</p>
                <select name="dataCount" id="data-count">
                    <option value="10" selected>10</option>
                    <option value="10">20</option>
                    <option value="10">30</option>
                </select>
                <p>trong số tổng </p>
                <p class="all-data">2</p>
            </div>
            <div class="paging-data">
                <ul class="page-list">
                    <li class="page-detail">1</li>
                    <li class="page-detail">2</li>
                    <li class="page-detail">3</li>
                    <li class="page-detail">4</li>
                </ul>
            </div>
        </div>
    </div>


    <script src="./js/main-homepage.js"></script>
</body>
</html>