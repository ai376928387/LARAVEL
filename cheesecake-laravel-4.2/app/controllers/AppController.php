<?php

class AppController extends BaseController {

    protected $layout = "layout.main";
    protected $per_page = 6;
    protected $file_destination_path = "img/upload/";
    protected $menu_items = "";

    public function __construct() {
        if (Lang::locale() === 'cn') {
            $fid = '|0|2';
        } else {
            $fid = '|0|1';
        }
        View::share('menu_items', DB::table('categories')->where("fid", "=", $fid)->get());
        //$this->beforeFilter('csrf', array('on' => 'post'));
        //$this->beforeFilter('auth'); 设置了这个则在app中所有的view如果在没有登陆的情况下都是自动跳转到Login 页面而不需要在main.php中用islogin来判断
    }

    /*     * *start of deal with users** */

    public function getUsers() {

        $users = User::where('username', '!=', "")->paginate(15);
        return View::make('app.showuser')->with("users", $users);
    }

    /*     * *end of deal with users** */


	/*     * *start of deal with profile** */


    public function getProfile() {

        $id = Auth::user()->id;
        //  $profile = Profile::where('uid', '=', $id)->get();

        if (Profile::where('uid', '=', Auth::user()->id)->exists()) {
            $profile_object = DB::table('profiles')->where("uid", "=", Auth::user()->id)->get(); //->paginate($this->per_page);


            $one_profile_object = $profile_object[0];
            //有两个同样数据返回
            return View::make('app.profile.profile_content')->with('profile', $one_profile_object)->with('has_profile', true);
        } else {
            $new_profile = new Profile();
            $new_profile->uid = Auth::user()->id;
            $new_profile->profile_name = "";
            $new_profile->city = "";
            $new_profile->country = "";
            $new_profile->about_me = "";
            $new_profile->facebook_url = "";
            $new_profile->twitter_url = "";
            $new_profile->google_url = "";
            $new_profile->linkin_url = "";
            $new_profile->other_site_url = "";
            $new_profile->profile_photo_url = "";
            $new_profile->save();
            return View::make('app.profile.profile_content')->with('profile', $new_profile)->with('has_profile', true);
        }

        //  $this->layout->content = count($profile);
    }

    public function getEditProfile(){
        $user = Auth::user();
        $profile = DB::table('profiles')->where("uid","=",Auth::user()->id)->get()[0];
        return View::make('app.profile.edit_profile')->with('user',$user)->with('profile',$profile);
    }
    public function postEditProfile(){
        $user = Auth::user();
        $user_id = Auth::user()->id;
        $profile = DB::table('profiles')->where("uid","=",Auth::user()->id)->get()[0];

        $profile_name = trim(Input::get('profile_name'));
        $city = trim(Input::get('city'));
        $country = trim(Input::get('country'));
        $about_me = trim(Input::get('about_me'));
        $facebook_url = trim(Input::get('facebook_url'));
        $twitter_url = trim(Input::get('twitter_url'));
        $google_url = trim(Input::get('google_url'));
        $linkin_url = trim(Input::get('linkin_url'));
        $other_site_url = trim(Input::get('other_site_url'));

        DB::table('profiles')->where("uid","=",Auth::user()->id)
            ->update(array('profile_name' => $profile_name, 'city' => $city, 'country' =>$country, 
                'about_me' => $about_me, 'facebook_url' => $facebook_url, 'twitter_url' => $twitter_url,
                'google_url'=> $google_url, 'linkin_url' => $linkin_url,'other_site_url'=>$other_site_url
                ));  

        $profile_updated = DB::table('profiles') -> where("uid" ,"=" ,$user_id)->get()[0];

        return View::make('app.profile.profile_content')->with('user',$user)->with('profile',$profile_updated)->with('has_profile',true);
    }

     public function getAccountInformation() {
        $user = Auth::user();
        return View::make('app.profile.user_account_information')->with("user", $user);
    }
    public function getEditAccountInformation() {
        $user = Auth::user();
        return View::make('app.profile.edit_account_information')->with("user", $user);
    }
    public function postEditAccountInformation() {
        $username = trim(Input::get('username'));
        $email = trim(Input::get('email'));
        $user = Auth::user();
        $user->username = $username;
        $user->email = $email;
        $user->save();
        return View::make('app.profile.user_account_information')->with("user", $user);
    }
    /*     * *end of deal with profile** */

//show all products by types
    public function getAllProducts() {
        $product_objects = DB::table('wants')->select('*')->orderBy('created_at', 'desc')->get(); //->paginate($this->per_page);

        $product_want_to_sell_objects = DB::table('wants')->where("want_type", "=", "want_to_sell")->orderBy('created_at', 'desc')->get();
        $product_want_to_buy_objects = DB::table('wants')->where("want_type", "=", "want_to_buy")->orderBy('created_at', 'desc')->get();
        $product_want_to_recruit_objects = DB::table('wants')->where("want_type", "=", "want_to_recruit")->orderBy('created_at', 'desc')->get();
        $product_want_a_job_objects = DB::table('wants')->where("want_type", "=", "want_a_job")->orderBy('created_at', 'desc')->get();
        $product_want_a_partner_objects = DB::table('wants')->where("want_type", "=", "want_a_partner")->orderBy('created_at', 'desc')->get();
        $product_want_a_team_objects = DB::table('wants')->where("want_type", "=", "want_a_team")->orderBy('created_at', 'desc')->get();
        $product_want_sb_to_do_objects = DB::table('wants')->where("want_type", "=", "want_sb_to_do")->orderBy('created_at', 'desc')->get();
        $product_want_other_objects = DB::table('wants')->where("want_type", "=", "want_other")->orderBy('created_at', 'desc')->get();
        $product_type = "All Prodcuts";

        $product_id_list = "";
        $product_objects = DB::table('wants')->orderBy('created_at', 'desc')->get();
        for ($i = 0; $i < count($product_objects); $i++) {
            if ($i == 0) {
                $product_id_list = "\"" . $product_objects[$i]->id . "\"";
            } else {
                if (strpos($product_id_list, $product_objects[$i]->id) === false) {
                    $product_id_list = $product_id_list . "," . "\"" . $product_objects[$i]->id . "\"";
                    // id,"第i项的id"
                }
            }

            $product_id_list = $product_id_list . "," . "\"" . $product_objects[$i]->name . "\""; //add the product name

            if (strpos($product_id_list, $product_objects[$i]->want_type) === false) { // show want_type without repeat
                $product_id_list = $product_id_list . "," . "\"" . $product_objects[$i]->want_type . "\""; //add the want type
            }
        }

        return View::make('home')
                ->with('product_type', $product_type)
                ->with("all", true)
                ->with("product_want_to_sell_objects", $product_want_to_sell_objects)
                ->with("product_want_to_buy_objects", $product_want_to_buy_objects)
                ->with("product_want_to_recruit_objects", $product_want_to_recruit_objects)
                ->with("product_want_a_job_objects", $product_want_a_job_objects)
                ->with("product_want_a_partner_objects", $product_want_a_partner_objects)
                ->with("product_want_a_team_objects", $product_want_a_team_objects)
                ->with("product_want_sb_to_do_objects", $product_want_sb_to_do_objects)
                ->with("product_want_other_objects", $product_want_other_objects)
                ->with("product_id_list", $product_id_list);
    }

     //browse one category content
    public function getWantCategoryContent($want_to_do_type) {
        $want_type = "";
        $product_objects = array();
        $product_want_to_buy_objcets = array();
        $product_want_to_recruit_objcets = array();
        $product_want_a_job_objcets = array();
        $product_want_a_partner_objcets = array();
        $product_want_a_team_objcets = array();
        $product_want_sb_to_do_objcets = array();
        $product_want_other_objcets = array();
        $product_id_list = "";
        switch ($want_to_do_type) {
            case "want_to_sell":
                $want_type = trans('configure.want_to_sell_menu');
                $want_to_do_type = str_replace("_", " ", $want_to_do_type);
                $product_objects = DB::table('wants')->where("want_type", "=", "want_to_sell")->orderBy('created_at', 'desc')->get();
                break;
            case "want_to_buy":

                $want_type = trans('configure.want_to_buy_menu');
                $want_to_do_type = str_replace("_", " ", $want_to_do_type);
                $product_objects = DB::table('wants')->where("want_type", "=", "want_to_buy")->orderBy('created_at', 'desc')->get();
                break;

            case "want_to_recruit":

                $want_type = trans('configure.want_to_recruit_menu');
                $want_to_do_type = str_replace("_", " ", $want_to_do_type);
                $product_objects = DB::table('wants')->where("want_type", "=", "want_to_recruit")->orderBy('created_at', 'desc')->get();
                break;
            case "want_a_job":

                $want_type = trans('configure.want_a_job_menu');
                $want_to_do_type = str_replace("_", " ", $want_to_do_type);
                $product_objects = DB::table('wants')->where("want_type", "=", "want_a_job")->orderBy('created_at', 'desc')->get();
                break;
            case "want_a_partner":

                $want_type = trans('configure.want_a_partner_menu');
                $want_to_do_type = str_replace("_", " ", $want_to_do_type);
                $product_objects = DB::table('wants')->where("want_type", "=", "want_a_partner")->orderBy('created_at', 'desc')->get();
                break;
            case "want_a_team":

                $want_type = trans('configure.want_a_team_menu');
                $want_to_do_type = str_replace("_", " ", $want_to_do_type);
                $product_objects = DB::table('wants')->where("want_type", "=", "want_a_team")->orderBy('created_at', 'desc')->get();
                break;
            case "want_sb_to_do":

                $want_type = trans('configure.want_sb_to_do_menu');
                $want_to_do_type = str_replace("_", " ", $want_to_do_type);
                $product_objects = DB::table('wants')->where("want_type", "=", "want_sb_to_do")->orderBy('created_at', 'desc')->get();
                break;
            case "want_other":

                $want_type = trans('configure.want_other_menu');
                $want_to_do_type = str_replace("_", " ", $want_to_do_type);
                $product_objects = DB::table('wants')->where("want_type", "=", "want_other")->orderBy('created_at', 'desc')->get();
                break;
            default:
                $this->layout->content = "No Object";
                break;
        }
        for ($i = 0; $i < count($product_objects); $i++) {
            if ($i == 0) {
                $product_id_list = $product_objects[$i]->id;
            } else {

                $product_id_list = $product_id_list . "," . $product_objects[$i]->id;
            }
        }
        return View::make('app.show_product')->with('product_type', $want_to_do_type)->with('want_type', $want_type)
                        ->with("all", false)->with("product_objects", $product_objects)->with("product_id_list", $product_id_list);
    }

}