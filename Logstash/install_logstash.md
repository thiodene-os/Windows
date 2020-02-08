# Install Logstash
# Source:
https://www.elastic.co/downloads/logstash
# Logstash Needs Java -> First check the JAVA Installation on Windows

1) Download Logstash
- From this link
https://artifacts.elastic.co/downloads/logstash/logstash-7.5.2.zip
# Unzip Logstash (in a Permanent Location)

2) Install Logstash
Add Logstash to PATH
- Click on the right side of the Window location of the Logstash and Copy the full path
- Now go to Environment variables and paste the full path in PATH:
C:\Users\ayiss\Documents\Software\logstash-7.5.2\bin
- Open PROMPT go to Logstash config folder and type:
logstash -f logstash-sample.conf
- It should be successful


