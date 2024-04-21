<section class="sort_search_section bg-white dark:bg-dark py-20 lg:py-[10px]">
    <div class="container mx-auto">
        <div class="flex flex-wrap -mx-4">
            <div class="w-full px-4">
                <div class="max-w-full overflow-x-auto">
                    <label for="sort" class="mr-2">분류별:</label>
                    <select name="sort" id="sort" class="border rounded-md">
                        <option value="">선택하세요</option>
                        <option value="category">분류별</option>
                        <option value="manufacturer">제조사별</option>
                        <option value="refractive">굴절률별</option>
                        <option value="product_mark">제품마크별</option>
                    </select>
                </div>
                <div class="max-w-full overflow-x-auto">
                    <span class="text-3xl">SEARCH : </span>
                    <input type="text" name="search_keyword" placeholder="Please enter keyword ">
                </div>
            </div>
        </div>
    </div>   
</section>