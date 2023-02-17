@props(['recent_posts'])

<div class="mb-5">
    <h3 class="font-weight-bold mb-4">Recent Post</h3>
    @foreach($recent_posts as $recent_post)
        <div class="d-flex align-items-center border-bottom mb-3 pb-3">
            <img class="img-fluid" src="@if(!empty($recent_post->image)){{asset($recent_post->image->path)}}@endif" style="width: 80px; height: 80px;" alt="">
            <div class="d-flex flex-column pl-3">
                <a class="text-dark mb-2" href="{{route('blog.show', $recent_post)}}">{{Str::limit($recent_post->title, 28)}}</a>
                <div class="d-flex">
                    <small class="mr-3"><i class="fa fa-user text-primary"></i> {{Str::limit($recent_post->author->name, 10)}}</small>
                    <small class="mr-3"><i class="fa fa-folder text-primary"></i> {{Str::limit($recent_post->category->name, 10)}}</small>
                    <small class="mr-3"><i class="fa fa-comments text-primary"></i> {{$recent_post->comments_count}}</small>
                </div>
            </div>
        </div>
    @endforeach
</div>
