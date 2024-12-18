
@extends('layouts.adminapp')
@section('content')
<div class="page-wrapper">
			<div class="page-content">
				
				<div class="row row-cols-1 row-cols-md-2 row-cols-lg-2 row-cols-xl-4">
					<div class="col">
					  <div class="card radius-10">
						<div class="card-body">
							<div class="d-flex align-items-center">
								<div>
									<p class="mb-0 text-secondary">Total Contacts</p>
									<h4 class="my-1">{{$totalContacts}}</h4>
									<p class="mb-0 font-13 text-success"><i class="bi bi-caret-up-fill"></i> 5% from last week</p>
								</div>
								<div class="widget-icon-large bg-gradient-purple text-white ms-auto"><i class="bi bi-basket2-fill"></i>
								</div>
							</div>
						</div>
					  </div>
					 </div>
					 <div class="col">
						<div class="card radius-10">
						  <div class="card-body">
							  <div class="d-flex align-items-center">
								  <div>
									  <p class="mb-0 text-secondary">Total Revenue</p>
									  <h4 class="my-1">$24K</h4>
									  <p class="mb-0 font-13 text-success"><i class="bi bi-caret-up-fill"></i> 4.6 from last week</p>
								  </div>
								  <div class="widget-icon-large bg-gradient-success text-white ms-auto"><i class="bi bi-currency-exchange"></i>
								  </div>
							  </div>
						  </div>
					  </div>
					 </div>
					 <div class="col">
					  <div class="card radius-10">
						<div class="card-body">
							<div class="d-flex align-items-center">
								<div>
									<p class="mb-0 text-secondary">Total Customers</p>
									<h4 class="my-1">5.8K</h4>
									<p class="mb-0 font-13 text-danger"><i class="bi bi-caret-down-fill"></i> 2.7 from last week</p>
								</div>
								<div class="widget-icon-large bg-gradient-danger text-white ms-auto"><i class="bi bi-people-fill"></i>
								</div>
							</div>
						</div>
					 </div>
					 </div>
					 <div class="col">
					  <div class="card radius-10">
						<div class="card-body">
							<div class="d-flex align-items-center">
								<div>
									<p class="mb-0 text-secondary">Bounce Rate</p>
									<h4 class="my-1">38.15%</h4>
									<p class="mb-0 font-13 text-success"><i class="bi bi-caret-up-fill"></i> 12.2% from last week</p>
								</div>
								<div class="widget-icon-large bg-gradient-info text-white ms-auto"><i class="bi bi-bar-chart-line-fill"></i>
								</div>
							</div>
						</div>
					  </div>
					 </div>
				  </div>
				
				
			</div>
		</div>
@endsection


@section('heads')
	<link href="{{ asset('public/new-admin/assets/plugins/highcharts/css/highcharts.css') }}" rel="stylesheet" />

@endsection

@section('scripts')
	<script src="{{ asset('public/new-admin/assets/plugins/highcharts/js/highcharts.js') }}"></script>
	<script src="{{ asset('public/new-admin/assets/plugins/apexcharts-bundle/js/apexcharts.min.js') }}"></script>

@endsection