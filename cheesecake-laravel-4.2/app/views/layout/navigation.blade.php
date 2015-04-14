<div class="container header">

	<div class="navbar-header">
		<a href="{{ URL::route('home') }}">
			{{ HTML::image('images/logo.png','logo',array(
				'class'=>'img-circle',
				'width'=>'50px'
			)) }}
		</a>
	</div>

	<nav class="collapse navbar-collapse bs-navbar-collapse">
		<ul class="nav navbar-nav">
			<li><a href="{{ URL::route('home') }}">{{ trans('configure.home') }}</a></li>
			<li><a href="{{ URL::route('profile') }}">Post A Task</a></li>
			<li><a href="{{ URL::route('profile') }}">{{ trans('configure.private_menu') }}</a></li>
			<li><a href="{{ URL::route('aboutus') }}">{{ trans('configure.aboutus_menu') }}</a></li>
			<li><a href="{{ URL::route('contactus') }}">{{ trans('configure.contactus_menu') }}</a></li>
			
		</ul>


	<div class="dropdown right-menu">

			<!--select language-->
    	<form action="{{URL::route('language-chooser')}}" method="post" style="float:left;">
            <select name="locale" id="local_language">
                <option value="en">  {{trans('configure.language_en')}}

                </option>
                <option value="cn"{{ Lang::locale()==='cn' ? 'selected' : ''}} > {{trans('configure.language_cn') }}

                </option>
            </select>
            <input type="submit" id="change_language_button" value="Confirm">
            {{Form::token()}}
        </form>
        <script>
            $('#local_language').on('change', function() {
                $('#change_language_button').click();
            });
        </script>

        <!-- view cart -->
		<div class="view-cart">
			<a href="#">
				<button class="btn btn-default dropdown-toggle" type="button">
					<span class="glyphicon glyphicon-shopping-cart" aria-hidden="true">Cart</span>
				</button>
			</a>
		</div>
		
        <!--sign&login-->
		<button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-expanded="true">
		@if(Auth::check())
		Hi {{ Auth::user()->username }}!
		@else
		Account
		@endif
		<span class="caret"></span> 
		</button>

		<ul class="dropdown-menu  dropdown-menu-right" role="menu" aria-labelledby="dropdownMenu1">
			@if(Auth::check())
			<li role="presentation"><a role="menuitem" tabindex="-1" href="{{ URL::route('account-sign-out') }}">Sign Out</a></li>
			<li role="presentation"><a role="menuitem" tabindex="-1" href="{{ URL::route('account-change-password') }}">Change Password</a></li>
			@else
			<li role="presentation"><a role="menuitem" tabindex="-1" href="{{ URL::route('account-sign-in') }}">Sign in</a></li>
			<li role="presentation"><a role="menuitem" tabindex="-1" href="{{ URL::route('account-create') }}">Create an account</a></li>
			<li role="presentation"><a role="menuitem" tabindex="-1" href="{{ URL::route('account-forgot-password') }}">Forgot Password </a></li>
			@endif
		</ul>
		
	</div>
	<div class="clearfix"></div>
	</nav>
</div>