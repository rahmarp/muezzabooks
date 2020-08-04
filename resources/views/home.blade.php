@extends('layout')

@section('content')

<header class="masthead text-center text-white">
    <div class="masthead-content">
      <div class="container">
        <h1 class="masthead-heading mb-0">One Page Wonder</h1>
        <h2 class="masthead-subheading mb-0">Will Rock Your Socks Off</h2>
        <a href="#catalog" class="btn btn-yellow btn-xl rounded-pill mt-5">Learn More</a>
      </div>
    </div>
  </header>

  <section id="catalog">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-6 order-lg-2">
          <div class="p-5">
            <img class="img-fluid" src="{{ ('assets/images/bba2.jpg') }}" > 
          </div>
        </div>
        <div class="col-lg-6 order-lg-1">
          <div class="p-5">
            <h2 class="display-4">BBA - Bahagia Bersama AlQuran</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod aliquid, mollitia odio veniam sit iste esse assumenda amet aperiam exercitationem, ea animi blanditiis recusandae! Ratione voluptatum molestiae adipisci, beatae obcaecati.</p>
            <a href="" class="btn btn-outline-yellow">Warning</a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section>
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-6">
          <div class="p-5">
            <img class="img-fluid" src="{{ ('assets/images/bba3.jpg') }}" > 
          </div>
        </div>
        <div class="col-lg-6">
          <div class="p-5">
            <h2 class="display-4">QM - Quranic Motivation</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod aliquid, mollitia odio veniam sit iste esse assumenda amet aperiam exercitationem, ea animi blanditiis recusandae! Ratione voluptatum molestiae adipisci, beatae obcaecati.</p>
            <a href="" class="btn btn-outline-yellow">Warning</a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section>
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-6 order-lg-2">
          <div class="p-5">
            <img class="img-fluid" src="{{ ('assets/images/bba1.jpg') }}" > 
          </div>
        </div>
        <div class="col-lg-6 order-lg-1">
          <div class="p-5">
            <h2 class="display-4">RBA - Rihlah Bersama AlQuran</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod aliquid, mollitia odio veniam sit iste esse assumenda amet aperiam exercitationem, ea animi blanditiis recusandae! Ratione voluptatum molestiae adipisci, beatae obcaecati.</p>
            <a href="" class="btn btn-outline-yellow">Warning</a>  
        </div>
        </div>
      </div>
    </div>
  </section>

@endsection