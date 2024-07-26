<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>

    <h1>Ini Halaman Blog</h1>
    <div class="container py-3 px-3 flex flex-col gap-5 justify-center items-center">
        <img class="object-contain w-2/4 rounded-xl border-4 border-blue-300 text-center"
            src="{{ asset('img/perpus1.jpg') }}" alt="">
        <h1 class="font-semibold text-2xl text-center">Perpustakaan 1</h1>
        <p class="text-md text-pretty text-justify px-20">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Fuga,
            fugit suscipit. Repellat in maiores, ipsam architecto officiis, eum porro quos beatae consectetur voluptas
            quasi magnam nobis numquam nemo libero voluptatibus alias rem accusantium commodi nihil maxime, voluptates
            saepe asperiores reiciendis? Laborum enim qui inventore eveniet possimus vel magnam, quia cupiditate harum
            ex dolore. Vitae ab impedit, quia, nisi blanditiis odit earum laudantium animi ut, non voluptates hic culpa.
            Placeat at, corporis expedita rerum fugiat ipsa vero sequi enim magni excepturi non quae sit perferendis.
            Voluptatum provident sit quidem dignissimos veniam facere quisquam neque eligendi! Perferendis in omnis cum
            corporis est.</p>
    </div>
    <br>
    <div class="container py-3 px-3 flex flex-col gap-5 justify-center items-center">
        <img class="object-contain w-2/4 rounded-xl border-4 border-blue-300 text-center"
            src="{{ asset('img/perpus2.jpg') }}" alt="">
        <h1 class="font-semibold text-2xl text-center">Perpustakaan 2</h1>
        <p class="text-md text-pretty  text-justify px-20">Lorem, ipsum dolor sit amet consectetur adipisicing elit.
            Fuga, fugit suscipit. Repellat in maiores, ipsam architecto officiis, eum porro quos beatae consectetur
            voluptas quasi magnam nobis numquam nemo libero voluptatibus alias rem accusantium commodi nihil maxime,
            voluptates saepe asperiores reiciendis? Laborum enim qui inventore eveniet possimus vel magnam, quia
            cupiditate harum ex dolore. Vitae ab impedit, quia, nisi blanditiis odit earum laudantium animi ut, non
            voluptates hic culpa. Placeat at, corporis expedita rerum fugiat ipsa vero sequi enim magni excepturi non
            quae sit perferendis. Voluptatum provident sit quidem dignissimos veniam facere quisquam neque eligendi!
            Perferendis in omnis cum corporis est.</p>
    </div>
</x-layout>
