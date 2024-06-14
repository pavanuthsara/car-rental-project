/*customer table - contains the details of customers*/
CREATE TABLE customer(
    email VARCHAR(150),
    name VARCHAR(50),
    contact VARCHAR(10),
    password VARCHAR(30),

    CONSTRAINT pk_customer PRIMARY KEY (email)
);

/* owner table - contains the detials of car owners*/
CREATE TABLE owner(
    email VARCHAR(150),
    name VARCHAR(50),
    contact VARCHAR(10),
    password VARCHAR(30),

    CONSTRAINT pk_owner PRIMARY KEY (email)
);

/* car table - contains the details of cars*/


/* rentCar table - contains details of rented cars*/

