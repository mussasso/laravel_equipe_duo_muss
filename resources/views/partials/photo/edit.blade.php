
<section class="max-w-4xl p-6 mx-auto bg-white rounded-md shadow-md dark:bg-gray-800 my-6">
    <h2 class="text-lg font-semibold text-gray-700 capitalize dark:text-white">Modifier une Team</h2>
    <form action="/photo/{{$photo->id}}" method="post" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div>
            <label class="text-gray-700 dark:text-gray-200" for="image">image</label>
            <input type="file" name="name" value="{{old('image')}}" class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-200 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-400 focus:ring-blue-300 focus:ring-opacity-40 dark:focus:border-blue-300 focus:outline-none focus:ring">
        </div>

    </div>

        <div class="flex justify-end mt-6">
            <button class="px-8 py-2.5 leading-5 text-white transition-colors duration-300 transform bg-gray-700 rounded-md hover:bg-gray-600 focus:outline-none focus:bg-gray-600" type="submit">Mettre à jour</button>
        </div>
    </form>
</section>