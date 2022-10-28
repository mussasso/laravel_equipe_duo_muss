<section class="max-w-4xl p-6 mx-auto bg-white rounded-md shadow-md dark:bg-gray-800 my-6">
    <h2 class="text-lg font-semibold text-gray-700 capitalize dark:text-white">Ajouter un joueur</h2>
    <form action="/player" method="post" enctype="multipart/form-data">
        @csrf
        <div>
            <label class="text-gray-700 dark:text-gray-200" for="username">Name</label>
            <input id="" type="text" name="name" value="{{old('name')}}"
                class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-200 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-400 focus:ring-blue-300 focus:ring-opacity-40 dark:focus:border-blue-300 focus:outline-none focus:ring">
        </div>
        <div>
            <label class="text-gray-700 dark:text-gray-200" for="username">lastname</label>
            <input id="" type="text" name="lastname" value="{{old('lastname')}}"
                class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-200 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-400 focus:ring-blue-300 focus:ring-opacity-40 dark:focus:border-blue-300 focus:outline-none focus:ring">
        </div>

        <div>
            <label class="text-gray-700 dark:text-gray-200" for="username">age</label>
            <input id="" type="number" name="age" value="{{old('age')}}"
                class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-200 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-400 focus:ring-blue-300 focus:ring-opacity-40 dark:focus:border-blue-300 focus:outline-none focus:ring">
        </div>
        <div>
            <label class="text-gray-700 dark:text-gray-200" for="username">phone</label>
            <input id="" type="text" name="phone" value="{{old('phone')}}"
                class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-200 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-400 focus:ring-blue-300 focus:ring-opacity-40 dark:focus:border-blue-300 focus:outline-none focus:ring">
        </div>

        <div>
            <label class="text-gray-700 dark:text-gray-200" for="username">email</label>
            <input id="" type="text" name="email" value="{{ old('email') }}"
                class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-200 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-400 focus:ring-blue-300 focus:ring-opacity-40 dark:focus:border-blue-300 focus:outline-none focus:ring">
        </div>
        <div>
            <label class="text-gray-700 dark:text-gray-200" for="username">Genre</label>
            <select name="genre" id="">
                <option value="homme">Homme</option>
                <option value="femme">Femme</option>
            </select>
        </div>

        <div>
            <label class="text-gray-700 dark:text-gray-200" for="username">pays</label>
            <input id="" type="text" name="pays" value="{{ old('pays') }}"
                class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-200 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-400 focus:ring-blue-300 focus:ring-opacity-40 dark:focus:border-blue-300 focus:outline-none focus:ring">
        </div>

        <div>
            <label class="text-gray-700 dark:text-gray-200" for="username">Image</label>
            <input id="" type="file" name="image" value="{{ old('image') }}"
                class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-200 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-400 focus:ring-blue-300 focus:ring-opacity-40 dark:focus:border-blue-300 focus:outline-none focus:ring">
        </div>

        <div>
            <label class="text-gray-700 dark:text-gray-200" for="username">Equipe du joueur:</label>
            <select name="team_id">
                @foreach ($team as $teams)
                    <option value="{{ $teams->id }}">{{ $teams->name }}</option>
                @endforeach
            </select>
        </div>

        <div>
            <label class="text-gray-700 dark:text-gray-200" for="username">Role du Joueur:</label>
            <select name="role_id">
                @foreach ($roles as $role)
                    <option value="{{$role->id}}">{{$role->role}}</option>
                @endforeach
            </select>
        </div>

        <div class="flex justify-end mt-6">
            <button
                class="px-8 py-2.5 leading-5 text-white transition-colors duration-300 transform bg-gray-700 rounded-md hover:bg-gray-600 focus:outline-none focus:bg-gray-600"
                type="submit">Envoyer</button>
        </div>
    </form>
</section>
