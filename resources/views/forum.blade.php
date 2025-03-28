@extends('layout')

@section('title', 'Mobi Army 3 - Diễn đàn')
@section('sl3')
id="@selected(true)"
@endsection
@section('content')
    <style>
        #box_login_ads {
            background-color: #aed0e1; /* Màu nền xanh nhạt */
            padding: 10px;
            text-align: center;
            min-height: 50px; /* Chiều cao tối thiểu */
        }
        .box_button_login button {
            margin: 0 5px;
            padding: 5px 10px;
            border-radius: 5px;
        }
        #box_forums {
            display: flex;
            flex-direction: column;
            min-height: 4px; /* Chiều cao tối thiểu để có không gian đẩy list xuống dưới */
        }
        .box_list_chuyenmuc {
            margin-top: auto; /* Đẩy danh sách bài viết xuống dưới cùng */
            background-color: #aed0e1; /* Màu nền xanh nhạt */
        }
        .box_botss {
            line-height: 15px;
            background-color: #aed0e1; /* Màu nền xanh nhạt cho bài viết thường */
            border-bottom: 1px #65A5AC solid; /* Viền dưới đồng bộ */
            padding: 5px;
        }
        .box_botss.pinned {
            background-color: #f5d8b2; /* Màu nền vàng cho bài viết ghim */
            border-bottom: 1px #B28971 solid; /* Viền dưới đồng bộ với màu vàng */
        }
        .topic_name a {
            color: #1757a6; /* Màu chữ tiêu đề bài viết */
            text-decoration: none;
        }
        .topic_name a:hover {
            text-decoration: underline; /* Hover gạch chân */
        }
        .topic_name.pinned a span {
            font-weight: bold; /* Tiêu đề in đậm cho bài viết ghim */
        }
        .box_name_eman {
            font-size: 11px;
            color: #666666; /* Màu chữ thông tin */
            font-style: italic;
        }
        .box_topsss {
            float: left;
            width: 100%;
            color: #FFFFFF;
            background-color: #aed0e1; /* Màu nền của phần phân trang */
            height: 20px;
            padding: 5px 0;
        }
        .pagination {
            float: right;
            margin: 0;
        }
        .pagination .pagecurrent {
            background-color: #00467a; /* Màu nền trang hiện tại */
            color: #FFFFFF;
            padding: 2px 6px;
            border-radius: 3px;
        }
        .pagination .pagelink {
            color: #1757a6; /* Màu chữ liên kết phân trang */
            text-decoration: none;
            padding: 2px 6px;
            margin: 0 2px;
        }
        .pagination .pagelink:hover {
            background-color: #65A5AC; /* Màu khi hover */
            color: #FFFFFF;
            border-radius: 3px;
        }
    </style>

    <div class="body">
        <div id="box_login_ads">
            <div class="box_inputboxx" style="width:100%">
                <div class="box_button_login">
                    <a href="{{ url('/login') }}"><button>Đăng nhập</button></a>
                    <a href="{{ url('/register') }}"><button>Đăng ký</button></a>
                </div>
            </div>
            <p></p><br>
            <div style="width:100%;float:left;">
                <div style="text-align:center;">
                    <a href="http://pay.teamobi.com/?game=army2">
                        <img src="http://pay.teamobi.com/img/btn/army.png" alt="Nạp thẻ">
                    </a>
                </div>
                <br>
                <div style="text-align:center;"></div>
            </div>
            <div align="center">
                <iframe src="//www.facebook.com/plugins/like.php?href=https://www.facebook.com/MA3.teamobi&send=false&layout=button_count&width=100&show_faces=false&action=like&colorscheme=light&font&height=21"
                    scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:100px; height:21px;" allowTransparency="true"></iframe>
            </div>
        </div>

        <div id="box_forums">
            <div class="box_list_parent">
                <div class="box_parent_list">
                    <table width="100%" border="0" cellspacing="0">
                        <tbody>
                            <tr class="menu1">
                                <td width="33%" style="border: 2px solid #00467a;padding: 2px;">
                                    <a href="{{ url('/forum/bao-loi') }}">Báo lỗi</a>
                                </td>
                                <td width="33%" style="border: 2px solid #00467a;padding: 2px;">
                                    <a href="{{ url('/forum/to-cao') }}">Tố cáo</a>
                                </td>
                                <td width="33%" style="border: 2px solid #00467a;padding: 2px;">
                                    <a href="{{ url('/forum/gop-y') }}">Góp ý</a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <div class="box_list_chuyenmuc">
                <div class="box_topss" style="height:5px"> </div>

                @php
                    // Danh sách bài viết ghim (pinned posts)
                    $pinnedTopics = collect([
                        ['avatar' => '155.png', 'title' => 'Thông báo quan trọng từ Admin', 'author' => 'Admin-r2', 'views' => 1000, 'replies' => 5, 'likes' => 10, 'locked' => false, 'uid' => 9999999, 'pinned' => true],
                        ['avatar' => '790.png', 'title' => 'Cập nhật phiên bản mới nhất', 'author' => '0342400064', 'views' => 2000, 'replies' => 8, 'likes' => 15, 'locked' => false, 'uid' => 9999998, 'pinned' => true],
                    ]);

                    // Danh sách bài viết thường
                    $topics = collect([
                        ['avatar' => '143.png', 'title' => 'Điều chỉnh exp Clan server Trái Đất và Sao Hỏa', 'author' => 'Admin', 'views' => 870, 'replies' => 0, 'likes' => 0, 'locked' => false, 'uid' => 4260203, 'pinned' => false],
                        ['avatar' => '143.png', 'title' => 'Army2 cho ip ios có sever trái đất', 'author' => '0342400064', 'views' => 5954, 'replies' => 3, 'likes' => 1, 'locked' => false, 'uid' => 4260196, 'pinned' => false],
                        ['avatar' => '143.png', 'title' => 'Hỗ trợ đăng nhập', 'author' => '0986504712', 'views' => 969, 'replies' => 0, 'likes' => 0, 'locked' => false, 'uid' => 4260198, 'pinned' => false],
                        ['avatar' => '143.png', 'title' => 'Khi đã BB', 'author' => '01696633424', 'views' => 1143, 'replies' => 7, 'likes' => 0, 'locked' => false, 'uid' => 4260061, 'pinned' => false],
                        ['avatar' => '147.png', 'title' => 'Xin lại mật khẩu khẩu game army2', 'author' => '0333661610', 'views' => 2220, 'replies' => 3, 'likes' => 0, 'locked' => true, 'uid' => 4260163, 'pinned' => false],
                        ['avatar' => '155.png', 'title' => 'mung xuan fix xong', 'author' => '01696633424', 'views' => 1294, 'replies' => 4, 'likes' => 1, 'locked' => true, 'uid' => 4260143, 'pinned' => false],
                        ['avatar' => '151.png', 'title' => 'Người về cùng ấy', 'author' => '01696633424', 'views' => 858, 'replies' => 0, 'likes' => 1, 'locked' => false, 'uid' => 4260098, 'pinned' => false],
                        ['avatar' => '790.png', 'title' => 'Tổng Hùng', 'author' => '01696633424', 'views' => 350, 'replies' => 0, 'likes' => 1, 'locked' => false, 'uid' => 4260096, 'pinned' => false],
                        ['avatar' => '790.png', 'title' => 'Bác Sỹ Yamato', 'author' => '01696633424', 'views' => 521, 'replies' => 4, 'likes' => 1, 'locked' => false, 'uid' => 4260091, 'pinned' => false],
                        ['avatar' => '143.png', 'title' => 'Gầy rống chim biêu', 'author' => '01696633424', 'views' => 537, 'replies' => 3, 'likes' => 1, 'locked' => false, 'uid' => 4260087, 'pinned' => false],
                    ]);
                    $perPage = 20; // Số bài viết mỗi trang (không tính pinned)
                    $currentPage = request()->get('page', 1); // Trang hiện tại
                    $paginatedTopics = new \Illuminate\Pagination\LengthAwarePaginator(
                        $topics->forPage($currentPage, $perPage),
                        $topics->count(),
                        $perPage,
                        $currentPage,
                        ['path' => url('/dien-dan')]
                    );
                @endphp

                <!-- Bài viết ghim -->
                @foreach ($pinnedTopics as $topic)
                    <div class="box_botss pinned">
                        <div class="topic_name pinned">
                            <div style="width:20px;float:left;margin-right: 3px;">
                                <img style="max-width:100%;max-height:100%;" src="{{ asset('teamobi_images/avatar') .'/'. $topic['avatar'] }}" alt="{{ asset('teamobi_images/avatar/')  . $topic['avatar'] }}" />
                            </div>
                            <div>
                                @if ($topic['locked'])
                                    <img title="Locked" alt="Locked" src="http://my.teamobi.com/lock_red.gif" border="0"/>
                                @endif
                                <a href="{{ url('/forum/topic/' . $topic['uid']) }}" title="{{ $topic['title'] }}">
                                    <span>{{ $topic['title'] }}</span>
                                </a>
                                <div class="box_name_eman">
                                    bởi <span>{{ $topic['author'] }}</span>
                                    @if ($topic['replies'] > 0)
                                        <span> Trả lời: {{ $topic['replies'] }}</span>
                                    @endif
                                    <span> - Xem: {{ $topic['views'] }} -</span>
                                    @if ($topic['likes'] > 0)
                                        <span style="color:red"> ♥ {{ $topic['likes'] }}</span>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach

                <!-- Bài viết thường -->
                @foreach ($paginatedTopics as $topic)
                    <div class="box_botss">
                        <div class="topic_name">
                            <div style="width:20px;float:left;margin-right: 3px;">
                                <img style="max-width:100%;max-height:100%;" src="{{ asset('teamobi_images/avatar') .'/'. $topic['avatar'] }}" alt="{{ asset('teamobi_images/avatar/') . $topic['author'] }}" />
                            </div>
                            <div>
                                @if ($topic['locked'])
                                    <img title="Locked" alt="Locked" src="http://my.teamobi.com/lock_red.gif" border="0"/>
                                @endif
                                <a href="{{ url('/forum/topic/' . $topic['uid']) }}" title="{{ $topic['title'] }}">
                                    <span>{{ $topic['title'] }}</span>
                                </a>
                                <div class="box_name_eman">
                                    bởi <span>{{ $topic['author'] }}</span>
                                    @if ($topic['replies'] > 0)
                                        <span> Trả lời: {{ $topic['replies'] }}</span>
                                    @endif
                                    <span> - Xem: {{ $topic['views'] }} -</span>
                                    @if ($topic['likes'] > 0)
                                        <span style="color:red"> ♥ {{ $topic['likes'] }}</span>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach

                <div class="box_topsss">
                    <div style="width:100px;float:left;"></div>
                    <span style="float:right">
                        <div class="pagination">
                            <span class="pagecurrent">1</span>
                            <a class="pagelink" href="{{ url('/forum?page=2') }}">2</a>
                            <a class="pagelink" href="{{ url('/forum?page=3') }}">3</a>
                            <a class="pagelink" href="{{ url('/forum?page=2') }}">></a>
                            <a class="pagelink" href="{{ url('/forum?page=12') }}">>></a>
                        </div>
                    </span>
                </div>
            </div>
        </div>
        <div class="clearfix"></div>
    </div>
@endsection
