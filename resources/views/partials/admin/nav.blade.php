<nav class="navbar">
    <div class="block first-block">
        <a href="{{ route('home') }}" class="button navbar-link {{ setActiveRoute('home') }}">{{__('Home')}}</a>
        {{-- <a href="{{ route('about') }}" class="button navbar-link {{ setActiveRoute('about') }}">{{__('About')}}</a> --}}
        {{-- <a href="{{ route('properties') }}" class="button navbar-link {{ setActiveRoute('properties') }}">{{__('Properties')}}</a> --}}
        {{-- <a href="{{ route('contact') }}" class="button navbar-link {{ setActiveRoute('contact') }}">{{__('Contact')}}</a> --}}
    </div>
    <div class="block second-block">
        <p>{{__('Full Name')}}</p>
        <a href="{{ route('home') }}" class="button login-button">Logout</a>
    </div>
</nav>