
<section id="skills" class="skills section-bg">
    <div class="container">

        <div class="section-title">

            <h2>{{$skillOrder->title}}</h2>
            <p>{{$skillOrder->body}}</p>
        </div>

        <div class="row skills-content">
            @foreach ($skill as $item)

            <div class="col-lg-6" data-aos="fade-up">

                <div class="progress">
                    <span class="skill">{{$item->skill}} <i class="val">{{$item->spotted}}</i></span>
                    <div class="progress-bar-wrap">
                        <div class="progress-bar" role="progressbar" aria-valuenow="{{$item->value}}" aria-valuemin="0"
                             aria-valuemax="100"></div>
                    </div>
                </div>

        </div>
            @endforeach
    </div>
</section>
