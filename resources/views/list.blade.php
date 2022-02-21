<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/common.css') }}">
    <link rel="stylesheet" href="{{ asset('css/list.css') }}">
</head>
<body>
    <div id="page">
        <div class="list">
            <div class="listTop">
                <div class="idTd">번호</div>
                <div class="titleTd">제목</div>
                <div class="readCountTd">조회수</div>
                <div class="createdAtTd">작성날짜</div>
            </div>
            <div class="boardTable">
                @foreach($boards as $board)
                    <div class="board">
                        <div class="id">{{ $board->id }}</div>
                        <div class="title">
                            <a href="/show/{{ $board->id }}">
                                {{ $board->title }}
                            </a>
                        </div>
                        <div class="readCount">{{ $board->read_count }}</div>
                        <div class="createdAt">{{ $board->created_at }}</div>
                    </div>
                @endforeach
            </div>
        </div>
        <div class="btnGroup">
            <div class="createBtn">만들기</div>
        </div>

        <script src="{{ asset('js/list.js') }}"></script>
    </div>

</body>
</html>
