<!DOCTYPE html>
<html lang="español">
<head>
		<meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Peru travel</title>
    
 
    	 @include('public.partials.header')
 

</head>

<body>
   
      @include('public.es.layouts.navbar')

      {{-- slider --}}

        <!-- ! header page-->
    <div class="content-body">
      <div class="tp-banner-container">
        <div class="tp-banner-slider">
          <ul>
            <li data-masterspeed="700" data-slotamount="7" data-transition="fade"><img src="rs-plugin/assets/loader.gif" data-lazyload="/public/img/slider/slide-1.jpg" data-bgposition="center" alt="" data-kenburns="on" data-duration="30000" data-ease="Linear.easeNone" data-scalestart="100" data-scaleend="120" data-rotatestart="0" data-rotateend="0" data-offsetstart="0 0" data-offsetend="0 0" data-bgparallax="10">
              <div data-x="['center','center','center','center']" data-y="center" data-transform_in="x:-150px;opacity:0;s:1500;e:Power3.easeInOut;" data-transform_out="x:150px;opacity:0;s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" data-start="400" class="tp-caption sl-content">
                <div class="sl-title-top">Welcome to</div>
                <div class="sl-title">Honolulu</div>
                <div class="sl-title-bot">Starting <span>$105</span> per night</div>
              </div>
            </li>
            <li data-masterspeed="700" data-transition="fade"><img src="rs-plugin/assets/loader.gif" data-lazyload="/public/img/slider/slide-2.jpg" data-bgposition="center" alt="" data-kenburns="on" data-duration="30000" data-ease="Linear.easeNone" data-scalestart="100" data-scaleend="120" data-rotatestart="0" data-rotateend="0" data-offsetstart="0 0" data-offsetend="0 0" data-bgparallax="10">
              <div data-x="['center','center','center','center']" data-y="center" data-transform_in="y:-150px;opacity:0;s:1500;e:Power3.easeInOut;" data-transform_out="y:150px;opacity:0;s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" data-start="400" class="tp-caption sl-content">
                <div class="sl-title-top">Welcome too</div>
                <div class="sl-title">Istanbul</div>
                <div class="sl-title-bot">Starting <span>$255</span> per night</div>
              </div>
            </li>
            <li data-masterspeed="700" data-transition="fade"><img src="rs-plugin/assets/loader.gif" data-lazyload="/public/img/slider/slide-4.jpg" data-bgposition="center" alt="" data-kenburns="on" data-duration="30000" data-ease="Linear.easeNone" data-scalestart="100" data-scaleend="120" data-rotatestart="0" data-rotateend="0" data-offsetstart="0 0" data-offsetend="0 0" data-bgparallax="10">
              <div data-x="['center','center','center','center']" data-y="center" data-transform_in="x:150px;opacity:0;s:1500;e:Power3.easeInOut;" data-transform_out="x:-150px;opacity:0;s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" data-start="400" class="tp-caption sl-content">
                <div class="sl-title-top">Welcome tooo</div>
                <div class="sl-title">Dubai</div>
                <div class="sl-title-bot">Starting <span>$280</span> per night</div>
              </div>
            </li>
          </ul>
        </div>
        <!-- slider info-->
        <div class="slider-info-wrap clearfix">
          <div class="slider-info-content">
            <div class="slider-info-item">
              <div class="info-item-media"><img src="pic/slider-info-1.jpg" data-at2x="pic/slider-info-1@2x.jpg" alt>
                <div class="info-item-text">
                  <div class="info-price font-4"><span>start per night</span> $105</div>
                  <div class="info-temp font-4"><span>local temperature</span> 36° / 96.8°</div>
                  <p class="info-text">Nunc hendrerit nulla molestie ipsum tincidunt vestibulum. Nunc condimentum nibh.</p>
                </div>
              </div>
              <div class="info-item-content">
                <div class="main-title">
                  <h3 class="title"><span class="font-4">Hawaii</span> Honolulu</h3>
                  <div class="price"><span>$105</span> per night</div><a href="hotels-details.html" class="button">Details</a>
                </div>
              </div>
            </div>
            <div class="slider-info-item">
              <div class="info-item-media"><img src="pic/slider-info-2.jpg" data-at2x="pic/slider-info-2@2x.jpg" alt>
                <div class="info-item-text">
                  <div class="info-price font-4"><span>start per night</span> $55</div>
                  <div class="info-temp font-4"><span>local temperature</span> 31° / 87.8°</div>
                  <p class="info-text">Donec semper mattis diam sit amet eleifend. Vestibulum ante ipsum primis in faucibus orci luctus et.</p>
                </div>
              </div>
              <div class="info-item-content">
                <div class="main-title">
                  <h3 class="title"><span class="font-4">Turkey</span> Antalya</h3>
                  <div class="price"><span>$55</span> per night</div><a href="hotels-details.html" class="button">Details</a>
                </div>
              </div>
            </div>
            <div class="slider-info-item">
              <div class="info-item-media"><img src="pic/slider-info-3.jpg" data-at2x="pic/slider-info-3@2x.jpg" alt>
                <div class="info-item-text">
                  <div class="info-price font-4"><span>start per night</span> $95</div>
                  <div class="info-temp font-4"><span>local temperature</span> 41° / 105.8°</div>
                  <p class="info-text">Donec ac eros dapibus, pulvinar enim in, vestibulum nisi. Sed bibendum magna at massa laoreet gravida.</p>
                </div>
              </div>
              <div class="info-item-content">
                <div class="main-title">
                  <h3 class="title"><span class="font-4">Indonesia</span> Bali</h3>
                  <div class="price"><span>$95</span> per night</div><a href="hotels-details.html" class="button">Details</a>
                </div>
              </div>
            </div>
            <div class="slider-info-item">
              <div class="info-item-media"><img src="pic/slider-info-4.jpg" data-at2x="pic/slider-info-4@2x.jpg" alt>
                <div class="info-item-text">
                  <div class="info-price font-4"><span>start per night</span> $80</div>
                  <div class="info-temp font-4"><span>local temperature</span> 25° / 77°</div>
                  <p class="info-text">Etiam malesuada lectus tempor, ultricies lectus in, convallis massa.</p>
                </div>
              </div>
              <div class="info-item-content">
                <div class="main-title">
                  <h3 class="title"><span class="font-4">Austria</span> Serfaus</h3>
                  <div class="price"><span>$80</span> per night</div><a href="hotels-details.html" class="button">Details</a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- ! slider-info-->
      </div>
      <!-- page section-->
      {{-- fin slider --}}

    @yield('content')




    	<!--========= scrip footer ===========-->
    	@include('public.partials.footer')
    	<!--========= fin  ===========-->

    @yield('script')


   
</html>