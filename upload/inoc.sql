PGDMP                         z            fms    13.6    13.6 �    �           0    0    ENCODING    ENCODING        SET client_encoding = 'UTF8';
                      false            �           0    0 
   STDSTRINGS 
   STDSTRINGS     (   SET standard_conforming_strings = 'on';
                      false            �           0    0 
   SEARCHPATH 
   SEARCHPATH     8   SELECT pg_catalog.set_config('search_path', '', false);
                      false            �           1262    16578    fms    DATABASE     _   CREATE DATABASE fms WITH TEMPLATE = template0 ENCODING = 'UTF8' LOCALE = 'English_India.1252';
    DROP DATABASE fms;
                postgres    false            �            1259    16579    category    TABLE     m   CREATE TABLE public.category (
    category_id integer NOT NULL,
    category_name character varying(250)
);
    DROP TABLE public.category;
       public         heap    postgres    false            �            1259    16582    category_category_id_seq    SEQUENCE     �   CREATE SEQUENCE public.category_category_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 /   DROP SEQUENCE public.category_category_id_seq;
       public          postgres    false    200            �           0    0    category_category_id_seq    SEQUENCE OWNED BY     U   ALTER SEQUENCE public.category_category_id_seq OWNED BY public.category.category_id;
          public          postgres    false    201            �            1259    41392    districts_tn_list    TABLE     5  CREATE TABLE public.districts_tn_list (
    dis_id integer NOT NULL,
    district_name character varying(200),
    district_tamil_name character varying(200),
    district_short_code character varying(200),
    district_collector_email character varying(200),
    district_dio_email character varying(200)
);
 %   DROP TABLE public.districts_tn_list;
       public         heap    postgres    false            �            1259    41390    districts_tn_list_dis_id_seq    SEQUENCE     �   CREATE SEQUENCE public.districts_tn_list_dis_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 3   DROP SEQUENCE public.districts_tn_list_dis_id_seq;
       public          postgres    false    247            �           0    0    districts_tn_list_dis_id_seq    SEQUENCE OWNED BY     ]   ALTER SEQUENCE public.districts_tn_list_dis_id_seq OWNED BY public.districts_tn_list.dis_id;
          public          postgres    false    246            �            1259    41403    districts_tn_net_connections    TABLE     �  CREATE TABLE public.districts_tn_net_connections (
    con_id integer NOT NULL,
    district_code character varying(200),
    "net_Connection_Name" character varying(200),
    "net_Connection_Bandwidth" character varying(200),
    "net_Service_Provider" character varying(200),
    "net_Connection_Type" character varying(200),
    "net_WAN_IP" character varying(200),
    "net_Remark" character varying(200)
);
 0   DROP TABLE public.districts_tn_net_connections;
       public         heap    postgres    false            �            1259    41401 '   districts_tn_net_connections_con_id_seq    SEQUENCE     �   CREATE SEQUENCE public.districts_tn_net_connections_con_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 >   DROP SEQUENCE public.districts_tn_net_connections_con_id_seq;
       public          postgres    false    249            �           0    0 '   districts_tn_net_connections_con_id_seq    SEQUENCE OWNED BY     s   ALTER SEQUENCE public.districts_tn_net_connections_con_id_seq OWNED BY public.districts_tn_net_connections.con_id;
          public          postgres    false    248            �            1259    16584    fms_data    TABLE     �  CREATE TABLE public.fms_data (
    id integer NOT NULL,
    name character varying(500),
    category character varying(500),
    location character varying(500),
    voip_phone numeric(20,0),
    mobile_no numeric(20,0),
    email character varying(500),
    address character varying(500),
    doj date,
    wwd date,
    photo character varying(500),
    status numeric(10,0) DEFAULT 1
);
    DROP TABLE public.fms_data;
       public         heap    postgres    false            �           0    0    COLUMN fms_data.status    COMMENT     C   COMMENT ON COLUMN public.fms_data.status IS '1.Active
2.Inactive';
          public          postgres    false    202            �            1259    41414 
   fporf_data    TABLE     `   CREATE TABLE public.fporf_data (
    fporf_id integer NOT NULL,
    fporf_date date NOT NULL
);
    DROP TABLE public.fporf_data;
       public         heap    postgres    false            �            1259    41412    fporf_data_fporf_id_seq    SEQUENCE     �   CREATE SEQUENCE public.fporf_data_fporf_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 .   DROP SEQUENCE public.fporf_data_fporf_id_seq;
       public          postgres    false    251            �           0    0    fporf_data_fporf_id_seq    SEQUENCE OWNED BY     S   ALTER SEQUENCE public.fporf_data_fporf_id_seq OWNED BY public.fporf_data.fporf_id;
          public          postgres    false    250            �            1259    41422    fporf_request_data    TABLE     �   CREATE TABLE public.fporf_request_data (
    request_id integer NOT NULL,
    officer_name character varying(200) NOT NULL,
    user_dept character varying(200) NOT NULL,
    app_url_name character varying(200) NOT NULL,
    request_date date
);
 &   DROP TABLE public.fporf_request_data;
       public         heap    postgres    false            �            1259    41420 !   fporf_request_data_request_id_seq    SEQUENCE     �   CREATE SEQUENCE public.fporf_request_data_request_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 8   DROP SEQUENCE public.fporf_request_data_request_id_seq;
       public          postgres    false    253            �           0    0 !   fporf_request_data_request_id_seq    SEQUENCE OWNED BY     g   ALTER SEQUENCE public.fporf_request_data_request_id_seq OWNED BY public.fporf_request_data.request_id;
          public          postgres    false    252            �            1259    41431    fprof_ip_entry    TABLE     �  CREATE TABLE public.fprof_ip_entry (
    fporf_ip_id character varying(200) NOT NULL,
    source_ip character varying(200) NOT NULL,
    destination_ip character varying(200) NOT NULL,
    port_no numeric(200,0) NOT NULL,
    port_service character varying(200) NOT NULL,
    from_time character varying(200) NOT NULL,
    to_time character varying(200) NOT NULL,
    remarks character varying(200) NOT NULL,
    status character varying(200)
);
 "   DROP TABLE public.fprof_ip_entry;
       public         heap    postgres    false            �            1259    16591    incident_track    TABLE     �  CREATE TABLE public.incident_track (
    inc_id integer NOT NULL,
    inc_date timestamp(6) without time zone,
    inc_details character varying(500),
    inc_type character varying(200),
    inc_location character varying(200),
    inc_level character varying(200),
    inc_status character varying(200),
    inc_report_by character varying(300),
    inc_rec_status integer DEFAULT 1,
    remarks character varying(500)
);
 "   DROP TABLE public.incident_track;
       public         heap    postgres    false            �            1259    16598    incident_track_inc_id_seq    SEQUENCE     �   CREATE SEQUENCE public.incident_track_inc_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 0   DROP SEQUENCE public.incident_track_inc_id_seq;
       public          postgres    false    203            �           0    0    incident_track_inc_id_seq    SEQUENCE OWNED BY     W   ALTER SEQUENCE public.incident_track_inc_id_seq OWNED BY public.incident_track.inc_id;
          public          postgres    false    204            �            1259    16600    infra_status    TABLE     �   CREATE TABLE public.infra_status (
    infra_id integer NOT NULL,
    infra_details character varying(200),
    infra_status character varying
);
     DROP TABLE public.infra_status;
       public         heap    postgres    false            �            1259    16606    infra_status_infra_id_seq    SEQUENCE     �   CREATE SEQUENCE public.infra_status_infra_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 0   DROP SEQUENCE public.infra_status_infra_id_seq;
       public          postgres    false    205            �           0    0    infra_status_infra_id_seq    SEQUENCE OWNED BY     W   ALTER SEQUENCE public.infra_status_infra_id_seq OWNED BY public.infra_status.infra_id;
          public          postgres    false    206            �            1259    16608    location    TABLE     �   CREATE TABLE public.location (
    location_id integer NOT NULL,
    location_name character varying(200) NOT NULL,
    category_id numeric NOT NULL
);
    DROP TABLE public.location;
       public         heap    postgres    false            �            1259    16614    location_id_seq    SEQUENCE     �   CREATE SEQUENCE public.location_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 &   DROP SEQUENCE public.location_id_seq;
       public          postgres    false    207            �           0    0    location_id_seq    SEQUENCE OWNED BY     L   ALTER SEQUENCE public.location_id_seq OWNED BY public.location.location_id;
          public          postgres    false    208            �            1259    16616    mst_duty_shedule    TABLE     �  CREATE TABLE public.mst_duty_shedule (
    s_no integer NOT NULL,
    staff_id integer NOT NULL,
    day_01 character varying(100),
    day_02 character varying(100),
    day_03 character varying(100),
    day_04 character varying(100),
    day_05 character varying(100),
    day_06 character varying(100),
    day_07 character varying(100),
    day_08 character varying(100),
    day_09 character varying(100),
    day_10 character varying(100),
    day_11 character varying(100),
    day_12 character varying(100),
    day_13 character varying(100),
    day_14 character varying(100),
    day_15 character varying(100),
    day_16 character varying(100),
    day_17 character varying(100),
    day_18 character varying(100),
    day_19 character varying(100),
    day_20 character varying(100),
    day_21 character varying(100),
    day_22 character varying(100),
    day_23 character varying(100),
    day_24 character varying(100),
    day_25 character varying(100),
    day_26 character varying(100),
    day_27 character varying(100),
    day_28 character varying(100),
    day_29 character varying(100),
    day_30 character varying(100),
    day_31 character varying(100),
    month_id numeric(100,0),
    year numeric(100,0)
);
 $   DROP TABLE public.mst_duty_shedule;
       public         heap    postgres    false            �            1259    16622    mst_duty_shedule_s_no_seq    SEQUENCE     �   CREATE SEQUENCE public.mst_duty_shedule_s_no_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 0   DROP SEQUENCE public.mst_duty_shedule_s_no_seq;
       public          postgres    false    209            �           0    0    mst_duty_shedule_s_no_seq    SEQUENCE OWNED BY     W   ALTER SEQUENCE public.mst_duty_shedule_s_no_seq OWNED BY public.mst_duty_shedule.s_no;
          public          postgres    false    210            �            1259    16624    mst_duty_type    TABLE       CREATE TABLE public.mst_duty_type (
    duty_id integer NOT NULL,
    duty_code character varying(200) NOT NULL,
    duty_desc character varying(200),
    duty_timing character varying(200),
    duty_time_from time(6) without time zone,
    duty_time_to time without time zone
);
 !   DROP TABLE public.mst_duty_type;
       public         heap    postgres    false            �            1259    16630    mst_duty_type_duty_id_seq    SEQUENCE     �   CREATE SEQUENCE public.mst_duty_type_duty_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 0   DROP SEQUENCE public.mst_duty_type_duty_id_seq;
       public          postgres    false    211            �           0    0    mst_duty_type_duty_id_seq    SEQUENCE OWNED BY     W   ALTER SEQUENCE public.mst_duty_type_duty_id_seq OWNED BY public.mst_duty_type.duty_id;
          public          postgres    false    212            �            1259    16632    mst_fmsemployees    TABLE     �  CREATE TABLE public.mst_fmsemployees (
    staff_id integer NOT NULL,
    emp_id character varying(200) NOT NULL,
    staff_name character varying(250),
    staff_designation character varying(250),
    category character varying(250),
    location character varying(250),
    voip_phone numeric(250,0),
    mobile_no numeric(250,0),
    email character varying(200),
    address character varying(250),
    doj date,
    wwd date,
    photo character varying(500),
    status integer DEFAULT 1
);
 $   DROP TABLE public.mst_fmsemployees;
       public         heap    postgres    false            �            1259    16639    mst_fmsemployees_staff_id_seq    SEQUENCE     �   CREATE SEQUENCE public.mst_fmsemployees_staff_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 4   DROP SEQUENCE public.mst_fmsemployees_staff_id_seq;
       public          postgres    false    213            �           0    0    mst_fmsemployees_staff_id_seq    SEQUENCE OWNED BY     _   ALTER SEQUENCE public.mst_fmsemployees_staff_id_seq OWNED BY public.mst_fmsemployees.staff_id;
          public          postgres    false    214            �            1259    16764    mst_live_sites    TABLE     k   CREATE TABLE public.mst_live_sites (
    site_id integer NOT NULL,
    site_name character varying(500)
);
 "   DROP TABLE public.mst_live_sites;
       public         heap    postgres    false            �            1259    16762    mst_live_sites_site_id_seq    SEQUENCE     �   CREATE SEQUENCE public.mst_live_sites_site_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 1   DROP SEQUENCE public.mst_live_sites_site_id_seq;
       public          postgres    false    231                        0    0    mst_live_sites_site_id_seq    SEQUENCE OWNED BY     Y   ALTER SEQUENCE public.mst_live_sites_site_id_seq OWNED BY public.mst_live_sites.site_id;
          public          postgres    false    230            �            1259    16641 	   mst_month    TABLE     h   CREATE TABLE public.mst_month (
    month_id integer NOT NULL,
    month_name character varying(200)
);
    DROP TABLE public.mst_month;
       public         heap    postgres    false            �            1259    16644    mst_month_month_id_seq    SEQUENCE     �   CREATE SEQUENCE public.mst_month_month_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 -   DROP SEQUENCE public.mst_month_month_id_seq;
       public          postgres    false    215                       0    0    mst_month_month_id_seq    SEQUENCE OWNED BY     Q   ALTER SEQUENCE public.mst_month_month_id_seq OWNED BY public.mst_month.month_id;
          public          postgres    false    216            �            1259    16770    mst_os_templates    TABLE     �   CREATE TABLE public.mst_os_templates (
    os_cate character varying(500),
    os_distribution character varying(1000),
    os_temp_name character varying(500),
    os_release_date date
);
 $   DROP TABLE public.mst_os_templates;
       public         heap    postgres    false            �            1259    16646    mst_sec_duty_type    TABLE       CREATE TABLE public.mst_sec_duty_type (
    duty_id integer NOT NULL,
    duty_code character varying(200),
    duty_desc character varying(200),
    duty_timing character varying(200),
    duty_time_from time(6) with time zone,
    duty_time_to time(6) with time zone
);
 %   DROP TABLE public.mst_sec_duty_type;
       public         heap    postgres    false            �            1259    16652    mst_sec_duty_type_duty_id_seq    SEQUENCE     �   CREATE SEQUENCE public.mst_sec_duty_type_duty_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 4   DROP SEQUENCE public.mst_sec_duty_type_duty_id_seq;
       public          postgres    false    217                       0    0    mst_sec_duty_type_duty_id_seq    SEQUENCE OWNED BY     _   ALTER SEQUENCE public.mst_sec_duty_type_duty_id_seq OWNED BY public.mst_sec_duty_type.duty_id;
          public          postgres    false    218            �            1259    16654    mst_secu_schedule    TABLE     �  CREATE TABLE public.mst_secu_schedule (
    schedule_id integer NOT NULL,
    staff_id integer,
    day_01 character varying(50),
    day_02 character varying(50),
    day_03 character varying(50),
    day_04 character varying(50),
    day_05 character varying(50),
    day_06 character varying(50),
    day_07 character varying(50),
    day_08 character varying(50),
    day_09 character varying(50),
    day_10 character varying(50),
    day_11 character varying(50),
    day_12 character varying(50),
    day_13 character varying(50),
    day_14 character varying(50),
    day_15 character varying(50),
    day_16 character varying(50),
    day_17 character varying(50),
    day_18 character varying(50),
    day_19 character varying(50),
    day_20 character varying(50),
    day_21 character varying(50),
    day_22 character varying(50),
    day_23 character varying(50),
    day_24 character varying(50),
    day_25 character varying(50),
    day_26 character varying(50),
    day_27 character varying(50),
    day_28 character varying(50),
    day_29 character varying(50),
    day_30 character varying(50),
    day_31 character varying(50),
    month_id integer,
    year integer
);
 %   DROP TABLE public.mst_secu_schedule;
       public         heap    postgres    false            �            1259    16660 !   mst_secu_schedule_schedule_id_seq    SEQUENCE     �   CREATE SEQUENCE public.mst_secu_schedule_schedule_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 8   DROP SEQUENCE public.mst_secu_schedule_schedule_id_seq;
       public          postgres    false    219                       0    0 !   mst_secu_schedule_schedule_id_seq    SEQUENCE OWNED BY     g   ALTER SEQUENCE public.mst_secu_schedule_schedule_id_seq OWNED BY public.mst_secu_schedule.schedule_id;
          public          postgres    false    220            �            1259    16662    mst_server_loc    TABLE       CREATE TABLE public.mst_server_loc (
    loca_id integer NOT NULL,
    loca_name character varying(300),
    loca_code character varying(300),
    loca_building character varying(300),
    loca_address character varying(300),
    city character varying(300)
);
 "   DROP TABLE public.mst_server_loc;
       public         heap    postgres    false            �            1259    16668    mst_server_loc_loca_id_seq    SEQUENCE     �   CREATE SEQUENCE public.mst_server_loc_loca_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 1   DROP SEQUENCE public.mst_server_loc_loca_id_seq;
       public          postgres    false    221                       0    0    mst_server_loc_loca_id_seq    SEQUENCE OWNED BY     Y   ALTER SEQUENCE public.mst_server_loc_loca_id_seq OWNED BY public.mst_server_loc.loca_id;
          public          postgres    false    222            �            1259    16670    mst_support    TABLE     �   CREATE TABLE public.mst_support (
    sup_id integer NOT NULL,
    sup_name character varying(200),
    sup_category character varying(200),
    sup_email character varying(200),
    sup_phone numeric(50,0),
    sup_ip_phone character varying(200)
);
    DROP TABLE public.mst_support;
       public         heap    postgres    false            �            1259    16676    mst_support_sup_id_seq    SEQUENCE     �   CREATE SEQUENCE public.mst_support_sup_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 -   DROP SEQUENCE public.mst_support_sup_id_seq;
       public          postgres    false    223                       0    0    mst_support_sup_id_seq    SEQUENCE OWNED BY     Q   ALTER SEQUENCE public.mst_support_sup_id_seq OWNED BY public.mst_support.sup_id;
          public          postgres    false    224            �            1259    16778 	   mst_users    TABLE     �  CREATE TABLE public.mst_users (
    user_id integer NOT NULL,
    u_name character varying(500),
    user_depart character varying(500),
    user_category character varying(500),
    app_details character varying(500),
    app_url character varying(500),
    app_status character varying(500),
    no_of_vm integer,
    no_of_db integer,
    co_name character varying(500),
    co_email character varying(500),
    co_phone numeric(20,0),
    co_ip_phone numeric(20,0)
);
    DROP TABLE public.mst_users;
       public         heap    postgres    false            �            1259    16776    mst_users_user_id_seq    SEQUENCE     �   CREATE SEQUENCE public.mst_users_user_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 ,   DROP SEQUENCE public.mst_users_user_id_seq;
       public          postgres    false    234                       0    0    mst_users_user_id_seq    SEQUENCE OWNED BY     O   ALTER SEQUENCE public.mst_users_user_id_seq OWNED BY public.mst_users.user_id;
          public          postgres    false    233            �            1259    33199    net_link_status_dept    TABLE     �   CREATE TABLE public.net_link_status_dept (
    dept_link_id integer NOT NULL,
    dept_name character varying(200),
    net_bandwidth character varying(200),
    net_wan_ip character varying(200),
    net_status character varying(200)
);
 (   DROP TABLE public.net_link_status_dept;
       public         heap    postgres    false            �            1259    33197 %   net_link_status_dept_dept_link_id_seq    SEQUENCE     �   CREATE SEQUENCE public.net_link_status_dept_dept_link_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 <   DROP SEQUENCE public.net_link_status_dept_dept_link_id_seq;
       public          postgres    false    245                       0    0 %   net_link_status_dept_dept_link_id_seq    SEQUENCE OWNED BY     o   ALTER SEQUENCE public.net_link_status_dept_dept_link_id_seq OWNED BY public.net_link_status_dept.dept_link_id;
          public          postgres    false    244            �            1259    33188    net_link_status_dist    TABLE       CREATE TABLE public.net_link_status_dist (
    dist_link_id integer NOT NULL,
    district_name character varying(200),
    net_bandwidth character varying(200),
    net_provider character varying(200),
    net_wan_ip character varying(200),
    net_status character varying(200)
);
 (   DROP TABLE public.net_link_status_dist;
       public         heap    postgres    false            �            1259    33186 %   net_link_status_dist_dist_link_id_seq    SEQUENCE     �   CREATE SEQUENCE public.net_link_status_dist_dist_link_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 <   DROP SEQUENCE public.net_link_status_dist_dist_link_id_seq;
       public          postgres    false    243                       0    0 %   net_link_status_dist_dist_link_id_seq    SEQUENCE OWNED BY     o   ALTER SEQUENCE public.net_link_status_dist_dist_link_id_seq OWNED BY public.net_link_status_dist.dist_link_id;
          public          postgres    false    242            �            1259    33177    net_segment_163_19    TABLE     �  CREATE TABLE public.net_segment_163_19 (
    ip_id integer NOT NULL,
    ip_addr character varying(200),
    nic_location character varying(200),
    room_cabin_no character varying(200),
    officer_name character varying(200),
    user_name character varying(200),
    os_details character varying(200),
    av_status character varying(200),
    ping_status character varying(200)
);
 &   DROP TABLE public.net_segment_163_19;
       public         heap    postgres    false            �            1259    33175    net_segment_163_19_ip_id_seq    SEQUENCE     �   CREATE SEQUENCE public.net_segment_163_19_ip_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 3   DROP SEQUENCE public.net_segment_163_19_ip_id_seq;
       public          postgres    false    241            	           0    0    net_segment_163_19_ip_id_seq    SEQUENCE OWNED BY     ]   ALTER SEQUENCE public.net_segment_163_19_ip_id_seq OWNED BY public.net_segment_163_19.ip_id;
          public          postgres    false    240            �            1259    33166    net_segment_163_2    TABLE     �  CREATE TABLE public.net_segment_163_2 (
    ip_id integer NOT NULL,
    ip_addr character varying(200),
    nic_location character varying(200),
    room_cabin_no character varying(200),
    officer_name character varying(200),
    user_name character varying(200),
    os_details character varying(200),
    av_status character varying(200),
    ping_status character varying(200)
);
 %   DROP TABLE public.net_segment_163_2;
       public         heap    postgres    false            �            1259    33164    net_segment_163_2_ip_id_seq    SEQUENCE     �   CREATE SEQUENCE public.net_segment_163_2_ip_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 2   DROP SEQUENCE public.net_segment_163_2_ip_id_seq;
       public          postgres    false    239            
           0    0    net_segment_163_2_ip_id_seq    SEQUENCE OWNED BY     [   ALTER SEQUENCE public.net_segment_163_2_ip_id_seq OWNED BY public.net_segment_163_2.ip_id;
          public          postgres    false    238            �            1259    24956    nic_tnsc_contact    TABLE     �  CREATE TABLE public.nic_tnsc_contact (
    staff_id integer NOT NULL,
    staff_name character varying(200),
    short_code character varying(200),
    designation character varying(200),
    staff_email character varying(200),
    mobile_phone numeric(100,0),
    ip_phone numeric(100,0),
    emp_code numeric(100,0),
    location character varying(100),
    status integer DEFAULT 1
);
 $   DROP TABLE public.nic_tnsc_contact;
       public         heap    postgres    false            �            1259    24954    nic_tnsc_contact_staff_id_seq    SEQUENCE     �   CREATE SEQUENCE public.nic_tnsc_contact_staff_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 4   DROP SEQUENCE public.nic_tnsc_contact_staff_id_seq;
       public          postgres    false    236                       0    0    nic_tnsc_contact_staff_id_seq    SEQUENCE OWNED BY     _   ALTER SEQUENCE public.nic_tnsc_contact_staff_id_seq OWNED BY public.nic_tnsc_contact.staff_id;
          public          postgres    false    235            �            1259    16694 	   room_temp    TABLE     4  CREATE TABLE public.room_temp (
    room_id integer NOT NULL,
    room_loca_code character varying(200),
    room_temperature real,
    ac1 character varying,
    ac1_temp character varying(100),
    ac2 character varying(100),
    ac2_temp character varying(100),
    date_time time(6) without time zone
);
    DROP TABLE public.room_temp;
       public         heap    postgres    false            �            1259    16700    room_temp_room_id_seq    SEQUENCE     �   CREATE SEQUENCE public.room_temp_room_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 ,   DROP SEQUENCE public.room_temp_room_id_seq;
       public          postgres    false    225                       0    0    room_temp_room_id_seq    SEQUENCE OWNED BY     O   ALTER SEQUENCE public.room_temp_room_id_seq OWNED BY public.room_temp.room_id;
          public          postgres    false    226            �            1259    33146    sample    TABLE         CREATE TABLE public.sample (
);
    DROP TABLE public.sample;
       public         heap    postgres    false            �            1259    16702    ssss_id_seq    SEQUENCE     �   CREATE SEQUENCE public.ssss_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 "   DROP SEQUENCE public.ssss_id_seq;
       public          postgres    false    202                       0    0    ssss_id_seq    SEQUENCE OWNED BY     ?   ALTER SEQUENCE public.ssss_id_seq OWNED BY public.fms_data.id;
          public          postgres    false    227            �            1259    16704 	   user_info    TABLE     �   CREATE TABLE public.user_info (
    user_id integer NOT NULL,
    user_name character varying(200),
    passwd character varying(500),
    user_role integer
);
    DROP TABLE public.user_info;
       public         heap    postgres    false            �            1259    16710    user_info_user_id_seq    SEQUENCE     �   CREATE SEQUENCE public.user_info_user_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 ,   DROP SEQUENCE public.user_info_user_id_seq;
       public          postgres    false    228                       0    0    user_info_user_id_seq    SEQUENCE OWNED BY     O   ALTER SEQUENCE public.user_info_user_id_seq OWNED BY public.user_info.user_id;
          public          postgres    false    229                        1259    65977    website_status    TABLE     f  CREATE TABLE public.website_status (
    site_id integer NOT NULL,
    site_title character varying(200),
    govt_category character varying(200),
    hosted_platform character varying(200),
    hosted_datacenter character varying(200),
    ip_address character varying(200),
    nic_officer_email character varying(300),
    nic_hod_email character varying(300),
    site_url character varying(300),
    date_last_updated character varying(300),
    site_developed_by character varying(200),
    site_status character varying(200),
    site_check_frequency integer,
    user_dept_email character varying(200)
);
 "   DROP TABLE public.website_status;
       public         heap    postgres    false            �            1259    65975    website_status_site_id_seq    SEQUENCE     �   CREATE SEQUENCE public.website_status_site_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 1   DROP SEQUENCE public.website_status_site_id_seq;
       public          postgres    false    256                       0    0    website_status_site_id_seq    SEQUENCE OWNED BY     Y   ALTER SEQUENCE public.website_status_site_id_seq OWNED BY public.website_status.site_id;
          public          postgres    false    255            �           2604    16712    category category_id    DEFAULT     |   ALTER TABLE ONLY public.category ALTER COLUMN category_id SET DEFAULT nextval('public.category_category_id_seq'::regclass);
 C   ALTER TABLE public.category ALTER COLUMN category_id DROP DEFAULT;
       public          postgres    false    201    200            �           2604    41395    districts_tn_list dis_id    DEFAULT     �   ALTER TABLE ONLY public.districts_tn_list ALTER COLUMN dis_id SET DEFAULT nextval('public.districts_tn_list_dis_id_seq'::regclass);
 G   ALTER TABLE public.districts_tn_list ALTER COLUMN dis_id DROP DEFAULT;
       public          postgres    false    246    247    247            �           2604    41406 #   districts_tn_net_connections con_id    DEFAULT     �   ALTER TABLE ONLY public.districts_tn_net_connections ALTER COLUMN con_id SET DEFAULT nextval('public.districts_tn_net_connections_con_id_seq'::regclass);
 R   ALTER TABLE public.districts_tn_net_connections ALTER COLUMN con_id DROP DEFAULT;
       public          postgres    false    249    248    249            �           2604    16713    fms_data id    DEFAULT     f   ALTER TABLE ONLY public.fms_data ALTER COLUMN id SET DEFAULT nextval('public.ssss_id_seq'::regclass);
 :   ALTER TABLE public.fms_data ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    227    202            �           2604    41417    fporf_data fporf_id    DEFAULT     z   ALTER TABLE ONLY public.fporf_data ALTER COLUMN fporf_id SET DEFAULT nextval('public.fporf_data_fporf_id_seq'::regclass);
 B   ALTER TABLE public.fporf_data ALTER COLUMN fporf_id DROP DEFAULT;
       public          postgres    false    250    251    251            �           2604    16714    incident_track inc_id    DEFAULT     ~   ALTER TABLE ONLY public.incident_track ALTER COLUMN inc_id SET DEFAULT nextval('public.incident_track_inc_id_seq'::regclass);
 D   ALTER TABLE public.incident_track ALTER COLUMN inc_id DROP DEFAULT;
       public          postgres    false    204    203            �           2604    16715    infra_status infra_id    DEFAULT     ~   ALTER TABLE ONLY public.infra_status ALTER COLUMN infra_id SET DEFAULT nextval('public.infra_status_infra_id_seq'::regclass);
 D   ALTER TABLE public.infra_status ALTER COLUMN infra_id DROP DEFAULT;
       public          postgres    false    206    205            �           2604    16716    location location_id    DEFAULT     s   ALTER TABLE ONLY public.location ALTER COLUMN location_id SET DEFAULT nextval('public.location_id_seq'::regclass);
 C   ALTER TABLE public.location ALTER COLUMN location_id DROP DEFAULT;
       public          postgres    false    208    207            �           2604    16717    mst_duty_shedule s_no    DEFAULT     ~   ALTER TABLE ONLY public.mst_duty_shedule ALTER COLUMN s_no SET DEFAULT nextval('public.mst_duty_shedule_s_no_seq'::regclass);
 D   ALTER TABLE public.mst_duty_shedule ALTER COLUMN s_no DROP DEFAULT;
       public          postgres    false    210    209            �           2604    16718    mst_duty_type duty_id    DEFAULT     ~   ALTER TABLE ONLY public.mst_duty_type ALTER COLUMN duty_id SET DEFAULT nextval('public.mst_duty_type_duty_id_seq'::regclass);
 D   ALTER TABLE public.mst_duty_type ALTER COLUMN duty_id DROP DEFAULT;
       public          postgres    false    212    211            �           2604    16719    mst_fmsemployees staff_id    DEFAULT     �   ALTER TABLE ONLY public.mst_fmsemployees ALTER COLUMN staff_id SET DEFAULT nextval('public.mst_fmsemployees_staff_id_seq'::regclass);
 H   ALTER TABLE public.mst_fmsemployees ALTER COLUMN staff_id DROP DEFAULT;
       public          postgres    false    214    213            �           2604    16767    mst_live_sites site_id    DEFAULT     �   ALTER TABLE ONLY public.mst_live_sites ALTER COLUMN site_id SET DEFAULT nextval('public.mst_live_sites_site_id_seq'::regclass);
 E   ALTER TABLE public.mst_live_sites ALTER COLUMN site_id DROP DEFAULT;
       public          postgres    false    230    231    231            �           2604    16720    mst_month month_id    DEFAULT     x   ALTER TABLE ONLY public.mst_month ALTER COLUMN month_id SET DEFAULT nextval('public.mst_month_month_id_seq'::regclass);
 A   ALTER TABLE public.mst_month ALTER COLUMN month_id DROP DEFAULT;
       public          postgres    false    216    215            �           2604    16721    mst_sec_duty_type duty_id    DEFAULT     �   ALTER TABLE ONLY public.mst_sec_duty_type ALTER COLUMN duty_id SET DEFAULT nextval('public.mst_sec_duty_type_duty_id_seq'::regclass);
 H   ALTER TABLE public.mst_sec_duty_type ALTER COLUMN duty_id DROP DEFAULT;
       public          postgres    false    218    217            �           2604    16722    mst_secu_schedule schedule_id    DEFAULT     �   ALTER TABLE ONLY public.mst_secu_schedule ALTER COLUMN schedule_id SET DEFAULT nextval('public.mst_secu_schedule_schedule_id_seq'::regclass);
 L   ALTER TABLE public.mst_secu_schedule ALTER COLUMN schedule_id DROP DEFAULT;
       public          postgres    false    220    219            �           2604    16723    mst_server_loc loca_id    DEFAULT     �   ALTER TABLE ONLY public.mst_server_loc ALTER COLUMN loca_id SET DEFAULT nextval('public.mst_server_loc_loca_id_seq'::regclass);
 E   ALTER TABLE public.mst_server_loc ALTER COLUMN loca_id DROP DEFAULT;
       public          postgres    false    222    221            �           2604    16724    mst_support sup_id    DEFAULT     x   ALTER TABLE ONLY public.mst_support ALTER COLUMN sup_id SET DEFAULT nextval('public.mst_support_sup_id_seq'::regclass);
 A   ALTER TABLE public.mst_support ALTER COLUMN sup_id DROP DEFAULT;
       public          postgres    false    224    223            �           2604    16781    mst_users user_id    DEFAULT     v   ALTER TABLE ONLY public.mst_users ALTER COLUMN user_id SET DEFAULT nextval('public.mst_users_user_id_seq'::regclass);
 @   ALTER TABLE public.mst_users ALTER COLUMN user_id DROP DEFAULT;
       public          postgres    false    234    233    234            �           2604    33202 !   net_link_status_dept dept_link_id    DEFAULT     �   ALTER TABLE ONLY public.net_link_status_dept ALTER COLUMN dept_link_id SET DEFAULT nextval('public.net_link_status_dept_dept_link_id_seq'::regclass);
 P   ALTER TABLE public.net_link_status_dept ALTER COLUMN dept_link_id DROP DEFAULT;
       public          postgres    false    245    244    245            �           2604    33191 !   net_link_status_dist dist_link_id    DEFAULT     �   ALTER TABLE ONLY public.net_link_status_dist ALTER COLUMN dist_link_id SET DEFAULT nextval('public.net_link_status_dist_dist_link_id_seq'::regclass);
 P   ALTER TABLE public.net_link_status_dist ALTER COLUMN dist_link_id DROP DEFAULT;
       public          postgres    false    243    242    243            �           2604    33180    net_segment_163_19 ip_id    DEFAULT     �   ALTER TABLE ONLY public.net_segment_163_19 ALTER COLUMN ip_id SET DEFAULT nextval('public.net_segment_163_19_ip_id_seq'::regclass);
 G   ALTER TABLE public.net_segment_163_19 ALTER COLUMN ip_id DROP DEFAULT;
       public          postgres    false    241    240    241            �           2604    33169    net_segment_163_2 ip_id    DEFAULT     �   ALTER TABLE ONLY public.net_segment_163_2 ALTER COLUMN ip_id SET DEFAULT nextval('public.net_segment_163_2_ip_id_seq'::regclass);
 F   ALTER TABLE public.net_segment_163_2 ALTER COLUMN ip_id DROP DEFAULT;
       public          postgres    false    238    239    239            �           2604    24959    nic_tnsc_contact staff_id    DEFAULT     �   ALTER TABLE ONLY public.nic_tnsc_contact ALTER COLUMN staff_id SET DEFAULT nextval('public.nic_tnsc_contact_staff_id_seq'::regclass);
 H   ALTER TABLE public.nic_tnsc_contact ALTER COLUMN staff_id DROP DEFAULT;
       public          postgres    false    235    236    236            �           2604    16727    room_temp room_id    DEFAULT     v   ALTER TABLE ONLY public.room_temp ALTER COLUMN room_id SET DEFAULT nextval('public.room_temp_room_id_seq'::regclass);
 @   ALTER TABLE public.room_temp ALTER COLUMN room_id DROP DEFAULT;
       public          postgres    false    226    225            �           2604    16728    user_info user_id    DEFAULT     v   ALTER TABLE ONLY public.user_info ALTER COLUMN user_id SET DEFAULT nextval('public.user_info_user_id_seq'::regclass);
 @   ALTER TABLE public.user_info ALTER COLUMN user_id DROP DEFAULT;
       public          postgres    false    229    228                        2604    65980    website_status site_id    DEFAULT     �   ALTER TABLE ONLY public.website_status ALTER COLUMN site_id SET DEFAULT nextval('public.website_status_site_id_seq'::regclass);
 E   ALTER TABLE public.website_status ALTER COLUMN site_id DROP DEFAULT;
       public          postgres    false    255    256    256            �          0    16579    category 
   TABLE DATA           >   COPY public.category (category_id, category_name) FROM stdin;
    public          postgres    false    200   �       �          0    41392    districts_tn_list 
   TABLE DATA           �   COPY public.districts_tn_list (dis_id, district_name, district_tamil_name, district_short_code, district_collector_email, district_dio_email) FROM stdin;
    public          postgres    false    247   �       �          0    41403    districts_tn_net_connections 
   TABLE DATA           �   COPY public.districts_tn_net_connections (con_id, district_code, "net_Connection_Name", "net_Connection_Bandwidth", "net_Service_Provider", "net_Connection_Type", "net_WAN_IP", "net_Remark") FROM stdin;
    public          postgres    false    249   e      �          0    16584    fms_data 
   TABLE DATA           �   COPY public.fms_data (id, name, category, location, voip_phone, mobile_no, email, address, doj, wwd, photo, status) FROM stdin;
    public          postgres    false    202   �      �          0    41414 
   fporf_data 
   TABLE DATA           :   COPY public.fporf_data (fporf_id, fporf_date) FROM stdin;
    public          postgres    false    251   v	      �          0    41422    fporf_request_data 
   TABLE DATA           m   COPY public.fporf_request_data (request_id, officer_name, user_dept, app_url_name, request_date) FROM stdin;
    public          postgres    false    253   �	      �          0    41431    fprof_ip_entry 
   TABLE DATA           �   COPY public.fprof_ip_entry (fporf_ip_id, source_ip, destination_ip, port_no, port_service, from_time, to_time, remarks, status) FROM stdin;
    public          postgres    false    254         �          0    16591    incident_track 
   TABLE DATA           �   COPY public.incident_track (inc_id, inc_date, inc_details, inc_type, inc_location, inc_level, inc_status, inc_report_by, inc_rec_status, remarks) FROM stdin;
    public          postgres    false    203   �      �          0    16600    infra_status 
   TABLE DATA           M   COPY public.infra_status (infra_id, infra_details, infra_status) FROM stdin;
    public          postgres    false    205   �      �          0    16608    location 
   TABLE DATA           K   COPY public.location (location_id, location_name, category_id) FROM stdin;
    public          postgres    false    207   �      �          0    16616    mst_duty_shedule 
   TABLE DATA           B  COPY public.mst_duty_shedule (s_no, staff_id, day_01, day_02, day_03, day_04, day_05, day_06, day_07, day_08, day_09, day_10, day_11, day_12, day_13, day_14, day_15, day_16, day_17, day_18, day_19, day_20, day_21, day_22, day_23, day_24, day_25, day_26, day_27, day_28, day_29, day_30, day_31, month_id, year) FROM stdin;
    public          postgres    false    209   4      �          0    16624    mst_duty_type 
   TABLE DATA           q   COPY public.mst_duty_type (duty_id, duty_code, duty_desc, duty_timing, duty_time_from, duty_time_to) FROM stdin;
    public          postgres    false    211   �      �          0    16632    mst_fmsemployees 
   TABLE DATA           �   COPY public.mst_fmsemployees (staff_id, emp_id, staff_name, staff_designation, category, location, voip_phone, mobile_no, email, address, doj, wwd, photo, status) FROM stdin;
    public          postgres    false    213   [      �          0    16764    mst_live_sites 
   TABLE DATA           <   COPY public.mst_live_sites (site_id, site_name) FROM stdin;
    public          postgres    false    231   �      �          0    16641 	   mst_month 
   TABLE DATA           9   COPY public.mst_month (month_id, month_name) FROM stdin;
    public          postgres    false    215   @      �          0    16770    mst_os_templates 
   TABLE DATA           c   COPY public.mst_os_templates (os_cate, os_distribution, os_temp_name, os_release_date) FROM stdin;
    public          postgres    false    232   �      �          0    16646    mst_sec_duty_type 
   TABLE DATA           u   COPY public.mst_sec_duty_type (duty_id, duty_code, duty_desc, duty_timing, duty_time_from, duty_time_to) FROM stdin;
    public          postgres    false    217   �      �          0    16654    mst_secu_schedule 
   TABLE DATA           J  COPY public.mst_secu_schedule (schedule_id, staff_id, day_01, day_02, day_03, day_04, day_05, day_06, day_07, day_08, day_09, day_10, day_11, day_12, day_13, day_14, day_15, day_16, day_17, day_18, day_19, day_20, day_21, day_22, day_23, day_24, day_25, day_26, day_27, day_28, day_29, day_30, day_31, month_id, year) FROM stdin;
    public          postgres    false    219   p      �          0    16662    mst_server_loc 
   TABLE DATA           j   COPY public.mst_server_loc (loca_id, loca_name, loca_code, loca_building, loca_address, city) FROM stdin;
    public          postgres    false    221   i      �          0    16670    mst_support 
   TABLE DATA           i   COPY public.mst_support (sup_id, sup_name, sup_category, sup_email, sup_phone, sup_ip_phone) FROM stdin;
    public          postgres    false    223   �      �          0    16778 	   mst_users 
   TABLE DATA           �   COPY public.mst_users (user_id, u_name, user_depart, user_category, app_details, app_url, app_status, no_of_vm, no_of_db, co_name, co_email, co_phone, co_ip_phone) FROM stdin;
    public          postgres    false    234         �          0    33199    net_link_status_dept 
   TABLE DATA           n   COPY public.net_link_status_dept (dept_link_id, dept_name, net_bandwidth, net_wan_ip, net_status) FROM stdin;
    public          postgres    false    245   =      �          0    33188    net_link_status_dist 
   TABLE DATA           �   COPY public.net_link_status_dist (dist_link_id, district_name, net_bandwidth, net_provider, net_wan_ip, net_status) FROM stdin;
    public          postgres    false    243   J      �          0    33177    net_segment_163_19 
   TABLE DATA           �   COPY public.net_segment_163_19 (ip_id, ip_addr, nic_location, room_cabin_no, officer_name, user_name, os_details, av_status, ping_status) FROM stdin;
    public          postgres    false    241   k      �          0    33166    net_segment_163_2 
   TABLE DATA           �   COPY public.net_segment_163_2 (ip_id, ip_addr, nic_location, room_cabin_no, officer_name, user_name, os_details, av_status, ping_status) FROM stdin;
    public          postgres    false    239   n'      �          0    24956    nic_tnsc_contact 
   TABLE DATA           �   COPY public.nic_tnsc_contact (staff_id, staff_name, short_code, designation, staff_email, mobile_phone, ip_phone, emp_code, location, status) FROM stdin;
    public          postgres    false    236   �2      �          0    16694 	   room_temp 
   TABLE DATA           w   COPY public.room_temp (room_id, room_loca_code, room_temperature, ac1, ac1_temp, ac2, ac2_temp, date_time) FROM stdin;
    public          postgres    false    225   �C      �          0    33146    sample 
   TABLE DATA               COPY public.sample  FROM stdin;
    public          postgres    false    237   D      �          0    16704 	   user_info 
   TABLE DATA           J   COPY public.user_info (user_id, user_name, passwd, user_role) FROM stdin;
    public          postgres    false    228    D      �          0    65977    website_status 
   TABLE DATA             COPY public.website_status (site_id, site_title, govt_category, hosted_platform, hosted_datacenter, ip_address, nic_officer_email, nic_hod_email, site_url, date_last_updated, site_developed_by, site_status, site_check_frequency, user_dept_email) FROM stdin;
    public          postgres    false    256   XD                 0    0    category_category_id_seq    SEQUENCE SET     G   SELECT pg_catalog.setval('public.category_category_id_seq', 1, false);
          public          postgres    false    201                       0    0    districts_tn_list_dis_id_seq    SEQUENCE SET     K   SELECT pg_catalog.setval('public.districts_tn_list_dis_id_seq', 1, false);
          public          postgres    false    246                       0    0 '   districts_tn_net_connections_con_id_seq    SEQUENCE SET     V   SELECT pg_catalog.setval('public.districts_tn_net_connections_con_id_seq', 1, false);
          public          postgres    false    248                       0    0    fporf_data_fporf_id_seq    SEQUENCE SET     G   SELECT pg_catalog.setval('public.fporf_data_fporf_id_seq', 116, true);
          public          postgres    false    250                       0    0 !   fporf_request_data_request_id_seq    SEQUENCE SET     P   SELECT pg_catalog.setval('public.fporf_request_data_request_id_seq', 1, false);
          public          postgres    false    252                       0    0    incident_track_inc_id_seq    SEQUENCE SET     H   SELECT pg_catalog.setval('public.incident_track_inc_id_seq', 53, true);
          public          postgres    false    204                       0    0    infra_status_infra_id_seq    SEQUENCE SET     H   SELECT pg_catalog.setval('public.infra_status_infra_id_seq', 1, false);
          public          postgres    false    206                       0    0    location_id_seq    SEQUENCE SET     =   SELECT pg_catalog.setval('public.location_id_seq', 6, true);
          public          postgres    false    208                       0    0    mst_duty_shedule_s_no_seq    SEQUENCE SET     G   SELECT pg_catalog.setval('public.mst_duty_shedule_s_no_seq', 2, true);
          public          postgres    false    210                       0    0    mst_duty_type_duty_id_seq    SEQUENCE SET     H   SELECT pg_catalog.setval('public.mst_duty_type_duty_id_seq', 1, false);
          public          postgres    false    212                       0    0    mst_fmsemployees_staff_id_seq    SEQUENCE SET     L   SELECT pg_catalog.setval('public.mst_fmsemployees_staff_id_seq', 16, true);
          public          postgres    false    214                       0    0    mst_live_sites_site_id_seq    SEQUENCE SET     I   SELECT pg_catalog.setval('public.mst_live_sites_site_id_seq', 1, false);
          public          postgres    false    230                       0    0    mst_month_month_id_seq    SEQUENCE SET     E   SELECT pg_catalog.setval('public.mst_month_month_id_seq', 1, false);
          public          postgres    false    216                       0    0    mst_sec_duty_type_duty_id_seq    SEQUENCE SET     L   SELECT pg_catalog.setval('public.mst_sec_duty_type_duty_id_seq', 1, false);
          public          postgres    false    218                       0    0 !   mst_secu_schedule_schedule_id_seq    SEQUENCE SET     P   SELECT pg_catalog.setval('public.mst_secu_schedule_schedule_id_seq', 1, false);
          public          postgres    false    220                       0    0    mst_server_loc_loca_id_seq    SEQUENCE SET     I   SELECT pg_catalog.setval('public.mst_server_loc_loca_id_seq', 1, false);
          public          postgres    false    222                        0    0    mst_support_sup_id_seq    SEQUENCE SET     E   SELECT pg_catalog.setval('public.mst_support_sup_id_seq', 1, false);
          public          postgres    false    224            !           0    0    mst_users_user_id_seq    SEQUENCE SET     C   SELECT pg_catalog.setval('public.mst_users_user_id_seq', 6, true);
          public          postgres    false    233            "           0    0 %   net_link_status_dept_dept_link_id_seq    SEQUENCE SET     T   SELECT pg_catalog.setval('public.net_link_status_dept_dept_link_id_seq', 1, false);
          public          postgres    false    244            #           0    0 %   net_link_status_dist_dist_link_id_seq    SEQUENCE SET     T   SELECT pg_catalog.setval('public.net_link_status_dist_dist_link_id_seq', 1, false);
          public          postgres    false    242            $           0    0    net_segment_163_19_ip_id_seq    SEQUENCE SET     K   SELECT pg_catalog.setval('public.net_segment_163_19_ip_id_seq', 1, false);
          public          postgres    false    240            %           0    0    net_segment_163_2_ip_id_seq    SEQUENCE SET     J   SELECT pg_catalog.setval('public.net_segment_163_2_ip_id_seq', 1, false);
          public          postgres    false    238            &           0    0    nic_tnsc_contact_staff_id_seq    SEQUENCE SET     M   SELECT pg_catalog.setval('public.nic_tnsc_contact_staff_id_seq', 141, true);
          public          postgres    false    235            '           0    0    room_temp_room_id_seq    SEQUENCE SET     C   SELECT pg_catalog.setval('public.room_temp_room_id_seq', 5, true);
          public          postgres    false    226            (           0    0    ssss_id_seq    SEQUENCE SET     :   SELECT pg_catalog.setval('public.ssss_id_seq', 44, true);
          public          postgres    false    227            )           0    0    user_info_user_id_seq    SEQUENCE SET     D   SELECT pg_catalog.setval('public.user_info_user_id_seq', 1, false);
          public          postgres    false    229            *           0    0    website_status_site_id_seq    SEQUENCE SET     J   SELECT pg_catalog.setval('public.website_status_site_id_seq', 194, true);
          public          postgres    false    255                       2606    16730    category category_pkey 
   CONSTRAINT     ]   ALTER TABLE ONLY public.category
    ADD CONSTRAINT category_pkey PRIMARY KEY (category_id);
 @   ALTER TABLE ONLY public.category DROP CONSTRAINT category_pkey;
       public            postgres    false    200            ,           2606    41400 (   districts_tn_list districts_tn_list_pkey 
   CONSTRAINT     j   ALTER TABLE ONLY public.districts_tn_list
    ADD CONSTRAINT districts_tn_list_pkey PRIMARY KEY (dis_id);
 R   ALTER TABLE ONLY public.districts_tn_list DROP CONSTRAINT districts_tn_list_pkey;
       public            postgres    false    247            .           2606    41411 >   districts_tn_net_connections districts_tn_net_connections_pkey 
   CONSTRAINT     �   ALTER TABLE ONLY public.districts_tn_net_connections
    ADD CONSTRAINT districts_tn_net_connections_pkey PRIMARY KEY (con_id);
 h   ALTER TABLE ONLY public.districts_tn_net_connections DROP CONSTRAINT districts_tn_net_connections_pkey;
       public            postgres    false    249            0           2606    41430 *   fporf_request_data fporf_request_data_pkey 
   CONSTRAINT     p   ALTER TABLE ONLY public.fporf_request_data
    ADD CONSTRAINT fporf_request_data_pkey PRIMARY KEY (request_id);
 T   ALTER TABLE ONLY public.fporf_request_data DROP CONSTRAINT fporf_request_data_pkey;
       public            postgres    false    253                       2606    16732 "   incident_track incident_track_pkey 
   CONSTRAINT     d   ALTER TABLE ONLY public.incident_track
    ADD CONSTRAINT incident_track_pkey PRIMARY KEY (inc_id);
 L   ALTER TABLE ONLY public.incident_track DROP CONSTRAINT incident_track_pkey;
       public            postgres    false    203                       2606    16734    infra_status infra_status_pkey 
   CONSTRAINT     b   ALTER TABLE ONLY public.infra_status
    ADD CONSTRAINT infra_status_pkey PRIMARY KEY (infra_id);
 H   ALTER TABLE ONLY public.infra_status DROP CONSTRAINT infra_status_pkey;
       public            postgres    false    205            
           2606    16736 &   mst_duty_shedule mst_duty_shedule_pkey 
   CONSTRAINT     f   ALTER TABLE ONLY public.mst_duty_shedule
    ADD CONSTRAINT mst_duty_shedule_pkey PRIMARY KEY (s_no);
 P   ALTER TABLE ONLY public.mst_duty_shedule DROP CONSTRAINT mst_duty_shedule_pkey;
       public            postgres    false    209                       2606    16738     mst_duty_type mst_duty_type_pkey 
   CONSTRAINT     c   ALTER TABLE ONLY public.mst_duty_type
    ADD CONSTRAINT mst_duty_type_pkey PRIMARY KEY (duty_id);
 J   ALTER TABLE ONLY public.mst_duty_type DROP CONSTRAINT mst_duty_type_pkey;
       public            postgres    false    211                       2606    16740 &   mst_fmsemployees mst_fmsemployees_pkey 
   CONSTRAINT     j   ALTER TABLE ONLY public.mst_fmsemployees
    ADD CONSTRAINT mst_fmsemployees_pkey PRIMARY KEY (staff_id);
 P   ALTER TABLE ONLY public.mst_fmsemployees DROP CONSTRAINT mst_fmsemployees_pkey;
       public            postgres    false    213                       2606    16769 "   mst_live_sites mst_live_sites_pkey 
   CONSTRAINT     e   ALTER TABLE ONLY public.mst_live_sites
    ADD CONSTRAINT mst_live_sites_pkey PRIMARY KEY (site_id);
 L   ALTER TABLE ONLY public.mst_live_sites DROP CONSTRAINT mst_live_sites_pkey;
       public            postgres    false    231                       2606    16742    mst_month mst_month_pkey 
   CONSTRAINT     \   ALTER TABLE ONLY public.mst_month
    ADD CONSTRAINT mst_month_pkey PRIMARY KEY (month_id);
 B   ALTER TABLE ONLY public.mst_month DROP CONSTRAINT mst_month_pkey;
       public            postgres    false    215                       2606    16744 (   mst_sec_duty_type mst_sec_duty_type_pkey 
   CONSTRAINT     k   ALTER TABLE ONLY public.mst_sec_duty_type
    ADD CONSTRAINT mst_sec_duty_type_pkey PRIMARY KEY (duty_id);
 R   ALTER TABLE ONLY public.mst_sec_duty_type DROP CONSTRAINT mst_sec_duty_type_pkey;
       public            postgres    false    217                       2606    16746 (   mst_secu_schedule mst_secu_schedule_pkey 
   CONSTRAINT     o   ALTER TABLE ONLY public.mst_secu_schedule
    ADD CONSTRAINT mst_secu_schedule_pkey PRIMARY KEY (schedule_id);
 R   ALTER TABLE ONLY public.mst_secu_schedule DROP CONSTRAINT mst_secu_schedule_pkey;
       public            postgres    false    219                       2606    16748 "   mst_server_loc mst_server_loc_pkey 
   CONSTRAINT     e   ALTER TABLE ONLY public.mst_server_loc
    ADD CONSTRAINT mst_server_loc_pkey PRIMARY KEY (loca_id);
 L   ALTER TABLE ONLY public.mst_server_loc DROP CONSTRAINT mst_server_loc_pkey;
       public            postgres    false    221                       2606    16750    mst_support mst_support_pkey 
   CONSTRAINT     ^   ALTER TABLE ONLY public.mst_support
    ADD CONSTRAINT mst_support_pkey PRIMARY KEY (sup_id);
 F   ALTER TABLE ONLY public.mst_support DROP CONSTRAINT mst_support_pkey;
       public            postgres    false    223                        2606    16786    mst_users mst_users_pkey 
   CONSTRAINT     [   ALTER TABLE ONLY public.mst_users
    ADD CONSTRAINT mst_users_pkey PRIMARY KEY (user_id);
 B   ALTER TABLE ONLY public.mst_users DROP CONSTRAINT mst_users_pkey;
       public            postgres    false    234            *           2606    33207 .   net_link_status_dept net_link_status_dept_pkey 
   CONSTRAINT     v   ALTER TABLE ONLY public.net_link_status_dept
    ADD CONSTRAINT net_link_status_dept_pkey PRIMARY KEY (dept_link_id);
 X   ALTER TABLE ONLY public.net_link_status_dept DROP CONSTRAINT net_link_status_dept_pkey;
       public            postgres    false    245            (           2606    33196 .   net_link_status_dist net_link_status_dist_pkey 
   CONSTRAINT     v   ALTER TABLE ONLY public.net_link_status_dist
    ADD CONSTRAINT net_link_status_dist_pkey PRIMARY KEY (dist_link_id);
 X   ALTER TABLE ONLY public.net_link_status_dist DROP CONSTRAINT net_link_status_dist_pkey;
       public            postgres    false    243            &           2606    33185 *   net_segment_163_19 net_segment_163_19_pkey 
   CONSTRAINT     k   ALTER TABLE ONLY public.net_segment_163_19
    ADD CONSTRAINT net_segment_163_19_pkey PRIMARY KEY (ip_id);
 T   ALTER TABLE ONLY public.net_segment_163_19 DROP CONSTRAINT net_segment_163_19_pkey;
       public            postgres    false    241            $           2606    33174 (   net_segment_163_2 net_segment_163_2_pkey 
   CONSTRAINT     i   ALTER TABLE ONLY public.net_segment_163_2
    ADD CONSTRAINT net_segment_163_2_pkey PRIMARY KEY (ip_id);
 R   ALTER TABLE ONLY public.net_segment_163_2 DROP CONSTRAINT net_segment_163_2_pkey;
       public            postgres    false    239            "           2606    24964 &   nic_tnsc_contact nic_tnsc_contact_pkey 
   CONSTRAINT     j   ALTER TABLE ONLY public.nic_tnsc_contact
    ADD CONSTRAINT nic_tnsc_contact_pkey PRIMARY KEY (staff_id);
 P   ALTER TABLE ONLY public.nic_tnsc_contact DROP CONSTRAINT nic_tnsc_contact_pkey;
       public            postgres    false    236                       2606    16756    room_temp room_temp_pkey 
   CONSTRAINT     [   ALTER TABLE ONLY public.room_temp
    ADD CONSTRAINT room_temp_pkey PRIMARY KEY (room_id);
 B   ALTER TABLE ONLY public.room_temp DROP CONSTRAINT room_temp_pkey;
       public            postgres    false    225                       2606    16758    fms_data ssss_pkey 
   CONSTRAINT     P   ALTER TABLE ONLY public.fms_data
    ADD CONSTRAINT ssss_pkey PRIMARY KEY (id);
 <   ALTER TABLE ONLY public.fms_data DROP CONSTRAINT ssss_pkey;
       public            postgres    false    202                       2606    16760    user_info user_info_pkey 
   CONSTRAINT     [   ALTER TABLE ONLY public.user_info
    ADD CONSTRAINT user_info_pkey PRIMARY KEY (user_id);
 B   ALTER TABLE ONLY public.user_info DROP CONSTRAINT user_info_pkey;
       public            postgres    false    228            2           2606    65985 "   website_status website_status_pkey 
   CONSTRAINT     e   ALTER TABLE ONLY public.website_status
    ADD CONSTRAINT website_status_pkey PRIMARY KEY (site_id);
 L   ALTER TABLE ONLY public.website_status DROP CONSTRAINT website_status_pkey;
       public            postgres    false    256            �   (   x�3�t�����23]@Lc����Ң̒J�=... ��	      �   n  x�u��n�F��������ِS1�Xp�fvI���Y��v��D��.�"*������Y��_����3w)ig����τ�QlEE����:�C�}�7C�8l>����*F�
�ג-^1IRV��c2%'E&s*j�4-����oC�\�/H�~�oЀ�s����+��ў��%e��	�{I��0"@���{�b�6���(es���F��|��h��Ëyf��,�N�>9iӔ
��-���4"���ۂ��֭�[뛣2#kLIk{0BP�J:$o�LY�
���ݺ(��>$ͅ��"�1�����tt�5]�|e��Fx5S��zL�Q!(�Ӂ����慌��B������'����^�Ug�/\�Mv�/!�����4�:N�1ÄץƂj��A'#TB�ʨ�Uf���
�M^8�`��ʁ� V�X_0��88U�.U�]���y�ز�4gV�w��Am���QOn�F�t��L�ȏ4����#�T���Fx�L��}��bM�!�����݄	�+S1;`E�U�z@�Ӝ���ILꝉ���xj���jR+�Z����e:����S���%7��GwL&G�=c&�����.�"7�G��}rL>dP�s3l�q�=�QΏ��k!��m?�%ڴ�j��}~�kW�Ƚ$uj|#ºc2��� f�6�]v�:u�t��*G��ɪt�7�Y�:k���ږճ�"��~ +	
:#��J�.0/(h)L��
��d�G>�j��c�y��d,;�Z0"P�;�>9�$�K=�����	\×��Bo����9-�<���:mO�4W�<�40BQ�Y�X��ʤ�t��i��l����9=��U]���\�l��x�� �5�#¶>S�䔩���uk��u���u0�uy��w;��V�Kj}I-ܛa�$3�e/�r����������.��	baP6;�ꔾxK4��������l�����=��m��X��͐�A�_�>�)�>#Bv��=���XI}խ}s��9�8�Nә&#&��0�7d�_Z����tVhUw@>e�<�l~ �A�����'&08��(��8������_����#@�6-ZX�T9�C0���#��x	FLt��U�$�F�      �   ^  x����n�0�ד��.�b;�KJ�\D�]ucH��IL�J}��؀h�qYx�Og���~�����mu�~Z�#�l��a��d��%�k�"_���(�z�v�z4[l'��D���w����g7����a�qg	��������m��J���.��0�uI��֨`�1ޙiN�,�`�\L��0\͞ⴀ��8m�=�tdS����=�����@�C��e�oNE��1L�CܟO��������ȅ�N��<�@	ِW%�)�gL8OK͸\I9��%�Ҽ-����aXe	��ϗ�m����WR�����ֽ��2Hȗ���p�7�H`$����5;f��Lۍ2[7ع������[8EC�"�>��EQk>G�iMiE����ͅ�z�o1̈́Uo�2\I����H�"\�E
+:���䌱U��U"Һ��&*�؇*�a��m~h�ۇTm�ek��MF��HNx!���W�RFǢ�-�~������:���~[�F?Rذ1U�R��*�[����ߋ���/�n)�������cҌƒ%4�'lk��>�?X9��xM�c5��c5���a���'      �   �  x���1O�0�g�Wt���%v�B��v9�(uI��u���q�44��Z���{�߽s�ɕ��}�β��s���+=:��(A�`	O�ײA]{������O��6$�k�ʋ�[�|]�� �(�X�/����-K� ��vr�O5��ܗ�a&���n�*��M[�XL�p�=�^�+��(�=�
`LB$pR#��zPJ
b�|E2��6�d��-�D�Mu��@:�j��j�#�}�v�a���1�0�@�X�/�Զ�lњ�a��K��D� �&tbDJ�C�͇7=����m�9:�|4F��)�¾��8$3&�n��f~U4��w��͜����4E����a�I��g�k=�UD�'J&TRE��un�w�.��UA��?�S���{Z-f����ss      �   o   x�Uα�0���E<H
�^�
�7ۮOeՕ�JG/hC����[NH.�Ÿ�/�pC��IHPA�Ёp\��E���"��C�d�&�W�J\�+q%����.\o�      �     x����j�0���+�13�KZ�J	�-]u3��4V r��U	��i��d�=���u�cײ����a/�_&7�F��XlѨ����C�z����eRTIQ'�I
����B'E�W��a<�a�6�=���������ʛ�*؍|��y��)��%�~�&ej32fE̢���i�e���R�d-XYVւ��@(��P���BY��*K���'�`~u�4�6x7"�+Y�e-�³:�p`7}]'_���є����y4-�iM�H��)�����i      �   j   x���!�0@Q�݅����0�@�S�%��'�,����4Ή�?NF憰BK�Y�̏h�me�����OX�G� �]!�U��x�R�xFt�����slv'      �     x���]o�0���_�݅a>��U�6��&5ѤN�Mn|B���l�h��3��BK�~��A����9��&<C�?��9�4�����°�́�JZ��l�&B���,�9�\^��J�k!w����"g+���H� �7o�r�&%�h��Q��FI�X��t�`+�w���^��#�tR	����O������t8=H�uEn4ҿ��7�*�����4�kU�4W8Zz� %۹�73d��0��8����顃�k ���OB�I�M�e��6�RH0ۊi&��찑��`�P���1�j���9�3������Y-�E�E�E{�A�R��:I��������x���3}���"FCcg�>3|ø��Q�~��Ga+N�Y-K��mcY*KnݶwZ��Ģro�p��ɊN+�V~����N)>��>0�>{�V<�r_��A�Eg�����N�%q����t��1u�f�}���@?�8L�Ǒ�T<����'�K'��'����dN��6��R�5���+c��Z�      �      x������ � �      �   T   x���� �s;����A�^~J@��@\_��9��fH�ٓ�p=E�&:a��
���6d�4��/���(	������      �   ~  x���Ir� E��aR<.Y��3���0	$�I��RW���$�/!@��vZ3���f��;t�I����1�lo��*L��loG6�P�E6�~r�vx;�xޓ�q�-�/`�>N��5��*zt�<k�9���]�X+���@K�
Kʖ۵5=��d�|��o�o/�O�LE����8J55�����&�8{F�
�s�5��g:3�P�K>Pd�1#ir��Mw:�I� jv��^�8s�:p#�Z�!��Yn��0�d���Z���� �yYk��*~�}���Z��Xm��@�?��A�|�r�ʳ��R)f��#Ք5�vs�֋-�5��^�v�	�m!�ɏ��H������5����V"A�xk�����EX$������KH      �   �   x�E�=
�0���)<��jge��6WX��I��)�=>��0c��JC5F���V9&L֙�lu'D�m��]!R<1�I��gg�5�N\�K%c�Ծ}}��o>���Jذ[h�+�H����ˇ����0Z      �   }  x��VMs�6=��́4>�Ů�u�i��s�6Q�r@J��w�UK�%!1C�ov�[�
��L.���ѭ�.��}�׾�n��Ҹ�0�ƃB�ZF8M�������ֵɲ^<x�'T���L���w��[	�t*r��0:p��p��PAS�%��f3�>Wa�n�ͯ���c/߂k�4g�1�dm�YV��qQ�N���
�q�#11cݖ���RJ��8R��Kf&�㍏��G�ؿXF�8����?�)�\7�MpM�e�1����s��3ȸPL���=n���H��U0�f�fm�(��5f��&R!����m�1Q���σ9�}u��j*��TT�9I��Q��zlT���s]ح)�;�@t�KE�ö́P�mz��ݝ��P/6��-\t󗦵et��λ����1���(�	Ka��`�N��Иd�Bϔ@�w!#)�;.Sn����Z��o9<w��	δ�*B%�&Z����@��cQ�#���]�ю%�$�TY�C���xh��,TO+�fY���i�yJ��`� �����|C&%B�؄j�^��S�HOH��<�5k���?J)�B�(���^�^���;#	��v*E�}l4����:�
s�\8o���tF8Flj\��a(D���GӬ���
F��ǘd�;Qbc�$\%s���[��z����曺�B{��R$��L��i���hѷ��Lq7c�iXP���Og��1z�p����V/�f��Nd�<M(�; �W��3Hr�~��"�'�e7\z
-x�D[�v]G�m��3CR�+��1x�e������^�8��81R@ν+����ͦD�Mq����<��x�&��#z�i�r�5�����ѹyܼ�zb!�O��xIt���ס�ǭ�������R�|/      �   H   x�=�1
�0��&AG��R����$������y�2[�f~0zhR	W�d��.܋?�D�Hg}G
4�i���|��      �   W   x�ƽ
� ��އ����h����DZ�D2��s:G0�Fs��|xVPγN�l0k�&��*\�e�͸��c�	��|����3�?u�>      �   %  x��UM��0<ï�q{�e;�#�UA�m�q�d���D�$%��?��cm$����po����u��G��/�@=g�
6����<"�a���3O��X/`�� 4��8�/��^�Yn��A����A/ ,}�2�{k��윰�`}��{���LH?| ��"�!k�(+�˙�?� �������\V~��~SJ
���a��'��SJ˕㈢ ����П�Y�N��X�2����R�G]���ʮ�A]�(��U�X�9;ݸ�㷗:�bgk<U&.���I_�#����4v2�>�;��^E��+���o��(�B��Jm�P��%�.�8t����Q�5�C��jsZs��\T��}ꍕ��(��Yn6�B��[����Z}YDl����}�!�)��w0�3-��ĘB�NR���T#iü���� A���;�j���R xp	�'���B��뎔�g�������l��^���wI���#�:�U<ڭ�U+F]ER�*�+���zr|1�?8Q����s��uB~��x�ͬ�      �   �   x�]�1�0���>{�*vL(l�![O����*~4P#e��|��������R�>�N�6���n��r"�����@cDC@�jv$��Ta=�'2z"TZ�|�����ӌ���"d1��Z����˧K��;3W=�      �   �   x���M� ���0�.m�t���K(�IfX _��S��ǋ��9�'	m��ŧ�H)$�]���$e&�A����|e����ĵj�v������P��X�ғ8��8K��d72g�e�k�j#�V\^���ɝ�C���u5��x(6N��=Ru+�p>�=���UY�+�*�U���ʛg�Z_�}����!wN"w1��]�N��	C��S���>�_��#      �   }   x�3�N-*K-R(������L*J,����qw�t�-��K�Qp�,*.Qp���/�J�J��Tp�H,K��qJ-N�+Q�KLO,�L�H��K��2�V�����	�i�i�E��y)����� W<6�      �      x������ � �      �     x���1o�0���Wܘ,RPH�Fd�ITRu���5X۵M�����$];����}�a#�N���$�`q�ɿ%-y/:��f�i/���ޭ�L��h���1니9ɤ���!�LC;���Kn�hnW&�&-d�2J��!J I�l,�r���l� ��z5��\��*c�{,D��U�C�?����x�`�e���k�,}��$V?�Q��b]V�j��n�O�<2[�k�B!�f���?�����:Ɵ��W�U�$�8���}�� ~���n      �   �  x�}�˒� �ק�D�!�%��	vB"�Ѷܨ5�.���/	�:WT�|9��
���P+n���\ h<��a��l_�IV��������Z�j̀����:6��k��0�c�r�w�2Ź�rмQ�0%�A�3�@�P��~�O��1<���SQ�n�1���+w�*hU��ك�8��v5��pi��m6J���bb0| �	��&ġ^���XC�XP�5:����>�%�fq��A٪S.�>$��dFL���l0=���C��WU�`�W�6�Dy��fZ�AN ������m\_�,f��c�d%p=���e�m~Vk4���N�K#8$�d�04���'Z��tB\�&Ռk���Ŝ?��	�S�t�VZ��D�P���<�^�"Kh�96��K��F�%��|fcB_�֠�&�y�� ��:Ð!�V���"�i�d6��NT�%#`gzQ�XC(lfS>�#W���iػ��p��t�ěE��L*��xM�k�Zva[�>�"`R2$��J�e�Z���"�Q�U릙l^T�e�Yx�M�	W.�����9���bϭ�Y�?���d'�ђ��?�R��h�Ev���>���3�����l�{��b�b����^�UC(��.ϣ~�i��QbD�$_5)�4��[ї.S�/x�����.Ǘ��/P;�mװ���w}����~{�ێ�z�O���D\ms��w?>�~�����׏�~?|K�4��-Y�mk�Lj��{bڿ�v+4B��w�f?���؝'>�w��(+ܸ      �     x���Ks�@���_�,��n�K�c!��LV��#��ZS�?M7����_��8�/��\��X��0+�^��IV@L�8�p���O��/�dd�R�l���7�6�/I�WT�z,{ 5�� (v�c9^�0��l�<��]��	1�l1��^�J�Gi�-Xw 1͖|���4\/��EM�}�AX�|�ǴmÖ��7H6�����I�J��<N��j�+_�W�\�S�J���pc3�e�Y:���J҂�[Q���I�\�&b�����;`�2�8E�4K^���+D����IW��,�?�%2�ć�*��}��PMC�OlW��2��:���'Q	���&'j4� �=^��K~���+Kul}fu��m��p��T�D)́�<��j�7U�.�w" [<�Ry����9��Z���*�C*:�X����C�����1��>a6x�i�M��f�5<b���1ؔ�����W�d��C6�u����FN	:���ۡ�\̅�*ߊ�u���K����J�2&��_����      �   �  x����NI���S�`M��_���X��)�O�1�����lӇ(+qSRS��UwO�㒑�c)��4c}���m�5C46�˗�̌�Ș܌�ɘ)ȘҌ)ɘʌ�Șڌ�ɘƌi�I-Ô�;*�:������[o����\s�ЅQ�]w�����^{�앱W�^{���ثe���Z��ثe���Z��ثe���Z��ثe��}f�g�}f�g�}f�g���c���,����,����,����,����,����,����-����-����-����-����p�3��e�3��e�3��e�3��e�3��e�3��e_0��e_0��e_0��e_0��e_�/,|b�²/�²/�²/�²/�Ҳ/�Ҳ/�Ҳ/�Ҳ/�Ҳ/�Ҳ/��.8�����~<6��:y{�����?$Oo�������}���]��Ȥܺ�����t�H%+Ri�T�"��H%+Re�T�"U�H+Re�T�"U�H+Re�T�"U�H+Re�T�k(�C�ʲ��ʲ��ڲ��ڲ��ڲ��ڲ��ڲ��ڲ��ڲ��ڲ�� ��ז}��7�}��7�}��7�}��7�}��7�}��7�}��7�}��7�}��7�}C%h0.�P�Q��K�KA��T����R*�RPc)�c)豔
�YJ%Y
�,��,U�RY��.Ki=P�"�Q�z�2���1Ǩ��<F}�2*d.�Q#s��*��d��T((e�RY@+ˢ�T�z�^*��P�,����f�,T6�f��Y@9���Y��?�Bճ�|���P-ZG�r��A5����Z]P�!z�|�}��ۏ�wZ?v>}w8�'�M����x�������4�G�D���z3�Ĳ>�|����lq�&g�����];�����۵K�[��.��(���e?w�v�}��1��6�!�'���vw�|p�a�d�`8�(�����x9N��Ͽ-o|��.�9L���≛X���r<u}��;�G��R�r���=8?/�х�Y��Ϙ<��M�#�:�����~$��������=�S)*�բ�-����������?�zpk�Xr؇>�'�_���h5?��G����z�~��?s�?���y�P4wX��9�K$`I�'���'j	8EB�"�(Dk3jO�vw�m͋O��kws�3�<�Ų/t��ߎώ�/'���'��kw�|k�Ձ-]��/������l~�b�b��g?�|���s�+�����-��N��n��%�����李����,D�y���?j�O�g�� �-D�!���͙̅��������W wN�='��Iܠ�`�S�N��Q����j�M��Ӌٱ}�ؒ���Ͽm%��Fo�`�	u��<�^���'�����y�^��ٰ�q�lW����?yO'>4gDx�Q4m�JZ;GX,�)�
CDv@�gΟP~�ݺ��-V�o0�CD�����M
5'�k�R�e(�'�P
X�!�_�������)O�☟���?]�A��P�S��j{
��7>=;0>CD�����c
���DO��E������~ez��"	�w���я]�|��XXcu��O���Q�$�l�'S(.X�B�\37Dd�g�E{�N=���{P��\_�۾�ua���w�9DW���遰:��χp��~�i6X�S�a�Gs�W����F�����Q<����<���GSlVa�|���Ͱ����Bmk�Z�m�`[kܶ��>�Z+��J]k�Z�k��Z+u�\k����k�ԵVp����*�QD���R�Z��V�Z+��J]k�Z�k��Z+u�\k���~��i�q�:�j�=k?���u�x����h-�Ë�xa�o��./��}^��;�x��z�f/����^
��R�Z��VjY+X�J-k/Z_�3m�Rp��6u)�Jۺ�`��]
����.�Vis��٪��K�;U��`�*m��{i=��T���2*m�R0��z)xJ���<�F������K��S��)8yJ�<'Oiۗ�'���������>q�:      �   <  x���[o������s��]}屌���6�m2E���!c�K|��OUf�S�8�H3%��V���jG�7%��)������:�P�·O��ᯏ��j�����b�I��eWm�7*��g����y������de[
-���|9	UBR%:T�~0���i'>����C��TIURR�u������m�z�T>�K*9��@aJH!L1�oR	VZ�R����X�v��:���ި3��ݞ7��Jjk����ւ]k:��Y��<w,�v((N	����O����wuf�6����F�@��@R�$U ���K��?��]3!/�FR���<��GxD1�(��rz�	,b~�6I�_��ΰ�ɼ��=��z�/s=�|����e�:xKo�]��N��׺0�^f��Y3�Q�8�t��U#����̴��	l�ܑ#�5i{v���KGk/�x����]s��Ŧ�?l1�8=�1����ݩ/�.�bSξM�����{Z.�N�ֶ;/i��պx|��o��,��@����,7#ң�K���4�k�GF��a���,�s�����ϓ��oO{����<���ow��-�(g���/�I7/�#�K �X`�����?%0�<`6��@��v��R��])��@W�����y&τ��e�C��^4X�
A��y�h�c{�xM�vaA?�C�qhꀔ���a�:�SS�	�8��S(u"�N�D�d�@������M���d�`�#�k��ѻ��C}W'{�"$JH��~!VE�f��ZrFL��}����3�î9��s��$�.��18 f��1s@��q���ǎc�;�b�IL�q�����5�F����~`���t�����М��kęv���g��+#w��>{t
o:#��FkNL�}�����چ�����-o;�%$�'��y��~SVW꾙�뚷�l��c!�%�u	�.aq'C%�pO�&	���/L&~�',4$�h�BC
Ҥ,ҧ�M��fW�zY�c�fӫ�������!%e� U�o��W��X�>���^��퐂�iȮ�Qcܳ������vE�O#֠������f=-�c��,x$�Y��}�g�r���`W�੔b��򐂥R��ʓ8���G�ej�YZ�,-0K�m���b[����ա��n�j��j�`�[!'b;X���G�wqظ����jP���
������"Z�)[�.��.���|ʗ|L>%L>"&�i%>�#��%>B!�������&R��[�p��c]5D@_��A}5�Ga���¶�Ԡ ��5,(�{y{�������~�����l��M��j4���O�@�F��]C�B�1@����P�'��l�UC�s'��QmW;_�*,q7-����;�:�{��-����>b�������:+z��E	�E[`k�v��p�y���Ig���FF(h�k����B�g�z��7A�f�*�H���\��p���X��+���P��A6%N	�)q㩪.��P�>�P	CT���~?P�����n��|�WK���4b#�7󪪡�n�UU�]�&_U5?l���<�l�u=��uE\&��	3��L�	ef��L(5�f�@"kCwNu����z9���zm�vy7���z2wN����Gh�2�_�{�Y�$$�����#r�����ө4�z�w�מ�H�	R7��M�������M�	%i�(M(K�i�����1�,����KC�%�l	�-[`�P������ܼ7��Ng{+ϼ�]������oD���?�@U��Z�A	B(�JC������D�*�K��$��z�.�+��J�^��O��|�u��.g�F�%�{	�/[pK�TK(��Z�����)����Dj��d�ح�
���������^�;�����eE���7����,�����R'qc'�x�����ɓ�ٓP�$H�č��j�+%P�J(��PB)� ����9�n���~�V	�U��J(�V�&V��Z^yF�~�vV��r�"�ͅ�%Ð�}Ԥ�9����eSQ���m9U�^C��N�4�m_k��F�"��P������_��L��O��gn׳y���`.r
���@N!����S�%�3a:�x
!�-�퀉�p���#��G��ltf�'}�-!Ț��.�r=�	#_[[��Q+�}���a#��w=�?y�!��Բ�X�Sm����i�^m��昼�9D[p����{�fn�h��?m���s_۰�MCTH%�
ɡ-�fؕ6�H����N}�h3d��2F��QQƨ�1*�U-k����)cT�l�9!����|V~w �Z r���ߺ�J�H8��nq�A�iSꙏ���X�Ft�#���b9�<s3��e1+M�k��#*��;��Χ���5n�h������Vm�NB��͋'���X�u��ݙ�&NG�L�*�3�yz���ЌSQ��cڂ��V�@�"PE3�y�4jy���F̪ܘ��8��a�Ey?�V��o��a��X����ݤ�۟E�c�;%q�̢|��*wf���|��o����m�0����b�R,��;�-���b������O�B�l�\,�G��w�#r��G���w,��n�R+�Bj��b�ڼ���E<�e���į���^�/n�����k����9t��/�ոq���Ms���"\?�b+����aۂ{b�c��|nߐ��Lk6G�mn���^4߿)�+���vۂ{-��?��݁���dY/��i��f��/�ǀ���S��)�<�2�L\^O�o�V���k�⥘o����IyU����$&��C�i/;���YW�{�拮�i��{��{�Ao�^P�?�ɝzY����+�	�/���q!��͓���w�C      �      x��Z]��H�}��~�<��v�a�mH��*I��X�4�*2���d��_3�eٞ{��M�>�Ԫ�n_�#n܏sn8���*]8�:����.�yV����<8?����E��慈��H%��S��#�����b-�oR
]�6���eV��)��Х.����c~�O��K���	x/R�A�Ay�p���K]�vgN��A���d����d�D�)�A��؝��t���O�I�7�u����aı
i��'|/�X%�Cg�r��-�;^��7�1i�����i$y������c^���T�6���@��m�(�72����@���͉/�$��D�6��S;��������Ċ��{��*��Q���qlF*��S�J^и���]ۗ2	dı����ckUp�8�N��u�#f	v1�wq���xk�z83j �4N,T_�ǼЧ��I���Mn�2���q�*!�Њ&�e|���ϯ���\;�_a̠�|l�J���.��{^�ɪ�z�d�
�1NX|ܒVk��g��{��ï3�H���E�����9}djŔH�O%"�^����p&���c?���Zf�A���}D<�@*��6e�93]b�
�i��i�4�ՖM�����p���g�������9sg��	��[S�޺ɲ��4�}��c!S�vF"&�]��ʝ3e�i���ǭaHM�������*��轳�m9��^JwǦ]G��������2�6��}�a�6�^B��@g�A}1ABy�ӕ�l�@� ���k	<.ϔ.���n
��z�:!�+�����b�7t>�f�_�<�a�7E���(MͩcA2
�xB1+�!��`�Hͺ>�Eυ1�� Fb�es�W�y���=
3��`�؍��6v�줍�D�	'�Q��+Vx:���g1��?�G-б�@i�w�[�B�F�j�b��?�?:xԟ`�6ǔ��/QVL_BU���$@<n��"��O�3�WKc�:~T�K% 	�\
R1�.�"���.����#���b�JH��g\�ί_�4��T��P� }��)�B��r��^���ޒ�jk�b	�O-'��,4�zܕ���n�a��b�3��|�2 L�?�������^�ﮰ��A �4�i�B��B�bQ� �5���>P!���V�""`Z+�4��J�X)j>��C�qэ�7�b��H�L��%�P^lo=�,+�&"��k��F�7�V����Ƨ�db�T�}䌚�uj9Yt#����VvD!���H� �I���+qf���:�	W�I{$*�ʂ6-���_��H*;PF�|�]E����r���^���0A�O��*SJ��&+�a��.���Z�V|�W�*�@E���z��͡KU� bt�r�~ ���6��y���Z�������8�:��eY�����I��1�X�D��/� �y���ԕn���j��P�5��;�>zd�:�^~:~b�e��g�����g�qtFY��Y�mk�#���7��u�V�W���K�D�:j|�K�S�FB����S�5o[[�0��PQK�=J� =��L�R�?��]~�x�rk�t�T�H4Ty$j�J��P��o�KE΄�iW�= -��$p ڧǧ�"Db惞��>!�\�ƴ��@�R?iI�\��#�x�T &`m�2s&,u��LK[�jHX���\,�!@Z`(�g(l�a��&q��P.������G��"���т���G�X�P�{b፞�I�2�s�nh��ʜ����n�-~X}��y\��֛�2&=C+��|U�Q����T{�{���zЊ���I�6�A�|���Ի�E��n���b�'w�I�~����c�j"~"8*]Q�,(i?ݬ��L��� b����G9T
q� ���yU@?�7���|�.{ÖH���>=�@&��a݈�y:ӓ�g�3(��������dFs��&2�,D�@�oСE�����d�{�;2q/�QB�E�3
�,J��l``)���d���;;��� ��)Q��D	D�;��z�s�Q�;�f���{p�|� k`CT�M�B�m�T�)����ZI�AtT_p0B�WZ��!O2�P_y�����7F�L���f�4]D�l�����������w�6p-%)� �d� �qdC,�(�l�L?�����>��V�O[�Z?fZC����D�h�A�zK�f�6�ͻ�E�mq)������)ۻ)D�����4�<�a�;���r���1�7��Ԗ8<iՌ؃�ښ��m��h$ˤ/\��}n�B�a��UhU��3��bU6ܬOͨc�x{�и�0}�U!���9K��]�7��o�]�F��4��-���qe׳��bK���3N7S�@at9<���
���Ҁ����KS)�(Db��:$��I��[����bЍ.�3	O�9 ǀay�"l.�c�U�y�[��$��D�z� �W(ѿT�\�m����j6�DV��Zd�U?�ݕ�0o�UU��'d
KHm��	*x^��?��L�NY]\ۓ)�4��	M�AM�� �XQ�vڸ�Hn{�8�������W�N8�MU�����e7�IaA&��Yk�q��f��Pҷ�U%��k�a�{��ڠ�%M'[����}�p��̹�U�6]KB��������x���}�'Q�'�3���}�_�,n��TL��o��bQ���d�>�j��ՠv����@8�&HIW6/�����N��O��Q��#5�Qft�U��қF���X��}:Xd�h_�:q�5�����=���5���M����ʛHI�Dw��ی��E��k=�y�ϊw���Ws��Ió;��J���ju_��t���e_v�A`�r/��zȖu('�{�Yo;w)$�c�y�Ϗ���`SG��0p�{����y�ͪ�G٪�J�#tM���6�5�W�����מ9Un�����I�91}����ݳ�n�����;E�]U$��E�>��Es�c��+��m��ܕ� U҅2)�(�{��m*d���&���u���Lnn�-�RH.�2]��{Qr�Χ{��E�޽�le푔P)K	/��y:S�?���Y�Ϋ���(����� ��is���Yd��	�$���F���O���N��k���
���I��7A�&�	<���
��.�#�F���؋]���W7�3K�*FeJ\��������C�+��[��j�V�c�Z+�W��I��G�ĄZ;z���=�y{gۨ��F�w@�EU\i���g[��@_=���x>��{S=��	T8gT��fO��r{���aӞ�BZ����n&)d]�^G�^٬[l�S����)�"0A�;���owN��V�B��<�nfoi�qdR��޸���|�I��]�9���R_��U�2�QxI�o����g�Y���r�l/�B6L�K3]R1R)��w��k����!�I���U��� ��������gx@c�7H�|�_5���9A;�<?�_ �uЛD5����Ok��t��P%� ��ԭF=��ҢT�I�[�P$����}D��dd%H�;��C���}nݕ�@�>�I�(�FG�\^_���,+������:�4qb�ï�o�W�M��[��FR�'�5�Ck�L빇��
��J�i�֙��厞؟�H����"�3���jz��!>n�X�����"�M\rwGa���!Ъ�tɥ���Tg؀r�[B�� ۓ�q|�*��@�Bw-�֮g��2�#֓1��`F|x-���'��YO���y��-�(�	����U�����>�ǊM��(�2P-��!߿�ӡ�X�'�/�^;�Ŗ�U����S	xb�JQ�ߩ�4�&��9�}��U��3�+n�֦�O�74�a�3M�	��(�K�RD��r)�/;eۗ������a_=7�)����@�>������M���~�&�]H��}�2S~��A3�� �{��Ȟrb�Ph4��S\��*IF��1��uǇQ��!�uS��n�KO��&+���F��[wk���%:��{Q+3�˛�� �   w}��S�����5�?��y���7C�>�!J��O���i���I�� 3Ď���$2�YE3���C�oH�S����D�JK�?$�K6�w�y��~z��~��]�����t$�(uӧ���-㶯{�Bh��;}մ�ǚ��}?�k��G�Ju��}�Id������F�m����0rG�cӎ� 4�ۣ/r�ﱼo�r�}������      �   Y   x�3��qw�42�3���S 1� #=cNCC+c#+.c"���p��y��Thae`Rh�jbZ�a�aC������qqq �"�      �      x������ � �      �   (   x�3�LL����44261�4�2�L/M-.�9��b���� ��      �      x��]io�8�����M��'����:v��vڈ3��b��c1�(-)9���o�.K>%�X��v��S�b],M�D=�Ԏv1�*��
ɿ�7.�_d6==Lo���a���\�7N������?m����W��<9�F�4�[�Ѽ4�e�k���7n'O8H��&1J��X }�6��.���#S�J�1�
y��14�4#��-�Ʌ��*�0ͦ�o����e��j6�]"Kɕ#hNB ��X�	�b,Ii���EF�� cBły���x�g������o�U�0���K�v؝A7[���S�k3�[3�ڰ��6�q�v�������l�x���ț��z	��%������hCB��h^�eC�Љ2�[3
`�b(HG���tt��/ఠ!����b��dV�K
d�" ���~]�"���SU���"�K�l*�n!H� ��#A݋���~��+H�l,蚂`o#��i%k!�Bl<���ǁn�t� ���An���d��sؑ ���![s=96/Ý����^/W�	x�ldc��[L��>?s]�-���d��(�r���=p^�`������C)���6�%�����r [k�m�_TFbyTn��-�X�"Q��P�3�q���6ή�
_�20��B� �~!�rJǖa���M,�
["�/ m���ݶ�,�"�4�>����r|�J�� 5�Uᥡ �r��#ˠ63h�z�C�brd���0`7����K�G9ᖴ[�ҳ�1������[���wa$������������Ԁ,d9SK����2�j����n8׿2�7�L��d5��kIܾ�ً��b[2�2������`��_�j�i���g�=��P��!wAB�����׿,��a�bv͆	��T�߅CW�{�JS��\�>��Cw��9l���]��s� 	#2�tv?C$Z�y;��~֔[��b�$�l� |������n�ǘ���w����p��|�����$`���UƘ�tNU,������/>�5X�H�?Ϟ�R����bN��m4��ehKR��5���`�q��(X�����P�c��l.����q	��*�є�����Xf�ROF�dJ��в�H�����U��t���8���=��gsE1ȯ��**B^`�a[P�V�RH��&�����x�����������I�UǨ6�d꫒�6���0ے�-��S ���� ,��@=2�_�6�ʱ��H��yS���$SJ͜���A�dL��*�`��z6���h��2(�<	�����'�~.���x�t�_��Ɍu*�5�MC}E; ������a�Ru?�Z�Ԥ?T��`��4F+��x ��It����jA�g��1�شd�uI)w_A1@�+#�xW>��<>^��������o�w�l��s��h,u.8�������m�{��~U��	�]�� �)]hP�$�11�=��2��zM��u��/�����:�`@�����H���&�b��!�8��Q��踆���M1 �U���'\JYJ�0���p9l�)YB�7''T��=�
�Td�Xd���b�V������K���~?_;�'֋�[yl�]��CՉ)7i�S�$�l,��!N p|=ւH��%Q�؉�lA���F��E"C*����������G�0:��ש�Y�*��(���lV�|�p
���Ơ�7��.�r-X�%�r6:� ��V�|�;�X�"�Ih�/���qk؍�+���̘�z(%}��3h`5�tɛ�$ۦ��7zfU�	蓩�{��8S����°qhQ�y�jcU=
��w��n���ܾX���Ͼ�����*�3i�P�.�4�p8=͎�F�u|��v�6�Ϭ�T�>`�=V�c�\���!��,R�����l+�Bc{u�e/��Si�eЦ��C2���\�=2\�TUczQ,��a��7q��͞F�	{�ن��n�Z����ڠ����'ɶ���z�i(��f���s<��(��XPY�R|E�Sˠ���d�d㾁/�\�
+f�b��]�3��Q��)����`=�hs���ΥJQ��Y�������%}�ݱnO�QI��Y&�JE�0��ٝ;g0�A���H�c��e��Z�W�G..&�	�����I�p
6�5��t_� as˃?�z��"W��m��II�%��؋�����������4�'����Sp&�̈́��z�s��N#��|2=R�$ɪ˂�%HF�Uݍ���i�����U0uH��bq�����P�%�Io5�$�,�@l䃔QQ2#CX�M��d<�n삯�
G
,Ϧ���I#��΢ p3�6w=���x��a�2�*V
@oY���Yn�q���L
)'T�ry"p���R�<`h���a,0@'ܵ���Tj��%j{��|Q"�u��'ƪ�d�H1���(X5�ϓ$.gr��������-s5��,4��/��~�䁋�J����G�I�ßA�Bs1�qۦ�s]��P{���1j`�^	i����m��3S?��-��L�N?_�� @�.���E{��F���E�o7�l3���t�D�,v�?u��i���%��;avRБ9��=`!č�����A.<���ս�҉�-�@���œ�I�1��y�]�8<�M�?W�` ��˖t�iv ��}O�g��~���~�Q��u(ע�wI��Z&���C��D��M�-�L�>C�]�IN"�%ίW�o�������ཋź�lz+�$������O�����K���h��Xb��M
]�k/�_��v��2,�x�cL"7���t��6gc�ZS�x��H�t��o��A-7Dpxzɹ^{C��.�OϜ.
��	K$��i-o'E�3e}�{~��?Ⱦm�#V2���a�W\.��Dr�=T��L�EC�:�fba�E��}�͑ΎPw�+ x���'�3&�tl����G�$�0��i������d�D��djlZ����,V������z2�TO�wcԢ�Ê�1���3s.�Ds�ٟ@���f�����]����j�
g�w����k�f
�$RU����4a7���d+c�}H.�c�K�HC>s�N�GR�t��)	K�+��4	�^�z_:B�l�R�/]���K��6Ėw`oQ����Mby=����n<�^-�\�0�=�:E�F~���c�%��6n��2:B�4<�\�ߝ�y`�/]Ěy�u�Aii ?.������+����#OL�X�Q ��`ٷA~��8\ ��M���'?�\�D/�"�D�&'x�Z�k\����r(��?�OP���v��<�ɸ�0�]�������#ͬ#§т ��f`��l}��yd/X��T��uWT-gO���o�n)=b�:��� ��aFz(Kf��V�T��b�Y�Z�֬��s�h;����[x� o�+�'�,wPI���f1�_5 �lc1Y���d�g��J,���U A���H��b�)��	R�Tp�]�6n��lԼ7Zw��s��%��آ�5̋�3��k�m{z��R<��s9��K�ǅn�K2��s���'������q�V���k^�{:d5��2�����	ᠮ,UF#��	u��#Ԃ�ڒnؒ�m�Ol��S����z)֥o��-#��t��LCP�p�9A�*g7B���	u�4J��.���4�����m�VY��e��A�7V�bU{��0E��{y�\��v���-�E�����MV�T��v���Տ �t�������q��
~8����Ƭ}��GՑ�I`C��G��w��IU��d�~�rY��0Φ?ǟqL�*5������І����Epp
0�+{����mb3�l|{s�
�����\�l�/����}��zE0�i���k�F���N'�t#�{��;������QKpY�$�f�9�p�>ގ�p:pZd�v���*�z���w�[uc��ց�Ns��H�3Q�z��w6�z:?~q���H`�߃D�s�\�	�4v(� �U�9H�Ж��Z6�H��zW>�w{���M[�iv�2��%�t�¶/	L	 �  J��Ɖ� ~<�d��V� C	��<���?*���h!:Ћ[M��IC�I\���?Tf���?���*��&�ǛӶk/=��r��{�8��ٽ�S����V�G0ze�?����:~{.�k�f
��&���IcǥXe߲8v
��q��n,��Ǹ���.�X��:<k���A�fe�%j�S*t�\]��MF�z�fR@��9�sd�+k1��K�=����&�v���b!Φ�z�z��rN��49��f�t 6����>ɺ�VV%:�ƨ�quP�q���{�M��W��(��A>�N��K,b[`�-)i��4>7�ūA��L���L�G��sL8>N�f_����xbKЊ�tL�<���e�idG˥�����K�J`�r��I$�Z��M�.h��:Fo���^�g��M�O��ׁ�"3�22��.,���r�J�[�:����.��_e��lm�X��ʆ�AցߦⅮjX�$4_V�%-���Յ�f���K2��v��&�`L8�8�:�2���U��F�q�n����'O\F��pI���ne��Ķ���#ҭ�I9D��0��AS0w�*#lg WǗu3�2l�A�-�O�����a*C���2cX`�j^3e�*gؑ 9ׁ̇�L�	ty��j�n�U�0�A��: [)�:AF�On����ޠӋ2�m¦t�uUo�׹�x�_��M���҂	���2��S��"�5�O�!��7dh�7�-Ju�v�Gl��FR���X���6��n�F��y���{�Z0��[��ɬ�Ӹ0&4�X�h)2�>�7PZ�f�St��M��x��?�t;{J�����[��5���^h1�~-��6%���j DE���5�
�d�;e��I�o�qE!4�w�d�S\�֫��K�;��W!?U���7�q"ϣ����y$���e[�~/uDݒ��V��MO�t�Z��ݲ��|��R�X:k�5j��3��\ڷ�lt{7�{�W��Z8�M��&~��V����;Ig�n[���J�^/��d7O���Z�N-��.���]�0��d$��O$�aL����A�<^���rO���*�L�ca� &��/�L+����`M�����MqWHЖ".�;�^��o��5�Λ�Q�,=�2�~͜&����#='� ��j�mv/��޾�Q��������Q����
O/���6$F�ug�߯?�O��Y�ݹz��"�Q��='��ݖ_TЭ�;�	�E��G�'�����8|� ��\啦0z���O�mru7�q�p^��C�ek
��_��~p{��_P/�趻��%=]5�̵�d��TP��X��:6}<� {W�8�gձ�j�������	t�_���ڭ�X���ܢSP�fE��gi�C���Q|D��~�EF <�s�׸�qY`-��g�%���*�����Zŷ1�!�9Sgq,Ռ��p��{W05��8(�*��A�w��
ѽx���0=�j����	���}�`ƹbu�HtMw��P�),H�I�x���J=�*ʴ�q���
W7[]��rra~�\���A=?�l;�cA>�b҆d�t<;/�������ܶ���|s��ʕ�n�V`Ǚ��j�a:�:�Ѩh NJBZ�ni�f2{m�n��0���V,�L�T���!��p�6HR�B��sc�r[1�w����,��J]����+j���+�C��k��̆�o*�>�&6 I/Y�8��G\�7f�!` !\�_t��,�鰵O~0�FIi�29���pR�J��a���n|T����ۦ��й�*[[����v���HW>5l��W�
C�3���q1��l��N6��{���iD��<����
�&��EC.���eZ��8Uŭ�
�G��v��ݘb�"zi�&�_8�psЭ�Nc���Q��d��*������+�:ӸC�doy��,w�HE׻�f��xy��3"�.�_�*<��l߳�tzn������v<�*X�^�io��\�z���w�.]#��

is�h4�9�]Uyy(n������I���yE���'�6I��H��:�l8����+fP�j��Z�?�>��O��[������[�v�����ߍ�&x_mf��?a��S��v�ƵWT��ݠt����|�;��ݗ�0�������
�Wͩ�_B����@I�l�铝u�6.�����AG�XÖak猪�v������A-%�F�(4�\���݇�����Z�t��-�������g��f     