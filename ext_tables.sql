#
# Table structure for table 'tx_msrouten_domain_model_routes'
#
CREATE TABLE tx_msrouten_domain_model_routes (

	uid int(11) NOT NULL auto_increment,
	pid int(11) DEFAULT '0' NOT NULL,

	routen_name varchar(255) DEFAULT '' NOT NULL,
	level_short varchar(255) DEFAULT '' NOT NULL,
	erstbegeher varchar(255) DEFAULT '' NOT NULL,
	level varchar(255) DEFAULT '' NOT NULL,
	elevel varchar(255) DEFAULT '' NOT NULL,
	alevel varchar(255) DEFAULT '' NOT NULL,
	climbtime varchar(255) DEFAULT '' NOT NULL,
	climbdistance varchar(255) DEFAULT '' NOT NULL,
	exposition varchar(255) DEFAULT '' NOT NULL,
	wandhoehe varchar(255) DEFAULT '' NOT NULL,
	material varchar(255) DEFAULT '' NOT NULL,
	beauty int(11) DEFAULT '0' NOT NULL,
	frequenz int(11) DEFAULT '0' NOT NULL,
	route_description text NOT NULL,
	level_long text NOT NULL,
	absicherung text NOT NULL,
	zustieg text NOT NULL,
	einstieg text NOT NULL,
	huette text NOT NULL,
	hints text NOT NULL,
	abstieg text NOT NULL,
	verlauf  text NOT NULL,
	erstbegeher_lang text NOT NULL,
	quelle text NOT NULL,
	topo text NOT NULL,
	topo_bu text NOT NULL,
	topo_alt text NOT NULL,
	topo_title text NOT NULL,
	wandbild text NOT NULL,
	wandbild_bu text NOT NULL,
	wandbild_alt text NOT NULL,
	wandbild_title text NOT NULL,
	action_bild1 text NOT NULL,
	action_bild1_bu text NOT NULL,
	action_bild1_alt text NOT NULL,
	actionbild1_title text NOT NULL,
	action_bild2 text NOT NULL,
	action_bild2_bu text NOT NULL,
	action_bild2_alt text NOT NULL,
	action_bild2_title text NOT NULL,
	action_bild3 text NOT NULL,
	action_bild3_bu text NOT NULL,
	action_bild3_alt text NOT NULL,
	action_bild3_title text NOT NULL,
	galerie text NOT NULL,
	pdf text NOT NULL,
	linkextern text NOT NULL,
	walls int(11) unsigned DEFAULT '0',
	guide int(11) unsigned DEFAULT '0',

	tstamp int(11) unsigned DEFAULT '0' NOT NULL,
	crdate int(11) unsigned DEFAULT '0' NOT NULL,
	cruser_id int(11) unsigned DEFAULT '0' NOT NULL,
	deleted tinyint(4) unsigned DEFAULT '0' NOT NULL,
	hidden tinyint(4) unsigned DEFAULT '0' NOT NULL,
	starttime int(11) unsigned DEFAULT '0' NOT NULL,
	endtime int(11) unsigned DEFAULT '0' NOT NULL,

	t3ver_oid int(11) DEFAULT '0' NOT NULL,
	t3ver_id int(11) DEFAULT '0' NOT NULL,
	t3ver_wsid int(11) DEFAULT '0' NOT NULL,
	t3ver_label varchar(255) DEFAULT '' NOT NULL,
	t3ver_state tinyint(4) DEFAULT '0' NOT NULL,
	t3ver_stage int(11) DEFAULT '0' NOT NULL,
	t3ver_count int(11) DEFAULT '0' NOT NULL,
	t3ver_tstamp int(11) DEFAULT '0' NOT NULL,
	t3ver_move_id int(11) DEFAULT '0' NOT NULL,

	t3_origuid int(11) DEFAULT '0' NOT NULL,
	sys_language_uid int(11) DEFAULT '0' NOT NULL,
	l10n_parent int(11) DEFAULT '0' NOT NULL,
	l10n_diffsource mediumblob,

	PRIMARY KEY (uid),
	KEY parent (pid),
	KEY t3ver_oid (t3ver_oid,t3ver_wsid),
	KEY language (l10n_parent,sys_language_uid)

);

#
# Table structure for table 'tx_msrouten_domain_model_mounts'
#
CREATE TABLE tx_msrouten_domain_model_mounts (

	uid int(11) NOT NULL auto_increment,
	pid int(11) DEFAULT '0' NOT NULL,

	mount_name varchar(255) DEFAULT '' NOT NULL,
	mount_description text NOT NULL,
	height text NOT NULL,
	 `mount_location_n`  varchar(20) NOT NULL DEFAULT '0.00000000',
  `mount_location_o` varchar(20) NOT NULL DEFAULT '0.00000000',
	mount_way_to_top text NOT NULL,
	mount_way_to_bot text NOT NULL,
	gebirge int(11) unsigned DEFAULT '0',
	karte int(11) unsigned DEFAULT '0',

	tstamp int(11) unsigned DEFAULT '0' NOT NULL,
	crdate int(11) unsigned DEFAULT '0' NOT NULL,
	cruser_id int(11) unsigned DEFAULT '0' NOT NULL,
	deleted tinyint(4) unsigned DEFAULT '0' NOT NULL,
	hidden tinyint(4) unsigned DEFAULT '0' NOT NULL,
	starttime int(11) unsigned DEFAULT '0' NOT NULL,
	endtime int(11) unsigned DEFAULT '0' NOT NULL,

	t3ver_oid int(11) DEFAULT '0' NOT NULL,
	t3ver_id int(11) DEFAULT '0' NOT NULL,
	t3ver_wsid int(11) DEFAULT '0' NOT NULL,
	t3ver_label varchar(255) DEFAULT '' NOT NULL,
	t3ver_state tinyint(4) DEFAULT '0' NOT NULL,
	t3ver_stage int(11) DEFAULT '0' NOT NULL,
	t3ver_count int(11) DEFAULT '0' NOT NULL,
	t3ver_tstamp int(11) DEFAULT '0' NOT NULL,
	t3ver_move_id int(11) DEFAULT '0' NOT NULL,

	t3_origuid int(11) DEFAULT '0' NOT NULL,
	sys_language_uid int(11) DEFAULT '0' NOT NULL,
	l10n_parent int(11) DEFAULT '0' NOT NULL,
	l10n_diffsource mediumblob,

	PRIMARY KEY (uid),
	KEY parent (pid),
	KEY t3ver_oid (t3ver_oid,t3ver_wsid),
	KEY language (l10n_parent,sys_language_uid)

);

#
# Table structure for table 'tx_msrouten_domain_model_walls'
#
CREATE TABLE tx_msrouten_domain_model_walls (

	uid int(11) NOT NULL auto_increment,
	pid int(11) DEFAULT '0' NOT NULL,

	wall_name varchar(255) DEFAULT '' NOT NULL,
	wall_description text NOT NULL,
	wall_height int(11) DEFAULT '0' NOT NULL,
	wall_pictures int(11) unsigned DEFAULT '0',
	mounts int(11) unsigned DEFAULT '0',

	tstamp int(11) unsigned DEFAULT '0' NOT NULL,
	crdate int(11) unsigned DEFAULT '0' NOT NULL,
	cruser_id int(11) unsigned DEFAULT '0' NOT NULL,
	deleted tinyint(4) unsigned DEFAULT '0' NOT NULL,
	hidden tinyint(4) unsigned DEFAULT '0' NOT NULL,
	starttime int(11) unsigned DEFAULT '0' NOT NULL,
	endtime int(11) unsigned DEFAULT '0' NOT NULL,

	t3ver_oid int(11) DEFAULT '0' NOT NULL,
	t3ver_id int(11) DEFAULT '0' NOT NULL,
	t3ver_wsid int(11) DEFAULT '0' NOT NULL,
	t3ver_label varchar(255) DEFAULT '' NOT NULL,
	t3ver_state tinyint(4) DEFAULT '0' NOT NULL,
	t3ver_stage int(11) DEFAULT '0' NOT NULL,
	t3ver_count int(11) DEFAULT '0' NOT NULL,
	t3ver_tstamp int(11) DEFAULT '0' NOT NULL,
	t3ver_move_id int(11) DEFAULT '0' NOT NULL,

	t3_origuid int(11) DEFAULT '0' NOT NULL,
	sys_language_uid int(11) DEFAULT '0' NOT NULL,
	l10n_parent int(11) DEFAULT '0' NOT NULL,
	l10n_diffsource mediumblob,

	PRIMARY KEY (uid),
	KEY parent (pid),
	KEY t3ver_oid (t3ver_oid,t3ver_wsid),
	KEY language (l10n_parent,sys_language_uid)

);

#
# Table structure for table 'tx_msrouten_domain_model_pictures'
#
CREATE TABLE tx_msrouten_domain_model_pictures (

	uid int(11) NOT NULL auto_increment,
	pid int(11) DEFAULT '0' NOT NULL,

	picture_wall text NOT NULL,
	wall_pic_bu text NOT NULL,
	wall_pic_alt text NOT NULL,
	wall_pic_title text NOT NULL,

	tstamp int(11) unsigned DEFAULT '0' NOT NULL,
	crdate int(11) unsigned DEFAULT '0' NOT NULL,
	cruser_id int(11) unsigned DEFAULT '0' NOT NULL,
	deleted tinyint(4) unsigned DEFAULT '0' NOT NULL,
	hidden tinyint(4) unsigned DEFAULT '0' NOT NULL,
	starttime int(11) unsigned DEFAULT '0' NOT NULL,
	endtime int(11) unsigned DEFAULT '0' NOT NULL,

	t3ver_oid int(11) DEFAULT '0' NOT NULL,
	t3ver_id int(11) DEFAULT '0' NOT NULL,
	t3ver_wsid int(11) DEFAULT '0' NOT NULL,
	t3ver_label varchar(255) DEFAULT '' NOT NULL,
	t3ver_state tinyint(4) DEFAULT '0' NOT NULL,
	t3ver_stage int(11) DEFAULT '0' NOT NULL,
	t3ver_count int(11) DEFAULT '0' NOT NULL,
	t3ver_tstamp int(11) DEFAULT '0' NOT NULL,
	t3ver_move_id int(11) DEFAULT '0' NOT NULL,

	t3_origuid int(11) DEFAULT '0' NOT NULL,
	sys_language_uid int(11) DEFAULT '0' NOT NULL,
	l10n_parent int(11) DEFAULT '0' NOT NULL,
	l10n_diffsource mediumblob,

	PRIMARY KEY (uid),
	KEY parent (pid),
	KEY t3ver_oid (t3ver_oid,t3ver_wsid),
	KEY language (l10n_parent,sys_language_uid)

);

#
# Table structure for table 'tt_news'
#
CREATE TABLE tt_news (

	guide_name varchar(255) DEFAULT '' NOT NULL,
	guide_description text NOT NULL,
	guide_author varchar(255) DEFAULT '' NOT NULL,
	guide_i_s_b_n int(11) DEFAULT '0' NOT NULL,
	guide_price varchar(255) DEFAULT '' NOT NULL,

);

#
# Table structure for table 'tx_msrouten_domain_model_karten'
#
CREATE TABLE tx_msrouten_domain_model_karten (

	uid int(11) NOT NULL auto_increment,
	pid int(11) DEFAULT '0' NOT NULL,

	karten_name varchar(255) DEFAULT '' NOT NULL,
	nummer varchar(255) DEFAULT '' NOT NULL,
	massstab varchar(255) DEFAULT '' NOT NULL,
	land varchar(255) DEFAULT '' NOT NULL,
	isbn13 varchar(255) DEFAULT '' NOT NULL,
	asin varchar(255) DEFAULT '' NOT NULL,
	stand varchar(255) DEFAULT '' NOT NULL,
	zone int(11) DEFAULT '0' NOT NULL,
	li_unten_utm_rechts int(11) DEFAULT '0' NOT NULL,
	uli_unten_utm_hoch int(11) DEFAULT '0' NOT NULL,
	li_oben_utm_rechts int(11) DEFAULT '0' NOT NULL,
	li_oben_utm_hoch int(11) DEFAULT '0' NOT NULL,
	re_oben_utm_rechts int(11) DEFAULT '0' NOT NULL,
	re_oben_utm_hoch int(11) DEFAULT '0' NOT NULL,
	re_unten_utm_rechts int(11) DEFAULT '0' NOT NULL,
	re_unten_utm_hoch int(11) DEFAULT '0' NOT NULL,
	zone2 int(11) DEFAULT '0' NOT NULL,
	li_unten_utm_rechts2 int(11) DEFAULT '0' NOT NULL,
	li_unten_utm_hoch2 int(11) DEFAULT '0' NOT NULL,
	li_oben_utm_rechts2 int(11) DEFAULT '0' NOT NULL,
	li_oben_utm_hoch2 int(11) DEFAULT '0' NOT NULL,
	re_oben_utm_rechts2 int(11) DEFAULT '0' NOT NULL,
	re_oben_utm_hoch2 int(11) DEFAULT '0' NOT NULL,
	re_unten_utm_rechts2 int(11) DEFAULT '0' NOT NULL,
	re_unten_utm_hoch2 int(11) DEFAULT '0' NOT NULL,

	tstamp int(11) unsigned DEFAULT '0' NOT NULL,
	crdate int(11) unsigned DEFAULT '0' NOT NULL,
	cruser_id int(11) unsigned DEFAULT '0' NOT NULL,
	deleted tinyint(4) unsigned DEFAULT '0' NOT NULL,
	hidden tinyint(4) unsigned DEFAULT '0' NOT NULL,
	starttime int(11) unsigned DEFAULT '0' NOT NULL,
	endtime int(11) unsigned DEFAULT '0' NOT NULL,

	t3ver_oid int(11) DEFAULT '0' NOT NULL,
	t3ver_id int(11) DEFAULT '0' NOT NULL,
	t3ver_wsid int(11) DEFAULT '0' NOT NULL,
	t3ver_label varchar(255) DEFAULT '' NOT NULL,
	t3ver_state tinyint(4) DEFAULT '0' NOT NULL,
	t3ver_stage int(11) DEFAULT '0' NOT NULL,
	t3ver_count int(11) DEFAULT '0' NOT NULL,
	t3ver_tstamp int(11) DEFAULT '0' NOT NULL,
	t3ver_move_id int(11) DEFAULT '0' NOT NULL,

	t3_origuid int(11) DEFAULT '0' NOT NULL,
	sys_language_uid int(11) DEFAULT '0' NOT NULL,
	l10n_parent int(11) DEFAULT '0' NOT NULL,
	l10n_diffsource mediumblob,

	PRIMARY KEY (uid),
	KEY parent (pid),
	KEY t3ver_oid (t3ver_oid,t3ver_wsid),
	KEY language (l10n_parent,sys_language_uid)

);

#
# Table structure for table 'tx_msrouten_domain_model_gebirge'
#
CREATE TABLE tx_msrouten_domain_model_gebirge (

	uid int(11) NOT NULL auto_increment,
	pid int(11) DEFAULT '0' NOT NULL,

	gebirge varchar(255) DEFAULT '' NOT NULL,

	tstamp int(11) unsigned DEFAULT '0' NOT NULL,
	crdate int(11) unsigned DEFAULT '0' NOT NULL,
	cruser_id int(11) unsigned DEFAULT '0' NOT NULL,
	deleted tinyint(4) unsigned DEFAULT '0' NOT NULL,
	hidden tinyint(4) unsigned DEFAULT '0' NOT NULL,
	starttime int(11) unsigned DEFAULT '0' NOT NULL,
	endtime int(11) unsigned DEFAULT '0' NOT NULL,

	t3ver_oid int(11) DEFAULT '0' NOT NULL,
	t3ver_id int(11) DEFAULT '0' NOT NULL,
	t3ver_wsid int(11) DEFAULT '0' NOT NULL,
	t3ver_label varchar(255) DEFAULT '' NOT NULL,
	t3ver_state tinyint(4) DEFAULT '0' NOT NULL,
	t3ver_stage int(11) DEFAULT '0' NOT NULL,
	t3ver_count int(11) DEFAULT '0' NOT NULL,
	t3ver_tstamp int(11) DEFAULT '0' NOT NULL,
	t3ver_move_id int(11) DEFAULT '0' NOT NULL,

	t3_origuid int(11) DEFAULT '0' NOT NULL,
	sys_language_uid int(11) DEFAULT '0' NOT NULL,
	l10n_parent int(11) DEFAULT '0' NOT NULL,
	l10n_diffsource mediumblob,

	PRIMARY KEY (uid),
	KEY parent (pid),
	KEY t3ver_oid (t3ver_oid,t3ver_wsid),
	KEY language (l10n_parent,sys_language_uid)

);