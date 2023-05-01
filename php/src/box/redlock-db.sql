drop table if exists `users`;
create table `users` (
    ID int not null,
    Nama text not null,
    Alamat text not null,
    Jabatan text not null,
    primary key (ID)
);
insert into `users` (ID, Nama, Alamat, Jabatan) values
    (1,"arvyn","cimahi","siswa"),
    (2,"Alice","bandung", "dosen"),
    (3,"Budi","Jakarta", "siswa");