<?php require("../addons/auth.php"); ?>
<?php require("../store/sermons.php"); ?>
<?php 

$SERMONS = getAllSermons($connect);
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>Admin - Create Sermons</title>
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
              <h1 class="text-slate-800 dark:text-slate-100 font-bold cy709 cjefr">Create Sermons ✨</h1>
            </div>

          </div>


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