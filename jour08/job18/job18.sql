
SELECT nom AS BiggestRoom, id_etage, capacite FROM `salles` HAVING capacite = (SELECT MAX(capacite) FROM `salles`)