@extends('layouts.master')

@section('content')

<div class="position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center bg-light">
    <div class="col-md-5 p-lg-5 mx-auto my-5">
      <h1 class="display-4 font-weight-normal">BBTE Sportközpont</h1>
      <p class="lead font-weight-normal">Még nem vagy tag?</p>
      <a class="btn btn-outline-secondary" href="/register">Regisztrálj</a>
    </div>
    <div class="product-device box-shadow d-none d-md-block"></div>
    <div class="product-device product-device-2 box-shadow d-none d-md-block"></div>
  </div>

  <!-- First Row -->
  <div class="d-md-flex flex-md-equal w-100 my-md-3 pl-md-3">
        <div class="bg-dark mr-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center text-white overflow-hidden">
          <div class="my-3 py-3">
            <h2 class="display-5">Röplabda meccsek</h2>
            <p class="lead">Eddz csapatban.</p>
          </div>
          <div class="bg-light box-shadow mx-auto" style="width: 80%; height: 300px; border-radius: 21px 21px 0 0;">
                <img style="width: 100%; height: 300px; border-radius: 21px 21px 0 0;" src="{{url('/images/picture1.JPG')}}" alt="picture"/>
          </div>
        </div>
        <div class="bg-info mr-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center text-white overflow-hidden">
          <div class="my-3 p-3">
            <h2 class="display-5">Fitness terem</h2>
            <p class="lead">Egy baráti edzőterem mindenkinek.</p>
          </div>
          <div class="bg-dark box-shadow mx-auto" style="width: 80%; height: 300px; border-radius: 21px 21px 0 0;">
                <img style="width: 100%; height: 300px; border-radius: 21px 21px 0 0;" src="{{url('/images/picture2.JPG')}}" alt="picture"/>
          </div>
        </div>
    </div>

   <!-- Second Row -->
    <div class="d-md-flex flex-md-equal w-100 my-md-3 pl-md-3">
            <div class="bg-info mr-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center text-white overflow-hidden">
              <div class="my-3 p-3">
                <h2 class="display-5">Stroops</h2>
                <p class="lead">Teljesítményjavulás, koordináció és kondíció fejlesztés.</p>
              </div>
              <div class="bg-white box-shadow mx-auto" style="width: 80%; height: 300px; border-radius: 21px 21px 0 0;">
                    <img style="width: 100%; height: 300px; border-radius: 21px 21px 0 0;" src="{{url('/images/picture3.JPG')}}" alt="picture"/>
              </div>
            </div>
            <div class="bg-dark mr-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center text-white overflow-hidden">
              <div class="my-3 py-3">
                <h2 class="display-5">Funckionális terem</h2>
                <p class="lead">Végezz erőnléti gyakorlatokat.</p>
              </div>
              <div class="bg-white box-shadow mx-auto" style="width: 80%; height: 300px; border-radius: 21px 21px 0 0;">
                    <img style="width: 100%; height: 300px; border-radius: 21px 21px 0 0;" src="{{url('/images/picture4.JPG')}}" alt="picture"/>
              </div>
            </div>
          </div>
@endsection