{{ Form::open(array('url'=>'/post')) }}
    <h2 class="">RSVP</h2>
 
    <ul>
        @foreach($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>

    {{ Form::text('guest1', null, array('placeholder'=>'First Guest Name')) }}
    {{ Form::text('guest2', null, array('placeholder'=>'Second Guest Name')) }}
    {{ Form::text('email', null, array('placeholder'=>'Email Address')) }}
    {{ Form::password('password', array('placeholder'=>'Password')) }}

    {{ Form::submit('RSVP') }}
{{ Form::close() }}