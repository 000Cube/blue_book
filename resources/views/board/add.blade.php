@extends('layouts.helloapp')

@section('title','Board.Add')
    
@section('menubar')
    @parent
    新規作成ページ
@endsection

@section('content')
    @if (count($errors) > 0)
        <div>
            <ul>
                @foreach ($errors as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <table>
        <form action="" method="post">
            {{ csrf_field() }}
            <tr><th>person id: </th><td><input type="text" name="person_id" value="{{old('person_id')}}"></td></tr>
            <tr><th>title: </th><td><input type="text" name="title" value="{{old('title')}}"></td></tr>
            <tr><th>message: </th><td><input type="text" name="message" value="{{old('message')}}"></td></tr>
            <tr><th></th><td><input type="submit" value="send"></td></tr>

        </form>
    </table>
@endsection

@section('footer')
    copywright 2021 kaiji
@endsection