<style>
body {
    font-family: Arial, sans-serif;
    background-color: #2c3e50;
    /* Fond sombre */
    color: #ecf0f1;
    /* Texte clair */
    margin: 0;
    padding: 20px;
}

.form-container {
    background-color: #34495e;
    /* Fond de formulaire sombre */
    padding: 30px;
    border-radius: 8px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.3);
    width: 300px;
    margin: 0 auto;
}

.form-container h2 {
    text-align: center;
    color: #ecf0f1;
    /* Couleur du texte du titre */
}

.form-container label {
    display: block;
    margin-bottom: 8px;
    color: #bdc3c7;
    /* Texte des labels plus clair */
}

.form-container input {
    width: 100%;
    padding: 10px;
    margin-bottom: 20px;
    border: 1px solid #7f8c8d;
    border-radius: 4px;
    box-sizing: border-box;
    background-color: #2c3e50;
    color: #ecf0f1;
}

.form-container input:focus {
    border-color: #3498db;
    /* Couleur de bordure au focus */
    outline: none;
}

.submit-btn {
    display: inline-block;
    width: 100%;
    padding: 10px;
    background-color: #2980b9;
    /* Bleu foncé */
    color: white;
    text-align: center;
    border-radius: 4px;
    cursor: pointer;
    font-size: 16px;
    transition: background-color 0.3s;
}

.submit-btn:hover {
    background-color: #1f618d;
    /* Bleu plus foncé au survol */
}

.submit-btn:active {
    background-color: #1a5276;
    /* Plus foncé au clic */
}

.submit-btn:focus {
    outline: none;
}
</style>