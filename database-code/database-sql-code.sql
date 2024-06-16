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
CREATE TABLE car(
    regNumber VARCHAR(10) NOT NULL,
    model VARCHAR(50),
    ownerEmail VARCHAR(50),
    pricePerDay VARCHAR(10),

    CONSTRAINT pk_car PRIMARY KEY (regNumber),
    CONSTRAINT fk_car FOREIGN KEY (ownerEmail) REFERENCES owner(email)
);

/* rentCar table - contains details of rented cars*/

