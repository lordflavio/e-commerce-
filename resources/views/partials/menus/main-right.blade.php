<ul>
    @guest
    <li><a href="{{ route('register') }}"> <i class="fa fa-sign-in" aria-hidden="true"></i> Sign Up</a></li>
    <li><a href="{{ route('login') }}"> <i class="fa fa-user" aria-hidden="true"></i> Login</a></li>
    @else
    <li>
        <a href="{{ route('users.edit') }}">My Account</a>
    </li>
    <li>
        <a href="{{ route('logout') }}"
            onclick="event.preventDefault();
                     document.getElementById('logout-form').submit();">
            Logout
        </a>
    </li>

    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
        {{ csrf_field() }}
    </form>
    @endguest
    <li><a href="{{ route('cart.index') }}"> <i class="fa fa-cart-plus" aria-hidden="true"></i> Cart
    @if (Cart::instance('default')->count() > 0)
    <span class="cart-count card-caunt-custom"><span>{{ Cart::instance('default')->count() }}</span></span>
    @endif
    </a></li>
    {{-- @foreach($items as $menu_item)
        <li>
            <a href="{{ $menu_item->link() }}">
                {{ $menu_item->title }}
                @if ($menu_item->title === 'Cart')
                    @if (Cart::instance('default')->count() > 0)
                    <span class="cart-count"><span>{{ Cart::instance('default')->count() }}</span></span>
                    @endif
                @endif
            </a>
        </li>
    @endforeach --}}
</ul>
