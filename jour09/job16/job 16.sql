SELECT s.nom AS 'Biggest Room', s.capacite, e.nom AS nom_etage
FROM salles s
JOIN etages e ON s.id_etage = e.id
ORDER BY s.capacite DESC
LIMIT 1;
