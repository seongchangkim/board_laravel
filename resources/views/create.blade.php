<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/common.css') }}">
    <link rel="stylesheet" href="{{ asset('css/create.css') }}">
</head>
<body>
    <div id="page">
        @if($boards == "")
            <form action="/create" method="post" id="frm">
                @csrf

                <h1 class="pageTitle">게시물 생성</h1>
                <div class="inputTitleForm">
                    <label for="title">제목 :</label>
                    <input type="text" id="title" name="title">
                </div>
                <div class="inputContentForm">
                    <label for="content">내용 :</label>
                    <textarea id="content" name="content" cols="30" rows="30"></textarea>
                </div>

                <div class="btnGroup">
                    <div class="submitBtn">만들기</div>
                    <div class="backBtn">뒤로 가기</div>
                </div>
            </form>
        @endif

        @if($boards != "")
            @foreach($boards as $board)
                <form action="/update" method="post" id="frm">
                    @csrf

                    <input type="hidden" name="id" value="{{$board->id}}">
                    <h1 class="pageTitle">게시물 수정</h1>
                    <div class="inputTitleForm">
                        <label for="title">제목 :</label>
                        <input type="text" id="title" name="title" value="{{$board->title}}" disabled="disabled">
                    </div>
                    <div class="inputContentForm">
                        <label for="content">내용 :</label>
                        <textarea id="content" name="content" cols="30" rows="30">{{$board->content}}</textarea>
                    </div>

                    <div class="btnGroup">
                        <div class="submitBtn">수정</div>
                        <div class="backBtn">뒤로 가기</div>
                    </div>
                </form>
            @endforeach
        @endif
    </div>

    <script src="{{ asset('js/create.js') }}"></script>
</body>
</html>
