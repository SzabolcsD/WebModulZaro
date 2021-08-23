<script src="jelentkezes.js"></script>
<link rel="stylesheet" href="style.css">
<body>  
<form action="">
    <p>
    <label for="nev">Név:</label>
    <input type="text" name="nev" id="nev" required>
    </p>
    <p>
        <label for="email" >E-mail:</label>
        <input type="email" name="email" id="email" required>
    </p>

    <p>
    <select name="szak" id="szak">
        <option value="valassz">Válassz szakot</option>
        <option value="szf">Szoftverfejleszto</option>
        <option value="rgazda">Rendszergazda</option>
        <option value="grafikus">Grafikus</option>
        </select>
    </p>
    <p><input type="button" value="Ellenorzes" onclick="ellenoriz()"></p>
</form>
</body>