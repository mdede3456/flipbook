<aside id="categories-10" class="widget widget_categories">
    <h3 class="widget-title">Categories</h3>
    <ul>
        @foreach($category as $c)
        <li class="cat-item cat-item-60"><a href="{{route('majalah.category',[$c->id,strtolower(preg_replace("/[^a-zA-Z0-9]/", "-", $c->name))])}}">{{$c->name}}</a> ( {{count($c->majalah)}} )</li>
        @endforeach
    </ul>
</aside>
