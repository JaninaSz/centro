const contMesa = document.getElementById("sctMesas")
// onload="cargar ()"
/*
function cargar () {  
    const mesa = fetch("../assets/dt/votosOK.json")

mesa.then( res => res.json() )
    .then( datos => {
        iniciar(datos)
    });
}
function iniciar(datos){
    resu.innerHTML = "";
     for (let valor of datos){
         resu.innerHTML += `
         <tr>
                 <td>${valor.numesa}</td>
                 <td>${valor.numlis1}</td>
                 <td>${valor.pres_1}</td>
                 <td>${valor.parlan_1}</td>
                 <td>${valor.dip_1}</td>
                 <td>${valor.parlar_1}</td>
                 <td>${valor.numlis2}</td>
                 <td>${valor.pres_2}</td>
                 <td>${valor.parlan_2}</td>
                 <td>${valor.numlis3}</td>
                 <td>${valor.pres_3}</td>
                 <td>${valor.parlan_3}</td>
                 <td>${valor.dip_3}</td>
                 <td>${valor.parlar_3}</td>
                 <td>${valor.numlis4}</td>
                 <td>${valor.pres_4}</td>
                 <td>${valor.parlan_4}</td>
                 <td>${valor.dip_4}</td>
                 <td>${valor.parlar_4}</td>
                 <td>${valor.numlis5}</td>
                 <td>${valor.pres_5}</td>
                 <td>${valor.parlan_5}</td>
 
             <tr>`
     }
 }*/

 function seleccion(){
    var v_circuito = document.getElementById("sltMesa").value;
    const circ = fetch("../assets/dt/circ.json")

    circ.then( resul => resul.json() )
    .then( datos => {
        iniciar(datos)
    });
    
    resu.innerHTML = "";
    alert(v_circuito);
     for (let valores of datos){
        
        if (v_circuito==valores.numcir){
            alert(v_circuito);
         resu.innerHTML += `
         <tr>
         <td>${valores.numcir}</td>
         <tr>`
        }
    }
}
/*
function pintarTabla(datos){
    contenido.innerHTML = "";
    for (let valor of datos){
        contenido.innerHTML += `
            <tr>
                <td>${valor.numesa}</td>
                <td>${valor.numlis1}</td>
                <td>${valor.pres_1}</td>
                <td>${valor.parlan_1}</td>
                <td>${valor.dip_1}</td>
                <td>${valor.parlar_1}</td>
                <td>${valor.numlis2}</td>
                <td>${valor.pres_2}</td>
                <td>${valor.parlan_2}</td>
                <td>${valor.numlis3}</td>
                <td>${valor.pres_3}</td>
                <td>${valor.parlan_3}</td>
                <td>${valor.dip_3}</td>
                <td>${valor.parlar_3}</td>
                <td>${valor.numlis4}</td>
                <td>${valor.pres_4}</td>
                <td>${valor.parlan_4}</td>
                <td>${valor.dip_4}</td>
                <td>${valor.parlar_4}</td>
                <td>${valor.numlis5}</td>
                <td>${valor.pres_5}</td>
                <td>${valor.parlan_5}</td>

            <tr>
        `
    }

}
/*
function seleccion(datos){
    resu.innerHTML = "";
     for (let valor of datos){
        resu.innerHTML += `
        <tr>
                    <td>${valor.numesa}</td>
                    <td>${valor.numlis1}</td>
                    
        </tr>`
                }
            };
        };

circ.then((response) => {

    return response.json()
}).then((data) => {
    const arrCirc = data.results

    .then(datos =>{
        seleccion(datos)})

    function seleccion(datos){
        circu.innerHTML = "";
        for (let valor of datos){
            circu.innerHTML += `
                <tr>
                    <td>${valor.numesa}</td>
                    <td>${valor.numlis1}</td>
                    
                </tr>`
                }
            };

                   
    for (let i = 0; i < arrCirc.length; i++) {
        console.log(arrCirc[i].name)
        const numcir = arrCirc[i].numcir
        const nombre = arrCirc[i].name
        const genero = arrCirc[i].gender
        const especie = arrCirc[i].species
        const estado = arrCirc[i].status

        document.getElementById("sctPersonajes").innerHTML += `
        <div class="dvPersonajes">
            <img src="${imagen}" alt="foto perfil">
            <h3>${nombre}</h3>
            <p>Género: ${genero}</p>
            <p>Especie: ${especie}</p>
            <p>Estado: ${estado}</p>
        </div>*/
  

/*
mesa.then((response) => {

    return response.json()
}).then((data) => {
    console.log(data.results);
    const arrMesas = data.results
});
    /*for (let i = 0; i < arrMesas.length; i++) {
        console.log(arrMesas[i].name)
        /*const imagen = arrPersonajes[i].image
        const nombre = arrPersonajes[i].name
        const genero = arrPersonajes[i].gender
        const especie = arrPersonajes[i].species
        const estado = arrPersonajes[i].status

        document.getElementById("sctMesas").innerHTML += `
        <div class="dvMesas">
            <img src="${imagen}" alt="foto perfil">
            <h3>${nombre}</h3>
            <p>Género: ${genero}</p>
            <p>Especie: ${especie}</p>
            <p>Estado: ${estado}</p>
        </div>
        `
    }
});*/
/*
    episodios.then((response) => {

        return response.json()
    }).then((data) => {
        const arrEpisodios = data.results
        console.log(data)
        for (let i = 0; i < arrEpisodios.length; i++) {
            console.log(arrEpisodios[i].name)
            const id = arrEpisodios[i].id
            const nombre = arrEpisodios[i].name
            const fecha = arrEpisodios[i].air_date
            const episodio = arrEpisodios[i].episode
            const link = arrEpisodios[i].url
            
    
            document.getElementById("sctEpisodios").innerHTML += `
            <div class="dvEpisodios">
                <p>Cap. ${id}</p>
                <h2>${nombre}</h2>
                <p>Fecha: ${fecha}</p>
            </div>
            `
        }
    })

    pag2.then((response) => {

        return response.json()
    }).then((data) => {
        const arrPersonajes = data.results
    
        for (let i = 0; i < arrPersonajes.length; i++) {
            console.log(arrPersonajes[i].name)
            const imagen = arrPersonajes[i].image
            const nombre = arrPersonajes[i].name
            const genero = arrPersonajes[i].gender
            const especie = arrPersonajes[i].species
            const estado = arrPersonajes[i].status
    
            document.getElementById("sctPersonajes").innerHTML += `
            <div class="dvPersonajes">
                <img src="${imagen}" alt="foto perfil">
                <h3>${nombre}</h3>
                <p>Género: ${genero}</p>
                <p>Especie: ${especie}</p>
                <p>Estado: ${estado}</p>
            </div>
            `
        }
    })
    pag19.then((response) => {

        return response.json()
    }).then((data) => {
        const arrPersonajes = data.results
    
        for (let i = 0; i < arrPersonajes.length; i++) {
            console.log(arrPersonajes[i].name)
            const imagen = arrPersonajes[i].image
            const nombre = arrPersonajes[i].name
            const genero = arrPersonajes[i].gender
            const especie = arrPersonajes[i].species
            const estado = arrPersonajes[i].status
    
            document.getElementById("sctPersonajes").innerHTML += `
            <div class="dvPersonajes">
                <img src="${imagen}" alt="foto perfil">
                <h3>${nombre}</h3>
                <p>Género: ${genero}</p>
                <p>Especie: ${especie}</p>
                <p>Estado: ${estado}</p>
            </div>
            `
        }
    })*/