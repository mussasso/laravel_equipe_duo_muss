<h1 class="text-white bg-white dark:bg-gray-900 text-center py-6">tous les joueurs</h1>
<section class="bg-white dark:bg-gray-900 flex flex-wrap justify-center gap-10">
    @foreach ($hommes as $player)
    <div class="max-w-2xl overflow-hidden bg-white rounded-lg shadow-md dark:bg-gray-800">
        <img class="object-cover w-full h-64" src="{{asset('storage/image/' . $player->photo->image)}}" alt="Article">
    
        <div class="p-6">
            <div>
                <span class="text-xs font-medium text-blue-600 uppercase dark:text-blue-400">Prénom: {{$player->name}}</span>
                <a href="#" class="block mt-2 text-2xl font-semibold text-gray-800 transition-colors duration-300 transform dark:text-white hover:text-gray-600 hover:underline" tabindex="0" role="link">Nom: {{$player->lastname}}</a>
                <p class="mt-2 text-sm text-gray-600 dark:text-gray-400">Age: {{$player->age}}</p>
                <p class="mt-2 text-sm text-gray-600 dark:text-gray-400">Pays: {{$player->pays}}</p>
                <p class="mt-2 text-sm text-gray-600 dark:text-gray-400">Team: {{$player->team->name}}</p>
            </div>
            <button
                    class=" my-5 px-6 py-2 font-medium tracking-wide text-white capitalize transition-colors duration-300 transform bg-blue-600 rounded-md hover:bg-blue-500 focus:outline-none focus:ring focus:ring-blue-300 focus:ring-opacity-80"><a
                        href="/player/show/{{ $player->id }}">Voir l'équipe</a>
                </button>
        </div>
    </div>
    @endforeach
</section>