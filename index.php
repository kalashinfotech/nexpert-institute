
<!DOCTYPE html>
<html lang="en">
<?php include 'common/head.php'; ?>
<?php include 'common/header.php'; ?>


<body class="bg-white">
    <div class="fixed inset-0 z-0 pointer-events-none opacity-30 bg-repeat"
        style="background-image: url('./assets/homeHeaderOverlay.png');">
    </div>
    <section class="relative overflow-hidden">
        <div class="absolute inset-0">
            <img src="./assets/homeHeaderBg.png" alt="" class="w-full h-full object-cover" />
        </div>
        <div
            class="absolute inset-0 bg-[radial-gradient(circle_at_center,_rgba(20,31,73,0.9)_0%,_rgba(20,31,73,0.78)_45%,_rgba(20,31,73,0.6)_100%)]">
        </div>
        <div class="relative z-10 max-w-[1200px] mx-auto px-4">
            <div class="flex items-center justify-center text-center min-h-[85vh] md:min-h-[92vh]">
                <div class="max-w-[720px]">
                    <h1 class="text-white font-bold  text-[38px] leading-[44px] md:text-[5.5rem] md:leading-[80px]">
                        Nexpert
                    </h1>
                    <h2
                        class="text-white font-medium mt-5 text-[22px] leading-[30px] md:text-[2.7rem] md:leading-[40px]">
                        Where Careers Take Shape
                    </h2>
                    <p class="text-white mt-6 text-[15px] leading-[24px] md:text-[1.4rem] md:leading-[26px]">
                        Explore industry-driven learning across digital innovation and sports management, designed to
                        make you career-ready from day one.
                    </p>
                </div>
            </div>
        </div>
    </section>
    <section class="py-16 md:py-24 bg-[#F9FAFB]">
        <div class="max-w-[1200px] mx-auto px-4">
            <div class="text-center max-w-[700px] mx-auto">
                <h2 class="text-[28px] md:text-[2.7rem] font-extrabold leading-tight">
                    <span class="text-[#101828]">Our Learning</span>
                    <span class="text-[#019FF5]"> Ecosystem</span>
                </h2>
                <p class="text-[#4A5565] mt-2.5 text-[14px] md:text-[1.1rem]">
                    Two specialized verticals. One powerful institute.
                </p>
            </div>
            <div class="grid md:grid-cols-2 gap-6 md:gap-8 mt-12">
                <div class="bg-[#E5E7EB] rounded-2xl p-6 md:p-8 shadow-sm z-10">
                    <div
                        class="w-12 h-12 flex items-center justify-center rounded-xl bg-gradient-to-br from-[#019FF5] to-[#1AD88E] shadow-[0px_4px_6px_rgba(0,0,0,0.15)]">
                        <i class="fa-solid fa-code text-white text-lg"></i>
                    </div>
                    <h3 class="mt-6 text-[18px] md:text-[25px] font-bold text-[#101828]">
                        Digital Education
                    </h3>
                    <p class="mt-3 text-[16px] text-[#4A5565] pr-5">
                        Master the digital world with cutting-edge programs in marketing, AI, and tech.
                    </p>
                    <ul class="mt-3.5 space-y-2 text-[14px] text-[#4A5565]">
                        <li class="flex items-start gap-2">
                            <i class="fa-solid fa-circle-check text-[#1AD88E] mt-[2px]"></i>
                            AI-powered marketing tools & automation
                        </li>
                        <li class="flex items-start gap-2">
                            <i class="fa-solid fa-circle-check text-[#1AD88E] mt-[2px]"></i>
                            Performance marketing & analytics
                        </li>
                        <li class="flex items-start gap-2">
                            <i class="fa-solid fa-circle-check text-[#1AD88E] mt-[2px]"></i>
                            Real-world campaigns & portfolios
                        </li>
                    </ul>
                    <button
                        class="mt-6 inline-flex items-center gap-2 bg-[#019FF5] text-white text-sm font-medium px-5 py-2.5 rounded-2xl hover:opacity-90 transition">
                        Learn More
                        <i class="fa-solid fa-arrow-right text-xs"></i>
                    </button>
                </div>
                <div class="bg-gradient-to-br from-[#141F49] to-[#1A2A5E] 
						rounded-2xl p-6 md:p-8 shadow-sm text-white z-10">
                    <div class="w-12 h-12 flex items-center justify-center rounded-xl 
							bg-gradient-to-br from-[#E0F51F] to-[#1AD88E]
							shadow-[0px_4px_6px_rgba(0,0,0,0.15)]">
                        <i class="fa-solid fa-trophy text-[#141F49] text-lg"></i>
                    </div>
                    <h3 class="mt-6 text-[18px] md:text-[25px] font-bold">
                        Sports Education
                    </h3>
                    <p class="mt-3 text-[16px] text-white/80 pr-5">
                        Lead the sports industry with programs in management, analytics, and business.
                    </p>
                    <ul class="mt-3.5 space-y-2 text-[14px] text-white/80">
                        <li class="flex items-start gap-2">
                            <i class="fa-solid fa-circle-check text-[#E0F51F] mt-[2px]"></i>
                            Sports business & team management
                        </li>
                        <li class="flex items-start gap-2">
                            <i class="fa-solid fa-circle-check text-[#E0F51F] mt-[2px]"></i>
                            Analytics & performance tracking
                        </li>
                        <li class="flex items-start gap-2">
                            <i class="fa-solid fa-circle-check text-[#E0F51F] mt-[2px]"></i>
                            Industry partnerships & placements
                        </li>
                    </ul>
                    <button
                        class="mt-6 inline-flex items-center gap-2 bg-[#E0F51F] text-[#141F49] text-sm font-medium px-5 py-2.5 rounded-2xl hover:opacity-90 transition">
                        Learn More
                        <i class="fa-solid fa-arrow-right text-xs"></i>
                    </button>
                </div>
            </div>
        </div>
    </section>
    <section class="py-5 md:py-5 bg-[#F9FAFB]">
        <div class="max-w-[1200px] mx-auto px-4">
            <div class="text-center max-w-[700px] mx-auto">
                <h2 class="text-[28px] md:text-[2.7rem] font-extrabold leading-tight">
                    <span class="text-[#101828]">Our</span>
                    <span class="text-[#019FF5]">Approach</span>
                </h2>
                <p class="text-[#4A5565] mt-2.5 text-[14px] md:text-[1.1rem]">
                    What makes Nexpert different
                </p>
            </div>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-5 mt-12">
                <div class="p-5 rounded-2xl border 
						border-[rgba(1,159,245,0.2)]
						bg-[linear-gradient(135deg,rgba(1,159,245,0.05)_0%,rgba(1,159,245,0.1)_100%)]">
                    <div class="w-10 h-10 flex items-center justify-center rounded-2xl bg-[#019FF5] text-white">
                        <i class="fa-solid fa-bolt text-sm"></i>
                    </div>
                    <h3 class="mt-4 font-extrabold text-[20px] text-[#101828]">
                        Hands-on Learning
                    </h3>
                    <p class="mt-2 text-[14px] font-medium text-black leading-[20px]">
                        Build real projects, not just attend lectures. Learn by doing.
                    </p>
                </div>
                <div class="p-5 rounded-2xl border 
						border-[rgba(26,216,142,0.2)]
						bg-[linear-gradient(135deg,rgba(26,216,142,0.05)_0%,rgba(26,216,142,0.1)_100%)]">
                    <div class="w-10 h-10 flex items-center justify-center rounded-2xl bg-[#1AD88E] text-white">
                        <i class="fa-solid fa-user-group text-sm"></i>
                    </div>
                    <h3 class="mt-4 font-extrabold text-[20px] text-[#101828]">
                        Industry Mentors
                    </h3>
                    <p class="mt-2 text-[14px] font-medium text-black leading-[20px]">
                        Learn from professionals actively working in top companies.
                    </p>
                </div>
                <div class="p-5 rounded-2xl border 
						border-[#D1D5DC]
						bg-[linear-gradient(135deg,rgba(20,31,73,0.05)_0%,rgba(20,31,73,0.1)_100%)]">
                    <div class="w-10 h-10 flex items-center justify-center rounded-2xl bg-[#141F49] text-white">
                        <i class="fa-solid fa-briefcase text-sm"></i>
                    </div>
                    <h3 class="mt-4 font-extrabold text-[20px] text-[#101828]">
                        Real-world Projects
                    </h3>
                    <p class="mt-2 text-[14px] font-medium text-black leading-[20px]">
                        Work on live campaigns and case studies from real businesses.
                    </p>
                </div>
                <div class="p-5 rounded-2xl border 
						border-[rgba(224,245,31,0.4)]
						bg-[linear-gradient(135deg,rgba(224,245,31,0.1)_0%,rgba(224,245,31,0.2)_100%)]">
                    <div class="w-10 h-10 flex items-center justify-center rounded-2xl bg-[#E0F51F] text-[#141F49]">
                        <i class="fa-solid fa-rocket text-sm"></i>
                    </div>
                    <h3 class="mt-4 font-extrabold text-[20px] text-[#101828] leading-tight">
                        Career-focused Curriculum
                    </h3>
                    <p class="mt-2 text-[14px] font-medium text-black leading-[20px]">
                        Every module designed to make you job-ready from day one.
                    </p>
                </div>
            </div>
        </div>
    </section>
    <section class="py-10 md:py-15 bg-[#F9FAFB]">
        <div class="max-w-[1200px] mx-auto px-4">
            <div class="text-center max-w-[700px] mx-auto">
                <h2 class="text-[28px] md:text-[2.7rem] font-extrabold leading-tight">
                    <span class="text-[#101828]">Our</span>
                    <span class="text-[#019FF5]">Impact</span>
                </h2>
                <p class="text-[#4A5565] mt-2.5 text-[14px] md:text-[1.1rem]">
                    Numbers that speak for themselves
                </p>
            </div>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-5 mt-12 ">
                <div class="bg-white rounded-2xl p-6 shadow-sm z-10">
                    <h3 class="text-[28px] md:text-[40px] font-extrabold text-[#019FF5]">
                        5000+
                    </h3>
                    <p class="mt-2 text-[16px] font-bold text-[#101828]">
                        Students Trained
                    </p>
                    <span class="text-[12px] text-[#4A5565]">
                        Across both verticals
                    </span>
                </div>
                <div class="bg-[linear-gradient(135deg,#141F49,#162350,#182657,#1A2A5E)] 
						rounded-2xl p-6 shadow-sm text-white z-10">
                    <h3 class="text-[28px] md:text-[40px] font-extrabold text-[#E0F51F]">
                        100+
                    </h3>
                    <p class="mt-2 text-[16px] font-bold">
                        Industry Partners
                    </p>
                    <span class="text-[12px] text-white/70">
                        Leading companies
                    </span>
                </div>
                <div class="bg-white rounded-2xl p-6 shadow-sm z-10">
                    <h3 class="text-[28px] md:text-[40px] font-extrabold text-[#1AD88E]">
                        95%
                    </h3>
                    <p class="mt-2 text-[16px] font-bold text-[#101828]">
                        Placement Support
                    </p>
                    <span class="text-[12px] text-[#4A5565]">
                        Career assistance rate
                    </span>
                </div>
                <div class="bg-[linear-gradient(135deg,#019FF5,#019AEE,#0195E7,#0190E0,#018BD9,#0189D6)] 
						rounded-2xl p-6 shadow-sm text-white z-10">
                    <h3 class="text-[28px] md:text-[40px] font-extrabold">
                        2
                    </h3>
                    <p class="mt-2 text-[16px] font-bold">
                        Learning Verticals
                    </p>
                    <span class="text-[12px] text-white/80">
                        Digital + Sports
                    </span>
                </div>
            </div>
        </div>
    </section>
    <?php include 'common/footer.php'; ?>

</body>

</html>