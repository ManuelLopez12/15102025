//genera un formulario normal con su diseño para que se vea bonito

<form action="" method="post">
    <label for="nombre">Nombre:</label>
    <input type="text" id="nombre" name="nombre" required>
    
    <label for="email">Correo Electrónico:</label>
    <input type="email" id="email" name="email" required>
    
    <label for="mensaje">Mensaje:</label>
    <textarea id="mensaje" name="mensaje" required></textarea>
    
    <button type="submit">Enviar</button>
</form>
<style>
    form {
        max-width: 400px;
        margin: auto;
        padding: 1em;
        border: 1px solid #ccc;
        border-radius: 1em;
        background-color: #f9f9f9;
    }
    label {
        margin-top: 1em;
        display: block;
        font-weight: bold;
    }
    input, textarea {
        width: 100%;
        padding: 0.5em;
        margin-top: 0.5em;
        border: 1px solid #ccc;
        border-radius: 0.25em;
    }
    button {
        margin-top: 1em;
        padding: 0.7em;
        color: white;
        background-color: #007BFF;
        border: none;
        border-radius: 0.25em;
        cursor: pointer;
    }
    button:hover {
        background-color: #0056b3;
    }
