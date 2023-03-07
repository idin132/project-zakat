    <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script><!-- jQuery JS -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script><!-- Popper JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script><!-- Boostrap JS -->
    <script type="text/javascript" src="http://code.jquery.com/jquery-migrate-1.2.1.js"></script><!-- jQuery Migrate JS -->
    <script src="{{ asset('assets/js/owl.carousel.js') }}"></script><!-- OwlCarousel JS -->
    <script src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script><!-- Slick JS -->
    <script>
        // OwlCarousel JS
        $('.owl-carousel').owlCarousel({
            loop: true,
            margin: 10,
            nav: true,
            items:2,
            responsive: {
                0: {
                    items: 1
                },
                600: {
                    items: 3
                },
                1000: {
                    items: 5
                }
            }
        })
        // Slick JS
        $(document).ready(function(){
            $('.your-class').slick();
            $('.program').slick({
                infinite: true,
                slidesToShow: 3,
            });

        });
        // Preloader time
        $(window).on('load',function(){
            $(".loader").fadeOut(4000);
            $(".content").fadeIn(4000);
        });
    </script>