@forelse($items as $item)
    <span class="badge badge-info">{{ $item[$key] }}</span>
@empty
@endforelse