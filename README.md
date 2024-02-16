# PROJECT PORTFOLIO - TEAM 21

- Our objective was to build a personal portfolio webpage that effectively promotes our work as software developers. We've tailored it specifically for potential employers and others interested in our future projects.

## Table of Contents
- [Features](#features)
- [Database Tables](#database-tables)
- [Created Forms](#created-forms)
- [Created Tables](#created-tables)

---

## Features

In this section, list and describe the features or functionality that you are working on. You can use checkboxes to track the progress of each feature.

- [X] Feature 1 (Nart): Contact form. 
- [X] Feature 2 (Elly): Signup form.
- [X] Feature 3 (Adam): Script to collect visitor information.
- [X] Feature 4 (Dammak): Project Review and Feedback.

> Add features as required. 

### Feature 1

Conctact me form to get people reach out and send messages. This form can be used to get in touch in people to aquire work or just to get people to interact with the portfolio owner.

http://shell.hamk.fi/~bbcap23_21/Team_21/index.php (scroll down)

### Feature 2

The sign up form has been created to enable us store data for the people that want to sign up for our weekly content. We get the first and last name, email address, occupation and consent for each user. This information will help us to know the interests of our users and as such, tailor-made emails can  be sent to the users based on the content that we write.

http://shell.hamk.fi/~bbcap23_21/Team_21/ellySwork/signup.php

### Feature 3

Collecting IP Adress, Times of visiting the page and number of visits (shell.hamk.fi)

- In the real world, this information should be accessible only by the site admin, in our case, we will include it navbar (to demonstrate that it works)
- Important to log information about the visitors of our page, since they might be potential employers or people interested in our work
- In the future, we can also check the site traffic based off nubmer of visits and lenght of the user session

http://shell.hamk.fi/~bbcap23_21/Team_21/dataBase/visitorLog.php | https://github.com/eokinyo/Team_21/blob/main/dataBase/visitorLog.php



### Feature 4

Collecting project review and Feedback information


- It allows stakeholders to evaluate the progress, performance, and outcomes of the project against predefined objectives and goals. Feedback provides a mechanism for holding team members and project stakeholders accountable for their roles and responsibilities.
- There are pre-defined options to select for Project ID # and Progress. Username will refer to the Feedback provider and he/she can enter thier feedback in the comments coloumn.
- The username is validated by java script "between 5 & 20 characters".
- The User E-mail is validated by java script "between 5 & 30 characters" with email.includes("@").
- Feedback can be given to improve the progress of the project and correct the errors and deficiencies.
- All feedback data is stored in a separate database according to a feedback ID, which can be filtered based on the project ID.

http://shell.hamk.fi/~bbcap23_21/Team_21/Dammika/dindex.php

---

## Database Tables

List the database tables that are part of your project. 

- Table 1 (Nart): Contact me database table.: Link to collected data ([github](https://github.com/eokinyo/Team_21/blob/main/dataBase/read_contactMe.php)) | (shell.hamk.fi)
- Table 2 (Elly): Signup table.: Link to collected data ([github](https://github.com/eokinyo/Team_21/blob/main/ellySwork/read.php)) | (shell.hamk.fi)
- Table 3 (Adam):  Storing visitor information.: Link to collected data ([github](https://github.com/eokinyo/Team_21/blob/main/dataBase/visitorLog.php)) | [(shell.hamk.fi)](http://shell.hamk.fi/~bbcap23_21/Team_21/dataBase/visitorLog.php)
- Table 4 (Dammak): Storing project Feedback data.: Link to collected data (github) | (shell.hamk.fi)

> Include the ER Diagram of the database. 

---

## Created Forms

List and describe any forms that have been created as part of your project. Include details about the purpose of each form and any validation logic.

- Form 1 (Nart): Contact form: Link to the related code file ([github](https://github.com/eokinyo/Team_21/blob/main/index.php)) | Link to the form (shell.hamk.fi). | Validations Applied
- Form 2: (Elly): Signup form: Link to the related code file ([github](https://github.com/eokinyo/Team_21/blob/main/ellySwork/signup.php)) | Link to the form (shell.hamk.fi).  | Validations Applied
- Form 3: (Adam): I didn't create any form, since the data that I work with is gathered automatically when you enter our site
- Form 4: (Dammika) Project Review Feedback Form: Link to the related code file ([github](https://github.com/eokinyo/Team_21/blob/Dammika/dindex.php)) | Link to the form (shell.hamk.fi). | Validations Applied

---

## Created Tables

List any tables that you have created in the project work

- https://github.com/eokinyo/Team_21/blob/main/jointWork/tables.md (all of our tables)

- Table 1 (Nart Kosova): Contact table | Link to the related code file ([github](https://github.com/eokinyo/Team_21/blob/main/dataBase/submit_contactMe.php)) | Link to the table (shell.hamk.fi).
- Table 2 (Elly): Signup table | Link to the related code file https://github.com/eokinyo/Team_21/blob/main/jointWork/tables.md | Link to the table (shell.hamk.fi).
- Table 3 (Adam): Visit table | Link to the related code file ([github](https://github.com/eokinyo/Team_21/blob/main/jointWork/tables.md)) | Link to the table ([shell.hamk.fi](http://shell.hamk.fi/pma/index.php?route=/sql&pos=0&db=wp_bbcap23_21&table=TABLE_VISIT)).
- Table 4 (Dammak): Project Feedback table | Link to the related code file [github](https://github.com/eokinyo/Team_21/blob/Dammika/process.php) | Link to the table (shell.hamk.fi).

---
