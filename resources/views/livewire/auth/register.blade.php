<div class="p-6 min-h-screen flex justify-center items-center register-background">
    <div class="w-full max-w-md">
        <div class="block w-full">
            <img src="/images/livewire-logo.png" class="rounded-md mx-auto h-16" alt="Livewire Laravel Application">
        </div>
        <form class="mt-8 bg-white rounded-lg shadow-xl overflow-hidden" wire:submit.prevent="submit">
            <div class="px-10 py-10 space-y-5">
                <h1 class="text-center font-bold text-3xl">{{ __('auth.title.register') }}</h1>
                <div class="mx-auto mt-4 mb-6 w-24 border-b-2"></div>
                <div class="flex flex-col space-y-4">
                    <x-text-input wire:model="name" name="name" autofocus autocapitalize="off" placeholder="{{ __('auth.placeholders.name') }}" />
                    <x-text-input wire:model="email" name="email" placeholder="{{ __('auth.placeholders.user') }}" />
                    <x-text-input wire:model="password" name="password" type="password" placeholder="{{ __('auth.placeholders.password') }}" />
                    <x-text-input wire:model="password_confirmation" name="password_confirmation" type="password" placeholder="{{ __('auth.placeholders.confirm') }}" />
                </div>
            </div>
            <div class="px-10 py-4 bg-gray-100 border-t border-gray-200 flex justify-between items-center">
                <a href="{{ route('login') }}" class="hover:underline">{{ __('auth.havelogin') }}</a>
                <button class="btn-primary" type="submit">{{ __('auth.register.button') }}</button>
            </div>
        </form>
    </div>
</div>
