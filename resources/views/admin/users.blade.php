@extends('layouts.main')

@section('content')
<!-- start modal -->
	<div id="modal_deluser" class="modal" role="dialog">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
				<h4 class="modal-title">Delete user</h4>
			</div>
			<div class="modal-body">
				<h4 id="del_mail"></h4>
				<div id="login-alert">

				</div>
	  		</div>
	  <div class="modal-footer">
	  	<form action="deleteuser" method="post">
	  		{{ csrf_field() }}
	  		<input type="hidden" name="id" id="del_user_id">
	  		<button type="submit" class="btn btn-default pull-left" id="del_user_but">
			Delete
			</button>
	  	</form>
		<button type="button" class="btn btn-default pull-right" data-dismiss="modal">
			Cancel
		</button>
	  </div>
	</div>
  </div>
</div>
<!-- end modal -->


    <h2 class="h1">Users</h2>
    <form class="form-inline text-center" method="post" action="adduser">
    	{{ csrf_field() }}
    	<input class="form-control" type="email" name="email" placeholder="e-mail"/>
    	<button type="submit" class="btn btn-success">ADD</button>
    </form>
    <table class="table table-striped" style="max-width: 500px; margin:20px auto;">
    	<tbody>
    		@foreach($users as $user)
	    		<tr>
	    			<td>{{$user->email}}</td>
	    			<td><button class="btn btn-danger del" data-toggle="modal" data-target="#modal_deluser">Delete</button><input type="hidden" name="id" value="{{$user->id}}"></td>
	    		</tr>
    		@endforeach
    	</tbody>
    </table>
    <script>
    	var baseUrl = '../';
    </script>
    <script src="{{asset('js/admin/users.js')}}"></script>
@endsection
