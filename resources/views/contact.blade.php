<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>
    <form action="/create" class="container" method="post">
        @csrf
        <h1 style="text-align:center">お問い合わせ</h1>
        <div class="mb-3 row">
            <label for="name" class="col-sm-2 col-form-label">お名前<span style="color:red">※</span></label>
            <div class="row" style="width:800px">
                <div class="col">
                    <input type="text" class="form-control" id="name" name="name">
                    <div style="opacity:0.8">例)山田</div>
                    @if($errors->has('name'))
                    <p style="color:red">{{'※名前を入力してください'}}</p>
                    @endif
                </div>
                <div class="col">
                    <input type="text" class="form-control" name="name">
                    <div style="opacity:0.8">例)太郎</div>
                </div>
            </div>
        </div>
        <div class="d-flex mb-3">
            <label class="col-sm-2 col-form-label">性別<span style="color:red">※</span></label>
            <div class="d-flex">
                <div class="form-check form-check-inline pt-2">
                    <input class="form-check-input" type="radio" id="inlineRadio1" checked="checked" value=1 name="gender">
                    <label class="form-check-label" for="inlineRadio1">男性</label>
                </div>
                <div class="form-check form-check-inline pt-2">
                    <input class="form-check-input" type="radio" id="inlineRadio2" value=2 name="gender">
                    <label class="form-check-label" for="inlineRadio2">女性</label>
                </div>
            </div>
        </div>
        <div class="mb-3 row mb-3">
            <label for="inputEmail" class="col-sm-2 col-form-label">メールアドレス<span style="color:red">※</label>
            <div class="col-sm-10" style="width:800px">
                <input type="email" class="form-control" id="inputEmail" name="email">
                <div style="opacity:0.8">例)test@example.com</div>
            </div>
        </div>
        <div class="mb-3 row mb-3">
            <label for="postCode" class="col-sm-2 col-form-label">郵便番号<span style="color:red">※</label>
            <div class="col-12" style="width:800px">
                <div class="input-group">
                    <div class="input-group-text">〒</div>
                    <input type="text" class="form-control" id="postCode" name="postcode">
                </div>
                <div style="opacity:0.8">例)〒123-4567</div>
                @error('postcode'!==8)
                {{'8桁で入力してください'}}
                @enderror
            </div>
        </div>
        <div class="mb-3 row mb-3">
            <label for="inputAddress" class="col-sm-2 col-form-label">住所<span style="color:red">※</label>
            <div class="col-12" style="width:800px">
                <div class="input-group">
                    <input type="text" class="form-control" id="inputAddress" name="address">
                </div>
                <div style="opacity:0.8">例)東京都渋谷区千駄ヶ谷1-2-3</div>
            </div>
        </div>
        <div class="mb-3 row mb-3">
            <label for="building_name" class="col-sm-2 col-form-label">建物名</label>
            <div class="col-12" style="width:800px">
                <div class="input-group">
                    <input type="text" class="form-control" id="building_name" name="building_name">
                </div>
                <div style="opacity:0.8">例)千駄ヶ谷マンション101</div>
            </div>
        </div>
        <div class="mb-3 row mb-3">
            <label for="floatingTextarea" class="col-sm-2 col-form-label">ご意見<span style="color:red">※</label>
            <div class="col-12" style="width:800px">
                <div class="form-floating">
                    <textarea class="form-control" id="floatingTextarea" maxlength="120" cols="10" name="opition" style="height:100px"></textarea>
                </div>
            </div>
        </div>
        <button type="submit" class="btn btn-dark d-block" style="margin:auto">確認</button>
    </form>
</body>

</html>
