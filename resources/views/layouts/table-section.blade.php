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
                     
                        @php
                        //echo('type : '. gettype($LensMark));
                        //echo('value : '. var_dump($LensMark));
                        @endphp
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
                              @include('layouts.modal', ['buttonText' => 'modify'], ['id'=> $LensMark->id])
                              
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