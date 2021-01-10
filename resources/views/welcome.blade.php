<x-app-layout>
    
    <!-- header -->
    <section class="bg-cover" style="background-image: url({{asset('img/home/home.jpg')}})">
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

    <!-- Content -->
    <section class="mt-24">
        <h1 class="text-gray-600 text-center text-3xl mb-6">CONTENT</h1>
        
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-x-6 gap-y-8">
            <article>
                <figure>
                <img class="rounded-xl h-36 w-full object-cover" src="{{asset('img/home/image1.jpg')}}" alt="">
                </figure>

                <header class="mt-2">
                    <h1 class="text-center text-xl text-gray-700">Amet consectetur</h1>
                </header>

                <p class="text-sm text-gray-500">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ullam itaque minima iure necessitatibus!</p>
            </article>
            <article>
                <figure>
                <img class="rounded-xl h-36 w-full object-cover" src="{{asset('img/home/image2.jpg')}}" alt="">
                </figure>

                <header class="mt-2">
                    <h1 class="text-center text-xl text-gray-700">Amet consectetur</h1>
                </header>

                <p class="text-sm text-gray-500">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ullam itaque minima iure necessitatibus!</p>
            </article>
            <article>
                <figure>
                <img class="rounded-xl h-36 w-full object-cover" src="{{asset('img/home/image3.jpg')}}" alt="">
                </figure>

                <header class="mt-2">
                    <h1 class="text-center text-xl text-gray-700">Amet consectetur</h1>
                </header>

                <p class="text-sm text-gray-500">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ullam itaque minima iure necessitatibus!</p>
            </article>
            <article>
                <figure>
                <img class="rounded-xl h-36 w-full object-cover" src="{{asset('img/home/image4.jpg')}}" alt="">
                </figure>

                <header class="mt-2">
                    <h1 class="text-center text-xl text-gray-700">Amet consectetur</h1>
                </header>

                <p class="text-sm text-gray-500">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ullam itaque minima iure necessitatibus!</p>
            </article>
        </div>
    
    </section>

    <!-- Separation -->
    <section class="mt-24 bg-green-600 py-12">
        <h1 class="text-center text-white text-xl">Facilis consectetur quasi aspernatur?</h1>
        <p class="text-center text-white">Iste, ipsum assumenda fugit alias iusto dolore. Fugit porro hic quas</p>
        
        <div class="flex justify-center mt-5">
            <button href="{{route('courses.index')}}" class="uppercase px-8 py-2 rounded border border-white text-white max-w-max shadow-sm hover:shadow-lg">
                List of courses
            </button>
        </div>
    </section>

    <!-- Content Latest Courses -->
    <section class="my-24">
        <h1 class="text-center text-3xl uppercase text-gray-600">Latest Courses</h1>
        <p class="text-center text-gray-500 text-sm mb-6">Deleniti possimus quibusdam, doloribus quod recusandae in?</p>
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 grid sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4  gap-x-6 gap-y-8">
            @foreach ($courses as $course)
            <article class="bg-white shadow-lg rounded overflow-hidden">
                <img class="h-36 w-full object-cover" src="{{ Storage::url($course->image->url) }}" alt="">
                <div class="px-6 py-4">
                    <h1 class="text-xl text-gray-700 mb-2 leading-6">{{Str::limit($course->title, 40)}}</h1>
                    <p class="text-gray-500 text-sm mb-2">Teacher: {{$course->teacher->name}}</p>
                    <div class="flex">
                        <ul class="flex text-sm">
                            <li class="mr-1">
                                <i class="fas fa-star text-{{$course->rating >= 1 ?'yellow' : 'grey'}}-400"></i>
                            </li>
                            <li class="mr-1">
                                <i class="fas fa-star text-{{$course->rating >= 2 ?'yellow' : 'grey'}}-400"></i>
                            </li>
                            <li class="mr-1">
                                <i class="fas fa-star text-{{$course->rating >= 3 ?'yellow' : 'grey'}}-400"></i>
                            </li>
                            <li class="mr-1">
                                <i class="fas fa-star text-{{$course->rating >= 4 ?'yellow' : 'grey'}}-400"></i>
                            </li>
                            <li class="mr-1">
                                <i class="fas fa-star text-{{$course->rating == 5 ?'yellow' : 'grey'}}-400"></i>
                            </li>
                        </ul>
                        <p class="text-sm text-gray-500 ml-auto">
                            <i class="fas fa-users"></i>
                            ({{$course->students_count}})
                        </p>
                    </div>

                    <a  href="{{route('courses.show', $course)}}"
                        class="md:text-xs block text-center w-full mt-4 uppercase px-8 py-2 rounded-full bg-green-600 text-blue-50 max-w-max shadow-sm hover:shadow-lg"
                    >More information</a>                
                </div>
            </article>
            @endforeach
        </div>
    </section>


</x-app-layout>