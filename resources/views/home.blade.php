<x-app-layout>
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <div
        class="fixed inset-0 flex z-40 md:hidden"
        role="dialog"
        aria-modal="true"
      >
        <div
          class="fixed inset-0 bg-gray-600 bg-opacity-75"
          aria-hidden="true"
        ></div>

        <div class="flex-shrink-0 w-14">
          <!-- Force sidebar to shrink to fit close icon -->
        </div>
      </div>

      <div class="hidden md:flex md:flex-shrink-0 z-10">
        <div class="flex flex-col w-64">
          <div class="h-screen sticky bg-white">
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
                        <button class="w-full flex items-center justify-center px-3.5 py-3 text-sm text-center rounded bg-purple-500 hover:bg-purple-600 text-white" type="button">
                            Search
                        </button>
                    </div>
                </form>
            </div>
          </div>
        </div>

        <div class="flex-1 p-2">
            <section class="text-gray-600 body-font">
              <div class="container px-5 py-5 mx-auto">
                <div class="flex flex-wrap -m-4">
                  <div class="lg:w-1/3 md:w-1/2 p-4 w-full">
                    <a class="block relative h-48 rounded overflow-hidden">
                      <img alt="ecommerce" class="object-cover object-center w-full h-full block" src="https://dummyimage.com/420x260">
                    </a>
                    <div class="mt-4">
                      <h3 class="text-gray-500 text-xs tracking-widest title-font mb-1">CATEGORY</h3>
                      <h2 class="text-gray-900 title-font text-lg font-medium">The Catalyzer</h2>
                      <p class="my-1">$16.00</p>
                      <button class="px-3.5 py-1.5 text-sm rounded bg-purple-500 hover:bg-purple-600 text-white" type="button">Add to cart</button>
                    </div>
                  </div>
                  <div class="lg:w-1/3 md:w-1/2 p-4 w-full">
                    <a class="block relative h-48 rounded overflow-hidden">
                      <img alt="ecommerce" class="object-cover object-center w-full h-full block" src="https://dummyimage.com/421x261">
                    </a>
                    <div class="mt-4">
                      <h3 class="text-gray-500 text-xs tracking-widest title-font mb-1">CATEGORY</h3>
                      <h2 class="text-gray-900 title-font text-lg font-medium">Shooting Stars</h2>
                      <p class="my-1">$21.15</p>
                      <button class="px-3.5 py-1.5 text-sm rounded bg-purple-500 hover:bg-purple-600 text-white" type="button">Add to cart</button>
                    </div>
                  </div>
                  <div class="lg:w-1/3 md:w-1/2 p-4 w-full">
                    <a class="block relative h-48 rounded overflow-hidden">
                      <img alt="ecommerce" class="object-cover object-center w-full h-full block" src="https://dummyimage.com/422x262">
                    </a>
                    <div class="mt-4">
                      <h3 class="text-gray-500 text-xs tracking-widest title-font mb-1">CATEGORY</h3>
                      <h2 class="text-gray-900 title-font text-lg font-medium">Neptune</h2>
                      <p class="my-1">$12.00</p>
                      <button class="px-3.5 py-1.5 text-sm rounded bg-purple-500 hover:bg-purple-600 text-white" type="button">Add to cart</button>
                    </div>
                  </div>
                  <div class="lg:w-1/3 md:w-1/2 p-4 w-full">
                    <a class="block relative h-48 rounded overflow-hidden">
                      <img alt="ecommerce" class="object-cover object-center w-full h-full block" src="https://dummyimage.com/423x263">
                    </a>
                    <div class="mt-4">
                      <h3 class="text-gray-500 text-xs tracking-widest title-font mb-1">CATEGORY</h3>
                      <h2 class="text-gray-900 title-font text-lg font-medium">The 400 Blows</h2>
                      <p class="my-1">$18.40</p>
                      <button class="px-3.5 py-1.5 text-sm rounded bg-purple-500 hover:bg-purple-600 text-white" type="button">Add to cart</button>
                    </div>
                  </div>
                  <div class="lg:w-1/3 md:w-1/2 p-4 w-full">
                    <a class="block relative h-48 rounded overflow-hidden">
                      <img alt="ecommerce" class="object-cover object-center w-full h-full block" src="https://dummyimage.com/424x264">
                    </a>
                    <div class="mt-4">
                      <h3 class="text-gray-500 text-xs tracking-widest title-font mb-1">CATEGORY</h3>
                      <h2 class="text-gray-900 title-font text-lg font-medium">The Catalyzer</h2>
                      <p class="my-1">$16.00</p>
                      <button class="px-3.5 py-1.5 text-sm rounded bg-purple-500 hover:bg-purple-600 text-white" type="button">Add to cart</button>
                    </div>
                  </div>
                  <div class="lg:w-1/3 md:w-1/2 p-4 w-full">
                    <a class="block relative h-48 rounded overflow-hidden">
                      <img alt="ecommerce" class="object-cover object-center w-full h-full block" src="https://dummyimage.com/425x265">
                    </a>
                    <div class="mt-4">
                      <h3 class="text-gray-500 text-xs tracking-widest title-font mb-1">CATEGORY</h3>
                      <h2 class="text-gray-900 title-font text-lg font-medium">Shooting Stars</h2>
                      <p class="my-1">$21.15</p>
                      <button class="px-3.5 py-1.5 text-sm rounded bg-purple-500 hover:bg-purple-600 text-white" type="button">Add to cart</button>
                    </div>
                  </div>
                  <div class="lg:w-1/3 md:w-1/2 p-4 w-full">
                    <a class="block relative h-48 rounded overflow-hidden">
                      <img alt="ecommerce" class="object-cover object-center w-full h-full block" src="https://dummyimage.com/425x265">
                    </a>
                    <div class="mt-4">
                      <h3 class="text-gray-500 text-xs tracking-widest title-font mb-1">CATEGORY</h3>
                      <h2 class="text-gray-900 title-font text-lg font-medium">Shooting Stars</h2>
                      <p class="my-1">$21.15</p>
                      <button class="px-3.5 py-1.5 text-sm rounded bg-purple-500 hover:bg-purple-600 text-white" type="button">Add to cart</button>
                    </div>
                  </div>
                  <div class="lg:w-1/3 md:w-1/2 p-4 w-full">
                    <a class="block relative h-48 rounded overflow-hidden">
                      <img alt="ecommerce" class="object-cover object-center w-full h-full block" src="https://dummyimage.com/427x267">
                    </a>
                    <div class="mt-4">
                      <h3 class="text-gray-500 text-xs tracking-widest title-font mb-1">CATEGORY</h3>
                      <h2 class="text-gray-900 title-font text-lg font-medium">Neptune</h2>
                      <p class="my-1">$12.00</p>
                      <button class="px-3.5 py-1.5 text-sm rounded bg-purple-500 hover:bg-purple-600 text-white" type="button">Add to cart</button>
                    </div>
                  </div>
                  <div class="lg:w-1/3 md:w-1/2 p-4 w-full">
                    <a class="block relative h-48 rounded overflow-hidden">
                      <img alt="ecommerce" class="object-cover object-center w-full h-full block" src="https://dummyimage.com/428x268">
                    </a>
                    <div class="mt-4">
                      <h3 class="text-gray-500 text-xs tracking-widest title-font mb-1">CATEGORY</h3>
                      <h2 class="text-gray-900 title-font text-lg font-medium">The 400 Blows</h2>
                      <p class="my-1">$18.40</p>
                      <button class="px-3.5 py-1.5 text-sm rounded bg-purple-500 hover:bg-purple-600 text-white" type="button">Add to cart</button>
                    </div>
                  </div>
                </div>
              </div>
            </section>
        </div>
      </div>
    </div>
</x-app-layout>
