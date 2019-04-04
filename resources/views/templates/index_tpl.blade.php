@extends('index')
@section('content')
<?php
$setting = Cache::get('setting');
$sliders = DB::table('slider')->where('status',1)->where('com','gioi-thieu')->orderBy('id','desc')->get();
?>
<div class="slider">  
    <div class="">
        <div class="">
            <div id="carousel-id" class="carousel slide" data-ride="carousel">
               
                <div class="carousel-inner">
                    @foreach($sliders as $k=>$slider)
                    <div class="item @if($k==0) active @endif">                        
                       <img src="{{asset('upload/hinhanh/'.$slider->photo)}}">
                    </div>
                    @endforeach
                </div>
                <a class="left carousel-control" href="#carousel-id" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
                <a class="right carousel-control" href="#carousel-id" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
            </div>
        </div>
    </div>
</div>
<div class="content-home">
    <div class="container">
        <div class="row">
            <h2 class="title_home">Sản xuất và bán lẻ</h2>
            <div class="dongke"><span></span></div>
            @foreach($categories_home as $k=>$cate)
            <div class="list-cate-product mt-30">
                <div class="pull-left"><a href="{{url('san-pham/'.$cate->alias.'-'.'p'.$cate->id)}}" class="cate-name">{{$cate->name}}</a></div>
                <div class="box-cate">
                    <div class="top-box">
                        <ul class="cate-child nav nav-tabs">
                            <li class="active"><a data-toggle="tab" aria-expanded="false" href="#home{{$k}}">Tất cả</a></li>                            
                            @foreach($cate->productCate() as $key=>$cate_child)
                            <li><a data-toggle="tab" href="#menux{{$key}}{{$k}}" aria-expanded="true">{{$cate_child->name}}</a></li>
                            @endforeach
                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane fade in active" id="home{{$k}}">
                                <div class="list-product-item">
                                    <div class="">
                                        @foreach($cate->products as $product)
                                        <div class="item col-md-3">
                                            <a href="{{url('san-pham/'.$product->alias.'.html')}}" title=""><img src="{{asset('upload/product/'.$product->photo)}}" alt="">
                                            </a>
                                            
                                            <div class="footer-cate">
                                                <p class="name_product"><a href="{{url('san-pham/'.$product->alias.'.html')}}" title="">{{$product->name}}</a></p>
                                                <div class="price tac">
                                                    <span class="price_news">Giá: {{number_format($product->price)}} đ</span>
                                                </div>
                                            </div>
                                        </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                            @foreach($cate->productCate() as $key=>$cate_child)
                            <div class="tab-pane fade" id="menux{{$key}}{{$k}}">
                                <div class="list-product-item">
                                    <div class="">
                                        @foreach($cate_child->products() as $item)
                                        <div class="item col-md-3">
                                            <a href="{{url('san-pham/'.$item->alias.'.html')}}" title=""><img src="{{asset('upload/product/'.$item->photo)}}" alt="">
                                            </a>
                                            
                                            <div class="footer-cate">
                                                <p class="name_product"><a href="{{url('san-pham/'.$item->alias.'.html')}}" title="">{{$item->name}}</a></p>
                                                <div class="price tac">
                                                    <span class="price_news">Giá: {{number_format($item->price)}} đ</span>
                                                </div>
                                            </div>
                                        </div>
                                        @endforeach
                                        
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                        <div class="pull-right"><a href="{{url('san-pham/'.$cate->alias.'-'.'p'.$cate->id)}}" class="read-more">Xem thêm <i class="fa fa-angle-right"></i></a></div>
                    </div>                       
                                            
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
<div class="content-home">
    <div class="container">
        <div class="row">
            <h2 class="title_home">Danh mục thi công</h2>
            <div class="dongke"><span></span></div>
            <div class="list-item-thicong">
                @foreach($thicong as $t)
                <div class="col-md-4 col-xs-12">
                    <div class="box-item">
                        <a href="{{url('thi-cong/'.$t->alias.'.html')}}" title="{{$t->name}}">
                            <img src="{{asset('upload/news/'.$t->photo)}}" alt="{{$t->name}}">
                            
                        </a>
                        <div class="name_product">
                            <a href="{{url('thi-cong/'.$t->alias.'.html')}}" title="{{$t->name}}">{{$t->name}}</a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
<div class="content-home">
    <div class="container">
        <div class="row">
            <h2 class="title_home">Phân phối sơn nước</h2>
            <div class="dongke"><span></span></div>
            <div class="list-item-son" style="margin-top: 20px;">
                @foreach($phanphoi as $p)
                <div class="col-md-4 col-xs-12">
                    <div class="box-item">
                        <a href="{{url('phan-phoi/'.$p->alias.'.html')}}" title="{{$p->name}}">
                            <img src="{{asset('upload/news/'.$p->photo)}}" alt="{{$p->name}}">
                            
                        </a>
                        <div class="name_product">
                            <a href="{{url('phan-phoi/'.$p->alias.'.html')}}" title="{{$p->name}}">{{$p->name}}</a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
<div class="content-home">
    <div class="container">
        <div class="row">
            <h2 class="title_home">Video</h2>
            <div class="dongke"><span></span></div>
            <div class="list-cate-product mt-30">
                
                <div class="box-cate">
                    
                    <div class="list-product-item">
                        <div class="owl-carousel owl-theme owl-carousel-product owl-carousel-product2">
                            @foreach($videos as $video)
                            <div class="item">
                                <div class="box-frame-video">
                                    {!! $video->link !!}
                                </div>
                                <div class="name_product">
                                    <a href="javascript:;" title="">{{$video->name}}</a>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>                        
                </div>
            </div>
            
        </div>
    </div>
</div>
<div class="content-home">
    <div class="container">
        <div class="row">
            <h2 class="title_home">Đối tác của chúng tôi</h2>
            <div class="dongke"><span></span></div>
            <div class="list-cate-product mt-30">
                
                <div class="box-cate">
                    
                    <div class="list-product-item partner">
                        <div class="owl-carousel owl-theme owl-carousel-product owl-carousel-product2">
                            @foreach($partners as $partner)
                            <div class="item">
                                <a href="#" title=""><img src="{{asset('upload/banner/'.$partner->photo)}}" alt="">
                                </a>                                   
                                
                            </div>
                            @endforeach
                        </div>
                    </div>                        
                </div>
            </div>
            
        </div>
    </div>
</div>
@endsection
