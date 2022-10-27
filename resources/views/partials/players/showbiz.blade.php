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
                    <img src="{{$player->photo->image}}" alt="">
                    <h1 class="mt-6 text-xl font-semibold text-gray-800 dark:text-white">
                        Nom de l'équipe: {{ $player->name }}
                    </h1>
                    <h2 class="mt-6 text-xl font-semibold text-gray-800 dark:text-white">
                        Continent: {{ $player->lastname }}
                    </h2>
                    

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
                        Role: {{ $player->team->name }}
                    </p>
                </div>
            </div>
    </div>
</section>
