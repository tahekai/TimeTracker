INSERT INTO alldatas(chipcode, startingnumber, fullname, corridore_time) VALUES(111, 1, 'Kaarel Kull', NOW());
UPDATE alldatas SET finish_time=NOW() WHERE fullname='Kaarel Kull';
INSERT INTO alldatas(chipcode, startingnumber, fullname, corridore_time) VALUES(112, 2, 'Mari Maasikas', NOW());
UPDATE alldatas SET finish_time=NOW() WHERE fullname='Mari Maasikas';