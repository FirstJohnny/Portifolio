<!-- Client Area Start -->
<section class="myclient-area section-padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title">
                    <h2>Meus Clientes</h2>
                    <span>Meus Clientes</span>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="client-slider">
                    @if(isset($clients) && count($clients) > 0)
                        @foreach($clients as $client)
                            <div class="item">
                                <a href="{{ $client['url'] }}" target="_blank">
                                    <img src="{{ asset('assets/front/img/' . $client['logo']) }}" alt="{{ $client['name'] }}">
                                </a>
                            </div>
                        @endforeach
                    @else
                        <!-- Fallback estático -->
                        @php
                            $clients = [
                                ['name' => 'Elprime Solution', 'url' => 'https://elprimesolution.com', 'logo' => 'elprime.png'],
                                ['name' => 'Wobotec', 'url' => '#', 'logo' => 'wobotec.jpg'],
                                ['name' => 'Isicloud', 'url' => 'https://isicloud.ao/', 'logo' => '1621420985587513328.png'],
                                ['name' => 'Serhost', 'url' => 'https://www.serhost.ao/', 'logo' => '1621416769256269180.png'],
                                ['name' => 'Angohost', 'url' => 'http://angohost.ao/', 'logo' => '1621416549566158389.png'],
                            ];
                        @endphp
                        @foreach($clients as $client)
                            <div class="item">
                                <a href="{{ $client['url'] }}" target="_blank">
                                    <img src="{{ asset('assets/front/img/' . $client['logo']) }}" alt="{{ $client['name'] }}">
                                </a>
                            </div>
                        @endforeach
                    @endif
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Client Area End -->
