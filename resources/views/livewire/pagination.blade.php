@if ($paginator->hasPages())
    <ul class="flex justify-between">

        <!-- Affichage du nombre de résultats trouvés -->
        <!--<div class="hidden sm:flex-1 sm:flex sm:items-center sm:justify-between">
            <div>
                <p class="text-sm text-gray-700 leading-5 mt-3 mr-2">
                    <span class="font-medium">{{ $paginator->firstItem() }}</span>
                    {!! __('à') !!}
                    <span class="font-medium">{{ $paginator->lastItem() }}</span>
                    {!! __('résultats sur') !!}
                    <span class="font-medium">{{ $paginator->total() }}</span>
                </p>
            </div>-->


            <!-- Page précédente -->
            @if ($paginator->onFirstPage())
                <li class="w-12 px-2 py-1 text-center rounded border bg-gray-200 font-bold" style="color: #E47A00;">
                    &lt;
                </li>
            @else
                <a href="{{ $paginator->previousPageUrl() }}"
                   class="w-12 px-2 py-1 text-center rounded border shadow bg-white cursor-pointer font-bold"
                   style="color: #E47A00;">&lt;
                </a>
            @endif


        <!-- Numéro des pages -->
            @foreach ($elements as $element)
                <div class="flex">
                    @if (is_array($element))
                        @foreach ($element as $page => $url)
                            @if ($page == $paginator->currentPage())
                                <a href="{{$paginator->url($page) }}"
                                   class="mx-2 w-10 px-2 py-1 text-center rounded border shadow bg-orange-500 text-white cursor-pointer">{{$page}}</a>
                            @else
                                <a href="{{$paginator->url($page) }}"
                                   class="mx-2 w-10 px-2 py-1 text-center rounded border shadow bg-white cursor-pointer">{{$page}}</a>
                            @endif
                        @endforeach
                    @endif
                </div>
            @endforeach


        <!-- Page suivante -->
            @if ($paginator->hasMorePages())
                <a href="{{ $paginator->nextPageUrl() }}"
                   class="w-12 px-2 py-1 text-center rounded border shadow bg-white cursor-pointer font-bold"
                   style="color: #E47A00;">&gt;</a>
            @else
                <li class="w-12 px-2 py-1 text-center rounded border bg-gray-200 font-bold" style="color: #E47A00;">
                    &gt;
                </li>
            @endif
        </div>
    </ul>
@endif
