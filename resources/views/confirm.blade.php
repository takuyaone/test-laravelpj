<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <title>Document</title>
    <style>
        .content {
            padding: 6px;
            width: 800px;
        }
    </style>
</head>

<body>
    <div>
        <h1 style="text-align:center; margin-bottom:50px;">内容確認</h1>
        <form action="/send" class="container" method="post">
            @csrf
            <div class="mb-3 row">
                <label for="name" class="col-sm-2 col-form-label">お名前</span></label>
                <div class="row content">
                    <div class="col">
                        <div>{{$input['name']}}</div>
                    </div>
                </div>
            </div>
            <div class="d-flex mb-3">
                <label class="col-sm-2 col-form-label">性別</span></label>
                <div class="content">
                    @if($input['gender']==1)
                    {{"男性"}}
                    @else
                    {{"女性"}}
                    @endif
                </div>
            </div>
            <div class="mb-3 row mb-3">
                <label for="inputEmail" class="col-sm-2 col-form-label">メールアドレス</label>
                <div class="col-sm-10 content">
                    {{$input['email']}}
                </div>
            </div>
            <div class="mb-3 row mb-3">
                <label for="postCode" class="col-sm-2 col-form-label">郵便番号</label>
                <div class="col-12" style="width:800px">
                    {{$input['postcode']}}
                </div>
            </div>
            <div class="mb-3 row mb-3">
                <label for="inputAddress" class="col-sm-2 col-form-label">住所</label>
                <div class="col-12 content">
                    {{$input['address']}}
                </div>
            </div>
            <div class="mb-3 row mb-3">
                <label for="building_name" class="col-sm-2 col-form-label">建物名</label>
                <div class="col-12 content">
                    {{$input['building_name']}}
                </div>
            </div>
            <div class="mb-3 row mb-3">
                <label for="floatingTextarea" class="col-sm-2 col-form-label">ご意見<span style="color:red">※</label>
                <div class="col-12 content">
                    {{$input['opition']}}
                </div>
            </div>
            <button type="submit" class="btn btn-dark d-block" style="margin:auto">送信</button>
            <button name="back" type="submit" class="btn d-block" style="margin:auto; color:blue">修正する</button>
        </form>
    </div>
</body>

</html>
