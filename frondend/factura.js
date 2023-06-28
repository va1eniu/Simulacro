import { cotizacion } from "./API.js";
facturas()

async function facturas(){

    const cot = await cotizacion();
    console.log("gggggggggggggg");

    


        const tabla = document.querySelector('#datTable')
        cot.forEach(element => {

        let date1 = new Date(element.fecha_salida);
        let date2 = new Date(element.fecha_entrega);
  
        // Realizar la resta de fechas
        let diferencia = date2 - date1;
  
        // Convertir la diferencia en días
        let dias = Math.floor(diferencia / (1000 * 60 * 60 * 24));
            tabla.innerHTML+=`
            <tr>
            <th >${element.id_Alquiler }</th>
            <td>${element.cliente}</td>
            <td>${element.producto}</td>
            <td>${element.cantidad}</td>
            <td>${element.obra}</td>
            <td>${element.empleado}</td>
            <td>${element.fecha_entrega	}</td>
            <td>${dias}</td>
            <td>${element.total}</td>
            <td><button class="btn btn-danger">Detalles</button></td>
           
           
          </tr>
                      `
            
     });


                
           }


        //    <td><button type="button" 
        //    cliente="${element.cantidad}" 
        //    id="${element.id_cotizacion}" 
        //    empleado="${element.nombreEmpleado}" 
        //    producto="${element.producto}" 
        //    fecha="${element.fecha}" 
        //    fecha_entrega="${element.fecha_entrega}" 
        //    total="${element.total}"  
        //    class="btn btn-primary d-flex" data-bs-toggle="modal" data-bs-target="#exampleModal">
        //        Cotizacion
        //      </button></td>