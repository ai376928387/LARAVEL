@extends('layout.main')

@section('content')


@if(Session::has('email_message'))
    @if(Session::has('success'))
    <p class="alert alert-success" style="font-size:16px;"> {{ Session::get('email_message') }}</p>
    @else
    <p class="alert alert-warning" style="font-size:16px;"> {{ Session::get('email_message') }}</p>
    @endif

<?php Session::forget('email_message');
Session::forget('success');
?>
@endif

<div class="well"  style="height:1200px">
    <!---This section for panel component-->

    <div class="panel panel-primary"  style="height:1000px">
        <div class="panel-heading">
            <h2  style="font-weight:bold; text-align:center" >  {{trans('configure.contactus_menu')}}</h2>
        </div>

        <div class="panel-body">
            <div class="row">
                <div class="col-md-5 col-sm-3">
                    <table class="table">
                        <caption><h4 style="font-weight:bold">  {{trans('configure.contactus_page_form_title')}}:</h4></cation>
                            <tr><td>  {{trans('configure.contactus_page_form_phone')}}: </td><td>+64 9 309 6868  </td></tr>
                            <tr><td>  {{trans('configure.contactus_page_form_fax')}}: </td><td>+64 9 309 6868  </td></tr>
                            <tr><td>  {{trans('configure.contactus_page_form_email')}}: </td><td>marketing@jobsearch.com  </td></tr>
                            <tr><td>  {{trans('configure.contactus_page_form_post')}}: </td><td>123 duddign ave, northcote, Auckland, New Zealand  </td></tr>
                            <tr><td>  {{trans('configure.contactus_page_form_add')}}: </td><td>Level4, 220 Queen St, CBD, Auckland, New Zealand </td></tr>
                            <tr><td>  {{trans('configure.contactus_page_form_opentime')}}E: </td><td>8am to 5pm workday </td></tr>
                    </table>    
                </div>
                <div class="col-md-6 col-md-offest-2 col-sm-4" style="width: 56%;">
                    <div class="Flexible-container" style="border:1px solid #000;">
                        <iframe width="425" height="550" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en-GB&amp;geocode=&amp;q=1+dudding+ave,northcote,auckland&amp;aq=&amp;sll=46.947922,7.444608&amp;sspn=0.146249,0.315857&amp;gl=US&amp;ie=UTF8&amp;hq=&amp;hnear=1+Dudding+Ave,+Northcote,+Auckland+0627,+New+Zealand&amp;t=m&amp;z=14&amp;ll=-36.803493,174.745755&amp;output=embed"></iframe><br /><small><a href="https://maps.google.com/maps?f=q&amp;source=embed&amp;hl=en-GB&amp;geocode=&amp;q=1+dudding+ave,northcote,auckland&amp;aq=&amp;sll=46.947922,7.444608&amp;sspn=0.146249,0.315857&amp;gl=US&amp;ie=UTF8&amp;hq=&amp;hnear=1+Dudding+Ave,+Northcote,+Auckland+0627,+New+Zealand&amp;t=m&amp;z=14&amp;ll=-36.803493,174.745755" style="color:#0000FF;text-align:left">View Larger Map</a></small>
                    </div>  
                </div>
            </div>
            <div class="row">
                <div class="col-md-8 col-md-offset-4 col-sm-6">

                </div>
            </div>
        </div>
    </div>
</div>

@stop


