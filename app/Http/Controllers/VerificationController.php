<?php

namespace App\Http\Controllers;

use App\Jobs\KirimWaJob;
use App\Models\Verification;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Spatie\Permission\Models\Role;

class VerificationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'user_id' => 'nullable',
            'otp_code' => 'required'
        ]);
        $user = Auth::user();
        $data['user_id'] = $user->id;
        $verification = Verification::where('status', 'REQUEST')->where('otp_code', $request->otp_code)->first();
        if ($verification) {
            $verification->update([
                'status' => 'SUCCESS'
            ]);
            DB::table('model_has_roles')->where('model_id', $user->id)->delete();
            $user->assignRole('USER');
            session()->flash('success');
            return back();
        } else {
            session()->flash('bug', 'Pastikan Kode OTP Anda Benar');
            return back();
        }
    }
    public function updateOtp()
    {
        $user = Auth::user();
        $verification = Verification::where('status', 'REQUEST')->where('user_id', $user->id)->first();
        $otp_code = random_int(100000, 999999);

        $message = "Kode OTP Anda Adalah " . $otp_code;
        $asset = [
            $message,
            $user->phone_number
        ];
        KirimWaJob::dispatch($asset);
        $verification->update([
            'otp_code' => $otp_code
        ]);
        session()->flash('success');
        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Verification  $verification
     * @return \Illuminate\Http\Response
     */
    public function show(Verification $verification)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Verification  $verification
     * @return \Illuminate\Http\Response
     */
    public function edit(Verification $verification)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Verification  $verification
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Verification $verification)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Verification  $verification
     * @return \Illuminate\Http\Response
     */
    public function destroy(Verification $verification)
    {
        //
    }
}
