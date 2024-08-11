<div>
    <form wire:submit.prevent="createPoll" action="">
        <label for="">Poll Title</label>
        <input type="text" wire:model="title" />

        <div class="mb-4 mt-4">
            <button class="btn" wire:click.prevent="addOption">Add Option</button>
        </div>
        <div class="">
            @foreach ($options as $index => $option)
                <div class="mb-4">
                    <label for="">Option {{ $index + 1 }}</label>

                    <div class="flex gap-2">
                        <input type="text" wire:model="options.{{ $index }}" />
                        <button class="btn" wire:click.prevent="removeOption({{ $index }})">Remove</button>
                    </div>
                </div>
            @endforeach
        </div>
        <button class="btn" type="submit"> Submit</button>
    </form>
</div>
