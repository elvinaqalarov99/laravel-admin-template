# Laravel Basic integration with Admin Panel (MySQL DB)

## Helpers

#### Helpers registered in composer.json under the autoload key

<ul>
    <li>image helper for loading default no-image</li>
    <li>If helpers are not loaded run composer dump-autoload</li>
</ul>

## Commands to make alive

<ul>
    <li>npm install && npm run dev</li>
    <li>composer install && composer update to ensure packages are up-to-date</li>
    <li>cp .env.example .env (edit your environmental variables for your needs (ex: mysql db setup))</li>
    <li>php artisan key:generate (to make your application unique and prevent cookie changes)</li>
    <li>php artisan migrate:fresh --seed</li>
    <li>If helpers are not loaded run composer dump-autoload</li>
</ul>

## Structure of vendors and how to edit them
<ul>
    <li>
        ImageOptimizer
        <ul>
            <li>Middleware optimizeImages in App\Http\Kernel.php</li>
            <li>Provider Spatie\LaravelImageOptimizer\ImageOptimizerServiceProvider::class
                in config/app.php
            </li>
            <li>
                Alias ImageOptimizer => Spatie\LaravelImageOptimizer\Facades\ImageOptimizer::class
                in config/app.php
            </li>
        </ul>
    </li>
    <li>
        Spatie Translations
        <ul>
            <li>
                use Spatie\Translatable\HasTranslations Trait in Model;
            </li>
            <li>
                add $translatable = array of translatable fields in Model;
            </li>
        </ul>
        Note: Do not forget to make column json in migration for translatable fields
    </li>
    <li>
        Translation flags and Middleware for setting current locale
        <ul>
            <li>
                use Spatie\Translatable\HasTranslations Trait in Model;
            </li>
            <li>
                add $translatable = array of translatable fields in Model;
            </li>
        </ul>
    </li>
</ul>

