<?php

namespace App\Providers;

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\ServiceProvider;

class ViewServiceProvider extends ServiceProvider
{
    public function boot()
    {
        // Directiva para cache de componentes
        Blade::directive('cache', function ($expression) {
            return "<?php if (!app()->environment('local')) : ?>" .
                   "<?php echo Cache::remember('component_{$expression}', 3600, function() use (\$__env) { ?>";
        });

        Blade::directive('endcache', function () {
            return "<?php }); ?>" .
                   "<?php else : ?>";
        });

        Blade::directive('endcacheelse', function () {
            return "<?php endif; ?>";
        });
    }
}
