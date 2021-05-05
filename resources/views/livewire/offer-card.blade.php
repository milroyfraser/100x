<div class="bg-white rounded p-2.5 shadow">
    <a class="block relative h-48 rounded overflow-hidden">
        <img alt="ecommerce" class="object-cover object-center w-full h-full block" src="https://dummyimage.com/420x260">
    </a>
    <div class="mt-4">
        <h3 class="text-gray-500 text-xs tracking-widest title-font mb-1">{{ $offer->category->name }}</h3>
        <h2 class="text-gray-800 text-lg font-medium">{{ $offer->title }}</h2>
        <div class="flex items-center justify-between">
            <div class="my-1 font-bold text-gray-900">{{ $offer->price / 100 }} LKR</div>
            <div class="flex justify-between items-center rounded text-sm" role="group">
                <button wire:click="add" class="bg-indigo-500 text-white hover:bg-indigo-400 rounded-l px-3 py-1 focus:outline-none font-bold">+</button>
                <div class="flex flex-col text-indigo bg-indigo-100 px-3 py-1 font-bold">{{ $countInCart }}</div>
                <button wire:click="remove"  class="bg-indigo-500 text-white hover:bg-indigo-400 rounded-r px-3 py-1 mx-0 focus:outline-none font-bold">-</button>
            </div>
        </div>
    </div>
</div>
