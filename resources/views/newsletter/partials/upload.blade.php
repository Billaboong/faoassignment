<section>
    @if (session('status'))
    <div class="alert alert-success">
        <span class="bg-green-100 text-green-800 text-xs font-medium me-2 px-2.5 py-0.5 rounded-sm dark:bg-green-900 dark:text-green-300">{{ session('status') }}</span>
               
    </div>
    @endif
    <header>
        <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100">
            {{ __('Upload Newsletter') }}
        </h2>

        <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">
            {{ __("Provide the newsletter that shall be sent to subsrcibers.") }}
        </p>
    </header>
 
    <form method="post" action="{{ route('newsletter.upload') }}" class="mt-6 space-y-6" enctype="multipart/form-data">
        @csrf

        <div>
            <x-input-label for="newsletterdescription" :value="__('Newsletter Description')" />
            <x-text-input id="newsletterdescription" name="newsletterdescription" type="text" class="mt-1 block w-full"  required autofocus autocomplete="newsletterdescription" />
            <x-input-error class="mt-2" :messages="$errors->get('newsletterdescription')" />
        </div>

        <div>
            <x-input-label for="subject" :value="__('Email Subject')" />
            <x-text-input id="subject" name="subject" type="text" class="mt-1 block w-full"  required autofocus autocomplete="subject" />
            <x-input-error class="mt-2" :messages="$errors->get('subject')" />
        </div>

        <div>
            <x-input-label for="emailfile" :value="__('Email Body')" />
            <x-text-input id="emailfile" name="emailfile" type="file" class="mt-1 block w-full"  required autofocus />
            <x-input-error class="mt-2" :messages="$errors->get('emailfile')" />
        </div>
      

        <div>
            <x-input-label for="newsletterfile" :value="__('Newsletter')" />
            <x-text-input id="newsletterfile" name="newsletterfile" type="file" class="mt-1 block w-full"  required autofocus />
            <x-input-error class="mt-2" :messages="$errors->get('newsletterfile')" />
        </div>

        <div class="flex items-center gap-4">
            <x-primary-button>{{ __('Save') }}</x-primary-button>


        </div>
    </form>

    
</section>
