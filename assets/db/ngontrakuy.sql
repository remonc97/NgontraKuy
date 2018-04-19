create database ngontrakuy;
use ngontrakuy;

create table user(
iduser varchar(8) not null primary key,
email varchar(50) not null,
password varchar(255) not null,
nama varchar(100) not null,
tgllahir date,
notelp varchar(14),
auth char(1) #0 = admin | 1 = user | 2 = pemilik kontrakan -> bisa automatically berubah dari 1 ke 2 jika user biasa tibatiba buka kontrakan
);

create table kontrakan(
idkontrakan int(11) primary key auto_increment,
iduser varchar(8) not null,
nmkontrakan varchar(100) not null,
notelp varchar(14),
deskripsi text, #penjelasan tentang kontrakan tsb
alamat text,
gambar text,
foreign key(iduser) references user(iduser)
);

create table pesan(
idpesan int(11) primary key auto_increment,
iduser varchar(8) not null,
tglpesan date,
jenispesan varchar(10), # komplain | normal -> normal = bukan komplain, cuma pesan biasa | request
subject varchar(200),
isi text,
status varchar(20), #submitted | on progress | solved -> default setelah dikirim adalah submitted. yang mengganti status dari onprogress - solved adalah pemilik | accepted | declined
foreign key(iduser) references user(iduser)
);

create table rumah(
idrumah int(11) primary key auto_increment,
idkontrakan int(11) not null,
nmrumah varchar(100),
dayatampung varchar(3),
gambar text,
ukuran varchar(40),
harga varchar(10),
fasilitas text,
status varchar(10), #vacant | new | rented
foreign key(idkontrakan) references kontrakan(idkontrakan)
);

create table booking(
idbooking varchar(8) not null primary key,
iduser varchar(8) not null,
tglbooking date,
foreign key(iduser) references user(iduser)
);

create table tagihan(
idtagihan int(11) not null primary key,
idbooking varchar(8) not null,
tgltagihan date,
totaltagihan int(11),
statuspembayaran char(1),
foreign key (idbooking) references booking(idbooking)
);


create table detilbooking(
idbooking varchar(8) not null,
idrumah int(11) not null,
notelp varchar(14) not null,
tglcheckin date,
tglcheckout date,
foreign key (idbooking) references booking(idbooking)
);