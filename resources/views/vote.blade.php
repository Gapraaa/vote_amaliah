<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/output.css')
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" rel="stylesheet">
    <title>Vote Ketua OSIS</title>
    <style>
        .dropdown-content {
            max-height: 0;
            overflow: hidden;
            transition: max-height 0.3s ease-out;
        }

        input:checked + label svg {
            transform: rotate(180deg);
        }
    </style>
</head>

<body class="bg-putih-200">
    <div class="flex items-center justify-center sm:p-10 p-5 lg:px-10 bg-gray-100">
        <div class="min-h-screen max-w-5xl mx-auto grid md:grid-cols-2 lg:grid-cols-2 gap-x-14 gap-y-5">
            @foreach ($candidates as $candidate)
                <div class="bg-white shadow-sm rounded-2xl overflow-hidden max-w-xs">
                    <div class="p-8 w-full">
                        <div class="flex justify-between items-center mb-4">
                            <!-- Gambar Wakil -->
                            @if ($candidate->wakil)
                                <div class="text-center">
                                    <img class="w-[80px] h-[80px] bg-gray-300 rounded-full"
                                         src="{{ $candidate->wakil_image ? asset('storage/' . $candidate->wakil_image) : '/image/default-wakil.jpg' }}" alt="Wakil">
                                    <h2 class="text-lg font-bold font-montserrat">{{ $candidate->wakil->name }}</h2>
                                    <p class="text-abu-200 font-medium font-poppins">{{ $candidate->wakil->kelas->nama_kelas ?? 'Tidak ada kelas' }}</p>
                                </div>
                            @endif

                            <!-- Gambar Ketua -->
                            <div class="text-center">
                                <img class="w-[80px] h-[80px] bg-gray-300 rounded-full"
                                     src="{{ $candidate->ketua_image ? asset('storage/' . $candidate->ketua_image) : '/image/default-ketua.jpg' }}" alt="Ketua">
                                <h2 class="text-lg font-bold font-montserrat">{{ $candidate->ketua->name }}</h2>
                                <p class="text-abu-200 font-medium font-poppins">{{ $candidate->ketua->kelas->nama_kelas ?? 'Tidak ada kelas' }}</p>
                            </div>
                        </div>

                        <!-- Vote Button -->
                        <div class="mt-4">
                            <form action="{{ route('vote.store') }}" method="POST">
                                @csrf
                                <input type="hidden" name="candidate_id" value="{{ $candidate->id }}">
                                <button
                                    class="font-montserrat font-semibold w-full h-[42px] bg-ijo-200 hover:bg-ijo-400 transition duration-200 ease-in-out text-white py-2 rounded-full">
                                    Vote Ketua OSIS
                                </button>
                            </form>
                        </div>

                        <!-- Visi & Misi Section -->
                        <div class="mt-4">
                            <input type="checkbox" id="toggle{{ $candidate->id }}" class="hidden">
                            <label for="toggle{{ $candidate->id }}"
                                   class="w-full text-center font-montserrat font-medium text-hitam-200 hover:underline flex items-center justify-center cursor-pointer">
                                Lihat visi misi mereka
                                <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24" class="ml-1 transition-transform duration-300 transform">
                                    <path d="m6.293 13.293 1.414 1.414L12 10.414l4.293 4.293 1.414-1.414L12 7.586z"></path>
                                </svg>
                            </label>

                            <div id="lihat-visi-misi{{ $candidate->id }}" class="dropdown-content mt-2 text-gray-800">
                                <div class="mt-4">
                                    <h1 class="text-lg font-semibold text-black">Visi</h1>
                                    <p class="mt-2">{{ $candidate->visi }}</p>
                                </div>
                                <div class="mt-4">
                                    <h1 class="text-lg font-semibold text-black">Misi</h1>
                                    <ol class="list-decimal pl-8 mt-2">
                                        @foreach (explode("\n", $candidate->misi) as $misi)
                                            <li>{{ $misi }}</li>
                                        @endforeach
                                    </ol>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</body>
@vite('resources/js/vote.js')
</html>
