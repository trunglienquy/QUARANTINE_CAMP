<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Boxicons CSS -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="../css/style-homepage.css">
    <link rel="stylesheet" href="../css/style-detail.css">
    <link rel="stylesheet" href="./css/style-detail.css">
    <title>Document</title>
</head>

<body>
    <?php
    include("../include/headerAnotherFile.php");
    include("../mvc/Models/DBConfig.php");
    $db = new Database;
    $db->connect();
    $id = $_GET["id"];
    $sql = "SELECT bn.MaBN, bn.HoTen, bn.SoCMND, bn.SDT, bn.DiaChi, bn.Gioitinh, bn.chuyendentu, bn.thongtinxnbandau, bn.Ma_Staff, 
    bn.Ngay_nhap_vien, bn.Ngay_xuat_vien, bn.Ma_Nurse FROM benhnhan bn WHERE bn.MaBN = $id";
    $result = $db->execute($sql);
    
    ?>
    <div class="home_content">
        <div class="search-area">
            <form class="nosubmit">
                <input class="nosubmit" type="search" placeholder="Search...">
            </form>
            <i class='bx bx-refresh' style='display: block;font-size: 50px;text-align:right' onclick="refreshPages()"></i>
            <script>
                function refreshPages() {
                    location.reload();
                }
            </script>
        </div>
        
        <div class="title-form-employee">
            <h2>Chi tiết bệnh nhân</h2>
        </div>
        <?php
        if ($result) {
            while ($row = $db->getData()) {
                $sqlGetDateTest = "SELECT ThoigianXN FROM XetNghiem WHERE MaBN = $id ORDER BY ThoigianXN DESC LIMIT 1";
                $ngayXuatVienDuKienResult = $db->execute($sqlGetDateTest);
                
                if ($ngayXuatVienDuKienResult) {
                    $ngayXuatVienDuKienRow = $db->getData($ngayXuatVienDuKienResult);
        
                    // Check if the 'ThoigianXN' column exists in the result set
                    if (isset($ngayXuatVienDuKienRow['ThoigianXN'])) {
                        $ngayXuatVienDuKienInsert = $ngayXuatVienDuKienRow['ThoigianXN'];
                        $ngayXuatVienDuKien = date('d-m-Y', strtotime($ngayXuatVienDuKienRow['ThoigianXN']));
                    } else {
                        // Handle the case where the 'ThoigianXN' column is not present
                        $ngayXuatVienDuKien = "Chưa có dữ liệu";
                    }
                } else {
                    // Handle the case where the query doesn't return a result
                    $ngayXuatVienDuKien = "Chưa có dữ liệu";
                }
        ?>
        
        <div class="flex-form-employee">
            <div class="image-employee">
                <div class="area-avatar">
                    <img src="https://th.bing.com/th/id/OIP.7Zf_YAZDsTjp98Lj0lt1WgHaHa?w=512&h=512&rs=1&pid=ImgDetMain"
                        alt="">
                </div>
                <form action="" method="post" style="border:none; height: 300px; display: block;">
                    <div class="area-info" style="height: 150px;">
                        <div class="col-info">
                            <p class="sub-info-avatar">Ngày nhập viện</p>
                            <p><strong><?php echo date('d-m-Y', strtotime($row['Ngay_nhap_vien'])); ?></strong></p>
                            <p class="sub-info-avatar">Ngày xuất viện dự kiến</p>
                            <p><strong><?php echo $ngayXuatVienDuKien ?></strong></p>
                            <p class="sub-info-avatar">Ngày xuất viện</p>
                            <p><strong><?php echo date('d-m-Y', strtotime($row['Ngay_xuat_vien']));?></strong></p>
                        </div>
                    </div>
                    <input type="submit" name="updateDatePatient" Value="Thiết lập ngày nhập viện"></input>
                </form>
            </div>
        
            <div class="data-form-employee">
                <h2>Thông tin cá nhân</h2>
                <div class="flex-info">
                    <div class="flex-info-left">
                    <div class="col-info sub-data">
                    <p class="sub-info-avatar ">Mã số Bệnh nhân</p>
                    <p><strong><?php echo $row['MaBN'] ?></strong></p>
                </div>
                <div class="col-info sub-data">
                    <p class="sub-info-avatar ">Họ và Tên</p>
                    <p><strong><?php echo $row['HoTen'] ?></strong></p>
                </div>
                <div class="col-info sub-data">
                    <p class="sub-info-avatar ">Số CMND</p>
                    <p><strong><?php echo $row['SoCMND'] ?></strong></p>
                </div>
                <div class="col-info sub-data">
                    <p class="sub-info-avatar ">Số điện thoại</p>
                    <p><strong><?php echo $row['SDT'] ?></strong></p>
                </div>
                    </div>
                    <div class="flex-info-right">
                    <div class="col-info sub-data">
                    <p class="sub-info-avatar ">Địa chỉ</p>
                    <p><strong><?php echo $row['DiaChi'] ?></strong></p>
                </div>
                <div class="col-info sub-data">
                    <p class="sub-info-avatar ">Giới tính</p>
                    <p><strong><?php echo $row['Gioitinh'] ?></strong></p>
                </div>
                <div class="col-info sub-data">
                    <p class="sub-info-avatar ">Chuyển đến từ</p>
                    <p><strong><?php echo $row['chuyendentu'] ?></strong></p>
                </div>
                <div class="col-info sub-data">
                    <p class="sub-info-avatar ">Thông tin xét nghiệm ban đầu</p>
                    <p><strong><?php echo $row['thongtinxnbandau'] ?></strong></p>
                </div>
                    </div>
                </div>
        <?php
            }}
        ?>
        <div class="table-BN">
            <span>Kết quả xét nghiệm</span>
            <table>
                <tr class="tr-title">
                    <th>Mã xét nghiệm</th>
                    <th>Ngày bắt đầu xét nghiệm</th>
                    <th>SPO2</th>
                    <th>Respiratory Rate</th>
                    <th>PCR Test</th>
                    <th>PCR CT Value</th>
                    <th>Quick Test</th>
                    <th>Quick CT Value</th>
                    <th>Warning Mark</th>
                </tr>
                <?php
                    $sqlXetNghiem = "SELECT * FROM xetnghiem WHERE MaBN = $id";
                    $resultXetNghiem = $db->execute($sqlXetNghiem); 
                    if($resultXetNghiem){
                        while($row = $db->getData()){   
                ?>
                <tr class="data-table">
                    <td><?php echo $row['MaXN'] ?></td>
                    <td><?php echo $row['ThoigianXN'] ?></td>
                    <td><?php echo $row['SPO2'] ?></td>
                    <td><?php echo $row['Respiratiory_Rate'] ?></td>
                    <td><?php echo $row['PCR_result'] ?></td>
                    <td><?php echo $row['PCR_ct'] ?></td>
                    <td><?php echo $row['QT_result'] ?></td>
                    <td><?php echo $row['QT_ct'] ?></td>
                    <td>
                        <?php if ($row['Warning'] == 1){
                            echo 'Nguy cấp';
                        }else{
                            echo 'Không nguy cấp';
                        } 
                        ?>
                    </td>
                </tr>
                <?php
                        }
                    }
                ?>
            </table>
        </div>

        <div class="table-BN">
        <span style="margin-top: 20px;">Kết quả điều trị</span>
            <table>
                <tr class="tr-title">
                    <th>Mã điều trị</th>
                    <th>Mã bác sĩ</th>
                    <th>Mã thuốc</th>
                    <th>Kết quả</th>
                    <th>Ngày bắt đầu điều trị</th>
                    <th>Ngày kết thúc điều trị</th>
                </tr>
                <?php
                    $sqlXetNghiem = "SELECT * FROM dieutri WHERE MaBN = $id";
                    $resultXetNghiem = $db->execute($sqlXetNghiem); 
                    if($resultXetNghiem){
                        while($row = $db->getData()){   
                ?>
                <tr class="data-table">
                    <td><?php echo $row['Ma_DT'] ?></td>
                    <td><?php echo $row['Ma_Doctors'] ?></td>
                    <td><?php echo $row['MaThuoc'] ?></td>
                    <td><?php echo $row['ketqua'] ?></td>
                    <td><?php echo $row['startdate'] ?></td>
                    <td><?php echo $row['enddate'] ?></td>
                </tr>
                <?php
                        }
                    }
                ?>
            </table>
        </div>



        <?php
        // Check if the update button is clicked
        if (isset($_POST['updateDatePatient'])) {
            // Update Ngay_xuat_vien in the BENHNHAN table
            $sqlUpdateDate = "UPDATE benhnhan SET Ngay_xuat_vien = '$ngayXuatVienDuKienInsert' WHERE MaBN = $id";
            $resultUpdateDate = $db->execute($sqlUpdateDate);
        }
        else{
            
        }
        ?>
    <!-- ===== IONICONS ===== -->
    <script src="https://unpkg.com/ionicons@5.1.2/dist/ionicons.js"></script>
    <script src="./js/main-homepage.js"></script>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function () {
            // When the admin name is clicked, toggle the Log Out link visibility
            $('#adminName').on('click', function () {
                $('#logOutLink').toggleClass('active');
            });
        });
    </script>
    <script src="../js/sidebar.js"></script>

</body>

</html>