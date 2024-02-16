<?php
namespace App\Http\Controllers;
use App\Models\User;
use App\Models\UserDetail;
use Illuminate\Contracts\Cache\Store;
use Illuminate\Http\Client\Request as ClientRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Request as FacadesRequest;
use Illuminate\Support\Facades\Storage;
use Mockery\Matcher\Type;

class UserControler extends Controller
{
    public function userPage( Request $request , User $user)
    {
        $user = auth()->user();
        // if(isset($user->userdDetail)){
        $user_dt=$user->userDetail; 
        
        if($user_dt==null)
        {
            $user_dt['address']='';
            $user_dt['phone_number']='';
        }else{
            
            $user_dt=$user->userDetail;
        }
        return view("auth.user",compact("user",'user_dt'));
    // }
    }

    public function userUpdate(Request $request, User $id ,UserDetail $detail)
    {
    $file = $request->file('img');
    Storage::disk('public')->delete('images',$id->image);
    $path = Storage::disk('public')->put('images', $file);
        $id->update([
         'name'=>$request->name,
         'password'=>$request->password,
         'image'=>$path
                   ]);
                   UserDetail::updateOrCreate([
                                        'user_id' => $id->id,
                                    ], [
                                        'address'=>$request->address,   
                                        'phone_number' => $request->phno,
                                    ]);

     return redirect()->route('user_dash');
    }


    public function changeUser(User $id,$status){
        $id->status=$status;
        $id->save();
        $newStatus = ($status === 'Active') ? 'Active' : 'Inactive';
        return response()->json(['newStatus' => $newStatus]);
        }
//user delete from table on admin page
        public function  delete(User $id)
        {
            print_r($id->toArray());
            Storage::disk('public')->delete('images',$id->image);
            $id->delete();
        }


        public function profileUpdate(Request $request,User $user){
            $data = auth()->user();
            $id=$data->id;
            // print_r($data->image);
            Storage::disk('public')->delete('images',$data->image);
            $user = User::find($id);
                $file = $request->file('img');
                $path = Storage::disk('public')->put('images', $file);
            $user->update([
            'image'=>$path
          ]);
     echo json_encode($path);


        }
 }