@php
    $LensMark = $LensMark ?? null;
    $buttonText = $buttonText ?? "new";
    if($buttonText){
        //echo('lensmark : '. var_dump($LensMark));
        echo('buttonText : '. $buttonText);
    }
    
@endphp
<section x-data="{modalOpen: false}" class="save-modal-section">

    <div class="container py-5 mx-auto">
        <button @click="modalOpen = true;" class="open_modal_btn cursor-pointer px-6 py-3 text-base font-medium text-white rounded-full bg-primary hover:bg-secondary">
            {{ $buttonText ?? 'new' }} 
        </button>
    </div>

    <div x-show="modalOpen" x-transition class="overflow-x-auto overflow-y-auto fixed top-0 left-0 flex items-center justify-center w-full h-full min-h-screen px-4 py-5 bg-dark/90"
        style="z-index: 9999;">
        <div @click.outside="modalOpen = false" class="overflow-x-auto overflow-y-auto fixed top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 max-w-[570px] max-h-[90vh] rounded-[20px] bg-white dark:bg-dark-2 py-12 px-8 text-center md:py-[60px] md:px-[70px]">
            <h3 class="pb-[18px] text-xl font-semibold text-dark dark:text-white sm:text-2xl">
                {{ $titleText ?? 'edit entry' }} 
            </h3>
            <span class="mx-auto mb-6 inline-block h-1 w-[90px] rounded bg-primary"></span>

            <!-- <form id="lensMarkForm" action="{{ route('lensMarks.store') }}" method="POST" enctype="multipart/form-data">
                @csrf -->

                <!-- 분류 -->
                <div class="mb-4 flex flex-row items-center">
                    <label for="classification" class="flex-shrink-0 block text-base font-medium text-dark dark:text-white text-right mr-2 pr-4 w-1/4">분류:</label>
                    <input type="text" name="classification" id="classification" class="flex-grow p-2 border-b rounded-md" value="{{ optional($LensMark)->classification }}">
                </div>

                <!-- 제조사 -->
                <div class="mb-4 flex flex-row items-center" >
                    <label for="manufacturer" class="flex-shrink-0 block text-base font-medium text-dark dark:text-white text-right mr-2 pr-4 w-1/4">제조사:</label>
                    <input type="text" name="manufacturer" id="manufacturer" class="mt-1 p-2 w-full border-b rounded-md" value="{{ optional($LensMark)->manufacturer }}">
                </div>

                <!-- 제품명 -->
                <div class="mb-4 flex flex-row items-center">
                    <label for="product_name" class="flex-shrink-0 block text-base font-medium text-dark dark:text-white text-right mr-2 pr-4 w-1/4">제품명:</label>
                    <input type="text" name="product_name" id="product_name" class="mt-1 p-2 w-full border-b rounded-md" value="{{ optional($LensMark)->product_name }}">
                </div>

                <!-- 굴절률 -->
                <div class="mb-4 flex flex-row items-center">
                    <label for="refractive_index" class="flex-shrink-0 block text-base font-medium text-dark dark:text-white text-right mr-2 pr-4 w-1/4">굴절률:</label>
                    <input type="text" name="refractive_index" id="refractive_index" class="mt-1 p-2 w-full border-b rounded-md" value="{{ optional($LensMark)->refractive_index }}">
                </div>

                <!-- 제품마크#1 -->
                <div class="mb-4 flex flex-row items-center">
                    <label for="product_mark1" class="flex-shrink-0 block text-base font-medium text-dark dark:text-white text-right mr-2 pr-4 w-1/4">제품마크#1:</label>
                    @if(optional($LensMark)->product_mark1)
                        <div class="flex flex-col items-start">
                            <img src="{{ optional($LensMark)->product_mark1 }}" alt="제품마크#1" class="">
                            <div class="flex">
                                <button type="button" class="mr-2 px-2 py-2 bg-primary text-white rounded-md mb-2">change</button>
                                <button type="button" class="mr-2 px-2 py-2 bg-primary text-white rounded-md mb-2">remove</button>
                            </div>
                            
                        </div>
                    @else
                        <div class="flex flex-col">
                            <!-- <img src="" alt="제품마크#1" class="h-12 w-12 mb-2"> -->
                            <button type="button" class="px-2 py-2 bg-primary text-white rounded-md mb-2">select</button>
                        </div>
                    @endif
                    <!-- <input type="file" name="product_mark1" id="product_mark1" class="mt-1 p-2 w-full border rounded-md"> -->
                    <!-- <button type="button" class="px-2 py-2 bg-primary text-white rounded-md">Remove</button> -->
                </div>

                <!-- 제품마크#2 -->
                <div class="mb-4 flex flex-row items-center">
                    <label for="product_mark2" class="flex-shrink-0 block text-base font-medium text-dark dark:text-white text-right mr-2 pr-4 w-1/4">제품마크#2:</label>
                    @if(optional($LensMark)->product_mark2)
                        <div class="flex flex-col items-start">
                            <img src="{{ optional($LensMark)->product_mark2 }}" alt="제품마크#2" class="">
                            <div class="flex">
                                <button type="button" class="mr-2 px-2 py-2 bg-primary text-white rounded-md mb-2">change</button>
                                <button type="button" class="mr-2 px-2 py-2 bg-primary text-white rounded-md mb-2">remove</button>
                            </div>
                        </div>
                    @else
                        <div class="flex flex-col">
                            <!-- <img src="" alt="제품마크#2" class="h-12 w-12 mb-2"> -->
                            <button type="button" class="px-2 py-2 bg-primary text-white rounded-md mb-2">select</button>
                        </div>
                    @endif
                    <!-- <input type="file" name="product_mark2" id="product_mark2" class="mt-1 p-2 w-full border rounded-md">
                    <button type="button" class="px-2 py-2 bg-primary text-white rounded-md">Remove</button> -->
                </div>

                <!-- 검색어 -->
                <div class="mb-4 flex flex-row items-center">
                    <label for="keyword" class="flex-shrink-0 block text-base font-medium text-dark dark:text-white text-right mr-2 pr-4 w-1/4">검색어:</label>
                    <input type="text" name="keyword" id="keyword" class="mt-1 p-2 w-full border-b rounded-md" value="{{ optional($LensMark)->keyword }}">
                </div>

                <!-- 상세보기 -->
                <div class="mb-4 flex flex-row items-center">
                    <label for="link" class="flex-shrink-0 block text-base font-medium text-dark dark:text-white text-right mr-2 pr-4 w-1/4">상세보기:</label>
                    <input type="text" name="link" id="link" class="mt-1 p-2 w-full border-b rounded-md" value="{{ optional($LensMark)->link }}">
                </div>

                <!-- Actions -->
                <div class="flex justify-between">
                    <button @click="modalOpen = false" type="button" class="cancel_btn cursor-pointer mr-2 px-6 py-3 text-base font-medium text-white rounded-full bg-primary hover:bg-secondary">
                        x Cancel
                    </button>

                    @isset($buttonText)
                        @if($buttonText === 'modify')
                            <div>
                                <button type="button" class="delete_btn cursor-pointer mr-2 px-6 py-3 text-base font-medium text-white rounded-full bg-primary hover:bg-secondary">
                                    Delete
                                </button>
                            </div>
                        @endif
                    @endisset

                    <div>
                        <button type="button" onclick="goAction('{{ $buttonText }}')" class="save_btn cursor-pointer mr-2 px-6 py-3 text-base font-medium text-white rounded-full bg-primary hover:bg-secondary">
                        <!-- <button type="submit" class="save_btn cursor-pointer px-6 py-3 text-base font-medium text-white rounded-full bg-primary hover:bg-secondary"> -->
                        <!-- <button type="submit" class="p-4 text-base font-medium text-center text-white transition border-b rounded-md border-b-primary bg-primary hover:bg-blue-dark"> -->
                            Save
                        </button>
                    </div>
                </div>
            <!-- </form> -->
        </div>
    </div>
</section>