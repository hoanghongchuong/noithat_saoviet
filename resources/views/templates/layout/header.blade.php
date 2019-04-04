<?php
    $setting = Cache::get('setting');
    $sliders = DB::table('slider')->where('com','gioi-thieu')->where('status',1)->get();
    $categories = DB::table('product_categories')->where('com','san-pham')->where('parent_id',0)->orderBy('id','desc')->get();
?>
<header id="header" class="">
    <div class="container">
        <div class="row">
            <div class="top_header">
                <div class="col-md-3 col-xs-12 box-logo">
                    <a href="{{url('')}}" title=""><img src="{{asset('upload/hinhanh/'.$setting->photo)}}" class="logo-img" alt="Trang chủ"></a>
                </div>
                <div class="col-md-6 col-xs-12">
                    <p class="company_name">Nội thất sao việt</p>
                    <p class="company_namex">Thắp sáng ngôi nhà việt</p>
                    
                </div>
                <div class="col-md-3"></div>
            </div>
        </div>
        
    </div>
</header><!-- /header -->

<div class="menu visible-lg visible-md">         
    <div class="container">
        <ul class="navi">
            <li class="@if(@$com=='index')active @endif"><a href="{{url('')}}"><img src="{{asset('public/images/home.png')}}" alt="Trang chủ"></a></li>
            <li class="@if(@$com=='gioi-thieu')active @endif">
                <a href="{{url('gioi-thieu')}}">
                    Giới thiệu
                </a>
                
            </li>
            <li class="@if(@$com=='thiet-ke')active @endif">
                <a href="{{url('thiet-ke')}}">Thiết kế
                </a>
                <!-- <ul class="vk-menu__child">
                    <li><a href="">Công trình 1</a></li>
                    <li><a href="">Công trình 1</a></li>
                    <li><a href="">Công trình 1</a></li>                        
                </ul> -->
            </li>
            <li class="@if(@$com=='san-pham')active @endif">
                <a href="{{url('san-pham')}}">SX & bán lẻ
                </a>
                <ul class="vk-menu__child">
                    @foreach($categories as $cate)
                    <li><a href="{{url('san-pham/'.$cate->alias.'-'.'p'.$cate->id)}}">{{$cate->name}}</a></li>
                    @endforeach                      
                </ul>
            </li>
            <li class="@if(@$com=='thi-cong')active @endif">
                <a href="{{url('thi-cong')}}">Thi công</a>                    
            </li>
            
            <li class="@if(@$com=='phan-phoi')active @endif"><a href="{{url('phan-phoi-son-nuoc')}}" title="">Phân phối sơn nước</a></li>
            <li class="@if(@$com=='ho-so')active @endif"><a href="{{url('ho-so-nang-luc')}}" title="">Hồ sơ năng lực</a></li>
            <li class="@if(@$com=='bao-gia')active @endif"><a href="{{url('bao-gia')}}" title="">Báo giá</a></li>
            <li class="@if(@$com=='video')active @endif"><a href="{{url('video')}}" title="">Video</a></li>
            <li class="box-search">
                <div class="search-text" id="search_text">
                    <form action="{{route('search')}}" method="get">
                        <div class="form-group" style="margin-bottom: 0px;">
                            <input type="text" placeholder="Tìm kiếm sản phẩm" required="" class="input-search text" name="txtSearch">
                            <input type="submit" class="btn-search" id="search_btn" name="">
                        </div>
                    </form>
                </div>
            </li>
            
        </ul> 
    </div>           
</div>
<div class="visible-xs visible-sm">
    <div class="vk-header__search">
        <div class="container">
            <a href="#menuMobile" class="menu_Mobile" data-toggle="collapse" class="_btn d-lg-none menu_title"><i class="fa fa-bars"></i> Menu</a>
        </div>
    </div>
    <nav class="vk-header__menu-mobile">
        <ul class="vk-menu__mobile collapse" id="menuMobile">
            <li><a href="{{url('')}}">Trang chủ</a></li>
            <li>
                <a href="{{url('gioi-thieu')}}">Giới thiệu</a>
                
            </li>
            <li>
                <a href="{{url('thiet-ke')}}">Thiết kế</a>
                <a href="#menu1" data-toggle="collapse" class="_arrow-mobile"><i class="_icon fa fa-angle-down"></i></a>
                <!-- <ul class="collapse" id="menu1">
                    <li><a href="#">Công trình 1</a></li>
                    <li><a href="#">Công trình 1</a></li>
                    <li><a href="#">Công trình 1</a></li>
                    <li><a href="#">Công trình 1</a></li>
                    <li><a href="#">Công trình 1</a></li>
                    
                </ul> -->
            </li>
            <li>
                <a href="{{url('san-pham')}}">SX & Bán lẻ</a>
                <a href="#menu2" data-toggle="collapse" class="_arrow-mobile"><i class="_icon fa fa-angle-down"></i></a>
                <ul class="collapse" id="menu2">
                    
                    @foreach($categories as $cate)
                    <li><a href="{{url('san-pham/'.$cate->alias)}}">{{$cate->name}}</a></li>
                    @endforeach
                    
                </ul>
            </li>
            <li>
                <a href="{{url('thi-cong')}}">Thi công</a>
                <!-- <a href="#menu3" data-toggle="collapse" class="_arrow-mobile"><i class="_icon fa fa-angle-down"></i></a>
                <ul class="collapse" id="menu3">
                    <li><a href="#">Công trình 1</a></li>
                    <li><a href="#">Công trình 1</a></li>
                    <li><a href="#">Công trình 1</a></li>
                    <li><a href="#">Công trình 1</a></li>
                    <li><a href="#">Công trình 1</a></li>
                    
                </ul> -->
            </li>
            <li>
                <a href="{{url('phan-phoi-son-nuoc')}}">Phân phối sơn nước</a>
                <!-- <a href="#menu4" data-toggle="collapse" class="_arrow-mobile"><i class="_icon fa fa-angle-down"></i></a>
                <ul class="collapse" id="menu4">
                    <li><a href="#">Công trình 1</a></li>
                    <li><a href="#">Công trình 1</a></li>
                    <li><a href="#">Công trình 1</a></li>
                    <li><a href="#">Công trình 1</a></li>
                    <li><a href="#">Công trình 1</a></li>
                    
                </ul> -->
            </li>
            <li><a href="{{url('ho-so-nang-luc')}}">Hồ sơ năng lực</a></li>
            <li><a href="{{url('bao-gia')}}">Báo giá</a></li>
            <li><a href="{{url('video')}}">Video</a></li>
            
        </ul>
    </nav> 
</div>