<div class="tag">
  @if(!$item->tags->isEmpty())
    <br>
    <p>{{trans('tag::tag.list')}}</p>
    <div class="tags-links">
      @foreach($item->tags as $tag)
        <a class="btn btn-primary h-50 w-100 m-1" href="{{route(locale(). '.tag.slug',['slug' => $tag->slug])}}"
           rel="tag">{{$tag->name}}</a>
        <br>
      @endforeach
    </div>
  @endif
</div>