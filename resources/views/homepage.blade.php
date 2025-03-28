@extends('layout')

@section('title', 'Trang chủ Mobi Army 3')
@section('sl1')
id="@selected(true)"
@endsection
@section('content')
    <div class="bg_top_22">
        <img src="{{ asset('images/background.jpg') }}" width="100%">
        <div class="download">
            <div class="bg-content" style="text-align:center;">
                <div id="columns">
                    <figure>
                        <a href="http://wap.teamobi.com/game/jar/118/1" title="game mobi army 3 java">
                            <img height="40" src="{{ asset('images/java.png') }}" alt="game mobi army 3">
                        </a><br>
                        <figcaption><span style="color:rgb(209, 9, 50);">371</span> - 09/12/2016 - <a href="http://wap.teamobi.com/game/jad/118/1">Jad</a></figcaption>
                    </figure>
                    <figure>
                        <a href="http://wap.teamobi.com/download/36" title="game mobi army 3 android">
                            <img height="40" src="{{ asset('images/apk.png') }}" alt="game mobi army 3">
                        </a><br>
                        <figcaption><span style="color:rgb(209, 9, 50);">371</span> - 08/12/2016</figcaption>
                    </figure>
                    <figure>
                        <a href="https://play.google.com/store/apps/details?id=com.bluedragon.army" title="game mobi army 3">
                            <img height="40" src="{{ asset('images/gg.png') }}" alt="game mobi army 3">
                        </a><br>
                        <figcaption><span style="color:rgb(209, 9, 50);">371</span> - 08/12/2016</figcaption>
                    </figure>
                    <figure>
                        <a href="http://wap.teamobi.com/download/45" title="game mobi army 3">
                            <img height="40" src="{{ asset('images/pc.png') }}" alt="game mobi army 3">
                        </a><br>
                        <figcaption><span style="color:rgb(209, 9, 50);">373</span> - 29/12/2016</figcaption>
                    </figure>
                    <figure>
                        <a href="{{ url('/iframe') }}" title="game mobi army 3">
                            <img height="40" src="{{ asset('images/ip.png') }}" alt="game mobi army 3">
                        </a><br>
                        <figcaption><span style="color:rgb(209, 9, 50);">371</span> - 09/12/2016</figcaption>
                    </figure>
                    <figure>
                        <a href="http://www.windowsphone.com/en-us/store/app/mobi-army-3/a29ac25f-09f6-422e-971a-af6317515d87?signin=true" title="game mobi army 3">
                            <img height="40" src="{{ asset('images/wp.png') }}" alt="game mobi army 3">
                        </a><br>
                        <figcaption><span style="color:rgb(209, 9, 50);">373</span> - 29/12/2016</figcaption>
                    </figure>
                </div>
            </div>
        </div>
    </div>

    <div class="bg-content">
        <div>
            <div class="title">
                <h4>Thông báo mới</h4>
            </div>
            <div class="content">
                <p>Năm 2014 tình hình thế giới diễn biến phức tạp, thế chiến thứ 3 có thể bùng nổ bất cứ lúc nào.</p>
                <p>Một lực lượng vũ trang tự xưng là ES đã xâm chiếm toàn Đông Á, Nam Phi và đang tiến hành áp dụng luật pháp diều hâu để kiểm soát 1 vùng lãnh thổ rộng lớn nơi đây, chúng khủng bố người dân, chiếm các mỏ dầu và tuyên bố sẽ thâu tóm toàn bộ các thành phố lớn ở các châu lục để thành lập một liên minh các quốc gia đưới trướng.</p>
                <p>Các cường quốc trong khối vệ binh hòa bình Trái Đất GATO nhận thấy ES là mối đe dọa cho toàn nhân loại nên đã không kích chúng bằng máy bay và tên lửa Raptors, tuy nhiên chưa thể tiêu diệt được ES nếu không dùng tới bộ binh.</p>
                <p>Tháng 10/2014 ES lại sát hại các nhà báo, các tình nguyên viên nhân đạo khi họ tham gia các chiến dịch tình nguyện tại các quốc gia mà ES có chiếm đóng và tham vọng thâu tóm GATO và các đồng minh quyết định cử các đội đặc nhiệm ưu tú nhất hành tinh SEAN, SWAN, SAT, DANTA và một đội đặc nhiệm bí ẩn đến các căn cứ tình nghi của ES và giải cứu người dân vô tội.</p>
                <p>Bạn sẽ gia nhập lực lượng đặc nhiệm nào để tham gia chiến dịch lịch sử này ? hãy tham gia Mobi Army 3 và chọn đội mình yêu thích nhé.</p>
            </div>
            <div class="date">Cách đây 1 decade</div>
        </div>
    </div>

    <div class="bg-content">
        <div>
            <div class="title">
                <h4>Hướng Dẫn Tân Thủ</h4>
            </div>
            <div class="content">
                <p>1. Đăng ký tài khoản</p>
                <p>Mobi Army 3<strong> </strong> sử dụng Tài Khoản riêng, không chung với bất kỳ Trò Chơi nào khác.</p>
                <p>Bạn có thể đăng ký tài khoản miễn phí ngay trong game, hoặc trên trang Diễn Đàn.</p>
                <p>Khi đăng ký, bạn nên sử dụng đúng số điện thoại hoặc email thật của mình. Nếu sử dụng thông tin sai, người có số điện thoại hoặc email thật sẽ có thể lấy mật khẩu của bạn.</p>
                <p>Số điện thoại và email của bạn sẽ không hiện ra cho người khác thấy. Admin không bao giờ hỏi mật khẩu của bạn.</p>
                <p>2. Hướng dẫn điều khiển<br />
                    Đối với máy bàn phím : Dùng các phím mũi tên số 4-6 để di chuyển, số 2-8 để chỉnh góc bắn. Giữ phím chọn giữa để canh lực bắn<br />
                    Đối với máy cảm ứng : Dùng tay chạm vào mũi tên để di chuyển. Chạm vào nút chỉnh góc sau lưng nhân vật để canh góc bắn, chạm và giữ nút bắn góc phải màn hình để canh lực bắn.</p>
                <p><br />
                    3. Một số thông tin căn bản<br />
                    _ Bạn phải có ít nhất 1000 vàng mới có thể vào khu vực chọn phòng chơi, nếu không đủ 1000 vàng, hãy vào phòng Luyện tập (ngoài màn hình chính) để kiếm đủ tiền.<br />
                    _ Bạn có thể mang bất kì loại súng nào vào trận đấu, nếu balo của bạn đủ chỗ chứa.<br />
                    _ Người có tốc độ nạp đạn nhanh nhất sẽ là người có lượt nhiều nhất trong 1 ván chơi.<br />
                    _ Súng có sát thương càng mạnh thì tốc độ nạp đạn càng lâu.<br />
                    _ Hãy nâng cấp balo để có nhiều ngăn chứa hơn.<br />
                    _ Đa số các item chiến đấu khi sử dụng sẽ có sức mạnh tùy thuộc vào loại súng bạn đang sử dụng.<br />
                    _ Nếu bạn có nhiều đồng đội, hãy nâng cấp điểm đồng đội để được hỗ trợ nhiều hơn trong ván đấu<br />
                    _ Nâng cấp điểm may mắn, bạn sẽ có cơ hội nhân đôi sức mạnh hoặc giảm sát thương từ kẻ thù</p>
            </div>
            <div class="date">Cách đây 1 decade</div>
        </div>
    </div>

    <div class="bg-content">
        <div>
            <div class="title">
                <h4>Bạn nên tải phiên bản nào?</h4>
            </div>
            <div class="content">
                <p>Nếu bạn dùng điện thoại Nokia cũ, có bàn phím như Nokia 6300, Nokia E72, Nokia X2, Nokia C2, Hãy tải bản JAVA</p>
                <p>Nếu bạn dùng máy cảm ứng sử dụng Android như: Samsung Galaxy Y, HTC, LG, Sky, HKPhone. Hãy tải bản Android APK hoặc Android Playstore đều được.</p>
                <p>Trò chơi đang được phát triển và sẽ sớm hỗ trợ cho các dòng điện thoại iPhone và trên PC.</p>
            </div>
            <div class="date">Cách đây 1 decade</div>
        </div>
    </div>

    <div class="box_parent_list_next" style="margin:0px;text-align:center;">
        <div class="box_phantrang">
            <div class="pagination">
                <!-- Có thể thêm phân trang động nếu cần -->
            </div>
        </div>
    </div>
@endsection
