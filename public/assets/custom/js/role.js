// A $( document ).ready() block.
$(document).ready(function () {
    $("#kt_datatable_example_1").DataTable({
        searchDelay: 500,
        processing: true,
        serverSide: true,
        order: [
            [2, 'desc']
        ],
        // dom: 'lfrtip',
        dom: "<'row'<'col-sm-6'l><'col-sm-6'f>>" +
            "<'row'<'col-sm-12'tr>>" +
            "<'row'<'col-sm-6'i><'col-sm-6'p>>",
        stateSave: true,
        ajax: {
            url: "http://localhost:8000/api/role/data",
            type: "GET",
            // success: function (e) {
            //     $("#kt_datatable_example_1_processing").css("display", "none");


            //             console.log(e);
            // },
            // "headers": {
            //     "Authorization": "Bearer " + token,
            // },
            // "data": function(e) {
            //     e.officeid = $(".filter-office").val(),
            //         e.status = $(".filter-event").val(),
            //         e.categoryid = $(".filter-category").val(),
            //         e.year = $(".filter-year").val(),
            //         e.month = $(".filter-bulan").val()
            // } ,
            // "error": function (XMLHttpRequest, textStatus, errorThrown) {

            //     const myJSON = JSON.parse(XMLHttpRequest.responseText)
            //     if (myJSON.error == "invalid_token") {
            //         alertify.error('Session anda selesai');
            //         localStorage.removeItem("token");
            //         location.href = base_url;
            //     }
            // }
        },
       
        columns: [
            {
                data: 'DT_RowIndex',
                searchable: false 
            },
            {
                data: 'name'
            },
            {
                data: 'code'
            },
            {
                data: 'alert',
                searchable: false ,
                orderable:false
            },
            {
                data: 'action',
                searchable: false,
                orderable:false
            }
        ],
      
    });

});
