<div class="tab-pane fade {{ $active == 'true' ? 'show active' : '' }}" id="nav-{{ $target }}" role="tabpanel"
    aria-labelledby="nav-{{ $target }}-tab" tabindex="0">{{ $slot }}</div>
