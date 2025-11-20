<style>
    /* ===========================
   PREMIUM SIDEBAR - DASHBOARD
   =========================== */

    .dashpro-sidebar {
        width: 260px;
        background: #fff;
        padding: 25px;
        border-radius: 16px;
        box-shadow: 0 3px 20px rgba(0, 0, 0, 0.08);
        height: fit-content;
    }

    .dashpro-username {
        font-size: 22px;
        font-weight: 700;
        margin-bottom: 25px;
        color: #222;
    }

    .dashpro-menu {
        list-style: none;
        padding: 0;
        margin: 0;
    }

    .dashpro-item {
        margin-bottom: 12px;
    }

    .dashpro-item a,
    .dashpro-item button {
        width: 100%;
        display: flex;
        align-items: center;
        gap: 12px;
        padding: 12px 15px;
        background: #f7f7fc;
        border-radius: 12px;
        color: #333;
        font-size: 15px;
        text-decoration: none;
        transition: .3s ease;
        border: none;
    }

    .dashpro-item a i,
    .dashpro-item button i {
        font-size: 18px;
        color: #3f51b5;
    }

    .dashpro-item:hover a,
    .dashpro-item:hover button {
        background: #e8ecff;
        transform: translateX(3px);
    }

    /* Active menu item */
    .dashpro-item.active a {
        background: #3f51b5;
        color: #fff;
    }

    .dashpro-item.active a i {
        color: #fff;
    }

    /* Logout design */
    .logout-item button {
        background: #ffe9e9;
        color: #d9534f;
    }

    .logout-item button i {
        color: #d9534f;
    }

    .logout-item:hover button {
        background: #ffd6d6;
    }
    @media (max-width: 768px) {
    .dashpro-sidebar {
        width: 100%;
        padding: 15px;
        margin-bottom: 20px;
    }

    .dashpro-username {
        font-size: 18px;
        margin-bottom: 15px;
        text-align: center;
    }

    /* Make menu horizontal */
    .dashpro-menu {
        display: flex;
        flex-wrap: wrap; /* No scroll, wraps to next row */
        gap: 10px;
        justify-content: center;
    }

    .dashpro-item {
        margin-bottom: 0;
        width: 48%; /* two items per row */
    }

    .dashpro-item a,
    .dashpro-item button {
        padding: 12px;
        font-size: 14px;
        text-align: center;
        justify-content: center;
        border-radius: 10px;
    }

    .dashpro-item a i,
    .dashpro-item button i {
        font-size: 18px;
    }
}

</style>
<?php $req_url = Request::url(); ?>

<div class="dashpro-sidebar">

    <h2 class="dashpro-username">Hello, {{ user()->name }}</h2>

    <ul class="dashpro-menu">

        <li class="dashpro-item @if ($req_url === route('customer.account')) active @endif">
            <a href="{{ route('customer.account') }}">
                <i class="fas fa-home"></i> Dashboard
            </a>
        </li>

        <li class="dashpro-item @if ($req_url === route('customer.profile')) active @endif">
            <a href="{{ route('customer.profile') }}">
                <i class="fas fa-user"></i> Profile
            </a>
        </li>

        <li class="dashpro-item @if ($req_url === route('customer.orders')) active @endif">
            <a href="{{ route('customer.orders') }}">
                <i class="fas fa-shopping-bag"></i> Orders
            </a>
        </li>

        {{-- <li class="dashpro-item @if ($req_url === route('customer.reviews')) active @endif">
            <a href="{{ route('customer.reviews') }}">
                <i class="fas fa-star"></i> Reviews
            </a>
        </li> --}}

        <li class="dashpro-item @if ($req_url === route('customer.wishlist')) active @endif">
            <a href="{{ route('customer.wishlist') }}">
                <i class="fas fa-heart"></i> Wishlist
            </a>
        </li>

        <li class="dashpro-item logout-item">
            <form action="{{ route('logout') }}" method="POST">
                @csrf
                <button type="submit">
                    <i class="fas fa-sign-out-alt"></i> Logout
                </button>
            </form>
        </li>

    </ul>

</div>
