<a href="{{ route('posts.create') }}" class="btn btn-primary">新增</a>

@foreach($posts as $post)
        <h3><a href="{{ url('/posts/'.$post->id)}}">{{ $post->title }}</h3> 
        <span> {{ $post->status }} </span><br>
        <span> {{ $post->updated_at->diffForHumans() }} </span>
        <hr>
@endforeach