@extends('dashboard')
<section class="vh-100" style="background-color: #fdccbc;">
	<div class="container h-100">
		<div class="row d-flex justify-content-center align-items-center h-100">
			<div class="col">
				<p><span class="h2">Shopping Cart </span><span class="h4">(1 item in your cart)</span></p>

				@if (session('cart'))
					@foreach (session('cart') as $productId => $product)
						<div class="card mb-4">
							<div class="card-body p-4">
								<div class="row align-items-center">
									<div class="col-md-2">
										<img src="{{ asset('images/' . $product['gallery']) }}" class="img-fluid" alt="{{ $product['title'] }}">
									</div>
									<div class="col-md-2 d-flex justify-content-center">
										<div>
											<p class="small text-muted mb-4 pb-2">Name</p>
											<p class="lead fw-normal mb-0">{{ $product['title'] }}</p>
										</div>
									</div>
									<div class="col-md-2 d-flex justify-content-center">
										<div>
											<p class="small text-muted mb-4 pb-2">Price</p>
											<p class="lead fw-normal mb-0">${{ $product['price'] }}</p>
										</div>
									</div>
									<!-- Add more columns as needed (e.g., Quantity, Total) -->
								</div>
							</div>
						</div>
					@endforeach

					<div class="card mb-5">
						<div class="card-body p-4">
							<div class="float-end">
								<p class="mb-0 me-5 d-flex align-items-center">
									<span class="small text-muted me-2">Order total:</span> <span class="lead fw-normal">${{ $totalPrice }}</span>
								</p>
							</div>
						</div>
					</div>

					<div class="d-flex justify-content-end">
						<button type="button" class="btn btn-light btn-lg me-2">Continue shopping</button>
						<button type="button" class="btn btn-primary btn-lg">Confirm</button>
					</div>
				@else
					<p>No items in the cart.</p>
				@endif
			</div>
		</div>
	</div>
</section>
