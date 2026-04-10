@extends('layouts.layout')

@section('title', $post['title'] . ' - João Tomás')
@section('meta_description', 'Olá Bem vindo ao meu site, Sou João Tomás, dev mobile e web')
@section('meta_keywords', 'João Tomás,Portfolio Pessoal,CV,Angola,João,Tomás,Programador,Programador Angolano')

@section('content')
    <!-- Bread Crumb Area Start -->
    <header class="breadcrumb-area">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2 class="title">
                        Blog-Post
                    </h2>
                    <ul class="links">
                        <li>
                            <a href="{{ url('/') }}">
                                <i class="fas fa-home"></i>
                                Inicio
                            </a>
                        </li>
                        <li>
                            Blog-Post
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </header>
    <!-- Bread Crumb Area End -->

    <!-- Blog Details Area Strat -->
    <section class="blog-details section-padding" id="blog-details">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="blog-content">
                        <div class="content">
                            <div class="feature-image">
                                <img class="img-fluid"
                                    src="{{ asset('assets/front/img/' . $post['image']) }}" alt="{{ $post['title'] }}">
                            </div>
                            <h3 class="title">
                                {{ $post['title'] }}
                            </h3>
                            <ul class="post-meta">
                                <li>
                                    <a href="javascript:;">
                                        <i class="fa fa-user"></i>
                                        <span>Por João Tomás</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:;">
                                        <i class="fa fa-calendar"></i>
                                        <span>
                                            {{ \Carbon\Carbon::parse($post['date'])->format('d M, Y') }}
                                        </span>
                                    </a>
                                </li>
                            </ul>
                            <div class="content-body">
                                <p></p>
                                <p></p>
                                <p><span style="color: rgb(255, 255, 255);">Olá guys, então recentemente acabei
                                        disponibilizando nas minhas redes sociais uma forma de verificar seus usuários
                                        usando uma API.</span></p>
                                <p><span style="color: rgb(255, 255, 255);">É bem simples a sua utilização tem apenas uma
                                        rota, com o verbo GET, mas mesmo assim acho que tenho que escrever aqui no blog,
                                        afinal tenho um blog&nbsp; no portfolio né deixaaaaaaa utilizar xD.</span></p>
                                <p><span style="color: rgb(255, 255, 255);">Temos a Url Base -</span> <a
                                        href="http://consulta.joaotomas.ao" target="_blank"
                                        class="md-opjjpmhoiojifppkkcdabiobhakljdgm_doc">http://consulta.joaotomas.ao</a>
                                </p>
                                <p><span style="color: rgb(255, 255, 255);">Temos a rota para a consulta -</span> <a
                                        href="http://consulta.joaotomas.ao/consultar/" target="_blank"
                                        class="md-opjjpmhoiojifppkkcdabiobhakljdgm_doc">http://consulta.joaotomas.ao/consultar/</a>
                                </p>
                                <p><span style="color: rgb(255, 255, 255);">essa rota recebe 2 parâmetros sendo eles
                                        :</span></p>
                                <ul>
                                    <li><span style="font-size: 1rem;">Número do documento</span></li>
                                    <li><span style="font-size: 1rem;">Tipo de consulta</span></li>
                                </ul>
                                <p><span style="color: rgb(255, 255, 255);">vamos montar um request onde consultamos o nif
                                        de uma empresa então ficaria assim</span></p>
                                <p>&nbsp; &nbsp; &nbsp; &nbsp;&nbsp;<a
                                        href="http://consulta.joaotomas.ao/consultar/5410003144/nif" target="_blank"
                                        class="md-opjjpmhoiojifppkkcdabiobhakljdgm_doc">http://consulta.joaotomas.ao/consultar/5410003144/nif</a>
                                    <font color="#0056b3"></font>
                                </p>
                                <p><span style="color: rgb(255, 255, 255);">Então neste request estamos passando o número do
                                        documento no caso "5410003144" e o tipo de consulta, no caso "nif"</span></p>
                                <code>
                                    {
                                    "error": false,
                                    "name": "UNITEL, S.A.",
                                    "type": "consulta de nif"
                                    }</code>
                                <p></p>
                                <p><span style="color: rgb(255, 255, 255);">Além do nif podemos passar outro tipo de
                                        consulta "bilhete" para consultarmos o bilhete de alguém.</span></p>
                                <p><span style="color: rgb(255, 255, 255);">O request seria algo como</span>&nbsp;<a
                                        href="http://consulta.joaotomas.ao/consultar/5410003144" target="_blank"
                                        class="md-opjjpmhoiojifppkkcdabiobhakljdgm_doc">http://consulta.joaotomas.ao/consultar/5410003144</a>
                                </p>
                                <p><span style="color: rgb(255, 255, 255);">Note que não estamos passando nenhum tipo de
                                        consulta, se não informamos nenhum tipo de consulta a API assume que estamos
                                        consultando dados do bilhete de identidade de alguém.</span></p>
                                <p><span style="color: rgb(255, 255, 255);">sendo que estamos consultando dados do bilhete
                                        mas informamos um nif ela retornará um JSON com o seguinte formato</span></p>
                                <p>
                                    <font color="#e83e8c"
                                        face="SFMono-Regular, Menlo, Monaco, Consolas, Liberation Mono, Courier New, monospace">
                                        <span style="font-size: 14px;">{</span></font>
                                    <font color="#e83e8c"
                                        face="SFMono-Regular, Menlo, Monaco, Consolas, Liberation Mono, Courier New, monospace"
                                        style="font-size: 1rem;"><span style="font-size: 14px;">"error": true,</span></font>
                                    <font color="#e83e8c"
                                        face="SFMono-Regular, Menlo, Monaco, Consolas, Liberation Mono, Courier New, monospace"
                                        style="font-size: 1rem;"><span style="font-size: 14px;">"message": "O número do
                                            documento deve conter 14 caracteres"</span></font><span
                                        style="font-size: 14px; color: rgb(232, 62, 140); font-family: SFMono-Regular, Menlo, Monaco, Consolas, &quot;Liberation Mono&quot;, &quot;Courier New&quot;, monospace;">}</span>
                                </p>
                                <p><span style="color: rgb(255, 255, 255);">Por hoje é tudo fam até ao próximoooooooo
                                        Post.</span></p>
                                <p style="box-sizing: border-box; margin-top: 0px; margin-bottom: 1rem;"><span
                                        style="color: rgb(255, 255, 255);"><code
                                            style="box-sizing: border-box; font-family: SFMono-Regular, Menlo, Monaco, Consolas, &quot;Liberation Mono&quot;, &quot;Courier New&quot;, monospace; font-size: 14px; word-break: break-word;"></code></span>
                                </p>
                                <p><br></p>
                                <p></p>
                                <p></p>
                                <br>
                                <br>

                            </div>
                            <div class="tag-social-link text-center justify-content-center">
                                <!-- AddToAny BEGIN -->
                                <div class="a2a_kit a2a_kit_size_32 a2a_default_style d-inline-block">
                                    <a class="a2a_button_facebook"></a>
                                    <a class="a2a_button_twitter"></a>
                                    <a class="a2a_button_email"></a>
                                    <a class="a2a_dd" href="https://www.addtoany.com/share"></a>
                                </div>
                                <script async src="https://static.addtoany.com/menu/page.js"></script>
                                <!-- AddToAny END -->
                            </div>
                        </div>
                    </div>
                    <div class="discus-comment-box">
                        <div id="disqus_thread" class="mt-5"></div>
                        <script>
                            (function() { // DON'T EDIT BELOW THIS LINE
                                var d = document,
                                    s = d.createElement('script');
                                s.src = '//joaotomas.disqus.com/embed.js'; // TODO: Substitua 'joaotomas' pelo seu shortname do Disqus
                                s.setAttribute('data-timestamp', +new Date());
                                (d.head || d.body).appendChild(s);
                            })();
                        </script>

                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="blog-aside">
                        <div class="serch-form">
                            <form action="{{ route('blog') }}" method="GET">
                                <div class="searchbar">
                                    <input name="category" type="hidden" value="">
                                    <input name="month" type="hidden" value="">
                                    <input name="year" type="hidden" value="">
                                    <input name="term" type="text" placeholder="Procurar..." value="">
                                    <button type="submit"><i class="fa fa-search"></i></button>
                                </div>
                            </form>
                        </div>
                        <div class="categori">
                            <h4 class="title">Categorias</h4>
                            <span class="separator"></span>
                            <ul class="categori-list">
                                <li class="">
                                    <a href="{{ route('blog', ['category' => 9]) }}">
                                        <span><i class="fas fa-angle-double-right"></i>Geral</span>
                                    </a>
                                </li>
                                <li class="">
                                    <a href="{{ route('blog', ['category' => 5]) }}">
                                        <span><i class="fas fa-angle-double-right"></i>Programação</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="recent-post-widget">
                            <h4 class="title">Posts Recentes</h4>
                            <span class="separator"></span>
                            <ul class="post-list">
                                <li>
                                    <div class="post">
                                        <div class="post-img">
                                            <img src="{{ asset('assets/front/img/1684387720537358025.png') }}"
                                                alt="">
                                        </div>
                                        <div class="post-details">
                                            <a href="{{ route('blog.post', 'lifestyle') }}">
                                                <h4 class="post-title">
                                                    lifestyle - O app perfeito para você
                                                </h4>
                                            </a>
                                            <p class="date">
                                                11 Sep, 2026
                                            </p>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="post">
                                        <div class="post-img">
                                            <img src="{{ asset('assets/front/img/16692947501046140923.png') }}"
                                                alt="">
                                        </div>
                                        <div class="post-details">
                                            <a href="{{ route('blog.post', 'chita') }}">
                                                <h4 class="post-title">
                                                    Chita - Sistema de Gestão Escolar
                                                </h4>
                                            </a>
                                            <p class="date">
                                                24 Dec, 2026
                                            </p>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="post">
                                        <div class="post-img">
                                            <img src="{{ asset('assets/front/img/16403401081071754391.png') }}"
                                                alt="">
                                        </div>
                                        <div class="post-details">
                                            <a href="{{ route('blog.post', 'usando-api-para-validar-dados-do-bilhete-angola') }}">
                                                <h4 class="post-title">
                                                    Usando API para validar dados do bilhete e NIF...
                                                </h4>
                                            </a>
                                            <p class="date">
                                                20 Aug, 2026
                                            </p>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="post">
                                        <div class="post-img">
                                            <img src="{{ asset('assets/front/img/1624308749972681236.jpeg') }}"
                                                alt="">
                                        </div>
                                        <div class="post-details">
                                            <a href="{{ route('blog.post', 'o-que-e-uma-landing-page') }}">
                                                <h4 class="post-title">
                                                    O que é uma Landing Page?
                                                </h4>
                                            </a>
                                            <p class="date">
                                                21 Jun, 2021
                                            </p>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Blog Details Area End -->
@endsection
