<form action="{{ url('posts') }}" method="POST">
    @csrf
    @include('posts._form')
</form>