<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link type="text/css" rel="stylesheet" href="/Mobile_Store/Content/Styles/reset.css" />
    <link type="text/css" rel="stylesheet" href="/Mobile_Store/Content/Styles/styles.css" />
    <link href="/Mobile_Store/Content/Styles/jquery.multiSelect.css" rel="stylesheet" type="text/css" />
    <link href="/Mobile_Store/Content/Styles/slider.css" rel="stylesheet" type="text/css" />
    <link href="/Mobile_Store/Content/Styles/vMenu.css" rel="stylesheet" type="text/css" />
    <script src="/Mobile_Store/Content/Scripts/jquery-1.6.1.min.js" type="text/javascript"></script>
    <script src="/Mobile_Store/Content/Scripts/jquery-ui-1.8.12.custom.min.js" type="text/javascript"></script>
    <link href="/Mobile_Store/Content/Styles/jquery-ui-1.8.5.custom-black-gray.css" rel="stylesheet" type="text/css" media="screen" />
    <script src="/Mobile_Store/Content/Scripts/jquery.multiselect.js" type="text/javascript"></script>
    <script src="/Mobile_Store/Content/Scripts/WebScript.js" type="text/javascript"></script>
    <link rel="stylesheet" href="/Mobile_Store/Content/Styles/jquery-ui.css" />
    <title>Mobile Store</title>
</head>
<body>
<div style="display:none">
    <div id="dialog-form"></div>
</div>
<div id="wrapper">
    <script>
        $(function() {
            var fullKeyword = [
                "Apple iPhone 5S",
                "iPhone 3GS 8GB",
                "The new iPad 3G",
                "iPad Mini 16 GB",
                "iPhone 4S 32 GB",
                "iPad 4 3G Wifi",
                "Galaxy Note N7000",
                "Galaxy S3 - I9300",
                "Galaxy Note 8.0",
                "Nokia Lumia 720",
                "Nokia Lumia 920",
                "Nokia 109",
                "Nokia Lumia 820",
                "HTC One - FPT",
                "HTC One X Plus",
                "Nokia Lumia 620 ",
                "Sony Xperia ZL - Full HD ",
                "Galaxy S4 I9500",
                "Xperia Acro S",
                "Lenovo S880",
                "Google Nexus 4 - 8GB",
                "Optimus G - E975",
                "Optimus 4X HD - P880",
                "HTC Butterfly - FPT",
                "Galaxy Grand Duos - I9082",
                "Galaxy Tab 2 7.0",
                "Nokia C3-01 Gold Edition",
                "Mix Walkman WT13i",
                "Lenovo S720 - FPT",
                "Lenovo S890 5 inch",
                "QSmart Miracle Pad",
                "Q-Smart S2",
                "Apple",
                "Samsung",
                "Nokia",
                "HTC",
                "Sony",
                "Lenovo",
                "LG",
                "QMobile",
                "Android",
                "IOS",
                "Symbian",
                "Windows Phone",
                "Hệ điều hành khác",


            ];

            var KeywordForName = [
                "Apple iPhone 5S",
                "iPhone 3GS 8GB",
                "The new iPad 3G",
                "iPad Mini 16 GB",
                "iPhone 4S 32 GB",
                "iPad 4 3G Wifi",
                "Galaxy Note N7000",
                "Galaxy S3 - I9300",
                "Galaxy Note 8.0",
                "Nokia Lumia 720",
                "Nokia Lumia 920",
                "Nokia 109",
                "Nokia Lumia 820",
                "HTC One - FPT",
                "HTC One X Plus",
                "Nokia Lumia 620 ",
                "Sony Xperia ZL - Full HD ",
                "Galaxy S4 I9500",
                "Xperia Acro S",
                "Lenovo S880",
                "Google Nexus 4 - 8GB",
                "Optimus G - E975",
                "Optimus 4X HD - P880",
                "HTC Butterfly - FPT",
                "Galaxy Grand Duos - I9082",
                "Galaxy Tab 2 7.0",
                "Nokia C3-01 Gold Edition",
                "Mix Walkman WT13i",
                "Lenovo S720 - FPT",
                "Lenovo S890 5 inch",
                "QSmart Miracle Pad",
                "Q-Smart S2",

            ];

            $( "#top-keyword" ).autocomplete({
                source: fullKeyword
            });

            $( "#Keyword" ).autocomplete({
                source: KeywordForName
            });

        });
    </script>
    <script language="javascript">
        function imgError(image){
            image.onerror = "";
            image.src = "Images/logo.gif";
            return true;
        }

        function Search(){
            var kwd = $("#top-keyword").val();
            if (kwd=="Từ khóa tìm kiếm") kwd="";
            var root=/Mobile_Store/;
            window.location.href =root +'SearchController?Type=simple&Keyword=' + kwd +"&page=1";
        }
    </script>
    <!-- Start header --->
    <div id="header">
        <div id="head">
            <div id="logo">
                <a href="/Mobile_Store/"><img src="/Mobile_Store/Content/Images/logo.gif" alt="Hoàng Hà Mobile" onerror='imgError(this);'/></a>
            </div>
            <div id="top-search">
                  <span class="input">
                  <input type="text" name="top-keyword" id="top-keyword" value="Từ khóa tìm kiếm" onfocus="if(this.value=='Từ khóa tìm kiếm') this.value='';" onblur="if(this.value=='') this.value='Từ khóa tìm kiếm'" />
                  </span>
                <span class="submit">
                  <a href="javascript:Search();">Tìm kiếm</a>
                  </span>
            </div>
        </div>
    </div>
    <!-- Ed header --->
    <!-- Start main menu --->
    <div id="top-menu-c">
        <div id="top-menu">
            <ul>
                <li class="first">
                    <a href=""><span>Trang chủ</span></a>
                </li>
                <li>
                    <a href=""><span>Điện thoại</span></a>
                </li>
                <li>
                    <a href=""><span>Phụ kiện</span></a>
                </li>
                <li>
                    <a href=""><span>Tin tức</span></a>
                </li>
                <li>
                    <a href="FAQ.jsp"><span>Hỏi đ&#225;p</span></a>
                </li>
                <li>
                    <a href=""><span>Hướng dẫn sử dụng</span></a>
                </li>
                <li>
                    <a href=""><span>Giới thiệu</span></a>
                </li>
                <li>
                    <a href=""><span>Li&#234;n hệ</span></a>
                </li>
                <li>
                    <a href=""><span>Th&#224;nh vi&#234;n</span></a>
                </li>
                <li><a href=""><span>Đăng xuất</span></a></li>
            </ul>
        </div>
    </div>
    <!-- end main menu --->
    <div id="body">
        <!-- box content -->
        <div id="content">
            <!-- box left -->
            <div class="content-l">
                <div class="header-blue">
                    <span class="title">Quản lý đơn hàng</span>
                    <ul class="brands">
                        <li><a href="">Giỏ hàng</a></li>
                        <li><a href="">Danh sách đơn hàng</a></li>
                    </ul>
                </div>
                <div class="header-blue">
                    <span class="title">Trang cá nhân</span>
                    <ul class="brands">
                        <li><a href="">Trang cá nhân</a></li>
                        <li><a href="">Cập nhật thông tin</a></li>
                        <li><a href="">Đổi mật khẩu</a></li>
                        <li><a href="">Đăng xuất</a></li>
                    </ul>
                </div>
                <!-- Phone Company -->
                <div class="header-blue">
                    <span class="title">Hãng điện thoại</span>
                    <ul class="brands">
                        <!-- Danh sách các hãng điện thoại -->
                        <li><a href="">Apple</a></li>
                        <li><a href="">Samsung</a></li>
                        <li><a href="">Nokia</a></li>
                        <li><a href="">HTC</a></li>
                        <li><a href="">Sony</a></li>
                        <li><a href="">Lenovo</a></li>
                        <li><a href="">LG</a></li>
                        <li><a href="">QMobile</a></li>
                    </ul>
                </div>
                <!-- End Phone Company -->
                <div id="AD_Zone_2"></div>
                <!-- Danh muc dien thoai -->
                <div class="box-device">
                    <h3><span>Danh mục hệ điều hành</span></h3>
                    <div class="vmenu">
                        <ul class="news-category">
                            <!-- Lay thong tin tu He Dieu hanh -->
                            <li><a href="">Android</a>
                            <li><a href="">IOS</a>
                            <li><a href="">Symbian</a>
                            <li><a href="">Windows Phone</a>
                            <li><a href="">Hệ điều hành khác</a>
                        </ul>
                    </div>
                </div>
                <!-- End Danh muc dien thoai -->
                <div class="box-other">
                </div>
                <!-- Danh muc phu kien -->
                <div class="box-device">
                    <h3><span>Danh mục phụ kiện</span></h3>
                    <div class="vmenu">
                        <ul class="news-category">
                            <li><a href="">Phụ kiện iPad</a>
                            <li><a href="">Phụ kiện iPhone</a>
                            <li><a href="">Máy nghe nhạc</a>
                            <li><a href="">Sạc - Pin</a>
                            <li><a href="">Tai nghe</a>
                            <li><a href="">Thẻ nhớ</a>
                            <li><a href="">Thiết bị kết nối</a>
                        </ul>
                    </div>
                </div>
                <!-- End Danh muc phu kien -->
            </div>
            <!-- /box left -->
            <!-- box right -->
            <div class="content-r">
                <style>
                    .mobile-price .item { vertical-align:middle}
                    .mobile-price .item p{ line-height:150%;}
                </style>
                <div class="nav">
                    <ul class="left">
                        <li><a href="http://www.hoanghamobile.com/">Trang chủ</a></li>
                        <li><span> » </span></li>
                        <li><a class="actived" href="">Giỏ hàng</a></li>
                    </ul>
                    <ul class="right">
                    </ul>
                </div>
                <div class="header-info">
                    <form method="post" action="/Mobile_Store/CartController">
                        <table class="mobile-price" cellspacing="1">
                            <tbody>
                            <tr>
                                <th style="width:100px">
                                    Ảnh
                                </th>
                                <th>
                                    Sản phẩm
                                </th>
                                <th>Màu</th>
                                <th style="width:90px;">
                                    Giá tiền
                                </th>
                                <th style="width:20px;">
                                    SL
                                </th>
                                <th style="width:100px;">
                                    Thành tiền
                                </th>
                                <th style="width:30px;">Xóa</th>
                            </tr>
                            <tr class="odd">
                                <td class="item">
                                    <a class="image-mobile" title="" href="#" style="background:url('/Mobile_Store/Content/Images/Phones/iPhone5.jpg') no-repeat 50% 50%;">
                                    </a>
                                </td>
                                <td class="item">
                                    <strong style="font-weight:bold;"><a href="">Apple iPhone 5S</a></strong>
                                </td>
                                <td class="item">
                                    <div>
                                        <b>Đen</b>
                                    </div>
                                </td>
                                <td class="item">
                                    <span class="price-value">14,890,000 VNĐ</span>
                                </td>
                                <td class="item">
                                    <input type="text" value="2" name="Number_Mobile_9" style="width:30px;">
                                </td>
                                <td class="item">
                                    <span class="price-value">29,780,000 VNĐ</span>
                                </td>
                                <td class="item">
                                    <a href="">Xóa</a>
                                </td>
                            </tr>
                            <tr class="odd">
                                <td class="item">
                                    <a class="image-mobile" title="" href="#" style="background:url('/Mobile_Store/Content/Images/Phones/ipad_mini_white.png') no-repeat 50% 50%;">
                                    </a>
                                </td>
                                <td class="item">
                                    <strong style="font-weight:bold;"><a href="">iPad Mini 16 GB</a></strong>
                                </td>
                                <td class="item">
                                    <div>
                                        <b>Trắng</b>
                                    </div>
                                </td>
                                <td class="item">
                                    <span class="price-value">12,500,000 VNĐ</span>
                                </td>
                                <td class="item">
                                    <input type="text" value="1" name="Number_Mobile_15" style="width:30px;">
                                </td>
                                <td class="item">
                                    <span class="price-value">12,500,000 VNĐ</span>
                                </td>
                                <td class="item">
                                    <a href="">Xóa</a>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="8">
                                    <p>
                                        <b>Tổng tiền</b>: <span class="price-value">
                                       42,280,000 VNĐ
                                       </span>
                                        <i style="font-style:italic"></i>
                                    </p>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                        <p class="submit" style="padding:10px; 0px;">
                            <input type="hidden" name="action" value="update">
                            <input type="submit" value="Cập nhật giỏ hàng"> &nbsp;
                            <input type="button" value="Thực hiện đặt hàng" onclick="window.location.href=''"> &nbsp;
                            <input type="button" value="Hướng dẫn đặt hàng" onclick="window.location.href='/Mobile_Store/GuideController?action=viewGuideDetail&id=7'"> &nbsp;
                            <input type="button" value="Tiếp tục mua hàng" onclick="window.location.href=''">
                        </p>
                    </form>
                </div>
            </div>
            <!-- box right -->
        </div>
        <!-- box content -->
        <!-- footer -->
        <div id="footer">
            <div class="footer-c">
                <p class="footer-l">
                    <span><strong>Trụ sở chính:</strong> Siêu thị 194 Lê Duẩn - Hồ Chí Minh. <strong>Điện thoại:</strong> 043.5186033</span>
                    <span><strong>Chi nhánh:</strong> Siêu thị 122 Thái Hà - Hà Nội. <strong>Điện thoại:</strong> 097.379.0122</span>
                    <span><strong>Chi nhánh:</strong> Siêu thị 382 Nguyễn Văn Cừ - Hà Nội. <strong>Điện thoại:</strong> 0125.363.2222</span>
                    <span><strong>Chi nhánh:</strong> Siêu thị 392 cầu giấy - Hà Nội. <strong>Điện thoại:</strong> 0968.32.33.99</span>
                    <span><strong>Website:</strong> <a href="http://www.hoanghamobile.com">http://www.hoanghamobile.com</a> | <a href="http://hoanghamobile.com">http://hoanghamobile.com</a></span>
                    <span><strong>Email:</strong> <a href="mailto:contact@hoanghamobile.com">contact@hoanghamobile.com</a></span>
                </p>
                <p class="footer-r">
                    <a href="mailto:webmaster@dangquang.com.vn">© 2011 QuangGame</a>
                </p>
            </div>
        </div>
        <!-- end footer -->
    </div>
</div>
</body>
</html>
