<?php
    $conn = mysqli_connect("localhost", "root", "", "lotus");
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Lotus Hotel</title>
        <link rel="icon" type="image/png" href="lotus4.png">
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="fontAwesome/css/fontawesome.min.css">
        <link rel="stylesheet" href="fontAwesome/css/all.min.css">
    </head>
    </head>
    <body>
        <div class="header">
            <h2 class="logo"><img src="lotus4.png" width="100px" height="70px">Lotus Hotel</h2>
            <input type="checkbox" id="chk">
            <label for="chk" class="show-menu-btn">
                <i class="fas fa-bars"></i>
            </label>
            <ul class="menu">
                <a href="home_tamu.php">Home</a>
                <a href="#">Galeri</a>
                <a href="#">About Us</a>
                <a href="logout.php">Logout</a>
                <label for="chk" class="hide-menu-btn">
                    <i class="fas fa-times"></i>
                </label>
            </ul>
        </div>
        <div class="content">
            <img src="hotel2.jpg" alt="">
            <p>Selamat Datang di LOTUS HOTEL</p>
            <p>Cari hotel murah dan bagus? Ya di LOTUS!</p>
            <div class="pricing-table">
                <div class="pricing-card">
                    <h3 class="pricing-card-header">Single Room</h3>
                    <div class="price"><sup>Rp</sup>250 rb<span>/malam</span></div>
                    <ul>
                        <li>1 single bed</li>
                        <li>Kamar mandi dengan shower</li>
                        <li>TV</li>
                        <li>Lemari</li>
                        <li>Makan pagi</li>
                        <li></li>
                        <li></li>
                    </ul>
                    <a href="#" class="rsv-btn">Reserve Now</a>
                </div>
                <div class="pricing-card">
                    <h3 class="pricing-card-header">Twin Room</h3>
                    <div class="price"><sup>Rp</sup>350 rb<span>/malam</span></div>
                    <ul>
                        <li>2 single bed</li>
                        <li>Kamar mandi dengan shower</li>
                        <li>TV</li>
                        <li>Lemari</li>
                        <li>Makan pagi</li>
                        <li></li>
                        <li></li>
                    </ul>
                    <a href="#" class="rsv-btn">Reserve Now</a>
                </div>
                <div class="pricing-card">
                    <h3 class="pricing-card-header">Double Room</h3>
                    <div class="price"><sup>Rp</sup>500 rb<span>/malam</span></div>
                    <ul>
                        <li>1 queen size bed</li>
                        <li>Kamar mandi dengan shower</li>
                        <li>Sofa</li>
                        <li>TV</li>
                        <li>Lemari</li>
                        <li>Makan pagi</li>
                        <li></li>
                    </ul>
                    <a href="#" class="rsv-btn">Reserve Now</a>
                </div>
                <div class="pricing-card">
                    <h3 class="pricing-card-header">Family Room</h3>
                    <div class="price"><sup>Rp</sup>750 rb<span>/malam</span></div>
                    <ul>
                        <li>1 queen size bed</li>
                        <li>1 single bed</li>
                        <li>Kamar mandi dengan shower</li>
                        <li>Sofa</li>
                        <li>TV dan Kulkas</li>
                        <li>Lemari</li>
                        <li>Makan pagi</li>
                    </ul>
                    <a href="#" class="rsv-btn">Reserve Now</a>
                </div>
                <div class="pricing-card">
                    <h3 class="pricing-card-header">Deluxe Room</h3>
                    <div class="price"><sup>Rp</sup>1 jt<span>/malam</span></div>
                    <ul>
                        <li>1 king size bed</li>
                        <li>Kamar mandi dengan shower/bathub</li>
                        <li>Mini dapur</li>
                        <li>Sofa</li>
                        <li>TV dan Kulkas</li>
                        <li>Lemari</li>
                        <li>Makan pagi</li>
                    </ul>
                    <a href="#" class="rsv-btn">Reserve Now</a>
                </div>
                <div class="pricing-card">
                    <h3 class="pricing-card-header">Suite Room</h3>
                    <div class="price"><sup>Rp</sup>1.5 jt<span>/malam</span></div>
                    <ul>
                        <li>1 king size bed</li>
                        <li>Kamar mandi dengan shower/bathub</li>
                        <li>Mini ruang tamu</li>
                        <li>Mini dapur</li>
                        <li>Lemari</li>
                        <li>TV dan Kulkas</li>
                        <li>Makan pagi</li>
                    </ul>
                    <a href="#" class="rsv-btn">Reserve Now</a>
                </div>
            </div> 
        </div>
        <footer>
            <p>Copyright &copy; 2021 L200180058| Designed by Arindita Prihastama</p>
        </footer>
    </body>
</html>