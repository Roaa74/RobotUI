# RobotUI
Robot movement controls page done with HTML, PHP, and javascript.

This code uses XAMPP to host the database and the PHP files used in the control page 
in this instance the database is named "Movement" and the Table is named "robot"
The table has 6 columns, ID, Forward, Left, Stop, Right, Backwards.
With each button click an HTTP request is sent to (in this case a locally hosted file at [localhost/aura/"filename"]) 
And then an entry is add to the MySQL database mentioned above.  Additionally, with each button click
the canvas shows the direction as a 2D map. [Task 2]
![image](https://github.com/Roaa74/RobotUI/assets/140811326/dbb9b291-b296-417d-9d76-136e46741b3a)
![image](https://github.com/Roaa74/RobotUI/assets/140811326/98430e12-39fb-423d-ba83-2902a0a62127)
