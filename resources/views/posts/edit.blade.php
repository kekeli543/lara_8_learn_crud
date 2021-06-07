<div align="center">
    <form action="{{ route('posts.destroy', $post->id) }}" method="POST">
        @csrf
        @method('DELETE')
         <button class="btn btn-danger">刪除</button>
     </form>
 </div>

<form action="{{ url('posts/'.$post->id) }}" method="POST">
        @method('PUT')
        @csrf
        @include('posts._form')
</form>