<div {{ $attributes->merge(['class' => 'bg-white rounded-lg shadow-md']) }}>
    @if(isset($title))
        <span class="text-2xl font-bold mb-3 mr-2">{{ $title }}</span>
    @endif
    @if(isset($subtitle))
            <span class="text-sm text-gray-500">{{ $subtitle }}</span>
    @endif
    {{ $slot }}
    @if(isset($footer))
        <div class="px-8 py-4 bg-gray-100 border-t rounded-b-lg border-gray-300 flex justify-between items-center">
            {{ $footer }}
        </div>
    @endif
</div>
