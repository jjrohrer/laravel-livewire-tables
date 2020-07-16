@if ($paginationEnabled || $searchEnabled)
    <div class="flex flex-col">
        @if ($paginationEnabled && $perPageEnabled)
            <div class="px-2 py-2">
                {{ $perPageLabel }}: &nbsp;

                <select wire:model="perPage"
                        class="relative form-select transition duration-150 ease-in-out sm:text-sm sm:leading-5">
                    @if (is_array($perPageOptions))
                        @foreach ($perPageOptions as $option)
                            <option>{{ $option }}</option>
                        @endforeach
                    @else
                        <option>10</option>
                        <option>15</option>
                        <option>25</option>
                    @endif
                </select>
            </div>
        @endif

        <div class="flex justify-between">
            <div>
                @if ($searchEnabled)

                    {{--                <div class="w-full mr-20 p-10">--}}
                    <div class="flex-col px-2 py-2 w-64">
                        <input
                                @if (is_numeric($searchDebounce)) wire:model.debounce.{{ $searchDebounce }}ms="search"
                                @endif
                                @if ($disableSearchOnLoading) wire:loading.attr="disabled" @endif
                                class="form-input block w-full rounded-lg pl-10 transition ease-in-out duration-150 sm:text-sm sm:leading-5"
                                type="text"
                                placeholder="{{ $searchLabel }}"
                        />
                    </div>
                    {{--                </div>--}}

                @endif
            </div>
            <div>
                @if($createEnabled)
                    <div class="flex-col py-2 px-2">
                        <a href="{{$createRoute}}"
                           class="relative inline-flex items-center px-4 py-2 border border-transparent text-sm leading-5 font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-500 focus:outline-none focus:shadow-outline-indigo focus:border-indigo-700 active:bg-indigo-700">
                            {{$createLabel}}
                        </a>
                    </div>
                @endif
            </div>
        </div>
    </div>
@endif
