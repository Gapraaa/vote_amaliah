<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/output.css')
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" rel="stylesheet">
    <link rel="icon" href="{{ asset('asset/image/logo title.png') }}" type="image/icon" />
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <title>Smk Amaliah 1&2 Ciawi</title>
    <style>
        .dropdown-content {
            max-height: 0;
            overflow: hidden;
            transition: max-height 0.3s ease-out;
        }

        .dropdown-content.show {
            max-height: 500px;
            overflow: auto;
        }

        input:checked+label svg {
            transform: rotate(180deg);
        }
    </style>
</head>

<body class="bg-gray-200">
    <div class="flex justify-center items-center min-h-screen">
        <div class="min-h-screen max-w-5xl mx-auto grid md:grid-cols-2 lg:grid-cols-2 gap-10 py-5">
            @foreach ($candidates as $candidate)
                <div class="bg-white shadow-sm rounded-2xl overflow-hidden max-w-xs">
                    <div class="rounded-lg p-8 w-full max-w-xs">
                        <div class="flex flex-col items-center">
                            <div class="flex mb-4">
                                <img class="inline-block w-full h-auto rounded-lg object-cover transform transition duration-500 ease-in-out hover:scale-110 hover:shadow-lg"
                                    src="{{ asset('storage/' . $candidate->candidate_image) }}" alt="foto ketua osis">
                            </div>
                            <h2 class="text-lg md:text-xl font-semibold text-center font-montserrat mt-2 mb-2">
                                {{ $candidate->ketua->name }} & {{ $candidate->wakil->name ?? '' }}
                            </h2>
                            <hr class="w-[210px] h-0.4 bg-[#D7D7D7] rounded-md my-2.5">
                            <p class="text-abu-200 font-medium font-poppins">
                                {{ $candidate->ketua->kelas->nama_kelas }}
                                @if ($candidate->wakil)
                                    & {{ $candidate->wakil->kelas->nama_kelas }}
                                @endif
                            </p>
                            <p class="text-hitam-200 font-semibold font-poppins text-2xl mt-3">{{ $candidate->name }}
                            </p>
                        </div>

                        <form action="{{ route('vote.store') }}" method="POST" class="mt-4">
                            @csrf
                            <input type="hidden" name="candidate_id" value="{{ $candidate->id }}">
                            <button type="submit"
                                class="font-montserrat font-semibold w-full h-[44px] bg-ijo-400 hover:bg-ijo-360 transition duration-200 ease-in-out active:bg-ijo-200 focus:outline-none focus:ring focus:ring-ijomuda text-white py-2 rounded-full">
                                Vote Ketua OSIS
                            </button>
                        </form>

                        <div class="mt-4">
                            <input type="checkbox" id="toggle{{ $candidate->id }}" class="hidden">
                            <label for="toggle{{ $candidate->id }}" onclick="toggleSection('{{ $candidate->id }}')"
                                class="w-full text-center font-montserrat font-medium text-black hover:underline flex items-center justify-center cursor-pointer">
                                Lihat visi misi mereka
                                <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22"
                                    viewBox="0 0 24 24" class="ml-1 transition-transform duration-300 transform"
                                    style="fill: #222222;">
                                    <path d="m6.293 13.293 1.414 1.414L12 10.414l4.293 4.293 1.414-1.414L12 7.586z">
                                    </path>
                                </svg>
                            </label>

                            <div id="lihat-visi-misi{{ $candidate->id }}" class="dropdown-content mt-2 text-gray-800">
                                <div class="mt-[10px]">
                                    <h1 class="text-[22px] font-montserrat font-semibold text-black">Visi</h1>
                                    <p class="mt-[6px] text-abu-200 font-poppins text-base">{{ $candidate->visi }}</p>
                                </div>

                                <div class="mt-[10px]">
                                    <h1 class="text-[22px] font-montserrat font-semibold text-black">Misi</h1>
                                    <ol class="list-decimal pl-8 mt-[6px] text-abu-200 font-poppins text-base">
                                        @foreach (explode(PHP_EOL, $candidate->misi) as $misi)
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

<script>
    function toggleSection(id) {
        // Menutup semua dropdown yang terbuka kecuali yang sedang diklik
        document.querySelectorAll('.dropdown-content').forEach(section => {
            if (section.id !== 'lihat-visi-misi' + id) {
                section.classList.remove('show');
            }
        });

        // Membuka atau menutup dropdown yang diklik berdasarkan ID
        const section = document.getElementById('lihat-visi-misi' + id);
        section.classList.toggle('show');
    }
</script>

</html>
