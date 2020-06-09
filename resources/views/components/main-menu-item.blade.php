<a class="flex items-center group py-2" href="{{ $href }}">
    <span class="{{ $isUrl() ? 'menu-item-active' : 'menu-item' }} material-icons mr-2 group-hover:text-white">{{ $icon }}</span>
    <span class="{{ $isUrl() ? 'menu-item-active' : 'menu-item' }} group-hover:text-white">{{ $title }}</span>
</a>
