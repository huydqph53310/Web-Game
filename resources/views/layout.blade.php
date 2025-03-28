<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Trang chủ Mobi Army 3')</title>
    <meta http-equiv="content-language" content="vi" />
    <meta name="keywords" content="Mobi army, mobi army 2, mobi army 3" />
    <meta name="description" content="Website chính thức của Mobi Army 3 Game bắn súng theo lượt Việt Nam được yêu thích nhất trên Mobile!" />
    <meta http-equiv="refresh" content="600" />
    <meta name="robots" content="INDEX,FOLLOW" />
    <link rel="shortcut icon" href="{{ asset('images/favicon.png') }}" type="image/x-icon" />
    <link rel="apple-touch-icon" href="{{ asset('logo256.png') }}" />
    <link rel="stylesheet" href="{{ asset('css/template.css') }}" type="text/css" />
</head>
<body>
    <div class="body_body">
        <div style="line-height: 10px; font-size: 10px; padding-right: 5px; padding-bottom: 10px; padding-top: 2px;">
            <img height=12 src="{{ asset('12.png') }}" style="vertical-align: middle;"/>
            <span style="vertical-align: middle;">Dành cho người chơi trên 12 tuổi. Chơi quá 180 phút mỗi ngày sẽ hại sức khỏe.</span>
        </div>
        <div class="body-content">
            <div class="bg-content2">
                <h1 class="a" align="center">
                    <a href="{{ url('/') }}" title="game mobi army 3">
                        <img src="{{ asset('images/logo.png') }}" alt="game mobi army 3"/>
                    </a>
                </h1>
                <div id="top">
                    <div class="link-more">
                        <div class="h" align="center">
                            <div class="bg_noel"></div>
                            <div class="menu2" style="background: #00467a;">
                                <table width="100%" border="0" cellspacing="4">
                                    <tr class="menu">
                                        <td @yield('sl1')><a href="{{ url('/') }}">Trang Chủ</a></td>
                                        <td @yield('sl2')><a href="{{ url('/gioi-thieu') }}">Giới Thiệu</a></td>
                                        <td @yield('sl3')><a href="{{ url('/dien-dan') }}" title="Diễn đàn">Diễn đàn</a></td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Nội dung động -->
            @yield('content')

            <!-- Footer -->
            <div class="copyright">
                <h2 style="line-height: 0px;">Mobi Army A</h2>
                Bản Quyền thuộc về @TeaMobi - 2014
                <p><a style="color:#fff" href="http://teamobi.com/dieukhoan.htm">Điều Khoản Sử Dụng</a></p>
            </div>
        </div>
    </div>
</body>
</html>
