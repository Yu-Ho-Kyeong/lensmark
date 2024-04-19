<!-- ====== Modal Section Start -->
<section x-data="{modalOpen: false}" class="modal-section" style="display: none;">
   <div x-show="modalOpen" x-transition class="fixed top-0 left-0 flex items-center justify-center w-full h-full min-h-screen px-4 py-5 bg-dark/90">
      <div @click.outside="modalOpen = false" class="w-full max-w-[570px] rounded-[20px] bg-white dark:bg-dark-2 py-12 px-8 text-center md:py-[60px] md:px-[70px]">
         <h3 class="pb-[18px] text-xl font-semibold text-dark dark:text-white sm:text-2xl" >
            Your Message Sent Successfully
         </h3>
         <span class="mx-auto mb-6 inline-block h-1 w-[90px] rounded bg-primary" ></span>
         <p class="mb-10 text-base leading-relaxed text-body-color dark:text-dark-6" >
            Lorem Ipsum is simply dummy text of the printing and typesetting
            industry. Lorem Ipsum has been the industry's standard dummy text
            ever since
         </p>
         <div class="flex flex-wrap -mx-3">
            <div class="w-1/2 px-3">
               <button @click="modalOpen = false" class="block w-full p-3 text-base font-medium text-center transition border rounded-md border-stroke text-dark dark:text-white hover:border-red-600 hover:bg-red-600 hover:text-white">
                Cancel
               </button>
            </div>
            <div class="w-1/2 px-3">
               <button class="block w-full p-3 text-base font-medium text-center text-white transition border rounded-md border-primary bg-primary hover:bg-blue-dark">
                save
               </button>
            </div>
         </div>
      </div>
   </div>
</section>
<!-- ====== Modal Section End -->
