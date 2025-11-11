<!-- Special Offer Slider -->
        <div class="categorySlider px-2 lg:px-0 py-6 lg:py-10 xl:py-14">
            <h1 class="text-2xl sm:text-3xl font-semibold mb-6 text-center">
                Especially For You
            </h1>
            <div class="owl-carousel owl-theme">
                <div class="item">
                    <div class="sp_offer_card bg-[linear-gradient(158deg,_#fffef9_3.3%,_#5cd163_93.34%)]">
                        <h4>Order</h4>
                        <h2>Via Whatsapp</h2>
                        <p>01812345678</p>
                        <a href="#" class="text-[#5cd163]">Call Now</a>
                        <img src="{{ asset('global/assets') }}/images/icons/whatsapp.webp" alt="" />
                    </div>
                </div>
                <div class="item">
                    <div class="sp_offer_card bg-[linear-gradient(158deg,_#fffef9_3.3%,_#10adbe_93.34%)]">
                        <h4>Up To</h4>
                        <h2>10% Off</h2>
                        <p>+ cashback</p>
                        <a href="#" class="text-[#10adbe]">Upload Prescription</a>
                        <img src="{{ asset('global/assets') }}/images/icons/prescription.webp" alt="" />
                    </div>
                </div>
                <div class="item">
                    <div class="sp_offer_card bg-[linear-gradient(158deg,_#fffef9_3.3%,_#7eb900_93.34%)]">
                        <h4>Up To</h4>
                        <h2>14% Off</h2>
                        <p>+ cashback</p>
                        <a href="#" class="text-[#7eb900]">Register Pharmacy</a>
                        <img src="{{ asset('global/assets') }}/images/icons/pharmacy.webp" alt="" />
                    </div>
                </div>
                <div class="item">
                    <div class="sp_offer_card bg-[linear-gradient(158deg,_#fffef9_3.3%,_#b094ff_93.34%)]">
                        <h4>Up To</h4>
                        <h2>60% Off</h2>
                        <p>+ cashback</p>
                        <a href="#" class="text-[#b094ff]">Healthcare</a>
                        <img src="{{ asset('global/assets') }}/images/icons/healthcare.webp" alt="" />
                    </div>
                </div>
                <div class="item">
                    <div class="sp_offer_card bg-[linear-gradient(158deg,_#fffef9_3.3%,_#fe964a_93.34%)]">
                        <h4>Up To</h4>
                        <h2>10% Off</h2>
                        <p>16216</p>
                        <a href="#" class="text-[#fe964a]">Call To Order</a>
                        <img src="{{ asset('global/assets') }}/images/icons/call.webp" alt="" />
                    </div>
                </div>
                <div class="item">
                    <div class="sp_offer_card bg-[linear-gradient(158deg,_#fffef9_3.3%,_#fd6a6a_93.34%)]">
                        <h4>Up To</h4>
                        <h2>25% Off</h2>
                        <p></p>
                        <a href="#" class="text-[#fd6a6a]">Call To Order</a>
                        <img src="{{ asset('global/assets') }}/images/icons/tube.webp" alt="" />
                    </div>
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
                        items: 6,
                    },
                },
            });
        </script>