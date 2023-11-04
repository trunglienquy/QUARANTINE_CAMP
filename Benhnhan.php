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
                            <img src="https://scontent.fsgn2-3.fna.fbcdn.net/v/t1.6435-1/90416718_1498025510372306_6205470286582644736_n.jpg?stp=dst-jpg_p320x320&_nc_cat=107&ccb=1-7&_nc_sid=2b6aad&_nc_eui2=AeGuH-youRH1u7P0JAnfJgcu7wi5K2NWFKrvCLkrY1YUqmcnAbCLicFccP0CD-Cm_Hwf2rw4bFs0OADvygJIpq29&_nc_ohc=ad-Wp8piJQ8AX-lZyRz&_nc_ht=scontent.fsgn2-3.fna&oh=00_AfAMe1UNp6FoDf978C3xTTDedyqBfVjIFGPVkdeuPqXP8Q&oe=656C00B0" alt="">
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
                    <a href="#" class="nav__logo">SystemName</a>
                </div>
                <div class="nav__list">
                    <a href="#" class="nav__link active">
                        <i class='bx bxs-first-aid nav_icon'></i>
                        <span class="nav__name">Quản lý bệnh nhân</span>
                    </a>
                    <a href="#" class="nav__link">
                        <i class='bx bx-building nav_icon'></i>
                        <span class="nav__name">Quản lý Phòng</span>
                    </a>

                    <div class="nav__link collapse">
                        <i class='bx bx-injection nav_icon'></i>
                        <span class="nav__name">Quản lý Xét Nghiệm</span>
                    </div>

                    <a href="#" class="nav__link">
                        <i class='bx bxs-user-account nav_icon'></i>
                        <span class="nav__name">Quản lý Nhân Viên</span>
                    </a>
                    <div class="nav__link collapse">
                        <i class='bx bx-plus-medical nav_icon'></i>
                        <span class="nav__name">Quản lý Điều Trị</span>
                    </div>
                    <a href="#" class="nav__link">
                        <i class='bx bx-capsule nav_icon'></i>
                        <span class="nav__name">Quản lý Thuốc</span>
                    </a>
                </div>
            </div>
        </nav>
    </div>

    

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
                    <th>Tình trạng</th>
                    <th>Mã phòng</th>
                </tr>
                <tr class="data-table">
                    <td>BN1</td>
                    <td>Nguyen Van A</td>
                    <td>9739791263</td>
                    <td>Nam</td>
                    <td>Hồ Chí Minh</td>
                    <td>Ung Thư</td>
                    <td>Khó Thở</td>
                    <td>Nghiêm trọng</td>
                    <td>P01</td>
                </tr>
                <tr class="data-table">
                    <td>BN2</td>
                    <td>Nguyen Van B</td>
                    <td>5757991781</td>
                    <td>Nam</td>
                    <td>Đà Nẵng</td>
                    <td>Tiểu đường</td>
                    <td>Đau</td>
                    <td class="status-BN">Nghiêm trọng</td>
                    <td>PO2</td>
                </tr>
                <tr class="data-table">
                    <td>BN3</td>
                    <td>Nguyen Thi C</td>
                    <td>3512927760</td>
                    <td>Nữ</td>
                    <td>Hà Nội</td>
                    <td>Bệnh tim</td>
                    <td>Tức ngực</td>
                    <td>Nghiêm trọng</td>
                    <td>P03</td>
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