/*----------------------------------------------
View Message
------------------------------------------------*/
function messageview(cid){  
    $('#mobi_ccview').fadeIn(400, function(){
        $("#mobi_ccview").css("display","flex");
    });
    $.ajax({
        url: 'fetchers/messages/fetch_view_message.php',
        type: 'post',
        data: 'cid=' + cid,
        beforeSend: function(){
            $("#msger_load").show();
        },
        complete: function(){
            $("#msger_load").hide();
        },
        success: function(result) {
            data = JSON.parse(result);
            $("#stichert").text(data.message);
            $("#tcen_t").text(data.email);
            $("#tcen_t2").text(data.subject);
        }
    });
}

$("#closeactyu").on('click', function(){
    $('#mobi_ccview').fadeOut(400, function(){
        $("#mobi_ccview").css("display","none");
    });
})
/*----------------------------------------------
Delete Message
------------------------------------------------*/
function messagedelete(cid){
    Swal.fire({
        text: 'Are You Sure You Want To Delete This Message?',
        icon: 'warning',
        showCancelButton: true,
        showConfirmButton: true
    }).then((result => {
        if(result.isConfirmed){
            $.ajax({
                url: 'fetchers/messages/delete_message.php',
                type: 'post',
                data: 'cid=' + cid ,
                beforeSend: function(){
                    $("#loaderr").show();
                },
                complete: function(){
                    $("#loaderr").hide();
                },
                success: function(result) {
                    var table=$('#contact_messages').DataTable();
                    table.draw();
                    toastr.success('Message deleted successfuly')
                }
            });
        }
    }))
}
/*----------------------------------------------
Category Disable/Enable
------------------------------------------------*/
function chtoggle(id) {
    var cat_status=$('#sta_us'+id).val();
    var typee = 'category';
    Swal.fire({
        text: 'Are You Sure You Want To Deactivate This Category?',
        icon: 'warning',
        showCancelButton: true,
        showConfirmButton: true
    }).then((result => {
        if(result.isConfirmed){
            $.ajax({
                url: 'fetchers/categories/disable_blog_category.php',
                type: 'post',
                data: 'id=' + id + '&typee=' + typee+ '&cat_status=' + cat_status,
                success: function(result) {
                    if(cat_status==1){
                        $('.tgo'+id).removeClass('fa-toggle-on');
                        $('.tgo'+id).addClass('fa-toggle-off');
                        $('#sta_us'+id).val(0);
                        toastr.success('Category has been disabled')
                    }else{
                        $('.tgo'+id).removeClass('fa-toggle-off');
                        $('.tgo'+id).addClass('fa-toggle-on');
                        $('#sta_us'+id).val(1);
                        toastr.success('Category has been enabled')
                    }
                }
            });
            
        }
    }))
}
/*----------------------------------------------
Category Delete
------------------------------------------------*/
function chdelete(id){
    var typee = 'category';
    Swal.fire({
        text: 'Are You Sure You Want To Delete This Category?',
        icon: 'warning',
        showCancelButton: true,
        showConfirmButton: true
    }).then((result => {
        if(result.isConfirmed){
            $.ajax({
                url: 'fetchers/categories/delete_blog_category.php',
                type: 'post',
                data: 'id=' + id + '&typee=' + typee,
                beforeSend: function(){
                    $("#loadercc").show();
                },
                complete: function(){
                    $("#loadercc").hide();
                },
                success: function(result) {
                    var ck=$('#dele_cat_'+id);
                    var table=$('#example_catdelete').DataTable();
                    $('#dele_cat_'+id).fadeOut(400, function(){
                        table.row(ck).remove().draw()
                    });
                    toastr.success('Category deleted successfuly')
                }
            });
        }
    }))
}

/*----------------------------------------------
Post Disable/Enable
------------------------------------------------*/
function adtoggle(id) {
    var ad_tog=$('#ad_tog'+id).val();
    var p_action = '';
    if(ad_tog ==  1){
        p_action = 'Disable';
    }else{
        p_action = 'Activate';
    }
    Swal.fire({
        text:  `Are You Sure You Want To ${p_action} This Post?`,
        icon: 'warning',
        showCancelButton: true,
        showConfirmButton: true
    }).then((result => {
        if(result.isConfirmed){
            $.ajax({
                url: 'form_submit/post/dis_post.php',
                type: 'post',
                data: 'id=' + id + '&ad_tog=' + ad_tog,
                success: function(result) {
                    if(ad_tog==1){
                        $('.adtgo'+id).removeClass('fa-toggle-on');
                        $('.adtgo'+id).addClass('fa-toggle-off');
                        $('#ad_tog'+id).val(0);
                        toastr.success('Posts has been disabled')
                    }else{
                        $('.adtgo'+id).removeClass('fa-toggle-off');
                        $('.adtgo'+id).addClass('fa-toggle-on');
                        $('#ad_tog'+id).val(1);
                        toastr.success('Posts has been Activated')
                    }
                }
            });
        }
    }))
  }
  /*----------------------------------------------
Delete Posts
------------------------------------------------*/
function addelete(id){
    
    Swal.fire({
        text: 'Are You Sure You Want To Delete This Post?',
        icon: 'warning',
        showCancelButton: true,
        showConfirmButton: true
    }).then((result => {
        if(result.isConfirmed){
            $.ajax({
                url: 'form_submit/post/deletepost.php',
                type: 'post',
                data: 'id=' + id ,
                beforeSend: function(){
                    $("#loaderr").show();
                },
                complete: function(){
                    $("#loaderr").hide();
                },
                success: function(result) {
                    var table=$('#post_table').DataTable();
                    table.draw()
                    toastr.success('Post deleted successfuly')
                }
            });
        }
    }))
    
}
/*----------------------------------------------
Delete Saved Posts
------------------------------------------------*/
function addeletedraft(id){
    
    Swal.fire({
        text: 'Are You Sure You Want To Delete This Post?',
        icon: 'warning',
        showCancelButton: true,
        showConfirmButton: true
    }).then((result => {
        if(result.isConfirmed){
            $.ajax({
                url: 'form_submit/post/deletedraft.php',
                type: 'post',
                data: 'id=' + id ,
                beforeSend: function(){
                    $("#loaderr").show();
                },
                complete: function(){
                    $("#loaderr").hide();
                },
                success: function(result) {
                    var table=$('#draftpost_table').DataTable();
                    table.draw()
                    toastr.success('Posts deleted successfuly')
                }
            });
        }
    }))

}
/*----------------------------------------------
    Schedule post Delete
------------------------------------------------*/
function deleteschedule(id){
   
    Swal.fire({
        text: 'Are You Sure You Want To Delete This Post?',
        icon: 'warning',
        showCancelButton: true,
        showConfirmButton: true
    }).then((result => {
        if(result.isConfirmed){
            $.ajax({
                url: 'form_submit/post/deleteschedule.php',
                type: 'post',
                data: 'id=' + id ,
                beforeSend: function(){
                    $("#loaderr").show();
                },
                complete: function(){
                    $("#loaderr").hide();
                },
                success: function(result) {
                    var table=$('#schedulepost_table').DataTable();
                    table.draw()
                    toastr.success('Post deleted successfuly')
                }
            });
        }
    }))

}
$("form#admlogin").submit(function (e) {
	$('#lemail_error').text('');
	$('#lpassword_error').text('');

	var email = $("#lemail").val();
	var pass = $("#lppassword").val();
	var status = 'true';
	if(email == ''){
		$('#lemail_error').text('Please Enter Email');
		status = 'false';
	}
	if(pass == ''){
		$('#lpassword_error').text('Please Enter Password');
		status = 'false';
	}
	if(status == 'true'){
		var formData = new FormData(this);
		var redirect = $("#redireclogin").val();
		$.ajax({
			url: 'form_submit/oath/login.php',
			type: 'post',
			data: formData,
			contentType: false,
			cache: false,
			processData: false,
			beforeSend: function() {
				$("#loaderr").show();
				$("#adlogsubrole").css("display","block");
				$("#adlogsub").css("display","none");
			},
			complete: function() {
				$("#loaderr").hide();
				$("#adlogsubrole").css("display","none");
				$("#adlogsub").css("display","block");
			},
			success: function(result) {
				var data = JSON.parse(result);
				if(data.status == 'invalid'){
					Swal.fire({
						position: 'center',
						icon: 'error',
						title: data.data,
						showConfirmButton: false,
						timer: 3000
					})
				}else{
					Swal.fire({
						position: 'center',
						icon: 'success',
						title: data.data,
						showConfirmButton: false,
						timer: 3000
					})
                    // toastr.success(data.data)
					setTimeout(function() {
						window.location.href = redirect
					}, 3000);
				}
				
			}
		});
	}
	e.preventDefault();
})