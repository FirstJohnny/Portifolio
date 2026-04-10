<!-- Testimonial Area Start -->
<section class="testimonial section-padding" id="testimonial">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12">
                <div class="section-title">
                    <h2>Depoimentos</h2>
                    <span>Depoimentos</span>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-12 col-md-12">
                <div class="testimonial-slider">
                    @if(isset($testimonials) && count($testimonials) > 0)
                        @foreach($testimonials as $testimonial)
                            <div class="slider-item">
                                <div class="single-review">
                                    <div class="reviewr">
                                        <div class="img">
                                            <img src="{{ asset('assets/front/img/' . $testimonial['image']) }}" alt="{{ $testimonial['name'] }}">
                                        </div>
                                        <div class="content">
                                            <h4 class="name">{{ $testimonial['name'] }}</h4>
                                            <p>{{ $testimonial['position'] }}</p>
                                        </div>
                                    </div>
                                    <div class="main-content">
                                        <div class="stars">
                                            @for($i = 1; $i <= 5; $i++)
                                                @if($i <= $testimonial['rating'])
                                                    <i class="fas fa-star"></i>
                                                @else
                                                    <i class="far fa-star"></i>
                                                @endif
                                            @endfor
                                        </div>
                                        <p>{{ $testimonial['comment'] }}</p>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    @else
                        <!-- Fallback estático -->
                        <div class="slider-item">
                            <div class="single-review">
                                <div class="reviewr">
                                    <div class="img">
                                        <img src="{{ asset('assets/front/img/Raimundo.webp') }}" alt="Pedro K. Raimundo">
                                    </div>
                                    <div class="content">
                                        <h4 class="name">Pedro K. Raimundo</h4>
                                        <p>CEO da Elprime Solution</p>
                                    </div>
                                </div>
                                <div class="main-content">
                                    <div class="stars">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                    </div>
                                    <p>João é um grande profissional. Ele realmente se dedica no que faz, e ama. Amo seus trabalhos e a sua capacidade de resolver os problemas e dar sempre uma boa solução</p>
                                </div>
                            </div>
                            <div class="single-review">
                                <div class="reviewr">
                                    <div class="img">
                                        <img src="{{ asset('assets/front/img/Álvaro.webp') }}" alt="Álvaro Kichandoki">
                                    </div>
                                    <div class="content">
                                        <h4 class="name">Álvaro Kichandoki</h4>
                                        <p>Contabilista</p>
                                    </div>
                                </div>
                                <div class="main-content">
                                    <div class="stars">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                    </div>
                                    <p>João é um profissional dedicado, muito rápido e eficiente para entregar os projetos. Ele tem um bom conhecimento técnico.</p>
                                </div>
                            </div>
                             <div class="single-review">
                                <div class="reviewr">
                                    <div class="img">
                                        <img src="{{ asset('assets/front/img/sebastiao.jpg') }}" alt="Sebastião da Cruz Miranda">
                                    </div>
                                    <div class="content">
                                        <h4 class="name">Sebastião da Cruz Miranda</h4>
                                        <p>Eng. de Software</p>
                                    </div>
                                </div>
                                <div class="main-content">
                                    <div class="stars">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                    </div>
                                    <p>Óptimo profissional. Recomendo fortemente seus serviços.</p>
                                </div>
                            </div>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Testimonial Area End -->
