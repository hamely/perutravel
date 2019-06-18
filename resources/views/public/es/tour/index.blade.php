@extends('public.es.layouts.master')

@section('content')
<div class="content-body">
      <div class="container page">
        <div class="row">
          <div class="col-md-4">
            <div class="search-hotels mb-40 pattern alt">
              <div class="tours-container">
                <div class="tours-box">
                  <div class="tours-search mb-20">
                    <form method="post" class="form search divider-skew">
                      <div class="search-wrap">
                        <input type="text" placeholder="Destination" class="form-control search-field"><i class="flaticon-suntour-map search-icon"></i>
                      </div>
                    </form>
                    <div class="tours-calendar divider-skew"> 
                      <input placeholder="Depart date" type="text" onfocus="(this.type='date')" onblur="(this.type='text')" class="calendar-default textbox-n"><i class="flaticon-suntour-calendar calendar-icon"></i>
                    </div>
                    <div class="tours-calendar divider-skew"> 
                      <input placeholder="Return date" type="text" onfocus="(this.type='date')" onblur="(this.type='text')" class="calendar-default textbox-n"><i class="flaticon-suntour-calendar calendar-icon"></i>
                    </div>
                    <div class="selection-box divider-skew"><i class="flaticon-suntour-adult box-icon"></i>
                      <select>
                        <option>Adult</option>
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                      </select>
                    </div>
                    <div class="selection-box divider-skew"><i class="flaticon-suntour-children box-icon"></i>
                      <select>
                        <option>Child</option>
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                      </select>
                    </div>
                    <div class="selection-box"><i class="flaticon-suntour-bed box-icon"></i>
                      <select>
                        <option>Room</option>
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                      </select>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-6 clearfix">
                      <div class="widget-price-slider">
                        <form method="get" action="#">
                          <div class="price_slider_wrapper">
                            <div aria-disabled="false" class="price_slider price_slider_amount ui-slider ui-slider-horizontal ui-widget ui-widget-content ui-corner-all">
                              <div class="ui-slider-range ui-widget-header ui-corner-all"></div><a href="#" class="ui-slider-handle ui-state-default ui-corner-all">
                                <div style="" class="price_label"><span class="from"></span></div></a><a href="#" class="ui-slider-handle ui-state-default ui-corner-all">
                                <div style="" class="price_label"><span class="to"></span></div></a>
                            </div>
                            <div class="price_slider_amount addon">
                              <input id="min_price" type="text" name="min_price" value="" data-min="0" placeholder="Min price" style="display: none;">
                              <input id="max_price" type="text" name="max_price" value="" data-max="200" placeholder="Max price" style="display: none;">
                              <input type="hidden" name="post_type" value="product">
                            </div>
                          </div>
                        </form>
                      </div>
                      <div class="rating">Rating
                        <div class="stars stars-5"></div>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="tours-search">
                        <form method="post" class="form search">
                          <div class="search-wrap">
                            <input type="text" placeholder="Destination" class="form-control search-field"><i class="flaticon-suntour-map search-icon"></i>
                          </div>
                        </form>
                        <div class="button-search">Search</div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-8">
            <!-- Recomended item-->
            <div class="recom-item border">
            @foreach($data as $item)
              <div class="recom-media"><a href="hotels-details.html">
                  <div class="pic" style="
    width: 770px;
    height: 220px;"><img src="{{$item->img}}" style="width:770; height:240;" data-at2x="pic/recomended/1@2x.jpg" alt></div></a>
                <!-- <div class="location"><i class="flaticon-suntour-map"></i> Istanbul, Turkey</div> -->
              </div>
              <!-- Recomended Content-->
             
              <div class="recom-item-body"><a href="hotels-details.html">
                  <h6 class="blog-title">{{$item->nombretour}}</h6></a>
                <div class="stars stars-4"></div>
                <div class="recom-price"><span class="font-4">$90</span> per night</div>
                <p class="mb-30">{{$item->descripciontour}}</p><a href="{{route('detalletour')}}" class="recom-button">Leer más</a><a href="hotels-details.html" class="cws-button small alt">Book now</a>
                <div class="action font-2">20%</div>
              </div>
              @endforeach
              <!-- Recomended Image-->
            </div>
       
      
           
          </div>
        </div>
      </div>
      <!-- call out section-->
      <section class="page-section pt-90 pb-80 bg-main pattern relative">
        <div class="container">
          <div class="call-out-box clearfix with-icon">
            <div class="row call-out-wrap">
              <div class="col-md-5">
                <h6 class="title-section-top gray font-4">subscribe today</h6>
                <h2 class="title-section alt-2"><span>Get</span> Latest offers</h2><i class="flaticon-suntour-email call-out-icon"></i>
              </div>
              <div class="col-md-7">
                <form action="php/contacts-process.php" method="post" class="form contact-form mt-10">
                  <div class="input-container">
                    <input type="text" placeholder="Enter your email" value="" name="email" class="newsletter-field mb-0 form-row"><i class="flaticon-suntour-email icon-left"></i>
                    <button type="submit" class="subscribe-submit"><i class="flaticon-suntour-arrow icon-right"></i></button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- ! call out section	-->
    </div>
@endsection

@section('script')

@endsection
