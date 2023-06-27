<x-app-layout>
  <x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
        {{ __('Calculator Joki') }}
    </h2>
  </x-slot>


<div class="mx-36 grid grid-cols-2 gap-16 pt-20 mb-20">
  
  @include('layouts.card', 
  ['text' => 'Login to reward', 'description' => 'Get a special reward if you login', 'img_path' => '/build/img/pcgamer.png'])

<div>
  <div class="bg-tridary rounded-3xl text- bg-tridary hover:shadow-slate-900 hover:z-40 p-10">
    <form class="flex flex-col gap-6 text-slate-50 pt-5">
      <div>
      <x-input-label for="game_name" :value="__('Game Name :')" />
        <select name="game_name" id="game_name" class="border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm placeholder-slate-600 block mt-1 w-full">
          <option value="Mobile Legends">Mobile Legends</option>
          <option value="Apex Legends">Apex Legends</option>
          <option value="PUBG Mobile">PUBG Mobile</option>
        </select>
      </div>
      <div>
        <x-input-label :value="__('Total Pertandingan Anda :')" />
        <x-text-input class="block mt-1 w-full" type="number" name="total_pertandingan" :value="old('total_pertandingan')" required autofocus onchange="setMatch(event.target.value)"/>
      </div>
      <div>
        <x-input-label :value="__('Total Winrate Anda :')" />
        <x-text-input class="block mt-1 w-full" type="number" name="total_winrate" :value="old('total_winrate')" required autofocus onchange="setWr(event.target.value)"/>
      </div>
      <div>
        <x-input-label :value="__('Winrate yang Anda inginkan :')" />
        <x-text-input class="block mt-1 w-full" type="number" name="winrate_want" :value="old('winrate_want')" required autofocus onchange="setPromis(event.target.value)"/>
      </div>
      <div class="flex gap-8">
        <x-primary-button class="mt-2" onclick="handleSubmit()">
          {{ __('Hasil') }}
        </x-primary-button>
      </div>
    </form>
  </div>
</div>
</div>

<script>
let match = 0;
let wr = 0;
let promis = 0;
let result = 0;

function setMatch(value) {
  match = Number(value);
}

function setWr(value) {
  wr = Number(value);
}

function setPromis(value) {
  promis = Number(value);
}

function handleSubmit() {
  let tWin = (match * wr) / 100;
  let tLose = match - tWin;
  let sisaWr = 100 - promis;
  let wrResult = 100 / sisaWr;
  let seratusPersen = tLose * wrResult;
  result = Math.round(seratusPersen - match);
  alert("Kamu memerlukan sekitar " + result + " win tanpa lose untuk mendapatkan win rate " + promis + "%");
  // document.getElementById("result").innerText = result;
  // document.getElementById("promis").innerText = promis;
  event.preventDefault();
}
</script>

</x-app-layout>