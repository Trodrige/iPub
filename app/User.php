<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'phone_number',
        'password',
        'type',
        'profile_picture',
        'tour_video',
        'description',
        'country',
        'dial_code',
        'stars',
        'invited',
        'followers',
        'confirmed',
        'confirmation_code'
    ];

    /**
      * The attributes that should be hidden for arrays.
      *
      * @var array
      */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * a user has one profile picture
     * @return App\ProfilePicture
     */
    public function profilePicture(){
        return $this->hasOne('App\ProfilePicture');
    }

    /**
     * a user has 0 or more links (contact links) i.e website url, additional email, phone number, fax and other contact links, place address
     * @return \App\Link
     */
    public function links(){
        return $this->hasMany('App\Link');
    }

    /**
     * a user has 0 or more notifications
     * @return \App\Notification
     */
    public function notifications(){
        return $this->hasMany('App\Notification');
    }

    /**
     * a user makes 0 or more pubs
     * @return \App\Pub
     */
    public function pubs(){
        return $this->hasMany('App\Pub');
    }

    /**
     * a user makes 0 or more subscriptions i.e video_pub_subscription, continous_pub_subscription, priority_zone_subscription
     * @return \App\Subscription
     */
    public function subscriptions(){
        return $this->hasMany('App\Subscription');
    }

    /**
     * a user has 0 or more followers
     * @return \App\Follower
     */
    public function followers(){
        return $this->belongsToMany('App\Follower');
    }

    /**
     * a user has 0 or more mails
     * @return \App\Mail
     */
     public function mailitems(){
        return $this->hasMany('App\MailItem');
     }

     /**
      * a user has 0 or more geolocations
      * @return App\GeoLocation
      */
     public function geoLocations(){
         return $this->hasMany('App\GeoLocation');
     }
}
