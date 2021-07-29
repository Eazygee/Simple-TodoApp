<div>
    <!-- When there is no desire, all things are at peace. - Laozi -->
    @if(session()->has('message'))
        {{ session()->get('message') }}
        @endif
</div>