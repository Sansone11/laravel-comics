@extends('app')


@section('metaTitle')
Home page - cd Comics
@endsection

@section('content')
<main>

    <div class="container">
      <button class="current-button">CURRENT SEREIES</button>
     {{-- <ProductCard v-for ="(slide,i) in slides" :key="i" :thumb="slide.thumb" :series="slide.series" />  --}}
     <button class="load-button">LOAD MORE</button>
    </div>

    <div class="icons-bar">
      <div class="icon-logo">
        {{-- <img src="../assets/img/buy-comics-digital-comics.png" alt="">
        <h4>DIGITAL COMICS</h4>
      </div>

      <div class="icon-logo">
        <img src="../assets/img/buy-comics-merchandise.png" alt="">
        <h4>DC MERCHANDISING</h4>
      </div>
      <div class="icon-logo">
        <img src="../assets/img/buy-comics-subscriptions.png" alt="">
        <h4>SUBSCRIPTION</h4>
      </div>
      <div class="icon-logo">
        <img src="../assets/img/buy-comics-shop-locator.png" alt="">
        <h4>COMICS SHOP LOCATION</h4>
      </div>
      <div class="icon-logo">
        <img src="../assets/img/buy-dc-power-visa.svg" alt="">
        <h4>DC POWER VISA</h4>
      </div> --}}
    </div>
  </main>
@endsection