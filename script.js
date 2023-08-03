// tu_archivo_js_personalizado.js

document.getElementById("passportForm").addEventListener("submit", function (event) {
    event.preventDefault(); // Evita que el formulario se envíe de manera predeterminada
  
    // Obtener los valores de los campos
    const fullName = document.getElementById("fullName").value;
    const passportNumber = document.getElementById("passportNumber").value;
    const dob = document.getElementById("dob").value;
    const nationality = document.getElementById("nationality").value;
    const address = document.getElementById("address").value;
  
    // Validar que los campos no estén vacíos
    if (!fullName || !passportNumber || !dob || !nationality || !address) {
      alert("Por favor, complete todos los campos");
      return;
    }
  
    // Puedes agregar más validaciones según tus necesidades, por ejemplo, validar el formato del pasaporte o fecha de nacimiento.
  
    // Si todos los campos están completos, mostrar los resultados
    const resultArea = document.getElementById("result");
    resultArea.innerHTML = `
      <strong>Nombre Completo:</strong> ${fullName}<br>
      <strong>Número de Pasaporte:</strong> ${passportNumber}<br>
      <strong>Fecha de Nacimiento:</strong> ${dob}<br>
      <strong>Nacionalidad:</strong> ${nationality}<br>
      <strong>Dirección:</strong> ${address}<br>
    `;
  });
  