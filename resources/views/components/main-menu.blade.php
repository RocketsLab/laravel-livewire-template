<div {{ $attributes }}>
    <div class="mb-4">
        <x-main-menu-item active-route="home" href="{{ route('home') }}" title="{{ __('members.menu.dashboard') }}" icon="dashboard" />
        <x-main-menu-item active-route="users.index" href="{{ route('users.index') }}" title="{{ __('members.menu.users') }}" icon="person" />
    </div>
    <div class="hidden p-4 left-0 bottom-0 md:block md:absolute text-center w-56 bg-gray-500">
        <span class="text-gray-800 font-bold text-sm">ver. 0.1.0.08062020</span>
    </div>
</div>
