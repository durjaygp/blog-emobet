@props(['tags'])

<div class="mb-5">
    <h3 class="font-weight-bold mb-4">Recent Tags</h3>
    <div class="d-flex flex-wrap m-n1">
        @foreach($tags as $tag)
            <a href="{{route('tags.show',$tag)}}" class="btn btn-outline-primary m-1">{{$tag->name}}</a>
        @endforeach
    </div>
</div>
