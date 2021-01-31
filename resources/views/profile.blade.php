@extends('layouts.home')
@section('main')
        
        <!-- Breadcrumbs -->
		<section class="breadcrumbs">
			<div class="container">
				<div class="row">
					<div class="col-12">
						<h2><i class="fa fa-pencil"></i> {{$user->name}} profile </h2>
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
							<span class="title-bg">{{$user->name}}</span>
							<h1>الفعاليات التي شاركت بها</h1>
						</div>
					</div>
                </div>
                <div class="row">
                @forelse($activities as $act)
                @php
                $s = $act->pivot->degree;
                @endphp
					<div class="col-lg-4 col-md-6 col-12">
						<!-- Single Service -->
						<div class="single-service">
							<i class="fa fa-magic"></i>
							<h2><a href="service-single.html">name: {{$act->activity_name}}</a></h2>
                            <p>teacher: {{$act->teacher}}</p>
                            <p>degree: {{$s}}</p>
                            <p>description: {{$act->description}}</p>
						</div>
						<!-- End Single Service -->
					</div>
                @empty
                    <tr>
                        <td colspan="5">!لم تشارك في أي فعالية بعد</td>
                    </tr>
                @endforelse	
				</div>
			</div>
		</section>
		<!--/ End Services -->
	
		
@endsection