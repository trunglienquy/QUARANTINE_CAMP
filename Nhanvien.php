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
            <a href="#" class="link-active">Quản lý Nhân viên</a>
        </div>
        <div class="header-title">
            <h1>Quản lý Nhân viên</h1>
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
        <div class="add-new-obj">
            <form action="./add_obj/themnhanvien.php" method="post">
                <input type="submit" value="Thêm nhân viên">
            </form>
        </div>
        <div class="table-BN">
            <table>
                <tr class="tr-title">
                    <th>Mã Nhân viên</th>
                    <th>Họ Tên Nhân viên</th>
                    <th>Số điện thoại</th>
                    <th>Địa chỉ</th>
                    <th>Ngày bắt đầu làm việc</th>
                </tr>
                <tr class="data-table" data-href="./detail/detailEmployee.php">
                    <td>NV1</td>
                    <td>Nguyễn Văn A</td>
                    <td>9013576</td>
                    <td>23, Lạc Long Quân, Phường 6, Quận 10, TPHCM</td>
                    <td>20/01/2022</td>
                </tr>
                <tr class="data-table" data-href="./detail/detailEmployee.php">
                    <td>NV2</td>
                    <td>Nguyễn Văn B</td>
                    <td>921458</td>
                    <td>273, An Dương Vương, Phường 3, Quận 5, TPHCM</td>
                    <td>22/03/2022</td>
                </tr>
                <tr class="data-table" data-href="./detail/detailEmployee.php">
                    <td>NV3</td>
                    <td>Nguyễn Văn C</td>
                    <td>3548551</td>
                    <td>268, Điện Biên Phủ, Phường 7, Quận 3, TPHCM</td>
                    <td>20/10/2022</td>
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


    <script src="./js/main-homepage.js"></script>
    <script src="./js/sidebar.js"></script>
    <!-- ===== IONICONS ===== -->
    <script src="https://unpkg.com/ionicons@5.1.2/dist/ionicons.js"></script>


    <script>
        document.addEventListener("DOMContentLoaded", function () {
            var rows = document.querySelectorAll(".data-table");
            rows.forEach(function (row) {
                row.addEventListener("click", function () {
                    var link = this.getAttribute("data-href");
                    if (link) {
                        window.location.href = link;
                    }
                });
            });
        });
    </script>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function () {
            // When the admin name is clicked, toggle the Log Out link visibility
            $('#adminName').on('click', function () {
                $('#logOutLink').toggleClass('active');
            });
        });
    </script>

</body>

</html>