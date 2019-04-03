<?php
    $setting = Cache::get('setting');    
?>


<footer>
    <div class="container max">
        <div class="row footer">
            <div class="col-md-8 col-large-8">
                <div class="row">
                    <div class="col-md-6  col-large-6">
                        <div class="logo">
                            <img src="{{asset('upload/hinhanh/'.$setting->photo_footer)}}">
                            <p>{!! $setting->fax !!}</p>
                        </div>
                    </div>
                    <div class="col-md-6 col-large-6 infox">
                        <h4>{{$setting->company}}</h4>
                        <p>Địa chỉ: {{$setting->address}}<br>
                           Phone: {{$setting->phone}}<br>
                           Email: {{$setting->email}}<br>
                           <!-- Website : behouse.vn -->
                        </p>
                    </div>
                    <div class="col-md-12 col-large-12 map">
                        {!! $setting->iframemap !!}
                    </div>
                </div>
                
            </div>
            
            <div class="col-md-4 col-large-4">
                <h4 style="color:#fff; font-size: 20px; text-transform: uppercase;">Fanpage</h4>
                <div class="page">
                    <div class="fb-page fb_iframe_widget" data-href="https://www.facebook.com/noithatbehouse/" data-tabs="timeline" data-width="350" data-height="300" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true" fb-xfbml-state="rendered" fb-iframe-plugin-query="adapt_container_width=true&amp;app_id=&amp;container_width=0&amp;height=300&amp;hide_cover=false&amp;href=https%3A%2F%2Fwww.facebook.com%2Fnoithatbehouse%2F&amp;locale=en_US&amp;sdk=joey&amp;show_facepile=true&amp;small_header=false&amp;tabs=timeline&amp;width=350"><span style="vertical-align: bottom; width: 350px; height: 300px;"><iframe name="f35a1d0bbd3cf4" width="350px" height="300px" frameborder="0" allowtransparency="true" allowfullscreen="true" scrolling="no" allow="encrypted-media" title="fb:page Facebook Social Plugin" src="https://www.facebook.com/v2.9/plugins/page.php?adapt_container_width=true&amp;app_id=&amp;channel=https%3A%2F%2Fstaticxx.facebook.com%2Fconnect%2Fxd_arbiter%2Fr%2Fd_vbiawPdxB.js%3Fversion%3D44%23cb%3Dfd8b90e53f1e3c%26domain%3Dbehouse.vn%26origin%3Dhttp%253A%252F%252Fbehouse.vn%252Ff1b5119ddf7b648%26relation%3Dparent.parent&amp;container_width=0&amp;height=300&amp;hide_cover=false&amp;href=https%3A%2F%2Fwww.facebook.com%2Fnoithatbehouse%2F&amp;locale=en_US&amp;sdk=joey&amp;show_facepile=true&amp;small_header=false&amp;tabs=timeline&amp;width=350" style="border: none; visibility: visible; width: 350px; height: 300px;" class=""></iframe></span></div>
                </div>
            </div>
        </div>
        <div class="row bot-footer">
            <div class="col-md-4">
                <p>ĐANG ONLINE: 120</p>
                <p>TỔNG SỐ LƯỢT TRUY CẬP: 120</p>

            </div>
            <div class="col-md-8">
                <p>Designed by hungthinhads.com</p>
            </div>
        </div>
    </div>
</footer>