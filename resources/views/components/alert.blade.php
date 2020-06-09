<div x-data="{ open: true }" x-show="open" @click.away="open = false"
     class="w-full border-l-4 border-green-700 bg-green-100 rounded-md shadow-lg mb-4 p-4 flex items-center justify-between">
    <div class="inline flex items-center">
        <span class="material-icons mr-4"></span>
        <span class="text-green-700">{{ session('alert')['message'] }}</span>
    </div>
    <div>
        <span class="material-icons font-bold text-green-500 cursor-pointer hover:text-green-700" @click="open = false">clear</span>
    </div>
</div>
