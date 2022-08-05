<!-- Community -->
<li class="vn vr rounded-sm n_ ww" x-data="{ open: false }">
    <a class="block gj xc ld wt wi" href="#0"
       @click.prevent="sidebarExpanded ? open = !open : sidebarExpanded = true">
        <div class="flex items-center fe">
            <div class="flex items-center">
                <svg class="ub so oi" viewBox="0 0 24 24">
                    <path class="du g_"
                          d="M18.974 8H22a2 2 0 012 2v6h-2v5a1 1 0 01-1 1h-2a1 1 0 01-1-1v-5h-2v-6a2 2 0 012-2h.974zM20 7a2 2 0 11-.001-3.999A2 2 0 0120 7zM2.974 8H6a2 2 0 012 2v6H6v5a1 1 0 01-1 1H3a1 1 0 01-1-1v-5H0v-6a2 2 0 012-2h.974zM4 7a2 2 0 11-.001-3.999A2 2 0 014 7z"></path>
                    <path class="du gq"
                          d="M12 6a3 3 0 110-6 3 3 0 010 6zm2 18h-4a1 1 0 01-1-1v-6H6v-6a3 3 0 013-3h6a3 3 0 013 3v6h-3v6a1 1 0 01-1 1z"></path>
                </svg>
                <span class="text-sm gp ml-3 ttw tnn 2xl:opacity--100 wr">Community</span>
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
                <a class="block gq hover--text-slate-200 wt wi ld" href="users-tabs.html">
                    <span class="text-sm gp ttw tnn 2xl:opacity--100 wr">Users - Tabs</span>
                </a>
            </li>
            <li class="rt ww">
                <a class="block gq hover--text-slate-200 wt wi ld" href="users-tiles.html">
                    <span class="text-sm gp ttw tnn 2xl:opacity--100 wr">Users - Tiles</span>
                </a>
            </li>
            <li class="rt ww">
                <a class="block gq hover--text-slate-200 wt wi ld" href="profile.html">
                    <span class="text-sm gp ttw tnn 2xl:opacity--100 wr">Profile</span>
                </a>
            </li>
            <li class="rt ww">
                <a class="block gq hover--text-slate-200 wt wi ld" href="feed.html">
                    <span class="text-sm gp ttw tnn 2xl:opacity--100 wr">Feed</span>
                </a>
            </li>
            <li class="rt ww">
                <a class="block gq hover--text-slate-200 wt wi ld" href="forum.html">
                    <span class="text-sm gp ttw tnn 2xl:opacity--100 wr">Forum</span>
                </a>
            </li>
            <li class="rt ww">
                <a class="block gq hover--text-slate-200 wt wi ld" href="forum-post.html">
                    <span class="text-sm gp ttw tnn 2xl:opacity--100 wr">Forum - Post</span>
                </a>
            </li>
            <li class="rt ww">
                <a class="block gq hover--text-slate-200 wt wi ld" href="meetups.html">
                    <span class="text-sm gp ttw tnn 2xl:opacity--100 wr">Meetups</span>
                </a>
            </li>
            <li class="rt ww">
                <a class="block gq hover--text-slate-200 wt wi ld" href="meetups-post.html">
                    <span class="text-sm gp ttw tnn 2xl:opacity--100 wr">Meetups - Post</span>
                </a>
            </li>
        </ul>
    </div>
</li>
