document.addEventListener('DOMContentLoaded', function(){
    configurar();
    })
    
    function configurar(){
        const btnLogin = document.querySelector('#btnConsultar');
        btnLogin.addEventListener('click',consultarCliente);
    }

    async function consultarCliente(){
        //enviar a la ruta un parametro de get que es lo que recibe el direccionamiento
        const url = "data/cliente.php?accion=listar";
        const respuesta = await fetch(url);
        const resultado = await respuesta.json();
        //validamos el mensaje que se resive
        if(resultado.codigo === 200){
            const data = resultado.data;
            let html ="";
            data.forEach(cliente => {
                html += "<tr>";
                html += "<td>" + cliente.id + "</td>";
                html += "<td>" + cliente.razon_social + "</td>";
                html += "<td>" + cliente.tipo_documento + "</td>";
                html += "<td>" + cliente.numero_documento + "</td>";
                html += "<td>" + cliente.direccion + "</td>";
                html += "</tr>"
            });
    
            const tabla = document.querySelector("#tblData");
            //se llama asi por ser una propiedad
            tabla.innerHTML = html;
        }
    }