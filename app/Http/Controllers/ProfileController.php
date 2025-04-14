<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;
use Illuminate\Support\Facades\DB;

class ProfileController extends Controller
{
    /**
     * Display the user's profile form.
     */
    public function edit(Request $request): View
    {
        $countries = DB::table('countries')->where('delete_flag', '=', 0)->orderBy('name', 'asc')->get();

        return view('profile.edit', [
            'user' => $request->user(),
            'countries' => $countries
        ]);
    }

    /**
     * Update the user's profile information.
     */
    public function update(ProfileUpdateRequest $request): RedirectResponse
    {

        $request->user()->fill($request->validated());

        if ($request->user()->isDirty('email')) {
            $request->user()->email_verified_at = null;
        }

        $request->user()->country_id = $request->country;
        $request->user()->sector = $request->sector;

        $request->user()->save();

        return Redirect::route('profile.edit')->with('status', 'profile-updated');
    }

    /**
     * Delete the user's account.
     */
    public function destroy(Request $request): RedirectResponse
    {
        $request->validateWithBag('userDeletion', [
            'password' => ['required', 'current_password'],
        ]);

        $user = $request->user();

        Auth::logout();

        $user->delete();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return Redirect::to('/');
    }

    public function getIso2($countryId)
    {
        $country = DB::table('countries')
            ->select('iso2')
            ->where('id', '=', $countryId)
            ->where('delete_flag', '=', 0)
            ->get();
        $result = json_decode(json_encode($country), true);
        $resulttrimmed = $result[0]['iso2'];
        return $resulttrimmed;
    }

    public function getCountries()
    {
        
        $country = DB::table('countries')
            ->select('iso2')
            //->where('id', '=', $countryId)
            ->where('delete_flag', '=', 0)
            ->get();
        $result = json_decode(json_encode($country), true);
        
        return $result;

    }
}
