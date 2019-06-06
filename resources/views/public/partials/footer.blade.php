<style type="text/css">
    
    #diseno{
            height: 40px;
            border: 1px solid #e6e6e6;
            max-width: 100%;
            width: 100%;
            font-size: 14px;
            margin-bottom: 20px;
            padding: 0 15px;
            font-style: italic;
            background: transparent;
    }
</style>


<!-- footer-->
    <footer style="background-image: url('pic/footer/footer-bg.jpg')" class="footer footer-fixed">
      <div class="container">
        <div class="row pb-100 pb-md-40">
          <!-- widget footer-->
          <div class="col-md-6 col-sm-12 mb-sm-30">
            <div class="logo-soc clearfix">
              <div class="footer-logo"><a href="index.html"><img src="img/logo-white.png" data-at2x="img/logo-white@2x.png" alt></a></div>
            </div>
            <p class="color-g2 mt-10">Vestibulum tincidunt venenatis scelerisque. Proin quis enim lacinia, vehicula massa et, mollis urna. Proin nibh mauris, blandit vitae convallis at, tincidunt vel tellus. Praesent posuere nec lectus non.</p>
            <!-- social-->
            <div class="social-link dark"><a href="#" class="cws-social fa fa-twitter"></a><a href="#" class="cws-social fa fa-facebook"></a><a href="#" class="cws-social fa fa-google-plus"></a><a href="#" class="cws-social fa fa-linkedin"></a></div>
            <!-- ! social-->
          </div>
          <!-- ! widget footer-->
          <!-- widget footer-->
          <div class="col-md-3 col-sm-6 mb-sm-30">
            <div class="widget-footer">
              <h4>Latest Tweets</h4>
              <div class="twitter-footer align-left"></div>
            </div>
          </div>
          <!-- end widget footer-->
          <!-- widget footer-->
          <div class="col-md-3 col-sm-6">
            <div class="widget-footer">
              <h4>Tag cloud</h4>
              <div class="widget-tags-wrap"><a href="#" rel="tag" class="tag">Adventure</a><a href="#" rel="tag" class="tag">Romantic</a><a href="#" rel="tag" class="tag">Wildlife</a><a href="#" rel="tag" class="tag">Beach</a><a href="#" rel="tag" class="tag">Honeymoon</a><a href="#" rel="tag" class="tag">Island</a><a href="#" rel="tag" class="tag">Parks</a><a href="#" rel="tag" class="tag">Family</a><a href="#" rel="tag" class="tag">Travel</a></div>
            </div>
          </div>
          <!-- end widget footer-->
        </div>
      </div>
      <!-- copyright-->
      <div class="copyright"> 
        <div class="container">
          <div class="row">
            <div class="col-sm-6">
              <p>© Copyright 2016 <span>Suntour</span> &nbsp;&nbsp;|&nbsp;&nbsp; All Rights Reserved</p>
            </div>
            <div class="col-sm-6 text-right"><a href="index.html" class="footer-nav">Home</a><a href="page-about-us.html" class="footer-nav">Pages</a><a href="hotels-search.html" class="footer-nav">Hotels</a><a href="blog-grid.html" class="footer-nav">Blog</a><a href="shop-grid.html" class="footer-nav">Shop</a><a href="page-contact.html" class="footer-nav">Contacts</a></div>
          </div>
        </div>
      </div>
      <!-- end copyright-->
      <!-- scroll top-->
    </footer>
    <div id="scroll-top"><i class="fa fa-angle-up"></i></div>
    <!-- ! footer-->
    <!-- login popup-->
    <div class="login-popup">
      <div class="login-popup-wrap">
        <div class="title-wrap">
          <h2>Login</h2><i class="close-button flaticon-close"></i>
        </div>
        <div class="login-content">
          
            <form method="post" action="{{ url('/login') }}">
            {!! csrf_field() !!}

            <div class="form-group has-feedback {{ $errors->has('email') ? ' has-error' : '' }}">
                <input type="email" class="form-row" name="email" value="{{ old('email') }}" placeholder="Email">
                <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                @if ($errors->has('email'))
                    <span class="help-block">
                    <h6 style="color: red;font-family: italic;">{{ $errors->first('email') }} <h6>
                </span>
                @endif
            </div>

            <div class="form-group has-feedback{{ $errors->has('password') ? ' has-error' : '' }}">
                <input type="password"  class="form-row form-row-last" placeholder="Password" name="password">
                <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                @if ($errors->has('password'))
                    <span class="help-block">
                    <h6 style="color: red;font-family: italic;">{{ $errors->first('password') }} <h6>
                </span>
                @endif

            </div>
            <div class="row">
                
                <!-- /.col -->
                <div class="col-xs-12">
                    <button type="submit" class="cws-button gray alt full-width mt-20">Login</button>
                </div>
                <!-- /.col -->
            </div>

               <div class="remember">
                <div class="checkbox">
                  <input id="checkbox30" type="checkbox" value="None" name="check">
                  <label for="checkbox30">Remember Me</label>
                </div><a href="#">Forgot Password ?</a>
              </div>
        </form>



       
        </div>
        <div class="login-bot">
          <p>No account yet? <a href="#">Register now</a></p>
        </div>
      </div>
    </div>
    <!-- ! login popup-->


  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header" style="background: #ffc107;">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title" style="color: white;text-align: center;">REGISTRAR</h4>
        </div>
        <div class="modal-body">
         
            <div class="login-content">
          
                         <form method="post" action="{{ url('/register') }}">

            {!! csrf_field() !!}

            <div class="form-group has-feedback{{ $errors->has('name') ? ' has-error' : '' }}">
                <input type="text" class="form-control" name="name" value="{{ old('name') }}" placeholder="Name">
                <span class="glyphicon glyphicon-user form-control-feedback"></span>

                @if ($errors->has('name'))
                    <span class="help-block">
                        <strong>{{ $errors->first('name') }}</strong>
                    </span>
                @endif
            </div>

            <div class="form-group has-feedback{{ $errors->has('full_name') ? ' has-error' : '' }}">
                <input type="text" class="form-control" name="full_name" value="{{ old('full_name') }}" placeholder="Full Name">
                <span class="glyphicon glyphicon-user form-control-feedback"></span>

                @if ($errors->has('full_name'))
                    <span class="help-block">
                        <strong>{{ $errors->first('full_name') }}</strong>
                    </span>
                @endif

           
                             
                              
            </div>
            
            <div class="form-group has-feedback">
               
                <select id="pais" name="pais" class="country_to_state">
                    <option value="AF">Afganistán</option>
                    <option value="AL">Albania</option>
                    <option value="DE">Alemania</option>
                    <option value="AD">Andorra</option>
                   
                </select>
                     
                              
            </div>
             <div class="form-group has-feedback">
              
                   <select id="documento" name="documento" class="country_to_state">
                        <option value="pasaporte">PASAPORTE</option> 
                        <option value="dni">DNI</option>
                    </select>          
                              
            </div>

            <div class="form-group has-feedback{{ $errors->has('numero_documento') ? ' has-error' : '' }}">
                <input type="text" class="form-control" name="numero_documento" value="{{ old('numero_documento') }}" placeholder="Número del Documento">
                <span class="glyphicon glyphicon-user form-control-feedback"></span>

                @if ($errors->has('numero_documento'))
                    <span class="help-block">
                        <strong>{{ $errors->first('numero_documento') }}</strong>
                    </span>
                @endif
            </div>

            

            <div class="form-group has-feedback{{ $errors->has('email') ? ' has-error' : '' }}">
                <input type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="Email">
                <span class="glyphicon glyphicon-envelope form-control-feedback"></span>

                @if ($errors->has('email'))
                    <span class="help-block">
                        <strong>{{ $errors->first('email') }}</strong>
                    </span>
                @endif
            </div>

            <div class="form-group has-feedback{{ $errors->has('password') ? ' has-error' : '' }}">
                <input type="password" class="form-control" name="password" placeholder="Password">
                <span class="glyphicon glyphicon-lock form-control-feedback"></span>

                @if ($errors->has('password'))
                    <span class="help-block">
                        <strong>{{ $errors->first('password') }}</strong>
                    </span>
                @endif
            </div>

            <div class="form-group has-feedback{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                <input type="password" name="password_confirmation" class="form-control" placeholder="Confirm password">
                <span class="glyphicon glyphicon-lock form-control-feedback"></span>

                @if ($errors->has('password_confirmation'))
                    <span class="help-block">
                        <strong>{{ $errors->first('password_confirmation') }}</strong>
                    </span>
                @endif
            </div>

            <div class="row">
                <div class="col-xs-8">
                    <div class="checkbox icheck">
                        <label>
                            <input type="checkbox"> I agree to the <a href="#">terms</a>
                        </label>
                    </div>
                </div>
                <!-- /.col -->
                <div class="col-xs-4">
                    <button type="submit" class="btn btn-primary btn-block btn-flat">Register</button>
                </div>
                <!-- /.col -->
            </div>
        </form>
       
        </div>

        </div>
        <div class="modal-footer"  style="background: #ffc107;">
      
        </div>
      </div>
    </div>
  </div>


    <!-- news popup-->
    <div class="news-popup"> 
      <div class="news-popup-wrap"> <i class="close-button flaticon-close"></i>
        <div class="row">
          <div class="col-sm-6"><img src="pic/news-popup.jpg" data-at2x="pic/news-popup@2x.jpg" alt></div>
          <div class="col-sm-6">
            <div class="news-content">
              <div class="news-title">
                <h2>Newsletter</h2>
                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor.</p>
              </div>
              <form method="get" action="#" class="newsletter contact-form">
                <label class="mb-0">
                  <input type="text" placeholder="Enter Your Email ..." value="" name="email" class="newsletter-field mb-0">
                </label>
                <button type="submit" class="newsletter-submit cws-button alt">Submit</button>
              </form>
              <div class="checkbox-wrap">
                <div class="checkbox">
                  <input id="checkbox40" type="checkbox" value="None" name="check">
                  <label for="checkbox40">Dont Show This Message Again</label>
                </div>
              </div>
              <div class="social-wrap"><a href="#" class="cws-social flaticon-social-4"></a><a href="#" class="cws-social flaticon-social"></a><a href="#" class="cws-social flaticon-social-3"></a><a href="#" class="cws-social flaticon-social-1"></a><a href="#" class="cws-social flaticon-social-network"></a></div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- ! news popup-->



    <script src="https://www.youtube.com/player_api"></script>
    {!!Html::script('public/js/jquery.min.js')!!}
    {!!Html::script('public/js/jquery-ui.min.js')!!}
    {!!Html::script('public/js/bootstrap.js')!!}
    {!!Html::script('public/js/owl.carousel.js')!!}
    {!!Html::script('public/js/jquery.sticky.js')!!}
    {!!Html::script('public/js/TweenMax.min.js')!!}
    {!!Html::script('public/js/cws_parallax.js')!!}
    {!!Html::script('public/js/jquery.fancybox.pack.js')!!}
    {!!Html::script('public/js/jquery.fancybox-media.js')!!}
    {!!Html::script('public/js/isotope.pkgd.min.js')!!}
    {!!Html::script('public/js/imagesloaded.pkgd.min.js')!!}
    {!!Html::script('public/js/masonry.pkgd.min.js')!!}
    {!!Html::script('public/rs-plugin/js/jquery.themepunch.tools.min.js')!!}
    {!!Html::script('public/rs-plugin/js/jquery.themepunch.revolution.min.js')!!}
    {!!Html::script('public/rs-plugin/js/extensions/revolution.extension.slideanims.min.js')!!}
    {!!Html::script('public/rs-plugin/js/extensions/revolution.extension.layeranimation.min.js')!!}
    {!!Html::script('public/rs-plugin/js/extensions/revolution.extension.navigation.min.js')!!}
    {!!Html::script('public/rs-plugin/js/extensions/revolution.extension.parallax.min.js')!!}
    {!!Html::script('public/rs-plugin/js/extensions/revolution.extension.video.min.js')!!}
    {!!Html::script('public/rs-plugin/js/extensions/revolution.extension.actions.min.js')!!}
    {!!Html::script('public/rs-plugin/js/extensions/revolution.extension.kenburn.min.js')!!}
    {!!Html::script('public/rs-plugin/js/extensions/revolution.extension.migration.min.js')!!}
    {!!Html::script('public/js/jquery.validate.min.js')!!}
    {!!Html::script('public/js/jquery.form.min.js')!!}
    {!!Html::script('public/js/script.js')!!}
    {!!Html::script('public/js/bg-video/cws_self_vimeo_bg.js')!!}
    {!!Html::script('public/js/bg-video/jquery.vimeo.api.min.js')!!}
    {!!Html::script('public/js/bg-video/cws_YT_bg.js')!!}
    {!!Html::script('public/js/jquery.tweet.js')!!}
    {!!Html::script('public/js/jquery.scrollTo.min.js')!!}
    {!!Html::script('public/js/jquery.flexslider.js')!!}
    {!!Html::script('public/tuner/js/colorpicker.js')!!}
    {!!Html::script('public/tuner/js/scripts.js')!!}
    {!!Html::script('public/js/retina.min.js')!!}

        @if($errors->any())
        <script>
            $(document).ready(function(){
              
                  $(".login-popup").addClass("open");
            });
        </script>
        @endif

  </body>
</html>