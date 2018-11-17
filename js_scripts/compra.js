var data = [];
var indice=0;
function ordenar(){

    var cpeperoni=document.getElementById('cpeperoni').value;
    var chawaiana=document.getElementById('chawaiana').value;
    var c4quesos=document.getElementById('c4quesos').value;

    if(cpeperoni >0){
        data.push(indice);
        data[indice] = [cpeperoni,"Pizza con pepperoni","$100",100*cpeperoni];
        indice++;
    }
    else{
        cpeperoni=0;
    }

    if(chawaiana >0 ){
        data.push(indice);
        data[indice] = [chawaiana," Pizza Hawaina ","$80", 80*chawaiana];
        indice++;
    }
    else{
        chawaiana=0;
    }
    
    if(c4quesos >0 ){
        data.push(indice);
        data[indice] = [c4quesos," Pizza con 4 quesos ","$130", 130*c4quesos];
        indice++;
    }
    else{
        c4quesos=0;
    }

    graficar();
}

function graficar(){
    document.write("<body style='background-color:#fffdef;'>")
    document.write("<div style='background-color:#f2f2f2;width:50%;border:3px solid #c50000;margin-left:25%;margin-rigth:25%'>")
    document.write("<center><h2>"+"SU CUENTA: "+ "</h2></center>"+ "<br>");

    document.write("<table style='border:3px solid #e70000;width:50%;margin-left:25%;margin-rigth:25%;margin-bottom:10%;'>"+
                    "<tr>"+
                    "<th style='text-align=center;border-bottom: 1px solid #ddd'>Cantidad</th>"+
                    "<th style='text-align=center;border-bottom: 1px solid #ddd'>Descripcion</th>"+
                    "<th style='text-align=center;border-bottom: 1px solid #ddd'>Precio Unitario</th>"+
                    "<th style='text-align=center;border-bottom: 1px solid #ddd'>Importe</th>"+
                    "</tr>");

    
    for(var i=0; i<indice; i++){
        document.write("<tr>"+
                        "<td style='text-align=center;border-bottom: 1px solid #ddd'>"+data[i][0]+"</td>"+
                        "<td style='text-align=center;border-bottom: 1px solid #ddd'>"+data[i][1]+"</td>"+
                        "<td style='text-align=center;border-bottom: 1px solid #ddd'>"+data[i][2]+"</td>"+
                        "<td style='text-align=center;border-bottom: 1px solid #ddd'>"+data[i][3]+"</td>"+
                        "</tr>");
    }
    var sumatoria=0;
    for(var i=0; i<indice; i++){
        sumatoria+=data[i][3];
    }
    document.write("<tr>"+
                    "<td>IMPORTE TOTAL= </td>"+
                    "<td></td>"+
                    "<td></td>"+
                    "<td>"+"$"+sumatoria+"</td>"+"</tr>");
    document.write("</table>")
    document.write("</div>")
    document.write("</body>")
}