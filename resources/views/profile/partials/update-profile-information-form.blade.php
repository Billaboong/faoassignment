<section>
    <header>
        <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100">
            {{ __('Profile Information') }}
        </h2>

        <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">
            {{ __("Update your account's profile information and email address.") }}
        </p>
    </header>

    <form id="send-verification" method="post" action="{{ route('verification.send') }}">
        @csrf
    </form>

    <form method="post" action="{{ route('profile.update') }}" class="mt-6 space-y-6">
        @csrf
        @method('patch')

        <div>
            <x-input-label for="name" :value="__('Name')" />
            <x-text-input id="name" name="name" type="text" class="mt-1 block w-full" :value="old('name', $user->name)" required autofocus autocomplete="name" />
            <x-input-error class="mt-2" :messages="$errors->get('name')" />
        </div>

        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" name="email" type="email" class="mt-1 block w-full" :value="old('email', $user->email)" required autocomplete="username" />
            <x-input-error class="mt-2" :messages="$errors->get('email')" />

            @if ($user instanceof \Illuminate\Contracts\Auth\MustVerifyEmail && ! $user->hasVerifiedEmail())
                <div>
                    <p class="text-sm mt-2 text-gray-800 dark:text-gray-200">
                        {{ __('Your email address is unverified.') }}

                        <button form="send-verification" class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800">
                            {{ __('Click here to re-send the verification email.') }}
                        </button>
                    </p>

                    @if (session('status') === 'verification-link-sent')
                        <p class="mt-2 font-medium text-sm text-green-600 dark:text-green-400">
                            {{ __('A new verification link has been sent to your email address.') }}
                        </p>
                    @endif
                </div>
            @endif
        </div>
        <div>
            <x-input-label for="country" :value="__('Country')" /> 
            <select id="country" name="country" class="country mt-1 block w-50">
                <option value>--Choose a country--</option>
                @foreach ($countries as $country )                
                <option value="{{$country->id}}" {{ ( $country->id == $user->country_id) ? 'selected' : '' }} title="{{$country->iso2}}"> <img src="https://flagsapi.com/{{$country->iso2}}/shiny/32.png"  />  {{$country->name}}</option>                    
                @endforeach
            </select> <span class="countryflag w-50"> </span>
            </div>
        <div>
  

<div>
  <x-input-label for="country" :value="__('Sector')" />
  </div>
  <div></div>
<div class="flex flex-row gap-4">
    
  <div class="flex">
    <div class="flex items-center h-5">
        <input id="helper-radio1"  name="sector" aria-describedby="helper-radio-text" type="radio" value="0" {{ ( $user->sector == 0) ? 'checked' : '' }} class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
    </div>
    <div class="ms-2 text-sm">
        <label for="sector0" class="font-medium text-gray-900 dark:text-gray-300">Public Sector</label>
        <p id="helper-radio-text"  class="text-xs font-normal text-gray-500 dark:text-gray-300">Includes government agencies, national agencies, and departments</p>
    </div>
</div>
  <div class="flex">
    <div class="flex items-center h-5">
        <input id="sector1" name="sector" aria-describedby="helper-radio-text" type="radio" value="1" {{ ( $user->sector == 1) ? 'checked' : '' }} class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
    </div>
    <div class="ms-2 text-sm">
        <label for="helper-radio2" class="font-medium text-gray-900 dark:text-gray-300">Private Sector</label>
        <p id="helper-radio-text" class="text-xs font-normal text-gray-500 dark:text-gray-300">For orders shipped from $25 in books or $29 in other categories</p>
    </div>
</div>
  <div class="flex">
    <div class="flex items-center h-5">
        <input id="sector2" name="sector" aria-describedby="helper-radio-text" type="radio" value="2" {{ ( $user->sector == 2) ? 'checked' : '' }} class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
    </div>
    <div class="ms-2 text-sm">
        <label for="helper-radio" class="font-medium text-gray-900 dark:text-gray-300">Non-Profit/NGO/Academic</label>
        <p id="helper-radio-text" class="text-xs font-normal text-gray-500 dark:text-gray-300">This category is for a subscriber from non-government organizations, non-profits, or academic institutions</p>
    </div>
</div>
  <div class="flex">
    <div class="flex items-center h-5">
        <input id="helper-radio" name="sector" aria-describedby="helper-radio-text" type="radio" value="3" {{ ( $user->sector == 3) ? 'checked' : '' }} class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
    </div>
    <div class="ms-2 text-sm">
        <label for="sector3" class="font-medium text-gray-900 dark:text-gray-300">Individual/General Public</label>
        <p id="helper-radio-text" class="text-xs font-normal text-gray-500 dark:text-gray-300">An independent subscriber or not affiliated with any organization</p>
    </div>
</div>
</div>
        </div>
        
        <div class="flex items-center gap-4">
            <x-primary-button>{{ __('Save') }}</x-primary-button>

            @if (session('status') === 'profile-updated')
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
