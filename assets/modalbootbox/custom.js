 function generateTable(cdiv,columns,dbsource,tabnum){

        var xtab=$('#'+cdiv).dataTable({
            "aaSorting": [[ 1, "asc" ]],
            "bStateSave": true,
            "bFilter":   true,
            "ordering": true,
			"destroy": true,
            "bProcessing": true,
            "columns": columns ,
            "bServerSide":true,
            "bAutoWidth":false,
            "sAjaxSource": dbsource,
            "iDisplayLength": 10,
            responsive: true,
            "rowCallback": function( row, data, iDisplayIndex ) {
                if (tabnum){
                    var info = xtab.api().page.info();
                    var page = info.page;
                    var length = info.length;
                    var index = (page * length + (iDisplayIndex +1));
                    $('td:eq(0)', row).html(index);
                }

            },
            "fnInitComplete": function () {
                xtab.fnAdjustColumnSizing();

            },
            'fnServerData': function (sSource, aoData, fnCallback) {
                $.ajax
                ({
                    'dataType': 'json',
                    'type': 'POST',
                    'url': sSource,
                    'data': aoData,
                    'success': fnCallback
                });
            }
        });
        xtab.dataTable().fnSetFilteringDelay(1000);
        return xtab;
    }

function showbigbox(xtitle,xurl,xdata){
    $.ajax({
        type: 'POST',
        data:xdata,

        url: xurl,
        success: function(data) {

            bootbox.dialog({
                className: "smallbox",
                message: data,
                title: xtitle

            });
        }
    });
}

function showmedbox(xtitle,xurl,xdata){
    $.ajax({
        type: 'POST',
        data:xdata,

        url: xurl,
        success: function(data) {

            bootbox.dialog({
                className: "medboxbox",
                message: data,
                title: xtitle

            });
        }
    });
}


function showmedbox(xtitle,xurl,xdata){
    $.ajax({
        type: 'POST',
        data:xdata,

        url: xurl,
        success: function(data) {

            bootbox.dialog({
                className: "medbox",
                message: data,
                title: xtitle

            });
        }
    });
}


function savedata(formid,callback) {
    
    var form = $('#'+formid).get(0);
    var formData = new FormData(form);
    $.ajax({
        data: formData,
        contentType: false,
        cache: false,
        processData: false,
        dataType: 'json',
        type: "POST",
        url: form.action,

        success: function (response) {

            if (response.success) {
                alert("Data Updated")
                callback();
            } else {
                if (response.messages) {
                    if (isArray(response.messages)) {
                        $.each(response.messages, function (i, item) {
                            alert(item);
                        });
                    }
  
                } else {
                    alert("Failed Update")
                }
            }
        }
    });
}

function deletedata(formid,callback) {
    
    var form = $('#'+formid).get(0);
    var formData = new FormData(form);
    $.ajax({
        data: formData,
        contentType: false,
        cache: false,
        processData: false,
        dataType: 'json',
        type: "POST",
        url: form.action,

        success: function (response) {

            if (response.success) {
                alert("Data Deleted")
                callback();
            } else {
                if (response.messages) {
                    if (isArray(response.messages)) {
                        $.each(response.messages, function (i, item) {
                            alert(item);
                        });
                    }
  
                } else {
                    alert("Failed to Delete")
                }
            }
        }
    });
}

function searchdata(formid,callback) {
    
    var form = $('#'+formid).get(0);
    var formData = new FormData(form);
    $.ajax({
        data: formData,
        contentType: false,
        cache: false,
        processData: false,
        dataType: 'json',
        type: "POST",
        url: form.action,

        success: function (response) {

            if (response.success) {
                //alert("Data Deleted")
                callback();
            } else {
                if (response.messages) {
                    if (isArray(response.messages)) {
                        $.each(response.messages, function (i, item) {
                            alert(item);
                        });
                    }
  
                } else {
                    alert("Failed to search")
                }
            }
        }
    });
}
