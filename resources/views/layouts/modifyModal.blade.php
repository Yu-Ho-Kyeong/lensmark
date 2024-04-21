<section x-data="{modalOpen: false}" class="save-modal-section">
    <div class="container py-5 mx-auto">
        <button data-lensmark-id="{{ $LensMark->id }}" @click="modalOpen = true; console.log('modalOpen:', modalOpen)"
            class="save_btn px-6 py-3 text-base font-medium text-white rounded-full bg-primary">
            new
        </button>
    </div>
    <div x-show="modalOpen" x-transition
        class="fixed top-0 left-0 flex items-center justify-center w-full h-full min-h-screen px-4 py-5 bg-dark/90"
        style="z-index: 9999;">
        <div @click.outside="modalOpen = false"
            class="w-[33%] fixed top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 max-w-[570px] rounded-[20px] bg-white dark:bg-dark-2 py-12 px-8 text-center md:py-[60px] md:px-[70px]">
            <h3 class="pb-[18px] text-xl font-semibold text-dark dark:text-white sm:text-2xl">
                Add New Lens Mark
            </h3>
            <span class="mx-auto mb-6 inline-block h-1 w-[90px] rounded bg-primary"></span>

            <form action="{{ route('lensMarks.save') }}" method="POST" enctype="multipart/form-data">
                @csrf

                <!-- 분류 -->
                <div class="mb-4">
                    <label for="category" class="block text-base font-medium text-dark dark:text-white">분류:</label>
                    <input type="text" name="category" id="category" class="mt-1 p-2 w-full border rounded-md">
                </div>

                <!-- 제조사 -->
                <div class="mb-4">
                    <label for="manufacturer" class="block text-base font-medium text-dark dark:text-white">제조사:</label>
                    <input type="text" name="manufacturer" id="manufacturer" class="mt-1 p-2 w-full border rounded-md">
                </div>

                <!-- 제품명 -->
                <div class="mb-4">
                    <label for="product_name" class="block text-base font-medium text-dark dark:text-white">제품명:</label>
                    <input type="text" name="product_name" id="product_name" class="mt-1 p-2 w-full border rounded-md">
                </div>

                <!-- 굴절률 -->
                <div class="mb-4">
                    <label for="refractive_index"
                        class="block text-base font-medium text-dark dark:text-white">굴절률:</label>
                    <input type="text" name="refractive_index" id="refractive_index"
                        class="mt-1 p-2 w-full border rounded-md">
                </div>

                <!-- 제품마크#1 -->
                <div class="mb-4">
                    <label for="product_mark1"
                        class="block text-base font-medium text-dark dark:text-white">제품마크#1:</label>
                    <input type="file" name="product_mark1" id="product_mark1"
                        class="mt-1 p-2 w-full border rounded-md">
                    <button type="button" class="mt-2 p-2 bg-red-500 text-white rounded-md">Remove</button>
                </div>

                <!-- 제품마크#2 -->
                <div class="mb-4">
                    <label for="product_mark2"
                        class="block text-base font-medium text-dark dark:text-white">제품마크#2:</label>
                    <input type="file" name="product_mark2" id="product_mark2"
                        class="mt-1 p-2 w-full border rounded-md">
                    <button type="button" class="mt-2 p-2 bg-red-500 text-white rounded-md">Remove</button>
                </div>

                <!-- 검색어 -->
                <div class="mb-4">
                    <label for="search_term" class="block text-base font-medium text-dark dark:text-white">검색어:</label>
                    <input type="text" name="search_term" id="search_term" class="mt-1 p-2 w-full border rounded-md">
                </div>

                <!-- 상세보기 -->
                <div class="mb-4">
                    <label for="details" class="block text-base font-medium text-dark dark:text-white">상세보기:</label>
                    <input type="text" name="details" id="details" class="mt-1 p-2 w-full border rounded-md">
                </div>

                <!-- Actions -->
                <div class="flex justify-between">
                    <button @click="modalOpen = false" type="button"
                        class="p-3 text-base font-medium text-center transition border rounded-md border-stroke text-dark dark:text-white hover:border-red-600 hover:bg-red-600 hover:text-white">
                        Cancel
                    </button>
                    <div>
                        <button type="submit"
                            class="p-3 text-base font-medium text-center text-white transition border rounded-md border-primary bg-primary hover:bg-blue-dark">
                            Save
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</section>