<x-layout.form-layout>
    <div class="max-w-lg p-10 mx-auto mt-24 border border-gray-200 rounded bg-gray-50">
    
        <header class="text-center">
            <h2 class="mb-1 text-2xl font-bold uppercase">
                Create a Post
            </h2>
        </header>

        <form method="POST" action="/store">
            @csrf

            <div class="mb-6">
                <label for="title" class="inline-block mb-2 text-lg"
                    >Post Title</label
                >
                <input
                    type="text"
                    class="w-full p-2 border border-gray-200 rounded"
                    name="title"
                    placeholder="My Post Title"
                />
                @error('title')
                    <p class="mt-1 text-xs text-rd-500">{{$message}}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label for="tags" class="inline-block mb-2 text-lg">
                    Tags (Comma Separated)
                </label>
                <input
                    type="text"
                    class="w-full p-2 border border-gray-200 rounded"
                    name="tags"
                    placeholder="Example: Laravel, Backend, Postgres, etc"
                />
            </div>

            <!--<div class="mb-6">
                <label for="featuredImage">Featured Image:</label>
                <label class="inline-block mb-2 text-lg label">
                    
                    <input
                    type="file"
                    id="file-input"
                    class="w-full p-2 border border-gray-200 rounded"
                    name="featuredImage"
                />
                <span>Select a File</span>
                </label>
                
            </div>-->

            <div class="mb-6">
                <label
                    for="body"
                    class="inline-block mb-2 text-lg"
                >
                    Post Text
                </label>
                <textarea
                    class="w-full p-2 border border-gray-200 rounded"
                    name="body"
                    rows="10"
                    placeholder="Your text here"
                ></textarea>
                @error('body')
                    <p class="mt-1 text-xs text-rd-500">{{$message}}</p>
                @enderror
            </div>

            <div class="mb-6">
                <button type="submit" class="px-4 py-2 rounded btn hover:bg-black btn-ok">
                    Create Post
                </button>

                <a href="/" class="px-4 py-2 ml-4 text-black rounded btn-cancel"> Cancel </a>
            </div>
        </form>
    </div>
</x-layout.form-layout>