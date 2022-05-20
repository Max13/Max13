<nav class="navbar-default" role="navigation">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
        </div>

        <div class="collapse navbar-collapse navbar-right navbar-ex1-collapse">
            <ul class="nav navbar-nav">
                @foreach ($links as $text => $link)
                <li class="menuItem"><a href="{{ $link }}">{{ $text }}</a></li>
                @endforeach
                @foreach ($page->locales as $locale)
                    @continue ($locale->lang === $page->locale)
                <li class="menuItem flag stick-top"><a href="/{{ $locale->lang }}"><img src="/assets/build/img/icon/{{ $locale->icon }}" alt="{{ $locale->alt }}"></a></li>
                @endforeach
            </ul>
        </div>
    </div>
</nav>
