<div class="py-4">
    <div class="px-8 py-4">
        <x-text-input container-class="w-full lg:w-1/2" label="{{ __('auth.placeholders.name' )}} *" placeholder="{{ __('auth.placeholders.name' )}}" wire:model="name"
                      name="name"></x-text-input>

    </div>
    <div class="px-8 py-4">
        <x-text-input container-class="w-full" label="Email *" placeholder="{{ __('auth.placeholders.user' )}}" name="email"
                      wire:model="email"></x-text-input>
    </div>
    <div class="px-8 py-4 flex space-x-4">
        <x-text-input container-class="w-1/2" label="{{ __('auth.placeholders.password' )}} *" placeholder="{{ __('auth.placeholders.password' )}}" name="password"
                      wire:model="password" type="password"></x-text-input>
        <x-text-input container-class="w-1/2" label="{{ __('auth.placeholders.confirm' )}} *" placeholder="{{ __('auth.placeholders.confirm' )}}"
                      name="password_confirmation" wire:model="password_confirmation" type="password"></x-text-input>
    </div>
</div>
