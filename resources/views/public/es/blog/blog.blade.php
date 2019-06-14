@extends('public.es.layouts.master')

@section('content')
<div class="content-body">
      <div class="container page">




        <div class="row">            
       

          <div class="col-md-8">

          
            <div class="row blog-col">
              <!-- Blog Post-->

                        <div class="tp-banner-container">
                            <div class="tp-banner-slider">
                            <ul>
                                @foreach($data as $item)
                                <li data-masterspeed="700" data-slotamount="7" data-transition="fade"><img src="rs-plugin/assets/loader.gif" data-lazyload="{{$item->urlimagen}}" style="width:1920px; height:860px" data-bgposition="center" alt="" data-kenburns="on" data-duration="30000" data-ease="Linear.easeNone" data-scalestart="100" data-scaleend="120" data-rotatestart="0" data-rotateend="0" data-offsetstart="0 0" data-offsetend="0 0" data-bgparallax="10">
                                <div data-x="['center','center','center','center']" data-y="center" data-transform_in="x:-150px;opacity:0;s:1500;e:Power3.easeInOut;" data-transform_out="x:150px;opacity:0;s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" data-start="400" class="tp-caption sl-content">

                                   <div style="background:rgba(0,0,0,0.5); width:800px; height:80px;  margin-top:400px; margin-left:0px;">
                                         <div class="sl-title-top" style="padding:15px; font-size:20px; line-height: 120%">{{$item->titulo}}</div>  
                                                                    
                                   </div>

                                  
                                    <!-- <div class="sl-title-top">Bienvenido a</div>
                                    <div class="sl-title">Cusco</div> -->
                                    <!-- <div class="sl-title-bot">Starting <span>$105</span> per night</div> -->
                                </div>
                                </li>
                                @endforeach
                            
                            </ul>
                            </div>
                           
                        </div>
      
         <br/>  <br/>  
        

    <section class="small-section bg-gray">
        <div class="container">
          <div class="row">
            <div class="col-md-8" style="margin-top: -80px;">
             
              <h3 class="title-section" style="text-align: center;"><span>Bienvenido a nuestro blog de viajes</span></h3>
              
              <p>¡Hola! Nos encanta viajar por el Perú para descubrir su riqueza natural y cultural. Queremos contagiarte esta pasión y entusiasmo para que disfrutes al máximo la belleza del país y sus tesoros ocultos. ¡Únete a esta aventura y tomemos juntos el mismo camino!</p>
              
              
            
            </div>

            
            
          </div>


        <div class="col-md-8">
                <h6 class="title-section-top font-4">CULTURA</h6>
                <div class="cws_divider mb-25 mt-5"></div>

                <div class="row">
                    <!-- Recomended item-->
                    @foreach($cultura as $itemp)
                        <div class="col-md-6">
                          <div class="recom-item">
                            <div class="recom-media"><a href="{{route('detalleBlog',['blog'=>$itemp->url])}}">
                                <div class="pic"><img src="{{ $itemp->urlimagen}}" data-at2x="pic/recomended/1@2x.jpg" style="height: 300px"></div></a>
                              <!-- <div class="location"><i class="flaticon-suntour-map"></i> Istanbul, Turkey</div> -->
                            </div>
                            <!-- Recomended Content-->
                            <div class="recom-item-body"><a href="{{route('detalleBlog',['blog'=>$itemp->url])}}">
                                <h6 class="blog-title">{{$itemp->titulo}}</h6></a>
                              <!-- <div class="stars stars-4"></div>
                              <div class="recom-price"><span class="font-4">$90</span> per night</div> -->
                              <p class="mb-30">{!!str_limit($itemp->descripcioncorta,70)!!}</p><a href="" class="recom-button"></a><a href="{{route('detalleBlog',['blog'=>$itemp->url])}}" class="cws-button small alt">Leer más</a>
                              <!-- <div class="action font-2">20%</div> -->
                            </div>
                            <!-- Recomended Image-->
                            
                          </div>
                        </div>
                    <!-- ! Recomended item-->
                    @endforeach
                
              <div style="text-align: center;">
                    <a href="{{route('blogPorCategoria',['blog'=>'cultura'])}}" class="cws-button alt">Ver más</a>
              </div>
         
                   


          </div>
        </div>

        <div class="col-md-8">
                <h6 class="title-section-top font-4">NOTICIAS</h6>
                <div class="cws_divider mb-25 mt-5"></div>

                <div class="row">
            <!-- Recomended item-->
            <div class="col-md-6">
              <div class="recom-item">
                <div class="recom-media"><a href="hotels-details.html">
                    <div class="pic"><img src="public/pic/recomended/1.jpg" data-at2x="pic/recomended/1@2x.jpg" alt></div></a>
                  <div class="location"><i class="flaticon-suntour-map"></i> Istanbul, Turkey</div>
                </div>
                <!-- Recomended Content-->
                <div class="recom-item-body"><a href="hotels-details.html">
                    <h6 class="blog-title">Hotel Bohemians</h6></a>
                  <div class="stars stars-4"></div>
                  <div class="recom-price"><span class="font-4">$90</span> per night</div>
                  <p class="mb-30">Quisque egestas a est in convallis. Maecenas pellentesque.</p><a href="hotels-details.html" class="recom-button">Read more</a><a href="hotels-details.html" class="cws-button small alt">Book now</a>
                  <div class="action font-2">20%</div>
                </div>
                <!-- Recomended Image-->
                
              </div>
            </div>
            <!-- ! Recomended item-->
            <!-- Recomended item-->
            <div class="col-md-6">
              <div class="recom-item">
                <div class="recom-media"><a href="hotels-details.html">
                    <div class="pic"><img src="public/pic/recomended/2.jpg" data-at2x="pic/recomended/2@2x.jpg" alt></div></a>
                  <div class="location"><i class="flaticon-suntour-map"></i> Praga, Czech Republic</div>
                </div>
                <!-- Recomended Content-->
                <div class="recom-item-body"><a href="hotels-details.html">
                    <h6 class="blog-title">Easyhotel</h6></a>
                  <div class="stars stars-3"></div>
                  <div class="recom-price"><span class="font-4">$35</span> per night</div>
                  <p class="mb-30">Mauris eget hendrerit diam. Praesent a lacinia ex.</p><a href="hotels-details.html" class="recom-button">Read more</a><a href="hotels-details.html" class="cws-button small alt">Book now</a>
                </div>
                <!-- Recomended Image-->
              </div>
            </div>
            <!-- ! Recomended item-->


            
           
            
          </div>
        </div>
        
        <div class="col-md-8">
                <h6 class="title-section-top font-4">GASTRONOMIA</h6>
                <div class="cws_divider mb-25 mt-5"></div>

                <div class="row">
            <!-- Recomended item-->
            <div class="col-md-6">
              <div class="recom-item">
                <div class="recom-media"><a href="hotels-details.html">
                    <div class="pic"><img src="public/pic/recomended/1.jpg" data-at2x="pic/recomended/1@2x.jpg" alt></div></a>
                  <div class="location"><i class="flaticon-suntour-map"></i> Istanbul, Turkey</div>
                </div>
                <!-- Recomended Content-->
                <div class="recom-item-body"><a href="hotels-details.html">
                    <h6 class="blog-title">Hotel Bohemians</h6></a>
                  <div class="stars stars-4"></div>
                  <div class="recom-price"><span class="font-4">$90</span> per night</div>
                  <p class="mb-30">Quisque egestas a est in convallis. Maecenas pellentesque.</p><a href="hotels-details.html" class="recom-button">Read more</a><a href="hotels-details.html" class="cws-button small alt">Book now</a>
                  <div class="action font-2">20%</div>
                </div>
                <!-- Recomended Image-->
                
              </div>
            </div>
            <!-- ! Recomended item-->
            <!-- Recomended item-->
            <div class="col-md-6">
              <div class="recom-item">
                <div class="recom-media"><a href="hotels-details.html">
                    <div class="pic"><img src="public/pic/recomended/2.jpg" data-at2x="pic/recomended/2@2x.jpg" alt></div></a>
                  <div class="location"><i class="flaticon-suntour-map"></i> Praga, Czech Republic</div>
                </div>
                <!-- Recomended Content-->
                <div class="recom-item-body"><a href="hotels-details.html">
                    <h6 class="blog-title">Easyhotel</h6></a>
                  <div class="stars stars-3"></div>
                  <div class="recom-price"><span class="font-4">$35</span> per night</div>
                  <p class="mb-30">Mauris eget hendrerit diam. Praesent a lacinia ex.</p><a href="hotels-details.html" class="recom-button">Read more</a><a href="hotels-details.html" class="cws-button small alt">Book now</a>
                </div>
                <!-- Recomended Image-->
              </div>
            </div>
            <!-- ! Recomended item-->


            
           
            
          </div>
        </div>
        </div>

        
      </section>



      <div class="content-body">
      <div class="container page">
 
        <div class="row">
          <div class="col-md-8 mb-60"  id="principal_blog">
          <h6 class="title-section-top font-4" style="margin-top: -74px;">ÚLTIMOS ARTÍCULOS</h6>
                  <div class="cws_divider mb-25 mt-5"></div>
            <!-- Blog item-->
            @foreach($data as $item)
            <div class="blog-item clearfix mb-30 border">
              <!-- Blog Image-->
              <div class="blog-media"><a href="blog-single.html">
                  <div class="pic"><img src="{{ $item->urlimagen}}" data-at2x="pic/blog/270x270/1@2x.jpg" alt  style="width: 270px; height: 270px;"></div></a></div>
              <!-- blog body-->
              <div class="blog-item-body clearfix">
                <!-- title--><a href="{{route('detalleBlog',['blog'=>$item->url])}}">
                  <h6 class="blog-title">{{$item->titulo}}</h6></a>
                <div class="blog-item-data">{{$item->fechaPublicacion}}</div>
                <!-- Text Intro-->
                <!-- <p> {{$item->descripcioncorta}} </p><a href="/detalleBlog" class="blog-button">Leer más</a> -->

                <p> {{$item->descripcioncorta}} </p><a href="{{route('detalleBlog',['blog'=>$item->url])}}" class="blog-button">Leer más</a>
               
              </div>
            </div>
            @endforeach
             {!! $data->render() !!}

          </div>
          <div class="col-md-4 sidebar">
            <aside class="sb-right pb-50-imp">
              <!-- widget search-->
                <!-- <div class="cws-widget">
                  <div class="widget-search">
                    <form role="search" method="get" action="#" class="search-form">
                      <label><span class="screen-reader-text">Where will you go next?</span>
                        <input type="search" placeholder="Where will you go next?" value="" name="s" title="Search:" class="search-field">
                      </label>
                      <button type="submit" class="search-submit"><i class="flaticon-suntour-search"></i></button>
                    </form>
                  </div>
                </div> -->
              <!-- ! widget search-->
              <!-- widget category-->
              
              <div class="cws-widget">
                <div class="widget-categories">
                  <h2 class="widget-title">Categorias</h2>
                  <ul>
                        @foreach($categoria as $item)
                            <li class="cat-item cat-item-1"><a href="{{route('blogPorCategoria',['blog'=>$item->nombre])}}">{{$item->nombre}}</a></li>
                        @endforeach 
                  </ul>
                </div>
              </div>
              <!-- ! widget category-->
              <!-- widget post-->
              <div class="cws-widget">
                <div class="widget-post">
                  <h2 class="widget-title alt">ÚLTIMOS ARTICULOS</h2>
                  <!-- item recent post-->
                  @foreach($data as $item)
                  <div class="item-recent clearfix">
                    <div class="widget-post-media"><img src="{{$item->urlimagen}}" data-at2x="pic/blog/80x80/1@2x.jpg" alt style="height:60px"></div>
                    <h3 class="title"><a href="blog-single.html">{!!str_limit($item->titulo,50)!!}.</a></h3>
                    <div class="date-recent">{{$item->fechaPublicacion}} </div>
                  </div>
                  @endforeach
            
             
                </div>
              </div>
              <!-- ! widget post-->
              <!-- widget archive-->
                <!-- <div class="cws-widget">
                  <div class="widget-archive">
                    <h2 class="widget-title">Archives</h2>
                    <ul>
                      <li class="cat-item cat-item-1"><a href="#">May 2016 <span>(155)</span> </a></li>
                      <li class="cat-item cat-item-1"><a href="#">April 2016 <span>(28)</span> </a></li>
                      <li class="cat-item cat-item-1"><a href="#">March 2016 <span>(15)</span> </a></li>
                      <li class="cat-item cat-item-1"><a href="#">February 2016 <span>(17)</span> </a></li>
                      <li class="cat-item cat-item-1"><a href="#">January 2016 <span>(8)</span> </a></li>
                      <li class="cat-item cat-item-1"><a href="#">November 2016 <span>(23)</span> </a></li>
                      <li class="cat-item cat-item-1"><a href="#">October 2016 <span>(5)</span> </a></li>
                      <li class="cat-item cat-item-1"><a href="#">September 2016 <span>(12)</span> </a></li>
                    </ul>
                  </div>
                </div> -->
              <!-- ! widget archive-->
              <!-- widget comments-->
                <!-- <div class="cws-widget">
                  <div class="widget-comments">
                    <h2 class="widget-title">Recent Comments</h2>
                    <ul>
                      <li>
                        <div class="widget-comments-title"><a href="#">Phillip Ferguson </a>on <a href="#" class="title">Nullam interdum orci vitae mi mollis</a></div>
                        <p>Nullam a porta massa. Sed elit purus, mollis id sollicitudin ac diam...</p>
                      </li>
                      <li>
                        <div class="widget-comments-title"><a href="#">Phillip Ferguson </a>on <a href="#" class="title">Integer in lacus id nisi posuere euismod</a></div>
                        <p>Praesent et convallis purus, laoreet mattis sapien. Sed bibendum ante...</p>
                      </li>
                      <li>
                        <div class="widget-comments-title"><a href="#">Phillip Ferguson </a>on <a href="#" class="title">Quisque viverra ipsum a felis gravida auctor</a></div>
                        <p>Proin non ipsum ipsum. Nam varius arcu et metus pellentesque, ac lobortis...</p>
                      </li>
                      <li>
                        <div class="widget-comments-title"><a href="#">Phillip Ferguson </a>on <a href="#" class="title">Donec id nibh vel ante tempus egestas</a></div>
                        <p>Proin mollis nibh elit, in dapibus ligula tristique eu. Quisque varius ante...</p>
                      </li>
                    </ul>
                  </div>
                </div> -->
              <!-- ! widget comments-->
            </aside>
            
          </div>
          
        </div>
      </div>
    </div>





            </div>
            
          </div>
          <div class="col-md-4 sidebar">
            <aside class="sb-right pb-50-imp">
              <!-- widget search-->
                <!-- <div class="cws-widget">
                  <div class="widget-search">
                    <form role="search" method="get" action="#" class="search-form">
                      <label><span class="screen-reader-text">Where will you go next?</span>
                        <input type="search" placeholder="Where will you go next?" value="" name="s" title="Search:" class="search-field">
                      </label>
                      <button type="submit" class="search-submit"><i class="flaticon-suntour-search"></i></button>
                    </form>
                  </div>
                </div> -->
              <!-- ! widget search-->
              <!-- widget category-->
              <div class="cws-widget">
                <div class="widget-categories">
                  <h2 class="widget-title">Categorias</h2>
                  <ul>
                        @foreach($categoria as $item)
                            <li class="cat-item cat-item-1"><a href="{{route('blogPorCategoria',['blog'=>$item->nombre])}}">{{$item->nombre}}</a></li>
                        @endforeach 
                  </ul>
                </div>
              </div>
              <!-- ! widget category-->
              <!-- widget post-->
              <div class="cws-widget">
                <div class="widget-post">
                  <h2 class="widget-title alt">ÚLTIMOS POST</h2>
                  <!-- item recent post-->
                  @foreach($data as $item)
                  <div class="item-recent clearfix">
                    <div class="widget-post-media"><img src="{{$item->urlimagen}}" data-at2x="pic/blog/80x80/1@2x.jpg" alt style="height:60px"></div>
                    <h3 class="title"><a href="blog-single.html">{!!str_limit($item->titulo,50)!!}.</a></h3>
                    <div class="date-recent">{{$item->fechaPublicacion}} </div>
                  </div>
                  @endforeach
                
                </div>
              </div>
              <!-- ! widget post-->
              <!-- widget archive-->
              <div class="cws-widget">
                <div class="widget-archive">
                  <h2 class="widget-title">Archives</h2>
                  <ul>
                    <li class="cat-item cat-item-1"><a href="#">May 2016 <span>(155)</span> </a></li>
                    <li class="cat-item cat-item-1"><a href="#">April 2016 <span>(28)</span> </a></li>
                    <li class="cat-item cat-item-1"><a href="#">March 2016 <span>(15)</span> </a></li>
                    <li class="cat-item cat-item-1"><a href="#">February 2016 <span>(17)</span> </a></li>
                    <li class="cat-item cat-item-1"><a href="#">January 2016 <span>(8)</span> </a></li>
                    <li class="cat-item cat-item-1"><a href="#">November 2016 <span>(23)</span> </a></li>
                    <li class="cat-item cat-item-1"><a href="#">October 2016 <span>(5)</span> </a></li>
                    <li class="cat-item cat-item-1"><a href="#">September 2016 <span>(12)</span> </a></li>
                  </ul>
                </div>
              </div>
              <!-- ! widget archive-->
              <!-- widget calendar-->
              <div class="cws-widget">
                <div class="widget-calendar">
                  <div id="calendar"></div>
                </div>
              </div>
              <!-- ! widget calendar-->
            </aside>
          </div>
        </div>
      </div>
    </div>




@endsection

@section('script')



  
<script>



$(document).on('click','.pagination a', function(e){

    e.preventDefault();
    var page=$(this).attr('href').split('page=')[1];
    
     $.ajax({                        
                url:'{{ route('listar_blog') }}',
                data:{page:page},
                type: 'GET',           
                dataType:'json',
                success: function(data)             
                {
                
                  $("#principal_blog").html(data);

                }
        });  

});

       
     
</script>

@endsection


