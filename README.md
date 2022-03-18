# Books-R-Us
About Books-R-Us

Business Plan

Books-R-Us bookstore is home to diverse titles from all over Africa. They stock a rich collection of both traditionally published and self-published literature from all over the continent. A lot of Africans want to be more immersed in their culture and patronize made in Africa products, including books, to know more about their roots. The goal of the Books-R-Us website is to make African literature, either for leisure or academic purposes, more accessible.

Value Proposition

Value Proposition refers to the fundamental need that your company is trying to fulfil for its customers; that is, why your company exists. Simply put, what value are you providing to your customers? Books-R- Us provides an online shopping website that offers and delivers African hardcopy books to African countries. They deliver the books directly to the recipients, considering the comfort of the customer, as the books are available to them at the click of a button. This website would allow you to not only find books written by African authors easily, but also give reviews. The main aim of this is to promote the art of African storytelling.

Revenue Stream Model

Our primary source of revenue would be the low-profit margin on the sales of books. The available books will be advertised on the website’s homepage and social media pages for users to purchase.


System Design

High-Level Systems Overview and Architecture
The Books-R-Us e-commerce application will be built based on the Model-View-Controller Framework.
Model-View-Controller
Model–View–Controller is a software design pattern used for developing user interfaces that divides the related program logic into three interconnected elements. Below are the elements;
• Model Layer: The model manages the behaviour and data of the application domain, responds to requests for information about its state (usually from the view), and responds to instructions to change the state (usually from the controller). It provides access to the state of the system, allows access to the system’s functionalities and can notify the view that its state has changed. The use of the model will be evident on our website’s pages like the homepage. The model responds to requests, for instance, in the case a user is asked to be sent to a products page on the homepage, the model will do the redirecting. The model layer will store information on our various books. It will be implemented using phpMyAdmin and MySQL as its database server.
• View Layer: View refers to the part of the architecture that handles the graphical user interface. It manages the objects and presentation of the said objects that are visible to the user. It provides visual access to the website and allows users to see what is on there and interact with it. It gives user input, which is sent to the controller, then displays output from the model. It will show the user the results of their HTTP requests. After clicking a link, the view sends the request to the controller, which then forwards it to the model. The model carries out the request and returns the result to the controller, which then delivers the results to the user via the view.
HTML, CSS and JavaScript will be used to design the user interface of the pages.
• Controller Layer: The Controller refers to the part of the MVC architecture that receives and processes user requests. It acts as a mediator between the Model and the View. The Controller receives user requests from the View and sends the request to the Model to perform the necessary operations and then returns the result to the View to be displayed. The Controller communicates seamlessly with the View and Model to ensure a smooth interaction with the website. PHP and JavaScript will be used to
process all incoming requests from users.


Implementation

The Books-R-Us ecommerce platform was developed using the incremental model of software development. The requirements for the project were divided into smaller projects and developed individually; one after the other. This allowed for changes to be easily made at each iteration. To produce an efficient and well-functioning product, functional programming was utilized in building the platform. It enabled us make changes easily to various functions and overall functionality of the platform. Frameworks, APIs, classes, tools and libraries were also included in the development of the platform. Hosting of the platform was done on Microsoft Azure.


Technologies Used

For the project, we used various programming languages, including;
- HTML – HTML is the abbreviated form of Hypertext Markup Language. It is a programming language used in the creation of documents that are displayed in web browsers. HTML is one of the languages the team used in developing the front-end of the platform.
- CSS – CSS stands for Cascading Style Sheet. CSS is the programming language utilized in designing HTML documents. CSS enables the use of fonts, colours and layouts on web pages. It was also used in developing the front-end. Both inline and external CSS was utilized for this project. It was used in designing the login and registration pages, the shop page and all the pages with exceptional designs.
- JavaScript – JavaScript handles the interactivity of the web pages. It is a front-end programming language. Alerts, button responses and form validation were made possible through JavaScript.
- PHP – Hypertext Preprocessor is the full meaning of PHP. It is a server-side programming language. It is utilized in backend development. PHP is responsible for interaction with the database; mainly inputting and retrieving data.
- SQL – SQL is the abbreviated form of Structured Query Language. SQL was utilized in managing data in the relational database management system. Creating and populating the database was done with
SQL. In creating the database, 12 tables were needed to store all the information that will be on the project.


Frameworks

- Bootstrap – Bootstrap is an open-source front-end framework. It contains CSS, JavaScript and HTML based templates for responsive web development. Bootstrap helped us to get access to components that helped in creating elements like the navbar, the homepage slider/ carousel, login and registration cards, products display page, etc.

Libraries

- jQuery – jQuery is an open-source JavaScript library. It contains features such as HTML manipulation, CSS manipulation, effects and animations, HTML events methods and AJAX.

Tools

- PhpMyAdmin – It is an open-source administration tool used for MySQL. It was used to easily create the database for the project.
- GitHub – GitHub is an open-source code hosting platform. The team utilized it to enable easy collaboration. All codes were shared in one folder which was accessible to every team member.
- Visual Studio Code – Visual Studio Code is a cross-platform integrated development environment. Its main purpose is code writing and editing. It easily integrates different programming languages. It also has a live share feature which enables programmers to collaborate and edit code live.
- Atom – Atom is also an integrated development environment. It is an open-source and cross-platform text editor developed by GitHub.
- Sublime Text – It is also an integrated development environment that was used to edit the codes for the project.
Application Programming Interface (API)
- PayPal API – Paypal is an online payment system. Its API allows for the system to be integrated into various web applications to handle payments. The PayPal JavaScript SDK was used to integrate payment to allow users to make the payment on products a user wants to purchase.
- Paystack API – Paystack is another online payment system. Its API also allows the books-r-us ecommerce website to accept payment of its books.
