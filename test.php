<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Prise de rendez-vous</title>
<style>
body { font-family: Arial, sans-serif; background: #f2f2f2; }
.rdv-container { background: #fff;   margin: auto; border-radius: 8px; box-shadow: 0 0 10px rgba(0,0,0,0.1); }
h2 { text-align: center; }
label { display: block; margin: 10px 0 5px; }
select, input, button { width: 100%; padding: 8px; margin-bottom: 15px; border-radius: 4px; border: 1px solid #ccc; }
button { background: #4CAF50; color: white; border: none; cursor: pointer; }
button:hover { background: #45a049; }



.rdv-container{
  padding: 30px;
  width: 40%;
}
</style>
</head>
<body>

<div class="rdv-container">
  <h2>Prendre un rendez-vous</h2>
  <input type="text" placeholder="Nom">
  <input type="text" placeholder="Adresse mail">

  <label for="date">Date :</label>
  <input type="date" id="date" />

  <label for="time">Heure :</label>
  <select id="time">
    <option value="">Sélectionnez une heure</option>
  </select>

  <button onclick="prendreRdv()">Confirmer le rendez-vous</button>
  <p id="message" style="color:red;"></p>
</div>

<script>
const debutHeure = 9;
const finHeure = 19;
const intervalMinutes = 30;

const dateInput = document.getElementById('date');
const timeSelect = document.getElementById('time');
const message = document.getElementById('message');

const now = new Date();
const minDate = new Date(now.getTime() + 24*60*60*1000);
dateInput.min = minDate.toISOString().split('T')[0];

// Générer uniquement les créneaux valides
function updateTimeOptions() {
    timeSelect.innerHTML = '<option value="">Sélectionnez une heure</option>';
    if (!dateInput.value) return;

    const selectedDate = new Date(dateInput.value);
    for (let h = debutHeure; h <= finHeure; h++) {
        for (let m = 0; m < 60; m += intervalMinutes) {
            const rdvTime = new Date(selectedDate.getFullYear(), selectedDate.getMonth(), selectedDate.getDate(), h, m);
            if (rdvTime - now >= 24*60*60*1000) { // respect 24h
                const option = document.createElement('option');
                option.value = `${h.toString().padStart(2,'0')}:${m.toString().padStart(2,'0')}`;
                option.text = `${h.toString().padStart(2,'0')}:${m.toString().padStart(2,'0')}`;
                timeSelect.appendChild(option);
            }
        }
    }
}

dateInput.addEventListener('change', updateTimeOptions);

function prendreRdv() {
    const selectedDate = dateInput.value;
    const selectedTime = timeSelect.value;

    if (!selectedDate || !selectedTime) {
        message.style.color = "red";
        message.textContent = "Veuillez choisir une date et une heure.";
        return;
    }

    const [h, m] = selectedTime.split(':').map(Number);
    const rdvDateTime = new Date(selectedDate);
    rdvDateTime.setHours(h, m, 0, 0);

    if (rdvDateTime - now < 24*60*60*1000) {
        message.style.color = "red";
        message.textContent = "Rendez-vous invalide : moins de 24h.";
        return;
    }

    message.style.color = "green";
    message.textContent = `Rendez-vous confirmé le ${selectedDate} à ${selectedTime}`;
}
</script>

</body>
</html>
