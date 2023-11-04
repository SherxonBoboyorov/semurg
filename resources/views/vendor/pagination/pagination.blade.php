@if($paginator->hasPages())
        <div class="pagination">
            @if (!$paginator->onFirstPage())
                <a href="{{ $paginator->previousPageUrl() }}" class="prev disabled" rel="prev" aria-label="@lang('pagination.previous')">Пред</a>
            @endif
                 
            <ul class="pagination__el">
                @foreach ($elements as $element) 
                @if (is_string($element))
                    <li class="pagination__el-item" aria-disabled="true">{{ $element }}</li>
                @endif
                 @if (is_array($element))
                    @foreach ($element as $page => $url)
                        @if ($page == $paginator->currentPage())
                          <li class="pagination__el-item active"><a>{{ $page }}</a></li>
                        @else
                         <li class="pagination__el-item"><a href="{{ $url }}">{{ $page }}</a></li>
                        @endif
                     @endforeach
                  @endif
                 @endforeach
                </ul>

            @if ($paginator->hasMorePages())
                 <a href="{{ $paginator->nextPageUrl() }}" class="next" rel="next" aria-label="@lang('pagination.next')">След.</a>
            @endif
        </div>
   @endif


