import sqlite3 as sql

from functools import wraps
from sqlite3.dbapi2 import connect
from flask import session,flash,redirect,url_for

connect_db ='hikeyuk.db' 

def register_user(user,email,fon,jantina,umur,password,passwordC,role):
  if (password==passwordC):
     with sql.connect(connect_db) as db:
       none=' '
       query="INSERT INTO user (username, passwordC, Age, email, noPhone, role, gender,pic,instagram,facebook,twitter) VALUES (?,?,?,?,?,?,?,?,?,?,?)"
       data=(user,passwordC,umur,email,fon,role,jantina,none,none,none,none)  
       result=db.execute(query,data)
       return(result)   
  else:
    x="Password Not Same"
    return(x)

def hikerReg(user,email,umur):
  with sql.connect(connect_db) as db:
    none=' '
    query="INSERT INTO hiker (email,username,age,comment,pic) VALUES (?,?,?,?,?)"
    data=(email,user,umur,none,none)
    result=db.execute(query,data)
    return(result)

def guiderReg(email):
  with sql.connect(connect_db) as db:
    none=' '
    query="INSERT INTO guider (emailGuider,PriceRate,Status,phone,pic,Comment_Other,MakDayang,BukitBendera,JandaBaik,TelagaSimpul,HarimauMenangis,Menderu) VALUES (?,?,?,?,?,?,?,?,?,?,?,?)"
    data=(email,none,none,none,none,none,none,none,none,none,none,none)
    result1=db.execute(query,data)
    return(result1)

def addProgram(username,phone,email,time,date,totMember,tempat,upah):
  with sql.connect(connect_db) as db:
    none=' '
    query="INSERT INTO program (emailProgram,noPhone,Location,NameId,Guider,Time,Date,TotalMember,Status,Comment_Order,upah) VALUES (?,?,?,?,?,?,?,?,?,?,?)"
    data=(email,phone,tempat,username,none,time,date,totMember,none,none,upah)
    result1=db.execute(query,data)
    return(result1)



def login(email,password,role):
  with sql.connect(connect_db)as db:
    qry='SELECT passwordC,email,role from user where passwordC=? and email=? and role=?'
    result=db.execute(qry,(password,email,role)).fetchone()
    return(result)


def user1():
  with sql.connect(connect_db) as db1:
    # email=
    qry='SELECT * from user where email=? ;'
    result=db1.execute(qry,(session['email'],))
    return(result)
    
def guiderDetail():
  with sql.connect(connect_db) as db1:
    # email=
    qry='SELECT user.username, user.Age, user.noPhone, user.role, user.pic, user.instagram, user.facebook, user.twitter, guider.Comment_Other, guider.PriceRate from user,guider where user.email=guider.emailGuider ;'
    result=db1.execute(qry)
    return(result)

def hiker1():
  with sql.connect(connect_db) as db1:
    # email=
    qry='SELECT * from hiker where email=? ;'
    result=db1.execute(qry,(session['email'],))
    return(result)

def cancel(id):
  with sql.connect(connect_db) as db1:
    # email=
    qry='DELETE FROM program where id=? ;'
    result=db1.execute(qry,id)
    return(result)

def guiderView():
  with sql.connect(connect_db) as db1:
    # email=
    qry='SELECT * from guider where emailGuider=? ;'
    result=db1.execute(qry,(session['email'],))
    return(result)

def programView():
  with sql.connect(connect_db) as db1:
    # email=
    qry='SELECT program.Id,program.emailProgram,program.noPhone,program.Location,program.Guider,program.NameId,program.Time,program.Date,program.TotalMember,program.Status,program.Comment_Order,user.username,user.noPhone from program,user where program.Guider=user.email and program.emailProgram=? and program.Status="accept" ;'
    result=db1.execute(qry,(session['email'],))
    return(result)

def viewGuiderProg():
  with sql.connect(connect_db) as db1:
    # email=
    qry='SELECT program.Id,program.emailProgram,program.NameId,program.noPhone,program.Location,program.Time,program.Date,program.TotalMember,program.Status,guider.emailGuider,guider.MakDayang,guider.BukitBendera,guider.JandaBaik,guider.TelagaSimpul,guider.HarimauMenangis,guider.Menderu from program,guider where program.Status="" ;'
    result=db1.execute(qry)
    return(result)

def bioHiker():
  with sql.connect(connect_db) as db:
    qry='SELECT user.username,user.Age,user.email,user.noPhone,user.role,user.gender,user.instagram,user.twitter,user.facebook,hiker.comment,hiker.pic FROM user,hiker WHERE user.email = hiker.email and user.email=?;'
    result=db.execute(qry,(session['email'],))
    return(result)

def userprogramview():
  with sql.connect(connect_db) as db:
    qry='SELECT program.Id,program.emailProgram,program.noPhone,program.Location,program.Guider,program.NameId,program.Time,program.Date,program.TotalMember,program.Status,program.Comment_Order,user.username,user.noPhone FROM user,program WHERE user.email = program.Guider and program.emailProgram=? and program.Status="Done";'
    result=db.execute(qry,(session['email'],))
    return(result)

def guiderprogramview():
  with sql.connect(connect_db) as db:
    qry='SELECT program.Id,program.emailProgram,program.noPhone,program.Location,program.Guider,program.NameId,program.Time,program.Date,program.TotalMember,program.Status,program.Comment_Order,user.username,user.noPhone FROM user,program WHERE user.email = program.Guider and program.Guider=? and program.Status="Done";'
    result=db.execute(qry,(session['email'],))
    return(result)


def updateUse(username,phone,umur,fb,ig,twitter,komen):
  with sql.connect(connect_db) as db:
    none=' '
    email=session['email']
    query="UPDATE user SET username=?, noPhone=? , Age=?, facebook=?, instagram=?, twitter=? WHERE email=?"
    data=(username,phone,umur,fb,ig,twitter,email,)
    query2="UPDATE hiker SET comment=? WHERE email=?"
    data2=(komen,email)
    result1=db.execute(query,data)
    result2=db.execute(query2,data2)
    return(result1,result2)

def guiderUpdate(username,phone,umur,price,fb,ig,twitter,komen,menderu,md,bb,ts,jm,hm,stat):
  with sql.connect(connect_db) as db:
    none=' '
    email=session['email']

    query="UPDATE user SET username=?, noPhone=? , Age=?, facebook=?, instagram=?, twitter=? WHERE email=?"
    data=(username,phone,umur,fb,ig,twitter,email,)
    query2="UPDATE guider SET PriceRate=?,Status=?,phone=?,Comment_Other=?,MakDayang=?,BukitBendera=?,JandaBaik=?,TelagaSimpul=?,HarimauMenangis=?,Menderu=?  WHERE emailGuider=?"
    data2=(price,stat,phone,komen,md,bb,jm,ts,hm,menderu,email)
    result1=db.execute(query,data)
    result2=db.execute(query2,data2)
    return(result1,result2)

def doneProg(Id):
  with sql.connect(connect_db) as db:
    query='UPDATE program SET Status="Done" WHERE Id=?;'
    data=(Id)
    result1=db.execute(query,data)
    return(result1)

def save_picture(data):
     with sql.connect(connect_db) as db:
       email=session['email']
       query="UPDATE user SET pic=? WHERE email=?"
       data1=(data,email)  
       result=db.execute(query,data1)
       return(result)   
       
def save_picture1(data):
     with sql.connect(connect_db) as db:
       email=session['email']
       query="UPDATE hiker SET pic=? WHERE email=?"
       data1=(data,email)  
       result=db.execute(query,data1)
       return(result)   

def save_picture2(data):
     with sql.connect(connect_db) as db:
       email=session['email']
       query="UPDATE guider SET pic=? WHERE emailGuider=?"
       data1=(data,email)  
       result=db.execute(query,data1)
       return(result)   



