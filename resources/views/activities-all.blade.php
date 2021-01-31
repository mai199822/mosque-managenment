@extends('layouts.home')
@section('main')
        
        <!-- Breadcrumbs -->
		<section class="breadcrumbs">
			<div class="container">
				<div class="row">
					<div class="col-12">
						<h2><i class="fa fa-pencil"></i>جميع  الفعاليات</h2>
						<ul>
							<li><a href="index.html"><i class="fa fa-home"></i>Home</a></li>
							<li><a href="#"><i class="fa fa-clone"></i>Services</a></li>
							<li class="active"><a href="services.html"><i class="fa fa-clone"></i>Service</a></li>
						</ul>
					</div>
				</div>
			</div>
		</section>
        <!--/ End Breadcrumbs -->
        <!-- Services -->
		<section id="services" class="services archives section">
			<div class="container">
				<div class="row">
					<div class="col-12">
						<div class="section-title">
							<span class="title-bg">Services</span>
							<h1>What we provide</h1>
							<p>Sed lorem enim, faucibus at erat eget, laoreet tincidunt tortor. Ut sed mi nec ligula bibendum aliquam. Sed scelerisque maximus magna, a vehicula turpis Proin<p>
						</div>
					</div>
                </div>
                <div class="row">
                @forelse($activities as $act)
					<div class="col-lg-4 col-md-6 col-12">
						<!-- Single Service -->
						<div class="single-service">
							<i class="fa fa-magic"></i>
							<h2><a href="service-single.html">{{$act->activity_name}}</a></h2>
                            <p>{{$act->teacher}}</p>
							<p>{{$act->description}}</p>
							<a href="{{route('profile.store',[$act->id])}}" class="btn primary">تسجيل</a>
						</div>
						<!-- End Single Service -->
					</div>
                @empty
                    <tr>
                        <td colspan="5">No activities found!</td>
                    </tr>
                @endforelse	
				</div>
			</div>
		</section>
		<!--/ End Services -->
	
		
@endsection