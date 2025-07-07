import 'bootstrap';
import { Modal, Tooltip, Collapse } from 'bootstrap';


document.addEventListener('DOMContentLoaded', function(){


    var idInptName = document.getElementById("idInpname");
    var idInpPhone = document.getElementById("idInpNumber");
    var idInptDate = document.getElementById("idInpDate");
    var idTable = document.getElementById("idTable");

var idBtnAdd = document.getElementById("idBtnAddPhone");
 var mod = document.getElementById("mdlRegister");
 var idBtnSavePhone = document.getElementById("idBtnSavePhone");
  const modalC = new Modal(mod);


idBtnAdd.addEventListener('click', function(){ 
    modalC.show();
});


idBtnSavePhone.addEventListener('click', function(){
    
     if(idInptName.value.trim()  && idInpPhone.value.trim() &&  idInptDate.value.trim()){
         sendToData(idInptName.value, idInpPhone.value, idInptDate.value);
     }else{
         alert("Favor de llenar todos los campos");
     }
});


async function  sendToData(nameI, phoneI, dateI){
    const data = {name: nameI, phone: phoneI, birthdate: dateI};
    try{
        const response = await fetch('/bookPhone',{
            method: 'POST',
            headers: {'Content-type': 'application/json','X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content
            },
            body: JSON.stringify(data),
            
    });
    const result = await response.json();
    alert(result.mensaje || 'Guardado con exito');
    }catch(error){
        alert("Ha ocurrido un error al realizar la inserción a base de datos."+ error);
    }

}
showDataTablle();

async function showDataTablle(){
    try{
        const response = await fetch('/test',{
            method:'GET',
        });
        const result = await response.json();
        printTable(result);
    }catch(error){
        alert("No es posible consultar tu información"+error);
    }
}
});

function printTable(json){
    var table = "";
    for(var i = 0; i < json.length; i++){
        table +="<tr>"+
    "<td>" + json[i].id + "</td>" +
    "<td>" + json[i].name + "</td>" + 
    "<td>" + json[i].phone + "</td>" +
    "<td>" + json[i].birthdate + "</td>";

    }
    
    idTable.innerHTML = table;
}

