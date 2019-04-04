<?php
    $setting = Cache::get('setting');
    $guest_online = DB::table('guest_online')->get();
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
                    <div class="fb-page" data-href="https://www.facebook.com/N%E1%BB%99i-Th%E1%BA%A5t-T%C3%A2n-C%E1%BB%95-%C4%90i%E1%BB%83n-X%C6%B0%E1%BB%9Fng-Sao-Vi%E1%BB%87t-205031606985297/" data-tabs="timeline" data-width="350" data-height="300" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/N%E1%BB%99i-Th%E1%BA%A5t-T%C3%A2n-C%E1%BB%95-%C4%90i%E1%BB%83n-X%C6%B0%E1%BB%9Fng-Sao-Vi%E1%BB%87t-205031606985297/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/N%E1%BB%99i-Th%E1%BA%A5t-T%C3%A2n-C%E1%BB%95-%C4%90i%E1%BB%83n-X%C6%B0%E1%BB%9Fng-Sao-Vi%E1%BB%87t-205031606985297/">Nội Thất Tân Cổ Điển - Xưởng Sao Việt</a></blockquote></div>
                </div>
            </div>
        </div>
        <div class="row bot-footer">
            <div class="col-md-4">
                <p>ĐANG ONLINE: {{count($guest_online)}}</p>
                <p>TỔNG SỐ LƯỢT TRUY CẬP: {{$setting->number_view}}</p>

            </div>
            <div class="col-md-8">
                <p>Designed by hungthinhads.com</p>
            </div>
        </div>
    </div>
</footer>