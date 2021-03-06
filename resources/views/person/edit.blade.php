@extends('layouts.helloapp')

@section('title','Person.Edit')

@section('menubar')
    @parent
    編集ページ
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
        <form action="" method="POST">
            {{ csrf_field() }}
            <input type="hidden" name="id" value="{{$form->id}}">
            <tr><th>name: </th><td><input type="text" name="name" value="{{$form->name}}"></td></tr>
            <tr><th>email: </th><td><input type="text" name="email" value="{{$form->email}}"></td></tr>
            <tr><th>age: </th><td><input type="number" name="age" value="{{$form->age}}"></td></tr>
            <tr><th></th><td><input type="submit" value="send"></td></tr>
        </form>
    </table>
@endsection