import random
import datetime
import names
import random_address
from random_phone import RandomUkPhone

rukp = RandomUkPhone()

ms_list =[1,2]
rel_list = ["Spouse", "Mother", "Father", "Uncle", "Husband", "Wife", "Brother", "Sister", "Sibling"] 

start_date = datetime.date(1980, 1, 1)
end_date = datetime.date(2003, 2, 1)
days_between_dates = (end_date - start_date).days

for i in range(5,200):

    fn = names.get_first_name()
    add = random_address.real_random_address()
    random_date = start_date + datetime.timedelta(days=random.randrange(days_between_dates))

    #employee table
    print("INSERT INTO `employee` (`emp_id`,`firstname`, `lastname`, `address`, `date_of_birth`, `marital_status`, `email`)", end=" ")

    print("VALUES ('{e_id}','{fname}', '{lname}', '{addr}', '{dob}', {ms}, '{eml}');".format(e_id=i+1, fname=fn, lname=names.get_last_name(), addr=add['address1']+" , "+ add['city'], dob=str(random_date), ms= random.choice(ms_list)
    , eml=fn.lower()+"@db.com"))

    print()
    #employment table
    print("INSERT INTO `employment`(`emp_id`, `job_title`, `pay_grade`, `employment_status`, `department`)", end=" ")

    #jt(1-4) , pg(1-3), es(1-6), dept(1-5),
    print("VALUES ('{e_id}','{jt}','{pg}','{es}','{dept}');".format(e_id=i+1, jt=random.randrange(1,5), pg = random.randrange(1,4), es= random.randrange(1,7), dept= random.randrange(1,6)))

    print()
    #emp_mobile table
    print("INSERT INTO `emp_mobile`(`emp_id`, `mobile`) VALUES ('{e_id}','{mob}');".format(e_id=i+1, mob= ('0' + rukp.random_mobile(international=True)[4:])))

    print()
    #emergency table
    print("INSERT INTO `emergency`(`emg_id`, `emp_id`, `name`, `relationship`) VALUES ('{emg}','{e_id}','{nm}','{rel}');".format(emg= i+1,e_id= i+1, nm=names.get_full_name(),rel=random.choice(rel_list)))

    print()
    #emg_mobile table
    print("INSERT INTO `emg_mobile`(`emg_id`, `mobile`) VALUES ('{e_id}','{mob}');".format(e_id=i+1, mob= ('0' + rukp.random_mobile(international=True)[4:])))

    print()

    if i < 50:
        #add supervisors for few employees
        print("INSERT INTO `supervise`(`subordinate_id`, `supervisor_id`) VALUES ('{sub_id}','{sup_id}');".format(sub_id= i+1, sup_id = random.randrange(1,i)))

        print()

    if i < 25:
        #add user accounts to few employees
        #password@DB19
        print("INSERT INTO `user`(`emp_id`, `role`, `username`, `password`) VALUES ('{e_id}','{role}','{u_name}','{pw}');".format(e_id=i+1, role=random.randrange(2,5), u_name=fn, pw= '$2y$10$vkxJE8S.PrLXJzLT/h3orey/cI.aF9YXKiwDjKHL3v82WcyhGwSrK'))

        print()

    print("-- end of employee record")
    print()

print()
