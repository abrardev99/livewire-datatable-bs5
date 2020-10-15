<div>
@if ($paginator->hasPages())
    <nav aria-label="Page navigation">
        <ul class="pagination pagination-sm justify-content-end">

            {{--            previous page link--}}
            @if ($paginator->onFirstPage())
                <li class="page-item disabled">
                    <a class="page-link " role="button" aria-label="Previous">
                        <span aria-hidden="true">&laquo;</span>
                    </a>
                </li>
            @else
                <div>
                <li class="page-item">
                    <a class="page-link" role="button" wire:click="previousPage" aria-label="Previous">
                        <span aria-hidden="true">&laquo;</span>
                    </a>
                </li>
                </div>
            @endif

            @foreach ($elements as $element)
                @if (is_string($element))
                    <li class="page-item disabled"><a class="page-link" href="#">{{ $element }}</a></li>
                @endif

                {{-- Array Of Links --}}
                @if (is_array($element))
                    @foreach ($element as $page => $url)
                        @if ($page == $paginator->currentPage())
                            <div wire:key="{{ $page }}">
                            <li class="page-item active"><a class="page-link" role="button">{{ $page }}</a></li>
                            </div>
                        @else
                            <li class="page-item"><a class="page-link" role="button" wire:click="gotoPage({{ $page }})">{{ $page }}</a></li>
                        @endif
                    @endforeach
                @endif

            @endforeach

            @if ($paginator->hasMorePages())
                <div>
                <li class="page-item">
                    <a class="page-link" role="button" wire:click="nextPage" aria-label="Next">
                        <span aria-hidden="true">&raquo;</span>
                    </a>
                </li>
                </div>
            @else
                <li class="page-item disabled">
                    <a class="page-link" href="#" aria-label="Next">
                        <span aria-hidden="true">&raquo;</span>
                    </a>
                </li>
            @endif

        </ul>
    </nav>
@endif
</div>
