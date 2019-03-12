<!DOCTYPE html>
<html>
<body>


@if(Session::has('message'))
<p class="alert {{ Session::get('alert-class', 'alert-info') }}">{{ Session::get('message') }}</p>
@endif
<form method='post' action="{{asset('login')}}">
    {{ csrf_field() }}
  Email:<br>
  <input type="email" name="email">
  <br>
  Password:<br>
  <input type="password" name="password" required>
  <br>
 
  <input type="submit" value="Submit">
</form> 
</body>
</html>
