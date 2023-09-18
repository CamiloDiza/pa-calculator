<div class="dropdown position-fixed bottom-0 end-0 me-3 bd-mode-toggle" style="margin-bottom: 4rem">
    <button class="btn btn-outline-light dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
        <i class="bi bi-translate" style="font-size: 24px"></i>
    </button>
    <ul class="dropdown-menu">
        <li><a class="dropdown-item text-center">{{ __('Set site language:') }}</a></li>
        <li class="d-flex align-items-center">
            <img src="images/icons/alemania.png" class="ms-2" width="16px">
            <a href="{{ route('locale', 'de') }}" class="dropdown-item ps-1">{{ __('German') }}</a>
        </li>
        <li class="d-flex align-items-center">
            <img src="images/icons/estados-unidos.png" class="ms-2" width="16px">
            <a href="{{ route('locale', 'en') }}" class="dropdown-item ps-1">{{ __('English') }}</a>
        </li>
        <li class="d-flex align-items-center">
            <img src="images/icons/mexico.png" class="ms-2" width="16px">
            <a href="{{ route('locale', 'es') }}" class="dropdown-item ps-1">{{ __('Spanish') }}</a>
        </li>
        <li class="d-flex align-items-center">
            <img src="images/icons/francia.png" class="ms-2" width="16px">
            <a href="{{ route('locale', 'fr') }}" class="dropdown-item ps-1">{{ __('French') }}</a>
        </li>
        <li class="d-flex align-items-center">
            <img src="images/icons/italia.png" class="ms-2" width="16px">
            <a href="{{ route('locale', 'it') }}" class="dropdown-item ps-1">{{ __('Italian') }}</a>
        </li>
        <li class="d-flex align-items-center">
            <img src="images/icons/portugal.png" class="ms-2" width="16px">
            <a href="{{ route('locale', 'pt') }}" class="dropdown-item ps-1">{{ __('Portuguese') }}</a>
        </li>
    </ul>
</div>
