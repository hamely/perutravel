<meta property="og:url"           content="https://www.your-domain.com/your-page.html" />
  <meta property="og:type"          content="website" />
  <meta property="og:title"         content="Your Website Title" />
  <meta property="og:description"   content="Your description" />
  <meta property="og:image"         content="https://www.your-domain.com/path/image.jpg" />
@extends('public.es.layouts.master')

@section('content')

<div class="content-body">
      <div class="container page">
        <div class="row">
          <div class="col-md-8 mb-md-140">
            <!-- Blog Post image-->
          
            <div class="blog-item alt pb-20">
              <!-- Blog Image-->
             
              <div class="pic"><img src="{{$detalleBlog->urlimagen}}" data-at2x="pic/blog/770x370@2x.jpg" alt></div>
              <!-- title, author...-->
              <div class="blog-item-data clearfix">
                <h3 class="blog-title">{{$detalleBlog->titulo}}</h3>
                <p class="post-info"><i class="flaticon-people"></i><span class="posr-author">{{$detalleBlog->autor}} </span>on<a href="#" class="post-category"> <span>Adventure</span></a>,<a href="#" class="post-category"> <span>Wildlife </span></a>at {{$detalleBlog->fechaPublicacion}}</p>
              </div>
              <!-- Text Intro-->
              <p class="mb-25">{!!$detalleBlog->contenido!!}</p>
              
              <!-- Blockquote-->
              <!-- <div class="quote alt-2 clearfix mb-30 mt-20">
                <p>I am not a great cook, I am not a great artist, but I love art, and I love food, so I am the perfect traveller.</p><span>- Michael Palin</span>
              </div> -->
              <!-- Text Intro-->
              
              <!-- Post Tags-->
              <div class="blog-tags mb-40">
                <div class="blog-nav-tags"> <i class="flaticon-suntour-tag"></i><a href="#">Travel</a>, <a href="#">Beach</a>, <a href="#">Family</a></div>
                <div class="blog-nav-share align-right mt-lg-0"> <a href="#" class="cws-social fa fa-twitter"></a>
                <a href="#" class="cws-social fa fa-facebook"></a>
                <a href="#" class="cws-social fa fa-google-plus"></a><a href="#" class="cws-social fa fa-linkedin"></a></div>
              </div>
            </div>
         
            <!-- Blog Testimonials-->
              <!-- <div class="blog-item alt">
                <h2 class="title-section alt-3 font-bold mt-0 mb-10">Comments <span>(3)</span></h2>
                <div class="cws_divider"></div>
               
                <div class="comments mt-40">
                  <div class="comment-body">
                    <div class="avatar"><img src="pic/blog/90x90/1.jpg" data-at2x="pic/blog/90x90/1@2x.jpg" alt>12 Reviews</div>
                    <div class="comment-info">
                      <div class="comment-meta">
                        <div class="title">
                          <h5>Rachel Gearge</h5>
                        </div>
                        <div class="comment-date"><span>Mon, 03-23-2016</span></div>
                      </div>
                      <div class="comment-content">
                        <p>Proin ut pretium sem. Maecenas id commodo massa. Sed vitae urna hendrerit, commodo dolor non, porttitor odio. Suspendisse ac arcu eu enim lobortis luctus sed quis velit. Nam ut vestibulum orci, at sodales libero. Fusce egestas urna a dolor fermentum, id tincidunt leo eleifend.</p><a href="#">Read more</a>
                      </div>
                    </div>
                  </div>
                  <div class="comment-body comment-children">
                    <div class="avatar"><img src="pic/blog/90x90/2.jpg" data-at2x="pic/blog/90x90/2@2x.jpg" alt>12 Reviews</div>
                    <div class="comment-info">
                      <div class="comment-meta">
                        <div class="title">
                          <h5>John Vargas</h5>
                        </div>
                        <div class="comment-date"><span>Mon, 03-23-2016</span></div>
                      </div>
                      <div class="comment-content">
                        <p>Vestibulum tellus justo, scelerisque sit amet imperdiet et, placerat non massa. Aliquam erat volutpat. Proin vitae enim cursus, dapibus est at, feugiat mauris. Sed molestie dolor sed ante dictum dictum. Quisque at nulla ipsum. Praesent interdum.</p><a href="#">Read more</a>
                      </div>
                    </div>
                  </div>
                  <div class="comment-body comment-children child-3">
                    <div class="avatar"><img src="pic/blog/90x90/1.jpg" data-at2x="pic/blog/90x90/1@2x.jpg" alt>12 Reviews</div>
                    <div class="comment-info">
                      <div class="comment-meta">
                        <div class="title">
                          <h5>Rachel Gearge </h5>
                        </div>
                        <div class="comment-date"><span>Mon, 03-23-2016</span></div>
                      </div>
                      <div class="comment-content">
                        <p>Proin ut pretium sem. Maecenas id commodo massa. Sed vitae urna hendrerit, commodo dolor non, porttitor odio. Suspendisse ac arcu eu enim lobortis luctus sed quis velit. Nam ut vestibulum orci, at sodales libero.</p><a href="#">Read more</a>
                      </div>
                    </div>
                  </div>
                </div>
               
              </div> -->
            <!-- Leave a comment-->
              <!-- <h2 class="title-section mt-50 mb-20"><span>Post a comment</span></h2> -->
              <!-- <div class="add-comment pattern bg-gray-3 relative">
                <div class="widget-contact-form pb-0">
                
                  <div class="email_server_responce"></div>
                  <form action="php/contacts-process.php" method="post" class="form contact-form alt clearfix">
                    <div class="row">
                      <div class="col-md-6">
                        <div class="input-container">
                          <input type="text" name="name" value="" size="40" placeholder="Name" aria-invalid="false" aria-required="true" class="form-row form-row-first">
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="input-container">
                          <input type="text" name="email" value="" size="40" placeholder="Email" aria-required="true" class="form-row form-row-last">
                        </div>
                      </div>
                    </div>
                    <div class="input-container">
                      <textarea name="message" cols="40" rows="4" placeholder="Comment" aria-invalid="false" aria-required="true"></textarea>
                    </div>
                    <input type="submit" value="Submit now" class="cws-button alt">
                  </form>
                
                </div>
              </div> -->
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
                        @foreach($tipocategoria as $item)
                            <li class="cat-item cat-item-1"><a href="{{route('blogPorCategoria',['blog'=>$item->nombre])}}">{{$item->nombre}}</a></li>
                        @endforeach 
                  </ul>
                </div>
              </div>
              <!-- ! widget category-->
              <!-- widget post-->
              <div class="cws-widget">
                <div class="widget-post">
                  <h2 class="widget-title alt">POST POPULARES</h2>
                  <!-- item recent post-->
                  @foreach($post as $item)
                  <div class="item-recent clearfix">
                    <div class="widget-post-media"><img src="{{$item->urlimagen}}" data-at2x="pic/blog/80x80/1@2x.jpg" alt style="width:80px; height:80px"></div>
                    <h3 class="title"><a href="{{route('detalleBlog',['blog'=>$item->url])}}">{!!str_limit($item->titulo,60)!!}.</a></h3>
                    <div class="date-recent">{{$item->fechaPublicacion}} </div>
                  </div>
                  <div></div>
                  @endforeach
             
                  <!-- ! item recent post-->
                </div>
              </div>
              <!-- ! widget post-->
              <!-- widget tags-->
              <div class="cws-widget">
                <div class="widget-tags">
                  <h2 class="widget-title">Tags</h2>
                  <!-- item tags-->
                  <div class="widget-tags-wrap">
                  @foreach($tipocategoria as $item)
                    <a href="{{route('blogPorCategoria',['blog'=>$item->nombre])}}" rel="tag" class="tag">{{$item->nombre}}</a>
                  @endforeach 
                    
                  </div>
                </div>
              </div>
              <!-- ! widget tags-->
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
              <!-- widget calendar-->
                <!-- <div class="cws-widget">
                  <div class="widget-calendar">
                    <div id="calendar"></div>
                  </div>
                </div> -->
              <!-- ! widget calendar-->
            </aside>
          </div>
        </div>
      </div>
    </div>

    <div id="fb-root"></div>

    <div class="fb-share-button" 
        data-href="{{route('detalleBlog',['blog'=>$detalleBlog->url])}}" 
        data-layout="button_count">
    </div>
    <!-- <a href="http://www.facebook.com/sharer.php?u={{route('detalleBlog',['blog'=>$detalleBlog->url])}}&t={!!$detalleBlog->titulo!!};display=popup&amp; " target="_blank">Compartir en Facebook</a> -->

    
@endsection

@section('script')

<script>(function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s); js.id = id;
    js.src = "https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v3.0";
    fjs.parentNode.insertBefore(js, fjs);
  }(document, 'script', 'facebook-jssdk'));</script>

@endsection