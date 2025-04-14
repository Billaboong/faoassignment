<section>
    <header>
        <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100">
            <span class="bg-blue-100 text-blue-800 text-xs font-medium me-2 px-2.5 py-0.5 rounded-sm dark:bg-gray-700 dark:text-blue-400 border border-blue-400">3</span> {{ __('Assign Permissions') }}
        </h2>

    </header>
    @if (session('status'))
    <div class="alert alert-success">
        <span class="bg-green-100 text-green-800 text-xs font-medium me-2 px-2.5 py-0.5 rounded-sm dark:bg-green-900 dark:text-green-300">{{ session('status') }}</span>
        
    </div>
@endif

    <form method="post" action="{{ route('rolepermission.assignrolepermission') }}" class="mt-6 space-y-6">
        @csrf
        @method('post')

        <div>
            <x-input-label for="roles" :value="__('Select a Role')" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"/>
            <select id="roles" name="roles" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-1/2 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
              <option selected>--Select --</option> 
              @foreach ($roles as $role )
              <option value="{{$role}}">{{$role}}</option>  
              @endforeach
            </select>
        </div>
        <div>
            <x-input-label for="permissions" :value="__('Select permission(s)')" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"/>
        <select class="permissions" name="permissions[]" multiple="multiple" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-1/2 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">>
        
            @foreach ($permissions as $permission )
            <option value="{{$permission}}">{{$permission}}</option>  
            @endforeach
          </select>
        </div>


        <div class="flex items-center gap-4">
            <x-primary-button>{{ __('Save') }}</x-primary-button>

            @if (session('status') === 'password-updated')
                <p
                    x-data="{ show: true }"
                    x-show="show"
                    x-transition
                    x-init="setTimeout(() => show = false, 2000)"
                    class="text-sm text-gray-600 dark:text-gray-400"
                >{{ __('Saved.') }}</p>
            @endif
        </div>
    </form>
</section>