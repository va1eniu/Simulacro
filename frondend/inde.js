import { Empleados,empresa,producto,cotizacion,nuewCotizacion,} from "./API.js";

console.log("holaaaaaaaaaaaaaaaa");

addEventListener('DOMContentLoaded',carga);


function carga(){
    empleados();
    clie();
    pr();
   idCotizar();
   


 async function empleados(){
    console.log('fffff');

    const empleados = await Empleados();
    console.log(empleados);
    const Emple = document.querySelector('#Empleado')
    empleados.forEach(element => {
        Emple.innerHTML+=`
        <option value="${element.nombres}">${element.nombres}</option>    
        `
    });


}


async function clie(){

    const clientes= await empresa();

    const cli= document.querySelector('#cliente')
    clientes.forEach(element => {
        cli.innerHTML+=`
        <option value="${element.nombres}">${element.nombres}</option>
        
        `
    });


}


async function pr(){

    const productos = await producto();
    

    const produc= document.querySelector('#productos')
    productos.forEach(element => {
        produc.innerHTML+=`
        <option value="${element.precio}" nom=${element.nombres}>${element.nombres}</option>
        
        `
    });


}


async function idCotizar() {
    
    const cot = await cotizacion();
    console.log(cot);
    const idCot = document.querySelector('#idCotizar');
    cot.forEach(element => {
        let id=(element.id_Alquiler+1)
        idCot.innerHTML=`<h2>${id}</h2>`
        idCot.value=id

    
   });
}











const formulario = document.querySelector('.cotizar')
formulario.addEventListener('submit',newCamper)
function newCamper (e){
  alert("hola");
    e.preventDefault()
    
    const id_Alquiler = document.querySelector('#idCotizar').value
    const cliente = document.querySelector('#cliente').value
    const precio_dia = document.querySelector('#productos').value
    
    
    const producto = document.querySelector('#productos option:checked').getAttribute('nom');
    const obra = document.querySelector('#obra').value
    const fecha_salida = document.querySelector('#fecha_salida').value
    const empleado = document.querySelector('#Empleado').value
    const fecha_entrega = document.querySelector('#fecha_entrega').value
    const cantidad=document.querySelector('#cantidad').value

   
    const detalle = document.querySelector('#detalle').value
        // Crear objetos de fecha a partir de los valores del formulario
        let date1 = new Date(fecha_salida);
        let date2 = new Date(fecha_entrega);
  
        // Realizar la resta de fechas
        let diferencia = date2 - date1;
  
        // Convertir la diferencia en días
        let dias = Math.floor(diferencia / (1000 * 60 * 60 * 24));

  
        const totalValor = document.querySelector('#productos').value
        const total = dias*(totalValor*precio_dia*cantidad)


    const registro = {
        id_Alquiler,
        empleado,
        cliente,
        producto,
        cantidad,
        obra,
        precio_dia,
        fecha_salida,
        fecha_entrega,
        total,
        detalle,
    }
    
    console.log(registro);
    if(validation(registro)){
        alert("todos los campos son Oblicagatorios")
        return
    }
    nuewCotizacion(registro)

    
}


function validation (Objecto){
    return !Object.values(Objecto).every(element=>element !=='')
}



}