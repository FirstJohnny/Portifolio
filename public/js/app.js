// 1. Modules
import CyberEffects from './modules/cyber-effects';
import FormHandler from './modules/form-handler';
import Navigation from './modules/navigation';
import Animations from './modules/animations';

// 2. Initialize on DOM ready
document.addEventListener('DOMContentLoaded', () => {
    // Remove loader
    const loader = document.getElementById('loader');
    if (loader) {
        setTimeout(() => {
            loader.style.opacity = '0';
            setTimeout(() => loader.style.display = 'none', 500);
        }, 2000);
    }

    // Initialize modules
    CyberEffects.init();
    FormHandler.init();
    Navigation.init();
    Animations.init();

    // Console greeting
    console.log('%c🔐 portfólio seguro carregado 🔐', 'color: #2563eb; font-size: 16px; font-weight: bold;');
});

// 3. Export for hot reload (Vite)
if (import.meta.hot) {
    import.meta.hot.accept();
}



