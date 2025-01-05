<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('Questioner Message') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <table class="w-full text-sm border border-collapse border-gray-200 table-auto">
                        <thead class="bg-gray-100">
                            <tr>
                                <th class="px-4 py-2 text-center border border-gray-300">#</th>
                                <th class="px-4 py-2 text-center border border-gray-300">Message</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($questions as $index => $question)
                                <tr>
                                    <td class="px-4 py-2 text-center border border-gray-300">{{ $index + 1 }}</td>
                                    <td class="px-4 py-2 border border-gray-300">
                                        @role('userOne')
                                            {{ $question->messageToPerson1 ?? '' }}
                                        @endrole

                                        @role('userTwo')
                                            {{ $question->messageToPerson2 ?? '' }}
                                        @endrole

                                        @role('userThree')
                                            {{ $question->messageToPerson3 ?? '' }}
                                        @endrole

                                        @role('userFour')
                                            {{ $question->messageToPerson4 ?? '' }}
                                        @endrole
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
