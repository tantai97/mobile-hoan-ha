<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <link type="text/css" rel="stylesheet" href="/Mobile_Store/Content/Styles/reset.css"/>
    <link type="text/css" rel="stylesheet" href="/Mobile_Store/Content/Styles/styles.css"/>
    <link href="/Mobile_Store/Content/Styles/jquery.multiSelect.css" rel="stylesheet" type="text/css"/>
    <link href="/Mobile_Store/Content/Styles/slider.css" rel="stylesheet" type="text/css"/>
    <link href="/Mobile_Store/Content/Styles/vMenu.css" rel="stylesheet" type="text/css"/>
    <script src="/Mobile_Store/Content/Scripts/jquery-1.6.1.min.js" type="text/javascript"></script>
    <script src="/Mobile_Store/Content/Scripts/jquery-ui-1.8.12.custom.min.js" type="text/javascript"></script>
    <link href="/Mobile_Store/Content/Styles/jquery-ui-1.8.5.custom-black-gray.css" rel="stylesheet" type="text/css"
          media="screen"/>
    <script src="/Mobile_Store/Content/Scripts/jquery.multiselect.js" type="text/javascript"></script>
    <script src="/Mobile_Store/Content/Scripts/WebScript.js" type="text/javascript"></script>
    <link rel="stylesheet" href="/Mobile_Store/Content/Styles/jquery-ui.css"/>
    <title>Mobile Store</title>
    <!-- Script for slider -->
    <script type="text/javascript">
        $(function () {
            $('#slides').slides({
                preload: true,
                preloadImage: 'Content/Images/slider0/loading.gif',
                play: 5000,
                pause: 2500,
                hoverPause: true,
                effect: 'slide, fade'
            });
        });
    </script>
    <link href="Content/Styles/silder0.css" rel="stylesheet" type="text/css"/>
    <script src="Content/Scripts/slides.min.jquery.js" type="text/javascript"></script>
    <!-- Script for slider -->
</head>
<body>
<div style="display:none">
    <div id="dialog-form"></div>
</div>
<div id="wrapper">
    <script>
        $(function () {
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

            $("#top-keyword").autocomplete({
                source: fullKeyword
            });

            $("#Keyword").autocomplete({
                source: KeywordForName
            });

        });
    </script>
    <script language="javascript">
        function imgError(image) {
            image.onerror = "";
            image.src = "Images/logo.gif";
            return true;
        }

        function Search() {
            var kwd = $("#top-keyword").val();
            if (kwd == "Từ khóa tìm kiếm") kwd = "";
            var root = /Mobile_Store/;
            window.location.href = root + 'SearchController?Type=simple&Keyword=' + kwd + "&page=1";
        }
    </script>
    <!-- Start header --->
    <div id="header">
        <div id="head">
            <div id="logo">
                <a href="/Mobile_Store/"><img src="/Mobile_Store/Content/Images/logo.gif" alt="Hoàng Hà Mobile"
                                              onerror='imgError(this);'/></a>
            </div>
            <div id="top-search">
                  <span class="input">
                  <input type="text" name="top-keyword" id="top-keyword" value="Từ khóa tìm kiếm"
                         onfocus="if(this.value=='Từ khóa tìm kiếm') this.value='';"
                         onblur="if(this.value=='') this.value='Từ khóa tìm kiếm'"/>
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
                <!--  Insert Phone Company -->
            </div>
            <!-- end box left -->
            <!-- box right -->
            <div class="content-r">
                <!-- big banner image -->
                <div id="example">
                    <div id="slides">
                        <div class="slides_container">
                            <div class="mobileHot">
                                <a href=""/><img
                                    src="Content/Images/slide/slide1.jpg"/></a>
                            </div>
                            <div class="mobileHot">
                                <a href=""/><img
                                    src="Content/Images/slide/slide3.jpg"/></a>
                            </div>
                            <div class="mobileHot">
                                <a href=""/><img
                                    src="Content/Images/slide/slide4.png"/></a>
                            </div>
                            <div class="mobileHot">
                                <a href=""/><img
                                    src="Content/Images/slide/slide5.jpg"/></a>
                            </div>
                        </div>
                        <!-- end slide_contenter -->
                        <!-- Start control button -->
                        <a href="#" class="prev"><img src="Content/Images/pikachoose/prev.png" width="28" height="44"
                                                      alt="Arrow Prev"></a>
                        <a href="#" class="next"><img src="Content/Images/pikachoose/next.png" width="28" height="44"
                                                      alt="Arrow Next"></a>        <!-- End control button -->
                    </div>
                    <!-- end slide -->
                </div>
                <!-- end big banner image -->
                <link href="Content/Styles/slidingboxes.css" rel="stylesheet" type="text/css"/>
                <script src="Content/Scripts/slidingboxes.js" type="text/javascript"></script>
                <!-- start slidingbox -->
                <div class="slidingbox">
                    <div class="box-boxgrid-container">
                        <div class="boxgrid caption">
                            <a href=""><img
                                    src="Content/Images/Phones/iPhone5.jpg" alt="Apple iPhone 5S"/></a>
                            <div class="cover boxcaption">
                                <h3>Apple iPhone 5S</h3>
                                <p>
                                    Giá tiền:
                                    14,890,000 VNĐ
                                    <br/>
                                </p>
                                <p><a href="">Xem chi tiết</a></p>
                            </div>
                        </div>
                    </div>
                    <div class="box-boxgrid-container">
                        <div class="boxgrid caption">
                            <a href=""><img
                                    src="Content/Images/Phones/note1.jpg" alt="Galaxy Note N7000"/></a>
                            <div class="cover boxcaption">
                                <h3>Galaxy Note N7000</h3>
                                <p>
                                    Giá tiền:
                                    8,590,000 VNĐ
                                    <br/>
                                </p>
                                <p><a href="">Xem chi tiết</a></p>
                            </div>
                        </div>
                    </div>
                    <div class="box-boxgrid-container">
                        <div class="boxgrid caption">
                            <a href=""><img
                                    src="Content/Images/Phones/famous_1.jpg" alt="Galaxy S4 I9500"/></a>
                            <div class="cover boxcaption">
                                <h3>Galaxy S4 I9500</h3>
                                <p>
                                    Giá tiền:
                                    14,890,000 VNĐ
                                    <br/>
                                </p>
                                <p><a href="">Xem chi tiết</a></p>
                            </div>
                        </div>
                    </div>
                    <div class="box-boxgrid-container">
                        <div class="boxgrid caption">
                            <a href=""><img
                                    src="Content/Images/Phones/famous_2.jpg" alt="Xperia Acro S"/></a>
                            <div class="cover boxcaption">
                                <h3>Xperia Acro S</h3>
                                <p>
                                    Giá tiền:
                                    6,390,000 VNĐ
                                    <br/>
                                </p>
                                <p><a href="">Xem chi tiết</a></p>
                            </div>
                        </div>
                    </div>
                    <div class="box-boxgrid-container">
                        <div class="boxgrid caption">
                            <a href=""><img
                                    src="Content/Images/Phones/famous_3.png" alt="Lenovo S880"/></a>
                            <div class="cover boxcaption">
                                <h3>Lenovo S880</h3>
                                <p>
                                    Giá tiền:
                                    3,990,000 VNĐ
                                    <br/>
                                </p>
                                <p><a href="">Xem chi tiết</a></p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end slidingbox -->
            </div>
            <!-- End box right -->
        </div>
        <!-- end box content -->
        <!-- The second content -->
        <div class="content-lv2">
            <!-- 2nd Content left - Phone info -->
            <div class="content-l">
                <!--	Ghi chú
                   1 Table tương ứng với 1 danh mục của điện thoại
                   1 tr tương tứng với 1 hàng ngang, thường gồm 3 cái dt kèm thông tin
                   trong 1 tr thường có 3 cặp <td image> và <td info> đại diện cho ảnh
                   và thong tin của điện thoại
                   -->
                <!-- Vòng lặp qua các hãng điện thoại -->
                <div class="box-brand">
                    <div class="header2">
                        <span class="title"><span><a
                                    href="">Apple</a></span></span>
                    </div>
                    <div class="content">
                        <div class="content-c">
                            <table class="list-mobile" width="100%">
                                <!-- Truy vấn danh sách các điện thoại của mỗi hãng -->
                                <!-- Vòng lặp qua từng chiếc điện thoại ứng với mỗi hãng điện thoại -->
                                <tr>
                                    <td class="image">
                                        <a class="image-mobile" title="" href=""
                                           style="background:url('Content/Images/Phones/ipad4.png') no-repeat 50% 50%;">
                                        </a>
                                    </td>
                                    <td class="info">
                                        <span class="name"><a title="" href="">iPad 4 3G Wifi</a></span>
                                        <!-- Truy vấn danh sách các phụ kiện tương thích của điện thoại -->
                                        <ul>
                                            <li>Bảo hành: 12 tháng</li>
                                            <li>Đã gồm <b style="color:red;">10 %</b> VAT.</li>
                                            <li><b>Phụ kiện:</b>
                                                Bao da điện thoại.&nbsp;
                                                iPod Shuffle gen 4 2G.&nbsp;
                                                PPSL-14.&nbsp;
                                                Tai nghe BH 209.&nbsp;
                                            <li>
                                        </ul>
                                        <p><br>
                                            <span class="price">
                                       <span class="price-value">
                                       15,678,000 VNĐ
                                       </span>
                                       </span>
                                        </p>
                                    </td>
                                    <td class="image">
                                        <a class="image-mobile" title="" href=""
                                           style="background:url('Content/Images/Phones/iphone 4s.png') no-repeat 50% 50%;">
                                        </a>
                                    </td>
                                    <td class="info">
                                        <span class="name"><a title="" href="">iPhone 4S 32 GB</a></span>
                                        <!-- Truy vấn danh sách các phụ kiện tương thích của điện thoại -->
                                        <ul>
                                            <li>Bảo hành: 12 tháng</li>
                                            <li>Đã gồm <b style="color:red;">10 %</b> VAT.</li>
                                            <li><b>Phụ kiện:</b>
                                                Bao da iPad Belk.&nbsp;
                                                iPod Shuffle gen 4 2G.&nbsp;
                                                BST 40.&nbsp;
                                                M2 1GB.&nbsp;
                                            <li>
                                        </ul>
                                        <p><br>
                                            <span class="price">
                                       <span class="price-value">
                                       11,532,000 VNĐ
                                       </span>
                                       </span>
                                        </p>
                                    </td>
                                    <td class="image">
                                        <a class="image-mobile" title="" href=""
                                           style="background:url('Content/Images/Phones/ipad_mini_white.png') no-repeat 50% 50%;">
                                        </a>
                                    </td>
                                    <td class="info">
                                        <span class="name"><a title="" href="">iPad Mini 16 GB</a></span>
                                        <!-- Truy vấn danh sách các phụ kiện tương thích của điện thoại -->
                                        <ul>
                                            <li>Bảo hành: 12 tháng</li>
                                            <li>Đã gồm <b style="color:red;">10 %</b> VAT.</li>
                                            <li><b>Phụ kiện:</b>
                                                iPod Shuffle gen 4 2G.&nbsp;
                                                PPSL-14.&nbsp;
                                                Bộ Pin + Sạc cốc.&nbsp;
                                                TranFlash 8GB.&nbsp;
                                            <li>
                                        </ul>
                                        <p><br>
                                            <span class="price">
                                       <span class="price-value">
                                       12,500,000 VNĐ
                                       </span>
                                       </span>
                                        </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="image">
                                        <a class="image-mobile" title="" href=""
                                           style="background:url('Content/Images/Phones/thenwipad.jpg') no-repeat 50% 50%;">
                                        </a>
                                    </td>
                                    <td class="info">
                                        <span class="name"><a title="" href="">The new iPad 3G</a></span>
                                        <!-- Truy vấn danh sách các phụ kiện tương thích của điện thoại -->
                                        <ul>
                                            <li>Bảo hành: 12 tháng</li>
                                            <li>Đã gồm <b style="color:red;">10 %</b> VAT.</li>
                                            <li><b>Phụ kiện:</b>
                                                Bao da điện thoại.&nbsp;
                                                Tai nghe SE HPM 85.&nbsp;
                                                Tai nghe BH 209.&nbsp;
                                                TranFlash 8GB.&nbsp;
                                            <li>
                                        </ul>
                                        <p><br>
                                            <span class="price">
                                       <span class="price-value">
                                       12,000,000 VNĐ
                                       </span>
                                       </span>
                                        </p>
                                    </td>
                                    <td class="image">
                                        <a class="image-mobile" title="" href=""
                                           style="background:url('Content/Images/Phones/iphone3gs.png') no-repeat 50% 50%;">
                                        </a>
                                    </td>
                                    <td class="info">
                                        <span class="name"><a title="" href="">iPhone 3GS 8GB</a></span>
                                        <!-- Truy vấn danh sách các phụ kiện tương thích của điện thoại -->
                                        <ul>
                                            <li>Bảo hành: 12 tháng</li>
                                            <li>Đã gồm <b style="color:red;">10 %</b> VAT.</li>
                                            <li><b>Phụ kiện:</b>
                                                Bao da iPad Belk.&nbsp;
                                                PPSL-14.&nbsp;
                                                BST 40.&nbsp;
                                                Tai nghe BH 209.&nbsp;
                                            <li>
                                        </ul>
                                        <p><br>
                                            <span class="price">
                                       <span class="price-value">
                                       7,900,000 VNĐ
                                       </span>
                                       </span>
                                        </p>
                                    </td>
                                    <td class="image">
                                        <a class="image-mobile" title="" href=""
                                           style="background:url('Content/Images/Phones/iPhone5.jpg') no-repeat 50% 50%;">
                                        </a>
                                    </td>
                                    <td class="info">
                                        <span class="name"><a title="" href="">Apple iPhone 5S</a></span>
                                        <!-- Truy vấn danh sách các phụ kiện tương thích của điện thoại -->
                                        <ul>
                                            <li>Bảo hành: 12 tháng</li>
                                            <li>Đã gồm <b style="color:red;">10 %</b> VAT.</li>
                                            <li><b>Phụ kiện:</b>
                                                Bao da iPad Belk.&nbsp;
                                                PPSL-14.&nbsp;
                                                Bộ Pin + Sạc cốc.&nbsp;
                                                M2 1GB.&nbsp;
                                            <li>
                                        </ul>
                                        <p><br>
                                            <span class="price">
                                       <span class="price-value">
                                       14,890,000 VNĐ
                                       </span>
                                       </span>
                                        </p>
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="box-brand">
                    <div class="header2">
                        <span class="title"><span><a
                                    href="">Samsung</a></span></span>
                    </div>
                    <div class="content">
                        <div class="content-c">
                            <table class="list-mobile" width="100%">
                                <!-- Truy vấn danh sách các điện thoại của mỗi hãng -->
                                <!-- Vòng lặp qua từng chiếc điện thoại ứng với mỗi hãng điện thoại -->
                                <tr>
                                    <td class="image">
                                        <a class="image-mobile" title="" href=""
                                           style="background:url('Content/Images/Phones/galaxyTab2.png') no-repeat 50% 50%;">
                                        </a>
                                    </td>
                                    <td class="info">
                                        <span class="name"><a title="" href="">Galaxy Tab 2 7.0</a></span>
                                        <!-- Truy vấn danh sách các phụ kiện tương thích của điện thoại -->
                                        <ul>
                                            <li>Bảo hành: 12 tháng</li>
                                            <li>Đã gồm <b style="color:red;">10 %</b> VAT.</li>
                                            <li><b>Phụ kiện:</b>
                                                Bao da iPad Belk.&nbsp;
                                                Tai nghe BH 209.&nbsp;
                                                Bao da Silicon.&nbsp;
                                                Đầu Đọc Apacer all in 1.&nbsp;
                                            <li>
                                        </ul>
                                        <p><br>
                                            <span class="price">
                                       <span class="price-value">
                                       6,990,000 VNĐ
                                       </span>
                                       </span>
                                        </p>
                                    </td>
                                    <td class="image">
                                        <a class="image-mobile" title="" href=""
                                           style="background:url('Content/Images/Phones/galaxy-Grand-Duos-I9082.png') no-repeat 50% 50%;">
                                        </a>
                                    </td>
                                    <td class="info">
                                        <span class="name"><a title="" href="">Galaxy Grand Duos - I9082</a></span>
                                        <!-- Truy vấn danh sách các phụ kiện tương thích của điện thoại -->
                                        <ul>
                                            <li>Bảo hành: 12 tháng</li>
                                            <li>Đã gồm <b style="color:red;">10 %</b> VAT.</li>
                                            <li><b>Phụ kiện:</b>
                                                Bộ Pin + Sạc cốc.&nbsp;
                                                Bao da smartcover Ipad.&nbsp;
                                                Cáp LG.&nbsp;
                                                Đầu Đọc Apacer all in 1.&nbsp;
                                            <li>
                                        </ul>
                                        <p><br>
                                            <span class="price">
                                       <span class="price-value">
                                       7,550,000 VNĐ
                                       </span>
                                       </span>
                                        </p>
                                    </td>
                                    <td class="image">
                                        <a class="image-mobile" title="" href=""
                                           style="background:url('Content/Images/Phones/Galaxy_S4_I9500.jpg') no-repeat 50% 50%;">
                                        </a>
                                    </td>
                                    <td class="info">
                                        <span class="name"><a title="" href="">Galaxy S4 I9500</a></span>
                                        <!-- Truy vấn danh sách các phụ kiện tương thích của điện thoại -->
                                        <ul>
                                            <li>Bảo hành: 12 tháng</li>
                                            <li>Đã gồm <b style="color:red;">10 %</b> VAT.</li>
                                            <li><b>Phụ kiện:</b>
                                                iPod Shuffle gen 4 2G.&nbsp;
                                                PPSL-14.&nbsp;
                                                Bộ Pin + Sạc cốc.&nbsp;
                                                BST 40.&nbsp;
                                            <li>
                                        </ul>
                                        <p><br>
                                            <span class="price">
                                       <span class="price-value">
                                       14,890,000 VNĐ
                                       </span>
                                       </span>
                                        </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="image">
                                        <a class="image-mobile" title="" href=""
                                           style="background:url('Content/Images/Phones/galaxy-note-8.jpg') no-repeat 50% 50%;">
                                        </a>
                                    </td>
                                    <td class="info">
                                        <span class="name"><a title="" href="">Galaxy Note 8.0</a></span>
                                        <!-- Truy vấn danh sách các phụ kiện tương thích của điện thoại -->
                                        <ul>
                                            <li>Bảo hành: 12 tháng</li>
                                            <li>Đã gồm <b style="color:red;">10 %</b> VAT.</li>
                                            <li><b>Phụ kiện:</b>
                                                Bao da iPad Belk.&nbsp;
                                                Tai nghe SE HPM 85.&nbsp;
                                                TranFlash 8GB.&nbsp;
                                                M2 1GB.&nbsp;
                                            <li>
                                        </ul>
                                        <p><br>
                                            <span class="price">
                                       <span class="price-value">
                                       12,500,000 VNĐ
                                       </span>
                                       </span>
                                        </p>
                                    </td>
                                    <td class="image">
                                        <a class="image-mobile" title="" href=""
                                           style="background:url('Content/Images/Phones/s3.jpg') no-repeat 50% 50%;">
                                        </a>
                                    </td>
                                    <td class="info">
                                        <span class="name"><a title="" href="">Galaxy S3 - I9300</a></span>
                                        <!-- Truy vấn danh sách các phụ kiện tương thích của điện thoại -->
                                        <ul>
                                            <li>Bảo hành: 12 tháng</li>
                                            <li>Đã gồm <b style="color:red;">10 %</b> VAT.</li>
                                            <li><b>Phụ kiện:</b>
                                                Bao da iPad Belk.&nbsp;
                                                Bao da điện thoại.&nbsp;
                                                iPod Shuffle gen 4 2G.&nbsp;
                                                Tai nghe SE HPM 85.&nbsp;
                                            <li>
                                        </ul>
                                        <p><br>
                                            <span class="price">
                                       <span class="price-value">
                                       78,965,000 VNĐ
                                       </span>
                                       </span>
                                        </p>
                                    </td>
                                    <td class="image">
                                        <a class="image-mobile" title="" href=""
                                           style="background:url('Content/Images/Phones/note1.jpg') no-repeat 50% 50%;">
                                        </a>
                                    </td>
                                    <td class="info">
                                        <span class="name"><a title="" href="">Galaxy Note N7000</a></span>
                                        <!-- Truy vấn danh sách các phụ kiện tương thích của điện thoại -->
                                        <ul>
                                            <li>Bảo hành: 12 tháng</li>
                                            <li>Đã gồm <b style="color:red;">10 %</b> VAT.</li>
                                            <li><b>Phụ kiện:</b>
                                                Bao da điện thoại.&nbsp;
                                                Bộ Pin + Sạc cốc.&nbsp;
                                                BST 40.&nbsp;
                                                Tai nghe SE HPM 85.&nbsp;
                                                TranFlash 8GB.&nbsp;
                                            <li>
                                        </ul>
                                        <p><br>
                                            <span class="price">
                                       <span class="price-value">
                                       8,590,000 VNĐ
                                       </span>
                                       </span>
                                        </p>
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="box-brand">
                    <div class="header2">
                        <span class="title"><span><a
                                    href="">Nokia</a></span></span>
                    </div>
                    <div class="content">
                        <div class="content-c">
                            <table class="list-mobile" width="100%">
                                <!-- Truy vấn danh sách các điện thoại của mỗi hãng -->
                                <!-- Vòng lặp qua từng chiếc điện thoại ứng với mỗi hãng điện thoại -->
                                <tr>
                                    <td class="image">
                                        <a class="image-mobile" title="" href=""
                                           style="background:url('Content/Images/Phones/nokia_c.jpg') no-repeat 50% 50%;">
                                        </a>
                                    </td>
                                    <td class="info">
                                        <span class="name"><a title="" href="">Nokia C3-01 Gold Edition</a></span>
                                        <!-- Truy vấn danh sách các phụ kiện tương thích của điện thoại -->
                                        <ul>
                                            <li>Bảo hành: 12 tháng</li>
                                            <li>Đã gồm <b style="color:red;">10 %</b> VAT.</li>
                                            <li><b>Phụ kiện:</b>
                                                Bao da điện thoại.&nbsp;
                                                PPSL-14.&nbsp;
                                                Bao da smartcover Ipad.&nbsp;
                                                Cáp LG.&nbsp;
                                            <li>
                                        </ul>
                                        <p><br>
                                            <span class="price">
                                       <span class="price-value">
                                       5,450,000 VNĐ
                                       </span>
                                       </span>
                                        </p>
                                    </td>
                                    <td class="image">
                                        <a class="image-mobile" title="" href=""
                                           style="background:url('Content/Images/Phones/lumia_620.png') no-repeat 50% 50%;">
                                        </a>
                                    </td>
                                    <td class="info">
                                        <span class="name"><a title="" href="">Nokia Lumia 620 </a></span>
                                        <!-- Truy vấn danh sách các phụ kiện tương thích của điện thoại -->
                                        <ul>
                                            <li>Bảo hành: 12 tháng</li>
                                            <li>Đã gồm <b style="color:red;">10 %</b> VAT.</li>
                                            <li><b>Phụ kiện:</b>
                                                Bao da iPad Belk.&nbsp;
                                                iPod Shuffle gen 4 2G.&nbsp;
                                                Tai nghe BH 209.&nbsp;
                                                M2 1GB.&nbsp;
                                            <li>
                                        </ul>
                                        <p><br>
                                            <span class="price">
                                       <span class="price-value">
                                       4,630,000 VNĐ
                                       </span>
                                       </span>
                                        </p>
                                    </td>
                                    <td class="image">
                                        <a class="image-mobile" title="" href=""
                                           style="background:url('Content/Images/Phones/Nokia-Lu820.jpg') no-repeat 50% 50%;">
                                        </a>
                                    </td>
                                    <td class="info">
                                        <span class="name"><a title="" href="">Nokia Lumia 820</a></span>
                                        <!-- Truy vấn danh sách các phụ kiện tương thích của điện thoại -->
                                        <ul>
                                            <li>Bảo hành: 12 tháng</li>
                                            <li>Đã gồm <b style="color:red;">10 %</b> VAT.</li>
                                            <li><b>Phụ kiện:</b>
                                                Bao da iPad Belk.&nbsp;
                                                iPod Shuffle gen 4 2G.&nbsp;
                                                Tai nghe BH 209.&nbsp;
                                                M2 1GB.&nbsp;
                                            <li>
                                        </ul>
                                        <p><br>
                                            <span class="price">
                                       <span class="price-value">
                                       4,500,000 VNĐ
                                       </span>
                                       </span>
                                        </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="image">
                                        <a class="image-mobile" title="" href=""
                                           style="background:url('Content/Images/Phones/nokia_109.png') no-repeat 50% 50%;">
                                        </a>
                                    </td>
                                    <td class="info">
                                        <span class="name"><a title="" href="">Nokia 109</a></span>
                                        <!-- Truy vấn danh sách các phụ kiện tương thích của điện thoại -->
                                        <ul>
                                            <li>Bảo hành: 12 tháng</li>
                                            <li>Đã gồm <b style="color:red;">10 %</b> VAT.</li>
                                            <li><b>Phụ kiện:</b>
                                                Bao da iPad Belk.&nbsp;
                                                iPod Shuffle gen 4 2G.&nbsp;
                                                Tai nghe SE HPM 85.&nbsp;
                                                TranFlash 8GB.&nbsp;
                                            <li>
                                        </ul>
                                        <p><br>
                                            <span class="price">
                                       <span class="price-value">
                                       1,500,000 VNĐ
                                       </span>
                                       </span>
                                        </p>
                                    </td>
                                    <td class="image">
                                        <a class="image-mobile" title="" href=""
                                           style="background:url('Content/Images/Phones/lumia920.jpg') no-repeat 50% 50%;">
                                        </a>
                                    </td>
                                    <td class="info">
                                        <span class="name"><a title="" href="">Nokia Lumia 920</a></span>
                                        <!-- Truy vấn danh sách các phụ kiện tương thích của điện thoại -->
                                        <ul>
                                            <li>Bảo hành: 12 tháng</li>
                                            <li>Đã gồm <b style="color:red;">10 %</b> VAT.</li>
                                            <li><b>Phụ kiện:</b>
                                                Bao da điện thoại.&nbsp;
                                                iPod Shuffle gen 4 2G.&nbsp;
                                                BST 40.&nbsp;
                                                Tai nghe SE HPM 85.&nbsp;
                                            <li>
                                        </ul>
                                        <p><br>
                                            <span class="price">
                                       <span class="price-value">
                                       6,500,000 VNĐ
                                       </span>
                                       </span>
                                        </p>
                                    </td>
                                    <td class="image">
                                        <a class="image-mobile" title="" href=""
                                           style="background:url('Content/Images/Phones/nokia_lumia_720.png') no-repeat 50% 50%;">
                                        </a>
                                    </td>
                                    <td class="info">
                                        <span class="name"><a title="" href="">Nokia Lumia 720</a></span>
                                        <!-- Truy vấn danh sách các phụ kiện tương thích của điện thoại -->
                                        <ul>
                                            <li>Bảo hành: 12 tháng</li>
                                            <li>Đã gồm <b style="color:red;">10 %</b> VAT.</li>
                                            <li><b>Phụ kiện:</b>
                                                Bao da iPad Belk.&nbsp;
                                                PPSL-14.&nbsp;
                                                Bộ Pin + Sạc cốc.&nbsp;
                                                Tai nghe SE HPM 85.&nbsp;
                                            <li>
                                        </ul>
                                        <p><br>
                                            <span class="price">
                                       <span class="price-value">
                                       7,500,000 VNĐ
                                       </span>
                                       </span>
                                        </p>
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="box-brand">
                    <div class="header2">
                        <span class="title"><span><a
                                    href="">HTC</a></span></span>
                    </div>
                    <div class="content">
                        <div class="content-c">
                            <table class="list-mobile" width="100%">
                                <!-- Truy vấn danh sách các điện thoại của mỗi hãng -->
                                <!-- Vòng lặp qua từng chiếc điện thoại ứng với mỗi hãng điện thoại -->
                                <tr>
                                    <td class="image">
                                        <a class="image-mobile" title="" href=""
                                           style="background:url('Content/Images/Phones/htc_butterfly.png') no-repeat 50% 50%;">
                                        </a>
                                    </td>
                                    <td class="info">
                                        <span class="name"><a title="" href="">HTC Butterfly - FPT</a></span>
                                        <!-- Truy vấn danh sách các phụ kiện tương thích của điện thoại -->
                                        <ul>
                                            <li>Bảo hành: 12 tháng</li>
                                            <li>Đã gồm <b style="color:red;">10 %</b> VAT.</li>
                                            <li><b>Phụ kiện:</b>
                                                Bao da điện thoại.&nbsp;
                                                iPod Shuffle gen 4 2G.&nbsp;
                                                TranFlash 8GB.&nbsp;
                                                M2 1GB.&nbsp;
                                            <li>
                                        </ul>
                                        <p><br>
                                            <span class="price">
                                       <span class="price-value">
                                       13,990,000 VNĐ
                                       </span>
                                       </span>
                                        </p>
                                    </td>
                                    <td class="image">
                                        <a class="image-mobile" title="" href=""
                                           style="background:url('Content/Images/Phones/htc_onex_plus.png') no-repeat 50% 50%;">
                                        </a>
                                    </td>
                                    <td class="info">
                                        <span class="name"><a title="" href="">HTC One X Plus</a></span>
                                        <!-- Truy vấn danh sách các phụ kiện tương thích của điện thoại -->
                                        <ul>
                                            <li>Bảo hành: 12 tháng</li>
                                            <li>Đã gồm <b style="color:red;">10 %</b> VAT.</li>
                                            <li><b>Phụ kiện:</b>
                                                Bao da điện thoại.&nbsp;
                                                iPod Shuffle gen 4 2G.&nbsp;
                                                BST 40.&nbsp;
                                                TranFlash 8GB.&nbsp;
                                            <li>
                                        </ul>
                                        <p><br>
                                            <span class="price">
                                       <span class="price-value">
                                       10,690,000 VNĐ
                                       </span>
                                       </span>
                                        </p>
                                    </td>
                                    <td class="image">
                                        <a class="image-mobile" title="" href=""
                                           style="background:url('Content/Images/Phones/htc_one_fpt.png') no-repeat 50% 50%;">
                                        </a>
                                    </td>
                                    <td class="info">
                                        <span class="name"><a title="" href="">HTC One - FPT</a></span>
                                        <!-- Truy vấn danh sách các phụ kiện tương thích của điện thoại -->
                                        <ul>
                                            <li>Bảo hành: 12 tháng</li>
                                            <li>Đã gồm <b style="color:red;">10 %</b> VAT.</li>
                                            <li><b>Phụ kiện:</b>
                                                Bao da iPad Belk.&nbsp;
                                                PPSL-14.&nbsp;
                                                Tai nghe SE HPM 85.&nbsp;
                                                Tai nghe BH 209.&nbsp;
                                            <li>
                                        </ul>
                                        <p><br>
                                            <span class="price">
                                       <span class="price-value">
                                       15,290,000 VNĐ
                                       </span>
                                       </span>
                                        </p>
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="box-brand">
                    <div class="header2">
                        <span class="title"><span><a
                                    href="">Sony</a></span></span>
                    </div>
                    <div class="content">
                        <div class="content-c">
                            <table class="list-mobile" width="100%">
                                <!-- Truy vấn danh sách các điện thoại của mỗi hãng -->
                                <!-- Vòng lặp qua từng chiếc điện thoại ứng với mỗi hãng điện thoại -->
                                <tr>
                                    <td class="image">
                                        <a class="image-mobile" title="" href=""
                                           style="background:url('Content/Images/Phones/sony_mix_1.jpg') no-repeat 50% 50%;">
                                        </a>
                                    </td>
                                    <td class="info">
                                        <span class="name"><a title="" href="">Mix Walkman WT13i</a></span>
                                        <!-- Truy vấn danh sách các phụ kiện tương thích của điện thoại -->
                                        <ul>
                                            <li>Bảo hành: 12 tháng</li>
                                            <li>Đã gồm <b style="color:red;">10 %</b> VAT.</li>
                                            <li><b>Phụ kiện:</b>
                                                Bao da điện thoại.&nbsp;
                                                Bao da Silicon.&nbsp;
                                                Cáp LG.&nbsp;
                                            <li>
                                        </ul>
                                        <p><br>
                                            <span class="price">
                                       <span class="price-value">
                                       1,500,000 VNĐ
                                       </span>
                                       </span>
                                        </p>
                                    </td>
                                    <td class="image">
                                        <a class="image-mobile" title="" href=""
                                           style="background:url('Content/Images/Phones/xperia_v.jpg') no-repeat 50% 50%;">
                                        </a>
                                    </td>
                                    <td class="info">
                                        <span class="name"><a title="" href="">Xperia Acro S</a></span>
                                        <!-- Truy vấn danh sách các phụ kiện tương thích của điện thoại -->
                                        <ul>
                                            <li>Bảo hành: 12 tháng</li>
                                            <li>Đã gồm <b style="color:red;">10 %</b> VAT.</li>
                                            <li><b>Phụ kiện:</b>
                                                iPod Shuffle gen 4 2G.&nbsp;
                                                Bộ Pin + Sạc cốc.&nbsp;
                                                Tai nghe SE HPM 85.&nbsp;
                                                TranFlash 8GB.&nbsp;
                                            <li>
                                        </ul>
                                        <p><br>
                                            <span class="price">
                                       <span class="price-value">
                                       6,390,000 VNĐ
                                       </span>
                                       </span>
                                        </p>
                                    </td>
                                    <td class="image">
                                        <a class="image-mobile" title="" href=""
                                           style="background:url('Content/Images/Phones/Sony_Xperia_LZ.jpg') no-repeat 50% 50%;">
                                        </a>
                                    </td>
                                    <td class="info">
                                        <span class="name"><a title="" href="">Sony Xperia ZL - Full HD </a></span>
                                        <!-- Truy vấn danh sách các phụ kiện tương thích của điện thoại -->
                                        <ul>
                                            <li>Bảo hành: 12 tháng</li>
                                            <li>Đã gồm <b style="color:red;">10 %</b> VAT.</li>
                                            <li><b>Phụ kiện:</b>
                                                iPod Shuffle gen 4 2G.&nbsp;
                                                BST 40.&nbsp;
                                                Tai nghe SE HPM 85.&nbsp;
                                                TranFlash 8GB.&nbsp;
                                            <li>
                                        </ul>
                                        <p><br>
                                            <span class="price">
                                       <span class="price-value">
                                       12,490,000 VNĐ
                                       </span>
                                       </span>
                                        </p>
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="box-brand">
                    <div class="header2">
                        <span class="title"><span><a
                                    href="">Lenovo</a></span></span>
                    </div>
                    <div class="content">
                        <div class="content-c">
                            <table class="list-mobile" width="100%">
                                <!-- Truy vấn danh sách các điện thoại của mỗi hãng -->
                                <!-- Vòng lặp qua từng chiếc điện thoại ứng với mỗi hãng điện thoại -->
                                <tr>
                                    <td class="image">
                                        <a class="image-mobile" title="" href=""
                                           style="background:url('Content/Images/Phones/lenovo_s890.png') no-repeat 50% 50%;">
                                        </a>
                                    </td>
                                    <td class="info">
                                        <span class="name"><a title="" href="">Lenovo S890 5 inch</a></span>
                                        <!-- Truy vấn danh sách các phụ kiện tương thích của điện thoại -->
                                        <ul>
                                            <li>Bảo hành: 12 tháng</li>
                                            <li>Đã gồm <b style="color:red;">10 %</b> VAT.</li>
                                            <li><b>Phụ kiện:</b>
                                                iPod Shuffle gen 4 2G.&nbsp;
                                                Bộ Pin + Sạc cốc.&nbsp;
                                                Bao da smartcover Ipad.&nbsp;
                                            <li>
                                        </ul>
                                        <p><br>
                                            <span class="price">
                                       <span class="price-value">
                                       5,660,000 VNĐ
                                       </span>
                                       </span>
                                        </p>
                                    </td>
                                    <td class="image">
                                        <a class="image-mobile" title="" href=""
                                           style="background:url('Content/Images/Phones/lenovo_s720_1.png') no-repeat 50% 50%;">
                                        </a>
                                    </td>
                                    <td class="info">
                                        <span class="name"><a title="" href="">Lenovo S720 - FPT</a></span>
                                        <!-- Truy vấn danh sách các phụ kiện tương thích của điện thoại -->
                                        <ul>
                                            <li>Bảo hành: 12 tháng</li>
                                            <li>Đã gồm <b style="color:red;">10 %</b> VAT.</li>
                                            <li><b>Phụ kiện:</b>
                                                BST 40.&nbsp;
                                                M2 1GB.&nbsp;
                                                Đầu Đọc Apacer all in 1.&nbsp;
                                            <li>
                                        </ul>
                                        <p><br>
                                            <span class="price">
                                       <span class="price-value">
                                       4,720,000 VNĐ
                                       </span>
                                       </span>
                                        </p>
                                    </td>
                                    <td class="image">
                                        <a class="image-mobile" title="" href=""
                                           style="background:url('Content/Images/Phones/Lenovo-A800.png') no-repeat 50% 50%;">
                                        </a>
                                    </td>
                                    <td class="info">
                                        <span class="name"><a title="" href="">Lenovo S880</a></span>
                                        <!-- Truy vấn danh sách các phụ kiện tương thích của điện thoại -->
                                        <ul>
                                            <li>Bảo hành: 12 tháng</li>
                                            <li>Đã gồm <b style="color:red;">10 %</b> VAT.</li>
                                            <li><b>Phụ kiện:</b>
                                                PPSL-14.&nbsp;
                                                Bộ Pin + Sạc cốc.&nbsp;
                                                BST 40.&nbsp;
                                                Tai nghe BH 209.&nbsp;
                                            <li>
                                        </ul>
                                        <p><br>
                                            <span class="price">
                                       <span class="price-value">
                                       3,990,000 VNĐ
                                       </span>
                                       </span>
                                        </p>
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="box-brand">
                    <div class="header2">
                        <span class="title"><span><a
                                    href="">LG</a></span></span>
                    </div>
                    <div class="content">
                        <div class="content-c">
                            <table class="list-mobile" width="100%">
                                <!-- Truy vấn danh sách các điện thoại của mỗi hãng -->
                                <!-- Vòng lặp qua từng chiếc điện thoại ứng với mỗi hãng điện thoại -->
                                <tr>
                                    <td class="image">
                                        <a class="image-mobile" title="" href=""
                                           style="background:url('Content/Images/Phones/optimus_hd_4x.png') no-repeat 50% 50%;">
                                        </a>
                                    </td>
                                    <td class="info">
                                        <span class="name"><a title="" href="">Optimus 4X HD - P880</a></span>
                                        <!-- Truy vấn danh sách các phụ kiện tương thích của điện thoại -->
                                        <ul>
                                            <li>Bảo hành: 12 tháng</li>
                                            <li>Đã gồm <b style="color:red;">10 %</b> VAT.</li>
                                            <li><b>Phụ kiện:</b>
                                                Bao da điện thoại.&nbsp;
                                                BST 40.&nbsp;
                                                Tai nghe SE HPM 85.&nbsp;
                                            <li>
                                        </ul>
                                        <p><br>
                                            <span class="price">
                                       <span class="price-value">
                                       9,040,000 VNĐ
                                       </span>
                                       </span>
                                        </p>
                                    </td>
                                    <td class="image">
                                        <a class="image-mobile" title="" href=""
                                           style="background:url('Content/Images/Phones/gl_optimus.jpg') no-repeat 50% 50%;">
                                        </a>
                                    </td>
                                    <td class="info">
                                        <span class="name"><a title="" href="">Optimus G - E975</a></span>
                                        <!-- Truy vấn danh sách các phụ kiện tương thích của điện thoại -->
                                        <ul>
                                            <li>Bảo hành: 12 tháng</li>
                                            <li>Đã gồm <b style="color:red;">10 %</b> VAT.</li>
                                            <li><b>Phụ kiện:</b>
                                                Bao da iPad Belk.&nbsp;
                                                BST 40.&nbsp;
                                                M2 1GB.&nbsp;
                                            <li>
                                        </ul>
                                        <p><br>
                                            <span class="price">
                                       <span class="price-value">
                                       11,250,000 VNĐ
                                       </span>
                                       </span>
                                        </p>
                                    </td>
                                    <td class="image">
                                        <a class="image-mobile" title="" href=""
                                           style="background:url('Content/Images/Phones/google_nexus-4.jpg') no-repeat 50% 50%;">
                                        </a>
                                    </td>
                                    <td class="info">
                                        <span class="name"><a title="" href="">Google Nexus 4 - 8GB</a></span>
                                        <!-- Truy vấn danh sách các phụ kiện tương thích của điện thoại -->
                                        <ul>
                                            <li>Bảo hành: 12 tháng</li>
                                            <li>Đã gồm <b style="color:red;">10 %</b> VAT.</li>
                                            <li><b>Phụ kiện:</b>
                                                iPod Shuffle gen 4 2G.&nbsp;
                                                Tai nghe SE HPM 85.&nbsp;
                                                TranFlash 8GB.&nbsp;
                                            <li>
                                        </ul>
                                        <p><br>
                                            <span class="price">
                                       <span class="price-value">
                                       8,290,000 VNĐ
                                       </span>
                                       </span>
                                        </p>
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="box-brand">
                    <div class="header2">
                        <span class="title"><span><a
                                    href="">QMobile</a></span></span>
                    </div>
                    <div class="content">
                        <div class="content-c">
                            <table class="list-mobile" width="100%">
                                <!-- Truy vấn danh sách các điện thoại của mỗi hãng -->
                                <!-- Vòng lặp qua từng chiếc điện thoại ứng với mỗi hãng điện thoại -->
                                <tr>
                                    <td class="image">
                                        <a class="image-mobile" title="" href=""
                                           style="background:url('Content/Images/Phones/aaa3.png') no-repeat 50% 50%;">
                                        </a>
                                    </td>
                                    <td class="info">
                                        <span class="name"><a title="" href="">Q-Smart S2</a></span>
                                        <!-- Truy vấn danh sách các phụ kiện tương thích của điện thoại -->
                                        <ul>
                                            <li>Bảo hành: 12 tháng</li>
                                            <li>Đã gồm <b style="color:red;">10 %</b> VAT.</li>
                                            <li><b>Phụ kiện:</b>
                                                Tai nghe BH 209.&nbsp;
                                                Bao da smartcover Ipad.&nbsp;
                                                Đầu Đọc Apacer all in 1.&nbsp;
                                            <li>
                                        </ul>
                                        <p><br>
                                            <span class="price">
                                       <span class="price-value">
                                       1,490,000 VNĐ
                                       </span>
                                       </span>
                                        </p>
                                    </td>
                                    <td class="image">
                                        <a class="image-mobile" title="" href=""
                                           style="background:url('Content/Images/Phones/aaa1.jpg') no-repeat 50% 50%;">
                                        </a>
                                    </td>
                                    <td class="info">
                                        <span class="name"><a title="" href="">QSmart Miracle Pad</a></span>
                                        <!-- Truy vấn danh sách các phụ kiện tương thích của điện thoại -->
                                        <ul>
                                            <li>Bảo hành: 12 tháng</li>
                                            <li>Đã gồm <b style="color:red;">10 %</b> VAT.</li>
                                            <li><b>Phụ kiện:</b>
                                                TranFlash 8GB.&nbsp;
                                                Bao da smartcover Ipad.&nbsp;
                                                Cáp LG.&nbsp;
                                            <li>
                                        </ul>
                                        <p><br>
                                            <span class="price">
                                       <span class="price-value">
                                       3,590,000 VNĐ
                                       </span>
                                       </span>
                                        </p>
                                    </td>
                            </table>
                        </div>
                    </div>
                </div>
                <!-- Phụ kiện -->
                <div class="box-brand">
                    <div class="header2">
                        <span class="title"><span><a
                                    href="">Phụ kiện điện thoại</a></span></span>
                    </div>
                    <div class="content">
                        <div class="content-c">
                            <ul class="list-mobile">
                                <li>
                                    <div class="mobile-info">
                                        <div class="mobile-c">
                                            <a class="img" title=""
                                               href="">
                                                <img src="Content/Images/accessories/aaa5.png" alt=""/>
                                            </a>
                                            <span class="name"><a
                                                    href="">Bao da Silicon</a></span>
                                            <span class="price">
                                       <span class="price-label">Giá bán:</span>
                                       <span class="price-value">
                                       40,000 VNĐ
                                       </span>
                                       </span>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="mobile-info">
                                        <div class="mobile-c">
                                            <a class="img" title=""
                                               href="">
                                                <img src="Content/Images/accessories/ipod_gen2.jpg" alt=""/>
                                            </a>
                                            <span class="name"><a
                                                    href="">iPod Shuffle gen 4 2G</a></span>
                                            <span class="price">
                                       <span class="price-label">Giá bán:</span>
                                       <span class="price-value">
                                       750,000 VNĐ
                                       </span>
                                       </span>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="mobile-info">
                                        <div class="mobile-c">
                                            <a class="img" title=""
                                               href="">
                                                <img src="Content/Images/accessories/image2.png" alt=""/>
                                            </a>
                                            <span class="name"><a
                                                    href="">Bao da điện thoại</a></span>
                                            <span class="price">
                                       <span class="price-label">Giá bán:</span>
                                       <span class="price-value">
                                       120,000 VNĐ
                                       </span>
                                       </span>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="mobile-info">
                                        <div class="mobile-c">
                                            <a class="img" title=""
                                               href="">
                                                <img src="Content/Images/accessories/image1.png" alt=""/>
                                            </a>
                                            <span class="name"><a
                                                    href="">Bao da iPad Belk</a></span>
                                            <span class="price">
                                       <span class="price-label">Giá bán:</span>
                                       <span class="price-value">
                                       220,000 VNĐ
                                       </span>
                                       </span>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="mobile-info">
                                        <div class="mobile-c">
                                            <a class="img" title=""
                                               href="">
                                                <img src="Content/Images/accessories/a7.jpg" alt=""/>
                                            </a>
                                            <span class="name"><a
                                                    href="">Cáp LG</a></span>
                                            <span class="price">
                                       <span class="price-label">Giá bán:</span>
                                       <span class="price-value">
                                       60,000 VNĐ
                                       </span>
                                       </span>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="mobile-info">
                                        <div class="mobile-c">
                                            <a class="img" title=""
                                               href="">
                                                <img src="Content/Images/accessories/tai1.jpg" alt=""/>
                                            </a>
                                            <span class="name"><a
                                                    href="">Tai nghe SE HPM 85</a></span>
                                            <span class="price">
                                       <span class="price-label">Giá bán:</span>
                                       <span class="price-value">
                                       115,000 VNĐ
                                       </span>
                                       </span>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="mobile-info">
                                        <div class="mobile-c">
                                            <a class="img" title=""
                                               href="">
                                                <img src="Content/Images/accessories/the1.png" alt=""/>
                                            </a>
                                            <span class="name"><a
                                                    href="">TranFlash 8GB</a></span>
                                            <span class="price">
                                       <span class="price-label">Giá bán:</span>
                                       <span class="price-value">
                                       125,000 VNĐ
                                       </span>
                                       </span>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="mobile-info">
                                        <div class="mobile-c">
                                            <a class="img" title=""
                                               href="">
                                                <img src="Content/Images/accessories/aaa4.png" alt=""/>
                                            </a>
                                            <span class="name"><a
                                                    href="">Bao da smartcover Ipad</a></span>
                                            <span class="price">
                                       <span class="price-label">Giá bán:</span>
                                       <span class="price-value">
                                       400,000 VNĐ
                                       </span>
                                       </span>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- End Phụ kiện -->
            </div>
            <!-- 2nd Content left - Phone info -->
            <!-- 2nd Content right - Phone info -->
            <div class="content-r">
                <!-- Ho tro yahoo -->
                <script language="javascript">
                    function imgError(image) {
                        image.onerror = "";
                        image.src = "Content/Images/offline.gif";
                        return true;
                    }
                </script>
                <div class="box-other">
                    <div class="title">
                        <span>Hỗ trợ bán hàng trực tuyến</span>
                    </div>
                    <!-- Danh sách yahoo hỗ trợ -->
                    <ul>
                        <li>
                            <div class="mobile-info">
                                <div class="mobile-c">
                                 <span class="name">
                                 <a style="color:#C90A0F" rel="nofollow"
                                    href="ymsgr:sendim?mvmanh&amp;m=Xin chao, toi muon hoi ve san pham  !">
                                 <img align="absmiddle" onerror='imgError(this);' border="0"
                                      src="http://opi.yahoo.com/online?u=abc&amp;m=g&amp;t=1&amp;l=us">
                                 Trần Văn Phú
                                 </a>
                                 </span>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="mobile-info">
                                <div class="mobile-c">
                                 <span class="name">
                                 <a style="color:#C90A0F" rel="nofollow"
                                    href="ymsgr:sendim?nphminh&amp;m=Xin chao, toi muon hoi ve san pham  !">
                                 <img align="absmiddle" onerror='imgError(this);' border="0"
                                      src="http://opi.yahoo.com/online?u=nphminh&amp;m=g&amp;t=1&amp;l=us">
                                 Hoàng Minh
                                 </a>
                                 </span>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="mobile-info">
                                <div class="mobile-c">
                                 <span class="name">
                                 <a style="color:#C90A0F" rel="nofollow"
                                    href="ymsgr:sendim?nvtuong&amp;m=Xin chao, toi muon hoi ve san pham  !">
                                 <img align="absmiddle" onerror='imgError(this);' border="0"
                                      src="http://opi.yahoo.com/online?u=nvtuong&amp;m=g&amp;t=1&amp;l=us">
                                 Đại Tướng
                                 </a>
                                 </span>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="mobile-info">
                                <div class="mobile-c">
                                 <span class="name">
                                 <a style="color:#C90A0F" rel="nofollow"
                                    href="ymsgr:sendim?vhphi&amp;m=Xin chao, toi muon hoi ve san pham  !">
                                 <img align="absmiddle" onerror='imgError(this);' border="0"
                                      src="http://opi.yahoo.com/online?u=vhphi&amp;m=g&amp;t=1&amp;l=us">
                                 Hồng Phi
                                 </a>
                                 </span>
                                </div>
                            </div>
                        </li>
                    </ul>
                    <!-- End Danh sách yahoo hỗ trợ -->
                </div>
                <!-- end Ho tro yahoo -->
                <style>
                    .row {
                        display: inline-block;
                        clear: both;
                        padding: 0px 10px 5px 10px;
                    }
                    .row .editor-label {
                        padding: 5px 0px 0px 0px;
                    }
                    .row .editor-field {
                        padding: 5px 0px 0px 0px;
                    }
                </style>
                <div class="box-other">
                </div>
                <!-- Quang cao -->
                <div id="AD_Zone_3"></div>
                <!-- end Quang cao -->
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
                <!-- Quang cao 4,5 -->
                <div id="AD_Zone_4"></div>
                <div id="AD_Zone_5"></div>
                <!-- Danh muc phu kien -->
                <div class="box-device">
                    <h3><span>Danh mục phụ kiện</span></h3>
                    <div class="vmenu">
                        <ul class="news-category">
                            <li><a href="">Phụ kiện
                                    iPad</a>
                            <li><a href="">Phụ kiện
                                    iPhone</a>
                            <li><a href="">Máy nghe
                                    nhạc</a>
                            <li><a href="">Sạc - Pin</a>
                            <li><a href="">Tai nghe</a>
                            <li><a href="">Thẻ nhớ</a>
                            <li><a href="">Thiết bị kết
                                    nối</a>
                        </ul>
                    </div>
                </div>
                <!-- End Danh muc phu kien -->
                <div id="AD_Zone_6"></div>
                <div id="AD_Zone_7"></div>
                <!-- Dien thoai duoc xem nhieu -->
                <!-- c:set var="mostViewList" value="[entity.DienThoai@7ce8f9f4, entity.DienThoai@6de966e4, entity.DienThoai@1ef9fbff, entity.DienThoai@17322377, entity.DienThoai@2c2e4f3c, entity.DienThoai@a56c21b, entity.DienThoai@5b21e6ad, entity.DienThoai@5d0e5f25, entity.DienThoai@387ac17, entity.DienThoai@3f7de066]"/-->
                <div class="box-other">
                    <div class="title">
                        <span>Điện thoại được xem nhiều</span>
                    </div>
                    <!-- danh sach cac dien thoai duoc xem nhieu-->
                    <ul>
                        <li class="alt1">
                            <div class="mobile-info">
                                <div class="mobile-c">
                                    <a class="image" href="">
                                        <img src="Content/Images/Phones/htc_one_fpt.png" alt="HTC One - FPT"/>
                                    </a>
                                    <div class="info">
                                        <span class="name"><a href="">HTC One - FPT</a></span>
                                        <span class="price">
                                    <span class="price-value">
                                    15,290,000 VNĐ
                                    </span>
                                    </span>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="alt1">
                            <div class="mobile-info">
                                <div class="mobile-c">
                                    <a class="image" href="">
                                        <img src="Content/Images/Phones/google_nexus-4.jpg" alt="Google Nexus 4 - 8GB"/>
                                    </a>
                                    <div class="info">
                                        <span class="name"><a href="">Google Nexus 4 - 8GB</a></span>
                                        <span class="price">
                                    <span class="price-value">
                                    8,290,000 VNĐ
                                    </span>
                                    </span>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="alt1">
                            <div class="mobile-info">
                                <div class="mobile-c">
                                    <a class="image" href="">
                                        <img src="Content/Images/Phones/galaxy-Grand-Duos-I9082.png"
                                             alt="Galaxy Grand Duos - I9082"/>
                                    </a>
                                    <div class="info">
                                        <span class="name"><a href="">Galaxy Grand Duos - I9082</a></span>
                                        <span class="price">
                                    <span class="price-value">
                                    7,550,000 VNĐ
                                    </span>
                                    </span>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="alt1">
                            <div class="mobile-info">
                                <div class="mobile-c">
                                    <a class="image" href="">
                                        <img src="Content/Images/Phones/htc_butterfly.png" alt="HTC Butterfly - FPT"/>
                                    </a>
                                    <div class="info">
                                        <span class="name"><a href="">HTC Butterfly - FPT</a></span>
                                        <span class="price">
                                    <span class="price-value">
                                    13,990,000 VNĐ
                                    </span>
                                    </span>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="alt1">
                            <div class="mobile-info">
                                <div class="mobile-c">
                                    <a class="image" href="">
                                        <img src="Content/Images/Phones/gl_optimus.jpg" alt="Optimus G - E975"/>
                                    </a>
                                    <div class="info">
                                        <span class="name"><a href="">Optimus G - E975</a></span>
                                        <span class="price">
                                    <span class="price-value">
                                    11,250,000 VNĐ
                                    </span>
                                    </span>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="alt1">
                            <div class="mobile-info">
                                <div class="mobile-c">
                                    <a class="image" href="">
                                        <img src="Content/Images/Phones/thenwipad.jpg" alt="The new iPad 3G"/>
                                    </a>
                                    <div class="info">
                                        <span class="name"><a href="">The new iPad 3G</a></span>
                                        <span class="price">
                                    <span class="price-value">
                                    12,000,000 VNĐ
                                    </span>
                                    </span>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="alt1">
                            <div class="mobile-info">
                                <div class="mobile-c">
                                    <a class="image" href="">
                                        <img src="Content/Images/Phones/xperia_v.jpg" alt="Xperia Acro S"/>
                                    </a>
                                    <div class="info">
                                        <span class="name"><a href="">Xperia Acro S</a></span>
                                        <span class="price">
                                    <span class="price-value">
                                    6,390,000 VNĐ
                                    </span>
                                    </span>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="alt1">
                            <div class="mobile-info">
                                <div class="mobile-c">
                                    <a class="image" href="">
                                        <img src="Content/Images/Phones/ipad_mini_white.png" alt="iPad Mini 16 GB"/>
                                    </a>
                                    <div class="info">
                                        <span class="name"><a href="">iPad Mini 16 GB</a></span>
                                        <span class="price">
                                    <span class="price-value">
                                    12,500,000 VNĐ
                                    </span>
                                    </span>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="alt1">
                            <div class="mobile-info">
                                <div class="mobile-c">
                                    <a class="image" href="">
                                        <img src="Content/Images/Phones/optimus_hd_4x.png" alt="Optimus 4X HD - P880"/>
                                    </a>
                                    <div class="info">
                                        <span class="name"><a href="">Optimus 4X HD - P880</a></span>
                                        <span class="price">
                                    <span class="price-value">
                                    9,040,000 VNĐ
                                    </span>
                                    </span>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="alt1">
                            <div class="mobile-info">
                                <div class="mobile-c">
                                    <a class="image" href="">
                                        <img src="Content/Images/Phones/s3.jpg" alt="Galaxy S3 - I9300"/>
                                    </a>
                                    <div class="info">
                                        <span class="name"><a href="">Galaxy S3 - I9300</a></span>
                                        <span class="price">
                                    <span class="price-value">
                                    78,965,000 VNĐ
                                    </span>
                                    </span>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <!--
                           <li class="alt1">
                               <div class="mobile-info">
                                   <div class="mobile-c">
                                       <a class="image" href="/dien-thoai/qmobile/qsmart-miracle-pad-1012.aspx">
                                           <img src="http://www.hoanghamobile.com/Uploads/Thumbs/201211191334404836_qmart_pad1.jpg" alt="QSmart Miracle Pad" />
                                       </a>
                                       <div class="info">
                                           <span class="name"><a href="/dien-thoai/qmobile/qsmart-miracle-pad-1012.aspx">QSmart Miracle Pad</a></span>
                                           <span class="price">
                                               <span class="price-value">3,700,000 vnđ</span>
                                           </span>
                                       </div>
                                   </div>
                               </div>
                           </li>

                           <li class="alt2">
                               <div class="mobile-info">
                                   <div class="mobile-c">
                                       <a class="image" href="/dien-thoai/apple---iphone/apple-iphone-5---16gb--may-troi-bao-hanh-moi-active-1010.aspx">
                                           <img src="http://www.hoanghamobile.com/Uploads/Thumbs/201209130941192978_iphone5_hoanghamobile3.jpg" alt="Apple iPhone 5 - 16GB ( máy trôi bảo hành ).mới active" />
                                       </a>
                                       <div class="info">
                                           <span class="name"><a href="/dien-thoai/apple---iphone/apple-iphone-5---16gb--may-troi-bao-hanh-moi-active-1010.aspx">Apple iPhone 5 - 16GB ( m&#225;y tr&#244;i bảo h&#224;nh ).mới active</a></span>
                                           <span class="price">
                                               <span class="price-value">14,200,000 vnđ</span>
                                           </span>
                                       </div>
                                   </div>
                               </div>
                           </li>
                            -->
                    </ul>
                    <!-- end danh sach -->
                </div>
                <!-- End Dien thoai duoc xem nhieu -->
                <!-- Quảng cáo 8 -->
                <div id="AD_Zone_8"></div>
                <!-- End Quảng cáo 8 -->
            </div>
            <!-- End 2nd Content right - Phone info -->
        </div>
        <!-- End The second content -->
        <!-- footer -->
        <div id="footer">
            <div class="footer-c">
                <p class="footer-l">
                    <span><strong>Trụ sở chính:</strong> Siêu thị 194 Lê Duẩn - Hồ Chí Minh. <strong>Điện thoại:</strong> 043.5186033</span>
                    <span><strong>Chi nhánh:</strong> Siêu thị 122 Thái Hà - Hà Nội. <strong>Điện thoại:</strong> 097.379.0122</span>
                    <span><strong>Chi nhánh:</strong> Siêu thị 382 Nguyễn Văn Cừ - Hà Nội. <strong>Điện thoại:</strong> 0125.363.2222</span>
                    <span><strong>Chi nhánh:</strong> Siêu thị 392 cầu giấy - Hà Nội. <strong>Điện thoại:</strong> 0968.32.33.99</span>
                    <span><strong>Website:</strong> <a
                            href="http://www.hoanghamobile.com">http://www.hoanghamobile.com</a> | <a
                            href="http://hoanghamobile.com">http://hoanghamobile.com</a></span>
                    <span><strong>Email:</strong> <a
                            href="mailto:contact@hoanghamobile.com">contact@hoanghamobile.com</a></span>
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