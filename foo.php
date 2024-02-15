<?php

/**
 * Fusionne les intervalles qui se chevauchent.
 * La fonction renvoie un tableau avec les intervalles fusionnés.
 * @param array $array Le tableau d'entrée contenant plusieurs arrays d'intervalles.
 * @return array Les intervalles fusionnés.
 */
function foo($input)
{
	if (empty($input)) {
		return [];
	}

	// Tri les intervalles par ordre croissant de début pour être sur de passer par toutes les intervalles dans l'ordre afin de les fusionner correctement.
	usort($input, function ($a, $b) {
		return $a[0] - $b[0];
	});

	// Initialise le tableau de sortie avec le premier intervalle.
	$sortedArray = [$input[0]];

	foreach ($input as $data) {
		// On récupère le dernier intervalle qui a été fusionnée pour le comparer avec l'intervalle actuel.
		$lastInterval = &$sortedArray[count($sortedArray) - 1];

		// Si l'intervalle actuel se chevauche avec le dernier intervalle fusionné, on fusionne les intervalles.
		if ($data[0] <= $lastInterval[1]) {
			$lastInterval[1] = max($lastInterval[1], $data[1]);
		} else {
			// Sinon, on ajoute l'intervalle actuel au tableau de sortie.
			$sortedArray[] = $data;
		}
	}

	return $sortedArray;
}

// Teste la fonction foo avec un exemple de tableau en entrée
//$input = [[3, 6], [3, 4], [15, 20], [16, 17], [1, 4], [6, 10], [3, 6]];
$input = [[7, 8], [3, 6], [2, 4]];
$output = foo($input);
print_r($output);
