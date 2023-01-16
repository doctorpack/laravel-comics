<main>

    <section id="comics">
        <div class="cover">
            <div class="small-container">
                <div class="img-container">
                    <span>Comic book</span>
                    <span>View gallery</span>

                    <img src="{{ $current_comic['thumb'] }}" alt="{{ $current_comic['title'] }}">
                </div>
            </div>
        </div>

        <div class="info">
            <div class="comics-info-top">
                <div class="small-container">
                    <div class="comics-info">
                        <h1>{{ $current_comic['title'] }}</h1>

                        <div class="comics-price">
                            <div class="price">
                                <span>U.S. Price: {{ $current_comic['price'] }}</span>
                                <span>Available</span>
                            </div>

                            <div class="availability dropdown">
                                <span>Check availability</span>
                            </div>
                        </div>

                        <p>{{ $current_comic['description'] }}</p>

                    </div>
                    <aside class="adv">
                        <img src="{{ asset('images/adv.jpg') }}" alt="advertise img">
                    </aside>
            </div>
            <div class="comics-info-btm">
                <div class="small-container">
                    <div class="comics-spec">
                        <ul>
                            <li class="submenu-item">
                                <h2>Talent</h2>
                                <ul class="submenu-list">
                                    <li>
                                        <span class="submenu-name">
                                            Art by:
                                        </span>
                                        <span>
                                            @foreach ($current_comic['artists'] as $artist)
                                                <a href="#">
                                                     {{ $artist }}{{ !$loop->last ? ',' : '' }}
                                                </a>
                                            @endforeach
                                        </span>
                                    </li>
                                    <li>
                                        <span class="submenu-name">
                                            Written by:
                                        </span>
                                        <span>
                                            @foreach ($current_comic['writers'] as $writer)
                                                <a href="#">
                                                    {{ $writer }}{{ !$loop->last ? ',' : '' }}
                                                </a>
                                            @endforeach
                                        </span>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>