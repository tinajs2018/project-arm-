#importing the vital libries
from flask import  Flask ,request,render_template
from datetime import date 

#defining the app
app=Flask(__name__)

#saving the date  in 2 different  formats 
# datetoday = date.today().strftime("%m_%d_%y")
# datetoday2 = date.today().strftime("%d_%B_%Y")

def replace_mutiple_newline(text):
    lines =text.split('\n')
    lines =[line for  line in lines if line.strip()]
    return len(lines)

#routing fuction
@app.route("/")
def home ():
    return render_template("home.html")

#ffunction for the new user
@app.route("/count",methods=["GET","POST"])
def count():
    text=request.form['text']
    words =len(text.split())
    paras =replace_mutiple_newline(text)

    text =text.replace("\r"," ")
    text =text.replace("\r"," ")
    chars=len(text)
    return render_template("home.html",words=words,paras=paras,chars=chars)


#main fuction that will run in flask

if __name__ =='__main__':
    app.run(debug=True)




