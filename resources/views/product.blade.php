@extends('templates.base')

@section('content')

    <div class="row-blue-2"></div>
    <div class="container">
        <div class="row row-product">
            <div class="offset-2 col-7">
                <div class="comic-title">{{ $comics[$arrayIndex]['title'] }}</div>
                <div class="buy-avb row">
                    <div class="col-9 align-items-center d-flex justify-content-between green-button">
                        <div>
                            <span>U.S. Price: </span>
                            <span><b>{{ $comics[$arrayIndex]['price'] }}</b></span>
                        </div>
                        <div>AVAILABLE</div>
                    </div>
                    <div class="col-3 d-flex green-button border-l align-items-center">
                        <div>
                            <span><b>Check Availability</b></span>
                        </div>
                    </div>
                </div>
                <div class="description">{{ $comics[$arrayIndex]['description'] }}</div>
            </div>
            <div class="col-3">
                <div >
                    <div >
                        <div >
                            <img src="/images/footer.twitter.png" alt="">
                        </div>
                    </div>
                    <span>cacsacaca</span>
                </div>
            </div>
        </div>

    </div>
    <img src="/images/footer-facebook.png" alt="">
    <img src="/images/footer.facebook.png" alt="">

@endsection