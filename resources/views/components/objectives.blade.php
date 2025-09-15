<div class="info-box {{ $variant }}">
    <h2 class="info-title">{{ $title }}</h2>
    <ul class="info-list">
        @foreach ($items as $item)
            <li>{{ $item }}</li>
        @endforeach
    </ul>
</div>
