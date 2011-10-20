#
# Table structure for table 'tx_grbzlbfile_domain_model_category'
#
CREATE TABLE tx_grbzlbfile_domain_model_category (
	uid int(11) unsigned DEFAULT '0' NOT NULL auto_increment,
	pid int(11) DEFAULT '0' NOT NULL,
	
	
	title varchar(255) DEFAULT '' NOT NULL,

	tstamp int(11) unsigned DEFAULT '0' NOT NULL,
	crdate int(11) unsigned DEFAULT '0' NOT NULL,
	deleted tinyint(4) unsigned DEFAULT '0' NOT NULL,
	hidden tinyint(4) unsigned DEFAULT '0' NOT NULL,
	starttime int(11) unsigned DEFAULT '0' NOT NULL,
	endtime int(11) unsigned DEFAULT '0' NOT NULL,

	t3ver_oid int(11) DEFAULT '0' NOT NULL,
	t3ver_id int(11) DEFAULT '0' NOT NULL,
	t3ver_wsid int(11) DEFAULT '0' NOT NULL,
	t3ver_label varchar(30) DEFAULT '' NOT NULL,
	t3ver_state tinyint(4) DEFAULT '0' NOT NULL,
	t3ver_stage tinyint(4) DEFAULT '0' NOT NULL,
	t3ver_count int(11) DEFAULT '0' NOT NULL,
	t3ver_tstamp int(11) DEFAULT '0' NOT NULL,
	t3ver_move_id int(11) DEFAULT '0' NOT NULL,
	t3_origuid int(11) DEFAULT '0' NOT NULL,

	sys_language_uid int(11) DEFAULT '0' NOT NULL,
	l10n_parent int(11) DEFAULT '0' NOT NULL,
	l10n_diffsource mediumblob NOT NULL,

	PRIMARY KEY (uid),
	KEY parent (pid),
	KEY t3ver_oid (t3ver_oid,t3ver_wsid)
);


#
# Table structure for table 'tx_grbzlbfile_domain_model_document'
#
CREATE TABLE tx_grbzlbfile_domain_model_document (
	uid int(11) unsigned DEFAULT '0' NOT NULL auto_increment,
	pid int(11) DEFAULT '0' NOT NULL,
	
	
	headline varchar(255) DEFAULT '' NOT NULL,
	owner varchar(255) DEFAULT '' NOT NULL,
	description text NOT NULL,
	file text NOT NULL,
	frontend_access int(11) unsigned DEFAULT '0' NOT NULL,
	favorited_by_frontend_user int(11) unsigned DEFAULT '0' NOT NULL,
	categorys int(11) unsigned DEFAULT '0' NOT NULL,

	tstamp int(11) unsigned DEFAULT '0' NOT NULL,
	crdate int(11) unsigned DEFAULT '0' NOT NULL,
	deleted tinyint(4) unsigned DEFAULT '0' NOT NULL,
	hidden tinyint(4) unsigned DEFAULT '0' NOT NULL,
	starttime int(11) unsigned DEFAULT '0' NOT NULL,
	endtime int(11) unsigned DEFAULT '0' NOT NULL,

	t3ver_oid int(11) DEFAULT '0' NOT NULL,
	t3ver_id int(11) DEFAULT '0' NOT NULL,
	t3ver_wsid int(11) DEFAULT '0' NOT NULL,
	t3ver_label varchar(30) DEFAULT '' NOT NULL,
	t3ver_state tinyint(4) DEFAULT '0' NOT NULL,
	t3ver_stage tinyint(4) DEFAULT '0' NOT NULL,
	t3ver_count int(11) DEFAULT '0' NOT NULL,
	t3ver_tstamp int(11) DEFAULT '0' NOT NULL,
	t3ver_move_id int(11) DEFAULT '0' NOT NULL,
	t3_origuid int(11) DEFAULT '0' NOT NULL,

	sys_language_uid int(11) DEFAULT '0' NOT NULL,
	l10n_parent int(11) DEFAULT '0' NOT NULL,
	l10n_diffsource mediumblob NOT NULL,

	PRIMARY KEY (uid),
	KEY parent (pid),
	KEY t3ver_oid (t3ver_oid,t3ver_wsid)
);


#
# Table structure for table 'tx_grbzlbfile_domain_model_frontenduser'
#
#CREATE TABLE tx_grbzlbfile_domain_model_frontenduser (
#	uid int(11) unsigned DEFAULT '0' NOT NULL auto_increment,
#	pid int(11) DEFAULT '0' NOT NULL,
#	
#	
#	username varchar(255) DEFAULT '' NOT NULL,
#	fe_user_groups int(11) unsigned DEFAULT '0' NOT NULL,
#
#	tstamp int(11) unsigned DEFAULT '0' NOT NULL,
#	crdate int(11) unsigned DEFAULT '0' NOT NULL,
#	deleted tinyint(4) unsigned DEFAULT '0' NOT NULL,
#	hidden tinyint(4) unsigned DEFAULT '0' NOT NULL,
#	starttime int(11) unsigned DEFAULT '0' NOT NULL,
#	endtime int(11) unsigned DEFAULT '0' NOT NULL,
#
#	t3ver_oid int(11) DEFAULT '0' NOT NULL,
#	t3ver_id int(11) DEFAULT '0' NOT NULL,
#	t3ver_wsid int(11) DEFAULT '0' NOT NULL,
#	t3ver_label varchar(30) DEFAULT '' NOT NULL,
#	t3ver_state tinyint(4) DEFAULT '0' NOT NULL,
#	t3ver_stage tinyint(4) DEFAULT '0' NOT NULL,
#	t3ver_count int(11) DEFAULT '0' NOT NULL,
#	t3ver_tstamp int(11) DEFAULT '0' NOT NULL,
#	t3ver_move_id int(11) DEFAULT '0' NOT NULL,
#	t3_origuid int(11) DEFAULT '0' NOT NULL,
#
#	sys_language_uid int(11) DEFAULT '0' NOT NULL,
#	l10n_parent int(11) DEFAULT '0' NOT NULL,
#	l10n_diffsource mediumblob NOT NULL,
#
#	PRIMARY KEY (uid),
#	KEY parent (pid),
#	KEY t3ver_oid (t3ver_oid,t3ver_wsid)
#);
#
#
# Table structure for table 'tx_grbzlbfile_domain_model_frontendusergroup'
#
#CREATE TABLE tx_grbzlbfile_domain_model_frontendusergroup (
#	uid int(11) unsigned DEFAULT '0' NOT NULL auto_increment,
#	pid int(11) DEFAULT '0' NOT NULL,
#	
#	
#	title varchar(255) DEFAULT '' NOT NULL,
#
#	tstamp int(11) unsigned DEFAULT '0' NOT NULL,
#	crdate int(11) unsigned DEFAULT '0' NOT NULL,
#	deleted tinyint(4) unsigned DEFAULT '0' NOT NULL,
#	hidden tinyint(4) unsigned DEFAULT '0' NOT NULL,
#	starttime int(11) unsigned DEFAULT '0' NOT NULL,
#	endtime int(11) unsigned DEFAULT '0' NOT NULL,
#
#	t3ver_oid int(11) DEFAULT '0' NOT NULL,
#	t3ver_id int(11) DEFAULT '0' NOT NULL,
#	t3ver_wsid int(11) DEFAULT '0' NOT NULL,
#	t3ver_label varchar(30) DEFAULT '' NOT NULL,
#	t3ver_state tinyint(4) DEFAULT '0' NOT NULL,
#	t3ver_stage tinyint(4) DEFAULT '0' NOT NULL,
#	t3ver_count int(11) DEFAULT '0' NOT NULL,
#	t3ver_tstamp int(11) DEFAULT '0' NOT NULL,
#	t3ver_move_id int(11) DEFAULT '0' NOT NULL,
#	t3_origuid int(11) DEFAULT '0' NOT NULL,
#
#	sys_language_uid int(11) DEFAULT '0' NOT NULL,
#	l10n_parent int(11) DEFAULT '0' NOT NULL,
#	l10n_diffsource mediumblob NOT NULL,
#
#	PRIMARY KEY (uid),
#	KEY parent (pid),
#	KEY t3ver_oid (t3ver_oid,t3ver_wsid)
#);

#
# Table structure for table 'tx_grbzlbfile_document_frontendusergroup_mm'
#
CREATE TABLE tx_grbzlbfile_document_frontendusergroup_mm (
	uid_local int(11) unsigned DEFAULT '0' NOT NULL,
	uid_foreign int(11) unsigned DEFAULT '0' NOT NULL,
	sorting int(11) unsigned DEFAULT '0' NOT NULL,
	sorting_foreign int(11) unsigned DEFAULT '0' NOT NULL,

	KEY uid_local (uid_local),
	KEY uid_foreign (uid_foreign)
);


#
# Table structure for table 'tx_grbzlbfile_document_frontenduser_mm'
#
CREATE TABLE tx_grbzlbfile_document_frontenduser_mm (
	uid_local int(11) unsigned DEFAULT '0' NOT NULL,
	uid_foreign int(11) unsigned DEFAULT '0' NOT NULL,
	sorting int(11) unsigned DEFAULT '0' NOT NULL,
	sorting_foreign int(11) unsigned DEFAULT '0' NOT NULL,

	KEY uid_local (uid_local),
	KEY uid_foreign (uid_foreign)
);


#
# Table structure for table 'tx_grbzlbfile_document_category_mm'
#
CREATE TABLE tx_grbzlbfile_document_category_mm (
	uid_local int(11) unsigned DEFAULT '0' NOT NULL,
	uid_foreign int(11) unsigned DEFAULT '0' NOT NULL,
	sorting int(11) unsigned DEFAULT '0' NOT NULL,
	sorting_foreign int(11) unsigned DEFAULT '0' NOT NULL,

	KEY uid_local (uid_local),
	KEY uid_foreign (uid_foreign)
);


#
# Table structure for table 'tx_grbzlbfile_frontenduser_frontendusergroup_mm'
#
CREATE TABLE tx_grbzlbfile_frontenduser_frontendusergroup_mm (
	uid_local int(11) unsigned DEFAULT '0' NOT NULL,
	uid_foreign int(11) unsigned DEFAULT '0' NOT NULL,
	sorting int(11) unsigned DEFAULT '0' NOT NULL,
	sorting_foreign int(11) unsigned DEFAULT '0' NOT NULL,

	KEY uid_local (uid_local),
	KEY uid_foreign (uid_foreign)
);