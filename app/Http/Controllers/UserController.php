<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Verification;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('permission:user-index|user-create|user-edit|user-delete', ['only' => ['index', 'show']]);
        $this->middleware('permission:user-create', ['only' => ['create', 'store']]);
        $this->middleware('permission:user-edit', ['only' => ['edit', 'update']]);
        $this->middleware('permission:user-delete', ['only' => ['destroy']]);
    }
    public function index()
    {
        $users = User::getUser(Auth::user());
        return view('backend.user.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $roles = User::getRoles(Auth::user());
        return view('backend.user.create', compact('roles'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $this->validate($request, [
            'name' => 'required',
            'email' => 'required|unique:users,email|email',
            'password' => 'required|confirmed',
            'roles' => 'required'
        ]);
        $data['password'] = Hash::make($request->password);
        $user = User::create($data);
        $user->assignRole($data['roles']);
        session()->flash('success');
        return redirect(route('user.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        $roles = User::getRoles(Auth::user());
        return view('backend.user.create', compact('user', 'roles'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        $data = $this->validate($request, [
            'name' => 'required',
            'email' => 'required|unique:users,email,' . $user->id,
            'password' => 'nullable|confirmed',
            'roles' => 'nullable',
            'phone_number' => 'nullable',
        ]);
        $data = $request->except('password');
        if ($request->password) {
            $data['password'] = Hash::make($request->password);
        }
        if ($user->phone_number != $request->phone_number) {
            $verification = Verification::where('status', 'REQUEST')->where('user_id', $user->id)->first();
            $otp_code = random_int(100000, 999999);
            $whatsapp = new WhatsappController;
            $message = "Kode OTP Anda Adalah " . $otp_code;
            $whatsapp->kirimPesan($message, $request->phone_number);
            $verification->update([
                'otp_code' => $otp_code
            ]);
        }
        $user->update($data);
        if ($request->roles) {
            DB::table('model_has_roles')->where('model_id', $user->id)->delete();
            $user->assignRole($request['roles']);
        }
        session()->flash('success');
        return redirect(route('user.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        $user->delete();
        session()->flash('success');
        return back();
    }
    public function reset_password(User $user)
    {
        $user->update([
            'password' => ''
        ]);
        session()->flash('success');
        return back();
    }
}
