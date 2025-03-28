
@extends('layout')

@section('title', 'Giới thiệu')
@section('sl2')
id="@selected(true)"
@endsection
@section('content')
    <div class="bg-content">
        <p><span style="font-size:27pt">Giới thiệu:</span></p>
        <p>Năm 2014 tình hình thế giới diễn biến phức tạp, thế chiến thứ 3 có thể bùng nổ bất cứ lúc nào.</p>
        <p>Một lực lượng vũ trang tự xưng là ES đã xâm chiếm toàn Đông Á, Nam Phi và đang tiến hành áp dụng luật pháp diều hâu để kiểm soát 1 vùng lãnh thổ rộng lớn nơi đây, chúng khủng bố người dân, chiếm các mỏ dầu và tuyên bố sẽ thâu tóm toàn bộ các thành phố lớn ở các châu lục để thành lập một liên minh các quốc gia dưới trướng.</p>
        <p>Các cường quốc trong khối vệ binh hòa bình Trái Đất GATO nhận thấy ES là mối đe dọa cho toàn nhân loại nên đã không kích chúng bằng máy bay và tên lửa Raptors, tuy nhiên chưa thể tiêu diệt được ES nếu không dùng tới bộ binh.</p>
        <p>Tháng 10/2014 ES lại sát hại các nhà báo, các tình nguyện viên nhân đạo khi họ tham gia các chiến dịch tình nguyện tại các quốc gia mà ES có chiếm đóng và tham vọng thâu tóm GATO và các đồng minh quyết định cử các đội đặc nhiệm ưu tú nhất hành tinh SEAN, SWAN, SAT, DANTA và một đội đặc nhiệm bí ẩn đến các căn cứ tình nghi của ES và giải cứu người dân vô tội.</p>
        <p>Bạn sẽ gia nhập lực lượng đặc nhiệm nào để tham gia chiến dịch lịch sử này? Hãy tham gia Mobi Army 3 và chọn đội mình yêu thích nhé.</p>
        <p>
            <center>
                <iframe style="max-width:100%;" width="480" height="315" src="http://www.youtube.com/embed/_PSXutuoWQE" frameborder="0" allowfullscreen></iframe>
            </center>
        </p>

        <!-- Thư viện jQuery và các script liên quan -->
        <link type="text/css" href="https://teamobi.com/home/js/jquery/css/ui-lightness/jquery-ui-1.8.11.custom.css" rel="stylesheet" />
        <script type="text/javascript" src="https://teamobi.com/home/js/jquery/jquery-1.5.1.min.js"></script>
        <script type="text/javascript" src="https://teamobi.com/home/js/jquery/jquery-ui-1.8.11.custom.min.js"></script>
        <script src="https://teamobi.com/home/js/jquery.expander.js"></script>
        <script src="https://teamobi.com/home/js/jquery.bxSlider.min.js"></script>
        <script src="https://teamobi.com/home/js/jquery.easing.1.3.js"></script>
        <script src="https://teamobi.com/home/js/slide.js" type="text/javascript"></script>

        <script>
            $.expander.defaults.slicePoint = 300;
            $(document).ready(function () {
                $('div.expandable span1').expander({
                    slicePoint: 80,
                    expandPrefix: ' ',
                    expandText: '[...]',
                    collapseTimer: 5000,
                    userCollapseText: '[^]'
                });
            });
        </script>

        <link rel="stylesheet" href="https://teamobi.com/home/js/slide-2.css" type="text/css" />
        <style>
            #left_side {
                width: 90%;
                background: #eaeaea;
                font-size: 13px;
                margin-left: 23px;
                -webkit-border-radius: 5px;
                border-radius: 5px;
                padding: 5px;
            }
            #gallery {
                width: 100%;
            }
            #gallery li {
                width: 40px;
                display: inline-block;
                list-style: none;
                height: 45px;
                overflow: hidden;
                margin-left: 5px;
            }
        </style>

        <center>
            <div id="gallery">
                <div id="slides">
                    @php
                        $slides = [
                            'mobi-army-3-game-play-1.png',
                            'mobi-army-3-game-play-2.png',
                            'mobi-army-3-game-play-3.png',
                            'mobi-army-3-game-play-4.png',
                            'mobi-army-3-game-play-5.png',
                            'mobi-army-3-game-play-6.png',
                            'mobi-army-3-game-play-7.png',
                            'mobi-army-3-control-01.png',
                            'mobi-army-3-control-02.png',
                            'mobi-army-3-control-03.png',
                            'mobi-army-3-control-04.png',
                            'mobi-army-3-control-05.png',
                            'mobi-army-3-control-06.png',
                            'mobi-army-3-control-07.png',
                            'mobi-army-3-control-08.png',
                            'mobi-army-3-control-09.png',
                            'mobi-army-3-control-10.png',
                            'mobi-army-3-control-11.png',
                            'mobi-army-3-control-12.png',
                            'mobi-army-3-control-13.png',
                            'mobi-army-3-control-14.png'
                        ];
                    @endphp
                    @foreach ($slides as $slide)
                        <div class="slide">
                            <img src="{{ asset('teamobi_images/screenshot/'.$slide) }}" height="300" width="480">
                        </div>
                    @endforeach
                </div>

                <div id="menu">
                    <ul>
                        @foreach ($slides as $index => $slide)
                            <li class="fbar inact">&nbsp;</li>
                            <li class="menuItem inact {{ $index === 16 ? 'act' : '' }}">
                                <a href="#"><img src="{{ asset('teamobi_images/screenshot/'.$slide) }}" height="30"></a>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </center>

        <p><span style="font-size:27px">Cách chơi:</span></p>
        <p>Bạn phải tính toán góc bắn và lực bắn kết hợp với sức gió để đường đi của viên đạn trúng đích, cách chơi như sau:</p>
        <p>Chờ đến lượt của mình để bắn.</p>
        <p>Đồng hồ sẽ hiển thị thời gian lượt bắn, nếu hết thời gian mà chưa bắn thì sẽ mất lượt. Chú ý là bạn có thể bị mất lượt do mạng bị lag.</p>
        <p>Lượt tiếp theo là lượt của người có tên đầu tiên trong danh sách tốc độ nạp đạn, hiện ở góc phải màn hình, người có tốc độ nạp đạn thấp nhất là người có lượt nhanh nhất, sau mỗi lần bắn, tốc độ nạp đạn sẽ tăng lên tùy vào súng của bạn.</p>
        <p>Dùng phím mũi tên trái phải đối với điện thoại không cảm ứng, hoặc chạm vào nút di chuyển đối với màn hình cảm ứng để di chuyển nhân vật. Chú ý vào thanh sức lực (màu vàng), nếu hết sức thì nhân vật không thể di chuyển được.</p>
        <p>Dùng phím mũi tên lên xuống để chỉnh góc bắn.</p>
        <p>Nhấn giữ phím giữa để chọn lực bắn, thả phím để bắn.</p>
        <p>Chú ý vào thanh sức gió ngược chiều hay thuận chiều, gió mạnh hay nhẹ để thay đổi lực bắn và góc bắn phù hợp.</p>
        <p>Chơi tốt nhất trên màn hình từ 240x320 trở lên.</p>
        <p>Chơi trên Smart Phone để có trải nghiệm tuyệt vời hơn</p>
        <p><strong>Khi chọn phòng chơi cần quan tâm các thông số sau:</strong></p>
        <ul>
            <li>Số tiền cược / ván đấu.</li>
            <li>Số người chơi / 1 phòng.</li>
            <li>Bản đồ chiến đấu</li>
        </ul>
        <p><strong>Trong game có các thông số người chơi cần phải biết:</strong></p>
        <ul>
            <li>Thanh lực màu vàng: cho biết quãng đường người chơi có thể đi</li>
            <li>Thanh lực màu cam: hiển thị lực bắn của người chơi.</li>
            <li>Con số giữa hai thanh: hiển thị góc bắn của người chơi.</li>
            <li>Thanh lực nằm trên cùng màn hình: có hai phần trái và phải, hiển thị lực gió và góc của gió.</li>
        </ul>

        <p><span style="font-size:27px">Chức năng chính:</span></p>
        <p><strong>Đăng ký:</strong> Bạn có thể chơi ngay mà không cần đăng kí, tuy nhiên bạn sẽ bị mất tài khoản nếu đổi điện thoại, đổi tài khoản khác hoặc cài lại game, và bạn chỉ chơi được đến một cấp độ nhất định. Để đăng kí, hãy chọn mục Đăng kí trong game hoặc tại màn hình đăng nhập.</p>
        <p><strong>Đăng nhập:</strong> Nếu chưa đăng kí, bạn sẽ chơi ngay mà không cần đăng nhập. Nếu đã đăng kí, hãy dùng tên tài khoản và mật khẩu để đăng nhập vào trò chơi.</p>
        <p><strong>Khu vực:</strong> Trong game sẽ tổ chức nhiều khu vực chơi, tương ứng với cấp độ người chơi, người chơi hãy lựa chọn cấp độ khu vực thích hợp để có những đối thủ thích hợp. Danh sách có thông số cho biết số trận chiến đang trống và đang chờ trong khu vực. Nếu biết được khu vực cần vào thông qua bạn bè, người chơi có thể chọn tìm khu vực.</p>
        <p>Nếu vào trận chiến đang trống, bạn sẽ là chủ và có quyền đặt số tiền cược, đặt mật khẩu để vào và bắt đầu ván chơi khi có đủ người. Nếu không phải là chủ, bạn hãy chọn sẵn sàng và chờ chủ bàn bắt đầu ván chơi. Nếu muốn là chủ bàn, bạn hãy chọn mục Tạo khu vực.</p>
        <p><strong>Item:</strong></p>

        <table border="0" cellpadding="1" cellspacing="1" style="width:100%">
            <tbody>
                <tr>
                    <td style="text-align:center;background:#C0C0C0"><strong>Item</strong></td>
                    <td style="text-align:center;background:#C0C0C0"><strong>Chức năng</strong></td>
                </tr>
                @php
                    $items = [
                        ['image' => '0.png', 'name' => 'Cứu thương', 'function' => 'Hồi phục HP, mang theo tối đa 2 gói trong 1 trận đấu'],
                        ['image' => '1.png', 'name' => 'Dịch chuyển tức thời', 'function' => 'Dịch chuyển tức thời đến 1 vị trí khác, mang theo tối đa 2 gói trong 1 trận đấu'],
                        ['image' => '3.png', 'name' => 'Di chuyển x2', 'function' => 'Di chuyển xa x2'],
                        ['image' => '5.png', 'name' => 'Ngưng gió', 'function' => 'Ngưng gió trong 3 lượt bắn'],
                        ['image' => '6.png', 'name' => 'Bom phá đất', 'function' => 'Phá nát mặt đất, gây khó khăn cho đối phương khi di chuyển'],
                        ['image' => '7.png', 'name' => 'Lựu đạn', 'function' => 'Ném vào đối phương, sức hủy diệt cao'],
                        ['image' => '8.png', 'name' => 'Bom B52', 'function' => 'Sức hủy diệt cao trên diện rộng'],
                        ['image' => '9.png', 'name' => 'Tơ nhện', 'function' => 'Dùng để cản đường, làm đối phương bị mắc kẹt'],
                        ['image' => '10.png', 'name' => 'Cứu thương đồng đội', 'function' => 'Dùng để cứu thương cho toàn bộ đồng đội'],
                        ['image' => '11.png', 'name' => 'Đạn trái phá', 'function' => 'Phá nát mặt đất, gây khó khăn cho đối phương khi di chuyển'],
                        ['image' => '16.png', 'name' => 'Đạn Laze', 'function' => 'Rọi tia Laze vào mục tiêu, sức hủy diệt cao'],
                        ['image' => '17.png', 'name' => 'Đạn vòi rồng', 'function' => 'Tạo 1 cơn lốc xoáy làm lệch các đường đạn trong 3 lượt'],
                        ['image' => '18.png', 'name' => 'Chuột gắn bom', 'function' => 'Thả chuột có gắn bom chạy đến mục tiêu rồi phát nổ, sức hủy diệt cao'],
                        ['image' => '19.png', 'name' => 'Tên lửa x4', 'function' => 'Phóng ra 4 tên lửa nhắm vào 1 mục tiêu, sức hủy diệt cao'],
                        ['image' => '20.png', 'name' => 'Đạn xuyên đất', 'function' => 'Đạn xuyên vào trong đất và nổ khi chạm mục tiêu, sức hủy diệt cao'],
                        ['image' => '21.png', 'name' => 'Mưa sao băng', 'function' => 'Tạo một cơn mưa thiên thạch tiêu diệt nhiều mục tiêu trên diện rộng'],
                        ['image' => '22.png', 'name' => 'Mưa đạn', 'function' => 'Tạo một cơn mưa đạn tiêu diệt nhiều mục tiêu trên diện rộng, sức hủy diệt cao'],
                        ['image' => '24.png', 'name' => 'Bom độc', 'function' => 'Bom có chất độc, làm mất máu đối phương sau mỗi lượt'],
                        ['image' => '26.png', 'name' => 'Chong chóng khoan đất', 'function' => 'Chong chóng xuyên vào trong đất, phát nổ khi chạm vào mục tiêu, sức hủy diệt cực cao'],
                        ['image' => '28.png', 'name' => 'Đóng băng', 'function' => 'Đóng băng đối phương, không thể di chuyển'],
                        ['image' => '29.png', 'name' => 'Khí độc', 'function' => 'Thả khói độc làm tiêu hao dần HP đối phương mỗi lượt'],
                        ['image' => '30.png', 'name' => 'Tơ nhện x3', 'function' => 'Dùng để cản đường, làm đối phương bị mắc kẹt, bắn ra 3 lưới'],
                        ['image' => '31.png', 'name' => 'Bom hẹn giờ', 'function' => 'Gài bom hẹn giờ để nổ sau 3 lượt, sức hủy diệt cực cao'],
                        ['image' => '32.png', 'name' => 'Cứu thương 50% HP', 'function' => 'Phục hồi 50% HP'],
                        ['image' => '33.png', 'name' => 'Cứu thương 100% HP', 'function' => 'Phục hồi 100% HP'],
                        ['image' => '39.png', 'name' => 'Bom tự sát', 'function' => 'Cho nổ bom hi sinh kéo theo đối phương, sức hủy diệt cực cao'],
                    ];
                @endphp
                @foreach ($items as $item)
                    <tr>
                        <td><img alt="" src="{{ asset('teamobi_images/item/'.$item['image']) }}" width="20" height="20"> {{ $item['name'] }}</td>
                        <td>{{ $item['function'] }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        <p><span style="font-size:27px">Chức năng mới:</span></p>
        <ol>
            <li>Đồ họa cải tiến: Độ họa sắc nét, nhiều chi tiết hơn, nhưng vẫn mang phong cách Mobi Army, người chơi sẽ có trải nghiệm đồ họa tuyệt vời hơn nếu chơi trên Smart Phone</li>
            <li>Trang bị và vũ khí đa dạng, với nhiều cách bắn khác nhau: 50 loại vũ khí khác nhau ở phiên bản đầu tiên, và sẽ cập nhật thêm nữa ở các phiên bản kế tiếp. Vũ khí trong game rất đa dạng và quen thuộc, mỗi loại vũ khí sẽ mang một phong cách của một trong những đội đặc nhiệm tinh nhuệ: SWAT, SAS, SEAL, DELTA hay CYBER.</li>
            <li>Nâng cấp balo để có thêm ngăn chứa item: Balo có thể chứa item hoặc súng, ở cấp độ đầu, người chơi sẽ được cho balo 2 ngăn chứa, nâng cấp balo bằng cách mua trong cửa hàng.</li>
            <li>Đổi súng trong khi chơi</li>
            <li>Chuyển lượt dựa vào tốc độ nạp đạn</li>
            <li>Nâng cấp kĩ năng: Máu, Sức mạnh, chống đỡ, đồng đội, may mắn, tốc độ nạp đạn</li>
            <li>Map mới</li>
            <li>Phân chia cấp độ theo quân hàm</li>
        </ol>

        <p><span style="font-size:27px">Trang phục:</span></p>
        <p style="text-align: center;">
            <img alt="" src="https://teamobi.com/home/images/item/army3/trang-phuc.png" style="line-height:20.7999992370605px;max-width: 90%;" />
        </p>
    </div>
@endsection
