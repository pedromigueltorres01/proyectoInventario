PGDMP     6                
    x            santidaddata    12.3    12.3 )    H           0    0    ENCODING    ENCODING        SET client_encoding = 'UTF8';
                      false            I           0    0 
   STDSTRINGS 
   STDSTRINGS     (   SET standard_conforming_strings = 'on';
                      false            J           0    0 
   SEARCHPATH 
   SEARCHPATH     8   SELECT pg_catalog.set_config('search_path', '', false);
                      false            K           1262    43191    santidaddata    DATABASE     �   CREATE DATABASE santidaddata WITH TEMPLATE = template0 ENCODING = 'UTF8' LC_COLLATE = 'Spanish_Venezuela.1252' LC_CTYPE = 'Spanish_Venezuela.1252';
    DROP DATABASE santidaddata;
                postgres    false            �            1259    43215    actividades_9    TABLE     �   CREATE TABLE public.actividades_9 (
    id_actividad integer NOT NULL,
    nombre_actividad character varying NOT NULL,
    fecha_actividad date NOT NULL,
    observaciones_actividad character varying(5000) NOT NULL,
    cedula integer NOT NULL
);
 !   DROP TABLE public.actividades_9;
       public         heap    postgres    false            �            1259    43192    asistencia_4    TABLE     �   CREATE TABLE public.asistencia_4 (
    id_asistencia integer NOT NULL,
    descripcion_asistencia character varying NOT NULL
);
     DROP TABLE public.asistencia_4;
       public         heap    postgres    false            �            1259    43239    control_de_ingresos_6    TABLE     9  CREATE TABLE public.control_de_ingresos_6 (
    id_control integer NOT NULL,
    ingresos_ofrendas integer NOT NULL,
    total_ingresos_ofrendas integer NOT NULL,
    ingresos_diezmos integer NOT NULL,
    total_diezmos_ingresos integer NOT NULL,
    fechas_ingresos date NOT NULL,
    cedula integer NOT NULL
);
 )   DROP TABLE public.control_de_ingresos_6;
       public         heap    postgres    false            �            1259    43244    control_diario_asistencia_5    TABLE     u   CREATE TABLE public.control_diario_asistencia_5 (
    cedula integer NOT NULL,
    id_asistencia integer NOT NULL
);
 /   DROP TABLE public.control_diario_asistencia_5;
       public         heap    postgres    false            �            1259    43231    control_egresos_7    TABLE       CREATE TABLE public.control_egresos_7 (
    id_egresos integer NOT NULL,
    total_egresos integer NOT NULL,
    monto_egreso integer NOT NULL,
    descripcion_egreso character varying(2000) NOT NULL,
    fecha_egreso date NOT NULL,
    cedula integer NOT NULL
);
 %   DROP TABLE public.control_egresos_7;
       public         heap    postgres    false            �            1259    43205 
   miembros_1    TABLE     E  CREATE TABLE public.miembros_1 (
    cedula integer NOT NULL,
    nombre character varying(30) NOT NULL,
    apellido character varying(30) NOT NULL,
    fecha_nacimiento date NOT NULL,
    sexo character varying(1) NOT NULL,
    telefono character varying(13),
    status integer NOT NULL,
    fecha_activo date NOT NULL
);
    DROP TABLE public.miembros_1;
       public         heap    postgres    false            �            1259    43223    observacines_miembros_8    TABLE     �   CREATE TABLE public.observacines_miembros_8 (
    id_oservaciones integer NOT NULL,
    observaciones character varying(3000) NOT NULL,
    fecha_observaciones date NOT NULL,
    cedula integer NOT NULL
);
 +   DROP TABLE public.observacines_miembros_8;
       public         heap    postgres    false            �            1259    43200    perfil_3    TABLE     q   CREATE TABLE public.perfil_3 (
    id_perfil integer NOT NULL,
    descripcion character varying(13) NOT NULL
);
    DROP TABLE public.perfil_3;
       public         heap    postgres    false            �            1259    43210 
   session_10    TABLE     �   CREATE TABLE public.session_10 (
    id_usuario character varying(20) NOT NULL,
    password character varying(50) NOT NULL,
    cedula integer NOT NULL,
    id_perfil integer NOT NULL
);
    DROP TABLE public.session_10;
       public         heap    postgres    false            �            1259    43247    ubicacion_2    TABLE     x   CREATE TABLE public.ubicacion_2 (
    descripcion_calle character varying(200) NOT NULL,
    cedula integer NOT NULL
);
    DROP TABLE public.ubicacion_2;
       public         heap    postgres    false            @          0    43215    actividades_9 
   TABLE DATA           y   COPY public.actividades_9 (id_actividad, nombre_actividad, fecha_actividad, observaciones_actividad, cedula) FROM stdin;
    public          postgres    false    206   �6       <          0    43192    asistencia_4 
   TABLE DATA           M   COPY public.asistencia_4 (id_asistencia, descripcion_asistencia) FROM stdin;
    public          postgres    false    202   �6       C          0    43239    control_de_ingresos_6 
   TABLE DATA           �   COPY public.control_de_ingresos_6 (id_control, ingresos_ofrendas, total_ingresos_ofrendas, ingresos_diezmos, total_diezmos_ingresos, fechas_ingresos, cedula) FROM stdin;
    public          postgres    false    209   �6       D          0    43244    control_diario_asistencia_5 
   TABLE DATA           L   COPY public.control_diario_asistencia_5 (cedula, id_asistencia) FROM stdin;
    public          postgres    false    210   �6       B          0    43231    control_egresos_7 
   TABLE DATA           ~   COPY public.control_egresos_7 (id_egresos, total_egresos, monto_egreso, descripcion_egreso, fecha_egreso, cedula) FROM stdin;
    public          postgres    false    208   �6       >          0    43205 
   miembros_1 
   TABLE DATA           v   COPY public.miembros_1 (cedula, nombre, apellido, fecha_nacimiento, sexo, telefono, status, fecha_activo) FROM stdin;
    public          postgres    false    204   7       A          0    43223    observacines_miembros_8 
   TABLE DATA           n   COPY public.observacines_miembros_8 (id_oservaciones, observaciones, fecha_observaciones, cedula) FROM stdin;
    public          postgres    false    207   x7       =          0    43200    perfil_3 
   TABLE DATA           :   COPY public.perfil_3 (id_perfil, descripcion) FROM stdin;
    public          postgres    false    203   �7       ?          0    43210 
   session_10 
   TABLE DATA           M   COPY public.session_10 (id_usuario, password, cedula, id_perfil) FROM stdin;
    public          postgres    false    205   �7       E          0    43247    ubicacion_2 
   TABLE DATA           @   COPY public.ubicacion_2 (descripcion_calle, cedula) FROM stdin;
    public          postgres    false    211   8       �
           2606    43222    actividades_9 actividades_9_pk 
   CONSTRAINT     f   ALTER TABLE ONLY public.actividades_9
    ADD CONSTRAINT actividades_9_pk PRIMARY KEY (id_actividad);
 H   ALTER TABLE ONLY public.actividades_9 DROP CONSTRAINT actividades_9_pk;
       public            postgres    false    206            �
           2606    43199    asistencia_4 asistencia_4_pk 
   CONSTRAINT     e   ALTER TABLE ONLY public.asistencia_4
    ADD CONSTRAINT asistencia_4_pk PRIMARY KEY (id_asistencia);
 F   ALTER TABLE ONLY public.asistencia_4 DROP CONSTRAINT asistencia_4_pk;
       public            postgres    false    202            �
           2606    43243 .   control_de_ingresos_6 control_de_ingresos_6_pk 
   CONSTRAINT     t   ALTER TABLE ONLY public.control_de_ingresos_6
    ADD CONSTRAINT control_de_ingresos_6_pk PRIMARY KEY (id_control);
 X   ALTER TABLE ONLY public.control_de_ingresos_6 DROP CONSTRAINT control_de_ingresos_6_pk;
       public            postgres    false    209            �
           2606    43238 &   control_egresos_7 control_egresos_7_pk 
   CONSTRAINT     l   ALTER TABLE ONLY public.control_egresos_7
    ADD CONSTRAINT control_egresos_7_pk PRIMARY KEY (id_egresos);
 P   ALTER TABLE ONLY public.control_egresos_7 DROP CONSTRAINT control_egresos_7_pk;
       public            postgres    false    208            �
           2606    43209    miembros_1 miembros_1_pk 
   CONSTRAINT     Z   ALTER TABLE ONLY public.miembros_1
    ADD CONSTRAINT miembros_1_pk PRIMARY KEY (cedula);
 B   ALTER TABLE ONLY public.miembros_1 DROP CONSTRAINT miembros_1_pk;
       public            postgres    false    204            �
           2606    43204    perfil_3 miembros_3_pk 
   CONSTRAINT     [   ALTER TABLE ONLY public.perfil_3
    ADD CONSTRAINT miembros_3_pk PRIMARY KEY (id_perfil);
 @   ALTER TABLE ONLY public.perfil_3 DROP CONSTRAINT miembros_3_pk;
       public            postgres    false    203            �
           2606    43230 2   observacines_miembros_8 observacines_miembros_8_pk 
   CONSTRAINT     }   ALTER TABLE ONLY public.observacines_miembros_8
    ADD CONSTRAINT observacines_miembros_8_pk PRIMARY KEY (id_oservaciones);
 \   ALTER TABLE ONLY public.observacines_miembros_8 DROP CONSTRAINT observacines_miembros_8_pk;
       public            postgres    false    207            �
           2606    43214    session_10 session_10_pk 
   CONSTRAINT     ^   ALTER TABLE ONLY public.session_10
    ADD CONSTRAINT session_10_pk PRIMARY KEY (id_usuario);
 B   ALTER TABLE ONLY public.session_10 DROP CONSTRAINT session_10_pk;
       public            postgres    false    205            �
           2606    43250 G   control_diario_asistencia_5 asistencia_4_control_diario_asistencia_5_fk    FK CONSTRAINT     �   ALTER TABLE ONLY public.control_diario_asistencia_5
    ADD CONSTRAINT asistencia_4_control_diario_asistencia_5_fk FOREIGN KEY (id_asistencia) REFERENCES public.asistencia_4(id_asistencia);
 q   ALTER TABLE ONLY public.control_diario_asistencia_5 DROP CONSTRAINT asistencia_4_control_diario_asistencia_5_fk;
       public          postgres    false    210    2726    202            �
           2606    43285 )   actividades_9 miembros_1_actividades_9_fk    FK CONSTRAINT     �   ALTER TABLE ONLY public.actividades_9
    ADD CONSTRAINT miembros_1_actividades_9_fk FOREIGN KEY (cedula) REFERENCES public.miembros_1(cedula);
 S   ALTER TABLE ONLY public.actividades_9 DROP CONSTRAINT miembros_1_actividades_9_fk;
       public          postgres    false    204    2730    206            �
           2606    43270 9   control_de_ingresos_6 miembros_1_control_de_ingresos_6_fk    FK CONSTRAINT     �   ALTER TABLE ONLY public.control_de_ingresos_6
    ADD CONSTRAINT miembros_1_control_de_ingresos_6_fk FOREIGN KEY (cedula) REFERENCES public.miembros_1(cedula);
 c   ALTER TABLE ONLY public.control_de_ingresos_6 DROP CONSTRAINT miembros_1_control_de_ingresos_6_fk;
       public          postgres    false    209    2730    204            �
           2606    43265 E   control_diario_asistencia_5 miembros_1_control_diario_asistencia_5_fk    FK CONSTRAINT     �   ALTER TABLE ONLY public.control_diario_asistencia_5
    ADD CONSTRAINT miembros_1_control_diario_asistencia_5_fk FOREIGN KEY (cedula) REFERENCES public.miembros_1(cedula);
 o   ALTER TABLE ONLY public.control_diario_asistencia_5 DROP CONSTRAINT miembros_1_control_diario_asistencia_5_fk;
       public          postgres    false    210    204    2730            �
           2606    43275 1   control_egresos_7 miembros_1_control_egresos_7_fk    FK CONSTRAINT     �   ALTER TABLE ONLY public.control_egresos_7
    ADD CONSTRAINT miembros_1_control_egresos_7_fk FOREIGN KEY (cedula) REFERENCES public.miembros_1(cedula);
 [   ALTER TABLE ONLY public.control_egresos_7 DROP CONSTRAINT miembros_1_control_egresos_7_fk;
       public          postgres    false    208    2730    204            �
           2606    43280 =   observacines_miembros_8 miembros_1_observacines_miembros_8_fk    FK CONSTRAINT     �   ALTER TABLE ONLY public.observacines_miembros_8
    ADD CONSTRAINT miembros_1_observacines_miembros_8_fk FOREIGN KEY (cedula) REFERENCES public.miembros_1(cedula);
 g   ALTER TABLE ONLY public.observacines_miembros_8 DROP CONSTRAINT miembros_1_observacines_miembros_8_fk;
       public          postgres    false    204    207    2730            �
           2606    43290 #   session_10 miembros_1_session_10_fk    FK CONSTRAINT     �   ALTER TABLE ONLY public.session_10
    ADD CONSTRAINT miembros_1_session_10_fk FOREIGN KEY (cedula) REFERENCES public.miembros_1(cedula);
 M   ALTER TABLE ONLY public.session_10 DROP CONSTRAINT miembros_1_session_10_fk;
       public          postgres    false    204    2730    205            �
           2606    43260 !   ubicacion_2 miembros_ubicacion_fk    FK CONSTRAINT     �   ALTER TABLE ONLY public.ubicacion_2
    ADD CONSTRAINT miembros_ubicacion_fk FOREIGN KEY (cedula) REFERENCES public.miembros_1(cedula);
 K   ALTER TABLE ONLY public.ubicacion_2 DROP CONSTRAINT miembros_ubicacion_fk;
       public          postgres    false    211    2730    204            �
           2606    43255 !   session_10 perfil_3_session_10_fk    FK CONSTRAINT     �   ALTER TABLE ONLY public.session_10
    ADD CONSTRAINT perfil_3_session_10_fk FOREIGN KEY (id_perfil) REFERENCES public.perfil_3(id_perfil);
 K   ALTER TABLE ONLY public.session_10 DROP CONSTRAINT perfil_3_session_10_fk;
       public          postgres    false    2728    203    205            @      x������ � �      <      x������ � �      C      x������ � �      D      x������ � �      B      x������ � �      >   R   x�u�;
�0�z�.����g/`'XXZ�:�z���ÊbLI���!ט��Bo%�?����J�D�r�k��Jr_�c}�MU?���      A      x������ � �      =   1   x�3�tt����	rt��2�p2�9�]��\C�<�b���� �

      ?       x��˵01�0�442���--9�b���� V�-      E   *   x�sJ�JLITHIU��O���9�9��������Ғ+F��� ��	�     