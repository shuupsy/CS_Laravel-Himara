@if ($paginator->hasPages())
    <nav class="pagination d-flex justify-items-center justify-content-center">
        <div class="d-flex justify-content-between flex-fill d-sm-none">
            <ul class="pagination">
                {{-- Previous Page Link --}}
                @if ($paginator->onFirstPage())
                    <li class="prev-pagination disabled" aria-disabled="true">
                        <span class="page-link">@lang('pagination.previous')</span>
                    </li>
                @else
                    <li class="prev-pagination">
                        <a class="page-link" href="{{ $paginator->previousPageUrl() }}"
                            rel="prev">@lang('pagination.previous')</a>
                    </li>
                @endif

                {{-- Next Page Link --}}
                @if ($paginator->hasMorePages())
                    <li class=" next_pagination">
                        <a class="page-link" href="{{ $paginator->nextPageUrl() }}" rel="next">@lang('pagination.next')</a>
                    </li>
                @else
                    <li class=" next_pagination disabled" aria-disabled="true">
                        <span class="page-link">@lang('pagination.next')</span>
                    </li>
                @endif
            </ul>
        </div>


        <div class='block-page'>
            <ul class="pagination">
                {{-- Previous Page Link --}}
                @if ($paginator->onFirstPage())
                    <li class="prev-pagination disabled" aria-disabled="true" aria-label="@lang('pagination.previous')">
                        <span class="page-link prev-pagination" aria-hidden="true">
                            &nbsp;<i class="fa fa-angle-left"></i>
                            Previous &nbsp;
                        </span>
                    </li>
                @else
                    <li class="prev-pagination">
                        <a class="prev-pagination" href="{{ $paginator->previousPageUrl() }}" rel="prev" aria-label="@lang('pagination.previous')">
                            &nbsp;<i class="fa fa-angle-left"></i>
                            Previous &nbsp;</a>
                    </li>
                @endif

                {{-- Pagination Elements --}}
                @foreach ($elements as $element)
                    {{-- "Three Dots" Separator --}}
                    @if (is_string($element))
                        <li class="disabled" aria-disabled="true"><span
                                class="page-link">{{ $element }}</span></li>
                    @endif

                    {{-- Array Of Links --}}
                    @if (is_array($element))
                        @foreach ($element as $page => $url)
                            @if ($page == $paginator->currentPage())
                                <li class="active" aria-current="page"><span
                                        class="page-link">{{ $page }}</span></li>
                            @else
                                <li class=""><a class="page-link"
                                        href="{{ $url }}">{{ $page }}</a></li>
                            @endif
                        @endforeach
                    @endif
                @endforeach

                {{-- Next Page Link --}}
                @if ($paginator->hasMorePages())
                    <li class="next_pagination">
                        <a class="page-link text-secondary" href="{{ $paginator->nextPageUrl() }}" rel="next"
                            aria-label="@lang('pagination.next')">
                            &nbsp; Next
                            <i class="fa fa-angle-right"></i>
                            &nbsp;
                        </a>
                    </li>
                @else
                    <li class="next_pagination disabled" aria-disabled="true" aria-label="@lang('pagination.next')">
                        <span class="page-link text-secondary" aria-hidden="true">
                            &nbsp; Next
                            <i class="fa fa-angle-right"></i>
                            &nbsp;
                        </span>
                    </li>
                @endif
            </ul>
        </div>
        </div>
    </nav>
@endif
