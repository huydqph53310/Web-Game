@extends('layout')

@section('title', 'Đăng ký tài khoản Mobi Army 3')

@section('content')
    <style>
        .a {
            text-align: center;
        }
        .menu2 {
            background: #561d00;
        }
        .menu2 table {
            width: 100%;
            border: 0;
            cellspacing: 4px;
        }
        .menu2 td {
            text-align: center;
        }
        .menu2 a {
            color: #fff;
            text-decoration: none;
        }
        .menu2 #selected a {
            font-weight: bold;
        }
        .bg-content form table {
            width: 100%;
        }
        .bg-content form td {
            padding: 5px;
        }
        .bg-content input[type="text"],
        .bg-content input[type="password"],
        .bg-content input[type="date"] {
            width: 100%;
        }
        .bg-content p {
            font-size: 12px;
        }
        .copyright {
            text-align: center;
        }
        .copyright h2 {
            font-size: 14px;
            margin: 5px 0;
        }
    </style>

    <div class="body_body">
        <div class="body-content">
            <div id="top">
                <div class="link-more">
                    <div class="h" align="center">
                        <div class="bg-content">
                            <form name="regacc" action="{{ url('/register') }}" method="POST">
                                @csrf
                                <table>
                                    <tr>
                                        <td>Họ và tên</td>
                                        <td><input type="text" name="fullname" value="" required /></td>
                                    </tr>
                                    <tr>
                                        <td>Địa chỉ thường trú</td>
                                        <td><input type="text" name="address" value="" required /></td>
                                    </tr>
                                    <tr>
                                        <td>Ngày tháng năm sinh</td>
                                        <td><input type="date" name="birthday" value="" required /></td>
                                    </tr>
                                    <tr>
                                        <td>CMND / CCCD</td>
                                        <td><input type="text" name="cmnd_cccd" value="" required /></td>
                                    </tr>
                                    <tr>
                                        <td>Ngày cấp</td>
                                        <td><input type="date" name="day_cmnd_cccd" value="" required /></td>
                                    </tr>
                                    <tr>
                                        <td>Nơi cấp</td>
                                        <td><input type="text" name="address_cmnd_cccd" value="" required /></td>
                                    </tr>
                                    <tr>
                                        <td width="20%">Tên tài khoản</td>
                                        <td>
                                            <input type="text" name="username" required value="" placeholder="Email / Số di động" /><br>
                                            <i>Email hoặc số điện thoại</i>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Mật khẩu</td>
                                        <td><input type="password" name="password" value="" required /></td>
                                    </tr>
                                    <tr>
                                        <td>Xác nhận Mật khẩu</td>
                                        <td><input type="password" name="password_confirmation" value="" required /></td>
                                    </tr>
                                    <tr>
                                        <td><img id="captcha-image" src="" alt="Captcha" /></td>
                                        <td><input type="text" name="captcha" value="" required /></td>
                                    </tr>
                                </table>
                                <p>
                                    - Bạn có thể đăng ký tại đây, hoặc ngay trong trò chơi <br>
                                    - Mobi Army 2 dùng tài khoản riêng, không dùng chung với các game khác<br>
                                    - Số điện thoại / Email của bạn sẽ không hiện ra bất kỳ chỗ nào khác<br>
                                    - Bất kỳ ai giữ số điện thoại hoặc email bạn dùng đăng ký đều có thể lấy lại mật khẩu. Do đó đừng dùng SĐT/Email của người khác<br>
                                    - Không cung cấp mật khẩu cho bất kỳ ai. Admin không bao giờ hỏi mật khẩu của bạn. Không nên dùng mật khẩu quá dễ đoán như: 12345, abcde, adgjmp...<br>
                                    - Tài khoản đăng ký có thể dùng đăng nhập trong game, và trên diễn đàn Mobi Army 2 này
                                </p>
                                <input type="submit" value="Đăng ký" name="submit" />
                            </form>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
        <br>
    </div>

    <script>
        // Gọi route /captcha để tạo CAPTCHA khi trang được tải
        fetch('{{ url("/captcha") }}')
            .then(response => response.json())
            .then(data => {
                // Cập nhật src của hình ảnh CAPTCHA
                document.getElementById('captcha-image').src = '{{ url("/captchas/") }}/' + data.captcha + '.png';
            })
            .catch(error => console.error('Lỗi khi tạo CAPTCHA:', error));
    </script>
@endsection
