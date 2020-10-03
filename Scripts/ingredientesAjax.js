$('#table-2 tr').each(function () {
    var cuotaNo= $(this).find('td').eq(0).html();
    var interes = $(this).find('td').eq(1).html();
    var abonoCapital = $(this).find('td').eq(2).html();
    var valorCuota = $(this).find('td').eq(3).html();
    var saldoCapital = $(this).find('td').eq(4).html();

    $.ajax({
     async: false,
     type: "POST",
     url: "crud/register-payment-plan.php",
        data: "cuotaNo="+cuotaNo+"&interes="+interes+"&abonoCapital="+abonoCapital+"&valorCuota="+valorCuota+"&saldoCapital="+saldoCapital,
     data: {valores:valores},
     success: function(data) { if(data!="");}
    });
   });