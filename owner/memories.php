<?php require("../addons/auth.php"); ?>
<?php require("../store/memory.php"); ?>
<?php

$MEMORIES = getAllMemories($connect);
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>Admin - Memories</title>
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <link href="css/vendors/flatpickr.min.css" rel="stylesheet">
  <link href="style.css" rel="stylesheet">
  <script>
    if (localStorage.getItem('dark-mode') === 'false' || !('dark-mode' in localStorage)) {
      document.querySelector('html').classList.remove('dark');
      document.querySelector('html').style.colorScheme = 'light';
    } else {
      document.querySelector('html').classList.add('dark');
      document.querySelector('html').style.colorScheme = 'dark';
    }
  </script>
  <script defer data-domain='preview.cruip.com,rollup.cruip.com' src='https://plausible.cruip.com/js/script.js'></script>
</head>

<body class="dark:text-slate-400 c3jt4 c6w4h c6vqo c0ndv csf1w" :class="{ 'sidebar-expanded': sidebarExpanded }" x-data="{ sidebarOpen: false, sidebarExpanded: localStorage.getItem('sidebar-expanded') == 'true' }" x-init="$watch('sidebarExpanded', value => localStorage.setItem('sidebar-expanded', value))">
  <?php include("../addons/alert.php"); ?>
  <script>
    if (localStorage.getItem('sidebar-expanded') == 'true') {
      document.querySelector('body').classList.add('sidebar-expanded');
    } else {
      document.querySelector('body').classList.remove('sidebar-expanded');
    }
  </script>

  <!-- Page wrapper -->
  <div class="flex ct1ew c3z79">

    <!-- Sidebar -->
    <?php include("./includes/sidebar.php"); ?>

    <!-- Content area -->
    <div class="flex bg-white c3jt4 c8gbp cqd18 c4ijw chmlm cy6kd">

      <!-- Site header -->
      <?php include("./includes/header.php"); ?>

      <main class="ckut6">
        <div class="cewy4 clpyc cj3hv cofxq c3ff8 c9r0z c0ycj">

          <!-- Page header -->
          <div class="cyqq9 cxbdy clk9r ce97l">

            <!-- Left: Title -->
            <div class="clxmc c958j">
              <h1 class="text-slate-800 dark:text-slate-100 font-bold cy709 cjefr">Memories ✨</h1>
            </div>

            <!-- Right: Actions -->
            <div class="cnt8v cexh7 cuh4n cy6ju ck4mf c5va1">
              <div x-data="{ modalOpen: false }">
                <button class="btn cfeqx cf1ce ceqwg" @click.prevent="modalOpen = true" aria-controls="feedback-modal">
                  <svg class="c3wll c8si1 c7n6y cgmrc cm474" viewBox="0 0 16 16">
                    <path d="M15 7H9V1c0-.6-.4-1-1-1S7 .4 7 1v6H1c-.6 0-1 .4-1 1s.4 1 1 1h6v6c0 .6.4 1 1 1s1-.4 1-1V9h6c.6 0 1-.4 1-1s-.4-1-1-1z"></path>
                  </svg>
                  <span class="c9o7o">Add Memory</span>
                </button>
                <!-- Modal backdrop -->
                <div class="bg-slate-900 co20q c5o35 c1u8w citi2 cqfmf" x-show="modalOpen" x-transition:enter="c5mjj coq4n ch8aq" x-transition:enter-start="opacity-0" x-transition:enter-end="cqsra" x-transition:leave="c5mjj coq4n c4al0" x-transition:leave-start="cqsra" x-transition:leave-end="opacity-0" aria-hidden="true" x-cloak=""></div>
                <!-- Modal dialog -->
                <div id="feedback-modal" class="flex items-center justify-center ct1ew clpyc c1u8w citi2 cqfmf crf5v c9r0z" role="dialog" aria-modal="true" x-show="modalOpen" x-transition:enter="c5mjj cgpmj ch8aq" x-transition:enter-start="opacity-0 c8f6f" x-transition:enter-end="cqsra cfwq4" x-transition:leave="c5mjj cgpmj ch8aq" x-transition:leave-start="cqsra cfwq4" x-transition:leave-end="opacity-0 c8f6f" x-cloak="">
                  <form method="POST" action="./handlers/memory_handler.php" enctype="multipart/form-data" class="bg-white dark:bg-slate-800 rounded cn60w craqh cetne c0nbw c3ff8" @click.outside="modalOpen = false" @keydown.escape.window="modalOpen = false">
                    <!-- Modal header -->
                    <div class="border-slate-200 dark:border-slate-700 cz4zt cx95x c8o14">
                      <div class="flex items-center cmgwo">
                        <div class="text-slate-800 dark:text-slate-100 cqosy">Add Memory</div>
                        <button class="coyl7 cljes ciz4v czgoy" @click="modalOpen = false">
                          <div class="cbl3h">Close</div>
                          <svg class="c3wll cgmrc cm474">
                            <path d="M7.95 6.536l4.242-4.243a1 1 0 111.415 1.414L9.364 7.95l4.243 4.242a1 1 0 11-1.415 1.415L7.95 9.364l-4.243 4.243a1 1 0 01-1.414-1.415L6.536 7.95 2.293 3.707a1 1 0 011.414-1.414L7.95 6.536z"></path>
                          </svg>
                        </button>
                      </div>
                    </div>
                    <!-- Modal content -->
                    <div class="cx95x ctysv">
                      <div class="cd0mw">
                        <div>
                          <label class="block text-sm cw92y ci4cg" for="name">Images <span class="c6tg6">*</span></label>
                          <input name="images[]" class="c03gb c3ff8" style="border: none; box-shadow: none;" type="file" multiple required accept="image/*">
                        </div>
                      </div>
                    </div>
                    <!-- Modal footer -->
                    <div class="border-slate-200 dark:border-slate-700 c87xd cx95x ctysv">
                      <div class="flex flex-wrap justify-end cwkb0">
                        <button type="button" class="border-slate-200 dark:border-slate-700 c46uo cm7vt ch1ih c6w4h cjusy" @click="modalOpen = false">Cancel</button>
                        <button name="create" class="cfeqx cf1ce ceqwg cjusy">Add memory</button>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
            </div>

          </div>


          <?php if (count($MEMORIES)) : ?>
            <!-- Cards -->
            <div class="czwnc cki30 c5va1">
              <?php foreach ($MEMORIES as $memory) : ?>
                <div class="bg-white dark:bg-slate-800 rounded-sm border border-slate-200 dark:border-slate-700 cugyv c04fd c4osb cetne">
                  <div class="flex chmlm crszu">
                    <!-- Card top -->
                    <div class="ckut6 ctk06">
                      <img src="../memories/<?= $memory['image'] ?>" style="height: 200px; width: 100%; object-fit: contain;" />
                    </div>
                    <!-- Card footer -->
                    <div class="border-slate-200 dark:border-slate-700 c87xd">
                      <form action="./handlers/memory_handler.php" method="POST" class="flex ci5zp ccc5r ct5jl">
                        <button name="delete" value="<?= $memory['id'] ?>" class="block text-sm text-indigo-500 cuv1l cdi3j cob4g cw92y cy6kd cjm6w ctysv">
                          <div class="flex items-center justify-center">
                            <svg style="fill: rgb(244 63 94);" class="c3wll chmgx c6dxj" viewBox="0 0 32 32">
                              <path d="M13 15h2v6h-2zM17 15h2v6h-2z"></path>
                              <path d="M20 9c0-.6-.4-1-1-1h-6c-.6 0-1 .4-1 1v2H8v2h1v10c0 .6.4 1 1 1h12c.6 0 1-.4 1-1V13h1v-2h-4V9zm-6 1h4v1h-4v-1zm7 3v9H11v-9h10z"></path>
                            </svg>
                            <span style="color: rgb(244 63 94);">Delete Memory</span>
                          </div>
                        </button>
                      </form>
                    </div>
                  </div>
                </div>
              <?php endforeach; ?>
            </div>
          <?php else : ?>
            <div class="">
              <div class="cyd0r chc4a cwt2u">
                <div class="cob4g c9r0z">
                  <div class="inline-flex items-center justify-center rounded-full c70hj cko1f c5t2s cc3qz c3cxh c958j ciqso cixej">
                    <svg class="c7n6y ceob2 chcsl" viewBox="0 0 24 24">
                      <path class="ccazs c3wll" d="M4.418 19.612A9.092 9.092 0 0 1 2.59 17.03L.475 19.14c-.848.85-.536 2.395.743 3.673a4.413 4.413 0 0 0 1.677 1.082c.253.086.519.131.787.135.45.011.886-.16 1.208-.474L7 21.44a8.962 8.962 0 0 1-2.582-1.828Z"></path>
                      <path class="c6w4h c3wll" d="M10.034 13.997a11.011 11.011 0 0 1-2.551-3.862L4.595 13.02a2.513 2.513 0 0 0-.4 2.645 6.668 6.668 0 0 0 1.64 2.532 5.525 5.525 0 0 0 3.643 1.824 2.1 2.1 0 0 0 1.534-.587l2.883-2.882a11.156 11.156 0 0 1-3.861-2.556Z"></path>
                      <path class="czgoy c3wll" d="M21.554 2.471A8.958 8.958 0 0 0 18.167.276a3.105 3.105 0 0 0-3.295.467L9.715 5.888c-1.41 1.408-.665 4.275 1.733 6.668a8.958 8.958 0 0 0 3.387 2.196c.459.157.94.24 1.425.246a2.559 2.559 0 0 0 1.87-.715l5.156-5.146c1.415-1.406.666-4.273-1.732-6.666Zm.318 5.257c-.148.147-.594.2-1.256-.018A7.037 7.037 0 0 1 18.016 6c-1.73-1.728-2.104-3.475-1.73-3.845a.671.671 0 0 1 .465-.129c.27.008.536.057.79.146a7.07 7.07 0 0 1 2.6 1.711c1.73 1.73 2.105 3.472 1.73 3.846Z"></path>
                    </svg>
                  </div>
                  <h2 class="text-slate-800 dark:text-slate-100 font-bold cjefr c7j98">No memories found</h2>
                  <div class="crkc7">Try creating one with the button below</div>
                  <div x-data="{ modalOpen: false }">
                    <button class="btn cfeqx cf1ce ceqwg" @click.prevent="modalOpen = true" aria-controls="feedback-modal-2">
                      <svg class="c3wll c8si1 c7n6y cgmrc cm474" viewBox="0 0 16 16">
                        <path d="M15 7H9V1c0-.6-.4-1-1-1S7 .4 7 1v6H1c-.6 0-1 .4-1 1s.4 1 1 1h6v6c0 .6.4 1 1 1s1-.4 1-1V9h6c.6 0 1-.4 1-1s-.4-1-1-1z"></path>
                      </svg>
                      <span class="c9o7o">Add Memory</span>
                    </button>
                    <!-- Modal backdrop -->
                    <div class="bg-slate-900 co20q c5o35 c1u8w citi2 cqfmf" x-show="modalOpen" x-transition:enter="c5mjj coq4n ch8aq" x-transition:enter-start="opacity-0" x-transition:enter-end="cqsra" x-transition:leave="c5mjj coq4n c4al0" x-transition:leave-start="cqsra" x-transition:leave-end="opacity-0" aria-hidden="true" x-cloak=""></div>
                    <!-- Modal dialog -->
                    <div id="feedback-modal-2" class="flex items-center justify-center ct1ew clpyc c1u8w citi2 cqfmf crf5v c9r0z" role="dialog" aria-modal="true" x-show="modalOpen" x-transition:enter="c5mjj cgpmj ch8aq" x-transition:enter-start="opacity-0 c8f6f" x-transition:enter-end="cqsra cfwq4" x-transition:leave="c5mjj cgpmj ch8aq" x-transition:leave-start="cqsra cfwq4" x-transition:leave-end="opacity-0 c8f6f" x-cloak="">
                      <form method="POST" action="./handlers/memory_handler.php" enctype="multipart/form-data" class="bg-white dark:bg-slate-800 rounded cn60w craqh cetne c0nbw c3ff8" @click.outside="modalOpen = false" @keydown.escape.window="modalOpen = false">
                        <!-- Modal header -->
                        <div class="border-slate-200 dark:border-slate-700 cz4zt cx95x c8o14">
                          <div class="flex items-center cmgwo">
                            <div class="text-slate-800 dark:text-slate-100 cqosy">Add Memory</div>
                            <button class="coyl7 cljes ciz4v czgoy" @click="modalOpen = false">
                              <div class="cbl3h">Close</div>
                              <svg class="c3wll cgmrc cm474">
                                <path d="M7.95 6.536l4.242-4.243a1 1 0 111.415 1.414L9.364 7.95l4.243 4.242a1 1 0 11-1.415 1.415L7.95 9.364l-4.243 4.243a1 1 0 01-1.414-1.415L6.536 7.95 2.293 3.707a1 1 0 011.414-1.414L7.95 6.536z"></path>
                              </svg>
                            </button>
                          </div>
                        </div>
                        <!-- Modal content -->
                        <div class="cx95x ctysv">
                          <div class="cd0mw">
                            <div>
                              <label class="block text-sm cw92y ci4cg" style="text-align: left;" for="name">Images <span class="c6tg6">*</span></label>
                              <input name="images[]" class="c03gb c3ff8" style="border: none; box-shadow: none;" type="file" multiple required accept="image/*">
                            </div>
                          </div>
                        </div>
                        <!-- Modal footer -->
                        <div class="border-slate-200 dark:border-slate-700 c87xd cx95x ctysv">
                          <div class="flex flex-wrap justify-end cwkb0">
                            <button type="button" class="border-slate-200 dark:border-slate-700 c46uo cm7vt ch1ih c6w4h cjusy" @click="modalOpen = false">Cancel</button>
                            <button name="create" class="cfeqx cf1ce ceqwg cjusy">Add memory</button>
                          </div>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>

              </div>
            </div>

          <?php endif; ?>
        </div>
      </main>

    </div>

  </div>

  <script src="js/vendors/alpinejs.min.js" defer=""></script>
  <script src="js/main.js"></script>



  <script>
    console.log("%cImportant!", "color: blue; font-size: x-large");
    console.log("%cThe page you are viewing is for demo purposes only. CSS and HTML have been minified and class names have been shortened to improve the page load time. Download our templates from https://cruip.com/ 😉", "font-size: large");
  </script>
  <script>
    const pagesList = [{
      "name": "Dashboard",
      "url": "https://preview.cruip.com/mosaic/index.html",
      "active": false
    }, {
      "name": "Analytics",
      "url": "https://preview.cruip.com/mosaic/analytics.html",
      "active": false
    }, {
      "name": "Fintech",
      "url": "https://preview.cruip.com/mosaic/fintech.html",
      "active": false
    }, {
      "name": "Customers",
      "url": "https://preview.cruip.com/mosaic/customers.html",
      "active": false
    }, {
      "name": "Orders",
      "url": "https://preview.cruip.com/mosaic/orders.html",
      "active": false
    }, {
      "name": "Invoices",
      "url": "https://preview.cruip.com/mosaic/invoices.html",
      "active": false
    }, {
      "name": "Shop",
      "url": "https://preview.cruip.com/mosaic/shop.html",
      "active": false
    }, {
      "name": "Shop 2",
      "url": "https://preview.cruip.com/mosaic/shop-2.html",
      "active": false
    }, {
      "name": "Single Product",
      "url": "https://preview.cruip.com/mosaic/product.html",
      "active": false
    }, {
      "name": "Cart",
      "url": "https://preview.cruip.com/mosaic/cart.html",
      "active": false
    }, {
      "name": "Cart 2",
      "url": "https://preview.cruip.com/mosaic/cart-2.html",
      "active": false
    }, {
      "name": "Cart 3",
      "url": "https://preview.cruip.com/mosaic/cart-3.html",
      "active": false
    }, {
      "name": "Pay",
      "url": "https://preview.cruip.com/mosaic/pay.html",
      "active": false
    }, {
      "name": "Campaigns",
      "url": "https://preview.cruip.com/mosaic/campaigns.html",
      "active": false
    }, {
      "name": "Users Tabs",
      "url": "https://preview.cruip.com/mosaic/users-tabs.html",
      "active": false
    }, {
      "name": "Users Tiles",
      "url": "https://preview.cruip.com/mosaic/users-tiles.html",
      "active": false
    }, {
      "name": "Profile",
      "url": "https://preview.cruip.com/mosaic/profile.html",
      "active": false
    }, {
      "name": "Feed",
      "url": "https://preview.cruip.com/mosaic/feed.html",
      "active": false
    }, {
      "name": "Forum",
      "url": "https://preview.cruip.com/mosaic/forum.html",
      "active": false
    }, {
      "name": "Forum Post",
      "url": "https://preview.cruip.com/mosaic/forum-post.html",
      "active": false
    }, {
      "name": "Meetups",
      "url": "https://preview.cruip.com/mosaic/meetups.html",
      "active": false
    }, {
      "name": "Meetups Post",
      "url": "https://preview.cruip.com/mosaic/meetups-post.html",
      "active": false
    }, {
      "name": "Cards",
      "url": "https://preview.cruip.com/mosaic/credit-cards.html",
      "active": false
    }, {
      "name": "Transactions",
      "url": "https://preview.cruip.com/mosaic/transactions.html",
      "active": false
    }, {
      "name": "Transaction Details",
      "url": "https://preview.cruip.com/mosaic/transaction-details.html",
      "active": false
    }, {
      "name": "Jobs Listing",
      "url": "https://preview.cruip.com/mosaic/job-listing.html",
      "active": false
    }, {
      "name": "Jobs Post",
      "url": "https://preview.cruip.com/mosaic/job-post.html",
      "active": false
    }, {
      "name": "Company Profile",
      "url": "https://preview.cruip.com/mosaic/company-profile.html",
      "active": false
    }, {
      "name": "Kanban",
      "url": "https://preview.cruip.com/mosaic/tasks-kanban.html",
      "active": false
    }, {
      "name": "Tasks List",
      "url": "https://preview.cruip.com/mosaic/tasks-list.html",
      "active": false
    }, {
      "name": "Messages",
      "url": "https://preview.cruip.com/mosaic/messages.html",
      "active": false
    }, {
      "name": "Inbox",
      "url": "https://preview.cruip.com/mosaic/inbox.html",
      "active": false
    }, {
      "name": "Calendar",
      "url": "https://preview.cruip.com/mosaic/calendar.html",
      "active": false
    }, {
      "name": "Applications",
      "url": "https://preview.cruip.com/mosaic/applications.html",
      "active": false
    }, {
      "name": "My Account",
      "url": "https://preview.cruip.com/mosaic/settings.html",
      "active": false
    }, {
      "name": "My Notifications",
      "url": "https://preview.cruip.com/mosaic/notifications.html",
      "active": false
    }, {
      "name": "Connected Apps",
      "url": "https://preview.cruip.com/mosaic/connected-apps.html",
      "active": false
    }, {
      "name": "Plans",
      "url": "https://preview.cruip.com/mosaic/plans.html",
      "active": false
    }, {
      "name": "Billing & Invoices",
      "url": "https://preview.cruip.com/mosaic/billing.html",
      "active": false
    }, {
      "name": "Give Feedback",
      "url": "https://preview.cruip.com/mosaic/feedback.html",
      "active": false
    }, {
      "name": "Changelog",
      "url": "https://preview.cruip.com/mosaic/changelog.html",
      "active": false
    }, {
      "name": "Roadmap",
      "url": "https://preview.cruip.com/mosaic/roadmap.html",
      "active": false
    }, {
      "name": "FAQs",
      "url": "https://preview.cruip.com/mosaic/faqs.html",
      "active": false
    }, {
      "name": "Empty State",
      "url": "https://preview.cruip.com/mosaic/empty-state.html",
      "active": true
    }, {
      "name": "Page Not Found",
      "url": "https://preview.cruip.com/mosaic/404.html",
      "active": false
    }, {
      "name": "Knowledge Base",
      "url": "knowledge-base.html",
      "active": false
    }, {
      "name": "Sign in",
      "url": "signin.html",
      "active": false
    }, {
      "name": "Sign up",
      "url": "signup.html",
      "active": false
    }, {
      "name": "Reset password",
      "url": "reset-password.html",
      "active": false
    }, {
      "name": "Onboarding 1",
      "url": "onboarding-01.html",
      "active": false
    }, {
      "name": "Onboarding 2",
      "url": "onboarding-02.html",
      "active": false
    }, {
      "name": "Onboarding 3",
      "url": "onboarding-03.html",
      "active": false
    }, {
      "name": "Onboarding 4",
      "url": "onboarding-04.html",
      "active": false
    }, {
      "name": "Button",
      "url": "component-button.html",
      "active": false
    }, {
      "name": "Input Form",
      "url": "component-form.html",
      "active": false
    }, {
      "name": "Dropdown",
      "url": "component-dropdown.html",
      "active": false
    }, {
      "name": "Alert & Banner",
      "url": "component-alert.html",
      "active": false
    }, {
      "name": "Modal",
      "url": "component-modal.html",
      "active": false
    }, {
      "name": "Pagination",
      "url": "component-pagination.html",
      "active": false
    }, {
      "name": "Tabs",
      "url": "component-tabs.html",
      "active": false
    }, {
      "name": "Breadcrumb",
      "url": "component-breadcrumb.html",
      "active": false
    }, {
      "name": "Badge",
      "url": "component-badge.html",
      "active": false
    }, {
      "name": "Avatar",
      "url": "component-avatar.html",
      "active": false
    }, {
      "name": "Tooltip",
      "url": "component-tooltip.html",
      "active": false
    }, {
      "name": "Accordion",
      "url": "component-accordion.html",
      "active": false
    }, {
      "name": "Icons",
      "url": "component-icons.html",
      "active": false
    }];
    if (window != top) {
      window.parent.postMessage(pagesList, "https://cruip.com")
    };
  </script>
  <script defer src="https://static.cloudflareinsights.com/beacon.min.js/v84a3a4012de94ce1a686ba8c167c359c1696973893317" integrity="sha512-euoFGowhlaLqXsPWQ48qSkBSCFs3DPRyiwVu3FjR96cMPx+Fr+gpWRhIafcHwqwCqWS42RZhIudOvEI+Ckf6MA==" data-cf-beacon='{"rayId":"871d5933a851954b","r":1,"version":"2024.3.0","token":"59cc17d45d734f9ba118c63036ab1b84"}' crossorigin="anonymous"></script>
</body>

</html>