<x-layouts.app>
    <x-hero />
    <section class="home__categories">
        <div>
            <a href="#">
                <img src="{{ asset('img/men.png') }}" alt="">
                <div>
                    <p>{{ __('Men') }}</p>
                    <span><i class="icon icon-angle-bracket-right"></i></span>
                </div>
            </a>
            <a href="#">
                <img src="{{ asset('img/women.png') }}" alt="">
                <div>
                    <p>{{ __('Women') }}</p>
                    <span><i class="icon icon-angle-bracket-right"></i></span>
                </div>
            </a>
        </div>
    </section>
    <section class="home__featured">
        <h2>{{ __('Featured Products') }}</h2>
        <ul class="home__products-tabs">
            <li class="active">{{ __('Women') }}</li>
            <li>{{ __('Men') }}</li>
        </ul>
        <div class="featured__products">
            <div class="featured__products-wrapper">
                <div class="product-card">
                    <button type="submit"><i class="icon icon-heart"></i></button>
                    <a href="#">
                        <img src="{{ asset('img/product1.png') }}" alt="">
                    </a>
                    <a href="#">Men's Essential Teen</a>
                    <p class="product-price">$99.99</p>
                    <div class="product-colors">
                        <span style="background-color: #000;"></span>
                        <span style="background-color: #fff;"></span>
                        <span style="background-color: #f00;"></span>
                        <span style="background-color: #00f;"></span>
                    </div>
                    <div class="product-sizes">
                        <span>XXL</span>
                        <span>XL</span>
                        <span>L</span>
                        <span>M</span>
                        <span>S</span>
                    </div>
                </div>
                <div class="product-card">
                    <button type="submit"><i class="icon icon-heart"></i></button>
                    <a href="#">
                        <img src="{{ asset('img/product2.png') }}" alt="">
                    </a>
                    <a href="#">Men's Essential Teen</a>
                    <p class="product-price">$99.99</p>
                    <div class="product-colors">
                        <span style="background-color: #000;"></span>
                        <span style="background-color: #fff;"></span>
                        <span style="background-color: #f00;"></span>
                        <span style="background-color: #00f;"></span>
                    </div>
                    <div class="product-sizes">
                        <span>XXL</span>
                        <span>XL</span>
                        <span>L</span>
                        <span>M</span>
                        <span>S</span>
                    </div>
                </div>
                <div class="product-card">
                    <a href="#">
                        <button type="submit"><i class="icon icon-heart"></i></button>
                        <img src="{{ asset('img/product3.png') }}" alt="">
                    </a>
                    <a href="#">Men's Essential Teen</a>
                    <p class="product-price">$99.99</p>
                    <div class="product-colors">
                        <span style="background-color: #000;"></span>
                        <span style="background-color: #fff;"></span>
                        <span style="background-color: #f00;"></span>
                        <span style="background-color: #00f;"></span>
                    </div>
                    <div class="product-sizes">
                        <span>XXL</span>
                        <span>XL</span>
                        <span>L</span>
                        <span>M</span>
                        <span>S</span>
                    </div>
                </div>
                <div class="product-card">
                    <button type="submit"><i class="icon icon-heart"></i></button>
                    <a href="#">
                        <img src="{{ asset('img/product4.png') }}" alt="">
                    </a>
                    <a href="#">Men's Essential Teen</a>
                    <p class="product-price">$99.99</p>
                    <div class="product-colors">
                        <span style="background-color: #000;"></span>
                        <span style="background-color: #fff;"></span>
                        <span style="background-color: #f00;"></span>
                        <span style="background-color: #00f;"></span>
                    </div>
                    <div class="product-sizes">
                        <span>XXL</span>
                        <span>XL</span>
                        <span>L</span>
                        <span>M</span>
                        <span>S</span>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="home__latest-products">
        <h2>{{ __('Latest Products') }}</h2>
        <ul class="home__products-tabs">
            <li class="active">{{ __('Women') }}</li>
            <li>{{ __('Men') }}</li>
        </ul>
        <div class="products-grid">
            <div class="product-card">
                <button type="submit"><i class="icon icon-heart"></i></button>
                <a href="#">
                    <img src="{{ asset('img/product4.png') }}" alt="">
                </a>
                <a href="#">Men's Essential Teen</a>
                <p class="product-price">$99.99</p>
                <div class="product-colors">
                    <span style="background-color: #000;"></span>
                    <span style="background-color: #fff;"></span>
                    <span style="background-color: #f00;"></span>
                    <span style="background-color: #00f;"></span>
                </div>
                <div class="product-sizes">
                    <span>XXL</span>
                    <span>XL</span>
                    <span>L</span>
                    <span>M</span>
                    <span>S</span>
                </div>
            </div>
            <div class="product-card">
                <button type="submit"><i class="icon icon-heart"></i></button>
                <a href="#">
                    <img src="{{ asset('img/product4.png') }}" alt="">
                </a>
                <a href="#">Men's Essential Teen</a>
                <p class="product-price">$99.99</p>
                <div class="product-colors">
                    <span style="background-color: #000;"></span>
                    <span style="background-color: #fff;"></span>
                    <span style="background-color: #f00;"></span>
                    <span style="background-color: #00f;"></span>
                </div>
                <div class="product-sizes">
                    <span>XXL</span>
                    <span>XL</span>
                    <span>L</span>
                    <span>M</span>
                    <span>S</span>
                </div>
            </div>
            <div class="product-card">
                <button type="submit"><i class="icon icon-heart"></i></button>
                <a href="#">
                    <img src="{{ asset('img/product4.png') }}" alt="">
                </a>
                <a href="#">Men's Essential Teen</a>
                <p class="product-price">$99.99</p>
                <div class="product-colors">
                    <span style="background-color: #000;"></span>
                    <span style="background-color: #fff;"></span>
                    <span style="background-color: #f00;"></span>
                    <span style="background-color: #00f;"></span>
                </div>
                <div class="product-sizes">
                    <span>XXL</span>
                    <span>XL</span>
                    <span>L</span>
                    <span>M</span>
                    <span>S</span>
                </div>
            </div>
            <div class="product-card">
                <button type="submit"><i class="icon icon-heart"></i></button>
                <a href="#">
                    <img src="{{ asset('img/product4.png') }}" alt="">
                </a>
                <a href="#">Men's Essential Teen</a>
                <p class="product-price">$99.99</p>
                <div class="product-colors">
                    <span style="background-color: #000;"></span>
                    <span style="background-color: #fff;"></span>
                    <span style="background-color: #f00;"></span>
                    <span style="background-color: #00f;"></span>
                </div>
                <div class="product-sizes">
                    <span>XXL</span>
                    <span>XL</span>
                    <span>L</span>
                    <span>M</span>
                    <span>S</span>
                </div>
            </div>
            <div class="product-card">
                <button type="submit"><i class="icon icon-heart"></i></button>
                <a href="#">
                    <img src="{{ asset('img/product4.png') }}" alt="">
                </a>
                <a href="#">Men's Essential Teen</a>
                <p class="product-price">$99.99</p>
                <div class="product-colors">
                    <span style="background-color: #000;"></span>
                    <span style="background-color: #fff;"></span>
                    <span style="background-color: #f00;"></span>
                    <span style="background-color: #00f;"></span>
                </div>
                <div class="product-sizes">
                    <span>XXL</span>
                    <span>XL</span>
                    <span>L</span>
                    <span>M</span>
                    <span>S</span>
                </div>
            </div>
            <div class="product-card">
                <button type="submit"><i class="icon icon-heart"></i></button>
                <a href="#">
                    <img src="{{ asset('img/product4.png') }}" alt="">
                </a>
                <a href="#">Men's Essential Teen</a>
                <p class="product-price">$99.99</p>
                <div class="product-colors">
                    <span style="background-color: #000;"></span>
                    <span style="background-color: #fff;"></span>
                    <span style="background-color: #f00;"></span>
                    <span style="background-color: #00f;"></span>
                </div>
                <div class="product-sizes">
                    <span>XXL</span>
                    <span>XL</span>
                    <span>L</span>
                    <span>M</span>
                    <span>S</span>
                </div>
            </div>
            <div class="product-card">
                <button type="submit"><i class="icon icon-heart"></i></button>
                <a href="#">
                    <img src="{{ asset('img/product4.png') }}" alt="">
                </a>
                <a href="#">Men's Essential Teen</a>
                <p class="product-price">$99.99</p>
                <div class="product-colors">
                    <span style="background-color: #000;"></span>
                    <span style="background-color: #fff;"></span>
                    <span style="background-color: #f00;"></span>
                    <span style="background-color: #00f;"></span>
                </div>
                <div class="product-sizes">
                    <span>XXL</span>
                    <span>XL</span>
                    <span>L</span>
                    <span>M</span>
                    <span>S</span>
                </div>
            </div>
            <div class="product-card">
                <button type="submit"><i class="icon icon-heart"></i></button>
                <a href="#">
                    <img src="{{ asset('img/product4.png') }}" alt="">
                </a>
                <a href="#">Men's Essential Teen</a>
                <p class="product-price">$99.99</p>
                <div class="product-colors">
                    <span style="background-color: #000;"></span>
                    <span style="background-color: #fff;"></span>
                    <span style="background-color: #f00;"></span>
                    <span style="background-color: #00f;"></span>
                </div>
                <div class="product-sizes">
                    <span>XXL</span>
                    <span>XL</span>
                    <span>L</span>
                    <span>M</span>
                    <span>S</span>
                </div>
            </div>
            <div class="product-card">
                <button type="submit"><i class="icon icon-heart"></i></button>
                <a href="#">
                    <img src="{{ asset('img/product4.png') }}" alt="">
                </a>
                <a href="#">Men's Essential Teen</a>
                <p class="product-price">$99.99</p>
                <div class="product-colors">
                    <span style="background-color: #000;"></span>
                    <span style="background-color: #fff;"></span>
                    <span style="background-color: #f00;"></span>
                    <span style="background-color: #00f;"></span>
                </div>
                <div class="product-sizes">
                    <span>XXL</span>
                    <span>XL</span>
                    <span>L</span>
                    <span>M</span>
                    <span>S</span>
                </div>
            </div>
            <div class="product-card">
                <button type="submit"><i class="icon icon-heart"></i></button>
                <a href="#">
                    <img src="{{ asset('img/product4.png') }}" alt="">
                </a>
                <a href="#">Men's Essential Teen</a>
                <p class="product-price">$99.99</p>
                <div class="product-colors">
                    <span style="background-color: #000;"></span>
                    <span style="background-color: #fff;"></span>
                    <span style="background-color: #f00;"></span>
                    <span style="background-color: #00f;"></span>
                </div>
                <div class="product-sizes">
                    <span>XXL</span>
                    <span>XL</span>
                    <span>L</span>
                    <span>M</span>
                    <span>S</span>
                </div>
            </div>
        </div>
    </section>
    <section class="home__blog">
        <h2>{{ __('Our blog') }}</h2>
        <div class="blog-grid">
            <div class="blog-card">
                <a href="#">
                    <img src="{{ asset('img/blog1.png') }}" alt="">
                </a>
                <div>
                    <span>20 Jun 2025</span>
                    <h3>
                        <a href="#">Life tips from top ten adventure</a>
                    </h3>
                    <p>Slate helps you see how many more days you need to work to reach.</p>
                    <ul>
                        <li>
                            <a href="#">Google</a>
                        </li>
                        <li>
                            <a href="#">Travel</a>
                        </li>
                        <li>
                            <a href="#">Adventure</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="blog-card">
                <a href="#">
                    <img src="{{ asset('img/blog2.png') }}" alt="">
                </a>
                <div>
                    <span>20 Jun 2025</span>
                    <h3>
                        <a href="#">Life tips from top ten adventure</a>
                    </h3>
                    <p>Slate helps you see how many more days you need to work to reach.</p>
                    <ul>
                        <li>
                            <a href="#">Google</a>
                        </li>
                        <li>
                            <a href="#">Travel</a>
                        </li>
                        <li>
                            <a href="#">Adventure</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="blog-card">
                <a href="#">
                    <img src="{{ asset('img/blog3.png') }}" alt="">
                </a>
                <div>
                    <span>20 Jun 2025</span>
                    <h3>
                        <a href="#">Life tips from top ten adventure</a>
                    </h3>
                    <p>Slate helps you see how many more days you need to work to reach.</p>
                    <ul>
                        <li>
                            <a href="#">Google</a>
                        </li>
                        <li>
                            <a href="#">Travel</a>
                        </li>
                        <li>
                            <a href="#">Adventure</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="blog-card">
                <a href="#">
                    <img src="{{ asset('img/blog4.png') }}" alt="">
                </a>
                <div>
                    <span>20 Jun 2025</span>
                    <h3>
                        <a href="#">Life tips from top ten adventure</a>
                    </h3>
                    <p>Slate helps you see how many more days you need to work to reach.</p>
                    <ul>
                        <li>
                            <a href="#">Google</a>
                        </li>
                        <li>
                            <a href="#">Travel</a>
                        </li>
                        <li>
                            <a href="#">Adventure</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <section class="home__instagram">
        <h2>{{ __('Follow us on Instagram') }}</h2>
        <div class="home__instagram-slider">
            <div class="home__instagram-wrapper">
                <div class="instagram-card">
                    <a href="#">
                        <img src="{{ asset('img/ig1.png') }}" alt="">
                    </a>
                </div>
                <div class="instagram-card">
                    <a href="#">
                        <img src="{{ asset('img/ig2.png') }}" alt="">
                    </a>
                </div>
                <div class="instagram-card">
                    <a href="#">
                        <img src="{{ asset('img/ig3.png') }}" alt="">
                    </a>
                </div>
                <div class="instagram-card">
                    <a href="#">
                        <img src="{{ asset('img/ig4.png') }}" alt="">
                    </a>
                </div>
                <div class="instagram-card">
                    <a href="#">
                        <img src="{{ asset('img/ig1.png') }}" alt="">
                    </a>
                </div>
                <div class="instagram-card">
                    <a href="#">
                        <img src="{{ asset('img/ig2.png') }}" alt="">
                    </a>
                </div>
                <div class="instagram-card">
                    <a href="#">
                        <img src="{{ asset('img/ig3.png') }}" alt="">
                    </a>
                </div>
                <div class="instagram-card">
                    <a href="#">
                        <img src="{{ asset('img/ig4.png') }}" alt="">
                    </a>
                </div>
                <div class="instagram-card">
                    <a href="#">
                        <img src="{{ asset('img/ig1.png') }}" alt="">
                    </a>
                </div>
            </div>
            <div class="home__instagram-actions">
                <button class="prev"><i class="icon icon-angle-left"></i></button>
                <div class="home__instagram-dots">
                    <span class="active"></span>
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
                <button class="next"><i class="icon icon-angle-right"></i></button>
            </div>
        </div>
    </section>
</x-layouts.app>
