<!-- Sidebar -->
<div>
    <!-- Sidebar backdrop (mobile only) -->
    <div class="m w bg-slate-900 pu tb tex ted bz wr" :class="sidebarOpen ? 'ba' : 'opacity-0 pointer-events-none'"
         aria-hidden="true" x-cloak=""></div>

    <!-- Sidebar -->
    <div id="sidebar" class="flex ak g tb x k tea tec teh tts ss lp tth l or tej ttz 2xl:!w-64 ub hs dw we wr wu"
         :class="sidebarOpen ? 'translate-x-0' : '-translate-x-64'" @click.outside="sidebarOpen = false"
         @keydown.escape.window="sidebarOpen = false" x-cloak="lg">

        <!-- Sidebar header -->
        <div class="flex fe nx vq j_">
            <!-- Close button -->
            <button class="tex text-slate-500 xl" @click.stop="sidebarOpen = !sidebarOpen" aria-controls="sidebar"
                    :aria-expanded="sidebarOpen">
                <span class="d">Close sidebar</span>
                <svg class="oi so du" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path d="M10.7 18.7l1.4-1.4L7.8 13H20v-2H7.8l4.3-4.3-1.4-1.4L4 12z"></path>
                </svg>
            </button>
            <!-- Logo -->
            <a class="block" href="index-2.html">
                <svg width="32" height="32" viewBox="0 0 32 32">
                    <defs>
                        <linearGradient x1="28.538%" y1="20.229%" x2="100%" y2="108.156%" id="logo-a">
                            <stop stop-color="#A5B4FC" stop-opacity="0" offset="0%"></stop>
                            <stop stop-color="#A5B4FC" offset="100%"></stop>
                        </linearGradient>
                        <linearGradient x1="88.638%" y1="29.267%" x2="22.42%" y2="100%" id="logo-b">
                            <stop stop-color="#38BDF8" stop-opacity="0" offset="0%"></stop>
                            <stop stop-color="#38BDF8" offset="100%"></stop>
                        </linearGradient>
                    </defs>
                    <rect fill="#6366F1" width="32" height="32" rx="16"></rect>
                    <path
                        d="M18.277.16C26.035 1.267 32 7.938 32 16c0 8.837-7.163 16-16 16a15.937 15.937 0 01-10.426-3.863L18.277.161z"
                        fill="#4F46E5"></path>
                    <path
                        d="M7.404 2.503l18.339 26.19A15.93 15.93 0 0116 32C7.163 32 0 24.837 0 16 0 10.327 2.952 5.344 7.404 2.503z"
                        fill="url(#logo-a)"></path>
                    <path
                        d="M2.223 24.14L29.777 7.86A15.926 15.926 0 0132 16c0 8.837-7.163 16-16 16-5.864 0-10.991-3.154-13.777-7.86z"
                        fill="url(#logo-b)"></path>
                </svg>
            </a>
        </div>

        <!-- Links -->
        <div class="ff">
            <!-- Pages group -->
            <div>
                <h3 class="go gv text-slate-500 gh vz">
                    <span class="hidden tey ttq 2xl:hidden gn oi" aria-hidden="true">•••</span>
                    <span class="tex ttj 2xl:block">Pages</span>
                </h3>
                <ul class="nk">
                    <!-- Dashboard -->
                    @include('layouts/_partials/sidebar/menu-items/item')
                </ul>
            </div>


            <!-- More group -->
            <div>
                <h3 class="go gv text-slate-500 gh vz">
                    <span class="hidden tey ttq 2xl:hidden gn oi" aria-hidden="true">•••</span>
                    <span class="tex ttj 2xl:block">More</span>
                </h3>
                <ul class="nk">
                    <!-- Authentication -->
                    <li class="vn vr rounded-sm n_ ww" x-data="{ open: false }">
                        <a class="block gj xc wt wi" :class="open &amp;&amp; 'hover--text-slate-200'" href="#0"
                           @click.prevent="sidebarExpanded ? open = !open : sidebarExpanded = true">
                            <div class="flex items-center fe">
                                <div class="flex items-center">
                                    <svg class="ub so oi" viewBox="0 0 24 24">
                                        <path class="du g_" d="M8.07 16H10V8H8.07a8 8 0 110 8z"></path>
                                        <path class="du gq" d="M15 12L8 6v5H0v2h8v5z"></path>
                                    </svg>
                                    <span class="text-sm gp ml-3 ttw tnn 2xl:opacity--100 wr">Authentication</span>
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
                                    <a class="block gq hover--text-slate-200 wt wi ld" href="signin.html">
                                        <span class="text-sm gp ttw tnn 2xl:opacity--100 wr">Sign In</span>
                                    </a>
                                </li>
                                <li class="rt ww">
                                    <a class="block gq hover--text-slate-200 wt wi ld" href="signup.html">
                                        <span class="text-sm gp ttw tnn 2xl:opacity--100 wr">Sign up</span>
                                    </a>
                                </li>
                                <li class="rt ww">
                                    <a class="block gq hover--text-slate-200 wt wi ld" href="reset-password.html">
                                        <span class="text-sm gp ttw tnn 2xl:opacity--100 wr">Reset Password</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                </ul>
            </div>
        </div>

        <!-- Expand / collapse button -->
        <div class="mt hidden tew 2xl:hidden justify-end rn">
            <div class="vn vr">
                <button @click="sidebarExpanded = !sidebarExpanded">
                    <span class="d">Expand / collapse sidebar</span>
                    <svg class="oi so du _o" viewBox="0 0 24 24">
                        <path class="gq"
                              d="M19.586 11l-5-5L16 4.586 23.414 12 16 19.414 14.586 18l5-5H7v-2z"></path>
                        <path class="g_" d="M3 23H1V1h2z"></path>
                    </svg>
                </button>
            </div>
        </div>

    </div>
</div>
