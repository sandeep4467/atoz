<!DOCTYPE html>
<html>
<body>

<h2>HTML Forms</h2>
@if(Session::has('message'))
<p class="alert {{ Session::get('alert-class', 'alert-info') }}">{{ Session::get('message') }}</p>
@endif
<form  method='post' action="{{asset('signup')}}">
    {{ csrf_field() }}
  Email:<br>
  <input type="email" name="email" required>
  <br>
  Password:<br>
  <input type="password" name="password" required>
  <br>
   Confirm Password:<br>
  <input type="password" name="confirm_password" required>
  <br><br>
  <input type="submit" value="Submit">
</form> 
</body>
</html>
