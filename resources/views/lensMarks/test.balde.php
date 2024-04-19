@extends('lensMarks.layout')
@section('content')

    
<!-- ====== Table Section Start -->
<section class="bg-white dark:bg-dark py-20 lg:py-[120px]">
   <div class="container mx-auto">
      <div class="flex flex-wrap -mx-4">
         <div class="w-full px-4">
            <div class="max-w-full overflow-x-auto">
               <table class="w-full table-auto">
                  <thead>
                     <tr class="text-center bg-primary">
                        <th
                           class="w-1/6 min-w-[160px] border-l border-transparent py-4 px-3 text-lg font-medium text-white lg:py-7 lg:px-4"
                           >
                           분류
                        </th>
                        <th
                           class="w-1/6 min-w-[160px] py-4 px-3 text-lg font-medium text-white lg:py-7 lg:px-4"
                           >
                           제조사
                        </th>
                        <th
                           class="w-1/6 min-w-[160px] py-4 px-3 text-lg font-medium text-white lg:py-7 lg:px-4"
                           >
                           제품명
                        </th>
                        <th
                           class="w-1/6 min-w-[160px] py-4 px-3 text-lg font-medium text-white lg:py-7 lg:px-4"
                           >
                           굴절률
                        </th>
                        <th
                           class="w-1/6 min-w-[160px] py-4 px-3 text-lg font-medium text-white lg:py-7 lg:px-4"
                           >
                           제품마크#1
                        </th>
                        <th
                           class="w-1/6 min-w-[160px] border-r border-transparent py-4 px-3 text-lg font-medium text-white lg:py-7 lg:px-4"
                           >
                           제품마크#2
                        </th>
                        <th
                           class="w-1/6 min-w-[160px] border-r border-transparent py-4 px-3 text-lg font-medium text-white lg:py-7 lg:px-4"
                           >
                           제품링크
                        </th>
                        
                     </tr>
                  </thead>

                  <tbody>
                     <tr>
                        <td
                           class="text-dark border-b border-l border-[#E8E8E8] bg-[#F3F6FF] dark:bg-dark-3 dark:border-dark dark:text-dark-7 py-5 px-2 text-center text-base font-medium"
                           >
                           .com
                        </td>
                        <td
                           class="text-dark border-b border-[#E8E8E8] bg-white dark:border-dark dark:bg-dark-2 dark:text-dark-7 py-5 px-2 text-center text-base font-medium"
                           >
                           1 Year
                        </td>
                        <td
                           class="text-dark border-b border-[#E8E8E8] bg-[#F3F6FF] dark:bg-dark-3 dark:border-dark dark:text-dark-7 py-5 px-2 text-center text-base font-medium"
                           >
                           $75.00
                        </td>
                        <td
                           class="text-dark border-b border-[#E8E8E8] bg-white dark:border-dark dark:bg-dark-2 dark:text-dark-7 py-5 px-2 text-center text-base font-medium"
                           >
                           $5.00
                        </td>
                        <td
                           class="text-dark border-b border-r border-[#E8E8E8] bg-white dark:border-dark dark:bg-dark-2 dark:text-dark-7 py-5 px-2 text-center text-base font-medium"
                           >
                           <a
                              href="javascript:void(0)"
                              class="inline-block px-6 py-2.5 border rounded-md border-primary text-primary hover:bg-primary hover:text-white font-medium"
                              >
                           img
                           </a>
                        </td>
                        <td
                           class="text-dark border-b border-r border-[#E8E8E8] bg-white dark:border-dark dark:bg-dark-2 dark:text-dark-7 py-5 px-2 text-center text-base font-medium"
                           >
                           <a
                              href="javascript:void(0)"
                              class="inline-block px-6 py-2.5 border rounded-md border-primary text-primary hover:bg-primary hover:text-white font-medium"
                              >
                           img
                           </a>
                        </td>
                        <td
                           class="text-dark border-b border-r border-[#E8E8E8] bg-white dark:border-dark dark:bg-dark-2 dark:text-dark-7 py-5 px-2 text-center text-base font-medium"
                           >
                           <a
                              href="javascript:void(0)"
                              class="inline-block px-6 py-2.5 border rounded-md border-primary text-primary hover:bg-primary hover:text-white font-medium"
                              >
                           Link
                           </a>
                        </td>
                     </tr>
                  </tbody>
               </table>
            </div>
         </div>
      </div>
   </div>
</section>
<!-- ====== Table Section End -->
    
@endsection
    

