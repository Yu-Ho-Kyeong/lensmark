@extends('lensMarks.layout')
@section('content')

<!-- ====== img Section --> 
<section class="img_section bg-white dark:bg-dark" style="margin-top:30px;">
    <div class="container mx-auto">
        <div class="flex flex-wrap -mx-4">
            <div class="w-full px-4"> 
            <div class="parent1 max-w-full relative">
                <div class="test1">
                    <img src="{{ asset('images/1.jpeg') }}" alt="My Image" class="w-full lens_img">
                </div>
                                    
                <div class="test2 absolute top-0 left-0">
                    <h2 class="text-4xl text-white font-extrabold mb-4 text-center lens_text1">렌즈 마크 검색기</h2>
                    <p class="text-xl text-white font-semibold text-center lens_text2">다양한 렌즈 마크, Vision Note의 마크 검색기로 해결하세요.</p>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- ====== sort & search Section --> 
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

<!-- ====== Table Section -->
<section class="table_section bg-white dark:bg-dark">
   <div class="container mx-auto">
      <div class="flex flex-wrap -mx-4">
         <div class="w-full px-4">
            <div class="max-w-full overflow-x-auto">
               <table class="w-full table-auto">
                  <thead>
                     <tr class="text-center bg-primary">
                        <th class="w-1/6 min-w-[160px] border-l border-transparent py-4 px-3 text-lg font-medium text-white lg:py-7 lg:px-4">
                           분류
                        </th>
                        <th class="w-1/6 min-w-[160px] py-4 px-3 text-lg font-medium text-white lg:py-7 lg:px-4">
                           제조사
                        </th>
                        <th class="w-1/6 min-w-[160px] py-4 px-3 text-lg font-medium text-white lg:py-7 lg:px-4">
                           제품명
                        </th>
                        <th class="w-1/6 min-w-[160px] py-4 px-3 text-lg font-medium text-white lg:py-7 lg:px-4">
                           굴절률
                        </th>
                        <th class="w-1/6 min-w-[160px] py-4 px-3 text-lg font-medium text-white lg:py-7 lg:px-4">
                           제품마크#1
                        </th>
                        <th class="w-1/6 min-w-[160px] border-r border-transparent py-4 px-3 text-lg font-medium text-white lg:py-7 lg:px-4">
                           제품마크#2
                        </th>
                        <th class="w-1/6 min-w-[160px] border-r border-transparent py-4 px-3 text-lg font-medium text-white lg:py-7 lg:px-4">
                           제품링크
                        </th>
                        <th class="w-1/6 min-w-[160px] border-r border-transparent py-4 px-3 text-lg font-medium text-white lg:py-7 lg:px-4">
                           수정
                        </th>
                     </tr>
                  </thead>

                  <tbody>
                    
                  @foreach($LensMarks as $LensMark)
                     <tr>
                        <td class="text-dark border-b border-l border-[#E8E8E8] bg-[#F3F6FF] dark:bg-dark-3 dark:border-dark dark:text-dark-7 py-5 px-2 text-center text-base font-medium">
                            {{ $LensMark->classification }}
                        </td>

                        <td class="text-dark border-b border-[#E8E8E8] bg-white dark:border-dark dark:bg-dark-2 dark:text-dark-7 py-5 px-2 text-center text-base font-medium">
                            {{ $LensMark->manufacturer }}
                        </td>

                        <td class="text-dark border-b border-[#E8E8E8] bg-[#F3F6FF] dark:bg-dark-3 dark:border-dark dark:text-dark-7 py-5 px-2 text-center text-base font-medium">
                            {{ $LensMark->product_name }}
                        </td>

                        <td class="text-dark border-b border-[#E8E8E8] bg-white dark:border-dark dark:bg-dark-2 dark:text-dark-7 py-5 px-2 text-center text-base font-medium">
                            {{ $LensMark->refractive_index }}
                        </td>

                        <td class="text-dark border-b border-r border-[#E8E8E8] bg-white dark:border-dark dark:bg-dark-2 dark:text-dark-7 py-5 px-2 text-center text-base font-medium">
                        @if($LensMark->product_mark1)
                            <!-- {{ $LensMark->product_mark1 }} -->
                            <img src="{{ $LensMark->product_mark1 }}" alt="product_mark1">
                        @else
                           <a href="javascript:void(0)" class="inline-block px-6 py-2.5 border rounded-md border-primary text-primary hover:bg-primary hover:text-white font-medium" target="_blank">
                            등록하기
                           </>
                        @endif
                        </td>

                        <td class="text-dark border-b border-r border-[#E8E8E8] bg-white dark:border-dark dark:bg-dark-2 dark:text-dark-7 py-5 px-2 text-center text-base font-medium">
                        @if($LensMark->product_mark2)
                            <!-- {{ $LensMark->product_mark2 }} -->
                            <img src="{{ $LensMark->product_mark2 }}" alt="product_mark2">
                        @else
                           <a href="javascript:void(0)" class="inline-block px-6 py-2.5 border rounded-md border-primary text-primary hover:bg-primary hover:text-white font-medium" target="_blank">
                            등록하기
                           </a>
                        @endif
                        </td>
                        
                        <td class="text-dark border-b border-r border-[#E8E8E8] bg-white dark:border-dark dark:bg-dark-2 dark:text-dark-7 py-5 px-2 text-center text-base font-medium">
                        @if($LensMark->link)
                            <a href="{{ $LensMark->link }}" class="inline-block px-6 py-2.5 border rounded-md border-primary text-primary hover:bg-primary hover:text-white font-medium" target="_blank">
                                GO
                            </a>
                        @endif
                        </td>
                        <td class="text-dark border-b border-r border-[#E8E8E8] bg-white dark:border-dark dark:bg-dark-2 dark:text-dark-7 py-5 px-2 text-center text-base font-medium">
                            <!-- ====== Modal Section Start -->
                            <div class="container py-20 mx-auto">
                                <button data-lensmark-id="{{ $LensMark->id }}" @click="modalOpen = true" class="open_modal px-6 py-3 text-base font-medium text-white rounded-full bg-primary">
                                    modify
                                </button>
                            </div>
                           

                        </td>
                     </tr>
                     @endforeach
                  </tbody>
               </table>
            </div>
         </div>
      </div>
   </div>
</section>
<!-- ====== Table Section End -->
@endsection

@section('modal')
<!-- ====== Modal Section Start -->
<section x-data="{modalOpen: false}" class="modal-section" >
   <div class="container py-20 mx-auto">
      <button @click="modalOpen = true" class=" px-6 py-3 text-base font-medium text-white rounded-full bg-primary">
         new
      </button>
   </div>

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

@section('scripts')
<script>

    document.addEventListener('DOMContentLoaded', function() {
        let modalOpen = false; // 모달의 상태를 추적하는 변수
        const openModalCells = document.querySelectorAll('.open_modal');
        openModalCells.forEach(cell => {
            cell.addEventListener('click', function() {
                const lensMarkId = this.getAttribute('data-lensmark-id');
                
                console.log('LensMark ID:', lensMarkId);
                
                const modal = document.querySelector('.modal-section'); 
                //console.log(modal);
                if(modal){
                    if(!modalOpen){
                        modal.style.display = 'block'; // 모달을 노출
                        modalOpen = true;
                        console.log('modalOpen', modalOpen);
                        console.log('modal.style.display', modal.style.display);
                        // 모달 내부에 데이터 채우기 (예를 들면, 제목이나 내용)
                        const modalTitle = modal.querySelector('h3');
                        if(modalTitle){
                            modalTitle.textContent = `LensMark ID: ${lensMarkId}`;
                        }else{
                            console.error('modalTitle.textContent element not found');
                        }
                    }else{
                        modal.style.display = 'none'; // 모달 숨기기
                        modalOpen = false; // 모달 상태 업데이트
                        console.log('modalOpen', modalOpen);
                        console.log('modal.style.display', modal.style.display);
                    } 
                }else{
                    console.error('Modal element not found');
                }   
            });
        });
    });


</script>
@endsection

