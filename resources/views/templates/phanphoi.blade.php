@extends('index')
@section('content')
<div class="content-home">
    <div class="container">
        <div class="row">
            <div class="list-item-phanphoi">
                @foreach($data as $item)
                <div class="col-md-3 col-xs-6">
                    <div class="box-item">
                        <a href="{{url('phan-phoi/'.$item->alias.'.html')}}" title="">
                            <img src="{{asset('upload/news/'.$item->photo)}}" alt="">
                            
                        </a>
                        <div class="name_product">
                            <a href="{{url('phan-phoi/'.$item->alias.'.html')}}" title="">{{$item->name}}</a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>

@endsection