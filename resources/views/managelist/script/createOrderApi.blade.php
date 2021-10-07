<script type="text/javascript">

var  i = 1;
var apiData = "";
var apiDataLabel = "";
var apiDataCancel = "";
function createOrder() {

    createOrderTd();
    jQuery.ajax({

        url: "{{url('/api-createOrder')}}",
        method: 'get',
        headers: {
            'XSRF-TOKEN': $('meta[name="_token"]').attr('content')
        },

        success: function(data) {
            //valid = data.message;

            let dataname = data.split(",");
            let name3A = dataname[2].substring(9, 14);
           // console.log(apiData);

           if (name3A === 'true') {
                $('#' + apiData).html('สำเร็จ');
            } else {
                $('#' + apiData).html('ไม่สำเร็จ');
            }


        },
        error: function(data) {

            $('#api-data').html(data);
        }

    });



}







function getLabel() {
    LabelOrderTd();
    jQuery.ajax({

        url: "{{url('/api-getLabel')}}",
        method: 'get',
        headers: {
            'XSRF-TOKEN': $('meta[name="_token"]').attr('content')
        },

        success: function(data) {
            //valid = data.message;
            $('#' + apiDataLabel).html('สำเร็จ');
        },
        error: function(data) {

            $('#api-data').html(data);
        }

    });
}


function cancelOrder() {

    cancelOrderTd();
    jQuery.ajax({

        url: "{{url('/api-cancelOrder')}}",
        method: 'get',
        headers: {
            'XSRF-TOKEN': $('meta[name="_token"]').attr('content')
        },

        success: function(data) {
            //valid = data.message;
            let dataname = data.split(",");
            let name3A = dataname[2].substring(9, 13);


            if (name3A === 'true') {
                $('#' + apiDataCancel).html('สำเร็จ');
            } else {
                $('#' + apiDataCancel).html('ไม่สำเร็จ');
            }
        },
        error: function(data) {

            $('#api-data').html(data);
        }

    });

}

function createOrderTd() {
    var apiId = i++;
     apiData = 'api' + apiId;

    var table = document.getElementById("myTableApi-create");
    var row = table.insertRow();
    var cell1 = row.insertCell(0);
    var cell2 = row.insertCell(1);
    var cell3 = row.insertCell(2);
    var cell4 = row.insertCell(3);
    var cell5 = row.insertCell(4);
    var cell6 = row.insertCell(5);
    var cell7 = row.insertCell(6);
    var cell8 = row.insertCell(7);
    var cell9 = row.insertCell(8);
    var cell10 = row.insertCell(9);
    var cell11 = row.insertCell(10);
    var cell12 = row.insertCell(11);
    var cell13 = row.insertCell(12);
    var cell14 = row.insertCell(13);
    var cell15 = row.insertCell(14);
    var cell16 = row.insertCell(15);
    var cell17 = row.insertCell(16);
    var cell18 = row.insertCell(17);
    var cell19 = row.insertCell(18);
    var cell20 = row.insertCell(19);
    var cell21 = row.insertCell(20);
    var cell22 = row.insertCell(21);
    var cell23 = row.insertCell(22);
    var cell24 = row.insertCell(23);
    var cell25 = row.insertCell(24);
    var cell26 = row.insertCell(25);
    var cell27 = row.insertCell(26);
    var cell28 = row.insertCell(27);
    cell1.innerHTML = "<div class='text-center'><input class='list-checkbox' type='checkbox' value='' id='flexCheckDefault'></div>";
    cell2.innerHTML = "309155597";
    cell3.innerHTML = "309155597-8629";
    cell4.innerHTML = "EY660437537TH";
    cell5.innerHTML = "สมใจ";
    cell6.innerHTML = "111 หมู่ที่ 1 อำเภอปลายพระยา";
    cell7.innerHTML = "ปลายพระยา";
    cell8.innerHTML = "กระบี่";
    cell9.innerHTML = "81160";
    cell10.innerHTML = "somjai@thailandpost.com";
    cell11.innerHTML = "02-2221122";
    cell12.innerHTML = "พรมมาวัน";
    cell13.innerHTML = "211/1 หมู่ที่ 11ถ.แจ้งวัฒนะ";
    cell14.innerHTML = "หลักสี่";
    cell15.innerHTML = "กรุงเทพฯ";
    cell16.innerHTML = "10210";
    cell17.innerHTML = "023453333";
    cell18.innerHTML = "500";
    cell19.innerHTML = "-";
    cell20.innerHTML = "400";
    cell21.innerHTML = "D";
    cell22.innerHTML = "TPD20160309-0001";
    cell23.innerHTML = "TH0101";
    cell24.innerHTML = "10120";
    cell25.innerHTML = "RM-435";
    cell26.innerHTML = "Y";
    cell27.innerHTML = "500";
    cell28.innerHTML = "<p id='" + apiData +"'></p>";

    

}



function LabelOrderTd() {
    var apiId = i++;
     apiDataLabel = 'apiLabel' + apiId;

    var table = document.getElementById("myTableApi-Label");
    var row = table.insertRow();
    var cell1 = row.insertCell(0);
    var cell2 = row.insertCell(1);
    var cell3 = row.insertCell(2);
    var cell4 = row.insertCell(3);
    var cell5 = row.insertCell(4);
    var cell6 = row.insertCell(5);
    var cell7 = row.insertCell(6);
    var cell8 = row.insertCell(7);
    var cell9 = row.insertCell(8);
    var cell10 = row.insertCell(9);
    var cell11 = row.insertCell(10);
    var cell12 = row.insertCell(11);
    var cell13 = row.insertCell(12);
    var cell14 = row.insertCell(13);
    var cell15 = row.insertCell(14);
    var cell16 = row.insertCell(15);
    var cell17 = row.insertCell(16);
    var cell18 = row.insertCell(17);
    var cell19 = row.insertCell(18);
    var cell20 = row.insertCell(19);
    var cell21 = row.insertCell(20);
    var cell22 = row.insertCell(21);
    var cell23 = row.insertCell(22);
    var cell24 = row.insertCell(23);
    var cell25 = row.insertCell(24);
    var cell26 = row.insertCell(25);
    var cell27 = row.insertCell(26);
    var cell28 = row.insertCell(27);
    cell1.innerHTML = "<div class='text-center'><input class='list-checkbox' type='checkbox' value='' id='flexCheckDefault'></div>";
    cell2.innerHTML = "309155597";
    cell3.innerHTML = "309155597-8629";
    cell4.innerHTML = "EY660437537TH";
    cell5.innerHTML = "สมใจ";
    cell6.innerHTML = "111 หมู่ที่ 1 อำเภอปลายพระยา";
    cell7.innerHTML = "ปลายพระยา";
    cell8.innerHTML = "กระบี่";
    cell9.innerHTML = "81160";
    cell10.innerHTML = "somjai@thailandpost.com";
    cell11.innerHTML = "02-2221122";
    cell12.innerHTML = "พรมมาวัน";
    cell13.innerHTML = "211/1 หมู่ที่ 11ถ.แจ้งวัฒนะ";
    cell14.innerHTML = "หลักสี่";
    cell15.innerHTML = "กรุงเทพฯ";
    cell16.innerHTML = "10210";
    cell17.innerHTML = "023453333";
    cell18.innerHTML = "500";
    cell19.innerHTML = "-";
    cell20.innerHTML = "400";
    cell21.innerHTML = "D";
    cell22.innerHTML = "TPD20160309-0001";
    cell23.innerHTML = "TH0101";
    cell24.innerHTML = "10120";
    cell25.innerHTML = "RM-435";
    cell26.innerHTML = "Y";
    cell27.innerHTML = "500";
    cell28.innerHTML = "<p id='" + apiDataLabel +"'></p>";

    

}


function cancelOrderTd() {
    var apiId = i++;
     apiDataCancel = 'apiLabel' + apiId;

    var table = document.getElementById("myTableApi-cancel");
    var row = table.insertRow();
    var cell1 = row.insertCell(0);
    var cell2 = row.insertCell(1);
    var cell3 = row.insertCell(2);
    var cell4 = row.insertCell(3);
    var cell5 = row.insertCell(4);
    var cell6 = row.insertCell(5);
    var cell7 = row.insertCell(6);
    var cell8 = row.insertCell(7);
    var cell9 = row.insertCell(8);
    var cell10 = row.insertCell(9);
    var cell11 = row.insertCell(10);
    var cell12 = row.insertCell(11);
    var cell13 = row.insertCell(12);
    var cell14 = row.insertCell(13);
    var cell15 = row.insertCell(14);
    var cell16 = row.insertCell(15);
    var cell17 = row.insertCell(16);
    var cell18 = row.insertCell(17);
    var cell19 = row.insertCell(18);
    var cell20 = row.insertCell(19);
    var cell21 = row.insertCell(20);
    var cell22 = row.insertCell(21);
    var cell23 = row.insertCell(22);
    var cell24 = row.insertCell(23);
    var cell25 = row.insertCell(24);
    var cell26 = row.insertCell(25);
    var cell27 = row.insertCell(26);
    var cell28 = row.insertCell(27);
    cell1.innerHTML = "<div class='text-center'><input class='list-checkbox' type='checkbox' value='' id='flexCheckDefault'></div>";
    cell2.innerHTML = "309155597";
    cell3.innerHTML = "309155597-8629";
    cell4.innerHTML = "EY660437537TH";
    cell5.innerHTML = "สมใจ";
    cell6.innerHTML = "111 หมู่ที่ 1 อำเภอปลายพระยา";
    cell7.innerHTML = "ปลายพระยา";
    cell8.innerHTML = "กระบี่";
    cell9.innerHTML = "81160";
    cell10.innerHTML = "somjai@thailandpost.com";
    cell11.innerHTML = "02-2221122";
    cell12.innerHTML = "พรมมาวัน";
    cell13.innerHTML = "211/1 หมู่ที่ 11ถ.แจ้งวัฒนะ";
    cell14.innerHTML = "หลักสี่";
    cell15.innerHTML = "กรุงเทพฯ";
    cell16.innerHTML = "10210";
    cell17.innerHTML = "023453333";
    cell18.innerHTML = "500";
    cell19.innerHTML = "-";
    cell20.innerHTML = "400";
    cell21.innerHTML = "D";
    cell22.innerHTML = "TPD20160309-0001";
    cell23.innerHTML = "TH0101";
    cell24.innerHTML = "10120";
    cell25.innerHTML = "RM-435";
    cell26.innerHTML = "Y";
    cell27.innerHTML = "500";
    cell28.innerHTML = "<p id='" + apiDataCancel +"'></p>";

    

}
</script>