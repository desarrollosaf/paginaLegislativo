<style>
    ul.pagination {
        display: inline-block;
        padding: 0;
        margin: 0;
    }

    ul.pagination li {
        display: inline;
    }

    ul.pagination li a {
        color: black;
        float: left;
        padding: 5px 10px;
        text-decoration: none;
    }

    .active {
        background-color: #a1a1a1 !important;
        color: white;
    }

    ul.pagination li a:hover:not(.active) {
        background-color: #ddd;
    }
</style>
@if ($paginator->hasPages())
    <div class="row g-24">
        <div class="col-lg-12 text-center">
            <nav>
                <ul class="pagination">
                    {{-- Previous Page Link --}}
                    @if ($paginator->onFirstPage())
                        <li class="page-item disabled" aria-disabled="true"
                            aria-label="@lang('pagination.previous')">
                            <a class="page-link" aria-hidden="true" disabled="">&lsaquo;</a>
                        </li>
                    @else
                        <li class="page-item">
                            <a class="page-link" href="{{ $paginator->previousPageUrl() }}" rel="prev"
                               aria-label="@lang('pagination.previous')">&lsaquo;</a>
                        </li>
                    @endif

                    {{-- Pagination Elements --}}
                    @foreach ($elements as $element)
                        {{-- "Three Dots" Separator --}}
                        @if (is_string($element))
                            <li class="page-item disabled" aria-disabled="true"><a class="page-link"
                                                                                   disabled="">{{ $element }}</a>
                            </li>
                        @endif
                        {{-- Array Of Links --}}
                        @if (is_array($element))
                            @foreach ($element as $page => $url)
                                @if ($page == $paginator->currentPage())
                                    <li class="page-item"><a class="page-link active" disabled="">{{ $page }}</a>
                                    </li>
                                @else
                                    <li class="page-item"><a class="page-link" href="{{ $url }}">{{ $page }}</a>
                                    </li>
                                @endif
                            @endforeach
                        @endif
                    @endforeach
                    {{-- Next Page Link --}}
                    @if ($paginator->hasMorePages())
                        <li class="page-item">
                            <a class="page-link" href="{{ $paginator->nextPageUrl() }}" rel="next"
                               aria-label="@lang('pagination.next')">&rsaquo;</a>
                        </li>
                    @else
                        <li class="page-item disabled" aria-disabled="true" aria-label="@lang('pagination.next')">
                            <a class="page-link" aria-hidden="true" disabled="">&rsaquo;</a>
                        </li>
                    @endif
                </ul>
            </nav>
        </div>
        <div class="col-lg-12 text-center">
            <p class="text-muted">
                {!! __('Mostrando') !!}
                <span class="fw-semibold">{{ $paginator->firstItem() }}</span>
                {!! __('a') !!}
                <span class="fw-semibold">{{ $paginator->lastItem() }}</span>
                {!! __('de') !!}
                <span class="fw-semibold">{{ $paginator->total() }}</span>
                {!! __('boletines') !!}
            </p>
        </div>
    </div>
@endif
