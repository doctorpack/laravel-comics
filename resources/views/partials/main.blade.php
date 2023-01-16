<div>
    <section>
        <div class="upper-main-adjustments">
            <div class="upper-main-jumbotron">

            </div>
            <div class="container">
                <div class="comics-container">
                    <div class="label">
                        <span>CURRENT SERIES</span>
                    </div>
                    <div>
                        <div class="cards-container">
                            
                            @foreach($comics_array as $comic)
                                <div class="card">
                                    <a href="{{ route('comic', ['id' => $comic['id']]) }}">
                                    <div class="card-image">
                                        <img src="{{ $comic['thumb'] }}" alt="">
                                    </div>
                                    <div class="card-text">
                                        {{ $comic['series'] }}
                                    </div>
                                </div>
                            @endforeach
                        </div>
                      </div>
                </div>
            </div>
            <div class="container">
                <div class="button-adjustments">
                    <span>LOAD MORE</span>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div>
            <section>
                <div class="lower-main-adjustments">
                    <div class="container">
                        <div class="cards">
                            <div class="blue-card">
                                <div class="blue-card-image">
                                    <img src="/img/buy-comics-digital-comics.png" alt="">
                                </div>
                                <div class="card-text">
                                    <span>DIGITAL COMICS</span>
                                </div>
                            </div>
                            <div class="blue-card">
                                <div class="blue-card-image">
                                    <img src="/img/buy-comics-merchandise.png" alt="">
                                </div>
                                <div class="card-text">
                                    <span>DC MERCHANDISE</span>
                                </div>
                            </div>
                            <div class="blue-card">
                                <div class="blue-card-image">
                                    <img src="/img/buy-comics-subscriptions.png" alt="">
                                </div>
                                <div class="card-text">
                                    <span>SUBSCRIPTION</span>
                                </div>
                            </div>
                            <div class="blue-card">
                                <div class="blue-card-image">
                                    <img src="/img/buy-comics-shop-locator.png" alt="">
                                </div>
                                <div class="card-text">
                                    <span>COMIC SHOP LOCATOR</span>
                                </div>
                            </div>
                            <div class="blue-card">
                                <div class="blue-card-image">
                                    <img src="" alt="">
                                </div>
                                <div class="card-text">
                                    <span>DC POWER VISA</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
          </div>
    </section>
  </div>