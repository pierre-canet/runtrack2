SELECT salles.nom AS Biggest_Room, etages.nom AS Etage, salles.capacite
FROM salles
JOIN etages ON salles.id_etage = etages.id
WHERE capacite = (SELECT MAX(capacite) FROM salles);