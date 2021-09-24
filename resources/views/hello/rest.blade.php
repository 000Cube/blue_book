@extends('layouts.helloapp')

@section('title','Rest')

@section('menubar')
    @parent
    rest
@endsection

@section('content')
    @include('rest.create')
@endsection

@section('footer')
    copywright 2021 kaiji.
@endsection