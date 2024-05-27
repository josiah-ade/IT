$(document).ready(function(){
    $('[data-toggle="tooltip"]').tooltip();
    
    /*----------------------------------------------
        Data Tables
    ------------------------------------------------*/
    $("#contact_messages").DataTable({
        "responsive": true, 
        "lengthChange": true, 
        "autoWidth": false,
        "processing": true,
        "serverSide": true,
        "ordering": false,
        "pageLength": 25,
        "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"],
        "ajax": {
        url: "fetchers/messages/fetch_messages.php",
        type: "post"
        },
        columnDefs: [{ 
            targets: 2,
            render: $.fn.dataTable.render.ellipsis(15)
        },
        { 
            targets: 4,
            render: $.fn.dataTable.render.ellipsis(20)
        },
        ]
    })

    $("#post_table").DataTable({
        "responsive": true, 
        "lengthChange": true, 
        "autoWidth": false,
        "processing": true,
        "serverSide": true,
        "ordering": false,
        "pageLength": 25,
        "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"],
        "ajax": {
            url: "fetchers/post/fetch.php",
            type: "post"
        },
        columnDefs: [{ 
            targets: 1,
            render: $.fn.dataTable.render.ellipsis(20)
          },
          { 
            targets: 4,
            render: $.fn.dataTable.render.ellipsis(15)
          },
        ]
      })

      $("#activepost_table").DataTable({
        "responsive": true, 
        "lengthChange": true, 
        "autoWidth": false,
        "processing": true,
        "serverSide": true,
        "ordering": false,
        "pageLength": 25,
        "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"],
        "ajax": {
            url: "fetchers/post/activepost_fetch.php",
            type: "post"
        },
        columnDefs: [{ 
            targets: 1,
            render: $.fn.dataTable.render.ellipsis(20)
          },
          { 
            targets: 4,
            render: $.fn.dataTable.render.ellipsis(15)
          },
        ]
      })

      $("#inactivepost_table").DataTable({
        "responsive": true, 
        "lengthChange": true, 
        "autoWidth": false,
        "processing": true,
        "serverSide": true,
        "ordering": false,
        "pageLength": 25,
        "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"],
        "ajax": {
            url: "fetchers/post/inactivepost_fetch.php",
            type: "post"
        },
        columnDefs: [{ 
            targets: 1,
            render: $.fn.dataTable.render.ellipsis(20)
          },
          { 
            targets: 4,
            render: $.fn.dataTable.render.ellipsis(15)
          },
        ]
      })
      $("#schedulepost_table").DataTable({
        "responsive": true, 
        "lengthChange": true, 
        "autoWidth": false,
        "processing": true,
        "serverSide": true,
        "ordering": false,
        "pageLength": 25,
        "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"],
        "ajax": {
            url: "fetchers/post/schedule_post_fetch.php",
            type: "post"
        },
        columnDefs: [{ 
            targets: 1,
            render: $.fn.dataTable.render.ellipsis(20)
          },
          { 
            targets: 4,
            render: $.fn.dataTable.render.ellipsis(15)
          },
        ]
      })
      $("#draftpost_table").DataTable({
        "responsive": true, 
        "lengthChange": true, 
        "autoWidth": false,
        "processing": true,
        "serverSide": true,
        "ordering": false,
        "pageLength": 25,
        "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"],
        "ajax": {
            url: "fetchers/post/draft_fetch.php",
            type: "post"
        },
        columnDefs: [{ 
            targets: 0,
            render: $.fn.dataTable.render.ellipsis(20)
          },
          { 
            targets: 4,
            render: $.fn.dataTable.render.ellipsis(15)
          },
        ]
      })

    $("#example_catdelete").DataTable({
        "responsive": true, 
        "lengthChange": true, 
        "autoWidth": false,
        "pageLength": 25,
        "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
      })

    /*----------------------------------------------
        Select Plugin
    ------------------------------------------------*/
    $('.select2').select2();

    //  var post_published_date = $('#post_published_date').val();
    let dateD = new Date();
    let vTime = dateD.toLocaleTimeString();
    let Date1 = dateD.toDateString();
    let Month = dateD.getMonth() + 1;
    let Date2 = dateD.getFullYear() +"-"+ Month + "-"+ dateD.getDate();
    $('#post_published_date').val(Date2)

    /*----------------------------------------------
    Icon Picker
    ------------------------------------------------*/
    
    $('#icpicker').on('change', function(e) {
        $('#pickeric').val(e.icon)
    });

    var icon=$('#myicon').val()
    var jap = document.getElementById("swind");
    if(icon != '' && icon != undefined){
        jap.className = icon;
    }
    
})
