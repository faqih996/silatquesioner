<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('Questioner Answer Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <table class="table" id="answer-table">
                        <thead>
                            <tr class="items-center text-center">
                                <th class="px-2 py-2">#</th>
                                <th class="px-2 py-2">Berapa lama</th>
                                <th class="px-3 py-2">Tujuan</th>
                                <th class="px-3 py-2">Impian</th>
                                <th class="px-3 py-2">Favorit</th>
                                <th class="px-3 py-2">Action</th>
                            </tr>
                        </thead>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
