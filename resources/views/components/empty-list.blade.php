@props([
    'icon' => 'list',
    'title' => __('members.notices.no-items'),
    'subtitle' => ''
])

<div {{ $attributes->merge(['class' => 'flex flex-1 align-middle items-center flex-col']) }}>
    <span class="material-icons p-4 m-4 rounded-full bg-gray-300">
        {{ $icon }}
    </span>
    <span class="text-3xl text-gray-600 mb-8">
      {{ $title }}
    </span>
    @if($subtitle)
        <span class="text-2xl text-gray-500 mb-8">
            {{ $subtitle }}
        </span>
    @endif
    {{ $slot }}
</div>
