<div>
    @if(session()->has('alert'))
        <x-alert />
    @endif
    <h1 class="mb-8 font-bold text-3xl">
        <a href="{{ route('users.index') }}" class="text-green-400 hover:text-green-700">
            {{ __('members.titles.users' )}}
        </a>
        <span class="text-3xl font-bold mx-2">/</span>
        <span class="text-3xl font-bold">
            {{ $user->name }}
            <small class="text-gray-500">({{ $user->email }})</small>
        </span>
    </h1>
    <div class="flex flex-1">
        <div class="hidden lg:block lg:w-3/12 pr-16">
            <h2 class="text-2xl font-bold mb-4 pb-2 border-b">#{{ __('members.titles.tip') }}</h2>
            <p class="text-normal text-gray-700 leading-tight mb-8">
                {!! html_entity_decode(__('members.tips.users-edit')) !!}
            </p>
            <h2 class="text-2xl font-bold mb-4 pb-2 border-b">{{ __('members.titles.lorem-ipsum') }}</h2>
            <p class="text-normal text-gray-700 leading-tight mb-8">
                {{ __('members.tips.lorem-ipsum') }}
            </p>
        </div>
        <!-- FORM -->
        <form wire:submit.prevent="submit" class="w-full lg:w-10/12">
            <x-card class="vld-parent">
                @include('livewire.users.partials.user-form')
                <x-slot name="footer">
                    <button class="btn-primary flex items-center" type="submit">
                        <span class="material-icons mr-2 leading-none">save</span>
                        {{ __('members.buttons.save-user') }}
                    </button>
                </x-slot>
            </x-card>
        </form>
        <!--FORM END -->
    </div>
</div>
