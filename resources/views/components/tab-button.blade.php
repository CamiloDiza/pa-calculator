<button class="nav-link {{ $active == 'true' ? 'active' : '' }}" id="nav-{{ $target }}-tab" data-bs-toggle="tab"
    data-bs-target="#nav-{{ $target }}" type="button" role="tab" aria-controls="nav-{{ $target }}"
    aria-selected="{{ $active }}">{{ $slot }}</button>
