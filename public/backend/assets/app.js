function slideToggleItem(id){
    $(`#${id}`).slideToggle();
}
function checkFullContent(){
    const leftMenu = document.getElementById('leftMenu');
    const content = document.getElementById('content');
    const image = document.getElementById('image');
    if(leftMenu.classList.contains('active') === true){
        content.className = 'col-md-10'
        image.className = 'img'
    }else{
        content.className = 'col-md-12'
        image.className = 'logo-sm'
    }

}
checkFullContent();
function leftMenuToggle(){
    const leftMenu = document.getElementById('leftMenu');
    leftMenu.classList.toggle('active');
    checkFullContent();
}

function addData(){
    const data = document.getElementById('data_add');
    data.classList.toggle('active');
}

// function categoryUpdateModal(categoryId){
//     // alert(categoryId);
//     // var url = "{{ route('update-category') }}";
//     if (categoryId != '') {
//         $.ajaxSetup({
//             headers: {
//                 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
//             }
//         });
//         $.ajax({
//             type: 'get',
//             url: "{{ url('update-category/') }}"+ categoryId,
//             data: {
//                 categoryId: categoryId
//             },
//             success: function(data) {
//                 $("#categoryName").val(data.category_name);
//             }
//         });
//     }

// }

function deleteAlert(){
    const alert = document.getElementById('alert');
    alert.classList.toggle('active');

}

// function clientModalEdit(){
//     const modal = document.getElementById('modal');
//     modal.classList.toggle('active');
// }


