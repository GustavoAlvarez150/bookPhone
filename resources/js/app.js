import 'bootstrap';
import { Modal, Tooltip, Collapse } from 'bootstrap';


document.addEventListener('DOMContentLoaded', function(){


    var idInptName = document.getElementById("idInpname");
    var idInpPhone = document.getElementById("idInpNumber");
    var idInptDate = document.getElementById("idInpDate");

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



});

