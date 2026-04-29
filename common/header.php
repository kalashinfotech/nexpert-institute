<!-- HEADER -->
<header
    class="fixed top-4 lg:left-1/2 lg:-translate-x-1/2 z-50
           w-[100%] px-3 sm:w-[90%] lg:w-[80%]">

    <div
        class="flex items-center justify-between
               px-4 py-3 lg:px-8 lg:py-3
               rounded-3xl
               bg-white/20 backdrop-blur-xl
               ring-1 ring-white/10
               shadow-lg">

        <!-- LOGO -->
        <a href="index.php" class="flex items-center gap-2">
            <img
                src="assets/favicon.png"
                alt="Nexpert Logo"
                class="h-7 lg:h-8 rounded-lg cursor-pointer" />
        </a>

        <!-- ================= DESKTOP ACTIONS ================= -->
        <div class="hidden md:flex items-center gap-3">

            <!-- SEARCH -->
            <div class="relative flex items-center w-[320px]">
                <input
                    type="text"
                    placeholder="What do you want to learn?"
                    class="w-full pl-4 pr-10 py-2 rounded-full
                           bg-white text-custom-gray
                           placeholder-custom-gray
                           focus:outline-none" />
                <i class="fa-solid fa-magnifying-glass absolute right-4 top-1/2 -translate-y-1/2 text-custom-gray"></i>
            </div>

            <!-- COURSES -->
            <div class="relative group">
                <button
                    class="flex items-center gap-1 px-3 py-2 rounded-[15px]
                           bg-[#141F49] text-white hover:bg-[#1a2a5e] transition">
                    Courses
                    <i class="fa-solid fa-chevron-down text-xs"></i>
                </button>

                <div class="absolute left-0 right-0 h-3 top-full"></div>

                <div
                    class="absolute hidden group-hover:block
                           top-full mt-2 w-44
                           rounded-xl
                           bg-black/70 backdrop-blur-xl
                           ring-1 ring-white/10
                           shadow-lg overflow-hidden z-50">

                    <a href="https://sports.nexpertinstitute.com/"
                        class="block px-4 py-2 text-white hover:bg-white/10 no-underline">
                        SPORTS
                    </a>
                    <a href="https://digitalmarketing.nexpertinstitute.com/"
                        class="block px-4 py-2 text-white hover:bg-white/10 no-underline">
                        DIGITAL MARKETING
                    </a>
                </div>
            </div>

            <!-- RESOURCES -->
            <div class="relative group">
                <button
                    class="flex items-center gap-1 px-3 py-2 rounded-3xl
                           bg-[#141F49] text-white hover:bg-[#1a2a5e] transition">
                    Resources
                    <i class="fa-solid fa-chevron-down text-xs"></i>
                </button>

                <div class="absolute left-0 right-0 h-3 top-full"></div>

                <div
                    class="absolute hidden group-hover:block
                           top-full mt-2 w-44
                           rounded-xl
                           bg-black/70 backdrop-blur-xl
                           ring-1 ring-white/10
                           shadow-lg overflow-hidden z-50">

                    <a href="about-us"
                        class="block px-4 py-2 text-white hover:bg-white/10 no-underline">
                        About Us
                    </a>

                    <!-- <a href="advisory-board.php"
                        class="block px-4 py-2 text-white hover:bg-white/10 no-underline">
                        Advisory Board
                    </a>

                    <a href="blogs.php"
                        class="block px-4 py-2 text-white hover:bg-white/10 no-underline">
                        Blogs
                    </a>

                    <a href="contact-us.php"
                        class="block px-4 py-2 text-white hover:bg-white/10 no-underline">
                        Contact Us
                    </a> -->
                </div>
            </div>
        </div>

        <!-- ================= MOBILE ================= -->
        <button
            type="button"
            class="md:hidden flex items-center p-2 text-white text-2xl rounded-lg hover:bg-white/10"
            onclick="toggleSidebar(true)">
            <i class="fa-solid fa-bars"></i>
        </button>

    </div>
</header>

<!-- MOBILE SIDEBAR -->
<aside id="mobileSidebar"
    class="fixed top-0 right-0 h-screen w-[80%] max-w-sm
           bg-[#0B0F14]/95 backdrop-blur-2xl
           ring-1 ring-white/10
           z-[70]
           translate-x-full
           transition-transform duration-300 ease-in-out">

    <!-- HEADER -->
    <div class="flex items-center justify-between px-6 py-4">
        <img src="assets/favicon.png" class="h-7">

        <!-- CLOSE -->
        <button onclick="toggleSidebar(false)"
            class="text-white text-xl leading-none">
            ✕
        </button>
    </div>

    <div class="h-px bg-white/20 mx-6"></div>

    <!-- CONTENT -->
    <div class="px-6 py-6 space-y-6 text-white">

        <!-- COURSES -->
        <details class="group">
            <summary class="flex justify-between cursor-pointer list-none">
                <span class="text-base font-semibold">Courses</span>
                <i class="fa-solid fa-chevron-down group-open:rotate-180 transition"></i>
            </summary>

 <a href="https://sports.nexpertinstitute.com/"
                class="block mt-3 px-4 py-2 rounded-xl hover:text-[#00D4FF] active:text-[#00D4FF] no-underline text-white text-sm">
                SPORTS
            </a>
            
            <a href="https://digitalmarketing.nexpertinstitute.com/"
                class="block mt-3 px-4 py-2 rounded-xl hover:text-[#00D4FF] active:text-[#00D4FF] no-underline text-white text-sm">
                DIGITAL MARKETING
            </a>
        </details>

        <!-- RESOURCES -->
        <details class="group">
            <summary class="flex justify-between cursor-pointer list-none">
                <span class="text-base font-semibold">Resources</span>
                <i class="fa-solid fa-chevron-down group-open:rotate-180 transition"></i>
            </summary>

            <div class="mt-3 space-y-1 text-sm">
                <a href="about-us" class="block px-4 py-2 rounded-xl text-white active:text-[#00D4FF] no-underline">About Us</a>
                <!-- <a href="advisory-board.php" class="block px-4 py-2 rounded-xl text-white active:text-[#00D4FF] no-underline">Advisory Board</a>
                <a href="blogs.php" class="block px-4 py-2 rounded-xl text-white active:text-[#00D4FF] no-underline">Blogs</a>
                <a href="contact-us.php" class="block px-4 py-2 rounded-xl text-white active:text-[#00D4FF] no-underline">Contact Us</a> -->
            </div>
        </details>

    </div>
</aside>

<div id="sidebarOverlay"
    class="fixed inset-0 bg-black/60 backdrop-blur-sm z-[55] hidden"
    onclick="toggleSidebar(false)">
</div>

<script>
function toggleSidebar(open) {
    const sidebar = document.getElementById('mobileSidebar');
    const overlay = document.getElementById('sidebarOverlay');

    if (open) {
        sidebar.classList.remove('translate-x-full');
        overlay.classList.remove('hidden');
        document.body.classList.add('overflow-hidden');
    } else {
        sidebar.classList.add('translate-x-full');
        overlay.classList.add('hidden');
        document.body.classList.remove('overflow-hidden');
    }
}

document.addEventListener('keydown', e => {
    if (e.key === 'Escape') toggleSidebar(false);
});
</script>