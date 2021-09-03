@extends('templates.base')


@section('content')

    <div class="main-bg">
        <div class="container">
          <div class="current">CURRENT SERIES</div>
          <div class="row row-comics">
            @foreach($comics as $comic)
              <div class="col-2">
                <div class="inner-comic">
                  <div class="comic-img">
                    <img src="{{ $comic['thumb'] }}" alt="">
                  </div>
                  <div class="details">
                    <span>{{ $comic['title'] }}</span>
                  </div>
                </div>
              </div>
            @endforeach
          </div>
          <div class="row justify-content-center">
            <div class="col-2">
              <button class="load-more">LOAD MORE</button>
            </div>
          </div>
        </div>
      </div>






    <div class="buttons-pref">
    <div class="container">
      <ul>
        <li>
          <div class="button-img">
            <img src="/images/buy-comics-digital-comics.png" alt="" />
          </div>
          <span class="button-link"><a href="#">Digital Comics</a></span>
        </li>
        <li>
          <div class="button-img">
            <img src="/images/buy-comics-merchandise.png" alt="" />
          </div>
          <span class="button-link"><a href="#">Merchandise</a></span>
        </li>
        <li>
          <div class="button-img">
            <img src="/images/buy-comics-shop-locator.png" alt="" />
          </div>
          <span class="button-link"><a href="#">Shop Locator</a></span>
        </li>
        <li>
          <div class="button-img">
            <img src="/images/buy-comics-subscriptions.png" alt="" />
          </div>
          <span class="button-link"><a href="#">Subscriptions</a></span>
        </li>
        <li>
          <div class="button-img">
            <img src="/images/buy-dc-power-visa.svg" alt="" />
          </div>
          <span class="button-link"><a href="#">DC Power Visa</a></span>
        </li>
      </ul>
    </div>
  </div>

@endsection