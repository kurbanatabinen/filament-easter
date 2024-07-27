![Filament Easter 🥚](./screenshot.png)

This package provide a simple **Easter Egg Modal** for Filament Panel.

------

⚡️ Install with [Composer](https://getcomposer.org)

```bash
composer require kurban/filament-easter
```

🔥 Add the plugin to your plugins array of your [panel()](https://filamentphp.com/docs/3.x/panels/installation) method in your PanelProvider

```php
    FilamentEasterPlugin::make()
        ->keys(['ArrowUp', 'ArrowUp', 'ArrowDown', 'ArrowDown', 'ArrowLeft', 'ArrowRight', 'ArrowLeft', 'ArrowRight', 'b', 'a'])
        ->backgroundImage('https://m.media-amazon.com/images/I/A13qABV+icL.png')
        ->modalContent([
            'title' => 'Easter Cat Found! 🐱',
            'content' => 'Congratulations! You\'ve discovered the hidden Easter Cat. Meow!',
            'footer' => 'Share this secret with fellow cat lovers!'
        ]),
```

🚀 Customize it as neeeded
```php
php artisan vendor:publish --tag=pulsegpt-config
```

✅ Update your **environnements** variables 
```bash
OPENAI_API_KEY=
OPENAI_ORGANIZATION=

PULSEGPT_PROMPT="In one sentence, give me a higly motivational developer quote"
```

🚀 Add the card to your Pulse dashboard [Doc](https://laravel.com/docs/10.x/pulse#dashboard-customization):
```html
<livewire:pulse.gpt cols="3" />
```

**PulseGPT** is combining Laravel Pulse & OpenAI Laravel awesome work.