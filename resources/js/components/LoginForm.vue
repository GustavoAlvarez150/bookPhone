<template>
       <div class="Login-form">
                <h2>Iniciar sesion</h2>
                <div class="container">
                    <form @submit.prevent="submitLogin">
                        <!-- <label for="">Usuario</label> -->
                        <input v-model="mail" class="form-control mb-3" type="text" placeholder="Usuario" required> <!-- Mediante la propiedad v-model D -->
                        <!-- <label for="">Contraseña</label> -->
                        <input v-model="password" type="password" name="" class="form-control mb-3" id="" placeholder="Contraseña" required>
                    
                        <input type="submit" value="Iniciar sesion" class="btn btn-primary">
                    </form>
                    <p v-if="errorMessage" style="color:red;">{{ errorMessage }}</p>
                
                </div>
       </div>
</template>

<script>
export default{
data() {
    return{
        mail: '',
        password:'',
        errorMessage:''
    }
},
methods:{
async submitLogin(){
    try{
        const response = await fetch('/SetUser',{
            method:'POST',
            headers:{
               'Content-Type': 'application/json',
            'Accept': 'application/json',
            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
            },
            body: JSON.stringify({
                mail: this.mail,
               password: this.password     
            })
        });

        const data = await response.text();
        console.log("Error generado" + data);
        if(response.ok){
            alert("Login exitoso");
        }else{
            this.errorMessage = data.message || 'Ha ocurrido un error';
        }
    }catch(error){
        this.errorMessage = 'Ocurrio un error inesperado'+error;
    }
}

}
};
</script>