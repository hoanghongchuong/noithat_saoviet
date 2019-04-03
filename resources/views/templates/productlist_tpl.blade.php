@extends('index')
@section('content')
<div class="crumb">
    <div class="container">
        <div class="row">
            <ol class="breadcrumb breadcrumbx">
                <li>
                    <a href="{{url('')}}">Trang chủ</a>
                </li>
                <li><a href="{{url('san-pham')}}">Sản phẩm</a></li>
                <li class="active">{{$product_cate->name}}</li>
            </ol>
        </div>
    </div>
</div>
<div class="content-cate-product">
    <div class="container">
        <!-- <h2 class="title_home">Sản phẩm</h2>
        <div class="dongke"><span></span></div> -->
        <div class="box-product-home">
            <div class="col-md-3 left pdr-0 pdl-0">
                <div class="title-cate"><h4>Danh mục sản phẩm</h4></div>
                <div class="list-category">
                    @foreach($cate_pro as $category)
                        <p class=""><a href="{{url('san-pham/'.$category->alias)}}" title="{{$category->name}}">{{$category->name}}</a></p>
                    @endforeach
                </div>
            </div>
            <div class="col-md-9 pdl-0 right">
                <div class="box-cate1">
                    
                    <div class="list-item-product">
                        @foreach($products as $item)
                        <div class="col-md-4 mb-30">
                            <a href="{{url('san-pham/'.$item->alias.'.html')}}" title="{{$item->name}}">
                                <img src="{{asset('upload/product/'.$item->photo)}}" alt="">
                                <p class="name_product"><a href="{{url('san-pham/'.$item->alias.'.html')}}" title="">{{$item->name}}</a></p>
                            </a>
                            <div class="price tac">
                                
                                <span class="price_news">{{number_format($item->price)}} vnđ</span>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
                <div class="pagination"></div>
            </div>
        </div>
    </div>
</div>
@endsection
