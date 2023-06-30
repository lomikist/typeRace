$(document).ready(function(){
    let file_name = $('#file_name').val();
    $("#send_btn").on('click',function (event) {
        event.preventDefault();
        $.ajax({
            url: 'save',
            type: 'GET',
            dataType: 'json',
            data: `${file_name}`,
            success: function(data) {

                // console.log(data.content)
                str = data.content;

                $('#text_field').text(str);
            },
            reject(reason) {
                console.log('error');
            }
        });
    });
    // var form = '#add-user-form';
    //
    // $(form).on('submit', function(event){
    //     event.preventDefault();
    //
    //     var url = $(this).attr('data-action');
    //
    //     $.ajax({
    //         url: url,
    //         method: 'POST',
    //         data: new FormData(this),
    //         dataType: 'JSON',
    //         contentType: false,
    //         cache: false,
    //         processData: false,
    //         success:function(response)
    //         {
    //             $(form).trigger("reset");
    //             alert(response.success)
    //         },
    //         error: function(response) {
    //         }
    //     });
    // });

});
let all_keys = document.querySelectorAll('.keys');
document.querySelector('.input').addEventListener('keypress',function (e){
    for (let i of all_keys) {
        if(i.innerText == e.key.toLowerCase()){
            i.style.backgroundColor = 'red';
        }
    }
});
