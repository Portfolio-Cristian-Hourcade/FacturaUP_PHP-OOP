$(document).ready(function() {
 

var strings="[{period:'Dia 2', 'sale':56 , 'Pago':70}]";
$.ajax({

  url:"jsmorris/data-js.php",

  success:function(result){


var NuevaVariable=JSON.parse(result);
alert(NuevaVariable)
alert(strings)
if(NuevaVariable==strings){
    alert("HOLA")
}
// var newstr = result.replace(/[ ""]/, '');
var f = JSON.stringify(NuevaVariable);
dataso:{data:f}
// alert(strings);


//     var datajson=JSON.stringify(newstr);
    // alert(JSON.parse(datajson));


    // prueba=datajson.replace(/[\\"]/g, '');
    // jose=prueba.replace("rnrn", '');
    // jose=JSON.stringify(jose);
// alert(jose)
// alert(jose.length);
// alert(strings.length)



    var Mor = Morris.Line({

    element: 'grafico',
    data: [],
    xkey: 'period', 
    ykeys: ['sale', 'Pago'],
    parseTime: false,
    labels: ['Descargas demo','Descargas Pago'],
  

});
Variable =(strings);
alert(Variable)
Mor.setData(JSON.parse(result));
// anotherDataSet = [{
//     date: '03-04-2015', value: 301
// }, {
//     date: '03-05-2015', value: 35
// }, {
//     date: '03-06-2015', value: 55
// }]

// bar = Morris.Line({
//   element: 'chart',
//   data: [],
//   xkey: 'date',
//   ykeys: ['value'],
//   labels: ['Orders']
// });
// bar.setData(anotherDataSet);
//   }
// });
 //
 }
});
});





// [{period:'Dia 1', "sale":20 , "Pago":70},             
//                     {period:'Dia 2', "sale":56 , "Pago":70},             
//                     {period:'Dia 3', "sale":156 , "Pago":70},             
//                     {period:'Dia 4', "sale":125 , "Pago":70},               
//                     {period:'Dia 5', "sale":158 , "Pago":70},             
//                     {period:'Dia 6', "sale":166 , "Pago":21},              
//                     {period:'Dia 7', "sale":169 , "Pago":70},
//                     {period:'Dia 8', "sale":20 , "Pago":70},             
//                     {period:'Dia 9', "sale":56 , "Pago":70},             
//                     {period:'Dia 10', "sale":156 , "Pago":70},             
//                     {period:'Dia 11', "sale":125 , "Pago":70},               
//                     {period:'Dia 12', "sale":158 , "Pago":70},             
//                     {period:'Dia 13', "sale":166 , "Pago":70},              
//                     {period:'Dia 14', "sale":169 , "Pago":70},
//                     {period:'Dia 15', "sale":20 , "Pago":70},             
//                     {period:'Dia 16', "sale":56 , "Pago":70},             
//                     {period:'Dia 17', "sale":156 , "Pago":70},             
//                     {period:'Dia 18', "sale":125 , "Pago":70},               
//                     {period:'Dia 19', "sale":158 , "Pago":70},             
//                     {period:'Dia 20', "sale":166 , "Pago":70},              
//                     {period:'Dia 21', "sale":169 , "Pago":60},
//                     {period:'Dia 22', "sale":20 , "Pago":70},             
//                     {period:'Dia 23', "sale":56 , "Pago":70},             
//                     {period:'Dia 24', "sale":156 , "Pago":70},             
//                     {period:'Dia 25', "sale":125 , "Pago":70},               
//                     {period:'Dia 26', "sale":158 , "Pago":70},             
//                     {period:'Dia 27', "sale":166 , "Pago":70},              
//                     {period:'Dia 28', "sale":169 , "Pago":120},
//                     {period:'Dia 29', "sale":169 , "Pago":190},
//                     {period:'Dia 30', "sale":169 , "Pago":120},
//                     {period:'Dia 31', "sale":169 , "Pago":190}
//            ],