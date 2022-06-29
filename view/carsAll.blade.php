@include ('header')

	<a href="{{$router->generate('new.car')}}"><button class="btn btn-primary mb-3">Přidat vozidlo</button></a>
	<table class="table table-striped">
	<thead>
		<th>Název</th>
		<th>Registrační značka</th>
		<th>Platnost STK</th>
	</thead>
	<tbody>	
		@foreach ($cars AS $car)
			<tr>
				<td><a href="{{$router->generate('get.car', ['id' => $car['id']])}}">{{$car['name']}}</a></td>
				<td>{{$car['rz']}}</td>
				<td>{{$car['stkValidity']}}</td>
			</tr>
		@endforeach
	</tbody>
	
	</table>


@include ('footer')