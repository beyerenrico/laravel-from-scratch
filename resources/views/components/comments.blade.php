@props(['post'])

<section class="mt-16">
    <div class="bg-white rounded-md shadow-sm ring-1 ring-gray-200 p-4 mb-8">
        <h2 class="flex items-center gap-4 text-2xl font-semibold">
            @auth()
                <div class="flex-none">
                    <img src="https://api.dicebear.com/5.x/personas/jpg?backgroundColor=b6e3f4,c0aede,d1d4f9&seed={{ auth()->user()->name }}" alt="" class="h-10 w-10 rounded-full bg-gray-100">
                </div>
            @endauth
            Create a new comment
        </h2>
        @auth()
            <form method="POST" action="/posts/{{ $post->slug }}/comments">
                <div class="mt-4">
                    <textarea
                        required
                        id="body"
                        name="body"
                        rows="8"
                        class="block w-full rounded-md border-0 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:py-1.5 sm:text-sm sm:leading-6"
                    >{{ old('body') }}</textarea>
                    @error('body')
                        <p class="mt-2 text-sm text-red-600" id="username-error">{{ $message }}</p>
                    @enderror
                </div>
                <div>
                    <button type="submit" class="flex mt-4 w-56 ml-auto justify-center rounded-md bg-indigo-600 px-2.5 py-1.5 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Post</button>
                    @csrf
                </div>
            </form>
        @else
            <p class="mt-4">
                <a href="/register" class="text-indigo-600">Register</a>
                or
                <a href="/login" class="text-indigo-600">login</a>
                to leave a comment on this post
            </p>
        @endauth
    </div>
    <h2 class="flex items-center text-2xl pb-2 mt-2 border-b border-gray-200 font-semibold gap-2">
        Comments
        <span class="inline-flex items-center rounded-full bg-indigo-100 px-3 py-0.5 text-sm font-medium text-indigo-800">
            {{ $post->comments->count() }}
        </span>
    </h2>
    @foreach($post->comments as $comment)
        <x-post-comment :comment="$comment" :loop="$loop" />
    @endforeach
</section>
