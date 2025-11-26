 <!-- Footer -->
 @php
     $business = App\Models\Setting::find(1);
     $pages = App\Models\Page::all();
 @endphp
 <div class="footer bg-[#080909] py-10 px-2 text-white">
     <div class="grid grid-cols-1 sm:grid-cols-2 xl:grid-cols-4 gap-2 px-4">
         <div class="footer-item xl:text-center xl:px-4">
             <a href="{{ route('index') }}" class="inline-block mx-auto">
                 <img src="{{ asset('images/website/' . optional($business)->header_logo) }}" class="w-[120px]"
                     alt="" />
             </a>
             {{-- <p class="my-5 text-sm font-normal max-w-[200px] w-full">
                 Connect our specialist doctor at any time from any where
             </p>
             <img src="{{ asset('global/assets') }}/images/legitscript.png" class="w-[150px] block xl:mx-auto"
                 alt="" />
             <p class="mt-5 text-sm font-normal max-w-[200px] w-full">
                 Bangladesh's only LegitScript certified online healthcare platform
             </p> --}}
         </div>
         <div class="footer-item">
             <div>
                 <h3>Company</h3>
                 <ul>
                     {{-- <li>
                         <a href="#">Careers
                             <span class="bg-primary text-white px-2 py-1 text-xs rounded-sm">We are
                                 hiring</span></a>
                     </li> --}}
                     {{-- <li><a href="#">We are hiring</a></li> --}}
                     {{-- <li><a href="#">Privacy Policy</a></li>
                     <li><a href="#">Terms and Conditions</a></li>
                     <li><a href="#">Return and Refund Policy</a></li> --}}
                 </ul>
             </div>
             {{-- <div>
                 <h3>Our Services</h3>
                 <ul>
                     <li><a href="#">Order Medicine</a></li>
                     <li><a href="#">Healthcare Products</a></li>
                     <li><a href="#">Lab Test</a></li>
                     <li><a href="#">Beauty</a></li>
                 </ul>
             </div> --}}
         </div>
         <div class="footer-item">
             <div>
                 <h3>Useful Links</h3>
                 <ul>
                     @foreach ($pages as $page)
                         <li><a
                                 href="{{ route('other.page', ['id' => $page->id, 'title' => Str::slug($page->name)]) }}">{{ $page->name }}</a>
                         </li>
                     @endforeach
                 </ul>
             </div>
             {{-- <div>
                 <h3>Download Our App</h3>
                 <div class="flex flex-col gap-y-3">
                     <a href="#">
                         <img src="{{ asset('global/assets') }}/images/google_play.png" alt="" />
                     </a>
                     <a href="#">
                         <img src="{{ asset('global/assets') }}/images/apple_store.png" alt="" />
                     </a>
                 </div>
             </div> --}}
         </div>
         <div class="footer-item">
             <div>
                 <h3>Contact Info</h3>
                 <ul>
                     <li>
                         <a href="{{ optional($business)->google_map_link ?? '#' }}" target="_blank">
                             {{ optional($business)->address }}
                         </a>
                     </li>

                     <li>
                         <a href="tel:{{ optional($business)->phone }}">
                             Hot Line: {{ optional($business)->phone }}
                         </a>
                     </li>

                     <li>
                         <a href="tel:{{ optional($business)->whatsapp }}">
                             Whatsapp: {{ optional($business)->whatsapp }}
                         </a>
                     </li>
                 </ul>

                 <div class="social-links mt-4">
                     <a href="{{ optional($business)->facebook ?? '#' }}">
                         <i class="fa-brands fa-facebook"></i>
                     </a>

                     <a href="{{ optional($business)->twitter ?? '#' }}">
                         <i class="fa-brands fa-twitter"></i>
                     </a>

                     <a href="{{ optional($business)->instagram ?? '#' }}">
                         <i class="fa-brands fa-instagram"></i>
                     </a>

                     <a href="{{ optional($business)->linkedin ?? '#' }}">
                         <i class="fa-brands fa-linkedin"></i>
                     </a>



                 </div>
             </div>
             {{-- <div>
                 <img src="{{ asset('global/assets') }}/images/payment-method.png" alt="" />
             </div> --}}
         </div>
     </div>
     {{-- <div class="copyright flex flex-wrap gap-y-3 justify-between mt-10 pt-10 border-t border-white/10">
         <p class="text-sm">
             <strong>Trade License:</strong> TRAD/DNCC/057602/2022
             <strong>DBID:</strong> 915741315
         </p>
         <p class="text-sm">©2025 Global Care Limited. All rights reserved.</p>
     </div> --}}
 </div>
