import sqlite3
import time
DATABASE="./data.db"

flagList={}

def loadflag():
    with open("./flag.txt") as f:
        lines=f.readlines()
        for line in lines:
            l=line.split(" ")
            k=l[0]
            v=int(l[1])
            flagList[k]=v
    print("flag load complete!")

def dbInit():
    sql="""
    create table if not exists users (
        id integer primary key,
        no text unique,
        score ineteger
    )
    """
    conn=sqlite3.connect(DATABASE)
    conn.execute(sql)
    sql="""
       create table if not exists records(
        id integer primary key,
        no text,
        flag text,
        time text,
        FOREIGN KEY(no) REFERENCES users(no)
    );
    """
    conn.execute(sql)
    conn.commit()
    conn.close()

def checkNo(no):
    conn=sqlite3.connect(DATABASE)
    res=conn.execute("select count(*) from users where no=?;",(no,))
    ret=res.fetchone()
    conn.close()
    return ret

def checkFlag(no,flag):
    conn=sqlite3.connect(DATABASE)
    score=flagList.get(flag,0)
    if score==0:
        return False
    conn.execute("""
    update users set score=score+? where no=?
    """,(score,no))
    conn.commit()
    conn.close()
    addRecord(no,flag)
    return True

def addRecord(no,flag):
    conn=sqlite3.connect(DATABASE)
    conn.execute("insert into records (no,flag,time) values (?,?,?)",(no,flag,time.strftime("%Y-%m-%d %H:%M:%S")))
    conn.commit()
    conn.close()

def addUser(no):
    conn=sqlite3.connect(DATABASE)
    conn.execute("insert into users (no,score) values (?,0)",(no,))
    conn.commit()
    conn.close()



    

