PGDMP                          w            tugas_akhir    12.1    12.1     ?           0    0    ENCODING    ENCODING        SET client_encoding = 'UTF8';
                      false            ?           0    0 
   STDSTRINGS 
   STDSTRINGS     (   SET standard_conforming_strings = 'on';
                      false            ?           0    0 
   SEARCHPATH 
   SEARCHPATH     8   SELECT pg_catalog.set_config('search_path', '', false);
                      false            ?           1262    24576    tugas_akhir    DATABASE     ?   CREATE DATABASE tugas_akhir WITH TEMPLATE = template0 ENCODING = 'UTF8' LC_COLLATE = 'English_United States.1252' LC_CTYPE = 'English_United States.1252';
    DROP DATABASE tugas_akhir;
                postgres    false            ?           0    0    tugas_akhir    DATABASE PROPERTIES     M   ALTER DATABASE tugas_akhir SET search_path TO '$user', 'public', 'topology';
                     postgres    false            ?            1259    25747    admin    TABLE     p   CREATE TABLE public.admin (
    username character varying NOT NULL,
    password character varying NOT NULL
);
    DROP TABLE public.admin;
       public         heap    postgres    false            ?          0    25747    admin 
   TABLE DATA           3   COPY public.admin (username, password) FROM stdin;
    public          postgres    false    219   (                  2606    25754    admin admin_pkey 
   CONSTRAINT     T   ALTER TABLE ONLY public.admin
    ADD CONSTRAINT admin_pkey PRIMARY KEY (username);
 :   ALTER TABLE ONLY public.admin DROP CONSTRAINT admin_pkey;
       public            postgres    false    219            ?      x?KL????L?\`??1?????? ??	W     