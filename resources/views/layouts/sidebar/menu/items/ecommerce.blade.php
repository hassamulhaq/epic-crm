<!-- E-Commerce -->
<li class="vn vr rounded-sm n_ ww" x-data="{ open: false }">
    <a class="block gj xc ld wt wi" href="#0"
       @click.prevent="sidebarExpanded ? open = !open : sidebarExpanded = true">
        <div class="flex items-center fe">
            <div class="flex items-center">
                <svg class="ub so oi" viewBox="0 0 24 24">
                    <path class="du gq"
                          d="M13 15l11-7L11.504.136a1 1 0 00-1.019.007L0 7l13 8z"></path>
                    <path class="du gz"
                          d="M13 15L0 7v9c0 .355.189.685.496.864L13 24v-9z"></path>
                    <path class="du g_"
                          d="M13 15.047V24l10.573-7.181A.999.999 0 0024 16V8l-11 7.047z"></path>
                </svg>
                <span class="text-sm gp ml-3 ttw tnn 2xl:opacity--100 wr">E-Commerce</span>
            </div>
            <!-- Icon -->
            <div class="flex ub nq ttw tnn 2xl:opacity--100 wr">
                <svg class="w-3 h-3 ub nz du gq" :class="open ? 'as' : 'ao'"
                     viewBox="0 0 12 12">
                    <path d="M5.9 11.4L.5 6l1.4-1.4 4 4 4-4L11.3 6z"></path>
                </svg>
            </div>
        </div>
    </a>
    <div class="tex ttj 2xl:block">
        <ul class="me re hidden" :class="open ? '!block' : 'hidden'">
            <li class="rt ww">
                <a class="block gq hover--text-slate-200 wt wi ld" href="customers.html">
                    <span class="text-sm gp ttw tnn 2xl:opacity--100 wr">Customers</span>
                </a>
            </li>
            <li class="rt ww">
                <a class="block gq hover--text-slate-200 wt wi ld" href="orders.html">
                    <span class="text-sm gp ttw tnn 2xl:opacity--100 wr">Orders</span>
                </a>
            </li>
            <li class="rt ww">
                <a class="block gq hover--text-slate-200 wt wi ld" href="invoices.html">
                    <span class="text-sm gp ttw tnn 2xl:opacity--100 wr">Invoices</span>
                </a>
            </li>
            <li class="rt ww">
                <a class="block gq hover--text-slate-200 wt wi ld" href="shop.html">
                    <span class="text-sm gp ttw tnn 2xl:opacity--100 wr">Shop</span>
                </a>
            </li>
            <li class="rt ww">
                <a class="block gq hover--text-slate-200 wt wi ld" href="shop-2.html">
                    <span class="text-sm gp ttw tnn 2xl:opacity--100 wr">Shop 2</span>
                </a>
            </li>
            <li class="rt ww">
                <a class="block gq hover--text-slate-200 wt wi ld" href="product.html">
                    <span class="text-sm gp ttw tnn 2xl:opacity--100 wr">Single Product</span>
                </a>
            </li>
            <li class="rt ww">
                <a class="block gq hover--text-slate-200 wt wi ld" href="cart.html">
                    <span class="text-sm gp ttw tnn 2xl:opacity--100 wr">Cart</span>
                </a>
            </li>
            <li class="rt ww">
                <a class="block gq hover--text-slate-200 wt wi ld" href="cart-2.html">
                    <span class="text-sm gp ttw tnn 2xl:opacity--100 wr">Cart 2</span>
                </a>
            </li>
            <li class="rt ww">
                <a class="block gq hover--text-slate-200 wt wi ld" href="cart-3.html">
                    <span class="text-sm gp ttw tnn 2xl:opacity--100 wr">Cart 3</span>
                </a>
            </li>
            <li class="rt ww">
                <a class="block gq hover--text-slate-200 wt wi ld" href="pay.html">
                    <span class="text-sm gp ttw tnn 2xl:opacity--100 wr">Pay</span>
                </a>
            </li>
        </ul>
    </div>
</li>
