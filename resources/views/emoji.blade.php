@if ($attributes !== null && (count($attributes->getIterator()) > 0 || $attributes->has('class')))
<span {{ $attributes }}>{{ $emoji }}</span>
@else
<span>{{ $emoji }}</span>
@endif