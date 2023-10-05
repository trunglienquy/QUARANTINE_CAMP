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
                <a href="#">
                    <i class='bx bx-home-alt' ></i>
                    <span>Trang chủ</span>
                </a>
                <span class="tooltip">Trang chủ</span>
            </li>
            <li>
                <a href="#">
                    <i class='bx bx-home-alt' ></i>
                    <span>Trang chủ</span>
                </a>
                <span class="tooltip">Trang chủ</span>
            </li>
            <li>
                <a href="#">
                    <i class='bx bx-home-alt' ></i>
                    <span>Trang chủ</span>
                </a>
                <span class="tooltip">Trang chủ</span>
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
        <div class="header-title">
            <h1>Quản lý bệnh nhân</h1>
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
                    <th>Mã BN</th>
                    <th>Họ và Tên</th>
                    <th>Số CMND</th>
                    <th>Giới tính</th>
                    <th>Địa chỉ</th>
                    <th>Bệnh lý</th>
                    <th>Triệu chứng</th>
                    <th>Tình trạng</th>
                    <th>Mã phòng</th>
                </tr>
                <tr class="data-table">
                    <td>data1</td>
                    <td>data1</td>
                    <td>data1</td>
                    <td>data1</td>
                    <td>data1</td>
                    <td>data1</td>
                    <td>data1</td>
                    <td>data1</td>
                    <td>data1</td>
                </tr>
                <tr class="data-table">
                    <td>data2</td>
                    <td>data2</td>
                    <td>data2</td>
                    <td>data2</td>
                    <td>data2</td>
                    <td>data2</td>
                    <td>data1</td>
                    <td class="status-BN">Nghiêm trọng</td>
                    <td>data2</td>
                </tr>
            </table>
        </div>
    </div>


    <script src="./js/main-homepage.js"></script>
</body>
</html>