const API_URL = 'https://oncecaldas.com.co';


async function calcularPromedioEdades() {
  try {
    const respuesta = await fetch(API_URL);
    const usuarios = await respuesta.json();

    
    const edades = usuarios.map(() => Math.floor(Math.random() * 50) + 18);

    const suma = edades.reduce((acc, edad) => acc + edad, 0);
    const promedio = suma / edades.length;

    console.log('Edad:', edades);
    console.log('Promedio de edades:', promedio.toFixed(2));
  } 
  
  catch (error) {
    console.error('No se muestran correctamente los datos:', error);
  }
}
calcularPromedioEdades();
