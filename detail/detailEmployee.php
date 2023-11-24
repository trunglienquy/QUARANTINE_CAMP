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
    <header class="header">
        <div class="info-admin">
            <ul class="list-admin">
                <li>
                    <div class="box-1"></div>
                    <i class='bx bx-heart logo-main'></i>
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
                        <div class="avatar-user" id="avatar_user">
                            <img src="https://scontent.fsgn2-3.fna.fbcdn.net/v/t1.6435-1/90416718_1498025510372306_6205470286582644736_n.jpg?stp=dst-jpg_p320x320&_nc_cat=107&ccb=1-7&_nc_sid=2b6aad&_nc_eui2=AeGuH-youRH1u7P0JAnfJgcu7wi5K2NWFKrvCLkrY1YUqmcnAbCLicFccP0CD-Cm_Hwf2rw4bFs0OADvygJIpq29&_nc_ohc=ad-Wp8piJQ8AX-lZyRz&_nc_ht=scontent.fsgn2-3.fna&oh=00_AfAMe1UNp6FoDf978C3xTTDedyqBfVjIFGPVkdeuPqXP8Q&oe=656C00B0"
                                alt="">
                        </div>
                        <div class="sub-menu-user" id="sub_menu_user">
                            <ul class="list-sub">
                                <li class="sub-item">
                                    <a href="#">
                                        <i class='bx bx-user nav_icon'></i>
                                        <span class="nav__name">My Profile</span>
                                    </a>
                                </li>
                                <li class="sub-item">
                                    <a href="#">
                                        <i class='bx bx-log-out nav_icon'></i>
                                        <span class="nav__name">Log out</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="name-user">
                            <p>Le Minh Trung</p>
                            <span>Admin</span>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </header>
    <div class="l-navbar" id="navbar">
        <nav class="nav">
            <div>
                <div class="nav__brand">
                    <ion-icon name="menu-outline" class="nav__toggle" id="nav-toggle"></ion-icon>
                    <a href="./Benhnhan.php" class="nav__logo">SystemName</a>
                </div>
                <div class="nav__list">
                    <a href="./Benhnhan.php" class="nav__link active">
                        <i class='bx bxs-first-aid nav_icon'></i>
                        <span class="nav__name">Quản lý bệnh nhân</span>
                    </a>
                    <a href="./Phong.php" class="nav__link">
                        <i class='bx bx-building nav_icon'></i>
                        <span class="nav__name">Quản lý Phòng</span>
                    </a>

                    <a href="./xetnghiem.php" class="nav__link">
                        <i class='bx bxs-user-account nav_icon'></i>
                        <span class="nav__name">Quản lý Xét Nghiệm</span>
                    </a>

                    <a href="./Nhanvien.php" class="nav__link">
                        <i class='bx bxs-user-account nav_icon'></i>
                        <span class="nav__name">Quản lý Nhân Viên</span>
                    </a>

                    <a href="./dieutri.php" class="nav__link">
                        <i class='bx bx-capsule nav_icon'></i>
                        <span class="nav__name">Quản lý Điều Trị</span>
                    </a>
                    <a href="./thuoc.php" class="nav__link">
                        <i class='bx bx-capsule nav_icon'></i>
                        <span class="nav__name">Quản lý Thuốc</span>
                    </a>
                </div>
            </div>
        </nav>
    </div>
    <div class="home_content">
        <div class="search-area">
            <form class="nosubmit">
                <input class="nosubmit" type="search" placeholder="Search...">
            </form>
        </div>
        <div class="title-form-employee">
            <h2>Chi tiết nhân viên</h2>
        </div>
        <div class="flex-form-employee">
            <div class="image-employee">
                <div class="area-avatar">
                    <img src="https://th.bing.com/th/id/OIP.7Zf_YAZDsTjp98Lj0lt1WgHaHa?w=512&h=512&rs=1&pid=ImgDetMain"
                        alt="">
                </div>
                <div class="area-info">
                    <div class="col-info">
                        <p class="sub-info-avatar">Ngày bắt đầu làm việc</p>
                        <p><strong>12/01/2023</strong></p>
                    </div>
                    <div class="col-info">
                        <p class="sub-info-avatar">Department</p>
                        <p><strong>Tòa A</strong></p>
                    </div>
                </div>
            </div>
            <div class="data-form-employee">
                <h2>Thông tin cá nhân</h2>
                <div class="col-info sub-data">
                    <p class="sub-info-avatar ">Họ và tên</p>
                    <p><strong>Nguyễn Văn B</strong></p>
                </div>


                <div class="patient-management">
                <strong>Thông tin bệnh nhân đang điều trị</strong>
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
            </div>
            </div>
        </div>
    </div>

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