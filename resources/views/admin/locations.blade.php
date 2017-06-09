
{!! Form::open(['url' => 'admin/location/InsData', 'method' => 'POST']) !!}

{!! Form::text('name', '', ['placeholder' => 'Name','required' => 'required']) !!}

{!! Form::text('Address', '', ['placeholder' => 'Address','required' => 'required']) !!}

{!! Form::text('phone', '', ['placeholder' => 'phone','required' => 'required']) !!}

{!! Form::file('image', '', ['placeholder' => 'Image']) !!}

{!! Form::submit('submit') !!}


{!! Form::close() !!}