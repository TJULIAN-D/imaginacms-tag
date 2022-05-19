<div class="tag">
  @if(!$item->tags->isEmpty())
    <br>
    <p>{{trans('tag::tag.list')}}</p>
    <span class="tags-links">
      @foreach($item->tags as $tag)
        <a class="btn btn-primary m-1" href="{{route(locale(). '.tag.slug',['slug' => $tag->slug])}}"
           rel="tag">{{$tag->name}}</a>
      @endforeach
    </span>
  @endif
</div>