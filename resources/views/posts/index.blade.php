<h1>Posts Will be listed Here</h1>
@foreach ($posts as $post)
<a href="{{route('post.show',['post'=>$post->id])}}"> {{$post->title}} </a>
@endforeach
