<div>
    <!-- I begin to speak only when I am certain what I will say is not better left unsaid. - Cato the Younger -->
    
    <div class="flex flex-col">
        @foreach ($posts as $post)
            <div class="flex flex-row">
                <div class="flex-1">
                    {{ $post->title }}
                </div>
                <div class="flex-1">
                    {{ $post->content }}
                </div>
            </div>
        @endforeach
</div>
