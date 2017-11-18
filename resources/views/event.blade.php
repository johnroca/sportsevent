@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Event</div>

                <div class="panel-body">
                	
					 @foreach (['danger', 'warning', 'success', 'info'] as $key)
					  	@if(Session::has($key))
					     <p class="alert alert-{{ $key }}">{{ Session::get($key) }}</p>
					  @endif
					 @endforeach
				
                	
					<form class="form-horizontal" method="POST" action="{{ route('save_event') }}">
                        {{ csrf_field() }}
                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Event Name</label>

                            <div class="col-md-6">
                                <input id="event_name" type="text" class="form-control" name="event_name" value="{{ old('event_name') }}" autofocus>

                                @if ($errors->has('event_name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('event_name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-8 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Save
                                </button>

                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
