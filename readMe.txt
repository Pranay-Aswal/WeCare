
WeCARE.com 
-----------
An interactive forum for all the pet and plant lovers out there that connects you with caring individuals that are ready to take care of your plants or pets when you are away. Additionally we provide you with the ability to post queries or suggestions. You can also follow pet/plant caring tips and purchase the accessories you need for your pet or plant.

Dependencies :-
You need an apache server like XAMPP, a cross-platform web server solution to host this website and phpmyadmin to connect the backend database to frontend.
Twillio API, NodeJS and composer are required for automated text message simulation.

Execution :-
- Place the php files in XAMPP/htdocs local system file.
- Open XAMPP server and run Apache, mySQL service modules
- Open localhost/phpmyadmin in your desired browser and create a database with name 'acbs'.
- Import the attached sql file to the database you created
- Open SQL in acbs database and pass the below mentioned query to connect the database to the website.
$ GRANT ALL ON acbs.* TO 'acbs'@'localhost' IDENTIFIED BY 'pass';
GRANT ALL ON acbs.* TO 'acbs'@'127.0.0.1' IDENTIFIED BY 'pass'; $
- Now open localhost/wecare.com in new tab which will direct you to an interactive home page of our website.
- Go through the report attached to know more about the features implemented in the website.
- Changes can be made by modifying the php files using text editors like Sublime text, Atom, Visual Studio etc.
- Make a new account on twilio, activate a phone number that can send sms's. Now, open cmd and configure it to point to the htdocs directory and install configure api in your local system and integrate the automation code with your website.

DEVELOPERS :-
Datta Bezawada - 1910110128
Pranay Aswal - 1910110281
Amit Peechara - 1910110053
KSA Pradyumn - 1910110209
Chekuri Varma - 1910110119


