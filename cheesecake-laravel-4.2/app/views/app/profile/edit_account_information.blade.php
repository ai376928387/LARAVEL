@extends('layout.main')

@section('content')

<div class="panel panel-default" style="height:1200px">
    <!-- Default panel contents -->

    <div class="panel-body">

        {{ Form::open(array('url'=>'/dashboard/edit_account_information','id'=>'form_edit_profile'))}}

        <div class="row" >
            <div class="col-md-3">
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
                 </div> <!--end of left side bar-->

            <div class="col-md-9  " style="-webkit-box-shadow: 0 0 3px 0 #D1D7FF;box-shadow: 0 0 3px 0 #D1D7FF;background-color:#E6F7FF;height:800px">
                <div class="row" style="font-size:22px;font-weight:bold;margin:10px auto"> 
                    <div class="col-md-5 ">
                        {{trans('configure.account_info')}} :
                    </div>
                    <div class="col-md-3 col-md-offset-3">
                        <button  type="submit">[      {{trans('configure.save_action')}} ]</button>
                    </div>
                </div>
                <div class="row"  style="margin:15px auto">
                    <div class="form-group">
                        <div class="col-md-3">
                            <label for="username"  class="profile_content_font"  >Username: </label>
                        </div>
                        <div class="col-md-7 ">
                            <input type="text" name="username" id="username" class="form-control required " placeholder="username" value="{{$user->username}}">
                        </div>
                    </div>
                </div>
                <div class="row"  style="margin:15px auto">
                    <div class="form-group">
                        <div class="col-md-3" >
                            <label for="email"  class="profile_content_font"  >{{trans('configure.profile_email')}} : </label>
                        </div>
                        <div class="col-md-7" >
                            <input type="email" name="email" id="email" class="form-control required " placeholder="email" value="{{$user->email}}">
                        </div>
                    </div>
                </div>
                <div class="row" style="margin:15px auto">
                    <div class="form-group">
                        <div class="col-md-3">
                            <label for="created_time"  class="profile_content_font"  >{{trans('configure.profile_create_time')}} : </label>
                        </div>
                        <div class="col-md-7 ">
                            {{$user->created_at}}
                        </div>
                    </div>
                </div>
                <div class="row" style="margin:15px auto">
                    <div class="form-group">
                        <div class="col-md-3">
                            <label for="updated_time"  class="profile_content_font"  >{{trans('configure.profile_update_time')}} : </label>
                        </div>
                        <div class="col-md-7 ">
                            {{$user->updated_at}}
                        </div>
                    </div>
                </div><!--end of profile information-->


            </div>
        </div>



        {{ Form::close() }}

    </div>
</div>
</div>
@stop

