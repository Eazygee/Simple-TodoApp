<div>
    <!-- Walk as if you are kissing the Earth with your feet. - Thich Nhat Hanh -->
    @if($errors->any())
            @foreach ($errors->all() as $error)
                {{ $error }}
            @endforeach
    @endif
</div>