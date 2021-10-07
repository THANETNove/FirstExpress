 <!-- jQuery -->


 <!-- Bootstrap 4 -->
 <!-- DataTables  & Plugins -->
 <script src="{{ asset('plugins/datatables/jquery.dataTables.min.js')}}"></script>
 <script src="{{ asset('plugins/datatables-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
 <script src="{{ asset('plugins/datatables-responsive/js/dataTables.responsive.min.js')}}"></script>
 <script src="{{ asset('plugins/datatables-responsive/js/responsive.bootstrap4.min.js')}}"></script>
 <script src="{{ asset('plugins/datatables-buttons/js/dataTables.buttons.min.js')}}"></script>
 <script src="{{ asset('plugins/datatables-buttons/js/buttons.bootstrap4.min.js')}}"></script>
 <script src="{{ asset('plugins/jszip/jszip.min.js')}}"></script>
 <script src="{{ asset('plugins/pdfmake/pdfmake.min.js')}}"></script>
 <script src="{{ asset('plugins/pdfmake/vfs_fonts.js')}}"></script>
 <script src="{{ asset('plugins/datatables-buttons/js/buttons.html5.min.js')}}"></script>
 <script src="{{ asset('plugins/datatables-buttons/js/buttons.print.min.js')}}"></script>
 <script src="{{ asset('plugins/datatables-buttons/js/buttons.colVis.min.js')}}"></script>

 <script src="{{asset('dist/js/adminlte.min.js')}}"></script>




 <script>
$(function() {
    $("#example1").DataTable({
        "paging": false,
        "lengthChange": false,
        "searching": false,
        "ordering": false,
        "info": false,
        "autoWidth": false,
        "responsive": true
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    $('.table-bordered').DataTable({
        "paging": false,
        "lengthChange": false,
        "searching": false,
        "ordering": false,
        "info": false,
        "autoWidth": false,
        "responsive": true
    });



});
$(function() {
    $('.datepicker').datepicker({
        format: 'mm/dd/yyyy',
        startDate: '-3d'
    });
});


$(function() {
    $('.datepicker_out').datepicker();
});
$(function() {
    $('.datepicker').datepicker();
});
 </script>

 <script type="text/javascript">
var i = 1;
var id;


function myCreateFunction() {

    id = ++i;
    // console.log(id,i);
    var id_name_0 = 'name_0' + id;
    var id_name_1 = 'name_1' + id;
    var id_name_2 = 'name_2' + id;
    var id_name_3 = 'name_3' + id;
    var id_name_4 = 'name_4' + id;
    var idInput = 'idInput' + id;




    // console.log('aaa');

    var table = document.getElementById("myTable");
    var row = table.insertRow();
    var cell1 = row.insertCell(0);
    var cell2 = row.insertCell(1);
    var cell3 = row.insertCell(2);
    var cell4 = row.insertCell(3);
    var cell5 = row.insertCell(4);
    var cell6 = row.insertCell(5);
    var cell7 = row.insertCell(6);
    cell1.innerHTML = id;
    cell2.innerHTML = "<input type='text '  id='" + id_name_0 + "' name='" + id_name_0 +
        "'  value=''  placeholder='IN-201860006'  class='form-control text-right check-td'>";
    cell3.innerHTML = "<input type='text '   id='" + id_name_1 + "'  name='" + id_name_1 +
        "'   value=''  placeholder='15/06/2018'  class='form-control text-right datepicker check-td'>";
    cell4.innerHTML = "<input type='text   id='" + id_name_2 + "' name='" + id_name_2 +
        "'    value='' placeholder='12/06/2018' class='form-control text-right datepicker check-td'>";
    cell5.innerHTML = "<input type='text '  id='" + id_name_3 + "' name='" + id_name_3 +
        "'    value='' placeholder='000.00' class='form-control text-right check-td'>";
    cell6.innerHTML = "  <input type='text  '  id='" + id_name_4 + "' name='" + id_name_4 +
        "'  placeholder='000.00' class='form-control text-right check-td'>";
    cell7.outerHTML =
        " <td><div class='row'><div class='col-sm-12 col-md-8'><input type='text' class='form-control text-right input_number' id='" +
        idInput +
        "' value='' placeholder='000.00'  onChange='change_send(this.value)'></div><div class='col-sm-12 col-md-4'><a type='button' id='deleteRows'  onclick='myDeleteFunction(this)'  value='Del'> <i class='fas fas fa-times'></i></a>&nbsp;&nbsp;<a type='button' onclick='myCreateFunction()'> <i class='fas fa-plus'></i></a></div></div></td>";



    $('#my_id').html(id);
    $('.datepicker').datepicker({
        format: 'mm/dd/yyyy',
        startDate: '-3d'
    });
    //console.log(item);

}

function myCreateFunctionTwo(item) {

    id = i++;
    // console.log(id,i);
    var id_name_0 = 'name_0' + id;
    var id_name_1 = 'name_1' + id;
    var id_name_2 = 'name_2' + id;
    var id_name_3 = 'name_3' + id;
    var id_name_4 = 'name_4' + id;
    var idInput = 'idInput' + id;



    // console.log(item);
    var table = document.getElementById("idNewtr");
    var row = table.insertRow();
    var cell1 = row.insertCell(0);
    var cell2 = row.insertCell(1);
    var cell3 = row.insertCell(2);
    var cell4 = row.insertCell(3);
    var cell5 = row.insertCell(4);
    var cell6 = row.insertCell(5);
    var cell7 = row.insertCell(6);
    cell1.innerHTML = id;

    if (item) {
        cell2.innerHTML = "<input type='text '  id='" + id_name_0 + "' name='" + id_name_0 + "'  value='" + item.code +
            "'  placeholder='IN-201860006'  class='form-control text-right check-td'>";
        cell3.innerHTML = "<input type='text '   id='" + id_name_1 + "'  name='" + id_name_1 +
            "' value='" + item.dataIssue +
            "'  placeholder='15/06/2018'  class='form-control text-right datepicker check-td'>";
        cell4.innerHTML = "<input type='text   id='" + id_name_2 + "' name='" + id_name_2 +
            "'    value='" + item.dueDate +
            "' placeholder='12/06/2018' class='form-control text-right datepicker check-td'>";
        cell5.innerHTML = "<input type='text '  id='" + id_name_3 + "' name='" + id_name_3 +
            "'     value='" + item.netTotal + "' placeholder='000.00' class='form-control text-right check-td'>";
        cell6.innerHTML = "  <input type='text  '  id='" + id_name_4 + "' name='" + id_name_4 +
            "'    value='" + item.valuePaid + "' placeholder='000.00' class='form-control text-right check-td'>";
        cell7.outerHTML =
            " <td><div class='row'><div class='col-sm-12 col-md-8'><input type='text' class='form-control text-right input_number' id='" +
            idInput + "'value='" + item.billingAmount +
            "' placeholder='000.00'  onChange='change_send(this.value)'></div><div class='col-sm-12 col-md-4'><a type='button' id='deleteRows' onclick='myDeleteFunction(this)'  value='Del'> <i class='fas fas fa-times'></i></a>&nbsp;&nbsp;<a type='button' onclick='myCreateFunctionTwo()'> <i class='fas fa-plus'></i></a></div></div></td>";
    } else {
        cell2.innerHTML = "<input type='text '  id='" + id_name_0 + "' name='" + id_name_0 +
            "'  value=''  placeholder='IN-201860006'  class='form-control text-right check-td'>";
        cell3.innerHTML = "<input type='text '   id='" + id_name_1 + "'  name='" + id_name_1 +
            "'   value=''  placeholder='15/06/2018'  class='form-control text-right datepicker check-td'>";
        cell4.innerHTML = "<input type='text   id='" + id_name_2 + "' name='" + id_name_2 +
            "'    value='' placeholder='12/06/2018' class='form-control text-right datepicker check-td'>";
        cell5.innerHTML = "<input type='text '  id='" + id_name_3 + "' name='" + id_name_3 +
            "'    value='' placeholder='000.00' class='form-control text-right check-td'>";
        cell6.innerHTML = "  <input type='text  '  id='" + id_name_4 + "' name='" + id_name_4 +
            "'  placeholder='000.00' class='form-control text-right check-td'>";
            cell7.outerHTML =
            " <td><div class='row'><div class='col-sm-12 col-md-8'><input type='text' class='form-control text-right input_number' id='" +
            idInput + "'value='' placeholder='000.00'  onChange='change_send(this.value)'></div><div class='col-sm-12 col-md-4'><a type='button' id='deleteRows' onclick='myDeleteFunction(this)'  value='Del'> <i class='fas fas fa-times'></i></a>&nbsp;&nbsp;<a type='button' onclick='myCreateFunctionTwo()'> <i class='fas fa-plus'></i></a></div></div></td>";
    }



    $('#my_id').html(id);
    $('.datepicker').datepicker({
        format: 'mm/dd/yyyy',
        startDate: '-3d'
    });
    //console.log(item);

}

var munberA = 0;

function myDeleteFunction(node) {
//console.log('dasasdasdd');
    let numVal = $(node).parents().children(3).children(3).children(10).eq(2).val();
    //console.log(numVal);
    namValA = munberA - Number(numVal); // ยอดรวมสุทธิ
    let vatB = (namValA * 7) / 100;

    let sumVatB = namValA + vatB;
    let nunFixedD = sumVatB.toFixed(2);
    let splitB = nunFixedD.split(".");
    let arrayB0 = splitB[0];
    let arrayB1 = splitB[1]
    let maxB1 = new Intl.NumberFormat().format(arrayB0);
    $('#sumVat').html(maxB1 + '.' + arrayB1);

    let nunFixedAB = namValA.toFixed(2); // ราคาสุทธิสินค้าที่เสียภาษี
    let splitAD = nunFixedAB.split(".");
    let arrayD2 = splitAD[0];
    let arrayD3 = splitAD[1];
    let maxA2 = new Intl.NumberFormat().format(arrayD2);
    $('#price_products').html(maxA2 + '.' + arrayD3);;


    let mm = $(node).parents().eq(3).remove(); //remove row
    let uu = $('.count-row');
    let id_count = uu.length + 1;

    $('#my_id').html(id_count);

}

$(function() {
    let urlPath = location.pathname

    //console.log(urlPath);
    let strPath = urlPath.split("/");
    let pathName = strPath[4];
    //console.log(pathName,urlPath);

    if (pathName === 'create-invoice') {

        pathName = 'list-invoice';

    } else if (pathName === 'charge') {
        pathName = 'list-charge';
    } else if (pathName === 'list-cellCommission') {
        pathName = 'cell-commission';
    } else if (pathName === 'cost-price') {
        pathName = 'shipping-rate';
    } else {

    }

    $.each($('a.check-path'), (key, item) => {
        let tagAPath = $(item).attr('data-path')
        let tagAParentId = $(item).attr('data-parent')


        if (pathName === tagAPath) {

            $(tagAParentId).addClass('menu-is-opening menu-open')
            $(item).addClass('text-red active-manu')
        }

    })
})



function change_send(x) {
    const cars = x.split(",");
    let textNumber = "";
    for (let i = 0; i < cars.length; i++) {
        textNumber += cars[i];
    }


    if (isNaN(textNumber)) {

        $('#price_products').html(' ' + 'บาท');
    } else {

        numberB = Number(textNumber); ///ยอดรวมสุทธิ
        munberA = numberB + munberA;
        //console.log(munberA);
        let vat = (munberA * 7) / 100;
        let sumVatA = munberA + vat;
        nunFixed = sumVatA.toFixed(2);
        let splitA = nunFixed.split(".");
        let array0 = splitA[0];
        let array1 = splitA[1]
        let maxA1 = new Intl.NumberFormat().format(array0);
        $('#sumVat').html(maxA1 + '.' + array1);



        let nunFixedA = munberA.toFixed(2); // ราคาสุทธิสินค้าที่เสียภาษี
        let splitAB = nunFixedA.split(".");
        let array2 = splitAB[0];
        let array3 = splitAB[1]

        //console.log(splitAB);

        let maxA2 = new Intl.NumberFormat().format(array2);
        $('#price_products').html(maxA2 + '.' + array3);
        //$('#bant').html('บาท');


    }


}




function editInvoice(datajson) {

    // console.log(datajson);

    $.each(datajson, (key, item) => {
        myCreateFunctionTwo(item);
    });





}


function Invoice() {

    var issuedDateIssue = jQuery('#date-issued1').val();
    var dateDue = jQuery('#date-end2').val();
    var documentThat = jQuery('#idBn-2018').val();
    var refer = jQuery('#text-Textarea1').val();
    var tag = jQuery('#tag').val();

    var datajson = [];

    $.each($('#idtr > tr '), (key, item) => {



        let data = {
            id: $(item).children().eq(0).text(),
            code: $(item).children().eq(1).children().val(),
            dataIssue: $(item).children().eq(2).children().val(),
            dueDate: $(item).children().eq(3).children().val(),
            netTotal: $(item).children().eq(4).children().val(),
            valuePaid: $(item).children().eq(5).children().val(),
            billingAmount: $(item).children().eq(6).children().children().children().val(),
        }
        datajson.push(data);

    })

    var name = $(this).attr('text-name').text;
    var address = $(this).attr('text-address').text;
    var totalItems = $("#my_id").html();
    var priceGoods = $("#price_products").html();
    var vat = $("#vat").html();
    var netTotal = $("#sumVat").html();

    if (issuedDateIssue !== "" && dateDue !== "" && refer !== "" && tag !== "" && datajson !== "") {
        jQuery.ajax({
            url: "{{ url('invoice-store') }}",
            method: 'post',
            data: {
                "_token": "{{ csrf_token() }}",
                issuedDateIssue,
                dateDue,
                documentThat,
                refer,
                tag,
                datajson,
                name,
                address,
                totalItems,
                priceGoods,
                vat,
                netTotal,
            },
            success: function(data) {
                valid = data.message;
                $('#massageData').html(valid);
                location.replace("{{ url('customer') }}");
            },
        });

    } else {
        $('#errorForm').html('กรุณากรอกข้อมูลให้ครับ');
    }

}










/* 
$(".home-tab2").click(function(){
    $("#i-home").css("color", "red");
    $("#i-profile").css("color", "#686868"); 
    $("#i-contact").css("color", "#686868");


    $("#home-tab").css("color", "red");
    $("#home-tab").css("background-color", "rgb(251 230 230 / 48%");
    $("#profile-tab").css("color", "#5f6061");
    $("#profile-tab").css("background-color", "#fff");
    $("#contact-tab").css("color", "#5f6061");
    $("#contact-tab").css("background-color", "#fff");
    

    
});


$("#profile-tab").click(function(){
    $("#nav-profile-tab").trigger('click');
    $("#i-profile").css("color", "red"); 
    $("#i-home").css("color", "#686868"); 
    $("#i-contact").css("color", "#686868");



});


$(".profile-tab2").click(function(){
  
    $("#i-profile").css("color", "red"); 
    $("#i-home").css("color", "#686868"); 
    $("#i-contact").css("color", "#686868");

    /*
    $("#profile-tab").css("color", "red");
    $("#profile-tab").css("background-color", "rgb(251 230 230 / 48%");
    $("#home-tab").css("color", "#5f6061");
    $("#home-tab").css("background-color", "#fff");
    $("#contact-tab").css("color", "#5f6061");
    $("#contact-tab").css("background-color", "#fff");
    
    
});




$("#contact-tab").click(function(){
    $("#nav-contact-tab").trigger('click');
    $("#i-contact").css("color", "red");
    $("#i-home").css("color", "#686868"); 
    $("#i-profile").css("color", "#686868");
});


$(".contact-tab3").click(function(){
    $("#i-contact").css("color", "red");
    $("#i-home").css("color", "#686868"); 
    $("#i-profile").css("color", "#686868");

    
    /*

    $("#home-tab").css("color", "#5f6061");
    $("#home-tab").css("background-color", "#fff");
    $("#profile-tab").css("color", "#5f6061");
    $("#profile-tab").css("background-color", "#fff");
    $("#contact-tab").css("color", "red");
    $("#contact-tab").css("background-color", "rgb(251 230 230 / 48%");
    
});

*/
 </script>