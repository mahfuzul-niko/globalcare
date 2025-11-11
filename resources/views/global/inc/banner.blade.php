 <!-- banner Carousel -->
        <div class="bannerCarousel">
            <div class="owl-carousel owl-theme rounded-lg overflow-hidden">
                <div class="item">
                    <img src="{{ asset('global/assets') }}/images/carousel-1.webp" alt="" />
                </div>
                <div class="item">
                    <img src="{{ asset('global/assets') }}/images/carousel-2.webp" alt="" />
                </div>
                <div class="item">
                    <img src="{{ asset('global/assets') }}/images/carousel-3.webp" alt="" />
                </div>
                <div class="item">
                    <img src="{{ asset('global/assets') }}/images/carousel-4.webp" alt="" />
                </div>
                <div class="item">
                    <img src="{{ asset('global/assets') }}/images/carousel-2.webp" alt="" />
                </div>
            </div>
        </div>
        <script>
            $(".owl-carousel").owlCarousel({
                loop: true,
                margin: 0,
                nav: false,
                responsive: {
                    0: {
                        items: 1,
                    },
                    600: {
                        items: 1,
                    },
                    1000: {
                        items: 1,
                    },
                },
            });
        </script>