/*==============================================================*/
/* DBMS name:      MySQL 5.0                                    */
/* Created on:     16/02/2021 23:53:09                          */
/*==============================================================*/


drop table if exists BUKU_TAMU;

drop table if exists GALERI;

drop table if exists JADWAL;

drop table if exists KATEGORI_GALERI;

drop table if exists KOMENTAR;

drop table if exists PENYIAR;

drop table if exists RATING;

drop table if exists USER;

drop table if exists USER_ACCESS_MENU;

drop table if exists USER_MENU;

drop table if exists USER_ROLE;

drop table if exists USER_SUB_MENU;

/*==============================================================*/
/* Table: BUKU_TAMU                                             */
/*==============================================================*/
create table BUKU_TAMU
(
   ID_TAMU              int not null AUTO_INCREMENT,
   NAMA_TAMU            varchar(128),
   EMAIL_TAMU           varchar(128),
   PESAN                text,
   primary key (ID_TAMU)
);

/*==============================================================*/
/* Table: GALERI                                                */
/*==============================================================*/
create table GALERI
(
   ID_GALERI            int not null AUTO_INCREMENT,
   ID_KATEGORI          int,
   NAMA_FILE            text,
   KATEGORI             varchar(30),
   JUDUL                text,
   DESCK_GALERI         text,
   TANGGAL              date,
   primary key (ID_GALERI)
);

/*==============================================================*/
/* Table: JADWAL                                                */
/*==============================================================*/
create table JADWAL
(
   ID_JADWAL            int not null AUTO_INCREMENT,
   ID_PENYIAR           int,
   JUDUL_JADWAL         text,
   TANGGAL_JADWAL       date,
   WAKTU                time,
   DESCK_JADWAL         text,
   primary key (ID_JADWAL)
);

/*==============================================================*/
/* Table: KATEGORI_GALERI                                       */
/*==============================================================*/
create table KATEGORI_GALERI
(
   ID_KATEGORI          int not null AUTO_INCREMENT,
   NAMA_KATEGORI        varchar(128),
   primary key (ID_KATEGORI)
);

/*==============================================================*/
/* Table: KOMENTAR                                              */
/*==============================================================*/
create table KOMENTAR
(
   ID_KOMENTAR          int not null AUTO_INCREMENT,
   KOMENTAR             text,
   primary key (ID_KOMENTAR)
);

/*==============================================================*/
/* Table: PENYIAR                                               */
/*==============================================================*/
create table PENYIAR
(
   ID_PENYIAR           int not null AUTO_INCREMENT,
   NAMA_PENYIAR         varchar(128),
   NO_TLP_PENYIAR       varchar(15),
   DESCK                text,
   GAMBAR_PENYIAR       text,
   INSTAGRAM            text,
   FACEBOOK             text,
   TWITTER              text,
   primary key (ID_PENYIAR)
);

/*==============================================================*/
/* Table: RATING                                                */
/*==============================================================*/
create table RATING
(
   ID_RATING            int not null AUTO_INCREMENT,
   ID_JADWAL            int,
   ID_PENYIAR           int,
   ID_USER              int,
   ID_KOMENTAR          int,
   ID_GALERI            int,
   KATEGORI_RATING      text,
   RATING               int,
   primary key (ID_RATING)
);

/*==============================================================*/
/* Table: USER                                                  */
/*==============================================================*/
create table USER
(
   ID_USER              int not null AUTO_INCREMENT,
   ID_ROLE              smallint,
   EMAIL                varchar(128) not null,
   NAMA                 varchar(128),
   PASSWORD             varchar(50),
   NO_TLP               varchar(15),
   USER_ACTIVE          smallint,
   GAMBAR               text,
   primary key (ID_USER)
);

/*==============================================================*/
/* Table: USER_ACCESS_MENU                                      */
/*==============================================================*/
create table USER_ACCESS_MENU
(
   ID_ACCES             int not null AUTO_INCREMENT,
   ID_ROLE              smallint,
   ID_MENU              smallint,
   primary key (ID_ACCES)
);

/*==============================================================*/
/* Table: USER_MENU                                             */
/*==============================================================*/
create table USER_MENU
(
   ID_MENU              smallint not null AUTO_INCREMENT,
   NAMA_MENU            varchar(30),
   primary key (ID_MENU)
);

/*==============================================================*/
/* Table: USER_ROLE                                             */
/*==============================================================*/
create table USER_ROLE
(
   ID_ROLE              smallint not null AUTO_INCREMENT,
   ROLE                 varchar(15),
   primary key (ID_ROLE)
);

/*==============================================================*/
/* Table: USER_SUB_MENU                                         */
/*==============================================================*/
create table USER_SUB_MENU
(
   ID_SUB               int not null AUTO_INCREMENT,
   ID_MENU              smallint,
   JUDUL_SUB            varchar(30),
   URL                  text,
   ICON                 text,
   SUB_ACTIVE           smallint,
   primary key (ID_SUB)
);

alter table GALERI add constraint FK_KATEGORI_GALERI foreign key (ID_KATEGORI)
      references KATEGORI_GALERI (ID_KATEGORI) on delete restrict on update restrict;

alter table JADWAL add constraint FK_PENYIAR_JADWAL foreign key (ID_PENYIAR)
      references PENYIAR (ID_PENYIAR) on delete restrict on update restrict;

alter table RATING add constraint FK_GALERI_RATING foreign key (ID_GALERI)
      references GALERI (ID_GALERI) on delete restrict on update restrict;

alter table RATING add constraint FK_JADWAL_RATING foreign key (ID_JADWAL)
      references JADWAL (ID_JADWAL) on delete restrict on update restrict;

alter table RATING add constraint FK_KOMENTAR_RATING foreign key (ID_KOMENTAR)
      references KOMENTAR (ID_KOMENTAR) on delete restrict on update restrict;

alter table RATING add constraint FK_PENYIAR_RATING foreign key (ID_PENYIAR)
      references PENYIAR (ID_PENYIAR) on delete restrict on update restrict;

alter table RATING add constraint FK_USER_RATING foreign key (ID_USER)
      references USER (ID_USER) on delete restrict on update restrict;

alter table USER add constraint FK_USER_ROLE_USER foreign key (ID_ROLE)
      references USER_ROLE (ID_ROLE) on delete restrict on update restrict;

alter table USER_ACCESS_MENU add constraint FK_USER_MENU_USER_ACCES foreign key (ID_MENU)
      references USER_MENU (ID_MENU) on delete restrict on update restrict;

alter table USER_ACCESS_MENU add constraint FK_USER_ROLE_USER_ACCES foreign key (ID_ROLE)
      references USER_ROLE (ID_ROLE) on delete restrict on update restrict;

alter table USER_SUB_MENU add constraint FK_USER_MENU_USER_SUB foreign key (ID_MENU)
      references USER_MENU (ID_MENU) on delete restrict on update restrict;

