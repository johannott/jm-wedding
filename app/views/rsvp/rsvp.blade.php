{{ Form::open(array('url'=>'/post')) }}

    <h3>Maeve and Johann</h3>
    <h3>December 28 2014</h3>

    <p>Kindly RSVP <strong class="underline">each</strong> guest separately by Nov 30 so we can properly accomodate everyone on this special day.</p>

    <p>With all our love, M & J</p>

    <ul>
        @foreach($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>

    <div class="row">
               <div class="large-12 columns">
                    <p>Everything is set! Tell us if your coming!</p>
                </div>
                <div class="large-12 columns">
                  {{ Form::radio('rsvp', 'yes'); }}
                  {{ Form::label('rsvp', 'Yes, would not miss it!', array('class' => 'yesorno')) }}
                </div>
                 <div class="large-12 columns">
                    {{ Form::radio('rsvp', 'no'); }}
                    {{ Form::label('rsvp', 'Sorry, will not make it', array('class' => 'yesorno')) }}
                 </div>
     </div>

   <div class="row">
        <div class="large-12 columns">
                {{ Form::checkbox('vegetarian', 'value', false, array('id'=>'vegetarian')) }}
                {{ Form::label('vegetarian', 'Tick if you would you like the Vegetarian option?', array('class' => 'vegetarian')) }}
        </div>
    </div>

     <div class="row">
        <div class="large-6 columns">
            {{ Form::text('guest1', null, array('placeholder'=>'First Guest Name', 'class' => 'johann')) }}
        </div>
     </div>
    <div class="row">
        <div class="large-6 columns">
            {{ Form::text('email', null, array('placeholder'=>'Email Address (Optional)')) }}
        </div>
     </div>
    <div class="row">
        <div class="large-6 columns">
            {{ Form::password('password', array('placeholder'=>'Password')) }}
        </div>
     </div>

    {{ Form::submit('Send RSVP', array('class'=>'rsvpButton')) }}
{{ Form::close() }}