<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/common.css') }}">
    <link rel="stylesheet" href="{{ asset('css/show.css') }}">
</head>
<body>
    <div id="page">
        @foreach($boards as $board)
            <div class="boardDetail">
                <div class="boardDetailTop">
                    <div class="boardDetailTopTitle">
                        <div class="boardDetailTitle">
                            제목
                        </div>
                        <div class="boardDetailTitleData">
                            {{ $board->title }}
                        </div>
                    </div>

                    <div class="boardDetailTopReadCount">
                        <div class="boardDetailReadCount">
                            조회수
                        </div>
                        <div class="boardDetailReadCountData">
                            {{ $board->read_count }}
                        </div>
                    </div>
                </div>
                <div class="boardDetailMiddle">
                    <div class="boardDetailContent">
                        {{ $board->content }}
                    </div>
                </div>
                <div class="btnGroup">
                    <div class="updateBtn">수정</div>
                    <div class="deleteBtn">삭제</div>
                    <div class="backBtn">뒤로 가기</div>
                </div>
            </div>
        @endforeach

        <script src="{{ asset('js/show.js') }}"></script>
    </div>

</body>
</html>
