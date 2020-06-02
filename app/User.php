<?php

namespace App;
use Auth;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use App\Notifications\Message;
use Illuminate\Support\Facades\Notification;
class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
    

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function tweets(){
        return $this->hasMany(Tweet::class);
    }
    
    public function follows(){
        return $this->hasMany(Follow::class);
    }
    public function follow(User $user){
        $follow=new Follow;
        $follow->user_id=Auth::user()->id;
        $follow->follower_id=$user->id;
        $follow->save();
        Notification::send($user,new Message());

     }
    public function Unfollow(User $user){
        $data=Follow::where('follower_id',$user->id)->delete();
        
        }
    
    public function following(User $user){

        return $this->follows()->where('follower_id',$user->id)->exists();
    }

    // public function timeline(){
    //     $ids=$this->follows()->pluck('follower_id');
    //     return $ids;
    // }
}
