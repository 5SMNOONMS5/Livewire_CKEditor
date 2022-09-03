<div wire:ignore>
    <textarea
              id="{{ $attributes['id'] }}"
              wire:model.defer="{{ $attributes['property'] }}">
    </textarea>

    <script>
        document.addEventListener("livewire:load", () => {
            ClassicEditor
                .create(document.querySelector(`#{{ $attributes['id'] }}`))
                .then(editor => {
                    editor.model.document.on('change:data', (e) => {
                    @this.set('{{ $attributes['property'] }}', editor.getData());
                    })
                })
                .catch(error => {
                    console.error(error);
                });
        });
    </script>
</div>


