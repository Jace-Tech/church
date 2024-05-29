<div class="ckgm0">
  <!-- Sidebar backdrop (mobile only) -->
  <div class="bg-slate-900 co20q c5o35 ch8aq cbf2h caqfm c1u8w citi2 cp9kb" :class="sidebarOpen ? 'cqsra' : 'opacity-0 pointer-events-none'" aria-hidden="true" x-cloak=""></div>

  <!-- Sidebar -->
  <div id="sidebar" class="flex 2xl:!w-64 ck6nx cyd4x c55qz cn5ln cd67z cq8pc c9ivf cz385 c3z79 csj4z ch8aq cufur cgpmj c6fr0 csmh2 c7n6y chmlm c6uf0 c76e0 cvqv9 cp9kb ck3vy c5mbg" :class="sidebarOpen ? 'translate-x-0' : '-translate-x-64'" @click.outside="sidebarOpen = false" @keydown.escape.window="sidebarOpen = false" x-cloak="lg">

    <!-- Sidebar header -->
    <div class="flex cmgwo cibhb ckgh8 chxpf">
      <!-- Close button -->
      <button class="text-slate-500 cdmpi caqfm" @click.stop="sidebarOpen = !sidebarOpen" aria-controls="sidebar" :aria-expanded="sidebarOpen">
        <span class="cbl3h">Close sidebar</span>
        <svg class="c3wll ceob2 chcsl" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
          <path d="M10.7 18.7l1.4-1.4L7.8 13H20v-2H7.8l4.3-4.3-1.4-1.4L4 12z"></path>
        </svg>
      </button>
      <!-- Logo -->
      <a class="block" href="index.html">
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
          <path d="M18.277.16C26.035 1.267 32 7.938 32 16c0 8.837-7.163 16-16 16a15.937 15.937 0 01-10.426-3.863L18.277.161z" fill="#4F46E5"></path>
          <path d="M7.404 2.503l18.339 26.19A15.93 15.93 0 0116 32C7.163 32 0 24.837 0 16 0 10.327 2.952 5.344 7.404 2.503z" fill="url(#logo-a)"></path>
          <path d="M2.223 24.14L29.777 7.86A15.926 15.926 0 0132 16c0 8.837-7.163 16-16 16-5.864 0-10.991-3.154-13.777-7.86z" fill="url(#logo-b)"></path>
        </svg>
      </a>
    </div>

    <!-- Links -->
    <div class="c6kpa">
      <!-- Pages group -->
      <div>
        <h3 class="text-slate-500 cqosy cw3n3 c0qeg c70tm">
          <span class="hidden 2xl:hidden cy96c c9pf1 cob4g co267 chcsl" aria-hidden="true">•••</span>
          <span class="2xl:block cofpc cpbr8 caqfm">Pages</span>
        </h3>
        <ul class="cabqp">
          <!-- Dashboard -->
          <li class="rounded-sm bg-slate-900 cyf82 cp8im cjm6w cfnh0">
            <a class="block cmo81 crp72 c5mjj c32al" href="./dashboard">
              <div class="flex items-center cmgwo">
                <div class="flex items-center">
                  <svg class="c7n6y ceob2 chcsl" viewBox="0 0 24 24">
                    <path class="text-indigo-500 c3wll" d="M12 0C5.383 0 0 5.383 0 12s5.383 12 12 12 12-5.383 12-12S18.617 0 12 0z"></path>
                    <path class="text-indigo-600 c3wll" d="M12 3c-4.963 0-9 4.037-9 9s4.037 9 9 9 9-4.037 9-9-4.037-9-9-9z"></path>
                    <path class="text-indigo-200 c3wll" d="M12 15c-1.654 0-3-1.346-3-3 0-.462.113-.894.3-1.285L6 6l4.714 3.301A2.973 2.973 0 0112 9c1.654 0 3 1.346 3 3s-1.346 3-3 3z"></path>
                  </svg>
                  <span class="text-sm ml-3 2xl:opacity-100 cjbqm cd0k1 cbunn ch8aq cw92y">Dashboard</span>
                </div>
              </div>
            </a>
          </li>
          <!-- Sermons -->
          <li class="rounded-sm cyf82 cp8im cjm6w cfnh0" x-data="{ open: false }">
            <a class="block c1hrc cmo81 crp72 c5mjj c32al" href="#0" @click.prevent="open = !open; sidebarExpanded = true">
              <div class="flex items-center cmgwo">
                <div class="flex items-center">
                  <svg class="c7n6y ceob2 chcsl" viewBox="0 0 24 24">
                    <path class="ccazs c3wll" d="M4.418 19.612A9.092 9.092 0 0 1 2.59 17.03L.475 19.14c-.848.85-.536 2.395.743 3.673a4.413 4.413 0 0 0 1.677 1.082c.253.086.519.131.787.135.45.011.886-.16 1.208-.474L7 21.44a8.962 8.962 0 0 1-2.582-1.828Z"></path>
                    <path class="c6w4h c3wll" d="M10.034 13.997a11.011 11.011 0 0 1-2.551-3.862L4.595 13.02a2.513 2.513 0 0 0-.4 2.645 6.668 6.668 0 0 0 1.64 2.532 5.525 5.525 0 0 0 3.643 1.824 2.1 2.1 0 0 0 1.534-.587l2.883-2.882a11.156 11.156 0 0 1-3.861-2.556Z"></path>
                    <path class="czgoy c3wll" d="M21.554 2.471A8.958 8.958 0 0 0 18.167.276a3.105 3.105 0 0 0-3.295.467L9.715 5.888c-1.41 1.408-.665 4.275 1.733 6.668a8.958 8.958 0 0 0 3.387 2.196c.459.157.94.24 1.425.246a2.559 2.559 0 0 0 1.87-.715l5.156-5.146c1.415-1.406.666-4.273-1.732-6.666Zm.318 5.257c-.148.147-.594.2-1.256-.018A7.037 7.037 0 0 1 18.016 6c-1.73-1.728-2.104-3.475-1.73-3.845a.671.671 0 0 1 .465-.129c.27.008.536.057.79.146a7.07 7.07 0 0 1 2.6 1.711c1.73 1.73 2.105 3.472 1.73 3.846Z"></path>
                  </svg>
                  <span class="text-sm ml-3 2xl:opacity-100 cjbqm cd0k1 cbunn ch8aq cw92y">Sermons</span>
                </div>
                <!-- Icon -->
                <div class="flex 2xl:opacity-100 cjbqm cd0k1 cbunn ch8aq c7n6y c9o7o">
                  <svg class="w-3 h-3 czgoy c3wll c7n6y csib2" :class="open ? 'cb4kj' : 'ce8ww'" viewBox="0 0 12 12">
                    <path d="M5.9 11.4L.5 6l1.4-1.4 4 4 4-4L11.3 6z"></path>
                  </svg>
                </div>
              </div>
            </a>
            <div class="2xl:block cofpc cpbr8 caqfm">
              <ul class="hidden c5xk8 ctmd2" :class="open ? 'cylx5' : 'hidden'">
                <li class="cyf82 ci4cg">
                  <a class="block critd czgoy crp72 c5mjj c32al" href="./create-sermon">
                    <span class="text-sm 2xl:opacity-100 cjbqm cd0k1 cbunn ch8aq cw92y">Create Sermons</span>
                  </a>
                </li>
                <li class="cyf82 ci4cg">
                  <a class="block critd czgoy crp72 c5mjj c32al" href="./sermons">
                    <span class="text-sm 2xl:opacity-100 cjbqm cd0k1 cbunn ch8aq cw92y">View Sermons</span>
                  </a>
                </li>
              </ul>
            </div>
          </li>
          <!-- Memories -->
          <li class="rounded-sm cyf82 cp8im cjm6w cfnh0" x-data="{ open: false }">
            <a class="block c1hrc cmo81 crp72 c5mjj c32al" href="./memories">
              <div class="flex items-center cmgwo">
                <div class="flex items-center">
                  <svg class="c7n6y ceob2 chcsl" viewBox="0 0 24 24">
                    <path class="c6w4h c3wll" d="M20 7a.75.75 0 01-.75-.75 1.5 1.5 0 00-1.5-1.5.75.75 0 110-1.5 1.5 1.5 0 001.5-1.5.75.75 0 111.5 0 1.5 1.5 0 001.5 1.5.75.75 0 110 1.5 1.5 1.5 0 00-1.5 1.5A.75.75 0 0120 7zM4 23a.75.75 0 01-.75-.75 1.5 1.5 0 00-1.5-1.5.75.75 0 110-1.5 1.5 1.5 0 001.5-1.5.75.75 0 111.5 0 1.5 1.5 0 001.5 1.5.75.75 0 110 1.5 1.5 1.5 0 00-1.5 1.5A.75.75 0 014 23z"></path>
                    <path class="czgoy c3wll" d="M17 23a1 1 0 01-1-1 4 4 0 00-4-4 1 1 0 010-2 4 4 0 004-4 1 1 0 012 0 4 4 0 004 4 1 1 0 010 2 4 4 0 00-4 4 1 1 0 01-1 1zM7 13a1 1 0 01-1-1 4 4 0 00-4-4 1 1 0 110-2 4 4 0 004-4 1 1 0 112 0 4 4 0 004 4 1 1 0 010 2 4 4 0 00-4 4 1 1 0 01-1 1z"></path>
                  </svg>
                  <span class="text-sm ml-3 2xl:opacity-100 cjbqm cd0k1 cbunn ch8aq cw92y">Memories</span>
                </div>
              </div>
            </a>
          </li>
          <!-- Settings -->
          <li class="rounded-sm cyf82 cp8im cjm6w cfnh0" x-data="{ open: false }">
            <a class="block c1hrc cmo81 crp72 c5mjj c32al" href="#0" @click.prevent="open = !open; sidebarExpanded = true">
              <div class="flex items-center cmgwo">
                <div class="flex items-center">
                  <svg class="c7n6y ceob2 chcsl" viewBox="0 0 24 24">
                    <path class="c6w4h c3wll" d="M19.714 14.7l-7.007 7.007-1.414-1.414 7.007-7.007c-.195-.4-.298-.84-.3-1.286a3 3 0 113 3 2.969 2.969 0 01-1.286-.3z"></path>
                    <path class="czgoy c3wll" d="M10.714 18.3c.4-.195.84-.298 1.286-.3a3 3 0 11-3 3c.002-.446.105-.885.3-1.286l-6.007-6.007 1.414-1.414 6.007 6.007z"></path>
                    <path class="c6w4h c3wll" d="M5.7 10.714c.195.4.298.84.3 1.286a3 3 0 11-3-3c.446.002.885.105 1.286.3l7.007-7.007 1.414 1.414L5.7 10.714z"></path>
                    <path class="czgoy c3wll" d="M19.707 9.292a3.012 3.012 0 00-1.415 1.415L13.286 5.7c-.4.195-.84.298-1.286.3a3 3 0 113-3 2.969 2.969 0 01-.3 1.286l5.007 5.006z"></path>
                  </svg>
                  <span class="text-sm ml-3 2xl:opacity-100 cjbqm cd0k1 cbunn ch8aq cw92y">Settings</span>
                </div>
                <!-- Icon -->
                <div class="flex 2xl:opacity-100 cjbqm cd0k1 cbunn ch8aq c7n6y c9o7o">
                  <svg class="w-3 h-3 czgoy c3wll c7n6y csib2" :class="open ? 'cb4kj' : 'ce8ww'" viewBox="0 0 12 12">
                    <path d="M5.9 11.4L.5 6l1.4-1.4 4 4 4-4L11.3 6z"></path>
                  </svg>
                </div>
              </div>
            </a>
            <div class="2xl:block cofpc cpbr8 caqfm">
              <ul class="hidden c5xk8 ctmd2" :class="open ? 'cylx5' : 'hidden'">
                <li class="cyf82 ci4cg">
                  <a class="block critd czgoy crp72 c5mjj c32al" href="settings.html">
                    <span class="text-sm 2xl:opacity-100 cjbqm cd0k1 cbunn ch8aq cw92y">My Account</span>
                  </a>
                </li>
                <li class="cyf82 ci4cg">
                  <a class="block critd czgoy crp72 c5mjj c32al" href="notifications.html">
                    <span class="text-sm 2xl:opacity-100 cjbqm cd0k1 cbunn ch8aq cw92y">My Notifications</span>
                  </a>
                </li>
                <li class="cyf82 ci4cg">
                  <a class="block critd czgoy crp72 c5mjj c32al" href="connected-apps.html">
                    <span class="text-sm 2xl:opacity-100 cjbqm cd0k1 cbunn ch8aq cw92y">Connected Apps</span>
                  </a>
                </li>
                <li class="cyf82 ci4cg">
                  <a class="block critd czgoy crp72 c5mjj c32al" href="plans.html">
                    <span class="text-sm 2xl:opacity-100 cjbqm cd0k1 cbunn ch8aq cw92y">Plans</span>
                  </a>
                </li>
                <li class="cyf82 ci4cg">
                  <a class="block critd czgoy crp72 c5mjj c32al" href="billing.html">
                    <span class="text-sm 2xl:opacity-100 cjbqm cd0k1 cbunn ch8aq cw92y">Billing &amp; Invoices</span>
                  </a>
                </li>
                <li class="cyf82 ci4cg">
                  <a class="block critd czgoy crp72 c5mjj c32al" href="feedback.html">
                    <span class="text-sm 2xl:opacity-100 cjbqm cd0k1 cbunn ch8aq cw92y">Give Feedback</span>
                  </a>
                </li>
              </ul>
            </div>
          </li>
        </ul>
      </div>
    </div>

    <!-- Expand / collapse button -->
    <div class="hidden 2xl:hidden justify-end cs8uq c9pf1 c1481 czx8a">
      <div class="cjm6w cfnh0">
        <button @click="sidebarExpanded = !sidebarExpanded">
          <span class="cbl3h">Expand / collapse sidebar</span>
          <svg class="cazit c3wll ceob2 chcsl" viewBox="0 0 24 24">
            <path class="czgoy" d="M19.586 11l-5-5L16 4.586 23.414 12 16 19.414 14.586 18l5-5H7v-2z"></path>
            <path class="c6w4h" d="M3 23H1V1h2z"></path>
          </svg>
        </button>
      </div>
    </div>

  </div>
</div>