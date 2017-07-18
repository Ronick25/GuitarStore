
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
							@foreach ($categories as $category)
								@if ($category->parent_id == NULL)
									<li><a href="{{$category->alias}}">{{$category->name}}</a></li>
									@foreach ($categories as $sub_category)
										@if ($sub_category->parent_id == $category->id)
											<li style="padding-left: 20px"><a href="{{$sub_category->alias}}">{{$sub_category->name}}</a></li>
										@endif
									@endforeach
								@endif
							@endforeach
						</ul>
					</div>
				</div>
			</div>
			<div class="w3ls_dresses_grid_left_grid">
				<h3>Brands</h3>
				<div class="w3ls_dresses_grid_left_grid_sub">
					<div class="ecommerce_dres-type">
						<ul>
							@foreach ($brands as $brand)
								<li><a href="?filter={{($brand->id)}}"><i> {{$brand->name}}</i></a></li>
							@endforeach
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
				@foreach ($products as $product)
					@foreach($images as $image)
						@if ($product->id == $image->product_id)
							<div class="col-md-4 wp1 animated wow slideInUp" data-wow-delay=".5s">
								<a href="/product/{{($product->alias)}}"><div class="product-img">
								<img src="{{url ($image->img)}}"/>
							</div></a>
						@endif
					@endforeach
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
				</div>
				@endforeach
				<div class="clearfix"></div>
			</div>
		</div>
	</div>
</div>
@endsection