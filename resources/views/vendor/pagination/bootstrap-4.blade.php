@if ($paginator->hasPages())
    <ul class="pagination" role="navigation">
        {{-- Previous Page Link --}}
        @if ($paginator->onFirstPage())
            <li class="page-item disabled" aria-disabled="true" aria-label="@lang('pagination.previous')">
                <span class="page-link" aria-hidden="true"><img src="{{url('miyabi')}}/images/pg_prev.png"></span>
            </li>
        @else
            <li class="page-item">
                <a class="page-link" href="{{ $paginator->previousPageUrl() }}" rel="prev" aria-label="@lang('pagination.previous')"><img src="{{url('miyabi')}}/images/pg_prev.png"></a>
            </li>
        @endif

        {{-- Pagination Elements --}}
        @foreach ($elements as $element)
            {{-- "Three Dots" Separator --}}
            @if (is_string($element))
                <li class="page-item disabled" aria-disabled="true"><span class="page-link">{{ $element }}</span></li>
            @endif

            {{-- Array Of Links --}}
            @if (is_array($element))
                @foreach ($element as $page => $url)
                    @if ($page == $paginator->currentPage())
                        <li class="page-item active" aria-current="page"><span class="page-link">{{ $page }}</span></li>
                    @else
                        <li class="page-item"><a class="page-link" href="{{ $url }}">{{ $page }}</a></li>
                    @endif
                @endforeach
            @endif
        @endforeach

        {{-- Next Page Link --}}
        @if ($paginator->hasMorePages())
            <li class="page-item">
                <a class="page-link" href="{{ $paginator->nextPageUrl() }}" rel="next" aria-label="@lang('pagination.next')"><img src="{{url('miyabi')}}/images/pg_next.png"></a>
            </li>
        @else
            <li class="page-item disabled" aria-disabled="true" aria-label="@lang('pagination.next')">
                <span class="page-link" aria-hidden="true"><img src="{{url('miyabi')}}/images/pg_next.png"></span>
            </li>
        @endif
    </ul>

    <style type="text/css">
        .page-item.active .page-link {
            background: #000;
            color: #eec747;
            border: 1px solid #eec747;
        }
        .page-item .page-link:focus {
            outline: none;
            box-shadow: none;
        }
        .page-item .page-link:hover {
            background: #000;
            color: #eec747;
            border: 1px solid #eec747;
        }
        .page-item {
            margin-left: 3px;
            margin-right: 3px;
        }
        .page-link {
            border-radius: 7px;
            background: #323232;
            border: 1px solid #eec747;
            color: #eec747;
            font-weight: bold;
        }
        .page-item.disabled .page-link {
            background: #323232;
            border: 1px solid #eec747;
        }
        .page-item:last-child .page-link, .page-item:first-child .page-link {
            border-radius: 7px;
        }
        .pagination {
            margin-top: 15px;
        }
    </style>
@endif
