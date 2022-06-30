@include ("header")

<h1>Vytvoř nové vozidlo</h1>
<form action="{{$router->generate('save.car')}}" method="post">
	{{ $form->text('name', 'Název vozidla', '', 'name', 'placeholder="Název vozidla"') }}
	{{ $form->text('rz', 'RZ vozidla', '', 'rz', 'placeholder="Registrační značka"') }}
	{{ $form->date('stkValidity', 'Platnost STK', '', 'stkValidity', 'placeholder="Platnost STK"') }}
	{{ $form->submit_button('Ulož vozidlo','submit') }}
</form>

@include ("footer")
