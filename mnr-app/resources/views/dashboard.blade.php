@foreach($usersList as $user)
    <strong>{{ $user['first_name'] }}</strong> {{ $user['last_name'] }} <br>    
    <small>{{ $user['location'] }}</small>
    @if($user['location'] == 'Florida')
    <p>Florida is the best!</p>
    @endif
    <hr>
@endforeach

<p>&copy; {{ date('Y') }} OTS</p>
