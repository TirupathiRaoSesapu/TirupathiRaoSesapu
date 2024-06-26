#C:\Users\Gantasoft\AppData\Local\Programs\Python\Python312
print("Cpntent-Type:text/html")
print()
import cgi

print("<h1>Welcome to the Python</h1>")
print("<hr/>")
print("<h1>Using input tag</h1>")
print("<body bgcolor='red'>")

form = cgi.FieldStorage()

first_name=form.getvalue("fname")
last_name=form.getvalue("lname")
mobile_number=form.getvalue("number")
email=form.getvalue("email")
gender=form.getvalue("gender")
user_password = form.getvalue("password")

import mysql.connector

con=mysql.connector.connect(user='root', password='', host='localhost', database='tirupathiraosesapu')
cur=con.cursor()

cur.execute("insert into login_information values (%s,%s,%s,%s,%s,%s)",(first_name, last_name, gender, email, mobile_number, user_password))
cur=con.commit()

cur.close()
con.close()
print("<h3>Record Inserted succefully</h3>")
print("<a href=''>Click here to go back</a>")