CREATE TABLE profile (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nama VARCHAR(100) NOT NULL,
    title VARCHAR(100) NOT NULL,
    foto VARCHAR(100) NOT NULL,
    about1 TEXT NOT NULL,
    about2 TEXT NOT NULL,
    about3 TEXT NOT NULL
);

INSERT INTO profile (nama, title, foto, about1, about2, about3) VALUES
(
    'Shafa Rizqi Nur Wahidah',
    'Information Systems Undergraduate',
    'profile.jpg',
    'Hi! I am an Information Systems undergraduate at Mulawarman University with a strong interest in Data Analysis and UI/UX Design. I am passionate about transforming data into meaningful insights and creating user-centered designs that deliver impactful digital experiences.',
    'Through academic projects and volunteer experiences, I have developed strong analytical thinking, problem-solving, and teamwork skills. I enjoy collaborating with others, learning new technologies, and continuously improving my abilities to adapt to dynamic environments.',
    'I am detail-oriented, responsible, and highly motivated to grow both personally and professionally. For me, technology is not just about systems, it is about building solutions that create real value for people.'
);

CREATE TABLE skills (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nama_skill VARCHAR(50) NOT NULL,
    persen INT NOT NULL,
    warna VARCHAR(50) NOT NULL
);

INSERT INTO skills (nama_skill, persen, warna) VALUES
('Canva', 90, 'bg-success'),
('Excel', 85, 'bg-info'),
('Figma', 75, 'bg-warning');

CREATE TABLE experiences (
    id INT AUTO_INCREMENT PRIMARY KEY,
    pengalaman VARCHAR(255) NOT NULL
);

INSERT INTO experiences (pengalaman) VALUES
('Staff of Bureau Entrepreneurship Development INFORSA 2025/2026'),
('Volunteer of Baktikuu.id'),
('UI/UX Design Study Club Participant');

CREATE TABLE certificates (
    id INT AUTO_INCREMENT PRIMARY KEY,
    judul VARCHAR(100) NOT NULL,
    deskripsi VARCHAR(100) NOT NULL,
    gambar VARCHAR(100) NOT NULL
);

INSERT INTO certificates (judul, deskripsi, gambar) VALUES
('Staff of EDEN', 'Information Systems Association', 'certificate1.jpg'),
('Volunteer', 'Baktikuu.id', 'certificate2.jpg'),
('UI/UX Design', 'Information Systems', 'certificate3.jpg');