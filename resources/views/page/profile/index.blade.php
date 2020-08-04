@extends('layouts.app')
@section('content')
<style>
	.rowlist{
		margin-top: 10px;
	}
	ul{
		list-style: none;
		color:white;
	}
	.right {
		text-align: right
	}
	.heading{
      color: white;
	}
	.discount {
		color:#DA224D;
		margin-top:-10px
	}
	.additional {
		margin-top: 20px;
	}
	.logout{
		margin-top: 50px;
	}
</style>
<div id="franchise">
	<div id="content">
		<div class="row">
			<div class="col-md-4" style="background-color: rgb(44, 32, 48)">
				<div class="userData" style="margin: 15%;">
					<h3 style="color: white">{{Auth::user()->first_name}}</h3>

					<h4 class="heading">Скидка</h4>
					<h1 class="discount">5%</h1>

					<div class="row">
						<div class="col-md-8 col-sm-8">
							<ul>
								<li class="rowlist"><a href="{{route('favorite')}}">Избранное</a></li>
								<li class="rowlist"><a href="{{route('sub-wines')}}">Подписки</a></li>
								<li class="rowlist"><a href="">Сеты</a></li>
								<li class="rowlist"><a href="{{route('my-orders')}}">Мои заказы</a></li>
							</ul>

							<ul class="additional">
								<li class="rowlist"><a href="">Спецпредложения</a></li>
								<li class="rowlist"><a href="{{route('profile')}}">Персональные данные</a></li>
							</ul>

							<div class="logout">
								<a href="{{ route('logout') }}"
								   onclick="event.preventDefault(); document.getElementById('frm-logout').submit();">
									Выйти
								</a>
								<form id="frm-logout" action="{{ route('logout') }}" method="POST"
									  style="display: none;">
									{{ csrf_field() }}
								</form>
							</div>
						</div>
						<div class="col-md-4 col-sm-4">
							<ul class="right">
								<li class="rowlist">0</li>
								<li class="rowlist">2</li>
								<li class="rowlist">5</li>
								<li class="rowlist">15</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-8">
				Forms
			</div>
		</div>
	</div>
</div>
@endsection