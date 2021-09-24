<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('css/app.css') }}">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jQuery-Validation-Engine/2.6.4/validationEngine.jquery.min.css" type="text/css">

    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jQuery-Validation-Engine/2.6.4/languages/jquery.validationEngine-ja.min.js" charset="utf-8"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jQuery-Validation-Engine/2.6.4/jquery.validationEngine.min.js" charset="utf-8"></script>
    <script type="text/javascript">
        $(function() {
            //<form>タグのidを指定
            $("#formCheck").validationEngine(
                'attach', {
                    promptPosition: "topLeft" //エラーメッセージ位置の指定
                }
            );
        });
    </script>
    <title>Document</title>
    <style>
        .error {
            color: red;
        }
    </style>

</head>

<body>
    <div>
        <h1 style="text-align:center; margin-bottom:50px;">お問い合わせ</h1>
        <form action="/create" class="container" method="post" name="form" id="formCheck">
            @csrf
            <div class="mb-3 row">
                <label for="name" class="col-sm-2 col-form-label">お名前<span style="color:red">※</span></label>
                <div class="row" style="width:400px">
                    <div class="col">
                        <input type="text" class="form-control  validate[required]" id="name" name="name" value="{{old('name')}}">
                        <div style="opacity:0.8">例)山田 太郎</div>
                        @if($errors->has('name'))
                        <p class="error">{{$errors->first('name')}}</p>
                        @endif
                    </div>
                </div>
            </div>
            <div class="d-flex" style="margin-bottom:40px;">
                <label class="col-sm-2 col-form-label">性別<span style="color:red">※</span></label>
                <div class="d-flex">
                    <div class="form-check form-check-inline pt-2">
                        <input class="form-check-input" type="radio" name="gender" id="inlineRadio1" value='1' {{old('gender','1') == '1' ? 'checked':''}}>
                        <label class="form-check-label" for="inlineRadio1">男性</label>
                    </div>
                    <div class="form-check form-check-inline pt-2">
                        <input class="form-check-input" type="radio" name="gender" id="inlineRadio2" value='2' {{old('gender') == '2' ? 'checked':''}}>
                        <label class="form-check-label" for="inlineRadio2">女性</label>
                    </div>
                </div>
            </div>
            <div class="mb-3 row">
                <label for="inputEmail" class="col-sm-2 col-form-label">メールアドレス<span style="color:red">※</label>
                <div class="col-sm-10" style="width:800px">
                    <input type="email" class="form-control  validate[required]" id="inputEmail" name="email" value="{{old('email')}}" required>
                    <div style="opacity:0.8">例)test@example.com</div>
                    @if($errors->has('email'))
                    <p class="error">{{$errors->first('email')}}</p>
                    @endif
                </div>
            </div>
            <div class="mb-3 row">
                <label for="postCode" class="col-sm-2 col-form-label">郵便番号<span style="color:red">※</label>
                <div class="col-12" style="width:800px">
                    <div class="input-group">
                        <div class="input-group-text">〒</div>
                        <input type="text" class="form-control  validate[required]" id="postCode" name="postcode" onKeyUp="AjaxZip3.zip2addr(this,'','address','address');" value="{{old('postcode')}}">
                    </div>
                    <div style="opacity:0.8">例)〒123-4567</div>
                    @if($errors->has('postcode'))
                    <p class="error">{{$errors->first('postcode')}}</p>
                    @endif
                </div>
            </div>
            <div class="mb-3 row">
                <label for="inputAddress" class="col-sm-2 col-form-label">住所<span style="color:red">※</label>
                <div class="col-12" style="width:800px">
                    <div class="input-group">
                        <input type="text" class="form-control  validate[required]" id="inputAddress" name="address" value="{{old('address')}}">
                    </div>
                    <div style="opacity:0.8">例)東京都渋谷区千駄ヶ谷1-2-3</div>
                    @if($errors->has('address'))
                    <p class="error">{{$errors->first('address')}}</p>
                    @endif

                </div>
            </div>
            <div class="mb-3 row">
                <label for="building_name" class="col-sm-2 col-form-label">建物名</label>
                <div class="col-12" style="width:800px">
                    <div class="input-group">
                        <input type="text" class="form-control" id="building_name" name="building_name" value="{{old('building_name')}}">
                    </div>
                    <div style="opacity:0.8">例)千駄ヶ谷マンション101</div>
                </div>
            </div>
            <div class="mb-3 row">
                <label for="floatingTextarea" class="col-sm-2 col-form-label">ご意見<span style="color:red">※</label>
                <div class="col-12" style="width:800px">
                    <div class="form-floating">
                        <textarea class="form-control  validate[required]" id="floatingTextarea" maxlength="120" cols="10" name="opition" style="height:100px; padding:0">{{old('opition')}}</textarea>
                    </div>
                    @if($errors->has('opition'))
                    <p class="error">{{$errors->first('opition')}}</p>
                    @endif
                </div>
            </div>
            <button type="submit" class="btn btn-dark d-block" style="margin:auto">確認</button>
        </form>
    </div>
    <script src="https://ajaxzip3.github.io/ajaxzip3.js" charset="UTF-8"></script>
</body>

</html>
