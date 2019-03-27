<!-- Error and Alerts starts -->
@if(isset($errors))
@foreach($errors->all() as $error)
<div class="alert alert-danger error-message animated fadeInDown alt alert-dismissible" role="alert">
  <span class="error-message-content">{{ $error }}</span>
  <a class="close" data-dismiss="alert">&times;</a>
</div>
@endforeach
@endif
@if(isset($messages))
@foreach($messages as $message)
<div class="alert alert-info error-message animated fadeInDown alt alert-dismissible" role="alert">
  <span class="error-message-content">{{ $message }}</span>
  <a class="close" data-dismiss="alert">&times;</a>
</div>
@endforeach
@endif
@foreach (['danger', 'warning', 'success', 'info'] as $msg)
@if(Session::has('alert-' . $msg))
<div class=" animated fadeInDown">
  <p class="error-message-content alert alert-{{ $msg }}">{{ Session::get('alert-' . $msg) }} <span class="close" data-dismiss="alert">&times;</span></p>
</div>
@endif
@endforeach
