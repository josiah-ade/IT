function ifrmaerClick(){
    $('.modal-header').find('button#closerModal').click();
    $("#modalex").click();
}
function uploaderClick(){
    $('.modal-header').find('button#closerModal').click();
    $("#modalex3").click();
    
}

function callAlert(status,msg){
    if(status == 1){
        Swal.fire({
            position: 'center',
            icon: 'success',
            title: msg,
            showConfirmButton: false,
            timer: 3000
        })
    }else{
        Swal.fire({
            position: 'center',
            icon: 'error',
            title: msg,
            showConfirmButton: false,
            timer: 3000
        })
    }
}
$(document).ready(function(){
    $('#summernote').summernote();
    $('#summernote2').summernote();
    var iframe = $("#iframeTager").contents();
    iframe.find("#butt_b").click(function(){
        var attrB = $(this).attr('data-id');
        var attrC = $(this).attr('text');
        $("#modalex").click();
        $('.note-insert').find("button[aria-label='Picture']").click();
        $('.noteibileedited').val(attrB);
        $("#schedule_postxxxxxx").val(attrC)
        $(".modal-footer").find('.note-image-btn').removeAttr('disabled');
        $(".modal-footer").find('.note-image-btn').click();
        // $("#summernote").summernote('insertNode', '<p>Plex</p>');
        
    })
    iframe.find("#butt_b2").click(function(){
        $("#modalex").click();
    })
    
    
    $("#enteredTitle").keyup(function(event) {
       let value = $(this).val();
       $("#collectedImgTitle").val(value);
       if(value !== ''){
            $("#clickImgTitleN").removeAttr("disabled");
            if(event.code == 'Enter'){
                $("#clickImgTitleN").click();
            }
       }else{
            $("#clickImgTitleN").attr("disabled","disabled");
       }
    });
    
    $("#clickImgTitleN").on("click", function(){
        $("#modalex3").click();
        $("#modalex2").click();
        $("#uploadImageIframe").click();
    })
    
    $("#divClicker").on("click", function(){
        // $("#uploadImageIframe").click();
        $("#modalex2").click();
        $("#modalex3").click();
    })
    
    $("#uploadImageIframe").on("change", function({target}){
        let file = target.files[0];
    
        var url = URL.createObjectURL(file);
        if(file){
            var fileName = $("#collectedImgTitle").val();
            var fileType = file.type;
            fileType = fileType.split("/");
            fileType = fileType[1];
            
            fileName = fileName+'.'+fileType;
            let newObj = ["jpeg", "jpg", "png", "gif"];
            if(newObj.includes(fileType)){
                var html = `<div id="preContainer" class="col-6 col-sm-4 col-md-3 col-lg-3 col-xl-3 ">
                    <div class="divclicker2" id="divClicker2">
                    <did class="calloverF">
                    <i class="fas fa-2x fa-sync-alt fa-spin"></i>
                    </did>
                    <img class="img-thumbnail" src="${url}" />
                    </div>
                </div>`;
                $("#appenerForImage").append(html)
                sendUploadImageToServer(fileName);
            }else{
                $("#modalex2").click();
                Swal.fire({
                    position: 'center',
                    icon: 'error',
                    title: 'Image must be JPEG, PNG or Gif',
                    showConfirmButton: false,
                    timer: 3000
                })
                uploaderClick();
            }
        }
    })
    
    function sendUploadImageToServer(fileName){
        const form = document.getElementById("formSubmitUploader");
        var diverLength = $(".divcolorer").length;
        var idLength = diverLength+1;
        var xhr = new XMLHttpRequest();
        xhr.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                var data = JSON.parse(this.responseText)
                $("#preContainer").remove();
                if(data.status == 1){
                    var callImg = $("#callExtUrl").val();
                    callImg = callImg+data.data2;
                    var html = `<div id="callImg" class="col-6 col-sm-4 col-md-3 col-lg-3 col-xl-3 callImg"><i class="fas fa-check flaterk"></i><img class="img-thumbnail" src="${callImg}" alt="${data.data1}" /> </div>`;
                    $("#appenerForImage").append(html);
                    $("#valid_"+idLength).find("#removeDivNone1").addClass('d-none');
                    $("#valid_"+idLength).find("#removeDivNone2").removeClass('d-none');
                    $("#valid_"+idLength).find("#removeDiv1").addClass('d-none');
                    $("#valid_"+idLength).find("#removeDiv2").removeClass('d-none');
                    $("#enteredTitle").val();
                }else{
                    Swal.fire({
                        position: 'center',
                        icon: 'error',
                        title: 'Error Occured During Upload',
                        showConfirmButton: false,
                        timer: 3000
                    })
                    $("#valid_"+idLength).remove();
                }
                
                
            }
        };
        xhr.open('post', 'http://localhost/images/collect/index.php');
        xhr.upload.addEventListener('progress', ({loaded, total}) => {
            let fileLoaded = Math.floor((loaded / total) * 100);
            let fileTotal = Math.floor(total / 1000);
            let fileSize;
            if(fileTotal < 1024){
                fileSize = fileTotal + 'KB';
            }else{
                fileSize = (loaded / (1024 * 1024)).toFixed(2) + 'MB';
            }
    
            let html = `<div id="valid_${idLength}"><div class="divcolorer">   
                <i class="fas fa-file"></i>                
                <div class="imageandfile">
                <div class="contdetaile">
                    <h6>${fileName}</h6>
                    <div id="removeDiv1" class="checkimg">${fileLoaded}%</div>
                    <div id="removeDiv2" class="checkimg d-none"><i class=" fas fa-check"></i></div>
                </div>
                <div id="removeDivNone1" class="progress progmag" style="height:6px">
                    <div class="progress-bar removebarcol" style="width:${fileLoaded}%; height:6px"></div>
                </div>
                <div id="removeDivNone2" class="conticlassh6 d-none"><p>${fileSize}</p></div>
                </div>
            </div></div>`;
    
            let html_2 = `<div class="divcolorer">   
                <i class="fas fa-file"></i>                
                <div class="imageandfile">
                <div class="contdetaile">
                    <h6>${fileName}</h6>
                    <div id="removeDiv1" class="checkimg">${fileLoaded}%</div>
                    <div id="removeDiv2" class="checkimg d-none"><i class=" fas fa-check"></i></div>
                </div>
                <div  id="removeDivNone1" class="progress progmag" style="height:6px">
                    <div class="progress-bar removebarcol" style="width:${fileLoaded}%; height:6px"></div>
                </div>
                <div id="removeDivNone2" class="conticlassh6 d-none"><p>${fileSize}</p></div>
                </div>
            </div>`;
    
            var findValid = $("#valid_"+idLength).length;
            if(findValid == 0){
                $("#divPrepender").prepend(html);
            }else{
                $("#valid_"+idLength).html(html_2);
            }
        })
        var formData = new FormData(form);
        xhr.send(formData);
     
    }
    
    
    $(document).on('click', '.callImg', function() {
        
        $('.callImg').removeClass('addbord');
        $(this).addClass('addbord');
        $('.flaterk').css('opacity', 0)
        $(this).find('i').css('opacity', 1)
        var src =  $(this).find('img').attr('src');
        var text = $("#enteredTitle").val();
        $("#selectUploadedImage").attr("data-id",src);
        $("#selectUploadedImage").attr("text",text);
        $("#selectUploadedImage").removeAttr("disabled");
    })
    
    $("#selectUploadedImage").on('click', function(){
        var attrB = $(this).attr('data-id');
        var attrC = $(this).attr('text');
        $("#modalex2").click();
        $('.note-insert').find("button[aria-label='Picture']").click();
        $('.noteibileedited').val(attrB);
        $("#schedule_postxxxxxx").val(attrC)
        $(".modal-footer").find('.note-image-btn').removeAttr('disabled');
        $(".modal-footer").find('.note-image-btn').click();
    })
    
    
    $("#customCalClick").click(function(){
        $("#post_published_date").focus();
    })
    
    const myPicker = new tempusDominus.TempusDominus(document.getElementById('schedule_date_orig'), {
        localization: {
            locale:'en',
            format: 'yyyy-MM-dd, h:mm T',
        } 
    });
    $("#customCheckbox4").click(function(){
        var status = $(this).prop('checked');
        if(status){
            myPicker.show();
            $("#setDateHere").removeClass('d-none');
            $("#schedule_post").val(1);
        }else{
            myPicker.hide();
            $("#setDateHere").addClass('d-none');
            $("#schedule_post").val(0);
        }
    });
    
    $("#schedule_date2").on("click", function(){
        myPicker.show();
    })
    $("#schedule_time").on("click", function(){
        myPicker.show();
    })
    $("#schedule_date_orig").on('change',function(){
        var value = $(this).val();
        var split = value.split(',');
        $("#schedule_date").val(split[0]);
        $("#schedule_time").val(split[1]);
        var d = new Date(split[0]);
        var n = d.toDateString();
        $("#schedule_date2").val(n);
    })

    function savePost(){
        var status1 = $("#stopDraftSaving").val();
        if(status1 == 0){
            var status = true;

            var summernote = $("#summernote").val();
            if(summernote == ''){
                status = false;
            }

            if(status){
                let dateD = new Date();
                let vTime = dateD.toLocaleTimeString();
                $("#published_time").val(vTime);
                const form = document.getElementById("postFormSubmit");
                var formData = new FormData(form);
            
                $.ajax({
                    url: 'form_submit/post/save_draft.php',
                    contentType: false,
                    processData: false,
                    type: 'post',
                    data: formData,
                    beforeSend: function(){
                        $("#postSaveBtn").hide();
                        $("#postSaveBtn2").show();
                    },
                    complete: function(){
                        $("#postSaveBtn").show();
                        $("#postSaveBtn2").hide();
                    },
                    success: function(result) {
                    const data = JSON.parse(result);
                    if(data.status == 1){
                            $("#allsave_id").val(data.id);
                            $("#allsave_draft").val(1);
                    }
                        toastr.success('Post saved successfuly')
                    }
                });
            }
        }
    }
    setInterval(savePost, 120000);

    function goRedirect(url){
        setTimeout(function() {
            window.location.href = url
        }, 3000); 
    }

    $("#postSaveBtn").on("click", function(){
        var status = $("#stopDraftSaving").val();
        $("#stopDraftSaving").val(0);
        savePost();
        $("#stopDraftSaving").val(status);
    })

    $("form#postFormSubmit").submit(function (e) {
        $("#stopDraftSaving").val(1);
        var cookie = document.cookie;
        checkCookie = cookie.includes('LTRU');
        if(checkCookie){
            var status = true;

            var tags = $("#post_tags").val();
            if(tags == ''){
                callAlert(0,"Add Tags to your post");
                status = false;
            }

            var category = $("#post_categoryk").val();
            if(category == 0){
                callAlert(0,"Add category to your post");
                status = false;
            }

            var summernote = $("#summernote").val();
            var finder = summernote.includes('<img');
            if(!finder){
                callAlert(0,"Add at least one image to your post");
                status = false;
            }

            var newPosttitle = $("#newPosttitle").val();
            if(newPosttitle == ''){
                callAlert(0,"You must add title to your post");
                status = false;
            }

            if(status){
                var redirectAfter = $('#site_pather2').val();
                var newHtml = $("#classerID").html(summernote);
                var findImgUrl = newHtml.find('img').attr('src');
                var findImgTitle = newHtml.find('img').attr('alt');
                $("#first_image").val(findImgUrl);
                $("#first_image_title").val(findImgTitle);
                $("#classerID").empty();
                let dateD = new Date();
                let vTime = dateD.toLocaleTimeString();
                $("#published_time").val(vTime);

                var submitPath = 'submit_new.php';
                var editPal = $("#editPal").val();
                if(editPal == 1){
                    submitPath = 'submit_edit.php';
                }
                var formData = new FormData(this);
                 $.ajax({
                    url: `form_submit/post/${submitPath}`,
                    type: 'post',
                    data: formData,
                    contentType: false,
                    cache: false,
                    processData: false,
                    beforeSend: function() {
                        $("#postSubmit2").show();
			            $("#postSubmit").hide();
                    },
                    complete: function() {
                        $("#postSubmit").show();
			            $("#postSubmit2").hide();
                    },
                    success: function(result) {
                        const data = JSON.parse(result);
                        if(data.status == 1){
                            callAlert(1,"Post Successfully Published")
                            goRedirect(redirectAfter);
                        }else if(data.status == 0){
                            callAlert(1,"Post Scheduled Successfully")
                            goRedirect(redirectAfter);
                        }else if(data.status == 3){
                            callAlert(1,"Post Edited Successfully")
                        }
                        
                    }

                });
            }
        }else{
            callAlert(0,"You Session is expired please login to continue")
            var redirectUrl = $("#site_pather").val();
            $("#stopDraftSaving").val(0);
            savePost();
            goRedirect(redirectUrl);
        }
        
        e.preventDefault();
    })

    $("form#pendingFormSubmit").submit(function (e) {
        $("#stopDraftSaving").val(1);
        var cookie = document.cookie;
        checkCookie = cookie.includes('LTRU');
        if(checkCookie){
            var status = true;

            var tags = $("#post_tags").val();
            if(tags == ''){
                callAlert(0,"Add Tags to your post");
                status = false;
            }

            var category = $("#post_categoryk").val();
            if(category == 0){
                callAlert(0,"Add category to your post");
                status = false;
            }

            var summernote = $("#summernote").val();
            var finder = summernote.includes('<img');
            if(!finder){
                callAlert(0,"Add at least one image to your post");
                status = false;
            }

            var newPosttitle = $("#newPosttitle").val();
            if(newPosttitle == ''){
                callAlert(0,"You must add title to your post");
                status = false;
            }

            if(status){
                var redirectAfter = $('#site_pather2').val();
                var newHtml = $("#classerID").html(summernote);
                var findImgUrl = newHtml.find('img').attr('src');
                var findImgTitle = newHtml.find('img').attr('alt');
                $("#first_image").val(findImgUrl);
                $("#first_image_title").val(findImgTitle);
                $("#classerID").empty();
                let dateD = new Date();
                let vTime = dateD.toLocaleTimeString();
                $("#published_time").val(vTime);
                var formData = new FormData(this);
                 $.ajax({
                    url: 'pages/post/approve_post.php',
                    type: 'post',
                    data: formData,
                    contentType: false,
                    cache: false,
                    processData: false,
                    beforeSend: function() {
                        $("#postSubmit2").show();
			            $("#postSubmit").hide();
                    },
                    complete: function() {
                        $("#postSubmit").show();
			            $("#postSubmit2").hide();
                    },
                    success: function(result) {
                        const data = JSON.parse(result)
                        if(data.status == 1){
                            callAlert(1,"Post Successfully Published")
                            goRedirect(redirectAfter);
                        }
                    }

                });
            }
        }else{
            callAlert(0,"You Session is expired please login to continue")
            var redirectUrl = $("#site_pather").val();
            $("#stopDraftSaving").val(0);
            savePost();
            goRedirect(redirectUrl);
        }
        
        e.preventDefault();
    })
    $("form#scheduleFormSubmit").submit(function (e) {
        $("#stopDraftSavingS").val(1);
        var cookie = document.cookie;
        checkCookie = cookie.includes('LTRU');
        if(checkCookie){
            var status = true;

            var tags = $("#post_tags").val();
            if(tags == ''){
                callAlert(0,"Add Tags to your post");
                status = false;
            }

            var category = $("#post_categoryk").val();
            if(category == 0){
                callAlert(0,"Add category to your post");
                status = false;
            }

            var summernote = $("#summernote").val();
            var finder = summernote.includes('<img');
            if(!finder){
                callAlert(0,"Add at least one image to your post");
                status = false;
            }

            var newPosttitle = $("#newPosttitle").val();
            if(newPosttitle == ''){
                callAlert(0,"You must add title to your post");
                status = false;
            }

            if(status){
                var redirectAfter = $('#site_pather2').val();
                var newHtml = $("#classerID").html(summernote);
                var findImgUrl = newHtml.find('img').attr('src');
                var findImgTitle = newHtml.find('img').attr('alt');
                $("#first_image").val(findImgUrl);
                $("#first_image_title").val(findImgTitle);
                $("#classerID").empty();
                let dateD = new Date();
                let vTime = dateD.toLocaleTimeString();
                $("#published_time").val(vTime);
                var formData = new FormData(this);
                 $.ajax({
                    url: 'form_submit/post/postschedule_post.php',
                    type: 'post',
                    data: formData,
                    contentType: false,
                    cache: false,
                    processData: false,
                    beforeSend: function() {
                        $("#postSubmit2").show();
			            $("#postSubmit").hide();
                    },
                    complete: function() {
                        $("#postSubmit").show();
			            $("#postSubmit2").hide();
                    },
                    success: function(result) {
                        const data = JSON.parse(result)
                        if(data.status == 1){
                            callAlert(1,"Post Successfully Published")
                            goRedirect(redirectAfter);
                        }
                    }

                });
            }
        }else{
            callAlert(0,"You Session is expired please login to continue")
            var redirectUrl = $("#site_pather").val();
            $("#stopDraftSaving").val(0);
            savePost();
            goRedirect(redirectUrl);
        }
        
        e.preventDefault();
    })

    function savePostS(){
        var status1 = $("#stopDraftSavingS").val();
        if(status1 == 0){
            var status = true;

            var newPosttitle = $("#newPosttitle").val();
            if(newPosttitle == ''){
                status = false;
            }

            var summernote = $("#summernote").val();
            if(summernote == ''){
                status = false;
            }
            var finder = summernote.includes('<img');
            if(!finder){
                callAlert(0,"Add at least one image to your post");
                status = false;
            }
            if(status){
                var newHtml = $("#classerID").html(summernote);
                var findImgUrl = newHtml.find('img').attr('src');
                var findImgTitle = newHtml.find('img').attr('alt');
                $("#first_image").val(findImgUrl);
                $("#first_image_title").val(findImgTitle);
                $("#classerID").empty();
                const form = document.getElementById("scheduleFormSubmit");
                var formData = new FormData(form);
            
                $.ajax({
                    url: 'form_submit/post/saveschedule.php',
                    contentType: false,
                    processData: false,
                    type: 'post',
                    data: formData,
                    beforeSend: function(){
                        $("#SpostSaveBtn").hide();
                        $("#SpostSaveBtn2").show();
                    },
                    complete: function(){
                        $("#SpostSaveBtn").show();
                        $("#SpostSaveBtn2").hide();
                    },
                    success: function(result) {
                        const data = JSON.parse(result);
                        if(data.status == 1){
                            toastr.success('Post saved successfuly')
                        } 
                    }
                });
            }
        }
    }
    setInterval(savePostS, 120000);

    $("#SpostSaveBtn").on("click", function(){
        var status = $("#stopDraftSavingS").val();
        $("#stopDraftSavingS").val(0);
        savePostS();
        $("#stopDraftSavingS").val(status);
    })
});