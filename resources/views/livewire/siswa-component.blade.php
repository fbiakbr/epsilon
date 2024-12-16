<div x-on:hapus_data.window="$wire.hapus_data($event.detail.id)">
    {{-- To attain knowledge, add things every day; To attain wisdom, subtract things every day. --}}
    <div class="p-6 lg:p-8 bg-white border-b border-gray-200">
        <h1 class="mb-4 text-2xl font-medium text-gray-900">
            Data Siswa
        </h1>
        <div class="mb-4">
            <livewire:add-siswa-modal />
        </div>
        <livewire:tabel-siswa />
    </div>

</div>
