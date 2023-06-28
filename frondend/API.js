const ulr = "http://localhost/simulacro/backend/controles.php?op=GetAll"
const ulrEmpresa = "http://localhost/simulacro/backend/controles.php?op=GetEm"
const ulrproducto = "http://localhost/simulacro/backend/controles.php?op=GetPr"
const ulrcotizacion= "http://localhost/simulacro/backend/controles.php?op=GetCt"


const ulrNuwCotizacion = "http://localhost/simulacro/backend/controles.php?op=insert"


export const Empleados = async () =>{
    try{
        const result = await fetch (ulr);
        const datosUsuarios = await result.json();
        return datosUsuarios;
        
    }
    catch(error){
        console.log(error);
    }
}


export const empresa = async () =>{
    try{
        const result = await fetch (ulrEmpresa);
        const datosUsuarios = await result.json();
        return datosUsuarios;
        
    }
    catch(error){
        console.log(error);
    }
}

export const producto = async () =>{
    try{
        const result = await fetch (ulrproducto);
        const datosUsuarios = await result.json();
        return datosUsuarios;
        
    }
    catch(error){
        console.log(error);
    }
}



export const cotizacion = async () =>{
    try{
        const result = await fetch (ulrcotizacion);
        const datosUsuarios = await result.json();
        return datosUsuarios;
        
    }
    catch(error){
        console.log(error);
    }
}











/////// agregar una nueva cotizacion /////////
export const nuewCotizacion = async (registro) =>{
    console.log("ssssssssssss");
    console.log(registro);
    try {
        await fetch(ulrNuwCotizacion,{
            method: 'POST',
            body: JSON.stringify(registro),
            headers:{
                'Content-Type': 'application/json'
            }

        });
        //   window.location.href='inde.html' 

    } catch (error) {
        console.log(error);
    }
}
