<section id="about" class="about">
    <div class="container">

        <div class="section-title">
            <h2>About</h2>
            <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint
                consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia
                fugiat sit in iste officiis commodi quidem hic quas.</p>
        </div>

        <div class="row">
            <div class="col-lg-4" data-aos="fade-right">
                @foreach($about as $item)
                    <img src="{{asset('images/about/'.$item->image)}}"
                         class="img-fluid" alt="">
                @endforeach
            </div>
            <div class="col-lg-8 pt-4 pt-lg-0 content" data-aos="fade-left">
               @foreach($about as $item)
                    <h3>{{$item->title}}</h3>
                    <p class="font-italic">
                       {{$item->body}}
                    </p>
                    <div class="row">
                        <div class="col-lg-6">
                            <ul>
                                <li><i class="icofont-rounded-right"></i> <strong>Birthday:</strong>{{$item->birthday}}</li>
                                <li><i class="icofont-rounded-right"></i> <strong>Website:</strong>{{$item->website}}</li>
                                <li><i class="icofont-rounded-right"></i> <strong>Phone:</strong> {{$item->phone}}</li>
                                <li><i class="icofont-rounded-right"></i> <strong>City:</strong>{{$item->city}}
                                </li>
                            </ul>
                        </div>
                        <div class="col-lg-6">
                            <ul>
                                <li><i class="icofont-rounded-right"></i> <strong>Age:</strong> {{$item->age}}</li>
                                <li><i class="icofont-rounded-right"></i> <strong>Degree:</strong> {{$item->degree}}</li>
                                <li><i class="icofont-rounded-right"></i> <strong>PhEmailone:</strong> {{$item->email}}
                                </li>
                            </ul>
                        </div>
                    </div>
                    <p>
                     {{$item->description}}
                    </p>
                @endforeach
            </div>
        </div>

    </div>
</section>
<!-- End About Section -->
