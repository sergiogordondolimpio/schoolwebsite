<div class="mt-8">
    <div class="container grid grid-cols-3 gap-8">
        <div class="col-span-2">
            <div class="embed-responsive">
                {!!$current->iframe!!}
            </div>
            <div class="text-3xl text-gray-600 font-bold mt-4">
                {{$current->name}}
            </div>
            @if ($current->description)
                <div class="text-gray-600">
                    {{$current->description->name}}
                </div>
            @endif
            <div class="flex items-center mt-4 cursor-pointer">
                <i class="fas fa-toggle-off text-2xl text-gray-600"></i>
                <p class="text-sm ml-2">Mark this lesson as finished</p>
            </div>

            <div class="card mt-2">
                <div class="card-body flex text-gray-500 font-bold">
                    @if ($this->previous)
                    <a wire:click="changeLesson({{$this->previous}})" class="cursor-pointer">Previews</a>
                    @endif
                    @if ($this->next)
                    <a wire:click="changeLesson({{$this->next}})" class="ml-auto cursor-pointer">Next</a>
                    @endif
                </div>
            </div>
        </div>

        <div class="card">
            <div class="card-body">
                <h1 class="text-2xl leading-8 text-center mb-4">{{$course->title}}</h1>
                
                <div class="flex items-center">
                    <figure>
                        <img class="w-12 h-12 object-cover rounded-full mr-4" src=" {{$course->teacher->profile_photo_url}} " alt="">
                    </figure>
                    <div>
                        <p> {{$course->teacher->name}} </p>
                        <a class="text-blue-500 text-sm" href=""> {{'@'.Str::slug($course->teacher->name, '')}} </a>
                    </div>
                </div>

                <p class="text-gray-600 text-sm mt-2">20% completed</p>
                <div class="relative pt-1">
                    <div class="overflow-hidden h-2 mb-4 text-xs flex rounded bg-gray-200">
                      <div style="width:30%" class="shadow-none flex flex-col text-center whitespace-nowrap text-white justify-center bg-blue-500"></div>
                    </div>
                </div>

                <ul>
                    @foreach ($course->sections as $section)
                        <li class=" text-gray-600 mb-4 ">
                            <a class="font-bold text-base inline-block mb-2">{{$section->name}}</a>
                            <ul>
                                @foreach ($section->lessons as $lesson)
                                    <li class="flex">
                                        <div>
                                            @if ($lesson->completed)
                                                @if ($current->id == $lesson->id)
                                                    <span class=" inline-block w-4 h-4 border-2 border-yellow-300 rounded-full mr-2 mt-1"></span>
                                                @else
                                                    <span class=" inline-block w-4 h-4 bg-yellow-300 rounded-full mr-2 mt-1"></span>
                                                @endif
                                            @else
                                                @if ($current->id == $lesson->id)
                                                    <span class=" inline-block w-4 h-4 border-2 border-gray-500 rounded-full mr-2 mt-1"></span>
                                                @else
                                                    <span class=" inline-block w-4 h-4 bg-gray-500 rounded-full mr-2 mt-1"></span>
                                                @endif
                                            @endif 
                                        </div>
                                        <a class="cursor-pointer" wire:click="changeLesson( {{$lesson}} )"> {{$lesson->name}}</a>
                                    </li>
                                @endforeach
                            </ul>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
</div>
