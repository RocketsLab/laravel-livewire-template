<div class="p-6 min-h-screen flex justify-center items-center login-background">
    <div class="w-full max-w-md">
        <div class="block w-full">
            <img class="rounded-lg h-16 mx-auto" src="/images/livewire-logo.png" alt="Livewire Laravel Application">
        </div>
        <form class="mt-8 bg-white rounded-lg shadow-xl overflow-hidden" wire:submit.prevent="submit">
            <div class="px-10 py-10 space-y-6">
                <h1 class="text-center font-bold text-3xl">Bem-vindo!</h1>
                <div class="mx-auto mt-6 w-24 border-b-2"></div>
                <x-text-input placeholder="Usuário" wire:model="email" name="email" />
                <x-text-input placeholder="Senha" wire:model="password" name="password" type="password"/>
                <label class="mt-6 select-none flex items-baseline" for="remember">
                    <input id="remember" class="mr-1" type="checkbox">
                    <span class="text-sm">Lembrar senha</span>
                </label>
                <div>
                    <a class="hover:underline" tabindex="-1" href="#reset-password">Esqueceu a senha?</a>
                </div>
            </div>
            <div class="px-10 py-4 bg-gray-100 border-t border-gray-200 flex justify-between items-center">
                <!--          <inertia-link :href="route('register')" class="hover:underline">Não tem conta? Registre-se!</inertia-link>-->
                <span></span>
                <button type="submit" class="btn-primary">Login</button>
            </div>
        </form>
    </div>
</div>
