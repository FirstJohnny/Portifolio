<!-- Contact Us Area Start -->
<div class="contact contact-info-area section-padding" id="contact">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12">
                <div class="section-title">
                    <h2>Entre em contacto</h2>
                    <span>Entre em contacto</span>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-xl-4 col-md-6">
                <div class="single-info">
                    <div class="info-icon">
                        <i class="fa fa-rocket"></i>
                    </div>
                    <div class="info-content">
                        <h5>Minha Localização:</h5>
                        <p>Luanda, Cacuaco</p>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-md-6">
                <div class="single-info">
                    <div class="info-icon">
                        <i class="fa fa-phone"></i>
                    </div>
                    <div class="info-content">
                        <h5>Contacto:</h5>
                        <p>+244 932 905 801</p>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-md-6">
                <div class="single-info">
                    <div class="info-icon">
                        <i class="fa fa-envelope"></i>
                    </div>
                    <div class="info-content">
                        <h5>E-mail:</h5>
                        <p>joaonicolauremostomas@gmail.com</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row cAndm">
            <div class="col-lg-6">
                <div class="home-page-form">
                    <div class="contact-form">
                        @if (session('success'))
                            <div class="alert alert-success mb-4">
                                {{ session('success') }}
                            </div>
                        @endif
                        <form id="contact-form" method="post" action="{{ route('contact.send') }}">
                            @csrf
                            <div class="controls">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <i class="fa fa-user-o"></i>
                                            <input id="form_name" type="text" name="name" class="form-control"
                                                placeholder="Nome*" required="required" data-error="Nome é obrigatório."
                                                value="{{ old('name') }}">
                                            <div class="help-block with-errors"></div>
                                            @error('name')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <i class="fa fa-envelope-o"></i>
                                            <input id="form_email" type="email" name="email" class="form-control"
                                                placeholder="E-mail*" required="required"
                                                data-error="Insira um e-mail válido." value="{{ old('email') }}">
                                            <div class="help-block with-errors"></div>
                                            @error('email')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <i class="fa fa-question-circle-o"></i>
                                            <input id="form_subject" type="text" name="subject" class="form-control"
                                                placeholder="Assunto*" required="required"
                                                data-error="Queremos saber de que se trata esta mensagem."
                                                value="{{ old('subject') }}">
                                            <div class="help-block with-errors"></div>
                                            @error('subject')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <i class="fa fa-comment-o"></i>
                                            <textarea id="form_message" name="message" class="form-control" placeholder="Mensagem*" rows="7"
                                                required="required" data-error="Umm, e que tal escrever uma mensagem ?">{{ old('message') }}</textarea>
                                            <div class="help-block with-errors"></div>
                                            @error('message')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <button type="submit" class="mybtn mybtn-bg"><span>Enviar
                                                Mensagem</span></button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="google_map_wrapper">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m17!1m12!1m3!1d3944.6594728946257!2d13.323953315382152!3d-8.770238000000002!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m2!1m1!2zOMKwNDYnMTIuOSJTIDEzwrAxOSczNS41IkU!5e0!3m2!1spt-PT!2sao!4v1712345678901!5m2!1spt-PT!2sao"
                        width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Contact Us Area End -->
