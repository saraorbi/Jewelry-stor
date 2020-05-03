@extends('cms.cmsmaster')

@section('content')


<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
	<form class="bg0 p-t-75 p-b-85">
		<div class="container">
			<br>
			<a class="btn btn-dark" href="{{url('cms/categories/create')}}">
				+Add new category
			</a>
			<br><br>
			<div class="row">
				<div class="col-lg-10 col-xl-7 m-lr-auto m-b-50">
					<div class="m-l-25 m-r--38 m-lr-0-xl">
						<div class="wrap-table-shopping-cart">
							<table class="table table-bordered text-center">
								<thead>
									<tr class="table_head">
										<th class="column-1">#</th>
										<th class="column-2">Category Name</th>
										<th class="column-3">Image</th>
										<th class="column-4">Edit Category</th>
										<th class="column-5">Delete category</th>
									</tr>
									<?php $counter = 1; ?>
									@foreach($categories as $data)
									<tr class="table_row">
										<th scope="row">{{$counter++}}</th>
										<td class="column-2">{{$data['cat_name']}}</td>
										<td>
											<div class="media">
												<div class="d-flex">
													<img src="{{asset('img').'/'.$data['image']}}" width="80px">
												</div>
											</div>
										</td>
										<td>
											<button id="{{$data['id']}}" class="btn btn-sm btn-outline-secondary"><i class="far fa-edit"></i>
											</button>
										</td>
										<td>
											<button class="btn btn-sm btn-outline-secondary" onclick="window.location='{{url('cms/categories').'/'.$data['id']}}'"><i class="far fa-trash-alt"></i>
											</button>
										</td>
									</tr>
									@endforeach
								</thead>
							</table>
						</div>
					</div>
				</div>

				<!-- <div class="col-sm-10 col-lg-7 col-xl-5 m-lr-auto m-b-50">
					<div class="bor10 p-lr-40 p-t-30 p-b-40 m-l-63 m-r-40 m-lr-0-xl p-lr-15-sm">
						<h4 class="mtext-109 cl2 p-b-30">
							Cart Totals
						</h4> -->

				<!-- <div class="flex-w flex-t bor12 p-b-13">
							<div class="size-208">
								<span class="stext-110 cl2">
									Subtotal:
								</span>
							</div>
						</div> -->
				<!-- </div> -->

			</div>
		</div>
	</form>
</main>
@endsection