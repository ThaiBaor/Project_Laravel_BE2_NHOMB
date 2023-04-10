<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List Users</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
</head>
<body>
    <div class="div">
    <table class="table">
	      <thead>
	        <tr>
	          <th scope="col">Name</th>
	          <th scope="col">Email</th>
              <th scope="col">Phone</th>
	        </tr>
	      </thead>
	      <tbody>
	        @foreach($users as $user)
	        <tr>
	          <td>{{$user->name}}</td>
	          <td>{{$user->email}}</td>
              <td>{{$user->phone}}</td>
	        </tr>
	        @endforeach
	      </tbody>
	    </table>
        {{ $users->links() }}
    </div>
</body>

</html>