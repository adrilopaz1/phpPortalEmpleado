 select * from employees, titles where employees.emp_no=titles.emp_no and titles.title="manager";
 
 Vishwani     Minakawa
 
 
 select title from titles where emp_no=110039;
 
 
 -- consultas realizadas el 4/02/2019
 
 
 select employees.first_name, dept_emp.dept_no from employees, dept_emp where  dept_emp.emp_no=employees.emp_no and employees.emp_no=10002;
   
  
   select * from dept_emp where emp_no=10002
  
 select * from dept_emp limit 10;
 
 emp_no | dept_no | from_date  | to_date
 
 
 
 -- modelo vista controlador /06/02/2019

 
 create table provincia(provincia varchar(40));
 
 insert into provincia values('MADRID');
 insert into provincia values('VALENCIA');
 insert into provincia values('SEVILLA');
 
 COMMIT;
 
 
 
 -- contuasion de ejercicio empleados
 
 
 
 select * from salaries where emp_no=10002;
 
 
 select employees.first_name, salary 
		from employees, salaries
		where  employees.emp_no=salaries.emp_no and employees.emp_no=10002;
		

	select first_name from employees where emp_no=10002

 
 
 -- transpaso de un programa a otro en DAW
 
 oc rsync C:\Users\alumno\Downloads\mysqlpedidos mysqlcompras-1-2s82k://opt/app-root/src
 
 
 -- EJERCICIOS 11/01/19
 
 SELECT dept_no FROM dept_emp where emp_no=10002;
 
 SELECT dept_no FROM departments where dept_name='finance';
 
 
 select employees.first_name from employees, dept_emp, departments 
 where employees.emp_no=dept_emp.emp_no and dept_emp.dept_no=departments.dept_no and dept_name='finance' limit 10;
 
 -- devuelve el departamento al que pertence
 
 select * from departments, dept_emp where dept_emp.dept_no=departments.dept_no and emp_no=10002;
 