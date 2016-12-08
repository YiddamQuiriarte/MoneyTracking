<form action="" method="POST">
<label for="nombre" >Nombre: </label>
<input type="text" name="nombre">
<br>
<label for="correo">Correo electrónico: </label>
<input type="email" name="correo">
<br>
<input for="busqueda" > Busqueda: </label>
<input type="search" name="busqueda">
<br>
<input for="Edad" > Edad: </label>
<input type="number" name="edad">
<br>
<input for="fecha" > fecha: </label>
<input type="date" name="fecha">
<br>
<input for="pagina" > Página: </label>
<input type="url" name="pagina">
<br>
<input for="telefono" > Telefono: </label>
<input type="tel" name="telefono">
<br>
<p>
    <input list="navegadores">
    <datalist id="navegadores" >
        <option value="Internet Explorer">
          <option value="Firefox">
            <option value="Crome">
              <option value="Safari">
              </datalist>
            </p>
            <p>
              <label for="cal" > Calificacion: </label>
              <input type="range" name="cal">
            </p>
            <p>
              <label for="cp" > CP: </label>
              <input type="text" pattern="[0-9]{5}" title="Inserte un codigo postal">

              </p>
              <button type="button" onclick="alert(' Hola Mundo! ')" > Click aquí </button>
              <input type="submit">
              <input type="reset">
            </form>






</form>
