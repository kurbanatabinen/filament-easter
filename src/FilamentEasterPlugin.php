<?php

namespace Kurban\FilamentEaster;

use Filament\Contracts\Plugin;
use Filament\Panel;
use Filament\View\PanelsRenderHook;
use Illuminate\Support\Facades\Blade;

class FilamentEasterPlugin implements Plugin
{
    public array $keys = [];
    public string $backgroundImage = '';
    public array $modalContent = [];

    public function getId(): string
    {
        return 'filament-easter';
    }

    public static function make(): static
    {
        return app(static::class);
    }

    public function keys(array $keys) {
        $this->keys = $keys;

        return $this;
    }

    public function backgroundImage(string $backgroundImage) {
        $this->backgroundImage = $backgroundImage;

        return $this;
    }

    public function modalContent(array $modalContent) {
        $this->modalContent = $modalContent;

        return $this;
    }

    public function register(Panel $panel): void
    {
        $panel->renderHook(
            PanelsRenderHook::BODY_END,
            fn () :string => Blade::render("@livewire('konami-component', [
                'modalContent' => '".json_encode($this->modalContent, JSON_HEX_APOS)."',
                'keys' => '".json_encode($this->keys, JSON_HEX_APOS)."',
                'backgroundImage' => '".$this->backgroundImage."',
            ])"),
        );
    }

    public function boot(Panel $panel): void
    {
    }
    

    public static function get(): static
    {
        /** @var static $plugin */
        $plugin = filament(app(static::class)->getId());

        return $plugin;
    }
}
