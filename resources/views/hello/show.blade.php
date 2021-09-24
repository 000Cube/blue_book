@extends('layouts.helloapp')

@section('title','show')

@section('menubar')
    @parent
    詳細ページ
@endsection

@section('content')
    @if ($items != null)
    @foreach($items as $item)
    <table width="400px">
        <tr><th width="50px">id:</th><td width="50px">{{$item->id}}</td></tr>
        <tr><th width="50px">name:</th><td width="50px">{{$item->name}}</td></tr>
    </table>
    @endforeach
    @endif
@endsection

@section('footer')
    copyright 2021 kaiji
@endsection