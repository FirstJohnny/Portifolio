<x-layout.main-layout title="LoneWolf Portfolio">

    @push('styles')
    <style>
        /* Estilos Modernos para Certificações */
        .certs-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
            gap: 2rem;
            margin-top: 2rem;
        }

        .cert-card {
            background: rgba(15, 23, 42, 0.6);
            border: 1px solid rgba(255, 255, 255, 0.08);
            border-radius: var(--border-radius);
            overflow: hidden;
            transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
            position: relative;
            backdrop-filter: blur(10px);
            display: flex;
            flex-direction: column;
            height: 100%;
            box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1);
        }

        .cert-card:hover {
            transform: translateY(-8px);
            border-color: var(--accent);
            box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.2), 0 0 15px rgba(245, 158, 11, 0.15);
        }

        .cert-image-wrapper {
            height: 180px;
            overflow: hidden;
            position: relative;
            background: #0f172a;
            border-bottom: 1px solid rgba(255, 255, 255, 0.05);
        }

        .cert-image-wrapper img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.5s ease;
            opacity: 0.9;
        }

        .cert-card:hover .cert-image-wrapper img {
            transform: scale(1.1);
            opacity: 1;
        }

        .cert-overlay-icon {
            position: absolute;
            inset: 0;
            background: rgba(15, 23, 42, 0.8);
            display: flex;
            align-items: center;
            justify-content: center;
            opacity: 0;
            transition: all 0.3s ease;
            z-index: 2;
        }

        .cert-card:hover .cert-overlay-icon {
            opacity: 1;
        }

        .cert-overlay-icon i {
            font-size: 2rem;
            color: var(--accent);
            transform: translateY(20px);
            transition: all 0.3s ease;
        }

        .cert-card:hover .cert-overlay-icon i {
            transform: translateY(0);
        }

        .cert-content {
            padding: 1.5rem;
            display: flex;
            flex-direction: column;
            flex-grow: 1;
        }

        .cert-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 1rem;
        }

        .cert-content .issuer {
            color: var(--primary);
            font-family: 'Roboto Mono', monospace;
            font-size: 0.8rem;
            font-weight: 600;
            display: flex;
            align-items: center;
            gap: 0.5rem;
            text-transform: uppercase;
        }

        .cert-status {
            color: var(--cyber-green);
            font-size: 1rem;
            text-shadow: 0 0 10px var(--cyber-green-glow);
        }

        .cert-content h3 {
            font-size: 1.2rem;
            color: var(--light);
            margin: 0 0 1.5rem 0;
            line-height: 1.4;
            font-weight: 600;
        }

        .cert-footer {
            margin-top: auto;
            padding-top: 1rem;
            border-top: 1px solid rgba(255, 255, 255, 0.1);
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .cert-content .date {
            font-size: 0.8rem;
            color: rgba(255, 255, 255, 0.5);
            font-family: 'Roboto Mono', monospace;
        }

        .cert-link-overlay {
            position: absolute;
            inset: 0;
            z-index: 10;
            cursor: pointer;
        }
    </style>
    @endpush

    <!-- Hero Section -->
    <x-sections.hero />

    <!-- About Section -->
    <x-sections.about />

    <!-- Skills Section -->
    <x-sections.skills />

    <!-- Projects Section -->
    <x-sections.projects />

    <!-- Certifications Section -->
    <x-sections.certifications />

    <!-- Contact Section -->
    <x-sections.contact />

    @push('scripts')
    <script>
        // JavaScript específico da página
        document.addEventListener('DOMContentLoaded', function() {
            console.log('LoneWolf Portfolio - All systems operational');

            // Form submission handler
            const contactForm = document.getElementById('contactForm');
            if (contactForm) {
                contactForm.addEventListener('submit', async function(e) {
                    e.preventDefault();

                    const formData = new FormData(this);
                    const submitBtn = this.querySelector('button[type="submit"]');
                    const originalText = submitBtn.innerHTML;
                    const formStatus = document.getElementById('formStatus');

                    submitBtn.innerHTML = '<i class="fas fa-cog fa-spin"></i> Criptografando...';
                    submitBtn.disabled = true;

                    try {
                        const response = await fetch(this.action, {
                            method: 'POST',
                            body: formData,
                            headers: {
                                'X-Requested-With': 'XMLHttpRequest',
                                'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content
                            }
                        });

                        const data = await response.json();

                        if (data.success) {
                            formStatus.textContent = data.message;
                            formStatus.className = 'form-status success';
                            this.reset();
                        } else {
                            formStatus.textContent = 'Error: ' + (data.message || 'Failed to send message');
                            formStatus.className = 'form-status error';
                        }
                    } catch (error) {
                        formStatus.textContent = 'Error: Network error occurred';
                        formStatus.className = 'form-status error';
                    } finally {
                        submitBtn.innerHTML = originalText;
                        submitBtn.disabled = false;

                        // Hide status after 5 seconds
                        setTimeout(() => {
                            formStatus.style.display = 'none';
                        }, 5000);
                    }
                });
            }
        });
    </script>
    @endpush

</x-layout.main-layout>
