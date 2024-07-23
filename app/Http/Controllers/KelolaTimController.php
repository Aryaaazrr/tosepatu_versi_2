<?php

namespace App\Http\Controllers;

use App\Mail\TimCreated;
use App\Mail\TimUpdated;
// use App\Models\KelolaTim;
use App\Models\Role;
use App\Models\User;
use App\Models\Wilayah;
use Carbon\Carbon;
use DateTimeZone;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
// use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;

class KelolaTimController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::whereNotIn('role_id', [1])->get();
        return view('superadmin.kelola-tim', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $jakartaTimezone = new DateTimeZone('Asia/Jakarta');
        $dateNow = Carbon::now($jakartaTimezone)->format('Ymd');
        $lastTim = User::latest('id_users')->first();
        // dd($lastTim);
        $nextNumber = 1;
        if ($lastTim) {
            $lastTimNumber = substr($lastTim->id_users, -4);    
            if (substr($lastTim->id_users, 2, 8) == $dateNow) {
                $nextNumber = intval($lastTimNumber) + 1;
                // dd($nextNumber);
            }
        }

        $tim = new User();
        $tim = 'KT' . $dateNow . str_pad($nextNumber, 4, '0', STR_PAD_LEFT);
        // dd($dateNow);
        $wilayah = Wilayah::all();
        $role = Role::whereNotIn('id', [1])->get();

        return view('superadmin.content.tambah-tim', ['id_users' => $tim, 'wilayah' => $wilayah, 'role' => $role]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // validasi data
        $validator = Validator::make($request->all(), [
            'username' => 'required',
            'email' => 'required|unique:users|email',
            'password' => 'required|min:8|regex:/^(?=.*[0-9])(?=.*[a-z]).{8,}$/|max:255',
        ]);

        // dd($validator);
        if ($validator->fails()) {
            return back()->with('errors', $validator->messages()->all()[0])->withInput();
        }

        $jakartaTimezone = new DateTimeZone('Asia/Jakarta');
        $user = User::create([
            'id_users' => $request->id_karyawan,
            'username' => $request->username,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'email_verified_at' => Carbon::now($jakartaTimezone),
            'wilayah_id' => $request->wilayah,
            'role_id' => $request->role,
        ]);

        // Kirim email
        Mail::to($user->email)->send(new TimCreated($user));

        return redirect('superadmin/kelola-tim')->with('success', 'Tim berhasil ditambahkan.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\KelolaTim  $kelolaTim
     * @return \Illuminate\Http\Response
     */
    public function show(User $kelolaTim, $id)
    {
        $kelolaTim = User::find($id);
        $role = $kelolaTim->role()->first();
        $wilayah = $kelolaTim->wilayah()->first();
        return view('superadmin.content.view-tim', ['kelolaTim' => $kelolaTim, 'role' => $role, 'wilayah' => $wilayah]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User  $kelolaTim
     * @return \Illuminate\Http\Response
     */
    public function edit(User $kelolaTim, $id)
    {
        $kelolaTim = User::find($id);
        $roleOld = $kelolaTim->role()->first();
        $wilayahOld = $kelolaTim->wilayah()->first();

        $wilayah = Wilayah::all();
        $role = Role::whereNotIn('id', [1])->get();
        return view('superadmin.content.edit-tim', ['kelolaTim' => $kelolaTim, 'role_old' => $roleOld, 'wilayah_old' => $wilayahOld, 'role' => $role, 'wilayah' => $wilayah]);
        // return view('superadmin.content.edit-tim', ['kelolaTim' => $kelolaTim, 'role' => $role, 'wilayah' => $wilayah]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\KelolaTim  $kelolaTim
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $kelolaTim, $id)
    {
        // dd($request->all());
        $kelolaTim = User::find($id);
        $roleOld = $kelolaTim->role()->first();
        $wilayahOld = $kelolaTim->wilayah()->first();

        $role = $request->role;
        $wilayah = $request->wilayah;

        if ($role == $roleOld) {
            return redirect()->back()->with('error', 'Role tidak boleh sama dengan sebelumnya.');
        } elseif ($wilayah == $wilayahOld) {
            return redirect()->back()->with('error', 'Wilayah tidak boleh sama dengan sebelumnya.');
        } else {
            // simpan data ke database
            $user = User::where('id', $id)->first();
            $user->update([
                'role_id' => $request->role,
                'wilayah_id' => $request->wilayah,
            ]);

            // Kirim email
            Mail::to($user->email)->send(new TimUpdated($user));

            return redirect('superadmin/kelola-tim')->with('success', 'Tim berhasil diperbarui.');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\KelolaTim  $kelolaTim
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $kelolaTim)
    {
        //
    }
}
