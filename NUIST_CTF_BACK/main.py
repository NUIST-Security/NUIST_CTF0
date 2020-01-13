from flask import app
from flask import Flask
from flask import request
from flask import render_template

from sql import checkFlag,addUser,dbInit,loadflag,checkNo
app=Flask(__name__)

@app.route("/",methods=["GET"])
def index():
    if request.method=="GET":
        return render_template("index.html")
    return "halloworld"

@app.route("/commit",methods=["POST"])
def commit():
    if request.method=="GET":
        return render_template("index.html")
    elif request.method=="POST":
        no=request.form.get("no","")
        flag=request.form.get("flag","")
        print("no:{}\nflag:{}\n".format(no,flag))
        print(type(no))
        print(checkNo(no))
        res=checkNo(no)[0]
        if res==0:
            addUser(no)
        elif res==1:
            if checkFlag(no,flag):
                return "提交成功"+render_template("index.html")
            else:
                return "提交失败"+render_template("index.html")
        else:
            return "error"

if __name__ == "__main__":
    loadflag()
    dbInit()
    app.run(host="0.0.0.0",port=8080,debug=True)