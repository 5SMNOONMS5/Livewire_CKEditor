<div>
    <h1>demo page</h1>
    <form wire:submit.prevent="submit">

        <x-editor property="demo.description"
                  id="description"/>

        <button type="submit">Save</button>
    </form>
</div>
