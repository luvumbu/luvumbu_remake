<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <title>Exemple de téléchargement PDF</title>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.10.1/html2pdf.bundle.min.js"></script>
  
  
  <style>
    body {
      font-family: Arial, sans-serif;
      padding: 30px;
      background-color: #f4f4f4;
    }

    #content {
      background-color: white;
      padding: 20px;
      border-radius: 10px;
      box-shadow: 0 0 10px rgba(0,0,0,0.1);
    }

    button {
      margin-top: 20px;
      padding: 10px 20px;
      font-size: 16px;
      cursor: pointer;
      background-color: #007bff;
      color: white;
      border: none;
      border-radius: 5px;
    }

    button:hover {
      background-color: #0056b3;
    }
  </style>
</head>
<body>

  <div id="content">
    <h1>Bienvenue sur ma page</h1>
    <p>
      Ceci est un exemple de contenu que vous pouvez télécharger au format PDF.
      Le bouton ci-dessous utilise une librairie JavaScript pour convertir cette section HTML en document PDF.
    </p>
  </div>

  <button onclick="telechargerPDF()">Télécharger en PDF</button>

  <script>
    function telechargerPDF() {
      const element = document.getElementById('content');
      html2pdf().from(element).save('ma_page.pdf');
    }
  </script>

</body>
</html>
