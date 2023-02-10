--
-- PostgreSQL database dump
--

-- Dumped from database version 15.1
-- Dumped by pg_dump version 15.1

-- Started on 2023-02-10 15:03:06

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

SET default_tablespace = '';

SET default_table_access_method = heap;

--
-- TOC entry 216 (class 1259 OID 16654)
-- Name: users_details; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.users_details (
    id integer NOT NULL,
    name character varying(100) NOT NULL
);


ALTER TABLE public.users_details OWNER TO postgres;

--
-- TOC entry 217 (class 1259 OID 16657)
-- Name: user_details_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE public.user_details_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.user_details_id_seq OWNER TO postgres;

--
-- TOC entry 3343 (class 0 OID 0)
-- Dependencies: 217
-- Name: user_details_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE public.user_details_id_seq OWNED BY public.users_details.id;


--
-- TOC entry 214 (class 1259 OID 16643)
-- Name: users; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.users (
    id integer NOT NULL,
    email character varying(255) NOT NULL,
    password character varying(255) NOT NULL,
    id_user_details integer DEFAULT 0 NOT NULL,
    role character varying(2) DEFAULT 1 NOT NULL
);


ALTER TABLE public.users OWNER TO postgres;

--
-- TOC entry 218 (class 1259 OID 16688)
-- Name: user_view; Type: VIEW; Schema: public; Owner: postgres
--

CREATE VIEW public.user_view AS
 SELECT users_details.name,
    u.email
   FROM (public.users_details
     JOIN public.users u ON ((users_details.id = u.id_user_details)));


ALTER TABLE public.user_view OWNER TO postgres;

--
-- TOC entry 215 (class 1259 OID 16650)
-- Name: users_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE public.users_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.users_id_seq OWNER TO postgres;

--
-- TOC entry 3344 (class 0 OID 0)
-- Dependencies: 215
-- Name: users_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE public.users_id_seq OWNED BY public.users.id;


--
-- TOC entry 3182 (class 2604 OID 16651)
-- Name: users id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.users ALTER COLUMN id SET DEFAULT nextval('public.users_id_seq'::regclass);


--
-- TOC entry 3185 (class 2604 OID 16658)
-- Name: users_details id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.users_details ALTER COLUMN id SET DEFAULT nextval('public.user_details_id_seq'::regclass);


--
-- TOC entry 3334 (class 0 OID 16643)
-- Dependencies: 214
-- Data for Name: users; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public.users (id, email, password, id_user_details, role) FROM stdin;
6	admin@admin.com	c3284d0f94606de1fd2af172aba15bf3	7	0
7	test@test.com	fb469d7ef430b0baf0cab6c436e70375	8	1
\.


--
-- TOC entry 3336 (class 0 OID 16654)
-- Dependencies: 216
-- Data for Name: users_details; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public.users_details (id, name) FROM stdin;
7	admin
8	test
\.


--
-- TOC entry 3345 (class 0 OID 0)
-- Dependencies: 217
-- Name: user_details_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.user_details_id_seq', 8, true);


--
-- TOC entry 3346 (class 0 OID 0)
-- Dependencies: 215
-- Name: users_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.users_id_seq', 7, true);


--
-- TOC entry 3187 (class 2606 OID 16649)
-- Name: users id; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.users
    ADD CONSTRAINT id PRIMARY KEY (id);


--
-- TOC entry 3189 (class 2606 OID 16663)
-- Name: users_details user_details_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.users_details
    ADD CONSTRAINT user_details_pkey PRIMARY KEY (id);


--
-- TOC entry 3190 (class 2606 OID 16679)
-- Name: users details_users__fk; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.users
    ADD CONSTRAINT details_users__fk FOREIGN KEY (id_user_details) REFERENCES public.users_details(id) ON UPDATE CASCADE ON DELETE CASCADE;


-- Completed on 2023-02-10 15:03:06

--
-- PostgreSQL database dump complete
--

