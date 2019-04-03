@extends('index')
@section('content')
<?php
    $setting = Cache::get('setting');
?>
<div class="content-home-cate">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-md-3">
                    <div class="crumb">
                        <a href="{{url('')}}">Trang chủ | </a><a href="{{url('phan-phoi-son-nuoc')}}">Phân phối sơn nước | </a> <a href="#" title="{{$data->name}}">{{$data->name}}</a>
                    </div>
                    <div class="name_detail">{{$data->name}}</div>
                    
                </div>
                <div class="col-xs-12 col-md-9">
                    <div class="content_detail">
                        {!! $data->content !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection