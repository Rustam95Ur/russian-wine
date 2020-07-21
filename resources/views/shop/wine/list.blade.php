@extends('layouts.app')
@section('content')
<div class="shopContent">
  <div class="row subHeader">
      <ul class="breadcrumb">
        <li><a href="">Главная</a></li>
        <li><a href="">Вино</a></li>
      </ul>
      <h1 class="pageHeading">Вино</h2>
      <p class="pageDesc">Мы собрали для Вас самую полную коллекцию Русских Вин, как крупных заводов, <br>
так авторских микровиноделен.</p>
  </div>
  <div class="row sortSearch">
      <div class="shopSearch col-md-3">
        <form id="searchin-form">
		       <input id="search-main" type="text" placeholder="Поиск по каталогу">
			      <ul class="output" style="display:none;">
		        </ul>
			      <a type="submit" id="sfb" class="preview" value="">
              <img src="{{ asset ('image/search.svg') }}" alt="" class="searchIconBlack">
            </a>
		    </form>
      </div>
      <div class="sorting col-md-3">
        <form id="sort-form">
          <select id="inputState" class="form-control">
              <option selected>по умолчанию</option>
              <option>сначала дешевле</option>
              <option>сначала дороже</option>
          </select>
          <img src="{{ asset ('image/chevron.svg') }}" alt="" class="iconSort">
        </form>
      </div>
  </div>
</div>
@endsection
