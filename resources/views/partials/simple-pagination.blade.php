@if ($paginator->hasPages())
    <nav>
        <ul class="pagination text-center mb-3">
            {{-- Previous Page Link --}}
            @if ($paginator->onFirstPage())
                <li class="btn disabled" aria-disabled="true"><span>@lang('pagination.previous')</span></li>
            @else
                <li class="btn"><a href="{{ $paginator->previousPageUrl() }}" rel="prev">@lang('pagination.previous')</a></li>
            @endif

            {{-- Next Page Link --}}
            @if ($paginator->hasMorePages())
              <li class="btn"><a href="{{ $paginator->nextPageUrl() }}" rel="next">@lang('pagination.next')</a></li>
            @else
                <li class="btn disabled me-auto" aria-disabled="true"><span>@lang('pagination.next')</span></li>
            @endif
        </ul>
    </nav>
@endif
