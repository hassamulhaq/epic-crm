<!-- Settings -->
<li class="vn vr rounded-sm n_ ww" x-data="{ open: false }">
    <a class="block gj xc ld wt wi" href="#0"
       @click.prevent="sidebarExpanded ? open = !open : sidebarExpanded = true">
        <div class="flex items-center fe">
            <div class="flex items-center">
                <svg class="ub so oi" viewBox="0 0 24 24">
                    <path class="du g_"
                          d="M19.714 14.7l-7.007 7.007-1.414-1.414 7.007-7.007c-.195-.4-.298-.84-.3-1.286a3 3 0 113 3 2.969 2.969 0 01-1.286-.3z"></path>
                    <path class="du gq"
                          d="M10.714 18.3c.4-.195.84-.298 1.286-.3a3 3 0 11-3 3c.002-.446.105-.885.3-1.286l-6.007-6.007 1.414-1.414 6.007 6.007z"></path>
                    <path class="du g_"
                          d="M5.7 10.714c.195.4.298.84.3 1.286a3 3 0 11-3-3c.446.002.885.105 1.286.3l7.007-7.007 1.414 1.414L5.7 10.714z"></path>
                    <path class="du gq"
                          d="M19.707 9.292a3.012 3.012 0 00-1.415 1.415L13.286 5.7c-.4.195-.84.298-1.286.3a3 3 0 113-3 2.969 2.969 0 01-.3 1.286l5.007 5.006z"></path>
                </svg>
                <span class="text-sm gp ml-3 ttw tnn 2xl:opacity--100 wr">Settings</span>
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
                <a class="block gq hover--text-slate-200 wt wi ld" href="settings.html">
                    <span class="text-sm gp ttw tnn 2xl:opacity--100 wr">My Account</span>
                </a>
            </li>
            <li class="rt ww">
                <a class="block gq hover--text-slate-200 wt wi ld" href="notifications.html">
                    <span class="text-sm gp ttw tnn 2xl:opacity--100 wr">My Notifications</span>
                </a>
            </li>
            <li class="rt ww">
                <a class="block gq hover--text-slate-200 wt wi ld" href="connected-apps.html">
                    <span class="text-sm gp ttw tnn 2xl:opacity--100 wr">Connected Apps</span>
                </a>
            </li>
            <li class="rt ww">
                <a class="block gq hover--text-slate-200 wt wi ld" href="plans.html">
                    <span class="text-sm gp ttw tnn 2xl:opacity--100 wr">Plans</span>
                </a>
            </li>
            <li class="rt ww">
                <a class="block gq hover--text-slate-200 wt wi ld" href="billing.html">
                                            <span
                                                class="text-sm gp ttw tnn 2xl:opacity--100 wr">Billing &amp; Invoices</span>
                </a>
            </li>
            <li class="rt ww">
                <a class="block gq hover--text-slate-200 wt wi ld" href="feedback.html">
                    <span class="text-sm gp ttw tnn 2xl:opacity--100 wr">Give Feedback</span>
                </a>
            </li>
        </ul>
    </div>
</li>
