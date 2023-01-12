@extends('master.master_user')

@section('content')
<div class="card-contact">
    <div class="image">
        <img src="images/logo-havara.png" height="90px">
    </div>
    <form action="/save" method="post" class="form">
        {{ csrf_field() }}
        <label>&nbsp;Name</label> <input type="text" name="nama" required="required" id="user-name" class="form-content">
        <div class="form-border"></div>
        <label>&nbsp;Email</label> <input type="email" name="email" required="required" id="user-email" class="form-content">
        <div class="form-border"></div>
        <label>&nbsp;Message</label><input type="text" name="pesan" required="required" id="user-message" class="form-content">
        <div class="form-border"></div>
        <input type="submit" class="submit" value="Send Messsage">
    </form>
</div>
@endsection