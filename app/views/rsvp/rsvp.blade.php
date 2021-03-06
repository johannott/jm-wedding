{{ Form::open(array('url'=>'/post')) }}

    <h2>RSVP</h2>

    <h4>Kindly RSVP <strong class="underline">each</strong> guest separately by Nov 30 so we can properly accomodate everyone on this special day.</h4>

    <p>With all our love, M & J</p>

    <ul>
        @foreach($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>

    <div class="row rsvpRadio">
               <div class="large-12 columns">
                    <p>Everything is set! Tell us if your coming!</p>
                </div>
                <div class="large-12 columns">
                  {{ Form::radio('attending', 1); }}
                  {{ Form::label('attending', 'Yes, would not miss it!', array('class' => 'yesRsvp')) }}
                </div>
                 <div class="large-12 columns">
                    {{ Form::radio('attending', 0); }}
                    {{ Form::label('attending', 'Sorry, will not make it', array('class' => 'noRsvp')) }}
                 </div>
     </div>

   <div class="row hide-for-small-only">
        <div class="large-12 small-12 columns">
                {{ Form::checkbox('vegetarian', true, false, array('id'=>'vegetarian')) }}
                {{ Form::label('vegetarian', 'Tick for the Vegetarian option', array('class' => 'vegetarian')) }}
        </div>
    </div>

   <div class="row show-for-small-only">
        <div class="small-1 columns paddingCheck">
            {{ Form::checkbox('vegetarian', true, false, array('id'=>'vegetarian')) }}
        </div>
        <div class="small-11">
            {{ Form::label('vegetarian', 'Tick for the Vegetarian option', array('class' => 'vegetarian')) }}
        </div>
    </div>

     <div class="row">
        <div class="large-6 columns">
            {{ Form::text('guest1', null, array('placeholder'=>'Full Guest Name', 'class' => 'johann')) }}
        </div>
     </div>
    <div class="row">
        <div class="large-6 columns">
            {{ Form::text('email', null, array('placeholder'=>'Email Address')) }}
        </div>
     </div>
    <div class="row">
        <div class="large-6 columns">
            {{ Form::password('password', array('placeholder'=>'Password')) }}
        </div>
     </div>

    <div class="row">
        <div class="rsvpButtonDiv large-10 columns">
           <h4>Before clicking the RSVP button please ensure you have only entered one guest name for this RSVP. You will be given the option to RSVP another guest after.</h4>
        </div>
     </div>

    <div class="row">
        <div class="rsvpButtonDiv large-6 columns">
            {{ Form::submit('Send RSVP', array('class'=>'rsvpButton')) }}
        </div>
     </div>
{{ Form::close() }}