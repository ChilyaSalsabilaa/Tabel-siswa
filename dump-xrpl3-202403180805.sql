--
-- PostgreSQL database dump
--

-- Dumped from database version 16.2 (Postgres.app)
-- Dumped by pg_dump version 16.2 (Postgres.app)

-- Started on 2024-03-18 08:05:04 WIB

SET statement_timeout = 0;
SET lock_timeout = 0;
SET idle_in_transaction_session_timeout = 0;
SET client_encoding = 'UTF8';
SET standard_conforming_strings = on;
SELECT pg_catalog.set_config('search_path', '', false);
SET check_function_bodies = false;
SET xmloption = content;
SET client_min_messages = warning;
SET row_security = off;

DROP DATABASE xrpl3;
--
-- TOC entry 3618 (class 1262 OID 16390)
-- Name: xrpl3; Type: DATABASE; Schema: -; Owner: -
--

CREATE DATABASE xrpl3 WITH TEMPLATE = template0 ENCODING = 'UTF8' LOCALE_PROVIDER = libc LOCALE = 'en_US.UTF-8';


\connect xrpl3

SET statement_timeout = 0;
SET lock_timeout = 0;
SET idle_in_transaction_session_timeout = 0;
SET client_encoding = 'UTF8';
SET standard_conforming_strings = on;
SELECT pg_catalog.set_config('search_path', '', false);
SET check_function_bodies = false;
SET xmloption = content;
SET client_min_messages = warning;
SET row_security = off;

--
-- TOC entry 4 (class 2615 OID 2200)
-- Name: public; Type: SCHEMA; Schema: -; Owner: -
--

CREATE SCHEMA public;


--
-- TOC entry 3619 (class 0 OID 0)
-- Dependencies: 4
-- Name: SCHEMA public; Type: COMMENT; Schema: -; Owner: -
--

COMMENT ON SCHEMA public IS 'standard public schema';


SET default_tablespace = '';

SET default_table_access_method = heap;

--
-- TOC entry 216 (class 1259 OID 16392)
-- Name: siswa; Type: TABLE; Schema: public; Owner: -
--

CREATE TABLE public.siswaa (
    id integer NOT NULL,
    nama character varying
);


--
-- TOC entry 215 (class 1259 OID 16391)
-- Name: newtable_id_seq; Type: SEQUENCE; Schema: public; Owner: -
--

CREATE SEQUENCE public.newtable_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


--
-- TOC entry 3620 (class 0 OID 0)
-- Dependencies: 215
-- Name: newtable_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: -
--

ALTER SEQUENCE public.newtable_id_seq OWNED BY public.siswaa.id;


--
-- TOC entry 3465 (class 2604 OID 16400)
-- Name: siswa id; Type: DEFAULT; Schema: public; Owner: -
--

ALTER TABLE ONLY public.siswaa ALTER COLUMN id SET DEFAULT nextval('public.newtable_id_seq'::regclass);


--
-- TOC entry 3612 (class 0 OID 16392)
-- Dependencies: 216
-- Data for Name: siswaa; Type: TABLE DATA; Schema: public; Owner: -
--

INSERT INTO public.siswaa VALUES (3, 'Ganjar Pranowo');
INSERT INTO public.siswaa VALUES (4, 'Firdausa');
INSERT INTO public.siswaa VALUES (6, 'Amin Rais');
INSERT INTO public.siswaa VALUES (7, 'Megawati Soekarno Putri 123');
INSERT INTO public.siswaa VALUES (5, 'Surya Paloh 123');
INSERT INTO public.siswaa VALUES (8, 'tes');
INSERT INTO public.siswaa VALUES (2, 'Halo');
INSERT INTO public.siswaa VALUES (1, 'Hai');
INSERT INTO public.siswaa VALUES (9, 'Ega');


--
-- TOC entry 3621 (class 0 OID 0)
-- Dependencies: 215
-- Name: newtable_id_seq; Type: SEQUENCE SET; Schema: public; Owner: -
--

SELECT pg_catalog.setval('public.newtable_id_seq', 9, true);


--
-- TOC entry 3467 (class 2606 OID 16402)
-- Name: siswa newtable_pk; Type: CONSTRAINT; Schema: public; Owner: -
--

ALTER TABLE ONLY public.siswaa
    ADD CONSTRAINT newtable_pk PRIMARY KEY (id);


-- Completed on 2024-03-18 08:05:04 WIB

--
-- PostgreSQL database dump complete
--

