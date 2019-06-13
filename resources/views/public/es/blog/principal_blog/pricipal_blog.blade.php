@foreach($data as $item)
        <div class="blog-item clearfix mb-30 border">
          <!-- Blog Image-->
          <div class="blog-media"><a href="blog-single.html">
              <div class="pic"><img src="{{ $item->urlimagen}}" data-at2x="pic/blog/270x270/1@2x.jpg" alt  style="width: 270px; height: 270px;"></div></a></div>
          <!-- blog body-->
          <div class="blog-item-body clearfix">
            <!-- title--><a href="blog-single.html">
              <h6 class="blog-title">{{$item->titulo}}</h6></a>
            <div class="blog-item-data">{{$item->fechaPublicacion}}</div>
            <!-- Text Intro-->
            <!-- <p> {{$item->descripcioncorta}} </p><a href="/detalleBlog" class="blog-button">Leer más</a> -->

            <p> {{$item->descripcioncorta}} </p><a href="{{route('detalleBlog',['blog'=>$item->url])}}" class="blog-button">Leer más</a>
           
          </div>
        </div>
        @endforeach
{!! $data->render() !!}