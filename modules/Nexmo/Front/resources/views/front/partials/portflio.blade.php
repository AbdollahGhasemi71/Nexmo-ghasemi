<section id="portfolio" class="portfolio section-bg">
    <div class="container">

        <div class="section-title">
            <h2>{{$portfoOrder->title}}</h2>
            <p>{{$portfoOrder->body}}</p>
        </div>

        <div class="row" data-aos="fade-up">
            <div class="col-lg-12 d-flex justify-content-center">
                <ul id="portfolio-flters">

                        <li data-filter=".filter-app">{{$portfoOrder->link}}</li>


                </ul>
            </div>
        </div>

        <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="100">

      @foreach($portfo as $item)

                <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                    <div class="portfolio-wrap">
                        <img src="{{asset('images/portfo/'.$item->image)}}"
                             class="img-fluid" alt="">
                        <div class="portfolio-links">
                            <a href="{{asset('images/portfo/'.$item->image)}}"
                               data-gall="portfolioGallery" class="venobox" title="App 1"><i class="bx bx-plus"></i></a>
                        </div>
                    </div>
                </div>
            @endforeach

        </div>

    </div>
</section>
