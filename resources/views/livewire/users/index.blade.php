<div>
    <div class="flex justify-between items-center mb-6">
        <h1 class="font-bold text-3xl">Usuários</h1>
        <div class="inline-flex space-x-2">
            <button class="btn-outline @if($showFilter) bg-green-200 text-green-600 @endif leading-none" wire:click="toggleFilter">
                <span class="material-icons text-base font-bold">
                    @if($showFilter) clear @else filter_alt @endif
                </span>
            </button>
            <a class="btn-primary ml-auto" href="{{ route('users.create') }}">
                <span>Novo</span>
                <span class="hidden md:inline">Usuário</span>
            </a>
        </div>
    </div>
    @if($showFilter)
        <div class="mb-4 inline-flex space-x-2 w-1/2">
            <input placeholder="Busque pelo nome ou email do usuário" type="text" class="form-input" wire:model="search">
            <button class="btn-primary flex items-center" wire:click="clear">
                <span class="material-icons mr-2 leading-none text-base">clear</span>
                Limpar
            </button>
        </div>
    @endif
    <x-card class="w-full ld:w-max-3xl vld-parent overflow-x-auto">
{{--        <loading :active.sync="busy" :is-full-page="false"/>--}}
        @if(count($users))
            <table class="w-full whitespace-no-wrap">
                <tr class="text-left font-bold bg-gray-100">
                    <th class="px-6 py-6">Usuário</th>
                    <th class="px-6 py-6"></th>
                </tr>
                @foreach($users as $user)
                    <tr class="hover:bg-green-100 focus-within:bg-green-100">
                        <td class="border-t px-6 py-6 items-start focus:text-green-500 cursor-pointer" wire:click="editUser({{ $user->id }})">
                            <div class="flex flex-col">
                                <span>{{ $user->name }}</span>
                                <small class="text-gray-500">{{ $user->email }}</small>
                            </div>
                        </td>
                        <td class="border-t px-6 py-6 items-start focus:text-green-500">

                        </td>
                    </tr>
                @endforeach
            </table>
        @else
            <x-empty-list class="mt-4" title="Não há usuários" subtitle="Cadastre um usuário ou modifique a busca." icon="person"></x-empty-list>
        @endif
    </x-card>
    {{ $users->links() }}
</div>
