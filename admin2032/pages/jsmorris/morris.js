$(document).ready(function() {

$.ajax({
    url:"jsmorris/data-js.php",
    dataType: "json",
    success:function(result){
        codigoJson = result.replace(/'/g, "\""); //Arreglamos las comillas 
        var x = codigoJson;
        var y = JSON.parse(x);  //transformamos en x
        var Mor = Morris.Line({
            element: 'grafico',
            xkey: 'period', 
            ykeys: ['sale', 'Pago'],
            parseTime: false,
            labels: ['Descargas demo','Descargas Pago'],
            lineWidth:['3px'],
            lineColors:["#530288","#ff8a00"]
        });

    Mor.setData(y); //Setiamos el json en el Morris

    }
});


$.ajax({
    url:"jsmorris/data-js-bar.php",
    dataType: "json",
    success:function(resultado){
        codigoJson2 = resultado.replace(/'/g, "\""); //Arreglamos las comillas   
        var te = codigoJson2;
        var yax = JSON.parse(te);  //transformamos en x
        var bar = Morris.Bar({
        element: 'bar',
        xkey: 'Mes', 
        ykeys: ['a', 'b'],
        labels: ['Descargas Demo','Descargas Pago'],
      
    });
    bar.setData(yax);
    }
});


});






