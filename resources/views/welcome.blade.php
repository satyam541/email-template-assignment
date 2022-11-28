<!DOCTYPE html>
<html lang="en">

<head>
    <title>Satyam - FullStack Web Developer/FreeLancer</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('css/open-iconic-bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/animate.css') }}">

    <link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/magnific-popup.css') }}">

    <link rel="stylesheet" href="{{ asset('css/aos.css') }}">

    <link rel="stylesheet" href="{{ asset('css/ionicons.min.css') }}">
    <link rel="icon" type="image/x-icon" href="{{asset('images/favicon.png')}}">
    <link rel="stylesheet" href="{{ asset('css/flaticon.css') }}">
    <link rel="stylesheet" href="{{ asset('css/icomoon.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('adminlte/plugins/fontawesome-free/css/all.css') }}">
</head>

<body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">
    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar ftco-navbar-light site-navbar-target" id="ftco-navbar">
        <div class="container">
            <a class="navbar-brand" href="{{ url('/') }}">{!! $content->dashboard['title']->title !!}</a>
            <button class="navbar-toggler js-fh5co-nav-toggle fh5co-nav-toggle" type="button" data-toggle="collapse"
                data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="oi oi-menu"></span> Menu
            </button>

            <div class="collapse navbar-collapse" id="ftco-nav">
                <ul class="navbar-nav nav ml-auto">
                    <li class="nav-item"><a href="#home-section" class="nav-link"><span>Dashboard</span></a></li>
                    <li class="nav-item"><a href="#about-section" class="nav-link"><span>About</span></a></li>
                    <li class="nav-item"><a href="#resume-section" class="nav-link"><span>Resume</span></a></li>
                    <li class="nav-item"><a href="#services-section" class="nav-link"><span>Services</span></a></li>
                    <li class="nav-item"><a href="#skills-section" class="nav-link"><span>Skills</span></a></li>
                    <li class="nav-item"><a href="#projects-section" class="nav-link"><span>Projects</span></a></li>
                    <li class="nav-item"><a href="#blog-section" class="nav-link"><span>My Blog</span></a></li>
                    <li class="nav-item"><a href="#contact-section" class="nav-link"><span>Contact</span></a></li>
                </ul>
            </div>
        </div>
    </nav>
    <section id="home-section" class="hero">
        <div class="home-slider  owl-carousel">
            <div class="slider-item ">
                <div class="overlay"></div>
                <div class="container">
                    <div class="row d-md-flex no-gutters slider-text align-items-end justify-content-end"
                        data-scrollax-parent="true">
                        <div class="one-third js-fullheight order-md-last img"
                            style="background-image:url(uploads/{{ $content->dashboard['content1']->file }});">
                            <div class="overlay"></div>
                        </div>
                        <div class="one-forth d-flex  align-items-center ftco-animate"
                            data-scrollax=" properties: { translateY: '70%' }">
                            <div class="text">
                                <span class="subheading">Hello!</span>
                                <h1 class="mb-4 mt-3">{!! $content->dashboard['content1']->description !!}</h1>
                                <h2 class="mb-4">{!! $content->dashboard['content1']->title !!}</h2>
                                <p><a href="#contact-section" class="btn btn-primary py-3 px-4">Hire me</a> <a
                                        href="#" class="btn btn-white btn-outline-white py-3 px-4">My works</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="slider-item">
                <div class="overlay"></div>
                <div class="container">
                    <div class="row d-flex no-gutters slider-text align-items-end justify-content-end"
                        data-scrollax-parent="true">
                        <div class="one-third js-fullheight order-md-last img"
                            style="background-image:url(uploads/{{ $content->dashboard['content2']->file }});">
                            <div class="overlay"></div>
                        </div>
                        <div class="one-forth d-flex align-items-center ftco-animate"
                            data-scrollax=" properties: { translateY: '70%' }">
                            <div class="text">
                                <span class="subheading">Hello!</span>
                                <h1 class="mb-4 mt-3">{!! $content->dashboard['content2']->description !!}</h1>
                                <p><a href="#contact-section" class="btn btn-primary py-3 px-4">Hire me</a> <a
                                        href="#" class="btn btn-white btn-outline-white py-3 px-4">My works</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-about img ftco-section ftco-no-pb" id="about-section">
        <div class="container">
            <div class="row d-flex">
                <div class="col-md-6 col-lg-5 d-flex">
                    <div class="img-about img d-flex align-items-stretch">
                        <div class="overlay"></div>
                        <div class="img d-flex align-self-stretch align-items-center"
                            style="background-image:url(uploads/{{ $content->about['about']->file }});">
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-7 pl-lg-5 pb-5">
                    <div class="row justify-content-start pb-3">
                        <div class="col-md-12 heading-section ftco-animate">
                            <h1 class="big">About</h1>
                            <h2 class="mb-4">About Me</h2>
                            <p>{!! $content->about['about']->title !!}</p>
                            <ul class="about-info mt-4 px-md-0 px-2">
                                {!! $content->about['about']->description !!}
                            </ul>
                        </div>
                    </div>
                    <div class="counter-wrap ftco-animate d-flex mt-md-3">
                        <div class="text">
                            <p class="mb-4">
                                <span class="number" data-number="120">0</span>
                                <span>Project complete</span>
                            </p>
                            <p><a href="{{ route('getFile', ['fileName' => $content->resume['resume']->file]) }}"
                                    class="btn btn-primary py-3 px-3">Download CV</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section ftco-no-pb" id="resume-section">
        <div class="container">
            <div class="row justify-content-center pb-5">
                <div class="col-md-10 heading-section text-center ftco-animate">
                    <h1 class="big big-2">Resume</h1>
                    <h2 class="mb-4">Resume</h2>
                    <p>{!! $content->resume['resume']->description !!}</p>
                </div>
            </div>
            <div class="row">
                @foreach ($content->qualification as $qualification)
                    <div class="col-md-6">
                        <div class="resume-wrap ftco-animate">
                            {!! $qualification->description !!}
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="row justify-content-center mt-5">
                <div class="col-md-6 text-center ftco-animate">
                    <p><a href="{{ route('getFile', ['fileName' => $content->resume['resume']->file]) }}"
                            class="btn btn-primary py-4 px-5">Download CV</a></p>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section" id="services-section">
        <div class="container">
            <div class="row justify-content-center py-5 mt-5">
                <div class="col-md-12 heading-section text-center ftco-animate">
                    <h1 class="big big-2">Services</h1>
                    <h2 class="mb-4">Services</h2>
                    <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia</p>
                </div>
            </div>
            <div class="row">
                @foreach ($content->services as $service)
                    <div class="col-md-4 text-center d-flex ftco-animate">
                        <a href="#" class="services-1">
                            <span class="icon">
                                <i class="{{ $service->description }}"></i>
                            </span>
                            <div class="desc">
                                <h3 class="mb-5">{{ $service->title }}</h3>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </section>


    <section class="ftco-section" id="skills-section">
        <div class="container">
            <div class="row justify-content-center pb-5">
                <div class="col-md-12 heading-section text-center ftco-animate">
                    <h1 class="big big-2">Skills</h1>
                    <h2 class="mb-4">My Skills</h2>
                    <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia</p>
                </div>
            </div>
            <div class="row">
                @forelse ($skills as $skill)
                    <div class="col-md-6 animate-box">
                        <div class="progress-wrap ftco-animate">
                            <h3>{{ $skill->name }}</h3>
                            <div class="progress">
                                <div class="progress-bar color-1" role="progressbar"
                                    aria-valuenow="{{ $skill->percentage }}" aria-valuemin="0" aria-valuemax="100"
                                    style="width:{{ $skill->percentage }}%">
                                    <span>{{ $skill->percentage }}%</span>
                                </div>
                            </div>
                        </div>
                    </div>
                @empty
                    <h1>No Skills Added</h1>
                @endforelse
            </div>
        </div>
    </section>


    <section class="ftco-section ftco-project" id="projects-section">
        <div class="container">
            <div class="row justify-content-center pb-5">
                <div class="col-md-12 heading-section text-center ftco-animate">
                    <h1 class="big big-2">Projects</h1>
                    <h2 class="mb-4">Our Projects</h2>
                    <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia</p>
                </div>
            </div>
            <div class="row">
                @foreach ($content->projects as $project)
                    <div class="{{ $project->title }}">
                        <div class="project img ftco-animate d-flex justify-content-center align-items-center"
                            style="background-image: url(uploads/{{ $project->file }});">
                            <div class="overlay"></div>
                            <div class="text text-center p-4">
                                {!! $project->description !!}
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>


    <section class="ftco-section" id="blog-section">
        <div class="container">
            <div class="row justify-content-center mb-5 pb-5">
                <div class="col-md-7 heading-section text-center ftco-animate">
                    <h1 class="big big-2">Blog</h1>
                    <h2 class="mb-4">Our Blog</h2>
                    <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia</p>
                </div>
            </div>
            <div class="row d-flex">
                @foreach ($content->blogs as $blog)
                    <div class="col-md-4 d-flex ftco-animate">
                        <div class="blog-entry justify-content-end">
                            <a href="single.html" class="block-20"
                                style="background-image: url('uploads/{{ $blog->file }}');">
                            </a>
                            <div class="text mt-3 float-right d-block">
                                {!! $blog->description !!}
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <section class="ftco-section ftco-no-pt ftco-no-pb ftco-counter img" id="section-counter">
        <div class="container">
            <div class="row d-md-flex align-items-center">
                @foreach ($content->achievements as $achievement)
                    <div class="col-md d-flex justify-content-center counter-wrap ftco-animate">
                        <div class="block-18">
                            <div class="text">
                                <strong class="number" data-number="{{ $achievement->title }}">0</strong>
                                <span>{!! $achievement->description !!}</span>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <section class="ftco-section ftco-hireme img margin-top" style="background-image: url(images/bg_1.jpg)">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-7 ftco-animate text-center">
                    <h2>I'm <span>Available</span> for freelancing</h2>
                    <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
                    <p class="mb-0"><a href="#contact-section" class="btn btn-primary py-3 px-5">Hire me</a></p>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section contact-section ftco-no-pb" id="contact-section">
        <div class="container">
            <div class="row justify-content-center mb-5 pb-3">
                <div class="col-md-7 heading-section text-center ftco-animate">
                    <h1 class="big big-2">Contact</h1>
                    <h2 class="mb-4">Contact Me</h2>
                    <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia</p>
                </div>
            </div>

            <div class="row d-flex contact-info mb-5">
                @foreach ($content->contacts as $contact)
                    <div class="col-md-6 col-lg-3 d-flex ftco-animate">
                        <div class="align-self-stretch box p-4 text-center">
                            <div class="icon d-flex align-items-center justify-content-center">
                                <span class="{{ $contact->title }}"></span>
                            </div>
                            <h3 class="mb-4">{{ $contact->sub_section }}</h3>
                            @if ($contact->sub_section == 'Contact Number')
                                <p><a href="tel://{{ $contact->description }}">+91 {{ $contact->description }}</a>
                                </p>
                            @elseif($contact->sub_section == 'Email Address')
                                <p><a href="mailto:{{ $contact->description }}">{{ $contact->description }}</a></p>
                            @elseif($contact->sub_section == 'website')
                                <p><a href="{{ url('/') }}">{{ $contact->description }}</a></p>
                            @else
                                <p>{!! $contact->description !!}</p>
                            @endif

                        </div>
                    </div>
                @endforeach
            </div>

            <div class="row no-gutters block-9">
                <div class="col-md-6 order-md-last d-flex">
                    <form id="enquiry-form" class="bg-light p-4 p-md-5 contact-form">
                        <div class="form-group">
                            <input type="text" required class="form-control" name="name"
                                placeholder="Your Name">
                        </div>
                        <div class="form-group">
                            <input type="email" required class="form-control"name="email"
                                placeholder="Your Email">
                        </div>
                        <div class="form-group">
                            <input type="text" required class="form-control" name="subject"
                                placeholder="Subject">
                        </div>
                        <div class="form-group">
                            <textarea required cols="30" rows="7" class="form-control" name="message" placeholder="Message"></textarea>
                        </div>
                        <div class="form-group">
                            <button type="submit" id="submit-enquiry" class="btn btn-primary py-3 px-5">Send
                                Message</button>
                            <p id="success-message" style="color: black;display:none;">Thank you for your enquiry.You
                                will get reply soon.</p>
                        </div>
                    </form>

                </div>

                <div class="col-md-6 d-flex">
                    <div class="img"
                        style="background-image: url(uploads/{{ $content->enquiry['content']->file }});"></div>
                </div>
            </div>
        </div>
    </section>


    <footer class="ftco-footer ftco-section">
        <div class="container">
            <div class="row mb-5">
                <div class="col-md">
                    <div class="ftco-footer-widget mb-4">
                        <h2 class="ftco-heading-2">About</h2>
                        <p>{{ $content->about['about']->title }}</p>
                        <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-5">
                            @foreach ($socialMedias as $socialMedia)
                                <li class="ftco-animate"><a href="#"><span class="{{$socialMedia->icon_class}}"></span></a></li>
                            @endforeach
                        </ul>
                    </div>
                </div>
                <div class="col-md">
                    <div class="ftco-footer-widget mb-4 ml-md-4">
                        <h2 class="ftco-heading-2">Links</h2>
                        <ul class="list-unstyled">
                            <li><a href="#home-section"><span class="icon-long-arrow-right mr-2"></span>Dashboard</a>
                            </li>
                            <li><a href="#about-section"><span class="icon-long-arrow-right mr-2"></span>About</a>
                            </li>
                            <li><a href="#services-section"><span
                                        class="icon-long-arrow-right mr-2"></span>Services</a></li>
                            <li><a href="#projects-section"><span
                                        class="icon-long-arrow-right mr-2"></span>Projects</a></li>
                            <li><a href="#contact-section"><span class="icon-long-arrow-right mr-2"></span>Contact</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md">
                    <div class="ftco-footer-widget mb-4">
                        <h2 class="ftco-heading-2">Services</h2>
                        <ul class="list-unstyled">
                            @foreach ($content->services as $service)
                                @if ($loop->last)
                                    @continue
                                @endif
                                <li><a href="#"><span
                                            class="icon-long-arrow-right mr-2"></span>{{ $service->title }}</a></li>
                            @endforeach
                        </ul>
                    </div>
                </div>
                <div class="col-md">
                    <div class="ftco-footer-widget mb-4">
                        <h2 class="ftco-heading-2">Have a Questions?</h2>
                        <div class="block-23 mb-3">
                            <ul>
                                <li><span class="icon icon-map-marker"></span><span class="text">{{$content->contacts['ADDRESS']->description}}</span></li>
                                <li><a href="tel://{{ $content->contacts['Contact Number']->description }}"><span class="icon icon-phone"></span><span class="text">+91
                                            {{$content->contacts['Contact Number']->description}}</span></a></li>
                                <li><a href="mailto:{{$content->contacts['Email Address']->description}}"><span class="icon icon-envelope"></span><span
                                            class="text">{{$content->contacts['Email Address']->description}}</span></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 text-center">

                    {{-- <p>
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        Copyright &copy;
                        <script>
                            document.write(new Date().getFullYear());
                        </script> All rights reserved | This template is made with <i
                            class="icon-heart color-danger" aria-hidden="true"></i> by <a href="https://colorlib.com"
                            target="_blank">Colorlib</a>
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    </p> --}}
                </div>
            </div>
        </div>
    </footer>



    <!-- loader -->
    <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px">
            <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4"
                stroke="#eeeeee" />
            <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4"
                stroke-miterlimit="10" stroke="#F96D00" />
        </svg></div>


    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/jquery-migrate-3.0.1.min.js') }}"></script>
    <script src="{{ asset('js/popper.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/jquery.easing.1.3.js') }}"></script>
    <script src="{{ asset('js/jquery.waypoints.min.js') }}"></script>
    <script src="{{ asset('js/jquery.stellar.min.js') }}"></script>
    <script src="{{ asset('js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('js/aos.js') }}"></script>
    <script src="{{ asset('js/jquery.animateNumber.min.js') }}"></script>
    <script src="{{ asset('js/scrollax.min.js') }}"></script>
    <script src="{{ asset('js/main.js') }}"></script>
    <script>
        let loaderHtml = `Please Wait &nbsp; <i class="fa fa-spin fa-spinner" style="font-size:15px;"></i>`;
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $("#enquiry-form").on("submit", function() {
            event.preventDefault();
            let formData = $(this).serialize();
            $("#submit-enquiry").html(loaderHtml).prop({
                "disabled": true
            });
            $.ajax({
                url: "{{ route('enquiry.submit') }}",
                type: "POST",
                data: formData,
                success: function(response) {
                    $("#submit-enquiry").hide();
                    $("#success-message").show();
                },
                error: function(error) {
                    alert("something went wrong");
                    console.log(error);
                }
            })
            console.log(formData);
        });
    </script>

</body>

</html>
