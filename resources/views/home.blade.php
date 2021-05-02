<x-app-layout>
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="hidden md:flex md:flex-shrink-0 z-10">

        <div class="flex flex-col w-64">
          <div class="sticky top-0">
            <div class="flex-1 flex flex-col pt-5 pb-4 px-5 overflow-y-auto">
                <form class="space-y-3" action="#">
                    <div>
                        <label class="text-gray-500 text-xs tracking-widest uppercase title-font mb-1" for="category">Category</label>
                        <select
                          class="appearance-none block w-full mt-1 px-2 py-1.5 border border-gray-200 rounded shadow-none placeholder-gray-400 focus:outline-none focus:ring-primary focus:border-primary text-sm"
                        >
                          <option>--</option>
                        </select>
                    </div>

                    <div>
                        <label class="text-gray-500 text-xs tracking-widest uppercase title-font mb-1" for="min_price">Min price</label>
                        <select
                          class="appearance-none block w-full mt-1 px-2 py-1.5 border border-gray-200 rounded shadow-none placeholder-gray-400 focus:outline-none focus:ring-primary focus:border-primary text-sm"
                        >
                          <option>--</option>
                        </select>
                    </div>

                    <div>
                        <label class="text-gray-500 text-xs tracking-widest uppercase title-font mb-1" for="max_price">Max price</label>
                        <select
                          class="appearance-none block w-full mt-1 px-2 py-1.5 border border-gray-200 rounded shadow-none placeholder-gray-400 focus:outline-none focus:ring-primary focus:border-primary text-sm"
                        >
                          <option>--</option>
                        </select>
                    </div>

                    <div>
                        <button class="w-full flex items-center justify-center px-3.5 py-3 text-sm text-center rounded bg-indigo-500 hover:bg-indigo-600 text-white" type="button">
                            Search
                        </button>
                    </div>
                </form>
            </div>
          </div>
        </div>

        <div class="flex-1 py-4">
            <section class="text-gray-600 body-font">
              <div class="container mx-auto">
                  <div class="grid grid-cols-3 gap-4">
                      @foreach(range(1, 15) as $foo)
                          <div class="bg-white rounded p-2.5 shadow">
                              <a class="block relative h-48 rounded overflow-hidden">
                                  <img alt="ecommerce" class="object-cover object-center w-full h-full block" src="https://dummyimage.com/420x260">
                              </a>
                              <div class="mt-4">
                                  <h3 class="text-gray-500 text-xs tracking-widest title-font mb-1">CATEGORY</h3>
                                  <h2 class="text-gray-900 title-font text-lg font-medium">The Catalyzer</h2>
                                  <p class="my-1">$16.00</p>
                                  <button class="px-3.5 py-1.5 text-sm rounded bg-indigo-500 hover:bg-indigo-600 text-white" type="button">Add to cart</button>
                              </div>
                          </div>
                      @endforeach
                  </div>
              </div>
            </section>
        </div>

      </div>
    </div>
</x-app-layout>
