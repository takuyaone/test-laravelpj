@extends('layouts.search')

@section('content')
<div>
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>お名前</th>
                <th>性別</th>
                <th>メールアドレス</th>
                <th>ご意見</th>
                <th></th>
            </tr>
        </thead>
        <div class="d-flex justify-content-between" style="margin:0 50px">
            @if(count($items)>0)
            <p class="pt-2">全{{$items->total()}}件中
                {{($items->currentPage()-1)*$items->perPage()+1}} -
                {{(($items->currentPage()-1)*$items->perPage()+1)+(count($items)-1)}}件
            </p>@else
            <p class="pt-2">データがありません。</p>
            @endif
            <div>
                {{$items->links()}}
            </div>
        </div>
        <tbody>
            @foreach ($items as $item)
            <tr>
                <td>{{$item->id}}</td>
                <td>{{$item->name}}</td>
                <td>@if($item->gender==1) 男性 @else 女性 @endif</td>
                <td>{{$item->email}}</td>
                <td id="ex_out">{{Str::limit($item->opition,25)}}</td>
                <td id="ex_menu" style="display:none">{{$item->opition}}</td>
                <td>
                    <form action="{{ route('delete', ['id' => $item->id]) }}" method="post">
                        @csrf
                        <button class="button-delete btn-dark" style="border-radius:5px">削除</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
<script type="text/javascript">
    let out = document.getElementById("ex_out");
    out.addEventListener("mouseover", function() {
        document.getElementById("ex_menu").style.display = 'block';
    }, false);

    let out = document.getElementById("ex_out");
    out.addEventListener("mouseout", function() {
        document.getElementById("ex_menu").style.display = 'none';
    }, false);
</script>

@endsection
