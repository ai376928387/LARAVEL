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
                    <a href="#">
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
                            {{trans('configure.account_info')}}
                        </div>
                        <div class="col-md-3 col-md-offset-4">
                            <a href="{{URL::route('edit_account_information')}}" class="">
                                [ <span class="glyphicon glyphicon-pencil">
                                </span>  {{trans('configure.edit_action')}} ]
                            </a> 
                         </div> 
                    </div> 

                    <div class="row" >
                        <div class="form-group">
                            <div class="col-md-3">
                                <label for="profile_name"  class="profile_content_font"  > Username </label>
                            </div>
                            <div class="col-md-7 col-md-offset-2">
                                {{$user->username}}
                            </div>
                        </div>
                    </div>

                    <div class="row" >
                        <div class="form-group">
                            <div class="col-md-3">
                                <label for="city"  class="profile_content_font"  >{{trans('configure.profile_email')}}: </label>
                            </div>
                            <div class="col-md-7 col-md-offset-2">
                                {{$user->email}}
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="form-group">
                            <div class="col-md-3">
                                <label for="country"  class="profile_content_font"  >{{trans('configure.profile_create_time')}}  : </label>
                            </div>
                            <div class="col-md-7 col-md-offset-2">
                               {{$user->created_at}}
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group">
                            <div class="col-md-3">
                                <label for="updated_time"  class="profile_content_font"  >{{trans('configure.profile_update_time')}} : </label>
                            </div>
                            <div class="col-md-7 col-md-offset-2">
                                {{$user->updated_at}}
                            </div>
                        </div>
                    </div>
                </div><!--end of profile information--> 
        	</div>
    	</div>
    </div>
</div>


@stop
