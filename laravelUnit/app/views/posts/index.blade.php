@if(!empty($posts))
    @foreach($posts as $post)
        <h2>{{$post->title}}</h2>
    @endforeach
@else
    <h2>DSL pas d'articles</h2>
@endif