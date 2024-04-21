@extends('lensMarks.layout')
@section('contents')
    <!-- ====== img Section --> 
    @include('layouts.img-section')
    <!-- ====== sort & search Section -->
    @include('layouts.sort-search-section')
    <!-- ====== saveModal section -->
    @include('layouts.modal', ['titleText' => 'add new entry'])
    <!-- ====== Table Section -->
    @include('layouts.table-section')
@endsection

@section('scripts')
<script>
    // document.addEventListener('DOMContentLoaded', function() {
    //     const openModalCells = document.querySelectorAll('.open_modal_btn');
    //     openModalCells.forEach(cell => {
    //         cell.addEventListener('click', function() {
    //             console.log('LensMark ID:', lensMarkId); 
    //             const lensMarkId = this.getAttribute('data-lensmark-id'); 
    //             const modal = document.querySelector('.modal-section'); 
    //             //console.log(modal);
    //             if(modal){
    //                 if(!modalOpen){
    //                     const modalTitle = modal.querySelector('h3');
    //                     if(modalTitle){
    //                         modalTitle.textContent = `LensMark ID: ${lensMarkId}`;
    //                     }else{
    //                         console.error('modalTitle.textContent element not found');
    //                     }
    //                 }else{
    //                     console.log('modal.style.display', modal.style.display);
    //                 } 
    //             }else{
    //                 console.error('Modal element not found');
    //             }   
    //         });
    //     });
    // });

    function goAction(buttonText) {
        //const form = document.getElementById('lensMarkForm');
        //window.csrfToken = "{{ csrf_token() }}";
        // CSRF 토큰 설정
        //axios.defaults.headers.common['X-CSRF-TOKEN'] = document.querySelector('meta[name="csrf-token"]').getAttribute('content');
        // const endpoint = buttonText === "modify" ? 'route("lensMarks.update")' : 'route("lensMarks.store")'; 
        const endpoint = buttonText === "modify" ? '/lensMarks/update' : '/lensMarks/store'; 
        console.log('endpoint : ', endpoint); 
            //const formData = new FormData(form);
            const lensData = {
                'classification':document.getElementById('classification').value,
                'manufacturer':document.getElementById('manufacturer').value,
                'product_name':document.getElementById('product_name').value,
                'refractive_index':document.getElementById('refractive_index').value,
                'keyword':document.getElementById('keyword').value,
                'link':document.getElementById('link').value
            }
            console.log('flensDataorm : ', JSON.stringify(lensData));

            axios.post('http://localhost:8000'+endpoint, lensData, {
                    headers : {
                      'Content-Type' : 'application/json',
                    }
                  })
            .then(function(res){
                console.log('res.data : ' , res.data.message);
            })
            .catch(function(err){
                if (err.message.indexOf('Network Error') > -1) {
                      alert('네트워크가 원활하지 않습니다.\n잠시 후 다시 시도해주세요.')
                    }else if(err.response && err.response.status === 500){
                      alert('server error');
                    }else if(err.response && err.response.status === 403){
                        alert('권한이 없습니다. 관리자에게 문의해주세요');
                    }
            });
    };
</script>
@endsection

