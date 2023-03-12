@props(['comment', 'loop'])

<div class="flex space-x-4 text-sm text-gray-500">
    <div class="flex-none py-10">
        <img src="https://api.dicebear.com/5.x/personas/jpg?backgroundColor=b6e3f4,c0aede,d1d4f9&seed={{ $comment->author->name }}" alt="" class="h-10 w-10 rounded-full bg-gray-100">
    </div>
    <div class="flex-grow py-10 border-gray-200 {{ $loop->first ? '' : 'border-t' }}">
        <h3 class="font-medium text-gray-900">{{ $comment->author->name }}</h3>
        <p>
            <time datetime="{{ date('Y-m-d, H:i', strtotime($comment->created_at)) }}">{{ $comment->created_at->diffForHumans() }}</time>
        </p>

        <div class="prose prose-sm mt-4 max-w-none text-gray-500">
            {!! $comment->body !!}
        </div>
    </div>
</div>
