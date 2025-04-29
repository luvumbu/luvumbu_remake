<?php
class Get_anne
{
    public $name;

    function __construct($name)
    {
        $this->name = $name;
    }

    function get_temps_restant()
    {
        date_default_timezone_set('Europe/Paris');
        $date_cible = strtotime($this->name);
        $date_actuelle = time();

        $difference = $date_cible - $date_actuelle;

        $annees = floor(abs($difference) / (3600 * 24 * 365));
        $jours = floor((abs($difference) % (3600 * 24 * 365)) / (3600 * 24));
        $heures = floor((abs($difference) % (3600 * 24)) / 3600);
        $minutes = floor((abs($difference) % 3600) / 60);
        $secondes = abs($difference) % 60;

        return [
            "annees" => $annees,
            "jours" => $jours,
            "heures" => $heures,
            "minutes" => $minutes,
            "secondes" => $secondes,
            "is_past" => $difference < 0
        ];
    }
}

// Définir les événements avec leurs dates dans un tableau associatif
$events = [
     "2008-09-15 08:00:00"=> "Attaque du 11 septembre",
     "2025-09-11 12:00:00" => "Crise des subprimes",
];
$countdowns = [];

// Calculer le temps restant pour chaque événement
foreach ($events as $date_future => $event_name) {
    $get_anne = new Get_anne($date_future);
    $temps_restant = $get_anne->get_temps_restant();
    $temps_restant["event_name"] = $event_name; // Ajouter le nom de l'événement au résultat
    $countdowns[] = $temps_restant;
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Comptes à Rebours Multiples</title>
    <style>
:root {
    --background-color: #f9f9f9; /* Fond gris clair */
    --text-color: #333; /* Texte gris foncé */
    --highlight-color: #007acc; /* Bleu doux pour les éléments principaux */
    --label-color: #555; /* Couleur des étiquettes */
    --container-background: #ffffff; /* Fond des conteneurs */
    --border-color: #ddd; /* Bordure légère */
}

body {
    font-family: Arial, sans-serif;
    display: flex;
    align-items: center;
    justify-content: center;
    flex-direction: column;
    height: 100vh;
    margin: 0;
    background-color: var(--background-color);
    color: var(--text-color);
}

.countdown-container {
    margin-bottom: 20px;
    text-align: center;
    font-size: 1.2em;
    background-color: var(--container-background);
    padding: 15px;
    border-radius: 8px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.05);
    border: 1px solid var(--border-color);
    width: 100%;
    max-width: 600px; /* Largeur augmentée */
    color: var(--text-color);
}

.event-name {
    font-size: 1.5em;
    font-weight: 600;
    color: var(--highlight-color);
    margin-bottom: 10px;
}

.time {
    display: inline-block;
    margin: 0 5px;
    padding: 8px;
    background-color: var(--container-background);
    border-radius: 4px;
    width: 60px;
    border: 1px solid var(--border-color);
}

.label {
    display: block;
    font-size: 0.8em;
    color: var(--label-color);
    margin-top: 4px;
}

.status {
    color: var(--highlight-color);
    font-size: 1em;
    margin-top: 10px;
    font-weight: 500;
}

    </style>
</head>
<body>

<?php foreach ($countdowns as $index => $temps_restant): ?>
    <div id="countdown-<?php echo $index; ?>" class="countdown-container">
        <div class="event-name"><?php echo $temps_restant["event_name"]; ?></div> <!-- Afficher le nom de l'événement -->
        <div class="time">
            <span id="years-<?php echo $index; ?>"><?php echo $temps_restant["annees"]; ?></span>
            <span class="label">Années</span>
        </div>
        <div class="time">
            <span id="days-<?php echo $index; ?>"><?php echo $temps_restant["jours"]; ?></span>
            <span class="label">Jours</span>
        </div>
        <div class="time">
            <span id="hours-<?php echo $index; ?>"><?php echo $temps_restant["heures"]; ?></span>
            <span class="label">Heures</span>
        </div>
        <div class="time">
            <span id="minutes-<?php echo $index; ?>"><?php echo $temps_restant["minutes"]; ?></span>
            <span class="label">Minutes</span>
        </div>
        <div class="time">
            <span id="seconds-<?php echo $index; ?>"><?php echo $temps_restant["secondes"]; ?></span>
            <span class="label">Secondes</span>
        </div>
  
    </div>
<?php endforeach; ?>

<script>
    class CountdownTimer {
        constructor(dateString, index) {
            this.targetDate = new Date(dateString).getTime();
            this.index = index;
            this.containerElement = document.getElementById(`countdown-${index}`);
            this.updateCountdown();
            setInterval(() => this.updateCountdown(), 1000);
        }

        updateCountdown() {
            const now = new Date().getTime();
            let distance = this.targetDate - now;

            if (distance < 0) {
                // Temps écoulé : appliquez la couleur de fond rgba(200, 0, 0, 0.3)
                this.containerElement.style.backgroundColor = 'rgba(200, 0, 0, 0.2)';
                distance = Math.abs(distance); // Pour afficher les valeurs positives
            }

            const years = Math.floor(distance / (1000 * 60 * 60 * 24 * 365));
            const days = Math.floor((distance % (1000 * 60 * 60 * 24 * 365)) / (1000 * 60 * 60 * 24));
            const hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
            const minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
            const seconds = Math.floor((distance % (1000 * 60)) / 1000);

            document.getElementById(`years-${this.index}`).innerText = years;
            document.getElementById(`days-${this.index}`).innerText = days;
            document.getElementById(`hours-${this.index}`).innerText = hours;
            document.getElementById(`minutes-${this.index}`).innerText = minutes;
            document.getElementById(`seconds-${this.index}`).innerText = seconds;
        }
    }

    const events = <?php echo json_encode(array_keys($events)); ?>;

    function startCountdowns() {
        events.forEach((dateStr, index) => {
            new CountdownTimer(dateStr, index);
        });
    }

    startCountdowns();
</script>



</body>
</html>
