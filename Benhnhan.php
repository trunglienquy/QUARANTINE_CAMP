<!DOCTYPE html>
<html lang="en">
<?php
    include ("./mvc/Models/DBConfig.php");
    $db = new Database;
    $db->connect();
    $sql = "SELECT bn.MaBN, CONCAT(bn.Ho, ' ', bn.Ten) AS FullName, bn.SoCMND, bn.Gioitinh, bn.DiaChi, bl.benhlydikem, tc.trieuchung, p.MaPhong FROM benhnhan bn JOIN benhly bl ON bn.mabn = bl.mabn JOIN phong p ON bn.mabn = p.mabn JOIN trieuchung tc ON bn.mabn = tc.mabn";
    $result = $db->execute($sql);
?>
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
        include("./include/header.php") 
    ?>
    <div class="home_content">
        <div class="link-direction">
            <a href="#">Trang chủ</a>
            <i class='bx bx-chevron-right'></i>
            <a href="#" class="link-active">Quản lý bệnh nhân</a>
        </div>
        <div class="header-title">
            <h1>Quản lý bệnh nhân</h1>
            <i class='bx bx-refresh' onclick="refreshPages()"></i>
        </div>
        <div class="search-sort">
            <form action="" method="post">
                <div class="search-bar">
                    <i class='bx bx-search'></i>
                    <input type="search" name="searchdata" id="searchdata" placeholder="Tìm kiếm....">
                    <button type="submit" name="search">Xác nhận</button>
                </div>
            </form>
            <div class="sort-bar">
                <p>Lọc theo</p>
                <select name="sortdata" id="sort-data">
                    <option value="" disabled selected>Lọc theo...</option>
                    <option value="status">Tình Trạng</option>
                </select>
            </div>
        </div>
        <div class="add-new-obj">
            <form action="./add_obj/thembenhnhan.php" method="post">
                <input type="submit" value="Thêm bệnh nhân">
            </form>
        </div>
        <div class="table-BN">
            <table>
                <tr class="tr-title">
                    <th>Mã Bệnh nhân</th>
                    <th>Họ và Tên</th>
                    <th>Số CMND</th>
                    <th>Giới tính</th>
                    <th>Địa chỉ</th>
                    <th>Bệnh lý</th>
                    <th>Triệu chứng</th>
                    <th>Mã phòng</th>
                </tr>
                <?php
                    if($result){
                        while($row = $db->getData()){   
                ?>
                <tr class="data-table">
                    <td><?php echo $row["MaBN"]; ?></td>
                    <td><?php echo $row["FullName"]; ?></td>
                    <td><?php echo $row["SoCMND"]; ?></td>
                    <td><?php echo $row["Gioitinh"]; ?></td>
                    <td><?php echo $row["DiaChi"]; ?></td>
                    <td><?php echo $row["benhlydikem"]; ?></td>
                    <td><?php echo $row["trieuchung"]; ?></td>
                    <td><?php echo $row["MaPhong"]; ?></td>
                </tr>
                <?php
                        }
                    }
                ?>
                
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

    <!-- code dang dang do -->
    <?php
            if (isset($_POST["search"])) {
                $sdata = $_POST['searchdata'];
                $sql = "SELECT * FROM benhnhan WHERE LOWER(CONCAT(benhnhan.Ho, ' ', benhnhan.Ten)) LIKE '%$sdata%'";
                $resultSearch = $db->execute($sql);
                $num = mysqli_num_rows($resultSearch);
                if ($num > 0) {
                    while ($rowSearch = mysqli_fetch_array($resultSearch)) {
        ?>
            <?php
                    }
                }
            }
            ?>
    <!-- ===== IONICONS ===== -->
    <script src="https://unpkg.com/ionicons@5.1.2/dist/ionicons.js"></script>


    <script src="./js/main-homepage.js"></script>
    <script src="./js/sidebar.js"></script>
</body>

</html>