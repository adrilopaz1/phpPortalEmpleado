create table admin as select emp_no id, substr(first_name,1,8) username,
substr(last_name,1,8) passcode from employees;

alter table admin add constraint pk_admin primary key (id);