<div class='inter '>
    <div class='inter-body d-flex'>
        <div class='inter-live-outer'>
            <div class='inter-live-bg'></div>
            <div class='inter-live'>LIVE</div>
        </div>
        <div class='inter-body d-flex flex-column justify-content-center'>
            <p class='inter-title'>{{ $title }}</p>
            <div class='inter-info-labels d-flex'>
                @foreach($labels as $label)
                    {!! $label !!}
                @endforeach
            </div>
        </div>
    </div>
    @if(count($buttons))
        <div class='inter-buttons'>
        @foreach($buttons as $button)
            {!! $button !!}
        @endforeach
        </div>
    @endif
</div>
