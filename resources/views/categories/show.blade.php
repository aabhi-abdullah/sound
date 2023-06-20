<h2>{{ $category->title }}</h2>

<ul>
    @foreach ($items as $item)
        <li>{{ $item->title }}</li>
    @endforeach
</ul>
