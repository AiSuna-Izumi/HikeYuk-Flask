

import sqlite3 as sql
#from flask_login import user_loaded_from_header
from modelstu import *  #model tu pastikan sama dengan yg kita nk rujuk
#from user_authentication import *
from flask import Flask,render_template,request,redirect,jsonify
import os 
from os.path import join, dirname, realpath

# create the application object
app = Flask(__name__)
PIC_UPLOAD='static/pic'
app.config['PIC_UPLOAD']=PIC_UPLOAD
#only 3 files - controller, model, view(html files)

@app.route('/')
def home():
    return render_template('index.html')

@app.route('/hikerIn')
def hiker():
    rows=user1()
    bios=bioHiker()
    user=userprogramview()
    hiker=hiker1()
    program=programView()
    guider=guiderDetail()
    return render_template('hiker.php',rows=rows,guider=guider,hiker=hiker,program=program,bios=bios,user=user)

@app.route('/GuiderIn')
def guider():
    rows=user1()
    guiderBio=guiderView()
    vgp=viewGuiderProg()
    guiderProg=guiderprogramview()
    hiker=hiker1()
    program=programView()
    guider=guiderDetail()
    return render_template('guider.php',rows=rows,guider=guider,hiker=hiker,program=program,guiderBio=guiderBio,guiderProg=guiderProg,vgp=vgp)


@app.route('/login', methods=['POST'])
def dologin():
    email=request.form['Email']
    password=request.form['PasswordC']
    role=request.form['role']
    if (role=='Hiker'):
        if login(email,password,role):
            session['email']=email
            session['logged_in']=True
            session['role']=role
            return hiker()
            
    elif (role=='Guider'):
        if login(email,password,role):
            session['email']=email
            session['logged_in']=True
            session['role']=role
            return guider()

      
@app.route('/register',methods=['POST'])
def  insert_register():
    username=request.form['Name']
    email=request.form['Email']
    phone=request.form['noPhone']
    gender=request.form['gender']
    umur=request.form['umur']
    password=request.form['password']
    Cpassword=request.form['Cpassword']
    role=request.form['role']

    if register_user(username,email,phone,gender,umur,password,Cpassword,role):
        if(role=='Hiker'):
            if hikerReg(username,email,umur):
                return render_template('index.html')
        elif(role=='Guider'):
            if guiderReg(email):
                return render_template('index.html')
        else:
            flash('Wrong Password Or Email')
           
    else:
        flash('Wrong Password Or Email')
        return render_template('index.html',message='Invalid NoMatrik or Password!')
      
@app.route('/updateuser',methods=['POST'])
def  update_user():
    username=request.form['username']
    phone=request.form['phone']
    umur=request.form['age']
    fb=request.form['facebook']
    ig=request.form['instagram']
    twitter=request.form['twitter']
    komen=request.form['comment']
    email=session['email']
    if updateUse(username,phone,umur,fb,ig,twitter,komen):
        return hiker()
    else:
        flash('Cannot Update')
        return hiker()

@app.route('/doneProgram',methods=['POST'])
def  doneProgram():
    id=request.form['id']
    if doneProg(id):
        return hiker()
    else:
        flash('Cannot Update')
        return hiker()

@app.route('/regProgram',methods=['POST'])
def  register_program():
    username=request.form['username']
    phone=request.form['phone']
    email1=session['email']
    time=request.form['time']
    date=request.form['date']
    totMember=request.form['total']
    tempat=request.form['tempat']
    upah=request.form['price']
    if addProgram(username,phone,email1,time,date,totMember,tempat,upah):
        return hiker()
    else:
        flash('Cannot Update')
        return hiker()

@app.route('/picUpdate', methods=['POST'])
def updatePic():
    pic = request.files['picture']
    # data=pic.read()
    # render_pic=render_picture(data)
    if pic.filename !='':
        file_path=os.path.join(app.config['PIC_UPLOAD'], pic.filename)
        file_pic=os.path.join(pic.filename)
        pic.save(file_path)
        save_picture(file_pic)
        return hiker()

@app.route('/picUpdate1', methods=['POST'])
def updatePic1():
    pic = request.files['picture']
    # data=pic.read()
    # render_pic=render_picture(data)
    if pic.filename !='':
        file_path=os.path.join(app.config['PIC_UPLOAD'], pic.filename)
        file_pic=os.path.join(pic.filename)
        pic.save(file_path)
        save_picture(file_pic)
        return guider()
        
@app.route('/cancel', methods=['GET'])
def cancelProgram():
    id = request.args.get('id')
    if cancel(id):
        return hiker()
    else:
        flash('Cannot Update')
        return hiker()
        

@app.route('/bioPic', methods=['POST'])
def updatePicBio():
    pic = request.files['picture']
    # data=pic.read()
    # render_pic=render_picture(data)
    if pic.filename !='':
        file_path=os.path.join(app.config['PIC_UPLOAD'], pic.filename)
        file_pic=os.path.join(pic.filename)
        pic.save(file_path)
        save_picture1(file_pic)
        return hiker()

@app.route('/guiderPic', methods=['POST'])
def guiderPicBio():
    pic = request.files['picture']
    # data=pic.read()
    # render_pic=render_picture(data)
    if pic.filename !='':
        file_path=os.path.join(app.config['PIC_UPLOAD'], pic.filename)
        file_pic=os.path.join(pic.filename)
        pic.save(file_path)
        save_picture2(file_pic)
        return guider()
      
@app.route('/updateGuider',methods=['POST','GET'])
def  updateGuider():
    username=request.form['username']
    phone=request.form['phone']
    umur=request.form['age']
    price=request.form['price']
    fb=request.form['facebook']
    ig=request.form['instagram']
    twitter=request.form['twitter']
    komen=request.form['comment']
    if request.form.get('menderu'):
        menderu="checked"
    else:
        menderu="none"
             
    if request.form.get('md'):
        md="checked"
    else:
        md="none"  

    if request.form.get('bb'):
        bb="checked"
    else:
        bb="none"  
         
    if request.form.get('ts'):
        ts="checked"
    else:
        ts="none"  

    if request.form.get('jm'):
        jm="checked"
    else:
        jm="none" 

    if request.form.get('hm'):
        hm="checked"
    else:
        hm="none" 

    if request.form.get('status'):
        stat="checked"
    else:
        stat="none"

    guiderUpdate(username,phone,umur,price,fb,ig,twitter,komen,menderu,md,bb,ts,jm,hm,stat)
    return guider()
        

@app.route('/logout')
def logout():
    session['email'] = False
    session['role'] = False
    session['logged_in']=False
    return home()


# start the server using the run() method
if __name__ == "__main__":
     app.secret_key = "!mzo53678912489"
     app.run(debug=True,host='0.0.0.0', port=3000)
