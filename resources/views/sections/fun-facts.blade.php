<!-- Fun Fact Area Start -->
<div class="counterArea section-padding">
    <div class="container">
        <div class="row justify-content-center">
            @if(isset($stats) && count($stats) > 0)
                @foreach($stats as $stat)
                    <div class="col-xl-3 col-lg-6 col-md-6">
                        <!-- Single stat  -->
                        <div class="counter_box">
                            <div class="img">
                                @if($stat['title'] == 'Anos de Exp')
                                    <!-- Trophy SVG -->
                                    <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 24 24" fill="none" stroke="#007bff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                        <circle cx="12" cy="8" r="7"></circle>
                                        <polyline points="8.21 13.89 7 23 12 20 17 23 15.79 13.88"></polyline>
                                    </svg>
                                @elseif($stat['title'] == 'Clientes Satisfeitos')
                                    <!-- Thumbs Up SVG -->
                                    <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 24 24" fill="none" stroke="#007bff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                        <path d="M14 9V5a3 3 0 0 0-3-3l-4 9v11h11.28a2 2 0 0 0 2-1.7l1.38-9a2 2 0 0 0-2-2.3zM7 22H4a2 2 0 0 1-2-2v-7a2 2 0 0 1 2-2h3"></path>
                                    </svg>
                                @elseif($stat['title'] == 'Trabalhos feitos')
                                    <!-- Check Circle SVG -->
                                    <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 24 24" fill="none" stroke="#007bff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                        <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path>
                                        <polyline points="22 4 12 14.01 9 11.01"></polyline>
                                    </svg>
                                @else
                                    <!-- Default fallback icon -->
                                    <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 24 24" fill="none" stroke="#007bff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                        <circle cx="12" cy="12" r="10"></circle>
                                        <line x1="12" y1="16" x2="12" y2="12"></line>
                                        <line x1="12" y1="8" x2="12.01" y2="8"></line>
                                    </svg>
                                @endif
                            </div>
                            <div class="counter-w">
                                <h2 class="count">{{ $stat['count'] }}</h2> <span>{{ $stat['suffix'] }}</span>
                            </div>
                            <h3>{{ $stat['title'] }}</h3>
                        </div>
                    </div>
                @endforeach
            @else
                <!-- Fallback estático caso os dados não sejam passados -->
                <div class="col-xl-3 col-lg-6 col-md-6">
                    <div class="counter_box">
                        <div class="img">
                            <img class="w-60" src="{{ asset('assets/front/img/15765234541659685266.png') }}" alt="">
                        </div>
                        <div class="counter-w">
                            <h2 class="count">4</h2> <span>+</span>
                        </div>
                        <h3>Anos de Exp</h3>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-md-6">
                    <div class="counter_box">
                        <div class="img">
                            <img class="w-60" src="{{ asset('assets/front/img/15765234441378728684.png') }}" alt="">
                        </div>
                        <div class="counter-w">
                            <h2 class="count">30</h2> <span>+</span>
                        </div>
                        <h3>Clientes Satisfeitos</h3>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-md-6">
                    <div class="counter_box">
                        <div class="img">
                            <img class="w-60" src="{{ asset('assets/front/img/15765234241155195086.png') }}" alt="">
                        </div>
                        <div class="counter-w">
                            <h2 class="count">50</h2> <span>+</span>
                        </div>
                        <h3>Trabalhos feitos</h3>
                    </div>
                </div>
            @endif
        </div>
    </div>
</div>
<!-- Fun Fact Area End -->
