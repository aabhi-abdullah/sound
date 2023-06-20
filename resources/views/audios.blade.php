@foreach($audios as $audio)
    <div>
        <img src="{{ $audio->image }}" alt="Audio Image">
        <h3>{{ $audio->title }}</h3>
        <!-- Display other audio details -->
    </div>
@endforeach
