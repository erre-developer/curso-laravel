<nav>
    <ul>
        <li class="{{ setActive('home') }}"><a href="{{ route('home') }}">@lang('Home')</a></li>
        <li class="{{ setActive('about')  }}"><a href="{{ route('about') }}">@lang('About')</a></li>
        <li class="{{ setActive('projects.*')  }}"><a href="{{ route('projects.index') }}">@lang('Portafolio')</a></li>
        <li class="{{ setActive('contacto')  }}"><a href="{{ route('contacto') }}">@lang('Contact')</a></li>
    </ul>
</nav>