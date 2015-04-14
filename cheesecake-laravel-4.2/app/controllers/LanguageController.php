<?php 

class LanguageController extends BaseController {

	  public function chooser($language_type)
   {
       Session::set('locale',Input::get('locale'));
        return Redirect::back();
   }

}

?>