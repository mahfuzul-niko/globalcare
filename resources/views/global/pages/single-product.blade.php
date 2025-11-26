 @php
     $stock_price = $product->single_stock;
     $sale_text = 'sale';
     $stock_qty = '';
     $stock_qty_text = 'In Stock';


     if ($product->discount_type != 'no') {
         if ($product->discount_type == 'flat') {
             $sale_text = 'Discount ' . optional($product)->discount_amount . ' TK';
         } elseif ($product->discount_type == 'percentage') {
             $sale_text = 'Discount ' . optional($product)->discount_amount . '%';
         }
     }

     if ($product->type == 'single') {
         if (optional($stock_price)->qty <= 0) {
             $sale_text = 'Out of Stock';
             $stock_qty_text = 'Out of Stock';
             
         }
         $stock_qty = optional($stock_price)->qty . ' ' . optional($product)->unit_type;
     } else {
         $variations = $product->variation_stock;
         $min_price = $variations->min('price');
         $max_price = $variations->max('price');
     }

     $reviews = App\Models\ProductsReviews::where(['product_id' => optional($product)->id])
         ->where('is_active', 1)
         ->orderBy('id', 'DESC')
         ->get(['id', 'customer_id', 'review_star', 'review_text', 'is_active', 'created_at']);
     $review_count = count($reviews);

     $variationProductImages = App\Models\ProductStocks::where('product_id', optional($product)->id)
         ->where('image', '!=', null)
         ->get(['image', 'id']);

     $main_price = $stock_price->price;
     $discount_price = null;
     $discount_percent = null;

     if ($product->discount_type != 'no') {
         if ($product->discount_type == 'flat') {
             $discount_price = $main_price - $product->discount_amount;
         } elseif ($product->discount_type == 'percentage') {
             $discount_price = $main_price - ($product->discount_amount * $main_price) / 100;
         }

         if ($discount_price > 0) {
             $discount_percent = round((($main_price - $discount_price) / $main_price) * 100);
         }
     }
 @endphp
 @extends('global.inc.master')
 @php($business_info = business_info())
 @section('title')
     Home
 @endsection
 @section('description')
     {{ optional($business_info)->meta_description }}
 @endsection
 @section('keywords')
     {{ optional($business_info)->meta_keywords }}
 @endsection
 @section('layout')
     <!-- Top Header -->
     <!-- Top Nav -->
     @include('global.inc.top-nav')
     <!-- side bar -->
     @include('global.inc.side-bar')
 @endsection
 @section('content')
     <!-- Product Details Section -->
     <div style="position: relative; flex: 1 1 0%">

         <div class="container position-relative">
             <div class="product_product_details_container__5TdDR">
                 <div class="product_product_details__Cy_EL product_details_body">
                     <div class="col-md-8 product_product_block__1fjaN" style="margin: 0px auto">
                         <div class="gallery-wrapper"
                             style="
                    display: flex;
                    gap: 10px;
                    background: white;
                    padding: 10px;
                    border-radius: 10px;
                  ">
                             <!-- THUMBNAILS -->
                             <div class="thumbSlider" style="width: 100px; overflow-y: auto; max-height: 300px">
                                 @foreach ($product->product_image as $image)
                                     <div class="thumb-item">
                                         <img src="{{ asset('images/product/' . $image->image) }}" class="thumb" />
                                     </div>
                                 @endforeach
                             </div>

                             <!-- MAIN IMAGE -->
                             <div class="mainViewer"
                                 style="
                      max-width: 580px;
                      width: 100%;
                      display: flex;
                      justify-content: center;
                      align-items: center;
                    ">
                                 <img id="mainImage" src="{{ asset('images/product/' . $product->thumbnail_image) }}"
                                     style="
                        width: 100%;
                        max-height: 300px;
                        object-fit: contain;
                      " />
                             </div>
                         </div>

                         <div class="border-l1-grey300 border-r1-grey300 border-t1-grey300 product_product_info_mobile_container__XHpZt"
                             style="
                    position: relative;
                    background-color: rgb(255, 255, 255);
                    border-radius: 10px 10px 0px 0px;
                  ">
                             <div class="product_product_info_mobile__j_mdW">
                                 @guest
                                     <div class="product_head__7BgLG">
                                         <div class="product_title__HMQaJ">
                                             <div style="backgroud: black">
                                                 ব্যবসার জন্য পাইকারি দামে পণ্য কিনতে রেজিস্টেশন করুন
                                             </div>
                                             <a href="{{ route('register') }}">
                                                 <div class="arogga-btn light medium ml-10 product_register__WVL5K"
                                                     style="height: 40px; border-radius: 10px">
                                                     <div class="inner" style="pointer-events: none">
                                                         <span class="text-wrap-nowrap">Register</span>
                                                     </div>
                                                 </div>
                                             </a>
                                         </div>
                                     </div>
                                 @endguest
                                 <div class="product_info__xR3HX">


                                    
                                     @if (!is_null($product->brand))
                                         <a class="mb-10" href="#">
                                             <div class="product_company_warp__vWamg border-b1-grey300 py-10">
                                                 <div class="d-flex items-center gap-10">
                                                     <img alt="arogga-brand" loading="lazy" width="30" height="30"
                                                         decoding="async" data-nimg="1" class="product_company_logo__dVwcJ"
                                                         src="{{ asset('images/brand/' . $product->brand->image) }}"
                                                         style="color: transparent" />
                                                     <div
                                                         class="d-flex  hover-text-primary justify-space-between gap-10 w-full">
                                                         <div class="text-primary">
                                                             {{ $product->brand->title }}
                                                         </div>
                                                     </div>
                                                 </div>
                                                 {{-- <svg stroke="currentColor" fill="currentColor" stroke-width="0"
                                                 viewBox="0 0 24 24" class="text-primary cursor-pointer mr-10"
                                                 height="24" width="24" xmlns="http://www.w3.org/2000/svg">
                                                 <path fill="none" d="M0 0h24v24H0V0z"></path>
                                                 <path d="m10 17 5-5-5-5v10z"></path>
                                             </svg> --}}
                                             </div>
                                         </a>
                                     @endif
                                 </div>
                                 <div class="border-t1-grey300 mx-20"></div>
                                 <div
                                     class="d-flex flex-column flex-md-row justify-content-between align-items-md-center px-20 product_price_container__58Ku0" style="margin: 12px 0 12px 0">

                                     <!-- LEFT SIDE (Unit + Price Section) -->
                                     <div class="d-flex flex-column gap-8 order-md-1">

                                         <!-- UNIT -->
                                         <div>

                                             <span
                                                 style="background:#f1f1f1; padding:4px 8px; border-radius:4px; display:inline-block;">
                                                 Unit : {{ $product->unit_type }}
                                             </span>
                                         </div>

                                         <!-- PRICE SECTION -->
                                         <div class="d-flex justify-space-between items-center">
                                             <strong class="d-flex items-center gap-10">

                                                 @if ($product->type == 'single')
                                                     <!-- MAIN PRICE -->
                                                     <span class="text-16 text-grey900 fw-700">
                                                         ৳
                                                         <span class="fw-700 text-20">
                                                             {{ number_format($discount_price ?? $main_price) }}
                                                         </span>
                                                     </span>

                                                     <!-- OLD PRICE -->
                                                     @if ($discount_price)
                                                         <div class="text-grey500" style="text-decoration: line-through;">
                                                             ৳ {{ number_format($main_price) }}
                                                         </div>
                                                     @endif

                                                     <!-- DISCOUNT -->
                                                     @if ($discount_percent)
                                                         <span
                                                             class="ml-16 fw-500 text-14 text-error product_discount__jXS5m">
                                                             {{ $discount_percent }}% OFF
                                                         </span>
                                                     @endif
                                                 @else
                                                     <!-- PRICE RANGE (Variant Product) -->
                                                     <span class="text-16 text-grey900 fw-700">
                                                         ৳ <span
                                                             class="fw-700 text-20">{{ number_format($min_price) }}</span>
                                                         –
                                                         ৳ <span
                                                             class="fw-700 text-20">{{ number_format($max_price) }}</span>
                                                     </span>
                                                 @endif

                                             </strong>
                                         </div>

                                         <!-- STATUS -->
                                         <span
                                             style="background:#f1f1f1; padding:4px 8px; border-radius:4px; display:inline-block;">
                                             Status:
                                             <span
                                                 style="color: {{ strtolower($stock_qty_text) == 'in stock' ? '#1a9c32' : '#e63946' }};">
                                                 {{ $stock_qty_text }}
                                             </span>
                                         </span>

                                         <!-- PRODUCT CODE -->
                                         <span
                                             style="background:#f1f1f1; padding:4px 8px; border-radius:4px; display:inline-block;">
                                             Product Code: {{ $product->code }}
                                         </span>

                                     </div>

                                     <!-- RIGHT SIDE (Button) -->
                                     <div class="d-flex justify-content-md-end items-center gap-20 my-10 mt-md-10 order-md-2"
                                         style="height: 48px">
                                         <div class="arogga-btn primary medium w-100 w-md-auto"
                                         onclick="addToCart({{ optional($product)->id }}, 'details', 'cart', 'single')"
                                                 id="add_to_cart_button{{ optional($product)->id }}" type="button"
                                             style="display: block; height: 48px">
                                             <div class="inner" style="pointer-events: none">
                                                 <span class="p-20">Add to Cart</span>
                                             </div>
                                         </div>
                                     </div>
                                 </div>

                             </div>
                             <div class="border-t1-grey300 mx-20"></div>
                         </div>
                         <div class="bg-white rounded-10 border-1-grey300 rounded-10 "
                             style="overflow: hidden; margin-top:12px;">
                             <div class="d-flex justify-space-between border-b1-grey300 p-20">
                                 <div class="text-18 text-grey900 fw-600">
                                     <span class="ml-10">Product Description</span>
                                 </div>

                             </div>
                             <div class="text-14 text-grey900 fw-400 line-height-24 mb-10">
                                 <div class="product_p_description__waOsZ">
                                     <div class="text-14 text-grey700 fw-400 p-20" style="line-height: 24px">
                                         {!! optional($product)->description !!}
                                     </div>
                                 </div>
                             </div>
                         </div>

                     </div>
                     <div class="col-md-5">
                         <div class="border-l1-grey300 border-r1-grey300 border-t1-grey300 product_product_info_container__j6HiA"
                             style="
                    position: relative;
                    background-color: rgb(255, 255, 255);
                    border-radius: 10px 10px 0px 0px;
                  ">
                             <div id="enlarged-portal" style="z-index: 1000"></div>
                             <div class="product_product_info__5eX6G">
                                 @guest
                                     <div class="product_head__7BgLG">
                                         <div class="product_title__HMQaJ">
                                             <div>
                                                 ব্যবসার জন্য পাইকারি দামে পণ্য কিনতে রেজিস্টেশন করুন
                                             </div>
                                             <a href="{{ route('register') }}">
                                                 <div class="arogga-btn light medium ml-10 product_register__WVL5K"
                                                     style="height: 40px; border-radius: 10px">
                                                     <div class="inner" style="pointer-events: none">
                                                         <span class="text-wrap-nowrap">Register</span>
                                                     </div>
                                                 </div>
                                             </a>
                                         </div>
                                     </div>
                                 @endguest
                                 <div class="product_info__xR3HX" style="width: 800px; margin-right: 20px;">
                                     {{-- <div class="d-flex gap-10 justify-space-between items-center border-b1-grey300 py-10">
                                        <div class="d-flex items-center gap-10">
                                            <svg stroke="currentColor" fill="currentColor" stroke-width="0"
                                                viewBox="0 0 24 24" class="text-portage" height="30" width="30"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path fill="none" d="M0 0h24v24H0z"></path>
                                                <path
                                                    d="m16 6 2.29 2.29-4.88 4.88-4-4L2 16.59 3.41 18l6-6 4 4 6.3-6.29L22 12V6z">
                                                </path>
                                            </svg><span class="fw-400 text-grey600">16158 People recently viewed
                                                this</span>
                                        </div>
                                        <div class="d-flex justify-space-between items-center gap-10">
                                            <div style="position: relative; cursor: pointer">
                                                <div>
                                                    <span class="tooltip-All-Bangladesh"><svg
                                                            xmlns="http://www.w3.org/2000/svg" width="32"
                                                            height="32" viewBox="0 0 32 32" fill="none">
                                                            <mask id="mask0_344_11963" maskUnits="userSpaceOnUse" x="0"
                                                                y="0" width="32" height="32"
                                                                style="mask-type: alpha">
                                                                <rect x="0.25" y="0.25" width="31.5" height="31.5"
                                                                    fill="#D9D9D9" stroke="#A0AEC0" stroke-width="0.5">
                                                                </rect>
                                                            </mask>
                                                            <g mask="url(#mask0_344_11963)">
                                                                <circle cx="16" cy="16.0012" r="11.75"
                                                                    stroke="#0E7673" stroke-width="0.5"></circle>
                                                                <path
                                                                    d="M22.112 12.8941C21.9595 12.9136 21.808 12.9383 21.6551 12.9518C21.3524 12.9783 21.2799 13.0457 21.2706 13.3492C21.2646 13.5407 21.279 13.7327 21.2734 13.9242C21.2641 14.258 21.1432 14.4193 20.8197 14.4895C20.5352 14.5509 20.3242 14.6866 20.1712 14.939C20.0095 15.2054 19.7264 15.2774 19.4396 15.322C18.9036 15.4053 18.5117 15.9147 18.5931 16.4437C18.6651 16.9142 18.7497 17.3827 18.8325 17.8513C18.8441 17.9164 18.8762 17.9778 18.9133 18.0824C19.0361 17.9485 19.1346 17.8416 19.2508 17.7151C19.3396 17.8769 19.4168 18.0238 19.4995 18.1679C19.6436 18.4194 19.7752 18.4919 19.9658 18.4315C20.234 18.3464 20.3827 18.1484 20.3274 17.8787C20.2563 17.5324 20.3307 17.26 20.6287 17.0592C20.7625 16.9686 20.7523 16.8379 20.7314 16.7008C20.6891 16.4238 20.7068 16.4293 20.9717 16.3945C21.5983 16.3122 22.0855 17.0564 21.9526 17.584C21.8945 17.8146 21.8396 18.0461 21.7838 18.2771C21.7197 18.543 21.7508 18.8019 21.8819 19.0376C22.1273 19.4778 22.1896 19.9534 22.2147 20.4461C22.2287 20.7162 22.3221 20.9821 22.3426 21.2527C22.3644 21.545 22.3681 21.8435 22.3333 22.134C22.2835 22.5463 22.3035 22.9233 22.634 23.2241C22.6447 23.2339 22.6461 23.2543 22.668 23.3143C22.5215 23.2525 22.4044 23.2102 22.2933 23.1548C22.1794 23.0977 22.0744 23.0228 21.9609 22.9652C21.7666 22.8666 21.6337 22.8894 21.4793 23.0168C21.3194 23.1488 21.2976 23.3087 21.3743 23.4853C21.4924 23.7564 21.6272 24.0204 21.7406 24.2933C21.788 24.4067 21.7992 24.535 21.827 24.6563C21.8071 24.6614 21.7871 24.667 21.7675 24.6721C21.7304 24.6019 21.6992 24.528 21.6551 24.4629C21.4831 24.2091 21.3083 23.9567 21.1316 23.7062C20.9345 23.4263 20.7291 23.152 20.5366 22.8694C20.359 22.6091 20.3372 22.3307 20.4785 22.0438C20.4915 22.0178 20.499 21.9894 20.5129 21.9639C20.716 21.5906 20.67 21.2382 20.4246 20.9026C20.2391 20.6493 20.128 20.3648 20.0783 20.0566C19.9532 19.2821 19.474 18.854 18.7348 18.6871C18.203 18.5672 17.6708 18.504 17.1409 18.7141C17.0437 18.7527 16.9242 18.742 16.815 18.7415C16.6839 18.7406 16.6091 18.7926 16.6291 18.927C16.6634 19.1552 16.7044 19.383 16.7508 19.6089C16.7987 19.8414 16.8661 20.0701 16.9061 20.3034C16.9433 20.5196 16.8633 20.7078 16.6965 20.8478C16.4626 21.0435 16.3083 21.2833 16.206 21.572C16.1642 21.6901 16.0392 21.7784 15.9518 21.8802C15.8634 21.7863 15.7463 21.7068 15.6919 21.5966C15.4655 21.1374 15.2591 20.6693 15.2958 20.1365C15.2991 20.0863 15.2879 20.0352 15.2828 19.9743C15.1364 19.9594 15.0602 20.0399 15.0327 20.1496C14.9937 20.3057 14.9644 20.4684 14.9588 20.6288C14.9481 20.9366 14.9598 21.2448 14.9565 21.5525C14.956 21.6204 14.9491 21.6989 14.9142 21.7524C14.8775 21.8091 14.8068 21.8709 14.7459 21.877C14.7013 21.8811 14.6274 21.8082 14.6028 21.7533C14.5261 21.5808 14.4661 21.4005 14.3912 21.2006C14.1611 21.4191 14.2448 21.7398 14.0849 21.9569C14.0779 21.9416 14.0714 21.9267 14.0645 21.9114C13.951 21.9392 13.8302 21.9518 13.7251 21.9983C13.4759 22.1089 13.2984 22.0327 13.2417 21.77C13.2259 21.6966 13.2096 21.6194 13.2156 21.546C13.2435 21.2104 13.1287 20.9091 13.0176 20.6019C12.9098 20.3034 12.8159 19.9966 12.7568 19.6852C12.721 19.4974 12.7694 19.2942 12.7703 19.0981C12.7717 18.868 12.7568 18.6383 12.7619 18.4082C12.7643 18.3027 12.7768 18.1869 12.8224 18.0949C13.0143 17.7077 12.8451 17.4432 12.4017 17.4543C12.3733 17.4553 12.3454 17.4543 12.2882 17.4543C12.3645 17.1471 12.1706 16.9528 12.0033 16.745C11.7202 16.3931 11.7165 16.1546 11.9791 15.7878C12.0939 15.6275 12.2171 15.4708 12.3133 15.2997C12.5862 14.8149 12.3543 14.4081 11.7997 14.3849C11.6258 14.3775 11.4506 14.3812 11.2781 14.3598C10.9025 14.3138 10.7077 14.1339 10.6757 13.756C10.6534 13.4928 10.6845 13.2237 10.7063 12.9587C10.7096 12.9192 10.7933 12.8588 10.8416 12.8569C10.9681 12.8513 11.0959 12.8783 11.2233 12.8816C11.471 12.8876 11.5989 12.7909 11.6714 12.5538C11.7188 12.3986 11.7541 12.2387 11.815 12.0895C11.8903 11.9054 11.9717 11.877 12.1595 11.9421C12.2961 11.9895 12.4277 12.0541 12.5667 12.0918C12.7154 12.1322 12.7633 12.0825 12.7424 11.9337C12.7285 11.8361 12.7108 11.739 12.6913 11.6423C12.6304 11.3475 12.569 11.2899 12.2734 11.2499C12.1869 11.2383 12.1004 11.2258 12.014 11.2202C11.6881 11.1983 11.4906 11.0156 11.3994 10.7153C11.3641 10.5991 11.306 10.5327 11.1935 10.4857C10.698 10.2793 10.6812 10.224 10.7909 9.69732C10.8593 9.37006 10.9913 9.10137 11.279 8.90892C11.4933 8.76575 11.4975 8.69695 11.4101 8.44872C11.3776 8.35575 11.3437 8.26278 11.3167 8.16841C11.2804 8.04151 11.3511 7.97178 11.4603 8.01175C11.6137 8.068 11.7783 8.1382 11.8917 8.2493C12.0642 8.4185 12.1957 8.62908 12.3477 8.81921C12.4858 8.99167 12.6299 9.15762 12.8865 9.20178C12.8865 9.04745 12.8865 8.90753 12.8865 8.74576C13.1501 8.85779 13.3467 9.00747 13.4722 9.24269C13.5433 9.37564 13.5908 9.52997 13.6893 9.63781C13.8181 9.77866 13.9789 9.89534 14.1407 9.99901C14.2518 10.0701 14.341 10.0088 14.3736 9.8814C14.3936 9.80284 14.3945 9.71591 14.4289 9.64525C14.4661 9.56809 14.5256 9.45606 14.5879 9.44769C14.6818 9.43467 14.8152 9.46907 14.8812 9.53415C15.0792 9.72986 15.1675 9.98831 15.1587 10.2635C15.1485 10.5643 15.1136 10.8655 15.076 11.1644C15.0007 11.7636 15.2006 12.076 15.7886 12.1973C16.4245 12.3289 17.0688 12.334 17.7131 12.2573C17.7926 12.248 17.8744 12.2257 17.9464 12.1913C18.2923 12.0262 18.6484 12.0197 18.997 12.1517C19.572 12.3698 20.1578 12.3349 20.7509 12.2791C21.1981 12.2368 21.6234 12.2972 21.9591 12.6394C22.0186 12.6998 22.0683 12.7705 22.1222 12.8365C22.1199 12.8546 22.1157 12.8746 22.112 12.8941Z"
                                                                    fill="#0E7673"></path>
                                                                <path
                                                                    d="M17.1668 21.0301C17.1965 20.8776 17.2193 20.7233 17.2574 20.5727C17.33 20.2873 17.3174 20.0116 17.1984 19.7401C17.1473 19.6235 17.1096 19.5012 17.0566 19.3859C16.9948 19.252 17.0636 19.1772 17.1673 19.1196C17.2895 19.0508 17.3341 19.1535 17.3783 19.2316C17.5145 19.4738 17.6563 19.7136 17.7716 19.9656C17.8115 20.053 17.8157 20.1901 17.7748 20.2747C17.6739 20.4802 17.6265 20.6852 17.6512 20.9116C17.673 21.1105 17.5972 21.2607 17.4094 21.349C17.2481 21.4248 17.1891 21.3908 17.1793 21.2077C17.1761 21.15 17.1789 21.0919 17.1789 21.0338C17.1747 21.0324 17.171 21.0315 17.1668 21.0301Z"
                                                                    fill="#0E7673"></path>
                                                                <path
                                                                    d="M17.7559 18.9885C17.9413 18.9699 18.1454 18.9267 18.3007 19.1391C18.3425 19.1963 18.4638 19.1884 18.5354 19.2321C18.6042 19.2739 18.6995 19.3413 18.7037 19.4027C18.7079 19.4641 18.6256 19.5524 18.5591 19.5914C18.4727 19.6426 18.3667 19.67 18.2653 19.6853C18.1064 19.7086 18.0046 19.6337 17.9511 19.4771C17.8962 19.3162 17.8251 19.1605 17.7559 18.9885Z"
                                                                    fill="#0E7673"></path>
                                                                <path
                                                                    d="M19.1524 19.3911C19.4518 19.531 19.5782 19.7867 19.5945 20.0986C19.5982 20.1739 19.5373 20.2827 19.4727 20.3227C19.4086 20.3622 19.2919 20.3608 19.218 20.3297C19.0562 20.2622 18.9539 20.0145 19.0023 19.843C19.0455 19.6909 19.1013 19.5427 19.1524 19.3911Z"
                                                                    fill="#0E7673"></path>
                                                                <path
                                                                    d="M18.3075 20.2166C18.4754 20.3704 18.6069 20.4829 18.7292 20.6052C18.83 20.706 18.8347 20.8269 18.7385 20.932C18.6418 21.0379 18.5409 21.1467 18.4224 21.2248C18.2764 21.321 18.1486 21.2369 18.1704 21.0621C18.2034 20.7939 18.2559 20.528 18.3075 20.2166Z"
                                                                    fill="#0E7673"></path>
                                                            </g>
                                                        </svg></span>
                                                </div>
                                            </div>
                                            <div class="dropdown_dropdown__jddyJ">
                                                <div class="dropdown_dropdown-toggle__wkMyH">
                                                    <div>
                                                        <span class="tooltip-Share"><svg
                                                                xmlns="http://www.w3.org/2000/svg" width="24"
                                                                height="24" viewBox="0 0 24 24" fill="none">
                                                                <circle cx="12" cy="12" r="11.75"
                                                                    fill="white" stroke="#FB964A" stroke-width="0.5">
                                                                </circle>
                                                                <mask id="mask0_344_11975" maskUnits="userSpaceOnUse"
                                                                    x="3" y="4" width="17" height="16"
                                                                    style="mask-type: alpha">
                                                                    <rect x="3.99805" y="4" width="16" height="16"
                                                                        fill="#D9D9D9"></rect>
                                                                </mask>
                                                                <g mask="url(#mask0_344_11975)">
                                                                    <path
                                                                        d="M15.998 18.6668C15.4425 18.6668 14.9703 18.4724 14.5814 18.0835C14.1925 17.6946 13.998 17.2224 13.998 16.6668C13.998 16.5891 14.0036 16.5085 14.0147 16.4252C14.0258 16.3418 14.0425 16.2668 14.0647 16.2002L9.36471 13.4668C9.17582 13.6335 8.96471 13.7641 8.73138 13.8585C8.49805 13.9529 8.2536 14.0002 7.99805 14.0002C7.44249 14.0002 6.97027 13.8057 6.58138 13.4168C6.19249 13.0279 5.99805 12.5557 5.99805 12.0002C5.99805 11.4446 6.19249 10.9724 6.58138 10.5835C6.97027 10.1946 7.44249 10.0002 7.99805 10.0002C8.2536 10.0002 8.49805 10.0474 8.73138 10.1418C8.96471 10.2363 9.17582 10.3668 9.36471 10.5335L14.0647 7.80016C14.0425 7.7335 14.0258 7.6585 14.0147 7.57516C14.0036 7.49183 13.998 7.41127 13.998 7.3335C13.998 6.77794 14.1925 6.30572 14.5814 5.91683C14.9703 5.52794 15.4425 5.3335 15.998 5.3335C16.5536 5.3335 17.0258 5.52794 17.4147 5.91683C17.8036 6.30572 17.998 6.77794 17.998 7.3335C17.998 7.88905 17.8036 8.36127 17.4147 8.75016C17.0258 9.13905 16.5536 9.3335 15.998 9.3335C15.7425 9.3335 15.498 9.28627 15.2647 9.19183C15.0314 9.09738 14.8203 8.96683 14.6314 8.80016L9.93138 11.5335C9.9536 11.6002 9.97027 11.6752 9.98138 11.7585C9.99249 11.8418 9.99805 11.9224 9.99805 12.0002C9.99805 12.0779 9.99249 12.1585 9.98138 12.2418C9.97027 12.3252 9.9536 12.4002 9.93138 12.4668L14.6314 15.2002C14.8203 15.0335 15.0314 14.9029 15.2647 14.8085C15.498 14.7141 15.7425 14.6668 15.998 14.6668C16.5536 14.6668 17.0258 14.8613 17.4147 15.2502C17.8036 15.6391 17.998 16.1113 17.998 16.6668C17.998 17.2224 17.8036 17.6946 17.4147 18.0835C17.0258 18.4724 16.5536 18.6668 15.998 18.6668Z"
                                                                        fill="#FB964A"></path>
                                                                </g>
                                                            </svg></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div> --}}
                                     {{-- <div class="top_blocks">
                                        <div class="container my-5">
                                            <div class="swiper swiper-initialized swiper-horizontal swiper-backface-hidden"
                                                style="overflow-y: visible; position: relative">
                                                <div class="swiper-wrapper"
                                                    style="
                                transition-duration: 0ms;
                                transition-delay: 0ms;
                                transform: translate3d(0px, 0px, 0px);
                              ">
                                                    <div class="swiper-slide swiper-slide-active"
                                                        style="width: 411px; margin-right: 10px">
                                                        <div>
                                                            <a
                                                                href="/products?source=web_flash_sale&amp;_tags=flash_sale&amp;_order=pv_allow_sales%3Adesc%2Cpv_b2c_discount_percent%3Adesc"><img
                                                                    alt="" loading="lazy" width="1000"
                                                                    height="300" decoding="async" data-nimg="1"
                                                                    class="cursor-pointer"
                                                                    src="https://cdn2.arogga.com/eyJidWNrZXQiOiJhcm9nZ2EiLCJrZXkiOiJCbG9jay1iX2Jsb2NrX3BhZ2VfYmFubmVyXC80MjBcLzQyMC1GTEFTSC1TQUxFLWtxbjNlMS5naWYiLCJlZGl0cyI6W119"
                                                                    style="
                                        color: transparent;
                                        height: 100%;
                                        width: 100%;
                                        border-radius: 10px;
                                      " /></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="swiper-button-prev swiper-button-lock swiper-button-disabled">
                                                </div>
                                                <div class="swiper-button-next swiper-button-lock swiper-button-disabled">
                                                </div>
                                            </div>
                                        </div>
                                    </div> --}}
                                     <div class="py-10">
                                         <div class="d-flex justify-space-between">
                                             <h1 class="text-capitalize text-24 fw-600">
                                                 {{ $product->title }}
                                             </h1>
                                         </div>
                                     </div>
                                     {{-- <div class="pb-10 pt-10 border-b1-grey300">
                                        <div class="d-flex items-center">
                                            <p class="text-14 fw-400 pr-4" style="color: rgb(50, 59, 73)">
                                                4.9/5
                                            </p>
                                            <div class="StarsPercent_StarsPercent__M2al2"
                                                aria-label="Rating of this product is 4.94 out of 5."
                                                style="
                              --rating: 4.94;
                              --percent: 98.80000000000001%;
                              font-size: 18px;
                            ">
                                            </div>
                                            <p class="text-14 fw-400 pl-2"
                                                style="
                              color: rgb(14, 118, 115);
                              text-decoration: underline;
                              cursor: pointer;
                            ">
                                                (36) Ratings
                                            </p>
                                        </div>
                                    </div> --}}
                                     @if (!is_null($product->brand))
                                         <a href="#" class="mb-10">
                                             <div class="product_company_warp__vWamg border-b1-grey300 py-10">
                                                 <div class="d-flex items-center gap-10">
                                                     <img alt="arogga-brand" loading="lazy" width="30"
                                                         height="30" decoding="async" data-nimg="1"
                                                         class="product_company_logo__dVwcJ"
                                                         src="{{ asset('images/brand/' . $product->brand->image) }}"
                                                         style="color: transparent" />
                                                     <div
                                                         class="d-flex items-center hover-text-primary justify-space-between gap-10 w-full">
                                                         <div class="text-primary">{{ $product->brand->title }}</div>
                                                     </div>
                                                 </div>
                                                 <svg stroke="currentColor" fill="currentColor" stroke-width="0"
                                                     viewBox="0 0 24 24" class="text-primary cursor-pointer mr-10"
                                                     height="24" width="24" xmlns="http://www.w3.org/2000/svg">
                                                     <path fill="none" d="M0 0h24v24H0V0z"></path>
                                                     <path d="m10 17 5-5-5-5v10z"></path>
                                                 </svg>
                                             </div>
                                         </a>
                                     @endif
                                 </div>
                                 <div class="border-t1-grey300 mx-20"></div>
                                 <div class="d-flex justify-space-between items-center px-20 product_price_container__58Ku0"
                                     style="margin-bottom: 12px">
                                     <div style="display:flex; flex-direction:column; row-gap:10px;margin-top: 12px">

                                         <div
                                             style="background:#f1f1f1; padding:4px 8px; border-radius:4px; display:inline-block;">
                                             Unit: <span>{{ $product->unit_type }}</span>
                                         </div>
                                         <!-- PRICE SECTION -->
                                         <div style="display:flex; justify-content:space-between; align-items:center;">

                                             @if ($product->type == 'single')
                                                 <strong style="display:flex; align-items:center; column-gap:10px;">

                                                     <!-- Main Price -->
                                                     <span style="font-size:16px; color:#1a1a1a; font-weight:700;">
                                                         ৳
                                                         <span style="font-weight:700; font-size:20px;">
                                                             {{ number_format($discount_price ?? $main_price) }}
                                                         </span>
                                                     </span>

                                                     <!-- Old Price -->
                                                     @if ($discount_price)
                                                         <div style="color:#888; text-decoration:line-through;">
                                                             ৳ {{ number_format($main_price) }}
                                                         </div>
                                                     @endif

                                                     <!-- % OFF -->
                                                     @if ($discount_percent)
                                                         <span
                                                             style="margin-left:16px; font-weight:500; font-size:14px; color:#ff3b30;">
                                                             {{ $discount_percent }}% OFF
                                                         </span>
                                                     @endif

                                                 </strong>
                                             @else
                                                 <!-- Variant Price Range -->
                                                 <strong style="display:flex; align-items:center; column-gap:10px;">
                                                     <span style="font-size:16px; color:#1a1a1a; font-weight:700;">
                                                         ৳ <span
                                                             style="font-size:20px; font-weight:700;">{{ number_format($min_price) }}</span>
                                                         –
                                                         ৳ <span
                                                             style="font-size:20px; font-weight:700;">{{ number_format($max_price) }}</span>
                                                     </span>
                                                 </strong>
                                             @endif
                                         </div>

                                         <!-- STATUS -->
                                         <span
                                             style="
        background:#f1f1f1;
        padding:4px 8px;
        border-radius:4px;
        display:inline-block;
        
    ">
                                             Status: <span
                                                 style="color: {{ strtolower($stock_qty_text) == 'in stock' ? '#1a9c32' : '#e63946' }};">{{ $stock_qty_text }}</span>

                                         </span>

                                         <!-- PRODUCT CODE -->
                                         <span
                                             style="background:#f1f1f1; padding:4px 8px; border-radius:4px; display:inline-block;">
                                             Product Code: {{ $product->code }}
                                         </span>

                                     </div>


                                     <div class="d-flex justify-flex-end items-center gap-20">
                                         <div class="my-10 mt-10 items-center" style="height: 48px">
                                             <button class="arogga-btn primary medium"
                                                 onclick="addToCart({{ optional($product)->id }}, 'details', 'cart', 'single')"
                                                 id="add_to_cart_button{{ optional($product)->id }}" type="button"
                                                 style="display: block; height: 48px">
                                                 <div class="inner" style="pointer-events: none">
                                                     <span class="p-20">Add to Cart</span>
                                                 </div>
                                             </button>
                                         </div>
                                     </div>
                                 </div>
                             </div>
                             <div class="border-t1-grey300 mx-20"></div>
                         </div>
                         <div class="offer-section border-box">
                             <div class="offer-header">
                                 <h3>✨ Additional Offers</h3>
                                 <div class="nav-buttons">
                                     <button class="nav-btn prev">
                                         <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                             fill="none" viewBox="0 0 20 20">
                                             <path d="M12.5 5L7.5 10L12.5 15" stroke="white" stroke-width="1.5"
                                                 stroke-linecap="round" stroke-linejoin="round" />
                                         </svg>
                                     </button>
                                     <button class="nav-btn next">
                                         <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                             fill="none" viewBox="0 0 20 20">
                                             <path d="M7.5 15L12.5 10L7.5 5" stroke="white" stroke-width="1.5"
                                                 stroke-linecap="round" stroke-linejoin="round" />
                                         </svg>
                                     </button>
                                 </div>
                             </div>

                             <div class="offers-container">
                                 <div class="offers-track">
                                     <div class="offer-item pink">
                                         <div class="decor-icon">💸</div>
                                         <h4>Cashback</h4>
                                         <div class="price">৳30</div>
                                         <p>For purchasing above ৳3000+</p>
                                     </div>

                                     <div class="offer-item purple">
                                         <div class="decor-icon">🎁</div>
                                         <h4>Discount</h4>
                                         <div class="price">৳20</div>
                                         <p>For purchasing above ৳2000+</p>
                                     </div>

                                     <div class="offer-item blue">
                                         <div class="decor-icon">🚚</div>
                                         <h4>Free Delivery</h4>
                                         <div class="price">৳0</div>
                                         <p>On orders above ৳1000</p>
                                     </div>
                                 </div>
                             </div>
                         </div>

                         <style>
                             .offer-section {
                                 border: 1px solid #e5e7eb;
                                 border-radius: 0 0 12px 12px;
                                 padding: 16px;
                                 background: #fff;
                                 overflow: hidden;
                                 box-shadow: 0 2px 8px rgba(0, 0, 0, 0.05);
                             }

                             .offer-header {
                                 display: flex;
                                 align-items: center;
                                 justify-content: space-between;
                                 margin-bottom: 12px;
                             }

                             .offer-header h3 {
                                 font-size: 1.25rem;
                                 color: #111827;
                                 font-weight: 600;
                                 margin: 0;
                             }

                             .nav-buttons {
                                 display: flex;
                                 gap: 8px;
                             }

                             .nav-btn {
                                 background: #6b7280;
                                 border: none;
                                 border-radius: 50%;
                                 width: 32px;
                                 height: 32px;
                                 display: flex;
                                 align-items: center;
                                 justify-content: center;
                                 cursor: pointer;
                                 transition: background 0.2s;
                             }

                             .nav-btn:hover {
                                 background: #4b5563;
                             }

                             .nav-btn:disabled {
                                 background: #d1d5db;
                                 cursor: not-allowed;
                             }

                             .offers-container {
                                 overflow: hidden;
                                 position: relative;
                             }

                             .offers-track {
                                 display: flex;
                                 transition: transform 0.45s cubic-bezier(0.25, 0.46, 0.45, 0.94);
                                 gap: 16px;
                             }

                             .offer-item {
                                 flex: 0 0 250px;
                                 background: #f9fafb;
                                 border-radius: 12px;
                                 padding: 16px;
                                 text-align: center;
                                 box-shadow: 0 3px 6px rgba(0, 0, 0, 0.05);
                                 transition: transform 0.3s, box-shadow 0.3s;
                             }

                             .offer-item:hover {
                                 transform: translateY(-5px);
                                 box-shadow: 0 6px 12px rgba(0, 0, 0, 0.1);
                             }

                             .decor-icon {
                                 font-size: 24px;
                                 margin-bottom: 8px;
                             }

                             .offer-item h4 {
                                 font-size: 1rem;
                                 margin-bottom: 6px;
                                 color: #111827;
                             }

                             .price {
                                 font-size: 1.25rem;
                                 font-weight: 600;
                                 color: #ef4444;
                                 margin-bottom: 6px;
                             }

                             .offer-item p {
                                 font-size: 0.9rem;
                                 color: #4b5563;
                             }

                             .offer-item.pink {
                                 background: linear-gradient(135deg, #fce7f3, #f9a8d4);
                             }

                             .offer-item.purple {
                                 background: linear-gradient(135deg, #ede9fe, #c4b5fd);
                             }

                             .offer-item.blue {
                                 background: linear-gradient(135deg, #e0f2fe, #93c5fd);
                             }

                             @media (max-width: 768px) {
                                 .offers-track {
                                     scroll-snap-type: x mandatory;
                                     overflow-x: auto;
                                     gap: 12px;
                                     padding-bottom: 8px;
                                 }

                                 .offer-item {
                                     flex: 0 0 80%;
                                     scroll-snap-align: center;
                                 }

                                 .nav-buttons {
                                     display: none;
                                 }

                                 /* hide arrows on mobile */
                             }
                         </style>

                         <script>
                             document.addEventListener("DOMContentLoaded", function() {
                                 const track = document.querySelector(".offers-track");
                                 const prevBtn = document.querySelector(".nav-btn.prev");
                                 const nextBtn = document.querySelector(".nav-btn.next");

                                 const items = track.querySelectorAll(".offer-item");
                                 let index = 0;
                                 const itemWidth = 266; // width + gap

                                 function updateSlide() {
                                     track.style.transform = `translateX(-${
                        index * itemWidth
                      }px)`;
                                     prevBtn.disabled = index === 0;
                                     nextBtn.disabled = index === items.length - 1;
                                 }

                                 nextBtn.addEventListener("click", () => {
                                     if (index < items.length - 1) index++;
                                     updateSlide();
                                 });

                                 prevBtn.addEventListener("click", () => {
                                     if (index > 0) index--;
                                     updateSlide();
                                 });

                                 // Auto-slide every 3s
                                 let auto = setInterval(() => {
                                     index = (index + 1) % items.length;
                                     updateSlide();
                                 }, 3000);

                                 track.addEventListener("mouseenter", () =>
                                     clearInterval(auto)
                                 );
                                 track.addEventListener("mouseleave", () => {
                                     auto = setInterval(() => {
                                         index = (index + 1) % items.length;
                                         updateSlide();
                                     }, 3000);
                                 });

                                 updateSlide();
                             });
                         </script>
                     </div>
                 </div>
             </div>
         </div>
     </div>

     @include('global.inc.footer')
 @endsection
