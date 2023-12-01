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
    include ("./include/header.php");
    

    include ("./mvc/Models/DBConfig.php");
    $db = new Database;
    $db->connect();
    $sql = "SELECT dt.Ma_DT, dt.MaBN, dt.Ma_Doctors, dt.MaThuoc, dt.ketqua, dt.startdate, dt.enddate FROM dieutri dt";
    

    $result = $db->execute($sql);
      
    ?>
    <div class="home_content">
        <div class="link-direction">
            <a href="#">Trang chủ</a>
            <i class='bx bx-chevron-right'></i>
            <a href="#" class="link-active">Quản lý điều trị</a>
        </div>
        <div class="header-title">
            <h1>Quản lý điều trị</h1>
            <i class='bx bx-refresh' onclick="refreshPages()"></i>
            <script>
                function refreshPages() {
                    location.reload();
                }
            </script>
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
            <form action="./add_obj/themdieutri.php" method="post">
                <input type="submit" value="Thêm điều trị">
            </form>
        </div>
        <div class="table-BN">
            <table>
                <tr class="tr-title">
                    <th>Mã điều trị</th>
                    <th>Mã bệnh nhân</th>
                    <th>Mã bác sĩ</th>
                    <th>Mã thuốc</th>
                    <th>Kết quả</th>
                    <th>Ngày bắt đầu điều trị</th>
                    <th>Ngày kết thúc điều trị</th>
                    
                </tr>
                <?php
                    if($result){
                        while($row = $db->getData()){   
                ?>
                            <tr class="data-table" data-href="./detail/detailTreat.php?id=<?= $row['Ma_DT'] ?>">
                                <td><?php echo $row["Ma_DT"]; ?></td>
                                <td><?php echo $row["MaBN"]; ?></td>
                                <td><?php echo $row["Ma_Doctors"]; ?></td>
                                <td><?php echo $row["MaThuoc"]; ?></td>
                                <td><?php echo $row["ketqua"]; ?></td>
                                <td><?php echo $row["startdate"]; ?></td>
                                <td><?php echo $row["enddate"]; ?></td>
                                
                                
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

    <!-- ===== IONICONS ===== -->
    <script src="https://unpkg.com/ionicons@5.1.2/dist/ionicons.js"></script>
    <script src="./js/main-homepage.js"></script>
    <script src="./js/sidebar.js"></script>

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