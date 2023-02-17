@props(['cates'])

<div class="mb-5">
    <h3 class="font-weight-bold mb-4">Categories</h3>
    <ul class="list-group">

        @foreach($cates as $category)
            <li class="list-group-item d-flex justify-content-between align-items-center">
                <a href="{{route('category.show', $category)}}">{{$category->name}}</a>
                <span class="badge badge-primary badge-pill">{{$category->posts_count}}</span>
            </li>
        @endforeach
    </ul>
</div>

