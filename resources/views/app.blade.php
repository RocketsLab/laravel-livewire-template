<!doctype html>
<html lang="en" class="h-screen w-full bg-gray-200">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Application</title>
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.3.5/dist/alpine.min.js" defer></script>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Nunito&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.0.0/animate.min.css"/>
    <link rel="stylesheet" href="/css/app.css">
    <livewire:styles/>
</head>
<body class="h-full w-full">

<div class="flex flex-col">
    <div class="h-screen flex flex-col">
        <div class="md:flex flex-shrink-0">
            <div
                class="bg-green-900 md:flex-shrink-0 md:w-56 px-6 py-4 flex items-center justify-between md:justify-center">
                <a href="/">
                    <img src="/images/livewire-logo.png" alt="Livewire Laravel Application" class="h-10 rounded-md">
                </a>
                <!-- TODO: hamburger menu, responsive layout -->
                {{--                <t-dropdown position="right" class="md:hidden z-50">--}}
                {{--                    <svg class="fill-white w-6 h-6" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">--}}
                {{--                        <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"/>--}}
                {{--                    </svg>--}}
                {{--                    <template v-slot:dropdown class="menu-background">--}}
                {{--                        <div class="px-6 py-6 shadow-lg rounded menu-background">--}}
                {{--                            <main-menu :url="url()"/>--}}
                {{--                        </div>--}}
                {{--                    </template>--}}
                {{--                </t-dropdown>--}}
            </div>
            <div class="bg-white border-b w-full p-4 md:py-0 md:px-8 text-sm md:text-md flex justify-between items-center shadow-lg z-10">
                <div class="mt-1 mr-4"></div>
                <!-- TODO: dropdown component, and user menu dropdown -->
                {{--                <t-dropdown ref="userMenu" position="right">--}}
                {{--                    <div class="flex items-center cursor-pointer select-none group">--}}
                {{--                        <div class="dropdown-trigger flex items-center space-x-1">--}}
                {{--                            <span>{{ $page.auth.user.name }}</span>--}}
                {{--                            <icon class="dropdown-action" name="expand_more"/>--}}
                {{--                            <img :src="$page.auth.user.avatar" class="rounded-full w-12 h-12 border-4 border-gray-200">--}}
                {{--                        </div>--}}
                {{--                    </div>--}}
                {{--                    <template v-slot:dropdown>--}}
                {{--                        <inertia-link class="dropdown-item" @click="$refs.userMenu.close()" :href="route('user.profile')">Meu perfil</inertia-link>--}}
                {{--                        <inertia-link class="dropdown-item" :href="route('logout')" method="post">Sair</inertia-link>--}}
                {{--                    </template>--}}
                {{--                </t-dropdown>--}}
                <livewire:auth.usermenu/>
            </div>
        </div>
        <div class="flex flex-grow overflow-hidden">
            <x-main-menu class="menu-background flex-shrink-0 w-56 p-8 hidden md:block overflow-y-auto"/>
            <div class="flex-1 px-4 py-8 md:p-8 overflow-y-auto" scroll-region>
                <x-notify />
                @yield('content')
            </div>
        </div>
    </div>
</div>

<livewire:scripts/>
</body>
</html>
