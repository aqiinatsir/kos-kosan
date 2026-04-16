CREATE TABLE admins (
    id SERIAL PRIMARY KEY,
    username VARCHAR(50) UNIQUE,
    password TEXT
);

CREATE TABLE kos (
    id SERIAL PRIMARY KEY,
    nama VARCHAR(100),
    lokasi TEXT,
    harga INT,
    deskripsi TEXT,
    gambar TEXT,
    rating FLOAT DEFAULT 4.5
);

CREATE TABLE fasilitas (
    id SERIAL PRIMARY KEY,
    nama VARCHAR(100)
);

CREATE TABLE kos_fasilitas (
    id SERIAL PRIMARY KEY,
    kos_id INT REFERENCES kos(id) ON DELETE CASCADE,
    fasilitas_id INT REFERENCES fasilitas(id) ON DELETE CASCADE
);

-- Insert admin default (password: admin54326)
INSERT INTO admins (username, password)
VALUES (
    'admin',
    'admin54326'
);
