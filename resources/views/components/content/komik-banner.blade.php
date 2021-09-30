 @foreach($banner as $b)
<div class="banner-shop">
    <a href="#">
        <img style="border-radius:2%" src="{{asset($b->banner)}}" alt="{{$b->title}}">
    </a>
    <div class="content-info">
        <div class="content">
            <div class="title">{{$b->title}}</div> 
        </div>
    </div>
</div>
@endforeach
