<footer class="banner">
    <div class="row">
        <p class="col-xs-3 faded text-left">{{ $page->author }}</p>
        <p class="hidden-xs col-sm-6 dedication small text-center">{{ $page->dedication }}</p>
        <p class="col-xs-3 col-xs-offset-6 col-sm-offset-0 text-right"><a href="#" data-toggle="modal" data-target="#modal-credits">{{ $page->creditsTitle }}</a></p>
    </div>
</footer>

<!-- Modal Credits -->
<div class="modal fade" id="modal-credits" tabindex="-1" role="dialog" aria-labelledby="modal-credits-title">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="modal-credits-title">{{ $page->creditsTitle }}</h4>
            </div>
            <div class="modal-body">
                <ul>
                    @foreach ($page->creditsContent as $line)
                    <li>{!! $line !!}</li>
                    @endforeach
                    <li>
                        {{ $page->creditsBy->title }}:
                        <ul>
                            @foreach ($page->creditsBy->icons as $icon)
                            <li>
                                <img class="credit" src="/assets/build/img/icon/{{ $icon->icon }}" alt="{{ $icon->alt }}"> {{ $page->by }} <a href="{{ $icon->link }}" _target="_blank">{{ $icon->author }}</a>
                                @if ($icon->from)
                                {{ $page->from }} <a href="{{ $icon->fromLink }}" _target="_blank">{{ $icon->from }}</a>
                                @endif
                            </li>
                            @endforeach
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- /Model Credits -->
