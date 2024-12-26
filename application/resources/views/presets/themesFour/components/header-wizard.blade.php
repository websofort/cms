<div class="header-bar">
    <div class="logo">
        <a href="{{route('home')}}"><img src="{{ getImage(getFilePath('logoIcon').'/logo.png') }}" alt="#"></a>
    </div>

    <a href="{{route('home')}}">
        <svg class="svg-x" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 24 24" style="enable-background:new 0 0 24 24;" xml:space="preserve" width="25" height="25">
                <style type="text/css">.st0{fill:none;stroke: hsl(var(--base));;stroke-linecap:round;stroke-linejoin:round;}</style>
            <path class="st0" d="M0.5,0.5l23,23"></path>
            <path class="st0" d="M23.5,0.5l-23,23"></path>
            </svg>
        <span class="header-span">@lang('Cancel')</span>
    </a>
</div>
