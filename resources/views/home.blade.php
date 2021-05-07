<x-app-layout>
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="hidden md:flex md:flex-shrink-0 z-10">

        <div class="flex flex-col w-64">
          <div class="sticky top-0">
            <livewire:filter-form />
          </div>
        </div>

        <div class="flex-1 py-4">
            <section class="text-gray-600 body-font">
              <div class="container mx-auto">
                  <div class="grid grid-cols-3 gap-4 mb-4">
                      @foreach($offers as $offer)
                          <livewire:offer-card :offer="$offer" />
                      @endforeach
                  </div>

                  {{ $offers->links() }}
              </div>
            </section>
        </div>

      </div>
    </div>
</x-app-layout>
