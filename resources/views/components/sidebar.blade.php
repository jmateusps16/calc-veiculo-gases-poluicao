<div class="sidebar">
    <div class="scroll-wrapper scrollbar-inner sidebar-wrapper" style="position: relative;">
        <div class="scrollbar-inner sidebar-wrapper scroll-content"
            style="height: 955px; margin-bottom: 0px; margin-right: 0px; max-height: none;">
            <ul class="nav">
                <li class="nav-item {{ str_contains(Route::currentRouteName(), 'dashboard') ? 'active' : ''}}">
                    <a href="#">
                        <i class="la la-dashboard"></i>
                        <p>Informações Gerais</p>
                        {{-- <span class="badge badge-count">5</span> --}}
                    </a>
                </li>
                <li class="nav-item {{ str_contains(Route::currentRouteName(), 'calculargases') ? 'active' : ''}}">
                    <a href="{{ route('pages.calculargases.index') }}">
                        <i class="la la-calculator"></i>
                        <p>Calcular Gases</p>
                        {{-- <span class="badge badge-count">14</span> --}}
                    </a>
                </li>
            </ul>
        </div>
        <div class="scroll-element scroll-x">
            <div class="scroll-element_outer">
                <div class="scroll-element_size"></div>
                <div class="scroll-element_track"></div>
                <div class="scroll-bar" style="width: 100px;"></div>
            </div>
        </div>
        <div class="scroll-element scroll-y">
            <div class="scroll-element_outer">
                <div class="scroll-element_size"></div>
                <div class="scroll-element_track"></div>
                <div class="scroll-bar" style="height: 86px;"></div>
            </div>
        </div>
    </div>
</div>
