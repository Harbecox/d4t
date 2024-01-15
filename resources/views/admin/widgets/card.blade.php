<div>
    @if($title)
        <h3>{{ $title }}</h3>
    @endif
    <div class='card w-card'>
        <div class='card-body'>
            {!! $content !!}
        </div>
    </div>
</div>
