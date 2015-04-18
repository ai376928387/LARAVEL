@extends('layout.main')

@section('content')
	@include('layout.slider')
	<div class="row">
		<div class="col-lg-9">
			<!--start categories-->
			<h3>Categories</h3>
			<hr>
				<div class="btn-group">
				   <button type="button" class="btn btn-default btn1">{{trans('configure.want_to_sell_menu')}}</button>
				   <button type="button" class="btn btn-default btn2">{{trans('configure.want_to_buy_menu')}}</button>
				   <button type="button" class="btn btn-default btn3">{{trans('configure.want_to_recruit_menu')}}</button>
				   <button type="button" class="btn btn-default btn4">{{trans('configure.want_a_job_menu')}}</button>
				   <button type="button" class="btn btn-default btn5">{{trans('configure.want_a_partner_menu')}}</button>
				   <button type="button" class="btn btn-default btn6">{{trans('configure.want_a_team_menu')}}</button>
				   <button type="button" class="btn btn-default btn7">{{trans('configure.want_sb_to_do_menu')}}</button>
				   <button type="button" class="btn btn-default btn8">{{trans('configure.want_other_menu')}}</button>
				</div>
				<div class="panel panel-default">
				    <div class="panel-body">
				        <div class="row">
					      		<ul style="list-style:none;">
									@foreach($menu_items as $menu_item)
									<li style="float:left; width:33.33%">
	                                    <a href="{{URL::to('/dashboard/want/want_to_sell/product/'. str_replace('&','-',str_replace(' ','_',$menu_item->name)))}}" data-toggle="tooltip" data-placement="top"> {{$menu_item->name}} </a>
	                                	<!--如果链接中有空格，用下划线替代 str_replace-->
									</li>
	                            	@endforeach
	                        	</ul>
						</div>
				    </div>
				</div>
				<!--end categories-->
				
				<!--start Featured listings-->
				<h3>Featured Listings</h3>
				@include('layout.featuredProduct')
				<hr>
        </div>
		<div class="col-lg-3">
			<h3>LINK</h3>
		</div>
	</div>
</div> <!-- end container -->



@stop
