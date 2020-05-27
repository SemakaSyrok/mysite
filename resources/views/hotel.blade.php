@extends('layouts.app')

@push('css')
    <link href="{{ asset('css/photoswipe.css') }}" rel="stylesheet">
    <link href="{{ asset('css/aos.css') }}" rel="stylesheet">
    <link href="{{ asset('css/default-skin/default-skin.css') }}" rel="stylesheet">

    <style>
        .block-show {
            visibility: hidden;
            opacity: 0;
            transition: .7s;
            transform: translateY(75px);
        }
        .active {
            visibility: visible;
            opacity: 1;
            transition: .7s;
            transform: translateY(0);
        }

        .img-thumbnail:hover{
            filter: brightness(105%);
            transition: .4s;
            cursor: pointer;
            border: 1px solid #78797d;
            background-color: #cecece;
        }
        .badge{
            font-size: 17px;
        }

    </style>
@endpush

@section('content')



    <div class="container pt-4" style="min-height: 100vh">

        <div class="w-100 text center mb-2">
            <h1 class="text-center mt-5 mb-3" >Hotel management system</h1>

            <h5 class="text-center w-100 ">
                There are many small hotels and hostels in the  world.
                Not all of them can afford Hotel management system, and they forced to use third-party aggregators.
                <br>
                Usually travellers find the hotel's site before booking, and with Hotel management system they can book apartments without using third-party aggregators.
                <br>
                <br>
                This system developed not only for find free apartments in your hotel. It is responsive engine  specially for small hotels.
                <br>
                You can accept booking without loosing money on third-party aggregators.
                <br>
                <br>

                You can add administrators for your hostel, and manage their permissions. Add, delete and update your apartments...
                <br>
                <br>
                <span class="badge badge-primary">Scroll to view more</span>

            </h5>
        </div>

        <div class="row">

            <div class="block-show  col-sm-11 col-md-12 mx-auto my-3 py-4 bg-light " id="b1">
                <div class="row">
                    <div class="col-sm-12 col-md-7">
                        <img src="{{ asset('/images/hotel/h1.PNG') }}"   onclick="gallery(0)"  class="img-fluid img-thumbnail  m-2" alt="">
                    </div>
                    <div class="col-sm-12 col-md-5 px-4 py-2">
                        <h5>

                            Welcome for your clients

                        </h5>
                    </div>
                </div>


            </div>



            <div class="block-show  col-sm-11 col-md-12 mx-auto my-3 py-4 bg-light   border-dark" id="b2">
                <div class="row">
                    <div class="col-sm-12 col-md-7">
                        <img src="{{ asset('/images/hotel/h2.PNG') }}"   onclick="gallery(1)"  class="img-fluid img-thumbnail m-2" alt="">
                    </div>
                    <div class="col-sm-12 col-md-5 px-4 py-2">
                        <h5> Show your apartments </h5>
                    </div>
                </div>
            </div>


            <div class="block-show  col-sm-11 col-md-12 mx-auto my-3 py-4 bg-light" id="b3">
                <div class="row">
                    <div class="col-sm-12 col-md-7">
                        <img src="{{ asset('/images/hotel/h3.PNG') }}"  onclick="gallery(2)"  class="img-fluid img-thumbnail m-2" alt="">
                    </div>
                    <div class="col-sm-12 col-md-5 px-4 py-2">
                        <h5> Tell about the comfort of your hotel </h5>
                    </div>
                </div>
            </div>

            <div class="block-show  col-sm-11 col-md-12 mx-auto my-3 py-4 bg-light" id="b4">
                <div class="row">
                    <div class="col-sm-12 col-md-7">
                        <img src="{{ asset('/images/hotel/h4.PNG') }}"  onclick="gallery(3)"  class="img-fluid img-thumbnail m-2" alt="">
                    </div>
                    <div class="col-sm-12 col-md-5 px-4 py-2">
                        <h5>
                            Remember about all your benefits
                        </h5>
                    </div>
                </div>
            </div>

            <div class="block-show  col-sm-11 col-md-12 mx-auto my-3 py-4 bg-light" id="b5">
                <div class="row">
                    <div class="col-sm-12 col-md-7">
                        <img src="{{ asset('/images/hotel/h5.PNG') }}"  onclick="gallery(4)"  class="img-fluid img-thumbnail m-2" alt="">
                    </div>
                    <div class="col-sm-12 col-md-5 px-4 py-2">
                        <h5>
                            Show all your photos
                        </h5>
                    </div>
                </div>
            </div>

            <div class="block-show  col-sm-11 col-md-12 mx-auto my-3 py-4 bg-light" id="b6">
                <div class="row">
                    <div class="col-sm-12 col-md-7">
                        <img src="{{ asset('/images/hotel/ah6.PNG') }}"  onclick="gallery(5)"  class="img-fluid img-thumbnail m-2" alt="">
                    </div>
                    <div class="col-sm-12 col-md-5 px-4 py-2">
                        <h5>
                            Simple administration interface
                        </h5>
                    </div>
                </div>
            </div>

            <div class="block-show  col-sm-11 col-md-12 mx-auto my-3 py-4 bg-light" id="b7">
                <div class="row">
                    <div class="col-sm-12 col-md-7">
                        <img src="{{ asset('/images/hotel/ah7.PNG') }}"  onclick="gallery(6)"  class="img-fluid img-thumbnail m-2" alt="">
                    </div>
                    <div class="col-sm-12 col-md-5 px-4 py-2">
                        <h5>
                            All under your controll
                        </h5>
                    </div>
                </div>
            </div>

            <div class="block-show  col-sm-11 col-md-12 mx-auto my-3 py-4 bg-light" id="b8">
                <div class="row">
                    <div class="col-sm-12 col-md-7">
                        <img src="{{ asset('/images/hotel/ah8.PNG') }}"  onclick="gallery(7)"  class="img-fluid img-thumbnail m-2" alt="">
                    </div>
                    <div class="col-sm-12 col-md-5 px-4 py-2">
                        <h5>Manage your apartment types</h5>
                    </div>
                </div>
            </div>

            <div class="block-show  col-sm-11 col-md-12 mx-auto my-3 py-4 bg-light" id="b9">
                <div class="row">
                    <div class="col-sm-12 col-md-7">
                        <img src="{{ asset('/images/hotel/ah9.PNG') }}"  onclick="gallery(8)"  class="img-fluid img-thumbnail m-2" alt="">
                    </div>
                    <div class="col-sm-12 col-md-5 px-4 py-2">
                        <h5>Responsible editor</h5>
                    </div>
                </div>
            </div>

        </div>

        <div class="w-100 my-5  text-center">
            <div class="w100 bg-light my-5 py-5">
                <p class="display-4">
                    You can get your own website for tests for free
                </p>
            </div>
        </div>


        <div class="w-100 my-5  text-center">
            <div class="w100 bg-light my-5 py-5">
                <a href="https://hotel.simon-svirkov.com" target="_blank" class="btn btn-outline-primary">
                    Test website
                </a>
                <a href="{{ route('contact', ['mess' => 2]) }}" target="_blank" class="btn btn-outline-primary">
                    Get access to website
                </a>
                <a href="{{ route('contact') }}" target="_blank" class="btn btn-outline-primary">
                    Ask a question
                </a>
            </div>
        </div>

    </div>

    <div class="pswp" tabindex="-1" role="dialog" aria-hidden="true">

        <!-- Background of PhotoSwipe.
             It's a separate element as animating opacity is faster than rgba(). -->
        <div class="pswp__bg"></div>

        <!-- Slides wrapper with overflow:hidden. -->
        <div class="pswp__scroll-wrap">

            <!-- Container that holds slides.
                PhotoSwipe keeps only 3 of them in the DOM to save memory.
                Don't modify these 3 pswp__item elements, data is added later on. -->
            <div class="pswp__container">
                <div class="pswp__item"></div>
                <div class="pswp__item"></div>
                <div class="pswp__item"></div>
            </div>

            <!-- Default (PhotoSwipeUI_Default) interface on top of sliding area. Can be changed. -->
            <div class="pswp__ui pswp__ui--hidden">

                <div class="pswp__top-bar">

                    <!--  Controls are self-explanatory. Order can be changed. -->

                    <div class="pswp__counter"></div>

                    <button class="pswp__button pswp__button--close" title="Close (Esc)"></button>

                    <button class="pswp__button pswp__button--share" title="Share"></button>

                    <button class="pswp__button pswp__button--fs" title="Toggle fullscreen"></button>

                    <button class="pswp__button pswp__button--zoom" title="Zoom in/out"></button>

                    <!-- Preloader demo https://codepen.io/dimsemenov/pen/yyBWoR -->
                    <!-- element will get class pswp__preloader--active when preloader is running -->
                    <div class="pswp__preloader">
                        <div class="pswp__preloader__icn">
                            <div class="pswp__preloader__cut">
                                <div class="pswp__preloader__donut"></div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="pswp__share-modal pswp__share-modal--hidden pswp__single-tap">
                    <div class="pswp__share-tooltip"></div>
                </div>

                <button class="pswp__button pswp__button--arrow--left" title="Previous (arrow left)">
                </button>

                <button class="pswp__button pswp__button--arrow--right" title="Next (arrow right)">
                </button>

                <div class="pswp__caption">
                    <div class="pswp__caption__center"></div>
                </div>

            </div>

        </div>

    </div>

@endsection

@push('scripts')
    <script>
        window.ELEMENTS  = [
            document.querySelector('#b1'),
            document.querySelector('#b2'),
            document.querySelector('#b3'),
            document.querySelector('#b4'),
            document.querySelector('#b5'),
            document.querySelector('#b6'),
            document.querySelector('#b7'),
            document.querySelector('#b8'),
            document.querySelector('#b9'),
        ];

        document.querySelector('#section').addEventListener('scroll', (e) => {

            for(let el of window.ELEMENTS)
                if(el.getBoundingClientRect().top < 500)
                    el.classList.add('active');

        });


    </script>
    <script src="{{ asset('/js/photoswipe.min.js') }}"></script>
    <script src="{{ asset('/js/photoswipe-ui-default.min.js') }}"></script>

    <script>

        let gallery = num => {
            var pswpElement = document.querySelectorAll('.pswp')[0];

            // build items array
            var items = [
                {
                    src: "{{ asset('/images/hotel/h1.PNG') }}",
                    w: 1080,
                    h: 567
                },
                {
                    src: "{{ asset('/images/hotel/h2.PNG') }}",
                    w: 1080,
                    h: 567
                },{
                    src: "{{ asset('/images/hotel/h3.PNG') }}",
                    w: 1080,
                    h: 567
                },{
                    src: "{{ asset('/images/hotel/h4.PNG') }}",
                    w: 1080,
                    h: 567
                },{
                    src: "{{ asset('/images/hotel/h5.PNG') }}",
                    w: 1080,
                    h: 567
                },{
                    src: "{{ asset('/images/hotel/ah6.PNG') }}",
                    w: 1080,
                    h: 567
                },{
                    src: "{{ asset('/images/hotel/ah7.PNG') }}",
                    w: 1080,
                    h: 567
                },{
                    src: "{{ asset('/images/hotel/ah8.PNG') }}",
                    w: 1080,
                    h: 567
                },{
                    src: "{{ asset('/images/hotel/ah9.PNG') }}",
                    w: 1080,
                    h: 567
                },
            ];

            var options = {
                // optionName: 'option value'
                // for example:
                index: num, // start at first slide
                showHideOpacity: false,
                shareEl: false,
            };

            // Initializes and opens PhotoSwipe
            var gallery = new PhotoSwipe( pswpElement, PhotoSwipeUI_Default, items, options);

            gallery.init();
        }

        window.onload = () => {

            document.querySelector('#b1').classList.add('active');

            for(let el of window.ELEMENTS)
                if(el.getBoundingClientRect().top < 375)
                    el.classList.add('active');
        }


    </script>
@endpush
