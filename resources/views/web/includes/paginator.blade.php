{{-- <li><a href="#">1</a></li> --}}



@if ($paginator->hasPages())
    <!-- pagination -->
    <div class="col-md-12">
        <div class="post-pagination">
            @if ($paginator->onFirstPage())
                <a href="{{ $paginator->previousPageUrl() }}"
                    class="disabled page_prev d-flex flex-column align-items-center justify-content-center"><i
                        class="fas fa-chevron-left"></i></a>
            @else
                <a href="{{ $paginator->previousPageUrl() }}"
                    class="page_prev d-flex flex-column align-items-center justify-content-center"><i
                        class="fas fa-chevron-left"></a>
            @endif
            <ul class="page_nav d-flex flex-row">

                {{-- Pagination Elements --}}
                @foreach ($elements as $element)
                    {{-- "Three Dots" Separator --}}
                    @if (is_string($element))
                        <li class="page-item disabled" aria-disabled="true"><span
                                class="page-link">{{ $element }}</span></li>
                    @endif

                    {{-- Array Of Links --}}
                    @if (is_array($element))
                        @foreach ($element as $page => $url)
                            @if ($page == $paginator->currentPage())
                                <li class="active">{{ $page }}</li>
                            @else
                                <li><a href="{{ $url }}">{{ $page }}</a></li>
                            @endif
                        @endforeach
                    @endif
                @endforeach
            </ul>
            @if ($paginator->hasMorePages())
                <a href="{{ $paginator->nextPageUrl() }}"
                    class="page_next d-flex flex-column align-items-center justify-content-center"><i
                        class="fas fa-chevron-right"></i></a>
            @else
                <a href="{{ $paginator->nextPageUrl() }}"
                    class="disabled page_next d-flex flex-column align-items-center justify-content-center"><i
                        class="fas fa-chevron-right"></i></a>
            @endif
        </div>
    </div>
    <!-- pagination -->
@endif
