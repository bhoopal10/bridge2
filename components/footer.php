    <div class="section footer-bottom">
      <div class="container">
        <div class="row">
          <div class="col-sm-12 text-center col-footer-bottom">
            <a id="scroll-top" href="#"><i class="fa fa-angle-up fa-2x"></i></a>
          </div>
           <div class="col-md-12">
             <div class=" text-center">
              <ul class="list-inline">
                <li><a href="#sample" class="fancybox" ><i class="fa fa-facebook fa-round fa-2x"></i></a></li>
                <li><a href="#sample" class="fancybox"><i class="fa fa-twitter fa-round fa-2x"></i></a></li>
                <li><a href="#sample" class="fancybox"><i class="fa fa-google-plus fa-round fa-2x"></i></a></li>
                <li><a href="#sample" class="fancybox"><i class="fa fa-linkedin fa-round fa-2x"></i></a></li>
              </ul>
            </div>
           </div>
        </div>
      </div>
    </div>
  </div>
  <div id="sample" style="display: none;" class="col-md-12 col-sm-12 text-center">
    
    <legend><h3>Get in touch with us</h3></legend>
    <form action="" class="form-horizontal col-md-8 col-md-offset-2">
        <div class="form-group">
            <input type="text" name="email" placeholder="Email" class="form-control">
        </div>
        <div class="form-group">
            <button class="btn btn-primary btn-block">Send</button>
        </div>
    </form>
  </div>
  <!-- autopopup -->
  <div class="col-md-3 col-sm-12 autopopup">
        <div class="autopopup-content">
            <div class="autopopup-header row">
                <div class="col-md-12">
                    <h2>Contact Us
                      <span class="pull-right">
                        <a href="javascript://" style="color:#000000"><i class="fa fa-chevron-down navigators" style="display:none"></i><i class="fa fa-chevron-up navigators"></i></a>  
                        </span>
                    </h2>
                </div>
                <div class="clearfix"></div>
            </div>
            <div class="autopopup-body">
            <div class="clearfix">&nbsp;</div>
              <div class="row">
              <div class="col-md-12">
                <form class="">
                    <div class="form-group">
                        <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Name">
                    </div>  
                    <div class="form-group">
                        <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email">
                     </div> 
                     <div class="form-group">
                        <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Phone">
                     </div>
                      <div class="form-group">
                          <textarea class="form-control" placeholder="Comment"></textarea>                      
                     </div>  
                     <div class="form-group">
                      <button class="btn btn-block btn-primary">Send</button>
                     </div>
                </form>
                </div>
                </div>
            </div>
            <div class="autopopup-footer">
                
            </div>
        </div>
  </div>
  <!-- end autopupop -->
  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
  <script src="public/js/jquery.js"></script>
  <script src="public/js/page.js"></script>
  <!-- Include all compiled plugins (below), or include individual files as needed -->
  <script src="public/js/bootstrap.js"></script>
  <script src="public/js/owl.js"></script>
  <script src="public/js/theme.js"></script>
  <script type="text/javascript" src="public/js/jquery.fancybox.js?v=2.1.5"></script>


<script charset="UTF-8" src="index_files/javascript.js" async=""></script>
<script type="text/javascript">
  $(function(){
    $(".section a[href^='#'],.item a[href^='#']").click(function(e){
      e.preventDefault();
        var href = $(this).attr('href');
        href = href.substr(1);
        var offset = $('#'+href).offset().top;
        $("html, body").animate({ scrollTop: offset },2000);
    });
    $('.navigators').click(function(){
        $('.navigators').toggle();
        $('.autopopup').toggleClass('active');
    });
    $('.fancybox').fancybox({maxWidth  : 800,
          maxHeight : 700,
          fitToView : false,
          width   : '40%',
          height    : '35%',
          autoSize  : false,
          closeClick  : false,
          openEffect  : 'none',
          closeEffect : 'none'
      });
  });
</script>
</body>
<script type="application/x-javascript" src="index_files/opt_content.js"></script></html>