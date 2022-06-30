@include ("header")

<h1>Upravit vozidlo</h1>
<form action="{{$router->generate('save.car')}}" method="post">
	{{ $form->hidden('id', $car['id']) }}
	{{$form->required = '*';}}
	{{ $form->text('name', 'Název vozidla', $car['name'], 'name', 'placeholder="Název vozidla"') }}
	{{ $form->text('rz', 'RZ vozidla', $car['rz'], 'rz', 'placeholder="Registrační značka"') }}
	{{ $form->date('stk', 'Platnost STK', $car['stk'], 'stk', 'placeholder="Platnost STK"') }}
	{{ $form->submit_button('Ulož vozidlo','submit') }}

</form>

@include ("footer")
