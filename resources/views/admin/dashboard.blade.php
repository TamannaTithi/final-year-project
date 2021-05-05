@extends('layouts.admin_master')
@section('title','Deshboard')
@section('content')
<div class="row">
    <div class="col-lg-12">
        <div class="card card-statistics">
            <div class="card-header">
                <div class="card-heading">
                    <h4 class="card-title text-white">Event Calendar</h4>
                </div>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-lg-3">
                        <div id="external-events">
                            <button class="btn btn-primary btn-block" data-toggle="modal" data-target="#eventModal">Add New Event</button>
                            <p class="mt-3">
                                Drag and drop your event or click in the calendar.
                            </p>
                            <div class="fc-event fc-event-primary ui-draggable ui-draggable-handle" data-color="fc-event-primary"><span></span> Photographers</div>
                            <div class="fc-event fc-event-warning ui-draggable ui-draggable-handle" data-color="fc-event-warning" style="z-index: auto; left: 0px; top: 0px;"><span></span> Parlours</div>
                            <div class="fc-event fc-event-danger ui-draggable ui-draggable-handle" data-color="fc-event-danger"><span></span> Shopping</div>
                            <div class="fc-event fc-event-success ui-draggable ui-draggable-handle" data-color="fc-event-success"><span></span> Venues</div>
                            <div class="fc-event fc-event-danger ui-draggable ui-draggable-handle" data-color="fc-event-danger"><span></span> Events</div>
                            <div class="fc-event fc-event-warning ui-draggable ui-draggable-handle" data-color="fc-event-warning" style="z-index: auto; left: 0px; top: 0px;"><span></span> Offers</div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                <label class="form-check-label" for="defaultCheck1">
                                    Remove After Drop
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-9">
                        <div class="event-calendar">
                            <div id="event-calendar" class="fc fc-unthemed fc-ltr"><div class="fc-toolbar fc-header-toolbar"><div class="fc-left"><div class="fc-button-group"><button type="button" class="fc-prev-button fc-button fc-state-default fc-corner-left" aria-label="prev"><span class="fc-icon fc-icon-left-single-arrow"></span></button><button type="button" class="fc-next-button fc-button fc-state-default fc-corner-right" aria-label="next"><span class="fc-icon fc-icon-right-single-arrow"></span></button></div><button type="button" class="fc-today-button fc-button fc-state-default fc-corner-left fc-corner-right fc-state-disabled" disabled="">today</button></div><div class="fc-right"><div class="fc-button-group"><button type="button" class="fc-month-button fc-button fc-state-default fc-corner-left fc-state-active">month</button><button type="button" class="fc-agendaWeek-button fc-button fc-state-default">week</button><button type="button" class="fc-agendaDay-button fc-button fc-state-default fc-corner-right">day</button></div></div><div class="fc-center"><h2>December 2020</h2></div><div class="fc-clear"></div></div>
                          {{-- <div class="fc-view-container" style=""><div class="fc-view fc-month-view fc-basic-view" style=""><table class=""><thead class="fc-head"><tr><td class="fc-head-container fc-widget-header"><div class="fc-row fc-widget-header"><table class=""><thead><tr><th class="fc-day-header fc-widget-header fc-sun"><span>Sun</span></th><th class="fc-day-header fc-widget-header fc-mon"><span>Mon</span></th><th class="fc-day-header fc-widget-header fc-tue"><span>Tue</span></th><th class="fc-day-header fc-widget-header fc-wed"><span>Wed</span></th><th class="fc-day-header fc-widget-header fc-thu"><span>Thu</span></th><th class="fc-day-header fc-widget-header fc-fri"><span>Fri</span></th><th class="fc-day-header fc-widget-header fc-sat"><span>Sat</span></th></tr></thead></table></div></td></tr></thead><tbody class="fc-body"><tr><td class="fc-widget-content"><div class="fc-scroller fc-day-grid-container" style="overflow: hidden; height: 344px;"><div class="fc-day-grid fc-unselectable"><div class="fc-row fc-week fc-widget-content" style="height: 57px;"><div class="fc-bg"><table class=""><tbody><tr><td class="fc-day fc-widget-content fc-sun fc-other-month fc-past" data-date="2020-11-29"></td><td class="fc-day fc-widget-content fc-mon fc-other-month fc-past" data-date="2020-11-30"></td><td class="fc-day fc-widget-content fc-tue fc-past" data-date="2020-12-01"></td><td class="fc-day fc-widget-content fc-wed fc-past" data-date="2020-12-02"></td><td class="fc-day fc-widget-content fc-thu fc-past" data-date="2020-12-03"></td><td class="fc-day fc-widget-content fc-fri fc-past" data-date="2020-12-04"></td><td class="fc-day fc-widget-content fc-sat fc-past" data-date="2020-12-05"></td></tr></tbody></table></div><div class="fc-content-skeleton"><table><thead><tr><td class="fc-day-top fc-sun fc-other-month fc-past" data-date="2020-11-29"><span class="fc-day-number">29</span></td><td class="fc-day-top fc-mon fc-other-month fc-past" data-date="2020-11-30"><span class="fc-day-number">30</span></td><td class="fc-day-top fc-tue fc-past" data-date="2020-12-01"><span class="fc-day-number">1</span></td><td class="fc-day-top fc-wed fc-past" data-date="2020-12-02"><span class="fc-day-number">2</span></td><td class="fc-day-top fc-thu fc-past" data-date="2020-12-03"><span class="fc-day-number">3</span></td><td class="fc-day-top fc-fri fc-past" data-date="2020-12-04"><span class="fc-day-number">4</span></td><td class="fc-day-top fc-sat fc-past" data-date="2020-12-05"><span class="fc-day-number">5</span></td></tr></thead><tbody><tr><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr></tbody></table></div></div><div class="fc-row fc-week fc-widget-content" style="height: 57px;"><div class="fc-bg"><table class=""><tbody><tr><td class="fc-day fc-widget-content fc-sun fc-past" data-date="2020-12-06"></td><td class="fc-day fc-widget-content fc-mon fc-past" data-date="2020-12-07"></td><td class="fc-day fc-widget-content fc-tue fc-past" data-date="2020-12-08"></td><td class="fc-day fc-widget-content fc-wed fc-past" data-date="2020-12-09"></td><td class="fc-day fc-widget-content fc-thu fc-past" data-date="2020-12-10"></td><td class="fc-day fc-widget-content fc-fri fc-past" data-date="2020-12-11"></td><td class="fc-day fc-widget-content fc-sat fc-past" data-date="2020-12-12"></td></tr></tbody></table></div><div class="fc-content-skeleton"><table><thead><tr><td class="fc-day-top fc-sun fc-past" data-date="2020-12-06"><span class="fc-day-number">6</span></td><td class="fc-day-top fc-mon fc-past" data-date="2020-12-07"><span class="fc-day-number">7</span></td><td class="fc-day-top fc-tue fc-past" data-date="2020-12-08"><span class="fc-day-number">8</span></td><td class="fc-day-top fc-wed fc-past" data-date="2020-12-09"><span class="fc-day-number">9</span></td><td class="fc-day-top fc-thu fc-past" data-date="2020-12-10"><span class="fc-day-number">10</span></td><td class="fc-day-top fc-fri fc-past" data-date="2020-12-11"><span class="fc-day-number">11</span></td><td class="fc-day-top fc-sat fc-past" data-date="2020-12-12"><span class="fc-day-number">12</span></td></tr></thead><tbody><tr><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr></tbody></table></div></div><div class="fc-row fc-week fc-widget-content" style="height: 57px;"><div class="fc-bg"><table class=""><tbody><tr><td class="fc-day fc-widget-content fc-sun fc-past" data-date="2020-12-13"></td><td class="fc-day fc-widget-content fc-mon fc-past" data-date="2020-12-14"></td><td class="fc-day fc-widget-content fc-tue fc-today " data-date="2020-12-15"></td><td class="fc-day fc-widget-content fc-wed fc-future" data-date="2020-12-16"></td><td class="fc-day fc-widget-content fc-thu fc-future" data-date="2020-12-17"></td><td class="fc-day fc-widget-content fc-fri fc-future" data-date="2020-12-18"></td><td class="fc-day fc-widget-content fc-sat fc-future" data-date="2020-12-19"></td></tr></tbody></table></div><div class="fc-content-skeleton"><table><thead><tr><td class="fc-day-top fc-sun fc-past" data-date="2020-12-13"><span class="fc-day-number">13</span></td><td class="fc-day-top fc-mon fc-past" data-date="2020-12-14"><span class="fc-day-number">14</span></td><td class="fc-day-top fc-tue fc-today " data-date="2020-12-15"><span class="fc-day-number">15</span></td><td class="fc-day-top fc-wed fc-future" data-date="2020-12-16"><span class="fc-day-number">16</span></td><td class="fc-day-top fc-thu fc-future" data-date="2020-12-17"><span class="fc-day-number">17</span></td><td class="fc-day-top fc-fri fc-future" data-date="2020-12-18"><span class="fc-day-number">18</span></td><td class="fc-day-top fc-sat fc-future" data-date="2020-12-19"><span class="fc-day-number">19</span></td></tr></thead><tbody><tr><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr></tbody></table></div></div><div class="fc-row fc-week fc-widget-content" style="height: 57px;"><div class="fc-bg"><table class=""><tbody><tr><td class="fc-day fc-widget-content fc-sun fc-future" data-date="2020-12-20"></td><td class="fc-day fc-widget-content fc-mon fc-future" data-date="2020-12-21"></td><td class="fc-day fc-widget-content fc-tue fc-future" data-date="2020-12-22"></td><td class="fc-day fc-widget-content fc-wed fc-future" data-date="2020-12-23"></td><td class="fc-day fc-widget-content fc-thu fc-future" data-date="2020-12-24"></td><td class="fc-day fc-widget-content fc-fri fc-future" data-date="2020-12-25"></td><td class="fc-day fc-widget-content fc-sat fc-future" data-date="2020-12-26"></td></tr></tbody></table></div><div class="fc-content-skeleton"><table><thead><tr><td class="fc-day-top fc-sun fc-future" data-date="2020-12-20"><span class="fc-day-number">20</span></td><td class="fc-day-top fc-mon fc-future" data-date="2020-12-21"><span class="fc-day-number">21</span></td><td class="fc-day-top fc-tue fc-future" data-date="2020-12-22"><span class="fc-day-number">22</span></td><td class="fc-day-top fc-wed fc-future" data-date="2020-12-23"><span class="fc-day-number">23</span></td><td class="fc-day-top fc-thu fc-future" data-date="2020-12-24"><span class="fc-day-number">24</span></td><td class="fc-day-top fc-fri fc-future" data-date="2020-12-25"><span class="fc-day-number">25</span></td><td class="fc-day-top fc-sat fc-future" data-date="2020-12-26"><span class="fc-day-number">26</span></td></tr></thead><tbody><tr><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr></tbody></table></div></div><div class="fc-row fc-week fc-widget-content" style="height: 57px;"><div class="fc-bg"><table class=""><tbody><tr><td class="fc-day fc-widget-content fc-sun fc-future" data-date="2020-12-27"></td><td class="fc-day fc-widget-content fc-mon fc-future" data-date="2020-12-28"></td><td class="fc-day fc-widget-content fc-tue fc-future" data-date="2020-12-29"></td><td class="fc-day fc-widget-content fc-wed fc-future" data-date="2020-12-30"></td><td class="fc-day fc-widget-content fc-thu fc-future" data-date="2020-12-31"></td><td class="fc-day fc-widget-content fc-fri fc-other-month fc-future" data-date="2021-01-01"></td><td class="fc-day fc-widget-content fc-sat fc-other-month fc-future" data-date="2021-01-02"></td></tr></tbody></table></div><div class="fc-content-skeleton"><table><thead><tr><td class="fc-day-top fc-sun fc-future" data-date="2020-12-27"><span class="fc-day-number">27</span></td><td class="fc-day-top fc-mon fc-future" data-date="2020-12-28"><span class="fc-day-number">28</span></td><td class="fc-day-top fc-tue fc-future" data-date="2020-12-29"><span class="fc-day-number">29</span></td><td class="fc-day-top fc-wed fc-future" data-date="2020-12-30"><span class="fc-day-number">30</span></td><td class="fc-day-top fc-thu fc-future" data-date="2020-12-31"><span class="fc-day-number">31</span></td><td class="fc-day-top fc-fri fc-other-month fc-future" data-date="2021-01-01"><span class="fc-day-number">1</span></td><td class="fc-day-top fc-sat fc-other-month fc-future" data-date="2021-01-02"><span class="fc-day-number">2</span></td></tr></thead><tbody><tr><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr></tbody></table></div></div><div class="fc-row fc-week fc-widget-content" style="height: 59px;"><div class="fc-bg"><table class=""><tbody><tr><td class="fc-day fc-widget-content fc-sun fc-other-month fc-future" data-date="2021-01-03"></td><td class="fc-day fc-widget-content fc-mon fc-other-month fc-future" data-date="2021-01-04"></td><td class="fc-day fc-widget-content fc-tue fc-other-month fc-future" data-date="2021-01-05"></td><td class="fc-day fc-widget-content fc-wed fc-other-month fc-future" data-date="2021-01-06"></td><td class="fc-day fc-widget-content fc-thu fc-other-month fc-future" data-date="2021-01-07"></td><td class="fc-day fc-widget-content fc-fri fc-other-month fc-future" data-date="2021-01-08"></td><td class="fc-day fc-widget-content fc-sat fc-other-month fc-future" data-date="2021-01-09"></td></tr></tbody></table></div><div class="fc-content-skeleton"><table><thead><tr><td class="fc-day-top fc-sun fc-other-month fc-future" data-date="2021-01-03"><span class="fc-day-number">3</span></td><td class="fc-day-top fc-mon fc-other-month fc-future" data-date="2021-01-04"><span class="fc-day-number">4</span></td><td class="fc-day-top fc-tue fc-other-month fc-future" data-date="2021-01-05"><span class="fc-day-number">5</span></td><td class="fc-day-top fc-wed fc-other-month fc-future" data-date="2021-01-06"><span class="fc-day-number">6</span></td><td class="fc-day-top fc-thu fc-other-month fc-future" data-date="2021-01-07"><span class="fc-day-number">7</span></td><td class="fc-day-top fc-fri fc-other-month fc-future" data-date="2021-01-08"><span class="fc-day-number">8</span></td><td class="fc-day-top fc-sat fc-other-month fc-future" data-date="2021-01-09"><span class="fc-day-number">9</span></td></tr></thead><tbody><tr><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr></tbody></table></div></div></div></div></td></tr></tbody></table></div></div> --}}
                        </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
 <div class="intro-main pb-5">
  <div class="row">
    <div class="col-md-4 col-sm-6">
      <div class="card" >
        <img class="card-img-top" src="{{asset('public/user_asset/asset')}}/image/portfolio/weddingphotography3.jpg" alt="Card image cap">
          <div class="card-body">
            <h1 class="text-white" >Event</h1>
             <p class="card-text"></p>
          </div>
      </div> 
{{-- 
       <div class="card mb-3" style="">
        <div class="row no-gutters">
          <div class="col-md-4">
            <img src="{{asset('public/user_asset/asset')}}/image/portfolio/weddingphotography3.jpg" class="card-img" alt="...">
          </div>
          <div class="col-md-8">
            <div class="card-body">
              <h5 class="card-title text-white">Card title</h5>
              <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
              <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
            </div>
          </div>
        </div>
      </div> --}}
    </div>
    <div class="col-md-4">
      <div class="card">
        <img class="card-img-top" src="{{asset('public/user_asset/asset')}}/image/portfolio/weddingphotography2.jpg" alt="Card image cap">
          <div class="card-body">
            <h1 class="text-white" >Wedding</h1>
            <p class="card-text"></p>
          </div>
      </div>
    </div>
    <div class="col-md-4">
      <div class="card">
        <img class="card-img-top" src="{{asset('public/user_asset/asset')}}/image/portfolio/anniversaryphotography3.jpg" alt="Card image cap">
          <div class="card-body">
            <h1 class="text-white" >Anniversary</h1>
             <p class="card-text"></p>
          </div>
      </div>
    </div>
  </div>
  <div class="intro-main pb-5">
    <div class="row">
      <div class="col-md-4">
        <div class="card">
          <img class="card-img-top" src="{{asset('public/user_asset/asset')}}/image/cake/afzacake2.jpg" alt="Card image cap">
            <div class="card-body">
              <h1 class="text-white" >Birthday</h1>

              <p class="card-text"></p>
            </div>
        </div>
      </div>
     
      <div class="col-md-4">
        <div class="card">
          <img class="card-img-top" src="{{asset('public/user_asset/asset')}}/image/parlour/face-makeover.jpg" alt="Card image cap">
            <div class="card-body">
              <h1 class="text-white" >Parlour</h1>

              <p class="card-text"></p>
            </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card">
          <img class="card-img-top" src="{{asset('public/user_asset/asset')}}/image/shop.jpg" alt="Card image cap">
            <div class="card-body">
              <h1 class="text-white" >Shopping</h1>

              <p class="card-text"></p>
            </div>
        </div>
      </div>
    </div>
</div> 

{{-- <div class="card-columns text-white">
  <div class="card p-3" >
    <img src="{{asset('public/user_asset/asset')}}/image/portfolio/weddingphotography3.jpg" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title text-white">Venue</h5>
      <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
    </div>
  </div>
  <div class="card p-3">
    <blockquote class="blockquote mb-0 card-body">
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
      <footer class="blockquote-footer">
        <small class="text-muted">
          Someone famous in <cite title="Source Title">Source Title</cite>
        </small>
      </footer>
    </blockquote>
  </div>
  <div class="card">
    <img src="{{asset('public/user_asset/asset')}}/image/portfolio/weddingphotography2.jpg" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title text-white">Offer</h5>
      <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
      <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
    </div>
  </div>
  <div class="card bg-primary text-white text-center p-3">
    <blockquote class="blockquote mb-0">
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat.</p>
      <footer class="blockquote-footer text-white">
        <small>
          Someone famous in <cite title="Source Title">Source Title</cite>
        </small>
      </footer>
    </blockquote>
  </div>
  <div class="card text-center">
    <div class="card-body">
      <h5 class="card-title text-white">Shopping</h5>
      <p class="card-text">This card has a regular title and short paragraphy of text below it.</p>
      <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
    </div>
  </div>
  <div class="card mb-3" style="">
    <div class="row no-gutters">
      <div class="col-md-4">
        <img src="{{asset('public/user_asset/asset')}}/image/portfolio/weddingphotography3.jpg" class="card-img" alt="...">
      </div>
      <div class="col-md-8">
        <div class="card-body">
          <h5 class="card-title text-white">Photography</h5>
          <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
          <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
        </div>
      </div>
    </div>
  </div>

  <div class="card">
    <img src="{{asset('public/user_asset/asset')}}/image/portfolio/anniversaryphotography3.jpg" class="card-img-top" alt="...">
  </div>
  <div class="card p-3 text-right">
    <blockquote class="blockquote mb-0">
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
      <footer class="blockquote-footer">
        <small class="text-muted">
          Someone famous in <cite title="Source Title">Source Title</cite>
        </small>
      </footer>
    </blockquote>
  </div>
  <div class="card mb-3" style="">
    <div class="row no-gutters">
      <div class="col-md-4">
        <img src="{{asset('public/user_asset/asset')}}/image/portfolio/weddingphotography3.jpg" class="card-img" alt="...">
      </div>
  <div class="card">
    <div class="card-body">
      <h5 class="card-title text-white">Parlour</h5>
      <p class="card-text">This is another card with title and supporting text below. This card has some additional content to make it slightly taller overall.</p>
      <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
    </div>
  </div>
</div>
<div class="card mb-3" style="">
  <div class="row no-gutters">
    <div class="col-md-4">
      <img src="{{asset('public/user_asset/asset')}}/image/portfolio/weddingphotography3.jpg" class="card-img" alt="...">
    </div>
<div class="card">
  <div class="card-body">
    <h5 class="card-title text-white">Parlour</h5>
    <p class="card-text">This is another card with title and supporting text below. This card has some additional content to make it slightly taller overall.</p>
    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
  </div>
</div>
</div>
<div class="card mb-3" style="">
  <div class="row no-gutters">
    <div class="col-md-4">
      <img src="{{asset('public/user_asset/asset')}}/image/portfolio/weddingphotography3.jpg" class="card-img" alt="...">
    </div>
<div class="card">
  <div class="card-body">
    <h5 class="card-title text-white">Parlour</h5>
    <p class="card-text">This is another card with title and supporting text below. This card has some additional content to make it slightly taller overall.</p>
    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
  </div>
</div>
</div>

<div class="card mb-3" style="">
  <div class="row no-gutters">
    <div class="col-md-4">
      <img src="{{asset('public/user_asset/asset')}}/image/portfolio/weddingphotography3.jpg" class="card-img" alt="...">
    </div>
<div class="card">
  <div class="card-body">
    <h5 class="card-title text-white">Parlour</h5>
    <p class="card-text">This is another card with title and supporting text below. This card has some additional content to make it slightly taller overall.</p>
    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
  </div>
</div>
</div>


<div class="card mb-3" style="">
  <div class="row no-gutters">
    <div class="col-md-4">
      <img src="{{asset('public/user_asset/asset')}}/image/portfolio/weddingphotography3.jpg" class="card-img" alt="...">
    </div>
<div class="card">
  <div class="card-body">
    <h5 class="card-title text-white">Parlour</h5>
    <p class="card-text">This is another card with title and supporting text below. This card has some additional content to make it slightly taller overall.</p>
    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
  </div>
</div> --}}
</div>
@endsection