<div x-data="{ open: false, type: 'normal', message: '', styles: { bg: {normal: 'bg-gray-100', danger: 'bg-red-100', success: 'bg-green-100', info: 'bg-blue-100' }, text: {normal: 'text-gray-700', danger: 'text-red-700', success: 'text-green-700', info: 'text-blue-700'} } }"
     x-init="() => { window.livewire.on('notify', data => { open = true; type = data.type; message = data.message }); setTimeout(open = false, 3000) }"
     x-show="open" x-ref="notify"
     @click.away="open = false"
     class="fixed z-50 right-0 mr-8 border-l-4 border-gray-700 rounded-md shadow-lg w-1/4 p-6 flex items-center justify-between animate__animated animate__bounceInRight"
     :class="styles.bg[type]"
>
    <div class="inline-flex items-center">
        <span class="material-icons mr-4" :class="styles.text[type]" >check_circle</span>
        <span :class="styles.text[type]" x-text="message"></span>
    </div>
    <div>
        <span class="material-icons font-bold text-green-500 cursor-pointer hover:text-green-700" @click="open = false">clear</span>
    </div>
</div>
