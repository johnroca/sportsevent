@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Add School
                    @if(!empty($success))
                        <i class="text-success pull-right">School Saved!</i>
                    @else
                        @foreach($errors->all() as $error)
                            <i class="text-danger pull-right">{{$error}}</i>
                        @endforeach
                    @endif
                    
                </div>

                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ route('register-school') }}">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label for="name" class="col-md-4 control-label">School Name</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="school-name" value="" required autofocus>
                               
                            </div>
                        </div>


                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
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
</div>>
</div>
@endsection