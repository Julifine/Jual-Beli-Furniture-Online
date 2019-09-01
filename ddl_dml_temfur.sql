CREATE DATABASE SISTEM_INFORMASI_FURNITURE;

create table Pembeli(
    username_pembeli varchar(20) not null,
    nama_pembeli varchar(100) not null,
    alamat_pembeli text,
    no_ktp_pembeli varchar(20) not null,
    password_pembeli varchar(20) not null,
    email_pembeli varchar(50) not null,
    CONSTRAINT pk_pembeli PRIMARY KEY (username_pembeli)
);

create table Barang(
    id_barang varchar(20) not null,
    nama_barang varchar(100) not null,
    harga_barang int not null,
    stock_barang int not null,
    desc_barang text,
    berat_barang int not null,
    CONSTRAINT pk_barang PRIMARY KEY (id_barang)
);

create table Penjual(
    username_penjual varchar(20) not null,
    nama_penjual varchar(100) not null,
    alamat_penjual text,
    no_ktp_penjual varchar(20) not null,
    password_penjual varchar(20) not null,
    email_penjual varchar(50) not null,
    CONSTRAINT pk_penjual PRIMARY KEY (username_penjual)
);

create table Admin(
    username_admin varchar(20) not null,
    nama_admin varchar(100) not null,
    alamat_admin text,
    no_ktp_admin varchar(20) not null,
    password_admin varchar(20) not null,
    email_admin varchar(50) not null,
    CONSTRAINT pk_admin PRIMARY KEY (username_admin)
);

create table Transaksi(
    id_transaksi varchar(20) not null,
    username_pembeli varchar(100) not null,
    id_barang varchar(20) not null,
    jumlah_barang int not null,
    total_harga int not null,
    tgl_transaksi date not null,
    CONSTRAINT pk_transaksi PRIMARY KEY (id_transaksi),
    CONSTRAINT fk1_transaksi FOREIGN KEY (username_pembeli) REFERENCES pembeli(username_pembeli) ON DELETE CASCADE,
    CONSTRAINT fk2_transaksi FOREIGN KEY (id_barang) REFERENCES barang(id_barang) ON DELETE CASCADE
);

create table Suplai(
    id_suplai varchar(20) not null,
    username_penjual varchar(100) not null,
    id_barang varchar(20) not null,
    tgl_suplai date not null,
    CONSTRAINT pk_suplai PRIMARY KEY (id_suplai),
    CONSTRAINT fk1_suplai FOREIGN KEY (username_penjual) REFERENCES penjual(username_penjual) ON DELETE CASCADE,
    CONSTRAINT fk2_suplai FOREIGN KEY (id_barang) REFERENCES barang(id_barang) ON DELETE CASCADE
);

create table Atur(
    id_atur varchar(20) not null,
    username_admin varchar(20) not null,
    id_barang varchar(20) not null,
    CONSTRAINT pk_atur PRIMARY KEY (id_atur),
    CONSTRAINT fk1_atur FOREIGN KEY (username_admin) REFERENCES admin(username_admin) ON DELETE CASCADE,
    CONSTRAINT fk2_atur FOREIGN KEY (id_barang) REFERENCES barang(id_barang) ON DELETE CASCADE
);

//INSERT ADMIN

INSERT into admin (username_admin,no_ktp_admin,nama_admin,email_admin,password_admin,alamat_admin) VALUES ('Haryandrafatwa','3175042805990003','Haryandra Fatwa Aullia','haryandrafatwa010@gmail.com','apaajabolehh','jl. Batu Jambrut');
INSERT into admin (username_admin,no_ktp_admin,nama_admin,email_admin,password_admin,alamat_admin) VALUES ('Aldip','3175041201990003','Aldi Pranadia','aldipranadia@gmail.com','apaajabolehh','jl. Kecombrang');
INSERT into admin (username_admin,no_ktp_admin,nama_admin,email_admin,password_admin,alamat_admin) VALUES ('Vinamutiara','3175040205990003','Vina Mutiara','vinamutiara@gmail.com','apaajabolehh','jl. Mawar');
INSERT into admin (username_admin,no_ktp_admin,nama_admin,email_admin,password_admin,alamat_admin) VALUES ('Talithakayla','3175043001000003','Talitha Kayla Amory','talithakayla@gmail.com','apaajabolehh','jl. Kenanga');
INSERT into admin (username_admin,no_ktp_admin,nama_admin,email_admin,password_admin,alamat_admin) VALUES ('Jamalsamsudin','3175041411890003','Jamaludin Samsudin','jamalsamsudin@gmail.com','apaajabolehh','jl. Gedong');

//INSERT PEMBELI

INSERT into pembeli (username_pembeli,no_ktp_pembeli,nama_pembeli,email_pembeli,password_pembeli,alamat_pembeli) VALUES ('Haryandrafatwa','3175042805990003','Haryandra Fatwa Aullia','haryandrafatwa010@gmail.com','apaajabolehh','jl. Batu Jambrut');
INSERT into pembeli (username_pembeli,no_ktp_pembeli,nama_pembeli,email_pembeli,password_pembeli,alamat_pembeli) VALUES ('Aldip','3175041201990003','Aldi Pranadia','aldipranadia@gmail.com','apaajabolehh','jl. Kecombrang');
INSERT into pembeli (username_pembeli,no_ktp_pembeli,nama_pembeli,email_pembeli,password_pembeli,alamat_pembeli) VALUES ('Vinamutiara','3175040205990003','Vina Mutiara','vinamutiara@gmail.com','apaajabolehh','jl. Mawar');
INSERT into pembeli (username_pembeli,no_ktp_pembeli,nama_pembeli,email_pembeli,password_pembeli,alamat_pembeli) VALUES ('Talithakayla','3175043001000003','Talitha Kayla Amory','talithakayla@gmail.com','apaajabolehh','jl. Kenanga');
INSERT into pembeli (username_pembeli,no_ktp_pembeli,nama_pembeli,email_pembeli,password_pembeli,alamat_pembeli) VALUES ('Jamalsamsudin','3175041411890003','Jamaludin Samsudin','jamalsamsudin@gmail.com','apaajabolehh','jl. Gedong');

//INSERT PENJUAL

INSERT into penjual (username_penjual,no_ktp_penjual,nama_penjual,email_penjual,password_penjual,alamat_penjual) VALUES ('Haryandrafatwa','3175042805990003','Haryandra Fatwa Aullia','haryandrafatwa010@gmail.com','apaajabolehh','jl. Batu Jambrut');
INSERT into penjual (username_penjual,no_ktp_penjual,nama_penjual,email_penjual,password_penjual,alamat_penjual) VALUES ('Aldip','3175041201990003','Aldi Pranadia','aldipranadia@gmail.com','apaajabolehh','jl. Kecombrang');
INSERT into penjual (username_penjual,no_ktp_penjual,nama_penjual,email_penjual,password_penjual,alamat_penjual) VALUES ('Vinamutiara','3175040205990003','Vina Mutiara','vinamutiara@gmail.com','apaajabolehh','jl. Mawar');
INSERT into penjual (username_penjual,no_ktp_penjual,nama_penjual,email_penjual,password_penjual,alamat_penjual) VALUES ('Talithakayla','3175043001000003','Talitha Kayla Amory','talithakayla@gmail.com','apaajabolehh','jl. Kenanga');
INSERT into penjual (username_penjual,no_ktp_penjual,nama_penjual,email_penjual,password_penjual,alamat_penjual) VALUES ('Jamalsamsudin','3175041411890003','Jamaludin Samsudin','jamalsamsudin@gmail.com','apaajabolehh','jl. Gedong');

//INSERT BARANG

INSERT into barang (id_barang,nama_barang,stock_barang,harga_barang,berat_barang,desc_barang) VALUES ('BRG-001','Lemari Cendana',12,6000000,200,'Terbuat dari kayu cendana asli sehingga tidak menimbulkan bau pada pakaian anda');
INSERT into barang (id_barang,nama_barang,stock_barang,harga_barang,berat_barang,desc_barang) VALUES ('BRG-002','Sofa Santai Keluarga',2,4000000,100,'Cocok untuk di ruang keluarga untuk berkumpul bersama');
INSERT into barang (id_barang,nama_barang,stock_barang,harga_barang,berat_barang,desc_barang) VALUES ('BRG-003','Cermin Stainless Steel',31,400000,2,'Cermin anti karat sangat terlihat elegan');
INSERT into barang (id_barang,nama_barang,stock_barang,harga_barang,berat_barang,desc_barang) VALUES ('BRG-004','Meja Kerja',5,500000,50,'Meja kerja yang sangat fleksibel membantu anda ketika berkerja di atas meja tersebut.');
INSERT into barang (id_barang,nama_barang,stock_barang,harga_barang,berat_barang,desc_barang) VALUES ('BRG-005','Lampu Belajar Elastis',73,50000,1,'Tekstur kabel yang lentur, memudahkan ketika ingin dibengkok - bengkokkan');

//INSERT TRANSAKSI

INSERT into transaksi (id_transaksi,username_pembeli,id_barang,total_harga,jumlah_barang) VALUES ('TS-001','Haryandrafatwa','BRG-001',120000,2);
INSERT into transaksi (id_transaksi,username_pembeli,id_barang,total_harga,jumlah_barang) VALUES ('TS-003','Aldip','BRG-002',8000000,2);
INSERT into transaksi (id_transaksi,username_pembeli,id_barang,total_harga,jumlah_barang) VALUES ('TS-004','Talithakayla','BRG-003',400000,1);
INSERT into transaksi (id_transaksi,username_pembeli,id_barang,total_harga,jumlah_barang) VALUES ('TS-005','Vinamutiara','BRG-004',500000,1);
INSERT into transaksi (id_transaksi,username_pembeli,id_barang,total_harga,jumlah_barang) VALUES ('TS-006','Aldip','BRG-005',100000,2);

//INSERT SUPLAI

INSERT into suplai (id_suplai,username_penjual,id_barang,tgl_suplai) VALUES ('SP-001','Haryandrafatwa','BRG-001','2019-02-16');
INSERT into suplai (id_suplai,username_penjual,id_barang,tgl_suplai) VALUES ('SP-002','Aldip','BRG-002','2019-02-23');
INSERT into suplai (id_suplai,username_penjual,id_barang,tgl_suplai) VALUES ('SP-003','Vinamutiara','BRG-003','2019-02-28');
INSERT into suplai (id_suplai,username_penjual,id_barang,tgl_suplai) VALUES ('SP-004','Talithakayla','BRG-004','2019-03-16');
INSERT into suplai (id_suplai,username_penjual,id_barang,tgl_suplai) VALUES ('SP-005','Haryandrafatwa','BRG-005','2019-03-26');

//INSERT ATUR

INSERT INTO atur (id_atur,username_admin,id_barang) VALUES ('AT-001','Haryandrafatwa','BRG-001');
INSERT INTO atur (id_atur,username_admin,id_barang) VALUES ('AT-002','Haryandrafatwa','BRG-002');
INSERT INTO atur (id_atur,username_admin,id_barang) VALUES ('AT-003','Aldip','BRG-003');
INSERT INTO atur (id_atur,username_admin,id_barang) VALUES ('AT-004','Vinamutiara','BRG-004');
INSERT INTO atur (id_atur,username_admin,id_barang) VALUES ('AT-005','Talithakayla','BRG-005');