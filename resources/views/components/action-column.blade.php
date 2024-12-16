<div>
    <div x-data="{ modalIsOpen: false }">
        <button @click="$dispatch('edit_data', {id: {{ $id }}}), modalIsOpen = true" type="button"
            class="cursor-pointer whitespace-nowrap rounded-md bg-black px-4 py-2 text-center text-sm font-medium tracking-wide text-neutral-100 transition hover:opacity-75 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-black active:opacity-100 active:outline-offset-0 dark:bg-white dark:text-black dark:focus-visible:outline-white">Edit</button>
        <div x-cloak x-show="modalIsOpen" x-transition.opacity.duration.200ms x-trap.inert.noscroll="modalIsOpen"
            @keydown.esc.window="modalIsOpen = false" @click.self="modalIsOpen = false"
            class="fixed inset-0 z-30 flex items-end justify-center bg-black/20 p-4 pb-8 backdrop-blur-md sm:items-center lg:p-8"
            role="dialog" aria-modal="true" aria-labelledby="defaultModalTitle">
            <!-- Modal Dialog -->
            <div x-show="modalIsOpen"
                x-transition:enter="transition ease-out duration-200 delay-100 motion-reduce:transition-opacity"
                x-transition:enter-start="opacity-0 scale-50" x-transition:enter-end="opacity-100 scale-100"
                class="flex max-w-lg flex-col gap-4 overflow-hidden rounded-md border border-neutral-300 bg-white text-neutral-600 dark:border-neutral-700 dark:bg-neutral-900 dark:text-neutral-300">
                <!-- Dialog Header -->
                <div
                    class="flex items-center justify-between border-b border-neutral-300 bg-neutral-50/60 p-4 dark:border-neutral-700 dark:bg-neutral-950/20">
                    <h3 id="defaultModalTitle" class="font-semibold tracking-wide text-neutral-900 dark:text-white">
                        Tambah Data Siswa</h3>
                    <button @click="modalIsOpen = false" aria-label="close modal">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" aria-hidden="true"
                            stroke="currentColor" fill="none" stroke-width="1.4" class="w-5 h-5">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>
                <!-- Dialog Body -->
                <div class="px-4 py-8">
                    <p class="pb-2">Pastikan data yang ditambahkan sudah sesuai.</p>
                    <form wire:submit="store">
                        <div class="pb-2 flex w-full flex-col gap-1 text-neutral-600 dark:text-neutral-300">
                            <label for="textInputDefault" class="w-fit pl-0.5 text-sm">Nama Siswa</label>
                            <input id="textInputDefault" type="text"
                                class="w-full rounded-md border border-neutral-300 bg-neutral-50 px-2 py-2 text-sm focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-black disabled:cursor-not-allowed disabled:opacity-75 dark:border-neutral-700 dark:bg-neutral-900/50 dark:focus-visible:outline-white"
                                wire:model="nama" placeholder="Nama Siswa" />
                        </div>
                        <div class="pb-2 flex w-full flex-col gap-1 text-neutral-600 dark:text-neutral-300">
                            <label for="textInputDefault" class="w-fit pl-0.5 text-sm">Tempat Lahir</label>
                            <input id="textInputDefault" type="text"
                                class="w-full rounded-md border border-neutral-300 bg-neutral-50 px-2 py-2 text-sm focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-black disabled:cursor-not-allowed disabled:opacity-75 dark:border-neutral-700 dark:bg-neutral-900/50 dark:focus-visible:outline-white"
                                wire:model="tempat_lahir" placeholder="Tempat Lahir" />
                        </div>
                        <div class="pb-2 flex w-full flex-col gap-1 text-neutral-600 dark:text-neutral-300">
                            <label for="textInputDefault" class="w-fit pl-0.5 text-sm">Tanggal Lahir</label>
                            <input id="textInputDefault" type="date"
                                class="w-full rounded-md border border-neutral-300 bg-neutral-50 px-2 py-2 text-sm focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-black disabled:cursor-not-allowed disabled:opacity-75 dark:border-neutral-700 dark:bg-neutral-900/50 dark:focus-visible:outline-white"
                                wire:model="tanggal_lahir" />
                        </div>
                        <div class="relative flex w-full flex-col gap-1 text-neutral-600 dark:text-neutral-300">
                            <label for="jenis_kelamin" class="w-fit pl-0.5 text-sm">Jenis Kelamin</label>
                            <select id="jenis_kelamin" wire:model="jenis_kelamin"
                                class="w-full appearance-none rounded-md border border-neutral-300 bg-neutral-50 px-4 py-2 text-sm focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-black disabled:cursor-not-allowed disabled:opacity-75 dark:border-neutral-700 dark:bg-neutral-900/50 dark:focus-visible:outline-white">
                                <option selected>Pilih Jenis Kelamin</option>
                                <option value="Laki - laki">Laki - laki</option>
                                <option value="Perempuan">Perempuan</option>
                            </select>
                        </div>
                        <button type="submit"
                            class="mt-4 cursor-pointer whitespace-nowrap rounded-md bg-black px-4 py-2 text-center text-sm font-medium tracking-wide text-neutral-100 transition hover:opacity-75 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-black active:opacity-100 active:outline-offset-0 dark:bg-white dark:text-black dark:focus-visible:outline-white">Simpan
                            Perubahan</button>
                    </form>
                </div>
            </div>
        </div>
        <x-button @click="$dispatch('hapus_data', {id: {{ $id }}})">Hapus</x-button>
    </div>
</div>
