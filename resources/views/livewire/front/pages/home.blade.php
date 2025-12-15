<div>
    <livewire:front.components.hero />


    <!-- About Us Section -->
    <section id="about" class="py-24 min-h-screen flex items-center bg-slate-50 relative overflow-hidden">
        <!-- Decor -->
        <div class="absolute inset-0 opacity-40 pointer-events-none"
            style="background-image: radial-gradient(#cbd5e1 1px, transparent 1px); background-size: 32px 32px;"></div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10 w-full">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
                <!-- Content -->
                <div class="order-2 lg:order-1">
                    <div
                        class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-white border border-slate-200 text-indigo-600 text-xs font-bold uppercase tracking-wide mb-6 shadow-sm">
                        <span class="w-1.5 h-1.5 rounded-full bg-indigo-600"></span>
                        About Our Agency
                    </div>
                    <h2 class="text-4xl lg:text-5xl font-bold tracking-tight text-slate-900 mb-6 leading-tight">
                        Crafting digital experiences that <span class="text-indigo-600">inspire</span> and <span
                            class="text-indigo-600">convert</span>.
                    </h2>
                    <p class="text-lg text-slate-600 leading-relaxed mb-6">
                        We are more than just a digital agency; we are your strategic partner in growth. Founded on the
                        belief that technology should solve real-world problems, we combine creative design with
                        engineering excellence.
                    </p>
                    <p class="text-lg text-slate-600 leading-relaxed mb-8">
                        Our team of expert developers, designers, and strategists work collaboratively to transform your
                        vision into a robust digital reality. We don't settle for "good enough"—we aim for exceptional.
                    </p>

                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                        <div class="flex items-start gap-4">
                            <div
                                class="w-12 h-12 rounded-xl bg-white shadow-md text-indigo-600 flex items-center justify-center shrink-0">
                                <i class="fa-solid fa-lightbulb text-xl"></i>
                            </div>
                            <div>
                                <h4 class="font-bold text-slate-900">Innovative Strategy</h4>
                                <p class="text-sm text-slate-500 mt-1">Forward-thinking solutions for modern challenges.
                                </p>
                            </div>
                        </div>
                        <div class="flex items-start gap-4">
                            <div
                                class="w-12 h-12 rounded-xl bg-white shadow-md text-purple-600 flex items-center justify-center shrink-0">
                                <i class="fa-solid fa-trophy text-xl"></i>
                            </div>
                            <div>
                                <h4 class="font-bold text-slate-900">Award Winning</h4>
                                <p class="text-sm text-slate-500 mt-1">Recognized excellence in design and code.</p>
                            </div>
                        </div>
                    </div>

                    <div class="mt-10">
                        <a href="{{ route('contact') }}"
                            class="inline-flex items-center justify-center px-8 py-3 text-base font-semibold text-white bg-indigo-600 rounded-full hover:bg-indigo-700 transition-all shadow-lg hover:shadow-indigo-200">
                            Get in Touch
                        </a>
                    </div>
                </div>

                <!-- Visual -->
                <div class="order-1 lg:order-2 relative">
                    <div
                        class="relative rounded-[2.5rem] overflow-hidden shadow-2xl bg-white aspect-[4/3] group ring-1 ring-slate-900/5">
                        <img src="https://images.unsplash.com/photo-1522071820081-009f0129c71c?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80"
                            alt="Team working"
                            class="absolute inset-0 w-full h-full object-cover transition-transform duration-700 group-hover:scale-105">
                        <div class="absolute inset-0 bg-indigo-900/20 group-hover:bg-indigo-900/10 transition-colors">
                        </div>

                        <!-- Floating Experience Badge -->
                        <div class="absolute bottom-8 left-8 bg-white/95 backdrop-blur-sm p-5 rounded-2xl shadow-xl border border-white/50 animate-bounce"
                            style="animation-duration: 3s;">
                            <div class="flex items-center gap-4">
                                <div class="bg-indigo-100 p-3 rounded-full text-indigo-600">
                                    <i class="fa-solid fa-calendar-check text-xl"></i>
                                </div>
                                <div>
                                    <p class="text-xs font-bold text-slate-500 uppercase tracking-wider">Experience</p>
                                    <p class="text-2xl font-bold text-slate-900">15+ Years</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Why Choose Us Section -->
    <section class="py-24 min-h-screen flex items-center bg-indigo-200 relative overflow-hidden">
        <!-- Background blob -->
        <div
            class="absolute top-0 right-0 -mr-40 -mt-40 w-[800px] h-[800px] bg-blue-50/50 rounded-full blur-3xl opacity-60 pointer-events-none">
        </div>
        <div
            class="absolute bottom-0 left-0 -ml-40 -mb-40 w-[600px] h-[600px] bg-indigo-50/50 rounded-full blur-3xl opacity-60 pointer-events-none">
        </div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10 w-full">
            <div class="text-center mb-20 max-w-3xl mx-auto">
                <div
                    class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-blue-50 text-blue-600 text-xs font-bold uppercase tracking-wide mb-4">
                    Why Choose Us
                </div>
                <h2 class="text-4xl font-bold tracking-tight text-slate-900 sm:text-5xl mb-6">Built for <span
                        class="border-b-4 border-blue-200">Growth</span>, Designed for <span
                        class="border-b-4 border-indigo-200">Scale</span>.</h2>
                <p class="text-lg text-slate-600">
                    We don't just deliver a project; we deliver a competitive advantage. Here is why leading companies
                    trust us with their digital presence.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Feature 1 -->
                <div
                    class="group p-8 rounded-3xl bg-slate-50 border border-slate-100 hover:bg-white hover:shadow-xl hover:shadow-indigo-100/50 transition-all duration-300 relative overflow-hidden">
                    <div
                        class="absolute top-0 right-0 w-24 h-24 bg-indigo-100 rounded-bl-full -mr-4 -mt-4 opacity-0 group-hover:opacity-100 transition-opacity">
                    </div>

                    <div
                        class="w-16 h-16 rounded-2xl bg-white border border-slate-200 shadow-sm flex items-center justify-center text-indigo-600 text-2xl mb-6 relative z-10 group-hover:scale-110 transition-transform duration-300">
                        <i class="fa-solid fa-rocket"></i>
                    </div>
                    <h3 class="text-xl font-bold text-slate-900 mb-3 relative z-10">Accelerated Growth</h3>
                    <p class="text-slate-600 relative z-10">We engineer solutions that speed up your time-to-market and
                        maximize your operational efficiency from day one.</p>
                </div>

                <!-- Feature 2 -->
                <div
                    class="group p-8 rounded-3xl bg-slate-50 border border-slate-100 hover:bg-white hover:shadow-xl hover:shadow-blue-100/50 transition-all duration-300 relative overflow-hidden">
                    <div
                        class="absolute top-0 right-0 w-24 h-24 bg-blue-100 rounded-bl-full -mr-4 -mt-4 opacity-0 group-hover:opacity-100 transition-opacity">
                    </div>
                    <div
                        class="w-16 h-16 rounded-2xl bg-white border border-slate-200 shadow-sm flex items-center justify-center text-blue-600 text-2xl mb-6 relative z-10 group-hover:scale-110 transition-transform duration-300">
                        <i class="fa-solid fa-chart-pie"></i>
                    </div>
                    <h3 class="text-xl font-bold text-slate-900 mb-3 relative z-10">Data-Driven Results</h3>
                    <p class="text-slate-600 relative z-10">No guesswork. We use advanced analytics and user data to
                        make informed decisions that drive real engagement.</p>
                </div>

                <!-- Feature 3 -->
                <div
                    class="group p-8 rounded-3xl bg-slate-50 border border-slate-100 hover:bg-white hover:shadow-xl hover:shadow-teal-100/50 transition-all duration-300 relative overflow-hidden">
                    <div
                        class="absolute top-0 right-0 w-24 h-24 bg-teal-100 rounded-bl-full -mr-4 -mt-4 opacity-0 group-hover:opacity-100 transition-opacity">
                    </div>
                    <div
                        class="w-16 h-16 rounded-2xl bg-white border border-slate-200 shadow-sm flex items-center justify-center text-teal-600 text-2xl mb-6 relative z-10 group-hover:scale-110 transition-transform duration-300">
                        <i class="fa-solid fa-users-viewfinder"></i>
                    </div>
                    <h3 class="text-xl font-bold text-slate-900 mb-3 relative z-10">User-Centric Design</h3>
                    <p class="text-slate-600 relative z-10">We prioritize the user journey, creating intuitive
                        interfaces that delight your customers and keep them coming back.</p>
                </div>

                <!-- Feature 4 -->
                <div
                    class="group p-8 rounded-3xl bg-slate-50 border border-slate-100 hover:bg-white hover:shadow-xl hover:shadow-purple-100/50 transition-all duration-300 relative overflow-hidden">
                    <div
                        class="absolute top-0 right-0 w-24 h-24 bg-purple-100 rounded-bl-full -mr-4 -mt-4 opacity-0 group-hover:opacity-100 transition-opacity">
                    </div>
                    <div
                        class="w-16 h-16 rounded-2xl bg-white border border-slate-200 shadow-sm flex items-center justify-center text-purple-600 text-2xl mb-6 relative z-10 group-hover:scale-110 transition-transform duration-300">
                        <i class="fa-solid fa-shield-cat"></i>
                    </div>
                    <h3 class="text-xl font-bold text-slate-900 mb-3 relative z-10">Ironclad Security</h3>
                    <p class="text-slate-600 relative z-10">Security is not an afterthought. We build with a
                        security-first mindset to protect your data and your reputation.</p>
                </div>

                <!-- Feature 5 -->
                <div
                    class="group p-8 rounded-3xl bg-slate-50 border border-slate-100 hover:bg-white hover:shadow-xl hover:shadow-orange-100/50 transition-all duration-300 relative overflow-hidden">
                    <div
                        class="absolute top-0 right-0 w-24 h-24 bg-orange-100 rounded-bl-full -mr-4 -mt-4 opacity-0 group-hover:opacity-100 transition-opacity">
                    </div>
                    <div
                        class="w-16 h-16 rounded-2xl bg-white border border-slate-200 shadow-sm flex items-center justify-center text-orange-600 text-2xl mb-6 relative z-10 group-hover:scale-110 transition-transform duration-300">
                        <i class="fa-solid fa-headset"></i>
                    </div>
                    <h3 class="text-xl font-bold text-slate-900 mb-3 relative z-10">24/7 Expert Support</h3>
                    <p class="text-slate-600 relative z-10">Our dedicated support team is always ready to assist you,
                        ensuring your digital operations run smoothly around the clock.</p>
                </div>

                <!-- Feature 6 -->
                <div
                    class="group p-8 rounded-3xl bg-slate-50 border border-slate-100 hover:bg-white hover:shadow-xl hover:shadow-pink-100/50 transition-all duration-300 relative overflow-hidden">
                    <div
                        class="absolute top-0 right-0 w-24 h-24 bg-pink-100 rounded-bl-full -mr-4 -mt-4 opacity-0 group-hover:opacity-100 transition-opacity">
                    </div>
                    <div
                        class="w-16 h-16 rounded-2xl bg-white border border-slate-200 shadow-sm flex items-center justify-center text-pink-600 text-2xl mb-6 relative z-10 group-hover:scale-110 transition-transform duration-300">
                        <i class="fa-solid fa-infinity"></i>
                    </div>
                    <h3 class="text-xl font-bold text-slate-900 mb-3 relative z-10">Scalable Architecture</h3>
                    <p class="text-slate-600 relative z-10">Our solutions are built to grow with you. Easily handle
                        increased traffic and new features without missing a beat.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Core Values Section (Nilai Perusahaan) -->
    <section class="py-24 bg-slate-50 relative">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <span class="text-indigo-600 font-bold tracking-wider uppercase text-sm">Our Philosophy</span>
                <h2 class="text-3xl md:text-4xl font-bold text-slate-900 mt-2">Core Values</h2>
                <p class="text-slate-600 mt-4 max-w-2xl mx-auto">The principles that guide every decision we make.</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 lg:grid-cols-5 gap-8">
                <!-- Value 1 -->
                <div
                    class="bg-white p-6 rounded-2xl shadow-sm border border-slate-100 text-center hover:-translate-y-1 transition-transform duration-300">
                    <div
                        class="w-12 h-12 mx-auto bg-indigo-50 text-indigo-600 rounded-full flex items-center justify-center mb-4">
                        <i class="fa-solid fa-handshake"></i>
                    </div>
                    <h3 class="font-bold text-slate-900 mb-2">Integrity</h3>
                    <p class="text-sm text-slate-500">Honesty in every action.</p>
                </div>
                <!-- Value 2 -->
                <div
                    class="bg-white p-6 rounded-2xl shadow-sm border border-slate-100 text-center hover:-translate-y-1 transition-transform duration-300">
                    <div
                        class="w-12 h-12 mx-auto bg-blue-50 text-blue-600 rounded-full flex items-center justify-center mb-4">
                        <i class="fa-solid fa-lightbulb"></i>
                    </div>
                    <h3 class="font-bold text-slate-900 mb-2">Innovation</h3>
                    <p class="text-sm text-slate-500">Always looking ahead.</p>
                </div>
                <!-- Value 3 -->
                <div
                    class="bg-white p-6 rounded-2xl shadow-sm border border-slate-100 text-center hover:-translate-y-1 transition-transform duration-300">
                    <div
                        class="w-12 h-12 mx-auto bg-teal-50 text-teal-600 rounded-full flex items-center justify-center mb-4">
                        <i class="fa-solid fa-briefcase"></i>
                    </div>
                    <h3 class="font-bold text-slate-900 mb-2">Professionalism</h3>
                    <p class="text-sm text-slate-500">Excellence in conduct.</p>
                </div>
                <!-- Value 4 -->
                <div
                    class="bg-white p-6 rounded-2xl shadow-sm border border-slate-100 text-center hover:-translate-y-1 transition-transform duration-300">
                    <div
                        class="w-12 h-12 mx-auto bg-orange-50 text-orange-600 rounded-full flex items-center justify-center mb-4">
                        <i class="fa-regular fa-face-smile"></i>
                    </div>
                    <h3 class="font-bold text-slate-900 mb-2">Customer First</h3>
                    <p class="text-sm text-slate-500">Your success is ours.</p>
                </div>
                <!-- Value 5 -->
                <div
                    class="bg-white p-6 rounded-2xl shadow-sm border border-slate-100 text-center hover:-translate-y-1 transition-transform duration-300">
                    <div
                        class="w-12 h-12 mx-auto bg-purple-50 text-purple-600 rounded-full flex items-center justify-center mb-4">
                        <i class="fa-solid fa-people-group"></i>
                    </div>
                    <h3 class="font-bold text-slate-900 mb-2">Collaboration</h3>
                    <p class="text-sm text-slate-500">Stronger together.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section class="py-24 bg-indigo-200 relative overflow-hidden" id="services">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="text-center mb-16">
                <div
                    class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-indigo-50 text-indigo-600 text-xs font-bold uppercase tracking-wide mb-4">
                    Our Expertise
                </div>
                <h2 class="text-3xl md:text-5xl font-bold text-slate-900">Premium Services</h2>
                <p class="text-slate-600 mt-4 max-w-2xl mx-auto">Comprehensive solutions tailored to your business
                    needs.</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Service 1 -->
                <div
                    class="group relative bg-white p-8 rounded-3xl border border-slate-100 shadow-lg hover:shadow-2xl transition-all duration-300 overflow-hidden">
                    <div class="absolute top-0 right-0 p-4 opacity-10 group-hover:opacity-20 transition-opacity">
                        <i
                            class="fa-solid fa-laptop-code text-9xl text-indigo-600 transform translate-x-1/4 -translate-y-1/4"></i>
                    </div>
                    <div
                        class="w-14 h-14 bg-indigo-600 rounded-2xl flex items-center justify-center text-white text-2xl mb-6 shadow-lg shadow-indigo-600/30">
                        <i class="fa-solid fa-code"></i>
                    </div>
                    <h3 class="text-2xl font-bold text-slate-900 mb-4">Web Development</h3>
                    <p class="text-slate-600 mb-6">Custom websites and web apps built with modern technologies like
                        Laravel, React, and Vue.js.</p>
                    <ul class="space-y-2 mb-8 text-sm text-slate-500">
                        <li class="flex items-center gap-2"><i class="fa-solid fa-check text-indigo-500"></i> Full
                            Stack Development</li>
                        <li class="flex items-center gap-2"><i class="fa-solid fa-check text-indigo-500"></i>
                            E-commerce Solutions</li>
                        <li class="flex items-center gap-2"><i class="fa-solid fa-check text-indigo-500"></i> API
                            Integration</li>
                    </ul>
                    <a href="#"
                        class="inline-flex items-center text-indigo-600 font-semibold group-hover:gap-2 transition-all">Learn
                        More <i class="fa-solid fa-arrow-right ml-1"></i></a>
                </div>

                <!-- Service 2 -->
                <div
                    class="group relative bg-slate-900 p-8 rounded-3xl border border-slate-800 shadow-xl hover:shadow-2xl hover:shadow-indigo-500/20 transition-all duration-300 overflow-hidden text-white">
                    <div class="absolute top-0 right-0 p-4 opacity-10 group-hover:opacity-20 transition-opacity">
                        <i
                            class="fa-solid fa-mobile-screen text-9xl text-white transform translate-x-1/4 -translate-y-1/4"></i>
                    </div>
                    <div
                        class="w-14 h-14 bg-blue-500 rounded-2xl flex items-center justify-center text-white text-2xl mb-6 shadow-lg shadow-blue-500/30">
                        <i class="fa-solid fa-mobile-button"></i>
                    </div>
                    <h3 class="text-2xl font-bold mb-4">Mobile Apps</h3>
                    <p class="text-slate-300 mb-6">Native and cross-platform mobile applications for iOS and Android
                        that engage users.</p>
                    <ul class="space-y-2 mb-8 text-sm text-slate-400">
                        <li class="flex items-center gap-2"><i class="fa-solid fa-check text-blue-400"></i> Flutter &
                            React Native</li>
                        <li class="flex items-center gap-2"><i class="fa-solid fa-check text-blue-400"></i> UI/UX
                            Design</li>
                        <li class="flex items-center gap-2"><i class="fa-solid fa-check text-blue-400"></i> App Store
                            Optimization</li>
                    </ul>
                    <a href="#"
                        class="inline-flex items-center text-blue-400 font-semibold group-hover:gap-2 transition-all">Learn
                        More <i class="fa-solid fa-arrow-right ml-1"></i></a>
                </div>

                <!-- Service 3 -->
                <div
                    class="group relative bg-white p-8 rounded-3xl border border-slate-100 shadow-lg hover:shadow-2xl transition-all duration-300 overflow-hidden">
                    <div class="absolute top-0 right-0 p-4 opacity-10 group-hover:opacity-20 transition-opacity">
                        <i
                            class="fa-solid fa-bullhorn text-9xl text-orange-600 transform translate-x-1/4 -translate-y-1/4"></i>
                    </div>
                    <div
                        class="w-14 h-14 bg-orange-500 rounded-2xl flex items-center justify-center text-white text-2xl mb-6 shadow-lg shadow-orange-500/30">
                        <i class="fa-solid fa-magnifying-glass-chart"></i>
                    </div>
                    <h3 class="text-2xl font-bold text-slate-900 mb-4">Digital Marketing</h3>
                    <p class="text-slate-600 mb-6">Data-driven marketing strategies to increase your visibility and
                        drive conversions.</p>
                    <ul class="space-y-2 mb-8 text-sm text-slate-500">
                        <li class="flex items-center gap-2"><i class="fa-solid fa-check text-orange-500"></i> SEO &
                            SEM</li>
                        <li class="flex items-center gap-2"><i class="fa-solid fa-check text-orange-500"></i> Social
                            Media Mgmt</li>
                        <li class="flex items-center gap-2"><i class="fa-solid fa-check text-orange-500"></i> Content
                            Strategy</li>
                    </ul>
                    <a href="#"
                        class="inline-flex items-center text-orange-600 font-semibold group-hover:gap-2 transition-all">Learn
                        More <i class="fa-solid fa-arrow-right ml-1"></i></a>
                </div>
            </div>
        </div>
    </section>

    <!-- Portfolio Section -->
    <section class="py-24 bg-slate-50 relative" id="portfolio">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex flex-col md:flex-row justify-between items-end mb-12 gap-6">
                <div class="text-left">
                    <span class="text-indigo-600 font-bold tracking-wider uppercase text-sm">Our Work</span>
                    <h2 class="text-3xl md:text-4xl font-bold text-slate-900 mt-2">Selected Projects</h2>
                </div>
                <a href="#"
                    class="px-6 py-2 rounded-full border border-slate-300 text-slate-700 font-medium hover:bg-slate-900 hover:text-white transition-all">View
                    All Work</a>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Project 1 -->
                <div class="group rounded-2xl overflow-hidden bg-white shadow-md hover:shadow-xl transition-all">
                    <div class="relative h-64 overflow-hidden">
                        <div class="absolute inset-0 bg-slate-200 animate-pulse"></div> <!-- Placeholder for image -->
                        <div
                            class="absolute inset-0 bg-black/50 opacity-0 group-hover:opacity-100 transition-opacity flex items-center justify-center">
                            <span class="text-white font-semibold border border-white px-4 py-2 rounded-full">View Case
                                Study</span>
                        </div>
                    </div>
                    <div class="p-6">
                        <div class="text-xs font-bold text-indigo-600 uppercase mb-2">Fintech</div>
                        <h3 class="text-xl font-bold text-slate-900 mb-2">PayFast App</h3>
                        <p class="text-slate-500 text-sm mb-4">A seamless mobile payment solution for the modern
                            economy.</p>
                        <div class="text-xs text-slate-400">2024</div>
                    </div>
                </div>

                <!-- Project 2 -->
                <div class="group rounded-2xl overflow-hidden bg-white shadow-md hover:shadow-xl transition-all">
                    <div class="relative h-64 overflow-hidden">
                        <div class="absolute inset-0 bg-slate-300 animate-pulse"></div>
                        <div
                            class="absolute inset-0 bg-black/50 opacity-0 group-hover:opacity-100 transition-opacity flex items-center justify-center">
                            <span class="text-white font-semibold border border-white px-4 py-2 rounded-full">View Case
                                Study</span>
                        </div>
                    </div>
                    <div class="p-6">
                        <div class="text-xs font-bold text-blue-600 uppercase mb-2">E-Commerce</div>
                        <h3 class="text-xl font-bold text-slate-900 mb-2">Shopify Plus Store</h3>
                        <p class="text-slate-500 text-sm mb-4">High-conversion online store for a fashion brand.</p>
                        <div class="text-xs text-slate-400">2024</div>
                    </div>
                </div>

                <!-- Project 3 -->
                <div class="group rounded-2xl overflow-hidden bg-white shadow-md hover:shadow-xl transition-all">
                    <div class="relative h-64 overflow-hidden">
                        <div class="absolute inset-0 bg-slate-200 animate-pulse"></div>
                        <div
                            class="absolute inset-0 bg-black/50 opacity-0 group-hover:opacity-100 transition-opacity flex items-center justify-center">
                            <span class="text-white font-semibold border border-white px-4 py-2 rounded-full">View Case
                                Study</span>
                        </div>
                    </div>
                    <div class="p-6">
                        <div class="text-xs font-bold text-teal-600 uppercase mb-2">Healthcare</div>
                        <h3 class="text-xl font-bold text-slate-900 mb-2">MediCare Portal</h3>
                        <p class="text-slate-500 text-sm mb-4">Patient management system for private clinics.</p>
                        <div class="text-xs text-slate-400">2023</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials Section -->
    <section class="py-24 bg-indigo-200">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <span class="text-indigo-600 font-bold tracking-wider uppercase text-sm">Testimonials</span>
                <h2 class="text-3xl md:text-5xl font-bold text-slate-900 mt-2">Trusted by Leaders</h2>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Testimonial 1 -->
                <div class="p-8 rounded-3xl bg-slate-50 border border-slate-100 relative">
                    <i class="fa-solid fa-quote-left text-4xl text-indigo-200 absolute top-6 left-6"></i>
                    <p class="text-slate-700 italic relative z-10 pt-8 mb-6">"Start working with AlphaTech was the best
                        decision for our company. Their attention to detail and technical expertise is unmatched."</p>
                    <div class="flex items-center gap-4">
                        <div class="w-12 h-12 rounded-full bg-slate-300"></div> <!-- Avatar placeholder -->
                        <div>
                            <h4 class="font-bold text-slate-900">Sarah Johnson</h4>
                            <p class="text-xs text-slate-500">CEO, TechFlow Inc.</p>
                        </div>
                    </div>
                </div>
                <!-- Testimonial 2 -->
                <div class="p-8 rounded-3xl bg-slate-50 border border-slate-100 relative">
                    <i class="fa-solid fa-quote-left text-4xl text-blue-200 absolute top-6 left-6"></i>
                    <p class="text-slate-700 italic relative z-10 pt-8 mb-6">"They delivered our mobile app on time and
                        within budget. The user feedback has been incredibly positive since launch."</p>
                    <div class="flex items-center gap-4">
                        <div class="w-12 h-12 rounded-full bg-slate-300"></div>
                        <div>
                            <h4 class="font-bold text-slate-900">Michael Smith</h4>
                            <p class="text-xs text-slate-500">Product Manager, GoMobile</p>
                        </div>
                    </div>
                </div>
                <!-- Testimonial 3 -->
                <div class="p-8 rounded-3xl bg-slate-50 border border-slate-100 relative">
                    <i class="fa-solid fa-quote-left text-4xl text-teal-200 absolute top-6 left-6"></i>
                    <p class="text-slate-700 italic relative z-10 pt-8 mb-6">"Professional, responsive, and innovative.
                        The team went above and beyond to ensure our website performed perfectly."</p>
                    <div class="flex items-center gap-4">
                        <div class="w-12 h-12 rounded-full bg-slate-300"></div>
                        <div>
                            <h4 class="font-bold text-slate-900">Amanda Lee</h4>
                            <p class="text-xs text-slate-500">Founder, CreativeStudio</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Team Section -->
    <section class="py-24 bg-slate-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl font-bold text-slate-900">Meet The Minds</h2>
                <p class="text-slate-600 mt-4">The experts behind our success.</p>
            </div>

            <div class="grid grid-cols-2 md:grid-cols-4 gap-8">
                <!-- Member 1 -->
                <div class="text-center group">
                    <div class="w-full aspect-square rounded-2xl bg-white mb-4 shadow-sm overflow-hidden relative">
                        <div class="absolute inset-0 bg-slate-200"></div> <!-- Placeholder -->
                        <div
                            class="absolute inset-0 bg-indigo-900/60 opacity-0 group-hover:opacity-100 transition-opacity flex items-center justify-center gap-4">
                            <a href="#" class="text-white hover:text-indigo-200"><i
                                    class="fa-brands fa-linkedin text-xl"></i></a>
                            <a href="#" class="text-white hover:text-indigo-200"><i
                                    class="fa-brands fa-twitter text-xl"></i></a>
                        </div>
                    </div>
                    <h3 class="font-bold text-slate-900 text-lg">David Chen</h3>
                    <p class="text-indigo-600 text-sm">Lead Developer</p>
                </div>
                <!-- Member 2 -->
                <div class="text-center group">
                    <div class="w-full aspect-square rounded-2xl bg-white mb-4 shadow-sm overflow-hidden relative">
                        <div class="absolute inset-0 bg-slate-200"></div>
                        <div
                            class="absolute inset-0 bg-indigo-900/60 opacity-0 group-hover:opacity-100 transition-opacity flex items-center justify-center gap-4">
                            <a href="#" class="text-white hover:text-indigo-200"><i
                                    class="fa-brands fa-linkedin text-xl"></i></a>
                        </div>
                    </div>
                    <h3 class="font-bold text-slate-900 text-lg">Emily Davis</h3>
                    <p class="text-indigo-600 text-sm">UI/UX Designer</p>
                </div>
                <!-- Member 3 -->
                <div class="text-center group">
                    <div class="w-full aspect-square rounded-2xl bg-white mb-4 shadow-sm overflow-hidden relative">
                        <div class="absolute inset-0 bg-slate-200"></div>
                        <div
                            class="absolute inset-0 bg-indigo-900/60 opacity-0 group-hover:opacity-100 transition-opacity flex items-center justify-center gap-4">
                            <a href="#" class="text-white hover:text-indigo-200"><i
                                    class="fa-brands fa-linkedin text-xl"></i></a>
                        </div>
                    </div>
                    <h3 class="font-bold text-slate-900 text-lg">James Wilson</h3>
                    <p class="text-indigo-600 text-sm">Project Manager</p>
                </div>
                <!-- Member 4 -->
                <div class="text-center group">
                    <div class="w-full aspect-square rounded-2xl bg-white mb-4 shadow-sm overflow-hidden relative">
                        <div class="absolute inset-0 bg-slate-200"></div>
                        <div
                            class="absolute inset-0 bg-indigo-900/60 opacity-0 group-hover:opacity-100 transition-opacity flex items-center justify-center gap-4">
                            <a href="#" class="text-white hover:text-indigo-200"><i
                                    class="fa-brands fa-linkedin text-xl"></i></a>
                        </div>
                    </div>
                    <h3 class="font-bold text-slate-900 text-lg">Sophie Turner</h3>
                    <p class="text-indigo-600 text-sm">Marketing Specialist</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Credibility & Stats (Redesigned) -->
    <section class="py-16 bg-white border-t border-slate-100">
        <div
            class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 flex flex-col md:flex-row items-center justify-between gap-8">
            <div>
                <p class="text-xs font-bold text-slate-400 uppercase tracking-widest mb-2">Legal & Certified</p>
                <div class="flex flex-wrap gap-4 items-center opacity-70 grayscale hover:grayscale-0 transition-all">
                    <!-- Fake Certification Logos -->
                    <span class="font-bold text-slate-800 text-lg border border-slate-200 px-3 py-1 rounded">PT. Alpha
                        Tech Indonesia</span>
                    <span class="font-bold text-slate-800 text-lg border border-slate-200 px-3 py-1 rounded">ISO
                        9001</span>
                </div>
            </div>
            <div class="flex gap-12 text-center md:text-right">
                <div>
                    <div class="text-3xl font-bold text-slate-900">500+</div>
                    <div class="text-xs text-slate-500 uppercase">Clients</div>
                </div>
                <div>
                    <div class="text-3xl font-bold text-slate-900">98%</div>
                    <div class="text-xs text-slate-500 uppercase">Success</div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact / CTA Section -->
    <section class="py-24 bg-slate-900 relative overflow-hidden text-center" id="contact">
        <div class="absolute inset-0 opacity-20 bg-[url('https://www.transparenttextures.com/patterns/cubes.png')]">
        </div>
        <div class="max-w-4xl mx-auto px-4 relative z-10">
            <h2 class="text-4xl md:text-5xl font-bold text-white mb-6">Ready to start your project?</h2>
            <p class="text-indigo-200 text-lg mb-10">Contact us today for a free consultation and let's turn your ideas
                into reality.</p>

            <div class="flex flex-col sm:flex-row items-center justify-center gap-6">
                <a href="#"
                    class="px-8 py-4 bg-indigo-600 text-white rounded-full font-bold hover:bg-indigo-500 transition-all shadow-lg shadow-indigo-900/50">
                    <i class="fa-brands fa-whatsapp mr-2"></i> Chat on WhatsApp
                </a>
                <a href="#"
                    class="px-8 py-4 bg-transparent border border-slate-600 text-white rounded-full font-bold hover:bg-white hover:text-slate-900 transition-all">
                    Email Us
                </a>
            </div>

            <div class="mt-16 grid grid-cols-1 md:grid-cols-3 gap-8 text-slate-400 border-t border-slate-800 pt-12">
                <div>
                    <i class="fa-solid fa-location-dot text-2xl text-white mb-4"></i>
                    <p>Jl. Sudirman No. 123,<br>Jakarta Selatan, Indonesia</p>
                </div>
                <div>
                    <i class="fa-solid fa-envelope text-2xl text-white mb-4"></i>
                    <p>hello@alphatech.id<br>support@alphatech.id</p>
                </div>
                <div>
                    <i class="fa-solid fa-clock text-2xl text-white mb-4"></i>
                    <p>Mon - Fri: 09:00 - 17:00<br>Sat - Sun: Closed</p>
                </div>
            </div>
        </div>
    </section>

</div>
