<html><head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>PAGO INTERNET DOCENTES IRH</title>
<style>
    body {
        font-family: "Times New Roman", Times, serif;
        background-image: url(gh.jpg);
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
        margin: 0;
    }
    .container {
        background-color: rgba(255, 255, 255, 0.9);
        padding: 20px;
        border-radius: 10px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        width: 90%;
        max-width: 800px;
    }
    h1, h2 {
        text-align: center;
        color: #333;
    }
    table {
        background-color: black;
        color: white;
        padding: 10px;
        border-radius: 5px;
        margin-bottom: 20px;
        width: 100%;
    }
    td {
        padding: 5px;
    }
    input, select {
        width: 100%;
        padding: 5px;
        box-sizing: border-box;
    }
    button {
        background-color: gray;
        color: white;
        padding: 10px 20px;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        margin-right: 10px;
    }
    button:hover {
        background-color: darkgray;
    }
    .row {
        display: flex;
        justify-content: space-between;
    }
    .column {
        flex: 1;
        padding: 0 10px;
    }
</style>
</head>
<body>
<div class="container">
    <h1>PAGO INTERNET DOCENTES IRH</h1>
    <form action="pago_recibo.php" method="post">
        <table>
            <tr>
                <td colspan="4"><h2>PAGO</h2></td>
            </tr>
            <tr class="row">
                <td class="column">
                    <label for="docente_id">ID:</label>
                    <input type="text" id="docente_id" name="docente_id" required>
                </td>
                <td class="column">
                    <label for="factura_id">FACTURA:</label>
                    <input type="text" id="factura_id" name="factura_id" readonly>
                </td>
            </tr>
            <tr class="row">
                <td class="column">
                    <label for="docente_nombre">NOMBRE:</label>
                    <input type="text" id="docente_nombre" name="docente_nombre" required>
                </td>
                <td class="column">
                    <label for="factura_nombre">NOMBRE:</label>
                    <input type="text" id="factura_nombre" name="factura_nombre" readonly>
                </td>
            </tr>
            <tr class="row">
                <td class="column">
                    <label for="docente_telefono">TELÉFONO:</label>
                    <input type="tel" id="docente_telefono" name="docente_telefono" required>
                </td>
                <td class="column">
                    <label for="factura_mes">MES:</label>
                    <input type="text" id="factura_mes" name="factura_mes" readonly>
                </td>
            </tr>
            <tr class="row">
                <td class="column">
                    <label for="docente_dispositivo">DISPOSITIVO:</label>
                    <select id="docente_dispositivo" name="docente_dispositivo" required>
                        <option value="">Seleccione un dispositivo</option>
                        <option value="laptop">Laptop</option>
                        <option value="tablet">Tablet</option>
                        <option value="smartphone">Smartphone</option>
                        <option value="desktop">Desktop</option>
                    </select>
                </td>
                <td class="column">
                    <label for="factura_aporte">APORTE:</label>
                    <input type="text" id="factura_aporte" name="factura_aporte">
                </td>
            </tr>
            <tr class="row">
                <td class="column">
                    <label for="docente_fecha">MES:</label>
                    <input type="date" id="docente_fecha" name="docente_fecha" required>
                    <input type="text" id="docente_mes_seleccionado" readonly>
                      
                </td>
            </tr>
        </table>

        <div style="text-align: center;">
            <button type="button" onclick="procesarPago()">Pago</button>
          <button type="submit" value="Guardar datos">guardar datos</button>
        </div>    
    </form>
</div>

<script>
document.getElementById('docente_fecha').addEventListener('change', function() {
    const fecha = new Date(this.value);
    const opciones = { year: 'numeric', month: 'long', day: 'numeric' };
    document.getElementById('docente_mes_seleccionado').value = fecha.toLocaleDateString('es-ES', opciones);
});

function procesarPago() {
    document.getElementById('factura_id').value = document.getElementById('docente_id').value;
    document.getElementById('factura_nombre').value = document.getElementById('docente_nombre').value;
    document.getElementById('factura_mes').value = document.getElementById('docente_mes_seleccionado').value;
}
</script>
</body>
</html>