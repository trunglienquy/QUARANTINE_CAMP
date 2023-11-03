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
            <ul>
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
                        <div class="avatar-user">
                            <img src="https://scontent.fsgn2-3.fna.fbcdn.net/v/t1.6435-1/90416718_1498025510372306_6205470286582644736_n.jpg?stp=dst-jpg_p320x320&_nc_cat=107&ccb=1-7&_nc_sid=2b6aad&_nc_eui2=AeGuH-youRH1u7P0JAnfJgcu7wi5K2NWFKrvCLkrY1YUqmcnAbCLicFccP0CD-Cm_Hwf2rw4bFs0OADvygJIpq29&_nc_ohc=ad-Wp8piJQ8AX-lZyRz&_nc_ht=scontent.fsgn2-3.fna&oh=00_AfAMe1UNp6FoDf978C3xTTDedyqBfVjIFGPVkdeuPqXP8Q&oe=656C00B0" alt="">
                        </div>
                        <div class="sub-menu-user">
                            <ul class="list-sub">
                                <li class="sub-item">
                                    <a href="#">My Profile</a>
                                </li>
                                <li class="sub-item">
                                    <a href="#">Log out</a>
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

    <div class="sidebar" id="sidebar">
         <nav class="sidebar__container">
         <div class="header__toggle" id="header-toggle">
               <i class="ri-menu-line"></i>
            </div>
            <div class="sidebar__logo">
               <img src="assets/img/yt-logo.svg" alt="" class="sidebar__logo-img">
               <img src="assets/img/yt-logo-text.svg" alt="" class="sidebar__logo-text">
            </div>

            <div class="sidebar__content">
               <div class="sidebar__list">
                  <a href="#" class="sidebar__link active-link">
                     <i class="ri-home-5-line"></i>
                     <span class="sidebar__link-name">Home</span>
                     <span class="sidebar__link-floating">Home</span>
                  </a>
                  
                  <a href="#" class="sidebar__link">
                     <i class="ri-compass-3-line"></i>
                     <span class="sidebar__link-name">Explore</span>
                     <span class="sidebar__link-floating">Explore</span>
                  </a>

                  <a href="#" class="sidebar__link">
                     <i class="ri-video-line"></i>
                     <span class="sidebar__link-name">Shorts</span>
                     <span class="sidebar__link-floating">Shorts</span>
                  </a>

                  <a href="#" class="sidebar__link">
                     <i class="ri-add-box-line"></i>
                     <span class="sidebar__link-name">Subscription</span>
                     <span class="sidebar__link-floating">Subscription</span>
                  </a>
               </div>

               <h3 class="sidebar__title">
                  <span>Library</span>
               </h3>

               <div class="sidebar__list">
                  <a href="#" class="sidebar__link">
                     <i class="ri-history-line"></i>
                     <span class="sidebar__link-name">History</span>
                     <span class="sidebar__link-floating">History</span>
                  </a>

                  <a href="#" class="sidebar__link">
                     <i class="ri-time-line"></i>
                     <span class="sidebar__link-name">Watch Later</span>
                     <span class="sidebar__link-floating">Watch Later</span>
                  </a>

                  <a href="#" class="sidebar__link">
                     <i class="ri-play-circle-line"></i>
                     <span class="sidebar__link-name">Playlists</span>
                     <span class="sidebar__link-floating">Playlists</span>
                  </a>

                  <a href="#" class="sidebar__link">
                     <i class="ri-heart-3-line"></i>
                     <span class="sidebar__link-name">Liked Videos</span>
                     <span class="sidebar__link-floating">Liked Videos</span>
                  </a>
               </div>

               <h3 class="sidebar__title">
                  <span>General</span>
               </h3>

               <div class="sidebar__list">
                  <a href="#" class="sidebar__link">
                     <i class="ri-notification-2-line"></i>
                     <span class="sidebar__link-name">Notifications</span>
                     <span class="sidebar__link-floating">Notifications</span>
                  </a>

                  <a href="#" class="sidebar__link">
                     <i class="ri-settings-3-line"></i>
                     <span class="sidebar__link-name">Settings</span>
                     <span class="sidebar__link-floating">Settings</span>
                  </a>

                  <a href="#" class="sidebar__link">
                     <i class="ri-logout-box-r-line"></i>
                     <span class="sidebar__link-name">Logout</span>
                     <span class="sidebar__link-floating">Logout</span>
                  </a>
               </div>
            </div>

            <div class="sidebar__account">
               <img src="assets/img/perfil.png" alt="sidebar image" class="sidebar__perfil">

               <div class="sidebar__names">
                  <h3 class="sidebar__name">Will Lens</h3>
                  <span class="sidebar__email">willens@email.com</span>
               </div>

               <i class="ri-arrow-right-s-line"></i>
            </div>
         </nav>
      </div>

    <!-- <div class="l-navbar" id="navbar">
        <div class="nav">
            <div>
                <a href="#" class="nav_logo">
                    <i class='bx bx-heart nav_logo_system'></i>
                    <span>NameSystem</span>
                </a>
                <div class="nav_toggle" id="nav-toggle">
                    <i class='bx bx-caret-right' ></i>
                </div>
                <ul class="nav_list">
                    <li>
                        <a href="./Benhnhan.php" class="nav_link active">
                            <span class="icon"><i class='bx bxs-first-aid' ></i></span>
                            <span class="text" name="test">Quản lý bệnh nhân</span>
                        </a>
                    </li>
                    <a href="./Benhnhan.php" class="nav_link active">
                        <span class="icon"><i class='bx bx-building' ></i></span>
                        <span class="text">Quản lý Phòng</span>
                    </a>
                    <a href="./Benhnhan.php" class="nav_link active">
                        <span class="icon"><i class='bx bx-injection' ></i></span>
                        <span class="text">Quản lý Xét Nghiệm</span>
                    </a>
                    <a href="./Benhnhan.php" class="nav_link active">
                        <span class="icon"><i class='bx bxs-user-account'></i></span>
                        <span class="text">Quản lý Nhân Viên</span>
                    </a>
                    <a href="./Benhnhan.php" class="nav_link active">
                        <span class="icon"><i class='bx bx-plus-medical' ></i></span>
                        <span class="text">Quản lý Điều Trị</span>
                    </a>
                    <a href="./Benhnhan.php" class="nav_link active">
                        <span class="icon"><i class='bx bx-capsule' ></i></span>
                        <span class="text">Quản lý Thuốc</span>
                    </a>
                </ul>
            </div>
        </div>
    </div> -->
    
    <!-- <div class="home_content">
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
        <div class="table-BN">
            <table>
                <tr>
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
            <div class="show-data-count">
                <p>Hiển thị</p>
                <select name="dataCount" id="data-count">
                    <option value="10" selected>10</option>
                    <option value="10">20</option>
                    <option value="10">30</option>
                </select>
                <p>trong số tổng </p>
                <p class="all-data">2</p>
            </div>
            <div class="paging-data">
                <ul class="page-list">
                    <li class="page-detail">1</li>
                    <li class="page-detail">2</li>
                    <li class="page-detail">3</li>
                    <li class="page-detail">4</li>
                </ul>
            </div>
        </div>
    </div> -->


    <script src="./js/main-homepage.js"></script>
    <script src="./js/sidebar.js"></script>
</body>

</html>