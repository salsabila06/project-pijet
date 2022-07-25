<h1 class="mb-5"> Halaman Blog Posts</h1>

@foreach($posts as $post)
    <article>
        <h2><a href="{{route('posts')}}/{{$post->id}}">{{ $post->title}}</a></h2>
        <p>{{$post->body}}</p>
    </article>
@endforeach
