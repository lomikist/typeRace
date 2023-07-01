$(document).ready(function(){
    let file_name = $('#file_name').val();
    let input = $('#text_enter');
    let text_filed = $('#text_field');
    let active_field = 0;

    input.on('keypress', function (e){
        console.log(  )
        if (e.keyCode == 13 && input.val().trim() == $(text_filed.find('span')[active_field]).text().trim() ){
            active_field++;
            $(text_filed.find('span')[active_field]).attr("class", "active");
            input.val('');
        }
    });
    $("#send_btn").on('click',function (event) {
        text_filed.html('');
        event.preventDefault();
        $.ajax({
            url: 'save',
            type: 'GET',
            dataType: 'json',

            data: `${file_name}`,
            success: function(data) {
                for (let i = 0; i < data.content.length; i++) {
                    let span = $('<span/>')
                        .attr('class', i == 0 ? "active" : "")
                        .text(data.content[i] + ' ');
                    text_filed.append(span);
                }
            },
            reject(reason) {
                console.log('error');
            }
        });
    })

    let all_keys = document.querySelectorAll('.keys');
    $('.input').on('keydown',function (e){
        for (let i of all_keys) {
            if(i.innerText == e.key.toLowerCase()){
                i.style.backgroundColor = 'red';
            }
        }
    });
    $('.input').on('keyup',function (e){
        for (let i of all_keys) {
            if(i.innerText == e.key.toLowerCase()){
                i.style.backgroundColor = 'white';
            }
        }
    });
});

