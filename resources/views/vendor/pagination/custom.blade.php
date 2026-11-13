
@if ($paginator->hasPages())
    <div class="pagination-wrapper">

        <div class="pagination-info">
            Showing {{ $paginator->firstItem() }}
            to {{ $paginator->lastItem() }}
            of {{ $paginator->total() }} albums
        </div>

        <div class="pagination">

            {{-- Previous page --}}
            @if ($paginator->onFirstPage())
                <span class="page-disabled">Previous</span>
            @else
                <a href="{{ $paginator->previousPageUrl() }}" class="page-link">
                    Previous
                </a>
            @endif

            {{-- Page numbers --}}
            @foreach ($elements as $element)

                @if (is_string($element))
                    <span class="page-disabled">{{ $element }}</span>
                @endif

                @if (is_array($element))
                    @foreach ($element as $page => $url)

                        @if ($page == $paginator->currentPage())
                            <span class="page-active">{{ $page }}</span>
                        @else
                            <a href="{{ $url }}" class="page-link">
                                {{ $page }}
                            </a>
                        @endif

                    @endforeach
                @endif

            @endforeach

            {{-- Next page --}}
            @if ($paginator->hasMorePages())
                <a href="{{ $paginator->nextPageUrl() }}" class="page-link">
                    Next
                </a>
            @else
                <span class="page-disabled">Next</span>
            @endif

        </div>
    </div>
@endif
