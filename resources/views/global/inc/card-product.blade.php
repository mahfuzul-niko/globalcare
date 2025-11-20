@if (!empty($product))
    @php
        // Fetch stock info
        $stock_price = DB::table('product_stocks')
            ->where('product_id', $product->id)
            ->whereNull('variant')
            ->whereNull('color')
            ->first(['id', 'price', 'qty']);

        $sale_text = 'Sale';

        // Handle discount text
        if ($product->discount_type != 'no') {
            if ($product->discount_type == 'flat') {
                $sale_text = '-' . optional($product)->discount_amount . ' TK';
            } elseif ($product->discount_type == 'percentage') {
                $sale_text = '-' . optional($product)->discount_amount . '%';
            }
        }

        // Out of stock condition
        if ($product->type == 'single' && optional($stock_price)->qty <= 0) {
            $sale_text = 'Out of Stock';
        }

        // Calculate discounted price
        $new_price = optional($stock_price)->price;
        if ($product->discount_type == 'flat') {
            $new_price = optional($stock_price)->price - optional($product)->discount_amount;
        } elseif ($product->discount_type == 'percentage') {
            $discount_amount_tk = (optional($product)->discount_amount * optional($stock_price)->price) / 100;
            $new_price = optional($stock_price)->price - $discount_amount_tk;
        }
    @endphp

    <div class="item">
        <a href="{{ route('single.product', [$product->id, Str::slug($product->title)]) }}" class="product-list-card">
            <div class="product-list-card-img relative">
                <img src="{{ asset('images/product/' . $product->thumbnail_image) }}" alt="{{ $product->title }}" />
                <div class="product-off">{{ $sale_text }}</div>
            </div>

            <div class="p-2 product-content-wrapper">
                <div class="product-content">
                    <h4>{{ $product->title }}</h4>
                </div>

                {{-- Price Section --}}
                <div class="product-btm">
                    <div class="product-price">
                        @if ($product->discount_type != 'no')
                            <p class="old__price">৳{{ number_format(optional($stock_price)->price ?? 0) }}</p>
                            <h4 class="current__price">৳{{ number_format($new_price ?? 0) }}</h4>
                        @else
                            <h4 class="current__price">৳{{ number_format(optional($stock_price)->price ?? 0) }}</h4>
                        @endif
                    </div>

                    {{-- Button Section --}}
                    <div class="product-btn">
                        @if ($product->type == 'single')
                            @if (optional($stock_price)->qty > 0)
                                <button onclick="addToCart({{ $product->id }}, 'only', 'cart', 'single')"
                                    type="button">
                                    Add
                                </button>
                            @else
                                <button disabled style="">Out of Stock</button>
                            @endif
                        @else
                            @if (optional($stock_price)->qty > 0)
                                <button
                                    onclick="addToCart({{ $product->id }}, {{ optional($stock_price)->id }}, 'details', 'cart', 'variation')"
                                    type="button">
                                    Add
                                </button>
                            @else
                                <button disabled style="background:#ccc;">Out of Stock</button>
                            @endif
                        @endif
                    </div>
                </div>
            </div>
        </a>
    </div>
@endif
