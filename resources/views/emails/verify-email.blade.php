Hello {!! $user->username !!},
<br>
Thanks for registering , please verify your email id
<a href="{!! url('email/verify?email='.$user->email.'&code='.$user->verification_code) !!}" >Verify Now</a> 
		 