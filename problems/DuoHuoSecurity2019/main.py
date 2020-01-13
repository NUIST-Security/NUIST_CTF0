import sqlite3
from os import urandom
from random import choice
from flask import Flask
from flask import session
from flask import request
from flask import url_for
from flask import redirect
from flask import render_template
from flask import render_template_string

app=Flask(__name__,static_folder="./",template_folder="./")
app.config["SECRET_KEY"]=urandom(24)

DATABASE="./data.db"
times=0
target=1000

@app.route("/",methods=["GET"])
def index():
    global times
    if session.get("id",None)==None:
        times=0
    return render_template("index.html")

@app.route("/flag")
def flag():
    global times
    times=0
    return session.get("id","You are wanting peach???")

@app.route("/click")
def click():
    global times,target
    times+=1
    if (session.get("id",None)!=None):
        return session.get("id")
    if (times==target):
        flag=generateFlag()
        session["id"]=flag
        saveFlag(flag)
        return redirect(url_for("flag"))
    return render_template("index.html")
    
@app.errorhandler(Exception)
def error(error):
    return "What are you doing?!",404

def DBinit():
    sqlInit="""
    create table if not exists record(
        id INTEGER PRIMARY KEY AUTOINCREMENT,
        flag TEXT NOT NULL
    );
    """
    conn=sqlite3.connect(DATABASE)
    cursor=conn.cursor()
    cursor.execute(sqlInit)
    conn.commit()
    return conn

def generateFlag():
    flag=""
    for i in range(26):
        flag+=choice("ABCDEFGHIJKLMNOPQRSTUVWYZ0123456789_#@*&!")
    return "flag{"+flag+"}"

def saveFlag(flag):
    conn=DBinit()
    cursor=conn.cursor()
    cursor.execute("insert into record (flag) values (?)",(flag,))
    conn.commit()
    conn.close()


if __name__ == "__main__":
    # app.run(host="127.0.0.1",port="80",debug=True)
    app.run(host="0.0.0.0",port="27351")
