<!DOCTYPE html>
<html>
<head>
<title>Laravel Search</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
<div class="container">
<div class="row">
<div class="col-md-4">
<h3>Advanced Search Integrated By: AMAN SHARMA</h3><br>
<form action="{{ route('simple') }}" method="GET">
<div class="input-group mb-3">
<input type="text" class="form-control" placeholder="Type the name" aria-describedby="basic-addon2" name="search">
<div class="input-group-append">
<button class="btn btn-secondary" type="submit">Search</button>
</div>
</div>
</form>
<form action="{{ route('advance') }}" method="GET">
<h3>Advanced Search  </h3><br>
<input type="text" name="name" class="form-control" placeholder="Person's name"><br>
<input type="text" name="detail" class="form-control" placeholder="Address"><br>
 <!-- <label>Range of Age</label> -->
 
<br>
<input type="submit" value="Search" class="btn btn-secondary">
</form>
</div>
<div class="col-md-8">
<h3>List of Members</h3>
<table class="table table-striped">
<tr>
<th>ID</th>
<th>Name</th>
<th>Detail</th>

</tr>
@foreach($data as $pep)
<tr>
<td>{{ $pep->id }}</td>
<td>{{ $pep->name }}</td>
<td>{{ $pep->detail }}</td>

</tr>
@endforeach
</table>
{{ $data->appends(request()->except('page'))->links() }}
</div>
</div>
</div>
</body>
</html>