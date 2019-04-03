@extends('index')
@section('content')
<?php
    $setting = Cache::get('setting');
?>
<div class="crumb">
    <div class="container">
        <div class="row">
            <ol class="breadcrumb">
                <li>
                    <a href="#">Trang chủ</a>
                </li>               
                <li class="active">Video</li>
            </ol>
        </div>
    </div>
</div>
<div class="content-home">
    <div class="container">
        <div class="row">
            <!-- <h2 class="title_home">Video</h2> -->
            <!-- <div class="dongke"><span></span></div> -->
            <div class="list-item-thicong">
                @foreach($data as $item)
                <div class="col-md-4 col-xs-12">
                    <div class="box-item">
                        <div class="box-frame-video">
                        	{!! $item->link !!}
                        </div>
                        <div class="name_product">
                            <a href="javascript:;" title="">{{$item->name}}</a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
@endsection