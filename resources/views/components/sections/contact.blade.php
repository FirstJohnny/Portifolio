<section id="contact" class="contact">
    <div class="container">
        <h2 class="animate-fade">Vamos proteger seus sistemas.</h2>
        <div class="contact-wrapper">
            <div class="contact-info animate-fade">
                @foreach($contactInfo as $item)
                <div class="contact-item">
                    <div class="contact-icon">
                        <i class="fas fa-{{ $item['icon'] }}"></i>
                    </div>
                    <div>
                        <h3>{{ $item['title'] }}</h3>
                        <p>{{ $item['content'] }}</p>
                    </div>
                </div>
                @endforeach
            </div>
            <div class="contact-form animate" style="animation-delay: 0.2s;">
                <form id="contactForm" method="POST" action="{{ route('contact.store') }}">
                    @csrf
                    <div class="form-group">
                        <label for="name">Nome Completo</label>
                        <input type="text" id="name" name="name" class="form-control" placeholder="Digite seu nome completo" required>
                    </div>
                    <div class="form-group">
                        <label for="email">Endereço de e-mail</label>
                        <input type="email" id="email" name="email" class="form-control" placeholder="Insira o seu e-mail" required>
                    </div>
                    <div class="form-group">
                        <label for="subject">Assunto</label>
                        <input type="text" id="subject" name="subject" class="form-control" placeholder="Assunto do projecto ou da pesquisa" required>
                    </div>
                    <div class="form-group">
                        <label for="message">Mensagem</label>
                        <textarea id="message" name="message" class="form-control" placeholder="Descreve suas necessidades de segurança ou seu projecto..." required></textarea>
                    </div>
                    <div class="form-status" id="formStatus"></div>
                    <button type="submit" class="btn" style="width: 100%;">
                        <i class="fas fa-paper-plane"></i>
                        Enviar mensagem segura
                    </button>
                </form>
            </div>
        </div>
    </div>
</section>
