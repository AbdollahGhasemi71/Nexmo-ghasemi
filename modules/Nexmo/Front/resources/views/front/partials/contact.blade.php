<section id="contact" class="contact">
    <div class="container">

        <div class="section-title">
            <h2>{{$contactBack->title}}</h2>
            <p>
                {{$contactBack->body}}
            </p>
        </div>

        <div class="row" data-aos="fade-in">

            <div class="col-lg-5 d-flex align-items-stretch">
                <div class="info">
                    <div class="address">
                        <i class="icofont-google-map"></i>
                        <h4>Location:</h4>
                        <p>{{$contactBack->location}}</p>
                    </div>

                    <div class="email">
                        <i class="icofont-envelope"></i>
                        <h4>Email:</h4>
                        <p>{{$contactBack->email}}</p>
                    </div>

                    <div class="phone">
                        <i class="icofont-phone"></i>
                        <h4>Call:</h4>
                        <p>{{$contactBack->call}}</p>
                    </div>
                </div>

            </div>

            <div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch">
                <form action="{{route('contact.ajax')}}" method="post"
                      role="form" class="php-email-form" id="form">
                    @csrf
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="name">Your Name</label>
                            <input type="text" name="fullname" class="form-control" id="name" data-rule="minlen:4"
                                   data-msg="Please enter at least 4 chars"/>

                        </div>
                        <div class="form-group col-md-6">
                            <label for="name">Your Email</label>
                            <input type="email" class="form-control" name="email" id="email" data-rule="email"
                                   data-msg="Please enter a valid email"/>

                        </div>
                    </div>
                    <div class="form-group">
                        <label for="name">Subject</label>
                        <input type="text" class="form-control" name="subject" id="subject" data-rule="minlen:4"
                               data-msg="Please enter at least 8 chars of subject"/>

                    </div>
                    <div class="form-group">
                        <label for="name">Message</label>
                        <textarea class="form-control" name="message" rows="10" data-rule="required"
                                  data-msg="Please write something for us"></textarea>
                    </div>
                    <div class="text-center">
                        <button type="submit">Send Message</button>
                    </div>
                </form>
            </div>

        </div>

    </div>
</section>
@section('js')
    <script>
        $('#form').submit(function (e) {
            e.preventDefault();
            let fullname = $('input[name=fullname]').val();
            let email = $('input[name=email]').val();
            let subject = $('input[name=subject]').val();
            let message = $('textarea[name=message]').val();
            let _token = $('input[name=_token]').val();
            let action = $('#form').attr('action');

            $.ajax({
                url: action,
                type: 'Post',
                data: {
                    fullname: fullname,
                    email: email,
                    subject: subject,
                    message: message,
                    _token: _token
                },

            })

        });

    </script>
@endsection
