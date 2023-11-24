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
            <a href="#" class="link-active">Quản lý Xét nghiệm</a>
        </div>
        <div class="header-title">
            <h1>Quản lý Xét nghiệm</h1>
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
                    <th>Mã ca Xét nghiệm</th>
                    <th>Kết quả</th>
                    <th>Giá trị ngưỡng chu kì</th>
                    <th>Nồng độ Oxi</th>
                    <th>Tốc độ hô hấp</th>
                    <th>Mã bệnh nhân</th>
                </tr>
                <tr class="data-table">
                    <td>XN01</td>
                    <td>TRUE</td>
                    <td>ct</td>
                    <td>0.5</td>
                    <td>21</td>
                    <td>BN1</td>
                </tr>
                <tr class="data-table">
                    <td>XN02</td>
                    <td>TRUE</td>
                    <td>ct</td>
                    <td>0.3</td>
                    <td>21</td>
                    <td>BN2</td>
                </tr>
                <tr class="data-table">
                    <td>XN03</td>
                    <td>TRUE</td>
                    <td>ct</td>
                    <td>0.7</td>
                    <td>26</td>
                    <td>BN3</td>
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