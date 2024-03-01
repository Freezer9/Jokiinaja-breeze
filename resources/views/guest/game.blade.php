<x-app-layout>
  <x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
        {{ $game_type }}
    </h2>
  </x-slot>

<div class="bg-primary pt-20">
  <div class="relative">
    <div class="mx-14 gap-4 border p-5 rounded-3xl h-[32rem]"></div>
    <div class="flex gap-8 p-5 bg-secondary absolute z-30 top-6 w-screen justify-center">
      <div class="text-white flex justify-between pt-10 flex-col">
        <h1 class="text-2xl font-semibold">
          Choose Your <br /> {{ $game_type }}
        </h1>
        <div class="pb-10">
          <p>Tidak menemukan game anda ?</p>
          <a class="btn mt-2 hover:bg-green-400 hover:cursor-pointer" href="{{ route('contactus') }}">
            Contact Us
          </a>
        </div>
      </div>

      @if ($game_type === 'Mobile Game')
          
      <h6>
        <div>
          Halo Anjay
        </div>
      </h6>
      <div class="grid grid-cols-4 gap-4 w-2/3">
        <a href="/game/{{ $game_type }}/{{ 'Mobile Legends'}}" class="hover:z-40 hover:cursor-pointer hover:bg-blue-400 hover:transition-all rounded-xl border p-1 hover:scale-105 transition-all">
          <img src="/build/img/ml.jpg" alt="Game Image" class="rounded-t-xl" />
          <p class="text-slate-50 text-center mt-1 font-medium">Mobile Legends</p>
        </a>
        <a href="/game/{{ $game_type }}/{{ 'Apex Legends Mobile'}}" class="hover:z-40 hover:cursor-pointer hover:bg-blue-400 hover:transition-all rounded-xl border p-1 hover:scale-105 transition-all">
          <img src="/build/img/apexm.jpg" alt="Game Image" class="rounded-t-xl" />
          <p class="text-slate-50 text-center mt-1 font-medium">Apex Legends Mobile</p>
        </a>
        <a href="/game/{{ $game_type }}/{{ 'PUBG Mobile'}}" class="hover:z-40 hover:cursor-pointer hover:bg-blue-400 hover:transition-all rounded-xl border p-1 hover:scale-105 transition-all">
          <img src="/build/img/pubgm.jpg" alt="Game Image" class="rounded-t-xl" />
          <p class="text-slate-50 text-center mt-1 font-medium">PUBG Mobile</p>
        </a>
        <a href="/game/{{ $game_type }}/{{ 'COD Mobile'}}" class="hover:z-40 hover:cursor-pointer hover:bg-blue-400 hover:transition-all rounded-xl border p-1 hover:scale-105 transition-all">
          <img src="/build/img/codm.jpg" alt="Game Image" class="rounded-t-xl" />
          <p class="text-slate-50 text-center mt-1 font-medium">COD Mobile</p>
        </a>
        <a href="/game/{{ $game_type }}/{{ 'Freefire'}}" class="hover:z-40 hover:cursor-pointer hover:bg-blue-400 hover:transition-all rounded-xl border p-1 hover:scale-105 transition-all">
          <img src="/build/img/freefire.jpg" alt="Game Image" class="rounded-t-xl" />
          <p class="text-slate-50 text-center mt-1 font-medium">Freefire</p>
        </a>
        <a href="/game/{{ $game_type }}/{{ 'Genshin Impact'}}" class="hover:z-40 hover:cursor-pointer hover:bg-blue-400 hover:transition-all rounded-xl border p-1 hover:scale-105 transition-all">
          <img src="/build/img/genshinimpact.jpeg" alt="Game Image" class="rounded-t-xl" />
          <p class="text-slate-50 text-center mt-1 font-medium">Genshin Impact</p>
        </a>
        <a href="/game/{{ $game_type }}/{{ 'Clash Of Clans'}}" class="hover:z-40 hover:cursor-pointer hover:bg-blue-400 hover:transition-all rounded-xl border p-1 hover:scale-105 transition-all">
          <img src="/build/img/coc.png" alt="Game Image" class="rounded-t-xl" />
          <p class="text-slate-50 text-center mt-1 font-medium">Clash Of Clans</p>
        </a>
        <a href="/game/{{ $game_type }}/{{ 'Clash Royale'}}" class="hover:z-40 hover:cursor-pointer hover:bg-blue-400 hover:transition-all rounded-xl border p-1 hover:scale-105 transition-all">
          <img src="/build/img/clashroyale.jpeg" alt="Game Image" class="rounded-t-xl" />
          <p class="text-slate-50 text-center mt-1 font-medium">Clash Royale</p>
        </a>
      </div>

      @elseif ($game_type === 'PC Game')

      <div class="grid grid-cols-4 gap-4 w-2/3">
        <a href="/game/{{ $game_type }}/{{ 'Apex Legends'}}" class="hover:z-40 hover:cursor-pointer hover:bg-blue-400 hover:transition rounded-xl border p-1 hover:scale-105">
          <img src="/build/img/apexpc.jpg" alt="Game Image" class="rounded-t-xl" />
          <p class="text-slate-50 text-center mt-1 font-medium">Apex Legends</p>
        </a>
        <a href="/game/{{ $game_type }}/{{ 'Dota 2'}}" class="hover:z-40 hover:cursor-pointer hover:bg-blue-400 hover:transition rounded-xl border p-1 hover:scale-105">
          <img src="/build/img/dota2.jpg" alt="Game Image" class="rounded-t-xl" />
          <p class="text-slate-50 text-center mt-1 font-medium">Dota 2</p>
        </a>
        <a href="/game/{{ $game_type }}/{{ 'CSGO'}}" class="hover:z-40 hover:cursor-pointer hover:bg-blue-400 hover:transition rounded-xl border p-1 hover:scale-105">
          <img src="/build/img/csgo.jpeg" alt="Game Image" class="rounded-t-xl" />
          <p class="text-slate-50 text-center mt-1 font-medium">CSGO</p>
        </a>
        <a href="/game/{{ $game_type }}/{{ 'PUBG'}}" class="hover:z-40 hover:cursor-pointer hover:bg-blue-400 hover:transition rounded-xl border p-1 hover:scale-105">
          <img src="/build/img/pubgpc.jpg" alt="Game Image" class="rounded-t-xl" />
          <p class="text-slate-50 text-center mt-1 font-medium">PUBG</p>
        </a>
        <a href="/game/{{ $game_type }}/{{ 'GTA V'}}" class="hover:z-40 hover:cursor-pointer hover:bg-blue-400 hover:transition rounded-xl border p-1 hover:scale-105">
          <img src="/build/img/gta5.jpg" alt="Game Image" class="rounded-t-xl" />
          <p class="text-slate-50 text-center mt-1 font-medium">GTA V</p>
        </a>
        <a href="/game/{{ $game_type }}/{{ 'Forza Horizon 4'}}" class="hover:z-40 hover:cursor-pointer hover:bg-blue-400 hover:transition rounded-xl border p-1 hover:scale-105">
          <img src="/build/img/forzahorizon4.jpg" alt="Game Image" class="rounded-t-xl" />
          <p class="text-slate-50 text-center mt-1 font-medium">Forza Horizon 4</p>
        </a>
        <a href="/game/{{ $game_type }}/{{ 'Fifa 23'}}" class="hover:z-40 hover:cursor-pointer hover:bg-blue-400 hover:transition rounded-xl border p-1 hover:scale-105">
          <img src="/build/img/fifa23.jpg" alt="Game Image" class="rounded-t-xl" />
          <p class="text-slate-50 text-center mt-1 font-medium">Fifa 23</p>
        </a>
        <a href="/game/{{ $game_type }}/{{ 'NBA 2k22'}}" class="hover:z-40 hover:cursor-pointer hover:bg-blue-400 hover:transition rounded-xl border p-1 hover:scale-105">
          <img src="/build/img/nba2k22.jpg" alt="Game Image" class="rounded-t-xl" />
          <p class="text-slate-50 text-center mt-1 font-medium">NBA 2k22</p>
        </a>
      </div>
      
      @endif

    </div>
  </div>  
</div>

</x-app-layout>