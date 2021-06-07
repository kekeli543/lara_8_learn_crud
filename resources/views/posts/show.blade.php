<h1>{{ $post->title }}</h1> 
<span> {{ $post->status }} </span><br>
<span> {{ $post->created_at->diffForHumans() }} </span><br>
<span> {{ $post->updated_at->diffForHumans() }} </span><br>
<p>{!! $post->content !!}</p>

<a href="{{ route('posts.edit', $post->id) }}" class="btn btn-primary">編輯</a>