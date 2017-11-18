@extends('layouts.app')

@section('content')
	<p id="demo"></p>
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Confirmation Table</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                   <table class="table table-striped">
					  <thead>
					    <tr>
					      <th scope="col">School ID</th>
					      <th scope="col">School Name</th>
					      <th scope="col">Status</th>
					    </tr>
					  </thead>
					  <tbody>
					  @foreach ($schools as $school)
					    <tr>
					      <th scope="row"> {{ $school->school_id }} </th>
					      <td>{{ $school->school_name }}</td>
					      <!-- <td><a class="btn btn-primary" href="">{{ $school->school_status }}</a></td> -->
					      <td><button type="button" class="btn btn-primary" onclick="myFunctionConfirm();">{{ $school->status }}</button></td>
					    </tr>
					   @endforeach
					  </tbody>
					</table>
 					
 					<script>
					function myFunctionConfirm() {
					    var txt;
					    if (confirm("Are You Sure You Want to Confirm It?") == true) {
					        txt = "Successfully Confirm!";
					    } else {
					        txt = "";
					    }
					    document.getElementById("demo").innerHTML = txt;
					}
					</script>
					
					       <!-- <button type="button" onclick="return confirm('Confrim this School?');"> Confirm </button> -->
					  
                </div>
            </div>
        </div>
    </div>
</div>
@endsection