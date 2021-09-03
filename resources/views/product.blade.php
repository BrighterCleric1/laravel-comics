@extends('templates.base')

@section('content')

    <div class="selected-comic">
        <div class="inner-selected">
            <div class="type">{{ $comics[$arrayIndex]['type'] }}</div>
            <div class="selected-img">
                <img src="{{ $comics[$arrayIndex]['thumb'] }}" alt="">
            </div>
            <div class="view-gallery">VIEW GALLERY</div>
        </div>
    </div>
    <div class="row-blue-2"></div>
    <div class="container">
        <div class="row row-product">
            <div class="offset-1 col-8">
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
                <div class="pub">
                    <div class="inner-pub">
                        <div class="d-flex justify-content-end">ADVERTISEMENT</div>
                        <div class="pub-img">
                            <img src="/images/pub.jpg" alt="">
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>

    </div>
    <section class="details">
        <div class="container">
            <div class="row">
                <div class="offset-1 col-7 talent-col">
                    <div class="talent">
                        <span>Talent</span>
                        <div class="drown row justify-content-between">
                            <div class="col-3">Art by:</div>
                            <div class="col">
                            @foreach($comics[$arrayIndex]['artists'] as $artist)
                                    @if(!$loop->last)
                                        <span class="artists">{{ $artist }},</span>
                                    @endif
                                   @if($loop->last)
                                        <span class="artists">{{ $artist }}</span>
                                   @endif
                                @endforeach
                            </div>
                        </div>
                        <div class="written row justify-content-between">
                            <div class="col-3">Written by:</div>
                            <div class="col">
                                @foreach($comics[$arrayIndex]['writers'] as $writer)
                                    @if(!$loop->last)
                                        <span class="writers">{{ $writer }},</span>
                                    @endif
                                   @if($loop->last)
                                        <span class="writers">{{ $writer }}</span>
                                   @endif
                                @endforeach
                            </div>
                        </div>

                    </div>

                </div>
                <div class="col-4 spec-col">
                    <div class="spec">
                        <span>Spec</span>
                        <div class=""></div>

                    </div>

                </div>
            </div>
        </div>
    </section>
    

@endsection