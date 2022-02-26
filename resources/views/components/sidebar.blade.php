<div>
    <!-- It is quality rather than quantity that matters. - Lucius Annaeus Seneca -->
    <h3> Sider bar Component</h3>
    <p>Title {{$title}} </p>
    <p>Email {{$email}} </p>

    @foreach($users('Nguyen van E') as $user)
        <p>User : {{$user}} </p>
    @endforeach
</div>