@extends('layout')

@section('title', 'Chào mừng bạn đến với Mobi Army 2 - Đăng nhập, Đăng ký')
@section('sl3')
id="@selected(true)"
@endsection
@section('content')
    <style>
        .bg-content {
            text-align: center;
        }
        .bg-content form {
            display: inline-block;
            margin: 10px 0;
        }
        .bg-content table {
            margin: 0 auto;
        }
        .bg-content td {
            padding: 5px;
            font-size: 12px;
        }
        .bg-content input[type="text"],
        .bg-content input[type="password"] {
            width: 150px;
        }
    </style>

    <div class="body_body">

        <div id="top">
            <div class="link-more">
                <div class="h">


                    <div class="bg-content">
                        <div style="font-size:10px;">
                            Sử dụng tài khoản Mobi Army 2 để đăng nhập.<br>
                            (chú ý: không dùng chung tài khoản mobi army cũ)
                        </div>
                        <form action="{{ url('/login') }}" method="POST" name="login">
                            @csrf
                            <table>
                                <tr>
                                    <td><label for="user">SĐT / Email:</label></td>
                                    <td><input name="user" type="text" value="" /></td>
                                </tr>
                                <tr>
                                    <td><label for="pass">Mật khẩu:</label></td>
                                    <td><input name="password" type="password" value="" /></td>
                                </tr>
                            </table>
                            <button type="submit">Đăng nhập</button><br />
                            <div style="font-size:10px;">
                                Nếu bạn chưa có tài khoản, vui lòng <a href="{{ url('/register') }}">đăng ký</a><br>
                                <a href="{{ url('/forgot-password') }}" target="_blank">Quên mật khẩu</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
