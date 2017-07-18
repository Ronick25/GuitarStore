
@extends('layouts/page')

@section('content')

<div class="sub-banner my-banner2">
</div>
<div class="content">
	<div class="container">
		<div class="col-md-4 w3ls_dresses_grid_left">
			<div class="w3ls_dresses_grid_left_grid">
				<h3>Categories</h3>
				<div class="w3ls_dresses_grid_left_grid_sub">
					<div class="ecommerce_dres-type">
						<ul>
							@foreach ($categories as $categorie)
							<li><a href="{{$categorie->alias}}">{{$categorie->name}}</a></li>
							@endforeach
						</ul>
					</div>
				</div>
			</div>
			<div class="w3ls_dresses_grid_left_grid">
				<h3>Color</h3>
				<div class="w3ls_dresses_grid_left_grid_sub">
					<div class="ecommerce_color">
						<ul>
							<li><a href="#"><i></i> Red(5)</a></li>
							<li><a href="#"><i></i> Brown(2)</a></li>
							<li><a href="#"><i></i> Yellow(3)</a></li>
						</ul>
					</div>
				</div>
			</div>
			<div class="w3ls_dresses_grid_left_grid">
				<div class="dresses_img_hover">
					<img src="../images/bb2.jpg" alt=" " class="img-responsive" />
					<div class="dresses_img_hover_pos">
						<h4>Upto<span>40%</span><i>Off</i></h4>
					</div>
				</div>
			</div>
		</div>
		<div class="col-md-8 col-sm-8">
			<div class="women-set1">
				@foreach ($search_result as $product)
				<div class="col-md-4 wp1 animated wow slideInUp" data-wow-delay=".5s">
					<a href="/product/{{($product->alias)}}"><div class="product-img">
						<img src="{{url ($product->img)}}"/>
					</div></a>
					@if ($product->rating <= 1)
					<i class="fa fa-star yellow-star" aria-hidden="true"></i>
					<i class="fa fa-star gray-star" aria-hidden="true"></i>
					<i class="fa fa-star gray-star" aria-hidden="true"></i>
					<i class="fa fa-star gray-star" aria-hidden="true"></i>
					<i class="fa fa-star gray-star" aria-hidden="true"></i>
					@elseif ($product->rating <= 2)
					<i class="fa fa-star yellow-star" aria-hidden="true"></i>
					<i class="fa fa-star yellow-star" aria-hidden="true"></i>
					<i class="fa fa-star gray-star" aria-hidden="true"></i>
					<i class="fa fa-star gray-star" aria-hidden="true"></i>
					<i class="fa fa-star gray-star" aria-hidden="true"></i>
					@elseif ($product->rating <= 3)
					<i class="fa fa-star yellow-star" aria-hidden="true"></i>
					<i class="fa fa-star yellow-star" aria-hidden="true"></i>
					<i class="fa fa-star yellow-star" aria-hidden="true"></i>
					<i class="fa fa-star gray-star" aria-hidden="true"></i>
					<i class="fa fa-star gray-star" aria-hidden="true"></i>
					@elseif ($product->rating <= 4)
					<i class="fa fa-star yellow-star" aria-hidden="true"></i>
					<i class="fa fa-star yellow-star" aria-hidden="true"></i>
					<i class="fa fa-star yellow-star" aria-hidden="true"></i>
					<i class="fa fa-star yellow-star" aria-hidden="true"></i>	
					<i class="fa fa-star gray-star" aria-hidden="true"></i>
					@else
					<i class="fa fa-star yellow-star" aria-hidden="true"></i>
					<i class="fa fa-star yellow-star" aria-hidden="true"></i>						
					<i class="fa fa-star yellow-star" aria-hidden="true"></i>
					<i class="fa fa-star yellow-star" aria-hidden="true"></i>
					<i class="fa fa-star yellow-star" aria-hidden="true"></i>
					@endif
					<h4><?php echo $product->name; ?></h4>
					<h5><?php echo "$".$product->price.".00"; ?></h5>
					<button class="btn btn-primary" id="price_{{$product->id}}" value="{{$product->price}}" onclick='add_to_cart({{$product->id}})'><i class="fa fa-cart-plus" aria-hidden="true"> Add to cart</i></button>
					<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
						<div class="modal-dialog">
							<div class="modal-content">
								<div class="modal-header">
									<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
									<h4 class="modal-title" id="myModalLabel">Корзина</h4>
								</div>
								<div class="modal-body" id ="modal-body">
									<table id="Cart_table">
										<thead>
											<tr>
												<th>Наименование</th>
												<th>Кол-во</th>
												<th>Цена</th>
												<th>Тотал прайс</th>
											</tr>
										</thead>
										<tbody>
											<tr id='1'>
												<td></td>
												<td></td>
												<td></td>
												<td></td>
											</tr>
										</tbody>
									</table>
								</div>
								<div class="modal-footer">
									<a href="{{url ('cart/checkout')}}"><button class="checkout btn btn-success">Оформить заказ</button></a>
									<p id = "total_price" style="text-align: left; display:inline-block;"></p>
									<button type="button" class="btn btn-default" onclick="clear_cart()">Очистить</button>
									<button type="button" class="btn btn-danger" data-dismiss="modal">Закрыть</button>
								</div>
							</div>
						</div>
					</div>
				</div>
				@endforeach
				<div class="clearfix"></div>
			</div>
		</div>
	</div>
</div>
@endsection