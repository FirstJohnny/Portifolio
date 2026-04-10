<!-- Blog Area Start -->
<section id="blog" class="blogs section-padding">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12">
                <div class="section-title">
                    <h2>Meu Blog</h2>
                    <span>Meu Blog</span>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            @if(isset($blogs) && count($blogs) > 0)
                @foreach(array_slice($blogs, 0, 3) as $blog)
                    <div class="col-xl-4 col-md-6">
                        <div class="blog-box">
                            <div class="blog-images">
                                <img src="{{ asset('assets/front/img/' . $blog['image']) }}" class="img-fluid" alt="{{ $blog['title'] }}">
                            </div>
                            <div class="blog-details">
                                <ul class="post-meta-one">
                                    <li><p><i class="fa fa-user"></i> Por <span class="username">joaotomas</span></p></li>
                                    <li><p><i class="fa fa-clock-o"></i> {{ \Carbon\Carbon::parse($blog['date'])->format('d M, Y') }}</p></li>
                                </ul>
                                <h3>
                                    <a class="blog-title" href="{{ route('blog.post', $blog['slug']) }}">
                                        {{ $blog['title'] }}
                                    </a>
                                </h3>
                            </div>
                        </div>
                    </div>
                @endforeach
            @else
                <!-- Fallback estático -->
                @php
                    $blogs = [
                        ['title' => 'lifestyle - O app perfeito para você', 'slug' => 'lifestyle-o-app-perfeito-para-você', 'image' => '1684387720537358025.png', 'date' => '2023-05-18'],
                        ['title' => 'Chita - Sistema de Gestão Escolar', 'slug' => 'chita-sistema-de-gestao-escolar', 'image' => '16692947501046140923.png', 'date' => '2022-11-24'],
                        ['title' => 'Usando API para validar dados do bilhete...', 'slug' => 'usando-api-para-validar-dados-do-bilhete-angola', 'image' => '16403401081071754391.png', 'date' => '2021-12-24'],
                    ];
                @endphp
                @foreach($blogs as $blog)
                    <div class="col-xl-4 col-md-6">
                        <div class="blog-box">
                            <div class="blog-images">
                                <img src="{{ asset('assets/front/img/' . $blog['image']) }}" class="img-fluid" alt="{{ $blog['title'] }}">
                            </div>
                            <div class="blog-details">
                                <ul class="post-meta-one">
                                    <li><p><i class="fa fa-user"></i> Por <span class="username">joaotomas</span></p></li>
                                    <li><p><i class="fa fa-clock-o"></i> {{ \Carbon\Carbon::parse($blog['date'])->format('d M, Y') }}</p></li>
                                </ul>
                                <h3>
                                    <a class="blog-title" href="{{ route('blog.post', $blog['slug']) }}">
                                        {{ $blog['title'] }}
                                    </a>
                                </h3>
                            </div>
                        </div>
                    </div>
                @endforeach
            @endif
        </div>
        <div class="row">
            <div class="col-lg-12 text-center">
                <a class="mybtn mybtn-bg" href="{{ route('blog') }}"><span>Ver Tudo</span></a>
            </div>
        </div>
    </div>
</section>
<!-- Blog Area End -->
