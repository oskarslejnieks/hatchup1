@extends('template')

@section('content')

<div class="container">
    <div class="content">
      <div class="left-side">
        <div class="address details">
          <i class="fas fa-map-marker-alt"></i>
          <div class="topic">Adrese</div>
          <div class="text-one">Lielā iela 2, Jelgava, LV-3001</div>
        </div>
        <div class="phone details">
          <i class="fas fa-phone-alt"></i>
          <div class="topic">Telefona numurs</div>
          <div class="text-one">+371 25125125</div>
        </div>
        <div class="email details">
          <i class="fas fa-envelope"></i>
          <div class="topic">E-pasts</div>
          <div class="text-two">info@mmos.com</div>
        </div>
      </div>
      <div class="right-side">
        <div class="topic-text">Sazinieties ar mums</div>
        <p>Ievietojiet savu darba piedāvājumu tikai ar dažiem klikšķiem!</p>
      <form action="#">
        <div class="input-box">
          <input type="text" placeholder="Ievadiet savu vārdu">
        </div>
        <div class="input-box">
          <input type="text" placeholder="Ievadiet savu e-pastu">
        </div>
        <div class="input-box">
            <input type="text" placeholder="Ievadiet savu telefona numuru">
          </div>
        <div class="input-box">
            <input type="text" placeholder="Uzņēmuma nosaukums">
        </div>
        <div class="button">
          <input type="button" value="Nosūtīt" >
        </div>
      </form>
    </div>
    </div>
    @if (Auth::check())
      <h1 style="text-align: center;">Pievienot darbu</h1>
      <div class="container" style="display: block;">
        <hr />
        <form action="{{ route('posts.store') }}" method="POST" style="display: block;">
            {{ csrf_field() }}
            <label for="name">Darba nosaukums</label>
            <input type="text" name="name" id="name" class="form-control">
            <label for="pay">Stundas likme</label>
            <input type="number" min="0.00" step="0.05" name="pay" id="pay" class="form-control"/>
            <label for="work-time">Darba laiks</label>
            <input type="text" name="work-time" id="work-time" class="form-control"/>
            <label for="company-name">Kompānijas nosaukums</label>
            <input type="text" name="company-name" id="company-name" class="form-control"/>
            <label for="address">Kompānijas adrese</label>
            <input type="text" name="address" id="address" class="form-control"/>
            <label for="work-description">Darba apraksts</label>
            <textarea type="text" name="work-description" id="work-description" class="form-control" rows="6"></textarea>
            <label for="work-duties">Darba pienākumi</label>
            <textarea type="text" name="work-duties" id="work-duties" class="form-control" rows="6"></textarea>
            <label for="work-requirements">Darba prasības</label>
            <textarea type="text" name="work-requirements" id="work-requirements" class="form-control" rows="6"></textarea>
            <input type="submit" class="btn btn-primary" value="Ievietot darba piedāvājumu">
        </form>
    </div>
    @endif
  </div>

@endsection