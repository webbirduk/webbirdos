<?php
/**
 * Template Name: Contact Us Page
 * The template for displaying the dedicated Contact Us page.
 */

get_header(); ?>

<main class="pt-12 pb-32 px-4 sm:px-8 max-w-7xl mx-auto space-y-16 sm:space-y-24">

    <section id="contact-hero" class="mt-4 sm:mt-10">
        <div class="os-window glass rounded-2xl overflow-hidden animate-in fade-in slide-in-from-bottom-10 duration-1000 shadow-2xl">
            <div class="h-8 bg-gray-200/50 flex items-center px-4 space-x-2 border-b border-gray-300/30">
                <div class="w-3 h-3 rounded-full bg-red-400"></div>
                <div class="w-3 h-3 rounded-full bg-yellow-400"></div>
                <div class="w-3 h-3 rounded-full bg-green-400"></div>
                <div class="flex-grow text-center text-[10px] text-gray-500 font-mono uppercase tracking-widest">WebBird — Connect With Us</div>
            </div>
            
            <div class="p-8 sm:p-16 lg:p-20 flex flex-col lg:flex-row items-center gap-16">
                <div class="lg:w-1/2 text-center lg:text-left">
                    <h2 class="text-blue-600 font-black text-xs uppercase tracking-[0.3em] mb-4">Get In Touch</h2>
                    <h1 class="text-3xl sm:text-5xl lg:text-6xl font-black text-slate-900 leading-tight mb-8 tracking-tighter">
                        Let's build your <br><span class="text-blue-600">success story.</span>
                    </h1>
                    <p class="text-lg text-slate-600 leading-relaxed italic border-l-4 border-blue-500 pl-6 mb-12">
                        Whether you have a specific project in mind or just want to explore the possibilities, our London-based team is ready to help you navigate the digital landscape.
                    </p>
                    
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-8 text-left">
                        <div class="space-y-2">
                            <h4 class="text-[10px] font-black text-slate-400 uppercase tracking-widest">Our Office</h4>
                            <p class="text-sm font-bold text-slate-800">Halley Rd, London E12 6UB</p>
                        </div>
                        <div class="space-y-2">
                            <h4 class="text-[10px] font-black text-slate-400 uppercase tracking-widest">Email Us</h4>
                            <a href="mailto:hi@webbird.co.uk" class="text-sm font-bold text-blue-600 hover:underline">hi@webbird.co.uk</a>
                        </div>
                        <div class="space-y-2">
                            <h4 class="text-[10px] font-black text-slate-400 uppercase tracking-widest">WhatsApp</h4>
                            <a href="https://wa.me/447557126699" target="_blank" class="text-sm font-bold text-green-600 hover:underline">+44 7557 126699</a>
                        </div>
                        <div class="space-y-2">
                            <h4 class="text-[10px] font-black text-slate-400 uppercase tracking-widest">Response Time</h4>
                            <p class="text-sm font-bold text-slate-800">Within 24 Hours</p>
                        </div>
                    </div>
                </div>

                <div class="lg:w-1/2 w-full">
                    <div class="os-window bg-white/40 backdrop-blur-xl rounded-3xl border border-white/60 p-8 sm:p-12 shadow-2xl relative">
                        <form id="webbird-page-contact-form" class="space-y-6">
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                <div class="space-y-2">
                                    <label class="text-[10px] font-black text-slate-400 uppercase ml-2">Full Name</label>
                                    <input type="text" name="name" placeholder="John Doe" required class="w-full px-5 py-4 rounded-2xl glass border border-white/40 focus:ring-2 focus:ring-blue-500 outline-none text-sm transition-all">
                                </div>
                                <div class="space-y-2">
                                    <label class="text-[10px] font-black text-slate-400 uppercase ml-2">Email Address</label>
                                    <input type="email" name="email" placeholder="john@example.com" required class="w-full px-5 py-4 rounded-2xl glass border border-white/40 focus:ring-2 focus:ring-blue-500 outline-none text-sm transition-all">
                                </div>
                            </div>
                            
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                <div class="space-y-2">
                                    <label class="text-[10px] font-black text-slate-400 uppercase ml-2">Phone Number</label>
                                    <input type="tel" name="phone" placeholder="+44 000 0000 000" required class="w-full px-5 py-4 rounded-2xl glass border border-white/40 focus:ring-2 focus:ring-blue-500 outline-none text-sm transition-all">
                                </div>
                                <div class="space-y-2">
                                    <label class="text-[10px] font-black text-slate-400 uppercase ml-2">Service Needed</label>
                                    <select name="service" required class="w-full px-5 py-4 rounded-2xl glass border border-white/40 focus:ring-2 focus:ring-blue-500 outline-none text-sm appearance-none cursor-pointer transition-all">
                                        <option value="" disabled selected>Select Service</option>
                                        <option value="Web Design">Web Design</option>
                                        <option value="E-Commerce">E-Commerce</option>
                                        <option value="App Development">App Development</option>
                                        <option value="SEO">Technical SEO</option>
                                        <option value="Other">Other Query</option>
                                    </select>
                                </div>
                            </div>

                            <div class="space-y-2">
                                <label class="text-[10px] font-black text-slate-400 uppercase ml-2">Message</label>
                                <textarea name="message" rows="5" placeholder="Tell us about your project..." required class="w-full px-5 py-4 rounded-2xl glass border border-white/40 focus:ring-2 focus:ring-blue-500 outline-none text-sm transition-all resize-none"></textarea>
                            </div>

                            <button type="submit" class="w-full py-5 bg-blue-600 text-white rounded-2xl font-black uppercase tracking-widest text-xs shadow-xl shadow-blue-500/20 hover:bg-blue-700 active:scale-95 transition-all flex items-center justify-center">
                                <span id="page-submit-text">Send Message</span>
                                <i id="page-submit-spinner" class="fas fa-spinner fa-spin ml-3 hidden"></i>
                            </button>
                            <p id="page-form-response" class="text-center text-xs font-bold hidden mt-4"></p>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="location-map">
        <div class="os-window glass rounded-[1rem] border border-white/40 overflow-hidden h-[400px] relative shadow-xl">
            <div class="h-8 bg-gray-200/50 flex items-center px-4 space-x-2 border-b border-gray-300/30 absolute top-0 left-0 right-0 z-10">
                <div class="w-2.5 h-2.5 rounded-full bg-red-400"></div>
                <div class="w-2.5 h-2.5 rounded-full bg-yellow-400"></div>
                <div class="w-2.5 h-2.5 rounded-full bg-green-400"></div>
                <div class="flex-grow text-center text-[9px] text-gray-400 font-mono uppercase tracking-widest">Find Us — London E12 6UB</div>
            </div>
            
            <iframe 
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2482.0!2d0.0!3d51.5!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47d8a70000000000%3A0x0!2sHalley%20Rd%2C%20London%20E12%206UB!5e0!3m2!1sen!2suk!4v1234567890" 
                class="w-full h-full border-0 grayscale hover:grayscale-0 transition-all duration-700" 
                allowfullscreen="" 
                loading="lazy">
            </iframe>
        </div>
    </section>

</main>

<script>
    // Duplicate Form Logic for the page template
    document.getElementById('webbird-page-contact-form')?.addEventListener('submit', function(e) {
        e.preventDefault();
        const form = this;
        const text = document.getElementById('page-submit-text');
        const spinner = document.getElementById('page-submit-spinner');
        const response = document.getElementById('page-form-response');

        text.textContent = 'Processing...';
        spinner.classList.remove('hidden');

        const formData = new FormData(form);
        formData.append('action', 'webbird_contact'); // Uses the existing AJAX handler

        fetch('<?php echo admin_url('admin-ajax.php'); ?>', {
            method: 'POST',
            body: formData
        })
        .then(res => res.json())
        .then(data => {
            if(data.success) {
                response.textContent = "Message sent successfully! We will contact you soon.";
                response.className = "text-center text-xs font-bold text-green-600 block mt-4";
                form.reset();
            } else {
                throw new Error();
            }
        })
        .catch(() => {
            response.textContent = "Submission failed. Please check your connection.";
            response.className = "text-center text-xs font-bold text-red-600 block mt-4";
        })
        .finally(() => {
            text.textContent = 'Send Message';
            spinner.classList.add('hidden');
        });
    });
</script>

<?php get_footer(); ?>