<?php


namespace Kurban\FilamentEaster\Livewire;

use Livewire\Attributes\On;
use Livewire\Component;

class KonamiComponent extends Component
{
    public string $keys;
    public string $backgroundImage;
    public string $modalContent;

    public array $codes;
    public object $content;

    public function mount(string $keys, string $backgroundImage, string $modalContent)
    {
        $this->codes = json_decode($keys);
        $this->backgroundImage = $backgroundImage;
        $this->content = json_decode($modalContent);
    }

    #[On('konamiCatched')]
    public function open()
    {
        $this->dispatch('open-modal', id: 'konami-modal');
    }

    public function render()
    {
        return view('easter::konami-component');
    }
}
