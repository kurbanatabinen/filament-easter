<div>
    <x-filament::modal id="konami-modal" style="background:url({{ $backgroundImage ??= '' }})" alignment="center">

        @if (isset($content->title))
            <x-slot name="heading">
                {{ $content->title }}
            </x-slot>
        @endif

        @if (isset($content->content))
            <p class="text-center">{{ $content->content }}</p>
        @endif

        @if (isset($content->footer))
            <x-slot name="footer" >
                <p class="text-sm text-gray-400 text-center">{{ $content->footer }}</p>
            </x-slot>
        @endif

    </x-filament::modal>
    <script>

        let easterCode = @php echo  json_encode(isset($codes) ? $codes : ['ArrowUp', 'ArrowUp', 'ArrowDown', 'ArrowDown', 'ArrowLeft', 'ArrowRight', 'ArrowLeft', 'ArrowRight', 'b', 'a'])  @endphp;
        let easterCodePosition = 0;

        document.addEventListener('keydown', function(e) {
            if (e.key === easterCode[easterCodePosition]) {
                easterCodePosition++;

                if (easterCodePosition === easterCode.length) {
                    Livewire.dispatch('konamiCatched');
                    easterCodePosition = 0;
                }
            } else {
                easterCodePosition = 0;
            }
        });
    </script>
</div>