
[2017-06-19 12:13:07]	DEBUG :	Config Class Initialized
[2017-06-19 12:13:07]	DEBUG :	Hooks Class Initialized
[2017-06-19 12:13:07]	DEBUG :	URI Class Initialized
[2017-06-19 12:13:07]	DEBUG :	Router Class Initialized
[2017-06-19 12:13:07]	DEBUG :	Output Class Initialized
[2017-06-19 12:13:07]	DEBUG :	Input Class Initialized
[2017-06-19 12:13:07]	DEBUG :	XSS Filtering completed
[2017-06-19 12:13:07]	DEBUG :	XSS Filtering completed
[2017-06-19 12:13:07]	DEBUG :	XSS Filtering completed
[2017-06-19 12:13:07]	DEBUG :	XSS Filtering completed
[2017-06-19 12:13:07]	DEBUG :	Global POST and COOKIE data sanitized
[2017-06-19 12:13:07]	DEBUG :	Language Class Initialized
[2017-06-19 12:13:07]	DEBUG :	Loader Class Initialized
[2017-06-19 12:13:07]	DEBUG :	Helper loaded: url_helper
[2017-06-19 12:13:07]	DEBUG :	Helper loaded: form_helper
[2017-06-19 12:13:07]	DEBUG :	Helper loaded: html_helper
[2017-06-19 12:13:07]	DEBUG :	Helper loaded: email_helper
[2017-06-19 12:13:07]	DEBUG :	Helper loaded: ckeditor_helper
[2017-06-19 12:13:07]	DEBUG :	Helper loaded: mcube_helper
[2017-06-19 12:13:07]	DEBUG :	Database Driver Class Initialized
[2017-06-19 12:13:07]	ERROR :	Severity: 8192  --> mysql_pconnect(): The mysql extension is deprecated and will be removed in the future: use mysqli or PDO instead /var/www/html/mcnew/system/database/drivers/mysql/mysql_driver.php 88
[2017-06-19 12:13:07]	DEBUG :	Session Class Initialized
[2017-06-19 12:13:07]	DEBUG :	Helper loaded: string_helper
[2017-06-19 12:13:07]	DEBUG :	Encrypt Class Initialized
[2017-06-19 12:13:07]	SQL :	SELECT *
FROM (`call_sessions`)
WHERE `session_id` = '847e9ee4e1543e295a6ddd381996c5e3'
AND `user_agent` = 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36'
[2017-06-19 12:13:07]	DEBUG :	Session routines successfully run
[2017-06-19 12:13:07]	DEBUG :	Table Class Initialized
[2017-06-19 12:13:07]	DEBUG :	Pagination Class Initialized
[2017-06-19 12:13:07]	DEBUG :	Config file loaded: config/paypallib_config.php
[2017-06-19 12:13:07]	DEBUG :	Form Validation Class Initialized
[2017-06-19 12:13:07]	DEBUG :	Email Class Initialized
[2017-06-19 12:13:07]	DEBUG :	Language file loaded: language/english/calendar_lang.php
[2017-06-19 12:13:07]	DEBUG :	Calendar Class Initialized
[2017-06-19 12:13:07]	DEBUG :	Controller Class Initialized
[2017-06-19 12:13:07]	DEBUG :	Model Class Initialized
[2017-06-19 12:13:07]	DEBUG :	Model Class Initialized
[2017-06-19 12:13:07]	DEBUG :	Model Class Initialized
[2017-06-19 12:13:07]	DEBUG :	Model Class Initialized
[2017-06-19 12:13:07]	DEBUG :	Model Class Initialized
[2017-06-19 12:13:07]	DEBUG :	Model Class Initialized
[2017-06-19 12:13:07]	DEBUG :	Model Class Initialized
[2017-06-19 12:13:07]	DEBUG :	Model Class Initialized
[2017-06-19 12:13:07]	DEBUG :	Model Class Initialized
[2017-06-19 12:13:07]	DEBUG :	Model Class Initialized
[2017-06-19 12:13:07]	DEBUG :	Model Class Initialized
[2017-06-19 12:13:07]	DEBUG :	Model Class Initialized
[2017-06-19 12:13:07]	DEBUG :	Plugin loaded: to_pdf_pi
[2017-06-19 12:13:07]	SQL :	SELECT u.uid FROM user u
				LEFT JOIN 1_employee e on (e.bid=u.bid AND e.eid=u.eid)
				WHERE e.status='1' AND e.login='1' AND u.status='1' 
				AND u.bid='1' AND u.eid='1'
[2017-06-19 12:13:07]	SQL :	SELECT *
FROM (`language`)
WHERE `langid` = '1'
[2017-06-19 12:13:07]	DEBUG :	Database Driver Class Initialized
[2017-06-19 12:13:07]	SQL :	SELECT roleid FROM 1_employee
							WHERE eid='1'
							AND bid='1'
[2017-06-19 12:13:07]	SQL :	UPDATE `call_sessions` SET `last_activity` = '1497853678', `user_data` = 'a:20:{s:3:\"uid\";s:1:\"1\";s:3:\"bid\";s:1:\"1\";s:8:\"username\";s:20:\"ashwini.naidu@vmc.in\";s:3:\"eid\";s:1:\"1\";s:3:\"app\";s:1:\"1\";s:7:\"authkey\";s:17:\"1.1.d886b8e8a0615\";s:9:\"recording\";s:1:\"1\";s:10:\"mcubecalls\";s:1:\"1\";s:7:\"mtdebug\";s:1:\"1\";s:8:\"deviceid\";s:36:\"ffffffff-a4d5-960f-ffff-ffff82ba1723\";s:8:\"language\";s:1:\"1\";s:6:\"status\";s:1:\"1\";s:9:\"appstatus\";s:1:\"1\";s:3:\"pid\";s:1:\"0\";s:3:\"act\";s:1:\"0\";s:16:\"registrationdate\";s:19:\"2014-09-08 16:04:19\";s:10:\"dnd_status\";s:1:\"0\";s:9:\"logged_in\";s:1:\"1\";s:6:\"roleid\";s:1:\"1\";s:4:\"cbid\";s:1:\"1\";}' WHERE `session_id` = '847e9ee4e1543e295a6ddd381996c5e3'
[2017-06-19 12:13:07]	DEBUG :	Database Driver Class Initialized
[2017-06-19 12:13:07]	SQL :	SELECT * FROM 1_user_role
							WHERE roleid='1'
							AND bid='1'
[2017-06-19 12:13:07]	SQL :	SELECT m.modid,m.modname,m.moddesc,
							COALESCE(o.opt_add,0) as opt_add,
							COALESCE(o.opt_view,0) as opt_view,
							COALESCE(o.opt_download,0) as opt_download,
							COALESCE(opt_delete,0) as opt_delete 
							FROM module m
							LEFT JOIN (SELECT * FROM 1_role_mod_opt
							WHERE roleid='1' 
							AND bid='1') as o
							ON m.modid=o.modid where m.status=1
[2017-06-19 12:13:07]	SQL :	SELECT a.*,f.fieldname FROM 1_role_access a
								LEFT JOIN systemfields f on a.fieldid=f.fieldid
								WHERE a.roleid='1'
								AND a.bid='1'
								AND a.fieldtype='s'
[2017-06-19 12:13:07]	SQL :	SELECT * FROM 1_role_access
								WHERE roleid='1'
								AND bid='1'
							AND fieldtype='c'
[2017-06-19 12:13:07]	SQL :	SELECT a.selfdisable FROM 1_employee a WHERE a.eid='1'
[2017-06-19 12:13:07]	DEBUG :	Language file loaded: language/english/unit_test_lang.php
[2017-06-19 12:13:07]	DEBUG :	Language file loaded: language/english/db_lang.php
[2017-06-19 12:13:07]	DEBUG :	Language file loaded: language/english/ftp_lang.php
[2017-06-19 12:13:07]	DEBUG :	Language file loaded: language/english/menu_lang.php
[2017-06-19 12:13:07]	DEBUG :	Language file loaded: language/english/db_tables_lang.php
[2017-06-19 12:13:07]	DEBUG :	Language file loaded: language/english/form_level_lang.php
[2017-06-19 12:13:07]	DEBUG :	Language file loaded: language/english/form_validation_lang.php
[2017-06-19 12:13:07]	DEBUG :	Language file loaded: language/english/email_lang.php
[2017-06-19 12:13:07]	DEBUG :	Language file loaded: language/english/number_lang.php
[2017-06-19 12:13:07]	DEBUG :	Language file loaded: language/english/layout_lang.php
[2017-06-19 12:13:07]	DEBUG :	Language file loaded: language/english/validation_lang.php
[2017-06-19 12:13:07]	DEBUG :	Language file loaded: language/english/scaffolding_lang.php
[2017-06-19 12:13:07]	DEBUG :	Language file loaded: language/english/date_lang.php
[2017-06-19 12:13:07]	DEBUG :	Language file loaded: language/english/profiler_lang.php
[2017-06-19 12:13:07]	DEBUG :	Language file loaded: language/english/imglib_lang.php
[2017-06-19 12:13:07]	DEBUG :	Language file loaded: language/english/error_msg_lang.php
[2017-06-19 12:13:07]	DEBUG :	Language file loaded: language/english/upload_lang.php
[2017-06-19 12:13:07]	SQL :	SELECT id,category,subcategory,type,status FROM feedback WHERE status=1 
[2017-06-19 12:13:07]	SQL :	SELECT feature_id FROM business_feature WHERE bid='1'
[2017-06-19 12:13:07]	SQL :	SELECT feature_id FROM business_feature WHERE bid='1'
[2017-06-19 12:13:07]	SQL :	SELECT feature_id FROM business_feature WHERE bid='1'
[2017-06-19 12:13:07]	SQL :	SELECT id,type FROM 1_leads_status
[2017-06-19 12:13:07]	SQL :	SELECT design FROM business_lead_use WHERE bid='1' LIMIT 0,1
[2017-06-19 12:13:07]	SQL :	SELECT sid,status FROM 1_support_status
[2017-06-19 12:13:07]	SQL :	SELECT feature_id FROM `business_feature` where bid=1
[2017-06-19 12:13:07]	SQL :	SELECT action_align FROM account_settings WHERE bid='1'
[2017-06-19 12:13:07]	SQL :	SELECT dialstatus FROM 1_callhistory WHERE dialstatus = 'CONNECTING'
[2017-06-19 12:13:07]	SQL :	SELECT FOUND_ROWS() as cnt
[2017-06-19 12:13:07]	SQL :	SELECT del_notify FROM account_settings WHERE bid='1'
[2017-06-19 12:13:07]	DEBUG :	Model Class Initialized
[2017-06-19 12:13:07]	DEBUG :	Database Driver Class Initialized
[2017-06-19 12:13:07]	SQL :	SELECT * FROM 1_user_role
							WHERE roleid='1'
							AND bid='1'
[2017-06-19 12:13:07]	SQL :	SELECT m.modid,m.modname,m.moddesc,
							COALESCE(o.opt_add,0) as opt_add,
							COALESCE(o.opt_view,0) as opt_view,
							COALESCE(o.opt_download,0) as opt_download,
							COALESCE(opt_delete,0) as opt_delete 
							FROM module m
							LEFT JOIN (SELECT * FROM 1_role_mod_opt
							WHERE roleid='1' 
							AND bid='1') as o
							ON m.modid=o.modid where m.status=1
[2017-06-19 12:13:07]	SQL :	SELECT a.*,f.fieldname FROM 1_role_access a
								LEFT JOIN systemfields f on a.fieldid=f.fieldid
								WHERE a.roleid='1'
								AND a.bid='1'
								AND a.fieldtype='s'
[2017-06-19 12:13:07]	SQL :	SELECT * FROM 1_role_access
								WHERE roleid='1'
								AND bid='1'
							AND fieldtype='c'
[2017-06-19 12:13:07]	SQL :	SELECT feature_id FROM `business_feature` where bid=1
[2017-06-19 12:13:07]	SQL :	SELECT feature_id FROM `business_feature` where bid=1
[2017-06-19 12:13:07]	SQL :	SELECT * FROM business where pid='1'
[2017-06-19 12:13:07]	DEBUG :	Database Driver Class Initialized
[2017-06-19 12:13:07]	SQL :	SELECT * FROM ( 
				SELECT 's' as type,f.addon,f.fieldid,f.modid,
				f.fieldname,'' as fieldtype,'' as fieldKey,'' as options,
				'' as defaultvalue,f.is_required as is_required,f.is_hidden,COALESCE(l.display_order,0) as display_order,
				l.customlabel,COALESCE(l.show,1) as `show`,COALESCE(l.listing,1) as `listing`
				FROM systemfields f
				LEFT JOIN (
					SELECT * FROM 1_custom_label
					WHERE fieldtype='s'
				) as l
				on (f.fieldid=l.fieldid AND l.modid=f.modid)
				WHERE f.modid='3'  AND f.is_hidden=0 
				UNION
				SELECT 'c' as type,'0',f.fieldid,f.modid,
				f.fieldname,f.fieldtype,f.field_key as fieldKey,f.options,
				f.defaultvalue,f.is_required as is_required,'',COALESCE(l.display_order,0) as display_order,
				l.customlabel,COALESCE(l.show,1) as `show`,COALESCE(l.listing,1) as `listing`
				FROM 1_customfields f
				LEFT JOIN (
					SELECT * FROM 1_custom_label
					WHERE fieldtype='c'
				) as l
				on (f.fieldid=l.fieldid AND l.modid=f.modid)
				WHERE f.modid='3') as t ORDER BY display_order ASC
[2017-06-19 12:13:07]	DEBUG :	Database Driver Class Initialized
[2017-06-19 12:13:07]	SQL :	SELECT g.*,e.empname as eid,sg.groupname as supportgroup,
					  if(g.connectowner=1,'YES','NO') as connectwner,
					  g.eid as epid,if(g.record=1,'YES','NO') as records,
					  if(g.replytocustomer=1,'YES','NO') as replycus,
					  if(g.replytoexecutive=1,'YES','NO') as replyexe,
					  if(g.pincode=1,'YES','NO') as pcode,
					  p.number as prinumber,
					  p.landingnumber as addnumber,(if(g.primary_rule=0,'All',cr.regionname)) as regionname,
					  r.rulename as rules,g.rules as rule
					  FROM 1_groups g 
					  LEFT JOIN group_rules r on g.rules=r.rulesid 
					  LEFT JOIN 1_employee e on g.eid=e.eid 
					  LEFT JOIN 1_support_groups sg on g.supportgrp=sg.gid 
					  LEFT JOIN prinumber p on g.prinumber=p.number
					  LEFT JOIN 1_custom_region cr on g.primary_rule=cr.regionid
					  WHERE g.bid='1' 
					  AND g.gid='17'
[2017-06-19 12:13:07]	SQL :	SELECT * FROM 1_customfieldsvalue 
				WHERE bid='1' 
				AND modid='3'
				AND dataid='17'
[2017-06-19 12:13:07]	SQL :	SELECT s.fieldname
							FROM systemfields s
							LEFT JOIN `features` f on s.addon=f.feature_id
							LEFT JOIN business_packageaddons b on (f.feature_id=b.feature_id AND b.number='200048')
							WHERE s.modid='3' AND s.addon!=0 AND b.number is null
[2017-06-19 12:13:07]	SQL :	SELECT feature_id FROM business_feature WHERE bid='1'
[2017-06-19 12:13:07]	SQL :	SELECT l.region, p.bid,l.number FROM landingnumbers l 
		                        LEFT JOIN prinumbers p ON p.landingnumber=l.number 
		                        WHERE p.bid='1' 
		                        AND p.status = '0' AND p.type = '0' AND l.module_id = '1'
		                         
[2017-06-19 12:13:07]	SQL :	SELECT p.status,p.number,p.landingnumber from prinumbers p
								LEFT JOIN landingnumbers l on l.pri=p.pri
								WHERE p.bid='1' 
								AND p.ntype=0 AND l.module_id='1'
								
[2017-06-19 12:13:07]	SQL :	SELECT * FROM group_rules
[2017-06-19 12:13:07]	SQL :	select eid,empname from 1_employee where status=1 ORDER BY empname
[2017-06-19 12:13:07]	DEBUG :	Database Driver Class Initialized
[2017-06-19 12:13:07]	SQL :	SELECT * FROM 1_user_role
							WHERE roleid='1'
							AND bid='1'
[2017-06-19 12:13:07]	SQL :	SELECT m.modid,m.modname,m.moddesc,
							COALESCE(o.opt_add,0) as opt_add,
							COALESCE(o.opt_view,0) as opt_view,
							COALESCE(o.opt_download,0) as opt_download,
							COALESCE(opt_delete,0) as opt_delete 
							FROM module m
							LEFT JOIN (SELECT * FROM 1_role_mod_opt
							WHERE roleid='1' 
							AND bid='1') as o
							ON m.modid=o.modid where m.status=1
[2017-06-19 12:13:07]	SQL :	SELECT a.*,f.fieldname FROM 1_role_access a
								LEFT JOIN systemfields f on a.fieldid=f.fieldid
								WHERE a.roleid='1'
								AND a.bid='1'
								AND a.fieldtype='s'
[2017-06-19 12:13:07]	SQL :	SELECT * FROM 1_role_access
								WHERE roleid='1'
								AND bid='1'
							AND fieldtype='c'
[2017-06-19 12:13:07]	SQL :	SELECT * FROM 1_employee WHERE status='1' ORDER BY empname
[2017-06-19 12:13:07]	SQL :	SELECT * FROM 1_custom_region
[2017-06-19 12:13:07]	SQL :	SELECT support FROM `prinumbers` WHERE bid='1' 
[2017-06-19 12:13:07]	SQL :	SELECT * FROM 1_support_groups WHERE status=1
[2017-06-19 12:13:07]	SQL :	select eid,empname from 1_employee where status=1 ORDER BY empname
[2017-06-19 12:13:07]	DEBUG :	Database Driver Class Initialized
[2017-06-19 12:13:07]	SQL :	SELECT * FROM 1_user_role
							WHERE roleid='1'
							AND bid='1'
[2017-06-19 12:13:07]	SQL :	SELECT m.modid,m.modname,m.moddesc,
							COALESCE(o.opt_add,0) as opt_add,
							COALESCE(o.opt_view,0) as opt_view,
							COALESCE(o.opt_download,0) as opt_download,
							COALESCE(opt_delete,0) as opt_delete 
							FROM module m
							LEFT JOIN (SELECT * FROM 1_role_mod_opt
							WHERE roleid='1' 
							AND bid='1') as o
							ON m.modid=o.modid where m.status=1
[2017-06-19 12:13:07]	SQL :	SELECT a.*,f.fieldname FROM 1_role_access a
								LEFT JOIN systemfields f on a.fieldid=f.fieldid
								WHERE a.roleid='1'
								AND a.bid='1'
								AND a.fieldtype='s'
[2017-06-19 12:13:07]	SQL :	SELECT * FROM 1_role_access
								WHERE roleid='1'
								AND bid='1'
							AND fieldtype='c'
[2017-06-19 12:13:07]	SQL :	SELECT * FROM 1_employee WHERE status='1' ORDER BY empname
[2017-06-19 12:13:07]	DEBUG :	File loaded: /var/www/html/mcnew/system/application/views/mainheader.php
[2017-06-19 12:13:07]	DEBUG :	Database Driver Class Initialized
[2017-06-19 12:13:07]	SQL :	select a.*,e.empname as reporttoname,b.rolename  as role,if(u.recording=1,'Yes','No') as recording
					  from 1_employee a
					  LEFT JOIN  1_employee e on a.reportto=e.eid
					  LEFT JOIN  user u on a.eid=u.eid
					  ,1_user_role b 
					  where a.roleid=b.roleid AND a.eid='1'
[2017-06-19 12:13:07]	SQL :	SELECT * FROM 1_customfieldsvalue 
				WHERE bid='1' 
				AND modid='2'
				AND dataid='1'
[2017-06-19 12:13:07]	DEBUG :	File loaded: /var/www/html/mcnew/system/application/views/leftsidebar.php
[2017-06-19 12:13:07]	DEBUG :	File loaded: /var/www/html/mcnew/system/application/views/form_view.php
[2017-06-19 12:13:07]	DEBUG :	File loaded: /var/www/html/mcnew/system/application/views/footer.php
[2017-06-19 12:13:07]	DEBUG :	Final output sent to browser
[2017-06-19 12:13:07]	DEBUG :	Total execution time: 0.1333
[2017-06-19 12:13:07]	DEBUG :	Config Class Initialized
[2017-06-19 12:13:07]	DEBUG :	Hooks Class Initialized
[2017-06-19 12:13:07]	DEBUG :	URI Class Initialized
[2017-06-19 12:13:07]	DEBUG :	Router Class Initialized
[2017-06-19 12:13:07]	DEBUG :	Output Class Initialized
[2017-06-19 12:13:07]	DEBUG :	Input Class Initialized
[2017-06-19 12:13:07]	DEBUG :	XSS Filtering completed
[2017-06-19 12:13:07]	DEBUG :	XSS Filtering completed
[2017-06-19 12:13:07]	DEBUG :	XSS Filtering completed
[2017-06-19 12:13:07]	DEBUG :	XSS Filtering completed
[2017-06-19 12:13:07]	DEBUG :	Global POST and COOKIE data sanitized
[2017-06-19 12:13:07]	DEBUG :	Language Class Initialized
[2017-06-19 12:13:07]	DEBUG :	Loader Class Initialized
[2017-06-19 12:13:07]	DEBUG :	Helper loaded: url_helper
[2017-06-19 12:13:07]	DEBUG :	Helper loaded: form_helper
[2017-06-19 12:13:07]	DEBUG :	Helper loaded: html_helper
[2017-06-19 12:13:07]	DEBUG :	Helper loaded: email_helper
[2017-06-19 12:13:07]	DEBUG :	Helper loaded: ckeditor_helper
[2017-06-19 12:13:07]	DEBUG :	Helper loaded: mcube_helper
[2017-06-19 12:13:07]	DEBUG :	Database Driver Class Initialized
[2017-06-19 12:13:07]	ERROR :	Severity: 8192  --> mysql_pconnect(): The mysql extension is deprecated and will be removed in the future: use mysqli or PDO instead /var/www/html/mcnew/system/database/drivers/mysql/mysql_driver.php 88
[2017-06-19 12:13:07]	DEBUG :	Session Class Initialized
[2017-06-19 12:13:07]	DEBUG :	Helper loaded: string_helper
[2017-06-19 12:13:07]	DEBUG :	Encrypt Class Initialized
[2017-06-19 12:13:07]	SQL :	SELECT *
FROM (`call_sessions`)
WHERE `session_id` = '847e9ee4e1543e295a6ddd381996c5e3'
AND `user_agent` = 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36'
[2017-06-19 12:13:07]	DEBUG :	Session routines successfully run
[2017-06-19 12:13:07]	DEBUG :	Table Class Initialized
[2017-06-19 12:13:07]	DEBUG :	Pagination Class Initialized
[2017-06-19 12:13:07]	DEBUG :	Config file loaded: config/paypallib_config.php
[2017-06-19 12:13:07]	DEBUG :	Form Validation Class Initialized
[2017-06-19 12:13:07]	DEBUG :	Email Class Initialized
[2017-06-19 12:13:07]	DEBUG :	Language file loaded: language/english/calendar_lang.php
[2017-06-19 12:13:07]	DEBUG :	Calendar Class Initialized
[2017-06-19 12:13:07]	DEBUG :	Controller Class Initialized
[2017-06-19 12:13:07]	DEBUG :	Model Class Initialized
[2017-06-19 12:13:07]	DEBUG :	Model Class Initialized
[2017-06-19 12:13:07]	DEBUG :	Model Class Initialized
[2017-06-19 12:13:07]	DEBUG :	Model Class Initialized
[2017-06-19 12:13:07]	DEBUG :	Model Class Initialized
[2017-06-19 12:13:07]	DEBUG :	Model Class Initialized
[2017-06-19 12:13:07]	DEBUG :	Model Class Initialized
[2017-06-19 12:13:07]	DEBUG :	Model Class Initialized
[2017-06-19 12:13:07]	DEBUG :	Model Class Initialized
[2017-06-19 12:13:07]	DEBUG :	Model Class Initialized
[2017-06-19 12:13:07]	DEBUG :	Model Class Initialized
[2017-06-19 12:13:07]	DEBUG :	Model Class Initialized
[2017-06-19 12:13:07]	DEBUG :	Plugin loaded: to_pdf_pi
[2017-06-19 12:13:07]	SQL :	SELECT u.uid FROM user u
				LEFT JOIN 1_employee e on (e.bid=u.bid AND e.eid=u.eid)
				WHERE e.status='1' AND e.login='1' AND u.status='1' 
				AND u.bid='1' AND u.eid='1'
[2017-06-19 12:13:07]	SQL :	SELECT *
FROM (`language`)
WHERE `langid` = '1'
[2017-06-19 12:13:07]	DEBUG :	Database Driver Class Initialized
[2017-06-19 12:13:07]	SQL :	SELECT roleid FROM 1_employee
							WHERE eid='1'
							AND bid='1'
[2017-06-19 12:13:07]	SQL :	UPDATE `call_sessions` SET `last_activity` = '1497853678', `user_data` = 'a:20:{s:3:\"uid\";s:1:\"1\";s:3:\"bid\";s:1:\"1\";s:8:\"username\";s:20:\"ashwini.naidu@vmc.in\";s:3:\"eid\";s:1:\"1\";s:3:\"app\";s:1:\"1\";s:7:\"authkey\";s:17:\"1.1.d886b8e8a0615\";s:9:\"recording\";s:1:\"1\";s:10:\"mcubecalls\";s:1:\"1\";s:7:\"mtdebug\";s:1:\"1\";s:8:\"deviceid\";s:36:\"ffffffff-a4d5-960f-ffff-ffff82ba1723\";s:8:\"language\";s:1:\"1\";s:6:\"status\";s:1:\"1\";s:9:\"appstatus\";s:1:\"1\";s:3:\"pid\";s:1:\"0\";s:3:\"act\";s:1:\"0\";s:16:\"registrationdate\";s:19:\"2014-09-08 16:04:19\";s:10:\"dnd_status\";s:1:\"0\";s:9:\"logged_in\";s:1:\"1\";s:6:\"roleid\";s:1:\"1\";s:4:\"cbid\";s:1:\"1\";}' WHERE `session_id` = '847e9ee4e1543e295a6ddd381996c5e3'
[2017-06-19 12:13:07]	DEBUG :	Database Driver Class Initialized
[2017-06-19 12:13:07]	SQL :	SELECT * FROM 1_user_role
							WHERE roleid='1'
							AND bid='1'
[2017-06-19 12:13:07]	SQL :	SELECT m.modid,m.modname,m.moddesc,
							COALESCE(o.opt_add,0) as opt_add,
							COALESCE(o.opt_view,0) as opt_view,
							COALESCE(o.opt_download,0) as opt_download,
							COALESCE(opt_delete,0) as opt_delete 
							FROM module m
							LEFT JOIN (SELECT * FROM 1_role_mod_opt
							WHERE roleid='1' 
							AND bid='1') as o
							ON m.modid=o.modid where m.status=1
[2017-06-19 12:13:07]	SQL :	SELECT a.*,f.fieldname FROM 1_role_access a
								LEFT JOIN systemfields f on a.fieldid=f.fieldid
								WHERE a.roleid='1'
								AND a.bid='1'
								AND a.fieldtype='s'
[2017-06-19 12:13:07]	SQL :	SELECT * FROM 1_role_access
								WHERE roleid='1'
								AND bid='1'
							AND fieldtype='c'
[2017-06-19 12:13:07]	SQL :	SELECT a.selfdisable FROM 1_employee a WHERE a.eid='1'
[2017-06-19 12:13:07]	DEBUG :	Language file loaded: language/english/unit_test_lang.php
[2017-06-19 12:13:07]	DEBUG :	Language file loaded: language/english/db_lang.php
[2017-06-19 12:13:07]	DEBUG :	Language file loaded: language/english/ftp_lang.php
[2017-06-19 12:13:07]	DEBUG :	Language file loaded: language/english/menu_lang.php
[2017-06-19 12:13:07]	DEBUG :	Language file loaded: language/english/db_tables_lang.php
[2017-06-19 12:13:07]	DEBUG :	Language file loaded: language/english/form_level_lang.php
[2017-06-19 12:13:07]	DEBUG :	Language file loaded: language/english/form_validation_lang.php
[2017-06-19 12:13:07]	DEBUG :	Language file loaded: language/english/email_lang.php
[2017-06-19 12:13:07]	DEBUG :	Language file loaded: language/english/number_lang.php
[2017-06-19 12:13:07]	DEBUG :	Language file loaded: language/english/layout_lang.php
[2017-06-19 12:13:07]	DEBUG :	Language file loaded: language/english/validation_lang.php
[2017-06-19 12:13:07]	DEBUG :	Language file loaded: language/english/scaffolding_lang.php
[2017-06-19 12:13:07]	DEBUG :	Language file loaded: language/english/date_lang.php
[2017-06-19 12:13:07]	DEBUG :	Language file loaded: language/english/profiler_lang.php
[2017-06-19 12:13:07]	DEBUG :	Language file loaded: language/english/imglib_lang.php
[2017-06-19 12:13:07]	DEBUG :	Language file loaded: language/english/error_msg_lang.php
[2017-06-19 12:13:07]	DEBUG :	Language file loaded: language/english/upload_lang.php
[2017-06-19 12:13:07]	SQL :	SELECT id,category,subcategory,type,status FROM feedback WHERE status=1 
[2017-06-19 12:13:07]	SQL :	SELECT feature_id FROM business_feature WHERE bid='1'
[2017-06-19 12:13:07]	SQL :	SELECT feature_id FROM business_feature WHERE bid='1'
[2017-06-19 12:13:07]	SQL :	SELECT feature_id FROM business_feature WHERE bid='1'
[2017-06-19 12:13:07]	SQL :	SELECT id,type FROM 1_leads_status
[2017-06-19 12:13:07]	SQL :	SELECT design FROM business_lead_use WHERE bid='1' LIMIT 0,1
[2017-06-19 12:13:07]	SQL :	SELECT sid,status FROM 1_support_status
[2017-06-19 12:13:07]	SQL :	SELECT feature_id FROM `business_feature` where bid=1
[2017-06-19 12:13:07]	SQL :	SELECT action_align FROM account_settings WHERE bid='1'
[2017-06-19 12:13:07]	SQL :	SELECT dialstatus FROM 1_callhistory WHERE dialstatus = 'CONNECTING'
[2017-06-19 12:13:07]	SQL :	SELECT FOUND_ROWS() as cnt
[2017-06-19 12:13:07]	SQL :	SELECT del_notify FROM account_settings WHERE bid='1'
[2017-06-19 12:13:07]	DEBUG :	Model Class Initialized
[2017-06-19 12:13:07]	DEBUG :	Database Driver Class Initialized
[2017-06-19 12:13:07]	SQL :	SELECT * FROM 1_user_role
							WHERE roleid='1'
							AND bid='1'
[2017-06-19 12:13:07]	SQL :	SELECT m.modid,m.modname,m.moddesc,
							COALESCE(o.opt_add,0) as opt_add,
							COALESCE(o.opt_view,0) as opt_view,
							COALESCE(o.opt_download,0) as opt_download,
							COALESCE(opt_delete,0) as opt_delete 
							FROM module m
							LEFT JOIN (SELECT * FROM 1_role_mod_opt
							WHERE roleid='1' 
							AND bid='1') as o
							ON m.modid=o.modid where m.status=1
[2017-06-19 12:13:07]	SQL :	SELECT a.*,f.fieldname FROM 1_role_access a
								LEFT JOIN systemfields f on a.fieldid=f.fieldid
								WHERE a.roleid='1'
								AND a.bid='1'
								AND a.fieldtype='s'
[2017-06-19 12:13:07]	SQL :	SELECT * FROM 1_role_access
								WHERE roleid='1'
								AND bid='1'
							AND fieldtype='c'
[2017-06-19 12:13:07]	SQL :	SELECT feature_id FROM `business_feature` where bid=1
[2017-06-19 12:13:07]	SQL :	SELECT feature_id FROM `business_feature` where bid=1
[2017-06-19 12:13:07]	SQL :	SELECT * FROM business where pid='1'
[2017-06-19 12:13:07]	DEBUG :	Database Driver Class Initialized
[2017-06-19 12:13:07]	SQL :	SELECT * FROM ( 
				SELECT 's' as type,f.addon,f.fieldid,f.modid,
				f.fieldname,'' as fieldtype,'' as fieldKey,'' as options,
				'' as defaultvalue,f.is_required as is_required,f.is_hidden,COALESCE(l.display_order,0) as display_order,
				l.customlabel,COALESCE(l.show,1) as `show`,COALESCE(l.listing,1) as `listing`
				FROM systemfields f
				LEFT JOIN (
					SELECT * FROM 1_custom_label
					WHERE fieldtype='s'
				) as l
				on (f.fieldid=l.fieldid AND l.modid=f.modid)
				WHERE f.modid='3'  AND f.is_hidden=0 
				UNION
				SELECT 'c' as type,'0',f.fieldid,f.modid,
				f.fieldname,f.fieldtype,f.field_key as fieldKey,f.options,
				f.defaultvalue,f.is_required as is_required,'',COALESCE(l.display_order,0) as display_order,
				l.customlabel,COALESCE(l.show,1) as `show`,COALESCE(l.listing,1) as `listing`
				FROM 1_customfields f
				LEFT JOIN (
					SELECT * FROM 1_custom_label
					WHERE fieldtype='c'
				) as l
				on (f.fieldid=l.fieldid AND l.modid=f.modid)
				WHERE f.modid='3') as t ORDER BY display_order ASC
[2017-06-19 12:13:07]	DEBUG :	Database Driver Class Initialized
[2017-06-19 12:13:07]	SQL :	SELECT g.*,e.empname as eid,sg.groupname as supportgroup,
					  if(g.connectowner=1,'YES','NO') as connectwner,
					  g.eid as epid,if(g.record=1,'YES','NO') as records,
					  if(g.replytocustomer=1,'YES','NO') as replycus,
					  if(g.replytoexecutive=1,'YES','NO') as replyexe,
					  if(g.pincode=1,'YES','NO') as pcode,
					  p.number as prinumber,
					  p.landingnumber as addnumber,(if(g.primary_rule=0,'All',cr.regionname)) as regionname,
					  r.rulename as rules,g.rules as rule
					  FROM 1_groups g 
					  LEFT JOIN group_rules r on g.rules=r.rulesid 
					  LEFT JOIN 1_employee e on g.eid=e.eid 
					  LEFT JOIN 1_support_groups sg on g.supportgrp=sg.gid 
					  LEFT JOIN prinumber p on g.prinumber=p.number
					  LEFT JOIN 1_custom_region cr on g.primary_rule=cr.regionid
					  WHERE g.bid='1' 
					  AND g.gid='17'
[2017-06-19 12:13:07]	SQL :	SELECT * FROM 1_customfieldsvalue 
				WHERE bid='1' 
				AND modid='3'
				AND dataid='17'
[2017-06-19 12:13:07]	SQL :	SELECT s.fieldname
							FROM systemfields s
							LEFT JOIN `features` f on s.addon=f.feature_id
							LEFT JOIN business_packageaddons b on (f.feature_id=b.feature_id AND b.number='200048')
							WHERE s.modid='3' AND s.addon!=0 AND b.number is null
[2017-06-19 12:13:07]	SQL :	SELECT feature_id FROM business_feature WHERE bid='1'
[2017-06-19 12:13:07]	SQL :	SELECT l.region, p.bid,l.number FROM landingnumbers l 
		                        LEFT JOIN prinumbers p ON p.landingnumber=l.number 
		                        WHERE p.bid='1' 
		                        AND p.status = '0' AND p.type = '0' AND l.module_id = '1'
		                         
[2017-06-19 12:13:07]	SQL :	SELECT p.status,p.number,p.landingnumber from prinumbers p
								LEFT JOIN landingnumbers l on l.pri=p.pri
								WHERE p.bid='1' 
								AND p.ntype=0 AND l.module_id='1'
								
[2017-06-19 12:13:07]	SQL :	SELECT * FROM group_rules
[2017-06-19 12:13:07]	SQL :	select eid,empname from 1_employee where status=1 ORDER BY empname
[2017-06-19 12:13:07]	DEBUG :	Database Driver Class Initialized
[2017-06-19 12:13:07]	SQL :	SELECT * FROM 1_user_role
							WHERE roleid='1'
							AND bid='1'
[2017-06-19 12:13:07]	SQL :	SELECT m.modid,m.modname,m.moddesc,
							COALESCE(o.opt_add,0) as opt_add,
							COALESCE(o.opt_view,0) as opt_view,
							COALESCE(o.opt_download,0) as opt_download,
							COALESCE(opt_delete,0) as opt_delete 
							FROM module m
							LEFT JOIN (SELECT * FROM 1_role_mod_opt
							WHERE roleid='1' 
							AND bid='1') as o
							ON m.modid=o.modid where m.status=1
[2017-06-19 12:13:07]	SQL :	SELECT a.*,f.fieldname FROM 1_role_access a
								LEFT JOIN systemfields f on a.fieldid=f.fieldid
								WHERE a.roleid='1'
								AND a.bid='1'
								AND a.fieldtype='s'
[2017-06-19 12:13:07]	SQL :	SELECT * FROM 1_role_access
								WHERE roleid='1'
								AND bid='1'
							AND fieldtype='c'
[2017-06-19 12:13:07]	SQL :	SELECT * FROM 1_employee WHERE status='1' ORDER BY empname
[2017-06-19 12:13:07]	SQL :	SELECT * FROM 1_custom_region
[2017-06-19 12:13:07]	SQL :	SELECT support FROM `prinumbers` WHERE bid='1' 
[2017-06-19 12:13:07]	SQL :	SELECT * FROM 1_support_groups WHERE status=1
[2017-06-19 12:13:07]	SQL :	select eid,empname from 1_employee where status=1 ORDER BY empname
[2017-06-19 12:13:07]	DEBUG :	Database Driver Class Initialized
[2017-06-19 12:13:07]	SQL :	SELECT * FROM 1_user_role
							WHERE roleid='1'
							AND bid='1'
[2017-06-19 12:13:07]	SQL :	SELECT m.modid,m.modname,m.moddesc,
							COALESCE(o.opt_add,0) as opt_add,
							COALESCE(o.opt_view,0) as opt_view,
							COALESCE(o.opt_download,0) as opt_download,
							COALESCE(opt_delete,0) as opt_delete 
							FROM module m
							LEFT JOIN (SELECT * FROM 1_role_mod_opt
							WHERE roleid='1' 
							AND bid='1') as o
							ON m.modid=o.modid where m.status=1
[2017-06-19 12:13:07]	SQL :	SELECT a.*,f.fieldname FROM 1_role_access a
								LEFT JOIN systemfields f on a.fieldid=f.fieldid
								WHERE a.roleid='1'
								AND a.bid='1'
								AND a.fieldtype='s'
[2017-06-19 12:13:07]	SQL :	SELECT * FROM 1_role_access
								WHERE roleid='1'
								AND bid='1'
							AND fieldtype='c'
[2017-06-19 12:13:07]	SQL :	SELECT * FROM 1_employee WHERE status='1' ORDER BY empname
[2017-06-19 12:13:07]	DEBUG :	File loaded: /var/www/html/mcnew/system/application/views/mainheader.php
[2017-06-19 12:13:07]	DEBUG :	Database Driver Class Initialized
[2017-06-19 12:13:07]	SQL :	select a.*,e.empname as reporttoname,b.rolename  as role,if(u.recording=1,'Yes','No') as recording
					  from 1_employee a
					  LEFT JOIN  1_employee e on a.reportto=e.eid
					  LEFT JOIN  user u on a.eid=u.eid
					  ,1_user_role b 
					  where a.roleid=b.roleid AND a.eid='1'
[2017-06-19 12:13:07]	SQL :	SELECT * FROM 1_customfieldsvalue 
				WHERE bid='1' 
				AND modid='2'
				AND dataid='1'
[2017-06-19 12:13:07]	DEBUG :	File loaded: /var/www/html/mcnew/system/application/views/leftsidebar.php
[2017-06-19 12:13:07]	DEBUG :	File loaded: /var/www/html/mcnew/system/application/views/form_view.php
[2017-06-19 12:13:07]	DEBUG :	File loaded: /var/www/html/mcnew/system/application/views/footer.php
[2017-06-19 12:13:07]	DEBUG :	Final output sent to browser
[2017-06-19 12:13:07]	DEBUG :	Total execution time: 0.0917
[2017-06-19 12:13:11]	DEBUG :	Config Class Initialized
[2017-06-19 12:13:11]	DEBUG :	Hooks Class Initialized
[2017-06-19 12:13:11]	DEBUG :	URI Class Initialized
[2017-06-19 12:13:11]	DEBUG :	Router Class Initialized
[2017-06-19 12:13:11]	DEBUG :	Output Class Initialized
[2017-06-19 12:13:11]	DEBUG :	Input Class Initialized
[2017-06-19 12:13:11]	DEBUG :	XSS Filtering completed
[2017-06-19 12:13:11]	DEBUG :	XSS Filtering completed
[2017-06-19 12:13:11]	DEBUG :	XSS Filtering completed
[2017-06-19 12:13:11]	DEBUG :	XSS Filtering completed
[2017-06-19 12:13:11]	DEBUG :	Global POST and COOKIE data sanitized
[2017-06-19 12:13:11]	DEBUG :	Language Class Initialized
[2017-06-19 12:13:11]	DEBUG :	Loader Class Initialized
[2017-06-19 12:13:11]	DEBUG :	Helper loaded: url_helper
[2017-06-19 12:13:11]	DEBUG :	Helper loaded: form_helper
[2017-06-19 12:13:11]	DEBUG :	Helper loaded: html_helper
[2017-06-19 12:13:11]	DEBUG :	Helper loaded: email_helper
[2017-06-19 12:13:11]	DEBUG :	Helper loaded: ckeditor_helper
[2017-06-19 12:13:11]	DEBUG :	Helper loaded: mcube_helper
[2017-06-19 12:13:11]	DEBUG :	Database Driver Class Initialized
[2017-06-19 12:13:11]	ERROR :	Severity: 8192  --> mysql_pconnect(): The mysql extension is deprecated and will be removed in the future: use mysqli or PDO instead /var/www/html/mcnew/system/database/drivers/mysql/mysql_driver.php 88
[2017-06-19 12:13:11]	DEBUG :	Session Class Initialized
[2017-06-19 12:13:11]	DEBUG :	Helper loaded: string_helper
[2017-06-19 12:13:11]	DEBUG :	Encrypt Class Initialized
[2017-06-19 12:13:11]	SQL :	SELECT *
FROM (`call_sessions`)
WHERE `session_id` = '847e9ee4e1543e295a6ddd381996c5e3'
AND `user_agent` = 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36'
[2017-06-19 12:13:11]	DEBUG :	Session routines successfully run
[2017-06-19 12:13:11]	DEBUG :	Table Class Initialized
[2017-06-19 12:13:11]	DEBUG :	Pagination Class Initialized
[2017-06-19 12:13:11]	DEBUG :	Config file loaded: config/paypallib_config.php
[2017-06-19 12:13:11]	DEBUG :	Form Validation Class Initialized
[2017-06-19 12:13:11]	DEBUG :	Email Class Initialized
[2017-06-19 12:13:11]	DEBUG :	Language file loaded: language/english/calendar_lang.php
[2017-06-19 12:13:11]	DEBUG :	Calendar Class Initialized
[2017-06-19 12:13:11]	DEBUG :	Controller Class Initialized
[2017-06-19 12:13:11]	DEBUG :	Model Class Initialized
[2017-06-19 12:13:11]	DEBUG :	Model Class Initialized
[2017-06-19 12:13:11]	DEBUG :	Model Class Initialized
[2017-06-19 12:13:11]	DEBUG :	Model Class Initialized
[2017-06-19 12:13:11]	DEBUG :	Model Class Initialized
[2017-06-19 12:13:11]	DEBUG :	Model Class Initialized
[2017-06-19 12:13:11]	DEBUG :	Model Class Initialized
[2017-06-19 12:13:11]	DEBUG :	Model Class Initialized
[2017-06-19 12:13:11]	DEBUG :	Model Class Initialized
[2017-06-19 12:13:11]	DEBUG :	Model Class Initialized
[2017-06-19 12:13:11]	DEBUG :	Model Class Initialized
[2017-06-19 12:13:11]	DEBUG :	Model Class Initialized
[2017-06-19 12:13:11]	DEBUG :	Plugin loaded: to_pdf_pi
[2017-06-19 12:13:11]	SQL :	SELECT u.uid FROM user u
				LEFT JOIN 1_employee e on (e.bid=u.bid AND e.eid=u.eid)
				WHERE e.status='1' AND e.login='1' AND u.status='1' 
				AND u.bid='1' AND u.eid='1'
[2017-06-19 12:13:11]	SQL :	SELECT *
FROM (`language`)
WHERE `langid` = '1'
[2017-06-19 12:13:11]	DEBUG :	Database Driver Class Initialized
[2017-06-19 12:13:11]	SQL :	SELECT roleid FROM 1_employee
							WHERE eid='1'
							AND bid='1'
[2017-06-19 12:13:11]	SQL :	UPDATE `call_sessions` SET `last_activity` = '1497853678', `user_data` = 'a:20:{s:3:\"uid\";s:1:\"1\";s:3:\"bid\";s:1:\"1\";s:8:\"username\";s:20:\"ashwini.naidu@vmc.in\";s:3:\"eid\";s:1:\"1\";s:3:\"app\";s:1:\"1\";s:7:\"authkey\";s:17:\"1.1.d886b8e8a0615\";s:9:\"recording\";s:1:\"1\";s:10:\"mcubecalls\";s:1:\"1\";s:7:\"mtdebug\";s:1:\"1\";s:8:\"deviceid\";s:36:\"ffffffff-a4d5-960f-ffff-ffff82ba1723\";s:8:\"language\";s:1:\"1\";s:6:\"status\";s:1:\"1\";s:9:\"appstatus\";s:1:\"1\";s:3:\"pid\";s:1:\"0\";s:3:\"act\";s:1:\"0\";s:16:\"registrationdate\";s:19:\"2014-09-08 16:04:19\";s:10:\"dnd_status\";s:1:\"0\";s:9:\"logged_in\";s:1:\"1\";s:6:\"roleid\";s:1:\"1\";s:4:\"cbid\";s:1:\"1\";}' WHERE `session_id` = '847e9ee4e1543e295a6ddd381996c5e3'
[2017-06-19 12:13:11]	DEBUG :	Database Driver Class Initialized
[2017-06-19 12:13:11]	SQL :	SELECT * FROM 1_user_role
							WHERE roleid='1'
							AND bid='1'
[2017-06-19 12:13:11]	SQL :	SELECT m.modid,m.modname,m.moddesc,
							COALESCE(o.opt_add,0) as opt_add,
							COALESCE(o.opt_view,0) as opt_view,
							COALESCE(o.opt_download,0) as opt_download,
							COALESCE(opt_delete,0) as opt_delete 
							FROM module m
							LEFT JOIN (SELECT * FROM 1_role_mod_opt
							WHERE roleid='1' 
							AND bid='1') as o
							ON m.modid=o.modid where m.status=1
[2017-06-19 12:13:11]	SQL :	SELECT a.*,f.fieldname FROM 1_role_access a
								LEFT JOIN systemfields f on a.fieldid=f.fieldid
								WHERE a.roleid='1'
								AND a.bid='1'
								AND a.fieldtype='s'
[2017-06-19 12:13:11]	SQL :	SELECT * FROM 1_role_access
								WHERE roleid='1'
								AND bid='1'
							AND fieldtype='c'
[2017-06-19 12:13:11]	SQL :	SELECT a.selfdisable FROM 1_employee a WHERE a.eid='1'
[2017-06-19 12:13:11]	DEBUG :	Language file loaded: language/english/unit_test_lang.php
[2017-06-19 12:13:11]	DEBUG :	Language file loaded: language/english/db_lang.php
[2017-06-19 12:13:11]	DEBUG :	Language file loaded: language/english/ftp_lang.php
[2017-06-19 12:13:11]	DEBUG :	Language file loaded: language/english/menu_lang.php
[2017-06-19 12:13:11]	DEBUG :	Language file loaded: language/english/db_tables_lang.php
[2017-06-19 12:13:11]	DEBUG :	Language file loaded: language/english/form_level_lang.php
[2017-06-19 12:13:11]	DEBUG :	Language file loaded: language/english/form_validation_lang.php
[2017-06-19 12:13:11]	DEBUG :	Language file loaded: language/english/email_lang.php
[2017-06-19 12:13:11]	DEBUG :	Language file loaded: language/english/number_lang.php
[2017-06-19 12:13:11]	DEBUG :	Language file loaded: language/english/layout_lang.php
[2017-06-19 12:13:11]	DEBUG :	Language file loaded: language/english/validation_lang.php
[2017-06-19 12:13:11]	DEBUG :	Language file loaded: language/english/scaffolding_lang.php
[2017-06-19 12:13:11]	DEBUG :	Language file loaded: language/english/date_lang.php
[2017-06-19 12:13:11]	DEBUG :	Language file loaded: language/english/profiler_lang.php
[2017-06-19 12:13:11]	DEBUG :	Language file loaded: language/english/imglib_lang.php
[2017-06-19 12:13:11]	DEBUG :	Language file loaded: language/english/error_msg_lang.php
[2017-06-19 12:13:11]	DEBUG :	Language file loaded: language/english/upload_lang.php
[2017-06-19 12:13:11]	SQL :	SELECT id,category,subcategory,type,status FROM feedback WHERE status=1 
[2017-06-19 12:13:11]	SQL :	SELECT feature_id FROM business_feature WHERE bid='1'
[2017-06-19 12:13:11]	SQL :	SELECT feature_id FROM business_feature WHERE bid='1'
[2017-06-19 12:13:11]	SQL :	SELECT feature_id FROM business_feature WHERE bid='1'
[2017-06-19 12:13:11]	SQL :	SELECT id,type FROM 1_leads_status
[2017-06-19 12:13:11]	SQL :	SELECT design FROM business_lead_use WHERE bid='1' LIMIT 0,1
[2017-06-19 12:13:11]	SQL :	SELECT sid,status FROM 1_support_status
[2017-06-19 12:13:11]	SQL :	SELECT feature_id FROM `business_feature` where bid=1
[2017-06-19 12:13:11]	SQL :	SELECT action_align FROM account_settings WHERE bid='1'
[2017-06-19 12:13:11]	SQL :	SELECT dialstatus FROM 1_callhistory WHERE dialstatus = 'CONNECTING'
[2017-06-19 12:13:11]	SQL :	SELECT FOUND_ROWS() as cnt
[2017-06-19 12:13:11]	SQL :	SELECT del_notify FROM account_settings WHERE bid='1'
[2017-06-19 12:13:11]	DEBUG :	Model Class Initialized
[2017-06-19 12:13:11]	DEBUG :	Database Driver Class Initialized
[2017-06-19 12:13:11]	SQL :	SELECT * FROM 1_user_role
							WHERE roleid='1'
							AND bid='1'
[2017-06-19 12:13:11]	SQL :	SELECT m.modid,m.modname,m.moddesc,
							COALESCE(o.opt_add,0) as opt_add,
							COALESCE(o.opt_view,0) as opt_view,
							COALESCE(o.opt_download,0) as opt_download,
							COALESCE(opt_delete,0) as opt_delete 
							FROM module m
							LEFT JOIN (SELECT * FROM 1_role_mod_opt
							WHERE roleid='1' 
							AND bid='1') as o
							ON m.modid=o.modid where m.status=1
[2017-06-19 12:13:11]	SQL :	SELECT a.*,f.fieldname FROM 1_role_access a
								LEFT JOIN systemfields f on a.fieldid=f.fieldid
								WHERE a.roleid='1'
								AND a.bid='1'
								AND a.fieldtype='s'
[2017-06-19 12:13:11]	SQL :	SELECT * FROM 1_role_access
								WHERE roleid='1'
								AND bid='1'
							AND fieldtype='c'
[2017-06-19 12:13:11]	SQL :	SELECT feature_id FROM `business_feature` where bid=1
[2017-06-19 12:13:11]	SQL :	SELECT feature_id FROM `business_feature` where bid=1
[2017-06-19 12:13:11]	SQL :	SELECT * FROM business where pid='1'
[2017-06-19 12:13:11]	DEBUG :	Database Driver Class Initialized
[2017-06-19 12:13:11]	SQL :	SELECT * FROM ( 
				SELECT 's' as type,f.addon,f.fieldid,f.modid,
				f.fieldname,'' as fieldtype,'' as fieldKey,'' as options,
				'' as defaultvalue,f.is_required as is_required,f.is_hidden,COALESCE(l.display_order,0) as display_order,
				l.customlabel,COALESCE(l.show,1) as `show`,COALESCE(l.listing,1) as `listing`
				FROM systemfields f
				LEFT JOIN (
					SELECT * FROM 1_custom_label
					WHERE fieldtype='s'
				) as l
				on (f.fieldid=l.fieldid AND l.modid=f.modid)
				WHERE f.modid='3'  AND f.is_hidden=0 
				UNION
				SELECT 'c' as type,'0',f.fieldid,f.modid,
				f.fieldname,f.fieldtype,f.field_key as fieldKey,f.options,
				f.defaultvalue,f.is_required as is_required,'',COALESCE(l.display_order,0) as display_order,
				l.customlabel,COALESCE(l.show,1) as `show`,COALESCE(l.listing,1) as `listing`
				FROM 1_customfields f
				LEFT JOIN (
					SELECT * FROM 1_custom_label
					WHERE fieldtype='c'
				) as l
				on (f.fieldid=l.fieldid AND l.modid=f.modid)
				WHERE f.modid='3') as t ORDER BY display_order ASC
[2017-06-19 12:13:11]	SQL :	SELECT feature_id FROM business_feature WHERE bid='1'
[2017-06-19 12:13:11]	ERROR :	Severity: Notice  --> Undefined index: access_reports /var/www/html/mcnew/system/application/controllers/group.php 111
[2017-06-19 12:13:11]	SQL :	SELECT l.region, p.bid,l.number FROM landingnumbers l 
		                        LEFT JOIN prinumbers p ON p.landingnumber=l.number 
		                        WHERE p.bid='1' 
		                        AND p.status = '0' AND p.type = '0' AND l.module_id = '1'
		                         
[2017-06-19 12:13:11]	SQL :	SELECT p.status,p.number,p.landingnumber from prinumbers p
								LEFT JOIN landingnumbers l on l.pri=p.pri
								WHERE p.bid='1' 
								AND p.ntype=0 AND l.module_id='1'
								
[2017-06-19 12:13:11]	SQL :	SELECT * FROM group_rules
[2017-06-19 12:13:11]	SQL :	select eid,empname from 1_employee where status=1 ORDER BY empname
[2017-06-19 12:13:11]	DEBUG :	Database Driver Class Initialized
[2017-06-19 12:13:11]	SQL :	SELECT * FROM 1_user_role
							WHERE roleid='1'
							AND bid='1'
[2017-06-19 12:13:11]	SQL :	SELECT m.modid,m.modname,m.moddesc,
							COALESCE(o.opt_add,0) as opt_add,
							COALESCE(o.opt_view,0) as opt_view,
							COALESCE(o.opt_download,0) as opt_download,
							COALESCE(opt_delete,0) as opt_delete 
							FROM module m
							LEFT JOIN (SELECT * FROM 1_role_mod_opt
							WHERE roleid='1' 
							AND bid='1') as o
							ON m.modid=o.modid where m.status=1
[2017-06-19 12:13:11]	SQL :	SELECT a.*,f.fieldname FROM 1_role_access a
								LEFT JOIN systemfields f on a.fieldid=f.fieldid
								WHERE a.roleid='1'
								AND a.bid='1'
								AND a.fieldtype='s'
[2017-06-19 12:13:11]	SQL :	SELECT * FROM 1_role_access
								WHERE roleid='1'
								AND bid='1'
							AND fieldtype='c'
[2017-06-19 12:13:11]	SQL :	SELECT * FROM 1_employee WHERE status='1' ORDER BY empname
[2017-06-19 12:13:11]	SQL :	SELECT * FROM 1_custom_region
[2017-06-19 12:13:11]	SQL :	SELECT support FROM `prinumbers` WHERE bid='1' 
[2017-06-19 12:13:11]	SQL :	SELECT * FROM 1_support_groups WHERE status=1
[2017-06-19 12:13:11]	SQL :	select eid,empname from 1_employee where status=1 ORDER BY empname
[2017-06-19 12:13:11]	DEBUG :	Database Driver Class Initialized
[2017-06-19 12:13:11]	SQL :	SELECT * FROM 1_user_role
							WHERE roleid='1'
							AND bid='1'
[2017-06-19 12:13:11]	SQL :	SELECT m.modid,m.modname,m.moddesc,
							COALESCE(o.opt_add,0) as opt_add,
							COALESCE(o.opt_view,0) as opt_view,
							COALESCE(o.opt_download,0) as opt_download,
							COALESCE(opt_delete,0) as opt_delete 
							FROM module m
							LEFT JOIN (SELECT * FROM 1_role_mod_opt
							WHERE roleid='1' 
							AND bid='1') as o
							ON m.modid=o.modid where m.status=1
[2017-06-19 12:13:11]	SQL :	SELECT a.*,f.fieldname FROM 1_role_access a
								LEFT JOIN systemfields f on a.fieldid=f.fieldid
								WHERE a.roleid='1'
								AND a.bid='1'
								AND a.fieldtype='s'
[2017-06-19 12:13:11]	SQL :	SELECT * FROM 1_role_access
								WHERE roleid='1'
								AND bid='1'
							AND fieldtype='c'
[2017-06-19 12:13:11]	SQL :	SELECT * FROM 1_employee WHERE status='1' ORDER BY empname
[2017-06-19 12:13:11]	DEBUG :	File loaded: /var/www/html/mcnew/system/application/views/mainheader.php
[2017-06-19 12:13:11]	DEBUG :	Database Driver Class Initialized
[2017-06-19 12:13:11]	SQL :	select a.*,e.empname as reporttoname,b.rolename  as role,if(u.recording=1,'Yes','No') as recording
					  from 1_employee a
					  LEFT JOIN  1_employee e on a.reportto=e.eid
					  LEFT JOIN  user u on a.eid=u.eid
					  ,1_user_role b 
					  where a.roleid=b.roleid AND a.eid='1'
[2017-06-19 12:13:11]	SQL :	SELECT * FROM 1_customfieldsvalue 
				WHERE bid='1' 
				AND modid='2'
				AND dataid='1'
[2017-06-19 12:13:11]	DEBUG :	File loaded: /var/www/html/mcnew/system/application/views/leftsidebar.php
[2017-06-19 12:13:11]	DEBUG :	File loaded: /var/www/html/mcnew/system/application/views/form_view.php
[2017-06-19 12:13:11]	DEBUG :	File loaded: /var/www/html/mcnew/system/application/views/footer.php
[2017-06-19 12:13:11]	DEBUG :	Final output sent to browser
[2017-06-19 12:13:11]	DEBUG :	Total execution time: 0.0999
[2017-06-19 12:13:14]	DEBUG :	Config Class Initialized
[2017-06-19 12:13:14]	DEBUG :	Hooks Class Initialized
[2017-06-19 12:13:14]	DEBUG :	URI Class Initialized
[2017-06-19 12:13:14]	DEBUG :	Router Class Initialized
[2017-06-19 12:13:14]	DEBUG :	Output Class Initialized
[2017-06-19 12:13:14]	DEBUG :	Input Class Initialized
[2017-06-19 12:13:14]	DEBUG :	XSS Filtering completed
[2017-06-19 12:13:14]	DEBUG :	XSS Filtering completed
[2017-06-19 12:13:14]	DEBUG :	XSS Filtering completed
[2017-06-19 12:13:14]	DEBUG :	XSS Filtering completed
[2017-06-19 12:13:14]	DEBUG :	Global POST and COOKIE data sanitized
[2017-06-19 12:13:14]	DEBUG :	Language Class Initialized
[2017-06-19 12:13:14]	DEBUG :	Loader Class Initialized
[2017-06-19 12:13:14]	DEBUG :	Helper loaded: url_helper
[2017-06-19 12:13:14]	DEBUG :	Helper loaded: form_helper
[2017-06-19 12:13:14]	DEBUG :	Helper loaded: html_helper
[2017-06-19 12:13:14]	DEBUG :	Helper loaded: email_helper
[2017-06-19 12:13:14]	DEBUG :	Helper loaded: ckeditor_helper
[2017-06-19 12:13:14]	DEBUG :	Helper loaded: mcube_helper
[2017-06-19 12:13:14]	DEBUG :	Database Driver Class Initialized
[2017-06-19 12:13:14]	ERROR :	Severity: 8192  --> mysql_pconnect(): The mysql extension is deprecated and will be removed in the future: use mysqli or PDO instead /var/www/html/mcnew/system/database/drivers/mysql/mysql_driver.php 88
[2017-06-19 12:13:14]	DEBUG :	Session Class Initialized
[2017-06-19 12:13:14]	DEBUG :	Helper loaded: string_helper
[2017-06-19 12:13:14]	DEBUG :	Encrypt Class Initialized
[2017-06-19 12:13:14]	SQL :	SELECT *
FROM (`call_sessions`)
WHERE `session_id` = '847e9ee4e1543e295a6ddd381996c5e3'
AND `user_agent` = 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36'
[2017-06-19 12:13:14]	DEBUG :	Session routines successfully run
[2017-06-19 12:13:14]	DEBUG :	Table Class Initialized
[2017-06-19 12:13:14]	DEBUG :	Pagination Class Initialized
[2017-06-19 12:13:14]	DEBUG :	Config file loaded: config/paypallib_config.php
[2017-06-19 12:13:14]	DEBUG :	Form Validation Class Initialized
[2017-06-19 12:13:14]	DEBUG :	Email Class Initialized
[2017-06-19 12:13:14]	DEBUG :	Language file loaded: language/english/calendar_lang.php
[2017-06-19 12:13:14]	DEBUG :	Calendar Class Initialized
[2017-06-19 12:13:14]	DEBUG :	Controller Class Initialized
[2017-06-19 12:13:14]	DEBUG :	Model Class Initialized
[2017-06-19 12:13:14]	DEBUG :	Model Class Initialized
[2017-06-19 12:13:14]	DEBUG :	Model Class Initialized
[2017-06-19 12:13:14]	DEBUG :	Model Class Initialized
[2017-06-19 12:13:14]	DEBUG :	Model Class Initialized
[2017-06-19 12:13:14]	DEBUG :	Model Class Initialized
[2017-06-19 12:13:14]	DEBUG :	Model Class Initialized
[2017-06-19 12:13:14]	DEBUG :	Model Class Initialized
[2017-06-19 12:13:14]	DEBUG :	Model Class Initialized
[2017-06-19 12:13:14]	DEBUG :	Model Class Initialized
[2017-06-19 12:13:14]	DEBUG :	Model Class Initialized
[2017-06-19 12:13:14]	DEBUG :	Model Class Initialized
[2017-06-19 12:13:14]	DEBUG :	Plugin loaded: to_pdf_pi
[2017-06-19 12:13:14]	SQL :	SELECT u.uid FROM user u
				LEFT JOIN 1_employee e on (e.bid=u.bid AND e.eid=u.eid)
				WHERE e.status='1' AND e.login='1' AND u.status='1' 
				AND u.bid='1' AND u.eid='1'
[2017-06-19 12:13:14]	SQL :	SELECT *
FROM (`language`)
WHERE `langid` = '1'
[2017-06-19 12:13:14]	DEBUG :	Database Driver Class Initialized
[2017-06-19 12:13:14]	SQL :	SELECT roleid FROM 1_employee
							WHERE eid='1'
							AND bid='1'
[2017-06-19 12:13:14]	SQL :	UPDATE `call_sessions` SET `last_activity` = '1497853678', `user_data` = 'a:20:{s:3:\"uid\";s:1:\"1\";s:3:\"bid\";s:1:\"1\";s:8:\"username\";s:20:\"ashwini.naidu@vmc.in\";s:3:\"eid\";s:1:\"1\";s:3:\"app\";s:1:\"1\";s:7:\"authkey\";s:17:\"1.1.d886b8e8a0615\";s:9:\"recording\";s:1:\"1\";s:10:\"mcubecalls\";s:1:\"1\";s:7:\"mtdebug\";s:1:\"1\";s:8:\"deviceid\";s:36:\"ffffffff-a4d5-960f-ffff-ffff82ba1723\";s:8:\"language\";s:1:\"1\";s:6:\"status\";s:1:\"1\";s:9:\"appstatus\";s:1:\"1\";s:3:\"pid\";s:1:\"0\";s:3:\"act\";s:1:\"0\";s:16:\"registrationdate\";s:19:\"2014-09-08 16:04:19\";s:10:\"dnd_status\";s:1:\"0\";s:9:\"logged_in\";s:1:\"1\";s:6:\"roleid\";s:1:\"1\";s:4:\"cbid\";s:1:\"1\";}' WHERE `session_id` = '847e9ee4e1543e295a6ddd381996c5e3'
[2017-06-19 12:13:14]	DEBUG :	Database Driver Class Initialized
[2017-06-19 12:13:14]	SQL :	SELECT * FROM 1_user_role
							WHERE roleid='1'
							AND bid='1'
[2017-06-19 12:13:14]	SQL :	SELECT m.modid,m.modname,m.moddesc,
							COALESCE(o.opt_add,0) as opt_add,
							COALESCE(o.opt_view,0) as opt_view,
							COALESCE(o.opt_download,0) as opt_download,
							COALESCE(opt_delete,0) as opt_delete 
							FROM module m
							LEFT JOIN (SELECT * FROM 1_role_mod_opt
							WHERE roleid='1' 
							AND bid='1') as o
							ON m.modid=o.modid where m.status=1
[2017-06-19 12:13:14]	SQL :	SELECT a.*,f.fieldname FROM 1_role_access a
								LEFT JOIN systemfields f on a.fieldid=f.fieldid
								WHERE a.roleid='1'
								AND a.bid='1'
								AND a.fieldtype='s'
[2017-06-19 12:13:14]	SQL :	SELECT * FROM 1_role_access
								WHERE roleid='1'
								AND bid='1'
							AND fieldtype='c'
[2017-06-19 12:13:14]	SQL :	SELECT a.selfdisable FROM 1_employee a WHERE a.eid='1'
[2017-06-19 12:13:14]	DEBUG :	Language file loaded: language/english/unit_test_lang.php
[2017-06-19 12:13:14]	DEBUG :	Language file loaded: language/english/db_lang.php
[2017-06-19 12:13:14]	DEBUG :	Language file loaded: language/english/ftp_lang.php
[2017-06-19 12:13:14]	DEBUG :	Language file loaded: language/english/menu_lang.php
[2017-06-19 12:13:14]	DEBUG :	Language file loaded: language/english/db_tables_lang.php
[2017-06-19 12:13:14]	DEBUG :	Language file loaded: language/english/form_level_lang.php
[2017-06-19 12:13:14]	DEBUG :	Language file loaded: language/english/form_validation_lang.php
[2017-06-19 12:13:14]	DEBUG :	Language file loaded: language/english/email_lang.php
[2017-06-19 12:13:14]	DEBUG :	Language file loaded: language/english/number_lang.php
[2017-06-19 12:13:14]	DEBUG :	Language file loaded: language/english/layout_lang.php
[2017-06-19 12:13:14]	DEBUG :	Language file loaded: language/english/validation_lang.php
[2017-06-19 12:13:14]	DEBUG :	Language file loaded: language/english/scaffolding_lang.php
[2017-06-19 12:13:14]	DEBUG :	Language file loaded: language/english/date_lang.php
[2017-06-19 12:13:14]	DEBUG :	Language file loaded: language/english/profiler_lang.php
[2017-06-19 12:13:14]	DEBUG :	Language file loaded: language/english/imglib_lang.php
[2017-06-19 12:13:14]	DEBUG :	Language file loaded: language/english/error_msg_lang.php
[2017-06-19 12:13:14]	DEBUG :	Language file loaded: language/english/upload_lang.php
[2017-06-19 12:13:14]	SQL :	SELECT id,category,subcategory,type,status FROM feedback WHERE status=1 
[2017-06-19 12:13:14]	SQL :	SELECT feature_id FROM business_feature WHERE bid='1'
[2017-06-19 12:13:14]	SQL :	SELECT feature_id FROM business_feature WHERE bid='1'
[2017-06-19 12:13:14]	SQL :	SELECT feature_id FROM business_feature WHERE bid='1'
[2017-06-19 12:13:14]	SQL :	SELECT id,type FROM 1_leads_status
[2017-06-19 12:13:14]	SQL :	SELECT design FROM business_lead_use WHERE bid='1' LIMIT 0,1
[2017-06-19 12:13:14]	SQL :	SELECT sid,status FROM 1_support_status
[2017-06-19 12:13:14]	SQL :	SELECT feature_id FROM `business_feature` where bid=1
[2017-06-19 12:13:14]	SQL :	SELECT action_align FROM account_settings WHERE bid='1'
[2017-06-19 12:13:14]	SQL :	SELECT dialstatus FROM 1_callhistory WHERE dialstatus = 'CONNECTING'
[2017-06-19 12:13:14]	SQL :	SELECT FOUND_ROWS() as cnt
[2017-06-19 12:13:14]	SQL :	SELECT del_notify FROM account_settings WHERE bid='1'
[2017-06-19 12:13:14]	DEBUG :	Model Class Initialized
[2017-06-19 12:13:14]	DEBUG :	Database Driver Class Initialized
[2017-06-19 12:13:14]	SQL :	SELECT * FROM 1_user_role
							WHERE roleid='1'
							AND bid='1'
[2017-06-19 12:13:14]	SQL :	SELECT m.modid,m.modname,m.moddesc,
							COALESCE(o.opt_add,0) as opt_add,
							COALESCE(o.opt_view,0) as opt_view,
							COALESCE(o.opt_download,0) as opt_download,
							COALESCE(opt_delete,0) as opt_delete 
							FROM module m
							LEFT JOIN (SELECT * FROM 1_role_mod_opt
							WHERE roleid='1' 
							AND bid='1') as o
							ON m.modid=o.modid where m.status=1
[2017-06-19 12:13:14]	SQL :	SELECT a.*,f.fieldname FROM 1_role_access a
								LEFT JOIN systemfields f on a.fieldid=f.fieldid
								WHERE a.roleid='1'
								AND a.bid='1'
								AND a.fieldtype='s'
[2017-06-19 12:13:14]	SQL :	SELECT * FROM 1_role_access
								WHERE roleid='1'
								AND bid='1'
							AND fieldtype='c'
[2017-06-19 12:13:14]	SQL :	SELECT feature_id FROM `business_feature` where bid=1
[2017-06-19 12:13:14]	SQL :	SELECT * FROM business where pid='1'
[2017-06-19 12:13:14]	SQL :	UPDATE `call_sessions` SET `last_activity` = '1497853678', `user_data` = 'a:20:{s:3:\"uid\";s:1:\"1\";s:3:\"bid\";s:1:\"1\";s:8:\"username\";s:20:\"ashwini.naidu@vmc.in\";s:3:\"eid\";s:1:\"1\";s:3:\"app\";s:1:\"1\";s:7:\"authkey\";s:17:\"1.1.d886b8e8a0615\";s:9:\"recording\";s:1:\"1\";s:10:\"mcubecalls\";s:1:\"1\";s:7:\"mtdebug\";s:1:\"1\";s:8:\"deviceid\";s:36:\"ffffffff-a4d5-960f-ffff-ffff82ba1723\";s:8:\"language\";s:1:\"1\";s:6:\"status\";s:1:\"1\";s:9:\"appstatus\";s:1:\"1\";s:3:\"pid\";s:1:\"0\";s:3:\"act\";s:1:\"0\";s:16:\"registrationdate\";s:19:\"2014-09-08 16:04:19\";s:10:\"dnd_status\";s:1:\"0\";s:9:\"logged_in\";s:1:\"1\";s:6:\"roleid\";s:1:\"1\";s:4:\"cbid\";s:1:\"1\";}' WHERE `session_id` = '847e9ee4e1543e295a6ddd381996c5e3'
[2017-06-19 12:13:14]	DEBUG :	Database Driver Class Initialized
[2017-06-19 12:13:14]	SQL :	SELECT * FROM 1_user_role
							WHERE roleid='1'
							AND bid='1'
[2017-06-19 12:13:14]	SQL :	SELECT m.modid,m.modname,m.moddesc,
							COALESCE(o.opt_add,0) as opt_add,
							COALESCE(o.opt_view,0) as opt_view,
							COALESCE(o.opt_download,0) as opt_download,
							COALESCE(opt_delete,0) as opt_delete 
							FROM module m
							LEFT JOIN (SELECT * FROM 1_role_mod_opt
							WHERE roleid='1' 
							AND bid='1') as o
							ON m.modid=o.modid where m.status=1
[2017-06-19 12:13:14]	SQL :	SELECT a.*,f.fieldname FROM 1_role_access a
								LEFT JOIN systemfields f on a.fieldid=f.fieldid
								WHERE a.roleid='1'
								AND a.bid='1'
								AND a.fieldtype='s'
[2017-06-19 12:13:14]	SQL :	SELECT * FROM 1_role_access
								WHERE roleid='1'
								AND bid='1'
							AND fieldtype='c'
[2017-06-19 12:13:14]	SQL :	SELECT SQL_CALC_FOUND_ROWS g.*
				  FROM 1_groups g 
				  LEFT JOIN group_rules r on g.rules=r.rulesid 
				  LEFT JOIN 1_employee e on g.eid=e.eid
				  LEFT JOIN prinumbers p on (g.prinumber=p.number AND p.bid='1')
				  WHERE g.bid='1' 
				  and g.status!=0  limit 0,20
[2017-06-19 12:13:14]	SQL :	SELECT FOUND_ROWS() as cnt
[2017-06-19 12:13:14]	DEBUG :	Database Driver Class Initialized
[2017-06-19 12:13:14]	SQL :	SELECT * FROM ( 
				SELECT 's' as type,f.addon,f.fieldid,f.modid,
				f.fieldname,'' as fieldtype,'' as fieldKey,'' as options,
				'' as defaultvalue,f.is_required as is_required,f.is_hidden,COALESCE(l.display_order,0) as display_order,
				l.customlabel,COALESCE(l.show,1) as `show`,COALESCE(l.listing,1) as `listing`
				FROM systemfields f
				LEFT JOIN (
					SELECT * FROM 1_custom_label
					WHERE fieldtype='s'
				) as l
				on (f.fieldid=l.fieldid AND l.modid=f.modid)
				WHERE f.modid='3'  AND f.is_hidden=0   AND f.addon=0 
				UNION
				SELECT 'c' as type,'0',f.fieldid,f.modid,
				f.fieldname,f.fieldtype,f.field_key as fieldKey,f.options,
				f.defaultvalue,f.is_required as is_required,'',COALESCE(l.display_order,0) as display_order,
				l.customlabel,COALESCE(l.show,1) as `show`,COALESCE(l.listing,1) as `listing`
				FROM 1_customfields f
				LEFT JOIN (
					SELECT * FROM 1_custom_label
					WHERE fieldtype='c'
				) as l
				on (f.fieldid=l.fieldid AND l.modid=f.modid)
				WHERE f.modid='3') as t ORDER BY display_order ASC
[2017-06-19 12:13:14]	DEBUG :	Database Driver Class Initialized
[2017-06-19 12:13:14]	SQL :	SELECT g.*,e.empname as eid,sg.groupname as supportgroup,
					  if(g.connectowner=1,'YES','NO') as connectwner,
					  g.eid as epid,if(g.record=1,'YES','NO') as records,
					  if(g.replytocustomer=1,'YES','NO') as replycus,
					  if(g.replytoexecutive=1,'YES','NO') as replyexe,
					  if(g.pincode=1,'YES','NO') as pcode,
					  p.number as prinumber,
					  p.landingnumber as addnumber,(if(g.primary_rule=0,'All',cr.regionname)) as regionname,
					  r.rulename as rules,g.rules as rule
					  FROM 1_groups g 
					  LEFT JOIN group_rules r on g.rules=r.rulesid 
					  LEFT JOIN 1_employee e on g.eid=e.eid 
					  LEFT JOIN 1_support_groups sg on g.supportgrp=sg.gid 
					  LEFT JOIN prinumber p on g.prinumber=p.number
					  LEFT JOIN 1_custom_region cr on g.primary_rule=cr.regionid
					  WHERE g.bid='1' 
					  AND g.gid='14'
[2017-06-19 12:13:14]	SQL :	SELECT * FROM 1_customfieldsvalue 
				WHERE bid='1' 
				AND modid='3'
				AND dataid='14'
[2017-06-19 12:13:14]	SQL :	SELECT COALESCE(COUNT(callid), 0) AS cnt
							FROM 1_callhistory h 
							WHERE (h.`starttime` >= DATE_SUB(CURDATE(), INTERVAL 6 DAY)) AND h.gid = 14 GROUP BY DAY(h.starttime)
[2017-06-19 12:13:14]	DEBUG :	Database Driver Class Initialized
[2017-06-19 12:13:14]	SQL :	SELECT g.*,e.empname as eid,sg.groupname as supportgroup,
					  if(g.connectowner=1,'YES','NO') as connectwner,
					  g.eid as epid,if(g.record=1,'YES','NO') as records,
					  if(g.replytocustomer=1,'YES','NO') as replycus,
					  if(g.replytoexecutive=1,'YES','NO') as replyexe,
					  if(g.pincode=1,'YES','NO') as pcode,
					  p.number as prinumber,
					  p.landingnumber as addnumber,(if(g.primary_rule=0,'All',cr.regionname)) as regionname,
					  r.rulename as rules,g.rules as rule
					  FROM 1_groups g 
					  LEFT JOIN group_rules r on g.rules=r.rulesid 
					  LEFT JOIN 1_employee e on g.eid=e.eid 
					  LEFT JOIN 1_support_groups sg on g.supportgrp=sg.gid 
					  LEFT JOIN prinumber p on g.prinumber=p.number
					  LEFT JOIN 1_custom_region cr on g.primary_rule=cr.regionid
					  WHERE g.bid='1' 
					  AND g.gid='15'
[2017-06-19 12:13:14]	SQL :	SELECT * FROM 1_customfieldsvalue 
				WHERE bid='1' 
				AND modid='3'
				AND dataid='15'
[2017-06-19 12:13:14]	SQL :	SELECT COALESCE(COUNT(callid), 0) AS cnt
							FROM 1_callhistory h 
							WHERE (h.`starttime` >= DATE_SUB(CURDATE(), INTERVAL 6 DAY)) AND h.gid = 15 GROUP BY DAY(h.starttime)
[2017-06-19 12:13:14]	SQL :	SELECT GROUP_CONCAT(empname SEPARATOR ',') as empname FROM 1_employee WHERE eid IN(58 )
[2017-06-19 12:13:14]	DEBUG :	Database Driver Class Initialized
[2017-06-19 12:13:14]	SQL :	SELECT g.*,e.empname as eid,sg.groupname as supportgroup,
					  if(g.connectowner=1,'YES','NO') as connectwner,
					  g.eid as epid,if(g.record=1,'YES','NO') as records,
					  if(g.replytocustomer=1,'YES','NO') as replycus,
					  if(g.replytoexecutive=1,'YES','NO') as replyexe,
					  if(g.pincode=1,'YES','NO') as pcode,
					  p.number as prinumber,
					  p.landingnumber as addnumber,(if(g.primary_rule=0,'All',cr.regionname)) as regionname,
					  r.rulename as rules,g.rules as rule
					  FROM 1_groups g 
					  LEFT JOIN group_rules r on g.rules=r.rulesid 
					  LEFT JOIN 1_employee e on g.eid=e.eid 
					  LEFT JOIN 1_support_groups sg on g.supportgrp=sg.gid 
					  LEFT JOIN prinumber p on g.prinumber=p.number
					  LEFT JOIN 1_custom_region cr on g.primary_rule=cr.regionid
					  WHERE g.bid='1' 
					  AND g.gid='16'
[2017-06-19 12:13:14]	SQL :	SELECT * FROM 1_customfieldsvalue 
				WHERE bid='1' 
				AND modid='3'
				AND dataid='16'
[2017-06-19 12:13:14]	SQL :	SELECT COALESCE(COUNT(callid), 0) AS cnt
							FROM 1_callhistory h 
							WHERE (h.`starttime` >= DATE_SUB(CURDATE(), INTERVAL 6 DAY)) AND h.gid = 16 GROUP BY DAY(h.starttime)
[2017-06-19 12:13:14]	DEBUG :	Database Driver Class Initialized
[2017-06-19 12:13:14]	SQL :	SELECT g.*,e.empname as eid,sg.groupname as supportgroup,
					  if(g.connectowner=1,'YES','NO') as connectwner,
					  g.eid as epid,if(g.record=1,'YES','NO') as records,
					  if(g.replytocustomer=1,'YES','NO') as replycus,
					  if(g.replytoexecutive=1,'YES','NO') as replyexe,
					  if(g.pincode=1,'YES','NO') as pcode,
					  p.number as prinumber,
					  p.landingnumber as addnumber,(if(g.primary_rule=0,'All',cr.regionname)) as regionname,
					  r.rulename as rules,g.rules as rule
					  FROM 1_groups g 
					  LEFT JOIN group_rules r on g.rules=r.rulesid 
					  LEFT JOIN 1_employee e on g.eid=e.eid 
					  LEFT JOIN 1_support_groups sg on g.supportgrp=sg.gid 
					  LEFT JOIN prinumber p on g.prinumber=p.number
					  LEFT JOIN 1_custom_region cr on g.primary_rule=cr.regionid
					  WHERE g.bid='1' 
					  AND g.gid='17'
[2017-06-19 12:13:14]	SQL :	SELECT * FROM 1_customfieldsvalue 
				WHERE bid='1' 
				AND modid='3'
				AND dataid='17'
[2017-06-19 12:13:14]	SQL :	SELECT COALESCE(COUNT(callid), 0) AS cnt
							FROM 1_callhistory h 
							WHERE (h.`starttime` >= DATE_SUB(CURDATE(), INTERVAL 6 DAY)) AND h.gid = 17 GROUP BY DAY(h.starttime)
[2017-06-19 12:13:14]	DEBUG :	Database Driver Class Initialized
[2017-06-19 12:13:14]	SQL :	SELECT * FROM ( 
				SELECT 's' as type,f.addon,f.fieldid,f.modid,
				f.fieldname,'' as fieldtype,'' as fieldKey,'' as options,
				'' as defaultvalue,f.is_required as is_required,f.is_hidden,COALESCE(l.display_order,0) as display_order,
				l.customlabel,COALESCE(l.show,1) as `show`,COALESCE(l.listing,1) as `listing`
				FROM systemfields f
				LEFT JOIN (
					SELECT * FROM 1_custom_label
					WHERE fieldtype='s'
				) as l
				on (f.fieldid=l.fieldid AND l.modid=f.modid)
				WHERE f.modid='3'  AND f.is_hidden=0   AND f.addon=0 
				UNION
				SELECT 'c' as type,'0',f.fieldid,f.modid,
				f.fieldname,f.fieldtype,f.field_key as fieldKey,f.options,
				f.defaultvalue,f.is_required as is_required,'',COALESCE(l.display_order,0) as display_order,
				l.customlabel,COALESCE(l.show,1) as `show`,COALESCE(l.listing,1) as `listing`
				FROM 1_customfields f
				LEFT JOIN (
					SELECT * FROM 1_custom_label
					WHERE fieldtype='c'
				) as l
				on (f.fieldid=l.fieldid AND l.modid=f.modid)
				WHERE f.modid='3') as t ORDER BY display_order ASC
[2017-06-19 12:13:14]	SQL :	select eid,empname from 1_employee where status=1 ORDER BY empname
[2017-06-19 12:13:14]	DEBUG :	Database Driver Class Initialized
[2017-06-19 12:13:14]	SQL :	SELECT * FROM 1_user_role
							WHERE roleid='1'
							AND bid='1'
[2017-06-19 12:13:14]	SQL :	SELECT m.modid,m.modname,m.moddesc,
							COALESCE(o.opt_add,0) as opt_add,
							COALESCE(o.opt_view,0) as opt_view,
							COALESCE(o.opt_download,0) as opt_download,
							COALESCE(opt_delete,0) as opt_delete 
							FROM module m
							LEFT JOIN (SELECT * FROM 1_role_mod_opt
							WHERE roleid='1' 
							AND bid='1') as o
							ON m.modid=o.modid where m.status=1
[2017-06-19 12:13:14]	SQL :	SELECT a.*,f.fieldname FROM 1_role_access a
								LEFT JOIN systemfields f on a.fieldid=f.fieldid
								WHERE a.roleid='1'
								AND a.bid='1'
								AND a.fieldtype='s'
[2017-06-19 12:13:14]	SQL :	SELECT * FROM 1_role_access
								WHERE roleid='1'
								AND bid='1'
							AND fieldtype='c'
[2017-06-19 12:13:14]	SQL :	SELECT * FROM 1_employee WHERE status='1' ORDER BY empname
[2017-06-19 12:13:14]	DEBUG :	File loaded: /var/www/html/mcnew/system/application/views/mainheader.php
[2017-06-19 12:13:14]	DEBUG :	Database Driver Class Initialized
[2017-06-19 12:13:14]	SQL :	select a.*,e.empname as reporttoname,b.rolename  as role,if(u.recording=1,'Yes','No') as recording
					  from 1_employee a
					  LEFT JOIN  1_employee e on a.reportto=e.eid
					  LEFT JOIN  user u on a.eid=u.eid
					  ,1_user_role b 
					  where a.roleid=b.roleid AND a.eid='1'
[2017-06-19 12:13:14]	SQL :	SELECT * FROM 1_customfieldsvalue 
				WHERE bid='1' 
				AND modid='2'
				AND dataid='1'
[2017-06-19 12:13:14]	DEBUG :	File loaded: /var/www/html/mcnew/system/application/views/leftsidebar.php
[2017-06-19 12:13:14]	DEBUG :	File loaded: /var/www/html/mcnew/system/application/views/list_view.php
[2017-06-19 12:13:14]	DEBUG :	File loaded: /var/www/html/mcnew/system/application/views/footer.php
[2017-06-19 12:13:14]	DEBUG :	Final output sent to browser
[2017-06-19 12:13:14]	DEBUG :	Total execution time: 0.1367
[2017-06-19 12:13:16]	DEBUG :	Config Class Initialized
[2017-06-19 12:13:16]	DEBUG :	Hooks Class Initialized
[2017-06-19 12:13:16]	DEBUG :	URI Class Initialized
[2017-06-19 12:13:16]	DEBUG :	Router Class Initialized
[2017-06-19 12:13:16]	DEBUG :	Output Class Initialized
[2017-06-19 12:13:16]	DEBUG :	Input Class Initialized
[2017-06-19 12:13:16]	DEBUG :	XSS Filtering completed
[2017-06-19 12:13:16]	DEBUG :	XSS Filtering completed
[2017-06-19 12:13:16]	DEBUG :	XSS Filtering completed
[2017-06-19 12:13:16]	DEBUG :	XSS Filtering completed
[2017-06-19 12:13:16]	DEBUG :	Global POST and COOKIE data sanitized
[2017-06-19 12:13:16]	DEBUG :	Language Class Initialized
[2017-06-19 12:13:16]	DEBUG :	Loader Class Initialized
[2017-06-19 12:13:16]	DEBUG :	Helper loaded: url_helper
[2017-06-19 12:13:16]	DEBUG :	Helper loaded: form_helper
[2017-06-19 12:13:16]	DEBUG :	Helper loaded: html_helper
[2017-06-19 12:13:16]	DEBUG :	Helper loaded: email_helper
[2017-06-19 12:13:16]	DEBUG :	Helper loaded: ckeditor_helper
[2017-06-19 12:13:16]	DEBUG :	Helper loaded: mcube_helper
[2017-06-19 12:13:16]	DEBUG :	Database Driver Class Initialized
[2017-06-19 12:13:16]	ERROR :	Severity: 8192  --> mysql_pconnect(): The mysql extension is deprecated and will be removed in the future: use mysqli or PDO instead /var/www/html/mcnew/system/database/drivers/mysql/mysql_driver.php 88
[2017-06-19 12:13:16]	DEBUG :	Session Class Initialized
[2017-06-19 12:13:16]	DEBUG :	Helper loaded: string_helper
[2017-06-19 12:13:16]	DEBUG :	Encrypt Class Initialized
[2017-06-19 12:13:16]	SQL :	SELECT *
FROM (`call_sessions`)
WHERE `session_id` = '847e9ee4e1543e295a6ddd381996c5e3'
AND `user_agent` = 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36'
[2017-06-19 12:13:16]	DEBUG :	Session routines successfully run
[2017-06-19 12:13:16]	DEBUG :	Table Class Initialized
[2017-06-19 12:13:16]	DEBUG :	Pagination Class Initialized
[2017-06-19 12:13:16]	DEBUG :	Config file loaded: config/paypallib_config.php
[2017-06-19 12:13:16]	DEBUG :	Form Validation Class Initialized
[2017-06-19 12:13:16]	DEBUG :	Email Class Initialized
[2017-06-19 12:13:16]	DEBUG :	Language file loaded: language/english/calendar_lang.php
[2017-06-19 12:13:16]	DEBUG :	Calendar Class Initialized
[2017-06-19 12:13:16]	DEBUG :	Controller Class Initialized
[2017-06-19 12:13:16]	DEBUG :	Model Class Initialized
[2017-06-19 12:13:16]	DEBUG :	Model Class Initialized
[2017-06-19 12:13:16]	DEBUG :	Model Class Initialized
[2017-06-19 12:13:16]	DEBUG :	Model Class Initialized
[2017-06-19 12:13:16]	DEBUG :	Model Class Initialized
[2017-06-19 12:13:16]	DEBUG :	Model Class Initialized
[2017-06-19 12:13:16]	DEBUG :	Model Class Initialized
[2017-06-19 12:13:16]	DEBUG :	Model Class Initialized
[2017-06-19 12:13:16]	DEBUG :	Model Class Initialized
[2017-06-19 12:13:16]	DEBUG :	Model Class Initialized
[2017-06-19 12:13:16]	DEBUG :	Model Class Initialized
[2017-06-19 12:13:16]	DEBUG :	Model Class Initialized
[2017-06-19 12:13:16]	DEBUG :	Plugin loaded: to_pdf_pi
[2017-06-19 12:13:16]	SQL :	SELECT u.uid FROM user u
				LEFT JOIN 1_employee e on (e.bid=u.bid AND e.eid=u.eid)
				WHERE e.status='1' AND e.login='1' AND u.status='1' 
				AND u.bid='1' AND u.eid='1'
[2017-06-19 12:13:16]	SQL :	SELECT *
FROM (`language`)
WHERE `langid` = '1'
[2017-06-19 12:13:16]	DEBUG :	Database Driver Class Initialized
[2017-06-19 12:13:16]	SQL :	SELECT roleid FROM 1_employee
							WHERE eid='1'
							AND bid='1'
[2017-06-19 12:13:16]	SQL :	UPDATE `call_sessions` SET `last_activity` = '1497853678', `user_data` = 'a:20:{s:3:\"uid\";s:1:\"1\";s:3:\"bid\";s:1:\"1\";s:8:\"username\";s:20:\"ashwini.naidu@vmc.in\";s:3:\"eid\";s:1:\"1\";s:3:\"app\";s:1:\"1\";s:7:\"authkey\";s:17:\"1.1.d886b8e8a0615\";s:9:\"recording\";s:1:\"1\";s:10:\"mcubecalls\";s:1:\"1\";s:7:\"mtdebug\";s:1:\"1\";s:8:\"deviceid\";s:36:\"ffffffff-a4d5-960f-ffff-ffff82ba1723\";s:8:\"language\";s:1:\"1\";s:6:\"status\";s:1:\"1\";s:9:\"appstatus\";s:1:\"1\";s:3:\"pid\";s:1:\"0\";s:3:\"act\";s:1:\"0\";s:16:\"registrationdate\";s:19:\"2014-09-08 16:04:19\";s:10:\"dnd_status\";s:1:\"0\";s:9:\"logged_in\";s:1:\"1\";s:6:\"roleid\";s:1:\"1\";s:4:\"cbid\";s:1:\"1\";}' WHERE `session_id` = '847e9ee4e1543e295a6ddd381996c5e3'
[2017-06-19 12:13:17]	DEBUG :	Database Driver Class Initialized
[2017-06-19 12:13:17]	SQL :	SELECT * FROM 1_user_role
							WHERE roleid='1'
							AND bid='1'
[2017-06-19 12:13:17]	SQL :	SELECT m.modid,m.modname,m.moddesc,
							COALESCE(o.opt_add,0) as opt_add,
							COALESCE(o.opt_view,0) as opt_view,
							COALESCE(o.opt_download,0) as opt_download,
							COALESCE(opt_delete,0) as opt_delete 
							FROM module m
							LEFT JOIN (SELECT * FROM 1_role_mod_opt
							WHERE roleid='1' 
							AND bid='1') as o
							ON m.modid=o.modid where m.status=1
[2017-06-19 12:13:17]	SQL :	SELECT a.*,f.fieldname FROM 1_role_access a
								LEFT JOIN systemfields f on a.fieldid=f.fieldid
								WHERE a.roleid='1'
								AND a.bid='1'
								AND a.fieldtype='s'
[2017-06-19 12:13:17]	SQL :	SELECT * FROM 1_role_access
								WHERE roleid='1'
								AND bid='1'
							AND fieldtype='c'
[2017-06-19 12:13:17]	SQL :	SELECT a.selfdisable FROM 1_employee a WHERE a.eid='1'
[2017-06-19 12:13:17]	DEBUG :	Language file loaded: language/english/unit_test_lang.php
[2017-06-19 12:13:17]	DEBUG :	Language file loaded: language/english/db_lang.php
[2017-06-19 12:13:17]	DEBUG :	Language file loaded: language/english/ftp_lang.php
[2017-06-19 12:13:17]	DEBUG :	Language file loaded: language/english/menu_lang.php
[2017-06-19 12:13:17]	DEBUG :	Language file loaded: language/english/db_tables_lang.php
[2017-06-19 12:13:17]	DEBUG :	Language file loaded: language/english/form_level_lang.php
[2017-06-19 12:13:17]	DEBUG :	Language file loaded: language/english/form_validation_lang.php
[2017-06-19 12:13:17]	DEBUG :	Language file loaded: language/english/email_lang.php
[2017-06-19 12:13:17]	DEBUG :	Language file loaded: language/english/number_lang.php
[2017-06-19 12:13:17]	DEBUG :	Language file loaded: language/english/layout_lang.php
[2017-06-19 12:13:17]	DEBUG :	Language file loaded: language/english/validation_lang.php
[2017-06-19 12:13:17]	DEBUG :	Language file loaded: language/english/scaffolding_lang.php
[2017-06-19 12:13:17]	DEBUG :	Language file loaded: language/english/date_lang.php
[2017-06-19 12:13:17]	DEBUG :	Language file loaded: language/english/profiler_lang.php
[2017-06-19 12:13:17]	DEBUG :	Language file loaded: language/english/imglib_lang.php
[2017-06-19 12:13:17]	DEBUG :	Language file loaded: language/english/error_msg_lang.php
[2017-06-19 12:13:17]	DEBUG :	Language file loaded: language/english/upload_lang.php
[2017-06-19 12:13:17]	SQL :	SELECT id,category,subcategory,type,status FROM feedback WHERE status=1 
[2017-06-19 12:13:17]	SQL :	SELECT feature_id FROM business_feature WHERE bid='1'
[2017-06-19 12:13:17]	SQL :	SELECT feature_id FROM business_feature WHERE bid='1'
[2017-06-19 12:13:17]	SQL :	SELECT feature_id FROM business_feature WHERE bid='1'
[2017-06-19 12:13:17]	SQL :	SELECT id,type FROM 1_leads_status
[2017-06-19 12:13:17]	SQL :	SELECT design FROM business_lead_use WHERE bid='1' LIMIT 0,1
[2017-06-19 12:13:17]	SQL :	SELECT sid,status FROM 1_support_status
[2017-06-19 12:13:17]	SQL :	SELECT feature_id FROM `business_feature` where bid=1
[2017-06-19 12:13:17]	SQL :	SELECT action_align FROM account_settings WHERE bid='1'
[2017-06-19 12:13:17]	SQL :	SELECT dialstatus FROM 1_callhistory WHERE dialstatus = 'CONNECTING'
[2017-06-19 12:13:17]	SQL :	SELECT FOUND_ROWS() as cnt
[2017-06-19 12:13:17]	SQL :	SELECT del_notify FROM account_settings WHERE bid='1'
[2017-06-19 12:13:17]	DEBUG :	Model Class Initialized
[2017-06-19 12:13:17]	DEBUG :	Database Driver Class Initialized
[2017-06-19 12:13:17]	SQL :	SELECT * FROM 1_user_role
							WHERE roleid='1'
							AND bid='1'
[2017-06-19 12:13:17]	SQL :	SELECT m.modid,m.modname,m.moddesc,
							COALESCE(o.opt_add,0) as opt_add,
							COALESCE(o.opt_view,0) as opt_view,
							COALESCE(o.opt_download,0) as opt_download,
							COALESCE(opt_delete,0) as opt_delete 
							FROM module m
							LEFT JOIN (SELECT * FROM 1_role_mod_opt
							WHERE roleid='1' 
							AND bid='1') as o
							ON m.modid=o.modid where m.status=1
[2017-06-19 12:13:17]	SQL :	SELECT a.*,f.fieldname FROM 1_role_access a
								LEFT JOIN systemfields f on a.fieldid=f.fieldid
								WHERE a.roleid='1'
								AND a.bid='1'
								AND a.fieldtype='s'
[2017-06-19 12:13:17]	SQL :	SELECT * FROM 1_role_access
								WHERE roleid='1'
								AND bid='1'
							AND fieldtype='c'
[2017-06-19 12:13:17]	SQL :	SELECT feature_id FROM `business_feature` where bid=1
[2017-06-19 12:13:17]	SQL :	SELECT feature_id FROM `business_feature` where bid=1
[2017-06-19 12:13:17]	SQL :	SELECT * FROM business where pid='1'
[2017-06-19 12:13:17]	DEBUG :	Database Driver Class Initialized
[2017-06-19 12:13:17]	SQL :	SELECT * FROM ( 
				SELECT 's' as type,f.addon,f.fieldid,f.modid,
				f.fieldname,'' as fieldtype,'' as fieldKey,'' as options,
				'' as defaultvalue,f.is_required as is_required,f.is_hidden,COALESCE(l.display_order,0) as display_order,
				l.customlabel,COALESCE(l.show,1) as `show`,COALESCE(l.listing,1) as `listing`
				FROM systemfields f
				LEFT JOIN (
					SELECT * FROM 1_custom_label
					WHERE fieldtype='s'
				) as l
				on (f.fieldid=l.fieldid AND l.modid=f.modid)
				WHERE f.modid='3'  AND f.is_hidden=0 
				UNION
				SELECT 'c' as type,'0',f.fieldid,f.modid,
				f.fieldname,f.fieldtype,f.field_key as fieldKey,f.options,
				f.defaultvalue,f.is_required as is_required,'',COALESCE(l.display_order,0) as display_order,
				l.customlabel,COALESCE(l.show,1) as `show`,COALESCE(l.listing,1) as `listing`
				FROM 1_customfields f
				LEFT JOIN (
					SELECT * FROM 1_custom_label
					WHERE fieldtype='c'
				) as l
				on (f.fieldid=l.fieldid AND l.modid=f.modid)
				WHERE f.modid='3') as t ORDER BY display_order ASC
[2017-06-19 12:13:17]	DEBUG :	Database Driver Class Initialized
[2017-06-19 12:13:17]	SQL :	SELECT g.*,e.empname as eid,sg.groupname as supportgroup,
					  if(g.connectowner=1,'YES','NO') as connectwner,
					  g.eid as epid,if(g.record=1,'YES','NO') as records,
					  if(g.replytocustomer=1,'YES','NO') as replycus,
					  if(g.replytoexecutive=1,'YES','NO') as replyexe,
					  if(g.pincode=1,'YES','NO') as pcode,
					  p.number as prinumber,
					  p.landingnumber as addnumber,(if(g.primary_rule=0,'All',cr.regionname)) as regionname,
					  r.rulename as rules,g.rules as rule
					  FROM 1_groups g 
					  LEFT JOIN group_rules r on g.rules=r.rulesid 
					  LEFT JOIN 1_employee e on g.eid=e.eid 
					  LEFT JOIN 1_support_groups sg on g.supportgrp=sg.gid 
					  LEFT JOIN prinumber p on g.prinumber=p.number
					  LEFT JOIN 1_custom_region cr on g.primary_rule=cr.regionid
					  WHERE g.bid='1' 
					  AND g.gid='14'
[2017-06-19 12:13:17]	SQL :	SELECT * FROM 1_customfieldsvalue 
				WHERE bid='1' 
				AND modid='3'
				AND dataid='14'
[2017-06-19 12:13:17]	SQL :	SELECT s.fieldname
							FROM systemfields s
							LEFT JOIN `features` f on s.addon=f.feature_id
							LEFT JOIN business_packageaddons b on (f.feature_id=b.feature_id AND b.number='200048')
							WHERE s.modid='3' AND s.addon!=0 AND b.number is null
[2017-06-19 12:13:17]	SQL :	SELECT feature_id FROM business_feature WHERE bid='1'
[2017-06-19 12:13:17]	SQL :	SELECT l.region, p.bid,l.number FROM landingnumbers l 
		                        LEFT JOIN prinumbers p ON p.landingnumber=l.number 
		                        WHERE p.bid='1' 
		                        AND p.status = '0' AND p.type = '0' AND l.module_id = '1'
		                         
[2017-06-19 12:13:17]	SQL :	SELECT p.status,p.number,p.landingnumber from prinumbers p
								LEFT JOIN landingnumbers l on l.pri=p.pri
								WHERE p.bid='1' 
								AND p.ntype=0 AND l.module_id='1'
								
[2017-06-19 12:13:17]	SQL :	SELECT * FROM group_rules
[2017-06-19 12:13:17]	SQL :	select eid,empname from 1_employee where status=1 ORDER BY empname
[2017-06-19 12:13:17]	DEBUG :	Database Driver Class Initialized
[2017-06-19 12:13:17]	SQL :	SELECT * FROM 1_user_role
							WHERE roleid='1'
							AND bid='1'
[2017-06-19 12:13:17]	SQL :	SELECT m.modid,m.modname,m.moddesc,
							COALESCE(o.opt_add,0) as opt_add,
							COALESCE(o.opt_view,0) as opt_view,
							COALESCE(o.opt_download,0) as opt_download,
							COALESCE(opt_delete,0) as opt_delete 
							FROM module m
							LEFT JOIN (SELECT * FROM 1_role_mod_opt
							WHERE roleid='1' 
							AND bid='1') as o
							ON m.modid=o.modid where m.status=1
[2017-06-19 12:13:17]	SQL :	SELECT a.*,f.fieldname FROM 1_role_access a
								LEFT JOIN systemfields f on a.fieldid=f.fieldid
								WHERE a.roleid='1'
								AND a.bid='1'
								AND a.fieldtype='s'
[2017-06-19 12:13:17]	SQL :	SELECT * FROM 1_role_access
								WHERE roleid='1'
								AND bid='1'
							AND fieldtype='c'
[2017-06-19 12:13:17]	SQL :	SELECT * FROM 1_employee WHERE status='1' ORDER BY empname
[2017-06-19 12:13:17]	SQL :	SELECT * FROM 1_custom_region
[2017-06-19 12:13:17]	SQL :	SELECT support FROM `prinumbers` WHERE bid='1' 
[2017-06-19 12:13:17]	SQL :	SELECT * FROM 1_support_groups WHERE status=1
[2017-06-19 12:13:17]	SQL :	select eid,empname from 1_employee where status=1 ORDER BY empname
[2017-06-19 12:13:17]	DEBUG :	Database Driver Class Initialized
[2017-06-19 12:13:17]	SQL :	SELECT * FROM 1_user_role
							WHERE roleid='1'
							AND bid='1'
[2017-06-19 12:13:17]	SQL :	SELECT m.modid,m.modname,m.moddesc,
							COALESCE(o.opt_add,0) as opt_add,
							COALESCE(o.opt_view,0) as opt_view,
							COALESCE(o.opt_download,0) as opt_download,
							COALESCE(opt_delete,0) as opt_delete 
							FROM module m
							LEFT JOIN (SELECT * FROM 1_role_mod_opt
							WHERE roleid='1' 
							AND bid='1') as o
							ON m.modid=o.modid where m.status=1
[2017-06-19 12:13:17]	SQL :	SELECT a.*,f.fieldname FROM 1_role_access a
								LEFT JOIN systemfields f on a.fieldid=f.fieldid
								WHERE a.roleid='1'
								AND a.bid='1'
								AND a.fieldtype='s'
[2017-06-19 12:13:17]	SQL :	SELECT * FROM 1_role_access
								WHERE roleid='1'
								AND bid='1'
							AND fieldtype='c'
[2017-06-19 12:13:17]	SQL :	SELECT * FROM 1_employee WHERE status='1' ORDER BY empname
[2017-06-19 12:13:17]	DEBUG :	File loaded: /var/www/html/mcnew/system/application/views/mainheader.php
[2017-06-19 12:13:17]	DEBUG :	Database Driver Class Initialized
[2017-06-19 12:13:17]	SQL :	select a.*,e.empname as reporttoname,b.rolename  as role,if(u.recording=1,'Yes','No') as recording
					  from 1_employee a
					  LEFT JOIN  1_employee e on a.reportto=e.eid
					  LEFT JOIN  user u on a.eid=u.eid
					  ,1_user_role b 
					  where a.roleid=b.roleid AND a.eid='1'
[2017-06-19 12:13:17]	SQL :	SELECT * FROM 1_customfieldsvalue 
				WHERE bid='1' 
				AND modid='2'
				AND dataid='1'
[2017-06-19 12:13:17]	DEBUG :	File loaded: /var/www/html/mcnew/system/application/views/leftsidebar.php
[2017-06-19 12:13:17]	DEBUG :	File loaded: /var/www/html/mcnew/system/application/views/form_view.php
[2017-06-19 12:13:17]	DEBUG :	File loaded: /var/www/html/mcnew/system/application/views/footer.php
[2017-06-19 12:13:17]	DEBUG :	Final output sent to browser
[2017-06-19 12:13:17]	DEBUG :	Total execution time: 0.0948
[2017-06-19 12:13:22]	DEBUG :	Config Class Initialized
[2017-06-19 12:13:22]	DEBUG :	Hooks Class Initialized
[2017-06-19 12:13:22]	DEBUG :	URI Class Initialized
[2017-06-19 12:13:22]	DEBUG :	Router Class Initialized
[2017-06-19 12:13:22]	DEBUG :	Output Class Initialized
[2017-06-19 12:13:22]	DEBUG :	Input Class Initialized
[2017-06-19 12:13:22]	DEBUG :	XSS Filtering completed
[2017-06-19 12:13:22]	DEBUG :	XSS Filtering completed
[2017-06-19 12:13:22]	DEBUG :	XSS Filtering completed
[2017-06-19 12:13:22]	DEBUG :	XSS Filtering completed
[2017-06-19 12:13:22]	DEBUG :	Global POST and COOKIE data sanitized
[2017-06-19 12:13:22]	DEBUG :	Language Class Initialized
[2017-06-19 12:13:22]	DEBUG :	Loader Class Initialized
[2017-06-19 12:13:22]	DEBUG :	Helper loaded: url_helper
[2017-06-19 12:13:22]	DEBUG :	Helper loaded: form_helper
[2017-06-19 12:13:22]	DEBUG :	Helper loaded: html_helper
[2017-06-19 12:13:22]	DEBUG :	Helper loaded: email_helper
[2017-06-19 12:13:22]	DEBUG :	Helper loaded: ckeditor_helper
[2017-06-19 12:13:22]	DEBUG :	Helper loaded: mcube_helper
[2017-06-19 12:13:22]	DEBUG :	Database Driver Class Initialized
[2017-06-19 12:13:22]	ERROR :	Severity: 8192  --> mysql_pconnect(): The mysql extension is deprecated and will be removed in the future: use mysqli or PDO instead /var/www/html/mcnew/system/database/drivers/mysql/mysql_driver.php 88
[2017-06-19 12:13:22]	DEBUG :	Session Class Initialized
[2017-06-19 12:13:22]	DEBUG :	Helper loaded: string_helper
[2017-06-19 12:13:22]	DEBUG :	Encrypt Class Initialized
[2017-06-19 12:13:22]	SQL :	SELECT *
FROM (`call_sessions`)
WHERE `session_id` = '847e9ee4e1543e295a6ddd381996c5e3'
AND `user_agent` = 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36'
[2017-06-19 12:13:22]	DEBUG :	Session routines successfully run
[2017-06-19 12:13:22]	DEBUG :	Table Class Initialized
[2017-06-19 12:13:22]	DEBUG :	Pagination Class Initialized
[2017-06-19 12:13:22]	DEBUG :	Config file loaded: config/paypallib_config.php
[2017-06-19 12:13:22]	DEBUG :	Form Validation Class Initialized
[2017-06-19 12:13:22]	DEBUG :	Email Class Initialized
[2017-06-19 12:13:22]	DEBUG :	Language file loaded: language/english/calendar_lang.php
[2017-06-19 12:13:22]	DEBUG :	Calendar Class Initialized
[2017-06-19 12:13:22]	DEBUG :	Controller Class Initialized
[2017-06-19 12:13:22]	DEBUG :	Model Class Initialized
[2017-06-19 12:13:22]	DEBUG :	Model Class Initialized
[2017-06-19 12:13:22]	DEBUG :	Model Class Initialized
[2017-06-19 12:13:22]	DEBUG :	Model Class Initialized
[2017-06-19 12:13:22]	DEBUG :	Model Class Initialized
[2017-06-19 12:13:22]	DEBUG :	Model Class Initialized
[2017-06-19 12:13:22]	DEBUG :	Model Class Initialized
[2017-06-19 12:13:22]	DEBUG :	Model Class Initialized
[2017-06-19 12:13:22]	DEBUG :	Model Class Initialized
[2017-06-19 12:13:22]	DEBUG :	Model Class Initialized
[2017-06-19 12:13:22]	DEBUG :	Model Class Initialized
[2017-06-19 12:13:22]	DEBUG :	Model Class Initialized
[2017-06-19 12:13:22]	DEBUG :	Plugin loaded: to_pdf_pi
[2017-06-19 12:13:22]	SQL :	SELECT u.uid FROM user u
				LEFT JOIN 1_employee e on (e.bid=u.bid AND e.eid=u.eid)
				WHERE e.status='1' AND e.login='1' AND u.status='1' 
				AND u.bid='1' AND u.eid='1'
[2017-06-19 12:13:22]	SQL :	SELECT *
FROM (`language`)
WHERE `langid` = '1'
[2017-06-19 12:13:22]	DEBUG :	Database Driver Class Initialized
[2017-06-19 12:13:22]	SQL :	SELECT roleid FROM 1_employee
							WHERE eid='1'
							AND bid='1'
[2017-06-19 12:13:22]	SQL :	UPDATE `call_sessions` SET `last_activity` = '1497853678', `user_data` = 'a:20:{s:3:\"uid\";s:1:\"1\";s:3:\"bid\";s:1:\"1\";s:8:\"username\";s:20:\"ashwini.naidu@vmc.in\";s:3:\"eid\";s:1:\"1\";s:3:\"app\";s:1:\"1\";s:7:\"authkey\";s:17:\"1.1.d886b8e8a0615\";s:9:\"recording\";s:1:\"1\";s:10:\"mcubecalls\";s:1:\"1\";s:7:\"mtdebug\";s:1:\"1\";s:8:\"deviceid\";s:36:\"ffffffff-a4d5-960f-ffff-ffff82ba1723\";s:8:\"language\";s:1:\"1\";s:6:\"status\";s:1:\"1\";s:9:\"appstatus\";s:1:\"1\";s:3:\"pid\";s:1:\"0\";s:3:\"act\";s:1:\"0\";s:16:\"registrationdate\";s:19:\"2014-09-08 16:04:19\";s:10:\"dnd_status\";s:1:\"0\";s:9:\"logged_in\";s:1:\"1\";s:6:\"roleid\";s:1:\"1\";s:4:\"cbid\";s:1:\"1\";}' WHERE `session_id` = '847e9ee4e1543e295a6ddd381996c5e3'
[2017-06-19 12:13:22]	DEBUG :	Database Driver Class Initialized
[2017-06-19 12:13:22]	SQL :	SELECT * FROM 1_user_role
							WHERE roleid='1'
							AND bid='1'
[2017-06-19 12:13:22]	SQL :	SELECT m.modid,m.modname,m.moddesc,
							COALESCE(o.opt_add,0) as opt_add,
							COALESCE(o.opt_view,0) as opt_view,
							COALESCE(o.opt_download,0) as opt_download,
							COALESCE(opt_delete,0) as opt_delete 
							FROM module m
							LEFT JOIN (SELECT * FROM 1_role_mod_opt
							WHERE roleid='1' 
							AND bid='1') as o
							ON m.modid=o.modid where m.status=1
[2017-06-19 12:13:22]	SQL :	SELECT a.*,f.fieldname FROM 1_role_access a
								LEFT JOIN systemfields f on a.fieldid=f.fieldid
								WHERE a.roleid='1'
								AND a.bid='1'
								AND a.fieldtype='s'
[2017-06-19 12:13:22]	SQL :	SELECT * FROM 1_role_access
								WHERE roleid='1'
								AND bid='1'
							AND fieldtype='c'
[2017-06-19 12:13:22]	SQL :	SELECT a.selfdisable FROM 1_employee a WHERE a.eid='1'
[2017-06-19 12:13:22]	DEBUG :	Language file loaded: language/english/unit_test_lang.php
[2017-06-19 12:13:22]	DEBUG :	Language file loaded: language/english/db_lang.php
[2017-06-19 12:13:22]	DEBUG :	Language file loaded: language/english/ftp_lang.php
[2017-06-19 12:13:22]	DEBUG :	Language file loaded: language/english/menu_lang.php
[2017-06-19 12:13:22]	DEBUG :	Language file loaded: language/english/db_tables_lang.php
[2017-06-19 12:13:22]	DEBUG :	Language file loaded: language/english/form_level_lang.php
[2017-06-19 12:13:22]	DEBUG :	Language file loaded: language/english/form_validation_lang.php
[2017-06-19 12:13:22]	DEBUG :	Language file loaded: language/english/email_lang.php
[2017-06-19 12:13:22]	DEBUG :	Language file loaded: language/english/number_lang.php
[2017-06-19 12:13:22]	DEBUG :	Language file loaded: language/english/layout_lang.php
[2017-06-19 12:13:22]	DEBUG :	Language file loaded: language/english/validation_lang.php
[2017-06-19 12:13:22]	DEBUG :	Language file loaded: language/english/scaffolding_lang.php
[2017-06-19 12:13:22]	DEBUG :	Language file loaded: language/english/date_lang.php
[2017-06-19 12:13:22]	DEBUG :	Language file loaded: language/english/profiler_lang.php
[2017-06-19 12:13:22]	DEBUG :	Language file loaded: language/english/imglib_lang.php
[2017-06-19 12:13:22]	DEBUG :	Language file loaded: language/english/error_msg_lang.php
[2017-06-19 12:13:22]	DEBUG :	Language file loaded: language/english/upload_lang.php
[2017-06-19 12:13:22]	SQL :	SELECT id,category,subcategory,type,status FROM feedback WHERE status=1 
[2017-06-19 12:13:22]	SQL :	SELECT feature_id FROM business_feature WHERE bid='1'
[2017-06-19 12:13:22]	SQL :	SELECT feature_id FROM business_feature WHERE bid='1'
[2017-06-19 12:13:22]	SQL :	SELECT feature_id FROM business_feature WHERE bid='1'
[2017-06-19 12:13:22]	SQL :	SELECT id,type FROM 1_leads_status
[2017-06-19 12:13:22]	SQL :	SELECT design FROM business_lead_use WHERE bid='1' LIMIT 0,1
[2017-06-19 12:13:22]	SQL :	SELECT sid,status FROM 1_support_status
[2017-06-19 12:13:22]	SQL :	SELECT feature_id FROM `business_feature` where bid=1
[2017-06-19 12:13:22]	SQL :	SELECT action_align FROM account_settings WHERE bid='1'
[2017-06-19 12:13:22]	SQL :	SELECT dialstatus FROM 1_callhistory WHERE dialstatus = 'CONNECTING'
[2017-06-19 12:13:22]	SQL :	SELECT FOUND_ROWS() as cnt
[2017-06-19 12:13:22]	SQL :	SELECT del_notify FROM account_settings WHERE bid='1'
[2017-06-19 12:13:22]	DEBUG :	Model Class Initialized
[2017-06-19 12:13:22]	DEBUG :	Database Driver Class Initialized
[2017-06-19 12:13:22]	SQL :	SELECT * FROM 1_user_role
							WHERE roleid='1'
							AND bid='1'
[2017-06-19 12:13:22]	SQL :	SELECT m.modid,m.modname,m.moddesc,
							COALESCE(o.opt_add,0) as opt_add,
							COALESCE(o.opt_view,0) as opt_view,
							COALESCE(o.opt_download,0) as opt_download,
							COALESCE(opt_delete,0) as opt_delete 
							FROM module m
							LEFT JOIN (SELECT * FROM 1_role_mod_opt
							WHERE roleid='1' 
							AND bid='1') as o
							ON m.modid=o.modid where m.status=1
[2017-06-19 12:13:22]	SQL :	SELECT a.*,f.fieldname FROM 1_role_access a
								LEFT JOIN systemfields f on a.fieldid=f.fieldid
								WHERE a.roleid='1'
								AND a.bid='1'
								AND a.fieldtype='s'
[2017-06-19 12:13:22]	SQL :	SELECT * FROM 1_role_access
								WHERE roleid='1'
								AND bid='1'
							AND fieldtype='c'
[2017-06-19 12:13:22]	SQL :	SELECT p.status,p.number,p.landingnumber from prinumbers p
									LEFT JOIN landingnumbers l on l.pri=p.pri
									WHERE p.bid='1' AND p.status=0
									AND l.region = 'KA' AND p.ntype=0 AND l.module_id='1'
									ORDER BY l.region
[2017-06-19 12:13:22]	DEBUG :	Final output sent to browser
[2017-06-19 12:13:22]	DEBUG :	Total execution time: 0.0791
[2017-06-19 12:13:26]	DEBUG :	Config Class Initialized
[2017-06-19 12:13:26]	DEBUG :	Hooks Class Initialized
[2017-06-19 12:13:26]	DEBUG :	URI Class Initialized
[2017-06-19 12:13:26]	DEBUG :	Router Class Initialized
[2017-06-19 12:13:26]	DEBUG :	Output Class Initialized
[2017-06-19 12:13:26]	DEBUG :	Input Class Initialized
[2017-06-19 12:13:26]	DEBUG :	XSS Filtering completed
[2017-06-19 12:13:26]	DEBUG :	XSS Filtering completed
[2017-06-19 12:13:26]	DEBUG :	XSS Filtering completed
[2017-06-19 12:13:26]	DEBUG :	XSS Filtering completed
[2017-06-19 12:13:26]	DEBUG :	XSS Filtering completed
[2017-06-19 12:13:26]	DEBUG :	XSS Filtering completed
[2017-06-19 12:13:26]	DEBUG :	XSS Filtering completed
[2017-06-19 12:13:26]	DEBUG :	XSS Filtering completed
[2017-06-19 12:13:26]	DEBUG :	XSS Filtering completed
[2017-06-19 12:13:26]	DEBUG :	XSS Filtering completed
[2017-06-19 12:13:26]	DEBUG :	XSS Filtering completed
[2017-06-19 12:13:26]	DEBUG :	XSS Filtering completed
[2017-06-19 12:13:26]	DEBUG :	XSS Filtering completed
[2017-06-19 12:13:26]	DEBUG :	XSS Filtering completed
[2017-06-19 12:13:26]	DEBUG :	XSS Filtering completed
[2017-06-19 12:13:26]	DEBUG :	XSS Filtering completed
[2017-06-19 12:13:26]	DEBUG :	XSS Filtering completed
[2017-06-19 12:13:26]	DEBUG :	XSS Filtering completed
[2017-06-19 12:13:26]	DEBUG :	XSS Filtering completed
[2017-06-19 12:13:26]	DEBUG :	XSS Filtering completed
[2017-06-19 12:13:26]	DEBUG :	XSS Filtering completed
[2017-06-19 12:13:26]	DEBUG :	XSS Filtering completed
[2017-06-19 12:13:26]	DEBUG :	XSS Filtering completed
[2017-06-19 12:13:26]	DEBUG :	XSS Filtering completed
[2017-06-19 12:13:26]	DEBUG :	XSS Filtering completed
[2017-06-19 12:13:26]	DEBUG :	XSS Filtering completed
[2017-06-19 12:13:26]	DEBUG :	XSS Filtering completed
[2017-06-19 12:13:26]	DEBUG :	XSS Filtering completed
[2017-06-19 12:13:26]	DEBUG :	XSS Filtering completed
[2017-06-19 12:13:26]	DEBUG :	XSS Filtering completed
[2017-06-19 12:13:26]	DEBUG :	XSS Filtering completed
[2017-06-19 12:13:26]	DEBUG :	XSS Filtering completed
[2017-06-19 12:13:26]	DEBUG :	XSS Filtering completed
[2017-06-19 12:13:26]	DEBUG :	XSS Filtering completed
[2017-06-19 12:13:26]	DEBUG :	XSS Filtering completed
[2017-06-19 12:13:26]	DEBUG :	XSS Filtering completed
[2017-06-19 12:13:26]	DEBUG :	XSS Filtering completed
[2017-06-19 12:13:26]	DEBUG :	XSS Filtering completed
[2017-06-19 12:13:26]	DEBUG :	XSS Filtering completed
[2017-06-19 12:13:26]	DEBUG :	XSS Filtering completed
[2017-06-19 12:13:26]	DEBUG :	XSS Filtering completed
[2017-06-19 12:13:26]	DEBUG :	XSS Filtering completed
[2017-06-19 12:13:26]	DEBUG :	XSS Filtering completed
[2017-06-19 12:13:26]	DEBUG :	XSS Filtering completed
[2017-06-19 12:13:26]	DEBUG :	XSS Filtering completed
[2017-06-19 12:13:26]	DEBUG :	XSS Filtering completed
[2017-06-19 12:13:26]	DEBUG :	XSS Filtering completed
[2017-06-19 12:13:26]	DEBUG :	XSS Filtering completed
[2017-06-19 12:13:26]	DEBUG :	XSS Filtering completed
[2017-06-19 12:13:26]	DEBUG :	XSS Filtering completed
[2017-06-19 12:13:26]	DEBUG :	XSS Filtering completed
[2017-06-19 12:13:26]	DEBUG :	Global POST and COOKIE data sanitized
[2017-06-19 12:13:26]	DEBUG :	Language Class Initialized
[2017-06-19 12:13:26]	DEBUG :	Loader Class Initialized
[2017-06-19 12:13:26]	DEBUG :	Helper loaded: url_helper
[2017-06-19 12:13:26]	DEBUG :	Helper loaded: form_helper
[2017-06-19 12:13:26]	DEBUG :	Helper loaded: html_helper
[2017-06-19 12:13:26]	DEBUG :	Helper loaded: email_helper
[2017-06-19 12:13:26]	DEBUG :	Helper loaded: ckeditor_helper
[2017-06-19 12:13:26]	DEBUG :	Helper loaded: mcube_helper
[2017-06-19 12:13:26]	DEBUG :	Database Driver Class Initialized
[2017-06-19 12:13:26]	ERROR :	Severity: 8192  --> mysql_pconnect(): The mysql extension is deprecated and will be removed in the future: use mysqli or PDO instead /var/www/html/mcnew/system/database/drivers/mysql/mysql_driver.php 88
[2017-06-19 12:13:26]	DEBUG :	Session Class Initialized
[2017-06-19 12:13:26]	DEBUG :	Helper loaded: string_helper
[2017-06-19 12:13:26]	DEBUG :	Encrypt Class Initialized
[2017-06-19 12:13:26]	SQL :	SELECT *
FROM (`call_sessions`)
WHERE `session_id` = '847e9ee4e1543e295a6ddd381996c5e3'
AND `user_agent` = 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36'
[2017-06-19 12:13:26]	DEBUG :	Session routines successfully run
[2017-06-19 12:13:26]	DEBUG :	Table Class Initialized
[2017-06-19 12:13:26]	DEBUG :	Pagination Class Initialized
[2017-06-19 12:13:26]	DEBUG :	Config file loaded: config/paypallib_config.php
[2017-06-19 12:13:26]	DEBUG :	Form Validation Class Initialized
[2017-06-19 12:13:26]	DEBUG :	Email Class Initialized
[2017-06-19 12:13:26]	DEBUG :	Language file loaded: language/english/calendar_lang.php
[2017-06-19 12:13:26]	DEBUG :	Calendar Class Initialized
[2017-06-19 12:13:26]	DEBUG :	Controller Class Initialized
[2017-06-19 12:13:26]	DEBUG :	Model Class Initialized
[2017-06-19 12:13:26]	DEBUG :	Model Class Initialized
[2017-06-19 12:13:26]	DEBUG :	Model Class Initialized
[2017-06-19 12:13:26]	DEBUG :	Model Class Initialized
[2017-06-19 12:13:26]	DEBUG :	Model Class Initialized
[2017-06-19 12:13:26]	DEBUG :	Model Class Initialized
[2017-06-19 12:13:26]	DEBUG :	Model Class Initialized
[2017-06-19 12:13:26]	DEBUG :	Model Class Initialized
[2017-06-19 12:13:26]	DEBUG :	Model Class Initialized
[2017-06-19 12:13:26]	DEBUG :	Model Class Initialized
[2017-06-19 12:13:26]	DEBUG :	Model Class Initialized
[2017-06-19 12:13:26]	DEBUG :	Model Class Initialized
[2017-06-19 12:13:26]	DEBUG :	Plugin loaded: to_pdf_pi
[2017-06-19 12:13:26]	SQL :	SELECT u.uid FROM user u
				LEFT JOIN 1_employee e on (e.bid=u.bid AND e.eid=u.eid)
				WHERE e.status='1' AND e.login='1' AND u.status='1' 
				AND u.bid='1' AND u.eid='1'
[2017-06-19 12:13:26]	SQL :	SELECT *
FROM (`language`)
WHERE `langid` = '1'
[2017-06-19 12:13:26]	DEBUG :	Database Driver Class Initialized
[2017-06-19 12:13:26]	SQL :	SELECT roleid FROM 1_employee
							WHERE eid='1'
							AND bid='1'
[2017-06-19 12:13:26]	SQL :	UPDATE `call_sessions` SET `last_activity` = '1497853678', `user_data` = 'a:20:{s:3:\"uid\";s:1:\"1\";s:3:\"bid\";s:1:\"1\";s:8:\"username\";s:20:\"ashwini.naidu@vmc.in\";s:3:\"eid\";s:1:\"1\";s:3:\"app\";s:1:\"1\";s:7:\"authkey\";s:17:\"1.1.d886b8e8a0615\";s:9:\"recording\";s:1:\"1\";s:10:\"mcubecalls\";s:1:\"1\";s:7:\"mtdebug\";s:1:\"1\";s:8:\"deviceid\";s:36:\"ffffffff-a4d5-960f-ffff-ffff82ba1723\";s:8:\"language\";s:1:\"1\";s:6:\"status\";s:1:\"1\";s:9:\"appstatus\";s:1:\"1\";s:3:\"pid\";s:1:\"0\";s:3:\"act\";s:1:\"0\";s:16:\"registrationdate\";s:19:\"2014-09-08 16:04:19\";s:10:\"dnd_status\";s:1:\"0\";s:9:\"logged_in\";s:1:\"1\";s:6:\"roleid\";s:1:\"1\";s:4:\"cbid\";s:1:\"1\";}' WHERE `session_id` = '847e9ee4e1543e295a6ddd381996c5e3'
[2017-06-19 12:13:26]	DEBUG :	Database Driver Class Initialized
[2017-06-19 12:13:26]	SQL :	SELECT * FROM 1_user_role
							WHERE roleid='1'
							AND bid='1'
[2017-06-19 12:13:26]	SQL :	SELECT m.modid,m.modname,m.moddesc,
							COALESCE(o.opt_add,0) as opt_add,
							COALESCE(o.opt_view,0) as opt_view,
							COALESCE(o.opt_download,0) as opt_download,
							COALESCE(opt_delete,0) as opt_delete 
							FROM module m
							LEFT JOIN (SELECT * FROM 1_role_mod_opt
							WHERE roleid='1' 
							AND bid='1') as o
							ON m.modid=o.modid where m.status=1
[2017-06-19 12:13:26]	SQL :	SELECT a.*,f.fieldname FROM 1_role_access a
								LEFT JOIN systemfields f on a.fieldid=f.fieldid
								WHERE a.roleid='1'
								AND a.bid='1'
								AND a.fieldtype='s'
[2017-06-19 12:13:26]	SQL :	SELECT * FROM 1_role_access
								WHERE roleid='1'
								AND bid='1'
							AND fieldtype='c'
[2017-06-19 12:13:26]	SQL :	SELECT a.selfdisable FROM 1_employee a WHERE a.eid='1'
[2017-06-19 12:13:26]	DEBUG :	Language file loaded: language/english/unit_test_lang.php
[2017-06-19 12:13:26]	DEBUG :	Language file loaded: language/english/db_lang.php
[2017-06-19 12:13:26]	DEBUG :	Language file loaded: language/english/ftp_lang.php
[2017-06-19 12:13:26]	DEBUG :	Language file loaded: language/english/menu_lang.php
[2017-06-19 12:13:26]	DEBUG :	Language file loaded: language/english/db_tables_lang.php
[2017-06-19 12:13:26]	DEBUG :	Language file loaded: language/english/form_level_lang.php
[2017-06-19 12:13:26]	DEBUG :	Language file loaded: language/english/form_validation_lang.php
[2017-06-19 12:13:26]	DEBUG :	Language file loaded: language/english/email_lang.php
[2017-06-19 12:13:26]	DEBUG :	Language file loaded: language/english/number_lang.php
[2017-06-19 12:13:26]	DEBUG :	Language file loaded: language/english/layout_lang.php
[2017-06-19 12:13:26]	DEBUG :	Language file loaded: language/english/validation_lang.php
[2017-06-19 12:13:26]	DEBUG :	Language file loaded: language/english/scaffolding_lang.php
[2017-06-19 12:13:26]	DEBUG :	Language file loaded: language/english/date_lang.php
[2017-06-19 12:13:26]	DEBUG :	Language file loaded: language/english/profiler_lang.php
[2017-06-19 12:13:26]	DEBUG :	Language file loaded: language/english/imglib_lang.php
[2017-06-19 12:13:26]	DEBUG :	Language file loaded: language/english/error_msg_lang.php
[2017-06-19 12:13:26]	DEBUG :	Language file loaded: language/english/upload_lang.php
[2017-06-19 12:13:26]	SQL :	SELECT id,category,subcategory,type,status FROM feedback WHERE status=1 
[2017-06-19 12:13:26]	SQL :	SELECT feature_id FROM business_feature WHERE bid='1'
[2017-06-19 12:13:26]	SQL :	SELECT feature_id FROM business_feature WHERE bid='1'
[2017-06-19 12:13:26]	SQL :	SELECT feature_id FROM business_feature WHERE bid='1'
[2017-06-19 12:13:26]	SQL :	SELECT id,type FROM 1_leads_status
[2017-06-19 12:13:26]	SQL :	SELECT design FROM business_lead_use WHERE bid='1' LIMIT 0,1
[2017-06-19 12:13:26]	SQL :	SELECT sid,status FROM 1_support_status
[2017-06-19 12:13:26]	SQL :	SELECT feature_id FROM `business_feature` where bid=1
[2017-06-19 12:13:26]	SQL :	SELECT action_align FROM account_settings WHERE bid='1'
[2017-06-19 12:13:26]	SQL :	SELECT dialstatus FROM 1_callhistory WHERE dialstatus = 'CONNECTING'
[2017-06-19 12:13:26]	SQL :	SELECT FOUND_ROWS() as cnt
[2017-06-19 12:13:26]	SQL :	SELECT del_notify FROM account_settings WHERE bid='1'
[2017-06-19 12:13:26]	DEBUG :	Model Class Initialized
[2017-06-19 12:13:26]	DEBUG :	Database Driver Class Initialized
[2017-06-19 12:13:26]	SQL :	SELECT * FROM 1_user_role
							WHERE roleid='1'
							AND bid='1'
[2017-06-19 12:13:26]	SQL :	SELECT m.modid,m.modname,m.moddesc,
							COALESCE(o.opt_add,0) as opt_add,
							COALESCE(o.opt_view,0) as opt_view,
							COALESCE(o.opt_download,0) as opt_download,
							COALESCE(opt_delete,0) as opt_delete 
							FROM module m
							LEFT JOIN (SELECT * FROM 1_role_mod_opt
							WHERE roleid='1' 
							AND bid='1') as o
							ON m.modid=o.modid where m.status=1
[2017-06-19 12:13:26]	SQL :	SELECT a.*,f.fieldname FROM 1_role_access a
								LEFT JOIN systemfields f on a.fieldid=f.fieldid
								WHERE a.roleid='1'
								AND a.bid='1'
								AND a.fieldtype='s'
[2017-06-19 12:13:26]	SQL :	SELECT * FROM 1_role_access
								WHERE roleid='1'
								AND bid='1'
							AND fieldtype='c'
[2017-06-19 12:13:26]	SQL :	SELECT feature_id FROM `business_feature` where bid=1
[2017-06-19 12:13:26]	SQL :	SELECT feature_id FROM `business_feature` where bid=1
[2017-06-19 12:13:26]	SQL :	select	groupname from 1_groups where groupname='TESTINGLEADGRP' and gid!=14
[2017-06-19 12:13:26]	DEBUG :	Database Driver Class Initialized
[2017-06-19 12:13:26]	SQL :	SELECT * FROM 1_user_role
							WHERE roleid='1'
							AND bid='1'
[2017-06-19 12:13:26]	SQL :	SELECT m.modid,m.modname,m.moddesc,
							COALESCE(o.opt_add,0) as opt_add,
							COALESCE(o.opt_view,0) as opt_view,
							COALESCE(o.opt_download,0) as opt_download,
							COALESCE(opt_delete,0) as opt_delete 
							FROM module m
							LEFT JOIN (SELECT * FROM 1_role_mod_opt
							WHERE roleid='1' 
							AND bid='1') as o
							ON m.modid=o.modid where m.status=1
[2017-06-19 12:13:26]	SQL :	SELECT a.*,f.fieldname FROM 1_role_access a
								LEFT JOIN systemfields f on a.fieldid=f.fieldid
								WHERE a.roleid='1'
								AND a.bid='1'
								AND a.fieldtype='s'
[2017-06-19 12:13:26]	SQL :	SELECT * FROM 1_role_access
								WHERE roleid='1'
								AND bid='1'
							AND fieldtype='c'
[2017-06-19 12:13:26]	SQL :	SELECT prinumber FROM 1_groups WHERE gid = '14' 
[2017-06-19 12:13:26]	SQL :	UPDATE prinumbers SET
					status		= '0'
					,associateid= '0'
					WHERE number= '200048'
[2017-06-19 12:13:26]	SQL :	UPDATE prinumbers SET
					status		= '1'
					,associateid= '14'
					WHERE number= '200047'
[2017-06-19 12:13:26]	SQL :	UPDATE `1_groups` SET `replytocust_voitext` = '0', `mailalerttoowner` = '1', `groupname` = 'TESTINGLEADGRP', `bday` = '{\"Mon\":{\"day\":\"1\",\"st\":\"00:00\",\"et\":\"23:59\"},\"Tue\":{\"day\":\"1\",\"st\":\"00:00\",\"et\":\"23:59\"},\"Wed\":{\"day\":\"1\",\"st\":\"00:00\",\"et\":\"23:59\"},\"Thu\":{\"day\":\"1\",\"st\":\"00:00\",\"et\":\"23:59\"},\"Fri\":{\"day\":\"1\",\"st\":\"00:00\",\"et\":\"23:59\"},\"Sat\":{\"day\":\"1\",\"st\":\"00:00\",\"et\":\"23:59\"},\"Sun\":{\"day\":\"1\",\"st\":\"00:00\",\"et\":\"23:59\"}}', `prinumber` = '200047', `rules` = '1', `eid` = '0', `keyword` = 'keyword', `primary_rule` = '0', `hdaytext` = 'test', `replymessage` = '', `timeout` = '25', `oneditaction` = '', `onhangup` = '', `leadaction` = '', `replyattmsg` = '', `oncallaction` = '', `supportaction` = '', `supportgrp` = '', `landingregion` = 'KA', `voicemessagetext` = '', `connectowner` = '0', `replytocustomer` = '0', `replytoexecutive` = '0', `recordnotice` = '0', `record` = '0', `sameexe` = '0', `misscall` = '0', `pincode` = '0', `allgroup` = 0, `mailalerttowoner` = '0', `groupkey` = 'MV8xNA==' WHERE `gid` = '14'
[2017-06-19 12:13:26]	DEBUG :	DB Transaction Failure
[2017-06-19 12:13:26]	ERROR :	Query error: Unknown column 'mailalerttoowner' in 'field list'
[2017-06-19 12:13:59]	DEBUG :	Config Class Initialized
[2017-06-19 12:13:59]	DEBUG :	Hooks Class Initialized
[2017-06-19 12:13:59]	DEBUG :	URI Class Initialized
[2017-06-19 12:13:59]	DEBUG :	Router Class Initialized
[2017-06-19 12:13:59]	DEBUG :	Output Class Initialized
[2017-06-19 12:13:59]	DEBUG :	Input Class Initialized
[2017-06-19 12:13:59]	DEBUG :	XSS Filtering completed
[2017-06-19 12:13:59]	DEBUG :	XSS Filtering completed
[2017-06-19 12:13:59]	DEBUG :	XSS Filtering completed
[2017-06-19 12:13:59]	DEBUG :	XSS Filtering completed
[2017-06-19 12:13:59]	DEBUG :	XSS Filtering completed
[2017-06-19 12:13:59]	DEBUG :	XSS Filtering completed
[2017-06-19 12:13:59]	DEBUG :	XSS Filtering completed
[2017-06-19 12:13:59]	DEBUG :	XSS Filtering completed
[2017-06-19 12:13:59]	DEBUG :	XSS Filtering completed
[2017-06-19 12:13:59]	DEBUG :	XSS Filtering completed
[2017-06-19 12:13:59]	DEBUG :	XSS Filtering completed
[2017-06-19 12:13:59]	DEBUG :	XSS Filtering completed
[2017-06-19 12:13:59]	DEBUG :	XSS Filtering completed
[2017-06-19 12:13:59]	DEBUG :	XSS Filtering completed
[2017-06-19 12:13:59]	DEBUG :	XSS Filtering completed
[2017-06-19 12:13:59]	DEBUG :	XSS Filtering completed
[2017-06-19 12:13:59]	DEBUG :	XSS Filtering completed
[2017-06-19 12:13:59]	DEBUG :	XSS Filtering completed
[2017-06-19 12:13:59]	DEBUG :	XSS Filtering completed
[2017-06-19 12:13:59]	DEBUG :	XSS Filtering completed
[2017-06-19 12:13:59]	DEBUG :	XSS Filtering completed
[2017-06-19 12:13:59]	DEBUG :	XSS Filtering completed
[2017-06-19 12:13:59]	DEBUG :	XSS Filtering completed
[2017-06-19 12:13:59]	DEBUG :	XSS Filtering completed
[2017-06-19 12:13:59]	DEBUG :	XSS Filtering completed
[2017-06-19 12:13:59]	DEBUG :	XSS Filtering completed
[2017-06-19 12:13:59]	DEBUG :	XSS Filtering completed
[2017-06-19 12:13:59]	DEBUG :	XSS Filtering completed
[2017-06-19 12:13:59]	DEBUG :	XSS Filtering completed
[2017-06-19 12:13:59]	DEBUG :	XSS Filtering completed
[2017-06-19 12:13:59]	DEBUG :	XSS Filtering completed
[2017-06-19 12:13:59]	DEBUG :	XSS Filtering completed
[2017-06-19 12:13:59]	DEBUG :	XSS Filtering completed
[2017-06-19 12:13:59]	DEBUG :	XSS Filtering completed
[2017-06-19 12:13:59]	DEBUG :	XSS Filtering completed
[2017-06-19 12:13:59]	DEBUG :	XSS Filtering completed
[2017-06-19 12:13:59]	DEBUG :	XSS Filtering completed
[2017-06-19 12:13:59]	DEBUG :	XSS Filtering completed
[2017-06-19 12:13:59]	DEBUG :	XSS Filtering completed
[2017-06-19 12:13:59]	DEBUG :	XSS Filtering completed
[2017-06-19 12:13:59]	DEBUG :	XSS Filtering completed
[2017-06-19 12:13:59]	DEBUG :	XSS Filtering completed
[2017-06-19 12:13:59]	DEBUG :	XSS Filtering completed
[2017-06-19 12:13:59]	DEBUG :	XSS Filtering completed
[2017-06-19 12:13:59]	DEBUG :	XSS Filtering completed
[2017-06-19 12:13:59]	DEBUG :	XSS Filtering completed
[2017-06-19 12:13:59]	DEBUG :	XSS Filtering completed
[2017-06-19 12:13:59]	DEBUG :	XSS Filtering completed
[2017-06-19 12:13:59]	DEBUG :	XSS Filtering completed
[2017-06-19 12:13:59]	DEBUG :	XSS Filtering completed
[2017-06-19 12:13:59]	DEBUG :	XSS Filtering completed
[2017-06-19 12:13:59]	DEBUG :	Global POST and COOKIE data sanitized
[2017-06-19 12:13:59]	DEBUG :	Language Class Initialized
[2017-06-19 12:13:59]	DEBUG :	Loader Class Initialized
[2017-06-19 12:13:59]	DEBUG :	Helper loaded: url_helper
[2017-06-19 12:13:59]	DEBUG :	Helper loaded: form_helper
[2017-06-19 12:13:59]	DEBUG :	Helper loaded: html_helper
[2017-06-19 12:13:59]	DEBUG :	Helper loaded: email_helper
[2017-06-19 12:13:59]	DEBUG :	Helper loaded: ckeditor_helper
[2017-06-19 12:13:59]	DEBUG :	Helper loaded: mcube_helper
[2017-06-19 12:13:59]	DEBUG :	Database Driver Class Initialized
[2017-06-19 12:13:59]	ERROR :	Severity: 8192  --> mysql_pconnect(): The mysql extension is deprecated and will be removed in the future: use mysqli or PDO instead /var/www/html/mcnew/system/database/drivers/mysql/mysql_driver.php 88
[2017-06-19 12:13:59]	DEBUG :	Session Class Initialized
[2017-06-19 12:13:59]	DEBUG :	Helper loaded: string_helper
[2017-06-19 12:13:59]	DEBUG :	Encrypt Class Initialized
[2017-06-19 12:13:59]	SQL :	SELECT *
FROM (`call_sessions`)
WHERE `session_id` = '847e9ee4e1543e295a6ddd381996c5e3'
AND `user_agent` = 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36'
[2017-06-19 12:13:59]	SQL :	DELETE FROM `call_sessions`
WHERE `last_activity` < 1497847439
[2017-06-19 12:13:59]	DEBUG :	Session garbage collection performed.
[2017-06-19 12:13:59]	DEBUG :	Session routines successfully run
[2017-06-19 12:13:59]	DEBUG :	Table Class Initialized
[2017-06-19 12:13:59]	DEBUG :	Pagination Class Initialized
[2017-06-19 12:13:59]	DEBUG :	Config file loaded: config/paypallib_config.php
[2017-06-19 12:13:59]	DEBUG :	Form Validation Class Initialized
[2017-06-19 12:13:59]	DEBUG :	Email Class Initialized
[2017-06-19 12:13:59]	DEBUG :	Language file loaded: language/english/calendar_lang.php
[2017-06-19 12:13:59]	DEBUG :	Calendar Class Initialized
[2017-06-19 12:13:59]	DEBUG :	Controller Class Initialized
[2017-06-19 12:13:59]	DEBUG :	Model Class Initialized
[2017-06-19 12:13:59]	DEBUG :	Model Class Initialized
[2017-06-19 12:13:59]	DEBUG :	Model Class Initialized
[2017-06-19 12:13:59]	DEBUG :	Model Class Initialized
[2017-06-19 12:13:59]	DEBUG :	Model Class Initialized
[2017-06-19 12:13:59]	DEBUG :	Model Class Initialized
[2017-06-19 12:13:59]	DEBUG :	Model Class Initialized
[2017-06-19 12:13:59]	DEBUG :	Model Class Initialized
[2017-06-19 12:13:59]	DEBUG :	Model Class Initialized
[2017-06-19 12:13:59]	DEBUG :	Model Class Initialized
[2017-06-19 12:13:59]	DEBUG :	Model Class Initialized
[2017-06-19 12:13:59]	DEBUG :	Model Class Initialized
[2017-06-19 12:13:59]	DEBUG :	Plugin loaded: to_pdf_pi
[2017-06-19 12:13:59]	SQL :	SELECT u.uid FROM user u
				LEFT JOIN 1_employee e on (e.bid=u.bid AND e.eid=u.eid)
				WHERE e.status='1' AND e.login='1' AND u.status='1' 
				AND u.bid='1' AND u.eid='1'
[2017-06-19 12:13:59]	SQL :	SELECT *
FROM (`language`)
WHERE `langid` = '1'
[2017-06-19 12:13:59]	DEBUG :	Database Driver Class Initialized
[2017-06-19 12:13:59]	SQL :	SELECT roleid FROM 1_employee
							WHERE eid='1'
							AND bid='1'
[2017-06-19 12:13:59]	SQL :	UPDATE `call_sessions` SET `last_activity` = '1497853678', `user_data` = 'a:20:{s:3:\"uid\";s:1:\"1\";s:3:\"bid\";s:1:\"1\";s:8:\"username\";s:20:\"ashwini.naidu@vmc.in\";s:3:\"eid\";s:1:\"1\";s:3:\"app\";s:1:\"1\";s:7:\"authkey\";s:17:\"1.1.d886b8e8a0615\";s:9:\"recording\";s:1:\"1\";s:10:\"mcubecalls\";s:1:\"1\";s:7:\"mtdebug\";s:1:\"1\";s:8:\"deviceid\";s:36:\"ffffffff-a4d5-960f-ffff-ffff82ba1723\";s:8:\"language\";s:1:\"1\";s:6:\"status\";s:1:\"1\";s:9:\"appstatus\";s:1:\"1\";s:3:\"pid\";s:1:\"0\";s:3:\"act\";s:1:\"0\";s:16:\"registrationdate\";s:19:\"2014-09-08 16:04:19\";s:10:\"dnd_status\";s:1:\"0\";s:9:\"logged_in\";s:1:\"1\";s:6:\"roleid\";s:1:\"1\";s:4:\"cbid\";s:1:\"1\";}' WHERE `session_id` = '847e9ee4e1543e295a6ddd381996c5e3'
[2017-06-19 12:13:59]	DEBUG :	Database Driver Class Initialized
[2017-06-19 12:13:59]	SQL :	SELECT * FROM 1_user_role
							WHERE roleid='1'
							AND bid='1'
[2017-06-19 12:13:59]	SQL :	SELECT m.modid,m.modname,m.moddesc,
							COALESCE(o.opt_add,0) as opt_add,
							COALESCE(o.opt_view,0) as opt_view,
							COALESCE(o.opt_download,0) as opt_download,
							COALESCE(opt_delete,0) as opt_delete 
							FROM module m
							LEFT JOIN (SELECT * FROM 1_role_mod_opt
							WHERE roleid='1' 
							AND bid='1') as o
							ON m.modid=o.modid where m.status=1
[2017-06-19 12:13:59]	SQL :	SELECT a.*,f.fieldname FROM 1_role_access a
								LEFT JOIN systemfields f on a.fieldid=f.fieldid
								WHERE a.roleid='1'
								AND a.bid='1'
								AND a.fieldtype='s'
[2017-06-19 12:13:59]	SQL :	SELECT * FROM 1_role_access
								WHERE roleid='1'
								AND bid='1'
							AND fieldtype='c'
[2017-06-19 12:13:59]	SQL :	SELECT a.selfdisable FROM 1_employee a WHERE a.eid='1'
[2017-06-19 12:13:59]	DEBUG :	Language file loaded: language/english/unit_test_lang.php
[2017-06-19 12:13:59]	DEBUG :	Language file loaded: language/english/db_lang.php
[2017-06-19 12:13:59]	DEBUG :	Language file loaded: language/english/ftp_lang.php
[2017-06-19 12:13:59]	DEBUG :	Language file loaded: language/english/menu_lang.php
[2017-06-19 12:13:59]	DEBUG :	Language file loaded: language/english/db_tables_lang.php
[2017-06-19 12:13:59]	DEBUG :	Language file loaded: language/english/form_level_lang.php
[2017-06-19 12:13:59]	DEBUG :	Language file loaded: language/english/form_validation_lang.php
[2017-06-19 12:13:59]	DEBUG :	Language file loaded: language/english/email_lang.php
[2017-06-19 12:13:59]	DEBUG :	Language file loaded: language/english/number_lang.php
[2017-06-19 12:13:59]	DEBUG :	Language file loaded: language/english/layout_lang.php
[2017-06-19 12:13:59]	DEBUG :	Language file loaded: language/english/validation_lang.php
[2017-06-19 12:13:59]	DEBUG :	Language file loaded: language/english/scaffolding_lang.php
[2017-06-19 12:13:59]	DEBUG :	Language file loaded: language/english/date_lang.php
[2017-06-19 12:13:59]	DEBUG :	Language file loaded: language/english/profiler_lang.php
[2017-06-19 12:13:59]	DEBUG :	Language file loaded: language/english/imglib_lang.php
[2017-06-19 12:13:59]	DEBUG :	Language file loaded: language/english/error_msg_lang.php
[2017-06-19 12:13:59]	DEBUG :	Language file loaded: language/english/upload_lang.php
[2017-06-19 12:13:59]	SQL :	SELECT id,category,subcategory,type,status FROM feedback WHERE status=1 
[2017-06-19 12:13:59]	SQL :	SELECT feature_id FROM business_feature WHERE bid='1'
[2017-06-19 12:13:59]	SQL :	SELECT feature_id FROM business_feature WHERE bid='1'
[2017-06-19 12:13:59]	SQL :	SELECT feature_id FROM business_feature WHERE bid='1'
[2017-06-19 12:13:59]	SQL :	SELECT id,type FROM 1_leads_status
[2017-06-19 12:13:59]	SQL :	SELECT design FROM business_lead_use WHERE bid='1' LIMIT 0,1
[2017-06-19 12:13:59]	SQL :	SELECT sid,status FROM 1_support_status
[2017-06-19 12:13:59]	SQL :	SELECT feature_id FROM `business_feature` where bid=1
[2017-06-19 12:13:59]	SQL :	SELECT action_align FROM account_settings WHERE bid='1'
[2017-06-19 12:13:59]	SQL :	SELECT dialstatus FROM 1_callhistory WHERE dialstatus = 'CONNECTING'
[2017-06-19 12:13:59]	SQL :	SELECT FOUND_ROWS() as cnt
[2017-06-19 12:13:59]	SQL :	SELECT del_notify FROM account_settings WHERE bid='1'
[2017-06-19 12:13:59]	DEBUG :	Model Class Initialized
[2017-06-19 12:13:59]	DEBUG :	Database Driver Class Initialized
[2017-06-19 12:13:59]	SQL :	SELECT * FROM 1_user_role
							WHERE roleid='1'
							AND bid='1'
[2017-06-19 12:13:59]	SQL :	SELECT m.modid,m.modname,m.moddesc,
							COALESCE(o.opt_add,0) as opt_add,
							COALESCE(o.opt_view,0) as opt_view,
							COALESCE(o.opt_download,0) as opt_download,
							COALESCE(opt_delete,0) as opt_delete 
							FROM module m
							LEFT JOIN (SELECT * FROM 1_role_mod_opt
							WHERE roleid='1' 
							AND bid='1') as o
							ON m.modid=o.modid where m.status=1
[2017-06-19 12:13:59]	SQL :	SELECT a.*,f.fieldname FROM 1_role_access a
								LEFT JOIN systemfields f on a.fieldid=f.fieldid
								WHERE a.roleid='1'
								AND a.bid='1'
								AND a.fieldtype='s'
[2017-06-19 12:13:59]	SQL :	SELECT * FROM 1_role_access
								WHERE roleid='1'
								AND bid='1'
							AND fieldtype='c'
[2017-06-19 12:13:59]	SQL :	SELECT feature_id FROM `business_feature` where bid=1
[2017-06-19 12:13:59]	SQL :	SELECT feature_id FROM `business_feature` where bid=1
[2017-06-19 12:13:59]	SQL :	select	groupname from 1_groups where groupname='TESTINGLEADGRP' and gid!=14
[2017-06-19 12:13:59]	DEBUG :	Database Driver Class Initialized
[2017-06-19 12:13:59]	SQL :	SELECT * FROM 1_user_role
							WHERE roleid='1'
							AND bid='1'
[2017-06-19 12:13:59]	SQL :	SELECT m.modid,m.modname,m.moddesc,
							COALESCE(o.opt_add,0) as opt_add,
							COALESCE(o.opt_view,0) as opt_view,
							COALESCE(o.opt_download,0) as opt_download,
							COALESCE(opt_delete,0) as opt_delete 
							FROM module m
							LEFT JOIN (SELECT * FROM 1_role_mod_opt
							WHERE roleid='1' 
							AND bid='1') as o
							ON m.modid=o.modid where m.status=1
[2017-06-19 12:13:59]	SQL :	SELECT a.*,f.fieldname FROM 1_role_access a
								LEFT JOIN systemfields f on a.fieldid=f.fieldid
								WHERE a.roleid='1'
								AND a.bid='1'
								AND a.fieldtype='s'
[2017-06-19 12:13:59]	SQL :	SELECT * FROM 1_role_access
								WHERE roleid='1'
								AND bid='1'
							AND fieldtype='c'
[2017-06-19 12:13:59]	SQL :	SELECT prinumber FROM 1_groups WHERE gid = '14' 
[2017-06-19 12:13:59]	SQL :	UPDATE prinumbers SET
					status		= '0'
					,associateid= '0'
					WHERE number= '200048'
[2017-06-19 12:13:59]	SQL :	UPDATE prinumbers SET
					status		= '1'
					,associateid= '14'
					WHERE number= '200047'
[2017-06-19 12:13:59]	SQL :	UPDATE `1_groups` SET `replytocust_voitext` = '0', `mailalerttoowner` = '1', `groupname` = 'TESTINGLEADGRP', `bday` = '{\"Mon\":{\"day\":\"1\",\"st\":\"00:00\",\"et\":\"23:59\"},\"Tue\":{\"day\":\"1\",\"st\":\"00:00\",\"et\":\"23:59\"},\"Wed\":{\"day\":\"1\",\"st\":\"00:00\",\"et\":\"23:59\"},\"Thu\":{\"day\":\"1\",\"st\":\"00:00\",\"et\":\"23:59\"},\"Fri\":{\"day\":\"1\",\"st\":\"00:00\",\"et\":\"23:59\"},\"Sat\":{\"day\":\"1\",\"st\":\"00:00\",\"et\":\"23:59\"},\"Sun\":{\"day\":\"1\",\"st\":\"00:00\",\"et\":\"23:59\"}}', `prinumber` = '200047', `rules` = '1', `eid` = '0', `keyword` = 'keyword', `primary_rule` = '0', `hdaytext` = 'test', `replymessage` = '', `timeout` = '25', `oneditaction` = '', `onhangup` = '', `leadaction` = '', `replyattmsg` = '', `oncallaction` = '', `supportaction` = '', `supportgrp` = '', `landingregion` = 'KA', `voicemessagetext` = '', `connectowner` = '0', `replytocustomer` = '0', `replytoexecutive` = '0', `recordnotice` = '0', `record` = '0', `sameexe` = '0', `misscall` = '0', `pincode` = '0', `allgroup` = 0, `mailalerttowoner` = '0', `groupkey` = 'MV8xNA==' WHERE `gid` = '14'
[2017-06-19 12:13:59]	DEBUG :	DB Transaction Failure
[2017-06-19 12:13:59]	ERROR :	Query error: Unknown column 'mailalerttoowner' in 'field list'
[2017-06-19 12:14:37]	DEBUG :	Config Class Initialized
[2017-06-19 12:14:37]	DEBUG :	Hooks Class Initialized
[2017-06-19 12:14:37]	DEBUG :	URI Class Initialized
[2017-06-19 12:14:37]	DEBUG :	Router Class Initialized
[2017-06-19 12:14:37]	DEBUG :	Output Class Initialized
[2017-06-19 12:14:37]	DEBUG :	Input Class Initialized
[2017-06-19 12:14:37]	DEBUG :	XSS Filtering completed
[2017-06-19 12:14:37]	DEBUG :	XSS Filtering completed
[2017-06-19 12:14:37]	DEBUG :	XSS Filtering completed
[2017-06-19 12:14:37]	DEBUG :	XSS Filtering completed
[2017-06-19 12:14:37]	DEBUG :	XSS Filtering completed
[2017-06-19 12:14:37]	DEBUG :	XSS Filtering completed
[2017-06-19 12:14:37]	DEBUG :	XSS Filtering completed
[2017-06-19 12:14:37]	DEBUG :	XSS Filtering completed
[2017-06-19 12:14:37]	DEBUG :	XSS Filtering completed
[2017-06-19 12:14:37]	DEBUG :	XSS Filtering completed
[2017-06-19 12:14:37]	DEBUG :	XSS Filtering completed
[2017-06-19 12:14:37]	DEBUG :	XSS Filtering completed
[2017-06-19 12:14:37]	DEBUG :	XSS Filtering completed
[2017-06-19 12:14:37]	DEBUG :	XSS Filtering completed
[2017-06-19 12:14:37]	DEBUG :	XSS Filtering completed
[2017-06-19 12:14:37]	DEBUG :	XSS Filtering completed
[2017-06-19 12:14:37]	DEBUG :	XSS Filtering completed
[2017-06-19 12:14:37]	DEBUG :	XSS Filtering completed
[2017-06-19 12:14:37]	DEBUG :	XSS Filtering completed
[2017-06-19 12:14:37]	DEBUG :	XSS Filtering completed
[2017-06-19 12:14:37]	DEBUG :	XSS Filtering completed
[2017-06-19 12:14:37]	DEBUG :	XSS Filtering completed
[2017-06-19 12:14:37]	DEBUG :	XSS Filtering completed
[2017-06-19 12:14:37]	DEBUG :	XSS Filtering completed
[2017-06-19 12:14:37]	DEBUG :	XSS Filtering completed
[2017-06-19 12:14:37]	DEBUG :	XSS Filtering completed
[2017-06-19 12:14:37]	DEBUG :	XSS Filtering completed
[2017-06-19 12:14:37]	DEBUG :	XSS Filtering completed
[2017-06-19 12:14:37]	DEBUG :	XSS Filtering completed
[2017-06-19 12:14:37]	DEBUG :	XSS Filtering completed
[2017-06-19 12:14:37]	DEBUG :	XSS Filtering completed
[2017-06-19 12:14:37]	DEBUG :	XSS Filtering completed
[2017-06-19 12:14:37]	DEBUG :	XSS Filtering completed
[2017-06-19 12:14:37]	DEBUG :	XSS Filtering completed
[2017-06-19 12:14:37]	DEBUG :	XSS Filtering completed
[2017-06-19 12:14:37]	DEBUG :	XSS Filtering completed
[2017-06-19 12:14:37]	DEBUG :	XSS Filtering completed
[2017-06-19 12:14:37]	DEBUG :	XSS Filtering completed
[2017-06-19 12:14:37]	DEBUG :	XSS Filtering completed
[2017-06-19 12:14:37]	DEBUG :	XSS Filtering completed
[2017-06-19 12:14:37]	DEBUG :	XSS Filtering completed
[2017-06-19 12:14:37]	DEBUG :	XSS Filtering completed
[2017-06-19 12:14:37]	DEBUG :	XSS Filtering completed
[2017-06-19 12:14:37]	DEBUG :	XSS Filtering completed
[2017-06-19 12:14:37]	DEBUG :	XSS Filtering completed
[2017-06-19 12:14:37]	DEBUG :	XSS Filtering completed
[2017-06-19 12:14:37]	DEBUG :	XSS Filtering completed
[2017-06-19 12:14:37]	DEBUG :	XSS Filtering completed
[2017-06-19 12:14:37]	DEBUG :	XSS Filtering completed
[2017-06-19 12:14:37]	DEBUG :	XSS Filtering completed
[2017-06-19 12:14:37]	DEBUG :	XSS Filtering completed
[2017-06-19 12:14:37]	DEBUG :	Global POST and COOKIE data sanitized
[2017-06-19 12:14:37]	DEBUG :	Language Class Initialized
[2017-06-19 12:14:37]	DEBUG :	Loader Class Initialized
[2017-06-19 12:14:37]	DEBUG :	Helper loaded: url_helper
[2017-06-19 12:14:37]	DEBUG :	Helper loaded: form_helper
[2017-06-19 12:14:37]	DEBUG :	Helper loaded: html_helper
[2017-06-19 12:14:37]	DEBUG :	Helper loaded: email_helper
[2017-06-19 12:14:37]	DEBUG :	Helper loaded: ckeditor_helper
[2017-06-19 12:14:37]	DEBUG :	Helper loaded: mcube_helper
[2017-06-19 12:14:37]	DEBUG :	Database Driver Class Initialized
[2017-06-19 12:14:37]	ERROR :	Severity: 8192  --> mysql_pconnect(): The mysql extension is deprecated and will be removed in the future: use mysqli or PDO instead /var/www/html/mcnew/system/database/drivers/mysql/mysql_driver.php 88
[2017-06-19 12:14:37]	DEBUG :	Session Class Initialized
[2017-06-19 12:14:37]	DEBUG :	Helper loaded: string_helper
[2017-06-19 12:14:37]	DEBUG :	Encrypt Class Initialized
[2017-06-19 12:14:37]	SQL :	SELECT *
FROM (`call_sessions`)
WHERE `session_id` = '847e9ee4e1543e295a6ddd381996c5e3'
AND `user_agent` = 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36'
[2017-06-19 12:14:37]	DEBUG :	Session routines successfully run
[2017-06-19 12:14:37]	DEBUG :	Table Class Initialized
[2017-06-19 12:14:37]	DEBUG :	Pagination Class Initialized
[2017-06-19 12:14:37]	DEBUG :	Config file loaded: config/paypallib_config.php
[2017-06-19 12:14:37]	DEBUG :	Form Validation Class Initialized
[2017-06-19 12:14:37]	DEBUG :	Email Class Initialized
[2017-06-19 12:14:37]	DEBUG :	Language file loaded: language/english/calendar_lang.php
[2017-06-19 12:14:37]	DEBUG :	Calendar Class Initialized
[2017-06-19 12:14:37]	DEBUG :	Controller Class Initialized
[2017-06-19 12:14:37]	DEBUG :	Model Class Initialized
[2017-06-19 12:14:37]	DEBUG :	Model Class Initialized
[2017-06-19 12:14:37]	DEBUG :	Model Class Initialized
[2017-06-19 12:14:37]	DEBUG :	Model Class Initialized
[2017-06-19 12:14:37]	DEBUG :	Model Class Initialized
[2017-06-19 12:14:37]	DEBUG :	Model Class Initialized
[2017-06-19 12:14:37]	DEBUG :	Model Class Initialized
[2017-06-19 12:14:37]	DEBUG :	Model Class Initialized
[2017-06-19 12:14:37]	DEBUG :	Model Class Initialized
[2017-06-19 12:14:37]	DEBUG :	Model Class Initialized
[2017-06-19 12:14:37]	DEBUG :	Model Class Initialized
[2017-06-19 12:14:37]	DEBUG :	Model Class Initialized
[2017-06-19 12:14:37]	DEBUG :	Plugin loaded: to_pdf_pi
[2017-06-19 12:14:37]	SQL :	SELECT u.uid FROM user u
				LEFT JOIN 1_employee e on (e.bid=u.bid AND e.eid=u.eid)
				WHERE e.status='1' AND e.login='1' AND u.status='1' 
				AND u.bid='1' AND u.eid='1'
[2017-06-19 12:14:37]	SQL :	SELECT *
FROM (`language`)
WHERE `langid` = '1'
[2017-06-19 12:14:37]	DEBUG :	Database Driver Class Initialized
[2017-06-19 12:14:37]	SQL :	SELECT roleid FROM 1_employee
							WHERE eid='1'
							AND bid='1'
[2017-06-19 12:14:37]	SQL :	UPDATE `call_sessions` SET `last_activity` = '1497853678', `user_data` = 'a:20:{s:3:\"uid\";s:1:\"1\";s:3:\"bid\";s:1:\"1\";s:8:\"username\";s:20:\"ashwini.naidu@vmc.in\";s:3:\"eid\";s:1:\"1\";s:3:\"app\";s:1:\"1\";s:7:\"authkey\";s:17:\"1.1.d886b8e8a0615\";s:9:\"recording\";s:1:\"1\";s:10:\"mcubecalls\";s:1:\"1\";s:7:\"mtdebug\";s:1:\"1\";s:8:\"deviceid\";s:36:\"ffffffff-a4d5-960f-ffff-ffff82ba1723\";s:8:\"language\";s:1:\"1\";s:6:\"status\";s:1:\"1\";s:9:\"appstatus\";s:1:\"1\";s:3:\"pid\";s:1:\"0\";s:3:\"act\";s:1:\"0\";s:16:\"registrationdate\";s:19:\"2014-09-08 16:04:19\";s:10:\"dnd_status\";s:1:\"0\";s:9:\"logged_in\";s:1:\"1\";s:6:\"roleid\";s:1:\"1\";s:4:\"cbid\";s:1:\"1\";}' WHERE `session_id` = '847e9ee4e1543e295a6ddd381996c5e3'
[2017-06-19 12:14:37]	DEBUG :	Database Driver Class Initialized
[2017-06-19 12:14:37]	SQL :	SELECT * FROM 1_user_role
							WHERE roleid='1'
							AND bid='1'
[2017-06-19 12:14:37]	SQL :	SELECT m.modid,m.modname,m.moddesc,
							COALESCE(o.opt_add,0) as opt_add,
							COALESCE(o.opt_view,0) as opt_view,
							COALESCE(o.opt_download,0) as opt_download,
							COALESCE(opt_delete,0) as opt_delete 
							FROM module m
							LEFT JOIN (SELECT * FROM 1_role_mod_opt
							WHERE roleid='1' 
							AND bid='1') as o
							ON m.modid=o.modid where m.status=1
[2017-06-19 12:14:37]	SQL :	SELECT a.*,f.fieldname FROM 1_role_access a
								LEFT JOIN systemfields f on a.fieldid=f.fieldid
								WHERE a.roleid='1'
								AND a.bid='1'
								AND a.fieldtype='s'
[2017-06-19 12:14:37]	SQL :	SELECT * FROM 1_role_access
								WHERE roleid='1'
								AND bid='1'
							AND fieldtype='c'
[2017-06-19 12:14:37]	SQL :	SELECT a.selfdisable FROM 1_employee a WHERE a.eid='1'
[2017-06-19 12:14:37]	DEBUG :	Language file loaded: language/english/unit_test_lang.php
[2017-06-19 12:14:37]	DEBUG :	Language file loaded: language/english/db_lang.php
[2017-06-19 12:14:37]	DEBUG :	Language file loaded: language/english/ftp_lang.php
[2017-06-19 12:14:37]	DEBUG :	Language file loaded: language/english/menu_lang.php
[2017-06-19 12:14:37]	DEBUG :	Language file loaded: language/english/db_tables_lang.php
[2017-06-19 12:14:37]	DEBUG :	Language file loaded: language/english/form_level_lang.php
[2017-06-19 12:14:37]	DEBUG :	Language file loaded: language/english/form_validation_lang.php
[2017-06-19 12:14:37]	DEBUG :	Language file loaded: language/english/email_lang.php
[2017-06-19 12:14:37]	DEBUG :	Language file loaded: language/english/number_lang.php
[2017-06-19 12:14:37]	DEBUG :	Language file loaded: language/english/layout_lang.php
[2017-06-19 12:14:37]	DEBUG :	Language file loaded: language/english/validation_lang.php
[2017-06-19 12:14:37]	DEBUG :	Language file loaded: language/english/scaffolding_lang.php
[2017-06-19 12:14:37]	DEBUG :	Language file loaded: language/english/date_lang.php
[2017-06-19 12:14:37]	DEBUG :	Language file loaded: language/english/profiler_lang.php
[2017-06-19 12:14:37]	DEBUG :	Language file loaded: language/english/imglib_lang.php
[2017-06-19 12:14:37]	DEBUG :	Language file loaded: language/english/error_msg_lang.php
[2017-06-19 12:14:37]	DEBUG :	Language file loaded: language/english/upload_lang.php
[2017-06-19 12:14:37]	SQL :	SELECT id,category,subcategory,type,status FROM feedback WHERE status=1 
[2017-06-19 12:14:37]	SQL :	SELECT feature_id FROM business_feature WHERE bid='1'
[2017-06-19 12:14:37]	SQL :	SELECT feature_id FROM business_feature WHERE bid='1'
[2017-06-19 12:14:37]	SQL :	SELECT feature_id FROM business_feature WHERE bid='1'
[2017-06-19 12:14:37]	SQL :	SELECT id,type FROM 1_leads_status
[2017-06-19 12:14:37]	SQL :	SELECT design FROM business_lead_use WHERE bid='1' LIMIT 0,1
[2017-06-19 12:14:37]	SQL :	SELECT sid,status FROM 1_support_status
[2017-06-19 12:14:37]	SQL :	SELECT feature_id FROM `business_feature` where bid=1
[2017-06-19 12:14:37]	SQL :	SELECT action_align FROM account_settings WHERE bid='1'
[2017-06-19 12:14:37]	SQL :	SELECT dialstatus FROM 1_callhistory WHERE dialstatus = 'CONNECTING'
[2017-06-19 12:14:37]	SQL :	SELECT FOUND_ROWS() as cnt
[2017-06-19 12:14:37]	SQL :	SELECT del_notify FROM account_settings WHERE bid='1'
[2017-06-19 12:14:37]	DEBUG :	Model Class Initialized
[2017-06-19 12:14:37]	DEBUG :	Database Driver Class Initialized
[2017-06-19 12:14:37]	SQL :	SELECT * FROM 1_user_role
							WHERE roleid='1'
							AND bid='1'
[2017-06-19 12:14:37]	SQL :	SELECT m.modid,m.modname,m.moddesc,
							COALESCE(o.opt_add,0) as opt_add,
							COALESCE(o.opt_view,0) as opt_view,
							COALESCE(o.opt_download,0) as opt_download,
							COALESCE(opt_delete,0) as opt_delete 
							FROM module m
							LEFT JOIN (SELECT * FROM 1_role_mod_opt
							WHERE roleid='1' 
							AND bid='1') as o
							ON m.modid=o.modid where m.status=1
[2017-06-19 12:14:37]	SQL :	SELECT a.*,f.fieldname FROM 1_role_access a
								LEFT JOIN systemfields f on a.fieldid=f.fieldid
								WHERE a.roleid='1'
								AND a.bid='1'
								AND a.fieldtype='s'
[2017-06-19 12:14:37]	SQL :	SELECT * FROM 1_role_access
								WHERE roleid='1'
								AND bid='1'
							AND fieldtype='c'
[2017-06-19 12:14:37]	SQL :	SELECT feature_id FROM `business_feature` where bid=1
[2017-06-19 12:14:37]	SQL :	SELECT feature_id FROM `business_feature` where bid=1
[2017-06-19 12:14:37]	SQL :	select	groupname from 1_groups where groupname='TESTINGLEADGRP' and gid!=14
[2017-06-19 12:14:37]	DEBUG :	Database Driver Class Initialized
[2017-06-19 12:14:37]	SQL :	SELECT * FROM 1_user_role
							WHERE roleid='1'
							AND bid='1'
[2017-06-19 12:14:37]	SQL :	SELECT m.modid,m.modname,m.moddesc,
							COALESCE(o.opt_add,0) as opt_add,
							COALESCE(o.opt_view,0) as opt_view,
							COALESCE(o.opt_download,0) as opt_download,
							COALESCE(opt_delete,0) as opt_delete 
							FROM module m
							LEFT JOIN (SELECT * FROM 1_role_mod_opt
							WHERE roleid='1' 
							AND bid='1') as o
							ON m.modid=o.modid where m.status=1
[2017-06-19 12:14:37]	SQL :	SELECT a.*,f.fieldname FROM 1_role_access a
								LEFT JOIN systemfields f on a.fieldid=f.fieldid
								WHERE a.roleid='1'
								AND a.bid='1'
								AND a.fieldtype='s'
[2017-06-19 12:14:37]	SQL :	SELECT * FROM 1_role_access
								WHERE roleid='1'
								AND bid='1'
							AND fieldtype='c'
[2017-06-19 12:14:37]	SQL :	SELECT prinumber FROM 1_groups WHERE gid = '14' 
[2017-06-19 12:14:37]	SQL :	UPDATE prinumbers SET
					status		= '0'
					,associateid= '0'
					WHERE number= '200048'
[2017-06-19 12:14:38]	SQL :	UPDATE prinumbers SET
					status		= '1'
					,associateid= '14'
					WHERE number= '200047'
[2017-06-19 12:14:38]	SQL :	UPDATE `1_groups` SET `replytocust_voitext` = '0', `mailalerttoowner` = '1', `groupname` = 'TESTINGLEADGRP', `bday` = '{\"Mon\":{\"day\":\"1\",\"st\":\"00:00\",\"et\":\"23:59\"},\"Tue\":{\"day\":\"1\",\"st\":\"00:00\",\"et\":\"23:59\"},\"Wed\":{\"day\":\"1\",\"st\":\"00:00\",\"et\":\"23:59\"},\"Thu\":{\"day\":\"1\",\"st\":\"00:00\",\"et\":\"23:59\"},\"Fri\":{\"day\":\"1\",\"st\":\"00:00\",\"et\":\"23:59\"},\"Sat\":{\"day\":\"1\",\"st\":\"00:00\",\"et\":\"23:59\"},\"Sun\":{\"day\":\"1\",\"st\":\"00:00\",\"et\":\"23:59\"}}', `prinumber` = '200047', `rules` = '1', `eid` = '0', `keyword` = 'keyword', `primary_rule` = '0', `hdaytext` = 'test', `replymessage` = '', `timeout` = '25', `oneditaction` = '', `onhangup` = '', `leadaction` = '', `replyattmsg` = '', `oncallaction` = '', `supportaction` = '', `supportgrp` = '', `landingregion` = 'KA', `voicemessagetext` = '', `connectowner` = '0', `replytocustomer` = '0', `replytoexecutive` = '0', `recordnotice` = '0', `record` = '0', `sameexe` = '0', `misscall` = '0', `pincode` = '0', `allgroup` = 0, `mailalerttowoner` = '0', `groupkey` = 'MV8xNA==' WHERE `gid` = '14'
[2017-06-19 12:14:38]	DEBUG :	DB Transaction Failure
[2017-06-19 12:14:38]	ERROR :	Query error: Unknown column 'mailalerttoowner' in 'field list'
[2017-06-19 12:16:05]	DEBUG :	Config Class Initialized
[2017-06-19 12:16:05]	DEBUG :	Hooks Class Initialized
[2017-06-19 12:16:05]	DEBUG :	URI Class Initialized
[2017-06-19 12:16:05]	DEBUG :	Router Class Initialized
[2017-06-19 12:16:05]	DEBUG :	Output Class Initialized
[2017-06-19 12:16:05]	DEBUG :	Input Class Initialized
[2017-06-19 12:16:05]	DEBUG :	XSS Filtering completed
[2017-06-19 12:16:05]	DEBUG :	XSS Filtering completed
[2017-06-19 12:16:05]	DEBUG :	XSS Filtering completed
[2017-06-19 12:16:05]	DEBUG :	XSS Filtering completed
[2017-06-19 12:16:05]	DEBUG :	Global POST and COOKIE data sanitized
[2017-06-19 12:16:05]	DEBUG :	Language Class Initialized
[2017-06-19 12:16:05]	DEBUG :	Loader Class Initialized
[2017-06-19 12:16:05]	DEBUG :	Helper loaded: url_helper
[2017-06-19 12:16:05]	DEBUG :	Helper loaded: form_helper
[2017-06-19 12:16:05]	DEBUG :	Helper loaded: html_helper
[2017-06-19 12:16:05]	DEBUG :	Helper loaded: email_helper
[2017-06-19 12:16:05]	DEBUG :	Helper loaded: ckeditor_helper
[2017-06-19 12:16:05]	DEBUG :	Helper loaded: mcube_helper
[2017-06-19 12:16:05]	DEBUG :	Database Driver Class Initialized
[2017-06-19 12:16:05]	ERROR :	Severity: 8192  --> mysql_pconnect(): The mysql extension is deprecated and will be removed in the future: use mysqli or PDO instead /var/www/html/mcnew/system/database/drivers/mysql/mysql_driver.php 88
[2017-06-19 12:16:05]	DEBUG :	Session Class Initialized
[2017-06-19 12:16:05]	DEBUG :	Helper loaded: string_helper
[2017-06-19 12:16:05]	DEBUG :	Encrypt Class Initialized
[2017-06-19 12:16:05]	SQL :	SELECT *
FROM (`call_sessions`)
WHERE `session_id` = '847e9ee4e1543e295a6ddd381996c5e3'
AND `user_agent` = 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36'
[2017-06-19 12:16:05]	DEBUG :	Session routines successfully run
[2017-06-19 12:16:05]	DEBUG :	Table Class Initialized
[2017-06-19 12:16:05]	DEBUG :	Pagination Class Initialized
[2017-06-19 12:16:05]	DEBUG :	Config file loaded: config/paypallib_config.php
[2017-06-19 12:16:05]	DEBUG :	Form Validation Class Initialized
[2017-06-19 12:16:05]	DEBUG :	Email Class Initialized
[2017-06-19 12:16:05]	DEBUG :	Language file loaded: language/english/calendar_lang.php
[2017-06-19 12:16:05]	DEBUG :	Calendar Class Initialized
[2017-06-19 12:16:05]	DEBUG :	Controller Class Initialized
[2017-06-19 12:16:05]	DEBUG :	Model Class Initialized
[2017-06-19 12:16:05]	DEBUG :	Model Class Initialized
[2017-06-19 12:16:05]	DEBUG :	Model Class Initialized
[2017-06-19 12:16:05]	DEBUG :	Model Class Initialized
[2017-06-19 12:16:05]	DEBUG :	Model Class Initialized
[2017-06-19 12:16:05]	DEBUG :	Model Class Initialized
[2017-06-19 12:16:05]	DEBUG :	Model Class Initialized
[2017-06-19 12:16:05]	DEBUG :	Model Class Initialized
[2017-06-19 12:16:05]	DEBUG :	Model Class Initialized
[2017-06-19 12:16:05]	DEBUG :	Model Class Initialized
[2017-06-19 12:16:05]	DEBUG :	Model Class Initialized
[2017-06-19 12:16:05]	DEBUG :	Model Class Initialized
[2017-06-19 12:16:05]	DEBUG :	Plugin loaded: to_pdf_pi
[2017-06-19 12:16:05]	SQL :	SELECT u.uid FROM user u
				LEFT JOIN 1_employee e on (e.bid=u.bid AND e.eid=u.eid)
				WHERE e.status='1' AND e.login='1' AND u.status='1' 
				AND u.bid='1' AND u.eid='1'
[2017-06-19 12:16:05]	SQL :	SELECT *
FROM (`language`)
WHERE `langid` = '1'
[2017-06-19 12:16:05]	DEBUG :	Database Driver Class Initialized
[2017-06-19 12:16:05]	SQL :	SELECT roleid FROM 1_employee
							WHERE eid='1'
							AND bid='1'
[2017-06-19 12:16:05]	SQL :	UPDATE `call_sessions` SET `last_activity` = '1497853678', `user_data` = 'a:20:{s:3:\"uid\";s:1:\"1\";s:3:\"bid\";s:1:\"1\";s:8:\"username\";s:20:\"ashwini.naidu@vmc.in\";s:3:\"eid\";s:1:\"1\";s:3:\"app\";s:1:\"1\";s:7:\"authkey\";s:17:\"1.1.d886b8e8a0615\";s:9:\"recording\";s:1:\"1\";s:10:\"mcubecalls\";s:1:\"1\";s:7:\"mtdebug\";s:1:\"1\";s:8:\"deviceid\";s:36:\"ffffffff-a4d5-960f-ffff-ffff82ba1723\";s:8:\"language\";s:1:\"1\";s:6:\"status\";s:1:\"1\";s:9:\"appstatus\";s:1:\"1\";s:3:\"pid\";s:1:\"0\";s:3:\"act\";s:1:\"0\";s:16:\"registrationdate\";s:19:\"2014-09-08 16:04:19\";s:10:\"dnd_status\";s:1:\"0\";s:9:\"logged_in\";s:1:\"1\";s:6:\"roleid\";s:1:\"1\";s:4:\"cbid\";s:1:\"1\";}' WHERE `session_id` = '847e9ee4e1543e295a6ddd381996c5e3'
[2017-06-19 12:16:05]	DEBUG :	Database Driver Class Initialized
[2017-06-19 12:16:05]	SQL :	SELECT * FROM 1_user_role
							WHERE roleid='1'
							AND bid='1'
[2017-06-19 12:16:05]	SQL :	SELECT m.modid,m.modname,m.moddesc,
							COALESCE(o.opt_add,0) as opt_add,
							COALESCE(o.opt_view,0) as opt_view,
							COALESCE(o.opt_download,0) as opt_download,
							COALESCE(opt_delete,0) as opt_delete 
							FROM module m
							LEFT JOIN (SELECT * FROM 1_role_mod_opt
							WHERE roleid='1' 
							AND bid='1') as o
							ON m.modid=o.modid where m.status=1
[2017-06-19 12:16:05]	SQL :	SELECT a.*,f.fieldname FROM 1_role_access a
								LEFT JOIN systemfields f on a.fieldid=f.fieldid
								WHERE a.roleid='1'
								AND a.bid='1'
								AND a.fieldtype='s'
[2017-06-19 12:16:05]	SQL :	SELECT * FROM 1_role_access
								WHERE roleid='1'
								AND bid='1'
							AND fieldtype='c'
[2017-06-19 12:16:05]	SQL :	SELECT a.selfdisable FROM 1_employee a WHERE a.eid='1'
[2017-06-19 12:16:05]	DEBUG :	Language file loaded: language/english/unit_test_lang.php
[2017-06-19 12:16:05]	DEBUG :	Language file loaded: language/english/db_lang.php
[2017-06-19 12:16:05]	DEBUG :	Language file loaded: language/english/ftp_lang.php
[2017-06-19 12:16:05]	DEBUG :	Language file loaded: language/english/menu_lang.php
[2017-06-19 12:16:05]	DEBUG :	Language file loaded: language/english/db_tables_lang.php
[2017-06-19 12:16:05]	DEBUG :	Language file loaded: language/english/form_level_lang.php
[2017-06-19 12:16:05]	DEBUG :	Language file loaded: language/english/form_validation_lang.php
[2017-06-19 12:16:05]	DEBUG :	Language file loaded: language/english/email_lang.php
[2017-06-19 12:16:05]	DEBUG :	Language file loaded: language/english/number_lang.php
[2017-06-19 12:16:05]	DEBUG :	Language file loaded: language/english/layout_lang.php
[2017-06-19 12:16:05]	DEBUG :	Language file loaded: language/english/validation_lang.php
[2017-06-19 12:16:05]	DEBUG :	Language file loaded: language/english/scaffolding_lang.php
[2017-06-19 12:16:05]	DEBUG :	Language file loaded: language/english/date_lang.php
[2017-06-19 12:16:05]	DEBUG :	Language file loaded: language/english/profiler_lang.php
[2017-06-19 12:16:05]	DEBUG :	Language file loaded: language/english/imglib_lang.php
[2017-06-19 12:16:05]	DEBUG :	Language file loaded: language/english/error_msg_lang.php
[2017-06-19 12:16:05]	DEBUG :	Language file loaded: language/english/upload_lang.php
[2017-06-19 12:16:05]	SQL :	SELECT id,category,subcategory,type,status FROM feedback WHERE status=1 
[2017-06-19 12:16:05]	SQL :	SELECT feature_id FROM business_feature WHERE bid='1'
[2017-06-19 12:16:05]	SQL :	SELECT feature_id FROM business_feature WHERE bid='1'
[2017-06-19 12:16:05]	SQL :	SELECT feature_id FROM business_feature WHERE bid='1'
[2017-06-19 12:16:05]	SQL :	SELECT id,type FROM 1_leads_status
[2017-06-19 12:16:05]	SQL :	SELECT design FROM business_lead_use WHERE bid='1' LIMIT 0,1
[2017-06-19 12:16:05]	SQL :	SELECT sid,status FROM 1_support_status
[2017-06-19 12:16:05]	SQL :	SELECT feature_id FROM `business_feature` where bid=1
[2017-06-19 12:16:05]	SQL :	SELECT action_align FROM account_settings WHERE bid='1'
[2017-06-19 12:16:05]	SQL :	SELECT dialstatus FROM 1_callhistory WHERE dialstatus = 'CONNECTING'
[2017-06-19 12:16:05]	SQL :	SELECT FOUND_ROWS() as cnt
[2017-06-19 12:16:05]	SQL :	SELECT del_notify FROM account_settings WHERE bid='1'
[2017-06-19 12:16:05]	DEBUG :	Model Class Initialized
[2017-06-19 12:16:05]	DEBUG :	Database Driver Class Initialized
[2017-06-19 12:16:05]	SQL :	SELECT * FROM 1_user_role
							WHERE roleid='1'
							AND bid='1'
[2017-06-19 12:16:05]	SQL :	SELECT m.modid,m.modname,m.moddesc,
							COALESCE(o.opt_add,0) as opt_add,
							COALESCE(o.opt_view,0) as opt_view,
							COALESCE(o.opt_download,0) as opt_download,
							COALESCE(opt_delete,0) as opt_delete 
							FROM module m
							LEFT JOIN (SELECT * FROM 1_role_mod_opt
							WHERE roleid='1' 
							AND bid='1') as o
							ON m.modid=o.modid where m.status=1
[2017-06-19 12:16:05]	SQL :	SELECT a.*,f.fieldname FROM 1_role_access a
								LEFT JOIN systemfields f on a.fieldid=f.fieldid
								WHERE a.roleid='1'
								AND a.bid='1'
								AND a.fieldtype='s'
[2017-06-19 12:16:05]	SQL :	SELECT * FROM 1_role_access
								WHERE roleid='1'
								AND bid='1'
							AND fieldtype='c'
[2017-06-19 12:16:05]	SQL :	SELECT feature_id FROM `business_feature` where bid=1
[2017-06-19 12:16:05]	SQL :	SELECT feature_id FROM `business_feature` where bid=1
[2017-06-19 12:16:05]	SQL :	SELECT * FROM business where pid='1'
[2017-06-19 12:16:05]	DEBUG :	Database Driver Class Initialized
[2017-06-19 12:16:05]	SQL :	SELECT * FROM ( 
				SELECT 's' as type,f.addon,f.fieldid,f.modid,
				f.fieldname,'' as fieldtype,'' as fieldKey,'' as options,
				'' as defaultvalue,f.is_required as is_required,f.is_hidden,COALESCE(l.display_order,0) as display_order,
				l.customlabel,COALESCE(l.show,1) as `show`,COALESCE(l.listing,1) as `listing`
				FROM systemfields f
				LEFT JOIN (
					SELECT * FROM 1_custom_label
					WHERE fieldtype='s'
				) as l
				on (f.fieldid=l.fieldid AND l.modid=f.modid)
				WHERE f.modid='3'  AND f.is_hidden=0 
				UNION
				SELECT 'c' as type,'0',f.fieldid,f.modid,
				f.fieldname,f.fieldtype,f.field_key as fieldKey,f.options,
				f.defaultvalue,f.is_required as is_required,'',COALESCE(l.display_order,0) as display_order,
				l.customlabel,COALESCE(l.show,1) as `show`,COALESCE(l.listing,1) as `listing`
				FROM 1_customfields f
				LEFT JOIN (
					SELECT * FROM 1_custom_label
					WHERE fieldtype='c'
				) as l
				on (f.fieldid=l.fieldid AND l.modid=f.modid)
				WHERE f.modid='3') as t ORDER BY display_order ASC
[2017-06-19 12:16:05]	DEBUG :	Database Driver Class Initialized
[2017-06-19 12:16:05]	SQL :	SELECT g.*,e.empname as eid,sg.groupname as supportgroup,
					  if(g.connectowner=1,'YES','NO') as connectwner,
					  g.eid as epid,if(g.record=1,'YES','NO') as records,
					  if(g.replytocustomer=1,'YES','NO') as replycus,
					  if(g.replytoexecutive=1,'YES','NO') as replyexe,
					  if(g.pincode=1,'YES','NO') as pcode,
					  p.number as prinumber,
					  p.landingnumber as addnumber,(if(g.primary_rule=0,'All',cr.regionname)) as regionname,
					  r.rulename as rules,g.rules as rule
					  FROM 1_groups g 
					  LEFT JOIN group_rules r on g.rules=r.rulesid 
					  LEFT JOIN 1_employee e on g.eid=e.eid 
					  LEFT JOIN 1_support_groups sg on g.supportgrp=sg.gid 
					  LEFT JOIN prinumber p on g.prinumber=p.number
					  LEFT JOIN 1_custom_region cr on g.primary_rule=cr.regionid
					  WHERE g.bid='1' 
					  AND g.gid='14'
[2017-06-19 12:16:05]	SQL :	SELECT * FROM 1_customfieldsvalue 
				WHERE bid='1' 
				AND modid='3'
				AND dataid='14'
[2017-06-19 12:16:05]	SQL :	SELECT s.fieldname
							FROM systemfields s
							LEFT JOIN `features` f on s.addon=f.feature_id
							LEFT JOIN business_packageaddons b on (f.feature_id=b.feature_id AND b.number='200048')
							WHERE s.modid='3' AND s.addon!=0 AND b.number is null
[2017-06-19 12:16:05]	SQL :	SELECT feature_id FROM business_feature WHERE bid='1'
[2017-06-19 12:16:05]	SQL :	SELECT l.region, p.bid,l.number FROM landingnumbers l 
		                        LEFT JOIN prinumbers p ON p.landingnumber=l.number 
		                        WHERE p.bid='1' 
		                        AND p.status = '0' AND p.type = '0' AND l.module_id = '1'
		                         
[2017-06-19 12:16:05]	SQL :	SELECT p.status,p.number,p.landingnumber from prinumbers p
								LEFT JOIN landingnumbers l on l.pri=p.pri
								WHERE p.bid='1' 
								AND p.ntype=0 AND l.module_id='1'
								
[2017-06-19 12:16:05]	SQL :	SELECT * FROM group_rules
[2017-06-19 12:16:05]	SQL :	select eid,empname from 1_employee where status=1 ORDER BY empname
[2017-06-19 12:16:05]	DEBUG :	Database Driver Class Initialized
[2017-06-19 12:16:05]	SQL :	SELECT * FROM 1_user_role
							WHERE roleid='1'
							AND bid='1'
[2017-06-19 12:16:05]	SQL :	SELECT m.modid,m.modname,m.moddesc,
							COALESCE(o.opt_add,0) as opt_add,
							COALESCE(o.opt_view,0) as opt_view,
							COALESCE(o.opt_download,0) as opt_download,
							COALESCE(opt_delete,0) as opt_delete 
							FROM module m
							LEFT JOIN (SELECT * FROM 1_role_mod_opt
							WHERE roleid='1' 
							AND bid='1') as o
							ON m.modid=o.modid where m.status=1
[2017-06-19 12:16:05]	SQL :	SELECT a.*,f.fieldname FROM 1_role_access a
								LEFT JOIN systemfields f on a.fieldid=f.fieldid
								WHERE a.roleid='1'
								AND a.bid='1'
								AND a.fieldtype='s'
[2017-06-19 12:16:05]	SQL :	SELECT * FROM 1_role_access
								WHERE roleid='1'
								AND bid='1'
							AND fieldtype='c'
[2017-06-19 12:16:05]	SQL :	SELECT * FROM 1_employee WHERE status='1' ORDER BY empname
[2017-06-19 12:16:05]	SQL :	SELECT * FROM 1_custom_region
[2017-06-19 12:16:05]	SQL :	SELECT support FROM `prinumbers` WHERE bid='1' 
[2017-06-19 12:16:05]	SQL :	SELECT * FROM 1_support_groups WHERE status=1
[2017-06-19 12:16:05]	SQL :	select eid,empname from 1_employee where status=1 ORDER BY empname
[2017-06-19 12:16:05]	DEBUG :	Database Driver Class Initialized
[2017-06-19 12:16:05]	SQL :	SELECT * FROM 1_user_role
							WHERE roleid='1'
							AND bid='1'
[2017-06-19 12:16:05]	SQL :	SELECT m.modid,m.modname,m.moddesc,
							COALESCE(o.opt_add,0) as opt_add,
							COALESCE(o.opt_view,0) as opt_view,
							COALESCE(o.opt_download,0) as opt_download,
							COALESCE(opt_delete,0) as opt_delete 
							FROM module m
							LEFT JOIN (SELECT * FROM 1_role_mod_opt
							WHERE roleid='1' 
							AND bid='1') as o
							ON m.modid=o.modid where m.status=1
[2017-06-19 12:16:05]	SQL :	SELECT a.*,f.fieldname FROM 1_role_access a
								LEFT JOIN systemfields f on a.fieldid=f.fieldid
								WHERE a.roleid='1'
								AND a.bid='1'
								AND a.fieldtype='s'
[2017-06-19 12:16:05]	SQL :	SELECT * FROM 1_role_access
								WHERE roleid='1'
								AND bid='1'
							AND fieldtype='c'
[2017-06-19 12:16:05]	SQL :	SELECT * FROM 1_employee WHERE status='1' ORDER BY empname
[2017-06-19 12:16:05]	DEBUG :	File loaded: /var/www/html/mcnew/system/application/views/mainheader.php
[2017-06-19 12:16:05]	DEBUG :	Database Driver Class Initialized
[2017-06-19 12:16:05]	SQL :	select a.*,e.empname as reporttoname,b.rolename  as role,if(u.recording=1,'Yes','No') as recording
					  from 1_employee a
					  LEFT JOIN  1_employee e on a.reportto=e.eid
					  LEFT JOIN  user u on a.eid=u.eid
					  ,1_user_role b 
					  where a.roleid=b.roleid AND a.eid='1'
[2017-06-19 12:16:05]	SQL :	SELECT * FROM 1_customfieldsvalue 
				WHERE bid='1' 
				AND modid='2'
				AND dataid='1'
[2017-06-19 12:16:05]	DEBUG :	File loaded: /var/www/html/mcnew/system/application/views/leftsidebar.php
[2017-06-19 12:16:05]	DEBUG :	File loaded: /var/www/html/mcnew/system/application/views/form_view.php
[2017-06-19 12:16:05]	DEBUG :	File loaded: /var/www/html/mcnew/system/application/views/footer.php
[2017-06-19 12:16:05]	DEBUG :	Final output sent to browser
[2017-06-19 12:16:05]	DEBUG :	Total execution time: 0.1356
[2017-06-19 12:17:29]	DEBUG :	Config Class Initialized
[2017-06-19 12:17:29]	DEBUG :	Hooks Class Initialized
[2017-06-19 12:17:29]	DEBUG :	URI Class Initialized
[2017-06-19 12:17:29]	DEBUG :	Router Class Initialized
[2017-06-19 12:17:29]	DEBUG :	Output Class Initialized
[2017-06-19 12:17:29]	DEBUG :	Input Class Initialized
[2017-06-19 12:17:29]	DEBUG :	XSS Filtering completed
[2017-06-19 12:17:29]	DEBUG :	XSS Filtering completed
[2017-06-19 12:17:29]	DEBUG :	XSS Filtering completed
[2017-06-19 12:17:29]	DEBUG :	XSS Filtering completed
[2017-06-19 12:17:29]	DEBUG :	Global POST and COOKIE data sanitized
[2017-06-19 12:17:29]	DEBUG :	Language Class Initialized
[2017-06-19 12:17:29]	DEBUG :	Loader Class Initialized
[2017-06-19 12:17:29]	DEBUG :	Helper loaded: url_helper
[2017-06-19 12:17:29]	DEBUG :	Helper loaded: form_helper
[2017-06-19 12:17:29]	DEBUG :	Helper loaded: html_helper
[2017-06-19 12:17:29]	DEBUG :	Helper loaded: email_helper
[2017-06-19 12:17:29]	DEBUG :	Helper loaded: ckeditor_helper
[2017-06-19 12:17:29]	DEBUG :	Helper loaded: mcube_helper
[2017-06-19 12:17:29]	DEBUG :	Database Driver Class Initialized
[2017-06-19 12:17:29]	ERROR :	Severity: 8192  --> mysql_pconnect(): The mysql extension is deprecated and will be removed in the future: use mysqli or PDO instead /var/www/html/mcnew/system/database/drivers/mysql/mysql_driver.php 88
[2017-06-19 12:17:29]	DEBUG :	Session Class Initialized
[2017-06-19 12:17:29]	DEBUG :	Helper loaded: string_helper
[2017-06-19 12:17:29]	DEBUG :	Encrypt Class Initialized
[2017-06-19 12:17:29]	SQL :	SELECT *
FROM (`call_sessions`)
WHERE `session_id` = '847e9ee4e1543e295a6ddd381996c5e3'
AND `user_agent` = 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36'
[2017-06-19 12:17:29]	DEBUG :	Session routines successfully run
[2017-06-19 12:17:29]	DEBUG :	Table Class Initialized
[2017-06-19 12:17:29]	DEBUG :	Pagination Class Initialized
[2017-06-19 12:17:29]	DEBUG :	Config file loaded: config/paypallib_config.php
[2017-06-19 12:17:29]	DEBUG :	Form Validation Class Initialized
[2017-06-19 12:17:29]	DEBUG :	Email Class Initialized
[2017-06-19 12:17:29]	DEBUG :	Language file loaded: language/english/calendar_lang.php
[2017-06-19 12:17:29]	DEBUG :	Calendar Class Initialized
[2017-06-19 12:17:29]	DEBUG :	Controller Class Initialized
[2017-06-19 12:17:29]	DEBUG :	Model Class Initialized
[2017-06-19 12:17:29]	DEBUG :	Model Class Initialized
[2017-06-19 12:17:29]	DEBUG :	Model Class Initialized
[2017-06-19 12:17:29]	DEBUG :	Model Class Initialized
[2017-06-19 12:17:29]	DEBUG :	Model Class Initialized
[2017-06-19 12:17:29]	DEBUG :	Model Class Initialized
[2017-06-19 12:17:29]	DEBUG :	Model Class Initialized
[2017-06-19 12:17:29]	DEBUG :	Model Class Initialized
[2017-06-19 12:17:29]	DEBUG :	Model Class Initialized
[2017-06-19 12:17:29]	DEBUG :	Model Class Initialized
[2017-06-19 12:17:29]	DEBUG :	Model Class Initialized
[2017-06-19 12:17:29]	DEBUG :	Model Class Initialized
[2017-06-19 12:17:29]	DEBUG :	Plugin loaded: to_pdf_pi
[2017-06-19 12:17:29]	SQL :	SELECT u.uid FROM user u
				LEFT JOIN 1_employee e on (e.bid=u.bid AND e.eid=u.eid)
				WHERE e.status='1' AND e.login='1' AND u.status='1' 
				AND u.bid='1' AND u.eid='1'
[2017-06-19 12:17:29]	SQL :	SELECT *
FROM (`language`)
WHERE `langid` = '1'
[2017-06-19 12:17:29]	DEBUG :	Database Driver Class Initialized
[2017-06-19 12:17:29]	SQL :	SELECT roleid FROM 1_employee
							WHERE eid='1'
							AND bid='1'
[2017-06-19 12:17:29]	SQL :	UPDATE `call_sessions` SET `last_activity` = '1497853678', `user_data` = 'a:20:{s:3:\"uid\";s:1:\"1\";s:3:\"bid\";s:1:\"1\";s:8:\"username\";s:20:\"ashwini.naidu@vmc.in\";s:3:\"eid\";s:1:\"1\";s:3:\"app\";s:1:\"1\";s:7:\"authkey\";s:17:\"1.1.d886b8e8a0615\";s:9:\"recording\";s:1:\"1\";s:10:\"mcubecalls\";s:1:\"1\";s:7:\"mtdebug\";s:1:\"1\";s:8:\"deviceid\";s:36:\"ffffffff-a4d5-960f-ffff-ffff82ba1723\";s:8:\"language\";s:1:\"1\";s:6:\"status\";s:1:\"1\";s:9:\"appstatus\";s:1:\"1\";s:3:\"pid\";s:1:\"0\";s:3:\"act\";s:1:\"0\";s:16:\"registrationdate\";s:19:\"2014-09-08 16:04:19\";s:10:\"dnd_status\";s:1:\"0\";s:9:\"logged_in\";s:1:\"1\";s:6:\"roleid\";s:1:\"1\";s:4:\"cbid\";s:1:\"1\";}' WHERE `session_id` = '847e9ee4e1543e295a6ddd381996c5e3'
[2017-06-19 12:17:29]	DEBUG :	Database Driver Class Initialized
[2017-06-19 12:17:29]	SQL :	SELECT * FROM 1_user_role
							WHERE roleid='1'
							AND bid='1'
[2017-06-19 12:17:29]	SQL :	SELECT m.modid,m.modname,m.moddesc,
							COALESCE(o.opt_add,0) as opt_add,
							COALESCE(o.opt_view,0) as opt_view,
							COALESCE(o.opt_download,0) as opt_download,
							COALESCE(opt_delete,0) as opt_delete 
							FROM module m
							LEFT JOIN (SELECT * FROM 1_role_mod_opt
							WHERE roleid='1' 
							AND bid='1') as o
							ON m.modid=o.modid where m.status=1
[2017-06-19 12:17:29]	SQL :	SELECT a.*,f.fieldname FROM 1_role_access a
								LEFT JOIN systemfields f on a.fieldid=f.fieldid
								WHERE a.roleid='1'
								AND a.bid='1'
								AND a.fieldtype='s'
[2017-06-19 12:17:29]	SQL :	SELECT * FROM 1_role_access
								WHERE roleid='1'
								AND bid='1'
							AND fieldtype='c'
[2017-06-19 12:17:29]	SQL :	SELECT a.selfdisable FROM 1_employee a WHERE a.eid='1'
[2017-06-19 12:17:29]	DEBUG :	Language file loaded: language/english/unit_test_lang.php
[2017-06-19 12:17:29]	DEBUG :	Language file loaded: language/english/db_lang.php
[2017-06-19 12:17:29]	DEBUG :	Language file loaded: language/english/ftp_lang.php
[2017-06-19 12:17:29]	DEBUG :	Language file loaded: language/english/menu_lang.php
[2017-06-19 12:17:29]	DEBUG :	Language file loaded: language/english/db_tables_lang.php
[2017-06-19 12:17:29]	DEBUG :	Language file loaded: language/english/form_level_lang.php
[2017-06-19 12:17:29]	DEBUG :	Language file loaded: language/english/form_validation_lang.php
[2017-06-19 12:17:29]	DEBUG :	Language file loaded: language/english/email_lang.php
[2017-06-19 12:17:29]	DEBUG :	Language file loaded: language/english/number_lang.php
[2017-06-19 12:17:29]	DEBUG :	Language file loaded: language/english/layout_lang.php
[2017-06-19 12:17:29]	DEBUG :	Language file loaded: language/english/validation_lang.php
[2017-06-19 12:17:29]	DEBUG :	Language file loaded: language/english/scaffolding_lang.php
[2017-06-19 12:17:29]	DEBUG :	Language file loaded: language/english/date_lang.php
[2017-06-19 12:17:29]	DEBUG :	Language file loaded: language/english/profiler_lang.php
[2017-06-19 12:17:29]	DEBUG :	Language file loaded: language/english/imglib_lang.php
[2017-06-19 12:17:29]	DEBUG :	Language file loaded: language/english/error_msg_lang.php
[2017-06-19 12:17:29]	DEBUG :	Language file loaded: language/english/upload_lang.php
[2017-06-19 12:17:29]	SQL :	SELECT id,category,subcategory,type,status FROM feedback WHERE status=1 
[2017-06-19 12:17:29]	SQL :	SELECT feature_id FROM business_feature WHERE bid='1'
[2017-06-19 12:17:29]	SQL :	SELECT feature_id FROM business_feature WHERE bid='1'
[2017-06-19 12:17:29]	SQL :	SELECT feature_id FROM business_feature WHERE bid='1'
[2017-06-19 12:17:29]	SQL :	SELECT id,type FROM 1_leads_status
[2017-06-19 12:17:29]	SQL :	SELECT design FROM business_lead_use WHERE bid='1' LIMIT 0,1
[2017-06-19 12:17:29]	SQL :	SELECT sid,status FROM 1_support_status
[2017-06-19 12:17:29]	SQL :	SELECT feature_id FROM `business_feature` where bid=1
[2017-06-19 12:17:29]	SQL :	SELECT action_align FROM account_settings WHERE bid='1'
[2017-06-19 12:17:29]	SQL :	SELECT dialstatus FROM 1_callhistory WHERE dialstatus = 'CONNECTING'
[2017-06-19 12:17:29]	SQL :	SELECT FOUND_ROWS() as cnt
[2017-06-19 12:17:29]	SQL :	SELECT del_notify FROM account_settings WHERE bid='1'
[2017-06-19 12:17:29]	DEBUG :	Model Class Initialized
[2017-06-19 12:17:29]	DEBUG :	Database Driver Class Initialized
[2017-06-19 12:17:29]	SQL :	SELECT * FROM 1_user_role
							WHERE roleid='1'
							AND bid='1'
[2017-06-19 12:17:29]	SQL :	SELECT m.modid,m.modname,m.moddesc,
							COALESCE(o.opt_add,0) as opt_add,
							COALESCE(o.opt_view,0) as opt_view,
							COALESCE(o.opt_download,0) as opt_download,
							COALESCE(opt_delete,0) as opt_delete 
							FROM module m
							LEFT JOIN (SELECT * FROM 1_role_mod_opt
							WHERE roleid='1' 
							AND bid='1') as o
							ON m.modid=o.modid where m.status=1
[2017-06-19 12:17:29]	SQL :	SELECT a.*,f.fieldname FROM 1_role_access a
								LEFT JOIN systemfields f on a.fieldid=f.fieldid
								WHERE a.roleid='1'
								AND a.bid='1'
								AND a.fieldtype='s'
[2017-06-19 12:17:29]	SQL :	SELECT * FROM 1_role_access
								WHERE roleid='1'
								AND bid='1'
							AND fieldtype='c'
[2017-06-19 12:17:29]	SQL :	SELECT p.status,p.number,p.landingnumber from prinumbers p
									LEFT JOIN landingnumbers l on l.pri=p.pri
									WHERE p.bid='1' AND p.status=0
									AND l.region = 'DL' AND p.ntype=0 AND l.module_id='1'
									ORDER BY l.region
[2017-06-19 12:17:29]	DEBUG :	Final output sent to browser
[2017-06-19 12:17:29]	DEBUG :	Total execution time: 0.0804
[2017-06-19 12:17:33]	DEBUG :	Config Class Initialized
[2017-06-19 12:17:33]	DEBUG :	Hooks Class Initialized
[2017-06-19 12:17:33]	DEBUG :	URI Class Initialized
[2017-06-19 12:17:33]	DEBUG :	Router Class Initialized
[2017-06-19 12:17:33]	DEBUG :	Output Class Initialized
[2017-06-19 12:17:33]	DEBUG :	Input Class Initialized
[2017-06-19 12:17:33]	DEBUG :	XSS Filtering completed
[2017-06-19 12:17:33]	DEBUG :	XSS Filtering completed
[2017-06-19 12:17:33]	DEBUG :	XSS Filtering completed
[2017-06-19 12:17:33]	DEBUG :	XSS Filtering completed
[2017-06-19 12:17:33]	DEBUG :	XSS Filtering completed
[2017-06-19 12:17:33]	DEBUG :	XSS Filtering completed
[2017-06-19 12:17:33]	DEBUG :	XSS Filtering completed
[2017-06-19 12:17:33]	DEBUG :	XSS Filtering completed
[2017-06-19 12:17:33]	DEBUG :	XSS Filtering completed
[2017-06-19 12:17:33]	DEBUG :	XSS Filtering completed
[2017-06-19 12:17:33]	DEBUG :	XSS Filtering completed
[2017-06-19 12:17:33]	DEBUG :	XSS Filtering completed
[2017-06-19 12:17:33]	DEBUG :	XSS Filtering completed
[2017-06-19 12:17:33]	DEBUG :	XSS Filtering completed
[2017-06-19 12:17:33]	DEBUG :	XSS Filtering completed
[2017-06-19 12:17:33]	DEBUG :	XSS Filtering completed
[2017-06-19 12:17:33]	DEBUG :	XSS Filtering completed
[2017-06-19 12:17:33]	DEBUG :	XSS Filtering completed
[2017-06-19 12:17:33]	DEBUG :	XSS Filtering completed
[2017-06-19 12:17:33]	DEBUG :	XSS Filtering completed
[2017-06-19 12:17:33]	DEBUG :	XSS Filtering completed
[2017-06-19 12:17:33]	DEBUG :	XSS Filtering completed
[2017-06-19 12:17:33]	DEBUG :	XSS Filtering completed
[2017-06-19 12:17:33]	DEBUG :	XSS Filtering completed
[2017-06-19 12:17:33]	DEBUG :	XSS Filtering completed
[2017-06-19 12:17:33]	DEBUG :	XSS Filtering completed
[2017-06-19 12:17:33]	DEBUG :	XSS Filtering completed
[2017-06-19 12:17:33]	DEBUG :	XSS Filtering completed
[2017-06-19 12:17:33]	DEBUG :	XSS Filtering completed
[2017-06-19 12:17:33]	DEBUG :	XSS Filtering completed
[2017-06-19 12:17:33]	DEBUG :	XSS Filtering completed
[2017-06-19 12:17:33]	DEBUG :	XSS Filtering completed
[2017-06-19 12:17:33]	DEBUG :	XSS Filtering completed
[2017-06-19 12:17:33]	DEBUG :	XSS Filtering completed
[2017-06-19 12:17:33]	DEBUG :	XSS Filtering completed
[2017-06-19 12:17:33]	DEBUG :	XSS Filtering completed
[2017-06-19 12:17:33]	DEBUG :	XSS Filtering completed
[2017-06-19 12:17:33]	DEBUG :	XSS Filtering completed
[2017-06-19 12:17:33]	DEBUG :	XSS Filtering completed
[2017-06-19 12:17:33]	DEBUG :	XSS Filtering completed
[2017-06-19 12:17:33]	DEBUG :	XSS Filtering completed
[2017-06-19 12:17:33]	DEBUG :	XSS Filtering completed
[2017-06-19 12:17:33]	DEBUG :	XSS Filtering completed
[2017-06-19 12:17:33]	DEBUG :	XSS Filtering completed
[2017-06-19 12:17:33]	DEBUG :	XSS Filtering completed
[2017-06-19 12:17:33]	DEBUG :	XSS Filtering completed
[2017-06-19 12:17:33]	DEBUG :	XSS Filtering completed
[2017-06-19 12:17:33]	DEBUG :	XSS Filtering completed
[2017-06-19 12:17:33]	DEBUG :	XSS Filtering completed
[2017-06-19 12:17:33]	DEBUG :	XSS Filtering completed
[2017-06-19 12:17:33]	DEBUG :	XSS Filtering completed
[2017-06-19 12:17:33]	DEBUG :	Global POST and COOKIE data sanitized
[2017-06-19 12:17:33]	DEBUG :	Language Class Initialized
[2017-06-19 12:17:33]	DEBUG :	Loader Class Initialized
[2017-06-19 12:17:33]	DEBUG :	Helper loaded: url_helper
[2017-06-19 12:17:33]	DEBUG :	Helper loaded: form_helper
[2017-06-19 12:17:33]	DEBUG :	Helper loaded: html_helper
[2017-06-19 12:17:33]	DEBUG :	Helper loaded: email_helper
[2017-06-19 12:17:33]	DEBUG :	Helper loaded: ckeditor_helper
[2017-06-19 12:17:33]	DEBUG :	Helper loaded: mcube_helper
[2017-06-19 12:17:33]	DEBUG :	Database Driver Class Initialized
[2017-06-19 12:17:33]	ERROR :	Severity: 8192  --> mysql_pconnect(): The mysql extension is deprecated and will be removed in the future: use mysqli or PDO instead /var/www/html/mcnew/system/database/drivers/mysql/mysql_driver.php 88
[2017-06-19 12:17:33]	DEBUG :	Session Class Initialized
[2017-06-19 12:17:33]	DEBUG :	Helper loaded: string_helper
[2017-06-19 12:17:33]	DEBUG :	Encrypt Class Initialized
[2017-06-19 12:17:33]	SQL :	SELECT *
FROM (`call_sessions`)
WHERE `session_id` = '847e9ee4e1543e295a6ddd381996c5e3'
AND `user_agent` = 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36'
[2017-06-19 12:17:33]	DEBUG :	Session routines successfully run
[2017-06-19 12:17:33]	DEBUG :	Table Class Initialized
[2017-06-19 12:17:33]	DEBUG :	Pagination Class Initialized
[2017-06-19 12:17:33]	DEBUG :	Config file loaded: config/paypallib_config.php
[2017-06-19 12:17:33]	DEBUG :	Form Validation Class Initialized
[2017-06-19 12:17:33]	DEBUG :	Email Class Initialized
[2017-06-19 12:17:33]	DEBUG :	Language file loaded: language/english/calendar_lang.php
[2017-06-19 12:17:33]	DEBUG :	Calendar Class Initialized
[2017-06-19 12:17:33]	DEBUG :	Controller Class Initialized
[2017-06-19 12:17:33]	DEBUG :	Model Class Initialized
[2017-06-19 12:17:33]	DEBUG :	Model Class Initialized
[2017-06-19 12:17:33]	DEBUG :	Model Class Initialized
[2017-06-19 12:17:33]	DEBUG :	Model Class Initialized
[2017-06-19 12:17:33]	DEBUG :	Model Class Initialized
[2017-06-19 12:17:33]	DEBUG :	Model Class Initialized
[2017-06-19 12:17:33]	DEBUG :	Model Class Initialized
[2017-06-19 12:17:33]	DEBUG :	Model Class Initialized
[2017-06-19 12:17:33]	DEBUG :	Model Class Initialized
[2017-06-19 12:17:33]	DEBUG :	Model Class Initialized
[2017-06-19 12:17:33]	DEBUG :	Model Class Initialized
[2017-06-19 12:17:33]	DEBUG :	Model Class Initialized
[2017-06-19 12:17:33]	DEBUG :	Plugin loaded: to_pdf_pi
[2017-06-19 12:17:33]	SQL :	SELECT u.uid FROM user u
				LEFT JOIN 1_employee e on (e.bid=u.bid AND e.eid=u.eid)
				WHERE e.status='1' AND e.login='1' AND u.status='1' 
				AND u.bid='1' AND u.eid='1'
[2017-06-19 12:17:33]	SQL :	SELECT *
FROM (`language`)
WHERE `langid` = '1'
[2017-06-19 12:17:33]	DEBUG :	Database Driver Class Initialized
[2017-06-19 12:17:33]	SQL :	SELECT roleid FROM 1_employee
							WHERE eid='1'
							AND bid='1'
[2017-06-19 12:17:33]	SQL :	UPDATE `call_sessions` SET `last_activity` = '1497853678', `user_data` = 'a:20:{s:3:\"uid\";s:1:\"1\";s:3:\"bid\";s:1:\"1\";s:8:\"username\";s:20:\"ashwini.naidu@vmc.in\";s:3:\"eid\";s:1:\"1\";s:3:\"app\";s:1:\"1\";s:7:\"authkey\";s:17:\"1.1.d886b8e8a0615\";s:9:\"recording\";s:1:\"1\";s:10:\"mcubecalls\";s:1:\"1\";s:7:\"mtdebug\";s:1:\"1\";s:8:\"deviceid\";s:36:\"ffffffff-a4d5-960f-ffff-ffff82ba1723\";s:8:\"language\";s:1:\"1\";s:6:\"status\";s:1:\"1\";s:9:\"appstatus\";s:1:\"1\";s:3:\"pid\";s:1:\"0\";s:3:\"act\";s:1:\"0\";s:16:\"registrationdate\";s:19:\"2014-09-08 16:04:19\";s:10:\"dnd_status\";s:1:\"0\";s:9:\"logged_in\";s:1:\"1\";s:6:\"roleid\";s:1:\"1\";s:4:\"cbid\";s:1:\"1\";}' WHERE `session_id` = '847e9ee4e1543e295a6ddd381996c5e3'
[2017-06-19 12:17:33]	DEBUG :	Database Driver Class Initialized
[2017-06-19 12:17:33]	SQL :	SELECT * FROM 1_user_role
							WHERE roleid='1'
							AND bid='1'
[2017-06-19 12:17:33]	SQL :	SELECT m.modid,m.modname,m.moddesc,
							COALESCE(o.opt_add,0) as opt_add,
							COALESCE(o.opt_view,0) as opt_view,
							COALESCE(o.opt_download,0) as opt_download,
							COALESCE(opt_delete,0) as opt_delete 
							FROM module m
							LEFT JOIN (SELECT * FROM 1_role_mod_opt
							WHERE roleid='1' 
							AND bid='1') as o
							ON m.modid=o.modid where m.status=1
[2017-06-19 12:17:33]	SQL :	SELECT a.*,f.fieldname FROM 1_role_access a
								LEFT JOIN systemfields f on a.fieldid=f.fieldid
								WHERE a.roleid='1'
								AND a.bid='1'
								AND a.fieldtype='s'
[2017-06-19 12:17:33]	SQL :	SELECT * FROM 1_role_access
								WHERE roleid='1'
								AND bid='1'
							AND fieldtype='c'
[2017-06-19 12:17:33]	SQL :	SELECT a.selfdisable FROM 1_employee a WHERE a.eid='1'
[2017-06-19 12:17:33]	DEBUG :	Language file loaded: language/english/unit_test_lang.php
[2017-06-19 12:17:33]	DEBUG :	Language file loaded: language/english/db_lang.php
[2017-06-19 12:17:33]	DEBUG :	Language file loaded: language/english/ftp_lang.php
[2017-06-19 12:17:33]	DEBUG :	Language file loaded: language/english/menu_lang.php
[2017-06-19 12:17:33]	DEBUG :	Language file loaded: language/english/db_tables_lang.php
[2017-06-19 12:17:33]	DEBUG :	Language file loaded: language/english/form_level_lang.php
[2017-06-19 12:17:33]	DEBUG :	Language file loaded: language/english/form_validation_lang.php
[2017-06-19 12:17:33]	DEBUG :	Language file loaded: language/english/email_lang.php
[2017-06-19 12:17:33]	DEBUG :	Language file loaded: language/english/number_lang.php
[2017-06-19 12:17:33]	DEBUG :	Language file loaded: language/english/layout_lang.php
[2017-06-19 12:17:33]	DEBUG :	Language file loaded: language/english/validation_lang.php
[2017-06-19 12:17:33]	DEBUG :	Language file loaded: language/english/scaffolding_lang.php
[2017-06-19 12:17:33]	DEBUG :	Language file loaded: language/english/date_lang.php
[2017-06-19 12:17:33]	DEBUG :	Language file loaded: language/english/profiler_lang.php
[2017-06-19 12:17:33]	DEBUG :	Language file loaded: language/english/imglib_lang.php
[2017-06-19 12:17:33]	DEBUG :	Language file loaded: language/english/error_msg_lang.php
[2017-06-19 12:17:33]	DEBUG :	Language file loaded: language/english/upload_lang.php
[2017-06-19 12:17:33]	SQL :	SELECT id,category,subcategory,type,status FROM feedback WHERE status=1 
[2017-06-19 12:17:33]	SQL :	SELECT feature_id FROM business_feature WHERE bid='1'
[2017-06-19 12:17:33]	SQL :	SELECT feature_id FROM business_feature WHERE bid='1'
[2017-06-19 12:17:33]	SQL :	SELECT feature_id FROM business_feature WHERE bid='1'
[2017-06-19 12:17:33]	SQL :	SELECT id,type FROM 1_leads_status
[2017-06-19 12:17:33]	SQL :	SELECT design FROM business_lead_use WHERE bid='1' LIMIT 0,1
[2017-06-19 12:17:33]	SQL :	SELECT sid,status FROM 1_support_status
[2017-06-19 12:17:33]	SQL :	SELECT feature_id FROM `business_feature` where bid=1
[2017-06-19 12:17:33]	SQL :	SELECT action_align FROM account_settings WHERE bid='1'
[2017-06-19 12:17:33]	SQL :	SELECT dialstatus FROM 1_callhistory WHERE dialstatus = 'CONNECTING'
[2017-06-19 12:17:33]	SQL :	SELECT FOUND_ROWS() as cnt
[2017-06-19 12:17:33]	SQL :	SELECT del_notify FROM account_settings WHERE bid='1'
[2017-06-19 12:17:33]	DEBUG :	Model Class Initialized
[2017-06-19 12:17:33]	DEBUG :	Database Driver Class Initialized
[2017-06-19 12:17:33]	SQL :	SELECT * FROM 1_user_role
							WHERE roleid='1'
							AND bid='1'
[2017-06-19 12:17:33]	SQL :	SELECT m.modid,m.modname,m.moddesc,
							COALESCE(o.opt_add,0) as opt_add,
							COALESCE(o.opt_view,0) as opt_view,
							COALESCE(o.opt_download,0) as opt_download,
							COALESCE(opt_delete,0) as opt_delete 
							FROM module m
							LEFT JOIN (SELECT * FROM 1_role_mod_opt
							WHERE roleid='1' 
							AND bid='1') as o
							ON m.modid=o.modid where m.status=1
[2017-06-19 12:17:33]	SQL :	SELECT a.*,f.fieldname FROM 1_role_access a
								LEFT JOIN systemfields f on a.fieldid=f.fieldid
								WHERE a.roleid='1'
								AND a.bid='1'
								AND a.fieldtype='s'
[2017-06-19 12:17:33]	SQL :	SELECT * FROM 1_role_access
								WHERE roleid='1'
								AND bid='1'
							AND fieldtype='c'
[2017-06-19 12:17:33]	SQL :	SELECT feature_id FROM `business_feature` where bid=1
[2017-06-19 12:17:33]	SQL :	SELECT feature_id FROM `business_feature` where bid=1
[2017-06-19 12:17:33]	SQL :	select	groupname from 1_groups where groupname='TESTINGLEADGRP' and gid!=14
[2017-06-19 12:17:33]	DEBUG :	Database Driver Class Initialized
[2017-06-19 12:17:33]	SQL :	SELECT * FROM 1_user_role
							WHERE roleid='1'
							AND bid='1'
[2017-06-19 12:17:33]	SQL :	SELECT m.modid,m.modname,m.moddesc,
							COALESCE(o.opt_add,0) as opt_add,
							COALESCE(o.opt_view,0) as opt_view,
							COALESCE(o.opt_download,0) as opt_download,
							COALESCE(opt_delete,0) as opt_delete 
							FROM module m
							LEFT JOIN (SELECT * FROM 1_role_mod_opt
							WHERE roleid='1' 
							AND bid='1') as o
							ON m.modid=o.modid where m.status=1
[2017-06-19 12:17:33]	SQL :	SELECT a.*,f.fieldname FROM 1_role_access a
								LEFT JOIN systemfields f on a.fieldid=f.fieldid
								WHERE a.roleid='1'
								AND a.bid='1'
								AND a.fieldtype='s'
[2017-06-19 12:17:33]	SQL :	SELECT * FROM 1_role_access
								WHERE roleid='1'
								AND bid='1'
							AND fieldtype='c'
[2017-06-19 12:17:33]	SQL :	SELECT prinumber FROM 1_groups WHERE gid = '14' 
[2017-06-19 12:17:33]	SQL :	UPDATE prinumbers SET
					status		= '0'
					,associateid= '0'
					WHERE number= '200048'
[2017-06-19 12:17:33]	SQL :	UPDATE prinumbers SET
					status		= '1'
					,associateid= '14'
					WHERE number= '200048'
[2017-06-19 12:17:33]	SQL :	UPDATE `1_groups` SET `replytocust_voitext` = '0', `mailalerttoowner` = '1', `groupname` = 'TESTINGLEADGRP', `bday` = '{\"Mon\":{\"day\":\"1\",\"st\":\"00:00\",\"et\":\"23:59\"},\"Tue\":{\"day\":\"1\",\"st\":\"00:00\",\"et\":\"23:59\"},\"Wed\":{\"day\":\"1\",\"st\":\"00:00\",\"et\":\"23:59\"},\"Thu\":{\"day\":\"1\",\"st\":\"00:00\",\"et\":\"23:59\"},\"Fri\":{\"day\":\"1\",\"st\":\"00:00\",\"et\":\"23:59\"},\"Sat\":{\"day\":\"1\",\"st\":\"00:00\",\"et\":\"23:59\"},\"Sun\":{\"day\":\"1\",\"st\":\"00:00\",\"et\":\"23:59\"}}', `prinumber` = '200048', `rules` = '1', `eid` = '0', `keyword` = 'keyword', `primary_rule` = '0', `hdaytext` = 'test', `replymessage` = '', `timeout` = '25', `oneditaction` = '', `onhangup` = '', `leadaction` = '', `replyattmsg` = '', `oncallaction` = '', `supportaction` = '', `supportgrp` = '', `landingregion` = 'DL', `voicemessagetext` = '', `connectowner` = '0', `replytocustomer` = '0', `replytoexecutive` = '0', `recordnotice` = '0', `record` = '0', `sameexe` = '0', `misscall` = '0', `pincode` = '0', `allgroup` = 0, `mailalerttowoner` = '0', `groupkey` = 'MV8xNA==' WHERE `gid` = '14'
[2017-06-19 12:17:33]	DEBUG :	DB Transaction Failure
[2017-06-19 12:17:33]	ERROR :	Query error: Unknown column 'mailalerttoowner' in 'field list'
[2017-06-19 12:18:08]	DEBUG :	Config Class Initialized
[2017-06-19 12:18:08]	DEBUG :	Hooks Class Initialized
[2017-06-19 12:18:08]	DEBUG :	URI Class Initialized
[2017-06-19 12:18:08]	DEBUG :	Router Class Initialized
[2017-06-19 12:18:08]	DEBUG :	Output Class Initialized
[2017-06-19 12:18:08]	DEBUG :	Input Class Initialized
[2017-06-19 12:18:08]	DEBUG :	XSS Filtering completed
[2017-06-19 12:18:08]	DEBUG :	XSS Filtering completed
[2017-06-19 12:18:08]	DEBUG :	XSS Filtering completed
[2017-06-19 12:18:08]	DEBUG :	XSS Filtering completed
[2017-06-19 12:18:08]	DEBUG :	Global POST and COOKIE data sanitized
[2017-06-19 12:18:08]	DEBUG :	Language Class Initialized
[2017-06-19 12:18:08]	DEBUG :	Loader Class Initialized
[2017-06-19 12:18:08]	DEBUG :	Helper loaded: url_helper
[2017-06-19 12:18:08]	DEBUG :	Helper loaded: form_helper
[2017-06-19 12:18:08]	DEBUG :	Helper loaded: html_helper
[2017-06-19 12:18:08]	DEBUG :	Helper loaded: email_helper
[2017-06-19 12:18:08]	DEBUG :	Helper loaded: ckeditor_helper
[2017-06-19 12:18:08]	DEBUG :	Helper loaded: mcube_helper
[2017-06-19 12:18:08]	DEBUG :	Database Driver Class Initialized
[2017-06-19 12:18:08]	ERROR :	Severity: 8192  --> mysql_pconnect(): The mysql extension is deprecated and will be removed in the future: use mysqli or PDO instead /var/www/html/mcnew/system/database/drivers/mysql/mysql_driver.php 88
[2017-06-19 12:18:08]	DEBUG :	Session Class Initialized
[2017-06-19 12:18:08]	DEBUG :	Helper loaded: string_helper
[2017-06-19 12:18:08]	DEBUG :	Encrypt Class Initialized
[2017-06-19 12:18:08]	SQL :	SELECT *
FROM (`call_sessions`)
WHERE `session_id` = '847e9ee4e1543e295a6ddd381996c5e3'
AND `user_agent` = 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36'
[2017-06-19 12:18:08]	DEBUG :	Session routines successfully run
[2017-06-19 12:18:08]	DEBUG :	Table Class Initialized
[2017-06-19 12:18:08]	DEBUG :	Pagination Class Initialized
[2017-06-19 12:18:08]	DEBUG :	Config file loaded: config/paypallib_config.php
[2017-06-19 12:18:08]	DEBUG :	Form Validation Class Initialized
[2017-06-19 12:18:08]	DEBUG :	Email Class Initialized
[2017-06-19 12:18:08]	DEBUG :	Language file loaded: language/english/calendar_lang.php
[2017-06-19 12:18:08]	DEBUG :	Calendar Class Initialized
[2017-06-19 12:18:08]	DEBUG :	Controller Class Initialized
[2017-06-19 12:18:08]	DEBUG :	Model Class Initialized
[2017-06-19 12:18:08]	DEBUG :	Model Class Initialized
[2017-06-19 12:18:08]	DEBUG :	Model Class Initialized
[2017-06-19 12:18:08]	DEBUG :	Model Class Initialized
[2017-06-19 12:18:08]	DEBUG :	Model Class Initialized
[2017-06-19 12:18:08]	DEBUG :	Model Class Initialized
[2017-06-19 12:18:08]	DEBUG :	Model Class Initialized
[2017-06-19 12:18:08]	DEBUG :	Model Class Initialized
[2017-06-19 12:18:08]	DEBUG :	Model Class Initialized
[2017-06-19 12:18:08]	DEBUG :	Model Class Initialized
[2017-06-19 12:18:08]	DEBUG :	Model Class Initialized
[2017-06-19 12:18:08]	DEBUG :	Model Class Initialized
[2017-06-19 12:18:08]	DEBUG :	Plugin loaded: to_pdf_pi
[2017-06-19 12:18:08]	SQL :	SELECT u.uid FROM user u
				LEFT JOIN 1_employee e on (e.bid=u.bid AND e.eid=u.eid)
				WHERE e.status='1' AND e.login='1' AND u.status='1' 
				AND u.bid='1' AND u.eid='1'
[2017-06-19 12:18:08]	SQL :	SELECT *
FROM (`language`)
WHERE `langid` = '1'
[2017-06-19 12:18:08]	DEBUG :	Database Driver Class Initialized
[2017-06-19 12:18:08]	SQL :	SELECT roleid FROM 1_employee
							WHERE eid='1'
							AND bid='1'
[2017-06-19 12:18:08]	SQL :	UPDATE `call_sessions` SET `last_activity` = '1497853678', `user_data` = 'a:20:{s:3:\"uid\";s:1:\"1\";s:3:\"bid\";s:1:\"1\";s:8:\"username\";s:20:\"ashwini.naidu@vmc.in\";s:3:\"eid\";s:1:\"1\";s:3:\"app\";s:1:\"1\";s:7:\"authkey\";s:17:\"1.1.d886b8e8a0615\";s:9:\"recording\";s:1:\"1\";s:10:\"mcubecalls\";s:1:\"1\";s:7:\"mtdebug\";s:1:\"1\";s:8:\"deviceid\";s:36:\"ffffffff-a4d5-960f-ffff-ffff82ba1723\";s:8:\"language\";s:1:\"1\";s:6:\"status\";s:1:\"1\";s:9:\"appstatus\";s:1:\"1\";s:3:\"pid\";s:1:\"0\";s:3:\"act\";s:1:\"0\";s:16:\"registrationdate\";s:19:\"2014-09-08 16:04:19\";s:10:\"dnd_status\";s:1:\"0\";s:9:\"logged_in\";s:1:\"1\";s:6:\"roleid\";s:1:\"1\";s:4:\"cbid\";s:1:\"1\";}' WHERE `session_id` = '847e9ee4e1543e295a6ddd381996c5e3'
[2017-06-19 12:18:08]	DEBUG :	Database Driver Class Initialized
[2017-06-19 12:18:08]	SQL :	SELECT * FROM 1_user_role
							WHERE roleid='1'
							AND bid='1'
[2017-06-19 12:18:08]	SQL :	SELECT m.modid,m.modname,m.moddesc,
							COALESCE(o.opt_add,0) as opt_add,
							COALESCE(o.opt_view,0) as opt_view,
							COALESCE(o.opt_download,0) as opt_download,
							COALESCE(opt_delete,0) as opt_delete 
							FROM module m
							LEFT JOIN (SELECT * FROM 1_role_mod_opt
							WHERE roleid='1' 
							AND bid='1') as o
							ON m.modid=o.modid where m.status=1
[2017-06-19 12:18:08]	SQL :	SELECT a.*,f.fieldname FROM 1_role_access a
								LEFT JOIN systemfields f on a.fieldid=f.fieldid
								WHERE a.roleid='1'
								AND a.bid='1'
								AND a.fieldtype='s'
[2017-06-19 12:18:08]	SQL :	SELECT * FROM 1_role_access
								WHERE roleid='1'
								AND bid='1'
							AND fieldtype='c'
[2017-06-19 12:18:08]	SQL :	SELECT a.selfdisable FROM 1_employee a WHERE a.eid='1'
[2017-06-19 12:18:08]	DEBUG :	Language file loaded: language/english/unit_test_lang.php
[2017-06-19 12:18:08]	DEBUG :	Language file loaded: language/english/db_lang.php
[2017-06-19 12:18:08]	DEBUG :	Language file loaded: language/english/ftp_lang.php
[2017-06-19 12:18:08]	DEBUG :	Language file loaded: language/english/menu_lang.php
[2017-06-19 12:18:08]	DEBUG :	Language file loaded: language/english/db_tables_lang.php
[2017-06-19 12:18:08]	DEBUG :	Language file loaded: language/english/form_level_lang.php
[2017-06-19 12:18:08]	DEBUG :	Language file loaded: language/english/form_validation_lang.php
[2017-06-19 12:18:08]	DEBUG :	Language file loaded: language/english/email_lang.php
[2017-06-19 12:18:08]	DEBUG :	Language file loaded: language/english/number_lang.php
[2017-06-19 12:18:08]	DEBUG :	Language file loaded: language/english/layout_lang.php
[2017-06-19 12:18:08]	DEBUG :	Language file loaded: language/english/validation_lang.php
[2017-06-19 12:18:08]	DEBUG :	Language file loaded: language/english/scaffolding_lang.php
[2017-06-19 12:18:08]	DEBUG :	Language file loaded: language/english/date_lang.php
[2017-06-19 12:18:08]	DEBUG :	Language file loaded: language/english/profiler_lang.php
[2017-06-19 12:18:08]	DEBUG :	Language file loaded: language/english/imglib_lang.php
[2017-06-19 12:18:08]	DEBUG :	Language file loaded: language/english/error_msg_lang.php
[2017-06-19 12:18:08]	DEBUG :	Language file loaded: language/english/upload_lang.php
[2017-06-19 12:18:08]	SQL :	SELECT id,category,subcategory,type,status FROM feedback WHERE status=1 
[2017-06-19 12:18:08]	SQL :	SELECT feature_id FROM business_feature WHERE bid='1'
[2017-06-19 12:18:08]	SQL :	SELECT feature_id FROM business_feature WHERE bid='1'
[2017-06-19 12:18:08]	SQL :	SELECT feature_id FROM business_feature WHERE bid='1'
[2017-06-19 12:18:08]	SQL :	SELECT id,type FROM 1_leads_status
[2017-06-19 12:18:08]	SQL :	SELECT design FROM business_lead_use WHERE bid='1' LIMIT 0,1
[2017-06-19 12:18:08]	SQL :	SELECT sid,status FROM 1_support_status
[2017-06-19 12:18:08]	SQL :	SELECT feature_id FROM `business_feature` where bid=1
[2017-06-19 12:18:08]	SQL :	SELECT action_align FROM account_settings WHERE bid='1'
[2017-06-19 12:18:08]	SQL :	SELECT dialstatus FROM 1_callhistory WHERE dialstatus = 'CONNECTING'
[2017-06-19 12:18:08]	SQL :	SELECT FOUND_ROWS() as cnt
[2017-06-19 12:18:08]	SQL :	SELECT del_notify FROM account_settings WHERE bid='1'
[2017-06-19 12:18:08]	DEBUG :	Model Class Initialized
[2017-06-19 12:18:08]	DEBUG :	Database Driver Class Initialized
[2017-06-19 12:18:08]	SQL :	SELECT * FROM 1_user_role
							WHERE roleid='1'
							AND bid='1'
[2017-06-19 12:18:08]	SQL :	SELECT m.modid,m.modname,m.moddesc,
							COALESCE(o.opt_add,0) as opt_add,
							COALESCE(o.opt_view,0) as opt_view,
							COALESCE(o.opt_download,0) as opt_download,
							COALESCE(opt_delete,0) as opt_delete 
							FROM module m
							LEFT JOIN (SELECT * FROM 1_role_mod_opt
							WHERE roleid='1' 
							AND bid='1') as o
							ON m.modid=o.modid where m.status=1
[2017-06-19 12:18:08]	SQL :	SELECT a.*,f.fieldname FROM 1_role_access a
								LEFT JOIN systemfields f on a.fieldid=f.fieldid
								WHERE a.roleid='1'
								AND a.bid='1'
								AND a.fieldtype='s'
[2017-06-19 12:18:08]	SQL :	SELECT * FROM 1_role_access
								WHERE roleid='1'
								AND bid='1'
							AND fieldtype='c'
[2017-06-19 12:18:08]	SQL :	SELECT feature_id FROM `business_feature` where bid=1
[2017-06-19 12:18:08]	SQL :	SELECT feature_id FROM `business_feature` where bid=1
[2017-06-19 12:18:08]	SQL :	SELECT * FROM business where pid='1'
[2017-06-19 12:18:08]	DEBUG :	Database Driver Class Initialized
[2017-06-19 12:18:08]	SQL :	SELECT * FROM ( 
				SELECT 's' as type,f.addon,f.fieldid,f.modid,
				f.fieldname,'' as fieldtype,'' as fieldKey,'' as options,
				'' as defaultvalue,f.is_required as is_required,f.is_hidden,COALESCE(l.display_order,0) as display_order,
				l.customlabel,COALESCE(l.show,1) as `show`,COALESCE(l.listing,1) as `listing`
				FROM systemfields f
				LEFT JOIN (
					SELECT * FROM 1_custom_label
					WHERE fieldtype='s'
				) as l
				on (f.fieldid=l.fieldid AND l.modid=f.modid)
				WHERE f.modid='3'  AND f.is_hidden=0 
				UNION
				SELECT 'c' as type,'0',f.fieldid,f.modid,
				f.fieldname,f.fieldtype,f.field_key as fieldKey,f.options,
				f.defaultvalue,f.is_required as is_required,'',COALESCE(l.display_order,0) as display_order,
				l.customlabel,COALESCE(l.show,1) as `show`,COALESCE(l.listing,1) as `listing`
				FROM 1_customfields f
				LEFT JOIN (
					SELECT * FROM 1_custom_label
					WHERE fieldtype='c'
				) as l
				on (f.fieldid=l.fieldid AND l.modid=f.modid)
				WHERE f.modid='3') as t ORDER BY display_order ASC
[2017-06-19 12:18:08]	DEBUG :	Database Driver Class Initialized
[2017-06-19 12:18:08]	SQL :	SELECT g.*,e.empname as eid,sg.groupname as supportgroup,
					  if(g.connectowner=1,'YES','NO') as connectwner,
					  g.eid as epid,if(g.record=1,'YES','NO') as records,
					  if(g.replytocustomer=1,'YES','NO') as replycus,
					  if(g.replytoexecutive=1,'YES','NO') as replyexe,
					  if(g.pincode=1,'YES','NO') as pcode,
					  p.number as prinumber,
					  p.landingnumber as addnumber,(if(g.primary_rule=0,'All',cr.regionname)) as regionname,
					  r.rulename as rules,g.rules as rule
					  FROM 1_groups g 
					  LEFT JOIN group_rules r on g.rules=r.rulesid 
					  LEFT JOIN 1_employee e on g.eid=e.eid 
					  LEFT JOIN 1_support_groups sg on g.supportgrp=sg.gid 
					  LEFT JOIN prinumber p on g.prinumber=p.number
					  LEFT JOIN 1_custom_region cr on g.primary_rule=cr.regionid
					  WHERE g.bid='1' 
					  AND g.gid='14'
[2017-06-19 12:18:08]	SQL :	SELECT * FROM 1_customfieldsvalue 
				WHERE bid='1' 
				AND modid='3'
				AND dataid='14'
[2017-06-19 12:18:08]	SQL :	SELECT s.fieldname
							FROM systemfields s
							LEFT JOIN `features` f on s.addon=f.feature_id
							LEFT JOIN business_packageaddons b on (f.feature_id=b.feature_id AND b.number='200048')
							WHERE s.modid='3' AND s.addon!=0 AND b.number is null
[2017-06-19 12:18:08]	SQL :	SELECT feature_id FROM business_feature WHERE bid='1'
[2017-06-19 12:18:08]	SQL :	SELECT l.region, p.bid,l.number FROM landingnumbers l 
		                        LEFT JOIN prinumbers p ON p.landingnumber=l.number 
		                        WHERE p.bid='1' 
		                        AND p.status = '0' AND p.type = '0' AND l.module_id = '1'
		                         
[2017-06-19 12:18:08]	SQL :	SELECT p.status,p.number,p.landingnumber from prinumbers p
								LEFT JOIN landingnumbers l on l.pri=p.pri
								WHERE p.bid='1' 
								AND p.ntype=0 AND l.module_id='1'
								
[2017-06-19 12:18:08]	SQL :	SELECT * FROM group_rules
[2017-06-19 12:18:08]	SQL :	select eid,empname from 1_employee where status=1 ORDER BY empname
[2017-06-19 12:18:08]	DEBUG :	Database Driver Class Initialized
[2017-06-19 12:18:08]	SQL :	SELECT * FROM 1_user_role
							WHERE roleid='1'
							AND bid='1'
[2017-06-19 12:18:08]	SQL :	SELECT m.modid,m.modname,m.moddesc,
							COALESCE(o.opt_add,0) as opt_add,
							COALESCE(o.opt_view,0) as opt_view,
							COALESCE(o.opt_download,0) as opt_download,
							COALESCE(opt_delete,0) as opt_delete 
							FROM module m
							LEFT JOIN (SELECT * FROM 1_role_mod_opt
							WHERE roleid='1' 
							AND bid='1') as o
							ON m.modid=o.modid where m.status=1
[2017-06-19 12:18:08]	SQL :	SELECT a.*,f.fieldname FROM 1_role_access a
								LEFT JOIN systemfields f on a.fieldid=f.fieldid
								WHERE a.roleid='1'
								AND a.bid='1'
								AND a.fieldtype='s'
[2017-06-19 12:18:08]	SQL :	SELECT * FROM 1_role_access
								WHERE roleid='1'
								AND bid='1'
							AND fieldtype='c'
[2017-06-19 12:18:08]	SQL :	SELECT * FROM 1_employee WHERE status='1' ORDER BY empname
[2017-06-19 12:18:08]	SQL :	SELECT * FROM 1_custom_region
[2017-06-19 12:18:08]	SQL :	SELECT support FROM `prinumbers` WHERE bid='1' 
[2017-06-19 12:18:08]	SQL :	SELECT * FROM 1_support_groups WHERE status=1
[2017-06-19 12:18:08]	SQL :	select eid,empname from 1_employee where status=1 ORDER BY empname
[2017-06-19 12:18:08]	DEBUG :	Database Driver Class Initialized
[2017-06-19 12:18:08]	SQL :	SELECT * FROM 1_user_role
							WHERE roleid='1'
							AND bid='1'
[2017-06-19 12:18:08]	SQL :	SELECT m.modid,m.modname,m.moddesc,
							COALESCE(o.opt_add,0) as opt_add,
							COALESCE(o.opt_view,0) as opt_view,
							COALESCE(o.opt_download,0) as opt_download,
							COALESCE(opt_delete,0) as opt_delete 
							FROM module m
							LEFT JOIN (SELECT * FROM 1_role_mod_opt
							WHERE roleid='1' 
							AND bid='1') as o
							ON m.modid=o.modid where m.status=1
[2017-06-19 12:18:08]	SQL :	SELECT a.*,f.fieldname FROM 1_role_access a
								LEFT JOIN systemfields f on a.fieldid=f.fieldid
								WHERE a.roleid='1'
								AND a.bid='1'
								AND a.fieldtype='s'
[2017-06-19 12:18:08]	SQL :	SELECT * FROM 1_role_access
								WHERE roleid='1'
								AND bid='1'
							AND fieldtype='c'
[2017-06-19 12:18:08]	SQL :	SELECT * FROM 1_employee WHERE status='1' ORDER BY empname
[2017-06-19 12:18:08]	DEBUG :	File loaded: /var/www/html/mcnew/system/application/views/mainheader.php
[2017-06-19 12:18:08]	DEBUG :	Database Driver Class Initialized
[2017-06-19 12:18:08]	SQL :	select a.*,e.empname as reporttoname,b.rolename  as role,if(u.recording=1,'Yes','No') as recording
					  from 1_employee a
					  LEFT JOIN  1_employee e on a.reportto=e.eid
					  LEFT JOIN  user u on a.eid=u.eid
					  ,1_user_role b 
					  where a.roleid=b.roleid AND a.eid='1'
[2017-06-19 12:18:08]	SQL :	SELECT * FROM 1_customfieldsvalue 
				WHERE bid='1' 
				AND modid='2'
				AND dataid='1'
[2017-06-19 12:18:08]	DEBUG :	File loaded: /var/www/html/mcnew/system/application/views/leftsidebar.php
[2017-06-19 12:18:08]	DEBUG :	File loaded: /var/www/html/mcnew/system/application/views/form_view.php
[2017-06-19 12:18:08]	DEBUG :	File loaded: /var/www/html/mcnew/system/application/views/footer.php
[2017-06-19 12:18:08]	DEBUG :	Final output sent to browser
[2017-06-19 12:18:08]	DEBUG :	Total execution time: 0.1214
[2017-06-19 12:18:09]	DEBUG :	Config Class Initialized
[2017-06-19 12:18:09]	DEBUG :	Hooks Class Initialized
[2017-06-19 12:18:09]	DEBUG :	URI Class Initialized
[2017-06-19 12:18:09]	DEBUG :	Router Class Initialized
[2017-06-19 12:18:09]	DEBUG :	Output Class Initialized
[2017-06-19 12:18:09]	DEBUG :	Input Class Initialized
[2017-06-19 12:18:09]	DEBUG :	XSS Filtering completed
[2017-06-19 12:18:09]	DEBUG :	XSS Filtering completed
[2017-06-19 12:18:09]	DEBUG :	XSS Filtering completed
[2017-06-19 12:18:09]	DEBUG :	XSS Filtering completed
[2017-06-19 12:18:09]	DEBUG :	Global POST and COOKIE data sanitized
[2017-06-19 12:18:09]	DEBUG :	Language Class Initialized
[2017-06-19 12:18:09]	DEBUG :	Loader Class Initialized
[2017-06-19 12:18:09]	DEBUG :	Helper loaded: url_helper
[2017-06-19 12:18:09]	DEBUG :	Helper loaded: form_helper
[2017-06-19 12:18:09]	DEBUG :	Helper loaded: html_helper
[2017-06-19 12:18:09]	DEBUG :	Helper loaded: email_helper
[2017-06-19 12:18:09]	DEBUG :	Helper loaded: ckeditor_helper
[2017-06-19 12:18:09]	DEBUG :	Helper loaded: mcube_helper
[2017-06-19 12:18:09]	DEBUG :	Database Driver Class Initialized
[2017-06-19 12:18:09]	ERROR :	Severity: 8192  --> mysql_pconnect(): The mysql extension is deprecated and will be removed in the future: use mysqli or PDO instead /var/www/html/mcnew/system/database/drivers/mysql/mysql_driver.php 88
[2017-06-19 12:18:09]	DEBUG :	Session Class Initialized
[2017-06-19 12:18:09]	DEBUG :	Helper loaded: string_helper
[2017-06-19 12:18:09]	DEBUG :	Encrypt Class Initialized
[2017-06-19 12:18:09]	SQL :	SELECT *
FROM (`call_sessions`)
WHERE `session_id` = '847e9ee4e1543e295a6ddd381996c5e3'
AND `user_agent` = 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36'
[2017-06-19 12:18:09]	DEBUG :	Session routines successfully run
[2017-06-19 12:18:09]	DEBUG :	Table Class Initialized
[2017-06-19 12:18:09]	DEBUG :	Pagination Class Initialized
[2017-06-19 12:18:09]	DEBUG :	Config file loaded: config/paypallib_config.php
[2017-06-19 12:18:09]	DEBUG :	Form Validation Class Initialized
[2017-06-19 12:18:09]	DEBUG :	Email Class Initialized
[2017-06-19 12:18:09]	DEBUG :	Language file loaded: language/english/calendar_lang.php
[2017-06-19 12:18:09]	DEBUG :	Calendar Class Initialized
[2017-06-19 12:18:09]	DEBUG :	Controller Class Initialized
[2017-06-19 12:18:09]	DEBUG :	Model Class Initialized
[2017-06-19 12:18:09]	DEBUG :	Model Class Initialized
[2017-06-19 12:18:09]	DEBUG :	Model Class Initialized
[2017-06-19 12:18:09]	DEBUG :	Model Class Initialized
[2017-06-19 12:18:09]	DEBUG :	Model Class Initialized
[2017-06-19 12:18:09]	DEBUG :	Model Class Initialized
[2017-06-19 12:18:09]	DEBUG :	Model Class Initialized
[2017-06-19 12:18:09]	DEBUG :	Model Class Initialized
[2017-06-19 12:18:09]	DEBUG :	Model Class Initialized
[2017-06-19 12:18:09]	DEBUG :	Model Class Initialized
[2017-06-19 12:18:09]	DEBUG :	Model Class Initialized
[2017-06-19 12:18:09]	DEBUG :	Model Class Initialized
[2017-06-19 12:18:09]	DEBUG :	Plugin loaded: to_pdf_pi
[2017-06-19 12:18:09]	SQL :	SELECT u.uid FROM user u
				LEFT JOIN 1_employee e on (e.bid=u.bid AND e.eid=u.eid)
				WHERE e.status='1' AND e.login='1' AND u.status='1' 
				AND u.bid='1' AND u.eid='1'
[2017-06-19 12:18:09]	SQL :	SELECT *
FROM (`language`)
WHERE `langid` = '1'
[2017-06-19 12:18:09]	DEBUG :	Database Driver Class Initialized
[2017-06-19 12:18:09]	SQL :	SELECT roleid FROM 1_employee
							WHERE eid='1'
							AND bid='1'
[2017-06-19 12:18:09]	SQL :	UPDATE `call_sessions` SET `last_activity` = '1497853678', `user_data` = 'a:20:{s:3:\"uid\";s:1:\"1\";s:3:\"bid\";s:1:\"1\";s:8:\"username\";s:20:\"ashwini.naidu@vmc.in\";s:3:\"eid\";s:1:\"1\";s:3:\"app\";s:1:\"1\";s:7:\"authkey\";s:17:\"1.1.d886b8e8a0615\";s:9:\"recording\";s:1:\"1\";s:10:\"mcubecalls\";s:1:\"1\";s:7:\"mtdebug\";s:1:\"1\";s:8:\"deviceid\";s:36:\"ffffffff-a4d5-960f-ffff-ffff82ba1723\";s:8:\"language\";s:1:\"1\";s:6:\"status\";s:1:\"1\";s:9:\"appstatus\";s:1:\"1\";s:3:\"pid\";s:1:\"0\";s:3:\"act\";s:1:\"0\";s:16:\"registrationdate\";s:19:\"2014-09-08 16:04:19\";s:10:\"dnd_status\";s:1:\"0\";s:9:\"logged_in\";s:1:\"1\";s:6:\"roleid\";s:1:\"1\";s:4:\"cbid\";s:1:\"1\";}' WHERE `session_id` = '847e9ee4e1543e295a6ddd381996c5e3'
[2017-06-19 12:18:09]	DEBUG :	Database Driver Class Initialized
[2017-06-19 12:18:09]	SQL :	SELECT * FROM 1_user_role
							WHERE roleid='1'
							AND bid='1'
[2017-06-19 12:18:09]	SQL :	SELECT m.modid,m.modname,m.moddesc,
							COALESCE(o.opt_add,0) as opt_add,
							COALESCE(o.opt_view,0) as opt_view,
							COALESCE(o.opt_download,0) as opt_download,
							COALESCE(opt_delete,0) as opt_delete 
							FROM module m
							LEFT JOIN (SELECT * FROM 1_role_mod_opt
							WHERE roleid='1' 
							AND bid='1') as o
							ON m.modid=o.modid where m.status=1
[2017-06-19 12:18:09]	SQL :	SELECT a.*,f.fieldname FROM 1_role_access a
								LEFT JOIN systemfields f on a.fieldid=f.fieldid
								WHERE a.roleid='1'
								AND a.bid='1'
								AND a.fieldtype='s'
[2017-06-19 12:18:09]	SQL :	SELECT * FROM 1_role_access
								WHERE roleid='1'
								AND bid='1'
							AND fieldtype='c'
[2017-06-19 12:18:09]	SQL :	SELECT a.selfdisable FROM 1_employee a WHERE a.eid='1'
[2017-06-19 12:18:09]	DEBUG :	Language file loaded: language/english/unit_test_lang.php
[2017-06-19 12:18:09]	DEBUG :	Language file loaded: language/english/db_lang.php
[2017-06-19 12:18:09]	DEBUG :	Language file loaded: language/english/ftp_lang.php
[2017-06-19 12:18:09]	DEBUG :	Language file loaded: language/english/menu_lang.php
[2017-06-19 12:18:09]	DEBUG :	Language file loaded: language/english/db_tables_lang.php
[2017-06-19 12:18:09]	DEBUG :	Language file loaded: language/english/form_level_lang.php
[2017-06-19 12:18:09]	DEBUG :	Language file loaded: language/english/form_validation_lang.php
[2017-06-19 12:18:09]	DEBUG :	Language file loaded: language/english/email_lang.php
[2017-06-19 12:18:09]	DEBUG :	Language file loaded: language/english/number_lang.php
[2017-06-19 12:18:09]	DEBUG :	Language file loaded: language/english/layout_lang.php
[2017-06-19 12:18:09]	DEBUG :	Language file loaded: language/english/validation_lang.php
[2017-06-19 12:18:09]	DEBUG :	Language file loaded: language/english/scaffolding_lang.php
[2017-06-19 12:18:09]	DEBUG :	Language file loaded: language/english/date_lang.php
[2017-06-19 12:18:09]	DEBUG :	Language file loaded: language/english/profiler_lang.php
[2017-06-19 12:18:09]	DEBUG :	Language file loaded: language/english/imglib_lang.php
[2017-06-19 12:18:09]	DEBUG :	Language file loaded: language/english/error_msg_lang.php
[2017-06-19 12:18:09]	DEBUG :	Language file loaded: language/english/upload_lang.php
[2017-06-19 12:18:09]	SQL :	SELECT id,category,subcategory,type,status FROM feedback WHERE status=1 
[2017-06-19 12:18:09]	SQL :	SELECT feature_id FROM business_feature WHERE bid='1'
[2017-06-19 12:18:09]	SQL :	SELECT feature_id FROM business_feature WHERE bid='1'
[2017-06-19 12:18:09]	SQL :	SELECT feature_id FROM business_feature WHERE bid='1'
[2017-06-19 12:18:09]	SQL :	SELECT id,type FROM 1_leads_status
[2017-06-19 12:18:09]	SQL :	SELECT design FROM business_lead_use WHERE bid='1' LIMIT 0,1
[2017-06-19 12:18:09]	SQL :	SELECT sid,status FROM 1_support_status
[2017-06-19 12:18:09]	SQL :	SELECT feature_id FROM `business_feature` where bid=1
[2017-06-19 12:18:09]	SQL :	SELECT action_align FROM account_settings WHERE bid='1'
[2017-06-19 12:18:09]	SQL :	SELECT dialstatus FROM 1_callhistory WHERE dialstatus = 'CONNECTING'
[2017-06-19 12:18:09]	SQL :	SELECT FOUND_ROWS() as cnt
[2017-06-19 12:18:09]	SQL :	SELECT del_notify FROM account_settings WHERE bid='1'
[2017-06-19 12:18:09]	DEBUG :	Model Class Initialized
[2017-06-19 12:18:09]	DEBUG :	Database Driver Class Initialized
[2017-06-19 12:18:09]	SQL :	SELECT * FROM 1_user_role
							WHERE roleid='1'
							AND bid='1'
[2017-06-19 12:18:09]	SQL :	SELECT m.modid,m.modname,m.moddesc,
							COALESCE(o.opt_add,0) as opt_add,
							COALESCE(o.opt_view,0) as opt_view,
							COALESCE(o.opt_download,0) as opt_download,
							COALESCE(opt_delete,0) as opt_delete 
							FROM module m
							LEFT JOIN (SELECT * FROM 1_role_mod_opt
							WHERE roleid='1' 
							AND bid='1') as o
							ON m.modid=o.modid where m.status=1
[2017-06-19 12:18:09]	SQL :	SELECT a.*,f.fieldname FROM 1_role_access a
								LEFT JOIN systemfields f on a.fieldid=f.fieldid
								WHERE a.roleid='1'
								AND a.bid='1'
								AND a.fieldtype='s'
[2017-06-19 12:18:09]	SQL :	SELECT * FROM 1_role_access
								WHERE roleid='1'
								AND bid='1'
							AND fieldtype='c'
[2017-06-19 12:18:09]	SQL :	SELECT feature_id FROM `business_feature` where bid=1
[2017-06-19 12:18:09]	SQL :	SELECT feature_id FROM `business_feature` where bid=1
[2017-06-19 12:18:09]	SQL :	SELECT * FROM business where pid='1'
[2017-06-19 12:18:09]	DEBUG :	Database Driver Class Initialized
[2017-06-19 12:18:09]	SQL :	SELECT * FROM ( 
				SELECT 's' as type,f.addon,f.fieldid,f.modid,
				f.fieldname,'' as fieldtype,'' as fieldKey,'' as options,
				'' as defaultvalue,f.is_required as is_required,f.is_hidden,COALESCE(l.display_order,0) as display_order,
				l.customlabel,COALESCE(l.show,1) as `show`,COALESCE(l.listing,1) as `listing`
				FROM systemfields f
				LEFT JOIN (
					SELECT * FROM 1_custom_label
					WHERE fieldtype='s'
				) as l
				on (f.fieldid=l.fieldid AND l.modid=f.modid)
				WHERE f.modid='3'  AND f.is_hidden=0 
				UNION
				SELECT 'c' as type,'0',f.fieldid,f.modid,
				f.fieldname,f.fieldtype,f.field_key as fieldKey,f.options,
				f.defaultvalue,f.is_required as is_required,'',COALESCE(l.display_order,0) as display_order,
				l.customlabel,COALESCE(l.show,1) as `show`,COALESCE(l.listing,1) as `listing`
				FROM 1_customfields f
				LEFT JOIN (
					SELECT * FROM 1_custom_label
					WHERE fieldtype='c'
				) as l
				on (f.fieldid=l.fieldid AND l.modid=f.modid)
				WHERE f.modid='3') as t ORDER BY display_order ASC
[2017-06-19 12:18:09]	DEBUG :	Database Driver Class Initialized
[2017-06-19 12:18:09]	SQL :	SELECT g.*,e.empname as eid,sg.groupname as supportgroup,
					  if(g.connectowner=1,'YES','NO') as connectwner,
					  g.eid as epid,if(g.record=1,'YES','NO') as records,
					  if(g.replytocustomer=1,'YES','NO') as replycus,
					  if(g.replytoexecutive=1,'YES','NO') as replyexe,
					  if(g.pincode=1,'YES','NO') as pcode,
					  p.number as prinumber,
					  p.landingnumber as addnumber,(if(g.primary_rule=0,'All',cr.regionname)) as regionname,
					  r.rulename as rules,g.rules as rule
					  FROM 1_groups g 
					  LEFT JOIN group_rules r on g.rules=r.rulesid 
					  LEFT JOIN 1_employee e on g.eid=e.eid 
					  LEFT JOIN 1_support_groups sg on g.supportgrp=sg.gid 
					  LEFT JOIN prinumber p on g.prinumber=p.number
					  LEFT JOIN 1_custom_region cr on g.primary_rule=cr.regionid
					  WHERE g.bid='1' 
					  AND g.gid='14'
[2017-06-19 12:18:09]	SQL :	SELECT * FROM 1_customfieldsvalue 
				WHERE bid='1' 
				AND modid='3'
				AND dataid='14'
[2017-06-19 12:18:09]	SQL :	SELECT s.fieldname
							FROM systemfields s
							LEFT JOIN `features` f on s.addon=f.feature_id
							LEFT JOIN business_packageaddons b on (f.feature_id=b.feature_id AND b.number='200048')
							WHERE s.modid='3' AND s.addon!=0 AND b.number is null
[2017-06-19 12:18:09]	SQL :	SELECT feature_id FROM business_feature WHERE bid='1'
[2017-06-19 12:18:09]	SQL :	SELECT l.region, p.bid,l.number FROM landingnumbers l 
		                        LEFT JOIN prinumbers p ON p.landingnumber=l.number 
		                        WHERE p.bid='1' 
		                        AND p.status = '0' AND p.type = '0' AND l.module_id = '1'
		                         
[2017-06-19 12:18:09]	SQL :	SELECT p.status,p.number,p.landingnumber from prinumbers p
								LEFT JOIN landingnumbers l on l.pri=p.pri
								WHERE p.bid='1' 
								AND p.ntype=0 AND l.module_id='1'
								
[2017-06-19 12:18:10]	SQL :	SELECT * FROM group_rules
[2017-06-19 12:18:10]	SQL :	select eid,empname from 1_employee where status=1 ORDER BY empname
[2017-06-19 12:18:10]	DEBUG :	Database Driver Class Initialized
[2017-06-19 12:18:10]	SQL :	SELECT * FROM 1_user_role
							WHERE roleid='1'
							AND bid='1'
[2017-06-19 12:18:10]	SQL :	SELECT m.modid,m.modname,m.moddesc,
							COALESCE(o.opt_add,0) as opt_add,
							COALESCE(o.opt_view,0) as opt_view,
							COALESCE(o.opt_download,0) as opt_download,
							COALESCE(opt_delete,0) as opt_delete 
							FROM module m
							LEFT JOIN (SELECT * FROM 1_role_mod_opt
							WHERE roleid='1' 
							AND bid='1') as o
							ON m.modid=o.modid where m.status=1
[2017-06-19 12:18:10]	SQL :	SELECT a.*,f.fieldname FROM 1_role_access a
								LEFT JOIN systemfields f on a.fieldid=f.fieldid
								WHERE a.roleid='1'
								AND a.bid='1'
								AND a.fieldtype='s'
[2017-06-19 12:18:10]	SQL :	SELECT * FROM 1_role_access
								WHERE roleid='1'
								AND bid='1'
							AND fieldtype='c'
[2017-06-19 12:18:10]	SQL :	SELECT * FROM 1_employee WHERE status='1' ORDER BY empname
[2017-06-19 12:18:10]	SQL :	SELECT * FROM 1_custom_region
[2017-06-19 12:18:10]	SQL :	SELECT support FROM `prinumbers` WHERE bid='1' 
[2017-06-19 12:18:10]	SQL :	SELECT * FROM 1_support_groups WHERE status=1
[2017-06-19 12:18:10]	SQL :	select eid,empname from 1_employee where status=1 ORDER BY empname
[2017-06-19 12:18:10]	DEBUG :	Database Driver Class Initialized
[2017-06-19 12:18:10]	SQL :	SELECT * FROM 1_user_role
							WHERE roleid='1'
							AND bid='1'
[2017-06-19 12:18:10]	SQL :	SELECT m.modid,m.modname,m.moddesc,
							COALESCE(o.opt_add,0) as opt_add,
							COALESCE(o.opt_view,0) as opt_view,
							COALESCE(o.opt_download,0) as opt_download,
							COALESCE(opt_delete,0) as opt_delete 
							FROM module m
							LEFT JOIN (SELECT * FROM 1_role_mod_opt
							WHERE roleid='1' 
							AND bid='1') as o
							ON m.modid=o.modid where m.status=1
[2017-06-19 12:18:10]	SQL :	SELECT a.*,f.fieldname FROM 1_role_access a
								LEFT JOIN systemfields f on a.fieldid=f.fieldid
								WHERE a.roleid='1'
								AND a.bid='1'
								AND a.fieldtype='s'
[2017-06-19 12:18:10]	SQL :	SELECT * FROM 1_role_access
								WHERE roleid='1'
								AND bid='1'
							AND fieldtype='c'
[2017-06-19 12:18:10]	SQL :	SELECT * FROM 1_employee WHERE status='1' ORDER BY empname
[2017-06-19 12:18:10]	DEBUG :	File loaded: /var/www/html/mcnew/system/application/views/mainheader.php
[2017-06-19 12:18:10]	DEBUG :	Database Driver Class Initialized
[2017-06-19 12:18:10]	SQL :	select a.*,e.empname as reporttoname,b.rolename  as role,if(u.recording=1,'Yes','No') as recording
					  from 1_employee a
					  LEFT JOIN  1_employee e on a.reportto=e.eid
					  LEFT JOIN  user u on a.eid=u.eid
					  ,1_user_role b 
					  where a.roleid=b.roleid AND a.eid='1'
[2017-06-19 12:18:10]	SQL :	SELECT * FROM 1_customfieldsvalue 
				WHERE bid='1' 
				AND modid='2'
				AND dataid='1'
[2017-06-19 12:18:10]	DEBUG :	File loaded: /var/www/html/mcnew/system/application/views/leftsidebar.php
[2017-06-19 12:18:10]	DEBUG :	File loaded: /var/www/html/mcnew/system/application/views/form_view.php
[2017-06-19 12:18:10]	DEBUG :	File loaded: /var/www/html/mcnew/system/application/views/footer.php
[2017-06-19 12:18:10]	DEBUG :	Final output sent to browser
[2017-06-19 12:18:10]	DEBUG :	Total execution time: 0.1087
[2017-06-19 12:18:26]	DEBUG :	Config Class Initialized
[2017-06-19 12:18:26]	DEBUG :	Hooks Class Initialized
[2017-06-19 12:18:26]	DEBUG :	URI Class Initialized
[2017-06-19 12:18:26]	DEBUG :	Router Class Initialized
[2017-06-19 12:18:26]	DEBUG :	Output Class Initialized
[2017-06-19 12:18:26]	DEBUG :	Input Class Initialized
[2017-06-19 12:18:26]	DEBUG :	XSS Filtering completed
[2017-06-19 12:18:26]	DEBUG :	XSS Filtering completed
[2017-06-19 12:18:26]	DEBUG :	XSS Filtering completed
[2017-06-19 12:18:26]	DEBUG :	XSS Filtering completed
[2017-06-19 12:18:26]	DEBUG :	Global POST and COOKIE data sanitized
[2017-06-19 12:18:26]	DEBUG :	Language Class Initialized
[2017-06-19 12:18:26]	DEBUG :	Loader Class Initialized
[2017-06-19 12:18:26]	DEBUG :	Helper loaded: url_helper
[2017-06-19 12:18:26]	DEBUG :	Helper loaded: form_helper
[2017-06-19 12:18:26]	DEBUG :	Helper loaded: html_helper
[2017-06-19 12:18:26]	DEBUG :	Helper loaded: email_helper
[2017-06-19 12:18:26]	DEBUG :	Helper loaded: ckeditor_helper
[2017-06-19 12:18:26]	DEBUG :	Helper loaded: mcube_helper
[2017-06-19 12:18:26]	DEBUG :	Database Driver Class Initialized
[2017-06-19 12:18:26]	ERROR :	Severity: 8192  --> mysql_pconnect(): The mysql extension is deprecated and will be removed in the future: use mysqli or PDO instead /var/www/html/mcnew/system/database/drivers/mysql/mysql_driver.php 88
[2017-06-19 12:18:26]	DEBUG :	Session Class Initialized
[2017-06-19 12:18:26]	DEBUG :	Helper loaded: string_helper
[2017-06-19 12:18:26]	DEBUG :	Encrypt Class Initialized
[2017-06-19 12:18:26]	SQL :	SELECT *
FROM (`call_sessions`)
WHERE `session_id` = '847e9ee4e1543e295a6ddd381996c5e3'
AND `user_agent` = 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36'
[2017-06-19 12:18:26]	DEBUG :	Session routines successfully run
[2017-06-19 12:18:26]	DEBUG :	Table Class Initialized
[2017-06-19 12:18:26]	DEBUG :	Pagination Class Initialized
[2017-06-19 12:18:26]	DEBUG :	Config file loaded: config/paypallib_config.php
[2017-06-19 12:18:26]	DEBUG :	Form Validation Class Initialized
[2017-06-19 12:18:26]	DEBUG :	Email Class Initialized
[2017-06-19 12:18:26]	DEBUG :	Language file loaded: language/english/calendar_lang.php
[2017-06-19 12:18:26]	DEBUG :	Calendar Class Initialized
[2017-06-19 12:18:26]	DEBUG :	Controller Class Initialized
[2017-06-19 12:18:26]	DEBUG :	Model Class Initialized
[2017-06-19 12:18:26]	DEBUG :	Model Class Initialized
[2017-06-19 12:18:26]	DEBUG :	Model Class Initialized
[2017-06-19 12:18:26]	DEBUG :	Model Class Initialized
[2017-06-19 12:18:26]	DEBUG :	Model Class Initialized
[2017-06-19 12:18:26]	DEBUG :	Model Class Initialized
[2017-06-19 12:18:26]	DEBUG :	Model Class Initialized
[2017-06-19 12:18:26]	DEBUG :	Model Class Initialized
[2017-06-19 12:18:26]	DEBUG :	Model Class Initialized
[2017-06-19 12:18:26]	DEBUG :	Model Class Initialized
[2017-06-19 12:18:26]	DEBUG :	Model Class Initialized
[2017-06-19 12:18:26]	DEBUG :	Model Class Initialized
[2017-06-19 12:18:26]	DEBUG :	Plugin loaded: to_pdf_pi
[2017-06-19 12:18:26]	SQL :	SELECT u.uid FROM user u
				LEFT JOIN 1_employee e on (e.bid=u.bid AND e.eid=u.eid)
				WHERE e.status='1' AND e.login='1' AND u.status='1' 
				AND u.bid='1' AND u.eid='1'
[2017-06-19 12:18:26]	SQL :	SELECT *
FROM (`language`)
WHERE `langid` = '1'
[2017-06-19 12:18:26]	DEBUG :	Database Driver Class Initialized
[2017-06-19 12:18:26]	SQL :	SELECT roleid FROM 1_employee
							WHERE eid='1'
							AND bid='1'
[2017-06-19 12:18:26]	SQL :	UPDATE `call_sessions` SET `last_activity` = '1497853678', `user_data` = 'a:20:{s:3:\"uid\";s:1:\"1\";s:3:\"bid\";s:1:\"1\";s:8:\"username\";s:20:\"ashwini.naidu@vmc.in\";s:3:\"eid\";s:1:\"1\";s:3:\"app\";s:1:\"1\";s:7:\"authkey\";s:17:\"1.1.d886b8e8a0615\";s:9:\"recording\";s:1:\"1\";s:10:\"mcubecalls\";s:1:\"1\";s:7:\"mtdebug\";s:1:\"1\";s:8:\"deviceid\";s:36:\"ffffffff-a4d5-960f-ffff-ffff82ba1723\";s:8:\"language\";s:1:\"1\";s:6:\"status\";s:1:\"1\";s:9:\"appstatus\";s:1:\"1\";s:3:\"pid\";s:1:\"0\";s:3:\"act\";s:1:\"0\";s:16:\"registrationdate\";s:19:\"2014-09-08 16:04:19\";s:10:\"dnd_status\";s:1:\"0\";s:9:\"logged_in\";s:1:\"1\";s:6:\"roleid\";s:1:\"1\";s:4:\"cbid\";s:1:\"1\";}' WHERE `session_id` = '847e9ee4e1543e295a6ddd381996c5e3'
[2017-06-19 12:18:26]	DEBUG :	Database Driver Class Initialized
[2017-06-19 12:18:26]	SQL :	SELECT * FROM 1_user_role
							WHERE roleid='1'
							AND bid='1'
[2017-06-19 12:18:26]	SQL :	SELECT m.modid,m.modname,m.moddesc,
							COALESCE(o.opt_add,0) as opt_add,
							COALESCE(o.opt_view,0) as opt_view,
							COALESCE(o.opt_download,0) as opt_download,
							COALESCE(opt_delete,0) as opt_delete 
							FROM module m
							LEFT JOIN (SELECT * FROM 1_role_mod_opt
							WHERE roleid='1' 
							AND bid='1') as o
							ON m.modid=o.modid where m.status=1
[2017-06-19 12:18:26]	SQL :	SELECT a.*,f.fieldname FROM 1_role_access a
								LEFT JOIN systemfields f on a.fieldid=f.fieldid
								WHERE a.roleid='1'
								AND a.bid='1'
								AND a.fieldtype='s'
[2017-06-19 12:18:26]	SQL :	SELECT * FROM 1_role_access
								WHERE roleid='1'
								AND bid='1'
							AND fieldtype='c'
[2017-06-19 12:18:26]	SQL :	SELECT a.selfdisable FROM 1_employee a WHERE a.eid='1'
[2017-06-19 12:18:26]	DEBUG :	Language file loaded: language/english/unit_test_lang.php
[2017-06-19 12:18:26]	DEBUG :	Language file loaded: language/english/db_lang.php
[2017-06-19 12:18:26]	DEBUG :	Language file loaded: language/english/ftp_lang.php
[2017-06-19 12:18:26]	DEBUG :	Language file loaded: language/english/menu_lang.php
[2017-06-19 12:18:26]	DEBUG :	Language file loaded: language/english/db_tables_lang.php
[2017-06-19 12:18:26]	DEBUG :	Language file loaded: language/english/form_level_lang.php
[2017-06-19 12:18:26]	DEBUG :	Language file loaded: language/english/form_validation_lang.php
[2017-06-19 12:18:26]	DEBUG :	Language file loaded: language/english/email_lang.php
[2017-06-19 12:18:26]	DEBUG :	Language file loaded: language/english/number_lang.php
[2017-06-19 12:18:26]	DEBUG :	Language file loaded: language/english/layout_lang.php
[2017-06-19 12:18:26]	DEBUG :	Language file loaded: language/english/validation_lang.php
[2017-06-19 12:18:26]	DEBUG :	Language file loaded: language/english/scaffolding_lang.php
[2017-06-19 12:18:26]	DEBUG :	Language file loaded: language/english/date_lang.php
[2017-06-19 12:18:26]	DEBUG :	Language file loaded: language/english/profiler_lang.php
[2017-06-19 12:18:26]	DEBUG :	Language file loaded: language/english/imglib_lang.php
[2017-06-19 12:18:26]	DEBUG :	Language file loaded: language/english/error_msg_lang.php
[2017-06-19 12:18:26]	DEBUG :	Language file loaded: language/english/upload_lang.php
[2017-06-19 12:18:26]	SQL :	SELECT id,category,subcategory,type,status FROM feedback WHERE status=1 
[2017-06-19 12:18:26]	SQL :	SELECT feature_id FROM business_feature WHERE bid='1'
[2017-06-19 12:18:26]	SQL :	SELECT feature_id FROM business_feature WHERE bid='1'
[2017-06-19 12:18:26]	SQL :	SELECT feature_id FROM business_feature WHERE bid='1'
[2017-06-19 12:18:26]	SQL :	SELECT id,type FROM 1_leads_status
[2017-06-19 12:18:26]	SQL :	SELECT design FROM business_lead_use WHERE bid='1' LIMIT 0,1
[2017-06-19 12:18:26]	SQL :	SELECT sid,status FROM 1_support_status
[2017-06-19 12:18:26]	SQL :	SELECT feature_id FROM `business_feature` where bid=1
[2017-06-19 12:18:26]	SQL :	SELECT action_align FROM account_settings WHERE bid='1'
[2017-06-19 12:18:26]	SQL :	SELECT dialstatus FROM 1_callhistory WHERE dialstatus = 'CONNECTING'
[2017-06-19 12:18:26]	SQL :	SELECT FOUND_ROWS() as cnt
[2017-06-19 12:18:26]	SQL :	SELECT del_notify FROM account_settings WHERE bid='1'
[2017-06-19 12:18:26]	DEBUG :	Model Class Initialized
[2017-06-19 12:18:26]	DEBUG :	Database Driver Class Initialized
[2017-06-19 12:18:26]	SQL :	SELECT * FROM 1_user_role
							WHERE roleid='1'
							AND bid='1'
[2017-06-19 12:18:26]	SQL :	SELECT m.modid,m.modname,m.moddesc,
							COALESCE(o.opt_add,0) as opt_add,
							COALESCE(o.opt_view,0) as opt_view,
							COALESCE(o.opt_download,0) as opt_download,
							COALESCE(opt_delete,0) as opt_delete 
							FROM module m
							LEFT JOIN (SELECT * FROM 1_role_mod_opt
							WHERE roleid='1' 
							AND bid='1') as o
							ON m.modid=o.modid where m.status=1
[2017-06-19 12:18:26]	SQL :	SELECT a.*,f.fieldname FROM 1_role_access a
								LEFT JOIN systemfields f on a.fieldid=f.fieldid
								WHERE a.roleid='1'
								AND a.bid='1'
								AND a.fieldtype='s'
[2017-06-19 12:18:26]	SQL :	SELECT * FROM 1_role_access
								WHERE roleid='1'
								AND bid='1'
							AND fieldtype='c'
[2017-06-19 12:18:26]	SQL :	SELECT feature_id FROM `business_feature` where bid=1
[2017-06-19 12:18:26]	SQL :	SELECT feature_id FROM `business_feature` where bid=1
[2017-06-19 12:18:26]	SQL :	SELECT * FROM business where pid='1'
[2017-06-19 12:18:26]	DEBUG :	Database Driver Class Initialized
[2017-06-19 12:18:26]	SQL :	SELECT * FROM ( 
				SELECT 's' as type,f.addon,f.fieldid,f.modid,
				f.fieldname,'' as fieldtype,'' as fieldKey,'' as options,
				'' as defaultvalue,f.is_required as is_required,f.is_hidden,COALESCE(l.display_order,0) as display_order,
				l.customlabel,COALESCE(l.show,1) as `show`,COALESCE(l.listing,1) as `listing`
				FROM systemfields f
				LEFT JOIN (
					SELECT * FROM 1_custom_label
					WHERE fieldtype='s'
				) as l
				on (f.fieldid=l.fieldid AND l.modid=f.modid)
				WHERE f.modid='3'  AND f.is_hidden=0 
				UNION
				SELECT 'c' as type,'0',f.fieldid,f.modid,
				f.fieldname,f.fieldtype,f.field_key as fieldKey,f.options,
				f.defaultvalue,f.is_required as is_required,'',COALESCE(l.display_order,0) as display_order,
				l.customlabel,COALESCE(l.show,1) as `show`,COALESCE(l.listing,1) as `listing`
				FROM 1_customfields f
				LEFT JOIN (
					SELECT * FROM 1_custom_label
					WHERE fieldtype='c'
				) as l
				on (f.fieldid=l.fieldid AND l.modid=f.modid)
				WHERE f.modid='3') as t ORDER BY display_order ASC
[2017-06-19 12:18:26]	SQL :	SELECT feature_id FROM business_feature WHERE bid='1'
[2017-06-19 12:18:26]	ERROR :	Severity: Notice  --> Undefined index: access_reports /var/www/html/mcnew/system/application/controllers/group.php 111
[2017-06-19 12:18:26]	SQL :	SELECT l.region, p.bid,l.number FROM landingnumbers l 
		                        LEFT JOIN prinumbers p ON p.landingnumber=l.number 
		                        WHERE p.bid='1' 
		                        AND p.status = '0' AND p.type = '0' AND l.module_id = '1'
		                         
[2017-06-19 12:18:26]	SQL :	SELECT p.status,p.number,p.landingnumber from prinumbers p
								LEFT JOIN landingnumbers l on l.pri=p.pri
								WHERE p.bid='1' 
								AND p.ntype=0 AND l.module_id='1'
								
[2017-06-19 12:18:26]	SQL :	SELECT * FROM group_rules
[2017-06-19 12:18:26]	SQL :	select eid,empname from 1_employee where status=1 ORDER BY empname
[2017-06-19 12:18:26]	DEBUG :	Database Driver Class Initialized
[2017-06-19 12:18:26]	SQL :	SELECT * FROM 1_user_role
							WHERE roleid='1'
							AND bid='1'
[2017-06-19 12:18:26]	SQL :	SELECT m.modid,m.modname,m.moddesc,
							COALESCE(o.opt_add,0) as opt_add,
							COALESCE(o.opt_view,0) as opt_view,
							COALESCE(o.opt_download,0) as opt_download,
							COALESCE(opt_delete,0) as opt_delete 
							FROM module m
							LEFT JOIN (SELECT * FROM 1_role_mod_opt
							WHERE roleid='1' 
							AND bid='1') as o
							ON m.modid=o.modid where m.status=1
[2017-06-19 12:18:26]	SQL :	SELECT a.*,f.fieldname FROM 1_role_access a
								LEFT JOIN systemfields f on a.fieldid=f.fieldid
								WHERE a.roleid='1'
								AND a.bid='1'
								AND a.fieldtype='s'
[2017-06-19 12:18:26]	SQL :	SELECT * FROM 1_role_access
								WHERE roleid='1'
								AND bid='1'
							AND fieldtype='c'
[2017-06-19 12:18:26]	SQL :	SELECT * FROM 1_employee WHERE status='1' ORDER BY empname
[2017-06-19 12:18:26]	SQL :	SELECT * FROM 1_custom_region
[2017-06-19 12:18:26]	SQL :	SELECT support FROM `prinumbers` WHERE bid='1' 
[2017-06-19 12:18:26]	SQL :	SELECT * FROM 1_support_groups WHERE status=1
[2017-06-19 12:18:26]	SQL :	select eid,empname from 1_employee where status=1 ORDER BY empname
[2017-06-19 12:18:26]	DEBUG :	Database Driver Class Initialized
[2017-06-19 12:18:26]	SQL :	SELECT * FROM 1_user_role
							WHERE roleid='1'
							AND bid='1'
[2017-06-19 12:18:26]	SQL :	SELECT m.modid,m.modname,m.moddesc,
							COALESCE(o.opt_add,0) as opt_add,
							COALESCE(o.opt_view,0) as opt_view,
							COALESCE(o.opt_download,0) as opt_download,
							COALESCE(opt_delete,0) as opt_delete 
							FROM module m
							LEFT JOIN (SELECT * FROM 1_role_mod_opt
							WHERE roleid='1' 
							AND bid='1') as o
							ON m.modid=o.modid where m.status=1
[2017-06-19 12:18:26]	SQL :	SELECT a.*,f.fieldname FROM 1_role_access a
								LEFT JOIN systemfields f on a.fieldid=f.fieldid
								WHERE a.roleid='1'
								AND a.bid='1'
								AND a.fieldtype='s'
[2017-06-19 12:18:26]	SQL :	SELECT * FROM 1_role_access
								WHERE roleid='1'
								AND bid='1'
							AND fieldtype='c'
[2017-06-19 12:18:26]	SQL :	SELECT * FROM 1_employee WHERE status='1' ORDER BY empname
[2017-06-19 12:18:26]	DEBUG :	File loaded: /var/www/html/mcnew/system/application/views/mainheader.php
[2017-06-19 12:18:26]	DEBUG :	Database Driver Class Initialized
[2017-06-19 12:18:26]	SQL :	select a.*,e.empname as reporttoname,b.rolename  as role,if(u.recording=1,'Yes','No') as recording
					  from 1_employee a
					  LEFT JOIN  1_employee e on a.reportto=e.eid
					  LEFT JOIN  user u on a.eid=u.eid
					  ,1_user_role b 
					  where a.roleid=b.roleid AND a.eid='1'
[2017-06-19 12:18:26]	SQL :	SELECT * FROM 1_customfieldsvalue 
				WHERE bid='1' 
				AND modid='2'
				AND dataid='1'
[2017-06-19 12:18:26]	DEBUG :	File loaded: /var/www/html/mcnew/system/application/views/leftsidebar.php
[2017-06-19 12:18:26]	DEBUG :	File loaded: /var/www/html/mcnew/system/application/views/form_view.php
[2017-06-19 12:18:26]	DEBUG :	File loaded: /var/www/html/mcnew/system/application/views/footer.php
[2017-06-19 12:18:26]	DEBUG :	Final output sent to browser
[2017-06-19 12:18:26]	DEBUG :	Total execution time: 0.1288
[2017-06-19 12:18:35]	DEBUG :	Config Class Initialized
[2017-06-19 12:18:35]	DEBUG :	Hooks Class Initialized
[2017-06-19 12:18:35]	DEBUG :	URI Class Initialized
[2017-06-19 12:18:35]	DEBUG :	Router Class Initialized
[2017-06-19 12:18:35]	DEBUG :	Output Class Initialized
[2017-06-19 12:18:35]	DEBUG :	Input Class Initialized
[2017-06-19 12:18:35]	DEBUG :	XSS Filtering completed
[2017-06-19 12:18:35]	DEBUG :	XSS Filtering completed
[2017-06-19 12:18:35]	DEBUG :	XSS Filtering completed
[2017-06-19 12:18:35]	DEBUG :	XSS Filtering completed
[2017-06-19 12:18:35]	DEBUG :	Global POST and COOKIE data sanitized
[2017-06-19 12:18:35]	DEBUG :	Language Class Initialized
[2017-06-19 12:18:35]	DEBUG :	Loader Class Initialized
[2017-06-19 12:18:35]	DEBUG :	Helper loaded: url_helper
[2017-06-19 12:18:35]	DEBUG :	Helper loaded: form_helper
[2017-06-19 12:18:35]	DEBUG :	Helper loaded: html_helper
[2017-06-19 12:18:35]	DEBUG :	Helper loaded: email_helper
[2017-06-19 12:18:35]	DEBUG :	Helper loaded: ckeditor_helper
[2017-06-19 12:18:35]	DEBUG :	Helper loaded: mcube_helper
[2017-06-19 12:18:35]	DEBUG :	Database Driver Class Initialized
[2017-06-19 12:18:35]	ERROR :	Severity: 8192  --> mysql_pconnect(): The mysql extension is deprecated and will be removed in the future: use mysqli or PDO instead /var/www/html/mcnew/system/database/drivers/mysql/mysql_driver.php 88
[2017-06-19 12:18:35]	DEBUG :	Session Class Initialized
[2017-06-19 12:18:35]	DEBUG :	Helper loaded: string_helper
[2017-06-19 12:18:35]	DEBUG :	Encrypt Class Initialized
[2017-06-19 12:18:35]	SQL :	SELECT *
FROM (`call_sessions`)
WHERE `session_id` = '847e9ee4e1543e295a6ddd381996c5e3'
AND `user_agent` = 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36'
[2017-06-19 12:18:35]	DEBUG :	Session routines successfully run
[2017-06-19 12:18:35]	DEBUG :	Table Class Initialized
[2017-06-19 12:18:35]	DEBUG :	Pagination Class Initialized
[2017-06-19 12:18:35]	DEBUG :	Config file loaded: config/paypallib_config.php
[2017-06-19 12:18:35]	DEBUG :	Form Validation Class Initialized
[2017-06-19 12:18:35]	DEBUG :	Email Class Initialized
[2017-06-19 12:18:35]	DEBUG :	Language file loaded: language/english/calendar_lang.php
[2017-06-19 12:18:35]	DEBUG :	Calendar Class Initialized
[2017-06-19 12:18:35]	DEBUG :	Controller Class Initialized
[2017-06-19 12:18:35]	DEBUG :	Model Class Initialized
[2017-06-19 12:18:35]	DEBUG :	Model Class Initialized
[2017-06-19 12:18:35]	DEBUG :	Model Class Initialized
[2017-06-19 12:18:35]	DEBUG :	Model Class Initialized
[2017-06-19 12:18:35]	DEBUG :	Model Class Initialized
[2017-06-19 12:18:35]	DEBUG :	Model Class Initialized
[2017-06-19 12:18:35]	DEBUG :	Model Class Initialized
[2017-06-19 12:18:35]	DEBUG :	Model Class Initialized
[2017-06-19 12:18:35]	DEBUG :	Model Class Initialized
[2017-06-19 12:18:35]	DEBUG :	Model Class Initialized
[2017-06-19 12:18:35]	DEBUG :	Model Class Initialized
[2017-06-19 12:18:35]	DEBUG :	Model Class Initialized
[2017-06-19 12:18:35]	DEBUG :	Plugin loaded: to_pdf_pi
[2017-06-19 12:18:35]	SQL :	SELECT u.uid FROM user u
				LEFT JOIN 1_employee e on (e.bid=u.bid AND e.eid=u.eid)
				WHERE e.status='1' AND e.login='1' AND u.status='1' 
				AND u.bid='1' AND u.eid='1'
[2017-06-19 12:18:35]	SQL :	SELECT *
FROM (`language`)
WHERE `langid` = '1'
[2017-06-19 12:18:35]	DEBUG :	Database Driver Class Initialized
[2017-06-19 12:18:35]	SQL :	SELECT roleid FROM 1_employee
							WHERE eid='1'
							AND bid='1'
[2017-06-19 12:18:35]	SQL :	UPDATE `call_sessions` SET `last_activity` = '1497853678', `user_data` = 'a:20:{s:3:\"uid\";s:1:\"1\";s:3:\"bid\";s:1:\"1\";s:8:\"username\";s:20:\"ashwini.naidu@vmc.in\";s:3:\"eid\";s:1:\"1\";s:3:\"app\";s:1:\"1\";s:7:\"authkey\";s:17:\"1.1.d886b8e8a0615\";s:9:\"recording\";s:1:\"1\";s:10:\"mcubecalls\";s:1:\"1\";s:7:\"mtdebug\";s:1:\"1\";s:8:\"deviceid\";s:36:\"ffffffff-a4d5-960f-ffff-ffff82ba1723\";s:8:\"language\";s:1:\"1\";s:6:\"status\";s:1:\"1\";s:9:\"appstatus\";s:1:\"1\";s:3:\"pid\";s:1:\"0\";s:3:\"act\";s:1:\"0\";s:16:\"registrationdate\";s:19:\"2014-09-08 16:04:19\";s:10:\"dnd_status\";s:1:\"0\";s:9:\"logged_in\";s:1:\"1\";s:6:\"roleid\";s:1:\"1\";s:4:\"cbid\";s:1:\"1\";}' WHERE `session_id` = '847e9ee4e1543e295a6ddd381996c5e3'
[2017-06-19 12:18:35]	DEBUG :	Database Driver Class Initialized
[2017-06-19 12:18:35]	SQL :	SELECT * FROM 1_user_role
							WHERE roleid='1'
							AND bid='1'
[2017-06-19 12:18:35]	SQL :	SELECT m.modid,m.modname,m.moddesc,
							COALESCE(o.opt_add,0) as opt_add,
							COALESCE(o.opt_view,0) as opt_view,
							COALESCE(o.opt_download,0) as opt_download,
							COALESCE(opt_delete,0) as opt_delete 
							FROM module m
							LEFT JOIN (SELECT * FROM 1_role_mod_opt
							WHERE roleid='1' 
							AND bid='1') as o
							ON m.modid=o.modid where m.status=1
[2017-06-19 12:18:35]	SQL :	SELECT a.*,f.fieldname FROM 1_role_access a
								LEFT JOIN systemfields f on a.fieldid=f.fieldid
								WHERE a.roleid='1'
								AND a.bid='1'
								AND a.fieldtype='s'
[2017-06-19 12:18:35]	SQL :	SELECT * FROM 1_role_access
								WHERE roleid='1'
								AND bid='1'
							AND fieldtype='c'
[2017-06-19 12:18:35]	SQL :	SELECT a.selfdisable FROM 1_employee a WHERE a.eid='1'
[2017-06-19 12:18:35]	DEBUG :	Language file loaded: language/english/unit_test_lang.php
[2017-06-19 12:18:35]	DEBUG :	Language file loaded: language/english/db_lang.php
[2017-06-19 12:18:35]	DEBUG :	Language file loaded: language/english/ftp_lang.php
[2017-06-19 12:18:35]	DEBUG :	Language file loaded: language/english/menu_lang.php
[2017-06-19 12:18:35]	DEBUG :	Language file loaded: language/english/db_tables_lang.php
[2017-06-19 12:18:35]	DEBUG :	Language file loaded: language/english/form_level_lang.php
[2017-06-19 12:18:35]	DEBUG :	Language file loaded: language/english/form_validation_lang.php
[2017-06-19 12:18:35]	DEBUG :	Language file loaded: language/english/email_lang.php
[2017-06-19 12:18:35]	DEBUG :	Language file loaded: language/english/number_lang.php
[2017-06-19 12:18:35]	DEBUG :	Language file loaded: language/english/layout_lang.php
[2017-06-19 12:18:35]	DEBUG :	Language file loaded: language/english/validation_lang.php
[2017-06-19 12:18:35]	DEBUG :	Language file loaded: language/english/scaffolding_lang.php
[2017-06-19 12:18:35]	DEBUG :	Language file loaded: language/english/date_lang.php
[2017-06-19 12:18:35]	DEBUG :	Language file loaded: language/english/profiler_lang.php
[2017-06-19 12:18:35]	DEBUG :	Language file loaded: language/english/imglib_lang.php
[2017-06-19 12:18:35]	DEBUG :	Language file loaded: language/english/error_msg_lang.php
[2017-06-19 12:18:35]	DEBUG :	Language file loaded: language/english/upload_lang.php
[2017-06-19 12:18:35]	SQL :	SELECT id,category,subcategory,type,status FROM feedback WHERE status=1 
[2017-06-19 12:18:35]	SQL :	SELECT feature_id FROM business_feature WHERE bid='1'
[2017-06-19 12:18:35]	SQL :	SELECT feature_id FROM business_feature WHERE bid='1'
[2017-06-19 12:18:35]	SQL :	SELECT feature_id FROM business_feature WHERE bid='1'
[2017-06-19 12:18:35]	SQL :	SELECT id,type FROM 1_leads_status
[2017-06-19 12:18:35]	SQL :	SELECT design FROM business_lead_use WHERE bid='1' LIMIT 0,1
[2017-06-19 12:18:35]	SQL :	SELECT sid,status FROM 1_support_status
[2017-06-19 12:18:35]	SQL :	SELECT feature_id FROM `business_feature` where bid=1
[2017-06-19 12:18:35]	SQL :	SELECT action_align FROM account_settings WHERE bid='1'
[2017-06-19 12:18:35]	SQL :	SELECT dialstatus FROM 1_callhistory WHERE dialstatus = 'CONNECTING'
[2017-06-19 12:18:35]	SQL :	SELECT FOUND_ROWS() as cnt
[2017-06-19 12:18:35]	SQL :	SELECT del_notify FROM account_settings WHERE bid='1'
[2017-06-19 12:18:35]	DEBUG :	Model Class Initialized
[2017-06-19 12:18:35]	DEBUG :	Database Driver Class Initialized
[2017-06-19 12:18:35]	SQL :	SELECT * FROM 1_user_role
							WHERE roleid='1'
							AND bid='1'
[2017-06-19 12:18:35]	SQL :	SELECT m.modid,m.modname,m.moddesc,
							COALESCE(o.opt_add,0) as opt_add,
							COALESCE(o.opt_view,0) as opt_view,
							COALESCE(o.opt_download,0) as opt_download,
							COALESCE(opt_delete,0) as opt_delete 
							FROM module m
							LEFT JOIN (SELECT * FROM 1_role_mod_opt
							WHERE roleid='1' 
							AND bid='1') as o
							ON m.modid=o.modid where m.status=1
[2017-06-19 12:18:35]	SQL :	SELECT a.*,f.fieldname FROM 1_role_access a
								LEFT JOIN systemfields f on a.fieldid=f.fieldid
								WHERE a.roleid='1'
								AND a.bid='1'
								AND a.fieldtype='s'
[2017-06-19 12:18:35]	SQL :	SELECT * FROM 1_role_access
								WHERE roleid='1'
								AND bid='1'
							AND fieldtype='c'
[2017-06-19 12:18:35]	SQL :	SELECT feature_id FROM `business_feature` where bid=1
[2017-06-19 12:18:35]	SQL :	SELECT * FROM business where pid='1'
[2017-06-19 12:18:35]	SQL :	UPDATE `call_sessions` SET `last_activity` = '1497853678', `user_data` = 'a:20:{s:3:\"uid\";s:1:\"1\";s:3:\"bid\";s:1:\"1\";s:8:\"username\";s:20:\"ashwini.naidu@vmc.in\";s:3:\"eid\";s:1:\"1\";s:3:\"app\";s:1:\"1\";s:7:\"authkey\";s:17:\"1.1.d886b8e8a0615\";s:9:\"recording\";s:1:\"1\";s:10:\"mcubecalls\";s:1:\"1\";s:7:\"mtdebug\";s:1:\"1\";s:8:\"deviceid\";s:36:\"ffffffff-a4d5-960f-ffff-ffff82ba1723\";s:8:\"language\";s:1:\"1\";s:6:\"status\";s:1:\"1\";s:9:\"appstatus\";s:1:\"1\";s:3:\"pid\";s:1:\"0\";s:3:\"act\";s:1:\"0\";s:16:\"registrationdate\";s:19:\"2014-09-08 16:04:19\";s:10:\"dnd_status\";s:1:\"0\";s:9:\"logged_in\";s:1:\"1\";s:6:\"roleid\";s:1:\"1\";s:4:\"cbid\";s:1:\"1\";}' WHERE `session_id` = '847e9ee4e1543e295a6ddd381996c5e3'
[2017-06-19 12:18:35]	DEBUG :	Database Driver Class Initialized
[2017-06-19 12:18:35]	SQL :	SELECT * FROM 1_user_role
							WHERE roleid='1'
							AND bid='1'
[2017-06-19 12:18:35]	SQL :	SELECT m.modid,m.modname,m.moddesc,
							COALESCE(o.opt_add,0) as opt_add,
							COALESCE(o.opt_view,0) as opt_view,
							COALESCE(o.opt_download,0) as opt_download,
							COALESCE(opt_delete,0) as opt_delete 
							FROM module m
							LEFT JOIN (SELECT * FROM 1_role_mod_opt
							WHERE roleid='1' 
							AND bid='1') as o
							ON m.modid=o.modid where m.status=1
[2017-06-19 12:18:35]	SQL :	SELECT a.*,f.fieldname FROM 1_role_access a
								LEFT JOIN systemfields f on a.fieldid=f.fieldid
								WHERE a.roleid='1'
								AND a.bid='1'
								AND a.fieldtype='s'
[2017-06-19 12:18:35]	SQL :	SELECT * FROM 1_role_access
								WHERE roleid='1'
								AND bid='1'
							AND fieldtype='c'
[2017-06-19 12:18:35]	SQL :	SELECT SQL_CALC_FOUND_ROWS g.*
				  FROM 1_groups g 
				  LEFT JOIN group_rules r on g.rules=r.rulesid 
				  LEFT JOIN 1_employee e on g.eid=e.eid
				  LEFT JOIN prinumbers p on (g.prinumber=p.number AND p.bid='1')
				  WHERE g.bid='1' 
				  and g.status!=0  limit 0,20
[2017-06-19 12:18:35]	SQL :	SELECT FOUND_ROWS() as cnt
[2017-06-19 12:18:35]	DEBUG :	Database Driver Class Initialized
[2017-06-19 12:18:35]	SQL :	SELECT * FROM ( 
				SELECT 's' as type,f.addon,f.fieldid,f.modid,
				f.fieldname,'' as fieldtype,'' as fieldKey,'' as options,
				'' as defaultvalue,f.is_required as is_required,f.is_hidden,COALESCE(l.display_order,0) as display_order,
				l.customlabel,COALESCE(l.show,1) as `show`,COALESCE(l.listing,1) as `listing`
				FROM systemfields f
				LEFT JOIN (
					SELECT * FROM 1_custom_label
					WHERE fieldtype='s'
				) as l
				on (f.fieldid=l.fieldid AND l.modid=f.modid)
				WHERE f.modid='3'  AND f.is_hidden=0   AND f.addon=0 
				UNION
				SELECT 'c' as type,'0',f.fieldid,f.modid,
				f.fieldname,f.fieldtype,f.field_key as fieldKey,f.options,
				f.defaultvalue,f.is_required as is_required,'',COALESCE(l.display_order,0) as display_order,
				l.customlabel,COALESCE(l.show,1) as `show`,COALESCE(l.listing,1) as `listing`
				FROM 1_customfields f
				LEFT JOIN (
					SELECT * FROM 1_custom_label
					WHERE fieldtype='c'
				) as l
				on (f.fieldid=l.fieldid AND l.modid=f.modid)
				WHERE f.modid='3') as t ORDER BY display_order ASC
[2017-06-19 12:18:35]	DEBUG :	Database Driver Class Initialized
[2017-06-19 12:18:35]	SQL :	SELECT g.*,e.empname as eid,sg.groupname as supportgroup,
					  if(g.connectowner=1,'YES','NO') as connectwner,
					  g.eid as epid,if(g.record=1,'YES','NO') as records,
					  if(g.replytocustomer=1,'YES','NO') as replycus,
					  if(g.replytoexecutive=1,'YES','NO') as replyexe,
					  if(g.pincode=1,'YES','NO') as pcode,
					  p.number as prinumber,
					  p.landingnumber as addnumber,(if(g.primary_rule=0,'All',cr.regionname)) as regionname,
					  r.rulename as rules,g.rules as rule
					  FROM 1_groups g 
					  LEFT JOIN group_rules r on g.rules=r.rulesid 
					  LEFT JOIN 1_employee e on g.eid=e.eid 
					  LEFT JOIN 1_support_groups sg on g.supportgrp=sg.gid 
					  LEFT JOIN prinumber p on g.prinumber=p.number
					  LEFT JOIN 1_custom_region cr on g.primary_rule=cr.regionid
					  WHERE g.bid='1' 
					  AND g.gid='14'
[2017-06-19 12:18:35]	SQL :	SELECT * FROM 1_customfieldsvalue 
				WHERE bid='1' 
				AND modid='3'
				AND dataid='14'
[2017-06-19 12:18:35]	SQL :	SELECT COALESCE(COUNT(callid), 0) AS cnt
							FROM 1_callhistory h 
							WHERE (h.`starttime` >= DATE_SUB(CURDATE(), INTERVAL 6 DAY)) AND h.gid = 14 GROUP BY DAY(h.starttime)
[2017-06-19 12:18:35]	DEBUG :	Database Driver Class Initialized
[2017-06-19 12:18:35]	SQL :	SELECT g.*,e.empname as eid,sg.groupname as supportgroup,
					  if(g.connectowner=1,'YES','NO') as connectwner,
					  g.eid as epid,if(g.record=1,'YES','NO') as records,
					  if(g.replytocustomer=1,'YES','NO') as replycus,
					  if(g.replytoexecutive=1,'YES','NO') as replyexe,
					  if(g.pincode=1,'YES','NO') as pcode,
					  p.number as prinumber,
					  p.landingnumber as addnumber,(if(g.primary_rule=0,'All',cr.regionname)) as regionname,
					  r.rulename as rules,g.rules as rule
					  FROM 1_groups g 
					  LEFT JOIN group_rules r on g.rules=r.rulesid 
					  LEFT JOIN 1_employee e on g.eid=e.eid 
					  LEFT JOIN 1_support_groups sg on g.supportgrp=sg.gid 
					  LEFT JOIN prinumber p on g.prinumber=p.number
					  LEFT JOIN 1_custom_region cr on g.primary_rule=cr.regionid
					  WHERE g.bid='1' 
					  AND g.gid='15'
[2017-06-19 12:18:35]	SQL :	SELECT * FROM 1_customfieldsvalue 
				WHERE bid='1' 
				AND modid='3'
				AND dataid='15'
[2017-06-19 12:18:35]	SQL :	SELECT COALESCE(COUNT(callid), 0) AS cnt
							FROM 1_callhistory h 
							WHERE (h.`starttime` >= DATE_SUB(CURDATE(), INTERVAL 6 DAY)) AND h.gid = 15 GROUP BY DAY(h.starttime)
[2017-06-19 12:18:35]	SQL :	SELECT GROUP_CONCAT(empname SEPARATOR ',') as empname FROM 1_employee WHERE eid IN(58 )
[2017-06-19 12:18:35]	DEBUG :	Database Driver Class Initialized
[2017-06-19 12:18:35]	SQL :	SELECT g.*,e.empname as eid,sg.groupname as supportgroup,
					  if(g.connectowner=1,'YES','NO') as connectwner,
					  g.eid as epid,if(g.record=1,'YES','NO') as records,
					  if(g.replytocustomer=1,'YES','NO') as replycus,
					  if(g.replytoexecutive=1,'YES','NO') as replyexe,
					  if(g.pincode=1,'YES','NO') as pcode,
					  p.number as prinumber,
					  p.landingnumber as addnumber,(if(g.primary_rule=0,'All',cr.regionname)) as regionname,
					  r.rulename as rules,g.rules as rule
					  FROM 1_groups g 
					  LEFT JOIN group_rules r on g.rules=r.rulesid 
					  LEFT JOIN 1_employee e on g.eid=e.eid 
					  LEFT JOIN 1_support_groups sg on g.supportgrp=sg.gid 
					  LEFT JOIN prinumber p on g.prinumber=p.number
					  LEFT JOIN 1_custom_region cr on g.primary_rule=cr.regionid
					  WHERE g.bid='1' 
					  AND g.gid='16'
[2017-06-19 12:18:35]	SQL :	SELECT * FROM 1_customfieldsvalue 
				WHERE bid='1' 
				AND modid='3'
				AND dataid='16'
[2017-06-19 12:18:35]	SQL :	SELECT COALESCE(COUNT(callid), 0) AS cnt
							FROM 1_callhistory h 
							WHERE (h.`starttime` >= DATE_SUB(CURDATE(), INTERVAL 6 DAY)) AND h.gid = 16 GROUP BY DAY(h.starttime)
[2017-06-19 12:18:35]	DEBUG :	Database Driver Class Initialized
[2017-06-19 12:18:35]	SQL :	SELECT g.*,e.empname as eid,sg.groupname as supportgroup,
					  if(g.connectowner=1,'YES','NO') as connectwner,
					  g.eid as epid,if(g.record=1,'YES','NO') as records,
					  if(g.replytocustomer=1,'YES','NO') as replycus,
					  if(g.replytoexecutive=1,'YES','NO') as replyexe,
					  if(g.pincode=1,'YES','NO') as pcode,
					  p.number as prinumber,
					  p.landingnumber as addnumber,(if(g.primary_rule=0,'All',cr.regionname)) as regionname,
					  r.rulename as rules,g.rules as rule
					  FROM 1_groups g 
					  LEFT JOIN group_rules r on g.rules=r.rulesid 
					  LEFT JOIN 1_employee e on g.eid=e.eid 
					  LEFT JOIN 1_support_groups sg on g.supportgrp=sg.gid 
					  LEFT JOIN prinumber p on g.prinumber=p.number
					  LEFT JOIN 1_custom_region cr on g.primary_rule=cr.regionid
					  WHERE g.bid='1' 
					  AND g.gid='17'
[2017-06-19 12:18:35]	SQL :	SELECT * FROM 1_customfieldsvalue 
				WHERE bid='1' 
				AND modid='3'
				AND dataid='17'
[2017-06-19 12:18:35]	SQL :	SELECT COALESCE(COUNT(callid), 0) AS cnt
							FROM 1_callhistory h 
							WHERE (h.`starttime` >= DATE_SUB(CURDATE(), INTERVAL 6 DAY)) AND h.gid = 17 GROUP BY DAY(h.starttime)
[2017-06-19 12:18:35]	DEBUG :	Database Driver Class Initialized
[2017-06-19 12:18:35]	SQL :	SELECT * FROM ( 
				SELECT 's' as type,f.addon,f.fieldid,f.modid,
				f.fieldname,'' as fieldtype,'' as fieldKey,'' as options,
				'' as defaultvalue,f.is_required as is_required,f.is_hidden,COALESCE(l.display_order,0) as display_order,
				l.customlabel,COALESCE(l.show,1) as `show`,COALESCE(l.listing,1) as `listing`
				FROM systemfields f
				LEFT JOIN (
					SELECT * FROM 1_custom_label
					WHERE fieldtype='s'
				) as l
				on (f.fieldid=l.fieldid AND l.modid=f.modid)
				WHERE f.modid='3'  AND f.is_hidden=0   AND f.addon=0 
				UNION
				SELECT 'c' as type,'0',f.fieldid,f.modid,
				f.fieldname,f.fieldtype,f.field_key as fieldKey,f.options,
				f.defaultvalue,f.is_required as is_required,'',COALESCE(l.display_order,0) as display_order,
				l.customlabel,COALESCE(l.show,1) as `show`,COALESCE(l.listing,1) as `listing`
				FROM 1_customfields f
				LEFT JOIN (
					SELECT * FROM 1_custom_label
					WHERE fieldtype='c'
				) as l
				on (f.fieldid=l.fieldid AND l.modid=f.modid)
				WHERE f.modid='3') as t ORDER BY display_order ASC
[2017-06-19 12:18:35]	SQL :	select eid,empname from 1_employee where status=1 ORDER BY empname
[2017-06-19 12:18:35]	DEBUG :	Database Driver Class Initialized
[2017-06-19 12:18:35]	SQL :	SELECT * FROM 1_user_role
							WHERE roleid='1'
							AND bid='1'
[2017-06-19 12:18:35]	SQL :	SELECT m.modid,m.modname,m.moddesc,
							COALESCE(o.opt_add,0) as opt_add,
							COALESCE(o.opt_view,0) as opt_view,
							COALESCE(o.opt_download,0) as opt_download,
							COALESCE(opt_delete,0) as opt_delete 
							FROM module m
							LEFT JOIN (SELECT * FROM 1_role_mod_opt
							WHERE roleid='1' 
							AND bid='1') as o
							ON m.modid=o.modid where m.status=1
[2017-06-19 12:18:35]	SQL :	SELECT a.*,f.fieldname FROM 1_role_access a
								LEFT JOIN systemfields f on a.fieldid=f.fieldid
								WHERE a.roleid='1'
								AND a.bid='1'
								AND a.fieldtype='s'
[2017-06-19 12:18:35]	SQL :	SELECT * FROM 1_role_access
								WHERE roleid='1'
								AND bid='1'
							AND fieldtype='c'
[2017-06-19 12:18:35]	SQL :	SELECT * FROM 1_employee WHERE status='1' ORDER BY empname
[2017-06-19 12:18:35]	DEBUG :	File loaded: /var/www/html/mcnew/system/application/views/mainheader.php
[2017-06-19 12:18:35]	DEBUG :	Database Driver Class Initialized
[2017-06-19 12:18:35]	SQL :	select a.*,e.empname as reporttoname,b.rolename  as role,if(u.recording=1,'Yes','No') as recording
					  from 1_employee a
					  LEFT JOIN  1_employee e on a.reportto=e.eid
					  LEFT JOIN  user u on a.eid=u.eid
					  ,1_user_role b 
					  where a.roleid=b.roleid AND a.eid='1'
[2017-06-19 12:18:35]	SQL :	SELECT * FROM 1_customfieldsvalue 
				WHERE bid='1' 
				AND modid='2'
				AND dataid='1'
[2017-06-19 12:18:35]	DEBUG :	File loaded: /var/www/html/mcnew/system/application/views/leftsidebar.php
[2017-06-19 12:18:35]	DEBUG :	File loaded: /var/www/html/mcnew/system/application/views/list_view.php
[2017-06-19 12:18:35]	DEBUG :	File loaded: /var/www/html/mcnew/system/application/views/footer.php
[2017-06-19 12:18:35]	DEBUG :	Final output sent to browser
[2017-06-19 12:18:35]	DEBUG :	Total execution time: 0.2419
[2017-06-19 12:21:46]	DEBUG :	Config Class Initialized
[2017-06-19 12:21:46]	DEBUG :	Hooks Class Initialized
[2017-06-19 12:21:46]	DEBUG :	URI Class Initialized
[2017-06-19 12:21:46]	DEBUG :	Router Class Initialized
[2017-06-19 12:21:46]	DEBUG :	Output Class Initialized
[2017-06-19 12:21:46]	DEBUG :	Input Class Initialized
[2017-06-19 12:21:46]	DEBUG :	XSS Filtering completed
[2017-06-19 12:21:46]	DEBUG :	XSS Filtering completed
[2017-06-19 12:21:46]	DEBUG :	XSS Filtering completed
[2017-06-19 12:21:46]	DEBUG :	XSS Filtering completed
[2017-06-19 12:21:46]	DEBUG :	Global POST and COOKIE data sanitized
[2017-06-19 12:21:46]	DEBUG :	Language Class Initialized
[2017-06-19 12:21:46]	DEBUG :	Loader Class Initialized
[2017-06-19 12:21:46]	DEBUG :	Helper loaded: url_helper
[2017-06-19 12:21:46]	DEBUG :	Helper loaded: form_helper
[2017-06-19 12:21:46]	DEBUG :	Helper loaded: html_helper
[2017-06-19 12:21:46]	DEBUG :	Helper loaded: email_helper
[2017-06-19 12:21:46]	DEBUG :	Helper loaded: ckeditor_helper
[2017-06-19 12:21:46]	DEBUG :	Helper loaded: mcube_helper
[2017-06-19 12:21:46]	DEBUG :	Database Driver Class Initialized
[2017-06-19 12:21:46]	ERROR :	Severity: 8192  --> mysql_pconnect(): The mysql extension is deprecated and will be removed in the future: use mysqli or PDO instead /var/www/html/mcnew/system/database/drivers/mysql/mysql_driver.php 88
[2017-06-19 12:21:46]	DEBUG :	Session Class Initialized
[2017-06-19 12:21:46]	DEBUG :	Helper loaded: string_helper
[2017-06-19 12:21:46]	DEBUG :	Encrypt Class Initialized
[2017-06-19 12:21:46]	SQL :	SELECT *
FROM (`call_sessions`)
WHERE `session_id` = '847e9ee4e1543e295a6ddd381996c5e3'
AND `user_agent` = 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36'
[2017-06-19 12:21:46]	DEBUG :	Session routines successfully run
[2017-06-19 12:21:46]	DEBUG :	Table Class Initialized
[2017-06-19 12:21:46]	DEBUG :	Pagination Class Initialized
[2017-06-19 12:21:46]	DEBUG :	Config file loaded: config/paypallib_config.php
[2017-06-19 12:21:46]	DEBUG :	Form Validation Class Initialized
[2017-06-19 12:21:46]	DEBUG :	Email Class Initialized
[2017-06-19 12:21:46]	DEBUG :	Language file loaded: language/english/calendar_lang.php
[2017-06-19 12:21:46]	DEBUG :	Calendar Class Initialized
[2017-06-19 12:21:46]	DEBUG :	Controller Class Initialized
[2017-06-19 12:21:46]	DEBUG :	Model Class Initialized
[2017-06-19 12:21:46]	DEBUG :	Model Class Initialized
[2017-06-19 12:21:46]	DEBUG :	Model Class Initialized
[2017-06-19 12:21:46]	DEBUG :	Model Class Initialized
[2017-06-19 12:21:46]	DEBUG :	Model Class Initialized
[2017-06-19 12:21:46]	DEBUG :	Model Class Initialized
[2017-06-19 12:21:46]	DEBUG :	Model Class Initialized
[2017-06-19 12:21:46]	DEBUG :	Model Class Initialized
[2017-06-19 12:21:47]	DEBUG :	Model Class Initialized
[2017-06-19 12:21:47]	DEBUG :	Model Class Initialized
[2017-06-19 12:21:47]	DEBUG :	Model Class Initialized
[2017-06-19 12:21:47]	DEBUG :	Model Class Initialized
[2017-06-19 12:21:47]	DEBUG :	Plugin loaded: to_pdf_pi
[2017-06-19 12:21:47]	SQL :	SELECT u.uid FROM user u
				LEFT JOIN 1_employee e on (e.bid=u.bid AND e.eid=u.eid)
				WHERE e.status='1' AND e.login='1' AND u.status='1' 
				AND u.bid='1' AND u.eid='1'
[2017-06-19 12:21:47]	SQL :	SELECT *
FROM (`language`)
WHERE `langid` = '1'
[2017-06-19 12:21:47]	DEBUG :	Database Driver Class Initialized
[2017-06-19 12:21:47]	SQL :	SELECT roleid FROM 1_employee
							WHERE eid='1'
							AND bid='1'
[2017-06-19 12:21:47]	SQL :	UPDATE `call_sessions` SET `last_activity` = '1497853678', `user_data` = 'a:20:{s:3:\"uid\";s:1:\"1\";s:3:\"bid\";s:1:\"1\";s:8:\"username\";s:20:\"ashwini.naidu@vmc.in\";s:3:\"eid\";s:1:\"1\";s:3:\"app\";s:1:\"1\";s:7:\"authkey\";s:17:\"1.1.d886b8e8a0615\";s:9:\"recording\";s:1:\"1\";s:10:\"mcubecalls\";s:1:\"1\";s:7:\"mtdebug\";s:1:\"1\";s:8:\"deviceid\";s:36:\"ffffffff-a4d5-960f-ffff-ffff82ba1723\";s:8:\"language\";s:1:\"1\";s:6:\"status\";s:1:\"1\";s:9:\"appstatus\";s:1:\"1\";s:3:\"pid\";s:1:\"0\";s:3:\"act\";s:1:\"0\";s:16:\"registrationdate\";s:19:\"2014-09-08 16:04:19\";s:10:\"dnd_status\";s:1:\"0\";s:9:\"logged_in\";s:1:\"1\";s:6:\"roleid\";s:1:\"1\";s:4:\"cbid\";s:1:\"1\";}' WHERE `session_id` = '847e9ee4e1543e295a6ddd381996c5e3'
[2017-06-19 12:21:47]	DEBUG :	Database Driver Class Initialized
[2017-06-19 12:21:47]	SQL :	SELECT * FROM 1_user_role
							WHERE roleid='1'
							AND bid='1'
[2017-06-19 12:21:47]	SQL :	SELECT m.modid,m.modname,m.moddesc,
							COALESCE(o.opt_add,0) as opt_add,
							COALESCE(o.opt_view,0) as opt_view,
							COALESCE(o.opt_download,0) as opt_download,
							COALESCE(opt_delete,0) as opt_delete 
							FROM module m
							LEFT JOIN (SELECT * FROM 1_role_mod_opt
							WHERE roleid='1' 
							AND bid='1') as o
							ON m.modid=o.modid where m.status=1
[2017-06-19 12:21:47]	SQL :	SELECT a.*,f.fieldname FROM 1_role_access a
								LEFT JOIN systemfields f on a.fieldid=f.fieldid
								WHERE a.roleid='1'
								AND a.bid='1'
								AND a.fieldtype='s'
[2017-06-19 12:21:47]	SQL :	SELECT * FROM 1_role_access
								WHERE roleid='1'
								AND bid='1'
							AND fieldtype='c'
[2017-06-19 12:21:47]	SQL :	SELECT a.selfdisable FROM 1_employee a WHERE a.eid='1'
[2017-06-19 12:21:47]	DEBUG :	Language file loaded: language/english/unit_test_lang.php
[2017-06-19 12:21:47]	DEBUG :	Language file loaded: language/english/db_lang.php
[2017-06-19 12:21:47]	DEBUG :	Language file loaded: language/english/ftp_lang.php
[2017-06-19 12:21:47]	DEBUG :	Language file loaded: language/english/menu_lang.php
[2017-06-19 12:21:47]	DEBUG :	Language file loaded: language/english/db_tables_lang.php
[2017-06-19 12:21:47]	DEBUG :	Language file loaded: language/english/form_level_lang.php
[2017-06-19 12:21:47]	DEBUG :	Language file loaded: language/english/form_validation_lang.php
[2017-06-19 12:21:47]	DEBUG :	Language file loaded: language/english/email_lang.php
[2017-06-19 12:21:47]	DEBUG :	Language file loaded: language/english/number_lang.php
[2017-06-19 12:21:47]	DEBUG :	Language file loaded: language/english/layout_lang.php
[2017-06-19 12:21:47]	DEBUG :	Language file loaded: language/english/validation_lang.php
[2017-06-19 12:21:47]	DEBUG :	Language file loaded: language/english/scaffolding_lang.php
[2017-06-19 12:21:47]	DEBUG :	Language file loaded: language/english/date_lang.php
[2017-06-19 12:21:47]	DEBUG :	Language file loaded: language/english/profiler_lang.php
[2017-06-19 12:21:47]	DEBUG :	Language file loaded: language/english/imglib_lang.php
[2017-06-19 12:21:47]	DEBUG :	Language file loaded: language/english/error_msg_lang.php
[2017-06-19 12:21:47]	DEBUG :	Language file loaded: language/english/upload_lang.php
[2017-06-19 12:21:47]	SQL :	SELECT id,category,subcategory,type,status FROM feedback WHERE status=1 
[2017-06-19 12:21:47]	SQL :	SELECT feature_id FROM business_feature WHERE bid='1'
[2017-06-19 12:21:47]	SQL :	SELECT feature_id FROM business_feature WHERE bid='1'
[2017-06-19 12:21:47]	SQL :	SELECT feature_id FROM business_feature WHERE bid='1'
[2017-06-19 12:21:47]	SQL :	SELECT id,type FROM 1_leads_status
[2017-06-19 12:21:47]	SQL :	SELECT design FROM business_lead_use WHERE bid='1' LIMIT 0,1
[2017-06-19 12:21:47]	SQL :	SELECT sid,status FROM 1_support_status
[2017-06-19 12:21:47]	SQL :	SELECT feature_id FROM `business_feature` where bid=1
[2017-06-19 12:21:47]	SQL :	SELECT action_align FROM account_settings WHERE bid='1'
[2017-06-19 12:21:47]	SQL :	SELECT dialstatus FROM 1_callhistory WHERE dialstatus = 'CONNECTING'
[2017-06-19 12:21:47]	SQL :	SELECT FOUND_ROWS() as cnt
[2017-06-19 12:21:47]	SQL :	SELECT del_notify FROM account_settings WHERE bid='1'
[2017-06-19 12:21:47]	DEBUG :	Model Class Initialized
[2017-06-19 12:21:47]	DEBUG :	Database Driver Class Initialized
[2017-06-19 12:21:47]	SQL :	SELECT * FROM 1_user_role
							WHERE roleid='1'
							AND bid='1'
[2017-06-19 12:21:47]	SQL :	SELECT m.modid,m.modname,m.moddesc,
							COALESCE(o.opt_add,0) as opt_add,
							COALESCE(o.opt_view,0) as opt_view,
							COALESCE(o.opt_download,0) as opt_download,
							COALESCE(opt_delete,0) as opt_delete 
							FROM module m
							LEFT JOIN (SELECT * FROM 1_role_mod_opt
							WHERE roleid='1' 
							AND bid='1') as o
							ON m.modid=o.modid where m.status=1
[2017-06-19 12:21:47]	SQL :	SELECT a.*,f.fieldname FROM 1_role_access a
								LEFT JOIN systemfields f on a.fieldid=f.fieldid
								WHERE a.roleid='1'
								AND a.bid='1'
								AND a.fieldtype='s'
[2017-06-19 12:21:47]	SQL :	SELECT * FROM 1_role_access
								WHERE roleid='1'
								AND bid='1'
							AND fieldtype='c'
[2017-06-19 12:21:47]	SQL :	SELECT feature_id FROM `business_feature` where bid=1
[2017-06-19 12:21:47]	SQL :	SELECT * FROM business where pid='1'
[2017-06-19 12:21:47]	SQL :	UPDATE `call_sessions` SET `last_activity` = '1497853678', `user_data` = 'a:20:{s:3:\"uid\";s:1:\"1\";s:3:\"bid\";s:1:\"1\";s:8:\"username\";s:20:\"ashwini.naidu@vmc.in\";s:3:\"eid\";s:1:\"1\";s:3:\"app\";s:1:\"1\";s:7:\"authkey\";s:17:\"1.1.d886b8e8a0615\";s:9:\"recording\";s:1:\"1\";s:10:\"mcubecalls\";s:1:\"1\";s:7:\"mtdebug\";s:1:\"1\";s:8:\"deviceid\";s:36:\"ffffffff-a4d5-960f-ffff-ffff82ba1723\";s:8:\"language\";s:1:\"1\";s:6:\"status\";s:1:\"1\";s:9:\"appstatus\";s:1:\"1\";s:3:\"pid\";s:1:\"0\";s:3:\"act\";s:1:\"0\";s:16:\"registrationdate\";s:19:\"2014-09-08 16:04:19\";s:10:\"dnd_status\";s:1:\"0\";s:9:\"logged_in\";s:1:\"1\";s:6:\"roleid\";s:1:\"1\";s:4:\"cbid\";s:1:\"1\";}' WHERE `session_id` = '847e9ee4e1543e295a6ddd381996c5e3'
[2017-06-19 12:21:47]	DEBUG :	Database Driver Class Initialized
[2017-06-19 12:21:47]	SQL :	SELECT * FROM 1_user_role
							WHERE roleid='1'
							AND bid='1'
[2017-06-19 12:21:47]	SQL :	SELECT m.modid,m.modname,m.moddesc,
							COALESCE(o.opt_add,0) as opt_add,
							COALESCE(o.opt_view,0) as opt_view,
							COALESCE(o.opt_download,0) as opt_download,
							COALESCE(opt_delete,0) as opt_delete 
							FROM module m
							LEFT JOIN (SELECT * FROM 1_role_mod_opt
							WHERE roleid='1' 
							AND bid='1') as o
							ON m.modid=o.modid where m.status=1
[2017-06-19 12:21:47]	SQL :	SELECT a.*,f.fieldname FROM 1_role_access a
								LEFT JOIN systemfields f on a.fieldid=f.fieldid
								WHERE a.roleid='1'
								AND a.bid='1'
								AND a.fieldtype='s'
[2017-06-19 12:21:47]	SQL :	SELECT * FROM 1_role_access
								WHERE roleid='1'
								AND bid='1'
							AND fieldtype='c'
[2017-06-19 12:21:47]	SQL :	SELECT SQL_CALC_FOUND_ROWS g.*
				  FROM 1_groups g 
				  LEFT JOIN group_rules r on g.rules=r.rulesid 
				  LEFT JOIN 1_employee e on g.eid=e.eid
				  LEFT JOIN prinumbers p on (g.prinumber=p.number AND p.bid='1')
				  WHERE g.bid='1' 
				  and g.status!=0  limit 0,20
[2017-06-19 12:21:47]	SQL :	SELECT FOUND_ROWS() as cnt
[2017-06-19 12:21:47]	DEBUG :	Database Driver Class Initialized
[2017-06-19 12:21:47]	SQL :	SELECT * FROM ( 
				SELECT 's' as type,f.addon,f.fieldid,f.modid,
				f.fieldname,'' as fieldtype,'' as fieldKey,'' as options,
				'' as defaultvalue,f.is_required as is_required,f.is_hidden,COALESCE(l.display_order,0) as display_order,
				l.customlabel,COALESCE(l.show,1) as `show`,COALESCE(l.listing,1) as `listing`
				FROM systemfields f
				LEFT JOIN (
					SELECT * FROM 1_custom_label
					WHERE fieldtype='s'
				) as l
				on (f.fieldid=l.fieldid AND l.modid=f.modid)
				WHERE f.modid='3'  AND f.is_hidden=0   AND f.addon=0 
				UNION
				SELECT 'c' as type,'0',f.fieldid,f.modid,
				f.fieldname,f.fieldtype,f.field_key as fieldKey,f.options,
				f.defaultvalue,f.is_required as is_required,'',COALESCE(l.display_order,0) as display_order,
				l.customlabel,COALESCE(l.show,1) as `show`,COALESCE(l.listing,1) as `listing`
				FROM 1_customfields f
				LEFT JOIN (
					SELECT * FROM 1_custom_label
					WHERE fieldtype='c'
				) as l
				on (f.fieldid=l.fieldid AND l.modid=f.modid)
				WHERE f.modid='3') as t ORDER BY display_order ASC
[2017-06-19 12:21:47]	DEBUG :	Database Driver Class Initialized
[2017-06-19 12:21:47]	SQL :	SELECT g.*,e.empname as eid,sg.groupname as supportgroup,
					  if(g.connectowner=1,'YES','NO') as connectwner,
					  g.eid as epid,if(g.record=1,'YES','NO') as records,
					  if(g.replytocustomer=1,'YES','NO') as replycus,
					  if(g.replytoexecutive=1,'YES','NO') as replyexe,
					  if(g.pincode=1,'YES','NO') as pcode,
					  p.number as prinumber,
					  p.landingnumber as addnumber,(if(g.primary_rule=0,'All',cr.regionname)) as regionname,
					  r.rulename as rules,g.rules as rule
					  FROM 1_groups g 
					  LEFT JOIN group_rules r on g.rules=r.rulesid 
					  LEFT JOIN 1_employee e on g.eid=e.eid 
					  LEFT JOIN 1_support_groups sg on g.supportgrp=sg.gid 
					  LEFT JOIN prinumber p on g.prinumber=p.number
					  LEFT JOIN 1_custom_region cr on g.primary_rule=cr.regionid
					  WHERE g.bid='1' 
					  AND g.gid='14'
[2017-06-19 12:21:47]	SQL :	SELECT * FROM 1_customfieldsvalue 
				WHERE bid='1' 
				AND modid='3'
				AND dataid='14'
[2017-06-19 12:21:47]	SQL :	SELECT COALESCE(COUNT(callid), 0) AS cnt
							FROM 1_callhistory h 
							WHERE (h.`starttime` >= DATE_SUB(CURDATE(), INTERVAL 6 DAY)) AND h.gid = 14 GROUP BY DAY(h.starttime)
[2017-06-19 12:21:47]	DEBUG :	Database Driver Class Initialized
[2017-06-19 12:21:47]	SQL :	SELECT g.*,e.empname as eid,sg.groupname as supportgroup,
					  if(g.connectowner=1,'YES','NO') as connectwner,
					  g.eid as epid,if(g.record=1,'YES','NO') as records,
					  if(g.replytocustomer=1,'YES','NO') as replycus,
					  if(g.replytoexecutive=1,'YES','NO') as replyexe,
					  if(g.pincode=1,'YES','NO') as pcode,
					  p.number as prinumber,
					  p.landingnumber as addnumber,(if(g.primary_rule=0,'All',cr.regionname)) as regionname,
					  r.rulename as rules,g.rules as rule
					  FROM 1_groups g 
					  LEFT JOIN group_rules r on g.rules=r.rulesid 
					  LEFT JOIN 1_employee e on g.eid=e.eid 
					  LEFT JOIN 1_support_groups sg on g.supportgrp=sg.gid 
					  LEFT JOIN prinumber p on g.prinumber=p.number
					  LEFT JOIN 1_custom_region cr on g.primary_rule=cr.regionid
					  WHERE g.bid='1' 
					  AND g.gid='15'
[2017-06-19 12:21:47]	SQL :	SELECT * FROM 1_customfieldsvalue 
				WHERE bid='1' 
				AND modid='3'
				AND dataid='15'
[2017-06-19 12:21:47]	SQL :	SELECT COALESCE(COUNT(callid), 0) AS cnt
							FROM 1_callhistory h 
							WHERE (h.`starttime` >= DATE_SUB(CURDATE(), INTERVAL 6 DAY)) AND h.gid = 15 GROUP BY DAY(h.starttime)
[2017-06-19 12:21:47]	SQL :	SELECT GROUP_CONCAT(empname SEPARATOR ',') as empname FROM 1_employee WHERE eid IN(58 )
[2017-06-19 12:21:47]	DEBUG :	Database Driver Class Initialized
[2017-06-19 12:21:47]	SQL :	SELECT g.*,e.empname as eid,sg.groupname as supportgroup,
					  if(g.connectowner=1,'YES','NO') as connectwner,
					  g.eid as epid,if(g.record=1,'YES','NO') as records,
					  if(g.replytocustomer=1,'YES','NO') as replycus,
					  if(g.replytoexecutive=1,'YES','NO') as replyexe,
					  if(g.pincode=1,'YES','NO') as pcode,
					  p.number as prinumber,
					  p.landingnumber as addnumber,(if(g.primary_rule=0,'All',cr.regionname)) as regionname,
					  r.rulename as rules,g.rules as rule
					  FROM 1_groups g 
					  LEFT JOIN group_rules r on g.rules=r.rulesid 
					  LEFT JOIN 1_employee e on g.eid=e.eid 
					  LEFT JOIN 1_support_groups sg on g.supportgrp=sg.gid 
					  LEFT JOIN prinumber p on g.prinumber=p.number
					  LEFT JOIN 1_custom_region cr on g.primary_rule=cr.regionid
					  WHERE g.bid='1' 
					  AND g.gid='16'
[2017-06-19 12:21:47]	SQL :	SELECT * FROM 1_customfieldsvalue 
				WHERE bid='1' 
				AND modid='3'
				AND dataid='16'
[2017-06-19 12:21:47]	SQL :	SELECT COALESCE(COUNT(callid), 0) AS cnt
							FROM 1_callhistory h 
							WHERE (h.`starttime` >= DATE_SUB(CURDATE(), INTERVAL 6 DAY)) AND h.gid = 16 GROUP BY DAY(h.starttime)
[2017-06-19 12:21:47]	DEBUG :	Database Driver Class Initialized
[2017-06-19 12:21:47]	SQL :	SELECT g.*,e.empname as eid,sg.groupname as supportgroup,
					  if(g.connectowner=1,'YES','NO') as connectwner,
					  g.eid as epid,if(g.record=1,'YES','NO') as records,
					  if(g.replytocustomer=1,'YES','NO') as replycus,
					  if(g.replytoexecutive=1,'YES','NO') as replyexe,
					  if(g.pincode=1,'YES','NO') as pcode,
					  p.number as prinumber,
					  p.landingnumber as addnumber,(if(g.primary_rule=0,'All',cr.regionname)) as regionname,
					  r.rulename as rules,g.rules as rule
					  FROM 1_groups g 
					  LEFT JOIN group_rules r on g.rules=r.rulesid 
					  LEFT JOIN 1_employee e on g.eid=e.eid 
					  LEFT JOIN 1_support_groups sg on g.supportgrp=sg.gid 
					  LEFT JOIN prinumber p on g.prinumber=p.number
					  LEFT JOIN 1_custom_region cr on g.primary_rule=cr.regionid
					  WHERE g.bid='1' 
					  AND g.gid='17'
[2017-06-19 12:21:47]	SQL :	SELECT * FROM 1_customfieldsvalue 
				WHERE bid='1' 
				AND modid='3'
				AND dataid='17'
[2017-06-19 12:21:47]	SQL :	SELECT COALESCE(COUNT(callid), 0) AS cnt
							FROM 1_callhistory h 
							WHERE (h.`starttime` >= DATE_SUB(CURDATE(), INTERVAL 6 DAY)) AND h.gid = 17 GROUP BY DAY(h.starttime)
[2017-06-19 12:21:47]	DEBUG :	Database Driver Class Initialized
[2017-06-19 12:21:47]	SQL :	SELECT * FROM ( 
				SELECT 's' as type,f.addon,f.fieldid,f.modid,
				f.fieldname,'' as fieldtype,'' as fieldKey,'' as options,
				'' as defaultvalue,f.is_required as is_required,f.is_hidden,COALESCE(l.display_order,0) as display_order,
				l.customlabel,COALESCE(l.show,1) as `show`,COALESCE(l.listing,1) as `listing`
				FROM systemfields f
				LEFT JOIN (
					SELECT * FROM 1_custom_label
					WHERE fieldtype='s'
				) as l
				on (f.fieldid=l.fieldid AND l.modid=f.modid)
				WHERE f.modid='3'  AND f.is_hidden=0   AND f.addon=0 
				UNION
				SELECT 'c' as type,'0',f.fieldid,f.modid,
				f.fieldname,f.fieldtype,f.field_key as fieldKey,f.options,
				f.defaultvalue,f.is_required as is_required,'',COALESCE(l.display_order,0) as display_order,
				l.customlabel,COALESCE(l.show,1) as `show`,COALESCE(l.listing,1) as `listing`
				FROM 1_customfields f
				LEFT JOIN (
					SELECT * FROM 1_custom_label
					WHERE fieldtype='c'
				) as l
				on (f.fieldid=l.fieldid AND l.modid=f.modid)
				WHERE f.modid='3') as t ORDER BY display_order ASC
[2017-06-19 12:21:47]	SQL :	select eid,empname from 1_employee where status=1 ORDER BY empname
[2017-06-19 12:21:47]	DEBUG :	Database Driver Class Initialized
[2017-06-19 12:21:47]	SQL :	SELECT * FROM 1_user_role
							WHERE roleid='1'
							AND bid='1'
[2017-06-19 12:21:47]	SQL :	SELECT m.modid,m.modname,m.moddesc,
							COALESCE(o.opt_add,0) as opt_add,
							COALESCE(o.opt_view,0) as opt_view,
							COALESCE(o.opt_download,0) as opt_download,
							COALESCE(opt_delete,0) as opt_delete 
							FROM module m
							LEFT JOIN (SELECT * FROM 1_role_mod_opt
							WHERE roleid='1' 
							AND bid='1') as o
							ON m.modid=o.modid where m.status=1
[2017-06-19 12:21:47]	SQL :	SELECT a.*,f.fieldname FROM 1_role_access a
								LEFT JOIN systemfields f on a.fieldid=f.fieldid
								WHERE a.roleid='1'
								AND a.bid='1'
								AND a.fieldtype='s'
[2017-06-19 12:21:47]	SQL :	SELECT * FROM 1_role_access
								WHERE roleid='1'
								AND bid='1'
							AND fieldtype='c'
[2017-06-19 12:21:47]	SQL :	SELECT * FROM 1_employee WHERE status='1' ORDER BY empname
[2017-06-19 12:21:47]	DEBUG :	File loaded: /var/www/html/mcnew/system/application/views/mainheader.php
[2017-06-19 12:21:47]	DEBUG :	Database Driver Class Initialized
[2017-06-19 12:21:47]	SQL :	select a.*,e.empname as reporttoname,b.rolename  as role,if(u.recording=1,'Yes','No') as recording
					  from 1_employee a
					  LEFT JOIN  1_employee e on a.reportto=e.eid
					  LEFT JOIN  user u on a.eid=u.eid
					  ,1_user_role b 
					  where a.roleid=b.roleid AND a.eid='1'
[2017-06-19 12:21:47]	SQL :	SELECT * FROM 1_customfieldsvalue 
				WHERE bid='1' 
				AND modid='2'
				AND dataid='1'
[2017-06-19 12:21:47]	DEBUG :	File loaded: /var/www/html/mcnew/system/application/views/leftsidebar.php
[2017-06-19 12:21:47]	DEBUG :	File loaded: /var/www/html/mcnew/system/application/views/list_view.php
[2017-06-19 12:21:47]	DEBUG :	File loaded: /var/www/html/mcnew/system/application/views/footer.php
[2017-06-19 12:21:47]	DEBUG :	Final output sent to browser
[2017-06-19 12:21:47]	DEBUG :	Total execution time: 0.1916
[2017-06-19 12:21:52]	DEBUG :	Config Class Initialized
[2017-06-19 12:21:52]	DEBUG :	Hooks Class Initialized
[2017-06-19 12:21:52]	DEBUG :	URI Class Initialized
[2017-06-19 12:21:52]	DEBUG :	Router Class Initialized
[2017-06-19 12:21:52]	DEBUG :	Output Class Initialized
[2017-06-19 12:21:52]	DEBUG :	Input Class Initialized
[2017-06-19 12:21:52]	DEBUG :	XSS Filtering completed
[2017-06-19 12:21:52]	DEBUG :	XSS Filtering completed
[2017-06-19 12:21:52]	DEBUG :	XSS Filtering completed
[2017-06-19 12:21:52]	DEBUG :	XSS Filtering completed
[2017-06-19 12:21:52]	DEBUG :	Global POST and COOKIE data sanitized
[2017-06-19 12:21:52]	DEBUG :	Language Class Initialized
[2017-06-19 12:21:52]	DEBUG :	Loader Class Initialized
[2017-06-19 12:21:52]	DEBUG :	Helper loaded: url_helper
[2017-06-19 12:21:52]	DEBUG :	Helper loaded: form_helper
[2017-06-19 12:21:52]	DEBUG :	Helper loaded: html_helper
[2017-06-19 12:21:52]	DEBUG :	Helper loaded: email_helper
[2017-06-19 12:21:52]	DEBUG :	Helper loaded: ckeditor_helper
[2017-06-19 12:21:52]	DEBUG :	Helper loaded: mcube_helper
[2017-06-19 12:21:52]	DEBUG :	Database Driver Class Initialized
[2017-06-19 12:21:52]	ERROR :	Severity: 8192  --> mysql_pconnect(): The mysql extension is deprecated and will be removed in the future: use mysqli or PDO instead /var/www/html/mcnew/system/database/drivers/mysql/mysql_driver.php 88
[2017-06-19 12:21:52]	DEBUG :	Session Class Initialized
[2017-06-19 12:21:52]	DEBUG :	Helper loaded: string_helper
[2017-06-19 12:21:52]	DEBUG :	Encrypt Class Initialized
[2017-06-19 12:21:52]	SQL :	SELECT *
FROM (`call_sessions`)
WHERE `session_id` = '847e9ee4e1543e295a6ddd381996c5e3'
AND `user_agent` = 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36'
[2017-06-19 12:21:52]	DEBUG :	Session routines successfully run
[2017-06-19 12:21:52]	DEBUG :	Table Class Initialized
[2017-06-19 12:21:52]	DEBUG :	Pagination Class Initialized
[2017-06-19 12:21:52]	DEBUG :	Config file loaded: config/paypallib_config.php
[2017-06-19 12:21:52]	DEBUG :	Form Validation Class Initialized
[2017-06-19 12:21:52]	DEBUG :	Email Class Initialized
[2017-06-19 12:21:52]	DEBUG :	Language file loaded: language/english/calendar_lang.php
[2017-06-19 12:21:52]	DEBUG :	Calendar Class Initialized
[2017-06-19 12:21:52]	DEBUG :	Controller Class Initialized
[2017-06-19 12:21:52]	DEBUG :	Model Class Initialized
[2017-06-19 12:21:52]	DEBUG :	Model Class Initialized
[2017-06-19 12:21:52]	DEBUG :	Model Class Initialized
[2017-06-19 12:21:52]	DEBUG :	Model Class Initialized
[2017-06-19 12:21:52]	DEBUG :	Model Class Initialized
[2017-06-19 12:21:52]	DEBUG :	Model Class Initialized
[2017-06-19 12:21:52]	DEBUG :	Model Class Initialized
[2017-06-19 12:21:52]	DEBUG :	Model Class Initialized
[2017-06-19 12:21:52]	DEBUG :	Model Class Initialized
[2017-06-19 12:21:52]	DEBUG :	Model Class Initialized
[2017-06-19 12:21:52]	DEBUG :	Model Class Initialized
[2017-06-19 12:21:52]	DEBUG :	Model Class Initialized
[2017-06-19 12:21:52]	DEBUG :	Plugin loaded: to_pdf_pi
[2017-06-19 12:21:52]	SQL :	SELECT u.uid FROM user u
				LEFT JOIN 1_employee e on (e.bid=u.bid AND e.eid=u.eid)
				WHERE e.status='1' AND e.login='1' AND u.status='1' 
				AND u.bid='1' AND u.eid='1'
[2017-06-19 12:21:52]	SQL :	SELECT *
FROM (`language`)
WHERE `langid` = '1'
[2017-06-19 12:21:52]	DEBUG :	Database Driver Class Initialized
[2017-06-19 12:21:52]	SQL :	SELECT roleid FROM 1_employee
							WHERE eid='1'
							AND bid='1'
[2017-06-19 12:21:52]	SQL :	UPDATE `call_sessions` SET `last_activity` = '1497853678', `user_data` = 'a:20:{s:3:\"uid\";s:1:\"1\";s:3:\"bid\";s:1:\"1\";s:8:\"username\";s:20:\"ashwini.naidu@vmc.in\";s:3:\"eid\";s:1:\"1\";s:3:\"app\";s:1:\"1\";s:7:\"authkey\";s:17:\"1.1.d886b8e8a0615\";s:9:\"recording\";s:1:\"1\";s:10:\"mcubecalls\";s:1:\"1\";s:7:\"mtdebug\";s:1:\"1\";s:8:\"deviceid\";s:36:\"ffffffff-a4d5-960f-ffff-ffff82ba1723\";s:8:\"language\";s:1:\"1\";s:6:\"status\";s:1:\"1\";s:9:\"appstatus\";s:1:\"1\";s:3:\"pid\";s:1:\"0\";s:3:\"act\";s:1:\"0\";s:16:\"registrationdate\";s:19:\"2014-09-08 16:04:19\";s:10:\"dnd_status\";s:1:\"0\";s:9:\"logged_in\";s:1:\"1\";s:6:\"roleid\";s:1:\"1\";s:4:\"cbid\";s:1:\"1\";}' WHERE `session_id` = '847e9ee4e1543e295a6ddd381996c5e3'
[2017-06-19 12:21:52]	DEBUG :	Database Driver Class Initialized
[2017-06-19 12:21:52]	SQL :	SELECT * FROM 1_user_role
							WHERE roleid='1'
							AND bid='1'
[2017-06-19 12:21:52]	SQL :	SELECT m.modid,m.modname,m.moddesc,
							COALESCE(o.opt_add,0) as opt_add,
							COALESCE(o.opt_view,0) as opt_view,
							COALESCE(o.opt_download,0) as opt_download,
							COALESCE(opt_delete,0) as opt_delete 
							FROM module m
							LEFT JOIN (SELECT * FROM 1_role_mod_opt
							WHERE roleid='1' 
							AND bid='1') as o
							ON m.modid=o.modid where m.status=1
[2017-06-19 12:21:52]	SQL :	SELECT a.*,f.fieldname FROM 1_role_access a
								LEFT JOIN systemfields f on a.fieldid=f.fieldid
								WHERE a.roleid='1'
								AND a.bid='1'
								AND a.fieldtype='s'
[2017-06-19 12:21:52]	SQL :	SELECT * FROM 1_role_access
								WHERE roleid='1'
								AND bid='1'
							AND fieldtype='c'
[2017-06-19 12:21:52]	SQL :	SELECT a.selfdisable FROM 1_employee a WHERE a.eid='1'
[2017-06-19 12:21:52]	DEBUG :	Language file loaded: language/english/unit_test_lang.php
[2017-06-19 12:21:52]	DEBUG :	Language file loaded: language/english/db_lang.php
[2017-06-19 12:21:52]	DEBUG :	Language file loaded: language/english/ftp_lang.php
[2017-06-19 12:21:52]	DEBUG :	Language file loaded: language/english/menu_lang.php
[2017-06-19 12:21:52]	DEBUG :	Language file loaded: language/english/db_tables_lang.php
[2017-06-19 12:21:52]	DEBUG :	Language file loaded: language/english/form_level_lang.php
[2017-06-19 12:21:52]	DEBUG :	Language file loaded: language/english/form_validation_lang.php
[2017-06-19 12:21:52]	DEBUG :	Language file loaded: language/english/email_lang.php
[2017-06-19 12:21:52]	DEBUG :	Language file loaded: language/english/number_lang.php
[2017-06-19 12:21:52]	DEBUG :	Language file loaded: language/english/layout_lang.php
[2017-06-19 12:21:52]	DEBUG :	Language file loaded: language/english/validation_lang.php
[2017-06-19 12:21:52]	DEBUG :	Language file loaded: language/english/scaffolding_lang.php
[2017-06-19 12:21:52]	DEBUG :	Language file loaded: language/english/date_lang.php
[2017-06-19 12:21:52]	DEBUG :	Language file loaded: language/english/profiler_lang.php
[2017-06-19 12:21:52]	DEBUG :	Language file loaded: language/english/imglib_lang.php
[2017-06-19 12:21:52]	DEBUG :	Language file loaded: language/english/error_msg_lang.php
[2017-06-19 12:21:52]	DEBUG :	Language file loaded: language/english/upload_lang.php
[2017-06-19 12:21:52]	SQL :	SELECT id,category,subcategory,type,status FROM feedback WHERE status=1 
[2017-06-19 12:21:52]	SQL :	SELECT feature_id FROM business_feature WHERE bid='1'
[2017-06-19 12:21:52]	SQL :	SELECT feature_id FROM business_feature WHERE bid='1'
[2017-06-19 12:21:52]	SQL :	SELECT feature_id FROM business_feature WHERE bid='1'
[2017-06-19 12:21:52]	SQL :	SELECT id,type FROM 1_leads_status
[2017-06-19 12:21:52]	SQL :	SELECT design FROM business_lead_use WHERE bid='1' LIMIT 0,1
[2017-06-19 12:21:52]	SQL :	SELECT sid,status FROM 1_support_status
[2017-06-19 12:21:52]	SQL :	SELECT feature_id FROM `business_feature` where bid=1
[2017-06-19 12:21:52]	SQL :	SELECT action_align FROM account_settings WHERE bid='1'
[2017-06-19 12:21:52]	SQL :	SELECT dialstatus FROM 1_callhistory WHERE dialstatus = 'CONNECTING'
[2017-06-19 12:21:52]	SQL :	SELECT FOUND_ROWS() as cnt
[2017-06-19 12:21:52]	SQL :	SELECT del_notify FROM account_settings WHERE bid='1'
[2017-06-19 12:21:52]	DEBUG :	Model Class Initialized
[2017-06-19 12:21:52]	DEBUG :	Database Driver Class Initialized
[2017-06-19 12:21:52]	SQL :	SELECT * FROM 1_user_role
							WHERE roleid='1'
							AND bid='1'
[2017-06-19 12:21:52]	SQL :	SELECT m.modid,m.modname,m.moddesc,
							COALESCE(o.opt_add,0) as opt_add,
							COALESCE(o.opt_view,0) as opt_view,
							COALESCE(o.opt_download,0) as opt_download,
							COALESCE(opt_delete,0) as opt_delete 
							FROM module m
							LEFT JOIN (SELECT * FROM 1_role_mod_opt
							WHERE roleid='1' 
							AND bid='1') as o
							ON m.modid=o.modid where m.status=1
[2017-06-19 12:21:52]	SQL :	SELECT a.*,f.fieldname FROM 1_role_access a
								LEFT JOIN systemfields f on a.fieldid=f.fieldid
								WHERE a.roleid='1'
								AND a.bid='1'
								AND a.fieldtype='s'
[2017-06-19 12:21:52]	SQL :	SELECT * FROM 1_role_access
								WHERE roleid='1'
								AND bid='1'
							AND fieldtype='c'
[2017-06-19 12:21:52]	SQL :	SELECT feature_id FROM `business_feature` where bid=1
[2017-06-19 12:21:52]	SQL :	SELECT * FROM business where pid='1'
[2017-06-19 12:21:52]	DEBUG :	Database Driver Class Initialized
[2017-06-19 12:21:52]	SQL :	SELECT * FROM 1_user_role
							WHERE roleid='1'
							AND bid='1'
[2017-06-19 12:21:52]	SQL :	SELECT m.modid,m.modname,m.moddesc,
							COALESCE(o.opt_add,0) as opt_add,
							COALESCE(o.opt_view,0) as opt_view,
							COALESCE(o.opt_download,0) as opt_download,
							COALESCE(opt_delete,0) as opt_delete 
							FROM module m
							LEFT JOIN (SELECT * FROM 1_role_mod_opt
							WHERE roleid='1' 
							AND bid='1') as o
							ON m.modid=o.modid where m.status=1
[2017-06-19 12:21:52]	SQL :	SELECT a.*,f.fieldname FROM 1_role_access a
								LEFT JOIN systemfields f on a.fieldid=f.fieldid
								WHERE a.roleid='1'
								AND a.bid='1'
								AND a.fieldtype='s'
[2017-06-19 12:21:52]	SQL :	SELECT * FROM 1_role_access
								WHERE roleid='1'
								AND bid='1'
							AND fieldtype='c'
[2017-06-19 12:21:52]	SQL :	UPDATE `call_sessions` SET `last_activity` = '1497853678', `user_data` = 'a:20:{s:3:\"uid\";s:1:\"1\";s:3:\"bid\";s:1:\"1\";s:8:\"username\";s:20:\"ashwini.naidu@vmc.in\";s:3:\"eid\";s:1:\"1\";s:3:\"app\";s:1:\"1\";s:7:\"authkey\";s:17:\"1.1.d886b8e8a0615\";s:9:\"recording\";s:1:\"1\";s:10:\"mcubecalls\";s:1:\"1\";s:7:\"mtdebug\";s:1:\"1\";s:8:\"deviceid\";s:36:\"ffffffff-a4d5-960f-ffff-ffff82ba1723\";s:8:\"language\";s:1:\"1\";s:6:\"status\";s:1:\"1\";s:9:\"appstatus\";s:1:\"1\";s:3:\"pid\";s:1:\"0\";s:3:\"act\";s:1:\"0\";s:16:\"registrationdate\";s:19:\"2014-09-08 16:04:19\";s:10:\"dnd_status\";s:1:\"0\";s:9:\"logged_in\";s:1:\"1\";s:6:\"roleid\";s:1:\"1\";s:4:\"cbid\";s:1:\"1\";}' WHERE `session_id` = '847e9ee4e1543e295a6ddd381996c5e3'
[2017-06-19 12:21:52]	SQL :	SELECT SQL_CALC_FOUND_ROWS g.gid
				  FROM 1_groups g 
				  LEFT JOIN group_rules r on g.rules=r.rulesid 
				  LEFT JOIN 1_employee e on g.eid=e.eid
				  WHERE g.bid='1' 
				  and g.status=0   limit 0,30
[2017-06-19 12:21:52]	SQL :	SELECT FOUND_ROWS() as cnt
[2017-06-19 12:21:52]	DEBUG :	Database Driver Class Initialized
[2017-06-19 12:21:52]	SQL :	SELECT * FROM ( 
				SELECT 's' as type,f.addon,f.fieldid,f.modid,
				f.fieldname,'' as fieldtype,'' as fieldKey,'' as options,
				'' as defaultvalue,f.is_required as is_required,f.is_hidden,COALESCE(l.display_order,0) as display_order,
				l.customlabel,COALESCE(l.show,1) as `show`,COALESCE(l.listing,1) as `listing`
				FROM systemfields f
				LEFT JOIN (
					SELECT * FROM 1_custom_label
					WHERE fieldtype='s'
				) as l
				on (f.fieldid=l.fieldid AND l.modid=f.modid)
				WHERE f.modid='3'  AND f.is_hidden=0   AND f.addon=0 
				UNION
				SELECT 'c' as type,'0',f.fieldid,f.modid,
				f.fieldname,f.fieldtype,f.field_key as fieldKey,f.options,
				f.defaultvalue,f.is_required as is_required,'',COALESCE(l.display_order,0) as display_order,
				l.customlabel,COALESCE(l.show,1) as `show`,COALESCE(l.listing,1) as `listing`
				FROM 1_customfields f
				LEFT JOIN (
					SELECT * FROM 1_custom_label
					WHERE fieldtype='c'
				) as l
				on (f.fieldid=l.fieldid AND l.modid=f.modid)
				WHERE f.modid='3') as t ORDER BY display_order ASC
[2017-06-19 12:21:52]	DEBUG :	Database Driver Class Initialized
[2017-06-19 12:21:52]	SQL :	SELECT g.*,e.empname as eid,sg.groupname as supportgroup,
					  if(g.connectowner=1,'YES','NO') as connectwner,
					  g.eid as epid,if(g.record=1,'YES','NO') as records,
					  if(g.replytocustomer=1,'YES','NO') as replycus,
					  if(g.replytoexecutive=1,'YES','NO') as replyexe,
					  if(g.pincode=1,'YES','NO') as pcode,
					  p.number as prinumber,
					  p.landingnumber as addnumber,(if(g.primary_rule=0,'All',cr.regionname)) as regionname,
					  r.rulename as rules,g.rules as rule
					  FROM 1_groups g 
					  LEFT JOIN group_rules r on g.rules=r.rulesid 
					  LEFT JOIN 1_employee e on g.eid=e.eid 
					  LEFT JOIN 1_support_groups sg on g.supportgrp=sg.gid 
					  LEFT JOIN prinumber p on g.prinumber=p.number
					  LEFT JOIN 1_custom_region cr on g.primary_rule=cr.regionid
					  WHERE g.bid='1' 
					  AND g.gid='13'
[2017-06-19 12:21:52]	SQL :	SELECT * FROM 1_customfieldsvalue 
				WHERE bid='1' 
				AND modid='3'
				AND dataid='13'
[2017-06-19 12:21:52]	DEBUG :	Database Driver Class Initialized
[2017-06-19 12:21:52]	SQL :	SELECT * FROM ( 
				SELECT 's' as type,f.addon,f.fieldid,f.modid,
				f.fieldname,'' as fieldtype,'' as fieldKey,'' as options,
				'' as defaultvalue,f.is_required as is_required,f.is_hidden,COALESCE(l.display_order,0) as display_order,
				l.customlabel,COALESCE(l.show,1) as `show`,COALESCE(l.listing,1) as `listing`
				FROM systemfields f
				LEFT JOIN (
					SELECT * FROM 1_custom_label
					WHERE fieldtype='s'
				) as l
				on (f.fieldid=l.fieldid AND l.modid=f.modid)
				WHERE f.modid='3'  AND f.is_hidden=0   AND f.addon=0 
				UNION
				SELECT 'c' as type,'0',f.fieldid,f.modid,
				f.fieldname,f.fieldtype,f.field_key as fieldKey,f.options,
				f.defaultvalue,f.is_required as is_required,'',COALESCE(l.display_order,0) as display_order,
				l.customlabel,COALESCE(l.show,1) as `show`,COALESCE(l.listing,1) as `listing`
				FROM 1_customfields f
				LEFT JOIN (
					SELECT * FROM 1_custom_label
					WHERE fieldtype='c'
				) as l
				on (f.fieldid=l.fieldid AND l.modid=f.modid)
				WHERE f.modid='3') as t ORDER BY display_order ASC
[2017-06-19 12:21:52]	SQL :	select eid,empname from 1_employee where status=1 ORDER BY empname
[2017-06-19 12:21:52]	DEBUG :	Database Driver Class Initialized
[2017-06-19 12:21:52]	SQL :	SELECT * FROM 1_user_role
							WHERE roleid='1'
							AND bid='1'
[2017-06-19 12:21:52]	SQL :	SELECT m.modid,m.modname,m.moddesc,
							COALESCE(o.opt_add,0) as opt_add,
							COALESCE(o.opt_view,0) as opt_view,
							COALESCE(o.opt_download,0) as opt_download,
							COALESCE(opt_delete,0) as opt_delete 
							FROM module m
							LEFT JOIN (SELECT * FROM 1_role_mod_opt
							WHERE roleid='1' 
							AND bid='1') as o
							ON m.modid=o.modid where m.status=1
[2017-06-19 12:21:52]	SQL :	SELECT a.*,f.fieldname FROM 1_role_access a
								LEFT JOIN systemfields f on a.fieldid=f.fieldid
								WHERE a.roleid='1'
								AND a.bid='1'
								AND a.fieldtype='s'
[2017-06-19 12:21:52]	SQL :	SELECT * FROM 1_role_access
								WHERE roleid='1'
								AND bid='1'
							AND fieldtype='c'
[2017-06-19 12:21:52]	SQL :	SELECT * FROM 1_employee WHERE status='1' ORDER BY empname
[2017-06-19 12:21:52]	DEBUG :	File loaded: /var/www/html/mcnew/system/application/views/mainheader.php
[2017-06-19 12:21:52]	DEBUG :	Database Driver Class Initialized
[2017-06-19 12:21:52]	SQL :	select a.*,e.empname as reporttoname,b.rolename  as role,if(u.recording=1,'Yes','No') as recording
					  from 1_employee a
					  LEFT JOIN  1_employee e on a.reportto=e.eid
					  LEFT JOIN  user u on a.eid=u.eid
					  ,1_user_role b 
					  where a.roleid=b.roleid AND a.eid='1'
[2017-06-19 12:21:52]	SQL :	SELECT * FROM 1_customfieldsvalue 
				WHERE bid='1' 
				AND modid='2'
				AND dataid='1'
[2017-06-19 12:21:52]	DEBUG :	File loaded: /var/www/html/mcnew/system/application/views/leftsidebar.php
[2017-06-19 12:21:52]	DEBUG :	File loaded: /var/www/html/mcnew/system/application/views/list_view.php
[2017-06-19 12:21:52]	DEBUG :	File loaded: /var/www/html/mcnew/system/application/views/footer.php
[2017-06-19 12:21:52]	DEBUG :	Final output sent to browser
[2017-06-19 12:21:52]	DEBUG :	Total execution time: 0.1429
[2017-06-19 12:22:28]	DEBUG :	Config Class Initialized
[2017-06-19 12:22:28]	DEBUG :	Hooks Class Initialized
[2017-06-19 12:22:28]	DEBUG :	URI Class Initialized
[2017-06-19 12:22:28]	DEBUG :	Router Class Initialized
[2017-06-19 12:22:28]	DEBUG :	Output Class Initialized
[2017-06-19 12:22:28]	DEBUG :	Input Class Initialized
[2017-06-19 12:22:28]	DEBUG :	XSS Filtering completed
[2017-06-19 12:22:28]	DEBUG :	XSS Filtering completed
[2017-06-19 12:22:28]	DEBUG :	XSS Filtering completed
[2017-06-19 12:22:28]	DEBUG :	XSS Filtering completed
[2017-06-19 12:22:28]	DEBUG :	Global POST and COOKIE data sanitized
[2017-06-19 12:22:28]	DEBUG :	Language Class Initialized
[2017-06-19 12:22:28]	DEBUG :	Loader Class Initialized
[2017-06-19 12:22:28]	DEBUG :	Helper loaded: url_helper
[2017-06-19 12:22:28]	DEBUG :	Helper loaded: form_helper
[2017-06-19 12:22:28]	DEBUG :	Helper loaded: html_helper
[2017-06-19 12:22:28]	DEBUG :	Helper loaded: email_helper
[2017-06-19 12:22:28]	DEBUG :	Helper loaded: ckeditor_helper
[2017-06-19 12:22:28]	DEBUG :	Helper loaded: mcube_helper
[2017-06-19 12:22:28]	DEBUG :	Database Driver Class Initialized
[2017-06-19 12:22:28]	ERROR :	Severity: 8192  --> mysql_pconnect(): The mysql extension is deprecated and will be removed in the future: use mysqli or PDO instead /var/www/html/mcnew/system/database/drivers/mysql/mysql_driver.php 88
[2017-06-19 12:22:28]	DEBUG :	Session Class Initialized
[2017-06-19 12:22:28]	DEBUG :	Helper loaded: string_helper
[2017-06-19 12:22:28]	DEBUG :	Encrypt Class Initialized
[2017-06-19 12:22:28]	SQL :	SELECT *
FROM (`call_sessions`)
WHERE `session_id` = '847e9ee4e1543e295a6ddd381996c5e3'
AND `user_agent` = 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36'
[2017-06-19 12:22:28]	DEBUG :	Session routines successfully run
[2017-06-19 12:22:28]	DEBUG :	Table Class Initialized
[2017-06-19 12:22:28]	DEBUG :	Pagination Class Initialized
[2017-06-19 12:22:28]	DEBUG :	Config file loaded: config/paypallib_config.php
[2017-06-19 12:22:28]	DEBUG :	Form Validation Class Initialized
[2017-06-19 12:22:28]	DEBUG :	Email Class Initialized
[2017-06-19 12:22:28]	DEBUG :	Language file loaded: language/english/calendar_lang.php
[2017-06-19 12:22:28]	DEBUG :	Calendar Class Initialized
[2017-06-19 12:22:28]	DEBUG :	Controller Class Initialized
[2017-06-19 12:22:28]	DEBUG :	Model Class Initialized
[2017-06-19 12:22:28]	DEBUG :	Model Class Initialized
[2017-06-19 12:22:28]	DEBUG :	Model Class Initialized
[2017-06-19 12:22:28]	DEBUG :	Model Class Initialized
[2017-06-19 12:22:28]	DEBUG :	Model Class Initialized
[2017-06-19 12:22:28]	DEBUG :	Model Class Initialized
[2017-06-19 12:22:28]	DEBUG :	Model Class Initialized
[2017-06-19 12:22:28]	DEBUG :	Model Class Initialized
[2017-06-19 12:22:28]	DEBUG :	Model Class Initialized
[2017-06-19 12:22:28]	DEBUG :	Model Class Initialized
[2017-06-19 12:22:28]	DEBUG :	Model Class Initialized
[2017-06-19 12:22:28]	DEBUG :	Model Class Initialized
[2017-06-19 12:22:28]	DEBUG :	Plugin loaded: to_pdf_pi
[2017-06-19 12:22:28]	SQL :	SELECT u.uid FROM user u
				LEFT JOIN 1_employee e on (e.bid=u.bid AND e.eid=u.eid)
				WHERE e.status='1' AND e.login='1' AND u.status='1' 
				AND u.bid='1' AND u.eid='1'
[2017-06-19 12:22:28]	SQL :	SELECT *
FROM (`language`)
WHERE `langid` = '1'
[2017-06-19 12:22:28]	DEBUG :	Database Driver Class Initialized
[2017-06-19 12:22:28]	SQL :	SELECT roleid FROM 1_employee
							WHERE eid='1'
							AND bid='1'
[2017-06-19 12:22:28]	SQL :	UPDATE `call_sessions` SET `last_activity` = '1497853678', `user_data` = 'a:20:{s:3:\"uid\";s:1:\"1\";s:3:\"bid\";s:1:\"1\";s:8:\"username\";s:20:\"ashwini.naidu@vmc.in\";s:3:\"eid\";s:1:\"1\";s:3:\"app\";s:1:\"1\";s:7:\"authkey\";s:17:\"1.1.d886b8e8a0615\";s:9:\"recording\";s:1:\"1\";s:10:\"mcubecalls\";s:1:\"1\";s:7:\"mtdebug\";s:1:\"1\";s:8:\"deviceid\";s:36:\"ffffffff-a4d5-960f-ffff-ffff82ba1723\";s:8:\"language\";s:1:\"1\";s:6:\"status\";s:1:\"1\";s:9:\"appstatus\";s:1:\"1\";s:3:\"pid\";s:1:\"0\";s:3:\"act\";s:1:\"0\";s:16:\"registrationdate\";s:19:\"2014-09-08 16:04:19\";s:10:\"dnd_status\";s:1:\"0\";s:9:\"logged_in\";s:1:\"1\";s:6:\"roleid\";s:1:\"1\";s:4:\"cbid\";s:1:\"1\";}' WHERE `session_id` = '847e9ee4e1543e295a6ddd381996c5e3'
[2017-06-19 12:22:28]	DEBUG :	Database Driver Class Initialized
[2017-06-19 12:22:28]	SQL :	SELECT * FROM 1_user_role
							WHERE roleid='1'
							AND bid='1'
[2017-06-19 12:22:28]	SQL :	SELECT m.modid,m.modname,m.moddesc,
							COALESCE(o.opt_add,0) as opt_add,
							COALESCE(o.opt_view,0) as opt_view,
							COALESCE(o.opt_download,0) as opt_download,
							COALESCE(opt_delete,0) as opt_delete 
							FROM module m
							LEFT JOIN (SELECT * FROM 1_role_mod_opt
							WHERE roleid='1' 
							AND bid='1') as o
							ON m.modid=o.modid where m.status=1
[2017-06-19 12:22:28]	SQL :	SELECT a.*,f.fieldname FROM 1_role_access a
								LEFT JOIN systemfields f on a.fieldid=f.fieldid
								WHERE a.roleid='1'
								AND a.bid='1'
								AND a.fieldtype='s'
[2017-06-19 12:22:28]	SQL :	SELECT * FROM 1_role_access
								WHERE roleid='1'
								AND bid='1'
							AND fieldtype='c'
[2017-06-19 12:22:28]	SQL :	SELECT a.selfdisable FROM 1_employee a WHERE a.eid='1'
[2017-06-19 12:22:28]	DEBUG :	Language file loaded: language/english/unit_test_lang.php
[2017-06-19 12:22:28]	DEBUG :	Language file loaded: language/english/db_lang.php
[2017-06-19 12:22:28]	DEBUG :	Language file loaded: language/english/ftp_lang.php
[2017-06-19 12:22:28]	DEBUG :	Language file loaded: language/english/menu_lang.php
[2017-06-19 12:22:28]	DEBUG :	Language file loaded: language/english/db_tables_lang.php
[2017-06-19 12:22:28]	DEBUG :	Language file loaded: language/english/form_level_lang.php
[2017-06-19 12:22:28]	DEBUG :	Language file loaded: language/english/form_validation_lang.php
[2017-06-19 12:22:28]	DEBUG :	Language file loaded: language/english/email_lang.php
[2017-06-19 12:22:28]	DEBUG :	Language file loaded: language/english/number_lang.php
[2017-06-19 12:22:28]	DEBUG :	Language file loaded: language/english/layout_lang.php
[2017-06-19 12:22:28]	DEBUG :	Language file loaded: language/english/validation_lang.php
[2017-06-19 12:22:28]	DEBUG :	Language file loaded: language/english/scaffolding_lang.php
[2017-06-19 12:22:28]	DEBUG :	Language file loaded: language/english/date_lang.php
[2017-06-19 12:22:28]	DEBUG :	Language file loaded: language/english/profiler_lang.php
[2017-06-19 12:22:28]	DEBUG :	Language file loaded: language/english/imglib_lang.php
[2017-06-19 12:22:28]	DEBUG :	Language file loaded: language/english/error_msg_lang.php
[2017-06-19 12:22:28]	DEBUG :	Language file loaded: language/english/upload_lang.php
[2017-06-19 12:22:28]	SQL :	SELECT id,category,subcategory,type,status FROM feedback WHERE status=1 
[2017-06-19 12:22:28]	SQL :	SELECT feature_id FROM business_feature WHERE bid='1'
[2017-06-19 12:22:28]	SQL :	SELECT feature_id FROM business_feature WHERE bid='1'
[2017-06-19 12:22:28]	SQL :	SELECT feature_id FROM business_feature WHERE bid='1'
[2017-06-19 12:22:28]	SQL :	SELECT id,type FROM 1_leads_status
[2017-06-19 12:22:28]	SQL :	SELECT design FROM business_lead_use WHERE bid='1' LIMIT 0,1
[2017-06-19 12:22:28]	SQL :	SELECT sid,status FROM 1_support_status
[2017-06-19 12:22:28]	SQL :	SELECT feature_id FROM `business_feature` where bid=1
[2017-06-19 12:22:28]	SQL :	SELECT action_align FROM account_settings WHERE bid='1'
[2017-06-19 12:22:28]	SQL :	SELECT dialstatus FROM 1_callhistory WHERE dialstatus = 'CONNECTING'
[2017-06-19 12:22:28]	SQL :	SELECT FOUND_ROWS() as cnt
[2017-06-19 12:22:28]	SQL :	SELECT del_notify FROM account_settings WHERE bid='1'
[2017-06-19 12:22:28]	DEBUG :	Model Class Initialized
[2017-06-19 12:22:28]	DEBUG :	Database Driver Class Initialized
[2017-06-19 12:22:28]	SQL :	SELECT * FROM 1_user_role
							WHERE roleid='1'
							AND bid='1'
[2017-06-19 12:22:28]	SQL :	SELECT m.modid,m.modname,m.moddesc,
							COALESCE(o.opt_add,0) as opt_add,
							COALESCE(o.opt_view,0) as opt_view,
							COALESCE(o.opt_download,0) as opt_download,
							COALESCE(opt_delete,0) as opt_delete 
							FROM module m
							LEFT JOIN (SELECT * FROM 1_role_mod_opt
							WHERE roleid='1' 
							AND bid='1') as o
							ON m.modid=o.modid where m.status=1
[2017-06-19 12:22:28]	SQL :	SELECT a.*,f.fieldname FROM 1_role_access a
								LEFT JOIN systemfields f on a.fieldid=f.fieldid
								WHERE a.roleid='1'
								AND a.bid='1'
								AND a.fieldtype='s'
[2017-06-19 12:22:28]	SQL :	SELECT * FROM 1_role_access
								WHERE roleid='1'
								AND bid='1'
							AND fieldtype='c'
[2017-06-19 12:22:28]	SQL :	SELECT feature_id FROM `business_feature` where bid=1
[2017-06-19 12:22:28]	SQL :	SELECT * FROM business where pid='1'
[2017-06-19 12:22:28]	DEBUG :	Database Driver Class Initialized
[2017-06-19 12:22:28]	SQL :	SELECT * FROM 1_user_role
							WHERE roleid='1'
							AND bid='1'
[2017-06-19 12:22:28]	SQL :	SELECT m.modid,m.modname,m.moddesc,
							COALESCE(o.opt_add,0) as opt_add,
							COALESCE(o.opt_view,0) as opt_view,
							COALESCE(o.opt_download,0) as opt_download,
							COALESCE(opt_delete,0) as opt_delete 
							FROM module m
							LEFT JOIN (SELECT * FROM 1_role_mod_opt
							WHERE roleid='1' 
							AND bid='1') as o
							ON m.modid=o.modid where m.status=1
[2017-06-19 12:22:28]	SQL :	SELECT a.*,f.fieldname FROM 1_role_access a
								LEFT JOIN systemfields f on a.fieldid=f.fieldid
								WHERE a.roleid='1'
								AND a.bid='1'
								AND a.fieldtype='s'
[2017-06-19 12:22:28]	SQL :	SELECT * FROM 1_role_access
								WHERE roleid='1'
								AND bid='1'
							AND fieldtype='c'
[2017-06-19 12:22:28]	SQL :	UPDATE `call_sessions` SET `last_activity` = '1497853678', `user_data` = 'a:20:{s:3:\"uid\";s:1:\"1\";s:3:\"bid\";s:1:\"1\";s:8:\"username\";s:20:\"ashwini.naidu@vmc.in\";s:3:\"eid\";s:1:\"1\";s:3:\"app\";s:1:\"1\";s:7:\"authkey\";s:17:\"1.1.d886b8e8a0615\";s:9:\"recording\";s:1:\"1\";s:10:\"mcubecalls\";s:1:\"1\";s:7:\"mtdebug\";s:1:\"1\";s:8:\"deviceid\";s:36:\"ffffffff-a4d5-960f-ffff-ffff82ba1723\";s:8:\"language\";s:1:\"1\";s:6:\"status\";s:1:\"1\";s:9:\"appstatus\";s:1:\"1\";s:3:\"pid\";s:1:\"0\";s:3:\"act\";s:1:\"0\";s:16:\"registrationdate\";s:19:\"2014-09-08 16:04:19\";s:10:\"dnd_status\";s:1:\"0\";s:9:\"logged_in\";s:1:\"1\";s:6:\"roleid\";s:1:\"1\";s:4:\"cbid\";s:1:\"1\";}' WHERE `session_id` = '847e9ee4e1543e295a6ddd381996c5e3'
[2017-06-19 12:22:28]	SQL :	SELECT SQL_CALC_FOUND_ROWS g.gid
				  FROM 1_groups g 
				  LEFT JOIN group_rules r on g.rules=r.rulesid 
				  LEFT JOIN 1_employee e on g.eid=e.eid
				  WHERE g.bid='1' 
				  and g.status=0   limit 0,30
[2017-06-19 12:22:28]	SQL :	SELECT FOUND_ROWS() as cnt
[2017-06-19 12:22:28]	DEBUG :	Database Driver Class Initialized
[2017-06-19 12:22:28]	SQL :	SELECT * FROM ( 
				SELECT 's' as type,f.addon,f.fieldid,f.modid,
				f.fieldname,'' as fieldtype,'' as fieldKey,'' as options,
				'' as defaultvalue,f.is_required as is_required,f.is_hidden,COALESCE(l.display_order,0) as display_order,
				l.customlabel,COALESCE(l.show,1) as `show`,COALESCE(l.listing,1) as `listing`
				FROM systemfields f
				LEFT JOIN (
					SELECT * FROM 1_custom_label
					WHERE fieldtype='s'
				) as l
				on (f.fieldid=l.fieldid AND l.modid=f.modid)
				WHERE f.modid='3'  AND f.is_hidden=0   AND f.addon=0 
				UNION
				SELECT 'c' as type,'0',f.fieldid,f.modid,
				f.fieldname,f.fieldtype,f.field_key as fieldKey,f.options,
				f.defaultvalue,f.is_required as is_required,'',COALESCE(l.display_order,0) as display_order,
				l.customlabel,COALESCE(l.show,1) as `show`,COALESCE(l.listing,1) as `listing`
				FROM 1_customfields f
				LEFT JOIN (
					SELECT * FROM 1_custom_label
					WHERE fieldtype='c'
				) as l
				on (f.fieldid=l.fieldid AND l.modid=f.modid)
				WHERE f.modid='3') as t ORDER BY display_order ASC
[2017-06-19 12:22:28]	DEBUG :	Database Driver Class Initialized
[2017-06-19 12:22:28]	SQL :	SELECT g.*,e.empname as eid,sg.groupname as supportgroup,
					  if(g.connectowner=1,'YES','NO') as connectwner,
					  g.eid as epid,if(g.record=1,'YES','NO') as records,
					  if(g.replytocustomer=1,'YES','NO') as replycus,
					  if(g.replytoexecutive=1,'YES','NO') as replyexe,
					  if(g.pincode=1,'YES','NO') as pcode,
					  p.number as prinumber,
					  p.landingnumber as addnumber,(if(g.primary_rule=0,'All',cr.regionname)) as regionname,
					  r.rulename as rules,g.rules as rule
					  FROM 1_groups g 
					  LEFT JOIN group_rules r on g.rules=r.rulesid 
					  LEFT JOIN 1_employee e on g.eid=e.eid 
					  LEFT JOIN 1_support_groups sg on g.supportgrp=sg.gid 
					  LEFT JOIN prinumber p on g.prinumber=p.number
					  LEFT JOIN 1_custom_region cr on g.primary_rule=cr.regionid
					  WHERE g.bid='1' 
					  AND g.gid='13'
[2017-06-19 12:22:28]	SQL :	SELECT * FROM 1_customfieldsvalue 
				WHERE bid='1' 
				AND modid='3'
				AND dataid='13'
[2017-06-19 12:22:28]	DEBUG :	Database Driver Class Initialized
[2017-06-19 12:22:28]	SQL :	SELECT * FROM ( 
				SELECT 's' as type,f.addon,f.fieldid,f.modid,
				f.fieldname,'' as fieldtype,'' as fieldKey,'' as options,
				'' as defaultvalue,f.is_required as is_required,f.is_hidden,COALESCE(l.display_order,0) as display_order,
				l.customlabel,COALESCE(l.show,1) as `show`,COALESCE(l.listing,1) as `listing`
				FROM systemfields f
				LEFT JOIN (
					SELECT * FROM 1_custom_label
					WHERE fieldtype='s'
				) as l
				on (f.fieldid=l.fieldid AND l.modid=f.modid)
				WHERE f.modid='3'  AND f.is_hidden=0   AND f.addon=0 
				UNION
				SELECT 'c' as type,'0',f.fieldid,f.modid,
				f.fieldname,f.fieldtype,f.field_key as fieldKey,f.options,
				f.defaultvalue,f.is_required as is_required,'',COALESCE(l.display_order,0) as display_order,
				l.customlabel,COALESCE(l.show,1) as `show`,COALESCE(l.listing,1) as `listing`
				FROM 1_customfields f
				LEFT JOIN (
					SELECT * FROM 1_custom_label
					WHERE fieldtype='c'
				) as l
				on (f.fieldid=l.fieldid AND l.modid=f.modid)
				WHERE f.modid='3') as t ORDER BY display_order ASC
[2017-06-19 12:22:28]	SQL :	select eid,empname from 1_employee where status=1 ORDER BY empname
[2017-06-19 12:22:28]	DEBUG :	Database Driver Class Initialized
[2017-06-19 12:22:28]	SQL :	SELECT * FROM 1_user_role
							WHERE roleid='1'
							AND bid='1'
[2017-06-19 12:22:28]	SQL :	SELECT m.modid,m.modname,m.moddesc,
							COALESCE(o.opt_add,0) as opt_add,
							COALESCE(o.opt_view,0) as opt_view,
							COALESCE(o.opt_download,0) as opt_download,
							COALESCE(opt_delete,0) as opt_delete 
							FROM module m
							LEFT JOIN (SELECT * FROM 1_role_mod_opt
							WHERE roleid='1' 
							AND bid='1') as o
							ON m.modid=o.modid where m.status=1
[2017-06-19 12:22:28]	SQL :	SELECT a.*,f.fieldname FROM 1_role_access a
								LEFT JOIN systemfields f on a.fieldid=f.fieldid
								WHERE a.roleid='1'
								AND a.bid='1'
								AND a.fieldtype='s'
[2017-06-19 12:22:28]	SQL :	SELECT * FROM 1_role_access
								WHERE roleid='1'
								AND bid='1'
							AND fieldtype='c'
[2017-06-19 12:22:28]	SQL :	SELECT * FROM 1_employee WHERE status='1' ORDER BY empname
[2017-06-19 12:22:28]	DEBUG :	File loaded: /var/www/html/mcnew/system/application/views/mainheader.php
[2017-06-19 12:22:28]	DEBUG :	Database Driver Class Initialized
[2017-06-19 12:22:28]	SQL :	select a.*,e.empname as reporttoname,b.rolename  as role,if(u.recording=1,'Yes','No') as recording
					  from 1_employee a
					  LEFT JOIN  1_employee e on a.reportto=e.eid
					  LEFT JOIN  user u on a.eid=u.eid
					  ,1_user_role b 
					  where a.roleid=b.roleid AND a.eid='1'
[2017-06-19 12:22:28]	SQL :	SELECT * FROM 1_customfieldsvalue 
				WHERE bid='1' 
				AND modid='2'
				AND dataid='1'
[2017-06-19 12:22:28]	DEBUG :	File loaded: /var/www/html/mcnew/system/application/views/leftsidebar.php
[2017-06-19 12:22:28]	DEBUG :	File loaded: /var/www/html/mcnew/system/application/views/list_view.php
[2017-06-19 12:22:28]	DEBUG :	File loaded: /var/www/html/mcnew/system/application/views/footer.php
[2017-06-19 12:22:28]	DEBUG :	Final output sent to browser
[2017-06-19 12:22:28]	DEBUG :	Total execution time: 0.1727
[2017-06-19 12:22:37]	DEBUG :	Config Class Initialized
[2017-06-19 12:22:37]	DEBUG :	Hooks Class Initialized
[2017-06-19 12:22:37]	DEBUG :	URI Class Initialized
[2017-06-19 12:22:37]	DEBUG :	Router Class Initialized
[2017-06-19 12:22:37]	DEBUG :	Output Class Initialized
[2017-06-19 12:22:37]	DEBUG :	Input Class Initialized
[2017-06-19 12:22:37]	DEBUG :	XSS Filtering completed
[2017-06-19 12:22:37]	DEBUG :	XSS Filtering completed
[2017-06-19 12:22:37]	DEBUG :	XSS Filtering completed
[2017-06-19 12:22:37]	DEBUG :	XSS Filtering completed
[2017-06-19 12:22:37]	DEBUG :	Global POST and COOKIE data sanitized
[2017-06-19 12:22:37]	DEBUG :	Language Class Initialized
[2017-06-19 12:22:37]	DEBUG :	Loader Class Initialized
[2017-06-19 12:22:37]	DEBUG :	Helper loaded: url_helper
[2017-06-19 12:22:37]	DEBUG :	Helper loaded: form_helper
[2017-06-19 12:22:37]	DEBUG :	Helper loaded: html_helper
[2017-06-19 12:22:37]	DEBUG :	Helper loaded: email_helper
[2017-06-19 12:22:37]	DEBUG :	Helper loaded: ckeditor_helper
[2017-06-19 12:22:37]	DEBUG :	Helper loaded: mcube_helper
[2017-06-19 12:22:37]	DEBUG :	Database Driver Class Initialized
[2017-06-19 12:22:37]	ERROR :	Severity: 8192  --> mysql_pconnect(): The mysql extension is deprecated and will be removed in the future: use mysqli or PDO instead /var/www/html/mcnew/system/database/drivers/mysql/mysql_driver.php 88
[2017-06-19 12:22:37]	DEBUG :	Session Class Initialized
[2017-06-19 12:22:37]	DEBUG :	Helper loaded: string_helper
[2017-06-19 12:22:37]	DEBUG :	Encrypt Class Initialized
[2017-06-19 12:22:37]	SQL :	SELECT *
FROM (`call_sessions`)
WHERE `session_id` = '847e9ee4e1543e295a6ddd381996c5e3'
AND `user_agent` = 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36'
[2017-06-19 12:22:37]	DEBUG :	Session routines successfully run
[2017-06-19 12:22:37]	DEBUG :	Table Class Initialized
[2017-06-19 12:22:37]	DEBUG :	Pagination Class Initialized
[2017-06-19 12:22:37]	DEBUG :	Config file loaded: config/paypallib_config.php
[2017-06-19 12:22:37]	DEBUG :	Form Validation Class Initialized
[2017-06-19 12:22:37]	DEBUG :	Email Class Initialized
[2017-06-19 12:22:37]	DEBUG :	Language file loaded: language/english/calendar_lang.php
[2017-06-19 12:22:37]	DEBUG :	Calendar Class Initialized
[2017-06-19 12:22:37]	DEBUG :	Controller Class Initialized
[2017-06-19 12:22:37]	DEBUG :	Model Class Initialized
[2017-06-19 12:22:37]	DEBUG :	Model Class Initialized
[2017-06-19 12:22:37]	DEBUG :	Model Class Initialized
[2017-06-19 12:22:37]	DEBUG :	Model Class Initialized
[2017-06-19 12:22:37]	DEBUG :	Model Class Initialized
[2017-06-19 12:22:37]	DEBUG :	Model Class Initialized
[2017-06-19 12:22:37]	DEBUG :	Model Class Initialized
[2017-06-19 12:22:37]	DEBUG :	Model Class Initialized
[2017-06-19 12:22:37]	DEBUG :	Model Class Initialized
[2017-06-19 12:22:37]	DEBUG :	Model Class Initialized
[2017-06-19 12:22:37]	DEBUG :	Model Class Initialized
[2017-06-19 12:22:37]	DEBUG :	Model Class Initialized
[2017-06-19 12:22:37]	DEBUG :	Plugin loaded: to_pdf_pi
[2017-06-19 12:22:37]	SQL :	SELECT u.uid FROM user u
				LEFT JOIN 1_employee e on (e.bid=u.bid AND e.eid=u.eid)
				WHERE e.status='1' AND e.login='1' AND u.status='1' 
				AND u.bid='1' AND u.eid='1'
[2017-06-19 12:22:37]	SQL :	SELECT *
FROM (`language`)
WHERE `langid` = '1'
[2017-06-19 12:22:37]	DEBUG :	Database Driver Class Initialized
[2017-06-19 12:22:37]	SQL :	SELECT roleid FROM 1_employee
							WHERE eid='1'
							AND bid='1'
[2017-06-19 12:22:37]	SQL :	UPDATE `call_sessions` SET `last_activity` = '1497853678', `user_data` = 'a:20:{s:3:\"uid\";s:1:\"1\";s:3:\"bid\";s:1:\"1\";s:8:\"username\";s:20:\"ashwini.naidu@vmc.in\";s:3:\"eid\";s:1:\"1\";s:3:\"app\";s:1:\"1\";s:7:\"authkey\";s:17:\"1.1.d886b8e8a0615\";s:9:\"recording\";s:1:\"1\";s:10:\"mcubecalls\";s:1:\"1\";s:7:\"mtdebug\";s:1:\"1\";s:8:\"deviceid\";s:36:\"ffffffff-a4d5-960f-ffff-ffff82ba1723\";s:8:\"language\";s:1:\"1\";s:6:\"status\";s:1:\"1\";s:9:\"appstatus\";s:1:\"1\";s:3:\"pid\";s:1:\"0\";s:3:\"act\";s:1:\"0\";s:16:\"registrationdate\";s:19:\"2014-09-08 16:04:19\";s:10:\"dnd_status\";s:1:\"0\";s:9:\"logged_in\";s:1:\"1\";s:6:\"roleid\";s:1:\"1\";s:4:\"cbid\";s:1:\"1\";}' WHERE `session_id` = '847e9ee4e1543e295a6ddd381996c5e3'
[2017-06-19 12:22:37]	DEBUG :	Database Driver Class Initialized
[2017-06-19 12:22:37]	SQL :	SELECT * FROM 1_user_role
							WHERE roleid='1'
							AND bid='1'
[2017-06-19 12:22:37]	SQL :	SELECT m.modid,m.modname,m.moddesc,
							COALESCE(o.opt_add,0) as opt_add,
							COALESCE(o.opt_view,0) as opt_view,
							COALESCE(o.opt_download,0) as opt_download,
							COALESCE(opt_delete,0) as opt_delete 
							FROM module m
							LEFT JOIN (SELECT * FROM 1_role_mod_opt
							WHERE roleid='1' 
							AND bid='1') as o
							ON m.modid=o.modid where m.status=1
[2017-06-19 12:22:37]	SQL :	SELECT a.*,f.fieldname FROM 1_role_access a
								LEFT JOIN systemfields f on a.fieldid=f.fieldid
								WHERE a.roleid='1'
								AND a.bid='1'
								AND a.fieldtype='s'
[2017-06-19 12:22:37]	SQL :	SELECT * FROM 1_role_access
								WHERE roleid='1'
								AND bid='1'
							AND fieldtype='c'
[2017-06-19 12:22:37]	SQL :	SELECT a.selfdisable FROM 1_employee a WHERE a.eid='1'
[2017-06-19 12:22:37]	DEBUG :	Language file loaded: language/english/unit_test_lang.php
[2017-06-19 12:22:37]	DEBUG :	Language file loaded: language/english/db_lang.php
[2017-06-19 12:22:37]	DEBUG :	Language file loaded: language/english/ftp_lang.php
[2017-06-19 12:22:37]	DEBUG :	Language file loaded: language/english/menu_lang.php
[2017-06-19 12:22:37]	DEBUG :	Language file loaded: language/english/db_tables_lang.php
[2017-06-19 12:22:37]	DEBUG :	Language file loaded: language/english/form_level_lang.php
[2017-06-19 12:22:37]	DEBUG :	Language file loaded: language/english/form_validation_lang.php
[2017-06-19 12:22:37]	DEBUG :	Language file loaded: language/english/email_lang.php
[2017-06-19 12:22:37]	DEBUG :	Language file loaded: language/english/number_lang.php
[2017-06-19 12:22:37]	DEBUG :	Language file loaded: language/english/layout_lang.php
[2017-06-19 12:22:37]	DEBUG :	Language file loaded: language/english/validation_lang.php
[2017-06-19 12:22:37]	DEBUG :	Language file loaded: language/english/scaffolding_lang.php
[2017-06-19 12:22:37]	DEBUG :	Language file loaded: language/english/date_lang.php
[2017-06-19 12:22:37]	DEBUG :	Language file loaded: language/english/profiler_lang.php
[2017-06-19 12:22:37]	DEBUG :	Language file loaded: language/english/imglib_lang.php
[2017-06-19 12:22:37]	DEBUG :	Language file loaded: language/english/error_msg_lang.php
[2017-06-19 12:22:37]	DEBUG :	Language file loaded: language/english/upload_lang.php
[2017-06-19 12:22:37]	SQL :	SELECT id,category,subcategory,type,status FROM feedback WHERE status=1 
[2017-06-19 12:22:37]	SQL :	SELECT feature_id FROM business_feature WHERE bid='1'
[2017-06-19 12:22:37]	SQL :	SELECT feature_id FROM business_feature WHERE bid='1'
[2017-06-19 12:22:37]	SQL :	SELECT feature_id FROM business_feature WHERE bid='1'
[2017-06-19 12:22:37]	SQL :	SELECT id,type FROM 1_leads_status
[2017-06-19 12:22:37]	SQL :	SELECT design FROM business_lead_use WHERE bid='1' LIMIT 0,1
[2017-06-19 12:22:37]	SQL :	SELECT sid,status FROM 1_support_status
[2017-06-19 12:22:37]	SQL :	SELECT feature_id FROM `business_feature` where bid=1
[2017-06-19 12:22:37]	SQL :	SELECT action_align FROM account_settings WHERE bid='1'
[2017-06-19 12:22:37]	SQL :	SELECT dialstatus FROM 1_callhistory WHERE dialstatus = 'CONNECTING'
[2017-06-19 12:22:37]	SQL :	SELECT FOUND_ROWS() as cnt
[2017-06-19 12:22:37]	SQL :	SELECT del_notify FROM account_settings WHERE bid='1'
[2017-06-19 12:22:37]	DEBUG :	Model Class Initialized
[2017-06-19 12:22:37]	DEBUG :	Database Driver Class Initialized
[2017-06-19 12:22:37]	SQL :	SELECT * FROM 1_user_role
							WHERE roleid='1'
							AND bid='1'
[2017-06-19 12:22:37]	SQL :	SELECT m.modid,m.modname,m.moddesc,
							COALESCE(o.opt_add,0) as opt_add,
							COALESCE(o.opt_view,0) as opt_view,
							COALESCE(o.opt_download,0) as opt_download,
							COALESCE(opt_delete,0) as opt_delete 
							FROM module m
							LEFT JOIN (SELECT * FROM 1_role_mod_opt
							WHERE roleid='1' 
							AND bid='1') as o
							ON m.modid=o.modid where m.status=1
[2017-06-19 12:22:37]	SQL :	SELECT a.*,f.fieldname FROM 1_role_access a
								LEFT JOIN systemfields f on a.fieldid=f.fieldid
								WHERE a.roleid='1'
								AND a.bid='1'
								AND a.fieldtype='s'
[2017-06-19 12:22:37]	SQL :	SELECT * FROM 1_role_access
								WHERE roleid='1'
								AND bid='1'
							AND fieldtype='c'
[2017-06-19 12:22:37]	SQL :	SELECT feature_id FROM `business_feature` where bid=1
[2017-06-19 12:22:37]	SQL :	SELECT * FROM business where pid='1'
[2017-06-19 12:22:37]	SQL :	UPDATE `call_sessions` SET `last_activity` = '1497853678', `user_data` = 'a:20:{s:3:\"uid\";s:1:\"1\";s:3:\"bid\";s:1:\"1\";s:8:\"username\";s:20:\"ashwini.naidu@vmc.in\";s:3:\"eid\";s:1:\"1\";s:3:\"app\";s:1:\"1\";s:7:\"authkey\";s:17:\"1.1.d886b8e8a0615\";s:9:\"recording\";s:1:\"1\";s:10:\"mcubecalls\";s:1:\"1\";s:7:\"mtdebug\";s:1:\"1\";s:8:\"deviceid\";s:36:\"ffffffff-a4d5-960f-ffff-ffff82ba1723\";s:8:\"language\";s:1:\"1\";s:6:\"status\";s:1:\"1\";s:9:\"appstatus\";s:1:\"1\";s:3:\"pid\";s:1:\"0\";s:3:\"act\";s:1:\"0\";s:16:\"registrationdate\";s:19:\"2014-09-08 16:04:19\";s:10:\"dnd_status\";s:1:\"0\";s:9:\"logged_in\";s:1:\"1\";s:6:\"roleid\";s:1:\"1\";s:4:\"cbid\";s:1:\"1\";}' WHERE `session_id` = '847e9ee4e1543e295a6ddd381996c5e3'
[2017-06-19 12:22:37]	DEBUG :	Database Driver Class Initialized
[2017-06-19 12:22:37]	SQL :	SELECT * FROM 1_user_role
							WHERE roleid='1'
							AND bid='1'
[2017-06-19 12:22:37]	SQL :	SELECT m.modid,m.modname,m.moddesc,
							COALESCE(o.opt_add,0) as opt_add,
							COALESCE(o.opt_view,0) as opt_view,
							COALESCE(o.opt_download,0) as opt_download,
							COALESCE(opt_delete,0) as opt_delete 
							FROM module m
							LEFT JOIN (SELECT * FROM 1_role_mod_opt
							WHERE roleid='1' 
							AND bid='1') as o
							ON m.modid=o.modid where m.status=1
[2017-06-19 12:22:37]	SQL :	SELECT a.*,f.fieldname FROM 1_role_access a
								LEFT JOIN systemfields f on a.fieldid=f.fieldid
								WHERE a.roleid='1'
								AND a.bid='1'
								AND a.fieldtype='s'
[2017-06-19 12:22:37]	SQL :	SELECT * FROM 1_role_access
								WHERE roleid='1'
								AND bid='1'
							AND fieldtype='c'
[2017-06-19 12:22:37]	SQL :	SELECT SQL_CALC_FOUND_ROWS g.*
				  FROM 1_groups g 
				  LEFT JOIN group_rules r on g.rules=r.rulesid 
				  LEFT JOIN 1_employee e on g.eid=e.eid
				  LEFT JOIN prinumbers p on (g.prinumber=p.number AND p.bid='1')
				  WHERE g.bid='1' 
				  and g.status!=0  limit 0,20
[2017-06-19 12:22:37]	SQL :	SELECT FOUND_ROWS() as cnt
[2017-06-19 12:22:37]	DEBUG :	Database Driver Class Initialized
[2017-06-19 12:22:37]	SQL :	SELECT * FROM ( 
				SELECT 's' as type,f.addon,f.fieldid,f.modid,
				f.fieldname,'' as fieldtype,'' as fieldKey,'' as options,
				'' as defaultvalue,f.is_required as is_required,f.is_hidden,COALESCE(l.display_order,0) as display_order,
				l.customlabel,COALESCE(l.show,1) as `show`,COALESCE(l.listing,1) as `listing`
				FROM systemfields f
				LEFT JOIN (
					SELECT * FROM 1_custom_label
					WHERE fieldtype='s'
				) as l
				on (f.fieldid=l.fieldid AND l.modid=f.modid)
				WHERE f.modid='3'  AND f.is_hidden=0   AND f.addon=0 
				UNION
				SELECT 'c' as type,'0',f.fieldid,f.modid,
				f.fieldname,f.fieldtype,f.field_key as fieldKey,f.options,
				f.defaultvalue,f.is_required as is_required,'',COALESCE(l.display_order,0) as display_order,
				l.customlabel,COALESCE(l.show,1) as `show`,COALESCE(l.listing,1) as `listing`
				FROM 1_customfields f
				LEFT JOIN (
					SELECT * FROM 1_custom_label
					WHERE fieldtype='c'
				) as l
				on (f.fieldid=l.fieldid AND l.modid=f.modid)
				WHERE f.modid='3') as t ORDER BY display_order ASC
[2017-06-19 12:22:37]	DEBUG :	Database Driver Class Initialized
[2017-06-19 12:22:37]	SQL :	SELECT g.*,e.empname as eid,sg.groupname as supportgroup,
					  if(g.connectowner=1,'YES','NO') as connectwner,
					  g.eid as epid,if(g.record=1,'YES','NO') as records,
					  if(g.replytocustomer=1,'YES','NO') as replycus,
					  if(g.replytoexecutive=1,'YES','NO') as replyexe,
					  if(g.pincode=1,'YES','NO') as pcode,
					  p.number as prinumber,
					  p.landingnumber as addnumber,(if(g.primary_rule=0,'All',cr.regionname)) as regionname,
					  r.rulename as rules,g.rules as rule
					  FROM 1_groups g 
					  LEFT JOIN group_rules r on g.rules=r.rulesid 
					  LEFT JOIN 1_employee e on g.eid=e.eid 
					  LEFT JOIN 1_support_groups sg on g.supportgrp=sg.gid 
					  LEFT JOIN prinumber p on g.prinumber=p.number
					  LEFT JOIN 1_custom_region cr on g.primary_rule=cr.regionid
					  WHERE g.bid='1' 
					  AND g.gid='14'
[2017-06-19 12:22:37]	SQL :	SELECT * FROM 1_customfieldsvalue 
				WHERE bid='1' 
				AND modid='3'
				AND dataid='14'
[2017-06-19 12:22:37]	SQL :	SELECT COALESCE(COUNT(callid), 0) AS cnt
							FROM 1_callhistory h 
							WHERE (h.`starttime` >= DATE_SUB(CURDATE(), INTERVAL 6 DAY)) AND h.gid = 14 GROUP BY DAY(h.starttime)
[2017-06-19 12:22:37]	DEBUG :	Database Driver Class Initialized
[2017-06-19 12:22:38]	SQL :	SELECT g.*,e.empname as eid,sg.groupname as supportgroup,
					  if(g.connectowner=1,'YES','NO') as connectwner,
					  g.eid as epid,if(g.record=1,'YES','NO') as records,
					  if(g.replytocustomer=1,'YES','NO') as replycus,
					  if(g.replytoexecutive=1,'YES','NO') as replyexe,
					  if(g.pincode=1,'YES','NO') as pcode,
					  p.number as prinumber,
					  p.landingnumber as addnumber,(if(g.primary_rule=0,'All',cr.regionname)) as regionname,
					  r.rulename as rules,g.rules as rule
					  FROM 1_groups g 
					  LEFT JOIN group_rules r on g.rules=r.rulesid 
					  LEFT JOIN 1_employee e on g.eid=e.eid 
					  LEFT JOIN 1_support_groups sg on g.supportgrp=sg.gid 
					  LEFT JOIN prinumber p on g.prinumber=p.number
					  LEFT JOIN 1_custom_region cr on g.primary_rule=cr.regionid
					  WHERE g.bid='1' 
					  AND g.gid='15'
[2017-06-19 12:22:38]	SQL :	SELECT * FROM 1_customfieldsvalue 
				WHERE bid='1' 
				AND modid='3'
				AND dataid='15'
[2017-06-19 12:22:38]	SQL :	SELECT COALESCE(COUNT(callid), 0) AS cnt
							FROM 1_callhistory h 
							WHERE (h.`starttime` >= DATE_SUB(CURDATE(), INTERVAL 6 DAY)) AND h.gid = 15 GROUP BY DAY(h.starttime)
[2017-06-19 12:22:38]	SQL :	SELECT GROUP_CONCAT(empname SEPARATOR ',') as empname FROM 1_employee WHERE eid IN(58 )
[2017-06-19 12:22:38]	DEBUG :	Database Driver Class Initialized
[2017-06-19 12:22:38]	SQL :	SELECT g.*,e.empname as eid,sg.groupname as supportgroup,
					  if(g.connectowner=1,'YES','NO') as connectwner,
					  g.eid as epid,if(g.record=1,'YES','NO') as records,
					  if(g.replytocustomer=1,'YES','NO') as replycus,
					  if(g.replytoexecutive=1,'YES','NO') as replyexe,
					  if(g.pincode=1,'YES','NO') as pcode,
					  p.number as prinumber,
					  p.landingnumber as addnumber,(if(g.primary_rule=0,'All',cr.regionname)) as regionname,
					  r.rulename as rules,g.rules as rule
					  FROM 1_groups g 
					  LEFT JOIN group_rules r on g.rules=r.rulesid 
					  LEFT JOIN 1_employee e on g.eid=e.eid 
					  LEFT JOIN 1_support_groups sg on g.supportgrp=sg.gid 
					  LEFT JOIN prinumber p on g.prinumber=p.number
					  LEFT JOIN 1_custom_region cr on g.primary_rule=cr.regionid
					  WHERE g.bid='1' 
					  AND g.gid='16'
[2017-06-19 12:22:38]	SQL :	SELECT * FROM 1_customfieldsvalue 
				WHERE bid='1' 
				AND modid='3'
				AND dataid='16'
[2017-06-19 12:22:38]	SQL :	SELECT COALESCE(COUNT(callid), 0) AS cnt
							FROM 1_callhistory h 
							WHERE (h.`starttime` >= DATE_SUB(CURDATE(), INTERVAL 6 DAY)) AND h.gid = 16 GROUP BY DAY(h.starttime)
[2017-06-19 12:22:38]	DEBUG :	Database Driver Class Initialized
[2017-06-19 12:22:38]	SQL :	SELECT g.*,e.empname as eid,sg.groupname as supportgroup,
					  if(g.connectowner=1,'YES','NO') as connectwner,
					  g.eid as epid,if(g.record=1,'YES','NO') as records,
					  if(g.replytocustomer=1,'YES','NO') as replycus,
					  if(g.replytoexecutive=1,'YES','NO') as replyexe,
					  if(g.pincode=1,'YES','NO') as pcode,
					  p.number as prinumber,
					  p.landingnumber as addnumber,(if(g.primary_rule=0,'All',cr.regionname)) as regionname,
					  r.rulename as rules,g.rules as rule
					  FROM 1_groups g 
					  LEFT JOIN group_rules r on g.rules=r.rulesid 
					  LEFT JOIN 1_employee e on g.eid=e.eid 
					  LEFT JOIN 1_support_groups sg on g.supportgrp=sg.gid 
					  LEFT JOIN prinumber p on g.prinumber=p.number
					  LEFT JOIN 1_custom_region cr on g.primary_rule=cr.regionid
					  WHERE g.bid='1' 
					  AND g.gid='17'
[2017-06-19 12:22:38]	SQL :	SELECT * FROM 1_customfieldsvalue 
				WHERE bid='1' 
				AND modid='3'
				AND dataid='17'
[2017-06-19 12:22:38]	SQL :	SELECT COALESCE(COUNT(callid), 0) AS cnt
							FROM 1_callhistory h 
							WHERE (h.`starttime` >= DATE_SUB(CURDATE(), INTERVAL 6 DAY)) AND h.gid = 17 GROUP BY DAY(h.starttime)
[2017-06-19 12:22:38]	DEBUG :	Database Driver Class Initialized
[2017-06-19 12:22:38]	SQL :	SELECT * FROM ( 
				SELECT 's' as type,f.addon,f.fieldid,f.modid,
				f.fieldname,'' as fieldtype,'' as fieldKey,'' as options,
				'' as defaultvalue,f.is_required as is_required,f.is_hidden,COALESCE(l.display_order,0) as display_order,
				l.customlabel,COALESCE(l.show,1) as `show`,COALESCE(l.listing,1) as `listing`
				FROM systemfields f
				LEFT JOIN (
					SELECT * FROM 1_custom_label
					WHERE fieldtype='s'
				) as l
				on (f.fieldid=l.fieldid AND l.modid=f.modid)
				WHERE f.modid='3'  AND f.is_hidden=0   AND f.addon=0 
				UNION
				SELECT 'c' as type,'0',f.fieldid,f.modid,
				f.fieldname,f.fieldtype,f.field_key as fieldKey,f.options,
				f.defaultvalue,f.is_required as is_required,'',COALESCE(l.display_order,0) as display_order,
				l.customlabel,COALESCE(l.show,1) as `show`,COALESCE(l.listing,1) as `listing`
				FROM 1_customfields f
				LEFT JOIN (
					SELECT * FROM 1_custom_label
					WHERE fieldtype='c'
				) as l
				on (f.fieldid=l.fieldid AND l.modid=f.modid)
				WHERE f.modid='3') as t ORDER BY display_order ASC
[2017-06-19 12:22:38]	SQL :	select eid,empname from 1_employee where status=1 ORDER BY empname
[2017-06-19 12:22:38]	DEBUG :	Database Driver Class Initialized
[2017-06-19 12:22:38]	SQL :	SELECT * FROM 1_user_role
							WHERE roleid='1'
							AND bid='1'
[2017-06-19 12:22:38]	SQL :	SELECT m.modid,m.modname,m.moddesc,
							COALESCE(o.opt_add,0) as opt_add,
							COALESCE(o.opt_view,0) as opt_view,
							COALESCE(o.opt_download,0) as opt_download,
							COALESCE(opt_delete,0) as opt_delete 
							FROM module m
							LEFT JOIN (SELECT * FROM 1_role_mod_opt
							WHERE roleid='1' 
							AND bid='1') as o
							ON m.modid=o.modid where m.status=1
[2017-06-19 12:22:38]	SQL :	SELECT a.*,f.fieldname FROM 1_role_access a
								LEFT JOIN systemfields f on a.fieldid=f.fieldid
								WHERE a.roleid='1'
								AND a.bid='1'
								AND a.fieldtype='s'
[2017-06-19 12:22:38]	SQL :	SELECT * FROM 1_role_access
								WHERE roleid='1'
								AND bid='1'
							AND fieldtype='c'
[2017-06-19 12:22:38]	SQL :	SELECT * FROM 1_employee WHERE status='1' ORDER BY empname
[2017-06-19 12:22:38]	DEBUG :	File loaded: /var/www/html/mcnew/system/application/views/mainheader.php
[2017-06-19 12:22:38]	DEBUG :	Database Driver Class Initialized
[2017-06-19 12:22:38]	SQL :	select a.*,e.empname as reporttoname,b.rolename  as role,if(u.recording=1,'Yes','No') as recording
					  from 1_employee a
					  LEFT JOIN  1_employee e on a.reportto=e.eid
					  LEFT JOIN  user u on a.eid=u.eid
					  ,1_user_role b 
					  where a.roleid=b.roleid AND a.eid='1'
[2017-06-19 12:22:38]	SQL :	SELECT * FROM 1_customfieldsvalue 
				WHERE bid='1' 
				AND modid='2'
				AND dataid='1'
[2017-06-19 12:22:38]	DEBUG :	File loaded: /var/www/html/mcnew/system/application/views/leftsidebar.php
[2017-06-19 12:22:38]	DEBUG :	File loaded: /var/www/html/mcnew/system/application/views/list_view.php
[2017-06-19 12:22:38]	DEBUG :	File loaded: /var/www/html/mcnew/system/application/views/footer.php
[2017-06-19 12:22:38]	DEBUG :	Final output sent to browser
[2017-06-19 12:22:38]	DEBUG :	Total execution time: 0.1766
[2017-06-19 12:22:43]	DEBUG :	Config Class Initialized
[2017-06-19 12:22:43]	DEBUG :	Hooks Class Initialized
[2017-06-19 12:22:43]	DEBUG :	URI Class Initialized
[2017-06-19 12:22:43]	DEBUG :	Router Class Initialized
[2017-06-19 12:22:43]	DEBUG :	Output Class Initialized
[2017-06-19 12:22:43]	DEBUG :	Input Class Initialized
[2017-06-19 12:22:43]	DEBUG :	XSS Filtering completed
[2017-06-19 12:22:43]	DEBUG :	XSS Filtering completed
[2017-06-19 12:22:43]	DEBUG :	XSS Filtering completed
[2017-06-19 12:22:43]	DEBUG :	XSS Filtering completed
[2017-06-19 12:22:43]	DEBUG :	Global POST and COOKIE data sanitized
[2017-06-19 12:22:43]	DEBUG :	Language Class Initialized
[2017-06-19 12:22:43]	DEBUG :	Loader Class Initialized
[2017-06-19 12:22:43]	DEBUG :	Helper loaded: url_helper
[2017-06-19 12:22:43]	DEBUG :	Helper loaded: form_helper
[2017-06-19 12:22:43]	DEBUG :	Helper loaded: html_helper
[2017-06-19 12:22:43]	DEBUG :	Helper loaded: email_helper
[2017-06-19 12:22:43]	DEBUG :	Helper loaded: ckeditor_helper
[2017-06-19 12:22:43]	DEBUG :	Helper loaded: mcube_helper
[2017-06-19 12:22:43]	DEBUG :	Database Driver Class Initialized
[2017-06-19 12:22:43]	ERROR :	Severity: 8192  --> mysql_pconnect(): The mysql extension is deprecated and will be removed in the future: use mysqli or PDO instead /var/www/html/mcnew/system/database/drivers/mysql/mysql_driver.php 88
[2017-06-19 12:22:43]	DEBUG :	Session Class Initialized
[2017-06-19 12:22:43]	DEBUG :	Helper loaded: string_helper
[2017-06-19 12:22:43]	DEBUG :	Encrypt Class Initialized
[2017-06-19 12:22:43]	SQL :	SELECT *
FROM (`call_sessions`)
WHERE `session_id` = '847e9ee4e1543e295a6ddd381996c5e3'
AND `user_agent` = 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36'
[2017-06-19 12:22:43]	DEBUG :	Session routines successfully run
[2017-06-19 12:22:43]	DEBUG :	Table Class Initialized
[2017-06-19 12:22:43]	DEBUG :	Pagination Class Initialized
[2017-06-19 12:22:43]	DEBUG :	Config file loaded: config/paypallib_config.php
[2017-06-19 12:22:43]	DEBUG :	Form Validation Class Initialized
[2017-06-19 12:22:43]	DEBUG :	Email Class Initialized
[2017-06-19 12:22:43]	DEBUG :	Language file loaded: language/english/calendar_lang.php
[2017-06-19 12:22:43]	DEBUG :	Calendar Class Initialized
[2017-06-19 12:22:43]	DEBUG :	Controller Class Initialized
[2017-06-19 12:22:43]	DEBUG :	Model Class Initialized
[2017-06-19 12:22:43]	DEBUG :	Model Class Initialized
[2017-06-19 12:22:43]	DEBUG :	Model Class Initialized
[2017-06-19 12:22:43]	DEBUG :	Model Class Initialized
[2017-06-19 12:22:43]	DEBUG :	Model Class Initialized
[2017-06-19 12:22:43]	DEBUG :	Model Class Initialized
[2017-06-19 12:22:43]	DEBUG :	Model Class Initialized
[2017-06-19 12:22:43]	DEBUG :	Model Class Initialized
[2017-06-19 12:22:43]	DEBUG :	Model Class Initialized
[2017-06-19 12:22:43]	DEBUG :	Model Class Initialized
[2017-06-19 12:22:43]	DEBUG :	Model Class Initialized
[2017-06-19 12:22:43]	DEBUG :	Model Class Initialized
[2017-06-19 12:22:43]	DEBUG :	Plugin loaded: to_pdf_pi
[2017-06-19 12:22:43]	SQL :	SELECT u.uid FROM user u
				LEFT JOIN 1_employee e on (e.bid=u.bid AND e.eid=u.eid)
				WHERE e.status='1' AND e.login='1' AND u.status='1' 
				AND u.bid='1' AND u.eid='1'
[2017-06-19 12:22:43]	SQL :	SELECT *
FROM (`language`)
WHERE `langid` = '1'
[2017-06-19 12:22:43]	DEBUG :	Database Driver Class Initialized
[2017-06-19 12:22:43]	SQL :	SELECT roleid FROM 1_employee
							WHERE eid='1'
							AND bid='1'
[2017-06-19 12:22:43]	SQL :	UPDATE `call_sessions` SET `last_activity` = '1497853678', `user_data` = 'a:20:{s:3:\"uid\";s:1:\"1\";s:3:\"bid\";s:1:\"1\";s:8:\"username\";s:20:\"ashwini.naidu@vmc.in\";s:3:\"eid\";s:1:\"1\";s:3:\"app\";s:1:\"1\";s:7:\"authkey\";s:17:\"1.1.d886b8e8a0615\";s:9:\"recording\";s:1:\"1\";s:10:\"mcubecalls\";s:1:\"1\";s:7:\"mtdebug\";s:1:\"1\";s:8:\"deviceid\";s:36:\"ffffffff-a4d5-960f-ffff-ffff82ba1723\";s:8:\"language\";s:1:\"1\";s:6:\"status\";s:1:\"1\";s:9:\"appstatus\";s:1:\"1\";s:3:\"pid\";s:1:\"0\";s:3:\"act\";s:1:\"0\";s:16:\"registrationdate\";s:19:\"2014-09-08 16:04:19\";s:10:\"dnd_status\";s:1:\"0\";s:9:\"logged_in\";s:1:\"1\";s:6:\"roleid\";s:1:\"1\";s:4:\"cbid\";s:1:\"1\";}' WHERE `session_id` = '847e9ee4e1543e295a6ddd381996c5e3'
[2017-06-19 12:22:43]	DEBUG :	Database Driver Class Initialized
[2017-06-19 12:22:43]	SQL :	SELECT * FROM 1_user_role
							WHERE roleid='1'
							AND bid='1'
[2017-06-19 12:22:43]	SQL :	SELECT m.modid,m.modname,m.moddesc,
							COALESCE(o.opt_add,0) as opt_add,
							COALESCE(o.opt_view,0) as opt_view,
							COALESCE(o.opt_download,0) as opt_download,
							COALESCE(opt_delete,0) as opt_delete 
							FROM module m
							LEFT JOIN (SELECT * FROM 1_role_mod_opt
							WHERE roleid='1' 
							AND bid='1') as o
							ON m.modid=o.modid where m.status=1
[2017-06-19 12:22:43]	SQL :	SELECT a.*,f.fieldname FROM 1_role_access a
								LEFT JOIN systemfields f on a.fieldid=f.fieldid
								WHERE a.roleid='1'
								AND a.bid='1'
								AND a.fieldtype='s'
[2017-06-19 12:22:43]	SQL :	SELECT * FROM 1_role_access
								WHERE roleid='1'
								AND bid='1'
							AND fieldtype='c'
[2017-06-19 12:22:43]	SQL :	SELECT a.selfdisable FROM 1_employee a WHERE a.eid='1'
[2017-06-19 12:22:43]	DEBUG :	Language file loaded: language/english/unit_test_lang.php
[2017-06-19 12:22:43]	DEBUG :	Language file loaded: language/english/db_lang.php
[2017-06-19 12:22:43]	DEBUG :	Language file loaded: language/english/ftp_lang.php
[2017-06-19 12:22:43]	DEBUG :	Language file loaded: language/english/menu_lang.php
[2017-06-19 12:22:43]	DEBUG :	Language file loaded: language/english/db_tables_lang.php
[2017-06-19 12:22:43]	DEBUG :	Language file loaded: language/english/form_level_lang.php
[2017-06-19 12:22:43]	DEBUG :	Language file loaded: language/english/form_validation_lang.php
[2017-06-19 12:22:43]	DEBUG :	Language file loaded: language/english/email_lang.php
[2017-06-19 12:22:43]	DEBUG :	Language file loaded: language/english/number_lang.php
[2017-06-19 12:22:43]	DEBUG :	Language file loaded: language/english/layout_lang.php
[2017-06-19 12:22:43]	DEBUG :	Language file loaded: language/english/validation_lang.php
[2017-06-19 12:22:43]	DEBUG :	Language file loaded: language/english/scaffolding_lang.php
[2017-06-19 12:22:43]	DEBUG :	Language file loaded: language/english/date_lang.php
[2017-06-19 12:22:43]	DEBUG :	Language file loaded: language/english/profiler_lang.php
[2017-06-19 12:22:43]	DEBUG :	Language file loaded: language/english/imglib_lang.php
[2017-06-19 12:22:43]	DEBUG :	Language file loaded: language/english/error_msg_lang.php
[2017-06-19 12:22:43]	DEBUG :	Language file loaded: language/english/upload_lang.php
[2017-06-19 12:22:43]	SQL :	SELECT id,category,subcategory,type,status FROM feedback WHERE status=1 
[2017-06-19 12:22:43]	SQL :	SELECT feature_id FROM business_feature WHERE bid='1'
[2017-06-19 12:22:43]	SQL :	SELECT feature_id FROM business_feature WHERE bid='1'
[2017-06-19 12:22:43]	SQL :	SELECT feature_id FROM business_feature WHERE bid='1'
[2017-06-19 12:22:43]	SQL :	SELECT id,type FROM 1_leads_status
[2017-06-19 12:22:43]	SQL :	SELECT design FROM business_lead_use WHERE bid='1' LIMIT 0,1
[2017-06-19 12:22:43]	SQL :	SELECT sid,status FROM 1_support_status
[2017-06-19 12:22:43]	SQL :	SELECT feature_id FROM `business_feature` where bid=1
[2017-06-19 12:22:43]	SQL :	SELECT action_align FROM account_settings WHERE bid='1'
[2017-06-19 12:22:43]	SQL :	SELECT dialstatus FROM 1_callhistory WHERE dialstatus = 'CONNECTING'
[2017-06-19 12:22:43]	SQL :	SELECT FOUND_ROWS() as cnt
[2017-06-19 12:22:43]	SQL :	SELECT del_notify FROM account_settings WHERE bid='1'
[2017-06-19 12:22:43]	DEBUG :	Model Class Initialized
[2017-06-19 12:22:43]	DEBUG :	Database Driver Class Initialized
[2017-06-19 12:22:43]	SQL :	SELECT * FROM 1_user_role
							WHERE roleid='1'
							AND bid='1'
[2017-06-19 12:22:43]	SQL :	SELECT m.modid,m.modname,m.moddesc,
							COALESCE(o.opt_add,0) as opt_add,
							COALESCE(o.opt_view,0) as opt_view,
							COALESCE(o.opt_download,0) as opt_download,
							COALESCE(opt_delete,0) as opt_delete 
							FROM module m
							LEFT JOIN (SELECT * FROM 1_role_mod_opt
							WHERE roleid='1' 
							AND bid='1') as o
							ON m.modid=o.modid where m.status=1
[2017-06-19 12:22:43]	SQL :	SELECT a.*,f.fieldname FROM 1_role_access a
								LEFT JOIN systemfields f on a.fieldid=f.fieldid
								WHERE a.roleid='1'
								AND a.bid='1'
								AND a.fieldtype='s'
[2017-06-19 12:22:43]	SQL :	SELECT * FROM 1_role_access
								WHERE roleid='1'
								AND bid='1'
							AND fieldtype='c'
[2017-06-19 12:22:43]	SQL :	SELECT feature_id FROM `business_feature` where bid=1
[2017-06-19 12:22:43]	SQL :	SELECT feature_id FROM `business_feature` where bid=1
[2017-06-19 12:22:43]	SQL :	SELECT * FROM business where pid='1'
[2017-06-19 12:22:43]	DEBUG :	Database Driver Class Initialized
[2017-06-19 12:22:43]	SQL :	SELECT * FROM ( 
				SELECT 's' as type,f.addon,f.fieldid,f.modid,
				f.fieldname,'' as fieldtype,'' as fieldKey,'' as options,
				'' as defaultvalue,f.is_required as is_required,f.is_hidden,COALESCE(l.display_order,0) as display_order,
				l.customlabel,COALESCE(l.show,1) as `show`,COALESCE(l.listing,1) as `listing`
				FROM systemfields f
				LEFT JOIN (
					SELECT * FROM 1_custom_label
					WHERE fieldtype='s'
				) as l
				on (f.fieldid=l.fieldid AND l.modid=f.modid)
				WHERE f.modid='3'  AND f.is_hidden=0 
				UNION
				SELECT 'c' as type,'0',f.fieldid,f.modid,
				f.fieldname,f.fieldtype,f.field_key as fieldKey,f.options,
				f.defaultvalue,f.is_required as is_required,'',COALESCE(l.display_order,0) as display_order,
				l.customlabel,COALESCE(l.show,1) as `show`,COALESCE(l.listing,1) as `listing`
				FROM 1_customfields f
				LEFT JOIN (
					SELECT * FROM 1_custom_label
					WHERE fieldtype='c'
				) as l
				on (f.fieldid=l.fieldid AND l.modid=f.modid)
				WHERE f.modid='3') as t ORDER BY display_order ASC
[2017-06-19 12:22:43]	DEBUG :	Database Driver Class Initialized
[2017-06-19 12:22:43]	SQL :	SELECT g.*,e.empname as eid,sg.groupname as supportgroup,
					  if(g.connectowner=1,'YES','NO') as connectwner,
					  g.eid as epid,if(g.record=1,'YES','NO') as records,
					  if(g.replytocustomer=1,'YES','NO') as replycus,
					  if(g.replytoexecutive=1,'YES','NO') as replyexe,
					  if(g.pincode=1,'YES','NO') as pcode,
					  p.number as prinumber,
					  p.landingnumber as addnumber,(if(g.primary_rule=0,'All',cr.regionname)) as regionname,
					  r.rulename as rules,g.rules as rule
					  FROM 1_groups g 
					  LEFT JOIN group_rules r on g.rules=r.rulesid 
					  LEFT JOIN 1_employee e on g.eid=e.eid 
					  LEFT JOIN 1_support_groups sg on g.supportgrp=sg.gid 
					  LEFT JOIN prinumber p on g.prinumber=p.number
					  LEFT JOIN 1_custom_region cr on g.primary_rule=cr.regionid
					  WHERE g.bid='1' 
					  AND g.gid='14'
[2017-06-19 12:22:43]	SQL :	SELECT * FROM 1_customfieldsvalue 
				WHERE bid='1' 
				AND modid='3'
				AND dataid='14'
[2017-06-19 12:22:43]	SQL :	SELECT s.fieldname
							FROM systemfields s
							LEFT JOIN `features` f on s.addon=f.feature_id
							LEFT JOIN business_packageaddons b on (f.feature_id=b.feature_id AND b.number='200048')
							WHERE s.modid='3' AND s.addon!=0 AND b.number is null
[2017-06-19 12:22:43]	SQL :	SELECT feature_id FROM business_feature WHERE bid='1'
[2017-06-19 12:22:43]	SQL :	SELECT l.region, p.bid,l.number FROM landingnumbers l 
		                        LEFT JOIN prinumbers p ON p.landingnumber=l.number 
		                        WHERE p.bid='1' 
		                        AND p.status = '0' AND p.type = '0' AND l.module_id = '1'
		                         
[2017-06-19 12:22:43]	SQL :	SELECT p.status,p.number,p.landingnumber from prinumbers p
								LEFT JOIN landingnumbers l on l.pri=p.pri
								WHERE p.bid='1' 
								AND p.ntype=0 AND l.module_id='1'
								
[2017-06-19 12:22:43]	SQL :	SELECT * FROM group_rules
[2017-06-19 12:22:43]	SQL :	select eid,empname from 1_employee where status=1 ORDER BY empname
[2017-06-19 12:22:43]	DEBUG :	Database Driver Class Initialized
[2017-06-19 12:22:43]	SQL :	SELECT * FROM 1_user_role
							WHERE roleid='1'
							AND bid='1'
[2017-06-19 12:22:43]	SQL :	SELECT m.modid,m.modname,m.moddesc,
							COALESCE(o.opt_add,0) as opt_add,
							COALESCE(o.opt_view,0) as opt_view,
							COALESCE(o.opt_download,0) as opt_download,
							COALESCE(opt_delete,0) as opt_delete 
							FROM module m
							LEFT JOIN (SELECT * FROM 1_role_mod_opt
							WHERE roleid='1' 
							AND bid='1') as o
							ON m.modid=o.modid where m.status=1
[2017-06-19 12:22:43]	SQL :	SELECT a.*,f.fieldname FROM 1_role_access a
								LEFT JOIN systemfields f on a.fieldid=f.fieldid
								WHERE a.roleid='1'
								AND a.bid='1'
								AND a.fieldtype='s'
[2017-06-19 12:22:43]	SQL :	SELECT * FROM 1_role_access
								WHERE roleid='1'
								AND bid='1'
							AND fieldtype='c'
[2017-06-19 12:22:43]	SQL :	SELECT * FROM 1_employee WHERE status='1' ORDER BY empname
[2017-06-19 12:22:43]	SQL :	SELECT * FROM 1_custom_region
[2017-06-19 12:22:43]	SQL :	SELECT support FROM `prinumbers` WHERE bid='1' 
[2017-06-19 12:22:43]	SQL :	SELECT * FROM 1_support_groups WHERE status=1
[2017-06-19 12:22:43]	SQL :	select eid,empname from 1_employee where status=1 ORDER BY empname
[2017-06-19 12:22:43]	DEBUG :	Database Driver Class Initialized
[2017-06-19 12:22:43]	SQL :	SELECT * FROM 1_user_role
							WHERE roleid='1'
							AND bid='1'
[2017-06-19 12:22:43]	SQL :	SELECT m.modid,m.modname,m.moddesc,
							COALESCE(o.opt_add,0) as opt_add,
							COALESCE(o.opt_view,0) as opt_view,
							COALESCE(o.opt_download,0) as opt_download,
							COALESCE(opt_delete,0) as opt_delete 
							FROM module m
							LEFT JOIN (SELECT * FROM 1_role_mod_opt
							WHERE roleid='1' 
							AND bid='1') as o
							ON m.modid=o.modid where m.status=1
[2017-06-19 12:22:43]	SQL :	SELECT a.*,f.fieldname FROM 1_role_access a
								LEFT JOIN systemfields f on a.fieldid=f.fieldid
								WHERE a.roleid='1'
								AND a.bid='1'
								AND a.fieldtype='s'
[2017-06-19 12:22:43]	SQL :	SELECT * FROM 1_role_access
								WHERE roleid='1'
								AND bid='1'
							AND fieldtype='c'
[2017-06-19 12:22:43]	SQL :	SELECT * FROM 1_employee WHERE status='1' ORDER BY empname
[2017-06-19 12:22:43]	DEBUG :	File loaded: /var/www/html/mcnew/system/application/views/mainheader.php
[2017-06-19 12:22:43]	DEBUG :	Database Driver Class Initialized
[2017-06-19 12:22:43]	SQL :	select a.*,e.empname as reporttoname,b.rolename  as role,if(u.recording=1,'Yes','No') as recording
					  from 1_employee a
					  LEFT JOIN  1_employee e on a.reportto=e.eid
					  LEFT JOIN  user u on a.eid=u.eid
					  ,1_user_role b 
					  where a.roleid=b.roleid AND a.eid='1'
[2017-06-19 12:22:43]	SQL :	SELECT * FROM 1_customfieldsvalue 
				WHERE bid='1' 
				AND modid='2'
				AND dataid='1'
[2017-06-19 12:22:43]	DEBUG :	File loaded: /var/www/html/mcnew/system/application/views/leftsidebar.php
[2017-06-19 12:22:43]	DEBUG :	File loaded: /var/www/html/mcnew/system/application/views/form_view.php
[2017-06-19 12:22:43]	DEBUG :	File loaded: /var/www/html/mcnew/system/application/views/footer.php
[2017-06-19 12:22:43]	DEBUG :	Final output sent to browser
[2017-06-19 12:22:43]	DEBUG :	Total execution time: 0.1379
[2017-06-19 12:22:49]	DEBUG :	Config Class Initialized
[2017-06-19 12:22:49]	DEBUG :	Hooks Class Initialized
[2017-06-19 12:22:49]	DEBUG :	URI Class Initialized
[2017-06-19 12:22:49]	DEBUG :	Router Class Initialized
[2017-06-19 12:22:49]	DEBUG :	Output Class Initialized
[2017-06-19 12:22:49]	DEBUG :	Input Class Initialized
[2017-06-19 12:22:49]	DEBUG :	XSS Filtering completed
[2017-06-19 12:22:49]	DEBUG :	XSS Filtering completed
[2017-06-19 12:22:49]	DEBUG :	XSS Filtering completed
[2017-06-19 12:22:49]	DEBUG :	XSS Filtering completed
[2017-06-19 12:22:49]	DEBUG :	Global POST and COOKIE data sanitized
[2017-06-19 12:22:49]	DEBUG :	Language Class Initialized
[2017-06-19 12:22:49]	DEBUG :	Loader Class Initialized
[2017-06-19 12:22:49]	DEBUG :	Helper loaded: url_helper
[2017-06-19 12:22:49]	DEBUG :	Helper loaded: form_helper
[2017-06-19 12:22:49]	DEBUG :	Helper loaded: html_helper
[2017-06-19 12:22:49]	DEBUG :	Helper loaded: email_helper
[2017-06-19 12:22:49]	DEBUG :	Helper loaded: ckeditor_helper
[2017-06-19 12:22:49]	DEBUG :	Helper loaded: mcube_helper
[2017-06-19 12:22:49]	DEBUG :	Database Driver Class Initialized
[2017-06-19 12:22:49]	ERROR :	Severity: 8192  --> mysql_pconnect(): The mysql extension is deprecated and will be removed in the future: use mysqli or PDO instead /var/www/html/mcnew/system/database/drivers/mysql/mysql_driver.php 88
[2017-06-19 12:22:49]	DEBUG :	Session Class Initialized
[2017-06-19 12:22:49]	DEBUG :	Helper loaded: string_helper
[2017-06-19 12:22:49]	DEBUG :	Encrypt Class Initialized
[2017-06-19 12:22:49]	SQL :	SELECT *
FROM (`call_sessions`)
WHERE `session_id` = '847e9ee4e1543e295a6ddd381996c5e3'
AND `user_agent` = 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36'
[2017-06-19 12:22:49]	DEBUG :	Session routines successfully run
[2017-06-19 12:22:49]	DEBUG :	Table Class Initialized
[2017-06-19 12:22:49]	DEBUG :	Pagination Class Initialized
[2017-06-19 12:22:49]	DEBUG :	Config file loaded: config/paypallib_config.php
[2017-06-19 12:22:49]	DEBUG :	Form Validation Class Initialized
[2017-06-19 12:22:49]	DEBUG :	Email Class Initialized
[2017-06-19 12:22:49]	DEBUG :	Language file loaded: language/english/calendar_lang.php
[2017-06-19 12:22:49]	DEBUG :	Calendar Class Initialized
[2017-06-19 12:22:49]	DEBUG :	Controller Class Initialized
[2017-06-19 12:22:49]	DEBUG :	Model Class Initialized
[2017-06-19 12:22:49]	DEBUG :	Model Class Initialized
[2017-06-19 12:22:49]	DEBUG :	Model Class Initialized
[2017-06-19 12:22:49]	DEBUG :	Model Class Initialized
[2017-06-19 12:22:49]	DEBUG :	Model Class Initialized
[2017-06-19 12:22:49]	DEBUG :	Model Class Initialized
[2017-06-19 12:22:49]	DEBUG :	Model Class Initialized
[2017-06-19 12:22:49]	DEBUG :	Model Class Initialized
[2017-06-19 12:22:49]	DEBUG :	Model Class Initialized
[2017-06-19 12:22:49]	DEBUG :	Model Class Initialized
[2017-06-19 12:22:49]	DEBUG :	Model Class Initialized
[2017-06-19 12:22:49]	DEBUG :	Model Class Initialized
[2017-06-19 12:22:49]	DEBUG :	Plugin loaded: to_pdf_pi
[2017-06-19 12:22:49]	SQL :	SELECT u.uid FROM user u
				LEFT JOIN 1_employee e on (e.bid=u.bid AND e.eid=u.eid)
				WHERE e.status='1' AND e.login='1' AND u.status='1' 
				AND u.bid='1' AND u.eid='1'
[2017-06-19 12:22:49]	SQL :	SELECT *
FROM (`language`)
WHERE `langid` = '1'
[2017-06-19 12:22:49]	DEBUG :	Database Driver Class Initialized
[2017-06-19 12:22:49]	SQL :	SELECT roleid FROM 1_employee
							WHERE eid='1'
							AND bid='1'
[2017-06-19 12:22:49]	SQL :	UPDATE `call_sessions` SET `last_activity` = '1497853678', `user_data` = 'a:20:{s:3:\"uid\";s:1:\"1\";s:3:\"bid\";s:1:\"1\";s:8:\"username\";s:20:\"ashwini.naidu@vmc.in\";s:3:\"eid\";s:1:\"1\";s:3:\"app\";s:1:\"1\";s:7:\"authkey\";s:17:\"1.1.d886b8e8a0615\";s:9:\"recording\";s:1:\"1\";s:10:\"mcubecalls\";s:1:\"1\";s:7:\"mtdebug\";s:1:\"1\";s:8:\"deviceid\";s:36:\"ffffffff-a4d5-960f-ffff-ffff82ba1723\";s:8:\"language\";s:1:\"1\";s:6:\"status\";s:1:\"1\";s:9:\"appstatus\";s:1:\"1\";s:3:\"pid\";s:1:\"0\";s:3:\"act\";s:1:\"0\";s:16:\"registrationdate\";s:19:\"2014-09-08 16:04:19\";s:10:\"dnd_status\";s:1:\"0\";s:9:\"logged_in\";s:1:\"1\";s:6:\"roleid\";s:1:\"1\";s:4:\"cbid\";s:1:\"1\";}' WHERE `session_id` = '847e9ee4e1543e295a6ddd381996c5e3'
[2017-06-19 12:22:49]	DEBUG :	Database Driver Class Initialized
[2017-06-19 12:22:49]	SQL :	SELECT * FROM 1_user_role
							WHERE roleid='1'
							AND bid='1'
[2017-06-19 12:22:49]	SQL :	SELECT m.modid,m.modname,m.moddesc,
							COALESCE(o.opt_add,0) as opt_add,
							COALESCE(o.opt_view,0) as opt_view,
							COALESCE(o.opt_download,0) as opt_download,
							COALESCE(opt_delete,0) as opt_delete 
							FROM module m
							LEFT JOIN (SELECT * FROM 1_role_mod_opt
							WHERE roleid='1' 
							AND bid='1') as o
							ON m.modid=o.modid where m.status=1
[2017-06-19 12:22:49]	SQL :	SELECT a.*,f.fieldname FROM 1_role_access a
								LEFT JOIN systemfields f on a.fieldid=f.fieldid
								WHERE a.roleid='1'
								AND a.bid='1'
								AND a.fieldtype='s'
[2017-06-19 12:22:49]	SQL :	SELECT * FROM 1_role_access
								WHERE roleid='1'
								AND bid='1'
							AND fieldtype='c'
[2017-06-19 12:22:49]	SQL :	SELECT a.selfdisable FROM 1_employee a WHERE a.eid='1'
[2017-06-19 12:22:49]	DEBUG :	Language file loaded: language/english/unit_test_lang.php
[2017-06-19 12:22:49]	DEBUG :	Language file loaded: language/english/db_lang.php
[2017-06-19 12:22:49]	DEBUG :	Language file loaded: language/english/ftp_lang.php
[2017-06-19 12:22:49]	DEBUG :	Language file loaded: language/english/menu_lang.php
[2017-06-19 12:22:49]	DEBUG :	Language file loaded: language/english/db_tables_lang.php
[2017-06-19 12:22:49]	DEBUG :	Language file loaded: language/english/form_level_lang.php
[2017-06-19 12:22:49]	DEBUG :	Language file loaded: language/english/form_validation_lang.php
[2017-06-19 12:22:49]	DEBUG :	Language file loaded: language/english/email_lang.php
[2017-06-19 12:22:49]	DEBUG :	Language file loaded: language/english/number_lang.php
[2017-06-19 12:22:49]	DEBUG :	Language file loaded: language/english/layout_lang.php
[2017-06-19 12:22:49]	DEBUG :	Language file loaded: language/english/validation_lang.php
[2017-06-19 12:22:49]	DEBUG :	Language file loaded: language/english/scaffolding_lang.php
[2017-06-19 12:22:49]	DEBUG :	Language file loaded: language/english/date_lang.php
[2017-06-19 12:22:49]	DEBUG :	Language file loaded: language/english/profiler_lang.php
[2017-06-19 12:22:49]	DEBUG :	Language file loaded: language/english/imglib_lang.php
[2017-06-19 12:22:49]	DEBUG :	Language file loaded: language/english/error_msg_lang.php
[2017-06-19 12:22:49]	DEBUG :	Language file loaded: language/english/upload_lang.php
[2017-06-19 12:22:49]	SQL :	SELECT id,category,subcategory,type,status FROM feedback WHERE status=1 
[2017-06-19 12:22:49]	SQL :	SELECT feature_id FROM business_feature WHERE bid='1'
[2017-06-19 12:22:49]	SQL :	SELECT feature_id FROM business_feature WHERE bid='1'
[2017-06-19 12:22:49]	SQL :	SELECT feature_id FROM business_feature WHERE bid='1'
[2017-06-19 12:22:49]	SQL :	SELECT id,type FROM 1_leads_status
[2017-06-19 12:22:49]	SQL :	SELECT design FROM business_lead_use WHERE bid='1' LIMIT 0,1
[2017-06-19 12:22:49]	SQL :	SELECT sid,status FROM 1_support_status
[2017-06-19 12:22:49]	SQL :	SELECT feature_id FROM `business_feature` where bid=1
[2017-06-19 12:22:49]	SQL :	SELECT action_align FROM account_settings WHERE bid='1'
[2017-06-19 12:22:49]	SQL :	SELECT dialstatus FROM 1_callhistory WHERE dialstatus = 'CONNECTING'
[2017-06-19 12:22:49]	SQL :	SELECT FOUND_ROWS() as cnt
[2017-06-19 12:22:49]	SQL :	SELECT del_notify FROM account_settings WHERE bid='1'
[2017-06-19 12:22:49]	DEBUG :	Model Class Initialized
[2017-06-19 12:22:49]	DEBUG :	Database Driver Class Initialized
[2017-06-19 12:22:49]	SQL :	SELECT * FROM 1_user_role
							WHERE roleid='1'
							AND bid='1'
[2017-06-19 12:22:49]	SQL :	SELECT m.modid,m.modname,m.moddesc,
							COALESCE(o.opt_add,0) as opt_add,
							COALESCE(o.opt_view,0) as opt_view,
							COALESCE(o.opt_download,0) as opt_download,
							COALESCE(opt_delete,0) as opt_delete 
							FROM module m
							LEFT JOIN (SELECT * FROM 1_role_mod_opt
							WHERE roleid='1' 
							AND bid='1') as o
							ON m.modid=o.modid where m.status=1
[2017-06-19 12:22:49]	SQL :	SELECT a.*,f.fieldname FROM 1_role_access a
								LEFT JOIN systemfields f on a.fieldid=f.fieldid
								WHERE a.roleid='1'
								AND a.bid='1'
								AND a.fieldtype='s'
[2017-06-19 12:22:49]	SQL :	SELECT * FROM 1_role_access
								WHERE roleid='1'
								AND bid='1'
							AND fieldtype='c'
[2017-06-19 12:22:49]	SQL :	SELECT feature_id FROM `business_feature` where bid=1
[2017-06-19 12:22:49]	SQL :	SELECT * FROM business where pid='1'
[2017-06-19 12:22:49]	SQL :	UPDATE `call_sessions` SET `last_activity` = '1497853678', `user_data` = 'a:20:{s:3:\"uid\";s:1:\"1\";s:3:\"bid\";s:1:\"1\";s:8:\"username\";s:20:\"ashwini.naidu@vmc.in\";s:3:\"eid\";s:1:\"1\";s:3:\"app\";s:1:\"1\";s:7:\"authkey\";s:17:\"1.1.d886b8e8a0615\";s:9:\"recording\";s:1:\"1\";s:10:\"mcubecalls\";s:1:\"1\";s:7:\"mtdebug\";s:1:\"1\";s:8:\"deviceid\";s:36:\"ffffffff-a4d5-960f-ffff-ffff82ba1723\";s:8:\"language\";s:1:\"1\";s:6:\"status\";s:1:\"1\";s:9:\"appstatus\";s:1:\"1\";s:3:\"pid\";s:1:\"0\";s:3:\"act\";s:1:\"0\";s:16:\"registrationdate\";s:19:\"2014-09-08 16:04:19\";s:10:\"dnd_status\";s:1:\"0\";s:9:\"logged_in\";s:1:\"1\";s:6:\"roleid\";s:1:\"1\";s:4:\"cbid\";s:1:\"1\";}' WHERE `session_id` = '847e9ee4e1543e295a6ddd381996c5e3'
[2017-06-19 12:22:49]	DEBUG :	Database Driver Class Initialized
[2017-06-19 12:22:49]	SQL :	SELECT * FROM 1_user_role
							WHERE roleid='1'
							AND bid='1'
[2017-06-19 12:22:49]	SQL :	SELECT m.modid,m.modname,m.moddesc,
							COALESCE(o.opt_add,0) as opt_add,
							COALESCE(o.opt_view,0) as opt_view,
							COALESCE(o.opt_download,0) as opt_download,
							COALESCE(opt_delete,0) as opt_delete 
							FROM module m
							LEFT JOIN (SELECT * FROM 1_role_mod_opt
							WHERE roleid='1' 
							AND bid='1') as o
							ON m.modid=o.modid where m.status=1
[2017-06-19 12:22:49]	SQL :	SELECT a.*,f.fieldname FROM 1_role_access a
								LEFT JOIN systemfields f on a.fieldid=f.fieldid
								WHERE a.roleid='1'
								AND a.bid='1'
								AND a.fieldtype='s'
[2017-06-19 12:22:49]	SQL :	SELECT * FROM 1_role_access
								WHERE roleid='1'
								AND bid='1'
							AND fieldtype='c'
[2017-06-19 12:22:49]	SQL :	SELECT SQL_CALC_FOUND_ROWS g.*
				  FROM 1_groups g 
				  LEFT JOIN group_rules r on g.rules=r.rulesid 
				  LEFT JOIN 1_employee e on g.eid=e.eid
				  LEFT JOIN prinumbers p on (g.prinumber=p.number AND p.bid='1')
				  WHERE g.bid='1' 
				  and g.status!=0  limit 0,20
[2017-06-19 12:22:49]	SQL :	SELECT FOUND_ROWS() as cnt
[2017-06-19 12:22:49]	DEBUG :	Database Driver Class Initialized
[2017-06-19 12:22:49]	SQL :	SELECT * FROM ( 
				SELECT 's' as type,f.addon,f.fieldid,f.modid,
				f.fieldname,'' as fieldtype,'' as fieldKey,'' as options,
				'' as defaultvalue,f.is_required as is_required,f.is_hidden,COALESCE(l.display_order,0) as display_order,
				l.customlabel,COALESCE(l.show,1) as `show`,COALESCE(l.listing,1) as `listing`
				FROM systemfields f
				LEFT JOIN (
					SELECT * FROM 1_custom_label
					WHERE fieldtype='s'
				) as l
				on (f.fieldid=l.fieldid AND l.modid=f.modid)
				WHERE f.modid='3'  AND f.is_hidden=0   AND f.addon=0 
				UNION
				SELECT 'c' as type,'0',f.fieldid,f.modid,
				f.fieldname,f.fieldtype,f.field_key as fieldKey,f.options,
				f.defaultvalue,f.is_required as is_required,'',COALESCE(l.display_order,0) as display_order,
				l.customlabel,COALESCE(l.show,1) as `show`,COALESCE(l.listing,1) as `listing`
				FROM 1_customfields f
				LEFT JOIN (
					SELECT * FROM 1_custom_label
					WHERE fieldtype='c'
				) as l
				on (f.fieldid=l.fieldid AND l.modid=f.modid)
				WHERE f.modid='3') as t ORDER BY display_order ASC
[2017-06-19 12:22:49]	DEBUG :	Database Driver Class Initialized
[2017-06-19 12:22:49]	SQL :	SELECT g.*,e.empname as eid,sg.groupname as supportgroup,
					  if(g.connectowner=1,'YES','NO') as connectwner,
					  g.eid as epid,if(g.record=1,'YES','NO') as records,
					  if(g.replytocustomer=1,'YES','NO') as replycus,
					  if(g.replytoexecutive=1,'YES','NO') as replyexe,
					  if(g.pincode=1,'YES','NO') as pcode,
					  p.number as prinumber,
					  p.landingnumber as addnumber,(if(g.primary_rule=0,'All',cr.regionname)) as regionname,
					  r.rulename as rules,g.rules as rule
					  FROM 1_groups g 
					  LEFT JOIN group_rules r on g.rules=r.rulesid 
					  LEFT JOIN 1_employee e on g.eid=e.eid 
					  LEFT JOIN 1_support_groups sg on g.supportgrp=sg.gid 
					  LEFT JOIN prinumber p on g.prinumber=p.number
					  LEFT JOIN 1_custom_region cr on g.primary_rule=cr.regionid
					  WHERE g.bid='1' 
					  AND g.gid='14'
[2017-06-19 12:22:49]	SQL :	SELECT * FROM 1_customfieldsvalue 
				WHERE bid='1' 
				AND modid='3'
				AND dataid='14'
[2017-06-19 12:22:49]	SQL :	SELECT COALESCE(COUNT(callid), 0) AS cnt
							FROM 1_callhistory h 
							WHERE (h.`starttime` >= DATE_SUB(CURDATE(), INTERVAL 6 DAY)) AND h.gid = 14 GROUP BY DAY(h.starttime)
[2017-06-19 12:22:49]	DEBUG :	Database Driver Class Initialized
[2017-06-19 12:22:49]	SQL :	SELECT g.*,e.empname as eid,sg.groupname as supportgroup,
					  if(g.connectowner=1,'YES','NO') as connectwner,
					  g.eid as epid,if(g.record=1,'YES','NO') as records,
					  if(g.replytocustomer=1,'YES','NO') as replycus,
					  if(g.replytoexecutive=1,'YES','NO') as replyexe,
					  if(g.pincode=1,'YES','NO') as pcode,
					  p.number as prinumber,
					  p.landingnumber as addnumber,(if(g.primary_rule=0,'All',cr.regionname)) as regionname,
					  r.rulename as rules,g.rules as rule
					  FROM 1_groups g 
					  LEFT JOIN group_rules r on g.rules=r.rulesid 
					  LEFT JOIN 1_employee e on g.eid=e.eid 
					  LEFT JOIN 1_support_groups sg on g.supportgrp=sg.gid 
					  LEFT JOIN prinumber p on g.prinumber=p.number
					  LEFT JOIN 1_custom_region cr on g.primary_rule=cr.regionid
					  WHERE g.bid='1' 
					  AND g.gid='15'
[2017-06-19 12:22:49]	SQL :	SELECT * FROM 1_customfieldsvalue 
				WHERE bid='1' 
				AND modid='3'
				AND dataid='15'
[2017-06-19 12:22:49]	SQL :	SELECT COALESCE(COUNT(callid), 0) AS cnt
							FROM 1_callhistory h 
							WHERE (h.`starttime` >= DATE_SUB(CURDATE(), INTERVAL 6 DAY)) AND h.gid = 15 GROUP BY DAY(h.starttime)
[2017-06-19 12:22:49]	SQL :	SELECT GROUP_CONCAT(empname SEPARATOR ',') as empname FROM 1_employee WHERE eid IN(58 )
[2017-06-19 12:22:49]	DEBUG :	Database Driver Class Initialized
[2017-06-19 12:22:49]	SQL :	SELECT g.*,e.empname as eid,sg.groupname as supportgroup,
					  if(g.connectowner=1,'YES','NO') as connectwner,
					  g.eid as epid,if(g.record=1,'YES','NO') as records,
					  if(g.replytocustomer=1,'YES','NO') as replycus,
					  if(g.replytoexecutive=1,'YES','NO') as replyexe,
					  if(g.pincode=1,'YES','NO') as pcode,
					  p.number as prinumber,
					  p.landingnumber as addnumber,(if(g.primary_rule=0,'All',cr.regionname)) as regionname,
					  r.rulename as rules,g.rules as rule
					  FROM 1_groups g 
					  LEFT JOIN group_rules r on g.rules=r.rulesid 
					  LEFT JOIN 1_employee e on g.eid=e.eid 
					  LEFT JOIN 1_support_groups sg on g.supportgrp=sg.gid 
					  LEFT JOIN prinumber p on g.prinumber=p.number
					  LEFT JOIN 1_custom_region cr on g.primary_rule=cr.regionid
					  WHERE g.bid='1' 
					  AND g.gid='16'
[2017-06-19 12:22:49]	SQL :	SELECT * FROM 1_customfieldsvalue 
				WHERE bid='1' 
				AND modid='3'
				AND dataid='16'
[2017-06-19 12:22:49]	SQL :	SELECT COALESCE(COUNT(callid), 0) AS cnt
							FROM 1_callhistory h 
							WHERE (h.`starttime` >= DATE_SUB(CURDATE(), INTERVAL 6 DAY)) AND h.gid = 16 GROUP BY DAY(h.starttime)
[2017-06-19 12:22:49]	DEBUG :	Database Driver Class Initialized
[2017-06-19 12:22:49]	SQL :	SELECT g.*,e.empname as eid,sg.groupname as supportgroup,
					  if(g.connectowner=1,'YES','NO') as connectwner,
					  g.eid as epid,if(g.record=1,'YES','NO') as records,
					  if(g.replytocustomer=1,'YES','NO') as replycus,
					  if(g.replytoexecutive=1,'YES','NO') as replyexe,
					  if(g.pincode=1,'YES','NO') as pcode,
					  p.number as prinumber,
					  p.landingnumber as addnumber,(if(g.primary_rule=0,'All',cr.regionname)) as regionname,
					  r.rulename as rules,g.rules as rule
					  FROM 1_groups g 
					  LEFT JOIN group_rules r on g.rules=r.rulesid 
					  LEFT JOIN 1_employee e on g.eid=e.eid 
					  LEFT JOIN 1_support_groups sg on g.supportgrp=sg.gid 
					  LEFT JOIN prinumber p on g.prinumber=p.number
					  LEFT JOIN 1_custom_region cr on g.primary_rule=cr.regionid
					  WHERE g.bid='1' 
					  AND g.gid='17'
[2017-06-19 12:22:49]	SQL :	SELECT * FROM 1_customfieldsvalue 
				WHERE bid='1' 
				AND modid='3'
				AND dataid='17'
[2017-06-19 12:22:49]	SQL :	SELECT COALESCE(COUNT(callid), 0) AS cnt
							FROM 1_callhistory h 
							WHERE (h.`starttime` >= DATE_SUB(CURDATE(), INTERVAL 6 DAY)) AND h.gid = 17 GROUP BY DAY(h.starttime)
[2017-06-19 12:22:49]	DEBUG :	Database Driver Class Initialized
[2017-06-19 12:22:49]	SQL :	SELECT * FROM ( 
				SELECT 's' as type,f.addon,f.fieldid,f.modid,
				f.fieldname,'' as fieldtype,'' as fieldKey,'' as options,
				'' as defaultvalue,f.is_required as is_required,f.is_hidden,COALESCE(l.display_order,0) as display_order,
				l.customlabel,COALESCE(l.show,1) as `show`,COALESCE(l.listing,1) as `listing`
				FROM systemfields f
				LEFT JOIN (
					SELECT * FROM 1_custom_label
					WHERE fieldtype='s'
				) as l
				on (f.fieldid=l.fieldid AND l.modid=f.modid)
				WHERE f.modid='3'  AND f.is_hidden=0   AND f.addon=0 
				UNION
				SELECT 'c' as type,'0',f.fieldid,f.modid,
				f.fieldname,f.fieldtype,f.field_key as fieldKey,f.options,
				f.defaultvalue,f.is_required as is_required,'',COALESCE(l.display_order,0) as display_order,
				l.customlabel,COALESCE(l.show,1) as `show`,COALESCE(l.listing,1) as `listing`
				FROM 1_customfields f
				LEFT JOIN (
					SELECT * FROM 1_custom_label
					WHERE fieldtype='c'
				) as l
				on (f.fieldid=l.fieldid AND l.modid=f.modid)
				WHERE f.modid='3') as t ORDER BY display_order ASC
[2017-06-19 12:22:49]	SQL :	select eid,empname from 1_employee where status=1 ORDER BY empname
[2017-06-19 12:22:49]	DEBUG :	Database Driver Class Initialized
[2017-06-19 12:22:49]	SQL :	SELECT * FROM 1_user_role
							WHERE roleid='1'
							AND bid='1'
[2017-06-19 12:22:49]	SQL :	SELECT m.modid,m.modname,m.moddesc,
							COALESCE(o.opt_add,0) as opt_add,
							COALESCE(o.opt_view,0) as opt_view,
							COALESCE(o.opt_download,0) as opt_download,
							COALESCE(opt_delete,0) as opt_delete 
							FROM module m
							LEFT JOIN (SELECT * FROM 1_role_mod_opt
							WHERE roleid='1' 
							AND bid='1') as o
							ON m.modid=o.modid where m.status=1
[2017-06-19 12:22:49]	SQL :	SELECT a.*,f.fieldname FROM 1_role_access a
								LEFT JOIN systemfields f on a.fieldid=f.fieldid
								WHERE a.roleid='1'
								AND a.bid='1'
								AND a.fieldtype='s'
[2017-06-19 12:22:49]	SQL :	SELECT * FROM 1_role_access
								WHERE roleid='1'
								AND bid='1'
							AND fieldtype='c'
[2017-06-19 12:22:49]	SQL :	SELECT * FROM 1_employee WHERE status='1' ORDER BY empname
[2017-06-19 12:22:49]	DEBUG :	File loaded: /var/www/html/mcnew/system/application/views/mainheader.php
[2017-06-19 12:22:49]	DEBUG :	Database Driver Class Initialized
[2017-06-19 12:22:49]	SQL :	select a.*,e.empname as reporttoname,b.rolename  as role,if(u.recording=1,'Yes','No') as recording
					  from 1_employee a
					  LEFT JOIN  1_employee e on a.reportto=e.eid
					  LEFT JOIN  user u on a.eid=u.eid
					  ,1_user_role b 
					  where a.roleid=b.roleid AND a.eid='1'
[2017-06-19 12:22:49]	SQL :	SELECT * FROM 1_customfieldsvalue 
				WHERE bid='1' 
				AND modid='2'
				AND dataid='1'
[2017-06-19 12:22:49]	DEBUG :	File loaded: /var/www/html/mcnew/system/application/views/leftsidebar.php
[2017-06-19 12:22:49]	DEBUG :	File loaded: /var/www/html/mcnew/system/application/views/list_view.php
[2017-06-19 12:22:49]	DEBUG :	File loaded: /var/www/html/mcnew/system/application/views/footer.php
[2017-06-19 12:22:49]	DEBUG :	Final output sent to browser
[2017-06-19 12:22:49]	DEBUG :	Total execution time: 0.1542
[2017-06-19 12:22:52]	DEBUG :	Config Class Initialized
[2017-06-19 12:22:52]	DEBUG :	Hooks Class Initialized
[2017-06-19 12:22:52]	DEBUG :	URI Class Initialized
[2017-06-19 12:22:52]	DEBUG :	Router Class Initialized
[2017-06-19 12:22:52]	DEBUG :	Output Class Initialized
[2017-06-19 12:22:52]	DEBUG :	Input Class Initialized
[2017-06-19 12:22:52]	DEBUG :	XSS Filtering completed
[2017-06-19 12:22:52]	DEBUG :	XSS Filtering completed
[2017-06-19 12:22:52]	DEBUG :	XSS Filtering completed
[2017-06-19 12:22:52]	DEBUG :	XSS Filtering completed
[2017-06-19 12:22:52]	DEBUG :	Global POST and COOKIE data sanitized
[2017-06-19 12:22:52]	DEBUG :	Language Class Initialized
[2017-06-19 12:22:52]	DEBUG :	Loader Class Initialized
[2017-06-19 12:22:52]	DEBUG :	Helper loaded: url_helper
[2017-06-19 12:22:52]	DEBUG :	Helper loaded: form_helper
[2017-06-19 12:22:52]	DEBUG :	Helper loaded: html_helper
[2017-06-19 12:22:52]	DEBUG :	Helper loaded: email_helper
[2017-06-19 12:22:52]	DEBUG :	Helper loaded: ckeditor_helper
[2017-06-19 12:22:52]	DEBUG :	Helper loaded: mcube_helper
[2017-06-19 12:22:52]	DEBUG :	Database Driver Class Initialized
[2017-06-19 12:22:52]	ERROR :	Severity: 8192  --> mysql_pconnect(): The mysql extension is deprecated and will be removed in the future: use mysqli or PDO instead /var/www/html/mcnew/system/database/drivers/mysql/mysql_driver.php 88
[2017-06-19 12:22:52]	DEBUG :	Session Class Initialized
[2017-06-19 12:22:52]	DEBUG :	Helper loaded: string_helper
[2017-06-19 12:22:52]	DEBUG :	Encrypt Class Initialized
[2017-06-19 12:22:52]	SQL :	SELECT *
FROM (`call_sessions`)
WHERE `session_id` = '847e9ee4e1543e295a6ddd381996c5e3'
AND `user_agent` = 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36'
[2017-06-19 12:22:52]	DEBUG :	Session routines successfully run
[2017-06-19 12:22:52]	DEBUG :	Table Class Initialized
[2017-06-19 12:22:52]	DEBUG :	Pagination Class Initialized
[2017-06-19 12:22:52]	DEBUG :	Config file loaded: config/paypallib_config.php
[2017-06-19 12:22:52]	DEBUG :	Form Validation Class Initialized
[2017-06-19 12:22:52]	DEBUG :	Email Class Initialized
[2017-06-19 12:22:52]	DEBUG :	Language file loaded: language/english/calendar_lang.php
[2017-06-19 12:22:52]	DEBUG :	Calendar Class Initialized
[2017-06-19 12:22:52]	DEBUG :	Controller Class Initialized
[2017-06-19 12:22:52]	DEBUG :	Model Class Initialized
[2017-06-19 12:22:52]	DEBUG :	Model Class Initialized
[2017-06-19 12:22:52]	DEBUG :	Model Class Initialized
[2017-06-19 12:22:52]	DEBUG :	Model Class Initialized
[2017-06-19 12:22:52]	DEBUG :	Model Class Initialized
[2017-06-19 12:22:52]	DEBUG :	Model Class Initialized
[2017-06-19 12:22:52]	DEBUG :	Model Class Initialized
[2017-06-19 12:22:52]	DEBUG :	Model Class Initialized
[2017-06-19 12:22:52]	DEBUG :	Model Class Initialized
[2017-06-19 12:22:52]	DEBUG :	Model Class Initialized
[2017-06-19 12:22:52]	DEBUG :	Model Class Initialized
[2017-06-19 12:22:52]	DEBUG :	Model Class Initialized
[2017-06-19 12:22:52]	DEBUG :	Plugin loaded: to_pdf_pi
[2017-06-19 12:22:52]	SQL :	SELECT u.uid FROM user u
				LEFT JOIN 1_employee e on (e.bid=u.bid AND e.eid=u.eid)
				WHERE e.status='1' AND e.login='1' AND u.status='1' 
				AND u.bid='1' AND u.eid='1'
[2017-06-19 12:22:52]	SQL :	SELECT *
FROM (`language`)
WHERE `langid` = '1'
[2017-06-19 12:22:52]	DEBUG :	Database Driver Class Initialized
[2017-06-19 12:22:52]	SQL :	SELECT roleid FROM 1_employee
							WHERE eid='1'
							AND bid='1'
[2017-06-19 12:22:52]	SQL :	UPDATE `call_sessions` SET `last_activity` = '1497853678', `user_data` = 'a:20:{s:3:\"uid\";s:1:\"1\";s:3:\"bid\";s:1:\"1\";s:8:\"username\";s:20:\"ashwini.naidu@vmc.in\";s:3:\"eid\";s:1:\"1\";s:3:\"app\";s:1:\"1\";s:7:\"authkey\";s:17:\"1.1.d886b8e8a0615\";s:9:\"recording\";s:1:\"1\";s:10:\"mcubecalls\";s:1:\"1\";s:7:\"mtdebug\";s:1:\"1\";s:8:\"deviceid\";s:36:\"ffffffff-a4d5-960f-ffff-ffff82ba1723\";s:8:\"language\";s:1:\"1\";s:6:\"status\";s:1:\"1\";s:9:\"appstatus\";s:1:\"1\";s:3:\"pid\";s:1:\"0\";s:3:\"act\";s:1:\"0\";s:16:\"registrationdate\";s:19:\"2014-09-08 16:04:19\";s:10:\"dnd_status\";s:1:\"0\";s:9:\"logged_in\";s:1:\"1\";s:6:\"roleid\";s:1:\"1\";s:4:\"cbid\";s:1:\"1\";}' WHERE `session_id` = '847e9ee4e1543e295a6ddd381996c5e3'
[2017-06-19 12:22:52]	DEBUG :	Database Driver Class Initialized
[2017-06-19 12:22:52]	SQL :	SELECT * FROM 1_user_role
							WHERE roleid='1'
							AND bid='1'
[2017-06-19 12:22:52]	SQL :	SELECT m.modid,m.modname,m.moddesc,
							COALESCE(o.opt_add,0) as opt_add,
							COALESCE(o.opt_view,0) as opt_view,
							COALESCE(o.opt_download,0) as opt_download,
							COALESCE(opt_delete,0) as opt_delete 
							FROM module m
							LEFT JOIN (SELECT * FROM 1_role_mod_opt
							WHERE roleid='1' 
							AND bid='1') as o
							ON m.modid=o.modid where m.status=1
[2017-06-19 12:22:52]	SQL :	SELECT a.*,f.fieldname FROM 1_role_access a
								LEFT JOIN systemfields f on a.fieldid=f.fieldid
								WHERE a.roleid='1'
								AND a.bid='1'
								AND a.fieldtype='s'
[2017-06-19 12:22:52]	SQL :	SELECT * FROM 1_role_access
								WHERE roleid='1'
								AND bid='1'
							AND fieldtype='c'
[2017-06-19 12:22:52]	SQL :	SELECT a.selfdisable FROM 1_employee a WHERE a.eid='1'
[2017-06-19 12:22:52]	DEBUG :	Language file loaded: language/english/unit_test_lang.php
[2017-06-19 12:22:52]	DEBUG :	Language file loaded: language/english/db_lang.php
[2017-06-19 12:22:52]	DEBUG :	Language file loaded: language/english/ftp_lang.php
[2017-06-19 12:22:52]	DEBUG :	Language file loaded: language/english/menu_lang.php
[2017-06-19 12:22:52]	DEBUG :	Language file loaded: language/english/db_tables_lang.php
[2017-06-19 12:22:52]	DEBUG :	Language file loaded: language/english/form_level_lang.php
[2017-06-19 12:22:52]	DEBUG :	Language file loaded: language/english/form_validation_lang.php
[2017-06-19 12:22:52]	DEBUG :	Language file loaded: language/english/email_lang.php
[2017-06-19 12:22:52]	DEBUG :	Language file loaded: language/english/number_lang.php
[2017-06-19 12:22:52]	DEBUG :	Language file loaded: language/english/layout_lang.php
[2017-06-19 12:22:52]	DEBUG :	Language file loaded: language/english/validation_lang.php
[2017-06-19 12:22:52]	DEBUG :	Language file loaded: language/english/scaffolding_lang.php
[2017-06-19 12:22:52]	DEBUG :	Language file loaded: language/english/date_lang.php
[2017-06-19 12:22:52]	DEBUG :	Language file loaded: language/english/profiler_lang.php
[2017-06-19 12:22:52]	DEBUG :	Language file loaded: language/english/imglib_lang.php
[2017-06-19 12:22:52]	DEBUG :	Language file loaded: language/english/error_msg_lang.php
[2017-06-19 12:22:52]	DEBUG :	Language file loaded: language/english/upload_lang.php
[2017-06-19 12:22:52]	SQL :	SELECT id,category,subcategory,type,status FROM feedback WHERE status=1 
[2017-06-19 12:22:52]	SQL :	SELECT feature_id FROM business_feature WHERE bid='1'
[2017-06-19 12:22:52]	SQL :	SELECT feature_id FROM business_feature WHERE bid='1'
[2017-06-19 12:22:52]	SQL :	SELECT feature_id FROM business_feature WHERE bid='1'
[2017-06-19 12:22:52]	SQL :	SELECT id,type FROM 1_leads_status
[2017-06-19 12:22:52]	SQL :	SELECT design FROM business_lead_use WHERE bid='1' LIMIT 0,1
[2017-06-19 12:22:52]	SQL :	SELECT sid,status FROM 1_support_status
[2017-06-19 12:22:52]	SQL :	SELECT feature_id FROM `business_feature` where bid=1
[2017-06-19 12:22:52]	SQL :	SELECT action_align FROM account_settings WHERE bid='1'
[2017-06-19 12:22:52]	SQL :	SELECT dialstatus FROM 1_callhistory WHERE dialstatus = 'CONNECTING'
[2017-06-19 12:22:52]	SQL :	SELECT FOUND_ROWS() as cnt
[2017-06-19 12:22:52]	SQL :	SELECT del_notify FROM account_settings WHERE bid='1'
[2017-06-19 12:22:52]	DEBUG :	Model Class Initialized
[2017-06-19 12:22:52]	DEBUG :	Database Driver Class Initialized
[2017-06-19 12:22:52]	SQL :	SELECT * FROM 1_user_role
							WHERE roleid='1'
							AND bid='1'
[2017-06-19 12:22:52]	SQL :	SELECT m.modid,m.modname,m.moddesc,
							COALESCE(o.opt_add,0) as opt_add,
							COALESCE(o.opt_view,0) as opt_view,
							COALESCE(o.opt_download,0) as opt_download,
							COALESCE(opt_delete,0) as opt_delete 
							FROM module m
							LEFT JOIN (SELECT * FROM 1_role_mod_opt
							WHERE roleid='1' 
							AND bid='1') as o
							ON m.modid=o.modid where m.status=1
[2017-06-19 12:22:52]	SQL :	SELECT a.*,f.fieldname FROM 1_role_access a
								LEFT JOIN systemfields f on a.fieldid=f.fieldid
								WHERE a.roleid='1'
								AND a.bid='1'
								AND a.fieldtype='s'
[2017-06-19 12:22:52]	SQL :	SELECT * FROM 1_role_access
								WHERE roleid='1'
								AND bid='1'
							AND fieldtype='c'
[2017-06-19 12:22:52]	SQL :	SELECT feature_id FROM `business_feature` where bid=1
[2017-06-19 12:22:52]	SQL :	SELECT feature_id FROM `business_feature` where bid=1
[2017-06-19 12:22:52]	SQL :	SELECT * FROM business where pid='1'
[2017-06-19 12:22:52]	DEBUG :	Database Driver Class Initialized
[2017-06-19 12:22:52]	SQL :	SELECT * FROM ( 
				SELECT 's' as type,f.addon,f.fieldid,f.modid,
				f.fieldname,'' as fieldtype,'' as fieldKey,'' as options,
				'' as defaultvalue,f.is_required as is_required,f.is_hidden,COALESCE(l.display_order,0) as display_order,
				l.customlabel,COALESCE(l.show,1) as `show`,COALESCE(l.listing,1) as `listing`
				FROM systemfields f
				LEFT JOIN (
					SELECT * FROM 1_custom_label
					WHERE fieldtype='s'
				) as l
				on (f.fieldid=l.fieldid AND l.modid=f.modid)
				WHERE f.modid='3'  AND f.is_hidden=0 
				UNION
				SELECT 'c' as type,'0',f.fieldid,f.modid,
				f.fieldname,f.fieldtype,f.field_key as fieldKey,f.options,
				f.defaultvalue,f.is_required as is_required,'',COALESCE(l.display_order,0) as display_order,
				l.customlabel,COALESCE(l.show,1) as `show`,COALESCE(l.listing,1) as `listing`
				FROM 1_customfields f
				LEFT JOIN (
					SELECT * FROM 1_custom_label
					WHERE fieldtype='c'
				) as l
				on (f.fieldid=l.fieldid AND l.modid=f.modid)
				WHERE f.modid='3') as t ORDER BY display_order ASC
[2017-06-19 12:22:52]	DEBUG :	Database Driver Class Initialized
[2017-06-19 12:22:52]	SQL :	SELECT g.*,e.empname as eid,sg.groupname as supportgroup,
					  if(g.connectowner=1,'YES','NO') as connectwner,
					  g.eid as epid,if(g.record=1,'YES','NO') as records,
					  if(g.replytocustomer=1,'YES','NO') as replycus,
					  if(g.replytoexecutive=1,'YES','NO') as replyexe,
					  if(g.pincode=1,'YES','NO') as pcode,
					  p.number as prinumber,
					  p.landingnumber as addnumber,(if(g.primary_rule=0,'All',cr.regionname)) as regionname,
					  r.rulename as rules,g.rules as rule
					  FROM 1_groups g 
					  LEFT JOIN group_rules r on g.rules=r.rulesid 
					  LEFT JOIN 1_employee e on g.eid=e.eid 
					  LEFT JOIN 1_support_groups sg on g.supportgrp=sg.gid 
					  LEFT JOIN prinumber p on g.prinumber=p.number
					  LEFT JOIN 1_custom_region cr on g.primary_rule=cr.regionid
					  WHERE g.bid='1' 
					  AND g.gid='15'
[2017-06-19 12:22:52]	SQL :	SELECT * FROM 1_customfieldsvalue 
				WHERE bid='1' 
				AND modid='3'
				AND dataid='15'
[2017-06-19 12:22:52]	SQL :	SELECT s.fieldname
							FROM systemfields s
							LEFT JOIN `features` f on s.addon=f.feature_id
							LEFT JOIN business_packageaddons b on (f.feature_id=b.feature_id AND b.number='200047')
							WHERE s.modid='3' AND s.addon!=0 AND b.number is null
[2017-06-19 12:22:52]	SQL :	SELECT feature_id FROM business_feature WHERE bid='1'
[2017-06-19 12:22:52]	SQL :	SELECT l.region, p.bid,l.number FROM landingnumbers l 
		                        LEFT JOIN prinumbers p ON p.landingnumber=l.number 
		                        WHERE p.bid='1' 
		                        AND p.status = '0' AND p.type = '0' AND l.module_id = '1'
		                         
[2017-06-19 12:22:52]	SQL :	SELECT p.status,p.number,p.landingnumber from prinumbers p
								LEFT JOIN landingnumbers l on l.pri=p.pri
								WHERE p.bid='1' 
								AND p.ntype=0 AND l.module_id='1'
								
[2017-06-19 12:22:52]	SQL :	SELECT * FROM group_rules
[2017-06-19 12:22:52]	SQL :	select eid,empname from 1_employee where status=1 ORDER BY empname
[2017-06-19 12:22:52]	DEBUG :	Database Driver Class Initialized
[2017-06-19 12:22:52]	SQL :	SELECT * FROM 1_user_role
							WHERE roleid='1'
							AND bid='1'
[2017-06-19 12:22:52]	SQL :	SELECT m.modid,m.modname,m.moddesc,
							COALESCE(o.opt_add,0) as opt_add,
							COALESCE(o.opt_view,0) as opt_view,
							COALESCE(o.opt_download,0) as opt_download,
							COALESCE(opt_delete,0) as opt_delete 
							FROM module m
							LEFT JOIN (SELECT * FROM 1_role_mod_opt
							WHERE roleid='1' 
							AND bid='1') as o
							ON m.modid=o.modid where m.status=1
[2017-06-19 12:22:52]	SQL :	SELECT a.*,f.fieldname FROM 1_role_access a
								LEFT JOIN systemfields f on a.fieldid=f.fieldid
								WHERE a.roleid='1'
								AND a.bid='1'
								AND a.fieldtype='s'
[2017-06-19 12:22:52]	SQL :	SELECT * FROM 1_role_access
								WHERE roleid='1'
								AND bid='1'
							AND fieldtype='c'
[2017-06-19 12:22:52]	SQL :	SELECT * FROM 1_employee WHERE status='1' ORDER BY empname
[2017-06-19 12:22:52]	SQL :	SELECT * FROM 1_custom_region
[2017-06-19 12:22:52]	SQL :	SELECT support FROM `prinumbers` WHERE bid='1' 
[2017-06-19 12:22:52]	SQL :	SELECT * FROM 1_support_groups WHERE status=1
[2017-06-19 12:22:52]	SQL :	select eid,empname from 1_employee where status=1 ORDER BY empname
[2017-06-19 12:22:52]	DEBUG :	Database Driver Class Initialized
[2017-06-19 12:22:52]	SQL :	SELECT * FROM 1_user_role
							WHERE roleid='1'
							AND bid='1'
[2017-06-19 12:22:52]	SQL :	SELECT m.modid,m.modname,m.moddesc,
							COALESCE(o.opt_add,0) as opt_add,
							COALESCE(o.opt_view,0) as opt_view,
							COALESCE(o.opt_download,0) as opt_download,
							COALESCE(opt_delete,0) as opt_delete 
							FROM module m
							LEFT JOIN (SELECT * FROM 1_role_mod_opt
							WHERE roleid='1' 
							AND bid='1') as o
							ON m.modid=o.modid where m.status=1
[2017-06-19 12:22:52]	SQL :	SELECT a.*,f.fieldname FROM 1_role_access a
								LEFT JOIN systemfields f on a.fieldid=f.fieldid
								WHERE a.roleid='1'
								AND a.bid='1'
								AND a.fieldtype='s'
[2017-06-19 12:22:52]	SQL :	SELECT * FROM 1_role_access
								WHERE roleid='1'
								AND bid='1'
							AND fieldtype='c'
[2017-06-19 12:22:52]	SQL :	SELECT * FROM 1_employee WHERE status='1' ORDER BY empname
[2017-06-19 12:22:52]	DEBUG :	File loaded: /var/www/html/mcnew/system/application/views/mainheader.php
[2017-06-19 12:22:52]	DEBUG :	Database Driver Class Initialized
[2017-06-19 12:22:52]	SQL :	select a.*,e.empname as reporttoname,b.rolename  as role,if(u.recording=1,'Yes','No') as recording
					  from 1_employee a
					  LEFT JOIN  1_employee e on a.reportto=e.eid
					  LEFT JOIN  user u on a.eid=u.eid
					  ,1_user_role b 
					  where a.roleid=b.roleid AND a.eid='1'
[2017-06-19 12:22:52]	SQL :	SELECT * FROM 1_customfieldsvalue 
				WHERE bid='1' 
				AND modid='2'
				AND dataid='1'
[2017-06-19 12:22:52]	DEBUG :	File loaded: /var/www/html/mcnew/system/application/views/leftsidebar.php
[2017-06-19 12:22:52]	DEBUG :	File loaded: /var/www/html/mcnew/system/application/views/form_view.php
[2017-06-19 12:22:52]	DEBUG :	File loaded: /var/www/html/mcnew/system/application/views/footer.php
[2017-06-19 12:22:52]	DEBUG :	Final output sent to browser
[2017-06-19 12:22:52]	DEBUG :	Total execution time: 0.0991
[2017-06-19 12:22:55]	DEBUG :	Config Class Initialized
[2017-06-19 12:22:55]	DEBUG :	Hooks Class Initialized
[2017-06-19 12:22:55]	DEBUG :	URI Class Initialized
[2017-06-19 12:22:55]	DEBUG :	Router Class Initialized
[2017-06-19 12:22:55]	DEBUG :	Output Class Initialized
[2017-06-19 12:22:55]	DEBUG :	Input Class Initialized
[2017-06-19 12:22:55]	DEBUG :	XSS Filtering completed
[2017-06-19 12:22:55]	DEBUG :	XSS Filtering completed
[2017-06-19 12:22:55]	DEBUG :	XSS Filtering completed
[2017-06-19 12:22:55]	DEBUG :	XSS Filtering completed
[2017-06-19 12:22:55]	DEBUG :	Global POST and COOKIE data sanitized
[2017-06-19 12:22:55]	DEBUG :	Language Class Initialized
[2017-06-19 12:22:55]	DEBUG :	Loader Class Initialized
[2017-06-19 12:22:55]	DEBUG :	Helper loaded: url_helper
[2017-06-19 12:22:55]	DEBUG :	Helper loaded: form_helper
[2017-06-19 12:22:55]	DEBUG :	Helper loaded: html_helper
[2017-06-19 12:22:55]	DEBUG :	Helper loaded: email_helper
[2017-06-19 12:22:55]	DEBUG :	Helper loaded: ckeditor_helper
[2017-06-19 12:22:55]	DEBUG :	Helper loaded: mcube_helper
[2017-06-19 12:22:55]	DEBUG :	Database Driver Class Initialized
[2017-06-19 12:22:55]	ERROR :	Severity: 8192  --> mysql_pconnect(): The mysql extension is deprecated and will be removed in the future: use mysqli or PDO instead /var/www/html/mcnew/system/database/drivers/mysql/mysql_driver.php 88
[2017-06-19 12:22:55]	DEBUG :	Session Class Initialized
[2017-06-19 12:22:55]	DEBUG :	Helper loaded: string_helper
[2017-06-19 12:22:55]	DEBUG :	Encrypt Class Initialized
[2017-06-19 12:22:55]	SQL :	SELECT *
FROM (`call_sessions`)
WHERE `session_id` = '847e9ee4e1543e295a6ddd381996c5e3'
AND `user_agent` = 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36'
[2017-06-19 12:22:55]	DEBUG :	Session routines successfully run
[2017-06-19 12:22:55]	DEBUG :	Table Class Initialized
[2017-06-19 12:22:55]	DEBUG :	Pagination Class Initialized
[2017-06-19 12:22:55]	DEBUG :	Config file loaded: config/paypallib_config.php
[2017-06-19 12:22:55]	DEBUG :	Form Validation Class Initialized
[2017-06-19 12:22:55]	DEBUG :	Email Class Initialized
[2017-06-19 12:22:55]	DEBUG :	Language file loaded: language/english/calendar_lang.php
[2017-06-19 12:22:55]	DEBUG :	Calendar Class Initialized
[2017-06-19 12:22:55]	DEBUG :	Controller Class Initialized
[2017-06-19 12:22:55]	DEBUG :	Model Class Initialized
[2017-06-19 12:22:55]	DEBUG :	Model Class Initialized
[2017-06-19 12:22:55]	DEBUG :	Model Class Initialized
[2017-06-19 12:22:55]	DEBUG :	Model Class Initialized
[2017-06-19 12:22:55]	DEBUG :	Model Class Initialized
[2017-06-19 12:22:55]	DEBUG :	Model Class Initialized
[2017-06-19 12:22:55]	DEBUG :	Model Class Initialized
[2017-06-19 12:22:55]	DEBUG :	Model Class Initialized
[2017-06-19 12:22:55]	DEBUG :	Model Class Initialized
[2017-06-19 12:22:55]	DEBUG :	Model Class Initialized
[2017-06-19 12:22:55]	DEBUG :	Model Class Initialized
[2017-06-19 12:22:55]	DEBUG :	Model Class Initialized
[2017-06-19 12:22:55]	DEBUG :	Plugin loaded: to_pdf_pi
[2017-06-19 12:22:55]	SQL :	SELECT u.uid FROM user u
				LEFT JOIN 1_employee e on (e.bid=u.bid AND e.eid=u.eid)
				WHERE e.status='1' AND e.login='1' AND u.status='1' 
				AND u.bid='1' AND u.eid='1'
[2017-06-19 12:22:55]	SQL :	SELECT *
FROM (`language`)
WHERE `langid` = '1'
[2017-06-19 12:22:55]	DEBUG :	Database Driver Class Initialized
[2017-06-19 12:22:55]	SQL :	SELECT roleid FROM 1_employee
							WHERE eid='1'
							AND bid='1'
[2017-06-19 12:22:55]	SQL :	UPDATE `call_sessions` SET `last_activity` = '1497853678', `user_data` = 'a:20:{s:3:\"uid\";s:1:\"1\";s:3:\"bid\";s:1:\"1\";s:8:\"username\";s:20:\"ashwini.naidu@vmc.in\";s:3:\"eid\";s:1:\"1\";s:3:\"app\";s:1:\"1\";s:7:\"authkey\";s:17:\"1.1.d886b8e8a0615\";s:9:\"recording\";s:1:\"1\";s:10:\"mcubecalls\";s:1:\"1\";s:7:\"mtdebug\";s:1:\"1\";s:8:\"deviceid\";s:36:\"ffffffff-a4d5-960f-ffff-ffff82ba1723\";s:8:\"language\";s:1:\"1\";s:6:\"status\";s:1:\"1\";s:9:\"appstatus\";s:1:\"1\";s:3:\"pid\";s:1:\"0\";s:3:\"act\";s:1:\"0\";s:16:\"registrationdate\";s:19:\"2014-09-08 16:04:19\";s:10:\"dnd_status\";s:1:\"0\";s:9:\"logged_in\";s:1:\"1\";s:6:\"roleid\";s:1:\"1\";s:4:\"cbid\";s:1:\"1\";}' WHERE `session_id` = '847e9ee4e1543e295a6ddd381996c5e3'
[2017-06-19 12:22:55]	DEBUG :	Database Driver Class Initialized
[2017-06-19 12:22:55]	SQL :	SELECT * FROM 1_user_role
							WHERE roleid='1'
							AND bid='1'
[2017-06-19 12:22:55]	SQL :	SELECT m.modid,m.modname,m.moddesc,
							COALESCE(o.opt_add,0) as opt_add,
							COALESCE(o.opt_view,0) as opt_view,
							COALESCE(o.opt_download,0) as opt_download,
							COALESCE(opt_delete,0) as opt_delete 
							FROM module m
							LEFT JOIN (SELECT * FROM 1_role_mod_opt
							WHERE roleid='1' 
							AND bid='1') as o
							ON m.modid=o.modid where m.status=1
[2017-06-19 12:22:55]	SQL :	SELECT a.*,f.fieldname FROM 1_role_access a
								LEFT JOIN systemfields f on a.fieldid=f.fieldid
								WHERE a.roleid='1'
								AND a.bid='1'
								AND a.fieldtype='s'
[2017-06-19 12:22:55]	SQL :	SELECT * FROM 1_role_access
								WHERE roleid='1'
								AND bid='1'
							AND fieldtype='c'
[2017-06-19 12:22:55]	SQL :	SELECT a.selfdisable FROM 1_employee a WHERE a.eid='1'
[2017-06-19 12:22:55]	DEBUG :	Language file loaded: language/english/unit_test_lang.php
[2017-06-19 12:22:55]	DEBUG :	Language file loaded: language/english/db_lang.php
[2017-06-19 12:22:55]	DEBUG :	Language file loaded: language/english/ftp_lang.php
[2017-06-19 12:22:55]	DEBUG :	Language file loaded: language/english/menu_lang.php
[2017-06-19 12:22:55]	DEBUG :	Language file loaded: language/english/db_tables_lang.php
[2017-06-19 12:22:55]	DEBUG :	Language file loaded: language/english/form_level_lang.php
[2017-06-19 12:22:55]	DEBUG :	Language file loaded: language/english/form_validation_lang.php
[2017-06-19 12:22:55]	DEBUG :	Language file loaded: language/english/email_lang.php
[2017-06-19 12:22:55]	DEBUG :	Language file loaded: language/english/number_lang.php
[2017-06-19 12:22:55]	DEBUG :	Language file loaded: language/english/layout_lang.php
[2017-06-19 12:22:55]	DEBUG :	Language file loaded: language/english/validation_lang.php
[2017-06-19 12:22:55]	DEBUG :	Language file loaded: language/english/scaffolding_lang.php
[2017-06-19 12:22:55]	DEBUG :	Language file loaded: language/english/date_lang.php
[2017-06-19 12:22:55]	DEBUG :	Language file loaded: language/english/profiler_lang.php
[2017-06-19 12:22:55]	DEBUG :	Language file loaded: language/english/imglib_lang.php
[2017-06-19 12:22:55]	DEBUG :	Language file loaded: language/english/error_msg_lang.php
[2017-06-19 12:22:55]	DEBUG :	Language file loaded: language/english/upload_lang.php
[2017-06-19 12:22:55]	SQL :	SELECT id,category,subcategory,type,status FROM feedback WHERE status=1 
[2017-06-19 12:22:55]	SQL :	SELECT feature_id FROM business_feature WHERE bid='1'
[2017-06-19 12:22:55]	SQL :	SELECT feature_id FROM business_feature WHERE bid='1'
[2017-06-19 12:22:55]	SQL :	SELECT feature_id FROM business_feature WHERE bid='1'
[2017-06-19 12:22:55]	SQL :	SELECT id,type FROM 1_leads_status
[2017-06-19 12:22:55]	SQL :	SELECT design FROM business_lead_use WHERE bid='1' LIMIT 0,1
[2017-06-19 12:22:55]	SQL :	SELECT sid,status FROM 1_support_status
[2017-06-19 12:22:55]	SQL :	SELECT feature_id FROM `business_feature` where bid=1
[2017-06-19 12:22:55]	SQL :	SELECT action_align FROM account_settings WHERE bid='1'
[2017-06-19 12:22:55]	SQL :	SELECT dialstatus FROM 1_callhistory WHERE dialstatus = 'CONNECTING'
[2017-06-19 12:22:55]	SQL :	SELECT FOUND_ROWS() as cnt
[2017-06-19 12:22:55]	SQL :	SELECT del_notify FROM account_settings WHERE bid='1'
[2017-06-19 12:22:55]	DEBUG :	Model Class Initialized
[2017-06-19 12:22:55]	DEBUG :	Database Driver Class Initialized
[2017-06-19 12:22:55]	SQL :	SELECT * FROM 1_user_role
							WHERE roleid='1'
							AND bid='1'
[2017-06-19 12:22:55]	SQL :	SELECT m.modid,m.modname,m.moddesc,
							COALESCE(o.opt_add,0) as opt_add,
							COALESCE(o.opt_view,0) as opt_view,
							COALESCE(o.opt_download,0) as opt_download,
							COALESCE(opt_delete,0) as opt_delete 
							FROM module m
							LEFT JOIN (SELECT * FROM 1_role_mod_opt
							WHERE roleid='1' 
							AND bid='1') as o
							ON m.modid=o.modid where m.status=1
[2017-06-19 12:22:55]	SQL :	SELECT a.*,f.fieldname FROM 1_role_access a
								LEFT JOIN systemfields f on a.fieldid=f.fieldid
								WHERE a.roleid='1'
								AND a.bid='1'
								AND a.fieldtype='s'
[2017-06-19 12:22:55]	SQL :	SELECT * FROM 1_role_access
								WHERE roleid='1'
								AND bid='1'
							AND fieldtype='c'
[2017-06-19 12:22:55]	SQL :	SELECT feature_id FROM `business_feature` where bid=1
[2017-06-19 12:22:55]	SQL :	SELECT * FROM business where pid='1'
[2017-06-19 12:22:55]	SQL :	UPDATE `call_sessions` SET `last_activity` = '1497853678', `user_data` = 'a:20:{s:3:\"uid\";s:1:\"1\";s:3:\"bid\";s:1:\"1\";s:8:\"username\";s:20:\"ashwini.naidu@vmc.in\";s:3:\"eid\";s:1:\"1\";s:3:\"app\";s:1:\"1\";s:7:\"authkey\";s:17:\"1.1.d886b8e8a0615\";s:9:\"recording\";s:1:\"1\";s:10:\"mcubecalls\";s:1:\"1\";s:7:\"mtdebug\";s:1:\"1\";s:8:\"deviceid\";s:36:\"ffffffff-a4d5-960f-ffff-ffff82ba1723\";s:8:\"language\";s:1:\"1\";s:6:\"status\";s:1:\"1\";s:9:\"appstatus\";s:1:\"1\";s:3:\"pid\";s:1:\"0\";s:3:\"act\";s:1:\"0\";s:16:\"registrationdate\";s:19:\"2014-09-08 16:04:19\";s:10:\"dnd_status\";s:1:\"0\";s:9:\"logged_in\";s:1:\"1\";s:6:\"roleid\";s:1:\"1\";s:4:\"cbid\";s:1:\"1\";}' WHERE `session_id` = '847e9ee4e1543e295a6ddd381996c5e3'
[2017-06-19 12:22:55]	DEBUG :	Database Driver Class Initialized
[2017-06-19 12:22:55]	SQL :	SELECT * FROM 1_user_role
							WHERE roleid='1'
							AND bid='1'
[2017-06-19 12:22:55]	SQL :	SELECT m.modid,m.modname,m.moddesc,
							COALESCE(o.opt_add,0) as opt_add,
							COALESCE(o.opt_view,0) as opt_view,
							COALESCE(o.opt_download,0) as opt_download,
							COALESCE(opt_delete,0) as opt_delete 
							FROM module m
							LEFT JOIN (SELECT * FROM 1_role_mod_opt
							WHERE roleid='1' 
							AND bid='1') as o
							ON m.modid=o.modid where m.status=1
[2017-06-19 12:22:55]	SQL :	SELECT a.*,f.fieldname FROM 1_role_access a
								LEFT JOIN systemfields f on a.fieldid=f.fieldid
								WHERE a.roleid='1'
								AND a.bid='1'
								AND a.fieldtype='s'
[2017-06-19 12:22:55]	SQL :	SELECT * FROM 1_role_access
								WHERE roleid='1'
								AND bid='1'
							AND fieldtype='c'
[2017-06-19 12:22:55]	SQL :	SELECT SQL_CALC_FOUND_ROWS g.*
				  FROM 1_groups g 
				  LEFT JOIN group_rules r on g.rules=r.rulesid 
				  LEFT JOIN 1_employee e on g.eid=e.eid
				  LEFT JOIN prinumbers p on (g.prinumber=p.number AND p.bid='1')
				  WHERE g.bid='1' 
				  and g.status!=0  limit 0,20
[2017-06-19 12:22:55]	SQL :	SELECT FOUND_ROWS() as cnt
[2017-06-19 12:22:55]	DEBUG :	Database Driver Class Initialized
[2017-06-19 12:22:55]	SQL :	SELECT * FROM ( 
				SELECT 's' as type,f.addon,f.fieldid,f.modid,
				f.fieldname,'' as fieldtype,'' as fieldKey,'' as options,
				'' as defaultvalue,f.is_required as is_required,f.is_hidden,COALESCE(l.display_order,0) as display_order,
				l.customlabel,COALESCE(l.show,1) as `show`,COALESCE(l.listing,1) as `listing`
				FROM systemfields f
				LEFT JOIN (
					SELECT * FROM 1_custom_label
					WHERE fieldtype='s'
				) as l
				on (f.fieldid=l.fieldid AND l.modid=f.modid)
				WHERE f.modid='3'  AND f.is_hidden=0   AND f.addon=0 
				UNION
				SELECT 'c' as type,'0',f.fieldid,f.modid,
				f.fieldname,f.fieldtype,f.field_key as fieldKey,f.options,
				f.defaultvalue,f.is_required as is_required,'',COALESCE(l.display_order,0) as display_order,
				l.customlabel,COALESCE(l.show,1) as `show`,COALESCE(l.listing,1) as `listing`
				FROM 1_customfields f
				LEFT JOIN (
					SELECT * FROM 1_custom_label
					WHERE fieldtype='c'
				) as l
				on (f.fieldid=l.fieldid AND l.modid=f.modid)
				WHERE f.modid='3') as t ORDER BY display_order ASC
[2017-06-19 12:22:55]	DEBUG :	Database Driver Class Initialized
[2017-06-19 12:22:55]	SQL :	SELECT g.*,e.empname as eid,sg.groupname as supportgroup,
					  if(g.connectowner=1,'YES','NO') as connectwner,
					  g.eid as epid,if(g.record=1,'YES','NO') as records,
					  if(g.replytocustomer=1,'YES','NO') as replycus,
					  if(g.replytoexecutive=1,'YES','NO') as replyexe,
					  if(g.pincode=1,'YES','NO') as pcode,
					  p.number as prinumber,
					  p.landingnumber as addnumber,(if(g.primary_rule=0,'All',cr.regionname)) as regionname,
					  r.rulename as rules,g.rules as rule
					  FROM 1_groups g 
					  LEFT JOIN group_rules r on g.rules=r.rulesid 
					  LEFT JOIN 1_employee e on g.eid=e.eid 
					  LEFT JOIN 1_support_groups sg on g.supportgrp=sg.gid 
					  LEFT JOIN prinumber p on g.prinumber=p.number
					  LEFT JOIN 1_custom_region cr on g.primary_rule=cr.regionid
					  WHERE g.bid='1' 
					  AND g.gid='14'
[2017-06-19 12:22:55]	SQL :	SELECT * FROM 1_customfieldsvalue 
				WHERE bid='1' 
				AND modid='3'
				AND dataid='14'
[2017-06-19 12:22:55]	SQL :	SELECT COALESCE(COUNT(callid), 0) AS cnt
							FROM 1_callhistory h 
							WHERE (h.`starttime` >= DATE_SUB(CURDATE(), INTERVAL 6 DAY)) AND h.gid = 14 GROUP BY DAY(h.starttime)
[2017-06-19 12:22:55]	DEBUG :	Database Driver Class Initialized
[2017-06-19 12:22:55]	SQL :	SELECT g.*,e.empname as eid,sg.groupname as supportgroup,
					  if(g.connectowner=1,'YES','NO') as connectwner,
					  g.eid as epid,if(g.record=1,'YES','NO') as records,
					  if(g.replytocustomer=1,'YES','NO') as replycus,
					  if(g.replytoexecutive=1,'YES','NO') as replyexe,
					  if(g.pincode=1,'YES','NO') as pcode,
					  p.number as prinumber,
					  p.landingnumber as addnumber,(if(g.primary_rule=0,'All',cr.regionname)) as regionname,
					  r.rulename as rules,g.rules as rule
					  FROM 1_groups g 
					  LEFT JOIN group_rules r on g.rules=r.rulesid 
					  LEFT JOIN 1_employee e on g.eid=e.eid 
					  LEFT JOIN 1_support_groups sg on g.supportgrp=sg.gid 
					  LEFT JOIN prinumber p on g.prinumber=p.number
					  LEFT JOIN 1_custom_region cr on g.primary_rule=cr.regionid
					  WHERE g.bid='1' 
					  AND g.gid='15'
[2017-06-19 12:22:55]	SQL :	SELECT * FROM 1_customfieldsvalue 
				WHERE bid='1' 
				AND modid='3'
				AND dataid='15'
[2017-06-19 12:22:55]	SQL :	SELECT COALESCE(COUNT(callid), 0) AS cnt
							FROM 1_callhistory h 
							WHERE (h.`starttime` >= DATE_SUB(CURDATE(), INTERVAL 6 DAY)) AND h.gid = 15 GROUP BY DAY(h.starttime)
[2017-06-19 12:22:55]	SQL :	SELECT GROUP_CONCAT(empname SEPARATOR ',') as empname FROM 1_employee WHERE eid IN(58 )
[2017-06-19 12:22:55]	DEBUG :	Database Driver Class Initialized
[2017-06-19 12:22:55]	SQL :	SELECT g.*,e.empname as eid,sg.groupname as supportgroup,
					  if(g.connectowner=1,'YES','NO') as connectwner,
					  g.eid as epid,if(g.record=1,'YES','NO') as records,
					  if(g.replytocustomer=1,'YES','NO') as replycus,
					  if(g.replytoexecutive=1,'YES','NO') as replyexe,
					  if(g.pincode=1,'YES','NO') as pcode,
					  p.number as prinumber,
					  p.landingnumber as addnumber,(if(g.primary_rule=0,'All',cr.regionname)) as regionname,
					  r.rulename as rules,g.rules as rule
					  FROM 1_groups g 
					  LEFT JOIN group_rules r on g.rules=r.rulesid 
					  LEFT JOIN 1_employee e on g.eid=e.eid 
					  LEFT JOIN 1_support_groups sg on g.supportgrp=sg.gid 
					  LEFT JOIN prinumber p on g.prinumber=p.number
					  LEFT JOIN 1_custom_region cr on g.primary_rule=cr.regionid
					  WHERE g.bid='1' 
					  AND g.gid='16'
[2017-06-19 12:22:55]	SQL :	SELECT * FROM 1_customfieldsvalue 
				WHERE bid='1' 
				AND modid='3'
				AND dataid='16'
[2017-06-19 12:22:55]	SQL :	SELECT COALESCE(COUNT(callid), 0) AS cnt
							FROM 1_callhistory h 
							WHERE (h.`starttime` >= DATE_SUB(CURDATE(), INTERVAL 6 DAY)) AND h.gid = 16 GROUP BY DAY(h.starttime)
[2017-06-19 12:22:55]	DEBUG :	Database Driver Class Initialized
[2017-06-19 12:22:55]	SQL :	SELECT g.*,e.empname as eid,sg.groupname as supportgroup,
					  if(g.connectowner=1,'YES','NO') as connectwner,
					  g.eid as epid,if(g.record=1,'YES','NO') as records,
					  if(g.replytocustomer=1,'YES','NO') as replycus,
					  if(g.replytoexecutive=1,'YES','NO') as replyexe,
					  if(g.pincode=1,'YES','NO') as pcode,
					  p.number as prinumber,
					  p.landingnumber as addnumber,(if(g.primary_rule=0,'All',cr.regionname)) as regionname,
					  r.rulename as rules,g.rules as rule
					  FROM 1_groups g 
					  LEFT JOIN group_rules r on g.rules=r.rulesid 
					  LEFT JOIN 1_employee e on g.eid=e.eid 
					  LEFT JOIN 1_support_groups sg on g.supportgrp=sg.gid 
					  LEFT JOIN prinumber p on g.prinumber=p.number
					  LEFT JOIN 1_custom_region cr on g.primary_rule=cr.regionid
					  WHERE g.bid='1' 
					  AND g.gid='17'
[2017-06-19 12:22:55]	SQL :	SELECT * FROM 1_customfieldsvalue 
				WHERE bid='1' 
				AND modid='3'
				AND dataid='17'
[2017-06-19 12:22:55]	SQL :	SELECT COALESCE(COUNT(callid), 0) AS cnt
							FROM 1_callhistory h 
							WHERE (h.`starttime` >= DATE_SUB(CURDATE(), INTERVAL 6 DAY)) AND h.gid = 17 GROUP BY DAY(h.starttime)
[2017-06-19 12:22:55]	DEBUG :	Database Driver Class Initialized
[2017-06-19 12:22:55]	SQL :	SELECT * FROM ( 
				SELECT 's' as type,f.addon,f.fieldid,f.modid,
				f.fieldname,'' as fieldtype,'' as fieldKey,'' as options,
				'' as defaultvalue,f.is_required as is_required,f.is_hidden,COALESCE(l.display_order,0) as display_order,
				l.customlabel,COALESCE(l.show,1) as `show`,COALESCE(l.listing,1) as `listing`
				FROM systemfields f
				LEFT JOIN (
					SELECT * FROM 1_custom_label
					WHERE fieldtype='s'
				) as l
				on (f.fieldid=l.fieldid AND l.modid=f.modid)
				WHERE f.modid='3'  AND f.is_hidden=0   AND f.addon=0 
				UNION
				SELECT 'c' as type,'0',f.fieldid,f.modid,
				f.fieldname,f.fieldtype,f.field_key as fieldKey,f.options,
				f.defaultvalue,f.is_required as is_required,'',COALESCE(l.display_order,0) as display_order,
				l.customlabel,COALESCE(l.show,1) as `show`,COALESCE(l.listing,1) as `listing`
				FROM 1_customfields f
				LEFT JOIN (
					SELECT * FROM 1_custom_label
					WHERE fieldtype='c'
				) as l
				on (f.fieldid=l.fieldid AND l.modid=f.modid)
				WHERE f.modid='3') as t ORDER BY display_order ASC
[2017-06-19 12:22:55]	SQL :	select eid,empname from 1_employee where status=1 ORDER BY empname
[2017-06-19 12:22:55]	DEBUG :	Database Driver Class Initialized
[2017-06-19 12:22:55]	SQL :	SELECT * FROM 1_user_role
							WHERE roleid='1'
							AND bid='1'
[2017-06-19 12:22:55]	SQL :	SELECT m.modid,m.modname,m.moddesc,
							COALESCE(o.opt_add,0) as opt_add,
							COALESCE(o.opt_view,0) as opt_view,
							COALESCE(o.opt_download,0) as opt_download,
							COALESCE(opt_delete,0) as opt_delete 
							FROM module m
							LEFT JOIN (SELECT * FROM 1_role_mod_opt
							WHERE roleid='1' 
							AND bid='1') as o
							ON m.modid=o.modid where m.status=1
[2017-06-19 12:22:55]	SQL :	SELECT a.*,f.fieldname FROM 1_role_access a
								LEFT JOIN systemfields f on a.fieldid=f.fieldid
								WHERE a.roleid='1'
								AND a.bid='1'
								AND a.fieldtype='s'
[2017-06-19 12:22:55]	SQL :	SELECT * FROM 1_role_access
								WHERE roleid='1'
								AND bid='1'
							AND fieldtype='c'
[2017-06-19 12:22:55]	SQL :	SELECT * FROM 1_employee WHERE status='1' ORDER BY empname
[2017-06-19 12:22:55]	DEBUG :	File loaded: /var/www/html/mcnew/system/application/views/mainheader.php
[2017-06-19 12:22:55]	DEBUG :	Database Driver Class Initialized
[2017-06-19 12:22:55]	SQL :	select a.*,e.empname as reporttoname,b.rolename  as role,if(u.recording=1,'Yes','No') as recording
					  from 1_employee a
					  LEFT JOIN  1_employee e on a.reportto=e.eid
					  LEFT JOIN  user u on a.eid=u.eid
					  ,1_user_role b 
					  where a.roleid=b.roleid AND a.eid='1'
[2017-06-19 12:22:55]	SQL :	SELECT * FROM 1_customfieldsvalue 
				WHERE bid='1' 
				AND modid='2'
				AND dataid='1'
[2017-06-19 12:22:55]	DEBUG :	File loaded: /var/www/html/mcnew/system/application/views/leftsidebar.php
[2017-06-19 12:22:55]	DEBUG :	File loaded: /var/www/html/mcnew/system/application/views/list_view.php
[2017-06-19 12:22:55]	DEBUG :	File loaded: /var/www/html/mcnew/system/application/views/footer.php
[2017-06-19 12:22:55]	DEBUG :	Final output sent to browser
[2017-06-19 12:22:55]	DEBUG :	Total execution time: 0.1727
[2017-06-19 12:22:59]	DEBUG :	Config Class Initialized
[2017-06-19 12:22:59]	DEBUG :	Hooks Class Initialized
[2017-06-19 12:22:59]	DEBUG :	URI Class Initialized
[2017-06-19 12:22:59]	DEBUG :	Router Class Initialized
[2017-06-19 12:22:59]	DEBUG :	Output Class Initialized
[2017-06-19 12:22:59]	DEBUG :	Input Class Initialized
[2017-06-19 12:22:59]	DEBUG :	XSS Filtering completed
[2017-06-19 12:22:59]	DEBUG :	XSS Filtering completed
[2017-06-19 12:22:59]	DEBUG :	XSS Filtering completed
[2017-06-19 12:22:59]	DEBUG :	XSS Filtering completed
[2017-06-19 12:22:59]	DEBUG :	Global POST and COOKIE data sanitized
[2017-06-19 12:22:59]	DEBUG :	Language Class Initialized
[2017-06-19 12:22:59]	DEBUG :	Loader Class Initialized
[2017-06-19 12:22:59]	DEBUG :	Helper loaded: url_helper
[2017-06-19 12:22:59]	DEBUG :	Helper loaded: form_helper
[2017-06-19 12:22:59]	DEBUG :	Helper loaded: html_helper
[2017-06-19 12:22:59]	DEBUG :	Helper loaded: email_helper
[2017-06-19 12:22:59]	DEBUG :	Helper loaded: ckeditor_helper
[2017-06-19 12:22:59]	DEBUG :	Helper loaded: mcube_helper
[2017-06-19 12:22:59]	DEBUG :	Database Driver Class Initialized
[2017-06-19 12:22:59]	ERROR :	Severity: 8192  --> mysql_pconnect(): The mysql extension is deprecated and will be removed in the future: use mysqli or PDO instead /var/www/html/mcnew/system/database/drivers/mysql/mysql_driver.php 88
[2017-06-19 12:22:59]	DEBUG :	Session Class Initialized
[2017-06-19 12:22:59]	DEBUG :	Helper loaded: string_helper
[2017-06-19 12:22:59]	DEBUG :	Encrypt Class Initialized
[2017-06-19 12:22:59]	SQL :	SELECT *
FROM (`call_sessions`)
WHERE `session_id` = '847e9ee4e1543e295a6ddd381996c5e3'
AND `user_agent` = 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36'
[2017-06-19 12:22:59]	DEBUG :	Session routines successfully run
[2017-06-19 12:22:59]	DEBUG :	Table Class Initialized
[2017-06-19 12:22:59]	DEBUG :	Pagination Class Initialized
[2017-06-19 12:22:59]	DEBUG :	Config file loaded: config/paypallib_config.php
[2017-06-19 12:22:59]	DEBUG :	Form Validation Class Initialized
[2017-06-19 12:22:59]	DEBUG :	Email Class Initialized
[2017-06-19 12:22:59]	DEBUG :	Language file loaded: language/english/calendar_lang.php
[2017-06-19 12:22:59]	DEBUG :	Calendar Class Initialized
[2017-06-19 12:22:59]	DEBUG :	Controller Class Initialized
[2017-06-19 12:22:59]	DEBUG :	Model Class Initialized
[2017-06-19 12:22:59]	DEBUG :	Model Class Initialized
[2017-06-19 12:22:59]	DEBUG :	Model Class Initialized
[2017-06-19 12:22:59]	DEBUG :	Model Class Initialized
[2017-06-19 12:22:59]	DEBUG :	Model Class Initialized
[2017-06-19 12:22:59]	DEBUG :	Model Class Initialized
[2017-06-19 12:22:59]	DEBUG :	Model Class Initialized
[2017-06-19 12:22:59]	DEBUG :	Model Class Initialized
[2017-06-19 12:22:59]	DEBUG :	Model Class Initialized
[2017-06-19 12:22:59]	DEBUG :	Model Class Initialized
[2017-06-19 12:22:59]	DEBUG :	Model Class Initialized
[2017-06-19 12:22:59]	DEBUG :	Model Class Initialized
[2017-06-19 12:22:59]	DEBUG :	Plugin loaded: to_pdf_pi
[2017-06-19 12:22:59]	SQL :	SELECT u.uid FROM user u
				LEFT JOIN 1_employee e on (e.bid=u.bid AND e.eid=u.eid)
				WHERE e.status='1' AND e.login='1' AND u.status='1' 
				AND u.bid='1' AND u.eid='1'
[2017-06-19 12:22:59]	SQL :	SELECT *
FROM (`language`)
WHERE `langid` = '1'
[2017-06-19 12:22:59]	DEBUG :	Database Driver Class Initialized
[2017-06-19 12:22:59]	SQL :	SELECT roleid FROM 1_employee
							WHERE eid='1'
							AND bid='1'
[2017-06-19 12:22:59]	SQL :	UPDATE `call_sessions` SET `last_activity` = '1497853678', `user_data` = 'a:20:{s:3:\"uid\";s:1:\"1\";s:3:\"bid\";s:1:\"1\";s:8:\"username\";s:20:\"ashwini.naidu@vmc.in\";s:3:\"eid\";s:1:\"1\";s:3:\"app\";s:1:\"1\";s:7:\"authkey\";s:17:\"1.1.d886b8e8a0615\";s:9:\"recording\";s:1:\"1\";s:10:\"mcubecalls\";s:1:\"1\";s:7:\"mtdebug\";s:1:\"1\";s:8:\"deviceid\";s:36:\"ffffffff-a4d5-960f-ffff-ffff82ba1723\";s:8:\"language\";s:1:\"1\";s:6:\"status\";s:1:\"1\";s:9:\"appstatus\";s:1:\"1\";s:3:\"pid\";s:1:\"0\";s:3:\"act\";s:1:\"0\";s:16:\"registrationdate\";s:19:\"2014-09-08 16:04:19\";s:10:\"dnd_status\";s:1:\"0\";s:9:\"logged_in\";s:1:\"1\";s:6:\"roleid\";s:1:\"1\";s:4:\"cbid\";s:1:\"1\";}' WHERE `session_id` = '847e9ee4e1543e295a6ddd381996c5e3'
[2017-06-19 12:22:59]	DEBUG :	Database Driver Class Initialized
[2017-06-19 12:22:59]	SQL :	SELECT * FROM 1_user_role
							WHERE roleid='1'
							AND bid='1'
[2017-06-19 12:22:59]	SQL :	SELECT m.modid,m.modname,m.moddesc,
							COALESCE(o.opt_add,0) as opt_add,
							COALESCE(o.opt_view,0) as opt_view,
							COALESCE(o.opt_download,0) as opt_download,
							COALESCE(opt_delete,0) as opt_delete 
							FROM module m
							LEFT JOIN (SELECT * FROM 1_role_mod_opt
							WHERE roleid='1' 
							AND bid='1') as o
							ON m.modid=o.modid where m.status=1
[2017-06-19 12:22:59]	SQL :	SELECT a.*,f.fieldname FROM 1_role_access a
								LEFT JOIN systemfields f on a.fieldid=f.fieldid
								WHERE a.roleid='1'
								AND a.bid='1'
								AND a.fieldtype='s'
[2017-06-19 12:22:59]	SQL :	SELECT * FROM 1_role_access
								WHERE roleid='1'
								AND bid='1'
							AND fieldtype='c'
[2017-06-19 12:22:59]	SQL :	SELECT a.selfdisable FROM 1_employee a WHERE a.eid='1'
[2017-06-19 12:22:59]	DEBUG :	Language file loaded: language/english/unit_test_lang.php
[2017-06-19 12:22:59]	DEBUG :	Language file loaded: language/english/db_lang.php
[2017-06-19 12:22:59]	DEBUG :	Language file loaded: language/english/ftp_lang.php
[2017-06-19 12:22:59]	DEBUG :	Language file loaded: language/english/menu_lang.php
[2017-06-19 12:22:59]	DEBUG :	Language file loaded: language/english/db_tables_lang.php
[2017-06-19 12:22:59]	DEBUG :	Language file loaded: language/english/form_level_lang.php
[2017-06-19 12:22:59]	DEBUG :	Language file loaded: language/english/form_validation_lang.php
[2017-06-19 12:22:59]	DEBUG :	Language file loaded: language/english/email_lang.php
[2017-06-19 12:22:59]	DEBUG :	Language file loaded: language/english/number_lang.php
[2017-06-19 12:22:59]	DEBUG :	Language file loaded: language/english/layout_lang.php
[2017-06-19 12:22:59]	DEBUG :	Language file loaded: language/english/validation_lang.php
[2017-06-19 12:22:59]	DEBUG :	Language file loaded: language/english/scaffolding_lang.php
[2017-06-19 12:22:59]	DEBUG :	Language file loaded: language/english/date_lang.php
[2017-06-19 12:22:59]	DEBUG :	Language file loaded: language/english/profiler_lang.php
[2017-06-19 12:22:59]	DEBUG :	Language file loaded: language/english/imglib_lang.php
[2017-06-19 12:22:59]	DEBUG :	Language file loaded: language/english/error_msg_lang.php
[2017-06-19 12:22:59]	DEBUG :	Language file loaded: language/english/upload_lang.php
[2017-06-19 12:22:59]	SQL :	SELECT id,category,subcategory,type,status FROM feedback WHERE status=1 
[2017-06-19 12:22:59]	SQL :	SELECT feature_id FROM business_feature WHERE bid='1'
[2017-06-19 12:22:59]	SQL :	SELECT feature_id FROM business_feature WHERE bid='1'
[2017-06-19 12:22:59]	SQL :	SELECT feature_id FROM business_feature WHERE bid='1'
[2017-06-19 12:22:59]	SQL :	SELECT id,type FROM 1_leads_status
[2017-06-19 12:22:59]	SQL :	SELECT design FROM business_lead_use WHERE bid='1' LIMIT 0,1
[2017-06-19 12:22:59]	SQL :	SELECT sid,status FROM 1_support_status
[2017-06-19 12:22:59]	SQL :	SELECT feature_id FROM `business_feature` where bid=1
[2017-06-19 12:22:59]	SQL :	SELECT action_align FROM account_settings WHERE bid='1'
[2017-06-19 12:22:59]	SQL :	SELECT dialstatus FROM 1_callhistory WHERE dialstatus = 'CONNECTING'
[2017-06-19 12:22:59]	SQL :	SELECT FOUND_ROWS() as cnt
[2017-06-19 12:22:59]	SQL :	SELECT del_notify FROM account_settings WHERE bid='1'
[2017-06-19 12:22:59]	DEBUG :	Model Class Initialized
[2017-06-19 12:22:59]	DEBUG :	Database Driver Class Initialized
[2017-06-19 12:22:59]	SQL :	SELECT * FROM 1_user_role
							WHERE roleid='1'
							AND bid='1'
[2017-06-19 12:22:59]	SQL :	SELECT m.modid,m.modname,m.moddesc,
							COALESCE(o.opt_add,0) as opt_add,
							COALESCE(o.opt_view,0) as opt_view,
							COALESCE(o.opt_download,0) as opt_download,
							COALESCE(opt_delete,0) as opt_delete 
							FROM module m
							LEFT JOIN (SELECT * FROM 1_role_mod_opt
							WHERE roleid='1' 
							AND bid='1') as o
							ON m.modid=o.modid where m.status=1
[2017-06-19 12:22:59]	SQL :	SELECT a.*,f.fieldname FROM 1_role_access a
								LEFT JOIN systemfields f on a.fieldid=f.fieldid
								WHERE a.roleid='1'
								AND a.bid='1'
								AND a.fieldtype='s'
[2017-06-19 12:22:59]	SQL :	SELECT * FROM 1_role_access
								WHERE roleid='1'
								AND bid='1'
							AND fieldtype='c'
[2017-06-19 12:23:00]	SQL :	SELECT feature_id FROM `business_feature` where bid=1
[2017-06-19 12:23:00]	SQL :	SELECT feature_id FROM `business_feature` where bid=1
[2017-06-19 12:23:00]	SQL :	SELECT * FROM business where pid='1'
[2017-06-19 12:23:00]	DEBUG :	Database Driver Class Initialized
[2017-06-19 12:23:00]	SQL :	SELECT * FROM ( 
				SELECT 's' as type,f.addon,f.fieldid,f.modid,
				f.fieldname,'' as fieldtype,'' as fieldKey,'' as options,
				'' as defaultvalue,f.is_required as is_required,f.is_hidden,COALESCE(l.display_order,0) as display_order,
				l.customlabel,COALESCE(l.show,1) as `show`,COALESCE(l.listing,1) as `listing`
				FROM systemfields f
				LEFT JOIN (
					SELECT * FROM 1_custom_label
					WHERE fieldtype='s'
				) as l
				on (f.fieldid=l.fieldid AND l.modid=f.modid)
				WHERE f.modid='3'  AND f.is_hidden=0 
				UNION
				SELECT 'c' as type,'0',f.fieldid,f.modid,
				f.fieldname,f.fieldtype,f.field_key as fieldKey,f.options,
				f.defaultvalue,f.is_required as is_required,'',COALESCE(l.display_order,0) as display_order,
				l.customlabel,COALESCE(l.show,1) as `show`,COALESCE(l.listing,1) as `listing`
				FROM 1_customfields f
				LEFT JOIN (
					SELECT * FROM 1_custom_label
					WHERE fieldtype='c'
				) as l
				on (f.fieldid=l.fieldid AND l.modid=f.modid)
				WHERE f.modid='3') as t ORDER BY display_order ASC
[2017-06-19 12:23:00]	DEBUG :	Database Driver Class Initialized
[2017-06-19 12:23:00]	SQL :	SELECT g.*,e.empname as eid,sg.groupname as supportgroup,
					  if(g.connectowner=1,'YES','NO') as connectwner,
					  g.eid as epid,if(g.record=1,'YES','NO') as records,
					  if(g.replytocustomer=1,'YES','NO') as replycus,
					  if(g.replytoexecutive=1,'YES','NO') as replyexe,
					  if(g.pincode=1,'YES','NO') as pcode,
					  p.number as prinumber,
					  p.landingnumber as addnumber,(if(g.primary_rule=0,'All',cr.regionname)) as regionname,
					  r.rulename as rules,g.rules as rule
					  FROM 1_groups g 
					  LEFT JOIN group_rules r on g.rules=r.rulesid 
					  LEFT JOIN 1_employee e on g.eid=e.eid 
					  LEFT JOIN 1_support_groups sg on g.supportgrp=sg.gid 
					  LEFT JOIN prinumber p on g.prinumber=p.number
					  LEFT JOIN 1_custom_region cr on g.primary_rule=cr.regionid
					  WHERE g.bid='1' 
					  AND g.gid='17'
[2017-06-19 12:23:00]	SQL :	SELECT * FROM 1_customfieldsvalue 
				WHERE bid='1' 
				AND modid='3'
				AND dataid='17'
[2017-06-19 12:23:00]	SQL :	SELECT s.fieldname
							FROM systemfields s
							LEFT JOIN `features` f on s.addon=f.feature_id
							LEFT JOIN business_packageaddons b on (f.feature_id=b.feature_id AND b.number='200048')
							WHERE s.modid='3' AND s.addon!=0 AND b.number is null
[2017-06-19 12:23:00]	SQL :	SELECT feature_id FROM business_feature WHERE bid='1'
[2017-06-19 12:23:00]	SQL :	SELECT l.region, p.bid,l.number FROM landingnumbers l 
		                        LEFT JOIN prinumbers p ON p.landingnumber=l.number 
		                        WHERE p.bid='1' 
		                        AND p.status = '0' AND p.type = '0' AND l.module_id = '1'
		                         
[2017-06-19 12:23:00]	SQL :	SELECT p.status,p.number,p.landingnumber from prinumbers p
								LEFT JOIN landingnumbers l on l.pri=p.pri
								WHERE p.bid='1' 
								AND p.ntype=0 AND l.module_id='1'
								
[2017-06-19 12:23:00]	SQL :	SELECT * FROM group_rules
[2017-06-19 12:23:00]	SQL :	select eid,empname from 1_employee where status=1 ORDER BY empname
[2017-06-19 12:23:00]	DEBUG :	Database Driver Class Initialized
[2017-06-19 12:23:00]	SQL :	SELECT * FROM 1_user_role
							WHERE roleid='1'
							AND bid='1'
[2017-06-19 12:23:00]	SQL :	SELECT m.modid,m.modname,m.moddesc,
							COALESCE(o.opt_add,0) as opt_add,
							COALESCE(o.opt_view,0) as opt_view,
							COALESCE(o.opt_download,0) as opt_download,
							COALESCE(opt_delete,0) as opt_delete 
							FROM module m
							LEFT JOIN (SELECT * FROM 1_role_mod_opt
							WHERE roleid='1' 
							AND bid='1') as o
							ON m.modid=o.modid where m.status=1
[2017-06-19 12:23:00]	SQL :	SELECT a.*,f.fieldname FROM 1_role_access a
								LEFT JOIN systemfields f on a.fieldid=f.fieldid
								WHERE a.roleid='1'
								AND a.bid='1'
								AND a.fieldtype='s'
[2017-06-19 12:23:00]	SQL :	SELECT * FROM 1_role_access
								WHERE roleid='1'
								AND bid='1'
							AND fieldtype='c'
[2017-06-19 12:23:00]	SQL :	SELECT * FROM 1_employee WHERE status='1' ORDER BY empname
[2017-06-19 12:23:00]	SQL :	SELECT * FROM 1_custom_region
[2017-06-19 12:23:00]	SQL :	SELECT support FROM `prinumbers` WHERE bid='1' 
[2017-06-19 12:23:00]	SQL :	SELECT * FROM 1_support_groups WHERE status=1
[2017-06-19 12:23:00]	SQL :	select eid,empname from 1_employee where status=1 ORDER BY empname
[2017-06-19 12:23:00]	DEBUG :	Database Driver Class Initialized
[2017-06-19 12:23:00]	SQL :	SELECT * FROM 1_user_role
							WHERE roleid='1'
							AND bid='1'
[2017-06-19 12:23:00]	SQL :	SELECT m.modid,m.modname,m.moddesc,
							COALESCE(o.opt_add,0) as opt_add,
							COALESCE(o.opt_view,0) as opt_view,
							COALESCE(o.opt_download,0) as opt_download,
							COALESCE(opt_delete,0) as opt_delete 
							FROM module m
							LEFT JOIN (SELECT * FROM 1_role_mod_opt
							WHERE roleid='1' 
							AND bid='1') as o
							ON m.modid=o.modid where m.status=1
[2017-06-19 12:23:00]	SQL :	SELECT a.*,f.fieldname FROM 1_role_access a
								LEFT JOIN systemfields f on a.fieldid=f.fieldid
								WHERE a.roleid='1'
								AND a.bid='1'
								AND a.fieldtype='s'
[2017-06-19 12:23:00]	SQL :	SELECT * FROM 1_role_access
								WHERE roleid='1'
								AND bid='1'
							AND fieldtype='c'
[2017-06-19 12:23:00]	SQL :	SELECT * FROM 1_employee WHERE status='1' ORDER BY empname
[2017-06-19 12:23:00]	DEBUG :	File loaded: /var/www/html/mcnew/system/application/views/mainheader.php
[2017-06-19 12:23:00]	DEBUG :	Database Driver Class Initialized
[2017-06-19 12:23:00]	SQL :	select a.*,e.empname as reporttoname,b.rolename  as role,if(u.recording=1,'Yes','No') as recording
					  from 1_employee a
					  LEFT JOIN  1_employee e on a.reportto=e.eid
					  LEFT JOIN  user u on a.eid=u.eid
					  ,1_user_role b 
					  where a.roleid=b.roleid AND a.eid='1'
[2017-06-19 12:23:00]	SQL :	SELECT * FROM 1_customfieldsvalue 
				WHERE bid='1' 
				AND modid='2'
				AND dataid='1'
[2017-06-19 12:23:00]	DEBUG :	File loaded: /var/www/html/mcnew/system/application/views/leftsidebar.php
[2017-06-19 12:23:00]	DEBUG :	File loaded: /var/www/html/mcnew/system/application/views/form_view.php
[2017-06-19 12:23:00]	DEBUG :	File loaded: /var/www/html/mcnew/system/application/views/footer.php
[2017-06-19 12:23:00]	DEBUG :	Final output sent to browser
[2017-06-19 12:23:00]	DEBUG :	Total execution time: 0.1189
[2017-06-19 12:23:19]	DEBUG :	Config Class Initialized
[2017-06-19 12:23:19]	DEBUG :	Hooks Class Initialized
[2017-06-19 12:23:19]	DEBUG :	URI Class Initialized
[2017-06-19 12:23:19]	DEBUG :	Router Class Initialized
[2017-06-19 12:23:19]	DEBUG :	Output Class Initialized
[2017-06-19 12:23:19]	DEBUG :	Input Class Initialized
[2017-06-19 12:23:19]	DEBUG :	XSS Filtering completed
[2017-06-19 12:23:19]	DEBUG :	XSS Filtering completed
[2017-06-19 12:23:19]	DEBUG :	XSS Filtering completed
[2017-06-19 12:23:19]	DEBUG :	XSS Filtering completed
[2017-06-19 12:23:19]	DEBUG :	Global POST and COOKIE data sanitized
[2017-06-19 12:23:19]	DEBUG :	Language Class Initialized
[2017-06-19 12:23:19]	DEBUG :	Loader Class Initialized
[2017-06-19 12:23:19]	DEBUG :	Helper loaded: url_helper
[2017-06-19 12:23:19]	DEBUG :	Helper loaded: form_helper
[2017-06-19 12:23:19]	DEBUG :	Helper loaded: html_helper
[2017-06-19 12:23:19]	DEBUG :	Helper loaded: email_helper
[2017-06-19 12:23:19]	DEBUG :	Helper loaded: ckeditor_helper
[2017-06-19 12:23:19]	DEBUG :	Helper loaded: mcube_helper
[2017-06-19 12:23:19]	DEBUG :	Database Driver Class Initialized
[2017-06-19 12:23:19]	ERROR :	Severity: 8192  --> mysql_pconnect(): The mysql extension is deprecated and will be removed in the future: use mysqli or PDO instead /var/www/html/mcnew/system/database/drivers/mysql/mysql_driver.php 88
[2017-06-19 12:23:19]	DEBUG :	Session Class Initialized
[2017-06-19 12:23:19]	DEBUG :	Helper loaded: string_helper
[2017-06-19 12:23:19]	DEBUG :	Encrypt Class Initialized
[2017-06-19 12:23:19]	SQL :	SELECT *
FROM (`call_sessions`)
WHERE `session_id` = '847e9ee4e1543e295a6ddd381996c5e3'
AND `user_agent` = 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36'
[2017-06-19 12:23:19]	DEBUG :	Session routines successfully run
[2017-06-19 12:23:19]	DEBUG :	Table Class Initialized
[2017-06-19 12:23:19]	DEBUG :	Pagination Class Initialized
[2017-06-19 12:23:19]	DEBUG :	Config file loaded: config/paypallib_config.php
[2017-06-19 12:23:19]	DEBUG :	Form Validation Class Initialized
[2017-06-19 12:23:19]	DEBUG :	Email Class Initialized
[2017-06-19 12:23:19]	DEBUG :	Language file loaded: language/english/calendar_lang.php
[2017-06-19 12:23:19]	DEBUG :	Calendar Class Initialized
[2017-06-19 12:23:19]	DEBUG :	Controller Class Initialized
[2017-06-19 12:23:19]	DEBUG :	Model Class Initialized
[2017-06-19 12:23:19]	DEBUG :	Model Class Initialized
[2017-06-19 12:23:19]	DEBUG :	Model Class Initialized
[2017-06-19 12:23:19]	DEBUG :	Model Class Initialized
[2017-06-19 12:23:19]	DEBUG :	Model Class Initialized
[2017-06-19 12:23:19]	DEBUG :	Model Class Initialized
[2017-06-19 12:23:19]	DEBUG :	Model Class Initialized
[2017-06-19 12:23:19]	DEBUG :	Model Class Initialized
[2017-06-19 12:23:19]	DEBUG :	Model Class Initialized
[2017-06-19 12:23:19]	DEBUG :	Model Class Initialized
[2017-06-19 12:23:19]	DEBUG :	Model Class Initialized
[2017-06-19 12:23:19]	DEBUG :	Model Class Initialized
[2017-06-19 12:23:19]	DEBUG :	Plugin loaded: to_pdf_pi
[2017-06-19 12:23:19]	SQL :	SELECT u.uid FROM user u
				LEFT JOIN 1_employee e on (e.bid=u.bid AND e.eid=u.eid)
				WHERE e.status='1' AND e.login='1' AND u.status='1' 
				AND u.bid='1' AND u.eid='1'
[2017-06-19 12:23:19]	SQL :	SELECT *
FROM (`language`)
WHERE `langid` = '1'
[2017-06-19 12:23:19]	DEBUG :	Database Driver Class Initialized
[2017-06-19 12:23:19]	SQL :	SELECT roleid FROM 1_employee
							WHERE eid='1'
							AND bid='1'
[2017-06-19 12:23:19]	SQL :	UPDATE `call_sessions` SET `last_activity` = '1497853678', `user_data` = 'a:20:{s:3:\"uid\";s:1:\"1\";s:3:\"bid\";s:1:\"1\";s:8:\"username\";s:20:\"ashwini.naidu@vmc.in\";s:3:\"eid\";s:1:\"1\";s:3:\"app\";s:1:\"1\";s:7:\"authkey\";s:17:\"1.1.d886b8e8a0615\";s:9:\"recording\";s:1:\"1\";s:10:\"mcubecalls\";s:1:\"1\";s:7:\"mtdebug\";s:1:\"1\";s:8:\"deviceid\";s:36:\"ffffffff-a4d5-960f-ffff-ffff82ba1723\";s:8:\"language\";s:1:\"1\";s:6:\"status\";s:1:\"1\";s:9:\"appstatus\";s:1:\"1\";s:3:\"pid\";s:1:\"0\";s:3:\"act\";s:1:\"0\";s:16:\"registrationdate\";s:19:\"2014-09-08 16:04:19\";s:10:\"dnd_status\";s:1:\"0\";s:9:\"logged_in\";s:1:\"1\";s:6:\"roleid\";s:1:\"1\";s:4:\"cbid\";s:1:\"1\";}' WHERE `session_id` = '847e9ee4e1543e295a6ddd381996c5e3'
[2017-06-19 12:23:19]	DEBUG :	Database Driver Class Initialized
[2017-06-19 12:23:19]	SQL :	SELECT * FROM 1_user_role
							WHERE roleid='1'
							AND bid='1'
[2017-06-19 12:23:19]	SQL :	SELECT m.modid,m.modname,m.moddesc,
							COALESCE(o.opt_add,0) as opt_add,
							COALESCE(o.opt_view,0) as opt_view,
							COALESCE(o.opt_download,0) as opt_download,
							COALESCE(opt_delete,0) as opt_delete 
							FROM module m
							LEFT JOIN (SELECT * FROM 1_role_mod_opt
							WHERE roleid='1' 
							AND bid='1') as o
							ON m.modid=o.modid where m.status=1
[2017-06-19 12:23:19]	SQL :	SELECT a.*,f.fieldname FROM 1_role_access a
								LEFT JOIN systemfields f on a.fieldid=f.fieldid
								WHERE a.roleid='1'
								AND a.bid='1'
								AND a.fieldtype='s'
[2017-06-19 12:23:19]	SQL :	SELECT * FROM 1_role_access
								WHERE roleid='1'
								AND bid='1'
							AND fieldtype='c'
[2017-06-19 12:23:19]	SQL :	SELECT a.selfdisable FROM 1_employee a WHERE a.eid='1'
[2017-06-19 12:23:19]	DEBUG :	Language file loaded: language/english/unit_test_lang.php
[2017-06-19 12:23:19]	DEBUG :	Language file loaded: language/english/db_lang.php
[2017-06-19 12:23:19]	DEBUG :	Language file loaded: language/english/ftp_lang.php
[2017-06-19 12:23:19]	DEBUG :	Language file loaded: language/english/menu_lang.php
[2017-06-19 12:23:19]	DEBUG :	Language file loaded: language/english/db_tables_lang.php
[2017-06-19 12:23:19]	DEBUG :	Language file loaded: language/english/form_level_lang.php
[2017-06-19 12:23:19]	DEBUG :	Language file loaded: language/english/form_validation_lang.php
[2017-06-19 12:23:19]	DEBUG :	Language file loaded: language/english/email_lang.php
[2017-06-19 12:23:19]	DEBUG :	Language file loaded: language/english/number_lang.php
[2017-06-19 12:23:19]	DEBUG :	Language file loaded: language/english/layout_lang.php
[2017-06-19 12:23:19]	DEBUG :	Language file loaded: language/english/validation_lang.php
[2017-06-19 12:23:19]	DEBUG :	Language file loaded: language/english/scaffolding_lang.php
[2017-06-19 12:23:19]	DEBUG :	Language file loaded: language/english/date_lang.php
[2017-06-19 12:23:19]	DEBUG :	Language file loaded: language/english/profiler_lang.php
[2017-06-19 12:23:19]	DEBUG :	Language file loaded: language/english/imglib_lang.php
[2017-06-19 12:23:19]	DEBUG :	Language file loaded: language/english/error_msg_lang.php
[2017-06-19 12:23:19]	DEBUG :	Language file loaded: language/english/upload_lang.php
[2017-06-19 12:23:19]	SQL :	SELECT id,category,subcategory,type,status FROM feedback WHERE status=1 
[2017-06-19 12:23:19]	SQL :	SELECT feature_id FROM business_feature WHERE bid='1'
[2017-06-19 12:23:19]	SQL :	SELECT feature_id FROM business_feature WHERE bid='1'
[2017-06-19 12:23:19]	SQL :	SELECT feature_id FROM business_feature WHERE bid='1'
[2017-06-19 12:23:19]	SQL :	SELECT id,type FROM 1_leads_status
[2017-06-19 12:23:19]	SQL :	SELECT design FROM business_lead_use WHERE bid='1' LIMIT 0,1
[2017-06-19 12:23:19]	SQL :	SELECT sid,status FROM 1_support_status
[2017-06-19 12:23:19]	SQL :	SELECT feature_id FROM `business_feature` where bid=1
[2017-06-19 12:23:19]	SQL :	SELECT action_align FROM account_settings WHERE bid='1'
[2017-06-19 12:23:19]	SQL :	SELECT dialstatus FROM 1_callhistory WHERE dialstatus = 'CONNECTING'
[2017-06-19 12:23:19]	SQL :	SELECT FOUND_ROWS() as cnt
[2017-06-19 12:23:19]	SQL :	SELECT del_notify FROM account_settings WHERE bid='1'
[2017-06-19 12:23:19]	DEBUG :	Model Class Initialized
[2017-06-19 12:23:19]	DEBUG :	Database Driver Class Initialized
[2017-06-19 12:23:19]	SQL :	SELECT * FROM 1_user_role
							WHERE roleid='1'
							AND bid='1'
[2017-06-19 12:23:19]	SQL :	SELECT m.modid,m.modname,m.moddesc,
							COALESCE(o.opt_add,0) as opt_add,
							COALESCE(o.opt_view,0) as opt_view,
							COALESCE(o.opt_download,0) as opt_download,
							COALESCE(opt_delete,0) as opt_delete 
							FROM module m
							LEFT JOIN (SELECT * FROM 1_role_mod_opt
							WHERE roleid='1' 
							AND bid='1') as o
							ON m.modid=o.modid where m.status=1
[2017-06-19 12:23:19]	SQL :	SELECT a.*,f.fieldname FROM 1_role_access a
								LEFT JOIN systemfields f on a.fieldid=f.fieldid
								WHERE a.roleid='1'
								AND a.bid='1'
								AND a.fieldtype='s'
[2017-06-19 12:23:19]	SQL :	SELECT * FROM 1_role_access
								WHERE roleid='1'
								AND bid='1'
							AND fieldtype='c'
[2017-06-19 12:23:19]	SQL :	SELECT feature_id FROM `business_feature` where bid=1
[2017-06-19 12:23:19]	SQL :	SELECT feature_id FROM `business_feature` where bid=1
[2017-06-19 12:23:19]	SQL :	SELECT * FROM business where pid='1'
[2017-06-19 12:23:19]	DEBUG :	Database Driver Class Initialized
[2017-06-19 12:23:19]	SQL :	SELECT * FROM ( 
				SELECT 's' as type,f.addon,f.fieldid,f.modid,
				f.fieldname,'' as fieldtype,'' as fieldKey,'' as options,
				'' as defaultvalue,f.is_required as is_required,f.is_hidden,COALESCE(l.display_order,0) as display_order,
				l.customlabel,COALESCE(l.show,1) as `show`,COALESCE(l.listing,1) as `listing`
				FROM systemfields f
				LEFT JOIN (
					SELECT * FROM 1_custom_label
					WHERE fieldtype='s'
				) as l
				on (f.fieldid=l.fieldid AND l.modid=f.modid)
				WHERE f.modid='3'  AND f.is_hidden=0 
				UNION
				SELECT 'c' as type,'0',f.fieldid,f.modid,
				f.fieldname,f.fieldtype,f.field_key as fieldKey,f.options,
				f.defaultvalue,f.is_required as is_required,'',COALESCE(l.display_order,0) as display_order,
				l.customlabel,COALESCE(l.show,1) as `show`,COALESCE(l.listing,1) as `listing`
				FROM 1_customfields f
				LEFT JOIN (
					SELECT * FROM 1_custom_label
					WHERE fieldtype='c'
				) as l
				on (f.fieldid=l.fieldid AND l.modid=f.modid)
				WHERE f.modid='3') as t ORDER BY display_order ASC
[2017-06-19 12:23:19]	DEBUG :	Database Driver Class Initialized
[2017-06-19 12:23:19]	SQL :	SELECT g.*,e.empname as eid,sg.groupname as supportgroup,
					  if(g.connectowner=1,'YES','NO') as connectwner,
					  g.eid as epid,if(g.record=1,'YES','NO') as records,
					  if(g.replytocustomer=1,'YES','NO') as replycus,
					  if(g.replytoexecutive=1,'YES','NO') as replyexe,
					  if(g.pincode=1,'YES','NO') as pcode,
					  p.number as prinumber,
					  p.landingnumber as addnumber,(if(g.primary_rule=0,'All',cr.regionname)) as regionname,
					  r.rulename as rules,g.rules as rule
					  FROM 1_groups g 
					  LEFT JOIN group_rules r on g.rules=r.rulesid 
					  LEFT JOIN 1_employee e on g.eid=e.eid 
					  LEFT JOIN 1_support_groups sg on g.supportgrp=sg.gid 
					  LEFT JOIN prinumber p on g.prinumber=p.number
					  LEFT JOIN 1_custom_region cr on g.primary_rule=cr.regionid
					  WHERE g.bid='1' 
					  AND g.gid='17'
[2017-06-19 12:23:19]	SQL :	SELECT * FROM 1_customfieldsvalue 
				WHERE bid='1' 
				AND modid='3'
				AND dataid='17'
[2017-06-19 12:23:19]	SQL :	SELECT s.fieldname
							FROM systemfields s
							LEFT JOIN `features` f on s.addon=f.feature_id
							LEFT JOIN business_packageaddons b on (f.feature_id=b.feature_id AND b.number='200048')
							WHERE s.modid='3' AND s.addon!=0 AND b.number is null
[2017-06-19 12:23:19]	SQL :	SELECT feature_id FROM business_feature WHERE bid='1'
[2017-06-19 12:23:19]	SQL :	SELECT l.region, p.bid,l.number FROM landingnumbers l 
		                        LEFT JOIN prinumbers p ON p.landingnumber=l.number 
		                        WHERE p.bid='1' 
		                        AND p.status = '0' AND p.type = '0' AND l.module_id = '1'
		                         
[2017-06-19 12:23:19]	SQL :	SELECT p.status,p.number,p.landingnumber from prinumbers p
								LEFT JOIN landingnumbers l on l.pri=p.pri
								WHERE p.bid='1' 
								AND p.ntype=0 AND l.module_id='1'
								
[2017-06-19 12:23:19]	SQL :	SELECT * FROM group_rules
[2017-06-19 12:23:19]	SQL :	select eid,empname from 1_employee where status=1 ORDER BY empname
[2017-06-19 12:23:19]	DEBUG :	Database Driver Class Initialized
[2017-06-19 12:23:19]	SQL :	SELECT * FROM 1_user_role
							WHERE roleid='1'
							AND bid='1'
[2017-06-19 12:23:19]	SQL :	SELECT m.modid,m.modname,m.moddesc,
							COALESCE(o.opt_add,0) as opt_add,
							COALESCE(o.opt_view,0) as opt_view,
							COALESCE(o.opt_download,0) as opt_download,
							COALESCE(opt_delete,0) as opt_delete 
							FROM module m
							LEFT JOIN (SELECT * FROM 1_role_mod_opt
							WHERE roleid='1' 
							AND bid='1') as o
							ON m.modid=o.modid where m.status=1
[2017-06-19 12:23:19]	SQL :	SELECT a.*,f.fieldname FROM 1_role_access a
								LEFT JOIN systemfields f on a.fieldid=f.fieldid
								WHERE a.roleid='1'
								AND a.bid='1'
								AND a.fieldtype='s'
[2017-06-19 12:23:19]	SQL :	SELECT * FROM 1_role_access
								WHERE roleid='1'
								AND bid='1'
							AND fieldtype='c'
[2017-06-19 12:23:19]	SQL :	SELECT * FROM 1_employee WHERE status='1' ORDER BY empname
[2017-06-19 12:23:19]	SQL :	SELECT * FROM 1_custom_region
[2017-06-19 12:23:19]	SQL :	SELECT support FROM `prinumbers` WHERE bid='1' 
[2017-06-19 12:23:19]	SQL :	SELECT * FROM 1_support_groups WHERE status=1
[2017-06-19 12:23:19]	SQL :	select eid,empname from 1_employee where status=1 ORDER BY empname
[2017-06-19 12:23:19]	DEBUG :	Database Driver Class Initialized
[2017-06-19 12:23:19]	SQL :	SELECT * FROM 1_user_role
							WHERE roleid='1'
							AND bid='1'
[2017-06-19 12:23:19]	SQL :	SELECT m.modid,m.modname,m.moddesc,
							COALESCE(o.opt_add,0) as opt_add,
							COALESCE(o.opt_view,0) as opt_view,
							COALESCE(o.opt_download,0) as opt_download,
							COALESCE(opt_delete,0) as opt_delete 
							FROM module m
							LEFT JOIN (SELECT * FROM 1_role_mod_opt
							WHERE roleid='1' 
							AND bid='1') as o
							ON m.modid=o.modid where m.status=1
[2017-06-19 12:23:19]	SQL :	SELECT a.*,f.fieldname FROM 1_role_access a
								LEFT JOIN systemfields f on a.fieldid=f.fieldid
								WHERE a.roleid='1'
								AND a.bid='1'
								AND a.fieldtype='s'
[2017-06-19 12:23:19]	SQL :	SELECT * FROM 1_role_access
								WHERE roleid='1'
								AND bid='1'
							AND fieldtype='c'
[2017-06-19 12:23:19]	SQL :	SELECT * FROM 1_employee WHERE status='1' ORDER BY empname
[2017-06-19 12:23:19]	DEBUG :	File loaded: /var/www/html/mcnew/system/application/views/mainheader.php
[2017-06-19 12:23:19]	DEBUG :	Database Driver Class Initialized
[2017-06-19 12:23:19]	SQL :	select a.*,e.empname as reporttoname,b.rolename  as role,if(u.recording=1,'Yes','No') as recording
					  from 1_employee a
					  LEFT JOIN  1_employee e on a.reportto=e.eid
					  LEFT JOIN  user u on a.eid=u.eid
					  ,1_user_role b 
					  where a.roleid=b.roleid AND a.eid='1'
[2017-06-19 12:23:19]	SQL :	SELECT * FROM 1_customfieldsvalue 
				WHERE bid='1' 
				AND modid='2'
				AND dataid='1'
[2017-06-19 12:23:19]	DEBUG :	File loaded: /var/www/html/mcnew/system/application/views/leftsidebar.php
[2017-06-19 12:23:19]	DEBUG :	File loaded: /var/www/html/mcnew/system/application/views/form_view.php
[2017-06-19 12:23:19]	DEBUG :	File loaded: /var/www/html/mcnew/system/application/views/footer.php
[2017-06-19 12:23:19]	DEBUG :	Final output sent to browser
[2017-06-19 12:23:19]	DEBUG :	Total execution time: 0.2400
[2017-06-19 12:23:22]	DEBUG :	Config Class Initialized
[2017-06-19 12:23:22]	DEBUG :	Hooks Class Initialized
[2017-06-19 12:23:22]	DEBUG :	URI Class Initialized
[2017-06-19 12:23:22]	DEBUG :	Router Class Initialized
[2017-06-19 12:23:22]	DEBUG :	Output Class Initialized
[2017-06-19 12:23:22]	DEBUG :	Input Class Initialized
[2017-06-19 12:23:22]	DEBUG :	XSS Filtering completed
[2017-06-19 12:23:22]	DEBUG :	XSS Filtering completed
[2017-06-19 12:23:22]	DEBUG :	XSS Filtering completed
[2017-06-19 12:23:22]	DEBUG :	XSS Filtering completed
[2017-06-19 12:23:22]	DEBUG :	XSS Filtering completed
[2017-06-19 12:23:22]	DEBUG :	XSS Filtering completed
[2017-06-19 12:23:22]	DEBUG :	XSS Filtering completed
[2017-06-19 12:23:22]	DEBUG :	XSS Filtering completed
[2017-06-19 12:23:22]	DEBUG :	XSS Filtering completed
[2017-06-19 12:23:22]	DEBUG :	XSS Filtering completed
[2017-06-19 12:23:22]	DEBUG :	XSS Filtering completed
[2017-06-19 12:23:22]	DEBUG :	XSS Filtering completed
[2017-06-19 12:23:22]	DEBUG :	XSS Filtering completed
[2017-06-19 12:23:22]	DEBUG :	XSS Filtering completed
[2017-06-19 12:23:22]	DEBUG :	XSS Filtering completed
[2017-06-19 12:23:22]	DEBUG :	XSS Filtering completed
[2017-06-19 12:23:22]	DEBUG :	XSS Filtering completed
[2017-06-19 12:23:22]	DEBUG :	XSS Filtering completed
[2017-06-19 12:23:22]	DEBUG :	XSS Filtering completed
[2017-06-19 12:23:22]	DEBUG :	XSS Filtering completed
[2017-06-19 12:23:22]	DEBUG :	XSS Filtering completed
[2017-06-19 12:23:22]	DEBUG :	XSS Filtering completed
[2017-06-19 12:23:22]	DEBUG :	XSS Filtering completed
[2017-06-19 12:23:22]	DEBUG :	XSS Filtering completed
[2017-06-19 12:23:22]	DEBUG :	XSS Filtering completed
[2017-06-19 12:23:22]	DEBUG :	XSS Filtering completed
[2017-06-19 12:23:22]	DEBUG :	XSS Filtering completed
[2017-06-19 12:23:22]	DEBUG :	XSS Filtering completed
[2017-06-19 12:23:22]	DEBUG :	XSS Filtering completed
[2017-06-19 12:23:22]	DEBUG :	XSS Filtering completed
[2017-06-19 12:23:22]	DEBUG :	XSS Filtering completed
[2017-06-19 12:23:22]	DEBUG :	XSS Filtering completed
[2017-06-19 12:23:22]	DEBUG :	XSS Filtering completed
[2017-06-19 12:23:22]	DEBUG :	XSS Filtering completed
[2017-06-19 12:23:22]	DEBUG :	XSS Filtering completed
[2017-06-19 12:23:22]	DEBUG :	XSS Filtering completed
[2017-06-19 12:23:22]	DEBUG :	XSS Filtering completed
[2017-06-19 12:23:22]	DEBUG :	XSS Filtering completed
[2017-06-19 12:23:22]	DEBUG :	XSS Filtering completed
[2017-06-19 12:23:22]	DEBUG :	XSS Filtering completed
[2017-06-19 12:23:22]	DEBUG :	XSS Filtering completed
[2017-06-19 12:23:22]	DEBUG :	XSS Filtering completed
[2017-06-19 12:23:22]	DEBUG :	XSS Filtering completed
[2017-06-19 12:23:22]	DEBUG :	XSS Filtering completed
[2017-06-19 12:23:22]	DEBUG :	XSS Filtering completed
[2017-06-19 12:23:22]	DEBUG :	XSS Filtering completed
[2017-06-19 12:23:22]	DEBUG :	XSS Filtering completed
[2017-06-19 12:23:22]	DEBUG :	XSS Filtering completed
[2017-06-19 12:23:22]	DEBUG :	XSS Filtering completed
[2017-06-19 12:23:22]	DEBUG :	XSS Filtering completed
[2017-06-19 12:23:22]	DEBUG :	XSS Filtering completed
[2017-06-19 12:23:22]	DEBUG :	XSS Filtering completed
[2017-06-19 12:23:22]	DEBUG :	XSS Filtering completed
[2017-06-19 12:23:22]	DEBUG :	Global POST and COOKIE data sanitized
[2017-06-19 12:23:22]	DEBUG :	Language Class Initialized
[2017-06-19 12:23:22]	DEBUG :	Loader Class Initialized
[2017-06-19 12:23:22]	DEBUG :	Helper loaded: url_helper
[2017-06-19 12:23:22]	DEBUG :	Helper loaded: form_helper
[2017-06-19 12:23:22]	DEBUG :	Helper loaded: html_helper
[2017-06-19 12:23:22]	DEBUG :	Helper loaded: email_helper
[2017-06-19 12:23:22]	DEBUG :	Helper loaded: ckeditor_helper
[2017-06-19 12:23:22]	DEBUG :	Helper loaded: mcube_helper
[2017-06-19 12:23:22]	DEBUG :	Database Driver Class Initialized
[2017-06-19 12:23:22]	ERROR :	Severity: 8192  --> mysql_pconnect(): The mysql extension is deprecated and will be removed in the future: use mysqli or PDO instead /var/www/html/mcnew/system/database/drivers/mysql/mysql_driver.php 88
[2017-06-19 12:23:22]	DEBUG :	Session Class Initialized
[2017-06-19 12:23:22]	DEBUG :	Helper loaded: string_helper
[2017-06-19 12:23:22]	DEBUG :	Encrypt Class Initialized
[2017-06-19 12:23:22]	SQL :	SELECT *
FROM (`call_sessions`)
WHERE `session_id` = '847e9ee4e1543e295a6ddd381996c5e3'
AND `user_agent` = 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36'
[2017-06-19 12:23:22]	DEBUG :	Session routines successfully run
[2017-06-19 12:23:22]	DEBUG :	Table Class Initialized
[2017-06-19 12:23:22]	DEBUG :	Pagination Class Initialized
[2017-06-19 12:23:22]	DEBUG :	Config file loaded: config/paypallib_config.php
[2017-06-19 12:23:22]	DEBUG :	Form Validation Class Initialized
[2017-06-19 12:23:22]	DEBUG :	Email Class Initialized
[2017-06-19 12:23:22]	DEBUG :	Language file loaded: language/english/calendar_lang.php
[2017-06-19 12:23:22]	DEBUG :	Calendar Class Initialized
[2017-06-19 12:23:22]	DEBUG :	Controller Class Initialized
[2017-06-19 12:23:22]	DEBUG :	Model Class Initialized
[2017-06-19 12:23:22]	DEBUG :	Model Class Initialized
[2017-06-19 12:23:22]	DEBUG :	Model Class Initialized
[2017-06-19 12:23:22]	DEBUG :	Model Class Initialized
[2017-06-19 12:23:22]	DEBUG :	Model Class Initialized
[2017-06-19 12:23:22]	DEBUG :	Model Class Initialized
[2017-06-19 12:23:22]	DEBUG :	Model Class Initialized
[2017-06-19 12:23:22]	DEBUG :	Model Class Initialized
[2017-06-19 12:23:22]	DEBUG :	Model Class Initialized
[2017-06-19 12:23:22]	DEBUG :	Model Class Initialized
[2017-06-19 12:23:22]	DEBUG :	Model Class Initialized
[2017-06-19 12:23:22]	DEBUG :	Model Class Initialized
[2017-06-19 12:23:22]	DEBUG :	Plugin loaded: to_pdf_pi
[2017-06-19 12:23:22]	SQL :	SELECT u.uid FROM user u
				LEFT JOIN 1_employee e on (e.bid=u.bid AND e.eid=u.eid)
				WHERE e.status='1' AND e.login='1' AND u.status='1' 
				AND u.bid='1' AND u.eid='1'
[2017-06-19 12:23:22]	SQL :	SELECT *
FROM (`language`)
WHERE `langid` = '1'
[2017-06-19 12:23:22]	DEBUG :	Database Driver Class Initialized
[2017-06-19 12:23:22]	SQL :	SELECT roleid FROM 1_employee
							WHERE eid='1'
							AND bid='1'
[2017-06-19 12:23:22]	SQL :	UPDATE `call_sessions` SET `last_activity` = '1497853678', `user_data` = 'a:20:{s:3:\"uid\";s:1:\"1\";s:3:\"bid\";s:1:\"1\";s:8:\"username\";s:20:\"ashwini.naidu@vmc.in\";s:3:\"eid\";s:1:\"1\";s:3:\"app\";s:1:\"1\";s:7:\"authkey\";s:17:\"1.1.d886b8e8a0615\";s:9:\"recording\";s:1:\"1\";s:10:\"mcubecalls\";s:1:\"1\";s:7:\"mtdebug\";s:1:\"1\";s:8:\"deviceid\";s:36:\"ffffffff-a4d5-960f-ffff-ffff82ba1723\";s:8:\"language\";s:1:\"1\";s:6:\"status\";s:1:\"1\";s:9:\"appstatus\";s:1:\"1\";s:3:\"pid\";s:1:\"0\";s:3:\"act\";s:1:\"0\";s:16:\"registrationdate\";s:19:\"2014-09-08 16:04:19\";s:10:\"dnd_status\";s:1:\"0\";s:9:\"logged_in\";s:1:\"1\";s:6:\"roleid\";s:1:\"1\";s:4:\"cbid\";s:1:\"1\";}' WHERE `session_id` = '847e9ee4e1543e295a6ddd381996c5e3'
[2017-06-19 12:23:22]	DEBUG :	Database Driver Class Initialized
[2017-06-19 12:23:22]	SQL :	SELECT * FROM 1_user_role
							WHERE roleid='1'
							AND bid='1'
[2017-06-19 12:23:22]	SQL :	SELECT m.modid,m.modname,m.moddesc,
							COALESCE(o.opt_add,0) as opt_add,
							COALESCE(o.opt_view,0) as opt_view,
							COALESCE(o.opt_download,0) as opt_download,
							COALESCE(opt_delete,0) as opt_delete 
							FROM module m
							LEFT JOIN (SELECT * FROM 1_role_mod_opt
							WHERE roleid='1' 
							AND bid='1') as o
							ON m.modid=o.modid where m.status=1
[2017-06-19 12:23:22]	SQL :	SELECT a.*,f.fieldname FROM 1_role_access a
								LEFT JOIN systemfields f on a.fieldid=f.fieldid
								WHERE a.roleid='1'
								AND a.bid='1'
								AND a.fieldtype='s'
[2017-06-19 12:23:22]	SQL :	SELECT * FROM 1_role_access
								WHERE roleid='1'
								AND bid='1'
							AND fieldtype='c'
[2017-06-19 12:23:22]	SQL :	SELECT a.selfdisable FROM 1_employee a WHERE a.eid='1'
[2017-06-19 12:23:22]	DEBUG :	Language file loaded: language/english/unit_test_lang.php
[2017-06-19 12:23:22]	DEBUG :	Language file loaded: language/english/db_lang.php
[2017-06-19 12:23:22]	DEBUG :	Language file loaded: language/english/ftp_lang.php
[2017-06-19 12:23:22]	DEBUG :	Language file loaded: language/english/menu_lang.php
[2017-06-19 12:23:22]	DEBUG :	Language file loaded: language/english/db_tables_lang.php
[2017-06-19 12:23:22]	DEBUG :	Language file loaded: language/english/form_level_lang.php
[2017-06-19 12:23:22]	DEBUG :	Language file loaded: language/english/form_validation_lang.php
[2017-06-19 12:23:22]	DEBUG :	Language file loaded: language/english/email_lang.php
[2017-06-19 12:23:22]	DEBUG :	Language file loaded: language/english/number_lang.php
[2017-06-19 12:23:22]	DEBUG :	Language file loaded: language/english/layout_lang.php
[2017-06-19 12:23:22]	DEBUG :	Language file loaded: language/english/validation_lang.php
[2017-06-19 12:23:22]	DEBUG :	Language file loaded: language/english/scaffolding_lang.php
[2017-06-19 12:23:22]	DEBUG :	Language file loaded: language/english/date_lang.php
[2017-06-19 12:23:22]	DEBUG :	Language file loaded: language/english/profiler_lang.php
[2017-06-19 12:23:22]	DEBUG :	Language file loaded: language/english/imglib_lang.php
[2017-06-19 12:23:22]	DEBUG :	Language file loaded: language/english/error_msg_lang.php
[2017-06-19 12:23:22]	DEBUG :	Language file loaded: language/english/upload_lang.php
[2017-06-19 12:23:22]	SQL :	SELECT id,category,subcategory,type,status FROM feedback WHERE status=1 
[2017-06-19 12:23:22]	SQL :	SELECT feature_id FROM business_feature WHERE bid='1'
[2017-06-19 12:23:22]	SQL :	SELECT feature_id FROM business_feature WHERE bid='1'
[2017-06-19 12:23:22]	SQL :	SELECT feature_id FROM business_feature WHERE bid='1'
[2017-06-19 12:23:22]	SQL :	SELECT id,type FROM 1_leads_status
[2017-06-19 12:23:22]	SQL :	SELECT design FROM business_lead_use WHERE bid='1' LIMIT 0,1
[2017-06-19 12:23:22]	SQL :	SELECT sid,status FROM 1_support_status
[2017-06-19 12:23:22]	SQL :	SELECT feature_id FROM `business_feature` where bid=1
[2017-06-19 12:23:22]	SQL :	SELECT action_align FROM account_settings WHERE bid='1'
[2017-06-19 12:23:22]	SQL :	SELECT dialstatus FROM 1_callhistory WHERE dialstatus = 'CONNECTING'
[2017-06-19 12:23:22]	SQL :	SELECT FOUND_ROWS() as cnt
[2017-06-19 12:23:22]	SQL :	SELECT del_notify FROM account_settings WHERE bid='1'
[2017-06-19 12:23:22]	DEBUG :	Model Class Initialized
[2017-06-19 12:23:22]	DEBUG :	Database Driver Class Initialized
[2017-06-19 12:23:22]	SQL :	SELECT * FROM 1_user_role
							WHERE roleid='1'
							AND bid='1'
[2017-06-19 12:23:22]	SQL :	SELECT m.modid,m.modname,m.moddesc,
							COALESCE(o.opt_add,0) as opt_add,
							COALESCE(o.opt_view,0) as opt_view,
							COALESCE(o.opt_download,0) as opt_download,
							COALESCE(opt_delete,0) as opt_delete 
							FROM module m
							LEFT JOIN (SELECT * FROM 1_role_mod_opt
							WHERE roleid='1' 
							AND bid='1') as o
							ON m.modid=o.modid where m.status=1
[2017-06-19 12:23:22]	SQL :	SELECT a.*,f.fieldname FROM 1_role_access a
								LEFT JOIN systemfields f on a.fieldid=f.fieldid
								WHERE a.roleid='1'
								AND a.bid='1'
								AND a.fieldtype='s'
[2017-06-19 12:23:22]	SQL :	SELECT * FROM 1_role_access
								WHERE roleid='1'
								AND bid='1'
							AND fieldtype='c'
[2017-06-19 12:23:22]	SQL :	SELECT feature_id FROM `business_feature` where bid=1
[2017-06-19 12:23:22]	SQL :	SELECT feature_id FROM `business_feature` where bid=1
[2017-06-19 12:23:22]	SQL :	select	groupname from 1_groups where groupname='new group' and gid!=17
[2017-06-19 12:23:22]	DEBUG :	Database Driver Class Initialized
[2017-06-19 12:23:22]	SQL :	SELECT * FROM 1_user_role
							WHERE roleid='1'
							AND bid='1'
[2017-06-19 12:23:22]	SQL :	SELECT m.modid,m.modname,m.moddesc,
							COALESCE(o.opt_add,0) as opt_add,
							COALESCE(o.opt_view,0) as opt_view,
							COALESCE(o.opt_download,0) as opt_download,
							COALESCE(opt_delete,0) as opt_delete 
							FROM module m
							LEFT JOIN (SELECT * FROM 1_role_mod_opt
							WHERE roleid='1' 
							AND bid='1') as o
							ON m.modid=o.modid where m.status=1
[2017-06-19 12:23:22]	SQL :	SELECT a.*,f.fieldname FROM 1_role_access a
								LEFT JOIN systemfields f on a.fieldid=f.fieldid
								WHERE a.roleid='1'
								AND a.bid='1'
								AND a.fieldtype='s'
[2017-06-19 12:23:22]	SQL :	SELECT * FROM 1_role_access
								WHERE roleid='1'
								AND bid='1'
							AND fieldtype='c'
[2017-06-19 12:23:22]	SQL :	SELECT prinumber FROM 1_groups WHERE gid = '17' 
[2017-06-19 12:23:22]	SQL :	UPDATE prinumbers SET
					status		= '0'
					,associateid= '0'
					WHERE number= '200048'
[2017-06-19 12:23:23]	SQL :	UPDATE prinumbers SET
					status		= '1'
					,associateid= '17'
					WHERE number= '200048'
[2017-06-19 12:23:23]	ERROR :	Severity: Notice  --> Undefined index: voicmess /var/www/html/mcnew/system/application/models/groupmodel.php 418
[2017-06-19 12:23:23]	SQL :	UPDATE `1_groups` SET `replytocust_voitext` = '', `mailalerttowoner` = '1', `groupname` = 'new group', `bday` = '{\"Mon\":{\"day\":\"1\",\"st\":\"00:00\",\"et\":\"23:59\"},\"Tue\":{\"day\":\"1\",\"st\":\"00:00\",\"et\":\"23:59\"},\"Wed\":{\"day\":\"1\",\"st\":\"00:00\",\"et\":\"23:59\"},\"Thu\":{\"day\":\"1\",\"st\":\"00:00\",\"et\":\"23:59\"},\"Fri\":{\"day\":\"1\",\"st\":\"00:00\",\"et\":\"23:59\"},\"Sat\":{\"day\":\"1\",\"st\":\"00:00\",\"et\":\"23:59\"},\"Sun\":{\"day\":\"1\",\"st\":\"00:00\",\"et\":\"23:59\"}}', `prinumber` = '200048', `rules` = '1', `eid` = '5', `keyword` = 'test', `primary_rule` = '0', `record` = '1', `hdaytext` = '', `replymessage` = '', `replytocustomer` = '1', `replytoexecutive` = '1', `timeout` = '25', `oneditaction` = '', `onhangup` = '', `leadaction` = '', `replyattmsg` = '', `oncallaction` = '', `supportaction` = '', `supportgrp` = '', `landingregion` = 'DL', `voicemessagetext` = '', `connectowner` = '0', `recordnotice` = '0', `sameexe` = '0', `misscall` = '0', `pincode` = '0', `allgroup` = 0, `groupkey` = 'MV8xNw==' WHERE `gid` = '17'
[2017-06-19 12:23:23]	SQL :	UPDATE 1_group_emp SET callcounter='0' WHERE gid='17'
[2017-06-19 12:23:23]	SQL :	SELECT COALESCE(MAX(`sno`),0)+1 as id FROM 1_activitylog
[2017-06-19 12:23:23]	SQL :	INSERT INTO `1_activitylog` (`sno`, `bid`, `uid`, `module_name`, `action`) VALUES ('3878', '1', '1', 'Group Module', 'Updated Group  new group')
[2017-06-19 12:23:23]	SQL :	UPDATE `call_sessions` SET `last_activity` = '1497853678', `user_data` = 'a:21:{s:3:\"uid\";s:1:\"1\";s:3:\"bid\";s:1:\"1\";s:8:\"username\";s:20:\"ashwini.naidu@vmc.in\";s:3:\"eid\";s:1:\"1\";s:3:\"app\";s:1:\"1\";s:7:\"authkey\";s:17:\"1.1.d886b8e8a0615\";s:9:\"recording\";s:1:\"1\";s:10:\"mcubecalls\";s:1:\"1\";s:7:\"mtdebug\";s:1:\"1\";s:8:\"deviceid\";s:36:\"ffffffff-a4d5-960f-ffff-ffff82ba1723\";s:8:\"language\";s:1:\"1\";s:6:\"status\";s:1:\"1\";s:9:\"appstatus\";s:1:\"1\";s:3:\"pid\";s:1:\"0\";s:3:\"act\";s:1:\"0\";s:16:\"registrationdate\";s:19:\"2014-09-08 16:04:19\";s:10:\"dnd_status\";s:1:\"0\";s:9:\"logged_in\";s:1:\"1\";s:6:\"roleid\";s:1:\"1\";s:4:\"cbid\";s:1:\"1\";s:14:\"flash:new:msgt\";s:7:\"success\";}' WHERE `session_id` = '847e9ee4e1543e295a6ddd381996c5e3'
[2017-06-19 12:23:23]	SQL :	UPDATE `call_sessions` SET `last_activity` = '1497853678', `user_data` = 'a:22:{s:3:\"uid\";s:1:\"1\";s:3:\"bid\";s:1:\"1\";s:8:\"username\";s:20:\"ashwini.naidu@vmc.in\";s:3:\"eid\";s:1:\"1\";s:3:\"app\";s:1:\"1\";s:7:\"authkey\";s:17:\"1.1.d886b8e8a0615\";s:9:\"recording\";s:1:\"1\";s:10:\"mcubecalls\";s:1:\"1\";s:7:\"mtdebug\";s:1:\"1\";s:8:\"deviceid\";s:36:\"ffffffff-a4d5-960f-ffff-ffff82ba1723\";s:8:\"language\";s:1:\"1\";s:6:\"status\";s:1:\"1\";s:9:\"appstatus\";s:1:\"1\";s:3:\"pid\";s:1:\"0\";s:3:\"act\";s:1:\"0\";s:16:\"registrationdate\";s:19:\"2014-09-08 16:04:19\";s:10:\"dnd_status\";s:1:\"0\";s:9:\"logged_in\";s:1:\"1\";s:6:\"roleid\";s:1:\"1\";s:4:\"cbid\";s:1:\"1\";s:14:\"flash:new:msgt\";s:7:\"success\";s:13:\"flash:new:msg\";s:26:\"Group Updated Successfully\";}' WHERE `session_id` = '847e9ee4e1543e295a6ddd381996c5e3'
[2017-06-19 12:23:23]	DEBUG :	Config Class Initialized
[2017-06-19 12:23:23]	DEBUG :	Hooks Class Initialized
[2017-06-19 12:23:23]	DEBUG :	URI Class Initialized
[2017-06-19 12:23:23]	DEBUG :	Router Class Initialized
[2017-06-19 12:23:23]	DEBUG :	Output Class Initialized
[2017-06-19 12:23:23]	DEBUG :	Input Class Initialized
[2017-06-19 12:23:23]	DEBUG :	XSS Filtering completed
[2017-06-19 12:23:23]	DEBUG :	XSS Filtering completed
[2017-06-19 12:23:23]	DEBUG :	XSS Filtering completed
[2017-06-19 12:23:23]	DEBUG :	XSS Filtering completed
[2017-06-19 12:23:23]	DEBUG :	Global POST and COOKIE data sanitized
[2017-06-19 12:23:23]	DEBUG :	Language Class Initialized
[2017-06-19 12:23:23]	DEBUG :	Loader Class Initialized
[2017-06-19 12:23:23]	DEBUG :	Helper loaded: url_helper
[2017-06-19 12:23:23]	DEBUG :	Helper loaded: form_helper
[2017-06-19 12:23:23]	DEBUG :	Helper loaded: html_helper
[2017-06-19 12:23:23]	DEBUG :	Helper loaded: email_helper
[2017-06-19 12:23:23]	DEBUG :	Helper loaded: ckeditor_helper
[2017-06-19 12:23:23]	DEBUG :	Helper loaded: mcube_helper
[2017-06-19 12:23:23]	DEBUG :	Database Driver Class Initialized
[2017-06-19 12:23:23]	ERROR :	Severity: 8192  --> mysql_pconnect(): The mysql extension is deprecated and will be removed in the future: use mysqli or PDO instead /var/www/html/mcnew/system/database/drivers/mysql/mysql_driver.php 88
[2017-06-19 12:23:23]	DEBUG :	Session Class Initialized
[2017-06-19 12:23:23]	DEBUG :	Helper loaded: string_helper
[2017-06-19 12:23:23]	DEBUG :	Encrypt Class Initialized
[2017-06-19 12:23:23]	SQL :	SELECT *
FROM (`call_sessions`)
WHERE `session_id` = '847e9ee4e1543e295a6ddd381996c5e3'
AND `user_agent` = 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36'
[2017-06-19 12:23:23]	SQL :	UPDATE `call_sessions` SET `last_activity` = '1497853678', `user_data` = 'a:23:{s:3:\"uid\";s:1:\"1\";s:3:\"bid\";s:1:\"1\";s:8:\"username\";s:20:\"ashwini.naidu@vmc.in\";s:3:\"eid\";s:1:\"1\";s:3:\"app\";s:1:\"1\";s:7:\"authkey\";s:17:\"1.1.d886b8e8a0615\";s:9:\"recording\";s:1:\"1\";s:10:\"mcubecalls\";s:1:\"1\";s:7:\"mtdebug\";s:1:\"1\";s:8:\"deviceid\";s:36:\"ffffffff-a4d5-960f-ffff-ffff82ba1723\";s:8:\"language\";s:1:\"1\";s:6:\"status\";s:1:\"1\";s:9:\"appstatus\";s:1:\"1\";s:3:\"pid\";s:1:\"0\";s:3:\"act\";s:1:\"0\";s:16:\"registrationdate\";s:19:\"2014-09-08 16:04:19\";s:10:\"dnd_status\";s:1:\"0\";s:9:\"logged_in\";s:1:\"1\";s:6:\"roleid\";s:1:\"1\";s:4:\"cbid\";s:1:\"1\";s:14:\"flash:new:msgt\";s:7:\"success\";s:13:\"flash:new:msg\";s:26:\"Group Updated Successfully\";s:14:\"flash:old:msgt\";s:7:\"success\";}' WHERE `session_id` = '847e9ee4e1543e295a6ddd381996c5e3'
[2017-06-19 12:23:23]	SQL :	UPDATE `call_sessions` SET `last_activity` = '1497853678', `user_data` = 'a:22:{s:3:\"uid\";s:1:\"1\";s:3:\"bid\";s:1:\"1\";s:8:\"username\";s:20:\"ashwini.naidu@vmc.in\";s:3:\"eid\";s:1:\"1\";s:3:\"app\";s:1:\"1\";s:7:\"authkey\";s:17:\"1.1.d886b8e8a0615\";s:9:\"recording\";s:1:\"1\";s:10:\"mcubecalls\";s:1:\"1\";s:7:\"mtdebug\";s:1:\"1\";s:8:\"deviceid\";s:36:\"ffffffff-a4d5-960f-ffff-ffff82ba1723\";s:8:\"language\";s:1:\"1\";s:6:\"status\";s:1:\"1\";s:9:\"appstatus\";s:1:\"1\";s:3:\"pid\";s:1:\"0\";s:3:\"act\";s:1:\"0\";s:16:\"registrationdate\";s:19:\"2014-09-08 16:04:19\";s:10:\"dnd_status\";s:1:\"0\";s:9:\"logged_in\";s:1:\"1\";s:6:\"roleid\";s:1:\"1\";s:4:\"cbid\";s:1:\"1\";s:13:\"flash:new:msg\";s:26:\"Group Updated Successfully\";s:14:\"flash:old:msgt\";s:7:\"success\";}' WHERE `session_id` = '847e9ee4e1543e295a6ddd381996c5e3'
[2017-06-19 12:23:23]	SQL :	UPDATE `call_sessions` SET `last_activity` = '1497853678', `user_data` = 'a:23:{s:3:\"uid\";s:1:\"1\";s:3:\"bid\";s:1:\"1\";s:8:\"username\";s:20:\"ashwini.naidu@vmc.in\";s:3:\"eid\";s:1:\"1\";s:3:\"app\";s:1:\"1\";s:7:\"authkey\";s:17:\"1.1.d886b8e8a0615\";s:9:\"recording\";s:1:\"1\";s:10:\"mcubecalls\";s:1:\"1\";s:7:\"mtdebug\";s:1:\"1\";s:8:\"deviceid\";s:36:\"ffffffff-a4d5-960f-ffff-ffff82ba1723\";s:8:\"language\";s:1:\"1\";s:6:\"status\";s:1:\"1\";s:9:\"appstatus\";s:1:\"1\";s:3:\"pid\";s:1:\"0\";s:3:\"act\";s:1:\"0\";s:16:\"registrationdate\";s:19:\"2014-09-08 16:04:19\";s:10:\"dnd_status\";s:1:\"0\";s:9:\"logged_in\";s:1:\"1\";s:6:\"roleid\";s:1:\"1\";s:4:\"cbid\";s:1:\"1\";s:13:\"flash:new:msg\";s:26:\"Group Updated Successfully\";s:14:\"flash:old:msgt\";s:7:\"success\";s:13:\"flash:old:msg\";s:26:\"Group Updated Successfully\";}' WHERE `session_id` = '847e9ee4e1543e295a6ddd381996c5e3'
[2017-06-19 12:23:23]	SQL :	UPDATE `call_sessions` SET `last_activity` = '1497853678', `user_data` = 'a:22:{s:3:\"uid\";s:1:\"1\";s:3:\"bid\";s:1:\"1\";s:8:\"username\";s:20:\"ashwini.naidu@vmc.in\";s:3:\"eid\";s:1:\"1\";s:3:\"app\";s:1:\"1\";s:7:\"authkey\";s:17:\"1.1.d886b8e8a0615\";s:9:\"recording\";s:1:\"1\";s:10:\"mcubecalls\";s:1:\"1\";s:7:\"mtdebug\";s:1:\"1\";s:8:\"deviceid\";s:36:\"ffffffff-a4d5-960f-ffff-ffff82ba1723\";s:8:\"language\";s:1:\"1\";s:6:\"status\";s:1:\"1\";s:9:\"appstatus\";s:1:\"1\";s:3:\"pid\";s:1:\"0\";s:3:\"act\";s:1:\"0\";s:16:\"registrationdate\";s:19:\"2014-09-08 16:04:19\";s:10:\"dnd_status\";s:1:\"0\";s:9:\"logged_in\";s:1:\"1\";s:6:\"roleid\";s:1:\"1\";s:4:\"cbid\";s:1:\"1\";s:14:\"flash:old:msgt\";s:7:\"success\";s:13:\"flash:old:msg\";s:26:\"Group Updated Successfully\";}' WHERE `session_id` = '847e9ee4e1543e295a6ddd381996c5e3'
[2017-06-19 12:23:23]	DEBUG :	Session routines successfully run
[2017-06-19 12:23:23]	DEBUG :	Table Class Initialized
[2017-06-19 12:23:23]	DEBUG :	Pagination Class Initialized
[2017-06-19 12:23:23]	DEBUG :	Config file loaded: config/paypallib_config.php
[2017-06-19 12:23:23]	DEBUG :	Form Validation Class Initialized
[2017-06-19 12:23:23]	DEBUG :	Email Class Initialized
[2017-06-19 12:23:23]	DEBUG :	Language file loaded: language/english/calendar_lang.php
[2017-06-19 12:23:23]	DEBUG :	Calendar Class Initialized
[2017-06-19 12:23:23]	DEBUG :	Controller Class Initialized
[2017-06-19 12:23:23]	DEBUG :	Model Class Initialized
[2017-06-19 12:23:23]	DEBUG :	Model Class Initialized
[2017-06-19 12:23:23]	DEBUG :	Model Class Initialized
[2017-06-19 12:23:23]	DEBUG :	Model Class Initialized
[2017-06-19 12:23:23]	DEBUG :	Model Class Initialized
[2017-06-19 12:23:23]	DEBUG :	Model Class Initialized
[2017-06-19 12:23:23]	DEBUG :	Model Class Initialized
[2017-06-19 12:23:23]	DEBUG :	Model Class Initialized
[2017-06-19 12:23:23]	DEBUG :	Model Class Initialized
[2017-06-19 12:23:23]	DEBUG :	Model Class Initialized
[2017-06-19 12:23:23]	DEBUG :	Model Class Initialized
[2017-06-19 12:23:23]	DEBUG :	Model Class Initialized
[2017-06-19 12:23:23]	DEBUG :	Plugin loaded: to_pdf_pi
[2017-06-19 12:23:23]	SQL :	SELECT u.uid FROM user u
				LEFT JOIN 1_employee e on (e.bid=u.bid AND e.eid=u.eid)
				WHERE e.status='1' AND e.login='1' AND u.status='1' 
				AND u.bid='1' AND u.eid='1'
[2017-06-19 12:23:23]	SQL :	SELECT *
FROM (`language`)
WHERE `langid` = '1'
[2017-06-19 12:23:23]	DEBUG :	Database Driver Class Initialized
[2017-06-19 12:23:23]	SQL :	SELECT roleid FROM 1_employee
							WHERE eid='1'
							AND bid='1'
[2017-06-19 12:23:23]	SQL :	UPDATE `call_sessions` SET `last_activity` = '1497853678', `user_data` = 'a:22:{s:3:\"uid\";s:1:\"1\";s:3:\"bid\";s:1:\"1\";s:8:\"username\";s:20:\"ashwini.naidu@vmc.in\";s:3:\"eid\";s:1:\"1\";s:3:\"app\";s:1:\"1\";s:7:\"authkey\";s:17:\"1.1.d886b8e8a0615\";s:9:\"recording\";s:1:\"1\";s:10:\"mcubecalls\";s:1:\"1\";s:7:\"mtdebug\";s:1:\"1\";s:8:\"deviceid\";s:36:\"ffffffff-a4d5-960f-ffff-ffff82ba1723\";s:8:\"language\";s:1:\"1\";s:6:\"status\";s:1:\"1\";s:9:\"appstatus\";s:1:\"1\";s:3:\"pid\";s:1:\"0\";s:3:\"act\";s:1:\"0\";s:16:\"registrationdate\";s:19:\"2014-09-08 16:04:19\";s:10:\"dnd_status\";s:1:\"0\";s:9:\"logged_in\";s:1:\"1\";s:6:\"roleid\";s:1:\"1\";s:4:\"cbid\";s:1:\"1\";s:14:\"flash:old:msgt\";s:7:\"success\";s:13:\"flash:old:msg\";s:26:\"Group Updated Successfully\";}' WHERE `session_id` = '847e9ee4e1543e295a6ddd381996c5e3'
[2017-06-19 12:23:23]	DEBUG :	Database Driver Class Initialized
[2017-06-19 12:23:23]	SQL :	SELECT * FROM 1_user_role
							WHERE roleid='1'
							AND bid='1'
[2017-06-19 12:23:23]	SQL :	SELECT m.modid,m.modname,m.moddesc,
							COALESCE(o.opt_add,0) as opt_add,
							COALESCE(o.opt_view,0) as opt_view,
							COALESCE(o.opt_download,0) as opt_download,
							COALESCE(opt_delete,0) as opt_delete 
							FROM module m
							LEFT JOIN (SELECT * FROM 1_role_mod_opt
							WHERE roleid='1' 
							AND bid='1') as o
							ON m.modid=o.modid where m.status=1
[2017-06-19 12:23:23]	SQL :	SELECT a.*,f.fieldname FROM 1_role_access a
								LEFT JOIN systemfields f on a.fieldid=f.fieldid
								WHERE a.roleid='1'
								AND a.bid='1'
								AND a.fieldtype='s'
[2017-06-19 12:23:23]	SQL :	SELECT * FROM 1_role_access
								WHERE roleid='1'
								AND bid='1'
							AND fieldtype='c'
[2017-06-19 12:23:23]	SQL :	SELECT a.selfdisable FROM 1_employee a WHERE a.eid='1'
[2017-06-19 12:23:23]	DEBUG :	Language file loaded: language/english/unit_test_lang.php
[2017-06-19 12:23:23]	DEBUG :	Language file loaded: language/english/db_lang.php
[2017-06-19 12:23:23]	DEBUG :	Language file loaded: language/english/ftp_lang.php
[2017-06-19 12:23:23]	DEBUG :	Language file loaded: language/english/menu_lang.php
[2017-06-19 12:23:23]	DEBUG :	Language file loaded: language/english/db_tables_lang.php
[2017-06-19 12:23:23]	DEBUG :	Language file loaded: language/english/form_level_lang.php
[2017-06-19 12:23:23]	DEBUG :	Language file loaded: language/english/form_validation_lang.php
[2017-06-19 12:23:23]	DEBUG :	Language file loaded: language/english/email_lang.php
[2017-06-19 12:23:23]	DEBUG :	Language file loaded: language/english/number_lang.php
[2017-06-19 12:23:23]	DEBUG :	Language file loaded: language/english/layout_lang.php
[2017-06-19 12:23:23]	DEBUG :	Language file loaded: language/english/validation_lang.php
[2017-06-19 12:23:23]	DEBUG :	Language file loaded: language/english/scaffolding_lang.php
[2017-06-19 12:23:23]	DEBUG :	Language file loaded: language/english/date_lang.php
[2017-06-19 12:23:23]	DEBUG :	Language file loaded: language/english/profiler_lang.php
[2017-06-19 12:23:23]	DEBUG :	Language file loaded: language/english/imglib_lang.php
[2017-06-19 12:23:23]	DEBUG :	Language file loaded: language/english/error_msg_lang.php
[2017-06-19 12:23:23]	DEBUG :	Language file loaded: language/english/upload_lang.php
[2017-06-19 12:23:23]	SQL :	SELECT id,category,subcategory,type,status FROM feedback WHERE status=1 
[2017-06-19 12:23:23]	SQL :	SELECT feature_id FROM business_feature WHERE bid='1'
[2017-06-19 12:23:23]	SQL :	SELECT feature_id FROM business_feature WHERE bid='1'
[2017-06-19 12:23:23]	SQL :	SELECT feature_id FROM business_feature WHERE bid='1'
[2017-06-19 12:23:23]	SQL :	SELECT id,type FROM 1_leads_status
[2017-06-19 12:23:23]	SQL :	SELECT design FROM business_lead_use WHERE bid='1' LIMIT 0,1
[2017-06-19 12:23:23]	SQL :	SELECT sid,status FROM 1_support_status
[2017-06-19 12:23:23]	SQL :	SELECT feature_id FROM `business_feature` where bid=1
[2017-06-19 12:23:23]	SQL :	SELECT action_align FROM account_settings WHERE bid='1'
[2017-06-19 12:23:23]	SQL :	SELECT dialstatus FROM 1_callhistory WHERE dialstatus = 'CONNECTING'
[2017-06-19 12:23:23]	SQL :	SELECT FOUND_ROWS() as cnt
[2017-06-19 12:23:23]	SQL :	SELECT del_notify FROM account_settings WHERE bid='1'
[2017-06-19 12:23:23]	DEBUG :	Model Class Initialized
[2017-06-19 12:23:23]	DEBUG :	Database Driver Class Initialized
[2017-06-19 12:23:23]	SQL :	SELECT * FROM 1_user_role
							WHERE roleid='1'
							AND bid='1'
[2017-06-19 12:23:23]	SQL :	SELECT m.modid,m.modname,m.moddesc,
							COALESCE(o.opt_add,0) as opt_add,
							COALESCE(o.opt_view,0) as opt_view,
							COALESCE(o.opt_download,0) as opt_download,
							COALESCE(opt_delete,0) as opt_delete 
							FROM module m
							LEFT JOIN (SELECT * FROM 1_role_mod_opt
							WHERE roleid='1' 
							AND bid='1') as o
							ON m.modid=o.modid where m.status=1
[2017-06-19 12:23:23]	SQL :	SELECT a.*,f.fieldname FROM 1_role_access a
								LEFT JOIN systemfields f on a.fieldid=f.fieldid
								WHERE a.roleid='1'
								AND a.bid='1'
								AND a.fieldtype='s'
[2017-06-19 12:23:23]	SQL :	SELECT * FROM 1_role_access
								WHERE roleid='1'
								AND bid='1'
							AND fieldtype='c'
[2017-06-19 12:23:23]	SQL :	SELECT feature_id FROM `business_feature` where bid=1
[2017-06-19 12:23:23]	SQL :	SELECT * FROM business where pid='1'
[2017-06-19 12:23:23]	SQL :	UPDATE `call_sessions` SET `last_activity` = '1497853678', `user_data` = 'a:22:{s:3:\"uid\";s:1:\"1\";s:3:\"bid\";s:1:\"1\";s:8:\"username\";s:20:\"ashwini.naidu@vmc.in\";s:3:\"eid\";s:1:\"1\";s:3:\"app\";s:1:\"1\";s:7:\"authkey\";s:17:\"1.1.d886b8e8a0615\";s:9:\"recording\";s:1:\"1\";s:10:\"mcubecalls\";s:1:\"1\";s:7:\"mtdebug\";s:1:\"1\";s:8:\"deviceid\";s:36:\"ffffffff-a4d5-960f-ffff-ffff82ba1723\";s:8:\"language\";s:1:\"1\";s:6:\"status\";s:1:\"1\";s:9:\"appstatus\";s:1:\"1\";s:3:\"pid\";s:1:\"0\";s:3:\"act\";s:1:\"0\";s:16:\"registrationdate\";s:19:\"2014-09-08 16:04:19\";s:10:\"dnd_status\";s:1:\"0\";s:9:\"logged_in\";s:1:\"1\";s:6:\"roleid\";s:1:\"1\";s:4:\"cbid\";s:1:\"1\";s:14:\"flash:old:msgt\";s:7:\"success\";s:13:\"flash:old:msg\";s:26:\"Group Updated Successfully\";}' WHERE `session_id` = '847e9ee4e1543e295a6ddd381996c5e3'
[2017-06-19 12:23:23]	DEBUG :	Database Driver Class Initialized
[2017-06-19 12:23:23]	SQL :	SELECT * FROM 1_user_role
							WHERE roleid='1'
							AND bid='1'
[2017-06-19 12:23:23]	SQL :	SELECT m.modid,m.modname,m.moddesc,
							COALESCE(o.opt_add,0) as opt_add,
							COALESCE(o.opt_view,0) as opt_view,
							COALESCE(o.opt_download,0) as opt_download,
							COALESCE(opt_delete,0) as opt_delete 
							FROM module m
							LEFT JOIN (SELECT * FROM 1_role_mod_opt
							WHERE roleid='1' 
							AND bid='1') as o
							ON m.modid=o.modid where m.status=1
[2017-06-19 12:23:23]	SQL :	SELECT a.*,f.fieldname FROM 1_role_access a
								LEFT JOIN systemfields f on a.fieldid=f.fieldid
								WHERE a.roleid='1'
								AND a.bid='1'
								AND a.fieldtype='s'
[2017-06-19 12:23:23]	SQL :	SELECT * FROM 1_role_access
								WHERE roleid='1'
								AND bid='1'
							AND fieldtype='c'
[2017-06-19 12:23:23]	SQL :	SELECT SQL_CALC_FOUND_ROWS g.*
				  FROM 1_groups g 
				  LEFT JOIN group_rules r on g.rules=r.rulesid 
				  LEFT JOIN 1_employee e on g.eid=e.eid
				  LEFT JOIN prinumbers p on (g.prinumber=p.number AND p.bid='1')
				  WHERE g.bid='1' 
				  and g.status!=0  limit 0,20
[2017-06-19 12:23:23]	SQL :	SELECT FOUND_ROWS() as cnt
[2017-06-19 12:23:23]	DEBUG :	Database Driver Class Initialized
[2017-06-19 12:23:23]	SQL :	SELECT * FROM ( 
				SELECT 's' as type,f.addon,f.fieldid,f.modid,
				f.fieldname,'' as fieldtype,'' as fieldKey,'' as options,
				'' as defaultvalue,f.is_required as is_required,f.is_hidden,COALESCE(l.display_order,0) as display_order,
				l.customlabel,COALESCE(l.show,1) as `show`,COALESCE(l.listing,1) as `listing`
				FROM systemfields f
				LEFT JOIN (
					SELECT * FROM 1_custom_label
					WHERE fieldtype='s'
				) as l
				on (f.fieldid=l.fieldid AND l.modid=f.modid)
				WHERE f.modid='3'  AND f.is_hidden=0   AND f.addon=0 
				UNION
				SELECT 'c' as type,'0',f.fieldid,f.modid,
				f.fieldname,f.fieldtype,f.field_key as fieldKey,f.options,
				f.defaultvalue,f.is_required as is_required,'',COALESCE(l.display_order,0) as display_order,
				l.customlabel,COALESCE(l.show,1) as `show`,COALESCE(l.listing,1) as `listing`
				FROM 1_customfields f
				LEFT JOIN (
					SELECT * FROM 1_custom_label
					WHERE fieldtype='c'
				) as l
				on (f.fieldid=l.fieldid AND l.modid=f.modid)
				WHERE f.modid='3') as t ORDER BY display_order ASC
[2017-06-19 12:23:23]	DEBUG :	Database Driver Class Initialized
[2017-06-19 12:23:23]	SQL :	SELECT g.*,e.empname as eid,sg.groupname as supportgroup,
					  if(g.connectowner=1,'YES','NO') as connectwner,
					  g.eid as epid,if(g.record=1,'YES','NO') as records,
					  if(g.replytocustomer=1,'YES','NO') as replycus,
					  if(g.replytoexecutive=1,'YES','NO') as replyexe,
					  if(g.pincode=1,'YES','NO') as pcode,
					  p.number as prinumber,
					  p.landingnumber as addnumber,(if(g.primary_rule=0,'All',cr.regionname)) as regionname,
					  r.rulename as rules,g.rules as rule
					  FROM 1_groups g 
					  LEFT JOIN group_rules r on g.rules=r.rulesid 
					  LEFT JOIN 1_employee e on g.eid=e.eid 
					  LEFT JOIN 1_support_groups sg on g.supportgrp=sg.gid 
					  LEFT JOIN prinumber p on g.prinumber=p.number
					  LEFT JOIN 1_custom_region cr on g.primary_rule=cr.regionid
					  WHERE g.bid='1' 
					  AND g.gid='14'
[2017-06-19 12:23:23]	SQL :	SELECT * FROM 1_customfieldsvalue 
				WHERE bid='1' 
				AND modid='3'
				AND dataid='14'
[2017-06-19 12:23:23]	SQL :	SELECT COALESCE(COUNT(callid), 0) AS cnt
							FROM 1_callhistory h 
							WHERE (h.`starttime` >= DATE_SUB(CURDATE(), INTERVAL 6 DAY)) AND h.gid = 14 GROUP BY DAY(h.starttime)
[2017-06-19 12:23:23]	DEBUG :	Database Driver Class Initialized
[2017-06-19 12:23:23]	SQL :	SELECT g.*,e.empname as eid,sg.groupname as supportgroup,
					  if(g.connectowner=1,'YES','NO') as connectwner,
					  g.eid as epid,if(g.record=1,'YES','NO') as records,
					  if(g.replytocustomer=1,'YES','NO') as replycus,
					  if(g.replytoexecutive=1,'YES','NO') as replyexe,
					  if(g.pincode=1,'YES','NO') as pcode,
					  p.number as prinumber,
					  p.landingnumber as addnumber,(if(g.primary_rule=0,'All',cr.regionname)) as regionname,
					  r.rulename as rules,g.rules as rule
					  FROM 1_groups g 
					  LEFT JOIN group_rules r on g.rules=r.rulesid 
					  LEFT JOIN 1_employee e on g.eid=e.eid 
					  LEFT JOIN 1_support_groups sg on g.supportgrp=sg.gid 
					  LEFT JOIN prinumber p on g.prinumber=p.number
					  LEFT JOIN 1_custom_region cr on g.primary_rule=cr.regionid
					  WHERE g.bid='1' 
					  AND g.gid='15'
[2017-06-19 12:23:23]	SQL :	SELECT * FROM 1_customfieldsvalue 
				WHERE bid='1' 
				AND modid='3'
				AND dataid='15'
[2017-06-19 12:23:23]	SQL :	SELECT COALESCE(COUNT(callid), 0) AS cnt
							FROM 1_callhistory h 
							WHERE (h.`starttime` >= DATE_SUB(CURDATE(), INTERVAL 6 DAY)) AND h.gid = 15 GROUP BY DAY(h.starttime)
[2017-06-19 12:23:23]	SQL :	SELECT GROUP_CONCAT(empname SEPARATOR ',') as empname FROM 1_employee WHERE eid IN(58 )
[2017-06-19 12:23:23]	DEBUG :	Database Driver Class Initialized
[2017-06-19 12:23:23]	SQL :	SELECT g.*,e.empname as eid,sg.groupname as supportgroup,
					  if(g.connectowner=1,'YES','NO') as connectwner,
					  g.eid as epid,if(g.record=1,'YES','NO') as records,
					  if(g.replytocustomer=1,'YES','NO') as replycus,
					  if(g.replytoexecutive=1,'YES','NO') as replyexe,
					  if(g.pincode=1,'YES','NO') as pcode,
					  p.number as prinumber,
					  p.landingnumber as addnumber,(if(g.primary_rule=0,'All',cr.regionname)) as regionname,
					  r.rulename as rules,g.rules as rule
					  FROM 1_groups g 
					  LEFT JOIN group_rules r on g.rules=r.rulesid 
					  LEFT JOIN 1_employee e on g.eid=e.eid 
					  LEFT JOIN 1_support_groups sg on g.supportgrp=sg.gid 
					  LEFT JOIN prinumber p on g.prinumber=p.number
					  LEFT JOIN 1_custom_region cr on g.primary_rule=cr.regionid
					  WHERE g.bid='1' 
					  AND g.gid='16'
[2017-06-19 12:23:23]	SQL :	SELECT * FROM 1_customfieldsvalue 
				WHERE bid='1' 
				AND modid='3'
				AND dataid='16'
[2017-06-19 12:23:23]	SQL :	SELECT COALESCE(COUNT(callid), 0) AS cnt
							FROM 1_callhistory h 
							WHERE (h.`starttime` >= DATE_SUB(CURDATE(), INTERVAL 6 DAY)) AND h.gid = 16 GROUP BY DAY(h.starttime)
[2017-06-19 12:23:23]	DEBUG :	Database Driver Class Initialized
[2017-06-19 12:23:23]	SQL :	SELECT g.*,e.empname as eid,sg.groupname as supportgroup,
					  if(g.connectowner=1,'YES','NO') as connectwner,
					  g.eid as epid,if(g.record=1,'YES','NO') as records,
					  if(g.replytocustomer=1,'YES','NO') as replycus,
					  if(g.replytoexecutive=1,'YES','NO') as replyexe,
					  if(g.pincode=1,'YES','NO') as pcode,
					  p.number as prinumber,
					  p.landingnumber as addnumber,(if(g.primary_rule=0,'All',cr.regionname)) as regionname,
					  r.rulename as rules,g.rules as rule
					  FROM 1_groups g 
					  LEFT JOIN group_rules r on g.rules=r.rulesid 
					  LEFT JOIN 1_employee e on g.eid=e.eid 
					  LEFT JOIN 1_support_groups sg on g.supportgrp=sg.gid 
					  LEFT JOIN prinumber p on g.prinumber=p.number
					  LEFT JOIN 1_custom_region cr on g.primary_rule=cr.regionid
					  WHERE g.bid='1' 
					  AND g.gid='17'
[2017-06-19 12:23:23]	SQL :	SELECT * FROM 1_customfieldsvalue 
				WHERE bid='1' 
				AND modid='3'
				AND dataid='17'
[2017-06-19 12:23:23]	SQL :	SELECT COALESCE(COUNT(callid), 0) AS cnt
							FROM 1_callhistory h 
							WHERE (h.`starttime` >= DATE_SUB(CURDATE(), INTERVAL 6 DAY)) AND h.gid = 17 GROUP BY DAY(h.starttime)
[2017-06-19 12:23:23]	DEBUG :	Database Driver Class Initialized
[2017-06-19 12:23:23]	SQL :	SELECT * FROM ( 
				SELECT 's' as type,f.addon,f.fieldid,f.modid,
				f.fieldname,'' as fieldtype,'' as fieldKey,'' as options,
				'' as defaultvalue,f.is_required as is_required,f.is_hidden,COALESCE(l.display_order,0) as display_order,
				l.customlabel,COALESCE(l.show,1) as `show`,COALESCE(l.listing,1) as `listing`
				FROM systemfields f
				LEFT JOIN (
					SELECT * FROM 1_custom_label
					WHERE fieldtype='s'
				) as l
				on (f.fieldid=l.fieldid AND l.modid=f.modid)
				WHERE f.modid='3'  AND f.is_hidden=0   AND f.addon=0 
				UNION
				SELECT 'c' as type,'0',f.fieldid,f.modid,
				f.fieldname,f.fieldtype,f.field_key as fieldKey,f.options,
				f.defaultvalue,f.is_required as is_required,'',COALESCE(l.display_order,0) as display_order,
				l.customlabel,COALESCE(l.show,1) as `show`,COALESCE(l.listing,1) as `listing`
				FROM 1_customfields f
				LEFT JOIN (
					SELECT * FROM 1_custom_label
					WHERE fieldtype='c'
				) as l
				on (f.fieldid=l.fieldid AND l.modid=f.modid)
				WHERE f.modid='3') as t ORDER BY display_order ASC
[2017-06-19 12:23:23]	SQL :	select eid,empname from 1_employee where status=1 ORDER BY empname
[2017-06-19 12:23:23]	DEBUG :	Database Driver Class Initialized
[2017-06-19 12:23:23]	SQL :	SELECT * FROM 1_user_role
							WHERE roleid='1'
							AND bid='1'
[2017-06-19 12:23:23]	SQL :	SELECT m.modid,m.modname,m.moddesc,
							COALESCE(o.opt_add,0) as opt_add,
							COALESCE(o.opt_view,0) as opt_view,
							COALESCE(o.opt_download,0) as opt_download,
							COALESCE(opt_delete,0) as opt_delete 
							FROM module m
							LEFT JOIN (SELECT * FROM 1_role_mod_opt
							WHERE roleid='1' 
							AND bid='1') as o
							ON m.modid=o.modid where m.status=1
[2017-06-19 12:23:23]	SQL :	SELECT a.*,f.fieldname FROM 1_role_access a
								LEFT JOIN systemfields f on a.fieldid=f.fieldid
								WHERE a.roleid='1'
								AND a.bid='1'
								AND a.fieldtype='s'
[2017-06-19 12:23:23]	SQL :	SELECT * FROM 1_role_access
								WHERE roleid='1'
								AND bid='1'
							AND fieldtype='c'
[2017-06-19 12:23:23]	SQL :	SELECT * FROM 1_employee WHERE status='1' ORDER BY empname
[2017-06-19 12:23:23]	DEBUG :	File loaded: /var/www/html/mcnew/system/application/views/mainheader.php
[2017-06-19 12:23:23]	DEBUG :	Database Driver Class Initialized
[2017-06-19 12:23:23]	SQL :	select a.*,e.empname as reporttoname,b.rolename  as role,if(u.recording=1,'Yes','No') as recording
					  from 1_employee a
					  LEFT JOIN  1_employee e on a.reportto=e.eid
					  LEFT JOIN  user u on a.eid=u.eid
					  ,1_user_role b 
					  where a.roleid=b.roleid AND a.eid='1'
[2017-06-19 12:23:23]	SQL :	SELECT * FROM 1_customfieldsvalue 
				WHERE bid='1' 
				AND modid='2'
				AND dataid='1'
[2017-06-19 12:23:23]	DEBUG :	File loaded: /var/www/html/mcnew/system/application/views/leftsidebar.php
[2017-06-19 12:23:23]	DEBUG :	File loaded: /var/www/html/mcnew/system/application/views/list_view.php
[2017-06-19 12:23:23]	DEBUG :	File loaded: /var/www/html/mcnew/system/application/views/footer.php
[2017-06-19 12:23:23]	DEBUG :	Final output sent to browser
[2017-06-19 12:23:23]	DEBUG :	Total execution time: 0.3001
[2017-06-19 12:23:25]	DEBUG :	Config Class Initialized
[2017-06-19 12:23:25]	DEBUG :	Hooks Class Initialized
[2017-06-19 12:23:25]	DEBUG :	URI Class Initialized
[2017-06-19 12:23:25]	DEBUG :	Router Class Initialized
[2017-06-19 12:23:25]	DEBUG :	Output Class Initialized
[2017-06-19 12:23:25]	DEBUG :	Input Class Initialized
[2017-06-19 12:23:25]	DEBUG :	XSS Filtering completed
[2017-06-19 12:23:25]	DEBUG :	XSS Filtering completed
[2017-06-19 12:23:25]	DEBUG :	XSS Filtering completed
[2017-06-19 12:23:25]	DEBUG :	XSS Filtering completed
[2017-06-19 12:23:25]	DEBUG :	Global POST and COOKIE data sanitized
[2017-06-19 12:23:25]	DEBUG :	Language Class Initialized
[2017-06-19 12:23:25]	DEBUG :	Loader Class Initialized
[2017-06-19 12:23:25]	DEBUG :	Helper loaded: url_helper
[2017-06-19 12:23:25]	DEBUG :	Helper loaded: form_helper
[2017-06-19 12:23:25]	DEBUG :	Helper loaded: html_helper
[2017-06-19 12:23:25]	DEBUG :	Helper loaded: email_helper
[2017-06-19 12:23:25]	DEBUG :	Helper loaded: ckeditor_helper
[2017-06-19 12:23:25]	DEBUG :	Helper loaded: mcube_helper
[2017-06-19 12:23:25]	DEBUG :	Database Driver Class Initialized
[2017-06-19 12:23:25]	ERROR :	Severity: 8192  --> mysql_pconnect(): The mysql extension is deprecated and will be removed in the future: use mysqli or PDO instead /var/www/html/mcnew/system/database/drivers/mysql/mysql_driver.php 88
[2017-06-19 12:23:25]	DEBUG :	Session Class Initialized
[2017-06-19 12:23:25]	DEBUG :	Helper loaded: string_helper
[2017-06-19 12:23:25]	DEBUG :	Encrypt Class Initialized
[2017-06-19 12:23:25]	SQL :	SELECT *
FROM (`call_sessions`)
WHERE `session_id` = '847e9ee4e1543e295a6ddd381996c5e3'
AND `user_agent` = 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36'
[2017-06-19 12:23:25]	SQL :	UPDATE `call_sessions` SET `last_activity` = '1497853678', `user_data` = 'a:21:{s:3:\"uid\";s:1:\"1\";s:3:\"bid\";s:1:\"1\";s:8:\"username\";s:20:\"ashwini.naidu@vmc.in\";s:3:\"eid\";s:1:\"1\";s:3:\"app\";s:1:\"1\";s:7:\"authkey\";s:17:\"1.1.d886b8e8a0615\";s:9:\"recording\";s:1:\"1\";s:10:\"mcubecalls\";s:1:\"1\";s:7:\"mtdebug\";s:1:\"1\";s:8:\"deviceid\";s:36:\"ffffffff-a4d5-960f-ffff-ffff82ba1723\";s:8:\"language\";s:1:\"1\";s:6:\"status\";s:1:\"1\";s:9:\"appstatus\";s:1:\"1\";s:3:\"pid\";s:1:\"0\";s:3:\"act\";s:1:\"0\";s:16:\"registrationdate\";s:19:\"2014-09-08 16:04:19\";s:10:\"dnd_status\";s:1:\"0\";s:9:\"logged_in\";s:1:\"1\";s:6:\"roleid\";s:1:\"1\";s:4:\"cbid\";s:1:\"1\";s:13:\"flash:old:msg\";s:26:\"Group Updated Successfully\";}' WHERE `session_id` = '847e9ee4e1543e295a6ddd381996c5e3'
[2017-06-19 12:23:25]	SQL :	UPDATE `call_sessions` SET `last_activity` = '1497853678', `user_data` = 'a:20:{s:3:\"uid\";s:1:\"1\";s:3:\"bid\";s:1:\"1\";s:8:\"username\";s:20:\"ashwini.naidu@vmc.in\";s:3:\"eid\";s:1:\"1\";s:3:\"app\";s:1:\"1\";s:7:\"authkey\";s:17:\"1.1.d886b8e8a0615\";s:9:\"recording\";s:1:\"1\";s:10:\"mcubecalls\";s:1:\"1\";s:7:\"mtdebug\";s:1:\"1\";s:8:\"deviceid\";s:36:\"ffffffff-a4d5-960f-ffff-ffff82ba1723\";s:8:\"language\";s:1:\"1\";s:6:\"status\";s:1:\"1\";s:9:\"appstatus\";s:1:\"1\";s:3:\"pid\";s:1:\"0\";s:3:\"act\";s:1:\"0\";s:16:\"registrationdate\";s:19:\"2014-09-08 16:04:19\";s:10:\"dnd_status\";s:1:\"0\";s:9:\"logged_in\";s:1:\"1\";s:6:\"roleid\";s:1:\"1\";s:4:\"cbid\";s:1:\"1\";}' WHERE `session_id` = '847e9ee4e1543e295a6ddd381996c5e3'
[2017-06-19 12:23:25]	DEBUG :	Session routines successfully run
[2017-06-19 12:23:25]	DEBUG :	Table Class Initialized
[2017-06-19 12:23:25]	DEBUG :	Pagination Class Initialized
[2017-06-19 12:23:25]	DEBUG :	Config file loaded: config/paypallib_config.php
[2017-06-19 12:23:25]	DEBUG :	Form Validation Class Initialized
[2017-06-19 12:23:25]	DEBUG :	Email Class Initialized
[2017-06-19 12:23:25]	DEBUG :	Language file loaded: language/english/calendar_lang.php
[2017-06-19 12:23:25]	DEBUG :	Calendar Class Initialized
[2017-06-19 12:23:25]	DEBUG :	Controller Class Initialized
[2017-06-19 12:23:25]	DEBUG :	Model Class Initialized
[2017-06-19 12:23:25]	DEBUG :	Model Class Initialized
[2017-06-19 12:23:25]	DEBUG :	Model Class Initialized
[2017-06-19 12:23:25]	DEBUG :	Model Class Initialized
[2017-06-19 12:23:25]	DEBUG :	Model Class Initialized
[2017-06-19 12:23:25]	DEBUG :	Model Class Initialized
[2017-06-19 12:23:25]	DEBUG :	Model Class Initialized
[2017-06-19 12:23:25]	DEBUG :	Model Class Initialized
[2017-06-19 12:23:25]	DEBUG :	Model Class Initialized
[2017-06-19 12:23:25]	DEBUG :	Model Class Initialized
[2017-06-19 12:23:25]	DEBUG :	Model Class Initialized
[2017-06-19 12:23:25]	DEBUG :	Model Class Initialized
[2017-06-19 12:23:25]	DEBUG :	Plugin loaded: to_pdf_pi
[2017-06-19 12:23:25]	SQL :	SELECT u.uid FROM user u
				LEFT JOIN 1_employee e on (e.bid=u.bid AND e.eid=u.eid)
				WHERE e.status='1' AND e.login='1' AND u.status='1' 
				AND u.bid='1' AND u.eid='1'
[2017-06-19 12:23:25]	SQL :	SELECT *
FROM (`language`)
WHERE `langid` = '1'
[2017-06-19 12:23:25]	DEBUG :	Database Driver Class Initialized
[2017-06-19 12:23:25]	SQL :	SELECT roleid FROM 1_employee
							WHERE eid='1'
							AND bid='1'
[2017-06-19 12:23:25]	SQL :	UPDATE `call_sessions` SET `last_activity` = '1497853678', `user_data` = 'a:20:{s:3:\"uid\";s:1:\"1\";s:3:\"bid\";s:1:\"1\";s:8:\"username\";s:20:\"ashwini.naidu@vmc.in\";s:3:\"eid\";s:1:\"1\";s:3:\"app\";s:1:\"1\";s:7:\"authkey\";s:17:\"1.1.d886b8e8a0615\";s:9:\"recording\";s:1:\"1\";s:10:\"mcubecalls\";s:1:\"1\";s:7:\"mtdebug\";s:1:\"1\";s:8:\"deviceid\";s:36:\"ffffffff-a4d5-960f-ffff-ffff82ba1723\";s:8:\"language\";s:1:\"1\";s:6:\"status\";s:1:\"1\";s:9:\"appstatus\";s:1:\"1\";s:3:\"pid\";s:1:\"0\";s:3:\"act\";s:1:\"0\";s:16:\"registrationdate\";s:19:\"2014-09-08 16:04:19\";s:10:\"dnd_status\";s:1:\"0\";s:9:\"logged_in\";s:1:\"1\";s:6:\"roleid\";s:1:\"1\";s:4:\"cbid\";s:1:\"1\";}' WHERE `session_id` = '847e9ee4e1543e295a6ddd381996c5e3'
[2017-06-19 12:23:25]	DEBUG :	Database Driver Class Initialized
[2017-06-19 12:23:25]	SQL :	SELECT * FROM 1_user_role
							WHERE roleid='1'
							AND bid='1'
[2017-06-19 12:23:25]	SQL :	SELECT m.modid,m.modname,m.moddesc,
							COALESCE(o.opt_add,0) as opt_add,
							COALESCE(o.opt_view,0) as opt_view,
							COALESCE(o.opt_download,0) as opt_download,
							COALESCE(opt_delete,0) as opt_delete 
							FROM module m
							LEFT JOIN (SELECT * FROM 1_role_mod_opt
							WHERE roleid='1' 
							AND bid='1') as o
							ON m.modid=o.modid where m.status=1
[2017-06-19 12:23:25]	SQL :	SELECT a.*,f.fieldname FROM 1_role_access a
								LEFT JOIN systemfields f on a.fieldid=f.fieldid
								WHERE a.roleid='1'
								AND a.bid='1'
								AND a.fieldtype='s'
[2017-06-19 12:23:25]	SQL :	SELECT * FROM 1_role_access
								WHERE roleid='1'
								AND bid='1'
							AND fieldtype='c'
[2017-06-19 12:23:25]	SQL :	SELECT a.selfdisable FROM 1_employee a WHERE a.eid='1'
[2017-06-19 12:23:25]	DEBUG :	Language file loaded: language/english/unit_test_lang.php
[2017-06-19 12:23:25]	DEBUG :	Language file loaded: language/english/db_lang.php
[2017-06-19 12:23:25]	DEBUG :	Language file loaded: language/english/ftp_lang.php
[2017-06-19 12:23:25]	DEBUG :	Language file loaded: language/english/menu_lang.php
[2017-06-19 12:23:25]	DEBUG :	Language file loaded: language/english/db_tables_lang.php
[2017-06-19 12:23:25]	DEBUG :	Language file loaded: language/english/form_level_lang.php
[2017-06-19 12:23:25]	DEBUG :	Language file loaded: language/english/form_validation_lang.php
[2017-06-19 12:23:25]	DEBUG :	Language file loaded: language/english/email_lang.php
[2017-06-19 12:23:25]	DEBUG :	Language file loaded: language/english/number_lang.php
[2017-06-19 12:23:25]	DEBUG :	Language file loaded: language/english/layout_lang.php
[2017-06-19 12:23:25]	DEBUG :	Language file loaded: language/english/validation_lang.php
[2017-06-19 12:23:25]	DEBUG :	Language file loaded: language/english/scaffolding_lang.php
[2017-06-19 12:23:25]	DEBUG :	Language file loaded: language/english/date_lang.php
[2017-06-19 12:23:25]	DEBUG :	Language file loaded: language/english/profiler_lang.php
[2017-06-19 12:23:25]	DEBUG :	Language file loaded: language/english/imglib_lang.php
[2017-06-19 12:23:25]	DEBUG :	Language file loaded: language/english/error_msg_lang.php
[2017-06-19 12:23:25]	DEBUG :	Language file loaded: language/english/upload_lang.php
[2017-06-19 12:23:25]	SQL :	SELECT id,category,subcategory,type,status FROM feedback WHERE status=1 
[2017-06-19 12:23:25]	SQL :	SELECT feature_id FROM business_feature WHERE bid='1'
[2017-06-19 12:23:25]	SQL :	SELECT feature_id FROM business_feature WHERE bid='1'
[2017-06-19 12:23:25]	SQL :	SELECT feature_id FROM business_feature WHERE bid='1'
[2017-06-19 12:23:25]	SQL :	SELECT id,type FROM 1_leads_status
[2017-06-19 12:23:25]	SQL :	SELECT design FROM business_lead_use WHERE bid='1' LIMIT 0,1
[2017-06-19 12:23:25]	SQL :	SELECT sid,status FROM 1_support_status
[2017-06-19 12:23:25]	SQL :	SELECT feature_id FROM `business_feature` where bid=1
[2017-06-19 12:23:25]	SQL :	SELECT action_align FROM account_settings WHERE bid='1'
[2017-06-19 12:23:25]	SQL :	SELECT dialstatus FROM 1_callhistory WHERE dialstatus = 'CONNECTING'
[2017-06-19 12:23:26]	SQL :	SELECT FOUND_ROWS() as cnt
[2017-06-19 12:23:26]	SQL :	SELECT del_notify FROM account_settings WHERE bid='1'
[2017-06-19 12:23:26]	DEBUG :	Model Class Initialized
[2017-06-19 12:23:26]	DEBUG :	Database Driver Class Initialized
[2017-06-19 12:23:26]	SQL :	SELECT * FROM 1_user_role
							WHERE roleid='1'
							AND bid='1'
[2017-06-19 12:23:26]	SQL :	SELECT m.modid,m.modname,m.moddesc,
							COALESCE(o.opt_add,0) as opt_add,
							COALESCE(o.opt_view,0) as opt_view,
							COALESCE(o.opt_download,0) as opt_download,
							COALESCE(opt_delete,0) as opt_delete 
							FROM module m
							LEFT JOIN (SELECT * FROM 1_role_mod_opt
							WHERE roleid='1' 
							AND bid='1') as o
							ON m.modid=o.modid where m.status=1
[2017-06-19 12:23:26]	SQL :	SELECT a.*,f.fieldname FROM 1_role_access a
								LEFT JOIN systemfields f on a.fieldid=f.fieldid
								WHERE a.roleid='1'
								AND a.bid='1'
								AND a.fieldtype='s'
[2017-06-19 12:23:26]	SQL :	SELECT * FROM 1_role_access
								WHERE roleid='1'
								AND bid='1'
							AND fieldtype='c'
[2017-06-19 12:23:26]	SQL :	SELECT feature_id FROM `business_feature` where bid=1
[2017-06-19 12:23:26]	SQL :	SELECT feature_id FROM `business_feature` where bid=1
[2017-06-19 12:23:26]	SQL :	SELECT * FROM business where pid='1'
[2017-06-19 12:23:26]	DEBUG :	Database Driver Class Initialized
[2017-06-19 12:23:26]	SQL :	SELECT * FROM ( 
				SELECT 's' as type,f.addon,f.fieldid,f.modid,
				f.fieldname,'' as fieldtype,'' as fieldKey,'' as options,
				'' as defaultvalue,f.is_required as is_required,f.is_hidden,COALESCE(l.display_order,0) as display_order,
				l.customlabel,COALESCE(l.show,1) as `show`,COALESCE(l.listing,1) as `listing`
				FROM systemfields f
				LEFT JOIN (
					SELECT * FROM 1_custom_label
					WHERE fieldtype='s'
				) as l
				on (f.fieldid=l.fieldid AND l.modid=f.modid)
				WHERE f.modid='3'  AND f.is_hidden=0 
				UNION
				SELECT 'c' as type,'0',f.fieldid,f.modid,
				f.fieldname,f.fieldtype,f.field_key as fieldKey,f.options,
				f.defaultvalue,f.is_required as is_required,'',COALESCE(l.display_order,0) as display_order,
				l.customlabel,COALESCE(l.show,1) as `show`,COALESCE(l.listing,1) as `listing`
				FROM 1_customfields f
				LEFT JOIN (
					SELECT * FROM 1_custom_label
					WHERE fieldtype='c'
				) as l
				on (f.fieldid=l.fieldid AND l.modid=f.modid)
				WHERE f.modid='3') as t ORDER BY display_order ASC
[2017-06-19 12:23:26]	DEBUG :	Database Driver Class Initialized
[2017-06-19 12:23:26]	SQL :	SELECT g.*,e.empname as eid,sg.groupname as supportgroup,
					  if(g.connectowner=1,'YES','NO') as connectwner,
					  g.eid as epid,if(g.record=1,'YES','NO') as records,
					  if(g.replytocustomer=1,'YES','NO') as replycus,
					  if(g.replytoexecutive=1,'YES','NO') as replyexe,
					  if(g.pincode=1,'YES','NO') as pcode,
					  p.number as prinumber,
					  p.landingnumber as addnumber,(if(g.primary_rule=0,'All',cr.regionname)) as regionname,
					  r.rulename as rules,g.rules as rule
					  FROM 1_groups g 
					  LEFT JOIN group_rules r on g.rules=r.rulesid 
					  LEFT JOIN 1_employee e on g.eid=e.eid 
					  LEFT JOIN 1_support_groups sg on g.supportgrp=sg.gid 
					  LEFT JOIN prinumber p on g.prinumber=p.number
					  LEFT JOIN 1_custom_region cr on g.primary_rule=cr.regionid
					  WHERE g.bid='1' 
					  AND g.gid='17'
[2017-06-19 12:23:26]	SQL :	SELECT * FROM 1_customfieldsvalue 
				WHERE bid='1' 
				AND modid='3'
				AND dataid='17'
[2017-06-19 12:23:26]	SQL :	SELECT s.fieldname
							FROM systemfields s
							LEFT JOIN `features` f on s.addon=f.feature_id
							LEFT JOIN business_packageaddons b on (f.feature_id=b.feature_id AND b.number='200048')
							WHERE s.modid='3' AND s.addon!=0 AND b.number is null
[2017-06-19 12:23:26]	SQL :	SELECT feature_id FROM business_feature WHERE bid='1'
[2017-06-19 12:23:26]	SQL :	SELECT l.region, p.bid,l.number FROM landingnumbers l 
		                        LEFT JOIN prinumbers p ON p.landingnumber=l.number 
		                        WHERE p.bid='1' 
		                        AND p.status = '0' AND p.type = '0' AND l.module_id = '1'
		                         
[2017-06-19 12:23:26]	SQL :	SELECT p.status,p.number,p.landingnumber from prinumbers p
								LEFT JOIN landingnumbers l on l.pri=p.pri
								WHERE p.bid='1' 
								AND p.ntype=0 AND l.module_id='1'
								
[2017-06-19 12:23:26]	SQL :	SELECT * FROM group_rules
[2017-06-19 12:23:26]	SQL :	select eid,empname from 1_employee where status=1 ORDER BY empname
[2017-06-19 12:23:26]	DEBUG :	Database Driver Class Initialized
[2017-06-19 12:23:26]	SQL :	SELECT * FROM 1_user_role
							WHERE roleid='1'
							AND bid='1'
[2017-06-19 12:23:26]	SQL :	SELECT m.modid,m.modname,m.moddesc,
							COALESCE(o.opt_add,0) as opt_add,
							COALESCE(o.opt_view,0) as opt_view,
							COALESCE(o.opt_download,0) as opt_download,
							COALESCE(opt_delete,0) as opt_delete 
							FROM module m
							LEFT JOIN (SELECT * FROM 1_role_mod_opt
							WHERE roleid='1' 
							AND bid='1') as o
							ON m.modid=o.modid where m.status=1
[2017-06-19 12:23:26]	SQL :	SELECT a.*,f.fieldname FROM 1_role_access a
								LEFT JOIN systemfields f on a.fieldid=f.fieldid
								WHERE a.roleid='1'
								AND a.bid='1'
								AND a.fieldtype='s'
[2017-06-19 12:23:26]	SQL :	SELECT * FROM 1_role_access
								WHERE roleid='1'
								AND bid='1'
							AND fieldtype='c'
[2017-06-19 12:23:26]	SQL :	SELECT * FROM 1_employee WHERE status='1' ORDER BY empname
[2017-06-19 12:23:26]	SQL :	SELECT * FROM 1_custom_region
[2017-06-19 12:23:26]	SQL :	SELECT support FROM `prinumbers` WHERE bid='1' 
[2017-06-19 12:23:26]	SQL :	SELECT * FROM 1_support_groups WHERE status=1
[2017-06-19 12:23:26]	SQL :	select eid,empname from 1_employee where status=1 ORDER BY empname
[2017-06-19 12:23:26]	DEBUG :	Database Driver Class Initialized
[2017-06-19 12:23:26]	SQL :	SELECT * FROM 1_user_role
							WHERE roleid='1'
							AND bid='1'
[2017-06-19 12:23:26]	SQL :	SELECT m.modid,m.modname,m.moddesc,
							COALESCE(o.opt_add,0) as opt_add,
							COALESCE(o.opt_view,0) as opt_view,
							COALESCE(o.opt_download,0) as opt_download,
							COALESCE(opt_delete,0) as opt_delete 
							FROM module m
							LEFT JOIN (SELECT * FROM 1_role_mod_opt
							WHERE roleid='1' 
							AND bid='1') as o
							ON m.modid=o.modid where m.status=1
[2017-06-19 12:23:26]	SQL :	SELECT a.*,f.fieldname FROM 1_role_access a
								LEFT JOIN systemfields f on a.fieldid=f.fieldid
								WHERE a.roleid='1'
								AND a.bid='1'
								AND a.fieldtype='s'
[2017-06-19 12:23:26]	SQL :	SELECT * FROM 1_role_access
								WHERE roleid='1'
								AND bid='1'
							AND fieldtype='c'
[2017-06-19 12:23:26]	SQL :	SELECT * FROM 1_employee WHERE status='1' ORDER BY empname
[2017-06-19 12:23:26]	DEBUG :	File loaded: /var/www/html/mcnew/system/application/views/mainheader.php
[2017-06-19 12:23:26]	DEBUG :	Database Driver Class Initialized
[2017-06-19 12:23:26]	SQL :	select a.*,e.empname as reporttoname,b.rolename  as role,if(u.recording=1,'Yes','No') as recording
					  from 1_employee a
					  LEFT JOIN  1_employee e on a.reportto=e.eid
					  LEFT JOIN  user u on a.eid=u.eid
					  ,1_user_role b 
					  where a.roleid=b.roleid AND a.eid='1'
[2017-06-19 12:23:26]	SQL :	SELECT * FROM 1_customfieldsvalue 
				WHERE bid='1' 
				AND modid='2'
				AND dataid='1'
[2017-06-19 12:23:26]	DEBUG :	File loaded: /var/www/html/mcnew/system/application/views/leftsidebar.php
[2017-06-19 12:23:26]	DEBUG :	File loaded: /var/www/html/mcnew/system/application/views/form_view.php
[2017-06-19 12:23:26]	DEBUG :	File loaded: /var/www/html/mcnew/system/application/views/footer.php
[2017-06-19 12:23:26]	DEBUG :	Final output sent to browser
[2017-06-19 12:23:26]	DEBUG :	Total execution time: 0.1798
[2017-06-19 12:23:31]	DEBUG :	Config Class Initialized
[2017-06-19 12:23:31]	DEBUG :	Hooks Class Initialized
[2017-06-19 12:23:31]	DEBUG :	URI Class Initialized
[2017-06-19 12:23:31]	DEBUG :	Router Class Initialized
[2017-06-19 12:23:31]	DEBUG :	Output Class Initialized
[2017-06-19 12:23:31]	DEBUG :	Input Class Initialized
[2017-06-19 12:23:31]	DEBUG :	XSS Filtering completed
[2017-06-19 12:23:31]	DEBUG :	XSS Filtering completed
[2017-06-19 12:23:31]	DEBUG :	XSS Filtering completed
[2017-06-19 12:23:31]	DEBUG :	XSS Filtering completed
[2017-06-19 12:23:31]	DEBUG :	Global POST and COOKIE data sanitized
[2017-06-19 12:23:31]	DEBUG :	Language Class Initialized
[2017-06-19 12:23:31]	DEBUG :	Loader Class Initialized
[2017-06-19 12:23:31]	DEBUG :	Helper loaded: url_helper
[2017-06-19 12:23:31]	DEBUG :	Helper loaded: form_helper
[2017-06-19 12:23:31]	DEBUG :	Helper loaded: html_helper
[2017-06-19 12:23:31]	DEBUG :	Helper loaded: email_helper
[2017-06-19 12:23:31]	DEBUG :	Helper loaded: ckeditor_helper
[2017-06-19 12:23:31]	DEBUG :	Helper loaded: mcube_helper
[2017-06-19 12:23:31]	DEBUG :	Database Driver Class Initialized
[2017-06-19 12:23:31]	ERROR :	Severity: 8192  --> mysql_pconnect(): The mysql extension is deprecated and will be removed in the future: use mysqli or PDO instead /var/www/html/mcnew/system/database/drivers/mysql/mysql_driver.php 88
[2017-06-19 12:23:31]	DEBUG :	Session Class Initialized
[2017-06-19 12:23:31]	DEBUG :	Helper loaded: string_helper
[2017-06-19 12:23:31]	DEBUG :	Encrypt Class Initialized
[2017-06-19 12:23:31]	SQL :	SELECT *
FROM (`call_sessions`)
WHERE `session_id` = '847e9ee4e1543e295a6ddd381996c5e3'
AND `user_agent` = 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36'
[2017-06-19 12:23:31]	DEBUG :	Session routines successfully run
[2017-06-19 12:23:31]	DEBUG :	Table Class Initialized
[2017-06-19 12:23:31]	DEBUG :	Pagination Class Initialized
[2017-06-19 12:23:31]	DEBUG :	Config file loaded: config/paypallib_config.php
[2017-06-19 12:23:31]	DEBUG :	Form Validation Class Initialized
[2017-06-19 12:23:31]	DEBUG :	Email Class Initialized
[2017-06-19 12:23:31]	DEBUG :	Language file loaded: language/english/calendar_lang.php
[2017-06-19 12:23:31]	DEBUG :	Calendar Class Initialized
[2017-06-19 12:23:31]	DEBUG :	Controller Class Initialized
[2017-06-19 12:23:31]	DEBUG :	Model Class Initialized
[2017-06-19 12:23:31]	DEBUG :	Model Class Initialized
[2017-06-19 12:23:31]	DEBUG :	Model Class Initialized
[2017-06-19 12:23:31]	DEBUG :	Model Class Initialized
[2017-06-19 12:23:31]	DEBUG :	Model Class Initialized
[2017-06-19 12:23:31]	DEBUG :	Model Class Initialized
[2017-06-19 12:23:31]	DEBUG :	Model Class Initialized
[2017-06-19 12:23:31]	DEBUG :	Model Class Initialized
[2017-06-19 12:23:31]	DEBUG :	Model Class Initialized
[2017-06-19 12:23:31]	DEBUG :	Model Class Initialized
[2017-06-19 12:23:31]	DEBUG :	Model Class Initialized
[2017-06-19 12:23:31]	DEBUG :	Model Class Initialized
[2017-06-19 12:23:31]	DEBUG :	Plugin loaded: to_pdf_pi
[2017-06-19 12:23:31]	SQL :	SELECT u.uid FROM user u
				LEFT JOIN 1_employee e on (e.bid=u.bid AND e.eid=u.eid)
				WHERE e.status='1' AND e.login='1' AND u.status='1' 
				AND u.bid='1' AND u.eid='1'
[2017-06-19 12:23:31]	SQL :	SELECT *
FROM (`language`)
WHERE `langid` = '1'
[2017-06-19 12:23:31]	DEBUG :	Database Driver Class Initialized
[2017-06-19 12:23:31]	SQL :	SELECT roleid FROM 1_employee
							WHERE eid='1'
							AND bid='1'
[2017-06-19 12:23:31]	SQL :	UPDATE `call_sessions` SET `last_activity` = '1497853678', `user_data` = 'a:20:{s:3:\"uid\";s:1:\"1\";s:3:\"bid\";s:1:\"1\";s:8:\"username\";s:20:\"ashwini.naidu@vmc.in\";s:3:\"eid\";s:1:\"1\";s:3:\"app\";s:1:\"1\";s:7:\"authkey\";s:17:\"1.1.d886b8e8a0615\";s:9:\"recording\";s:1:\"1\";s:10:\"mcubecalls\";s:1:\"1\";s:7:\"mtdebug\";s:1:\"1\";s:8:\"deviceid\";s:36:\"ffffffff-a4d5-960f-ffff-ffff82ba1723\";s:8:\"language\";s:1:\"1\";s:6:\"status\";s:1:\"1\";s:9:\"appstatus\";s:1:\"1\";s:3:\"pid\";s:1:\"0\";s:3:\"act\";s:1:\"0\";s:16:\"registrationdate\";s:19:\"2014-09-08 16:04:19\";s:10:\"dnd_status\";s:1:\"0\";s:9:\"logged_in\";s:1:\"1\";s:6:\"roleid\";s:1:\"1\";s:4:\"cbid\";s:1:\"1\";}' WHERE `session_id` = '847e9ee4e1543e295a6ddd381996c5e3'
[2017-06-19 12:23:31]	DEBUG :	Database Driver Class Initialized
[2017-06-19 12:23:31]	SQL :	SELECT * FROM 1_user_role
							WHERE roleid='1'
							AND bid='1'
[2017-06-19 12:23:31]	SQL :	SELECT m.modid,m.modname,m.moddesc,
							COALESCE(o.opt_add,0) as opt_add,
							COALESCE(o.opt_view,0) as opt_view,
							COALESCE(o.opt_download,0) as opt_download,
							COALESCE(opt_delete,0) as opt_delete 
							FROM module m
							LEFT JOIN (SELECT * FROM 1_role_mod_opt
							WHERE roleid='1' 
							AND bid='1') as o
							ON m.modid=o.modid where m.status=1
[2017-06-19 12:23:31]	SQL :	SELECT a.*,f.fieldname FROM 1_role_access a
								LEFT JOIN systemfields f on a.fieldid=f.fieldid
								WHERE a.roleid='1'
								AND a.bid='1'
								AND a.fieldtype='s'
[2017-06-19 12:23:31]	SQL :	SELECT * FROM 1_role_access
								WHERE roleid='1'
								AND bid='1'
							AND fieldtype='c'
[2017-06-19 12:23:31]	SQL :	SELECT a.selfdisable FROM 1_employee a WHERE a.eid='1'
[2017-06-19 12:23:31]	DEBUG :	Language file loaded: language/english/unit_test_lang.php
[2017-06-19 12:23:31]	DEBUG :	Language file loaded: language/english/db_lang.php
[2017-06-19 12:23:31]	DEBUG :	Language file loaded: language/english/ftp_lang.php
[2017-06-19 12:23:31]	DEBUG :	Language file loaded: language/english/menu_lang.php
[2017-06-19 12:23:31]	DEBUG :	Language file loaded: language/english/db_tables_lang.php
[2017-06-19 12:23:31]	DEBUG :	Language file loaded: language/english/form_level_lang.php
[2017-06-19 12:23:31]	DEBUG :	Language file loaded: language/english/form_validation_lang.php
[2017-06-19 12:23:31]	DEBUG :	Language file loaded: language/english/email_lang.php
[2017-06-19 12:23:31]	DEBUG :	Language file loaded: language/english/number_lang.php
[2017-06-19 12:23:31]	DEBUG :	Language file loaded: language/english/layout_lang.php
[2017-06-19 12:23:31]	DEBUG :	Language file loaded: language/english/validation_lang.php
[2017-06-19 12:23:31]	DEBUG :	Language file loaded: language/english/scaffolding_lang.php
[2017-06-19 12:23:31]	DEBUG :	Language file loaded: language/english/date_lang.php
[2017-06-19 12:23:31]	DEBUG :	Language file loaded: language/english/profiler_lang.php
[2017-06-19 12:23:31]	DEBUG :	Language file loaded: language/english/imglib_lang.php
[2017-06-19 12:23:31]	DEBUG :	Language file loaded: language/english/error_msg_lang.php
[2017-06-19 12:23:31]	DEBUG :	Language file loaded: language/english/upload_lang.php
[2017-06-19 12:23:31]	SQL :	SELECT id,category,subcategory,type,status FROM feedback WHERE status=1 
[2017-06-19 12:23:31]	SQL :	SELECT feature_id FROM business_feature WHERE bid='1'
[2017-06-19 12:23:31]	SQL :	SELECT feature_id FROM business_feature WHERE bid='1'
[2017-06-19 12:23:31]	SQL :	SELECT feature_id FROM business_feature WHERE bid='1'
[2017-06-19 12:23:31]	SQL :	SELECT id,type FROM 1_leads_status
[2017-06-19 12:23:31]	SQL :	SELECT design FROM business_lead_use WHERE bid='1' LIMIT 0,1
[2017-06-19 12:23:31]	SQL :	SELECT sid,status FROM 1_support_status
[2017-06-19 12:23:31]	SQL :	SELECT feature_id FROM `business_feature` where bid=1
[2017-06-19 12:23:31]	SQL :	SELECT action_align FROM account_settings WHERE bid='1'
[2017-06-19 12:23:31]	SQL :	SELECT dialstatus FROM 1_callhistory WHERE dialstatus = 'CONNECTING'
[2017-06-19 12:23:31]	SQL :	SELECT FOUND_ROWS() as cnt
[2017-06-19 12:23:31]	SQL :	SELECT del_notify FROM account_settings WHERE bid='1'
[2017-06-19 12:23:31]	DEBUG :	Model Class Initialized
[2017-06-19 12:23:31]	DEBUG :	Database Driver Class Initialized
[2017-06-19 12:23:31]	SQL :	SELECT * FROM 1_user_role
							WHERE roleid='1'
							AND bid='1'
[2017-06-19 12:23:31]	SQL :	SELECT m.modid,m.modname,m.moddesc,
							COALESCE(o.opt_add,0) as opt_add,
							COALESCE(o.opt_view,0) as opt_view,
							COALESCE(o.opt_download,0) as opt_download,
							COALESCE(opt_delete,0) as opt_delete 
							FROM module m
							LEFT JOIN (SELECT * FROM 1_role_mod_opt
							WHERE roleid='1' 
							AND bid='1') as o
							ON m.modid=o.modid where m.status=1
[2017-06-19 12:23:31]	SQL :	SELECT a.*,f.fieldname FROM 1_role_access a
								LEFT JOIN systemfields f on a.fieldid=f.fieldid
								WHERE a.roleid='1'
								AND a.bid='1'
								AND a.fieldtype='s'
[2017-06-19 12:23:31]	SQL :	SELECT * FROM 1_role_access
								WHERE roleid='1'
								AND bid='1'
							AND fieldtype='c'
[2017-06-19 12:23:31]	SQL :	SELECT p.status,p.number,p.landingnumber from prinumbers p
									LEFT JOIN landingnumbers l on l.pri=p.pri
									WHERE p.bid='1' AND p.status=0
									AND l.region = 'KA' AND p.ntype=0 AND l.module_id='1'
									ORDER BY l.region
[2017-06-19 12:23:31]	DEBUG :	Final output sent to browser
[2017-06-19 12:23:31]	DEBUG :	Total execution time: 0.0763
[2017-06-19 12:23:34]	DEBUG :	Config Class Initialized
[2017-06-19 12:23:34]	DEBUG :	Hooks Class Initialized
[2017-06-19 12:23:34]	DEBUG :	URI Class Initialized
[2017-06-19 12:23:34]	DEBUG :	Router Class Initialized
[2017-06-19 12:23:34]	DEBUG :	Output Class Initialized
[2017-06-19 12:23:34]	DEBUG :	Input Class Initialized
[2017-06-19 12:23:34]	DEBUG :	XSS Filtering completed
[2017-06-19 12:23:34]	DEBUG :	XSS Filtering completed
[2017-06-19 12:23:34]	DEBUG :	XSS Filtering completed
[2017-06-19 12:23:34]	DEBUG :	XSS Filtering completed
[2017-06-19 12:23:34]	DEBUG :	XSS Filtering completed
[2017-06-19 12:23:34]	DEBUG :	XSS Filtering completed
[2017-06-19 12:23:34]	DEBUG :	XSS Filtering completed
[2017-06-19 12:23:34]	DEBUG :	XSS Filtering completed
[2017-06-19 12:23:34]	DEBUG :	XSS Filtering completed
[2017-06-19 12:23:34]	DEBUG :	XSS Filtering completed
[2017-06-19 12:23:34]	DEBUG :	XSS Filtering completed
[2017-06-19 12:23:34]	DEBUG :	XSS Filtering completed
[2017-06-19 12:23:34]	DEBUG :	XSS Filtering completed
[2017-06-19 12:23:34]	DEBUG :	XSS Filtering completed
[2017-06-19 12:23:34]	DEBUG :	XSS Filtering completed
[2017-06-19 12:23:34]	DEBUG :	XSS Filtering completed
[2017-06-19 12:23:34]	DEBUG :	XSS Filtering completed
[2017-06-19 12:23:34]	DEBUG :	XSS Filtering completed
[2017-06-19 12:23:34]	DEBUG :	XSS Filtering completed
[2017-06-19 12:23:34]	DEBUG :	XSS Filtering completed
[2017-06-19 12:23:34]	DEBUG :	XSS Filtering completed
[2017-06-19 12:23:34]	DEBUG :	XSS Filtering completed
[2017-06-19 12:23:34]	DEBUG :	XSS Filtering completed
[2017-06-19 12:23:34]	DEBUG :	XSS Filtering completed
[2017-06-19 12:23:34]	DEBUG :	XSS Filtering completed
[2017-06-19 12:23:34]	DEBUG :	XSS Filtering completed
[2017-06-19 12:23:34]	DEBUG :	XSS Filtering completed
[2017-06-19 12:23:34]	DEBUG :	XSS Filtering completed
[2017-06-19 12:23:34]	DEBUG :	XSS Filtering completed
[2017-06-19 12:23:34]	DEBUG :	XSS Filtering completed
[2017-06-19 12:23:34]	DEBUG :	XSS Filtering completed
[2017-06-19 12:23:34]	DEBUG :	XSS Filtering completed
[2017-06-19 12:23:34]	DEBUG :	XSS Filtering completed
[2017-06-19 12:23:34]	DEBUG :	XSS Filtering completed
[2017-06-19 12:23:34]	DEBUG :	XSS Filtering completed
[2017-06-19 12:23:34]	DEBUG :	XSS Filtering completed
[2017-06-19 12:23:34]	DEBUG :	XSS Filtering completed
[2017-06-19 12:23:34]	DEBUG :	XSS Filtering completed
[2017-06-19 12:23:34]	DEBUG :	XSS Filtering completed
[2017-06-19 12:23:34]	DEBUG :	XSS Filtering completed
[2017-06-19 12:23:34]	DEBUG :	XSS Filtering completed
[2017-06-19 12:23:34]	DEBUG :	XSS Filtering completed
[2017-06-19 12:23:34]	DEBUG :	XSS Filtering completed
[2017-06-19 12:23:34]	DEBUG :	XSS Filtering completed
[2017-06-19 12:23:34]	DEBUG :	XSS Filtering completed
[2017-06-19 12:23:34]	DEBUG :	XSS Filtering completed
[2017-06-19 12:23:34]	DEBUG :	XSS Filtering completed
[2017-06-19 12:23:34]	DEBUG :	XSS Filtering completed
[2017-06-19 12:23:34]	DEBUG :	XSS Filtering completed
[2017-06-19 12:23:34]	DEBUG :	XSS Filtering completed
[2017-06-19 12:23:34]	DEBUG :	XSS Filtering completed
[2017-06-19 12:23:34]	DEBUG :	XSS Filtering completed
[2017-06-19 12:23:34]	DEBUG :	Global POST and COOKIE data sanitized
[2017-06-19 12:23:34]	DEBUG :	Language Class Initialized
[2017-06-19 12:23:34]	DEBUG :	Loader Class Initialized
[2017-06-19 12:23:34]	DEBUG :	Helper loaded: url_helper
[2017-06-19 12:23:34]	DEBUG :	Helper loaded: form_helper
[2017-06-19 12:23:34]	DEBUG :	Helper loaded: html_helper
[2017-06-19 12:23:34]	DEBUG :	Helper loaded: email_helper
[2017-06-19 12:23:34]	DEBUG :	Helper loaded: ckeditor_helper
[2017-06-19 12:23:34]	DEBUG :	Helper loaded: mcube_helper
[2017-06-19 12:23:34]	DEBUG :	Database Driver Class Initialized
[2017-06-19 12:23:34]	ERROR :	Severity: 8192  --> mysql_pconnect(): The mysql extension is deprecated and will be removed in the future: use mysqli or PDO instead /var/www/html/mcnew/system/database/drivers/mysql/mysql_driver.php 88
[2017-06-19 12:23:34]	DEBUG :	Session Class Initialized
[2017-06-19 12:23:34]	DEBUG :	Helper loaded: string_helper
[2017-06-19 12:23:34]	DEBUG :	Encrypt Class Initialized
[2017-06-19 12:23:34]	SQL :	SELECT *
FROM (`call_sessions`)
WHERE `session_id` = '847e9ee4e1543e295a6ddd381996c5e3'
AND `user_agent` = 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36'
[2017-06-19 12:23:34]	DEBUG :	Session routines successfully run
[2017-06-19 12:23:34]	DEBUG :	Table Class Initialized
[2017-06-19 12:23:34]	DEBUG :	Pagination Class Initialized
[2017-06-19 12:23:34]	DEBUG :	Config file loaded: config/paypallib_config.php
[2017-06-19 12:23:34]	DEBUG :	Form Validation Class Initialized
[2017-06-19 12:23:34]	DEBUG :	Email Class Initialized
[2017-06-19 12:23:34]	DEBUG :	Language file loaded: language/english/calendar_lang.php
[2017-06-19 12:23:34]	DEBUG :	Calendar Class Initialized
[2017-06-19 12:23:34]	DEBUG :	Controller Class Initialized
[2017-06-19 12:23:34]	DEBUG :	Model Class Initialized
[2017-06-19 12:23:34]	DEBUG :	Model Class Initialized
[2017-06-19 12:23:34]	DEBUG :	Model Class Initialized
[2017-06-19 12:23:34]	DEBUG :	Model Class Initialized
[2017-06-19 12:23:34]	DEBUG :	Model Class Initialized
[2017-06-19 12:23:34]	DEBUG :	Model Class Initialized
[2017-06-19 12:23:34]	DEBUG :	Model Class Initialized
[2017-06-19 12:23:34]	DEBUG :	Model Class Initialized
[2017-06-19 12:23:34]	DEBUG :	Model Class Initialized
[2017-06-19 12:23:34]	DEBUG :	Model Class Initialized
[2017-06-19 12:23:34]	DEBUG :	Model Class Initialized
[2017-06-19 12:23:34]	DEBUG :	Model Class Initialized
[2017-06-19 12:23:34]	DEBUG :	Plugin loaded: to_pdf_pi
[2017-06-19 12:23:34]	SQL :	SELECT u.uid FROM user u
				LEFT JOIN 1_employee e on (e.bid=u.bid AND e.eid=u.eid)
				WHERE e.status='1' AND e.login='1' AND u.status='1' 
				AND u.bid='1' AND u.eid='1'
[2017-06-19 12:23:34]	SQL :	SELECT *
FROM (`language`)
WHERE `langid` = '1'
[2017-06-19 12:23:34]	DEBUG :	Database Driver Class Initialized
[2017-06-19 12:23:34]	SQL :	SELECT roleid FROM 1_employee
							WHERE eid='1'
							AND bid='1'
[2017-06-19 12:23:34]	SQL :	UPDATE `call_sessions` SET `last_activity` = '1497853678', `user_data` = 'a:20:{s:3:\"uid\";s:1:\"1\";s:3:\"bid\";s:1:\"1\";s:8:\"username\";s:20:\"ashwini.naidu@vmc.in\";s:3:\"eid\";s:1:\"1\";s:3:\"app\";s:1:\"1\";s:7:\"authkey\";s:17:\"1.1.d886b8e8a0615\";s:9:\"recording\";s:1:\"1\";s:10:\"mcubecalls\";s:1:\"1\";s:7:\"mtdebug\";s:1:\"1\";s:8:\"deviceid\";s:36:\"ffffffff-a4d5-960f-ffff-ffff82ba1723\";s:8:\"language\";s:1:\"1\";s:6:\"status\";s:1:\"1\";s:9:\"appstatus\";s:1:\"1\";s:3:\"pid\";s:1:\"0\";s:3:\"act\";s:1:\"0\";s:16:\"registrationdate\";s:19:\"2014-09-08 16:04:19\";s:10:\"dnd_status\";s:1:\"0\";s:9:\"logged_in\";s:1:\"1\";s:6:\"roleid\";s:1:\"1\";s:4:\"cbid\";s:1:\"1\";}' WHERE `session_id` = '847e9ee4e1543e295a6ddd381996c5e3'
[2017-06-19 12:23:34]	DEBUG :	Database Driver Class Initialized
[2017-06-19 12:23:34]	SQL :	SELECT * FROM 1_user_role
							WHERE roleid='1'
							AND bid='1'
[2017-06-19 12:23:34]	SQL :	SELECT m.modid,m.modname,m.moddesc,
							COALESCE(o.opt_add,0) as opt_add,
							COALESCE(o.opt_view,0) as opt_view,
							COALESCE(o.opt_download,0) as opt_download,
							COALESCE(opt_delete,0) as opt_delete 
							FROM module m
							LEFT JOIN (SELECT * FROM 1_role_mod_opt
							WHERE roleid='1' 
							AND bid='1') as o
							ON m.modid=o.modid where m.status=1
[2017-06-19 12:23:34]	SQL :	SELECT a.*,f.fieldname FROM 1_role_access a
								LEFT JOIN systemfields f on a.fieldid=f.fieldid
								WHERE a.roleid='1'
								AND a.bid='1'
								AND a.fieldtype='s'
[2017-06-19 12:23:34]	SQL :	SELECT * FROM 1_role_access
								WHERE roleid='1'
								AND bid='1'
							AND fieldtype='c'
[2017-06-19 12:23:34]	SQL :	SELECT a.selfdisable FROM 1_employee a WHERE a.eid='1'
[2017-06-19 12:23:34]	DEBUG :	Language file loaded: language/english/unit_test_lang.php
[2017-06-19 12:23:34]	DEBUG :	Language file loaded: language/english/db_lang.php
[2017-06-19 12:23:34]	DEBUG :	Language file loaded: language/english/ftp_lang.php
[2017-06-19 12:23:34]	DEBUG :	Language file loaded: language/english/menu_lang.php
[2017-06-19 12:23:34]	DEBUG :	Language file loaded: language/english/db_tables_lang.php
[2017-06-19 12:23:34]	DEBUG :	Language file loaded: language/english/form_level_lang.php
[2017-06-19 12:23:34]	DEBUG :	Language file loaded: language/english/form_validation_lang.php
[2017-06-19 12:23:34]	DEBUG :	Language file loaded: language/english/email_lang.php
[2017-06-19 12:23:34]	DEBUG :	Language file loaded: language/english/number_lang.php
[2017-06-19 12:23:34]	DEBUG :	Language file loaded: language/english/layout_lang.php
[2017-06-19 12:23:34]	DEBUG :	Language file loaded: language/english/validation_lang.php
[2017-06-19 12:23:34]	DEBUG :	Language file loaded: language/english/scaffolding_lang.php
[2017-06-19 12:23:34]	DEBUG :	Language file loaded: language/english/date_lang.php
[2017-06-19 12:23:34]	DEBUG :	Language file loaded: language/english/profiler_lang.php
[2017-06-19 12:23:34]	DEBUG :	Language file loaded: language/english/imglib_lang.php
[2017-06-19 12:23:34]	DEBUG :	Language file loaded: language/english/error_msg_lang.php
[2017-06-19 12:23:34]	DEBUG :	Language file loaded: language/english/upload_lang.php
[2017-06-19 12:23:34]	SQL :	SELECT id,category,subcategory,type,status FROM feedback WHERE status=1 
[2017-06-19 12:23:34]	SQL :	SELECT feature_id FROM business_feature WHERE bid='1'
[2017-06-19 12:23:34]	SQL :	SELECT feature_id FROM business_feature WHERE bid='1'
[2017-06-19 12:23:34]	SQL :	SELECT feature_id FROM business_feature WHERE bid='1'
[2017-06-19 12:23:34]	SQL :	SELECT id,type FROM 1_leads_status
[2017-06-19 12:23:34]	SQL :	SELECT design FROM business_lead_use WHERE bid='1' LIMIT 0,1
[2017-06-19 12:23:34]	SQL :	SELECT sid,status FROM 1_support_status
[2017-06-19 12:23:34]	SQL :	SELECT feature_id FROM `business_feature` where bid=1
[2017-06-19 12:23:34]	SQL :	SELECT action_align FROM account_settings WHERE bid='1'
[2017-06-19 12:23:34]	SQL :	SELECT dialstatus FROM 1_callhistory WHERE dialstatus = 'CONNECTING'
[2017-06-19 12:23:34]	SQL :	SELECT FOUND_ROWS() as cnt
[2017-06-19 12:23:34]	SQL :	SELECT del_notify FROM account_settings WHERE bid='1'
[2017-06-19 12:23:34]	DEBUG :	Model Class Initialized
[2017-06-19 12:23:34]	DEBUG :	Database Driver Class Initialized
[2017-06-19 12:23:34]	SQL :	SELECT * FROM 1_user_role
							WHERE roleid='1'
							AND bid='1'
[2017-06-19 12:23:34]	SQL :	SELECT m.modid,m.modname,m.moddesc,
							COALESCE(o.opt_add,0) as opt_add,
							COALESCE(o.opt_view,0) as opt_view,
							COALESCE(o.opt_download,0) as opt_download,
							COALESCE(opt_delete,0) as opt_delete 
							FROM module m
							LEFT JOIN (SELECT * FROM 1_role_mod_opt
							WHERE roleid='1' 
							AND bid='1') as o
							ON m.modid=o.modid where m.status=1
[2017-06-19 12:23:34]	SQL :	SELECT a.*,f.fieldname FROM 1_role_access a
								LEFT JOIN systemfields f on a.fieldid=f.fieldid
								WHERE a.roleid='1'
								AND a.bid='1'
								AND a.fieldtype='s'
[2017-06-19 12:23:34]	SQL :	SELECT * FROM 1_role_access
								WHERE roleid='1'
								AND bid='1'
							AND fieldtype='c'
[2017-06-19 12:23:34]	SQL :	SELECT feature_id FROM `business_feature` where bid=1
[2017-06-19 12:23:34]	SQL :	SELECT feature_id FROM `business_feature` where bid=1
[2017-06-19 12:23:34]	SQL :	select	groupname from 1_groups where groupname='new group' and gid!=17
[2017-06-19 12:23:34]	DEBUG :	Database Driver Class Initialized
[2017-06-19 12:23:34]	SQL :	SELECT * FROM 1_user_role
							WHERE roleid='1'
							AND bid='1'
[2017-06-19 12:23:34]	SQL :	SELECT m.modid,m.modname,m.moddesc,
							COALESCE(o.opt_add,0) as opt_add,
							COALESCE(o.opt_view,0) as opt_view,
							COALESCE(o.opt_download,0) as opt_download,
							COALESCE(opt_delete,0) as opt_delete 
							FROM module m
							LEFT JOIN (SELECT * FROM 1_role_mod_opt
							WHERE roleid='1' 
							AND bid='1') as o
							ON m.modid=o.modid where m.status=1
[2017-06-19 12:23:34]	SQL :	SELECT a.*,f.fieldname FROM 1_role_access a
								LEFT JOIN systemfields f on a.fieldid=f.fieldid
								WHERE a.roleid='1'
								AND a.bid='1'
								AND a.fieldtype='s'
[2017-06-19 12:23:34]	SQL :	SELECT * FROM 1_role_access
								WHERE roleid='1'
								AND bid='1'
							AND fieldtype='c'
[2017-06-19 12:23:34]	SQL :	SELECT prinumber FROM 1_groups WHERE gid = '17' 
[2017-06-19 12:23:34]	SQL :	UPDATE prinumbers SET
					status		= '0'
					,associateid= '0'
					WHERE number= '200048'
[2017-06-19 12:23:34]	SQL :	UPDATE prinumbers SET
					status		= '1'
					,associateid= '17'
					WHERE number= '200047'
[2017-06-19 12:23:34]	ERROR :	Severity: Notice  --> Undefined index: voicmess /var/www/html/mcnew/system/application/models/groupmodel.php 418
[2017-06-19 12:23:34]	SQL :	UPDATE `1_groups` SET `replytocust_voitext` = '', `groupname` = 'new group', `bday` = '{\"Mon\":{\"day\":\"1\",\"st\":\"00:00\",\"et\":\"23:59\"},\"Tue\":{\"day\":\"1\",\"st\":\"00:00\",\"et\":\"23:59\"},\"Wed\":{\"day\":\"1\",\"st\":\"00:00\",\"et\":\"23:59\"},\"Thu\":{\"day\":\"1\",\"st\":\"00:00\",\"et\":\"23:59\"},\"Fri\":{\"day\":\"1\",\"st\":\"00:00\",\"et\":\"23:59\"},\"Sat\":{\"day\":\"1\",\"st\":\"00:00\",\"et\":\"23:59\"},\"Sun\":{\"day\":\"1\",\"st\":\"00:00\",\"et\":\"23:59\"}}', `prinumber` = '200047', `rules` = '1', `eid` = '5', `keyword` = 'test', `primary_rule` = '0', `record` = '1', `hdaytext` = '', `replymessage` = '', `replytocustomer` = '1', `replytoexecutive` = '1', `timeout` = '25', `oneditaction` = '', `onhangup` = '', `leadaction` = '', `replyattmsg` = '', `oncallaction` = '', `supportaction` = '', `supportgrp` = '', `landingregion` = 'KA', `voicemessagetext` = '', `connectowner` = '0', `recordnotice` = '0', `sameexe` = '0', `misscall` = '0', `pincode` = '0', `allgroup` = 0, `mailalerttowoner` = '0', `groupkey` = 'MV8xNw==' WHERE `gid` = '17'
[2017-06-19 12:23:34]	SQL :	UPDATE 1_group_emp SET callcounter='0' WHERE gid='17'
[2017-06-19 12:23:34]	SQL :	SELECT COALESCE(MAX(`sno`),0)+1 as id FROM 1_activitylog
[2017-06-19 12:23:34]	SQL :	INSERT INTO `1_activitylog` (`sno`, `bid`, `uid`, `module_name`, `action`) VALUES ('3879', '1', '1', 'Group Module', 'Updated Group  new group')
[2017-06-19 12:23:34]	SQL :	UPDATE `call_sessions` SET `last_activity` = '1497853678', `user_data` = 'a:21:{s:3:\"uid\";s:1:\"1\";s:3:\"bid\";s:1:\"1\";s:8:\"username\";s:20:\"ashwini.naidu@vmc.in\";s:3:\"eid\";s:1:\"1\";s:3:\"app\";s:1:\"1\";s:7:\"authkey\";s:17:\"1.1.d886b8e8a0615\";s:9:\"recording\";s:1:\"1\";s:10:\"mcubecalls\";s:1:\"1\";s:7:\"mtdebug\";s:1:\"1\";s:8:\"deviceid\";s:36:\"ffffffff-a4d5-960f-ffff-ffff82ba1723\";s:8:\"language\";s:1:\"1\";s:6:\"status\";s:1:\"1\";s:9:\"appstatus\";s:1:\"1\";s:3:\"pid\";s:1:\"0\";s:3:\"act\";s:1:\"0\";s:16:\"registrationdate\";s:19:\"2014-09-08 16:04:19\";s:10:\"dnd_status\";s:1:\"0\";s:9:\"logged_in\";s:1:\"1\";s:6:\"roleid\";s:1:\"1\";s:4:\"cbid\";s:1:\"1\";s:14:\"flash:new:msgt\";s:7:\"success\";}' WHERE `session_id` = '847e9ee4e1543e295a6ddd381996c5e3'
[2017-06-19 12:23:34]	SQL :	UPDATE `call_sessions` SET `last_activity` = '1497853678', `user_data` = 'a:22:{s:3:\"uid\";s:1:\"1\";s:3:\"bid\";s:1:\"1\";s:8:\"username\";s:20:\"ashwini.naidu@vmc.in\";s:3:\"eid\";s:1:\"1\";s:3:\"app\";s:1:\"1\";s:7:\"authkey\";s:17:\"1.1.d886b8e8a0615\";s:9:\"recording\";s:1:\"1\";s:10:\"mcubecalls\";s:1:\"1\";s:7:\"mtdebug\";s:1:\"1\";s:8:\"deviceid\";s:36:\"ffffffff-a4d5-960f-ffff-ffff82ba1723\";s:8:\"language\";s:1:\"1\";s:6:\"status\";s:1:\"1\";s:9:\"appstatus\";s:1:\"1\";s:3:\"pid\";s:1:\"0\";s:3:\"act\";s:1:\"0\";s:16:\"registrationdate\";s:19:\"2014-09-08 16:04:19\";s:10:\"dnd_status\";s:1:\"0\";s:9:\"logged_in\";s:1:\"1\";s:6:\"roleid\";s:1:\"1\";s:4:\"cbid\";s:1:\"1\";s:14:\"flash:new:msgt\";s:7:\"success\";s:13:\"flash:new:msg\";s:26:\"Group Updated Successfully\";}' WHERE `session_id` = '847e9ee4e1543e295a6ddd381996c5e3'
[2017-06-19 12:23:34]	DEBUG :	Config Class Initialized
[2017-06-19 12:23:34]	DEBUG :	Hooks Class Initialized
[2017-06-19 12:23:34]	DEBUG :	URI Class Initialized
[2017-06-19 12:23:34]	DEBUG :	Router Class Initialized
[2017-06-19 12:23:34]	DEBUG :	Output Class Initialized
[2017-06-19 12:23:34]	DEBUG :	Input Class Initialized
[2017-06-19 12:23:34]	DEBUG :	XSS Filtering completed
[2017-06-19 12:23:34]	DEBUG :	XSS Filtering completed
[2017-06-19 12:23:34]	DEBUG :	XSS Filtering completed
[2017-06-19 12:23:34]	DEBUG :	XSS Filtering completed
[2017-06-19 12:23:34]	DEBUG :	Global POST and COOKIE data sanitized
[2017-06-19 12:23:34]	DEBUG :	Language Class Initialized
[2017-06-19 12:23:34]	DEBUG :	Loader Class Initialized
[2017-06-19 12:23:34]	DEBUG :	Helper loaded: url_helper
[2017-06-19 12:23:34]	DEBUG :	Helper loaded: form_helper
[2017-06-19 12:23:34]	DEBUG :	Helper loaded: html_helper
[2017-06-19 12:23:34]	DEBUG :	Helper loaded: email_helper
[2017-06-19 12:23:34]	DEBUG :	Helper loaded: ckeditor_helper
[2017-06-19 12:23:34]	DEBUG :	Helper loaded: mcube_helper
[2017-06-19 12:23:34]	DEBUG :	Database Driver Class Initialized
[2017-06-19 12:23:34]	ERROR :	Severity: 8192  --> mysql_pconnect(): The mysql extension is deprecated and will be removed in the future: use mysqli or PDO instead /var/www/html/mcnew/system/database/drivers/mysql/mysql_driver.php 88
[2017-06-19 12:23:34]	DEBUG :	Session Class Initialized
[2017-06-19 12:23:34]	DEBUG :	Helper loaded: string_helper
[2017-06-19 12:23:34]	DEBUG :	Encrypt Class Initialized
[2017-06-19 12:23:34]	SQL :	SELECT *
FROM (`call_sessions`)
WHERE `session_id` = '847e9ee4e1543e295a6ddd381996c5e3'
AND `user_agent` = 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36'
[2017-06-19 12:23:34]	SQL :	UPDATE `call_sessions` SET `last_activity` = '1497853678', `user_data` = 'a:23:{s:3:\"uid\";s:1:\"1\";s:3:\"bid\";s:1:\"1\";s:8:\"username\";s:20:\"ashwini.naidu@vmc.in\";s:3:\"eid\";s:1:\"1\";s:3:\"app\";s:1:\"1\";s:7:\"authkey\";s:17:\"1.1.d886b8e8a0615\";s:9:\"recording\";s:1:\"1\";s:10:\"mcubecalls\";s:1:\"1\";s:7:\"mtdebug\";s:1:\"1\";s:8:\"deviceid\";s:36:\"ffffffff-a4d5-960f-ffff-ffff82ba1723\";s:8:\"language\";s:1:\"1\";s:6:\"status\";s:1:\"1\";s:9:\"appstatus\";s:1:\"1\";s:3:\"pid\";s:1:\"0\";s:3:\"act\";s:1:\"0\";s:16:\"registrationdate\";s:19:\"2014-09-08 16:04:19\";s:10:\"dnd_status\";s:1:\"0\";s:9:\"logged_in\";s:1:\"1\";s:6:\"roleid\";s:1:\"1\";s:4:\"cbid\";s:1:\"1\";s:14:\"flash:new:msgt\";s:7:\"success\";s:13:\"flash:new:msg\";s:26:\"Group Updated Successfully\";s:14:\"flash:old:msgt\";s:7:\"success\";}' WHERE `session_id` = '847e9ee4e1543e295a6ddd381996c5e3'
[2017-06-19 12:23:34]	SQL :	UPDATE `call_sessions` SET `last_activity` = '1497853678', `user_data` = 'a:22:{s:3:\"uid\";s:1:\"1\";s:3:\"bid\";s:1:\"1\";s:8:\"username\";s:20:\"ashwini.naidu@vmc.in\";s:3:\"eid\";s:1:\"1\";s:3:\"app\";s:1:\"1\";s:7:\"authkey\";s:17:\"1.1.d886b8e8a0615\";s:9:\"recording\";s:1:\"1\";s:10:\"mcubecalls\";s:1:\"1\";s:7:\"mtdebug\";s:1:\"1\";s:8:\"deviceid\";s:36:\"ffffffff-a4d5-960f-ffff-ffff82ba1723\";s:8:\"language\";s:1:\"1\";s:6:\"status\";s:1:\"1\";s:9:\"appstatus\";s:1:\"1\";s:3:\"pid\";s:1:\"0\";s:3:\"act\";s:1:\"0\";s:16:\"registrationdate\";s:19:\"2014-09-08 16:04:19\";s:10:\"dnd_status\";s:1:\"0\";s:9:\"logged_in\";s:1:\"1\";s:6:\"roleid\";s:1:\"1\";s:4:\"cbid\";s:1:\"1\";s:13:\"flash:new:msg\";s:26:\"Group Updated Successfully\";s:14:\"flash:old:msgt\";s:7:\"success\";}' WHERE `session_id` = '847e9ee4e1543e295a6ddd381996c5e3'
[2017-06-19 12:23:34]	SQL :	UPDATE `call_sessions` SET `last_activity` = '1497853678', `user_data` = 'a:23:{s:3:\"uid\";s:1:\"1\";s:3:\"bid\";s:1:\"1\";s:8:\"username\";s:20:\"ashwini.naidu@vmc.in\";s:3:\"eid\";s:1:\"1\";s:3:\"app\";s:1:\"1\";s:7:\"authkey\";s:17:\"1.1.d886b8e8a0615\";s:9:\"recording\";s:1:\"1\";s:10:\"mcubecalls\";s:1:\"1\";s:7:\"mtdebug\";s:1:\"1\";s:8:\"deviceid\";s:36:\"ffffffff-a4d5-960f-ffff-ffff82ba1723\";s:8:\"language\";s:1:\"1\";s:6:\"status\";s:1:\"1\";s:9:\"appstatus\";s:1:\"1\";s:3:\"pid\";s:1:\"0\";s:3:\"act\";s:1:\"0\";s:16:\"registrationdate\";s:19:\"2014-09-08 16:04:19\";s:10:\"dnd_status\";s:1:\"0\";s:9:\"logged_in\";s:1:\"1\";s:6:\"roleid\";s:1:\"1\";s:4:\"cbid\";s:1:\"1\";s:13:\"flash:new:msg\";s:26:\"Group Updated Successfully\";s:14:\"flash:old:msgt\";s:7:\"success\";s:13:\"flash:old:msg\";s:26:\"Group Updated Successfully\";}' WHERE `session_id` = '847e9ee4e1543e295a6ddd381996c5e3'
[2017-06-19 12:23:34]	SQL :	UPDATE `call_sessions` SET `last_activity` = '1497853678', `user_data` = 'a:22:{s:3:\"uid\";s:1:\"1\";s:3:\"bid\";s:1:\"1\";s:8:\"username\";s:20:\"ashwini.naidu@vmc.in\";s:3:\"eid\";s:1:\"1\";s:3:\"app\";s:1:\"1\";s:7:\"authkey\";s:17:\"1.1.d886b8e8a0615\";s:9:\"recording\";s:1:\"1\";s:10:\"mcubecalls\";s:1:\"1\";s:7:\"mtdebug\";s:1:\"1\";s:8:\"deviceid\";s:36:\"ffffffff-a4d5-960f-ffff-ffff82ba1723\";s:8:\"language\";s:1:\"1\";s:6:\"status\";s:1:\"1\";s:9:\"appstatus\";s:1:\"1\";s:3:\"pid\";s:1:\"0\";s:3:\"act\";s:1:\"0\";s:16:\"registrationdate\";s:19:\"2014-09-08 16:04:19\";s:10:\"dnd_status\";s:1:\"0\";s:9:\"logged_in\";s:1:\"1\";s:6:\"roleid\";s:1:\"1\";s:4:\"cbid\";s:1:\"1\";s:14:\"flash:old:msgt\";s:7:\"success\";s:13:\"flash:old:msg\";s:26:\"Group Updated Successfully\";}' WHERE `session_id` = '847e9ee4e1543e295a6ddd381996c5e3'
[2017-06-19 12:23:34]	DEBUG :	Session routines successfully run
[2017-06-19 12:23:34]	DEBUG :	Table Class Initialized
[2017-06-19 12:23:34]	DEBUG :	Pagination Class Initialized
[2017-06-19 12:23:34]	DEBUG :	Config file loaded: config/paypallib_config.php
[2017-06-19 12:23:34]	DEBUG :	Form Validation Class Initialized
[2017-06-19 12:23:34]	DEBUG :	Email Class Initialized
[2017-06-19 12:23:34]	DEBUG :	Language file loaded: language/english/calendar_lang.php
[2017-06-19 12:23:34]	DEBUG :	Calendar Class Initialized
[2017-06-19 12:23:34]	DEBUG :	Controller Class Initialized
[2017-06-19 12:23:34]	DEBUG :	Model Class Initialized
[2017-06-19 12:23:34]	DEBUG :	Model Class Initialized
[2017-06-19 12:23:34]	DEBUG :	Model Class Initialized
[2017-06-19 12:23:34]	DEBUG :	Model Class Initialized
[2017-06-19 12:23:34]	DEBUG :	Model Class Initialized
[2017-06-19 12:23:34]	DEBUG :	Model Class Initialized
[2017-06-19 12:23:34]	DEBUG :	Model Class Initialized
[2017-06-19 12:23:34]	DEBUG :	Model Class Initialized
[2017-06-19 12:23:34]	DEBUG :	Model Class Initialized
[2017-06-19 12:23:34]	DEBUG :	Model Class Initialized
[2017-06-19 12:23:34]	DEBUG :	Model Class Initialized
[2017-06-19 12:23:34]	DEBUG :	Model Class Initialized
[2017-06-19 12:23:34]	DEBUG :	Plugin loaded: to_pdf_pi
[2017-06-19 12:23:34]	SQL :	SELECT u.uid FROM user u
				LEFT JOIN 1_employee e on (e.bid=u.bid AND e.eid=u.eid)
				WHERE e.status='1' AND e.login='1' AND u.status='1' 
				AND u.bid='1' AND u.eid='1'
[2017-06-19 12:23:34]	SQL :	SELECT *
FROM (`language`)
WHERE `langid` = '1'
[2017-06-19 12:23:34]	DEBUG :	Database Driver Class Initialized
[2017-06-19 12:23:34]	SQL :	SELECT roleid FROM 1_employee
							WHERE eid='1'
							AND bid='1'
[2017-06-19 12:23:34]	SQL :	UPDATE `call_sessions` SET `last_activity` = '1497853678', `user_data` = 'a:22:{s:3:\"uid\";s:1:\"1\";s:3:\"bid\";s:1:\"1\";s:8:\"username\";s:20:\"ashwini.naidu@vmc.in\";s:3:\"eid\";s:1:\"1\";s:3:\"app\";s:1:\"1\";s:7:\"authkey\";s:17:\"1.1.d886b8e8a0615\";s:9:\"recording\";s:1:\"1\";s:10:\"mcubecalls\";s:1:\"1\";s:7:\"mtdebug\";s:1:\"1\";s:8:\"deviceid\";s:36:\"ffffffff-a4d5-960f-ffff-ffff82ba1723\";s:8:\"language\";s:1:\"1\";s:6:\"status\";s:1:\"1\";s:9:\"appstatus\";s:1:\"1\";s:3:\"pid\";s:1:\"0\";s:3:\"act\";s:1:\"0\";s:16:\"registrationdate\";s:19:\"2014-09-08 16:04:19\";s:10:\"dnd_status\";s:1:\"0\";s:9:\"logged_in\";s:1:\"1\";s:6:\"roleid\";s:1:\"1\";s:4:\"cbid\";s:1:\"1\";s:14:\"flash:old:msgt\";s:7:\"success\";s:13:\"flash:old:msg\";s:26:\"Group Updated Successfully\";}' WHERE `session_id` = '847e9ee4e1543e295a6ddd381996c5e3'
[2017-06-19 12:23:34]	DEBUG :	Database Driver Class Initialized
[2017-06-19 12:23:34]	SQL :	SELECT * FROM 1_user_role
							WHERE roleid='1'
							AND bid='1'
[2017-06-19 12:23:34]	SQL :	SELECT m.modid,m.modname,m.moddesc,
							COALESCE(o.opt_add,0) as opt_add,
							COALESCE(o.opt_view,0) as opt_view,
							COALESCE(o.opt_download,0) as opt_download,
							COALESCE(opt_delete,0) as opt_delete 
							FROM module m
							LEFT JOIN (SELECT * FROM 1_role_mod_opt
							WHERE roleid='1' 
							AND bid='1') as o
							ON m.modid=o.modid where m.status=1
[2017-06-19 12:23:34]	SQL :	SELECT a.*,f.fieldname FROM 1_role_access a
								LEFT JOIN systemfields f on a.fieldid=f.fieldid
								WHERE a.roleid='1'
								AND a.bid='1'
								AND a.fieldtype='s'
[2017-06-19 12:23:34]	SQL :	SELECT * FROM 1_role_access
								WHERE roleid='1'
								AND bid='1'
							AND fieldtype='c'
[2017-06-19 12:23:34]	SQL :	SELECT a.selfdisable FROM 1_employee a WHERE a.eid='1'
[2017-06-19 12:23:34]	DEBUG :	Language file loaded: language/english/unit_test_lang.php
[2017-06-19 12:23:34]	DEBUG :	Language file loaded: language/english/db_lang.php
[2017-06-19 12:23:34]	DEBUG :	Language file loaded: language/english/ftp_lang.php
[2017-06-19 12:23:34]	DEBUG :	Language file loaded: language/english/menu_lang.php
[2017-06-19 12:23:34]	DEBUG :	Language file loaded: language/english/db_tables_lang.php
[2017-06-19 12:23:34]	DEBUG :	Language file loaded: language/english/form_level_lang.php
[2017-06-19 12:23:34]	DEBUG :	Language file loaded: language/english/form_validation_lang.php
[2017-06-19 12:23:34]	DEBUG :	Language file loaded: language/english/email_lang.php
[2017-06-19 12:23:34]	DEBUG :	Language file loaded: language/english/number_lang.php
[2017-06-19 12:23:34]	DEBUG :	Language file loaded: language/english/layout_lang.php
[2017-06-19 12:23:34]	DEBUG :	Language file loaded: language/english/validation_lang.php
[2017-06-19 12:23:34]	DEBUG :	Language file loaded: language/english/scaffolding_lang.php
[2017-06-19 12:23:34]	DEBUG :	Language file loaded: language/english/date_lang.php
[2017-06-19 12:23:34]	DEBUG :	Language file loaded: language/english/profiler_lang.php
[2017-06-19 12:23:34]	DEBUG :	Language file loaded: language/english/imglib_lang.php
[2017-06-19 12:23:34]	DEBUG :	Language file loaded: language/english/error_msg_lang.php
[2017-06-19 12:23:34]	DEBUG :	Language file loaded: language/english/upload_lang.php
[2017-06-19 12:23:34]	SQL :	SELECT id,category,subcategory,type,status FROM feedback WHERE status=1 
[2017-06-19 12:23:34]	SQL :	SELECT feature_id FROM business_feature WHERE bid='1'
[2017-06-19 12:23:34]	SQL :	SELECT feature_id FROM business_feature WHERE bid='1'
[2017-06-19 12:23:34]	SQL :	SELECT feature_id FROM business_feature WHERE bid='1'
[2017-06-19 12:23:34]	SQL :	SELECT id,type FROM 1_leads_status
[2017-06-19 12:23:34]	SQL :	SELECT design FROM business_lead_use WHERE bid='1' LIMIT 0,1
[2017-06-19 12:23:34]	SQL :	SELECT sid,status FROM 1_support_status
[2017-06-19 12:23:34]	SQL :	SELECT feature_id FROM `business_feature` where bid=1
[2017-06-19 12:23:34]	SQL :	SELECT action_align FROM account_settings WHERE bid='1'
[2017-06-19 12:23:34]	SQL :	SELECT dialstatus FROM 1_callhistory WHERE dialstatus = 'CONNECTING'
[2017-06-19 12:23:34]	SQL :	SELECT FOUND_ROWS() as cnt
[2017-06-19 12:23:34]	SQL :	SELECT del_notify FROM account_settings WHERE bid='1'
[2017-06-19 12:23:34]	DEBUG :	Model Class Initialized
[2017-06-19 12:23:34]	DEBUG :	Database Driver Class Initialized
[2017-06-19 12:23:34]	SQL :	SELECT * FROM 1_user_role
							WHERE roleid='1'
							AND bid='1'
[2017-06-19 12:23:34]	SQL :	SELECT m.modid,m.modname,m.moddesc,
							COALESCE(o.opt_add,0) as opt_add,
							COALESCE(o.opt_view,0) as opt_view,
							COALESCE(o.opt_download,0) as opt_download,
							COALESCE(opt_delete,0) as opt_delete 
							FROM module m
							LEFT JOIN (SELECT * FROM 1_role_mod_opt
							WHERE roleid='1' 
							AND bid='1') as o
							ON m.modid=o.modid where m.status=1
[2017-06-19 12:23:34]	SQL :	SELECT a.*,f.fieldname FROM 1_role_access a
								LEFT JOIN systemfields f on a.fieldid=f.fieldid
								WHERE a.roleid='1'
								AND a.bid='1'
								AND a.fieldtype='s'
[2017-06-19 12:23:34]	SQL :	SELECT * FROM 1_role_access
								WHERE roleid='1'
								AND bid='1'
							AND fieldtype='c'
[2017-06-19 12:23:34]	SQL :	SELECT feature_id FROM `business_feature` where bid=1
[2017-06-19 12:23:34]	SQL :	SELECT * FROM business where pid='1'
[2017-06-19 12:23:34]	SQL :	UPDATE `call_sessions` SET `last_activity` = '1497853678', `user_data` = 'a:22:{s:3:\"uid\";s:1:\"1\";s:3:\"bid\";s:1:\"1\";s:8:\"username\";s:20:\"ashwini.naidu@vmc.in\";s:3:\"eid\";s:1:\"1\";s:3:\"app\";s:1:\"1\";s:7:\"authkey\";s:17:\"1.1.d886b8e8a0615\";s:9:\"recording\";s:1:\"1\";s:10:\"mcubecalls\";s:1:\"1\";s:7:\"mtdebug\";s:1:\"1\";s:8:\"deviceid\";s:36:\"ffffffff-a4d5-960f-ffff-ffff82ba1723\";s:8:\"language\";s:1:\"1\";s:6:\"status\";s:1:\"1\";s:9:\"appstatus\";s:1:\"1\";s:3:\"pid\";s:1:\"0\";s:3:\"act\";s:1:\"0\";s:16:\"registrationdate\";s:19:\"2014-09-08 16:04:19\";s:10:\"dnd_status\";s:1:\"0\";s:9:\"logged_in\";s:1:\"1\";s:6:\"roleid\";s:1:\"1\";s:4:\"cbid\";s:1:\"1\";s:14:\"flash:old:msgt\";s:7:\"success\";s:13:\"flash:old:msg\";s:26:\"Group Updated Successfully\";}' WHERE `session_id` = '847e9ee4e1543e295a6ddd381996c5e3'
[2017-06-19 12:23:34]	DEBUG :	Database Driver Class Initialized
[2017-06-19 12:23:34]	SQL :	SELECT * FROM 1_user_role
							WHERE roleid='1'
							AND bid='1'
[2017-06-19 12:23:34]	SQL :	SELECT m.modid,m.modname,m.moddesc,
							COALESCE(o.opt_add,0) as opt_add,
							COALESCE(o.opt_view,0) as opt_view,
							COALESCE(o.opt_download,0) as opt_download,
							COALESCE(opt_delete,0) as opt_delete 
							FROM module m
							LEFT JOIN (SELECT * FROM 1_role_mod_opt
							WHERE roleid='1' 
							AND bid='1') as o
							ON m.modid=o.modid where m.status=1
[2017-06-19 12:23:34]	SQL :	SELECT a.*,f.fieldname FROM 1_role_access a
								LEFT JOIN systemfields f on a.fieldid=f.fieldid
								WHERE a.roleid='1'
								AND a.bid='1'
								AND a.fieldtype='s'
[2017-06-19 12:23:35]	SQL :	SELECT * FROM 1_role_access
								WHERE roleid='1'
								AND bid='1'
							AND fieldtype='c'
[2017-06-19 12:23:35]	SQL :	SELECT SQL_CALC_FOUND_ROWS g.*
				  FROM 1_groups g 
				  LEFT JOIN group_rules r on g.rules=r.rulesid 
				  LEFT JOIN 1_employee e on g.eid=e.eid
				  LEFT JOIN prinumbers p on (g.prinumber=p.number AND p.bid='1')
				  WHERE g.bid='1' 
				  and g.status!=0  limit 0,20
[2017-06-19 12:23:35]	SQL :	SELECT FOUND_ROWS() as cnt
[2017-06-19 12:23:35]	DEBUG :	Database Driver Class Initialized
[2017-06-19 12:23:35]	SQL :	SELECT * FROM ( 
				SELECT 's' as type,f.addon,f.fieldid,f.modid,
				f.fieldname,'' as fieldtype,'' as fieldKey,'' as options,
				'' as defaultvalue,f.is_required as is_required,f.is_hidden,COALESCE(l.display_order,0) as display_order,
				l.customlabel,COALESCE(l.show,1) as `show`,COALESCE(l.listing,1) as `listing`
				FROM systemfields f
				LEFT JOIN (
					SELECT * FROM 1_custom_label
					WHERE fieldtype='s'
				) as l
				on (f.fieldid=l.fieldid AND l.modid=f.modid)
				WHERE f.modid='3'  AND f.is_hidden=0   AND f.addon=0 
				UNION
				SELECT 'c' as type,'0',f.fieldid,f.modid,
				f.fieldname,f.fieldtype,f.field_key as fieldKey,f.options,
				f.defaultvalue,f.is_required as is_required,'',COALESCE(l.display_order,0) as display_order,
				l.customlabel,COALESCE(l.show,1) as `show`,COALESCE(l.listing,1) as `listing`
				FROM 1_customfields f
				LEFT JOIN (
					SELECT * FROM 1_custom_label
					WHERE fieldtype='c'
				) as l
				on (f.fieldid=l.fieldid AND l.modid=f.modid)
				WHERE f.modid='3') as t ORDER BY display_order ASC
[2017-06-19 12:23:35]	DEBUG :	Database Driver Class Initialized
[2017-06-19 12:23:35]	SQL :	SELECT g.*,e.empname as eid,sg.groupname as supportgroup,
					  if(g.connectowner=1,'YES','NO') as connectwner,
					  g.eid as epid,if(g.record=1,'YES','NO') as records,
					  if(g.replytocustomer=1,'YES','NO') as replycus,
					  if(g.replytoexecutive=1,'YES','NO') as replyexe,
					  if(g.pincode=1,'YES','NO') as pcode,
					  p.number as prinumber,
					  p.landingnumber as addnumber,(if(g.primary_rule=0,'All',cr.regionname)) as regionname,
					  r.rulename as rules,g.rules as rule
					  FROM 1_groups g 
					  LEFT JOIN group_rules r on g.rules=r.rulesid 
					  LEFT JOIN 1_employee e on g.eid=e.eid 
					  LEFT JOIN 1_support_groups sg on g.supportgrp=sg.gid 
					  LEFT JOIN prinumber p on g.prinumber=p.number
					  LEFT JOIN 1_custom_region cr on g.primary_rule=cr.regionid
					  WHERE g.bid='1' 
					  AND g.gid='14'
[2017-06-19 12:23:35]	SQL :	SELECT * FROM 1_customfieldsvalue 
				WHERE bid='1' 
				AND modid='3'
				AND dataid='14'
[2017-06-19 12:23:35]	SQL :	SELECT COALESCE(COUNT(callid), 0) AS cnt
							FROM 1_callhistory h 
							WHERE (h.`starttime` >= DATE_SUB(CURDATE(), INTERVAL 6 DAY)) AND h.gid = 14 GROUP BY DAY(h.starttime)
[2017-06-19 12:23:35]	DEBUG :	Database Driver Class Initialized
[2017-06-19 12:23:35]	SQL :	SELECT g.*,e.empname as eid,sg.groupname as supportgroup,
					  if(g.connectowner=1,'YES','NO') as connectwner,
					  g.eid as epid,if(g.record=1,'YES','NO') as records,
					  if(g.replytocustomer=1,'YES','NO') as replycus,
					  if(g.replytoexecutive=1,'YES','NO') as replyexe,
					  if(g.pincode=1,'YES','NO') as pcode,
					  p.number as prinumber,
					  p.landingnumber as addnumber,(if(g.primary_rule=0,'All',cr.regionname)) as regionname,
					  r.rulename as rules,g.rules as rule
					  FROM 1_groups g 
					  LEFT JOIN group_rules r on g.rules=r.rulesid 
					  LEFT JOIN 1_employee e on g.eid=e.eid 
					  LEFT JOIN 1_support_groups sg on g.supportgrp=sg.gid 
					  LEFT JOIN prinumber p on g.prinumber=p.number
					  LEFT JOIN 1_custom_region cr on g.primary_rule=cr.regionid
					  WHERE g.bid='1' 
					  AND g.gid='15'
[2017-06-19 12:23:35]	SQL :	SELECT * FROM 1_customfieldsvalue 
				WHERE bid='1' 
				AND modid='3'
				AND dataid='15'
[2017-06-19 12:23:35]	SQL :	SELECT COALESCE(COUNT(callid), 0) AS cnt
							FROM 1_callhistory h 
							WHERE (h.`starttime` >= DATE_SUB(CURDATE(), INTERVAL 6 DAY)) AND h.gid = 15 GROUP BY DAY(h.starttime)
[2017-06-19 12:23:35]	SQL :	SELECT GROUP_CONCAT(empname SEPARATOR ',') as empname FROM 1_employee WHERE eid IN(58 )
[2017-06-19 12:23:35]	DEBUG :	Database Driver Class Initialized
[2017-06-19 12:23:35]	SQL :	SELECT g.*,e.empname as eid,sg.groupname as supportgroup,
					  if(g.connectowner=1,'YES','NO') as connectwner,
					  g.eid as epid,if(g.record=1,'YES','NO') as records,
					  if(g.replytocustomer=1,'YES','NO') as replycus,
					  if(g.replytoexecutive=1,'YES','NO') as replyexe,
					  if(g.pincode=1,'YES','NO') as pcode,
					  p.number as prinumber,
					  p.landingnumber as addnumber,(if(g.primary_rule=0,'All',cr.regionname)) as regionname,
					  r.rulename as rules,g.rules as rule
					  FROM 1_groups g 
					  LEFT JOIN group_rules r on g.rules=r.rulesid 
					  LEFT JOIN 1_employee e on g.eid=e.eid 
					  LEFT JOIN 1_support_groups sg on g.supportgrp=sg.gid 
					  LEFT JOIN prinumber p on g.prinumber=p.number
					  LEFT JOIN 1_custom_region cr on g.primary_rule=cr.regionid
					  WHERE g.bid='1' 
					  AND g.gid='16'
[2017-06-19 12:23:35]	SQL :	SELECT * FROM 1_customfieldsvalue 
				WHERE bid='1' 
				AND modid='3'
				AND dataid='16'
[2017-06-19 12:23:35]	SQL :	SELECT COALESCE(COUNT(callid), 0) AS cnt
							FROM 1_callhistory h 
							WHERE (h.`starttime` >= DATE_SUB(CURDATE(), INTERVAL 6 DAY)) AND h.gid = 16 GROUP BY DAY(h.starttime)
[2017-06-19 12:23:35]	DEBUG :	Database Driver Class Initialized
[2017-06-19 12:23:35]	SQL :	SELECT g.*,e.empname as eid,sg.groupname as supportgroup,
					  if(g.connectowner=1,'YES','NO') as connectwner,
					  g.eid as epid,if(g.record=1,'YES','NO') as records,
					  if(g.replytocustomer=1,'YES','NO') as replycus,
					  if(g.replytoexecutive=1,'YES','NO') as replyexe,
					  if(g.pincode=1,'YES','NO') as pcode,
					  p.number as prinumber,
					  p.landingnumber as addnumber,(if(g.primary_rule=0,'All',cr.regionname)) as regionname,
					  r.rulename as rules,g.rules as rule
					  FROM 1_groups g 
					  LEFT JOIN group_rules r on g.rules=r.rulesid 
					  LEFT JOIN 1_employee e on g.eid=e.eid 
					  LEFT JOIN 1_support_groups sg on g.supportgrp=sg.gid 
					  LEFT JOIN prinumber p on g.prinumber=p.number
					  LEFT JOIN 1_custom_region cr on g.primary_rule=cr.regionid
					  WHERE g.bid='1' 
					  AND g.gid='17'
[2017-06-19 12:23:35]	SQL :	SELECT * FROM 1_customfieldsvalue 
				WHERE bid='1' 
				AND modid='3'
				AND dataid='17'
[2017-06-19 12:23:35]	SQL :	SELECT COALESCE(COUNT(callid), 0) AS cnt
							FROM 1_callhistory h 
							WHERE (h.`starttime` >= DATE_SUB(CURDATE(), INTERVAL 6 DAY)) AND h.gid = 17 GROUP BY DAY(h.starttime)
[2017-06-19 12:23:35]	DEBUG :	Database Driver Class Initialized
[2017-06-19 12:23:35]	SQL :	SELECT * FROM ( 
				SELECT 's' as type,f.addon,f.fieldid,f.modid,
				f.fieldname,'' as fieldtype,'' as fieldKey,'' as options,
				'' as defaultvalue,f.is_required as is_required,f.is_hidden,COALESCE(l.display_order,0) as display_order,
				l.customlabel,COALESCE(l.show,1) as `show`,COALESCE(l.listing,1) as `listing`
				FROM systemfields f
				LEFT JOIN (
					SELECT * FROM 1_custom_label
					WHERE fieldtype='s'
				) as l
				on (f.fieldid=l.fieldid AND l.modid=f.modid)
				WHERE f.modid='3'  AND f.is_hidden=0   AND f.addon=0 
				UNION
				SELECT 'c' as type,'0',f.fieldid,f.modid,
				f.fieldname,f.fieldtype,f.field_key as fieldKey,f.options,
				f.defaultvalue,f.is_required as is_required,'',COALESCE(l.display_order,0) as display_order,
				l.customlabel,COALESCE(l.show,1) as `show`,COALESCE(l.listing,1) as `listing`
				FROM 1_customfields f
				LEFT JOIN (
					SELECT * FROM 1_custom_label
					WHERE fieldtype='c'
				) as l
				on (f.fieldid=l.fieldid AND l.modid=f.modid)
				WHERE f.modid='3') as t ORDER BY display_order ASC
[2017-06-19 12:23:35]	SQL :	select eid,empname from 1_employee where status=1 ORDER BY empname
[2017-06-19 12:23:35]	DEBUG :	Database Driver Class Initialized
[2017-06-19 12:23:35]	SQL :	SELECT * FROM 1_user_role
							WHERE roleid='1'
							AND bid='1'
[2017-06-19 12:23:35]	SQL :	SELECT m.modid,m.modname,m.moddesc,
							COALESCE(o.opt_add,0) as opt_add,
							COALESCE(o.opt_view,0) as opt_view,
							COALESCE(o.opt_download,0) as opt_download,
							COALESCE(opt_delete,0) as opt_delete 
							FROM module m
							LEFT JOIN (SELECT * FROM 1_role_mod_opt
							WHERE roleid='1' 
							AND bid='1') as o
							ON m.modid=o.modid where m.status=1
[2017-06-19 12:23:35]	SQL :	SELECT a.*,f.fieldname FROM 1_role_access a
								LEFT JOIN systemfields f on a.fieldid=f.fieldid
								WHERE a.roleid='1'
								AND a.bid='1'
								AND a.fieldtype='s'
[2017-06-19 12:23:35]	SQL :	SELECT * FROM 1_role_access
								WHERE roleid='1'
								AND bid='1'
							AND fieldtype='c'
[2017-06-19 12:23:35]	SQL :	SELECT * FROM 1_employee WHERE status='1' ORDER BY empname
[2017-06-19 12:23:35]	DEBUG :	File loaded: /var/www/html/mcnew/system/application/views/mainheader.php
[2017-06-19 12:23:35]	DEBUG :	Database Driver Class Initialized
[2017-06-19 12:23:35]	SQL :	select a.*,e.empname as reporttoname,b.rolename  as role,if(u.recording=1,'Yes','No') as recording
					  from 1_employee a
					  LEFT JOIN  1_employee e on a.reportto=e.eid
					  LEFT JOIN  user u on a.eid=u.eid
					  ,1_user_role b 
					  where a.roleid=b.roleid AND a.eid='1'
[2017-06-19 12:23:35]	SQL :	SELECT * FROM 1_customfieldsvalue 
				WHERE bid='1' 
				AND modid='2'
				AND dataid='1'
[2017-06-19 12:23:35]	DEBUG :	File loaded: /var/www/html/mcnew/system/application/views/leftsidebar.php
[2017-06-19 12:23:35]	DEBUG :	File loaded: /var/www/html/mcnew/system/application/views/list_view.php
[2017-06-19 12:23:35]	DEBUG :	File loaded: /var/www/html/mcnew/system/application/views/footer.php
[2017-06-19 12:23:35]	DEBUG :	Final output sent to browser
[2017-06-19 12:23:35]	DEBUG :	Total execution time: 0.2854
[2017-06-19 12:23:37]	DEBUG :	Config Class Initialized
[2017-06-19 12:23:37]	DEBUG :	Hooks Class Initialized
[2017-06-19 12:23:37]	DEBUG :	URI Class Initialized
[2017-06-19 12:23:37]	DEBUG :	Router Class Initialized
[2017-06-19 12:23:37]	DEBUG :	Output Class Initialized
[2017-06-19 12:23:37]	DEBUG :	Input Class Initialized
[2017-06-19 12:23:37]	DEBUG :	XSS Filtering completed
[2017-06-19 12:23:37]	DEBUG :	XSS Filtering completed
[2017-06-19 12:23:37]	DEBUG :	XSS Filtering completed
[2017-06-19 12:23:37]	DEBUG :	XSS Filtering completed
[2017-06-19 12:23:37]	DEBUG :	Global POST and COOKIE data sanitized
[2017-06-19 12:23:37]	DEBUG :	Language Class Initialized
[2017-06-19 12:23:37]	DEBUG :	Loader Class Initialized
[2017-06-19 12:23:37]	DEBUG :	Helper loaded: url_helper
[2017-06-19 12:23:37]	DEBUG :	Helper loaded: form_helper
[2017-06-19 12:23:37]	DEBUG :	Helper loaded: html_helper
[2017-06-19 12:23:37]	DEBUG :	Helper loaded: email_helper
[2017-06-19 12:23:37]	DEBUG :	Helper loaded: ckeditor_helper
[2017-06-19 12:23:37]	DEBUG :	Helper loaded: mcube_helper
[2017-06-19 12:23:37]	DEBUG :	Database Driver Class Initialized
[2017-06-19 12:23:37]	ERROR :	Severity: 8192  --> mysql_pconnect(): The mysql extension is deprecated and will be removed in the future: use mysqli or PDO instead /var/www/html/mcnew/system/database/drivers/mysql/mysql_driver.php 88
[2017-06-19 12:23:37]	DEBUG :	Session Class Initialized
[2017-06-19 12:23:37]	DEBUG :	Helper loaded: string_helper
[2017-06-19 12:23:37]	DEBUG :	Encrypt Class Initialized
[2017-06-19 12:23:37]	SQL :	SELECT *
FROM (`call_sessions`)
WHERE `session_id` = '847e9ee4e1543e295a6ddd381996c5e3'
AND `user_agent` = 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36'
[2017-06-19 12:23:37]	SQL :	UPDATE `call_sessions` SET `last_activity` = '1497853678', `user_data` = 'a:21:{s:3:\"uid\";s:1:\"1\";s:3:\"bid\";s:1:\"1\";s:8:\"username\";s:20:\"ashwini.naidu@vmc.in\";s:3:\"eid\";s:1:\"1\";s:3:\"app\";s:1:\"1\";s:7:\"authkey\";s:17:\"1.1.d886b8e8a0615\";s:9:\"recording\";s:1:\"1\";s:10:\"mcubecalls\";s:1:\"1\";s:7:\"mtdebug\";s:1:\"1\";s:8:\"deviceid\";s:36:\"ffffffff-a4d5-960f-ffff-ffff82ba1723\";s:8:\"language\";s:1:\"1\";s:6:\"status\";s:1:\"1\";s:9:\"appstatus\";s:1:\"1\";s:3:\"pid\";s:1:\"0\";s:3:\"act\";s:1:\"0\";s:16:\"registrationdate\";s:19:\"2014-09-08 16:04:19\";s:10:\"dnd_status\";s:1:\"0\";s:9:\"logged_in\";s:1:\"1\";s:6:\"roleid\";s:1:\"1\";s:4:\"cbid\";s:1:\"1\";s:13:\"flash:old:msg\";s:26:\"Group Updated Successfully\";}' WHERE `session_id` = '847e9ee4e1543e295a6ddd381996c5e3'
[2017-06-19 12:23:37]	SQL :	UPDATE `call_sessions` SET `last_activity` = '1497853678', `user_data` = 'a:20:{s:3:\"uid\";s:1:\"1\";s:3:\"bid\";s:1:\"1\";s:8:\"username\";s:20:\"ashwini.naidu@vmc.in\";s:3:\"eid\";s:1:\"1\";s:3:\"app\";s:1:\"1\";s:7:\"authkey\";s:17:\"1.1.d886b8e8a0615\";s:9:\"recording\";s:1:\"1\";s:10:\"mcubecalls\";s:1:\"1\";s:7:\"mtdebug\";s:1:\"1\";s:8:\"deviceid\";s:36:\"ffffffff-a4d5-960f-ffff-ffff82ba1723\";s:8:\"language\";s:1:\"1\";s:6:\"status\";s:1:\"1\";s:9:\"appstatus\";s:1:\"1\";s:3:\"pid\";s:1:\"0\";s:3:\"act\";s:1:\"0\";s:16:\"registrationdate\";s:19:\"2014-09-08 16:04:19\";s:10:\"dnd_status\";s:1:\"0\";s:9:\"logged_in\";s:1:\"1\";s:6:\"roleid\";s:1:\"1\";s:4:\"cbid\";s:1:\"1\";}' WHERE `session_id` = '847e9ee4e1543e295a6ddd381996c5e3'
[2017-06-19 12:23:37]	DEBUG :	Session routines successfully run
[2017-06-19 12:23:37]	DEBUG :	Table Class Initialized
[2017-06-19 12:23:37]	DEBUG :	Pagination Class Initialized
[2017-06-19 12:23:37]	DEBUG :	Config file loaded: config/paypallib_config.php
[2017-06-19 12:23:37]	DEBUG :	Form Validation Class Initialized
[2017-06-19 12:23:37]	DEBUG :	Email Class Initialized
[2017-06-19 12:23:37]	DEBUG :	Language file loaded: language/english/calendar_lang.php
[2017-06-19 12:23:37]	DEBUG :	Calendar Class Initialized
[2017-06-19 12:23:37]	DEBUG :	Controller Class Initialized
[2017-06-19 12:23:37]	DEBUG :	Model Class Initialized
[2017-06-19 12:23:37]	DEBUG :	Model Class Initialized
[2017-06-19 12:23:37]	DEBUG :	Model Class Initialized
[2017-06-19 12:23:37]	DEBUG :	Model Class Initialized
[2017-06-19 12:23:37]	DEBUG :	Model Class Initialized
[2017-06-19 12:23:37]	DEBUG :	Model Class Initialized
[2017-06-19 12:23:37]	DEBUG :	Model Class Initialized
[2017-06-19 12:23:37]	DEBUG :	Model Class Initialized
[2017-06-19 12:23:37]	DEBUG :	Model Class Initialized
[2017-06-19 12:23:37]	DEBUG :	Model Class Initialized
[2017-06-19 12:23:37]	DEBUG :	Model Class Initialized
[2017-06-19 12:23:37]	DEBUG :	Model Class Initialized
[2017-06-19 12:23:37]	DEBUG :	Plugin loaded: to_pdf_pi
[2017-06-19 12:23:37]	SQL :	SELECT u.uid FROM user u
				LEFT JOIN 1_employee e on (e.bid=u.bid AND e.eid=u.eid)
				WHERE e.status='1' AND e.login='1' AND u.status='1' 
				AND u.bid='1' AND u.eid='1'
[2017-06-19 12:23:37]	SQL :	SELECT *
FROM (`language`)
WHERE `langid` = '1'
[2017-06-19 12:23:37]	DEBUG :	Database Driver Class Initialized
[2017-06-19 12:23:37]	SQL :	SELECT roleid FROM 1_employee
							WHERE eid='1'
							AND bid='1'
[2017-06-19 12:23:37]	SQL :	UPDATE `call_sessions` SET `last_activity` = '1497853678', `user_data` = 'a:20:{s:3:\"uid\";s:1:\"1\";s:3:\"bid\";s:1:\"1\";s:8:\"username\";s:20:\"ashwini.naidu@vmc.in\";s:3:\"eid\";s:1:\"1\";s:3:\"app\";s:1:\"1\";s:7:\"authkey\";s:17:\"1.1.d886b8e8a0615\";s:9:\"recording\";s:1:\"1\";s:10:\"mcubecalls\";s:1:\"1\";s:7:\"mtdebug\";s:1:\"1\";s:8:\"deviceid\";s:36:\"ffffffff-a4d5-960f-ffff-ffff82ba1723\";s:8:\"language\";s:1:\"1\";s:6:\"status\";s:1:\"1\";s:9:\"appstatus\";s:1:\"1\";s:3:\"pid\";s:1:\"0\";s:3:\"act\";s:1:\"0\";s:16:\"registrationdate\";s:19:\"2014-09-08 16:04:19\";s:10:\"dnd_status\";s:1:\"0\";s:9:\"logged_in\";s:1:\"1\";s:6:\"roleid\";s:1:\"1\";s:4:\"cbid\";s:1:\"1\";}' WHERE `session_id` = '847e9ee4e1543e295a6ddd381996c5e3'
[2017-06-19 12:23:37]	DEBUG :	Database Driver Class Initialized
[2017-06-19 12:23:37]	SQL :	SELECT * FROM 1_user_role
							WHERE roleid='1'
							AND bid='1'
[2017-06-19 12:23:37]	SQL :	SELECT m.modid,m.modname,m.moddesc,
							COALESCE(o.opt_add,0) as opt_add,
							COALESCE(o.opt_view,0) as opt_view,
							COALESCE(o.opt_download,0) as opt_download,
							COALESCE(opt_delete,0) as opt_delete 
							FROM module m
							LEFT JOIN (SELECT * FROM 1_role_mod_opt
							WHERE roleid='1' 
							AND bid='1') as o
							ON m.modid=o.modid where m.status=1
[2017-06-19 12:23:37]	SQL :	SELECT a.*,f.fieldname FROM 1_role_access a
								LEFT JOIN systemfields f on a.fieldid=f.fieldid
								WHERE a.roleid='1'
								AND a.bid='1'
								AND a.fieldtype='s'
[2017-06-19 12:23:37]	SQL :	SELECT * FROM 1_role_access
								WHERE roleid='1'
								AND bid='1'
							AND fieldtype='c'
[2017-06-19 12:23:37]	SQL :	SELECT a.selfdisable FROM 1_employee a WHERE a.eid='1'
[2017-06-19 12:23:37]	DEBUG :	Language file loaded: language/english/unit_test_lang.php
[2017-06-19 12:23:37]	DEBUG :	Language file loaded: language/english/db_lang.php
[2017-06-19 12:23:37]	DEBUG :	Language file loaded: language/english/ftp_lang.php
[2017-06-19 12:23:37]	DEBUG :	Language file loaded: language/english/menu_lang.php
[2017-06-19 12:23:37]	DEBUG :	Language file loaded: language/english/db_tables_lang.php
[2017-06-19 12:23:37]	DEBUG :	Language file loaded: language/english/form_level_lang.php
[2017-06-19 12:23:37]	DEBUG :	Language file loaded: language/english/form_validation_lang.php
[2017-06-19 12:23:37]	DEBUG :	Language file loaded: language/english/email_lang.php
[2017-06-19 12:23:37]	DEBUG :	Language file loaded: language/english/number_lang.php
[2017-06-19 12:23:37]	DEBUG :	Language file loaded: language/english/layout_lang.php
[2017-06-19 12:23:37]	DEBUG :	Language file loaded: language/english/validation_lang.php
[2017-06-19 12:23:37]	DEBUG :	Language file loaded: language/english/scaffolding_lang.php
[2017-06-19 12:23:37]	DEBUG :	Language file loaded: language/english/date_lang.php
[2017-06-19 12:23:37]	DEBUG :	Language file loaded: language/english/profiler_lang.php
[2017-06-19 12:23:37]	DEBUG :	Language file loaded: language/english/imglib_lang.php
[2017-06-19 12:23:37]	DEBUG :	Language file loaded: language/english/error_msg_lang.php
[2017-06-19 12:23:37]	DEBUG :	Language file loaded: language/english/upload_lang.php
[2017-06-19 12:23:37]	SQL :	SELECT id,category,subcategory,type,status FROM feedback WHERE status=1 
[2017-06-19 12:23:37]	SQL :	SELECT feature_id FROM business_feature WHERE bid='1'
[2017-06-19 12:23:37]	SQL :	SELECT feature_id FROM business_feature WHERE bid='1'
[2017-06-19 12:23:37]	SQL :	SELECT feature_id FROM business_feature WHERE bid='1'
[2017-06-19 12:23:37]	SQL :	SELECT id,type FROM 1_leads_status
[2017-06-19 12:23:37]	SQL :	SELECT design FROM business_lead_use WHERE bid='1' LIMIT 0,1
[2017-06-19 12:23:37]	SQL :	SELECT sid,status FROM 1_support_status
[2017-06-19 12:23:37]	SQL :	SELECT feature_id FROM `business_feature` where bid=1
[2017-06-19 12:23:37]	SQL :	SELECT action_align FROM account_settings WHERE bid='1'
[2017-06-19 12:23:37]	SQL :	SELECT dialstatus FROM 1_callhistory WHERE dialstatus = 'CONNECTING'
[2017-06-19 12:23:37]	SQL :	SELECT FOUND_ROWS() as cnt
[2017-06-19 12:23:37]	SQL :	SELECT del_notify FROM account_settings WHERE bid='1'
[2017-06-19 12:23:37]	DEBUG :	Model Class Initialized
[2017-06-19 12:23:37]	DEBUG :	Database Driver Class Initialized
[2017-06-19 12:23:37]	SQL :	SELECT * FROM 1_user_role
							WHERE roleid='1'
							AND bid='1'
[2017-06-19 12:23:37]	SQL :	SELECT m.modid,m.modname,m.moddesc,
							COALESCE(o.opt_add,0) as opt_add,
							COALESCE(o.opt_view,0) as opt_view,
							COALESCE(o.opt_download,0) as opt_download,
							COALESCE(opt_delete,0) as opt_delete 
							FROM module m
							LEFT JOIN (SELECT * FROM 1_role_mod_opt
							WHERE roleid='1' 
							AND bid='1') as o
							ON m.modid=o.modid where m.status=1
[2017-06-19 12:23:37]	SQL :	SELECT a.*,f.fieldname FROM 1_role_access a
								LEFT JOIN systemfields f on a.fieldid=f.fieldid
								WHERE a.roleid='1'
								AND a.bid='1'
								AND a.fieldtype='s'
[2017-06-19 12:23:37]	SQL :	SELECT * FROM 1_role_access
								WHERE roleid='1'
								AND bid='1'
							AND fieldtype='c'
[2017-06-19 12:23:37]	SQL :	SELECT feature_id FROM `business_feature` where bid=1
[2017-06-19 12:23:37]	SQL :	SELECT feature_id FROM `business_feature` where bid=1
[2017-06-19 12:23:37]	SQL :	SELECT * FROM business where pid='1'
[2017-06-19 12:23:37]	DEBUG :	Database Driver Class Initialized
[2017-06-19 12:23:37]	SQL :	SELECT * FROM ( 
				SELECT 's' as type,f.addon,f.fieldid,f.modid,
				f.fieldname,'' as fieldtype,'' as fieldKey,'' as options,
				'' as defaultvalue,f.is_required as is_required,f.is_hidden,COALESCE(l.display_order,0) as display_order,
				l.customlabel,COALESCE(l.show,1) as `show`,COALESCE(l.listing,1) as `listing`
				FROM systemfields f
				LEFT JOIN (
					SELECT * FROM 1_custom_label
					WHERE fieldtype='s'
				) as l
				on (f.fieldid=l.fieldid AND l.modid=f.modid)
				WHERE f.modid='3'  AND f.is_hidden=0 
				UNION
				SELECT 'c' as type,'0',f.fieldid,f.modid,
				f.fieldname,f.fieldtype,f.field_key as fieldKey,f.options,
				f.defaultvalue,f.is_required as is_required,'',COALESCE(l.display_order,0) as display_order,
				l.customlabel,COALESCE(l.show,1) as `show`,COALESCE(l.listing,1) as `listing`
				FROM 1_customfields f
				LEFT JOIN (
					SELECT * FROM 1_custom_label
					WHERE fieldtype='c'
				) as l
				on (f.fieldid=l.fieldid AND l.modid=f.modid)
				WHERE f.modid='3') as t ORDER BY display_order ASC
[2017-06-19 12:23:37]	DEBUG :	Database Driver Class Initialized
[2017-06-19 12:23:37]	SQL :	SELECT g.*,e.empname as eid,sg.groupname as supportgroup,
					  if(g.connectowner=1,'YES','NO') as connectwner,
					  g.eid as epid,if(g.record=1,'YES','NO') as records,
					  if(g.replytocustomer=1,'YES','NO') as replycus,
					  if(g.replytoexecutive=1,'YES','NO') as replyexe,
					  if(g.pincode=1,'YES','NO') as pcode,
					  p.number as prinumber,
					  p.landingnumber as addnumber,(if(g.primary_rule=0,'All',cr.regionname)) as regionname,
					  r.rulename as rules,g.rules as rule
					  FROM 1_groups g 
					  LEFT JOIN group_rules r on g.rules=r.rulesid 
					  LEFT JOIN 1_employee e on g.eid=e.eid 
					  LEFT JOIN 1_support_groups sg on g.supportgrp=sg.gid 
					  LEFT JOIN prinumber p on g.prinumber=p.number
					  LEFT JOIN 1_custom_region cr on g.primary_rule=cr.regionid
					  WHERE g.bid='1' 
					  AND g.gid='17'
[2017-06-19 12:23:37]	SQL :	SELECT * FROM 1_customfieldsvalue 
				WHERE bid='1' 
				AND modid='3'
				AND dataid='17'
[2017-06-19 12:23:37]	SQL :	SELECT s.fieldname
							FROM systemfields s
							LEFT JOIN `features` f on s.addon=f.feature_id
							LEFT JOIN business_packageaddons b on (f.feature_id=b.feature_id AND b.number='200047')
							WHERE s.modid='3' AND s.addon!=0 AND b.number is null
[2017-06-19 12:23:37]	SQL :	SELECT feature_id FROM business_feature WHERE bid='1'
[2017-06-19 12:23:37]	SQL :	SELECT l.region, p.bid,l.number FROM landingnumbers l 
		                        LEFT JOIN prinumbers p ON p.landingnumber=l.number 
		                        WHERE p.bid='1' 
		                        AND p.status = '0' AND p.type = '0' AND l.module_id = '1'
		                         
[2017-06-19 12:23:37]	SQL :	SELECT p.status,p.number,p.landingnumber from prinumbers p
								LEFT JOIN landingnumbers l on l.pri=p.pri
								WHERE p.bid='1' 
								AND p.ntype=0 AND l.module_id='1'
								
[2017-06-19 12:23:37]	SQL :	SELECT * FROM group_rules
[2017-06-19 12:23:37]	SQL :	select eid,empname from 1_employee where status=1 ORDER BY empname
[2017-06-19 12:23:37]	DEBUG :	Database Driver Class Initialized
[2017-06-19 12:23:37]	SQL :	SELECT * FROM 1_user_role
							WHERE roleid='1'
							AND bid='1'
[2017-06-19 12:23:37]	SQL :	SELECT m.modid,m.modname,m.moddesc,
							COALESCE(o.opt_add,0) as opt_add,
							COALESCE(o.opt_view,0) as opt_view,
							COALESCE(o.opt_download,0) as opt_download,
							COALESCE(opt_delete,0) as opt_delete 
							FROM module m
							LEFT JOIN (SELECT * FROM 1_role_mod_opt
							WHERE roleid='1' 
							AND bid='1') as o
							ON m.modid=o.modid where m.status=1
[2017-06-19 12:23:37]	SQL :	SELECT a.*,f.fieldname FROM 1_role_access a
								LEFT JOIN systemfields f on a.fieldid=f.fieldid
								WHERE a.roleid='1'
								AND a.bid='1'
								AND a.fieldtype='s'
[2017-06-19 12:23:37]	SQL :	SELECT * FROM 1_role_access
								WHERE roleid='1'
								AND bid='1'
							AND fieldtype='c'
[2017-06-19 12:23:37]	SQL :	SELECT * FROM 1_employee WHERE status='1' ORDER BY empname
[2017-06-19 12:23:37]	SQL :	SELECT * FROM 1_custom_region
[2017-06-19 12:23:37]	SQL :	SELECT support FROM `prinumbers` WHERE bid='1' 
[2017-06-19 12:23:37]	SQL :	SELECT * FROM 1_support_groups WHERE status=1
[2017-06-19 12:23:37]	SQL :	select eid,empname from 1_employee where status=1 ORDER BY empname
[2017-06-19 12:23:37]	DEBUG :	Database Driver Class Initialized
[2017-06-19 12:23:37]	SQL :	SELECT * FROM 1_user_role
							WHERE roleid='1'
							AND bid='1'
[2017-06-19 12:23:37]	SQL :	SELECT m.modid,m.modname,m.moddesc,
							COALESCE(o.opt_add,0) as opt_add,
							COALESCE(o.opt_view,0) as opt_view,
							COALESCE(o.opt_download,0) as opt_download,
							COALESCE(opt_delete,0) as opt_delete 
							FROM module m
							LEFT JOIN (SELECT * FROM 1_role_mod_opt
							WHERE roleid='1' 
							AND bid='1') as o
							ON m.modid=o.modid where m.status=1
[2017-06-19 12:23:37]	SQL :	SELECT a.*,f.fieldname FROM 1_role_access a
								LEFT JOIN systemfields f on a.fieldid=f.fieldid
								WHERE a.roleid='1'
								AND a.bid='1'
								AND a.fieldtype='s'
[2017-06-19 12:23:37]	SQL :	SELECT * FROM 1_role_access
								WHERE roleid='1'
								AND bid='1'
							AND fieldtype='c'
[2017-06-19 12:23:37]	SQL :	SELECT * FROM 1_employee WHERE status='1' ORDER BY empname
[2017-06-19 12:23:37]	DEBUG :	File loaded: /var/www/html/mcnew/system/application/views/mainheader.php
[2017-06-19 12:23:37]	DEBUG :	Database Driver Class Initialized
[2017-06-19 12:23:37]	SQL :	select a.*,e.empname as reporttoname,b.rolename  as role,if(u.recording=1,'Yes','No') as recording
					  from 1_employee a
					  LEFT JOIN  1_employee e on a.reportto=e.eid
					  LEFT JOIN  user u on a.eid=u.eid
					  ,1_user_role b 
					  where a.roleid=b.roleid AND a.eid='1'
[2017-06-19 12:23:37]	SQL :	SELECT * FROM 1_customfieldsvalue 
				WHERE bid='1' 
				AND modid='2'
				AND dataid='1'
[2017-06-19 12:23:37]	DEBUG :	File loaded: /var/www/html/mcnew/system/application/views/leftsidebar.php
[2017-06-19 12:23:37]	DEBUG :	File loaded: /var/www/html/mcnew/system/application/views/form_view.php
[2017-06-19 12:23:37]	DEBUG :	File loaded: /var/www/html/mcnew/system/application/views/footer.php
[2017-06-19 12:23:37]	DEBUG :	Final output sent to browser
[2017-06-19 12:23:37]	DEBUG :	Total execution time: 0.1729
[2017-06-19 12:31:45]	DEBUG :	Config Class Initialized
[2017-06-19 12:31:45]	DEBUG :	Hooks Class Initialized
[2017-06-19 12:31:45]	DEBUG :	URI Class Initialized
[2017-06-19 12:31:45]	DEBUG :	Router Class Initialized
[2017-06-19 12:31:45]	DEBUG :	Output Class Initialized
[2017-06-19 12:31:45]	DEBUG :	Input Class Initialized
[2017-06-19 12:31:45]	DEBUG :	XSS Filtering completed
[2017-06-19 12:31:45]	DEBUG :	Global POST and COOKIE data sanitized
[2017-06-19 12:31:45]	DEBUG :	Language Class Initialized
[2017-06-19 12:31:45]	DEBUG :	Loader Class Initialized
[2017-06-19 12:31:45]	DEBUG :	Helper loaded: url_helper
[2017-06-19 12:31:45]	DEBUG :	Helper loaded: form_helper
[2017-06-19 12:31:45]	DEBUG :	Helper loaded: html_helper
[2017-06-19 12:31:45]	DEBUG :	Helper loaded: email_helper
[2017-06-19 12:31:45]	DEBUG :	Helper loaded: ckeditor_helper
[2017-06-19 12:31:45]	DEBUG :	Helper loaded: mcube_helper
[2017-06-19 12:31:45]	DEBUG :	Database Driver Class Initialized
[2017-06-19 12:31:45]	ERROR :	Severity: 8192  --> mysql_pconnect(): The mysql extension is deprecated and will be removed in the future: use mysqli or PDO instead /var/www/html/mcnew/system/database/drivers/mysql/mysql_driver.php 88
[2017-06-19 12:31:45]	DEBUG :	Session Class Initialized
[2017-06-19 12:31:45]	DEBUG :	Helper loaded: string_helper
[2017-06-19 12:31:45]	DEBUG :	Encrypt Class Initialized
[2017-06-19 12:31:45]	DEBUG :	A session cookie was not found.
[2017-06-19 12:31:45]	SQL :	INSERT INTO `call_sessions` (`session_id`, `ip_address`, `user_agent`, `last_activity`) VALUES ('1661f6a167564152c2b482ec109d28f0', '10.0.0.32', 'Dalvik/2.1.0 (Linux; U; Android 6.0; Panasonic T44', 1497855705)
[2017-06-19 12:31:45]	DEBUG :	Session routines successfully run
[2017-06-19 12:31:45]	DEBUG :	Table Class Initialized
[2017-06-19 12:31:45]	DEBUG :	Pagination Class Initialized
[2017-06-19 12:31:45]	DEBUG :	Config file loaded: config/paypallib_config.php
[2017-06-19 12:31:45]	DEBUG :	Form Validation Class Initialized
[2017-06-19 12:31:45]	DEBUG :	Email Class Initialized
[2017-06-19 12:31:45]	DEBUG :	Language file loaded: language/english/calendar_lang.php
[2017-06-19 12:31:45]	DEBUG :	Calendar Class Initialized
[2017-06-19 12:31:45]	DEBUG :	Controller Class Initialized
[2017-06-19 12:31:45]	DEBUG :	Model Class Initialized
[2017-06-19 12:31:45]	DEBUG :	Model Class Initialized
[2017-06-19 12:31:45]	DEBUG :	Model Class Initialized
[2017-06-19 12:31:45]	DEBUG :	Model Class Initialized
[2017-06-19 12:31:45]	DEBUG :	Model Class Initialized
[2017-06-19 12:31:45]	DEBUG :	Model Class Initialized
[2017-06-19 12:31:45]	DEBUG :	Model Class Initialized
[2017-06-19 12:31:45]	DEBUG :	Model Class Initialized
[2017-06-19 12:31:45]	DEBUG :	Model Class Initialized
[2017-06-19 12:31:45]	DEBUG :	Model Class Initialized
[2017-06-19 12:31:45]	DEBUG :	Model Class Initialized
[2017-06-19 12:31:45]	DEBUG :	Model Class Initialized
[2017-06-19 12:31:45]	DEBUG :	Model Class Initialized
[2017-06-19 12:31:45]	DEBUG :	Model Class Initialized
[2017-06-19 12:31:45]	DEBUG :	Plugin loaded: to_pdf_pi
[2017-06-19 12:31:45]	DEBUG :	Model Class Initialized
[2017-06-19 12:31:45]	DEBUG :	Model Class Initialized
[2017-06-19 12:31:45]	DEBUG :	Model Class Initialized
[2017-06-19 12:31:45]	DEBUG :	Model Class Initialized
[2017-06-19 12:31:45]	DEBUG :	Model Class Initialized
[2017-06-19 12:31:45]	DEBUG :	Model Class Initialized
[2017-06-19 12:31:45]	DEBUG :	Model Class Initialized
[2017-06-19 12:31:45]	DEBUG :	Session class already loaded. Second attempt ignored.
[2017-06-19 12:31:45]	DEBUG :	Language file loaded: language/english/form_validation_lang.php
[2017-06-19 12:31:45]	SQL :	SELECT uid,bid,eid FROM `user` WHERE authkey='1.1.d886b8e8a0615'
[2017-06-19 12:31:45]	SQL :	UPDATE `call_sessions` SET `last_activity` = 1497855705, `user_data` = 'a:4:{s:3:\"bid\";s:1:\"1\";s:3:\"eid\";s:1:\"1\";s:5:\"ofset\";s:1:\"0\";s:5:\"limit\";s:2:\"20\";}' WHERE `session_id` = '1661f6a167564152c2b482ec109d28f0'
[2017-06-19 12:31:45]	DEBUG :	Database Driver Class Initialized
[2017-06-19 12:31:45]	SQL :	SELECT roleid FROM 1_employee
							WHERE eid='1'
							AND bid='1'
[2017-06-19 12:31:45]	DEBUG :	Database Driver Class Initialized
[2017-06-19 12:31:45]	SQL :	SELECT * FROM 1_user_role
							WHERE roleid='1'
							AND bid='1'
[2017-06-19 12:31:45]	SQL :	SELECT m.modid,m.modname,m.moddesc,
							COALESCE(o.opt_add,0) as opt_add,
							COALESCE(o.opt_view,0) as opt_view,
							COALESCE(o.opt_download,0) as opt_download,
							COALESCE(opt_delete,0) as opt_delete 
							FROM module m
							LEFT JOIN (SELECT * FROM 1_role_mod_opt
							WHERE roleid='1' 
							AND bid='1') as o
							ON m.modid=o.modid where m.status=1
[2017-06-19 12:31:45]	SQL :	SELECT a.*,f.fieldname FROM 1_role_access a
								LEFT JOIN systemfields f on a.fieldid=f.fieldid
								WHERE a.roleid='1'
								AND a.bid='1'
								AND a.fieldtype='s'
[2017-06-19 12:31:45]	SQL :	SELECT * FROM 1_role_access
								WHERE roleid='1'
								AND bid='1'
							AND fieldtype='c'
[2017-06-19 12:31:45]	SQL :	UPDATE `call_sessions` SET `last_activity` = 1497855705, `user_data` = 'a:5:{s:3:\"bid\";s:1:\"1\";s:3:\"eid\";s:1:\"1\";s:5:\"ofset\";s:1:\"0\";s:5:\"limit\";s:2:\"20\";s:6:\"roleid\";s:1:\"1\";}' WHERE `session_id` = '1661f6a167564152c2b482ec109d28f0'
[2017-06-19 12:31:46]	SQL :	SELECT pri.landingnumber,pri.used,pri.climit,
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
[2017-06-19 12:31:46]	SQL :	SELECT balance FROM sms_bal  where bid='1'
[2017-06-19 12:31:46]	SQL :	SELECT balance FROM call_bal where bid='1'
[2017-06-19 12:31:46]	DEBUG :	Database Driver Class Initialized
[2017-06-19 12:31:46]	SQL :	SELECT * FROM 1_user_role
							WHERE roleid='1'
							AND bid='1'
[2017-06-19 12:31:46]	SQL :	SELECT m.modid,m.modname,m.moddesc,
							COALESCE(o.opt_add,0) as opt_add,
							COALESCE(o.opt_view,0) as opt_view,
							COALESCE(o.opt_download,0) as opt_download,
							COALESCE(opt_delete,0) as opt_delete 
							FROM module m
							LEFT JOIN (SELECT * FROM 1_role_mod_opt
							WHERE roleid='1' 
							AND bid='1') as o
							ON m.modid=o.modid where m.status=1
[2017-06-19 12:31:46]	SQL :	SELECT a.*,f.fieldname FROM 1_role_access a
								LEFT JOIN systemfields f on a.fieldid=f.fieldid
								WHERE a.roleid='1'
								AND a.bid='1'
								AND a.fieldtype='s'
[2017-06-19 12:31:46]	SQL :	SELECT * FROM 1_role_access
								WHERE roleid='1'
								AND bid='1'
							AND fieldtype='c'
[2017-06-19 12:31:46]	SQL :	SELECT DISTINCT(e.eid),e.empname,eb.start_time FROM 1_employee e
		                       LEFT JOIN 1_emp_break eb ON e.eid = eb.eid
		                       LEFT JOIN 1_groups d ON e.eid = d.eid
		                       WHERE eb.end_time='0000-00-00' AND e.selfdisable=1  GROUP BY d.gid,e.eid
[2017-06-19 12:31:46]	DEBUG :	Database Driver Class Initialized
[2017-06-19 12:31:46]	SQL :	SELECT * FROM 1_user_role
							WHERE roleid='1'
							AND bid='1'
[2017-06-19 12:31:46]	SQL :	SELECT m.modid,m.modname,m.moddesc,
							COALESCE(o.opt_add,0) as opt_add,
							COALESCE(o.opt_view,0) as opt_view,
							COALESCE(o.opt_download,0) as opt_download,
							COALESCE(opt_delete,0) as opt_delete 
							FROM module m
							LEFT JOIN (SELECT * FROM 1_role_mod_opt
							WHERE roleid='1' 
							AND bid='1') as o
							ON m.modid=o.modid where m.status=1
[2017-06-19 12:31:46]	SQL :	SELECT a.*,f.fieldname FROM 1_role_access a
								LEFT JOIN systemfields f on a.fieldid=f.fieldid
								WHERE a.roleid='1'
								AND a.bid='1'
								AND a.fieldtype='s'
[2017-06-19 12:31:46]	SQL :	SELECT * FROM 1_role_access
								WHERE roleid='1'
								AND bid='1'
							AND fieldtype='c'
[2017-06-19 12:31:46]	SQL :	SELECT COALESCE(COUNT(callid), 0) AS day 
							FROM 1_callhistory h 
							LEFT JOIN 1_groups d ON d.gid = h.gid 
							WHERE (DATE(h.`starttime`) = DATE(NOW()))  
[2017-06-19 12:31:46]	DEBUG :	Database Driver Class Initialized
[2017-06-19 12:31:46]	SQL :	SELECT * FROM 1_user_role
							WHERE roleid='1'
							AND bid='1'
[2017-06-19 12:31:46]	SQL :	SELECT m.modid,m.modname,m.moddesc,
							COALESCE(o.opt_add,0) as opt_add,
							COALESCE(o.opt_view,0) as opt_view,
							COALESCE(o.opt_download,0) as opt_download,
							COALESCE(opt_delete,0) as opt_delete 
							FROM module m
							LEFT JOIN (SELECT * FROM 1_role_mod_opt
							WHERE roleid='1' 
							AND bid='1') as o
							ON m.modid=o.modid where m.status=1
[2017-06-19 12:31:46]	SQL :	SELECT a.*,f.fieldname FROM 1_role_access a
								LEFT JOIN systemfields f on a.fieldid=f.fieldid
								WHERE a.roleid='1'
								AND a.bid='1'
								AND a.fieldtype='s'
[2017-06-19 12:31:46]	SQL :	SELECT * FROM 1_role_access
								WHERE roleid='1'
								AND bid='1'
							AND fieldtype='c'
[2017-06-19 12:31:46]	SQL :	SELECT COALESCE(COUNT(callid), 0) AS week 
							FROM 1_callhistory h 
							LEFT JOIN 1_groups d ON d.gid = h.gid 
							WHERE (DATE(h.`starttime`)  > DATE(DATE_SUB(NOW(), INTERVAL 1 WEEK)))  
[2017-06-19 12:31:46]	DEBUG :	Database Driver Class Initialized
[2017-06-19 12:31:46]	SQL :	SELECT * FROM 1_user_role
							WHERE roleid='1'
							AND bid='1'
[2017-06-19 12:31:46]	SQL :	SELECT m.modid,m.modname,m.moddesc,
							COALESCE(o.opt_add,0) as opt_add,
							COALESCE(o.opt_view,0) as opt_view,
							COALESCE(o.opt_download,0) as opt_download,
							COALESCE(opt_delete,0) as opt_delete 
							FROM module m
							LEFT JOIN (SELECT * FROM 1_role_mod_opt
							WHERE roleid='1' 
							AND bid='1') as o
							ON m.modid=o.modid where m.status=1
[2017-06-19 12:31:46]	SQL :	SELECT a.*,f.fieldname FROM 1_role_access a
								LEFT JOIN systemfields f on a.fieldid=f.fieldid
								WHERE a.roleid='1'
								AND a.bid='1'
								AND a.fieldtype='s'
[2017-06-19 12:31:46]	SQL :	SELECT * FROM 1_role_access
								WHERE roleid='1'
								AND bid='1'
							AND fieldtype='c'
[2017-06-19 12:31:46]	SQL :	SELECT COALESCE(COUNT(callid), 0) AS month 
							FROM 1_callhistory h 
							LEFT JOIN 1_groups d ON d.gid = h.gid 
							WHERE (MONTH(h.`starttime` ) = MONTH(NOW()) )  
[2017-06-19 12:31:46]	SQL :	SELECT COALESCE(COUNT(pbxid), 0) AS day 
							FROM 1_pbxreport h 
							WHERE (DATE(h.`starttime`) = DATE(NOW()))
[2017-06-19 12:31:46]	SQL :	SELECT COALESCE(COUNT(pbxid), 0) AS week 
							FROM 1_pbxreport h 
							WHERE (h.`starttime`  > DATE_SUB(NOW(), INTERVAL 1 WEEK))
[2017-06-19 12:31:46]	SQL :	SELECT COALESCE(COUNT(pbxid), 0) AS month 
							FROM 1_pbxreport h 
							WHERE (MONTH(h.`starttime` ) = MONTH(NOW()) )
[2017-06-19 12:31:46]	SQL :	SELECT COALESCE(COUNT(hid), 0) AS day 
							FROM 1_ivrshistory h 
							WHERE (DATE(h.`datetime`) = DATE(NOW()))
[2017-06-19 12:31:46]	SQL :	SELECT COALESCE(COUNT(hid), 0) AS week 
							FROM 1_ivrshistory h 
							WHERE (h.`datetime`  > DATE_SUB(NOW(), INTERVAL 1 WEEK))
[2017-06-19 12:31:46]	SQL :	SELECT COALESCE(COUNT(hid), 0) AS month 
							FROM 1_ivrshistory h 
							WHERE (MONTH(h.`datetime` ) = MONTH(NOW()) )
[2017-06-19 12:31:46]	DEBUG :	Database Driver Class Initialized
[2017-06-19 12:31:46]	SQL :	SELECT * FROM 1_user_role
							WHERE roleid='1'
							AND bid='1'
[2017-06-19 12:31:46]	SQL :	SELECT m.modid,m.modname,m.moddesc,
							COALESCE(o.opt_add,0) as opt_add,
							COALESCE(o.opt_view,0) as opt_view,
							COALESCE(o.opt_download,0) as opt_download,
							COALESCE(opt_delete,0) as opt_delete 
							FROM module m
							LEFT JOIN (SELECT * FROM 1_role_mod_opt
							WHERE roleid='1' 
							AND bid='1') as o
							ON m.modid=o.modid where m.status=1
[2017-06-19 12:31:46]	SQL :	SELECT a.*,f.fieldname FROM 1_role_access a
								LEFT JOIN systemfields f on a.fieldid=f.fieldid
								WHERE a.roleid='1'
								AND a.bid='1'
								AND a.fieldtype='s'
[2017-06-19 12:31:46]	SQL :	SELECT * FROM 1_role_access
								WHERE roleid='1'
								AND bid='1'
							AND fieldtype='c'
[2017-06-19 12:31:46]	SQL :	SELECT COALESCE(COUNT(leadid), 0) AS day 
							FROM 1_leads a 
							LEFT JOIN 1_leads_groups d ON d.gid = a.gid 
							WHERE (DATE(a.`createdon`) = DATE(NOW()))  
[2017-06-19 12:31:46]	DEBUG :	Database Driver Class Initialized
[2017-06-19 12:31:46]	SQL :	SELECT * FROM 1_user_role
							WHERE roleid='1'
							AND bid='1'
[2017-06-19 12:31:46]	SQL :	SELECT m.modid,m.modname,m.moddesc,
							COALESCE(o.opt_add,0) as opt_add,
							COALESCE(o.opt_view,0) as opt_view,
							COALESCE(o.opt_download,0) as opt_download,
							COALESCE(opt_delete,0) as opt_delete 
							FROM module m
							LEFT JOIN (SELECT * FROM 1_role_mod_opt
							WHERE roleid='1' 
							AND bid='1') as o
							ON m.modid=o.modid where m.status=1
[2017-06-19 12:31:46]	SQL :	SELECT a.*,f.fieldname FROM 1_role_access a
								LEFT JOIN systemfields f on a.fieldid=f.fieldid
								WHERE a.roleid='1'
								AND a.bid='1'
								AND a.fieldtype='s'
[2017-06-19 12:31:46]	SQL :	SELECT * FROM 1_role_access
								WHERE roleid='1'
								AND bid='1'
							AND fieldtype='c'
[2017-06-19 12:31:46]	SQL :	SELECT COALESCE(COUNT(leadid), 0) AS week 
							FROM 1_leads a 
							LEFT JOIN 1_leads_groups d ON d.gid = a.gid 
							WHERE (a.`createdon`  > DATE_SUB(NOW(), INTERVAL 1 WEEK))  
[2017-06-19 12:31:46]	DEBUG :	Database Driver Class Initialized
[2017-06-19 12:31:46]	SQL :	SELECT * FROM 1_user_role
							WHERE roleid='1'
							AND bid='1'
[2017-06-19 12:31:46]	SQL :	SELECT m.modid,m.modname,m.moddesc,
							COALESCE(o.opt_add,0) as opt_add,
							COALESCE(o.opt_view,0) as opt_view,
							COALESCE(o.opt_download,0) as opt_download,
							COALESCE(opt_delete,0) as opt_delete 
							FROM module m
							LEFT JOIN (SELECT * FROM 1_role_mod_opt
							WHERE roleid='1' 
							AND bid='1') as o
							ON m.modid=o.modid where m.status=1
[2017-06-19 12:31:46]	SQL :	SELECT a.*,f.fieldname FROM 1_role_access a
								LEFT JOIN systemfields f on a.fieldid=f.fieldid
								WHERE a.roleid='1'
								AND a.bid='1'
								AND a.fieldtype='s'
[2017-06-19 12:31:46]	SQL :	SELECT * FROM 1_role_access
								WHERE roleid='1'
								AND bid='1'
							AND fieldtype='c'
[2017-06-19 12:31:46]	SQL :	SELECT COALESCE(COUNT(leadid), 0) AS month 
							FROM 1_leads a 
							LEFT JOIN 1_leads_groups d ON d.gid = a.gid 
							WHERE (MONTH(a.`createdon` ) = MONTH(NOW())) 
[2017-06-19 12:31:46]	DEBUG :	Database Driver Class Initialized
[2017-06-19 12:31:46]	SQL :	SELECT * FROM 1_user_role
							WHERE roleid='1'
							AND bid='1'
[2017-06-19 12:31:46]	SQL :	SELECT m.modid,m.modname,m.moddesc,
							COALESCE(o.opt_add,0) as opt_add,
							COALESCE(o.opt_view,0) as opt_view,
							COALESCE(o.opt_download,0) as opt_download,
							COALESCE(opt_delete,0) as opt_delete 
							FROM module m
							LEFT JOIN (SELECT * FROM 1_role_mod_opt
							WHERE roleid='1' 
							AND bid='1') as o
							ON m.modid=o.modid where m.status=1
[2017-06-19 12:31:46]	SQL :	SELECT a.*,f.fieldname FROM 1_role_access a
								LEFT JOIN systemfields f on a.fieldid=f.fieldid
								WHERE a.roleid='1'
								AND a.bid='1'
								AND a.fieldtype='s'
[2017-06-19 12:31:46]	SQL :	SELECT * FROM 1_role_access
								WHERE roleid='1'
								AND bid='1'
							AND fieldtype='c'
[2017-06-19 12:31:46]	SQL :	SELECT COALESCE(COUNT(tktid), 0) AS day 
							FROM 1_support_tickets a 
							LEFT JOIN 1_support_groups d ON d.gid = a.gid 
							WHERE (DATE(a.`createdon`) = DATE(NOW()))  
[2017-06-19 12:31:46]	DEBUG :	Database Driver Class Initialized
[2017-06-19 12:31:46]	SQL :	SELECT * FROM 1_user_role
							WHERE roleid='1'
							AND bid='1'
[2017-06-19 12:31:46]	SQL :	SELECT m.modid,m.modname,m.moddesc,
							COALESCE(o.opt_add,0) as opt_add,
							COALESCE(o.opt_view,0) as opt_view,
							COALESCE(o.opt_download,0) as opt_download,
							COALESCE(opt_delete,0) as opt_delete 
							FROM module m
							LEFT JOIN (SELECT * FROM 1_role_mod_opt
							WHERE roleid='1' 
							AND bid='1') as o
							ON m.modid=o.modid where m.status=1
[2017-06-19 12:31:46]	SQL :	SELECT a.*,f.fieldname FROM 1_role_access a
								LEFT JOIN systemfields f on a.fieldid=f.fieldid
								WHERE a.roleid='1'
								AND a.bid='1'
								AND a.fieldtype='s'
[2017-06-19 12:31:46]	SQL :	SELECT * FROM 1_role_access
								WHERE roleid='1'
								AND bid='1'
							AND fieldtype='c'
[2017-06-19 12:31:46]	SQL :	SELECT COALESCE(COUNT(tktid), 0) AS week 
							FROM 1_support_tickets a 
							LEFT JOIN 1_support_groups d ON d.gid = a.gid 
							WHERE (a.`createdon`  > DATE_SUB(NOW(), INTERVAL 1 WEEK))  
[2017-06-19 12:31:46]	DEBUG :	Database Driver Class Initialized
[2017-06-19 12:31:46]	SQL :	SELECT * FROM 1_user_role
							WHERE roleid='1'
							AND bid='1'
[2017-06-19 12:31:46]	SQL :	SELECT m.modid,m.modname,m.moddesc,
							COALESCE(o.opt_add,0) as opt_add,
							COALESCE(o.opt_view,0) as opt_view,
							COALESCE(o.opt_download,0) as opt_download,
							COALESCE(opt_delete,0) as opt_delete 
							FROM module m
							LEFT JOIN (SELECT * FROM 1_role_mod_opt
							WHERE roleid='1' 
							AND bid='1') as o
							ON m.modid=o.modid where m.status=1
[2017-06-19 12:31:46]	SQL :	SELECT a.*,f.fieldname FROM 1_role_access a
								LEFT JOIN systemfields f on a.fieldid=f.fieldid
								WHERE a.roleid='1'
								AND a.bid='1'
								AND a.fieldtype='s'
[2017-06-19 12:31:46]	SQL :	SELECT * FROM 1_role_access
								WHERE roleid='1'
								AND bid='1'
							AND fieldtype='c'
[2017-06-19 12:31:46]	SQL :	SELECT COALESCE(COUNT(tktid), 0) AS month 
							FROM 1_support_tickets a 
							LEFT JOIN 1_support_groups d ON d.gid = a.gid 
							WHERE (MONTH(a.`createdon` ) = MONTH(NOW())) 
[2017-06-19 12:31:46]	SQL :	SELECT COALESCE(COUNT(callid), 0) AS day 
							FROM 1_outboundcalls h 
							WHERE (DATE(h.`starttime`) = DATE(NOW()))
[2017-06-19 12:31:46]	SQL :	SELECT COALESCE(COUNT(callid), 0) AS week 
							FROM 1_outboundcalls h 
							WHERE (h.`starttime`  > DATE_SUB(NOW(), INTERVAL 1 WEEK))
[2017-06-19 12:31:46]	SQL :	SELECT COALESCE(COUNT(callid), 0) AS month 
							FROM 1_outboundcalls h 
							WHERE (MONTH(h.`starttime` ) = MONTH(NOW()))
[2017-06-19 12:31:46]	SQL :	SELECT COALESCE(COUNT(callid), 0) AS day 
							FROM 1_mtracker h 
							WHERE (DATE(h.`starttime`) = DATE(NOW()))
[2017-06-19 12:31:46]	SQL :	SELECT COALESCE(COUNT(callid), 0) AS week 
							FROM 1_mtracker h 
							WHERE (h.`starttime`  > DATE_SUB(NOW(), INTERVAL 1 WEEK))
[2017-06-19 12:31:46]	SQL :	SELECT COALESCE(COUNT(callid), 0) AS month 
							FROM 1_mtracker h 
							WHERE (MONTH(h.`starttime` ) = MONTH(NOW()))
