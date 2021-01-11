<x-app-layout>

      <!-- header -->
      <section class="bg-cover" style="background-image: url({{asset('img/courses/header-courses.jpg')}})">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-36">
            <div class="w-full md:w-3/4 lg:w-1/2">
                <h1 class="text-white font-fold text-4xl">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolore sit</h1>
                <p class="text-white text-lg mt-2 mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Incidunt nulla officia soluta accusantium sit ex earum, ab, beatae similique fuga quasi fugiat at doloremque recusandae laudantium. Nobis fugit eaque iusto.</p>
                <!-- component -->
                <div class="relative text-gray-600">
                    <input type="search" name="serch" placeholder="Search" class="bg-white h-10 px-5 pr-10 rounded-full text-sm focus:outline-none w-full">
                    <button type="submit" class="uppercase px-8 py-2 rounded bg-green-600 text-blue-50 max-w-max shadow-sm hover:shadow-lg absolute right-0 top-0">Search</button>
                </div>
            </div>
        </div>
    </section>

    @livewire('course-index')

</x-app-layout>