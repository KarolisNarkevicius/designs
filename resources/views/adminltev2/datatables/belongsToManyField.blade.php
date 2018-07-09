@forelse($items as $item)
    <span class="label label-info label-many">{{ $item[$key] }}</span>
@empty
@endforelse