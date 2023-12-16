<!DOCTYPE html>
<html>
<head>
    <title>Résultats du Formulaire Environnement</title>
</head>
<body>
    <h1>Résultats du Formulaire Environnement</h1>

    <?php
    // Fonction pour calculer le pourcentage en fonction des cases cochées
    function calculatePercentage($checkboxes) {
        $totalCheckboxes = count($checkboxes);
        $checkedCheckboxes = 0;

        foreach ($checkboxes as $checkbox) {
            if (isset($_POST[$checkbox]) && $_POST[$checkbox] == 'on') {
                $checkedCheckboxes++;
            }
        }

        return ($totalCheckboxes > 0) ? ($checkedCheckboxes / $totalCheckboxes) * 100 : 0;
    }

    // Liste des critères et des cases à cocher
    $criteria = array(
        'Recyclage matériaux' => array('checkbox1', 'checkbox2', 'checkbox3', 'checkbox4', 'checkbox5'),
        'Pollution environnante' => array('checkbox12', 'checkbox22', 'checkbox32', 'checkbox42', 'checkbox52'),
        'Trie dans les bureaux' => array('checkbox13', 'checkbox23', 'checkbox33', 'checkbox43', 'checkbox53'),
        'Recyclage produits chimiques' => array('checkbox14', 'checkbox24', 'checkbox34', 'checkbox44', 'checkbox54'),
        'Sources d\'énergie renouvelable' => array('checkbox15', 'checkbox25', 'checkbox35', 'checkbox45', 'checkbox55'),
        'Consommation d\'eau' => array('checkbox16', 'checkbox26', 'checkbox36', 'checkbox46', 'checkbox56')
    );

    // Affiche les pourcentages pour chaque critère
    foreach ($criteria as $criterion => $checkboxes) {
        $percentage = calculatePercentage($checkboxes);
        echo "<p>$criterion : $percentage%</p>";
    }
    ?>
</body>
</html>
