@extends('layouts.helloapp')

@section('title','login')

@section('menubar')
    @parent
    ユーザー認証ページ
@endsection

@section('content')
    <p>{{$message}}</p>
    <table>
        <form action="" method="POST">
            {{ csrf_field() }}
            <tr><th>email: </th><td><input type="text" name="email"></td></tr>
            <tr><th>password: </th><td><input type="password" name="password"></td></tr>
            <tr><th></th><td><input type="submit" value="send"></td></tr>
        </form>
    </table>
@endsection