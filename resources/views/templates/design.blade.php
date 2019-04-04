@extends('index')
@section('content')
<?php
    $setting = Cache::get('setting');
?>
<div class="content-home">
    <div class="container">
        <div class="row">
            <h2 class="title_home">Thiết kế</h2>
            <div class="dongke"><span></span></div>
            <div class="list-item-thicong">
                @foreach($data as $item)
                <div class="col-md-4 col-xs-12">
                    <div class="box-item">
                        <a href="{{url('thiet-ke/'.$item->alias.'.html')}}" title="">
                            <img src="{{asset('upload/news/'.$item->photo)}}" alt="">
                            
                        </a>
                        <div class="name_product">
                            <a href="{{url('thiet-ke/'.$item->alias.'.html')}}" title="">{{$item->name}}</a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
@endsection