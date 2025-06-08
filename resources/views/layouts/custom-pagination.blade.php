<div class="ml-auto">
    @if ($paginator->hasPages())
        <nav role="navigation" aria-label="Pagination Navigation">
            <ul class="pagination">
                <li class="page-item @if ($paginator->onFirstPage()) disabled @endif">
                    @if ($paginator->onFirstPage())
                        <span class="page-link">Previous</span>
                    @else
                        <a class="page-link" wire:click="previousPage" wire:loading.attr="disabled"
                            rel="prev">Previous</a>
                    @endif
                </li>
                <li class="page-item @if ($paginator->onLastPage()) disabled @endif">
                    @if ($paginator->onLastPage())
                        <span class="page-link">Next</span>
                    @else
                        <a class="page-link" wire:click="nextPage" wire:loading.attr="disabled" rel="next">Next</a>
                    @endif
                </li>
            </ul>
        </nav>
    @endif
</div>
