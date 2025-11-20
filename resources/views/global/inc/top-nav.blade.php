@php
    $categories = App\Models\Category::where('is_menu_active', 1)->where('parent_id', 0)->get();

    $business = App\Models\Setting::find(1);

@endphp

<!-- Top Nav -->
<section class="hidden lg:block top-nav shadow bg-white relative z-50">
    <div class="c-container">
        <div class="grid grid-cols-[16%_74%_10%] xl:grid-cols-[15%_75%_10%] items-center">
            <!-- Left -->
            <div>
                <h4 class="flex items-center gap-1">
                    <img src="{{ asset('global/assets') }}/images/icons/column.svg" alt="Column Icons" />
                    <span class="text-sm xl:text-base text-primary font-[500] whitespace-nowrap">Shop By Category</span>
                </h4>
            </div>
            <!-- Mid -->
            <div class="top-nav-menu-wrapper">
                <button class="nav-arrow left" style="display: none">
                    <i class="fa-solid fa-arrow-left"></i>
                </button>
                <div class="top-nav-menu">
                    <ul class="relative">
                        <li><a href="index.html" class="active">Home</a></li>

                        @foreach ($categories as $category)
                            <li class="has-mega-menu" data-menu="{{ Str::slug($category->title) }}">
                                <a
                                    href="{{ route('products', ['category_id' => $category->id]) }}">{{ $category->title }}</a>
                            </li>
                        @endforeach

                    </ul>
                </div>
                <button class="nav-arrow right">
                    <i class="fa-solid fa-arrow-right"></i>
                </button>
            </div>
            <!-- Right -->
            <div>
                <a href="tel:{{ optional($business)->phone }}"
                    class="bg-[#fd6a6a1a] p-2 border-sm text-xs xl:text-sm text-[#fd6a6a] whitespace-nowrap rounded-md hover:bg-[#fd6a6a33] transition duration-200">
                    <i class="fa-solid fa-phone-volume"></i> Call
                    <span class="xl:inline-block">for Order</span>
                </a>
            </div>
        </div>
    </div>
</section>

<!-- Top Nav Mega Menus -->
@foreach ($categories as $category)
    <div id="mega-menu-{{ Str::slug($category->title) }}" class="top-mega-menu-wrapper hidden">
        <div class="top-mega-menu-content">
            @foreach ($category->child as $child)
                <div class="top-mega-menu-item">
                    <ul>
                        <li><a href="{{ route('products', ['category_id' => $child->id]) }}">{{ $child->title }}</a>
                        </li>
                    </ul>
                </div>
            @endforeach
        </div>
    </div>
@endforeach
