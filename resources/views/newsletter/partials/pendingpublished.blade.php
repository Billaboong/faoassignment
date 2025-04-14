<section>
    <header>
        <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100">
            {{ __('Newsletters Pending Publication') }}
        </h2>

        <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">
            {{ __("The newsletters here are yet to be sent out to subscribers.") }}
        </p>
    </header>


    @foreach ($newsletters->chunk(4) as $chunk)
    <div class="grid grid-cols-4 gap-4">
        @foreach ($chunk as $newsletter)
 

<div class="w-full max-w-sm bg-white border border-gray-200 rounded-lg shadow-sm dark:bg-gray-800 dark:border-gray-700">
<div></div>
    <div class="flex flex-col items-center pb-10">
        <img class="w-24 md:w-40 lg:w-56 h-24 mb-3 rounded-full shadow-lg" src="https://flowbite.com/docs/images/examples/image-4@2x.jpg" alt="Bonnie image" style="margin:6px;"/>
        <h5 class="mb-1 text-xl font-medium text-gray-900 dark:text-white">{{$newsletter->id}}</h5>
        <span class="text-sm text-gray-500 dark:text-gray-400" style="padding:8px;">{{$newsletter->description}}</span>
        <div class="flex mt-4 md:mt-6">
            <a href="{{ route('send.mail',[trim(substr($newsletter->filepath, strrpos($newsletter->filepath, '/') + 1))]) }}" class="inline-flex items-center px-4 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Publish</a>
            
            <a href="{{url('/')}}/storage/app/public/{{$newsletter->filepath}}" target="_blank" class="py-2 px-4 ms-2 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">View</a>
            
        </div>
    </div>
</div>

        @endforeach
        <div></div>
    </div>
@endforeach


    
</section>




