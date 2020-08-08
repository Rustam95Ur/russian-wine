@push('styles')
    <link rel="stylesheet" type="text/css" href="{{ asset('css/left-side.css') }}">
@endpush
<div class="col-md-4 background-dark-purple" id="left-side-block">
    <div class="userData">
        <h2 class="text-white">{{Auth::user()->last_name}} {{Auth::user()->first_name}}</h2>
        <h3 class="heading">Скидка</h3>
        <p class="discount">5%</p>
        <div class="row">
            <div class="col-md-8 col-sm-8">
                <ul class="menu_list">
                    <li><a class="{{(\Request::route()->getName() == 'favorite') ? 'active' : ''}}"
                           href="{{route('favorite')}}">Избранное</a></li>
                    <li><a class="{{(\Request::route()->getName() == 'sub-wines') ? 'active' : ''}}"
                           href="{{route('sub-wines')}}">Подписки</a></li>
                    <li><a class="{{(\Request::route()->getName() == 'my-sets') ? 'active' : ''}}"
                           href="{{route('my-sets')}}">Сеты</a></li>
                    <li><a class="{{(\Request::route()->getName() == 'my-orders') ? 'active' : ''}}"
                           href="{{route('my-orders')}}">Мои заказы</a></li>
                </ul>
                <ul class="additional">
                    <li><a href="">Спецпредложения</a></li>
                    <li><a class="{{(\Request::route()->getName() == 'profile') ? 'active' : ''}}"
                           href="{{route('profile')}}">Персональные данные</a></li>
                </ul>
                <div class="logout">
                    <form id="frm-logout" action="{{ route('logout') }}" method="post">
                        <button type="submit" class="btn-link">
                            Выйти
                        </button>
                        @csrf
                    </form>
                </div>
            </div>
            <div class="col-md-4 col-sm-4">
                <ul class="count-list text-right">
                    <li>0</li>
                    <li>2</li>
                    <li>5</li>
                    <li>15</li>
                </ul>
            </div>
        </div>
    </div>
</div>
