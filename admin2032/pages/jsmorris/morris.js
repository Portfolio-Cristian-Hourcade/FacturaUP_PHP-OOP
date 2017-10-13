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
    lineColors:["red","black"]
});

Mor.setData(y); //Setiamos el json en el Morris

}
});
});






