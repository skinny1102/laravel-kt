<h2>User Form</h2>
<form action="{{route('backend.user.update')}} " method='post'>
    @method('put')
    @csrf
    <input type="text" name='fullname' placeholder="Your fullname">
    </br>
    <input type="password" name='password' placeholder="Your fullname">
    </br>
    <button type="submit"> Dang nhap</button>
</form>