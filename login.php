<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Boxicons CSS -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="./css/login-style.css">
    <title>Document</title>
</head>
<body>
    <nav>
        <a href="#"><i class='bx bx-heart logo-main'></i></a>
        <span>NameSystem</span>
    </nav>
    <div class="form-wrapper">
        <h2>Sign In</h2>
        <form action="#" method="post">
            <div class="form-control">
                <input type="text" required id="user">
                <label>Email or phone number</label>
            </div>
            <div class="form-control">
                <input type="text" required id="pass">
                <label>Password</label>
            </div>
            <button type="submit" class="btn-submit">Sign In</button>
        </form>
        <small>
        Tình hình dịch bệnh đang diễn biến phức tạp, chúng ta mỗi người một tay cùng nhau đẩy lùi dịch bệnh, chấp hành nghiêm túc những quy định của nhà nước, đeo khẩu trang nơi công cộng, giữ gìn vệ sinh và khoảng cách đúng quy định, không được chủ quan bạn nhé. Ở nhà vì bạn, vì tôi, vì cộng đồng!
        </small>
    </div>

    <script>
    var btn = document.querySelector(".btn-submit");
    btn.addEventListener('click', func);
    const username = "admin";
    const password = "123";
    console.log(btn);

    function func(e) {
        e.preventDefault(); // Prevent the form submission for now

        const inputUsername = document.getElementById("user").value;
        const inputPassword = document.getElementById("pass").value;

        if (username === inputUsername && password === inputPassword) {
            // Redirect to the homepage
            window.location.href = "./benhnhan.php";
        } else {
            alert("Incorrect username or password");
        }
    }
</script>


</body>
</html>