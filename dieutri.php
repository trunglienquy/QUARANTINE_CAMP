<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Boxicons CSS -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="./css/style-homepage.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/3.4.0/remixicon.css" crossorigin="">
    <title>Document</title>
</head>

<body>
    <?php
        include("./include/header.php");
    ?>
    <div class="home_content">
        <div class="link-direction">
            <a href="#">Trang chủ</a>
            <i class='bx bx-chevron-right'></i>
            <a href="#" class="link-active">Quản lý Điều trị</a>
        </div>
        <div class="header-title">
            <h1>Quản lý Điều trị</h1>
            <i class='bx bx-refresh' onclick="refreshPages()"></i>
        </div>
        <div class="search-sort">
            <div class="search-bar">
                <i class='bx bx-search'></i>
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
                <tr class="tr-title">
                    <th>Mã Nhân viên</th>
                    <th>Mã Bệnh nhân</th>
                    <th>Số CMND</th>
                    <th>Ngày và giờ điều trị</th>
                    <th>Kết quả</th>
                </tr>
                <tr class="data-table">
                    <td>NV1</td>
                    <td>BN1</td>
                    <td>569846562</td>
                    <td>11:30, 27/09/2023</td>
                    <td>Dương tính</td>
                </tr>
                <tr class="data-table">
                    <td>NV2</td>
                    <td>BN2</td>
                    <td>36489977</td>
                    <td>14:00, 27/09/2023</td>
                    <td>Dương tính</td>
                </tr>
            </table>
        </div>
        <div class="paging-show-data">
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

    <!-- ===== IONICONS ===== -->
    <script src="https://unpkg.com/ionicons@5.1.2/dist/ionicons.js"></script>
    <script src="./js/main-homepage.js"></script>
    <script src="./js/sidebar.js"></script>
</body>

</html>