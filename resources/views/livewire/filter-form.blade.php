<div class="flex-1 flex flex-col pt-5 pb-4 px-5 overflow-y-auto">
    <form class="space-y-3" action="#">
        <div>
            <label class="text-gray-500 text-xs tracking-widest uppercase title-font mb-1" for="category">Category</label>
            <select
                wire:model="category"
                class="appearance-none block w-full mt-1 px-2 py-1.5 border border-gray-200 rounded shadow-none placeholder-gray-400 focus:outline-none focus:ring-primary focus:border-primary text-sm"
            >
                <option value="all">All</option>
                @foreach($categories as $category)
                    <option value="{{ $category->slug }}">{{ $category->name }}</option>
                @endforeach
            </select>
        </div>

        <div>
            <label class="text-gray-500 text-xs tracking-widest uppercase title-font mb-1" for="min_price">Min price</label>
            <select
                wire:model="minValue"
                class="appearance-none block w-full mt-1 px-2 py-1.5 border border-gray-200 rounded shadow-none placeholder-gray-400 focus:outline-none focus:ring-primary focus:border-primary text-sm"
            >
                @foreach($minValues as $value)
                    <option value="{{ $value }}">{{ $value}}</option>
                @endforeach
            </select>
        </div>

        <div>
            <label class="text-gray-500 text-xs tracking-widest uppercase title-font mb-1" for="max_price">Max price</label>
            <select
                wire:model="maxValue"
                class="appearance-none block w-full mt-1 px-2 py-1.5 border border-gray-200 rounded shadow-none placeholder-gray-400 focus:outline-none focus:ring-primary focus:border-primary text-sm"
            >
                @foreach($maxValues as $value)
                    <option value="{{ $value }}">{{ $value}}</option>
                @endforeach
            </select>
        </div>
    </form>
</div>
