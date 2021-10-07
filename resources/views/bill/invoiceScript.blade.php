<script>
$(function() {


    var id_data = $("#idInvoice").html();

    jQuery.ajax({
        url: "{{ url('getInvoice') }}",
        method: 'post',
        data: {
            "_token": "{{ csrf_token() }}",
            id_data,

        },
        success: function(data) {
            issuedDateIssue = data.data.issuedDateIssue;
            dateDue = data.data.dateDue;
            documentThat = data.data.documentThat;
            name = data.data.name;
            address = data.data.address;
            jsonData = data.data.datajson;
            priceGoods = data.data.priceGoods;
            netTotal = data.data.netTotal;
            refer = data.data.refer;
            tag = data.data.tag;

            datajson= JSON.parse(jsonData);
            editInvoice(datajson);
            document.getElementById('date-issued1').value = issuedDateIssue;
            document.getElementById('date-end2').value = dateDue;
            document.getElementById('idBn-2018').value = documentThat;
            document.getElementById('text-Textarea1').value = refer;
            document.getElementById('tag').value = tag;

             $('#text-name').html(name);
             $('#text-address').html(address);
             $('#price_products').html(priceGoods);
             $('#sumVat').html(netTotal);
             //$('#text-name').html(address);
        // console.log(data);

        },

    });
});


function newInvoice() {
  
  //console.log('15555');
  var issuedDateIssue = jQuery('#date-issued1').val();
  var dateDue = jQuery('#date-end2').val();
  var documentThat = jQuery('#idBn-2018').val();
  var refer = jQuery('#text-Textarea1').val();
  var tag = jQuery('#tag').val();

  var datajson = [];
//console.log($('#idTr').children());
  $.each($('#idNewtr > tr '), (key, item) => {

    //console.log(item);

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

  //console.log(datajson);
  var id = $(this).attr('idInvoice').text;
  var name = $(this).attr('text-name').text;
  var address = $(this).attr('text-address').text;
  var totalItems = $("#my_id").html();
  var priceGoods = $("#price_products").html();
  var vat = $("#vat").html();
  var netTotal = $("#sumVat").html();
  


  if (issuedDateIssue !== "" && dateDue !== "" && refer !== "" && tag !== "" && datajson !== "") {
      jQuery.ajax({
          url: "{{ url('upInvoice') }}",
          method: 'post',
          data: {
              "_token": "{{ csrf_token() }}",
              id,
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

</script>