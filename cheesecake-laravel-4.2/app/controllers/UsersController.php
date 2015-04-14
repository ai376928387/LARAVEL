<?php

class UsersController extends BaseController {


    public function getAboutus() {

        return View::make('users.aboutus');
    }

    public function getContactus() {

        return View::make('users.contactus');
    }
}


?>