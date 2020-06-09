<div class="py-4">
    <div class="px-8 py-4">
        <x-text-input container-class="w-full lg:w-1/2" label="Nome *" placeholder="Nome" wire:model="name"
                      name="name"></x-text-input>

    </div>
    <div class="px-8 py-4">
        <x-text-input container-class="w-full" label="Email *" placeholder="email" name="email"
                      wire:model="email"></x-text-input>
    </div>
    <div class="px-8 py-4 flex space-x-4">
        <x-text-input container-class="w-1/2" label="Senha *" placeholder="senha" name="password"
                      wire:model="password" type="password"></x-text-input>
        <x-text-input container-class="w-1/2" label="Confirmar senha *" placeholder="confirmar senha"
                      name="password_confirmation" wire:model="password_confirmation" type="password"></x-text-input>
    </div>
</div>
