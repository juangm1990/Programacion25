// Función Callback 
let duplicar = (numero) => {
    return numero * 2;
};

let operarArray = (array, callback) => {
    let nuevoArray = [];

    for (let i = 0; i < array.length; i = i + 1) {
        let resultado = callback(array[i]);   // Ejecuta el callback
        nuevoArray.push(resultado);           // Insertar con un push el resultado en el nuevo array
    }

    return nuevoArray; // Utilizar un return para devolver por la salida el nuevo array
};

// Ejemplo
let numeros = [1, 2, 3, 4, 5];
let resultado = operarArray(numeros, duplicar);

// Salida
console.log(resultado); 



