<section class="max-w-4xl p-6 mx-auto bg-white rounded-md shadow-md dark:bg-gray-800 my-6">
    <h2 class="text-lg font-semibold text-gray-700 capitalize dark:text-white">Ajouter une équipe</h2>
    <form action="/role" method="post">
        @csrf
        <div class="grid grid-cols-1 gap-6 mt-4 sm:grid-cols-2">
            <div>
                <label class="text-gray-700 dark:text-gray-200" for="username">role</label>
                <select name="role" id="">
                    <option value="attack">attack</option>
                    <option value="middle">middle</option>
                    <option value="defence">defence</option>
                    <option value="substitute">remplacants</option>
                </select>
            </div>
        </div>

        <div class="flex justify-end mt-6">
            <button class="px-8 py-2.5 leading-5 text-white transition-colors duration-300 transform bg-gray-700 rounded-md hover:bg-gray-600 focus:outline-none focus:bg-gray-600" type="submit">Envoyer</button>
        </div>
    </form>
</section>