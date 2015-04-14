@extends('layout.main')

@section('content')

<div class="panel panel-default" style="height:1200px">
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
                            {{trans('configure.profile_content')}}
                        </div>
                        <div class="col-md-3 col-md-offset-4">
                            <a href="{{URL::route('edit_profile')}}" class="">
                                [ <span class="glyphicon glyphicon-pencil">
                                </span>  {{trans('configure.edit_action')}} ]
                            </a> 
                         </div> 
                    </div> 

                    <div class="row" >
                        <div class="form-group">
                            <div class="col-md-3">
                                <label for="profile_name"  class="profile_content_font"  > {{trans('configure.profile_name')}} </label>
                            </div>
                            <div class="col-md-7 col-md-offset-2" id="profile_name" name="profile_name">

                                @if($has_profile == true)
                                {{$profile->profile_name}}
                                @endif
                            </div>
                        </div>
                    </div>

                    <div class="row" >
                        <div class="form-group">
                            <div class="col-md-3">
                                <label for="city"  class="profile_content_font"  >{{trans('configure.profile_city')}}: </label>
                            </div>
                            <div class="col-md-7 col-md-offset-2" id="city" name="city">
                                @if($has_profile == true)
                                {{$profile->city}}
                                @endif
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="form-group">
                            <div class="col-md-3">
                                <label for="country"  class="profile_content_font"  >{{trans('configure.profile_country')}} : </label>
                            </div>
                            <div class="col-md-7 col-md-offset-2" id="country" name="country">
                                @if($has_profile == true)
                                {{$profile->country}}
                                @endif
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="form-group">
                            <div class="col-md-3">
                                <label for="upload_photo"  class="profile_content_font"  >{{trans('configure.profile_upload_photo')}}: </label>
                            </div>
                            <div class="col-md-7 col-md-offset-2" name="upload_photo">
                                @if($has_profile == true)
                                {{$profile->profile_photo_url}}
                                @endif
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="form-group">
                            <div class="col-md-3">
                                <label for="about_me"  class="profile_content_font"  >{{trans('configure.profile_aboutme')}}: </label>
                            </div>
                            <div class="col-md-7 col-md-offset-2" name="about_me">
                                @if($has_profile == true)
                                {{$profile->about_me}}
                                @endif
                            </div>
                        </div>
                    </div>

                </div><!--end of profile information-->

                <div class="col-md-12  " style="-webkit-box-shadow: 0 0 3px 0 #D1D7FF;box-shadow: 0 0 3px 0 #D1D7FF;background-color:#E6F7FF">
                    <div class="row" style="margin:10px auto">
                        <div class="row" style="font-size:22px;font-weight:bold;margin:10px auto"> 
                            <div class="col-md-12 ">
                                {{trans('configure.profile_link_to_info')}}
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group">
                                <div class="col-md-4">
                                    <label for="facebook_url"  class="profile_content_font"  >{{trans('configure.profile_facebook_url')}}: </label>
                                </div>
                                <div class="col-md-8" id="facebook_url" name="facebook_url">
                                    @if($has_profile == true) 
                                    @if($profile->facebook_url!="")    
                                    <a href=" {{$profile->facebook_url}}"  target="_blank">  <i class="fa fa-facebook"> </i></a>
                                    @endif   
                                    @endif       
                                </div>
                            </div>
                        </div>
                        <div class="row" >
                            <div class="form-group">
                                <div class="col-md-4">
                                    <label for="twitter_url"  class="profile_content_font"  >{{trans('configure.profile_twitter_url')}}: </label>
                                </div>
                                <div class="col-md-8">
                                    @if($has_profile == true)
                                    @if($profile->twitter_url!="")    
                                    <a href=" {{$profile->twitter_url}}"  target="_blank">  <i class="fa fa-twitter"></i></a>
                                    @endif

                                    @endif
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group">
                                <div class="col-md-4">
                                    <label for="google_url"  class="profile_content_font"  >{{trans('configure.profile_google_url')}}: </label>
                                </div>
                                <div class="col-md-8">
                                    @if($has_profile == true)
                                    @if($profile->google_url!="")  

                                    <a href=" {{$profile->google_url}}"  target="_blank">  <i class="fa fa-google-plus"> </i></a>
                                    @endif
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group">
                                <div class="col-md-4">
                                    <label for="linkin_url"  class="profile_content_font"  >{{trans('configure.profile_linkin_url')}} : </label>
                                </div>
                                <div class="col-md-8">  
                                    @if($has_profile == true)  

                                    @if($profile->linkin_url!="")    

                                    <a href=" {{$profile->linkin_url}}"  target="_blank">  <i class="fa fa-linkedin"> </i></a>
                                    @endif
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group">
                                <div class="col-md-4">
                                    <label for="other_site_url"  class="profile_content_font"  >{{trans('configure.profile_othersite_url')}} : </label>
                                </div>
                                <div class="col-md-8"> 
                                    @if($has_profile == true)
                                      @if($profile->other_site_url!="")  
                                         <a href=" {{$profile->other_site_url}}" target="_blank">  <i class="fa fa-link"> </i></a>
                                    @endif
                                       @endif
                                </div>
                            </div>
                        </div><!--end of profile information-->
                    </div>
        </div>
    </div>
</div>
@stop

