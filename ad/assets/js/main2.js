
function searcher(val){
    $("#butt_b").attr("disabled","disabled");
    if(val !== ''){
        $.ajax({
            url: 'fetchers/searcher/searcher.php',
            type: 'post',
            data: 'val=' + val,
            beforeSend: function() {
                $("#loaderr").show();
            },
            complete: function() {
                $("#loaderr").hide();
            },
            success: function(result) {
                $("#rowcat").html('')
                $("#rowcat").html(result)
            }
        });
    }
}


$("form#admlogin").submit(function (e) {
    var val = $("#searcher").val();
    searcher(val)
    e.preventDefault();
})

$("#searcher").keyup(function(e) {
    var val = $("#searcher").val();
    searcher(val)
    e.preventDefault();
});

$(document).on('click', '.rempad', function() {
    // alert($(this).find('h6').text());
    $('.rempad').removeClass('activer2');
    $(this).addClass('activer2');
    $('.flaterk').css('opacity', 0)
    $(this).find('i').css('opacity', 1)
    var text = $(this).find('h6').text();
    var src =  $(this).find('img').attr('src');
    $("#butt_b").attr("data-id",src);
    $("#butt_b").attr("text",text);
    $("#butt_b").removeAttr("disabled");
})