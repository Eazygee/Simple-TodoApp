<div>
    <!-- It is not the man who has too little, but the man who craves more, that is poor. - Seneca -->
        @if(session()->has('success'))
        {{ session()->get('success') }}
        @endif
</div>