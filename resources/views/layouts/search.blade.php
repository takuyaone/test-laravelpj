<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('js/app.js') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <title>Document</title>


    <style>
        .target {
            background-color: #ea3345;
            padding: 10px;
        }

        .target.is-hidden {
            display: none;
        }
    </style>

</head>

<body>
    <div style="text-align:center; ">
        <h1 style="margin-bottom:50px">管理システム</h1>
        <div>
            <form action="/search" class="row g-3 needs-validation form" method="post">
                @csrf
                <div class="d-flex">
                    <div class="col-md-4 d-flex">
                        <label for="validationCustom01" class="col-form-label label">お名前</label>
                        <input class="form-control" type="text" name="name" id="validationCustom01">
                    </div>
                    <div class="d-flex">
                        <label for="validationCustom01" class="form-label ms-5" style="padding-top:8px">性別</label>
                        <div class="form-check form-check-inline pt-2 ms-3">
                            <input class="form-check-input" type="radio" name="gender" id="inlineRadio" checked="checked">
                            <label class="form-check-label" for="inlineRadio">全て</label>
                        </div>
                        <div class="form-check form-check-inline pt-2">
                            <input class="form-check-input" type="radio" name="gender" value="1" id="inlineRadio1">
                            <label class="form-check-label" for="inlineRadio1">男性</label>
                        </div>
                        <div class="form-check form-check-inline pt-2">
                            <input class="form-check-input" type="radio" name="gender" value="2" id="inlineRadio2">
                            <label class="form-check-label" for="inlineRadio2">女性</label>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 d-flex" style="width:540px">
                    <label for="validationCustomUsername" class="form-label label" style="margin-right:60px">登録日</label>
                    <div class="input-group">
                        <input class="form-control" type="date" name="from" id="validationCustomUsername">
                    </div>
                    <span style="padding:8px 5px 0">～</span>
                    <div class="input-group">
                        <input class="form-control" type="date" name="until" id="validationCustomUsername">
                    </div>
                </div>
                <div class="d-flex">
                    <div class="col-auto">
                        <label for="inputEmail" class="col-form-label" style="margin-right:48px">メールアドレス</label>
                    </div>
                    <div class="col-auto" style="width:395px">
                        <input type="email" name="email" id="inputEmail" class="form-control">
                    </div>
                </div>
                <div class="col-12">
                    <button type="submit" class="btn btn-dark" style="width:100px">検索</button>
                </div>
                <div class="col-12">
                    <a href="/show">リセット</a>
                </div>
            </form>
            <div>@yield('content')</div>
        </div>
    </div>
</body>

</html>
