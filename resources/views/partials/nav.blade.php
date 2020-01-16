<header class="with-background">
    <div class="top-nav container">
      <div class="top-nav-left">
          <div class="logo"><img src="../img/logo.png" width="100" alt=""></div>
          @if (! (request()->is('checkout') || request()->is('guestCheckout')))
          {{ menu('main', 'partials.menus.main') }}
          @endif
      </div>
      <div class="top-nav-left">
          @if (! (request()->is('checkout') || request()->is('guestCheckout')))
          @include('partials.menus.main-right')
          @endif
      </div>
    </div> <!-- end top-nav -->
</header>
