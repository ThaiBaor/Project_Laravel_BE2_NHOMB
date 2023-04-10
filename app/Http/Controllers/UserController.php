<?php
 
namespace App\Http\Controllers;
use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
class UserController extends Controller
{
    /**
     * Show all application users.
     */
    public function listuser()
    {
        $users = DB::table('users')->paginate(4);
        return view('listuser', compact('users'));
    }
}