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
            <div class="list-cate-product mt-30">
                <div class="pull-left"><a href="" class="cate-name">Giường</a></div>
                <div class="box-cate">
                    <div class="top-box">
                        <ul class="cate-child nav nav-tabs">
                            <li class="active"><a data-toggle="tab" aria-expanded="false" href="#home1">Home</a></li>
                            <li><a data-toggle="tab" href="#menux1" aria-expanded="true">Menu 1</a></li>
                            <li><a data-toggle="tab" href="#menux2" aria-expanded="true">Menu 2</a></li>
                            <li><a data-toggle="tab" href="#menux3" aria-expanded="true">Menu 3</a></li>
                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane fade in active" id="home1">
                                <div class="list-product-item">
                                    <div class="">
                                        <div class="item col-md-3">
                                            <a href="" title=""><img src="images/p1.jpg" alt="">
                                            </a>
                                            
                                            <div class="footer-cate">
                                                <p class="name_product"><a href="" title="">Tin tức 1</a></p>
                                                <div class="price tac">
                                                    <span class="price_news">Giá: 150000</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item col-md-3">
                                            <a href="" title=""><img src="images/p1.jpg" alt="">
                                            </a>
                                            <div class="footer-cate">
                                                <p class="name_product"><a href="" title="">Tin tức 1</a></p>
                                                <div class="price tac">
                                                    <span class="price_news">Giá: 150000</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item col-md-3">
                                            <a href="" title=""><img src="images/p1.jpg" alt="">
                                            </a>
                                            <div class="footer-cate">
                                                <p class="name_product"><a href="" title="">Tin tức 1</a></p>
                                                <div class="price tac">
                                                    <span class="price_news">Giá: 150000</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item col-md-3">
                                            <a href="" title=""><img src="images/p1.jpg" alt="">
                                            </a>
                                            <div class="footer-cate">
                                                <p class="name_product"><a href="" title="">Tin tức 1</a></p>
                                                <div class="price tac">
                                                    <span class="price_news">Giá: 150000</span>
                                                </div>
                                            </div>
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="menux1">
                                <div class="list-product-item">
                                    <div class="">
                                        <div class="item col-md-3">
                                            <a href="" title=""><img src="images/p1.jpg" alt="">
                                            </a>
                                            
                                            <div class="footer-cate">
                                                <p class="name_product"><a href="" title="">Tin tức 1</a></p>
                                                <div class="price tac">
                                                    <span class="price_news">Giá: 150000</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item col-md-3">
                                            <a href="" title=""><img src="images/p3.jpg" alt="">
                                            </a>
                                            <div class="footer-cate">
                                                <p class="name_product"><a href="" title="">Tin tức 2</a></p>
                                                <div class="price tac">
                                                    <span class="price_news">Giá: 150000</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item col-md-3">
                                            <a href="" title=""><img src="images/p2.jpg" alt="">
                                            </a>
                                            <div class="footer-cate">
                                                <p class="name_product"><a href="" title="">Tin tức 3</a></p>
                                                <div class="price tac">
                                                    <span class="price_news">Giá: 150000</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item col-md-3">
                                            <a href="" title=""><img src="images/p1.jpg" alt="">
                                            </a>
                                            <div class="footer-cate">
                                                <p class="name_product"><a href="" title="">Tin tức 4</a></p>
                                                <div class="price tac">
                                                    <span class="price_news">Giá: 150000</span>
                                                </div>
                                            </div>
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="menux2">
                                noi dung tab
                            </div>
                            <div class="tab-pane fade" id="menux3">
                                nio dung tab3
                            </div>
                        </div>
                        <div class="pull-right"><a href="" class="read-more">Xem thêm <i class="fa fa-angle-right"></i></a></div>
                    </div>                       
                                            
                </div>
            </div>
            <div class="list-cate-product mt-30">
                <div class="pull-left"><a href="" class="cate-name">Tủ</a></div>
                <div class="box-cate">
                    <div class="top-box">
                        <ul class="cate-child nav nav-tabs">
                            <li class="active"><a data-toggle="tab" aria-expanded="false" href="#home2">Home</a></li>
                            <li><a data-toggle="tab" href="#menuxy1" aria-expanded="true">Menu 12</a></li>
                            <li><a data-toggle="tab" href="#menuxy2" aria-expanded="true">Menu 23</a></li>
                            <li><a data-toggle="tab" href="#menuxy3" aria-expanded="true">Menu 34</a></li>
                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane fade in active" id="home2">
                                <div class="list-product-item">
                                    <div class="">
                                        <div class="item col-md-3">
                                            <a href="" title=""><img src="images/p1.jpg" alt="">
                                            </a>
                                            
                                            <div class="footer-cate">
                                                <p class="name_product"><a href="" title="">Tin tức 1</a></p>
                                                <div class="price tac">
                                                    <span class="price_news">Giá: 150000</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item col-md-3">
                                            <a href="" title=""><img src="images/p1.jpg" alt="">
                                            </a>
                                            <div class="footer-cate">
                                                <p class="name_product"><a href="" title="">Tin tức 1</a></p>
                                                <div class="price tac">
                                                    <span class="price_news">Giá: 150000</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item col-md-3">
                                            <a href="" title=""><img src="images/p1.jpg" alt="">
                                            </a>
                                            <div class="footer-cate">
                                                <p class="name_product"><a href="" title="">Tin tức 1</a></p>
                                                <div class="price tac">
                                                    <span class="price_news">Giá: 150000</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item col-md-3">
                                            <a href="" title=""><img src="images/p1.jpg" alt="">
                                            </a>
                                            <div class="footer-cate">
                                                <p class="name_product"><a href="" title="">Tin tức 1</a></p>
                                                <div class="price tac">
                                                    <span class="price_news">Giá: 150000</span>
                                                </div>
                                            </div>
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="menuxy1">
                                <div class="list-product-item">
                                    <div class="">
                                        <div class="item col-md-3">
                                            <a href="" title=""><img src="images/p1.jpg" alt="">
                                            </a>
                                            
                                            <div class="footer-cate">
                                                <p class="name_product"><a href="" title="">Tin tức 1</a></p>
                                                <div class="price tac">
                                                    <span class="price_news">Giá: 150000</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item col-md-3">
                                            <a href="" title=""><img src="images/p3.jpg" alt="">
                                            </a>
                                            <div class="footer-cate">
                                                <p class="name_product"><a href="" title="">Tin tức 2</a></p>
                                                <div class="price tac">
                                                    <span class="price_news">Giá: 150000</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item col-md-3">
                                            <a href="" title=""><img src="images/p2.jpg" alt="">
                                            </a>
                                            <div class="footer-cate">
                                                <p class="name_product"><a href="" title="">Tin tức 3</a></p>
                                                <div class="price tac">
                                                    <span class="price_news">Giá: 150000</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item col-md-3">
                                            <a href="" title=""><img src="images/p1.jpg" alt="">
                                            </a>
                                            <div class="footer-cate">
                                                <p class="name_product"><a href="" title="">Tin tức 4</a></p>
                                                <div class="price tac">
                                                    <span class="price_news">Giá: 150000</span>
                                                </div>
                                            </div>
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="menuxy2">
                                noi dung tab
                            </div>
                            <div class="tab-pane fade" id="menuxy3">
                                nio dung tab3
                            </div>
                        </div>
                        <div class="pull-right"><a href="" class="read-more">Xem thêm <i class="fa fa-angle-right"></i></a></div>
                    </div>                       
                                            
                </div>
            </div>
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
                            <div class="item">
                                <a href="" title=""><img src="images/p1.jpg" alt="">
                                </a>
                                
                                <div class="footer-cate">
                                    <p class="name_product"><a href="" title="">Tin tức 1</a></p>
                                    <div class="price tac">
                                        <span class="price_news">Giá: 150000</span>
                                    </div>
                                </div>
                            </div>
                            
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
                            <div class="item">
                                <a href="" title=""><img src="images/p1.png" alt="">
                                </a>                                   
                                
                            </div>
                            <div class="item">
                                <a href="" title=""><img src="images/p2.png" alt="">
                                </a>                                   
                                
                            </div>
                            <div class="item">
                                <a href="" title=""><img src="images/p3.png" alt="">
                                </a>                                   
                                
                            </div>
                            <div class="item">
                                <a href="" title=""><img src="images/p4.png" alt="">
                                </a>                                   
                                
                            </div>
                        </div>
                    </div>                        
                </div>
            </div>
            
        </div>
    </div>
</div>
@endsection
