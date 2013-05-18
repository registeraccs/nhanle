<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>NhanLe's Album</title>
        <style>

            /* Demo styles */
            html,body{background:#222;margin:0;}
            body{border-top:4px solid #000;}
            .content{color:#777;font:12px/1.4 "helvetica neue",arial,sans-serif;width:1024px;margin:20px auto;}
            h1{font-size:12px;font-weight:normal;color:#ddd;margin:0;}
            p{margin:0 0 20px}
            a {color:#22BCB9;text-decoration:none;}
            .cred{margin-top:20px;font-size:11px;}

            /* This rule is read by Galleria to define the gallery height: */
            #galleria{height:560px}

        </style>

        <!-- load jQuery -->
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.js"></script>

        <!-- load Galleria -->
        <script src="js/galleria-1.2.8-final.min.js"></script>
    	<link rel="stylesheet" href="css/galleria.azur.css">

    </head>
<body>
    <div class="content">
        <h1>NhanLe's Life</h1>
        <p>The life is so simple.</p>

        <!-- Adding gallery images. We use resized thumbnails here for better performance, but itÃƒÂ¢Ã¢â€šÂ¬Ã¢â€žÂ¢s not necessary -->

        <div id="galleria">
        	<?php
// 					$ignore = array( 'cgi-bin', '.', '..', '.DS_Store', 'playlist.xml' );
// 					$dh = @opendir( "Album");
// 					while( false !== ( $file = readdir( $dh ) ) ){
// 						if( !in_array( $file, $ignore ) ){
// 							if( is_file( "Album/" . $file) ){
// 								echo '<a href="' . "Album/" . $file . '"><img src="' . "Album/" . $file . '" data-title="HÃ´m nay trá»�i Ä‘áº¹p láº¯m" data-description="Horses on Bianditz mountain, in Navarre, Spain."></a>';
// 							}
// 						}
// 					}
// 					closedir( $dh );
				
			?>
            <a href="Album/0.jpg">
                <img 
                    src="Album/0.jpg",
                    data-title="NhanLe's Live Ablum"
                    data-description="Nơi lưu lại những khoảnh khắc đáng nhớ trong cuộc đời NhanLe, những sự kiện quan trọng trong cuộc sống gia đình. Mong zeze xem ablum này thì biết thương ba mẹ nhiều hơn!"
                >
            </a>
            <a href="Album/1.jpg">
                <img 
                    src="Album/1.jpg",
                    data-title="Thuở ấu thơ"
                    data-description="Xuât thân trong 1 gia đình không giàu sang khá giả cho lắm. Nhà đông anh em, cuộc sống gia đình nhờ vào gánh hủ tíu của mẹ sống qua ngày."
                >
            </a>
            <a href="Album/2.jpg">
                <img 
                    src="Album/2.jpg",
                    data-title="Thuở ấu thơ"
                    data-description="Đam mê ca hát từ nhỏ, nhưng không được ai định hướng, dạy dỗ nên tài năng bị lãng quên."
                >
            </a>
            <a href="Album/3.jpg">
                <img 
                    src="Album/3.jpg",
                    data-title="Trưởng thành"
                    data-description="Biêt lo nghĩ và yêu mẹ hơn. Nhận biết được nhiều điều về cuộc sống."
                >
            </a>
            <a href="Album/4.jpg">
                <img 
                    src="Album/4.jpg",
                    data-title="Đại học"
                    data-description="Học đại học Khoa học tự nhiên ngành CNTT, học phí được anh Sáu cho."
                >
            </a>
            <a href="Album/5.jpg">
                <img 
                    src="Album/5.jpg",
                    data-title="Đại học"
                    data-description="Vừa đi học, vùa phụ bán cá"
                >
            </a>
            <a href="Album/6.jpg">
                <img 
                    src="Album/6.jpg",
                    data-title="Đại học"
                    data-description="Tốt nghiệp đại học 2009"
                >
            </a>
            <a href="Album/7.jpg">
                <img 
                    src="Album/7.jpg",
                    data-title="Công viên phần mềm Quang Trung Q12"
                    data-description="Làm việc cho một công ty phần mềm."
                >
            </a>
            <a href="Album/8.jpg">
                <img 
                    src="Album/8.jpg",
                    data-title="Glandore Systems - Thạo Việc Ltd"
                    data-description="Noel tại công ty."
                >
            </a>
            <a href="Album/9.jpg">
                <img 
                    src="Album/9.jpg",
                    data-title="Nơi tình yêu bắt đầu"
                    data-description="Được bạn giới thiệu và quen với Nguyễn Kim Nguyên ở Bình Dương, và đây là người vợ yêu quý nhất trong cuộc đời."
                >
            </a>
            <a href="Album/10.jpg">
                <img 
                    src="Album/10.jpg",
                    data-title="Quà tình yêu"
                    data-description="Heo tình yêu lúc yêu nhau, mỗi lần làm sai gì là bị phạt bỏ tiền vào heo..., búp bê tình yêu."
                >
            </a>
            <a href="Album/11.jpg">
                <img 
                    src="Album/11.jpg",
                    data-title="Tình yêu vượt bão"
                    data-description="Một hôm mưa gió bão bùng, mưa không thấy đường, mưa dữ dội, nhưng vì tình yêu nên không ngại đường xa khó khăn, vượt 30Km từ TPHCM vượt bão xuống Bình Dương ăn tiệc nướng cùng gia đình vợ."
                >
            </a>
            <a href="Album/12.jpg">
                <img 
                    src="Album/12.jpg",
                    data-title="Những ngày tháng yêu nhau"
                    data-description="Những tháng ngày hạnh phúc biết bao!"
                >
            </a>
            <a href="Album/13.jpg">
                <img 
                    src="Album/13.jpg",
                    data-title="Album cưới"
                >
            </a>
            <a href="Album/14.jpg">
                <img 
                    src="Album/14.jpg",
                    data-title="Lê Thanh Nhàn & Nguyễn Kim Nguyên"
                    data-description="09-04-2012."
                >
            </a>
            <a href="Album/15.jpg">
                <img 
                    src="Album/15.jpg",
                    data-title="Vợ mang thai Zeze"
                >
            </a>
            <a href="Album/16.jpg">
                <img 
                    src="Album/16.jpg",
                    data-title="Vợ mang thai Zeze"
                >
            </a>
            <a href="Album/17.jpg">
                <img 
                    src="Album/17.jpg",
                    data-title="Mẹ cho Zeze ăn pizzahuzt"
                >
            </a>
            <a href="Album/18.jpg">
                <img 
                    src="Album/18.jpg",
                    data-title="Những món ngon mẹ và Zeze ăn"
                    data-description="Bánh Plan bà ngoại làm, hàu sửa nướng phô mai, sò dương nướng mỡ hành, bún chả, ốc len sào dừa và sửa đậu nành."
                >
            </a>
            <a href="Album/19.jpg">
                <img 
                    src="Album/19.jpg",
                    data-title="Những món ngon mẹ và Zeze ăn"
                    data-description="Đậu hủ Thái Lan, bạch tuột nướng sa tế."
                >
            </a>
            <a href="Album/20.jpg">
                <img 
                    src="Album/20.jpg",
                    data-title="Kỷ niệm 1 năm ngày cưới"
                    data-description="Ba tặng hoa cho mẹ, gia đình mình đi uống cà phê tại cà phê Melody."
                >
            </a>
            <a href="Album/21.jpg">
                <img 
                    src="Album/21.jpg",
                    data-title="Kỷ niệm 1 năm ngày cưới"
                >
            </a>
            <a href="Album/22.jpg">
                <img 
                    src="Album/22.jpg",
                    data-title="Du hí khu du lịch sinh thái làng văn hóa các dân tộc Củ Chi - 01-05-2013"
                    data-description="Gia đình ba mẹ và bé zeze đi chơi ở Củ Chi."
                >
            </a>
            <a href="Album/23.jpg">
                <img 
                    src="Album/23.jpg",
                    data-title="Du hí khu du lịch sinh thái làng văn hóa các dân tộc Củ Chi - 01-05-2013"
                    data-description="Ba và mẹ nhí nhảnh khi vào tới cổng."
                >
            </a>
            <a href="Album/24.jpg">
                <img 
                    src="Album/24.jpg",
                    data-title="Du hí khu du lịch sinh thái làng văn hóa các dân tộc Củ Chi - 01-05-2013"
                    data-description="Xem đua heo."
                >
            </a>
            <a href="Album/25.jpg">
                <img 
                    src="Album/25.jpg",
                    data-title="Du hí khu du lịch sinh thái làng văn hóa các dân tộc Củ Chi - 01-05-2013"
                    data-description="Xem xiếc vịt, vịt khiêu vũ."
                >
            </a>
            <a href="Album/26.jpg">
                <img 
                    src="Album/26.jpg",
                    data-title="Du hí khu du lịch sinh thái làng văn hóa các dân tộc Củ Chi - 01-05-2013"
                    data-description="Ăn cơm lam và thịt nướng."
                >
            </a>
            <a href="Album/27.jpg">
                <img 
                    src="Album/27.jpg",
                    data-title="Kỷ niệm ngày cưới được 1 năm 1 tháng 1 ngày - 10-05-2013"
                    data-description="Uống coffee."
                >
            </a>
            <a href="Album/28.jpg">
                <img 
                    src="Album/28.jpg",
                    data-title="Về nhà thăm nội - 11-05-2013"
                    data-description="Ăn bún đậu mắm tôm: 169/2 Vo Thi Sau, P7, Q3.<br/> Bánh mì 6 Minh: 170 Vo Van Tan, P3, Q5."
                >
            </a>
            <a href="Album/29.jpg">
                <img 
                    src="Album/29.jpg",
                    data-title="Đi uống cà phê với bạn iu của Mẹ(Hồng) - 14-05-2013"
                    data-description="Kem 55.000đ"
                >
            </a>
            <a href="Album/30.jpg">
                <img 
                    src="Album/30.jpg",
                    data-title="Đi ăn tối với bạn iu của Mẹ(Hồng) - 15-05-2013"
                    data-description="Quán Tây Hồ gần trạm thu phí cầu Phú Cường: Cơm chiên tỏi, gỏi ngó sen, lẩu thái và sườn nướng muối ớt."
                >
            </a>
        </div>
    </div>

    <script>

    // Load the classic theme
    Galleria.loadTheme('js/galleria.azur.min.js');

    // Initialize Galleria
    Galleria.run('#galleria');

    </script>
    </body>
</html>