<section>
    @if (session('status'))
    <div class="alert alert-success">
        <span class="bg-green-100 text-green-800 text-xs font-medium me-2 px-2.5 py-0.5 rounded-sm dark:bg-green-900 dark:text-green-300">{{ session('status') }}</span>
               
    </div>
    @endif
    <header>
        <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100">
            {{ __('Execute Service Worker') }}
        </h2>

        <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">
            {{ __("You shall be able to run the below jobs so as to send out the early warning briefs to subscribers.") }}
        </p>
    </header>

  @if($jobs > 0)
    <form method="post" action="{{ route('send.worker') }}" class="mt-6 space-y-6" enctype="multipart/form-data">
        @csrf

      <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">Total Number of jobs pending run:</p> <span class="bg-red-100 text-red-800 text-xs font-medium me-2 px-2.5 py-0.5 rounded-full dark:bg-red-900 dark:text-red-300">{{$jobs}}</span>


        <div class="flex items-center gap-4">
            <x-primary-button>{{ __('Execute') }}</x-primary-button>


        </div>
    </form>
    @else
    <span id="badge-dismiss-green" class="inline-flex items-center px-2 py-1 me-2 text-sm font-medium text-green-800 bg-green-100 rounded-sm dark:bg-green-900 dark:text-green-300">
        No jobs to run for now
        <button type="button" class="inline-flex items-center p-1 ms-2 text-sm text-green-400 bg-transparent rounded-xs hover:bg-green-200 hover:text-green-900 dark:hover:bg-green-800 dark:hover:text-green-300" data-dismiss-target="#badge-dismiss-green" aria-label="Remove">
        <svg class="w-2 h-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
        </svg>
        <span class="sr-only">Remove badge</span>
        </button>
        </span>

  @endif
</section>
