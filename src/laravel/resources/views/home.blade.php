@extends('app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">
				<div class="panel-heading">Nueva Noticia</div>

				<div class="panel-body">
                  {!! Form::open(array('url' => 'post', 'method' => 'POST')) !!}
                    {!! Form::token() !!}
                    <div class="input-group">
                      <div class="">
                        {!! Form::label('title', 'Titulo') !!}
                      </div>
                      <div class="input">
                        {!! Form::text('title', '') !!}
                      </div>
                    </div>
                    <div class="input-group">
                      <div class="">
                        {!! Form::label('body', 'Cuerpo') !!}
                      </div>
                      <div class="input">
                        {!! Form::textarea('body', '') !!}
                      </div>
                    </div>
                    <div class="input-group">
                      <div class="">
                        {!! Form::label('uploads', 'Fotos') !!}
                      </div>
                      <div class="input">
                        {!! Form::file('uploads[]', '') !!}
                      </div>
                      <div class="input">
                        {!! Form::file('uploads[]', '') !!}
                      </div>
                      <div class="input">
                        {!! Form::file('uploads[]', '') !!}
                      </div>
                      <div class="input">
                        {!! Form::file('uploads[]', '') !!}
                      </div>
                      <div class="input">
                        {!! Form::file('uploads[]', '') !!}
                      </div>
                    </div>
                    <div class="action">
                      {!! Form::submit('Submit') !!}
                    </div>
                  {!! Form::close() !!}
                </div>
			</div>
		</div>
	</div>
</div>
@endsection
