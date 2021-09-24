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
        <tbody>
            @foreach ($items as $item)
            <tr>
                <td>{{$item->name}}</td>
                <td>@if($item->gender==1) 男性 @else 女性 @endif</td>
                <td>{{$item->email}}</td>
                <td>{{Str::limit($item->opition,25)}}</td>
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
@endsection
