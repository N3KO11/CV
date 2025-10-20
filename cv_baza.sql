CREATE DATABASE IF NOT EXISTS cv_database CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;

USE cv_database;

CREATE TABLE IF NOT EXISTS cv (
    id INT AUTO_INCREMENT PRIMARY KEY,
    imie_nazwisko VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL,
    telefon VARCHAR(20) NOT NULL,
    data_urodzenia VARCHAR(20) NOT NULL,
    zdjecie VARCHAR(255) NOT NULL,
    o_mnie TEXT NOT NULL,
    wyksztalcenie TEXT NOT NULL,
    zainteresowania TEXT NOT NULL,
    umiejetnosci TEXT NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO cv (imie_nazwisko, email, telefon, data_urodzenia, zdjecie, o_mnie, wyksztalcenie, zainteresowania, umiejetnosci) 
VALUES (
    'Krzysztof Wójcik',
    'wojcikk78@gmail.com',
    '214 523 521',
    '07.06.1978',
    'manoyek.jpg',
    'Jestem ambitnym i odpowiedzialnym uczniem, który chętnie podejmuje nowe wyzwania. Szybko się uczę, potrafię pracować w zespole i sumiennie wykonuję powierzone zadania. Dążę do zdobycia doświadczenia i rozwoju zawodowego.',
    'Uczę się w szkole średniej, gdzie rozwijam swoje umiejętności i poszerzam wiedzę ogólną oraz zawodową.',
    'Interesuję się nowymi technologiami, komputerami i motoryzacją.',
    'Posiadam podstawowe umiejętności obsługi komputera, potrafię logicznie myśleć, organizować pracę i skutecznie rozwiązywać problemy.'
);