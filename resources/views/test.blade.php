<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sidebar Menu</title>
    <link rel="stylesheet" href="css/test.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <div class="container">
        <div class="sidebar">
            <div class="logo items">
                <img src="img/gsp.png" alt="">
                <span class="mainHead para">
                    <h5>WebDev</h5>
                    <h4>Explorers</h4>
                </span>
            </div>

            <li class="items">
                <i class="fa-solid fa-house"></i>
                <p class="para">Home</p>
            </li>
            <li class="items">
                <i class="fa-solid fa-user"></i>
                <p class="para">Account</p>
            </li>
            <li class="items">
                <i class="fa-solid fa-circle-exclamation"></i>
                <p class="para">Notification</p>
            </li>
            <li class="items">
                <i class="fa-solid fa-envelope"></i>
                <p class="para">Messages</p>
            </li>
            <li class="items">
                <i class="fa-solid fa-user-plus"></i>
                <p class="para">Followers</p>
            </li>
            <li class="items">
                <i class="fa-solid fa-calendar-days"></i>
                <p class="para">Events</p>
            </li>
            <li class="items">
                <i class="fa-solid fa-gear"></i>
                <p class="para">Settings</p>
            </li>

            <li class="items logout-btn">
                <i class="fa-solid fa-right-from-bracket"></i>
                <p class="para">Logout</p>
            </li>
        </div>

        <div class="toggler">
            <i class="fa-solid fa-bars" id="toggle-bars"></i>
            <i class="fa-solid fa-xmark" id="toggle-cross"></i>
        </div>

    </div>



    <script src="js/test.js"></script>
</body>
</html>