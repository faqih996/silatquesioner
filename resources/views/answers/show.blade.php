<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('Questioner Answer Details') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">

                    <h1 class="mb-6 text-2xl font-bold">Questioner Answer Details</h1>

                    <div class="grid grid-cols-1 gap-6 rounded-lg lg:grid-cols-2">
                        <!-- Field 1 -->
                        <div>
                            <h2 class="text-lg font-semibold">Alasan kamu
                                            bergabung
                                            Perisai Diri?</h2>
                            <p class="text-gray-700">{{ $questioner->reasonJoin }}</p>
                        </div>

                        <!-- Field 2 -->
                        <div>
                            <h2 class="text-lg font-semibold">Berapa lama
                                            kamu bergabung Perisai Diri?</h2>
                            <p class="text-gray-700">{{ $questioner->howLong }}</p>
                        </div>

                        <!-- Field 3 -->
                        <div>
                            <h2 class="text-lg font-semibold">Tujuan kamu
                                            mengikuti latihan?</h2>
                            <p class="text-gray-700">{{ $questioner->objective }}</p>
                        </div>

                        <!-- Field 4 -->
                        <div>
                            <h2 class="text-lg font-semibold">Apa Impian
                                            Kamu di Perisai Diri?</h2>
                            <p class="text-gray-700">{{ $questioner->goal }}</p>
                        </div>

                        <!-- Field 5 -->
                        <div>
                            <h2 class="text-lg font-semibold">Seberapa
                                            yakin kamu bisa mencapai Impian mu?</h2>
                            <p class="text-gray-700">{{ $questioner->confident }}</p>
                        </div>

                        <!-- Field 6 -->
                        <div>
                            <h2 class="text-lg font-semibold">Faktor apa saja yang membuatmu bersemangat/Nyaman ketika latihan?</h2>
                            <p class="text-gray-700">{{ $questioner->spirit }}</p>
                        </div>

                        <!-- Field 7 -->
                        <div>
                            <h2 class="text-lg font-semibold">Faktor apa saja yang membuatmu tidak bersemangat/Nyaman ketika latihan?</h2>
                            <p class="text-gray-700">{{ $questioner->notSpirit }}</p>
                        </div>

                        <!-- Field 8 -->
                        <div>
                            <h2 class="text-lg font-semibold">Materi apa
                                            yang kamu Sukai di Perisai Diri?</h2>
                            <p class="text-gray-700">{{ $questioner->material }}</p>
                        </div>

                        <!-- Field 9 -->
                        <div>
                            <h2 class="text-lg font-semibold">Aktivitas
                                            apa yang kamu Sukai di Perisai Diri?</h2>
                            <p class="text-gray-700">{{ $questioner->activity }}</p>
                        </div>

                        <!-- Field 10 -->
                        <div>
                            <h2 class="text-lg font-semibold">Perubahan
                                            apa yang kamu rasakan setelah bergabung di Perisai Diri?</h2>
                            <p class="text-gray-700">{{ $questioner->change }}</p>
                        </div>

                        <!-- Field 11 -->
                        <div>
                            <h2 class="text-lg font-semibold">Manfaat
                                            apa yang kamu rasakan setelah bergabung di Perisai Diri?</h2>
                            <p class="text-gray-700">{{ $questioner->benefit }}</p>
                        </div>

                        <!-- Field 12 -->
                        <div>
                            <h2 class="text-lg font-semibold">Hal apa yang paling berkesan yang kamu rasakan di Perisai Diri?</h2>
                            <p class="text-gray-700">{{ $questioner->impressive }}</p>
                        </div>

                        <!-- Field 13 -->
                        <div>
                            <h2 class="text-lg font-semibold">Hal apa yang paling Membanggakan yang alami selama di Perisai Diri?</h2>
                            <p class="text-gray-700">{{ $questioner->proud }}</p>
                        </div>

                        <!-- Field 14 -->
                        <div>
                            <h2 class="text-lg font-semibold">Perkataan atau Hal Menyenangkan Apa yang pernah kamu terima dari pelatih selama latihan?</h2>
                            <p class="text-gray-700">{{ $questioner->touchingWords }}</p>
                        </div>

                        <!-- Field 15 -->
                        <div>
                            <h2 class="text-lg font-semibold">Hal apa yang paling Membanggakan yang alami selama di Perisai Diri?</h2>
                            <p class="text-gray-700">{{ $questioner->harmingWords }}</p>
                        </div>

                        <!-- Field 16 -->
                        <div>
                            <h2 class="text-lg font-semibold">Hal apa yang kamu harap tidak terjadi lagi selama latihan atau mengikuti kegiatan di Perisai Diri?</h2>
                            <p class="text-gray-700">{{ $questioner->notHappenAgain }}</p>
                        </div>

                        <!-- Field 17 -->
                        <div>
                            <h2 class="text-lg font-semibold">Hambatan apa yang kamu hadapi untuk datang latihan, saat latihan dan setelah latihan?</h2>
                            <p class="text-gray-700">{{ $questioner->obstacle }}</p>
                        </div>

                        <!-- Field 18 -->
                        <div>
                            <h2 class="text-lg font-semibold">Kenapa kamu masih mengikuti latihan hingga sekarang?</h2>
                            <p class="text-gray-700">{{ $questioner->why }}</p>
                        </div>

                        <!-- Field 19 -->
                        <div>
                            <h2 class="text-lg font-semibold">Apa kritik kamu terkait latihan dan kegiatan yang selama ini?</h2>
                            <p class="text-gray-700">{{ $questioner->criticism }}</p>
                        </div>

                        <!-- Field 20 -->
                        <div>
                            <h2 class="text-lg font-semibold">Apa Masukan kamu terkait latihan dan kegiatan yang kedepannya?</h2>
                            <p class="text-gray-700">{{ $questioner->suggestion }}</p>
                        </div>

                        <!-- Field 21 -->
                        <div>
                            <h2 class="text-lg font-semibold">Apa Kamu memiliki Ide/Rekomendasi latihan dan kegiatan kedepannya?</h2>
                            <p class="text-gray-700">{{ $questioner->recommendation }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

</x-app-layout>
