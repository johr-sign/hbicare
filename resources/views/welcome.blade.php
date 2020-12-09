@extends('layouts.app')
@section('content')
<div class="content">
    <div id="carousel-care" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#carousel-care" data-slide-to="0" class="active"></li>
        <li data-target="#carousel-care" data-slide-to="1"></li>
        <li data-target="#carousel-care" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="{{ URL::to('/images/anglicare-banner.jpg') }} " class="d-block w-100" alt="anglicare banner">
          <div class="carousel-caption d-none d-md-block">
           <blockquote>
            <h3>We are a not for profit retirement facility supporting people at all stages of life</h3>
            <p>
            Choosing an Anglicare retirement  could be one of the best decisions you make. 
            We provide safe,secure and well maintained retirement facility enabling you free to live the life you have always enjoyed and so much more.  we Offer facilities and services to enhance your wellbeing and help keep you active and social.</p>
          </blockquote>
          </div>
        </div>
        <div class="carousel-item">
          <img src="{{ URL::to('/images/anglicare-retirement.jpg')}}" class="d-block w-100" alt="anglicare retirement">
          <div class="carousel-caption d-none d-md-block">
            <blockquote>
            <h3>Excellent Services provided for your comfort and safety at Ease</h3>
            <p>We provide quality services that helps with to build positive Ageting strategies to have more Energy and adolescence. A lot of happy members recommended family and friends to join us.</p>
            <blockquote>
          </div>
        </div>
        <div class="carousel-item">
          <img src="{{ URL::to('/images/anglicare-service.jpg')}}" class="d-block w-100" alt="anglicare service">
          <div class="carousel-caption d-none d-md-block">
            <blockquote>
            <h3>Personalized  Support options catered to individual Care needs</h3>
            <p>Caring for another person can place many demands on you. Taking breaks and looking after your own physical and emotional health will help you to keep going in your caring role.</p>
            <blockquote>
          </div>
        </div>
      </div>
      <a class="carousel-control-prev" href="#carousel-care" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carousel-care" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
</div>
<div class="container column-list-container content-border">
  <div class="row no-gutters d-flex flex-wrap justify-content-center">
    <h3 class="my-4 text-center col-12">Want to get involved?</h3>
    <div class="col-12 row no-gutters columm-list-content d-flex flex-wrap flex-row justify-content-center">
      <div class="column-list-item col-6 col-md d-flex flex-wrap  pr-3 align-items-center justify-content-start">
        <a class="d-flex w-100 flex-column" href="/get-involved/job-opportunities/">
          <div class="text-center">
            <img class="responsive column-item-image mx-auto" src="/images/jobs.svg" alt="Find job opportunities">
          </div>
          <h4 class="mt-4 mb-3 column-item-heading">Find job opportunities</h4>
        </a>    
      </div>
      <div class="column-list-item col-6 col-md d-flex flex-wrap pr-3 align-items-center justify-content-start">
          <a class="d-flex w-100 flex-column" href="/get-involved/volunteer-with-us/">
              <div class="text-center">
                <img class="responsive column-item-image mx-auto" src="/images/volunteer.svg" alt="Volunteer with us ">
                </div>
              <h4 class="mt-4 mb-3 column-item-heading">Volunteer with us </h4>
          </a>
      </div>
      <div class="column-list-item col-6 col-md d-flex flex-wrap pr-3 align-items-center justify-content-start">
        <a class="d-flex w-100 flex-column" href="/get-involved/make-a-donation/">
            <div class="text-center">
              <img class="responsive column-item-image mx-auto" src="/images/donate.svg" alt="Make a donation ">
            </div>
            <h4 class="mt-4 mb-3 column-item-heading">Make a donation </h4>
        </a>
      </div>
      <div class="column-list-item col-6 col-md d-flex flex-wrap pr-3 align-items-center justify-content-start">
          <a class="d-flex w-100 flex-column" href="/get-involved/support-our-campaigns/">
              <div class="text-center">
                <img class="responsive column-item-image mx-auto" src="/images/campaigns.svg" alt="Support our campaigns">
              </div>
              <h4 class="mt-4 mb-3 column-item-heading">Support our campaigns</h4>
          </a>       
      </div>
    </div>
  </div>
</div>

@endsection

