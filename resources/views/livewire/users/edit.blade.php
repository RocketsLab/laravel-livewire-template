<div>
    @if(session()->has('alert'))
        <x-alert />
    @endif
    <h1 class="mb-8 font-bold text-3xl">
        <a href="{{ route('users.index') }}" class="text-green-400 hover:text-green-700">
            Usuários
        </a>
        <span class="text-3xl font-bold mx-2">/</span>
        <span class="text-3xl font-bold">
            {{ $user->name }}
            <small class="text-gray-500">({{ $user->email }})</small>
        </span>
    </h1>
    <div class="flex flex-1">
        <div class="hidden lg:block lg:w-3/12 pr-16">
            <h2 class="text-2xl font-bold mb-4 pb-2 border-b">#Dica</h2>
            <p class="text-normal text-gray-700 leading-tight mb-8">
                Preencha os dados do fornecedor e verifique os campos marcados com <span
                    class="text-green-400 font-bold">*</span>
                pois são campos obrigatórios.
            </p>
            <h2 class="text-2xl font-bold mb-4 pb-2 border-b">Lorem ipsum</h2>
            <p class="text-normal text-gray-700 leading-tight mb-8">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci aliquam assumenda aut autem
                consequuntur dolorum ducimus et fuga fugiat labore molestiae qui quia temporibus, ullam vitae voluptate,
                voluptates? Molestiae, rem.
            </p>
        </div>
        <!-- FORM -->
        <form wire:submit.prevent="submit" class="w-full lg:w-10/12">
            <x-card class="vld-parent">
                @include('livewire.users.partials.user-form')
                <x-slot name="footer">
                    <button class="btn-primary flex items-center" type="submit">
                        <span class="material-icons mr-2 leading-none">save</span>
                        Atualizar usuário
                    </button>
                </x-slot>
            </x-card>
        </form>
        <!--FORM END -->
    </div>
</div>
