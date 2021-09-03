@extends('templates.base')

@section('content')

    <div class="row-blue-2"></div>
    <div class="container">
        <div class="row">
            <div class="offset-2 col-7">
                <div class="comic-title">{{ $comics[$arrayIndex]['title'] }}</div>
                <div class="buy-avb row">
                    <div class="col-9 d-flex justify-content-between">
                        <div>
                            <span>U.S. Price: </span>
                            <span>{{ $comics[$arrayIndex]['price'] }}</span>
                        </div>
                        <div>asd</div>
                    </div>
                    <div class="col-3">
                        <div>
                            <span>Check Availability</span>
                        </div>
                    </div>
                </div>
                <div>{{ $comics[$arrayIndex]['description'] }}</div>
            </div>
            <div class="col-3">
                <div class="advertisement">
                    <div class="inner-ad">
                        <div class="ad-img">
                            <img src="/images/adv.jpg" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

@endsection