{{-- <div class="card" style="width: 50rem;"> --}}
    {{-- <div class="owl-carousel owl-theme">
        <img src="{{asset('images/slider_zakat1.jpeg')}}">
        <img src="{{asset('images/slider_zakat_fitrah.jpeg')}}">
    </div> --}}
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" style="width: 40%">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="d-block w-100" src="{{ asset('images/slider_zakat1.jpeg') }}" alt="First slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="{{ asset('images/slider_zakat_fitrah.jpeg') }}" alt="Second slide">
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    
{{-- </div> --}}
