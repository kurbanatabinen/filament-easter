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
keys(): Set the key sequence to trigger the Easter egg.
backgroundImage(): Set the background image URL for the modal.
modalContent(): Set the content of the modal, including title, content, and footer.
```



✅ Support:
If you discover any issues or have questions, please create an issue.

**Filament Easter 🥚** was created for fun