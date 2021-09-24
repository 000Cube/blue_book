@extends('layouts.helloapp')

@section('title','Board.index')

@section('menubar')
    @parent
    インデックスページ
@endsection

@section('content')
<table>
    <tr><th>Message</th><th>Name</th></tr>
    @foreach($items as $item)
        <tr>
            <td>{{$item->getData()}}</td>
            <td>{{$item->person->name}}</td>
        </tr>
        @endforeach
</table>
@endsection

@section('footer')
    copywright 2021 kaiji.
@endsection