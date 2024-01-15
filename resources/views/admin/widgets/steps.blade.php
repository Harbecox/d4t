<div class='steps d-flex'>
    @foreach($steps as $step)
        <div class='step d-flex @if($step['index'] == $active) active @endif'>
            <div class='step-index'>{{ $step['index'] }}</div>
            <div>
                <p class='step-title'>{{ $step['title'] }}</p>
                <p class='step-name'>Step 1 - {{ $step['name'] }}</p>
            </div>
        </div>
    @endforeach
</div>