<?php require("../addons/auth.php"); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>ADMIN - DASHBOARD</title>
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
    <script>
        localStorage.setItem('sidebar-expanded', 'true')
    </script>
    <script defer data-domain='preview.cruip.com,rollup.cruip.com' src='https://plausible.cruip.com/js/script.js'></script>
</head>

<body class="dark:text-slate-400 c3jt4 c6w4h c6vqo c0ndv csf1w" :class="{ 'sidebar-expanded': sidebarExpanded }" x-data="{ sidebarOpen: false, sidebarExpanded: localStorage.getItem('sidebar-expanded') == 'true' }" x-init="$watch('sidebarExpanded', value => localStorage.setItem('sidebar-expanded', value))">
    <?php include("../addons/alert.php");  ?>

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
        <div class="flex c8gbp cqd18 c4ijw chmlm cy6kd">

            <!-- Site header -->
            <?php include("./includes/header.php"); ?>

            <main class="ckut6">
                <div class="cewy4 clpyc cj3hv cofxq c3ff8 c9r0z c0ycj">

                    <!-- Welcome banner -->
                    <div class="rounded-sm clgz1 ct1ew clq63 c4ijw c917q ce97l c5mbg">

                        <!-- Background illustration -->
                        <div class="pointer-events-none hidden cyz0i csmh2 cke32 cvqv9 ckyft czrz8" aria-hidden="true">
                            <svg width="319" height="198" xmlns:xlink="http://www.w3.org/1999/xlink">
                                <defs>
                                    <path id="welcome-a" d="M64 0l64 128-64-20-64 20z"></path>
                                    <path id="welcome-e" d="M40 0l40 80-40-12.5L0 80z"></path>
                                    <path id="welcome-g" d="M40 0l40 80-40-12.5L0 80z"></path>
                                    <linearGradient x1="50%" y1="0%" x2="50%" y2="100%" id="welcome-b">
                                        <stop stop-color="#A5B4FC" offset="0%"></stop>
                                        <stop stop-color="#818CF8" offset="100%"></stop>
                                    </linearGradient>
                                    <linearGradient x1="50%" y1="24.537%" x2="50%" y2="100%" id="welcome-c">
                                        <stop stop-color="#4338CA" offset="0%"></stop>
                                        <stop stop-color="#6366F1" stop-opacity="0" offset="100%"></stop>
                                    </linearGradient>
                                </defs>
                                <g fill="none" fill-rule="evenodd">
                                    <g transform="rotate(64 36.592 105.604)">
                                        <mask id="welcome-d" fill="#fff">
                                            <use xlink:href="#welcome-a"></use>
                                        </mask>
                                        <use fill="url(#welcome-b)" xlink:href="#welcome-a"></use>
                                        <path fill="url(#welcome-c)" mask="url(#welcome-d)" d="M64-24h80v152H64z"></path>
                                    </g>
                                    <g transform="rotate(-51 91.324 -105.372)">
                                        <mask id="welcome-f" fill="#fff">
                                            <use xlink:href="#welcome-e"></use>
                                        </mask>
                                        <use fill="url(#welcome-b)" xlink:href="#welcome-e"></use>
                                        <path fill="url(#welcome-c)" mask="url(#welcome-f)" d="M40.333-15.147h50v95h-50z"></path>
                                    </g>
                                    <g transform="rotate(44 61.546 392.623)">
                                        <mask id="welcome-h" fill="#fff">
                                            <use xlink:href="#welcome-g"></use>
                                        </mask>
                                        <use fill="url(#welcome-b)" xlink:href="#welcome-g"></use>
                                        <path fill="url(#welcome-c)" mask="url(#welcome-h)" d="M40.333-15.147h50v95h-50z"></path>
                                    </g>
                                </g>
                            </svg>
                        </div>

                        <!-- Content -->
                        <div class="c4ijw">
                            <h1 class="text-slate-800 dark:text-slate-100 font-bold cy709 cjefr ci4cg">Good afternoon, Acme Inc. 👋</h1>
                            <p class="c6jet">Here is what’s happening with your projects today:</p>
                        </div>

                    </div>

                    <!-- Dashboard actions -->
                    <div class="cyqq9 cxbdy clk9r ce97l">

                        <!-- Left: Avatars -->
                        <ul class="flex flex-wrap justify-center cejow c2707 clxmc c6tal ce97l">
                            <li>
                                <a class="block" href="#0">
                                    <img class="rounded-full ccqvu ce4tq" src="images/user-36-01.jpg" width="36" height="36" alt="User 01">
                                </a>
                            </li>
                            <li>
                                <a class="block" href="#0">
                                    <img class="rounded-full ccqvu ce4tq" src="images/user-36-02.jpg" width="36" height="36" alt="User 02">
                                </a>
                            </li>
                            <li>
                                <a class="block" href="#0">
                                    <img class="rounded-full ccqvu ce4tq" src="images/user-36-03.jpg" width="36" height="36" alt="User 03">
                                </a>
                            </li>
                            <li>
                                <a class="block" href="#0">
                                    <img class="rounded-full ccqvu ce4tq" src="images/user-36-04.jpg" width="36" height="36" alt="User 04">
                                </a>
                            </li>
                            <li>
                                <button class="flex justify-center items-center rounded-full bg-white dark:bg-slate-800 border border-slate-200 dark:border-slate-700 text-indigo-500 c46uo cm7vt crp72 c5mjj cl0q9 c9o7o ccqvu ce4tq">
                                    <span class="cbl3h">Add new user</span>
                                    <svg class="c3wll cgmrc cm474" viewBox="0 0 16 16">
                                        <path d="M15 7H9V1c0-.6-.4-1-1-1S7 .4 7 1v6H1c-.6 0-1 .4-1 1s.4 1 1 1h6v6c0 .6.4 1 1 1s1-.4 1-1V9h6c.6 0 1-.4 1-1s-.4-1-1-1z"></path>
                                    </svg>
                                </button>
                            </li>
                        </ul>

                        <!-- Right: Actions -->
                        <div class="cnt8v cexh7 cuh4n cy6ju ck4mf c5va1">

                            <!-- Filter button -->
                            <div class="inline-flex c4ijw" x-data="{ open: false }">
                                <button class="btn bg-white dark:bg-slate-800 border-slate-200 dark:border-slate-700 text-slate-500 dark:text-slate-400 c46uo c6xw6 cm7vt cxc4n" aria-haspopup="true" @click.prevent="open = !open" :aria-expanded="open">
                                    <span class="cbl3h">Filter</span><wbr>
                                    <svg class="c3wll cgmrc cm474" viewBox="0 0 16 16">
                                        <path d="M9 15H7a1 1 0 010-2h2a1 1 0 010 2zM11 11H5a1 1 0 010-2h6a1 1 0 010 2zM13 7H3a1 1 0 010-2h10a1 1 0 010 2zM15 3H1a1 1 0 010-2h14a1 1 0 010 2z"></path>
                                    </svg>
                                </button>
                                <div class="bg-white dark:bg-slate-800 border border-slate-200 dark:border-slate-700 rounded creyy ct1ew cfw1s ckdlb cozyg cetne csmh2 c8gb2 cad6v cbzcj c76e0 cox8h c5xk8" @click.outside="open = false" @keydown.escape.window="open = false" x-show="open" x-transition:enter="c5mjj coq4n ch8aq ccio3" x-transition:enter-start="opacity-0 c3pue" x-transition:enter-end="cqsra cfwq4" x-transition:leave="c5mjj coq4n ch8aq" x-transition:leave-start="cqsra" x-transition:leave-end="opacity-0" x-cloak="">
                                    <div class="ciz4v czgoy cqosy cw3n3 cbzcj c0qeg cjm6w c622v">Filters</div>
                                    <ul class="c958j">
                                        <li class="cjm6w cynm4">
                                            <label class="flex items-center">
                                                <input type="checkbox" class="cybz1" checked="">
                                                <span class="text-sm cw92y c9o7o">Direct VS Indirect</span>
                                            </label>
                                        </li>
                                        <li class="cjm6w cynm4">
                                            <label class="flex items-center">
                                                <input type="checkbox" class="cybz1" checked="">
                                                <span class="text-sm cw92y c9o7o">Real Time Value</span>
                                            </label>
                                        </li>
                                        <li class="cjm6w cynm4">
                                            <label class="flex items-center">
                                                <input type="checkbox" class="cybz1" checked="">
                                                <span class="text-sm cw92y c9o7o">Top Channels</span>
                                            </label>
                                        </li>
                                        <li class="cjm6w cynm4">
                                            <label class="flex items-center">
                                                <input type="checkbox" class="cybz1">
                                                <span class="text-sm cw92y c9o7o">Sales VS Refunds</span>
                                            </label>
                                        </li>
                                        <li class="cjm6w cynm4">
                                            <label class="flex items-center">
                                                <input type="checkbox" class="cybz1">
                                                <span class="text-sm cw92y c9o7o">Last Order</span>
                                            </label>
                                        </li>
                                        <li class="cjm6w cynm4">
                                            <label class="flex items-center">
                                                <input type="checkbox" class="cybz1">
                                                <span class="text-sm cw92y c9o7o">Total Spent</span>
                                            </label>
                                        </li>
                                    </ul>
                                    <div class="border-slate-200 dark:border-slate-700 cezv5 cn1je c87xd cjm6w cfnh0">
                                        <ul class="flex items-center cmgwo">
                                            <li>
                                                <button class="btn-xs bg-white dark:bg-slate-800 border-slate-200 dark:border-slate-700 text-slate-500 c46uo cn6r0 cm7vt cxc4n ch1ih">Clear</button>
                                            </li>
                                            <li>
                                                <button class="btn-xs cfeqx cf1ce ceqwg" @click="open = false" @focusout="open = false">Apply</button>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <!-- Datepicker built with flatpickr -->
                            <div class="c4ijw">
                                <input class="datepicker dark:bg-slate-800 text-slate-500 cn6r0 cxc4n ch1ih caowp cw92y c03gb ctmd2" placeholder="Select dates" data-class="flatpickr-right">
                                <div class="flex items-center pointer-events-none cozyg csmh2 c1u8w">
                                    <svg class="text-slate-500 dark:text-slate-400 ml-3 c3wll cgmrc cm474" viewBox="0 0 16 16">
                                        <path d="M15 2h-2V0h-2v2H9V0H7v2H5V0H3v2H1a1 1 0 00-1 1v12a1 1 0 001 1h14a1 1 0 001-1V3a1 1 0 00-1-1zm-1 12H2V6h12v8z"></path>
                                    </svg>
                                </div>
                            </div>

                            <!-- Add view button -->
                            <button class="btn cfeqx cf1ce ceqwg">
                                <svg class="c3wll c8si1 c7n6y cgmrc cm474" viewBox="0 0 16 16">
                                    <path d="M15 7H9V1c0-.6-.4-1-1-1S7 .4 7 1v6H1c-.6 0-1 .4-1 1s.4 1 1 1h6v6c0 .6.4 1 1 1s1-.4 1-1V9h6c.6 0 1-.4 1-1s-.4-1-1-1z"></path>
                                </svg>
                                <span class="hidden cmh5t c9o7o">Add View</span>
                            </button>

                        </div>

                    </div>

                    <!-- Cards -->
                    <div class="czwnc cki30 c5va1">

                        <!-- Line chart (Acme Plus) -->
                        <div class="flex bg-white dark:bg-slate-800 rounded-sm border border-slate-200 dark:border-slate-700 cugyv c04fd c4osb cetne chmlm">
                            <div class="cx95x cc5dk">
                                <header class="flex cmgwo cxbmt c7j98">
                                    <!-- Icon -->
                                    <img src="images/icon-01.svg" width="32" height="32" alt="Icon 01">
                                    <!-- Menu button -->
                                    <div class="inline-flex c4ijw" x-data="{ open: false }">
                                        <button class="rounded-full" :class="open ? 'c6vqo ce4zx text-slate-500 dark:czgoy': 'czgoy cljes ciz4v coyl7'" aria-haspopup="true" @click.prevent="open = !open" :aria-expanded="open">
                                            <span class="cbl3h">Menu</span>
                                            <svg class="c3wll chmgx c6dxj" viewBox="0 0 32 32">
                                                <circle cx="16" cy="16" r="2"></circle>
                                                <circle cx="10" cy="16" r="2"></circle>
                                                <circle cx="22" cy="16" r="2"></circle>
                                            </svg>
                                        </button>
                                        <div class="bg-white dark:bg-slate-800 border border-slate-200 dark:border-slate-700 rounded creyy ct1ew cetne csmh2 c8gb2 cjxbp cke32 c8407 cox8h c5xk8" @click.outside="open = false" @keydown.escape.window="open = false" x-show="open" x-transition:enter="c5mjj coq4n ch8aq ccio3" x-transition:enter-start="opacity-0 c3pue" x-transition:enter-end="cqsra cfwq4" x-transition:leave="c5mjj coq4n ch8aq" x-transition:leave-start="cqsra" x-transition:leave-end="opacity-0" x-cloak="">
                                            <ul>
                                                <li>
                                                    <a class="text-sm flex cn6r0 cnz6z ch1ih c6w4h cw92y cjm6w cynm4" href="#0" @click="open = false" @focus="open = true" @focusout="open = false">Option 1</a>
                                                </li>
                                                <li>
                                                    <a class="text-sm flex cn6r0 cnz6z ch1ih c6w4h cw92y cjm6w cynm4" href="#0" @click="open = false" @focus="open = true" @focusout="open = false">Option 2</a>
                                                </li>
                                                <li>
                                                    <a class="text-sm flex cvu65 c6tg6 cw92y cjm6w cynm4" href="#0" @click="open = false" @focus="open = true" @focusout="open = false">Remove</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </header>
                                <h2 class="text-slate-800 dark:text-slate-100 cqosy cs31h c7j98">Acme Plus</h2>
                                <div class="ciz4v czgoy cqosy cw3n3 c0qeg ci4cg">Sales</div>
                                <div class="flex cxbmt">
                                    <div class="text-3xl font-bold text-slate-800 dark:text-slate-100 mr-2">$24,780</div>
                                    <div class="text-sm rounded-full ck3g6 cqosy ceqwg c6er6">+49%</div>
                                </div>
                            </div>
                            <!-- Chart built with Chart.js 3 -->
                            <!-- Check out src/js/dashboard-charts.js for config -->
                            <div class="ctn2p ci7ed ckut6">
                                <!-- Change the height attribute to adjust the chart height -->
                                <canvas id="dashboard-card-01" width="389" height="128"></canvas>
                            </div>
                        </div>

                        <!-- Line chart (Acme Advanced) -->
                        <div class="flex bg-white dark:bg-slate-800 rounded-sm border border-slate-200 dark:border-slate-700 cugyv c04fd c4osb cetne chmlm">
                            <div class="cx95x cc5dk">
                                <header class="flex cmgwo cxbmt c7j98">
                                    <!-- Icon -->
                                    <img src="images/icon-02.svg" width="32" height="32" alt="Icon 02">
                                    <!-- Menu button -->
                                    <div class="inline-flex c4ijw" x-data="{ open: false }">
                                        <button class="rounded-full" :class="open ? 'c6vqo ce4zx text-slate-500 dark:czgoy': 'czgoy cljes ciz4v coyl7'" aria-haspopup="true" @click.prevent="open = !open" :aria-expanded="open">
                                            <span class="cbl3h">Menu</span>
                                            <svg class="c3wll chmgx c6dxj" viewBox="0 0 32 32">
                                                <circle cx="16" cy="16" r="2"></circle>
                                                <circle cx="10" cy="16" r="2"></circle>
                                                <circle cx="22" cy="16" r="2"></circle>
                                            </svg>
                                        </button>
                                        <div class="bg-white dark:bg-slate-800 border border-slate-200 dark:border-slate-700 rounded creyy ct1ew cetne csmh2 c8gb2 cjxbp cke32 c8407 cox8h c5xk8" @click.outside="open = false" @keydown.escape.window="open = false" x-show="open" x-transition:enter="c5mjj coq4n ch8aq ccio3" x-transition:enter-start="opacity-0 c3pue" x-transition:enter-end="cqsra cfwq4" x-transition:leave="c5mjj coq4n ch8aq" x-transition:leave-start="cqsra" x-transition:leave-end="opacity-0" x-cloak="">
                                            <ul>
                                                <li>
                                                    <a class="text-sm flex cn6r0 cnz6z ch1ih c6w4h cw92y cjm6w cynm4" href="#0" @click="open = false" @focus="open = true" @focusout="open = false">Option 1</a>
                                                </li>
                                                <li>
                                                    <a class="text-sm flex cn6r0 cnz6z ch1ih c6w4h cw92y cjm6w cynm4" href="#0" @click="open = false" @focus="open = true" @focusout="open = false">Option 2</a>
                                                </li>
                                                <li>
                                                    <a class="text-sm flex cvu65 c6tg6 cw92y cjm6w cynm4" href="#0" @click="open = false" @focus="open = true" @focusout="open = false">Remove</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </header>
                                <h2 class="text-slate-800 dark:text-slate-100 cqosy cs31h c7j98">Acme Advanced</h2>
                                <div class="ciz4v czgoy cqosy cw3n3 c0qeg ci4cg">Sales</div>
                                <div class="flex cxbmt">
                                    <div class="text-3xl font-bold text-slate-800 dark:text-slate-100 mr-2">$17,489</div>
                                    <div class="text-sm rounded-full cqosy ctnuc ceqwg c6er6">-14%</div>
                                </div>
                            </div>
                            <!-- Chart built with Chart.js 3 -->
                            <!-- Check out src/js/dashboard-charts.js for config -->
                            <div class="ctn2p ci7ed ckut6">
                                <!-- Change the height attribute to adjust the chart height -->
                                <canvas id="dashboard-card-02" width="389" height="128"></canvas>
                            </div>
                        </div>

                        <!-- Line chart (Acme Professional) -->
                        <div class="flex bg-white dark:bg-slate-800 rounded-sm border border-slate-200 dark:border-slate-700 cugyv c04fd c4osb cetne chmlm">
                            <div class="cx95x cc5dk">
                                <header class="flex cmgwo cxbmt c7j98">
                                    <!-- Icon -->
                                    <img src="images/icon-03.svg" width="32" height="32" alt="Icon 03">
                                    <!-- Menu button -->
                                    <div class="inline-flex c4ijw" x-data="{ open: false }">
                                        <button class="rounded-full" :class="open ? 'c6vqo ce4zx text-slate-500 dark:czgoy': 'czgoy cljes ciz4v coyl7'" aria-haspopup="true" @click.prevent="open = !open" :aria-expanded="open">
                                            <span class="cbl3h">Menu</span>
                                            <svg class="c3wll chmgx c6dxj" viewBox="0 0 32 32">
                                                <circle cx="16" cy="16" r="2"></circle>
                                                <circle cx="10" cy="16" r="2"></circle>
                                                <circle cx="22" cy="16" r="2"></circle>
                                            </svg>
                                        </button>
                                        <div class="bg-white dark:bg-slate-800 border border-slate-200 dark:border-slate-700 rounded creyy ct1ew cetne csmh2 c8gb2 cjxbp cke32 c8407 cox8h c5xk8" @click.outside="open = false" @keydown.escape.window="open = false" x-show="open" x-transition:enter="c5mjj coq4n ch8aq ccio3" x-transition:enter-start="opacity-0 c3pue" x-transition:enter-end="cqsra cfwq4" x-transition:leave="c5mjj coq4n ch8aq" x-transition:leave-start="cqsra" x-transition:leave-end="opacity-0" x-cloak="">
                                            <ul>
                                                <li>
                                                    <a class="text-sm flex cn6r0 cnz6z ch1ih c6w4h cw92y cjm6w cynm4" href="#0" @click="open = false" @focus="open = true" @focusout="open = false">Option 1</a>
                                                </li>
                                                <li>
                                                    <a class="text-sm flex cn6r0 cnz6z ch1ih c6w4h cw92y cjm6w cynm4" href="#0" @click="open = false" @focus="open = true" @focusout="open = false">Option 2</a>
                                                </li>
                                                <li>
                                                    <a class="text-sm flex cvu65 c6tg6 cw92y cjm6w cynm4" href="#0" @click="open = false" @focus="open = true" @focusout="open = false">Remove</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </header>
                                <h2 class="text-slate-800 dark:text-slate-100 cqosy cs31h c7j98">Acme Professional</h2>
                                <div class="ciz4v czgoy cqosy cw3n3 c0qeg ci4cg">Sales</div>
                                <div class="flex cxbmt">
                                    <div class="text-3xl font-bold text-slate-800 dark:text-slate-100 mr-2">$9,962</div>
                                    <div class="text-sm rounded-full ck3g6 cqosy ceqwg c6er6">+29%</div>
                                </div>
                            </div>
                            <!-- Chart built with Chart.js 3 -->
                            <!-- Check out src/js/dashboard-charts.js for config -->
                            <div class="ctn2p ci7ed ckut6">
                                <!-- Change the height attribute to adjust the chart height -->
                                <canvas id="dashboard-card-03" width="389" height="128"></canvas>
                            </div>
                        </div>

                        <!-- Bar chart (Direct vs Indirect) -->
                        <div class="flex bg-white dark:bg-slate-800 rounded-sm border border-slate-200 dark:border-slate-700 cugyv c4osb cetne chmlm">
                            <header class="dark:border-slate-700 cjw7x cz4zt cx95x ctysv">
                                <h2 class="text-slate-800 dark:text-slate-100 cqosy">Direct VS Indirect</h2>
                            </header>
                            <!-- Chart built with Chart.js 3 -->
                            <!-- Check out src/js/dashboard-charts.js for config -->
                            <div id="dashboard-card-04-legend" class="cx95x c8o14">
                                <ul class="flex flex-wrap"></ul>
                            </div>
                            <div class="ckut6">
                                <!-- Change the height attribute to adjust the chart height -->
                                <canvas id="dashboard-card-04" width="595" height="248"></canvas>
                            </div>
                        </div>

                        <!-- Line chart (Real Time Value) -->
                        <div class="flex bg-white dark:bg-slate-800 rounded-sm border border-slate-200 dark:border-slate-700 cugyv c4osb cetne chmlm">
                            <header class="dark:border-slate-700 flex items-center cjw7x cz4zt cx95x ctysv">
                                <h2 class="text-slate-800 dark:text-slate-100 cqosy">Real Time Value</h2>
                                <div class="c4ijw c9o7o" x-data="{ open: false }" @mouseenter="open = true" @mouseleave="open = false">
                                    <button class="block" aria-haspopup="true" :aria-expanded="open" @focus="open = true" @focusout="open = false" @click.prevent="">
                                        <svg class="ciz4v czgoy c3wll cgmrc cm474" viewBox="0 0 16 16">
                                            <path d="M8 0C3.6 0 0 3.6 0 8s3.6 8 8 8 8-3.6 8-8-3.6-8-8-8zm0 12c-.6 0-1-.4-1-1s.4-1 1-1 1 .4 1 1-.4 1-1 1zm1-3H7V4h2v5z"></path>
                                        </svg>
                                    </button>
                                    <div class="c50r7 c1gyb cnzfa csmh2 cox8h">
                                        <div class="bg-white dark:text-slate-100 border border-slate-200 rounded crhoe ce4zx ct1ew cetne c7j98 cmue4" x-show="open" x-transition:enter="c5mjj coq4n ch8aq ccio3" x-transition:enter-start="opacity-0 cf3f3" x-transition:enter-end="cqsra cfwq4" x-transition:leave="c5mjj coq4n ch8aq" x-transition:leave-start="cqsra" x-transition:leave-end="opacity-0" x-cloak="">
                                            <div class="c626f cob4g c0qeg">Built with <a class="cn69j" @focus="open = true" @focusout="open = false" href="https://www.chartjs.org/" target="_blank">Chart.js</a></div>
                                        </div>
                                    </div>
                                </div>
                            </header>
                            <!-- Chart built with Chart.js 3 -->
                            <!-- Check out src/js/dashboard-charts.js for config -->
                            <div class="cx95x c8o14">
                                <div class="flex cxbmt">
                                    <div class="text-3xl font-bold text-slate-800 dark:text-slate-100 mr-2 cgfr7">$<span id="dashboard-card-05-value">57.81</span></div>
                                    <div id="dashboard-card-05-deviation" class="text-sm rounded-full cqosy ceqwg c6er6"></div>
                                </div>
                            </div>
                            <div class="ckut6">
                                <!-- Change the height attribute to adjust the chart height -->
                                <canvas id="dashboard-card-05" width="595" height="248"></canvas>
                            </div>
                        </div>

                        <!-- Doughnut chart (Top Countries) -->
                        <div class="flex bg-white dark:bg-slate-800 rounded-sm border border-slate-200 dark:border-slate-700 cugyv c04fd c4osb cetne chmlm">
                            <header class="dark:border-slate-700 cjw7x cz4zt cx95x ctysv">
                                <h2 class="text-slate-800 dark:text-slate-100 cqosy">Top Countries</h2>
                            </header>
                            <!-- Chart built with Chart.js 3 -->
                            <!-- Check out src/js/dashboard-charts.js for config -->
                            <div class="flex justify-center chmlm ckut6">
                                <div>
                                    <!-- Change the height attribute to adjust the chart height -->
                                    <canvas id="dashboard-card-06" width="389" height="260"></canvas>
                                </div>
                                <div id="dashboard-card-06-legend" class="cx95x cukwe c1rth">
                                    <ul class="flex flex-wrap justify-center -m-1"></ul>
                                </div>
                            </div>
                        </div>

                        <!-- Table (Top Channels) -->
                        <div class="bg-white dark:bg-slate-800 rounded-sm border border-slate-200 dark:border-slate-700 cvgln c4osb cetne">
                            <header class="dark:border-slate-700 cjw7x cz4zt cx95x ctysv">
                                <h2 class="text-slate-800 dark:text-slate-100 cqosy">Top Channels</h2>
                            </header>
                            <div class="cmue4">

                                <!-- Table -->
                                <div class="cjrun">
                                    <table class="ch1ih c07b2 c3ff8">
                                        <!-- Table header -->
                                        <thead class="rounded-sm ciz4v c1vyl ce4zx czgoy cn1je cw3n3 c0qeg">
                                            <tr>
                                                <th class="cnk1n">
                                                    <div class="cqosy cojuf">Source</div>
                                                </th>
                                                <th class="cnk1n">
                                                    <div class="cqosy cob4g">Visitors</div>
                                                </th>
                                                <th class="cnk1n">
                                                    <div class="cqosy cob4g">Revenues</div>
                                                </th>
                                                <th class="cnk1n">
                                                    <div class="cqosy cob4g">Sales</div>
                                                </th>
                                                <th class="cnk1n">
                                                    <div class="cqosy cob4g">Conversion</div>
                                                </th>
                                            </tr>
                                        </thead>
                                        <!-- Table body -->
                                        <tbody class="text-sm ci5zp cz8yz cw92y cxw08">
                                            <!-- Row -->
                                            <tr>
                                                <td class="cnk1n">
                                                    <div class="flex items-center">
                                                        <svg class="mr-2 c7n6y c152z" width="36" height="36" viewBox="0 0 36 36">
                                                            <circle fill="#24292E" cx="18" cy="18" r="18"></circle>
                                                            <path d="M18 10.2c-4.4 0-8 3.6-8 8 0 3.5 2.3 6.5 5.5 7.6.4.1.5-.2.5-.4V24c-2.2.5-2.7-1-2.7-1-.4-.9-.9-1.2-.9-1.2-.7-.5.1-.5.1-.5.8.1 1.2.8 1.2.8.7 1.3 1.9.9 2.3.7.1-.5.3-.9.5-1.1-1.8-.2-3.6-.9-3.6-4 0-.9.3-1.6.8-2.1-.1-.2-.4-1 .1-2.1 0 0 .7-.2 2.2.8.6-.2 1.3-.3 2-.3s1.4.1 2 .3c1.5-1 2.2-.8 2.2-.8.4 1.1.2 1.9.1 2.1.5.6.8 1.3.8 2.1 0 3.1-1.9 3.7-3.7 3.9.3.4.6.9.6 1.6v2.2c0 .2.1.5.6.4 3.2-1.1 5.5-4.1 5.5-7.6-.1-4.4-3.7-8-8.1-8z" fill="#FFF"></path>
                                                        </svg>
                                                        <div class="text-slate-800 dark:text-slate-100">Github.com</div>
                                                    </div>
                                                </td>
                                                <td class="cnk1n">
                                                    <div class="cob4g">2.4K</div>
                                                </td>
                                                <td class="cnk1n">
                                                    <div class="clfqm cob4g">$3,877</div>
                                                </td>
                                                <td class="cnk1n">
                                                    <div class="cob4g">267</div>
                                                </td>
                                                <td class="cnk1n">
                                                    <div class="cefw2 cob4g">4.7%</div>
                                                </td>
                                            </tr>
                                            <!-- Row -->
                                            <tr>
                                                <td class="cnk1n">
                                                    <div class="flex items-center">
                                                        <svg class="mr-2 c7n6y c152z" width="36" height="36" viewBox="0 0 36 36">
                                                            <circle fill="#1DA1F2" cx="18" cy="18" r="18"></circle>
                                                            <path d="M26 13.5c-.6.3-1.2.4-1.9.5.7-.4 1.2-1 1.4-1.8-.6.4-1.3.6-2.1.8-.6-.6-1.5-1-2.4-1-1.7 0-3.2 1.5-3.2 3.3 0 .3 0 .5.1.7-2.7-.1-5.2-1.4-6.8-3.4-.3.5-.4 1-.4 1.7 0 1.1.6 2.1 1.5 2.7-.5 0-1-.2-1.5-.4 0 1.6 1.1 2.9 2.6 3.2-.3.1-.6.1-.9.1-.2 0-.4 0-.6-.1.4 1.3 1.6 2.3 3.1 2.3-1.1.9-2.5 1.4-4.1 1.4H10c1.5.9 3.2 1.5 5 1.5 6 0 9.3-5 9.3-9.3v-.4c.7-.5 1.3-1.1 1.7-1.8z" fill="#FFF" fill-rule="nonzero"></path>
                                                        </svg>
                                                        <div class="text-slate-800 dark:text-slate-100">Twitter</div>
                                                    </div>
                                                </td>
                                                <td class="cnk1n">
                                                    <div class="cob4g">2.2K</div>
                                                </td>
                                                <td class="cnk1n">
                                                    <div class="clfqm cob4g">$3,426</div>
                                                </td>
                                                <td class="cnk1n">
                                                    <div class="cob4g">249</div>
                                                </td>
                                                <td class="cnk1n">
                                                    <div class="cefw2 cob4g">4.4%</div>
                                                </td>
                                            </tr>
                                            <!-- Row -->
                                            <tr>
                                                <td class="cnk1n">
                                                    <div class="flex items-center">
                                                        <svg class="mr-2 c7n6y c152z" width="36" height="36" viewBox="0 0 36 36">
                                                            <circle fill="#EA4335" cx="18" cy="18" r="18"></circle>
                                                            <path d="M18 17v2.4h4.1c-.2 1-1.2 3-4 3-2.4 0-4.3-2-4.3-4.4 0-2.4 2-4.4 4.3-4.4 1.4 0 2.3.6 2.8 1.1l1.9-1.8C21.6 11.7 20 11 18.1 11c-3.9 0-7 3.1-7 7s3.1 7 7 7c4 0 6.7-2.8 6.7-6.8 0-.5 0-.8-.1-1.2H18z" fill="#FFF" fill-rule="nonzero"></path>
                                                        </svg>
                                                        <div class="text-slate-800 dark:text-slate-100">Google (organic)</div>
                                                    </div>
                                                </td>
                                                <td class="cnk1n">
                                                    <div class="cob4g">2.0K</div>
                                                </td>
                                                <td class="cnk1n">
                                                    <div class="clfqm cob4g">$2,444</div>
                                                </td>
                                                <td class="cnk1n">
                                                    <div class="cob4g">224</div>
                                                </td>
                                                <td class="cnk1n">
                                                    <div class="cefw2 cob4g">4.2%</div>
                                                </td>
                                            </tr>
                                            <!-- Row -->
                                            <tr>
                                                <td class="cnk1n">
                                                    <div class="flex items-center">
                                                        <svg class="mr-2 c7n6y c152z" width="36" height="36" viewBox="0 0 36 36">
                                                            <circle fill="#4BC9FF" cx="18" cy="18" r="18"></circle>
                                                            <path d="M26 14.3c-.1 1.6-1.2 3.7-3.3 6.4-2.2 2.8-4 4.2-5.5 4.2-.9 0-1.7-.9-2.4-2.6C14 19.9 13.4 15 12 15c-.1 0-.5.3-1.2.8l-.8-1c.8-.7 3.5-3.4 4.7-3.5 1.2-.1 2 .7 2.3 2.5.3 2 .8 6.1 1.8 6.1.9 0 2.5-3.4 2.6-4 .1-.9-.3-1.9-2.3-1.1.8-2.6 2.3-3.8 4.5-3.8 1.7.1 2.5 1.2 2.4 3.3z" fill="#FFF" fill-rule="nonzero"></path>
                                                        </svg>
                                                        <div class="text-slate-800 dark:text-slate-100">Vimeo.com</div>
                                                    </div>
                                                </td>
                                                <td class="cnk1n">
                                                    <div class="cob4g">1.9K</div>
                                                </td>
                                                <td class="cnk1n">
                                                    <div class="clfqm cob4g">$2,236</div>
                                                </td>
                                                <td class="cnk1n">
                                                    <div class="cob4g">220</div>
                                                </td>
                                                <td class="cnk1n">
                                                    <div class="cefw2 cob4g">4.2%</div>
                                                </td>
                                            </tr>
                                            <!-- Row -->
                                            <tr>
                                                <td class="cnk1n">
                                                    <div class="flex items-center">
                                                        <svg class="mr-2 c7n6y c152z" width="36" height="36" viewBox="0 0 36 36">
                                                            <circle fill="#0E2439" cx="18" cy="18" r="18"></circle>
                                                            <path d="M14.232 12.818V23H11.77V12.818h2.46zM15.772 23V12.818h2.462v4.087h4.012v-4.087h2.456V23h-2.456v-4.092h-4.012V23h-2.461z" fill="#E6ECF4"></path>
                                                        </svg>
                                                        <div class="text-slate-800 dark:text-slate-100">Indiehackers.com</div>
                                                    </div>
                                                </td>
                                                <td class="cnk1n">
                                                    <div class="cob4g">1.7K</div>
                                                </td>
                                                <td class="cnk1n">
                                                    <div class="clfqm cob4g">$2,034</div>
                                                </td>
                                                <td class="cnk1n">
                                                    <div class="cob4g">204</div>
                                                </td>
                                                <td class="cnk1n">
                                                    <div class="cefw2 cob4g">3.9%</div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>

                                </div>
                            </div>
                        </div>

                        <!-- Line chart (Sales Over Time) -->
                        <div class="flex bg-white dark:bg-slate-800 rounded-sm border border-slate-200 dark:border-slate-700 cugyv c4osb cetne chmlm">
                            <header class="dark:border-slate-700 flex items-center cjw7x cz4zt cx95x ctysv">
                                <h2 class="text-slate-800 dark:text-slate-100 cqosy">Sales Over Time (all stores)</h2>
                            </header>
                            <div class="cx95x c8o14">
                                <div class="flex flex-wrap cmgwo c2d4o">
                                    <div class="flex cxbmt">
                                        <div class="text-3xl font-bold text-slate-800 dark:text-slate-100 mr-2">$1,482</div>
                                        <div class="text-sm rounded-full cqosy ctnuc ceqwg c6er6">-22%</div>
                                    </div>
                                    <div id="dashboard-card-08-legend" class="ci4cg c9o7o ckut6">
                                        <ul class="flex flex-wrap justify-end"></ul>
                                    </div>
                                </div>
                            </div>
                            <!-- Chart built with Chart.js 3 -->
                            <!-- Check out src/js/dashboard-charts.js for config -->
                            <div class="ckut6">
                                <!-- Change the height attribute to adjust the chart height -->
                                <canvas id="dashboard-card-08" width="595" height="248"></canvas>
                            </div>
                        </div>

                        <!-- Stacked bar chart (Sales VS Refunds) -->
                        <div class="flex bg-white dark:bg-slate-800 rounded-sm border border-slate-200 dark:border-slate-700 cugyv c4osb cetne chmlm">
                            <header class="dark:border-slate-700 flex items-center cjw7x cz4zt cx95x ctysv">
                                <h2 class="text-slate-800 dark:text-slate-100 cqosy">Sales VS Refunds</h2>
                                <div class="c4ijw c9o7o" x-data="{ open: false }" @mouseenter="open = true" @mouseleave="open = false">
                                    <button class="block" href="#0" aria-haspopup="true" :aria-expanded="open" @focus="open = true" @focusout="open = false" @click.prevent="">
                                        <svg class="ciz4v czgoy c3wll cgmrc cm474" viewBox="0 0 16 16">
                                            <path d="M8 0C3.6 0 0 3.6 0 8s3.6 8 8 8 8-3.6 8-8-3.6-8-8-8zm0 12c-.6 0-1-.4-1-1s.4-1 1-1 1 .4 1 1-.4 1-1 1zm1-3H7V4h2v5z"></path>
                                        </svg>
                                    </button>
                                    <div class="c50r7 c1gyb cnzfa csmh2 cox8h">
                                        <div class="bg-white dark:text-slate-100 border border-slate-200 rounded crhoe ce4zx ct1ew cetne clmp3 c7j98 cmue4" x-show="open" x-transition:enter="c5mjj coq4n ch8aq ccio3" x-transition:enter-start="opacity-0 cf3f3" x-transition:enter-end="cqsra cfwq4" x-transition:leave="c5mjj coq4n ch8aq" x-transition:leave-start="cqsra" x-transition:leave-end="opacity-0" x-cloak="">
                                            <div class="text-sm">Sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit.</div>
                                        </div>
                                    </div>
                                </div>
                            </header>
                            <div class="cx95x c8o14">
                                <div class="flex cxbmt">
                                    <div class="text-3xl font-bold text-slate-800 dark:text-slate-100 mr-2">+$6,796</div>
                                    <div class="text-sm rounded-full cqosy ctnuc ceqwg c6er6">-34%</div>
                                </div>
                            </div>
                            <!-- Chart built with Chart.js 3 -->
                            <!-- Check out src/js/dashboard-charts.js for config -->
                            <div class="ckut6">
                                <!-- Change the height attribute to adjust the chart height -->
                                <canvas id="dashboard-card-09" width="595" height="248"></canvas>
                            </div>
                        </div>

                        <!-- Card (Recent Activity) -->
                        <div class="bg-white dark:bg-slate-800 rounded-sm border border-slate-200 dark:border-slate-700 cancr c4osb cetne">
                            <header class="dark:border-slate-700 cjw7x cz4zt cx95x ctysv">
                                <h2 class="text-slate-800 dark:text-slate-100 cqosy">Recent Activity</h2>
                            </header>
                            <div class="cmue4">

                                <!-- Card content -->
                                <!-- "Today" group -->
                                <div>
                                    <header class="rounded-sm ciz4v c1vyl ce4zx czgoy cqosy cn1je cw3n3 c0qeg cnk1n">Today</header>
                                    <ul class="coc8k">
                                        <!-- Item -->
                                        <li class="flex ciamg">
                                            <div class="rounded-full cf1ce c7n6y c40t1 czt1n ccqvu ce4tq">
                                                <svg class="text-indigo-50 c3wll ccqvu ce4tq" viewBox="0 0 36 36">
                                                    <path d="M18 10c-4.4 0-8 3.1-8 7s3.6 7 8 7h.6l5.4 2v-4.4c1.2-1.2 2-2.8 2-4.6 0-3.9-3.6-7-8-7zm4 10.8v2.3L18.9 22H18c-3.3 0-6-2.2-6-5s2.7-5 6-5 6 2.2 6 5c0 2.2-2 3.8-2 3.8z"></path>
                                                </svg>
                                            </div>
                                            <div class="flex items-center dark:border-slate-700 text-sm cjw7x cz4zt ckut6 cfnh0">
                                                <div class="flex cmgwo ckut6">
                                                    <div class="ckvsq"><a class="text-slate-800 dark:text-slate-100 c8lgs ciqv7 cw92y" href="#0">Nick Mark</a> mentioned <a class="text-slate-800 dark:text-slate-100 c8lgs ciqv7 cw92y" href="#0">Sara Smith</a> in a new post</div>
                                                    <div class="c7n6y c93ao c9o7o">
                                                        <a class="text-indigo-500 cuv1l cdi3j cw92y" href="#0">View<span class="hidden cp4i7"> -&gt;</span></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <!-- Item -->
                                        <li class="flex ciamg">
                                            <div class="rounded-full c0vjv c7n6y c40t1 czt1n ccqvu ce4tq">
                                                <svg class="c3wll cu7c2 ccqvu ce4tq" viewBox="0 0 36 36">
                                                    <path d="M25 24H11a1 1 0 01-1-1v-5h2v4h12v-4h2v5a1 1 0 01-1 1zM14 13h8v2h-8z"></path>
                                                </svg>
                                            </div>
                                            <div class="flex items-center dark:border-slate-700 text-sm cjw7x cz4zt ckut6 cfnh0">
                                                <div class="flex cmgwo ckut6">
                                                    <div class="ckvsq">The post <a class="text-slate-800 dark:text-slate-100 c8lgs ciqv7 cw92y" href="#0">Post Name</a> was removed by <a class="text-slate-800 dark:text-slate-100 c8lgs ciqv7 cw92y" href="#0">Nick Mark</a></div>
                                                    <div class="c7n6y c93ao c9o7o">
                                                        <a class="text-indigo-500 cuv1l cdi3j cw92y" href="#0">View<span class="hidden cp4i7"> -&gt;</span></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <!-- Item -->
                                        <li class="flex ciamg">
                                            <div class="rounded-full ck3g6 c7n6y c40t1 czt1n ccqvu ce4tq">
                                                <svg class="c7lu6 c3wll ccqvu ce4tq" viewBox="0 0 36 36">
                                                    <path d="M15 13v-3l-5 4 5 4v-3h8a1 1 0 000-2h-8zM21 21h-8a1 1 0 000 2h8v3l5-4-5-4v3z"></path>
                                                </svg>
                                            </div>
                                            <div class="flex items-center text-sm ckut6 cfnh0">
                                                <div class="flex cmgwo ckut6">
                                                    <div class="ckvsq"><a class="text-slate-800 dark:text-slate-100 c8lgs ciqv7 cw92y" href="#0">Patrick Sullivan</a> published a new <a class="text-slate-800 dark:text-slate-100 c8lgs ciqv7 cw92y" href="#0">post</a></div>
                                                    <div class="c7n6y c93ao c9o7o">
                                                        <a class="text-indigo-500 cuv1l cdi3j cw92y" href="#0">View<span class="hidden cp4i7"> -&gt;</span></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <!-- "Yesterday" group -->
                                <div>
                                    <header class="rounded-sm ciz4v c1vyl ce4zx czgoy cqosy cn1je cw3n3 c0qeg cnk1n">Yesterday</header>
                                    <ul class="coc8k">
                                        <!-- Item -->
                                        <li class="flex ciamg">
                                            <div class="rounded-full ca1cm c7n6y c40t1 czt1n ccqvu ce4tq">
                                                <svg class="c3wll ckh81 ccqvu ce4tq" viewBox="0 0 36 36">
                                                    <path d="M23 11v2.085c-2.841.401-4.41 2.462-5.8 4.315-1.449 1.932-2.7 3.6-5.2 3.6h-1v2h1c3.5 0 5.253-2.338 6.8-4.4 1.449-1.932 2.7-3.6 5.2-3.6h3l-4-4zM15.406 16.455c.066-.087.125-.162.194-.254.314-.419.656-.872 1.033-1.33C15.475 13.802 14.038 13 12 13h-1v2h1c1.471 0 2.505.586 3.406 1.455zM24 21c-1.471 0-2.505-.586-3.406-1.455-.066.087-.125.162-.194.254-.316.422-.656.873-1.028 1.328.959.878 2.108 1.573 3.628 1.788V25l4-4h-3z"></path>
                                                </svg>
                                            </div>
                                            <div class="flex items-center dark:border-slate-700 text-sm cjw7x cz4zt ckut6 cfnh0">
                                                <div class="flex cmgwo ckut6">
                                                    <div class="ckvsq"><a class="text-slate-800 dark:text-slate-100 c8lgs ciqv7 cw92y" href="#0">240+</a> users have subscribed to <a class="text-slate-800 dark:text-slate-100 c8lgs ciqv7 cw92y" href="#0">Newsletter #1</a></div>
                                                    <div class="c7n6y c93ao c9o7o">
                                                        <a class="text-indigo-500 cuv1l cdi3j cw92y" href="#0">View<span class="hidden cp4i7"> -&gt;</span></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <!-- Item -->
                                        <li class="flex ciamg">
                                            <div class="rounded-full cf1ce c7n6y c40t1 czt1n ccqvu ce4tq">
                                                <svg class="text-indigo-50 c3wll ccqvu ce4tq" viewBox="0 0 36 36">
                                                    <path d="M18 10c-4.4 0-8 3.1-8 7s3.6 7 8 7h.6l5.4 2v-4.4c1.2-1.2 2-2.8 2-4.6 0-3.9-3.6-7-8-7zm4 10.8v2.3L18.9 22H18c-3.3 0-6-2.2-6-5s2.7-5 6-5 6 2.2 6 5c0 2.2-2 3.8-2 3.8z"></path>
                                                </svg>
                                            </div>
                                            <div class="flex items-center text-sm ckut6 cfnh0">
                                                <div class="flex cmgwo ckut6">
                                                    <div class="ckvsq">The post <a class="text-slate-800 dark:text-slate-100 c8lgs ciqv7 cw92y" href="#0">Post Name</a> was suspended by <a class="text-slate-800 dark:text-slate-100 c8lgs ciqv7 cw92y" href="#0">Nick Mark</a></div>
                                                    <div class="c7n6y c93ao c9o7o">
                                                        <a class="text-indigo-500 cuv1l cdi3j cw92y" href="#0">View<span class="hidden cp4i7"> -&gt;</span></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>

                            </div>
                        </div>

                        <!-- Card (Income/Expenses) -->
                        <div class="bg-white dark:bg-slate-800 rounded-sm border border-slate-200 dark:border-slate-700 cancr c4osb cetne">
                            <header class="dark:border-slate-700 cjw7x cz4zt cx95x ctysv">
                                <h2 class="text-slate-800 dark:text-slate-100 cqosy">Income/Expenses</h2>
                            </header>
                            <div class="cmue4">

                                <!-- Card content -->
                                <!-- "Today" group -->
                                <div>
                                    <header class="rounded-sm ciz4v c1vyl ce4zx czgoy cqosy cn1je cw3n3 c0qeg cnk1n">Today</header>
                                    <ul class="coc8k">
                                        <!-- Item -->
                                        <li class="flex ciamg">
                                            <div class="rounded-full c0vjv c7n6y c40t1 czt1n ccqvu ce4tq">
                                                <svg class="c3wll cu7c2 ccqvu ce4tq" viewBox="0 0 36 36">
                                                    <path d="M17.7 24.7l1.4-1.4-4.3-4.3H25v-2H14.8l4.3-4.3-1.4-1.4L11 18z"></path>
                                                </svg>
                                            </div>
                                            <div class="flex items-center dark:border-slate-700 text-sm cjw7x cz4zt ckut6 cfnh0">
                                                <div class="flex cmgwo ckut6">
                                                    <div class="ckvsq"><a class="text-slate-800 dark:text-slate-100 c8lgs ciqv7 cw92y" href="#0">Qonto</a> billing</div>
                                                    <div class="cda18 c7n6y c9o7o">
                                                        <span class="text-slate-800 dark:text-slate-100 cw92y">-$49.88</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <!-- Item -->
                                        <li class="flex ciamg">
                                            <div class="rounded-full ck3g6 c7n6y c40t1 czt1n ccqvu ce4tq">
                                                <svg class="c7lu6 c3wll ccqvu ce4tq" viewBox="0 0 36 36">
                                                    <path d="M18.3 11.3l-1.4 1.4 4.3 4.3H11v2h10.2l-4.3 4.3 1.4 1.4L25 18z"></path>
                                                </svg>
                                            </div>
                                            <div class="flex items-center dark:border-slate-700 text-sm cjw7x cz4zt ckut6 cfnh0">
                                                <div class="flex cmgwo ckut6">
                                                    <div class="ckvsq"><a class="text-slate-800 dark:text-slate-100 c8lgs ciqv7 cw92y" href="#0">Cruip.com</a> Market Ltd 70 Wilson St London</div>
                                                    <div class="cda18 c7n6y c9o7o">
                                                        <span class="clfqm cw92y">+249.88</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <!-- Item -->
                                        <li class="flex ciamg">
                                            <div class="rounded-full ck3g6 c7n6y c40t1 czt1n ccqvu ce4tq">
                                                <svg class="c7lu6 c3wll ccqvu ce4tq" viewBox="0 0 36 36">
                                                    <path d="M18.3 11.3l-1.4 1.4 4.3 4.3H11v2h10.2l-4.3 4.3 1.4 1.4L25 18z"></path>
                                                </svg>
                                            </div>
                                            <div class="flex items-center dark:border-slate-700 text-sm cjw7x cz4zt ckut6 cfnh0">
                                                <div class="flex cmgwo ckut6">
                                                    <div class="ckvsq"><a class="text-slate-800 dark:text-slate-100 c8lgs ciqv7 cw92y" href="#0">Notion Labs Inc</a></div>
                                                    <div class="cda18 c7n6y c9o7o">
                                                        <span class="clfqm cw92y">+99.99</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <!-- Item -->
                                        <li class="flex ciamg">
                                            <div class="rounded-full ck3g6 c7n6y c40t1 czt1n ccqvu ce4tq">
                                                <svg class="c7lu6 c3wll ccqvu ce4tq" viewBox="0 0 36 36">
                                                    <path d="M18.3 11.3l-1.4 1.4 4.3 4.3H11v2h10.2l-4.3 4.3 1.4 1.4L25 18z"></path>
                                                </svg>
                                            </div>
                                            <div class="flex items-center dark:border-slate-700 text-sm cjw7x cz4zt ckut6 cfnh0">
                                                <div class="flex cmgwo ckut6">
                                                    <div class="ckvsq"><a class="text-slate-800 dark:text-slate-100 c8lgs ciqv7 cw92y" href="#0">Market Cap Ltd</a></div>
                                                    <div class="cda18 c7n6y c9o7o">
                                                        <span class="clfqm cw92y">+1,200.88</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <!-- Item -->
                                        <li class="flex ciamg">
                                            <div class="rounded-full cr58u c7n6y c40t1 czt1n ccqvu ce4tq">
                                                <svg class="czgoy c3wll ccqvu ce4tq" viewBox="0 0 36 36">
                                                    <path d="M21.477 22.89l-8.368-8.367a6 6 0 008.367 8.367zm1.414-1.413a6 6 0 00-8.367-8.367l8.367 8.367zM18 26a8 8 0 110-16 8 8 0 010 16z"></path>
                                                </svg>
                                            </div>
                                            <div class="flex items-center dark:border-slate-700 text-sm cjw7x cz4zt ckut6 cfnh0">
                                                <div class="flex cmgwo ckut6">
                                                    <div class="ckvsq"><a class="text-slate-800 dark:text-slate-100 c8lgs ciqv7 cw92y" href="#0">App.com</a> Market Ltd 70 Wilson St London</div>
                                                    <div class="cda18 c7n6y c9o7o">
                                                        <span class="text-slate-800 dark:text-slate-100 cbdgz cw92y">+$99.99</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <!-- Item -->
                                        <li class="flex ciamg">
                                            <div class="rounded-full c0vjv c7n6y c40t1 czt1n ccqvu ce4tq">
                                                <svg class="c3wll cu7c2 ccqvu ce4tq" viewBox="0 0 36 36">
                                                    <path d="M17.7 24.7l1.4-1.4-4.3-4.3H25v-2H14.8l4.3-4.3-1.4-1.4L11 18z"></path>
                                                </svg>
                                            </div>
                                            <div class="flex items-center text-sm ckut6 cfnh0">
                                                <div class="flex cmgwo ckut6">
                                                    <div class="ckvsq"><a class="text-slate-800 dark:text-slate-100 c8lgs ciqv7 cw92y" href="#0">App.com</a> Market Ltd 70 Wilson St London</div>
                                                    <div class="cda18 c7n6y c9o7o">
                                                        <span class="text-slate-800 dark:text-slate-100 cw92y">-$49.88</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>

                            </div>
                        </div>

                    </div>

                </div>
            </main>

        </div>

    </div>

    <script src="js/vendors/alpinejs.min.js" defer=""></script>
    <script src="js/main.js"></script>
    <script src="js/vendors/chart.js"></script>
    <script src="js/vendors/moment.js"></script>
    <script src="js/vendors/chartjs-adapter-moment.js"></script>
    <script src="js/dashboard-charts.js"></script>
    <script src="js/vendors/flatpickr.js"></script>
    <script src="js/flatpickr-init.js"></script>



    <script>
        console.log("%cImportant!", "color: blue; font-size: x-large");
        console.log("%cThe page you are viewing is for demo purposes only. CSS and HTML have been minified and class names have been shortened to improve the page load time. Download our templates from https://cruip.com/ 😉", "font-size: large");
    </script>
    <script>
        const pagesList = [{
            "name": "Dashboard",
            "url": "https://preview.cruip.com/mosaic/index.html",
            "active": true
        }, {
            "name": "Analytics",
            "url": "analytics.html",
            "active": false
        }, {
            "name": "Fintech",
            "url": "fintech.html",
            "active": false
        }, {
            "name": "Customers",
            "url": "customers.html",
            "active": false
        }, {
            "name": "Orders",
            "url": "orders.html",
            "active": false
        }, {
            "name": "Invoices",
            "url": "invoices.html",
            "active": false
        }, {
            "name": "Shop",
            "url": "shop.html",
            "active": false
        }, {
            "name": "Shop 2",
            "url": "shop-2.html",
            "active": false
        }, {
            "name": "Single Product",
            "url": "product.html",
            "active": false
        }, {
            "name": "Cart",
            "url": "cart.html",
            "active": false
        }, {
            "name": "Cart 2",
            "url": "cart-2.html",
            "active": false
        }, {
            "name": "Cart 3",
            "url": "cart-3.html",
            "active": false
        }, {
            "name": "Pay",
            "url": "pay.html",
            "active": false
        }, {
            "name": "Campaigns",
            "url": "campaigns.html",
            "active": false
        }, {
            "name": "Users Tabs",
            "url": "users-tabs.html",
            "active": false
        }, {
            "name": "Users Tiles",
            "url": "users-tiles.html",
            "active": false
        }, {
            "name": "Profile",
            "url": "profile.html",
            "active": false
        }, {
            "name": "Feed",
            "url": "feed.html",
            "active": false
        }, {
            "name": "Forum",
            "url": "forum.html",
            "active": false
        }, {
            "name": "Forum Post",
            "url": "forum-post.html",
            "active": false
        }, {
            "name": "Meetups",
            "url": "meetups.html",
            "active": false
        }, {
            "name": "Meetups Post",
            "url": "meetups-post.html",
            "active": false
        }, {
            "name": "Cards",
            "url": "credit-cards.html",
            "active": false
        }, {
            "name": "Transactions",
            "url": "transactions.html",
            "active": false
        }, {
            "name": "Transaction Details",
            "url": "transaction-details.html",
            "active": false
        }, {
            "name": "Jobs Listing",
            "url": "job-listing.html",
            "active": false
        }, {
            "name": "Jobs Post",
            "url": "job-post.html",
            "active": false
        }, {
            "name": "Company Profile",
            "url": "company-profile.html",
            "active": false
        }, {
            "name": "Kanban",
            "url": "tasks-kanban.html",
            "active": false
        }, {
            "name": "Tasks List",
            "url": "tasks-list.html",
            "active": false
        }, {
            "name": "Messages",
            "url": "messages.html",
            "active": false
        }, {
            "name": "Inbox",
            "url": "inbox.html",
            "active": false
        }, {
            "name": "Calendar",
            "url": "calendar.html",
            "active": false
        }, {
            "name": "Applications",
            "url": "https://preview.cruip.com/mosaic/applications.html",
            "active": false
        }, {
            "name": "My Account",
            "url": "settings.html",
            "active": false
        }, {
            "name": "My Notifications",
            "url": "notifications.html",
            "active": false
        }, {
            "name": "Connected Apps",
            "url": "connected-apps.html",
            "active": false
        }, {
            "name": "Plans",
            "url": "plans.html",
            "active": false
        }, {
            "name": "Billing & Invoices",
            "url": "billing.html",
            "active": false
        }, {
            "name": "Give Feedback",
            "url": "feedback.html",
            "active": false
        }, {
            "name": "Changelog",
            "url": "changelog.html",
            "active": false
        }, {
            "name": "Roadmap",
            "url": "roadmap.html",
            "active": false
        }, {
            "name": "FAQs",
            "url": "faqs.html",
            "active": false
        }, {
            "name": "Empty State",
            "url": "empty-state.html",
            "active": false
        }, {
            "name": "Page Not Found",
            "url": "404.html",
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
    <script defer src="https://static.cloudflareinsights.com/beacon.min.js/v84a3a4012de94ce1a686ba8c167c359c1696973893317" integrity="sha512-euoFGowhlaLqXsPWQ48qSkBSCFs3DPRyiwVu3FjR96cMPx+Fr+gpWRhIafcHwqwCqWS42RZhIudOvEI+Ckf6MA==" data-cf-beacon='{"rayId":"871d590f8ed9954b","r":1,"version":"2024.3.0","token":"59cc17d45d734f9ba118c63036ab1b84"}' crossorigin="anonymous"></script>
</body>

</html>