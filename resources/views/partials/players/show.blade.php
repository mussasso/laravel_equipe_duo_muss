<section class="bg-white dark:bg-gray-900">
    <div>
        <div class="text-center">
            <h1 class="text-3xl font-semibold text-gray-800 capitalize lg:text-4xl dark:text-white">Voici l'équipe sélectionnée
            </h1>
        </div>
    </div>
    <div class="container px-6 py-10 mx-auto flex justify-center">
            <div>
                <div>
                    <img src="{{$player->photo->photo}}" alt="">
                    <h1 class="mt-6 text-xl font-semibold text-gray-800 dark:text-white">
                        Nom de l'équipe: {{ $player->name }}
                    </h1>
                    <h2 class="mt-6 text-xl font-semibold text-gray-800 dark:text-white">
                        Continent: {{ $player->lastname }}
                    </h2>
                    {{-- <h2 class="mt-6 text-xl font-semibold text-gray-800 dark:text-white">
                        Continent: {{ $player->continent->continent }}
                    </h2> --}}

                    <hr class="w-32 my-6 text-blue-500">

                    <p class="text-sm text-gray-500 dark:text-gray-400">
                        Country: {{ $player->age }}
                    </p>
                    <p class="text-sm text-gray-500 dark:text-gray-400">
                        City: {{ $player->phone }}
                    </p>
                    <p class="text-sm text-gray-500 dark:text-gray-400">
                        Maxplayers: {{ $player->email }} Joueurs
                    </p>
                    <p class="text-sm text-gray-500 dark:text-gray-400">
                        Country: {{ $player->pays }}
                    </p>
                    <p class="text-sm text-gray-500 dark:text-gray-400">
                        Role: {{ $player->role->role }}
                    </p>
                    <p class="text-sm text-gray-500 dark:text-gray-400">
                        Role: {{ $player->team->team }}
                    </p>
                    
                    <div class="flex justify-center my-8 p-1.5 w-full inline-block sm:w-auto overflow-hidden bg-white border rounded-lg dark:bg-gray-800 dark:border-gray-700">
                        <div class="space-y-2 sm:space-y-0 sm:flex sm:-mx-1">
                            <button class="flex items-center justify-center w-full px-2 py-1 text-white transition-colors duration-300 transform bg-blue-600 rounded-md focus:outline-none sm:w-auto sm:mx-1 hover:bg-blue-500 focus:bg-blue-500 focus:ring focus:ring-blue-300 focus:ring-opacity-40"><a href="/player/{{$player->id}}/edit">
                                <span class="mx-1">
                                    Update l'équipe
                                </span>
                            </a>
                            </button>
                            <form action="/player/{{$player->id}}" method="post">
                                @csrf
                                @method('DELETE')
                                <button class="flex items-center justify-center w-full px-2 py-1 text-white transition-colors duration-300 transform bg-red-600 rounded-md focus:outline-none sm:w-auto sm:mx-1 hover:bg-blue-500 focus:bg-blue-500 focus:ring focus:ring-blue-300 focus:ring-opacity-40" type="submit">
                                    <span class="mx-1">
                                        Supprimer l'équipe
                                    </span>
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
    </div>
</section>
