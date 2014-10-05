{{ Form::open(array('url'=>'/post')) }}

     <h3>RSVP</h3>

      <h5>Tell us if your coming!</h5>

     <ul>
        @foreach($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>

    {{ Form::text('guest1', null, array('placeholder'=>'First Guest Name', 'class' => 'johann')) }}
    {{ Form::text('guest2', null, array('placeholder'=>'Second Guest Name')) }}
    {{ Form::text('email', null, array('placeholder'=>'Email Address')) }}
    {{ Form::password('password', array('placeholder'=>'Password')) }}

    {{ Form::submit('RSVP', array('class'=>'rsvpButton')) }}
{{ Form::close() }}