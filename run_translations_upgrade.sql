drop procedure if exists locale_upgrade_add_source;
delimiter $$ ;

create procedure locale_upgrade_add_source(upgrade_lid INT(11), upgrade_source blob, upgrade_context VARCHAR(255), upgrade_version VARCHAR(20), OUT existing_lid INT(11))
begin
	set existing_lid := (select lid from locales_source where source=upgrade_source and context=upgrade_context);
	if (existing_lid is NULL)
	then
		insert into locales_source (source,context,version) values(upgrade_source,upgrade_context,upgrade_version);
		set existing_lid := (select lid from locales_source where source=upgrade_source and context=upgrade_context);
		select 2;
	end if;
end;
$$

drop procedure if exists locale_upgrade_add_target;
create procedure locale_upgrade_add_target(upgrade_lid INT(11), upgrade_translation blob, upgrade_lang varchar(12))
begin
	DECLARE fcustomized INT(11);
	DECLARE ftranslation blob;

	select customized,translation into fcustomized,ftranslation from locales_target where lid=upgrade_lid and language=upgrade_lang;

	if (fcustomized is NULL)
	then
		insert into locales_target values(upgrade_lid,upgrade_translation,upgrade_lang,0);
			select 3;
	else
		if (ftranslation != upgrade_translation)
		then
			if (fcustomized = 0)
			then
				update locales_target set translation=upgrade_translation where lid=upgrade_lid and language=upgrade_lang;
					select 4;
			else
				select 5;
			end if;
		end if;
	end if;
end;
$$

drop procedure if exists locale_upgrade;
create procedure locale_upgrade()
begin
	declare flid INT(11);
	declare fsource blob;
	declare fcontext VARCHAR(255);
	declare fversion VARCHAR(20);
	declare done INT default 0;
	DECLARE cur1 CURSOR FOR SELECT lid,source,context,version FROM upgrade_locales_source;
	DECLARE CONTINUE HANDLER FOR NOT FOUND SET done = 1;

	OPEN cur1;

	REPEAT
		FETCH cur1 INTO flid,fsource,fcontext,fversion;
		IF NOT done THEN
			call locale_upgrade_add_source(flid, fsource, fcontext, fversion, @new_lid);
			call locale_upgrade_targets(@new_lid,flid);
			select 1;
		END IF;
	UNTIL done END REPEAT;
end;
$$

drop procedure if exists locale_upgrade_targets;
create procedure locale_upgrade_targets(existing_lid INT(11), upgrade_lid INT(11))
begin
	declare ftranslation blob;
	declare flanguage VARCHAR(12);
	declare done INT default 0;
	DECLARE cur1 CURSOR FOR SELECT translation,language FROM upgrade_locales_target where lid=upgrade_lid;
	DECLARE CONTINUE HANDLER FOR NOT FOUND SET done = 1;

	OPEN cur1;

	REPEAT
		FETCH cur1 INTO ftranslation,flanguage;
		IF NOT done THEN
			call locale_upgrade_add_target(existing_lid, ftranslation, flanguage);
		END IF;
	UNTIL done END REPEAT;
end;
$$

delimiter ; $$

set autocommit=0;
call locale_upgrade();
COMMIT;

drop table upgrade_locales_source;
drop table upgrade_locales_target;
COMMIT;
