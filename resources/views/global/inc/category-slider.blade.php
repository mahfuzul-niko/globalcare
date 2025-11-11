<!-- category slider -->
<div class="categorySlider px-2 lg:px-0 py-6 lg:py-10 xl:py-14">
            <div class="owl-carousel owl-theme">
                <div class="item">
                    <a href="#"
                        class="category-card bg-[linear-gradient(158deg,_#af93fc00_2.71%,_#b094ff_85.56%)]">
                        <div>
                            <h4>Health Care</h4>
                            <p>Care comes to you</p>
                        </div>
                        <img src="{{ asset('global/assets') }}/images/category-1.webp" alt="" />
                    </a>
                </div>
                <div class="item">
                    <a href="#"
                        class="category-card bg-[linear-gradient(158deg,_#af93fc00_2.71%,_#ff9c9c_85.56%)]">
                        <div>
                            <h4>Arogga Beauty</h4>
                            <p>Glamour deliver, always chic</p>
                        </div>
                        <img src="{{ asset('global/assets') }}/images/category-2.webp" alt="" />
                    </a>
                </div>
                <div class="item">
                    <a href="#"
                        class="category-card bg-[linear-gradient(158deg,_#af93fc00_2.71%,_#44c8d6_85.56%)]">
                        <div>
                            <h4>Lab Test</h4>
                            <p>Dialogist heath, Delivering hope</p>
                        </div>
                        <img src="{{ asset('global/assets') }}/images/category-3.webp" alt="" />
                    </a>
                </div>
                <div class="item">
                    <a href="#"
                        class="category-card bg-[linear-gradient(158deg,_#af93fc00_2.71%,_#94bfff_85.56%)]">
                        <div>
                            <h4>Pet & Vet</h4>
                            <p>Your pet' joy non stop</p>
                        </div>
                        <img src="{{ asset('global/assets') }}/images/category-4.webp" alt="" />
                    </a>
                </div>
                <div class="item">
                    <a href="#"
                        class="category-card bg-[linear-gradient(158deg,_#af93fc00_2.71%,_#5cd163_85.56%)]">
                        <div>
                            <h4>Food</h4>
                            <p>Best food for the best health</p>
                        </div>
                        <img src="{{ asset('global/assets') }}/images/category-5.webp" alt="" />
                    </a>
                </div>
            </div>
        </div>
        <script>
            $(".owl-carousel").owlCarousel({
                loop: true,
                margin: 10,
                nav: true,
                dots: false,
                responsive: {
                    0: {
                        items: 1,
                    },
                    575: {
                        items: 2,
                    },
                    768: {
                        items: 3,
                    },
                    1199: {
                        items: 4,
                    },
                    1280: {
                        items: 5,
                    },
                },
            });
        </script>