<div class="col span_12_of_12">
        <div class="col span_4_of_12">
            <a href="{{ $detail->link}}"><img src="{{ $detail->image }}" alt="{{ $detail->title }}" class="img-responsive center-block"/></a>
        </div>
        <article class="col span_8_of_12">
            <a href="{{ $detail->link}}"><h2>{{ $detail->title }}</h2></a>
            <a href="{{ $detail->link}}"><p class="content-detail">{{ str_limit($detail->content, 100) }}</p></a>
        </article>
</div>
