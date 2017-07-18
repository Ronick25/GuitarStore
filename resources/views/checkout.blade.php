@extends('layouts/page')

@section('content')

<div class="add_review">
	<h1 class = "order-head">Оформить заказ</h1>
	<form action="{{url('cart/checkout')}}" method="post">
		{{csrf_field()}}
		<div class="order">
			<input type="text" name="name" placeholder="ФИО" required=" ">
			<input type="text" name="email" placeholder="Email" required=" ">
			<input type="text" name="phone_number" placeholder="Number" required=" ">
			<div>
				<input type="radio" name="payment_method" value="1" class="payment">Privat24
				<input type="radio" name="payment_method" value="2" class="payment">WebMoney
				<input type="radio" name="payment_method" value="3" class="payment">Skrill	
			</div>
			<div>
				<input type="radio" name="delivery_method" value="1">Почта
				<input type="radio" name="delivery_method" value="2">Курьер
			</div>
			<button class="btn btn-danger" onclick="history.back()">Назад</button>
			<button class="btn btn-success">Далее</button>
		</div>

	</form>
	<div>
		@if ((session()->has('cart')))
			<h2>Ваш заказ:</h2>
			<div class="order_info">
				@foreach (session('cart') as $product)
					<p>Наименование: {{($product['name'])}}</p>
					<p>Количество: {{$product['qty']}}</p>
					<p>Цена: ${{$product['price']}}.00</p>
				@endforeach
				<hr>
				<p>На сумму: ${{$total_price}}.00</p>
			@endif
		</div>
	</div>
</div>
@endsection
