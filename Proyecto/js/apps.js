var Alert = new CustomAlert();

function CustomAlert() {
  this.render = function () {
    let popUpBox = document.getElementById('popUpBox');
    let popUpOverlay = document.getElementById('popUpOverlay');

    popUpBox.style.display = "block";
    popUpOverlay.style.display = "block";

    document.getElementById('box').innerHTML = `
      <i class="fas fa-question-circle fa-5x"></i>
      <h1>¿Volver a ingresar datos?</h1>
      <div id="closeModal">
        <a href="index.html">
          <button type="button">¡Sí quiero!</button>
        </a>
        <button onclick="Alert.ok()">Cancelar</button>
      </div>
    `;
  }

  this.ok = function () {
    document.getElementById('popUpBox').style.display = "none";
    document.getElementById('popUpOverlay').style.display = "none";
  }
}

