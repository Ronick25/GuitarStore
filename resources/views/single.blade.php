
@extends('layouts/page')

@section('content')

<script src="{{ asset('js/jquery-1.11.1.min.js') }}"></script>
<script src="{{ asset('js/bootstrap.js')}}"></script>
<!--flex slider-->
<script defer src="{{ asset('js/jquery.flexslider.js') }}"></script>
<link rel="stylesheet" href="{{ asset('css/flexslider.css') }}" type="text/css" media="screen" />
<script>
	// Can also be used with $(document).ready()
	$(window).load(function() {
		$('.flexslider').flexslider({
			animation: "slide",
			controlNav: "thumbnails"
		});
	});
</script>
<!--flex slider-->

<script src="{{ asset('js/imagezoom.js')}}"></script>
<!-- //js --> 

<div class="products">	 
	<div class="container">  
		<div class="single-page">
			<div class="single-page-row" id="detail-21">
				<div class="col-md-6 single-top-left">	
					<div class="flexslider">
						<ul class="slides">
							@foreach ($images as $image)
								@if ($product->id == $image->product_id)
								<li data-thumb="{{ url("$image->img") }}">
									<div class="thumb-image detail_images"> <img src="{{ url("$image->img ") }}" data-imagezoom="true" class="img-responsive" alt=""></div>
								</li>
								@endif
							@endforeach

						</ul>
					</div>
				</div>
				<div class="col-md-6 single-top-right">
					<h3 class="item_name"> {{$product->name}}</h3>
					<p>Processing Time: Item will be shipped out within 2-3 working days. </p>
					<div class="single-rating">
						@if ($product->rating <= 1)
							<ul>
								<i class="fa fa-star yellow-star" aria-hidden="true"></i>
								<i class="fa fa-star gray-star" aria-hidden="true"></i>
								<i class="fa fa-star gray-star" aria-hidden="true"></i>
								<i class="fa fa-star gray-star" aria-hidden="true"></i>
								<i class="fa fa-star gray-star" aria-hidden="true"></i>
						@elseif ($product->rating <= 2)
							<ul>
								<i class="fa fa-star yellow-star" aria-hidden="true"></i>
								<i class="fa fa-star yellow-star" aria-hidden="true"></i>
								<i class="fa fa-star gray-star" aria-hidden="true"></i>
								<i class="fa fa-star gray-star" aria-hidden="true"></i>
								<i class="fa fa-star gray-star" aria-hidden="true"></i>
						@elseif ($product->rating <= 3)
							<ul>
								<i class="fa fa-star yellow-star" aria-hidden="true"></i>
								<i class="fa fa-star yellow-star" aria-hidden="true"></i>
								<i class="fa fa-star yellow-star" aria-hidden="true"></i>
								<i class="fa fa-star gray-star" aria-hidden="true"></i>
								<i class="fa fa-star gray-star" aria-hidden="true"></i>
						@elseif ($product->rating <= 4)
							<ul>
								<i class="fa fa-star yellow-star" aria-hidden="true"></i>
								<i class="fa fa-star yellow-star" aria-hidden="true"></i>
								<i class="fa fa-star yellow-star" aria-hidden="true"></i>
								<i class="fa fa-star yellow-star" aria-hidden="true"></i>
								<i class="fa fa-star gray-star" aria-hidden="true"></i>
						@else
							<ul>
								<i class="fa fa-star yellow-star" aria-hidden="true"></i>
								<i class="fa fa-star yellow-star" aria-hidden="true"></i>						
								<i class="fa fa-star yellow-star" aria-hidden="true"></i>
								<i class="fa fa-star yellow-star" aria-hidden="true"></i>
								<i class="fa fa-star yellow-star" aria-hidden="true"></i>
						@endif
							<li class="rating">{{$comments_count}} reviews</li>
							<li><a href="#">Add your review</a></li>
						</ul>
					</div>
					<div class="single-price">
						<ul>
							<li>${{$product->price}}</li>    
							<li><del>${{$discount_price}}</del></li> 
							<li><span class="w3off">{{$product->discount*100}}% OFF</span></li> 
							<li>Ends on: Oct,15th</li>
							<li><a href="#"><i class="fa fa-gift" aria-hidden="true"></i> Coupon</a></li>
						</ul>	
					</div> 
					<p class="single-price-text">{{$product->short_description}}</p>
					<button type="submit" class="w3ls-cart" id="price_{{$product->id}}" value="{{$product->price}}" onclick='add_to_cart({{$product->id}})'><i class="fa fa-cart-plus" aria-hidden="true"> Add to cart</i></button>

				</div>
				<div class="clearfix"> </div>  
			</div>
		</div> 
		<!-- collapse-tabs -->
		<div class="collpse tabs">
			<h3 class="w3ls-title">About this item</h3> 
			<div class="panel-group collpse" id="accordion" role="tablist" aria-multiselectable="true">
				<div class="panel panel-default">
					<div class="panel-heading" role="tab" id="headingOne">
						<h4 class="panel-title">
							<a class="pa_italic" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
								<i class="fa fa-file-text-o fa-icon" aria-hidden="true"></i> Description <span class="fa fa-angle-down fa-arrow" aria-hidden="true"></span> <i class="fa fa-angle-up fa-arrow" aria-hidden="true"></i>
							</a>
						</h4>
					</div>
					<div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
						<div class="panel-body">{{$product->description}}</div>
					</div>
				</div>
				<div class="panel panel-default">
					<div class="panel-heading" role="tab" id="headingTwo">
						<h4 class="panel-title">
							<a class="collapsed pa_italic" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
								<i class="fa fa-info-circle fa-icon" aria-hidden="true"></i> additional information <span class="fa fa-angle-down fa-arrow" aria-hidden="true"></span> <i class="fa fa-angle-up fa-arrow" aria-hidden="true"></i>
							</a> 
						</h4>
					</div>
					<div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
						<div class="panel-body">{{$product->add_information}}</div>
					</div>
				</div>
				<div class="panel panel-default">
					<div class="panel-heading" role="tab" id="headingThree">
						<h4 class="panel-title">
							<a class="collapsed pa_italic" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
								<i class="fa fa-check-square-o fa-icon" aria-hidden="true"></i> reviews (2) <span class="fa fa-angle-down fa-arrow" aria-hidden="true"></span> <i class="fa fa-angle-up fa-arrow" aria-hidden="true"></i>
							</a>
						</h4>
					</div>

					<div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
						<div class="panel-body">
							@foreach ($comments as $comment)
							@if ($comment->parent_id == NULL)
							<div class="comments">
								<div class="comment-image">
									<figure>
										<img src="{{url ($comment->img)}}" alt="">
									</figure>
								</div><!-- end comments-image -->
								<div class="comment-content">
									<div class="comment-content-head">
										<h6 class="comment-title">{{$comment->title}}</h6>
										<ul class="list list-inline comment-meta">
											<li>
												@if ($comment->rating <= 1)
													<i class="fa fa-star yellow-star" aria-hidden="true"></i>
													<i class="fa fa-star gray-star" aria-hidden="true"></i>
													<i class="fa fa-star gray-star" aria-hidden="true"></i>
													<i class="fa fa-star gray-star" aria-hidden="true"></i>
													<i class="fa fa-star gray-star" aria-hidden="true"></i>
												@elseif ($comment->rating <= 2)
													<i class="fa fa-star yellow-star" aria-hidden="true"></i>
													<i class="fa fa-star yellow-star" aria-hidden="true"></i>
													<i class="fa fa-star gray-star" aria-hidden="true"></i>
													<i class="fa fa-star gray-star" aria-hidden="true"></i>
													<i class="fa fa-star gray-star" aria-hidden="true"></i>
												@elseif ($comment->rating <= 3)
													<i class="fa fa-star yellow-star" aria-hidden="true"></i>
													<i class="fa fa-star yellow-star" aria-hidden="true"></i>
													<i class="fa fa-star yellow-star" aria-hidden="true"></i>
													<i class="fa fa-star gray-star" aria-hidden="true"></i>
													<i class="fa fa-star gray-star" aria-hidden="true"></i>
												@elseif ($comment->rating <= 4)
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
											</li>
										</ul>

									</div><!-- end comment-content-head -->
									<p>{{$comment->text}}</p>
									<cite>{{$comment->name}}</cite>
									<button style="float: right;" onclick="addComment({{$comment->id}})">Ответить</button>
								</div><!-- end comment-content -->
							</div>
							@foreach ($comments as $child_comment)
							@if ($child_comment->parent_id == $comment->id)
							<div class="comments_inner">
								<div class="comment-image">
									<figure>
										<img src="{{url ($child_comment->img)}}" alt="">
									</figure>
								</div><!-- end comments-image -->
								<div class="comment-content">
									<div class="comment-content-head">
										<h6 class="comment-title">{{$child_comment->title}}</h6>
										<ul class="list list-inline comment-meta">
											<li>
												@if ($child_comment->rating <= 1)
												<i class="fa fa-star yellow-star" aria-hidden="true"></i>
												<i class="fa fa-star gray-star" aria-hidden="true"></i>
												<i class="fa fa-star gray-star" aria-hidden="true"></i>
												<i class="fa fa-star gray-star" aria-hidden="true"></i>
												<i class="fa fa-star gray-star" aria-hidden="true"></i>
												@elseif ($child_comment->rating <= 2)
												<i class="fa fa-star yellow-star" aria-hidden="true"></i>
												<i class="fa fa-star yellow-star" aria-hidden="true"></i>
												<i class="fa fa-star gray-star" aria-hidden="true"></i>
												<i class="fa fa-star gray-star" aria-hidden="true"></i>
												<i class="fa fa-star gray-star" aria-hidden="true"></i>
												@elseif ($child_comment->rating <= 3)
												<i class="fa fa-star yellow-star" aria-hidden="true"></i>
												<i class="fa fa-star yellow-star" aria-hidden="true"></i>
												<i class="fa fa-star yellow-star" aria-hidden="true"></i>
												<i class="fa fa-star gray-star" aria-hidden="true"></i>
												<i class="fa fa-star gray-star" aria-hidden="true"></i>
												@elseif ($child_comment->rating <= 4)
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
											</li>
										</ul>
									</div><!-- end comment-content-head -->
									<p>{{$child_comment->text}}</p>
									<cite>{{$child_comment->name}}</cite>
								</div><!-- end comment-content -->
							</div>
							@endif
							@endforeach
							<hr class="spacer">
							@endif
							@endforeach
							<div class="add_review" id="add_review">
								<h4>Add a review</h4>
								<p>How do you rate this product?</p>
								<form action="/product/{{($product->alias)}}" method="post">
								{{csrf_field()}}
									<input id="input-1" name="rating" class="rating rating-loading" data-min="0" data-max="5" data-step="1"  required>
									<hr class="spacer">
									<div class="contact">
										<input type="text" name="name" placeholder="Your name" required=" ">
										<input type="text" name="email" placeholder="Your email" required=" ">
										<textarea name="text" placeholder="Your review" required=" "></textarea>
										<input type="text" name="title" placeholder="Title">
										<input type="submit" value="Submit review">
										<input type="hidden" name="parent_id">
										<input type="hidden" name="img" value="images/bowie.jpg">
										<input type="hidden" name="product_id" value="{{$product->id}}">
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
				<div class="panel panel-default">
					<div class="panel-heading" role="tab" id="headingFour">
						<h4 class="panel-title">
							<a class="collapsed pa_italic" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
								<i class="fa fa-question-circle fa-icon" aria-hidden="true"></i> help <span class="fa fa-angle-down fa-arrow" aria-hidden="true"></span> <i class="fa fa-angle-up fa-arrow" aria-hidden="true"></i>
							</a>
						</h4>
					</div>
					<div id="collapseFour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFour">
						<div class="panel-body">
							Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- //collapse --> 
	</div>
</div>
<script src="{{ asset('js/star-rating.min.js') }}"></script>
@endsection
