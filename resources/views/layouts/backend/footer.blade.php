      <!--footer start-->
      <footer class="site-footer">
        <div class="text-center">
            2018 &copy; FlatLab by VectorLab.
            <a href="#" class="go-top">
                <i class="fa fa-angle-up"></i>
            </a>
        </div>
    </footer>
    <!--footer end-->
</section>

  <!-- js placed at the end of the document so the pages load faster -->
  <script src="{{asset('backend/js/jquery.js')}}"></script>
  <script src="{{asset('backend/js/bootstrap.bundle.min.js')}}"></script>
  <script class="include" type="text/javascript" src="{{asset('backend/js/jquery.dcjqaccordion.2.7.js')}}"></script>
  <script src="{{asset('backend/js/jquery.scrollTo.min.js')}}"></script>
  <script src="{{asset('backend/js/jquery.nicescroll.js')}}" type="text/javascript"></script>
  <script src="{{asset('backend/js/jquery.sparkline.js')}}" type="text/javascript"></script>
  <script src="{{asset('backend/assets/jquery-easy-pie-chart/jquery.easy-pie-chart.js')}}"></script>
  <script src="{{asset('backend/js/owl.carousel.js')}}" ></script>
  <script src="{{asset('backend/js/jquery.customSelect.min.js')}}" ></script>
  <script src="{{asset('backend/js/respond.min.js')}}" ></script>
{{-- Text Editor  --}}
    <script type="text/javascript" src="{{asset('backend/assets/bootstrap-wysihtml5/wysihtml5-0.3.0.js')}}"></script>
    <script type="text/javascript" src="{{asset('backend/assets/bootstrap-wysihtml5/bootstrap-wysihtml5.js')}}"></script>
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
    {{-- <script type="text/javascript" src="{{asset('summernote/summernote.min.js')}}"></script> --}}

  <!--right slidebar-->
  <script src="{{asset('backend/js/slidebars.min.js')}}"></script>
  
 <!-- Go to www.addthis.com/dashboard to customize your tools -->
 <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5fe5e9cd0b26669d"></script>

  <!--common script for all pages-->
  <script src="{{asset('backend/js/common-scripts.js')}}"></script>
  <!--dynamic table initialization -->
    <script src="{{asset('backend/js/dynamic_table_init.js')}}"></script>

  <!--script for this page-->
  <script src="{{asset('backend/js/sparkline-chart.js')}}"></script>
  <script src="{{asset('backend/js/easy-pie-chart.js')}}"></script>
  <script src="{{asset('backend/js/count.js')}}"></script>

{{-- ---------------------------------------------- --}}
<!-- Jquery Form validation  -->
<script src="{{asset('jquery-validation/dist/jquery.validate.min.js')}}"></script>
    <script src="js/jquery-ui-1.9.2.custom.min.js"></script>
    
    <script type="text/javascript" language="javascript" src="{{asset('backend/assets/advanced-datatable/media/js/jquery.dataTables.js')}}"></script>
    <script type="text/javascript" src="{{asset('backend/assets/data-tables/DT_bootstrap.js')}}"></script>
    <script src="{{asset('backend/js/respond.min.js')}}" ></script>

    <!--right slidebar-->
    <script src="js/slidebars.min.js"></script>

    <script>
        $('#summernote').summernote({
        placeholder: 'Write Your Post ...',
        tabsize: 2,
        height: 120,
        toolbar: [
          ['style', ['style']],
          ['font', ['bold', 'underline', 'clear']],
          ['color', ['color']],
          ['para', ['ul', 'ol', 'paragraph']],
          ['table', ['table']],
          ['insert', ['link', 'picture', 'video']],
          ['view', ['fullscreen', 'codeview', 'help']]
        ]
      });
      </script>
<script>

    //owl carousel

    $(document).ready(function() {
        $("#owl-demo").owlCarousel({
            navigation : true,
            slideSpeed : 300,
            paginationSpeed : 400,
            singleItem : true,
            autoPlay:true

        });
    });

    //custom select box

    $(function(){
        $('select.styled').customSelect();
    });

    // $(window).on("resize",function(){
    //     var owl = $("#owl-demo").data("owlCarousel");
    //     owl.reinit();
    // });

</script>
@yield('js')

</body>


</html>