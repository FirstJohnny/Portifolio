<!-- Portfolio Area Start -->
<div id="portfolio" class="work-area section-padding">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12">
                <div class="section-title">
                    <h2>Trabalhos Recentes</h2>
                    <span>Trabalhos Recentes</span>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            @if(isset($portfolios) && count($portfolios) > 0)
                @foreach($portfolios as $portfolio)
                    <div class="col-xl-4 col-md-6">
                        <div class="single-work mb-30">
                            <img src="{{ asset('assets/front/img/' . $portfolio['image']) }}" alt="{{ $portfolio['title'] }}">
                            <div class="item-hover">
                                <div class="hover-content">
                                    <h4>{{ $portfolio['title'] }}</h4>
                                    <a href="{{ route('portfolio.detail', $portfolio['slug']) }}" class="work-link"><i class="fa fa-link"></i></a>
                                    <a class="lightbox" href="{{ asset('assets/front/img/' . $portfolio['image']) }}" class="work-link"><i class="fa fa-eye"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            @else
                <!-- Fallback estático -->
                @php
                    $portfolios = [
                        ['title' => 'Htheme - Transformando a Experiênc...', 'image' => 'portfolio_16943463071551993715.png', 'slug' => 'htheme-transformando-a-experiencia-de-hospedagem-e-dominios'],
                        ['title' => 'SMS EXPRESS - TEMP SMS', 'image' => 'portfolio_1664664211163007583.png', 'slug' => 'sms-express-temp-sms'],
                        ['title' => 'eRcade - HTML 5 GAMES ONLINE', 'image' => 'portfolio_1661218548794792919.png', 'slug' => 'ercade-html-5-games-online'],
                        ['title' => 'PITEU - Delivery App', 'image' => 'portfolio_16612060261210871612.png', 'slug' => 'piteu-delivery-app'],
                        ['title' => 'TaxiOn', 'image' => 'portfolio_16494938181013641546.png', 'slug' => 'taxion'],
                        ['title' => 'BaikaSeguro', 'image' => 'portfolio_16451231011655978726.png', 'slug' => 'baikaseguro'],
                        ['title' => 'Bumbeiros', 'image' => 'portfolio_16400162221306637473.png', 'slug' => 'bumbeiros'],
                        ['title' => 'Livraria', 'image' => 'portfolio_16255783121523635665.png', 'slug' => 'livraria'],
                        ['title' => 'Bússola - Aplicativo', 'image' => 'portfolio_16243078291481930338.png', 'slug' => 'bussola-aplicativo'],
                    ];
                @endphp
                @foreach($portfolios as $portfolio)
                    <div class="col-xl-4 col-md-6">
                        <div class="single-work mb-30">
                            <img src="{{ asset('assets/front/img/' . $portfolio['image']) }}" alt="{{ $portfolio['title'] }}">
                            <div class="item-hover">
                                <div class="hover-content">
                                    <h4>{{ $portfolio['title'] }}</h4>
                                    <a href="{{ route('portfolio.detail', $portfolio['slug']) }}" class="work-link"><i class="fa fa-link"></i></a>
                                    <a class="lightbox" href="{{ asset('assets/front/img/' . $portfolio['image']) }}" class="work-link"><i class="fa fa-eye"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            @endif
        </div>

        <div class="row mt-3">
            <div class="col-lg-12 text-center">
                <a class="mybtn mybtn-bg" href="{{ route('portfolios') }}"><span>Ver tudo</span></a>
            </div>
        </div>
    </div>
</div>
<!-- Portfolio Area End -->
