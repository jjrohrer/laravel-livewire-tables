@if ($paginationEnabled || $searchEnabled)
    <div class="">
        @if ($paginationEnabled && $perPageEnabled)
            <div class="px-2 py-2">
                {{ $perPageLabel }}: &nbsp;

                <select wire:model="perPage" class="">
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

        @if ($searchEnabled)
            <div class="py px-2">
                <input
                    @if (is_numeric($searchDebounce)) wire:model.debounce.{{ $searchDebounce }}ms="search" @endif
                    @if ($disableSearchOnLoading) wire:loading.attr="disabled" @endif
                class="form-input block w-full rounded-lg pl-10 transition ease-in-out duration-150 sm:text-sm sm:leading-5"
                    type="text"
                    placeholder="{{ $searchLabel }}"
                />
            </div>
        @endif
    </div>
@endif
