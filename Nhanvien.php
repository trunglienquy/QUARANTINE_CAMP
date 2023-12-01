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
    include("./mvc/Models/DBConfig.php");
    $db = new Database;
    $db->connect();
    $sql = "SELECT nv.MaNV, nv.HoTen, nv.Diachi, nv.Gioitinh, nv.SDT, nv.ChucVu, nv.Ngaybatdaulamviec FROM nhanvien nv";
    $result = $db->execute($sql);
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
            <script>
                function refreshPages() {
                    location.reload();
                }
            </script>
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
                    <th>Họ Tên</th>
                    <th>Địa chỉ</th>
                    <th>Giới tính</th>
                    <th>Số điện thoại</th>
                    <th>Chức vụ</th>
                    <th>Ngày bắt đầu làm việc</th>
                </tr>
                <?php
                    if($result){
                        while($row = $db->getData()){   
                ?>
                <tr class="data-table" data-href="./detail/detailEmployee.php?id=<?= $row['MaNV'] ?>">
                    <td><?php echo $row['MaNV'] ?></td>
                    <td><?php echo $row['HoTen'] ?></td>
                    <td><?php echo $row['Diachi'] ?></td>
                    <td>
                        <?php if ($row['Gioitinh'] == 1){
                            echo 'Nam';
                        }else if ($row['Gioitinh'] == 2){
                            echo 'Nữ';
                        }else{
                            echo '';
                        }
                        ?>
                    </td>
                    <td><?php echo $row['SDT'] ?></td>
                    <td><?php echo $row['ChucVu'] ?></td>
                    <td><?php echo $row['Ngaybatdaulamviec'] ?></td>
                    
                </tr>
                <?php
                        }
                    }
                ?>
            </table>
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