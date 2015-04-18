@extends('layout.main')

@section('content')
<div class="panel panel-default" style="height:1200px">

	 {{ Form::open(array('url'=>'/dashboard/edit_profile','id'=>'form_edit_profile'))}}
	 
    <div class="row" >
        <div class="col-md-3">
            <div class="row">
                <div class="row">
<!--                        <img src="../img/upload/21d2cf7.jpg" class="img-responsive">-->
                    </div>
                <div class="row">
                    <a href="{{ URL::route('get_account_information') }} ">
                        <button class="btn btn-primary btn-lg btn-block" type="button">
                            {{trans('configure.account')}}
                        </button>
                    </a>
                </div>
                <div class="row">
                    <a href="{{ URL::route('edit_account_information') }}">
                        <button class="btn btn-primary btn-lg btn-block" type="button">
                            {{trans('configure.edit_account')}}
                        </button>
                    </a>
                </div>
                <div class="row">
                    <a href="{{ URL::route('profile') }}">
                        <button class="btn btn-primary btn-lg btn-block" type="button">
                            {{trans('configure.profile_content')}}
                        </button>
                    </a>
                </div>

                <div class="row">
                    <a href="{{URL::route('edit_profile')}}">
                        <button class="btn btn-primary btn-lg btn-block" type="button">
                            {{trans('configure.edit_profile')}} 
                        </button>
                    </a>
                </div>

                <div class="row">
                    <a href="#">
                        <button class="btn btn-primary  btn-lg btn-block" type="button">
                            {{trans('configure.mylisting')}}
                        </button>
                    </a>
                </div>

                <div class="row">
                    <a href="#">
                        <button class="btn btn-primary  btn-lg btn-block" type="button">
                            {{trans('configure.all_question')}}
                        </button>
                    </a>
                </div>
            </div>
        </div>

        <div class="col-md-9">             
            <div class="row" >
                 <div class="col-md-12  " style="-webkit-box-shadow: 0 0 3px 0 #D1D7FF;box-shadow: 0 0 3px 0 #D1D7FF;background-color:#E6F7FF">
                    <div class="row" style="font-size:22px;font-weight:bold;margin:10px auto"> 
                        <div class="col-md-5 ">
                            {{trans('configure.profile_infomation')}}:
                        </div>
                        <div class="col-md-3 col-md-offset-4">
                            <button  type="submit">[ Save ]</button>
                        </div>
                    </div>
                    <div class="row" style="margin:15px 2px">
                        <div class="form-group">
                            <div class="col-md-4">
                                <label for="profile_name"  class="profile_content_font"  >{{trans('configure.profile_name')}}: </label>
                            </div>
                            <div class="col-md-8 " id="profile_name">
                                <input type="text" name="profile_name" id="profile_name" class="form-control required " placeholder="profile name" value="{{$profile->profile_name}}">
                            </div>
                        </div>
                    </div>
                    <div class="row" style="margin:15px 2px">
                        <div class="form-group">
                            <div class="col-md-4">
                                <label for="city"  class="profile_content_font"  >{{trans('configure.profile_city')}}: </label>
                            </div>
                            <div class="col-md-8 " id="city">
                                <input type="text" name="city" id="city" class="form-control required " placeholder="city" value="{{$profile->city}}">

                            </div>
                        </div>
                    </div>
                    <div class="row" style="margin:15px 2px">
                        <div class="form-group">
                            <div class="col-md-4">
                                <label for="country"  class="profile_content_font"  > {{trans('configure.profile_country')}}  : </label>
                            </div>
                            <div class="col-md-8" id="country">
                                <select id="country" name="country"  class="form-control required" value="{{$profile->country}}">
                                    <option value="">Please Select One</option>
                                    <option value="china"> china</option>
                                    <option value="American"> American</option>
                                    <option value="Canada"> Canada</option>
                                    <option value="Uk"> Uk</option>
                                    <option value="Signapa"> Signapa</option>
                                    <option value="Australia"> Australia</option>
                                    <option value="New Zealand"> New Zealand</option>
                                </select>
                            </div>
                        </div>
                    </div>


                    <div class="row" style="margin:15px 2px">
                        <div class="form-group">
                            <div class="col-md-4">
                                <label for="about_me"  class="profile_content_font"  >{{trans('configure.profile_aboutme')}}: </label>
                            </div>
                            <div class="col-md-8 ">
                                <textarea class="form-control required" rows="5" name="about_me" id="about_me"  value="{{$profile->about_me}}" autofocus></textarea>

                            </div>
                        </div>
                    </div>
	            </div><!--end of profile information-->

                <div class="row" style="margin:15px auto">
                    <div class="row" style="font-size:22px;font-weight:bold;margin:10px auto"> 
                        <div class="col-md-12 ">
                            {{trans('configure.profile_link_to_info')}}:
                        </div>
                    </div>
                    <div class="row" style="margin:15px 2px">
                        <div class="form-group">
                            <div class="col-md-4">
                                <label for="facebook_url"  class="profile_content_font"  >{{trans('configure.profile_facebook_url')}}: </label>
                            </div>
                            <div class="col-md-8">

                                <input type="text" name="facebook_url" id="facebook_url" class="form-control required " placeholder="facebook url" value="{{$profile->facebook_url}}">

                            </div>
                        </div>
                    </div>
                    <div class="row"  style="margin:15px 2px">
                        <div class="form-group">
                            <div class="col-md-4">
                                <label for="twitter_url"  class="profile_content_font"  >{{trans('configure.profile_twitter_url')}}: </label>
                            </div>
                            <div class="col-md-8">
                                <a href="#">         
                                    <input type="text" name="twitter_url" id="twitter_url" class="form-control required " placeholder="twitter url" value="{{$profile->twitter_url}}">
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="row" style="margin:15px 2px">
                        <div class="form-group">
                            <div class="col-md-4">
                                <label for="google_url"  class="profile_content_font"  >{{trans('configure.profile_google_url')}} : </label>
                            </div>
                            <div class="col-md-8">
                                <a href="#">         
                                    <input type="text" name="google_url" id="google_url" class="form-control required " placeholder="google url" value="{{$profile->google_url}}">
                                </a>

                            </div>
                        </div>
                    </div>
                    <div class="row" style="margin:15px 2px">
                        <div class="form-group">
                            <div class="col-md-4">
                                <label for="linkin_url"  class="profile_content_font"  >{{trans('configure.profile_linkin_url')}} : </label>
                            </div>
                            <div class="col-md-8">
                                <a href="#">         
                                    <input type="text" name="linkin_url" id="linkin_url" class="form-control required " placeholder="linkin url" value="{{$profile->linkin_url}}">
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="row" style="margin:15px 2px">
                        <div class="form-group">
                            <div class="col-md-4">
                                <label for="other_site_url"  class="profile_content_font"  >{{trans('configure.profile_othersite_url')}} : </label>
                            </div>
                            <div class="col-md-8">
                                <a href="#">         
                                    <input type="text" name="other_site_url" id="other_site_url" class="form-control required " placeholder="other site url" value="{{$profile->other_site_url}}">
                                </a>
                            </div>
                        </div>
                    </div><!--end of profile information-->
                </div>

            </div>
        </div>
        {{ Form::close() }}

        </div>
    </div>
</div>






@stop