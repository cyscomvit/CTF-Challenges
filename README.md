# CTF-Challenges
Challenges for the Hands-on session for WaspCon. 

# Requirements -
1) Docker installed on the machine.
2) Privileges of the current user to run docker commands.

# Installation Steps -
1) Clone the repo - 
   `git clone https://github.com/owaspvit/CTF-Challenges.git`
3) Run the first docker (a mysql docker which the main docker will connect to for the SQL Injection challenges) by using the below command -
   `docker run — name mydb -p 3306:3306 -e MYSQL_ROOT_PASSWORD=password -d mysql:5.7`
3) Change into the directory which contains the Dockerfile.
   `cd CTF-Challenges`
4) Build the docker and run the docker using the below two commands -
   ```
   docker build -t ctf .
   docker run -itd -p 80:80 --name ctf --link mydb:mydb ctf
   ```
5) You should be able to access the challenges in the below way -
   ```
   Level 2 - http://localhost/level_2/
   Level 3 - http://localhost/level_3/
   Level 4 - http://localhost/level_4/
   Level 5 - http://localhost/level_5/
   Level 6 - http://localhost/level_6/
   Level 7 - http://localhost/level_7/
   Level 8 - http://localhost/level_8/
   Level 9 - http://localhost/level_9/
   Level 10 - http://localhost/level_10/
   Level 11 - http://localhost/level_11/needlesearch.php
   Level 12 - http://localhost/level_12/
   Level 13 - http://localhost/level_13/
   Level 14 - http://localhost/level_14/
   Level 15 - http://localhost/level_15/index.php
   ```
 6) Try getting the flags!
