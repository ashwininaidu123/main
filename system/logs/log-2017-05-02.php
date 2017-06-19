<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed'); ?>

[2017-05-02 10:37:17]	DEBUG :	Config Class Initialized
[2017-05-02 10:37:17]	DEBUG :	Hooks Class Initialized
[2017-05-02 10:37:17]	DEBUG :	URI Class Initialized
[2017-05-02 10:37:17]	DEBUG :	Router Class Initialized
[2017-05-02 10:37:17]	DEBUG :	Output Class Initialized
[2017-05-02 10:37:17]	DEBUG :	Input Class Initialized
[2017-05-02 10:37:17]	DEBUG :	Global POST and COOKIE data sanitized
[2017-05-02 10:37:17]	DEBUG :	Language Class Initialized
[2017-05-02 10:37:17]	DEBUG :	Loader Class Initialized
[2017-05-02 10:37:17]	DEBUG :	Helper loaded: url_helper
[2017-05-02 10:37:17]	DEBUG :	Helper loaded: form_helper
[2017-05-02 10:37:17]	DEBUG :	Helper loaded: html_helper
[2017-05-02 10:37:17]	DEBUG :	Helper loaded: email_helper
[2017-05-02 10:37:17]	DEBUG :	Helper loaded: ckeditor_helper
[2017-05-02 10:37:17]	DEBUG :	Helper loaded: mcube_helper
[2017-05-02 10:37:17]	DEBUG :	Database Driver Class Initialized
[2017-05-02 10:37:17]	ERROR :	Severity: 8192  --> mysql_pconnect(): The mysql extension is deprecated and will be removed in the future: use mysqli or PDO instead /var/www/html/mcnew/system/database/drivers/mysql/mysql_driver.php 88
[2017-05-02 10:37:17]	DEBUG :	Session Class Initialized
[2017-05-02 10:37:17]	DEBUG :	Helper loaded: string_helper
[2017-05-02 10:37:17]	DEBUG :	Encrypt Class Initialized
[2017-05-02 10:37:17]	DEBUG :	A session cookie was not found.
[2017-05-02 10:37:17]	SQL :	INSERT INTO `call_sessions` (`session_id`, `ip_address`, `user_agent`, `last_activity`) VALUES ('10e6456bc6acd7b8e9a0d6923979ee1e', '192.168.1.124', 'Dalvik/2.1.0 (Linux; U; Android 6.0; Panasonic T44', 1493701637)
[2017-05-02 10:37:18]	DEBUG :	Session routines successfully run
[2017-05-02 10:37:18]	DEBUG :	Table Class Initialized
[2017-05-02 10:37:18]	DEBUG :	Pagination Class Initialized
[2017-05-02 10:37:18]	DEBUG :	Config file loaded: config/paypallib_config.php
[2017-05-02 10:37:18]	DEBUG :	Form Validation Class Initialized
[2017-05-02 10:37:18]	DEBUG :	Email Class Initialized
[2017-05-02 10:37:18]	DEBUG :	Language file loaded: language/english/calendar_lang.php
[2017-05-02 10:37:18]	DEBUG :	Calendar Class Initialized
[2017-05-02 10:37:18]	DEBUG :	Controller Class Initialized
[2017-05-02 10:37:18]	DEBUG :	Model Class Initialized
[2017-05-02 10:37:18]	DEBUG :	Model Class Initialized
[2017-05-02 10:37:18]	DEBUG :	Model Class Initialized
[2017-05-02 10:37:18]	DEBUG :	Model Class Initialized
[2017-05-02 10:37:18]	DEBUG :	Model Class Initialized
[2017-05-02 10:37:18]	DEBUG :	Model Class Initialized
[2017-05-02 10:37:18]	DEBUG :	Model Class Initialized
[2017-05-02 10:37:18]	DEBUG :	Model Class Initialized
[2017-05-02 10:37:18]	DEBUG :	Model Class Initialized
[2017-05-02 10:37:18]	DEBUG :	Model Class Initialized
[2017-05-02 10:37:18]	DEBUG :	Model Class Initialized
[2017-05-02 10:37:18]	DEBUG :	Model Class Initialized
[2017-05-02 10:37:18]	DEBUG :	Model Class Initialized
[2017-05-02 10:37:18]	DEBUG :	Model Class Initialized
[2017-05-02 10:37:18]	DEBUG :	Plugin loaded: to_pdf_pi
[2017-05-02 10:37:18]	DEBUG :	Model Class Initialized
[2017-05-02 10:37:18]	DEBUG :	Language file loaded: language/english/form_validation_lang.php
[2017-05-02 10:37:18]	SQL :	SELECT uid,bid,eid FROM `user` WHERE authkey='1.1.d886b8e8a0615'
[2017-05-02 10:37:18]	DEBUG :	Database Driver Class Initialized
[2017-05-02 10:37:18]	SQL :	SELECT roleid FROM 1_employee
							WHERE eid='1'
							AND bid='1'
[2017-05-02 10:37:18]	DEBUG :	Database Driver Class Initialized
[2017-05-02 10:37:18]	SQL :	SELECT * FROM 1_user_role
							WHERE roleid='1'
							AND bid='1'
[2017-05-02 10:37:18]	SQL :	SELECT m.modid,m.modname,m.moddesc,
							COALESCE(o.opt_add,0) as opt_add,
							COALESCE(o.opt_view,0) as opt_view,
							COALESCE(o.opt_download,0) as opt_download,
							COALESCE(opt_delete,0) as opt_delete 
							FROM module m
							LEFT JOIN (SELECT * FROM 1_role_mod_opt
							WHERE roleid='1' 
							AND bid='1') as o
							ON m.modid=o.modid where m.status=1
[2017-05-02 10:37:18]	SQL :	SELECT a.*,f.fieldname FROM 1_role_access a
								LEFT JOIN systemfields f on a.fieldid=f.fieldid
								WHERE a.roleid='1'
								AND a.bid='1'
								AND a.fieldtype='s'
[2017-05-02 10:37:18]	SQL :	SELECT * FROM 1_role_access
								WHERE roleid='1'
								AND bid='1'
							AND fieldtype='c'
[2017-05-02 10:37:18]	SQL :	SELECT pri.landingnumber,pri.used,pri.climit,
								if(pri.status=0,'Not in use',
								if(pri.type='0','Calltrack',
								if(pri.type='1','IVRS',
								if(pri.type='2','PBX','Not Assign')))) as type,
								pri.associateid,
								if(pri.status=0,'None',
								if(pri.type='0',g.groupname,
								if(pri.type='1',i.title,
								if(pri.type='2',pbx.title,'None')))) as title,
								if(pri.status=0,'None',
								if(pri.type='0',ch.lastcall,
								if(pri.type='1',ih.lastcall,
								if(pri.type='2',ph.lastcall,'None')))) as lastcall
								FROM prinumbers pri
								LEFT JOIN 1_groups g on (g.prinumber=pri.number AND g.gid=pri.associateid AND g.status=1)
								LEFT JOIN 1_ivrs i on (i.prinumber=pri.number AND i.ivrsid=pri.associateid AND i.status=1)
								LEFT JOIN 1_pbx pbx on (pbx.prinumber=pri.number AND pbx.pbxid=pri.associateid AND pbx.status=1)
								LEFT JOIN (SELECT g.gid,max(h.starttime) as lastcall FROM 1_groups g LEFT JOIN 1_callhistory h on g.gid=h.gid GROUP BY g.gid) ch on g.gid=ch.gid
								LEFT JOIN (SELECT i.ivrsid,max(h.datetime) as lastcall FROM 1_ivrs i LEFT JOIN 1_ivrshistory h on i.ivrsid=h.ivrsid GROUP BY i.ivrsid) ih on i.ivrsid=ih.ivrsid
								LEFT JOIN (SELECT p.pbxid,max(h.starttime) as lastcall FROM 1_pbx p LEFT JOIN 1_pbxreport h on p.pbxid=h.pbxid GROUP BY p.pbxid) ph on pbx.pbxid=ph.pbxid
								WHERE pri.bid=1
[2017-05-02 10:37:18]	SQL :	SELECT balance FROM sms_bal  where bid='1'
[2017-05-02 10:37:18]	SQL :	SELECT balance FROM call_bal where bid='1'
[2017-05-02 10:37:18]	SQL :	SELECT DISTINCT(e.eid),e.empname,eb.start_time FROM 1_employee e
		                       LEFT JOIN 1_emp_break eb ON e.eid = eb.eid
		                       LEFT JOIN 1_groups d ON e.eid = d.eid
		                       WHERE eb.end_time='0000-00-00' AND e.selfdisable=1  GROUP BY d.gid,e.eid
[2017-05-02 10:37:18]	SQL :	SELECT COALESCE(COUNT(callid), 0) AS day 
							FROM 1_callhistory h 
							LEFT JOIN 1_groups d ON d.gid = h.gid 
							WHERE 1 AND (DATE(h.`starttime`) = DATE(NOW()))
[2017-05-02 10:37:18]	SQL :	SELECT COALESCE(COUNT(callid), 0) AS day 
							FROM 1_callhistory h 
							LEFT JOIN 1_groups d ON d.gid = h.gid 
							WHERE 1  AND (DATE(h.`starttime`)  > DATE(DATE_SUB(NOW(), INTERVAL 1 WEEK)))
[2017-05-02 10:37:18]	SQL :	SELECT COALESCE(COUNT(callid), 0) AS day 
							FROM 1_callhistory h 
							LEFT JOIN 1_groups d ON d.gid = h.gid 
							WHERE 1  AND (MONTH(h.`starttime` ) = MONTH(NOW()))
[2017-05-02 10:37:18]	SQL :	SELECT COALESCE(COUNT(pbxid), 0) AS day 
							FROM 1_pbxreport h 
							WHERE 1 AND (DATE(h.`starttime`) = DATE(NOW()))
[2017-05-02 10:37:18]	SQL :	SELECT COALESCE(COUNT(pbxid), 0) AS day 
							FROM 1_pbxreport h 
							WHERE 1  AND (DATE(h.`starttime`)  > DATE(DATE_SUB(NOW(), INTERVAL 1 WEEK)))
[2017-05-02 10:37:18]	SQL :	SELECT COALESCE(COUNT(pbxid), 0) AS day 
							FROM 1_pbxreport h 
							WHERE 1  AND (MONTH(h.`starttime` ) = MONTH(NOW()))
[2017-05-02 10:37:18]	SQL :	SELECT COALESCE(COUNT(hid), 0) AS day 
							   FROM 1_ivrshistory h 
						       WHERE 1 AND (DATE(h.`datetime`) = DATE(NOW()))
[2017-05-02 10:37:18]	SQL :	SELECT COALESCE(COUNT(hid), 0) AS day 
							   FROM 1_ivrshistory h 
						       WHERE 1  AND (DATE(h.`datetime`)  > DATE(DATE_SUB(NOW(), INTERVAL 1 WEEK)))
[2017-05-02 10:37:18]	SQL :	SELECT COALESCE(COUNT(hid), 0) AS day 
							   FROM 1_ivrshistory h 
						       WHERE 1  AND (MONTH(h.`datetime` ) = MONTH(NOW()))
[2017-05-02 10:37:18]	SQL :	SELECT COALESCE(COUNT(leadid), 0) AS day 
							FROM 1_leads a 
							LEFT JOIN 1_leads_groups d ON d.gid = a.gid 
							WHERE (DATE(a.`createdon`) = DATE(NOW()))
[2017-05-02 10:37:18]	SQL :	SELECT COALESCE(COUNT(leadid), 0) AS day 
							FROM 1_leads a 
							LEFT JOIN 1_leads_groups d ON d.gid = a.gid 
							WHERE (DATE(a.`createdon`) = DATE(NOW()))
[2017-05-02 10:37:18]	SQL :	SELECT COALESCE(COUNT(leadid), 0) AS day 
							FROM 1_leads a 
							LEFT JOIN 1_leads_groups d ON d.gid = a.gid 
							WHERE (DATE(a.`createdon`) = DATE(NOW()))
[2017-05-02 10:37:18]	SQL :	SELECT COALESCE(COUNT(tktid), 0) AS day 
							FROM 1_support_tickets a 
							LEFT JOIN 1_support_groups d ON d.gid = a.gid 
							WHERE (DATE(a.`createdon`) = DATE(NOW()))
[2017-05-02 10:37:18]	SQL :	SELECT COALESCE(COUNT(tktid), 0) AS day 
							FROM 1_support_tickets a 
							LEFT JOIN 1_support_groups d ON d.gid = a.gid 
							WHERE (DATE(a.`createdon`) = DATE(NOW()))
[2017-05-02 10:37:18]	SQL :	SELECT COALESCE(COUNT(tktid), 0) AS day 
							FROM 1_support_tickets a 
							LEFT JOIN 1_support_groups d ON d.gid = a.gid 
							WHERE (DATE(a.`createdon`) = DATE(NOW()))
[2017-05-02 10:37:18]	SQL :	SELECT COALESCE(COUNT(callid), 0) AS day 
							FROM 1_outboundcalls h 
							WHERE (DATE(h.`starttime`) = DATE(NOW()))
[2017-05-02 10:37:18]	SQL :	SELECT COALESCE(COUNT(callid), 0) AS day 
							FROM 1_outboundcalls h 
							WHERE (DATE(h.`starttime`) = DATE(NOW()))
[2017-05-02 10:37:18]	SQL :	SELECT COALESCE(COUNT(callid), 0) AS day 
							FROM 1_outboundcalls h 
							WHERE (DATE(h.`starttime`) = DATE(NOW()))
[2017-05-02 10:37:18]	SQL :	SELECT COALESCE(COUNT(callid), 0) AS day 
							FROM 1_mtracker h 
							WHERE (DATE(h.`starttime`) = DATE(NOW()))
[2017-05-02 10:37:18]	SQL :	SELECT COALESCE(COUNT(callid), 0) AS day 
							FROM 1_mtracker h 
							WHERE (DATE(h.`starttime`) = DATE(NOW()))
[2017-05-02 10:37:18]	SQL :	SELECT COALESCE(COUNT(callid), 0) AS day 
							FROM 1_mtracker h 
							WHERE (DATE(h.`starttime`) = DATE(NOW()))
[2017-05-02 10:37:30]	DEBUG :	Config Class Initialized
[2017-05-02 10:37:30]	DEBUG :	Hooks Class Initialized
[2017-05-02 10:37:30]	DEBUG :	URI Class Initialized
[2017-05-02 10:37:30]	DEBUG :	Router Class Initialized
[2017-05-02 10:37:30]	DEBUG :	Output Class Initialized
[2017-05-02 10:37:30]	DEBUG :	Input Class Initialized
[2017-05-02 10:37:30]	DEBUG :	Global POST and COOKIE data sanitized
[2017-05-02 10:37:30]	DEBUG :	Language Class Initialized
[2017-05-02 10:37:30]	DEBUG :	Loader Class Initialized
[2017-05-02 10:37:30]	DEBUG :	Helper loaded: url_helper
[2017-05-02 10:37:30]	DEBUG :	Helper loaded: form_helper
[2017-05-02 10:37:30]	DEBUG :	Helper loaded: html_helper
[2017-05-02 10:37:30]	DEBUG :	Helper loaded: email_helper
[2017-05-02 10:37:30]	DEBUG :	Helper loaded: ckeditor_helper
[2017-05-02 10:37:30]	DEBUG :	Helper loaded: mcube_helper
[2017-05-02 10:37:30]	DEBUG :	Database Driver Class Initialized
[2017-05-02 10:37:30]	ERROR :	Severity: 8192  --> mysql_pconnect(): The mysql extension is deprecated and will be removed in the future: use mysqli or PDO instead /var/www/html/mcnew/system/database/drivers/mysql/mysql_driver.php 88
[2017-05-02 10:37:30]	DEBUG :	Session Class Initialized
[2017-05-02 10:37:30]	DEBUG :	Helper loaded: string_helper
[2017-05-02 10:37:30]	DEBUG :	Encrypt Class Initialized
[2017-05-02 10:37:30]	DEBUG :	A session cookie was not found.
[2017-05-02 10:37:30]	SQL :	INSERT INTO `call_sessions` (`session_id`, `ip_address`, `user_agent`, `last_activity`) VALUES ('d1aaf6bea98f0a6e280342b44c7649dc', '192.168.1.124', 'Dalvik/2.1.0 (Linux; U; Android 6.0; Panasonic T44', 1493701650)
[2017-05-02 10:37:30]	SQL :	DELETE FROM `call_sessions`
WHERE `last_activity` < 1493694450
[2017-05-02 10:37:30]	DEBUG :	Session garbage collection performed.
[2017-05-02 10:37:30]	DEBUG :	Session routines successfully run
[2017-05-02 10:37:30]	DEBUG :	Table Class Initialized
[2017-05-02 10:37:30]	DEBUG :	Pagination Class Initialized
[2017-05-02 10:37:30]	DEBUG :	Config file loaded: config/paypallib_config.php
[2017-05-02 10:37:30]	DEBUG :	Form Validation Class Initialized
[2017-05-02 10:37:30]	DEBUG :	Email Class Initialized
[2017-05-02 10:37:30]	DEBUG :	Language file loaded: language/english/calendar_lang.php
[2017-05-02 10:37:30]	DEBUG :	Calendar Class Initialized
[2017-05-02 10:37:30]	DEBUG :	Controller Class Initialized
[2017-05-02 10:37:30]	DEBUG :	Model Class Initialized
[2017-05-02 10:37:30]	DEBUG :	Model Class Initialized
[2017-05-02 10:37:30]	DEBUG :	Model Class Initialized
[2017-05-02 10:37:30]	DEBUG :	Model Class Initialized
[2017-05-02 10:37:30]	DEBUG :	Model Class Initialized
[2017-05-02 10:37:30]	DEBUG :	Model Class Initialized
[2017-05-02 10:37:30]	DEBUG :	Model Class Initialized
[2017-05-02 10:37:30]	DEBUG :	Model Class Initialized
[2017-05-02 10:37:30]	DEBUG :	Model Class Initialized
[2017-05-02 10:37:30]	DEBUG :	Model Class Initialized
[2017-05-02 10:37:30]	DEBUG :	Model Class Initialized
[2017-05-02 10:37:30]	DEBUG :	Model Class Initialized
[2017-05-02 10:37:30]	DEBUG :	Model Class Initialized
[2017-05-02 10:37:30]	DEBUG :	Model Class Initialized
[2017-05-02 10:37:30]	DEBUG :	Plugin loaded: to_pdf_pi
[2017-05-02 10:37:30]	DEBUG :	Model Class Initialized
[2017-05-02 10:37:30]	DEBUG :	Language file loaded: language/english/form_validation_lang.php
[2017-05-02 10:37:30]	SQL :	SELECT uid,bid,eid FROM `user` WHERE authkey='1.1.d886b8e8a0615'
[2017-05-02 10:37:30]	DEBUG :	Database Driver Class Initialized
[2017-05-02 10:37:30]	SQL :	SELECT roleid FROM 1_employee
							WHERE eid='1'
							AND bid='1'
[2017-05-02 10:37:30]	DEBUG :	Database Driver Class Initialized
[2017-05-02 10:37:30]	SQL :	SELECT * FROM 1_user_role
							WHERE roleid='1'
							AND bid='1'
[2017-05-02 10:37:30]	SQL :	SELECT m.modid,m.modname,m.moddesc,
							COALESCE(o.opt_add,0) as opt_add,
							COALESCE(o.opt_view,0) as opt_view,
							COALESCE(o.opt_download,0) as opt_download,
							COALESCE(opt_delete,0) as opt_delete 
							FROM module m
							LEFT JOIN (SELECT * FROM 1_role_mod_opt
							WHERE roleid='1' 
							AND bid='1') as o
							ON m.modid=o.modid where m.status=1
[2017-05-02 10:37:30]	SQL :	SELECT a.*,f.fieldname FROM 1_role_access a
								LEFT JOIN systemfields f on a.fieldid=f.fieldid
								WHERE a.roleid='1'
								AND a.bid='1'
								AND a.fieldtype='s'
[2017-05-02 10:37:30]	SQL :	SELECT * FROM 1_role_access
								WHERE roleid='1'
								AND bid='1'
							AND fieldtype='c'
[2017-05-02 10:37:30]	SQL :	SELECT pri.landingnumber,pri.used,pri.climit,
								if(pri.status=0,'Not in use',
								if(pri.type='0','Calltrack',
								if(pri.type='1','IVRS',
								if(pri.type='2','PBX','Not Assign')))) as type,
								pri.associateid,
								if(pri.status=0,'None',
								if(pri.type='0',g.groupname,
								if(pri.type='1',i.title,
								if(pri.type='2',pbx.title,'None')))) as title,
								if(pri.status=0,'None',
								if(pri.type='0',ch.lastcall,
								if(pri.type='1',ih.lastcall,
								if(pri.type='2',ph.lastcall,'None')))) as lastcall
								FROM prinumbers pri
								LEFT JOIN 1_groups g on (g.prinumber=pri.number AND g.gid=pri.associateid AND g.status=1)
								LEFT JOIN 1_ivrs i on (i.prinumber=pri.number AND i.ivrsid=pri.associateid AND i.status=1)
								LEFT JOIN 1_pbx pbx on (pbx.prinumber=pri.number AND pbx.pbxid=pri.associateid AND pbx.status=1)
								LEFT JOIN (SELECT g.gid,max(h.starttime) as lastcall FROM 1_groups g LEFT JOIN 1_callhistory h on g.gid=h.gid GROUP BY g.gid) ch on g.gid=ch.gid
								LEFT JOIN (SELECT i.ivrsid,max(h.datetime) as lastcall FROM 1_ivrs i LEFT JOIN 1_ivrshistory h on i.ivrsid=h.ivrsid GROUP BY i.ivrsid) ih on i.ivrsid=ih.ivrsid
								LEFT JOIN (SELECT p.pbxid,max(h.starttime) as lastcall FROM 1_pbx p LEFT JOIN 1_pbxreport h on p.pbxid=h.pbxid GROUP BY p.pbxid) ph on pbx.pbxid=ph.pbxid
								WHERE pri.bid=1
[2017-05-02 10:37:30]	SQL :	SELECT balance FROM sms_bal  where bid='1'
[2017-05-02 10:37:30]	SQL :	SELECT balance FROM call_bal where bid='1'
[2017-05-02 10:37:30]	SQL :	SELECT DISTINCT(e.eid),e.empname,eb.start_time FROM 1_employee e
		                       LEFT JOIN 1_emp_break eb ON e.eid = eb.eid
		                       LEFT JOIN 1_groups d ON e.eid = d.eid
		                       WHERE eb.end_time='0000-00-00' AND e.selfdisable=1  GROUP BY d.gid,e.eid
[2017-05-02 10:37:30]	SQL :	SELECT COALESCE(COUNT(callid), 0) AS day 
							FROM 1_callhistory h 
							LEFT JOIN 1_groups d ON d.gid = h.gid 
							WHERE 1 AND (DATE(h.`starttime`) = DATE(NOW()))
[2017-05-02 10:37:30]	SQL :	SELECT COALESCE(COUNT(callid), 0) AS day 
							FROM 1_callhistory h 
							LEFT JOIN 1_groups d ON d.gid = h.gid 
							WHERE 1  AND (DATE(h.`starttime`)  > DATE(DATE_SUB(NOW(), INTERVAL 1 WEEK)))
[2017-05-02 10:37:30]	SQL :	SELECT COALESCE(COUNT(callid), 0) AS day 
							FROM 1_callhistory h 
							LEFT JOIN 1_groups d ON d.gid = h.gid 
							WHERE 1  AND (MONTH(h.`starttime` ) = MONTH(NOW()))
[2017-05-02 10:37:30]	SQL :	SELECT COALESCE(COUNT(pbxid), 0) AS day 
							FROM 1_pbxreport h 
							WHERE 1 AND (DATE(h.`starttime`) = DATE(NOW()))
[2017-05-02 10:37:30]	SQL :	SELECT COALESCE(COUNT(pbxid), 0) AS day 
							FROM 1_pbxreport h 
							WHERE 1  AND (DATE(h.`starttime`)  > DATE(DATE_SUB(NOW(), INTERVAL 1 WEEK)))
[2017-05-02 10:37:30]	SQL :	SELECT COALESCE(COUNT(pbxid), 0) AS day 
							FROM 1_pbxreport h 
							WHERE 1  AND (MONTH(h.`starttime` ) = MONTH(NOW()))
[2017-05-02 10:37:30]	SQL :	SELECT COALESCE(COUNT(hid), 0) AS day 
							   FROM 1_ivrshistory h 
						       WHERE 1 AND (DATE(h.`datetime`) = DATE(NOW()))
[2017-05-02 10:37:30]	SQL :	SELECT COALESCE(COUNT(hid), 0) AS day 
							   FROM 1_ivrshistory h 
						       WHERE 1  AND (DATE(h.`datetime`)  > DATE(DATE_SUB(NOW(), INTERVAL 1 WEEK)))
[2017-05-02 10:37:30]	SQL :	SELECT COALESCE(COUNT(hid), 0) AS day 
							   FROM 1_ivrshistory h 
						       WHERE 1  AND (MONTH(h.`datetime` ) = MONTH(NOW()))
[2017-05-02 10:37:30]	SQL :	SELECT COALESCE(COUNT(leadid), 0) AS day 
							FROM 1_leads a 
							LEFT JOIN 1_leads_groups d ON d.gid = a.gid 
							WHERE (DATE(a.`createdon`) = DATE(NOW()))
[2017-05-02 10:37:30]	SQL :	SELECT COALESCE(COUNT(leadid), 0) AS day 
							FROM 1_leads a 
							LEFT JOIN 1_leads_groups d ON d.gid = a.gid 
							WHERE (DATE(a.`createdon`) = DATE(NOW()))
[2017-05-02 10:37:30]	SQL :	SELECT COALESCE(COUNT(leadid), 0) AS day 
							FROM 1_leads a 
							LEFT JOIN 1_leads_groups d ON d.gid = a.gid 
							WHERE (DATE(a.`createdon`) = DATE(NOW()))
[2017-05-02 10:37:30]	SQL :	SELECT COALESCE(COUNT(tktid), 0) AS day 
							FROM 1_support_tickets a 
							LEFT JOIN 1_support_groups d ON d.gid = a.gid 
							WHERE (DATE(a.`createdon`) = DATE(NOW()))
[2017-05-02 10:37:30]	SQL :	SELECT COALESCE(COUNT(tktid), 0) AS day 
							FROM 1_support_tickets a 
							LEFT JOIN 1_support_groups d ON d.gid = a.gid 
							WHERE (DATE(a.`createdon`) = DATE(NOW()))
[2017-05-02 10:37:30]	SQL :	SELECT COALESCE(COUNT(tktid), 0) AS day 
							FROM 1_support_tickets a 
							LEFT JOIN 1_support_groups d ON d.gid = a.gid 
							WHERE (DATE(a.`createdon`) = DATE(NOW()))
[2017-05-02 10:37:30]	SQL :	SELECT COALESCE(COUNT(callid), 0) AS day 
							FROM 1_outboundcalls h 
							WHERE (DATE(h.`starttime`) = DATE(NOW()))
[2017-05-02 10:37:30]	SQL :	SELECT COALESCE(COUNT(callid), 0) AS day 
							FROM 1_outboundcalls h 
							WHERE (DATE(h.`starttime`) = DATE(NOW()))
[2017-05-02 10:37:30]	SQL :	SELECT COALESCE(COUNT(callid), 0) AS day 
							FROM 1_outboundcalls h 
							WHERE (DATE(h.`starttime`) = DATE(NOW()))
[2017-05-02 10:37:30]	SQL :	SELECT COALESCE(COUNT(callid), 0) AS day 
							FROM 1_mtracker h 
							WHERE (DATE(h.`starttime`) = DATE(NOW()))
[2017-05-02 10:37:30]	SQL :	SELECT COALESCE(COUNT(callid), 0) AS day 
							FROM 1_mtracker h 
							WHERE (DATE(h.`starttime`) = DATE(NOW()))
[2017-05-02 10:37:30]	SQL :	SELECT COALESCE(COUNT(callid), 0) AS day 
							FROM 1_mtracker h 
							WHERE (DATE(h.`starttime`) = DATE(NOW()))
[2017-05-02 10:52:30]	DEBUG :	Config Class Initialized
[2017-05-02 10:52:30]	DEBUG :	Hooks Class Initialized
[2017-05-02 10:52:30]	DEBUG :	URI Class Initialized
[2017-05-02 10:52:30]	DEBUG :	Router Class Initialized
[2017-05-02 10:52:30]	DEBUG :	Output Class Initialized
[2017-05-02 10:52:30]	DEBUG :	Input Class Initialized
[2017-05-02 10:52:30]	DEBUG :	Global POST and COOKIE data sanitized
[2017-05-02 10:52:30]	DEBUG :	Language Class Initialized
[2017-05-02 10:52:30]	DEBUG :	Loader Class Initialized
[2017-05-02 10:52:30]	DEBUG :	Helper loaded: url_helper
[2017-05-02 10:52:30]	DEBUG :	Helper loaded: form_helper
[2017-05-02 10:52:30]	DEBUG :	Helper loaded: html_helper
[2017-05-02 10:52:30]	DEBUG :	Helper loaded: email_helper
[2017-05-02 10:52:30]	DEBUG :	Helper loaded: ckeditor_helper
[2017-05-02 10:52:30]	DEBUG :	Helper loaded: mcube_helper
[2017-05-02 10:52:30]	DEBUG :	Database Driver Class Initialized
[2017-05-02 10:52:30]	ERROR :	Severity: 8192  --> mysql_pconnect(): The mysql extension is deprecated and will be removed in the future: use mysqli or PDO instead /var/www/html/mcnew/system/database/drivers/mysql/mysql_driver.php 88
[2017-05-02 10:52:30]	DEBUG :	Session Class Initialized
[2017-05-02 10:52:30]	DEBUG :	Helper loaded: string_helper
[2017-05-02 10:52:30]	DEBUG :	Encrypt Class Initialized
[2017-05-02 10:52:30]	DEBUG :	A session cookie was not found.
[2017-05-02 10:52:30]	SQL :	INSERT INTO `call_sessions` (`session_id`, `ip_address`, `user_agent`, `last_activity`) VALUES ('53e6aa6babda932b4610c6d1adbbdfae', '192.168.1.124', 'Dalvik/2.1.0 (Linux; U; Android 6.0; Panasonic T44', 1493702550)
[2017-05-02 10:52:31]	DEBUG :	Session routines successfully run
[2017-05-02 10:52:31]	DEBUG :	Table Class Initialized
[2017-05-02 10:52:31]	DEBUG :	Pagination Class Initialized
[2017-05-02 10:52:31]	DEBUG :	Config file loaded: config/paypallib_config.php
[2017-05-02 10:52:31]	DEBUG :	Form Validation Class Initialized
[2017-05-02 10:52:31]	DEBUG :	Email Class Initialized
[2017-05-02 10:52:31]	DEBUG :	Language file loaded: language/english/calendar_lang.php
[2017-05-02 10:52:31]	DEBUG :	Calendar Class Initialized
[2017-05-02 10:52:31]	DEBUG :	Controller Class Initialized
[2017-05-02 10:52:31]	DEBUG :	Model Class Initialized
[2017-05-02 10:52:31]	DEBUG :	Model Class Initialized
[2017-05-02 10:52:31]	DEBUG :	Model Class Initialized
[2017-05-02 10:52:31]	DEBUG :	Model Class Initialized
[2017-05-02 10:52:31]	DEBUG :	Model Class Initialized
[2017-05-02 10:52:31]	DEBUG :	Model Class Initialized
[2017-05-02 10:52:31]	DEBUG :	Model Class Initialized
[2017-05-02 10:52:31]	DEBUG :	Model Class Initialized
[2017-05-02 10:52:31]	DEBUG :	Model Class Initialized
[2017-05-02 10:52:31]	DEBUG :	Model Class Initialized
[2017-05-02 10:52:31]	DEBUG :	Model Class Initialized
[2017-05-02 10:52:31]	DEBUG :	Model Class Initialized
[2017-05-02 10:52:31]	DEBUG :	Model Class Initialized
[2017-05-02 10:52:31]	DEBUG :	Model Class Initialized
[2017-05-02 10:52:31]	DEBUG :	Plugin loaded: to_pdf_pi
[2017-05-02 10:52:31]	DEBUG :	Model Class Initialized
[2017-05-02 10:52:31]	DEBUG :	Language file loaded: language/english/form_validation_lang.php
[2017-05-02 10:52:31]	SQL :	SELECT uid,bid,eid FROM `user` WHERE authkey='1.1.d886b8e8a0615'
[2017-05-02 10:52:31]	DEBUG :	Database Driver Class Initialized
[2017-05-02 10:52:31]	SQL :	SELECT roleid FROM 1_employee
							WHERE eid='1'
							AND bid='1'
[2017-05-02 10:52:31]	DEBUG :	Database Driver Class Initialized
[2017-05-02 10:52:31]	SQL :	SELECT * FROM 1_user_role
							WHERE roleid='1'
							AND bid='1'
[2017-05-02 10:52:31]	SQL :	SELECT m.modid,m.modname,m.moddesc,
							COALESCE(o.opt_add,0) as opt_add,
							COALESCE(o.opt_view,0) as opt_view,
							COALESCE(o.opt_download,0) as opt_download,
							COALESCE(opt_delete,0) as opt_delete 
							FROM module m
							LEFT JOIN (SELECT * FROM 1_role_mod_opt
							WHERE roleid='1' 
							AND bid='1') as o
							ON m.modid=o.modid where m.status=1
[2017-05-02 10:52:31]	SQL :	SELECT a.*,f.fieldname FROM 1_role_access a
								LEFT JOIN systemfields f on a.fieldid=f.fieldid
								WHERE a.roleid='1'
								AND a.bid='1'
								AND a.fieldtype='s'
[2017-05-02 10:52:31]	SQL :	SELECT * FROM 1_role_access
								WHERE roleid='1'
								AND bid='1'
							AND fieldtype='c'
[2017-05-02 10:52:31]	SQL :	SELECT pri.landingnumber,pri.used,pri.climit,
								if(pri.status=0,'Not in use',
								if(pri.type='0','Calltrack',
								if(pri.type='1','IVRS',
								if(pri.type='2','PBX','Not Assign')))) as type,
								pri.associateid,
								if(pri.status=0,'None',
								if(pri.type='0',g.groupname,
								if(pri.type='1',i.title,
								if(pri.type='2',pbx.title,'None')))) as title,
								if(pri.status=0,'None',
								if(pri.type='0',ch.lastcall,
								if(pri.type='1',ih.lastcall,
								if(pri.type='2',ph.lastcall,'None')))) as lastcall
								FROM prinumbers pri
								LEFT JOIN 1_groups g on (g.prinumber=pri.number AND g.gid=pri.associateid AND g.status=1)
								LEFT JOIN 1_ivrs i on (i.prinumber=pri.number AND i.ivrsid=pri.associateid AND i.status=1)
								LEFT JOIN 1_pbx pbx on (pbx.prinumber=pri.number AND pbx.pbxid=pri.associateid AND pbx.status=1)
								LEFT JOIN (SELECT g.gid,max(h.starttime) as lastcall FROM 1_groups g LEFT JOIN 1_callhistory h on g.gid=h.gid GROUP BY g.gid) ch on g.gid=ch.gid
								LEFT JOIN (SELECT i.ivrsid,max(h.datetime) as lastcall FROM 1_ivrs i LEFT JOIN 1_ivrshistory h on i.ivrsid=h.ivrsid GROUP BY i.ivrsid) ih on i.ivrsid=ih.ivrsid
								LEFT JOIN (SELECT p.pbxid,max(h.starttime) as lastcall FROM 1_pbx p LEFT JOIN 1_pbxreport h on p.pbxid=h.pbxid GROUP BY p.pbxid) ph on pbx.pbxid=ph.pbxid
								WHERE pri.bid=1
[2017-05-02 10:52:31]	SQL :	SELECT balance FROM sms_bal  where bid='1'
[2017-05-02 10:52:31]	SQL :	SELECT balance FROM call_bal where bid='1'
[2017-05-02 10:52:31]	SQL :	SELECT DISTINCT(e.eid),e.empname,eb.start_time FROM 1_employee e
		                       LEFT JOIN 1_emp_break eb ON e.eid = eb.eid
		                       LEFT JOIN 1_groups d ON e.eid = d.eid
		                       WHERE eb.end_time='0000-00-00' AND e.selfdisable=1  GROUP BY d.gid,e.eid
[2017-05-02 10:52:31]	SQL :	SELECT COALESCE(COUNT(callid), 0) AS day 
							FROM 1_callhistory h 
							LEFT JOIN 1_groups d ON d.gid = h.gid 
							WHERE 1 AND (DATE(h.`starttime`) = DATE(NOW()))
[2017-05-02 10:52:31]	SQL :	SELECT COALESCE(COUNT(callid), 0) AS day 
							FROM 1_callhistory h 
							LEFT JOIN 1_groups d ON d.gid = h.gid 
							WHERE 1  AND (DATE(h.`starttime`)  > DATE(DATE_SUB(NOW(), INTERVAL 1 WEEK)))
[2017-05-02 10:52:31]	SQL :	SELECT COALESCE(COUNT(callid), 0) AS day 
							FROM 1_callhistory h 
							LEFT JOIN 1_groups d ON d.gid = h.gid 
							WHERE 1  AND (MONTH(h.`starttime` ) = MONTH(NOW()))
[2017-05-02 10:52:31]	SQL :	SELECT COALESCE(COUNT(pbxid), 0) AS day 
							FROM 1_pbxreport h 
							WHERE 1 AND (DATE(h.`starttime`) = DATE(NOW()))
[2017-05-02 10:52:31]	SQL :	SELECT COALESCE(COUNT(pbxid), 0) AS day 
							FROM 1_pbxreport h 
							WHERE 1  AND (DATE(h.`starttime`)  > DATE(DATE_SUB(NOW(), INTERVAL 1 WEEK)))
[2017-05-02 10:52:31]	SQL :	SELECT COALESCE(COUNT(pbxid), 0) AS day 
							FROM 1_pbxreport h 
							WHERE 1  AND (MONTH(h.`starttime` ) = MONTH(NOW()))
[2017-05-02 10:52:31]	SQL :	SELECT COALESCE(COUNT(hid), 0) AS day 
							   FROM 1_ivrshistory h 
						       WHERE 1 AND (DATE(h.`datetime`) = DATE(NOW()))
[2017-05-02 10:52:31]	SQL :	SELECT COALESCE(COUNT(hid), 0) AS day 
							   FROM 1_ivrshistory h 
						       WHERE 1  AND (DATE(h.`datetime`)  > DATE(DATE_SUB(NOW(), INTERVAL 1 WEEK)))
[2017-05-02 10:52:31]	SQL :	SELECT COALESCE(COUNT(hid), 0) AS day 
							   FROM 1_ivrshistory h 
						       WHERE 1  AND (MONTH(h.`datetime` ) = MONTH(NOW()))
[2017-05-02 10:52:31]	SQL :	SELECT COALESCE(COUNT(leadid), 0) AS day 
							FROM 1_leads a 
							LEFT JOIN 1_leads_groups d ON d.gid = a.gid 
							WHERE (DATE(a.`createdon`) = DATE(NOW()))
[2017-05-02 10:52:31]	SQL :	SELECT COALESCE(COUNT(leadid), 0) AS day 
							FROM 1_leads a 
							LEFT JOIN 1_leads_groups d ON d.gid = a.gid 
							WHERE (DATE(a.`createdon`) = DATE(NOW()))
[2017-05-02 10:52:31]	SQL :	SELECT COALESCE(COUNT(leadid), 0) AS day 
							FROM 1_leads a 
							LEFT JOIN 1_leads_groups d ON d.gid = a.gid 
							WHERE (DATE(a.`createdon`) = DATE(NOW()))
[2017-05-02 10:52:31]	SQL :	SELECT COALESCE(COUNT(tktid), 0) AS day 
							FROM 1_support_tickets a 
							LEFT JOIN 1_support_groups d ON d.gid = a.gid 
							WHERE (DATE(a.`createdon`) = DATE(NOW()))
[2017-05-02 10:52:31]	SQL :	SELECT COALESCE(COUNT(tktid), 0) AS day 
							FROM 1_support_tickets a 
							LEFT JOIN 1_support_groups d ON d.gid = a.gid 
							WHERE (DATE(a.`createdon`) = DATE(NOW()))
[2017-05-02 10:52:31]	SQL :	SELECT COALESCE(COUNT(tktid), 0) AS day 
							FROM 1_support_tickets a 
							LEFT JOIN 1_support_groups d ON d.gid = a.gid 
							WHERE (DATE(a.`createdon`) = DATE(NOW()))
[2017-05-02 10:52:31]	SQL :	SELECT COALESCE(COUNT(callid), 0) AS day 
							FROM 1_outboundcalls h 
							WHERE (DATE(h.`starttime`) = DATE(NOW()))
[2017-05-02 10:52:31]	SQL :	SELECT COALESCE(COUNT(callid), 0) AS day 
							FROM 1_outboundcalls h 
							WHERE (DATE(h.`starttime`) = DATE(NOW()))
[2017-05-02 10:52:31]	SQL :	SELECT COALESCE(COUNT(callid), 0) AS day 
							FROM 1_outboundcalls h 
							WHERE (DATE(h.`starttime`) = DATE(NOW()))
[2017-05-02 10:52:31]	SQL :	SELECT COALESCE(COUNT(callid), 0) AS day 
							FROM 1_mtracker h 
							WHERE (DATE(h.`starttime`) = DATE(NOW()))
[2017-05-02 10:52:31]	SQL :	SELECT COALESCE(COUNT(callid), 0) AS day 
							FROM 1_mtracker h 
							WHERE (DATE(h.`starttime`) = DATE(NOW()))
[2017-05-02 10:52:31]	SQL :	SELECT COALESCE(COUNT(callid), 0) AS day 
							FROM 1_mtracker h 
							WHERE (DATE(h.`starttime`) = DATE(NOW()))
[2017-05-02 10:59:25]	DEBUG :	Config Class Initialized
[2017-05-02 10:59:25]	DEBUG :	Hooks Class Initialized
[2017-05-02 10:59:25]	DEBUG :	URI Class Initialized
[2017-05-02 10:59:25]	DEBUG :	Router Class Initialized
[2017-05-02 10:59:25]	DEBUG :	Output Class Initialized
[2017-05-02 10:59:25]	DEBUG :	Input Class Initialized
[2017-05-02 10:59:25]	DEBUG :	Global POST and COOKIE data sanitized
[2017-05-02 10:59:25]	DEBUG :	Language Class Initialized
[2017-05-02 10:59:25]	DEBUG :	Loader Class Initialized
[2017-05-02 10:59:25]	DEBUG :	Helper loaded: url_helper
[2017-05-02 10:59:25]	DEBUG :	Helper loaded: form_helper
[2017-05-02 10:59:25]	DEBUG :	Helper loaded: html_helper
[2017-05-02 10:59:25]	DEBUG :	Helper loaded: email_helper
[2017-05-02 10:59:25]	DEBUG :	Helper loaded: ckeditor_helper
[2017-05-02 10:59:25]	DEBUG :	Helper loaded: mcube_helper
[2017-05-02 10:59:25]	DEBUG :	Database Driver Class Initialized
[2017-05-02 10:59:25]	ERROR :	Severity: 8192  --> mysql_pconnect(): The mysql extension is deprecated and will be removed in the future: use mysqli or PDO instead /var/www/html/mcnew/system/database/drivers/mysql/mysql_driver.php 88
[2017-05-02 10:59:25]	DEBUG :	Session Class Initialized
[2017-05-02 10:59:25]	DEBUG :	Helper loaded: string_helper
[2017-05-02 10:59:25]	DEBUG :	Encrypt Class Initialized
[2017-05-02 10:59:25]	DEBUG :	A session cookie was not found.
[2017-05-02 10:59:25]	SQL :	INSERT INTO `call_sessions` (`session_id`, `ip_address`, `user_agent`, `last_activity`) VALUES ('2e90ad0d20e7d6515edf23b355036a2a', '192.168.1.124', 'Dalvik/2.1.0 (Linux; U; Android 6.0; Panasonic T44', 1493702965)
[2017-05-02 10:59:25]	DEBUG :	Session routines successfully run
[2017-05-02 10:59:25]	DEBUG :	Table Class Initialized
[2017-05-02 10:59:25]	DEBUG :	Pagination Class Initialized
[2017-05-02 10:59:25]	DEBUG :	Config file loaded: config/paypallib_config.php
[2017-05-02 10:59:25]	DEBUG :	Form Validation Class Initialized
[2017-05-02 10:59:25]	DEBUG :	Email Class Initialized
[2017-05-02 10:59:25]	DEBUG :	Language file loaded: language/english/calendar_lang.php
[2017-05-02 10:59:25]	DEBUG :	Calendar Class Initialized
[2017-05-02 10:59:25]	DEBUG :	Controller Class Initialized
[2017-05-02 10:59:25]	DEBUG :	Model Class Initialized
[2017-05-02 10:59:25]	DEBUG :	Model Class Initialized
[2017-05-02 10:59:25]	DEBUG :	Model Class Initialized
[2017-05-02 10:59:25]	DEBUG :	Model Class Initialized
[2017-05-02 10:59:25]	DEBUG :	Model Class Initialized
[2017-05-02 10:59:25]	DEBUG :	Model Class Initialized
[2017-05-02 10:59:25]	DEBUG :	Model Class Initialized
[2017-05-02 10:59:25]	DEBUG :	Model Class Initialized
[2017-05-02 10:59:25]	DEBUG :	Model Class Initialized
[2017-05-02 10:59:25]	DEBUG :	Model Class Initialized
[2017-05-02 10:59:25]	DEBUG :	Model Class Initialized
[2017-05-02 10:59:25]	DEBUG :	Model Class Initialized
[2017-05-02 10:59:25]	DEBUG :	Model Class Initialized
[2017-05-02 10:59:25]	DEBUG :	Model Class Initialized
[2017-05-02 10:59:25]	DEBUG :	Plugin loaded: to_pdf_pi
[2017-05-02 10:59:25]	DEBUG :	Model Class Initialized
[2017-05-02 10:59:25]	DEBUG :	Language file loaded: language/english/form_validation_lang.php
[2017-05-02 10:59:25]	SQL :	SELECT uid,bid,eid FROM `user` WHERE authkey='1.1.d886b8e8a0615'
[2017-05-02 10:59:25]	DEBUG :	Database Driver Class Initialized
[2017-05-02 10:59:25]	SQL :	SELECT roleid FROM 1_employee
							WHERE eid='1'
							AND bid='1'
[2017-05-02 10:59:25]	DEBUG :	Database Driver Class Initialized
[2017-05-02 10:59:25]	SQL :	SELECT * FROM 1_user_role
							WHERE roleid='1'
							AND bid='1'
[2017-05-02 10:59:25]	SQL :	SELECT m.modid,m.modname,m.moddesc,
							COALESCE(o.opt_add,0) as opt_add,
							COALESCE(o.opt_view,0) as opt_view,
							COALESCE(o.opt_download,0) as opt_download,
							COALESCE(opt_delete,0) as opt_delete 
							FROM module m
							LEFT JOIN (SELECT * FROM 1_role_mod_opt
							WHERE roleid='1' 
							AND bid='1') as o
							ON m.modid=o.modid where m.status=1
[2017-05-02 10:59:25]	SQL :	SELECT a.*,f.fieldname FROM 1_role_access a
								LEFT JOIN systemfields f on a.fieldid=f.fieldid
								WHERE a.roleid='1'
								AND a.bid='1'
								AND a.fieldtype='s'
[2017-05-02 10:59:25]	SQL :	SELECT * FROM 1_role_access
								WHERE roleid='1'
								AND bid='1'
							AND fieldtype='c'
[2017-05-02 10:59:25]	SQL :	SELECT pri.landingnumber,pri.used,pri.climit,
								if(pri.status=0,'Not in use',
								if(pri.type='0','Calltrack',
								if(pri.type='1','IVRS',
								if(pri.type='2','PBX','Not Assign')))) as type,
								pri.associateid,
								if(pri.status=0,'None',
								if(pri.type='0',g.groupname,
								if(pri.type='1',i.title,
								if(pri.type='2',pbx.title,'None')))) as title,
								if(pri.status=0,'None',
								if(pri.type='0',ch.lastcall,
								if(pri.type='1',ih.lastcall,
								if(pri.type='2',ph.lastcall,'None')))) as lastcall
								FROM prinumbers pri
								LEFT JOIN 1_groups g on (g.prinumber=pri.number AND g.gid=pri.associateid AND g.status=1)
								LEFT JOIN 1_ivrs i on (i.prinumber=pri.number AND i.ivrsid=pri.associateid AND i.status=1)
								LEFT JOIN 1_pbx pbx on (pbx.prinumber=pri.number AND pbx.pbxid=pri.associateid AND pbx.status=1)
								LEFT JOIN (SELECT g.gid,max(h.starttime) as lastcall FROM 1_groups g LEFT JOIN 1_callhistory h on g.gid=h.gid GROUP BY g.gid) ch on g.gid=ch.gid
								LEFT JOIN (SELECT i.ivrsid,max(h.datetime) as lastcall FROM 1_ivrs i LEFT JOIN 1_ivrshistory h on i.ivrsid=h.ivrsid GROUP BY i.ivrsid) ih on i.ivrsid=ih.ivrsid
								LEFT JOIN (SELECT p.pbxid,max(h.starttime) as lastcall FROM 1_pbx p LEFT JOIN 1_pbxreport h on p.pbxid=h.pbxid GROUP BY p.pbxid) ph on pbx.pbxid=ph.pbxid
								WHERE pri.bid=1
[2017-05-02 10:59:25]	SQL :	SELECT balance FROM sms_bal  where bid='1'
[2017-05-02 10:59:25]	SQL :	SELECT balance FROM call_bal where bid='1'
[2017-05-02 10:59:25]	SQL :	SELECT DISTINCT(e.eid),e.empname,eb.start_time FROM 1_employee e
		                       LEFT JOIN 1_emp_break eb ON e.eid = eb.eid
		                       LEFT JOIN 1_groups d ON e.eid = d.eid
		                       WHERE eb.end_time='0000-00-00' AND e.selfdisable=1  GROUP BY d.gid,e.eid
[2017-05-02 10:59:25]	SQL :	SELECT COALESCE(COUNT(callid), 0) AS day 
							FROM 1_callhistory h 
							LEFT JOIN 1_groups d ON d.gid = h.gid 
							WHERE 1 AND (DATE(h.`starttime`) = DATE(NOW()))
[2017-05-02 10:59:25]	SQL :	SELECT COALESCE(COUNT(callid), 0) AS day 
							FROM 1_callhistory h 
							LEFT JOIN 1_groups d ON d.gid = h.gid 
							WHERE 1  AND (DATE(h.`starttime`)  > DATE(DATE_SUB(NOW(), INTERVAL 1 WEEK)))
[2017-05-02 10:59:25]	SQL :	SELECT COALESCE(COUNT(callid), 0) AS day 
							FROM 1_callhistory h 
							LEFT JOIN 1_groups d ON d.gid = h.gid 
							WHERE 1  AND (MONTH(h.`starttime` ) = MONTH(NOW()))
[2017-05-02 10:59:25]	SQL :	SELECT COALESCE(COUNT(pbxid), 0) AS day 
							FROM 1_pbxreport h 
							WHERE 1 AND (DATE(h.`starttime`) = DATE(NOW()))
[2017-05-02 10:59:25]	SQL :	SELECT COALESCE(COUNT(pbxid), 0) AS day 
							FROM 1_pbxreport h 
							WHERE 1  AND (DATE(h.`starttime`)  > DATE(DATE_SUB(NOW(), INTERVAL 1 WEEK)))
[2017-05-02 10:59:25]	SQL :	SELECT COALESCE(COUNT(pbxid), 0) AS day 
							FROM 1_pbxreport h 
							WHERE 1  AND (MONTH(h.`starttime` ) = MONTH(NOW()))
[2017-05-02 10:59:25]	SQL :	SELECT COALESCE(COUNT(hid), 0) AS day 
							   FROM 1_ivrshistory h 
						       WHERE 1 AND (DATE(h.`datetime`) = DATE(NOW()))
[2017-05-02 10:59:25]	SQL :	SELECT COALESCE(COUNT(hid), 0) AS day 
							   FROM 1_ivrshistory h 
						       WHERE 1  AND (DATE(h.`datetime`)  > DATE(DATE_SUB(NOW(), INTERVAL 1 WEEK)))
[2017-05-02 10:59:25]	SQL :	SELECT COALESCE(COUNT(hid), 0) AS day 
							   FROM 1_ivrshistory h 
						       WHERE 1  AND (MONTH(h.`datetime` ) = MONTH(NOW()))
[2017-05-02 10:59:25]	SQL :	SELECT COALESCE(COUNT(leadid), 0) AS day 
							FROM 1_leads a 
							LEFT JOIN 1_leads_groups d ON d.gid = a.gid 
							WHERE (DATE(a.`createdon`) = DATE(NOW()))
[2017-05-02 10:59:25]	SQL :	SELECT COALESCE(COUNT(leadid), 0) AS day 
							FROM 1_leads a 
							LEFT JOIN 1_leads_groups d ON d.gid = a.gid 
							WHERE (DATE(a.`createdon`) = DATE(NOW()))
[2017-05-02 10:59:25]	SQL :	SELECT COALESCE(COUNT(leadid), 0) AS day 
							FROM 1_leads a 
							LEFT JOIN 1_leads_groups d ON d.gid = a.gid 
							WHERE (DATE(a.`createdon`) = DATE(NOW()))
[2017-05-02 10:59:25]	SQL :	SELECT COALESCE(COUNT(tktid), 0) AS day 
							FROM 1_support_tickets a 
							LEFT JOIN 1_support_groups d ON d.gid = a.gid 
							WHERE (DATE(a.`createdon`) = DATE(NOW()))
[2017-05-02 10:59:25]	SQL :	SELECT COALESCE(COUNT(tktid), 0) AS day 
							FROM 1_support_tickets a 
							LEFT JOIN 1_support_groups d ON d.gid = a.gid 
							WHERE (DATE(a.`createdon`) = DATE(NOW()))
[2017-05-02 10:59:25]	SQL :	SELECT COALESCE(COUNT(tktid), 0) AS day 
							FROM 1_support_tickets a 
							LEFT JOIN 1_support_groups d ON d.gid = a.gid 
							WHERE (DATE(a.`createdon`) = DATE(NOW()))
[2017-05-02 10:59:25]	SQL :	SELECT COALESCE(COUNT(callid), 0) AS day 
							FROM 1_outboundcalls h 
							WHERE (DATE(h.`starttime`) = DATE(NOW()))
[2017-05-02 10:59:25]	SQL :	SELECT COALESCE(COUNT(callid), 0) AS day 
							FROM 1_outboundcalls h 
							WHERE (DATE(h.`starttime`) = DATE(NOW()))
[2017-05-02 10:59:25]	SQL :	SELECT COALESCE(COUNT(callid), 0) AS day 
							FROM 1_outboundcalls h 
							WHERE (DATE(h.`starttime`) = DATE(NOW()))
[2017-05-02 10:59:25]	SQL :	SELECT COALESCE(COUNT(callid), 0) AS day 
							FROM 1_mtracker h 
							WHERE (DATE(h.`starttime`) = DATE(NOW()))
[2017-05-02 10:59:25]	SQL :	SELECT COALESCE(COUNT(callid), 0) AS day 
							FROM 1_mtracker h 
							WHERE (DATE(h.`starttime`) = DATE(NOW()))
[2017-05-02 10:59:25]	SQL :	SELECT COALESCE(COUNT(callid), 0) AS day 
							FROM 1_mtracker h 
							WHERE (DATE(h.`starttime`) = DATE(NOW()))
[2017-05-02 11:02:15]	DEBUG :	Config Class Initialized
[2017-05-02 11:02:15]	DEBUG :	Hooks Class Initialized
[2017-05-02 11:02:15]	DEBUG :	URI Class Initialized
[2017-05-02 11:02:15]	DEBUG :	Router Class Initialized
[2017-05-02 11:02:15]	DEBUG :	Output Class Initialized
[2017-05-02 11:02:15]	DEBUG :	Input Class Initialized
[2017-05-02 11:02:15]	DEBUG :	Global POST and COOKIE data sanitized
[2017-05-02 11:02:15]	DEBUG :	Language Class Initialized
[2017-05-02 11:02:15]	DEBUG :	Loader Class Initialized
[2017-05-02 11:02:15]	DEBUG :	Helper loaded: url_helper
[2017-05-02 11:02:15]	DEBUG :	Helper loaded: form_helper
[2017-05-02 11:02:15]	DEBUG :	Helper loaded: html_helper
[2017-05-02 11:02:15]	DEBUG :	Helper loaded: email_helper
[2017-05-02 11:02:15]	DEBUG :	Helper loaded: ckeditor_helper
[2017-05-02 11:02:15]	DEBUG :	Helper loaded: mcube_helper
[2017-05-02 11:02:15]	DEBUG :	Database Driver Class Initialized
[2017-05-02 11:02:15]	ERROR :	Severity: 8192  --> mysql_pconnect(): The mysql extension is deprecated and will be removed in the future: use mysqli or PDO instead /var/www/html/mcnew/system/database/drivers/mysql/mysql_driver.php 88
[2017-05-02 11:02:15]	DEBUG :	Session Class Initialized
[2017-05-02 11:02:15]	DEBUG :	Helper loaded: string_helper
[2017-05-02 11:02:15]	DEBUG :	Encrypt Class Initialized
[2017-05-02 11:02:15]	DEBUG :	A session cookie was not found.
[2017-05-02 11:02:15]	SQL :	INSERT INTO `call_sessions` (`session_id`, `ip_address`, `user_agent`, `last_activity`) VALUES ('b003a1a4cfb32740a88e2d7f06efc763', '192.168.1.124', 'Dalvik/2.1.0 (Linux; U; Android 6.0; Panasonic T44', 1493703135)
[2017-05-02 11:02:15]	DEBUG :	Session routines successfully run
[2017-05-02 11:02:15]	DEBUG :	Table Class Initialized
[2017-05-02 11:02:15]	DEBUG :	Pagination Class Initialized
[2017-05-02 11:02:15]	DEBUG :	Config file loaded: config/paypallib_config.php
[2017-05-02 11:02:15]	DEBUG :	Form Validation Class Initialized
[2017-05-02 11:02:15]	DEBUG :	Email Class Initialized
[2017-05-02 11:02:15]	DEBUG :	Language file loaded: language/english/calendar_lang.php
[2017-05-02 11:02:15]	DEBUG :	Calendar Class Initialized
[2017-05-02 11:02:15]	DEBUG :	Controller Class Initialized
[2017-05-02 11:02:15]	DEBUG :	Model Class Initialized
[2017-05-02 11:02:15]	DEBUG :	Model Class Initialized
[2017-05-02 11:02:15]	DEBUG :	Model Class Initialized
[2017-05-02 11:02:15]	DEBUG :	Model Class Initialized
[2017-05-02 11:02:15]	DEBUG :	Model Class Initialized
[2017-05-02 11:02:15]	DEBUG :	Model Class Initialized
[2017-05-02 11:02:15]	DEBUG :	Model Class Initialized
[2017-05-02 11:02:15]	DEBUG :	Model Class Initialized
[2017-05-02 11:02:15]	DEBUG :	Model Class Initialized
[2017-05-02 11:02:15]	DEBUG :	Model Class Initialized
[2017-05-02 11:02:15]	DEBUG :	Model Class Initialized
[2017-05-02 11:02:15]	DEBUG :	Model Class Initialized
[2017-05-02 11:02:15]	DEBUG :	Model Class Initialized
[2017-05-02 11:02:15]	DEBUG :	Model Class Initialized
[2017-05-02 11:02:15]	DEBUG :	Plugin loaded: to_pdf_pi
[2017-05-02 11:02:15]	DEBUG :	Model Class Initialized
[2017-05-02 11:02:15]	DEBUG :	Language file loaded: language/english/form_validation_lang.php
[2017-05-02 11:02:15]	SQL :	SELECT uid,bid,eid FROM `user` WHERE authkey='1.1.d886b8e8a0615'
[2017-05-02 11:02:15]	DEBUG :	Database Driver Class Initialized
[2017-05-02 11:02:15]	SQL :	SELECT roleid FROM 1_employee
							WHERE eid='1'
							AND bid='1'
[2017-05-02 11:02:15]	DEBUG :	Database Driver Class Initialized
[2017-05-02 11:02:15]	SQL :	SELECT * FROM 1_user_role
							WHERE roleid='1'
							AND bid='1'
[2017-05-02 11:02:15]	SQL :	SELECT m.modid,m.modname,m.moddesc,
							COALESCE(o.opt_add,0) as opt_add,
							COALESCE(o.opt_view,0) as opt_view,
							COALESCE(o.opt_download,0) as opt_download,
							COALESCE(opt_delete,0) as opt_delete 
							FROM module m
							LEFT JOIN (SELECT * FROM 1_role_mod_opt
							WHERE roleid='1' 
							AND bid='1') as o
							ON m.modid=o.modid where m.status=1
[2017-05-02 11:02:15]	SQL :	SELECT a.*,f.fieldname FROM 1_role_access a
								LEFT JOIN systemfields f on a.fieldid=f.fieldid
								WHERE a.roleid='1'
								AND a.bid='1'
								AND a.fieldtype='s'
[2017-05-02 11:02:15]	SQL :	SELECT * FROM 1_role_access
								WHERE roleid='1'
								AND bid='1'
							AND fieldtype='c'
[2017-05-02 11:02:15]	SQL :	SELECT pri.landingnumber,pri.used,pri.climit,
								if(pri.status=0,'Not in use',
								if(pri.type='0','Calltrack',
								if(pri.type='1','IVRS',
								if(pri.type='2','PBX','Not Assign')))) as type,
								pri.associateid,
								if(pri.status=0,'None',
								if(pri.type='0',g.groupname,
								if(pri.type='1',i.title,
								if(pri.type='2',pbx.title,'None')))) as title,
								if(pri.status=0,'None',
								if(pri.type='0',ch.lastcall,
								if(pri.type='1',ih.lastcall,
								if(pri.type='2',ph.lastcall,'None')))) as lastcall
								FROM prinumbers pri
								LEFT JOIN 1_groups g on (g.prinumber=pri.number AND g.gid=pri.associateid AND g.status=1)
								LEFT JOIN 1_ivrs i on (i.prinumber=pri.number AND i.ivrsid=pri.associateid AND i.status=1)
								LEFT JOIN 1_pbx pbx on (pbx.prinumber=pri.number AND pbx.pbxid=pri.associateid AND pbx.status=1)
								LEFT JOIN (SELECT g.gid,max(h.starttime) as lastcall FROM 1_groups g LEFT JOIN 1_callhistory h on g.gid=h.gid GROUP BY g.gid) ch on g.gid=ch.gid
								LEFT JOIN (SELECT i.ivrsid,max(h.datetime) as lastcall FROM 1_ivrs i LEFT JOIN 1_ivrshistory h on i.ivrsid=h.ivrsid GROUP BY i.ivrsid) ih on i.ivrsid=ih.ivrsid
								LEFT JOIN (SELECT p.pbxid,max(h.starttime) as lastcall FROM 1_pbx p LEFT JOIN 1_pbxreport h on p.pbxid=h.pbxid GROUP BY p.pbxid) ph on pbx.pbxid=ph.pbxid
								WHERE pri.bid=1
[2017-05-02 11:02:15]	SQL :	SELECT balance FROM sms_bal  where bid='1'
[2017-05-02 11:02:15]	SQL :	SELECT balance FROM call_bal where bid='1'
[2017-05-02 11:02:15]	SQL :	SELECT DISTINCT(e.eid),e.empname,eb.start_time FROM 1_employee e
		                       LEFT JOIN 1_emp_break eb ON e.eid = eb.eid
		                       LEFT JOIN 1_groups d ON e.eid = d.eid
		                       WHERE eb.end_time='0000-00-00' AND e.selfdisable=1  GROUP BY d.gid,e.eid
[2017-05-02 11:02:15]	SQL :	SELECT COALESCE(COUNT(callid), 0) AS day 
							FROM 1_callhistory h 
							LEFT JOIN 1_groups d ON d.gid = h.gid 
							WHERE 1 AND (DATE(h.`starttime`) = DATE(NOW()))
[2017-05-02 11:02:15]	SQL :	SELECT COALESCE(COUNT(callid), 0) AS day 
							FROM 1_callhistory h 
							LEFT JOIN 1_groups d ON d.gid = h.gid 
							WHERE 1  AND (DATE(h.`starttime`)  > DATE(DATE_SUB(NOW(), INTERVAL 1 WEEK)))
[2017-05-02 11:02:15]	SQL :	SELECT COALESCE(COUNT(callid), 0) AS day 
							FROM 1_callhistory h 
							LEFT JOIN 1_groups d ON d.gid = h.gid 
							WHERE 1  AND (MONTH(h.`starttime` ) = MONTH(NOW()))
[2017-05-02 11:02:15]	SQL :	SELECT COALESCE(COUNT(pbxid), 0) AS day 
							FROM 1_pbxreport h 
							WHERE 1 AND (DATE(h.`starttime`) = DATE(NOW()))
[2017-05-02 11:02:15]	SQL :	SELECT COALESCE(COUNT(pbxid), 0) AS day 
							FROM 1_pbxreport h 
							WHERE 1  AND (DATE(h.`starttime`)  > DATE(DATE_SUB(NOW(), INTERVAL 1 WEEK)))
[2017-05-02 11:02:15]	SQL :	SELECT COALESCE(COUNT(pbxid), 0) AS day 
							FROM 1_pbxreport h 
							WHERE 1  AND (MONTH(h.`starttime` ) = MONTH(NOW()))
[2017-05-02 11:02:15]	SQL :	SELECT COALESCE(COUNT(hid), 0) AS day 
							   FROM 1_ivrshistory h 
						       WHERE 1 AND (DATE(h.`datetime`) = DATE(NOW()))
[2017-05-02 11:02:15]	SQL :	SELECT COALESCE(COUNT(hid), 0) AS day 
							   FROM 1_ivrshistory h 
						       WHERE 1  AND (DATE(h.`datetime`)  > DATE(DATE_SUB(NOW(), INTERVAL 1 WEEK)))
[2017-05-02 11:02:15]	SQL :	SELECT COALESCE(COUNT(hid), 0) AS day 
							   FROM 1_ivrshistory h 
						       WHERE 1  AND (MONTH(h.`datetime` ) = MONTH(NOW()))
[2017-05-02 11:02:15]	SQL :	SELECT COALESCE(COUNT(leadid), 0) AS day 
							FROM 1_leads a 
							LEFT JOIN 1_leads_groups d ON d.gid = a.gid 
							WHERE (DATE(a.`createdon`) = DATE(NOW()))
[2017-05-02 11:02:15]	SQL :	SELECT COALESCE(COUNT(leadid), 0) AS day 
							FROM 1_leads a 
							LEFT JOIN 1_leads_groups d ON d.gid = a.gid 
							WHERE (DATE(a.`createdon`) = DATE(NOW()))
[2017-05-02 11:02:15]	SQL :	SELECT COALESCE(COUNT(leadid), 0) AS day 
							FROM 1_leads a 
							LEFT JOIN 1_leads_groups d ON d.gid = a.gid 
							WHERE (DATE(a.`createdon`) = DATE(NOW()))
[2017-05-02 11:02:15]	SQL :	SELECT COALESCE(COUNT(tktid), 0) AS day 
							FROM 1_support_tickets a 
							LEFT JOIN 1_support_groups d ON d.gid = a.gid 
							WHERE (DATE(a.`createdon`) = DATE(NOW()))
[2017-05-02 11:02:15]	SQL :	SELECT COALESCE(COUNT(tktid), 0) AS day 
							FROM 1_support_tickets a 
							LEFT JOIN 1_support_groups d ON d.gid = a.gid 
							WHERE (DATE(a.`createdon`) = DATE(NOW()))
[2017-05-02 11:02:15]	SQL :	SELECT COALESCE(COUNT(tktid), 0) AS day 
							FROM 1_support_tickets a 
							LEFT JOIN 1_support_groups d ON d.gid = a.gid 
							WHERE (DATE(a.`createdon`) = DATE(NOW()))
[2017-05-02 11:02:15]	SQL :	SELECT COALESCE(COUNT(callid), 0) AS day 
							FROM 1_outboundcalls h 
							WHERE (DATE(h.`starttime`) = DATE(NOW()))
[2017-05-02 11:02:15]	SQL :	SELECT COALESCE(COUNT(callid), 0) AS day 
							FROM 1_outboundcalls h 
							WHERE (DATE(h.`starttime`) = DATE(NOW()))
[2017-05-02 11:02:15]	SQL :	SELECT COALESCE(COUNT(callid), 0) AS day 
							FROM 1_outboundcalls h 
							WHERE (DATE(h.`starttime`) = DATE(NOW()))
[2017-05-02 11:02:15]	SQL :	SELECT COALESCE(COUNT(callid), 0) AS day 
							FROM 1_mtracker h 
							WHERE (DATE(h.`starttime`) = DATE(NOW()))
[2017-05-02 11:02:15]	SQL :	SELECT COALESCE(COUNT(callid), 0) AS day 
							FROM 1_mtracker h 
							WHERE (DATE(h.`starttime`) = DATE(NOW()))
[2017-05-02 11:02:15]	SQL :	SELECT COALESCE(COUNT(callid), 0) AS day 
							FROM 1_mtracker h 
							WHERE (DATE(h.`starttime`) = DATE(NOW()))
[2017-05-02 11:02:17]	DEBUG :	Config Class Initialized
[2017-05-02 11:02:17]	DEBUG :	Hooks Class Initialized
[2017-05-02 11:02:17]	DEBUG :	URI Class Initialized
[2017-05-02 11:02:17]	DEBUG :	Router Class Initialized
[2017-05-02 11:02:17]	DEBUG :	Output Class Initialized
[2017-05-02 11:02:17]	DEBUG :	Input Class Initialized
[2017-05-02 11:02:17]	DEBUG :	Global POST and COOKIE data sanitized
[2017-05-02 11:02:17]	DEBUG :	Language Class Initialized
[2017-05-02 11:02:17]	DEBUG :	Loader Class Initialized
[2017-05-02 11:02:17]	DEBUG :	Helper loaded: url_helper
[2017-05-02 11:02:17]	DEBUG :	Helper loaded: form_helper
[2017-05-02 11:02:17]	DEBUG :	Helper loaded: html_helper
[2017-05-02 11:02:17]	DEBUG :	Helper loaded: email_helper
[2017-05-02 11:02:17]	DEBUG :	Helper loaded: ckeditor_helper
[2017-05-02 11:02:17]	DEBUG :	Helper loaded: mcube_helper
[2017-05-02 11:02:17]	DEBUG :	Database Driver Class Initialized
[2017-05-02 11:02:17]	ERROR :	Severity: 8192  --> mysql_pconnect(): The mysql extension is deprecated and will be removed in the future: use mysqli or PDO instead /var/www/html/mcnew/system/database/drivers/mysql/mysql_driver.php 88
[2017-05-02 11:02:17]	DEBUG :	Session Class Initialized
[2017-05-02 11:02:17]	DEBUG :	Helper loaded: string_helper
[2017-05-02 11:02:17]	DEBUG :	Encrypt Class Initialized
[2017-05-02 11:02:17]	DEBUG :	A session cookie was not found.
[2017-05-02 11:02:17]	SQL :	INSERT INTO `call_sessions` (`session_id`, `ip_address`, `user_agent`, `last_activity`) VALUES ('e6d385b9ed13ab02e7fbd9a9d275da06', '192.168.1.124', 'Dalvik/2.1.0 (Linux; U; Android 6.0; Panasonic T44', 1493703137)
[2017-05-02 11:02:17]	DEBUG :	Session routines successfully run
[2017-05-02 11:02:17]	DEBUG :	Table Class Initialized
[2017-05-02 11:02:17]	DEBUG :	Pagination Class Initialized
[2017-05-02 11:02:17]	DEBUG :	Config file loaded: config/paypallib_config.php
[2017-05-02 11:02:17]	DEBUG :	Form Validation Class Initialized
[2017-05-02 11:02:17]	DEBUG :	Email Class Initialized
[2017-05-02 11:02:17]	DEBUG :	Language file loaded: language/english/calendar_lang.php
[2017-05-02 11:02:17]	DEBUG :	Calendar Class Initialized
[2017-05-02 11:02:17]	DEBUG :	Controller Class Initialized
[2017-05-02 11:02:17]	DEBUG :	Model Class Initialized
[2017-05-02 11:02:17]	DEBUG :	Model Class Initialized
[2017-05-02 11:02:17]	DEBUG :	Model Class Initialized
[2017-05-02 11:02:17]	DEBUG :	Model Class Initialized
[2017-05-02 11:02:17]	DEBUG :	Model Class Initialized
[2017-05-02 11:02:17]	DEBUG :	Model Class Initialized
[2017-05-02 11:02:17]	DEBUG :	Model Class Initialized
[2017-05-02 11:02:17]	DEBUG :	Model Class Initialized
[2017-05-02 11:02:17]	DEBUG :	Model Class Initialized
[2017-05-02 11:02:17]	DEBUG :	Model Class Initialized
[2017-05-02 11:02:17]	DEBUG :	Model Class Initialized
[2017-05-02 11:02:17]	DEBUG :	Model Class Initialized
[2017-05-02 11:02:17]	DEBUG :	Model Class Initialized
[2017-05-02 11:02:17]	DEBUG :	Model Class Initialized
[2017-05-02 11:02:17]	DEBUG :	Plugin loaded: to_pdf_pi
[2017-05-02 11:02:17]	DEBUG :	Model Class Initialized
[2017-05-02 11:02:17]	DEBUG :	Language file loaded: language/english/form_validation_lang.php
[2017-05-02 11:02:17]	SQL :	SELECT uid,bid,eid FROM `user` WHERE authkey='1.1.d886b8e8a0615'
[2017-05-02 11:02:17]	DEBUG :	Database Driver Class Initialized
[2017-05-02 11:02:17]	SQL :	SELECT roleid FROM 1_employee
							WHERE eid='1'
							AND bid='1'
[2017-05-02 11:02:17]	DEBUG :	Database Driver Class Initialized
[2017-05-02 11:02:17]	SQL :	SELECT * FROM 1_user_role
							WHERE roleid='1'
							AND bid='1'
[2017-05-02 11:02:17]	SQL :	SELECT m.modid,m.modname,m.moddesc,
							COALESCE(o.opt_add,0) as opt_add,
							COALESCE(o.opt_view,0) as opt_view,
							COALESCE(o.opt_download,0) as opt_download,
							COALESCE(opt_delete,0) as opt_delete 
							FROM module m
							LEFT JOIN (SELECT * FROM 1_role_mod_opt
							WHERE roleid='1' 
							AND bid='1') as o
							ON m.modid=o.modid where m.status=1
[2017-05-02 11:02:17]	SQL :	SELECT a.*,f.fieldname FROM 1_role_access a
								LEFT JOIN systemfields f on a.fieldid=f.fieldid
								WHERE a.roleid='1'
								AND a.bid='1'
								AND a.fieldtype='s'
[2017-05-02 11:02:17]	SQL :	SELECT * FROM 1_role_access
								WHERE roleid='1'
								AND bid='1'
							AND fieldtype='c'
[2017-05-02 11:02:17]	SQL :	SELECT pri.landingnumber,pri.used,pri.climit,
								if(pri.status=0,'Not in use',
								if(pri.type='0','Calltrack',
								if(pri.type='1','IVRS',
								if(pri.type='2','PBX','Not Assign')))) as type,
								pri.associateid,
								if(pri.status=0,'None',
								if(pri.type='0',g.groupname,
								if(pri.type='1',i.title,
								if(pri.type='2',pbx.title,'None')))) as title,
								if(pri.status=0,'None',
								if(pri.type='0',ch.lastcall,
								if(pri.type='1',ih.lastcall,
								if(pri.type='2',ph.lastcall,'None')))) as lastcall
								FROM prinumbers pri
								LEFT JOIN 1_groups g on (g.prinumber=pri.number AND g.gid=pri.associateid AND g.status=1)
								LEFT JOIN 1_ivrs i on (i.prinumber=pri.number AND i.ivrsid=pri.associateid AND i.status=1)
								LEFT JOIN 1_pbx pbx on (pbx.prinumber=pri.number AND pbx.pbxid=pri.associateid AND pbx.status=1)
								LEFT JOIN (SELECT g.gid,max(h.starttime) as lastcall FROM 1_groups g LEFT JOIN 1_callhistory h on g.gid=h.gid GROUP BY g.gid) ch on g.gid=ch.gid
								LEFT JOIN (SELECT i.ivrsid,max(h.datetime) as lastcall FROM 1_ivrs i LEFT JOIN 1_ivrshistory h on i.ivrsid=h.ivrsid GROUP BY i.ivrsid) ih on i.ivrsid=ih.ivrsid
								LEFT JOIN (SELECT p.pbxid,max(h.starttime) as lastcall FROM 1_pbx p LEFT JOIN 1_pbxreport h on p.pbxid=h.pbxid GROUP BY p.pbxid) ph on pbx.pbxid=ph.pbxid
								WHERE pri.bid=1
[2017-05-02 11:02:17]	SQL :	SELECT balance FROM sms_bal  where bid='1'
[2017-05-02 11:02:17]	SQL :	SELECT balance FROM call_bal where bid='1'
[2017-05-02 11:02:17]	SQL :	SELECT DISTINCT(e.eid),e.empname,eb.start_time FROM 1_employee e
		                       LEFT JOIN 1_emp_break eb ON e.eid = eb.eid
		                       LEFT JOIN 1_groups d ON e.eid = d.eid
		                       WHERE eb.end_time='0000-00-00' AND e.selfdisable=1  GROUP BY d.gid,e.eid
[2017-05-02 11:02:17]	SQL :	SELECT COALESCE(COUNT(callid), 0) AS day 
							FROM 1_callhistory h 
							LEFT JOIN 1_groups d ON d.gid = h.gid 
							WHERE 1 AND (DATE(h.`starttime`) = DATE(NOW()))
[2017-05-02 11:02:17]	SQL :	SELECT COALESCE(COUNT(callid), 0) AS day 
							FROM 1_callhistory h 
							LEFT JOIN 1_groups d ON d.gid = h.gid 
							WHERE 1  AND (DATE(h.`starttime`)  > DATE(DATE_SUB(NOW(), INTERVAL 1 WEEK)))
[2017-05-02 11:02:17]	SQL :	SELECT COALESCE(COUNT(callid), 0) AS day 
							FROM 1_callhistory h 
							LEFT JOIN 1_groups d ON d.gid = h.gid 
							WHERE 1  AND (MONTH(h.`starttime` ) = MONTH(NOW()))
[2017-05-02 11:02:17]	SQL :	SELECT COALESCE(COUNT(pbxid), 0) AS day 
							FROM 1_pbxreport h 
							WHERE 1 AND (DATE(h.`starttime`) = DATE(NOW()))
[2017-05-02 11:02:17]	SQL :	SELECT COALESCE(COUNT(pbxid), 0) AS day 
							FROM 1_pbxreport h 
							WHERE 1  AND (DATE(h.`starttime`)  > DATE(DATE_SUB(NOW(), INTERVAL 1 WEEK)))
[2017-05-02 11:02:17]	SQL :	SELECT COALESCE(COUNT(pbxid), 0) AS day 
							FROM 1_pbxreport h 
							WHERE 1  AND (MONTH(h.`starttime` ) = MONTH(NOW()))
[2017-05-02 11:02:17]	SQL :	SELECT COALESCE(COUNT(hid), 0) AS day 
							   FROM 1_ivrshistory h 
						       WHERE 1 AND (DATE(h.`datetime`) = DATE(NOW()))
[2017-05-02 11:02:17]	SQL :	SELECT COALESCE(COUNT(hid), 0) AS day 
							   FROM 1_ivrshistory h 
						       WHERE 1  AND (DATE(h.`datetime`)  > DATE(DATE_SUB(NOW(), INTERVAL 1 WEEK)))
[2017-05-02 11:02:17]	SQL :	SELECT COALESCE(COUNT(hid), 0) AS day 
							   FROM 1_ivrshistory h 
						       WHERE 1  AND (MONTH(h.`datetime` ) = MONTH(NOW()))
[2017-05-02 11:02:17]	SQL :	SELECT COALESCE(COUNT(leadid), 0) AS day 
							FROM 1_leads a 
							LEFT JOIN 1_leads_groups d ON d.gid = a.gid 
							WHERE (DATE(a.`createdon`) = DATE(NOW()))
[2017-05-02 11:02:17]	SQL :	SELECT COALESCE(COUNT(leadid), 0) AS day 
							FROM 1_leads a 
							LEFT JOIN 1_leads_groups d ON d.gid = a.gid 
							WHERE (DATE(a.`createdon`) = DATE(NOW()))
[2017-05-02 11:02:17]	SQL :	SELECT COALESCE(COUNT(leadid), 0) AS day 
							FROM 1_leads a 
							LEFT JOIN 1_leads_groups d ON d.gid = a.gid 
							WHERE (DATE(a.`createdon`) = DATE(NOW()))
[2017-05-02 11:02:17]	SQL :	SELECT COALESCE(COUNT(tktid), 0) AS day 
							FROM 1_support_tickets a 
							LEFT JOIN 1_support_groups d ON d.gid = a.gid 
							WHERE (DATE(a.`createdon`) = DATE(NOW()))
[2017-05-02 11:02:17]	SQL :	SELECT COALESCE(COUNT(tktid), 0) AS day 
							FROM 1_support_tickets a 
							LEFT JOIN 1_support_groups d ON d.gid = a.gid 
							WHERE (DATE(a.`createdon`) = DATE(NOW()))
[2017-05-02 11:02:17]	SQL :	SELECT COALESCE(COUNT(tktid), 0) AS day 
							FROM 1_support_tickets a 
							LEFT JOIN 1_support_groups d ON d.gid = a.gid 
							WHERE (DATE(a.`createdon`) = DATE(NOW()))
[2017-05-02 11:02:17]	SQL :	SELECT COALESCE(COUNT(callid), 0) AS day 
							FROM 1_outboundcalls h 
							WHERE (DATE(h.`starttime`) = DATE(NOW()))
[2017-05-02 11:02:17]	SQL :	SELECT COALESCE(COUNT(callid), 0) AS day 
							FROM 1_outboundcalls h 
							WHERE (DATE(h.`starttime`) = DATE(NOW()))
[2017-05-02 11:02:17]	SQL :	SELECT COALESCE(COUNT(callid), 0) AS day 
							FROM 1_outboundcalls h 
							WHERE (DATE(h.`starttime`) = DATE(NOW()))
[2017-05-02 11:02:17]	SQL :	SELECT COALESCE(COUNT(callid), 0) AS day 
							FROM 1_mtracker h 
							WHERE (DATE(h.`starttime`) = DATE(NOW()))
[2017-05-02 11:02:17]	SQL :	SELECT COALESCE(COUNT(callid), 0) AS day 
							FROM 1_mtracker h 
							WHERE (DATE(h.`starttime`) = DATE(NOW()))
[2017-05-02 11:02:17]	SQL :	SELECT COALESCE(COUNT(callid), 0) AS day 
							FROM 1_mtracker h 
							WHERE (DATE(h.`starttime`) = DATE(NOW()))
[2017-05-02 11:53:01]	DEBUG :	Config Class Initialized
[2017-05-02 11:53:01]	DEBUG :	Hooks Class Initialized
[2017-05-02 11:53:01]	DEBUG :	URI Class Initialized
[2017-05-02 11:53:01]	DEBUG :	Router Class Initialized
[2017-05-02 11:53:01]	DEBUG :	Output Class Initialized
[2017-05-02 11:53:01]	DEBUG :	Input Class Initialized
[2017-05-02 11:53:01]	DEBUG :	Global POST and COOKIE data sanitized
[2017-05-02 11:53:01]	DEBUG :	Language Class Initialized
[2017-05-02 11:53:01]	DEBUG :	Loader Class Initialized
[2017-05-02 11:53:01]	DEBUG :	Helper loaded: url_helper
[2017-05-02 11:53:01]	DEBUG :	Helper loaded: form_helper
[2017-05-02 11:53:01]	DEBUG :	Helper loaded: html_helper
[2017-05-02 11:53:01]	DEBUG :	Helper loaded: email_helper
[2017-05-02 11:53:01]	DEBUG :	Helper loaded: ckeditor_helper
[2017-05-02 11:53:01]	DEBUG :	Helper loaded: mcube_helper
[2017-05-02 11:53:01]	DEBUG :	Database Driver Class Initialized
[2017-05-02 11:53:01]	ERROR :	Severity: 8192  --> mysql_pconnect(): The mysql extension is deprecated and will be removed in the future: use mysqli or PDO instead /var/www/html/mcnew/system/database/drivers/mysql/mysql_driver.php 88
[2017-05-02 11:53:01]	DEBUG :	Session Class Initialized
[2017-05-02 11:53:01]	DEBUG :	Helper loaded: string_helper
[2017-05-02 11:53:01]	DEBUG :	Encrypt Class Initialized
[2017-05-02 11:53:01]	DEBUG :	A session cookie was not found.
[2017-05-02 11:53:01]	SQL :	INSERT INTO `call_sessions` (`session_id`, `ip_address`, `user_agent`, `last_activity`) VALUES ('642f4bac30233e576dd5513be9e80b17', '192.168.1.124', 'Dalvik/2.1.0 (Linux; U; Android 6.0; Panasonic T44', 1493706181)
[2017-05-02 11:53:01]	DEBUG :	Session routines successfully run
[2017-05-02 11:53:01]	DEBUG :	Table Class Initialized
[2017-05-02 11:53:01]	DEBUG :	Pagination Class Initialized
[2017-05-02 11:53:01]	DEBUG :	Config file loaded: config/paypallib_config.php
[2017-05-02 11:53:01]	DEBUG :	Form Validation Class Initialized
[2017-05-02 11:53:01]	DEBUG :	Email Class Initialized
[2017-05-02 11:53:01]	DEBUG :	Language file loaded: language/english/calendar_lang.php
[2017-05-02 11:53:01]	DEBUG :	Calendar Class Initialized
[2017-05-02 11:53:01]	DEBUG :	Controller Class Initialized
[2017-05-02 11:53:01]	DEBUG :	Model Class Initialized
[2017-05-02 11:53:01]	DEBUG :	Model Class Initialized
[2017-05-02 11:53:01]	DEBUG :	Model Class Initialized
[2017-05-02 11:53:01]	DEBUG :	Model Class Initialized
[2017-05-02 11:53:01]	DEBUG :	Model Class Initialized
[2017-05-02 11:53:01]	DEBUG :	Model Class Initialized
[2017-05-02 11:53:01]	DEBUG :	Model Class Initialized
[2017-05-02 11:53:01]	DEBUG :	Model Class Initialized
[2017-05-02 11:53:01]	DEBUG :	Model Class Initialized
[2017-05-02 11:53:01]	DEBUG :	Model Class Initialized
[2017-05-02 11:53:01]	DEBUG :	Model Class Initialized
[2017-05-02 11:53:01]	DEBUG :	Model Class Initialized
[2017-05-02 11:53:01]	DEBUG :	Model Class Initialized
[2017-05-02 11:53:01]	DEBUG :	Model Class Initialized
[2017-05-02 11:53:01]	DEBUG :	Plugin loaded: to_pdf_pi
[2017-05-02 11:53:01]	DEBUG :	Model Class Initialized
[2017-05-02 11:53:01]	DEBUG :	Language file loaded: language/english/form_validation_lang.php
[2017-05-02 11:53:01]	SQL :	SELECT uid,bid,eid FROM `user` WHERE authkey='1.1.d886b8e8a0615'
[2017-05-02 11:53:01]	DEBUG :	Database Driver Class Initialized
[2017-05-02 11:53:01]	SQL :	SELECT roleid FROM 1_employee
							WHERE eid='1'
							AND bid='1'
[2017-05-02 11:53:01]	DEBUG :	Database Driver Class Initialized
[2017-05-02 11:53:01]	SQL :	SELECT * FROM 1_user_role
							WHERE roleid='1'
							AND bid='1'
[2017-05-02 11:53:01]	SQL :	SELECT m.modid,m.modname,m.moddesc,
							COALESCE(o.opt_add,0) as opt_add,
							COALESCE(o.opt_view,0) as opt_view,
							COALESCE(o.opt_download,0) as opt_download,
							COALESCE(opt_delete,0) as opt_delete 
							FROM module m
							LEFT JOIN (SELECT * FROM 1_role_mod_opt
							WHERE roleid='1' 
							AND bid='1') as o
							ON m.modid=o.modid where m.status=1
[2017-05-02 11:53:01]	SQL :	SELECT a.*,f.fieldname FROM 1_role_access a
								LEFT JOIN systemfields f on a.fieldid=f.fieldid
								WHERE a.roleid='1'
								AND a.bid='1'
								AND a.fieldtype='s'
[2017-05-02 11:53:01]	SQL :	SELECT * FROM 1_role_access
								WHERE roleid='1'
								AND bid='1'
							AND fieldtype='c'
[2017-05-02 11:53:01]	SQL :	SELECT pri.landingnumber,pri.used,pri.climit,
								if(pri.status=0,'Not in use',
								if(pri.type='0','Calltrack',
								if(pri.type='1','IVRS',
								if(pri.type='2','PBX','Not Assign')))) as type,
								pri.associateid,
								if(pri.status=0,'None',
								if(pri.type='0',g.groupname,
								if(pri.type='1',i.title,
								if(pri.type='2',pbx.title,'None')))) as title,
								if(pri.status=0,'None',
								if(pri.type='0',ch.lastcall,
								if(pri.type='1',ih.lastcall,
								if(pri.type='2',ph.lastcall,'None')))) as lastcall
								FROM prinumbers pri
								LEFT JOIN 1_groups g on (g.prinumber=pri.number AND g.gid=pri.associateid AND g.status=1)
								LEFT JOIN 1_ivrs i on (i.prinumber=pri.number AND i.ivrsid=pri.associateid AND i.status=1)
								LEFT JOIN 1_pbx pbx on (pbx.prinumber=pri.number AND pbx.pbxid=pri.associateid AND pbx.status=1)
								LEFT JOIN (SELECT g.gid,max(h.starttime) as lastcall FROM 1_groups g LEFT JOIN 1_callhistory h on g.gid=h.gid GROUP BY g.gid) ch on g.gid=ch.gid
								LEFT JOIN (SELECT i.ivrsid,max(h.datetime) as lastcall FROM 1_ivrs i LEFT JOIN 1_ivrshistory h on i.ivrsid=h.ivrsid GROUP BY i.ivrsid) ih on i.ivrsid=ih.ivrsid
								LEFT JOIN (SELECT p.pbxid,max(h.starttime) as lastcall FROM 1_pbx p LEFT JOIN 1_pbxreport h on p.pbxid=h.pbxid GROUP BY p.pbxid) ph on pbx.pbxid=ph.pbxid
								WHERE pri.bid=1
[2017-05-02 11:53:01]	SQL :	SELECT balance FROM sms_bal  where bid='1'
[2017-05-02 11:53:01]	SQL :	SELECT balance FROM call_bal where bid='1'
[2017-05-02 11:53:01]	SQL :	SELECT DISTINCT(e.eid),e.empname,eb.start_time FROM 1_employee e
		                       LEFT JOIN 1_emp_break eb ON e.eid = eb.eid
		                       LEFT JOIN 1_groups d ON e.eid = d.eid
		                       WHERE eb.end_time='0000-00-00' AND e.selfdisable=1  GROUP BY d.gid,e.eid
[2017-05-02 11:53:01]	SQL :	SELECT COALESCE(COUNT(callid), 0) AS day 
							FROM 1_callhistory h 
							LEFT JOIN 1_groups d ON d.gid = h.gid 
							WHERE 1 AND (DATE(h.`starttime`) = DATE(NOW()))
[2017-05-02 11:53:01]	SQL :	SELECT COALESCE(COUNT(callid), 0) AS day 
							FROM 1_callhistory h 
							LEFT JOIN 1_groups d ON d.gid = h.gid 
							WHERE 1  AND (DATE(h.`starttime`)  > DATE(DATE_SUB(NOW(), INTERVAL 1 WEEK)))
[2017-05-02 11:53:01]	SQL :	SELECT COALESCE(COUNT(callid), 0) AS day 
							FROM 1_callhistory h 
							LEFT JOIN 1_groups d ON d.gid = h.gid 
							WHERE 1  AND (MONTH(h.`starttime` ) = MONTH(NOW()))
[2017-05-02 11:53:01]	SQL :	SELECT COALESCE(COUNT(pbxid), 0) AS day 
							FROM 1_pbxreport h 
							WHERE 1 AND (DATE(h.`starttime`) = DATE(NOW()))
[2017-05-02 11:53:01]	SQL :	SELECT COALESCE(COUNT(pbxid), 0) AS day 
							FROM 1_pbxreport h 
							WHERE 1  AND (DATE(h.`starttime`)  > DATE(DATE_SUB(NOW(), INTERVAL 1 WEEK)))
[2017-05-02 11:53:01]	SQL :	SELECT COALESCE(COUNT(pbxid), 0) AS day 
							FROM 1_pbxreport h 
							WHERE 1  AND (MONTH(h.`starttime` ) = MONTH(NOW()))
[2017-05-02 11:53:01]	SQL :	SELECT COALESCE(COUNT(hid), 0) AS day 
							   FROM 1_ivrshistory h 
						       WHERE 1 AND (DATE(h.`datetime`) = DATE(NOW()))
[2017-05-02 11:53:01]	SQL :	SELECT COALESCE(COUNT(hid), 0) AS day 
							   FROM 1_ivrshistory h 
						       WHERE 1  AND (DATE(h.`datetime`)  > DATE(DATE_SUB(NOW(), INTERVAL 1 WEEK)))
[2017-05-02 11:53:01]	SQL :	SELECT COALESCE(COUNT(hid), 0) AS day 
							   FROM 1_ivrshistory h 
						       WHERE 1  AND (MONTH(h.`datetime` ) = MONTH(NOW()))
[2017-05-02 11:53:01]	SQL :	SELECT COALESCE(COUNT(leadid), 0) AS day 
							FROM 1_leads a 
							LEFT JOIN 1_leads_groups d ON d.gid = a.gid 
							WHERE (DATE(a.`createdon`) = DATE(NOW()))
[2017-05-02 11:53:01]	SQL :	SELECT COALESCE(COUNT(leadid), 0) AS day 
							FROM 1_leads a 
							LEFT JOIN 1_leads_groups d ON d.gid = a.gid 
							WHERE (DATE(a.`createdon`) = DATE(NOW()))
[2017-05-02 11:53:01]	SQL :	SELECT COALESCE(COUNT(leadid), 0) AS day 
							FROM 1_leads a 
							LEFT JOIN 1_leads_groups d ON d.gid = a.gid 
							WHERE (DATE(a.`createdon`) = DATE(NOW()))
[2017-05-02 11:53:01]	SQL :	SELECT COALESCE(COUNT(tktid), 0) AS day 
							FROM 1_support_tickets a 
							LEFT JOIN 1_support_groups d ON d.gid = a.gid 
							WHERE (DATE(a.`createdon`) = DATE(NOW()))
[2017-05-02 11:53:01]	SQL :	SELECT COALESCE(COUNT(tktid), 0) AS day 
							FROM 1_support_tickets a 
							LEFT JOIN 1_support_groups d ON d.gid = a.gid 
							WHERE (DATE(a.`createdon`) = DATE(NOW()))
[2017-05-02 11:53:01]	SQL :	SELECT COALESCE(COUNT(tktid), 0) AS day 
							FROM 1_support_tickets a 
							LEFT JOIN 1_support_groups d ON d.gid = a.gid 
							WHERE (DATE(a.`createdon`) = DATE(NOW()))
[2017-05-02 11:53:01]	SQL :	SELECT COALESCE(COUNT(callid), 0) AS day 
							FROM 1_outboundcalls h 
							WHERE (DATE(h.`starttime`) = DATE(NOW()))
[2017-05-02 11:53:01]	SQL :	SELECT COALESCE(COUNT(callid), 0) AS day 
							FROM 1_outboundcalls h 
							WHERE (DATE(h.`starttime`) = DATE(NOW()))
[2017-05-02 11:53:01]	SQL :	SELECT COALESCE(COUNT(callid), 0) AS day 
							FROM 1_outboundcalls h 
							WHERE (DATE(h.`starttime`) = DATE(NOW()))
[2017-05-02 11:53:01]	SQL :	SELECT COALESCE(COUNT(callid), 0) AS day 
							FROM 1_mtracker h 
							WHERE (DATE(h.`starttime`) = DATE(NOW()))
[2017-05-02 11:53:01]	SQL :	SELECT COALESCE(COUNT(callid), 0) AS day 
							FROM 1_mtracker h 
							WHERE (DATE(h.`starttime`) = DATE(NOW()))
[2017-05-02 11:53:01]	SQL :	SELECT COALESCE(COUNT(callid), 0) AS day 
							FROM 1_mtracker h 
							WHERE (DATE(h.`starttime`) = DATE(NOW()))
[2017-05-02 11:57:50]	DEBUG :	Config Class Initialized
[2017-05-02 11:57:50]	DEBUG :	Hooks Class Initialized
[2017-05-02 11:57:50]	DEBUG :	URI Class Initialized
[2017-05-02 11:57:50]	DEBUG :	Router Class Initialized
[2017-05-02 11:57:50]	DEBUG :	Output Class Initialized
[2017-05-02 11:57:50]	DEBUG :	Input Class Initialized
[2017-05-02 11:57:50]	DEBUG :	Global POST and COOKIE data sanitized
[2017-05-02 11:57:50]	DEBUG :	Language Class Initialized
[2017-05-02 11:57:50]	DEBUG :	Loader Class Initialized
[2017-05-02 11:57:50]	DEBUG :	Helper loaded: url_helper
[2017-05-02 11:57:50]	DEBUG :	Helper loaded: form_helper
[2017-05-02 11:57:50]	DEBUG :	Helper loaded: html_helper
[2017-05-02 11:57:50]	DEBUG :	Helper loaded: email_helper
[2017-05-02 11:57:50]	DEBUG :	Helper loaded: ckeditor_helper
[2017-05-02 11:57:50]	DEBUG :	Helper loaded: mcube_helper
[2017-05-02 11:57:50]	DEBUG :	Database Driver Class Initialized
[2017-05-02 11:57:50]	ERROR :	Severity: 8192  --> mysql_pconnect(): The mysql extension is deprecated and will be removed in the future: use mysqli or PDO instead /var/www/html/mcnew/system/database/drivers/mysql/mysql_driver.php 88
[2017-05-02 11:57:50]	DEBUG :	Session Class Initialized
[2017-05-02 11:57:50]	DEBUG :	Helper loaded: string_helper
[2017-05-02 11:57:50]	DEBUG :	Encrypt Class Initialized
[2017-05-02 11:57:50]	DEBUG :	A session cookie was not found.
[2017-05-02 11:57:50]	SQL :	INSERT INTO `call_sessions` (`session_id`, `ip_address`, `user_agent`, `last_activity`) VALUES ('116ad6c22616c9ace09289b947772d7e', '192.168.1.124', 'Dalvik/2.1.0 (Linux; U; Android 6.0; Panasonic T44', 1493706470)
[2017-05-02 11:57:51]	DEBUG :	Session routines successfully run
[2017-05-02 11:57:51]	DEBUG :	Table Class Initialized
[2017-05-02 11:57:51]	DEBUG :	Pagination Class Initialized
[2017-05-02 11:57:51]	DEBUG :	Config file loaded: config/paypallib_config.php
[2017-05-02 11:57:51]	DEBUG :	Form Validation Class Initialized
[2017-05-02 11:57:51]	DEBUG :	Email Class Initialized
[2017-05-02 11:57:51]	DEBUG :	Language file loaded: language/english/calendar_lang.php
[2017-05-02 11:57:51]	DEBUG :	Calendar Class Initialized
[2017-05-02 11:57:51]	DEBUG :	Controller Class Initialized
[2017-05-02 11:57:51]	DEBUG :	Model Class Initialized
[2017-05-02 11:57:51]	DEBUG :	Model Class Initialized
[2017-05-02 11:57:51]	DEBUG :	Model Class Initialized
[2017-05-02 11:57:51]	DEBUG :	Model Class Initialized
[2017-05-02 11:57:51]	DEBUG :	Model Class Initialized
[2017-05-02 11:57:51]	DEBUG :	Model Class Initialized
[2017-05-02 11:57:51]	DEBUG :	Model Class Initialized
[2017-05-02 11:57:51]	DEBUG :	Model Class Initialized
[2017-05-02 11:57:51]	DEBUG :	Model Class Initialized
[2017-05-02 11:57:51]	DEBUG :	Model Class Initialized
[2017-05-02 11:57:51]	DEBUG :	Model Class Initialized
[2017-05-02 11:57:51]	DEBUG :	Model Class Initialized
[2017-05-02 11:57:51]	DEBUG :	Model Class Initialized
[2017-05-02 11:57:51]	DEBUG :	Model Class Initialized
[2017-05-02 11:57:51]	DEBUG :	Plugin loaded: to_pdf_pi
[2017-05-02 11:57:51]	DEBUG :	Model Class Initialized
[2017-05-02 11:57:51]	DEBUG :	Language file loaded: language/english/form_validation_lang.php
[2017-05-02 11:57:51]	SQL :	SELECT uid,bid,eid FROM `user` WHERE authkey='1.1.d886b8e8a0615'
[2017-05-02 11:57:51]	DEBUG :	Database Driver Class Initialized
[2017-05-02 11:57:51]	SQL :	SELECT roleid FROM 1_employee
							WHERE eid='1'
							AND bid='1'
[2017-05-02 11:57:51]	DEBUG :	Database Driver Class Initialized
[2017-05-02 11:57:51]	SQL :	SELECT * FROM 1_user_role
							WHERE roleid='1'
							AND bid='1'
[2017-05-02 11:57:51]	SQL :	SELECT m.modid,m.modname,m.moddesc,
							COALESCE(o.opt_add,0) as opt_add,
							COALESCE(o.opt_view,0) as opt_view,
							COALESCE(o.opt_download,0) as opt_download,
							COALESCE(opt_delete,0) as opt_delete 
							FROM module m
							LEFT JOIN (SELECT * FROM 1_role_mod_opt
							WHERE roleid='1' 
							AND bid='1') as o
							ON m.modid=o.modid where m.status=1
[2017-05-02 11:57:51]	SQL :	SELECT a.*,f.fieldname FROM 1_role_access a
								LEFT JOIN systemfields f on a.fieldid=f.fieldid
								WHERE a.roleid='1'
								AND a.bid='1'
								AND a.fieldtype='s'
[2017-05-02 11:57:51]	SQL :	SELECT * FROM 1_role_access
								WHERE roleid='1'
								AND bid='1'
							AND fieldtype='c'
[2017-05-02 11:57:51]	SQL :	SELECT pri.landingnumber,pri.used,pri.climit,
								if(pri.status=0,'Not in use',
								if(pri.type='0','Calltrack',
								if(pri.type='1','IVRS',
								if(pri.type='2','PBX','Not Assign')))) as type,
								pri.associateid,
								if(pri.status=0,'None',
								if(pri.type='0',g.groupname,
								if(pri.type='1',i.title,
								if(pri.type='2',pbx.title,'None')))) as title,
								if(pri.status=0,'None',
								if(pri.type='0',ch.lastcall,
								if(pri.type='1',ih.lastcall,
								if(pri.type='2',ph.lastcall,'None')))) as lastcall
								FROM prinumbers pri
								LEFT JOIN 1_groups g on (g.prinumber=pri.number AND g.gid=pri.associateid AND g.status=1)
								LEFT JOIN 1_ivrs i on (i.prinumber=pri.number AND i.ivrsid=pri.associateid AND i.status=1)
								LEFT JOIN 1_pbx pbx on (pbx.prinumber=pri.number AND pbx.pbxid=pri.associateid AND pbx.status=1)
								LEFT JOIN (SELECT g.gid,max(h.starttime) as lastcall FROM 1_groups g LEFT JOIN 1_callhistory h on g.gid=h.gid GROUP BY g.gid) ch on g.gid=ch.gid
								LEFT JOIN (SELECT i.ivrsid,max(h.datetime) as lastcall FROM 1_ivrs i LEFT JOIN 1_ivrshistory h on i.ivrsid=h.ivrsid GROUP BY i.ivrsid) ih on i.ivrsid=ih.ivrsid
								LEFT JOIN (SELECT p.pbxid,max(h.starttime) as lastcall FROM 1_pbx p LEFT JOIN 1_pbxreport h on p.pbxid=h.pbxid GROUP BY p.pbxid) ph on pbx.pbxid=ph.pbxid
								WHERE pri.bid=1
[2017-05-02 11:57:51]	SQL :	SELECT balance FROM sms_bal  where bid='1'
[2017-05-02 11:57:51]	SQL :	SELECT balance FROM call_bal where bid='1'
[2017-05-02 11:57:51]	SQL :	SELECT DISTINCT(e.eid),e.empname,eb.start_time FROM 1_employee e
		                       LEFT JOIN 1_emp_break eb ON e.eid = eb.eid
		                       LEFT JOIN 1_groups d ON e.eid = d.eid
		                       WHERE eb.end_time='0000-00-00' AND e.selfdisable=1  GROUP BY d.gid,e.eid
[2017-05-02 11:57:51]	SQL :	SELECT COALESCE(COUNT(callid), 0) AS day 
							FROM 1_callhistory h 
							LEFT JOIN 1_groups d ON d.gid = h.gid 
							WHERE 1 AND (DATE(h.`starttime`) = DATE(NOW()))
[2017-05-02 11:57:51]	SQL :	SELECT COALESCE(COUNT(callid), 0) AS day 
							FROM 1_callhistory h 
							LEFT JOIN 1_groups d ON d.gid = h.gid 
							WHERE 1  AND (DATE(h.`starttime`)  > DATE(DATE_SUB(NOW(), INTERVAL 1 WEEK)))
[2017-05-02 11:57:51]	SQL :	SELECT COALESCE(COUNT(callid), 0) AS day 
							FROM 1_callhistory h 
							LEFT JOIN 1_groups d ON d.gid = h.gid 
							WHERE 1  AND (MONTH(h.`starttime` ) = MONTH(NOW()))
[2017-05-02 11:57:51]	SQL :	SELECT COALESCE(COUNT(pbxid), 0) AS day 
							FROM 1_pbxreport h 
							WHERE 1 AND (DATE(h.`starttime`) = DATE(NOW()))
[2017-05-02 11:57:51]	SQL :	SELECT COALESCE(COUNT(pbxid), 0) AS day 
							FROM 1_pbxreport h 
							WHERE 1  AND (DATE(h.`starttime`)  > DATE(DATE_SUB(NOW(), INTERVAL 1 WEEK)))
[2017-05-02 11:57:51]	SQL :	SELECT COALESCE(COUNT(pbxid), 0) AS day 
							FROM 1_pbxreport h 
							WHERE 1  AND (MONTH(h.`starttime` ) = MONTH(NOW()))
[2017-05-02 11:57:51]	SQL :	SELECT COALESCE(COUNT(hid), 0) AS day 
							   FROM 1_ivrshistory h 
						       WHERE 1 AND (DATE(h.`datetime`) = DATE(NOW()))
[2017-05-02 11:57:51]	SQL :	SELECT COALESCE(COUNT(hid), 0) AS day 
							   FROM 1_ivrshistory h 
						       WHERE 1  AND (DATE(h.`datetime`)  > DATE(DATE_SUB(NOW(), INTERVAL 1 WEEK)))
[2017-05-02 11:57:51]	SQL :	SELECT COALESCE(COUNT(hid), 0) AS day 
							   FROM 1_ivrshistory h 
						       WHERE 1  AND (MONTH(h.`datetime` ) = MONTH(NOW()))
[2017-05-02 11:57:51]	SQL :	SELECT COALESCE(COUNT(leadid), 0) AS day 
							FROM 1_leads a 
							LEFT JOIN 1_leads_groups d ON d.gid = a.gid 
							WHERE (DATE(a.`createdon`) = DATE(NOW()))
[2017-05-02 11:57:51]	SQL :	SELECT COALESCE(COUNT(leadid), 0) AS day 
							FROM 1_leads a 
							LEFT JOIN 1_leads_groups d ON d.gid = a.gid 
							WHERE (DATE(a.`createdon`) = DATE(NOW()))
[2017-05-02 11:57:51]	SQL :	SELECT COALESCE(COUNT(leadid), 0) AS day 
							FROM 1_leads a 
							LEFT JOIN 1_leads_groups d ON d.gid = a.gid 
							WHERE (DATE(a.`createdon`) = DATE(NOW()))
[2017-05-02 11:57:51]	SQL :	SELECT COALESCE(COUNT(tktid), 0) AS day 
							FROM 1_support_tickets a 
							LEFT JOIN 1_support_groups d ON d.gid = a.gid 
							WHERE (DATE(a.`createdon`) = DATE(NOW()))
[2017-05-02 11:57:51]	SQL :	SELECT COALESCE(COUNT(tktid), 0) AS day 
							FROM 1_support_tickets a 
							LEFT JOIN 1_support_groups d ON d.gid = a.gid 
							WHERE (DATE(a.`createdon`) = DATE(NOW()))
[2017-05-02 11:57:51]	SQL :	SELECT COALESCE(COUNT(tktid), 0) AS day 
							FROM 1_support_tickets a 
							LEFT JOIN 1_support_groups d ON d.gid = a.gid 
							WHERE (DATE(a.`createdon`) = DATE(NOW()))
[2017-05-02 11:57:51]	SQL :	SELECT COALESCE(COUNT(callid), 0) AS day 
							FROM 1_outboundcalls h 
							WHERE (DATE(h.`starttime`) = DATE(NOW()))
[2017-05-02 11:57:51]	SQL :	SELECT COALESCE(COUNT(callid), 0) AS day 
							FROM 1_outboundcalls h 
							WHERE (DATE(h.`starttime`) = DATE(NOW()))
[2017-05-02 11:57:51]	SQL :	SELECT COALESCE(COUNT(callid), 0) AS day 
							FROM 1_outboundcalls h 
							WHERE (DATE(h.`starttime`) = DATE(NOW()))
[2017-05-02 11:57:51]	SQL :	SELECT COALESCE(COUNT(callid), 0) AS day 
							FROM 1_mtracker h 
							WHERE (DATE(h.`starttime`) = DATE(NOW()))
[2017-05-02 11:57:51]	SQL :	SELECT COALESCE(COUNT(callid), 0) AS day 
							FROM 1_mtracker h 
							WHERE (DATE(h.`starttime`) = DATE(NOW()))
[2017-05-02 11:57:51]	SQL :	SELECT COALESCE(COUNT(callid), 0) AS day 
							FROM 1_mtracker h 
							WHERE (DATE(h.`starttime`) = DATE(NOW()))
[2017-05-02 12:03:31]	DEBUG :	Config Class Initialized
[2017-05-02 12:03:31]	DEBUG :	Hooks Class Initialized
[2017-05-02 12:03:31]	DEBUG :	URI Class Initialized
[2017-05-02 12:03:31]	DEBUG :	Router Class Initialized
[2017-05-02 12:03:31]	DEBUG :	Output Class Initialized
[2017-05-02 12:03:31]	DEBUG :	Input Class Initialized
[2017-05-02 12:03:31]	DEBUG :	Global POST and COOKIE data sanitized
[2017-05-02 12:03:31]	DEBUG :	Language Class Initialized
[2017-05-02 12:03:31]	DEBUG :	Loader Class Initialized
[2017-05-02 12:03:31]	DEBUG :	Helper loaded: url_helper
[2017-05-02 12:03:31]	DEBUG :	Helper loaded: form_helper
[2017-05-02 12:03:31]	DEBUG :	Helper loaded: html_helper
[2017-05-02 12:03:31]	DEBUG :	Helper loaded: email_helper
[2017-05-02 12:03:31]	DEBUG :	Helper loaded: ckeditor_helper
[2017-05-02 12:03:31]	DEBUG :	Helper loaded: mcube_helper
[2017-05-02 12:03:31]	DEBUG :	Database Driver Class Initialized
[2017-05-02 12:03:31]	ERROR :	Severity: 8192  --> mysql_pconnect(): The mysql extension is deprecated and will be removed in the future: use mysqli or PDO instead /var/www/html/mcnew/system/database/drivers/mysql/mysql_driver.php 88
[2017-05-02 12:03:31]	DEBUG :	Session Class Initialized
[2017-05-02 12:03:31]	DEBUG :	Helper loaded: string_helper
[2017-05-02 12:03:31]	DEBUG :	Encrypt Class Initialized
[2017-05-02 12:03:31]	DEBUG :	A session cookie was not found.
[2017-05-02 12:03:31]	SQL :	INSERT INTO `call_sessions` (`session_id`, `ip_address`, `user_agent`, `last_activity`) VALUES ('927c03c6647154864f5199bfeb1df547', '192.168.1.124', 'Dalvik/2.1.0 (Linux; U; Android 6.0; Panasonic T44', 1493706811)
[2017-05-02 12:03:31]	DEBUG :	Session routines successfully run
[2017-05-02 12:03:31]	DEBUG :	Table Class Initialized
[2017-05-02 12:03:31]	DEBUG :	Pagination Class Initialized
[2017-05-02 12:03:31]	DEBUG :	Config file loaded: config/paypallib_config.php
[2017-05-02 12:03:31]	DEBUG :	Form Validation Class Initialized
[2017-05-02 12:03:31]	DEBUG :	Email Class Initialized
[2017-05-02 12:03:31]	DEBUG :	Language file loaded: language/english/calendar_lang.php
[2017-05-02 12:03:31]	DEBUG :	Calendar Class Initialized
[2017-05-02 12:03:31]	DEBUG :	Controller Class Initialized
[2017-05-02 12:03:31]	DEBUG :	Model Class Initialized
[2017-05-02 12:03:31]	DEBUG :	Model Class Initialized
[2017-05-02 12:03:31]	DEBUG :	Model Class Initialized
[2017-05-02 12:03:31]	DEBUG :	Model Class Initialized
[2017-05-02 12:03:31]	DEBUG :	Model Class Initialized
[2017-05-02 12:03:31]	DEBUG :	Model Class Initialized
[2017-05-02 12:03:31]	DEBUG :	Model Class Initialized
[2017-05-02 12:03:31]	DEBUG :	Model Class Initialized
[2017-05-02 12:03:31]	DEBUG :	Model Class Initialized
[2017-05-02 12:03:31]	DEBUG :	Model Class Initialized
[2017-05-02 12:03:31]	DEBUG :	Model Class Initialized
[2017-05-02 12:03:31]	DEBUG :	Model Class Initialized
[2017-05-02 12:03:31]	DEBUG :	Model Class Initialized
[2017-05-02 12:03:31]	DEBUG :	Model Class Initialized
[2017-05-02 12:03:31]	DEBUG :	Plugin loaded: to_pdf_pi
[2017-05-02 12:03:31]	DEBUG :	Model Class Initialized
[2017-05-02 12:03:31]	DEBUG :	Language file loaded: language/english/form_validation_lang.php
[2017-05-02 12:03:31]	SQL :	SELECT uid,bid,eid FROM `user` WHERE authkey='1.1.d886b8e8a0615'
[2017-05-02 12:03:31]	DEBUG :	Database Driver Class Initialized
[2017-05-02 12:03:31]	SQL :	SELECT roleid FROM 1_employee
							WHERE eid='1'
							AND bid='1'
[2017-05-02 12:03:31]	DEBUG :	Database Driver Class Initialized
[2017-05-02 12:03:31]	SQL :	SELECT * FROM 1_user_role
							WHERE roleid='1'
							AND bid='1'
[2017-05-02 12:03:31]	SQL :	SELECT m.modid,m.modname,m.moddesc,
							COALESCE(o.opt_add,0) as opt_add,
							COALESCE(o.opt_view,0) as opt_view,
							COALESCE(o.opt_download,0) as opt_download,
							COALESCE(opt_delete,0) as opt_delete 
							FROM module m
							LEFT JOIN (SELECT * FROM 1_role_mod_opt
							WHERE roleid='1' 
							AND bid='1') as o
							ON m.modid=o.modid where m.status=1
[2017-05-02 12:03:31]	SQL :	SELECT a.*,f.fieldname FROM 1_role_access a
								LEFT JOIN systemfields f on a.fieldid=f.fieldid
								WHERE a.roleid='1'
								AND a.bid='1'
								AND a.fieldtype='s'
[2017-05-02 12:03:31]	SQL :	SELECT * FROM 1_role_access
								WHERE roleid='1'
								AND bid='1'
							AND fieldtype='c'
[2017-05-02 12:03:31]	SQL :	SELECT pri.landingnumber,pri.used,pri.climit,
								if(pri.status=0,'Not in use',
								if(pri.type='0','Calltrack',
								if(pri.type='1','IVRS',
								if(pri.type='2','PBX','Not Assign')))) as type,
								pri.associateid,
								if(pri.status=0,'None',
								if(pri.type='0',g.groupname,
								if(pri.type='1',i.title,
								if(pri.type='2',pbx.title,'None')))) as title,
								if(pri.status=0,'None',
								if(pri.type='0',ch.lastcall,
								if(pri.type='1',ih.lastcall,
								if(pri.type='2',ph.lastcall,'None')))) as lastcall
								FROM prinumbers pri
								LEFT JOIN 1_groups g on (g.prinumber=pri.number AND g.gid=pri.associateid AND g.status=1)
								LEFT JOIN 1_ivrs i on (i.prinumber=pri.number AND i.ivrsid=pri.associateid AND i.status=1)
								LEFT JOIN 1_pbx pbx on (pbx.prinumber=pri.number AND pbx.pbxid=pri.associateid AND pbx.status=1)
								LEFT JOIN (SELECT g.gid,max(h.starttime) as lastcall FROM 1_groups g LEFT JOIN 1_callhistory h on g.gid=h.gid GROUP BY g.gid) ch on g.gid=ch.gid
								LEFT JOIN (SELECT i.ivrsid,max(h.datetime) as lastcall FROM 1_ivrs i LEFT JOIN 1_ivrshistory h on i.ivrsid=h.ivrsid GROUP BY i.ivrsid) ih on i.ivrsid=ih.ivrsid
								LEFT JOIN (SELECT p.pbxid,max(h.starttime) as lastcall FROM 1_pbx p LEFT JOIN 1_pbxreport h on p.pbxid=h.pbxid GROUP BY p.pbxid) ph on pbx.pbxid=ph.pbxid
								WHERE pri.bid=1
[2017-05-02 12:03:31]	SQL :	SELECT balance FROM sms_bal  where bid='1'
[2017-05-02 12:03:31]	SQL :	SELECT balance FROM call_bal where bid='1'
[2017-05-02 12:03:31]	SQL :	SELECT DISTINCT(e.eid),e.empname,eb.start_time FROM 1_employee e
		                       LEFT JOIN 1_emp_break eb ON e.eid = eb.eid
		                       LEFT JOIN 1_groups d ON e.eid = d.eid
		                       WHERE eb.end_time='0000-00-00' AND e.selfdisable=1  GROUP BY d.gid,e.eid
[2017-05-02 12:03:31]	SQL :	SELECT COALESCE(COUNT(callid), 0) AS day 
							FROM 1_callhistory h 
							LEFT JOIN 1_groups d ON d.gid = h.gid 
							WHERE 1 AND (DATE(h.`starttime`) = DATE(NOW()))
[2017-05-02 12:03:31]	SQL :	SELECT COALESCE(COUNT(callid), 0) AS day 
							FROM 1_callhistory h 
							LEFT JOIN 1_groups d ON d.gid = h.gid 
							WHERE 1  AND (DATE(h.`starttime`)  > DATE(DATE_SUB(NOW(), INTERVAL 1 WEEK)))
[2017-05-02 12:03:31]	SQL :	SELECT COALESCE(COUNT(callid), 0) AS day 
							FROM 1_callhistory h 
							LEFT JOIN 1_groups d ON d.gid = h.gid 
							WHERE 1  AND (MONTH(h.`starttime` ) = MONTH(NOW()))
[2017-05-02 12:03:31]	SQL :	SELECT COALESCE(COUNT(pbxid), 0) AS day 
							FROM 1_pbxreport h 
							WHERE 1 AND (DATE(h.`starttime`) = DATE(NOW()))
[2017-05-02 12:03:31]	SQL :	SELECT COALESCE(COUNT(pbxid), 0) AS day 
							FROM 1_pbxreport h 
							WHERE 1  AND (DATE(h.`starttime`)  > DATE(DATE_SUB(NOW(), INTERVAL 1 WEEK)))
[2017-05-02 12:03:31]	SQL :	SELECT COALESCE(COUNT(pbxid), 0) AS day 
							FROM 1_pbxreport h 
							WHERE 1  AND (MONTH(h.`starttime` ) = MONTH(NOW()))
[2017-05-02 12:03:31]	SQL :	SELECT COALESCE(COUNT(hid), 0) AS day 
							   FROM 1_ivrshistory h 
						       WHERE 1 AND (DATE(h.`datetime`) = DATE(NOW()))
[2017-05-02 12:03:31]	SQL :	SELECT COALESCE(COUNT(hid), 0) AS day 
							   FROM 1_ivrshistory h 
						       WHERE 1  AND (DATE(h.`datetime`)  > DATE(DATE_SUB(NOW(), INTERVAL 1 WEEK)))
[2017-05-02 12:03:31]	SQL :	SELECT COALESCE(COUNT(hid), 0) AS day 
							   FROM 1_ivrshistory h 
						       WHERE 1  AND (MONTH(h.`datetime` ) = MONTH(NOW()))
[2017-05-02 12:03:31]	SQL :	SELECT COALESCE(COUNT(leadid), 0) AS day 
							FROM 1_leads a 
							LEFT JOIN 1_leads_groups d ON d.gid = a.gid 
							WHERE (DATE(a.`createdon`) = DATE(NOW()))
[2017-05-02 12:03:31]	SQL :	SELECT COALESCE(COUNT(leadid), 0) AS day 
							FROM 1_leads a 
							LEFT JOIN 1_leads_groups d ON d.gid = a.gid 
							WHERE (DATE(a.`createdon`) = DATE(NOW()))
[2017-05-02 12:03:31]	SQL :	SELECT COALESCE(COUNT(leadid), 0) AS day 
							FROM 1_leads a 
							LEFT JOIN 1_leads_groups d ON d.gid = a.gid 
							WHERE (DATE(a.`createdon`) = DATE(NOW()))
[2017-05-02 12:03:31]	SQL :	SELECT COALESCE(COUNT(tktid), 0) AS day 
							FROM 1_support_tickets a 
							LEFT JOIN 1_support_groups d ON d.gid = a.gid 
							WHERE (DATE(a.`createdon`) = DATE(NOW()))
[2017-05-02 12:03:31]	SQL :	SELECT COALESCE(COUNT(tktid), 0) AS day 
							FROM 1_support_tickets a 
							LEFT JOIN 1_support_groups d ON d.gid = a.gid 
							WHERE (DATE(a.`createdon`) = DATE(NOW()))
[2017-05-02 12:03:31]	SQL :	SELECT COALESCE(COUNT(tktid), 0) AS day 
							FROM 1_support_tickets a 
							LEFT JOIN 1_support_groups d ON d.gid = a.gid 
							WHERE (DATE(a.`createdon`) = DATE(NOW()))
[2017-05-02 12:03:31]	SQL :	SELECT COALESCE(COUNT(callid), 0) AS day 
							FROM 1_outboundcalls h 
							WHERE (DATE(h.`starttime`) = DATE(NOW()))
[2017-05-02 12:03:31]	SQL :	SELECT COALESCE(COUNT(callid), 0) AS day 
							FROM 1_outboundcalls h 
							WHERE (DATE(h.`starttime`) = DATE(NOW()))
[2017-05-02 12:03:31]	SQL :	SELECT COALESCE(COUNT(callid), 0) AS day 
							FROM 1_outboundcalls h 
							WHERE (DATE(h.`starttime`) = DATE(NOW()))
[2017-05-02 12:03:31]	SQL :	SELECT COALESCE(COUNT(callid), 0) AS day 
							FROM 1_mtracker h 
							WHERE (DATE(h.`starttime`) = DATE(NOW()))
[2017-05-02 12:03:31]	SQL :	SELECT COALESCE(COUNT(callid), 0) AS day 
							FROM 1_mtracker h 
							WHERE (DATE(h.`starttime`) = DATE(NOW()))
[2017-05-02 12:03:31]	SQL :	SELECT COALESCE(COUNT(callid), 0) AS day 
							FROM 1_mtracker h 
							WHERE (DATE(h.`starttime`) = DATE(NOW()))
[2017-05-02 12:06:22]	DEBUG :	Config Class Initialized
[2017-05-02 12:06:22]	DEBUG :	Hooks Class Initialized
[2017-05-02 12:06:22]	DEBUG :	URI Class Initialized
[2017-05-02 12:06:22]	DEBUG :	Router Class Initialized
[2017-05-02 12:06:22]	DEBUG :	Output Class Initialized
[2017-05-02 12:06:22]	DEBUG :	Input Class Initialized
[2017-05-02 12:06:22]	DEBUG :	Global POST and COOKIE data sanitized
[2017-05-02 12:06:22]	DEBUG :	Language Class Initialized
[2017-05-02 12:06:22]	DEBUG :	Loader Class Initialized
[2017-05-02 12:06:22]	DEBUG :	Helper loaded: url_helper
[2017-05-02 12:06:22]	DEBUG :	Helper loaded: form_helper
[2017-05-02 12:06:22]	DEBUG :	Helper loaded: html_helper
[2017-05-02 12:06:22]	DEBUG :	Helper loaded: email_helper
[2017-05-02 12:06:22]	DEBUG :	Helper loaded: ckeditor_helper
[2017-05-02 12:06:22]	DEBUG :	Helper loaded: mcube_helper
[2017-05-02 12:06:22]	DEBUG :	Database Driver Class Initialized
[2017-05-02 12:06:22]	ERROR :	Severity: 8192  --> mysql_pconnect(): The mysql extension is deprecated and will be removed in the future: use mysqli or PDO instead /var/www/html/mcnew/system/database/drivers/mysql/mysql_driver.php 88
[2017-05-02 12:06:22]	DEBUG :	Session Class Initialized
[2017-05-02 12:06:22]	DEBUG :	Helper loaded: string_helper
[2017-05-02 12:06:22]	DEBUG :	Encrypt Class Initialized
[2017-05-02 12:06:22]	DEBUG :	A session cookie was not found.
[2017-05-02 12:06:22]	SQL :	INSERT INTO `call_sessions` (`session_id`, `ip_address`, `user_agent`, `last_activity`) VALUES ('4450817755a7d4097607f3452d42b5e7', '192.168.1.124', 'Dalvik/2.1.0 (Linux; U; Android 6.0; Panasonic T44', 1493706982)
[2017-05-02 12:06:23]	DEBUG :	Session routines successfully run
[2017-05-02 12:06:23]	DEBUG :	Table Class Initialized
[2017-05-02 12:06:23]	DEBUG :	Pagination Class Initialized
[2017-05-02 12:06:23]	DEBUG :	Config file loaded: config/paypallib_config.php
[2017-05-02 12:06:23]	DEBUG :	Form Validation Class Initialized
[2017-05-02 12:06:23]	DEBUG :	Email Class Initialized
[2017-05-02 12:06:23]	DEBUG :	Language file loaded: language/english/calendar_lang.php
[2017-05-02 12:06:23]	DEBUG :	Calendar Class Initialized
[2017-05-02 12:06:23]	DEBUG :	Controller Class Initialized
[2017-05-02 12:06:23]	DEBUG :	Model Class Initialized
[2017-05-02 12:06:23]	DEBUG :	Model Class Initialized
[2017-05-02 12:06:23]	DEBUG :	Model Class Initialized
[2017-05-02 12:06:23]	DEBUG :	Model Class Initialized
[2017-05-02 12:06:23]	DEBUG :	Model Class Initialized
[2017-05-02 12:06:23]	DEBUG :	Model Class Initialized
[2017-05-02 12:06:23]	DEBUG :	Model Class Initialized
[2017-05-02 12:06:23]	DEBUG :	Model Class Initialized
[2017-05-02 12:06:23]	DEBUG :	Model Class Initialized
[2017-05-02 12:06:23]	DEBUG :	Model Class Initialized
[2017-05-02 12:06:23]	DEBUG :	Model Class Initialized
[2017-05-02 12:06:23]	DEBUG :	Model Class Initialized
[2017-05-02 12:06:23]	DEBUG :	Model Class Initialized
[2017-05-02 12:06:23]	DEBUG :	Model Class Initialized
[2017-05-02 12:06:23]	DEBUG :	Plugin loaded: to_pdf_pi
[2017-05-02 12:06:23]	DEBUG :	Model Class Initialized
[2017-05-02 12:06:23]	DEBUG :	Language file loaded: language/english/form_validation_lang.php
[2017-05-02 12:06:23]	SQL :	SELECT uid,bid,eid FROM `user` WHERE authkey='1.1.d886b8e8a0615'
[2017-05-02 12:06:23]	DEBUG :	Database Driver Class Initialized
[2017-05-02 12:06:23]	SQL :	SELECT roleid FROM 1_employee
							WHERE eid='1'
							AND bid='1'
[2017-05-02 12:06:23]	DEBUG :	Database Driver Class Initialized
[2017-05-02 12:06:23]	SQL :	SELECT * FROM 1_user_role
							WHERE roleid='1'
							AND bid='1'
[2017-05-02 12:06:23]	SQL :	SELECT m.modid,m.modname,m.moddesc,
							COALESCE(o.opt_add,0) as opt_add,
							COALESCE(o.opt_view,0) as opt_view,
							COALESCE(o.opt_download,0) as opt_download,
							COALESCE(opt_delete,0) as opt_delete 
							FROM module m
							LEFT JOIN (SELECT * FROM 1_role_mod_opt
							WHERE roleid='1' 
							AND bid='1') as o
							ON m.modid=o.modid where m.status=1
[2017-05-02 12:06:23]	SQL :	SELECT a.*,f.fieldname FROM 1_role_access a
								LEFT JOIN systemfields f on a.fieldid=f.fieldid
								WHERE a.roleid='1'
								AND a.bid='1'
								AND a.fieldtype='s'
[2017-05-02 12:06:23]	SQL :	SELECT * FROM 1_role_access
								WHERE roleid='1'
								AND bid='1'
							AND fieldtype='c'
[2017-05-02 12:06:23]	SQL :	SELECT pri.landingnumber,pri.used,pri.climit,
								if(pri.status=0,'Not in use',
								if(pri.type='0','Calltrack',
								if(pri.type='1','IVRS',
								if(pri.type='2','PBX','Not Assign')))) as type,
								pri.associateid,
								if(pri.status=0,'None',
								if(pri.type='0',g.groupname,
								if(pri.type='1',i.title,
								if(pri.type='2',pbx.title,'None')))) as title,
								if(pri.status=0,'None',
								if(pri.type='0',ch.lastcall,
								if(pri.type='1',ih.lastcall,
								if(pri.type='2',ph.lastcall,'None')))) as lastcall
								FROM prinumbers pri
								LEFT JOIN 1_groups g on (g.prinumber=pri.number AND g.gid=pri.associateid AND g.status=1)
								LEFT JOIN 1_ivrs i on (i.prinumber=pri.number AND i.ivrsid=pri.associateid AND i.status=1)
								LEFT JOIN 1_pbx pbx on (pbx.prinumber=pri.number AND pbx.pbxid=pri.associateid AND pbx.status=1)
								LEFT JOIN (SELECT g.gid,max(h.starttime) as lastcall FROM 1_groups g LEFT JOIN 1_callhistory h on g.gid=h.gid GROUP BY g.gid) ch on g.gid=ch.gid
								LEFT JOIN (SELECT i.ivrsid,max(h.datetime) as lastcall FROM 1_ivrs i LEFT JOIN 1_ivrshistory h on i.ivrsid=h.ivrsid GROUP BY i.ivrsid) ih on i.ivrsid=ih.ivrsid
								LEFT JOIN (SELECT p.pbxid,max(h.starttime) as lastcall FROM 1_pbx p LEFT JOIN 1_pbxreport h on p.pbxid=h.pbxid GROUP BY p.pbxid) ph on pbx.pbxid=ph.pbxid
								WHERE pri.bid=1
[2017-05-02 12:06:23]	SQL :	SELECT balance FROM sms_bal  where bid='1'
[2017-05-02 12:06:23]	SQL :	SELECT balance FROM call_bal where bid='1'
[2017-05-02 12:06:23]	SQL :	SELECT DISTINCT(e.eid),e.empname,eb.start_time FROM 1_employee e
		                       LEFT JOIN 1_emp_break eb ON e.eid = eb.eid
		                       LEFT JOIN 1_groups d ON e.eid = d.eid
		                       WHERE eb.end_time='0000-00-00' AND e.selfdisable=1  GROUP BY d.gid,e.eid
[2017-05-02 12:06:23]	SQL :	SELECT COALESCE(COUNT(callid), 0) AS day 
							FROM 1_callhistory h 
							LEFT JOIN 1_groups d ON d.gid = h.gid 
							WHERE 1 AND (DATE(h.`starttime`) = DATE(NOW()))
[2017-05-02 12:06:23]	SQL :	SELECT COALESCE(COUNT(callid), 0) AS day 
							FROM 1_callhistory h 
							LEFT JOIN 1_groups d ON d.gid = h.gid 
							WHERE 1  AND (DATE(h.`starttime`)  > DATE(DATE_SUB(NOW(), INTERVAL 1 WEEK)))
[2017-05-02 12:06:23]	SQL :	SELECT COALESCE(COUNT(callid), 0) AS day 
							FROM 1_callhistory h 
							LEFT JOIN 1_groups d ON d.gid = h.gid 
							WHERE 1  AND (MONTH(h.`starttime` ) = MONTH(NOW()))
[2017-05-02 12:06:23]	SQL :	SELECT COALESCE(COUNT(pbxid), 0) AS day 
							FROM 1_pbxreport h 
							WHERE 1 AND (DATE(h.`starttime`) = DATE(NOW()))
[2017-05-02 12:06:23]	SQL :	SELECT COALESCE(COUNT(pbxid), 0) AS day 
							FROM 1_pbxreport h 
							WHERE 1  AND (DATE(h.`starttime`)  > DATE(DATE_SUB(NOW(), INTERVAL 1 WEEK)))
[2017-05-02 12:06:23]	SQL :	SELECT COALESCE(COUNT(pbxid), 0) AS day 
							FROM 1_pbxreport h 
							WHERE 1  AND (MONTH(h.`starttime` ) = MONTH(NOW()))
[2017-05-02 12:06:23]	SQL :	SELECT COALESCE(COUNT(hid), 0) AS day 
							   FROM 1_ivrshistory h 
						       WHERE 1 AND (DATE(h.`datetime`) = DATE(NOW()))
[2017-05-02 12:06:23]	SQL :	SELECT COALESCE(COUNT(hid), 0) AS day 
							   FROM 1_ivrshistory h 
						       WHERE 1  AND (DATE(h.`datetime`)  > DATE(DATE_SUB(NOW(), INTERVAL 1 WEEK)))
[2017-05-02 12:06:23]	SQL :	SELECT COALESCE(COUNT(hid), 0) AS day 
							   FROM 1_ivrshistory h 
						       WHERE 1  AND (MONTH(h.`datetime` ) = MONTH(NOW()))
[2017-05-02 12:06:23]	SQL :	SELECT COALESCE(COUNT(leadid), 0) AS day 
							FROM 1_leads a 
							LEFT JOIN 1_leads_groups d ON d.gid = a.gid 
							WHERE (DATE(a.`createdon`) = DATE(NOW()))
[2017-05-02 12:06:23]	SQL :	SELECT COALESCE(COUNT(leadid), 0) AS day 
							FROM 1_leads a 
							LEFT JOIN 1_leads_groups d ON d.gid = a.gid 
							WHERE (DATE(a.`createdon`) = DATE(NOW()))
[2017-05-02 12:06:23]	SQL :	SELECT COALESCE(COUNT(leadid), 0) AS day 
							FROM 1_leads a 
							LEFT JOIN 1_leads_groups d ON d.gid = a.gid 
							WHERE (DATE(a.`createdon`) = DATE(NOW()))
[2017-05-02 12:06:23]	SQL :	SELECT COALESCE(COUNT(tktid), 0) AS day 
							FROM 1_support_tickets a 
							LEFT JOIN 1_support_groups d ON d.gid = a.gid 
							WHERE (DATE(a.`createdon`) = DATE(NOW()))
[2017-05-02 12:06:23]	SQL :	SELECT COALESCE(COUNT(tktid), 0) AS day 
							FROM 1_support_tickets a 
							LEFT JOIN 1_support_groups d ON d.gid = a.gid 
							WHERE (DATE(a.`createdon`) = DATE(NOW()))
[2017-05-02 12:06:23]	SQL :	SELECT COALESCE(COUNT(tktid), 0) AS day 
							FROM 1_support_tickets a 
							LEFT JOIN 1_support_groups d ON d.gid = a.gid 
							WHERE (DATE(a.`createdon`) = DATE(NOW()))
[2017-05-02 12:06:23]	SQL :	SELECT COALESCE(COUNT(callid), 0) AS day 
							FROM 1_outboundcalls h 
							WHERE (DATE(h.`starttime`) = DATE(NOW()))
[2017-05-02 12:06:23]	SQL :	SELECT COALESCE(COUNT(callid), 0) AS day 
							FROM 1_outboundcalls h 
							WHERE (DATE(h.`starttime`) = DATE(NOW()))
[2017-05-02 12:06:23]	SQL :	SELECT COALESCE(COUNT(callid), 0) AS day 
							FROM 1_outboundcalls h 
							WHERE (DATE(h.`starttime`) = DATE(NOW()))
[2017-05-02 12:06:23]	SQL :	SELECT COALESCE(COUNT(callid), 0) AS day 
							FROM 1_mtracker h 
							WHERE (DATE(h.`starttime`) = DATE(NOW()))
[2017-05-02 12:06:23]	SQL :	SELECT COALESCE(COUNT(callid), 0) AS day 
							FROM 1_mtracker h 
							WHERE (DATE(h.`starttime`) = DATE(NOW()))
[2017-05-02 12:06:23]	SQL :	SELECT COALESCE(COUNT(callid), 0) AS day 
							FROM 1_mtracker h 
							WHERE (DATE(h.`starttime`) = DATE(NOW()))
[2017-05-02 12:08:34]	DEBUG :	Config Class Initialized
[2017-05-02 12:08:34]	DEBUG :	Hooks Class Initialized
[2017-05-02 12:08:34]	DEBUG :	URI Class Initialized
[2017-05-02 12:08:34]	DEBUG :	Router Class Initialized
[2017-05-02 12:08:34]	DEBUG :	Output Class Initialized
[2017-05-02 12:08:34]	DEBUG :	Input Class Initialized
[2017-05-02 12:08:34]	DEBUG :	Global POST and COOKIE data sanitized
[2017-05-02 12:08:34]	DEBUG :	Language Class Initialized
[2017-05-02 12:08:34]	DEBUG :	Loader Class Initialized
[2017-05-02 12:08:34]	DEBUG :	Helper loaded: url_helper
[2017-05-02 12:08:34]	DEBUG :	Helper loaded: form_helper
[2017-05-02 12:08:34]	DEBUG :	Helper loaded: html_helper
[2017-05-02 12:08:34]	DEBUG :	Helper loaded: email_helper
[2017-05-02 12:08:34]	DEBUG :	Helper loaded: ckeditor_helper
[2017-05-02 12:08:34]	DEBUG :	Helper loaded: mcube_helper
[2017-05-02 12:08:34]	DEBUG :	Database Driver Class Initialized
[2017-05-02 12:08:34]	ERROR :	Severity: 8192  --> mysql_pconnect(): The mysql extension is deprecated and will be removed in the future: use mysqli or PDO instead /var/www/html/mcnew/system/database/drivers/mysql/mysql_driver.php 88
[2017-05-02 12:08:34]	DEBUG :	Session Class Initialized
[2017-05-02 12:08:34]	DEBUG :	Helper loaded: string_helper
[2017-05-02 12:08:34]	DEBUG :	Encrypt Class Initialized
[2017-05-02 12:08:34]	DEBUG :	A session cookie was not found.
[2017-05-02 12:08:34]	SQL :	INSERT INTO `call_sessions` (`session_id`, `ip_address`, `user_agent`, `last_activity`) VALUES ('2f2992a7aa4745e21680fc3d0fa6edcc', '192.168.1.124', 'Dalvik/2.1.0 (Linux; U; Android 6.0; Panasonic T44', 1493707114)
[2017-05-02 12:08:34]	DEBUG :	Session routines successfully run
[2017-05-02 12:08:34]	DEBUG :	Table Class Initialized
[2017-05-02 12:08:34]	DEBUG :	Pagination Class Initialized
[2017-05-02 12:08:34]	DEBUG :	Config file loaded: config/paypallib_config.php
[2017-05-02 12:08:34]	DEBUG :	Form Validation Class Initialized
[2017-05-02 12:08:34]	DEBUG :	Email Class Initialized
[2017-05-02 12:08:34]	DEBUG :	Language file loaded: language/english/calendar_lang.php
[2017-05-02 12:08:34]	DEBUG :	Calendar Class Initialized
[2017-05-02 12:08:34]	DEBUG :	Controller Class Initialized
[2017-05-02 12:08:34]	DEBUG :	Model Class Initialized
[2017-05-02 12:08:34]	DEBUG :	Model Class Initialized
[2017-05-02 12:08:34]	DEBUG :	Model Class Initialized
[2017-05-02 12:08:34]	DEBUG :	Model Class Initialized
[2017-05-02 12:08:34]	DEBUG :	Model Class Initialized
[2017-05-02 12:08:34]	DEBUG :	Model Class Initialized
[2017-05-02 12:08:34]	DEBUG :	Model Class Initialized
[2017-05-02 12:08:34]	DEBUG :	Model Class Initialized
[2017-05-02 12:08:34]	DEBUG :	Model Class Initialized
[2017-05-02 12:08:34]	DEBUG :	Model Class Initialized
[2017-05-02 12:08:34]	DEBUG :	Model Class Initialized
[2017-05-02 12:08:34]	DEBUG :	Model Class Initialized
[2017-05-02 12:08:34]	DEBUG :	Model Class Initialized
[2017-05-02 12:08:34]	DEBUG :	Model Class Initialized
[2017-05-02 12:08:34]	DEBUG :	Plugin loaded: to_pdf_pi
[2017-05-02 12:08:34]	DEBUG :	Model Class Initialized
[2017-05-02 12:08:34]	DEBUG :	Language file loaded: language/english/form_validation_lang.php
[2017-05-02 12:08:34]	SQL :	SELECT uid,bid,eid FROM `user` WHERE authkey='1.1.d886b8e8a0615'
[2017-05-02 12:08:34]	DEBUG :	Database Driver Class Initialized
[2017-05-02 12:08:34]	SQL :	SELECT roleid FROM 1_employee
							WHERE eid='1'
							AND bid='1'
[2017-05-02 12:08:34]	DEBUG :	Database Driver Class Initialized
[2017-05-02 12:08:34]	SQL :	SELECT * FROM 1_user_role
							WHERE roleid='1'
							AND bid='1'
[2017-05-02 12:08:34]	SQL :	SELECT m.modid,m.modname,m.moddesc,
							COALESCE(o.opt_add,0) as opt_add,
							COALESCE(o.opt_view,0) as opt_view,
							COALESCE(o.opt_download,0) as opt_download,
							COALESCE(opt_delete,0) as opt_delete 
							FROM module m
							LEFT JOIN (SELECT * FROM 1_role_mod_opt
							WHERE roleid='1' 
							AND bid='1') as o
							ON m.modid=o.modid where m.status=1
[2017-05-02 12:08:34]	SQL :	SELECT a.*,f.fieldname FROM 1_role_access a
								LEFT JOIN systemfields f on a.fieldid=f.fieldid
								WHERE a.roleid='1'
								AND a.bid='1'
								AND a.fieldtype='s'
[2017-05-02 12:08:34]	SQL :	SELECT * FROM 1_role_access
								WHERE roleid='1'
								AND bid='1'
							AND fieldtype='c'
[2017-05-02 12:08:34]	SQL :	SELECT pri.landingnumber,pri.used,pri.climit,
								if(pri.status=0,'Not in use',
								if(pri.type='0','Calltrack',
								if(pri.type='1','IVRS',
								if(pri.type='2','PBX','Not Assign')))) as type,
								pri.associateid,
								if(pri.status=0,'None',
								if(pri.type='0',g.groupname,
								if(pri.type='1',i.title,
								if(pri.type='2',pbx.title,'None')))) as title,
								if(pri.status=0,'None',
								if(pri.type='0',ch.lastcall,
								if(pri.type='1',ih.lastcall,
								if(pri.type='2',ph.lastcall,'None')))) as lastcall
								FROM prinumbers pri
								LEFT JOIN 1_groups g on (g.prinumber=pri.number AND g.gid=pri.associateid AND g.status=1)
								LEFT JOIN 1_ivrs i on (i.prinumber=pri.number AND i.ivrsid=pri.associateid AND i.status=1)
								LEFT JOIN 1_pbx pbx on (pbx.prinumber=pri.number AND pbx.pbxid=pri.associateid AND pbx.status=1)
								LEFT JOIN (SELECT g.gid,max(h.starttime) as lastcall FROM 1_groups g LEFT JOIN 1_callhistory h on g.gid=h.gid GROUP BY g.gid) ch on g.gid=ch.gid
								LEFT JOIN (SELECT i.ivrsid,max(h.datetime) as lastcall FROM 1_ivrs i LEFT JOIN 1_ivrshistory h on i.ivrsid=h.ivrsid GROUP BY i.ivrsid) ih on i.ivrsid=ih.ivrsid
								LEFT JOIN (SELECT p.pbxid,max(h.starttime) as lastcall FROM 1_pbx p LEFT JOIN 1_pbxreport h on p.pbxid=h.pbxid GROUP BY p.pbxid) ph on pbx.pbxid=ph.pbxid
								WHERE pri.bid=1
[2017-05-02 12:08:34]	SQL :	SELECT balance FROM sms_bal  where bid='1'
[2017-05-02 12:08:34]	SQL :	SELECT balance FROM call_bal where bid='1'
[2017-05-02 12:08:34]	SQL :	SELECT DISTINCT(e.eid),e.empname,eb.start_time FROM 1_employee e
		                       LEFT JOIN 1_emp_break eb ON e.eid = eb.eid
		                       LEFT JOIN 1_groups d ON e.eid = d.eid
		                       WHERE eb.end_time='0000-00-00' AND e.selfdisable=1  GROUP BY d.gid,e.eid
[2017-05-02 12:08:34]	SQL :	SELECT COALESCE(COUNT(callid), 0) AS day 
							FROM 1_callhistory h 
							LEFT JOIN 1_groups d ON d.gid = h.gid 
							WHERE 1 AND (DATE(h.`starttime`) = DATE(NOW()))
[2017-05-02 12:08:34]	SQL :	SELECT COALESCE(COUNT(callid), 0) AS day 
							FROM 1_callhistory h 
							LEFT JOIN 1_groups d ON d.gid = h.gid 
							WHERE 1  AND (DATE(h.`starttime`)  > DATE(DATE_SUB(NOW(), INTERVAL 1 WEEK)))
[2017-05-02 12:08:34]	SQL :	SELECT COALESCE(COUNT(callid), 0) AS day 
							FROM 1_callhistory h 
							LEFT JOIN 1_groups d ON d.gid = h.gid 
							WHERE 1  AND (MONTH(h.`starttime` ) = MONTH(NOW()))
[2017-05-02 12:08:34]	SQL :	SELECT COALESCE(COUNT(pbxid), 0) AS day 
							FROM 1_pbxreport h 
							WHERE 1 AND (DATE(h.`starttime`) = DATE(NOW()))
[2017-05-02 12:08:34]	SQL :	SELECT COALESCE(COUNT(pbxid), 0) AS day 
							FROM 1_pbxreport h 
							WHERE 1  AND (DATE(h.`starttime`)  > DATE(DATE_SUB(NOW(), INTERVAL 1 WEEK)))
[2017-05-02 12:08:34]	SQL :	SELECT COALESCE(COUNT(pbxid), 0) AS day 
							FROM 1_pbxreport h 
							WHERE 1  AND (MONTH(h.`starttime` ) = MONTH(NOW()))
[2017-05-02 12:08:34]	SQL :	SELECT COALESCE(COUNT(hid), 0) AS day 
							   FROM 1_ivrshistory h 
						       WHERE 1 AND (DATE(h.`datetime`) = DATE(NOW()))
[2017-05-02 12:08:34]	SQL :	SELECT COALESCE(COUNT(hid), 0) AS day 
							   FROM 1_ivrshistory h 
						       WHERE 1  AND (DATE(h.`datetime`)  > DATE(DATE_SUB(NOW(), INTERVAL 1 WEEK)))
[2017-05-02 12:08:34]	SQL :	SELECT COALESCE(COUNT(hid), 0) AS day 
							   FROM 1_ivrshistory h 
						       WHERE 1  AND (MONTH(h.`datetime` ) = MONTH(NOW()))
[2017-05-02 12:08:34]	SQL :	SELECT COALESCE(COUNT(leadid), 0) AS day 
							FROM 1_leads a 
							LEFT JOIN 1_leads_groups d ON d.gid = a.gid 
							WHERE (DATE(a.`createdon`) = DATE(NOW()))
[2017-05-02 12:08:34]	SQL :	SELECT COALESCE(COUNT(leadid), 0) AS day 
							FROM 1_leads a 
							LEFT JOIN 1_leads_groups d ON d.gid = a.gid 
							WHERE (DATE(a.`createdon`) = DATE(NOW()))
[2017-05-02 12:08:34]	SQL :	SELECT COALESCE(COUNT(leadid), 0) AS day 
							FROM 1_leads a 
							LEFT JOIN 1_leads_groups d ON d.gid = a.gid 
							WHERE (DATE(a.`createdon`) = DATE(NOW()))
[2017-05-02 12:08:34]	SQL :	SELECT COALESCE(COUNT(tktid), 0) AS day 
							FROM 1_support_tickets a 
							LEFT JOIN 1_support_groups d ON d.gid = a.gid 
							WHERE (DATE(a.`createdon`) = DATE(NOW()))
[2017-05-02 12:08:34]	SQL :	SELECT COALESCE(COUNT(tktid), 0) AS day 
							FROM 1_support_tickets a 
							LEFT JOIN 1_support_groups d ON d.gid = a.gid 
							WHERE (DATE(a.`createdon`) = DATE(NOW()))
[2017-05-02 12:08:34]	SQL :	SELECT COALESCE(COUNT(tktid), 0) AS day 
							FROM 1_support_tickets a 
							LEFT JOIN 1_support_groups d ON d.gid = a.gid 
							WHERE (DATE(a.`createdon`) = DATE(NOW()))
[2017-05-02 12:08:34]	SQL :	SELECT COALESCE(COUNT(callid), 0) AS day 
							FROM 1_outboundcalls h 
							WHERE (DATE(h.`starttime`) = DATE(NOW()))
[2017-05-02 12:08:34]	SQL :	SELECT COALESCE(COUNT(callid), 0) AS day 
							FROM 1_outboundcalls h 
							WHERE (DATE(h.`starttime`) = DATE(NOW()))
[2017-05-02 12:08:34]	SQL :	SELECT COALESCE(COUNT(callid), 0) AS day 
							FROM 1_outboundcalls h 
							WHERE (DATE(h.`starttime`) = DATE(NOW()))
[2017-05-02 12:08:34]	SQL :	SELECT COALESCE(COUNT(callid), 0) AS day 
							FROM 1_mtracker h 
							WHERE (DATE(h.`starttime`) = DATE(NOW()))
[2017-05-02 12:08:34]	SQL :	SELECT COALESCE(COUNT(callid), 0) AS day 
							FROM 1_mtracker h 
							WHERE (DATE(h.`starttime`) = DATE(NOW()))
[2017-05-02 12:08:34]	SQL :	SELECT COALESCE(COUNT(callid), 0) AS day 
							FROM 1_mtracker h 
							WHERE (DATE(h.`starttime`) = DATE(NOW()))
[2017-05-02 12:10:06]	DEBUG :	Config Class Initialized
[2017-05-02 12:10:06]	DEBUG :	Hooks Class Initialized
[2017-05-02 12:10:06]	DEBUG :	URI Class Initialized
[2017-05-02 12:10:06]	DEBUG :	Router Class Initialized
[2017-05-02 12:10:06]	DEBUG :	Output Class Initialized
[2017-05-02 12:10:06]	DEBUG :	Input Class Initialized
[2017-05-02 12:10:06]	DEBUG :	Global POST and COOKIE data sanitized
[2017-05-02 12:10:06]	DEBUG :	Language Class Initialized
[2017-05-02 12:10:06]	DEBUG :	Loader Class Initialized
[2017-05-02 12:10:06]	DEBUG :	Helper loaded: url_helper
[2017-05-02 12:10:06]	DEBUG :	Helper loaded: form_helper
[2017-05-02 12:10:06]	DEBUG :	Helper loaded: html_helper
[2017-05-02 12:10:06]	DEBUG :	Helper loaded: email_helper
[2017-05-02 12:10:06]	DEBUG :	Helper loaded: ckeditor_helper
[2017-05-02 12:10:06]	DEBUG :	Helper loaded: mcube_helper
[2017-05-02 12:10:06]	DEBUG :	Database Driver Class Initialized
[2017-05-02 12:10:06]	ERROR :	Severity: 8192  --> mysql_pconnect(): The mysql extension is deprecated and will be removed in the future: use mysqli or PDO instead /var/www/html/mcnew/system/database/drivers/mysql/mysql_driver.php 88
[2017-05-02 12:10:06]	DEBUG :	Session Class Initialized
[2017-05-02 12:10:06]	DEBUG :	Helper loaded: string_helper
[2017-05-02 12:10:06]	DEBUG :	Encrypt Class Initialized
[2017-05-02 12:10:06]	DEBUG :	A session cookie was not found.
[2017-05-02 12:10:06]	SQL :	INSERT INTO `call_sessions` (`session_id`, `ip_address`, `user_agent`, `last_activity`) VALUES ('5cd713f975a87443c03222dca265f49a', '192.168.1.123', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36', 1493707206)
[2017-05-02 12:10:06]	DEBUG :	Session routines successfully run
[2017-05-02 12:10:06]	DEBUG :	Table Class Initialized
[2017-05-02 12:10:06]	DEBUG :	Pagination Class Initialized
[2017-05-02 12:10:06]	DEBUG :	Config file loaded: config/paypallib_config.php
[2017-05-02 12:10:06]	DEBUG :	Form Validation Class Initialized
[2017-05-02 12:10:06]	DEBUG :	Email Class Initialized
[2017-05-02 12:10:06]	DEBUG :	Language file loaded: language/english/calendar_lang.php
[2017-05-02 12:10:06]	DEBUG :	Calendar Class Initialized
[2017-05-02 12:10:06]	DEBUG :	Controller Class Initialized
[2017-05-02 12:10:06]	DEBUG :	Model Class Initialized
[2017-05-02 12:10:06]	DEBUG :	Model Class Initialized
[2017-05-02 12:10:06]	DEBUG :	Model Class Initialized
[2017-05-02 12:10:06]	DEBUG :	Model Class Initialized
[2017-05-02 12:10:06]	DEBUG :	Model Class Initialized
[2017-05-02 12:10:06]	DEBUG :	Model Class Initialized
[2017-05-02 12:10:06]	DEBUG :	Model Class Initialized
[2017-05-02 12:10:06]	DEBUG :	Model Class Initialized
[2017-05-02 12:10:06]	DEBUG :	Model Class Initialized
[2017-05-02 12:10:06]	DEBUG :	Model Class Initialized
[2017-05-02 12:10:06]	DEBUG :	Model Class Initialized
[2017-05-02 12:10:06]	DEBUG :	Model Class Initialized
[2017-05-02 12:10:06]	DEBUG :	Model Class Initialized
[2017-05-02 12:10:06]	DEBUG :	Model Class Initialized
[2017-05-02 12:10:06]	DEBUG :	Plugin loaded: to_pdf_pi
[2017-05-02 12:10:06]	DEBUG :	Model Class Initialized
[2017-05-02 12:10:06]	DEBUG :	Language file loaded: language/english/form_validation_lang.php
[2017-05-02 12:10:06]	SQL :	SELECT uid,bid,eid FROM `user` WHERE authkey='1.1.d886b8e8a0615'
[2017-05-02 12:10:06]	DEBUG :	Database Driver Class Initialized
[2017-05-02 12:10:06]	SQL :	SELECT roleid FROM 1_employee
							WHERE eid='1'
							AND bid='1'
[2017-05-02 12:10:06]	DEBUG :	Database Driver Class Initialized
[2017-05-02 12:10:06]	SQL :	SELECT * FROM 1_user_role
							WHERE roleid='1'
							AND bid='1'
[2017-05-02 12:10:06]	SQL :	SELECT m.modid,m.modname,m.moddesc,
							COALESCE(o.opt_add,0) as opt_add,
							COALESCE(o.opt_view,0) as opt_view,
							COALESCE(o.opt_download,0) as opt_download,
							COALESCE(opt_delete,0) as opt_delete 
							FROM module m
							LEFT JOIN (SELECT * FROM 1_role_mod_opt
							WHERE roleid='1' 
							AND bid='1') as o
							ON m.modid=o.modid where m.status=1
[2017-05-02 12:10:06]	SQL :	SELECT a.*,f.fieldname FROM 1_role_access a
								LEFT JOIN systemfields f on a.fieldid=f.fieldid
								WHERE a.roleid='1'
								AND a.bid='1'
								AND a.fieldtype='s'
[2017-05-02 12:10:06]	SQL :	SELECT * FROM 1_role_access
								WHERE roleid='1'
								AND bid='1'
							AND fieldtype='c'
[2017-05-02 12:10:06]	SQL :	SELECT pri.landingnumber,pri.used,pri.climit,
								if(pri.status=0,'Not in use',
								if(pri.type='0','Calltrack',
								if(pri.type='1','IVRS',
								if(pri.type='2','PBX','Not Assign')))) as type,
								pri.associateid,
								if(pri.status=0,'None',
								if(pri.type='0',g.groupname,
								if(pri.type='1',i.title,
								if(pri.type='2',pbx.title,'None')))) as title,
								if(pri.status=0,'None',
								if(pri.type='0',ch.lastcall,
								if(pri.type='1',ih.lastcall,
								if(pri.type='2',ph.lastcall,'None')))) as lastcall
								FROM prinumbers pri
								LEFT JOIN 1_groups g on (g.prinumber=pri.number AND g.gid=pri.associateid AND g.status=1)
								LEFT JOIN 1_ivrs i on (i.prinumber=pri.number AND i.ivrsid=pri.associateid AND i.status=1)
								LEFT JOIN 1_pbx pbx on (pbx.prinumber=pri.number AND pbx.pbxid=pri.associateid AND pbx.status=1)
								LEFT JOIN (SELECT g.gid,max(h.starttime) as lastcall FROM 1_groups g LEFT JOIN 1_callhistory h on g.gid=h.gid GROUP BY g.gid) ch on g.gid=ch.gid
								LEFT JOIN (SELECT i.ivrsid,max(h.datetime) as lastcall FROM 1_ivrs i LEFT JOIN 1_ivrshistory h on i.ivrsid=h.ivrsid GROUP BY i.ivrsid) ih on i.ivrsid=ih.ivrsid
								LEFT JOIN (SELECT p.pbxid,max(h.starttime) as lastcall FROM 1_pbx p LEFT JOIN 1_pbxreport h on p.pbxid=h.pbxid GROUP BY p.pbxid) ph on pbx.pbxid=ph.pbxid
								WHERE pri.bid=1
[2017-05-02 12:10:06]	SQL :	SELECT balance FROM sms_bal  where bid='1'
[2017-05-02 12:10:06]	SQL :	SELECT balance FROM call_bal where bid='1'
[2017-05-02 12:10:06]	SQL :	SELECT DISTINCT(e.eid),e.empname,eb.start_time FROM 1_employee e
		                       LEFT JOIN 1_emp_break eb ON e.eid = eb.eid
		                       LEFT JOIN 1_groups d ON e.eid = d.eid
		                       WHERE eb.end_time='0000-00-00' AND e.selfdisable=1  GROUP BY d.gid,e.eid
[2017-05-02 12:10:06]	SQL :	SELECT COALESCE(COUNT(callid), 0) AS day 
							FROM 1_callhistory h 
							LEFT JOIN 1_groups d ON d.gid = h.gid 
							WHERE 1 AND (DATE(h.`starttime`) = DATE(NOW()))
[2017-05-02 12:10:06]	SQL :	SELECT COALESCE(COUNT(callid), 0) AS day 
							FROM 1_callhistory h 
							LEFT JOIN 1_groups d ON d.gid = h.gid 
							WHERE 1  AND (DATE(h.`starttime`)  > DATE(DATE_SUB(NOW(), INTERVAL 1 WEEK)))
[2017-05-02 12:10:06]	SQL :	SELECT COALESCE(COUNT(callid), 0) AS day 
							FROM 1_callhistory h 
							LEFT JOIN 1_groups d ON d.gid = h.gid 
							WHERE 1  AND (MONTH(h.`starttime` ) = MONTH(NOW()))
[2017-05-02 12:10:06]	SQL :	SELECT COALESCE(COUNT(pbxid), 0) AS day 
							FROM 1_pbxreport h 
							WHERE 1 AND (DATE(h.`starttime`) = DATE(NOW()))
[2017-05-02 12:10:06]	SQL :	SELECT COALESCE(COUNT(pbxid), 0) AS day 
							FROM 1_pbxreport h 
							WHERE 1  AND (DATE(h.`starttime`)  > DATE(DATE_SUB(NOW(), INTERVAL 1 WEEK)))
[2017-05-02 12:10:06]	SQL :	SELECT COALESCE(COUNT(pbxid), 0) AS day 
							FROM 1_pbxreport h 
							WHERE 1  AND (MONTH(h.`starttime` ) = MONTH(NOW()))
[2017-05-02 12:10:06]	SQL :	SELECT COALESCE(COUNT(hid), 0) AS day 
							   FROM 1_ivrshistory h 
						       WHERE 1 AND (DATE(h.`datetime`) = DATE(NOW()))
[2017-05-02 12:10:06]	SQL :	SELECT COALESCE(COUNT(hid), 0) AS day 
							   FROM 1_ivrshistory h 
						       WHERE 1  AND (DATE(h.`datetime`)  > DATE(DATE_SUB(NOW(), INTERVAL 1 WEEK)))
[2017-05-02 12:10:06]	SQL :	SELECT COALESCE(COUNT(hid), 0) AS day 
							   FROM 1_ivrshistory h 
						       WHERE 1  AND (MONTH(h.`datetime` ) = MONTH(NOW()))
[2017-05-02 12:10:06]	SQL :	SELECT COALESCE(COUNT(leadid), 0) AS day 
							FROM 1_leads a 
							LEFT JOIN 1_leads_groups d ON d.gid = a.gid 
							WHERE (DATE(a.`createdon`) = DATE(NOW()))
[2017-05-02 12:10:06]	SQL :	SELECT COALESCE(COUNT(leadid), 0) AS day 
							FROM 1_leads a 
							LEFT JOIN 1_leads_groups d ON d.gid = a.gid 
							WHERE (DATE(a.`createdon`) = DATE(NOW()))
[2017-05-02 12:10:06]	SQL :	SELECT COALESCE(COUNT(leadid), 0) AS day 
							FROM 1_leads a 
							LEFT JOIN 1_leads_groups d ON d.gid = a.gid 
							WHERE (DATE(a.`createdon`) = DATE(NOW()))
[2017-05-02 12:10:06]	SQL :	SELECT COALESCE(COUNT(tktid), 0) AS day 
							FROM 1_support_tickets a 
							LEFT JOIN 1_support_groups d ON d.gid = a.gid 
							WHERE (DATE(a.`createdon`) = DATE(NOW()))
[2017-05-02 12:10:06]	SQL :	SELECT COALESCE(COUNT(tktid), 0) AS day 
							FROM 1_support_tickets a 
							LEFT JOIN 1_support_groups d ON d.gid = a.gid 
							WHERE (DATE(a.`createdon`) = DATE(NOW()))
[2017-05-02 12:10:06]	SQL :	SELECT COALESCE(COUNT(tktid), 0) AS day 
							FROM 1_support_tickets a 
							LEFT JOIN 1_support_groups d ON d.gid = a.gid 
							WHERE (DATE(a.`createdon`) = DATE(NOW()))
[2017-05-02 12:10:06]	SQL :	SELECT COALESCE(COUNT(callid), 0) AS day 
							FROM 1_outboundcalls h 
							WHERE (DATE(h.`starttime`) = DATE(NOW()))
[2017-05-02 12:10:06]	SQL :	SELECT COALESCE(COUNT(callid), 0) AS day 
							FROM 1_outboundcalls h 
							WHERE (DATE(h.`starttime`) = DATE(NOW()))
[2017-05-02 12:10:06]	SQL :	SELECT COALESCE(COUNT(callid), 0) AS day 
							FROM 1_outboundcalls h 
							WHERE (DATE(h.`starttime`) = DATE(NOW()))
[2017-05-02 12:10:06]	SQL :	SELECT COALESCE(COUNT(callid), 0) AS day 
							FROM 1_mtracker h 
							WHERE (DATE(h.`starttime`) = DATE(NOW()))
[2017-05-02 12:10:06]	SQL :	SELECT COALESCE(COUNT(callid), 0) AS day 
							FROM 1_mtracker h 
							WHERE (DATE(h.`starttime`) = DATE(NOW()))
[2017-05-02 12:10:06]	SQL :	SELECT COALESCE(COUNT(callid), 0) AS day 
							FROM 1_mtracker h 
							WHERE (DATE(h.`starttime`) = DATE(NOW()))
[2017-05-02 12:31:27]	DEBUG :	Config Class Initialized
[2017-05-02 12:31:27]	DEBUG :	Hooks Class Initialized
[2017-05-02 12:31:27]	DEBUG :	URI Class Initialized
[2017-05-02 12:31:27]	DEBUG :	Router Class Initialized
[2017-05-02 12:31:27]	DEBUG :	Output Class Initialized
[2017-05-02 12:31:27]	DEBUG :	Input Class Initialized
[2017-05-02 12:31:27]	DEBUG :	Global POST and COOKIE data sanitized
[2017-05-02 12:31:27]	DEBUG :	Language Class Initialized
[2017-05-02 12:31:27]	DEBUG :	Loader Class Initialized
[2017-05-02 12:31:27]	DEBUG :	Helper loaded: url_helper
[2017-05-02 12:31:27]	DEBUG :	Helper loaded: form_helper
[2017-05-02 12:31:27]	DEBUG :	Helper loaded: html_helper
[2017-05-02 12:31:27]	DEBUG :	Helper loaded: email_helper
[2017-05-02 12:31:27]	DEBUG :	Helper loaded: ckeditor_helper
[2017-05-02 12:31:27]	DEBUG :	Helper loaded: mcube_helper
[2017-05-02 12:31:27]	DEBUG :	Database Driver Class Initialized
[2017-05-02 12:31:27]	ERROR :	Severity: 8192  --> mysql_pconnect(): The mysql extension is deprecated and will be removed in the future: use mysqli or PDO instead /var/www/html/mcnew/system/database/drivers/mysql/mysql_driver.php 88
[2017-05-02 12:31:27]	DEBUG :	Session Class Initialized
[2017-05-02 12:31:27]	DEBUG :	Helper loaded: string_helper
[2017-05-02 12:31:27]	DEBUG :	Encrypt Class Initialized
[2017-05-02 12:31:27]	DEBUG :	A session cookie was not found.
[2017-05-02 12:31:27]	SQL :	INSERT INTO `call_sessions` (`session_id`, `ip_address`, `user_agent`, `last_activity`) VALUES ('c1d1df6db776e6bd8933789762ca04a7', '192.168.1.106', 'Dalvik/2.1.0 (Linux; U; Android 6.0; Panasonic T44', 1493708487)
[2017-05-02 12:31:27]	DEBUG :	Session routines successfully run
[2017-05-02 12:31:27]	DEBUG :	Table Class Initialized
[2017-05-02 12:31:27]	DEBUG :	Pagination Class Initialized
[2017-05-02 12:31:27]	DEBUG :	Config file loaded: config/paypallib_config.php
[2017-05-02 12:31:27]	DEBUG :	Form Validation Class Initialized
[2017-05-02 12:31:27]	DEBUG :	Email Class Initialized
[2017-05-02 12:31:27]	DEBUG :	Language file loaded: language/english/calendar_lang.php
[2017-05-02 12:31:27]	DEBUG :	Calendar Class Initialized
[2017-05-02 12:31:27]	DEBUG :	Controller Class Initialized
[2017-05-02 12:31:27]	DEBUG :	Model Class Initialized
[2017-05-02 12:31:27]	DEBUG :	Model Class Initialized
[2017-05-02 12:31:27]	DEBUG :	Model Class Initialized
[2017-05-02 12:31:27]	DEBUG :	Model Class Initialized
[2017-05-02 12:31:27]	DEBUG :	Model Class Initialized
[2017-05-02 12:31:27]	DEBUG :	Model Class Initialized
[2017-05-02 12:31:27]	DEBUG :	Model Class Initialized
[2017-05-02 12:31:27]	DEBUG :	Model Class Initialized
[2017-05-02 12:31:27]	DEBUG :	Model Class Initialized
[2017-05-02 12:31:27]	DEBUG :	Model Class Initialized
[2017-05-02 12:31:27]	DEBUG :	Model Class Initialized
[2017-05-02 12:31:27]	DEBUG :	Model Class Initialized
[2017-05-02 12:31:27]	DEBUG :	Model Class Initialized
[2017-05-02 12:31:27]	DEBUG :	Model Class Initialized
[2017-05-02 12:31:27]	DEBUG :	Plugin loaded: to_pdf_pi
[2017-05-02 12:31:27]	DEBUG :	Model Class Initialized
[2017-05-02 12:31:27]	DEBUG :	Language file loaded: language/english/form_validation_lang.php
[2017-05-02 12:31:27]	SQL :	SELECT uid,bid,eid FROM `user` WHERE authkey='1.1.d886b8e8a0615'
[2017-05-02 12:31:27]	DEBUG :	Database Driver Class Initialized
[2017-05-02 12:31:27]	SQL :	SELECT roleid FROM 1_employee
							WHERE eid='1'
							AND bid='1'
[2017-05-02 12:31:27]	DEBUG :	Database Driver Class Initialized
[2017-05-02 12:31:27]	SQL :	SELECT * FROM 1_user_role
							WHERE roleid='1'
							AND bid='1'
[2017-05-02 12:31:27]	SQL :	SELECT m.modid,m.modname,m.moddesc,
							COALESCE(o.opt_add,0) as opt_add,
							COALESCE(o.opt_view,0) as opt_view,
							COALESCE(o.opt_download,0) as opt_download,
							COALESCE(opt_delete,0) as opt_delete 
							FROM module m
							LEFT JOIN (SELECT * FROM 1_role_mod_opt
							WHERE roleid='1' 
							AND bid='1') as o
							ON m.modid=o.modid where m.status=1
[2017-05-02 12:31:27]	SQL :	SELECT a.*,f.fieldname FROM 1_role_access a
								LEFT JOIN systemfields f on a.fieldid=f.fieldid
								WHERE a.roleid='1'
								AND a.bid='1'
								AND a.fieldtype='s'
[2017-05-02 12:31:27]	SQL :	SELECT * FROM 1_role_access
								WHERE roleid='1'
								AND bid='1'
							AND fieldtype='c'
[2017-05-02 12:31:27]	SQL :	SELECT pri.landingnumber,pri.used,pri.climit,
								if(pri.status=0,'Not in use',
								if(pri.type='0','Calltrack',
								if(pri.type='1','IVRS',
								if(pri.type='2','PBX','Not Assign')))) as type,
								pri.associateid,
								if(pri.status=0,'None',
								if(pri.type='0',g.groupname,
								if(pri.type='1',i.title,
								if(pri.type='2',pbx.title,'None')))) as title,
								if(pri.status=0,'None',
								if(pri.type='0',ch.lastcall,
								if(pri.type='1',ih.lastcall,
								if(pri.type='2',ph.lastcall,'None')))) as lastcall
								FROM prinumbers pri
								LEFT JOIN 1_groups g on (g.prinumber=pri.number AND g.gid=pri.associateid AND g.status=1)
								LEFT JOIN 1_ivrs i on (i.prinumber=pri.number AND i.ivrsid=pri.associateid AND i.status=1)
								LEFT JOIN 1_pbx pbx on (pbx.prinumber=pri.number AND pbx.pbxid=pri.associateid AND pbx.status=1)
								LEFT JOIN (SELECT g.gid,max(h.starttime) as lastcall FROM 1_groups g LEFT JOIN 1_callhistory h on g.gid=h.gid GROUP BY g.gid) ch on g.gid=ch.gid
								LEFT JOIN (SELECT i.ivrsid,max(h.datetime) as lastcall FROM 1_ivrs i LEFT JOIN 1_ivrshistory h on i.ivrsid=h.ivrsid GROUP BY i.ivrsid) ih on i.ivrsid=ih.ivrsid
								LEFT JOIN (SELECT p.pbxid,max(h.starttime) as lastcall FROM 1_pbx p LEFT JOIN 1_pbxreport h on p.pbxid=h.pbxid GROUP BY p.pbxid) ph on pbx.pbxid=ph.pbxid
								WHERE pri.bid=1
[2017-05-02 12:31:27]	SQL :	SELECT balance FROM sms_bal  where bid='1'
[2017-05-02 12:31:27]	SQL :	SELECT balance FROM call_bal where bid='1'
[2017-05-02 12:31:27]	SQL :	SELECT DISTINCT(e.eid),e.empname,eb.start_time FROM 1_employee e
		                       LEFT JOIN 1_emp_break eb ON e.eid = eb.eid
		                       LEFT JOIN 1_groups d ON e.eid = d.eid
		                       WHERE eb.end_time='0000-00-00' AND e.selfdisable=1  GROUP BY d.gid,e.eid
[2017-05-02 12:31:27]	SQL :	SELECT COALESCE(COUNT(callid), 0) AS day 
							FROM 1_callhistory h 
							LEFT JOIN 1_groups d ON d.gid = h.gid 
							WHERE 1 AND (DATE(h.`starttime`) = DATE(NOW()))
[2017-05-02 12:31:27]	SQL :	SELECT COALESCE(COUNT(callid), 0) AS day 
							FROM 1_callhistory h 
							LEFT JOIN 1_groups d ON d.gid = h.gid 
							WHERE 1  AND (DATE(h.`starttime`)  > DATE(DATE_SUB(NOW(), INTERVAL 1 WEEK)))
[2017-05-02 12:31:27]	SQL :	SELECT COALESCE(COUNT(callid), 0) AS day 
							FROM 1_callhistory h 
							LEFT JOIN 1_groups d ON d.gid = h.gid 
							WHERE 1  AND (MONTH(h.`starttime` ) = MONTH(NOW()))
[2017-05-02 12:31:27]	SQL :	SELECT COALESCE(COUNT(pbxid), 0) AS day 
							FROM 1_pbxreport h 
							WHERE 1 AND (DATE(h.`starttime`) = DATE(NOW()))
[2017-05-02 12:31:27]	SQL :	SELECT COALESCE(COUNT(pbxid), 0) AS day 
							FROM 1_pbxreport h 
							WHERE 1  AND (DATE(h.`starttime`)  > DATE(DATE_SUB(NOW(), INTERVAL 1 WEEK)))
[2017-05-02 12:31:27]	SQL :	SELECT COALESCE(COUNT(pbxid), 0) AS day 
							FROM 1_pbxreport h 
							WHERE 1  AND (MONTH(h.`starttime` ) = MONTH(NOW()))
[2017-05-02 12:31:27]	SQL :	SELECT COALESCE(COUNT(hid), 0) AS day 
							   FROM 1_ivrshistory h 
						       WHERE 1 AND (DATE(h.`datetime`) = DATE(NOW()))
[2017-05-02 12:31:27]	SQL :	SELECT COALESCE(COUNT(hid), 0) AS day 
							   FROM 1_ivrshistory h 
						       WHERE 1  AND (DATE(h.`datetime`)  > DATE(DATE_SUB(NOW(), INTERVAL 1 WEEK)))
[2017-05-02 12:31:27]	SQL :	SELECT COALESCE(COUNT(hid), 0) AS day 
							   FROM 1_ivrshistory h 
						       WHERE 1  AND (MONTH(h.`datetime` ) = MONTH(NOW()))
[2017-05-02 12:31:27]	SQL :	SELECT COALESCE(COUNT(leadid), 0) AS day 
							FROM 1_leads a 
							LEFT JOIN 1_leads_groups d ON d.gid = a.gid 
							WHERE (DATE(a.`createdon`) = DATE(NOW()))
[2017-05-02 12:31:27]	SQL :	SELECT COALESCE(COUNT(leadid), 0) AS day 
							FROM 1_leads a 
							LEFT JOIN 1_leads_groups d ON d.gid = a.gid 
							WHERE (DATE(a.`createdon`) = DATE(NOW()))
[2017-05-02 12:31:27]	SQL :	SELECT COALESCE(COUNT(leadid), 0) AS day 
							FROM 1_leads a 
							LEFT JOIN 1_leads_groups d ON d.gid = a.gid 
							WHERE (DATE(a.`createdon`) = DATE(NOW()))
[2017-05-02 12:31:27]	SQL :	SELECT COALESCE(COUNT(tktid), 0) AS day 
							FROM 1_support_tickets a 
							LEFT JOIN 1_support_groups d ON d.gid = a.gid 
							WHERE (DATE(a.`createdon`) = DATE(NOW()))
[2017-05-02 12:31:27]	SQL :	SELECT COALESCE(COUNT(tktid), 0) AS day 
							FROM 1_support_tickets a 
							LEFT JOIN 1_support_groups d ON d.gid = a.gid 
							WHERE (DATE(a.`createdon`) = DATE(NOW()))
[2017-05-02 12:31:27]	SQL :	SELECT COALESCE(COUNT(tktid), 0) AS day 
							FROM 1_support_tickets a 
							LEFT JOIN 1_support_groups d ON d.gid = a.gid 
							WHERE (DATE(a.`createdon`) = DATE(NOW()))
[2017-05-02 12:31:27]	SQL :	SELECT COALESCE(COUNT(callid), 0) AS day 
							FROM 1_outboundcalls h 
							WHERE (DATE(h.`starttime`) = DATE(NOW()))
[2017-05-02 12:31:27]	SQL :	SELECT COALESCE(COUNT(callid), 0) AS day 
							FROM 1_outboundcalls h 
							WHERE (DATE(h.`starttime`) = DATE(NOW()))
[2017-05-02 12:31:27]	SQL :	SELECT COALESCE(COUNT(callid), 0) AS day 
							FROM 1_outboundcalls h 
							WHERE (DATE(h.`starttime`) = DATE(NOW()))
[2017-05-02 12:31:27]	SQL :	SELECT COALESCE(COUNT(callid), 0) AS day 
							FROM 1_mtracker h 
							WHERE (DATE(h.`starttime`) = DATE(NOW()))
[2017-05-02 12:31:27]	SQL :	SELECT COALESCE(COUNT(callid), 0) AS day 
							FROM 1_mtracker h 
							WHERE (DATE(h.`starttime`) = DATE(NOW()))
[2017-05-02 12:31:27]	SQL :	SELECT COALESCE(COUNT(callid), 0) AS day 
							FROM 1_mtracker h 
							WHERE (DATE(h.`starttime`) = DATE(NOW()))
[2017-05-02 12:51:51]	DEBUG :	Config Class Initialized
[2017-05-02 12:51:51]	DEBUG :	Hooks Class Initialized
[2017-05-02 12:51:51]	DEBUG :	URI Class Initialized
[2017-05-02 12:51:51]	DEBUG :	Router Class Initialized
[2017-05-02 12:51:51]	DEBUG :	Output Class Initialized
[2017-05-02 12:51:51]	DEBUG :	Input Class Initialized
[2017-05-02 12:51:51]	DEBUG :	Global POST and COOKIE data sanitized
[2017-05-02 12:51:51]	DEBUG :	Language Class Initialized
[2017-05-02 12:51:51]	DEBUG :	Loader Class Initialized
[2017-05-02 12:51:51]	DEBUG :	Helper loaded: url_helper
[2017-05-02 12:51:51]	DEBUG :	Helper loaded: form_helper
[2017-05-02 12:51:51]	DEBUG :	Helper loaded: html_helper
[2017-05-02 12:51:51]	DEBUG :	Helper loaded: email_helper
[2017-05-02 12:51:51]	DEBUG :	Helper loaded: ckeditor_helper
[2017-05-02 12:51:51]	DEBUG :	Helper loaded: mcube_helper
[2017-05-02 12:51:51]	DEBUG :	Database Driver Class Initialized
[2017-05-02 12:51:51]	ERROR :	Severity: 8192  --> mysql_pconnect(): The mysql extension is deprecated and will be removed in the future: use mysqli or PDO instead /var/www/html/mcnew/system/database/drivers/mysql/mysql_driver.php 88
[2017-05-02 12:51:51]	DEBUG :	Session Class Initialized
[2017-05-02 12:51:51]	DEBUG :	Helper loaded: string_helper
[2017-05-02 12:51:51]	DEBUG :	Encrypt Class Initialized
[2017-05-02 12:51:51]	DEBUG :	A session cookie was not found.
[2017-05-02 12:51:51]	SQL :	INSERT INTO `call_sessions` (`session_id`, `ip_address`, `user_agent`, `last_activity`) VALUES ('5c83a1ef09731024ef08c358510afe25', '192.168.1.106', 'Dalvik/2.1.0 (Linux; U; Android 6.0; Panasonic T44', 1493709711)
[2017-05-02 12:51:52]	DEBUG :	Session routines successfully run
[2017-05-02 12:51:52]	DEBUG :	Table Class Initialized
[2017-05-02 12:51:52]	DEBUG :	Pagination Class Initialized
[2017-05-02 12:51:52]	DEBUG :	Config file loaded: config/paypallib_config.php
[2017-05-02 12:51:52]	DEBUG :	Form Validation Class Initialized
[2017-05-02 12:51:52]	DEBUG :	Email Class Initialized
[2017-05-02 12:51:52]	DEBUG :	Language file loaded: language/english/calendar_lang.php
[2017-05-02 12:51:52]	DEBUG :	Calendar Class Initialized
[2017-05-02 12:51:52]	DEBUG :	Controller Class Initialized
[2017-05-02 12:51:52]	DEBUG :	Model Class Initialized
[2017-05-02 12:51:52]	DEBUG :	Model Class Initialized
[2017-05-02 12:51:52]	DEBUG :	Model Class Initialized
[2017-05-02 12:51:52]	DEBUG :	Model Class Initialized
[2017-05-02 12:51:52]	DEBUG :	Model Class Initialized
[2017-05-02 12:51:52]	DEBUG :	Model Class Initialized
[2017-05-02 12:51:52]	DEBUG :	Model Class Initialized
[2017-05-02 12:51:52]	DEBUG :	Model Class Initialized
[2017-05-02 12:51:52]	DEBUG :	Model Class Initialized
[2017-05-02 12:51:52]	DEBUG :	Model Class Initialized
[2017-05-02 12:51:52]	DEBUG :	Model Class Initialized
[2017-05-02 12:51:52]	DEBUG :	Model Class Initialized
[2017-05-02 12:51:52]	DEBUG :	Model Class Initialized
[2017-05-02 12:51:52]	DEBUG :	Model Class Initialized
[2017-05-02 12:51:52]	DEBUG :	Plugin loaded: to_pdf_pi
[2017-05-02 12:51:52]	DEBUG :	Model Class Initialized
[2017-05-02 12:51:52]	DEBUG :	Language file loaded: language/english/form_validation_lang.php
[2017-05-02 12:51:52]	SQL :	SELECT uid,bid,eid FROM `user` WHERE authkey='1.1.d886b8e8a0615'
[2017-05-02 12:51:52]	DEBUG :	Database Driver Class Initialized
[2017-05-02 12:51:52]	SQL :	SELECT roleid FROM 1_employee
							WHERE eid='1'
							AND bid='1'
[2017-05-02 12:51:52]	DEBUG :	Database Driver Class Initialized
[2017-05-02 12:51:52]	SQL :	SELECT * FROM 1_user_role
							WHERE roleid='1'
							AND bid='1'
[2017-05-02 12:51:52]	SQL :	SELECT m.modid,m.modname,m.moddesc,
							COALESCE(o.opt_add,0) as opt_add,
							COALESCE(o.opt_view,0) as opt_view,
							COALESCE(o.opt_download,0) as opt_download,
							COALESCE(opt_delete,0) as opt_delete 
							FROM module m
							LEFT JOIN (SELECT * FROM 1_role_mod_opt
							WHERE roleid='1' 
							AND bid='1') as o
							ON m.modid=o.modid where m.status=1
[2017-05-02 12:51:52]	SQL :	SELECT a.*,f.fieldname FROM 1_role_access a
								LEFT JOIN systemfields f on a.fieldid=f.fieldid
								WHERE a.roleid='1'
								AND a.bid='1'
								AND a.fieldtype='s'
[2017-05-02 12:51:52]	SQL :	SELECT * FROM 1_role_access
								WHERE roleid='1'
								AND bid='1'
							AND fieldtype='c'
[2017-05-02 12:51:52]	SQL :	SELECT pri.landingnumber,pri.used,pri.climit,
								if(pri.status=0,'Not in use',
								if(pri.type='0','Calltrack',
								if(pri.type='1','IVRS',
								if(pri.type='2','PBX','Not Assign')))) as type,
								pri.associateid,
								if(pri.status=0,'None',
								if(pri.type='0',g.groupname,
								if(pri.type='1',i.title,
								if(pri.type='2',pbx.title,'None')))) as title,
								if(pri.status=0,'None',
								if(pri.type='0',ch.lastcall,
								if(pri.type='1',ih.lastcall,
								if(pri.type='2',ph.lastcall,'None')))) as lastcall
								FROM prinumbers pri
								LEFT JOIN 1_groups g on (g.prinumber=pri.number AND g.gid=pri.associateid AND g.status=1)
								LEFT JOIN 1_ivrs i on (i.prinumber=pri.number AND i.ivrsid=pri.associateid AND i.status=1)
								LEFT JOIN 1_pbx pbx on (pbx.prinumber=pri.number AND pbx.pbxid=pri.associateid AND pbx.status=1)
								LEFT JOIN (SELECT g.gid,max(h.starttime) as lastcall FROM 1_groups g LEFT JOIN 1_callhistory h on g.gid=h.gid GROUP BY g.gid) ch on g.gid=ch.gid
								LEFT JOIN (SELECT i.ivrsid,max(h.datetime) as lastcall FROM 1_ivrs i LEFT JOIN 1_ivrshistory h on i.ivrsid=h.ivrsid GROUP BY i.ivrsid) ih on i.ivrsid=ih.ivrsid
								LEFT JOIN (SELECT p.pbxid,max(h.starttime) as lastcall FROM 1_pbx p LEFT JOIN 1_pbxreport h on p.pbxid=h.pbxid GROUP BY p.pbxid) ph on pbx.pbxid=ph.pbxid
								WHERE pri.bid=1
[2017-05-02 12:51:52]	SQL :	SELECT balance FROM sms_bal  where bid='1'
[2017-05-02 12:51:52]	SQL :	SELECT balance FROM call_bal where bid='1'
[2017-05-02 12:51:52]	SQL :	SELECT DISTINCT(e.eid),e.empname,eb.start_time FROM 1_employee e
		                       LEFT JOIN 1_emp_break eb ON e.eid = eb.eid
		                       LEFT JOIN 1_groups d ON e.eid = d.eid
		                       WHERE eb.end_time='0000-00-00' AND e.selfdisable=1  GROUP BY d.gid,e.eid
[2017-05-02 12:51:52]	SQL :	SELECT COALESCE(COUNT(callid), 0) AS day 
							FROM 1_callhistory h 
							LEFT JOIN 1_groups d ON d.gid = h.gid 
							WHERE 1 AND (DATE(h.`starttime`) = DATE(NOW()))
[2017-05-02 12:51:52]	SQL :	SELECT COALESCE(COUNT(callid), 0) AS day 
							FROM 1_callhistory h 
							LEFT JOIN 1_groups d ON d.gid = h.gid 
							WHERE 1  AND (DATE(h.`starttime`)  > DATE(DATE_SUB(NOW(), INTERVAL 1 WEEK)))
[2017-05-02 12:51:52]	SQL :	SELECT COALESCE(COUNT(callid), 0) AS day 
							FROM 1_callhistory h 
							LEFT JOIN 1_groups d ON d.gid = h.gid 
							WHERE 1  AND (MONTH(h.`starttime` ) = MONTH(NOW()))
[2017-05-02 12:51:52]	SQL :	SELECT COALESCE(COUNT(pbxid), 0) AS day 
							FROM 1_pbxreport h 
							WHERE 1 AND (DATE(h.`starttime`) = DATE(NOW()))
[2017-05-02 12:51:52]	SQL :	SELECT COALESCE(COUNT(pbxid), 0) AS day 
							FROM 1_pbxreport h 
							WHERE 1  AND (DATE(h.`starttime`)  > DATE(DATE_SUB(NOW(), INTERVAL 1 WEEK)))
[2017-05-02 12:51:52]	SQL :	SELECT COALESCE(COUNT(pbxid), 0) AS day 
							FROM 1_pbxreport h 
							WHERE 1  AND (MONTH(h.`starttime` ) = MONTH(NOW()))
[2017-05-02 12:51:52]	SQL :	SELECT COALESCE(COUNT(hid), 0) AS day 
							   FROM 1_ivrshistory h 
						       WHERE 1 AND (DATE(h.`datetime`) = DATE(NOW()))
[2017-05-02 12:51:52]	SQL :	SELECT COALESCE(COUNT(hid), 0) AS day 
							   FROM 1_ivrshistory h 
						       WHERE 1  AND (DATE(h.`datetime`)  > DATE(DATE_SUB(NOW(), INTERVAL 1 WEEK)))
[2017-05-02 12:51:52]	SQL :	SELECT COALESCE(COUNT(hid), 0) AS day 
							   FROM 1_ivrshistory h 
						       WHERE 1  AND (MONTH(h.`datetime` ) = MONTH(NOW()))
[2017-05-02 12:51:52]	SQL :	SELECT COALESCE(COUNT(leadid), 0) AS day 
							FROM 1_leads a 
							LEFT JOIN 1_leads_groups d ON d.gid = a.gid 
							WHERE (DATE(a.`createdon`) = DATE(NOW()))
[2017-05-02 12:51:52]	SQL :	SELECT COALESCE(COUNT(leadid), 0) AS day 
							FROM 1_leads a 
							LEFT JOIN 1_leads_groups d ON d.gid = a.gid 
							WHERE (DATE(a.`createdon`) = DATE(NOW()))
[2017-05-02 12:51:52]	SQL :	SELECT COALESCE(COUNT(leadid), 0) AS day 
							FROM 1_leads a 
							LEFT JOIN 1_leads_groups d ON d.gid = a.gid 
							WHERE (DATE(a.`createdon`) = DATE(NOW()))
[2017-05-02 12:51:52]	SQL :	SELECT COALESCE(COUNT(tktid), 0) AS day 
							FROM 1_support_tickets a 
							LEFT JOIN 1_support_groups d ON d.gid = a.gid 
							WHERE (DATE(a.`createdon`) = DATE(NOW()))
[2017-05-02 12:51:52]	SQL :	SELECT COALESCE(COUNT(tktid), 0) AS day 
							FROM 1_support_tickets a 
							LEFT JOIN 1_support_groups d ON d.gid = a.gid 
							WHERE (DATE(a.`createdon`) = DATE(NOW()))
[2017-05-02 12:51:52]	SQL :	SELECT COALESCE(COUNT(tktid), 0) AS day 
							FROM 1_support_tickets a 
							LEFT JOIN 1_support_groups d ON d.gid = a.gid 
							WHERE (DATE(a.`createdon`) = DATE(NOW()))
[2017-05-02 12:51:52]	SQL :	SELECT COALESCE(COUNT(callid), 0) AS day 
							FROM 1_outboundcalls h 
							WHERE (DATE(h.`starttime`) = DATE(NOW()))
[2017-05-02 12:51:52]	SQL :	SELECT COALESCE(COUNT(callid), 0) AS day 
							FROM 1_outboundcalls h 
							WHERE (DATE(h.`starttime`) = DATE(NOW()))
[2017-05-02 12:51:52]	SQL :	SELECT COALESCE(COUNT(callid), 0) AS day 
							FROM 1_outboundcalls h 
							WHERE (DATE(h.`starttime`) = DATE(NOW()))
[2017-05-02 12:51:52]	SQL :	SELECT COALESCE(COUNT(callid), 0) AS day 
							FROM 1_mtracker h 
							WHERE (DATE(h.`starttime`) = DATE(NOW()))
[2017-05-02 12:51:52]	SQL :	SELECT COALESCE(COUNT(callid), 0) AS day 
							FROM 1_mtracker h 
							WHERE (DATE(h.`starttime`) = DATE(NOW()))
[2017-05-02 12:51:52]	SQL :	SELECT COALESCE(COUNT(callid), 0) AS day 
							FROM 1_mtracker h 
							WHERE (DATE(h.`starttime`) = DATE(NOW()))
[2017-05-02 14:36:42]	DEBUG :	Config Class Initialized
[2017-05-02 14:36:42]	DEBUG :	Hooks Class Initialized
[2017-05-02 14:36:42]	DEBUG :	URI Class Initialized
[2017-05-02 14:36:42]	DEBUG :	Router Class Initialized
[2017-05-02 14:36:42]	DEBUG :	Output Class Initialized
[2017-05-02 14:36:42]	DEBUG :	Input Class Initialized
[2017-05-02 14:36:42]	DEBUG :	Global POST and COOKIE data sanitized
[2017-05-02 14:36:42]	DEBUG :	Language Class Initialized
[2017-05-02 14:36:42]	DEBUG :	Loader Class Initialized
[2017-05-02 14:36:42]	DEBUG :	Helper loaded: url_helper
[2017-05-02 14:36:42]	DEBUG :	Helper loaded: form_helper
[2017-05-02 14:36:42]	DEBUG :	Helper loaded: html_helper
[2017-05-02 14:36:42]	DEBUG :	Helper loaded: email_helper
[2017-05-02 14:36:42]	DEBUG :	Helper loaded: ckeditor_helper
[2017-05-02 14:36:42]	DEBUG :	Helper loaded: mcube_helper
[2017-05-02 14:36:42]	DEBUG :	Database Driver Class Initialized
[2017-05-02 14:36:42]	ERROR :	Severity: 8192  --> mysql_pconnect(): The mysql extension is deprecated and will be removed in the future: use mysqli or PDO instead /var/www/html/mcnew/system/database/drivers/mysql/mysql_driver.php 88
[2017-05-02 14:36:42]	DEBUG :	Session Class Initialized
[2017-05-02 14:36:42]	DEBUG :	Helper loaded: string_helper
[2017-05-02 14:36:42]	DEBUG :	Encrypt Class Initialized
[2017-05-02 14:36:42]	DEBUG :	A session cookie was not found.
[2017-05-02 14:36:42]	SQL :	INSERT INTO `call_sessions` (`session_id`, `ip_address`, `user_agent`, `last_activity`) VALUES ('678d82deaf6ed6918877f0875fee1314', '192.168.1.106', 'Dalvik/2.1.0 (Linux; U; Android 6.0; Panasonic T44', 1493716002)
[2017-05-02 14:36:42]	DEBUG :	Session routines successfully run
[2017-05-02 14:36:42]	DEBUG :	Table Class Initialized
[2017-05-02 14:36:42]	DEBUG :	Pagination Class Initialized
[2017-05-02 14:36:42]	DEBUG :	Config file loaded: config/paypallib_config.php
[2017-05-02 14:36:42]	DEBUG :	Form Validation Class Initialized
[2017-05-02 14:36:42]	DEBUG :	Email Class Initialized
[2017-05-02 14:36:42]	DEBUG :	Language file loaded: language/english/calendar_lang.php
[2017-05-02 14:36:42]	DEBUG :	Calendar Class Initialized
[2017-05-02 14:36:42]	DEBUG :	Controller Class Initialized
[2017-05-02 14:36:42]	DEBUG :	Model Class Initialized
[2017-05-02 14:36:42]	DEBUG :	Model Class Initialized
[2017-05-02 14:36:42]	DEBUG :	Model Class Initialized
[2017-05-02 14:36:42]	DEBUG :	Model Class Initialized
[2017-05-02 14:36:42]	DEBUG :	Model Class Initialized
[2017-05-02 14:36:42]	DEBUG :	Model Class Initialized
[2017-05-02 14:36:42]	DEBUG :	Model Class Initialized
[2017-05-02 14:36:42]	DEBUG :	Model Class Initialized
[2017-05-02 14:36:42]	DEBUG :	Model Class Initialized
[2017-05-02 14:36:42]	DEBUG :	Model Class Initialized
[2017-05-02 14:36:42]	DEBUG :	Model Class Initialized
[2017-05-02 14:36:42]	DEBUG :	Model Class Initialized
[2017-05-02 14:36:42]	DEBUG :	Model Class Initialized
[2017-05-02 14:36:42]	DEBUG :	Model Class Initialized
[2017-05-02 14:36:42]	DEBUG :	Plugin loaded: to_pdf_pi
[2017-05-02 14:36:42]	DEBUG :	Model Class Initialized
[2017-05-02 14:36:42]	DEBUG :	Language file loaded: language/english/form_validation_lang.php
[2017-05-02 14:36:42]	SQL :	SELECT uid,bid,eid FROM `user` WHERE authkey='1.1.d886b8e8a0615'
[2017-05-02 14:36:42]	DEBUG :	Database Driver Class Initialized
[2017-05-02 14:36:42]	SQL :	SELECT roleid FROM 1_employee
							WHERE eid='1'
							AND bid='1'
[2017-05-02 14:36:42]	DEBUG :	Database Driver Class Initialized
[2017-05-02 14:36:42]	SQL :	SELECT * FROM 1_user_role
							WHERE roleid='1'
							AND bid='1'
[2017-05-02 14:36:42]	SQL :	SELECT m.modid,m.modname,m.moddesc,
							COALESCE(o.opt_add,0) as opt_add,
							COALESCE(o.opt_view,0) as opt_view,
							COALESCE(o.opt_download,0) as opt_download,
							COALESCE(opt_delete,0) as opt_delete 
							FROM module m
							LEFT JOIN (SELECT * FROM 1_role_mod_opt
							WHERE roleid='1' 
							AND bid='1') as o
							ON m.modid=o.modid where m.status=1
[2017-05-02 14:36:42]	SQL :	SELECT a.*,f.fieldname FROM 1_role_access a
								LEFT JOIN systemfields f on a.fieldid=f.fieldid
								WHERE a.roleid='1'
								AND a.bid='1'
								AND a.fieldtype='s'
[2017-05-02 14:36:42]	SQL :	SELECT * FROM 1_role_access
								WHERE roleid='1'
								AND bid='1'
							AND fieldtype='c'
[2017-05-02 14:36:42]	SQL :	SELECT pri.landingnumber,pri.used,pri.climit,
								if(pri.status=0,'Not in use',
								if(pri.type='0','Calltrack',
								if(pri.type='1','IVRS',
								if(pri.type='2','PBX','Not Assign')))) as type,
								pri.associateid,
								if(pri.status=0,'None',
								if(pri.type='0',g.groupname,
								if(pri.type='1',i.title,
								if(pri.type='2',pbx.title,'None')))) as title,
								if(pri.status=0,'None',
								if(pri.type='0',ch.lastcall,
								if(pri.type='1',ih.lastcall,
								if(pri.type='2',ph.lastcall,'None')))) as lastcall
								FROM prinumbers pri
								LEFT JOIN 1_groups g on (g.prinumber=pri.number AND g.gid=pri.associateid AND g.status=1)
								LEFT JOIN 1_ivrs i on (i.prinumber=pri.number AND i.ivrsid=pri.associateid AND i.status=1)
								LEFT JOIN 1_pbx pbx on (pbx.prinumber=pri.number AND pbx.pbxid=pri.associateid AND pbx.status=1)
								LEFT JOIN (SELECT g.gid,max(h.starttime) as lastcall FROM 1_groups g LEFT JOIN 1_callhistory h on g.gid=h.gid GROUP BY g.gid) ch on g.gid=ch.gid
								LEFT JOIN (SELECT i.ivrsid,max(h.datetime) as lastcall FROM 1_ivrs i LEFT JOIN 1_ivrshistory h on i.ivrsid=h.ivrsid GROUP BY i.ivrsid) ih on i.ivrsid=ih.ivrsid
								LEFT JOIN (SELECT p.pbxid,max(h.starttime) as lastcall FROM 1_pbx p LEFT JOIN 1_pbxreport h on p.pbxid=h.pbxid GROUP BY p.pbxid) ph on pbx.pbxid=ph.pbxid
								WHERE pri.bid=1
[2017-05-02 14:36:42]	SQL :	SELECT balance FROM sms_bal  where bid='1'
[2017-05-02 14:36:42]	SQL :	SELECT balance FROM call_bal where bid='1'
[2017-05-02 14:36:42]	SQL :	SELECT DISTINCT(e.eid),e.empname,eb.start_time FROM 1_employee e
		                       LEFT JOIN 1_emp_break eb ON e.eid = eb.eid
		                       LEFT JOIN 1_groups d ON e.eid = d.eid
		                       WHERE eb.end_time='0000-00-00' AND e.selfdisable=1  GROUP BY d.gid,e.eid
[2017-05-02 14:36:42]	SQL :	SELECT COALESCE(COUNT(callid), 0) AS day 
							FROM 1_callhistory h 
							LEFT JOIN 1_groups d ON d.gid = h.gid 
							WHERE 1 AND (DATE(h.`starttime`) = DATE(NOW()))
[2017-05-02 14:36:42]	SQL :	SELECT COALESCE(COUNT(callid), 0) AS day 
							FROM 1_callhistory h 
							LEFT JOIN 1_groups d ON d.gid = h.gid 
							WHERE 1  AND (DATE(h.`starttime`)  > DATE(DATE_SUB(NOW(), INTERVAL 1 WEEK)))
[2017-05-02 14:36:42]	SQL :	SELECT COALESCE(COUNT(callid), 0) AS day 
							FROM 1_callhistory h 
							LEFT JOIN 1_groups d ON d.gid = h.gid 
							WHERE 1  AND (MONTH(h.`starttime` ) = MONTH(NOW()))
[2017-05-02 14:36:42]	SQL :	SELECT COALESCE(COUNT(pbxid), 0) AS day 
							FROM 1_pbxreport h 
							WHERE 1 AND (DATE(h.`starttime`) = DATE(NOW()))
[2017-05-02 14:36:42]	SQL :	SELECT COALESCE(COUNT(pbxid), 0) AS day 
							FROM 1_pbxreport h 
							WHERE 1  AND (DATE(h.`starttime`)  > DATE(DATE_SUB(NOW(), INTERVAL 1 WEEK)))
[2017-05-02 14:36:42]	SQL :	SELECT COALESCE(COUNT(pbxid), 0) AS day 
							FROM 1_pbxreport h 
							WHERE 1  AND (MONTH(h.`starttime` ) = MONTH(NOW()))
[2017-05-02 14:36:42]	SQL :	SELECT COALESCE(COUNT(hid), 0) AS day 
							   FROM 1_ivrshistory h 
						       WHERE 1 AND (DATE(h.`datetime`) = DATE(NOW()))
[2017-05-02 14:36:42]	SQL :	SELECT COALESCE(COUNT(hid), 0) AS day 
							   FROM 1_ivrshistory h 
						       WHERE 1  AND (DATE(h.`datetime`)  > DATE(DATE_SUB(NOW(), INTERVAL 1 WEEK)))
[2017-05-02 14:36:42]	SQL :	SELECT COALESCE(COUNT(hid), 0) AS day 
							   FROM 1_ivrshistory h 
						       WHERE 1  AND (MONTH(h.`datetime` ) = MONTH(NOW()))
[2017-05-02 14:36:42]	SQL :	SELECT COALESCE(COUNT(leadid), 0) AS day 
							FROM 1_leads a 
							LEFT JOIN 1_leads_groups d ON d.gid = a.gid 
							WHERE (DATE(a.`createdon`) = DATE(NOW()))
[2017-05-02 14:36:42]	SQL :	SELECT COALESCE(COUNT(leadid), 0) AS day 
							FROM 1_leads a 
							LEFT JOIN 1_leads_groups d ON d.gid = a.gid 
							WHERE (DATE(a.`createdon`) = DATE(NOW()))
[2017-05-02 14:36:42]	SQL :	SELECT COALESCE(COUNT(leadid), 0) AS day 
							FROM 1_leads a 
							LEFT JOIN 1_leads_groups d ON d.gid = a.gid 
							WHERE (DATE(a.`createdon`) = DATE(NOW()))
[2017-05-02 14:36:42]	SQL :	SELECT COALESCE(COUNT(tktid), 0) AS day 
							FROM 1_support_tickets a 
							LEFT JOIN 1_support_groups d ON d.gid = a.gid 
							WHERE (DATE(a.`createdon`) = DATE(NOW()))
[2017-05-02 14:36:42]	SQL :	SELECT COALESCE(COUNT(tktid), 0) AS day 
							FROM 1_support_tickets a 
							LEFT JOIN 1_support_groups d ON d.gid = a.gid 
							WHERE (DATE(a.`createdon`) = DATE(NOW()))
[2017-05-02 14:36:42]	SQL :	SELECT COALESCE(COUNT(tktid), 0) AS day 
							FROM 1_support_tickets a 
							LEFT JOIN 1_support_groups d ON d.gid = a.gid 
							WHERE (DATE(a.`createdon`) = DATE(NOW()))
[2017-05-02 14:36:42]	SQL :	SELECT COALESCE(COUNT(callid), 0) AS day 
							FROM 1_outboundcalls h 
							WHERE (DATE(h.`starttime`) = DATE(NOW()))
[2017-05-02 14:36:42]	SQL :	SELECT COALESCE(COUNT(callid), 0) AS day 
							FROM 1_outboundcalls h 
							WHERE (DATE(h.`starttime`) = DATE(NOW()))
[2017-05-02 14:36:42]	SQL :	SELECT COALESCE(COUNT(callid), 0) AS day 
							FROM 1_outboundcalls h 
							WHERE (DATE(h.`starttime`) = DATE(NOW()))
[2017-05-02 14:36:42]	SQL :	SELECT COALESCE(COUNT(callid), 0) AS day 
							FROM 1_mtracker h 
							WHERE (DATE(h.`starttime`) = DATE(NOW()))
[2017-05-02 14:36:42]	SQL :	SELECT COALESCE(COUNT(callid), 0) AS day 
							FROM 1_mtracker h 
							WHERE (DATE(h.`starttime`) = DATE(NOW()))
[2017-05-02 14:36:42]	SQL :	SELECT COALESCE(COUNT(callid), 0) AS day 
							FROM 1_mtracker h 
							WHERE (DATE(h.`starttime`) = DATE(NOW()))
[2017-05-02 14:36:47]	DEBUG :	Config Class Initialized
[2017-05-02 14:36:47]	DEBUG :	Hooks Class Initialized
[2017-05-02 14:36:47]	DEBUG :	URI Class Initialized
[2017-05-02 14:36:47]	DEBUG :	Router Class Initialized
[2017-05-02 14:36:47]	DEBUG :	Output Class Initialized
[2017-05-02 14:36:47]	DEBUG :	Input Class Initialized
[2017-05-02 14:36:47]	DEBUG :	Global POST and COOKIE data sanitized
[2017-05-02 14:36:48]	DEBUG :	Language Class Initialized
[2017-05-02 14:36:48]	DEBUG :	Loader Class Initialized
[2017-05-02 14:36:48]	DEBUG :	Helper loaded: url_helper
[2017-05-02 14:36:48]	DEBUG :	Helper loaded: form_helper
[2017-05-02 14:36:48]	DEBUG :	Helper loaded: html_helper
[2017-05-02 14:36:48]	DEBUG :	Helper loaded: email_helper
[2017-05-02 14:36:48]	DEBUG :	Helper loaded: ckeditor_helper
[2017-05-02 14:36:48]	DEBUG :	Helper loaded: mcube_helper
[2017-05-02 14:36:48]	DEBUG :	Database Driver Class Initialized
[2017-05-02 14:36:48]	ERROR :	Severity: 8192  --> mysql_pconnect(): The mysql extension is deprecated and will be removed in the future: use mysqli or PDO instead /var/www/html/mcnew/system/database/drivers/mysql/mysql_driver.php 88
[2017-05-02 14:36:48]	DEBUG :	Session Class Initialized
[2017-05-02 14:36:48]	DEBUG :	Helper loaded: string_helper
[2017-05-02 14:36:48]	DEBUG :	Encrypt Class Initialized
[2017-05-02 14:36:48]	DEBUG :	A session cookie was not found.
[2017-05-02 14:36:48]	SQL :	INSERT INTO `call_sessions` (`session_id`, `ip_address`, `user_agent`, `last_activity`) VALUES ('e0e45d1b8fa389082446594ba21e56cf', '192.168.1.106', 'Dalvik/2.1.0 (Linux; U; Android 6.0; Panasonic T44', 1493716008)
[2017-05-02 14:36:48]	DEBUG :	Session routines successfully run
[2017-05-02 14:36:48]	DEBUG :	Table Class Initialized
[2017-05-02 14:36:48]	DEBUG :	Pagination Class Initialized
[2017-05-02 14:36:48]	DEBUG :	Config file loaded: config/paypallib_config.php
[2017-05-02 14:36:48]	DEBUG :	Form Validation Class Initialized
[2017-05-02 14:36:48]	DEBUG :	Email Class Initialized
[2017-05-02 14:36:48]	DEBUG :	Language file loaded: language/english/calendar_lang.php
[2017-05-02 14:36:48]	DEBUG :	Calendar Class Initialized
[2017-05-02 14:36:48]	DEBUG :	Controller Class Initialized
[2017-05-02 14:36:48]	DEBUG :	Model Class Initialized
[2017-05-02 14:36:48]	DEBUG :	Model Class Initialized
[2017-05-02 14:36:48]	DEBUG :	Model Class Initialized
[2017-05-02 14:36:48]	DEBUG :	Model Class Initialized
[2017-05-02 14:36:48]	DEBUG :	Model Class Initialized
[2017-05-02 14:36:48]	DEBUG :	Model Class Initialized
[2017-05-02 14:36:48]	DEBUG :	Model Class Initialized
[2017-05-02 14:36:48]	DEBUG :	Model Class Initialized
[2017-05-02 14:36:48]	DEBUG :	Model Class Initialized
[2017-05-02 14:36:48]	DEBUG :	Model Class Initialized
[2017-05-02 14:36:48]	DEBUG :	Model Class Initialized
[2017-05-02 14:36:48]	DEBUG :	Model Class Initialized
[2017-05-02 14:36:48]	DEBUG :	Model Class Initialized
[2017-05-02 14:36:48]	DEBUG :	Model Class Initialized
[2017-05-02 14:36:48]	DEBUG :	Plugin loaded: to_pdf_pi
[2017-05-02 14:36:48]	DEBUG :	Model Class Initialized
[2017-05-02 14:36:48]	DEBUG :	Language file loaded: language/english/form_validation_lang.php
[2017-05-02 14:36:48]	SQL :	SELECT uid,bid,eid FROM `user` WHERE authkey='1.1.d886b8e8a0615'
[2017-05-02 14:36:48]	DEBUG :	Database Driver Class Initialized
[2017-05-02 14:36:48]	SQL :	SELECT roleid FROM 1_employee
							WHERE eid='1'
							AND bid='1'
[2017-05-02 14:36:48]	DEBUG :	Database Driver Class Initialized
[2017-05-02 14:36:48]	SQL :	SELECT * FROM 1_user_role
							WHERE roleid='1'
							AND bid='1'
[2017-05-02 14:36:48]	SQL :	SELECT m.modid,m.modname,m.moddesc,
							COALESCE(o.opt_add,0) as opt_add,
							COALESCE(o.opt_view,0) as opt_view,
							COALESCE(o.opt_download,0) as opt_download,
							COALESCE(opt_delete,0) as opt_delete 
							FROM module m
							LEFT JOIN (SELECT * FROM 1_role_mod_opt
							WHERE roleid='1' 
							AND bid='1') as o
							ON m.modid=o.modid where m.status=1
[2017-05-02 14:36:48]	SQL :	SELECT a.*,f.fieldname FROM 1_role_access a
								LEFT JOIN systemfields f on a.fieldid=f.fieldid
								WHERE a.roleid='1'
								AND a.bid='1'
								AND a.fieldtype='s'
[2017-05-02 14:36:48]	SQL :	SELECT * FROM 1_role_access
								WHERE roleid='1'
								AND bid='1'
							AND fieldtype='c'
[2017-05-02 14:36:48]	SQL :	SELECT pri.landingnumber,pri.used,pri.climit,
								if(pri.status=0,'Not in use',
								if(pri.type='0','Calltrack',
								if(pri.type='1','IVRS',
								if(pri.type='2','PBX','Not Assign')))) as type,
								pri.associateid,
								if(pri.status=0,'None',
								if(pri.type='0',g.groupname,
								if(pri.type='1',i.title,
								if(pri.type='2',pbx.title,'None')))) as title,
								if(pri.status=0,'None',
								if(pri.type='0',ch.lastcall,
								if(pri.type='1',ih.lastcall,
								if(pri.type='2',ph.lastcall,'None')))) as lastcall
								FROM prinumbers pri
								LEFT JOIN 1_groups g on (g.prinumber=pri.number AND g.gid=pri.associateid AND g.status=1)
								LEFT JOIN 1_ivrs i on (i.prinumber=pri.number AND i.ivrsid=pri.associateid AND i.status=1)
								LEFT JOIN 1_pbx pbx on (pbx.prinumber=pri.number AND pbx.pbxid=pri.associateid AND pbx.status=1)
								LEFT JOIN (SELECT g.gid,max(h.starttime) as lastcall FROM 1_groups g LEFT JOIN 1_callhistory h on g.gid=h.gid GROUP BY g.gid) ch on g.gid=ch.gid
								LEFT JOIN (SELECT i.ivrsid,max(h.datetime) as lastcall FROM 1_ivrs i LEFT JOIN 1_ivrshistory h on i.ivrsid=h.ivrsid GROUP BY i.ivrsid) ih on i.ivrsid=ih.ivrsid
								LEFT JOIN (SELECT p.pbxid,max(h.starttime) as lastcall FROM 1_pbx p LEFT JOIN 1_pbxreport h on p.pbxid=h.pbxid GROUP BY p.pbxid) ph on pbx.pbxid=ph.pbxid
								WHERE pri.bid=1
[2017-05-02 14:36:48]	SQL :	SELECT balance FROM sms_bal  where bid='1'
[2017-05-02 14:36:48]	SQL :	SELECT balance FROM call_bal where bid='1'
[2017-05-02 14:36:48]	SQL :	SELECT DISTINCT(e.eid),e.empname,eb.start_time FROM 1_employee e
		                       LEFT JOIN 1_emp_break eb ON e.eid = eb.eid
		                       LEFT JOIN 1_groups d ON e.eid = d.eid
		                       WHERE eb.end_time='0000-00-00' AND e.selfdisable=1  GROUP BY d.gid,e.eid
[2017-05-02 14:36:48]	SQL :	SELECT COALESCE(COUNT(callid), 0) AS day 
							FROM 1_callhistory h 
							LEFT JOIN 1_groups d ON d.gid = h.gid 
							WHERE 1 AND (DATE(h.`starttime`) = DATE(NOW()))
[2017-05-02 14:36:48]	SQL :	SELECT COALESCE(COUNT(callid), 0) AS day 
							FROM 1_callhistory h 
							LEFT JOIN 1_groups d ON d.gid = h.gid 
							WHERE 1  AND (DATE(h.`starttime`)  > DATE(DATE_SUB(NOW(), INTERVAL 1 WEEK)))
[2017-05-02 14:36:48]	SQL :	SELECT COALESCE(COUNT(callid), 0) AS day 
							FROM 1_callhistory h 
							LEFT JOIN 1_groups d ON d.gid = h.gid 
							WHERE 1  AND (MONTH(h.`starttime` ) = MONTH(NOW()))
[2017-05-02 14:36:48]	SQL :	SELECT COALESCE(COUNT(pbxid), 0) AS day 
							FROM 1_pbxreport h 
							WHERE 1 AND (DATE(h.`starttime`) = DATE(NOW()))
[2017-05-02 14:36:48]	SQL :	SELECT COALESCE(COUNT(pbxid), 0) AS day 
							FROM 1_pbxreport h 
							WHERE 1  AND (DATE(h.`starttime`)  > DATE(DATE_SUB(NOW(), INTERVAL 1 WEEK)))
[2017-05-02 14:36:48]	SQL :	SELECT COALESCE(COUNT(pbxid), 0) AS day 
							FROM 1_pbxreport h 
							WHERE 1  AND (MONTH(h.`starttime` ) = MONTH(NOW()))
[2017-05-02 14:36:48]	SQL :	SELECT COALESCE(COUNT(hid), 0) AS day 
							   FROM 1_ivrshistory h 
						       WHERE 1 AND (DATE(h.`datetime`) = DATE(NOW()))
[2017-05-02 14:36:48]	SQL :	SELECT COALESCE(COUNT(hid), 0) AS day 
							   FROM 1_ivrshistory h 
						       WHERE 1  AND (DATE(h.`datetime`)  > DATE(DATE_SUB(NOW(), INTERVAL 1 WEEK)))
[2017-05-02 14:36:48]	SQL :	SELECT COALESCE(COUNT(hid), 0) AS day 
							   FROM 1_ivrshistory h 
						       WHERE 1  AND (MONTH(h.`datetime` ) = MONTH(NOW()))
[2017-05-02 14:36:48]	SQL :	SELECT COALESCE(COUNT(leadid), 0) AS day 
							FROM 1_leads a 
							LEFT JOIN 1_leads_groups d ON d.gid = a.gid 
							WHERE (DATE(a.`createdon`) = DATE(NOW()))
[2017-05-02 14:36:48]	SQL :	SELECT COALESCE(COUNT(leadid), 0) AS day 
							FROM 1_leads a 
							LEFT JOIN 1_leads_groups d ON d.gid = a.gid 
							WHERE (DATE(a.`createdon`) = DATE(NOW()))
[2017-05-02 14:36:48]	SQL :	SELECT COALESCE(COUNT(leadid), 0) AS day 
							FROM 1_leads a 
							LEFT JOIN 1_leads_groups d ON d.gid = a.gid 
							WHERE (DATE(a.`createdon`) = DATE(NOW()))
[2017-05-02 14:36:48]	SQL :	SELECT COALESCE(COUNT(tktid), 0) AS day 
							FROM 1_support_tickets a 
							LEFT JOIN 1_support_groups d ON d.gid = a.gid 
							WHERE (DATE(a.`createdon`) = DATE(NOW()))
[2017-05-02 14:36:48]	SQL :	SELECT COALESCE(COUNT(tktid), 0) AS day 
							FROM 1_support_tickets a 
							LEFT JOIN 1_support_groups d ON d.gid = a.gid 
							WHERE (DATE(a.`createdon`) = DATE(NOW()))
[2017-05-02 14:36:48]	SQL :	SELECT COALESCE(COUNT(tktid), 0) AS day 
							FROM 1_support_tickets a 
							LEFT JOIN 1_support_groups d ON d.gid = a.gid 
							WHERE (DATE(a.`createdon`) = DATE(NOW()))
[2017-05-02 14:36:48]	SQL :	SELECT COALESCE(COUNT(callid), 0) AS day 
							FROM 1_outboundcalls h 
							WHERE (DATE(h.`starttime`) = DATE(NOW()))
[2017-05-02 14:36:48]	SQL :	SELECT COALESCE(COUNT(callid), 0) AS day 
							FROM 1_outboundcalls h 
							WHERE (DATE(h.`starttime`) = DATE(NOW()))
[2017-05-02 14:36:48]	SQL :	SELECT COALESCE(COUNT(callid), 0) AS day 
							FROM 1_outboundcalls h 
							WHERE (DATE(h.`starttime`) = DATE(NOW()))
[2017-05-02 14:36:48]	SQL :	SELECT COALESCE(COUNT(callid), 0) AS day 
							FROM 1_mtracker h 
							WHERE (DATE(h.`starttime`) = DATE(NOW()))
[2017-05-02 14:36:48]	SQL :	SELECT COALESCE(COUNT(callid), 0) AS day 
							FROM 1_mtracker h 
							WHERE (DATE(h.`starttime`) = DATE(NOW()))
[2017-05-02 14:36:48]	SQL :	SELECT COALESCE(COUNT(callid), 0) AS day 
							FROM 1_mtracker h 
							WHERE (DATE(h.`starttime`) = DATE(NOW()))
[2017-05-02 14:36:49]	DEBUG :	Config Class Initialized
[2017-05-02 14:36:49]	DEBUG :	Hooks Class Initialized
[2017-05-02 14:36:49]	DEBUG :	URI Class Initialized
[2017-05-02 14:36:49]	DEBUG :	Router Class Initialized
[2017-05-02 14:36:49]	DEBUG :	Output Class Initialized
[2017-05-02 14:36:49]	DEBUG :	Input Class Initialized
[2017-05-02 14:36:49]	DEBUG :	Global POST and COOKIE data sanitized
[2017-05-02 14:36:49]	DEBUG :	Language Class Initialized
[2017-05-02 14:36:49]	DEBUG :	Loader Class Initialized
[2017-05-02 14:36:49]	DEBUG :	Helper loaded: url_helper
[2017-05-02 14:36:49]	DEBUG :	Helper loaded: form_helper
[2017-05-02 14:36:49]	DEBUG :	Helper loaded: html_helper
[2017-05-02 14:36:49]	DEBUG :	Helper loaded: email_helper
[2017-05-02 14:36:49]	DEBUG :	Helper loaded: ckeditor_helper
[2017-05-02 14:36:49]	DEBUG :	Helper loaded: mcube_helper
[2017-05-02 14:36:49]	DEBUG :	Database Driver Class Initialized
[2017-05-02 14:36:49]	ERROR :	Severity: 8192  --> mysql_pconnect(): The mysql extension is deprecated and will be removed in the future: use mysqli or PDO instead /var/www/html/mcnew/system/database/drivers/mysql/mysql_driver.php 88
[2017-05-02 14:36:49]	DEBUG :	Session Class Initialized
[2017-05-02 14:36:49]	DEBUG :	Helper loaded: string_helper
[2017-05-02 14:36:49]	DEBUG :	Encrypt Class Initialized
[2017-05-02 14:36:49]	DEBUG :	A session cookie was not found.
[2017-05-02 14:36:49]	SQL :	INSERT INTO `call_sessions` (`session_id`, `ip_address`, `user_agent`, `last_activity`) VALUES ('2f29b34eb0f0b9188237aace5627765d', '192.168.1.106', 'Dalvik/2.1.0 (Linux; U; Android 6.0; Panasonic T44', 1493716009)
[2017-05-02 14:36:49]	DEBUG :	Session routines successfully run
[2017-05-02 14:36:49]	DEBUG :	Table Class Initialized
[2017-05-02 14:36:49]	DEBUG :	Pagination Class Initialized
[2017-05-02 14:36:49]	DEBUG :	Config file loaded: config/paypallib_config.php
[2017-05-02 14:36:49]	DEBUG :	Form Validation Class Initialized
[2017-05-02 14:36:49]	DEBUG :	Email Class Initialized
[2017-05-02 14:36:49]	DEBUG :	Language file loaded: language/english/calendar_lang.php
[2017-05-02 14:36:49]	DEBUG :	Calendar Class Initialized
[2017-05-02 14:36:49]	DEBUG :	Controller Class Initialized
[2017-05-02 14:36:49]	DEBUG :	Model Class Initialized
[2017-05-02 14:36:49]	DEBUG :	Model Class Initialized
[2017-05-02 14:36:49]	DEBUG :	Model Class Initialized
[2017-05-02 14:36:49]	DEBUG :	Model Class Initialized
[2017-05-02 14:36:49]	DEBUG :	Model Class Initialized
[2017-05-02 14:36:49]	DEBUG :	Model Class Initialized
[2017-05-02 14:36:49]	DEBUG :	Model Class Initialized
[2017-05-02 14:36:49]	DEBUG :	Model Class Initialized
[2017-05-02 14:36:49]	DEBUG :	Model Class Initialized
[2017-05-02 14:36:49]	DEBUG :	Model Class Initialized
[2017-05-02 14:36:49]	DEBUG :	Model Class Initialized
[2017-05-02 14:36:49]	DEBUG :	Model Class Initialized
[2017-05-02 14:36:49]	DEBUG :	Model Class Initialized
[2017-05-02 14:36:49]	DEBUG :	Model Class Initialized
[2017-05-02 14:36:49]	DEBUG :	Plugin loaded: to_pdf_pi
[2017-05-02 14:36:49]	DEBUG :	Model Class Initialized
[2017-05-02 14:36:49]	DEBUG :	Language file loaded: language/english/form_validation_lang.php
[2017-05-02 14:36:49]	SQL :	SELECT uid,bid,eid FROM `user` WHERE authkey='1.1.d886b8e8a0615'
[2017-05-02 14:36:49]	DEBUG :	Database Driver Class Initialized
[2017-05-02 14:36:49]	SQL :	SELECT roleid FROM 1_employee
							WHERE eid='1'
							AND bid='1'
[2017-05-02 14:36:49]	DEBUG :	Database Driver Class Initialized
[2017-05-02 14:36:49]	SQL :	SELECT * FROM 1_user_role
							WHERE roleid='1'
							AND bid='1'
[2017-05-02 14:36:49]	SQL :	SELECT m.modid,m.modname,m.moddesc,
							COALESCE(o.opt_add,0) as opt_add,
							COALESCE(o.opt_view,0) as opt_view,
							COALESCE(o.opt_download,0) as opt_download,
							COALESCE(opt_delete,0) as opt_delete 
							FROM module m
							LEFT JOIN (SELECT * FROM 1_role_mod_opt
							WHERE roleid='1' 
							AND bid='1') as o
							ON m.modid=o.modid where m.status=1
[2017-05-02 14:36:49]	SQL :	SELECT a.*,f.fieldname FROM 1_role_access a
								LEFT JOIN systemfields f on a.fieldid=f.fieldid
								WHERE a.roleid='1'
								AND a.bid='1'
								AND a.fieldtype='s'
[2017-05-02 14:36:49]	SQL :	SELECT * FROM 1_role_access
								WHERE roleid='1'
								AND bid='1'
							AND fieldtype='c'
[2017-05-02 14:36:49]	SQL :	SELECT pri.landingnumber,pri.used,pri.climit,
								if(pri.status=0,'Not in use',
								if(pri.type='0','Calltrack',
								if(pri.type='1','IVRS',
								if(pri.type='2','PBX','Not Assign')))) as type,
								pri.associateid,
								if(pri.status=0,'None',
								if(pri.type='0',g.groupname,
								if(pri.type='1',i.title,
								if(pri.type='2',pbx.title,'None')))) as title,
								if(pri.status=0,'None',
								if(pri.type='0',ch.lastcall,
								if(pri.type='1',ih.lastcall,
								if(pri.type='2',ph.lastcall,'None')))) as lastcall
								FROM prinumbers pri
								LEFT JOIN 1_groups g on (g.prinumber=pri.number AND g.gid=pri.associateid AND g.status=1)
								LEFT JOIN 1_ivrs i on (i.prinumber=pri.number AND i.ivrsid=pri.associateid AND i.status=1)
								LEFT JOIN 1_pbx pbx on (pbx.prinumber=pri.number AND pbx.pbxid=pri.associateid AND pbx.status=1)
								LEFT JOIN (SELECT g.gid,max(h.starttime) as lastcall FROM 1_groups g LEFT JOIN 1_callhistory h on g.gid=h.gid GROUP BY g.gid) ch on g.gid=ch.gid
								LEFT JOIN (SELECT i.ivrsid,max(h.datetime) as lastcall FROM 1_ivrs i LEFT JOIN 1_ivrshistory h on i.ivrsid=h.ivrsid GROUP BY i.ivrsid) ih on i.ivrsid=ih.ivrsid
								LEFT JOIN (SELECT p.pbxid,max(h.starttime) as lastcall FROM 1_pbx p LEFT JOIN 1_pbxreport h on p.pbxid=h.pbxid GROUP BY p.pbxid) ph on pbx.pbxid=ph.pbxid
								WHERE pri.bid=1
[2017-05-02 14:36:49]	SQL :	SELECT balance FROM sms_bal  where bid='1'
[2017-05-02 14:36:49]	SQL :	SELECT balance FROM call_bal where bid='1'
[2017-05-02 14:36:49]	SQL :	SELECT DISTINCT(e.eid),e.empname,eb.start_time FROM 1_employee e
		                       LEFT JOIN 1_emp_break eb ON e.eid = eb.eid
		                       LEFT JOIN 1_groups d ON e.eid = d.eid
		                       WHERE eb.end_time='0000-00-00' AND e.selfdisable=1  GROUP BY d.gid,e.eid
[2017-05-02 14:36:49]	SQL :	SELECT COALESCE(COUNT(callid), 0) AS day 
							FROM 1_callhistory h 
							LEFT JOIN 1_groups d ON d.gid = h.gid 
							WHERE 1 AND (DATE(h.`starttime`) = DATE(NOW()))
[2017-05-02 14:36:49]	SQL :	SELECT COALESCE(COUNT(callid), 0) AS day 
							FROM 1_callhistory h 
							LEFT JOIN 1_groups d ON d.gid = h.gid 
							WHERE 1  AND (DATE(h.`starttime`)  > DATE(DATE_SUB(NOW(), INTERVAL 1 WEEK)))
[2017-05-02 14:36:49]	SQL :	SELECT COALESCE(COUNT(callid), 0) AS day 
							FROM 1_callhistory h 
							LEFT JOIN 1_groups d ON d.gid = h.gid 
							WHERE 1  AND (MONTH(h.`starttime` ) = MONTH(NOW()))
[2017-05-02 14:36:49]	SQL :	SELECT COALESCE(COUNT(pbxid), 0) AS day 
							FROM 1_pbxreport h 
							WHERE 1 AND (DATE(h.`starttime`) = DATE(NOW()))
[2017-05-02 14:36:49]	SQL :	SELECT COALESCE(COUNT(pbxid), 0) AS day 
							FROM 1_pbxreport h 
							WHERE 1  AND (DATE(h.`starttime`)  > DATE(DATE_SUB(NOW(), INTERVAL 1 WEEK)))
[2017-05-02 14:36:49]	SQL :	SELECT COALESCE(COUNT(pbxid), 0) AS day 
							FROM 1_pbxreport h 
							WHERE 1  AND (MONTH(h.`starttime` ) = MONTH(NOW()))
[2017-05-02 14:36:49]	SQL :	SELECT COALESCE(COUNT(hid), 0) AS day 
							   FROM 1_ivrshistory h 
						       WHERE 1 AND (DATE(h.`datetime`) = DATE(NOW()))
[2017-05-02 14:36:49]	SQL :	SELECT COALESCE(COUNT(hid), 0) AS day 
							   FROM 1_ivrshistory h 
						       WHERE 1  AND (DATE(h.`datetime`)  > DATE(DATE_SUB(NOW(), INTERVAL 1 WEEK)))
[2017-05-02 14:36:49]	SQL :	SELECT COALESCE(COUNT(hid), 0) AS day 
							   FROM 1_ivrshistory h 
						       WHERE 1  AND (MONTH(h.`datetime` ) = MONTH(NOW()))
[2017-05-02 14:36:49]	SQL :	SELECT COALESCE(COUNT(leadid), 0) AS day 
							FROM 1_leads a 
							LEFT JOIN 1_leads_groups d ON d.gid = a.gid 
							WHERE (DATE(a.`createdon`) = DATE(NOW()))
[2017-05-02 14:36:49]	SQL :	SELECT COALESCE(COUNT(leadid), 0) AS day 
							FROM 1_leads a 
							LEFT JOIN 1_leads_groups d ON d.gid = a.gid 
							WHERE (DATE(a.`createdon`) = DATE(NOW()))
[2017-05-02 14:36:49]	SQL :	SELECT COALESCE(COUNT(leadid), 0) AS day 
							FROM 1_leads a 
							LEFT JOIN 1_leads_groups d ON d.gid = a.gid 
							WHERE (DATE(a.`createdon`) = DATE(NOW()))
[2017-05-02 14:36:49]	SQL :	SELECT COALESCE(COUNT(tktid), 0) AS day 
							FROM 1_support_tickets a 
							LEFT JOIN 1_support_groups d ON d.gid = a.gid 
							WHERE (DATE(a.`createdon`) = DATE(NOW()))
[2017-05-02 14:36:49]	SQL :	SELECT COALESCE(COUNT(tktid), 0) AS day 
							FROM 1_support_tickets a 
							LEFT JOIN 1_support_groups d ON d.gid = a.gid 
							WHERE (DATE(a.`createdon`) = DATE(NOW()))
[2017-05-02 14:36:49]	SQL :	SELECT COALESCE(COUNT(tktid), 0) AS day 
							FROM 1_support_tickets a 
							LEFT JOIN 1_support_groups d ON d.gid = a.gid 
							WHERE (DATE(a.`createdon`) = DATE(NOW()))
[2017-05-02 14:36:49]	SQL :	SELECT COALESCE(COUNT(callid), 0) AS day 
							FROM 1_outboundcalls h 
							WHERE (DATE(h.`starttime`) = DATE(NOW()))
[2017-05-02 14:36:49]	SQL :	SELECT COALESCE(COUNT(callid), 0) AS day 
							FROM 1_outboundcalls h 
							WHERE (DATE(h.`starttime`) = DATE(NOW()))
[2017-05-02 14:36:49]	SQL :	SELECT COALESCE(COUNT(callid), 0) AS day 
							FROM 1_outboundcalls h 
							WHERE (DATE(h.`starttime`) = DATE(NOW()))
[2017-05-02 14:36:49]	SQL :	SELECT COALESCE(COUNT(callid), 0) AS day 
							FROM 1_mtracker h 
							WHERE (DATE(h.`starttime`) = DATE(NOW()))
[2017-05-02 14:36:49]	SQL :	SELECT COALESCE(COUNT(callid), 0) AS day 
							FROM 1_mtracker h 
							WHERE (DATE(h.`starttime`) = DATE(NOW()))
[2017-05-02 14:36:49]	SQL :	SELECT COALESCE(COUNT(callid), 0) AS day 
							FROM 1_mtracker h 
							WHERE (DATE(h.`starttime`) = DATE(NOW()))
[2017-05-02 14:37:33]	DEBUG :	Config Class Initialized
[2017-05-02 14:37:33]	DEBUG :	Hooks Class Initialized
[2017-05-02 14:37:33]	DEBUG :	URI Class Initialized
[2017-05-02 14:37:33]	DEBUG :	Router Class Initialized
[2017-05-02 14:37:33]	DEBUG :	Output Class Initialized
[2017-05-02 14:37:33]	DEBUG :	Input Class Initialized
[2017-05-02 14:37:33]	DEBUG :	Global POST and COOKIE data sanitized
[2017-05-02 14:37:33]	DEBUG :	Language Class Initialized
[2017-05-02 14:37:33]	DEBUG :	Loader Class Initialized
[2017-05-02 14:37:33]	DEBUG :	Helper loaded: url_helper
[2017-05-02 14:37:33]	DEBUG :	Helper loaded: form_helper
[2017-05-02 14:37:33]	DEBUG :	Helper loaded: html_helper
[2017-05-02 14:37:33]	DEBUG :	Helper loaded: email_helper
[2017-05-02 14:37:33]	DEBUG :	Helper loaded: ckeditor_helper
[2017-05-02 14:37:33]	DEBUG :	Helper loaded: mcube_helper
[2017-05-02 14:37:33]	DEBUG :	Database Driver Class Initialized
[2017-05-02 14:37:33]	ERROR :	Severity: 8192  --> mysql_pconnect(): The mysql extension is deprecated and will be removed in the future: use mysqli or PDO instead /var/www/html/mcnew/system/database/drivers/mysql/mysql_driver.php 88
[2017-05-02 14:37:33]	DEBUG :	Session Class Initialized
[2017-05-02 14:37:33]	DEBUG :	Helper loaded: string_helper
[2017-05-02 14:37:33]	DEBUG :	Encrypt Class Initialized
[2017-05-02 14:37:33]	DEBUG :	A session cookie was not found.
[2017-05-02 14:37:33]	SQL :	INSERT INTO `call_sessions` (`session_id`, `ip_address`, `user_agent`, `last_activity`) VALUES ('7519a2e0b874766d61ed673d407a4413', '192.168.1.106', 'Dalvik/2.1.0 (Linux; U; Android 6.0; Panasonic T44', 1493716053)
[2017-05-02 14:37:33]	DEBUG :	Session routines successfully run
[2017-05-02 14:37:33]	DEBUG :	Table Class Initialized
[2017-05-02 14:37:33]	DEBUG :	Pagination Class Initialized
[2017-05-02 14:37:33]	DEBUG :	Config file loaded: config/paypallib_config.php
[2017-05-02 14:37:33]	DEBUG :	Form Validation Class Initialized
[2017-05-02 14:37:33]	DEBUG :	Email Class Initialized
[2017-05-02 14:37:33]	DEBUG :	Language file loaded: language/english/calendar_lang.php
[2017-05-02 14:37:33]	DEBUG :	Calendar Class Initialized
[2017-05-02 14:37:33]	DEBUG :	Controller Class Initialized
[2017-05-02 14:37:33]	DEBUG :	Model Class Initialized
[2017-05-02 14:37:33]	DEBUG :	Model Class Initialized
[2017-05-02 14:37:33]	DEBUG :	Model Class Initialized
[2017-05-02 14:37:33]	DEBUG :	Model Class Initialized
[2017-05-02 14:37:33]	DEBUG :	Model Class Initialized
[2017-05-02 14:37:33]	DEBUG :	Model Class Initialized
[2017-05-02 14:37:33]	DEBUG :	Model Class Initialized
[2017-05-02 14:37:33]	DEBUG :	Model Class Initialized
[2017-05-02 14:37:33]	DEBUG :	Model Class Initialized
[2017-05-02 14:37:33]	DEBUG :	Model Class Initialized
[2017-05-02 14:37:33]	DEBUG :	Model Class Initialized
[2017-05-02 14:37:33]	DEBUG :	Model Class Initialized
[2017-05-02 14:37:33]	DEBUG :	Model Class Initialized
[2017-05-02 14:37:33]	DEBUG :	Model Class Initialized
[2017-05-02 14:37:33]	DEBUG :	Plugin loaded: to_pdf_pi
[2017-05-02 14:37:33]	DEBUG :	Model Class Initialized
[2017-05-02 14:37:33]	DEBUG :	Language file loaded: language/english/form_validation_lang.php
[2017-05-02 14:37:33]	SQL :	SELECT uid,bid,eid FROM `user` WHERE authkey='1.1.d886b8e8a0615'
[2017-05-02 14:37:33]	DEBUG :	Database Driver Class Initialized
[2017-05-02 14:37:33]	SQL :	SELECT roleid FROM 1_employee
							WHERE eid='1'
							AND bid='1'
[2017-05-02 14:37:33]	DEBUG :	Database Driver Class Initialized
[2017-05-02 14:37:33]	SQL :	SELECT * FROM 1_user_role
							WHERE roleid='1'
							AND bid='1'
[2017-05-02 14:37:33]	SQL :	SELECT m.modid,m.modname,m.moddesc,
							COALESCE(o.opt_add,0) as opt_add,
							COALESCE(o.opt_view,0) as opt_view,
							COALESCE(o.opt_download,0) as opt_download,
							COALESCE(opt_delete,0) as opt_delete 
							FROM module m
							LEFT JOIN (SELECT * FROM 1_role_mod_opt
							WHERE roleid='1' 
							AND bid='1') as o
							ON m.modid=o.modid where m.status=1
[2017-05-02 14:37:33]	SQL :	SELECT a.*,f.fieldname FROM 1_role_access a
								LEFT JOIN systemfields f on a.fieldid=f.fieldid
								WHERE a.roleid='1'
								AND a.bid='1'
								AND a.fieldtype='s'
[2017-05-02 14:37:33]	SQL :	SELECT * FROM 1_role_access
								WHERE roleid='1'
								AND bid='1'
							AND fieldtype='c'
[2017-05-02 14:37:33]	SQL :	SELECT pri.landingnumber,pri.used,pri.climit,
								if(pri.status=0,'Not in use',
								if(pri.type='0','Calltrack',
								if(pri.type='1','IVRS',
								if(pri.type='2','PBX','Not Assign')))) as type,
								pri.associateid,
								if(pri.status=0,'None',
								if(pri.type='0',g.groupname,
								if(pri.type='1',i.title,
								if(pri.type='2',pbx.title,'None')))) as title,
								if(pri.status=0,'None',
								if(pri.type='0',ch.lastcall,
								if(pri.type='1',ih.lastcall,
								if(pri.type='2',ph.lastcall,'None')))) as lastcall
								FROM prinumbers pri
								LEFT JOIN 1_groups g on (g.prinumber=pri.number AND g.gid=pri.associateid AND g.status=1)
								LEFT JOIN 1_ivrs i on (i.prinumber=pri.number AND i.ivrsid=pri.associateid AND i.status=1)
								LEFT JOIN 1_pbx pbx on (pbx.prinumber=pri.number AND pbx.pbxid=pri.associateid AND pbx.status=1)
								LEFT JOIN (SELECT g.gid,max(h.starttime) as lastcall FROM 1_groups g LEFT JOIN 1_callhistory h on g.gid=h.gid GROUP BY g.gid) ch on g.gid=ch.gid
								LEFT JOIN (SELECT i.ivrsid,max(h.datetime) as lastcall FROM 1_ivrs i LEFT JOIN 1_ivrshistory h on i.ivrsid=h.ivrsid GROUP BY i.ivrsid) ih on i.ivrsid=ih.ivrsid
								LEFT JOIN (SELECT p.pbxid,max(h.starttime) as lastcall FROM 1_pbx p LEFT JOIN 1_pbxreport h on p.pbxid=h.pbxid GROUP BY p.pbxid) ph on pbx.pbxid=ph.pbxid
								WHERE pri.bid=1
[2017-05-02 14:37:33]	SQL :	SELECT balance FROM sms_bal  where bid='1'
[2017-05-02 14:37:33]	SQL :	SELECT balance FROM call_bal where bid='1'
[2017-05-02 14:37:33]	SQL :	SELECT DISTINCT(e.eid),e.empname,eb.start_time FROM 1_employee e
		                       LEFT JOIN 1_emp_break eb ON e.eid = eb.eid
		                       LEFT JOIN 1_groups d ON e.eid = d.eid
		                       WHERE eb.end_time='0000-00-00' AND e.selfdisable=1  GROUP BY d.gid,e.eid
[2017-05-02 14:37:33]	SQL :	SELECT COALESCE(COUNT(callid), 0) AS day 
							FROM 1_callhistory h 
							LEFT JOIN 1_groups d ON d.gid = h.gid 
							WHERE 1 AND (DATE(h.`starttime`) = DATE(NOW()))
[2017-05-02 14:37:33]	SQL :	SELECT COALESCE(COUNT(callid), 0) AS day 
							FROM 1_callhistory h 
							LEFT JOIN 1_groups d ON d.gid = h.gid 
							WHERE 1  AND (DATE(h.`starttime`)  > DATE(DATE_SUB(NOW(), INTERVAL 1 WEEK)))
[2017-05-02 14:37:33]	SQL :	SELECT COALESCE(COUNT(callid), 0) AS day 
							FROM 1_callhistory h 
							LEFT JOIN 1_groups d ON d.gid = h.gid 
							WHERE 1  AND (MONTH(h.`starttime` ) = MONTH(NOW()))
[2017-05-02 14:37:33]	SQL :	SELECT COALESCE(COUNT(pbxid), 0) AS day 
							FROM 1_pbxreport h 
							WHERE 1 AND (DATE(h.`starttime`) = DATE(NOW()))
[2017-05-02 14:37:33]	SQL :	SELECT COALESCE(COUNT(pbxid), 0) AS day 
							FROM 1_pbxreport h 
							WHERE 1  AND (DATE(h.`starttime`)  > DATE(DATE_SUB(NOW(), INTERVAL 1 WEEK)))
[2017-05-02 14:37:33]	SQL :	SELECT COALESCE(COUNT(pbxid), 0) AS day 
							FROM 1_pbxreport h 
							WHERE 1  AND (MONTH(h.`starttime` ) = MONTH(NOW()))
[2017-05-02 14:37:33]	SQL :	SELECT COALESCE(COUNT(hid), 0) AS day 
							   FROM 1_ivrshistory h 
						       WHERE 1 AND (DATE(h.`datetime`) = DATE(NOW()))
[2017-05-02 14:37:33]	SQL :	SELECT COALESCE(COUNT(hid), 0) AS day 
							   FROM 1_ivrshistory h 
						       WHERE 1  AND (DATE(h.`datetime`)  > DATE(DATE_SUB(NOW(), INTERVAL 1 WEEK)))
[2017-05-02 14:37:33]	SQL :	SELECT COALESCE(COUNT(hid), 0) AS day 
							   FROM 1_ivrshistory h 
						       WHERE 1  AND (MONTH(h.`datetime` ) = MONTH(NOW()))
[2017-05-02 14:37:33]	SQL :	SELECT COALESCE(COUNT(leadid), 0) AS day 
							FROM 1_leads a 
							LEFT JOIN 1_leads_groups d ON d.gid = a.gid 
							WHERE (DATE(a.`createdon`) = DATE(NOW()))
[2017-05-02 14:37:33]	SQL :	SELECT COALESCE(COUNT(leadid), 0) AS day 
							FROM 1_leads a 
							LEFT JOIN 1_leads_groups d ON d.gid = a.gid 
							WHERE (DATE(a.`createdon`) = DATE(NOW()))
[2017-05-02 14:37:33]	SQL :	SELECT COALESCE(COUNT(leadid), 0) AS day 
							FROM 1_leads a 
							LEFT JOIN 1_leads_groups d ON d.gid = a.gid 
							WHERE (DATE(a.`createdon`) = DATE(NOW()))
[2017-05-02 14:37:33]	SQL :	SELECT COALESCE(COUNT(tktid), 0) AS day 
							FROM 1_support_tickets a 
							LEFT JOIN 1_support_groups d ON d.gid = a.gid 
							WHERE (DATE(a.`createdon`) = DATE(NOW()))
[2017-05-02 14:37:33]	SQL :	SELECT COALESCE(COUNT(tktid), 0) AS day 
							FROM 1_support_tickets a 
							LEFT JOIN 1_support_groups d ON d.gid = a.gid 
							WHERE (DATE(a.`createdon`) = DATE(NOW()))
[2017-05-02 14:37:33]	SQL :	SELECT COALESCE(COUNT(tktid), 0) AS day 
							FROM 1_support_tickets a 
							LEFT JOIN 1_support_groups d ON d.gid = a.gid 
							WHERE (DATE(a.`createdon`) = DATE(NOW()))
[2017-05-02 14:37:33]	SQL :	SELECT COALESCE(COUNT(callid), 0) AS day 
							FROM 1_outboundcalls h 
							WHERE (DATE(h.`starttime`) = DATE(NOW()))
[2017-05-02 14:37:33]	SQL :	SELECT COALESCE(COUNT(callid), 0) AS day 
							FROM 1_outboundcalls h 
							WHERE (DATE(h.`starttime`) = DATE(NOW()))
[2017-05-02 14:37:33]	SQL :	SELECT COALESCE(COUNT(callid), 0) AS day 
							FROM 1_outboundcalls h 
							WHERE (DATE(h.`starttime`) = DATE(NOW()))
[2017-05-02 14:37:33]	SQL :	SELECT COALESCE(COUNT(callid), 0) AS day 
							FROM 1_mtracker h 
							WHERE (DATE(h.`starttime`) = DATE(NOW()))
[2017-05-02 14:37:33]	SQL :	SELECT COALESCE(COUNT(callid), 0) AS day 
							FROM 1_mtracker h 
							WHERE (DATE(h.`starttime`) = DATE(NOW()))
[2017-05-02 14:37:33]	SQL :	SELECT COALESCE(COUNT(callid), 0) AS day 
							FROM 1_mtracker h 
							WHERE (DATE(h.`starttime`) = DATE(NOW()))
[2017-05-02 14:47:28]	DEBUG :	Config Class Initialized
[2017-05-02 14:47:28]	DEBUG :	Hooks Class Initialized
[2017-05-02 14:47:28]	DEBUG :	URI Class Initialized
[2017-05-02 14:47:28]	DEBUG :	Router Class Initialized
[2017-05-02 14:47:28]	DEBUG :	Output Class Initialized
[2017-05-02 14:47:28]	DEBUG :	Input Class Initialized
[2017-05-02 14:47:28]	DEBUG :	Global POST and COOKIE data sanitized
[2017-05-02 14:47:28]	DEBUG :	Language Class Initialized
[2017-05-02 14:47:28]	DEBUG :	Loader Class Initialized
[2017-05-02 14:47:28]	DEBUG :	Helper loaded: url_helper
[2017-05-02 14:47:28]	DEBUG :	Helper loaded: form_helper
[2017-05-02 14:47:28]	DEBUG :	Helper loaded: html_helper
[2017-05-02 14:47:28]	DEBUG :	Helper loaded: email_helper
[2017-05-02 14:47:28]	DEBUG :	Helper loaded: ckeditor_helper
[2017-05-02 14:47:28]	DEBUG :	Helper loaded: mcube_helper
[2017-05-02 14:47:28]	DEBUG :	Database Driver Class Initialized
[2017-05-02 14:47:28]	ERROR :	Severity: 8192  --> mysql_pconnect(): The mysql extension is deprecated and will be removed in the future: use mysqli or PDO instead /var/www/html/mcnew/system/database/drivers/mysql/mysql_driver.php 88
[2017-05-02 14:47:28]	DEBUG :	Session Class Initialized
[2017-05-02 14:47:28]	DEBUG :	Helper loaded: string_helper
[2017-05-02 14:47:28]	DEBUG :	Encrypt Class Initialized
[2017-05-02 14:47:28]	DEBUG :	A session cookie was not found.
[2017-05-02 14:47:28]	SQL :	INSERT INTO `call_sessions` (`session_id`, `ip_address`, `user_agent`, `last_activity`) VALUES ('fcb5397e1e3fa977d627d0af604739c4', '192.168.1.106', 'Dalvik/2.1.0 (Linux; U; Android 6.0; Panasonic T44', 1493716648)
[2017-05-02 14:47:28]	DEBUG :	Session routines successfully run
[2017-05-02 14:47:28]	DEBUG :	Table Class Initialized
[2017-05-02 14:47:28]	DEBUG :	Pagination Class Initialized
[2017-05-02 14:47:28]	DEBUG :	Config file loaded: config/paypallib_config.php
[2017-05-02 14:47:28]	DEBUG :	Form Validation Class Initialized
[2017-05-02 14:47:28]	DEBUG :	Email Class Initialized
[2017-05-02 14:47:28]	DEBUG :	Language file loaded: language/english/calendar_lang.php
[2017-05-02 14:47:28]	DEBUG :	Calendar Class Initialized
[2017-05-02 14:47:28]	DEBUG :	Controller Class Initialized
[2017-05-02 14:47:28]	DEBUG :	Model Class Initialized
[2017-05-02 14:47:28]	DEBUG :	Model Class Initialized
[2017-05-02 14:47:28]	DEBUG :	Model Class Initialized
[2017-05-02 14:47:28]	DEBUG :	Model Class Initialized
[2017-05-02 14:47:28]	DEBUG :	Model Class Initialized
[2017-05-02 14:47:28]	DEBUG :	Model Class Initialized
[2017-05-02 14:47:28]	DEBUG :	Model Class Initialized
[2017-05-02 14:47:28]	DEBUG :	Model Class Initialized
[2017-05-02 14:47:28]	DEBUG :	Model Class Initialized
[2017-05-02 14:47:28]	DEBUG :	Model Class Initialized
[2017-05-02 14:47:28]	DEBUG :	Model Class Initialized
[2017-05-02 14:47:28]	DEBUG :	Model Class Initialized
[2017-05-02 14:47:28]	DEBUG :	Model Class Initialized
[2017-05-02 14:47:28]	DEBUG :	Model Class Initialized
[2017-05-02 14:47:28]	DEBUG :	Plugin loaded: to_pdf_pi
[2017-05-02 14:47:28]	DEBUG :	Model Class Initialized
[2017-05-02 14:47:28]	DEBUG :	Language file loaded: language/english/form_validation_lang.php
[2017-05-02 14:47:28]	SQL :	SELECT uid,bid,eid FROM `user` WHERE authkey='1.1.d886b8e8a0615'
[2017-05-02 14:47:28]	DEBUG :	Database Driver Class Initialized
[2017-05-02 14:47:28]	SQL :	SELECT roleid FROM 1_employee
							WHERE eid='1'
							AND bid='1'
[2017-05-02 14:47:28]	DEBUG :	Database Driver Class Initialized
[2017-05-02 14:47:28]	SQL :	SELECT * FROM 1_user_role
							WHERE roleid='1'
							AND bid='1'
[2017-05-02 14:47:28]	SQL :	SELECT m.modid,m.modname,m.moddesc,
							COALESCE(o.opt_add,0) as opt_add,
							COALESCE(o.opt_view,0) as opt_view,
							COALESCE(o.opt_download,0) as opt_download,
							COALESCE(opt_delete,0) as opt_delete 
							FROM module m
							LEFT JOIN (SELECT * FROM 1_role_mod_opt
							WHERE roleid='1' 
							AND bid='1') as o
							ON m.modid=o.modid where m.status=1
[2017-05-02 14:47:28]	SQL :	SELECT a.*,f.fieldname FROM 1_role_access a
								LEFT JOIN systemfields f on a.fieldid=f.fieldid
								WHERE a.roleid='1'
								AND a.bid='1'
								AND a.fieldtype='s'
[2017-05-02 14:47:28]	SQL :	SELECT * FROM 1_role_access
								WHERE roleid='1'
								AND bid='1'
							AND fieldtype='c'
[2017-05-02 14:47:28]	SQL :	SELECT pri.landingnumber,pri.used,pri.climit,
								if(pri.status=0,'Not in use',
								if(pri.type='0','Calltrack',
								if(pri.type='1','IVRS',
								if(pri.type='2','PBX','Not Assign')))) as type,
								pri.associateid,
								if(pri.status=0,'None',
								if(pri.type='0',g.groupname,
								if(pri.type='1',i.title,
								if(pri.type='2',pbx.title,'None')))) as title,
								if(pri.status=0,'None',
								if(pri.type='0',ch.lastcall,
								if(pri.type='1',ih.lastcall,
								if(pri.type='2',ph.lastcall,'None')))) as lastcall
								FROM prinumbers pri
								LEFT JOIN 1_groups g on (g.prinumber=pri.number AND g.gid=pri.associateid AND g.status=1)
								LEFT JOIN 1_ivrs i on (i.prinumber=pri.number AND i.ivrsid=pri.associateid AND i.status=1)
								LEFT JOIN 1_pbx pbx on (pbx.prinumber=pri.number AND pbx.pbxid=pri.associateid AND pbx.status=1)
								LEFT JOIN (SELECT g.gid,max(h.starttime) as lastcall FROM 1_groups g LEFT JOIN 1_callhistory h on g.gid=h.gid GROUP BY g.gid) ch on g.gid=ch.gid
								LEFT JOIN (SELECT i.ivrsid,max(h.datetime) as lastcall FROM 1_ivrs i LEFT JOIN 1_ivrshistory h on i.ivrsid=h.ivrsid GROUP BY i.ivrsid) ih on i.ivrsid=ih.ivrsid
								LEFT JOIN (SELECT p.pbxid,max(h.starttime) as lastcall FROM 1_pbx p LEFT JOIN 1_pbxreport h on p.pbxid=h.pbxid GROUP BY p.pbxid) ph on pbx.pbxid=ph.pbxid
								WHERE pri.bid=1
[2017-05-02 14:47:28]	SQL :	SELECT balance FROM sms_bal  where bid='1'
[2017-05-02 14:47:28]	SQL :	SELECT balance FROM call_bal where bid='1'
[2017-05-02 14:47:28]	SQL :	SELECT DISTINCT(e.eid),e.empname,eb.start_time FROM 1_employee e
		                       LEFT JOIN 1_emp_break eb ON e.eid = eb.eid
		                       LEFT JOIN 1_groups d ON e.eid = d.eid
		                       WHERE eb.end_time='0000-00-00' AND e.selfdisable=1  GROUP BY d.gid,e.eid
[2017-05-02 14:47:28]	SQL :	SELECT COALESCE(COUNT(callid), 0) AS day 
							FROM 1_callhistory h 
							LEFT JOIN 1_groups d ON d.gid = h.gid 
							WHERE 1 AND (DATE(h.`starttime`) = DATE(NOW()))
[2017-05-02 14:47:28]	SQL :	SELECT COALESCE(COUNT(callid), 0) AS day 
							FROM 1_callhistory h 
							LEFT JOIN 1_groups d ON d.gid = h.gid 
							WHERE 1  AND (DATE(h.`starttime`)  > DATE(DATE_SUB(NOW(), INTERVAL 1 WEEK)))
[2017-05-02 14:47:28]	SQL :	SELECT COALESCE(COUNT(callid), 0) AS day 
							FROM 1_callhistory h 
							LEFT JOIN 1_groups d ON d.gid = h.gid 
							WHERE 1  AND (MONTH(h.`starttime` ) = MONTH(NOW()))
[2017-05-02 14:47:28]	SQL :	SELECT COALESCE(COUNT(pbxid), 0) AS day 
							FROM 1_pbxreport h 
							WHERE 1 AND (DATE(h.`starttime`) = DATE(NOW()))
[2017-05-02 14:47:28]	SQL :	SELECT COALESCE(COUNT(pbxid), 0) AS day 
							FROM 1_pbxreport h 
							WHERE 1  AND (DATE(h.`starttime`)  > DATE(DATE_SUB(NOW(), INTERVAL 1 WEEK)))
[2017-05-02 14:47:28]	SQL :	SELECT COALESCE(COUNT(pbxid), 0) AS day 
							FROM 1_pbxreport h 
							WHERE 1  AND (MONTH(h.`starttime` ) = MONTH(NOW()))
[2017-05-02 14:47:28]	SQL :	SELECT COALESCE(COUNT(hid), 0) AS day 
							   FROM 1_ivrshistory h 
						       WHERE 1 AND (DATE(h.`datetime`) = DATE(NOW()))
[2017-05-02 14:47:28]	SQL :	SELECT COALESCE(COUNT(hid), 0) AS day 
							   FROM 1_ivrshistory h 
						       WHERE 1  AND (DATE(h.`datetime`)  > DATE(DATE_SUB(NOW(), INTERVAL 1 WEEK)))
[2017-05-02 14:47:28]	SQL :	SELECT COALESCE(COUNT(hid), 0) AS day 
							   FROM 1_ivrshistory h 
						       WHERE 1  AND (MONTH(h.`datetime` ) = MONTH(NOW()))
[2017-05-02 14:47:28]	SQL :	SELECT COALESCE(COUNT(leadid), 0) AS day 
							FROM 1_leads a 
							LEFT JOIN 1_leads_groups d ON d.gid = a.gid 
							WHERE (DATE(a.`createdon`) = DATE(NOW()))
[2017-05-02 14:47:28]	SQL :	SELECT COALESCE(COUNT(leadid), 0) AS day 
							FROM 1_leads a 
							LEFT JOIN 1_leads_groups d ON d.gid = a.gid 
							WHERE (DATE(a.`createdon`) = DATE(NOW()))
[2017-05-02 14:47:28]	SQL :	SELECT COALESCE(COUNT(leadid), 0) AS day 
							FROM 1_leads a 
							LEFT JOIN 1_leads_groups d ON d.gid = a.gid 
							WHERE (DATE(a.`createdon`) = DATE(NOW()))
[2017-05-02 14:47:28]	SQL :	SELECT COALESCE(COUNT(tktid), 0) AS day 
							FROM 1_support_tickets a 
							LEFT JOIN 1_support_groups d ON d.gid = a.gid 
							WHERE (DATE(a.`createdon`) = DATE(NOW()))
[2017-05-02 14:47:28]	SQL :	SELECT COALESCE(COUNT(tktid), 0) AS day 
							FROM 1_support_tickets a 
							LEFT JOIN 1_support_groups d ON d.gid = a.gid 
							WHERE (DATE(a.`createdon`) = DATE(NOW()))
[2017-05-02 14:47:28]	SQL :	SELECT COALESCE(COUNT(tktid), 0) AS day 
							FROM 1_support_tickets a 
							LEFT JOIN 1_support_groups d ON d.gid = a.gid 
							WHERE (DATE(a.`createdon`) = DATE(NOW()))
[2017-05-02 14:47:28]	SQL :	SELECT COALESCE(COUNT(callid), 0) AS day 
							FROM 1_outboundcalls h 
							WHERE (DATE(h.`starttime`) = DATE(NOW()))
[2017-05-02 14:47:28]	SQL :	SELECT COALESCE(COUNT(callid), 0) AS day 
							FROM 1_outboundcalls h 
							WHERE (DATE(h.`starttime`) = DATE(NOW()))
[2017-05-02 14:47:28]	SQL :	SELECT COALESCE(COUNT(callid), 0) AS day 
							FROM 1_outboundcalls h 
							WHERE (DATE(h.`starttime`) = DATE(NOW()))
[2017-05-02 14:47:28]	SQL :	SELECT COALESCE(COUNT(callid), 0) AS day 
							FROM 1_mtracker h 
							WHERE (DATE(h.`starttime`) = DATE(NOW()))
[2017-05-02 14:47:28]	SQL :	SELECT COALESCE(COUNT(callid), 0) AS day 
							FROM 1_mtracker h 
							WHERE (DATE(h.`starttime`) = DATE(NOW()))
[2017-05-02 14:47:28]	SQL :	SELECT COALESCE(COUNT(callid), 0) AS day 
							FROM 1_mtracker h 
							WHERE (DATE(h.`starttime`) = DATE(NOW()))
[2017-05-02 14:49:04]	DEBUG :	Config Class Initialized
[2017-05-02 14:49:04]	DEBUG :	Hooks Class Initialized
[2017-05-02 14:49:04]	DEBUG :	URI Class Initialized
[2017-05-02 14:49:04]	DEBUG :	Router Class Initialized
[2017-05-02 14:49:04]	DEBUG :	Output Class Initialized
[2017-05-02 14:49:04]	DEBUG :	Input Class Initialized
[2017-05-02 14:49:04]	DEBUG :	Global POST and COOKIE data sanitized
[2017-05-02 14:49:04]	DEBUG :	Language Class Initialized
[2017-05-02 14:49:04]	DEBUG :	Loader Class Initialized
[2017-05-02 14:49:04]	DEBUG :	Helper loaded: url_helper
[2017-05-02 14:49:04]	DEBUG :	Helper loaded: form_helper
[2017-05-02 14:49:04]	DEBUG :	Helper loaded: html_helper
[2017-05-02 14:49:04]	DEBUG :	Helper loaded: email_helper
[2017-05-02 14:49:04]	DEBUG :	Helper loaded: ckeditor_helper
[2017-05-02 14:49:04]	DEBUG :	Helper loaded: mcube_helper
[2017-05-02 14:49:04]	DEBUG :	Database Driver Class Initialized
[2017-05-02 14:49:04]	ERROR :	Severity: 8192  --> mysql_pconnect(): The mysql extension is deprecated and will be removed in the future: use mysqli or PDO instead /var/www/html/mcnew/system/database/drivers/mysql/mysql_driver.php 88
[2017-05-02 14:49:04]	DEBUG :	Session Class Initialized
[2017-05-02 14:49:04]	DEBUG :	Helper loaded: string_helper
[2017-05-02 14:49:04]	DEBUG :	Encrypt Class Initialized
[2017-05-02 14:49:04]	DEBUG :	A session cookie was not found.
[2017-05-02 14:49:04]	SQL :	INSERT INTO `call_sessions` (`session_id`, `ip_address`, `user_agent`, `last_activity`) VALUES ('b62ac86f522cf45bc7a51af8d45fc4b0', '192.168.1.106', 'Dalvik/2.1.0 (Linux; U; Android 6.0; Panasonic T44', 1493716744)
[2017-05-02 14:49:05]	DEBUG :	Session routines successfully run
[2017-05-02 14:49:05]	DEBUG :	Table Class Initialized
[2017-05-02 14:49:05]	DEBUG :	Pagination Class Initialized
[2017-05-02 14:49:05]	DEBUG :	Config file loaded: config/paypallib_config.php
[2017-05-02 14:49:05]	DEBUG :	Form Validation Class Initialized
[2017-05-02 14:49:05]	DEBUG :	Email Class Initialized
[2017-05-02 14:49:05]	DEBUG :	Language file loaded: language/english/calendar_lang.php
[2017-05-02 14:49:05]	DEBUG :	Calendar Class Initialized
[2017-05-02 14:49:05]	DEBUG :	Controller Class Initialized
[2017-05-02 14:49:05]	DEBUG :	Model Class Initialized
[2017-05-02 14:49:05]	DEBUG :	Model Class Initialized
[2017-05-02 14:49:05]	DEBUG :	Model Class Initialized
[2017-05-02 14:49:05]	DEBUG :	Model Class Initialized
[2017-05-02 14:49:05]	DEBUG :	Model Class Initialized
[2017-05-02 14:49:05]	DEBUG :	Model Class Initialized
[2017-05-02 14:49:05]	DEBUG :	Model Class Initialized
[2017-05-02 14:49:05]	DEBUG :	Model Class Initialized
[2017-05-02 14:49:05]	DEBUG :	Model Class Initialized
[2017-05-02 14:49:05]	DEBUG :	Model Class Initialized
[2017-05-02 14:49:05]	DEBUG :	Model Class Initialized
[2017-05-02 14:49:05]	DEBUG :	Model Class Initialized
[2017-05-02 14:49:05]	DEBUG :	Model Class Initialized
[2017-05-02 14:49:05]	DEBUG :	Model Class Initialized
[2017-05-02 14:49:05]	DEBUG :	Plugin loaded: to_pdf_pi
[2017-05-02 14:49:05]	DEBUG :	Model Class Initialized
[2017-05-02 14:49:05]	DEBUG :	Language file loaded: language/english/form_validation_lang.php
[2017-05-02 14:49:05]	SQL :	SELECT uid,bid,eid FROM `user` WHERE authkey='1.1.d886b8e8a0615'
[2017-05-02 14:49:05]	DEBUG :	Database Driver Class Initialized
[2017-05-02 14:49:05]	SQL :	SELECT roleid FROM 1_employee
							WHERE eid='1'
							AND bid='1'
[2017-05-02 14:49:05]	DEBUG :	Database Driver Class Initialized
[2017-05-02 14:49:05]	SQL :	SELECT * FROM 1_user_role
							WHERE roleid='1'
							AND bid='1'
[2017-05-02 14:49:05]	SQL :	SELECT m.modid,m.modname,m.moddesc,
							COALESCE(o.opt_add,0) as opt_add,
							COALESCE(o.opt_view,0) as opt_view,
							COALESCE(o.opt_download,0) as opt_download,
							COALESCE(opt_delete,0) as opt_delete 
							FROM module m
							LEFT JOIN (SELECT * FROM 1_role_mod_opt
							WHERE roleid='1' 
							AND bid='1') as o
							ON m.modid=o.modid where m.status=1
[2017-05-02 14:49:05]	SQL :	SELECT a.*,f.fieldname FROM 1_role_access a
								LEFT JOIN systemfields f on a.fieldid=f.fieldid
								WHERE a.roleid='1'
								AND a.bid='1'
								AND a.fieldtype='s'
[2017-05-02 14:49:05]	SQL :	SELECT * FROM 1_role_access
								WHERE roleid='1'
								AND bid='1'
							AND fieldtype='c'
[2017-05-02 14:49:05]	SQL :	SELECT pri.landingnumber,pri.used,pri.climit,
								if(pri.status=0,'Not in use',
								if(pri.type='0','Calltrack',
								if(pri.type='1','IVRS',
								if(pri.type='2','PBX','Not Assign')))) as type,
								pri.associateid,
								if(pri.status=0,'None',
								if(pri.type='0',g.groupname,
								if(pri.type='1',i.title,
								if(pri.type='2',pbx.title,'None')))) as title,
								if(pri.status=0,'None',
								if(pri.type='0',ch.lastcall,
								if(pri.type='1',ih.lastcall,
								if(pri.type='2',ph.lastcall,'None')))) as lastcall
								FROM prinumbers pri
								LEFT JOIN 1_groups g on (g.prinumber=pri.number AND g.gid=pri.associateid AND g.status=1)
								LEFT JOIN 1_ivrs i on (i.prinumber=pri.number AND i.ivrsid=pri.associateid AND i.status=1)
								LEFT JOIN 1_pbx pbx on (pbx.prinumber=pri.number AND pbx.pbxid=pri.associateid AND pbx.status=1)
								LEFT JOIN (SELECT g.gid,max(h.starttime) as lastcall FROM 1_groups g LEFT JOIN 1_callhistory h on g.gid=h.gid GROUP BY g.gid) ch on g.gid=ch.gid
								LEFT JOIN (SELECT i.ivrsid,max(h.datetime) as lastcall FROM 1_ivrs i LEFT JOIN 1_ivrshistory h on i.ivrsid=h.ivrsid GROUP BY i.ivrsid) ih on i.ivrsid=ih.ivrsid
								LEFT JOIN (SELECT p.pbxid,max(h.starttime) as lastcall FROM 1_pbx p LEFT JOIN 1_pbxreport h on p.pbxid=h.pbxid GROUP BY p.pbxid) ph on pbx.pbxid=ph.pbxid
								WHERE pri.bid=1
[2017-05-02 14:49:05]	SQL :	SELECT balance FROM sms_bal  where bid='1'
[2017-05-02 14:49:05]	SQL :	SELECT balance FROM call_bal where bid='1'
[2017-05-02 14:49:05]	SQL :	SELECT DISTINCT(e.eid),e.empname,eb.start_time FROM 1_employee e
		                       LEFT JOIN 1_emp_break eb ON e.eid = eb.eid
		                       LEFT JOIN 1_groups d ON e.eid = d.eid
		                       WHERE eb.end_time='0000-00-00' AND e.selfdisable=1  GROUP BY d.gid,e.eid
[2017-05-02 14:49:05]	SQL :	SELECT COALESCE(COUNT(callid), 0) AS day 
							FROM 1_callhistory h 
							LEFT JOIN 1_groups d ON d.gid = h.gid 
							WHERE 1 AND (DATE(h.`starttime`) = DATE(NOW()))
[2017-05-02 14:49:05]	SQL :	SELECT COALESCE(COUNT(callid), 0) AS day 
							FROM 1_callhistory h 
							LEFT JOIN 1_groups d ON d.gid = h.gid 
							WHERE 1  AND (DATE(h.`starttime`)  > DATE(DATE_SUB(NOW(), INTERVAL 1 WEEK)))
[2017-05-02 14:49:05]	SQL :	SELECT COALESCE(COUNT(callid), 0) AS day 
							FROM 1_callhistory h 
							LEFT JOIN 1_groups d ON d.gid = h.gid 
							WHERE 1  AND (MONTH(h.`starttime` ) = MONTH(NOW()))
[2017-05-02 14:49:05]	SQL :	SELECT COALESCE(COUNT(pbxid), 0) AS day 
							FROM 1_pbxreport h 
							WHERE 1 AND (DATE(h.`starttime`) = DATE(NOW()))
[2017-05-02 14:49:05]	SQL :	SELECT COALESCE(COUNT(pbxid), 0) AS day 
							FROM 1_pbxreport h 
							WHERE 1  AND (DATE(h.`starttime`)  > DATE(DATE_SUB(NOW(), INTERVAL 1 WEEK)))
[2017-05-02 14:49:05]	SQL :	SELECT COALESCE(COUNT(pbxid), 0) AS day 
							FROM 1_pbxreport h 
							WHERE 1  AND (MONTH(h.`starttime` ) = MONTH(NOW()))
[2017-05-02 14:49:05]	SQL :	SELECT COALESCE(COUNT(hid), 0) AS day 
							   FROM 1_ivrshistory h 
						       WHERE 1 AND (DATE(h.`datetime`) = DATE(NOW()))
[2017-05-02 14:49:05]	SQL :	SELECT COALESCE(COUNT(hid), 0) AS day 
							   FROM 1_ivrshistory h 
						       WHERE 1  AND (DATE(h.`datetime`)  > DATE(DATE_SUB(NOW(), INTERVAL 1 WEEK)))
[2017-05-02 14:49:05]	SQL :	SELECT COALESCE(COUNT(hid), 0) AS day 
							   FROM 1_ivrshistory h 
						       WHERE 1  AND (MONTH(h.`datetime` ) = MONTH(NOW()))
[2017-05-02 14:49:05]	SQL :	SELECT COALESCE(COUNT(leadid), 0) AS day 
							FROM 1_leads a 
							LEFT JOIN 1_leads_groups d ON d.gid = a.gid 
							WHERE (DATE(a.`createdon`) = DATE(NOW()))
[2017-05-02 14:49:05]	SQL :	SELECT COALESCE(COUNT(leadid), 0) AS day 
							FROM 1_leads a 
							LEFT JOIN 1_leads_groups d ON d.gid = a.gid 
							WHERE (DATE(a.`createdon`) = DATE(NOW()))
[2017-05-02 14:49:05]	SQL :	SELECT COALESCE(COUNT(leadid), 0) AS day 
							FROM 1_leads a 
							LEFT JOIN 1_leads_groups d ON d.gid = a.gid 
							WHERE (DATE(a.`createdon`) = DATE(NOW()))
[2017-05-02 14:49:05]	SQL :	SELECT COALESCE(COUNT(tktid), 0) AS day 
							FROM 1_support_tickets a 
							LEFT JOIN 1_support_groups d ON d.gid = a.gid 
							WHERE (DATE(a.`createdon`) = DATE(NOW()))
[2017-05-02 14:49:05]	SQL :	SELECT COALESCE(COUNT(tktid), 0) AS day 
							FROM 1_support_tickets a 
							LEFT JOIN 1_support_groups d ON d.gid = a.gid 
							WHERE (DATE(a.`createdon`) = DATE(NOW()))
[2017-05-02 14:49:05]	SQL :	SELECT COALESCE(COUNT(tktid), 0) AS day 
							FROM 1_support_tickets a 
							LEFT JOIN 1_support_groups d ON d.gid = a.gid 
							WHERE (DATE(a.`createdon`) = DATE(NOW()))
[2017-05-02 14:49:05]	SQL :	SELECT COALESCE(COUNT(callid), 0) AS day 
							FROM 1_outboundcalls h 
							WHERE (DATE(h.`starttime`) = DATE(NOW()))
[2017-05-02 14:49:05]	SQL :	SELECT COALESCE(COUNT(callid), 0) AS day 
							FROM 1_outboundcalls h 
							WHERE (DATE(h.`starttime`) = DATE(NOW()))
[2017-05-02 14:49:05]	SQL :	SELECT COALESCE(COUNT(callid), 0) AS day 
							FROM 1_outboundcalls h 
							WHERE (DATE(h.`starttime`) = DATE(NOW()))
[2017-05-02 14:49:05]	SQL :	SELECT COALESCE(COUNT(callid), 0) AS day 
							FROM 1_mtracker h 
							WHERE (DATE(h.`starttime`) = DATE(NOW()))
[2017-05-02 14:49:05]	SQL :	SELECT COALESCE(COUNT(callid), 0) AS day 
							FROM 1_mtracker h 
							WHERE (DATE(h.`starttime`) = DATE(NOW()))
[2017-05-02 14:49:05]	SQL :	SELECT COALESCE(COUNT(callid), 0) AS day 
							FROM 1_mtracker h 
							WHERE (DATE(h.`starttime`) = DATE(NOW()))
[2017-05-02 14:49:09]	DEBUG :	Config Class Initialized
[2017-05-02 14:49:09]	DEBUG :	Hooks Class Initialized
[2017-05-02 14:49:09]	DEBUG :	URI Class Initialized
[2017-05-02 14:49:09]	DEBUG :	Router Class Initialized
[2017-05-02 14:49:09]	DEBUG :	Output Class Initialized
[2017-05-02 14:49:09]	DEBUG :	Input Class Initialized
[2017-05-02 14:49:09]	DEBUG :	Global POST and COOKIE data sanitized
[2017-05-02 14:49:09]	DEBUG :	Language Class Initialized
[2017-05-02 14:49:09]	DEBUG :	Loader Class Initialized
[2017-05-02 14:49:09]	DEBUG :	Helper loaded: url_helper
[2017-05-02 14:49:09]	DEBUG :	Helper loaded: form_helper
[2017-05-02 14:49:09]	DEBUG :	Helper loaded: html_helper
[2017-05-02 14:49:09]	DEBUG :	Helper loaded: email_helper
[2017-05-02 14:49:09]	DEBUG :	Helper loaded: ckeditor_helper
[2017-05-02 14:49:09]	DEBUG :	Helper loaded: mcube_helper
[2017-05-02 14:49:09]	DEBUG :	Database Driver Class Initialized
[2017-05-02 14:49:09]	ERROR :	Severity: 8192  --> mysql_pconnect(): The mysql extension is deprecated and will be removed in the future: use mysqli or PDO instead /var/www/html/mcnew/system/database/drivers/mysql/mysql_driver.php 88
[2017-05-02 14:49:09]	DEBUG :	Session Class Initialized
[2017-05-02 14:49:09]	DEBUG :	Helper loaded: string_helper
[2017-05-02 14:49:09]	DEBUG :	Encrypt Class Initialized
[2017-05-02 14:49:09]	DEBUG :	A session cookie was not found.
[2017-05-02 14:49:09]	SQL :	INSERT INTO `call_sessions` (`session_id`, `ip_address`, `user_agent`, `last_activity`) VALUES ('c6c9c01d5e1b8d15abf5157604937ffc', '192.168.1.106', 'Dalvik/2.1.0 (Linux; U; Android 6.0; Panasonic T44', 1493716749)
[2017-05-02 14:49:09]	DEBUG :	Session routines successfully run
[2017-05-02 14:49:09]	DEBUG :	Table Class Initialized
[2017-05-02 14:49:09]	DEBUG :	Pagination Class Initialized
[2017-05-02 14:49:09]	DEBUG :	Config file loaded: config/paypallib_config.php
[2017-05-02 14:49:09]	DEBUG :	Form Validation Class Initialized
[2017-05-02 14:49:09]	DEBUG :	Email Class Initialized
[2017-05-02 14:49:09]	DEBUG :	Language file loaded: language/english/calendar_lang.php
[2017-05-02 14:49:09]	DEBUG :	Calendar Class Initialized
[2017-05-02 14:49:09]	DEBUG :	Controller Class Initialized
[2017-05-02 14:49:09]	DEBUG :	Model Class Initialized
[2017-05-02 14:49:09]	DEBUG :	Model Class Initialized
[2017-05-02 14:49:09]	DEBUG :	Model Class Initialized
[2017-05-02 14:49:09]	DEBUG :	Model Class Initialized
[2017-05-02 14:49:09]	DEBUG :	Model Class Initialized
[2017-05-02 14:49:09]	DEBUG :	Model Class Initialized
[2017-05-02 14:49:09]	DEBUG :	Model Class Initialized
[2017-05-02 14:49:09]	DEBUG :	Model Class Initialized
[2017-05-02 14:49:09]	DEBUG :	Model Class Initialized
[2017-05-02 14:49:09]	DEBUG :	Model Class Initialized
[2017-05-02 14:49:09]	DEBUG :	Model Class Initialized
[2017-05-02 14:49:09]	DEBUG :	Model Class Initialized
[2017-05-02 14:49:09]	DEBUG :	Model Class Initialized
[2017-05-02 14:49:09]	DEBUG :	Model Class Initialized
[2017-05-02 14:49:09]	DEBUG :	Plugin loaded: to_pdf_pi
[2017-05-02 14:49:09]	DEBUG :	Model Class Initialized
[2017-05-02 14:49:09]	DEBUG :	Language file loaded: language/english/form_validation_lang.php
[2017-05-02 14:49:09]	SQL :	SELECT uid,bid,eid FROM `user` WHERE authkey='1.1.d886b8e8a0615'
[2017-05-02 14:49:09]	DEBUG :	Database Driver Class Initialized
[2017-05-02 14:49:09]	SQL :	SELECT roleid FROM 1_employee
							WHERE eid='1'
							AND bid='1'
[2017-05-02 14:49:09]	DEBUG :	Database Driver Class Initialized
[2017-05-02 14:49:09]	SQL :	SELECT * FROM 1_user_role
							WHERE roleid='1'
							AND bid='1'
[2017-05-02 14:49:09]	SQL :	SELECT m.modid,m.modname,m.moddesc,
							COALESCE(o.opt_add,0) as opt_add,
							COALESCE(o.opt_view,0) as opt_view,
							COALESCE(o.opt_download,0) as opt_download,
							COALESCE(opt_delete,0) as opt_delete 
							FROM module m
							LEFT JOIN (SELECT * FROM 1_role_mod_opt
							WHERE roleid='1' 
							AND bid='1') as o
							ON m.modid=o.modid where m.status=1
[2017-05-02 14:49:09]	SQL :	SELECT a.*,f.fieldname FROM 1_role_access a
								LEFT JOIN systemfields f on a.fieldid=f.fieldid
								WHERE a.roleid='1'
								AND a.bid='1'
								AND a.fieldtype='s'
[2017-05-02 14:49:09]	SQL :	SELECT * FROM 1_role_access
								WHERE roleid='1'
								AND bid='1'
							AND fieldtype='c'
[2017-05-02 14:49:09]	SQL :	SELECT pri.landingnumber,pri.used,pri.climit,
								if(pri.status=0,'Not in use',
								if(pri.type='0','Calltrack',
								if(pri.type='1','IVRS',
								if(pri.type='2','PBX','Not Assign')))) as type,
								pri.associateid,
								if(pri.status=0,'None',
								if(pri.type='0',g.groupname,
								if(pri.type='1',i.title,
								if(pri.type='2',pbx.title,'None')))) as title,
								if(pri.status=0,'None',
								if(pri.type='0',ch.lastcall,
								if(pri.type='1',ih.lastcall,
								if(pri.type='2',ph.lastcall,'None')))) as lastcall
								FROM prinumbers pri
								LEFT JOIN 1_groups g on (g.prinumber=pri.number AND g.gid=pri.associateid AND g.status=1)
								LEFT JOIN 1_ivrs i on (i.prinumber=pri.number AND i.ivrsid=pri.associateid AND i.status=1)
								LEFT JOIN 1_pbx pbx on (pbx.prinumber=pri.number AND pbx.pbxid=pri.associateid AND pbx.status=1)
								LEFT JOIN (SELECT g.gid,max(h.starttime) as lastcall FROM 1_groups g LEFT JOIN 1_callhistory h on g.gid=h.gid GROUP BY g.gid) ch on g.gid=ch.gid
								LEFT JOIN (SELECT i.ivrsid,max(h.datetime) as lastcall FROM 1_ivrs i LEFT JOIN 1_ivrshistory h on i.ivrsid=h.ivrsid GROUP BY i.ivrsid) ih on i.ivrsid=ih.ivrsid
								LEFT JOIN (SELECT p.pbxid,max(h.starttime) as lastcall FROM 1_pbx p LEFT JOIN 1_pbxreport h on p.pbxid=h.pbxid GROUP BY p.pbxid) ph on pbx.pbxid=ph.pbxid
								WHERE pri.bid=1
[2017-05-02 14:49:09]	SQL :	SELECT balance FROM sms_bal  where bid='1'
[2017-05-02 14:49:09]	SQL :	SELECT balance FROM call_bal where bid='1'
[2017-05-02 14:49:09]	SQL :	SELECT DISTINCT(e.eid),e.empname,eb.start_time FROM 1_employee e
		                       LEFT JOIN 1_emp_break eb ON e.eid = eb.eid
		                       LEFT JOIN 1_groups d ON e.eid = d.eid
		                       WHERE eb.end_time='0000-00-00' AND e.selfdisable=1  GROUP BY d.gid,e.eid
[2017-05-02 14:49:09]	SQL :	SELECT COALESCE(COUNT(callid), 0) AS day 
							FROM 1_callhistory h 
							LEFT JOIN 1_groups d ON d.gid = h.gid 
							WHERE 1 AND (DATE(h.`starttime`) = DATE(NOW()))
[2017-05-02 14:49:09]	SQL :	SELECT COALESCE(COUNT(callid), 0) AS day 
							FROM 1_callhistory h 
							LEFT JOIN 1_groups d ON d.gid = h.gid 
							WHERE 1  AND (DATE(h.`starttime`)  > DATE(DATE_SUB(NOW(), INTERVAL 1 WEEK)))
[2017-05-02 14:49:09]	SQL :	SELECT COALESCE(COUNT(callid), 0) AS day 
							FROM 1_callhistory h 
							LEFT JOIN 1_groups d ON d.gid = h.gid 
							WHERE 1  AND (MONTH(h.`starttime` ) = MONTH(NOW()))
[2017-05-02 14:49:09]	SQL :	SELECT COALESCE(COUNT(pbxid), 0) AS day 
							FROM 1_pbxreport h 
							WHERE 1 AND (DATE(h.`starttime`) = DATE(NOW()))
[2017-05-02 14:49:09]	SQL :	SELECT COALESCE(COUNT(pbxid), 0) AS day 
							FROM 1_pbxreport h 
							WHERE 1  AND (DATE(h.`starttime`)  > DATE(DATE_SUB(NOW(), INTERVAL 1 WEEK)))
[2017-05-02 14:49:09]	SQL :	SELECT COALESCE(COUNT(pbxid), 0) AS day 
							FROM 1_pbxreport h 
							WHERE 1  AND (MONTH(h.`starttime` ) = MONTH(NOW()))
[2017-05-02 14:49:09]	SQL :	SELECT COALESCE(COUNT(hid), 0) AS day 
							   FROM 1_ivrshistory h 
						       WHERE 1 AND (DATE(h.`datetime`) = DATE(NOW()))
[2017-05-02 14:49:09]	SQL :	SELECT COALESCE(COUNT(hid), 0) AS day 
							   FROM 1_ivrshistory h 
						       WHERE 1  AND (DATE(h.`datetime`)  > DATE(DATE_SUB(NOW(), INTERVAL 1 WEEK)))
[2017-05-02 14:49:09]	SQL :	SELECT COALESCE(COUNT(hid), 0) AS day 
							   FROM 1_ivrshistory h 
						       WHERE 1  AND (MONTH(h.`datetime` ) = MONTH(NOW()))
[2017-05-02 14:49:09]	SQL :	SELECT COALESCE(COUNT(leadid), 0) AS day 
							FROM 1_leads a 
							LEFT JOIN 1_leads_groups d ON d.gid = a.gid 
							WHERE (DATE(a.`createdon`) = DATE(NOW()))
[2017-05-02 14:49:09]	SQL :	SELECT COALESCE(COUNT(leadid), 0) AS day 
							FROM 1_leads a 
							LEFT JOIN 1_leads_groups d ON d.gid = a.gid 
							WHERE (DATE(a.`createdon`) = DATE(NOW()))
[2017-05-02 14:49:09]	SQL :	SELECT COALESCE(COUNT(leadid), 0) AS day 
							FROM 1_leads a 
							LEFT JOIN 1_leads_groups d ON d.gid = a.gid 
							WHERE (DATE(a.`createdon`) = DATE(NOW()))
[2017-05-02 14:49:09]	SQL :	SELECT COALESCE(COUNT(tktid), 0) AS day 
							FROM 1_support_tickets a 
							LEFT JOIN 1_support_groups d ON d.gid = a.gid 
							WHERE (DATE(a.`createdon`) = DATE(NOW()))
[2017-05-02 14:49:09]	SQL :	SELECT COALESCE(COUNT(tktid), 0) AS day 
							FROM 1_support_tickets a 
							LEFT JOIN 1_support_groups d ON d.gid = a.gid 
							WHERE (DATE(a.`createdon`) = DATE(NOW()))
[2017-05-02 14:49:09]	SQL :	SELECT COALESCE(COUNT(tktid), 0) AS day 
							FROM 1_support_tickets a 
							LEFT JOIN 1_support_groups d ON d.gid = a.gid 
							WHERE (DATE(a.`createdon`) = DATE(NOW()))
[2017-05-02 14:49:09]	SQL :	SELECT COALESCE(COUNT(callid), 0) AS day 
							FROM 1_outboundcalls h 
							WHERE (DATE(h.`starttime`) = DATE(NOW()))
[2017-05-02 14:49:09]	SQL :	SELECT COALESCE(COUNT(callid), 0) AS day 
							FROM 1_outboundcalls h 
							WHERE (DATE(h.`starttime`) = DATE(NOW()))
[2017-05-02 14:49:09]	SQL :	SELECT COALESCE(COUNT(callid), 0) AS day 
							FROM 1_outboundcalls h 
							WHERE (DATE(h.`starttime`) = DATE(NOW()))
[2017-05-02 14:49:09]	SQL :	SELECT COALESCE(COUNT(callid), 0) AS day 
							FROM 1_mtracker h 
							WHERE (DATE(h.`starttime`) = DATE(NOW()))
[2017-05-02 14:49:09]	SQL :	SELECT COALESCE(COUNT(callid), 0) AS day 
							FROM 1_mtracker h 
							WHERE (DATE(h.`starttime`) = DATE(NOW()))
[2017-05-02 14:49:09]	SQL :	SELECT COALESCE(COUNT(callid), 0) AS day 
							FROM 1_mtracker h 
							WHERE (DATE(h.`starttime`) = DATE(NOW()))
[2017-05-02 15:48:47]	DEBUG :	Config Class Initialized
[2017-05-02 15:48:47]	DEBUG :	Hooks Class Initialized
[2017-05-02 15:48:47]	DEBUG :	URI Class Initialized
[2017-05-02 15:48:47]	DEBUG :	Router Class Initialized
[2017-05-02 15:48:47]	DEBUG :	Output Class Initialized
[2017-05-02 15:48:47]	DEBUG :	Input Class Initialized
[2017-05-02 15:48:47]	DEBUG :	Global POST and COOKIE data sanitized
[2017-05-02 15:48:47]	DEBUG :	Language Class Initialized
[2017-05-02 15:48:47]	DEBUG :	Loader Class Initialized
[2017-05-02 15:48:47]	DEBUG :	Helper loaded: url_helper
[2017-05-02 15:48:47]	DEBUG :	Helper loaded: form_helper
[2017-05-02 15:48:47]	DEBUG :	Helper loaded: html_helper
[2017-05-02 15:48:47]	DEBUG :	Helper loaded: email_helper
[2017-05-02 15:48:47]	DEBUG :	Helper loaded: ckeditor_helper
[2017-05-02 15:48:47]	DEBUG :	Helper loaded: mcube_helper
[2017-05-02 15:48:47]	DEBUG :	Database Driver Class Initialized
[2017-05-02 15:48:47]	ERROR :	Severity: 8192  --> mysql_pconnect(): The mysql extension is deprecated and will be removed in the future: use mysqli or PDO instead /var/www/html/mcnew/system/database/drivers/mysql/mysql_driver.php 88
[2017-05-02 15:48:47]	DEBUG :	Session Class Initialized
[2017-05-02 15:48:47]	DEBUG :	Helper loaded: string_helper
[2017-05-02 15:48:47]	DEBUG :	Encrypt Class Initialized
[2017-05-02 15:48:47]	DEBUG :	A session cookie was not found.
[2017-05-02 15:48:47]	SQL :	INSERT INTO `call_sessions` (`session_id`, `ip_address`, `user_agent`, `last_activity`) VALUES ('3170d7f511bbf8350c99dac9d187ee7f', '192.168.1.114', 'Dalvik/2.1.0 (Linux; U; Android 6.0; Panasonic T44', 1493720327)
[2017-05-02 15:48:48]	DEBUG :	Session routines successfully run
[2017-05-02 15:48:48]	DEBUG :	Table Class Initialized
[2017-05-02 15:48:48]	DEBUG :	Pagination Class Initialized
[2017-05-02 15:48:48]	DEBUG :	Config file loaded: config/paypallib_config.php
[2017-05-02 15:48:48]	DEBUG :	Form Validation Class Initialized
[2017-05-02 15:48:48]	DEBUG :	Email Class Initialized
[2017-05-02 15:48:48]	DEBUG :	Language file loaded: language/english/calendar_lang.php
[2017-05-02 15:48:48]	DEBUG :	Calendar Class Initialized
[2017-05-02 15:48:48]	DEBUG :	Controller Class Initialized
[2017-05-02 15:48:48]	DEBUG :	Model Class Initialized
[2017-05-02 15:48:48]	DEBUG :	Model Class Initialized
[2017-05-02 15:48:48]	DEBUG :	Model Class Initialized
[2017-05-02 15:48:48]	DEBUG :	Model Class Initialized
[2017-05-02 15:48:48]	DEBUG :	Model Class Initialized
[2017-05-02 15:48:48]	DEBUG :	Model Class Initialized
[2017-05-02 15:48:48]	DEBUG :	Model Class Initialized
[2017-05-02 15:48:48]	DEBUG :	Model Class Initialized
[2017-05-02 15:48:48]	DEBUG :	Model Class Initialized
[2017-05-02 15:48:48]	DEBUG :	Model Class Initialized
[2017-05-02 15:48:48]	DEBUG :	Model Class Initialized
[2017-05-02 15:48:48]	DEBUG :	Model Class Initialized
[2017-05-02 15:48:48]	DEBUG :	Model Class Initialized
[2017-05-02 15:48:48]	DEBUG :	Model Class Initialized
[2017-05-02 15:48:48]	DEBUG :	Plugin loaded: to_pdf_pi
[2017-05-02 15:48:48]	DEBUG :	Model Class Initialized
[2017-05-02 15:48:48]	DEBUG :	Language file loaded: language/english/form_validation_lang.php
[2017-05-02 15:48:48]	SQL :	SELECT uid,bid,eid FROM `user` WHERE authkey='1.1.d886b8e8a0615'
[2017-05-02 15:48:48]	DEBUG :	Database Driver Class Initialized
[2017-05-02 15:48:48]	SQL :	SELECT roleid FROM 1_employee
							WHERE eid='1'
							AND bid='1'
[2017-05-02 15:48:48]	DEBUG :	Database Driver Class Initialized
[2017-05-02 15:48:48]	SQL :	SELECT * FROM 1_user_role
							WHERE roleid='1'
							AND bid='1'
[2017-05-02 15:48:48]	SQL :	SELECT m.modid,m.modname,m.moddesc,
							COALESCE(o.opt_add,0) as opt_add,
							COALESCE(o.opt_view,0) as opt_view,
							COALESCE(o.opt_download,0) as opt_download,
							COALESCE(opt_delete,0) as opt_delete 
							FROM module m
							LEFT JOIN (SELECT * FROM 1_role_mod_opt
							WHERE roleid='1' 
							AND bid='1') as o
							ON m.modid=o.modid where m.status=1
[2017-05-02 15:48:48]	SQL :	SELECT a.*,f.fieldname FROM 1_role_access a
								LEFT JOIN systemfields f on a.fieldid=f.fieldid
								WHERE a.roleid='1'
								AND a.bid='1'
								AND a.fieldtype='s'
[2017-05-02 15:48:48]	SQL :	SELECT * FROM 1_role_access
								WHERE roleid='1'
								AND bid='1'
							AND fieldtype='c'
[2017-05-02 15:48:48]	SQL :	SELECT pri.landingnumber,pri.used,pri.climit,
								if(pri.status=0,'Not in use',
								if(pri.type='0','Calltrack',
								if(pri.type='1','IVRS',
								if(pri.type='2','PBX','Not Assign')))) as type,
								pri.associateid,
								if(pri.status=0,'None',
								if(pri.type='0',g.groupname,
								if(pri.type='1',i.title,
								if(pri.type='2',pbx.title,'None')))) as title,
								if(pri.status=0,'None',
								if(pri.type='0',ch.lastcall,
								if(pri.type='1',ih.lastcall,
								if(pri.type='2',ph.lastcall,'None')))) as lastcall
								FROM prinumbers pri
								LEFT JOIN 1_groups g on (g.prinumber=pri.number AND g.gid=pri.associateid AND g.status=1)
								LEFT JOIN 1_ivrs i on (i.prinumber=pri.number AND i.ivrsid=pri.associateid AND i.status=1)
								LEFT JOIN 1_pbx pbx on (pbx.prinumber=pri.number AND pbx.pbxid=pri.associateid AND pbx.status=1)
								LEFT JOIN (SELECT g.gid,max(h.starttime) as lastcall FROM 1_groups g LEFT JOIN 1_callhistory h on g.gid=h.gid GROUP BY g.gid) ch on g.gid=ch.gid
								LEFT JOIN (SELECT i.ivrsid,max(h.datetime) as lastcall FROM 1_ivrs i LEFT JOIN 1_ivrshistory h on i.ivrsid=h.ivrsid GROUP BY i.ivrsid) ih on i.ivrsid=ih.ivrsid
								LEFT JOIN (SELECT p.pbxid,max(h.starttime) as lastcall FROM 1_pbx p LEFT JOIN 1_pbxreport h on p.pbxid=h.pbxid GROUP BY p.pbxid) ph on pbx.pbxid=ph.pbxid
								WHERE pri.bid=1
[2017-05-02 15:48:48]	SQL :	SELECT balance FROM sms_bal  where bid='1'
[2017-05-02 15:48:48]	SQL :	SELECT balance FROM call_bal where bid='1'
[2017-05-02 15:48:48]	SQL :	SELECT DISTINCT(e.eid),e.empname,eb.start_time FROM 1_employee e
		                       LEFT JOIN 1_emp_break eb ON e.eid = eb.eid
		                       LEFT JOIN 1_groups d ON e.eid = d.eid
		                       WHERE eb.end_time='0000-00-00' AND e.selfdisable=1  GROUP BY d.gid,e.eid
[2017-05-02 15:48:48]	SQL :	SELECT COALESCE(COUNT(callid), 0) AS day 
							FROM 1_callhistory h 
							LEFT JOIN 1_groups d ON d.gid = h.gid 
							WHERE 1 AND (DATE(h.`starttime`) = DATE(NOW()))
[2017-05-02 15:48:48]	SQL :	SELECT COALESCE(COUNT(callid), 0) AS day 
							FROM 1_callhistory h 
							LEFT JOIN 1_groups d ON d.gid = h.gid 
							WHERE 1  AND (DATE(h.`starttime`)  > DATE(DATE_SUB(NOW(), INTERVAL 1 WEEK)))
[2017-05-02 15:48:48]	SQL :	SELECT COALESCE(COUNT(callid), 0) AS day 
							FROM 1_callhistory h 
							LEFT JOIN 1_groups d ON d.gid = h.gid 
							WHERE 1  AND (MONTH(h.`starttime` ) = MONTH(NOW()))
[2017-05-02 15:48:48]	SQL :	SELECT COALESCE(COUNT(pbxid), 0) AS day 
							FROM 1_pbxreport h 
							WHERE 1 AND (DATE(h.`starttime`) = DATE(NOW()))
[2017-05-02 15:48:48]	SQL :	SELECT COALESCE(COUNT(pbxid), 0) AS day 
							FROM 1_pbxreport h 
							WHERE 1  AND (DATE(h.`starttime`)  > DATE(DATE_SUB(NOW(), INTERVAL 1 WEEK)))
[2017-05-02 15:48:48]	SQL :	SELECT COALESCE(COUNT(pbxid), 0) AS day 
							FROM 1_pbxreport h 
							WHERE 1  AND (MONTH(h.`starttime` ) = MONTH(NOW()))
[2017-05-02 15:48:48]	SQL :	SELECT COALESCE(COUNT(hid), 0) AS day 
							   FROM 1_ivrshistory h 
						       WHERE 1 AND (DATE(h.`datetime`) = DATE(NOW()))
[2017-05-02 15:48:48]	SQL :	SELECT COALESCE(COUNT(hid), 0) AS day 
							   FROM 1_ivrshistory h 
						       WHERE 1  AND (DATE(h.`datetime`)  > DATE(DATE_SUB(NOW(), INTERVAL 1 WEEK)))
[2017-05-02 15:48:48]	SQL :	SELECT COALESCE(COUNT(hid), 0) AS day 
							   FROM 1_ivrshistory h 
						       WHERE 1  AND (MONTH(h.`datetime` ) = MONTH(NOW()))
[2017-05-02 15:48:48]	SQL :	SELECT COALESCE(COUNT(leadid), 0) AS day 
							FROM 1_leads a 
							LEFT JOIN 1_leads_groups d ON d.gid = a.gid 
							WHERE (DATE(a.`createdon`) = DATE(NOW()))
[2017-05-02 15:48:48]	SQL :	SELECT COALESCE(COUNT(leadid), 0) AS day 
							FROM 1_leads a 
							LEFT JOIN 1_leads_groups d ON d.gid = a.gid 
							WHERE (DATE(a.`createdon`) = DATE(NOW()))
[2017-05-02 15:48:48]	SQL :	SELECT COALESCE(COUNT(leadid), 0) AS day 
							FROM 1_leads a 
							LEFT JOIN 1_leads_groups d ON d.gid = a.gid 
							WHERE (DATE(a.`createdon`) = DATE(NOW()))
[2017-05-02 15:48:48]	SQL :	SELECT COALESCE(COUNT(tktid), 0) AS day 
							FROM 1_support_tickets a 
							LEFT JOIN 1_support_groups d ON d.gid = a.gid 
							WHERE (DATE(a.`createdon`) = DATE(NOW()))
[2017-05-02 15:48:48]	SQL :	SELECT COALESCE(COUNT(tktid), 0) AS day 
							FROM 1_support_tickets a 
							LEFT JOIN 1_support_groups d ON d.gid = a.gid 
							WHERE (DATE(a.`createdon`) = DATE(NOW()))
[2017-05-02 15:48:48]	SQL :	SELECT COALESCE(COUNT(tktid), 0) AS day 
							FROM 1_support_tickets a 
							LEFT JOIN 1_support_groups d ON d.gid = a.gid 
							WHERE (DATE(a.`createdon`) = DATE(NOW()))
[2017-05-02 15:48:48]	SQL :	SELECT COALESCE(COUNT(callid), 0) AS day 
							FROM 1_outboundcalls h 
							WHERE (DATE(h.`starttime`) = DATE(NOW()))
[2017-05-02 15:48:48]	SQL :	SELECT COALESCE(COUNT(callid), 0) AS day 
							FROM 1_outboundcalls h 
							WHERE (DATE(h.`starttime`) = DATE(NOW()))
[2017-05-02 15:48:48]	SQL :	SELECT COALESCE(COUNT(callid), 0) AS day 
							FROM 1_outboundcalls h 
							WHERE (DATE(h.`starttime`) = DATE(NOW()))
[2017-05-02 15:48:48]	SQL :	SELECT COALESCE(COUNT(callid), 0) AS day 
							FROM 1_mtracker h 
							WHERE (DATE(h.`starttime`) = DATE(NOW()))
[2017-05-02 15:48:48]	SQL :	SELECT COALESCE(COUNT(callid), 0) AS day 
							FROM 1_mtracker h 
							WHERE (DATE(h.`starttime`) = DATE(NOW()))
[2017-05-02 15:48:48]	SQL :	SELECT COALESCE(COUNT(callid), 0) AS day 
							FROM 1_mtracker h 
							WHERE (DATE(h.`starttime`) = DATE(NOW()))
[2017-05-02 15:48:55]	DEBUG :	Config Class Initialized
[2017-05-02 15:48:55]	DEBUG :	Hooks Class Initialized
[2017-05-02 15:48:55]	DEBUG :	URI Class Initialized
[2017-05-02 15:48:55]	DEBUG :	Router Class Initialized
[2017-05-02 15:48:55]	DEBUG :	Output Class Initialized
[2017-05-02 15:48:55]	DEBUG :	Input Class Initialized
[2017-05-02 15:48:55]	DEBUG :	Global POST and COOKIE data sanitized
[2017-05-02 15:48:55]	DEBUG :	Language Class Initialized
[2017-05-02 15:48:55]	DEBUG :	Loader Class Initialized
[2017-05-02 15:48:55]	DEBUG :	Helper loaded: url_helper
[2017-05-02 15:48:55]	DEBUG :	Helper loaded: form_helper
[2017-05-02 15:48:55]	DEBUG :	Helper loaded: html_helper
[2017-05-02 15:48:55]	DEBUG :	Helper loaded: email_helper
[2017-05-02 15:48:55]	DEBUG :	Helper loaded: ckeditor_helper
[2017-05-02 15:48:55]	DEBUG :	Helper loaded: mcube_helper
[2017-05-02 15:48:55]	DEBUG :	Database Driver Class Initialized
[2017-05-02 15:48:55]	ERROR :	Severity: 8192  --> mysql_pconnect(): The mysql extension is deprecated and will be removed in the future: use mysqli or PDO instead /var/www/html/mcnew/system/database/drivers/mysql/mysql_driver.php 88
[2017-05-02 15:48:55]	DEBUG :	Session Class Initialized
[2017-05-02 15:48:55]	DEBUG :	Helper loaded: string_helper
[2017-05-02 15:48:55]	DEBUG :	Encrypt Class Initialized
[2017-05-02 15:48:55]	DEBUG :	A session cookie was not found.
[2017-05-02 15:48:55]	SQL :	INSERT INTO `call_sessions` (`session_id`, `ip_address`, `user_agent`, `last_activity`) VALUES ('1c99cb918c68f92c62946ee06b3ae051', '192.168.1.114', 'Dalvik/2.1.0 (Linux; U; Android 6.0; Panasonic T44', 1493720335)
[2017-05-02 15:48:55]	DEBUG :	Session routines successfully run
[2017-05-02 15:48:55]	DEBUG :	Table Class Initialized
[2017-05-02 15:48:55]	DEBUG :	Pagination Class Initialized
[2017-05-02 15:48:55]	DEBUG :	Config file loaded: config/paypallib_config.php
[2017-05-02 15:48:55]	DEBUG :	Form Validation Class Initialized
[2017-05-02 15:48:55]	DEBUG :	Email Class Initialized
[2017-05-02 15:48:55]	DEBUG :	Language file loaded: language/english/calendar_lang.php
[2017-05-02 15:48:55]	DEBUG :	Calendar Class Initialized
[2017-05-02 15:48:55]	DEBUG :	Controller Class Initialized
[2017-05-02 15:48:55]	DEBUG :	Model Class Initialized
[2017-05-02 15:48:55]	DEBUG :	Model Class Initialized
[2017-05-02 15:48:55]	DEBUG :	Model Class Initialized
[2017-05-02 15:48:55]	DEBUG :	Model Class Initialized
[2017-05-02 15:48:55]	DEBUG :	Model Class Initialized
[2017-05-02 15:48:55]	DEBUG :	Model Class Initialized
[2017-05-02 15:48:55]	DEBUG :	Model Class Initialized
[2017-05-02 15:48:55]	DEBUG :	Model Class Initialized
[2017-05-02 15:48:55]	DEBUG :	Model Class Initialized
[2017-05-02 15:48:55]	DEBUG :	Model Class Initialized
[2017-05-02 15:48:55]	DEBUG :	Model Class Initialized
[2017-05-02 15:48:55]	DEBUG :	Model Class Initialized
[2017-05-02 15:48:55]	DEBUG :	Model Class Initialized
[2017-05-02 15:48:55]	DEBUG :	Model Class Initialized
[2017-05-02 15:48:55]	DEBUG :	Plugin loaded: to_pdf_pi
[2017-05-02 15:48:55]	DEBUG :	Model Class Initialized
[2017-05-02 15:48:55]	DEBUG :	Language file loaded: language/english/form_validation_lang.php
[2017-05-02 15:48:55]	SQL :	SELECT uid,bid,eid FROM `user` WHERE authkey='1.1.d886b8e8a0615'
[2017-05-02 15:48:55]	DEBUG :	Database Driver Class Initialized
[2017-05-02 15:48:55]	SQL :	SELECT roleid FROM 1_employee
							WHERE eid='1'
							AND bid='1'
[2017-05-02 15:48:55]	DEBUG :	Database Driver Class Initialized
[2017-05-02 15:48:55]	SQL :	SELECT * FROM 1_user_role
							WHERE roleid='1'
							AND bid='1'
[2017-05-02 15:48:55]	SQL :	SELECT m.modid,m.modname,m.moddesc,
							COALESCE(o.opt_add,0) as opt_add,
							COALESCE(o.opt_view,0) as opt_view,
							COALESCE(o.opt_download,0) as opt_download,
							COALESCE(opt_delete,0) as opt_delete 
							FROM module m
							LEFT JOIN (SELECT * FROM 1_role_mod_opt
							WHERE roleid='1' 
							AND bid='1') as o
							ON m.modid=o.modid where m.status=1
[2017-05-02 15:48:55]	SQL :	SELECT a.*,f.fieldname FROM 1_role_access a
								LEFT JOIN systemfields f on a.fieldid=f.fieldid
								WHERE a.roleid='1'
								AND a.bid='1'
								AND a.fieldtype='s'
[2017-05-02 15:48:55]	SQL :	SELECT * FROM 1_role_access
								WHERE roleid='1'
								AND bid='1'
							AND fieldtype='c'
[2017-05-02 15:48:55]	SQL :	SELECT pri.landingnumber,pri.used,pri.climit,
								if(pri.status=0,'Not in use',
								if(pri.type='0','Calltrack',
								if(pri.type='1','IVRS',
								if(pri.type='2','PBX','Not Assign')))) as type,
								pri.associateid,
								if(pri.status=0,'None',
								if(pri.type='0',g.groupname,
								if(pri.type='1',i.title,
								if(pri.type='2',pbx.title,'None')))) as title,
								if(pri.status=0,'None',
								if(pri.type='0',ch.lastcall,
								if(pri.type='1',ih.lastcall,
								if(pri.type='2',ph.lastcall,'None')))) as lastcall
								FROM prinumbers pri
								LEFT JOIN 1_groups g on (g.prinumber=pri.number AND g.gid=pri.associateid AND g.status=1)
								LEFT JOIN 1_ivrs i on (i.prinumber=pri.number AND i.ivrsid=pri.associateid AND i.status=1)
								LEFT JOIN 1_pbx pbx on (pbx.prinumber=pri.number AND pbx.pbxid=pri.associateid AND pbx.status=1)
								LEFT JOIN (SELECT g.gid,max(h.starttime) as lastcall FROM 1_groups g LEFT JOIN 1_callhistory h on g.gid=h.gid GROUP BY g.gid) ch on g.gid=ch.gid
								LEFT JOIN (SELECT i.ivrsid,max(h.datetime) as lastcall FROM 1_ivrs i LEFT JOIN 1_ivrshistory h on i.ivrsid=h.ivrsid GROUP BY i.ivrsid) ih on i.ivrsid=ih.ivrsid
								LEFT JOIN (SELECT p.pbxid,max(h.starttime) as lastcall FROM 1_pbx p LEFT JOIN 1_pbxreport h on p.pbxid=h.pbxid GROUP BY p.pbxid) ph on pbx.pbxid=ph.pbxid
								WHERE pri.bid=1
[2017-05-02 15:48:55]	SQL :	SELECT balance FROM sms_bal  where bid='1'
[2017-05-02 15:48:55]	SQL :	SELECT balance FROM call_bal where bid='1'
[2017-05-02 15:48:55]	SQL :	SELECT DISTINCT(e.eid),e.empname,eb.start_time FROM 1_employee e
		                       LEFT JOIN 1_emp_break eb ON e.eid = eb.eid
		                       LEFT JOIN 1_groups d ON e.eid = d.eid
		                       WHERE eb.end_time='0000-00-00' AND e.selfdisable=1  GROUP BY d.gid,e.eid
[2017-05-02 15:48:55]	SQL :	SELECT COALESCE(COUNT(callid), 0) AS day 
							FROM 1_callhistory h 
							LEFT JOIN 1_groups d ON d.gid = h.gid 
							WHERE 1 AND (DATE(h.`starttime`) = DATE(NOW()))
[2017-05-02 15:48:55]	SQL :	SELECT COALESCE(COUNT(callid), 0) AS day 
							FROM 1_callhistory h 
							LEFT JOIN 1_groups d ON d.gid = h.gid 
							WHERE 1  AND (DATE(h.`starttime`)  > DATE(DATE_SUB(NOW(), INTERVAL 1 WEEK)))
[2017-05-02 15:48:55]	SQL :	SELECT COALESCE(COUNT(callid), 0) AS day 
							FROM 1_callhistory h 
							LEFT JOIN 1_groups d ON d.gid = h.gid 
							WHERE 1  AND (MONTH(h.`starttime` ) = MONTH(NOW()))
[2017-05-02 15:48:55]	SQL :	SELECT COALESCE(COUNT(pbxid), 0) AS day 
							FROM 1_pbxreport h 
							WHERE 1 AND (DATE(h.`starttime`) = DATE(NOW()))
[2017-05-02 15:48:55]	SQL :	SELECT COALESCE(COUNT(pbxid), 0) AS day 
							FROM 1_pbxreport h 
							WHERE 1  AND (DATE(h.`starttime`)  > DATE(DATE_SUB(NOW(), INTERVAL 1 WEEK)))
[2017-05-02 15:48:55]	SQL :	SELECT COALESCE(COUNT(pbxid), 0) AS day 
							FROM 1_pbxreport h 
							WHERE 1  AND (MONTH(h.`starttime` ) = MONTH(NOW()))
[2017-05-02 15:48:55]	SQL :	SELECT COALESCE(COUNT(hid), 0) AS day 
							   FROM 1_ivrshistory h 
						       WHERE 1 AND (DATE(h.`datetime`) = DATE(NOW()))
[2017-05-02 15:48:55]	SQL :	SELECT COALESCE(COUNT(hid), 0) AS day 
							   FROM 1_ivrshistory h 
						       WHERE 1  AND (DATE(h.`datetime`)  > DATE(DATE_SUB(NOW(), INTERVAL 1 WEEK)))
[2017-05-02 15:48:55]	SQL :	SELECT COALESCE(COUNT(hid), 0) AS day 
							   FROM 1_ivrshistory h 
						       WHERE 1  AND (MONTH(h.`datetime` ) = MONTH(NOW()))
[2017-05-02 15:48:55]	SQL :	SELECT COALESCE(COUNT(leadid), 0) AS day 
							FROM 1_leads a 
							LEFT JOIN 1_leads_groups d ON d.gid = a.gid 
							WHERE (DATE(a.`createdon`) = DATE(NOW()))
[2017-05-02 15:48:55]	SQL :	SELECT COALESCE(COUNT(leadid), 0) AS day 
							FROM 1_leads a 
							LEFT JOIN 1_leads_groups d ON d.gid = a.gid 
							WHERE (DATE(a.`createdon`) = DATE(NOW()))
[2017-05-02 15:48:55]	SQL :	SELECT COALESCE(COUNT(leadid), 0) AS day 
							FROM 1_leads a 
							LEFT JOIN 1_leads_groups d ON d.gid = a.gid 
							WHERE (DATE(a.`createdon`) = DATE(NOW()))
[2017-05-02 15:48:55]	SQL :	SELECT COALESCE(COUNT(tktid), 0) AS day 
							FROM 1_support_tickets a 
							LEFT JOIN 1_support_groups d ON d.gid = a.gid 
							WHERE (DATE(a.`createdon`) = DATE(NOW()))
[2017-05-02 15:48:55]	SQL :	SELECT COALESCE(COUNT(tktid), 0) AS day 
							FROM 1_support_tickets a 
							LEFT JOIN 1_support_groups d ON d.gid = a.gid 
							WHERE (DATE(a.`createdon`) = DATE(NOW()))
[2017-05-02 15:48:55]	SQL :	SELECT COALESCE(COUNT(tktid), 0) AS day 
							FROM 1_support_tickets a 
							LEFT JOIN 1_support_groups d ON d.gid = a.gid 
							WHERE (DATE(a.`createdon`) = DATE(NOW()))
[2017-05-02 15:48:55]	SQL :	SELECT COALESCE(COUNT(callid), 0) AS day 
							FROM 1_outboundcalls h 
							WHERE (DATE(h.`starttime`) = DATE(NOW()))
[2017-05-02 15:48:55]	SQL :	SELECT COALESCE(COUNT(callid), 0) AS day 
							FROM 1_outboundcalls h 
							WHERE (DATE(h.`starttime`) = DATE(NOW()))
[2017-05-02 15:48:55]	SQL :	SELECT COALESCE(COUNT(callid), 0) AS day 
							FROM 1_outboundcalls h 
							WHERE (DATE(h.`starttime`) = DATE(NOW()))
[2017-05-02 15:48:55]	SQL :	SELECT COALESCE(COUNT(callid), 0) AS day 
							FROM 1_mtracker h 
							WHERE (DATE(h.`starttime`) = DATE(NOW()))
[2017-05-02 15:48:55]	SQL :	SELECT COALESCE(COUNT(callid), 0) AS day 
							FROM 1_mtracker h 
							WHERE (DATE(h.`starttime`) = DATE(NOW()))
[2017-05-02 15:48:55]	SQL :	SELECT COALESCE(COUNT(callid), 0) AS day 
							FROM 1_mtracker h 
							WHERE (DATE(h.`starttime`) = DATE(NOW()))
[2017-05-02 15:55:35]	DEBUG :	Config Class Initialized
[2017-05-02 15:55:35]	DEBUG :	Hooks Class Initialized
[2017-05-02 15:55:35]	DEBUG :	URI Class Initialized
[2017-05-02 15:55:35]	DEBUG :	Router Class Initialized
[2017-05-02 15:55:35]	DEBUG :	Output Class Initialized
[2017-05-02 15:55:35]	DEBUG :	Input Class Initialized
[2017-05-02 15:55:35]	DEBUG :	Global POST and COOKIE data sanitized
[2017-05-02 15:55:35]	DEBUG :	Language Class Initialized
[2017-05-02 15:55:35]	DEBUG :	Loader Class Initialized
[2017-05-02 15:55:35]	DEBUG :	Helper loaded: url_helper
[2017-05-02 15:55:35]	DEBUG :	Helper loaded: form_helper
[2017-05-02 15:55:35]	DEBUG :	Helper loaded: html_helper
[2017-05-02 15:55:35]	DEBUG :	Helper loaded: email_helper
[2017-05-02 15:55:35]	DEBUG :	Helper loaded: ckeditor_helper
[2017-05-02 15:55:35]	DEBUG :	Helper loaded: mcube_helper
[2017-05-02 15:55:35]	DEBUG :	Database Driver Class Initialized
[2017-05-02 15:55:35]	ERROR :	Severity: 8192  --> mysql_pconnect(): The mysql extension is deprecated and will be removed in the future: use mysqli or PDO instead /var/www/html/mcnew/system/database/drivers/mysql/mysql_driver.php 88
[2017-05-02 15:55:35]	DEBUG :	Session Class Initialized
[2017-05-02 15:55:35]	DEBUG :	Helper loaded: string_helper
[2017-05-02 15:55:35]	DEBUG :	Encrypt Class Initialized
[2017-05-02 15:55:35]	DEBUG :	A session cookie was not found.
[2017-05-02 15:55:35]	SQL :	INSERT INTO `call_sessions` (`session_id`, `ip_address`, `user_agent`, `last_activity`) VALUES ('608d4c722a006d661c773c85f21bff03', '192.168.1.114', 'Dalvik/2.1.0 (Linux; U; Android 6.0; Panasonic T44', 1493720735)
[2017-05-02 15:55:35]	DEBUG :	Session routines successfully run
[2017-05-02 15:55:35]	DEBUG :	Table Class Initialized
[2017-05-02 15:55:35]	DEBUG :	Pagination Class Initialized
[2017-05-02 15:55:35]	DEBUG :	Config file loaded: config/paypallib_config.php
[2017-05-02 15:55:35]	DEBUG :	Form Validation Class Initialized
[2017-05-02 15:55:35]	DEBUG :	Email Class Initialized
[2017-05-02 15:55:35]	DEBUG :	Language file loaded: language/english/calendar_lang.php
[2017-05-02 15:55:35]	DEBUG :	Calendar Class Initialized
[2017-05-02 15:55:35]	DEBUG :	Controller Class Initialized
[2017-05-02 15:55:35]	DEBUG :	Model Class Initialized
[2017-05-02 15:55:35]	DEBUG :	Model Class Initialized
[2017-05-02 15:55:35]	DEBUG :	Model Class Initialized
[2017-05-02 15:55:35]	DEBUG :	Model Class Initialized
[2017-05-02 15:55:35]	DEBUG :	Model Class Initialized
[2017-05-02 15:55:35]	DEBUG :	Model Class Initialized
[2017-05-02 15:55:35]	DEBUG :	Model Class Initialized
[2017-05-02 15:55:35]	DEBUG :	Model Class Initialized
[2017-05-02 15:55:35]	DEBUG :	Model Class Initialized
[2017-05-02 15:55:35]	DEBUG :	Model Class Initialized
[2017-05-02 15:55:35]	DEBUG :	Model Class Initialized
[2017-05-02 15:55:35]	DEBUG :	Model Class Initialized
[2017-05-02 15:55:35]	DEBUG :	Model Class Initialized
[2017-05-02 15:55:35]	DEBUG :	Model Class Initialized
[2017-05-02 15:55:35]	DEBUG :	Plugin loaded: to_pdf_pi
[2017-05-02 15:55:35]	DEBUG :	Model Class Initialized
[2017-05-02 15:55:35]	DEBUG :	Language file loaded: language/english/form_validation_lang.php
[2017-05-02 15:55:35]	SQL :	SELECT uid,bid,eid FROM `user` WHERE authkey='1.1.d886b8e8a0615'
[2017-05-02 15:55:35]	DEBUG :	Database Driver Class Initialized
[2017-05-02 15:55:35]	SQL :	SELECT roleid FROM 1_employee
							WHERE eid='1'
							AND bid='1'
[2017-05-02 15:55:35]	DEBUG :	Database Driver Class Initialized
[2017-05-02 15:55:35]	SQL :	SELECT * FROM 1_user_role
							WHERE roleid='1'
							AND bid='1'
[2017-05-02 15:55:35]	SQL :	SELECT m.modid,m.modname,m.moddesc,
							COALESCE(o.opt_add,0) as opt_add,
							COALESCE(o.opt_view,0) as opt_view,
							COALESCE(o.opt_download,0) as opt_download,
							COALESCE(opt_delete,0) as opt_delete 
							FROM module m
							LEFT JOIN (SELECT * FROM 1_role_mod_opt
							WHERE roleid='1' 
							AND bid='1') as o
							ON m.modid=o.modid where m.status=1
[2017-05-02 15:55:35]	SQL :	SELECT a.*,f.fieldname FROM 1_role_access a
								LEFT JOIN systemfields f on a.fieldid=f.fieldid
								WHERE a.roleid='1'
								AND a.bid='1'
								AND a.fieldtype='s'
[2017-05-02 15:55:35]	SQL :	SELECT * FROM 1_role_access
								WHERE roleid='1'
								AND bid='1'
							AND fieldtype='c'
[2017-05-02 15:55:35]	SQL :	SELECT pri.landingnumber,pri.used,pri.climit,
								if(pri.status=0,'Not in use',
								if(pri.type='0','Calltrack',
								if(pri.type='1','IVRS',
								if(pri.type='2','PBX','Not Assign')))) as type,
								pri.associateid,
								if(pri.status=0,'None',
								if(pri.type='0',g.groupname,
								if(pri.type='1',i.title,
								if(pri.type='2',pbx.title,'None')))) as title,
								if(pri.status=0,'None',
								if(pri.type='0',ch.lastcall,
								if(pri.type='1',ih.lastcall,
								if(pri.type='2',ph.lastcall,'None')))) as lastcall
								FROM prinumbers pri
								LEFT JOIN 1_groups g on (g.prinumber=pri.number AND g.gid=pri.associateid AND g.status=1)
								LEFT JOIN 1_ivrs i on (i.prinumber=pri.number AND i.ivrsid=pri.associateid AND i.status=1)
								LEFT JOIN 1_pbx pbx on (pbx.prinumber=pri.number AND pbx.pbxid=pri.associateid AND pbx.status=1)
								LEFT JOIN (SELECT g.gid,max(h.starttime) as lastcall FROM 1_groups g LEFT JOIN 1_callhistory h on g.gid=h.gid GROUP BY g.gid) ch on g.gid=ch.gid
								LEFT JOIN (SELECT i.ivrsid,max(h.datetime) as lastcall FROM 1_ivrs i LEFT JOIN 1_ivrshistory h on i.ivrsid=h.ivrsid GROUP BY i.ivrsid) ih on i.ivrsid=ih.ivrsid
								LEFT JOIN (SELECT p.pbxid,max(h.starttime) as lastcall FROM 1_pbx p LEFT JOIN 1_pbxreport h on p.pbxid=h.pbxid GROUP BY p.pbxid) ph on pbx.pbxid=ph.pbxid
								WHERE pri.bid=1
[2017-05-02 15:55:35]	SQL :	SELECT balance FROM sms_bal  where bid='1'
[2017-05-02 15:55:35]	SQL :	SELECT balance FROM call_bal where bid='1'
[2017-05-02 15:55:35]	SQL :	SELECT DISTINCT(e.eid),e.empname,eb.start_time FROM 1_employee e
		                       LEFT JOIN 1_emp_break eb ON e.eid = eb.eid
		                       LEFT JOIN 1_groups d ON e.eid = d.eid
		                       WHERE eb.end_time='0000-00-00' AND e.selfdisable=1  GROUP BY d.gid,e.eid
[2017-05-02 15:55:35]	SQL :	SELECT COALESCE(COUNT(callid), 0) AS day 
							FROM 1_callhistory h 
							LEFT JOIN 1_groups d ON d.gid = h.gid 
							WHERE 1 AND (DATE(h.`starttime`) = DATE(NOW()))
[2017-05-02 15:55:35]	SQL :	SELECT COALESCE(COUNT(callid), 0) AS day 
							FROM 1_callhistory h 
							LEFT JOIN 1_groups d ON d.gid = h.gid 
							WHERE 1  AND (DATE(h.`starttime`)  > DATE(DATE_SUB(NOW(), INTERVAL 1 WEEK)))
[2017-05-02 15:55:35]	SQL :	SELECT COALESCE(COUNT(callid), 0) AS day 
							FROM 1_callhistory h 
							LEFT JOIN 1_groups d ON d.gid = h.gid 
							WHERE 1  AND (MONTH(h.`starttime` ) = MONTH(NOW()))
[2017-05-02 15:55:35]	SQL :	SELECT COALESCE(COUNT(pbxid), 0) AS day 
							FROM 1_pbxreport h 
							WHERE 1 AND (DATE(h.`starttime`) = DATE(NOW()))
[2017-05-02 15:55:35]	SQL :	SELECT COALESCE(COUNT(pbxid), 0) AS day 
							FROM 1_pbxreport h 
							WHERE 1  AND (DATE(h.`starttime`)  > DATE(DATE_SUB(NOW(), INTERVAL 1 WEEK)))
[2017-05-02 15:55:35]	SQL :	SELECT COALESCE(COUNT(pbxid), 0) AS day 
							FROM 1_pbxreport h 
							WHERE 1  AND (MONTH(h.`starttime` ) = MONTH(NOW()))
[2017-05-02 15:55:35]	SQL :	SELECT COALESCE(COUNT(hid), 0) AS day 
							   FROM 1_ivrshistory h 
						       WHERE 1 AND (DATE(h.`datetime`) = DATE(NOW()))
[2017-05-02 15:55:35]	SQL :	SELECT COALESCE(COUNT(hid), 0) AS day 
							   FROM 1_ivrshistory h 
						       WHERE 1  AND (DATE(h.`datetime`)  > DATE(DATE_SUB(NOW(), INTERVAL 1 WEEK)))
[2017-05-02 15:55:35]	SQL :	SELECT COALESCE(COUNT(hid), 0) AS day 
							   FROM 1_ivrshistory h 
						       WHERE 1  AND (MONTH(h.`datetime` ) = MONTH(NOW()))
[2017-05-02 15:55:35]	SQL :	SELECT COALESCE(COUNT(leadid), 0) AS day 
							FROM 1_leads a 
							LEFT JOIN 1_leads_groups d ON d.gid = a.gid 
							WHERE (DATE(a.`createdon`) = DATE(NOW()))
[2017-05-02 15:55:35]	SQL :	SELECT COALESCE(COUNT(leadid), 0) AS day 
							FROM 1_leads a 
							LEFT JOIN 1_leads_groups d ON d.gid = a.gid 
							WHERE (DATE(a.`createdon`) = DATE(NOW()))
[2017-05-02 15:55:35]	SQL :	SELECT COALESCE(COUNT(leadid), 0) AS day 
							FROM 1_leads a 
							LEFT JOIN 1_leads_groups d ON d.gid = a.gid 
							WHERE (DATE(a.`createdon`) = DATE(NOW()))
[2017-05-02 15:55:35]	SQL :	SELECT COALESCE(COUNT(tktid), 0) AS day 
							FROM 1_support_tickets a 
							LEFT JOIN 1_support_groups d ON d.gid = a.gid 
							WHERE (DATE(a.`createdon`) = DATE(NOW()))
[2017-05-02 15:55:35]	SQL :	SELECT COALESCE(COUNT(tktid), 0) AS day 
							FROM 1_support_tickets a 
							LEFT JOIN 1_support_groups d ON d.gid = a.gid 
							WHERE (DATE(a.`createdon`) = DATE(NOW()))
[2017-05-02 15:55:35]	SQL :	SELECT COALESCE(COUNT(tktid), 0) AS day 
							FROM 1_support_tickets a 
							LEFT JOIN 1_support_groups d ON d.gid = a.gid 
							WHERE (DATE(a.`createdon`) = DATE(NOW()))
[2017-05-02 15:55:35]	SQL :	SELECT COALESCE(COUNT(callid), 0) AS day 
							FROM 1_outboundcalls h 
							WHERE (DATE(h.`starttime`) = DATE(NOW()))
[2017-05-02 15:55:35]	SQL :	SELECT COALESCE(COUNT(callid), 0) AS day 
							FROM 1_outboundcalls h 
							WHERE (DATE(h.`starttime`) = DATE(NOW()))
[2017-05-02 15:55:35]	SQL :	SELECT COALESCE(COUNT(callid), 0) AS day 
							FROM 1_outboundcalls h 
							WHERE (DATE(h.`starttime`) = DATE(NOW()))
[2017-05-02 15:55:35]	SQL :	SELECT COALESCE(COUNT(callid), 0) AS day 
							FROM 1_mtracker h 
							WHERE (DATE(h.`starttime`) = DATE(NOW()))
[2017-05-02 15:55:35]	SQL :	SELECT COALESCE(COUNT(callid), 0) AS day 
							FROM 1_mtracker h 
							WHERE (DATE(h.`starttime`) = DATE(NOW()))
[2017-05-02 15:55:35]	SQL :	SELECT COALESCE(COUNT(callid), 0) AS day 
							FROM 1_mtracker h 
							WHERE (DATE(h.`starttime`) = DATE(NOW()))
[2017-05-02 15:57:05]	DEBUG :	Config Class Initialized
[2017-05-02 15:57:05]	DEBUG :	Hooks Class Initialized
[2017-05-02 15:57:05]	DEBUG :	URI Class Initialized
[2017-05-02 15:57:05]	DEBUG :	Router Class Initialized
[2017-05-02 15:57:05]	DEBUG :	Output Class Initialized
[2017-05-02 15:57:05]	DEBUG :	Input Class Initialized
[2017-05-02 15:57:05]	DEBUG :	Global POST and COOKIE data sanitized
[2017-05-02 15:57:05]	DEBUG :	Language Class Initialized
[2017-05-02 15:57:05]	DEBUG :	Loader Class Initialized
[2017-05-02 15:57:05]	DEBUG :	Helper loaded: url_helper
[2017-05-02 15:57:05]	DEBUG :	Helper loaded: form_helper
[2017-05-02 15:57:05]	DEBUG :	Helper loaded: html_helper
[2017-05-02 15:57:05]	DEBUG :	Helper loaded: email_helper
[2017-05-02 15:57:05]	DEBUG :	Helper loaded: ckeditor_helper
[2017-05-02 15:57:05]	DEBUG :	Helper loaded: mcube_helper
[2017-05-02 15:57:05]	DEBUG :	Database Driver Class Initialized
[2017-05-02 15:57:05]	ERROR :	Severity: 8192  --> mysql_pconnect(): The mysql extension is deprecated and will be removed in the future: use mysqli or PDO instead /var/www/html/mcnew/system/database/drivers/mysql/mysql_driver.php 88
[2017-05-02 15:57:05]	DEBUG :	Session Class Initialized
[2017-05-02 15:57:05]	DEBUG :	Helper loaded: string_helper
[2017-05-02 15:57:05]	DEBUG :	Encrypt Class Initialized
[2017-05-02 15:57:05]	DEBUG :	A session cookie was not found.
[2017-05-02 15:57:05]	SQL :	INSERT INTO `call_sessions` (`session_id`, `ip_address`, `user_agent`, `last_activity`) VALUES ('9ed6a64d72aea7b9bd301323223e69b6', '192.168.1.114', 'Dalvik/2.1.0 (Linux; U; Android 6.0; Panasonic T44', 1493720825)
[2017-05-02 15:57:05]	DEBUG :	Session routines successfully run
[2017-05-02 15:57:05]	DEBUG :	Table Class Initialized
[2017-05-02 15:57:05]	DEBUG :	Pagination Class Initialized
[2017-05-02 15:57:05]	DEBUG :	Config file loaded: config/paypallib_config.php
[2017-05-02 15:57:05]	DEBUG :	Form Validation Class Initialized
[2017-05-02 15:57:05]	DEBUG :	Email Class Initialized
[2017-05-02 15:57:05]	DEBUG :	Language file loaded: language/english/calendar_lang.php
[2017-05-02 15:57:05]	DEBUG :	Calendar Class Initialized
[2017-05-02 15:57:05]	DEBUG :	Controller Class Initialized
[2017-05-02 15:57:05]	DEBUG :	Model Class Initialized
[2017-05-02 15:57:05]	DEBUG :	Model Class Initialized
[2017-05-02 15:57:05]	DEBUG :	Model Class Initialized
[2017-05-02 15:57:05]	DEBUG :	Model Class Initialized
[2017-05-02 15:57:05]	DEBUG :	Model Class Initialized
[2017-05-02 15:57:05]	DEBUG :	Model Class Initialized
[2017-05-02 15:57:05]	DEBUG :	Model Class Initialized
[2017-05-02 15:57:05]	DEBUG :	Model Class Initialized
[2017-05-02 15:57:05]	DEBUG :	Model Class Initialized
[2017-05-02 15:57:05]	DEBUG :	Model Class Initialized
[2017-05-02 15:57:05]	DEBUG :	Model Class Initialized
[2017-05-02 15:57:05]	DEBUG :	Model Class Initialized
[2017-05-02 15:57:05]	DEBUG :	Model Class Initialized
[2017-05-02 15:57:05]	DEBUG :	Model Class Initialized
[2017-05-02 15:57:05]	DEBUG :	Plugin loaded: to_pdf_pi
[2017-05-02 15:57:05]	DEBUG :	Model Class Initialized
[2017-05-02 15:57:05]	DEBUG :	Language file loaded: language/english/form_validation_lang.php
[2017-05-02 15:57:05]	SQL :	SELECT uid,bid,eid FROM `user` WHERE authkey='1.1.d886b8e8a0615'
[2017-05-02 15:57:05]	DEBUG :	Database Driver Class Initialized
[2017-05-02 15:57:05]	SQL :	SELECT roleid FROM 1_employee
							WHERE eid='1'
							AND bid='1'
[2017-05-02 15:57:05]	DEBUG :	Database Driver Class Initialized
[2017-05-02 15:57:05]	SQL :	SELECT * FROM 1_user_role
							WHERE roleid='1'
							AND bid='1'
[2017-05-02 15:57:05]	SQL :	SELECT m.modid,m.modname,m.moddesc,
							COALESCE(o.opt_add,0) as opt_add,
							COALESCE(o.opt_view,0) as opt_view,
							COALESCE(o.opt_download,0) as opt_download,
							COALESCE(opt_delete,0) as opt_delete 
							FROM module m
							LEFT JOIN (SELECT * FROM 1_role_mod_opt
							WHERE roleid='1' 
							AND bid='1') as o
							ON m.modid=o.modid where m.status=1
[2017-05-02 15:57:05]	SQL :	SELECT a.*,f.fieldname FROM 1_role_access a
								LEFT JOIN systemfields f on a.fieldid=f.fieldid
								WHERE a.roleid='1'
								AND a.bid='1'
								AND a.fieldtype='s'
[2017-05-02 15:57:05]	SQL :	SELECT * FROM 1_role_access
								WHERE roleid='1'
								AND bid='1'
							AND fieldtype='c'
[2017-05-02 15:57:05]	SQL :	SELECT pri.landingnumber,pri.used,pri.climit,
								if(pri.status=0,'Not in use',
								if(pri.type='0','Calltrack',
								if(pri.type='1','IVRS',
								if(pri.type='2','PBX','Not Assign')))) as type,
								pri.associateid,
								if(pri.status=0,'None',
								if(pri.type='0',g.groupname,
								if(pri.type='1',i.title,
								if(pri.type='2',pbx.title,'None')))) as title,
								if(pri.status=0,'None',
								if(pri.type='0',ch.lastcall,
								if(pri.type='1',ih.lastcall,
								if(pri.type='2',ph.lastcall,'None')))) as lastcall
								FROM prinumbers pri
								LEFT JOIN 1_groups g on (g.prinumber=pri.number AND g.gid=pri.associateid AND g.status=1)
								LEFT JOIN 1_ivrs i on (i.prinumber=pri.number AND i.ivrsid=pri.associateid AND i.status=1)
								LEFT JOIN 1_pbx pbx on (pbx.prinumber=pri.number AND pbx.pbxid=pri.associateid AND pbx.status=1)
								LEFT JOIN (SELECT g.gid,max(h.starttime) as lastcall FROM 1_groups g LEFT JOIN 1_callhistory h on g.gid=h.gid GROUP BY g.gid) ch on g.gid=ch.gid
								LEFT JOIN (SELECT i.ivrsid,max(h.datetime) as lastcall FROM 1_ivrs i LEFT JOIN 1_ivrshistory h on i.ivrsid=h.ivrsid GROUP BY i.ivrsid) ih on i.ivrsid=ih.ivrsid
								LEFT JOIN (SELECT p.pbxid,max(h.starttime) as lastcall FROM 1_pbx p LEFT JOIN 1_pbxreport h on p.pbxid=h.pbxid GROUP BY p.pbxid) ph on pbx.pbxid=ph.pbxid
								WHERE pri.bid=1
[2017-05-02 15:57:05]	SQL :	SELECT balance FROM sms_bal  where bid='1'
[2017-05-02 15:57:05]	SQL :	SELECT balance FROM call_bal where bid='1'
[2017-05-02 15:57:05]	SQL :	SELECT DISTINCT(e.eid),e.empname,eb.start_time FROM 1_employee e
		                       LEFT JOIN 1_emp_break eb ON e.eid = eb.eid
		                       LEFT JOIN 1_groups d ON e.eid = d.eid
		                       WHERE eb.end_time='0000-00-00' AND e.selfdisable=1  GROUP BY d.gid,e.eid
[2017-05-02 15:57:05]	SQL :	SELECT COALESCE(COUNT(callid), 0) AS day 
							FROM 1_callhistory h 
							LEFT JOIN 1_groups d ON d.gid = h.gid 
							WHERE 1 AND (DATE(h.`starttime`) = DATE(NOW()))
[2017-05-02 15:57:05]	SQL :	SELECT COALESCE(COUNT(callid), 0) AS day 
							FROM 1_callhistory h 
							LEFT JOIN 1_groups d ON d.gid = h.gid 
							WHERE 1  AND (DATE(h.`starttime`)  > DATE(DATE_SUB(NOW(), INTERVAL 1 WEEK)))
[2017-05-02 15:57:05]	SQL :	SELECT COALESCE(COUNT(callid), 0) AS day 
							FROM 1_callhistory h 
							LEFT JOIN 1_groups d ON d.gid = h.gid 
							WHERE 1  AND (MONTH(h.`starttime` ) = MONTH(NOW()))
[2017-05-02 15:57:05]	SQL :	SELECT COALESCE(COUNT(pbxid), 0) AS day 
							FROM 1_pbxreport h 
							WHERE 1 AND (DATE(h.`starttime`) = DATE(NOW()))
[2017-05-02 15:57:05]	SQL :	SELECT COALESCE(COUNT(pbxid), 0) AS day 
							FROM 1_pbxreport h 
							WHERE 1  AND (DATE(h.`starttime`)  > DATE(DATE_SUB(NOW(), INTERVAL 1 WEEK)))
[2017-05-02 15:57:05]	SQL :	SELECT COALESCE(COUNT(pbxid), 0) AS day 
							FROM 1_pbxreport h 
							WHERE 1  AND (MONTH(h.`starttime` ) = MONTH(NOW()))
[2017-05-02 15:57:05]	SQL :	SELECT COALESCE(COUNT(hid), 0) AS day 
							   FROM 1_ivrshistory h 
						       WHERE 1 AND (DATE(h.`datetime`) = DATE(NOW()))
[2017-05-02 15:57:05]	SQL :	SELECT COALESCE(COUNT(hid), 0) AS day 
							   FROM 1_ivrshistory h 
						       WHERE 1  AND (DATE(h.`datetime`)  > DATE(DATE_SUB(NOW(), INTERVAL 1 WEEK)))
[2017-05-02 15:57:05]	SQL :	SELECT COALESCE(COUNT(hid), 0) AS day 
							   FROM 1_ivrshistory h 
						       WHERE 1  AND (MONTH(h.`datetime` ) = MONTH(NOW()))
[2017-05-02 15:57:05]	SQL :	SELECT COALESCE(COUNT(leadid), 0) AS day 
							FROM 1_leads a 
							LEFT JOIN 1_leads_groups d ON d.gid = a.gid 
							WHERE (DATE(a.`createdon`) = DATE(NOW()))
[2017-05-02 15:57:05]	SQL :	SELECT COALESCE(COUNT(leadid), 0) AS day 
							FROM 1_leads a 
							LEFT JOIN 1_leads_groups d ON d.gid = a.gid 
							WHERE (DATE(a.`createdon`) = DATE(NOW()))
[2017-05-02 15:57:05]	SQL :	SELECT COALESCE(COUNT(leadid), 0) AS day 
							FROM 1_leads a 
							LEFT JOIN 1_leads_groups d ON d.gid = a.gid 
							WHERE (DATE(a.`createdon`) = DATE(NOW()))
[2017-05-02 15:57:05]	SQL :	SELECT COALESCE(COUNT(tktid), 0) AS day 
							FROM 1_support_tickets a 
							LEFT JOIN 1_support_groups d ON d.gid = a.gid 
							WHERE (DATE(a.`createdon`) = DATE(NOW()))
[2017-05-02 15:57:05]	SQL :	SELECT COALESCE(COUNT(tktid), 0) AS day 
							FROM 1_support_tickets a 
							LEFT JOIN 1_support_groups d ON d.gid = a.gid 
							WHERE (DATE(a.`createdon`) = DATE(NOW()))
[2017-05-02 15:57:05]	SQL :	SELECT COALESCE(COUNT(tktid), 0) AS day 
							FROM 1_support_tickets a 
							LEFT JOIN 1_support_groups d ON d.gid = a.gid 
							WHERE (DATE(a.`createdon`) = DATE(NOW()))
[2017-05-02 15:57:05]	SQL :	SELECT COALESCE(COUNT(callid), 0) AS day 
							FROM 1_outboundcalls h 
							WHERE (DATE(h.`starttime`) = DATE(NOW()))
[2017-05-02 15:57:05]	SQL :	SELECT COALESCE(COUNT(callid), 0) AS day 
							FROM 1_outboundcalls h 
							WHERE (DATE(h.`starttime`) = DATE(NOW()))
[2017-05-02 15:57:05]	SQL :	SELECT COALESCE(COUNT(callid), 0) AS day 
							FROM 1_outboundcalls h 
							WHERE (DATE(h.`starttime`) = DATE(NOW()))
[2017-05-02 15:57:05]	SQL :	SELECT COALESCE(COUNT(callid), 0) AS day 
							FROM 1_mtracker h 
							WHERE (DATE(h.`starttime`) = DATE(NOW()))
[2017-05-02 15:57:05]	SQL :	SELECT COALESCE(COUNT(callid), 0) AS day 
							FROM 1_mtracker h 
							WHERE (DATE(h.`starttime`) = DATE(NOW()))
[2017-05-02 15:57:05]	SQL :	SELECT COALESCE(COUNT(callid), 0) AS day 
							FROM 1_mtracker h 
							WHERE (DATE(h.`starttime`) = DATE(NOW()))
[2017-05-02 15:57:09]	DEBUG :	Config Class Initialized
[2017-05-02 15:57:09]	DEBUG :	Hooks Class Initialized
[2017-05-02 15:57:09]	DEBUG :	URI Class Initialized
[2017-05-02 15:57:09]	DEBUG :	Router Class Initialized
[2017-05-02 15:57:09]	DEBUG :	Output Class Initialized
[2017-05-02 15:57:09]	DEBUG :	Input Class Initialized
[2017-05-02 15:57:09]	DEBUG :	Global POST and COOKIE data sanitized
[2017-05-02 15:57:09]	DEBUG :	Language Class Initialized
[2017-05-02 15:57:09]	DEBUG :	Loader Class Initialized
[2017-05-02 15:57:09]	DEBUG :	Helper loaded: url_helper
[2017-05-02 15:57:09]	DEBUG :	Helper loaded: form_helper
[2017-05-02 15:57:09]	DEBUG :	Helper loaded: html_helper
[2017-05-02 15:57:09]	DEBUG :	Helper loaded: email_helper
[2017-05-02 15:57:09]	DEBUG :	Helper loaded: ckeditor_helper
[2017-05-02 15:57:09]	DEBUG :	Helper loaded: mcube_helper
[2017-05-02 15:57:09]	DEBUG :	Database Driver Class Initialized
[2017-05-02 15:57:09]	ERROR :	Severity: 8192  --> mysql_pconnect(): The mysql extension is deprecated and will be removed in the future: use mysqli or PDO instead /var/www/html/mcnew/system/database/drivers/mysql/mysql_driver.php 88
[2017-05-02 15:57:09]	DEBUG :	Session Class Initialized
[2017-05-02 15:57:09]	DEBUG :	Helper loaded: string_helper
[2017-05-02 15:57:09]	DEBUG :	Encrypt Class Initialized
[2017-05-02 15:57:09]	DEBUG :	A session cookie was not found.
[2017-05-02 15:57:09]	SQL :	INSERT INTO `call_sessions` (`session_id`, `ip_address`, `user_agent`, `last_activity`) VALUES ('f832f84b143b81d10d3a0cc6bf04ba16', '192.168.1.114', 'Dalvik/2.1.0 (Linux; U; Android 6.0; Panasonic T44', 1493720829)
[2017-05-02 15:57:09]	DEBUG :	Session routines successfully run
[2017-05-02 15:57:09]	DEBUG :	Table Class Initialized
[2017-05-02 15:57:09]	DEBUG :	Pagination Class Initialized
[2017-05-02 15:57:09]	DEBUG :	Config file loaded: config/paypallib_config.php
[2017-05-02 15:57:09]	DEBUG :	Form Validation Class Initialized
[2017-05-02 15:57:09]	DEBUG :	Email Class Initialized
[2017-05-02 15:57:09]	DEBUG :	Language file loaded: language/english/calendar_lang.php
[2017-05-02 15:57:09]	DEBUG :	Calendar Class Initialized
[2017-05-02 15:57:09]	DEBUG :	Controller Class Initialized
[2017-05-02 15:57:09]	DEBUG :	Model Class Initialized
[2017-05-02 15:57:09]	DEBUG :	Model Class Initialized
[2017-05-02 15:57:09]	DEBUG :	Model Class Initialized
[2017-05-02 15:57:09]	DEBUG :	Model Class Initialized
[2017-05-02 15:57:09]	DEBUG :	Model Class Initialized
[2017-05-02 15:57:09]	DEBUG :	Model Class Initialized
[2017-05-02 15:57:09]	DEBUG :	Model Class Initialized
[2017-05-02 15:57:09]	DEBUG :	Model Class Initialized
[2017-05-02 15:57:09]	DEBUG :	Model Class Initialized
[2017-05-02 15:57:09]	DEBUG :	Model Class Initialized
[2017-05-02 15:57:09]	DEBUG :	Model Class Initialized
[2017-05-02 15:57:09]	DEBUG :	Model Class Initialized
[2017-05-02 15:57:09]	DEBUG :	Model Class Initialized
[2017-05-02 15:57:09]	DEBUG :	Model Class Initialized
[2017-05-02 15:57:09]	DEBUG :	Plugin loaded: to_pdf_pi
[2017-05-02 15:57:09]	DEBUG :	Model Class Initialized
[2017-05-02 15:57:09]	DEBUG :	Language file loaded: language/english/form_validation_lang.php
[2017-05-02 15:57:09]	SQL :	SELECT uid,bid,eid FROM `user` WHERE authkey='1.1.d886b8e8a0615'
[2017-05-02 15:57:09]	DEBUG :	Database Driver Class Initialized
[2017-05-02 15:57:09]	SQL :	SELECT roleid FROM 1_employee
							WHERE eid='1'
							AND bid='1'
[2017-05-02 15:57:09]	DEBUG :	Database Driver Class Initialized
[2017-05-02 15:57:09]	SQL :	SELECT * FROM 1_user_role
							WHERE roleid='1'
							AND bid='1'
[2017-05-02 15:57:09]	SQL :	SELECT m.modid,m.modname,m.moddesc,
							COALESCE(o.opt_add,0) as opt_add,
							COALESCE(o.opt_view,0) as opt_view,
							COALESCE(o.opt_download,0) as opt_download,
							COALESCE(opt_delete,0) as opt_delete 
							FROM module m
							LEFT JOIN (SELECT * FROM 1_role_mod_opt
							WHERE roleid='1' 
							AND bid='1') as o
							ON m.modid=o.modid where m.status=1
[2017-05-02 15:57:09]	SQL :	SELECT a.*,f.fieldname FROM 1_role_access a
								LEFT JOIN systemfields f on a.fieldid=f.fieldid
								WHERE a.roleid='1'
								AND a.bid='1'
								AND a.fieldtype='s'
[2017-05-02 15:57:09]	SQL :	SELECT * FROM 1_role_access
								WHERE roleid='1'
								AND bid='1'
							AND fieldtype='c'
[2017-05-02 15:57:09]	SQL :	SELECT pri.landingnumber,pri.used,pri.climit,
								if(pri.status=0,'Not in use',
								if(pri.type='0','Calltrack',
								if(pri.type='1','IVRS',
								if(pri.type='2','PBX','Not Assign')))) as type,
								pri.associateid,
								if(pri.status=0,'None',
								if(pri.type='0',g.groupname,
								if(pri.type='1',i.title,
								if(pri.type='2',pbx.title,'None')))) as title,
								if(pri.status=0,'None',
								if(pri.type='0',ch.lastcall,
								if(pri.type='1',ih.lastcall,
								if(pri.type='2',ph.lastcall,'None')))) as lastcall
								FROM prinumbers pri
								LEFT JOIN 1_groups g on (g.prinumber=pri.number AND g.gid=pri.associateid AND g.status=1)
								LEFT JOIN 1_ivrs i on (i.prinumber=pri.number AND i.ivrsid=pri.associateid AND i.status=1)
								LEFT JOIN 1_pbx pbx on (pbx.prinumber=pri.number AND pbx.pbxid=pri.associateid AND pbx.status=1)
								LEFT JOIN (SELECT g.gid,max(h.starttime) as lastcall FROM 1_groups g LEFT JOIN 1_callhistory h on g.gid=h.gid GROUP BY g.gid) ch on g.gid=ch.gid
								LEFT JOIN (SELECT i.ivrsid,max(h.datetime) as lastcall FROM 1_ivrs i LEFT JOIN 1_ivrshistory h on i.ivrsid=h.ivrsid GROUP BY i.ivrsid) ih on i.ivrsid=ih.ivrsid
								LEFT JOIN (SELECT p.pbxid,max(h.starttime) as lastcall FROM 1_pbx p LEFT JOIN 1_pbxreport h on p.pbxid=h.pbxid GROUP BY p.pbxid) ph on pbx.pbxid=ph.pbxid
								WHERE pri.bid=1
[2017-05-02 15:57:09]	SQL :	SELECT balance FROM sms_bal  where bid='1'
[2017-05-02 15:57:09]	SQL :	SELECT balance FROM call_bal where bid='1'
[2017-05-02 15:57:09]	SQL :	SELECT DISTINCT(e.eid),e.empname,eb.start_time FROM 1_employee e
		                       LEFT JOIN 1_emp_break eb ON e.eid = eb.eid
		                       LEFT JOIN 1_groups d ON e.eid = d.eid
		                       WHERE eb.end_time='0000-00-00' AND e.selfdisable=1  GROUP BY d.gid,e.eid
[2017-05-02 15:57:09]	SQL :	SELECT COALESCE(COUNT(callid), 0) AS day 
							FROM 1_callhistory h 
							LEFT JOIN 1_groups d ON d.gid = h.gid 
							WHERE 1 AND (DATE(h.`starttime`) = DATE(NOW()))
[2017-05-02 15:57:09]	SQL :	SELECT COALESCE(COUNT(callid), 0) AS day 
							FROM 1_callhistory h 
							LEFT JOIN 1_groups d ON d.gid = h.gid 
							WHERE 1  AND (DATE(h.`starttime`)  > DATE(DATE_SUB(NOW(), INTERVAL 1 WEEK)))
[2017-05-02 15:57:09]	SQL :	SELECT COALESCE(COUNT(callid), 0) AS day 
							FROM 1_callhistory h 
							LEFT JOIN 1_groups d ON d.gid = h.gid 
							WHERE 1  AND (MONTH(h.`starttime` ) = MONTH(NOW()))
[2017-05-02 15:57:09]	SQL :	SELECT COALESCE(COUNT(pbxid), 0) AS day 
							FROM 1_pbxreport h 
							WHERE 1 AND (DATE(h.`starttime`) = DATE(NOW()))
[2017-05-02 15:57:09]	SQL :	SELECT COALESCE(COUNT(pbxid), 0) AS day 
							FROM 1_pbxreport h 
							WHERE 1  AND (DATE(h.`starttime`)  > DATE(DATE_SUB(NOW(), INTERVAL 1 WEEK)))
[2017-05-02 15:57:09]	SQL :	SELECT COALESCE(COUNT(pbxid), 0) AS day 
							FROM 1_pbxreport h 
							WHERE 1  AND (MONTH(h.`starttime` ) = MONTH(NOW()))
[2017-05-02 15:57:09]	SQL :	SELECT COALESCE(COUNT(hid), 0) AS day 
							   FROM 1_ivrshistory h 
						       WHERE 1 AND (DATE(h.`datetime`) = DATE(NOW()))
[2017-05-02 15:57:09]	SQL :	SELECT COALESCE(COUNT(hid), 0) AS day 
							   FROM 1_ivrshistory h 
						       WHERE 1  AND (DATE(h.`datetime`)  > DATE(DATE_SUB(NOW(), INTERVAL 1 WEEK)))
[2017-05-02 15:57:09]	SQL :	SELECT COALESCE(COUNT(hid), 0) AS day 
							   FROM 1_ivrshistory h 
						       WHERE 1  AND (MONTH(h.`datetime` ) = MONTH(NOW()))
[2017-05-02 15:57:09]	SQL :	SELECT COALESCE(COUNT(leadid), 0) AS day 
							FROM 1_leads a 
							LEFT JOIN 1_leads_groups d ON d.gid = a.gid 
							WHERE (DATE(a.`createdon`) = DATE(NOW()))
[2017-05-02 15:57:09]	SQL :	SELECT COALESCE(COUNT(leadid), 0) AS day 
							FROM 1_leads a 
							LEFT JOIN 1_leads_groups d ON d.gid = a.gid 
							WHERE (DATE(a.`createdon`) = DATE(NOW()))
[2017-05-02 15:57:09]	SQL :	SELECT COALESCE(COUNT(leadid), 0) AS day 
							FROM 1_leads a 
							LEFT JOIN 1_leads_groups d ON d.gid = a.gid 
							WHERE (DATE(a.`createdon`) = DATE(NOW()))
[2017-05-02 15:57:09]	SQL :	SELECT COALESCE(COUNT(tktid), 0) AS day 
							FROM 1_support_tickets a 
							LEFT JOIN 1_support_groups d ON d.gid = a.gid 
							WHERE (DATE(a.`createdon`) = DATE(NOW()))
[2017-05-02 15:57:09]	SQL :	SELECT COALESCE(COUNT(tktid), 0) AS day 
							FROM 1_support_tickets a 
							LEFT JOIN 1_support_groups d ON d.gid = a.gid 
							WHERE (DATE(a.`createdon`) = DATE(NOW()))
[2017-05-02 15:57:09]	SQL :	SELECT COALESCE(COUNT(tktid), 0) AS day 
							FROM 1_support_tickets a 
							LEFT JOIN 1_support_groups d ON d.gid = a.gid 
							WHERE (DATE(a.`createdon`) = DATE(NOW()))
[2017-05-02 15:57:09]	SQL :	SELECT COALESCE(COUNT(callid), 0) AS day 
							FROM 1_outboundcalls h 
							WHERE (DATE(h.`starttime`) = DATE(NOW()))
[2017-05-02 15:57:09]	SQL :	SELECT COALESCE(COUNT(callid), 0) AS day 
							FROM 1_outboundcalls h 
							WHERE (DATE(h.`starttime`) = DATE(NOW()))
[2017-05-02 15:57:09]	SQL :	SELECT COALESCE(COUNT(callid), 0) AS day 
							FROM 1_outboundcalls h 
							WHERE (DATE(h.`starttime`) = DATE(NOW()))
[2017-05-02 15:57:09]	SQL :	SELECT COALESCE(COUNT(callid), 0) AS day 
							FROM 1_mtracker h 
							WHERE (DATE(h.`starttime`) = DATE(NOW()))
[2017-05-02 15:57:09]	SQL :	SELECT COALESCE(COUNT(callid), 0) AS day 
							FROM 1_mtracker h 
							WHERE (DATE(h.`starttime`) = DATE(NOW()))
[2017-05-02 15:57:09]	SQL :	SELECT COALESCE(COUNT(callid), 0) AS day 
							FROM 1_mtracker h 
							WHERE (DATE(h.`starttime`) = DATE(NOW()))
[2017-05-02 15:57:11]	DEBUG :	Config Class Initialized
[2017-05-02 15:57:11]	DEBUG :	Hooks Class Initialized
[2017-05-02 15:57:11]	DEBUG :	URI Class Initialized
[2017-05-02 15:57:11]	DEBUG :	Router Class Initialized
[2017-05-02 15:57:11]	DEBUG :	Output Class Initialized
[2017-05-02 15:57:11]	DEBUG :	Input Class Initialized
[2017-05-02 15:57:11]	DEBUG :	Global POST and COOKIE data sanitized
[2017-05-02 15:57:11]	DEBUG :	Language Class Initialized
[2017-05-02 15:57:11]	DEBUG :	Loader Class Initialized
[2017-05-02 15:57:11]	DEBUG :	Helper loaded: url_helper
[2017-05-02 15:57:11]	DEBUG :	Helper loaded: form_helper
[2017-05-02 15:57:11]	DEBUG :	Helper loaded: html_helper
[2017-05-02 15:57:11]	DEBUG :	Helper loaded: email_helper
[2017-05-02 15:57:11]	DEBUG :	Helper loaded: ckeditor_helper
[2017-05-02 15:57:11]	DEBUG :	Helper loaded: mcube_helper
[2017-05-02 15:57:11]	DEBUG :	Database Driver Class Initialized
[2017-05-02 15:57:11]	ERROR :	Severity: 8192  --> mysql_pconnect(): The mysql extension is deprecated and will be removed in the future: use mysqli or PDO instead /var/www/html/mcnew/system/database/drivers/mysql/mysql_driver.php 88
[2017-05-02 15:57:11]	DEBUG :	Session Class Initialized
[2017-05-02 15:57:11]	DEBUG :	Helper loaded: string_helper
[2017-05-02 15:57:11]	DEBUG :	Encrypt Class Initialized
[2017-05-02 15:57:11]	DEBUG :	A session cookie was not found.
[2017-05-02 15:57:11]	SQL :	INSERT INTO `call_sessions` (`session_id`, `ip_address`, `user_agent`, `last_activity`) VALUES ('2e6cf4f7c07962f9e12513defa7e80b7', '192.168.1.114', 'Dalvik/2.1.0 (Linux; U; Android 6.0; Panasonic T44', 1493720831)
[2017-05-02 15:57:11]	DEBUG :	Session routines successfully run
[2017-05-02 15:57:11]	DEBUG :	Table Class Initialized
[2017-05-02 15:57:11]	DEBUG :	Pagination Class Initialized
[2017-05-02 15:57:11]	DEBUG :	Config file loaded: config/paypallib_config.php
[2017-05-02 15:57:11]	DEBUG :	Form Validation Class Initialized
[2017-05-02 15:57:11]	DEBUG :	Email Class Initialized
[2017-05-02 15:57:11]	DEBUG :	Language file loaded: language/english/calendar_lang.php
[2017-05-02 15:57:11]	DEBUG :	Calendar Class Initialized
[2017-05-02 15:57:11]	DEBUG :	Controller Class Initialized
[2017-05-02 15:57:11]	DEBUG :	Model Class Initialized
[2017-05-02 15:57:11]	DEBUG :	Model Class Initialized
[2017-05-02 15:57:11]	DEBUG :	Model Class Initialized
[2017-05-02 15:57:11]	DEBUG :	Model Class Initialized
[2017-05-02 15:57:11]	DEBUG :	Model Class Initialized
[2017-05-02 15:57:11]	DEBUG :	Model Class Initialized
[2017-05-02 15:57:11]	DEBUG :	Model Class Initialized
[2017-05-02 15:57:11]	DEBUG :	Model Class Initialized
[2017-05-02 15:57:11]	DEBUG :	Model Class Initialized
[2017-05-02 15:57:11]	DEBUG :	Model Class Initialized
[2017-05-02 15:57:11]	DEBUG :	Model Class Initialized
[2017-05-02 15:57:11]	DEBUG :	Model Class Initialized
[2017-05-02 15:57:11]	DEBUG :	Model Class Initialized
[2017-05-02 15:57:11]	DEBUG :	Model Class Initialized
[2017-05-02 15:57:11]	DEBUG :	Plugin loaded: to_pdf_pi
[2017-05-02 15:57:11]	DEBUG :	Model Class Initialized
[2017-05-02 15:57:11]	DEBUG :	Language file loaded: language/english/form_validation_lang.php
[2017-05-02 15:57:11]	SQL :	SELECT uid,bid,eid FROM `user` WHERE authkey='1.1.d886b8e8a0615'
[2017-05-02 15:57:11]	DEBUG :	Database Driver Class Initialized
[2017-05-02 15:57:11]	SQL :	SELECT roleid FROM 1_employee
							WHERE eid='1'
							AND bid='1'
[2017-05-02 15:57:11]	DEBUG :	Database Driver Class Initialized
[2017-05-02 15:57:11]	SQL :	SELECT * FROM 1_user_role
							WHERE roleid='1'
							AND bid='1'
[2017-05-02 15:57:11]	SQL :	SELECT m.modid,m.modname,m.moddesc,
							COALESCE(o.opt_add,0) as opt_add,
							COALESCE(o.opt_view,0) as opt_view,
							COALESCE(o.opt_download,0) as opt_download,
							COALESCE(opt_delete,0) as opt_delete 
							FROM module m
							LEFT JOIN (SELECT * FROM 1_role_mod_opt
							WHERE roleid='1' 
							AND bid='1') as o
							ON m.modid=o.modid where m.status=1
[2017-05-02 15:57:11]	SQL :	SELECT a.*,f.fieldname FROM 1_role_access a
								LEFT JOIN systemfields f on a.fieldid=f.fieldid
								WHERE a.roleid='1'
								AND a.bid='1'
								AND a.fieldtype='s'
[2017-05-02 15:57:11]	SQL :	SELECT * FROM 1_role_access
								WHERE roleid='1'
								AND bid='1'
							AND fieldtype='c'
[2017-05-02 15:57:11]	SQL :	SELECT pri.landingnumber,pri.used,pri.climit,
								if(pri.status=0,'Not in use',
								if(pri.type='0','Calltrack',
								if(pri.type='1','IVRS',
								if(pri.type='2','PBX','Not Assign')))) as type,
								pri.associateid,
								if(pri.status=0,'None',
								if(pri.type='0',g.groupname,
								if(pri.type='1',i.title,
								if(pri.type='2',pbx.title,'None')))) as title,
								if(pri.status=0,'None',
								if(pri.type='0',ch.lastcall,
								if(pri.type='1',ih.lastcall,
								if(pri.type='2',ph.lastcall,'None')))) as lastcall
								FROM prinumbers pri
								LEFT JOIN 1_groups g on (g.prinumber=pri.number AND g.gid=pri.associateid AND g.status=1)
								LEFT JOIN 1_ivrs i on (i.prinumber=pri.number AND i.ivrsid=pri.associateid AND i.status=1)
								LEFT JOIN 1_pbx pbx on (pbx.prinumber=pri.number AND pbx.pbxid=pri.associateid AND pbx.status=1)
								LEFT JOIN (SELECT g.gid,max(h.starttime) as lastcall FROM 1_groups g LEFT JOIN 1_callhistory h on g.gid=h.gid GROUP BY g.gid) ch on g.gid=ch.gid
								LEFT JOIN (SELECT i.ivrsid,max(h.datetime) as lastcall FROM 1_ivrs i LEFT JOIN 1_ivrshistory h on i.ivrsid=h.ivrsid GROUP BY i.ivrsid) ih on i.ivrsid=ih.ivrsid
								LEFT JOIN (SELECT p.pbxid,max(h.starttime) as lastcall FROM 1_pbx p LEFT JOIN 1_pbxreport h on p.pbxid=h.pbxid GROUP BY p.pbxid) ph on pbx.pbxid=ph.pbxid
								WHERE pri.bid=1
[2017-05-02 15:57:11]	SQL :	SELECT balance FROM sms_bal  where bid='1'
[2017-05-02 15:57:11]	SQL :	SELECT balance FROM call_bal where bid='1'
[2017-05-02 15:57:11]	SQL :	SELECT DISTINCT(e.eid),e.empname,eb.start_time FROM 1_employee e
		                       LEFT JOIN 1_emp_break eb ON e.eid = eb.eid
		                       LEFT JOIN 1_groups d ON e.eid = d.eid
		                       WHERE eb.end_time='0000-00-00' AND e.selfdisable=1  GROUP BY d.gid,e.eid
[2017-05-02 15:57:11]	SQL :	SELECT COALESCE(COUNT(callid), 0) AS day 
							FROM 1_callhistory h 
							LEFT JOIN 1_groups d ON d.gid = h.gid 
							WHERE 1 AND (DATE(h.`starttime`) = DATE(NOW()))
[2017-05-02 15:57:11]	SQL :	SELECT COALESCE(COUNT(callid), 0) AS day 
							FROM 1_callhistory h 
							LEFT JOIN 1_groups d ON d.gid = h.gid 
							WHERE 1  AND (DATE(h.`starttime`)  > DATE(DATE_SUB(NOW(), INTERVAL 1 WEEK)))
[2017-05-02 15:57:11]	SQL :	SELECT COALESCE(COUNT(callid), 0) AS day 
							FROM 1_callhistory h 
							LEFT JOIN 1_groups d ON d.gid = h.gid 
							WHERE 1  AND (MONTH(h.`starttime` ) = MONTH(NOW()))
[2017-05-02 15:57:11]	SQL :	SELECT COALESCE(COUNT(pbxid), 0) AS day 
							FROM 1_pbxreport h 
							WHERE 1 AND (DATE(h.`starttime`) = DATE(NOW()))
[2017-05-02 15:57:11]	SQL :	SELECT COALESCE(COUNT(pbxid), 0) AS day 
							FROM 1_pbxreport h 
							WHERE 1  AND (DATE(h.`starttime`)  > DATE(DATE_SUB(NOW(), INTERVAL 1 WEEK)))
[2017-05-02 15:57:11]	SQL :	SELECT COALESCE(COUNT(pbxid), 0) AS day 
							FROM 1_pbxreport h 
							WHERE 1  AND (MONTH(h.`starttime` ) = MONTH(NOW()))
[2017-05-02 15:57:11]	SQL :	SELECT COALESCE(COUNT(hid), 0) AS day 
							   FROM 1_ivrshistory h 
						       WHERE 1 AND (DATE(h.`datetime`) = DATE(NOW()))
[2017-05-02 15:57:11]	SQL :	SELECT COALESCE(COUNT(hid), 0) AS day 
							   FROM 1_ivrshistory h 
						       WHERE 1  AND (DATE(h.`datetime`)  > DATE(DATE_SUB(NOW(), INTERVAL 1 WEEK)))
[2017-05-02 15:57:11]	SQL :	SELECT COALESCE(COUNT(hid), 0) AS day 
							   FROM 1_ivrshistory h 
						       WHERE 1  AND (MONTH(h.`datetime` ) = MONTH(NOW()))
[2017-05-02 15:57:11]	SQL :	SELECT COALESCE(COUNT(leadid), 0) AS day 
							FROM 1_leads a 
							LEFT JOIN 1_leads_groups d ON d.gid = a.gid 
							WHERE (DATE(a.`createdon`) = DATE(NOW()))
[2017-05-02 15:57:11]	SQL :	SELECT COALESCE(COUNT(leadid), 0) AS day 
							FROM 1_leads a 
							LEFT JOIN 1_leads_groups d ON d.gid = a.gid 
							WHERE (DATE(a.`createdon`) = DATE(NOW()))
[2017-05-02 15:57:11]	SQL :	SELECT COALESCE(COUNT(leadid), 0) AS day 
							FROM 1_leads a 
							LEFT JOIN 1_leads_groups d ON d.gid = a.gid 
							WHERE (DATE(a.`createdon`) = DATE(NOW()))
[2017-05-02 15:57:11]	SQL :	SELECT COALESCE(COUNT(tktid), 0) AS day 
							FROM 1_support_tickets a 
							LEFT JOIN 1_support_groups d ON d.gid = a.gid 
							WHERE (DATE(a.`createdon`) = DATE(NOW()))
[2017-05-02 15:57:11]	SQL :	SELECT COALESCE(COUNT(tktid), 0) AS day 
							FROM 1_support_tickets a 
							LEFT JOIN 1_support_groups d ON d.gid = a.gid 
							WHERE (DATE(a.`createdon`) = DATE(NOW()))
[2017-05-02 15:57:11]	SQL :	SELECT COALESCE(COUNT(tktid), 0) AS day 
							FROM 1_support_tickets a 
							LEFT JOIN 1_support_groups d ON d.gid = a.gid 
							WHERE (DATE(a.`createdon`) = DATE(NOW()))
[2017-05-02 15:57:11]	SQL :	SELECT COALESCE(COUNT(callid), 0) AS day 
							FROM 1_outboundcalls h 
							WHERE (DATE(h.`starttime`) = DATE(NOW()))
[2017-05-02 15:57:11]	SQL :	SELECT COALESCE(COUNT(callid), 0) AS day 
							FROM 1_outboundcalls h 
							WHERE (DATE(h.`starttime`) = DATE(NOW()))
[2017-05-02 15:57:11]	SQL :	SELECT COALESCE(COUNT(callid), 0) AS day 
							FROM 1_outboundcalls h 
							WHERE (DATE(h.`starttime`) = DATE(NOW()))
[2017-05-02 15:57:11]	SQL :	SELECT COALESCE(COUNT(callid), 0) AS day 
							FROM 1_mtracker h 
							WHERE (DATE(h.`starttime`) = DATE(NOW()))
[2017-05-02 15:57:11]	SQL :	SELECT COALESCE(COUNT(callid), 0) AS day 
							FROM 1_mtracker h 
							WHERE (DATE(h.`starttime`) = DATE(NOW()))
[2017-05-02 15:57:11]	SQL :	SELECT COALESCE(COUNT(callid), 0) AS day 
							FROM 1_mtracker h 
							WHERE (DATE(h.`starttime`) = DATE(NOW()))
[2017-05-02 15:57:12]	DEBUG :	Config Class Initialized
[2017-05-02 15:57:12]	DEBUG :	Hooks Class Initialized
[2017-05-02 15:57:12]	DEBUG :	URI Class Initialized
[2017-05-02 15:57:12]	DEBUG :	Router Class Initialized
[2017-05-02 15:57:12]	DEBUG :	Output Class Initialized
[2017-05-02 15:57:12]	DEBUG :	Input Class Initialized
[2017-05-02 15:57:12]	DEBUG :	Global POST and COOKIE data sanitized
[2017-05-02 15:57:12]	DEBUG :	Language Class Initialized
[2017-05-02 15:57:12]	DEBUG :	Loader Class Initialized
[2017-05-02 15:57:12]	DEBUG :	Helper loaded: url_helper
[2017-05-02 15:57:12]	DEBUG :	Helper loaded: form_helper
[2017-05-02 15:57:12]	DEBUG :	Helper loaded: html_helper
[2017-05-02 15:57:12]	DEBUG :	Helper loaded: email_helper
[2017-05-02 15:57:12]	DEBUG :	Helper loaded: ckeditor_helper
[2017-05-02 15:57:12]	DEBUG :	Helper loaded: mcube_helper
[2017-05-02 15:57:12]	DEBUG :	Database Driver Class Initialized
[2017-05-02 15:57:12]	ERROR :	Severity: 8192  --> mysql_pconnect(): The mysql extension is deprecated and will be removed in the future: use mysqli or PDO instead /var/www/html/mcnew/system/database/drivers/mysql/mysql_driver.php 88
[2017-05-02 15:57:12]	DEBUG :	Session Class Initialized
[2017-05-02 15:57:12]	DEBUG :	Helper loaded: string_helper
[2017-05-02 15:57:12]	DEBUG :	Encrypt Class Initialized
[2017-05-02 15:57:12]	DEBUG :	A session cookie was not found.
[2017-05-02 15:57:12]	SQL :	INSERT INTO `call_sessions` (`session_id`, `ip_address`, `user_agent`, `last_activity`) VALUES ('0da324f2b1e707c62d5815ab31b0f0df', '192.168.1.114', 'Dalvik/2.1.0 (Linux; U; Android 6.0; Panasonic T44', 1493720832)
[2017-05-02 15:57:12]	DEBUG :	Session routines successfully run
[2017-05-02 15:57:12]	DEBUG :	Table Class Initialized
[2017-05-02 15:57:12]	DEBUG :	Pagination Class Initialized
[2017-05-02 15:57:12]	DEBUG :	Config file loaded: config/paypallib_config.php
[2017-05-02 15:57:12]	DEBUG :	Form Validation Class Initialized
[2017-05-02 15:57:12]	DEBUG :	Email Class Initialized
[2017-05-02 15:57:12]	DEBUG :	Language file loaded: language/english/calendar_lang.php
[2017-05-02 15:57:12]	DEBUG :	Calendar Class Initialized
[2017-05-02 15:57:12]	DEBUG :	Controller Class Initialized
[2017-05-02 15:57:12]	DEBUG :	Model Class Initialized
[2017-05-02 15:57:12]	DEBUG :	Model Class Initialized
[2017-05-02 15:57:12]	DEBUG :	Model Class Initialized
[2017-05-02 15:57:12]	DEBUG :	Model Class Initialized
[2017-05-02 15:57:12]	DEBUG :	Model Class Initialized
[2017-05-02 15:57:12]	DEBUG :	Model Class Initialized
[2017-05-02 15:57:12]	DEBUG :	Model Class Initialized
[2017-05-02 15:57:12]	DEBUG :	Model Class Initialized
[2017-05-02 15:57:12]	DEBUG :	Model Class Initialized
[2017-05-02 15:57:12]	DEBUG :	Model Class Initialized
[2017-05-02 15:57:12]	DEBUG :	Model Class Initialized
[2017-05-02 15:57:12]	DEBUG :	Model Class Initialized
[2017-05-02 15:57:12]	DEBUG :	Model Class Initialized
[2017-05-02 15:57:12]	DEBUG :	Model Class Initialized
[2017-05-02 15:57:12]	DEBUG :	Plugin loaded: to_pdf_pi
[2017-05-02 15:57:12]	DEBUG :	Model Class Initialized
[2017-05-02 15:57:12]	DEBUG :	Language file loaded: language/english/form_validation_lang.php
[2017-05-02 15:57:12]	SQL :	SELECT uid,bid,eid FROM `user` WHERE authkey='1.1.d886b8e8a0615'
[2017-05-02 15:57:12]	DEBUG :	Database Driver Class Initialized
[2017-05-02 15:57:12]	SQL :	SELECT roleid FROM 1_employee
							WHERE eid='1'
							AND bid='1'
[2017-05-02 15:57:12]	DEBUG :	Database Driver Class Initialized
[2017-05-02 15:57:12]	SQL :	SELECT * FROM 1_user_role
							WHERE roleid='1'
							AND bid='1'
[2017-05-02 15:57:12]	SQL :	SELECT m.modid,m.modname,m.moddesc,
							COALESCE(o.opt_add,0) as opt_add,
							COALESCE(o.opt_view,0) as opt_view,
							COALESCE(o.opt_download,0) as opt_download,
							COALESCE(opt_delete,0) as opt_delete 
							FROM module m
							LEFT JOIN (SELECT * FROM 1_role_mod_opt
							WHERE roleid='1' 
							AND bid='1') as o
							ON m.modid=o.modid where m.status=1
[2017-05-02 15:57:12]	SQL :	SELECT a.*,f.fieldname FROM 1_role_access a
								LEFT JOIN systemfields f on a.fieldid=f.fieldid
								WHERE a.roleid='1'
								AND a.bid='1'
								AND a.fieldtype='s'
[2017-05-02 15:57:12]	SQL :	SELECT * FROM 1_role_access
								WHERE roleid='1'
								AND bid='1'
							AND fieldtype='c'
[2017-05-02 15:57:12]	SQL :	SELECT pri.landingnumber,pri.used,pri.climit,
								if(pri.status=0,'Not in use',
								if(pri.type='0','Calltrack',
								if(pri.type='1','IVRS',
								if(pri.type='2','PBX','Not Assign')))) as type,
								pri.associateid,
								if(pri.status=0,'None',
								if(pri.type='0',g.groupname,
								if(pri.type='1',i.title,
								if(pri.type='2',pbx.title,'None')))) as title,
								if(pri.status=0,'None',
								if(pri.type='0',ch.lastcall,
								if(pri.type='1',ih.lastcall,
								if(pri.type='2',ph.lastcall,'None')))) as lastcall
								FROM prinumbers pri
								LEFT JOIN 1_groups g on (g.prinumber=pri.number AND g.gid=pri.associateid AND g.status=1)
								LEFT JOIN 1_ivrs i on (i.prinumber=pri.number AND i.ivrsid=pri.associateid AND i.status=1)
								LEFT JOIN 1_pbx pbx on (pbx.prinumber=pri.number AND pbx.pbxid=pri.associateid AND pbx.status=1)
								LEFT JOIN (SELECT g.gid,max(h.starttime) as lastcall FROM 1_groups g LEFT JOIN 1_callhistory h on g.gid=h.gid GROUP BY g.gid) ch on g.gid=ch.gid
								LEFT JOIN (SELECT i.ivrsid,max(h.datetime) as lastcall FROM 1_ivrs i LEFT JOIN 1_ivrshistory h on i.ivrsid=h.ivrsid GROUP BY i.ivrsid) ih on i.ivrsid=ih.ivrsid
								LEFT JOIN (SELECT p.pbxid,max(h.starttime) as lastcall FROM 1_pbx p LEFT JOIN 1_pbxreport h on p.pbxid=h.pbxid GROUP BY p.pbxid) ph on pbx.pbxid=ph.pbxid
								WHERE pri.bid=1
[2017-05-02 15:57:12]	SQL :	SELECT balance FROM sms_bal  where bid='1'
[2017-05-02 15:57:12]	SQL :	SELECT balance FROM call_bal where bid='1'
[2017-05-02 15:57:12]	SQL :	SELECT DISTINCT(e.eid),e.empname,eb.start_time FROM 1_employee e
		                       LEFT JOIN 1_emp_break eb ON e.eid = eb.eid
		                       LEFT JOIN 1_groups d ON e.eid = d.eid
		                       WHERE eb.end_time='0000-00-00' AND e.selfdisable=1  GROUP BY d.gid,e.eid
[2017-05-02 15:57:12]	SQL :	SELECT COALESCE(COUNT(callid), 0) AS day 
							FROM 1_callhistory h 
							LEFT JOIN 1_groups d ON d.gid = h.gid 
							WHERE 1 AND (DATE(h.`starttime`) = DATE(NOW()))
[2017-05-02 15:57:12]	SQL :	SELECT COALESCE(COUNT(callid), 0) AS day 
							FROM 1_callhistory h 
							LEFT JOIN 1_groups d ON d.gid = h.gid 
							WHERE 1  AND (DATE(h.`starttime`)  > DATE(DATE_SUB(NOW(), INTERVAL 1 WEEK)))
[2017-05-02 15:57:12]	SQL :	SELECT COALESCE(COUNT(callid), 0) AS day 
							FROM 1_callhistory h 
							LEFT JOIN 1_groups d ON d.gid = h.gid 
							WHERE 1  AND (MONTH(h.`starttime` ) = MONTH(NOW()))
[2017-05-02 15:57:12]	SQL :	SELECT COALESCE(COUNT(pbxid), 0) AS day 
							FROM 1_pbxreport h 
							WHERE 1 AND (DATE(h.`starttime`) = DATE(NOW()))
[2017-05-02 15:57:12]	SQL :	SELECT COALESCE(COUNT(pbxid), 0) AS day 
							FROM 1_pbxreport h 
							WHERE 1  AND (DATE(h.`starttime`)  > DATE(DATE_SUB(NOW(), INTERVAL 1 WEEK)))
[2017-05-02 15:57:12]	SQL :	SELECT COALESCE(COUNT(pbxid), 0) AS day 
							FROM 1_pbxreport h 
							WHERE 1  AND (MONTH(h.`starttime` ) = MONTH(NOW()))
[2017-05-02 15:57:12]	SQL :	SELECT COALESCE(COUNT(hid), 0) AS day 
							   FROM 1_ivrshistory h 
						       WHERE 1 AND (DATE(h.`datetime`) = DATE(NOW()))
[2017-05-02 15:57:12]	SQL :	SELECT COALESCE(COUNT(hid), 0) AS day 
							   FROM 1_ivrshistory h 
						       WHERE 1  AND (DATE(h.`datetime`)  > DATE(DATE_SUB(NOW(), INTERVAL 1 WEEK)))
[2017-05-02 15:57:12]	SQL :	SELECT COALESCE(COUNT(hid), 0) AS day 
							   FROM 1_ivrshistory h 
						       WHERE 1  AND (MONTH(h.`datetime` ) = MONTH(NOW()))
[2017-05-02 15:57:12]	SQL :	SELECT COALESCE(COUNT(leadid), 0) AS day 
							FROM 1_leads a 
							LEFT JOIN 1_leads_groups d ON d.gid = a.gid 
							WHERE (DATE(a.`createdon`) = DATE(NOW()))
[2017-05-02 15:57:12]	SQL :	SELECT COALESCE(COUNT(leadid), 0) AS day 
							FROM 1_leads a 
							LEFT JOIN 1_leads_groups d ON d.gid = a.gid 
							WHERE (DATE(a.`createdon`) = DATE(NOW()))
[2017-05-02 15:57:12]	SQL :	SELECT COALESCE(COUNT(leadid), 0) AS day 
							FROM 1_leads a 
							LEFT JOIN 1_leads_groups d ON d.gid = a.gid 
							WHERE (DATE(a.`createdon`) = DATE(NOW()))
[2017-05-02 15:57:12]	SQL :	SELECT COALESCE(COUNT(tktid), 0) AS day 
							FROM 1_support_tickets a 
							LEFT JOIN 1_support_groups d ON d.gid = a.gid 
							WHERE (DATE(a.`createdon`) = DATE(NOW()))
[2017-05-02 15:57:12]	SQL :	SELECT COALESCE(COUNT(tktid), 0) AS day 
							FROM 1_support_tickets a 
							LEFT JOIN 1_support_groups d ON d.gid = a.gid 
							WHERE (DATE(a.`createdon`) = DATE(NOW()))
[2017-05-02 15:57:12]	SQL :	SELECT COALESCE(COUNT(tktid), 0) AS day 
							FROM 1_support_tickets a 
							LEFT JOIN 1_support_groups d ON d.gid = a.gid 
							WHERE (DATE(a.`createdon`) = DATE(NOW()))
[2017-05-02 15:57:12]	SQL :	SELECT COALESCE(COUNT(callid), 0) AS day 
							FROM 1_outboundcalls h 
							WHERE (DATE(h.`starttime`) = DATE(NOW()))
[2017-05-02 15:57:12]	SQL :	SELECT COALESCE(COUNT(callid), 0) AS day 
							FROM 1_outboundcalls h 
							WHERE (DATE(h.`starttime`) = DATE(NOW()))
[2017-05-02 15:57:12]	SQL :	SELECT COALESCE(COUNT(callid), 0) AS day 
							FROM 1_outboundcalls h 
							WHERE (DATE(h.`starttime`) = DATE(NOW()))
[2017-05-02 15:57:12]	SQL :	SELECT COALESCE(COUNT(callid), 0) AS day 
							FROM 1_mtracker h 
							WHERE (DATE(h.`starttime`) = DATE(NOW()))
[2017-05-02 15:57:12]	SQL :	SELECT COALESCE(COUNT(callid), 0) AS day 
							FROM 1_mtracker h 
							WHERE (DATE(h.`starttime`) = DATE(NOW()))
[2017-05-02 15:57:12]	SQL :	SELECT COALESCE(COUNT(callid), 0) AS day 
							FROM 1_mtracker h 
							WHERE (DATE(h.`starttime`) = DATE(NOW()))
[2017-05-02 15:57:16]	DEBUG :	Config Class Initialized
[2017-05-02 15:57:16]	DEBUG :	Hooks Class Initialized
[2017-05-02 15:57:16]	DEBUG :	URI Class Initialized
[2017-05-02 15:57:16]	DEBUG :	Router Class Initialized
[2017-05-02 15:57:16]	DEBUG :	Output Class Initialized
[2017-05-02 15:57:16]	DEBUG :	Input Class Initialized
[2017-05-02 15:57:16]	DEBUG :	Global POST and COOKIE data sanitized
[2017-05-02 15:57:16]	DEBUG :	Language Class Initialized
[2017-05-02 15:57:16]	DEBUG :	Loader Class Initialized
[2017-05-02 15:57:16]	DEBUG :	Helper loaded: url_helper
[2017-05-02 15:57:16]	DEBUG :	Helper loaded: form_helper
[2017-05-02 15:57:16]	DEBUG :	Helper loaded: html_helper
[2017-05-02 15:57:16]	DEBUG :	Helper loaded: email_helper
[2017-05-02 15:57:16]	DEBUG :	Helper loaded: ckeditor_helper
[2017-05-02 15:57:16]	DEBUG :	Helper loaded: mcube_helper
[2017-05-02 15:57:16]	DEBUG :	Database Driver Class Initialized
[2017-05-02 15:57:16]	ERROR :	Severity: 8192  --> mysql_pconnect(): The mysql extension is deprecated and will be removed in the future: use mysqli or PDO instead /var/www/html/mcnew/system/database/drivers/mysql/mysql_driver.php 88
[2017-05-02 15:57:16]	DEBUG :	Session Class Initialized
[2017-05-02 15:57:16]	DEBUG :	Helper loaded: string_helper
[2017-05-02 15:57:16]	DEBUG :	Encrypt Class Initialized
[2017-05-02 15:57:16]	DEBUG :	A session cookie was not found.
[2017-05-02 15:57:16]	SQL :	INSERT INTO `call_sessions` (`session_id`, `ip_address`, `user_agent`, `last_activity`) VALUES ('007a475074a30823decba74cd1e205d5', '192.168.1.114', 'Dalvik/2.1.0 (Linux; U; Android 6.0; Panasonic T44', 1493720836)
[2017-05-02 15:57:16]	DEBUG :	Session routines successfully run
[2017-05-02 15:57:16]	DEBUG :	Table Class Initialized
[2017-05-02 15:57:16]	DEBUG :	Pagination Class Initialized
[2017-05-02 15:57:16]	DEBUG :	Config file loaded: config/paypallib_config.php
[2017-05-02 15:57:16]	DEBUG :	Form Validation Class Initialized
[2017-05-02 15:57:16]	DEBUG :	Email Class Initialized
[2017-05-02 15:57:16]	DEBUG :	Language file loaded: language/english/calendar_lang.php
[2017-05-02 15:57:16]	DEBUG :	Calendar Class Initialized
[2017-05-02 15:57:16]	DEBUG :	Controller Class Initialized
[2017-05-02 15:57:16]	DEBUG :	Model Class Initialized
[2017-05-02 15:57:16]	DEBUG :	Model Class Initialized
[2017-05-02 15:57:16]	DEBUG :	Model Class Initialized
[2017-05-02 15:57:16]	DEBUG :	Model Class Initialized
[2017-05-02 15:57:16]	DEBUG :	Model Class Initialized
[2017-05-02 15:57:16]	DEBUG :	Model Class Initialized
[2017-05-02 15:57:16]	DEBUG :	Model Class Initialized
[2017-05-02 15:57:16]	DEBUG :	Model Class Initialized
[2017-05-02 15:57:16]	DEBUG :	Model Class Initialized
[2017-05-02 15:57:16]	DEBUG :	Model Class Initialized
[2017-05-02 15:57:16]	DEBUG :	Model Class Initialized
[2017-05-02 15:57:16]	DEBUG :	Model Class Initialized
[2017-05-02 15:57:16]	DEBUG :	Model Class Initialized
[2017-05-02 15:57:16]	DEBUG :	Model Class Initialized
[2017-05-02 15:57:16]	DEBUG :	Plugin loaded: to_pdf_pi
[2017-05-02 15:57:16]	DEBUG :	Model Class Initialized
[2017-05-02 15:57:16]	DEBUG :	Language file loaded: language/english/form_validation_lang.php
[2017-05-02 15:57:16]	SQL :	SELECT uid,bid,eid FROM `user` WHERE authkey='1.1.d886b8e8a0615'
[2017-05-02 15:57:16]	DEBUG :	Database Driver Class Initialized
[2017-05-02 15:57:16]	SQL :	SELECT roleid FROM 1_employee
							WHERE eid='1'
							AND bid='1'
[2017-05-02 15:57:16]	DEBUG :	Database Driver Class Initialized
[2017-05-02 15:57:16]	SQL :	SELECT * FROM 1_user_role
							WHERE roleid='1'
							AND bid='1'
[2017-05-02 15:57:16]	SQL :	SELECT m.modid,m.modname,m.moddesc,
							COALESCE(o.opt_add,0) as opt_add,
							COALESCE(o.opt_view,0) as opt_view,
							COALESCE(o.opt_download,0) as opt_download,
							COALESCE(opt_delete,0) as opt_delete 
							FROM module m
							LEFT JOIN (SELECT * FROM 1_role_mod_opt
							WHERE roleid='1' 
							AND bid='1') as o
							ON m.modid=o.modid where m.status=1
[2017-05-02 15:57:16]	SQL :	SELECT a.*,f.fieldname FROM 1_role_access a
								LEFT JOIN systemfields f on a.fieldid=f.fieldid
								WHERE a.roleid='1'
								AND a.bid='1'
								AND a.fieldtype='s'
[2017-05-02 15:57:16]	SQL :	SELECT * FROM 1_role_access
								WHERE roleid='1'
								AND bid='1'
							AND fieldtype='c'
[2017-05-02 15:57:16]	SQL :	SELECT pri.landingnumber,pri.used,pri.climit,
								if(pri.status=0,'Not in use',
								if(pri.type='0','Calltrack',
								if(pri.type='1','IVRS',
								if(pri.type='2','PBX','Not Assign')))) as type,
								pri.associateid,
								if(pri.status=0,'None',
								if(pri.type='0',g.groupname,
								if(pri.type='1',i.title,
								if(pri.type='2',pbx.title,'None')))) as title,
								if(pri.status=0,'None',
								if(pri.type='0',ch.lastcall,
								if(pri.type='1',ih.lastcall,
								if(pri.type='2',ph.lastcall,'None')))) as lastcall
								FROM prinumbers pri
								LEFT JOIN 1_groups g on (g.prinumber=pri.number AND g.gid=pri.associateid AND g.status=1)
								LEFT JOIN 1_ivrs i on (i.prinumber=pri.number AND i.ivrsid=pri.associateid AND i.status=1)
								LEFT JOIN 1_pbx pbx on (pbx.prinumber=pri.number AND pbx.pbxid=pri.associateid AND pbx.status=1)
								LEFT JOIN (SELECT g.gid,max(h.starttime) as lastcall FROM 1_groups g LEFT JOIN 1_callhistory h on g.gid=h.gid GROUP BY g.gid) ch on g.gid=ch.gid
								LEFT JOIN (SELECT i.ivrsid,max(h.datetime) as lastcall FROM 1_ivrs i LEFT JOIN 1_ivrshistory h on i.ivrsid=h.ivrsid GROUP BY i.ivrsid) ih on i.ivrsid=ih.ivrsid
								LEFT JOIN (SELECT p.pbxid,max(h.starttime) as lastcall FROM 1_pbx p LEFT JOIN 1_pbxreport h on p.pbxid=h.pbxid GROUP BY p.pbxid) ph on pbx.pbxid=ph.pbxid
								WHERE pri.bid=1
[2017-05-02 15:57:16]	SQL :	SELECT balance FROM sms_bal  where bid='1'
[2017-05-02 15:57:16]	SQL :	SELECT balance FROM call_bal where bid='1'
[2017-05-02 15:57:16]	SQL :	SELECT DISTINCT(e.eid),e.empname,eb.start_time FROM 1_employee e
		                       LEFT JOIN 1_emp_break eb ON e.eid = eb.eid
		                       LEFT JOIN 1_groups d ON e.eid = d.eid
		                       WHERE eb.end_time='0000-00-00' AND e.selfdisable=1  GROUP BY d.gid,e.eid
[2017-05-02 15:57:16]	SQL :	SELECT COALESCE(COUNT(callid), 0) AS day 
							FROM 1_callhistory h 
							LEFT JOIN 1_groups d ON d.gid = h.gid 
							WHERE 1 AND (DATE(h.`starttime`) = DATE(NOW()))
[2017-05-02 15:57:16]	SQL :	SELECT COALESCE(COUNT(callid), 0) AS day 
							FROM 1_callhistory h 
							LEFT JOIN 1_groups d ON d.gid = h.gid 
							WHERE 1  AND (DATE(h.`starttime`)  > DATE(DATE_SUB(NOW(), INTERVAL 1 WEEK)))
[2017-05-02 15:57:16]	SQL :	SELECT COALESCE(COUNT(callid), 0) AS day 
							FROM 1_callhistory h 
							LEFT JOIN 1_groups d ON d.gid = h.gid 
							WHERE 1  AND (MONTH(h.`starttime` ) = MONTH(NOW()))
[2017-05-02 15:57:16]	SQL :	SELECT COALESCE(COUNT(pbxid), 0) AS day 
							FROM 1_pbxreport h 
							WHERE 1 AND (DATE(h.`starttime`) = DATE(NOW()))
[2017-05-02 15:57:16]	SQL :	SELECT COALESCE(COUNT(pbxid), 0) AS day 
							FROM 1_pbxreport h 
							WHERE 1  AND (DATE(h.`starttime`)  > DATE(DATE_SUB(NOW(), INTERVAL 1 WEEK)))
[2017-05-02 15:57:16]	SQL :	SELECT COALESCE(COUNT(pbxid), 0) AS day 
							FROM 1_pbxreport h 
							WHERE 1  AND (MONTH(h.`starttime` ) = MONTH(NOW()))
[2017-05-02 15:57:16]	SQL :	SELECT COALESCE(COUNT(hid), 0) AS day 
							   FROM 1_ivrshistory h 
						       WHERE 1 AND (DATE(h.`datetime`) = DATE(NOW()))
[2017-05-02 15:57:16]	SQL :	SELECT COALESCE(COUNT(hid), 0) AS day 
							   FROM 1_ivrshistory h 
						       WHERE 1  AND (DATE(h.`datetime`)  > DATE(DATE_SUB(NOW(), INTERVAL 1 WEEK)))
[2017-05-02 15:57:16]	SQL :	SELECT COALESCE(COUNT(hid), 0) AS day 
							   FROM 1_ivrshistory h 
						       WHERE 1  AND (MONTH(h.`datetime` ) = MONTH(NOW()))
[2017-05-02 15:57:16]	SQL :	SELECT COALESCE(COUNT(leadid), 0) AS day 
							FROM 1_leads a 
							LEFT JOIN 1_leads_groups d ON d.gid = a.gid 
							WHERE (DATE(a.`createdon`) = DATE(NOW()))
[2017-05-02 15:57:16]	SQL :	SELECT COALESCE(COUNT(leadid), 0) AS day 
							FROM 1_leads a 
							LEFT JOIN 1_leads_groups d ON d.gid = a.gid 
							WHERE (DATE(a.`createdon`) = DATE(NOW()))
[2017-05-02 15:57:16]	SQL :	SELECT COALESCE(COUNT(leadid), 0) AS day 
							FROM 1_leads a 
							LEFT JOIN 1_leads_groups d ON d.gid = a.gid 
							WHERE (DATE(a.`createdon`) = DATE(NOW()))
[2017-05-02 15:57:16]	SQL :	SELECT COALESCE(COUNT(tktid), 0) AS day 
							FROM 1_support_tickets a 
							LEFT JOIN 1_support_groups d ON d.gid = a.gid 
							WHERE (DATE(a.`createdon`) = DATE(NOW()))
[2017-05-02 15:57:16]	SQL :	SELECT COALESCE(COUNT(tktid), 0) AS day 
							FROM 1_support_tickets a 
							LEFT JOIN 1_support_groups d ON d.gid = a.gid 
							WHERE (DATE(a.`createdon`) = DATE(NOW()))
[2017-05-02 15:57:16]	SQL :	SELECT COALESCE(COUNT(tktid), 0) AS day 
							FROM 1_support_tickets a 
							LEFT JOIN 1_support_groups d ON d.gid = a.gid 
							WHERE (DATE(a.`createdon`) = DATE(NOW()))
[2017-05-02 15:57:16]	SQL :	SELECT COALESCE(COUNT(callid), 0) AS day 
							FROM 1_outboundcalls h 
							WHERE (DATE(h.`starttime`) = DATE(NOW()))
[2017-05-02 15:57:16]	SQL :	SELECT COALESCE(COUNT(callid), 0) AS day 
							FROM 1_outboundcalls h 
							WHERE (DATE(h.`starttime`) = DATE(NOW()))
[2017-05-02 15:57:16]	SQL :	SELECT COALESCE(COUNT(callid), 0) AS day 
							FROM 1_outboundcalls h 
							WHERE (DATE(h.`starttime`) = DATE(NOW()))
[2017-05-02 15:57:16]	SQL :	SELECT COALESCE(COUNT(callid), 0) AS day 
							FROM 1_mtracker h 
							WHERE (DATE(h.`starttime`) = DATE(NOW()))
[2017-05-02 15:57:16]	SQL :	SELECT COALESCE(COUNT(callid), 0) AS day 
							FROM 1_mtracker h 
							WHERE (DATE(h.`starttime`) = DATE(NOW()))
[2017-05-02 15:57:16]	SQL :	SELECT COALESCE(COUNT(callid), 0) AS day 
							FROM 1_mtracker h 
							WHERE (DATE(h.`starttime`) = DATE(NOW()))
[2017-05-02 15:57:46]	DEBUG :	Config Class Initialized
[2017-05-02 15:57:46]	DEBUG :	Hooks Class Initialized
[2017-05-02 15:57:46]	DEBUG :	URI Class Initialized
[2017-05-02 15:57:46]	DEBUG :	Router Class Initialized
[2017-05-02 15:57:46]	DEBUG :	Output Class Initialized
[2017-05-02 15:57:46]	DEBUG :	Input Class Initialized
[2017-05-02 15:57:46]	DEBUG :	Global POST and COOKIE data sanitized
[2017-05-02 15:57:46]	DEBUG :	Language Class Initialized
[2017-05-02 15:57:46]	DEBUG :	Loader Class Initialized
[2017-05-02 15:57:46]	DEBUG :	Helper loaded: url_helper
[2017-05-02 15:57:46]	DEBUG :	Helper loaded: form_helper
[2017-05-02 15:57:46]	DEBUG :	Helper loaded: html_helper
[2017-05-02 15:57:46]	DEBUG :	Helper loaded: email_helper
[2017-05-02 15:57:46]	DEBUG :	Helper loaded: ckeditor_helper
[2017-05-02 15:57:46]	DEBUG :	Helper loaded: mcube_helper
[2017-05-02 15:57:46]	DEBUG :	Database Driver Class Initialized
[2017-05-02 15:57:46]	ERROR :	Severity: 8192  --> mysql_pconnect(): The mysql extension is deprecated and will be removed in the future: use mysqli or PDO instead /var/www/html/mcnew/system/database/drivers/mysql/mysql_driver.php 88
[2017-05-02 15:57:46]	DEBUG :	Session Class Initialized
[2017-05-02 15:57:46]	DEBUG :	Helper loaded: string_helper
[2017-05-02 15:57:46]	DEBUG :	Encrypt Class Initialized
[2017-05-02 15:57:46]	DEBUG :	A session cookie was not found.
[2017-05-02 15:57:46]	SQL :	INSERT INTO `call_sessions` (`session_id`, `ip_address`, `user_agent`, `last_activity`) VALUES ('1eaf9b00db46bdfb2da4cce8750a390f', '192.168.1.114', 'Dalvik/2.1.0 (Linux; U; Android 6.0; Panasonic T44', 1493720866)
[2017-05-02 15:57:46]	DEBUG :	Session routines successfully run
[2017-05-02 15:57:46]	DEBUG :	Table Class Initialized
[2017-05-02 15:57:46]	DEBUG :	Pagination Class Initialized
[2017-05-02 15:57:46]	DEBUG :	Config file loaded: config/paypallib_config.php
[2017-05-02 15:57:46]	DEBUG :	Form Validation Class Initialized
[2017-05-02 15:57:46]	DEBUG :	Email Class Initialized
[2017-05-02 15:57:46]	DEBUG :	Language file loaded: language/english/calendar_lang.php
[2017-05-02 15:57:46]	DEBUG :	Calendar Class Initialized
[2017-05-02 15:57:46]	DEBUG :	Controller Class Initialized
[2017-05-02 15:57:46]	DEBUG :	Model Class Initialized
[2017-05-02 15:57:46]	DEBUG :	Model Class Initialized
[2017-05-02 15:57:46]	DEBUG :	Model Class Initialized
[2017-05-02 15:57:46]	DEBUG :	Model Class Initialized
[2017-05-02 15:57:46]	DEBUG :	Model Class Initialized
[2017-05-02 15:57:46]	DEBUG :	Model Class Initialized
[2017-05-02 15:57:46]	DEBUG :	Model Class Initialized
[2017-05-02 15:57:46]	DEBUG :	Model Class Initialized
[2017-05-02 15:57:46]	DEBUG :	Model Class Initialized
[2017-05-02 15:57:46]	DEBUG :	Model Class Initialized
[2017-05-02 15:57:46]	DEBUG :	Model Class Initialized
[2017-05-02 15:57:46]	DEBUG :	Model Class Initialized
[2017-05-02 15:57:46]	DEBUG :	Model Class Initialized
[2017-05-02 15:57:46]	DEBUG :	Model Class Initialized
[2017-05-02 15:57:46]	DEBUG :	Plugin loaded: to_pdf_pi
[2017-05-02 15:57:46]	DEBUG :	Model Class Initialized
[2017-05-02 15:57:46]	DEBUG :	Language file loaded: language/english/form_validation_lang.php
[2017-05-02 15:57:46]	SQL :	SELECT uid,bid,eid FROM `user` WHERE authkey='1.1.d886b8e8a0615'
[2017-05-02 15:57:46]	DEBUG :	Database Driver Class Initialized
[2017-05-02 15:57:46]	SQL :	SELECT roleid FROM 1_employee
							WHERE eid='1'
							AND bid='1'
[2017-05-02 15:57:46]	DEBUG :	Database Driver Class Initialized
[2017-05-02 15:57:46]	SQL :	SELECT * FROM 1_user_role
							WHERE roleid='1'
							AND bid='1'
[2017-05-02 15:57:46]	SQL :	SELECT m.modid,m.modname,m.moddesc,
							COALESCE(o.opt_add,0) as opt_add,
							COALESCE(o.opt_view,0) as opt_view,
							COALESCE(o.opt_download,0) as opt_download,
							COALESCE(opt_delete,0) as opt_delete 
							FROM module m
							LEFT JOIN (SELECT * FROM 1_role_mod_opt
							WHERE roleid='1' 
							AND bid='1') as o
							ON m.modid=o.modid where m.status=1
[2017-05-02 15:57:46]	SQL :	SELECT a.*,f.fieldname FROM 1_role_access a
								LEFT JOIN systemfields f on a.fieldid=f.fieldid
								WHERE a.roleid='1'
								AND a.bid='1'
								AND a.fieldtype='s'
[2017-05-02 15:57:46]	SQL :	SELECT * FROM 1_role_access
								WHERE roleid='1'
								AND bid='1'
							AND fieldtype='c'
[2017-05-02 15:57:46]	SQL :	SELECT pri.landingnumber,pri.used,pri.climit,
								if(pri.status=0,'Not in use',
								if(pri.type='0','Calltrack',
								if(pri.type='1','IVRS',
								if(pri.type='2','PBX','Not Assign')))) as type,
								pri.associateid,
								if(pri.status=0,'None',
								if(pri.type='0',g.groupname,
								if(pri.type='1',i.title,
								if(pri.type='2',pbx.title,'None')))) as title,
								if(pri.status=0,'None',
								if(pri.type='0',ch.lastcall,
								if(pri.type='1',ih.lastcall,
								if(pri.type='2',ph.lastcall,'None')))) as lastcall
								FROM prinumbers pri
								LEFT JOIN 1_groups g on (g.prinumber=pri.number AND g.gid=pri.associateid AND g.status=1)
								LEFT JOIN 1_ivrs i on (i.prinumber=pri.number AND i.ivrsid=pri.associateid AND i.status=1)
								LEFT JOIN 1_pbx pbx on (pbx.prinumber=pri.number AND pbx.pbxid=pri.associateid AND pbx.status=1)
								LEFT JOIN (SELECT g.gid,max(h.starttime) as lastcall FROM 1_groups g LEFT JOIN 1_callhistory h on g.gid=h.gid GROUP BY g.gid) ch on g.gid=ch.gid
								LEFT JOIN (SELECT i.ivrsid,max(h.datetime) as lastcall FROM 1_ivrs i LEFT JOIN 1_ivrshistory h on i.ivrsid=h.ivrsid GROUP BY i.ivrsid) ih on i.ivrsid=ih.ivrsid
								LEFT JOIN (SELECT p.pbxid,max(h.starttime) as lastcall FROM 1_pbx p LEFT JOIN 1_pbxreport h on p.pbxid=h.pbxid GROUP BY p.pbxid) ph on pbx.pbxid=ph.pbxid
								WHERE pri.bid=1
[2017-05-02 15:57:46]	SQL :	SELECT balance FROM sms_bal  where bid='1'
[2017-05-02 15:57:46]	SQL :	SELECT balance FROM call_bal where bid='1'
[2017-05-02 15:57:46]	SQL :	SELECT DISTINCT(e.eid),e.empname,eb.start_time FROM 1_employee e
		                       LEFT JOIN 1_emp_break eb ON e.eid = eb.eid
		                       LEFT JOIN 1_groups d ON e.eid = d.eid
		                       WHERE eb.end_time='0000-00-00' AND e.selfdisable=1  GROUP BY d.gid,e.eid
[2017-05-02 15:57:46]	SQL :	SELECT COALESCE(COUNT(callid), 0) AS day 
							FROM 1_callhistory h 
							LEFT JOIN 1_groups d ON d.gid = h.gid 
							WHERE 1 AND (DATE(h.`starttime`) = DATE(NOW()))
[2017-05-02 15:57:46]	SQL :	SELECT COALESCE(COUNT(callid), 0) AS day 
							FROM 1_callhistory h 
							LEFT JOIN 1_groups d ON d.gid = h.gid 
							WHERE 1  AND (DATE(h.`starttime`)  > DATE(DATE_SUB(NOW(), INTERVAL 1 WEEK)))
[2017-05-02 15:57:46]	SQL :	SELECT COALESCE(COUNT(callid), 0) AS day 
							FROM 1_callhistory h 
							LEFT JOIN 1_groups d ON d.gid = h.gid 
							WHERE 1  AND (MONTH(h.`starttime` ) = MONTH(NOW()))
[2017-05-02 15:57:46]	SQL :	SELECT COALESCE(COUNT(pbxid), 0) AS day 
							FROM 1_pbxreport h 
							WHERE 1 AND (DATE(h.`starttime`) = DATE(NOW()))
[2017-05-02 15:57:46]	SQL :	SELECT COALESCE(COUNT(pbxid), 0) AS day 
							FROM 1_pbxreport h 
							WHERE 1  AND (DATE(h.`starttime`)  > DATE(DATE_SUB(NOW(), INTERVAL 1 WEEK)))
[2017-05-02 15:57:46]	SQL :	SELECT COALESCE(COUNT(pbxid), 0) AS day 
							FROM 1_pbxreport h 
							WHERE 1  AND (MONTH(h.`starttime` ) = MONTH(NOW()))
[2017-05-02 15:57:46]	SQL :	SELECT COALESCE(COUNT(hid), 0) AS day 
							   FROM 1_ivrshistory h 
						       WHERE 1 AND (DATE(h.`datetime`) = DATE(NOW()))
[2017-05-02 15:57:46]	SQL :	SELECT COALESCE(COUNT(hid), 0) AS day 
							   FROM 1_ivrshistory h 
						       WHERE 1  AND (DATE(h.`datetime`)  > DATE(DATE_SUB(NOW(), INTERVAL 1 WEEK)))
[2017-05-02 15:57:46]	SQL :	SELECT COALESCE(COUNT(hid), 0) AS day 
							   FROM 1_ivrshistory h 
						       WHERE 1  AND (MONTH(h.`datetime` ) = MONTH(NOW()))
[2017-05-02 15:57:46]	SQL :	SELECT COALESCE(COUNT(leadid), 0) AS day 
							FROM 1_leads a 
							LEFT JOIN 1_leads_groups d ON d.gid = a.gid 
							WHERE (DATE(a.`createdon`) = DATE(NOW()))
[2017-05-02 15:57:46]	SQL :	SELECT COALESCE(COUNT(leadid), 0) AS day 
							FROM 1_leads a 
							LEFT JOIN 1_leads_groups d ON d.gid = a.gid 
							WHERE (DATE(a.`createdon`) = DATE(NOW()))
[2017-05-02 15:57:46]	SQL :	SELECT COALESCE(COUNT(leadid), 0) AS day 
							FROM 1_leads a 
							LEFT JOIN 1_leads_groups d ON d.gid = a.gid 
							WHERE (DATE(a.`createdon`) = DATE(NOW()))
[2017-05-02 15:57:46]	SQL :	SELECT COALESCE(COUNT(tktid), 0) AS day 
							FROM 1_support_tickets a 
							LEFT JOIN 1_support_groups d ON d.gid = a.gid 
							WHERE (DATE(a.`createdon`) = DATE(NOW()))
[2017-05-02 15:57:46]	SQL :	SELECT COALESCE(COUNT(tktid), 0) AS day 
							FROM 1_support_tickets a 
							LEFT JOIN 1_support_groups d ON d.gid = a.gid 
							WHERE (DATE(a.`createdon`) = DATE(NOW()))
[2017-05-02 15:57:46]	SQL :	SELECT COALESCE(COUNT(tktid), 0) AS day 
							FROM 1_support_tickets a 
							LEFT JOIN 1_support_groups d ON d.gid = a.gid 
							WHERE (DATE(a.`createdon`) = DATE(NOW()))
[2017-05-02 15:57:46]	SQL :	SELECT COALESCE(COUNT(callid), 0) AS day 
							FROM 1_outboundcalls h 
							WHERE (DATE(h.`starttime`) = DATE(NOW()))
[2017-05-02 15:57:46]	SQL :	SELECT COALESCE(COUNT(callid), 0) AS day 
							FROM 1_outboundcalls h 
							WHERE (DATE(h.`starttime`) = DATE(NOW()))
[2017-05-02 15:57:46]	SQL :	SELECT COALESCE(COUNT(callid), 0) AS day 
							FROM 1_outboundcalls h 
							WHERE (DATE(h.`starttime`) = DATE(NOW()))
[2017-05-02 15:57:46]	SQL :	SELECT COALESCE(COUNT(callid), 0) AS day 
							FROM 1_mtracker h 
							WHERE (DATE(h.`starttime`) = DATE(NOW()))
[2017-05-02 15:57:46]	SQL :	SELECT COALESCE(COUNT(callid), 0) AS day 
							FROM 1_mtracker h 
							WHERE (DATE(h.`starttime`) = DATE(NOW()))
[2017-05-02 15:57:46]	SQL :	SELECT COALESCE(COUNT(callid), 0) AS day 
							FROM 1_mtracker h 
							WHERE (DATE(h.`starttime`) = DATE(NOW()))
[2017-05-02 15:57:52]	DEBUG :	Config Class Initialized
[2017-05-02 15:57:52]	DEBUG :	Hooks Class Initialized
[2017-05-02 15:57:52]	DEBUG :	URI Class Initialized
[2017-05-02 15:57:52]	DEBUG :	Router Class Initialized
[2017-05-02 15:57:52]	DEBUG :	Output Class Initialized
[2017-05-02 15:57:52]	DEBUG :	Input Class Initialized
[2017-05-02 15:57:52]	DEBUG :	Global POST and COOKIE data sanitized
[2017-05-02 15:57:52]	DEBUG :	Language Class Initialized
[2017-05-02 15:57:52]	DEBUG :	Loader Class Initialized
[2017-05-02 15:57:52]	DEBUG :	Helper loaded: url_helper
[2017-05-02 15:57:52]	DEBUG :	Helper loaded: form_helper
[2017-05-02 15:57:52]	DEBUG :	Helper loaded: html_helper
[2017-05-02 15:57:52]	DEBUG :	Helper loaded: email_helper
[2017-05-02 15:57:52]	DEBUG :	Helper loaded: ckeditor_helper
[2017-05-02 15:57:52]	DEBUG :	Helper loaded: mcube_helper
[2017-05-02 15:57:52]	DEBUG :	Database Driver Class Initialized
[2017-05-02 15:57:52]	ERROR :	Severity: 8192  --> mysql_pconnect(): The mysql extension is deprecated and will be removed in the future: use mysqli or PDO instead /var/www/html/mcnew/system/database/drivers/mysql/mysql_driver.php 88
[2017-05-02 15:57:52]	DEBUG :	Session Class Initialized
[2017-05-02 15:57:52]	DEBUG :	Helper loaded: string_helper
[2017-05-02 15:57:52]	DEBUG :	Encrypt Class Initialized
[2017-05-02 15:57:52]	DEBUG :	A session cookie was not found.
[2017-05-02 15:57:52]	SQL :	INSERT INTO `call_sessions` (`session_id`, `ip_address`, `user_agent`, `last_activity`) VALUES ('a2b579a05473cb782cfcb2fb792cee32', '192.168.1.114', 'Dalvik/2.1.0 (Linux; U; Android 6.0; Panasonic T44', 1493720872)
[2017-05-02 15:57:52]	DEBUG :	Session routines successfully run
[2017-05-02 15:57:52]	DEBUG :	Table Class Initialized
[2017-05-02 15:57:52]	DEBUG :	Pagination Class Initialized
[2017-05-02 15:57:52]	DEBUG :	Config file loaded: config/paypallib_config.php
[2017-05-02 15:57:52]	DEBUG :	Form Validation Class Initialized
[2017-05-02 15:57:52]	DEBUG :	Email Class Initialized
[2017-05-02 15:57:52]	DEBUG :	Language file loaded: language/english/calendar_lang.php
[2017-05-02 15:57:52]	DEBUG :	Calendar Class Initialized
[2017-05-02 15:57:52]	DEBUG :	Controller Class Initialized
[2017-05-02 15:57:52]	DEBUG :	Model Class Initialized
[2017-05-02 15:57:52]	DEBUG :	Model Class Initialized
[2017-05-02 15:57:52]	DEBUG :	Model Class Initialized
[2017-05-02 15:57:52]	DEBUG :	Model Class Initialized
[2017-05-02 15:57:52]	DEBUG :	Model Class Initialized
[2017-05-02 15:57:52]	DEBUG :	Model Class Initialized
[2017-05-02 15:57:52]	DEBUG :	Model Class Initialized
[2017-05-02 15:57:52]	DEBUG :	Model Class Initialized
[2017-05-02 15:57:52]	DEBUG :	Model Class Initialized
[2017-05-02 15:57:52]	DEBUG :	Model Class Initialized
[2017-05-02 15:57:52]	DEBUG :	Model Class Initialized
[2017-05-02 15:57:52]	DEBUG :	Model Class Initialized
[2017-05-02 15:57:52]	DEBUG :	Model Class Initialized
[2017-05-02 15:57:52]	DEBUG :	Model Class Initialized
[2017-05-02 15:57:52]	DEBUG :	Plugin loaded: to_pdf_pi
[2017-05-02 15:57:52]	DEBUG :	Model Class Initialized
[2017-05-02 15:57:52]	DEBUG :	Language file loaded: language/english/form_validation_lang.php
[2017-05-02 15:57:52]	SQL :	SELECT uid,bid,eid FROM `user` WHERE authkey='1.1.d886b8e8a0615'
[2017-05-02 15:57:52]	DEBUG :	Database Driver Class Initialized
[2017-05-02 15:57:52]	SQL :	SELECT roleid FROM 1_employee
							WHERE eid='1'
							AND bid='1'
[2017-05-02 15:57:52]	DEBUG :	Database Driver Class Initialized
[2017-05-02 15:57:52]	SQL :	SELECT * FROM 1_user_role
							WHERE roleid='1'
							AND bid='1'
[2017-05-02 15:57:52]	SQL :	SELECT m.modid,m.modname,m.moddesc,
							COALESCE(o.opt_add,0) as opt_add,
							COALESCE(o.opt_view,0) as opt_view,
							COALESCE(o.opt_download,0) as opt_download,
							COALESCE(opt_delete,0) as opt_delete 
							FROM module m
							LEFT JOIN (SELECT * FROM 1_role_mod_opt
							WHERE roleid='1' 
							AND bid='1') as o
							ON m.modid=o.modid where m.status=1
[2017-05-02 15:57:52]	SQL :	SELECT a.*,f.fieldname FROM 1_role_access a
								LEFT JOIN systemfields f on a.fieldid=f.fieldid
								WHERE a.roleid='1'
								AND a.bid='1'
								AND a.fieldtype='s'
[2017-05-02 15:57:52]	SQL :	SELECT * FROM 1_role_access
								WHERE roleid='1'
								AND bid='1'
							AND fieldtype='c'
[2017-05-02 15:57:52]	SQL :	SELECT pri.landingnumber,pri.used,pri.climit,
								if(pri.status=0,'Not in use',
								if(pri.type='0','Calltrack',
								if(pri.type='1','IVRS',
								if(pri.type='2','PBX','Not Assign')))) as type,
								pri.associateid,
								if(pri.status=0,'None',
								if(pri.type='0',g.groupname,
								if(pri.type='1',i.title,
								if(pri.type='2',pbx.title,'None')))) as title,
								if(pri.status=0,'None',
								if(pri.type='0',ch.lastcall,
								if(pri.type='1',ih.lastcall,
								if(pri.type='2',ph.lastcall,'None')))) as lastcall
								FROM prinumbers pri
								LEFT JOIN 1_groups g on (g.prinumber=pri.number AND g.gid=pri.associateid AND g.status=1)
								LEFT JOIN 1_ivrs i on (i.prinumber=pri.number AND i.ivrsid=pri.associateid AND i.status=1)
								LEFT JOIN 1_pbx pbx on (pbx.prinumber=pri.number AND pbx.pbxid=pri.associateid AND pbx.status=1)
								LEFT JOIN (SELECT g.gid,max(h.starttime) as lastcall FROM 1_groups g LEFT JOIN 1_callhistory h on g.gid=h.gid GROUP BY g.gid) ch on g.gid=ch.gid
								LEFT JOIN (SELECT i.ivrsid,max(h.datetime) as lastcall FROM 1_ivrs i LEFT JOIN 1_ivrshistory h on i.ivrsid=h.ivrsid GROUP BY i.ivrsid) ih on i.ivrsid=ih.ivrsid
								LEFT JOIN (SELECT p.pbxid,max(h.starttime) as lastcall FROM 1_pbx p LEFT JOIN 1_pbxreport h on p.pbxid=h.pbxid GROUP BY p.pbxid) ph on pbx.pbxid=ph.pbxid
								WHERE pri.bid=1
[2017-05-02 15:57:52]	SQL :	SELECT balance FROM sms_bal  where bid='1'
[2017-05-02 15:57:52]	SQL :	SELECT balance FROM call_bal where bid='1'
[2017-05-02 15:57:52]	SQL :	SELECT DISTINCT(e.eid),e.empname,eb.start_time FROM 1_employee e
		                       LEFT JOIN 1_emp_break eb ON e.eid = eb.eid
		                       LEFT JOIN 1_groups d ON e.eid = d.eid
		                       WHERE eb.end_time='0000-00-00' AND e.selfdisable=1  GROUP BY d.gid,e.eid
[2017-05-02 15:57:52]	SQL :	SELECT COALESCE(COUNT(callid), 0) AS day 
							FROM 1_callhistory h 
							LEFT JOIN 1_groups d ON d.gid = h.gid 
							WHERE 1 AND (DATE(h.`starttime`) = DATE(NOW()))
[2017-05-02 15:57:52]	SQL :	SELECT COALESCE(COUNT(callid), 0) AS day 
							FROM 1_callhistory h 
							LEFT JOIN 1_groups d ON d.gid = h.gid 
							WHERE 1  AND (DATE(h.`starttime`)  > DATE(DATE_SUB(NOW(), INTERVAL 1 WEEK)))
[2017-05-02 15:57:52]	SQL :	SELECT COALESCE(COUNT(callid), 0) AS day 
							FROM 1_callhistory h 
							LEFT JOIN 1_groups d ON d.gid = h.gid 
							WHERE 1  AND (MONTH(h.`starttime` ) = MONTH(NOW()))
[2017-05-02 15:57:52]	SQL :	SELECT COALESCE(COUNT(pbxid), 0) AS day 
							FROM 1_pbxreport h 
							WHERE 1 AND (DATE(h.`starttime`) = DATE(NOW()))
[2017-05-02 15:57:52]	SQL :	SELECT COALESCE(COUNT(pbxid), 0) AS day 
							FROM 1_pbxreport h 
							WHERE 1  AND (DATE(h.`starttime`)  > DATE(DATE_SUB(NOW(), INTERVAL 1 WEEK)))
[2017-05-02 15:57:52]	SQL :	SELECT COALESCE(COUNT(pbxid), 0) AS day 
							FROM 1_pbxreport h 
							WHERE 1  AND (MONTH(h.`starttime` ) = MONTH(NOW()))
[2017-05-02 15:57:52]	SQL :	SELECT COALESCE(COUNT(hid), 0) AS day 
							   FROM 1_ivrshistory h 
						       WHERE 1 AND (DATE(h.`datetime`) = DATE(NOW()))
[2017-05-02 15:57:52]	SQL :	SELECT COALESCE(COUNT(hid), 0) AS day 
							   FROM 1_ivrshistory h 
						       WHERE 1  AND (DATE(h.`datetime`)  > DATE(DATE_SUB(NOW(), INTERVAL 1 WEEK)))
[2017-05-02 15:57:52]	SQL :	SELECT COALESCE(COUNT(hid), 0) AS day 
							   FROM 1_ivrshistory h 
						       WHERE 1  AND (MONTH(h.`datetime` ) = MONTH(NOW()))
[2017-05-02 15:57:52]	SQL :	SELECT COALESCE(COUNT(leadid), 0) AS day 
							FROM 1_leads a 
							LEFT JOIN 1_leads_groups d ON d.gid = a.gid 
							WHERE (DATE(a.`createdon`) = DATE(NOW()))
[2017-05-02 15:57:52]	SQL :	SELECT COALESCE(COUNT(leadid), 0) AS day 
							FROM 1_leads a 
							LEFT JOIN 1_leads_groups d ON d.gid = a.gid 
							WHERE (DATE(a.`createdon`) = DATE(NOW()))
[2017-05-02 15:57:52]	SQL :	SELECT COALESCE(COUNT(leadid), 0) AS day 
							FROM 1_leads a 
							LEFT JOIN 1_leads_groups d ON d.gid = a.gid 
							WHERE (DATE(a.`createdon`) = DATE(NOW()))
[2017-05-02 15:57:52]	SQL :	SELECT COALESCE(COUNT(tktid), 0) AS day 
							FROM 1_support_tickets a 
							LEFT JOIN 1_support_groups d ON d.gid = a.gid 
							WHERE (DATE(a.`createdon`) = DATE(NOW()))
[2017-05-02 15:57:52]	SQL :	SELECT COALESCE(COUNT(tktid), 0) AS day 
							FROM 1_support_tickets a 
							LEFT JOIN 1_support_groups d ON d.gid = a.gid 
							WHERE (DATE(a.`createdon`) = DATE(NOW()))
[2017-05-02 15:57:52]	SQL :	SELECT COALESCE(COUNT(tktid), 0) AS day 
							FROM 1_support_tickets a 
							LEFT JOIN 1_support_groups d ON d.gid = a.gid 
							WHERE (DATE(a.`createdon`) = DATE(NOW()))
[2017-05-02 15:57:52]	SQL :	SELECT COALESCE(COUNT(callid), 0) AS day 
							FROM 1_outboundcalls h 
							WHERE (DATE(h.`starttime`) = DATE(NOW()))
[2017-05-02 15:57:52]	SQL :	SELECT COALESCE(COUNT(callid), 0) AS day 
							FROM 1_outboundcalls h 
							WHERE (DATE(h.`starttime`) = DATE(NOW()))
[2017-05-02 15:57:52]	SQL :	SELECT COALESCE(COUNT(callid), 0) AS day 
							FROM 1_outboundcalls h 
							WHERE (DATE(h.`starttime`) = DATE(NOW()))
[2017-05-02 15:57:52]	SQL :	SELECT COALESCE(COUNT(callid), 0) AS day 
							FROM 1_mtracker h 
							WHERE (DATE(h.`starttime`) = DATE(NOW()))
[2017-05-02 15:57:52]	SQL :	SELECT COALESCE(COUNT(callid), 0) AS day 
							FROM 1_mtracker h 
							WHERE (DATE(h.`starttime`) = DATE(NOW()))
[2017-05-02 15:57:52]	SQL :	SELECT COALESCE(COUNT(callid), 0) AS day 
							FROM 1_mtracker h 
							WHERE (DATE(h.`starttime`) = DATE(NOW()))
[2017-05-02 16:02:37]	DEBUG :	Config Class Initialized
[2017-05-02 16:02:37]	DEBUG :	Hooks Class Initialized
[2017-05-02 16:02:37]	DEBUG :	URI Class Initialized
[2017-05-02 16:02:37]	DEBUG :	Router Class Initialized
[2017-05-02 16:02:37]	DEBUG :	Output Class Initialized
[2017-05-02 16:02:37]	DEBUG :	Input Class Initialized
[2017-05-02 16:02:37]	DEBUG :	Global POST and COOKIE data sanitized
[2017-05-02 16:02:37]	DEBUG :	Language Class Initialized
[2017-05-02 16:02:37]	DEBUG :	Loader Class Initialized
[2017-05-02 16:02:37]	DEBUG :	Helper loaded: url_helper
[2017-05-02 16:02:37]	DEBUG :	Helper loaded: form_helper
[2017-05-02 16:02:37]	DEBUG :	Helper loaded: html_helper
[2017-05-02 16:02:37]	DEBUG :	Helper loaded: email_helper
[2017-05-02 16:02:37]	DEBUG :	Helper loaded: ckeditor_helper
[2017-05-02 16:02:37]	DEBUG :	Helper loaded: mcube_helper
[2017-05-02 16:02:37]	DEBUG :	Database Driver Class Initialized
[2017-05-02 16:02:37]	ERROR :	Severity: 8192  --> mysql_pconnect(): The mysql extension is deprecated and will be removed in the future: use mysqli or PDO instead /var/www/html/mcnew/system/database/drivers/mysql/mysql_driver.php 88
[2017-05-02 16:02:37]	DEBUG :	Session Class Initialized
[2017-05-02 16:02:37]	DEBUG :	Helper loaded: string_helper
[2017-05-02 16:02:37]	DEBUG :	Encrypt Class Initialized
[2017-05-02 16:02:37]	DEBUG :	A session cookie was not found.
[2017-05-02 16:02:37]	SQL :	INSERT INTO `call_sessions` (`session_id`, `ip_address`, `user_agent`, `last_activity`) VALUES ('bb7484540c23d2a3c8a9b322775786d0', '192.168.1.114', 'Dalvik/2.1.0 (Linux; U; Android 6.0; Panasonic T44', 1493721157)
[2017-05-02 16:02:37]	DEBUG :	Session routines successfully run
[2017-05-02 16:02:37]	DEBUG :	Table Class Initialized
[2017-05-02 16:02:37]	DEBUG :	Pagination Class Initialized
[2017-05-02 16:02:37]	DEBUG :	Config file loaded: config/paypallib_config.php
[2017-05-02 16:02:37]	DEBUG :	Form Validation Class Initialized
[2017-05-02 16:02:37]	DEBUG :	Email Class Initialized
[2017-05-02 16:02:37]	DEBUG :	Language file loaded: language/english/calendar_lang.php
[2017-05-02 16:02:37]	DEBUG :	Calendar Class Initialized
[2017-05-02 16:02:37]	DEBUG :	Controller Class Initialized
[2017-05-02 16:02:37]	DEBUG :	Model Class Initialized
[2017-05-02 16:02:37]	DEBUG :	Model Class Initialized
[2017-05-02 16:02:37]	DEBUG :	Model Class Initialized
[2017-05-02 16:02:37]	DEBUG :	Model Class Initialized
[2017-05-02 16:02:37]	DEBUG :	Model Class Initialized
[2017-05-02 16:02:37]	DEBUG :	Model Class Initialized
[2017-05-02 16:02:37]	DEBUG :	Model Class Initialized
[2017-05-02 16:02:37]	DEBUG :	Model Class Initialized
[2017-05-02 16:02:37]	DEBUG :	Model Class Initialized
[2017-05-02 16:02:37]	DEBUG :	Model Class Initialized
[2017-05-02 16:02:37]	DEBUG :	Model Class Initialized
[2017-05-02 16:02:37]	DEBUG :	Model Class Initialized
[2017-05-02 16:02:37]	DEBUG :	Model Class Initialized
[2017-05-02 16:02:37]	DEBUG :	Model Class Initialized
[2017-05-02 16:02:37]	DEBUG :	Plugin loaded: to_pdf_pi
[2017-05-02 16:02:37]	DEBUG :	Model Class Initialized
[2017-05-02 16:02:37]	DEBUG :	Language file loaded: language/english/form_validation_lang.php
[2017-05-02 16:02:37]	SQL :	SELECT uid,bid,eid FROM `user` WHERE authkey='1.1.d886b8e8a0615'
[2017-05-02 16:02:37]	DEBUG :	Database Driver Class Initialized
[2017-05-02 16:02:37]	SQL :	SELECT roleid FROM 1_employee
							WHERE eid='1'
							AND bid='1'
[2017-05-02 16:02:37]	DEBUG :	Database Driver Class Initialized
[2017-05-02 16:02:37]	SQL :	SELECT * FROM 1_user_role
							WHERE roleid='1'
							AND bid='1'
[2017-05-02 16:02:37]	SQL :	SELECT m.modid,m.modname,m.moddesc,
							COALESCE(o.opt_add,0) as opt_add,
							COALESCE(o.opt_view,0) as opt_view,
							COALESCE(o.opt_download,0) as opt_download,
							COALESCE(opt_delete,0) as opt_delete 
							FROM module m
							LEFT JOIN (SELECT * FROM 1_role_mod_opt
							WHERE roleid='1' 
							AND bid='1') as o
							ON m.modid=o.modid where m.status=1
[2017-05-02 16:02:37]	SQL :	SELECT a.*,f.fieldname FROM 1_role_access a
								LEFT JOIN systemfields f on a.fieldid=f.fieldid
								WHERE a.roleid='1'
								AND a.bid='1'
								AND a.fieldtype='s'
[2017-05-02 16:02:37]	SQL :	SELECT * FROM 1_role_access
								WHERE roleid='1'
								AND bid='1'
							AND fieldtype='c'
[2017-05-02 16:02:37]	SQL :	SELECT pri.landingnumber,pri.used,pri.climit,
								if(pri.status=0,'Not in use',
								if(pri.type='0','Calltrack',
								if(pri.type='1','IVRS',
								if(pri.type='2','PBX','Not Assign')))) as type,
								pri.associateid,
								if(pri.status=0,'None',
								if(pri.type='0',g.groupname,
								if(pri.type='1',i.title,
								if(pri.type='2',pbx.title,'None')))) as title,
								if(pri.status=0,'None',
								if(pri.type='0',ch.lastcall,
								if(pri.type='1',ih.lastcall,
								if(pri.type='2',ph.lastcall,'None')))) as lastcall
								FROM prinumbers pri
								LEFT JOIN 1_groups g on (g.prinumber=pri.number AND g.gid=pri.associateid AND g.status=1)
								LEFT JOIN 1_ivrs i on (i.prinumber=pri.number AND i.ivrsid=pri.associateid AND i.status=1)
								LEFT JOIN 1_pbx pbx on (pbx.prinumber=pri.number AND pbx.pbxid=pri.associateid AND pbx.status=1)
								LEFT JOIN (SELECT g.gid,max(h.starttime) as lastcall FROM 1_groups g LEFT JOIN 1_callhistory h on g.gid=h.gid GROUP BY g.gid) ch on g.gid=ch.gid
								LEFT JOIN (SELECT i.ivrsid,max(h.datetime) as lastcall FROM 1_ivrs i LEFT JOIN 1_ivrshistory h on i.ivrsid=h.ivrsid GROUP BY i.ivrsid) ih on i.ivrsid=ih.ivrsid
								LEFT JOIN (SELECT p.pbxid,max(h.starttime) as lastcall FROM 1_pbx p LEFT JOIN 1_pbxreport h on p.pbxid=h.pbxid GROUP BY p.pbxid) ph on pbx.pbxid=ph.pbxid
								WHERE pri.bid=1
[2017-05-02 16:02:37]	SQL :	SELECT balance FROM sms_bal  where bid='1'
[2017-05-02 16:02:37]	SQL :	SELECT balance FROM call_bal where bid='1'
[2017-05-02 16:02:37]	SQL :	SELECT DISTINCT(e.eid),e.empname,eb.start_time FROM 1_employee e
		                       LEFT JOIN 1_emp_break eb ON e.eid = eb.eid
		                       LEFT JOIN 1_groups d ON e.eid = d.eid
		                       WHERE eb.end_time='0000-00-00' AND e.selfdisable=1  GROUP BY d.gid,e.eid
[2017-05-02 16:02:37]	SQL :	SELECT COALESCE(COUNT(callid), 0) AS day 
							FROM 1_callhistory h 
							LEFT JOIN 1_groups d ON d.gid = h.gid 
							WHERE 1 AND (DATE(h.`starttime`) = DATE(NOW()))
[2017-05-02 16:02:37]	SQL :	SELECT COALESCE(COUNT(callid), 0) AS day 
							FROM 1_callhistory h 
							LEFT JOIN 1_groups d ON d.gid = h.gid 
							WHERE 1  AND (DATE(h.`starttime`)  > DATE(DATE_SUB(NOW(), INTERVAL 1 WEEK)))
[2017-05-02 16:02:37]	SQL :	SELECT COALESCE(COUNT(callid), 0) AS day 
							FROM 1_callhistory h 
							LEFT JOIN 1_groups d ON d.gid = h.gid 
							WHERE 1  AND (MONTH(h.`starttime` ) = MONTH(NOW()))
[2017-05-02 16:02:37]	SQL :	SELECT COALESCE(COUNT(pbxid), 0) AS day 
							FROM 1_pbxreport h 
							WHERE 1 AND (DATE(h.`starttime`) = DATE(NOW()))
[2017-05-02 16:02:37]	SQL :	SELECT COALESCE(COUNT(pbxid), 0) AS day 
							FROM 1_pbxreport h 
							WHERE 1  AND (DATE(h.`starttime`)  > DATE(DATE_SUB(NOW(), INTERVAL 1 WEEK)))
[2017-05-02 16:02:37]	SQL :	SELECT COALESCE(COUNT(pbxid), 0) AS day 
							FROM 1_pbxreport h 
							WHERE 1  AND (MONTH(h.`starttime` ) = MONTH(NOW()))
[2017-05-02 16:02:37]	SQL :	SELECT COALESCE(COUNT(hid), 0) AS day 
							   FROM 1_ivrshistory h 
						       WHERE 1 AND (DATE(h.`datetime`) = DATE(NOW()))
[2017-05-02 16:02:37]	SQL :	SELECT COALESCE(COUNT(hid), 0) AS day 
							   FROM 1_ivrshistory h 
						       WHERE 1  AND (DATE(h.`datetime`)  > DATE(DATE_SUB(NOW(), INTERVAL 1 WEEK)))
[2017-05-02 16:02:37]	SQL :	SELECT COALESCE(COUNT(hid), 0) AS day 
							   FROM 1_ivrshistory h 
						       WHERE 1  AND (MONTH(h.`datetime` ) = MONTH(NOW()))
[2017-05-02 16:02:37]	SQL :	SELECT COALESCE(COUNT(leadid), 0) AS day 
							FROM 1_leads a 
							LEFT JOIN 1_leads_groups d ON d.gid = a.gid 
							WHERE (DATE(a.`createdon`) = DATE(NOW()))
[2017-05-02 16:02:37]	SQL :	SELECT COALESCE(COUNT(leadid), 0) AS day 
							FROM 1_leads a 
							LEFT JOIN 1_leads_groups d ON d.gid = a.gid 
							WHERE (DATE(a.`createdon`) = DATE(NOW()))
[2017-05-02 16:02:37]	SQL :	SELECT COALESCE(COUNT(leadid), 0) AS day 
							FROM 1_leads a 
							LEFT JOIN 1_leads_groups d ON d.gid = a.gid 
							WHERE (DATE(a.`createdon`) = DATE(NOW()))
[2017-05-02 16:02:37]	SQL :	SELECT COALESCE(COUNT(tktid), 0) AS day 
							FROM 1_support_tickets a 
							LEFT JOIN 1_support_groups d ON d.gid = a.gid 
							WHERE (DATE(a.`createdon`) = DATE(NOW()))
[2017-05-02 16:02:37]	SQL :	SELECT COALESCE(COUNT(tktid), 0) AS day 
							FROM 1_support_tickets a 
							LEFT JOIN 1_support_groups d ON d.gid = a.gid 
							WHERE (DATE(a.`createdon`) = DATE(NOW()))
[2017-05-02 16:02:37]	SQL :	SELECT COALESCE(COUNT(tktid), 0) AS day 
							FROM 1_support_tickets a 
							LEFT JOIN 1_support_groups d ON d.gid = a.gid 
							WHERE (DATE(a.`createdon`) = DATE(NOW()))
[2017-05-02 16:02:37]	SQL :	SELECT COALESCE(COUNT(callid), 0) AS day 
							FROM 1_outboundcalls h 
							WHERE (DATE(h.`starttime`) = DATE(NOW()))
[2017-05-02 16:02:37]	SQL :	SELECT COALESCE(COUNT(callid), 0) AS day 
							FROM 1_outboundcalls h 
							WHERE (DATE(h.`starttime`) = DATE(NOW()))
[2017-05-02 16:02:37]	SQL :	SELECT COALESCE(COUNT(callid), 0) AS day 
							FROM 1_outboundcalls h 
							WHERE (DATE(h.`starttime`) = DATE(NOW()))
[2017-05-02 16:02:37]	SQL :	SELECT COALESCE(COUNT(callid), 0) AS day 
							FROM 1_mtracker h 
							WHERE (DATE(h.`starttime`) = DATE(NOW()))
[2017-05-02 16:02:37]	SQL :	SELECT COALESCE(COUNT(callid), 0) AS day 
							FROM 1_mtracker h 
							WHERE (DATE(h.`starttime`) = DATE(NOW()))
[2017-05-02 16:02:37]	SQL :	SELECT COALESCE(COUNT(callid), 0) AS day 
							FROM 1_mtracker h 
							WHERE (DATE(h.`starttime`) = DATE(NOW()))
[2017-05-02 16:04:21]	DEBUG :	Config Class Initialized
[2017-05-02 16:04:21]	DEBUG :	Hooks Class Initialized
[2017-05-02 16:04:21]	DEBUG :	URI Class Initialized
[2017-05-02 16:04:21]	DEBUG :	Router Class Initialized
[2017-05-02 16:04:21]	DEBUG :	Output Class Initialized
[2017-05-02 16:04:21]	DEBUG :	Input Class Initialized
[2017-05-02 16:04:21]	DEBUG :	Global POST and COOKIE data sanitized
[2017-05-02 16:04:21]	DEBUG :	Language Class Initialized
[2017-05-02 16:04:21]	DEBUG :	Loader Class Initialized
[2017-05-02 16:04:21]	DEBUG :	Helper loaded: url_helper
[2017-05-02 16:04:21]	DEBUG :	Helper loaded: form_helper
[2017-05-02 16:04:21]	DEBUG :	Helper loaded: html_helper
[2017-05-02 16:04:21]	DEBUG :	Helper loaded: email_helper
[2017-05-02 16:04:21]	DEBUG :	Helper loaded: ckeditor_helper
[2017-05-02 16:04:21]	DEBUG :	Helper loaded: mcube_helper
[2017-05-02 16:04:21]	DEBUG :	Database Driver Class Initialized
[2017-05-02 16:04:21]	ERROR :	Severity: 8192  --> mysql_pconnect(): The mysql extension is deprecated and will be removed in the future: use mysqli or PDO instead /var/www/html/mcnew/system/database/drivers/mysql/mysql_driver.php 88
[2017-05-02 16:04:21]	DEBUG :	Session Class Initialized
[2017-05-02 16:04:21]	DEBUG :	Helper loaded: string_helper
[2017-05-02 16:04:21]	DEBUG :	Encrypt Class Initialized
[2017-05-02 16:04:21]	DEBUG :	A session cookie was not found.
[2017-05-02 16:04:21]	SQL :	INSERT INTO `call_sessions` (`session_id`, `ip_address`, `user_agent`, `last_activity`) VALUES ('a477c33bd9c12c4112cdefd23fa81344', '192.168.1.114', 'Dalvik/2.1.0 (Linux; U; Android 6.0; Panasonic T44', 1493721261)
[2017-05-02 16:04:22]	DEBUG :	Session routines successfully run
[2017-05-02 16:04:22]	DEBUG :	Table Class Initialized
[2017-05-02 16:04:22]	DEBUG :	Pagination Class Initialized
[2017-05-02 16:04:22]	DEBUG :	Config file loaded: config/paypallib_config.php
[2017-05-02 16:04:22]	DEBUG :	Form Validation Class Initialized
[2017-05-02 16:04:22]	DEBUG :	Email Class Initialized
[2017-05-02 16:04:22]	DEBUG :	Language file loaded: language/english/calendar_lang.php
[2017-05-02 16:04:22]	DEBUG :	Calendar Class Initialized
[2017-05-02 16:04:22]	DEBUG :	Controller Class Initialized
[2017-05-02 16:04:22]	DEBUG :	Model Class Initialized
[2017-05-02 16:04:22]	DEBUG :	Model Class Initialized
[2017-05-02 16:04:22]	DEBUG :	Model Class Initialized
[2017-05-02 16:04:22]	DEBUG :	Model Class Initialized
[2017-05-02 16:04:22]	DEBUG :	Model Class Initialized
[2017-05-02 16:04:22]	DEBUG :	Model Class Initialized
[2017-05-02 16:04:22]	DEBUG :	Model Class Initialized
[2017-05-02 16:04:22]	DEBUG :	Model Class Initialized
[2017-05-02 16:04:22]	DEBUG :	Model Class Initialized
[2017-05-02 16:04:22]	DEBUG :	Model Class Initialized
[2017-05-02 16:04:22]	DEBUG :	Model Class Initialized
[2017-05-02 16:04:22]	DEBUG :	Model Class Initialized
[2017-05-02 16:04:22]	DEBUG :	Model Class Initialized
[2017-05-02 16:04:22]	DEBUG :	Model Class Initialized
[2017-05-02 16:04:22]	DEBUG :	Plugin loaded: to_pdf_pi
[2017-05-02 16:04:22]	DEBUG :	Model Class Initialized
[2017-05-02 16:04:22]	DEBUG :	Language file loaded: language/english/form_validation_lang.php
[2017-05-02 16:04:22]	SQL :	SELECT uid,bid,eid FROM `user` WHERE authkey='1.1.d886b8e8a0615'
[2017-05-02 16:04:22]	DEBUG :	Database Driver Class Initialized
[2017-05-02 16:04:22]	SQL :	SELECT roleid FROM 1_employee
							WHERE eid='1'
							AND bid='1'
[2017-05-02 16:04:22]	DEBUG :	Database Driver Class Initialized
[2017-05-02 16:04:22]	SQL :	SELECT * FROM 1_user_role
							WHERE roleid='1'
							AND bid='1'
[2017-05-02 16:04:22]	SQL :	SELECT m.modid,m.modname,m.moddesc,
							COALESCE(o.opt_add,0) as opt_add,
							COALESCE(o.opt_view,0) as opt_view,
							COALESCE(o.opt_download,0) as opt_download,
							COALESCE(opt_delete,0) as opt_delete 
							FROM module m
							LEFT JOIN (SELECT * FROM 1_role_mod_opt
							WHERE roleid='1' 
							AND bid='1') as o
							ON m.modid=o.modid where m.status=1
[2017-05-02 16:04:22]	SQL :	SELECT a.*,f.fieldname FROM 1_role_access a
								LEFT JOIN systemfields f on a.fieldid=f.fieldid
								WHERE a.roleid='1'
								AND a.bid='1'
								AND a.fieldtype='s'
[2017-05-02 16:04:22]	SQL :	SELECT * FROM 1_role_access
								WHERE roleid='1'
								AND bid='1'
							AND fieldtype='c'
[2017-05-02 16:04:22]	SQL :	SELECT pri.landingnumber,pri.used,pri.climit,
								if(pri.status=0,'Not in use',
								if(pri.type='0','Calltrack',
								if(pri.type='1','IVRS',
								if(pri.type='2','PBX','Not Assign')))) as type,
								pri.associateid,
								if(pri.status=0,'None',
								if(pri.type='0',g.groupname,
								if(pri.type='1',i.title,
								if(pri.type='2',pbx.title,'None')))) as title,
								if(pri.status=0,'None',
								if(pri.type='0',ch.lastcall,
								if(pri.type='1',ih.lastcall,
								if(pri.type='2',ph.lastcall,'None')))) as lastcall
								FROM prinumbers pri
								LEFT JOIN 1_groups g on (g.prinumber=pri.number AND g.gid=pri.associateid AND g.status=1)
								LEFT JOIN 1_ivrs i on (i.prinumber=pri.number AND i.ivrsid=pri.associateid AND i.status=1)
								LEFT JOIN 1_pbx pbx on (pbx.prinumber=pri.number AND pbx.pbxid=pri.associateid AND pbx.status=1)
								LEFT JOIN (SELECT g.gid,max(h.starttime) as lastcall FROM 1_groups g LEFT JOIN 1_callhistory h on g.gid=h.gid GROUP BY g.gid) ch on g.gid=ch.gid
								LEFT JOIN (SELECT i.ivrsid,max(h.datetime) as lastcall FROM 1_ivrs i LEFT JOIN 1_ivrshistory h on i.ivrsid=h.ivrsid GROUP BY i.ivrsid) ih on i.ivrsid=ih.ivrsid
								LEFT JOIN (SELECT p.pbxid,max(h.starttime) as lastcall FROM 1_pbx p LEFT JOIN 1_pbxreport h on p.pbxid=h.pbxid GROUP BY p.pbxid) ph on pbx.pbxid=ph.pbxid
								WHERE pri.bid=1
[2017-05-02 16:04:22]	SQL :	SELECT balance FROM sms_bal  where bid='1'
[2017-05-02 16:04:22]	SQL :	SELECT balance FROM call_bal where bid='1'
[2017-05-02 16:04:22]	SQL :	SELECT DISTINCT(e.eid),e.empname,eb.start_time FROM 1_employee e
		                       LEFT JOIN 1_emp_break eb ON e.eid = eb.eid
		                       LEFT JOIN 1_groups d ON e.eid = d.eid
		                       WHERE eb.end_time='0000-00-00' AND e.selfdisable=1  GROUP BY d.gid,e.eid
[2017-05-02 16:04:22]	SQL :	SELECT COALESCE(COUNT(callid), 0) AS day 
							FROM 1_callhistory h 
							LEFT JOIN 1_groups d ON d.gid = h.gid 
							WHERE 1 AND (DATE(h.`starttime`) = DATE(NOW()))
[2017-05-02 16:04:22]	SQL :	SELECT COALESCE(COUNT(callid), 0) AS day 
							FROM 1_callhistory h 
							LEFT JOIN 1_groups d ON d.gid = h.gid 
							WHERE 1  AND (DATE(h.`starttime`)  > DATE(DATE_SUB(NOW(), INTERVAL 1 WEEK)))
[2017-05-02 16:04:22]	SQL :	SELECT COALESCE(COUNT(callid), 0) AS day 
							FROM 1_callhistory h 
							LEFT JOIN 1_groups d ON d.gid = h.gid 
							WHERE 1  AND (MONTH(h.`starttime` ) = MONTH(NOW()))
[2017-05-02 16:04:22]	SQL :	SELECT COALESCE(COUNT(pbxid), 0) AS day 
							FROM 1_pbxreport h 
							WHERE 1 AND (DATE(h.`starttime`) = DATE(NOW()))
[2017-05-02 16:04:22]	SQL :	SELECT COALESCE(COUNT(pbxid), 0) AS day 
							FROM 1_pbxreport h 
							WHERE 1  AND (DATE(h.`starttime`)  > DATE(DATE_SUB(NOW(), INTERVAL 1 WEEK)))
[2017-05-02 16:04:22]	SQL :	SELECT COALESCE(COUNT(pbxid), 0) AS day 
							FROM 1_pbxreport h 
							WHERE 1  AND (MONTH(h.`starttime` ) = MONTH(NOW()))
[2017-05-02 16:04:22]	SQL :	SELECT COALESCE(COUNT(hid), 0) AS day 
							   FROM 1_ivrshistory h 
						       WHERE 1 AND (DATE(h.`datetime`) = DATE(NOW()))
[2017-05-02 16:04:22]	SQL :	SELECT COALESCE(COUNT(hid), 0) AS day 
							   FROM 1_ivrshistory h 
						       WHERE 1  AND (DATE(h.`datetime`)  > DATE(DATE_SUB(NOW(), INTERVAL 1 WEEK)))
[2017-05-02 16:04:22]	SQL :	SELECT COALESCE(COUNT(hid), 0) AS day 
							   FROM 1_ivrshistory h 
						       WHERE 1  AND (MONTH(h.`datetime` ) = MONTH(NOW()))
[2017-05-02 16:04:22]	SQL :	SELECT COALESCE(COUNT(leadid), 0) AS day 
							FROM 1_leads a 
							LEFT JOIN 1_leads_groups d ON d.gid = a.gid 
							WHERE (DATE(a.`createdon`) = DATE(NOW()))
[2017-05-02 16:04:22]	SQL :	SELECT COALESCE(COUNT(leadid), 0) AS day 
							FROM 1_leads a 
							LEFT JOIN 1_leads_groups d ON d.gid = a.gid 
							WHERE (DATE(a.`createdon`) = DATE(NOW()))
[2017-05-02 16:04:22]	SQL :	SELECT COALESCE(COUNT(leadid), 0) AS day 
							FROM 1_leads a 
							LEFT JOIN 1_leads_groups d ON d.gid = a.gid 
							WHERE (DATE(a.`createdon`) = DATE(NOW()))
[2017-05-02 16:04:22]	SQL :	SELECT COALESCE(COUNT(tktid), 0) AS day 
							FROM 1_support_tickets a 
							LEFT JOIN 1_support_groups d ON d.gid = a.gid 
							WHERE (DATE(a.`createdon`) = DATE(NOW()))
[2017-05-02 16:04:22]	SQL :	SELECT COALESCE(COUNT(tktid), 0) AS day 
							FROM 1_support_tickets a 
							LEFT JOIN 1_support_groups d ON d.gid = a.gid 
							WHERE (DATE(a.`createdon`) = DATE(NOW()))
[2017-05-02 16:04:22]	SQL :	SELECT COALESCE(COUNT(tktid), 0) AS day 
							FROM 1_support_tickets a 
							LEFT JOIN 1_support_groups d ON d.gid = a.gid 
							WHERE (DATE(a.`createdon`) = DATE(NOW()))
[2017-05-02 16:04:22]	SQL :	SELECT COALESCE(COUNT(callid), 0) AS day 
							FROM 1_outboundcalls h 
							WHERE (DATE(h.`starttime`) = DATE(NOW()))
[2017-05-02 16:04:22]	SQL :	SELECT COALESCE(COUNT(callid), 0) AS day 
							FROM 1_outboundcalls h 
							WHERE (DATE(h.`starttime`) = DATE(NOW()))
[2017-05-02 16:04:22]	SQL :	SELECT COALESCE(COUNT(callid), 0) AS day 
							FROM 1_outboundcalls h 
							WHERE (DATE(h.`starttime`) = DATE(NOW()))
[2017-05-02 16:04:22]	SQL :	SELECT COALESCE(COUNT(callid), 0) AS day 
							FROM 1_mtracker h 
							WHERE (DATE(h.`starttime`) = DATE(NOW()))
[2017-05-02 16:04:22]	SQL :	SELECT COALESCE(COUNT(callid), 0) AS day 
							FROM 1_mtracker h 
							WHERE (DATE(h.`starttime`) = DATE(NOW()))
[2017-05-02 16:04:22]	SQL :	SELECT COALESCE(COUNT(callid), 0) AS day 
							FROM 1_mtracker h 
							WHERE (DATE(h.`starttime`) = DATE(NOW()))
[2017-05-02 16:04:42]	DEBUG :	Config Class Initialized
[2017-05-02 16:04:42]	DEBUG :	Hooks Class Initialized
[2017-05-02 16:04:42]	DEBUG :	URI Class Initialized
[2017-05-02 16:04:42]	DEBUG :	Router Class Initialized
[2017-05-02 16:04:42]	DEBUG :	Output Class Initialized
[2017-05-02 16:04:42]	DEBUG :	Input Class Initialized
[2017-05-02 16:04:42]	DEBUG :	Global POST and COOKIE data sanitized
[2017-05-02 16:04:42]	DEBUG :	Language Class Initialized
[2017-05-02 16:04:42]	DEBUG :	Loader Class Initialized
[2017-05-02 16:04:42]	DEBUG :	Helper loaded: url_helper
[2017-05-02 16:04:42]	DEBUG :	Helper loaded: form_helper
[2017-05-02 16:04:42]	DEBUG :	Helper loaded: html_helper
[2017-05-02 16:04:42]	DEBUG :	Helper loaded: email_helper
[2017-05-02 16:04:42]	DEBUG :	Helper loaded: ckeditor_helper
[2017-05-02 16:04:42]	DEBUG :	Helper loaded: mcube_helper
[2017-05-02 16:04:42]	DEBUG :	Database Driver Class Initialized
[2017-05-02 16:04:42]	ERROR :	Severity: 8192  --> mysql_pconnect(): The mysql extension is deprecated and will be removed in the future: use mysqli or PDO instead /var/www/html/mcnew/system/database/drivers/mysql/mysql_driver.php 88
[2017-05-02 16:04:42]	DEBUG :	Session Class Initialized
[2017-05-02 16:04:42]	DEBUG :	Helper loaded: string_helper
[2017-05-02 16:04:42]	DEBUG :	Encrypt Class Initialized
[2017-05-02 16:04:42]	DEBUG :	A session cookie was not found.
[2017-05-02 16:04:42]	SQL :	INSERT INTO `call_sessions` (`session_id`, `ip_address`, `user_agent`, `last_activity`) VALUES ('dc2f5e1435a6f7aa1a8c2c5d97dec789', '192.168.1.114', 'Dalvik/2.1.0 (Linux; U; Android 6.0; Panasonic T44', 1493721282)
[2017-05-02 16:04:43]	DEBUG :	Session routines successfully run
[2017-05-02 16:04:43]	DEBUG :	Table Class Initialized
[2017-05-02 16:04:43]	DEBUG :	Pagination Class Initialized
[2017-05-02 16:04:43]	DEBUG :	Config file loaded: config/paypallib_config.php
[2017-05-02 16:04:43]	DEBUG :	Form Validation Class Initialized
[2017-05-02 16:04:43]	DEBUG :	Email Class Initialized
[2017-05-02 16:04:43]	DEBUG :	Language file loaded: language/english/calendar_lang.php
[2017-05-02 16:04:43]	DEBUG :	Calendar Class Initialized
[2017-05-02 16:04:43]	DEBUG :	Controller Class Initialized
[2017-05-02 16:04:43]	DEBUG :	Model Class Initialized
[2017-05-02 16:04:43]	DEBUG :	Model Class Initialized
[2017-05-02 16:04:43]	DEBUG :	Model Class Initialized
[2017-05-02 16:04:43]	DEBUG :	Model Class Initialized
[2017-05-02 16:04:43]	DEBUG :	Model Class Initialized
[2017-05-02 16:04:43]	DEBUG :	Model Class Initialized
[2017-05-02 16:04:43]	DEBUG :	Model Class Initialized
[2017-05-02 16:04:43]	DEBUG :	Model Class Initialized
[2017-05-02 16:04:43]	DEBUG :	Model Class Initialized
[2017-05-02 16:04:43]	DEBUG :	Model Class Initialized
[2017-05-02 16:04:43]	DEBUG :	Model Class Initialized
[2017-05-02 16:04:43]	DEBUG :	Model Class Initialized
[2017-05-02 16:04:43]	DEBUG :	Model Class Initialized
[2017-05-02 16:04:43]	DEBUG :	Model Class Initialized
[2017-05-02 16:04:43]	DEBUG :	Plugin loaded: to_pdf_pi
[2017-05-02 16:04:43]	DEBUG :	Model Class Initialized
[2017-05-02 16:04:43]	DEBUG :	Language file loaded: language/english/form_validation_lang.php
[2017-05-02 16:04:43]	SQL :	SELECT uid,bid,eid FROM `user` WHERE authkey='1.1.d886b8e8a0615'
[2017-05-02 16:04:43]	DEBUG :	Database Driver Class Initialized
[2017-05-02 16:04:43]	SQL :	SELECT roleid FROM 1_employee
							WHERE eid='1'
							AND bid='1'
[2017-05-02 16:04:43]	DEBUG :	Database Driver Class Initialized
[2017-05-02 16:04:43]	SQL :	SELECT * FROM 1_user_role
							WHERE roleid='1'
							AND bid='1'
[2017-05-02 16:04:43]	SQL :	SELECT m.modid,m.modname,m.moddesc,
							COALESCE(o.opt_add,0) as opt_add,
							COALESCE(o.opt_view,0) as opt_view,
							COALESCE(o.opt_download,0) as opt_download,
							COALESCE(opt_delete,0) as opt_delete 
							FROM module m
							LEFT JOIN (SELECT * FROM 1_role_mod_opt
							WHERE roleid='1' 
							AND bid='1') as o
							ON m.modid=o.modid where m.status=1
[2017-05-02 16:04:43]	SQL :	SELECT a.*,f.fieldname FROM 1_role_access a
								LEFT JOIN systemfields f on a.fieldid=f.fieldid
								WHERE a.roleid='1'
								AND a.bid='1'
								AND a.fieldtype='s'
[2017-05-02 16:04:43]	SQL :	SELECT * FROM 1_role_access
								WHERE roleid='1'
								AND bid='1'
							AND fieldtype='c'
[2017-05-02 16:04:43]	SQL :	SELECT pri.landingnumber,pri.used,pri.climit,
								if(pri.status=0,'Not in use',
								if(pri.type='0','Calltrack',
								if(pri.type='1','IVRS',
								if(pri.type='2','PBX','Not Assign')))) as type,
								pri.associateid,
								if(pri.status=0,'None',
								if(pri.type='0',g.groupname,
								if(pri.type='1',i.title,
								if(pri.type='2',pbx.title,'None')))) as title,
								if(pri.status=0,'None',
								if(pri.type='0',ch.lastcall,
								if(pri.type='1',ih.lastcall,
								if(pri.type='2',ph.lastcall,'None')))) as lastcall
								FROM prinumbers pri
								LEFT JOIN 1_groups g on (g.prinumber=pri.number AND g.gid=pri.associateid AND g.status=1)
								LEFT JOIN 1_ivrs i on (i.prinumber=pri.number AND i.ivrsid=pri.associateid AND i.status=1)
								LEFT JOIN 1_pbx pbx on (pbx.prinumber=pri.number AND pbx.pbxid=pri.associateid AND pbx.status=1)
								LEFT JOIN (SELECT g.gid,max(h.starttime) as lastcall FROM 1_groups g LEFT JOIN 1_callhistory h on g.gid=h.gid GROUP BY g.gid) ch on g.gid=ch.gid
								LEFT JOIN (SELECT i.ivrsid,max(h.datetime) as lastcall FROM 1_ivrs i LEFT JOIN 1_ivrshistory h on i.ivrsid=h.ivrsid GROUP BY i.ivrsid) ih on i.ivrsid=ih.ivrsid
								LEFT JOIN (SELECT p.pbxid,max(h.starttime) as lastcall FROM 1_pbx p LEFT JOIN 1_pbxreport h on p.pbxid=h.pbxid GROUP BY p.pbxid) ph on pbx.pbxid=ph.pbxid
								WHERE pri.bid=1
[2017-05-02 16:04:43]	SQL :	SELECT balance FROM sms_bal  where bid='1'
[2017-05-02 16:04:43]	SQL :	SELECT balance FROM call_bal where bid='1'
[2017-05-02 16:04:43]	SQL :	SELECT DISTINCT(e.eid),e.empname,eb.start_time FROM 1_employee e
		                       LEFT JOIN 1_emp_break eb ON e.eid = eb.eid
		                       LEFT JOIN 1_groups d ON e.eid = d.eid
		                       WHERE eb.end_time='0000-00-00' AND e.selfdisable=1  GROUP BY d.gid,e.eid
[2017-05-02 16:04:43]	SQL :	SELECT COALESCE(COUNT(callid), 0) AS day 
							FROM 1_callhistory h 
							LEFT JOIN 1_groups d ON d.gid = h.gid 
							WHERE 1 AND (DATE(h.`starttime`) = DATE(NOW()))
[2017-05-02 16:04:43]	SQL :	SELECT COALESCE(COUNT(callid), 0) AS day 
							FROM 1_callhistory h 
							LEFT JOIN 1_groups d ON d.gid = h.gid 
							WHERE 1  AND (DATE(h.`starttime`)  > DATE(DATE_SUB(NOW(), INTERVAL 1 WEEK)))
[2017-05-02 16:04:43]	SQL :	SELECT COALESCE(COUNT(callid), 0) AS day 
							FROM 1_callhistory h 
							LEFT JOIN 1_groups d ON d.gid = h.gid 
							WHERE 1  AND (MONTH(h.`starttime` ) = MONTH(NOW()))
[2017-05-02 16:04:43]	SQL :	SELECT COALESCE(COUNT(pbxid), 0) AS day 
							FROM 1_pbxreport h 
							WHERE 1 AND (DATE(h.`starttime`) = DATE(NOW()))
[2017-05-02 16:04:43]	SQL :	SELECT COALESCE(COUNT(pbxid), 0) AS day 
							FROM 1_pbxreport h 
							WHERE 1  AND (DATE(h.`starttime`)  > DATE(DATE_SUB(NOW(), INTERVAL 1 WEEK)))
[2017-05-02 16:04:43]	SQL :	SELECT COALESCE(COUNT(pbxid), 0) AS day 
							FROM 1_pbxreport h 
							WHERE 1  AND (MONTH(h.`starttime` ) = MONTH(NOW()))
[2017-05-02 16:04:43]	SQL :	SELECT COALESCE(COUNT(hid), 0) AS day 
							   FROM 1_ivrshistory h 
						       WHERE 1 AND (DATE(h.`datetime`) = DATE(NOW()))
[2017-05-02 16:04:43]	SQL :	SELECT COALESCE(COUNT(hid), 0) AS day 
							   FROM 1_ivrshistory h 
						       WHERE 1  AND (DATE(h.`datetime`)  > DATE(DATE_SUB(NOW(), INTERVAL 1 WEEK)))
[2017-05-02 16:04:43]	SQL :	SELECT COALESCE(COUNT(hid), 0) AS day 
							   FROM 1_ivrshistory h 
						       WHERE 1  AND (MONTH(h.`datetime` ) = MONTH(NOW()))
[2017-05-02 16:04:43]	SQL :	SELECT COALESCE(COUNT(leadid), 0) AS day 
							FROM 1_leads a 
							LEFT JOIN 1_leads_groups d ON d.gid = a.gid 
							WHERE (DATE(a.`createdon`) = DATE(NOW()))
[2017-05-02 16:04:43]	SQL :	SELECT COALESCE(COUNT(leadid), 0) AS day 
							FROM 1_leads a 
							LEFT JOIN 1_leads_groups d ON d.gid = a.gid 
							WHERE (DATE(a.`createdon`) = DATE(NOW()))
[2017-05-02 16:04:43]	SQL :	SELECT COALESCE(COUNT(leadid), 0) AS day 
							FROM 1_leads a 
							LEFT JOIN 1_leads_groups d ON d.gid = a.gid 
							WHERE (DATE(a.`createdon`) = DATE(NOW()))
[2017-05-02 16:04:43]	SQL :	SELECT COALESCE(COUNT(tktid), 0) AS day 
							FROM 1_support_tickets a 
							LEFT JOIN 1_support_groups d ON d.gid = a.gid 
							WHERE (DATE(a.`createdon`) = DATE(NOW()))
[2017-05-02 16:04:43]	SQL :	SELECT COALESCE(COUNT(tktid), 0) AS day 
							FROM 1_support_tickets a 
							LEFT JOIN 1_support_groups d ON d.gid = a.gid 
							WHERE (DATE(a.`createdon`) = DATE(NOW()))
[2017-05-02 16:04:43]	SQL :	SELECT COALESCE(COUNT(tktid), 0) AS day 
							FROM 1_support_tickets a 
							LEFT JOIN 1_support_groups d ON d.gid = a.gid 
							WHERE (DATE(a.`createdon`) = DATE(NOW()))
[2017-05-02 16:04:43]	SQL :	SELECT COALESCE(COUNT(callid), 0) AS day 
							FROM 1_outboundcalls h 
							WHERE (DATE(h.`starttime`) = DATE(NOW()))
[2017-05-02 16:04:43]	SQL :	SELECT COALESCE(COUNT(callid), 0) AS day 
							FROM 1_outboundcalls h 
							WHERE (DATE(h.`starttime`) = DATE(NOW()))
[2017-05-02 16:04:43]	SQL :	SELECT COALESCE(COUNT(callid), 0) AS day 
							FROM 1_outboundcalls h 
							WHERE (DATE(h.`starttime`) = DATE(NOW()))
[2017-05-02 16:04:43]	SQL :	SELECT COALESCE(COUNT(callid), 0) AS day 
							FROM 1_mtracker h 
							WHERE (DATE(h.`starttime`) = DATE(NOW()))
[2017-05-02 16:04:43]	SQL :	SELECT COALESCE(COUNT(callid), 0) AS day 
							FROM 1_mtracker h 
							WHERE (DATE(h.`starttime`) = DATE(NOW()))
[2017-05-02 16:04:43]	SQL :	SELECT COALESCE(COUNT(callid), 0) AS day 
							FROM 1_mtracker h 
							WHERE (DATE(h.`starttime`) = DATE(NOW()))
[2017-05-02 16:07:08]	DEBUG :	Config Class Initialized
[2017-05-02 16:07:08]	DEBUG :	Hooks Class Initialized
[2017-05-02 16:07:08]	DEBUG :	URI Class Initialized
[2017-05-02 16:07:08]	DEBUG :	Router Class Initialized
[2017-05-02 16:07:08]	DEBUG :	Output Class Initialized
[2017-05-02 16:07:08]	DEBUG :	Input Class Initialized
[2017-05-02 16:07:08]	DEBUG :	Global POST and COOKIE data sanitized
[2017-05-02 16:07:08]	DEBUG :	Language Class Initialized
[2017-05-02 16:07:08]	DEBUG :	Loader Class Initialized
[2017-05-02 16:07:08]	DEBUG :	Helper loaded: url_helper
[2017-05-02 16:07:08]	DEBUG :	Helper loaded: form_helper
[2017-05-02 16:07:08]	DEBUG :	Helper loaded: html_helper
[2017-05-02 16:07:08]	DEBUG :	Helper loaded: email_helper
[2017-05-02 16:07:08]	DEBUG :	Helper loaded: ckeditor_helper
[2017-05-02 16:07:08]	DEBUG :	Helper loaded: mcube_helper
[2017-05-02 16:07:08]	DEBUG :	Database Driver Class Initialized
[2017-05-02 16:07:08]	ERROR :	Severity: 8192  --> mysql_pconnect(): The mysql extension is deprecated and will be removed in the future: use mysqli or PDO instead /var/www/html/mcnew/system/database/drivers/mysql/mysql_driver.php 88
[2017-05-02 16:07:08]	DEBUG :	Session Class Initialized
[2017-05-02 16:07:08]	DEBUG :	Helper loaded: string_helper
[2017-05-02 16:07:08]	DEBUG :	Encrypt Class Initialized
[2017-05-02 16:07:08]	DEBUG :	A session cookie was not found.
[2017-05-02 16:07:08]	SQL :	INSERT INTO `call_sessions` (`session_id`, `ip_address`, `user_agent`, `last_activity`) VALUES ('0f59760ae7f1bc4bde2bb781782a1e49', '192.168.1.114', 'Dalvik/2.1.0 (Linux; U; Android 6.0; Panasonic T44', 1493721428)
[2017-05-02 16:07:09]	DEBUG :	Session routines successfully run
[2017-05-02 16:07:09]	DEBUG :	Table Class Initialized
[2017-05-02 16:07:09]	DEBUG :	Pagination Class Initialized
[2017-05-02 16:07:09]	DEBUG :	Config file loaded: config/paypallib_config.php
[2017-05-02 16:07:09]	DEBUG :	Form Validation Class Initialized
[2017-05-02 16:07:09]	DEBUG :	Email Class Initialized
[2017-05-02 16:07:09]	DEBUG :	Language file loaded: language/english/calendar_lang.php
[2017-05-02 16:07:09]	DEBUG :	Calendar Class Initialized
[2017-05-02 16:07:09]	DEBUG :	Controller Class Initialized
[2017-05-02 16:07:09]	DEBUG :	Model Class Initialized
[2017-05-02 16:07:09]	DEBUG :	Model Class Initialized
[2017-05-02 16:07:09]	DEBUG :	Model Class Initialized
[2017-05-02 16:07:09]	DEBUG :	Model Class Initialized
[2017-05-02 16:07:09]	DEBUG :	Model Class Initialized
[2017-05-02 16:07:09]	DEBUG :	Model Class Initialized
[2017-05-02 16:07:09]	DEBUG :	Model Class Initialized
[2017-05-02 16:07:09]	DEBUG :	Model Class Initialized
[2017-05-02 16:07:09]	DEBUG :	Model Class Initialized
[2017-05-02 16:07:09]	DEBUG :	Model Class Initialized
[2017-05-02 16:07:09]	DEBUG :	Model Class Initialized
[2017-05-02 16:07:09]	DEBUG :	Model Class Initialized
[2017-05-02 16:07:09]	DEBUG :	Model Class Initialized
[2017-05-02 16:07:09]	DEBUG :	Model Class Initialized
[2017-05-02 16:07:09]	DEBUG :	Plugin loaded: to_pdf_pi
[2017-05-02 16:07:09]	DEBUG :	Model Class Initialized
[2017-05-02 16:07:09]	DEBUG :	Language file loaded: language/english/form_validation_lang.php
[2017-05-02 16:07:09]	SQL :	SELECT uid,bid,eid FROM `user` WHERE authkey='1.1.d886b8e8a0615'
[2017-05-02 16:07:09]	DEBUG :	Database Driver Class Initialized
[2017-05-02 16:07:09]	SQL :	SELECT roleid FROM 1_employee
							WHERE eid='1'
							AND bid='1'
[2017-05-02 16:07:09]	DEBUG :	Database Driver Class Initialized
[2017-05-02 16:07:09]	SQL :	SELECT * FROM 1_user_role
							WHERE roleid='1'
							AND bid='1'
[2017-05-02 16:07:09]	SQL :	SELECT m.modid,m.modname,m.moddesc,
							COALESCE(o.opt_add,0) as opt_add,
							COALESCE(o.opt_view,0) as opt_view,
							COALESCE(o.opt_download,0) as opt_download,
							COALESCE(opt_delete,0) as opt_delete 
							FROM module m
							LEFT JOIN (SELECT * FROM 1_role_mod_opt
							WHERE roleid='1' 
							AND bid='1') as o
							ON m.modid=o.modid where m.status=1
[2017-05-02 16:07:09]	SQL :	SELECT a.*,f.fieldname FROM 1_role_access a
								LEFT JOIN systemfields f on a.fieldid=f.fieldid
								WHERE a.roleid='1'
								AND a.bid='1'
								AND a.fieldtype='s'
[2017-05-02 16:07:09]	SQL :	SELECT * FROM 1_role_access
								WHERE roleid='1'
								AND bid='1'
							AND fieldtype='c'
[2017-05-02 16:07:09]	SQL :	SELECT pri.landingnumber,pri.used,pri.climit,
								if(pri.status=0,'Not in use',
								if(pri.type='0','Calltrack',
								if(pri.type='1','IVRS',
								if(pri.type='2','PBX','Not Assign')))) as type,
								pri.associateid,
								if(pri.status=0,'None',
								if(pri.type='0',g.groupname,
								if(pri.type='1',i.title,
								if(pri.type='2',pbx.title,'None')))) as title,
								if(pri.status=0,'None',
								if(pri.type='0',ch.lastcall,
								if(pri.type='1',ih.lastcall,
								if(pri.type='2',ph.lastcall,'None')))) as lastcall
								FROM prinumbers pri
								LEFT JOIN 1_groups g on (g.prinumber=pri.number AND g.gid=pri.associateid AND g.status=1)
								LEFT JOIN 1_ivrs i on (i.prinumber=pri.number AND i.ivrsid=pri.associateid AND i.status=1)
								LEFT JOIN 1_pbx pbx on (pbx.prinumber=pri.number AND pbx.pbxid=pri.associateid AND pbx.status=1)
								LEFT JOIN (SELECT g.gid,max(h.starttime) as lastcall FROM 1_groups g LEFT JOIN 1_callhistory h on g.gid=h.gid GROUP BY g.gid) ch on g.gid=ch.gid
								LEFT JOIN (SELECT i.ivrsid,max(h.datetime) as lastcall FROM 1_ivrs i LEFT JOIN 1_ivrshistory h on i.ivrsid=h.ivrsid GROUP BY i.ivrsid) ih on i.ivrsid=ih.ivrsid
								LEFT JOIN (SELECT p.pbxid,max(h.starttime) as lastcall FROM 1_pbx p LEFT JOIN 1_pbxreport h on p.pbxid=h.pbxid GROUP BY p.pbxid) ph on pbx.pbxid=ph.pbxid
								WHERE pri.bid=1
[2017-05-02 16:07:09]	SQL :	SELECT balance FROM sms_bal  where bid='1'
[2017-05-02 16:07:09]	SQL :	SELECT balance FROM call_bal where bid='1'
[2017-05-02 16:07:09]	SQL :	SELECT DISTINCT(e.eid),e.empname,eb.start_time FROM 1_employee e
		                       LEFT JOIN 1_emp_break eb ON e.eid = eb.eid
		                       LEFT JOIN 1_groups d ON e.eid = d.eid
		                       WHERE eb.end_time='0000-00-00' AND e.selfdisable=1  GROUP BY d.gid,e.eid
[2017-05-02 16:07:09]	SQL :	SELECT COALESCE(COUNT(callid), 0) AS day 
							FROM 1_callhistory h 
							LEFT JOIN 1_groups d ON d.gid = h.gid 
							WHERE 1 AND (DATE(h.`starttime`) = DATE(NOW()))
[2017-05-02 16:07:09]	SQL :	SELECT COALESCE(COUNT(callid), 0) AS day 
							FROM 1_callhistory h 
							LEFT JOIN 1_groups d ON d.gid = h.gid 
							WHERE 1  AND (DATE(h.`starttime`)  > DATE(DATE_SUB(NOW(), INTERVAL 1 WEEK)))
[2017-05-02 16:07:09]	SQL :	SELECT COALESCE(COUNT(callid), 0) AS day 
							FROM 1_callhistory h 
							LEFT JOIN 1_groups d ON d.gid = h.gid 
							WHERE 1  AND (MONTH(h.`starttime` ) = MONTH(NOW()))
[2017-05-02 16:07:09]	SQL :	SELECT COALESCE(COUNT(pbxid), 0) AS day 
							FROM 1_pbxreport h 
							WHERE 1 AND (DATE(h.`starttime`) = DATE(NOW()))
[2017-05-02 16:07:09]	SQL :	SELECT COALESCE(COUNT(pbxid), 0) AS day 
							FROM 1_pbxreport h 
							WHERE 1  AND (DATE(h.`starttime`)  > DATE(DATE_SUB(NOW(), INTERVAL 1 WEEK)))
[2017-05-02 16:07:09]	SQL :	SELECT COALESCE(COUNT(pbxid), 0) AS day 
							FROM 1_pbxreport h 
							WHERE 1  AND (MONTH(h.`starttime` ) = MONTH(NOW()))
[2017-05-02 16:07:09]	SQL :	SELECT COALESCE(COUNT(hid), 0) AS day 
							   FROM 1_ivrshistory h 
						       WHERE 1 AND (DATE(h.`datetime`) = DATE(NOW()))
[2017-05-02 16:07:09]	SQL :	SELECT COALESCE(COUNT(hid), 0) AS day 
							   FROM 1_ivrshistory h 
						       WHERE 1  AND (DATE(h.`datetime`)  > DATE(DATE_SUB(NOW(), INTERVAL 1 WEEK)))
[2017-05-02 16:07:09]	SQL :	SELECT COALESCE(COUNT(hid), 0) AS day 
							   FROM 1_ivrshistory h 
						       WHERE 1  AND (MONTH(h.`datetime` ) = MONTH(NOW()))
[2017-05-02 16:07:09]	SQL :	SELECT COALESCE(COUNT(leadid), 0) AS day 
							FROM 1_leads a 
							LEFT JOIN 1_leads_groups d ON d.gid = a.gid 
							WHERE (DATE(a.`createdon`) = DATE(NOW()))
[2017-05-02 16:07:09]	SQL :	SELECT COALESCE(COUNT(leadid), 0) AS day 
							FROM 1_leads a 
							LEFT JOIN 1_leads_groups d ON d.gid = a.gid 
							WHERE (DATE(a.`createdon`) = DATE(NOW()))
[2017-05-02 16:07:09]	SQL :	SELECT COALESCE(COUNT(leadid), 0) AS day 
							FROM 1_leads a 
							LEFT JOIN 1_leads_groups d ON d.gid = a.gid 
							WHERE (DATE(a.`createdon`) = DATE(NOW()))
[2017-05-02 16:07:09]	SQL :	SELECT COALESCE(COUNT(tktid), 0) AS day 
							FROM 1_support_tickets a 
							LEFT JOIN 1_support_groups d ON d.gid = a.gid 
							WHERE (DATE(a.`createdon`) = DATE(NOW()))
[2017-05-02 16:07:09]	SQL :	SELECT COALESCE(COUNT(tktid), 0) AS day 
							FROM 1_support_tickets a 
							LEFT JOIN 1_support_groups d ON d.gid = a.gid 
							WHERE (DATE(a.`createdon`) = DATE(NOW()))
[2017-05-02 16:07:09]	SQL :	SELECT COALESCE(COUNT(tktid), 0) AS day 
							FROM 1_support_tickets a 
							LEFT JOIN 1_support_groups d ON d.gid = a.gid 
							WHERE (DATE(a.`createdon`) = DATE(NOW()))
[2017-05-02 16:07:09]	SQL :	SELECT COALESCE(COUNT(callid), 0) AS day 
							FROM 1_outboundcalls h 
							WHERE (DATE(h.`starttime`) = DATE(NOW()))
[2017-05-02 16:07:09]	SQL :	SELECT COALESCE(COUNT(callid), 0) AS day 
							FROM 1_outboundcalls h 
							WHERE (DATE(h.`starttime`) = DATE(NOW()))
[2017-05-02 16:07:09]	SQL :	SELECT COALESCE(COUNT(callid), 0) AS day 
							FROM 1_outboundcalls h 
							WHERE (DATE(h.`starttime`) = DATE(NOW()))
[2017-05-02 16:07:09]	SQL :	SELECT COALESCE(COUNT(callid), 0) AS day 
							FROM 1_mtracker h 
							WHERE (DATE(h.`starttime`) = DATE(NOW()))
[2017-05-02 16:07:09]	SQL :	SELECT COALESCE(COUNT(callid), 0) AS day 
							FROM 1_mtracker h 
							WHERE (DATE(h.`starttime`) = DATE(NOW()))
[2017-05-02 16:07:09]	SQL :	SELECT COALESCE(COUNT(callid), 0) AS day 
							FROM 1_mtracker h 
							WHERE (DATE(h.`starttime`) = DATE(NOW()))
[2017-05-02 16:10:20]	DEBUG :	Config Class Initialized
[2017-05-02 16:10:20]	DEBUG :	Hooks Class Initialized
[2017-05-02 16:10:20]	DEBUG :	URI Class Initialized
[2017-05-02 16:10:20]	DEBUG :	Router Class Initialized
[2017-05-02 16:10:20]	DEBUG :	Output Class Initialized
[2017-05-02 16:10:20]	DEBUG :	Input Class Initialized
[2017-05-02 16:10:20]	DEBUG :	Global POST and COOKIE data sanitized
[2017-05-02 16:10:20]	DEBUG :	Language Class Initialized
[2017-05-02 16:10:20]	DEBUG :	Loader Class Initialized
[2017-05-02 16:10:20]	DEBUG :	Helper loaded: url_helper
[2017-05-02 16:10:20]	DEBUG :	Helper loaded: form_helper
[2017-05-02 16:10:20]	DEBUG :	Helper loaded: html_helper
[2017-05-02 16:10:20]	DEBUG :	Helper loaded: email_helper
[2017-05-02 16:10:20]	DEBUG :	Helper loaded: ckeditor_helper
[2017-05-02 16:10:20]	DEBUG :	Helper loaded: mcube_helper
[2017-05-02 16:10:20]	DEBUG :	Database Driver Class Initialized
[2017-05-02 16:10:20]	ERROR :	Severity: 8192  --> mysql_pconnect(): The mysql extension is deprecated and will be removed in the future: use mysqli or PDO instead /var/www/html/mcnew/system/database/drivers/mysql/mysql_driver.php 88
[2017-05-02 16:10:20]	DEBUG :	Session Class Initialized
[2017-05-02 16:10:20]	DEBUG :	Helper loaded: string_helper
[2017-05-02 16:10:20]	DEBUG :	Encrypt Class Initialized
[2017-05-02 16:10:20]	DEBUG :	A session cookie was not found.
[2017-05-02 16:10:20]	SQL :	INSERT INTO `call_sessions` (`session_id`, `ip_address`, `user_agent`, `last_activity`) VALUES ('0899e19dbf8acc9c8da49ebc856e5fcd', '192.168.1.114', 'Dalvik/2.1.0 (Linux; U; Android 6.0; Panasonic T44', 1493721620)
[2017-05-02 16:10:20]	DEBUG :	Session routines successfully run
[2017-05-02 16:10:20]	DEBUG :	Table Class Initialized
[2017-05-02 16:10:20]	DEBUG :	Pagination Class Initialized
[2017-05-02 16:10:20]	DEBUG :	Config file loaded: config/paypallib_config.php
[2017-05-02 16:10:20]	DEBUG :	Form Validation Class Initialized
[2017-05-02 16:10:20]	DEBUG :	Email Class Initialized
[2017-05-02 16:10:20]	DEBUG :	Language file loaded: language/english/calendar_lang.php
[2017-05-02 16:10:20]	DEBUG :	Calendar Class Initialized
[2017-05-02 16:10:20]	DEBUG :	Controller Class Initialized
[2017-05-02 16:10:20]	DEBUG :	Model Class Initialized
[2017-05-02 16:10:20]	DEBUG :	Model Class Initialized
[2017-05-02 16:10:20]	DEBUG :	Model Class Initialized
[2017-05-02 16:10:20]	DEBUG :	Model Class Initialized
[2017-05-02 16:10:20]	DEBUG :	Model Class Initialized
[2017-05-02 16:10:20]	DEBUG :	Model Class Initialized
[2017-05-02 16:10:20]	DEBUG :	Model Class Initialized
[2017-05-02 16:10:20]	DEBUG :	Model Class Initialized
[2017-05-02 16:10:20]	DEBUG :	Model Class Initialized
[2017-05-02 16:10:20]	DEBUG :	Model Class Initialized
[2017-05-02 16:10:20]	DEBUG :	Model Class Initialized
[2017-05-02 16:10:20]	DEBUG :	Model Class Initialized
[2017-05-02 16:10:20]	DEBUG :	Model Class Initialized
[2017-05-02 16:10:20]	DEBUG :	Model Class Initialized
[2017-05-02 16:10:20]	DEBUG :	Plugin loaded: to_pdf_pi
[2017-05-02 16:10:20]	DEBUG :	Model Class Initialized
[2017-05-02 16:10:20]	DEBUG :	Language file loaded: language/english/form_validation_lang.php
[2017-05-02 16:10:20]	SQL :	SELECT uid,bid,eid FROM `user` WHERE authkey='1.1.d886b8e8a0615'
[2017-05-02 16:10:20]	DEBUG :	Database Driver Class Initialized
[2017-05-02 16:10:20]	SQL :	SELECT roleid FROM 1_employee
							WHERE eid='1'
							AND bid='1'
[2017-05-02 16:10:20]	DEBUG :	Database Driver Class Initialized
[2017-05-02 16:10:20]	SQL :	SELECT * FROM 1_user_role
							WHERE roleid='1'
							AND bid='1'
[2017-05-02 16:10:20]	SQL :	SELECT m.modid,m.modname,m.moddesc,
							COALESCE(o.opt_add,0) as opt_add,
							COALESCE(o.opt_view,0) as opt_view,
							COALESCE(o.opt_download,0) as opt_download,
							COALESCE(opt_delete,0) as opt_delete 
							FROM module m
							LEFT JOIN (SELECT * FROM 1_role_mod_opt
							WHERE roleid='1' 
							AND bid='1') as o
							ON m.modid=o.modid where m.status=1
[2017-05-02 16:10:20]	SQL :	SELECT a.*,f.fieldname FROM 1_role_access a
								LEFT JOIN systemfields f on a.fieldid=f.fieldid
								WHERE a.roleid='1'
								AND a.bid='1'
								AND a.fieldtype='s'
[2017-05-02 16:10:20]	SQL :	SELECT * FROM 1_role_access
								WHERE roleid='1'
								AND bid='1'
							AND fieldtype='c'
[2017-05-02 16:10:20]	SQL :	SELECT pri.landingnumber,pri.used,pri.climit,
								if(pri.status=0,'Not in use',
								if(pri.type='0','Calltrack',
								if(pri.type='1','IVRS',
								if(pri.type='2','PBX','Not Assign')))) as type,
								pri.associateid,
								if(pri.status=0,'None',
								if(pri.type='0',g.groupname,
								if(pri.type='1',i.title,
								if(pri.type='2',pbx.title,'None')))) as title,
								if(pri.status=0,'None',
								if(pri.type='0',ch.lastcall,
								if(pri.type='1',ih.lastcall,
								if(pri.type='2',ph.lastcall,'None')))) as lastcall
								FROM prinumbers pri
								LEFT JOIN 1_groups g on (g.prinumber=pri.number AND g.gid=pri.associateid AND g.status=1)
								LEFT JOIN 1_ivrs i on (i.prinumber=pri.number AND i.ivrsid=pri.associateid AND i.status=1)
								LEFT JOIN 1_pbx pbx on (pbx.prinumber=pri.number AND pbx.pbxid=pri.associateid AND pbx.status=1)
								LEFT JOIN (SELECT g.gid,max(h.starttime) as lastcall FROM 1_groups g LEFT JOIN 1_callhistory h on g.gid=h.gid GROUP BY g.gid) ch on g.gid=ch.gid
								LEFT JOIN (SELECT i.ivrsid,max(h.datetime) as lastcall FROM 1_ivrs i LEFT JOIN 1_ivrshistory h on i.ivrsid=h.ivrsid GROUP BY i.ivrsid) ih on i.ivrsid=ih.ivrsid
								LEFT JOIN (SELECT p.pbxid,max(h.starttime) as lastcall FROM 1_pbx p LEFT JOIN 1_pbxreport h on p.pbxid=h.pbxid GROUP BY p.pbxid) ph on pbx.pbxid=ph.pbxid
								WHERE pri.bid=1
[2017-05-02 16:10:20]	SQL :	SELECT balance FROM sms_bal  where bid='1'
[2017-05-02 16:10:20]	SQL :	SELECT balance FROM call_bal where bid='1'
[2017-05-02 16:10:20]	SQL :	SELECT DISTINCT(e.eid),e.empname,eb.start_time FROM 1_employee e
		                       LEFT JOIN 1_emp_break eb ON e.eid = eb.eid
		                       LEFT JOIN 1_groups d ON e.eid = d.eid
		                       WHERE eb.end_time='0000-00-00' AND e.selfdisable=1  GROUP BY d.gid,e.eid
[2017-05-02 16:10:20]	SQL :	SELECT COALESCE(COUNT(callid), 0) AS day 
							FROM 1_callhistory h 
							LEFT JOIN 1_groups d ON d.gid = h.gid 
							WHERE 1 AND (DATE(h.`starttime`) = DATE(NOW()))
[2017-05-02 16:10:20]	SQL :	SELECT COALESCE(COUNT(callid), 0) AS day 
							FROM 1_callhistory h 
							LEFT JOIN 1_groups d ON d.gid = h.gid 
							WHERE 1  AND (DATE(h.`starttime`)  > DATE(DATE_SUB(NOW(), INTERVAL 1 WEEK)))
[2017-05-02 16:10:20]	SQL :	SELECT COALESCE(COUNT(callid), 0) AS day 
							FROM 1_callhistory h 
							LEFT JOIN 1_groups d ON d.gid = h.gid 
							WHERE 1  AND (MONTH(h.`starttime` ) = MONTH(NOW()))
[2017-05-02 16:10:20]	SQL :	SELECT COALESCE(COUNT(pbxid), 0) AS day 
							FROM 1_pbxreport h 
							WHERE 1 AND (DATE(h.`starttime`) = DATE(NOW()))
[2017-05-02 16:10:20]	SQL :	SELECT COALESCE(COUNT(pbxid), 0) AS day 
							FROM 1_pbxreport h 
							WHERE 1  AND (DATE(h.`starttime`)  > DATE(DATE_SUB(NOW(), INTERVAL 1 WEEK)))
[2017-05-02 16:10:20]	SQL :	SELECT COALESCE(COUNT(pbxid), 0) AS day 
							FROM 1_pbxreport h 
							WHERE 1  AND (MONTH(h.`starttime` ) = MONTH(NOW()))
[2017-05-02 16:10:20]	SQL :	SELECT COALESCE(COUNT(hid), 0) AS day 
							   FROM 1_ivrshistory h 
						       WHERE 1 AND (DATE(h.`datetime`) = DATE(NOW()))
[2017-05-02 16:10:20]	SQL :	SELECT COALESCE(COUNT(hid), 0) AS day 
							   FROM 1_ivrshistory h 
						       WHERE 1  AND (DATE(h.`datetime`)  > DATE(DATE_SUB(NOW(), INTERVAL 1 WEEK)))
[2017-05-02 16:10:20]	SQL :	SELECT COALESCE(COUNT(hid), 0) AS day 
							   FROM 1_ivrshistory h 
						       WHERE 1  AND (MONTH(h.`datetime` ) = MONTH(NOW()))
[2017-05-02 16:10:20]	SQL :	SELECT COALESCE(COUNT(leadid), 0) AS day 
							FROM 1_leads a 
							LEFT JOIN 1_leads_groups d ON d.gid = a.gid 
							WHERE (DATE(a.`createdon`) = DATE(NOW()))
[2017-05-02 16:10:20]	SQL :	SELECT COALESCE(COUNT(leadid), 0) AS day 
							FROM 1_leads a 
							LEFT JOIN 1_leads_groups d ON d.gid = a.gid 
							WHERE (DATE(a.`createdon`) = DATE(NOW()))
[2017-05-02 16:10:20]	SQL :	SELECT COALESCE(COUNT(leadid), 0) AS day 
							FROM 1_leads a 
							LEFT JOIN 1_leads_groups d ON d.gid = a.gid 
							WHERE (DATE(a.`createdon`) = DATE(NOW()))
[2017-05-02 16:10:20]	SQL :	SELECT COALESCE(COUNT(tktid), 0) AS day 
							FROM 1_support_tickets a 
							LEFT JOIN 1_support_groups d ON d.gid = a.gid 
							WHERE (DATE(a.`createdon`) = DATE(NOW()))
[2017-05-02 16:10:20]	SQL :	SELECT COALESCE(COUNT(tktid), 0) AS day 
							FROM 1_support_tickets a 
							LEFT JOIN 1_support_groups d ON d.gid = a.gid 
							WHERE (DATE(a.`createdon`) = DATE(NOW()))
[2017-05-02 16:10:20]	SQL :	SELECT COALESCE(COUNT(tktid), 0) AS day 
							FROM 1_support_tickets a 
							LEFT JOIN 1_support_groups d ON d.gid = a.gid 
							WHERE (DATE(a.`createdon`) = DATE(NOW()))
[2017-05-02 16:10:20]	SQL :	SELECT COALESCE(COUNT(callid), 0) AS day 
							FROM 1_outboundcalls h 
							WHERE (DATE(h.`starttime`) = DATE(NOW()))
[2017-05-02 16:10:20]	SQL :	SELECT COALESCE(COUNT(callid), 0) AS day 
							FROM 1_outboundcalls h 
							WHERE (DATE(h.`starttime`) = DATE(NOW()))
[2017-05-02 16:10:20]	SQL :	SELECT COALESCE(COUNT(callid), 0) AS day 
							FROM 1_outboundcalls h 
							WHERE (DATE(h.`starttime`) = DATE(NOW()))
[2017-05-02 16:10:20]	SQL :	SELECT COALESCE(COUNT(callid), 0) AS day 
							FROM 1_mtracker h 
							WHERE (DATE(h.`starttime`) = DATE(NOW()))
[2017-05-02 16:10:20]	SQL :	SELECT COALESCE(COUNT(callid), 0) AS day 
							FROM 1_mtracker h 
							WHERE (DATE(h.`starttime`) = DATE(NOW()))
[2017-05-02 16:10:20]	SQL :	SELECT COALESCE(COUNT(callid), 0) AS day 
							FROM 1_mtracker h 
							WHERE (DATE(h.`starttime`) = DATE(NOW()))
[2017-05-02 16:10:22]	DEBUG :	Config Class Initialized
[2017-05-02 16:10:22]	DEBUG :	Hooks Class Initialized
[2017-05-02 16:10:22]	DEBUG :	URI Class Initialized
[2017-05-02 16:10:22]	DEBUG :	Router Class Initialized
[2017-05-02 16:10:22]	DEBUG :	Output Class Initialized
[2017-05-02 16:10:22]	DEBUG :	Input Class Initialized
[2017-05-02 16:10:22]	DEBUG :	Global POST and COOKIE data sanitized
[2017-05-02 16:10:22]	DEBUG :	Language Class Initialized
[2017-05-02 16:10:22]	DEBUG :	Loader Class Initialized
[2017-05-02 16:10:22]	DEBUG :	Helper loaded: url_helper
[2017-05-02 16:10:22]	DEBUG :	Helper loaded: form_helper
[2017-05-02 16:10:22]	DEBUG :	Helper loaded: html_helper
[2017-05-02 16:10:22]	DEBUG :	Helper loaded: email_helper
[2017-05-02 16:10:22]	DEBUG :	Helper loaded: ckeditor_helper
[2017-05-02 16:10:22]	DEBUG :	Helper loaded: mcube_helper
[2017-05-02 16:10:22]	DEBUG :	Database Driver Class Initialized
[2017-05-02 16:10:22]	ERROR :	Severity: 8192  --> mysql_pconnect(): The mysql extension is deprecated and will be removed in the future: use mysqli or PDO instead /var/www/html/mcnew/system/database/drivers/mysql/mysql_driver.php 88
[2017-05-02 16:10:22]	DEBUG :	Session Class Initialized
[2017-05-02 16:10:22]	DEBUG :	Helper loaded: string_helper
[2017-05-02 16:10:22]	DEBUG :	Encrypt Class Initialized
[2017-05-02 16:10:22]	DEBUG :	A session cookie was not found.
[2017-05-02 16:10:22]	SQL :	INSERT INTO `call_sessions` (`session_id`, `ip_address`, `user_agent`, `last_activity`) VALUES ('7763d769654537ec258e0599a761c396', '192.168.1.114', 'Dalvik/2.1.0 (Linux; U; Android 6.0; Panasonic T44', 1493721622)
[2017-05-02 16:10:23]	DEBUG :	Session routines successfully run
[2017-05-02 16:10:23]	DEBUG :	Table Class Initialized
[2017-05-02 16:10:23]	DEBUG :	Pagination Class Initialized
[2017-05-02 16:10:23]	DEBUG :	Config file loaded: config/paypallib_config.php
[2017-05-02 16:10:23]	DEBUG :	Form Validation Class Initialized
[2017-05-02 16:10:23]	DEBUG :	Email Class Initialized
[2017-05-02 16:10:23]	DEBUG :	Language file loaded: language/english/calendar_lang.php
[2017-05-02 16:10:23]	DEBUG :	Calendar Class Initialized
[2017-05-02 16:10:23]	DEBUG :	Controller Class Initialized
[2017-05-02 16:10:23]	DEBUG :	Model Class Initialized
[2017-05-02 16:10:23]	DEBUG :	Model Class Initialized
[2017-05-02 16:10:23]	DEBUG :	Model Class Initialized
[2017-05-02 16:10:23]	DEBUG :	Model Class Initialized
[2017-05-02 16:10:23]	DEBUG :	Model Class Initialized
[2017-05-02 16:10:23]	DEBUG :	Model Class Initialized
[2017-05-02 16:10:23]	DEBUG :	Model Class Initialized
[2017-05-02 16:10:23]	DEBUG :	Model Class Initialized
[2017-05-02 16:10:23]	DEBUG :	Model Class Initialized
[2017-05-02 16:10:23]	DEBUG :	Model Class Initialized
[2017-05-02 16:10:23]	DEBUG :	Model Class Initialized
[2017-05-02 16:10:23]	DEBUG :	Model Class Initialized
[2017-05-02 16:10:23]	DEBUG :	Model Class Initialized
[2017-05-02 16:10:23]	DEBUG :	Model Class Initialized
[2017-05-02 16:10:23]	DEBUG :	Plugin loaded: to_pdf_pi
[2017-05-02 16:10:23]	DEBUG :	Model Class Initialized
[2017-05-02 16:10:23]	DEBUG :	Language file loaded: language/english/form_validation_lang.php
[2017-05-02 16:10:23]	SQL :	SELECT uid,bid,eid FROM `user` WHERE authkey='1.1.d886b8e8a0615'
[2017-05-02 16:10:23]	DEBUG :	Database Driver Class Initialized
[2017-05-02 16:10:23]	SQL :	SELECT roleid FROM 1_employee
							WHERE eid='1'
							AND bid='1'
[2017-05-02 16:10:23]	DEBUG :	Database Driver Class Initialized
[2017-05-02 16:10:23]	SQL :	SELECT * FROM 1_user_role
							WHERE roleid='1'
							AND bid='1'
[2017-05-02 16:10:23]	SQL :	SELECT m.modid,m.modname,m.moddesc,
							COALESCE(o.opt_add,0) as opt_add,
							COALESCE(o.opt_view,0) as opt_view,
							COALESCE(o.opt_download,0) as opt_download,
							COALESCE(opt_delete,0) as opt_delete 
							FROM module m
							LEFT JOIN (SELECT * FROM 1_role_mod_opt
							WHERE roleid='1' 
							AND bid='1') as o
							ON m.modid=o.modid where m.status=1
[2017-05-02 16:10:23]	SQL :	SELECT a.*,f.fieldname FROM 1_role_access a
								LEFT JOIN systemfields f on a.fieldid=f.fieldid
								WHERE a.roleid='1'
								AND a.bid='1'
								AND a.fieldtype='s'
[2017-05-02 16:10:23]	SQL :	SELECT * FROM 1_role_access
								WHERE roleid='1'
								AND bid='1'
							AND fieldtype='c'
[2017-05-02 16:10:23]	SQL :	SELECT pri.landingnumber,pri.used,pri.climit,
								if(pri.status=0,'Not in use',
								if(pri.type='0','Calltrack',
								if(pri.type='1','IVRS',
								if(pri.type='2','PBX','Not Assign')))) as type,
								pri.associateid,
								if(pri.status=0,'None',
								if(pri.type='0',g.groupname,
								if(pri.type='1',i.title,
								if(pri.type='2',pbx.title,'None')))) as title,
								if(pri.status=0,'None',
								if(pri.type='0',ch.lastcall,
								if(pri.type='1',ih.lastcall,
								if(pri.type='2',ph.lastcall,'None')))) as lastcall
								FROM prinumbers pri
								LEFT JOIN 1_groups g on (g.prinumber=pri.number AND g.gid=pri.associateid AND g.status=1)
								LEFT JOIN 1_ivrs i on (i.prinumber=pri.number AND i.ivrsid=pri.associateid AND i.status=1)
								LEFT JOIN 1_pbx pbx on (pbx.prinumber=pri.number AND pbx.pbxid=pri.associateid AND pbx.status=1)
								LEFT JOIN (SELECT g.gid,max(h.starttime) as lastcall FROM 1_groups g LEFT JOIN 1_callhistory h on g.gid=h.gid GROUP BY g.gid) ch on g.gid=ch.gid
								LEFT JOIN (SELECT i.ivrsid,max(h.datetime) as lastcall FROM 1_ivrs i LEFT JOIN 1_ivrshistory h on i.ivrsid=h.ivrsid GROUP BY i.ivrsid) ih on i.ivrsid=ih.ivrsid
								LEFT JOIN (SELECT p.pbxid,max(h.starttime) as lastcall FROM 1_pbx p LEFT JOIN 1_pbxreport h on p.pbxid=h.pbxid GROUP BY p.pbxid) ph on pbx.pbxid=ph.pbxid
								WHERE pri.bid=1
[2017-05-02 16:10:23]	SQL :	SELECT balance FROM sms_bal  where bid='1'
[2017-05-02 16:10:23]	SQL :	SELECT balance FROM call_bal where bid='1'
[2017-05-02 16:10:23]	SQL :	SELECT DISTINCT(e.eid),e.empname,eb.start_time FROM 1_employee e
		                       LEFT JOIN 1_emp_break eb ON e.eid = eb.eid
		                       LEFT JOIN 1_groups d ON e.eid = d.eid
		                       WHERE eb.end_time='0000-00-00' AND e.selfdisable=1  GROUP BY d.gid,e.eid
[2017-05-02 16:10:23]	SQL :	SELECT COALESCE(COUNT(callid), 0) AS day 
							FROM 1_callhistory h 
							LEFT JOIN 1_groups d ON d.gid = h.gid 
							WHERE 1 AND (DATE(h.`starttime`) = DATE(NOW()))
[2017-05-02 16:10:23]	SQL :	SELECT COALESCE(COUNT(callid), 0) AS day 
							FROM 1_callhistory h 
							LEFT JOIN 1_groups d ON d.gid = h.gid 
							WHERE 1  AND (DATE(h.`starttime`)  > DATE(DATE_SUB(NOW(), INTERVAL 1 WEEK)))
[2017-05-02 16:10:23]	SQL :	SELECT COALESCE(COUNT(callid), 0) AS day 
							FROM 1_callhistory h 
							LEFT JOIN 1_groups d ON d.gid = h.gid 
							WHERE 1  AND (MONTH(h.`starttime` ) = MONTH(NOW()))
[2017-05-02 16:10:23]	SQL :	SELECT COALESCE(COUNT(pbxid), 0) AS day 
							FROM 1_pbxreport h 
							WHERE 1 AND (DATE(h.`starttime`) = DATE(NOW()))
[2017-05-02 16:10:23]	SQL :	SELECT COALESCE(COUNT(pbxid), 0) AS day 
							FROM 1_pbxreport h 
							WHERE 1  AND (DATE(h.`starttime`)  > DATE(DATE_SUB(NOW(), INTERVAL 1 WEEK)))
[2017-05-02 16:10:23]	SQL :	SELECT COALESCE(COUNT(pbxid), 0) AS day 
							FROM 1_pbxreport h 
							WHERE 1  AND (MONTH(h.`starttime` ) = MONTH(NOW()))
[2017-05-02 16:10:23]	SQL :	SELECT COALESCE(COUNT(hid), 0) AS day 
							   FROM 1_ivrshistory h 
						       WHERE 1 AND (DATE(h.`datetime`) = DATE(NOW()))
[2017-05-02 16:10:23]	SQL :	SELECT COALESCE(COUNT(hid), 0) AS day 
							   FROM 1_ivrshistory h 
						       WHERE 1  AND (DATE(h.`datetime`)  > DATE(DATE_SUB(NOW(), INTERVAL 1 WEEK)))
[2017-05-02 16:10:23]	SQL :	SELECT COALESCE(COUNT(hid), 0) AS day 
							   FROM 1_ivrshistory h 
						       WHERE 1  AND (MONTH(h.`datetime` ) = MONTH(NOW()))
[2017-05-02 16:10:23]	SQL :	SELECT COALESCE(COUNT(leadid), 0) AS day 
							FROM 1_leads a 
							LEFT JOIN 1_leads_groups d ON d.gid = a.gid 
							WHERE (DATE(a.`createdon`) = DATE(NOW()))
[2017-05-02 16:10:23]	SQL :	SELECT COALESCE(COUNT(leadid), 0) AS day 
							FROM 1_leads a 
							LEFT JOIN 1_leads_groups d ON d.gid = a.gid 
							WHERE (DATE(a.`createdon`) = DATE(NOW()))
[2017-05-02 16:10:23]	SQL :	SELECT COALESCE(COUNT(leadid), 0) AS day 
							FROM 1_leads a 
							LEFT JOIN 1_leads_groups d ON d.gid = a.gid 
							WHERE (DATE(a.`createdon`) = DATE(NOW()))
[2017-05-02 16:10:23]	SQL :	SELECT COALESCE(COUNT(tktid), 0) AS day 
							FROM 1_support_tickets a 
							LEFT JOIN 1_support_groups d ON d.gid = a.gid 
							WHERE (DATE(a.`createdon`) = DATE(NOW()))
[2017-05-02 16:10:23]	SQL :	SELECT COALESCE(COUNT(tktid), 0) AS day 
							FROM 1_support_tickets a 
							LEFT JOIN 1_support_groups d ON d.gid = a.gid 
							WHERE (DATE(a.`createdon`) = DATE(NOW()))
[2017-05-02 16:10:23]	SQL :	SELECT COALESCE(COUNT(tktid), 0) AS day 
							FROM 1_support_tickets a 
							LEFT JOIN 1_support_groups d ON d.gid = a.gid 
							WHERE (DATE(a.`createdon`) = DATE(NOW()))
[2017-05-02 16:10:23]	SQL :	SELECT COALESCE(COUNT(callid), 0) AS day 
							FROM 1_outboundcalls h 
							WHERE (DATE(h.`starttime`) = DATE(NOW()))
[2017-05-02 16:10:23]	SQL :	SELECT COALESCE(COUNT(callid), 0) AS day 
							FROM 1_outboundcalls h 
							WHERE (DATE(h.`starttime`) = DATE(NOW()))
[2017-05-02 16:10:23]	SQL :	SELECT COALESCE(COUNT(callid), 0) AS day 
							FROM 1_outboundcalls h 
							WHERE (DATE(h.`starttime`) = DATE(NOW()))
[2017-05-02 16:10:23]	SQL :	SELECT COALESCE(COUNT(callid), 0) AS day 
							FROM 1_mtracker h 
							WHERE (DATE(h.`starttime`) = DATE(NOW()))
[2017-05-02 16:10:23]	SQL :	SELECT COALESCE(COUNT(callid), 0) AS day 
							FROM 1_mtracker h 
							WHERE (DATE(h.`starttime`) = DATE(NOW()))
[2017-05-02 16:10:23]	SQL :	SELECT COALESCE(COUNT(callid), 0) AS day 
							FROM 1_mtracker h 
							WHERE (DATE(h.`starttime`) = DATE(NOW()))
[2017-05-02 16:10:28]	DEBUG :	Config Class Initialized
[2017-05-02 16:10:28]	DEBUG :	Hooks Class Initialized
[2017-05-02 16:10:28]	DEBUG :	URI Class Initialized
[2017-05-02 16:10:28]	DEBUG :	Router Class Initialized
[2017-05-02 16:10:28]	DEBUG :	Output Class Initialized
[2017-05-02 16:10:28]	DEBUG :	Input Class Initialized
[2017-05-02 16:10:28]	DEBUG :	Global POST and COOKIE data sanitized
[2017-05-02 16:10:28]	DEBUG :	Language Class Initialized
[2017-05-02 16:10:28]	DEBUG :	Loader Class Initialized
[2017-05-02 16:10:28]	DEBUG :	Helper loaded: url_helper
[2017-05-02 16:10:28]	DEBUG :	Helper loaded: form_helper
[2017-05-02 16:10:28]	DEBUG :	Helper loaded: html_helper
[2017-05-02 16:10:28]	DEBUG :	Helper loaded: email_helper
[2017-05-02 16:10:28]	DEBUG :	Helper loaded: ckeditor_helper
[2017-05-02 16:10:28]	DEBUG :	Helper loaded: mcube_helper
[2017-05-02 16:10:28]	DEBUG :	Database Driver Class Initialized
[2017-05-02 16:10:28]	ERROR :	Severity: 8192  --> mysql_pconnect(): The mysql extension is deprecated and will be removed in the future: use mysqli or PDO instead /var/www/html/mcnew/system/database/drivers/mysql/mysql_driver.php 88
[2017-05-02 16:10:28]	DEBUG :	Session Class Initialized
[2017-05-02 16:10:28]	DEBUG :	Helper loaded: string_helper
[2017-05-02 16:10:28]	DEBUG :	Encrypt Class Initialized
[2017-05-02 16:10:28]	DEBUG :	A session cookie was not found.
[2017-05-02 16:10:28]	SQL :	INSERT INTO `call_sessions` (`session_id`, `ip_address`, `user_agent`, `last_activity`) VALUES ('3d02668ec5f78e832109431028022bf1', '192.168.1.114', 'Dalvik/2.1.0 (Linux; U; Android 6.0; Panasonic T44', 1493721628)
[2017-05-02 16:10:28]	SQL :	DELETE FROM `call_sessions`
WHERE `last_activity` < 1493714428
[2017-05-02 16:10:28]	DEBUG :	Session garbage collection performed.
[2017-05-02 16:10:28]	DEBUG :	Session routines successfully run
[2017-05-02 16:10:28]	DEBUG :	Table Class Initialized
[2017-05-02 16:10:28]	DEBUG :	Pagination Class Initialized
[2017-05-02 16:10:28]	DEBUG :	Config file loaded: config/paypallib_config.php
[2017-05-02 16:10:28]	DEBUG :	Form Validation Class Initialized
[2017-05-02 16:10:28]	DEBUG :	Email Class Initialized
[2017-05-02 16:10:28]	DEBUG :	Language file loaded: language/english/calendar_lang.php
[2017-05-02 16:10:28]	DEBUG :	Calendar Class Initialized
[2017-05-02 16:10:28]	DEBUG :	Controller Class Initialized
[2017-05-02 16:10:28]	DEBUG :	Model Class Initialized
[2017-05-02 16:10:28]	DEBUG :	Model Class Initialized
[2017-05-02 16:10:28]	DEBUG :	Model Class Initialized
[2017-05-02 16:10:28]	DEBUG :	Model Class Initialized
[2017-05-02 16:10:28]	DEBUG :	Model Class Initialized
[2017-05-02 16:10:28]	DEBUG :	Model Class Initialized
[2017-05-02 16:10:28]	DEBUG :	Model Class Initialized
[2017-05-02 16:10:28]	DEBUG :	Model Class Initialized
[2017-05-02 16:10:28]	DEBUG :	Model Class Initialized
[2017-05-02 16:10:28]	DEBUG :	Model Class Initialized
[2017-05-02 16:10:28]	DEBUG :	Model Class Initialized
[2017-05-02 16:10:28]	DEBUG :	Model Class Initialized
[2017-05-02 16:10:28]	DEBUG :	Model Class Initialized
[2017-05-02 16:10:28]	DEBUG :	Model Class Initialized
[2017-05-02 16:10:28]	DEBUG :	Plugin loaded: to_pdf_pi
[2017-05-02 16:10:28]	DEBUG :	Model Class Initialized
[2017-05-02 16:10:28]	DEBUG :	Language file loaded: language/english/form_validation_lang.php
[2017-05-02 16:10:28]	SQL :	SELECT uid,bid,eid FROM `user` WHERE authkey='1.1.d886b8e8a0615'
[2017-05-02 16:10:28]	DEBUG :	Database Driver Class Initialized
[2017-05-02 16:10:28]	SQL :	SELECT roleid FROM 1_employee
							WHERE eid='1'
							AND bid='1'
[2017-05-02 16:10:28]	DEBUG :	Database Driver Class Initialized
[2017-05-02 16:10:28]	SQL :	SELECT * FROM 1_user_role
							WHERE roleid='1'
							AND bid='1'
[2017-05-02 16:10:28]	SQL :	SELECT m.modid,m.modname,m.moddesc,
							COALESCE(o.opt_add,0) as opt_add,
							COALESCE(o.opt_view,0) as opt_view,
							COALESCE(o.opt_download,0) as opt_download,
							COALESCE(opt_delete,0) as opt_delete 
							FROM module m
							LEFT JOIN (SELECT * FROM 1_role_mod_opt
							WHERE roleid='1' 
							AND bid='1') as o
							ON m.modid=o.modid where m.status=1
[2017-05-02 16:10:28]	SQL :	SELECT a.*,f.fieldname FROM 1_role_access a
								LEFT JOIN systemfields f on a.fieldid=f.fieldid
								WHERE a.roleid='1'
								AND a.bid='1'
								AND a.fieldtype='s'
[2017-05-02 16:10:28]	SQL :	SELECT * FROM 1_role_access
								WHERE roleid='1'
								AND bid='1'
							AND fieldtype='c'
[2017-05-02 16:10:28]	SQL :	SELECT pri.landingnumber,pri.used,pri.climit,
								if(pri.status=0,'Not in use',
								if(pri.type='0','Calltrack',
								if(pri.type='1','IVRS',
								if(pri.type='2','PBX','Not Assign')))) as type,
								pri.associateid,
								if(pri.status=0,'None',
								if(pri.type='0',g.groupname,
								if(pri.type='1',i.title,
								if(pri.type='2',pbx.title,'None')))) as title,
								if(pri.status=0,'None',
								if(pri.type='0',ch.lastcall,
								if(pri.type='1',ih.lastcall,
								if(pri.type='2',ph.lastcall,'None')))) as lastcall
								FROM prinumbers pri
								LEFT JOIN 1_groups g on (g.prinumber=pri.number AND g.gid=pri.associateid AND g.status=1)
								LEFT JOIN 1_ivrs i on (i.prinumber=pri.number AND i.ivrsid=pri.associateid AND i.status=1)
								LEFT JOIN 1_pbx pbx on (pbx.prinumber=pri.number AND pbx.pbxid=pri.associateid AND pbx.status=1)
								LEFT JOIN (SELECT g.gid,max(h.starttime) as lastcall FROM 1_groups g LEFT JOIN 1_callhistory h on g.gid=h.gid GROUP BY g.gid) ch on g.gid=ch.gid
								LEFT JOIN (SELECT i.ivrsid,max(h.datetime) as lastcall FROM 1_ivrs i LEFT JOIN 1_ivrshistory h on i.ivrsid=h.ivrsid GROUP BY i.ivrsid) ih on i.ivrsid=ih.ivrsid
								LEFT JOIN (SELECT p.pbxid,max(h.starttime) as lastcall FROM 1_pbx p LEFT JOIN 1_pbxreport h on p.pbxid=h.pbxid GROUP BY p.pbxid) ph on pbx.pbxid=ph.pbxid
								WHERE pri.bid=1
[2017-05-02 16:10:28]	SQL :	SELECT balance FROM sms_bal  where bid='1'
[2017-05-02 16:10:28]	SQL :	SELECT balance FROM call_bal where bid='1'
[2017-05-02 16:10:28]	SQL :	SELECT DISTINCT(e.eid),e.empname,eb.start_time FROM 1_employee e
		                       LEFT JOIN 1_emp_break eb ON e.eid = eb.eid
		                       LEFT JOIN 1_groups d ON e.eid = d.eid
		                       WHERE eb.end_time='0000-00-00' AND e.selfdisable=1  GROUP BY d.gid,e.eid
[2017-05-02 16:10:28]	SQL :	SELECT COALESCE(COUNT(callid), 0) AS day 
							FROM 1_callhistory h 
							LEFT JOIN 1_groups d ON d.gid = h.gid 
							WHERE 1 AND (DATE(h.`starttime`) = DATE(NOW()))
[2017-05-02 16:10:28]	SQL :	SELECT COALESCE(COUNT(callid), 0) AS day 
							FROM 1_callhistory h 
							LEFT JOIN 1_groups d ON d.gid = h.gid 
							WHERE 1  AND (DATE(h.`starttime`)  > DATE(DATE_SUB(NOW(), INTERVAL 1 WEEK)))
[2017-05-02 16:10:28]	SQL :	SELECT COALESCE(COUNT(callid), 0) AS day 
							FROM 1_callhistory h 
							LEFT JOIN 1_groups d ON d.gid = h.gid 
							WHERE 1  AND (MONTH(h.`starttime` ) = MONTH(NOW()))
[2017-05-02 16:10:28]	SQL :	SELECT COALESCE(COUNT(pbxid), 0) AS day 
							FROM 1_pbxreport h 
							WHERE 1 AND (DATE(h.`starttime`) = DATE(NOW()))
[2017-05-02 16:10:28]	SQL :	SELECT COALESCE(COUNT(pbxid), 0) AS day 
							FROM 1_pbxreport h 
							WHERE 1  AND (DATE(h.`starttime`)  > DATE(DATE_SUB(NOW(), INTERVAL 1 WEEK)))
[2017-05-02 16:10:28]	SQL :	SELECT COALESCE(COUNT(pbxid), 0) AS day 
							FROM 1_pbxreport h 
							WHERE 1  AND (MONTH(h.`starttime` ) = MONTH(NOW()))
[2017-05-02 16:10:28]	SQL :	SELECT COALESCE(COUNT(hid), 0) AS day 
							   FROM 1_ivrshistory h 
						       WHERE 1 AND (DATE(h.`datetime`) = DATE(NOW()))
[2017-05-02 16:10:28]	SQL :	SELECT COALESCE(COUNT(hid), 0) AS day 
							   FROM 1_ivrshistory h 
						       WHERE 1  AND (DATE(h.`datetime`)  > DATE(DATE_SUB(NOW(), INTERVAL 1 WEEK)))
[2017-05-02 16:10:28]	SQL :	SELECT COALESCE(COUNT(hid), 0) AS day 
							   FROM 1_ivrshistory h 
						       WHERE 1  AND (MONTH(h.`datetime` ) = MONTH(NOW()))
[2017-05-02 16:10:28]	SQL :	SELECT COALESCE(COUNT(leadid), 0) AS day 
							FROM 1_leads a 
							LEFT JOIN 1_leads_groups d ON d.gid = a.gid 
							WHERE (DATE(a.`createdon`) = DATE(NOW()))
[2017-05-02 16:10:28]	SQL :	SELECT COALESCE(COUNT(leadid), 0) AS day 
							FROM 1_leads a 
							LEFT JOIN 1_leads_groups d ON d.gid = a.gid 
							WHERE (DATE(a.`createdon`) = DATE(NOW()))
[2017-05-02 16:10:28]	SQL :	SELECT COALESCE(COUNT(leadid), 0) AS day 
							FROM 1_leads a 
							LEFT JOIN 1_leads_groups d ON d.gid = a.gid 
							WHERE (DATE(a.`createdon`) = DATE(NOW()))
[2017-05-02 16:10:28]	SQL :	SELECT COALESCE(COUNT(tktid), 0) AS day 
							FROM 1_support_tickets a 
							LEFT JOIN 1_support_groups d ON d.gid = a.gid 
							WHERE (DATE(a.`createdon`) = DATE(NOW()))
[2017-05-02 16:10:28]	SQL :	SELECT COALESCE(COUNT(tktid), 0) AS day 
							FROM 1_support_tickets a 
							LEFT JOIN 1_support_groups d ON d.gid = a.gid 
							WHERE (DATE(a.`createdon`) = DATE(NOW()))
[2017-05-02 16:10:28]	SQL :	SELECT COALESCE(COUNT(tktid), 0) AS day 
							FROM 1_support_tickets a 
							LEFT JOIN 1_support_groups d ON d.gid = a.gid 
							WHERE (DATE(a.`createdon`) = DATE(NOW()))
[2017-05-02 16:10:28]	SQL :	SELECT COALESCE(COUNT(callid), 0) AS day 
							FROM 1_outboundcalls h 
							WHERE (DATE(h.`starttime`) = DATE(NOW()))
[2017-05-02 16:10:28]	SQL :	SELECT COALESCE(COUNT(callid), 0) AS day 
							FROM 1_outboundcalls h 
							WHERE (DATE(h.`starttime`) = DATE(NOW()))
[2017-05-02 16:10:28]	SQL :	SELECT COALESCE(COUNT(callid), 0) AS day 
							FROM 1_outboundcalls h 
							WHERE (DATE(h.`starttime`) = DATE(NOW()))
[2017-05-02 16:10:28]	SQL :	SELECT COALESCE(COUNT(callid), 0) AS day 
							FROM 1_mtracker h 
							WHERE (DATE(h.`starttime`) = DATE(NOW()))
[2017-05-02 16:10:28]	SQL :	SELECT COALESCE(COUNT(callid), 0) AS day 
							FROM 1_mtracker h 
							WHERE (DATE(h.`starttime`) = DATE(NOW()))
[2017-05-02 16:10:28]	SQL :	SELECT COALESCE(COUNT(callid), 0) AS day 
							FROM 1_mtracker h 
							WHERE (DATE(h.`starttime`) = DATE(NOW()))
[2017-05-02 16:10:31]	DEBUG :	Config Class Initialized
[2017-05-02 16:10:31]	DEBUG :	Hooks Class Initialized
[2017-05-02 16:10:31]	DEBUG :	URI Class Initialized
[2017-05-02 16:10:31]	DEBUG :	Router Class Initialized
[2017-05-02 16:10:31]	DEBUG :	Output Class Initialized
[2017-05-02 16:10:31]	DEBUG :	Input Class Initialized
[2017-05-02 16:10:31]	DEBUG :	Global POST and COOKIE data sanitized
[2017-05-02 16:10:31]	DEBUG :	Language Class Initialized
[2017-05-02 16:10:31]	DEBUG :	Loader Class Initialized
[2017-05-02 16:10:31]	DEBUG :	Helper loaded: url_helper
[2017-05-02 16:10:31]	DEBUG :	Helper loaded: form_helper
[2017-05-02 16:10:31]	DEBUG :	Helper loaded: html_helper
[2017-05-02 16:10:31]	DEBUG :	Helper loaded: email_helper
[2017-05-02 16:10:31]	DEBUG :	Helper loaded: ckeditor_helper
[2017-05-02 16:10:31]	DEBUG :	Helper loaded: mcube_helper
[2017-05-02 16:10:31]	DEBUG :	Database Driver Class Initialized
[2017-05-02 16:10:31]	ERROR :	Severity: 8192  --> mysql_pconnect(): The mysql extension is deprecated and will be removed in the future: use mysqli or PDO instead /var/www/html/mcnew/system/database/drivers/mysql/mysql_driver.php 88
[2017-05-02 16:10:31]	DEBUG :	Session Class Initialized
[2017-05-02 16:10:31]	DEBUG :	Helper loaded: string_helper
[2017-05-02 16:10:31]	DEBUG :	Encrypt Class Initialized
[2017-05-02 16:10:31]	DEBUG :	A session cookie was not found.
[2017-05-02 16:10:31]	SQL :	INSERT INTO `call_sessions` (`session_id`, `ip_address`, `user_agent`, `last_activity`) VALUES ('0e353aae3244a010dc108ae10f672eea', '192.168.1.114', 'Dalvik/2.1.0 (Linux; U; Android 6.0; Panasonic T44', 1493721631)
[2017-05-02 16:10:31]	DEBUG :	Session routines successfully run
[2017-05-02 16:10:31]	DEBUG :	Table Class Initialized
[2017-05-02 16:10:31]	DEBUG :	Pagination Class Initialized
[2017-05-02 16:10:31]	DEBUG :	Config file loaded: config/paypallib_config.php
[2017-05-02 16:10:31]	DEBUG :	Form Validation Class Initialized
[2017-05-02 16:10:31]	DEBUG :	Email Class Initialized
[2017-05-02 16:10:31]	DEBUG :	Language file loaded: language/english/calendar_lang.php
[2017-05-02 16:10:31]	DEBUG :	Calendar Class Initialized
[2017-05-02 16:10:31]	DEBUG :	Controller Class Initialized
[2017-05-02 16:10:31]	DEBUG :	Model Class Initialized
[2017-05-02 16:10:31]	DEBUG :	Model Class Initialized
[2017-05-02 16:10:31]	DEBUG :	Model Class Initialized
[2017-05-02 16:10:31]	DEBUG :	Model Class Initialized
[2017-05-02 16:10:31]	DEBUG :	Model Class Initialized
[2017-05-02 16:10:31]	DEBUG :	Model Class Initialized
[2017-05-02 16:10:31]	DEBUG :	Model Class Initialized
[2017-05-02 16:10:31]	DEBUG :	Model Class Initialized
[2017-05-02 16:10:31]	DEBUG :	Model Class Initialized
[2017-05-02 16:10:31]	DEBUG :	Model Class Initialized
[2017-05-02 16:10:31]	DEBUG :	Model Class Initialized
[2017-05-02 16:10:31]	DEBUG :	Model Class Initialized
[2017-05-02 16:10:31]	DEBUG :	Model Class Initialized
[2017-05-02 16:10:31]	DEBUG :	Model Class Initialized
[2017-05-02 16:10:31]	DEBUG :	Plugin loaded: to_pdf_pi
[2017-05-02 16:10:31]	DEBUG :	Model Class Initialized
[2017-05-02 16:10:31]	DEBUG :	Language file loaded: language/english/form_validation_lang.php
[2017-05-02 16:10:31]	SQL :	SELECT uid,bid,eid FROM `user` WHERE authkey='1.1.d886b8e8a0615'
[2017-05-02 16:10:31]	DEBUG :	Database Driver Class Initialized
[2017-05-02 16:10:31]	SQL :	SELECT roleid FROM 1_employee
							WHERE eid='1'
							AND bid='1'
[2017-05-02 16:10:31]	DEBUG :	Database Driver Class Initialized
[2017-05-02 16:10:31]	SQL :	SELECT * FROM 1_user_role
							WHERE roleid='1'
							AND bid='1'
[2017-05-02 16:10:31]	SQL :	SELECT m.modid,m.modname,m.moddesc,
							COALESCE(o.opt_add,0) as opt_add,
							COALESCE(o.opt_view,0) as opt_view,
							COALESCE(o.opt_download,0) as opt_download,
							COALESCE(opt_delete,0) as opt_delete 
							FROM module m
							LEFT JOIN (SELECT * FROM 1_role_mod_opt
							WHERE roleid='1' 
							AND bid='1') as o
							ON m.modid=o.modid where m.status=1
[2017-05-02 16:10:31]	SQL :	SELECT a.*,f.fieldname FROM 1_role_access a
								LEFT JOIN systemfields f on a.fieldid=f.fieldid
								WHERE a.roleid='1'
								AND a.bid='1'
								AND a.fieldtype='s'
[2017-05-02 16:10:31]	SQL :	SELECT * FROM 1_role_access
								WHERE roleid='1'
								AND bid='1'
							AND fieldtype='c'
[2017-05-02 16:10:31]	SQL :	SELECT pri.landingnumber,pri.used,pri.climit,
								if(pri.status=0,'Not in use',
								if(pri.type='0','Calltrack',
								if(pri.type='1','IVRS',
								if(pri.type='2','PBX','Not Assign')))) as type,
								pri.associateid,
								if(pri.status=0,'None',
								if(pri.type='0',g.groupname,
								if(pri.type='1',i.title,
								if(pri.type='2',pbx.title,'None')))) as title,
								if(pri.status=0,'None',
								if(pri.type='0',ch.lastcall,
								if(pri.type='1',ih.lastcall,
								if(pri.type='2',ph.lastcall,'None')))) as lastcall
								FROM prinumbers pri
								LEFT JOIN 1_groups g on (g.prinumber=pri.number AND g.gid=pri.associateid AND g.status=1)
								LEFT JOIN 1_ivrs i on (i.prinumber=pri.number AND i.ivrsid=pri.associateid AND i.status=1)
								LEFT JOIN 1_pbx pbx on (pbx.prinumber=pri.number AND pbx.pbxid=pri.associateid AND pbx.status=1)
								LEFT JOIN (SELECT g.gid,max(h.starttime) as lastcall FROM 1_groups g LEFT JOIN 1_callhistory h on g.gid=h.gid GROUP BY g.gid) ch on g.gid=ch.gid
								LEFT JOIN (SELECT i.ivrsid,max(h.datetime) as lastcall FROM 1_ivrs i LEFT JOIN 1_ivrshistory h on i.ivrsid=h.ivrsid GROUP BY i.ivrsid) ih on i.ivrsid=ih.ivrsid
								LEFT JOIN (SELECT p.pbxid,max(h.starttime) as lastcall FROM 1_pbx p LEFT JOIN 1_pbxreport h on p.pbxid=h.pbxid GROUP BY p.pbxid) ph on pbx.pbxid=ph.pbxid
								WHERE pri.bid=1
[2017-05-02 16:10:31]	SQL :	SELECT balance FROM sms_bal  where bid='1'
[2017-05-02 16:10:31]	SQL :	SELECT balance FROM call_bal where bid='1'
[2017-05-02 16:10:31]	SQL :	SELECT DISTINCT(e.eid),e.empname,eb.start_time FROM 1_employee e
		                       LEFT JOIN 1_emp_break eb ON e.eid = eb.eid
		                       LEFT JOIN 1_groups d ON e.eid = d.eid
		                       WHERE eb.end_time='0000-00-00' AND e.selfdisable=1  GROUP BY d.gid,e.eid
[2017-05-02 16:10:31]	SQL :	SELECT COALESCE(COUNT(callid), 0) AS day 
							FROM 1_callhistory h 
							LEFT JOIN 1_groups d ON d.gid = h.gid 
							WHERE 1 AND (DATE(h.`starttime`) = DATE(NOW()))
[2017-05-02 16:10:31]	SQL :	SELECT COALESCE(COUNT(callid), 0) AS day 
							FROM 1_callhistory h 
							LEFT JOIN 1_groups d ON d.gid = h.gid 
							WHERE 1  AND (DATE(h.`starttime`)  > DATE(DATE_SUB(NOW(), INTERVAL 1 WEEK)))
[2017-05-02 16:10:31]	SQL :	SELECT COALESCE(COUNT(callid), 0) AS day 
							FROM 1_callhistory h 
							LEFT JOIN 1_groups d ON d.gid = h.gid 
							WHERE 1  AND (MONTH(h.`starttime` ) = MONTH(NOW()))
[2017-05-02 16:10:31]	SQL :	SELECT COALESCE(COUNT(pbxid), 0) AS day 
							FROM 1_pbxreport h 
							WHERE 1 AND (DATE(h.`starttime`) = DATE(NOW()))
[2017-05-02 16:10:31]	SQL :	SELECT COALESCE(COUNT(pbxid), 0) AS day 
							FROM 1_pbxreport h 
							WHERE 1  AND (DATE(h.`starttime`)  > DATE(DATE_SUB(NOW(), INTERVAL 1 WEEK)))
[2017-05-02 16:10:31]	SQL :	SELECT COALESCE(COUNT(pbxid), 0) AS day 
							FROM 1_pbxreport h 
							WHERE 1  AND (MONTH(h.`starttime` ) = MONTH(NOW()))
[2017-05-02 16:10:31]	SQL :	SELECT COALESCE(COUNT(hid), 0) AS day 
							   FROM 1_ivrshistory h 
						       WHERE 1 AND (DATE(h.`datetime`) = DATE(NOW()))
[2017-05-02 16:10:31]	SQL :	SELECT COALESCE(COUNT(hid), 0) AS day 
							   FROM 1_ivrshistory h 
						       WHERE 1  AND (DATE(h.`datetime`)  > DATE(DATE_SUB(NOW(), INTERVAL 1 WEEK)))
[2017-05-02 16:10:31]	SQL :	SELECT COALESCE(COUNT(hid), 0) AS day 
							   FROM 1_ivrshistory h 
						       WHERE 1  AND (MONTH(h.`datetime` ) = MONTH(NOW()))
[2017-05-02 16:10:31]	SQL :	SELECT COALESCE(COUNT(leadid), 0) AS day 
							FROM 1_leads a 
							LEFT JOIN 1_leads_groups d ON d.gid = a.gid 
							WHERE (DATE(a.`createdon`) = DATE(NOW()))
[2017-05-02 16:10:31]	SQL :	SELECT COALESCE(COUNT(leadid), 0) AS day 
							FROM 1_leads a 
							LEFT JOIN 1_leads_groups d ON d.gid = a.gid 
							WHERE (DATE(a.`createdon`) = DATE(NOW()))
[2017-05-02 16:10:31]	SQL :	SELECT COALESCE(COUNT(leadid), 0) AS day 
							FROM 1_leads a 
							LEFT JOIN 1_leads_groups d ON d.gid = a.gid 
							WHERE (DATE(a.`createdon`) = DATE(NOW()))
[2017-05-02 16:10:31]	SQL :	SELECT COALESCE(COUNT(tktid), 0) AS day 
							FROM 1_support_tickets a 
							LEFT JOIN 1_support_groups d ON d.gid = a.gid 
							WHERE (DATE(a.`createdon`) = DATE(NOW()))
[2017-05-02 16:10:31]	SQL :	SELECT COALESCE(COUNT(tktid), 0) AS day 
							FROM 1_support_tickets a 
							LEFT JOIN 1_support_groups d ON d.gid = a.gid 
							WHERE (DATE(a.`createdon`) = DATE(NOW()))
[2017-05-02 16:10:31]	SQL :	SELECT COALESCE(COUNT(tktid), 0) AS day 
							FROM 1_support_tickets a 
							LEFT JOIN 1_support_groups d ON d.gid = a.gid 
							WHERE (DATE(a.`createdon`) = DATE(NOW()))
[2017-05-02 16:10:31]	SQL :	SELECT COALESCE(COUNT(callid), 0) AS day 
							FROM 1_outboundcalls h 
							WHERE (DATE(h.`starttime`) = DATE(NOW()))
[2017-05-02 16:10:31]	SQL :	SELECT COALESCE(COUNT(callid), 0) AS day 
							FROM 1_outboundcalls h 
							WHERE (DATE(h.`starttime`) = DATE(NOW()))
[2017-05-02 16:10:31]	SQL :	SELECT COALESCE(COUNT(callid), 0) AS day 
							FROM 1_outboundcalls h 
							WHERE (DATE(h.`starttime`) = DATE(NOW()))
[2017-05-02 16:10:31]	SQL :	SELECT COALESCE(COUNT(callid), 0) AS day 
							FROM 1_mtracker h 
							WHERE (DATE(h.`starttime`) = DATE(NOW()))
[2017-05-02 16:10:31]	SQL :	SELECT COALESCE(COUNT(callid), 0) AS day 
							FROM 1_mtracker h 
							WHERE (DATE(h.`starttime`) = DATE(NOW()))
[2017-05-02 16:10:31]	SQL :	SELECT COALESCE(COUNT(callid), 0) AS day 
							FROM 1_mtracker h 
							WHERE (DATE(h.`starttime`) = DATE(NOW()))
[2017-05-02 16:10:35]	DEBUG :	Config Class Initialized
[2017-05-02 16:10:35]	DEBUG :	Hooks Class Initialized
[2017-05-02 16:10:35]	DEBUG :	URI Class Initialized
[2017-05-02 16:10:35]	DEBUG :	Router Class Initialized
[2017-05-02 16:10:35]	DEBUG :	Output Class Initialized
[2017-05-02 16:10:35]	DEBUG :	Input Class Initialized
[2017-05-02 16:10:35]	DEBUG :	Global POST and COOKIE data sanitized
[2017-05-02 16:10:35]	DEBUG :	Language Class Initialized
[2017-05-02 16:10:35]	DEBUG :	Loader Class Initialized
[2017-05-02 16:10:35]	DEBUG :	Helper loaded: url_helper
[2017-05-02 16:10:35]	DEBUG :	Helper loaded: form_helper
[2017-05-02 16:10:35]	DEBUG :	Helper loaded: html_helper
[2017-05-02 16:10:35]	DEBUG :	Helper loaded: email_helper
[2017-05-02 16:10:35]	DEBUG :	Helper loaded: ckeditor_helper
[2017-05-02 16:10:35]	DEBUG :	Helper loaded: mcube_helper
[2017-05-02 16:10:35]	DEBUG :	Database Driver Class Initialized
[2017-05-02 16:10:35]	ERROR :	Severity: 8192  --> mysql_pconnect(): The mysql extension is deprecated and will be removed in the future: use mysqli or PDO instead /var/www/html/mcnew/system/database/drivers/mysql/mysql_driver.php 88
[2017-05-02 16:10:35]	DEBUG :	Session Class Initialized
[2017-05-02 16:10:35]	DEBUG :	Helper loaded: string_helper
[2017-05-02 16:10:35]	DEBUG :	Encrypt Class Initialized
[2017-05-02 16:10:35]	DEBUG :	A session cookie was not found.
[2017-05-02 16:10:35]	SQL :	INSERT INTO `call_sessions` (`session_id`, `ip_address`, `user_agent`, `last_activity`) VALUES ('5ad6b8afc71bb2d61eef195016b7f198', '192.168.1.114', 'Dalvik/2.1.0 (Linux; U; Android 6.0; Panasonic T44', 1493721635)
[2017-05-02 16:10:35]	DEBUG :	Session routines successfully run
[2017-05-02 16:10:35]	DEBUG :	Table Class Initialized
[2017-05-02 16:10:35]	DEBUG :	Pagination Class Initialized
[2017-05-02 16:10:35]	DEBUG :	Config file loaded: config/paypallib_config.php
[2017-05-02 16:10:35]	DEBUG :	Form Validation Class Initialized
[2017-05-02 16:10:35]	DEBUG :	Email Class Initialized
[2017-05-02 16:10:35]	DEBUG :	Language file loaded: language/english/calendar_lang.php
[2017-05-02 16:10:35]	DEBUG :	Calendar Class Initialized
[2017-05-02 16:10:35]	DEBUG :	Controller Class Initialized
[2017-05-02 16:10:35]	DEBUG :	Model Class Initialized
[2017-05-02 16:10:35]	DEBUG :	Model Class Initialized
[2017-05-02 16:10:35]	DEBUG :	Model Class Initialized
[2017-05-02 16:10:35]	DEBUG :	Model Class Initialized
[2017-05-02 16:10:35]	DEBUG :	Model Class Initialized
[2017-05-02 16:10:35]	DEBUG :	Model Class Initialized
[2017-05-02 16:10:35]	DEBUG :	Model Class Initialized
[2017-05-02 16:10:35]	DEBUG :	Model Class Initialized
[2017-05-02 16:10:35]	DEBUG :	Model Class Initialized
[2017-05-02 16:10:35]	DEBUG :	Model Class Initialized
[2017-05-02 16:10:35]	DEBUG :	Model Class Initialized
[2017-05-02 16:10:35]	DEBUG :	Model Class Initialized
[2017-05-02 16:10:35]	DEBUG :	Model Class Initialized
[2017-05-02 16:10:35]	DEBUG :	Model Class Initialized
[2017-05-02 16:10:35]	DEBUG :	Plugin loaded: to_pdf_pi
[2017-05-02 16:10:35]	DEBUG :	Model Class Initialized
[2017-05-02 16:10:35]	DEBUG :	Language file loaded: language/english/form_validation_lang.php
[2017-05-02 16:10:35]	SQL :	SELECT uid,bid,eid FROM `user` WHERE authkey='1.1.d886b8e8a0615'
[2017-05-02 16:10:35]	DEBUG :	Database Driver Class Initialized
[2017-05-02 16:10:35]	SQL :	SELECT roleid FROM 1_employee
							WHERE eid='1'
							AND bid='1'
[2017-05-02 16:10:35]	DEBUG :	Database Driver Class Initialized
[2017-05-02 16:10:35]	SQL :	SELECT * FROM 1_user_role
							WHERE roleid='1'
							AND bid='1'
[2017-05-02 16:10:35]	SQL :	SELECT m.modid,m.modname,m.moddesc,
							COALESCE(o.opt_add,0) as opt_add,
							COALESCE(o.opt_view,0) as opt_view,
							COALESCE(o.opt_download,0) as opt_download,
							COALESCE(opt_delete,0) as opt_delete 
							FROM module m
							LEFT JOIN (SELECT * FROM 1_role_mod_opt
							WHERE roleid='1' 
							AND bid='1') as o
							ON m.modid=o.modid where m.status=1
[2017-05-02 16:10:35]	SQL :	SELECT a.*,f.fieldname FROM 1_role_access a
								LEFT JOIN systemfields f on a.fieldid=f.fieldid
								WHERE a.roleid='1'
								AND a.bid='1'
								AND a.fieldtype='s'
[2017-05-02 16:10:35]	SQL :	SELECT * FROM 1_role_access
								WHERE roleid='1'
								AND bid='1'
							AND fieldtype='c'
[2017-05-02 16:10:35]	SQL :	SELECT pri.landingnumber,pri.used,pri.climit,
								if(pri.status=0,'Not in use',
								if(pri.type='0','Calltrack',
								if(pri.type='1','IVRS',
								if(pri.type='2','PBX','Not Assign')))) as type,
								pri.associateid,
								if(pri.status=0,'None',
								if(pri.type='0',g.groupname,
								if(pri.type='1',i.title,
								if(pri.type='2',pbx.title,'None')))) as title,
								if(pri.status=0,'None',
								if(pri.type='0',ch.lastcall,
								if(pri.type='1',ih.lastcall,
								if(pri.type='2',ph.lastcall,'None')))) as lastcall
								FROM prinumbers pri
								LEFT JOIN 1_groups g on (g.prinumber=pri.number AND g.gid=pri.associateid AND g.status=1)
								LEFT JOIN 1_ivrs i on (i.prinumber=pri.number AND i.ivrsid=pri.associateid AND i.status=1)
								LEFT JOIN 1_pbx pbx on (pbx.prinumber=pri.number AND pbx.pbxid=pri.associateid AND pbx.status=1)
								LEFT JOIN (SELECT g.gid,max(h.starttime) as lastcall FROM 1_groups g LEFT JOIN 1_callhistory h on g.gid=h.gid GROUP BY g.gid) ch on g.gid=ch.gid
								LEFT JOIN (SELECT i.ivrsid,max(h.datetime) as lastcall FROM 1_ivrs i LEFT JOIN 1_ivrshistory h on i.ivrsid=h.ivrsid GROUP BY i.ivrsid) ih on i.ivrsid=ih.ivrsid
								LEFT JOIN (SELECT p.pbxid,max(h.starttime) as lastcall FROM 1_pbx p LEFT JOIN 1_pbxreport h on p.pbxid=h.pbxid GROUP BY p.pbxid) ph on pbx.pbxid=ph.pbxid
								WHERE pri.bid=1
[2017-05-02 16:10:35]	SQL :	SELECT balance FROM sms_bal  where bid='1'
[2017-05-02 16:10:35]	SQL :	SELECT balance FROM call_bal where bid='1'
[2017-05-02 16:10:35]	SQL :	SELECT DISTINCT(e.eid),e.empname,eb.start_time FROM 1_employee e
		                       LEFT JOIN 1_emp_break eb ON e.eid = eb.eid
		                       LEFT JOIN 1_groups d ON e.eid = d.eid
		                       WHERE eb.end_time='0000-00-00' AND e.selfdisable=1  GROUP BY d.gid,e.eid
[2017-05-02 16:10:35]	SQL :	SELECT COALESCE(COUNT(callid), 0) AS day 
							FROM 1_callhistory h 
							LEFT JOIN 1_groups d ON d.gid = h.gid 
							WHERE 1 AND (DATE(h.`starttime`) = DATE(NOW()))
[2017-05-02 16:10:35]	SQL :	SELECT COALESCE(COUNT(callid), 0) AS day 
							FROM 1_callhistory h 
							LEFT JOIN 1_groups d ON d.gid = h.gid 
							WHERE 1  AND (DATE(h.`starttime`)  > DATE(DATE_SUB(NOW(), INTERVAL 1 WEEK)))
[2017-05-02 16:10:35]	SQL :	SELECT COALESCE(COUNT(callid), 0) AS day 
							FROM 1_callhistory h 
							LEFT JOIN 1_groups d ON d.gid = h.gid 
							WHERE 1  AND (MONTH(h.`starttime` ) = MONTH(NOW()))
[2017-05-02 16:10:35]	SQL :	SELECT COALESCE(COUNT(pbxid), 0) AS day 
							FROM 1_pbxreport h 
							WHERE 1 AND (DATE(h.`starttime`) = DATE(NOW()))
[2017-05-02 16:10:35]	SQL :	SELECT COALESCE(COUNT(pbxid), 0) AS day 
							FROM 1_pbxreport h 
							WHERE 1  AND (DATE(h.`starttime`)  > DATE(DATE_SUB(NOW(), INTERVAL 1 WEEK)))
[2017-05-02 16:10:35]	SQL :	SELECT COALESCE(COUNT(pbxid), 0) AS day 
							FROM 1_pbxreport h 
							WHERE 1  AND (MONTH(h.`starttime` ) = MONTH(NOW()))
[2017-05-02 16:10:35]	SQL :	SELECT COALESCE(COUNT(hid), 0) AS day 
							   FROM 1_ivrshistory h 
						       WHERE 1 AND (DATE(h.`datetime`) = DATE(NOW()))
[2017-05-02 16:10:35]	SQL :	SELECT COALESCE(COUNT(hid), 0) AS day 
							   FROM 1_ivrshistory h 
						       WHERE 1  AND (DATE(h.`datetime`)  > DATE(DATE_SUB(NOW(), INTERVAL 1 WEEK)))
[2017-05-02 16:10:35]	SQL :	SELECT COALESCE(COUNT(hid), 0) AS day 
							   FROM 1_ivrshistory h 
						       WHERE 1  AND (MONTH(h.`datetime` ) = MONTH(NOW()))
[2017-05-02 16:10:35]	SQL :	SELECT COALESCE(COUNT(leadid), 0) AS day 
							FROM 1_leads a 
							LEFT JOIN 1_leads_groups d ON d.gid = a.gid 
							WHERE (DATE(a.`createdon`) = DATE(NOW()))
[2017-05-02 16:10:35]	SQL :	SELECT COALESCE(COUNT(leadid), 0) AS day 
							FROM 1_leads a 
							LEFT JOIN 1_leads_groups d ON d.gid = a.gid 
							WHERE (DATE(a.`createdon`) = DATE(NOW()))
[2017-05-02 16:10:35]	SQL :	SELECT COALESCE(COUNT(leadid), 0) AS day 
							FROM 1_leads a 
							LEFT JOIN 1_leads_groups d ON d.gid = a.gid 
							WHERE (DATE(a.`createdon`) = DATE(NOW()))
[2017-05-02 16:10:35]	SQL :	SELECT COALESCE(COUNT(tktid), 0) AS day 
							FROM 1_support_tickets a 
							LEFT JOIN 1_support_groups d ON d.gid = a.gid 
							WHERE (DATE(a.`createdon`) = DATE(NOW()))
[2017-05-02 16:10:35]	SQL :	SELECT COALESCE(COUNT(tktid), 0) AS day 
							FROM 1_support_tickets a 
							LEFT JOIN 1_support_groups d ON d.gid = a.gid 
							WHERE (DATE(a.`createdon`) = DATE(NOW()))
[2017-05-02 16:10:35]	SQL :	SELECT COALESCE(COUNT(tktid), 0) AS day 
							FROM 1_support_tickets a 
							LEFT JOIN 1_support_groups d ON d.gid = a.gid 
							WHERE (DATE(a.`createdon`) = DATE(NOW()))
[2017-05-02 16:10:35]	SQL :	SELECT COALESCE(COUNT(callid), 0) AS day 
							FROM 1_outboundcalls h 
							WHERE (DATE(h.`starttime`) = DATE(NOW()))
[2017-05-02 16:10:35]	SQL :	SELECT COALESCE(COUNT(callid), 0) AS day 
							FROM 1_outboundcalls h 
							WHERE (DATE(h.`starttime`) = DATE(NOW()))
[2017-05-02 16:10:35]	SQL :	SELECT COALESCE(COUNT(callid), 0) AS day 
							FROM 1_outboundcalls h 
							WHERE (DATE(h.`starttime`) = DATE(NOW()))
[2017-05-02 16:10:35]	SQL :	SELECT COALESCE(COUNT(callid), 0) AS day 
							FROM 1_mtracker h 
							WHERE (DATE(h.`starttime`) = DATE(NOW()))
[2017-05-02 16:10:35]	SQL :	SELECT COALESCE(COUNT(callid), 0) AS day 
							FROM 1_mtracker h 
							WHERE (DATE(h.`starttime`) = DATE(NOW()))
[2017-05-02 16:10:35]	SQL :	SELECT COALESCE(COUNT(callid), 0) AS day 
							FROM 1_mtracker h 
							WHERE (DATE(h.`starttime`) = DATE(NOW()))
[2017-05-02 16:10:38]	DEBUG :	Config Class Initialized
[2017-05-02 16:10:38]	DEBUG :	Hooks Class Initialized
[2017-05-02 16:10:38]	DEBUG :	URI Class Initialized
[2017-05-02 16:10:38]	DEBUG :	Router Class Initialized
[2017-05-02 16:10:38]	DEBUG :	Output Class Initialized
[2017-05-02 16:10:38]	DEBUG :	Input Class Initialized
[2017-05-02 16:10:38]	DEBUG :	Global POST and COOKIE data sanitized
[2017-05-02 16:10:38]	DEBUG :	Language Class Initialized
[2017-05-02 16:10:38]	DEBUG :	Loader Class Initialized
[2017-05-02 16:10:38]	DEBUG :	Helper loaded: url_helper
[2017-05-02 16:10:38]	DEBUG :	Helper loaded: form_helper
[2017-05-02 16:10:38]	DEBUG :	Helper loaded: html_helper
[2017-05-02 16:10:38]	DEBUG :	Helper loaded: email_helper
[2017-05-02 16:10:38]	DEBUG :	Helper loaded: ckeditor_helper
[2017-05-02 16:10:38]	DEBUG :	Helper loaded: mcube_helper
[2017-05-02 16:10:38]	DEBUG :	Database Driver Class Initialized
[2017-05-02 16:10:38]	ERROR :	Severity: 8192  --> mysql_pconnect(): The mysql extension is deprecated and will be removed in the future: use mysqli or PDO instead /var/www/html/mcnew/system/database/drivers/mysql/mysql_driver.php 88
[2017-05-02 16:10:38]	DEBUG :	Session Class Initialized
[2017-05-02 16:10:38]	DEBUG :	Helper loaded: string_helper
[2017-05-02 16:10:38]	DEBUG :	Encrypt Class Initialized
[2017-05-02 16:10:38]	DEBUG :	A session cookie was not found.
[2017-05-02 16:10:38]	SQL :	INSERT INTO `call_sessions` (`session_id`, `ip_address`, `user_agent`, `last_activity`) VALUES ('6e2381bf1c06a8bb9266794dc4613b09', '192.168.1.114', 'Dalvik/2.1.0 (Linux; U; Android 6.0; Panasonic T44', 1493721638)
[2017-05-02 16:10:38]	DEBUG :	Session routines successfully run
[2017-05-02 16:10:38]	DEBUG :	Table Class Initialized
[2017-05-02 16:10:38]	DEBUG :	Pagination Class Initialized
[2017-05-02 16:10:38]	DEBUG :	Config file loaded: config/paypallib_config.php
[2017-05-02 16:10:38]	DEBUG :	Form Validation Class Initialized
[2017-05-02 16:10:38]	DEBUG :	Email Class Initialized
[2017-05-02 16:10:38]	DEBUG :	Language file loaded: language/english/calendar_lang.php
[2017-05-02 16:10:38]	DEBUG :	Calendar Class Initialized
[2017-05-02 16:10:38]	DEBUG :	Controller Class Initialized
[2017-05-02 16:10:38]	DEBUG :	Model Class Initialized
[2017-05-02 16:10:38]	DEBUG :	Model Class Initialized
[2017-05-02 16:10:38]	DEBUG :	Model Class Initialized
[2017-05-02 16:10:38]	DEBUG :	Model Class Initialized
[2017-05-02 16:10:38]	DEBUG :	Model Class Initialized
[2017-05-02 16:10:38]	DEBUG :	Model Class Initialized
[2017-05-02 16:10:38]	DEBUG :	Model Class Initialized
[2017-05-02 16:10:38]	DEBUG :	Model Class Initialized
[2017-05-02 16:10:38]	DEBUG :	Model Class Initialized
[2017-05-02 16:10:38]	DEBUG :	Model Class Initialized
[2017-05-02 16:10:38]	DEBUG :	Model Class Initialized
[2017-05-02 16:10:38]	DEBUG :	Model Class Initialized
[2017-05-02 16:10:38]	DEBUG :	Model Class Initialized
[2017-05-02 16:10:38]	DEBUG :	Model Class Initialized
[2017-05-02 16:10:38]	DEBUG :	Plugin loaded: to_pdf_pi
[2017-05-02 16:10:38]	DEBUG :	Model Class Initialized
[2017-05-02 16:10:38]	DEBUG :	Language file loaded: language/english/form_validation_lang.php
[2017-05-02 16:10:38]	SQL :	SELECT uid,bid,eid FROM `user` WHERE authkey='1.1.d886b8e8a0615'
[2017-05-02 16:10:38]	DEBUG :	Database Driver Class Initialized
[2017-05-02 16:10:38]	SQL :	SELECT roleid FROM 1_employee
							WHERE eid='1'
							AND bid='1'
[2017-05-02 16:10:38]	DEBUG :	Database Driver Class Initialized
[2017-05-02 16:10:38]	SQL :	SELECT * FROM 1_user_role
							WHERE roleid='1'
							AND bid='1'
[2017-05-02 16:10:38]	SQL :	SELECT m.modid,m.modname,m.moddesc,
							COALESCE(o.opt_add,0) as opt_add,
							COALESCE(o.opt_view,0) as opt_view,
							COALESCE(o.opt_download,0) as opt_download,
							COALESCE(opt_delete,0) as opt_delete 
							FROM module m
							LEFT JOIN (SELECT * FROM 1_role_mod_opt
							WHERE roleid='1' 
							AND bid='1') as o
							ON m.modid=o.modid where m.status=1
[2017-05-02 16:10:38]	SQL :	SELECT a.*,f.fieldname FROM 1_role_access a
								LEFT JOIN systemfields f on a.fieldid=f.fieldid
								WHERE a.roleid='1'
								AND a.bid='1'
								AND a.fieldtype='s'
[2017-05-02 16:10:38]	SQL :	SELECT * FROM 1_role_access
								WHERE roleid='1'
								AND bid='1'
							AND fieldtype='c'
[2017-05-02 16:10:38]	SQL :	SELECT pri.landingnumber,pri.used,pri.climit,
								if(pri.status=0,'Not in use',
								if(pri.type='0','Calltrack',
								if(pri.type='1','IVRS',
								if(pri.type='2','PBX','Not Assign')))) as type,
								pri.associateid,
								if(pri.status=0,'None',
								if(pri.type='0',g.groupname,
								if(pri.type='1',i.title,
								if(pri.type='2',pbx.title,'None')))) as title,
								if(pri.status=0,'None',
								if(pri.type='0',ch.lastcall,
								if(pri.type='1',ih.lastcall,
								if(pri.type='2',ph.lastcall,'None')))) as lastcall
								FROM prinumbers pri
								LEFT JOIN 1_groups g on (g.prinumber=pri.number AND g.gid=pri.associateid AND g.status=1)
								LEFT JOIN 1_ivrs i on (i.prinumber=pri.number AND i.ivrsid=pri.associateid AND i.status=1)
								LEFT JOIN 1_pbx pbx on (pbx.prinumber=pri.number AND pbx.pbxid=pri.associateid AND pbx.status=1)
								LEFT JOIN (SELECT g.gid,max(h.starttime) as lastcall FROM 1_groups g LEFT JOIN 1_callhistory h on g.gid=h.gid GROUP BY g.gid) ch on g.gid=ch.gid
								LEFT JOIN (SELECT i.ivrsid,max(h.datetime) as lastcall FROM 1_ivrs i LEFT JOIN 1_ivrshistory h on i.ivrsid=h.ivrsid GROUP BY i.ivrsid) ih on i.ivrsid=ih.ivrsid
								LEFT JOIN (SELECT p.pbxid,max(h.starttime) as lastcall FROM 1_pbx p LEFT JOIN 1_pbxreport h on p.pbxid=h.pbxid GROUP BY p.pbxid) ph on pbx.pbxid=ph.pbxid
								WHERE pri.bid=1
[2017-05-02 16:10:38]	SQL :	SELECT balance FROM sms_bal  where bid='1'
[2017-05-02 16:10:38]	SQL :	SELECT balance FROM call_bal where bid='1'
[2017-05-02 16:10:38]	SQL :	SELECT DISTINCT(e.eid),e.empname,eb.start_time FROM 1_employee e
		                       LEFT JOIN 1_emp_break eb ON e.eid = eb.eid
		                       LEFT JOIN 1_groups d ON e.eid = d.eid
		                       WHERE eb.end_time='0000-00-00' AND e.selfdisable=1  GROUP BY d.gid,e.eid
[2017-05-02 16:10:38]	SQL :	SELECT COALESCE(COUNT(callid), 0) AS day 
							FROM 1_callhistory h 
							LEFT JOIN 1_groups d ON d.gid = h.gid 
							WHERE 1 AND (DATE(h.`starttime`) = DATE(NOW()))
[2017-05-02 16:10:38]	SQL :	SELECT COALESCE(COUNT(callid), 0) AS day 
							FROM 1_callhistory h 
							LEFT JOIN 1_groups d ON d.gid = h.gid 
							WHERE 1  AND (DATE(h.`starttime`)  > DATE(DATE_SUB(NOW(), INTERVAL 1 WEEK)))
[2017-05-02 16:10:38]	SQL :	SELECT COALESCE(COUNT(callid), 0) AS day 
							FROM 1_callhistory h 
							LEFT JOIN 1_groups d ON d.gid = h.gid 
							WHERE 1  AND (MONTH(h.`starttime` ) = MONTH(NOW()))
[2017-05-02 16:10:38]	SQL :	SELECT COALESCE(COUNT(pbxid), 0) AS day 
							FROM 1_pbxreport h 
							WHERE 1 AND (DATE(h.`starttime`) = DATE(NOW()))
[2017-05-02 16:10:38]	SQL :	SELECT COALESCE(COUNT(pbxid), 0) AS day 
							FROM 1_pbxreport h 
							WHERE 1  AND (DATE(h.`starttime`)  > DATE(DATE_SUB(NOW(), INTERVAL 1 WEEK)))
[2017-05-02 16:10:38]	SQL :	SELECT COALESCE(COUNT(pbxid), 0) AS day 
							FROM 1_pbxreport h 
							WHERE 1  AND (MONTH(h.`starttime` ) = MONTH(NOW()))
[2017-05-02 16:10:38]	SQL :	SELECT COALESCE(COUNT(hid), 0) AS day 
							   FROM 1_ivrshistory h 
						       WHERE 1 AND (DATE(h.`datetime`) = DATE(NOW()))
[2017-05-02 16:10:38]	SQL :	SELECT COALESCE(COUNT(hid), 0) AS day 
							   FROM 1_ivrshistory h 
						       WHERE 1  AND (DATE(h.`datetime`)  > DATE(DATE_SUB(NOW(), INTERVAL 1 WEEK)))
[2017-05-02 16:10:38]	SQL :	SELECT COALESCE(COUNT(hid), 0) AS day 
							   FROM 1_ivrshistory h 
						       WHERE 1  AND (MONTH(h.`datetime` ) = MONTH(NOW()))
[2017-05-02 16:10:38]	SQL :	SELECT COALESCE(COUNT(leadid), 0) AS day 
							FROM 1_leads a 
							LEFT JOIN 1_leads_groups d ON d.gid = a.gid 
							WHERE (DATE(a.`createdon`) = DATE(NOW()))
[2017-05-02 16:10:38]	SQL :	SELECT COALESCE(COUNT(leadid), 0) AS day 
							FROM 1_leads a 
							LEFT JOIN 1_leads_groups d ON d.gid = a.gid 
							WHERE (DATE(a.`createdon`) = DATE(NOW()))
[2017-05-02 16:10:38]	SQL :	SELECT COALESCE(COUNT(leadid), 0) AS day 
							FROM 1_leads a 
							LEFT JOIN 1_leads_groups d ON d.gid = a.gid 
							WHERE (DATE(a.`createdon`) = DATE(NOW()))
[2017-05-02 16:10:38]	SQL :	SELECT COALESCE(COUNT(tktid), 0) AS day 
							FROM 1_support_tickets a 
							LEFT JOIN 1_support_groups d ON d.gid = a.gid 
							WHERE (DATE(a.`createdon`) = DATE(NOW()))
[2017-05-02 16:10:38]	SQL :	SELECT COALESCE(COUNT(tktid), 0) AS day 
							FROM 1_support_tickets a 
							LEFT JOIN 1_support_groups d ON d.gid = a.gid 
							WHERE (DATE(a.`createdon`) = DATE(NOW()))
[2017-05-02 16:10:38]	SQL :	SELECT COALESCE(COUNT(tktid), 0) AS day 
							FROM 1_support_tickets a 
							LEFT JOIN 1_support_groups d ON d.gid = a.gid 
							WHERE (DATE(a.`createdon`) = DATE(NOW()))
[2017-05-02 16:10:38]	SQL :	SELECT COALESCE(COUNT(callid), 0) AS day 
							FROM 1_outboundcalls h 
							WHERE (DATE(h.`starttime`) = DATE(NOW()))
[2017-05-02 16:10:38]	SQL :	SELECT COALESCE(COUNT(callid), 0) AS day 
							FROM 1_outboundcalls h 
							WHERE (DATE(h.`starttime`) = DATE(NOW()))
[2017-05-02 16:10:38]	SQL :	SELECT COALESCE(COUNT(callid), 0) AS day 
							FROM 1_outboundcalls h 
							WHERE (DATE(h.`starttime`) = DATE(NOW()))
[2017-05-02 16:10:38]	SQL :	SELECT COALESCE(COUNT(callid), 0) AS day 
							FROM 1_mtracker h 
							WHERE (DATE(h.`starttime`) = DATE(NOW()))
[2017-05-02 16:10:38]	SQL :	SELECT COALESCE(COUNT(callid), 0) AS day 
							FROM 1_mtracker h 
							WHERE (DATE(h.`starttime`) = DATE(NOW()))
[2017-05-02 16:10:38]	SQL :	SELECT COALESCE(COUNT(callid), 0) AS day 
							FROM 1_mtracker h 
							WHERE (DATE(h.`starttime`) = DATE(NOW()))
[2017-05-02 16:12:19]	DEBUG :	Config Class Initialized
[2017-05-02 16:12:19]	DEBUG :	Hooks Class Initialized
[2017-05-02 16:12:19]	DEBUG :	URI Class Initialized
[2017-05-02 16:12:19]	DEBUG :	Router Class Initialized
[2017-05-02 16:12:19]	DEBUG :	Output Class Initialized
[2017-05-02 16:12:19]	DEBUG :	Input Class Initialized
[2017-05-02 16:12:19]	DEBUG :	Global POST and COOKIE data sanitized
[2017-05-02 16:12:19]	DEBUG :	Language Class Initialized
[2017-05-02 16:12:19]	DEBUG :	Loader Class Initialized
[2017-05-02 16:12:19]	DEBUG :	Helper loaded: url_helper
[2017-05-02 16:12:19]	DEBUG :	Helper loaded: form_helper
[2017-05-02 16:12:19]	DEBUG :	Helper loaded: html_helper
[2017-05-02 16:12:19]	DEBUG :	Helper loaded: email_helper
[2017-05-02 16:12:19]	DEBUG :	Helper loaded: ckeditor_helper
[2017-05-02 16:12:19]	DEBUG :	Helper loaded: mcube_helper
[2017-05-02 16:12:19]	DEBUG :	Database Driver Class Initialized
[2017-05-02 16:12:19]	ERROR :	Severity: 8192  --> mysql_pconnect(): The mysql extension is deprecated and will be removed in the future: use mysqli or PDO instead /var/www/html/mcnew/system/database/drivers/mysql/mysql_driver.php 88
[2017-05-02 16:12:19]	DEBUG :	Session Class Initialized
[2017-05-02 16:12:19]	DEBUG :	Helper loaded: string_helper
[2017-05-02 16:12:19]	DEBUG :	Encrypt Class Initialized
[2017-05-02 16:12:19]	DEBUG :	A session cookie was not found.
[2017-05-02 16:12:19]	SQL :	INSERT INTO `call_sessions` (`session_id`, `ip_address`, `user_agent`, `last_activity`) VALUES ('6dcb58c455ecd7140ad1c727e8816e24', '192.168.1.114', 'Dalvik/2.1.0 (Linux; U; Android 6.0; Panasonic T44', 1493721739)
[2017-05-02 16:12:19]	DEBUG :	Session routines successfully run
[2017-05-02 16:12:19]	DEBUG :	Table Class Initialized
[2017-05-02 16:12:19]	DEBUG :	Pagination Class Initialized
[2017-05-02 16:12:19]	DEBUG :	Config file loaded: config/paypallib_config.php
[2017-05-02 16:12:19]	DEBUG :	Form Validation Class Initialized
[2017-05-02 16:12:19]	DEBUG :	Email Class Initialized
[2017-05-02 16:12:19]	DEBUG :	Language file loaded: language/english/calendar_lang.php
[2017-05-02 16:12:19]	DEBUG :	Calendar Class Initialized
[2017-05-02 16:12:19]	DEBUG :	Controller Class Initialized
[2017-05-02 16:12:19]	DEBUG :	Model Class Initialized
[2017-05-02 16:12:19]	DEBUG :	Model Class Initialized
[2017-05-02 16:12:19]	DEBUG :	Model Class Initialized
[2017-05-02 16:12:19]	DEBUG :	Model Class Initialized
[2017-05-02 16:12:19]	DEBUG :	Model Class Initialized
[2017-05-02 16:12:19]	DEBUG :	Model Class Initialized
[2017-05-02 16:12:19]	DEBUG :	Model Class Initialized
[2017-05-02 16:12:19]	DEBUG :	Model Class Initialized
[2017-05-02 16:12:19]	DEBUG :	Model Class Initialized
[2017-05-02 16:12:19]	DEBUG :	Model Class Initialized
[2017-05-02 16:12:19]	DEBUG :	Model Class Initialized
[2017-05-02 16:12:19]	DEBUG :	Model Class Initialized
[2017-05-02 16:12:19]	DEBUG :	Model Class Initialized
[2017-05-02 16:12:19]	DEBUG :	Model Class Initialized
[2017-05-02 16:12:19]	DEBUG :	Plugin loaded: to_pdf_pi
[2017-05-02 16:12:19]	DEBUG :	Model Class Initialized
[2017-05-02 16:12:19]	DEBUG :	Language file loaded: language/english/form_validation_lang.php
[2017-05-02 16:12:19]	SQL :	SELECT uid,bid,eid FROM `user` WHERE authkey='1.1.d886b8e8a0615'
[2017-05-02 16:12:19]	DEBUG :	Database Driver Class Initialized
[2017-05-02 16:12:19]	SQL :	SELECT roleid FROM 1_employee
							WHERE eid='1'
							AND bid='1'
[2017-05-02 16:12:19]	DEBUG :	Database Driver Class Initialized
[2017-05-02 16:12:19]	SQL :	SELECT * FROM 1_user_role
							WHERE roleid='1'
							AND bid='1'
[2017-05-02 16:12:19]	SQL :	SELECT m.modid,m.modname,m.moddesc,
							COALESCE(o.opt_add,0) as opt_add,
							COALESCE(o.opt_view,0) as opt_view,
							COALESCE(o.opt_download,0) as opt_download,
							COALESCE(opt_delete,0) as opt_delete 
							FROM module m
							LEFT JOIN (SELECT * FROM 1_role_mod_opt
							WHERE roleid='1' 
							AND bid='1') as o
							ON m.modid=o.modid where m.status=1
[2017-05-02 16:12:19]	SQL :	SELECT a.*,f.fieldname FROM 1_role_access a
								LEFT JOIN systemfields f on a.fieldid=f.fieldid
								WHERE a.roleid='1'
								AND a.bid='1'
								AND a.fieldtype='s'
[2017-05-02 16:12:19]	SQL :	SELECT * FROM 1_role_access
								WHERE roleid='1'
								AND bid='1'
							AND fieldtype='c'
[2017-05-02 16:12:19]	SQL :	SELECT pri.landingnumber,pri.used,pri.climit,
								if(pri.status=0,'Not in use',
								if(pri.type='0','Calltrack',
								if(pri.type='1','IVRS',
								if(pri.type='2','PBX','Not Assign')))) as type,
								pri.associateid,
								if(pri.status=0,'None',
								if(pri.type='0',g.groupname,
								if(pri.type='1',i.title,
								if(pri.type='2',pbx.title,'None')))) as title,
								if(pri.status=0,'None',
								if(pri.type='0',ch.lastcall,
								if(pri.type='1',ih.lastcall,
								if(pri.type='2',ph.lastcall,'None')))) as lastcall
								FROM prinumbers pri
								LEFT JOIN 1_groups g on (g.prinumber=pri.number AND g.gid=pri.associateid AND g.status=1)
								LEFT JOIN 1_ivrs i on (i.prinumber=pri.number AND i.ivrsid=pri.associateid AND i.status=1)
								LEFT JOIN 1_pbx pbx on (pbx.prinumber=pri.number AND pbx.pbxid=pri.associateid AND pbx.status=1)
								LEFT JOIN (SELECT g.gid,max(h.starttime) as lastcall FROM 1_groups g LEFT JOIN 1_callhistory h on g.gid=h.gid GROUP BY g.gid) ch on g.gid=ch.gid
								LEFT JOIN (SELECT i.ivrsid,max(h.datetime) as lastcall FROM 1_ivrs i LEFT JOIN 1_ivrshistory h on i.ivrsid=h.ivrsid GROUP BY i.ivrsid) ih on i.ivrsid=ih.ivrsid
								LEFT JOIN (SELECT p.pbxid,max(h.starttime) as lastcall FROM 1_pbx p LEFT JOIN 1_pbxreport h on p.pbxid=h.pbxid GROUP BY p.pbxid) ph on pbx.pbxid=ph.pbxid
								WHERE pri.bid=1
[2017-05-02 16:12:19]	SQL :	SELECT balance FROM sms_bal  where bid='1'
[2017-05-02 16:12:19]	SQL :	SELECT balance FROM call_bal where bid='1'
[2017-05-02 16:12:19]	SQL :	SELECT DISTINCT(e.eid),e.empname,eb.start_time FROM 1_employee e
		                       LEFT JOIN 1_emp_break eb ON e.eid = eb.eid
		                       LEFT JOIN 1_groups d ON e.eid = d.eid
		                       WHERE eb.end_time='0000-00-00' AND e.selfdisable=1  GROUP BY d.gid,e.eid
[2017-05-02 16:12:19]	SQL :	SELECT COALESCE(COUNT(callid), 0) AS day 
							FROM 1_callhistory h 
							LEFT JOIN 1_groups d ON d.gid = h.gid 
							WHERE 1 AND (DATE(h.`starttime`) = DATE(NOW()))
[2017-05-02 16:12:19]	SQL :	SELECT COALESCE(COUNT(callid), 0) AS day 
							FROM 1_callhistory h 
							LEFT JOIN 1_groups d ON d.gid = h.gid 
							WHERE 1  AND (DATE(h.`starttime`)  > DATE(DATE_SUB(NOW(), INTERVAL 1 WEEK)))
[2017-05-02 16:12:19]	SQL :	SELECT COALESCE(COUNT(callid), 0) AS day 
							FROM 1_callhistory h 
							LEFT JOIN 1_groups d ON d.gid = h.gid 
							WHERE 1  AND (MONTH(h.`starttime` ) = MONTH(NOW()))
[2017-05-02 16:12:19]	SQL :	SELECT COALESCE(COUNT(pbxid), 0) AS day 
							FROM 1_pbxreport h 
							WHERE 1 AND (DATE(h.`starttime`) = DATE(NOW()))
[2017-05-02 16:12:19]	SQL :	SELECT COALESCE(COUNT(pbxid), 0) AS day 
							FROM 1_pbxreport h 
							WHERE 1  AND (DATE(h.`starttime`)  > DATE(DATE_SUB(NOW(), INTERVAL 1 WEEK)))
[2017-05-02 16:12:19]	SQL :	SELECT COALESCE(COUNT(pbxid), 0) AS day 
							FROM 1_pbxreport h 
							WHERE 1  AND (MONTH(h.`starttime` ) = MONTH(NOW()))
[2017-05-02 16:12:19]	SQL :	SELECT COALESCE(COUNT(hid), 0) AS day 
							   FROM 1_ivrshistory h 
						       WHERE 1 AND (DATE(h.`datetime`) = DATE(NOW()))
[2017-05-02 16:12:19]	SQL :	SELECT COALESCE(COUNT(hid), 0) AS day 
							   FROM 1_ivrshistory h 
						       WHERE 1  AND (DATE(h.`datetime`)  > DATE(DATE_SUB(NOW(), INTERVAL 1 WEEK)))
[2017-05-02 16:12:19]	SQL :	SELECT COALESCE(COUNT(hid), 0) AS day 
							   FROM 1_ivrshistory h 
						       WHERE 1  AND (MONTH(h.`datetime` ) = MONTH(NOW()))
[2017-05-02 16:12:19]	SQL :	SELECT COALESCE(COUNT(leadid), 0) AS day 
							FROM 1_leads a 
							LEFT JOIN 1_leads_groups d ON d.gid = a.gid 
							WHERE (DATE(a.`createdon`) = DATE(NOW()))
[2017-05-02 16:12:19]	SQL :	SELECT COALESCE(COUNT(leadid), 0) AS day 
							FROM 1_leads a 
							LEFT JOIN 1_leads_groups d ON d.gid = a.gid 
							WHERE (DATE(a.`createdon`) = DATE(NOW()))
[2017-05-02 16:12:19]	SQL :	SELECT COALESCE(COUNT(leadid), 0) AS day 
							FROM 1_leads a 
							LEFT JOIN 1_leads_groups d ON d.gid = a.gid 
							WHERE (DATE(a.`createdon`) = DATE(NOW()))
[2017-05-02 16:12:19]	SQL :	SELECT COALESCE(COUNT(tktid), 0) AS day 
							FROM 1_support_tickets a 
							LEFT JOIN 1_support_groups d ON d.gid = a.gid 
							WHERE (DATE(a.`createdon`) = DATE(NOW()))
[2017-05-02 16:12:19]	SQL :	SELECT COALESCE(COUNT(tktid), 0) AS day 
							FROM 1_support_tickets a 
							LEFT JOIN 1_support_groups d ON d.gid = a.gid 
							WHERE (DATE(a.`createdon`) = DATE(NOW()))
[2017-05-02 16:12:19]	SQL :	SELECT COALESCE(COUNT(tktid), 0) AS day 
							FROM 1_support_tickets a 
							LEFT JOIN 1_support_groups d ON d.gid = a.gid 
							WHERE (DATE(a.`createdon`) = DATE(NOW()))
[2017-05-02 16:12:19]	SQL :	SELECT COALESCE(COUNT(callid), 0) AS day 
							FROM 1_outboundcalls h 
							WHERE (DATE(h.`starttime`) = DATE(NOW()))
[2017-05-02 16:12:19]	SQL :	SELECT COALESCE(COUNT(callid), 0) AS day 
							FROM 1_outboundcalls h 
							WHERE (DATE(h.`starttime`) = DATE(NOW()))
[2017-05-02 16:12:19]	SQL :	SELECT COALESCE(COUNT(callid), 0) AS day 
							FROM 1_outboundcalls h 
							WHERE (DATE(h.`starttime`) = DATE(NOW()))
[2017-05-02 16:12:19]	SQL :	SELECT COALESCE(COUNT(callid), 0) AS day 
							FROM 1_mtracker h 
							WHERE (DATE(h.`starttime`) = DATE(NOW()))
[2017-05-02 16:12:19]	SQL :	SELECT COALESCE(COUNT(callid), 0) AS day 
							FROM 1_mtracker h 
							WHERE (DATE(h.`starttime`) = DATE(NOW()))
[2017-05-02 16:12:19]	SQL :	SELECT COALESCE(COUNT(callid), 0) AS day 
							FROM 1_mtracker h 
							WHERE (DATE(h.`starttime`) = DATE(NOW()))
[2017-05-02 16:13:33]	DEBUG :	Config Class Initialized
[2017-05-02 16:13:33]	DEBUG :	Hooks Class Initialized
[2017-05-02 16:13:33]	DEBUG :	URI Class Initialized
[2017-05-02 16:13:33]	DEBUG :	Router Class Initialized
[2017-05-02 16:13:33]	DEBUG :	Output Class Initialized
[2017-05-02 16:13:33]	DEBUG :	Input Class Initialized
[2017-05-02 16:13:33]	DEBUG :	Global POST and COOKIE data sanitized
[2017-05-02 16:13:33]	DEBUG :	Language Class Initialized
[2017-05-02 16:13:33]	DEBUG :	Loader Class Initialized
[2017-05-02 16:13:33]	DEBUG :	Helper loaded: url_helper
[2017-05-02 16:13:33]	DEBUG :	Helper loaded: form_helper
[2017-05-02 16:13:33]	DEBUG :	Helper loaded: html_helper
[2017-05-02 16:13:33]	DEBUG :	Helper loaded: email_helper
[2017-05-02 16:13:33]	DEBUG :	Helper loaded: ckeditor_helper
[2017-05-02 16:13:33]	DEBUG :	Helper loaded: mcube_helper
[2017-05-02 16:13:33]	DEBUG :	Database Driver Class Initialized
[2017-05-02 16:13:33]	ERROR :	Severity: 8192  --> mysql_pconnect(): The mysql extension is deprecated and will be removed in the future: use mysqli or PDO instead /var/www/html/mcnew/system/database/drivers/mysql/mysql_driver.php 88
[2017-05-02 16:13:33]	DEBUG :	Session Class Initialized
[2017-05-02 16:13:33]	DEBUG :	Helper loaded: string_helper
[2017-05-02 16:13:33]	DEBUG :	Encrypt Class Initialized
[2017-05-02 16:13:33]	DEBUG :	A session cookie was not found.
[2017-05-02 16:13:33]	SQL :	INSERT INTO `call_sessions` (`session_id`, `ip_address`, `user_agent`, `last_activity`) VALUES ('1e6c1578b4c3e4d789387dc8043ba302', '192.168.1.114', 'Dalvik/2.1.0 (Linux; U; Android 6.0; Panasonic T44', 1493721813)
[2017-05-02 16:13:33]	DEBUG :	Session routines successfully run
[2017-05-02 16:13:33]	DEBUG :	Table Class Initialized
[2017-05-02 16:13:33]	DEBUG :	Pagination Class Initialized
[2017-05-02 16:13:33]	DEBUG :	Config file loaded: config/paypallib_config.php
[2017-05-02 16:13:33]	DEBUG :	Form Validation Class Initialized
[2017-05-02 16:13:33]	DEBUG :	Email Class Initialized
[2017-05-02 16:13:33]	DEBUG :	Language file loaded: language/english/calendar_lang.php
[2017-05-02 16:13:33]	DEBUG :	Calendar Class Initialized
[2017-05-02 16:13:33]	DEBUG :	Controller Class Initialized
[2017-05-02 16:13:33]	DEBUG :	Model Class Initialized
[2017-05-02 16:13:33]	DEBUG :	Model Class Initialized
[2017-05-02 16:13:33]	DEBUG :	Model Class Initialized
[2017-05-02 16:13:33]	DEBUG :	Model Class Initialized
[2017-05-02 16:13:33]	DEBUG :	Model Class Initialized
[2017-05-02 16:13:33]	DEBUG :	Model Class Initialized
[2017-05-02 16:13:33]	DEBUG :	Model Class Initialized
[2017-05-02 16:13:33]	DEBUG :	Model Class Initialized
[2017-05-02 16:13:33]	DEBUG :	Model Class Initialized
[2017-05-02 16:13:33]	DEBUG :	Model Class Initialized
[2017-05-02 16:13:33]	DEBUG :	Model Class Initialized
[2017-05-02 16:13:33]	DEBUG :	Model Class Initialized
[2017-05-02 16:13:33]	DEBUG :	Model Class Initialized
[2017-05-02 16:13:33]	DEBUG :	Model Class Initialized
[2017-05-02 16:13:33]	DEBUG :	Plugin loaded: to_pdf_pi
[2017-05-02 16:13:33]	DEBUG :	Model Class Initialized
[2017-05-02 16:13:33]	DEBUG :	Language file loaded: language/english/form_validation_lang.php
[2017-05-02 16:13:33]	SQL :	SELECT uid,bid,eid FROM `user` WHERE authkey='1.1.d886b8e8a0615'
[2017-05-02 16:13:33]	DEBUG :	Database Driver Class Initialized
[2017-05-02 16:13:33]	SQL :	SELECT roleid FROM 1_employee
							WHERE eid='1'
							AND bid='1'
[2017-05-02 16:13:33]	DEBUG :	Database Driver Class Initialized
[2017-05-02 16:13:33]	SQL :	SELECT * FROM 1_user_role
							WHERE roleid='1'
							AND bid='1'
[2017-05-02 16:13:33]	SQL :	SELECT m.modid,m.modname,m.moddesc,
							COALESCE(o.opt_add,0) as opt_add,
							COALESCE(o.opt_view,0) as opt_view,
							COALESCE(o.opt_download,0) as opt_download,
							COALESCE(opt_delete,0) as opt_delete 
							FROM module m
							LEFT JOIN (SELECT * FROM 1_role_mod_opt
							WHERE roleid='1' 
							AND bid='1') as o
							ON m.modid=o.modid where m.status=1
[2017-05-02 16:13:33]	SQL :	SELECT a.*,f.fieldname FROM 1_role_access a
								LEFT JOIN systemfields f on a.fieldid=f.fieldid
								WHERE a.roleid='1'
								AND a.bid='1'
								AND a.fieldtype='s'
[2017-05-02 16:13:33]	SQL :	SELECT * FROM 1_role_access
								WHERE roleid='1'
								AND bid='1'
							AND fieldtype='c'
[2017-05-02 16:13:33]	SQL :	SELECT pri.landingnumber,pri.used,pri.climit,
								if(pri.status=0,'Not in use',
								if(pri.type='0','Calltrack',
								if(pri.type='1','IVRS',
								if(pri.type='2','PBX','Not Assign')))) as type,
								pri.associateid,
								if(pri.status=0,'None',
								if(pri.type='0',g.groupname,
								if(pri.type='1',i.title,
								if(pri.type='2',pbx.title,'None')))) as title,
								if(pri.status=0,'None',
								if(pri.type='0',ch.lastcall,
								if(pri.type='1',ih.lastcall,
								if(pri.type='2',ph.lastcall,'None')))) as lastcall
								FROM prinumbers pri
								LEFT JOIN 1_groups g on (g.prinumber=pri.number AND g.gid=pri.associateid AND g.status=1)
								LEFT JOIN 1_ivrs i on (i.prinumber=pri.number AND i.ivrsid=pri.associateid AND i.status=1)
								LEFT JOIN 1_pbx pbx on (pbx.prinumber=pri.number AND pbx.pbxid=pri.associateid AND pbx.status=1)
								LEFT JOIN (SELECT g.gid,max(h.starttime) as lastcall FROM 1_groups g LEFT JOIN 1_callhistory h on g.gid=h.gid GROUP BY g.gid) ch on g.gid=ch.gid
								LEFT JOIN (SELECT i.ivrsid,max(h.datetime) as lastcall FROM 1_ivrs i LEFT JOIN 1_ivrshistory h on i.ivrsid=h.ivrsid GROUP BY i.ivrsid) ih on i.ivrsid=ih.ivrsid
								LEFT JOIN (SELECT p.pbxid,max(h.starttime) as lastcall FROM 1_pbx p LEFT JOIN 1_pbxreport h on p.pbxid=h.pbxid GROUP BY p.pbxid) ph on pbx.pbxid=ph.pbxid
								WHERE pri.bid=1
[2017-05-02 16:13:33]	SQL :	SELECT balance FROM sms_bal  where bid='1'
[2017-05-02 16:13:33]	SQL :	SELECT balance FROM call_bal where bid='1'
[2017-05-02 16:13:33]	SQL :	SELECT DISTINCT(e.eid),e.empname,eb.start_time FROM 1_employee e
		                       LEFT JOIN 1_emp_break eb ON e.eid = eb.eid
		                       LEFT JOIN 1_groups d ON e.eid = d.eid
		                       WHERE eb.end_time='0000-00-00' AND e.selfdisable=1  GROUP BY d.gid,e.eid
[2017-05-02 16:13:33]	SQL :	SELECT COALESCE(COUNT(callid), 0) AS day 
							FROM 1_callhistory h 
							LEFT JOIN 1_groups d ON d.gid = h.gid 
							WHERE 1 AND (DATE(h.`starttime`) = DATE(NOW()))
[2017-05-02 16:13:33]	SQL :	SELECT COALESCE(COUNT(callid), 0) AS day 
							FROM 1_callhistory h 
							LEFT JOIN 1_groups d ON d.gid = h.gid 
							WHERE 1  AND (DATE(h.`starttime`)  > DATE(DATE_SUB(NOW(), INTERVAL 1 WEEK)))
[2017-05-02 16:13:33]	SQL :	SELECT COALESCE(COUNT(callid), 0) AS day 
							FROM 1_callhistory h 
							LEFT JOIN 1_groups d ON d.gid = h.gid 
							WHERE 1  AND (MONTH(h.`starttime` ) = MONTH(NOW()))
[2017-05-02 16:13:33]	SQL :	SELECT COALESCE(COUNT(pbxid), 0) AS day 
							FROM 1_pbxreport h 
							WHERE 1 AND (DATE(h.`starttime`) = DATE(NOW()))
[2017-05-02 16:13:33]	SQL :	SELECT COALESCE(COUNT(pbxid), 0) AS day 
							FROM 1_pbxreport h 
							WHERE 1  AND (DATE(h.`starttime`)  > DATE(DATE_SUB(NOW(), INTERVAL 1 WEEK)))
[2017-05-02 16:13:33]	SQL :	SELECT COALESCE(COUNT(pbxid), 0) AS day 
							FROM 1_pbxreport h 
							WHERE 1  AND (MONTH(h.`starttime` ) = MONTH(NOW()))
[2017-05-02 16:13:33]	SQL :	SELECT COALESCE(COUNT(hid), 0) AS day 
							   FROM 1_ivrshistory h 
						       WHERE 1 AND (DATE(h.`datetime`) = DATE(NOW()))
[2017-05-02 16:13:33]	SQL :	SELECT COALESCE(COUNT(hid), 0) AS day 
							   FROM 1_ivrshistory h 
						       WHERE 1  AND (DATE(h.`datetime`)  > DATE(DATE_SUB(NOW(), INTERVAL 1 WEEK)))
[2017-05-02 16:13:33]	SQL :	SELECT COALESCE(COUNT(hid), 0) AS day 
							   FROM 1_ivrshistory h 
						       WHERE 1  AND (MONTH(h.`datetime` ) = MONTH(NOW()))
[2017-05-02 16:13:33]	SQL :	SELECT COALESCE(COUNT(leadid), 0) AS day 
							FROM 1_leads a 
							LEFT JOIN 1_leads_groups d ON d.gid = a.gid 
							WHERE (DATE(a.`createdon`) = DATE(NOW()))
[2017-05-02 16:13:33]	SQL :	SELECT COALESCE(COUNT(leadid), 0) AS day 
							FROM 1_leads a 
							LEFT JOIN 1_leads_groups d ON d.gid = a.gid 
							WHERE (DATE(a.`createdon`) = DATE(NOW()))
[2017-05-02 16:13:33]	SQL :	SELECT COALESCE(COUNT(leadid), 0) AS day 
							FROM 1_leads a 
							LEFT JOIN 1_leads_groups d ON d.gid = a.gid 
							WHERE (DATE(a.`createdon`) = DATE(NOW()))
[2017-05-02 16:13:33]	SQL :	SELECT COALESCE(COUNT(tktid), 0) AS day 
							FROM 1_support_tickets a 
							LEFT JOIN 1_support_groups d ON d.gid = a.gid 
							WHERE (DATE(a.`createdon`) = DATE(NOW()))
[2017-05-02 16:13:33]	SQL :	SELECT COALESCE(COUNT(tktid), 0) AS day 
							FROM 1_support_tickets a 
							LEFT JOIN 1_support_groups d ON d.gid = a.gid 
							WHERE (DATE(a.`createdon`) = DATE(NOW()))
[2017-05-02 16:13:33]	SQL :	SELECT COALESCE(COUNT(tktid), 0) AS day 
							FROM 1_support_tickets a 
							LEFT JOIN 1_support_groups d ON d.gid = a.gid 
							WHERE (DATE(a.`createdon`) = DATE(NOW()))
[2017-05-02 16:13:33]	SQL :	SELECT COALESCE(COUNT(callid), 0) AS day 
							FROM 1_outboundcalls h 
							WHERE (DATE(h.`starttime`) = DATE(NOW()))
[2017-05-02 16:13:33]	SQL :	SELECT COALESCE(COUNT(callid), 0) AS day 
							FROM 1_outboundcalls h 
							WHERE (DATE(h.`starttime`) = DATE(NOW()))
[2017-05-02 16:13:33]	SQL :	SELECT COALESCE(COUNT(callid), 0) AS day 
							FROM 1_outboundcalls h 
							WHERE (DATE(h.`starttime`) = DATE(NOW()))
[2017-05-02 16:13:33]	SQL :	SELECT COALESCE(COUNT(callid), 0) AS day 
							FROM 1_mtracker h 
							WHERE (DATE(h.`starttime`) = DATE(NOW()))
[2017-05-02 16:13:33]	SQL :	SELECT COALESCE(COUNT(callid), 0) AS day 
							FROM 1_mtracker h 
							WHERE (DATE(h.`starttime`) = DATE(NOW()))
[2017-05-02 16:13:33]	SQL :	SELECT COALESCE(COUNT(callid), 0) AS day 
							FROM 1_mtracker h 
							WHERE (DATE(h.`starttime`) = DATE(NOW()))
[2017-05-02 16:13:45]	DEBUG :	Config Class Initialized
[2017-05-02 16:13:45]	DEBUG :	Hooks Class Initialized
[2017-05-02 16:13:45]	DEBUG :	URI Class Initialized
[2017-05-02 16:13:45]	DEBUG :	Router Class Initialized
[2017-05-02 16:13:45]	DEBUG :	Output Class Initialized
[2017-05-02 16:13:45]	DEBUG :	Input Class Initialized
[2017-05-02 16:13:45]	DEBUG :	Global POST and COOKIE data sanitized
[2017-05-02 16:13:45]	DEBUG :	Language Class Initialized
[2017-05-02 16:13:45]	DEBUG :	Loader Class Initialized
[2017-05-02 16:13:45]	DEBUG :	Helper loaded: url_helper
[2017-05-02 16:13:45]	DEBUG :	Helper loaded: form_helper
[2017-05-02 16:13:45]	DEBUG :	Helper loaded: html_helper
[2017-05-02 16:13:45]	DEBUG :	Helper loaded: email_helper
[2017-05-02 16:13:45]	DEBUG :	Helper loaded: ckeditor_helper
[2017-05-02 16:13:45]	DEBUG :	Helper loaded: mcube_helper
[2017-05-02 16:13:45]	DEBUG :	Database Driver Class Initialized
[2017-05-02 16:13:45]	ERROR :	Severity: 8192  --> mysql_pconnect(): The mysql extension is deprecated and will be removed in the future: use mysqli or PDO instead /var/www/html/mcnew/system/database/drivers/mysql/mysql_driver.php 88
[2017-05-02 16:13:45]	DEBUG :	Session Class Initialized
[2017-05-02 16:13:45]	DEBUG :	Helper loaded: string_helper
[2017-05-02 16:13:45]	DEBUG :	Encrypt Class Initialized
[2017-05-02 16:13:45]	DEBUG :	A session cookie was not found.
[2017-05-02 16:13:45]	SQL :	INSERT INTO `call_sessions` (`session_id`, `ip_address`, `user_agent`, `last_activity`) VALUES ('a164b426e1ac25ef1197f89269463290', '192.168.1.114', 'Dalvik/2.1.0 (Linux; U; Android 6.0; Panasonic T44', 1493721825)
[2017-05-02 16:13:46]	DEBUG :	Session routines successfully run
[2017-05-02 16:13:46]	DEBUG :	Table Class Initialized
[2017-05-02 16:13:46]	DEBUG :	Pagination Class Initialized
[2017-05-02 16:13:46]	DEBUG :	Config file loaded: config/paypallib_config.php
[2017-05-02 16:13:46]	DEBUG :	Form Validation Class Initialized
[2017-05-02 16:13:46]	DEBUG :	Email Class Initialized
[2017-05-02 16:13:46]	DEBUG :	Language file loaded: language/english/calendar_lang.php
[2017-05-02 16:13:46]	DEBUG :	Calendar Class Initialized
[2017-05-02 16:13:46]	DEBUG :	Controller Class Initialized
[2017-05-02 16:13:46]	DEBUG :	Model Class Initialized
[2017-05-02 16:13:46]	DEBUG :	Model Class Initialized
[2017-05-02 16:13:46]	DEBUG :	Model Class Initialized
[2017-05-02 16:13:46]	DEBUG :	Model Class Initialized
[2017-05-02 16:13:46]	DEBUG :	Model Class Initialized
[2017-05-02 16:13:46]	DEBUG :	Model Class Initialized
[2017-05-02 16:13:46]	DEBUG :	Model Class Initialized
[2017-05-02 16:13:46]	DEBUG :	Model Class Initialized
[2017-05-02 16:13:46]	DEBUG :	Model Class Initialized
[2017-05-02 16:13:46]	DEBUG :	Model Class Initialized
[2017-05-02 16:13:46]	DEBUG :	Model Class Initialized
[2017-05-02 16:13:46]	DEBUG :	Model Class Initialized
[2017-05-02 16:13:46]	DEBUG :	Model Class Initialized
[2017-05-02 16:13:46]	DEBUG :	Model Class Initialized
[2017-05-02 16:13:46]	DEBUG :	Plugin loaded: to_pdf_pi
[2017-05-02 16:13:46]	DEBUG :	Model Class Initialized
[2017-05-02 16:13:46]	DEBUG :	Language file loaded: language/english/form_validation_lang.php
[2017-05-02 16:13:46]	SQL :	SELECT uid,bid,eid FROM `user` WHERE authkey='1.1.d886b8e8a0615'
[2017-05-02 16:13:46]	DEBUG :	Database Driver Class Initialized
[2017-05-02 16:13:46]	SQL :	SELECT roleid FROM 1_employee
							WHERE eid='1'
							AND bid='1'
[2017-05-02 16:13:46]	DEBUG :	Database Driver Class Initialized
[2017-05-02 16:13:46]	SQL :	SELECT * FROM 1_user_role
							WHERE roleid='1'
							AND bid='1'
[2017-05-02 16:13:46]	SQL :	SELECT m.modid,m.modname,m.moddesc,
							COALESCE(o.opt_add,0) as opt_add,
							COALESCE(o.opt_view,0) as opt_view,
							COALESCE(o.opt_download,0) as opt_download,
							COALESCE(opt_delete,0) as opt_delete 
							FROM module m
							LEFT JOIN (SELECT * FROM 1_role_mod_opt
							WHERE roleid='1' 
							AND bid='1') as o
							ON m.modid=o.modid where m.status=1
[2017-05-02 16:13:46]	SQL :	SELECT a.*,f.fieldname FROM 1_role_access a
								LEFT JOIN systemfields f on a.fieldid=f.fieldid
								WHERE a.roleid='1'
								AND a.bid='1'
								AND a.fieldtype='s'
[2017-05-02 16:13:46]	SQL :	SELECT * FROM 1_role_access
								WHERE roleid='1'
								AND bid='1'
							AND fieldtype='c'
[2017-05-02 16:13:46]	SQL :	SELECT pri.landingnumber,pri.used,pri.climit,
								if(pri.status=0,'Not in use',
								if(pri.type='0','Calltrack',
								if(pri.type='1','IVRS',
								if(pri.type='2','PBX','Not Assign')))) as type,
								pri.associateid,
								if(pri.status=0,'None',
								if(pri.type='0',g.groupname,
								if(pri.type='1',i.title,
								if(pri.type='2',pbx.title,'None')))) as title,
								if(pri.status=0,'None',
								if(pri.type='0',ch.lastcall,
								if(pri.type='1',ih.lastcall,
								if(pri.type='2',ph.lastcall,'None')))) as lastcall
								FROM prinumbers pri
								LEFT JOIN 1_groups g on (g.prinumber=pri.number AND g.gid=pri.associateid AND g.status=1)
								LEFT JOIN 1_ivrs i on (i.prinumber=pri.number AND i.ivrsid=pri.associateid AND i.status=1)
								LEFT JOIN 1_pbx pbx on (pbx.prinumber=pri.number AND pbx.pbxid=pri.associateid AND pbx.status=1)
								LEFT JOIN (SELECT g.gid,max(h.starttime) as lastcall FROM 1_groups g LEFT JOIN 1_callhistory h on g.gid=h.gid GROUP BY g.gid) ch on g.gid=ch.gid
								LEFT JOIN (SELECT i.ivrsid,max(h.datetime) as lastcall FROM 1_ivrs i LEFT JOIN 1_ivrshistory h on i.ivrsid=h.ivrsid GROUP BY i.ivrsid) ih on i.ivrsid=ih.ivrsid
								LEFT JOIN (SELECT p.pbxid,max(h.starttime) as lastcall FROM 1_pbx p LEFT JOIN 1_pbxreport h on p.pbxid=h.pbxid GROUP BY p.pbxid) ph on pbx.pbxid=ph.pbxid
								WHERE pri.bid=1
[2017-05-02 16:13:46]	SQL :	SELECT balance FROM sms_bal  where bid='1'
[2017-05-02 16:13:46]	SQL :	SELECT balance FROM call_bal where bid='1'
[2017-05-02 16:13:46]	SQL :	SELECT DISTINCT(e.eid),e.empname,eb.start_time FROM 1_employee e
		                       LEFT JOIN 1_emp_break eb ON e.eid = eb.eid
		                       LEFT JOIN 1_groups d ON e.eid = d.eid
		                       WHERE eb.end_time='0000-00-00' AND e.selfdisable=1  GROUP BY d.gid,e.eid
[2017-05-02 16:13:46]	SQL :	SELECT COALESCE(COUNT(callid), 0) AS day 
							FROM 1_callhistory h 
							LEFT JOIN 1_groups d ON d.gid = h.gid 
							WHERE 1 AND (DATE(h.`starttime`) = DATE(NOW()))
[2017-05-02 16:13:46]	SQL :	SELECT COALESCE(COUNT(callid), 0) AS day 
							FROM 1_callhistory h 
							LEFT JOIN 1_groups d ON d.gid = h.gid 
							WHERE 1  AND (DATE(h.`starttime`)  > DATE(DATE_SUB(NOW(), INTERVAL 1 WEEK)))
[2017-05-02 16:13:46]	SQL :	SELECT COALESCE(COUNT(callid), 0) AS day 
							FROM 1_callhistory h 
							LEFT JOIN 1_groups d ON d.gid = h.gid 
							WHERE 1  AND (MONTH(h.`starttime` ) = MONTH(NOW()))
[2017-05-02 16:13:46]	SQL :	SELECT COALESCE(COUNT(pbxid), 0) AS day 
							FROM 1_pbxreport h 
							WHERE 1 AND (DATE(h.`starttime`) = DATE(NOW()))
[2017-05-02 16:13:46]	SQL :	SELECT COALESCE(COUNT(pbxid), 0) AS day 
							FROM 1_pbxreport h 
							WHERE 1  AND (DATE(h.`starttime`)  > DATE(DATE_SUB(NOW(), INTERVAL 1 WEEK)))
[2017-05-02 16:13:46]	SQL :	SELECT COALESCE(COUNT(pbxid), 0) AS day 
							FROM 1_pbxreport h 
							WHERE 1  AND (MONTH(h.`starttime` ) = MONTH(NOW()))
[2017-05-02 16:13:46]	SQL :	SELECT COALESCE(COUNT(hid), 0) AS day 
							   FROM 1_ivrshistory h 
						       WHERE 1 AND (DATE(h.`datetime`) = DATE(NOW()))
[2017-05-02 16:13:46]	SQL :	SELECT COALESCE(COUNT(hid), 0) AS day 
							   FROM 1_ivrshistory h 
						       WHERE 1  AND (DATE(h.`datetime`)  > DATE(DATE_SUB(NOW(), INTERVAL 1 WEEK)))
[2017-05-02 16:13:46]	SQL :	SELECT COALESCE(COUNT(hid), 0) AS day 
							   FROM 1_ivrshistory h 
						       WHERE 1  AND (MONTH(h.`datetime` ) = MONTH(NOW()))
[2017-05-02 16:13:46]	SQL :	SELECT COALESCE(COUNT(leadid), 0) AS day 
							FROM 1_leads a 
							LEFT JOIN 1_leads_groups d ON d.gid = a.gid 
							WHERE (DATE(a.`createdon`) = DATE(NOW()))
[2017-05-02 16:13:46]	SQL :	SELECT COALESCE(COUNT(leadid), 0) AS day 
							FROM 1_leads a 
							LEFT JOIN 1_leads_groups d ON d.gid = a.gid 
							WHERE (DATE(a.`createdon`) = DATE(NOW()))
[2017-05-02 16:13:46]	SQL :	SELECT COALESCE(COUNT(leadid), 0) AS day 
							FROM 1_leads a 
							LEFT JOIN 1_leads_groups d ON d.gid = a.gid 
							WHERE (DATE(a.`createdon`) = DATE(NOW()))
[2017-05-02 16:13:46]	SQL :	SELECT COALESCE(COUNT(tktid), 0) AS day 
							FROM 1_support_tickets a 
							LEFT JOIN 1_support_groups d ON d.gid = a.gid 
							WHERE (DATE(a.`createdon`) = DATE(NOW()))
[2017-05-02 16:13:46]	SQL :	SELECT COALESCE(COUNT(tktid), 0) AS day 
							FROM 1_support_tickets a 
							LEFT JOIN 1_support_groups d ON d.gid = a.gid 
							WHERE (DATE(a.`createdon`) = DATE(NOW()))
[2017-05-02 16:13:46]	SQL :	SELECT COALESCE(COUNT(tktid), 0) AS day 
							FROM 1_support_tickets a 
							LEFT JOIN 1_support_groups d ON d.gid = a.gid 
							WHERE (DATE(a.`createdon`) = DATE(NOW()))
[2017-05-02 16:13:46]	SQL :	SELECT COALESCE(COUNT(callid), 0) AS day 
							FROM 1_outboundcalls h 
							WHERE (DATE(h.`starttime`) = DATE(NOW()))
[2017-05-02 16:13:46]	SQL :	SELECT COALESCE(COUNT(callid), 0) AS day 
							FROM 1_outboundcalls h 
							WHERE (DATE(h.`starttime`) = DATE(NOW()))
[2017-05-02 16:13:46]	SQL :	SELECT COALESCE(COUNT(callid), 0) AS day 
							FROM 1_outboundcalls h 
							WHERE (DATE(h.`starttime`) = DATE(NOW()))
[2017-05-02 16:13:46]	SQL :	SELECT COALESCE(COUNT(callid), 0) AS day 
							FROM 1_mtracker h 
							WHERE (DATE(h.`starttime`) = DATE(NOW()))
[2017-05-02 16:13:46]	SQL :	SELECT COALESCE(COUNT(callid), 0) AS day 
							FROM 1_mtracker h 
							WHERE (DATE(h.`starttime`) = DATE(NOW()))
[2017-05-02 16:13:46]	SQL :	SELECT COALESCE(COUNT(callid), 0) AS day 
							FROM 1_mtracker h 
							WHERE (DATE(h.`starttime`) = DATE(NOW()))
[2017-05-02 16:13:46]	DEBUG :	Config Class Initialized
[2017-05-02 16:13:46]	DEBUG :	Hooks Class Initialized
[2017-05-02 16:13:46]	DEBUG :	URI Class Initialized
[2017-05-02 16:13:46]	DEBUG :	Router Class Initialized
[2017-05-02 16:13:46]	DEBUG :	Output Class Initialized
[2017-05-02 16:13:46]	DEBUG :	Input Class Initialized
[2017-05-02 16:13:46]	DEBUG :	Global POST and COOKIE data sanitized
[2017-05-02 16:13:46]	DEBUG :	Language Class Initialized
[2017-05-02 16:13:46]	DEBUG :	Loader Class Initialized
[2017-05-02 16:13:46]	DEBUG :	Helper loaded: url_helper
[2017-05-02 16:13:46]	DEBUG :	Helper loaded: form_helper
[2017-05-02 16:13:46]	DEBUG :	Helper loaded: html_helper
[2017-05-02 16:13:46]	DEBUG :	Helper loaded: email_helper
[2017-05-02 16:13:46]	DEBUG :	Helper loaded: ckeditor_helper
[2017-05-02 16:13:46]	DEBUG :	Helper loaded: mcube_helper
[2017-05-02 16:13:46]	DEBUG :	Database Driver Class Initialized
[2017-05-02 16:13:46]	ERROR :	Severity: 8192  --> mysql_pconnect(): The mysql extension is deprecated and will be removed in the future: use mysqli or PDO instead /var/www/html/mcnew/system/database/drivers/mysql/mysql_driver.php 88
[2017-05-02 16:13:46]	DEBUG :	Session Class Initialized
[2017-05-02 16:13:46]	DEBUG :	Helper loaded: string_helper
[2017-05-02 16:13:46]	DEBUG :	Encrypt Class Initialized
[2017-05-02 16:13:46]	DEBUG :	A session cookie was not found.
[2017-05-02 16:13:46]	SQL :	INSERT INTO `call_sessions` (`session_id`, `ip_address`, `user_agent`, `last_activity`) VALUES ('d30648961874a08734f5759ef5855358', '192.168.1.114', 'Dalvik/2.1.0 (Linux; U; Android 6.0; Panasonic T44', 1493721826)
[2017-05-02 16:13:46]	DEBUG :	Session routines successfully run
[2017-05-02 16:13:46]	DEBUG :	Table Class Initialized
[2017-05-02 16:13:46]	DEBUG :	Pagination Class Initialized
[2017-05-02 16:13:46]	DEBUG :	Config file loaded: config/paypallib_config.php
[2017-05-02 16:13:46]	DEBUG :	Form Validation Class Initialized
[2017-05-02 16:13:46]	DEBUG :	Email Class Initialized
[2017-05-02 16:13:46]	DEBUG :	Language file loaded: language/english/calendar_lang.php
[2017-05-02 16:13:46]	DEBUG :	Calendar Class Initialized
[2017-05-02 16:13:46]	DEBUG :	Controller Class Initialized
[2017-05-02 16:13:46]	DEBUG :	Model Class Initialized
[2017-05-02 16:13:46]	DEBUG :	Model Class Initialized
[2017-05-02 16:13:46]	DEBUG :	Model Class Initialized
[2017-05-02 16:13:46]	DEBUG :	Model Class Initialized
[2017-05-02 16:13:46]	DEBUG :	Model Class Initialized
[2017-05-02 16:13:46]	DEBUG :	Model Class Initialized
[2017-05-02 16:13:46]	DEBUG :	Model Class Initialized
[2017-05-02 16:13:46]	DEBUG :	Model Class Initialized
[2017-05-02 16:13:46]	DEBUG :	Model Class Initialized
[2017-05-02 16:13:46]	DEBUG :	Model Class Initialized
[2017-05-02 16:13:46]	DEBUG :	Model Class Initialized
[2017-05-02 16:13:46]	DEBUG :	Model Class Initialized
[2017-05-02 16:13:46]	DEBUG :	Model Class Initialized
[2017-05-02 16:13:46]	DEBUG :	Model Class Initialized
[2017-05-02 16:13:46]	DEBUG :	Plugin loaded: to_pdf_pi
[2017-05-02 16:13:46]	DEBUG :	Model Class Initialized
[2017-05-02 16:13:46]	DEBUG :	Language file loaded: language/english/form_validation_lang.php
[2017-05-02 16:13:46]	SQL :	SELECT uid,bid,eid FROM `user` WHERE authkey='1.1.d886b8e8a0615'
[2017-05-02 16:13:46]	DEBUG :	Database Driver Class Initialized
[2017-05-02 16:13:46]	SQL :	SELECT roleid FROM 1_employee
							WHERE eid='1'
							AND bid='1'
[2017-05-02 16:13:46]	DEBUG :	Database Driver Class Initialized
[2017-05-02 16:13:46]	SQL :	SELECT * FROM 1_user_role
							WHERE roleid='1'
							AND bid='1'
[2017-05-02 16:13:46]	SQL :	SELECT m.modid,m.modname,m.moddesc,
							COALESCE(o.opt_add,0) as opt_add,
							COALESCE(o.opt_view,0) as opt_view,
							COALESCE(o.opt_download,0) as opt_download,
							COALESCE(opt_delete,0) as opt_delete 
							FROM module m
							LEFT JOIN (SELECT * FROM 1_role_mod_opt
							WHERE roleid='1' 
							AND bid='1') as o
							ON m.modid=o.modid where m.status=1
[2017-05-02 16:13:46]	SQL :	SELECT a.*,f.fieldname FROM 1_role_access a
								LEFT JOIN systemfields f on a.fieldid=f.fieldid
								WHERE a.roleid='1'
								AND a.bid='1'
								AND a.fieldtype='s'
[2017-05-02 16:13:46]	SQL :	SELECT * FROM 1_role_access
								WHERE roleid='1'
								AND bid='1'
							AND fieldtype='c'
[2017-05-02 16:13:46]	SQL :	SELECT pri.landingnumber,pri.used,pri.climit,
								if(pri.status=0,'Not in use',
								if(pri.type='0','Calltrack',
								if(pri.type='1','IVRS',
								if(pri.type='2','PBX','Not Assign')))) as type,
								pri.associateid,
								if(pri.status=0,'None',
								if(pri.type='0',g.groupname,
								if(pri.type='1',i.title,
								if(pri.type='2',pbx.title,'None')))) as title,
								if(pri.status=0,'None',
								if(pri.type='0',ch.lastcall,
								if(pri.type='1',ih.lastcall,
								if(pri.type='2',ph.lastcall,'None')))) as lastcall
								FROM prinumbers pri
								LEFT JOIN 1_groups g on (g.prinumber=pri.number AND g.gid=pri.associateid AND g.status=1)
								LEFT JOIN 1_ivrs i on (i.prinumber=pri.number AND i.ivrsid=pri.associateid AND i.status=1)
								LEFT JOIN 1_pbx pbx on (pbx.prinumber=pri.number AND pbx.pbxid=pri.associateid AND pbx.status=1)
								LEFT JOIN (SELECT g.gid,max(h.starttime) as lastcall FROM 1_groups g LEFT JOIN 1_callhistory h on g.gid=h.gid GROUP BY g.gid) ch on g.gid=ch.gid
								LEFT JOIN (SELECT i.ivrsid,max(h.datetime) as lastcall FROM 1_ivrs i LEFT JOIN 1_ivrshistory h on i.ivrsid=h.ivrsid GROUP BY i.ivrsid) ih on i.ivrsid=ih.ivrsid
								LEFT JOIN (SELECT p.pbxid,max(h.starttime) as lastcall FROM 1_pbx p LEFT JOIN 1_pbxreport h on p.pbxid=h.pbxid GROUP BY p.pbxid) ph on pbx.pbxid=ph.pbxid
								WHERE pri.bid=1
[2017-05-02 16:13:46]	SQL :	SELECT balance FROM sms_bal  where bid='1'
[2017-05-02 16:13:46]	SQL :	SELECT balance FROM call_bal where bid='1'
[2017-05-02 16:13:46]	SQL :	SELECT DISTINCT(e.eid),e.empname,eb.start_time FROM 1_employee e
		                       LEFT JOIN 1_emp_break eb ON e.eid = eb.eid
		                       LEFT JOIN 1_groups d ON e.eid = d.eid
		                       WHERE eb.end_time='0000-00-00' AND e.selfdisable=1  GROUP BY d.gid,e.eid
[2017-05-02 16:13:46]	SQL :	SELECT COALESCE(COUNT(callid), 0) AS day 
							FROM 1_callhistory h 
							LEFT JOIN 1_groups d ON d.gid = h.gid 
							WHERE 1 AND (DATE(h.`starttime`) = DATE(NOW()))
[2017-05-02 16:13:46]	SQL :	SELECT COALESCE(COUNT(callid), 0) AS day 
							FROM 1_callhistory h 
							LEFT JOIN 1_groups d ON d.gid = h.gid 
							WHERE 1  AND (DATE(h.`starttime`)  > DATE(DATE_SUB(NOW(), INTERVAL 1 WEEK)))
[2017-05-02 16:13:46]	SQL :	SELECT COALESCE(COUNT(callid), 0) AS day 
							FROM 1_callhistory h 
							LEFT JOIN 1_groups d ON d.gid = h.gid 
							WHERE 1  AND (MONTH(h.`starttime` ) = MONTH(NOW()))
[2017-05-02 16:13:46]	SQL :	SELECT COALESCE(COUNT(pbxid), 0) AS day 
							FROM 1_pbxreport h 
							WHERE 1 AND (DATE(h.`starttime`) = DATE(NOW()))
[2017-05-02 16:13:46]	SQL :	SELECT COALESCE(COUNT(pbxid), 0) AS day 
							FROM 1_pbxreport h 
							WHERE 1  AND (DATE(h.`starttime`)  > DATE(DATE_SUB(NOW(), INTERVAL 1 WEEK)))
[2017-05-02 16:13:46]	SQL :	SELECT COALESCE(COUNT(pbxid), 0) AS day 
							FROM 1_pbxreport h 
							WHERE 1  AND (MONTH(h.`starttime` ) = MONTH(NOW()))
[2017-05-02 16:13:46]	SQL :	SELECT COALESCE(COUNT(hid), 0) AS day 
							   FROM 1_ivrshistory h 
						       WHERE 1 AND (DATE(h.`datetime`) = DATE(NOW()))
[2017-05-02 16:13:46]	SQL :	SELECT COALESCE(COUNT(hid), 0) AS day 
							   FROM 1_ivrshistory h 
						       WHERE 1  AND (DATE(h.`datetime`)  > DATE(DATE_SUB(NOW(), INTERVAL 1 WEEK)))
[2017-05-02 16:13:46]	SQL :	SELECT COALESCE(COUNT(hid), 0) AS day 
							   FROM 1_ivrshistory h 
						       WHERE 1  AND (MONTH(h.`datetime` ) = MONTH(NOW()))
[2017-05-02 16:13:46]	SQL :	SELECT COALESCE(COUNT(leadid), 0) AS day 
							FROM 1_leads a 
							LEFT JOIN 1_leads_groups d ON d.gid = a.gid 
							WHERE (DATE(a.`createdon`) = DATE(NOW()))
[2017-05-02 16:13:46]	SQL :	SELECT COALESCE(COUNT(leadid), 0) AS day 
							FROM 1_leads a 
							LEFT JOIN 1_leads_groups d ON d.gid = a.gid 
							WHERE (DATE(a.`createdon`) = DATE(NOW()))
[2017-05-02 16:13:46]	SQL :	SELECT COALESCE(COUNT(leadid), 0) AS day 
							FROM 1_leads a 
							LEFT JOIN 1_leads_groups d ON d.gid = a.gid 
							WHERE (DATE(a.`createdon`) = DATE(NOW()))
[2017-05-02 16:13:46]	SQL :	SELECT COALESCE(COUNT(tktid), 0) AS day 
							FROM 1_support_tickets a 
							LEFT JOIN 1_support_groups d ON d.gid = a.gid 
							WHERE (DATE(a.`createdon`) = DATE(NOW()))
[2017-05-02 16:13:46]	SQL :	SELECT COALESCE(COUNT(tktid), 0) AS day 
							FROM 1_support_tickets a 
							LEFT JOIN 1_support_groups d ON d.gid = a.gid 
							WHERE (DATE(a.`createdon`) = DATE(NOW()))
[2017-05-02 16:13:46]	SQL :	SELECT COALESCE(COUNT(tktid), 0) AS day 
							FROM 1_support_tickets a 
							LEFT JOIN 1_support_groups d ON d.gid = a.gid 
							WHERE (DATE(a.`createdon`) = DATE(NOW()))
[2017-05-02 16:13:46]	SQL :	SELECT COALESCE(COUNT(callid), 0) AS day 
							FROM 1_outboundcalls h 
							WHERE (DATE(h.`starttime`) = DATE(NOW()))
[2017-05-02 16:13:46]	SQL :	SELECT COALESCE(COUNT(callid), 0) AS day 
							FROM 1_outboundcalls h 
							WHERE (DATE(h.`starttime`) = DATE(NOW()))
[2017-05-02 16:13:46]	SQL :	SELECT COALESCE(COUNT(callid), 0) AS day 
							FROM 1_outboundcalls h 
							WHERE (DATE(h.`starttime`) = DATE(NOW()))
[2017-05-02 16:13:46]	SQL :	SELECT COALESCE(COUNT(callid), 0) AS day 
							FROM 1_mtracker h 
							WHERE (DATE(h.`starttime`) = DATE(NOW()))
[2017-05-02 16:13:46]	SQL :	SELECT COALESCE(COUNT(callid), 0) AS day 
							FROM 1_mtracker h 
							WHERE (DATE(h.`starttime`) = DATE(NOW()))
[2017-05-02 16:13:46]	SQL :	SELECT COALESCE(COUNT(callid), 0) AS day 
							FROM 1_mtracker h 
							WHERE (DATE(h.`starttime`) = DATE(NOW()))
[2017-05-02 16:13:51]	DEBUG :	Config Class Initialized
[2017-05-02 16:13:51]	DEBUG :	Hooks Class Initialized
[2017-05-02 16:13:51]	DEBUG :	URI Class Initialized
[2017-05-02 16:13:51]	DEBUG :	Router Class Initialized
[2017-05-02 16:13:51]	DEBUG :	Output Class Initialized
[2017-05-02 16:13:51]	DEBUG :	Input Class Initialized
[2017-05-02 16:13:51]	DEBUG :	Global POST and COOKIE data sanitized
[2017-05-02 16:13:51]	DEBUG :	Language Class Initialized
[2017-05-02 16:13:51]	DEBUG :	Loader Class Initialized
[2017-05-02 16:13:51]	DEBUG :	Helper loaded: url_helper
[2017-05-02 16:13:51]	DEBUG :	Helper loaded: form_helper
[2017-05-02 16:13:51]	DEBUG :	Helper loaded: html_helper
[2017-05-02 16:13:51]	DEBUG :	Helper loaded: email_helper
[2017-05-02 16:13:51]	DEBUG :	Helper loaded: ckeditor_helper
[2017-05-02 16:13:51]	DEBUG :	Helper loaded: mcube_helper
[2017-05-02 16:13:51]	DEBUG :	Database Driver Class Initialized
[2017-05-02 16:13:51]	ERROR :	Severity: 8192  --> mysql_pconnect(): The mysql extension is deprecated and will be removed in the future: use mysqli or PDO instead /var/www/html/mcnew/system/database/drivers/mysql/mysql_driver.php 88
[2017-05-02 16:13:51]	DEBUG :	Session Class Initialized
[2017-05-02 16:13:51]	DEBUG :	Helper loaded: string_helper
[2017-05-02 16:13:51]	DEBUG :	Encrypt Class Initialized
[2017-05-02 16:13:51]	DEBUG :	A session cookie was not found.
[2017-05-02 16:13:51]	SQL :	INSERT INTO `call_sessions` (`session_id`, `ip_address`, `user_agent`, `last_activity`) VALUES ('a0823c70657b6b1c9a101b4792fa5adf', '192.168.1.114', 'Dalvik/2.1.0 (Linux; U; Android 6.0; Panasonic T44', 1493721831)
[2017-05-02 16:13:51]	DEBUG :	Session routines successfully run
[2017-05-02 16:13:51]	DEBUG :	Table Class Initialized
[2017-05-02 16:13:51]	DEBUG :	Pagination Class Initialized
[2017-05-02 16:13:51]	DEBUG :	Config file loaded: config/paypallib_config.php
[2017-05-02 16:13:51]	DEBUG :	Form Validation Class Initialized
[2017-05-02 16:13:51]	DEBUG :	Email Class Initialized
[2017-05-02 16:13:51]	DEBUG :	Language file loaded: language/english/calendar_lang.php
[2017-05-02 16:13:51]	DEBUG :	Calendar Class Initialized
[2017-05-02 16:13:51]	DEBUG :	Controller Class Initialized
[2017-05-02 16:13:51]	DEBUG :	Model Class Initialized
[2017-05-02 16:13:51]	DEBUG :	Model Class Initialized
[2017-05-02 16:13:51]	DEBUG :	Model Class Initialized
[2017-05-02 16:13:51]	DEBUG :	Model Class Initialized
[2017-05-02 16:13:51]	DEBUG :	Model Class Initialized
[2017-05-02 16:13:51]	DEBUG :	Model Class Initialized
[2017-05-02 16:13:51]	DEBUG :	Model Class Initialized
[2017-05-02 16:13:51]	DEBUG :	Model Class Initialized
[2017-05-02 16:13:51]	DEBUG :	Model Class Initialized
[2017-05-02 16:13:51]	DEBUG :	Model Class Initialized
[2017-05-02 16:13:51]	DEBUG :	Model Class Initialized
[2017-05-02 16:13:51]	DEBUG :	Model Class Initialized
[2017-05-02 16:13:51]	DEBUG :	Model Class Initialized
[2017-05-02 16:13:51]	DEBUG :	Model Class Initialized
[2017-05-02 16:13:51]	DEBUG :	Plugin loaded: to_pdf_pi
[2017-05-02 16:13:51]	DEBUG :	Model Class Initialized
[2017-05-02 16:13:51]	DEBUG :	Language file loaded: language/english/form_validation_lang.php
[2017-05-02 16:13:51]	SQL :	SELECT uid,bid,eid FROM `user` WHERE authkey='1.1.d886b8e8a0615'
[2017-05-02 16:13:51]	DEBUG :	Database Driver Class Initialized
[2017-05-02 16:13:51]	SQL :	SELECT roleid FROM 1_employee
							WHERE eid='1'
							AND bid='1'
[2017-05-02 16:13:51]	DEBUG :	Database Driver Class Initialized
[2017-05-02 16:13:51]	SQL :	SELECT * FROM 1_user_role
							WHERE roleid='1'
							AND bid='1'
[2017-05-02 16:13:51]	SQL :	SELECT m.modid,m.modname,m.moddesc,
							COALESCE(o.opt_add,0) as opt_add,
							COALESCE(o.opt_view,0) as opt_view,
							COALESCE(o.opt_download,0) as opt_download,
							COALESCE(opt_delete,0) as opt_delete 
							FROM module m
							LEFT JOIN (SELECT * FROM 1_role_mod_opt
							WHERE roleid='1' 
							AND bid='1') as o
							ON m.modid=o.modid where m.status=1
[2017-05-02 16:13:51]	SQL :	SELECT a.*,f.fieldname FROM 1_role_access a
								LEFT JOIN systemfields f on a.fieldid=f.fieldid
								WHERE a.roleid='1'
								AND a.bid='1'
								AND a.fieldtype='s'
[2017-05-02 16:13:51]	SQL :	SELECT * FROM 1_role_access
								WHERE roleid='1'
								AND bid='1'
							AND fieldtype='c'
[2017-05-02 16:13:51]	SQL :	SELECT pri.landingnumber,pri.used,pri.climit,
								if(pri.status=0,'Not in use',
								if(pri.type='0','Calltrack',
								if(pri.type='1','IVRS',
								if(pri.type='2','PBX','Not Assign')))) as type,
								pri.associateid,
								if(pri.status=0,'None',
								if(pri.type='0',g.groupname,
								if(pri.type='1',i.title,
								if(pri.type='2',pbx.title,'None')))) as title,
								if(pri.status=0,'None',
								if(pri.type='0',ch.lastcall,
								if(pri.type='1',ih.lastcall,
								if(pri.type='2',ph.lastcall,'None')))) as lastcall
								FROM prinumbers pri
								LEFT JOIN 1_groups g on (g.prinumber=pri.number AND g.gid=pri.associateid AND g.status=1)
								LEFT JOIN 1_ivrs i on (i.prinumber=pri.number AND i.ivrsid=pri.associateid AND i.status=1)
								LEFT JOIN 1_pbx pbx on (pbx.prinumber=pri.number AND pbx.pbxid=pri.associateid AND pbx.status=1)
								LEFT JOIN (SELECT g.gid,max(h.starttime) as lastcall FROM 1_groups g LEFT JOIN 1_callhistory h on g.gid=h.gid GROUP BY g.gid) ch on g.gid=ch.gid
								LEFT JOIN (SELECT i.ivrsid,max(h.datetime) as lastcall FROM 1_ivrs i LEFT JOIN 1_ivrshistory h on i.ivrsid=h.ivrsid GROUP BY i.ivrsid) ih on i.ivrsid=ih.ivrsid
								LEFT JOIN (SELECT p.pbxid,max(h.starttime) as lastcall FROM 1_pbx p LEFT JOIN 1_pbxreport h on p.pbxid=h.pbxid GROUP BY p.pbxid) ph on pbx.pbxid=ph.pbxid
								WHERE pri.bid=1
[2017-05-02 16:13:51]	SQL :	SELECT balance FROM sms_bal  where bid='1'
[2017-05-02 16:13:51]	SQL :	SELECT balance FROM call_bal where bid='1'
[2017-05-02 16:13:51]	SQL :	SELECT DISTINCT(e.eid),e.empname,eb.start_time FROM 1_employee e
		                       LEFT JOIN 1_emp_break eb ON e.eid = eb.eid
		                       LEFT JOIN 1_groups d ON e.eid = d.eid
		                       WHERE eb.end_time='0000-00-00' AND e.selfdisable=1  GROUP BY d.gid,e.eid
[2017-05-02 16:13:51]	SQL :	SELECT COALESCE(COUNT(callid), 0) AS day 
							FROM 1_callhistory h 
							LEFT JOIN 1_groups d ON d.gid = h.gid 
							WHERE 1 AND (DATE(h.`starttime`) = DATE(NOW()))
[2017-05-02 16:13:51]	SQL :	SELECT COALESCE(COUNT(callid), 0) AS day 
							FROM 1_callhistory h 
							LEFT JOIN 1_groups d ON d.gid = h.gid 
							WHERE 1  AND (DATE(h.`starttime`)  > DATE(DATE_SUB(NOW(), INTERVAL 1 WEEK)))
[2017-05-02 16:13:51]	SQL :	SELECT COALESCE(COUNT(callid), 0) AS day 
							FROM 1_callhistory h 
							LEFT JOIN 1_groups d ON d.gid = h.gid 
							WHERE 1  AND (MONTH(h.`starttime` ) = MONTH(NOW()))
[2017-05-02 16:13:51]	SQL :	SELECT COALESCE(COUNT(pbxid), 0) AS day 
							FROM 1_pbxreport h 
							WHERE 1 AND (DATE(h.`starttime`) = DATE(NOW()))
[2017-05-02 16:13:51]	SQL :	SELECT COALESCE(COUNT(pbxid), 0) AS day 
							FROM 1_pbxreport h 
							WHERE 1  AND (DATE(h.`starttime`)  > DATE(DATE_SUB(NOW(), INTERVAL 1 WEEK)))
[2017-05-02 16:13:51]	SQL :	SELECT COALESCE(COUNT(pbxid), 0) AS day 
							FROM 1_pbxreport h 
							WHERE 1  AND (MONTH(h.`starttime` ) = MONTH(NOW()))
[2017-05-02 16:13:51]	SQL :	SELECT COALESCE(COUNT(hid), 0) AS day 
							   FROM 1_ivrshistory h 
						       WHERE 1 AND (DATE(h.`datetime`) = DATE(NOW()))
[2017-05-02 16:13:51]	SQL :	SELECT COALESCE(COUNT(hid), 0) AS day 
							   FROM 1_ivrshistory h 
						       WHERE 1  AND (DATE(h.`datetime`)  > DATE(DATE_SUB(NOW(), INTERVAL 1 WEEK)))
[2017-05-02 16:13:51]	SQL :	SELECT COALESCE(COUNT(hid), 0) AS day 
							   FROM 1_ivrshistory h 
						       WHERE 1  AND (MONTH(h.`datetime` ) = MONTH(NOW()))
[2017-05-02 16:13:51]	SQL :	SELECT COALESCE(COUNT(leadid), 0) AS day 
							FROM 1_leads a 
							LEFT JOIN 1_leads_groups d ON d.gid = a.gid 
							WHERE (DATE(a.`createdon`) = DATE(NOW()))
[2017-05-02 16:13:51]	SQL :	SELECT COALESCE(COUNT(leadid), 0) AS day 
							FROM 1_leads a 
							LEFT JOIN 1_leads_groups d ON d.gid = a.gid 
							WHERE (DATE(a.`createdon`) = DATE(NOW()))
[2017-05-02 16:13:51]	SQL :	SELECT COALESCE(COUNT(leadid), 0) AS day 
							FROM 1_leads a 
							LEFT JOIN 1_leads_groups d ON d.gid = a.gid 
							WHERE (DATE(a.`createdon`) = DATE(NOW()))
[2017-05-02 16:13:51]	SQL :	SELECT COALESCE(COUNT(tktid), 0) AS day 
							FROM 1_support_tickets a 
							LEFT JOIN 1_support_groups d ON d.gid = a.gid 
							WHERE (DATE(a.`createdon`) = DATE(NOW()))
[2017-05-02 16:13:51]	SQL :	SELECT COALESCE(COUNT(tktid), 0) AS day 
							FROM 1_support_tickets a 
							LEFT JOIN 1_support_groups d ON d.gid = a.gid 
							WHERE (DATE(a.`createdon`) = DATE(NOW()))
[2017-05-02 16:13:51]	SQL :	SELECT COALESCE(COUNT(tktid), 0) AS day 
							FROM 1_support_tickets a 
							LEFT JOIN 1_support_groups d ON d.gid = a.gid 
							WHERE (DATE(a.`createdon`) = DATE(NOW()))
[2017-05-02 16:13:51]	SQL :	SELECT COALESCE(COUNT(callid), 0) AS day 
							FROM 1_outboundcalls h 
							WHERE (DATE(h.`starttime`) = DATE(NOW()))
[2017-05-02 16:13:51]	SQL :	SELECT COALESCE(COUNT(callid), 0) AS day 
							FROM 1_outboundcalls h 
							WHERE (DATE(h.`starttime`) = DATE(NOW()))
[2017-05-02 16:13:51]	SQL :	SELECT COALESCE(COUNT(callid), 0) AS day 
							FROM 1_outboundcalls h 
							WHERE (DATE(h.`starttime`) = DATE(NOW()))
[2017-05-02 16:13:51]	SQL :	SELECT COALESCE(COUNT(callid), 0) AS day 
							FROM 1_mtracker h 
							WHERE (DATE(h.`starttime`) = DATE(NOW()))
[2017-05-02 16:13:51]	SQL :	SELECT COALESCE(COUNT(callid), 0) AS day 
							FROM 1_mtracker h 
							WHERE (DATE(h.`starttime`) = DATE(NOW()))
[2017-05-02 16:13:51]	SQL :	SELECT COALESCE(COUNT(callid), 0) AS day 
							FROM 1_mtracker h 
							WHERE (DATE(h.`starttime`) = DATE(NOW()))
[2017-05-02 16:13:53]	DEBUG :	Config Class Initialized
[2017-05-02 16:13:53]	DEBUG :	Hooks Class Initialized
[2017-05-02 16:13:53]	DEBUG :	URI Class Initialized
[2017-05-02 16:13:53]	DEBUG :	Router Class Initialized
[2017-05-02 16:13:53]	DEBUG :	Output Class Initialized
[2017-05-02 16:13:53]	DEBUG :	Input Class Initialized
[2017-05-02 16:13:53]	DEBUG :	Global POST and COOKIE data sanitized
[2017-05-02 16:13:53]	DEBUG :	Language Class Initialized
[2017-05-02 16:13:53]	DEBUG :	Loader Class Initialized
[2017-05-02 16:13:53]	DEBUG :	Helper loaded: url_helper
[2017-05-02 16:13:53]	DEBUG :	Helper loaded: form_helper
[2017-05-02 16:13:53]	DEBUG :	Helper loaded: html_helper
[2017-05-02 16:13:53]	DEBUG :	Helper loaded: email_helper
[2017-05-02 16:13:53]	DEBUG :	Helper loaded: ckeditor_helper
[2017-05-02 16:13:53]	DEBUG :	Helper loaded: mcube_helper
[2017-05-02 16:13:53]	DEBUG :	Database Driver Class Initialized
[2017-05-02 16:13:53]	ERROR :	Severity: 8192  --> mysql_pconnect(): The mysql extension is deprecated and will be removed in the future: use mysqli or PDO instead /var/www/html/mcnew/system/database/drivers/mysql/mysql_driver.php 88
[2017-05-02 16:13:53]	DEBUG :	Session Class Initialized
[2017-05-02 16:13:53]	DEBUG :	Helper loaded: string_helper
[2017-05-02 16:13:53]	DEBUG :	Encrypt Class Initialized
[2017-05-02 16:13:53]	DEBUG :	A session cookie was not found.
[2017-05-02 16:13:53]	SQL :	INSERT INTO `call_sessions` (`session_id`, `ip_address`, `user_agent`, `last_activity`) VALUES ('cab8a4d50fdbfb0badc8cc5137da646a', '192.168.1.114', 'Dalvik/2.1.0 (Linux; U; Android 6.0; Panasonic T44', 1493721833)
[2017-05-02 16:13:53]	DEBUG :	Session routines successfully run
[2017-05-02 16:13:53]	DEBUG :	Table Class Initialized
[2017-05-02 16:13:53]	DEBUG :	Pagination Class Initialized
[2017-05-02 16:13:53]	DEBUG :	Config file loaded: config/paypallib_config.php
[2017-05-02 16:13:53]	DEBUG :	Form Validation Class Initialized
[2017-05-02 16:13:53]	DEBUG :	Email Class Initialized
[2017-05-02 16:13:53]	DEBUG :	Language file loaded: language/english/calendar_lang.php
[2017-05-02 16:13:53]	DEBUG :	Calendar Class Initialized
[2017-05-02 16:13:53]	DEBUG :	Controller Class Initialized
[2017-05-02 16:13:53]	DEBUG :	Model Class Initialized
[2017-05-02 16:13:53]	DEBUG :	Model Class Initialized
[2017-05-02 16:13:53]	DEBUG :	Model Class Initialized
[2017-05-02 16:13:53]	DEBUG :	Model Class Initialized
[2017-05-02 16:13:53]	DEBUG :	Model Class Initialized
[2017-05-02 16:13:53]	DEBUG :	Model Class Initialized
[2017-05-02 16:13:53]	DEBUG :	Model Class Initialized
[2017-05-02 16:13:53]	DEBUG :	Model Class Initialized
[2017-05-02 16:13:53]	DEBUG :	Model Class Initialized
[2017-05-02 16:13:53]	DEBUG :	Model Class Initialized
[2017-05-02 16:13:53]	DEBUG :	Model Class Initialized
[2017-05-02 16:13:53]	DEBUG :	Model Class Initialized
[2017-05-02 16:13:53]	DEBUG :	Model Class Initialized
[2017-05-02 16:13:53]	DEBUG :	Model Class Initialized
[2017-05-02 16:13:53]	DEBUG :	Plugin loaded: to_pdf_pi
[2017-05-02 16:13:53]	DEBUG :	Model Class Initialized
[2017-05-02 16:13:53]	DEBUG :	Language file loaded: language/english/form_validation_lang.php
[2017-05-02 16:13:53]	SQL :	SELECT uid,bid,eid FROM `user` WHERE authkey='1.1.d886b8e8a0615'
[2017-05-02 16:13:53]	DEBUG :	Database Driver Class Initialized
[2017-05-02 16:13:53]	SQL :	SELECT roleid FROM 1_employee
							WHERE eid='1'
							AND bid='1'
[2017-05-02 16:13:53]	DEBUG :	Database Driver Class Initialized
[2017-05-02 16:13:53]	SQL :	SELECT * FROM 1_user_role
							WHERE roleid='1'
							AND bid='1'
[2017-05-02 16:13:53]	SQL :	SELECT m.modid,m.modname,m.moddesc,
							COALESCE(o.opt_add,0) as opt_add,
							COALESCE(o.opt_view,0) as opt_view,
							COALESCE(o.opt_download,0) as opt_download,
							COALESCE(opt_delete,0) as opt_delete 
							FROM module m
							LEFT JOIN (SELECT * FROM 1_role_mod_opt
							WHERE roleid='1' 
							AND bid='1') as o
							ON m.modid=o.modid where m.status=1
[2017-05-02 16:13:53]	SQL :	SELECT a.*,f.fieldname FROM 1_role_access a
								LEFT JOIN systemfields f on a.fieldid=f.fieldid
								WHERE a.roleid='1'
								AND a.bid='1'
								AND a.fieldtype='s'
[2017-05-02 16:13:53]	SQL :	SELECT * FROM 1_role_access
								WHERE roleid='1'
								AND bid='1'
							AND fieldtype='c'
[2017-05-02 16:13:53]	SQL :	SELECT pri.landingnumber,pri.used,pri.climit,
								if(pri.status=0,'Not in use',
								if(pri.type='0','Calltrack',
								if(pri.type='1','IVRS',
								if(pri.type='2','PBX','Not Assign')))) as type,
								pri.associateid,
								if(pri.status=0,'None',
								if(pri.type='0',g.groupname,
								if(pri.type='1',i.title,
								if(pri.type='2',pbx.title,'None')))) as title,
								if(pri.status=0,'None',
								if(pri.type='0',ch.lastcall,
								if(pri.type='1',ih.lastcall,
								if(pri.type='2',ph.lastcall,'None')))) as lastcall
								FROM prinumbers pri
								LEFT JOIN 1_groups g on (g.prinumber=pri.number AND g.gid=pri.associateid AND g.status=1)
								LEFT JOIN 1_ivrs i on (i.prinumber=pri.number AND i.ivrsid=pri.associateid AND i.status=1)
								LEFT JOIN 1_pbx pbx on (pbx.prinumber=pri.number AND pbx.pbxid=pri.associateid AND pbx.status=1)
								LEFT JOIN (SELECT g.gid,max(h.starttime) as lastcall FROM 1_groups g LEFT JOIN 1_callhistory h on g.gid=h.gid GROUP BY g.gid) ch on g.gid=ch.gid
								LEFT JOIN (SELECT i.ivrsid,max(h.datetime) as lastcall FROM 1_ivrs i LEFT JOIN 1_ivrshistory h on i.ivrsid=h.ivrsid GROUP BY i.ivrsid) ih on i.ivrsid=ih.ivrsid
								LEFT JOIN (SELECT p.pbxid,max(h.starttime) as lastcall FROM 1_pbx p LEFT JOIN 1_pbxreport h on p.pbxid=h.pbxid GROUP BY p.pbxid) ph on pbx.pbxid=ph.pbxid
								WHERE pri.bid=1
[2017-05-02 16:13:53]	SQL :	SELECT balance FROM sms_bal  where bid='1'
[2017-05-02 16:13:53]	SQL :	SELECT balance FROM call_bal where bid='1'
[2017-05-02 16:13:53]	SQL :	SELECT DISTINCT(e.eid),e.empname,eb.start_time FROM 1_employee e
		                       LEFT JOIN 1_emp_break eb ON e.eid = eb.eid
		                       LEFT JOIN 1_groups d ON e.eid = d.eid
		                       WHERE eb.end_time='0000-00-00' AND e.selfdisable=1  GROUP BY d.gid,e.eid
[2017-05-02 16:13:53]	SQL :	SELECT COALESCE(COUNT(callid), 0) AS day 
							FROM 1_callhistory h 
							LEFT JOIN 1_groups d ON d.gid = h.gid 
							WHERE 1 AND (DATE(h.`starttime`) = DATE(NOW()))
[2017-05-02 16:13:53]	SQL :	SELECT COALESCE(COUNT(callid), 0) AS day 
							FROM 1_callhistory h 
							LEFT JOIN 1_groups d ON d.gid = h.gid 
							WHERE 1  AND (DATE(h.`starttime`)  > DATE(DATE_SUB(NOW(), INTERVAL 1 WEEK)))
[2017-05-02 16:13:53]	SQL :	SELECT COALESCE(COUNT(callid), 0) AS day 
							FROM 1_callhistory h 
							LEFT JOIN 1_groups d ON d.gid = h.gid 
							WHERE 1  AND (MONTH(h.`starttime` ) = MONTH(NOW()))
[2017-05-02 16:13:53]	SQL :	SELECT COALESCE(COUNT(pbxid), 0) AS day 
							FROM 1_pbxreport h 
							WHERE 1 AND (DATE(h.`starttime`) = DATE(NOW()))
[2017-05-02 16:13:53]	SQL :	SELECT COALESCE(COUNT(pbxid), 0) AS day 
							FROM 1_pbxreport h 
							WHERE 1  AND (DATE(h.`starttime`)  > DATE(DATE_SUB(NOW(), INTERVAL 1 WEEK)))
[2017-05-02 16:13:53]	SQL :	SELECT COALESCE(COUNT(pbxid), 0) AS day 
							FROM 1_pbxreport h 
							WHERE 1  AND (MONTH(h.`starttime` ) = MONTH(NOW()))
[2017-05-02 16:13:53]	SQL :	SELECT COALESCE(COUNT(hid), 0) AS day 
							   FROM 1_ivrshistory h 
						       WHERE 1 AND (DATE(h.`datetime`) = DATE(NOW()))
[2017-05-02 16:13:53]	SQL :	SELECT COALESCE(COUNT(hid), 0) AS day 
							   FROM 1_ivrshistory h 
						       WHERE 1  AND (DATE(h.`datetime`)  > DATE(DATE_SUB(NOW(), INTERVAL 1 WEEK)))
[2017-05-02 16:13:53]	SQL :	SELECT COALESCE(COUNT(hid), 0) AS day 
							   FROM 1_ivrshistory h 
						       WHERE 1  AND (MONTH(h.`datetime` ) = MONTH(NOW()))
[2017-05-02 16:13:53]	SQL :	SELECT COALESCE(COUNT(leadid), 0) AS day 
							FROM 1_leads a 
							LEFT JOIN 1_leads_groups d ON d.gid = a.gid 
							WHERE (DATE(a.`createdon`) = DATE(NOW()))
[2017-05-02 16:13:53]	SQL :	SELECT COALESCE(COUNT(leadid), 0) AS day 
							FROM 1_leads a 
							LEFT JOIN 1_leads_groups d ON d.gid = a.gid 
							WHERE (DATE(a.`createdon`) = DATE(NOW()))
[2017-05-02 16:13:53]	SQL :	SELECT COALESCE(COUNT(leadid), 0) AS day 
							FROM 1_leads a 
							LEFT JOIN 1_leads_groups d ON d.gid = a.gid 
							WHERE (DATE(a.`createdon`) = DATE(NOW()))
[2017-05-02 16:13:53]	SQL :	SELECT COALESCE(COUNT(tktid), 0) AS day 
							FROM 1_support_tickets a 
							LEFT JOIN 1_support_groups d ON d.gid = a.gid 
							WHERE (DATE(a.`createdon`) = DATE(NOW()))
[2017-05-02 16:13:53]	SQL :	SELECT COALESCE(COUNT(tktid), 0) AS day 
							FROM 1_support_tickets a 
							LEFT JOIN 1_support_groups d ON d.gid = a.gid 
							WHERE (DATE(a.`createdon`) = DATE(NOW()))
[2017-05-02 16:13:53]	SQL :	SELECT COALESCE(COUNT(tktid), 0) AS day 
							FROM 1_support_tickets a 
							LEFT JOIN 1_support_groups d ON d.gid = a.gid 
							WHERE (DATE(a.`createdon`) = DATE(NOW()))
[2017-05-02 16:13:53]	SQL :	SELECT COALESCE(COUNT(callid), 0) AS day 
							FROM 1_outboundcalls h 
							WHERE (DATE(h.`starttime`) = DATE(NOW()))
[2017-05-02 16:13:53]	SQL :	SELECT COALESCE(COUNT(callid), 0) AS day 
							FROM 1_outboundcalls h 
							WHERE (DATE(h.`starttime`) = DATE(NOW()))
[2017-05-02 16:13:53]	SQL :	SELECT COALESCE(COUNT(callid), 0) AS day 
							FROM 1_outboundcalls h 
							WHERE (DATE(h.`starttime`) = DATE(NOW()))
[2017-05-02 16:13:53]	SQL :	SELECT COALESCE(COUNT(callid), 0) AS day 
							FROM 1_mtracker h 
							WHERE (DATE(h.`starttime`) = DATE(NOW()))
[2017-05-02 16:13:53]	SQL :	SELECT COALESCE(COUNT(callid), 0) AS day 
							FROM 1_mtracker h 
							WHERE (DATE(h.`starttime`) = DATE(NOW()))
[2017-05-02 16:13:53]	SQL :	SELECT COALESCE(COUNT(callid), 0) AS day 
							FROM 1_mtracker h 
							WHERE (DATE(h.`starttime`) = DATE(NOW()))
[2017-05-02 16:13:59]	DEBUG :	Config Class Initialized
[2017-05-02 16:13:59]	DEBUG :	Hooks Class Initialized
[2017-05-02 16:13:59]	DEBUG :	URI Class Initialized
[2017-05-02 16:13:59]	DEBUG :	Router Class Initialized
[2017-05-02 16:13:59]	DEBUG :	Output Class Initialized
[2017-05-02 16:13:59]	DEBUG :	Input Class Initialized
[2017-05-02 16:13:59]	DEBUG :	Global POST and COOKIE data sanitized
[2017-05-02 16:13:59]	DEBUG :	Language Class Initialized
[2017-05-02 16:13:59]	DEBUG :	Loader Class Initialized
[2017-05-02 16:13:59]	DEBUG :	Helper loaded: url_helper
[2017-05-02 16:13:59]	DEBUG :	Helper loaded: form_helper
[2017-05-02 16:13:59]	DEBUG :	Helper loaded: html_helper
[2017-05-02 16:13:59]	DEBUG :	Helper loaded: email_helper
[2017-05-02 16:13:59]	DEBUG :	Helper loaded: ckeditor_helper
[2017-05-02 16:13:59]	DEBUG :	Helper loaded: mcube_helper
[2017-05-02 16:13:59]	DEBUG :	Database Driver Class Initialized
[2017-05-02 16:13:59]	ERROR :	Severity: 8192  --> mysql_pconnect(): The mysql extension is deprecated and will be removed in the future: use mysqli or PDO instead /var/www/html/mcnew/system/database/drivers/mysql/mysql_driver.php 88
[2017-05-02 16:13:59]	DEBUG :	Session Class Initialized
[2017-05-02 16:13:59]	DEBUG :	Helper loaded: string_helper
[2017-05-02 16:13:59]	DEBUG :	Encrypt Class Initialized
[2017-05-02 16:13:59]	DEBUG :	A session cookie was not found.
[2017-05-02 16:13:59]	SQL :	INSERT INTO `call_sessions` (`session_id`, `ip_address`, `user_agent`, `last_activity`) VALUES ('08dca493c44fd9f18ba9925ebabe7999', '192.168.1.114', 'Dalvik/2.1.0 (Linux; U; Android 6.0; Panasonic T44', 1493721839)
[2017-05-02 16:13:59]	DEBUG :	Session routines successfully run
[2017-05-02 16:13:59]	DEBUG :	Table Class Initialized
[2017-05-02 16:13:59]	DEBUG :	Pagination Class Initialized
[2017-05-02 16:13:59]	DEBUG :	Config file loaded: config/paypallib_config.php
[2017-05-02 16:13:59]	DEBUG :	Form Validation Class Initialized
[2017-05-02 16:13:59]	DEBUG :	Email Class Initialized
[2017-05-02 16:13:59]	DEBUG :	Language file loaded: language/english/calendar_lang.php
[2017-05-02 16:13:59]	DEBUG :	Calendar Class Initialized
[2017-05-02 16:13:59]	DEBUG :	Controller Class Initialized
[2017-05-02 16:13:59]	DEBUG :	Model Class Initialized
[2017-05-02 16:13:59]	DEBUG :	Model Class Initialized
[2017-05-02 16:13:59]	DEBUG :	Model Class Initialized
[2017-05-02 16:13:59]	DEBUG :	Model Class Initialized
[2017-05-02 16:13:59]	DEBUG :	Model Class Initialized
[2017-05-02 16:13:59]	DEBUG :	Model Class Initialized
[2017-05-02 16:13:59]	DEBUG :	Model Class Initialized
[2017-05-02 16:13:59]	DEBUG :	Model Class Initialized
[2017-05-02 16:13:59]	DEBUG :	Model Class Initialized
[2017-05-02 16:13:59]	DEBUG :	Model Class Initialized
[2017-05-02 16:13:59]	DEBUG :	Model Class Initialized
[2017-05-02 16:13:59]	DEBUG :	Model Class Initialized
[2017-05-02 16:13:59]	DEBUG :	Model Class Initialized
[2017-05-02 16:13:59]	DEBUG :	Model Class Initialized
[2017-05-02 16:13:59]	DEBUG :	Plugin loaded: to_pdf_pi
[2017-05-02 16:13:59]	DEBUG :	Model Class Initialized
[2017-05-02 16:13:59]	DEBUG :	Language file loaded: language/english/form_validation_lang.php
[2017-05-02 16:13:59]	SQL :	SELECT uid,bid,eid FROM `user` WHERE authkey='1.1.d886b8e8a0615'
[2017-05-02 16:13:59]	DEBUG :	Database Driver Class Initialized
[2017-05-02 16:13:59]	SQL :	SELECT roleid FROM 1_employee
							WHERE eid='1'
							AND bid='1'
[2017-05-02 16:13:59]	DEBUG :	Database Driver Class Initialized
[2017-05-02 16:13:59]	SQL :	SELECT * FROM 1_user_role
							WHERE roleid='1'
							AND bid='1'
[2017-05-02 16:13:59]	SQL :	SELECT m.modid,m.modname,m.moddesc,
							COALESCE(o.opt_add,0) as opt_add,
							COALESCE(o.opt_view,0) as opt_view,
							COALESCE(o.opt_download,0) as opt_download,
							COALESCE(opt_delete,0) as opt_delete 
							FROM module m
							LEFT JOIN (SELECT * FROM 1_role_mod_opt
							WHERE roleid='1' 
							AND bid='1') as o
							ON m.modid=o.modid where m.status=1
[2017-05-02 16:13:59]	SQL :	SELECT a.*,f.fieldname FROM 1_role_access a
								LEFT JOIN systemfields f on a.fieldid=f.fieldid
								WHERE a.roleid='1'
								AND a.bid='1'
								AND a.fieldtype='s'
[2017-05-02 16:13:59]	SQL :	SELECT * FROM 1_role_access
								WHERE roleid='1'
								AND bid='1'
							AND fieldtype='c'
[2017-05-02 16:13:59]	SQL :	SELECT pri.landingnumber,pri.used,pri.climit,
								if(pri.status=0,'Not in use',
								if(pri.type='0','Calltrack',
								if(pri.type='1','IVRS',
								if(pri.type='2','PBX','Not Assign')))) as type,
								pri.associateid,
								if(pri.status=0,'None',
								if(pri.type='0',g.groupname,
								if(pri.type='1',i.title,
								if(pri.type='2',pbx.title,'None')))) as title,
								if(pri.status=0,'None',
								if(pri.type='0',ch.lastcall,
								if(pri.type='1',ih.lastcall,
								if(pri.type='2',ph.lastcall,'None')))) as lastcall
								FROM prinumbers pri
								LEFT JOIN 1_groups g on (g.prinumber=pri.number AND g.gid=pri.associateid AND g.status=1)
								LEFT JOIN 1_ivrs i on (i.prinumber=pri.number AND i.ivrsid=pri.associateid AND i.status=1)
								LEFT JOIN 1_pbx pbx on (pbx.prinumber=pri.number AND pbx.pbxid=pri.associateid AND pbx.status=1)
								LEFT JOIN (SELECT g.gid,max(h.starttime) as lastcall FROM 1_groups g LEFT JOIN 1_callhistory h on g.gid=h.gid GROUP BY g.gid) ch on g.gid=ch.gid
								LEFT JOIN (SELECT i.ivrsid,max(h.datetime) as lastcall FROM 1_ivrs i LEFT JOIN 1_ivrshistory h on i.ivrsid=h.ivrsid GROUP BY i.ivrsid) ih on i.ivrsid=ih.ivrsid
								LEFT JOIN (SELECT p.pbxid,max(h.starttime) as lastcall FROM 1_pbx p LEFT JOIN 1_pbxreport h on p.pbxid=h.pbxid GROUP BY p.pbxid) ph on pbx.pbxid=ph.pbxid
								WHERE pri.bid=1
[2017-05-02 16:13:59]	SQL :	SELECT balance FROM sms_bal  where bid='1'
[2017-05-02 16:13:59]	SQL :	SELECT balance FROM call_bal where bid='1'
[2017-05-02 16:13:59]	SQL :	SELECT DISTINCT(e.eid),e.empname,eb.start_time FROM 1_employee e
		                       LEFT JOIN 1_emp_break eb ON e.eid = eb.eid
		                       LEFT JOIN 1_groups d ON e.eid = d.eid
		                       WHERE eb.end_time='0000-00-00' AND e.selfdisable=1  GROUP BY d.gid,e.eid
[2017-05-02 16:13:59]	SQL :	SELECT COALESCE(COUNT(callid), 0) AS day 
							FROM 1_callhistory h 
							LEFT JOIN 1_groups d ON d.gid = h.gid 
							WHERE 1 AND (DATE(h.`starttime`) = DATE(NOW()))
[2017-05-02 16:13:59]	SQL :	SELECT COALESCE(COUNT(callid), 0) AS day 
							FROM 1_callhistory h 
							LEFT JOIN 1_groups d ON d.gid = h.gid 
							WHERE 1  AND (DATE(h.`starttime`)  > DATE(DATE_SUB(NOW(), INTERVAL 1 WEEK)))
[2017-05-02 16:13:59]	SQL :	SELECT COALESCE(COUNT(callid), 0) AS day 
							FROM 1_callhistory h 
							LEFT JOIN 1_groups d ON d.gid = h.gid 
							WHERE 1  AND (MONTH(h.`starttime` ) = MONTH(NOW()))
[2017-05-02 16:13:59]	SQL :	SELECT COALESCE(COUNT(pbxid), 0) AS day 
							FROM 1_pbxreport h 
							WHERE 1 AND (DATE(h.`starttime`) = DATE(NOW()))
[2017-05-02 16:13:59]	SQL :	SELECT COALESCE(COUNT(pbxid), 0) AS day 
							FROM 1_pbxreport h 
							WHERE 1  AND (DATE(h.`starttime`)  > DATE(DATE_SUB(NOW(), INTERVAL 1 WEEK)))
[2017-05-02 16:13:59]	SQL :	SELECT COALESCE(COUNT(pbxid), 0) AS day 
							FROM 1_pbxreport h 
							WHERE 1  AND (MONTH(h.`starttime` ) = MONTH(NOW()))
[2017-05-02 16:13:59]	SQL :	SELECT COALESCE(COUNT(hid), 0) AS day 
							   FROM 1_ivrshistory h 
						       WHERE 1 AND (DATE(h.`datetime`) = DATE(NOW()))
[2017-05-02 16:13:59]	SQL :	SELECT COALESCE(COUNT(hid), 0) AS day 
							   FROM 1_ivrshistory h 
						       WHERE 1  AND (DATE(h.`datetime`)  > DATE(DATE_SUB(NOW(), INTERVAL 1 WEEK)))
[2017-05-02 16:13:59]	SQL :	SELECT COALESCE(COUNT(hid), 0) AS day 
							   FROM 1_ivrshistory h 
						       WHERE 1  AND (MONTH(h.`datetime` ) = MONTH(NOW()))
[2017-05-02 16:13:59]	SQL :	SELECT COALESCE(COUNT(leadid), 0) AS day 
							FROM 1_leads a 
							LEFT JOIN 1_leads_groups d ON d.gid = a.gid 
							WHERE (DATE(a.`createdon`) = DATE(NOW()))
[2017-05-02 16:13:59]	SQL :	SELECT COALESCE(COUNT(leadid), 0) AS day 
							FROM 1_leads a 
							LEFT JOIN 1_leads_groups d ON d.gid = a.gid 
							WHERE (DATE(a.`createdon`) = DATE(NOW()))
[2017-05-02 16:13:59]	SQL :	SELECT COALESCE(COUNT(leadid), 0) AS day 
							FROM 1_leads a 
							LEFT JOIN 1_leads_groups d ON d.gid = a.gid 
							WHERE (DATE(a.`createdon`) = DATE(NOW()))
[2017-05-02 16:13:59]	SQL :	SELECT COALESCE(COUNT(tktid), 0) AS day 
							FROM 1_support_tickets a 
							LEFT JOIN 1_support_groups d ON d.gid = a.gid 
							WHERE (DATE(a.`createdon`) = DATE(NOW()))
[2017-05-02 16:13:59]	SQL :	SELECT COALESCE(COUNT(tktid), 0) AS day 
							FROM 1_support_tickets a 
							LEFT JOIN 1_support_groups d ON d.gid = a.gid 
							WHERE (DATE(a.`createdon`) = DATE(NOW()))
[2017-05-02 16:13:59]	SQL :	SELECT COALESCE(COUNT(tktid), 0) AS day 
							FROM 1_support_tickets a 
							LEFT JOIN 1_support_groups d ON d.gid = a.gid 
							WHERE (DATE(a.`createdon`) = DATE(NOW()))
[2017-05-02 16:13:59]	SQL :	SELECT COALESCE(COUNT(callid), 0) AS day 
							FROM 1_outboundcalls h 
							WHERE (DATE(h.`starttime`) = DATE(NOW()))
[2017-05-02 16:13:59]	SQL :	SELECT COALESCE(COUNT(callid), 0) AS day 
							FROM 1_outboundcalls h 
							WHERE (DATE(h.`starttime`) = DATE(NOW()))
[2017-05-02 16:13:59]	SQL :	SELECT COALESCE(COUNT(callid), 0) AS day 
							FROM 1_outboundcalls h 
							WHERE (DATE(h.`starttime`) = DATE(NOW()))
[2017-05-02 16:13:59]	SQL :	SELECT COALESCE(COUNT(callid), 0) AS day 
							FROM 1_mtracker h 
							WHERE (DATE(h.`starttime`) = DATE(NOW()))
[2017-05-02 16:13:59]	SQL :	SELECT COALESCE(COUNT(callid), 0) AS day 
							FROM 1_mtracker h 
							WHERE (DATE(h.`starttime`) = DATE(NOW()))
[2017-05-02 16:13:59]	SQL :	SELECT COALESCE(COUNT(callid), 0) AS day 
							FROM 1_mtracker h 
							WHERE (DATE(h.`starttime`) = DATE(NOW()))
[2017-05-02 16:14:33]	DEBUG :	Config Class Initialized
[2017-05-02 16:14:33]	DEBUG :	Hooks Class Initialized
[2017-05-02 16:14:33]	DEBUG :	URI Class Initialized
[2017-05-02 16:14:33]	DEBUG :	Router Class Initialized
[2017-05-02 16:14:33]	DEBUG :	Output Class Initialized
[2017-05-02 16:14:33]	DEBUG :	Input Class Initialized
[2017-05-02 16:14:33]	DEBUG :	Global POST and COOKIE data sanitized
[2017-05-02 16:14:33]	DEBUG :	Language Class Initialized
[2017-05-02 16:14:33]	DEBUG :	Loader Class Initialized
[2017-05-02 16:14:33]	DEBUG :	Helper loaded: url_helper
[2017-05-02 16:14:33]	DEBUG :	Helper loaded: form_helper
[2017-05-02 16:14:33]	DEBUG :	Helper loaded: html_helper
[2017-05-02 16:14:33]	DEBUG :	Helper loaded: email_helper
[2017-05-02 16:14:33]	DEBUG :	Helper loaded: ckeditor_helper
[2017-05-02 16:14:33]	DEBUG :	Helper loaded: mcube_helper
[2017-05-02 16:14:33]	DEBUG :	Database Driver Class Initialized
[2017-05-02 16:14:33]	ERROR :	Severity: 8192  --> mysql_pconnect(): The mysql extension is deprecated and will be removed in the future: use mysqli or PDO instead /var/www/html/mcnew/system/database/drivers/mysql/mysql_driver.php 88
[2017-05-02 16:14:33]	DEBUG :	Session Class Initialized
[2017-05-02 16:14:33]	DEBUG :	Helper loaded: string_helper
[2017-05-02 16:14:33]	DEBUG :	Encrypt Class Initialized
[2017-05-02 16:14:33]	DEBUG :	A session cookie was not found.
[2017-05-02 16:14:33]	SQL :	INSERT INTO `call_sessions` (`session_id`, `ip_address`, `user_agent`, `last_activity`) VALUES ('fc3e4039bbfe0ed171ad55b534767925', '192.168.1.114', 'Dalvik/2.1.0 (Linux; U; Android 6.0; Panasonic T44', 1493721873)
[2017-05-02 16:14:34]	DEBUG :	Session routines successfully run
[2017-05-02 16:14:34]	DEBUG :	Table Class Initialized
[2017-05-02 16:14:34]	DEBUG :	Pagination Class Initialized
[2017-05-02 16:14:34]	DEBUG :	Config file loaded: config/paypallib_config.php
[2017-05-02 16:14:34]	DEBUG :	Form Validation Class Initialized
[2017-05-02 16:14:34]	DEBUG :	Email Class Initialized
[2017-05-02 16:14:34]	DEBUG :	Language file loaded: language/english/calendar_lang.php
[2017-05-02 16:14:34]	DEBUG :	Calendar Class Initialized
[2017-05-02 16:14:34]	DEBUG :	Controller Class Initialized
[2017-05-02 16:14:34]	DEBUG :	Model Class Initialized
[2017-05-02 16:14:34]	DEBUG :	Model Class Initialized
[2017-05-02 16:14:34]	DEBUG :	Model Class Initialized
[2017-05-02 16:14:34]	DEBUG :	Model Class Initialized
[2017-05-02 16:14:34]	DEBUG :	Model Class Initialized
[2017-05-02 16:14:34]	DEBUG :	Model Class Initialized
[2017-05-02 16:14:34]	DEBUG :	Model Class Initialized
[2017-05-02 16:14:34]	DEBUG :	Model Class Initialized
[2017-05-02 16:14:34]	DEBUG :	Model Class Initialized
[2017-05-02 16:14:34]	DEBUG :	Model Class Initialized
[2017-05-02 16:14:34]	DEBUG :	Model Class Initialized
[2017-05-02 16:14:34]	DEBUG :	Model Class Initialized
[2017-05-02 16:14:34]	DEBUG :	Model Class Initialized
[2017-05-02 16:14:34]	DEBUG :	Model Class Initialized
[2017-05-02 16:14:34]	DEBUG :	Plugin loaded: to_pdf_pi
[2017-05-02 16:14:34]	DEBUG :	Model Class Initialized
[2017-05-02 16:14:34]	DEBUG :	Language file loaded: language/english/form_validation_lang.php
[2017-05-02 16:14:34]	SQL :	SELECT uid,bid,eid FROM `user` WHERE authkey='1.1.d886b8e8a0615'
[2017-05-02 16:14:34]	DEBUG :	Database Driver Class Initialized
[2017-05-02 16:14:34]	SQL :	SELECT roleid FROM 1_employee
							WHERE eid='1'
							AND bid='1'
[2017-05-02 16:14:34]	DEBUG :	Database Driver Class Initialized
[2017-05-02 16:14:34]	SQL :	SELECT * FROM 1_user_role
							WHERE roleid='1'
							AND bid='1'
[2017-05-02 16:14:34]	SQL :	SELECT m.modid,m.modname,m.moddesc,
							COALESCE(o.opt_add,0) as opt_add,
							COALESCE(o.opt_view,0) as opt_view,
							COALESCE(o.opt_download,0) as opt_download,
							COALESCE(opt_delete,0) as opt_delete 
							FROM module m
							LEFT JOIN (SELECT * FROM 1_role_mod_opt
							WHERE roleid='1' 
							AND bid='1') as o
							ON m.modid=o.modid where m.status=1
[2017-05-02 16:14:34]	SQL :	SELECT a.*,f.fieldname FROM 1_role_access a
								LEFT JOIN systemfields f on a.fieldid=f.fieldid
								WHERE a.roleid='1'
								AND a.bid='1'
								AND a.fieldtype='s'
[2017-05-02 16:14:34]	SQL :	SELECT * FROM 1_role_access
								WHERE roleid='1'
								AND bid='1'
							AND fieldtype='c'
[2017-05-02 16:14:34]	SQL :	SELECT pri.landingnumber,pri.used,pri.climit,
								if(pri.status=0,'Not in use',
								if(pri.type='0','Calltrack',
								if(pri.type='1','IVRS',
								if(pri.type='2','PBX','Not Assign')))) as type,
								pri.associateid,
								if(pri.status=0,'None',
								if(pri.type='0',g.groupname,
								if(pri.type='1',i.title,
								if(pri.type='2',pbx.title,'None')))) as title,
								if(pri.status=0,'None',
								if(pri.type='0',ch.lastcall,
								if(pri.type='1',ih.lastcall,
								if(pri.type='2',ph.lastcall,'None')))) as lastcall
								FROM prinumbers pri
								LEFT JOIN 1_groups g on (g.prinumber=pri.number AND g.gid=pri.associateid AND g.status=1)
								LEFT JOIN 1_ivrs i on (i.prinumber=pri.number AND i.ivrsid=pri.associateid AND i.status=1)
								LEFT JOIN 1_pbx pbx on (pbx.prinumber=pri.number AND pbx.pbxid=pri.associateid AND pbx.status=1)
								LEFT JOIN (SELECT g.gid,max(h.starttime) as lastcall FROM 1_groups g LEFT JOIN 1_callhistory h on g.gid=h.gid GROUP BY g.gid) ch on g.gid=ch.gid
								LEFT JOIN (SELECT i.ivrsid,max(h.datetime) as lastcall FROM 1_ivrs i LEFT JOIN 1_ivrshistory h on i.ivrsid=h.ivrsid GROUP BY i.ivrsid) ih on i.ivrsid=ih.ivrsid
								LEFT JOIN (SELECT p.pbxid,max(h.starttime) as lastcall FROM 1_pbx p LEFT JOIN 1_pbxreport h on p.pbxid=h.pbxid GROUP BY p.pbxid) ph on pbx.pbxid=ph.pbxid
								WHERE pri.bid=1
[2017-05-02 16:14:34]	SQL :	SELECT balance FROM sms_bal  where bid='1'
[2017-05-02 16:14:34]	SQL :	SELECT balance FROM call_bal where bid='1'
[2017-05-02 16:14:34]	SQL :	SELECT DISTINCT(e.eid),e.empname,eb.start_time FROM 1_employee e
		                       LEFT JOIN 1_emp_break eb ON e.eid = eb.eid
		                       LEFT JOIN 1_groups d ON e.eid = d.eid
		                       WHERE eb.end_time='0000-00-00' AND e.selfdisable=1  GROUP BY d.gid,e.eid
[2017-05-02 16:14:34]	SQL :	SELECT COALESCE(COUNT(callid), 0) AS day 
							FROM 1_callhistory h 
							LEFT JOIN 1_groups d ON d.gid = h.gid 
							WHERE 1 AND (DATE(h.`starttime`) = DATE(NOW()))
[2017-05-02 16:14:34]	SQL :	SELECT COALESCE(COUNT(callid), 0) AS day 
							FROM 1_callhistory h 
							LEFT JOIN 1_groups d ON d.gid = h.gid 
							WHERE 1  AND (DATE(h.`starttime`)  > DATE(DATE_SUB(NOW(), INTERVAL 1 WEEK)))
[2017-05-02 16:14:34]	SQL :	SELECT COALESCE(COUNT(callid), 0) AS day 
							FROM 1_callhistory h 
							LEFT JOIN 1_groups d ON d.gid = h.gid 
							WHERE 1  AND (MONTH(h.`starttime` ) = MONTH(NOW()))
[2017-05-02 16:14:34]	SQL :	SELECT COALESCE(COUNT(pbxid), 0) AS day 
							FROM 1_pbxreport h 
							WHERE 1 AND (DATE(h.`starttime`) = DATE(NOW()))
[2017-05-02 16:14:34]	SQL :	SELECT COALESCE(COUNT(pbxid), 0) AS day 
							FROM 1_pbxreport h 
							WHERE 1  AND (DATE(h.`starttime`)  > DATE(DATE_SUB(NOW(), INTERVAL 1 WEEK)))
[2017-05-02 16:14:34]	SQL :	SELECT COALESCE(COUNT(pbxid), 0) AS day 
							FROM 1_pbxreport h 
							WHERE 1  AND (MONTH(h.`starttime` ) = MONTH(NOW()))
[2017-05-02 16:14:34]	SQL :	SELECT COALESCE(COUNT(hid), 0) AS day 
							   FROM 1_ivrshistory h 
						       WHERE 1 AND (DATE(h.`datetime`) = DATE(NOW()))
[2017-05-02 16:14:34]	SQL :	SELECT COALESCE(COUNT(hid), 0) AS day 
							   FROM 1_ivrshistory h 
						       WHERE 1  AND (DATE(h.`datetime`)  > DATE(DATE_SUB(NOW(), INTERVAL 1 WEEK)))
[2017-05-02 16:14:34]	SQL :	SELECT COALESCE(COUNT(hid), 0) AS day 
							   FROM 1_ivrshistory h 
						       WHERE 1  AND (MONTH(h.`datetime` ) = MONTH(NOW()))
[2017-05-02 16:14:34]	SQL :	SELECT COALESCE(COUNT(leadid), 0) AS day 
							FROM 1_leads a 
							LEFT JOIN 1_leads_groups d ON d.gid = a.gid 
							WHERE (DATE(a.`createdon`) = DATE(NOW()))
[2017-05-02 16:14:34]	SQL :	SELECT COALESCE(COUNT(leadid), 0) AS day 
							FROM 1_leads a 
							LEFT JOIN 1_leads_groups d ON d.gid = a.gid 
							WHERE (DATE(a.`createdon`) = DATE(NOW()))
[2017-05-02 16:14:34]	SQL :	SELECT COALESCE(COUNT(leadid), 0) AS day 
							FROM 1_leads a 
							LEFT JOIN 1_leads_groups d ON d.gid = a.gid 
							WHERE (DATE(a.`createdon`) = DATE(NOW()))
[2017-05-02 16:14:34]	SQL :	SELECT COALESCE(COUNT(tktid), 0) AS day 
							FROM 1_support_tickets a 
							LEFT JOIN 1_support_groups d ON d.gid = a.gid 
							WHERE (DATE(a.`createdon`) = DATE(NOW()))
[2017-05-02 16:14:34]	SQL :	SELECT COALESCE(COUNT(tktid), 0) AS day 
							FROM 1_support_tickets a 
							LEFT JOIN 1_support_groups d ON d.gid = a.gid 
							WHERE (DATE(a.`createdon`) = DATE(NOW()))
[2017-05-02 16:14:34]	SQL :	SELECT COALESCE(COUNT(tktid), 0) AS day 
							FROM 1_support_tickets a 
							LEFT JOIN 1_support_groups d ON d.gid = a.gid 
							WHERE (DATE(a.`createdon`) = DATE(NOW()))
[2017-05-02 16:14:34]	SQL :	SELECT COALESCE(COUNT(callid), 0) AS day 
							FROM 1_outboundcalls h 
							WHERE (DATE(h.`starttime`) = DATE(NOW()))
[2017-05-02 16:14:34]	SQL :	SELECT COALESCE(COUNT(callid), 0) AS day 
							FROM 1_outboundcalls h 
							WHERE (DATE(h.`starttime`) = DATE(NOW()))
[2017-05-02 16:14:34]	SQL :	SELECT COALESCE(COUNT(callid), 0) AS day 
							FROM 1_outboundcalls h 
							WHERE (DATE(h.`starttime`) = DATE(NOW()))
[2017-05-02 16:14:34]	SQL :	SELECT COALESCE(COUNT(callid), 0) AS day 
							FROM 1_mtracker h 
							WHERE (DATE(h.`starttime`) = DATE(NOW()))
[2017-05-02 16:14:34]	SQL :	SELECT COALESCE(COUNT(callid), 0) AS day 
							FROM 1_mtracker h 
							WHERE (DATE(h.`starttime`) = DATE(NOW()))
[2017-05-02 16:14:34]	SQL :	SELECT COALESCE(COUNT(callid), 0) AS day 
							FROM 1_mtracker h 
							WHERE (DATE(h.`starttime`) = DATE(NOW()))
[2017-05-02 16:14:36]	DEBUG :	Config Class Initialized
[2017-05-02 16:14:36]	DEBUG :	Hooks Class Initialized
[2017-05-02 16:14:36]	DEBUG :	URI Class Initialized
[2017-05-02 16:14:36]	DEBUG :	Router Class Initialized
[2017-05-02 16:14:36]	DEBUG :	Output Class Initialized
[2017-05-02 16:14:36]	DEBUG :	Input Class Initialized
[2017-05-02 16:14:36]	DEBUG :	Global POST and COOKIE data sanitized
[2017-05-02 16:14:36]	DEBUG :	Language Class Initialized
[2017-05-02 16:14:36]	DEBUG :	Loader Class Initialized
[2017-05-02 16:14:36]	DEBUG :	Helper loaded: url_helper
[2017-05-02 16:14:36]	DEBUG :	Helper loaded: form_helper
[2017-05-02 16:14:36]	DEBUG :	Helper loaded: html_helper
[2017-05-02 16:14:36]	DEBUG :	Helper loaded: email_helper
[2017-05-02 16:14:36]	DEBUG :	Helper loaded: ckeditor_helper
[2017-05-02 16:14:36]	DEBUG :	Helper loaded: mcube_helper
[2017-05-02 16:14:36]	DEBUG :	Database Driver Class Initialized
[2017-05-02 16:14:36]	ERROR :	Severity: 8192  --> mysql_pconnect(): The mysql extension is deprecated and will be removed in the future: use mysqli or PDO instead /var/www/html/mcnew/system/database/drivers/mysql/mysql_driver.php 88
[2017-05-02 16:14:36]	DEBUG :	Session Class Initialized
[2017-05-02 16:14:36]	DEBUG :	Helper loaded: string_helper
[2017-05-02 16:14:36]	DEBUG :	Encrypt Class Initialized
[2017-05-02 16:14:36]	DEBUG :	A session cookie was not found.
[2017-05-02 16:14:36]	SQL :	INSERT INTO `call_sessions` (`session_id`, `ip_address`, `user_agent`, `last_activity`) VALUES ('6a7490cbdfda31ba24b4aa68b8048835', '192.168.1.114', 'Dalvik/2.1.0 (Linux; U; Android 6.0; Panasonic T44', 1493721876)
[2017-05-02 16:14:36]	DEBUG :	Session routines successfully run
[2017-05-02 16:14:36]	DEBUG :	Table Class Initialized
[2017-05-02 16:14:36]	DEBUG :	Pagination Class Initialized
[2017-05-02 16:14:36]	DEBUG :	Config file loaded: config/paypallib_config.php
[2017-05-02 16:14:36]	DEBUG :	Form Validation Class Initialized
[2017-05-02 16:14:36]	DEBUG :	Email Class Initialized
[2017-05-02 16:14:36]	DEBUG :	Language file loaded: language/english/calendar_lang.php
[2017-05-02 16:14:36]	DEBUG :	Calendar Class Initialized
[2017-05-02 16:14:36]	DEBUG :	Controller Class Initialized
[2017-05-02 16:14:36]	DEBUG :	Model Class Initialized
[2017-05-02 16:14:36]	DEBUG :	Model Class Initialized
[2017-05-02 16:14:36]	DEBUG :	Model Class Initialized
[2017-05-02 16:14:36]	DEBUG :	Model Class Initialized
[2017-05-02 16:14:36]	DEBUG :	Model Class Initialized
[2017-05-02 16:14:36]	DEBUG :	Model Class Initialized
[2017-05-02 16:14:36]	DEBUG :	Model Class Initialized
[2017-05-02 16:14:36]	DEBUG :	Model Class Initialized
[2017-05-02 16:14:36]	DEBUG :	Model Class Initialized
[2017-05-02 16:14:36]	DEBUG :	Model Class Initialized
[2017-05-02 16:14:36]	DEBUG :	Model Class Initialized
[2017-05-02 16:14:36]	DEBUG :	Model Class Initialized
[2017-05-02 16:14:36]	DEBUG :	Model Class Initialized
[2017-05-02 16:14:36]	DEBUG :	Model Class Initialized
[2017-05-02 16:14:36]	DEBUG :	Plugin loaded: to_pdf_pi
[2017-05-02 16:14:36]	DEBUG :	Model Class Initialized
[2017-05-02 16:14:36]	DEBUG :	Language file loaded: language/english/form_validation_lang.php
[2017-05-02 16:14:36]	SQL :	SELECT uid,bid,eid FROM `user` WHERE authkey='1.1.d886b8e8a0615'
[2017-05-02 16:14:36]	DEBUG :	Database Driver Class Initialized
[2017-05-02 16:14:36]	SQL :	SELECT roleid FROM 1_employee
							WHERE eid='1'
							AND bid='1'
[2017-05-02 16:14:36]	DEBUG :	Database Driver Class Initialized
[2017-05-02 16:14:36]	SQL :	SELECT * FROM 1_user_role
							WHERE roleid='1'
							AND bid='1'
[2017-05-02 16:14:36]	SQL :	SELECT m.modid,m.modname,m.moddesc,
							COALESCE(o.opt_add,0) as opt_add,
							COALESCE(o.opt_view,0) as opt_view,
							COALESCE(o.opt_download,0) as opt_download,
							COALESCE(opt_delete,0) as opt_delete 
							FROM module m
							LEFT JOIN (SELECT * FROM 1_role_mod_opt
							WHERE roleid='1' 
							AND bid='1') as o
							ON m.modid=o.modid where m.status=1
[2017-05-02 16:14:36]	SQL :	SELECT a.*,f.fieldname FROM 1_role_access a
								LEFT JOIN systemfields f on a.fieldid=f.fieldid
								WHERE a.roleid='1'
								AND a.bid='1'
								AND a.fieldtype='s'
[2017-05-02 16:14:36]	SQL :	SELECT * FROM 1_role_access
								WHERE roleid='1'
								AND bid='1'
							AND fieldtype='c'
[2017-05-02 16:14:36]	SQL :	SELECT pri.landingnumber,pri.used,pri.climit,
								if(pri.status=0,'Not in use',
								if(pri.type='0','Calltrack',
								if(pri.type='1','IVRS',
								if(pri.type='2','PBX','Not Assign')))) as type,
								pri.associateid,
								if(pri.status=0,'None',
								if(pri.type='0',g.groupname,
								if(pri.type='1',i.title,
								if(pri.type='2',pbx.title,'None')))) as title,
								if(pri.status=0,'None',
								if(pri.type='0',ch.lastcall,
								if(pri.type='1',ih.lastcall,
								if(pri.type='2',ph.lastcall,'None')))) as lastcall
								FROM prinumbers pri
								LEFT JOIN 1_groups g on (g.prinumber=pri.number AND g.gid=pri.associateid AND g.status=1)
								LEFT JOIN 1_ivrs i on (i.prinumber=pri.number AND i.ivrsid=pri.associateid AND i.status=1)
								LEFT JOIN 1_pbx pbx on (pbx.prinumber=pri.number AND pbx.pbxid=pri.associateid AND pbx.status=1)
								LEFT JOIN (SELECT g.gid,max(h.starttime) as lastcall FROM 1_groups g LEFT JOIN 1_callhistory h on g.gid=h.gid GROUP BY g.gid) ch on g.gid=ch.gid
								LEFT JOIN (SELECT i.ivrsid,max(h.datetime) as lastcall FROM 1_ivrs i LEFT JOIN 1_ivrshistory h on i.ivrsid=h.ivrsid GROUP BY i.ivrsid) ih on i.ivrsid=ih.ivrsid
								LEFT JOIN (SELECT p.pbxid,max(h.starttime) as lastcall FROM 1_pbx p LEFT JOIN 1_pbxreport h on p.pbxid=h.pbxid GROUP BY p.pbxid) ph on pbx.pbxid=ph.pbxid
								WHERE pri.bid=1
[2017-05-02 16:14:36]	SQL :	SELECT balance FROM sms_bal  where bid='1'
[2017-05-02 16:14:36]	SQL :	SELECT balance FROM call_bal where bid='1'
[2017-05-02 16:14:36]	SQL :	SELECT DISTINCT(e.eid),e.empname,eb.start_time FROM 1_employee e
		                       LEFT JOIN 1_emp_break eb ON e.eid = eb.eid
		                       LEFT JOIN 1_groups d ON e.eid = d.eid
		                       WHERE eb.end_time='0000-00-00' AND e.selfdisable=1  GROUP BY d.gid,e.eid
[2017-05-02 16:14:36]	SQL :	SELECT COALESCE(COUNT(callid), 0) AS day 
							FROM 1_callhistory h 
							LEFT JOIN 1_groups d ON d.gid = h.gid 
							WHERE 1 AND (DATE(h.`starttime`) = DATE(NOW()))
[2017-05-02 16:14:36]	SQL :	SELECT COALESCE(COUNT(callid), 0) AS day 
							FROM 1_callhistory h 
							LEFT JOIN 1_groups d ON d.gid = h.gid 
							WHERE 1  AND (DATE(h.`starttime`)  > DATE(DATE_SUB(NOW(), INTERVAL 1 WEEK)))
[2017-05-02 16:14:36]	SQL :	SELECT COALESCE(COUNT(callid), 0) AS day 
							FROM 1_callhistory h 
							LEFT JOIN 1_groups d ON d.gid = h.gid 
							WHERE 1  AND (MONTH(h.`starttime` ) = MONTH(NOW()))
[2017-05-02 16:14:36]	SQL :	SELECT COALESCE(COUNT(pbxid), 0) AS day 
							FROM 1_pbxreport h 
							WHERE 1 AND (DATE(h.`starttime`) = DATE(NOW()))
[2017-05-02 16:14:36]	SQL :	SELECT COALESCE(COUNT(pbxid), 0) AS day 
							FROM 1_pbxreport h 
							WHERE 1  AND (DATE(h.`starttime`)  > DATE(DATE_SUB(NOW(), INTERVAL 1 WEEK)))
[2017-05-02 16:14:36]	SQL :	SELECT COALESCE(COUNT(pbxid), 0) AS day 
							FROM 1_pbxreport h 
							WHERE 1  AND (MONTH(h.`starttime` ) = MONTH(NOW()))
[2017-05-02 16:14:36]	SQL :	SELECT COALESCE(COUNT(hid), 0) AS day 
							   FROM 1_ivrshistory h 
						       WHERE 1 AND (DATE(h.`datetime`) = DATE(NOW()))
[2017-05-02 16:14:36]	SQL :	SELECT COALESCE(COUNT(hid), 0) AS day 
							   FROM 1_ivrshistory h 
						       WHERE 1  AND (DATE(h.`datetime`)  > DATE(DATE_SUB(NOW(), INTERVAL 1 WEEK)))
[2017-05-02 16:14:36]	SQL :	SELECT COALESCE(COUNT(hid), 0) AS day 
							   FROM 1_ivrshistory h 
						       WHERE 1  AND (MONTH(h.`datetime` ) = MONTH(NOW()))
[2017-05-02 16:14:36]	SQL :	SELECT COALESCE(COUNT(leadid), 0) AS day 
							FROM 1_leads a 
							LEFT JOIN 1_leads_groups d ON d.gid = a.gid 
							WHERE (DATE(a.`createdon`) = DATE(NOW()))
[2017-05-02 16:14:36]	SQL :	SELECT COALESCE(COUNT(leadid), 0) AS day 
							FROM 1_leads a 
							LEFT JOIN 1_leads_groups d ON d.gid = a.gid 
							WHERE (DATE(a.`createdon`) = DATE(NOW()))
[2017-05-02 16:14:36]	SQL :	SELECT COALESCE(COUNT(leadid), 0) AS day 
							FROM 1_leads a 
							LEFT JOIN 1_leads_groups d ON d.gid = a.gid 
							WHERE (DATE(a.`createdon`) = DATE(NOW()))
[2017-05-02 16:14:36]	SQL :	SELECT COALESCE(COUNT(tktid), 0) AS day 
							FROM 1_support_tickets a 
							LEFT JOIN 1_support_groups d ON d.gid = a.gid 
							WHERE (DATE(a.`createdon`) = DATE(NOW()))
[2017-05-02 16:14:36]	SQL :	SELECT COALESCE(COUNT(tktid), 0) AS day 
							FROM 1_support_tickets a 
							LEFT JOIN 1_support_groups d ON d.gid = a.gid 
							WHERE (DATE(a.`createdon`) = DATE(NOW()))
[2017-05-02 16:14:36]	SQL :	SELECT COALESCE(COUNT(tktid), 0) AS day 
							FROM 1_support_tickets a 
							LEFT JOIN 1_support_groups d ON d.gid = a.gid 
							WHERE (DATE(a.`createdon`) = DATE(NOW()))
[2017-05-02 16:14:36]	SQL :	SELECT COALESCE(COUNT(callid), 0) AS day 
							FROM 1_outboundcalls h 
							WHERE (DATE(h.`starttime`) = DATE(NOW()))
[2017-05-02 16:14:36]	SQL :	SELECT COALESCE(COUNT(callid), 0) AS day 
							FROM 1_outboundcalls h 
							WHERE (DATE(h.`starttime`) = DATE(NOW()))
[2017-05-02 16:14:36]	SQL :	SELECT COALESCE(COUNT(callid), 0) AS day 
							FROM 1_outboundcalls h 
							WHERE (DATE(h.`starttime`) = DATE(NOW()))
[2017-05-02 16:14:36]	SQL :	SELECT COALESCE(COUNT(callid), 0) AS day 
							FROM 1_mtracker h 
							WHERE (DATE(h.`starttime`) = DATE(NOW()))
[2017-05-02 16:14:36]	SQL :	SELECT COALESCE(COUNT(callid), 0) AS day 
							FROM 1_mtracker h 
							WHERE (DATE(h.`starttime`) = DATE(NOW()))
[2017-05-02 16:14:36]	SQL :	SELECT COALESCE(COUNT(callid), 0) AS day 
							FROM 1_mtracker h 
							WHERE (DATE(h.`starttime`) = DATE(NOW()))
[2017-05-02 16:14:53]	DEBUG :	Config Class Initialized
[2017-05-02 16:14:53]	DEBUG :	Hooks Class Initialized
[2017-05-02 16:14:53]	DEBUG :	URI Class Initialized
[2017-05-02 16:14:53]	DEBUG :	Router Class Initialized
[2017-05-02 16:14:53]	DEBUG :	Output Class Initialized
[2017-05-02 16:14:53]	DEBUG :	Input Class Initialized
[2017-05-02 16:14:53]	DEBUG :	Global POST and COOKIE data sanitized
[2017-05-02 16:14:53]	DEBUG :	Language Class Initialized
[2017-05-02 16:14:53]	DEBUG :	Loader Class Initialized
[2017-05-02 16:14:53]	DEBUG :	Helper loaded: url_helper
[2017-05-02 16:14:53]	DEBUG :	Helper loaded: form_helper
[2017-05-02 16:14:53]	DEBUG :	Helper loaded: html_helper
[2017-05-02 16:14:53]	DEBUG :	Helper loaded: email_helper
[2017-05-02 16:14:53]	DEBUG :	Helper loaded: ckeditor_helper
[2017-05-02 16:14:53]	DEBUG :	Helper loaded: mcube_helper
[2017-05-02 16:14:53]	DEBUG :	Database Driver Class Initialized
[2017-05-02 16:14:53]	ERROR :	Severity: 8192  --> mysql_pconnect(): The mysql extension is deprecated and will be removed in the future: use mysqli or PDO instead /var/www/html/mcnew/system/database/drivers/mysql/mysql_driver.php 88
[2017-05-02 16:14:53]	DEBUG :	Session Class Initialized
[2017-05-02 16:14:53]	DEBUG :	Helper loaded: string_helper
[2017-05-02 16:14:53]	DEBUG :	Encrypt Class Initialized
[2017-05-02 16:14:53]	DEBUG :	A session cookie was not found.
[2017-05-02 16:14:53]	SQL :	INSERT INTO `call_sessions` (`session_id`, `ip_address`, `user_agent`, `last_activity`) VALUES ('a5c6544a765a18608f5d9878b4d5afd8', '192.168.1.114', 'Dalvik/2.1.0 (Linux; U; Android 6.0; Panasonic T44', 1493721893)
[2017-05-02 16:14:53]	DEBUG :	Session routines successfully run
[2017-05-02 16:14:53]	DEBUG :	Table Class Initialized
[2017-05-02 16:14:53]	DEBUG :	Pagination Class Initialized
[2017-05-02 16:14:53]	DEBUG :	Config file loaded: config/paypallib_config.php
[2017-05-02 16:14:53]	DEBUG :	Form Validation Class Initialized
[2017-05-02 16:14:53]	DEBUG :	Email Class Initialized
[2017-05-02 16:14:53]	DEBUG :	Language file loaded: language/english/calendar_lang.php
[2017-05-02 16:14:53]	DEBUG :	Calendar Class Initialized
[2017-05-02 16:14:53]	DEBUG :	Controller Class Initialized
[2017-05-02 16:14:53]	DEBUG :	Model Class Initialized
[2017-05-02 16:14:53]	DEBUG :	Model Class Initialized
[2017-05-02 16:14:53]	DEBUG :	Model Class Initialized
[2017-05-02 16:14:53]	DEBUG :	Model Class Initialized
[2017-05-02 16:14:53]	DEBUG :	Model Class Initialized
[2017-05-02 16:14:53]	DEBUG :	Model Class Initialized
[2017-05-02 16:14:53]	DEBUG :	Model Class Initialized
[2017-05-02 16:14:53]	DEBUG :	Model Class Initialized
[2017-05-02 16:14:53]	DEBUG :	Model Class Initialized
[2017-05-02 16:14:53]	DEBUG :	Model Class Initialized
[2017-05-02 16:14:53]	DEBUG :	Model Class Initialized
[2017-05-02 16:14:53]	DEBUG :	Model Class Initialized
[2017-05-02 16:14:53]	DEBUG :	Model Class Initialized
[2017-05-02 16:14:53]	DEBUG :	Model Class Initialized
[2017-05-02 16:14:53]	DEBUG :	Plugin loaded: to_pdf_pi
[2017-05-02 16:14:53]	DEBUG :	Model Class Initialized
[2017-05-02 16:14:53]	DEBUG :	Language file loaded: language/english/form_validation_lang.php
[2017-05-02 16:14:53]	SQL :	SELECT uid,bid,eid FROM `user` WHERE authkey='1.1.d886b8e8a0615'
[2017-05-02 16:14:53]	DEBUG :	Database Driver Class Initialized
[2017-05-02 16:14:53]	SQL :	SELECT roleid FROM 1_employee
							WHERE eid='1'
							AND bid='1'
[2017-05-02 16:14:53]	DEBUG :	Database Driver Class Initialized
[2017-05-02 16:14:53]	SQL :	SELECT * FROM 1_user_role
							WHERE roleid='1'
							AND bid='1'
[2017-05-02 16:14:53]	SQL :	SELECT m.modid,m.modname,m.moddesc,
							COALESCE(o.opt_add,0) as opt_add,
							COALESCE(o.opt_view,0) as opt_view,
							COALESCE(o.opt_download,0) as opt_download,
							COALESCE(opt_delete,0) as opt_delete 
							FROM module m
							LEFT JOIN (SELECT * FROM 1_role_mod_opt
							WHERE roleid='1' 
							AND bid='1') as o
							ON m.modid=o.modid where m.status=1
[2017-05-02 16:14:53]	SQL :	SELECT a.*,f.fieldname FROM 1_role_access a
								LEFT JOIN systemfields f on a.fieldid=f.fieldid
								WHERE a.roleid='1'
								AND a.bid='1'
								AND a.fieldtype='s'
[2017-05-02 16:14:53]	SQL :	SELECT * FROM 1_role_access
								WHERE roleid='1'
								AND bid='1'
							AND fieldtype='c'
[2017-05-02 16:14:53]	SQL :	SELECT pri.landingnumber,pri.used,pri.climit,
								if(pri.status=0,'Not in use',
								if(pri.type='0','Calltrack',
								if(pri.type='1','IVRS',
								if(pri.type='2','PBX','Not Assign')))) as type,
								pri.associateid,
								if(pri.status=0,'None',
								if(pri.type='0',g.groupname,
								if(pri.type='1',i.title,
								if(pri.type='2',pbx.title,'None')))) as title,
								if(pri.status=0,'None',
								if(pri.type='0',ch.lastcall,
								if(pri.type='1',ih.lastcall,
								if(pri.type='2',ph.lastcall,'None')))) as lastcall
								FROM prinumbers pri
								LEFT JOIN 1_groups g on (g.prinumber=pri.number AND g.gid=pri.associateid AND g.status=1)
								LEFT JOIN 1_ivrs i on (i.prinumber=pri.number AND i.ivrsid=pri.associateid AND i.status=1)
								LEFT JOIN 1_pbx pbx on (pbx.prinumber=pri.number AND pbx.pbxid=pri.associateid AND pbx.status=1)
								LEFT JOIN (SELECT g.gid,max(h.starttime) as lastcall FROM 1_groups g LEFT JOIN 1_callhistory h on g.gid=h.gid GROUP BY g.gid) ch on g.gid=ch.gid
								LEFT JOIN (SELECT i.ivrsid,max(h.datetime) as lastcall FROM 1_ivrs i LEFT JOIN 1_ivrshistory h on i.ivrsid=h.ivrsid GROUP BY i.ivrsid) ih on i.ivrsid=ih.ivrsid
								LEFT JOIN (SELECT p.pbxid,max(h.starttime) as lastcall FROM 1_pbx p LEFT JOIN 1_pbxreport h on p.pbxid=h.pbxid GROUP BY p.pbxid) ph on pbx.pbxid=ph.pbxid
								WHERE pri.bid=1
[2017-05-02 16:14:53]	SQL :	SELECT balance FROM sms_bal  where bid='1'
[2017-05-02 16:14:53]	SQL :	SELECT balance FROM call_bal where bid='1'
[2017-05-02 16:14:53]	SQL :	SELECT DISTINCT(e.eid),e.empname,eb.start_time FROM 1_employee e
		                       LEFT JOIN 1_emp_break eb ON e.eid = eb.eid
		                       LEFT JOIN 1_groups d ON e.eid = d.eid
		                       WHERE eb.end_time='0000-00-00' AND e.selfdisable=1  GROUP BY d.gid,e.eid
[2017-05-02 16:14:53]	SQL :	SELECT COALESCE(COUNT(callid), 0) AS day 
							FROM 1_callhistory h 
							LEFT JOIN 1_groups d ON d.gid = h.gid 
							WHERE 1 AND (DATE(h.`starttime`) = DATE(NOW()))
[2017-05-02 16:14:53]	SQL :	SELECT COALESCE(COUNT(callid), 0) AS day 
							FROM 1_callhistory h 
							LEFT JOIN 1_groups d ON d.gid = h.gid 
							WHERE 1  AND (DATE(h.`starttime`)  > DATE(DATE_SUB(NOW(), INTERVAL 1 WEEK)))
[2017-05-02 16:14:53]	SQL :	SELECT COALESCE(COUNT(callid), 0) AS day 
							FROM 1_callhistory h 
							LEFT JOIN 1_groups d ON d.gid = h.gid 
							WHERE 1  AND (MONTH(h.`starttime` ) = MONTH(NOW()))
[2017-05-02 16:14:53]	SQL :	SELECT COALESCE(COUNT(pbxid), 0) AS day 
							FROM 1_pbxreport h 
							WHERE 1 AND (DATE(h.`starttime`) = DATE(NOW()))
[2017-05-02 16:14:53]	SQL :	SELECT COALESCE(COUNT(pbxid), 0) AS day 
							FROM 1_pbxreport h 
							WHERE 1  AND (DATE(h.`starttime`)  > DATE(DATE_SUB(NOW(), INTERVAL 1 WEEK)))
[2017-05-02 16:14:53]	SQL :	SELECT COALESCE(COUNT(pbxid), 0) AS day 
							FROM 1_pbxreport h 
							WHERE 1  AND (MONTH(h.`starttime` ) = MONTH(NOW()))
[2017-05-02 16:14:53]	SQL :	SELECT COALESCE(COUNT(hid), 0) AS day 
							   FROM 1_ivrshistory h 
						       WHERE 1 AND (DATE(h.`datetime`) = DATE(NOW()))
[2017-05-02 16:14:53]	SQL :	SELECT COALESCE(COUNT(hid), 0) AS day 
							   FROM 1_ivrshistory h 
						       WHERE 1  AND (DATE(h.`datetime`)  > DATE(DATE_SUB(NOW(), INTERVAL 1 WEEK)))
[2017-05-02 16:14:53]	SQL :	SELECT COALESCE(COUNT(hid), 0) AS day 
							   FROM 1_ivrshistory h 
						       WHERE 1  AND (MONTH(h.`datetime` ) = MONTH(NOW()))
[2017-05-02 16:14:53]	SQL :	SELECT COALESCE(COUNT(leadid), 0) AS day 
							FROM 1_leads a 
							LEFT JOIN 1_leads_groups d ON d.gid = a.gid 
							WHERE (DATE(a.`createdon`) = DATE(NOW()))
[2017-05-02 16:14:53]	SQL :	SELECT COALESCE(COUNT(leadid), 0) AS day 
							FROM 1_leads a 
							LEFT JOIN 1_leads_groups d ON d.gid = a.gid 
							WHERE (DATE(a.`createdon`) = DATE(NOW()))
[2017-05-02 16:14:53]	SQL :	SELECT COALESCE(COUNT(leadid), 0) AS day 
							FROM 1_leads a 
							LEFT JOIN 1_leads_groups d ON d.gid = a.gid 
							WHERE (DATE(a.`createdon`) = DATE(NOW()))
[2017-05-02 16:14:53]	SQL :	SELECT COALESCE(COUNT(tktid), 0) AS day 
							FROM 1_support_tickets a 
							LEFT JOIN 1_support_groups d ON d.gid = a.gid 
							WHERE (DATE(a.`createdon`) = DATE(NOW()))
[2017-05-02 16:14:53]	SQL :	SELECT COALESCE(COUNT(tktid), 0) AS day 
							FROM 1_support_tickets a 
							LEFT JOIN 1_support_groups d ON d.gid = a.gid 
							WHERE (DATE(a.`createdon`) = DATE(NOW()))
[2017-05-02 16:14:53]	SQL :	SELECT COALESCE(COUNT(tktid), 0) AS day 
							FROM 1_support_tickets a 
							LEFT JOIN 1_support_groups d ON d.gid = a.gid 
							WHERE (DATE(a.`createdon`) = DATE(NOW()))
[2017-05-02 16:14:53]	SQL :	SELECT COALESCE(COUNT(callid), 0) AS day 
							FROM 1_outboundcalls h 
							WHERE (DATE(h.`starttime`) = DATE(NOW()))
[2017-05-02 16:14:53]	SQL :	SELECT COALESCE(COUNT(callid), 0) AS day 
							FROM 1_outboundcalls h 
							WHERE (DATE(h.`starttime`) = DATE(NOW()))
[2017-05-02 16:14:53]	SQL :	SELECT COALESCE(COUNT(callid), 0) AS day 
							FROM 1_outboundcalls h 
							WHERE (DATE(h.`starttime`) = DATE(NOW()))
[2017-05-02 16:14:53]	SQL :	SELECT COALESCE(COUNT(callid), 0) AS day 
							FROM 1_mtracker h 
							WHERE (DATE(h.`starttime`) = DATE(NOW()))
[2017-05-02 16:14:53]	SQL :	SELECT COALESCE(COUNT(callid), 0) AS day 
							FROM 1_mtracker h 
							WHERE (DATE(h.`starttime`) = DATE(NOW()))
[2017-05-02 16:14:53]	SQL :	SELECT COALESCE(COUNT(callid), 0) AS day 
							FROM 1_mtracker h 
							WHERE (DATE(h.`starttime`) = DATE(NOW()))
[2017-05-02 16:18:29]	DEBUG :	Config Class Initialized
[2017-05-02 16:18:29]	DEBUG :	Hooks Class Initialized
[2017-05-02 16:18:29]	DEBUG :	URI Class Initialized
[2017-05-02 16:18:29]	DEBUG :	Router Class Initialized
[2017-05-02 16:18:29]	DEBUG :	Output Class Initialized
[2017-05-02 16:18:29]	DEBUG :	Input Class Initialized
[2017-05-02 16:18:29]	DEBUG :	Global POST and COOKIE data sanitized
[2017-05-02 16:18:29]	DEBUG :	Language Class Initialized
[2017-05-02 16:18:29]	DEBUG :	Loader Class Initialized
[2017-05-02 16:18:29]	DEBUG :	Helper loaded: url_helper
[2017-05-02 16:18:29]	DEBUG :	Helper loaded: form_helper
[2017-05-02 16:18:29]	DEBUG :	Helper loaded: html_helper
[2017-05-02 16:18:29]	DEBUG :	Helper loaded: email_helper
[2017-05-02 16:18:29]	DEBUG :	Helper loaded: ckeditor_helper
[2017-05-02 16:18:29]	DEBUG :	Helper loaded: mcube_helper
[2017-05-02 16:18:29]	DEBUG :	Database Driver Class Initialized
[2017-05-02 16:18:29]	ERROR :	Severity: 8192  --> mysql_pconnect(): The mysql extension is deprecated and will be removed in the future: use mysqli or PDO instead /var/www/html/mcnew/system/database/drivers/mysql/mysql_driver.php 88
[2017-05-02 16:18:29]	DEBUG :	Session Class Initialized
[2017-05-02 16:18:29]	DEBUG :	Helper loaded: string_helper
[2017-05-02 16:18:29]	DEBUG :	Encrypt Class Initialized
[2017-05-02 16:18:29]	DEBUG :	A session cookie was not found.
[2017-05-02 16:18:29]	SQL :	INSERT INTO `call_sessions` (`session_id`, `ip_address`, `user_agent`, `last_activity`) VALUES ('cbd6a37190895eba44b7b4e28dbe7948', '192.168.1.114', 'Dalvik/2.1.0 (Linux; U; Android 6.0; Panasonic T44', 1493722109)
[2017-05-02 16:18:30]	DEBUG :	Session routines successfully run
[2017-05-02 16:18:30]	DEBUG :	Table Class Initialized
[2017-05-02 16:18:30]	DEBUG :	Pagination Class Initialized
[2017-05-02 16:18:30]	DEBUG :	Config file loaded: config/paypallib_config.php
[2017-05-02 16:18:30]	DEBUG :	Form Validation Class Initialized
[2017-05-02 16:18:30]	DEBUG :	Email Class Initialized
[2017-05-02 16:18:30]	DEBUG :	Language file loaded: language/english/calendar_lang.php
[2017-05-02 16:18:30]	DEBUG :	Calendar Class Initialized
[2017-05-02 16:18:30]	DEBUG :	Controller Class Initialized
[2017-05-02 16:18:30]	DEBUG :	Model Class Initialized
[2017-05-02 16:18:30]	DEBUG :	Model Class Initialized
[2017-05-02 16:18:30]	DEBUG :	Model Class Initialized
[2017-05-02 16:18:30]	DEBUG :	Model Class Initialized
[2017-05-02 16:18:30]	DEBUG :	Model Class Initialized
[2017-05-02 16:18:30]	DEBUG :	Model Class Initialized
[2017-05-02 16:18:30]	DEBUG :	Model Class Initialized
[2017-05-02 16:18:30]	DEBUG :	Model Class Initialized
[2017-05-02 16:18:30]	DEBUG :	Model Class Initialized
[2017-05-02 16:18:30]	DEBUG :	Model Class Initialized
[2017-05-02 16:18:30]	DEBUG :	Model Class Initialized
[2017-05-02 16:18:30]	DEBUG :	Model Class Initialized
[2017-05-02 16:18:30]	DEBUG :	Model Class Initialized
[2017-05-02 16:18:30]	DEBUG :	Model Class Initialized
[2017-05-02 16:18:30]	DEBUG :	Plugin loaded: to_pdf_pi
[2017-05-02 16:18:30]	DEBUG :	Model Class Initialized
[2017-05-02 16:18:30]	DEBUG :	Language file loaded: language/english/form_validation_lang.php
[2017-05-02 16:18:30]	SQL :	SELECT uid,bid,eid FROM `user` WHERE authkey='1.1.d886b8e8a0615'
[2017-05-02 16:18:30]	DEBUG :	Database Driver Class Initialized
[2017-05-02 16:18:30]	SQL :	SELECT roleid FROM 1_employee
							WHERE eid='1'
							AND bid='1'
[2017-05-02 16:18:30]	DEBUG :	Database Driver Class Initialized
[2017-05-02 16:18:30]	SQL :	SELECT * FROM 1_user_role
							WHERE roleid='1'
							AND bid='1'
[2017-05-02 16:18:30]	SQL :	SELECT m.modid,m.modname,m.moddesc,
							COALESCE(o.opt_add,0) as opt_add,
							COALESCE(o.opt_view,0) as opt_view,
							COALESCE(o.opt_download,0) as opt_download,
							COALESCE(opt_delete,0) as opt_delete 
							FROM module m
							LEFT JOIN (SELECT * FROM 1_role_mod_opt
							WHERE roleid='1' 
							AND bid='1') as o
							ON m.modid=o.modid where m.status=1
[2017-05-02 16:18:30]	SQL :	SELECT a.*,f.fieldname FROM 1_role_access a
								LEFT JOIN systemfields f on a.fieldid=f.fieldid
								WHERE a.roleid='1'
								AND a.bid='1'
								AND a.fieldtype='s'
[2017-05-02 16:18:30]	SQL :	SELECT * FROM 1_role_access
								WHERE roleid='1'
								AND bid='1'
							AND fieldtype='c'
[2017-05-02 16:18:30]	SQL :	SELECT pri.landingnumber,pri.used,pri.climit,
								if(pri.status=0,'Not in use',
								if(pri.type='0','Calltrack',
								if(pri.type='1','IVRS',
								if(pri.type='2','PBX','Not Assign')))) as type,
								pri.associateid,
								if(pri.status=0,'None',
								if(pri.type='0',g.groupname,
								if(pri.type='1',i.title,
								if(pri.type='2',pbx.title,'None')))) as title,
								if(pri.status=0,'None',
								if(pri.type='0',ch.lastcall,
								if(pri.type='1',ih.lastcall,
								if(pri.type='2',ph.lastcall,'None')))) as lastcall
								FROM prinumbers pri
								LEFT JOIN 1_groups g on (g.prinumber=pri.number AND g.gid=pri.associateid AND g.status=1)
								LEFT JOIN 1_ivrs i on (i.prinumber=pri.number AND i.ivrsid=pri.associateid AND i.status=1)
								LEFT JOIN 1_pbx pbx on (pbx.prinumber=pri.number AND pbx.pbxid=pri.associateid AND pbx.status=1)
								LEFT JOIN (SELECT g.gid,max(h.starttime) as lastcall FROM 1_groups g LEFT JOIN 1_callhistory h on g.gid=h.gid GROUP BY g.gid) ch on g.gid=ch.gid
								LEFT JOIN (SELECT i.ivrsid,max(h.datetime) as lastcall FROM 1_ivrs i LEFT JOIN 1_ivrshistory h on i.ivrsid=h.ivrsid GROUP BY i.ivrsid) ih on i.ivrsid=ih.ivrsid
								LEFT JOIN (SELECT p.pbxid,max(h.starttime) as lastcall FROM 1_pbx p LEFT JOIN 1_pbxreport h on p.pbxid=h.pbxid GROUP BY p.pbxid) ph on pbx.pbxid=ph.pbxid
								WHERE pri.bid=1
[2017-05-02 16:18:30]	SQL :	SELECT balance FROM sms_bal  where bid='1'
[2017-05-02 16:18:30]	SQL :	SELECT balance FROM call_bal where bid='1'
[2017-05-02 16:18:30]	SQL :	SELECT DISTINCT(e.eid),e.empname,eb.start_time FROM 1_employee e
		                       LEFT JOIN 1_emp_break eb ON e.eid = eb.eid
		                       LEFT JOIN 1_groups d ON e.eid = d.eid
		                       WHERE eb.end_time='0000-00-00' AND e.selfdisable=1  GROUP BY d.gid,e.eid
[2017-05-02 16:18:30]	SQL :	SELECT COALESCE(COUNT(callid), 0) AS day 
							FROM 1_callhistory h 
							LEFT JOIN 1_groups d ON d.gid = h.gid 
							WHERE 1 AND (DATE(h.`starttime`) = DATE(NOW()))
[2017-05-02 16:18:30]	SQL :	SELECT COALESCE(COUNT(callid), 0) AS day 
							FROM 1_callhistory h 
							LEFT JOIN 1_groups d ON d.gid = h.gid 
							WHERE 1  AND (DATE(h.`starttime`)  > DATE(DATE_SUB(NOW(), INTERVAL 1 WEEK)))
[2017-05-02 16:18:30]	SQL :	SELECT COALESCE(COUNT(callid), 0) AS day 
							FROM 1_callhistory h 
							LEFT JOIN 1_groups d ON d.gid = h.gid 
							WHERE 1  AND (MONTH(h.`starttime` ) = MONTH(NOW()))
[2017-05-02 16:18:30]	SQL :	SELECT COALESCE(COUNT(pbxid), 0) AS day 
							FROM 1_pbxreport h 
							WHERE 1 AND (DATE(h.`starttime`) = DATE(NOW()))
[2017-05-02 16:18:30]	SQL :	SELECT COALESCE(COUNT(pbxid), 0) AS day 
							FROM 1_pbxreport h 
							WHERE 1  AND (DATE(h.`starttime`)  > DATE(DATE_SUB(NOW(), INTERVAL 1 WEEK)))
[2017-05-02 16:18:30]	SQL :	SELECT COALESCE(COUNT(pbxid), 0) AS day 
							FROM 1_pbxreport h 
							WHERE 1  AND (MONTH(h.`starttime` ) = MONTH(NOW()))
[2017-05-02 16:18:30]	SQL :	SELECT COALESCE(COUNT(hid), 0) AS day 
							   FROM 1_ivrshistory h 
						       WHERE 1 AND (DATE(h.`datetime`) = DATE(NOW()))
[2017-05-02 16:18:30]	SQL :	SELECT COALESCE(COUNT(hid), 0) AS day 
							   FROM 1_ivrshistory h 
						       WHERE 1  AND (DATE(h.`datetime`)  > DATE(DATE_SUB(NOW(), INTERVAL 1 WEEK)))
[2017-05-02 16:18:30]	SQL :	SELECT COALESCE(COUNT(hid), 0) AS day 
							   FROM 1_ivrshistory h 
						       WHERE 1  AND (MONTH(h.`datetime` ) = MONTH(NOW()))
[2017-05-02 16:18:30]	SQL :	SELECT COALESCE(COUNT(leadid), 0) AS day 
							FROM 1_leads a 
							LEFT JOIN 1_leads_groups d ON d.gid = a.gid 
							WHERE (DATE(a.`createdon`) = DATE(NOW()))
[2017-05-02 16:18:30]	SQL :	SELECT COALESCE(COUNT(leadid), 0) AS day 
							FROM 1_leads a 
							LEFT JOIN 1_leads_groups d ON d.gid = a.gid 
							WHERE (DATE(a.`createdon`) = DATE(NOW()))
[2017-05-02 16:18:30]	SQL :	SELECT COALESCE(COUNT(leadid), 0) AS day 
							FROM 1_leads a 
							LEFT JOIN 1_leads_groups d ON d.gid = a.gid 
							WHERE (DATE(a.`createdon`) = DATE(NOW()))
[2017-05-02 16:18:30]	SQL :	SELECT COALESCE(COUNT(tktid), 0) AS day 
							FROM 1_support_tickets a 
							LEFT JOIN 1_support_groups d ON d.gid = a.gid 
							WHERE (DATE(a.`createdon`) = DATE(NOW()))
[2017-05-02 16:18:30]	SQL :	SELECT COALESCE(COUNT(tktid), 0) AS day 
							FROM 1_support_tickets a 
							LEFT JOIN 1_support_groups d ON d.gid = a.gid 
							WHERE (DATE(a.`createdon`) = DATE(NOW()))
[2017-05-02 16:18:30]	SQL :	SELECT COALESCE(COUNT(tktid), 0) AS day 
							FROM 1_support_tickets a 
							LEFT JOIN 1_support_groups d ON d.gid = a.gid 
							WHERE (DATE(a.`createdon`) = DATE(NOW()))
[2017-05-02 16:18:30]	SQL :	SELECT COALESCE(COUNT(callid), 0) AS day 
							FROM 1_outboundcalls h 
							WHERE (DATE(h.`starttime`) = DATE(NOW()))
[2017-05-02 16:18:30]	SQL :	SELECT COALESCE(COUNT(callid), 0) AS day 
							FROM 1_outboundcalls h 
							WHERE (DATE(h.`starttime`) = DATE(NOW()))
[2017-05-02 16:18:30]	SQL :	SELECT COALESCE(COUNT(callid), 0) AS day 
							FROM 1_outboundcalls h 
							WHERE (DATE(h.`starttime`) = DATE(NOW()))
[2017-05-02 16:18:30]	SQL :	SELECT COALESCE(COUNT(callid), 0) AS day 
							FROM 1_mtracker h 
							WHERE (DATE(h.`starttime`) = DATE(NOW()))
[2017-05-02 16:18:30]	SQL :	SELECT COALESCE(COUNT(callid), 0) AS day 
							FROM 1_mtracker h 
							WHERE (DATE(h.`starttime`) = DATE(NOW()))
[2017-05-02 16:18:30]	SQL :	SELECT COALESCE(COUNT(callid), 0) AS day 
							FROM 1_mtracker h 
							WHERE (DATE(h.`starttime`) = DATE(NOW()))
[2017-05-02 16:25:24]	DEBUG :	Config Class Initialized
[2017-05-02 16:25:24]	DEBUG :	Hooks Class Initialized
[2017-05-02 16:25:24]	DEBUG :	URI Class Initialized
[2017-05-02 16:25:24]	DEBUG :	Router Class Initialized
[2017-05-02 16:25:24]	DEBUG :	Output Class Initialized
[2017-05-02 16:25:24]	DEBUG :	Input Class Initialized
[2017-05-02 16:25:24]	DEBUG :	Global POST and COOKIE data sanitized
[2017-05-02 16:25:24]	DEBUG :	Language Class Initialized
[2017-05-02 16:25:24]	DEBUG :	Loader Class Initialized
[2017-05-02 16:25:24]	DEBUG :	Helper loaded: url_helper
[2017-05-02 16:25:24]	DEBUG :	Helper loaded: form_helper
[2017-05-02 16:25:24]	DEBUG :	Helper loaded: html_helper
[2017-05-02 16:25:24]	DEBUG :	Helper loaded: email_helper
[2017-05-02 16:25:24]	DEBUG :	Helper loaded: ckeditor_helper
[2017-05-02 16:25:24]	DEBUG :	Helper loaded: mcube_helper
[2017-05-02 16:25:24]	DEBUG :	Database Driver Class Initialized
[2017-05-02 16:25:24]	ERROR :	Severity: 8192  --> mysql_pconnect(): The mysql extension is deprecated and will be removed in the future: use mysqli or PDO instead /var/www/html/mcnew/system/database/drivers/mysql/mysql_driver.php 88
[2017-05-02 16:25:24]	DEBUG :	Session Class Initialized
[2017-05-02 16:25:24]	DEBUG :	Helper loaded: string_helper
[2017-05-02 16:25:24]	DEBUG :	Encrypt Class Initialized
[2017-05-02 16:25:24]	DEBUG :	A session cookie was not found.
[2017-05-02 16:25:24]	SQL :	INSERT INTO `call_sessions` (`session_id`, `ip_address`, `user_agent`, `last_activity`) VALUES ('7e1478ba5872fa9589b06f19136ccafe', '192.168.1.114', 'Dalvik/2.1.0 (Linux; U; Android 6.0; Panasonic T44', 1493722524)
[2017-05-02 16:25:24]	DEBUG :	Session routines successfully run
[2017-05-02 16:25:24]	DEBUG :	Table Class Initialized
[2017-05-02 16:25:24]	DEBUG :	Pagination Class Initialized
[2017-05-02 16:25:24]	DEBUG :	Config file loaded: config/paypallib_config.php
[2017-05-02 16:25:24]	DEBUG :	Form Validation Class Initialized
[2017-05-02 16:25:24]	DEBUG :	Email Class Initialized
[2017-05-02 16:25:24]	DEBUG :	Language file loaded: language/english/calendar_lang.php
[2017-05-02 16:25:24]	DEBUG :	Calendar Class Initialized
[2017-05-02 16:25:24]	DEBUG :	Controller Class Initialized
[2017-05-02 16:25:24]	DEBUG :	Model Class Initialized
[2017-05-02 16:25:24]	DEBUG :	Model Class Initialized
[2017-05-02 16:25:24]	DEBUG :	Model Class Initialized
[2017-05-02 16:25:24]	DEBUG :	Model Class Initialized
[2017-05-02 16:25:25]	DEBUG :	Model Class Initialized
[2017-05-02 16:25:25]	DEBUG :	Model Class Initialized
[2017-05-02 16:25:25]	DEBUG :	Model Class Initialized
[2017-05-02 16:25:25]	DEBUG :	Model Class Initialized
[2017-05-02 16:25:25]	DEBUG :	Model Class Initialized
[2017-05-02 16:25:25]	DEBUG :	Model Class Initialized
[2017-05-02 16:25:25]	DEBUG :	Model Class Initialized
[2017-05-02 16:25:25]	DEBUG :	Model Class Initialized
[2017-05-02 16:25:25]	DEBUG :	Model Class Initialized
[2017-05-02 16:25:25]	DEBUG :	Model Class Initialized
[2017-05-02 16:25:25]	DEBUG :	Plugin loaded: to_pdf_pi
[2017-05-02 16:25:25]	DEBUG :	Model Class Initialized
[2017-05-02 16:25:25]	DEBUG :	Language file loaded: language/english/form_validation_lang.php
[2017-05-02 16:25:25]	SQL :	SELECT uid,bid,eid FROM `user` WHERE authkey='1.1.d886b8e8a0615'
[2017-05-02 16:25:25]	DEBUG :	Database Driver Class Initialized
[2017-05-02 16:25:25]	SQL :	SELECT roleid FROM 1_employee
							WHERE eid='1'
							AND bid='1'
[2017-05-02 16:25:25]	DEBUG :	Database Driver Class Initialized
[2017-05-02 16:25:25]	SQL :	SELECT * FROM 1_user_role
							WHERE roleid='1'
							AND bid='1'
[2017-05-02 16:25:25]	SQL :	SELECT m.modid,m.modname,m.moddesc,
							COALESCE(o.opt_add,0) as opt_add,
							COALESCE(o.opt_view,0) as opt_view,
							COALESCE(o.opt_download,0) as opt_download,
							COALESCE(opt_delete,0) as opt_delete 
							FROM module m
							LEFT JOIN (SELECT * FROM 1_role_mod_opt
							WHERE roleid='1' 
							AND bid='1') as o
							ON m.modid=o.modid where m.status=1
[2017-05-02 16:25:25]	SQL :	SELECT a.*,f.fieldname FROM 1_role_access a
								LEFT JOIN systemfields f on a.fieldid=f.fieldid
								WHERE a.roleid='1'
								AND a.bid='1'
								AND a.fieldtype='s'
[2017-05-02 16:25:25]	SQL :	SELECT * FROM 1_role_access
								WHERE roleid='1'
								AND bid='1'
							AND fieldtype='c'
[2017-05-02 16:25:25]	SQL :	SELECT pri.landingnumber,pri.used,pri.climit,
								if(pri.status=0,'Not in use',
								if(pri.type='0','Calltrack',
								if(pri.type='1','IVRS',
								if(pri.type='2','PBX','Not Assign')))) as type,
								pri.associateid,
								if(pri.status=0,'None',
								if(pri.type='0',g.groupname,
								if(pri.type='1',i.title,
								if(pri.type='2',pbx.title,'None')))) as title,
								if(pri.status=0,'None',
								if(pri.type='0',ch.lastcall,
								if(pri.type='1',ih.lastcall,
								if(pri.type='2',ph.lastcall,'None')))) as lastcall
								FROM prinumbers pri
								LEFT JOIN 1_groups g on (g.prinumber=pri.number AND g.gid=pri.associateid AND g.status=1)
								LEFT JOIN 1_ivrs i on (i.prinumber=pri.number AND i.ivrsid=pri.associateid AND i.status=1)
								LEFT JOIN 1_pbx pbx on (pbx.prinumber=pri.number AND pbx.pbxid=pri.associateid AND pbx.status=1)
								LEFT JOIN (SELECT g.gid,max(h.starttime) as lastcall FROM 1_groups g LEFT JOIN 1_callhistory h on g.gid=h.gid GROUP BY g.gid) ch on g.gid=ch.gid
								LEFT JOIN (SELECT i.ivrsid,max(h.datetime) as lastcall FROM 1_ivrs i LEFT JOIN 1_ivrshistory h on i.ivrsid=h.ivrsid GROUP BY i.ivrsid) ih on i.ivrsid=ih.ivrsid
								LEFT JOIN (SELECT p.pbxid,max(h.starttime) as lastcall FROM 1_pbx p LEFT JOIN 1_pbxreport h on p.pbxid=h.pbxid GROUP BY p.pbxid) ph on pbx.pbxid=ph.pbxid
								WHERE pri.bid=1
[2017-05-02 16:25:25]	SQL :	SELECT balance FROM sms_bal  where bid='1'
[2017-05-02 16:25:25]	SQL :	SELECT balance FROM call_bal where bid='1'
[2017-05-02 16:25:25]	SQL :	SELECT DISTINCT(e.eid),e.empname,eb.start_time FROM 1_employee e
		                       LEFT JOIN 1_emp_break eb ON e.eid = eb.eid
		                       LEFT JOIN 1_groups d ON e.eid = d.eid
		                       WHERE eb.end_time='0000-00-00' AND e.selfdisable=1  GROUP BY d.gid,e.eid
[2017-05-02 16:25:25]	SQL :	SELECT COALESCE(COUNT(callid), 0) AS day 
							FROM 1_callhistory h 
							LEFT JOIN 1_groups d ON d.gid = h.gid 
							WHERE 1 AND (DATE(h.`starttime`) = DATE(NOW()))
[2017-05-02 16:25:25]	SQL :	SELECT COALESCE(COUNT(callid), 0) AS day 
							FROM 1_callhistory h 
							LEFT JOIN 1_groups d ON d.gid = h.gid 
							WHERE 1  AND (DATE(h.`starttime`)  > DATE(DATE_SUB(NOW(), INTERVAL 1 WEEK)))
[2017-05-02 16:25:25]	SQL :	SELECT COALESCE(COUNT(callid), 0) AS day 
							FROM 1_callhistory h 
							LEFT JOIN 1_groups d ON d.gid = h.gid 
							WHERE 1  AND (MONTH(h.`starttime` ) = MONTH(NOW()))
[2017-05-02 16:25:25]	SQL :	SELECT COALESCE(COUNT(pbxid), 0) AS day 
							FROM 1_pbxreport h 
							WHERE 1 AND (DATE(h.`starttime`) = DATE(NOW()))
[2017-05-02 16:25:25]	SQL :	SELECT COALESCE(COUNT(pbxid), 0) AS day 
							FROM 1_pbxreport h 
							WHERE 1  AND (DATE(h.`starttime`)  > DATE(DATE_SUB(NOW(), INTERVAL 1 WEEK)))
[2017-05-02 16:25:25]	SQL :	SELECT COALESCE(COUNT(pbxid), 0) AS day 
							FROM 1_pbxreport h 
							WHERE 1  AND (MONTH(h.`starttime` ) = MONTH(NOW()))
[2017-05-02 16:25:25]	SQL :	SELECT COALESCE(COUNT(hid), 0) AS day 
							   FROM 1_ivrshistory h 
						       WHERE 1 AND (DATE(h.`datetime`) = DATE(NOW()))
[2017-05-02 16:25:25]	SQL :	SELECT COALESCE(COUNT(hid), 0) AS day 
							   FROM 1_ivrshistory h 
						       WHERE 1  AND (DATE(h.`datetime`)  > DATE(DATE_SUB(NOW(), INTERVAL 1 WEEK)))
[2017-05-02 16:25:25]	SQL :	SELECT COALESCE(COUNT(hid), 0) AS day 
							   FROM 1_ivrshistory h 
						       WHERE 1  AND (MONTH(h.`datetime` ) = MONTH(NOW()))
[2017-05-02 16:25:25]	SQL :	SELECT COALESCE(COUNT(leadid), 0) AS day 
							FROM 1_leads a 
							LEFT JOIN 1_leads_groups d ON d.gid = a.gid 
							WHERE (DATE(a.`createdon`) = DATE(NOW()))
[2017-05-02 16:25:25]	SQL :	SELECT COALESCE(COUNT(leadid), 0) AS day 
							FROM 1_leads a 
							LEFT JOIN 1_leads_groups d ON d.gid = a.gid 
							WHERE (DATE(a.`createdon`) = DATE(NOW()))
[2017-05-02 16:25:25]	SQL :	SELECT COALESCE(COUNT(leadid), 0) AS day 
							FROM 1_leads a 
							LEFT JOIN 1_leads_groups d ON d.gid = a.gid 
							WHERE (DATE(a.`createdon`) = DATE(NOW()))
[2017-05-02 16:25:25]	SQL :	SELECT COALESCE(COUNT(tktid), 0) AS day 
							FROM 1_support_tickets a 
							LEFT JOIN 1_support_groups d ON d.gid = a.gid 
							WHERE (DATE(a.`createdon`) = DATE(NOW()))
[2017-05-02 16:25:25]	SQL :	SELECT COALESCE(COUNT(tktid), 0) AS day 
							FROM 1_support_tickets a 
							LEFT JOIN 1_support_groups d ON d.gid = a.gid 
							WHERE (DATE(a.`createdon`) = DATE(NOW()))
[2017-05-02 16:25:25]	SQL :	SELECT COALESCE(COUNT(tktid), 0) AS day 
							FROM 1_support_tickets a 
							LEFT JOIN 1_support_groups d ON d.gid = a.gid 
							WHERE (DATE(a.`createdon`) = DATE(NOW()))
[2017-05-02 16:25:25]	SQL :	SELECT COALESCE(COUNT(callid), 0) AS day 
							FROM 1_outboundcalls h 
							WHERE (DATE(h.`starttime`) = DATE(NOW()))
[2017-05-02 16:25:25]	SQL :	SELECT COALESCE(COUNT(callid), 0) AS day 
							FROM 1_outboundcalls h 
							WHERE (DATE(h.`starttime`) = DATE(NOW()))
[2017-05-02 16:25:25]	SQL :	SELECT COALESCE(COUNT(callid), 0) AS day 
							FROM 1_outboundcalls h 
							WHERE (DATE(h.`starttime`) = DATE(NOW()))
[2017-05-02 16:25:25]	SQL :	SELECT COALESCE(COUNT(callid), 0) AS day 
							FROM 1_mtracker h 
							WHERE (DATE(h.`starttime`) = DATE(NOW()))
[2017-05-02 16:25:25]	SQL :	SELECT COALESCE(COUNT(callid), 0) AS day 
							FROM 1_mtracker h 
							WHERE (DATE(h.`starttime`) = DATE(NOW()))
[2017-05-02 16:25:25]	SQL :	SELECT COALESCE(COUNT(callid), 0) AS day 
							FROM 1_mtracker h 
							WHERE (DATE(h.`starttime`) = DATE(NOW()))
[2017-05-02 16:30:15]	DEBUG :	Config Class Initialized
[2017-05-02 16:30:15]	DEBUG :	Hooks Class Initialized
[2017-05-02 16:30:15]	DEBUG :	URI Class Initialized
[2017-05-02 16:30:15]	DEBUG :	Router Class Initialized
[2017-05-02 16:30:15]	DEBUG :	Output Class Initialized
[2017-05-02 16:30:15]	DEBUG :	Input Class Initialized
[2017-05-02 16:30:15]	DEBUG :	Global POST and COOKIE data sanitized
[2017-05-02 16:30:15]	DEBUG :	Language Class Initialized
[2017-05-02 16:30:15]	DEBUG :	Loader Class Initialized
[2017-05-02 16:30:15]	DEBUG :	Helper loaded: url_helper
[2017-05-02 16:30:15]	DEBUG :	Helper loaded: form_helper
[2017-05-02 16:30:15]	DEBUG :	Helper loaded: html_helper
[2017-05-02 16:30:15]	DEBUG :	Helper loaded: email_helper
[2017-05-02 16:30:15]	DEBUG :	Helper loaded: ckeditor_helper
[2017-05-02 16:30:15]	DEBUG :	Helper loaded: mcube_helper
[2017-05-02 16:30:15]	DEBUG :	Database Driver Class Initialized
[2017-05-02 16:30:15]	ERROR :	Severity: 8192  --> mysql_pconnect(): The mysql extension is deprecated and will be removed in the future: use mysqli or PDO instead /var/www/html/mcnew/system/database/drivers/mysql/mysql_driver.php 88
[2017-05-02 16:30:15]	DEBUG :	Session Class Initialized
[2017-05-02 16:30:15]	DEBUG :	Helper loaded: string_helper
[2017-05-02 16:30:15]	DEBUG :	Encrypt Class Initialized
[2017-05-02 16:30:15]	DEBUG :	A session cookie was not found.
[2017-05-02 16:30:15]	SQL :	INSERT INTO `call_sessions` (`session_id`, `ip_address`, `user_agent`, `last_activity`) VALUES ('fee8a3bce3af1345e576d4cdb8d200f1', '192.168.1.114', 'Dalvik/2.1.0 (Linux; U; Android 6.0; Panasonic T44', 1493722815)
[2017-05-02 16:30:15]	DEBUG :	Session routines successfully run
[2017-05-02 16:30:15]	DEBUG :	Table Class Initialized
[2017-05-02 16:30:15]	DEBUG :	Pagination Class Initialized
[2017-05-02 16:30:15]	DEBUG :	Config file loaded: config/paypallib_config.php
[2017-05-02 16:30:15]	DEBUG :	Form Validation Class Initialized
[2017-05-02 16:30:15]	DEBUG :	Email Class Initialized
[2017-05-02 16:30:15]	DEBUG :	Language file loaded: language/english/calendar_lang.php
[2017-05-02 16:30:15]	DEBUG :	Calendar Class Initialized
[2017-05-02 16:30:15]	DEBUG :	Controller Class Initialized
[2017-05-02 16:30:15]	DEBUG :	Model Class Initialized
[2017-05-02 16:30:15]	DEBUG :	Model Class Initialized
[2017-05-02 16:30:15]	DEBUG :	Model Class Initialized
[2017-05-02 16:30:15]	DEBUG :	Model Class Initialized
[2017-05-02 16:30:15]	DEBUG :	Model Class Initialized
[2017-05-02 16:30:15]	DEBUG :	Model Class Initialized
[2017-05-02 16:30:15]	DEBUG :	Model Class Initialized
[2017-05-02 16:30:15]	DEBUG :	Model Class Initialized
[2017-05-02 16:30:15]	DEBUG :	Model Class Initialized
[2017-05-02 16:30:15]	DEBUG :	Model Class Initialized
[2017-05-02 16:30:15]	DEBUG :	Model Class Initialized
[2017-05-02 16:30:15]	DEBUG :	Model Class Initialized
[2017-05-02 16:30:15]	DEBUG :	Model Class Initialized
[2017-05-02 16:30:15]	DEBUG :	Model Class Initialized
[2017-05-02 16:30:15]	DEBUG :	Plugin loaded: to_pdf_pi
[2017-05-02 16:30:15]	DEBUG :	Model Class Initialized
[2017-05-02 16:30:15]	DEBUG :	Language file loaded: language/english/form_validation_lang.php
[2017-05-02 16:30:15]	SQL :	SELECT uid,bid,eid FROM `user` WHERE authkey='1.1.d886b8e8a0615'
[2017-05-02 16:30:15]	DEBUG :	Database Driver Class Initialized
[2017-05-02 16:30:15]	SQL :	SELECT roleid FROM 1_employee
							WHERE eid='1'
							AND bid='1'
[2017-05-02 16:30:15]	DEBUG :	Database Driver Class Initialized
[2017-05-02 16:30:15]	SQL :	SELECT * FROM 1_user_role
							WHERE roleid='1'
							AND bid='1'
[2017-05-02 16:30:15]	SQL :	SELECT m.modid,m.modname,m.moddesc,
							COALESCE(o.opt_add,0) as opt_add,
							COALESCE(o.opt_view,0) as opt_view,
							COALESCE(o.opt_download,0) as opt_download,
							COALESCE(opt_delete,0) as opt_delete 
							FROM module m
							LEFT JOIN (SELECT * FROM 1_role_mod_opt
							WHERE roleid='1' 
							AND bid='1') as o
							ON m.modid=o.modid where m.status=1
[2017-05-02 16:30:15]	SQL :	SELECT a.*,f.fieldname FROM 1_role_access a
								LEFT JOIN systemfields f on a.fieldid=f.fieldid
								WHERE a.roleid='1'
								AND a.bid='1'
								AND a.fieldtype='s'
[2017-05-02 16:30:15]	SQL :	SELECT * FROM 1_role_access
								WHERE roleid='1'
								AND bid='1'
							AND fieldtype='c'
[2017-05-02 16:30:15]	SQL :	SELECT pri.landingnumber,pri.used,pri.climit,
								if(pri.status=0,'Not in use',
								if(pri.type='0','Calltrack',
								if(pri.type='1','IVRS',
								if(pri.type='2','PBX','Not Assign')))) as type,
								pri.associateid,
								if(pri.status=0,'None',
								if(pri.type='0',g.groupname,
								if(pri.type='1',i.title,
								if(pri.type='2',pbx.title,'None')))) as title,
								if(pri.status=0,'None',
								if(pri.type='0',ch.lastcall,
								if(pri.type='1',ih.lastcall,
								if(pri.type='2',ph.lastcall,'None')))) as lastcall
								FROM prinumbers pri
								LEFT JOIN 1_groups g on (g.prinumber=pri.number AND g.gid=pri.associateid AND g.status=1)
								LEFT JOIN 1_ivrs i on (i.prinumber=pri.number AND i.ivrsid=pri.associateid AND i.status=1)
								LEFT JOIN 1_pbx pbx on (pbx.prinumber=pri.number AND pbx.pbxid=pri.associateid AND pbx.status=1)
								LEFT JOIN (SELECT g.gid,max(h.starttime) as lastcall FROM 1_groups g LEFT JOIN 1_callhistory h on g.gid=h.gid GROUP BY g.gid) ch on g.gid=ch.gid
								LEFT JOIN (SELECT i.ivrsid,max(h.datetime) as lastcall FROM 1_ivrs i LEFT JOIN 1_ivrshistory h on i.ivrsid=h.ivrsid GROUP BY i.ivrsid) ih on i.ivrsid=ih.ivrsid
								LEFT JOIN (SELECT p.pbxid,max(h.starttime) as lastcall FROM 1_pbx p LEFT JOIN 1_pbxreport h on p.pbxid=h.pbxid GROUP BY p.pbxid) ph on pbx.pbxid=ph.pbxid
								WHERE pri.bid=1
[2017-05-02 16:30:15]	SQL :	SELECT balance FROM sms_bal  where bid='1'
[2017-05-02 16:30:15]	SQL :	SELECT balance FROM call_bal where bid='1'
[2017-05-02 16:30:15]	SQL :	SELECT DISTINCT(e.eid),e.empname,eb.start_time FROM 1_employee e
		                       LEFT JOIN 1_emp_break eb ON e.eid = eb.eid
		                       LEFT JOIN 1_groups d ON e.eid = d.eid
		                       WHERE eb.end_time='0000-00-00' AND e.selfdisable=1  GROUP BY d.gid,e.eid
[2017-05-02 16:30:15]	SQL :	SELECT COALESCE(COUNT(callid), 0) AS day 
							FROM 1_callhistory h 
							LEFT JOIN 1_groups d ON d.gid = h.gid 
							WHERE 1 AND (DATE(h.`starttime`) = DATE(NOW()))
[2017-05-02 16:30:15]	SQL :	SELECT COALESCE(COUNT(callid), 0) AS day 
							FROM 1_callhistory h 
							LEFT JOIN 1_groups d ON d.gid = h.gid 
							WHERE 1  AND (DATE(h.`starttime`)  > DATE(DATE_SUB(NOW(), INTERVAL 1 WEEK)))
[2017-05-02 16:30:15]	SQL :	SELECT COALESCE(COUNT(callid), 0) AS day 
							FROM 1_callhistory h 
							LEFT JOIN 1_groups d ON d.gid = h.gid 
							WHERE 1  AND (MONTH(h.`starttime` ) = MONTH(NOW()))
[2017-05-02 16:30:15]	SQL :	SELECT COALESCE(COUNT(pbxid), 0) AS day 
							FROM 1_pbxreport h 
							WHERE 1 AND (DATE(h.`starttime`) = DATE(NOW()))
[2017-05-02 16:30:15]	SQL :	SELECT COALESCE(COUNT(pbxid), 0) AS day 
							FROM 1_pbxreport h 
							WHERE 1  AND (DATE(h.`starttime`)  > DATE(DATE_SUB(NOW(), INTERVAL 1 WEEK)))
[2017-05-02 16:30:15]	SQL :	SELECT COALESCE(COUNT(pbxid), 0) AS day 
							FROM 1_pbxreport h 
							WHERE 1  AND (MONTH(h.`starttime` ) = MONTH(NOW()))
[2017-05-02 16:30:15]	SQL :	SELECT COALESCE(COUNT(hid), 0) AS day 
							   FROM 1_ivrshistory h 
						       WHERE 1 AND (DATE(h.`datetime`) = DATE(NOW()))
[2017-05-02 16:30:15]	SQL :	SELECT COALESCE(COUNT(hid), 0) AS day 
							   FROM 1_ivrshistory h 
						       WHERE 1  AND (DATE(h.`datetime`)  > DATE(DATE_SUB(NOW(), INTERVAL 1 WEEK)))
[2017-05-02 16:30:15]	SQL :	SELECT COALESCE(COUNT(hid), 0) AS day 
							   FROM 1_ivrshistory h 
						       WHERE 1  AND (MONTH(h.`datetime` ) = MONTH(NOW()))
[2017-05-02 16:30:15]	SQL :	SELECT COALESCE(COUNT(leadid), 0) AS day 
							FROM 1_leads a 
							LEFT JOIN 1_leads_groups d ON d.gid = a.gid 
							WHERE (DATE(a.`createdon`) = DATE(NOW()))
[2017-05-02 16:30:15]	SQL :	SELECT COALESCE(COUNT(leadid), 0) AS day 
							FROM 1_leads a 
							LEFT JOIN 1_leads_groups d ON d.gid = a.gid 
							WHERE (DATE(a.`createdon`) = DATE(NOW()))
[2017-05-02 16:30:15]	SQL :	SELECT COALESCE(COUNT(leadid), 0) AS day 
							FROM 1_leads a 
							LEFT JOIN 1_leads_groups d ON d.gid = a.gid 
							WHERE (DATE(a.`createdon`) = DATE(NOW()))
[2017-05-02 16:30:15]	SQL :	SELECT COALESCE(COUNT(tktid), 0) AS day 
							FROM 1_support_tickets a 
							LEFT JOIN 1_support_groups d ON d.gid = a.gid 
							WHERE (DATE(a.`createdon`) = DATE(NOW()))
[2017-05-02 16:30:15]	SQL :	SELECT COALESCE(COUNT(tktid), 0) AS day 
							FROM 1_support_tickets a 
							LEFT JOIN 1_support_groups d ON d.gid = a.gid 
							WHERE (DATE(a.`createdon`) = DATE(NOW()))
[2017-05-02 16:30:15]	SQL :	SELECT COALESCE(COUNT(tktid), 0) AS day 
							FROM 1_support_tickets a 
							LEFT JOIN 1_support_groups d ON d.gid = a.gid 
							WHERE (DATE(a.`createdon`) = DATE(NOW()))
[2017-05-02 16:30:15]	SQL :	SELECT COALESCE(COUNT(callid), 0) AS day 
							FROM 1_outboundcalls h 
							WHERE (DATE(h.`starttime`) = DATE(NOW()))
[2017-05-02 16:30:15]	SQL :	SELECT COALESCE(COUNT(callid), 0) AS day 
							FROM 1_outboundcalls h 
							WHERE (DATE(h.`starttime`) = DATE(NOW()))
[2017-05-02 16:30:15]	SQL :	SELECT COALESCE(COUNT(callid), 0) AS day 
							FROM 1_outboundcalls h 
							WHERE (DATE(h.`starttime`) = DATE(NOW()))
[2017-05-02 16:30:15]	SQL :	SELECT COALESCE(COUNT(callid), 0) AS day 
							FROM 1_mtracker h 
							WHERE (DATE(h.`starttime`) = DATE(NOW()))
[2017-05-02 16:30:15]	SQL :	SELECT COALESCE(COUNT(callid), 0) AS day 
							FROM 1_mtracker h 
							WHERE (DATE(h.`starttime`) = DATE(NOW()))
[2017-05-02 16:30:15]	SQL :	SELECT COALESCE(COUNT(callid), 0) AS day 
							FROM 1_mtracker h 
							WHERE (DATE(h.`starttime`) = DATE(NOW()))
[2017-05-02 16:31:01]	DEBUG :	Config Class Initialized
[2017-05-02 16:31:01]	DEBUG :	Hooks Class Initialized
[2017-05-02 16:31:01]	DEBUG :	URI Class Initialized
[2017-05-02 16:31:01]	DEBUG :	Router Class Initialized
[2017-05-02 16:31:01]	DEBUG :	Output Class Initialized
[2017-05-02 16:31:01]	DEBUG :	Input Class Initialized
[2017-05-02 16:31:01]	DEBUG :	Global POST and COOKIE data sanitized
[2017-05-02 16:31:01]	DEBUG :	Language Class Initialized
[2017-05-02 16:31:01]	DEBUG :	Loader Class Initialized
[2017-05-02 16:31:01]	DEBUG :	Helper loaded: url_helper
[2017-05-02 16:31:01]	DEBUG :	Helper loaded: form_helper
[2017-05-02 16:31:01]	DEBUG :	Helper loaded: html_helper
[2017-05-02 16:31:01]	DEBUG :	Helper loaded: email_helper
[2017-05-02 16:31:01]	DEBUG :	Helper loaded: ckeditor_helper
[2017-05-02 16:31:01]	DEBUG :	Helper loaded: mcube_helper
[2017-05-02 16:31:01]	DEBUG :	Database Driver Class Initialized
[2017-05-02 16:31:01]	ERROR :	Severity: 8192  --> mysql_pconnect(): The mysql extension is deprecated and will be removed in the future: use mysqli or PDO instead /var/www/html/mcnew/system/database/drivers/mysql/mysql_driver.php 88
[2017-05-02 16:31:01]	DEBUG :	Session Class Initialized
[2017-05-02 16:31:01]	DEBUG :	Helper loaded: string_helper
[2017-05-02 16:31:01]	DEBUG :	Encrypt Class Initialized
[2017-05-02 16:31:01]	DEBUG :	A session cookie was not found.
[2017-05-02 16:31:01]	SQL :	INSERT INTO `call_sessions` (`session_id`, `ip_address`, `user_agent`, `last_activity`) VALUES ('6a14123264ce1ca9cc9de2fd822a1924', '192.168.1.114', 'Dalvik/2.1.0 (Linux; U; Android 6.0; Panasonic T44', 1493722861)
[2017-05-02 16:31:01]	DEBUG :	Session routines successfully run
[2017-05-02 16:31:01]	DEBUG :	Table Class Initialized
[2017-05-02 16:31:01]	DEBUG :	Pagination Class Initialized
[2017-05-02 16:31:01]	DEBUG :	Config file loaded: config/paypallib_config.php
[2017-05-02 16:31:01]	DEBUG :	Form Validation Class Initialized
[2017-05-02 16:31:01]	DEBUG :	Email Class Initialized
[2017-05-02 16:31:01]	DEBUG :	Language file loaded: language/english/calendar_lang.php
[2017-05-02 16:31:01]	DEBUG :	Calendar Class Initialized
[2017-05-02 16:31:01]	DEBUG :	Controller Class Initialized
[2017-05-02 16:31:01]	DEBUG :	Model Class Initialized
[2017-05-02 16:31:01]	DEBUG :	Model Class Initialized
[2017-05-02 16:31:01]	DEBUG :	Model Class Initialized
[2017-05-02 16:31:01]	DEBUG :	Model Class Initialized
[2017-05-02 16:31:01]	DEBUG :	Model Class Initialized
[2017-05-02 16:31:01]	DEBUG :	Model Class Initialized
[2017-05-02 16:31:01]	DEBUG :	Model Class Initialized
[2017-05-02 16:31:01]	DEBUG :	Model Class Initialized
[2017-05-02 16:31:01]	DEBUG :	Model Class Initialized
[2017-05-02 16:31:01]	DEBUG :	Model Class Initialized
[2017-05-02 16:31:01]	DEBUG :	Model Class Initialized
[2017-05-02 16:31:01]	DEBUG :	Model Class Initialized
[2017-05-02 16:31:01]	DEBUG :	Model Class Initialized
[2017-05-02 16:31:01]	DEBUG :	Model Class Initialized
[2017-05-02 16:31:01]	DEBUG :	Plugin loaded: to_pdf_pi
[2017-05-02 16:31:01]	DEBUG :	Model Class Initialized
[2017-05-02 16:31:01]	DEBUG :	Language file loaded: language/english/form_validation_lang.php
[2017-05-02 16:31:01]	SQL :	SELECT uid,bid,eid FROM `user` WHERE authkey='1.1.d886b8e8a0615'
[2017-05-02 16:31:01]	DEBUG :	Database Driver Class Initialized
[2017-05-02 16:31:01]	SQL :	SELECT roleid FROM 1_employee
							WHERE eid='1'
							AND bid='1'
[2017-05-02 16:31:01]	DEBUG :	Database Driver Class Initialized
[2017-05-02 16:31:01]	SQL :	SELECT * FROM 1_user_role
							WHERE roleid='1'
							AND bid='1'
[2017-05-02 16:31:01]	SQL :	SELECT m.modid,m.modname,m.moddesc,
							COALESCE(o.opt_add,0) as opt_add,
							COALESCE(o.opt_view,0) as opt_view,
							COALESCE(o.opt_download,0) as opt_download,
							COALESCE(opt_delete,0) as opt_delete 
							FROM module m
							LEFT JOIN (SELECT * FROM 1_role_mod_opt
							WHERE roleid='1' 
							AND bid='1') as o
							ON m.modid=o.modid where m.status=1
[2017-05-02 16:31:01]	SQL :	SELECT a.*,f.fieldname FROM 1_role_access a
								LEFT JOIN systemfields f on a.fieldid=f.fieldid
								WHERE a.roleid='1'
								AND a.bid='1'
								AND a.fieldtype='s'
[2017-05-02 16:31:01]	SQL :	SELECT * FROM 1_role_access
								WHERE roleid='1'
								AND bid='1'
							AND fieldtype='c'
[2017-05-02 16:31:01]	SQL :	SELECT pri.landingnumber,pri.used,pri.climit,
								if(pri.status=0,'Not in use',
								if(pri.type='0','Calltrack',
								if(pri.type='1','IVRS',
								if(pri.type='2','PBX','Not Assign')))) as type,
								pri.associateid,
								if(pri.status=0,'None',
								if(pri.type='0',g.groupname,
								if(pri.type='1',i.title,
								if(pri.type='2',pbx.title,'None')))) as title,
								if(pri.status=0,'None',
								if(pri.type='0',ch.lastcall,
								if(pri.type='1',ih.lastcall,
								if(pri.type='2',ph.lastcall,'None')))) as lastcall
								FROM prinumbers pri
								LEFT JOIN 1_groups g on (g.prinumber=pri.number AND g.gid=pri.associateid AND g.status=1)
								LEFT JOIN 1_ivrs i on (i.prinumber=pri.number AND i.ivrsid=pri.associateid AND i.status=1)
								LEFT JOIN 1_pbx pbx on (pbx.prinumber=pri.number AND pbx.pbxid=pri.associateid AND pbx.status=1)
								LEFT JOIN (SELECT g.gid,max(h.starttime) as lastcall FROM 1_groups g LEFT JOIN 1_callhistory h on g.gid=h.gid GROUP BY g.gid) ch on g.gid=ch.gid
								LEFT JOIN (SELECT i.ivrsid,max(h.datetime) as lastcall FROM 1_ivrs i LEFT JOIN 1_ivrshistory h on i.ivrsid=h.ivrsid GROUP BY i.ivrsid) ih on i.ivrsid=ih.ivrsid
								LEFT JOIN (SELECT p.pbxid,max(h.starttime) as lastcall FROM 1_pbx p LEFT JOIN 1_pbxreport h on p.pbxid=h.pbxid GROUP BY p.pbxid) ph on pbx.pbxid=ph.pbxid
								WHERE pri.bid=1
[2017-05-02 16:31:01]	SQL :	SELECT balance FROM sms_bal  where bid='1'
[2017-05-02 16:31:01]	SQL :	SELECT balance FROM call_bal where bid='1'
[2017-05-02 16:31:01]	SQL :	SELECT DISTINCT(e.eid),e.empname,eb.start_time FROM 1_employee e
		                       LEFT JOIN 1_emp_break eb ON e.eid = eb.eid
		                       LEFT JOIN 1_groups d ON e.eid = d.eid
		                       WHERE eb.end_time='0000-00-00' AND e.selfdisable=1  GROUP BY d.gid,e.eid
[2017-05-02 16:31:01]	SQL :	SELECT COALESCE(COUNT(callid), 0) AS day 
							FROM 1_callhistory h 
							LEFT JOIN 1_groups d ON d.gid = h.gid 
							WHERE 1 AND (DATE(h.`starttime`) = DATE(NOW()))
[2017-05-02 16:31:01]	SQL :	SELECT COALESCE(COUNT(callid), 0) AS day 
							FROM 1_callhistory h 
							LEFT JOIN 1_groups d ON d.gid = h.gid 
							WHERE 1  AND (DATE(h.`starttime`)  > DATE(DATE_SUB(NOW(), INTERVAL 1 WEEK)))
[2017-05-02 16:31:01]	SQL :	SELECT COALESCE(COUNT(callid), 0) AS day 
							FROM 1_callhistory h 
							LEFT JOIN 1_groups d ON d.gid = h.gid 
							WHERE 1  AND (MONTH(h.`starttime` ) = MONTH(NOW()))
[2017-05-02 16:31:01]	SQL :	SELECT COALESCE(COUNT(pbxid), 0) AS day 
							FROM 1_pbxreport h 
							WHERE 1 AND (DATE(h.`starttime`) = DATE(NOW()))
[2017-05-02 16:31:01]	SQL :	SELECT COALESCE(COUNT(pbxid), 0) AS day 
							FROM 1_pbxreport h 
							WHERE 1  AND (DATE(h.`starttime`)  > DATE(DATE_SUB(NOW(), INTERVAL 1 WEEK)))
[2017-05-02 16:31:01]	SQL :	SELECT COALESCE(COUNT(pbxid), 0) AS day 
							FROM 1_pbxreport h 
							WHERE 1  AND (MONTH(h.`starttime` ) = MONTH(NOW()))
[2017-05-02 16:31:01]	SQL :	SELECT COALESCE(COUNT(hid), 0) AS day 
							   FROM 1_ivrshistory h 
						       WHERE 1 AND (DATE(h.`datetime`) = DATE(NOW()))
[2017-05-02 16:31:01]	SQL :	SELECT COALESCE(COUNT(hid), 0) AS day 
							   FROM 1_ivrshistory h 
						       WHERE 1  AND (DATE(h.`datetime`)  > DATE(DATE_SUB(NOW(), INTERVAL 1 WEEK)))
[2017-05-02 16:31:01]	SQL :	SELECT COALESCE(COUNT(hid), 0) AS day 
							   FROM 1_ivrshistory h 
						       WHERE 1  AND (MONTH(h.`datetime` ) = MONTH(NOW()))
[2017-05-02 16:31:01]	SQL :	SELECT COALESCE(COUNT(leadid), 0) AS day 
							FROM 1_leads a 
							LEFT JOIN 1_leads_groups d ON d.gid = a.gid 
							WHERE (DATE(a.`createdon`) = DATE(NOW()))
[2017-05-02 16:31:01]	SQL :	SELECT COALESCE(COUNT(leadid), 0) AS day 
							FROM 1_leads a 
							LEFT JOIN 1_leads_groups d ON d.gid = a.gid 
							WHERE (DATE(a.`createdon`) = DATE(NOW()))
[2017-05-02 16:31:01]	SQL :	SELECT COALESCE(COUNT(leadid), 0) AS day 
							FROM 1_leads a 
							LEFT JOIN 1_leads_groups d ON d.gid = a.gid 
							WHERE (DATE(a.`createdon`) = DATE(NOW()))
[2017-05-02 16:31:01]	SQL :	SELECT COALESCE(COUNT(tktid), 0) AS day 
							FROM 1_support_tickets a 
							LEFT JOIN 1_support_groups d ON d.gid = a.gid 
							WHERE (DATE(a.`createdon`) = DATE(NOW()))
[2017-05-02 16:31:01]	SQL :	SELECT COALESCE(COUNT(tktid), 0) AS day 
							FROM 1_support_tickets a 
							LEFT JOIN 1_support_groups d ON d.gid = a.gid 
							WHERE (DATE(a.`createdon`) = DATE(NOW()))
[2017-05-02 16:31:01]	SQL :	SELECT COALESCE(COUNT(tktid), 0) AS day 
							FROM 1_support_tickets a 
							LEFT JOIN 1_support_groups d ON d.gid = a.gid 
							WHERE (DATE(a.`createdon`) = DATE(NOW()))
[2017-05-02 16:31:01]	SQL :	SELECT COALESCE(COUNT(callid), 0) AS day 
							FROM 1_outboundcalls h 
							WHERE (DATE(h.`starttime`) = DATE(NOW()))
[2017-05-02 16:31:01]	SQL :	SELECT COALESCE(COUNT(callid), 0) AS day 
							FROM 1_outboundcalls h 
							WHERE (DATE(h.`starttime`) = DATE(NOW()))
[2017-05-02 16:31:01]	SQL :	SELECT COALESCE(COUNT(callid), 0) AS day 
							FROM 1_outboundcalls h 
							WHERE (DATE(h.`starttime`) = DATE(NOW()))
[2017-05-02 16:31:01]	SQL :	SELECT COALESCE(COUNT(callid), 0) AS day 
							FROM 1_mtracker h 
							WHERE (DATE(h.`starttime`) = DATE(NOW()))
[2017-05-02 16:31:01]	SQL :	SELECT COALESCE(COUNT(callid), 0) AS day 
							FROM 1_mtracker h 
							WHERE (DATE(h.`starttime`) = DATE(NOW()))
[2017-05-02 16:31:01]	SQL :	SELECT COALESCE(COUNT(callid), 0) AS day 
							FROM 1_mtracker h 
							WHERE (DATE(h.`starttime`) = DATE(NOW()))
[2017-05-02 16:33:22]	DEBUG :	Config Class Initialized
[2017-05-02 16:33:22]	DEBUG :	Hooks Class Initialized
[2017-05-02 16:33:22]	DEBUG :	URI Class Initialized
[2017-05-02 16:33:22]	DEBUG :	Router Class Initialized
[2017-05-02 16:33:22]	DEBUG :	Output Class Initialized
[2017-05-02 16:33:22]	DEBUG :	Input Class Initialized
[2017-05-02 16:33:22]	DEBUG :	Global POST and COOKIE data sanitized
[2017-05-02 16:33:22]	DEBUG :	Language Class Initialized
[2017-05-02 16:33:22]	DEBUG :	Loader Class Initialized
[2017-05-02 16:33:22]	DEBUG :	Helper loaded: url_helper
[2017-05-02 16:33:22]	DEBUG :	Helper loaded: form_helper
[2017-05-02 16:33:22]	DEBUG :	Helper loaded: html_helper
[2017-05-02 16:33:22]	DEBUG :	Helper loaded: email_helper
[2017-05-02 16:33:22]	DEBUG :	Helper loaded: ckeditor_helper
[2017-05-02 16:33:22]	DEBUG :	Helper loaded: mcube_helper
[2017-05-02 16:33:22]	DEBUG :	Database Driver Class Initialized
[2017-05-02 16:33:22]	ERROR :	Severity: 8192  --> mysql_pconnect(): The mysql extension is deprecated and will be removed in the future: use mysqli or PDO instead /var/www/html/mcnew/system/database/drivers/mysql/mysql_driver.php 88
[2017-05-02 16:33:22]	DEBUG :	Session Class Initialized
[2017-05-02 16:33:22]	DEBUG :	Helper loaded: string_helper
[2017-05-02 16:33:22]	DEBUG :	Encrypt Class Initialized
[2017-05-02 16:33:22]	DEBUG :	A session cookie was not found.
[2017-05-02 16:33:22]	SQL :	INSERT INTO `call_sessions` (`session_id`, `ip_address`, `user_agent`, `last_activity`) VALUES ('641cf3d50af28ac0f04c3b9ef18d53c3', '192.168.1.114', 'Dalvik/2.1.0 (Linux; U; Android 6.0; Panasonic T44', 1493723002)
[2017-05-02 16:33:23]	DEBUG :	Session routines successfully run
[2017-05-02 16:33:23]	DEBUG :	Table Class Initialized
[2017-05-02 16:33:23]	DEBUG :	Pagination Class Initialized
[2017-05-02 16:33:23]	DEBUG :	Config file loaded: config/paypallib_config.php
[2017-05-02 16:33:23]	DEBUG :	Form Validation Class Initialized
[2017-05-02 16:33:23]	DEBUG :	Email Class Initialized
[2017-05-02 16:33:23]	DEBUG :	Language file loaded: language/english/calendar_lang.php
[2017-05-02 16:33:23]	DEBUG :	Calendar Class Initialized
[2017-05-02 16:33:23]	DEBUG :	Controller Class Initialized
[2017-05-02 16:33:23]	DEBUG :	Model Class Initialized
[2017-05-02 16:33:23]	DEBUG :	Model Class Initialized
[2017-05-02 16:33:23]	DEBUG :	Model Class Initialized
[2017-05-02 16:33:23]	DEBUG :	Model Class Initialized
[2017-05-02 16:33:23]	DEBUG :	Model Class Initialized
[2017-05-02 16:33:23]	DEBUG :	Model Class Initialized
[2017-05-02 16:33:23]	DEBUG :	Model Class Initialized
[2017-05-02 16:33:23]	DEBUG :	Model Class Initialized
[2017-05-02 16:33:23]	DEBUG :	Model Class Initialized
[2017-05-02 16:33:23]	DEBUG :	Model Class Initialized
[2017-05-02 16:33:23]	DEBUG :	Model Class Initialized
[2017-05-02 16:33:23]	DEBUG :	Model Class Initialized
[2017-05-02 16:33:23]	DEBUG :	Model Class Initialized
[2017-05-02 16:33:23]	DEBUG :	Model Class Initialized
[2017-05-02 16:33:23]	DEBUG :	Plugin loaded: to_pdf_pi
[2017-05-02 16:33:23]	DEBUG :	Model Class Initialized
[2017-05-02 16:33:23]	DEBUG :	Language file loaded: language/english/form_validation_lang.php
[2017-05-02 16:33:23]	SQL :	SELECT uid,bid,eid FROM `user` WHERE authkey='1.1.d886b8e8a0615'
[2017-05-02 16:33:23]	DEBUG :	Database Driver Class Initialized
[2017-05-02 16:33:23]	SQL :	SELECT roleid FROM 1_employee
							WHERE eid='1'
							AND bid='1'
[2017-05-02 16:33:23]	DEBUG :	Database Driver Class Initialized
[2017-05-02 16:33:23]	SQL :	SELECT * FROM 1_user_role
							WHERE roleid='1'
							AND bid='1'
[2017-05-02 16:33:23]	SQL :	SELECT m.modid,m.modname,m.moddesc,
							COALESCE(o.opt_add,0) as opt_add,
							COALESCE(o.opt_view,0) as opt_view,
							COALESCE(o.opt_download,0) as opt_download,
							COALESCE(opt_delete,0) as opt_delete 
							FROM module m
							LEFT JOIN (SELECT * FROM 1_role_mod_opt
							WHERE roleid='1' 
							AND bid='1') as o
							ON m.modid=o.modid where m.status=1
[2017-05-02 16:33:23]	SQL :	SELECT a.*,f.fieldname FROM 1_role_access a
								LEFT JOIN systemfields f on a.fieldid=f.fieldid
								WHERE a.roleid='1'
								AND a.bid='1'
								AND a.fieldtype='s'
[2017-05-02 16:33:23]	SQL :	SELECT * FROM 1_role_access
								WHERE roleid='1'
								AND bid='1'
							AND fieldtype='c'
[2017-05-02 16:33:23]	SQL :	SELECT pri.landingnumber,pri.used,pri.climit,
								if(pri.status=0,'Not in use',
								if(pri.type='0','Calltrack',
								if(pri.type='1','IVRS',
								if(pri.type='2','PBX','Not Assign')))) as type,
								pri.associateid,
								if(pri.status=0,'None',
								if(pri.type='0',g.groupname,
								if(pri.type='1',i.title,
								if(pri.type='2',pbx.title,'None')))) as title,
								if(pri.status=0,'None',
								if(pri.type='0',ch.lastcall,
								if(pri.type='1',ih.lastcall,
								if(pri.type='2',ph.lastcall,'None')))) as lastcall
								FROM prinumbers pri
								LEFT JOIN 1_groups g on (g.prinumber=pri.number AND g.gid=pri.associateid AND g.status=1)
								LEFT JOIN 1_ivrs i on (i.prinumber=pri.number AND i.ivrsid=pri.associateid AND i.status=1)
								LEFT JOIN 1_pbx pbx on (pbx.prinumber=pri.number AND pbx.pbxid=pri.associateid AND pbx.status=1)
								LEFT JOIN (SELECT g.gid,max(h.starttime) as lastcall FROM 1_groups g LEFT JOIN 1_callhistory h on g.gid=h.gid GROUP BY g.gid) ch on g.gid=ch.gid
								LEFT JOIN (SELECT i.ivrsid,max(h.datetime) as lastcall FROM 1_ivrs i LEFT JOIN 1_ivrshistory h on i.ivrsid=h.ivrsid GROUP BY i.ivrsid) ih on i.ivrsid=ih.ivrsid
								LEFT JOIN (SELECT p.pbxid,max(h.starttime) as lastcall FROM 1_pbx p LEFT JOIN 1_pbxreport h on p.pbxid=h.pbxid GROUP BY p.pbxid) ph on pbx.pbxid=ph.pbxid
								WHERE pri.bid=1
[2017-05-02 16:33:23]	SQL :	SELECT balance FROM sms_bal  where bid='1'
[2017-05-02 16:33:23]	SQL :	SELECT balance FROM call_bal where bid='1'
[2017-05-02 16:33:23]	SQL :	SELECT DISTINCT(e.eid),e.empname,eb.start_time FROM 1_employee e
		                       LEFT JOIN 1_emp_break eb ON e.eid = eb.eid
		                       LEFT JOIN 1_groups d ON e.eid = d.eid
		                       WHERE eb.end_time='0000-00-00' AND e.selfdisable=1  GROUP BY d.gid,e.eid
[2017-05-02 16:33:23]	SQL :	SELECT COALESCE(COUNT(callid), 0) AS day 
							FROM 1_callhistory h 
							LEFT JOIN 1_groups d ON d.gid = h.gid 
							WHERE 1 AND (DATE(h.`starttime`) = DATE(NOW()))
[2017-05-02 16:33:23]	SQL :	SELECT COALESCE(COUNT(callid), 0) AS day 
							FROM 1_callhistory h 
							LEFT JOIN 1_groups d ON d.gid = h.gid 
							WHERE 1  AND (DATE(h.`starttime`)  > DATE(DATE_SUB(NOW(), INTERVAL 1 WEEK)))
[2017-05-02 16:33:23]	SQL :	SELECT COALESCE(COUNT(callid), 0) AS day 
							FROM 1_callhistory h 
							LEFT JOIN 1_groups d ON d.gid = h.gid 
							WHERE 1  AND (MONTH(h.`starttime` ) = MONTH(NOW()))
[2017-05-02 16:33:23]	SQL :	SELECT COALESCE(COUNT(pbxid), 0) AS day 
							FROM 1_pbxreport h 
							WHERE 1 AND (DATE(h.`starttime`) = DATE(NOW()))
[2017-05-02 16:33:23]	SQL :	SELECT COALESCE(COUNT(pbxid), 0) AS day 
							FROM 1_pbxreport h 
							WHERE 1  AND (DATE(h.`starttime`)  > DATE(DATE_SUB(NOW(), INTERVAL 1 WEEK)))
[2017-05-02 16:33:23]	SQL :	SELECT COALESCE(COUNT(pbxid), 0) AS day 
							FROM 1_pbxreport h 
							WHERE 1  AND (MONTH(h.`starttime` ) = MONTH(NOW()))
[2017-05-02 16:33:23]	SQL :	SELECT COALESCE(COUNT(hid), 0) AS day 
							   FROM 1_ivrshistory h 
						       WHERE 1 AND (DATE(h.`datetime`) = DATE(NOW()))
[2017-05-02 16:33:23]	SQL :	SELECT COALESCE(COUNT(hid), 0) AS day 
							   FROM 1_ivrshistory h 
						       WHERE 1  AND (DATE(h.`datetime`)  > DATE(DATE_SUB(NOW(), INTERVAL 1 WEEK)))
[2017-05-02 16:33:23]	SQL :	SELECT COALESCE(COUNT(hid), 0) AS day 
							   FROM 1_ivrshistory h 
						       WHERE 1  AND (MONTH(h.`datetime` ) = MONTH(NOW()))
[2017-05-02 16:33:23]	SQL :	SELECT COALESCE(COUNT(leadid), 0) AS day 
							FROM 1_leads a 
							LEFT JOIN 1_leads_groups d ON d.gid = a.gid 
							WHERE (DATE(a.`createdon`) = DATE(NOW()))
[2017-05-02 16:33:23]	SQL :	SELECT COALESCE(COUNT(leadid), 0) AS day 
							FROM 1_leads a 
							LEFT JOIN 1_leads_groups d ON d.gid = a.gid 
							WHERE (DATE(a.`createdon`) = DATE(NOW()))
[2017-05-02 16:33:23]	SQL :	SELECT COALESCE(COUNT(leadid), 0) AS day 
							FROM 1_leads a 
							LEFT JOIN 1_leads_groups d ON d.gid = a.gid 
							WHERE (DATE(a.`createdon`) = DATE(NOW()))
[2017-05-02 16:33:23]	SQL :	SELECT COALESCE(COUNT(tktid), 0) AS day 
							FROM 1_support_tickets a 
							LEFT JOIN 1_support_groups d ON d.gid = a.gid 
							WHERE (DATE(a.`createdon`) = DATE(NOW()))
[2017-05-02 16:33:23]	SQL :	SELECT COALESCE(COUNT(tktid), 0) AS day 
							FROM 1_support_tickets a 
							LEFT JOIN 1_support_groups d ON d.gid = a.gid 
							WHERE (DATE(a.`createdon`) = DATE(NOW()))
[2017-05-02 16:33:23]	SQL :	SELECT COALESCE(COUNT(tktid), 0) AS day 
							FROM 1_support_tickets a 
							LEFT JOIN 1_support_groups d ON d.gid = a.gid 
							WHERE (DATE(a.`createdon`) = DATE(NOW()))
[2017-05-02 16:33:23]	SQL :	SELECT COALESCE(COUNT(callid), 0) AS day 
							FROM 1_outboundcalls h 
							WHERE (DATE(h.`starttime`) = DATE(NOW()))
[2017-05-02 16:33:23]	SQL :	SELECT COALESCE(COUNT(callid), 0) AS day 
							FROM 1_outboundcalls h 
							WHERE (DATE(h.`starttime`) = DATE(NOW()))
[2017-05-02 16:33:23]	SQL :	SELECT COALESCE(COUNT(callid), 0) AS day 
							FROM 1_outboundcalls h 
							WHERE (DATE(h.`starttime`) = DATE(NOW()))
[2017-05-02 16:33:23]	SQL :	SELECT COALESCE(COUNT(callid), 0) AS day 
							FROM 1_mtracker h 
							WHERE (DATE(h.`starttime`) = DATE(NOW()))
[2017-05-02 16:33:23]	SQL :	SELECT COALESCE(COUNT(callid), 0) AS day 
							FROM 1_mtracker h 
							WHERE (DATE(h.`starttime`) = DATE(NOW()))
[2017-05-02 16:33:23]	SQL :	SELECT COALESCE(COUNT(callid), 0) AS day 
							FROM 1_mtracker h 
							WHERE (DATE(h.`starttime`) = DATE(NOW()))
[2017-05-02 16:48:32]	DEBUG :	Config Class Initialized
[2017-05-02 16:48:32]	DEBUG :	Hooks Class Initialized
[2017-05-02 16:48:32]	DEBUG :	URI Class Initialized
[2017-05-02 16:48:32]	DEBUG :	Router Class Initialized
[2017-05-02 16:48:32]	DEBUG :	Output Class Initialized
[2017-05-02 16:48:32]	DEBUG :	Input Class Initialized
[2017-05-02 16:48:32]	DEBUG :	Global POST and COOKIE data sanitized
[2017-05-02 16:48:32]	DEBUG :	Language Class Initialized
[2017-05-02 16:48:32]	DEBUG :	Loader Class Initialized
[2017-05-02 16:48:32]	DEBUG :	Helper loaded: url_helper
[2017-05-02 16:48:32]	DEBUG :	Helper loaded: form_helper
[2017-05-02 16:48:32]	DEBUG :	Helper loaded: html_helper
[2017-05-02 16:48:32]	DEBUG :	Helper loaded: email_helper
[2017-05-02 16:48:32]	DEBUG :	Helper loaded: ckeditor_helper
[2017-05-02 16:48:32]	DEBUG :	Helper loaded: mcube_helper
[2017-05-02 16:48:32]	DEBUG :	Database Driver Class Initialized
[2017-05-02 16:48:32]	ERROR :	Severity: 8192  --> mysql_pconnect(): The mysql extension is deprecated and will be removed in the future: use mysqli or PDO instead /var/www/html/mcnew/system/database/drivers/mysql/mysql_driver.php 88
[2017-05-02 16:48:32]	DEBUG :	Session Class Initialized
[2017-05-02 16:48:32]	DEBUG :	Helper loaded: string_helper
[2017-05-02 16:48:32]	DEBUG :	Encrypt Class Initialized
[2017-05-02 16:48:32]	DEBUG :	A session cookie was not found.
[2017-05-02 16:48:32]	SQL :	INSERT INTO `call_sessions` (`session_id`, `ip_address`, `user_agent`, `last_activity`) VALUES ('76770e2d981c42ed906807ea3f0a43e9', '192.168.1.114', 'Dalvik/2.1.0 (Linux; U; Android 6.0; Panasonic T44', 1493723912)
[2017-05-02 16:48:33]	DEBUG :	Session routines successfully run
[2017-05-02 16:48:33]	DEBUG :	Table Class Initialized
[2017-05-02 16:48:33]	DEBUG :	Pagination Class Initialized
[2017-05-02 16:48:33]	DEBUG :	Config file loaded: config/paypallib_config.php
[2017-05-02 16:48:33]	DEBUG :	Form Validation Class Initialized
[2017-05-02 16:48:33]	DEBUG :	Email Class Initialized
[2017-05-02 16:48:33]	DEBUG :	Language file loaded: language/english/calendar_lang.php
[2017-05-02 16:48:33]	DEBUG :	Calendar Class Initialized
[2017-05-02 16:48:33]	DEBUG :	Controller Class Initialized
[2017-05-02 16:48:33]	DEBUG :	Model Class Initialized
[2017-05-02 16:48:33]	DEBUG :	Model Class Initialized
[2017-05-02 16:48:33]	DEBUG :	Model Class Initialized
[2017-05-02 16:48:33]	DEBUG :	Model Class Initialized
[2017-05-02 16:48:33]	DEBUG :	Model Class Initialized
[2017-05-02 16:48:33]	DEBUG :	Model Class Initialized
[2017-05-02 16:48:33]	DEBUG :	Model Class Initialized
[2017-05-02 16:48:33]	DEBUG :	Model Class Initialized
[2017-05-02 16:48:33]	DEBUG :	Model Class Initialized
[2017-05-02 16:48:33]	DEBUG :	Model Class Initialized
[2017-05-02 16:48:33]	DEBUG :	Model Class Initialized
[2017-05-02 16:48:33]	DEBUG :	Model Class Initialized
[2017-05-02 16:48:33]	DEBUG :	Model Class Initialized
[2017-05-02 16:48:33]	DEBUG :	Model Class Initialized
[2017-05-02 16:48:33]	DEBUG :	Plugin loaded: to_pdf_pi
[2017-05-02 16:48:33]	DEBUG :	Model Class Initialized
[2017-05-02 16:48:33]	DEBUG :	Language file loaded: language/english/form_validation_lang.php
[2017-05-02 16:48:33]	SQL :	SELECT uid,bid,eid FROM `user` WHERE authkey='1.1.d886b8e8a0615'
[2017-05-02 16:48:33]	DEBUG :	Database Driver Class Initialized
[2017-05-02 16:48:33]	SQL :	SELECT roleid FROM 1_employee
							WHERE eid='1'
							AND bid='1'
[2017-05-02 16:48:33]	DEBUG :	Database Driver Class Initialized
[2017-05-02 16:48:33]	SQL :	SELECT * FROM 1_user_role
							WHERE roleid='1'
							AND bid='1'
[2017-05-02 16:48:33]	SQL :	SELECT m.modid,m.modname,m.moddesc,
							COALESCE(o.opt_add,0) as opt_add,
							COALESCE(o.opt_view,0) as opt_view,
							COALESCE(o.opt_download,0) as opt_download,
							COALESCE(opt_delete,0) as opt_delete 
							FROM module m
							LEFT JOIN (SELECT * FROM 1_role_mod_opt
							WHERE roleid='1' 
							AND bid='1') as o
							ON m.modid=o.modid where m.status=1
[2017-05-02 16:48:33]	SQL :	SELECT a.*,f.fieldname FROM 1_role_access a
								LEFT JOIN systemfields f on a.fieldid=f.fieldid
								WHERE a.roleid='1'
								AND a.bid='1'
								AND a.fieldtype='s'
[2017-05-02 16:48:33]	SQL :	SELECT * FROM 1_role_access
								WHERE roleid='1'
								AND bid='1'
							AND fieldtype='c'
[2017-05-02 16:48:33]	SQL :	SELECT pri.landingnumber,pri.used,pri.climit,
								if(pri.status=0,'Not in use',
								if(pri.type='0','Calltrack',
								if(pri.type='1','IVRS',
								if(pri.type='2','PBX','Not Assign')))) as type,
								pri.associateid,
								if(pri.status=0,'None',
								if(pri.type='0',g.groupname,
								if(pri.type='1',i.title,
								if(pri.type='2',pbx.title,'None')))) as title,
								if(pri.status=0,'None',
								if(pri.type='0',ch.lastcall,
								if(pri.type='1',ih.lastcall,
								if(pri.type='2',ph.lastcall,'None')))) as lastcall
								FROM prinumbers pri
								LEFT JOIN 1_groups g on (g.prinumber=pri.number AND g.gid=pri.associateid AND g.status=1)
								LEFT JOIN 1_ivrs i on (i.prinumber=pri.number AND i.ivrsid=pri.associateid AND i.status=1)
								LEFT JOIN 1_pbx pbx on (pbx.prinumber=pri.number AND pbx.pbxid=pri.associateid AND pbx.status=1)
								LEFT JOIN (SELECT g.gid,max(h.starttime) as lastcall FROM 1_groups g LEFT JOIN 1_callhistory h on g.gid=h.gid GROUP BY g.gid) ch on g.gid=ch.gid
								LEFT JOIN (SELECT i.ivrsid,max(h.datetime) as lastcall FROM 1_ivrs i LEFT JOIN 1_ivrshistory h on i.ivrsid=h.ivrsid GROUP BY i.ivrsid) ih on i.ivrsid=ih.ivrsid
								LEFT JOIN (SELECT p.pbxid,max(h.starttime) as lastcall FROM 1_pbx p LEFT JOIN 1_pbxreport h on p.pbxid=h.pbxid GROUP BY p.pbxid) ph on pbx.pbxid=ph.pbxid
								WHERE pri.bid=1
[2017-05-02 16:48:33]	SQL :	SELECT balance FROM sms_bal  where bid='1'
[2017-05-02 16:48:33]	SQL :	SELECT balance FROM call_bal where bid='1'
[2017-05-02 16:48:33]	SQL :	SELECT DISTINCT(e.eid),e.empname,eb.start_time FROM 1_employee e
		                       LEFT JOIN 1_emp_break eb ON e.eid = eb.eid
		                       LEFT JOIN 1_groups d ON e.eid = d.eid
		                       WHERE eb.end_time='0000-00-00' AND e.selfdisable=1  GROUP BY d.gid,e.eid
[2017-05-02 16:48:33]	SQL :	SELECT COALESCE(COUNT(callid), 0) AS day 
							FROM 1_callhistory h 
							LEFT JOIN 1_groups d ON d.gid = h.gid 
							WHERE 1 AND (DATE(h.`starttime`) = DATE(NOW()))
[2017-05-02 16:48:33]	SQL :	SELECT COALESCE(COUNT(callid), 0) AS day 
							FROM 1_callhistory h 
							LEFT JOIN 1_groups d ON d.gid = h.gid 
							WHERE 1  AND (DATE(h.`starttime`)  > DATE(DATE_SUB(NOW(), INTERVAL 1 WEEK)))
[2017-05-02 16:48:33]	SQL :	SELECT COALESCE(COUNT(callid), 0) AS day 
							FROM 1_callhistory h 
							LEFT JOIN 1_groups d ON d.gid = h.gid 
							WHERE 1  AND (MONTH(h.`starttime` ) = MONTH(NOW()))
[2017-05-02 16:48:33]	SQL :	SELECT COALESCE(COUNT(pbxid), 0) AS day 
							FROM 1_pbxreport h 
							WHERE 1 AND (DATE(h.`starttime`) = DATE(NOW()))
[2017-05-02 16:48:33]	SQL :	SELECT COALESCE(COUNT(pbxid), 0) AS day 
							FROM 1_pbxreport h 
							WHERE 1  AND (DATE(h.`starttime`)  > DATE(DATE_SUB(NOW(), INTERVAL 1 WEEK)))
[2017-05-02 16:48:33]	SQL :	SELECT COALESCE(COUNT(pbxid), 0) AS day 
							FROM 1_pbxreport h 
							WHERE 1  AND (MONTH(h.`starttime` ) = MONTH(NOW()))
[2017-05-02 16:48:33]	SQL :	SELECT COALESCE(COUNT(hid), 0) AS day 
							   FROM 1_ivrshistory h 
						       WHERE 1 AND (DATE(h.`datetime`) = DATE(NOW()))
[2017-05-02 16:48:33]	SQL :	SELECT COALESCE(COUNT(hid), 0) AS day 
							   FROM 1_ivrshistory h 
						       WHERE 1  AND (DATE(h.`datetime`)  > DATE(DATE_SUB(NOW(), INTERVAL 1 WEEK)))
[2017-05-02 16:48:33]	SQL :	SELECT COALESCE(COUNT(hid), 0) AS day 
							   FROM 1_ivrshistory h 
						       WHERE 1  AND (MONTH(h.`datetime` ) = MONTH(NOW()))
[2017-05-02 16:48:33]	SQL :	SELECT COALESCE(COUNT(leadid), 0) AS day 
							FROM 1_leads a 
							LEFT JOIN 1_leads_groups d ON d.gid = a.gid 
							WHERE (DATE(a.`createdon`) = DATE(NOW()))
[2017-05-02 16:48:33]	SQL :	SELECT COALESCE(COUNT(leadid), 0) AS day 
							FROM 1_leads a 
							LEFT JOIN 1_leads_groups d ON d.gid = a.gid 
							WHERE (DATE(a.`createdon`) = DATE(NOW()))
[2017-05-02 16:48:33]	SQL :	SELECT COALESCE(COUNT(leadid), 0) AS day 
							FROM 1_leads a 
							LEFT JOIN 1_leads_groups d ON d.gid = a.gid 
							WHERE (DATE(a.`createdon`) = DATE(NOW()))
[2017-05-02 16:48:33]	SQL :	SELECT COALESCE(COUNT(tktid), 0) AS day 
							FROM 1_support_tickets a 
							LEFT JOIN 1_support_groups d ON d.gid = a.gid 
							WHERE (DATE(a.`createdon`) = DATE(NOW()))
[2017-05-02 16:48:33]	SQL :	SELECT COALESCE(COUNT(tktid), 0) AS day 
							FROM 1_support_tickets a 
							LEFT JOIN 1_support_groups d ON d.gid = a.gid 
							WHERE (DATE(a.`createdon`) = DATE(NOW()))
[2017-05-02 16:48:33]	SQL :	SELECT COALESCE(COUNT(tktid), 0) AS day 
							FROM 1_support_tickets a 
							LEFT JOIN 1_support_groups d ON d.gid = a.gid 
							WHERE (DATE(a.`createdon`) = DATE(NOW()))
[2017-05-02 16:48:33]	SQL :	SELECT COALESCE(COUNT(callid), 0) AS day 
							FROM 1_outboundcalls h 
							WHERE (DATE(h.`starttime`) = DATE(NOW()))
[2017-05-02 16:48:33]	SQL :	SELECT COALESCE(COUNT(callid), 0) AS day 
							FROM 1_outboundcalls h 
							WHERE (DATE(h.`starttime`) = DATE(NOW()))
[2017-05-02 16:48:33]	SQL :	SELECT COALESCE(COUNT(callid), 0) AS day 
							FROM 1_outboundcalls h 
							WHERE (DATE(h.`starttime`) = DATE(NOW()))
[2017-05-02 16:48:33]	SQL :	SELECT COALESCE(COUNT(callid), 0) AS day 
							FROM 1_mtracker h 
							WHERE (DATE(h.`starttime`) = DATE(NOW()))
[2017-05-02 16:48:33]	SQL :	SELECT COALESCE(COUNT(callid), 0) AS day 
							FROM 1_mtracker h 
							WHERE (DATE(h.`starttime`) = DATE(NOW()))
[2017-05-02 16:48:33]	SQL :	SELECT COALESCE(COUNT(callid), 0) AS day 
							FROM 1_mtracker h 
							WHERE (DATE(h.`starttime`) = DATE(NOW()))
[2017-05-02 16:49:11]	DEBUG :	Config Class Initialized
[2017-05-02 16:49:11]	DEBUG :	Hooks Class Initialized
[2017-05-02 16:49:11]	DEBUG :	URI Class Initialized
[2017-05-02 16:49:11]	DEBUG :	Router Class Initialized
[2017-05-02 16:49:11]	DEBUG :	Output Class Initialized
[2017-05-02 16:49:11]	DEBUG :	Input Class Initialized
[2017-05-02 16:49:11]	DEBUG :	Global POST and COOKIE data sanitized
[2017-05-02 16:49:11]	DEBUG :	Language Class Initialized
[2017-05-02 16:49:11]	DEBUG :	Loader Class Initialized
[2017-05-02 16:49:11]	DEBUG :	Helper loaded: url_helper
[2017-05-02 16:49:11]	DEBUG :	Helper loaded: form_helper
[2017-05-02 16:49:11]	DEBUG :	Helper loaded: html_helper
[2017-05-02 16:49:11]	DEBUG :	Helper loaded: email_helper
[2017-05-02 16:49:11]	DEBUG :	Helper loaded: ckeditor_helper
[2017-05-02 16:49:11]	DEBUG :	Helper loaded: mcube_helper
[2017-05-02 16:49:11]	DEBUG :	Database Driver Class Initialized
[2017-05-02 16:49:11]	ERROR :	Severity: 8192  --> mysql_pconnect(): The mysql extension is deprecated and will be removed in the future: use mysqli or PDO instead /var/www/html/mcnew/system/database/drivers/mysql/mysql_driver.php 88
[2017-05-02 16:49:11]	DEBUG :	Session Class Initialized
[2017-05-02 16:49:11]	DEBUG :	Helper loaded: string_helper
[2017-05-02 16:49:11]	DEBUG :	Encrypt Class Initialized
[2017-05-02 16:49:11]	DEBUG :	A session cookie was not found.
[2017-05-02 16:49:11]	SQL :	INSERT INTO `call_sessions` (`session_id`, `ip_address`, `user_agent`, `last_activity`) VALUES ('9f9a625d888dba64efb410e53530ee3c', '192.168.1.114', 'Dalvik/2.1.0 (Linux; U; Android 6.0; Panasonic T44', 1493723951)
[2017-05-02 16:49:11]	DEBUG :	Session routines successfully run
[2017-05-02 16:49:11]	DEBUG :	Table Class Initialized
[2017-05-02 16:49:11]	DEBUG :	Pagination Class Initialized
[2017-05-02 16:49:11]	DEBUG :	Config file loaded: config/paypallib_config.php
[2017-05-02 16:49:11]	DEBUG :	Form Validation Class Initialized
[2017-05-02 16:49:11]	DEBUG :	Email Class Initialized
[2017-05-02 16:49:11]	DEBUG :	Language file loaded: language/english/calendar_lang.php
[2017-05-02 16:49:11]	DEBUG :	Calendar Class Initialized
[2017-05-02 16:49:11]	DEBUG :	Controller Class Initialized
[2017-05-02 16:49:11]	DEBUG :	Model Class Initialized
[2017-05-02 16:49:11]	DEBUG :	Model Class Initialized
[2017-05-02 16:49:11]	DEBUG :	Model Class Initialized
[2017-05-02 16:49:11]	DEBUG :	Model Class Initialized
[2017-05-02 16:49:11]	DEBUG :	Model Class Initialized
[2017-05-02 16:49:11]	DEBUG :	Model Class Initialized
[2017-05-02 16:49:11]	DEBUG :	Model Class Initialized
[2017-05-02 16:49:11]	DEBUG :	Model Class Initialized
[2017-05-02 16:49:11]	DEBUG :	Model Class Initialized
[2017-05-02 16:49:11]	DEBUG :	Model Class Initialized
[2017-05-02 16:49:11]	DEBUG :	Model Class Initialized
[2017-05-02 16:49:11]	DEBUG :	Model Class Initialized
[2017-05-02 16:49:11]	DEBUG :	Model Class Initialized
[2017-05-02 16:49:11]	DEBUG :	Model Class Initialized
[2017-05-02 16:49:11]	DEBUG :	Plugin loaded: to_pdf_pi
[2017-05-02 16:49:11]	DEBUG :	Model Class Initialized
[2017-05-02 16:49:11]	DEBUG :	Language file loaded: language/english/form_validation_lang.php
[2017-05-02 16:49:11]	SQL :	SELECT uid,bid,eid FROM `user` WHERE authkey='1.1.d886b8e8a0615'
[2017-05-02 16:49:11]	DEBUG :	Database Driver Class Initialized
[2017-05-02 16:49:11]	SQL :	SELECT roleid FROM 1_employee
							WHERE eid='1'
							AND bid='1'
[2017-05-02 16:49:11]	DEBUG :	Database Driver Class Initialized
[2017-05-02 16:49:11]	SQL :	SELECT * FROM 1_user_role
							WHERE roleid='1'
							AND bid='1'
[2017-05-02 16:49:11]	SQL :	SELECT m.modid,m.modname,m.moddesc,
							COALESCE(o.opt_add,0) as opt_add,
							COALESCE(o.opt_view,0) as opt_view,
							COALESCE(o.opt_download,0) as opt_download,
							COALESCE(opt_delete,0) as opt_delete 
							FROM module m
							LEFT JOIN (SELECT * FROM 1_role_mod_opt
							WHERE roleid='1' 
							AND bid='1') as o
							ON m.modid=o.modid where m.status=1
[2017-05-02 16:49:11]	SQL :	SELECT a.*,f.fieldname FROM 1_role_access a
								LEFT JOIN systemfields f on a.fieldid=f.fieldid
								WHERE a.roleid='1'
								AND a.bid='1'
								AND a.fieldtype='s'
[2017-05-02 16:49:11]	SQL :	SELECT * FROM 1_role_access
								WHERE roleid='1'
								AND bid='1'
							AND fieldtype='c'
[2017-05-02 16:49:11]	SQL :	SELECT pri.landingnumber,pri.used,pri.climit,
								if(pri.status=0,'Not in use',
								if(pri.type='0','Calltrack',
								if(pri.type='1','IVRS',
								if(pri.type='2','PBX','Not Assign')))) as type,
								pri.associateid,
								if(pri.status=0,'None',
								if(pri.type='0',g.groupname,
								if(pri.type='1',i.title,
								if(pri.type='2',pbx.title,'None')))) as title,
								if(pri.status=0,'None',
								if(pri.type='0',ch.lastcall,
								if(pri.type='1',ih.lastcall,
								if(pri.type='2',ph.lastcall,'None')))) as lastcall
								FROM prinumbers pri
								LEFT JOIN 1_groups g on (g.prinumber=pri.number AND g.gid=pri.associateid AND g.status=1)
								LEFT JOIN 1_ivrs i on (i.prinumber=pri.number AND i.ivrsid=pri.associateid AND i.status=1)
								LEFT JOIN 1_pbx pbx on (pbx.prinumber=pri.number AND pbx.pbxid=pri.associateid AND pbx.status=1)
								LEFT JOIN (SELECT g.gid,max(h.starttime) as lastcall FROM 1_groups g LEFT JOIN 1_callhistory h on g.gid=h.gid GROUP BY g.gid) ch on g.gid=ch.gid
								LEFT JOIN (SELECT i.ivrsid,max(h.datetime) as lastcall FROM 1_ivrs i LEFT JOIN 1_ivrshistory h on i.ivrsid=h.ivrsid GROUP BY i.ivrsid) ih on i.ivrsid=ih.ivrsid
								LEFT JOIN (SELECT p.pbxid,max(h.starttime) as lastcall FROM 1_pbx p LEFT JOIN 1_pbxreport h on p.pbxid=h.pbxid GROUP BY p.pbxid) ph on pbx.pbxid=ph.pbxid
								WHERE pri.bid=1
[2017-05-02 16:49:11]	SQL :	SELECT balance FROM sms_bal  where bid='1'
[2017-05-02 16:49:11]	SQL :	SELECT balance FROM call_bal where bid='1'
[2017-05-02 16:49:11]	SQL :	SELECT DISTINCT(e.eid),e.empname,eb.start_time FROM 1_employee e
		                       LEFT JOIN 1_emp_break eb ON e.eid = eb.eid
		                       LEFT JOIN 1_groups d ON e.eid = d.eid
		                       WHERE eb.end_time='0000-00-00' AND e.selfdisable=1  GROUP BY d.gid,e.eid
[2017-05-02 16:49:11]	SQL :	SELECT COALESCE(COUNT(callid), 0) AS day 
							FROM 1_callhistory h 
							LEFT JOIN 1_groups d ON d.gid = h.gid 
							WHERE 1 AND (DATE(h.`starttime`) = DATE(NOW()))
[2017-05-02 16:49:11]	SQL :	SELECT COALESCE(COUNT(callid), 0) AS day 
							FROM 1_callhistory h 
							LEFT JOIN 1_groups d ON d.gid = h.gid 
							WHERE 1  AND (DATE(h.`starttime`)  > DATE(DATE_SUB(NOW(), INTERVAL 1 WEEK)))
[2017-05-02 16:49:11]	SQL :	SELECT COALESCE(COUNT(callid), 0) AS day 
							FROM 1_callhistory h 
							LEFT JOIN 1_groups d ON d.gid = h.gid 
							WHERE 1  AND (MONTH(h.`starttime` ) = MONTH(NOW()))
[2017-05-02 16:49:11]	SQL :	SELECT COALESCE(COUNT(pbxid), 0) AS day 
							FROM 1_pbxreport h 
							WHERE 1 AND (DATE(h.`starttime`) = DATE(NOW()))
[2017-05-02 16:49:11]	SQL :	SELECT COALESCE(COUNT(pbxid), 0) AS day 
							FROM 1_pbxreport h 
							WHERE 1  AND (DATE(h.`starttime`)  > DATE(DATE_SUB(NOW(), INTERVAL 1 WEEK)))
[2017-05-02 16:49:11]	SQL :	SELECT COALESCE(COUNT(pbxid), 0) AS day 
							FROM 1_pbxreport h 
							WHERE 1  AND (MONTH(h.`starttime` ) = MONTH(NOW()))
[2017-05-02 16:49:11]	SQL :	SELECT COALESCE(COUNT(hid), 0) AS day 
							   FROM 1_ivrshistory h 
						       WHERE 1 AND (DATE(h.`datetime`) = DATE(NOW()))
[2017-05-02 16:49:11]	SQL :	SELECT COALESCE(COUNT(hid), 0) AS day 
							   FROM 1_ivrshistory h 
						       WHERE 1  AND (DATE(h.`datetime`)  > DATE(DATE_SUB(NOW(), INTERVAL 1 WEEK)))
[2017-05-02 16:49:11]	SQL :	SELECT COALESCE(COUNT(hid), 0) AS day 
							   FROM 1_ivrshistory h 
						       WHERE 1  AND (MONTH(h.`datetime` ) = MONTH(NOW()))
[2017-05-02 16:49:11]	SQL :	SELECT COALESCE(COUNT(leadid), 0) AS day 
							FROM 1_leads a 
							LEFT JOIN 1_leads_groups d ON d.gid = a.gid 
							WHERE (DATE(a.`createdon`) = DATE(NOW()))
[2017-05-02 16:49:11]	SQL :	SELECT COALESCE(COUNT(leadid), 0) AS day 
							FROM 1_leads a 
							LEFT JOIN 1_leads_groups d ON d.gid = a.gid 
							WHERE (DATE(a.`createdon`) = DATE(NOW()))
[2017-05-02 16:49:11]	SQL :	SELECT COALESCE(COUNT(leadid), 0) AS day 
							FROM 1_leads a 
							LEFT JOIN 1_leads_groups d ON d.gid = a.gid 
							WHERE (DATE(a.`createdon`) = DATE(NOW()))
[2017-05-02 16:49:11]	SQL :	SELECT COALESCE(COUNT(tktid), 0) AS day 
							FROM 1_support_tickets a 
							LEFT JOIN 1_support_groups d ON d.gid = a.gid 
							WHERE (DATE(a.`createdon`) = DATE(NOW()))
[2017-05-02 16:49:11]	SQL :	SELECT COALESCE(COUNT(tktid), 0) AS day 
							FROM 1_support_tickets a 
							LEFT JOIN 1_support_groups d ON d.gid = a.gid 
							WHERE (DATE(a.`createdon`) = DATE(NOW()))
[2017-05-02 16:49:11]	SQL :	SELECT COALESCE(COUNT(tktid), 0) AS day 
							FROM 1_support_tickets a 
							LEFT JOIN 1_support_groups d ON d.gid = a.gid 
							WHERE (DATE(a.`createdon`) = DATE(NOW()))
[2017-05-02 16:49:11]	SQL :	SELECT COALESCE(COUNT(callid), 0) AS day 
							FROM 1_outboundcalls h 
							WHERE (DATE(h.`starttime`) = DATE(NOW()))
[2017-05-02 16:49:11]	SQL :	SELECT COALESCE(COUNT(callid), 0) AS day 
							FROM 1_outboundcalls h 
							WHERE (DATE(h.`starttime`) = DATE(NOW()))
[2017-05-02 16:49:11]	SQL :	SELECT COALESCE(COUNT(callid), 0) AS day 
							FROM 1_outboundcalls h 
							WHERE (DATE(h.`starttime`) = DATE(NOW()))
[2017-05-02 16:49:11]	SQL :	SELECT COALESCE(COUNT(callid), 0) AS day 
							FROM 1_mtracker h 
							WHERE (DATE(h.`starttime`) = DATE(NOW()))
[2017-05-02 16:49:11]	SQL :	SELECT COALESCE(COUNT(callid), 0) AS day 
							FROM 1_mtracker h 
							WHERE (DATE(h.`starttime`) = DATE(NOW()))
[2017-05-02 16:49:11]	SQL :	SELECT COALESCE(COUNT(callid), 0) AS day 
							FROM 1_mtracker h 
							WHERE (DATE(h.`starttime`) = DATE(NOW()))
[2017-05-02 16:50:04]	DEBUG :	Config Class Initialized
[2017-05-02 16:50:04]	DEBUG :	Hooks Class Initialized
[2017-05-02 16:50:04]	DEBUG :	URI Class Initialized
[2017-05-02 16:50:04]	DEBUG :	Router Class Initialized
[2017-05-02 16:50:04]	DEBUG :	Output Class Initialized
[2017-05-02 16:50:04]	DEBUG :	Input Class Initialized
[2017-05-02 16:50:04]	DEBUG :	Global POST and COOKIE data sanitized
[2017-05-02 16:50:04]	DEBUG :	Language Class Initialized
[2017-05-02 16:50:04]	DEBUG :	Loader Class Initialized
[2017-05-02 16:50:04]	DEBUG :	Helper loaded: url_helper
[2017-05-02 16:50:04]	DEBUG :	Helper loaded: form_helper
[2017-05-02 16:50:04]	DEBUG :	Helper loaded: html_helper
[2017-05-02 16:50:04]	DEBUG :	Helper loaded: email_helper
[2017-05-02 16:50:04]	DEBUG :	Helper loaded: ckeditor_helper
[2017-05-02 16:50:04]	DEBUG :	Helper loaded: mcube_helper
[2017-05-02 16:50:04]	DEBUG :	Database Driver Class Initialized
[2017-05-02 16:50:04]	ERROR :	Severity: 8192  --> mysql_pconnect(): The mysql extension is deprecated and will be removed in the future: use mysqli or PDO instead /var/www/html/mcnew/system/database/drivers/mysql/mysql_driver.php 88
[2017-05-02 16:50:04]	DEBUG :	Session Class Initialized
[2017-05-02 16:50:04]	DEBUG :	Helper loaded: string_helper
[2017-05-02 16:50:04]	DEBUG :	Encrypt Class Initialized
[2017-05-02 16:50:04]	DEBUG :	A session cookie was not found.
[2017-05-02 16:50:04]	SQL :	INSERT INTO `call_sessions` (`session_id`, `ip_address`, `user_agent`, `last_activity`) VALUES ('8b0289a93cc602b0046893e537c47620', '192.168.1.114', 'Dalvik/2.1.0 (Linux; U; Android 6.0; Panasonic T44', 1493724004)
[2017-05-02 16:50:04]	DEBUG :	Session routines successfully run
[2017-05-02 16:50:04]	DEBUG :	Table Class Initialized
[2017-05-02 16:50:04]	DEBUG :	Pagination Class Initialized
[2017-05-02 16:50:04]	DEBUG :	Config file loaded: config/paypallib_config.php
[2017-05-02 16:50:04]	DEBUG :	Form Validation Class Initialized
[2017-05-02 16:50:04]	DEBUG :	Email Class Initialized
[2017-05-02 16:50:04]	DEBUG :	Language file loaded: language/english/calendar_lang.php
[2017-05-02 16:50:04]	DEBUG :	Calendar Class Initialized
[2017-05-02 16:50:04]	DEBUG :	Controller Class Initialized
[2017-05-02 16:50:04]	DEBUG :	Model Class Initialized
[2017-05-02 16:50:04]	DEBUG :	Model Class Initialized
[2017-05-02 16:50:04]	DEBUG :	Model Class Initialized
[2017-05-02 16:50:04]	DEBUG :	Model Class Initialized
[2017-05-02 16:50:04]	DEBUG :	Model Class Initialized
[2017-05-02 16:50:04]	DEBUG :	Model Class Initialized
[2017-05-02 16:50:04]	DEBUG :	Model Class Initialized
[2017-05-02 16:50:04]	DEBUG :	Model Class Initialized
[2017-05-02 16:50:04]	DEBUG :	Model Class Initialized
[2017-05-02 16:50:04]	DEBUG :	Model Class Initialized
[2017-05-02 16:50:04]	DEBUG :	Model Class Initialized
[2017-05-02 16:50:04]	DEBUG :	Model Class Initialized
[2017-05-02 16:50:04]	DEBUG :	Model Class Initialized
[2017-05-02 16:50:04]	DEBUG :	Model Class Initialized
[2017-05-02 16:50:04]	DEBUG :	Plugin loaded: to_pdf_pi
[2017-05-02 16:50:04]	DEBUG :	Model Class Initialized
[2017-05-02 16:50:04]	DEBUG :	Language file loaded: language/english/form_validation_lang.php
[2017-05-02 16:50:04]	SQL :	SELECT uid,bid,eid FROM `user` WHERE authkey='1.1.d886b8e8a0615'
[2017-05-02 16:50:04]	DEBUG :	Database Driver Class Initialized
[2017-05-02 16:50:04]	SQL :	SELECT roleid FROM 1_employee
							WHERE eid='1'
							AND bid='1'
[2017-05-02 16:50:04]	DEBUG :	Database Driver Class Initialized
[2017-05-02 16:50:04]	SQL :	SELECT * FROM 1_user_role
							WHERE roleid='1'
							AND bid='1'
[2017-05-02 16:50:04]	SQL :	SELECT m.modid,m.modname,m.moddesc,
							COALESCE(o.opt_add,0) as opt_add,
							COALESCE(o.opt_view,0) as opt_view,
							COALESCE(o.opt_download,0) as opt_download,
							COALESCE(opt_delete,0) as opt_delete 
							FROM module m
							LEFT JOIN (SELECT * FROM 1_role_mod_opt
							WHERE roleid='1' 
							AND bid='1') as o
							ON m.modid=o.modid where m.status=1
[2017-05-02 16:50:04]	SQL :	SELECT a.*,f.fieldname FROM 1_role_access a
								LEFT JOIN systemfields f on a.fieldid=f.fieldid
								WHERE a.roleid='1'
								AND a.bid='1'
								AND a.fieldtype='s'
[2017-05-02 16:50:04]	SQL :	SELECT * FROM 1_role_access
								WHERE roleid='1'
								AND bid='1'
							AND fieldtype='c'
[2017-05-02 16:50:04]	SQL :	SELECT pri.landingnumber,pri.used,pri.climit,
								if(pri.status=0,'Not in use',
								if(pri.type='0','Calltrack',
								if(pri.type='1','IVRS',
								if(pri.type='2','PBX','Not Assign')))) as type,
								pri.associateid,
								if(pri.status=0,'None',
								if(pri.type='0',g.groupname,
								if(pri.type='1',i.title,
								if(pri.type='2',pbx.title,'None')))) as title,
								if(pri.status=0,'None',
								if(pri.type='0',ch.lastcall,
								if(pri.type='1',ih.lastcall,
								if(pri.type='2',ph.lastcall,'None')))) as lastcall
								FROM prinumbers pri
								LEFT JOIN 1_groups g on (g.prinumber=pri.number AND g.gid=pri.associateid AND g.status=1)
								LEFT JOIN 1_ivrs i on (i.prinumber=pri.number AND i.ivrsid=pri.associateid AND i.status=1)
								LEFT JOIN 1_pbx pbx on (pbx.prinumber=pri.number AND pbx.pbxid=pri.associateid AND pbx.status=1)
								LEFT JOIN (SELECT g.gid,max(h.starttime) as lastcall FROM 1_groups g LEFT JOIN 1_callhistory h on g.gid=h.gid GROUP BY g.gid) ch on g.gid=ch.gid
								LEFT JOIN (SELECT i.ivrsid,max(h.datetime) as lastcall FROM 1_ivrs i LEFT JOIN 1_ivrshistory h on i.ivrsid=h.ivrsid GROUP BY i.ivrsid) ih on i.ivrsid=ih.ivrsid
								LEFT JOIN (SELECT p.pbxid,max(h.starttime) as lastcall FROM 1_pbx p LEFT JOIN 1_pbxreport h on p.pbxid=h.pbxid GROUP BY p.pbxid) ph on pbx.pbxid=ph.pbxid
								WHERE pri.bid=1
[2017-05-02 16:50:04]	SQL :	SELECT balance FROM sms_bal  where bid='1'
[2017-05-02 16:50:04]	SQL :	SELECT balance FROM call_bal where bid='1'
[2017-05-02 16:50:04]	SQL :	SELECT DISTINCT(e.eid),e.empname,eb.start_time FROM 1_employee e
		                       LEFT JOIN 1_emp_break eb ON e.eid = eb.eid
		                       LEFT JOIN 1_groups d ON e.eid = d.eid
		                       WHERE eb.end_time='0000-00-00' AND e.selfdisable=1  GROUP BY d.gid,e.eid
[2017-05-02 16:50:04]	SQL :	SELECT COALESCE(COUNT(callid), 0) AS day 
							FROM 1_callhistory h 
							LEFT JOIN 1_groups d ON d.gid = h.gid 
							WHERE 1 AND (DATE(h.`starttime`) = DATE(NOW()))
[2017-05-02 16:50:04]	SQL :	SELECT COALESCE(COUNT(callid), 0) AS day 
							FROM 1_callhistory h 
							LEFT JOIN 1_groups d ON d.gid = h.gid 
							WHERE 1  AND (DATE(h.`starttime`)  > DATE(DATE_SUB(NOW(), INTERVAL 1 WEEK)))
[2017-05-02 16:50:04]	SQL :	SELECT COALESCE(COUNT(callid), 0) AS day 
							FROM 1_callhistory h 
							LEFT JOIN 1_groups d ON d.gid = h.gid 
							WHERE 1  AND (MONTH(h.`starttime` ) = MONTH(NOW()))
[2017-05-02 16:50:04]	SQL :	SELECT COALESCE(COUNT(pbxid), 0) AS day 
							FROM 1_pbxreport h 
							WHERE 1 AND (DATE(h.`starttime`) = DATE(NOW()))
[2017-05-02 16:50:04]	SQL :	SELECT COALESCE(COUNT(pbxid), 0) AS day 
							FROM 1_pbxreport h 
							WHERE 1  AND (DATE(h.`starttime`)  > DATE(DATE_SUB(NOW(), INTERVAL 1 WEEK)))
[2017-05-02 16:50:04]	SQL :	SELECT COALESCE(COUNT(pbxid), 0) AS day 
							FROM 1_pbxreport h 
							WHERE 1  AND (MONTH(h.`starttime` ) = MONTH(NOW()))
[2017-05-02 16:50:04]	SQL :	SELECT COALESCE(COUNT(hid), 0) AS day 
							   FROM 1_ivrshistory h 
						       WHERE 1 AND (DATE(h.`datetime`) = DATE(NOW()))
[2017-05-02 16:50:04]	SQL :	SELECT COALESCE(COUNT(hid), 0) AS day 
							   FROM 1_ivrshistory h 
						       WHERE 1  AND (DATE(h.`datetime`)  > DATE(DATE_SUB(NOW(), INTERVAL 1 WEEK)))
[2017-05-02 16:50:04]	SQL :	SELECT COALESCE(COUNT(hid), 0) AS day 
							   FROM 1_ivrshistory h 
						       WHERE 1  AND (MONTH(h.`datetime` ) = MONTH(NOW()))
[2017-05-02 16:50:04]	SQL :	SELECT COALESCE(COUNT(leadid), 0) AS day 
							FROM 1_leads a 
							LEFT JOIN 1_leads_groups d ON d.gid = a.gid 
							WHERE (DATE(a.`createdon`) = DATE(NOW()))
[2017-05-02 16:50:04]	SQL :	SELECT COALESCE(COUNT(leadid), 0) AS day 
							FROM 1_leads a 
							LEFT JOIN 1_leads_groups d ON d.gid = a.gid 
							WHERE (DATE(a.`createdon`) = DATE(NOW()))
[2017-05-02 16:50:04]	SQL :	SELECT COALESCE(COUNT(leadid), 0) AS day 
							FROM 1_leads a 
							LEFT JOIN 1_leads_groups d ON d.gid = a.gid 
							WHERE (DATE(a.`createdon`) = DATE(NOW()))
[2017-05-02 16:50:04]	SQL :	SELECT COALESCE(COUNT(tktid), 0) AS day 
							FROM 1_support_tickets a 
							LEFT JOIN 1_support_groups d ON d.gid = a.gid 
							WHERE (DATE(a.`createdon`) = DATE(NOW()))
[2017-05-02 16:50:04]	SQL :	SELECT COALESCE(COUNT(tktid), 0) AS day 
							FROM 1_support_tickets a 
							LEFT JOIN 1_support_groups d ON d.gid = a.gid 
							WHERE (DATE(a.`createdon`) = DATE(NOW()))
[2017-05-02 16:50:04]	SQL :	SELECT COALESCE(COUNT(tktid), 0) AS day 
							FROM 1_support_tickets a 
							LEFT JOIN 1_support_groups d ON d.gid = a.gid 
							WHERE (DATE(a.`createdon`) = DATE(NOW()))
[2017-05-02 16:50:04]	SQL :	SELECT COALESCE(COUNT(callid), 0) AS day 
							FROM 1_outboundcalls h 
							WHERE (DATE(h.`starttime`) = DATE(NOW()))
[2017-05-02 16:50:04]	SQL :	SELECT COALESCE(COUNT(callid), 0) AS day 
							FROM 1_outboundcalls h 
							WHERE (DATE(h.`starttime`) = DATE(NOW()))
[2017-05-02 16:50:04]	SQL :	SELECT COALESCE(COUNT(callid), 0) AS day 
							FROM 1_outboundcalls h 
							WHERE (DATE(h.`starttime`) = DATE(NOW()))
[2017-05-02 16:50:04]	SQL :	SELECT COALESCE(COUNT(callid), 0) AS day 
							FROM 1_mtracker h 
							WHERE (DATE(h.`starttime`) = DATE(NOW()))
[2017-05-02 16:50:04]	SQL :	SELECT COALESCE(COUNT(callid), 0) AS day 
							FROM 1_mtracker h 
							WHERE (DATE(h.`starttime`) = DATE(NOW()))
[2017-05-02 16:50:04]	SQL :	SELECT COALESCE(COUNT(callid), 0) AS day 
							FROM 1_mtracker h 
							WHERE (DATE(h.`starttime`) = DATE(NOW()))
[2017-05-02 16:58:45]	DEBUG :	Config Class Initialized
[2017-05-02 16:58:45]	DEBUG :	Hooks Class Initialized
[2017-05-02 16:58:45]	DEBUG :	URI Class Initialized
[2017-05-02 16:58:45]	DEBUG :	Router Class Initialized
[2017-05-02 16:58:45]	DEBUG :	Output Class Initialized
[2017-05-02 16:58:45]	DEBUG :	Input Class Initialized
[2017-05-02 16:58:45]	DEBUG :	Global POST and COOKIE data sanitized
[2017-05-02 16:58:45]	DEBUG :	Language Class Initialized
[2017-05-02 16:58:45]	DEBUG :	Loader Class Initialized
[2017-05-02 16:58:45]	DEBUG :	Helper loaded: url_helper
[2017-05-02 16:58:45]	DEBUG :	Helper loaded: form_helper
[2017-05-02 16:58:45]	DEBUG :	Helper loaded: html_helper
[2017-05-02 16:58:45]	DEBUG :	Helper loaded: email_helper
[2017-05-02 16:58:45]	DEBUG :	Helper loaded: ckeditor_helper
[2017-05-02 16:58:45]	DEBUG :	Helper loaded: mcube_helper
[2017-05-02 16:58:45]	DEBUG :	Database Driver Class Initialized
[2017-05-02 16:58:45]	ERROR :	Severity: 8192  --> mysql_pconnect(): The mysql extension is deprecated and will be removed in the future: use mysqli or PDO instead /var/www/html/mcnew/system/database/drivers/mysql/mysql_driver.php 88
[2017-05-02 16:58:45]	DEBUG :	Session Class Initialized
[2017-05-02 16:58:45]	DEBUG :	Helper loaded: string_helper
[2017-05-02 16:58:45]	DEBUG :	Encrypt Class Initialized
[2017-05-02 16:58:45]	DEBUG :	A session cookie was not found.
[2017-05-02 16:58:45]	SQL :	INSERT INTO `call_sessions` (`session_id`, `ip_address`, `user_agent`, `last_activity`) VALUES ('dcb95237b3272b538b499283fb73ed1d', '192.168.1.114', 'Dalvik/2.1.0 (Linux; U; Android 6.0; Panasonic T44', 1493724525)
[2017-05-02 16:58:45]	DEBUG :	Session routines successfully run
[2017-05-02 16:58:45]	DEBUG :	Table Class Initialized
[2017-05-02 16:58:45]	DEBUG :	Pagination Class Initialized
[2017-05-02 16:58:45]	DEBUG :	Config file loaded: config/paypallib_config.php
[2017-05-02 16:58:45]	DEBUG :	Form Validation Class Initialized
[2017-05-02 16:58:45]	DEBUG :	Email Class Initialized
[2017-05-02 16:58:45]	DEBUG :	Language file loaded: language/english/calendar_lang.php
[2017-05-02 16:58:45]	DEBUG :	Calendar Class Initialized
[2017-05-02 16:58:45]	DEBUG :	Controller Class Initialized
[2017-05-02 16:58:45]	DEBUG :	Model Class Initialized
[2017-05-02 16:58:45]	DEBUG :	Model Class Initialized
[2017-05-02 16:58:45]	DEBUG :	Model Class Initialized
[2017-05-02 16:58:45]	DEBUG :	Model Class Initialized
[2017-05-02 16:58:45]	DEBUG :	Model Class Initialized
[2017-05-02 16:58:45]	DEBUG :	Model Class Initialized
[2017-05-02 16:58:45]	DEBUG :	Model Class Initialized
[2017-05-02 16:58:45]	DEBUG :	Model Class Initialized
[2017-05-02 16:58:45]	DEBUG :	Model Class Initialized
[2017-05-02 16:58:45]	DEBUG :	Model Class Initialized
[2017-05-02 16:58:45]	DEBUG :	Model Class Initialized
[2017-05-02 16:58:45]	DEBUG :	Model Class Initialized
[2017-05-02 16:58:45]	DEBUG :	Model Class Initialized
[2017-05-02 16:58:45]	DEBUG :	Model Class Initialized
[2017-05-02 16:58:45]	DEBUG :	Plugin loaded: to_pdf_pi
[2017-05-02 16:58:45]	DEBUG :	Model Class Initialized
[2017-05-02 16:58:45]	DEBUG :	Language file loaded: language/english/form_validation_lang.php
[2017-05-02 16:58:45]	SQL :	SELECT uid,bid,eid FROM `user` WHERE authkey='1.1.d886b8e8a0615'
[2017-05-02 16:58:45]	DEBUG :	Database Driver Class Initialized
[2017-05-02 16:58:45]	SQL :	SELECT roleid FROM 1_employee
							WHERE eid='1'
							AND bid='1'
[2017-05-02 16:58:45]	DEBUG :	Database Driver Class Initialized
[2017-05-02 16:58:45]	SQL :	SELECT * FROM 1_user_role
							WHERE roleid='1'
							AND bid='1'
[2017-05-02 16:58:45]	SQL :	SELECT m.modid,m.modname,m.moddesc,
							COALESCE(o.opt_add,0) as opt_add,
							COALESCE(o.opt_view,0) as opt_view,
							COALESCE(o.opt_download,0) as opt_download,
							COALESCE(opt_delete,0) as opt_delete 
							FROM module m
							LEFT JOIN (SELECT * FROM 1_role_mod_opt
							WHERE roleid='1' 
							AND bid='1') as o
							ON m.modid=o.modid where m.status=1
[2017-05-02 16:58:45]	SQL :	SELECT a.*,f.fieldname FROM 1_role_access a
								LEFT JOIN systemfields f on a.fieldid=f.fieldid
								WHERE a.roleid='1'
								AND a.bid='1'
								AND a.fieldtype='s'
[2017-05-02 16:58:45]	SQL :	SELECT * FROM 1_role_access
								WHERE roleid='1'
								AND bid='1'
							AND fieldtype='c'
[2017-05-02 16:58:45]	SQL :	SELECT pri.landingnumber,pri.used,pri.climit,
								if(pri.status=0,'Not in use',
								if(pri.type='0','Calltrack',
								if(pri.type='1','IVRS',
								if(pri.type='2','PBX','Not Assign')))) as type,
								pri.associateid,
								if(pri.status=0,'None',
								if(pri.type='0',g.groupname,
								if(pri.type='1',i.title,
								if(pri.type='2',pbx.title,'None')))) as title,
								if(pri.status=0,'None',
								if(pri.type='0',ch.lastcall,
								if(pri.type='1',ih.lastcall,
								if(pri.type='2',ph.lastcall,'None')))) as lastcall
								FROM prinumbers pri
								LEFT JOIN 1_groups g on (g.prinumber=pri.number AND g.gid=pri.associateid AND g.status=1)
								LEFT JOIN 1_ivrs i on (i.prinumber=pri.number AND i.ivrsid=pri.associateid AND i.status=1)
								LEFT JOIN 1_pbx pbx on (pbx.prinumber=pri.number AND pbx.pbxid=pri.associateid AND pbx.status=1)
								LEFT JOIN (SELECT g.gid,max(h.starttime) as lastcall FROM 1_groups g LEFT JOIN 1_callhistory h on g.gid=h.gid GROUP BY g.gid) ch on g.gid=ch.gid
								LEFT JOIN (SELECT i.ivrsid,max(h.datetime) as lastcall FROM 1_ivrs i LEFT JOIN 1_ivrshistory h on i.ivrsid=h.ivrsid GROUP BY i.ivrsid) ih on i.ivrsid=ih.ivrsid
								LEFT JOIN (SELECT p.pbxid,max(h.starttime) as lastcall FROM 1_pbx p LEFT JOIN 1_pbxreport h on p.pbxid=h.pbxid GROUP BY p.pbxid) ph on pbx.pbxid=ph.pbxid
								WHERE pri.bid=1
[2017-05-02 16:58:45]	SQL :	SELECT balance FROM sms_bal  where bid='1'
[2017-05-02 16:58:45]	SQL :	SELECT balance FROM call_bal where bid='1'
[2017-05-02 16:58:45]	SQL :	SELECT DISTINCT(e.eid),e.empname,eb.start_time FROM 1_employee e
		                       LEFT JOIN 1_emp_break eb ON e.eid = eb.eid
		                       LEFT JOIN 1_groups d ON e.eid = d.eid
		                       WHERE eb.end_time='0000-00-00' AND e.selfdisable=1  GROUP BY d.gid,e.eid
[2017-05-02 16:58:45]	SQL :	SELECT COALESCE(COUNT(callid), 0) AS day 
							FROM 1_callhistory h 
							LEFT JOIN 1_groups d ON d.gid = h.gid 
							WHERE 1 AND (DATE(h.`starttime`) = DATE(NOW()))
[2017-05-02 16:58:45]	SQL :	SELECT COALESCE(COUNT(callid), 0) AS day 
							FROM 1_callhistory h 
							LEFT JOIN 1_groups d ON d.gid = h.gid 
							WHERE 1  AND (DATE(h.`starttime`)  > DATE(DATE_SUB(NOW(), INTERVAL 1 WEEK)))
[2017-05-02 16:58:45]	SQL :	SELECT COALESCE(COUNT(callid), 0) AS day 
							FROM 1_callhistory h 
							LEFT JOIN 1_groups d ON d.gid = h.gid 
							WHERE 1  AND (MONTH(h.`starttime` ) = MONTH(NOW()))
[2017-05-02 16:58:45]	SQL :	SELECT COALESCE(COUNT(pbxid), 0) AS day 
							FROM 1_pbxreport h 
							WHERE 1 AND (DATE(h.`starttime`) = DATE(NOW()))
[2017-05-02 16:58:46]	SQL :	SELECT COALESCE(COUNT(pbxid), 0) AS day 
							FROM 1_pbxreport h 
							WHERE 1  AND (DATE(h.`starttime`)  > DATE(DATE_SUB(NOW(), INTERVAL 1 WEEK)))
[2017-05-02 16:58:46]	SQL :	SELECT COALESCE(COUNT(pbxid), 0) AS day 
							FROM 1_pbxreport h 
							WHERE 1  AND (MONTH(h.`starttime` ) = MONTH(NOW()))
[2017-05-02 16:58:46]	SQL :	SELECT COALESCE(COUNT(hid), 0) AS day 
							   FROM 1_ivrshistory h 
						       WHERE 1 AND (DATE(h.`datetime`) = DATE(NOW()))
[2017-05-02 16:58:46]	SQL :	SELECT COALESCE(COUNT(hid), 0) AS day 
							   FROM 1_ivrshistory h 
						       WHERE 1  AND (DATE(h.`datetime`)  > DATE(DATE_SUB(NOW(), INTERVAL 1 WEEK)))
[2017-05-02 16:58:46]	SQL :	SELECT COALESCE(COUNT(hid), 0) AS day 
							   FROM 1_ivrshistory h 
						       WHERE 1  AND (MONTH(h.`datetime` ) = MONTH(NOW()))
[2017-05-02 16:58:46]	SQL :	SELECT COALESCE(COUNT(leadid), 0) AS day 
							FROM 1_leads a 
							LEFT JOIN 1_leads_groups d ON d.gid = a.gid 
							WHERE (DATE(a.`createdon`) = DATE(NOW()))
[2017-05-02 16:58:46]	SQL :	SELECT COALESCE(COUNT(leadid), 0) AS day 
							FROM 1_leads a 
							LEFT JOIN 1_leads_groups d ON d.gid = a.gid 
							WHERE (DATE(a.`createdon`) = DATE(NOW()))
[2017-05-02 16:58:46]	SQL :	SELECT COALESCE(COUNT(leadid), 0) AS day 
							FROM 1_leads a 
							LEFT JOIN 1_leads_groups d ON d.gid = a.gid 
							WHERE (DATE(a.`createdon`) = DATE(NOW()))
[2017-05-02 16:58:46]	SQL :	SELECT COALESCE(COUNT(tktid), 0) AS day 
							FROM 1_support_tickets a 
							LEFT JOIN 1_support_groups d ON d.gid = a.gid 
							WHERE (DATE(a.`createdon`) = DATE(NOW()))
[2017-05-02 16:58:46]	SQL :	SELECT COALESCE(COUNT(tktid), 0) AS day 
							FROM 1_support_tickets a 
							LEFT JOIN 1_support_groups d ON d.gid = a.gid 
							WHERE (DATE(a.`createdon`) = DATE(NOW()))
[2017-05-02 16:58:46]	SQL :	SELECT COALESCE(COUNT(tktid), 0) AS day 
							FROM 1_support_tickets a 
							LEFT JOIN 1_support_groups d ON d.gid = a.gid 
							WHERE (DATE(a.`createdon`) = DATE(NOW()))
[2017-05-02 16:58:46]	SQL :	SELECT COALESCE(COUNT(callid), 0) AS day 
							FROM 1_outboundcalls h 
							WHERE (DATE(h.`starttime`) = DATE(NOW()))
[2017-05-02 16:58:46]	SQL :	SELECT COALESCE(COUNT(callid), 0) AS day 
							FROM 1_outboundcalls h 
							WHERE (DATE(h.`starttime`) = DATE(NOW()))
[2017-05-02 16:58:46]	SQL :	SELECT COALESCE(COUNT(callid), 0) AS day 
							FROM 1_outboundcalls h 
							WHERE (DATE(h.`starttime`) = DATE(NOW()))
[2017-05-02 16:58:46]	SQL :	SELECT COALESCE(COUNT(callid), 0) AS day 
							FROM 1_mtracker h 
							WHERE (DATE(h.`starttime`) = DATE(NOW()))
[2017-05-02 16:58:46]	SQL :	SELECT COALESCE(COUNT(callid), 0) AS day 
							FROM 1_mtracker h 
							WHERE (DATE(h.`starttime`) = DATE(NOW()))
[2017-05-02 16:58:46]	SQL :	SELECT COALESCE(COUNT(callid), 0) AS day 
							FROM 1_mtracker h 
							WHERE (DATE(h.`starttime`) = DATE(NOW()))
[2017-05-02 18:14:55]	DEBUG :	Config Class Initialized
[2017-05-02 18:14:55]	DEBUG :	Hooks Class Initialized
[2017-05-02 18:14:55]	DEBUG :	URI Class Initialized
[2017-05-02 18:14:55]	DEBUG :	Router Class Initialized
[2017-05-02 18:14:55]	DEBUG :	Output Class Initialized
[2017-05-02 18:14:55]	DEBUG :	Input Class Initialized
[2017-05-02 18:14:55]	DEBUG :	Global POST and COOKIE data sanitized
[2017-05-02 18:14:55]	DEBUG :	Language Class Initialized
[2017-05-02 18:14:55]	DEBUG :	Loader Class Initialized
[2017-05-02 18:14:55]	DEBUG :	Helper loaded: url_helper
[2017-05-02 18:14:55]	DEBUG :	Helper loaded: form_helper
[2017-05-02 18:14:55]	DEBUG :	Helper loaded: html_helper
[2017-05-02 18:14:55]	DEBUG :	Helper loaded: email_helper
[2017-05-02 18:14:55]	DEBUG :	Helper loaded: ckeditor_helper
[2017-05-02 18:14:55]	DEBUG :	Helper loaded: mcube_helper
[2017-05-02 18:14:55]	DEBUG :	Database Driver Class Initialized
[2017-05-02 18:14:55]	ERROR :	Severity: 8192  --> mysql_pconnect(): The mysql extension is deprecated and will be removed in the future: use mysqli or PDO instead /var/www/html/mcnew/system/database/drivers/mysql/mysql_driver.php 88
[2017-05-02 18:14:55]	DEBUG :	Session Class Initialized
[2017-05-02 18:14:55]	DEBUG :	Helper loaded: string_helper
[2017-05-02 18:14:55]	DEBUG :	Encrypt Class Initialized
[2017-05-02 18:14:55]	DEBUG :	A session cookie was not found.
[2017-05-02 18:14:55]	SQL :	INSERT INTO `call_sessions` (`session_id`, `ip_address`, `user_agent`, `last_activity`) VALUES ('1a8d26bc705def341c9dd3460e7c07c4', '192.168.1.114', 'Dalvik/2.1.0 (Linux; U; Android 6.0; Panasonic T44', 1493729095)
[2017-05-02 18:14:55]	DEBUG :	Session routines successfully run
[2017-05-02 18:14:55]	DEBUG :	Table Class Initialized
[2017-05-02 18:14:55]	DEBUG :	Pagination Class Initialized
[2017-05-02 18:14:55]	DEBUG :	Config file loaded: config/paypallib_config.php
[2017-05-02 18:14:55]	DEBUG :	Form Validation Class Initialized
[2017-05-02 18:14:55]	DEBUG :	Email Class Initialized
[2017-05-02 18:14:55]	DEBUG :	Language file loaded: language/english/calendar_lang.php
[2017-05-02 18:14:55]	DEBUG :	Calendar Class Initialized
[2017-05-02 18:14:55]	DEBUG :	Controller Class Initialized
[2017-05-02 18:14:55]	DEBUG :	Model Class Initialized
[2017-05-02 18:14:55]	DEBUG :	Model Class Initialized
[2017-05-02 18:14:55]	DEBUG :	Model Class Initialized
[2017-05-02 18:14:55]	DEBUG :	Model Class Initialized
[2017-05-02 18:14:55]	DEBUG :	Model Class Initialized
[2017-05-02 18:14:55]	DEBUG :	Model Class Initialized
[2017-05-02 18:14:55]	DEBUG :	Model Class Initialized
[2017-05-02 18:14:55]	DEBUG :	Model Class Initialized
[2017-05-02 18:14:55]	DEBUG :	Model Class Initialized
[2017-05-02 18:14:55]	DEBUG :	Model Class Initialized
[2017-05-02 18:14:55]	DEBUG :	Model Class Initialized
[2017-05-02 18:14:55]	DEBUG :	Model Class Initialized
[2017-05-02 18:14:55]	DEBUG :	Model Class Initialized
[2017-05-02 18:14:55]	DEBUG :	Model Class Initialized
[2017-05-02 18:14:55]	DEBUG :	Plugin loaded: to_pdf_pi
[2017-05-02 18:14:55]	DEBUG :	Model Class Initialized
[2017-05-02 18:14:55]	DEBUG :	Language file loaded: language/english/form_validation_lang.php
[2017-05-02 18:14:55]	SQL :	SELECT uid,bid,eid FROM `user` WHERE authkey='1.1.d886b8e8a0615'
[2017-05-02 18:14:55]	DEBUG :	Database Driver Class Initialized
[2017-05-02 18:14:55]	SQL :	SELECT roleid FROM 1_employee
							WHERE eid='1'
							AND bid='1'
[2017-05-02 18:14:55]	DEBUG :	Database Driver Class Initialized
[2017-05-02 18:14:55]	SQL :	SELECT * FROM 1_user_role
							WHERE roleid='1'
							AND bid='1'
[2017-05-02 18:14:55]	SQL :	SELECT m.modid,m.modname,m.moddesc,
							COALESCE(o.opt_add,0) as opt_add,
							COALESCE(o.opt_view,0) as opt_view,
							COALESCE(o.opt_download,0) as opt_download,
							COALESCE(opt_delete,0) as opt_delete 
							FROM module m
							LEFT JOIN (SELECT * FROM 1_role_mod_opt
							WHERE roleid='1' 
							AND bid='1') as o
							ON m.modid=o.modid where m.status=1
[2017-05-02 18:14:55]	SQL :	SELECT a.*,f.fieldname FROM 1_role_access a
								LEFT JOIN systemfields f on a.fieldid=f.fieldid
								WHERE a.roleid='1'
								AND a.bid='1'
								AND a.fieldtype='s'
[2017-05-02 18:14:55]	SQL :	SELECT * FROM 1_role_access
								WHERE roleid='1'
								AND bid='1'
							AND fieldtype='c'
[2017-05-02 18:14:55]	SQL :	SELECT pri.landingnumber,pri.used,pri.climit,
								if(pri.status=0,'Not in use',
								if(pri.type='0','Calltrack',
								if(pri.type='1','IVRS',
								if(pri.type='2','PBX','Not Assign')))) as type,
								pri.associateid,
								if(pri.status=0,'None',
								if(pri.type='0',g.groupname,
								if(pri.type='1',i.title,
								if(pri.type='2',pbx.title,'None')))) as title,
								if(pri.status=0,'None',
								if(pri.type='0',ch.lastcall,
								if(pri.type='1',ih.lastcall,
								if(pri.type='2',ph.lastcall,'None')))) as lastcall
								FROM prinumbers pri
								LEFT JOIN 1_groups g on (g.prinumber=pri.number AND g.gid=pri.associateid AND g.status=1)
								LEFT JOIN 1_ivrs i on (i.prinumber=pri.number AND i.ivrsid=pri.associateid AND i.status=1)
								LEFT JOIN 1_pbx pbx on (pbx.prinumber=pri.number AND pbx.pbxid=pri.associateid AND pbx.status=1)
								LEFT JOIN (SELECT g.gid,max(h.starttime) as lastcall FROM 1_groups g LEFT JOIN 1_callhistory h on g.gid=h.gid GROUP BY g.gid) ch on g.gid=ch.gid
								LEFT JOIN (SELECT i.ivrsid,max(h.datetime) as lastcall FROM 1_ivrs i LEFT JOIN 1_ivrshistory h on i.ivrsid=h.ivrsid GROUP BY i.ivrsid) ih on i.ivrsid=ih.ivrsid
								LEFT JOIN (SELECT p.pbxid,max(h.starttime) as lastcall FROM 1_pbx p LEFT JOIN 1_pbxreport h on p.pbxid=h.pbxid GROUP BY p.pbxid) ph on pbx.pbxid=ph.pbxid
								WHERE pri.bid=1
[2017-05-02 18:14:55]	SQL :	SELECT balance FROM sms_bal  where bid='1'
[2017-05-02 18:14:55]	SQL :	SELECT balance FROM call_bal where bid='1'
[2017-05-02 18:14:55]	SQL :	SELECT DISTINCT(e.eid),e.empname,eb.start_time FROM 1_employee e
		                       LEFT JOIN 1_emp_break eb ON e.eid = eb.eid
		                       LEFT JOIN 1_groups d ON e.eid = d.eid
		                       WHERE eb.end_time='0000-00-00' AND e.selfdisable=1  GROUP BY d.gid,e.eid
[2017-05-02 18:14:55]	SQL :	SELECT COALESCE(COUNT(callid), 0) AS day 
							FROM 1_callhistory h 
							LEFT JOIN 1_groups d ON d.gid = h.gid 
							WHERE 1 AND (DATE(h.`starttime`) = DATE(NOW()))
[2017-05-02 18:14:55]	SQL :	SELECT COALESCE(COUNT(callid), 0) AS day 
							FROM 1_callhistory h 
							LEFT JOIN 1_groups d ON d.gid = h.gid 
							WHERE 1  AND (DATE(h.`starttime`)  > DATE(DATE_SUB(NOW(), INTERVAL 1 WEEK)))
[2017-05-02 18:14:55]	SQL :	SELECT COALESCE(COUNT(callid), 0) AS day 
							FROM 1_callhistory h 
							LEFT JOIN 1_groups d ON d.gid = h.gid 
							WHERE 1  AND (MONTH(h.`starttime` ) = MONTH(NOW()))
[2017-05-02 18:14:55]	SQL :	SELECT COALESCE(COUNT(pbxid), 0) AS day 
							FROM 1_pbxreport h 
							WHERE 1 AND (DATE(h.`starttime`) = DATE(NOW()))
[2017-05-02 18:14:55]	SQL :	SELECT COALESCE(COUNT(pbxid), 0) AS day 
							FROM 1_pbxreport h 
							WHERE 1  AND (DATE(h.`starttime`)  > DATE(DATE_SUB(NOW(), INTERVAL 1 WEEK)))
[2017-05-02 18:14:55]	SQL :	SELECT COALESCE(COUNT(pbxid), 0) AS day 
							FROM 1_pbxreport h 
							WHERE 1  AND (MONTH(h.`starttime` ) = MONTH(NOW()))
[2017-05-02 18:14:55]	SQL :	SELECT COALESCE(COUNT(hid), 0) AS day 
							   FROM 1_ivrshistory h 
						       WHERE 1 AND (DATE(h.`datetime`) = DATE(NOW()))
[2017-05-02 18:14:55]	SQL :	SELECT COALESCE(COUNT(hid), 0) AS day 
							   FROM 1_ivrshistory h 
						       WHERE 1  AND (DATE(h.`datetime`)  > DATE(DATE_SUB(NOW(), INTERVAL 1 WEEK)))
[2017-05-02 18:14:55]	SQL :	SELECT COALESCE(COUNT(hid), 0) AS day 
							   FROM 1_ivrshistory h 
						       WHERE 1  AND (MONTH(h.`datetime` ) = MONTH(NOW()))
[2017-05-02 18:14:55]	SQL :	SELECT COALESCE(COUNT(leadid), 0) AS day 
							FROM 1_leads a 
							LEFT JOIN 1_leads_groups d ON d.gid = a.gid 
							WHERE (DATE(a.`createdon`) = DATE(NOW()))
[2017-05-02 18:14:55]	SQL :	SELECT COALESCE(COUNT(leadid), 0) AS day 
							FROM 1_leads a 
							LEFT JOIN 1_leads_groups d ON d.gid = a.gid 
							WHERE (DATE(a.`createdon`) = DATE(NOW()))
[2017-05-02 18:14:55]	SQL :	SELECT COALESCE(COUNT(leadid), 0) AS day 
							FROM 1_leads a 
							LEFT JOIN 1_leads_groups d ON d.gid = a.gid 
							WHERE (DATE(a.`createdon`) = DATE(NOW()))
[2017-05-02 18:14:55]	SQL :	SELECT COALESCE(COUNT(tktid), 0) AS day 
							FROM 1_support_tickets a 
							LEFT JOIN 1_support_groups d ON d.gid = a.gid 
							WHERE (DATE(a.`createdon`) = DATE(NOW()))
[2017-05-02 18:14:55]	SQL :	SELECT COALESCE(COUNT(tktid), 0) AS day 
							FROM 1_support_tickets a 
							LEFT JOIN 1_support_groups d ON d.gid = a.gid 
							WHERE (DATE(a.`createdon`) = DATE(NOW()))
[2017-05-02 18:14:55]	SQL :	SELECT COALESCE(COUNT(tktid), 0) AS day 
							FROM 1_support_tickets a 
							LEFT JOIN 1_support_groups d ON d.gid = a.gid 
							WHERE (DATE(a.`createdon`) = DATE(NOW()))
[2017-05-02 18:14:55]	SQL :	SELECT COALESCE(COUNT(callid), 0) AS day 
							FROM 1_outboundcalls h 
							WHERE (DATE(h.`starttime`) = DATE(NOW()))
[2017-05-02 18:14:55]	SQL :	SELECT COALESCE(COUNT(callid), 0) AS day 
							FROM 1_outboundcalls h 
							WHERE (DATE(h.`starttime`) = DATE(NOW()))
[2017-05-02 18:14:55]	SQL :	SELECT COALESCE(COUNT(callid), 0) AS day 
							FROM 1_outboundcalls h 
							WHERE (DATE(h.`starttime`) = DATE(NOW()))
[2017-05-02 18:14:55]	SQL :	SELECT COALESCE(COUNT(callid), 0) AS day 
							FROM 1_mtracker h 
							WHERE (DATE(h.`starttime`) = DATE(NOW()))
[2017-05-02 18:14:55]	SQL :	SELECT COALESCE(COUNT(callid), 0) AS day 
							FROM 1_mtracker h 
							WHERE (DATE(h.`starttime`) = DATE(NOW()))
[2017-05-02 18:14:55]	SQL :	SELECT COALESCE(COUNT(callid), 0) AS day 
							FROM 1_mtracker h 
							WHERE (DATE(h.`starttime`) = DATE(NOW()))
[2017-05-02 18:16:56]	DEBUG :	Config Class Initialized
[2017-05-02 18:16:56]	DEBUG :	Hooks Class Initialized
[2017-05-02 18:16:56]	DEBUG :	URI Class Initialized
[2017-05-02 18:16:56]	DEBUG :	Router Class Initialized
[2017-05-02 18:16:56]	DEBUG :	Output Class Initialized
[2017-05-02 18:16:56]	DEBUG :	Input Class Initialized
[2017-05-02 18:16:56]	DEBUG :	Global POST and COOKIE data sanitized
[2017-05-02 18:16:56]	DEBUG :	Language Class Initialized
[2017-05-02 18:16:56]	DEBUG :	Loader Class Initialized
[2017-05-02 18:16:56]	DEBUG :	Helper loaded: url_helper
[2017-05-02 18:16:56]	DEBUG :	Helper loaded: form_helper
[2017-05-02 18:16:56]	DEBUG :	Helper loaded: html_helper
[2017-05-02 18:16:56]	DEBUG :	Helper loaded: email_helper
[2017-05-02 18:16:56]	DEBUG :	Helper loaded: ckeditor_helper
[2017-05-02 18:16:56]	DEBUG :	Helper loaded: mcube_helper
[2017-05-02 18:16:56]	DEBUG :	Database Driver Class Initialized
[2017-05-02 18:16:56]	ERROR :	Severity: 8192  --> mysql_pconnect(): The mysql extension is deprecated and will be removed in the future: use mysqli or PDO instead /var/www/html/mcnew/system/database/drivers/mysql/mysql_driver.php 88
[2017-05-02 18:16:56]	DEBUG :	Session Class Initialized
[2017-05-02 18:16:56]	DEBUG :	Helper loaded: string_helper
[2017-05-02 18:16:56]	DEBUG :	Encrypt Class Initialized
[2017-05-02 18:16:56]	DEBUG :	A session cookie was not found.
[2017-05-02 18:16:56]	SQL :	INSERT INTO `call_sessions` (`session_id`, `ip_address`, `user_agent`, `last_activity`) VALUES ('9a40df63c5375c15aa9110582b282d7f', '192.168.1.114', 'Dalvik/2.1.0 (Linux; U; Android 6.0; Panasonic T44', 1493729216)
[2017-05-02 18:16:56]	DEBUG :	Session routines successfully run
[2017-05-02 18:16:56]	DEBUG :	Table Class Initialized
[2017-05-02 18:16:56]	DEBUG :	Pagination Class Initialized
[2017-05-02 18:16:56]	DEBUG :	Config file loaded: config/paypallib_config.php
[2017-05-02 18:16:56]	DEBUG :	Form Validation Class Initialized
[2017-05-02 18:16:56]	DEBUG :	Email Class Initialized
[2017-05-02 18:16:56]	DEBUG :	Language file loaded: language/english/calendar_lang.php
[2017-05-02 18:16:56]	DEBUG :	Calendar Class Initialized
[2017-05-02 18:16:56]	DEBUG :	Controller Class Initialized
[2017-05-02 18:16:56]	DEBUG :	Model Class Initialized
[2017-05-02 18:16:56]	DEBUG :	Model Class Initialized
[2017-05-02 18:16:56]	DEBUG :	Model Class Initialized
[2017-05-02 18:16:56]	DEBUG :	Model Class Initialized
[2017-05-02 18:16:56]	DEBUG :	Model Class Initialized
[2017-05-02 18:16:56]	DEBUG :	Model Class Initialized
[2017-05-02 18:16:56]	DEBUG :	Model Class Initialized
[2017-05-02 18:16:56]	DEBUG :	Model Class Initialized
[2017-05-02 18:16:56]	DEBUG :	Model Class Initialized
[2017-05-02 18:16:56]	DEBUG :	Model Class Initialized
[2017-05-02 18:16:56]	DEBUG :	Model Class Initialized
[2017-05-02 18:16:56]	DEBUG :	Model Class Initialized
[2017-05-02 18:16:56]	DEBUG :	Model Class Initialized
[2017-05-02 18:16:56]	DEBUG :	Model Class Initialized
[2017-05-02 18:16:56]	DEBUG :	Plugin loaded: to_pdf_pi
[2017-05-02 18:16:56]	DEBUG :	Model Class Initialized
[2017-05-02 18:16:56]	DEBUG :	Language file loaded: language/english/form_validation_lang.php
[2017-05-02 18:16:56]	SQL :	SELECT uid,bid,eid FROM `user` WHERE authkey='1.1.d886b8e8a0615'
[2017-05-02 18:16:56]	DEBUG :	Database Driver Class Initialized
[2017-05-02 18:16:56]	SQL :	SELECT roleid FROM 1_employee
							WHERE eid='1'
							AND bid='1'
[2017-05-02 18:16:56]	DEBUG :	Database Driver Class Initialized
[2017-05-02 18:16:56]	SQL :	SELECT * FROM 1_user_role
							WHERE roleid='1'
							AND bid='1'
[2017-05-02 18:16:56]	SQL :	SELECT m.modid,m.modname,m.moddesc,
							COALESCE(o.opt_add,0) as opt_add,
							COALESCE(o.opt_view,0) as opt_view,
							COALESCE(o.opt_download,0) as opt_download,
							COALESCE(opt_delete,0) as opt_delete 
							FROM module m
							LEFT JOIN (SELECT * FROM 1_role_mod_opt
							WHERE roleid='1' 
							AND bid='1') as o
							ON m.modid=o.modid where m.status=1
[2017-05-02 18:16:56]	SQL :	SELECT a.*,f.fieldname FROM 1_role_access a
								LEFT JOIN systemfields f on a.fieldid=f.fieldid
								WHERE a.roleid='1'
								AND a.bid='1'
								AND a.fieldtype='s'
[2017-05-02 18:16:56]	SQL :	SELECT * FROM 1_role_access
								WHERE roleid='1'
								AND bid='1'
							AND fieldtype='c'
[2017-05-02 18:16:56]	SQL :	SELECT pri.landingnumber,pri.used,pri.climit,
								if(pri.status=0,'Not in use',
								if(pri.type='0','Calltrack',
								if(pri.type='1','IVRS',
								if(pri.type='2','PBX','Not Assign')))) as type,
								pri.associateid,
								if(pri.status=0,'None',
								if(pri.type='0',g.groupname,
								if(pri.type='1',i.title,
								if(pri.type='2',pbx.title,'None')))) as title,
								if(pri.status=0,'None',
								if(pri.type='0',ch.lastcall,
								if(pri.type='1',ih.lastcall,
								if(pri.type='2',ph.lastcall,'None')))) as lastcall
								FROM prinumbers pri
								LEFT JOIN 1_groups g on (g.prinumber=pri.number AND g.gid=pri.associateid AND g.status=1)
								LEFT JOIN 1_ivrs i on (i.prinumber=pri.number AND i.ivrsid=pri.associateid AND i.status=1)
								LEFT JOIN 1_pbx pbx on (pbx.prinumber=pri.number AND pbx.pbxid=pri.associateid AND pbx.status=1)
								LEFT JOIN (SELECT g.gid,max(h.starttime) as lastcall FROM 1_groups g LEFT JOIN 1_callhistory h on g.gid=h.gid GROUP BY g.gid) ch on g.gid=ch.gid
								LEFT JOIN (SELECT i.ivrsid,max(h.datetime) as lastcall FROM 1_ivrs i LEFT JOIN 1_ivrshistory h on i.ivrsid=h.ivrsid GROUP BY i.ivrsid) ih on i.ivrsid=ih.ivrsid
								LEFT JOIN (SELECT p.pbxid,max(h.starttime) as lastcall FROM 1_pbx p LEFT JOIN 1_pbxreport h on p.pbxid=h.pbxid GROUP BY p.pbxid) ph on pbx.pbxid=ph.pbxid
								WHERE pri.bid=1
[2017-05-02 18:16:56]	SQL :	SELECT balance FROM sms_bal  where bid='1'
[2017-05-02 18:16:56]	SQL :	SELECT balance FROM call_bal where bid='1'
[2017-05-02 18:16:56]	SQL :	SELECT DISTINCT(e.eid),e.empname,eb.start_time FROM 1_employee e
		                       LEFT JOIN 1_emp_break eb ON e.eid = eb.eid
		                       LEFT JOIN 1_groups d ON e.eid = d.eid
		                       WHERE eb.end_time='0000-00-00' AND e.selfdisable=1  GROUP BY d.gid,e.eid
[2017-05-02 18:16:56]	SQL :	SELECT COALESCE(COUNT(callid), 0) AS day 
							FROM 1_callhistory h 
							LEFT JOIN 1_groups d ON d.gid = h.gid 
							WHERE 1 AND (DATE(h.`starttime`) = DATE(NOW()))
[2017-05-02 18:16:56]	SQL :	SELECT COALESCE(COUNT(callid), 0) AS day 
							FROM 1_callhistory h 
							LEFT JOIN 1_groups d ON d.gid = h.gid 
							WHERE 1  AND (DATE(h.`starttime`)  > DATE(DATE_SUB(NOW(), INTERVAL 1 WEEK)))
[2017-05-02 18:16:56]	SQL :	SELECT COALESCE(COUNT(callid), 0) AS day 
							FROM 1_callhistory h 
							LEFT JOIN 1_groups d ON d.gid = h.gid 
							WHERE 1  AND (MONTH(h.`starttime` ) = MONTH(NOW()))
[2017-05-02 18:16:56]	SQL :	SELECT COALESCE(COUNT(pbxid), 0) AS day 
							FROM 1_pbxreport h 
							WHERE 1 AND (DATE(h.`starttime`) = DATE(NOW()))
[2017-05-02 18:16:56]	SQL :	SELECT COALESCE(COUNT(pbxid), 0) AS day 
							FROM 1_pbxreport h 
							WHERE 1  AND (DATE(h.`starttime`)  > DATE(DATE_SUB(NOW(), INTERVAL 1 WEEK)))
[2017-05-02 18:16:56]	SQL :	SELECT COALESCE(COUNT(pbxid), 0) AS day 
							FROM 1_pbxreport h 
							WHERE 1  AND (MONTH(h.`starttime` ) = MONTH(NOW()))
[2017-05-02 18:16:56]	SQL :	SELECT COALESCE(COUNT(hid), 0) AS day 
							   FROM 1_ivrshistory h 
						       WHERE 1 AND (DATE(h.`datetime`) = DATE(NOW()))
[2017-05-02 18:16:56]	SQL :	SELECT COALESCE(COUNT(hid), 0) AS day 
							   FROM 1_ivrshistory h 
						       WHERE 1  AND (DATE(h.`datetime`)  > DATE(DATE_SUB(NOW(), INTERVAL 1 WEEK)))
[2017-05-02 18:16:56]	SQL :	SELECT COALESCE(COUNT(hid), 0) AS day 
							   FROM 1_ivrshistory h 
						       WHERE 1  AND (MONTH(h.`datetime` ) = MONTH(NOW()))
[2017-05-02 18:16:56]	SQL :	SELECT COALESCE(COUNT(leadid), 0) AS day 
							FROM 1_leads a 
							LEFT JOIN 1_leads_groups d ON d.gid = a.gid 
							WHERE (DATE(a.`createdon`) = DATE(NOW()))
[2017-05-02 18:16:56]	SQL :	SELECT COALESCE(COUNT(leadid), 0) AS day 
							FROM 1_leads a 
							LEFT JOIN 1_leads_groups d ON d.gid = a.gid 
							WHERE (DATE(a.`createdon`) = DATE(NOW()))
[2017-05-02 18:16:56]	SQL :	SELECT COALESCE(COUNT(leadid), 0) AS day 
							FROM 1_leads a 
							LEFT JOIN 1_leads_groups d ON d.gid = a.gid 
							WHERE (DATE(a.`createdon`) = DATE(NOW()))
[2017-05-02 18:16:56]	SQL :	SELECT COALESCE(COUNT(tktid), 0) AS day 
							FROM 1_support_tickets a 
							LEFT JOIN 1_support_groups d ON d.gid = a.gid 
							WHERE (DATE(a.`createdon`) = DATE(NOW()))
[2017-05-02 18:16:56]	SQL :	SELECT COALESCE(COUNT(tktid), 0) AS day 
							FROM 1_support_tickets a 
							LEFT JOIN 1_support_groups d ON d.gid = a.gid 
							WHERE (DATE(a.`createdon`) = DATE(NOW()))
[2017-05-02 18:16:56]	SQL :	SELECT COALESCE(COUNT(tktid), 0) AS day 
							FROM 1_support_tickets a 
							LEFT JOIN 1_support_groups d ON d.gid = a.gid 
							WHERE (DATE(a.`createdon`) = DATE(NOW()))
[2017-05-02 18:16:56]	SQL :	SELECT COALESCE(COUNT(callid), 0) AS day 
							FROM 1_outboundcalls h 
							WHERE (DATE(h.`starttime`) = DATE(NOW()))
[2017-05-02 18:16:56]	SQL :	SELECT COALESCE(COUNT(callid), 0) AS day 
							FROM 1_outboundcalls h 
							WHERE (DATE(h.`starttime`) = DATE(NOW()))
[2017-05-02 18:16:56]	SQL :	SELECT COALESCE(COUNT(callid), 0) AS day 
							FROM 1_outboundcalls h 
							WHERE (DATE(h.`starttime`) = DATE(NOW()))
[2017-05-02 18:16:56]	SQL :	SELECT COALESCE(COUNT(callid), 0) AS day 
							FROM 1_mtracker h 
							WHERE (DATE(h.`starttime`) = DATE(NOW()))
[2017-05-02 18:16:56]	SQL :	SELECT COALESCE(COUNT(callid), 0) AS day 
							FROM 1_mtracker h 
							WHERE (DATE(h.`starttime`) = DATE(NOW()))
[2017-05-02 18:16:56]	SQL :	SELECT COALESCE(COUNT(callid), 0) AS day 
							FROM 1_mtracker h 
							WHERE (DATE(h.`starttime`) = DATE(NOW()))
[2017-05-02 18:50:02]	DEBUG :	Config Class Initialized
[2017-05-02 18:50:02]	DEBUG :	Hooks Class Initialized
[2017-05-02 18:50:02]	DEBUG :	URI Class Initialized
[2017-05-02 18:50:02]	DEBUG :	Router Class Initialized
[2017-05-02 18:50:02]	DEBUG :	Output Class Initialized
[2017-05-02 18:50:02]	DEBUG :	Input Class Initialized
[2017-05-02 18:50:02]	DEBUG :	Global POST and COOKIE data sanitized
[2017-05-02 18:50:02]	DEBUG :	Language Class Initialized
[2017-05-02 18:50:02]	DEBUG :	Loader Class Initialized
[2017-05-02 18:50:02]	DEBUG :	Helper loaded: url_helper
[2017-05-02 18:50:02]	DEBUG :	Helper loaded: form_helper
[2017-05-02 18:50:02]	DEBUG :	Helper loaded: html_helper
[2017-05-02 18:50:02]	DEBUG :	Helper loaded: email_helper
[2017-05-02 18:50:02]	DEBUG :	Helper loaded: ckeditor_helper
[2017-05-02 18:50:02]	DEBUG :	Helper loaded: mcube_helper
[2017-05-02 18:50:02]	DEBUG :	Database Driver Class Initialized
[2017-05-02 18:50:02]	ERROR :	Severity: 8192  --> mysql_pconnect(): The mysql extension is deprecated and will be removed in the future: use mysqli or PDO instead /var/www/html/mcnew/system/database/drivers/mysql/mysql_driver.php 88
[2017-05-02 18:50:02]	DEBUG :	Session Class Initialized
[2017-05-02 18:50:02]	DEBUG :	Helper loaded: string_helper
[2017-05-02 18:50:02]	DEBUG :	Encrypt Class Initialized
[2017-05-02 18:50:02]	DEBUG :	A session cookie was not found.
[2017-05-02 18:50:02]	SQL :	INSERT INTO `call_sessions` (`session_id`, `ip_address`, `user_agent`, `last_activity`) VALUES ('93941afa8e2957eb9e89a311e7a3e8bf', '192.168.1.114', 'Dalvik/2.1.0 (Linux; U; Android 6.0; Panasonic T44', 1493731202)
[2017-05-02 18:50:03]	DEBUG :	Session routines successfully run
[2017-05-02 18:50:03]	DEBUG :	Table Class Initialized
[2017-05-02 18:50:03]	DEBUG :	Pagination Class Initialized
[2017-05-02 18:50:03]	DEBUG :	Config file loaded: config/paypallib_config.php
[2017-05-02 18:50:03]	DEBUG :	Form Validation Class Initialized
[2017-05-02 18:50:03]	DEBUG :	Email Class Initialized
[2017-05-02 18:50:03]	DEBUG :	Language file loaded: language/english/calendar_lang.php
[2017-05-02 18:50:03]	DEBUG :	Calendar Class Initialized
[2017-05-02 18:50:03]	DEBUG :	Controller Class Initialized
[2017-05-02 18:50:03]	DEBUG :	Model Class Initialized
[2017-05-02 18:50:03]	DEBUG :	Model Class Initialized
[2017-05-02 18:50:03]	DEBUG :	Model Class Initialized
[2017-05-02 18:50:03]	DEBUG :	Model Class Initialized
[2017-05-02 18:50:03]	DEBUG :	Model Class Initialized
[2017-05-02 18:50:03]	DEBUG :	Model Class Initialized
[2017-05-02 18:50:03]	DEBUG :	Model Class Initialized
[2017-05-02 18:50:03]	DEBUG :	Model Class Initialized
[2017-05-02 18:50:03]	DEBUG :	Model Class Initialized
[2017-05-02 18:50:03]	DEBUG :	Model Class Initialized
[2017-05-02 18:50:03]	DEBUG :	Model Class Initialized
[2017-05-02 18:50:03]	DEBUG :	Model Class Initialized
[2017-05-02 18:50:03]	DEBUG :	Model Class Initialized
[2017-05-02 18:50:03]	DEBUG :	Model Class Initialized
[2017-05-02 18:50:03]	DEBUG :	Plugin loaded: to_pdf_pi
[2017-05-02 18:50:03]	DEBUG :	Model Class Initialized
[2017-05-02 18:50:03]	DEBUG :	Language file loaded: language/english/form_validation_lang.php
[2017-05-02 18:50:03]	SQL :	SELECT uid,bid,eid FROM `user` WHERE authkey='1.1.d886b8e8a0615'
[2017-05-02 18:50:03]	DEBUG :	Database Driver Class Initialized
[2017-05-02 18:50:03]	SQL :	SELECT roleid FROM 1_employee
							WHERE eid='1'
							AND bid='1'
[2017-05-02 18:50:03]	DEBUG :	Database Driver Class Initialized
[2017-05-02 18:50:03]	SQL :	SELECT * FROM 1_user_role
							WHERE roleid='1'
							AND bid='1'
[2017-05-02 18:50:03]	SQL :	SELECT m.modid,m.modname,m.moddesc,
							COALESCE(o.opt_add,0) as opt_add,
							COALESCE(o.opt_view,0) as opt_view,
							COALESCE(o.opt_download,0) as opt_download,
							COALESCE(opt_delete,0) as opt_delete 
							FROM module m
							LEFT JOIN (SELECT * FROM 1_role_mod_opt
							WHERE roleid='1' 
							AND bid='1') as o
							ON m.modid=o.modid where m.status=1
[2017-05-02 18:50:03]	SQL :	SELECT a.*,f.fieldname FROM 1_role_access a
								LEFT JOIN systemfields f on a.fieldid=f.fieldid
								WHERE a.roleid='1'
								AND a.bid='1'
								AND a.fieldtype='s'
[2017-05-02 18:50:03]	SQL :	SELECT * FROM 1_role_access
								WHERE roleid='1'
								AND bid='1'
							AND fieldtype='c'
[2017-05-02 18:50:03]	SQL :	SELECT pri.landingnumber,pri.used,pri.climit,
								if(pri.status=0,'Not in use',
								if(pri.type='0','Calltrack',
								if(pri.type='1','IVRS',
								if(pri.type='2','PBX','Not Assign')))) as type,
								pri.associateid,
								if(pri.status=0,'None',
								if(pri.type='0',g.groupname,
								if(pri.type='1',i.title,
								if(pri.type='2',pbx.title,'None')))) as title,
								if(pri.status=0,'None',
								if(pri.type='0',ch.lastcall,
								if(pri.type='1',ih.lastcall,
								if(pri.type='2',ph.lastcall,'None')))) as lastcall
								FROM prinumbers pri
								LEFT JOIN 1_groups g on (g.prinumber=pri.number AND g.gid=pri.associateid AND g.status=1)
								LEFT JOIN 1_ivrs i on (i.prinumber=pri.number AND i.ivrsid=pri.associateid AND i.status=1)
								LEFT JOIN 1_pbx pbx on (pbx.prinumber=pri.number AND pbx.pbxid=pri.associateid AND pbx.status=1)
								LEFT JOIN (SELECT g.gid,max(h.starttime) as lastcall FROM 1_groups g LEFT JOIN 1_callhistory h on g.gid=h.gid GROUP BY g.gid) ch on g.gid=ch.gid
								LEFT JOIN (SELECT i.ivrsid,max(h.datetime) as lastcall FROM 1_ivrs i LEFT JOIN 1_ivrshistory h on i.ivrsid=h.ivrsid GROUP BY i.ivrsid) ih on i.ivrsid=ih.ivrsid
								LEFT JOIN (SELECT p.pbxid,max(h.starttime) as lastcall FROM 1_pbx p LEFT JOIN 1_pbxreport h on p.pbxid=h.pbxid GROUP BY p.pbxid) ph on pbx.pbxid=ph.pbxid
								WHERE pri.bid=1
[2017-05-02 18:50:03]	SQL :	SELECT balance FROM sms_bal  where bid='1'
[2017-05-02 18:50:03]	SQL :	SELECT balance FROM call_bal where bid='1'
[2017-05-02 18:50:03]	SQL :	SELECT DISTINCT(e.eid),e.empname,eb.start_time FROM 1_employee e
		                       LEFT JOIN 1_emp_break eb ON e.eid = eb.eid
		                       LEFT JOIN 1_groups d ON e.eid = d.eid
		                       WHERE eb.end_time='0000-00-00' AND e.selfdisable=1  GROUP BY d.gid,e.eid
[2017-05-02 18:50:03]	SQL :	SELECT COALESCE(COUNT(callid), 0) AS day 
							FROM 1_callhistory h 
							LEFT JOIN 1_groups d ON d.gid = h.gid 
							WHERE 1 AND (DATE(h.`starttime`) = DATE(NOW()))
[2017-05-02 18:50:03]	SQL :	SELECT COALESCE(COUNT(callid), 0) AS day 
							FROM 1_callhistory h 
							LEFT JOIN 1_groups d ON d.gid = h.gid 
							WHERE 1  AND (DATE(h.`starttime`)  > DATE(DATE_SUB(NOW(), INTERVAL 1 WEEK)))
[2017-05-02 18:50:03]	SQL :	SELECT COALESCE(COUNT(callid), 0) AS day 
							FROM 1_callhistory h 
							LEFT JOIN 1_groups d ON d.gid = h.gid 
							WHERE 1  AND (MONTH(h.`starttime` ) = MONTH(NOW()))
[2017-05-02 18:50:03]	SQL :	SELECT COALESCE(COUNT(pbxid), 0) AS day 
							FROM 1_pbxreport h 
							WHERE 1 AND (DATE(h.`starttime`) = DATE(NOW()))
[2017-05-02 18:50:03]	SQL :	SELECT COALESCE(COUNT(pbxid), 0) AS day 
							FROM 1_pbxreport h 
							WHERE 1  AND (DATE(h.`starttime`)  > DATE(DATE_SUB(NOW(), INTERVAL 1 WEEK)))
[2017-05-02 18:50:03]	SQL :	SELECT COALESCE(COUNT(pbxid), 0) AS day 
							FROM 1_pbxreport h 
							WHERE 1  AND (MONTH(h.`starttime` ) = MONTH(NOW()))
[2017-05-02 18:50:03]	SQL :	SELECT COALESCE(COUNT(hid), 0) AS day 
							   FROM 1_ivrshistory h 
						       WHERE 1 AND (DATE(h.`datetime`) = DATE(NOW()))
[2017-05-02 18:50:03]	SQL :	SELECT COALESCE(COUNT(hid), 0) AS day 
							   FROM 1_ivrshistory h 
						       WHERE 1  AND (DATE(h.`datetime`)  > DATE(DATE_SUB(NOW(), INTERVAL 1 WEEK)))
[2017-05-02 18:50:03]	SQL :	SELECT COALESCE(COUNT(hid), 0) AS day 
							   FROM 1_ivrshistory h 
						       WHERE 1  AND (MONTH(h.`datetime` ) = MONTH(NOW()))
[2017-05-02 18:50:03]	SQL :	SELECT COALESCE(COUNT(leadid), 0) AS day 
							FROM 1_leads a 
							LEFT JOIN 1_leads_groups d ON d.gid = a.gid 
							WHERE (DATE(a.`createdon`) = DATE(NOW()))
[2017-05-02 18:50:03]	SQL :	SELECT COALESCE(COUNT(leadid), 0) AS day 
							FROM 1_leads a 
							LEFT JOIN 1_leads_groups d ON d.gid = a.gid 
							WHERE (DATE(a.`createdon`) = DATE(NOW()))
[2017-05-02 18:50:03]	SQL :	SELECT COALESCE(COUNT(leadid), 0) AS day 
							FROM 1_leads a 
							LEFT JOIN 1_leads_groups d ON d.gid = a.gid 
							WHERE (DATE(a.`createdon`) = DATE(NOW()))
[2017-05-02 18:50:03]	SQL :	SELECT COALESCE(COUNT(tktid), 0) AS day 
							FROM 1_support_tickets a 
							LEFT JOIN 1_support_groups d ON d.gid = a.gid 
							WHERE (DATE(a.`createdon`) = DATE(NOW()))
[2017-05-02 18:50:03]	SQL :	SELECT COALESCE(COUNT(tktid), 0) AS day 
							FROM 1_support_tickets a 
							LEFT JOIN 1_support_groups d ON d.gid = a.gid 
							WHERE (DATE(a.`createdon`) = DATE(NOW()))
[2017-05-02 18:50:03]	SQL :	SELECT COALESCE(COUNT(tktid), 0) AS day 
							FROM 1_support_tickets a 
							LEFT JOIN 1_support_groups d ON d.gid = a.gid 
							WHERE (DATE(a.`createdon`) = DATE(NOW()))
[2017-05-02 18:50:03]	SQL :	SELECT COALESCE(COUNT(callid), 0) AS day 
							FROM 1_outboundcalls h 
							WHERE (DATE(h.`starttime`) = DATE(NOW()))
[2017-05-02 18:50:03]	SQL :	SELECT COALESCE(COUNT(callid), 0) AS day 
							FROM 1_outboundcalls h 
							WHERE (DATE(h.`starttime`) = DATE(NOW()))
[2017-05-02 18:50:03]	SQL :	SELECT COALESCE(COUNT(callid), 0) AS day 
							FROM 1_outboundcalls h 
							WHERE (DATE(h.`starttime`) = DATE(NOW()))
[2017-05-02 18:50:03]	SQL :	SELECT COALESCE(COUNT(callid), 0) AS day 
							FROM 1_mtracker h 
							WHERE (DATE(h.`starttime`) = DATE(NOW()))
[2017-05-02 18:50:03]	SQL :	SELECT COALESCE(COUNT(callid), 0) AS day 
							FROM 1_mtracker h 
							WHERE (DATE(h.`starttime`) = DATE(NOW()))
[2017-05-02 18:50:03]	SQL :	SELECT COALESCE(COUNT(callid), 0) AS day 
							FROM 1_mtracker h 
							WHERE (DATE(h.`starttime`) = DATE(NOW()))
[2017-05-02 19:04:08]	DEBUG :	Config Class Initialized
[2017-05-02 19:04:08]	DEBUG :	Hooks Class Initialized
[2017-05-02 19:04:08]	DEBUG :	URI Class Initialized
[2017-05-02 19:04:08]	DEBUG :	Router Class Initialized
[2017-05-02 19:04:08]	DEBUG :	Output Class Initialized
[2017-05-02 19:04:08]	DEBUG :	Input Class Initialized
[2017-05-02 19:04:08]	DEBUG :	Global POST and COOKIE data sanitized
[2017-05-02 19:04:08]	DEBUG :	Language Class Initialized
[2017-05-02 19:04:08]	DEBUG :	Loader Class Initialized
[2017-05-02 19:04:08]	DEBUG :	Helper loaded: url_helper
[2017-05-02 19:04:08]	DEBUG :	Helper loaded: form_helper
[2017-05-02 19:04:08]	DEBUG :	Helper loaded: html_helper
[2017-05-02 19:04:08]	DEBUG :	Helper loaded: email_helper
[2017-05-02 19:04:08]	DEBUG :	Helper loaded: ckeditor_helper
[2017-05-02 19:04:08]	DEBUG :	Helper loaded: mcube_helper
[2017-05-02 19:04:08]	DEBUG :	Database Driver Class Initialized
[2017-05-02 19:04:08]	ERROR :	Severity: 8192  --> mysql_pconnect(): The mysql extension is deprecated and will be removed in the future: use mysqli or PDO instead /var/www/html/mcnew/system/database/drivers/mysql/mysql_driver.php 88
[2017-05-02 19:04:08]	DEBUG :	Session Class Initialized
[2017-05-02 19:04:08]	DEBUG :	Helper loaded: string_helper
[2017-05-02 19:04:08]	DEBUG :	Encrypt Class Initialized
[2017-05-02 19:04:08]	DEBUG :	A session cookie was not found.
[2017-05-02 19:04:08]	SQL :	INSERT INTO `call_sessions` (`session_id`, `ip_address`, `user_agent`, `last_activity`) VALUES ('b96d0e9995217768bd6b79552ee412c7', '192.168.1.114', 'Dalvik/2.1.0 (Linux; U; Android 6.0; Panasonic T44', 1493732048)
[2017-05-02 19:04:09]	DEBUG :	Session routines successfully run
[2017-05-02 19:04:09]	DEBUG :	Table Class Initialized
[2017-05-02 19:04:09]	DEBUG :	Pagination Class Initialized
[2017-05-02 19:04:09]	DEBUG :	Config file loaded: config/paypallib_config.php
[2017-05-02 19:04:09]	DEBUG :	Form Validation Class Initialized
[2017-05-02 19:04:09]	DEBUG :	Email Class Initialized
[2017-05-02 19:04:09]	DEBUG :	Language file loaded: language/english/calendar_lang.php
[2017-05-02 19:04:09]	DEBUG :	Calendar Class Initialized
[2017-05-02 19:04:09]	DEBUG :	Controller Class Initialized
[2017-05-02 19:04:09]	DEBUG :	Model Class Initialized
[2017-05-02 19:04:09]	DEBUG :	Model Class Initialized
[2017-05-02 19:04:09]	DEBUG :	Model Class Initialized
[2017-05-02 19:04:09]	DEBUG :	Model Class Initialized
[2017-05-02 19:04:09]	DEBUG :	Model Class Initialized
[2017-05-02 19:04:09]	DEBUG :	Model Class Initialized
[2017-05-02 19:04:09]	DEBUG :	Model Class Initialized
[2017-05-02 19:04:09]	DEBUG :	Model Class Initialized
[2017-05-02 19:04:09]	DEBUG :	Model Class Initialized
[2017-05-02 19:04:09]	DEBUG :	Model Class Initialized
[2017-05-02 19:04:09]	DEBUG :	Model Class Initialized
[2017-05-02 19:04:09]	DEBUG :	Model Class Initialized
[2017-05-02 19:04:09]	DEBUG :	Model Class Initialized
[2017-05-02 19:04:09]	DEBUG :	Model Class Initialized
[2017-05-02 19:04:09]	DEBUG :	Plugin loaded: to_pdf_pi
[2017-05-02 19:04:09]	DEBUG :	Model Class Initialized
[2017-05-02 19:04:09]	DEBUG :	Language file loaded: language/english/form_validation_lang.php
[2017-05-02 19:04:09]	SQL :	SELECT uid,bid,eid FROM `user` WHERE authkey='1.1.d886b8e8a0615'
[2017-05-02 19:04:09]	DEBUG :	Database Driver Class Initialized
[2017-05-02 19:04:09]	SQL :	SELECT roleid FROM 1_employee
							WHERE eid='1'
							AND bid='1'
[2017-05-02 19:04:09]	DEBUG :	Database Driver Class Initialized
[2017-05-02 19:04:09]	SQL :	SELECT * FROM 1_user_role
							WHERE roleid='1'
							AND bid='1'
[2017-05-02 19:04:09]	SQL :	SELECT m.modid,m.modname,m.moddesc,
							COALESCE(o.opt_add,0) as opt_add,
							COALESCE(o.opt_view,0) as opt_view,
							COALESCE(o.opt_download,0) as opt_download,
							COALESCE(opt_delete,0) as opt_delete 
							FROM module m
							LEFT JOIN (SELECT * FROM 1_role_mod_opt
							WHERE roleid='1' 
							AND bid='1') as o
							ON m.modid=o.modid where m.status=1
[2017-05-02 19:04:09]	SQL :	SELECT a.*,f.fieldname FROM 1_role_access a
								LEFT JOIN systemfields f on a.fieldid=f.fieldid
								WHERE a.roleid='1'
								AND a.bid='1'
								AND a.fieldtype='s'
[2017-05-02 19:04:09]	SQL :	SELECT * FROM 1_role_access
								WHERE roleid='1'
								AND bid='1'
							AND fieldtype='c'
[2017-05-02 19:04:09]	SQL :	SELECT pri.landingnumber,pri.used,pri.climit,
								if(pri.status=0,'Not in use',
								if(pri.type='0','Calltrack',
								if(pri.type='1','IVRS',
								if(pri.type='2','PBX','Not Assign')))) as type,
								pri.associateid,
								if(pri.status=0,'None',
								if(pri.type='0',g.groupname,
								if(pri.type='1',i.title,
								if(pri.type='2',pbx.title,'None')))) as title,
								if(pri.status=0,'None',
								if(pri.type='0',ch.lastcall,
								if(pri.type='1',ih.lastcall,
								if(pri.type='2',ph.lastcall,'None')))) as lastcall
								FROM prinumbers pri
								LEFT JOIN 1_groups g on (g.prinumber=pri.number AND g.gid=pri.associateid AND g.status=1)
								LEFT JOIN 1_ivrs i on (i.prinumber=pri.number AND i.ivrsid=pri.associateid AND i.status=1)
								LEFT JOIN 1_pbx pbx on (pbx.prinumber=pri.number AND pbx.pbxid=pri.associateid AND pbx.status=1)
								LEFT JOIN (SELECT g.gid,max(h.starttime) as lastcall FROM 1_groups g LEFT JOIN 1_callhistory h on g.gid=h.gid GROUP BY g.gid) ch on g.gid=ch.gid
								LEFT JOIN (SELECT i.ivrsid,max(h.datetime) as lastcall FROM 1_ivrs i LEFT JOIN 1_ivrshistory h on i.ivrsid=h.ivrsid GROUP BY i.ivrsid) ih on i.ivrsid=ih.ivrsid
								LEFT JOIN (SELECT p.pbxid,max(h.starttime) as lastcall FROM 1_pbx p LEFT JOIN 1_pbxreport h on p.pbxid=h.pbxid GROUP BY p.pbxid) ph on pbx.pbxid=ph.pbxid
								WHERE pri.bid=1
[2017-05-02 19:04:09]	SQL :	SELECT balance FROM sms_bal  where bid='1'
[2017-05-02 19:04:09]	SQL :	SELECT balance FROM call_bal where bid='1'
[2017-05-02 19:04:09]	SQL :	SELECT DISTINCT(e.eid),e.empname,eb.start_time FROM 1_employee e
		                       LEFT JOIN 1_emp_break eb ON e.eid = eb.eid
		                       LEFT JOIN 1_groups d ON e.eid = d.eid
		                       WHERE eb.end_time='0000-00-00' AND e.selfdisable=1  GROUP BY d.gid,e.eid
[2017-05-02 19:04:09]	SQL :	SELECT COALESCE(COUNT(callid), 0) AS day 
							FROM 1_callhistory h 
							LEFT JOIN 1_groups d ON d.gid = h.gid 
							WHERE 1 AND (DATE(h.`starttime`) = DATE(NOW()))
[2017-05-02 19:04:09]	SQL :	SELECT COALESCE(COUNT(callid), 0) AS day 
							FROM 1_callhistory h 
							LEFT JOIN 1_groups d ON d.gid = h.gid 
							WHERE 1  AND (DATE(h.`starttime`)  > DATE(DATE_SUB(NOW(), INTERVAL 1 WEEK)))
[2017-05-02 19:04:09]	SQL :	SELECT COALESCE(COUNT(callid), 0) AS day 
							FROM 1_callhistory h 
							LEFT JOIN 1_groups d ON d.gid = h.gid 
							WHERE 1  AND (MONTH(h.`starttime` ) = MONTH(NOW()))
[2017-05-02 19:04:09]	SQL :	SELECT COALESCE(COUNT(pbxid), 0) AS day 
							FROM 1_pbxreport h 
							WHERE 1 AND (DATE(h.`starttime`) = DATE(NOW()))
[2017-05-02 19:04:09]	SQL :	SELECT COALESCE(COUNT(pbxid), 0) AS day 
							FROM 1_pbxreport h 
							WHERE 1  AND (DATE(h.`starttime`)  > DATE(DATE_SUB(NOW(), INTERVAL 1 WEEK)))
[2017-05-02 19:04:09]	SQL :	SELECT COALESCE(COUNT(pbxid), 0) AS day 
							FROM 1_pbxreport h 
							WHERE 1  AND (MONTH(h.`starttime` ) = MONTH(NOW()))
[2017-05-02 19:04:09]	SQL :	SELECT COALESCE(COUNT(hid), 0) AS day 
							   FROM 1_ivrshistory h 
						       WHERE 1 AND (DATE(h.`datetime`) = DATE(NOW()))
[2017-05-02 19:04:09]	SQL :	SELECT COALESCE(COUNT(hid), 0) AS day 
							   FROM 1_ivrshistory h 
						       WHERE 1  AND (DATE(h.`datetime`)  > DATE(DATE_SUB(NOW(), INTERVAL 1 WEEK)))
[2017-05-02 19:04:09]	SQL :	SELECT COALESCE(COUNT(hid), 0) AS day 
							   FROM 1_ivrshistory h 
						       WHERE 1  AND (MONTH(h.`datetime` ) = MONTH(NOW()))
[2017-05-02 19:04:09]	SQL :	SELECT COALESCE(COUNT(leadid), 0) AS day 
							FROM 1_leads a 
							LEFT JOIN 1_leads_groups d ON d.gid = a.gid 
							WHERE (DATE(a.`createdon`) = DATE(NOW()))
[2017-05-02 19:04:09]	SQL :	SELECT COALESCE(COUNT(leadid), 0) AS day 
							FROM 1_leads a 
							LEFT JOIN 1_leads_groups d ON d.gid = a.gid 
							WHERE (DATE(a.`createdon`) = DATE(NOW()))
[2017-05-02 19:04:09]	SQL :	SELECT COALESCE(COUNT(leadid), 0) AS day 
							FROM 1_leads a 
							LEFT JOIN 1_leads_groups d ON d.gid = a.gid 
							WHERE (DATE(a.`createdon`) = DATE(NOW()))
[2017-05-02 19:04:09]	SQL :	SELECT COALESCE(COUNT(tktid), 0) AS day 
							FROM 1_support_tickets a 
							LEFT JOIN 1_support_groups d ON d.gid = a.gid 
							WHERE (DATE(a.`createdon`) = DATE(NOW()))
[2017-05-02 19:04:09]	SQL :	SELECT COALESCE(COUNT(tktid), 0) AS day 
							FROM 1_support_tickets a 
							LEFT JOIN 1_support_groups d ON d.gid = a.gid 
							WHERE (DATE(a.`createdon`) = DATE(NOW()))
[2017-05-02 19:04:09]	SQL :	SELECT COALESCE(COUNT(tktid), 0) AS day 
							FROM 1_support_tickets a 
							LEFT JOIN 1_support_groups d ON d.gid = a.gid 
							WHERE (DATE(a.`createdon`) = DATE(NOW()))
[2017-05-02 19:04:09]	SQL :	SELECT COALESCE(COUNT(callid), 0) AS day 
							FROM 1_outboundcalls h 
							WHERE (DATE(h.`starttime`) = DATE(NOW()))
[2017-05-02 19:04:09]	SQL :	SELECT COALESCE(COUNT(callid), 0) AS day 
							FROM 1_outboundcalls h 
							WHERE (DATE(h.`starttime`) = DATE(NOW()))
[2017-05-02 19:04:09]	SQL :	SELECT COALESCE(COUNT(callid), 0) AS day 
							FROM 1_outboundcalls h 
							WHERE (DATE(h.`starttime`) = DATE(NOW()))
[2017-05-02 19:04:09]	SQL :	SELECT COALESCE(COUNT(callid), 0) AS day 
							FROM 1_mtracker h 
							WHERE (DATE(h.`starttime`) = DATE(NOW()))
[2017-05-02 19:04:09]	SQL :	SELECT COALESCE(COUNT(callid), 0) AS day 
							FROM 1_mtracker h 
							WHERE (DATE(h.`starttime`) = DATE(NOW()))
[2017-05-02 19:04:09]	SQL :	SELECT COALESCE(COUNT(callid), 0) AS day 
							FROM 1_mtracker h 
							WHERE (DATE(h.`starttime`) = DATE(NOW()))
