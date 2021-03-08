<!-- Detectar si se accede desde un dispositivo movil -->
 <script type="text/javascript">
  $(document).ready(function() {
    // Si es Movil
    if( /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent) ) {
      $('.dispositivo').removeClass('mt-5');

      // Si es escritorio
    }else {
      $('.dispositivo').addClass('mt-5 p-4');
      $('.dispositivo').attr('style', 'padding-top: 5em !important;');
      $('.dispositivo-mt-2').addClass('mt-2');
      $('.escritorio-mt-3-p-t-75').addClass('p-t-75 mt-3')
    }

  });
 </script>

<!--===============================================================================================-->
<!-- jQuery UI -->
<script src="{{asset('vendor/jqueryui/jquery-ui.min.js')}}"></script>
<!--===============================================================================================-->
  <script src="{{asset('vendor/animsition/js/animsition.min.js')}}"></script>
<!--===============================================================================================-->

  <script src="{{asset('vendor/select2/select2.min.js')}}"></script>
  {{-- <script src="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/js/select2.min.js"></script> --}}
  <script>
    $(".js-select2").each(function(){
      $(this).select2({
        minimumResultsForSearch: 20,
        dropdownParent: $(this).next('.dropDownSelect2')
      });
    })
  </script>
  <!--===============================================================================================-->
    <script src="{{asset('vendor/daterangepicker/moment.min.js')}}"></script>
    <script src="{{asset('vendor/daterangepicker/daterangepicker.js')}}"></script>
  <!--===============================================================================================-->
    <script src="{{asset('vendor/slick/slick.min.js')}}"></script>
    {{-- <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js"></script> --}}
    <script src="{{asset('js/slick-custom.js')}}"></script>
  <!--===============================================================================================-->
    <script src="{{asset('vendor/parallax100/parallax100.js')}}"></script>
    <script>
          $('.parallax100').parallax100();
    </script>
  <!--===============================================================================================-->
    <script src="{{asset('vendor/MagnificPopup/jquery.magnific-popup.min.js')}}"></script>
    <script>
      $('.gallery-lb').each(function() { // the containers for all your galleries
        $(this).magnificPopup({
              delegate: 'a', // the selector for gallery item
              type: 'image',
              gallery: {
                enabled:true
              },
              mainClass: 'mfp-fade'
          });
      });
    </script>
  <!--===============================================================================================-->
    {{-- <script src="{{asset('vendor/isotope/isotope.pkgd.min.js')}}"></script> --}}
    <script src="https://unpkg.com/isotope-layout@3/dist/isotope.pkgd.js"></script>
  <!--===============================================================================================-->
    <script src="{{asset('vendor/sweetalert/sweetalert.min.js')}}"></script>
    {{-- <script>
      $('.js-addwish-b2').on('click', function(e){
        e.preventDefault();
      });

      $('.js-addwish-b2').each(function(){
        var nameProduct = $(this).parent().parent().find('.js-name-b2').html();
        $(this).on('click', function(){
          swal(nameProduct, "Se agregó a favoritos !", "success");

          $(this).addClass('js-addedwish-b2');
          $(this).off('click');
        });
      });

      $('.js-addwish-detail').each(function(){
        var nameProduct = $(this).parent().parent().parent().find('.js-name-detail').html();

        $(this).on('click', function(){
          swal(nameProduct, "Se agregó a favoritos !", "success");

          $(this).addClass('js-addedwish-detail');
          $(this).off('click');
        });
      });

      /*---------------------------------------------*/

      $('.js-addcart-detail').each(function(){
        var nameProduct = $(this).parent().parent().parent().parent().find('.js-name-detail').html();
        $(this).on('click', function(){
          swal(nameProduct, "se añadió a tu paquete !", "success");
        });
      });

    </script> --}}
  <!--===============================================================================================-->
    <script src="{{asset('vendor/perfect-scrollbar/perfect-scrollbar.min.js')}}"></script>
    <script>
      $('.js-pscroll').each(function(){
        $(this).css('position','relative');
        $(this).css('overflow','hidden');
        var ps = new PerfectScrollbar(this, {
          wheelSpeed: 1,
          scrollingThreshold: 1000,
          wheelPropagation: false,
        });

        $(window).on('resize', function(){
          ps.update();
        })
      });
    </script>
  <!--===============================================================================================-->
    <script src="{{asset('js/main.js')}}"></script>
 <!--===============================================================================================-->
 <script>
  $('#AbrirModal').on('click', function(){

    var winSize = {
    wheight : $(window).height(),
    wwidth : $(window).width()
    };
    var modSize = {
    mheight : $('#Modal_registro').height(),
    mwidth : $('#Modal_registro').width()
    };
  $('#Modal_registro').css({
    'padding-top' :  ((winSize.wheight - (modSize.mheight/2))/3),
  });

  $('#Modal_registro').modal({
    backdrop: true,
    keyboard : false
  });
 });
 </script>


{{-- Inizializaciones --}}

  {{-- Inicializar Tooltip --}}
  <script type="text/javascript">
  // Tooltips Initialization
    $(function () {
    $('[data-toggle="tooltip"]').tooltip()
    })
  </script>

  {{-- Inicializar select de material --}}
  {{-- <script type="text/javascript">

    $(document).ready(function() {
    $('.mdb-select').materialSelect();
    });
  </script> --}}

{{-- Márgenes auxiliares --}}
{{-- <script type="text/javascript">
// Si es Movil
if( /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent) ) {
  $('.dispositivo-mt-2').addClass('mt-2');
}
</script> --}}

{{-- FIN SCRIPTS --}}
