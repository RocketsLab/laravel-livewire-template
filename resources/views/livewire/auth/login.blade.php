<div class="p-6 min-h-screen flex justify-center items-center login-background">
    <div class="w-full max-w-md">
        <div class="block w-full">
            <img class="rounded-lg h-16 mx-auto" src="/images/livewire-logo.png" alt="Livewire Laravel Application">
        </div>
        <form class="mt-8 bg-white rounded-lg shadow-xl overflow-hidden" wire:submit.prevent="submit">
            <div class="px-10 py-10 space-y-6">
                <h1 class="text-center font-bold text-3xl">{{ __("auth.title.login") }}<h1>
                <div class="mx-auto mt-6 mb-6 w-24 border-b-2"></div>
                <div class="flex flex-col space-y-4">
                  <x-text-input placeholder="{{ __('auth.placeholders.user') }}" wire:model="email" name="email" />
                  <x-text-input placeholder="{{ __('auth.placeholders.password') }}" wire:model="password" name="password" type="password"/>
                </div>
                <label class="mt-6 select-none flex items-baseline" for="remember">
                    <input id="remember" class="mr-1" type="checkbox">
                    <span class="text-sm">{{ __("auth.remember") }}</span>
                </label>
                <div>
                    <a class="hover:underline" tabindex="-1" href="#reset-password">{{ __("auth.forgot.password") }}</a>
                </div>
            </div>
            <div class="px-10 py-4 bg-gray-100 border-t border-gray-200 flex justify-between items-center">
                <a href="/register" class="hover:underline">{{ __("auth.register.link") }}</a>
                <span></span>
                <button type="submit" class="btn-primary">{{ __("auth.login") }}</button>
            </div>
        </form>
    </div>
</div>
